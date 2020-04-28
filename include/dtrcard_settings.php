<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadtrcard = array();
	$tdatadtrcard[".truncateText"] = true;
	$tdatadtrcard[".NumberOfChars"] = 80;
	$tdatadtrcard[".ShortName"] = "dtrcard";
	$tdatadtrcard[".OwnerID"] = "";
	$tdatadtrcard[".OriginalTable"] = "dtrcard";

//	field labels
$fieldLabelsdtrcard = array();
$fieldToolTipsdtrcard = array();
$pageTitlesdtrcard = array();
$placeHoldersdtrcard = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdtrcard["English"] = array();
	$fieldToolTipsdtrcard["English"] = array();
	$placeHoldersdtrcard["English"] = array();
	$pageTitlesdtrcard["English"] = array();
	$fieldLabelsdtrcard["English"]["ScID"] = "Sc ID";
	$fieldToolTipsdtrcard["English"]["ScID"] = "";
	$placeHoldersdtrcard["English"]["ScID"] = "";
	$fieldLabelsdtrcard["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipsdtrcard["English"]["EmployeeID"] = "";
	$placeHoldersdtrcard["English"]["EmployeeID"] = "";
	$fieldLabelsdtrcard["English"]["SDate"] = "SDate";
	$fieldToolTipsdtrcard["English"]["SDate"] = "";
	$placeHoldersdtrcard["English"]["SDate"] = "";
	$fieldLabelsdtrcard["English"]["STimeIn"] = "STime In";
	$fieldToolTipsdtrcard["English"]["STimeIn"] = "";
	$placeHoldersdtrcard["English"]["STimeIn"] = "";
	$fieldLabelsdtrcard["English"]["STimeOut"] = "STime Out";
	$fieldToolTipsdtrcard["English"]["STimeOut"] = "";
	$placeHoldersdtrcard["English"]["STimeOut"] = "";
	$fieldLabelsdtrcard["English"]["TimeIn"] = "Time In";
	$fieldToolTipsdtrcard["English"]["TimeIn"] = "";
	$placeHoldersdtrcard["English"]["TimeIn"] = "";
	$fieldLabelsdtrcard["English"]["TimeOut"] = "Time Out";
	$fieldToolTipsdtrcard["English"]["TimeOut"] = "";
	$placeHoldersdtrcard["English"]["TimeOut"] = "";
	$fieldLabelsdtrcard["English"]["DayIs"] = "Day";
	$fieldToolTipsdtrcard["English"]["DayIs"] = "";
	$placeHoldersdtrcard["English"]["DayIs"] = "";
	$fieldLabelsdtrcard["English"]["RestDay"] = "Rest Day";
	$fieldToolTipsdtrcard["English"]["RestDay"] = "";
	$placeHoldersdtrcard["English"]["RestDay"] = "";
	$fieldLabelsdtrcard["English"]["Mispunched"] = "Mispunched";
	$fieldToolTipsdtrcard["English"]["Mispunched"] = "";
	$placeHoldersdtrcard["English"]["Mispunched"] = "";
	$fieldLabelsdtrcard["English"]["HolidayType"] = "Holiday";
	$fieldToolTipsdtrcard["English"]["HolidayType"] = "";
	$placeHoldersdtrcard["English"]["HolidayType"] = "";
	$fieldLabelsdtrcard["English"]["VLDay"] = "VL";
	$fieldToolTipsdtrcard["English"]["VLDay"] = "";
	$placeHoldersdtrcard["English"]["VLDay"] = "";
	$fieldLabelsdtrcard["English"]["SLDay"] = "SL";
	$fieldToolTipsdtrcard["English"]["SLDay"] = "";
	$placeHoldersdtrcard["English"]["SLDay"] = "";
	$fieldLabelsdtrcard["English"]["ELDay"] = "EL";
	$fieldToolTipsdtrcard["English"]["ELDay"] = "";
	$placeHoldersdtrcard["English"]["ELDay"] = "";
	$fieldLabelsdtrcard["English"]["PLDay"] = "PL";
	$fieldToolTipsdtrcard["English"]["PLDay"] = "";
	$placeHoldersdtrcard["English"]["PLDay"] = "";
	$fieldLabelsdtrcard["English"]["OBDay"] = "OB";
	$fieldToolTipsdtrcard["English"]["OBDay"] = "";
	$placeHoldersdtrcard["English"]["OBDay"] = "";
	$fieldLabelsdtrcard["English"]["Late"] = "Late";
	$fieldToolTipsdtrcard["English"]["Late"] = "";
	$placeHoldersdtrcard["English"]["Late"] = "";
	$fieldLabelsdtrcard["English"]["UTime"] = "UTime";
	$fieldToolTipsdtrcard["English"]["UTime"] = "";
	$placeHoldersdtrcard["English"]["UTime"] = "";
	$fieldLabelsdtrcard["English"]["Absent"] = "Absent";
	$fieldToolTipsdtrcard["English"]["Absent"] = "";
	$placeHoldersdtrcard["English"]["Absent"] = "";
	$fieldLabelsdtrcard["English"]["OTmins"] = "OTmins";
	$fieldToolTipsdtrcard["English"]["OTmins"] = "";
	$placeHoldersdtrcard["English"]["OTmins"] = "";
	if (count($fieldToolTipsdtrcard["English"]))
		$tdatadtrcard[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdtrcard[""] = array();
	$fieldToolTipsdtrcard[""] = array();
	$placeHoldersdtrcard[""] = array();
	$pageTitlesdtrcard[""] = array();
	$fieldLabelsdtrcard[""]["ScID"] = "Sc ID";
	$fieldToolTipsdtrcard[""]["ScID"] = "";
	$placeHoldersdtrcard[""]["ScID"] = "";
	$fieldLabelsdtrcard[""]["EmployeeID"] = "Employee ID";
	$fieldToolTipsdtrcard[""]["EmployeeID"] = "";
	$placeHoldersdtrcard[""]["EmployeeID"] = "";
	$fieldLabelsdtrcard[""]["SDate"] = "SDate";
	$fieldToolTipsdtrcard[""]["SDate"] = "";
	$placeHoldersdtrcard[""]["SDate"] = "";
	$fieldLabelsdtrcard[""]["STimeIn"] = "STime In";
	$fieldToolTipsdtrcard[""]["STimeIn"] = "";
	$placeHoldersdtrcard[""]["STimeIn"] = "";
	$fieldLabelsdtrcard[""]["STimeOut"] = "STime Out";
	$fieldToolTipsdtrcard[""]["STimeOut"] = "";
	$placeHoldersdtrcard[""]["STimeOut"] = "";
	$fieldLabelsdtrcard[""]["TimeIn"] = "Time In";
	$fieldToolTipsdtrcard[""]["TimeIn"] = "";
	$placeHoldersdtrcard[""]["TimeIn"] = "";
	$fieldLabelsdtrcard[""]["TimeOut"] = "Time Out";
	$fieldToolTipsdtrcard[""]["TimeOut"] = "";
	$placeHoldersdtrcard[""]["TimeOut"] = "";
	$fieldLabelsdtrcard[""]["DayIs"] = "Day Is";
	$fieldToolTipsdtrcard[""]["DayIs"] = "";
	$placeHoldersdtrcard[""]["DayIs"] = "";
	$fieldLabelsdtrcard[""]["RestDay"] = "Rest Day";
	$fieldToolTipsdtrcard[""]["RestDay"] = "";
	$placeHoldersdtrcard[""]["RestDay"] = "";
	$fieldLabelsdtrcard[""]["Mispunched"] = "Mispunched";
	$fieldToolTipsdtrcard[""]["Mispunched"] = "";
	$placeHoldersdtrcard[""]["Mispunched"] = "";
	$fieldLabelsdtrcard[""]["HolidayType"] = "Holiday Type";
	$fieldToolTipsdtrcard[""]["HolidayType"] = "";
	$placeHoldersdtrcard[""]["HolidayType"] = "";
	$fieldLabelsdtrcard[""]["VLDay"] = "VLDay";
	$fieldToolTipsdtrcard[""]["VLDay"] = "";
	$placeHoldersdtrcard[""]["VLDay"] = "";
	$fieldLabelsdtrcard[""]["SLDay"] = "SLDay";
	$fieldToolTipsdtrcard[""]["SLDay"] = "";
	$placeHoldersdtrcard[""]["SLDay"] = "";
	$fieldLabelsdtrcard[""]["ELDay"] = "ELDay";
	$fieldToolTipsdtrcard[""]["ELDay"] = "";
	$placeHoldersdtrcard[""]["ELDay"] = "";
	$fieldLabelsdtrcard[""]["PLDay"] = "PLDay";
	$fieldToolTipsdtrcard[""]["PLDay"] = "";
	$placeHoldersdtrcard[""]["PLDay"] = "";
	$fieldLabelsdtrcard[""]["OBDay"] = "OBDay";
	$fieldToolTipsdtrcard[""]["OBDay"] = "";
	$placeHoldersdtrcard[""]["OBDay"] = "";
	$fieldLabelsdtrcard[""]["Late"] = "Late";
	$fieldToolTipsdtrcard[""]["Late"] = "";
	$placeHoldersdtrcard[""]["Late"] = "";
	$fieldLabelsdtrcard[""]["UTime"] = "UTime";
	$fieldToolTipsdtrcard[""]["UTime"] = "";
	$placeHoldersdtrcard[""]["UTime"] = "";
	$fieldLabelsdtrcard[""]["Absent"] = "Absent";
	$fieldToolTipsdtrcard[""]["Absent"] = "";
	$placeHoldersdtrcard[""]["Absent"] = "";
	$fieldLabelsdtrcard[""]["OTmins"] = "OTmins";
	$fieldToolTipsdtrcard[""]["OTmins"] = "";
	$placeHoldersdtrcard[""]["OTmins"] = "";
	if (count($fieldToolTipsdtrcard[""]))
		$tdatadtrcard[".isUseToolTips"] = true;
}


	$tdatadtrcard[".NCSearch"] = true;



$tdatadtrcard[".shortTableName"] = "dtrcard";
$tdatadtrcard[".nSecOptions"] = 0;
$tdatadtrcard[".recsPerRowPrint"] = 1;
$tdatadtrcard[".mainTableOwnerID"] = "";
$tdatadtrcard[".moveNext"] = 1;
$tdatadtrcard[".entityType"] = 0;

$tdatadtrcard[".strOriginalTableName"] = "dtrcard";

	



$tdatadtrcard[".showAddInPopup"] = false;

$tdatadtrcard[".showEditInPopup"] = false;

$tdatadtrcard[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadtrcard[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadtrcard[".fieldsForRegister"] = array();

$tdatadtrcard[".listAjax"] = false;

	$tdatadtrcard[".audit"] = false;

	$tdatadtrcard[".locking"] = false;



$tdatadtrcard[".list"] = true;



$tdatadtrcard[".reorderRecordsByHeader"] = true;


$tdatadtrcard[".exportFormatting"] = 2;
$tdatadtrcard[".exportDelimiter"] = ",";
		
$tdatadtrcard[".view"] = true;


$tdatadtrcard[".exportTo"] = true;

$tdatadtrcard[".printFriendly"] = true;


$tdatadtrcard[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadtrcard[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatadtrcard[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatadtrcard[".searchSaving"] = false;
//

$tdatadtrcard[".showSearchPanel"] = true;
		$tdatadtrcard[".flexibleSearch"] = true;

$tdatadtrcard[".isUseAjaxSuggest"] = true;

$tdatadtrcard[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																												

$tdatadtrcard[".ajaxCodeSnippetAdded"] = false;

$tdatadtrcard[".buttonsAdded"] = false;

$tdatadtrcard[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadtrcard[".isUseTimeForSearch"] = false;



$tdatadtrcard[".badgeColor"] = "b22222";


$tdatadtrcard[".allSearchFields"] = array();
$tdatadtrcard[".filterFields"] = array();
$tdatadtrcard[".requiredSearchFields"] = array();

$tdatadtrcard[".allSearchFields"][] = "ScID";
	$tdatadtrcard[".allSearchFields"][] = "SDate";
	$tdatadtrcard[".allSearchFields"][] = "EmployeeID";
	$tdatadtrcard[".allSearchFields"][] = "DayIs";
	$tdatadtrcard[".allSearchFields"][] = "STimeIn";
	$tdatadtrcard[".allSearchFields"][] = "STimeOut";
	$tdatadtrcard[".allSearchFields"][] = "TimeIn";
	$tdatadtrcard[".allSearchFields"][] = "TimeOut";
	$tdatadtrcard[".allSearchFields"][] = "Mispunched";
	$tdatadtrcard[".allSearchFields"][] = "Late";
	$tdatadtrcard[".allSearchFields"][] = "UTime";
	$tdatadtrcard[".allSearchFields"][] = "Absent";
	$tdatadtrcard[".allSearchFields"][] = "OTmins";
	$tdatadtrcard[".allSearchFields"][] = "RestDay";
	$tdatadtrcard[".allSearchFields"][] = "HolidayType";
	$tdatadtrcard[".allSearchFields"][] = "VLDay";
	$tdatadtrcard[".allSearchFields"][] = "SLDay";
	$tdatadtrcard[".allSearchFields"][] = "ELDay";
	$tdatadtrcard[".allSearchFields"][] = "PLDay";
	$tdatadtrcard[".allSearchFields"][] = "OBDay";
	

$tdatadtrcard[".googleLikeFields"] = array();
$tdatadtrcard[".googleLikeFields"][] = "ScID";
$tdatadtrcard[".googleLikeFields"][] = "EmployeeID";
$tdatadtrcard[".googleLikeFields"][] = "SDate";
$tdatadtrcard[".googleLikeFields"][] = "STimeIn";
$tdatadtrcard[".googleLikeFields"][] = "STimeOut";
$tdatadtrcard[".googleLikeFields"][] = "TimeIn";
$tdatadtrcard[".googleLikeFields"][] = "TimeOut";
$tdatadtrcard[".googleLikeFields"][] = "DayIs";
$tdatadtrcard[".googleLikeFields"][] = "RestDay";
$tdatadtrcard[".googleLikeFields"][] = "Mispunched";
$tdatadtrcard[".googleLikeFields"][] = "HolidayType";
$tdatadtrcard[".googleLikeFields"][] = "VLDay";
$tdatadtrcard[".googleLikeFields"][] = "SLDay";
$tdatadtrcard[".googleLikeFields"][] = "ELDay";
$tdatadtrcard[".googleLikeFields"][] = "PLDay";
$tdatadtrcard[".googleLikeFields"][] = "OBDay";
$tdatadtrcard[".googleLikeFields"][] = "Late";
$tdatadtrcard[".googleLikeFields"][] = "UTime";
$tdatadtrcard[".googleLikeFields"][] = "Absent";
$tdatadtrcard[".googleLikeFields"][] = "OTmins";


$tdatadtrcard[".advSearchFields"] = array();
$tdatadtrcard[".advSearchFields"][] = "ScID";
$tdatadtrcard[".advSearchFields"][] = "SDate";
$tdatadtrcard[".advSearchFields"][] = "EmployeeID";
$tdatadtrcard[".advSearchFields"][] = "DayIs";
$tdatadtrcard[".advSearchFields"][] = "STimeIn";
$tdatadtrcard[".advSearchFields"][] = "STimeOut";
$tdatadtrcard[".advSearchFields"][] = "TimeIn";
$tdatadtrcard[".advSearchFields"][] = "TimeOut";
$tdatadtrcard[".advSearchFields"][] = "Mispunched";
$tdatadtrcard[".advSearchFields"][] = "Late";
$tdatadtrcard[".advSearchFields"][] = "UTime";
$tdatadtrcard[".advSearchFields"][] = "Absent";
$tdatadtrcard[".advSearchFields"][] = "OTmins";
$tdatadtrcard[".advSearchFields"][] = "RestDay";
$tdatadtrcard[".advSearchFields"][] = "HolidayType";
$tdatadtrcard[".advSearchFields"][] = "VLDay";
$tdatadtrcard[".advSearchFields"][] = "SLDay";
$tdatadtrcard[".advSearchFields"][] = "ELDay";
$tdatadtrcard[".advSearchFields"][] = "PLDay";
$tdatadtrcard[".advSearchFields"][] = "OBDay";

$tdatadtrcard[".tableType"] = "list";

$tdatadtrcard[".printerPageOrientation"] = 0;
$tdatadtrcard[".nPrinterPageScale"] = 100;

$tdatadtrcard[".nPrinterSplitRecords"] = 40;

$tdatadtrcard[".nPrinterPDFSplitRecords"] = 40;



$tdatadtrcard[".geocodingEnabled"] = false;





$tdatadtrcard[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatadtrcard[".totalsFields"] = array();
$tdatadtrcard[".totalsFields"][] = array(
	"fName" => "SDate",
	"numRows" => 0,
	"totalsType" => "COUNT",
	"viewFormat" => 'Short Date');
$tdatadtrcard[".totalsFields"][] = array(
	"fName" => "Mispunched",
	"numRows" => 0,
	"totalsType" => "COUNT",
	"viewFormat" => 'Checkbox');
$tdatadtrcard[".totalsFields"][] = array(
	"fName" => "Late",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatadtrcard[".totalsFields"][] = array(
	"fName" => "UTime",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatadtrcard[".totalsFields"][] = array(
	"fName" => "Absent",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatadtrcard[".totalsFields"][] = array(
	"fName" => "OTmins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadtrcard[".totalsFields"][] = array(
	"fName" => "RestDay",
	"numRows" => 0,
	"totalsType" => "COUNT",
	"viewFormat" => 'Checkbox');
$tdatadtrcard[".totalsFields"][] = array(
	"fName" => "HolidayType",
	"numRows" => 0,
	"totalsType" => "COUNT",
	"viewFormat" => '');
$tdatadtrcard[".totalsFields"][] = array(
	"fName" => "VLDay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatadtrcard[".totalsFields"][] = array(
	"fName" => "SLDay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatadtrcard[".totalsFields"][] = array(
	"fName" => "ELDay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatadtrcard[".totalsFields"][] = array(
	"fName" => "PLDay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatadtrcard[".totalsFields"][] = array(
	"fName" => "OBDay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');

$tdatadtrcard[".pageSize"] = 20;

$tdatadtrcard[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY SDate";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadtrcard[".strOrderBy"] = $tstrOrderBy;

$tdatadtrcard[".orderindexes"] = array();
	$tdatadtrcard[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "SDate");


$tdatadtrcard[".sqlHead"] = "SELECT ScID,  EmployeeID,  SDate,  STimeIn,  STimeOut,  TimeIn,  TimeOut,  DayIs,  RestDay,  Mispunched,  HolidayType,  VLDay,  SLDay,  ELDay,  PLDay,  OBDay,  Late,  UTime,  Absent,  OTmins";
$tdatadtrcard[".sqlFrom"] = "FROM dtrcard";
$tdatadtrcard[".sqlWhereExpr"] = "";
$tdatadtrcard[".sqlTail"] = "";

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
$tdatadtrcard[".arrGridTabs"] = $arrGridTabs;











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadtrcard[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadtrcard[".arrGroupsPerPage"] = $arrGPP;

$tdatadtrcard[".highlightSearchResults"] = true;

$tableKeysdtrcard = array();
$tableKeysdtrcard[] = "ScID";
$tdatadtrcard[".Keys"] = $tableKeysdtrcard;

$tdatadtrcard[".listFields"] = array();
$tdatadtrcard[".listFields"][] = "SDate";
$tdatadtrcard[".listFields"][] = "DayIs";
$tdatadtrcard[".listFields"][] = "STimeIn";
$tdatadtrcard[".listFields"][] = "STimeOut";
$tdatadtrcard[".listFields"][] = "TimeIn";
$tdatadtrcard[".listFields"][] = "TimeOut";
$tdatadtrcard[".listFields"][] = "Mispunched";
$tdatadtrcard[".listFields"][] = "Late";
$tdatadtrcard[".listFields"][] = "UTime";
$tdatadtrcard[".listFields"][] = "Absent";
$tdatadtrcard[".listFields"][] = "OTmins";
$tdatadtrcard[".listFields"][] = "RestDay";
$tdatadtrcard[".listFields"][] = "HolidayType";
$tdatadtrcard[".listFields"][] = "VLDay";
$tdatadtrcard[".listFields"][] = "SLDay";
$tdatadtrcard[".listFields"][] = "ELDay";
$tdatadtrcard[".listFields"][] = "PLDay";
$tdatadtrcard[".listFields"][] = "OBDay";

$tdatadtrcard[".hideMobileList"] = array();


$tdatadtrcard[".viewFields"] = array();
$tdatadtrcard[".viewFields"][] = "ScID";
$tdatadtrcard[".viewFields"][] = "SDate";
$tdatadtrcard[".viewFields"][] = "EmployeeID";
$tdatadtrcard[".viewFields"][] = "DayIs";
$tdatadtrcard[".viewFields"][] = "STimeIn";
$tdatadtrcard[".viewFields"][] = "STimeOut";
$tdatadtrcard[".viewFields"][] = "TimeIn";
$tdatadtrcard[".viewFields"][] = "TimeOut";
$tdatadtrcard[".viewFields"][] = "Mispunched";
$tdatadtrcard[".viewFields"][] = "Late";
$tdatadtrcard[".viewFields"][] = "UTime";
$tdatadtrcard[".viewFields"][] = "Absent";
$tdatadtrcard[".viewFields"][] = "OTmins";
$tdatadtrcard[".viewFields"][] = "RestDay";
$tdatadtrcard[".viewFields"][] = "HolidayType";
$tdatadtrcard[".viewFields"][] = "VLDay";
$tdatadtrcard[".viewFields"][] = "SLDay";
$tdatadtrcard[".viewFields"][] = "ELDay";
$tdatadtrcard[".viewFields"][] = "PLDay";
$tdatadtrcard[".viewFields"][] = "OBDay";

$tdatadtrcard[".addFields"] = array();

$tdatadtrcard[".masterListFields"] = array();
$tdatadtrcard[".masterListFields"][] = "ScID";
$tdatadtrcard[".masterListFields"][] = "SDate";
$tdatadtrcard[".masterListFields"][] = "EmployeeID";
$tdatadtrcard[".masterListFields"][] = "DayIs";
$tdatadtrcard[".masterListFields"][] = "STimeIn";
$tdatadtrcard[".masterListFields"][] = "STimeOut";
$tdatadtrcard[".masterListFields"][] = "TimeIn";
$tdatadtrcard[".masterListFields"][] = "TimeOut";
$tdatadtrcard[".masterListFields"][] = "Mispunched";
$tdatadtrcard[".masterListFields"][] = "Late";
$tdatadtrcard[".masterListFields"][] = "UTime";
$tdatadtrcard[".masterListFields"][] = "Absent";
$tdatadtrcard[".masterListFields"][] = "OTmins";
$tdatadtrcard[".masterListFields"][] = "RestDay";
$tdatadtrcard[".masterListFields"][] = "HolidayType";
$tdatadtrcard[".masterListFields"][] = "VLDay";
$tdatadtrcard[".masterListFields"][] = "SLDay";
$tdatadtrcard[".masterListFields"][] = "ELDay";
$tdatadtrcard[".masterListFields"][] = "PLDay";
$tdatadtrcard[".masterListFields"][] = "OBDay";

$tdatadtrcard[".inlineAddFields"] = array();

$tdatadtrcard[".editFields"] = array();

$tdatadtrcard[".inlineEditFields"] = array();

$tdatadtrcard[".updateSelectedFields"] = array();


$tdatadtrcard[".exportFields"] = array();
$tdatadtrcard[".exportFields"][] = "ScID";
$tdatadtrcard[".exportFields"][] = "SDate";
$tdatadtrcard[".exportFields"][] = "EmployeeID";
$tdatadtrcard[".exportFields"][] = "DayIs";
$tdatadtrcard[".exportFields"][] = "STimeIn";
$tdatadtrcard[".exportFields"][] = "STimeOut";
$tdatadtrcard[".exportFields"][] = "TimeIn";
$tdatadtrcard[".exportFields"][] = "TimeOut";
$tdatadtrcard[".exportFields"][] = "Mispunched";
$tdatadtrcard[".exportFields"][] = "Late";
$tdatadtrcard[".exportFields"][] = "UTime";
$tdatadtrcard[".exportFields"][] = "Absent";
$tdatadtrcard[".exportFields"][] = "OTmins";
$tdatadtrcard[".exportFields"][] = "RestDay";
$tdatadtrcard[".exportFields"][] = "HolidayType";
$tdatadtrcard[".exportFields"][] = "VLDay";
$tdatadtrcard[".exportFields"][] = "SLDay";
$tdatadtrcard[".exportFields"][] = "ELDay";
$tdatadtrcard[".exportFields"][] = "PLDay";
$tdatadtrcard[".exportFields"][] = "OBDay";

$tdatadtrcard[".importFields"] = array();

$tdatadtrcard[".printFields"] = array();
$tdatadtrcard[".printFields"][] = "SDate";
$tdatadtrcard[".printFields"][] = "DayIs";
$tdatadtrcard[".printFields"][] = "STimeIn";
$tdatadtrcard[".printFields"][] = "STimeOut";
$tdatadtrcard[".printFields"][] = "TimeIn";
$tdatadtrcard[".printFields"][] = "TimeOut";
$tdatadtrcard[".printFields"][] = "Mispunched";
$tdatadtrcard[".printFields"][] = "Late";
$tdatadtrcard[".printFields"][] = "UTime";
$tdatadtrcard[".printFields"][] = "Absent";
$tdatadtrcard[".printFields"][] = "OTmins";
$tdatadtrcard[".printFields"][] = "RestDay";
$tdatadtrcard[".printFields"][] = "HolidayType";
$tdatadtrcard[".printFields"][] = "VLDay";
$tdatadtrcard[".printFields"][] = "SLDay";
$tdatadtrcard[".printFields"][] = "ELDay";
$tdatadtrcard[".printFields"][] = "PLDay";
$tdatadtrcard[".printFields"][] = "OBDay";


//	ScID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ScID";
	$fdata["GoodName"] = "ScID";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard","ScID");
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




	$tdatadtrcard["ScID"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard","EmployeeID");
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




	$tdatadtrcard["EmployeeID"] = $fdata;
//	SDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SDate";
	$fdata["GoodName"] = "SDate";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard","SDate");
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




	$tdatadtrcard["SDate"] = $fdata;
//	STimeIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "STimeIn";
	$fdata["GoodName"] = "STimeIn";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard","STimeIn");
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




	$tdatadtrcard["STimeIn"] = $fdata;
//	STimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "STimeOut";
	$fdata["GoodName"] = "STimeOut";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard","STimeOut");
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




	$tdatadtrcard["STimeOut"] = $fdata;
//	TimeIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TimeIn";
	$fdata["GoodName"] = "TimeIn";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard","TimeIn");
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




	$tdatadtrcard["TimeIn"] = $fdata;
//	TimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TimeOut";
	$fdata["GoodName"] = "TimeOut";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard","TimeOut");
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




	$tdatadtrcard["TimeOut"] = $fdata;
//	DayIs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DayIs";
	$fdata["GoodName"] = "DayIs";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard","DayIs");
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




	$tdatadtrcard["DayIs"] = $fdata;
//	RestDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "RestDay";
	$fdata["GoodName"] = "RestDay";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard","RestDay");
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




	$tdatadtrcard["RestDay"] = $fdata;
//	Mispunched
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Mispunched";
	$fdata["GoodName"] = "Mispunched";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard","Mispunched");
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




	$tdatadtrcard["Mispunched"] = $fdata;
//	HolidayType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "HolidayType";
	$fdata["GoodName"] = "HolidayType";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard","HolidayType");
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




	$tdatadtrcard["HolidayType"] = $fdata;
//	VLDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "VLDay";
	$fdata["GoodName"] = "VLDay";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard","VLDay");
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




	$tdatadtrcard["VLDay"] = $fdata;
//	SLDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "SLDay";
	$fdata["GoodName"] = "SLDay";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard","SLDay");
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




	$tdatadtrcard["SLDay"] = $fdata;
//	ELDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ELDay";
	$fdata["GoodName"] = "ELDay";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard","ELDay");
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




	$tdatadtrcard["ELDay"] = $fdata;
//	PLDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "PLDay";
	$fdata["GoodName"] = "PLDay";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard","PLDay");
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




	$tdatadtrcard["PLDay"] = $fdata;
//	OBDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "OBDay";
	$fdata["GoodName"] = "OBDay";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard","OBDay");
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




	$tdatadtrcard["OBDay"] = $fdata;
//	Late
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Late";
	$fdata["GoodName"] = "Late";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard","Late");
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




	$tdatadtrcard["Late"] = $fdata;
//	UTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "UTime";
	$fdata["GoodName"] = "UTime";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard","UTime");
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




	$tdatadtrcard["UTime"] = $fdata;
//	Absent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Absent";
	$fdata["GoodName"] = "Absent";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard","Absent");
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




	$tdatadtrcard["Absent"] = $fdata;
//	OTmins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "OTmins";
	$fdata["GoodName"] = "OTmins";
	$fdata["ownerTable"] = "dtrcard";
	$fdata["Label"] = GetFieldLabel("dtrcard","OTmins");
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




	$tdatadtrcard["OTmins"] = $fdata;


$tables_data["dtrcard"]=&$tdatadtrcard;
$field_labels["dtrcard"] = &$fieldLabelsdtrcard;
$fieldToolTips["dtrcard"] = &$fieldToolTipsdtrcard;
$placeHolders["dtrcard"] = &$placeHoldersdtrcard;
$page_titles["dtrcard"] = &$pageTitlesdtrcard;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dtrcard"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dtrcard"] = array();


	
				$strOriginalDetailsTable="dtrcardhead";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dtrcardhead";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "dtrcardhead";
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
					$masterTablesData["dtrcard"][0] = $masterParams;
				$masterTablesData["dtrcard"][0]["masterKeys"] = array();
	$masterTablesData["dtrcard"][0]["masterKeys"][]="EmployeeID";
				$masterTablesData["dtrcard"][0]["detailKeys"] = array();
	$masterTablesData["dtrcard"][0]["detailKeys"][]="EmployeeID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_dtrcard()
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
	"m_srcTableName" => "dtrcard"
));

$proto6["m_sql"] = "ScID";
$proto6["m_srcTableName"] = "dtrcard";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard"
));

$proto8["m_sql"] = "EmployeeID";
$proto8["m_srcTableName"] = "dtrcard";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SDate",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard"
));

$proto10["m_sql"] = "SDate";
$proto10["m_srcTableName"] = "dtrcard";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "STimeIn",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard"
));

$proto12["m_sql"] = "STimeIn";
$proto12["m_srcTableName"] = "dtrcard";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "STimeOut",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard"
));

$proto14["m_sql"] = "STimeOut";
$proto14["m_srcTableName"] = "dtrcard";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeIn",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard"
));

$proto16["m_sql"] = "TimeIn";
$proto16["m_srcTableName"] = "dtrcard";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeOut",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard"
));

$proto18["m_sql"] = "TimeOut";
$proto18["m_srcTableName"] = "dtrcard";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DayIs",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard"
));

