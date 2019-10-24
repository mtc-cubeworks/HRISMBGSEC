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
	//	Thirteenth - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Thirteenth", $data, $keylink);
			$row["Thirteenth_value"] = $value;
			$format = $pSet->getViewFormat("Thirteenth");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Thirteenth")))
				$class = ' rnr-field-number';
			$row["Thirteenth_class"] = $class;
	//	Taxable - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Taxable", $data, $keylink);
			$row["Taxable_value"] = $value;
			$format = $pSet->getViewFormat("Taxable");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Taxable")))
				$class = ' rnr-field-number';
			$row["Taxable_class"] = $class;
	//	NDOTHrs - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("NDOTHrs", $data, $keylink);
			$row["NDOTHrs_value"] = $value;
			$format = $pSet->getViewFormat("NDOTHrs");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("NDOTHrs")))
				$class = ' rnr-field-number';
			$row["NDOTHrs_class"] = $class;
	//	RHNDOTHrs - Number
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
	//	SHNDOTHrs - Number
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
	//	RDNDOTHrs - Number
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
	//	DH - Number
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
	//	DHRD - Number
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
	//	DHOT - Number
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
	//	DHRDOT - Number
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
	//	SHRDND - Number
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
	//	RHRDND - Number
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
	//	SHRDNDOT - Number
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
	//	RHRDNDOT - Number
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
	//	DHND - Number
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
	//	DHRDND - Number
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
	//	DHNDOT - Number
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
	//	DHRDNDOT - Number
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
	//	ThirToDate - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ThirToDate", $data, $keylink);
			$row["ThirToDate_value"] = $value;
			$format = $pSet->getViewFormat("ThirToDate");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ThirToDate")))
				$class = ' rnr-field-number';
			$row["ThirToDate_class"] = $class;
	//	TaxableToDate - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TaxableToDate", $data, $keylink);
			$row["TaxableToDate_value"] = $value;
			$format = $pSet->getViewFormat("TaxableToDate");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TaxableToDate")))
				$class = ' rnr-field-number';
			$row["TaxableToDate_class"] = $class;
	//	TaxToDate - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TaxToDate", $data, $keylink);
			$row["TaxToDate_value"] = $value;
			$format = $pSet->getViewFormat("TaxToDate");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TaxToDate")))
				$class = ' rnr-field-number';
			$row["TaxToDate_class"] = $class;
	//	SHOTD - Number
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
	//	RegRD - Number
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
	//	RHRD - Number
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
	//	SHRD - Number
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
	//	RegND - Number
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
	//	RHRDOT - Number
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
	//	SHRDOT - Number
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
	//	SHRDOTD - Number
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