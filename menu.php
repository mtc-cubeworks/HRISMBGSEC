<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


require_once("include/dbcommon.php");


Security::processLogoutRequest();
if(!isLogged())
{
	HeaderRedirect("login");
	return;
}


if (($_SESSION["MyURL"] == "") || (!isLoggedAsGuest())) {
	Security::saveRedirectURL();
}




$layout = new TLayout("menu_bootstrap3", "Metro1DeliciousLavender1", "MobileDeliciousLavender1");
$layout->version = 3;
	$layout->bootstrapTheme = "default";
		$layout->customCssPageName = "_menu";
$layout->blocks["left"] = array();
$layout->containers["logo"] = array();
$layout->container_properties["logo"] = array(  );
$layout->containers["logo"][] = array("name"=>"logo",
	"block"=>"logo_block", "substyle"=>1  );

$layout->skins["logo"] = "";

$layout->blocks["left"][] = "logo";
$layout->containers["hdr"] = array();
$layout->container_properties["hdr"] = array(  );
$layout->containers["hdr"][] = array("name"=>"bsnavbarcollapse",
	"block"=>"collapse_block", "substyle"=>1  );

$layout->skins["hdr"] = "";

$layout->blocks["left"][] = "hdr";
$layout->containers["sidemenu"] = array();
$layout->container_properties["sidemenu"] = array(  );
$layout->containers["sidemenu"][] = array("name"=>"vmenu",
	"block"=>"menu_block", "substyle"=>1  );

$layout->skins["sidemenu"] = "";

$layout->blocks["left"][] = "sidemenu";
$layout->blocks["top"] = array();
$layout->containers["menu"] = array();
$layout->container_properties["menu"] = array(  );
$layout->containers["menu"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"menu_1" );
$layout->containers["menu_1"] = array();
$layout->container_properties["menu_1"] = array(  );
$layout->containers["menu_1"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"more" );
$layout->containers["more"] = array();
$layout->container_properties["more"] = array(  );
$layout->containers["more"][] = array("name"=>"morebutton",
	"block"=>"more_list", "substyle"=>1  );

$layout->containers["more"][] = array("name"=>"loggedas",
	"block"=>"security_block", "substyle"=>1  );

$layout->skins["more"] = "";


$layout->skins["menu_1"] = "";


$layout->skins["menu"] = "";

$layout->blocks["top"][] = "menu";
$layout->blocks["topmiddle"] = array();
$layout->containers["center"] = array();
$layout->container_properties["center"] = array(  );
$layout->containers["center"][] = array("name"=>"welcome",
	"block"=>"", "substyle"=>1  );

$layout->skins["center"] = "";

$layout->blocks["topmiddle"][] = "center";
$page_layouts["menu"] = $layout;