$proto20["m_sql"] = "DayIs";
$proto20["m_srcTableName"] = "dtrcard";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "RestDay",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard"
));

$proto22["m_sql"] = "RestDay";
$proto22["m_srcTableName"] = "dtrcard";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Mispunched",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard"
));

$proto24["m_sql"] = "Mispunched";
$proto24["m_srcTableName"] = "dtrcard";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "HolidayType",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard"
));

$proto26["m_sql"] = "HolidayType";
$proto26["m_srcTableName"] = "dtrcard";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "VLDay",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard"
));

$proto28["m_sql"] = "VLDay";
$proto28["m_srcTableName"] = "dtrcard";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "SLDay",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard"
));

$proto30["m_sql"] = "SLDay";
$proto30["m_srcTableName"] = "dtrcard";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ELDay",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard"
));

$proto32["m_sql"] = "ELDay";
$proto32["m_srcTableName"] = "dtrcard";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "PLDay",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard"
));

$proto34["m_sql"] = "PLDay";
$proto34["m_srcTableName"] = "dtrcard";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "OBDay",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard"
));

$proto36["m_sql"] = "OBDay";
$proto36["m_srcTableName"] = "dtrcard";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Late",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard"
));

$proto38["m_sql"] = "Late";
$proto38["m_srcTableName"] = "dtrcard";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "UTime",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard"
));

$proto40["m_sql"] = "UTime";
$proto40["m_srcTableName"] = "dtrcard";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Absent",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard"
));

$proto42["m_sql"] = "Absent";
$proto42["m_srcTableName"] = "dtrcard";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "OTmins",
	"m_strTable" => "dtrcard",
	"m_srcTableName" => "dtrcard"
));

$proto44["m_sql"] = "OTmins";
$proto44["m_srcTableName"] = "dtrcard";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "dtrcard";
$proto47["m_srcTableName"] = "dtrcard";
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
$proto46["m_srcTableName"] = "dtrcard";
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
	"m_srcTableName" => "dtrcard"
));

$proto50["m_column"]=$obj;
$proto50["m_bAsc"] = 1;
$proto50["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto50);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dtrcard";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dtrcard = createSqlQuery_dtrcard();


	
		;

																				

$tdatadtrcard[".sqlquery"] = $queryData_dtrcard;

$tableEvents["dtrcard"] = new eventsBase;
$tdatadtrcard[".hasEvents"] = false;

?>