<?php
require_once(getabspath("classes/cipherer.php"));
/**
 * Class for login page 
 *
 */
class LoginPage extends RunnerPage 
{
	public $auditObj = null;
	
	// autologin on session expired
	public $notRedirect = false;
		
	public $rememberPassword = 0;
		
	public $var_pUsername = "";	
	public $var_pPassword = "";	
	public $action = "";
	
	public $redirectAfterLogin = false;
	
	protected $myurl = "";
	
	public $fromFacebook = false;
	public $fbConnected;
	
	protected $loggedByCredentials = false;
	public $messageType = MESSAGE_ERROR;
	
	/*** 2 factorauth*/
	public $twoFactAuth = false;
	public $SMSCode;
	
	protected $SMSCodeSent;
	protected $phoneNumber;
	protected $pnoneNotInQuery;
	protected $skipSecondStep;
	/***/
	
	/**
	 * @constructor
	 */
	function __construct(&$params) 
	{
		// call parent constructor
		parent::__construct($params);
		

		$this->pSet = new ProjectSettings("logins", $this->pageType);
		$this->pSetEdit = $this->pSet;
		$this->pSetSearch = new ProjectSettings($this->tName, PAGE_SEARCH); 
		$this->auditObj = GetAuditObject();
		
		$this->formBricks["header"] = "loginheader";
		$this->formBricks["footer"] = array( "loginbuttons", "facebookbutton" );
		$this->assignFormFooterAndHeaderBricks( true );
		
		$this->initMyURL();
		$this->initCredentials();
		$this->body = array( "begin" =>"", "end" => "" );
	}		
	
	/**
	 * Set the 'connection' property
	 */
	protected function setTableConnection()
	{
		global $cman;
		$this->connection = $cman->getForLogin();		
	}	

	/**
	 * Set the 'cipherer' property
	 */
	protected function assignCipherer()
	{
		$this->cipherer = RunnerCipherer::getForLogin();
	}
	
	/**
	 *
	 */
	public function setSessionVariables()
	{
		parent::setSessionVariables();	
		$_SESSION["fromFacebook"] = false;
	}
	
	/** 
	 *
	 */
	public function process()
	{
		global $globalEvents;
		
		if( $globalEvents->exists("BeforeProcessLogin") )
			$globalEvents->BeforeProcessLogin( $this );
	
		if( $this->action == "resendCode" && $this->isFirstAuthStepSuccessful() )
		{
			$this->SMSCodeSent = $this->sendCodeBySMS();
			$this->reportFirstAuthStepResult( true );
			return;
		}
	
		if( $this->action == "verifyCode" && $this->isFirstAuthStepSuccessful() )
		{
			$verified = $this->doVerifySMSCode( $this->SMSCode );
			$this->reportSecondAuthStepResult( $verified );	
			return;
		}

		if( $this->action == "logout" )
		{
			$this->Logout( true );
			return;
		}	
			
		$this->refineMessage();
			
		if( $this->isActionSubmit()  )
		{
			if( $this->isLoginAccessAllowed() ) 
			{
				$this->setCredentialsCookie( $this->var_pUsername, $this->var_pPassword );
				$this->loggedByCredentials = $this->doLoginRoutine();
			}
			
			if( $this->twoFactAuth && $this->mode != LOGIN_EMBEDED )
			{
				$this->reportFirstAuthStepResult( $this->loggedByCredentials );
				return;
			}
			
			if( $this->loggedByCredentials && $this->mode == LOGIN_SIMPLE )
			{					
				$this->redirectAfterSuccessfulLogin();
				return;
			}				
			
			if( $this->mode == LOGIN_POPUP || $this->mode == LOGIN_EMBEDED && !$this->twoFactAuth ) 
			{		
				$this->reportLogStatus( $this->loggedByCredentials );
				return;
			}
		}			
		
		$_SESSION["MyURL"] = $this->myurl;
		
			
		if( $this->mode != LOGIN_EMBEDED && $this->captchaExists() ) 
			$this->displayCaptcha();

		$this->addCommonJs();
		$this->addButtonHandlers();

		$this->fillSetCntrlMaps();
		$this->doCommonAssignments();

		$this->showPage();
	}

