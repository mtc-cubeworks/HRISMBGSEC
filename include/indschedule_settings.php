<?php
require_once(getabspath("classes/cipherer.php"));




$tdataindschedule = array();
	$tdataindschedule[".truncateText"] = true;
	$tdataindschedule[".NumberOfChars"] = 80;
	$tdataindschedule[".ShortName"] = "indschedule";
	$tdataindschedule[".OwnerID"] = "";
	$tdataindschedule[".OriginalTable"] = "indschedule";

//	field labels
$fieldLabelsindschedule = array();
$fieldToolTipsindschedule = array();
$pageTitlesindschedule = array();
$placeHoldersindschedule = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsindschedule["English"] = array();
	$fieldToolTipsindschedule["English"] = array();
	$placeHoldersindschedule["English"] = array();
	$pageTitlesindschedule["English"] = array();
	$fieldLabelsindschedule["English"]["ScID"] = "Sc ID";
	$fieldToolTipsindschedule["English"]["ScID"] = "";
	$placeHoldersindschedule["English"]["ScID"] = "";
	$fieldLabelsindschedule["English"]["UserName"] = "Employee";
	$fieldToolTipsindschedule["English"]["UserName"] = "";
	$placeHoldersindschedule["English"]["UserName"] = "";
	$fieldLabelsindschedule["English"]["SDate"] = "SDate";
	$fieldToolTipsindschedule["English"]["SDate"] = "";
	$placeHoldersindschedule["English"]["SDate"] = "";
	$fieldLabelsindschedule["English"]["STimeIn"] = "STime In";
	$fieldToolTipsindschedule["English"]["STimeIn"] = "";
	$placeHoldersindschedule["English"]["STimeIn"] = "";
	$fieldLabelsindschedule["English"]["STimeOut"] = "STime Out";
	$fieldToolTipsindschedule["English"]["STimeOut"] = "";
	$placeHoldersindschedule["English"]["STimeOut"] = "";
	$fieldLabelsindschedule["English"]["SchedType"] = "Sched Type";
	$fieldToolTipsindschedule["English"]["SchedType"] = "";
	$placeHoldersindschedule["English"]["SchedType"] = "";
	$fieldLabelsindschedule["English"]["ApprovedOT"] = "Approved OT";
	$fieldToolTipsindschedule["English"]["ApprovedOT"] = "";
	$placeHoldersindschedule["English"]["ApprovedOT"] = "";
	$fieldLabelsindschedule["English"]["AOTMins"] = "AOTMins";
	$fieldToolTipsindschedule["English"]["AOTMins"] = "";
	$placeHoldersindschedule["English"]["AOTMins"] = "";
	$fieldLabelsindschedule["English"]["WageType"] = "Wage Type";
	$fieldToolTipsindschedule["English"]["WageType"] = "";
	$placeHoldersindschedule["English"]["WageType"] = "";
	$fieldLabelsindschedule["English"]["ApprovedNightDiff"] = "Approved Night Diff";
	$fieldToolTipsindschedule["English"]["ApprovedNightDiff"] = "";
	$placeHoldersindschedule["English"]["ApprovedNightDiff"] = "";
	$fieldLabelsindschedule["English"]["ANDiff"] = "ANDiff";
	$fieldToolTipsindschedule["English"]["ANDiff"] = "";
	$placeHoldersindschedule["English"]["ANDiff"] = "";
	$fieldLabelsindschedule["English"]["EmployeeID"] = "Biometric ID";
	$fieldToolTipsindschedule["English"]["EmployeeID"] = "";
	$placeHoldersindschedule["English"]["EmployeeID"] = "";
	$fieldLabelsindschedule["English"]["MinsPerDay"] = "Mins Per Day";
	$fieldToolTipsindschedule["English"]["MinsPerDay"] = "";
	$placeHoldersindschedule["English"]["MinsPerDay"] = "";
	$fieldLabelsindschedule["English"]["BreakMins"] = "Break Mins";
	$fieldToolTipsindschedule["English"]["BreakMins"] = "";
	$placeHoldersindschedule["English"]["BreakMins"] = "";
	$fieldLabelsindschedule["English"]["Shift"] = "Shift";
	$fieldToolTipsindschedule["English"]["Shift"] = "";
	$placeHoldersindschedule["English"]["Shift"] = "";
	$fieldLabelsindschedule["English"]["ApprovedRD"] = "Approved RD";
	$fieldToolTipsindschedule["English"]["ApprovedRD"] = "";
	$placeHoldersindschedule["English"]["ApprovedRD"] = "";
	$fieldLabelsindschedule["English"]["RDMins"] = "RDMins";
	$fieldToolTipsindschedule["English"]["RDMins"] = "";
	$placeHoldersindschedule["English"]["RDMins"] = "";
	$fieldLabelsindschedule["English"]["LunchBreakFrom"] = "SBreak Out";
	$fieldToolTipsindschedule["English"]["LunchBreakFrom"] = "";
	$placeHoldersindschedule["English"]["LunchBreakFrom"] = "";
	$fieldLabelsindschedule["English"]["LunchBreakTo"] = "SBreak In";
	$fieldToolTipsindschedule["English"]["LunchBreakTo"] = "";
	$placeHoldersindschedule["English"]["LunchBreakTo"] = "";
	$fieldLabelsindschedule["English"]["NDMealAllowancePerShift"] = "NDMeal Allowance Per Shift";
	$fieldToolTipsindschedule["English"]["NDMealAllowancePerShift"] = "";
	$placeHoldersindschedule["English"]["NDMealAllowancePerShift"] = "";
	$fieldLabelsindschedule["English"]["NDMinimumHrs"] = "NDMinimum Hrs";
	$fieldToolTipsindschedule["English"]["NDMinimumHrs"] = "";
	$placeHoldersindschedule["English"]["NDMinimumHrs"] = "";
	$fieldLabelsindschedule["English"]["NDMealAllowance"] = "NDMeal Allowance";
	$fieldToolTipsindschedule["English"]["NDMealAllowance"] = "";
	$placeHoldersindschedule["English"]["NDMealAllowance"] = "";
	$fieldLabelsindschedule["English"]["Division"] = "Division";
	$fieldToolTipsindschedule["English"]["Division"] = "";
	$placeHoldersindschedule["English"]["Division"] = "";
	$fieldLabelsindschedule["English"]["TimeIn"] = "Time In";
	$fieldToolTipsindschedule["English"]["TimeIn"] = "";
	$placeHoldersindschedule["English"]["TimeIn"] = "";
	$fieldLabelsindschedule["English"]["TimeOut"] = "Time Out";
	$fieldToolTipsindschedule["English"]["TimeOut"] = "";
	$placeHoldersindschedule["English"]["TimeOut"] = "";
	$fieldLabelsindschedule["English"]["DayIs"] = "Day Is";
	$fieldToolTipsindschedule["English"]["DayIs"] = "";
	$placeHoldersindschedule["English"]["DayIs"] = "";
	$fieldLabelsindschedule["English"]["RestDay"] = "Rest Day";
	$fieldToolTipsindschedule["English"]["RestDay"] = "";
	$placeHoldersindschedule["English"]["RestDay"] = "";
	$fieldLabelsindschedule["English"]["Department"] = "Department";
	$fieldToolTipsindschedule["English"]["Department"] = "";
	$placeHoldersindschedule["English"]["Department"] = "";
	$fieldLabelsindschedule["English"]["RegWD"] = "Reg WD";
	$fieldToolTipsindschedule["English"]["RegWD"] = "";
	$placeHoldersindschedule["English"]["RegWD"] = "";
	$fieldLabelsindschedule["English"]["DWork"] = "DWork";
	$fieldToolTipsindschedule["English"]["DWork"] = "";
	$placeHoldersindschedule["English"]["DWork"] = "";
	$fieldLabelsindschedule["English"]["Absent"] = "Absent";
	$fieldToolTipsindschedule["English"]["Absent"] = "";
	$placeHoldersindschedule["English"]["Absent"] = "";
	$fieldLabelsindschedule["English"]["LateMins"] = "Late Mins";
	$fieldToolTipsindschedule["English"]["LateMins"] = "";
	$placeHoldersindschedule["English"]["LateMins"] = "";
	$fieldLabelsindschedule["English"]["UndertimeMins"] = "Undertime Mins";
	$fieldToolTipsindschedule["English"]["UndertimeMins"] = "";
	$placeHoldersindschedule["English"]["UndertimeMins"] = "";
	$fieldLabelsindschedule["English"]["RHolidayHrs"] = "RHoliday Hrs";
	$fieldToolTipsindschedule["English"]["RHolidayHrs"] = "";
	$placeHoldersindschedule["English"]["RHolidayHrs"] = "";
	$fieldLabelsindschedule["English"]["SHolidayHrs"] = "SHoliday Hrs";
	$fieldToolTipsindschedule["English"]["SHolidayHrs"] = "";
	$placeHoldersindschedule["English"]["SHolidayHrs"] = "";
	$fieldLabelsindschedule["English"]["CHolidayHrs"] = "CHoliday Hrs";
	$fieldToolTipsindschedule["English"]["CHolidayHrs"] = "";
	$placeHoldersindschedule["English"]["CHolidayHrs"] = "";
	$fieldLabelsindschedule["English"]["ExcessHrs"] = "Excess Hrs";
	$fieldToolTipsindschedule["English"]["ExcessHrs"] = "";
	$placeHoldersindschedule["English"]["ExcessHrs"] = "";
	$fieldLabelsindschedule["English"]["RegOTHrs"] = "Reg OTHrs";
	$fieldToolTipsindschedule["English"]["RegOTHrs"] = "";
	$placeHoldersindschedule["English"]["RegOTHrs"] = "";
	$fieldLabelsindschedule["English"]["RHOTHrs"] = "RHOTHrs";
	$fieldToolTipsindschedule["English"]["RHOTHrs"] = "";
	$placeHoldersindschedule["English"]["RHOTHrs"] = "";
	$fieldLabelsindschedule["English"]["SHOTHrs"] = "SHOTHrs";
	$fieldToolTipsindschedule["English"]["SHOTHrs"] = "";
	$placeHoldersindschedule["English"]["SHOTHrs"] = "";
	$fieldLabelsindschedule["English"]["CHOTHrs"] = "CHOTHrs";
	$fieldToolTipsindschedule["English"]["CHOTHrs"] = "";
	$placeHoldersindschedule["English"]["CHOTHrs"] = "";
	$fieldLabelsindschedule["English"]["RDOTHrs"] = "RDOTHrs";
	$fieldToolTipsindschedule["English"]["RDOTHrs"] = "";
	$placeHoldersindschedule["English"]["RDOTHrs"] = "";
	$fieldLabelsindschedule["English"]["NDHrs"] = "NDHrs";
	$fieldToolTipsindschedule["English"]["NDHrs"] = "";
	$placeHoldersindschedule["English"]["NDHrs"] = "";
	$fieldLabelsindschedule["English"]["RDHrs"] = "RDHrs";
	$fieldToolTipsindschedule["English"]["RDHrs"] = "";
	$placeHoldersindschedule["English"]["RDHrs"] = "";
	$fieldLabelsindschedule["English"]["RegNDHrs"] = "Reg NDHrs";
	$fieldToolTipsindschedule["English"]["RegNDHrs"] = "";
	$placeHoldersindschedule["English"]["RegNDHrs"] = "";
	$fieldLabelsindschedule["English"]["RHNDHrs"] = "RHNDHrs";
	$fieldToolTipsindschedule["English"]["RHNDHrs"] = "";
	$placeHoldersindschedule["English"]["RHNDHrs"] = "";
	$fieldLabelsindschedule["English"]["SHNDHrs"] = "SHNDHrs";
	$fieldToolTipsindschedule["English"]["SHNDHrs"] = "";
	$placeHoldersindschedule["English"]["SHNDHrs"] = "";
	$fieldLabelsindschedule["English"]["CHNDHrs"] = "CHNDHrs";
	$fieldToolTipsindschedule["English"]["CHNDHrs"] = "";
	$placeHoldersindschedule["English"]["CHNDHrs"] = "";
	$fieldLabelsindschedule["English"]["RDNDHrs"] = "RDNDHrs";
	$fieldToolTipsindschedule["English"]["RDNDHrs"] = "";
	$placeHoldersindschedule["English"]["RDNDHrs"] = "";
	$fieldLabelsindschedule["English"]["VLDay"] = "VLDay";
	$fieldToolTipsindschedule["English"]["VLDay"] = "";
	$placeHoldersindschedule["English"]["VLDay"] = "";
	$fieldLabelsindschedule["English"]["SLDay"] = "SLDay";
	$fieldToolTipsindschedule["English"]["SLDay"] = "";
	$placeHoldersindschedule["English"]["SLDay"] = "";
	$fieldLabelsindschedule["English"]["ELDay"] = "ELDay";
	$fieldToolTipsindschedule["English"]["ELDay"] = "";
	$placeHoldersindschedule["English"]["ELDay"] = "";
	$fieldLabelsindschedule["English"]["PLDay"] = "PLDay";
	$fieldToolTipsindschedule["English"]["PLDay"] = "";
	$placeHoldersindschedule["English"]["PLDay"] = "";
	$fieldLabelsindschedule["English"]["TrODay"] = "Tr ODay";
	$fieldToolTipsindschedule["English"]["TrODay"] = "";
	$placeHoldersindschedule["English"]["TrODay"] = "";
	$fieldLabelsindschedule["English"]["Mispunched"] = "Mispunched";
	$fieldToolTipsindschedule["English"]["Mispunched"] = "";
	$placeHoldersindschedule["English"]["Mispunched"] = "";
	$fieldLabelsindschedule["English"]["HolidayType"] = "Holiday Type";
	$fieldToolTipsindschedule["English"]["HolidayType"] = "";
	$placeHoldersindschedule["English"]["HolidayType"] = "";
	$fieldLabelsindschedule["English"]["Holiday1stHalf"] = "Holiday1st Half";
	$fieldToolTipsindschedule["English"]["Holiday1stHalf"] = "";
	$placeHoldersindschedule["English"]["Holiday1stHalf"] = "";
	$fieldLabelsindschedule["English"]["Holiday2ndHalf"] = "Holiday2nd Half";
	$fieldToolTipsindschedule["English"]["Holiday2ndHalf"] = "";
	$placeHoldersindschedule["English"]["Holiday2ndHalf"] = "";
	$fieldLabelsindschedule["English"]["TotLateMins"] = "Tot Late Mins";
	$fieldToolTipsindschedule["English"]["TotLateMins"] = "";
	$placeHoldersindschedule["English"]["TotLateMins"] = "";
	$fieldLabelsindschedule["English"]["LatePenaltyMins"] = "Late Penalty Mins";
	$fieldToolTipsindschedule["English"]["LatePenaltyMins"] = "";
	$placeHoldersindschedule["English"]["LatePenaltyMins"] = "";
	$fieldLabelsindschedule["English"]["Employer"] = "Employer";
	$fieldToolTipsindschedule["English"]["Employer"] = "";
	$placeHoldersindschedule["English"]["Employer"] = "";
	$fieldLabelsindschedule["English"]["LateFixPenalty"] = "Late Fix Penalty";
	$fieldToolTipsindschedule["English"]["LateFixPenalty"] = "";
	$placeHoldersindschedule["English"]["LateFixPenalty"] = "";
	$fieldLabelsindschedule["English"]["AfterBreakLogOut"] = "Break Out";
	$fieldToolTipsindschedule["English"]["AfterBreakLogOut"] = "";
	$placeHoldersindschedule["English"]["AfterBreakLogOut"] = "";
	$fieldLabelsindschedule["English"]["AfterBreakLog"] = "Break In";
	$fieldToolTipsindschedule["English"]["AfterBreakLog"] = "";
	$placeHoldersindschedule["English"]["AfterBreakLog"] = "";
	$fieldLabelsindschedule["English"]["PreLogMins"] = "Pre Log-In Mins";
	$fieldToolTipsindschedule["English"]["PreLogMins"] = "";
	$placeHoldersindschedule["English"]["PreLogMins"] = "";
	$fieldLabelsindschedule["English"]["IncludeBreakLate"] = "Include Break Late";
	$fieldToolTipsindschedule["English"]["IncludeBreakLate"] = "";
	$placeHoldersindschedule["English"]["IncludeBreakLate"] = "";
	$fieldLabelsindschedule["English"]["GracePeriodMins"] = "Grace Period Mins";
	$fieldToolTipsindschedule["English"]["GracePeriodMins"] = "";
	$placeHoldersindschedule["English"]["GracePeriodMins"] = "";
	$fieldLabelsindschedule["English"]["BreakLateMins"] = "Break Late Mins";
	$fieldToolTipsindschedule["English"]["BreakLateMins"] = "";
	$placeHoldersindschedule["English"]["BreakLateMins"] = "";
	if (count($fieldToolTipsindschedule["English"]))
		$tdataindschedule[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsindschedule[""] = array();
	$fieldToolTipsindschedule[""] = array();
	$placeHoldersindschedule[""] = array();
	$pageTitlesindschedule[""] = array();
	if (count($fieldToolTipsindschedule[""]))
		$tdataindschedule[".isUseToolTips"] = true;
}


	$tdataindschedule[".NCSearch"] = true;