require_once('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));

include_once(getabspath("include/demo_user_events.php"));
$tableEvents["demo_user"] = new eventclass_demo_user;
include_once(getabspath("include/demo_log_events.php"));
$tableEvents["demo_log"] = new eventclass_demo_log;
include_once(getabspath("include/holidays_events.php"));
$tableEvents["holidays"] = new eventclass_holidays;
include_once(getabspath("include/schedrange_events.php"));
$tableEvents["schedrange"] = new eventclass_schedrange;
include_once(getabspath("include/indschedule_events.php"));
$tableEvents["indschedule"] = new eventclass_indschedule;
include_once(getabspath("include/payroll_events.php"));
$tableEvents["payroll"] = new eventclass_payroll;
include_once(getabspath("include/payrolltab_events.php"));
$tableEvents["payrolltab"] = new eventclass_payrolltab;
include_once(getabspath("include/earningadjustment_events.php"));
$tableEvents["earningadjustment"] = new eventclass_earningadjustment;
include_once(getabspath("include/shifts_events.php"));
$tableEvents["shifts"] = new eventclass_shifts;
include_once(getabspath("include/dtrrange_events.php"));
$tableEvents["dtrrange"] = new eventclass_dtrrange;
include_once(getabspath("include/indschedule1_events.php"));
$tableEvents["indschedule1"] = new eventclass_indschedule1;
include_once(getabspath("include/indovertime_events.php"));
$tableEvents["indovertime"] = new eventclass_indovertime;
include_once(getabspath("include/demo_user1_events.php"));
$tableEvents["demo_user1"] = new eventclass_demo_user1;
include_once(getabspath("include/modulelock_events.php"));
$tableEvents["modulelock"] = new eventclass_modulelock;
include_once(getabspath("include/indschedule11_events.php"));
$tableEvents["indschedule11"] = new eventclass_indschedule11;
include_once(getabspath("include/statutorylock_events.php"));
$tableEvents["statutorylock"] = new eventclass_statutorylock;
include_once(getabspath("include/payroll21_events.php"));
$tableEvents["payroll21"] = new eventclass_payroll21;
include_once(getabspath("include/leaves1_events.php"));
$tableEvents["leaves1"] = new eventclass_leaves1;
include_once(getabspath("include/ssscontsummary_events.php"));
$tableEvents["ssscontsummary"] = new eventclass_ssscontsummary;
include_once(getabspath("include/leaves11_events.php"));
$tableEvents["leaves11"] = new eventclass_leaves11;
include_once(getabspath("include/leavesapp_events.php"));
$tableEvents["leavesapp"] = new eventclass_leavesapp;
include_once(getabspath("include/payrolltab1_events.php"));
$tableEvents["payrolltab1"] = new eventclass_payrolltab1;
include_once(getabspath("include/loansreport_events.php"));
$tableEvents["loansreport"] = new eventclass_loansreport;
include_once(getabspath("include/contlo_events.php"));
$tableEvents["contlo"] = new eventclass_contlo;
include_once(getabspath("include/empindschedule_events.php"));
$tableEvents["empindschedule"] = new eventclass_empindschedule;
include_once(getabspath("include/indschedrange_events.php"));
$tableEvents["indschedrange"] = new eventclass_indschedrange;
include_once(getabspath("include/monthlyremittax_events.php"));
$tableEvents["monthlyremittax"] = new eventclass_monthlyremittax;
include_once(getabspath("include/empdtr_events.php"));
$tableEvents["empdtr"] = new eventclass_empdtr;
include_once(getabspath("include/emplogins_events.php"));
$tableEvents["emplogins"] = new eventclass_emplogins;
include_once(getabspath("include/removedata_events.php"));
$tableEvents["removedata"] = new eventclass_removedata;
include_once(getabspath("include/overtimes_events.php"));
$tableEvents["overtimes"] = new eventclass_overtimes;
include_once(getabspath("include/overtimefile_events.php"));
$tableEvents["overtimefile"] = new eventclass_overtimefile;
include_once(getabspath("include/overtimeapp_events.php"));
$tableEvents["overtimeapp"] = new eventclass_overtimeapp;
include_once(getabspath("include/indovertime1_events.php"));
$tableEvents["indovertime1"] = new eventclass_indovertime1;
include_once(getabspath("include/payrolldiv_events.php"));
$tableEvents["payrolldiv"] = new eventclass_payrolldiv;
include_once(getabspath("include/logo_events.php"));
$tableEvents["logo"] = new eventclass_logo;

$xt = new Xtempl();

$id = postvalue("id")!=="" ? postvalue("id") : 1;

//array of params for classes
$params = array();
$params["id"] = $id; 
$params["xt"] = &$xt;
$params["tName"] = NOT_TABLE_BASED_TNAME;
$params["pageType"] = PAGE_MENU;
$params["templatefile"] = "menu.htm";
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;
$pageObject = new RunnerPage($params);
$pageObject->init();
$pageObject->commonAssign();
// button handlers file names

//	Before Process event
if($globalEvents->exists("BeforeProcessMenu"))
	$globalEvents->BeforeProcessMenu( $pageObject );

$pageObject->body["begin"] .= GetBaseScriptsForPage(false);

$pageObject->addCommonJs();

//fill jsSettings and ControlsHTMLMap
$pageObject->fillSetCntrlMaps();
$pageObject->setLangParams();
$xt->assign("id", $id);
// The user might rewrite $_SESSION["UserName"] value with HTML code in an event, so no encoding will be performed while printing this value.
$xt->assign("username", $_SESSION["UserName"]);
$xt->assign("changepwd_link",$_SESSION["AccessLevel"] != ACCESS_LEVEL_GUEST && $_SESSION["fromFacebook"] == false);
$xt->assign("changepwdlink_attrs","onclick=\"window.location.href='".GetTableLink("changepwd")."';return false;\"");

$xt->assign("logoutlink_attrs", 'id="logoutButton'.$id.'"');
$xt->assign("guestloginlink_attrs", 'id="loginButton'.$id.'"');

$xt->assign("loggedas_block", !isLoggedAsGuest());
$xt->assign("loggedas_message", !isLoggedAsGuest());

$xt->assign("logout_link", true);
$xt->assign("guestloginbutton", isLoggedAsGuest());
$xt->assign("logoutbutton", isSingleSign() && !isLoggedAsGuest());

if( IsAdmin() )
	$xt->assign("adminarea_link", true);

// get redirect location for menu page
$redirect = $pageObject->getRedirectForMenuPage();
if($redirect)
{
	header("Location: ".$redirect); 
	exit();
}

$xt->assign("menu_block",true);
if($globalEvents->exists("BeforeShowMenu"))
	$globalEvents->BeforeShowMenu($xt, $pageObject->templatefile, $pageObject);

$pageObject->body['end'] .= '<script>';
$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
$pageObject->body['end'] .= "Runner.applyPagesData( ".my_json_encode( $pagesData )." );";
$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";</script>";
$pageObject->body["end"] .= "<script type=\"text/javascript\" src=\"".GetRootPathForResources("include/runnerJS/RunnerAll.js")."\"></script>";
$pageObject->body["end"] .= '<script>'.$pageObject->PrepareJS()."</script>";
$xt->assignbyref("body",$pageObject->body);

$pageObject->display($pageObject->templatefile);
?>