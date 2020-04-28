<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadtrcard1 = array();
	$tdatadtrcard1[".truncateText"] = true;
	$tdatadtrcard1[".NumberOfChars"] = 80;
	$tdatadtrcard1[".ShortName"] = "dtrcard1";
	$tdatadtrcard1[".OwnerID"] = "EmployeeID";
	$tdatadtrcard1[".OriginalTable"] = "dtrcard";

//	field labels
$fieldLabelsdtrcard1 = array();
$fieldToolTipsdtrcard1 = array();
$pageTitlesdtrcard1 = array();
$placeHoldersdtrcard1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdtrcard1["English"] = array();
	$fieldToolTipsdtrcard1["English"] = array();
	$placeHoldersdtrcard1["English"] = array();
	$pageTitlesdtrcard1["English"] = array();
	$fieldLabelsdtrcard1["English"]["ScID"] = "Sc ID";
	$fieldToolTipsdtrcard1["English"]["ScID"] = "";
	$placeHoldersdtrcard1["English"]["ScID"] = "";
	$fieldLabelsdtrcard1["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipsdtrcard1["English"]["EmployeeID"] = "";
	$placeHoldersdtrcard1["English"]["EmployeeID"] = "";
	$fieldLabelsdtrcard1["English"]["SDate"] = "SDate";
	$fieldToolTipsdtrcard1["English"]["SDate"] = "";
	$placeHoldersdtrcard1["English"]["SDate"] = "";
	$fieldLabelsdtrcard1["English"]["STimeIn"] = "STime In";
	$fieldToolTipsdtrcard1["English"]["STimeIn"] = "";
	$placeHoldersdtrcard1["English"]["STimeIn"] = "";
	$fieldLabelsdtrcard1["English"]["STimeOut"] = "STime Out";
	$fieldToolTipsdtrcard1["English"]["STimeOut"] = "";
	$placeHoldersdtrcard1["English"]["STimeOut"] = "";
	$fieldLabelsdtrcard1["English"]["TimeIn"] = "Time In";
	$fieldToolTipsdtrcard1["English"]["TimeIn"] = "";
	$placeHoldersdtrcard1["English"]["TimeIn"] = "";
	$fieldLabelsdtrcard1["English"]["TimeOut"] = "Time Out";
	$fieldToolTipsdtrcard1["English"]["TimeOut"] = "";
	$placeHoldersdtrcard1["English"]["TimeOut"] = "";
	$fieldLabelsdtrcard1["English"]["DayIs"] = "Day";
	$fieldToolTipsdtrcard1["English"]["DayIs"] = "";
	$placeHoldersdtrcard1["English"]["DayIs"] = "";
	$fieldLabelsdtrcard1["English"]["RestDay"] = "Rest Day";
	$fieldToolTipsdtrcard1["English"]["RestDay"] = "";
	$placeHoldersdtrcard1["English"]["RestDay"] = "";
	$fieldLabelsdtrcard1["English"]["Mispunched"] = "Mispunched";
	$fieldToolTipsdtrcard1["English"]["Mispunched"] = "";
	$placeHoldersdtrcard1["English"]["Mispunched"] = "";
	$fieldLabelsdtrcard1["English"]["HolidayType"] = "Holiday";
	$fieldToolTipsdtrcard1["English"]["HolidayType"] = "";
	$placeHoldersdtrcard1["English"]["HolidayType"] = "";
	$fieldLabelsdtrcard1["English"]["VLDay"] = "VL";
	$fieldToolTipsdtrcard1["English"]["VLDay"] = "";
	$placeHoldersdtrcard1["English"]["VLDay"] = "";
	$fieldLabelsdtrcard1["English"]["SLDay"] = "SL";
	$fieldToolTipsdtrcard1["English"]["SLDay"] = "";
	$placeHoldersdtrcard1["English"]["SLDay"] = "";
	$fieldLabelsdtrcard1["English"]["ELDay"] = "EL";
	$fieldToolTipsdtrcard1["English"]["ELDay"] = "";
	$placeHoldersdtrcard1["English"]["ELDay"] = "";
	$fieldLabelsdtrcard1["English"]["PLDay"] = "PL";
	$fieldToolTipsdtrcard1["English"]["PLDay"] = "";
	$placeHoldersdtrcard1["English"]["PLDay"] = "";
	$fieldLabelsdtrcard1["English"]["OBDay"] = "OB";
	$fieldToolTipsdtrcard1["English"]["OBDay"] = "";
	$placeHoldersdtrcard1["English"]["OBDay"] = "";
	$fieldLabelsdtrcard1["English"]["Late"] = "Late";
	$fieldToolTipsdtrcard1["English"]["Late"] = "";
	$placeHoldersdtrcard1["English"]["Late"] = "";
	$fieldLabelsdtrcard1["English"]["UTime"] = "UTime";
	$fieldToolTipsdtrcard1["English"]["UTime"] = "";
	$placeHoldersdtrcard1["English"]["UTime"] = "";
	$fieldLabelsdtrcard1["English"]["Absent"] = "Absent";
	$fieldToolTipsdtrcard1["English"]["Absent"] = "";
	$placeHoldersdtrcard1["English"]["Absent"] = "";
	$fieldLabelsdtrcard1["English"]["OTmins"] = "OTmins";
	$fieldToolTipsdtrcard1["English"]["OTmins"] = "";
	$placeHoldersdtrcard1["English"]["OTmins"] = "";
	if (count($fieldToolTipsdtrcard1["English"]))
		$tdatadtrcard1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdtrcard1[""] = array();
	$fieldToolTipsdtrcard1[""] = array();
	$placeHoldersdtrcard1[""] = array();
	$pageTitlesdtrcard1[""] = array();
	$fieldLabelsdtrcard1[""]["ScID"] = "Sc ID";
	$fieldToolTipsdtrcard1[""]["ScID"] = "";
	$placeHoldersdtrcard1[""]["ScID"] = "";
	$fieldLabelsdtrcard1[""]["EmployeeID"] = "Employee ID";
	$fieldToolTipsdtrcard1[""]["EmployeeID"] = "";
	$placeHoldersdtrcard1[""]["EmployeeID"] = "";
	$fieldLabelsdtrcard1[""]["SDate"] = "SDate";
	$fieldToolTipsdtrcard1[""]["SDate"] = "";
	$placeHoldersdtrcard1[""]["SDate"] = "";
	$fieldLabelsdtrcard1[""]["STimeIn"] = "STime In";
	$fieldToolTipsdtrcard1[""]["STimeIn"] = "";
	$placeHoldersdtrcard1[""]["STimeIn"] = "";
	$fieldLabelsdtrcard1[""]["STimeOut"] = "STime Out";
	$fieldToolTipsdtrcard1[""]["STimeOut"] = "";
	$placeHoldersdtrcard1[""]["STimeOut"] = "";
	$fieldLabelsdtrcard1[""]["TimeIn"] = "Time In";
	$fieldToolTipsdtrcard1[""]["TimeIn"] = "";
	$placeHoldersdtrcard1[""]["TimeIn"] = "";
	$fieldLabelsdtrcard1[""]["TimeOut"] = "Time Out";
	$fieldToolTipsdtrcard1[""]["TimeOut"] = "";
	$placeHoldersdtrcard1[""]["TimeOut"] = "";
	$fieldLabelsdtrcard1[""]["DayIs"] = "Day Is";
	$fieldToolTipsdtrcard1[""]["DayIs"] = "";
	$placeHoldersdtrcard1[""]["DayIs"] = "";
	$fieldLabelsdtrcard1[""]["RestDay"] = "Rest Day";
	$fieldToolTipsdtrcard1[""]["RestDay"] = "";
	$placeHoldersdtrcard1[""]["RestDay"] = "";
	$fieldLabelsdtrcard1[""]["Mispunched"] = "Mispunched";
	$fieldToolTipsdtrcard1[""]["Mispunched"] = "";
	$placeHoldersdtrcard1[""]["Mispunched"] = "";
	$fieldLabelsdtrcard1[""]["HolidayType"] = "Holiday Type";
	$fieldToolTipsdtrcard1[""]["HolidayType"] = "";
	$placeHoldersdtrcard1[""]["HolidayType"] = "";
	$fieldLabelsdtrcard1[""]["VLDay"] = "VLDay";
	$fieldToolTipsdtrcard1[""]["VLDay"] = "";
	$placeHoldersdtrcard1[""]["VLDay"] = "";
	$fieldLabelsdtrcard1[""]["SLDay"] = "SLDay";
	$fieldToolTipsdtrcard1[""]["SLDay"] = "";
	$placeHoldersdtrcard1[""]["SLDay"] = "";
	$fieldLabelsdtrcard1[""]["ELDay"] = "ELDay";
	$fieldToolTipsdtrcard1[""]["ELDay"] = "";
	$placeHoldersdtrcard1[""]["ELDay"] = "";
	$fieldLabelsdtrcard1[""]["PLDay"] = "PLDay";
	$fieldToolTipsdtrcard1[""]["PLDay"] = "";
	$placeHoldersdtrcard1[""]["PLDay"] = "";
	$fieldLabelsdtrcard1[""]["OBDay"] = "OBDay";
	$fieldToolTipsdtrcard1[""]["OBDay"] = "";
	$placeHoldersdtrcard1[""]["OBDay"] = "";
	$fieldLabelsdtrcard1[""]["Late"] = "Late";
	$fieldToolTipsdtrcard1[""]["Late"] = "";
	$placeHoldersdtrcard1[""]["Late"] = "";
	$fieldLabelsdtrcard1[""]["UTime"] = "UTime";
	$fieldToolTipsdtrcard1[""]["UTime"] = "";
	$placeHoldersdtrcard1[""]["UTime"] = "";
	$fieldLabelsdtrcard1[""]["Absent"] = "Absent";
	$fieldToolTipsdtrcard1[""]["Absent"] = "";
	$placeHoldersdtrcard1[""]["Absent"] = "";
	$fieldLabelsdtrcard1[""]["OTmins"] = "OTmins";
	$fieldToolTipsdtrcard1[""]["OTmins"] = "";
	$placeHoldersdtrcard1[""]["OTmins"] = "";
	if (count($fieldToolTipsdtrcard1[""]))
		$tdatadtrcard1[".isUseToolTips"] = true;
}


	$tdatadtrcard1[".NCSearch"] = true;



