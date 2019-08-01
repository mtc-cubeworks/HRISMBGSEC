<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/empindschedule_variables.php");

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
		$layout->customCssPageName = "empindschedule_detailspreview";
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
$page_layouts["empindschedule_detailspreview"] = $layout;




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
	//	RegWD - Number
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
	//	DWork - Number
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
	//	Absent - Checkbox
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
	//	LateMins - Number
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
	//	UndertimeMins - Number
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
	//	RHolidayHrs - Number
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
	//	SHolidayHrs - Number
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
	//	CHolidayHrs - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("CHolidayHrs", $data, $keylink);
			$row["CHolidayHrs_value"] = $value;
			$format = $pSet->getViewFormat("CHolidayHrs");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("CHolidayHrs")))
				$class = ' rnr-field-number';
			$row["CHolidayHrs_class"] = $class;
	//	ExcessHrs - Number
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
	//	RegOTHrs - Number
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
	//	RHOTHrs - Number
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
	//	SHOTHrs - Number
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
	//	CHOTHrs - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("CHOTHrs", $data, $keylink);
			$row["CHOTHrs_value"] = $value;
			$format = $pSet->getViewFormat("CHOTHrs");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("CHOTHrs")))
				$class = ' rnr-field-number';
			$row["CHOTHrs_class"] = $class;
	//	RDOTHrs - Number
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
	//	NDHrs - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("NDHrs", $data, $keylink);
			$row["NDHrs_value"] = $value;
			$format = $pSet->getViewFormat("NDHrs");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("NDHrs")))
				$class = ' rnr-field-number';
			$row["NDHrs_class"] = $class;
	//	RDHrs - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RDHrs", $data, $keylink);
			$row["RDHrs_value"] = $value;
			$format = $pSet->getViewFormat("RDHrs");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RDHrs")))
				$class = ' rnr-field-number';
			$row["RDHrs_class"] = $class;
	//	RegNDHrs - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RegNDHrs", $data, $keylink);
			$row["RegNDHrs_value"] = $value;
			$format = $pSet->getViewFormat("RegNDHrs");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RegNDHrs")))
				$class = ' rnr-field-number';
			$row["RegNDHrs_class"] = $class;
	//	RHNDHrs - Number
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
	//	SHNDHrs - Number
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
	//	CHNDHrs - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("CHNDHrs", $data, $keylink);
			$row["CHNDHrs_value"] = $value;
			$format = $pSet->getViewFormat("CHNDHrs");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("CHNDHrs")))
				$class = ' rnr-field-number';
			$row["CHNDHrs_class"] = $class;
	//	RDNDHrs - Number
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
	//	VLDay - Number
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
	//	SLDay - Number
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
	//	ELDay - Number
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
	//	PLDay - Number
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
	//	TrODay - Number
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
	//	IncludeBreakLate - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("IncludeBreakLate", $data, $keylink);
			$row["IncludeBreakLate_value"] = $value;
			$format = $pSet->getViewFormat("IncludeBreakLate");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("IncludeBreakLate")))
				$class = ' rnr-field-number';
			$row["IncludeBreakLate_class"] = $class;
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
$xt->load_template(GetTemplateName("empindschedule", "detailspreview"));
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