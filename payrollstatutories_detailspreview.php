<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/payrollstatutories_variables.php");

$mode = postvalue("mode");

if(!isLogged())
{ 
	return;
}
if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{
	return;
}

require_once("classes/searchclause.php");

$cipherer = new RunnerCipherer($strTableName);

require_once('include/xtempl.php');
$xt = new Xtempl();





$layout = new TLayout("detailspreview_bootstrap", "Metro1DeliciousLavender1", "MobileDeliciousLavender1");
$layout->version = 3;
	$layout->bootstrapTheme = "default";
		$layout->customCssPageName = "payrollstatutories_detailspreview";
$layout->blocks["bare"] = array();
$layout->containers["dcount"] = array();
$layout->container_properties["dcount"] = array(  );
$layout->containers["dcount"][] = array("name"=>"bsdetailspreviewcount",
	"block"=>"", "substyle"=>1  );

$layout->skins["dcount"] = "";

$layout->blocks["bare"][] = "dcount";
$layout->containers["detailspreviewgrid"] = array();
$layout->container_properties["detailspreviewgrid"] = array(  );
$layout->containers["detailspreviewgrid"][] = array("name"=>"detailspreviewfields",
	"block"=>"details_data", "substyle"=>1  );

$layout->skins["detailspreviewgrid"] = "";

$layout->blocks["bare"][] = "detailspreviewgrid";
$page_layouts["payrollstatutories_detailspreview"] = $layout;




$recordsCounter = 0;

//	process masterkey value
$mastertable = postvalue("mastertable");
$masterKeys = my_json_decode(postvalue("masterKeys"));
$sessionPrefix = "_detailsPreview";
if($mastertable != "")
{
	$_SESSION[$sessionPrefix."_mastertable"]=$mastertable;
//	copy keys to session
	$i = 1;
	if(is_array($masterKeys) && count($masterKeys) > 0)
	{
		while(array_key_exists ("masterkey".$i, $masterKeys))
		{
			$_SESSION[$sessionPrefix."_masterkey".$i] = $masterKeys["masterkey".$i];
			$i++;
		}
	}
	if(isset($_SESSION[$sessionPrefix."_masterkey".$i]))
		unset($_SESSION[$sessionPrefix."_masterkey".$i]);
}
else
	$mastertable = $_SESSION[$sessionPrefix."_mastertable"];

$params = array();
$params['id'] = 1;
$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['pageType'] = "detailspreview";
$pageObject = new DetailsPreview($params);

$pSet = new ProjectSettings($strTableName, PAGE_LIST);


