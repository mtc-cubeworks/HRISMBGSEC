<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/indschedule1_variables.php");

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
		$layout->customCssPageName = "indschedule1_detailspreview";
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
$page_layouts["indschedule1_detailspreview"] = $layout;




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
if($mastertable == "dt5")
{
	$formattedValue = make_db_value("ScID",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("ScID") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("ScID") . "=" . $formattedValue;
}
if($mastertable == "indschedule")
{
	$formattedValue = make_db_value("ScID",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("ScID") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("ScID") . "=" . $formattedValue;
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
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["ScID"]));
	
	
	//	ScID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ScID", $data, $keylink);
			$row["ScID_value"] = $value;
			$format = $pSet->getViewFormat("ScID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ScID")))
				$class = ' rnr-field-number';
			$row["ScID_class"] = $class;
	//	ApprovedOT - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ApprovedOT", $data, $keylink);
			$row["ApprovedOT_value"] = $value;
			$format = $pSet->getViewFormat("ApprovedOT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ApprovedOT")))
				$class = ' rnr-field-number';
			$row["ApprovedOT_class"] = $class;
	//	AOTMins - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("AOTMins", $data, $keylink);
			$row["AOTMins_value"] = $value;
			$format = $pSet->getViewFormat("AOTMins");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("AOTMins")))
				$class = ' rnr-field-number';
			$row["AOTMins_class"] = $class;
	//	ApprovedNightDiff - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ApprovedNightDiff", $data, $keylink);
			$row["ApprovedNightDiff_value"] = $value;
			$format = $pSet->getViewFormat("ApprovedNightDiff");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ApprovedNightDiff")))
				$class = ' rnr-field-number';
			$row["ApprovedNightDiff_class"] = $class;
	//	ANDiff - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ANDiff", $data, $keylink);
			$row["ANDiff_value"] = $value;
			$format = $pSet->getViewFormat("ANDiff");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ANDiff")))
				$class = ' rnr-field-number';
			$row["ANDiff_class"] = $class;
	//	ApprovedRD - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ApprovedRD", $data, $keylink);
			$row["ApprovedRD_value"] = $value;
			$format = $pSet->getViewFormat("ApprovedRD");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ApprovedRD")))
				$class = ' rnr-field-number';
			$row["ApprovedRD_class"] = $class;
	//	RDMins - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RDMins", $data, $keylink);
			$row["RDMins_value"] = $value;
			$format = $pSet->getViewFormat("RDMins");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RDMins")))
				$class = ' rnr-field-number';
			$row["RDMins_class"] = $class;
	//	TempOT - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TempOT", $data, $keylink);
			$row["TempOT_value"] = $value;
			$format = $pSet->getViewFormat("TempOT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TempOT")))
				$class = ' rnr-field-number';
			$row["TempOT_class"] = $class;
	//	NDMins - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("NDMins", $data, $keylink);
			$row["NDMins_value"] = $value;
			$format = $pSet->getViewFormat("NDMins");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("NDMins")))
				$class = ' rnr-field-number';
			$row["NDMins_class"] = $class;
	//	WorkMinsNet - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("WorkMinsNet", $data, $keylink);
			$row["WorkMinsNet_value"] = $value;
			$format = $pSet->getViewFormat("WorkMinsNet");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("WorkMinsNet")))
				$class = ' rnr-field-number';
			$row["WorkMinsNet_class"] = $class;
	//	FiledOT - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("FiledOT", $data, $keylink);
			$row["FiledOT_value"] = $value;
			$format = $pSet->getViewFormat("FiledOT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("FiledOT")))
				$class = ' rnr-field-number';
			$row["FiledOT_class"] = $class;
	//	NDMealAllowancePerShift - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("NDMealAllowancePerShift", $data, $keylink);
			$row["NDMealAllowancePerShift_value"] = $value;
			$format = $pSet->getViewFormat("NDMealAllowancePerShift");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("NDMealAllowancePerShift")))
				$class = ' rnr-field-number';
			$row["NDMealAllowancePerShift_class"] = $class;
	//	NDMinimumHrs - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("NDMinimumHrs", $data, $keylink);
			$row["NDMinimumHrs_value"] = $value;
			$format = $pSet->getViewFormat("NDMinimumHrs");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("NDMinimumHrs")))
				$class = ' rnr-field-number';
			$row["NDMinimumHrs_class"] = $class;
	//	NDMealAllowance - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("NDMealAllowance", $data, $keylink);
			$row["NDMealAllowance_value"] = $value;
			$format = $pSet->getViewFormat("NDMealAllowance");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("NDMealAllowance")))
				$class = ' rnr-field-number';
			$row["NDMealAllowance_class"] = $class;
	//	SDate - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SDate", $data, $keylink);
			$row["SDate_value"] = $value;
			$format = $pSet->getViewFormat("SDate");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SDate")))
				$class = ' rnr-field-number';
			$row["SDate_class"] = $class;
	//	UserName - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("UserName", $data, $keylink);
			$row["UserName_value"] = $value;
			$format = $pSet->getViewFormat("UserName");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("UserName")))
				$class = ' rnr-field-number';
			$row["UserName_class"] = $class;
	//	ANDOTMins - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ANDOTMins", $data, $keylink);
			$row["ANDOTMins_value"] = $value;
			$format = $pSet->getViewFormat("ANDOTMins");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ANDOTMins")))
				$class = ' rnr-field-number';
			$row["ANDOTMins_class"] = $class;
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
$xt->load_template(GetTemplateName("indschedule1", "detailspreview"));
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