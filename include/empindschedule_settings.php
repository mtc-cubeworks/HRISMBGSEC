<?php
require_once(getabspath("classes/cipherer.php"));




$tdataempindschedule = array();
	$tdataempindschedule[".truncateText"] = true;
	$tdataempindschedule[".NumberOfChars"] = 80;
	$tdataempindschedule[".ShortName"] = "empindschedule";
	$tdataempindschedule[".OwnerID"] = "";
	$tdataempindschedule[".OriginalTable"] = "indschedule";

//	field labels
$fieldLabelsempindschedule = array();
$fieldToolTipsempindschedule = array();
$pageTitlesempindschedule = array();
$placeHoldersempindschedule = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsempindschedule["English"] = array();
	$fieldToolTipsempindschedule["English"] = array();
	$placeHoldersempindschedule["English"] = array();
	$pageTitlesempindschedule["English"] = array();
	$fieldLabelsempindschedule["English"]["ScID"] = "Sc ID";
	$fieldToolTipsempindschedule["English"]["ScID"] = "";
	$placeHoldersempindschedule["English"]["ScID"] = "";
	$fieldLabelsempindschedule["English"]["UserName"] = "Employee";
	$fieldToolTipsempindschedule["English"]["UserName"] = "";
	$placeHoldersempindschedule["English"]["UserName"] = "";
	$fieldLabelsempindschedule["English"]["SDate"] = "SDate";
	$fieldToolTipsempindschedule["English"]["SDate"] = "";
	$placeHoldersempindschedule["English"]["SDate"] = "";
	$fieldLabelsempindschedule["English"]["STimeIn"] = "STime In";
	$fieldToolTipsempindschedule["English"]["STimeIn"] = "";
	$placeHoldersempindschedule["English"]["STimeIn"] = "";
	$fieldLabelsempindschedule["English"]["STimeOut"] = "STime Out";
	$fieldToolTipsempindschedule["English"]["STimeOut"] = "";
	$placeHoldersempindschedule["English"]["STimeOut"] = "";
	$fieldLabelsempindschedule["English"]["SchedType"] = "Sched Type";
	$fieldToolTipsempindschedule["English"]["SchedType"] = "";
	$placeHoldersempindschedule["English"]["SchedType"] = "";
	$fieldLabelsempindschedule["English"]["WageType"] = "Wage Type";
	$fieldToolTipsempindschedule["English"]["WageType"] = "";
	$placeHoldersempindschedule["English"]["WageType"] = "";
	$fieldLabelsempindschedule["English"]["Shift"] = "Shift";
	$fieldToolTipsempindschedule["English"]["Shift"] = "";
	$placeHoldersempindschedule["English"]["Shift"] = "";
	$fieldLabelsempindschedule["English"]["LunchBreakFrom"] = "SBreak Out";
	$fieldToolTipsempindschedule["English"]["LunchBreakFrom"] = "";
	$placeHoldersempindschedule["English"]["LunchBreakFrom"] = "";
	$fieldLabelsempindschedule["English"]["LunchBreakTo"] = "SBreak In";
	$fieldToolTipsempindschedule["English"]["LunchBreakTo"] = "";
	$placeHoldersempindschedule["English"]["LunchBreakTo"] = "";
	$fieldLabelsempindschedule["English"]["Division"] = "Division";
	$fieldToolTipsempindschedule["English"]["Division"] = "";
	$placeHoldersempindschedule["English"]["Division"] = "";
	$fieldLabelsempindschedule["English"]["TimeIn"] = "Time In";
	$fieldToolTipsempindschedule["English"]["TimeIn"] = "";
	$placeHoldersempindschedule["English"]["TimeIn"] = "";
	$fieldLabelsempindschedule["English"]["TimeOut"] = "Time Out";
	$fieldToolTipsempindschedule["English"]["TimeOut"] = "";
	$placeHoldersempindschedule["English"]["TimeOut"] = "";
	$fieldLabelsempindschedule["English"]["DayIs"] = "Day Is";
	$fieldToolTipsempindschedule["English"]["DayIs"] = "";
	$placeHoldersempindschedule["English"]["DayIs"] = "";
	$fieldLabelsempindschedule["English"]["RestDay"] = "Rest Day";
	$fieldToolTipsempindschedule["English"]["RestDay"] = "";
	$placeHoldersempindschedule["English"]["RestDay"] = "";
	$fieldLabelsempindschedule["English"]["Department"] = "Department";
	$fieldToolTipsempindschedule["English"]["Department"] = "";
	$placeHoldersempindschedule["English"]["Department"] = "";
	$fieldLabelsempindschedule["English"]["RegWD"] = "Reg WD";
	$fieldToolTipsempindschedule["English"]["RegWD"] = "";
	$placeHoldersempindschedule["English"]["RegWD"] = "";
	$fieldLabelsempindschedule["English"]["DWork"] = "DWork";
	$fieldToolTipsempindschedule["English"]["DWork"] = "";
	$placeHoldersempindschedule["English"]["DWork"] = "";
	$fieldLabelsempindschedule["English"]["Absent"] = "Absent";
	$fieldToolTipsempindschedule["English"]["Absent"] = "";
	$placeHoldersempindschedule["English"]["Absent"] = "";
	$fieldLabelsempindschedule["English"]["LateMins"] = "Late Mins";
	$fieldToolTipsempindschedule["English"]["LateMins"] = "";
	$placeHoldersempindschedule["English"]["LateMins"] = "";
	$fieldLabelsempindschedule["English"]["UndertimeMins"] = "Undertime Mins";
	$fieldToolTipsempindschedule["English"]["UndertimeMins"] = "";
	$placeHoldersempindschedule["English"]["UndertimeMins"] = "";
	$fieldLabelsempindschedule["English"]["RHolidayHrs"] = "RHoliday Hrs";
	$fieldToolTipsempindschedule["English"]["RHolidayHrs"] = "";
	$placeHoldersempindschedule["English"]["RHolidayHrs"] = "";
	$fieldLabelsempindschedule["English"]["SHolidayHrs"] = "SHoliday Hrs";
	$fieldToolTipsempindschedule["English"]["SHolidayHrs"] = "";
	$placeHoldersempindschedule["English"]["SHolidayHrs"] = "";
	$fieldLabelsempindschedule["English"]["CHolidayHrs"] = "CHoliday Hrs";
	$fieldToolTipsempindschedule["English"]["CHolidayHrs"] = "";
	$placeHoldersempindschedule["English"]["CHolidayHrs"] = "";
	$fieldLabelsempindschedule["English"]["ExcessHrs"] = "Excess Hrs";
	$fieldToolTipsempindschedule["English"]["ExcessHrs"] = "";
	$placeHoldersempindschedule["English"]["ExcessHrs"] = "";
	$fieldLabelsempindschedule["English"]["RegOTHrs"] = "Reg OTHrs";
	$fieldToolTipsempindschedule["English"]["RegOTHrs"] = "";
	$placeHoldersempindschedule["English"]["RegOTHrs"] = "";
	$fieldLabelsempindschedule["English"]["RHOTHrs"] = "RHOTHrs";
	$fieldToolTipsempindschedule["English"]["RHOTHrs"] = "";
	$placeHoldersempindschedule["English"]["RHOTHrs"] = "";
	$fieldLabelsempindschedule["English"]["SHOTHrs"] = "SHOTHrs";
	$fieldToolTipsempindschedule["English"]["SHOTHrs"] = "";
	$placeHoldersempindschedule["English"]["SHOTHrs"] = "";
	$fieldLabelsempindschedule["English"]["CHOTHrs"] = "CHOTHrs";
	$fieldToolTipsempindschedule["English"]["CHOTHrs"] = "";
	$placeHoldersempindschedule["English"]["CHOTHrs"] = "";
	$fieldLabelsempindschedule["English"]["RDOTHrs"] = "RDOTHrs";
	$fieldToolTipsempindschedule["English"]["RDOTHrs"] = "";
	$placeHoldersempindschedule["English"]["RDOTHrs"] = "";
	$fieldLabelsempindschedule["English"]["NDHrs"] = "NDHrs";
	$fieldToolTipsempindschedule["English"]["NDHrs"] = "";
	$placeHoldersempindschedule["English"]["NDHrs"] = "";
	$fieldLabelsempindschedule["English"]["RDHrs"] = "RDHrs";
	$fieldToolTipsempindschedule["English"]["RDHrs"] = "";
	$placeHoldersempindschedule["English"]["RDHrs"] = "";
	$fieldLabelsempindschedule["English"]["RegNDHrs"] = "Reg NDHrs";
	$fieldToolTipsempindschedule["English"]["RegNDHrs"] = "";
	$placeHoldersempindschedule["English"]["RegNDHrs"] = "";
	$fieldLabelsempindschedule["English"]["RHNDHrs"] = "RHNDHrs";
	$fieldToolTipsempindschedule["English"]["RHNDHrs"] = "";
	$placeHoldersempindschedule["English"]["RHNDHrs"] = "";
	$fieldLabelsempindschedule["English"]["SHNDHrs"] = "SHNDHrs";
	$fieldToolTipsempindschedule["English"]["SHNDHrs"] = "";
	$placeHoldersempindschedule["English"]["SHNDHrs"] = "";
	$fieldLabelsempindschedule["English"]["CHNDHrs"] = "CHNDHrs";
	$fieldToolTipsempindschedule["English"]["CHNDHrs"] = "";
	$placeHoldersempindschedule["English"]["CHNDHrs"] = "";
	$fieldLabelsempindschedule["English"]["RDNDHrs"] = "RDNDHrs";
	$fieldToolTipsempindschedule["English"]["RDNDHrs"] = "";
	$placeHoldersempindschedule["English"]["RDNDHrs"] = "";
	$fieldLabelsempindschedule["English"]["VLDay"] = "VLDay";
	$fieldToolTipsempindschedule["English"]["VLDay"] = "";
	$placeHoldersempindschedule["English"]["VLDay"] = "";
	$fieldLabelsempindschedule["English"]["SLDay"] = "SLDay";
	$fieldToolTipsempindschedule["English"]["SLDay"] = "";
	$placeHoldersempindschedule["English"]["SLDay"] = "";
	$fieldLabelsempindschedule["English"]["ELDay"] = "ELDay";
	$fieldToolTipsempindschedule["English"]["ELDay"] = "";
	$placeHoldersempindschedule["English"]["ELDay"] = "";
	$fieldLabelsempindschedule["English"]["PLDay"] = "PLDay";
	$fieldToolTipsempindschedule["English"]["PLDay"] = "";
	$placeHoldersempindschedule["English"]["PLDay"] = "";
	$fieldLabelsempindschedule["English"]["TrODay"] = "Tr ODay";
	$fieldToolTipsempindschedule["English"]["TrODay"] = "";
	$placeHoldersempindschedule["English"]["TrODay"] = "";
	$fieldLabelsempindschedule["English"]["Mispunched"] = "Mispunched";
	$fieldToolTipsempindschedule["English"]["Mispunched"] = "";
	$placeHoldersempindschedule["English"]["Mispunched"] = "";
	$fieldLabelsempindschedule["English"]["HolidayType"] = "Holiday Type";
	$fieldToolTipsempindschedule["English"]["HolidayType"] = "";
	$placeHoldersempindschedule["English"]["HolidayType"] = "";
	$fieldLabelsempindschedule["English"]["AfterBreakLogOut"] = "Break Out";
	$fieldToolTipsempindschedule["English"]["AfterBreakLogOut"] = "";
	$placeHoldersempindschedule["English"]["AfterBreakLogOut"] = "";
	$fieldLabelsempindschedule["English"]["AfterBreakLog"] = "Break In";
	$fieldToolTipsempindschedule["English"]["AfterBreakLog"] = "";
	$placeHoldersempindschedule["English"]["AfterBreakLog"] = "";
	$fieldLabelsempindschedule["English"]["IncludeBreakLate"] = "Include Break Late";
	$fieldToolTipsempindschedule["English"]["IncludeBreakLate"] = "";
	$placeHoldersempindschedule["English"]["IncludeBreakLate"] = "";
	$fieldLabelsempindschedule["English"]["EmployeeID"] = "Biometric ID";
	$fieldToolTipsempindschedule["English"]["EmployeeID"] = "";
	$placeHoldersempindschedule["English"]["EmployeeID"] = "";
	if (count($fieldToolTipsempindschedule["English"]))
		$tdataempindschedule[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsempindschedule[""] = array();
	$fieldToolTipsempindschedule[""] = array();
	$placeHoldersempindschedule[""] = array();
	$pageTitlesempindschedule[""] = array();
	if (count($fieldToolTipsempindschedule[""]))
		$tdataempindschedule[".isUseToolTips"] = true;
}


	$tdataempindschedule[".NCSearch"] = true;



