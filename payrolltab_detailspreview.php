<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/payrolltab_variables.php");

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
		$layout->customCssPageName = "payrolltab_detailspreview";
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
$page_layouts["payrolltab_detailspreview"] = $layout;




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
if($mastertable == "payroll")
{
	$formattedValue = make_db_value("ToDate",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("ToDate") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("ToDate") . "=" . $formattedValue;
	$formattedValue = make_db_value("Employer",$_SESSION[$sessionPrefix."_masterkey2"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("Employer") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("Employer") . "=" . $formattedValue;
	$formattedValue = make_db_value("Division",$_SESSION[$sessionPrefix."_masterkey3"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("Division") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("Division") . "=" . $formattedValue;
	$formattedValue = make_db_value("WageType",$_SESSION[$sessionPrefix."_masterkey4"]);
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
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["PtabID"]));
	
	
	//	PtabID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PtabID", $data, $keylink);
			$row["PtabID_value"] = $value;
			$format = $pSet->getViewFormat("PtabID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PtabID")))
				$class = ' rnr-field-number';
			$row["PtabID_class"] = $class;
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
	//	Status - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Status", $data, $keylink);
			$row["Status_value"] = $value;
			$format = $pSet->getViewFormat("Status");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Status")))
				$class = ' rnr-field-number';
			$row["Status_class"] = $class;
	//	BasicMonthly - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("BasicMonthly", $data, $keylink);
			$row["BasicMonthly_value"] = $value;
			$format = $pSet->getViewFormat("BasicMonthly");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("BasicMonthly")))
				$class = ' rnr-field-number';
			$row["BasicMonthly_class"] = $class;
	//	BasicDaily - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("BasicDaily", $data, $keylink);
			$row["BasicDaily_value"] = $value;
			$format = $pSet->getViewFormat("BasicDaily");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("BasicDaily")))
				$class = ' rnr-field-number';
			$row["BasicDaily_class"] = $class;
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
	//	Absent - Number
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
	//	SHOTHRs - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SHOTHRs", $data, $keylink);
			$row["SHOTHRs_value"] = $value;
			$format = $pSet->getViewFormat("SHOTHRs");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SHOTHRs")))
				$class = ' rnr-field-number';
			$row["SHOTHRs_class"] = $class;
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
	//	VLDays - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("VLDays", $data, $keylink);
			$row["VLDays_value"] = $value;
			$format = $pSet->getViewFormat("VLDays");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("VLDays")))
				$class = ' rnr-field-number';
			$row["VLDays_class"] = $class;
	//	SLDays - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SLDays", $data, $keylink);
			$row["SLDays_value"] = $value;
			$format = $pSet->getViewFormat("SLDays");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SLDays")))
				$class = ' rnr-field-number';
			$row["SLDays_class"] = $class;
	//	ELDays - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ELDays", $data, $keylink);
			$row["ELDays_value"] = $value;
			$format = $pSet->getViewFormat("ELDays");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ELDays")))
				$class = ' rnr-field-number';
			$row["ELDays_class"] = $class;
	//	PLDays - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PLDays", $data, $keylink);
			$row["PLDays_value"] = $value;
			$format = $pSet->getViewFormat("PLDays");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PLDays")))
				$class = ' rnr-field-number';
			$row["PLDays_class"] = $class;
	//	TrODays - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TrODays", $data, $keylink);
			$row["TrODays_value"] = $value;
			$format = $pSet->getViewFormat("TrODays");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TrODays")))
				$class = ' rnr-field-number';
			$row["TrODays_class"] = $class;
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
	//	AllowancePerDay - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("AllowancePerDay", $data, $keylink);
			$row["AllowancePerDay_value"] = $value;
			$format = $pSet->getViewFormat("AllowancePerDay");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("AllowancePerDay")))
				$class = ' rnr-field-number';
			$row["AllowancePerDay_class"] = $class;
	//	VLBalance - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("VLBalance", $data, $keylink);
			$row["VLBalance_value"] = $value;
			$format = $pSet->getViewFormat("VLBalance");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("VLBalance")))
				$class = ' rnr-field-number';
			$row["VLBalance_class"] = $class;
	//	SLBalance - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SLBalance", $data, $keylink);
			$row["SLBalance_value"] = $value;
			$format = $pSet->getViewFormat("SLBalance");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SLBalance")))
				$class = ' rnr-field-number';
			$row["SLBalance_class"] = $class;
	//	ELBalance - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ELBalance", $data, $keylink);
			$row["ELBalance_value"] = $value;
			$format = $pSet->getViewFormat("ELBalance");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ELBalance")))
				$class = ' rnr-field-number';
			$row["ELBalance_class"] = $class;
	//	PLBalance - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PLBalance", $data, $keylink);
			$row["PLBalance_value"] = $value;
			$format = $pSet->getViewFormat("PLBalance");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PLBalance")))
				$class = ' rnr-field-number';
			$row["PLBalance_class"] = $class;
	//	AgencyShare - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("AgencyShare", $data, $keylink);
			$row["AgencyShare_value"] = $value;
			$format = $pSet->getViewFormat("AgencyShare");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("AgencyShare")))
				$class = ' rnr-field-number';
			$row["AgencyShare_class"] = $class;
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
	//	PayrollID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PayrollID", $data, $keylink);
			$row["PayrollID_value"] = $value;
			$format = $pSet->getViewFormat("PayrollID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PayrollID")))
				$class = ' rnr-field-number';
			$row["PayrollID_class"] = $class;
	//	Email - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Email", $data, $keylink);
			$row["Email_value"] = $value;
			$format = $pSet->getViewFormat("Email");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Email")))
				$class = ' rnr-field-number';
			$row["Email_class"] = $class;
	//	Locked - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Locked", $data, $keylink);
			$row["Locked_value"] = $value;
			$format = $pSet->getViewFormat("Locked");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Locked")))
				$class = ' rnr-field-number';
			$row["Locked_class"] = $class;
	//	Position - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Position", $data, $keylink);
			$row["Position_value"] = $value;
			$format = $pSet->getViewFormat("Position");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Position")))
				$class = ' rnr-field-number';
			$row["Position_class"] = $class;
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
$xt->load_template(GetTemplateName("payrolltab", "detailspreview"));
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