$tdatadtrcard1[".shortTableName"] = "dtrcard1";
$tdatadtrcard1[".nSecOptions"] = 1;
$tdatadtrcard1[".recsPerRowPrint"] = 1;
$tdatadtrcard1[".mainTableOwnerID"] = "EmployeeID";
$tdatadtrcard1[".moveNext"] = 1;
$tdatadtrcard1[".entityType"] = 1;

$tdatadtrcard1[".strOriginalTableName"] = "dtrcard";

	



$tdatadtrcard1[".showAddInPopup"] = false;

$tdatadtrcard1[".showEditInPopup"] = false;

$tdatadtrcard1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadtrcard1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadtrcard1[".fieldsForRegister"] = array();

$tdatadtrcard1[".listAjax"] = false;

	$tdatadtrcard1[".audit"] = false;

	$tdatadtrcard1[".locking"] = false;



$tdatadtrcard1[".list"] = true;



$tdatadtrcard1[".reorderRecordsByHeader"] = true;


$tdatadtrcard1[".exportFormatting"] = 2;
$tdatadtrcard1[".exportDelimiter"] = ",";
		
$tdatadtrcard1[".view"] = true;


$tdatadtrcard1[".exportTo"] = true;

$tdatadtrcard1[".printFriendly"] = true;