	protected function isActionSubmit()
 	{
  		return $this->action == "Login";
 	}
	
	/**
	 * @return Boolean
	 */
	protected function doLoginRoutine()
	{
		if( !$this->callBeforeLoginEvent() )
			return false;
				
		$logged = $this->LogIn( $this->var_pUsername, $this->var_pPassword );
		
		if( !$logged )
		{
			$this->callAfterUnsuccessfulLoginEvent();
			return false;
		}
	
		if( $this->twoFactAuth )
		{
			$this->SMSCodeSent = $this->sendCodeBySMS();
			
			if( $this->SMSCodeSent && $this->skipSecondStep )
			{
				// phone filed value is empty or not a valid phone number  make a user logged in
				$this->doVerifySMSCode( "" );
			}
		}
		else
			$this->callAfterSuccessfulLoginEvent();

		return true;
	}
	
	/**
	 * @return Boolean
	 */
	protected function isFirstAuthStepSuccessful()
	{
		if( !$this->twoFactAuth )
			return false;
		
		if( isset( $_SESSION["firsAuthStepData"] ) )
			return true;
			
		return false;
	}
	
	/**
	 * @param Boolean logged
	 */
	protected function reportFirstAuthStepResult( $logged )
	{
		if( $this->skipSecondStep )
		{
			$this->reportSecondAuthStepResult( true );
			exit();
		}
		
		$returnJSON = array();
		
		$returnJSON["message"] = $this->message;
		$returnJSON["success"] = $logged && $this->SMSCodeSent;
		$returnJSON["logged"] = $logged;		
		if( $logged ) 
		{			
			$parts = $this->getSecondStepMarkupBlocks( $this->SMSCodeSent );
			$returnJSON["loginfields"] = $parts["loginfields"];
			$returnJSON["loginbuttons"] = $parts["loginbuttons"];
		}
		
		echo printJSON( $returnJSON );
		exit();		
	}
	
	/**
	 * @param Boolean codeSent
	 */
	protected function doAssignForSecondAuthStep( $codeSent )
	{
		$this->xt->assign("id", $this->id);
		$this->xt->assign("user_code", true);
		if( !$codeSent ) 
			$this->xt->assign("userCodeFieldClass", "rnr-hiddenblock");	
	
		$this->xt->assign("user_code_buttons", true);
		if( !$codeSent ) 
			$this->xt->assign("verifyButtonClass", "rnr-invisible-button");
			
		if( $this->pnoneNotInQuery )
			$this->xt->assign("resendButtonClass", "rnr-invisible-button");
	}
	
	/**
	 * @param Boolean codeSent
	 * @return Array
	 */
	protected function getSecondStepMarkupBlocks( $codeSent )
	{
		$this->doAssignForSecondAuthStep( $codeSent );
		
		$parts = array();
		$parts["loginfields"] = $this->xt->fetch_loaded("user_code");
		$parts["loginbuttons"] = $this->xt->fetch_loaded("user_code_buttons");	
		return $parts;
	}
	
	/**
	 * @return String
	 */
	protected function getMaskedPhone()
	{
		$number = $this->getPhoneNumber();
		$smsMaskLength = GetGlobalData("smsMaskLength", 4);
		
		$astrixStringLength = strlen( $number ) - $smsMaskLength;
		$number = preg_replace( "/[^+]/", "*", substr($number, 0, $astrixStringLength) ).substr($number, $astrixStringLength);
		
		return $number;
	}
	
	/**
	 * @return Boolean
	 */
	protected function checkPhoneFieldInQuery()
	{
		global $cLoginTable;
		
		$phoneField = GetGlobalData("strPhoneField", "");
		if( !array_key_exists( $phoneField, $_SESSION["firsAuthStepData"] ) )
		{	
			$this->pnoneNotInQuery = true;
			$this->message = "Two factor authorization is not possible."
				." Add <b>".$phoneField."</b> field to the <b>".$cLoginTable."</b> table SQL query.";
				
			return false;
		}
		
		return true;
	}