$tdataempindschedule[".shortTableName"] = "empindschedule";
$tdataempindschedule[".nSecOptions"] = 0;
$tdataempindschedule[".recsPerRowPrint"] = 1;
$tdataempindschedule[".mainTableOwnerID"] = "";
$tdataempindschedule[".moveNext"] = 1;
$tdataempindschedule[".entityType"] = 1;

$tdataempindschedule[".strOriginalTableName"] = "indschedule";

	



$tdataempindschedule[".showAddInPopup"] = false;

$tdataempindschedule[".showEditInPopup"] = false;

$tdataempindschedule[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataempindschedule[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataempindschedule[".fieldsForRegister"] = array();

$tdataempindschedule[".listAjax"] = false;

	$tdataempindschedule[".audit"] = false;

	$tdataempindschedule[".locking"] = false;

$tdataempindschedule[".edit"] = true;
$tdataempindschedule[".afterEditAction"] = 1;
$tdataempindschedule[".closePopupAfterEdit"] = 1;
$tdataempindschedule[".afterEditActionDetTable"] = "";

$tdataempindschedule[".add"] = true;
$tdataempindschedule[".afterAddAction"] = 1;
$tdataempindschedule[".closePopupAfterAdd"] = 1;
$tdataempindschedule[".afterAddActionDetTable"] = "";

$tdataempindschedule[".list"] = true;

$tdataempindschedule[".inlineEdit"] = true;

$tdataempindschedule[".updateSelected"] = true;

$tdataempindschedule[".reorderRecordsByHeader"] = true;


$tdataempindschedule[".exportFormatting"] = 2;
$tdataempindschedule[".exportDelimiter"] = ",";
		
$tdataempindschedule[".inlineAdd"] = true;
$tdataempindschedule[".view"] = true;

$tdataempindschedule[".import"] = true;

$tdataempindschedule[".exportTo"] = true;

$tdataempindschedule[".printFriendly"] = true;

$tdataempindschedule[".delete"] = true;

$tdataempindschedule[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataempindschedule[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataempindschedule[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataempindschedule[".searchSaving"] = false;
//

$tdataempindschedule[".showSearchPanel"] = true;
		$tdataempindschedule[".flexibleSearch"] = true;

$tdataempindschedule[".isUseAjaxSuggest"] = true;

$tdataempindschedule[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																

$tdataempindschedule[".ajaxCodeSnippetAdded"] = false;

$tdataempindschedule[".buttonsAdded"] = false;

$tdataempindschedule[".addPageEvents"] = false;

// use timepicker for search panel
$tdataempindschedule[".isUseTimeForSearch"] = true;



$tdataempindschedule[".badgeColor"] = "d2af80";

$tdataempindschedule[".detailsLinksOnList"] = "1";

$tdataempindschedule[".allSearchFields"] = array();
$tdataempindschedule[".filterFields"] = array();
$tdataempindschedule[".requiredSearchFields"] = array();

$tdataempindschedule[".allSearchFields"][] = "EmployeeID";
	$tdataempindschedule[".allSearchFields"][] = "UserName";
	$tdataempindschedule[".allSearchFields"][] = "SDate";
	

$tdataempindschedule[".googleLikeFields"] = array();
$tdataempindschedule[".googleLikeFields"][] = "UserName";
$tdataempindschedule[".googleLikeFields"][] = "SDate";
$tdataempindschedule[".googleLikeFields"][] = "EmployeeID";

$tdataempindschedule[".panelSearchFields"] = array();
$tdataempindschedule[".searchPanelOptions"] = array();
$tdataempindschedule[".panelSearchFields"][] = "UserName";
	$tdataempindschedule[".panelSearchFields"][] = "SDate";
	
$tdataempindschedule[".advSearchFields"] = array();
$tdataempindschedule[".advSearchFields"][] = "EmployeeID";
$tdataempindschedule[".advSearchFields"][] = "UserName";
$tdataempindschedule[".advSearchFields"][] = "SDate";

$tdataempindschedule[".tableType"] = "list";

$tdataempindschedule[".printerPageOrientation"] = 0;
$tdataempindschedule[".nPrinterPageScale"] = 100;

$tdataempindschedule[".nPrinterSplitRecords"] = 40;

$tdataempindschedule[".nPrinterPDFSplitRecords"] = 40;



$tdataempindschedule[".geocodingEnabled"] = false;





$tdataempindschedule[".listGridLayout"] = 3;




$tdataempindschedule[".noRecordsFirstPage"] = true;

// view page pdf

// print page pdf

$tdataempindschedule[".totalsFields"] = array();
$tdataempindschedule[".totalsFields"][] = array(
	"fName" => "RegWD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataempindschedule[".totalsFields"][] = array(
	"fName" => "DWork",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataempindschedule[".totalsFields"][] = array(
	"fName" => "Absent",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataempindschedule[".totalsFields"][] = array(
	"fName" => "LateMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataempindschedule[".totalsFields"][] = array(
	"fName" => "UndertimeMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataempindschedule[".totalsFields"][] = array(
	"fName" => "RHolidayHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataempindschedule[".totalsFields"][] = array(
	"fName" => "SHolidayHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataempindschedule[".totalsFields"][] = array(
	"fName" => "CHolidayHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataempindschedule[".totalsFields"][] = array(
	"fName" => "NDHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataempindschedule[".totalsFields"][] = array(
	"fName" => "RegNDHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataempindschedule[".totalsFields"][] = array(
	"fName" => "RDHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataempindschedule[".totalsFields"][] = array(
	"fName" => "RHNDHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataempindschedule[".totalsFields"][] = array(
	"fName" => "RDNDHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataempindschedule[".totalsFields"][] = array(
	"fName" => "SHNDHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataempindschedule[".totalsFields"][] = array(
	"fName" => "CHNDHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataempindschedule[".totalsFields"][] = array(
	"fName" => "ExcessHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataempindschedule[".totalsFields"][] = array(
	"fName" => "RegOTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataempindschedule[".totalsFields"][] = array(
	"fName" => "RDOTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataempindschedule[".totalsFields"][] = array(
	"fName" => "SHOTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataempindschedule[".totalsFields"][] = array(
	"fName" => "CHOTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataempindschedule[".totalsFields"][] = array(
	"fName" => "RHOTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataempindschedule[".totalsFields"][] = array(
	"fName" => "TrODay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataempindschedule[".totalsFields"][] = array(
	"fName" => "VLDay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataempindschedule[".totalsFields"][] = array(
	"fName" => "SLDay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataempindschedule[".totalsFields"][] = array(
	"fName" => "ELDay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataempindschedule[".totalsFields"][] = array(
	"fName" => "PLDay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdataempindschedule[".pageSize"] = 20;

$tdataempindschedule[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY ScID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataempindschedule[".strOrderBy"] = $tstrOrderBy;

$tdataempindschedule[".orderindexes"] = array();
	$tdataempindschedule[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "ScID");


$tdataempindschedule[".sqlHead"] = "SELECT ScID,  UserName,  SDate,  STimeIn,  STimeOut,  SchedType,  Shift,  LunchBreakTo,  Division,  TimeIn,  TimeOut,  DayIs,  RestDay,  Department,  RegWD,  DWork,  Absent,  LateMins,  UndertimeMins,  RHolidayHrs,  SHolidayHrs,  CHolidayHrs,  ExcessHrs,  RegOTHrs,  RHOTHrs,  SHOTHrs,  CHOTHrs,  RDOTHrs,  NDHrs,  RDHrs,  RegNDHrs,  RHNDHrs,  SHNDHrs,  CHNDHrs,  RDNDHrs,  VLDay,  SLDay,  ELDay,  PLDay,  TrODay,  HolidayType,  Mispunched,  WageType,  LunchBreakFrom,  AfterBreakLogOut,  AfterBreakLog,  IncludeBreakLate,  EmployeeID";
$tdataempindschedule[".sqlFrom"] = "FROM indschedule";
$tdataempindschedule[".sqlWhereExpr"] = "";
$tdataempindschedule[".sqlTail"] = "";


//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	
	
		$tabFields[] = "UserName";
	
		$tabFields[] = "Division";
	
		$tabFields[] = "Department";
	
		$tabFields[] = "WageType";
	
		$tabFields[] = "SDate";
	
		$tabFields[] = "DayIs";
	
		$tabFields[] = "RestDay";
	
		$tabFields[] = "STimeIn";
	
		$tabFields[] = "STimeOut";
	
		$tabFields[] = "TimeIn";
	
		$tabFields[] = "TimeOut";
	
		$tabFields[] = "LunchBreakFrom";
	
		$tabFields[] = "LunchBreakTo";
	
		$tabFields[] = "AfterBreakLogOut";
	
		$tabFields[] = "AfterBreakLog";
	
		$tabFields[] = "Mispunched";
	
		$tabFields[] = "RegWD";
	
		$tabFields[] = "DWork";
	
		$tabFields[] = "Absent";
$arrEditTabs[] = array('tabId'=>'Time_Log1',
					   'tabName'=>"Time Log",
					   'nType'=>'0',
					   'nOrder'=>2,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "IncludeBreakLate";
	
		$tabFields[] = "LateMins";
	
		$tabFields[] = "UndertimeMins";
$arrEditTabs[] = array('tabId'=>'Lates_and_Undertime1',
					   'tabName'=>"Lates and Undertime",
					   'nType'=>'0',
					   'nOrder'=>22,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "HolidayType";
	
		$tabFields[] = "RHolidayHrs";
	
		$tabFields[] = "SHolidayHrs";
	
		$tabFields[] = "CHolidayHrs";
$arrEditTabs[] = array('tabId'=>'Holiday1',
					   'tabName'=>"Holiday",
					   'nType'=>'0',
					   'nOrder'=>26,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "NDHrs";
	
		$tabFields[] = "RegNDHrs";
	
		$tabFields[] = "RDHrs";
	
		$tabFields[] = "RHNDHrs";
	
		$tabFields[] = "RDNDHrs";
	
		$tabFields[] = "SHNDHrs";
	
		$tabFields[] = "CHNDHrs";
$arrEditTabs[] = array('tabId'=>'Night_Diff1',
					   'tabName'=>"Night Diff",
					   'nType'=>'0',
					   'nOrder'=>31,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "ExcessHrs";
	
		$tabFields[] = "RegOTHrs";
	
		$tabFields[] = "RDOTHrs";
	
		$tabFields[] = "SHOTHrs";
	
		$tabFields[] = "CHOTHrs";
	
		$tabFields[] = "RHOTHrs";
	
		$tabFields[] = "TrODay";
$arrEditTabs[] = array('tabId'=>'Overtime1',
					   'tabName'=>"Overtime",
					   'nType'=>'0',
					   'nOrder'=>39,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "VLDay";
	
		$tabFields[] = "SLDay";
	
		$tabFields[] = "ELDay";
	
		$tabFields[] = "PLDay";
$arrEditTabs[] = array('tabId'=>'Leaves1',
					   'tabName'=>"Leaves",
					   'nType'=>'0',
					   'nOrder'=>47,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "SchedType";
	
		$tabFields[] = "Shift";
$arrEditTabs[] = array('tabId'=>'Sched_Setup1',
					   'tabName'=>"Sched Setup",
					   'nType'=>'0',
					   'nOrder'=>52,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataempindschedule[".arrEditTabs"] = $arrEditTabs;


//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	
	
		$tabFields[] = "UserName";
	
		$tabFields[] = "Division";
	
		$tabFields[] = "Department";
	
		$tabFields[] = "WageType";
	
		$tabFields[] = "SDate";
	
		$tabFields[] = "DayIs";
	
		$tabFields[] = "RestDay";
	
		$tabFields[] = "STimeIn";
	
		$tabFields[] = "STimeOut";
	
		$tabFields[] = "TimeIn";
	
		$tabFields[] = "TimeOut";
	
		$tabFields[] = "LunchBreakFrom";
	
		$tabFields[] = "LunchBreakTo";
	
		$tabFields[] = "AfterBreakLogOut";
	
		$tabFields[] = "AfterBreakLog";
	
		$tabFields[] = "Mispunched";
	
		$tabFields[] = "RegWD";
	
		$tabFields[] = "DWork";
	
		$tabFields[] = "Absent";
$arrAddTabs[] = array('tabId'=>'Time_Log1',
					  'tabName'=>"Time Log",
					  'nType'=>'0',
					  'nOrder'=>2,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "IncludeBreakLate";
	
		$tabFields[] = "LateMins";
	
		$tabFields[] = "UndertimeMins";
$arrAddTabs[] = array('tabId'=>'Lates_and_Undertime1',
					  'tabName'=>"Lates and Undertime",
					  'nType'=>'0',
					  'nOrder'=>22,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "HolidayType";
	
		$tabFields[] = "RHolidayHrs";
	
		$tabFields[] = "SHolidayHrs";
	
		$tabFields[] = "CHolidayHrs";
$arrAddTabs[] = array('tabId'=>'Holiday1',
					  'tabName'=>"Holiday",
					  'nType'=>'0',
					  'nOrder'=>26,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "NDHrs";
	
		$tabFields[] = "RegNDHrs";
	
		$tabFields[] = "RDHrs";
	
		$tabFields[] = "RHNDHrs";
	
		$tabFields[] = "RDNDHrs";
	
		$tabFields[] = "SHNDHrs";
	
		$tabFields[] = "CHNDHrs";
$arrAddTabs[] = array('tabId'=>'Night_Diff1',
					  'tabName'=>"Night Diff",
					  'nType'=>'0',
					  'nOrder'=>31,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "ExcessHrs";
	
		$tabFields[] = "RegOTHrs";
	
		$tabFields[] = "RDOTHrs";
	
		$tabFields[] = "SHOTHrs";
	
		$tabFields[] = "CHOTHrs";
	
		$tabFields[] = "RHOTHrs";
	
		$tabFields[] = "TrODay";
$arrAddTabs[] = array('tabId'=>'Overtime1',
					  'tabName'=>"Overtime",
					  'nType'=>'0',
					  'nOrder'=>39,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "VLDay";
	
		$tabFields[] = "SLDay";
	
		$tabFields[] = "ELDay";
	
		$tabFields[] = "PLDay";
$arrAddTabs[] = array('tabId'=>'Leaves1',
					  'tabName'=>"Leaves",
					  'nType'=>'0',
					  'nOrder'=>47,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "SchedType";
	
		$tabFields[] = "Shift";
$arrAddTabs[] = array('tabId'=>'Sched_Setup1',
					  'tabName'=>"Sched Setup",
					  'nType'=>'0',
					  'nOrder'=>52,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdataempindschedule[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	
	$tabFields[] = "UserName";
	$tabFields[] = "Division";
	$tabFields[] = "Department";
	$tabFields[] = "WageType";
	$tabFields[] = "SDate";
	$tabFields[] = "DayIs";
	$tabFields[] = "RestDay";
	$tabFields[] = "STimeIn";
	$tabFields[] = "STimeOut";
	$tabFields[] = "TimeIn";
	$tabFields[] = "TimeOut";
	$tabFields[] = "LunchBreakFrom";
	$tabFields[] = "LunchBreakTo";
	$tabFields[] = "AfterBreakLogOut";
	$tabFields[] = "AfterBreakLog";
	$tabFields[] = "Mispunched";
	$tabFields[] = "RegWD";
	$tabFields[] = "DWork";
	$tabFields[] = "Absent";
$arrViewTabs[] = array('tabId'=>'Time_Log1',
					   'tabName'=>"Time Log",
					   'nType'=>'0',
					   'nOrder'=>2,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "IncludeBreakLate";
	$tabFields[] = "LateMins";
	$tabFields[] = "UndertimeMins";
$arrViewTabs[] = array('tabId'=>'Lates_and_Undertime1',
					   'tabName'=>"Lates and Undertime",
					   'nType'=>'0',
					   'nOrder'=>22,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "HolidayType";
	$tabFields[] = "RHolidayHrs";
	$tabFields[] = "SHolidayHrs";
	$tabFields[] = "CHolidayHrs";
$arrViewTabs[] = array('tabId'=>'Holiday1',
					   'tabName'=>"Holiday",
					   'nType'=>'0',
					   'nOrder'=>26,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "NDHrs";
	$tabFields[] = "RegNDHrs";
	$tabFields[] = "RDHrs";
	$tabFields[] = "RHNDHrs";
	$tabFields[] = "RDNDHrs";
	$tabFields[] = "SHNDHrs";
	$tabFields[] = "CHNDHrs";
$arrViewTabs[] = array('tabId'=>'Night_Diff1',
					   'tabName'=>"Night Diff",
					   'nType'=>'0',
					   'nOrder'=>31,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "ExcessHrs";
	$tabFields[] = "RegOTHrs";
	$tabFields[] = "RDOTHrs";
	$tabFields[] = "SHOTHrs";
	$tabFields[] = "CHOTHrs";
	$tabFields[] = "RHOTHrs";
	$tabFields[] = "TrODay";
$arrViewTabs[] = array('tabId'=>'Overtime1',
					   'tabName'=>"Overtime",
					   'nType'=>'0',
					   'nOrder'=>39,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "VLDay";
	$tabFields[] = "SLDay";
	$tabFields[] = "ELDay";
	$tabFields[] = "PLDay";
$arrViewTabs[] = array('tabId'=>'Leaves1',
					   'tabName'=>"Leaves",
					   'nType'=>'0',
					   'nOrder'=>47,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "SchedType";
	$tabFields[] = "Shift";
$arrViewTabs[] = array('tabId'=>'Sched_Setup1',
					   'tabName'=>"Sched Setup",
					   'nType'=>'0',
					   'nOrder'=>52,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataempindschedule[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataempindschedule[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataempindschedule[".arrGroupsPerPage"] = $arrGPP;

$tdataempindschedule[".highlightSearchResults"] = true;

$tableKeysempindschedule = array();
$tableKeysempindschedule[] = "ScID";
$tdataempindschedule[".Keys"] = $tableKeysempindschedule;

$tdataempindschedule[".listFields"] = array();
$tdataempindschedule[".listFields"][] = "EmployeeID";
$tdataempindschedule[".listFields"][] = "ScID";
$tdataempindschedule[".listFields"][] = "UserName";
$tdataempindschedule[".listFields"][] = "Division";
$tdataempindschedule[".listFields"][] = "Department";
$tdataempindschedule[".listFields"][] = "WageType";
$tdataempindschedule[".listFields"][] = "SDate";
$tdataempindschedule[".listFields"][] = "DayIs";
$tdataempindschedule[".listFields"][] = "RestDay";
$tdataempindschedule[".listFields"][] = "STimeIn";
$tdataempindschedule[".listFields"][] = "STimeOut";
$tdataempindschedule[".listFields"][] = "TimeIn";
$tdataempindschedule[".listFields"][] = "TimeOut";
$tdataempindschedule[".listFields"][] = "LunchBreakFrom";
$tdataempindschedule[".listFields"][] = "LunchBreakTo";
$tdataempindschedule[".listFields"][] = "AfterBreakLogOut";
$tdataempindschedule[".listFields"][] = "AfterBreakLog";
$tdataempindschedule[".listFields"][] = "Mispunched";
$tdataempindschedule[".listFields"][] = "RegWD";
$tdataempindschedule[".listFields"][] = "DWork";
$tdataempindschedule[".listFields"][] = "Absent";
$tdataempindschedule[".listFields"][] = "IncludeBreakLate";
$tdataempindschedule[".listFields"][] = "LateMins";
$tdataempindschedule[".listFields"][] = "UndertimeMins";
$tdataempindschedule[".listFields"][] = "HolidayType";
$tdataempindschedule[".listFields"][] = "RHolidayHrs";
$tdataempindschedule[".listFields"][] = "SHolidayHrs";
$tdataempindschedule[".listFields"][] = "CHolidayHrs";
$tdataempindschedule[".listFields"][] = "NDHrs";
$tdataempindschedule[".listFields"][] = "RegNDHrs";
$tdataempindschedule[".listFields"][] = "RDHrs";
$tdataempindschedule[".listFields"][] = "RHNDHrs";
$tdataempindschedule[".listFields"][] = "RDNDHrs";
$tdataempindschedule[".listFields"][] = "SHNDHrs";
$tdataempindschedule[".listFields"][] = "CHNDHrs";
$tdataempindschedule[".listFields"][] = "ExcessHrs";
$tdataempindschedule[".listFields"][] = "RegOTHrs";
$tdataempindschedule[".listFields"][] = "RDOTHrs";
$tdataempindschedule[".listFields"][] = "SHOTHrs";
$tdataempindschedule[".listFields"][] = "CHOTHrs";
$tdataempindschedule[".listFields"][] = "RHOTHrs";
$tdataempindschedule[".listFields"][] = "TrODay";
$tdataempindschedule[".listFields"][] = "VLDay";
$tdataempindschedule[".listFields"][] = "SLDay";
$tdataempindschedule[".listFields"][] = "ELDay";
$tdataempindschedule[".listFields"][] = "PLDay";
$tdataempindschedule[".listFields"][] = "SchedType";
$tdataempindschedule[".listFields"][] = "Shift";

$tdataempindschedule[".hideMobileList"] = array();


$tdataempindschedule[".viewFields"] = array();
$tdataempindschedule[".viewFields"][] = "EmployeeID";
$tdataempindschedule[".viewFields"][] = "ScID";
$tdataempindschedule[".viewFields"][] = "UserName";
$tdataempindschedule[".viewFields"][] = "Division";
$tdataempindschedule[".viewFields"][] = "Department";
$tdataempindschedule[".viewFields"][] = "WageType";
$tdataempindschedule[".viewFields"][] = "SDate";
$tdataempindschedule[".viewFields"][] = "DayIs";
$tdataempindschedule[".viewFields"][] = "RestDay";
$tdataempindschedule[".viewFields"][] = "STimeIn";
$tdataempindschedule[".viewFields"][] = "STimeOut";
$tdataempindschedule[".viewFields"][] = "TimeIn";
$tdataempindschedule[".viewFields"][] = "TimeOut";
$tdataempindschedule[".viewFields"][] = "LunchBreakFrom";
$tdataempindschedule[".viewFields"][] = "LunchBreakTo";
$tdataempindschedule[".viewFields"][] = "AfterBreakLogOut";
$tdataempindschedule[".viewFields"][] = "AfterBreakLog";
$tdataempindschedule[".viewFields"][] = "Mispunched";
$tdataempindschedule[".viewFields"][] = "RegWD";
$tdataempindschedule[".viewFields"][] = "DWork";
$tdataempindschedule[".viewFields"][] = "Absent";
$tdataempindschedule[".viewFields"][] = "IncludeBreakLate";
$tdataempindschedule[".viewFields"][] = "LateMins";
$tdataempindschedule[".viewFields"][] = "UndertimeMins";
$tdataempindschedule[".viewFields"][] = "HolidayType";
$tdataempindschedule[".viewFields"][] = "RHolidayHrs";
$tdataempindschedule[".viewFields"][] = "SHolidayHrs";
$tdataempindschedule[".viewFields"][] = "CHolidayHrs";
$tdataempindschedule[".viewFields"][] = "NDHrs";
$tdataempindschedule[".viewFields"][] = "RegNDHrs";
$tdataempindschedule[".viewFields"][] = "RDHrs";
$tdataempindschedule[".viewFields"][] = "RHNDHrs";
$tdataempindschedule[".viewFields"][] = "RDNDHrs";
$tdataempindschedule[".viewFields"][] = "SHNDHrs";
$tdataempindschedule[".viewFields"][] = "CHNDHrs";
$tdataempindschedule[".viewFields"][] = "ExcessHrs";
$tdataempindschedule[".viewFields"][] = "RegOTHrs";
$tdataempindschedule[".viewFields"][] = "RDOTHrs";
$tdataempindschedule[".viewFields"][] = "SHOTHrs";
$tdataempindschedule[".viewFields"][] = "CHOTHrs";
$tdataempindschedule[".viewFields"][] = "RHOTHrs";
$tdataempindschedule[".viewFields"][] = "TrODay";
$tdataempindschedule[".viewFields"][] = "VLDay";
$tdataempindschedule[".viewFields"][] = "SLDay";
$tdataempindschedule[".viewFields"][] = "ELDay";
$tdataempindschedule[".viewFields"][] = "PLDay";
$tdataempindschedule[".viewFields"][] = "SchedType";
$tdataempindschedule[".viewFields"][] = "Shift";

$tdataempindschedule[".addFields"] = array();
$tdataempindschedule[".addFields"][] = "EmployeeID";
$tdataempindschedule[".addFields"][] = "UserName";
$tdataempindschedule[".addFields"][] = "Division";
$tdataempindschedule[".addFields"][] = "Department";
$tdataempindschedule[".addFields"][] = "WageType";
$tdataempindschedule[".addFields"][] = "SDate";
$tdataempindschedule[".addFields"][] = "DayIs";
$tdataempindschedule[".addFields"][] = "RestDay";
$tdataempindschedule[".addFields"][] = "STimeIn";
$tdataempindschedule[".addFields"][] = "STimeOut";
$tdataempindschedule[".addFields"][] = "TimeIn";
$tdataempindschedule[".addFields"][] = "TimeOut";
$tdataempindschedule[".addFields"][] = "LunchBreakFrom";
$tdataempindschedule[".addFields"][] = "LunchBreakTo";
$tdataempindschedule[".addFields"][] = "AfterBreakLogOut";
$tdataempindschedule[".addFields"][] = "AfterBreakLog";
$tdataempindschedule[".addFields"][] = "Mispunched";
$tdataempindschedule[".addFields"][] = "RegWD";
$tdataempindschedule[".addFields"][] = "DWork";
$tdataempindschedule[".addFields"][] = "Absent";
$tdataempindschedule[".addFields"][] = "IncludeBreakLate";
$tdataempindschedule[".addFields"][] = "LateMins";
$tdataempindschedule[".addFields"][] = "UndertimeMins";
$tdataempindschedule[".addFields"][] = "HolidayType";
$tdataempindschedule[".addFields"][] = "RHolidayHrs";
$tdataempindschedule[".addFields"][] = "SHolidayHrs";
$tdataempindschedule[".addFields"][] = "CHolidayHrs";
$tdataempindschedule[".addFields"][] = "NDHrs";
$tdataempindschedule[".addFields"][] = "RegNDHrs";
$tdataempindschedule[".addFields"][] = "RDHrs";
$tdataempindschedule[".addFields"][] = "RHNDHrs";
$tdataempindschedule[".addFields"][] = "RDNDHrs";
$tdataempindschedule[".addFields"][] = "SHNDHrs";
$tdataempindschedule[".addFields"][] = "CHNDHrs";
$tdataempindschedule[".addFields"][] = "ExcessHrs";
$tdataempindschedule[".addFields"][] = "RegOTHrs";
$tdataempindschedule[".addFields"][] = "RDOTHrs";
$tdataempindschedule[".addFields"][] = "SHOTHrs";
$tdataempindschedule[".addFields"][] = "CHOTHrs";
$tdataempindschedule[".addFields"][] = "RHOTHrs";
$tdataempindschedule[".addFields"][] = "TrODay";
$tdataempindschedule[".addFields"][] = "VLDay";
$tdataempindschedule[".addFields"][] = "SLDay";
$tdataempindschedule[".addFields"][] = "ELDay";
$tdataempindschedule[".addFields"][] = "PLDay";
$tdataempindschedule[".addFields"][] = "SchedType";
$tdataempindschedule[".addFields"][] = "Shift";

$tdataempindschedule[".masterListFields"] = array();
$tdataempindschedule[".masterListFields"][] = "EmployeeID";
$tdataempindschedule[".masterListFields"][] = "ScID";
$tdataempindschedule[".masterListFields"][] = "UserName";
$tdataempindschedule[".masterListFields"][] = "Division";
$tdataempindschedule[".masterListFields"][] = "Department";
$tdataempindschedule[".masterListFields"][] = "WageType";
$tdataempindschedule[".masterListFields"][] = "SDate";
$tdataempindschedule[".masterListFields"][] = "DayIs";
$tdataempindschedule[".masterListFields"][] = "RestDay";
$tdataempindschedule[".masterListFields"][] = "STimeIn";
$tdataempindschedule[".masterListFields"][] = "STimeOut";
$tdataempindschedule[".masterListFields"][] = "TimeIn";
$tdataempindschedule[".masterListFields"][] = "TimeOut";
$tdataempindschedule[".masterListFields"][] = "LunchBreakFrom";
$tdataempindschedule[".masterListFields"][] = "LunchBreakTo";
$tdataempindschedule[".masterListFields"][] = "AfterBreakLogOut";
$tdataempindschedule[".masterListFields"][] = "AfterBreakLog";
$tdataempindschedule[".masterListFields"][] = "Mispunched";
$tdataempindschedule[".masterListFields"][] = "RegWD";
$tdataempindschedule[".masterListFields"][] = "DWork";
$tdataempindschedule[".masterListFields"][] = "Absent";
$tdataempindschedule[".masterListFields"][] = "IncludeBreakLate";
$tdataempindschedule[".masterListFields"][] = "LateMins";
$tdataempindschedule[".masterListFields"][] = "UndertimeMins";
$tdataempindschedule[".masterListFields"][] = "HolidayType";
$tdataempindschedule[".masterListFields"][] = "RHolidayHrs";
$tdataempindschedule[".masterListFields"][] = "SHolidayHrs";
$tdataempindschedule[".masterListFields"][] = "CHolidayHrs";
$tdataempindschedule[".masterListFields"][] = "NDHrs";
$tdataempindschedule[".masterListFields"][] = "RegNDHrs";
$tdataempindschedule[".masterListFields"][] = "RDHrs";
$tdataempindschedule[".masterListFields"][] = "RHNDHrs";
$tdataempindschedule[".masterListFields"][] = "RDNDHrs";
$tdataempindschedule[".masterListFields"][] = "SHNDHrs";
$tdataempindschedule[".masterListFields"][] = "CHNDHrs";
$tdataempindschedule[".masterListFields"][] = "ExcessHrs";
$tdataempindschedule[".masterListFields"][] = "RegOTHrs";
$tdataempindschedule[".masterListFields"][] = "RDOTHrs";
$tdataempindschedule[".masterListFields"][] = "SHOTHrs";
$tdataempindschedule[".masterListFields"][] = "CHOTHrs";
$tdataempindschedule[".masterListFields"][] = "RHOTHrs";
$tdataempindschedule[".masterListFields"][] = "TrODay";
$tdataempindschedule[".masterListFields"][] = "VLDay";
$tdataempindschedule[".masterListFields"][] = "SLDay";
$tdataempindschedule[".masterListFields"][] = "ELDay";
$tdataempindschedule[".masterListFields"][] = "PLDay";
$tdataempindschedule[".masterListFields"][] = "SchedType";
$tdataempindschedule[".masterListFields"][] = "Shift";

$tdataempindschedule[".inlineAddFields"] = array();
$tdataempindschedule[".inlineAddFields"][] = "EmployeeID";
$tdataempindschedule[".inlineAddFields"][] = "UserName";
$tdataempindschedule[".inlineAddFields"][] = "Division";
$tdataempindschedule[".inlineAddFields"][] = "Department";
$tdataempindschedule[".inlineAddFields"][] = "WageType";
$tdataempindschedule[".inlineAddFields"][] = "SDate";
$tdataempindschedule[".inlineAddFields"][] = "DayIs";
$tdataempindschedule[".inlineAddFields"][] = "RestDay";
$tdataempindschedule[".inlineAddFields"][] = "STimeIn";
$tdataempindschedule[".inlineAddFields"][] = "STimeOut";
$tdataempindschedule[".inlineAddFields"][] = "TimeIn";
$tdataempindschedule[".inlineAddFields"][] = "TimeOut";
$tdataempindschedule[".inlineAddFields"][] = "LunchBreakFrom";
$tdataempindschedule[".inlineAddFields"][] = "LunchBreakTo";
$tdataempindschedule[".inlineAddFields"][] = "AfterBreakLogOut";
$tdataempindschedule[".inlineAddFields"][] = "AfterBreakLog";
$tdataempindschedule[".inlineAddFields"][] = "Mispunched";
$tdataempindschedule[".inlineAddFields"][] = "RegWD";
$tdataempindschedule[".inlineAddFields"][] = "DWork";
$tdataempindschedule[".inlineAddFields"][] = "Absent";
$tdataempindschedule[".inlineAddFields"][] = "IncludeBreakLate";
$tdataempindschedule[".inlineAddFields"][] = "LateMins";
$tdataempindschedule[".inlineAddFields"][] = "UndertimeMins";
$tdataempindschedule[".inlineAddFields"][] = "HolidayType";
$tdataempindschedule[".inlineAddFields"][] = "RHolidayHrs";
$tdataempindschedule[".inlineAddFields"][] = "SHolidayHrs";
$tdataempindschedule[".inlineAddFields"][] = "CHolidayHrs";
$tdataempindschedule[".inlineAddFields"][] = "NDHrs";
$tdataempindschedule[".inlineAddFields"][] = "RegNDHrs";
$tdataempindschedule[".inlineAddFields"][] = "RDHrs";
$tdataempindschedule[".inlineAddFields"][] = "RHNDHrs";
$tdataempindschedule[".inlineAddFields"][] = "RDNDHrs";
$tdataempindschedule[".inlineAddFields"][] = "SHNDHrs";
$tdataempindschedule[".inlineAddFields"][] = "CHNDHrs";
$tdataempindschedule[".inlineAddFields"][] = "ExcessHrs";
$tdataempindschedule[".inlineAddFields"][] = "RegOTHrs";
$tdataempindschedule[".inlineAddFields"][] = "RDOTHrs";
$tdataempindschedule[".inlineAddFields"][] = "SHOTHrs";
$tdataempindschedule[".inlineAddFields"][] = "CHOTHrs";
$tdataempindschedule[".inlineAddFields"][] = "RHOTHrs";
$tdataempindschedule[".inlineAddFields"][] = "TrODay";
$tdataempindschedule[".inlineAddFields"][] = "VLDay";
$tdataempindschedule[".inlineAddFields"][] = "SLDay";
$tdataempindschedule[".inlineAddFields"][] = "ELDay";
$tdataempindschedule[".inlineAddFields"][] = "PLDay";
$tdataempindschedule[".inlineAddFields"][] = "SchedType";
$tdataempindschedule[".inlineAddFields"][] = "Shift";

$tdataempindschedule[".editFields"] = array();
$tdataempindschedule[".editFields"][] = "EmployeeID";
$tdataempindschedule[".editFields"][] = "UserName";
$tdataempindschedule[".editFields"][] = "Division";
$tdataempindschedule[".editFields"][] = "Department";
$tdataempindschedule[".editFields"][] = "WageType";
$tdataempindschedule[".editFields"][] = "SDate";
$tdataempindschedule[".editFields"][] = "DayIs";
$tdataempindschedule[".editFields"][] = "RestDay";
$tdataempindschedule[".editFields"][] = "STimeIn";
$tdataempindschedule[".editFields"][] = "STimeOut";
$tdataempindschedule[".editFields"][] = "TimeIn";
$tdataempindschedule[".editFields"][] = "TimeOut";
$tdataempindschedule[".editFields"][] = "LunchBreakFrom";
$tdataempindschedule[".editFields"][] = "LunchBreakTo";
$tdataempindschedule[".editFields"][] = "AfterBreakLogOut";
$tdataempindschedule[".editFields"][] = "AfterBreakLog";
$tdataempindschedule[".editFields"][] = "Mispunched";
$tdataempindschedule[".editFields"][] = "RegWD";
$tdataempindschedule[".editFields"][] = "DWork";
$tdataempindschedule[".editFields"][] = "Absent";
$tdataempindschedule[".editFields"][] = "IncludeBreakLate";
$tdataempindschedule[".editFields"][] = "LateMins";
$tdataempindschedule[".editFields"][] = "UndertimeMins";
$tdataempindschedule[".editFields"][] = "HolidayType";
$tdataempindschedule[".editFields"][] = "RHolidayHrs";
$tdataempindschedule[".editFields"][] = "SHolidayHrs";
$tdataempindschedule[".editFields"][] = "CHolidayHrs";
$tdataempindschedule[".editFields"][] = "NDHrs";
$tdataempindschedule[".editFields"][] = "RegNDHrs";
$tdataempindschedule[".editFields"][] = "RDHrs";
$tdataempindschedule[".editFields"][] = "RHNDHrs";
$tdataempindschedule[".editFields"][] = "RDNDHrs";
$tdataempindschedule[".editFields"][] = "SHNDHrs";
$tdataempindschedule[".editFields"][] = "CHNDHrs";
$tdataempindschedule[".editFields"][] = "ExcessHrs";
$tdataempindschedule[".editFields"][] = "RegOTHrs";
$tdataempindschedule[".editFields"][] = "RDOTHrs";
$tdataempindschedule[".editFields"][] = "SHOTHrs";
$tdataempindschedule[".editFields"][] = "CHOTHrs";
$tdataempindschedule[".editFields"][] = "RHOTHrs";
$tdataempindschedule[".editFields"][] = "TrODay";
$tdataempindschedule[".editFields"][] = "VLDay";
$tdataempindschedule[".editFields"][] = "SLDay";
$tdataempindschedule[".editFields"][] = "ELDay";
$tdataempindschedule[".editFields"][] = "PLDay";
$tdataempindschedule[".editFields"][] = "SchedType";
$tdataempindschedule[".editFields"][] = "Shift";

$tdataempindschedule[".inlineEditFields"] = array();
$tdataempindschedule[".inlineEditFields"][] = "EmployeeID";
$tdataempindschedule[".inlineEditFields"][] = "UserName";
$tdataempindschedule[".inlineEditFields"][] = "Division";
$tdataempindschedule[".inlineEditFields"][] = "Department";
$tdataempindschedule[".inlineEditFields"][] = "WageType";
$tdataempindschedule[".inlineEditFields"][] = "SDate";
$tdataempindschedule[".inlineEditFields"][] = "DayIs";
$tdataempindschedule[".inlineEditFields"][] = "RestDay";
$tdataempindschedule[".inlineEditFields"][] = "STimeIn";
$tdataempindschedule[".inlineEditFields"][] = "STimeOut";
$tdataempindschedule[".inlineEditFields"][] = "TimeIn";
$tdataempindschedule[".inlineEditFields"][] = "TimeOut";
$tdataempindschedule[".inlineEditFields"][] = "LunchBreakFrom";
$tdataempindschedule[".inlineEditFields"][] = "LunchBreakTo";
$tdataempindschedule[".inlineEditFields"][] = "AfterBreakLogOut";
$tdataempindschedule[".inlineEditFields"][] = "AfterBreakLog";
$tdataempindschedule[".inlineEditFields"][] = "Mispunched";
$tdataempindschedule[".inlineEditFields"][] = "RegWD";
$tdataempindschedule[".inlineEditFields"][] = "DWork";
$tdataempindschedule[".inlineEditFields"][] = "Absent";
$tdataempindschedule[".inlineEditFields"][] = "IncludeBreakLate";
$tdataempindschedule[".inlineEditFields"][] = "LateMins";
$tdataempindschedule[".inlineEditFields"][] = "UndertimeMins";
$tdataempindschedule[".inlineEditFields"][] = "HolidayType";
$tdataempindschedule[".inlineEditFields"][] = "RHolidayHrs";
$tdataempindschedule[".inlineEditFields"][] = "SHolidayHrs";
$tdataempindschedule[".inlineEditFields"][] = "CHolidayHrs";
$tdataempindschedule[".inlineEditFields"][] = "NDHrs";
$tdataempindschedule[".inlineEditFields"][] = "RegNDHrs";
$tdataempindschedule[".inlineEditFields"][] = "RDHrs";
$tdataempindschedule[".inlineEditFields"][] = "RHNDHrs";
$tdataempindschedule[".inlineEditFields"][] = "RDNDHrs";
$tdataempindschedule[".inlineEditFields"][] = "SHNDHrs";
$tdataempindschedule[".inlineEditFields"][] = "CHNDHrs";
$tdataempindschedule[".inlineEditFields"][] = "ExcessHrs";
$tdataempindschedule[".inlineEditFields"][] = "RegOTHrs";
$tdataempindschedule[".inlineEditFields"][] = "RDOTHrs";
$tdataempindschedule[".inlineEditFields"][] = "SHOTHrs";
$tdataempindschedule[".inlineEditFields"][] = "CHOTHrs";
$tdataempindschedule[".inlineEditFields"][] = "RHOTHrs";
$tdataempindschedule[".inlineEditFields"][] = "TrODay";
$tdataempindschedule[".inlineEditFields"][] = "VLDay";
$tdataempindschedule[".inlineEditFields"][] = "SLDay";
$tdataempindschedule[".inlineEditFields"][] = "ELDay";
$tdataempindschedule[".inlineEditFields"][] = "PLDay";
$tdataempindschedule[".inlineEditFields"][] = "SchedType";
$tdataempindschedule[".inlineEditFields"][] = "Shift";

$tdataempindschedule[".updateSelectedFields"] = array();
$tdataempindschedule[".updateSelectedFields"][] = "UserName";
$tdataempindschedule[".updateSelectedFields"][] = "Division";
$tdataempindschedule[".updateSelectedFields"][] = "Department";
$tdataempindschedule[".updateSelectedFields"][] = "WageType";
$tdataempindschedule[".updateSelectedFields"][] = "SDate";
$tdataempindschedule[".updateSelectedFields"][] = "DayIs";
$tdataempindschedule[".updateSelectedFields"][] = "RestDay";
$tdataempindschedule[".updateSelectedFields"][] = "STimeIn";
$tdataempindschedule[".updateSelectedFields"][] = "STimeOut";
$tdataempindschedule[".updateSelectedFields"][] = "TimeIn";
$tdataempindschedule[".updateSelectedFields"][] = "TimeOut";
$tdataempindschedule[".updateSelectedFields"][] = "LunchBreakFrom";
$tdataempindschedule[".updateSelectedFields"][] = "LunchBreakTo";
$tdataempindschedule[".updateSelectedFields"][] = "Mispunched";
$tdataempindschedule[".updateSelectedFields"][] = "RegWD";
$tdataempindschedule[".updateSelectedFields"][] = "DWork";
$tdataempindschedule[".updateSelectedFields"][] = "Absent";
$tdataempindschedule[".updateSelectedFields"][] = "HolidayType";
$tdataempindschedule[".updateSelectedFields"][] = "SchedType";
$tdataempindschedule[".updateSelectedFields"][] = "Shift";


$tdataempindschedule[".exportFields"] = array();
$tdataempindschedule[".exportFields"][] = "EmployeeID";
$tdataempindschedule[".exportFields"][] = "ScID";
$tdataempindschedule[".exportFields"][] = "UserName";
$tdataempindschedule[".exportFields"][] = "Division";
$tdataempindschedule[".exportFields"][] = "Department";
$tdataempindschedule[".exportFields"][] = "WageType";
$tdataempindschedule[".exportFields"][] = "SDate";
$tdataempindschedule[".exportFields"][] = "DayIs";
$tdataempindschedule[".exportFields"][] = "RestDay";
$tdataempindschedule[".exportFields"][] = "STimeIn";
$tdataempindschedule[".exportFields"][] = "STimeOut";
$tdataempindschedule[".exportFields"][] = "TimeIn";
$tdataempindschedule[".exportFields"][] = "TimeOut";
$tdataempindschedule[".exportFields"][] = "LunchBreakFrom";
$tdataempindschedule[".exportFields"][] = "LunchBreakTo";
$tdataempindschedule[".exportFields"][] = "AfterBreakLogOut";
$tdataempindschedule[".exportFields"][] = "AfterBreakLog";
$tdataempindschedule[".exportFields"][] = "Mispunched";
$tdataempindschedule[".exportFields"][] = "RegWD";
$tdataempindschedule[".exportFields"][] = "DWork";
$tdataempindschedule[".exportFields"][] = "Absent";
$tdataempindschedule[".exportFields"][] = "IncludeBreakLate";
$tdataempindschedule[".exportFields"][] = "LateMins";
$tdataempindschedule[".exportFields"][] = "UndertimeMins";
$tdataempindschedule[".exportFields"][] = "HolidayType";
$tdataempindschedule[".exportFields"][] = "RHolidayHrs";
$tdataempindschedule[".exportFields"][] = "SHolidayHrs";
$tdataempindschedule[".exportFields"][] = "CHolidayHrs";
$tdataempindschedule[".exportFields"][] = "NDHrs";
$tdataempindschedule[".exportFields"][] = "RegNDHrs";
$tdataempindschedule[".exportFields"][] = "RDHrs";
$tdataempindschedule[".exportFields"][] = "RHNDHrs";
$tdataempindschedule[".exportFields"][] = "RDNDHrs";
$tdataempindschedule[".exportFields"][] = "SHNDHrs";
$tdataempindschedule[".exportFields"][] = "CHNDHrs";
$tdataempindschedule[".exportFields"][] = "ExcessHrs";
$tdataempindschedule[".exportFields"][] = "RegOTHrs";
$tdataempindschedule[".exportFields"][] = "RDOTHrs";
$tdataempindschedule[".exportFields"][] = "SHOTHrs";
$tdataempindschedule[".exportFields"][] = "CHOTHrs";
$tdataempindschedule[".exportFields"][] = "RHOTHrs";
$tdataempindschedule[".exportFields"][] = "TrODay";
$tdataempindschedule[".exportFields"][] = "VLDay";
$tdataempindschedule[".exportFields"][] = "SLDay";
$tdataempindschedule[".exportFields"][] = "ELDay";
$tdataempindschedule[".exportFields"][] = "PLDay";
$tdataempindschedule[".exportFields"][] = "SchedType";
$tdataempindschedule[".exportFields"][] = "Shift";

$tdataempindschedule[".importFields"] = array();
$tdataempindschedule[".importFields"][] = "ScID";
$tdataempindschedule[".importFields"][] = "UserName";
$tdataempindschedule[".importFields"][] = "SDate";
$tdataempindschedule[".importFields"][] = "STimeIn";
$tdataempindschedule[".importFields"][] = "STimeOut";
$tdataempindschedule[".importFields"][] = "SchedType";
$tdataempindschedule[".importFields"][] = "Shift";
$tdataempindschedule[".importFields"][] = "LunchBreakTo";
$tdataempindschedule[".importFields"][] = "Division";
$tdataempindschedule[".importFields"][] = "TimeIn";
$tdataempindschedule[".importFields"][] = "TimeOut";
$tdataempindschedule[".importFields"][] = "DayIs";
$tdataempindschedule[".importFields"][] = "RestDay";
$tdataempindschedule[".importFields"][] = "Department";
$tdataempindschedule[".importFields"][] = "RegWD";
$tdataempindschedule[".importFields"][] = "DWork";
$tdataempindschedule[".importFields"][] = "Absent";
$tdataempindschedule[".importFields"][] = "LateMins";
$tdataempindschedule[".importFields"][] = "UndertimeMins";
$tdataempindschedule[".importFields"][] = "RHolidayHrs";
$tdataempindschedule[".importFields"][] = "SHolidayHrs";
$tdataempindschedule[".importFields"][] = "CHolidayHrs";
$tdataempindschedule[".importFields"][] = "ExcessHrs";
$tdataempindschedule[".importFields"][] = "RegOTHrs";
$tdataempindschedule[".importFields"][] = "RHOTHrs";
$tdataempindschedule[".importFields"][] = "SHOTHrs";
$tdataempindschedule[".importFields"][] = "CHOTHrs";
$tdataempindschedule[".importFields"][] = "RDOTHrs";
$tdataempindschedule[".importFields"][] = "NDHrs";
$tdataempindschedule[".importFields"][] = "RDHrs";
$tdataempindschedule[".importFields"][] = "RegNDHrs";
$tdataempindschedule[".importFields"][] = "RHNDHrs";
$tdataempindschedule[".importFields"][] = "SHNDHrs";
$tdataempindschedule[".importFields"][] = "CHNDHrs";
$tdataempindschedule[".importFields"][] = "RDNDHrs";
$tdataempindschedule[".importFields"][] = "VLDay";
$tdataempindschedule[".importFields"][] = "SLDay";
$tdataempindschedule[".importFields"][] = "ELDay";
$tdataempindschedule[".importFields"][] = "PLDay";
$tdataempindschedule[".importFields"][] = "TrODay";
$tdataempindschedule[".importFields"][] = "HolidayType";
$tdataempindschedule[".importFields"][] = "Mispunched";
$tdataempindschedule[".importFields"][] = "WageType";
$tdataempindschedule[".importFields"][] = "LunchBreakFrom";
$tdataempindschedule[".importFields"][] = "AfterBreakLogOut";
$tdataempindschedule[".importFields"][] = "AfterBreakLog";
$tdataempindschedule[".importFields"][] = "IncludeBreakLate";
$tdataempindschedule[".importFields"][] = "EmployeeID";

$tdataempindschedule[".printFields"] = array();
$tdataempindschedule[".printFields"][] = "EmployeeID";
$tdataempindschedule[".printFields"][] = "ScID";
$tdataempindschedule[".printFields"][] = "UserName";
$tdataempindschedule[".printFields"][] = "Division";
$tdataempindschedule[".printFields"][] = "Department";
$tdataempindschedule[".printFields"][] = "WageType";
$tdataempindschedule[".printFields"][] = "SDate";
$tdataempindschedule[".printFields"][] = "DayIs";
$tdataempindschedule[".printFields"][] = "RestDay";
$tdataempindschedule[".printFields"][] = "STimeIn";
$tdataempindschedule[".printFields"][] = "STimeOut";
$tdataempindschedule[".printFields"][] = "TimeIn";
$tdataempindschedule[".printFields"][] = "TimeOut";
$tdataempindschedule[".printFields"][] = "LunchBreakFrom";
$tdataempindschedule[".printFields"][] = "LunchBreakTo";
$tdataempindschedule[".printFields"][] = "AfterBreakLogOut";
$tdataempindschedule[".printFields"][] = "AfterBreakLog";
$tdataempindschedule[".printFields"][] = "Mispunched";
$tdataempindschedule[".printFields"][] = "RegWD";
$tdataempindschedule[".printFields"][] = "DWork";
$tdataempindschedule[".printFields"][] = "Absent";
$tdataempindschedule[".printFields"][] = "IncludeBreakLate";
$tdataempindschedule[".printFields"][] = "LateMins";
$tdataempindschedule[".printFields"][] = "UndertimeMins";
$tdataempindschedule[".printFields"][] = "HolidayType";
$tdataempindschedule[".printFields"][] = "RHolidayHrs";
$tdataempindschedule[".printFields"][] = "SHolidayHrs";
$tdataempindschedule[".printFields"][] = "CHolidayHrs";
$tdataempindschedule[".printFields"][] = "NDHrs";
$tdataempindschedule[".printFields"][] = "RegNDHrs";
$tdataempindschedule[".printFields"][] = "RDHrs";
$tdataempindschedule[".printFields"][] = "RHNDHrs";
$tdataempindschedule[".printFields"][] = "RDNDHrs";
$tdataempindschedule[".printFields"][] = "SHNDHrs";
$tdataempindschedule[".printFields"][] = "CHNDHrs";
$tdataempindschedule[".printFields"][] = "ExcessHrs";
$tdataempindschedule[".printFields"][] = "RegOTHrs";
$tdataempindschedule[".printFields"][] = "RDOTHrs";
$tdataempindschedule[".printFields"][] = "SHOTHrs";
$tdataempindschedule[".printFields"][] = "CHOTHrs";
$tdataempindschedule[".printFields"][] = "RHOTHrs";
$tdataempindschedule[".printFields"][] = "TrODay";
$tdataempindschedule[".printFields"][] = "VLDay";
$tdataempindschedule[".printFields"][] = "SLDay";
$tdataempindschedule[".printFields"][] = "ELDay";
$tdataempindschedule[".printFields"][] = "PLDay";
$tdataempindschedule[".printFields"][] = "SchedType";
$tdataempindschedule[".printFields"][] = "Shift";


//	ScID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ScID";
	$fdata["GoodName"] = "ScID";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","ScID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataempindschedule["ScID"] = $fdata;
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","UserName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "UserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserName";

	
	
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
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 240;

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




	$tdataempindschedule["UserName"] = $fdata;
//	SDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SDate";
	$fdata["GoodName"] = "SDate";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","SDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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
		$fdata["defaultSearchOption"] = "Between";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings




	$tdataempindschedule["SDate"] = $fdata;
//	STimeIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "STimeIn";
	$fdata["GoodName"] = "STimeIn";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","STimeIn");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "STimeIn";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STimeIn";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
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
		
		$edata["controlWidth"] = 130;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataempindschedule["STimeIn"] = $fdata;
//	STimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "STimeOut";
	$fdata["GoodName"] = "STimeOut";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","STimeOut");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "STimeOut";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STimeOut";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 130;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
	//	End validation

	
			
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataempindschedule["STimeOut"] = $fdata;
//	SchedType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SchedType";
	$fdata["GoodName"] = "SchedType";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","SchedType");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SchedType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SchedType";

	
	
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
	$edata["LookupTable"] = "schedtype";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "stID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ScheduleType";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 170;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataempindschedule["SchedType"] = $fdata;
//	Shift
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Shift";
	$fdata["GoodName"] = "Shift";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","Shift");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Shift";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Shift";

	
	
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
	$edata["LookupTable"] = "shifts";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "shID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Shift";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 50;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataempindschedule["Shift"] = $fdata;
//	LunchBreakTo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "LunchBreakTo";
	$fdata["GoodName"] = "LunchBreakTo";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","LunchBreakTo");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LunchBreakTo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LunchBreakTo";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
	//	End validation

	
			
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 1);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataempindschedule["LunchBreakTo"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","Division");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Division";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Division";

	
	
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
	$edata["LookupTable"] = "divisions";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DvID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Division";
	
	

	
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








	$tdataempindschedule["Division"] = $fdata;
//	TimeIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "TimeIn";
	$fdata["GoodName"] = "TimeIn";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","TimeIn");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TimeIn";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TimeIn";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 11;
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








	$tdataempindschedule["TimeIn"] = $fdata;
//	TimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "TimeOut";
	$fdata["GoodName"] = "TimeOut";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","TimeOut");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TimeOut";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TimeOut";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 11;
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








	$tdataempindschedule["TimeOut"] = $fdata;
//	DayIs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DayIs";
	$fdata["GoodName"] = "DayIs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","DayIs");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
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








	$tdataempindschedule["DayIs"] = $fdata;
//	RestDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "RestDay";
	$fdata["GoodName"] = "RestDay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","RestDay");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
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








	$tdataempindschedule["RestDay"] = $fdata;
//	Department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Department";
	$fdata["GoodName"] = "Department";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","Department");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Department";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Department";

	
	
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
	$edata["LookupTable"] = "department";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DeID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Department";
	
	

	
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








	$tdataempindschedule["Department"] = $fdata;
//	RegWD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "RegWD";
	$fdata["GoodName"] = "RegWD";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","RegWD");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RegWD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegWD";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 64;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataempindschedule["RegWD"] = $fdata;
//	DWork
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "DWork";
	$fdata["GoodName"] = "DWork";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","DWork");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DWork";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DWork";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 64;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataempindschedule["DWork"] = $fdata;
//	Absent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Absent";
	$fdata["GoodName"] = "Absent";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","Absent");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Absent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Absent";

	
	
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
		
		$edata["controlWidth"] = 64;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataempindschedule["Absent"] = $fdata;
//	LateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "LateMins";
	$fdata["GoodName"] = "LateMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","LateMins");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LateMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LateMins";

	
	
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








	$tdataempindschedule["LateMins"] = $fdata;
//	UndertimeMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "UndertimeMins";
	$fdata["GoodName"] = "UndertimeMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","UndertimeMins");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "UndertimeMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UndertimeMins";

	
	
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








	$tdataempindschedule["UndertimeMins"] = $fdata;
//	RHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "RHolidayHrs";
	$fdata["GoodName"] = "RHolidayHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","RHolidayHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHolidayHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHolidayHrs";

	
	
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








	$tdataempindschedule["RHolidayHrs"] = $fdata;
//	SHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "SHolidayHrs";
	$fdata["GoodName"] = "SHolidayHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","SHolidayHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHolidayHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHolidayHrs";

	
	
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








	$tdataempindschedule["SHolidayHrs"] = $fdata;
//	CHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "CHolidayHrs";
	$fdata["GoodName"] = "CHolidayHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","CHolidayHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CHolidayHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHolidayHrs";

	
	
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








	$tdataempindschedule["CHolidayHrs"] = $fdata;
//	ExcessHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "ExcessHrs";
	$fdata["GoodName"] = "ExcessHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","ExcessHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ExcessHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ExcessHrs";

	
	
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








	$tdataempindschedule["ExcessHrs"] = $fdata;
//	RegOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "RegOTHrs";
	$fdata["GoodName"] = "RegOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","RegOTHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RegOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegOTHrs";

	
	
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








	$tdataempindschedule["RegOTHrs"] = $fdata;
//	RHOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "RHOTHrs";
	$fdata["GoodName"] = "RHOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","RHOTHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHOTHrs";

	
	
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








	$tdataempindschedule["RHOTHrs"] = $fdata;
//	SHOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "SHOTHrs";
	$fdata["GoodName"] = "SHOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","SHOTHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHOTHrs";

	
	
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








	$tdataempindschedule["SHOTHrs"] = $fdata;
//	CHOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "CHOTHrs";
	$fdata["GoodName"] = "CHOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","CHOTHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CHOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHOTHrs";

	
	
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








	$tdataempindschedule["CHOTHrs"] = $fdata;
//	RDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "RDOTHrs";
	$fdata["GoodName"] = "RDOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","RDOTHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RDOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RDOTHrs";

	
	
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








	$tdataempindschedule["RDOTHrs"] = $fdata;
//	NDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "NDHrs";
	$fdata["GoodName"] = "NDHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","NDHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NDHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NDHrs";

	
	
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








	$tdataempindschedule["NDHrs"] = $fdata;
//	RDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "RDHrs";
	$fdata["GoodName"] = "RDHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","RDHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RDHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RDHrs";

	
	
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








	$tdataempindschedule["RDHrs"] = $fdata;
//	RegNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "RegNDHrs";
	$fdata["GoodName"] = "RegNDHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","RegNDHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RegNDHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegNDHrs";

	
	
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








	$tdataempindschedule["RegNDHrs"] = $fdata;
//	RHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "RHNDHrs";
	$fdata["GoodName"] = "RHNDHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","RHNDHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHNDHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHNDHrs";

	
	
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








	$tdataempindschedule["RHNDHrs"] = $fdata;
//	SHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "SHNDHrs";
	$fdata["GoodName"] = "SHNDHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","SHNDHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHNDHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHNDHrs";

	
	
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








	$tdataempindschedule["SHNDHrs"] = $fdata;
//	CHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "CHNDHrs";
	$fdata["GoodName"] = "CHNDHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","CHNDHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CHNDHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHNDHrs";

	
	
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








	$tdataempindschedule["CHNDHrs"] = $fdata;
//	RDNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "RDNDHrs";
	$fdata["GoodName"] = "RDNDHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","RDNDHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RDNDHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RDNDHrs";

	
	
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








	$tdataempindschedule["RDNDHrs"] = $fdata;
//	VLDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "VLDay";
	$fdata["GoodName"] = "VLDay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","VLDay");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "VLDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VLDay";

	
	
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
		
		$edata["controlWidth"] = 94;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataempindschedule["VLDay"] = $fdata;
//	SLDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "SLDay";
	$fdata["GoodName"] = "SLDay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","SLDay");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SLDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SLDay";

	
	
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
		
		$edata["controlWidth"] = 94;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataempindschedule["SLDay"] = $fdata;
//	ELDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "ELDay";
	$fdata["GoodName"] = "ELDay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","ELDay");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ELDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ELDay";

	
	
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
		
		$edata["controlWidth"] = 94;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataempindschedule["ELDay"] = $fdata;
//	PLDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "PLDay";
	$fdata["GoodName"] = "PLDay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","PLDay");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PLDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PLDay";

	
	
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
		
		$edata["controlWidth"] = 94;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataempindschedule["PLDay"] = $fdata;
//	TrODay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "TrODay";
	$fdata["GoodName"] = "TrODay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","TrODay");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TrODay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TrODay";

	
	
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








	$tdataempindschedule["TrODay"] = $fdata;
//	HolidayType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "HolidayType";
	$fdata["GoodName"] = "HolidayType";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","HolidayType");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
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








	$tdataempindschedule["HolidayType"] = $fdata;
//	Mispunched
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "Mispunched";
	$fdata["GoodName"] = "Mispunched";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","Mispunched");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 64;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataempindschedule["Mispunched"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","WageType");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "WageType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WageType";

	
	
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
	$edata["LookupTable"] = "emptype";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ECatID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "EmployeeType";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 120;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataempindschedule["WageType"] = $fdata;
//	LunchBreakFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "LunchBreakFrom";
	$fdata["GoodName"] = "LunchBreakFrom";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","LunchBreakFrom");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LunchBreakFrom";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LunchBreakFrom";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
	//	End validation

	
			
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 1);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataempindschedule["LunchBreakFrom"] = $fdata;
//	AfterBreakLogOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "AfterBreakLogOut";
	$fdata["GoodName"] = "AfterBreakLogOut";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","AfterBreakLogOut");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AfterBreakLogOut";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AfterBreakLogOut";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 11;
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








	$tdataempindschedule["AfterBreakLogOut"] = $fdata;
//	AfterBreakLog
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "AfterBreakLog";
	$fdata["GoodName"] = "AfterBreakLog";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","AfterBreakLog");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AfterBreakLog";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AfterBreakLog";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 11;
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








	$tdataempindschedule["AfterBreakLog"] = $fdata;
//	IncludeBreakLate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "IncludeBreakLate";
	$fdata["GoodName"] = "IncludeBreakLate";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","IncludeBreakLate");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "IncludeBreakLate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IncludeBreakLate";

	
	
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








	$tdataempindschedule["IncludeBreakLate"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empindschedule","EmployeeID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 124;

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




	$tdataempindschedule["EmployeeID"] = $fdata;


$tables_data["empindschedule"]=&$tdataempindschedule;
$field_labels["empindschedule"] = &$fieldLabelsempindschedule;
$fieldToolTips["empindschedule"] = &$fieldToolTipsempindschedule;
$placeHolders["empindschedule"] = &$placeHoldersempindschedule;
$page_titles["empindschedule"] = &$pageTitlesempindschedule;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["empindschedule"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["empindschedule"] = array();


	
				$strOriginalDetailsTable="demo_user";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="demo_user";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "demo_user";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
			$masterParams["dispMasterInfo"][PAGE_EDIT] = true;
			$masterParams["dispMasterInfo"][PAGE_VIEW] = true;

	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["empindschedule"][0] = $masterParams;
				$masterTablesData["empindschedule"][0]["masterKeys"] = array();
	$masterTablesData["empindschedule"][0]["masterKeys"][]="EmployeeID";
				$masterTablesData["empindschedule"][0]["detailKeys"] = array();
	$masterTablesData["empindschedule"][0]["detailKeys"][]="EmployeeID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_empindschedule()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ScID,  UserName,  SDate,  STimeIn,  STimeOut,  SchedType,  Shift,  LunchBreakTo,  Division,  TimeIn,  TimeOut,  DayIs,  RestDay,  Department,  RegWD,  DWork,  Absent,  LateMins,  UndertimeMins,  RHolidayHrs,  SHolidayHrs,  CHolidayHrs,  ExcessHrs,  RegOTHrs,  RHOTHrs,  SHOTHrs,  CHOTHrs,  RDOTHrs,  NDHrs,  RDHrs,  RegNDHrs,  RHNDHrs,  SHNDHrs,  CHNDHrs,  RDNDHrs,  VLDay,  SLDay,  ELDay,  PLDay,  TrODay,  HolidayType,  Mispunched,  WageType,  LunchBreakFrom,  AfterBreakLogOut,  AfterBreakLog,  IncludeBreakLate,  EmployeeID";
$proto0["m_strFrom"] = "FROM indschedule";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY ScID DESC";
	
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
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto6["m_sql"] = "ScID";
$proto6["m_srcTableName"] = "empindschedule";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto8["m_sql"] = "UserName";
$proto8["m_srcTableName"] = "empindschedule";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SDate",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto10["m_sql"] = "SDate";
$proto10["m_srcTableName"] = "empindschedule";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "STimeIn",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto12["m_sql"] = "STimeIn";
$proto12["m_srcTableName"] = "empindschedule";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "STimeOut",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto14["m_sql"] = "STimeOut";
$proto14["m_srcTableName"] = "empindschedule";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "SchedType",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto16["m_sql"] = "SchedType";
$proto16["m_srcTableName"] = "empindschedule";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Shift",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto18["m_sql"] = "Shift";
$proto18["m_srcTableName"] = "empindschedule";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "LunchBreakTo",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto20["m_sql"] = "LunchBreakTo";
$proto20["m_srcTableName"] = "empindschedule";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto22["m_sql"] = "Division";
$proto22["m_srcTableName"] = "empindschedule";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeIn",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto24["m_sql"] = "TimeIn";
$proto24["m_srcTableName"] = "empindschedule";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeOut",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto26["m_sql"] = "TimeOut";
$proto26["m_srcTableName"] = "empindschedule";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "DayIs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto28["m_sql"] = "DayIs";
$proto28["m_srcTableName"] = "empindschedule";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "RestDay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto30["m_sql"] = "RestDay";
$proto30["m_srcTableName"] = "empindschedule";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto32["m_sql"] = "Department";
$proto32["m_srcTableName"] = "empindschedule";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "RegWD",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto34["m_sql"] = "RegWD";
$proto34["m_srcTableName"] = "empindschedule";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "DWork",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto36["m_sql"] = "DWork";
$proto36["m_srcTableName"] = "empindschedule";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Absent",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto38["m_sql"] = "Absent";
$proto38["m_srcTableName"] = "empindschedule";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "LateMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto40["m_sql"] = "LateMins";
$proto40["m_srcTableName"] = "empindschedule";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "UndertimeMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto42["m_sql"] = "UndertimeMins";
$proto42["m_srcTableName"] = "empindschedule";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "RHolidayHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto44["m_sql"] = "RHolidayHrs";
$proto44["m_srcTableName"] = "empindschedule";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "SHolidayHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto46["m_sql"] = "SHolidayHrs";
$proto46["m_srcTableName"] = "empindschedule";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "CHolidayHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto48["m_sql"] = "CHolidayHrs";
$proto48["m_srcTableName"] = "empindschedule";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "ExcessHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto50["m_sql"] = "ExcessHrs";
$proto50["m_srcTableName"] = "empindschedule";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "RegOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto52["m_sql"] = "RegOTHrs";
$proto52["m_srcTableName"] = "empindschedule";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "RHOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto54["m_sql"] = "RHOTHrs";
$proto54["m_srcTableName"] = "empindschedule";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto56["m_sql"] = "SHOTHrs";
$proto56["m_srcTableName"] = "empindschedule";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "CHOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto58["m_sql"] = "CHOTHrs";
$proto58["m_srcTableName"] = "empindschedule";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "RDOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto60["m_sql"] = "RDOTHrs";
$proto60["m_srcTableName"] = "empindschedule";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "NDHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto62["m_sql"] = "NDHrs";
$proto62["m_srcTableName"] = "empindschedule";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "RDHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto64["m_sql"] = "RDHrs";
$proto64["m_srcTableName"] = "empindschedule";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "RegNDHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto66["m_sql"] = "RegNDHrs";
$proto66["m_srcTableName"] = "empindschedule";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "RHNDHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto68["m_sql"] = "RHNDHrs";
$proto68["m_srcTableName"] = "empindschedule";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "SHNDHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto70["m_sql"] = "SHNDHrs";
$proto70["m_srcTableName"] = "empindschedule";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "CHNDHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto72["m_sql"] = "CHNDHrs";
$proto72["m_srcTableName"] = "empindschedule";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "RDNDHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto74["m_sql"] = "RDNDHrs";
$proto74["m_srcTableName"] = "empindschedule";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "VLDay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto76["m_sql"] = "VLDay";
$proto76["m_srcTableName"] = "empindschedule";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "SLDay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto78["m_sql"] = "SLDay";
$proto78["m_srcTableName"] = "empindschedule";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "ELDay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto80["m_sql"] = "ELDay";
$proto80["m_srcTableName"] = "empindschedule";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "PLDay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto82["m_sql"] = "PLDay";
$proto82["m_srcTableName"] = "empindschedule";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "TrODay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto84["m_sql"] = "TrODay";
$proto84["m_srcTableName"] = "empindschedule";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "HolidayType",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto86["m_sql"] = "HolidayType";
$proto86["m_srcTableName"] = "empindschedule";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "Mispunched",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto88["m_sql"] = "Mispunched";
$proto88["m_srcTableName"] = "empindschedule";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "WageType",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto90["m_sql"] = "WageType";
$proto90["m_srcTableName"] = "empindschedule";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "LunchBreakFrom",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto92["m_sql"] = "LunchBreakFrom";
$proto92["m_srcTableName"] = "empindschedule";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "AfterBreakLogOut",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto94["m_sql"] = "AfterBreakLogOut";
$proto94["m_srcTableName"] = "empindschedule";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "AfterBreakLog",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto96["m_sql"] = "AfterBreakLog";
$proto96["m_srcTableName"] = "empindschedule";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "IncludeBreakLate",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto98["m_sql"] = "IncludeBreakLate";
$proto98["m_srcTableName"] = "empindschedule";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto100["m_sql"] = "EmployeeID";
$proto100["m_srcTableName"] = "empindschedule";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto102=array();
$proto102["m_link"] = "SQLL_MAIN";
			$proto103=array();
$proto103["m_strName"] = "indschedule";
$proto103["m_srcTableName"] = "empindschedule";
$proto103["m_columns"] = array();
$proto103["m_columns"][] = "ScID";
$proto103["m_columns"][] = "UserName";
$proto103["m_columns"][] = "SDate";
$proto103["m_columns"][] = "STimeIn";
$proto103["m_columns"][] = "STimeOut";
$proto103["m_columns"][] = "SchedType";
$proto103["m_columns"][] = "CrossMidnight";
$proto103["m_columns"][] = "RecordOnFirstDay";
$proto103["m_columns"][] = "RecordOnSecondDay";
$proto103["m_columns"][] = "ApprovedOT";
$proto103["m_columns"][] = "AOTMins";
$proto103["m_columns"][] = "SRestDay";
$proto103["m_columns"][] = "WageType";
$proto103["m_columns"][] = "ApprovedNightDiff";
$proto103["m_columns"][] = "ANDiff";
$proto103["m_columns"][] = "EmployeeID";
$proto103["m_columns"][] = "MinsPerDay";
$proto103["m_columns"][] = "BreakMins";
$proto103["m_columns"][] = "Shift";
$proto103["m_columns"][] = "ApprovedRD";
$proto103["m_columns"][] = "RDMins";
$proto103["m_columns"][] = "ScRID";
$proto103["m_columns"][] = "LunchBreakFrom";
$proto103["m_columns"][] = "LunchBreakTo";
$proto103["m_columns"][] = "ReqLogOutInOnBreak";
$proto103["m_columns"][] = "FirstHalfMins";
$proto103["m_columns"][] = "SecondHalfMins";
$proto103["m_columns"][] = "NDMealAllowancePerShift";
$proto103["m_columns"][] = "NDMinimumHrs";
$proto103["m_columns"][] = "NDMealAllowance";
$proto103["m_columns"][] = "Division";
$proto103["m_columns"][] = "TimeIn";
$proto103["m_columns"][] = "TimeOut";
$proto103["m_columns"][] = "DayIs";
$proto103["m_columns"][] = "RestDay";
$proto103["m_columns"][] = "Schedx";
$proto103["m_columns"][] = "Department";
$proto103["m_columns"][] = "RegWD";
$proto103["m_columns"][] = "DWork";
$proto103["m_columns"][] = "Absent";
$proto103["m_columns"][] = "LateMins";
$proto103["m_columns"][] = "UndertimeMins";
$proto103["m_columns"][] = "RHolidayHrs";
$proto103["m_columns"][] = "SHolidayHrs";
$proto103["m_columns"][] = "CHolidayHrs";
$proto103["m_columns"][] = "ExcessHrs";
$proto103["m_columns"][] = "RegOTHrs";
$proto103["m_columns"][] = "RHOTHrs";
$proto103["m_columns"][] = "SHOTHrs";
$proto103["m_columns"][] = "CHOTHrs";
$proto103["m_columns"][] = "RDOTHrs";
$proto103["m_columns"][] = "NDHrs";
$proto103["m_columns"][] = "RDHrs";
$proto103["m_columns"][] = "RegNDHrs";
$proto103["m_columns"][] = "RHNDHrs";
$proto103["m_columns"][] = "SHNDHrs";
$proto103["m_columns"][] = "CHNDHrs";
$proto103["m_columns"][] = "RDNDHrs";
$proto103["m_columns"][] = "VLDay";
$proto103["m_columns"][] = "SLDay";
$proto103["m_columns"][] = "ELDay";
$proto103["m_columns"][] = "PLDay";
$proto103["m_columns"][] = "TrODay";
$proto103["m_columns"][] = "HolidayType";
$proto103["m_columns"][] = "Mispunched";
$proto103["m_columns"][] = "Holiday1stHalf";
$proto103["m_columns"][] = "Holiday2ndHalf";
$proto103["m_columns"][] = "AfterBreakLog";
$proto103["m_columns"][] = "BreakLateMins";
$proto103["m_columns"][] = "TotLateMins";
$proto103["m_columns"][] = "LatePenaltyMins";
$proto103["m_columns"][] = "Employer";
$proto103["m_columns"][] = "AfterBreakLogOut";
$proto103["m_columns"][] = "LateFixPenalty";
$proto103["m_columns"][] = "Locked";
$proto103["m_columns"][] = "IScRID";
$proto103["m_columns"][] = "PreLogMins";
$proto103["m_columns"][] = "IncludeBreakLate";
$proto103["m_columns"][] = "GracePeriodMins";
$proto103["m_columns"][] = "WithAddBreaks";
$proto103["m_columns"][] = "ANDOTMins";
$proto103["m_columns"][] = "RegNDOTHrs";
$proto103["m_columns"][] = "RHNDOTHrs";
$proto103["m_columns"][] = "SHNDOTHrs";
$proto103["m_columns"][] = "CHNDOTHrs";
$proto103["m_columns"][] = "RDNDOTHrs";
$proto103["m_columns"][] = "DH";
$proto103["m_columns"][] = "DHRD";
$proto103["m_columns"][] = "DHOT";
$proto103["m_columns"][] = "DHRDOT";
$proto103["m_columns"][] = "SHRDND";
$proto103["m_columns"][] = "RHRDND";
$proto103["m_columns"][] = "SHRDNDOT";
$proto103["m_columns"][] = "RHRDNDOT";
$proto103["m_columns"][] = "DHND";
$proto103["m_columns"][] = "DHRDND";
$proto103["m_columns"][] = "DHNDOT";
$proto103["m_columns"][] = "DHRDNDOT";
$proto103["m_columns"][] = "RHRDOT";
$proto103["m_columns"][] = "SHRDOT";
$proto103["m_columns"][] = "RegND";
$proto103["m_columns"][] = "RegRD";
$proto103["m_columns"][] = "SHOTD";
$proto103["m_columns"][] = "SHRDOTD";
$proto103["m_columns"][] = "NDOT";
$proto103["m_columns"][] = "RHRD";
$proto103["m_columns"][] = "SHRD";
$obj = new SQLTable($proto103);

$proto102["m_table"] = $obj;
$proto102["m_sql"] = "indschedule";
$proto102["m_alias"] = "";
$proto102["m_srcTableName"] = "empindschedule";
$proto104=array();
$proto104["m_sql"] = "";
$proto104["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto104["m_column"]=$obj;
$proto104["m_contained"] = array();
$proto104["m_strCase"] = "";
$proto104["m_havingmode"] = false;
$proto104["m_inBrackets"] = false;
$proto104["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto104);

$proto102["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto102);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto106=array();
						$obj = new SQLField(array(
	"m_strName" => "ScID",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empindschedule"
));

$proto106["m_column"]=$obj;
$proto106["m_bAsc"] = 0;
$proto106["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto106);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="empindschedule";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_empindschedule = createSqlQuery_empindschedule();


	
		;

																																																

$tdataempindschedule[".sqlquery"] = $queryData_empindschedule;

include_once(getabspath("include/empindschedule_events.php"));
$tableEvents["empindschedule"] = new eventclass_empindschedule;
$tdataempindschedule[".hasEvents"] = true;

?>