<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/payrollamt3_variables.php");

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
		$layout->customCssPageName = "payrollamt3_detailspreview";
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
$page_layouts["payrollamt3_detailspreview"] = $layout;




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
	$formattedValue = make_db_value("FromDate",$_SESSION[$sessionPrefix."_masterkey2"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("FromDate") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("FromDate") . "=" . $formattedValue;
	$formattedValue = make_db_value("ToDate",$_SESSION[$sessionPrefix."_masterkey3"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("ToDate") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("ToDate") . "=" . $formattedValue;
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
	//	SemiMonthly - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SemiMonthly", $data, $keylink);
			$row["SemiMonthly_value"] = $value;
			$format = $pSet->getViewFormat("SemiMonthly");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SemiMonthly")))
				$class = ' rnr-field-number';
			$row["SemiMonthly_class"] = $class;
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
	//	RegPay - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RegPay", $data, $keylink);
			$row["RegPay_value"] = $value;
			$format = $pSet->getViewFormat("RegPay");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RegPay")))
				$class = ' rnr-field-number';
			$row["RegPay_class"] = $class;
	//	Late - Number
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
	//	UnderTime - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("UnderTime", $data, $keylink);
			$row["UnderTime_value"] = $value;
			$format = $pSet->getViewFormat("UnderTime");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("UnderTime")))
				$class = ' rnr-field-number';
			$row["UnderTime_class"] = $class;
	//	RHoliday - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RHoliday", $data, $keylink);
			$row["RHoliday_value"] = $value;
			$format = $pSet->getViewFormat("RHoliday");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RHoliday")))
				$class = ' rnr-field-number';
			$row["RHoliday_class"] = $class;
	//	SHoliday - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SHoliday", $data, $keylink);
			$row["SHoliday_value"] = $value;
			$format = $pSet->getViewFormat("SHoliday");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SHoliday")))
				$class = ' rnr-field-number';
			$row["SHoliday_class"] = $class;
	//	CHoliday - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("CHoliday", $data, $keylink);
			$row["CHoliday_value"] = $value;
			$format = $pSet->getViewFormat("CHoliday");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("CHoliday")))
				$class = ' rnr-field-number';
			$row["CHoliday_class"] = $class;
	//	RegOT - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RegOT", $data, $keylink);
			$row["RegOT_value"] = $value;
			$format = $pSet->getViewFormat("RegOT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RegOT")))
				$class = ' rnr-field-number';
			$row["RegOT_class"] = $class;
	//	RHOT - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RHOT", $data, $keylink);
			$row["RHOT_value"] = $value;
			$format = $pSet->getViewFormat("RHOT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RHOT")))
				$class = ' rnr-field-number';
			$row["RHOT_class"] = $class;
	//	SHOT - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SHOT", $data, $keylink);
			$row["SHOT_value"] = $value;
			$format = $pSet->getViewFormat("SHOT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SHOT")))
				$class = ' rnr-field-number';
			$row["SHOT_class"] = $class;
	//	CHOT - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("CHOT", $data, $keylink);
			$row["CHOT_value"] = $value;
			$format = $pSet->getViewFormat("CHOT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("CHOT")))
				$class = ' rnr-field-number';
			$row["CHOT_class"] = $class;
	//	RDOT - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RDOT", $data, $keylink);
			$row["RDOT_value"] = $value;
			$format = $pSet->getViewFormat("RDOT");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RDOT")))
				$class = ' rnr-field-number';
			$row["RDOT_class"] = $class;
	//	RD - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RD", $data, $keylink);
			$row["RD_value"] = $value;
			$format = $pSet->getViewFormat("RD");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RD")))
				$class = ' rnr-field-number';
			$row["RD_class"] = $class;
	//	ND - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ND", $data, $keylink);
			$row["ND_value"] = $value;
			$format = $pSet->getViewFormat("ND");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ND")))
				$class = ' rnr-field-number';
			$row["ND_class"] = $class;
	//	RHND - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RHND", $data, $keylink);
			$row["RHND_value"] = $value;
			$format = $pSet->getViewFormat("RHND");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RHND")))
				$class = ' rnr-field-number';
			$row["RHND_class"] = $class;
	//	SHND - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SHND", $data, $keylink);
			$row["SHND_value"] = $value;
			$format = $pSet->getViewFormat("SHND");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SHND")))
				$class = ' rnr-field-number';
			$row["SHND_class"] = $class;
	//	CHND - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("CHND", $data, $keylink);
			$row["CHND_value"] = $value;
			$format = $pSet->getViewFormat("CHND");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("CHND")))
				$class = ' rnr-field-number';
			$row["CHND_class"] = $class;
	//	RDND - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RDND", $data, $keylink);
			$row["RDND_value"] = $value;
			$format = $pSet->getViewFormat("RDND");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RDND")))
				$class = ' rnr-field-number';
			$row["RDND_class"] = $class;
	//	VL - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("VL", $data, $keylink);
			$row["VL_value"] = $value;
			$format = $pSet->getViewFormat("VL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("VL")))
				$class = ' rnr-field-number';
			$row["VL_class"] = $class;
	//	SL - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SL", $data, $keylink);
			$row["SL_value"] = $value;
			$format = $pSet->getViewFormat("SL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SL")))
				$class = ' rnr-field-number';
			$row["SL_class"] = $class;
	//	EL - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EL", $data, $keylink);
			$row["EL_value"] = $value;
			$format = $pSet->getViewFormat("EL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EL")))
				$class = ' rnr-field-number';
			$row["EL_class"] = $class;
	//	PL - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PL", $data, $keylink);
			$row["PL_value"] = $value;
			$format = $pSet->getViewFormat("PL");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PL")))
				$class = ' rnr-field-number';
			$row["PL_class"] = $class;
	//	TrO - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TrO", $data, $keylink);
			$row["TrO_value"] = $value;
			$format = $pSet->getViewFormat("TrO");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TrO")))
				$class = ' rnr-field-number';
			$row["TrO_class"] = $class;
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
	//	LWOP - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("LWOP", $data, $keylink);
			$row["LWOP_value"] = $value;
			$format = $pSet->getViewFormat("LWOP");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("LWOP")))
				$class = ' rnr-field-number';
			$row["LWOP_class"] = $class;
	//	LWOPdays - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("LWOPdays", $data, $keylink);
			$row["LWOPdays_value"] = $value;
			$format = $pSet->getViewFormat("LWOPdays");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("LWOPdays")))
				$class = ' rnr-field-number';
			$row["LWOPdays_class"] = $class;
	//	TAdj - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAdj", $data, $keylink);
			$row["TAdj_value"] = $value;
			$format = $pSet->getViewFormat("TAdj");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAdj")))
				$class = ' rnr-field-number';
			$row["TAdj_class"] = $class;
	//	TAdjt - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TAdjt", $data, $keylink);
			$row["TAdjt_value"] = $value;
			$format = $pSet->getViewFormat("TAdjt");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TAdjt")))
				$class = ' rnr-field-number';
			$row["TAdjt_class"] = $class;
	//	TDeduct - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TDeduct", $data, $keylink);
			$row["TDeduct_value"] = $value;
			$format = $pSet->getViewFormat("TDeduct");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TDeduct")))
				$class = ' rnr-field-number';
			$row["TDeduct_class"] = $class;
	//	Ttax - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Ttax", $data, $keylink);
			$row["Ttax_value"] = $value;
			$format = $pSet->getViewFormat("Ttax");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Ttax")))
				$class = ' rnr-field-number';
			$row["Ttax_class"] = $class;
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
	//	TDeductions - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TDeductions", $data, $keylink);
			$row["TDeductions_value"] = $value;
			$format = $pSet->getViewFormat("TDeductions");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TDeductions")))
				$class = ' rnr-field-number';
			$row["TDeductions_class"] = $class;
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
	//	Allowance - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Allowance", $data, $keylink);
			$row["Allowance_value"] = $value;
			$format = $pSet->getViewFormat("Allowance");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Allowance")))
				$class = ' rnr-field-number';
			$row["Allowance_class"] = $class;
	//	AgentShare - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("AgentShare", $data, $keylink);
			$row["AgentShare_value"] = $value;
			$format = $pSet->getViewFormat("AgentShare");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("AgentShare")))
				$class = ' rnr-field-number';
			$row["AgentShare_class"] = $class;
	//	GrossPay - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("GrossPay", $data, $keylink);
			$row["GrossPay_value"] = $value;
			$format = $pSet->getViewFormat("GrossPay");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("GrossPay")))
				$class = ' rnr-field-number';
			$row["GrossPay_class"] = $class;
	//	NetPay - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("NetPay", $data, $keylink);
			$row["NetPay_value"] = $value;
			$format = $pSet->getViewFormat("NetPay");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("NetPay")))
				$class = ' rnr-field-number';
			$row["NetPay_class"] = $class;
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
$xt->load_template(GetTemplateName("payrollamt3", "detailspreview"));
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