	/**
	 * @return Boolean
	 */
	protected function sendCodeBySMS()
	{	
		if( !$this->checkPhoneFieldInQuery() )
			return false;
		
		$number = $this->getPhoneNumber();		
		if( strlen( $number ) < 5 )
		{
			// phone filed value is empty or not a valid phone number, make a user logged in
			$this->skipSecondStep = true;
			
			if( $this->mode == LOGIN_EMBEDED )
				$this->pageData["twoStepEmbedRedirect"] = $this->getLoggedInRedirectUrl();
			
			return true;
		}
		
		$smsCode = generateUserCode( GetGlobalData("smsCodeLength", 6) );
		$_SESSION["smsCode"] = $smsCode;
		//$_SESSION["smsCode"] = "123456"; //Debug
		
		$smsText = myfile_get_contents( getabspath("email/".mlang_getcurrentlang()."/twofactorauth.txt"), "r");
		$smsText = str_replace( "%code%", $smsCode, $smsText );
		
		//$ret = array();  //Debug
		//$ret["success"] = true; //Debug
		$ret = runner_sms( $number, $smsText );
		if( !$ret["success"] )
			$this->message = "Error sending message"." ".$ret["error"];
		else
		{
			$this->messageType = MESSAGE_INFO;
			$this->message = str_replace( "%phone%", $this->getMaskedPhone(), "A text message with your code has been sent to: %phone%" );
		}
		
		return $ret["success"];
	}
	
	/**
	 * @param String code
	 * @return Boolean
	 */
	protected function doVerifySMSCode( $code )
	{
		global $globalEvents, $cUserNameField, $cPasswordField, $cDisplayNameField;
		
		if( !$this->twoFactAuth )
			return;
		
		if( $this->skipSecondStep )
			$verified = true;
		else
			$verified = $this->verifySMSCode( $code );
		
		$data = $_SESSION["firsAuthStepData"];
		$this->var_pUsername = $data[ $cUserNameField ];
		$this->var_pPassword = $data[ $cPasswordField ];
		
		if( $verified )
		{
			unset( $_SESSION["smsCode"] );
			unset( $_SESSION["firsAuthStepData"] );
			
			$_SESSION["UserID"] = $this->var_pUsername;
			$userName = $data[ $cDisplayNameField ] != '' ? $data[ $cDisplayNameField ] : $this->var_pUsername;
			$_SESSION["UserName"] = runner_htmlspecialchars( $userName );
			$_SESSION["AccessLevel"] = ACCESS_LEVEL_USER;
			
			SetAuthSessionData( $this->var_pUsername, $data, false, $this->var_pPassword, $this, true );
		}
		else
		{
			$this->callAfterUnsuccessfulLoginEvent();		
		}
		
		return $verified;
	}
	
	/**
	 * @param String code
	 * @return Boolean
	 */
	protected function verifySMSCode( $code )
	{
		return $code == $_SESSION["smsCode"];
	}

	/**
	 * @param Boolean
	 */
	protected function reportSecondAuthStepResult( $verified )
	{
		$returnJSON = array();
		$returnJSON["success"] = $verified;
		
		$returnJSON["secondStepSkipped"] = $this->skipSecondStep;
		
		if( !$verified )
			$returnJSON["message"] = "Wrong code";
		else
		{		
			if( $this->mode == LOGIN_POPUP )
				$returnJSON["message"] = "You have successfully logged in.";
			
			$returnJSON["redirect"] = $this->getLoggedInRedirectUrl();		
			
			if( $this->notRedirect ) 
			{
				$this->body["begin"] .= "<input type=hidden id='notRedirect' value=1>";
				$this->xt->assign("continuebutton_attrs", 'href="#" id="continueButton"');
				$this->xt->assign("continue_button", true);
				$returnJSON["loginbuttons"] = $this->xt->fetch_loaded("continue_button");
			}
		}
		
		echo printJSON( $returnJSON );
		exit();			
	}
	