$tdataindschedule[".shortTableName"] = "indschedule";
$tdataindschedule[".nSecOptions"] = 0;
$tdataindschedule[".recsPerRowPrint"] = 1;
$tdataindschedule[".mainTableOwnerID"] = "";
$tdataindschedule[".moveNext"] = 1;
$tdataindschedule[".entityType"] = 0;

$tdataindschedule[".strOriginalTableName"] = "indschedule";

	



$tdataindschedule[".showAddInPopup"] = false;

$tdataindschedule[".showEditInPopup"] = false;

$tdataindschedule[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataindschedule[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataindschedule[".fieldsForRegister"] = array();

$tdataindschedule[".listAjax"] = false;

	$tdataindschedule[".audit"] = false;

	$tdataindschedule[".locking"] = false;

$tdataindschedule[".edit"] = true;
$tdataindschedule[".afterEditAction"] = 1;
$tdataindschedule[".closePopupAfterEdit"] = 1;
$tdataindschedule[".afterEditActionDetTable"] = "";

$tdataindschedule[".add"] = true;
$tdataindschedule[".afterAddAction"] = 1;
$tdataindschedule[".closePopupAfterAdd"] = 1;
$tdataindschedule[".afterAddActionDetTable"] = "";

$tdataindschedule[".list"] = true;

$tdataindschedule[".inlineEdit"] = true;

$tdataindschedule[".updateSelected"] = true;

$tdataindschedule[".reorderRecordsByHeader"] = true;


$tdataindschedule[".exportFormatting"] = 2;
$tdataindschedule[".exportDelimiter"] = ",";
		
$tdataindschedule[".inlineAdd"] = true;
$tdataindschedule[".copy"] = true;
$tdataindschedule[".view"] = true;

$tdataindschedule[".import"] = true;

$tdataindschedule[".exportTo"] = true;

$tdataindschedule[".printFriendly"] = true;

$tdataindschedule[".delete"] = true;

$tdataindschedule[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataindschedule[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataindschedule[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataindschedule[".searchSaving"] = false;
//

$tdataindschedule[".showSearchPanel"] = true;
		$tdataindschedule[".flexibleSearch"] = true;

$tdataindschedule[".isUseAjaxSuggest"] = true;

$tdataindschedule[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																				

$tdataindschedule[".ajaxCodeSnippetAdded"] = false;

$tdataindschedule[".buttonsAdded"] = false;

$tdataindschedule[".addPageEvents"] = false;

// use timepicker for search panel
$tdataindschedule[".isUseTimeForSearch"] = true;





$tdataindschedule[".allSearchFields"] = array();
$tdataindschedule[".filterFields"] = array();
$tdataindschedule[".requiredSearchFields"] = array();

$tdataindschedule[".allSearchFields"][] = "EmployeeID";
	$tdataindschedule[".allSearchFields"][] = "UserName";
	$tdataindschedule[".allSearchFields"][] = "Employer";
	$tdataindschedule[".allSearchFields"][] = "Division";
	$tdataindschedule[".allSearchFields"][] = "Department";
	$tdataindschedule[".allSearchFields"][] = "WageType";
	$tdataindschedule[".allSearchFields"][] = "SDate";
	$tdataindschedule[".allSearchFields"][] = "STimeIn";
	$tdataindschedule[".allSearchFields"][] = "STimeOut";
	$tdataindschedule[".allSearchFields"][] = "BreakLateMins";
	$tdataindschedule[".allSearchFields"][] = "AfterBreakLogOut";
	$tdataindschedule[".allSearchFields"][] = "AfterBreakLog";
	$tdataindschedule[".allSearchFields"][] = "PreLogMins";
	$tdataindschedule[".allSearchFields"][] = "IncludeBreakLate";
	$tdataindschedule[".allSearchFields"][] = "GracePeriodMins";
	

$tdataindschedule[".googleLikeFields"] = array();
$tdataindschedule[".googleLikeFields"][] = "ScID";
$tdataindschedule[".googleLikeFields"][] = "UserName";
$tdataindschedule[".googleLikeFields"][] = "SDate";
$tdataindschedule[".googleLikeFields"][] = "STimeIn";
$tdataindschedule[".googleLikeFields"][] = "STimeOut";
$tdataindschedule[".googleLikeFields"][] = "SchedType";
$tdataindschedule[".googleLikeFields"][] = "ApprovedOT";
$tdataindschedule[".googleLikeFields"][] = "AOTMins";
$tdataindschedule[".googleLikeFields"][] = "WageType";
$tdataindschedule[".googleLikeFields"][] = "ApprovedNightDiff";
$tdataindschedule[".googleLikeFields"][] = "ANDiff";
$tdataindschedule[".googleLikeFields"][] = "EmployeeID";
$tdataindschedule[".googleLikeFields"][] = "MinsPerDay";
$tdataindschedule[".googleLikeFields"][] = "BreakMins";
$tdataindschedule[".googleLikeFields"][] = "Shift";
$tdataindschedule[".googleLikeFields"][] = "ApprovedRD";
$tdataindschedule[".googleLikeFields"][] = "RDMins";
$tdataindschedule[".googleLikeFields"][] = "LunchBreakFrom";
$tdataindschedule[".googleLikeFields"][] = "LunchBreakTo";
$tdataindschedule[".googleLikeFields"][] = "NDMealAllowancePerShift";
$tdataindschedule[".googleLikeFields"][] = "NDMinimumHrs";
$tdataindschedule[".googleLikeFields"][] = "NDMealAllowance";
$tdataindschedule[".googleLikeFields"][] = "Division";
$tdataindschedule[".googleLikeFields"][] = "TimeIn";
$tdataindschedule[".googleLikeFields"][] = "TimeOut";
$tdataindschedule[".googleLikeFields"][] = "DayIs";
$tdataindschedule[".googleLikeFields"][] = "RestDay";
$tdataindschedule[".googleLikeFields"][] = "Department";
$tdataindschedule[".googleLikeFields"][] = "RegWD";
$tdataindschedule[".googleLikeFields"][] = "DWork";
$tdataindschedule[".googleLikeFields"][] = "Absent";
$tdataindschedule[".googleLikeFields"][] = "LateMins";
$tdataindschedule[".googleLikeFields"][] = "UndertimeMins";
$tdataindschedule[".googleLikeFields"][] = "RHolidayHrs";
$tdataindschedule[".googleLikeFields"][] = "SHolidayHrs";
$tdataindschedule[".googleLikeFields"][] = "CHolidayHrs";
$tdataindschedule[".googleLikeFields"][] = "ExcessHrs";
$tdataindschedule[".googleLikeFields"][] = "RegOTHrs";
$tdataindschedule[".googleLikeFields"][] = "RHOTHrs";
$tdataindschedule[".googleLikeFields"][] = "SHOTHrs";
$tdataindschedule[".googleLikeFields"][] = "CHOTHrs";
$tdataindschedule[".googleLikeFields"][] = "RDOTHrs";
$tdataindschedule[".googleLikeFields"][] = "NDHrs";
$tdataindschedule[".googleLikeFields"][] = "RDHrs";
$tdataindschedule[".googleLikeFields"][] = "RegNDHrs";
$tdataindschedule[".googleLikeFields"][] = "RHNDHrs";
$tdataindschedule[".googleLikeFields"][] = "SHNDHrs";
$tdataindschedule[".googleLikeFields"][] = "CHNDHrs";
$tdataindschedule[".googleLikeFields"][] = "RDNDHrs";
$tdataindschedule[".googleLikeFields"][] = "VLDay";
$tdataindschedule[".googleLikeFields"][] = "SLDay";
$tdataindschedule[".googleLikeFields"][] = "ELDay";
$tdataindschedule[".googleLikeFields"][] = "PLDay";
$tdataindschedule[".googleLikeFields"][] = "TrODay";
$tdataindschedule[".googleLikeFields"][] = "HolidayType";
$tdataindschedule[".googleLikeFields"][] = "Mispunched";
$tdataindschedule[".googleLikeFields"][] = "Holiday1stHalf";
$tdataindschedule[".googleLikeFields"][] = "Holiday2ndHalf";
$tdataindschedule[".googleLikeFields"][] = "TotLateMins";
$tdataindschedule[".googleLikeFields"][] = "LatePenaltyMins";
$tdataindschedule[".googleLikeFields"][] = "Employer";
$tdataindschedule[".googleLikeFields"][] = "LateFixPenalty";
$tdataindschedule[".googleLikeFields"][] = "AfterBreakLogOut";
$tdataindschedule[".googleLikeFields"][] = "AfterBreakLog";
$tdataindschedule[".googleLikeFields"][] = "PreLogMins";
$tdataindschedule[".googleLikeFields"][] = "IncludeBreakLate";
$tdataindschedule[".googleLikeFields"][] = "GracePeriodMins";
$tdataindschedule[".googleLikeFields"][] = "BreakLateMins";


$tdataindschedule[".advSearchFields"] = array();
$tdataindschedule[".advSearchFields"][] = "EmployeeID";
$tdataindschedule[".advSearchFields"][] = "UserName";
$tdataindschedule[".advSearchFields"][] = "Employer";
$tdataindschedule[".advSearchFields"][] = "Division";
$tdataindschedule[".advSearchFields"][] = "Department";
$tdataindschedule[".advSearchFields"][] = "WageType";
$tdataindschedule[".advSearchFields"][] = "SDate";
$tdataindschedule[".advSearchFields"][] = "STimeIn";
$tdataindschedule[".advSearchFields"][] = "STimeOut";
$tdataindschedule[".advSearchFields"][] = "BreakLateMins";
$tdataindschedule[".advSearchFields"][] = "AfterBreakLogOut";
$tdataindschedule[".advSearchFields"][] = "AfterBreakLog";
$tdataindschedule[".advSearchFields"][] = "PreLogMins";
$tdataindschedule[".advSearchFields"][] = "IncludeBreakLate";
$tdataindschedule[".advSearchFields"][] = "GracePeriodMins";

$tdataindschedule[".tableType"] = "list";

$tdataindschedule[".printerPageOrientation"] = 0;
$tdataindschedule[".nPrinterPageScale"] = 100;

$tdataindschedule[".nPrinterSplitRecords"] = 40;

$tdataindschedule[".nPrinterPDFSplitRecords"] = 40;



$tdataindschedule[".geocodingEnabled"] = false;





$tdataindschedule[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdataindschedule[".totalsFields"] = array();
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "LateMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "UndertimeMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "LatePenaltyMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "TotLateMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "RegWD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "DWork",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "Absent",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Checkbox');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "RHolidayHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "SHolidayHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "CHolidayHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "NDHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "RegNDHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "RDHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "RHNDHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "RDNDHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "SHNDHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "CHNDHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "ExcessHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "RegOTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "RDOTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "SHOTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "CHOTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "RHOTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "TrODay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "VLDay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "SLDay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "ELDay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "PLDay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdataindschedule[".pageSize"] = 20;

$tdataindschedule[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY ScID";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataindschedule[".strOrderBy"] = $tstrOrderBy;

$tdataindschedule[".orderindexes"] = array();
	$tdataindschedule[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "ScID");


$tdataindschedule[".sqlHead"] = "SELECT ScID,  UserName,  SDate,  STimeIn,  STimeOut,  SchedType,  ApprovedOT,  AOTMins,  WageType,  ApprovedNightDiff,  ANDiff,  EmployeeID,  MinsPerDay,  BreakMins,  Shift,  ApprovedRD,  RDMins,  LunchBreakFrom,  LunchBreakTo,  NDMealAllowancePerShift,  NDMinimumHrs,  NDMealAllowance,  Division,  TimeIn,  TimeOut,  DayIs,  RestDay,  Department,  RegWD,  DWork,  Absent,  LateMins,  UndertimeMins,  RHolidayHrs,  SHolidayHrs,  CHolidayHrs,  ExcessHrs,  RegOTHrs,  RHOTHrs,  SHOTHrs,  CHOTHrs,  RDOTHrs,  NDHrs,  RDHrs,  RegNDHrs,  RHNDHrs,  SHNDHrs,  CHNDHrs,  RDNDHrs,  VLDay,  SLDay,  ELDay,  PLDay,  TrODay,  HolidayType,  Mispunched,  Holiday1stHalf,  Holiday2ndHalf,  TotLateMins,  LatePenaltyMins,  Employer,  LateFixPenalty,  AfterBreakLogOut,  AfterBreakLog,  PreLogMins,  IncludeBreakLate,  GracePeriodMins,  BreakLateMins";
$tdataindschedule[".sqlFrom"] = "FROM indschedule";
$tdataindschedule[".sqlWhereExpr"] = "";
$tdataindschedule[".sqlTail"] = "";


//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	
	
		$tabFields[] = "EmployeeID";
	
		$tabFields[] = "UserName";
	
		$tabFields[] = "Employer";
	
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
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "PreLogMins";
	
		$tabFields[] = "IncludeBreakLate";
	
		$tabFields[] = "GracePeriodMins";
	
		$tabFields[] = "LateMins";
	
		$tabFields[] = "UndertimeMins";
	
		$tabFields[] = "LatePenaltyMins";
	
		$tabFields[] = "TotLateMins";
	
		$tabFields[] = "LateFixPenalty";
$arrEditTabs[] = array('tabId'=>'Lates_and_Undertime1',
					   'tabName'=>"Lates and Undertime",
					   'nType'=>'0',
					   'nOrder'=>23,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "HolidayType";
	
		$tabFields[] = "Holiday1stHalf";
	
		$tabFields[] = "Holiday2ndHalf";
	
		$tabFields[] = "RHolidayHrs";
	
		$tabFields[] = "SHolidayHrs";
	
		$tabFields[] = "CHolidayHrs";
$arrEditTabs[] = array('tabId'=>'Holiday1',
					   'tabName'=>"Holiday",
					   'nType'=>'0',
					   'nOrder'=>32,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "NDHrs";
	
		$tabFields[] = "ApprovedNightDiff";
	
		$tabFields[] = "ANDiff";
	
		$tabFields[] = "RegNDHrs";
	
		$tabFields[] = "RDHrs";
	
		$tabFields[] = "RHNDHrs";
	
		$tabFields[] = "RDNDHrs";
	
		$tabFields[] = "SHNDHrs";
	
		$tabFields[] = "CHNDHrs";
	
		$tabFields[] = "NDMealAllowance";
	
		$tabFields[] = "NDMealAllowancePerShift";
	
		$tabFields[] = "NDMinimumHrs";
$arrEditTabs[] = array('tabId'=>'Night_Diff1',
					   'tabName'=>"Night Diff",
					   'nType'=>'0',
					   'nOrder'=>39,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "ExcessHrs";
	
		$tabFields[] = "ApprovedOT";
	
		$tabFields[] = "AOTMins";
	
		$tabFields[] = "RegOTHrs";
	
		$tabFields[] = "RDOTHrs";
	
		$tabFields[] = "SHOTHrs";
	
		$tabFields[] = "CHOTHrs";
	
		$tabFields[] = "RHOTHrs";
	
		$tabFields[] = "TrODay";
	
		$tabFields[] = "RDMins";
	
		$tabFields[] = "ApprovedRD";
$arrEditTabs[] = array('tabId'=>'Overtime1',
					   'tabName'=>"Overtime",
					   'nType'=>'0',
					   'nOrder'=>52,
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
					   'nOrder'=>64,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "SchedType";
	
		$tabFields[] = "Shift";
	
		$tabFields[] = "MinsPerDay";
	
		$tabFields[] = "BreakMins";
$arrEditTabs[] = array('tabId'=>'Sched_Setup1',
					   'tabName'=>"Sched Setup",
					   'nType'=>'0',
					   'nOrder'=>69,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataindschedule[".arrEditTabs"] = $arrEditTabs;


//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	
	
		$tabFields[] = "EmployeeID";
	
		$tabFields[] = "UserName";
	
		$tabFields[] = "Employer";
	
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
					  'nOrder'=>1,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "PreLogMins";
	
		$tabFields[] = "IncludeBreakLate";
	
		$tabFields[] = "GracePeriodMins";
	
		$tabFields[] = "LateMins";
	
		$tabFields[] = "UndertimeMins";
	
		$tabFields[] = "LatePenaltyMins";
	
		$tabFields[] = "TotLateMins";
	
		$tabFields[] = "LateFixPenalty";
$arrAddTabs[] = array('tabId'=>'Lates_and_Undertime1',
					  'tabName'=>"Lates and Undertime",
					  'nType'=>'0',
					  'nOrder'=>23,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "HolidayType";
	
		$tabFields[] = "Holiday1stHalf";
	
		$tabFields[] = "Holiday2ndHalf";
	
		$tabFields[] = "RHolidayHrs";
	
		$tabFields[] = "SHolidayHrs";
	
		$tabFields[] = "CHolidayHrs";
$arrAddTabs[] = array('tabId'=>'Holiday1',
					  'tabName'=>"Holiday",
					  'nType'=>'0',
					  'nOrder'=>32,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "NDHrs";
	
		$tabFields[] = "ApprovedNightDiff";
	
		$tabFields[] = "ANDiff";
	
		$tabFields[] = "RegNDHrs";
	
		$tabFields[] = "RDHrs";
	
		$tabFields[] = "RHNDHrs";
	
		$tabFields[] = "RDNDHrs";
	
		$tabFields[] = "SHNDHrs";
	
		$tabFields[] = "CHNDHrs";
	
		$tabFields[] = "NDMealAllowance";
	
		$tabFields[] = "NDMealAllowancePerShift";
	
		$tabFields[] = "NDMinimumHrs";
$arrAddTabs[] = array('tabId'=>'Night_Diff1',
					  'tabName'=>"Night Diff",
					  'nType'=>'0',
					  'nOrder'=>39,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "ExcessHrs";
	
		$tabFields[] = "ApprovedOT";
	
		$tabFields[] = "AOTMins";
	
		$tabFields[] = "RegOTHrs";
	
		$tabFields[] = "RDOTHrs";
	
		$tabFields[] = "SHOTHrs";
	
		$tabFields[] = "CHOTHrs";
	
		$tabFields[] = "RHOTHrs";
	
		$tabFields[] = "TrODay";
	
		$tabFields[] = "RDMins";
	
		$tabFields[] = "ApprovedRD";
$arrAddTabs[] = array('tabId'=>'Overtime1',
					  'tabName'=>"Overtime",
					  'nType'=>'0',
					  'nOrder'=>52,
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
					  'nOrder'=>64,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "SchedType";
	
		$tabFields[] = "Shift";
	
		$tabFields[] = "MinsPerDay";
	
		$tabFields[] = "BreakMins";
$arrAddTabs[] = array('tabId'=>'Sched_Setup1',
					  'tabName'=>"Sched Setup",
					  'nType'=>'0',
					  'nOrder'=>69,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdataindschedule[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	
	$tabFields[] = "EmployeeID";
	$tabFields[] = "UserName";
	$tabFields[] = "Employer";
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
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "PreLogMins";
	$tabFields[] = "IncludeBreakLate";
	$tabFields[] = "GracePeriodMins";
	$tabFields[] = "LateMins";
	$tabFields[] = "UndertimeMins";
	$tabFields[] = "LatePenaltyMins";
	$tabFields[] = "TotLateMins";
	$tabFields[] = "LateFixPenalty";
$arrViewTabs[] = array('tabId'=>'Lates_and_Undertime1',
					   'tabName'=>"Lates and Undertime",
					   'nType'=>'0',
					   'nOrder'=>23,
					   'tabGroup'=>2,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "HolidayType";
	$tabFields[] = "Holiday1stHalf";
	$tabFields[] = "Holiday2ndHalf";
	$tabFields[] = "RHolidayHrs";
	$tabFields[] = "SHolidayHrs";
	$tabFields[] = "CHolidayHrs";
$arrViewTabs[] = array('tabId'=>'Holiday1',
					   'tabName'=>"Holiday",
					   'nType'=>'0',
					   'nOrder'=>32,
					   'tabGroup'=>2,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "NDHrs";
	$tabFields[] = "ApprovedNightDiff";
	$tabFields[] = "ANDiff";
	$tabFields[] = "RegNDHrs";
	$tabFields[] = "RDHrs";
	$tabFields[] = "RHNDHrs";
	$tabFields[] = "RDNDHrs";
	$tabFields[] = "SHNDHrs";
	$tabFields[] = "CHNDHrs";
	$tabFields[] = "NDMealAllowance";
	$tabFields[] = "NDMealAllowancePerShift";
	$tabFields[] = "NDMinimumHrs";
$arrViewTabs[] = array('tabId'=>'Night_Diff1',
					   'tabName'=>"Night Diff",
					   'nType'=>'0',
					   'nOrder'=>39,
					   'tabGroup'=>2,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "ExcessHrs";
	$tabFields[] = "ApprovedOT";
	$tabFields[] = "AOTMins";
	$tabFields[] = "RegOTHrs";
	$tabFields[] = "RDOTHrs";
	$tabFields[] = "SHOTHrs";
	$tabFields[] = "CHOTHrs";
	$tabFields[] = "RHOTHrs";
	$tabFields[] = "TrODay";
	$tabFields[] = "RDMins";
	$tabFields[] = "ApprovedRD";
$arrViewTabs[] = array('tabId'=>'Overtime1',
					   'tabName'=>"Overtime",
					   'nType'=>'0',
					   'nOrder'=>52,
					   'tabGroup'=>2,
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
					   'nOrder'=>64,
					   'tabGroup'=>2,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "SchedType";
	$tabFields[] = "Shift";
	$tabFields[] = "MinsPerDay";
	$tabFields[] = "BreakMins";
$arrViewTabs[] = array('tabId'=>'Sched_Setup1',
					   'tabName'=>"Sched Setup",
					   'nType'=>'0',
					   'nOrder'=>69,
					   'tabGroup'=>2,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataindschedule[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataindschedule[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataindschedule[".arrGroupsPerPage"] = $arrGPP;

$tdataindschedule[".highlightSearchResults"] = true;

$tableKeysindschedule = array();
$tableKeysindschedule[] = "ScID";
$tdataindschedule[".Keys"] = $tableKeysindschedule;

$tdataindschedule[".listFields"] = array();
$tdataindschedule[".listFields"][] = "ScID";
$tdataindschedule[".listFields"][] = "EmployeeID";
$tdataindschedule[".listFields"][] = "UserName";
$tdataindschedule[".listFields"][] = "Employer";
$tdataindschedule[".listFields"][] = "Division";
$tdataindschedule[".listFields"][] = "Department";
$tdataindschedule[".listFields"][] = "WageType";
$tdataindschedule[".listFields"][] = "SDate";
$tdataindschedule[".listFields"][] = "DayIs";
$tdataindschedule[".listFields"][] = "RestDay";
$tdataindschedule[".listFields"][] = "STimeIn";
$tdataindschedule[".listFields"][] = "STimeOut";
$tdataindschedule[".listFields"][] = "TimeIn";
$tdataindschedule[".listFields"][] = "TimeOut";
$tdataindschedule[".listFields"][] = "LateMins";
$tdataindschedule[".listFields"][] = "UndertimeMins";
$tdataindschedule[".listFields"][] = "BreakLateMins";
$tdataindschedule[".listFields"][] = "LatePenaltyMins";
$tdataindschedule[".listFields"][] = "TotLateMins";
$tdataindschedule[".listFields"][] = "LunchBreakFrom";
$tdataindschedule[".listFields"][] = "LunchBreakTo";
$tdataindschedule[".listFields"][] = "AfterBreakLogOut";
$tdataindschedule[".listFields"][] = "AfterBreakLog";
$tdataindschedule[".listFields"][] = "Mispunched";
$tdataindschedule[".listFields"][] = "RegWD";
$tdataindschedule[".listFields"][] = "DWork";
$tdataindschedule[".listFields"][] = "Absent";
$tdataindschedule[".listFields"][] = "PreLogMins";
$tdataindschedule[".listFields"][] = "IncludeBreakLate";
$tdataindschedule[".listFields"][] = "GracePeriodMins";
$tdataindschedule[".listFields"][] = "LateFixPenalty";
$tdataindschedule[".listFields"][] = "HolidayType";
$tdataindschedule[".listFields"][] = "Holiday1stHalf";
$tdataindschedule[".listFields"][] = "Holiday2ndHalf";
$tdataindschedule[".listFields"][] = "RHolidayHrs";
$tdataindschedule[".listFields"][] = "SHolidayHrs";
$tdataindschedule[".listFields"][] = "CHolidayHrs";
$tdataindschedule[".listFields"][] = "NDHrs";
$tdataindschedule[".listFields"][] = "ApprovedNightDiff";
$tdataindschedule[".listFields"][] = "ANDiff";
$tdataindschedule[".listFields"][] = "RegNDHrs";
$tdataindschedule[".listFields"][] = "RDHrs";
$tdataindschedule[".listFields"][] = "RHNDHrs";
$tdataindschedule[".listFields"][] = "RDNDHrs";
$tdataindschedule[".listFields"][] = "SHNDHrs";
$tdataindschedule[".listFields"][] = "CHNDHrs";
$tdataindschedule[".listFields"][] = "NDMealAllowance";
$tdataindschedule[".listFields"][] = "NDMealAllowancePerShift";
$tdataindschedule[".listFields"][] = "NDMinimumHrs";
$tdataindschedule[".listFields"][] = "ExcessHrs";
$tdataindschedule[".listFields"][] = "ApprovedOT";
$tdataindschedule[".listFields"][] = "AOTMins";
$tdataindschedule[".listFields"][] = "RegOTHrs";
$tdataindschedule[".listFields"][] = "RDOTHrs";
$tdataindschedule[".listFields"][] = "SHOTHrs";
$tdataindschedule[".listFields"][] = "CHOTHrs";
$tdataindschedule[".listFields"][] = "RHOTHrs";
$tdataindschedule[".listFields"][] = "TrODay";
$tdataindschedule[".listFields"][] = "RDMins";
$tdataindschedule[".listFields"][] = "ApprovedRD";
$tdataindschedule[".listFields"][] = "VLDay";
$tdataindschedule[".listFields"][] = "SLDay";
$tdataindschedule[".listFields"][] = "ELDay";
$tdataindschedule[".listFields"][] = "PLDay";
$tdataindschedule[".listFields"][] = "SchedType";
$tdataindschedule[".listFields"][] = "Shift";
$tdataindschedule[".listFields"][] = "MinsPerDay";
$tdataindschedule[".listFields"][] = "BreakMins";

$tdataindschedule[".hideMobileList"] = array();


$tdataindschedule[".viewFields"] = array();
$tdataindschedule[".viewFields"][] = "BreakLateMins";
$tdataindschedule[".viewFields"][] = "ScID";
$tdataindschedule[".viewFields"][] = "EmployeeID";
$tdataindschedule[".viewFields"][] = "UserName";
$tdataindschedule[".viewFields"][] = "Employer";
$tdataindschedule[".viewFields"][] = "Division";
$tdataindschedule[".viewFields"][] = "Department";
$tdataindschedule[".viewFields"][] = "WageType";
$tdataindschedule[".viewFields"][] = "SDate";
$tdataindschedule[".viewFields"][] = "DayIs";
$tdataindschedule[".viewFields"][] = "RestDay";
$tdataindschedule[".viewFields"][] = "STimeIn";
$tdataindschedule[".viewFields"][] = "STimeOut";
$tdataindschedule[".viewFields"][] = "TimeIn";
$tdataindschedule[".viewFields"][] = "TimeOut";
$tdataindschedule[".viewFields"][] = "LunchBreakFrom";
$tdataindschedule[".viewFields"][] = "LunchBreakTo";
$tdataindschedule[".viewFields"][] = "AfterBreakLogOut";
$tdataindschedule[".viewFields"][] = "AfterBreakLog";
$tdataindschedule[".viewFields"][] = "Mispunched";
$tdataindschedule[".viewFields"][] = "RegWD";
$tdataindschedule[".viewFields"][] = "DWork";
$tdataindschedule[".viewFields"][] = "Absent";
$tdataindschedule[".viewFields"][] = "PreLogMins";
$tdataindschedule[".viewFields"][] = "IncludeBreakLate";
$tdataindschedule[".viewFields"][] = "GracePeriodMins";
$tdataindschedule[".viewFields"][] = "LateMins";
$tdataindschedule[".viewFields"][] = "UndertimeMins";
$tdataindschedule[".viewFields"][] = "LatePenaltyMins";
$tdataindschedule[".viewFields"][] = "TotLateMins";
$tdataindschedule[".viewFields"][] = "LateFixPenalty";
$tdataindschedule[".viewFields"][] = "HolidayType";
$tdataindschedule[".viewFields"][] = "Holiday1stHalf";
$tdataindschedule[".viewFields"][] = "Holiday2ndHalf";
$tdataindschedule[".viewFields"][] = "RHolidayHrs";
$tdataindschedule[".viewFields"][] = "SHolidayHrs";
$tdataindschedule[".viewFields"][] = "CHolidayHrs";
$tdataindschedule[".viewFields"][] = "NDHrs";
$tdataindschedule[".viewFields"][] = "ApprovedNightDiff";
$tdataindschedule[".viewFields"][] = "ANDiff";
$tdataindschedule[".viewFields"][] = "RegNDHrs";
$tdataindschedule[".viewFields"][] = "RDHrs";
$tdataindschedule[".viewFields"][] = "RHNDHrs";
$tdataindschedule[".viewFields"][] = "RDNDHrs";
$tdataindschedule[".viewFields"][] = "SHNDHrs";
$tdataindschedule[".viewFields"][] = "CHNDHrs";
$tdataindschedule[".viewFields"][] = "NDMealAllowance";
$tdataindschedule[".viewFields"][] = "NDMealAllowancePerShift";
$tdataindschedule[".viewFields"][] = "NDMinimumHrs";
$tdataindschedule[".viewFields"][] = "ExcessHrs";
$tdataindschedule[".viewFields"][] = "ApprovedOT";
$tdataindschedule[".viewFields"][] = "AOTMins";
$tdataindschedule[".viewFields"][] = "RegOTHrs";
$tdataindschedule[".viewFields"][] = "RDOTHrs";
$tdataindschedule[".viewFields"][] = "SHOTHrs";
$tdataindschedule[".viewFields"][] = "CHOTHrs";
$tdataindschedule[".viewFields"][] = "RHOTHrs";
$tdataindschedule[".viewFields"][] = "TrODay";
$tdataindschedule[".viewFields"][] = "RDMins";
$tdataindschedule[".viewFields"][] = "ApprovedRD";
$tdataindschedule[".viewFields"][] = "VLDay";
$tdataindschedule[".viewFields"][] = "SLDay";
$tdataindschedule[".viewFields"][] = "ELDay";
$tdataindschedule[".viewFields"][] = "PLDay";
$tdataindschedule[".viewFields"][] = "SchedType";
$tdataindschedule[".viewFields"][] = "Shift";
$tdataindschedule[".viewFields"][] = "MinsPerDay";
$tdataindschedule[".viewFields"][] = "BreakMins";

$tdataindschedule[".addFields"] = array();
$tdataindschedule[".addFields"][] = "BreakLateMins";
$tdataindschedule[".addFields"][] = "EmployeeID";
$tdataindschedule[".addFields"][] = "UserName";
$tdataindschedule[".addFields"][] = "Employer";
$tdataindschedule[".addFields"][] = "Division";
$tdataindschedule[".addFields"][] = "Department";
$tdataindschedule[".addFields"][] = "WageType";
$tdataindschedule[".addFields"][] = "SDate";
$tdataindschedule[".addFields"][] = "DayIs";
$tdataindschedule[".addFields"][] = "RestDay";
$tdataindschedule[".addFields"][] = "STimeIn";
$tdataindschedule[".addFields"][] = "STimeOut";
$tdataindschedule[".addFields"][] = "TimeIn";
$tdataindschedule[".addFields"][] = "TimeOut";
$tdataindschedule[".addFields"][] = "LunchBreakFrom";
$tdataindschedule[".addFields"][] = "LunchBreakTo";
$tdataindschedule[".addFields"][] = "AfterBreakLogOut";
$tdataindschedule[".addFields"][] = "AfterBreakLog";
$tdataindschedule[".addFields"][] = "Mispunched";
$tdataindschedule[".addFields"][] = "RegWD";
$tdataindschedule[".addFields"][] = "DWork";
$tdataindschedule[".addFields"][] = "Absent";
$tdataindschedule[".addFields"][] = "PreLogMins";
$tdataindschedule[".addFields"][] = "IncludeBreakLate";
$tdataindschedule[".addFields"][] = "GracePeriodMins";
$tdataindschedule[".addFields"][] = "LateMins";
$tdataindschedule[".addFields"][] = "UndertimeMins";
$tdataindschedule[".addFields"][] = "LatePenaltyMins";
$tdataindschedule[".addFields"][] = "TotLateMins";
$tdataindschedule[".addFields"][] = "LateFixPenalty";
$tdataindschedule[".addFields"][] = "HolidayType";
$tdataindschedule[".addFields"][] = "Holiday1stHalf";
$tdataindschedule[".addFields"][] = "Holiday2ndHalf";
$tdataindschedule[".addFields"][] = "RHolidayHrs";
$tdataindschedule[".addFields"][] = "SHolidayHrs";
$tdataindschedule[".addFields"][] = "CHolidayHrs";
$tdataindschedule[".addFields"][] = "NDHrs";
$tdataindschedule[".addFields"][] = "ApprovedNightDiff";
$tdataindschedule[".addFields"][] = "ANDiff";
$tdataindschedule[".addFields"][] = "RegNDHrs";
$tdataindschedule[".addFields"][] = "RDHrs";
$tdataindschedule[".addFields"][] = "RHNDHrs";
$tdataindschedule[".addFields"][] = "RDNDHrs";
$tdataindschedule[".addFields"][] = "SHNDHrs";
$tdataindschedule[".addFields"][] = "CHNDHrs";
$tdataindschedule[".addFields"][] = "NDMealAllowance";
$tdataindschedule[".addFields"][] = "NDMealAllowancePerShift";
$tdataindschedule[".addFields"][] = "NDMinimumHrs";
$tdataindschedule[".addFields"][] = "ExcessHrs";
$tdataindschedule[".addFields"][] = "ApprovedOT";
$tdataindschedule[".addFields"][] = "AOTMins";
$tdataindschedule[".addFields"][] = "RegOTHrs";
$tdataindschedule[".addFields"][] = "RDOTHrs";
$tdataindschedule[".addFields"][] = "SHOTHrs";
$tdataindschedule[".addFields"][] = "CHOTHrs";
$tdataindschedule[".addFields"][] = "RHOTHrs";
$tdataindschedule[".addFields"][] = "TrODay";
$tdataindschedule[".addFields"][] = "RDMins";
$tdataindschedule[".addFields"][] = "ApprovedRD";
$tdataindschedule[".addFields"][] = "VLDay";
$tdataindschedule[".addFields"][] = "SLDay";
$tdataindschedule[".addFields"][] = "ELDay";
$tdataindschedule[".addFields"][] = "PLDay";
$tdataindschedule[".addFields"][] = "SchedType";
$tdataindschedule[".addFields"][] = "Shift";
$tdataindschedule[".addFields"][] = "MinsPerDay";
$tdataindschedule[".addFields"][] = "BreakMins";

$tdataindschedule[".masterListFields"] = array();
$tdataindschedule[".masterListFields"][] = "ScID";
$tdataindschedule[".masterListFields"][] = "EmployeeID";
$tdataindschedule[".masterListFields"][] = "UserName";
$tdataindschedule[".masterListFields"][] = "Employer";
$tdataindschedule[".masterListFields"][] = "Division";
$tdataindschedule[".masterListFields"][] = "Department";
$tdataindschedule[".masterListFields"][] = "WageType";
$tdataindschedule[".masterListFields"][] = "SDate";
$tdataindschedule[".masterListFields"][] = "DayIs";
$tdataindschedule[".masterListFields"][] = "RestDay";
$tdataindschedule[".masterListFields"][] = "STimeIn";
$tdataindschedule[".masterListFields"][] = "STimeOut";
$tdataindschedule[".masterListFields"][] = "TimeIn";
$tdataindschedule[".masterListFields"][] = "TimeOut";
$tdataindschedule[".masterListFields"][] = "LateMins";
$tdataindschedule[".masterListFields"][] = "UndertimeMins";
$tdataindschedule[".masterListFields"][] = "BreakLateMins";
$tdataindschedule[".masterListFields"][] = "LatePenaltyMins";
$tdataindschedule[".masterListFields"][] = "TotLateMins";
$tdataindschedule[".masterListFields"][] = "LunchBreakFrom";
$tdataindschedule[".masterListFields"][] = "LunchBreakTo";
$tdataindschedule[".masterListFields"][] = "AfterBreakLogOut";
$tdataindschedule[".masterListFields"][] = "AfterBreakLog";
$tdataindschedule[".masterListFields"][] = "Mispunched";
$tdataindschedule[".masterListFields"][] = "RegWD";
$tdataindschedule[".masterListFields"][] = "DWork";
$tdataindschedule[".masterListFields"][] = "Absent";
$tdataindschedule[".masterListFields"][] = "PreLogMins";
$tdataindschedule[".masterListFields"][] = "IncludeBreakLate";
$tdataindschedule[".masterListFields"][] = "GracePeriodMins";
$tdataindschedule[".masterListFields"][] = "LateFixPenalty";
$tdataindschedule[".masterListFields"][] = "HolidayType";
$tdataindschedule[".masterListFields"][] = "Holiday1stHalf";
$tdataindschedule[".masterListFields"][] = "Holiday2ndHalf";
$tdataindschedule[".masterListFields"][] = "RHolidayHrs";
$tdataindschedule[".masterListFields"][] = "SHolidayHrs";
$tdataindschedule[".masterListFields"][] = "CHolidayHrs";
$tdataindschedule[".masterListFields"][] = "NDHrs";
$tdataindschedule[".masterListFields"][] = "ApprovedNightDiff";
$tdataindschedule[".masterListFields"][] = "ANDiff";
$tdataindschedule[".masterListFields"][] = "RegNDHrs";
$tdataindschedule[".masterListFields"][] = "RDHrs";
$tdataindschedule[".masterListFields"][] = "RHNDHrs";
$tdataindschedule[".masterListFields"][] = "RDNDHrs";
$tdataindschedule[".masterListFields"][] = "SHNDHrs";
$tdataindschedule[".masterListFields"][] = "CHNDHrs";
$tdataindschedule[".masterListFields"][] = "NDMealAllowance";
$tdataindschedule[".masterListFields"][] = "NDMealAllowancePerShift";
$tdataindschedule[".masterListFields"][] = "NDMinimumHrs";
$tdataindschedule[".masterListFields"][] = "ExcessHrs";
$tdataindschedule[".masterListFields"][] = "ApprovedOT";
$tdataindschedule[".masterListFields"][] = "AOTMins";
$tdataindschedule[".masterListFields"][] = "RegOTHrs";
$tdataindschedule[".masterListFields"][] = "RDOTHrs";
$tdataindschedule[".masterListFields"][] = "SHOTHrs";
$tdataindschedule[".masterListFields"][] = "CHOTHrs";
$tdataindschedule[".masterListFields"][] = "RHOTHrs";
$tdataindschedule[".masterListFields"][] = "TrODay";
$tdataindschedule[".masterListFields"][] = "RDMins";
$tdataindschedule[".masterListFields"][] = "ApprovedRD";
$tdataindschedule[".masterListFields"][] = "VLDay";
$tdataindschedule[".masterListFields"][] = "SLDay";
$tdataindschedule[".masterListFields"][] = "ELDay";
$tdataindschedule[".masterListFields"][] = "PLDay";
$tdataindschedule[".masterListFields"][] = "SchedType";
$tdataindschedule[".masterListFields"][] = "Shift";
$tdataindschedule[".masterListFields"][] = "MinsPerDay";
$tdataindschedule[".masterListFields"][] = "BreakMins";

$tdataindschedule[".inlineAddFields"] = array();
$tdataindschedule[".inlineAddFields"][] = "EmployeeID";
$tdataindschedule[".inlineAddFields"][] = "UserName";
$tdataindschedule[".inlineAddFields"][] = "Employer";
$tdataindschedule[".inlineAddFields"][] = "Division";
$tdataindschedule[".inlineAddFields"][] = "Department";
$tdataindschedule[".inlineAddFields"][] = "WageType";
$tdataindschedule[".inlineAddFields"][] = "SDate";
$tdataindschedule[".inlineAddFields"][] = "DayIs";
$tdataindschedule[".inlineAddFields"][] = "RestDay";
$tdataindschedule[".inlineAddFields"][] = "STimeIn";
$tdataindschedule[".inlineAddFields"][] = "STimeOut";
$tdataindschedule[".inlineAddFields"][] = "TimeIn";
$tdataindschedule[".inlineAddFields"][] = "TimeOut";
$tdataindschedule[".inlineAddFields"][] = "LateMins";
$tdataindschedule[".inlineAddFields"][] = "UndertimeMins";
$tdataindschedule[".inlineAddFields"][] = "BreakLateMins";
$tdataindschedule[".inlineAddFields"][] = "LatePenaltyMins";
$tdataindschedule[".inlineAddFields"][] = "TotLateMins";
$tdataindschedule[".inlineAddFields"][] = "LunchBreakFrom";
$tdataindschedule[".inlineAddFields"][] = "LunchBreakTo";
$tdataindschedule[".inlineAddFields"][] = "AfterBreakLogOut";
$tdataindschedule[".inlineAddFields"][] = "AfterBreakLog";
$tdataindschedule[".inlineAddFields"][] = "Mispunched";
$tdataindschedule[".inlineAddFields"][] = "RegWD";
$tdataindschedule[".inlineAddFields"][] = "DWork";
$tdataindschedule[".inlineAddFields"][] = "Absent";
$tdataindschedule[".inlineAddFields"][] = "PreLogMins";
$tdataindschedule[".inlineAddFields"][] = "IncludeBreakLate";
$tdataindschedule[".inlineAddFields"][] = "GracePeriodMins";
$tdataindschedule[".inlineAddFields"][] = "LateFixPenalty";
$tdataindschedule[".inlineAddFields"][] = "HolidayType";
$tdataindschedule[".inlineAddFields"][] = "Holiday1stHalf";
$tdataindschedule[".inlineAddFields"][] = "Holiday2ndHalf";
$tdataindschedule[".inlineAddFields"][] = "RHolidayHrs";
$tdataindschedule[".inlineAddFields"][] = "SHolidayHrs";
$tdataindschedule[".inlineAddFields"][] = "CHolidayHrs";
$tdataindschedule[".inlineAddFields"][] = "NDHrs";
$tdataindschedule[".inlineAddFields"][] = "ApprovedNightDiff";
$tdataindschedule[".inlineAddFields"][] = "ANDiff";
$tdataindschedule[".inlineAddFields"][] = "RegNDHrs";
$tdataindschedule[".inlineAddFields"][] = "RDHrs";
$tdataindschedule[".inlineAddFields"][] = "RHNDHrs";
$tdataindschedule[".inlineAddFields"][] = "RDNDHrs";
$tdataindschedule[".inlineAddFields"][] = "SHNDHrs";
$tdataindschedule[".inlineAddFields"][] = "CHNDHrs";
$tdataindschedule[".inlineAddFields"][] = "NDMealAllowance";
$tdataindschedule[".inlineAddFields"][] = "NDMealAllowancePerShift";
$tdataindschedule[".inlineAddFields"][] = "NDMinimumHrs";
$tdataindschedule[".inlineAddFields"][] = "ExcessHrs";
$tdataindschedule[".inlineAddFields"][] = "ApprovedOT";
$tdataindschedule[".inlineAddFields"][] = "AOTMins";
$tdataindschedule[".inlineAddFields"][] = "RegOTHrs";
$tdataindschedule[".inlineAddFields"][] = "RDOTHrs";
$tdataindschedule[".inlineAddFields"][] = "SHOTHrs";
$tdataindschedule[".inlineAddFields"][] = "CHOTHrs";
$tdataindschedule[".inlineAddFields"][] = "RHOTHrs";
$tdataindschedule[".inlineAddFields"][] = "TrODay";
$tdataindschedule[".inlineAddFields"][] = "RDMins";
$tdataindschedule[".inlineAddFields"][] = "ApprovedRD";
$tdataindschedule[".inlineAddFields"][] = "VLDay";
$tdataindschedule[".inlineAddFields"][] = "SLDay";
$tdataindschedule[".inlineAddFields"][] = "ELDay";
$tdataindschedule[".inlineAddFields"][] = "PLDay";
$tdataindschedule[".inlineAddFields"][] = "SchedType";
$tdataindschedule[".inlineAddFields"][] = "Shift";
$tdataindschedule[".inlineAddFields"][] = "MinsPerDay";
$tdataindschedule[".inlineAddFields"][] = "BreakMins";

$tdataindschedule[".editFields"] = array();
$tdataindschedule[".editFields"][] = "BreakLateMins";
$tdataindschedule[".editFields"][] = "EmployeeID";
$tdataindschedule[".editFields"][] = "UserName";
$tdataindschedule[".editFields"][] = "Employer";
$tdataindschedule[".editFields"][] = "Division";
$tdataindschedule[".editFields"][] = "Department";
$tdataindschedule[".editFields"][] = "WageType";
$tdataindschedule[".editFields"][] = "SDate";
$tdataindschedule[".editFields"][] = "DayIs";
$tdataindschedule[".editFields"][] = "RestDay";
$tdataindschedule[".editFields"][] = "STimeIn";
$tdataindschedule[".editFields"][] = "STimeOut";
$tdataindschedule[".editFields"][] = "TimeIn";
$tdataindschedule[".editFields"][] = "TimeOut";
$tdataindschedule[".editFields"][] = "LunchBreakFrom";
$tdataindschedule[".editFields"][] = "LunchBreakTo";
$tdataindschedule[".editFields"][] = "AfterBreakLogOut";
$tdataindschedule[".editFields"][] = "AfterBreakLog";
$tdataindschedule[".editFields"][] = "Mispunched";
$tdataindschedule[".editFields"][] = "RegWD";
$tdataindschedule[".editFields"][] = "DWork";
$tdataindschedule[".editFields"][] = "Absent";
$tdataindschedule[".editFields"][] = "PreLogMins";
$tdataindschedule[".editFields"][] = "IncludeBreakLate";
$tdataindschedule[".editFields"][] = "GracePeriodMins";
$tdataindschedule[".editFields"][] = "LateMins";
$tdataindschedule[".editFields"][] = "UndertimeMins";
$tdataindschedule[".editFields"][] = "LatePenaltyMins";
$tdataindschedule[".editFields"][] = "TotLateMins";
$tdataindschedule[".editFields"][] = "LateFixPenalty";
$tdataindschedule[".editFields"][] = "HolidayType";
$tdataindschedule[".editFields"][] = "Holiday1stHalf";
$tdataindschedule[".editFields"][] = "Holiday2ndHalf";
$tdataindschedule[".editFields"][] = "RHolidayHrs";
$tdataindschedule[".editFields"][] = "SHolidayHrs";
$tdataindschedule[".editFields"][] = "CHolidayHrs";
$tdataindschedule[".editFields"][] = "NDHrs";
$tdataindschedule[".editFields"][] = "ApprovedNightDiff";
$tdataindschedule[".editFields"][] = "ANDiff";
$tdataindschedule[".editFields"][] = "RegNDHrs";
$tdataindschedule[".editFields"][] = "RDHrs";
$tdataindschedule[".editFields"][] = "RHNDHrs";
$tdataindschedule[".editFields"][] = "RDNDHrs";
$tdataindschedule[".editFields"][] = "SHNDHrs";
$tdataindschedule[".editFields"][] = "CHNDHrs";
$tdataindschedule[".editFields"][] = "NDMealAllowance";
$tdataindschedule[".editFields"][] = "NDMealAllowancePerShift";
$tdataindschedule[".editFields"][] = "NDMinimumHrs";
$tdataindschedule[".editFields"][] = "ExcessHrs";
$tdataindschedule[".editFields"][] = "ApprovedOT";
$tdataindschedule[".editFields"][] = "AOTMins";
$tdataindschedule[".editFields"][] = "RegOTHrs";
$tdataindschedule[".editFields"][] = "RDOTHrs";
$tdataindschedule[".editFields"][] = "SHOTHrs";
$tdataindschedule[".editFields"][] = "CHOTHrs";
$tdataindschedule[".editFields"][] = "RHOTHrs";
$tdataindschedule[".editFields"][] = "TrODay";
$tdataindschedule[".editFields"][] = "RDMins";
$tdataindschedule[".editFields"][] = "ApprovedRD";
$tdataindschedule[".editFields"][] = "VLDay";
$tdataindschedule[".editFields"][] = "SLDay";
$tdataindschedule[".editFields"][] = "ELDay";
$tdataindschedule[".editFields"][] = "PLDay";
$tdataindschedule[".editFields"][] = "SchedType";
$tdataindschedule[".editFields"][] = "Shift";
$tdataindschedule[".editFields"][] = "MinsPerDay";
$tdataindschedule[".editFields"][] = "BreakMins";

$tdataindschedule[".inlineEditFields"] = array();
$tdataindschedule[".inlineEditFields"][] = "EmployeeID";
$tdataindschedule[".inlineEditFields"][] = "UserName";
$tdataindschedule[".inlineEditFields"][] = "Employer";
$tdataindschedule[".inlineEditFields"][] = "Division";
$tdataindschedule[".inlineEditFields"][] = "Department";
$tdataindschedule[".inlineEditFields"][] = "WageType";
$tdataindschedule[".inlineEditFields"][] = "SDate";
$tdataindschedule[".inlineEditFields"][] = "DayIs";
$tdataindschedule[".inlineEditFields"][] = "RestDay";
$tdataindschedule[".inlineEditFields"][] = "STimeIn";
$tdataindschedule[".inlineEditFields"][] = "STimeOut";
$tdataindschedule[".inlineEditFields"][] = "TimeIn";
$tdataindschedule[".inlineEditFields"][] = "TimeOut";
$tdataindschedule[".inlineEditFields"][] = "LateMins";
$tdataindschedule[".inlineEditFields"][] = "UndertimeMins";
$tdataindschedule[".inlineEditFields"][] = "BreakLateMins";
$tdataindschedule[".inlineEditFields"][] = "LatePenaltyMins";
$tdataindschedule[".inlineEditFields"][] = "TotLateMins";
$tdataindschedule[".inlineEditFields"][] = "LunchBreakFrom";
$tdataindschedule[".inlineEditFields"][] = "LunchBreakTo";
$tdataindschedule[".inlineEditFields"][] = "AfterBreakLogOut";
$tdataindschedule[".inlineEditFields"][] = "AfterBreakLog";
$tdataindschedule[".inlineEditFields"][] = "Mispunched";
$tdataindschedule[".inlineEditFields"][] = "RegWD";
$tdataindschedule[".inlineEditFields"][] = "DWork";
$tdataindschedule[".inlineEditFields"][] = "Absent";
$tdataindschedule[".inlineEditFields"][] = "PreLogMins";
$tdataindschedule[".inlineEditFields"][] = "IncludeBreakLate";
$tdataindschedule[".inlineEditFields"][] = "GracePeriodMins";
$tdataindschedule[".inlineEditFields"][] = "LateFixPenalty";
$tdataindschedule[".inlineEditFields"][] = "HolidayType";
$tdataindschedule[".inlineEditFields"][] = "Holiday1stHalf";
$tdataindschedule[".inlineEditFields"][] = "Holiday2ndHalf";
$tdataindschedule[".inlineEditFields"][] = "RHolidayHrs";
$tdataindschedule[".inlineEditFields"][] = "SHolidayHrs";
$tdataindschedule[".inlineEditFields"][] = "CHolidayHrs";
$tdataindschedule[".inlineEditFields"][] = "NDHrs";
$tdataindschedule[".inlineEditFields"][] = "ApprovedNightDiff";
$tdataindschedule[".inlineEditFields"][] = "ANDiff";
$tdataindschedule[".inlineEditFields"][] = "RegNDHrs";
$tdataindschedule[".inlineEditFields"][] = "RDHrs";
$tdataindschedule[".inlineEditFields"][] = "RHNDHrs";
$tdataindschedule[".inlineEditFields"][] = "RDNDHrs";
$tdataindschedule[".inlineEditFields"][] = "SHNDHrs";
$tdataindschedule[".inlineEditFields"][] = "CHNDHrs";
$tdataindschedule[".inlineEditFields"][] = "NDMealAllowance";
$tdataindschedule[".inlineEditFields"][] = "NDMealAllowancePerShift";
$tdataindschedule[".inlineEditFields"][] = "NDMinimumHrs";
$tdataindschedule[".inlineEditFields"][] = "ExcessHrs";
$tdataindschedule[".inlineEditFields"][] = "ApprovedOT";
$tdataindschedule[".inlineEditFields"][] = "AOTMins";
$tdataindschedule[".inlineEditFields"][] = "RegOTHrs";
$tdataindschedule[".inlineEditFields"][] = "RDOTHrs";
$tdataindschedule[".inlineEditFields"][] = "SHOTHrs";
$tdataindschedule[".inlineEditFields"][] = "CHOTHrs";
$tdataindschedule[".inlineEditFields"][] = "RHOTHrs";
$tdataindschedule[".inlineEditFields"][] = "TrODay";
$tdataindschedule[".inlineEditFields"][] = "RDMins";
$tdataindschedule[".inlineEditFields"][] = "ApprovedRD";
$tdataindschedule[".inlineEditFields"][] = "VLDay";
$tdataindschedule[".inlineEditFields"][] = "SLDay";
$tdataindschedule[".inlineEditFields"][] = "ELDay";
$tdataindschedule[".inlineEditFields"][] = "PLDay";
$tdataindschedule[".inlineEditFields"][] = "SchedType";
$tdataindschedule[".inlineEditFields"][] = "Shift";
$tdataindschedule[".inlineEditFields"][] = "MinsPerDay";
$tdataindschedule[".inlineEditFields"][] = "BreakMins";

$tdataindschedule[".updateSelectedFields"] = array();
$tdataindschedule[".updateSelectedFields"][] = "EmployeeID";
$tdataindschedule[".updateSelectedFields"][] = "UserName";
$tdataindschedule[".updateSelectedFields"][] = "Employer";
$tdataindschedule[".updateSelectedFields"][] = "Division";
$tdataindschedule[".updateSelectedFields"][] = "Department";
$tdataindschedule[".updateSelectedFields"][] = "WageType";
$tdataindschedule[".updateSelectedFields"][] = "SDate";
$tdataindschedule[".updateSelectedFields"][] = "DayIs";
$tdataindschedule[".updateSelectedFields"][] = "RestDay";
$tdataindschedule[".updateSelectedFields"][] = "STimeIn";
$tdataindschedule[".updateSelectedFields"][] = "STimeOut";
$tdataindschedule[".updateSelectedFields"][] = "TimeIn";
$tdataindschedule[".updateSelectedFields"][] = "TimeOut";
$tdataindschedule[".updateSelectedFields"][] = "LunchBreakFrom";
$tdataindschedule[".updateSelectedFields"][] = "LunchBreakTo";
$tdataindschedule[".updateSelectedFields"][] = "Mispunched";
$tdataindschedule[".updateSelectedFields"][] = "RegWD";
$tdataindschedule[".updateSelectedFields"][] = "DWork";
$tdataindschedule[".updateSelectedFields"][] = "Absent";
$tdataindschedule[".updateSelectedFields"][] = "LateMins";
$tdataindschedule[".updateSelectedFields"][] = "UndertimeMins";
$tdataindschedule[".updateSelectedFields"][] = "LatePenaltyMins";
$tdataindschedule[".updateSelectedFields"][] = "TotLateMins";
$tdataindschedule[".updateSelectedFields"][] = "LateFixPenalty";
$tdataindschedule[".updateSelectedFields"][] = "HolidayType";
$tdataindschedule[".updateSelectedFields"][] = "Holiday1stHalf";
$tdataindschedule[".updateSelectedFields"][] = "Holiday2ndHalf";
$tdataindschedule[".updateSelectedFields"][] = "RHolidayHrs";
$tdataindschedule[".updateSelectedFields"][] = "SHolidayHrs";
$tdataindschedule[".updateSelectedFields"][] = "CHolidayHrs";
$tdataindschedule[".updateSelectedFields"][] = "NDHrs";
$tdataindschedule[".updateSelectedFields"][] = "ApprovedNightDiff";
$tdataindschedule[".updateSelectedFields"][] = "ANDiff";
$tdataindschedule[".updateSelectedFields"][] = "RegNDHrs";
$tdataindschedule[".updateSelectedFields"][] = "RDHrs";
$tdataindschedule[".updateSelectedFields"][] = "RHNDHrs";
$tdataindschedule[".updateSelectedFields"][] = "RDNDHrs";
$tdataindschedule[".updateSelectedFields"][] = "SHNDHrs";
$tdataindschedule[".updateSelectedFields"][] = "CHNDHrs";
$tdataindschedule[".updateSelectedFields"][] = "NDMealAllowance";
$tdataindschedule[".updateSelectedFields"][] = "NDMealAllowancePerShift";
$tdataindschedule[".updateSelectedFields"][] = "NDMinimumHrs";
$tdataindschedule[".updateSelectedFields"][] = "ExcessHrs";
$tdataindschedule[".updateSelectedFields"][] = "ApprovedOT";
$tdataindschedule[".updateSelectedFields"][] = "AOTMins";
$tdataindschedule[".updateSelectedFields"][] = "RegOTHrs";
$tdataindschedule[".updateSelectedFields"][] = "RDOTHrs";
$tdataindschedule[".updateSelectedFields"][] = "SHOTHrs";
$tdataindschedule[".updateSelectedFields"][] = "CHOTHrs";
$tdataindschedule[".updateSelectedFields"][] = "RHOTHrs";
$tdataindschedule[".updateSelectedFields"][] = "TrODay";
$tdataindschedule[".updateSelectedFields"][] = "RDMins";
$tdataindschedule[".updateSelectedFields"][] = "ApprovedRD";
$tdataindschedule[".updateSelectedFields"][] = "VLDay";
$tdataindschedule[".updateSelectedFields"][] = "SLDay";
$tdataindschedule[".updateSelectedFields"][] = "ELDay";
$tdataindschedule[".updateSelectedFields"][] = "PLDay";
$tdataindschedule[".updateSelectedFields"][] = "SchedType";
$tdataindschedule[".updateSelectedFields"][] = "Shift";
$tdataindschedule[".updateSelectedFields"][] = "MinsPerDay";
$tdataindschedule[".updateSelectedFields"][] = "BreakMins";


$tdataindschedule[".exportFields"] = array();
$tdataindschedule[".exportFields"][] = "ScID";
$tdataindschedule[".exportFields"][] = "EmployeeID";
$tdataindschedule[".exportFields"][] = "UserName";
$tdataindschedule[".exportFields"][] = "Employer";
$tdataindschedule[".exportFields"][] = "Division";
$tdataindschedule[".exportFields"][] = "Department";
$tdataindschedule[".exportFields"][] = "WageType";
$tdataindschedule[".exportFields"][] = "SDate";
$tdataindschedule[".exportFields"][] = "DayIs";
$tdataindschedule[".exportFields"][] = "RestDay";
$tdataindschedule[".exportFields"][] = "STimeIn";
$tdataindschedule[".exportFields"][] = "STimeOut";
$tdataindschedule[".exportFields"][] = "TimeIn";
$tdataindschedule[".exportFields"][] = "TimeOut";
$tdataindschedule[".exportFields"][] = "LateMins";
$tdataindschedule[".exportFields"][] = "UndertimeMins";
$tdataindschedule[".exportFields"][] = "BreakLateMins";
$tdataindschedule[".exportFields"][] = "LatePenaltyMins";
$tdataindschedule[".exportFields"][] = "TotLateMins";
$tdataindschedule[".exportFields"][] = "LunchBreakFrom";
$tdataindschedule[".exportFields"][] = "LunchBreakTo";
$tdataindschedule[".exportFields"][] = "AfterBreakLogOut";
$tdataindschedule[".exportFields"][] = "AfterBreakLog";
$tdataindschedule[".exportFields"][] = "Mispunched";
$tdataindschedule[".exportFields"][] = "RegWD";
$tdataindschedule[".exportFields"][] = "DWork";
$tdataindschedule[".exportFields"][] = "Absent";
$tdataindschedule[".exportFields"][] = "PreLogMins";
$tdataindschedule[".exportFields"][] = "IncludeBreakLate";
$tdataindschedule[".exportFields"][] = "GracePeriodMins";
$tdataindschedule[".exportFields"][] = "LateFixPenalty";
$tdataindschedule[".exportFields"][] = "HolidayType";
$tdataindschedule[".exportFields"][] = "Holiday1stHalf";
$tdataindschedule[".exportFields"][] = "Holiday2ndHalf";
$tdataindschedule[".exportFields"][] = "RHolidayHrs";
$tdataindschedule[".exportFields"][] = "SHolidayHrs";
$tdataindschedule[".exportFields"][] = "CHolidayHrs";
$tdataindschedule[".exportFields"][] = "NDHrs";
$tdataindschedule[".exportFields"][] = "ApprovedNightDiff";
$tdataindschedule[".exportFields"][] = "ANDiff";
$tdataindschedule[".exportFields"][] = "RegNDHrs";
$tdataindschedule[".exportFields"][] = "RDHrs";
$tdataindschedule[".exportFields"][] = "RHNDHrs";
$tdataindschedule[".exportFields"][] = "RDNDHrs";
$tdataindschedule[".exportFields"][] = "SHNDHrs";
$tdataindschedule[".exportFields"][] = "CHNDHrs";
$tdataindschedule[".exportFields"][] = "NDMealAllowance";
$tdataindschedule[".exportFields"][] = "NDMealAllowancePerShift";
$tdataindschedule[".exportFields"][] = "NDMinimumHrs";
$tdataindschedule[".exportFields"][] = "ExcessHrs";
$tdataindschedule[".exportFields"][] = "ApprovedOT";
$tdataindschedule[".exportFields"][] = "AOTMins";
$tdataindschedule[".exportFields"][] = "RegOTHrs";
$tdataindschedule[".exportFields"][] = "RDOTHrs";
$tdataindschedule[".exportFields"][] = "SHOTHrs";
$tdataindschedule[".exportFields"][] = "CHOTHrs";
$tdataindschedule[".exportFields"][] = "RHOTHrs";
$tdataindschedule[".exportFields"][] = "TrODay";
$tdataindschedule[".exportFields"][] = "RDMins";
$tdataindschedule[".exportFields"][] = "ApprovedRD";
$tdataindschedule[".exportFields"][] = "VLDay";
$tdataindschedule[".exportFields"][] = "SLDay";
$tdataindschedule[".exportFields"][] = "ELDay";
$tdataindschedule[".exportFields"][] = "PLDay";
$tdataindschedule[".exportFields"][] = "SchedType";
$tdataindschedule[".exportFields"][] = "Shift";
$tdataindschedule[".exportFields"][] = "MinsPerDay";
$tdataindschedule[".exportFields"][] = "BreakMins";

$tdataindschedule[".importFields"] = array();
$tdataindschedule[".importFields"][] = "ScID";
$tdataindschedule[".importFields"][] = "UserName";
$tdataindschedule[".importFields"][] = "SDate";
$tdataindschedule[".importFields"][] = "STimeIn";
$tdataindschedule[".importFields"][] = "STimeOut";
$tdataindschedule[".importFields"][] = "SchedType";
$tdataindschedule[".importFields"][] = "ApprovedOT";
$tdataindschedule[".importFields"][] = "AOTMins";
$tdataindschedule[".importFields"][] = "WageType";
$tdataindschedule[".importFields"][] = "ApprovedNightDiff";
$tdataindschedule[".importFields"][] = "ANDiff";
$tdataindschedule[".importFields"][] = "EmployeeID";
$tdataindschedule[".importFields"][] = "MinsPerDay";
$tdataindschedule[".importFields"][] = "BreakMins";
$tdataindschedule[".importFields"][] = "Shift";
$tdataindschedule[".importFields"][] = "ApprovedRD";
$tdataindschedule[".importFields"][] = "RDMins";
$tdataindschedule[".importFields"][] = "LunchBreakFrom";
$tdataindschedule[".importFields"][] = "LunchBreakTo";
$tdataindschedule[".importFields"][] = "NDMealAllowancePerShift";
$tdataindschedule[".importFields"][] = "NDMinimumHrs";
$tdataindschedule[".importFields"][] = "NDMealAllowance";
$tdataindschedule[".importFields"][] = "Division";
$tdataindschedule[".importFields"][] = "TimeIn";
$tdataindschedule[".importFields"][] = "TimeOut";
$tdataindschedule[".importFields"][] = "DayIs";
$tdataindschedule[".importFields"][] = "RestDay";
$tdataindschedule[".importFields"][] = "Department";
$tdataindschedule[".importFields"][] = "RegWD";
$tdataindschedule[".importFields"][] = "DWork";
$tdataindschedule[".importFields"][] = "Absent";
$tdataindschedule[".importFields"][] = "LateMins";
$tdataindschedule[".importFields"][] = "UndertimeMins";
$tdataindschedule[".importFields"][] = "RHolidayHrs";
$tdataindschedule[".importFields"][] = "SHolidayHrs";
$tdataindschedule[".importFields"][] = "CHolidayHrs";
$tdataindschedule[".importFields"][] = "ExcessHrs";
$tdataindschedule[".importFields"][] = "RegOTHrs";
$tdataindschedule[".importFields"][] = "RHOTHrs";
$tdataindschedule[".importFields"][] = "SHOTHrs";
$tdataindschedule[".importFields"][] = "CHOTHrs";
$tdataindschedule[".importFields"][] = "RDOTHrs";
$tdataindschedule[".importFields"][] = "NDHrs";
$tdataindschedule[".importFields"][] = "RDHrs";
$tdataindschedule[".importFields"][] = "RegNDHrs";
$tdataindschedule[".importFields"][] = "RHNDHrs";
$tdataindschedule[".importFields"][] = "SHNDHrs";
$tdataindschedule[".importFields"][] = "CHNDHrs";
$tdataindschedule[".importFields"][] = "RDNDHrs";
$tdataindschedule[".importFields"][] = "VLDay";
$tdataindschedule[".importFields"][] = "SLDay";
$tdataindschedule[".importFields"][] = "ELDay";
$tdataindschedule[".importFields"][] = "PLDay";
$tdataindschedule[".importFields"][] = "TrODay";
$tdataindschedule[".importFields"][] = "HolidayType";
$tdataindschedule[".importFields"][] = "Mispunched";
$tdataindschedule[".importFields"][] = "Holiday1stHalf";
$tdataindschedule[".importFields"][] = "Holiday2ndHalf";
$tdataindschedule[".importFields"][] = "TotLateMins";
$tdataindschedule[".importFields"][] = "LatePenaltyMins";
$tdataindschedule[".importFields"][] = "Employer";
$tdataindschedule[".importFields"][] = "LateFixPenalty";
$tdataindschedule[".importFields"][] = "AfterBreakLogOut";
$tdataindschedule[".importFields"][] = "AfterBreakLog";
$tdataindschedule[".importFields"][] = "PreLogMins";
$tdataindschedule[".importFields"][] = "IncludeBreakLate";
$tdataindschedule[".importFields"][] = "GracePeriodMins";
$tdataindschedule[".importFields"][] = "BreakLateMins";

$tdataindschedule[".printFields"] = array();
$tdataindschedule[".printFields"][] = "ScID";
$tdataindschedule[".printFields"][] = "EmployeeID";
$tdataindschedule[".printFields"][] = "UserName";
$tdataindschedule[".printFields"][] = "Employer";
$tdataindschedule[".printFields"][] = "Division";
$tdataindschedule[".printFields"][] = "Department";
$tdataindschedule[".printFields"][] = "WageType";
$tdataindschedule[".printFields"][] = "SDate";
$tdataindschedule[".printFields"][] = "DayIs";
$tdataindschedule[".printFields"][] = "RestDay";
$tdataindschedule[".printFields"][] = "STimeIn";
$tdataindschedule[".printFields"][] = "STimeOut";
$tdataindschedule[".printFields"][] = "TimeIn";
$tdataindschedule[".printFields"][] = "TimeOut";
$tdataindschedule[".printFields"][] = "LateMins";
$tdataindschedule[".printFields"][] = "UndertimeMins";
$tdataindschedule[".printFields"][] = "BreakLateMins";
$tdataindschedule[".printFields"][] = "LatePenaltyMins";
$tdataindschedule[".printFields"][] = "TotLateMins";
$tdataindschedule[".printFields"][] = "LunchBreakFrom";
$tdataindschedule[".printFields"][] = "LunchBreakTo";
$tdataindschedule[".printFields"][] = "AfterBreakLogOut";
$tdataindschedule[".printFields"][] = "AfterBreakLog";
$tdataindschedule[".printFields"][] = "Mispunched";
$tdataindschedule[".printFields"][] = "RegWD";
$tdataindschedule[".printFields"][] = "DWork";
$tdataindschedule[".printFields"][] = "Absent";
$tdataindschedule[".printFields"][] = "PreLogMins";
$tdataindschedule[".printFields"][] = "IncludeBreakLate";
$tdataindschedule[".printFields"][] = "GracePeriodMins";
$tdataindschedule[".printFields"][] = "LateFixPenalty";
$tdataindschedule[".printFields"][] = "HolidayType";
$tdataindschedule[".printFields"][] = "Holiday1stHalf";
$tdataindschedule[".printFields"][] = "Holiday2ndHalf";
$tdataindschedule[".printFields"][] = "RHolidayHrs";
$tdataindschedule[".printFields"][] = "SHolidayHrs";
$tdataindschedule[".printFields"][] = "CHolidayHrs";
$tdataindschedule[".printFields"][] = "NDHrs";
$tdataindschedule[".printFields"][] = "ApprovedNightDiff";
$tdataindschedule[".printFields"][] = "ANDiff";
$tdataindschedule[".printFields"][] = "RegNDHrs";
$tdataindschedule[".printFields"][] = "RDHrs";
$tdataindschedule[".printFields"][] = "RHNDHrs";
$tdataindschedule[".printFields"][] = "RDNDHrs";
$tdataindschedule[".printFields"][] = "SHNDHrs";
$tdataindschedule[".printFields"][] = "CHNDHrs";
$tdataindschedule[".printFields"][] = "NDMealAllowance";
$tdataindschedule[".printFields"][] = "NDMealAllowancePerShift";
$tdataindschedule[".printFields"][] = "NDMinimumHrs";
$tdataindschedule[".printFields"][] = "ExcessHrs";
$tdataindschedule[".printFields"][] = "ApprovedOT";
$tdataindschedule[".printFields"][] = "AOTMins";
$tdataindschedule[".printFields"][] = "RegOTHrs";
$tdataindschedule[".printFields"][] = "RDOTHrs";
$tdataindschedule[".printFields"][] = "SHOTHrs";
$tdataindschedule[".printFields"][] = "CHOTHrs";
$tdataindschedule[".printFields"][] = "RHOTHrs";
$tdataindschedule[".printFields"][] = "TrODay";
$tdataindschedule[".printFields"][] = "RDMins";
$tdataindschedule[".printFields"][] = "ApprovedRD";
$tdataindschedule[".printFields"][] = "VLDay";
$tdataindschedule[".printFields"][] = "SLDay";
$tdataindschedule[".printFields"][] = "ELDay";
$tdataindschedule[".printFields"][] = "PLDay";
$tdataindschedule[".printFields"][] = "SchedType";
$tdataindschedule[".printFields"][] = "Shift";
$tdataindschedule[".printFields"][] = "MinsPerDay";
$tdataindschedule[".printFields"][] = "BreakMins";


//	ScID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ScID";
	$fdata["GoodName"] = "ScID";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","ScID");
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








	$tdataindschedule["ScID"] = $fdata;
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","UserName");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataindschedule["UserName"] = $fdata;
//	SDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SDate";
	$fdata["GoodName"] = "SDate";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","SDate");
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




	$tdataindschedule["SDate"] = $fdata;
//	STimeIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "STimeIn";
	$fdata["GoodName"] = "STimeIn";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","STimeIn");
	$fdata["FieldType"] = 134;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataindschedule["STimeIn"] = $fdata;
//	STimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "STimeOut";
	$fdata["GoodName"] = "STimeOut";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","STimeOut");
	$fdata["FieldType"] = 134;

	
	
	
			
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataindschedule["STimeOut"] = $fdata;
//	SchedType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SchedType";
	$fdata["GoodName"] = "SchedType";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","SchedType");
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








	$tdataindschedule["SchedType"] = $fdata;
//	ApprovedOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ApprovedOT";
	$fdata["GoodName"] = "ApprovedOT";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","ApprovedOT");
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

		$fdata["strField"] = "ApprovedOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ApprovedOT";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 40;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataindschedule["ApprovedOT"] = $fdata;
//	AOTMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "AOTMins";
	$fdata["GoodName"] = "AOTMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","AOTMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AOTMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AOTMins";

	
	
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
		
		$edata["controlWidth"] = 80;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataindschedule["AOTMins"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","WageType");
	$fdata["FieldType"] = 3;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataindschedule["WageType"] = $fdata;
//	ApprovedNightDiff
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ApprovedNightDiff";
	$fdata["GoodName"] = "ApprovedNightDiff";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","ApprovedNightDiff");
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

		$fdata["strField"] = "ApprovedNightDiff";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ApprovedNightDiff";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 40;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataindschedule["ApprovedNightDiff"] = $fdata;
//	ANDiff
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ANDiff";
	$fdata["GoodName"] = "ANDiff";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","ANDiff");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ANDiff";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ANDiff";

	
	
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
		
		$edata["controlWidth"] = 80;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataindschedule["ANDiff"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","EmployeeID");
	$fdata["FieldType"] = 3;

	
	
	
			
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataindschedule["EmployeeID"] = $fdata;
//	MinsPerDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "MinsPerDay";
	$fdata["GoodName"] = "MinsPerDay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","MinsPerDay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MinsPerDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MinsPerDay";

	
	
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
		
		$edata["controlWidth"] = 70;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataindschedule["MinsPerDay"] = $fdata;
//	BreakMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "BreakMins";
	$fdata["GoodName"] = "BreakMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","BreakMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BreakMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BreakMins";

	
	
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
		
		$edata["controlWidth"] = 70;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataindschedule["BreakMins"] = $fdata;
//	Shift
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Shift";
	$fdata["GoodName"] = "Shift";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","Shift");
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








	$tdataindschedule["Shift"] = $fdata;
//	ApprovedRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ApprovedRD";
	$fdata["GoodName"] = "ApprovedRD";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","ApprovedRD");
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

		$fdata["strField"] = "ApprovedRD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ApprovedRD";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 40;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataindschedule["ApprovedRD"] = $fdata;
//	RDMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "RDMins";
	$fdata["GoodName"] = "RDMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","RDMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RDMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RDMins";

	
	
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
		
		$edata["controlWidth"] = 80;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataindschedule["RDMins"] = $fdata;
//	LunchBreakFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "LunchBreakFrom";
	$fdata["GoodName"] = "LunchBreakFrom";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","LunchBreakFrom");
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








	$tdataindschedule["LunchBreakFrom"] = $fdata;
//	LunchBreakTo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "LunchBreakTo";
	$fdata["GoodName"] = "LunchBreakTo";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","LunchBreakTo");
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








	$tdataindschedule["LunchBreakTo"] = $fdata;
//	NDMealAllowancePerShift
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "NDMealAllowancePerShift";
	$fdata["GoodName"] = "NDMealAllowancePerShift";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","NDMealAllowancePerShift");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NDMealAllowancePerShift";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NDMealAllowancePerShift";

	
	
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








	$tdataindschedule["NDMealAllowancePerShift"] = $fdata;
//	NDMinimumHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "NDMinimumHrs";
	$fdata["GoodName"] = "NDMinimumHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","NDMinimumHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NDMinimumHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NDMinimumHrs";

	
	
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








	$tdataindschedule["NDMinimumHrs"] = $fdata;
//	NDMealAllowance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "NDMealAllowance";
	$fdata["GoodName"] = "NDMealAllowance";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","NDMealAllowance");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NDMealAllowance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NDMealAllowance";

	
	
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








	$tdataindschedule["NDMealAllowance"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","Division");
	$fdata["FieldType"] = 3;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataindschedule["Division"] = $fdata;
//	TimeIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "TimeIn";
	$fdata["GoodName"] = "TimeIn";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","TimeIn");
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








	$tdataindschedule["TimeIn"] = $fdata;
//	TimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "TimeOut";
	$fdata["GoodName"] = "TimeOut";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","TimeOut");
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








	$tdataindschedule["TimeOut"] = $fdata;
//	DayIs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "DayIs";
	$fdata["GoodName"] = "DayIs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","DayIs");
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








	$tdataindschedule["DayIs"] = $fdata;
//	RestDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "RestDay";
	$fdata["GoodName"] = "RestDay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","RestDay");
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








	$tdataindschedule["RestDay"] = $fdata;
//	Department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Department";
	$fdata["GoodName"] = "Department";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","Department");
	$fdata["FieldType"] = 3;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataindschedule["Department"] = $fdata;
//	RegWD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "RegWD";
	$fdata["GoodName"] = "RegWD";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","RegWD");
	$fdata["FieldType"] = 5;

	
	
	
			
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








	$tdataindschedule["RegWD"] = $fdata;
//	DWork
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "DWork";
	$fdata["GoodName"] = "DWork";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","DWork");
	$fdata["FieldType"] = 5;

	
	
	
			
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








	$tdataindschedule["DWork"] = $fdata;
//	Absent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Absent";
	$fdata["GoodName"] = "Absent";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","Absent");
	$fdata["FieldType"] = 5;

	
	
	
			
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








	$tdataindschedule["Absent"] = $fdata;
//	LateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "LateMins";
	$fdata["GoodName"] = "LateMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","LateMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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








	$tdataindschedule["LateMins"] = $fdata;
//	UndertimeMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "UndertimeMins";
	$fdata["GoodName"] = "UndertimeMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","UndertimeMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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








	$tdataindschedule["UndertimeMins"] = $fdata;
//	RHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "RHolidayHrs";
	$fdata["GoodName"] = "RHolidayHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","RHolidayHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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








	$tdataindschedule["RHolidayHrs"] = $fdata;
//	SHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "SHolidayHrs";
	$fdata["GoodName"] = "SHolidayHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","SHolidayHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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








	$tdataindschedule["SHolidayHrs"] = $fdata;
//	CHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "CHolidayHrs";
	$fdata["GoodName"] = "CHolidayHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","CHolidayHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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








	$tdataindschedule["CHolidayHrs"] = $fdata;
//	ExcessHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "ExcessHrs";
	$fdata["GoodName"] = "ExcessHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","ExcessHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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








	$tdataindschedule["ExcessHrs"] = $fdata;
//	RegOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "RegOTHrs";
	$fdata["GoodName"] = "RegOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","RegOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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








	$tdataindschedule["RegOTHrs"] = $fdata;
//	RHOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "RHOTHrs";
	$fdata["GoodName"] = "RHOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","RHOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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








	$tdataindschedule["RHOTHrs"] = $fdata;
//	SHOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "SHOTHrs";
	$fdata["GoodName"] = "SHOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","SHOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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








	$tdataindschedule["SHOTHrs"] = $fdata;
//	CHOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "CHOTHrs";
	$fdata["GoodName"] = "CHOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","CHOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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








	$tdataindschedule["CHOTHrs"] = $fdata;
//	RDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "RDOTHrs";
	$fdata["GoodName"] = "RDOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","RDOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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








	$tdataindschedule["RDOTHrs"] = $fdata;
//	NDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "NDHrs";
	$fdata["GoodName"] = "NDHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","NDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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








	$tdataindschedule["NDHrs"] = $fdata;
//	RDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "RDHrs";
	$fdata["GoodName"] = "RDHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","RDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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








	$tdataindschedule["RDHrs"] = $fdata;
//	RegNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "RegNDHrs";
	$fdata["GoodName"] = "RegNDHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","RegNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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








	$tdataindschedule["RegNDHrs"] = $fdata;
//	RHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "RHNDHrs";
	$fdata["GoodName"] = "RHNDHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","RHNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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








	$tdataindschedule["RHNDHrs"] = $fdata;
//	SHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "SHNDHrs";
	$fdata["GoodName"] = "SHNDHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","SHNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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








	$tdataindschedule["SHNDHrs"] = $fdata;
//	CHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "CHNDHrs";
	$fdata["GoodName"] = "CHNDHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","CHNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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








	$tdataindschedule["CHNDHrs"] = $fdata;
//	RDNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "RDNDHrs";
	$fdata["GoodName"] = "RDNDHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","RDNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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








	$tdataindschedule["RDNDHrs"] = $fdata;
//	VLDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "VLDay";
	$fdata["GoodName"] = "VLDay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","VLDay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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








	$tdataindschedule["VLDay"] = $fdata;
//	SLDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "SLDay";
	$fdata["GoodName"] = "SLDay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","SLDay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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








	$tdataindschedule["SLDay"] = $fdata;
//	ELDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "ELDay";
	$fdata["GoodName"] = "ELDay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","ELDay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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








	$tdataindschedule["ELDay"] = $fdata;
//	PLDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "PLDay";
	$fdata["GoodName"] = "PLDay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","PLDay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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








	$tdataindschedule["PLDay"] = $fdata;
//	TrODay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "TrODay";
	$fdata["GoodName"] = "TrODay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","TrODay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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








	$tdataindschedule["TrODay"] = $fdata;
//	HolidayType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "HolidayType";
	$fdata["GoodName"] = "HolidayType";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","HolidayType");
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








	$tdataindschedule["HolidayType"] = $fdata;
//	Mispunched
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "Mispunched";
	$fdata["GoodName"] = "Mispunched";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","Mispunched");
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








	$tdataindschedule["Mispunched"] = $fdata;
//	Holiday1stHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "Holiday1stHalf";
	$fdata["GoodName"] = "Holiday1stHalf";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","Holiday1stHalf");
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

		$fdata["strField"] = "Holiday1stHalf";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Holiday1stHalf";

	
	
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








	$tdataindschedule["Holiday1stHalf"] = $fdata;
//	Holiday2ndHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "Holiday2ndHalf";
	$fdata["GoodName"] = "Holiday2ndHalf";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","Holiday2ndHalf");
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

		$fdata["strField"] = "Holiday2ndHalf";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Holiday2ndHalf";

	
	
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








	$tdataindschedule["Holiday2ndHalf"] = $fdata;
//	TotLateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "TotLateMins";
	$fdata["GoodName"] = "TotLateMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","TotLateMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TotLateMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TotLateMins";

	
	
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








	$tdataindschedule["TotLateMins"] = $fdata;
//	LatePenaltyMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "LatePenaltyMins";
	$fdata["GoodName"] = "LatePenaltyMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","LatePenaltyMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LatePenaltyMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LatePenaltyMins";

	
	
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








	$tdataindschedule["LatePenaltyMins"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","Employer");
	$fdata["FieldType"] = 3;

	
	
	
			
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

		$fdata["strField"] = "Employer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Employer";

	
	
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




	$tdataindschedule["Employer"] = $fdata;
//	LateFixPenalty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "LateFixPenalty";
	$fdata["GoodName"] = "LateFixPenalty";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","LateFixPenalty");
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

		$fdata["strField"] = "LateFixPenalty";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LateFixPenalty";

	
	
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








	$tdataindschedule["LateFixPenalty"] = $fdata;
//	AfterBreakLogOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "AfterBreakLogOut";
	$fdata["GoodName"] = "AfterBreakLogOut";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","AfterBreakLogOut");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

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




	$tdataindschedule["AfterBreakLogOut"] = $fdata;
//	AfterBreakLog
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "AfterBreakLog";
	$fdata["GoodName"] = "AfterBreakLog";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","AfterBreakLog");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

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




	$tdataindschedule["AfterBreakLog"] = $fdata;
//	PreLogMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "PreLogMins";
	$fdata["GoodName"] = "PreLogMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","PreLogMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PreLogMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PreLogMins";

	
	
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




	$tdataindschedule["PreLogMins"] = $fdata;
//	IncludeBreakLate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "IncludeBreakLate";
	$fdata["GoodName"] = "IncludeBreakLate";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","IncludeBreakLate");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataindschedule["IncludeBreakLate"] = $fdata;
//	GracePeriodMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "GracePeriodMins";
	$fdata["GoodName"] = "GracePeriodMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","GracePeriodMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "GracePeriodMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GracePeriodMins";

	
	
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




	$tdataindschedule["GracePeriodMins"] = $fdata;
//	BreakLateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "BreakLateMins";
	$fdata["GoodName"] = "BreakLateMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","BreakLateMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BreakLateMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BreakLateMins";

	
	
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




	$tdataindschedule["BreakLateMins"] = $fdata;


$tables_data["indschedule"]=&$tdataindschedule;
$field_labels["indschedule"] = &$fieldLabelsindschedule;
$fieldToolTips["indschedule"] = &$fieldToolTipsindschedule;
$placeHolders["indschedule"] = &$placeHoldersindschedule;
$page_titles["indschedule"] = &$pageTitlesindschedule;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["indschedule"] = array();
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
		
	$detailsTablesData["indschedule"][$dIndex] = $detailsParam;

	
		$detailsTablesData["indschedule"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["indschedule"][$dIndex]["masterKeys"][]="SDate";

	$detailsTablesData["indschedule"][$dIndex]["masterKeys"][]="EmployeeID";

				$detailsTablesData["indschedule"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["indschedule"][$dIndex]["detailKeys"][]="LDate";

		
	$detailsTablesData["indschedule"][$dIndex]["detailKeys"][]="EmployeeID";
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

		$detailsParam["hideChild"] = true;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["indschedule"][$dIndex] = $detailsParam;

	
		$detailsTablesData["indschedule"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["indschedule"][$dIndex]["masterKeys"][]="ScID";

				$detailsTablesData["indschedule"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["indschedule"][$dIndex]["detailKeys"][]="ScID";
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
		
	$detailsTablesData["indschedule"][$dIndex] = $detailsParam;

	
		$detailsTablesData["indschedule"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["indschedule"][$dIndex]["masterKeys"][]="ScID";

				$detailsTablesData["indschedule"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["indschedule"][$dIndex]["detailKeys"][]="ScID";

// tables which are master tables for current table (detail)
$masterTablesData["indschedule"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_indschedule()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ScID,  UserName,  SDate,  STimeIn,  STimeOut,  SchedType,  ApprovedOT,  AOTMins,  WageType,  ApprovedNightDiff,  ANDiff,  EmployeeID,  MinsPerDay,  BreakMins,  Shift,  ApprovedRD,  RDMins,  LunchBreakFrom,  LunchBreakTo,  NDMealAllowancePerShift,  NDMinimumHrs,  NDMealAllowance,  Division,  TimeIn,  TimeOut,  DayIs,  RestDay,  Department,  RegWD,  DWork,  Absent,  LateMins,  UndertimeMins,  RHolidayHrs,  SHolidayHrs,  CHolidayHrs,  ExcessHrs,  RegOTHrs,  RHOTHrs,  SHOTHrs,  CHOTHrs,  RDOTHrs,  NDHrs,  RDHrs,  RegNDHrs,  RHNDHrs,  SHNDHrs,  CHNDHrs,  RDNDHrs,  VLDay,  SLDay,  ELDay,  PLDay,  TrODay,  HolidayType,  Mispunched,  Holiday1stHalf,  Holiday2ndHalf,  TotLateMins,  LatePenaltyMins,  Employer,  LateFixPenalty,  AfterBreakLogOut,  AfterBreakLog,  PreLogMins,  IncludeBreakLate,  GracePeriodMins,  BreakLateMins";
$proto0["m_strFrom"] = "FROM indschedule";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY ScID";
	
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
	"m_srcTableName" => "indschedule"
));

$proto6["m_sql"] = "ScID";
$proto6["m_srcTableName"] = "indschedule";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto8["m_sql"] = "UserName";
$proto8["m_srcTableName"] = "indschedule";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SDate",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto10["m_sql"] = "SDate";
$proto10["m_srcTableName"] = "indschedule";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "STimeIn",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto12["m_sql"] = "STimeIn";
$proto12["m_srcTableName"] = "indschedule";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "STimeOut",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto14["m_sql"] = "STimeOut";
$proto14["m_srcTableName"] = "indschedule";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "SchedType",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto16["m_sql"] = "SchedType";
$proto16["m_srcTableName"] = "indschedule";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedOT",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto18["m_sql"] = "ApprovedOT";
$proto18["m_srcTableName"] = "indschedule";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "AOTMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto20["m_sql"] = "AOTMins";
$proto20["m_srcTableName"] = "indschedule";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "WageType",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto22["m_sql"] = "WageType";
$proto22["m_srcTableName"] = "indschedule";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedNightDiff",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto24["m_sql"] = "ApprovedNightDiff";
$proto24["m_srcTableName"] = "indschedule";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ANDiff",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto26["m_sql"] = "ANDiff";
$proto26["m_srcTableName"] = "indschedule";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto28["m_sql"] = "EmployeeID";
$proto28["m_srcTableName"] = "indschedule";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "MinsPerDay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto30["m_sql"] = "MinsPerDay";
$proto30["m_srcTableName"] = "indschedule";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "BreakMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto32["m_sql"] = "BreakMins";
$proto32["m_srcTableName"] = "indschedule";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Shift",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto34["m_sql"] = "Shift";
$proto34["m_srcTableName"] = "indschedule";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedRD",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto36["m_sql"] = "ApprovedRD";
$proto36["m_srcTableName"] = "indschedule";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "RDMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto38["m_sql"] = "RDMins";
$proto38["m_srcTableName"] = "indschedule";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "LunchBreakFrom",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto40["m_sql"] = "LunchBreakFrom";
$proto40["m_srcTableName"] = "indschedule";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "LunchBreakTo",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto42["m_sql"] = "LunchBreakTo";
$proto42["m_srcTableName"] = "indschedule";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "NDMealAllowancePerShift",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto44["m_sql"] = "NDMealAllowancePerShift";
$proto44["m_srcTableName"] = "indschedule";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "NDMinimumHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto46["m_sql"] = "NDMinimumHrs";
$proto46["m_srcTableName"] = "indschedule";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "NDMealAllowance",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto48["m_sql"] = "NDMealAllowance";
$proto48["m_srcTableName"] = "indschedule";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto50["m_sql"] = "Division";
$proto50["m_srcTableName"] = "indschedule";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeIn",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto52["m_sql"] = "TimeIn";
$proto52["m_srcTableName"] = "indschedule";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeOut",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto54["m_sql"] = "TimeOut";
$proto54["m_srcTableName"] = "indschedule";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "DayIs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto56["m_sql"] = "DayIs";
$proto56["m_srcTableName"] = "indschedule";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "RestDay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto58["m_sql"] = "RestDay";
$proto58["m_srcTableName"] = "indschedule";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto60["m_sql"] = "Department";
$proto60["m_srcTableName"] = "indschedule";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "RegWD",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto62["m_sql"] = "RegWD";
$proto62["m_srcTableName"] = "indschedule";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "DWork",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto64["m_sql"] = "DWork";
$proto64["m_srcTableName"] = "indschedule";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "Absent",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto66["m_sql"] = "Absent";
$proto66["m_srcTableName"] = "indschedule";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "LateMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto68["m_sql"] = "LateMins";
$proto68["m_srcTableName"] = "indschedule";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "UndertimeMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto70["m_sql"] = "UndertimeMins";
$proto70["m_srcTableName"] = "indschedule";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "RHolidayHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto72["m_sql"] = "RHolidayHrs";
$proto72["m_srcTableName"] = "indschedule";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "SHolidayHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto74["m_sql"] = "SHolidayHrs";
$proto74["m_srcTableName"] = "indschedule";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "CHolidayHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto76["m_sql"] = "CHolidayHrs";
$proto76["m_srcTableName"] = "indschedule";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "ExcessHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto78["m_sql"] = "ExcessHrs";
$proto78["m_srcTableName"] = "indschedule";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "RegOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto80["m_sql"] = "RegOTHrs";
$proto80["m_srcTableName"] = "indschedule";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "RHOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto82["m_sql"] = "RHOTHrs";
$proto82["m_srcTableName"] = "indschedule";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto84["m_sql"] = "SHOTHrs";
$proto84["m_srcTableName"] = "indschedule";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "CHOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto86["m_sql"] = "CHOTHrs";
$proto86["m_srcTableName"] = "indschedule";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "RDOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto88["m_sql"] = "RDOTHrs";
$proto88["m_srcTableName"] = "indschedule";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "NDHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto90["m_sql"] = "NDHrs";
$proto90["m_srcTableName"] = "indschedule";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "RDHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto92["m_sql"] = "RDHrs";
$proto92["m_srcTableName"] = "indschedule";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "RegNDHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto94["m_sql"] = "RegNDHrs";
$proto94["m_srcTableName"] = "indschedule";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "RHNDHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto96["m_sql"] = "RHNDHrs";
$proto96["m_srcTableName"] = "indschedule";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "SHNDHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto98["m_sql"] = "SHNDHrs";
$proto98["m_srcTableName"] = "indschedule";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "CHNDHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto100["m_sql"] = "CHNDHrs";
$proto100["m_srcTableName"] = "indschedule";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "RDNDHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto102["m_sql"] = "RDNDHrs";
$proto102["m_srcTableName"] = "indschedule";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "VLDay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto104["m_sql"] = "VLDay";
$proto104["m_srcTableName"] = "indschedule";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "SLDay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto106["m_sql"] = "SLDay";
$proto106["m_srcTableName"] = "indschedule";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "ELDay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto108["m_sql"] = "ELDay";
$proto108["m_srcTableName"] = "indschedule";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "PLDay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto110["m_sql"] = "PLDay";
$proto110["m_srcTableName"] = "indschedule";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "TrODay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto112["m_sql"] = "TrODay";
$proto112["m_srcTableName"] = "indschedule";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "HolidayType",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto114["m_sql"] = "HolidayType";
$proto114["m_srcTableName"] = "indschedule";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "Mispunched",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto116["m_sql"] = "Mispunched";
$proto116["m_srcTableName"] = "indschedule";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "Holiday1stHalf",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto118["m_sql"] = "Holiday1stHalf";
$proto118["m_srcTableName"] = "indschedule";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "Holiday2ndHalf",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto120["m_sql"] = "Holiday2ndHalf";
$proto120["m_srcTableName"] = "indschedule";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "TotLateMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto122["m_sql"] = "TotLateMins";
$proto122["m_srcTableName"] = "indschedule";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "LatePenaltyMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto124["m_sql"] = "LatePenaltyMins";
$proto124["m_srcTableName"] = "indschedule";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto126["m_sql"] = "Employer";
$proto126["m_srcTableName"] = "indschedule";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "LateFixPenalty",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto128["m_sql"] = "LateFixPenalty";
$proto128["m_srcTableName"] = "indschedule";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "AfterBreakLogOut",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto130["m_sql"] = "AfterBreakLogOut";
$proto130["m_srcTableName"] = "indschedule";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "AfterBreakLog",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto132["m_sql"] = "AfterBreakLog";
$proto132["m_srcTableName"] = "indschedule";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "PreLogMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto134["m_sql"] = "PreLogMins";
$proto134["m_srcTableName"] = "indschedule";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "IncludeBreakLate",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto136["m_sql"] = "IncludeBreakLate";
$proto136["m_srcTableName"] = "indschedule";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "GracePeriodMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto138["m_sql"] = "GracePeriodMins";
$proto138["m_srcTableName"] = "indschedule";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "BreakLateMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto140["m_sql"] = "BreakLateMins";
$proto140["m_srcTableName"] = "indschedule";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto142=array();
$proto142["m_link"] = "SQLL_MAIN";
			$proto143=array();
$proto143["m_strName"] = "indschedule";
$proto143["m_srcTableName"] = "indschedule";
$proto143["m_columns"] = array();
$proto143["m_columns"][] = "ScID";
$proto143["m_columns"][] = "UserName";
$proto143["m_columns"][] = "SDate";
$proto143["m_columns"][] = "STimeIn";
$proto143["m_columns"][] = "STimeOut";
$proto143["m_columns"][] = "SchedType";
$proto143["m_columns"][] = "CrossMidnight";
$proto143["m_columns"][] = "RecordOnFirstDay";
$proto143["m_columns"][] = "RecordOnSecondDay";
$proto143["m_columns"][] = "ApprovedOT";
$proto143["m_columns"][] = "AOTMins";
$proto143["m_columns"][] = "SRestDay";
$proto143["m_columns"][] = "WageType";
$proto143["m_columns"][] = "ApprovedNightDiff";
$proto143["m_columns"][] = "ANDiff";
$proto143["m_columns"][] = "EmployeeID";
$proto143["m_columns"][] = "MinsPerDay";
$proto143["m_columns"][] = "BreakMins";
$proto143["m_columns"][] = "Shift";
$proto143["m_columns"][] = "ApprovedRD";
$proto143["m_columns"][] = "RDMins";
$proto143["m_columns"][] = "ScRID";
$proto143["m_columns"][] = "LunchBreakFrom";
$proto143["m_columns"][] = "LunchBreakTo";
$proto143["m_columns"][] = "ReqLogOutInOnBreak";
$proto143["m_columns"][] = "FirstHalfMins";
$proto143["m_columns"][] = "SecondHalfMins";
$proto143["m_columns"][] = "NDMealAllowancePerShift";
$proto143["m_columns"][] = "NDMinimumHrs";
$proto143["m_columns"][] = "NDMealAllowance";
$proto143["m_columns"][] = "Division";
$proto143["m_columns"][] = "TimeIn";
$proto143["m_columns"][] = "TimeOut";
$proto143["m_columns"][] = "DayIs";
$proto143["m_columns"][] = "RestDay";
$proto143["m_columns"][] = "Schedx";
$proto143["m_columns"][] = "Department";
$proto143["m_columns"][] = "RegWD";
$proto143["m_columns"][] = "DWork";
$proto143["m_columns"][] = "Absent";
$proto143["m_columns"][] = "LateMins";
$proto143["m_columns"][] = "UndertimeMins";
$proto143["m_columns"][] = "RHolidayHrs";
$proto143["m_columns"][] = "SHolidayHrs";
$proto143["m_columns"][] = "CHolidayHrs";
$proto143["m_columns"][] = "ExcessHrs";
$proto143["m_columns"][] = "RegOTHrs";
$proto143["m_columns"][] = "RHOTHrs";
$proto143["m_columns"][] = "SHOTHrs";
$proto143["m_columns"][] = "CHOTHrs";
$proto143["m_columns"][] = "RDOTHrs";
$proto143["m_columns"][] = "NDHrs";
$proto143["m_columns"][] = "RDHrs";
$proto143["m_columns"][] = "RegNDHrs";
$proto143["m_columns"][] = "RHNDHrs";
$proto143["m_columns"][] = "SHNDHrs";
$proto143["m_columns"][] = "CHNDHrs";
$proto143["m_columns"][] = "RDNDHrs";
$proto143["m_columns"][] = "VLDay";
$proto143["m_columns"][] = "SLDay";
$proto143["m_columns"][] = "ELDay";
$proto143["m_columns"][] = "PLDay";
$proto143["m_columns"][] = "TrODay";
$proto143["m_columns"][] = "HolidayType";
$proto143["m_columns"][] = "Mispunched";
$proto143["m_columns"][] = "Holiday1stHalf";
$proto143["m_columns"][] = "Holiday2ndHalf";
$proto143["m_columns"][] = "AfterBreakLog";
$proto143["m_columns"][] = "BreakLateMins";
$proto143["m_columns"][] = "TotLateMins";
$proto143["m_columns"][] = "LatePenaltyMins";
$proto143["m_columns"][] = "Employer";
$proto143["m_columns"][] = "AfterBreakLogOut";
$proto143["m_columns"][] = "LateFixPenalty";
$proto143["m_columns"][] = "Locked";
$proto143["m_columns"][] = "IScRID";
$proto143["m_columns"][] = "PreLogMins";
$proto143["m_columns"][] = "IncludeBreakLate";
$proto143["m_columns"][] = "GracePeriodMins";
$proto143["m_columns"][] = "WithAddBreaks";
$obj = new SQLTable($proto143);

$proto142["m_table"] = $obj;
$proto142["m_sql"] = "indschedule";
$proto142["m_alias"] = "";
$proto142["m_srcTableName"] = "indschedule";
$proto144=array();
$proto144["m_sql"] = "";
$proto144["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto144["m_column"]=$obj;
$proto144["m_contained"] = array();
$proto144["m_strCase"] = "";
$proto144["m_havingmode"] = false;
$proto144["m_inBrackets"] = false;
$proto144["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto144);

$proto142["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto142);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto146=array();
						$obj = new SQLField(array(
	"m_strName" => "ScID",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto146["m_column"]=$obj;
$proto146["m_bAsc"] = 1;
$proto146["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto146);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="indschedule";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_indschedule = createSqlQuery_indschedule();


	
		;

																																																																				

$tdataindschedule[".sqlquery"] = $queryData_indschedule;

include_once(getabspath("include/indschedule_events.php"));
$tableEvents["indschedule"] = new eventclass_indschedule;
$tdataindschedule[".hasEvents"] = true;

?>