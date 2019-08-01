<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadt5 = array();
	$tdatadt5[".truncateText"] = true;
	$tdatadt5[".NumberOfChars"] = 80;
	$tdatadt5[".ShortName"] = "dt5";
	$tdatadt5[".OwnerID"] = "";
	$tdatadt5[".OriginalTable"] = "dt5";

//	field labels
$fieldLabelsdt5 = array();
$fieldToolTipsdt5 = array();
$pageTitlesdt5 = array();
$placeHoldersdt5 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdt5["English"] = array();
	$fieldToolTipsdt5["English"] = array();
	$placeHoldersdt5["English"] = array();
	$pageTitlesdt5["English"] = array();
	$fieldLabelsdt5["English"]["ScID"] = "Sc ID";
	$fieldToolTipsdt5["English"]["ScID"] = "";
	$placeHoldersdt5["English"]["ScID"] = "";
	$fieldLabelsdt5["English"]["EmployeeID"] = "Biometric ID";
	$fieldToolTipsdt5["English"]["EmployeeID"] = "";
	$placeHoldersdt5["English"]["EmployeeID"] = "";
	$fieldLabelsdt5["English"]["UserName"] = "Employee";
	$fieldToolTipsdt5["English"]["UserName"] = "";
	$placeHoldersdt5["English"]["UserName"] = "";
	$fieldLabelsdt5["English"]["WageType"] = "Wage Type";
	$fieldToolTipsdt5["English"]["WageType"] = "";
	$placeHoldersdt5["English"]["WageType"] = "";
	$fieldLabelsdt5["English"]["SDate"] = "SDate";
	$fieldToolTipsdt5["English"]["SDate"] = "";
	$placeHoldersdt5["English"]["SDate"] = "";
	$fieldLabelsdt5["English"]["DayIs"] = "Day Is";
	$fieldToolTipsdt5["English"]["DayIs"] = "";
	$placeHoldersdt5["English"]["DayIs"] = "";
	$fieldLabelsdt5["English"]["RestDay"] = "Rest Day";
	$fieldToolTipsdt5["English"]["RestDay"] = "";
	$placeHoldersdt5["English"]["RestDay"] = "";
	$fieldLabelsdt5["English"]["STimeIn"] = "STime In";
	$fieldToolTipsdt5["English"]["STimeIn"] = "";
	$placeHoldersdt5["English"]["STimeIn"] = "";
	$fieldLabelsdt5["English"]["STimeOut"] = "STime Out";
	$fieldToolTipsdt5["English"]["STimeOut"] = "";
	$placeHoldersdt5["English"]["STimeOut"] = "";
	$fieldLabelsdt5["English"]["TimeIn"] = "Time In";
	$fieldToolTipsdt5["English"]["TimeIn"] = "";
	$placeHoldersdt5["English"]["TimeIn"] = "";
	$fieldLabelsdt5["English"]["TimeOut"] = "Time Out";
	$fieldToolTipsdt5["English"]["TimeOut"] = "";
	$placeHoldersdt5["English"]["TimeOut"] = "";
	$fieldLabelsdt5["English"]["MisPunched"] = "Mis Punched";
	$fieldToolTipsdt5["English"]["MisPunched"] = "";
	$placeHoldersdt5["English"]["MisPunched"] = "";
	$fieldLabelsdt5["English"]["RegWD"] = "Reg WD";
	$fieldToolTipsdt5["English"]["RegWD"] = "";
	$placeHoldersdt5["English"]["RegWD"] = "";
	$fieldLabelsdt5["English"]["DWork"] = "DWork";
	$fieldToolTipsdt5["English"]["DWork"] = "";
	$placeHoldersdt5["English"]["DWork"] = "";
	$fieldLabelsdt5["English"]["Absent"] = "Absent";
	$fieldToolTipsdt5["English"]["Absent"] = "";
	$placeHoldersdt5["English"]["Absent"] = "";
	$fieldLabelsdt5["English"]["LateMins"] = "Late Mins";
	$fieldToolTipsdt5["English"]["LateMins"] = "";
	$placeHoldersdt5["English"]["LateMins"] = "";
	$fieldLabelsdt5["English"]["UnderstimeMins"] = "Understime Mins";
	$fieldToolTipsdt5["English"]["UnderstimeMins"] = "";
	$placeHoldersdt5["English"]["UnderstimeMins"] = "";
	$fieldLabelsdt5["English"]["HolidayType"] = "Holiday Type";
	$fieldToolTipsdt5["English"]["HolidayType"] = "";
	$placeHoldersdt5["English"]["HolidayType"] = "";
	$fieldLabelsdt5["English"]["TempOT"] = "Temp OT";
	$fieldToolTipsdt5["English"]["TempOT"] = "";
	$placeHoldersdt5["English"]["TempOT"] = "";
	$fieldLabelsdt5["English"]["ApprovedOT"] = "Approved OT";
	$fieldToolTipsdt5["English"]["ApprovedOT"] = "";
	$placeHoldersdt5["English"]["ApprovedOT"] = "";
	$fieldLabelsdt5["English"]["AOTMins"] = "AOTMins";
	$fieldToolTipsdt5["English"]["AOTMins"] = "";
	$placeHoldersdt5["English"]["AOTMins"] = "";
	$fieldLabelsdt5["English"]["NDMins"] = "NDMins";
	$fieldToolTipsdt5["English"]["NDMins"] = "";
	$placeHoldersdt5["English"]["NDMins"] = "";
	$fieldLabelsdt5["English"]["ApprovedNightDiff"] = "Approved Night Diff";
	$fieldToolTipsdt5["English"]["ApprovedNightDiff"] = "";
	$placeHoldersdt5["English"]["ApprovedNightDiff"] = "";
	$fieldLabelsdt5["English"]["ANDiff"] = "ANDiff";
	$fieldToolTipsdt5["English"]["ANDiff"] = "";
	$placeHoldersdt5["English"]["ANDiff"] = "";
	$fieldLabelsdt5["English"]["ApprovedRD"] = "Approved RD";
	$fieldToolTipsdt5["English"]["ApprovedRD"] = "";
	$placeHoldersdt5["English"]["ApprovedRD"] = "";
	$fieldLabelsdt5["English"]["RDMins"] = "RDMins";
	$fieldToolTipsdt5["English"]["RDMins"] = "";
	$placeHoldersdt5["English"]["RDMins"] = "";
	$fieldLabelsdt5["English"]["VL"] = "VL";
	$fieldToolTipsdt5["English"]["VL"] = "";
	$placeHoldersdt5["English"]["VL"] = "";
	$fieldLabelsdt5["English"]["SL"] = "SL";
	$fieldToolTipsdt5["English"]["SL"] = "";
	$placeHoldersdt5["English"]["SL"] = "";
	$fieldLabelsdt5["English"]["EL"] = "EL";
	$fieldToolTipsdt5["English"]["EL"] = "";
	$placeHoldersdt5["English"]["EL"] = "";
	$fieldLabelsdt5["English"]["PL"] = "PL";
	$fieldToolTipsdt5["English"]["PL"] = "";
	$placeHoldersdt5["English"]["PL"] = "";
	$fieldLabelsdt5["English"]["TrO"] = "Tr O";
	$fieldToolTipsdt5["English"]["TrO"] = "";
	$placeHoldersdt5["English"]["TrO"] = "";
	$fieldLabelsdt5["English"]["RegOT"] = "Reg OT";
	$fieldToolTipsdt5["English"]["RegOT"] = "";
	$placeHoldersdt5["English"]["RegOT"] = "";
	$fieldLabelsdt5["English"]["RHOT"] = "RHOT";
	$fieldToolTipsdt5["English"]["RHOT"] = "";
	$placeHoldersdt5["English"]["RHOT"] = "";
	$fieldLabelsdt5["English"]["SHOT"] = "SHOT";
	$fieldToolTipsdt5["English"]["SHOT"] = "";
	$placeHoldersdt5["English"]["SHOT"] = "";
	$fieldLabelsdt5["English"]["CHOT"] = "CHOT";
	$fieldToolTipsdt5["English"]["CHOT"] = "";
	$placeHoldersdt5["English"]["CHOT"] = "";
	$fieldLabelsdt5["English"]["RDOT"] = "RDOT";
	$fieldToolTipsdt5["English"]["RDOT"] = "";
	$placeHoldersdt5["English"]["RDOT"] = "";
	$fieldLabelsdt5["English"]["RegND"] = "Reg ND";
	$fieldToolTipsdt5["English"]["RegND"] = "";
	$placeHoldersdt5["English"]["RegND"] = "";
	$fieldLabelsdt5["English"]["RHND"] = "RHND";
	$fieldToolTipsdt5["English"]["RHND"] = "";
	$placeHoldersdt5["English"]["RHND"] = "";
	$fieldLabelsdt5["English"]["SHND"] = "SHND";
	$fieldToolTipsdt5["English"]["SHND"] = "";
	$placeHoldersdt5["English"]["SHND"] = "";
	$fieldLabelsdt5["English"]["CHND"] = "CHND";
	$fieldToolTipsdt5["English"]["CHND"] = "";
	$placeHoldersdt5["English"]["CHND"] = "";
	$fieldLabelsdt5["English"]["RDND"] = "RDND";
	$fieldToolTipsdt5["English"]["RDND"] = "";
	$placeHoldersdt5["English"]["RDND"] = "";
	$fieldLabelsdt5["English"]["Rlink"] = "Rlink";
	$fieldToolTipsdt5["English"]["Rlink"] = "";
	$placeHoldersdt5["English"]["Rlink"] = "";
	$fieldLabelsdt5["English"]["Division"] = "Division";
	$fieldToolTipsdt5["English"]["Division"] = "";
	$placeHoldersdt5["English"]["Division"] = "";
	$fieldLabelsdt5["English"]["Department"] = "Department";
	$fieldToolTipsdt5["English"]["Department"] = "";
	$placeHoldersdt5["English"]["Department"] = "";
	$fieldLabelsdt5["English"]["Employer"] = "Employer";
	$fieldToolTipsdt5["English"]["Employer"] = "";
	$placeHoldersdt5["English"]["Employer"] = "";
	$fieldLabelsdt5["English"]["RHolidayHrs"] = "RHoliday Hrs";
	$fieldToolTipsdt5["English"]["RHolidayHrs"] = "";
	$placeHoldersdt5["English"]["RHolidayHrs"] = "";
	$fieldLabelsdt5["English"]["SHolidayHrs"] = "SHoliday Hrs";
	$fieldToolTipsdt5["English"]["SHolidayHrs"] = "";
	$placeHoldersdt5["English"]["SHolidayHrs"] = "";
	$fieldLabelsdt5["English"]["CHolidayHrs"] = "CHoliday Hrs";
	$fieldToolTipsdt5["English"]["CHolidayHrs"] = "";
	$placeHoldersdt5["English"]["CHolidayHrs"] = "";
	$fieldLabelsdt5["English"]["AfterBreakLogOut"] = "Break-Out";
	$fieldToolTipsdt5["English"]["AfterBreakLogOut"] = "";
	$placeHoldersdt5["English"]["AfterBreakLogOut"] = "";
	$fieldLabelsdt5["English"]["AfterBreakLog"] = "Break-In";
	$fieldToolTipsdt5["English"]["AfterBreakLog"] = "";
	$placeHoldersdt5["English"]["AfterBreakLog"] = "";
	$fieldLabelsdt5["English"]["BreakLateMins"] = "Break Late Mins";
	$fieldToolTipsdt5["English"]["BreakLateMins"] = "";
	$placeHoldersdt5["English"]["BreakLateMins"] = "";
	$fieldLabelsdt5["English"]["EarlyMins"] = "Early Mins";
	$fieldToolTipsdt5["English"]["EarlyMins"] = "";
	$placeHoldersdt5["English"]["EarlyMins"] = "";
	if (count($fieldToolTipsdt5["English"]))
		$tdatadt5[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdt5[""] = array();
	$fieldToolTipsdt5[""] = array();
	$placeHoldersdt5[""] = array();
	$pageTitlesdt5[""] = array();
	if (count($fieldToolTipsdt5[""]))
		$tdatadt5[".isUseToolTips"] = true;
}


	$tdatadt5[".NCSearch"] = true;