	/**
	 * @return String
	 */
	protected function getLoggedInRedirectUrl()
	{
		if( $this->myurl )
			return $this->myurl. (strpos($this->myurl, '?') !== FALSE ? '&a=login' : '?a=login');
		
		return GetTableLink("menu");	
	}
	
	/**
	 * @return String
	 */
	protected function getPhoneNumber()
	{	
		if( $this->phoneNumber )
			return $this->phoneNumber;
		
		if( isset( $_SESSION["firsAuthStepData"] ) )
			$data = $_SESSION["firsAuthStepData"];
		else
			$data = $this->getUserData( $this->var_pUsername, $this->var_pPassword );
		
		if( !$data )
			return "";

		$number = $data[ GetGlobalData("strPhoneField", "") ];
		$number = preg_replace("/[^\+\d]/", "", $number);

		if( $number[0] == "+" && strlen( $number ) > 10 )
			$this->phoneNumber = $number;
		else
			$this->phoneNumber = GetGlobalData("strCounryCode", "").$number;
		
		return $this->phoneNumber;
	}
	
	/**
	 *
	 */
	protected function refineMessage()
	{
		if( $this->message == "expired" )
			$this->message = "Your session has expired." . "Please login again.";
		elseif( $this->message == "invalidlogin" )
			$this->message = "Invalid Login";
		elseif( $this->message == "loginblocked" && strlen( $_SESSION["loginBlockMessage"] ) )
			$this->message = $_SESSION["loginBlockMessage"];
		 
		if( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT && $this->message )
		{
			$this->xt->assign("message_class", "alert-danger" );
		} 
		
		unset( $_SESSION["loginBlockMessage"] );
	}
	
	/**
	 *
	 */
	protected function initMyURL()
	{
		$this->myurl = @$_SESSION["MyURL"];

		if( $this->redirectAfterLogin || $this->mode == LOGIN_POPUP || $this->action == "Login" || $this->twoFactAuth ) {
			// save $this->myurl value
		}
		else
		{
			//	discard. Go to menu.php after login
			$this->myurl = "";	
		}
	}
	
	/**
	 * run AfterSuccessfulLogin event
	 */
	protected function callAfterSuccessfulLoginEvent()
	{
		//login succeccful
		// dummy
		// if login method is not AD then ASL event fires in SetAuthSessionData
	}
	
	/**
	 *
	 */
	protected function redirectAfterSuccessfulLogin()
	{
		unset( $_SESSION["MyURL"] );
		
		if( $this->myurl )
			header("Location: ".$this->myurl);
		else
			HeaderRedirect("menu");
	}
	
	/**
	 * Run AfterUnsuccessfulLogin event
	 */
	public function callAfterUnsuccessfulLoginEvent()
	{
		global $globalEvents;
		
		$message = "";
		
		//invalide login
		if( $globalEvents->exists("AfterUnsuccessfulLogin") )
			$globalEvents->AfterUnsuccessfulLogin( $this->var_pUsername, $this->var_pPassword, $message, $this );
		
		if( $message == "" && !$this->message )
			$this->message = "Invalid Login";
		else if( $message ) 
			$this->message = $message;	
	}
	
	
	/**
	 * @param Boolean logged
	 */
	protected function reportLogStatus( $logged )
	{
		$returnJSON = array();
		
		$returnJSON["success"] = $logged;
		
		if( $this->message )
		{
			$returnJSON['message'] = $this->message;
		}
		elseif ($logged)
		{
			$returnJSON['redirect'] = $this->getLoggedInRedirectUrl();		
		}
		
		if( $this->mode == LOGIN_EMBEDED )
		{
			if( strlen( $_SESSION["loginBlockMessage"] ) )
				$returnJSON['messageParam'] = "loginblocked";
			else
				$returnJSON['messageParam'] = "invalidlogin";
		}
		
		echo printJSON($returnJSON);
		exit();	
	}
	
	
	/**
	 * @return Boolean
	 */
	protected function isLoginAccessAllowed()
	{
		if( !$this->auditObj )
			return true;
			
		if( !$this->auditObj->LoginAccess() )
			return true;
			
		$this->message = mysprintf( "Access denied for %s minutes", array($this->auditObj->LoginAccess()) );
		$_SESSION["loginBlockMessage"] = $this->message;
		
		return false;
	}
	