$whereClauses = array();
if($mastertable == "payrolltab")
{
	$formattedValue = make_db_value("EmployeeID",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("EmployeeID") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("EmployeeID") . "=" . $formattedValue;
	$formattedValue = make_db_value("ToDate",$_SESSION[$sessionPrefix."_masterkey2"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("ToDate") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("ToDate") . "=" . $formattedValue;
	$formattedValue = make_db_value("FromDate",$_SESSION[$sessionPrefix."_masterkey3"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("FromDate") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("FromDate") . "=" . $formattedValue;
	$formattedValue = make_db_value("Employer",$_SESSION[$sessionPrefix."_masterkey4"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("Employer") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("Employer") . "=" . $formattedValue;
	$formattedValue = make_db_value("Division",$_SESSION[$sessionPrefix."_masterkey5"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("Division") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("Division") . "=" . $formattedValue;
	$formattedValue = make_db_value("WageType",$_SESSION[$sessionPrefix."_masterkey6"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("WageType") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("WageType") . "=" . $formattedValue;
}

$whereClauses[] = SecuritySQL("Search", $strTableName);
$query = $pSet->getSQLQuery();

$strSQL = $query->buildSQL_default( $whereClauses );
$rowcount = $pageObject->connection->getFetchedRowsNumber( $strSQL );

$strSQL .= $pageObject->getOrderByClause();

$xt->assign("row_count",$rowcount);
if($rowcount) 
{
	$xt->assign("details_data",true);

	$display_count = 10;
	if($mode == "inline")
		$display_count*=2;
		
	if($rowcount>$display_count+2)
	{
		$xt->assign("display_first",true);
		$xt->assign("display_count",$display_count);
	}
	else
		$display_count = $rowcount;

	$rowinfo = array();
	
	require_once getabspath('classes/controls/ViewControlsContainer.php');
	$viewContainer = new ViewControlsContainer($pSet, PAGE_LIST);
	$viewContainer->isDetailsPreview = true;

	$b = true;
	$qResult = $pageObject->connection->query( $strSQL );
	$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	while($data && $recordsCounter<$display_count) {
		$recordsCounter++;
		$row = array();
		$keylink = "";
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["PstID"]));
	
	
	//	PstID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PstID", $data, $keylink);
			$row["PstID_value"] = $value;
			$format = $pSet->getViewFormat("PstID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PstID")))
				$class = ' rnr-field-number';
			$row["PstID_class"] = $class;
	//	SSS - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SSS", $data, $keylink);
			$row["SSS_value"] = $value;
			$format = $pSet->getViewFormat("SSS");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SSS")))
				$class = ' rnr-field-number';
			$row["SSS_class"] = $class;
	//	PagIbig - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PagIbig", $data, $keylink);
			$row["PagIbig_value"] = $value;
			$format = $pSet->getViewFormat("PagIbig");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PagIbig")))
				$class = ' rnr-field-number';
			$row["PagIbig_class"] = $class;
	//	PHIC - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PHIC", $data, $keylink);
			$row["PHIC_value"] = $value;
			$format = $pSet->getViewFormat("PHIC");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PHIC")))
				$class = ' rnr-field-number';
			$row["PHIC_class"] = $class;
	//	FromDate - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("FromDate", $data, $keylink);
			$row["FromDate_value"] = $value;
			$format = $pSet->getViewFormat("FromDate");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("FromDate")))
				$class = ' rnr-field-number';
			$row["FromDate_class"] = $class;
	//	ToDate - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ToDate", $data, $keylink);
			$row["ToDate_value"] = $value;
			$format = $pSet->getViewFormat("ToDate");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ToDate")))
				$class = ' rnr-field-number';
			$row["ToDate_class"] = $class;
	//	EmployeeID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EmployeeID", $data, $keylink);
			$row["EmployeeID_value"] = $value;
			$format = $pSet->getViewFormat("EmployeeID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EmployeeID")))
				$class = ' rnr-field-number';
			$row["EmployeeID_class"] = $class;
	//	PSID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PSID", $data, $keylink);
			$row["PSID_value"] = $value;
			$format = $pSet->getViewFormat("PSID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PSID")))
				$class = ' rnr-field-number';
			$row["PSID_class"] = $class;
	//	SSSER - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SSSER", $data, $keylink);
			$row["SSSER_value"] = $value;
			$format = $pSet->getViewFormat("SSSER");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SSSER")))
				$class = ' rnr-field-number';
			$row["SSSER_class"] = $class;
	//	SSSEC - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SSSEC", $data, $keylink);
			$row["SSSEC_value"] = $value;
			$format = $pSet->getViewFormat("SSSEC");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SSSEC")))
				$class = ' rnr-field-number';
			$row["SSSEC_class"] = $class;
	//	SSSTotal - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SSSTotal", $data, $keylink);
			$row["SSSTotal_value"] = $value;
			$format = $pSet->getViewFormat("SSSTotal");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SSSTotal")))
				$class = ' rnr-field-number';
			$row["SSSTotal_class"] = $class;
	//	PagIbigER - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PagIbigER", $data, $keylink);
			$row["PagIbigER_value"] = $value;
			$format = $pSet->getViewFormat("PagIbigER");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PagIbigER")))
				$class = ' rnr-field-number';
			$row["PagIbigER_class"] = $class;
	//	PagIbigTotal - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PagIbigTotal", $data, $keylink);
			$row["PagIbigTotal_value"] = $value;
			$format = $pSet->getViewFormat("PagIbigTotal");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PagIbigTotal")))
				$class = ' rnr-field-number';
			$row["PagIbigTotal_class"] = $class;
	//	PHICER - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PHICER", $data, $keylink);
			$row["PHICER_value"] = $value;
			$format = $pSet->getViewFormat("PHICER");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PHICER")))
				$class = ' rnr-field-number';
			$row["PHICER_class"] = $class;
	//	PHICTotal - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PHICTotal", $data, $keylink);
			$row["PHICTotal_value"] = $value;
			$format = $pSet->getViewFormat("PHICTotal");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PHICTotal")))
				$class = ' rnr-field-number';
			$row["PHICTotal_class"] = $class;
	//	Employer - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Employer", $data, $keylink);
			$row["Employer_value"] = $value;
			$format = $pSet->getViewFormat("Employer");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Employer")))
				$class = ' rnr-field-number';
			$row["Employer_class"] = $class;
	//	Division - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Division", $data, $keylink);
			$row["Division_value"] = $value;
			$format = $pSet->getViewFormat("Division");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Division")))
				$class = ' rnr-field-number';
			$row["Division_class"] = $class;
	//	WageType - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("WageType", $data, $keylink);
			$row["WageType_value"] = $value;
			$format = $pSet->getViewFormat("WageType");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("WageType")))
				$class = ' rnr-field-number';
			$row["WageType_class"] = $class;
		$rowinfo[] = $row;
		if ($b) {
			$rowinfo2[] = $row;
			$b = false;
		}
		$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	}
	$xt->assign_loopsection("details_row",$rowinfo);
	$xt->assign_loopsection("details_row_header",$rowinfo2); // assign class for header
}
$returnJSON = array("success" => true);
$xt->load_template(GetTemplateName("payrollstatutories", "detailspreview"));
$returnJSON["body"] = $xt->fetch_loaded();

if($mode!="inline")
{
	$returnJSON["counter"] = postvalue("counter");
	$layout = GetPageLayout(GoodFieldName($strTableName), 'detailspreview');
	if($layout)
	{
		foreach($layout->getCSSFiles(isRTL(), mobileDeviceDetected() && $layout->version != BOOTSTRAP_LAYOUT) as $css)
		{
			$returnJSON['CSSFiles'][] = $css;
		}
	}	
}	

echo printJSON($returnJSON);
exit();
?>