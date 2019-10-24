<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/indscheduleemp_variables.php");

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
		$layout->customCssPageName = "indscheduleemp_detailspreview";
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
$page_layouts["indscheduleemp_detailspreview"] = $layout;




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
if($mastertable == "demo_user")
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
	//	STimeIn - Time
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
	//	STimeOut - Time
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
	//	SchedType - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SchedType", $data, $keylink);
			$row["SchedType_value"] = $value;
			$format = $pSet->getViewFormat("SchedType");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SchedType")))
				$class = ' rnr-field-number';
			$row["SchedType_class"] = $class;
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
	//	BreakMins - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("BreakMins", $data, $keylink);
			$row["BreakMins_value"] = $value;
			$format = $pSet->getViewFormat("BreakMins");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("BreakMins")))
				$class = ' rnr-field-number';
			$row["BreakMins_class"] = $class;
	//	Shift - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Shift", $data, $keylink);
			$row["Shift_value"] = $value;
			$format = $pSet->getViewFormat("Shift");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Shift")))
				$class = ' rnr-field-number';
			$row["Shift_class"] = $class;
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
	//	LunchBreakFrom - Time
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("LunchBreakFrom", $data, $keylink);
			$row["LunchBreakFrom_value"] = $value;
			$format = $pSet->getViewFormat("LunchBreakFrom");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("LunchBreakFrom")))
				$class = ' rnr-field-number';
			$row["LunchBreakFrom_class"] = $class;
	//	LunchBreakTo - Time
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("LunchBreakTo", $data, $keylink);
			$row["LunchBreakTo_value"] = $value;
			$format = $pSet->getViewFormat("LunchBreakTo");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("LunchBreakTo")))
				$class = ' rnr-field-number';
			$row["LunchBreakTo_class"] = $class;
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
	//	TimeIn - Datetime
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
	//	TimeOut - Datetime
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
	//	Department - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Department", $data, $keylink);
			$row["Department_value"] = $value;
			$format = $pSet->getViewFormat("Department");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Department")))
				$class = ' rnr-field-number';
			$row["Department_class"] = $class;
	//	RegWD - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RegWD", $data, $keylink);
			$row["RegWD_value"] = $value;
			$format = $pSet->getViewFormat("RegWD");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RegWD")))
				$class = ' rnr-field-number';
			$row["RegWD_class"] = $class;
	//	DWork - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DWork", $data, $keylink);
			$row["DWork_value"] = $value;
			$format = $pSet->getViewFormat("DWork");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DWork")))
				$class = ' rnr-field-number';
			$row["DWork_class"] = $class;
	//	Absent - Custom
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
	//	LateMins - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("LateMins", $data, $keylink);
			$row["LateMins_value"] = $value;
			$format = $pSet->getViewFormat("LateMins");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("LateMins")))
				$class = ' rnr-field-number';
			$row["LateMins_class"] = $class;
	//	UndertimeMins - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("UndertimeMins", $data, $keylink);
			$row["UndertimeMins_value"] = $value;
			$format = $pSet->getViewFormat("UndertimeMins");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("UndertimeMins")))
				$class = ' rnr-field-number';
			$row["UndertimeMins_class"] = $class;
	//	RHolidayHrs - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RHolidayHrs", $data, $keylink);
			$row["RHolidayHrs_value"] = $value;
			$format = $pSet->getViewFormat("RHolidayHrs");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RHolidayHrs")))
				$class = ' rnr-field-number';
			$row["RHolidayHrs_class"] = $class;
	//	SHolidayHrs - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SHolidayHrs", $data, $keylink);
			$row["SHolidayHrs_value"] = $value;
			$format = $pSet->getViewFormat("SHolidayHrs");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SHolidayHrs")))
				$class = ' rnr-field-number';
			$row["SHolidayHrs_class"] = $class;
	//	ExcessHrs - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ExcessHrs", $data, $keylink);
			$row["ExcessHrs_value"] = $value;
			$format = $pSet->getViewFormat("ExcessHrs");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ExcessHrs")))
				$class = ' rnr-field-number';
			$row["ExcessHrs_class"] = $class;
	//	RegOTHrs - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RegOTHrs", $data, $keylink);
			$row["RegOTHrs_value"] = $value;
			$format = $pSet->getViewFormat("RegOTHrs");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RegOTHrs")))
				$class = ' rnr-field-number';
			$row["RegOTHrs_class"] = $class;
	//	RHOTHrs - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RHOTHrs", $data, $keylink);
			$row["RHOTHrs_value"] = $value;
			$format = $pSet->getViewFormat("RHOTHrs");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RHOTHrs")))
				$class = ' rnr-field-number';
			$row["RHOTHrs_class"] = $class;
	//	SHOTHrs - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SHOTHrs", $data, $keylink);
			$row["SHOTHrs_value"] = $value;
			$format = $pSet->getViewFormat("SHOTHrs");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SHOTHrs")))
				$class = ' rnr-field-number';
			$row["SHOTHrs_class"] = $class;
	//	RDOTHrs - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RDOTHrs", $data, $keylink);
			$row["RDOTHrs_value"] = $value;
			$format = $pSet->getViewFormat("RDOTHrs");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RDOTHrs")))
				$class = ' rnr-field-number';
			$row["RDOTHrs_class"] = $class;
	//	RHNDHrs - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RHNDHrs", $data, $keylink);
			$row["RHNDHrs_value"] = $value;
			$format = $pSet->getViewFormat("RHNDHrs");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RHNDHrs")))
				$class = ' rnr-field-number';
			$row["RHNDHrs_class"] = $class;
	//	SHNDHrs - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SHNDHrs", $data, $keylink);
			$row["SHNDHrs_value"] = $value;
			$format = $pSet->getViewFormat("SHNDHrs");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SHNDHrs")))
				$class = ' rnr-field-number';
			$row["SHNDHrs_class"] = $class;
	//	RDNDHrs - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RDNDHrs", $data, $keylink);
			$row["RDNDHrs_value"] = $value;
			$format = $pSet->getViewFormat("RDNDHrs");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RDNDHrs")))
				$class = ' rnr-field-number';
			$row["RDNDHrs_class"] = $class;
	//	VLDay - Custom
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
	//	SLDay - Custom
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
	//	ELDay - Custom
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
	//	PLDay - Custom
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
	//	TrODay - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TrODay", $data, $keylink);
			$row["TrODay_value"] = $value;
			$format = $pSet->getViewFormat("TrODay");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TrODay")))
				$class = ' rnr-field-number';
			$row["TrODay_class"] = $class;
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
	//	Holiday1stHalf - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Holiday1stHalf", $data, $keylink);
			$row["Holiday1stHalf_value"] = $value;
			$format = $pSet->getViewFormat("Holiday1stHalf");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Holiday1stHalf")))
				$class = ' rnr-field-number';
			$row["Holiday1stHalf_class"] = $class;
	//	Holiday2ndHalf - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Holiday2ndHalf", $data, $keylink);
			$row["Holiday2ndHalf_value"] = $value;
			$format = $pSet->getViewFormat("Holiday2ndHalf");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Holiday2ndHalf")))
				$class = ' rnr-field-number';
			$row["Holiday2ndHalf_class"] = $class;
	//	TotLateMins - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TotLateMins", $data, $keylink);
			$row["TotLateMins_value"] = $value;
			$format = $pSet->getViewFormat("TotLateMins");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TotLateMins")))
				$class = ' rnr-field-number';
			$row["TotLateMins_class"] = $class;
	//	LatePenaltyMins - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("LatePenaltyMins", $data, $keylink);
			$row["LatePenaltyMins_value"] = $value;
			$format = $pSet->getViewFormat("LatePenaltyMins");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("LatePenaltyMins")))
				$class = ' rnr-field-number';
			$row["LatePenaltyMins_class"] = $class;
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
	//	LateFixPenalty - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("LateFixPenalty", $data, $keylink);
			$row["LateFixPenalty_value"] = $value;
			$format = $pSet->getViewFormat("LateFixPenalty");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("LateFixPenalty")))
				$class = ' rnr-field-number';
			$row["LateFixPenalty_class"] = $class;
	//	AfterBreakLogOut - Datetime
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("AfterBreakLogOut", $data, $keylink);
			$row["AfterBreakLogOut_value"] = $value;
			$format = $pSet->getViewFormat("AfterBreakLogOut");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("AfterBreakLogOut")))
				$class = ' rnr-field-number';
			$row["AfterBreakLogOut_class"] = $class;
	//	AfterBreakLog - Datetime
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("AfterBreakLog", $data, $keylink);
			$row["AfterBreakLog_value"] = $value;
			$format = $pSet->getViewFormat("AfterBreakLog");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("AfterBreakLog")))
				$class = ' rnr-field-number';
			$row["AfterBreakLog_class"] = $class;
	//	BreakLateMins - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("BreakLateMins", $data, $keylink);
			$row["BreakLateMins_value"] = $value;
			$format = $pSet->getViewFormat("BreakLateMins");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("BreakLateMins")))
				$class = ' rnr-field-number';
			$row["BreakLateMins_class"] = $class;
	//	RHNDOTHrs - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RHNDOTHrs", $data, $keylink);
			$row["RHNDOTHrs_value"] = $value;
			$format = $pSet->getViewFormat("RHNDOTHrs");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RHNDOTHrs")))
				$class = ' rnr-field-number';
			$row["RHNDOTHrs_class"] = $class;
	//	SHNDOTHrs - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SHNDOTHrs", $data, $keylink);
			$row["SHNDOTHrs_value"] = $value;
			$format = $pSet->getViewFormat("SHNDOTHrs");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SHNDOTHrs")))
				$class = ' rnr-field-number';
			$row["SHNDOTHrs_class"] = $class;
	//	RDNDOTHrs - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RDNDOTHrs", $data, $keylink);
			$row["RDNDOTHrs_value"] = $value;
			$format = $pSet->getViewFormat("RDNDOTHrs");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RDNDOTHrs")))
				$class = ' rnr-field-number';
			$row["RDNDOTHrs_class"] = $class;
	//	DH - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DH", $data, $keylink);
			$row["DH_value"] = $value;
			$format = $pSet->getViewFormat("DH");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DH")))
				$class = ' rnr-field-number';
			$row["DH_class"] = $class;
	//	DHRD - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DHRD", $data, $keylink);
			$row["DHRD_value"] = $value;
			$format = $pSet->getViewFormat("DHRD");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DHRD")))
				$class = ' rnr-field-number';
			$row["DHRD_class"] = $class;
	//	DHOT - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DHOT", $data, $keylink);
			$row["DHOT_value"] = $value;
			$format = $pSet->getViewFormat("DHOT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DHOT")))
				$class = ' rnr-field-number';
			$row["DHOT_class"] = $class;
	//	DHRDOT - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DHRDOT", $data, $keylink);
			$row["DHRDOT_value"] = $value;
			$format = $pSet->getViewFormat("DHRDOT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DHRDOT")))
				$class = ' rnr-field-number';
			$row["DHRDOT_class"] = $class;
	//	SHRDND - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SHRDND", $data, $keylink);
			$row["SHRDND_value"] = $value;
			$format = $pSet->getViewFormat("SHRDND");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SHRDND")))
				$class = ' rnr-field-number';
			$row["SHRDND_class"] = $class;
	//	RHRDND - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RHRDND", $data, $keylink);
			$row["RHRDND_value"] = $value;
			$format = $pSet->getViewFormat("RHRDND");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RHRDND")))
				$class = ' rnr-field-number';
			$row["RHRDND_class"] = $class;
	//	SHRDNDOT - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SHRDNDOT", $data, $keylink);
			$row["SHRDNDOT_value"] = $value;
			$format = $pSet->getViewFormat("SHRDNDOT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SHRDNDOT")))
				$class = ' rnr-field-number';
			$row["SHRDNDOT_class"] = $class;
	//	RHRDNDOT - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RHRDNDOT", $data, $keylink);
			$row["RHRDNDOT_value"] = $value;
			$format = $pSet->getViewFormat("RHRDNDOT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RHRDNDOT")))
				$class = ' rnr-field-number';
			$row["RHRDNDOT_class"] = $class;
	//	DHND - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DHND", $data, $keylink);
			$row["DHND_value"] = $value;
			$format = $pSet->getViewFormat("DHND");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DHND")))
				$class = ' rnr-field-number';
			$row["DHND_class"] = $class;
	//	DHRDND - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DHRDND", $data, $keylink);
			$row["DHRDND_value"] = $value;
			$format = $pSet->getViewFormat("DHRDND");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DHRDND")))
				$class = ' rnr-field-number';
			$row["DHRDND_class"] = $class;
	//	DHNDOT - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DHNDOT", $data, $keylink);
			$row["DHNDOT_value"] = $value;
			$format = $pSet->getViewFormat("DHNDOT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DHNDOT")))
				$class = ' rnr-field-number';
			$row["DHNDOT_class"] = $class;
	//	DHRDNDOT - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DHRDNDOT", $data, $keylink);
			$row["DHRDNDOT_value"] = $value;
			$format = $pSet->getViewFormat("DHRDNDOT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DHRDNDOT")))
				$class = ' rnr-field-number';
			$row["DHRDNDOT_class"] = $class;
	//	RHRDOT - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RHRDOT", $data, $keylink);
			$row["RHRDOT_value"] = $value;
			$format = $pSet->getViewFormat("RHRDOT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RHRDOT")))
				$class = ' rnr-field-number';
			$row["RHRDOT_class"] = $class;
	//	SHRDOT - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SHRDOT", $data, $keylink);
			$row["SHRDOT_value"] = $value;
			$format = $pSet->getViewFormat("SHRDOT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SHRDOT")))
				$class = ' rnr-field-number';
			$row["SHRDOT_class"] = $class;
	//	RegND - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RegND", $data, $keylink);
			$row["RegND_value"] = $value;
			$format = $pSet->getViewFormat("RegND");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RegND")))
				$class = ' rnr-field-number';
			$row["RegND_class"] = $class;
	//	RegRD - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RegRD", $data, $keylink);
			$row["RegRD_value"] = $value;
			$format = $pSet->getViewFormat("RegRD");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RegRD")))
				$class = ' rnr-field-number';
			$row["RegRD_class"] = $class;
	//	SHOTD - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SHOTD", $data, $keylink);
			$row["SHOTD_value"] = $value;
			$format = $pSet->getViewFormat("SHOTD");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SHOTD")))
				$class = ' rnr-field-number';
			$row["SHOTD_class"] = $class;
	//	SHRDOTD - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SHRDOTD", $data, $keylink);
			$row["SHRDOTD_value"] = $value;
			$format = $pSet->getViewFormat("SHRDOTD");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SHRDOTD")))
				$class = ' rnr-field-number';
			$row["SHRDOTD_class"] = $class;
	//	NDOT - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("NDOT", $data, $keylink);
			$row["NDOT_value"] = $value;
			$format = $pSet->getViewFormat("NDOT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("NDOT")))
				$class = ' rnr-field-number';
			$row["NDOT_class"] = $class;
	//	RHRD - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RHRD", $data, $keylink);
			$row["RHRD_value"] = $value;
			$format = $pSet->getViewFormat("RHRD");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RHRD")))
				$class = ' rnr-field-number';
			$row["RHRD_class"] = $class;
	//	SHRD - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SHRD", $data, $keylink);
			$row["SHRD_value"] = $value;
			$format = $pSet->getViewFormat("SHRD");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SHRD")))
				$class = ' rnr-field-number';
			$row["SHRD_class"] = $class;
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
$xt->load_template(GetTemplateName("indscheduleemp", "detailspreview"));
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