	/**
	 * run before login event
	 * @return Boolean
	 */
	protected function callBeforeLoginEvent()
	{
		global $globalEvents;
		
		if( !$globalEvents->exists("BeforeLogin") )	
			return true;
			
		$message = "";
		$ret = $globalEvents->BeforeLogin( $this->var_pUsername, $this->var_pPassword, $message, $this );

		if( $message )
			$this->message = $message;
		
		if( !$ret )
		{
			$this->callAfterUnsuccessfulLoginEvent();
		}
		
		return $ret;
	}
	

	/**
	 * @param String username
	 */
	public function doAfterUnsuccessfulLog( $username )
	{
		if( $this->auditObj )
		{
			$this->auditObj->LogLoginFailed( $username );
			$this->auditObj->LoginUnsuccessful( $username );
		}	
	}

	/**
	 * @param String username
	 * @param String password
	 * @return Boolean
	 */
	public function checkUsernamePassword( $username, $password )
	{
		global $globalSettings, $caseInsensitiveUsername;
		
		if( $globalSettings["nLoginMethod"] == SECURITY_NONE )
			return false;
			
		if( $globalSettings["nLoginMethod"] == SECURITY_HARDCODED )
		{
			return $password == $globalSettings["Password"] && ( $username == $globalSettings["UserName"] 
				|| $caseInsensitiveUsername && strtoupper( $username ) == strtoupper( $globalSettings["UserName"] ) );
		}		
		
		if( $globalSettings["nLoginMethod"] == SECURITY_TABLE )
		{
			$data = $this->getUserData( $username, $password );
			return $data ? true : false;
		}
		
		return false;
	}
	
	/**
	 * @param String username
	 * @param String password
	 * @param Boolean skipPasswordCheck
	 */
	public function getUserData( $username, $password, $skipPasswordCheck = false )
	{
		global $cPasswordField, $cDisplayNameField, $globalSettings, $caseInsensitiveUsername;

		if( $globalSettings["nLoginMethod"] != SECURITY_TABLE )
			return false;

		$loginSet = ProjectSettings::getForLogin();
		$cipherer = RunnerCipherer::getForLogin( $loginSet );
		$bcrypted = ( $globalSettings["bEncryptPasswords"] && $globalSettings["nEncryptPasswordMethod"] == 0 );
		$originalPassword = $password;
		
		$strSQL = $this->getSelectSQL( $skipPasswordCheck || $bcrypted, $username, $password, $loginSet, $cipherer );	
	 	$data = $cipherer->DecryptFetchedArray( $this->connection->query( $strSQL )->fetchAssoc() );
		if ( $data && $skipPasswordCheck || $this->verifyUserFetchedData($bcrypted, $data, $username, $password, $originalPassword) )
		{
			return $data;
		}
		
		return false;
	}
	
	/**
	 * Login method
	 * @param String pUsername
	 * @param String pPassword
	 * @return Boolean
	 */
	public function LogIn( $pUsername, $pPassword, $skipPasswordCheck = false, $fireEvents = true )
	{
		if( !$this->checkCaptcha() )
			return false;

		// username and password are stored in the database
		global $cPasswordField, $cDisplayNameField;
		
		$strUsername = (string)$pUsername;
		$strPassword = (string)$pPassword;
		
		$data = $this->getUserData( $pUsername, $pPassword, $skipPasswordCheck );
		if( $data )
		{
			$pDisplayUsername = $data[ $cDisplayNameField ] != '' ? $data[ $cDisplayNameField ] : $strUsername;
			DoLogin( false, $pUsername, $pDisplayUsername, "", ACCESS_LEVEL_USER, $pPassword, $this );
			
			if( !$this->twoFactAuth )
				SetAuthSessionData( $pUsername, $data, false, $pPassword, $this, $fireEvents );
			else
				$_SESSION["firsAuthStepData"] = $data;
			
			return true;				
		}
		
		if( $fireEvents )
			$this->doAfterUnsuccessfulLog( $pUsername );
		return false;		
	}
	