$tdatadtrcard1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadtrcard1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatadtrcard1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatadtrcard1[".searchSaving"] = false;
//

$tdatadtrcard1[".showSearchPanel"] = true;
		$tdatadtrcard1[".flexibleSearch"] = true;

$tdatadtrcard1[".isUseAjaxSuggest"] = true;

$tdatadtrcard1[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																												

$tdatadtrcard1[".ajaxCodeSnippetAdded"] = false;

$tdatadtrcard1[".buttonsAdded"] = false;

$tdatadtrcard1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadtrcard1[".isUseTimeForSearch"] = false;



$tdatadtrcard1[".badgeColor"] = "edca00";


$tdatadtrcard1[".allSearchFields"] = array();
$tdatadtrcard1[".filterFields"] = array();
$tdatadtrcard1[".requiredSearchFields"] = array();

$tdatadtrcard1[".allSearchFields"][] = "ScID";
	$tdatadtrcard1[".allSearchFields"][] = "SDate";
	$tdatadtrcard1[".allSearchFields"][] = "EmployeeID";
	$tdatadtrcard1[".allSearchFields"][] = "DayIs";
	$tdatadtrcard1[".allSearchFields"][] = "STimeIn";
	$tdatadtrcard1[".allSearchFields"][] = "STimeOut";
	$tdatadtrcard1[".allSearchFields"][] = "TimeIn";
	$tdatadtrcard1[".allSearchFields"][] = "TimeOut";
	$tdatadtrcard1[".allSearchFields"][] = "Mispunched";
	$tdatadtrcard1[".allSearchFields"][] = "Late";
	$tdatadtrcard1[".allSearchFields"][] = "UTime";
	$tdatadtrcard1[".allSearchFields"][] = "Absent";
	$tdatadtrcard1[".allSearchFields"][] = "OTmins";
	$tdatadtrcard1[".allSearchFields"][] = "RestDay";
	$tdatadtrcard1[".allSearchFields"][] = "HolidayType";
	$tdatadtrcard1[".allSearchFields"][] = "VLDay";
	$tdatadtrcard1[".allSearchFields"][] = "SLDay";
	$tdatadtrcard1[".allSearchFields"][] = "ELDay";
	$tdatadtrcard1[".allSearchFields"][] = "PLDay";
	$tdatadtrcard1[".allSearchFields"][] = "OBDay";
	

$tdatadtrcard1[".googleLikeFields"] = array();
$tdatadtrcard1[".googleLikeFields"][] = "ScID";
$tdatadtrcard1[".googleLikeFields"][] = "EmployeeID";
$tdatadtrcard1[".googleLikeFields"][] = "SDate";
$tdatadtrcard1[".googleLikeFields"][] = "STimeIn";
$tdatadtrcard1[".googleLikeFields"][] = "STimeOut";
$tdatadtrcard1[".googleLikeFields"][] = "TimeIn";
$tdatadtrcard1[".googleLikeFields"][] = "TimeOut";
$tdatadtrcard1[".googleLikeFields"][] = "DayIs";
$tdatadtrcard1[".googleLikeFields"][] = "RestDay";
$tdatadtrcard1[".googleLikeFields"][] = "Mispunched";
$tdatadtrcard1[".googleLikeFields"][] = "HolidayType";
$tdatadtrcard1[".googleLikeFields"][] = "VLDay";
$tdatadtrcard1[".googleLikeFields"][] = "SLDay";
$tdatadtrcard1[".googleLikeFields"][] = "ELDay";
$tdatadtrcard1[".googleLikeFields"][] = "PLDay";
$tdatadtrcard1[".googleLikeFields"][] = "OBDay";
$tdatadtrcard1[".googleLikeFields"][] = "Late";
$tdatadtrcard1[".googleLikeFields"][] = "UTime";
$tdatadtrcard1[".googleLikeFields"][] = "Absent";
$tdatadtrcard1[".googleLikeFields"][] = "OTmins";


$tdatadtrcard1[".advSearchFields"] = array();
$tdatadtrcard1[".advSearchFields"][] = "ScID";
$tdatadtrcard1[".advSearchFields"][] = "SDate";
$tdatadtrcard1[".advSearchFields"][] = "EmployeeID";
$tdatadtrcard1[".advSearchFields"][] = "DayIs";
$tdatadtrcard1[".advSearchFields"][] = "STimeIn";
$tdatadtrcard1[".advSearchFields"][] = "STimeOut";
$tdatadtrcard1[".advSearchFields"][] = "TimeIn";
$tdatadtrcard1[".advSearchFields"][] = "TimeOut";
$tdatadtrcard1[".advSearchFields"][] = "Mispunched";
$tdatadtrcard1[".advSearchFields"][] = "Late";
$tdatadtrcard1[".advSearchFields"][] = "UTime";
$tdatadtrcard1[".advSearchFields"][] = "Absent";
$tdatadtrcard1[".advSearchFields"][] = "OTmins";
$tdatadtrcard1[".advSearchFields"][] = "RestDay";
$tdatadtrcard1[".advSearchFields"][] = "HolidayType";
$tdatadtrcard1[".advSearchFields"][] = "VLDay";
$tdatadtrcard1[".advSearchFields"][] = "SLDay";
$tdatadtrcard1[".advSearchFields"][] = "ELDay";
$tdatadtrcard1[".advSearchFields"][] = "PLDay";
$tdatadtrcard1[".advSearchFields"][] = "OBDay";

$tdatadtrcard1[".tableType"] = "list";

$tdatadtrcard1[".printerPageOrientation"] = 0;
$tdatadtrcard1[".nPrinterPageScale"] = 100;

$tdatadtrcard1[".nPrinterSplitRecords"] = 40;

$tdatadtrcard1[".nPrinterPDFSplitRecords"] = 40;



$tdatadtrcard1[".geocodingEnabled"] = false;





$tdatadtrcard1[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatadtrcard1[".totalsFields"] = array();
$tdatadtrcard1[".totalsFields"][] = array(
	"fName" => "SDate",
	"numRows" => 0,
	"totalsType" => "COUNT",
	"viewFormat" => 'Short Date');
$tdatadtrcard1[".totalsFields"][] = array(
	"fName" => "Mispunched",
	"numRows" => 0,
	"totalsType" => "COUNT",
	"viewFormat" => 'Checkbox');
$tdatadtrcard1[".totalsFields"][] = array(
	"fName" => "Late",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatadtrcard1[".totalsFields"][] = array(
	"fName" => "UTime",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatadtrcard1[".totalsFields"][] = array(
	"fName" => "Absent",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatadtrcard1[".totalsFields"][] = array(
	"fName" => "OTmins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadtrcard1[".totalsFields"][] = array(
	"fName" => "RestDay",
	"numRows" => 0,
	"totalsType" => "COUNT",
	"viewFormat" => 'Checkbox');
$tdatadtrcard1[".totalsFields"][] = array(
	"fName" => "HolidayType",
	"numRows" => 0,
	"totalsType" => "COUNT",
	"viewFormat" => '');
$tdatadtrcard1[".totalsFields"][] = array(
	"fName" => "VLDay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatadtrcard1[".totalsFields"][] = array(
	"fName" => "SLDay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatadtrcard1[".totalsFields"][] = array(
	"fName" => "ELDay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatadtrcard1[".totalsFields"][] = array(
	"fName" => "PLDay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatadtrcard1[".totalsFields"][] = array(
	"fName" => "OBDay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');

$tdatadtrcard1[".pageSize"] = 20;

$tdatadtrcard1[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY SDate";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadtrcard1[".strOrderBy"] = $tstrOrderBy;

$tdatadtrcard1[".orderindexes"] = array();
	$tdatadtrcard1[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "SDate");


$tdatadtrcard1[".sqlHead"] = "SELECT ScID,  EmployeeID,  SDate,  STimeIn,  STimeOut,  TimeIn,  TimeOut,  DayIs,  RestDay,  Mispunched,  HolidayType,  VLDay,  SLDay,  ELDay,  PLDay,  OBDay,  Late,  UTime,  Absent,  OTmins";
$tdatadtrcard1[".sqlFrom"] = "FROM dtrcard";
$tdatadtrcard1[".sqlWhereExpr"] = "";
$tdatadtrcard1[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",	
	'showRowCount' => 0,
	'hideEmpty' => 0,	
);				  
$tdatadtrcard1[".arrGridTabs"] = $arrGridTabs;











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadtrcard1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadtrcard1[".arrGroupsPerPage"] = $arrGPP;

$tdatadtrcard1[".highlightSearchResults"] = true;

$tableKeysdtrcard1 = array();
$tableKeysdtrcard1[] = "ScID";
$tdatadtrcard1[".Keys"] = $tableKeysdtrcard1;

$tdatadtrcard1[".listFields"] = array();
$tdatadtrcard1[".listFields"][] = "SDate";
$tdatadtrcard1[".listFields"][] = "DayIs";
$tdatadtrcard1[".listFields"][] = "STimeIn";
$tdatadtrcard1[".listFields"][] = "STimeOut";
$tdatadtrcard1[".listFields"][] = "TimeIn";
$tdatadtrcard1[".listFields"][] = "TimeOut";
$tdatadtrcard1[".listFields"][] = "Mispunched";
$tdatadtrcard1[".listFields"][] = "Late";
$tdatadtrcard1[".listFields"][] = "UTime";
$tdatadtrcard1[".listFields"][] = "Absent";
$tdatadtrcard1[".listFields"][] = "OTmins";
$tdatadtrcard1[".listFields"][] = "RestDay";
$tdatadtrcard1[".listFields"][] = "HolidayType";
$tdatadtrcard1[".listFields"][] = "VLDay";
$tdatadtrcard1[".listFields"][] = "SLDay";
$tdatadtrcard1[".listFields"][] = "ELDay";
$tdatadtrcard1[".listFields"][] = "PLDay";
$tdatadtrcard1[".listFields"][] = "OBDay";

$tdatadtrcard1[".hideMobileList"] = array();


$tdatadtrcard1[".viewFields"] = array();
$tdatadtrcard1[".viewFields"][] = "ScID";
$tdatadtrcard1[".viewFields"][] = "SDate";
$tdatadtrcard1[".viewFields"][] = "EmployeeID";
$tdatadtrcard1[".viewFields"][] = "DayIs";
$tdatadtrcard1[".viewFields"][] = "STimeIn";
$tdatadtrcard1[".viewFields"][] = "STimeOut";
$tdatadtrcard1[".viewFields"][] = "TimeIn";
$tdatadtrcard1[".viewFields"][] = "TimeOut";
$tdatadtrcard1[".viewFields"][] = "Mispunched";
$tdatadtrcard1[".viewFields"][] = "Late";
$tdatadtrcard1[".viewFields"][] = "UTime";
$tdatadtrcard1[".viewFields"][] = "Absent";
$tdatadtrcard1[".viewFields"][] = "OTmins";
$tdatadtrcard1[".viewFields"][] = "RestDay";
$tdatadtrcard1[".viewFields"][] = "HolidayType";
$tdatadtrcard1[".viewFields"][] = "VLDay";
$tdatadtrcard1[".viewFields"][] = "SLDay";
$tdatadtrcard1[".viewFields"][] = "ELDay";
$tdatadtrcard1[".viewFields"][] = "PLDay";
$tdatadtrcard1[".viewFields"][] = "OBDay";

$tdatadtrcard1[".addFields"] = array();

$tdatadtrcard1[".masterListFields"] = array();
$tdatadtrcard1[".masterListFields"][] = "ScID";
$tdatadtrcard1[".masterListFields"][] = "SDate";
$tdatadtrcard1[".masterListFields"][] = "EmployeeID";
$tdatadtrcard1[".masterListFields"][] = "DayIs";
$tdatadtrcard1[".masterListFields"][] = "STimeIn";
$tdatadtrcard1[".masterListFields"][] = "STimeOut";
$tdatadtrcard1[".masterListFields"][] = "TimeIn";
$tdatadtrcard1[".masterListFields"][] = "TimeOut";
$tdatadtrcard1[".masterListFields"][] = "Mispunched";
$tdatadtrcard1[".masterListFields"][] = "Late";
$tdatadtrcard1[".masterListFields"][] = "UTime";
$tdatadtrcard1[".masterListFields"][] = "Absent";
$tdatadtrcard1[".masterListFields"][] = "OTmins";
$tdatadtrcard1[".masterListFields"][] = "RestDay";
$tdatadtrcard1[".masterListFields"][] = "HolidayType";
$tdatadtrcard1[".masterListFields"][] = "VLDay";
$tdatadtrcard1[".masterListFields"][] = "SLDay";
$tdatadtrcard1[".masterListFields"][] = "ELDay";
$tdatadtrcard1[".masterListFields"][] = "PLDay";
$tdatadtrcard1[".masterListFields"][] = "OBDay";

$tdatadtrcard1[".inlineAddFields"] = array();

$tdatadtrcard1[".editFields"] = array();

$tdatadtrcard1[".inlineEditFields"] = array();

$tdatadtrcard1[".updateSelectedFields"] = array();


$tdatadtrcard1[".exportFields"] = array();
$tdatadtrcard1[".exportFields"][] = "ScID";
$tdatadtrcard1[".exportFields"][] = "SDate";
$tdatadtrcard1[".exportFields"][] = "EmployeeID";
$tdatadtrcard1[".exportFields"][] = "DayIs";
$tdatadtrcard1[".exportFields"][] = "STimeIn";
$tdatadtrcard1[".exportFields"][] = "STimeOut";
$tdatadtrcard1[".exportFields"][] = "TimeIn";
$tdatadtrcard1[".exportFields"][] = "TimeOut";
$tdatadtrcard1[".exportFields"][] = "Mispunched";
$tdatadtrcard1[".exportFields"][] = "Late";
$tdatadtrcard1[".exportFields"][] = "UTime";
$tdatadtrcard1[".exportFields"][] = "Absent";
$tdatadtrcard1[".exportFields"][] = "OTmins";
$tdatadtrcard1[".exportFields"][] = "RestDay";
$tdatadtrcard1[".exportFields"][] = "HolidayType";
$tdatadtrcard1[".exportFields"][] = "VLDay";
$tdatadtrcard1[".exportFields"][] = "SLDay";
$tdatadtrcard1[".exportFields"][] = "ELDay";
$tdatadtrcard1[".exportFields"][] = "PLDay";
$tdatadtrcard1[".exportFields"][] = "OBDay";

$tdatadtrcard1[".importFields"] = array();

$tdatadtrcard1[".printFields"] = array();
$tdatadtrcard1[".printFields"][] = "SDate";
$tdatadtrcard1[".printFields"][] = "DayIs";
$tdatadtrcard1[".printFields"][] = "STimeIn";
$tdatadtrcard1[".printFields"][] = "STimeOut";
$tdatadtrcard1[".printFields"][] = "TimeIn";
$tdatadtrcard1[".printFields"][] = "TimeOut";
$tdatadtrcard1[".printFields"][] = "Mispunched";
$tdatadtrcard1[".printFields"][] = "Late";
$tdatadtrcard1[".printFields"][] = "UTime";
$tdatadtrcard1[".printFields"][] = "Absent";
$tdatadtrcard1[".printFields"][] = "OTmins";
$tdatadtrcard1[".printFields"][] = "RestDay";
$tdatadtrcard1[".printFields"][] = "HolidayType";
$tdatadtrcard1[".printFields"][] = "VLDay";
$tdatadtrcard1[".printFields"][] = "SLDay";
$tdatadtrcard1[".printFields"][] = "ELDay";
$tdatadtrcard1[".printFields"][] = "PLDay";
$tdatadtrcard1[".printFields"][] = "OBDay";


//	ScID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ScID";
	$fdata["GoodName"] = "ScID";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard1","ScID");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ScID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ScID";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrcard1["ScID"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard1","EmployeeID");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EmployeeID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmployeeID";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "demo_user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EmployeeID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "user_name";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrcard1["EmployeeID"] = $fdata;
//	SDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SDate";
	$fdata["GoodName"] = "SDate";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard1","SDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 21;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatadtrcard1["SDate"] = $fdata;
//	STimeIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "STimeIn";
	$fdata["GoodName"] = "STimeIn";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard1","STimeIn");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "STimeIn";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STimeIn";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=11";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrcard1["STimeIn"] = $fdata;
//	STimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "STimeOut";
	$fdata["GoodName"] = "STimeOut";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard1","STimeOut");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "STimeOut";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STimeOut";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=11";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrcard1["STimeOut"] = $fdata;
//	TimeIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TimeIn";
	$fdata["GoodName"] = "TimeIn";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard1","TimeIn");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TimeIn";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TimeIn";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=11";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrcard1["TimeIn"] = $fdata;
//	TimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TimeOut";
	$fdata["GoodName"] = "TimeOut";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard1","TimeOut");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TimeOut";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TimeOut";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=11";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrcard1["TimeOut"] = $fdata;
//	DayIs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DayIs";
	$fdata["GoodName"] = "DayIs";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard1","DayIs");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DayIs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DayIs";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "daysweek";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "dayID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "DayIs";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrcard1["DayIs"] = $fdata;
//	RestDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "RestDay";
	$fdata["GoodName"] = "RestDay";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard1","RestDay");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RestDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RestDay";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrcard1["RestDay"] = $fdata;
//	Mispunched
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Mispunched";
	$fdata["GoodName"] = "Mispunched";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard1","Mispunched");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Mispunched";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Mispunched";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrcard1["Mispunched"] = $fdata;
//	HolidayType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "HolidayType";
	$fdata["GoodName"] = "HolidayType";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard1","HolidayType");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "HolidayType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HolidayType";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "holidaytype";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "HID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "HolidayType";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrcard1["HolidayType"] = $fdata;
//	VLDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "VLDay";
	$fdata["GoodName"] = "VLDay";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard1","VLDay");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "VLDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VLDay";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrcard1["VLDay"] = $fdata;
//	SLDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "SLDay";
	$fdata["GoodName"] = "SLDay";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard1","SLDay");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SLDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SLDay";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrcard1["SLDay"] = $fdata;
//	ELDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ELDay";
	$fdata["GoodName"] = "ELDay";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard1","ELDay");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ELDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ELDay";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrcard1["ELDay"] = $fdata;
//	PLDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "PLDay";
	$fdata["GoodName"] = "PLDay";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard1","PLDay");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PLDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PLDay";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrcard1["PLDay"] = $fdata;
//	OBDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "OBDay";
	$fdata["GoodName"] = "OBDay";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard1","OBDay");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "OBDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OBDay";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrcard1["OBDay"] = $fdata;
//	Late
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Late";
	$fdata["GoodName"] = "Late";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard1","Late");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Late";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Late";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrcard1["Late"] = $fdata;
//	UTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "UTime";
	$fdata["GoodName"] = "UTime";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard1","UTime");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "UTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UTime";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrcard1["UTime"] = $fdata;
//	Absent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Absent";
	$fdata["GoodName"] = "Absent";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard1","Absent");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Absent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Absent";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrcard1["Absent"] = $fdata;
//	OTmins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "OTmins";
	$fdata["GoodName"] = "OTmins";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard1","OTmins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "OTmins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OTmins";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrcard1["OTmins"] = $fdata;


$tables_data["dtrcard1"]=&$tdatadtrcard1;
$field_labels["dtrcard1"] = &$fieldLabelsdtrcard1;
$fieldToolTips["dtrcard1"] = &$fieldToolTipsdtrcard1;
$placeHolders["dtrcard1"] = &$placeHoldersdtrcard1;
$page_titles["dtrcard1"] = &$pageTitlesdtrcard1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dtrcard1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dtrcard1"] = array();


	
				$strOriginalDetailsTable="dtrcardhead";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dtrcardhead1";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "dtrcardhead1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dtrcard1"][0] = $masterParams;
				$masterTablesData["dtrcard1"][0]["masterKeys"] = array();
	$masterTablesData["dtrcard1"][0]["masterKeys"][]="EmployeeID";
				$masterTablesData["dtrcard1"][0]["detailKeys"] = array();
	$masterTablesData["dtrcard1"][0]["detailKeys"][]="EmployeeID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_dtrcard1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ScID,  EmployeeID,  SDate,  STimeIn,  STimeOut,  TimeIn,  TimeOut,  DayIs,  RestDay,  Mispunched,  HolidayType,  VLDay,  SLDay,  ELDay,  PLDay,  OBDay,  Late,  UTime,  Absent,  OTmins";
$proto0["m_strFrom"] = "FROM dtrcard";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY SDate";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "ScID",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard1"
));

$proto6["m_sql"] = "ScID";
$proto6["m_srcTableName"] = "dtrcard1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard1"
));

$proto8["m_sql"] = "EmployeeID";
$proto8["m_srcTableName"] = "dtrcard1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SDate",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard1"
));

$proto10["m_sql"] = "SDate";
$proto10["m_srcTableName"] = "dtrcard1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "STimeIn",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard1"
));

