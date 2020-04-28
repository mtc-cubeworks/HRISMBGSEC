<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/dtrcard_variables.php");

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
		$layout->customCssPageName = "dtrcard_detailspreview";
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
$page_layouts["dtrcard_detailspreview"] = $layout;




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
if($mastertable == "dtrcardhead")
{
	$formattedValue = make_db_value("EmployeeID",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("EmployeeID") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("EmployeeID") . "=" . $formattedValue;
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
	//	STimeIn - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("STimeIn", $data, $keylink);
			$row["STimeIn_value"] = $value;
			$format = $pSet->getViewFormat("STimeIn");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("STimeIn")))
				$class = ' rnr-field-number';
			$row["STimeIn_class"] = $class;
	//	STimeOut - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("STimeOut", $data, $keylink);
			$row["STimeOut_value"] = $value;
			$format = $pSet->getViewFormat("STimeOut");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("STimeOut")))
				$class = ' rnr-field-number';
			$row["STimeOut_class"] = $class;
	//	TimeIn - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TimeIn", $data, $keylink);
			$row["TimeIn_value"] = $value;
			$format = $pSet->getViewFormat("TimeIn");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TimeIn")))
				$class = ' rnr-field-number';
			$row["TimeIn_class"] = $class;
	//	TimeOut - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TimeOut", $data, $keylink);
			$row["TimeOut_value"] = $value;
			$format = $pSet->getViewFormat("TimeOut");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TimeOut")))
				$class = ' rnr-field-number';
			$row["TimeOut_class"] = $class;
	//	DayIs - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DayIs", $data, $keylink);
			$row["DayIs_value"] = $value;
			$format = $pSet->getViewFormat("DayIs");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DayIs")))
				$class = ' rnr-field-number';
			$row["DayIs_class"] = $class;
	//	RestDay - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RestDay", $data, $keylink);
			$row["RestDay_value"] = $value;
			$format = $pSet->getViewFormat("RestDay");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RestDay")))
				$class = ' rnr-field-number';
			$row["RestDay_class"] = $class;
	//	Mispunched - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Mispunched", $data, $keylink);
			$row["Mispunched_value"] = $value;
			$format = $pSet->getViewFormat("Mispunched");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Mispunched")))
				$class = ' rnr-field-number';
			$row["Mispunched_class"] = $class;
	//	HolidayType - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("HolidayType", $data, $keylink);
			$row["HolidayType_value"] = $value;
			$format = $pSet->getViewFormat("HolidayType");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("HolidayType")))
				$class = ' rnr-field-number';
			$row["HolidayType_class"] = $class;
	//	VLDay - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("VLDay", $data, $keylink);
			$row["VLDay_value"] = $value;
			$format = $pSet->getViewFormat("VLDay");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("VLDay")))
				$class = ' rnr-field-number';
			$row["VLDay_class"] = $class;
	//	SLDay - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SLDay", $data, $keylink);
			$row["SLDay_value"] = $value;
			$format = $pSet->getViewFormat("SLDay");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SLDay")))
				$class = ' rnr-field-number';
			$row["SLDay_class"] = $class;
	//	ELDay - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ELDay", $data, $keylink);
			$row["ELDay_value"] = $value;
			$format = $pSet->getViewFormat("ELDay");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ELDay")))
				$class = ' rnr-field-number';
			$row["ELDay_class"] = $class;
	//	PLDay - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PLDay", $data, $keylink);
			$row["PLDay_value"] = $value;
			$format = $pSet->getViewFormat("PLDay");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PLDay")))
				$class = ' rnr-field-number';
			$row["PLDay_class"] = $class;
	//	OBDay - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("OBDay", $data, $keylink);
			$row["OBDay_value"] = $value;
			$format = $pSet->getViewFormat("OBDay");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("OBDay")))
				$class = ' rnr-field-number';
			$row["OBDay_class"] = $class;
	//	Late - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Late", $data, $keylink);
			$row["Late_value"] = $value;
			$format = $pSet->getViewFormat("Late");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Late")))
				$class = ' rnr-field-number';
			$row["Late_class"] = $class;
	//	UTime - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("UTime", $data, $keylink);
			$row["UTime_value"] = $value;
			$format = $pSet->getViewFormat("UTime");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("UTime")))
				$class = ' rnr-field-number';
			$row["UTime_class"] = $class;
	//	Absent - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Absent", $data, $keylink);
			$row["Absent_value"] = $value;
			$format = $pSet->getViewFormat("Absent");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Absent")))
				$class = ' rnr-field-number';
			$row["Absent_class"] = $class;
	//	OTmins - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("OTmins", $data, $keylink);
			$row["OTmins_value"] = $value;
			$format = $pSet->getViewFormat("OTmins");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("OTmins")))
				$class = ' rnr-field-number';
			$row["OTmins_class"] = $class;
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
$xt->load_template(GetTemplateName("dtrcard", "detailspreview"));
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