	/**
	 * @return Boolean
	 */
	protected function verifyUserFetchedData( $bcrypted, $data, $strUsername, $processedPass, $rawPass )
	{
		global $cUserNameField, $cPasswordField;
		
		if( !$data )
			return false;
		
		if( $bcrypted )
			return passwordVerify( $rawPass, $data[ $cPasswordField ] );

		return $this->pSet->getCaseSensitiveUsername( @$data[ $cUserNameField ] ) == $this->pSet->getCaseSensitiveUsername( $strUsername ) 
				&& @$data[ $cPasswordField ] == $processedPass;
	}
	
	/**
	 * @return String
	 */
	protected function getSelectSQL( $skipPasswordCheck, $strUsername, $strPassword, $loginSet, $cipherer )
	{
		global $cUserNameFieldType, $cPasswordFieldType, $cUserNameField, $cPasswordField;
		
		$passWhere = "";
		$activateWhere = "";
		
		if( !$skipPasswordCheck )
		{	
			$strPassword = $this->getSqlPreparedLoginTableValue( $strPassword, $cPasswordField, $cPasswordFieldType, $cipherer );
			if( $loginSet )
				$passWhere = " and ".$this->getFieldSQLDecrypt($cPasswordField)."=".$strPassword;
			else
				$passWhere = " and ".$this->connection->addFieldWrappers($cPasswordField)."=".$strPassword;
		}
		
			
		$strUsername = $this->getSqlPreparedLoginTableValue( $strUsername, $cUserNameField, $cUserNameFieldType, $cipherer );
		
		if( $loginSet )
		{
			if( !$this->pSet->isCaseInsensitiveUsername() ) 
			{
				$where = $this->getFieldSQLDecrypt($cUserNameField)."=".$strUsername.$passWhere;
			} 
			else 
			{
				$where = $this->connection->upper( $this->getFieldSQLDecrypt($cUserNameField) ).
					"=".$this->pSet->getCaseSensitiveUsername($strUsername).$passWhere;
			}
			
			$where.= $activateWhere;
			
			// don't remove $tempSQLQuery. PHP 5.0 compatibility
			
			$tempSQLQuery = $loginSet->GetTableData(".sqlquery");
			return $tempSQLQuery->buildSQL_default( array( $where ) );
		}
		

		return "select * from ".$this->connection->addTableWrappers("logins")
				." where ".$this->connection->addFieldWrappers($cUserNameField)."=".$strUsername.$passWhere.$activateWhere;				
	}
	
	/**
	 * Logout
	 * @param Boolean redirectToLogin
	 */
	public function Logout($redirectToLogin = false) 
	{
		global $globalEvents;
		
		if( $this->auditObj )
			$this->auditObj->LogLogout();
		
		$username = $_SESSION["UserID"] != "Guest" ? $_SESSION["UserID"] : "";
		
		unset( $_SESSION["MyURL"] );
		
		Security::clearSecuritySession();

		
		if( $globalEvents->exists("AfterLogout") )
			$globalEvents->AfterLogout( $username );		

		// redirect to login page and show message
		if ($redirectToLogin) 
		{
			header("Location: ".GetTableLink("login"));
			exit();
		}
	}
	
	/**
	 * @param String url
	 */
	function LogoutAndRedirect($url = "") 
	{
		$this->Logout();
		
		if ($url == "") 
			$url = GetTableLink("menu");
		
		header("Location: ".$url);
		exit();
	}
	