$proto12["m_sql"] = "STimeIn";
$proto12["m_srcTableName"] = "dtrcard1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "STimeOut",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard1"
));

$proto14["m_sql"] = "STimeOut";
$proto14["m_srcTableName"] = "dtrcard1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeIn",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard1"
));

$proto16["m_sql"] = "TimeIn";
$proto16["m_srcTableName"] = "dtrcard1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeOut",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard1"
));

$proto18["m_sql"] = "TimeOut";
$proto18["m_srcTableName"] = "dtrcard1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DayIs",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard1"
));

$proto20["m_sql"] = "DayIs";
$proto20["m_srcTableName"] = "dtrcard1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "RestDay",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard1"
));

$proto22["m_sql"] = "RestDay";
$proto22["m_srcTableName"] = "dtrcard1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Mispunched",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard1"
));

$proto24["m_sql"] = "Mispunched";
$proto24["m_srcTableName"] = "dtrcard1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "HolidayType",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard1"
));

$proto26["m_sql"] = "HolidayType";
$proto26["m_srcTableName"] = "dtrcard1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "VLDay",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard1"
));

$proto28["m_sql"] = "VLDay";
$proto28["m_srcTableName"] = "dtrcard1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "SLDay",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard1"
));

$proto30["m_sql"] = "SLDay";
$proto30["m_srcTableName"] = "dtrcard1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ELDay",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard1"
));