$tdatadt5[".shortTableName"] = "dt5";
$tdatadt5[".nSecOptions"] = 0;
$tdatadt5[".recsPerRowPrint"] = 1;
$tdatadt5[".mainTableOwnerID"] = "";
$tdatadt5[".moveNext"] = 1;
$tdatadt5[".entityType"] = 0;

$tdatadt5[".strOriginalTableName"] = "dt5";

	



$tdatadt5[".showAddInPopup"] = false;

$tdatadt5[".showEditInPopup"] = false;

$tdatadt5[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadt5[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadt5[".fieldsForRegister"] = array();

$tdatadt5[".listAjax"] = false;

	$tdatadt5[".audit"] = false;

	$tdatadt5[".locking"] = false;



$tdatadt5[".list"] = true;



$tdatadt5[".reorderRecordsByHeader"] = true;


$tdatadt5[".exportFormatting"] = 2;
$tdatadt5[".exportDelimiter"] = ",";
		
$tdatadt5[".view"] = true;


$tdatadt5[".exportTo"] = true;

$tdatadt5[".printFriendly"] = true;


$tdatadt5[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadt5[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatadt5[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatadt5[".searchSaving"] = false;
//

$tdatadt5[".showSearchPanel"] = true;
		$tdatadt5[".flexibleSearch"] = true;

$tdatadt5[".isUseAjaxSuggest"] = true;

$tdatadt5[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																				

$tdatadt5[".ajaxCodeSnippetAdded"] = false;

$tdatadt5[".buttonsAdded"] = false;

$tdatadt5[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadt5[".isUseTimeForSearch"] = false;



$tdatadt5[".badgeColor"] = "d2691e";


$tdatadt5[".allSearchFields"] = array();
$tdatadt5[".filterFields"] = array();
$tdatadt5[".requiredSearchFields"] = array();

$tdatadt5[".allSearchFields"][] = "ScID";
	$tdatadt5[".allSearchFields"][] = "EmployeeID";
	$tdatadt5[".allSearchFields"][] = "UserName";
	$tdatadt5[".allSearchFields"][] = "Employer";
	$tdatadt5[".allSearchFields"][] = "Division";
	$tdatadt5[".allSearchFields"][] = "Department";
	$tdatadt5[".allSearchFields"][] = "WageType";
	$tdatadt5[".allSearchFields"][] = "SDate";
	$tdatadt5[".allSearchFields"][] = "DayIs";
	$tdatadt5[".allSearchFields"][] = "RestDay";
	$tdatadt5[".allSearchFields"][] = "STimeIn";
	$tdatadt5[".allSearchFields"][] = "STimeOut";
	$tdatadt5[".allSearchFields"][] = "TimeIn";
	$tdatadt5[".allSearchFields"][] = "TimeOut";
	$tdatadt5[".allSearchFields"][] = "AfterBreakLogOut";
	$tdatadt5[".allSearchFields"][] = "AfterBreakLog";
	$tdatadt5[".allSearchFields"][] = "MisPunched";
	$tdatadt5[".allSearchFields"][] = "RegWD";
	$tdatadt5[".allSearchFields"][] = "DWork";
	$tdatadt5[".allSearchFields"][] = "Absent";
	$tdatadt5[".allSearchFields"][] = "EarlyMins";
	$tdatadt5[".allSearchFields"][] = "LateMins";
	$tdatadt5[".allSearchFields"][] = "UnderstimeMins";
	$tdatadt5[".allSearchFields"][] = "BreakLateMins";
	$tdatadt5[".allSearchFields"][] = "HolidayType";
	$tdatadt5[".allSearchFields"][] = "TempOT";
	$tdatadt5[".allSearchFields"][] = "ApprovedOT";
	$tdatadt5[".allSearchFields"][] = "AOTMins";
	$tdatadt5[".allSearchFields"][] = "NDMins";
	$tdatadt5[".allSearchFields"][] = "ApprovedNightDiff";
	$tdatadt5[".allSearchFields"][] = "ANDiff";
	$tdatadt5[".allSearchFields"][] = "ApprovedRD";
	$tdatadt5[".allSearchFields"][] = "RDMins";
	$tdatadt5[".allSearchFields"][] = "RHolidayHrs";
	$tdatadt5[".allSearchFields"][] = "SHolidayHrs";
	$tdatadt5[".allSearchFields"][] = "CHolidayHrs";
	$tdatadt5[".allSearchFields"][] = "VL";
	$tdatadt5[".allSearchFields"][] = "SL";
	$tdatadt5[".allSearchFields"][] = "EL";
	$tdatadt5[".allSearchFields"][] = "PL";
	$tdatadt5[".allSearchFields"][] = "TrO";
	$tdatadt5[".allSearchFields"][] = "RegOT";
	$tdatadt5[".allSearchFields"][] = "RHOT";
	$tdatadt5[".allSearchFields"][] = "SHOT";
	$tdatadt5[".allSearchFields"][] = "CHOT";
	$tdatadt5[".allSearchFields"][] = "RDOT";
	$tdatadt5[".allSearchFields"][] = "RegND";
	$tdatadt5[".allSearchFields"][] = "RHND";
	$tdatadt5[".allSearchFields"][] = "SHND";
	$tdatadt5[".allSearchFields"][] = "CHND";
	$tdatadt5[".allSearchFields"][] = "RDND";
	$tdatadt5[".allSearchFields"][] = "Rlink";
	

$tdatadt5[".googleLikeFields"] = array();
$tdatadt5[".googleLikeFields"][] = "ScID";
$tdatadt5[".googleLikeFields"][] = "EmployeeID";
$tdatadt5[".googleLikeFields"][] = "UserName";
$tdatadt5[".googleLikeFields"][] = "WageType";
$tdatadt5[".googleLikeFields"][] = "SDate";
$tdatadt5[".googleLikeFields"][] = "DayIs";
$tdatadt5[".googleLikeFields"][] = "RestDay";
$tdatadt5[".googleLikeFields"][] = "STimeIn";
$tdatadt5[".googleLikeFields"][] = "STimeOut";
$tdatadt5[".googleLikeFields"][] = "TimeIn";
$tdatadt5[".googleLikeFields"][] = "TimeOut";
$tdatadt5[".googleLikeFields"][] = "MisPunched";
$tdatadt5[".googleLikeFields"][] = "RegWD";
$tdatadt5[".googleLikeFields"][] = "DWork";
$tdatadt5[".googleLikeFields"][] = "Absent";
$tdatadt5[".googleLikeFields"][] = "LateMins";
$tdatadt5[".googleLikeFields"][] = "UnderstimeMins";
$tdatadt5[".googleLikeFields"][] = "HolidayType";
$tdatadt5[".googleLikeFields"][] = "TempOT";
$tdatadt5[".googleLikeFields"][] = "ApprovedOT";
$tdatadt5[".googleLikeFields"][] = "AOTMins";
$tdatadt5[".googleLikeFields"][] = "NDMins";
$tdatadt5[".googleLikeFields"][] = "ApprovedNightDiff";
$tdatadt5[".googleLikeFields"][] = "ANDiff";
$tdatadt5[".googleLikeFields"][] = "ApprovedRD";
$tdatadt5[".googleLikeFields"][] = "RDMins";
$tdatadt5[".googleLikeFields"][] = "VL";
$tdatadt5[".googleLikeFields"][] = "SL";
$tdatadt5[".googleLikeFields"][] = "EL";
$tdatadt5[".googleLikeFields"][] = "PL";
$tdatadt5[".googleLikeFields"][] = "TrO";
$tdatadt5[".googleLikeFields"][] = "RHolidayHrs";
$tdatadt5[".googleLikeFields"][] = "SHolidayHrs";
$tdatadt5[".googleLikeFields"][] = "CHolidayHrs";
$tdatadt5[".googleLikeFields"][] = "RegOT";
$tdatadt5[".googleLikeFields"][] = "RHOT";
$tdatadt5[".googleLikeFields"][] = "SHOT";
$tdatadt5[".googleLikeFields"][] = "CHOT";
$tdatadt5[".googleLikeFields"][] = "RDOT";
$tdatadt5[".googleLikeFields"][] = "RegND";
$tdatadt5[".googleLikeFields"][] = "RHND";
$tdatadt5[".googleLikeFields"][] = "SHND";
$tdatadt5[".googleLikeFields"][] = "CHND";
$tdatadt5[".googleLikeFields"][] = "RDND";
$tdatadt5[".googleLikeFields"][] = "Rlink";
$tdatadt5[".googleLikeFields"][] = "Division";
$tdatadt5[".googleLikeFields"][] = "Department";
$tdatadt5[".googleLikeFields"][] = "Employer";
$tdatadt5[".googleLikeFields"][] = "AfterBreakLogOut";
$tdatadt5[".googleLikeFields"][] = "AfterBreakLog";
$tdatadt5[".googleLikeFields"][] = "BreakLateMins";
$tdatadt5[".googleLikeFields"][] = "EarlyMins";


$tdatadt5[".advSearchFields"] = array();
$tdatadt5[".advSearchFields"][] = "ScID";
$tdatadt5[".advSearchFields"][] = "EmployeeID";
$tdatadt5[".advSearchFields"][] = "UserName";
$tdatadt5[".advSearchFields"][] = "Employer";
$tdatadt5[".advSearchFields"][] = "Division";
$tdatadt5[".advSearchFields"][] = "Department";
$tdatadt5[".advSearchFields"][] = "WageType";
$tdatadt5[".advSearchFields"][] = "SDate";
$tdatadt5[".advSearchFields"][] = "DayIs";
$tdatadt5[".advSearchFields"][] = "RestDay";
$tdatadt5[".advSearchFields"][] = "STimeIn";
$tdatadt5[".advSearchFields"][] = "STimeOut";
$tdatadt5[".advSearchFields"][] = "TimeIn";
$tdatadt5[".advSearchFields"][] = "TimeOut";
$tdatadt5[".advSearchFields"][] = "AfterBreakLogOut";
$tdatadt5[".advSearchFields"][] = "AfterBreakLog";
$tdatadt5[".advSearchFields"][] = "MisPunched";
$tdatadt5[".advSearchFields"][] = "RegWD";
$tdatadt5[".advSearchFields"][] = "DWork";
$tdatadt5[".advSearchFields"][] = "Absent";
$tdatadt5[".advSearchFields"][] = "EarlyMins";
$tdatadt5[".advSearchFields"][] = "LateMins";
$tdatadt5[".advSearchFields"][] = "UnderstimeMins";
$tdatadt5[".advSearchFields"][] = "BreakLateMins";
$tdatadt5[".advSearchFields"][] = "HolidayType";
$tdatadt5[".advSearchFields"][] = "TempOT";
$tdatadt5[".advSearchFields"][] = "ApprovedOT";
$tdatadt5[".advSearchFields"][] = "AOTMins";
$tdatadt5[".advSearchFields"][] = "NDMins";
$tdatadt5[".advSearchFields"][] = "ApprovedNightDiff";
$tdatadt5[".advSearchFields"][] = "ANDiff";
$tdatadt5[".advSearchFields"][] = "ApprovedRD";
$tdatadt5[".advSearchFields"][] = "RDMins";
$tdatadt5[".advSearchFields"][] = "RHolidayHrs";
$tdatadt5[".advSearchFields"][] = "SHolidayHrs";
$tdatadt5[".advSearchFields"][] = "CHolidayHrs";
$tdatadt5[".advSearchFields"][] = "VL";
$tdatadt5[".advSearchFields"][] = "SL";
$tdatadt5[".advSearchFields"][] = "EL";
$tdatadt5[".advSearchFields"][] = "PL";
$tdatadt5[".advSearchFields"][] = "TrO";
$tdatadt5[".advSearchFields"][] = "RegOT";
$tdatadt5[".advSearchFields"][] = "RHOT";
$tdatadt5[".advSearchFields"][] = "SHOT";
$tdatadt5[".advSearchFields"][] = "CHOT";
$tdatadt5[".advSearchFields"][] = "RDOT";
$tdatadt5[".advSearchFields"][] = "RegND";
$tdatadt5[".advSearchFields"][] = "RHND";
$tdatadt5[".advSearchFields"][] = "SHND";
$tdatadt5[".advSearchFields"][] = "CHND";
$tdatadt5[".advSearchFields"][] = "RDND";
$tdatadt5[".advSearchFields"][] = "Rlink";

$tdatadt5[".tableType"] = "list";

$tdatadt5[".printerPageOrientation"] = 0;
$tdatadt5[".nPrinterPageScale"] = 100;

$tdatadt5[".nPrinterSplitRecords"] = 40;

$tdatadt5[".nPrinterPDFSplitRecords"] = 40;



$tdatadt5[".geocodingEnabled"] = false;





$tdatadt5[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatadt5[".totalsFields"] = array();
$tdatadt5[".totalsFields"][] = array(
	"fName" => "MisPunched",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Checkbox');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "RegWD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "DWork",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "Absent",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "EarlyMins",
	"numRows" => 0,
	"totalsType" => "COUNT",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "LateMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "UnderstimeMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "BreakLateMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "TempOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "AOTMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "NDMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "ANDiff",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "RDMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "RHolidayHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "SHolidayHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "CHolidayHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "VL",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "SL",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "EL",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "PL",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "TrO",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "RegOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "RHOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "SHOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "CHOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "RDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "RegND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "RHND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "SHND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "CHND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "RDND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatadt5[".pageSize"] = 20;

$tdatadt5[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY dt5.UserName";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadt5[".strOrderBy"] = $tstrOrderBy;

$tdatadt5[".orderindexes"] = array();
	$tdatadt5[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "dt5.UserName");


$tdatadt5[".sqlHead"] = "SELECT dt5.ScID,  dt5.EmployeeID,  dt5.UserName,  dt5.WageType,  dt5.SDate,  dt5.DayIs,  dt5.RestDay,  dt5.STimeIn,  dt5.STimeOut,  dt5.TimeIn,  dt5.TimeOut,  dt5.MisPunched,  dt5.RegWD,  dt5.DWork,  dt5.Absent,  dt5.LateMins,  dt5.UnderstimeMins,  dt5.HolidayType,  dt5.TempOT,  dt5.ApprovedOT,  dt5.AOTMins,  dt5.NDMins,  dt5.ApprovedNightDiff,  dt5.ANDiff,  dt5.ApprovedRD,  dt5.RDMins,  dt5.VL,  dt5.SL,  dt5.EL,  dt5.PL,  dt5.TrO,  dt5.RHolidayHrs,  dt5.SHolidayHrs,  dt5.CHolidayHrs,  dt5.RegOT,  dt5.RHOT,  dt5.SHOT,  dt5.CHOT,  dt5.RDOT,  dt5.RegND,  dt5.RHND,  dt5.SHND,  dt5.CHND,  dt5.RDND,  dt5.Rlink,  demo_user.Division,  demo_user.Department,  demo_user.Employer,  dt5.AfterBreakLogOut,  dt5.AfterBreakLog,  dt5.BreakLateMins,  dt5.EarlyMins";
$tdatadt5[".sqlFrom"] = "FROM dt5  INNER JOIN demo_user ON dt5.EmployeeID = demo_user.EmployeeID";
$tdatadt5[".sqlWhereExpr"] = "";
$tdatadt5[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadt5[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadt5[".arrGroupsPerPage"] = $arrGPP;

$tdatadt5[".highlightSearchResults"] = true;

$tableKeysdt5 = array();
$tableKeysdt5[] = "ScID";
$tdatadt5[".Keys"] = $tableKeysdt5;

$tdatadt5[".listFields"] = array();
$tdatadt5[".listFields"][] = "ScID";
$tdatadt5[".listFields"][] = "EmployeeID";
$tdatadt5[".listFields"][] = "UserName";
$tdatadt5[".listFields"][] = "Employer";
$tdatadt5[".listFields"][] = "Division";
$tdatadt5[".listFields"][] = "Department";
$tdatadt5[".listFields"][] = "WageType";
$tdatadt5[".listFields"][] = "SDate";
$tdatadt5[".listFields"][] = "DayIs";
$tdatadt5[".listFields"][] = "RestDay";
$tdatadt5[".listFields"][] = "STimeIn";
$tdatadt5[".listFields"][] = "STimeOut";
$tdatadt5[".listFields"][] = "TimeIn";
$tdatadt5[".listFields"][] = "TimeOut";
$tdatadt5[".listFields"][] = "AfterBreakLogOut";
$tdatadt5[".listFields"][] = "AfterBreakLog";
$tdatadt5[".listFields"][] = "MisPunched";
$tdatadt5[".listFields"][] = "RegWD";
$tdatadt5[".listFields"][] = "DWork";
$tdatadt5[".listFields"][] = "Absent";
$tdatadt5[".listFields"][] = "EarlyMins";
$tdatadt5[".listFields"][] = "LateMins";
$tdatadt5[".listFields"][] = "UnderstimeMins";
$tdatadt5[".listFields"][] = "BreakLateMins";
$tdatadt5[".listFields"][] = "HolidayType";
$tdatadt5[".listFields"][] = "TempOT";
$tdatadt5[".listFields"][] = "ApprovedOT";
$tdatadt5[".listFields"][] = "AOTMins";
$tdatadt5[".listFields"][] = "NDMins";
$tdatadt5[".listFields"][] = "ApprovedNightDiff";
$tdatadt5[".listFields"][] = "ANDiff";
$tdatadt5[".listFields"][] = "ApprovedRD";
$tdatadt5[".listFields"][] = "RDMins";
$tdatadt5[".listFields"][] = "RHolidayHrs";
$tdatadt5[".listFields"][] = "SHolidayHrs";
$tdatadt5[".listFields"][] = "CHolidayHrs";
$tdatadt5[".listFields"][] = "VL";
$tdatadt5[".listFields"][] = "SL";
$tdatadt5[".listFields"][] = "EL";
$tdatadt5[".listFields"][] = "PL";
$tdatadt5[".listFields"][] = "TrO";
$tdatadt5[".listFields"][] = "RegOT";
$tdatadt5[".listFields"][] = "RHOT";
$tdatadt5[".listFields"][] = "SHOT";
$tdatadt5[".listFields"][] = "CHOT";
$tdatadt5[".listFields"][] = "RDOT";
$tdatadt5[".listFields"][] = "RegND";
$tdatadt5[".listFields"][] = "RHND";
$tdatadt5[".listFields"][] = "SHND";
$tdatadt5[".listFields"][] = "CHND";
$tdatadt5[".listFields"][] = "RDND";
$tdatadt5[".listFields"][] = "Rlink";

$tdatadt5[".hideMobileList"] = array();


$tdatadt5[".viewFields"] = array();
$tdatadt5[".viewFields"][] = "ScID";
$tdatadt5[".viewFields"][] = "EmployeeID";
$tdatadt5[".viewFields"][] = "UserName";
$tdatadt5[".viewFields"][] = "Employer";
$tdatadt5[".viewFields"][] = "Division";
$tdatadt5[".viewFields"][] = "Department";
$tdatadt5[".viewFields"][] = "WageType";
$tdatadt5[".viewFields"][] = "SDate";
$tdatadt5[".viewFields"][] = "DayIs";
$tdatadt5[".viewFields"][] = "RestDay";
$tdatadt5[".viewFields"][] = "STimeIn";
$tdatadt5[".viewFields"][] = "STimeOut";
$tdatadt5[".viewFields"][] = "TimeIn";
$tdatadt5[".viewFields"][] = "TimeOut";
$tdatadt5[".viewFields"][] = "AfterBreakLogOut";
$tdatadt5[".viewFields"][] = "AfterBreakLog";
$tdatadt5[".viewFields"][] = "MisPunched";
$tdatadt5[".viewFields"][] = "RegWD";
$tdatadt5[".viewFields"][] = "DWork";
$tdatadt5[".viewFields"][] = "Absent";
$tdatadt5[".viewFields"][] = "EarlyMins";
$tdatadt5[".viewFields"][] = "LateMins";
$tdatadt5[".viewFields"][] = "UnderstimeMins";
$tdatadt5[".viewFields"][] = "BreakLateMins";
$tdatadt5[".viewFields"][] = "HolidayType";
$tdatadt5[".viewFields"][] = "TempOT";
$tdatadt5[".viewFields"][] = "ApprovedOT";
$tdatadt5[".viewFields"][] = "AOTMins";
$tdatadt5[".viewFields"][] = "NDMins";
$tdatadt5[".viewFields"][] = "ApprovedNightDiff";
$tdatadt5[".viewFields"][] = "ANDiff";
$tdatadt5[".viewFields"][] = "ApprovedRD";
$tdatadt5[".viewFields"][] = "RDMins";
$tdatadt5[".viewFields"][] = "RHolidayHrs";
$tdatadt5[".viewFields"][] = "SHolidayHrs";
$tdatadt5[".viewFields"][] = "CHolidayHrs";
$tdatadt5[".viewFields"][] = "VL";
$tdatadt5[".viewFields"][] = "SL";
$tdatadt5[".viewFields"][] = "EL";
$tdatadt5[".viewFields"][] = "PL";
$tdatadt5[".viewFields"][] = "TrO";
$tdatadt5[".viewFields"][] = "RegOT";
$tdatadt5[".viewFields"][] = "RHOT";
$tdatadt5[".viewFields"][] = "SHOT";
$tdatadt5[".viewFields"][] = "CHOT";
$tdatadt5[".viewFields"][] = "RDOT";
$tdatadt5[".viewFields"][] = "RegND";
$tdatadt5[".viewFields"][] = "RHND";
$tdatadt5[".viewFields"][] = "SHND";
$tdatadt5[".viewFields"][] = "CHND";
$tdatadt5[".viewFields"][] = "RDND";
$tdatadt5[".viewFields"][] = "Rlink";

$tdatadt5[".addFields"] = array();

$tdatadt5[".masterListFields"] = array();
$tdatadt5[".masterListFields"][] = "ScID";
$tdatadt5[".masterListFields"][] = "EmployeeID";
$tdatadt5[".masterListFields"][] = "UserName";
$tdatadt5[".masterListFields"][] = "Employer";
$tdatadt5[".masterListFields"][] = "Division";
$tdatadt5[".masterListFields"][] = "Department";
$tdatadt5[".masterListFields"][] = "WageType";
$tdatadt5[".masterListFields"][] = "SDate";
$tdatadt5[".masterListFields"][] = "DayIs";
$tdatadt5[".masterListFields"][] = "RestDay";
$tdatadt5[".masterListFields"][] = "STimeIn";
$tdatadt5[".masterListFields"][] = "STimeOut";
$tdatadt5[".masterListFields"][] = "TimeIn";
$tdatadt5[".masterListFields"][] = "TimeOut";
$tdatadt5[".masterListFields"][] = "AfterBreakLogOut";
$tdatadt5[".masterListFields"][] = "AfterBreakLog";
$tdatadt5[".masterListFields"][] = "MisPunched";
$tdatadt5[".masterListFields"][] = "RegWD";
$tdatadt5[".masterListFields"][] = "DWork";
$tdatadt5[".masterListFields"][] = "Absent";
$tdatadt5[".masterListFields"][] = "EarlyMins";
$tdatadt5[".masterListFields"][] = "LateMins";
$tdatadt5[".masterListFields"][] = "UnderstimeMins";
$tdatadt5[".masterListFields"][] = "BreakLateMins";
$tdatadt5[".masterListFields"][] = "HolidayType";
$tdatadt5[".masterListFields"][] = "TempOT";
$tdatadt5[".masterListFields"][] = "ApprovedOT";
$tdatadt5[".masterListFields"][] = "AOTMins";
$tdatadt5[".masterListFields"][] = "NDMins";
$tdatadt5[".masterListFields"][] = "ApprovedNightDiff";
$tdatadt5[".masterListFields"][] = "ANDiff";
$tdatadt5[".masterListFields"][] = "ApprovedRD";
$tdatadt5[".masterListFields"][] = "RDMins";
$tdatadt5[".masterListFields"][] = "RHolidayHrs";
$tdatadt5[".masterListFields"][] = "SHolidayHrs";
$tdatadt5[".masterListFields"][] = "CHolidayHrs";
$tdatadt5[".masterListFields"][] = "VL";
$tdatadt5[".masterListFields"][] = "SL";
$tdatadt5[".masterListFields"][] = "EL";
$tdatadt5[".masterListFields"][] = "PL";
$tdatadt5[".masterListFields"][] = "TrO";
$tdatadt5[".masterListFields"][] = "RegOT";
$tdatadt5[".masterListFields"][] = "RHOT";
$tdatadt5[".masterListFields"][] = "SHOT";
$tdatadt5[".masterListFields"][] = "CHOT";
$tdatadt5[".masterListFields"][] = "RDOT";
$tdatadt5[".masterListFields"][] = "RegND";
$tdatadt5[".masterListFields"][] = "RHND";
$tdatadt5[".masterListFields"][] = "SHND";
$tdatadt5[".masterListFields"][] = "CHND";
$tdatadt5[".masterListFields"][] = "RDND";
$tdatadt5[".masterListFields"][] = "Rlink";

$tdatadt5[".inlineAddFields"] = array();

$tdatadt5[".editFields"] = array();

$tdatadt5[".inlineEditFields"] = array();

$tdatadt5[".updateSelectedFields"] = array();


$tdatadt5[".exportFields"] = array();
$tdatadt5[".exportFields"][] = "ScID";
$tdatadt5[".exportFields"][] = "EmployeeID";
$tdatadt5[".exportFields"][] = "UserName";
$tdatadt5[".exportFields"][] = "Employer";
$tdatadt5[".exportFields"][] = "Division";
$tdatadt5[".exportFields"][] = "Department";
$tdatadt5[".exportFields"][] = "WageType";
$tdatadt5[".exportFields"][] = "SDate";
$tdatadt5[".exportFields"][] = "DayIs";
$tdatadt5[".exportFields"][] = "RestDay";
$tdatadt5[".exportFields"][] = "STimeIn";
$tdatadt5[".exportFields"][] = "STimeOut";
$tdatadt5[".exportFields"][] = "TimeIn";
$tdatadt5[".exportFields"][] = "TimeOut";
$tdatadt5[".exportFields"][] = "AfterBreakLogOut";
$tdatadt5[".exportFields"][] = "AfterBreakLog";
$tdatadt5[".exportFields"][] = "MisPunched";
$tdatadt5[".exportFields"][] = "RegWD";
$tdatadt5[".exportFields"][] = "DWork";
$tdatadt5[".exportFields"][] = "Absent";
$tdatadt5[".exportFields"][] = "EarlyMins";
$tdatadt5[".exportFields"][] = "LateMins";
$tdatadt5[".exportFields"][] = "UnderstimeMins";
$tdatadt5[".exportFields"][] = "BreakLateMins";
$tdatadt5[".exportFields"][] = "HolidayType";
$tdatadt5[".exportFields"][] = "TempOT";
$tdatadt5[".exportFields"][] = "ApprovedOT";
$tdatadt5[".exportFields"][] = "AOTMins";
$tdatadt5[".exportFields"][] = "NDMins";
$tdatadt5[".exportFields"][] = "ApprovedNightDiff";
$tdatadt5[".exportFields"][] = "ANDiff";
$tdatadt5[".exportFields"][] = "ApprovedRD";
$tdatadt5[".exportFields"][] = "RDMins";
$tdatadt5[".exportFields"][] = "RHolidayHrs";
$tdatadt5[".exportFields"][] = "SHolidayHrs";
$tdatadt5[".exportFields"][] = "CHolidayHrs";
$tdatadt5[".exportFields"][] = "VL";
$tdatadt5[".exportFields"][] = "SL";
$tdatadt5[".exportFields"][] = "EL";
$tdatadt5[".exportFields"][] = "PL";
$tdatadt5[".exportFields"][] = "TrO";
$tdatadt5[".exportFields"][] = "RegOT";
$tdatadt5[".exportFields"][] = "RHOT";
$tdatadt5[".exportFields"][] = "SHOT";
$tdatadt5[".exportFields"][] = "CHOT";
$tdatadt5[".exportFields"][] = "RDOT";
$tdatadt5[".exportFields"][] = "RegND";
$tdatadt5[".exportFields"][] = "RHND";
$tdatadt5[".exportFields"][] = "SHND";
$tdatadt5[".exportFields"][] = "CHND";
$tdatadt5[".exportFields"][] = "RDND";
$tdatadt5[".exportFields"][] = "Rlink";

$tdatadt5[".importFields"] = array();

$tdatadt5[".printFields"] = array();
$tdatadt5[".printFields"][] = "ScID";
$tdatadt5[".printFields"][] = "EmployeeID";
$tdatadt5[".printFields"][] = "UserName";
$tdatadt5[".printFields"][] = "Employer";
$tdatadt5[".printFields"][] = "Division";
$tdatadt5[".printFields"][] = "Department";
$tdatadt5[".printFields"][] = "WageType";
$tdatadt5[".printFields"][] = "SDate";
$tdatadt5[".printFields"][] = "DayIs";
$tdatadt5[".printFields"][] = "RestDay";
$tdatadt5[".printFields"][] = "STimeIn";
$tdatadt5[".printFields"][] = "STimeOut";
$tdatadt5[".printFields"][] = "TimeIn";
$tdatadt5[".printFields"][] = "TimeOut";
$tdatadt5[".printFields"][] = "AfterBreakLogOut";
$tdatadt5[".printFields"][] = "AfterBreakLog";
$tdatadt5[".printFields"][] = "MisPunched";
$tdatadt5[".printFields"][] = "RegWD";
$tdatadt5[".printFields"][] = "DWork";
$tdatadt5[".printFields"][] = "Absent";
$tdatadt5[".printFields"][] = "EarlyMins";
$tdatadt5[".printFields"][] = "LateMins";
$tdatadt5[".printFields"][] = "UnderstimeMins";
$tdatadt5[".printFields"][] = "BreakLateMins";
$tdatadt5[".printFields"][] = "HolidayType";
$tdatadt5[".printFields"][] = "TempOT";
$tdatadt5[".printFields"][] = "ApprovedOT";
$tdatadt5[".printFields"][] = "AOTMins";
$tdatadt5[".printFields"][] = "NDMins";
$tdatadt5[".printFields"][] = "ApprovedNightDiff";
$tdatadt5[".printFields"][] = "ANDiff";
$tdatadt5[".printFields"][] = "ApprovedRD";
$tdatadt5[".printFields"][] = "RDMins";
$tdatadt5[".printFields"][] = "RHolidayHrs";
$tdatadt5[".printFields"][] = "SHolidayHrs";
$tdatadt5[".printFields"][] = "CHolidayHrs";
$tdatadt5[".printFields"][] = "VL";
$tdatadt5[".printFields"][] = "SL";
$tdatadt5[".printFields"][] = "EL";
$tdatadt5[".printFields"][] = "PL";
$tdatadt5[".printFields"][] = "TrO";
$tdatadt5[".printFields"][] = "RegOT";
$tdatadt5[".printFields"][] = "RHOT";
$tdatadt5[".printFields"][] = "SHOT";
$tdatadt5[".printFields"][] = "CHOT";
$tdatadt5[".printFields"][] = "RDOT";
$tdatadt5[".printFields"][] = "RegND";
$tdatadt5[".printFields"][] = "RHND";
$tdatadt5[".printFields"][] = "SHND";
$tdatadt5[".printFields"][] = "CHND";
$tdatadt5[".printFields"][] = "RDND";
$tdatadt5[".printFields"][] = "Rlink";


//	ScID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ScID";
	$fdata["GoodName"] = "ScID";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","ScID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ScID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.ScID";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["ScID"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","EmployeeID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EmployeeID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.EmployeeID";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["EmployeeID"] = $fdata;
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","UserName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "UserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.UserName";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["UserName"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","WageType");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "WageType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.WageType";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["WageType"] = $fdata;
//	SDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SDate";
	$fdata["GoodName"] = "SDate";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","SDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.SDate";

	
	
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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatadt5["SDate"] = $fdata;
//	DayIs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DayIs";
	$fdata["GoodName"] = "DayIs";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","DayIs");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DayIs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.DayIs";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["DayIs"] = $fdata;
//	RestDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "RestDay";
	$fdata["GoodName"] = "RestDay";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","RestDay");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RestDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.RestDay";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["RestDay"] = $fdata;
//	STimeIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "STimeIn";
	$fdata["GoodName"] = "STimeIn";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","STimeIn");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "STimeIn";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.STimeIn";

	
	
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
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatadt5["STimeIn"] = $fdata;
//	STimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "STimeOut";
	$fdata["GoodName"] = "STimeOut";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","STimeOut");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "STimeOut";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.STimeOut";

	
	
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
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatadt5["STimeOut"] = $fdata;
//	TimeIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "TimeIn";
	$fdata["GoodName"] = "TimeIn";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","TimeIn");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TimeIn";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.TimeIn";

	
	
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

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatadt5["TimeIn"] = $fdata;
//	TimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "TimeOut";
	$fdata["GoodName"] = "TimeOut";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","TimeOut");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TimeOut";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.TimeOut";

	
	
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

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatadt5["TimeOut"] = $fdata;
//	MisPunched
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "MisPunched";
	$fdata["GoodName"] = "MisPunched";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","MisPunched");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MisPunched";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.MisPunched";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["MisPunched"] = $fdata;
//	RegWD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "RegWD";
	$fdata["GoodName"] = "RegWD";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","RegWD");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RegWD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.RegWD";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["RegWD"] = $fdata;
//	DWork
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DWork";
	$fdata["GoodName"] = "DWork";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","DWork");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DWork";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.DWork";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["DWork"] = $fdata;
//	Absent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Absent";
	$fdata["GoodName"] = "Absent";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","Absent");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Absent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.Absent";

	
	
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
			$edata["EditParams"].= " maxlength=23";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["Absent"] = $fdata;
//	LateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "LateMins";
	$fdata["GoodName"] = "LateMins";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","LateMins");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LateMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.LateMins";

	
	
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
			$edata["EditParams"].= " maxlength=26";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["LateMins"] = $fdata;
//	UnderstimeMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "UnderstimeMins";
	$fdata["GoodName"] = "UnderstimeMins";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","UnderstimeMins");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "UnderstimeMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.UnderstimeMins";

	
	
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
			$edata["EditParams"].= " maxlength=105";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["UnderstimeMins"] = $fdata;
//	HolidayType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "HolidayType";
	$fdata["GoodName"] = "HolidayType";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","HolidayType");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "HolidayType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.HolidayType";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["HolidayType"] = $fdata;
//	TempOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "TempOT";
	$fdata["GoodName"] = "TempOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","TempOT");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TempOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.TempOT";

	
	
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
			$edata["EditParams"].= " maxlength=26";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["TempOT"] = $fdata;
//	ApprovedOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "ApprovedOT";
	$fdata["GoodName"] = "ApprovedOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","ApprovedOT");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ApprovedOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.ApprovedOT";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["ApprovedOT"] = $fdata;
//	AOTMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "AOTMins";
	$fdata["GoodName"] = "AOTMins";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","AOTMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AOTMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.AOTMins";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["AOTMins"] = $fdata;
//	NDMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "NDMins";
	$fdata["GoodName"] = "NDMins";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","NDMins");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NDMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.NDMins";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["NDMins"] = $fdata;
//	ApprovedNightDiff
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "ApprovedNightDiff";
	$fdata["GoodName"] = "ApprovedNightDiff";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","ApprovedNightDiff");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ApprovedNightDiff";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.ApprovedNightDiff";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["ApprovedNightDiff"] = $fdata;
//	ANDiff
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "ANDiff";
	$fdata["GoodName"] = "ANDiff";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","ANDiff");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ANDiff";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.ANDiff";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["ANDiff"] = $fdata;
//	ApprovedRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "ApprovedRD";
	$fdata["GoodName"] = "ApprovedRD";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","ApprovedRD");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ApprovedRD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.ApprovedRD";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["ApprovedRD"] = $fdata;
//	RDMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "RDMins";
	$fdata["GoodName"] = "RDMins";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","RDMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RDMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.RDMins";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["RDMins"] = $fdata;
//	VL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "VL";
	$fdata["GoodName"] = "VL";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","VL");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "VL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.VL";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["VL"] = $fdata;
//	SL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "SL";
	$fdata["GoodName"] = "SL";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","SL");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.SL";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["SL"] = $fdata;
//	EL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "EL";
	$fdata["GoodName"] = "EL";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","EL");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.EL";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["EL"] = $fdata;
//	PL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "PL";
	$fdata["GoodName"] = "PL";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","PL");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.PL";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["PL"] = $fdata;
//	TrO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "TrO";
	$fdata["GoodName"] = "TrO";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","TrO");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TrO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.TrO";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["TrO"] = $fdata;
//	RHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "RHolidayHrs";
	$fdata["GoodName"] = "RHolidayHrs";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","RHolidayHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHolidayHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.RHolidayHrs";

	
	
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




	$tdatadt5["RHolidayHrs"] = $fdata;
//	SHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "SHolidayHrs";
	$fdata["GoodName"] = "SHolidayHrs";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","SHolidayHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHolidayHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.SHolidayHrs";

	
	
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




	$tdatadt5["SHolidayHrs"] = $fdata;
//	CHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "CHolidayHrs";
	$fdata["GoodName"] = "CHolidayHrs";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","CHolidayHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CHolidayHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.CHolidayHrs";

	
	
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




	$tdatadt5["CHolidayHrs"] = $fdata;
//	RegOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "RegOT";
	$fdata["GoodName"] = "RegOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","RegOT");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RegOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.RegOT";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["RegOT"] = $fdata;
//	RHOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "RHOT";
	$fdata["GoodName"] = "RHOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","RHOT");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.RHOT";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["RHOT"] = $fdata;
//	SHOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "SHOT";
	$fdata["GoodName"] = "SHOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","SHOT");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.SHOT";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["SHOT"] = $fdata;
//	CHOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "CHOT";
	$fdata["GoodName"] = "CHOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","CHOT");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CHOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.CHOT";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["CHOT"] = $fdata;
//	RDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "RDOT";
	$fdata["GoodName"] = "RDOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","RDOT");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.RDOT";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["RDOT"] = $fdata;
//	RegND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "RegND";
	$fdata["GoodName"] = "RegND";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","RegND");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RegND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.RegND";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["RegND"] = $fdata;
//	RHND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "RHND";
	$fdata["GoodName"] = "RHND";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","RHND");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.RHND";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["RHND"] = $fdata;
//	SHND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "SHND";
	$fdata["GoodName"] = "SHND";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","SHND");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.SHND";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["SHND"] = $fdata;
//	CHND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "CHND";
	$fdata["GoodName"] = "CHND";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","CHND");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CHND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.CHND";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["CHND"] = $fdata;
//	RDND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "RDND";
	$fdata["GoodName"] = "RDND";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","RDND");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RDND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.RDND";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["RDND"] = $fdata;
//	Rlink
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "Rlink";
	$fdata["GoodName"] = "Rlink";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","Rlink");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Rlink";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.Rlink";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["Rlink"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("dt5","Division");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Division";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "demo_user.Division";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["Division"] = $fdata;
//	Department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "Department";
	$fdata["GoodName"] = "Department";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("dt5","Department");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Department";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "demo_user.Department";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadt5["Department"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("dt5","Employer");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Employer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "demo_user.Employer";

	
	
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
	$edata["LookupTable"] = "employername";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EnID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "EmployerName";
	
	

	
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




	$tdatadt5["Employer"] = $fdata;
//	AfterBreakLogOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "AfterBreakLogOut";
	$fdata["GoodName"] = "AfterBreakLogOut";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","AfterBreakLogOut");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AfterBreakLogOut";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.AfterBreakLogOut";

	
	
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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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




	$tdatadt5["AfterBreakLogOut"] = $fdata;
//	AfterBreakLog
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "AfterBreakLog";
	$fdata["GoodName"] = "AfterBreakLog";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","AfterBreakLog");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AfterBreakLog";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.AfterBreakLog";

	
	
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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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




	$tdatadt5["AfterBreakLog"] = $fdata;
//	BreakLateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "BreakLateMins";
	$fdata["GoodName"] = "BreakLateMins";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","BreakLateMins");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BreakLateMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.BreakLateMins";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
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




	$tdatadt5["BreakLateMins"] = $fdata;
//	EarlyMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "EarlyMins";
	$fdata["GoodName"] = "EarlyMins";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","EarlyMins");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EarlyMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.EarlyMins";

	
	
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
			$edata["EditParams"].= " maxlength=21";

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




	$tdatadt5["EarlyMins"] = $fdata;


$tables_data["dt5"]=&$tdatadt5;
$field_labels["dt5"] = &$fieldLabelsdt5;
$fieldToolTips["dt5"] = &$fieldToolTipsdt5;
$placeHolders["dt5"] = &$placeHoldersdt5;
$page_titles["dt5"] = &$pageTitlesdt5;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dt5"] = array();
//	ileave
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ileave";
		$detailsParam["dOriginalTable"] = "ileave";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ileave";
	$detailsParam["dCaptionTable"] = GetTableCaption("ileave");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = true;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["dt5"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dt5"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dt5"][$dIndex]["masterKeys"][]="SDate";

	$detailsTablesData["dt5"][$dIndex]["masterKeys"][]="EmployeeID";

				$detailsTablesData["dt5"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dt5"][$dIndex]["detailKeys"][]="LDate";

		
	$detailsTablesData["dt5"][$dIndex]["detailKeys"][]="EmployeeID";
//	indschedule1
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="indschedule1";
		$detailsParam["dOriginalTable"] = "indschedule";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "indschedule1";
	$detailsParam["dCaptionTable"] = GetTableCaption("indschedule1");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["dt5"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dt5"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dt5"][$dIndex]["masterKeys"][]="ScID";

				$detailsTablesData["dt5"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dt5"][$dIndex]["detailKeys"][]="ScID";
//	indbreaks
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="indbreaks";
		$detailsParam["dOriginalTable"] = "indbreaks";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "indbreaks";
	$detailsParam["dCaptionTable"] = GetTableCaption("indbreaks");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = true;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["dt5"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dt5"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dt5"][$dIndex]["masterKeys"][]="ScID";

				$detailsTablesData["dt5"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dt5"][$dIndex]["detailKeys"][]="ScID";
//	dtrtable
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dtrtable";
		$detailsParam["dOriginalTable"] = "dtrtable";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "dtrtable";
	$detailsParam["dCaptionTable"] = GetTableCaption("dtrtable");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = true;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["dt5"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dt5"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dt5"][$dIndex]["masterKeys"][]="ScID";

				$detailsTablesData["dt5"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dt5"][$dIndex]["detailKeys"][]="ScID";

// tables which are master tables for current table (detail)
$masterTablesData["dt5"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_dt5()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dt5.ScID,  dt5.EmployeeID,  dt5.UserName,  dt5.WageType,  dt5.SDate,  dt5.DayIs,  dt5.RestDay,  dt5.STimeIn,  dt5.STimeOut,  dt5.TimeIn,  dt5.TimeOut,  dt5.MisPunched,  dt5.RegWD,  dt5.DWork,  dt5.Absent,  dt5.LateMins,  dt5.UnderstimeMins,  dt5.HolidayType,  dt5.TempOT,  dt5.ApprovedOT,  dt5.AOTMins,  dt5.NDMins,  dt5.ApprovedNightDiff,  dt5.ANDiff,  dt5.ApprovedRD,  dt5.RDMins,  dt5.VL,  dt5.SL,  dt5.EL,  dt5.PL,  dt5.TrO,  dt5.RHolidayHrs,  dt5.SHolidayHrs,  dt5.CHolidayHrs,  dt5.RegOT,  dt5.RHOT,  dt5.SHOT,  dt5.CHOT,  dt5.RDOT,  dt5.RegND,  dt5.RHND,  dt5.SHND,  dt5.CHND,  dt5.RDND,  dt5.Rlink,  demo_user.Division,  demo_user.Department,  demo_user.Employer,  dt5.AfterBreakLogOut,  dt5.AfterBreakLog,  dt5.BreakLateMins,  dt5.EarlyMins";
$proto0["m_strFrom"] = "FROM dt5  INNER JOIN demo_user ON dt5.EmployeeID = demo_user.EmployeeID";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY dt5.UserName";
	
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
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto6["m_sql"] = "dt5.ScID";
$proto6["m_srcTableName"] = "dt5";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto8["m_sql"] = "dt5.EmployeeID";
$proto8["m_srcTableName"] = "dt5";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto10["m_sql"] = "dt5.UserName";
$proto10["m_srcTableName"] = "dt5";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "WageType",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto12["m_sql"] = "dt5.WageType";
$proto12["m_srcTableName"] = "dt5";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "SDate",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto14["m_sql"] = "dt5.SDate";
$proto14["m_srcTableName"] = "dt5";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DayIs",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto16["m_sql"] = "dt5.DayIs";
$proto16["m_srcTableName"] = "dt5";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "RestDay",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto18["m_sql"] = "dt5.RestDay";
$proto18["m_srcTableName"] = "dt5";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "STimeIn",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto20["m_sql"] = "dt5.STimeIn";
$proto20["m_srcTableName"] = "dt5";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "STimeOut",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto22["m_sql"] = "dt5.STimeOut";
$proto22["m_srcTableName"] = "dt5";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeIn",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto24["m_sql"] = "dt5.TimeIn";
$proto24["m_srcTableName"] = "dt5";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeOut",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto26["m_sql"] = "dt5.TimeOut";
$proto26["m_srcTableName"] = "dt5";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "MisPunched",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto28["m_sql"] = "dt5.MisPunched";
$proto28["m_srcTableName"] = "dt5";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "RegWD",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto30["m_sql"] = "dt5.RegWD";
$proto30["m_srcTableName"] = "dt5";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DWork",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto32["m_sql"] = "dt5.DWork";
$proto32["m_srcTableName"] = "dt5";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Absent",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto34["m_sql"] = "dt5.Absent";
$proto34["m_srcTableName"] = "dt5";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "LateMins",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto36["m_sql"] = "dt5.LateMins";
$proto36["m_srcTableName"] = "dt5";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "UnderstimeMins",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto38["m_sql"] = "dt5.UnderstimeMins";
$proto38["m_srcTableName"] = "dt5";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "HolidayType",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto40["m_sql"] = "dt5.HolidayType";
$proto40["m_srcTableName"] = "dt5";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "TempOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto42["m_sql"] = "dt5.TempOT";
$proto42["m_srcTableName"] = "dt5";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto44["m_sql"] = "dt5.ApprovedOT";
$proto44["m_srcTableName"] = "dt5";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "AOTMins",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto46["m_sql"] = "dt5.AOTMins";
$proto46["m_srcTableName"] = "dt5";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "NDMins",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto48["m_sql"] = "dt5.NDMins";
$proto48["m_srcTableName"] = "dt5";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedNightDiff",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto50["m_sql"] = "dt5.ApprovedNightDiff";
$proto50["m_srcTableName"] = "dt5";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "ANDiff",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto52["m_sql"] = "dt5.ANDiff";
$proto52["m_srcTableName"] = "dt5";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedRD",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto54["m_sql"] = "dt5.ApprovedRD";
$proto54["m_srcTableName"] = "dt5";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "RDMins",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto56["m_sql"] = "dt5.RDMins";
$proto56["m_srcTableName"] = "dt5";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "VL",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto58["m_sql"] = "dt5.VL";
$proto58["m_srcTableName"] = "dt5";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "SL",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto60["m_sql"] = "dt5.SL";
$proto60["m_srcTableName"] = "dt5";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "EL",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto62["m_sql"] = "dt5.EL";
$proto62["m_srcTableName"] = "dt5";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "PL",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto64["m_sql"] = "dt5.PL";
$proto64["m_srcTableName"] = "dt5";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "TrO",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto66["m_sql"] = "dt5.TrO";
$proto66["m_srcTableName"] = "dt5";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "RHolidayHrs",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto68["m_sql"] = "dt5.RHolidayHrs";
$proto68["m_srcTableName"] = "dt5";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "SHolidayHrs",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto70["m_sql"] = "dt5.SHolidayHrs";
$proto70["m_srcTableName"] = "dt5";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "CHolidayHrs",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto72["m_sql"] = "dt5.CHolidayHrs";
$proto72["m_srcTableName"] = "dt5";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "RegOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto74["m_sql"] = "dt5.RegOT";
$proto74["m_srcTableName"] = "dt5";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "RHOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto76["m_sql"] = "dt5.RHOT";
$proto76["m_srcTableName"] = "dt5";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto78["m_sql"] = "dt5.SHOT";
$proto78["m_srcTableName"] = "dt5";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "CHOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto80["m_sql"] = "dt5.CHOT";
$proto80["m_srcTableName"] = "dt5";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "RDOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto82["m_sql"] = "dt5.RDOT";
$proto82["m_srcTableName"] = "dt5";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "RegND",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto84["m_sql"] = "dt5.RegND";
$proto84["m_srcTableName"] = "dt5";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "RHND",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto86["m_sql"] = "dt5.RHND";
$proto86["m_srcTableName"] = "dt5";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "SHND",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto88["m_sql"] = "dt5.SHND";
$proto88["m_srcTableName"] = "dt5";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "CHND",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto90["m_sql"] = "dt5.CHND";
$proto90["m_srcTableName"] = "dt5";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "RDND",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto92["m_sql"] = "dt5.RDND";
$proto92["m_srcTableName"] = "dt5";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "Rlink",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto94["m_sql"] = "dt5.Rlink";
$proto94["m_srcTableName"] = "dt5";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "dt5"
));

$proto96["m_sql"] = "demo_user.Division";
$proto96["m_srcTableName"] = "dt5";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "dt5"
));

$proto98["m_sql"] = "demo_user.Department";
$proto98["m_srcTableName"] = "dt5";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "dt5"
));

$proto100["m_sql"] = "demo_user.Employer";
$proto100["m_srcTableName"] = "dt5";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "AfterBreakLogOut",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto102["m_sql"] = "dt5.AfterBreakLogOut";
$proto102["m_srcTableName"] = "dt5";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "AfterBreakLog",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto104["m_sql"] = "dt5.AfterBreakLog";
$proto104["m_srcTableName"] = "dt5";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "BreakLateMins",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto106["m_sql"] = "dt5.BreakLateMins";
$proto106["m_srcTableName"] = "dt5";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "EarlyMins",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto108["m_sql"] = "dt5.EarlyMins";
$proto108["m_srcTableName"] = "dt5";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto110=array();
$proto110["m_link"] = "SQLL_MAIN";
			$proto111=array();
$proto111["m_strName"] = "dt5";
$proto111["m_srcTableName"] = "dt5";
$proto111["m_columns"] = array();
$proto111["m_columns"][] = "ScID";
$proto111["m_columns"][] = "EmployeeID";
$proto111["m_columns"][] = "UserName";
$proto111["m_columns"][] = "WageType";
$proto111["m_columns"][] = "SDate";
$proto111["m_columns"][] = "DayIs";
$proto111["m_columns"][] = "RestDay";
$proto111["m_columns"][] = "STimeIn";
$proto111["m_columns"][] = "STimeOut";
$proto111["m_columns"][] = "TimeIn";
$proto111["m_columns"][] = "TimeOut";
$proto111["m_columns"][] = "MisPunched";
$proto111["m_columns"][] = "RegWD";
$proto111["m_columns"][] = "DWork";
$proto111["m_columns"][] = "Absent";
$proto111["m_columns"][] = "HolidayType";
$proto111["m_columns"][] = "TempOT";
$proto111["m_columns"][] = "ApprovedOT";
$proto111["m_columns"][] = "AOTMins";
$proto111["m_columns"][] = "NDMins";
$proto111["m_columns"][] = "ApprovedNightDiff";
$proto111["m_columns"][] = "ANDiff";
$proto111["m_columns"][] = "ApprovedRD";
$proto111["m_columns"][] = "RDMins";
$proto111["m_columns"][] = "VL";
$proto111["m_columns"][] = "SL";
$proto111["m_columns"][] = "EL";
$proto111["m_columns"][] = "PL";
$proto111["m_columns"][] = "TrO";
$proto111["m_columns"][] = "RegOT";
$proto111["m_columns"][] = "RHOT";
$proto111["m_columns"][] = "SHOT";
$proto111["m_columns"][] = "CHOT";
$proto111["m_columns"][] = "RDOT";
$proto111["m_columns"][] = "RegND";
$proto111["m_columns"][] = "RHND";
$proto111["m_columns"][] = "SHND";
$proto111["m_columns"][] = "CHND";
$proto111["m_columns"][] = "RDND";
$proto111["m_columns"][] = "MinsPerDay";
$proto111["m_columns"][] = "BreakMins";
$proto111["m_columns"][] = "Rlink";
$proto111["m_columns"][] = "FirstHalfMins";
$proto111["m_columns"][] = "SecondHalfMins";
$proto111["m_columns"][] = "AfterBreakLog";
$proto111["m_columns"][] = "AfterBreakLogOut";
$proto111["m_columns"][] = "NDMealAllowance";
$proto111["m_columns"][] = "Division";
$proto111["m_columns"][] = "Employer";
$proto111["m_columns"][] = "LateFixPenalty";
$proto111["m_columns"][] = "RHolidayHrs";
$proto111["m_columns"][] = "SHolidayHrs";
$proto111["m_columns"][] = "CHolidayHrs";
$proto111["m_columns"][] = "LateMins";
$proto111["m_columns"][] = "UnderstimeMins";
$proto111["m_columns"][] = "BreakLateMins";
$proto111["m_columns"][] = "EarlyMins";
$obj = new SQLTable($proto111);

$proto110["m_table"] = $obj;
$proto110["m_sql"] = "dt5";
$proto110["m_alias"] = "";
$proto110["m_srcTableName"] = "dt5";
$proto112=array();
$proto112["m_sql"] = "";
$proto112["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto112["m_column"]=$obj;
$proto112["m_contained"] = array();
$proto112["m_strCase"] = "";
$proto112["m_havingmode"] = false;
$proto112["m_inBrackets"] = false;
$proto112["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto112);

$proto110["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto110);

$proto0["m_fromlist"][]=$obj;
												$proto114=array();
$proto114["m_link"] = "SQLL_INNERJOIN";
			$proto115=array();
$proto115["m_strName"] = "demo_user";
$proto115["m_srcTableName"] = "dt5";
$proto115["m_columns"] = array();
$proto115["m_columns"][] = "user_id";
$proto115["m_columns"][] = "user_name";
$proto115["m_columns"][] = "Photo";
$proto115["m_columns"][] = "user_photo";
$proto115["m_columns"][] = "SSSNo";
$proto115["m_columns"][] = "TIN";
$proto115["m_columns"][] = "Mobile";
$proto115["m_columns"][] = "Address";
$proto115["m_columns"][] = "Email";
$proto115["m_columns"][] = "EmployeeType";
$proto115["m_columns"][] = "BasicMonthlyPay";
$proto115["m_columns"][] = "BasicDailyPay";
$proto115["m_columns"][] = "EmployeeID";
$proto115["m_columns"][] = "Division";
$proto115["m_columns"][] = "Status";
$proto115["m_columns"][] = "Department";
$proto115["m_columns"][] = "AllowableSickLeave";
$proto115["m_columns"][] = "AllowableVacationLeave";
$proto115["m_columns"][] = "AllowableEmergencyLeave";
$proto115["m_columns"][] = "SSSEE";
$proto115["m_columns"][] = "SSSER";
$proto115["m_columns"][] = "PhilHealthEE";
$proto115["m_columns"][] = "PhilHealthER";
$proto115["m_columns"][] = "PagIbigEE";
$proto115["m_columns"][] = "AllowablePaternityLeave";
$proto115["m_columns"][] = "HiredDate";
$proto115["m_columns"][] = "Inactive";
$proto115["m_columns"][] = "ExitDate";
$proto115["m_columns"][] = "PagIbigER";
$proto115["m_columns"][] = "PagIbigNo";
$proto115["m_columns"][] = "PhilHealthNo";
$proto115["m_columns"][] = "SSSEC";
$proto115["m_columns"][] = "Filex";
$proto115["m_columns"][] = "PresetTax";
$proto115["m_columns"][] = "AgentSharePerDay";
$proto115["m_columns"][] = "AllowancePerDay";
$proto115["m_columns"][] = "DeMinimis";
$proto115["m_columns"][] = "Level";
$proto115["m_columns"][] = "DateCreated";
$proto115["m_columns"][] = "ApprovedDate";
$proto115["m_columns"][] = "Approved";
$proto115["m_columns"][] = "Approvedby";
$proto115["m_columns"][] = "Preparedby";
$proto115["m_columns"][] = "Checkedby";
$proto115["m_columns"][] = "CheckedDate";
$proto115["m_columns"][] = "Checked";
$proto115["m_columns"][] = "AdjustedMonthlyPay";
$proto115["m_columns"][] = "AdjustedDailyPay";
$proto115["m_columns"][] = "Superior";
$proto115["m_columns"][] = "Position";
$proto115["m_columns"][] = "Employer";
$proto115["m_columns"][] = "IDNo";
$proto115["m_columns"][] = "AccountNo";
$proto115["m_columns"][] = "LogID";
$proto115["m_columns"][] = "LateFixPenalty";
$proto115["m_columns"][] = "DoNotUpdateContributions";
$proto115["m_columns"][] = "ExcludeContributionOnPayroll";
$proto115["m_columns"][] = "AnnualIncome";
$proto115["m_columns"][] = "AnnualTax";
$proto115["m_columns"][] = "MonthlyTax";
$proto115["m_columns"][] = "Birthday";
$proto115["m_columns"][] = "Bank";
$proto115["m_columns"][] = "NoLateDeduction";
$proto115["m_columns"][] = "IncludeBreakLate";
$proto115["m_columns"][] = "GracePeriodMins";
$proto115["m_columns"][] = "WithAdditionalBreaks";
$obj = new SQLTable($proto115);

$proto114["m_table"] = $obj;
$proto114["m_sql"] = "INNER JOIN demo_user ON dt5.EmployeeID = demo_user.EmployeeID";
$proto114["m_alias"] = "";
$proto114["m_srcTableName"] = "dt5";
$proto116=array();
$proto116["m_sql"] = "dt5.EmployeeID = demo_user.EmployeeID";
$proto116["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto116["m_column"]=$obj;
$proto116["m_contained"] = array();
$proto116["m_strCase"] = "= demo_user.EmployeeID";
$proto116["m_havingmode"] = false;
$proto116["m_inBrackets"] = false;
$proto116["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto116);

$proto114["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto114);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto118=array();
						$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto118["m_column"]=$obj;
$proto118["m_bAsc"] = 1;
$proto118["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto118);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dt5";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dt5 = createSqlQuery_dt5();


	
		;

																																																				

$tdatadt5[".sqlquery"] = $queryData_dt5;

$tableEvents["dt5"] = new eventsBase;
$tdatadt5[".hasEvents"] = false;

?>