	/**
	 * Check is captcha exists on current page
	 * @intellisense
	 */	
	function captchaExists()
	{
		$captchaSettings = GetGlobalData("CaptchaSettings", false);
		return $captchaSettings["isEnabledOnLogin"];
	}

	/**
	 * @return String
	 */
	function getCaptchaId() 
	{
		return "login";
	}

	/**
	 * @param String messageText
	 */
	public function setDatabaseError( $messageText )
	{
		$this->message = $messageText;
	}
	
	/**
	 *
	 */
	public function setCredentialsCookie($pUsername, $pPassword)
	{
		setcookie("username", $this->rememberPassword ? $pUsername : "", time() + 365*1440*60);
		setcookie("password", $this->rememberPassword ? $pPassword : "", time() + 365*1440*60);
	}
	
	/**
	 *
	 */
	public function setLangParams()
	{
	}
	
	/**
	 *
	 */
	protected function assignBody()
	{
		global $pagesData;
		$this->body["begin"] .= GetBaseScriptsForPage(false);
		$this->body["begin"] .= "<form method=\"post\" action='".GetTableLink("login")."' id=\"form".$this->id."\" name=\"form".$this->id."\">
								<input type=\"hidden\" name=\"btnSubmit\" value=\"Login\">";	
		
		$this->body["end"] .= "</form>";
		$this->body['end'] .= '<script>';
		$this->body['end'] .= "window.controlsMap = ".my_json_encode($this->controlsHTMLMap).";";
		$this->body['end'] .= "window.viewControlsMap = ".my_json_encode($this->viewControlsHTMLMap).";";
		$this->body['end'] .= "Runner.applyPagesData( ".my_json_encode( $pagesData )." );";
		$this->body['end'] .= "window.settings = ".my_json_encode($this->jsSettings).";</script>";
				$this->body["end"] .= "<script type=\"text/javascript\" src=\"".GetRootPathForResources("include/runnerJS/RunnerAll.js")."\"></script>";
		$this->body["end"] .= '<script>'.$this->PrepareJS()."</script>";
		
		$this->xt->assignbyref("body", $this->body);
	}
	