$proto32["m_sql"] = "ELDay";
$proto32["m_srcTableName"] = "dtrcard1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "PLDay",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard1"
));

$proto34["m_sql"] = "PLDay";
$proto34["m_srcTableName"] = "dtrcard1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "OBDay",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard1"
));

$proto36["m_sql"] = "OBDay";
$proto36["m_srcTableName"] = "dtrcard1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Late",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard1"
));

$proto38["m_sql"] = "Late";
$proto38["m_srcTableName"] = "dtrcard1";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "UTime",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard1"
));

$proto40["m_sql"] = "UTime";
$proto40["m_srcTableName"] = "dtrcard1";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Absent",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard1"
));

$proto42["m_sql"] = "Absent";
$proto42["m_srcTableName"] = "dtrcard1";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "OTmins",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard1"
));

$proto44["m_sql"] = "OTmins";
$proto44["m_srcTableName"] = "dtrcard1";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "dtrcard";
$proto47["m_srcTableName"] = "dtrcard1";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "ScID";
$proto47["m_columns"][] = "EmployeeID";
$proto47["m_columns"][] = "SDate";
$proto47["m_columns"][] = "STimeIn";
$proto47["m_columns"][] = "STimeOut";
$proto47["m_columns"][] = "TimeIn";
$proto47["m_columns"][] = "TimeOut";
$proto47["m_columns"][] = "DayIs";
$proto47["m_columns"][] = "RestDay";
$proto47["m_columns"][] = "Late";
$proto47["m_columns"][] = "UTime";
$proto47["m_columns"][] = "Absent";
$proto47["m_columns"][] = "Mispunched";
$proto47["m_columns"][] = "OTmins";
$proto47["m_columns"][] = "HolidayType";
$proto47["m_columns"][] = "VLDay";
$proto47["m_columns"][] = "SLDay";
$proto47["m_columns"][] = "ELDay";
$proto47["m_columns"][] = "PLDay";
$proto47["m_columns"][] = "OBDay";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "dtrcard";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "dtrcard1";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "SDate",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard1"
));

$proto50["m_column"]=$obj;
$proto50["m_bAsc"] = 1;
$proto50["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto50);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dtrcard1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dtrcard1 = createSqlQuery_dtrcard1();


	
		;

																				

$tdatadtrcard1[".sqlquery"] = $queryData_dtrcard1;

$tableEvents["dtrcard1"] = new eventsBase;
$tdatadtrcard1[".hasEvents"] = false;

?>