	/**
	 *
	 */
	public function doCommonAssignments()
	{
		global $cLoginTable;
		
		$this->xt->assign("id", $this->id);
		$this->xt->assign("loginlink_attrs", 'id="submitLogin'.$this->id.'"');
		
		if( $this->loggedByCredentials && $this->mode == LOGIN_EMBEDED && $this->twoFactAuth && $this->skipSecondStep )
			return;
		
		$this->setLangParams();

		$rememberbox_checked = "";
		if( $rememberPassword || @$_COOKIE["username"] || @$_COOKIE["password"] )
			$rememberbox_checked = " checked";	
			
		$this->xt->assign("rememberbox_attrs", ($this->is508 ? "id=\"remember_password\" " : "")
			."name=\"remember_password\" value=\"1\"".$rememberbox_checked);		
		
		$this->xt->assign( "guestlink_block", $this->mode == LOGIN_SIMPLE && guestHasPermissions() && isGuestLoginAvailable() );
		
		$this->xt->assign("username_label", true);
		$this->xt->assign("password_label", true);
		$this->xt->assign("remember_password_label", true);
		if( $this->is508 && $this->getLayoutVersion() != BOOTSTRAP_LAYOUT )
		{
			$this->xt->assign_section("username_label", "<label for=\"username\">", "</label>");
			$this->xt->assign_section("password_label", "<label for=\"password\">", "</label>");
			$this->xt->assign_section("remember_password_label", "<label for=\"remember_password\">", "</label>");
		}

		if( $this->message || $this->mode == LOGIN_POPUP || $this->twoFactAuth ) 
		{
			$this->xt->assign("message_block", true);
			if ( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
			{
				$this->xt->assign("message", $this->message);
			}
			else
			{
				$this->xt->assign("message", "<div id='login_message' class='message rnr-error'>".$this->message."</div>");
			}
			
			if( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
				$this->xt->assign("message_class", $this->messageType == MESSAGE_INFO ? "alert-success" : "alert-danger" );
			
			if( !$this->message )
				$this->xt->displayBrickHidden("message");
		}
		
		if( strlen( $this->var_pUsername ) )
			$this->xt->assign("username_attrs",($this->is508? "id=\"username\" " : "")."value=\"".runner_htmlspecialchars($this->var_pUsername)."\"");
		else if ( !$this->twoFactAuth )
			$this->xt->assign("username_attrs",($this->is508 ? "id=\"username\" " : "")
				."value=\"".runner_htmlspecialchars(refine(@$_COOKIE["username"]))."\"");

		if( strlen( $this->var_pPassword ) )
			$this->xt->assign("password_attrs", ($this->is508 ? " id=\"password\"": "")." value=\"".runner_htmlspecialchars($this->var_pPassword)."\"");
		else if ( !$this->twoFactAuth )
			$this->xt->assign("password_attrs", ($this->is508 ? " id=\"password\"": "")
				." value=\"".runner_htmlspecialchars(refine(@$_COOKIE["password"]))."\"");		
	
		if( $this->myurl && $_SESSION["MyUrlAccess"] )
			$this->xt->assign("guestlink_attrs", "href=\"".$this->myurl."\"");
		else
			$this->xt->assign("guestlink_attrs", "href=\"".GetTableLink("menu")."\"");
	
		
		if( $this->loggedByCredentials && $this->mode == LOGIN_EMBEDED && $this->twoFactAuth ) 
		{
			$this->doAssignForSecondAuthStep( !$this->pnoneNotInQuery );
			$this->xt->displayBrickHidden("bsloginregister");
			
			//old layouts 'Register', 'Forgot password' links
			$this->xt->displayBrickHidden("mesreg");
			$this->xt->displayBrickHidden("mesforgot");
		} 
		else
		{
			$this->xt->assign("main_loginfields", true);
			$this->xt->assign("signin_button", true);
		}
		
		if( $this->mode == LOGIN_POPUP || $this->mode == LOGIN_EMBEDED && $this->twoFactAuth )
		{
			if( $this->notRedirect ) 
			{
				$this->body["begin"] .= "<input type=hidden id='notRedirect' value=1>";
				$this->xt->assign("continuebutton_attrs", 'href="#" style="display:none" id="continueButton"');
				$this->xt->assign("continue_button", true);
			}
			
			$this->xt->assign("footer", false);
			$this->xt->assign("header", false);
			$this->xt->assign("body", $this->body);	

			$this->xt->assign("registerlink_attrs", 'name="RegisterPage" data-table="'.runner_htmlspecialchars($cLoginTable).'"');
			$this->xt->assign("forgotpasswordlink_attrs", 'name="ForgotPasswordPage"');
		}
	}
	
	/**
	 * Show the page
	 */
	public function showPage()
	{	
		global $globalEvents;

		if( $globalEvents->exists("BeforeShowLogin") )
			$globalEvents->BeforeShowLogin($this->xt, $this->templatefile, $this);		

		// load popup login page
		if( $this->mode == LOGIN_POPUP || $this->mode == LOGIN_EMBEDED && $this->twoFactAuth )
		{
			$this->displayAJAX( $this->templatefile, $this->id + 1 );
			exit();
		}

		if( $this->mode == LOGIN_SIMPLE )
			$this->assignBody();

		$this->display( $this->templatefile );
	}

	/**
	 *
	 */
	protected function initCredentials()
	{
		//dummy
	}
	
	/**
	 * @return Number
	 */
	public static function readLoginModeFromRequest()
	{
		$pageMode = postvalue("mode");
		
		if( $pageMode == "popup" )
			return LOGIN_POPUP;
			
		if( $pageMode == "embeded" )
			return LOGIN_EMBEDED;
			
		return LOGIN_SIMPLE;
	}
	
	/**
	 * @return String
	 */
	public static function readActionFromRequest()
	{
		$action = postvalue("a");
		
		if( $action )
			return $action;
			
		return @$_POST["btnSubmit"];	
	}
}
?>