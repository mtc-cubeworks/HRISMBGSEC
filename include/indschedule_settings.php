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
	$fieldLabelsindschedule["English"]["WageType"] = "Wage Type";
	$fieldToolTipsindschedule["English"]["WageType"] = "";
	$placeHoldersindschedule["English"]["WageType"] = "";
	$fieldLabelsindschedule["English"]["ApprovedNightDiff"] = "Approved ND";
	$fieldToolTipsindschedule["English"]["ApprovedNightDiff"] = "";
	$placeHoldersindschedule["English"]["ApprovedNightDiff"] = "";
	$fieldLabelsindschedule["English"]["EmployeeID"] = "Biometric ID";
	$fieldToolTipsindschedule["English"]["EmployeeID"] = "";
	$placeHoldersindschedule["English"]["EmployeeID"] = "";
	$fieldLabelsindschedule["English"]["BreakMins"] = "Break (m)";
	$fieldToolTipsindschedule["English"]["BreakMins"] = "";
	$placeHoldersindschedule["English"]["BreakMins"] = "";
	$fieldLabelsindschedule["English"]["Shift"] = "Shift";
	$fieldToolTipsindschedule["English"]["Shift"] = "";
	$placeHoldersindschedule["English"]["Shift"] = "";
	$fieldLabelsindschedule["English"]["ApprovedRD"] = "Approved RD";
	$fieldToolTipsindschedule["English"]["ApprovedRD"] = "";
	$placeHoldersindschedule["English"]["ApprovedRD"] = "";
	$fieldLabelsindschedule["English"]["LunchBreakFrom"] = "SBreak Out";
	$fieldToolTipsindschedule["English"]["LunchBreakFrom"] = "";
	$placeHoldersindschedule["English"]["LunchBreakFrom"] = "";
	$fieldLabelsindschedule["English"]["LunchBreakTo"] = "SBreak In";
	$fieldToolTipsindschedule["English"]["LunchBreakTo"] = "";
	$placeHoldersindschedule["English"]["LunchBreakTo"] = "";
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
	$fieldLabelsindschedule["English"]["LateMins"] = "Late (m)";
	$fieldToolTipsindschedule["English"]["LateMins"] = "";
	$placeHoldersindschedule["English"]["LateMins"] = "";
	$fieldLabelsindschedule["English"]["UndertimeMins"] = "Undertime (m)";
	$fieldToolTipsindschedule["English"]["UndertimeMins"] = "";
	$placeHoldersindschedule["English"]["UndertimeMins"] = "";
	$fieldLabelsindschedule["English"]["RHolidayHrs"] = "RH (h)";
	$fieldToolTipsindschedule["English"]["RHolidayHrs"] = "";
	$placeHoldersindschedule["English"]["RHolidayHrs"] = "";
	$fieldLabelsindschedule["English"]["SHolidayHrs"] = "SH (h)";
	$fieldToolTipsindschedule["English"]["SHolidayHrs"] = "";
	$placeHoldersindschedule["English"]["SHolidayHrs"] = "";
	$fieldLabelsindschedule["English"]["ExcessHrs"] = "Temp OT (h)";
	$fieldToolTipsindschedule["English"]["ExcessHrs"] = "";
	$placeHoldersindschedule["English"]["ExcessHrs"] = "";
	$fieldLabelsindschedule["English"]["RegOTHrs"] = "Reg OT (h)";
	$fieldToolTipsindschedule["English"]["RegOTHrs"] = "";
	$placeHoldersindschedule["English"]["RegOTHrs"] = "";
	$fieldLabelsindschedule["English"]["RHOTHrs"] = "RH-OT (h)";
	$fieldToolTipsindschedule["English"]["RHOTHrs"] = "";
	$placeHoldersindschedule["English"]["RHOTHrs"] = "";
	$fieldLabelsindschedule["English"]["SHOTHrs"] = "SH-OT (h)";
	$fieldToolTipsindschedule["English"]["SHOTHrs"] = "";
	$placeHoldersindschedule["English"]["SHOTHrs"] = "";
	$fieldLabelsindschedule["English"]["RDOTHrs"] = "RD-OT (h)";
	$fieldToolTipsindschedule["English"]["RDOTHrs"] = "";
	$placeHoldersindschedule["English"]["RDOTHrs"] = "";
	$fieldLabelsindschedule["English"]["RHNDHrs"] = "RH-ND (h)";
	$fieldToolTipsindschedule["English"]["RHNDHrs"] = "";
	$placeHoldersindschedule["English"]["RHNDHrs"] = "";
	$fieldLabelsindschedule["English"]["SHNDHrs"] = "SH-ND (h)";
	$fieldToolTipsindschedule["English"]["SHNDHrs"] = "";
	$placeHoldersindschedule["English"]["SHNDHrs"] = "";
	$fieldLabelsindschedule["English"]["RDNDHrs"] = "RD-ND (h)";
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
	$fieldLabelsindschedule["English"]["TotLateMins"] = "Tot Late (m)";
	$fieldToolTipsindschedule["English"]["TotLateMins"] = "";
	$placeHoldersindschedule["English"]["TotLateMins"] = "";
	$fieldLabelsindschedule["English"]["LatePenaltyMins"] = "Late Penalty (m)";
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
	$fieldLabelsindschedule["English"]["BreakLateMins"] = "Break Late (m)";
	$fieldToolTipsindschedule["English"]["BreakLateMins"] = "";
	$placeHoldersindschedule["English"]["BreakLateMins"] = "";
	$fieldLabelsindschedule["English"]["RHNDOTHrs"] = "RH-ND-OT (h)";
	$fieldToolTipsindschedule["English"]["RHNDOTHrs"] = "";
	$placeHoldersindschedule["English"]["RHNDOTHrs"] = "";
	$fieldLabelsindschedule["English"]["SHNDOTHrs"] = "SH-ND-OT (h)";
	$fieldToolTipsindschedule["English"]["SHNDOTHrs"] = "";
	$placeHoldersindschedule["English"]["SHNDOTHrs"] = "";
	$fieldLabelsindschedule["English"]["RDNDOTHrs"] = "RD-ND-OT (h)";
	$fieldToolTipsindschedule["English"]["RDNDOTHrs"] = "";
	$placeHoldersindschedule["English"]["RDNDOTHrs"] = "";
	$fieldLabelsindschedule["English"]["DH"] = "DH (h)";
	$fieldToolTipsindschedule["English"]["DH"] = "";
	$placeHoldersindschedule["English"]["DH"] = "";
	$fieldLabelsindschedule["English"]["DHRD"] = "DH-RD (h)";
	$fieldToolTipsindschedule["English"]["DHRD"] = "";
	$placeHoldersindschedule["English"]["DHRD"] = "";
	$fieldLabelsindschedule["English"]["DHOT"] = "DH-OT (h)";
	$fieldToolTipsindschedule["English"]["DHOT"] = "";
	$placeHoldersindschedule["English"]["DHOT"] = "";
	$fieldLabelsindschedule["English"]["DHRDOT"] = "DH-RD-OT (h)";
	$fieldToolTipsindschedule["English"]["DHRDOT"] = "";
	$placeHoldersindschedule["English"]["DHRDOT"] = "";
	$fieldLabelsindschedule["English"]["SHRDND"] = "SH-RD-ND (h)";
	$fieldToolTipsindschedule["English"]["SHRDND"] = "";
	$placeHoldersindschedule["English"]["SHRDND"] = "";
	$fieldLabelsindschedule["English"]["RHRDND"] = "RH-RD-ND (h)";
	$fieldToolTipsindschedule["English"]["RHRDND"] = "";
	$placeHoldersindschedule["English"]["RHRDND"] = "";
	$fieldLabelsindschedule["English"]["SHRDNDOT"] = "SH-RD-ND-OT (h)";
	$fieldToolTipsindschedule["English"]["SHRDNDOT"] = "";
	$placeHoldersindschedule["English"]["SHRDNDOT"] = "";
	$fieldLabelsindschedule["English"]["RHRDNDOT"] = "RH-RD-ND-OT (h)";
	$fieldToolTipsindschedule["English"]["RHRDNDOT"] = "";
	$placeHoldersindschedule["English"]["RHRDNDOT"] = "";
	$fieldLabelsindschedule["English"]["DHND"] = "DH-ND (h)";
	$fieldToolTipsindschedule["English"]["DHND"] = "";
	$placeHoldersindschedule["English"]["DHND"] = "";
	$fieldLabelsindschedule["English"]["DHRDND"] = "DH-RD-ND (h)";
	$fieldToolTipsindschedule["English"]["DHRDND"] = "";
	$placeHoldersindschedule["English"]["DHRDND"] = "";
	$fieldLabelsindschedule["English"]["DHNDOT"] = "DH-ND-OT (h)";
	$fieldToolTipsindschedule["English"]["DHNDOT"] = "";
	$placeHoldersindschedule["English"]["DHNDOT"] = "";
	$fieldLabelsindschedule["English"]["DHRDNDOT"] = "DH-RD-ND-OT (h)";
	$fieldToolTipsindschedule["English"]["DHRDNDOT"] = "";
	$placeHoldersindschedule["English"]["DHRDNDOT"] = "";
	$fieldLabelsindschedule["English"]["RHRDOT"] = "RH-RD-OT (h)";
	$fieldToolTipsindschedule["English"]["RHRDOT"] = "";
	$placeHoldersindschedule["English"]["RHRDOT"] = "";
	$fieldLabelsindschedule["English"]["SHRDOT"] = "SH-RD-OT (h)";
	$fieldToolTipsindschedule["English"]["SHRDOT"] = "";
	$placeHoldersindschedule["English"]["SHRDOT"] = "";
	$fieldLabelsindschedule["English"]["RegND"] = "Reg ND (h)";
	$fieldToolTipsindschedule["English"]["RegND"] = "";
	$placeHoldersindschedule["English"]["RegND"] = "";
	$fieldLabelsindschedule["English"]["RegRD"] = "Reg RD (h)";
	$fieldToolTipsindschedule["English"]["RegRD"] = "";
	$placeHoldersindschedule["English"]["RegRD"] = "";
	$fieldLabelsindschedule["English"]["SHOTD"] = "SH-OT-D (h)";
	$fieldToolTipsindschedule["English"]["SHOTD"] = "";
	$placeHoldersindschedule["English"]["SHOTD"] = "";
	$fieldLabelsindschedule["English"]["SHRDOTD"] = "SH-RD-OT-D (h)";
	$fieldToolTipsindschedule["English"]["SHRDOTD"] = "";
	$placeHoldersindschedule["English"]["SHRDOTD"] = "";
	$fieldLabelsindschedule["English"]["NDOT"] = "ND-OT (h)";
	$fieldToolTipsindschedule["English"]["NDOT"] = "";
	$placeHoldersindschedule["English"]["NDOT"] = "";
	$fieldLabelsindschedule["English"]["RHRD"] = "RH-RD (h)";
	$fieldToolTipsindschedule["English"]["RHRD"] = "";
	$placeHoldersindschedule["English"]["RHRD"] = "";
	$fieldLabelsindschedule["English"]["SHRD"] = "SH-RD (h)";
	$fieldToolTipsindschedule["English"]["SHRD"] = "";
	$placeHoldersindschedule["English"]["SHRD"] = "";
	if (count($fieldToolTipsindschedule["English"]))
		$tdataindschedule[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsindschedule[""] = array();
	$fieldToolTipsindschedule[""] = array();
	$placeHoldersindschedule[""] = array();
	$pageTitlesindschedule[""] = array();
	$fieldLabelsindschedule[""]["RHNDOTHrs"] = "RHNDOTHrs";
	$fieldToolTipsindschedule[""]["RHNDOTHrs"] = "";
	$placeHoldersindschedule[""]["RHNDOTHrs"] = "";
	$fieldLabelsindschedule[""]["SHNDOTHrs"] = "SHNDOTHrs";
	$fieldToolTipsindschedule[""]["SHNDOTHrs"] = "";
	$placeHoldersindschedule[""]["SHNDOTHrs"] = "";
	$fieldLabelsindschedule[""]["RDNDOTHrs"] = "RDNDOTHrs";
	$fieldToolTipsindschedule[""]["RDNDOTHrs"] = "";
	$placeHoldersindschedule[""]["RDNDOTHrs"] = "";
	$fieldLabelsindschedule[""]["DH"] = "DH";
	$fieldToolTipsindschedule[""]["DH"] = "";
	$placeHoldersindschedule[""]["DH"] = "";
	$fieldLabelsindschedule[""]["DHRD"] = "DHRD";
	$fieldToolTipsindschedule[""]["DHRD"] = "";
	$placeHoldersindschedule[""]["DHRD"] = "";
	$fieldLabelsindschedule[""]["DHOT"] = "DHOT";
	$fieldToolTipsindschedule[""]["DHOT"] = "";
	$placeHoldersindschedule[""]["DHOT"] = "";
	$fieldLabelsindschedule[""]["DHRDOT"] = "DHRDOT";
	$fieldToolTipsindschedule[""]["DHRDOT"] = "";
	$placeHoldersindschedule[""]["DHRDOT"] = "";
	$fieldLabelsindschedule[""]["SHRDND"] = "SHRDND";
	$fieldToolTipsindschedule[""]["SHRDND"] = "";
	$placeHoldersindschedule[""]["SHRDND"] = "";
	$fieldLabelsindschedule[""]["RHRDND"] = "RHRDND";
	$fieldToolTipsindschedule[""]["RHRDND"] = "";
	$placeHoldersindschedule[""]["RHRDND"] = "";
	$fieldLabelsindschedule[""]["SHRDNDOT"] = "SHRDNDOT";
	$fieldToolTipsindschedule[""]["SHRDNDOT"] = "";
	$placeHoldersindschedule[""]["SHRDNDOT"] = "";
	$fieldLabelsindschedule[""]["RHRDNDOT"] = "RHRDNDOT";
	$fieldToolTipsindschedule[""]["RHRDNDOT"] = "";
	$placeHoldersindschedule[""]["RHRDNDOT"] = "";
	$fieldLabelsindschedule[""]["DHND"] = "DHND";
	$fieldToolTipsindschedule[""]["DHND"] = "";
	$placeHoldersindschedule[""]["DHND"] = "";
	$fieldLabelsindschedule[""]["DHRDND"] = "DHRDND";
	$fieldToolTipsindschedule[""]["DHRDND"] = "";
	$placeHoldersindschedule[""]["DHRDND"] = "";
	$fieldLabelsindschedule[""]["DHNDOT"] = "DHNDOT";
	$fieldToolTipsindschedule[""]["DHNDOT"] = "";
	$placeHoldersindschedule[""]["DHNDOT"] = "";
	$fieldLabelsindschedule[""]["DHRDNDOT"] = "DHRDNDOT";
	$fieldToolTipsindschedule[""]["DHRDNDOT"] = "";
	$placeHoldersindschedule[""]["DHRDNDOT"] = "";
	$fieldLabelsindschedule[""]["RHRDOT"] = "RHRDOT";
	$fieldToolTipsindschedule[""]["RHRDOT"] = "";
	$placeHoldersindschedule[""]["RHRDOT"] = "";
	$fieldLabelsindschedule[""]["SHRDOT"] = "SHRDOT";
	$fieldToolTipsindschedule[""]["SHRDOT"] = "";
	$placeHoldersindschedule[""]["SHRDOT"] = "";
	$fieldLabelsindschedule[""]["RegND"] = "Reg ND";
	$fieldToolTipsindschedule[""]["RegND"] = "";
	$placeHoldersindschedule[""]["RegND"] = "";
	$fieldLabelsindschedule[""]["RegRD"] = "Reg RD";
	$fieldToolTipsindschedule[""]["RegRD"] = "";
	$placeHoldersindschedule[""]["RegRD"] = "";
	$fieldLabelsindschedule[""]["SHOTD"] = "SHOTD";
	$fieldToolTipsindschedule[""]["SHOTD"] = "";
	$placeHoldersindschedule[""]["SHOTD"] = "";
	$fieldLabelsindschedule[""]["SHRDOTD"] = "SHRDOTD";
	$fieldToolTipsindschedule[""]["SHRDOTD"] = "";
	$placeHoldersindschedule[""]["SHRDOTD"] = "";
	$fieldLabelsindschedule[""]["NDOT"] = "NDOT";
	$fieldToolTipsindschedule[""]["NDOT"] = "";
	$placeHoldersindschedule[""]["NDOT"] = "";
	$fieldLabelsindschedule[""]["RHRD"] = "RHRD";
	$fieldToolTipsindschedule[""]["RHRD"] = "";
	$placeHoldersindschedule[""]["RHRD"] = "";
	$fieldLabelsindschedule[""]["SHRD"] = "SHRD";
	$fieldToolTipsindschedule[""]["SHRD"] = "";
	$placeHoldersindschedule[""]["SHRD"] = "";
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

$tdataindschedule[".allSearchFields"][] = "UserName";
	$tdataindschedule[".allSearchFields"][] = "Division";
	$tdataindschedule[".allSearchFields"][] = "WageType";
	$tdataindschedule[".allSearchFields"][] = "SDate";
	$tdataindschedule[".allSearchFields"][] = "Mispunched";
	$tdataindschedule[".allSearchFields"][] = "RegND";
	$tdataindschedule[".allSearchFields"][] = "SHOTD";
	$tdataindschedule[".allSearchFields"][] = "NDOT";
	$tdataindschedule[".allSearchFields"][] = "RHRDOT";
	$tdataindschedule[".allSearchFields"][] = "SHRDOT";
	$tdataindschedule[".allSearchFields"][] = "SHRDOTD";
	$tdataindschedule[".allSearchFields"][] = "RegRD";
	$tdataindschedule[".allSearchFields"][] = "RHRD";
	$tdataindschedule[".allSearchFields"][] = "SHRD";
	

$tdataindschedule[".googleLikeFields"] = array();
$tdataindschedule[".googleLikeFields"][] = "UserName";
$tdataindschedule[".googleLikeFields"][] = "SDate";
$tdataindschedule[".googleLikeFields"][] = "WageType";
$tdataindschedule[".googleLikeFields"][] = "Division";
$tdataindschedule[".googleLikeFields"][] = "Mispunched";
$tdataindschedule[".googleLikeFields"][] = "RHRDOT";
$tdataindschedule[".googleLikeFields"][] = "SHRDOT";
$tdataindschedule[".googleLikeFields"][] = "RegND";
$tdataindschedule[".googleLikeFields"][] = "RegRD";
$tdataindschedule[".googleLikeFields"][] = "SHOTD";
$tdataindschedule[".googleLikeFields"][] = "SHRDOTD";
$tdataindschedule[".googleLikeFields"][] = "NDOT";
$tdataindschedule[".googleLikeFields"][] = "RHRD";
$tdataindschedule[".googleLikeFields"][] = "SHRD";

$tdataindschedule[".panelSearchFields"] = array();
$tdataindschedule[".searchPanelOptions"] = array();
$tdataindschedule[".panelSearchFields"][] = "UserName";
	$tdataindschedule[".panelSearchFields"][] = "Division";
	$tdataindschedule[".panelSearchFields"][] = "WageType";
	$tdataindschedule[".panelSearchFields"][] = "SDate";
	
$tdataindschedule[".advSearchFields"] = array();
$tdataindschedule[".advSearchFields"][] = "UserName";
$tdataindschedule[".advSearchFields"][] = "Division";
$tdataindschedule[".advSearchFields"][] = "WageType";
$tdataindschedule[".advSearchFields"][] = "SDate";
$tdataindschedule[".advSearchFields"][] = "Mispunched";
$tdataindschedule[".advSearchFields"][] = "RegND";
$tdataindschedule[".advSearchFields"][] = "SHOTD";
$tdataindschedule[".advSearchFields"][] = "NDOT";
$tdataindschedule[".advSearchFields"][] = "RHRDOT";
$tdataindschedule[".advSearchFields"][] = "SHRDOT";
$tdataindschedule[".advSearchFields"][] = "SHRDOTD";
$tdataindschedule[".advSearchFields"][] = "RegRD";
$tdataindschedule[".advSearchFields"][] = "RHRD";
$tdataindschedule[".advSearchFields"][] = "SHRD";

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
	"fName" => "RegWD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "DWork",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "Absent",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "LateMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "UndertimeMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "LatePenaltyMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "LateFixPenalty",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "BreakLateMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "TotLateMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "RHolidayHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "SHolidayHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "DH",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "RegND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "RHNDHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "SHNDHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "DHND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "RDNDHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "RHRDND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "SHRDND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "DHRDND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "ExcessHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "RegOTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "RHOTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "SHOTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "SHOTD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "DHOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "RDOTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "NDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "RHNDOTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "SHNDOTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "DHNDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "RDNDOTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "RHRDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "SHRDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "SHRDOTD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "DHRDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "RHRDNDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "SHRDNDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "DHRDNDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "VLDay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "SLDay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "ELDay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "PLDay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "TrODay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "RegRD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "RHRD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "SHRD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindschedule[".totalsFields"][] = array(
	"fName" => "DHRD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');

$tdataindschedule[".pageSize"] = 20;

$tdataindschedule[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY ScID";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataindschedule[".strOrderBy"] = $tstrOrderBy;

$tdataindschedule[".orderindexes"] = array();
	$tdataindschedule[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "ScID");


$tdataindschedule[".sqlHead"] = "SELECT ScID,  UserName,  SDate,  STimeIn,  STimeOut,  SchedType,  ApprovedOT,  WageType,  ApprovedNightDiff,  EmployeeID,  BreakMins,  Shift,  ApprovedRD,  LunchBreakFrom,  LunchBreakTo,  Division,  TimeIn,  TimeOut,  DayIs,  RestDay,  Department,  RegWD,  DWork,  Absent,  LateMins,  UndertimeMins,  RHolidayHrs,  SHolidayHrs,  ExcessHrs,  RegOTHrs,  RHOTHrs,  SHOTHrs,  RDOTHrs,  RHNDHrs,  SHNDHrs,  RDNDHrs,  VLDay,  SLDay,  ELDay,  PLDay,  TrODay,  HolidayType,  Mispunched,  Holiday1stHalf,  Holiday2ndHalf,  TotLateMins,  LatePenaltyMins,  Employer,  LateFixPenalty,  AfterBreakLogOut,  AfterBreakLog,  BreakLateMins,  RHNDOTHrs,  SHNDOTHrs,  RDNDOTHrs,  DH,  DHRD,  DHOT,  DHRDOT,  SHRDND,  RHRDND,  SHRDNDOT,  RHRDNDOT,  DHND,  DHRDND,  DHNDOT,  DHRDNDOT,  RHRDOT,  SHRDOT,  RegND,  RegRD,  SHOTD,  SHRDOTD,  NDOT,  RHRD,  SHRD";
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
	
	
		$tabFields[] = "LateMins";
	
		$tabFields[] = "UndertimeMins";
	
		$tabFields[] = "LatePenaltyMins";
	
		$tabFields[] = "LateFixPenalty";
	
		$tabFields[] = "BreakLateMins";
	
		$tabFields[] = "TotLateMins";
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
	
		$tabFields[] = "DH";
$arrEditTabs[] = array('tabId'=>'Holiday1',
					   'tabName'=>"Holiday",
					   'nType'=>'0',
					   'nOrder'=>30,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "ApprovedNightDiff";
	
		$tabFields[] = "RegND";
	
		$tabFields[] = "RHNDHrs";
	
		$tabFields[] = "SHNDHrs";
	
		$tabFields[] = "DHND";
	
		$tabFields[] = "RDNDHrs";
	
		$tabFields[] = "RHRDND";
	
		$tabFields[] = "SHRDND";
	
		$tabFields[] = "DHRDND";
$arrEditTabs[] = array('tabId'=>'Night_Diff1',
					   'tabName'=>"Night Diff",
					   'nType'=>'0',
					   'nOrder'=>37,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "ExcessHrs";
	
		$tabFields[] = "ApprovedOT";
	
		$tabFields[] = "RegOTHrs";
	
		$tabFields[] = "RHOTHrs";
	
		$tabFields[] = "SHOTHrs";
	
		$tabFields[] = "SHOTD";
	
		$tabFields[] = "DHOT";
	
		$tabFields[] = "RDOTHrs";
	
		$tabFields[] = "NDOT";
	
		$tabFields[] = "RHNDOTHrs";
	
		$tabFields[] = "SHNDOTHrs";
	
		$tabFields[] = "DHNDOT";
	
		$tabFields[] = "RDNDOTHrs";
	
		$tabFields[] = "RHRDOT";
	
		$tabFields[] = "SHRDOT";
	
		$tabFields[] = "SHRDOTD";
	
		$tabFields[] = "DHRDOT";
	
		$tabFields[] = "RHRDNDOT";
	
		$tabFields[] = "SHRDNDOT";
	
		$tabFields[] = "DHRDNDOT";
$arrEditTabs[] = array('tabId'=>'Overtime1',
					   'tabName'=>"Overtime",
					   'nType'=>'0',
					   'nOrder'=>47,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "VLDay";
	
		$tabFields[] = "SLDay";
	
		$tabFields[] = "ELDay";
	
		$tabFields[] = "PLDay";
	
		$tabFields[] = "TrODay";
$arrEditTabs[] = array('tabId'=>'Leaves1',
					   'tabName'=>"Leaves",
					   'nType'=>'0',
					   'nOrder'=>68,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "ApprovedRD";
	
		$tabFields[] = "RegRD";
	
		$tabFields[] = "RHRD";
	
		$tabFields[] = "SHRD";
	
		$tabFields[] = "DHRD";
$arrEditTabs[] = array('tabId'=>'Rest_Day1',
					   'tabName'=>"Rest Day",
					   'nType'=>'0',
					   'nOrder'=>74,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "SchedType";
	
		$tabFields[] = "Shift";
	
		$tabFields[] = "BreakMins";
$arrEditTabs[] = array('tabId'=>'Sched_Setup1',
					   'tabName'=>"Sched Setup",
					   'nType'=>'0',
					   'nOrder'=>80,
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
	
	
		$tabFields[] = "LateMins";
	
		$tabFields[] = "UndertimeMins";
	
		$tabFields[] = "LatePenaltyMins";
	
		$tabFields[] = "LateFixPenalty";
	
		$tabFields[] = "BreakLateMins";
	
		$tabFields[] = "TotLateMins";
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
	
		$tabFields[] = "DH";
$arrAddTabs[] = array('tabId'=>'Holiday1',
					  'tabName'=>"Holiday",
					  'nType'=>'0',
					  'nOrder'=>30,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "ApprovedNightDiff";
	
		$tabFields[] = "RegND";
	
		$tabFields[] = "RHNDHrs";
	
		$tabFields[] = "SHNDHrs";
	
		$tabFields[] = "DHND";
	
		$tabFields[] = "RDNDHrs";
	
		$tabFields[] = "RHRDND";
	
		$tabFields[] = "SHRDND";
	
		$tabFields[] = "DHRDND";
$arrAddTabs[] = array('tabId'=>'Night_Diff1',
					  'tabName'=>"Night Diff",
					  'nType'=>'0',
					  'nOrder'=>37,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "ExcessHrs";
	
		$tabFields[] = "ApprovedOT";
	
		$tabFields[] = "RegOTHrs";
	
		$tabFields[] = "RHOTHrs";
	
		$tabFields[] = "SHOTHrs";
	
		$tabFields[] = "SHOTD";
	
		$tabFields[] = "DHOT";
	
		$tabFields[] = "RDOTHrs";
	
		$tabFields[] = "NDOT";
	
		$tabFields[] = "RHNDOTHrs";
	
		$tabFields[] = "SHNDOTHrs";
	
		$tabFields[] = "DHNDOT";
	
		$tabFields[] = "RDNDOTHrs";
	
		$tabFields[] = "RHRDOT";
	
		$tabFields[] = "SHRDOT";
	
		$tabFields[] = "SHRDOTD";
	
		$tabFields[] = "DHRDOT";
	
		$tabFields[] = "RHRDNDOT";
	
		$tabFields[] = "SHRDNDOT";
	
		$tabFields[] = "DHRDNDOT";
$arrAddTabs[] = array('tabId'=>'Overtime1',
					  'tabName'=>"Overtime",
					  'nType'=>'0',
					  'nOrder'=>47,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "VLDay";
	
		$tabFields[] = "SLDay";
	
		$tabFields[] = "ELDay";
	
		$tabFields[] = "PLDay";
	
		$tabFields[] = "TrODay";
$arrAddTabs[] = array('tabId'=>'Leaves1',
					  'tabName'=>"Leaves",
					  'nType'=>'0',
					  'nOrder'=>68,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "ApprovedRD";
	
		$tabFields[] = "RegRD";
	
		$tabFields[] = "RHRD";
	
		$tabFields[] = "SHRD";
	
		$tabFields[] = "DHRD";
$arrAddTabs[] = array('tabId'=>'Rest_Day1',
					  'tabName'=>"Rest Day",
					  'nType'=>'0',
					  'nOrder'=>74,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "SchedType";
	
		$tabFields[] = "Shift";
	
		$tabFields[] = "BreakMins";
$arrAddTabs[] = array('tabId'=>'Sched_Setup1',
					  'tabName'=>"Sched Setup",
					  'nType'=>'0',
					  'nOrder'=>80,
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
	
	$tabFields[] = "LateMins";
	$tabFields[] = "UndertimeMins";
	$tabFields[] = "LatePenaltyMins";
	$tabFields[] = "LateFixPenalty";
	$tabFields[] = "BreakLateMins";
	$tabFields[] = "TotLateMins";
$arrViewTabs[] = array('tabId'=>'Lates_and_Undertime1',
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
	$tabFields[] = "DH";
$arrViewTabs[] = array('tabId'=>'Holiday1',
					   'tabName'=>"Holiday",
					   'nType'=>'0',
					   'nOrder'=>30,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "ApprovedNightDiff";
	$tabFields[] = "RegND";
	$tabFields[] = "RHNDHrs";
	$tabFields[] = "SHNDHrs";
	$tabFields[] = "DHND";
	$tabFields[] = "RDNDHrs";
	$tabFields[] = "RHRDND";
	$tabFields[] = "SHRDND";
	$tabFields[] = "DHRDND";
$arrViewTabs[] = array('tabId'=>'Night_Diff1',
					   'tabName'=>"Night Diff",
					   'nType'=>'0',
					   'nOrder'=>37,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "ExcessHrs";
	$tabFields[] = "ApprovedOT";
	$tabFields[] = "RegOTHrs";
	$tabFields[] = "RHOTHrs";
	$tabFields[] = "SHOTHrs";
	$tabFields[] = "SHOTD";
	$tabFields[] = "DHOT";
	$tabFields[] = "RDOTHrs";
	$tabFields[] = "NDOT";
	$tabFields[] = "RHNDOTHrs";
	$tabFields[] = "SHNDOTHrs";
	$tabFields[] = "DHNDOT";
	$tabFields[] = "RDNDOTHrs";
	$tabFields[] = "RHRDOT";
	$tabFields[] = "SHRDOT";
	$tabFields[] = "SHRDOTD";
	$tabFields[] = "DHRDOT";
	$tabFields[] = "RHRDNDOT";
	$tabFields[] = "SHRDNDOT";
	$tabFields[] = "DHRDNDOT";
$arrViewTabs[] = array('tabId'=>'Overtime1',
					   'tabName'=>"Overtime",
					   'nType'=>'0',
					   'nOrder'=>47,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "VLDay";
	$tabFields[] = "SLDay";
	$tabFields[] = "ELDay";
	$tabFields[] = "PLDay";
	$tabFields[] = "TrODay";
$arrViewTabs[] = array('tabId'=>'Leaves1',
					   'tabName'=>"Leaves",
					   'nType'=>'0',
					   'nOrder'=>68,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "ApprovedRD";
	$tabFields[] = "RegRD";
	$tabFields[] = "RHRD";
	$tabFields[] = "SHRD";
	$tabFields[] = "DHRD";
$arrViewTabs[] = array('tabId'=>'Rest_Day1',
					   'tabName'=>"Rest Day",
					   'nType'=>'0',
					   'nOrder'=>74,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "SchedType";
	$tabFields[] = "Shift";
	$tabFields[] = "BreakMins";
$arrViewTabs[] = array('tabId'=>'Sched_Setup1',
					   'tabName'=>"Sched Setup",
					   'nType'=>'0',
					   'nOrder'=>80,
					   'tabGroup'=>1,
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
$tdataindschedule[".listFields"][] = "LunchBreakFrom";
$tdataindschedule[".listFields"][] = "LunchBreakTo";
$tdataindschedule[".listFields"][] = "AfterBreakLogOut";
$tdataindschedule[".listFields"][] = "AfterBreakLog";
$tdataindschedule[".listFields"][] = "Mispunched";
$tdataindschedule[".listFields"][] = "RegWD";
$tdataindschedule[".listFields"][] = "DWork";
$tdataindschedule[".listFields"][] = "Absent";
$tdataindschedule[".listFields"][] = "LateMins";
$tdataindschedule[".listFields"][] = "UndertimeMins";
$tdataindschedule[".listFields"][] = "LatePenaltyMins";
$tdataindschedule[".listFields"][] = "LateFixPenalty";
$tdataindschedule[".listFields"][] = "BreakLateMins";
$tdataindschedule[".listFields"][] = "TotLateMins";
$tdataindschedule[".listFields"][] = "HolidayType";
$tdataindschedule[".listFields"][] = "Holiday1stHalf";
$tdataindschedule[".listFields"][] = "Holiday2ndHalf";
$tdataindschedule[".listFields"][] = "RHolidayHrs";
$tdataindschedule[".listFields"][] = "SHolidayHrs";
$tdataindschedule[".listFields"][] = "DH";
$tdataindschedule[".listFields"][] = "ApprovedNightDiff";
$tdataindschedule[".listFields"][] = "RegND";
$tdataindschedule[".listFields"][] = "RHNDHrs";
$tdataindschedule[".listFields"][] = "SHNDHrs";
$tdataindschedule[".listFields"][] = "DHND";
$tdataindschedule[".listFields"][] = "RDNDHrs";
$tdataindschedule[".listFields"][] = "RHRDND";
$tdataindschedule[".listFields"][] = "SHRDND";
$tdataindschedule[".listFields"][] = "DHRDND";
$tdataindschedule[".listFields"][] = "ExcessHrs";
$tdataindschedule[".listFields"][] = "ApprovedOT";
$tdataindschedule[".listFields"][] = "RegOTHrs";
$tdataindschedule[".listFields"][] = "RHOTHrs";
$tdataindschedule[".listFields"][] = "SHOTHrs";
$tdataindschedule[".listFields"][] = "SHOTD";
$tdataindschedule[".listFields"][] = "DHOT";
$tdataindschedule[".listFields"][] = "RDOTHrs";
$tdataindschedule[".listFields"][] = "NDOT";
$tdataindschedule[".listFields"][] = "RHNDOTHrs";
$tdataindschedule[".listFields"][] = "SHNDOTHrs";
$tdataindschedule[".listFields"][] = "DHNDOT";
$tdataindschedule[".listFields"][] = "RDNDOTHrs";
$tdataindschedule[".listFields"][] = "RHRDOT";
$tdataindschedule[".listFields"][] = "SHRDOT";
$tdataindschedule[".listFields"][] = "SHRDOTD";
$tdataindschedule[".listFields"][] = "DHRDOT";
$tdataindschedule[".listFields"][] = "RHRDNDOT";
$tdataindschedule[".listFields"][] = "SHRDNDOT";
$tdataindschedule[".listFields"][] = "DHRDNDOT";
$tdataindschedule[".listFields"][] = "VLDay";
$tdataindschedule[".listFields"][] = "SLDay";
$tdataindschedule[".listFields"][] = "ELDay";
$tdataindschedule[".listFields"][] = "PLDay";
$tdataindschedule[".listFields"][] = "TrODay";
$tdataindschedule[".listFields"][] = "ApprovedRD";
$tdataindschedule[".listFields"][] = "RegRD";
$tdataindschedule[".listFields"][] = "RHRD";
$tdataindschedule[".listFields"][] = "SHRD";
$tdataindschedule[".listFields"][] = "DHRD";
$tdataindschedule[".listFields"][] = "SchedType";
$tdataindschedule[".listFields"][] = "Shift";
$tdataindschedule[".listFields"][] = "BreakMins";

$tdataindschedule[".hideMobileList"] = array();


$tdataindschedule[".viewFields"] = array();
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
$tdataindschedule[".viewFields"][] = "LateMins";
$tdataindschedule[".viewFields"][] = "UndertimeMins";
$tdataindschedule[".viewFields"][] = "LatePenaltyMins";
$tdataindschedule[".viewFields"][] = "LateFixPenalty";
$tdataindschedule[".viewFields"][] = "BreakLateMins";
$tdataindschedule[".viewFields"][] = "TotLateMins";
$tdataindschedule[".viewFields"][] = "HolidayType";
$tdataindschedule[".viewFields"][] = "Holiday1stHalf";
$tdataindschedule[".viewFields"][] = "Holiday2ndHalf";
$tdataindschedule[".viewFields"][] = "RHolidayHrs";
$tdataindschedule[".viewFields"][] = "SHolidayHrs";
$tdataindschedule[".viewFields"][] = "DH";
$tdataindschedule[".viewFields"][] = "ApprovedNightDiff";
$tdataindschedule[".viewFields"][] = "RegND";
$tdataindschedule[".viewFields"][] = "RHNDHrs";
$tdataindschedule[".viewFields"][] = "SHNDHrs";
$tdataindschedule[".viewFields"][] = "DHND";
$tdataindschedule[".viewFields"][] = "RDNDHrs";
$tdataindschedule[".viewFields"][] = "RHRDND";
$tdataindschedule[".viewFields"][] = "SHRDND";
$tdataindschedule[".viewFields"][] = "DHRDND";
$tdataindschedule[".viewFields"][] = "ExcessHrs";
$tdataindschedule[".viewFields"][] = "ApprovedOT";
$tdataindschedule[".viewFields"][] = "RegOTHrs";
$tdataindschedule[".viewFields"][] = "RHOTHrs";
$tdataindschedule[".viewFields"][] = "SHOTHrs";
$tdataindschedule[".viewFields"][] = "SHOTD";
$tdataindschedule[".viewFields"][] = "DHOT";
$tdataindschedule[".viewFields"][] = "RDOTHrs";
$tdataindschedule[".viewFields"][] = "NDOT";
$tdataindschedule[".viewFields"][] = "RHNDOTHrs";
$tdataindschedule[".viewFields"][] = "SHNDOTHrs";
$tdataindschedule[".viewFields"][] = "DHNDOT";
$tdataindschedule[".viewFields"][] = "RDNDOTHrs";
$tdataindschedule[".viewFields"][] = "RHRDOT";
$tdataindschedule[".viewFields"][] = "SHRDOT";
$tdataindschedule[".viewFields"][] = "SHRDOTD";
$tdataindschedule[".viewFields"][] = "DHRDOT";
$tdataindschedule[".viewFields"][] = "RHRDNDOT";
$tdataindschedule[".viewFields"][] = "SHRDNDOT";
$tdataindschedule[".viewFields"][] = "DHRDNDOT";
$tdataindschedule[".viewFields"][] = "VLDay";
$tdataindschedule[".viewFields"][] = "SLDay";
$tdataindschedule[".viewFields"][] = "ELDay";
$tdataindschedule[".viewFields"][] = "PLDay";
$tdataindschedule[".viewFields"][] = "TrODay";
$tdataindschedule[".viewFields"][] = "ApprovedRD";
$tdataindschedule[".viewFields"][] = "RegRD";
$tdataindschedule[".viewFields"][] = "RHRD";
$tdataindschedule[".viewFields"][] = "SHRD";
$tdataindschedule[".viewFields"][] = "DHRD";
$tdataindschedule[".viewFields"][] = "SchedType";
$tdataindschedule[".viewFields"][] = "Shift";
$tdataindschedule[".viewFields"][] = "BreakMins";

$tdataindschedule[".addFields"] = array();
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
$tdataindschedule[".addFields"][] = "LateMins";
$tdataindschedule[".addFields"][] = "UndertimeMins";
$tdataindschedule[".addFields"][] = "LatePenaltyMins";
$tdataindschedule[".addFields"][] = "LateFixPenalty";
$tdataindschedule[".addFields"][] = "BreakLateMins";
$tdataindschedule[".addFields"][] = "TotLateMins";
$tdataindschedule[".addFields"][] = "HolidayType";
$tdataindschedule[".addFields"][] = "Holiday1stHalf";
$tdataindschedule[".addFields"][] = "Holiday2ndHalf";
$tdataindschedule[".addFields"][] = "RHolidayHrs";
$tdataindschedule[".addFields"][] = "SHolidayHrs";
$tdataindschedule[".addFields"][] = "DH";
$tdataindschedule[".addFields"][] = "ApprovedNightDiff";
$tdataindschedule[".addFields"][] = "RegND";
$tdataindschedule[".addFields"][] = "RHNDHrs";
$tdataindschedule[".addFields"][] = "SHNDHrs";
$tdataindschedule[".addFields"][] = "DHND";
$tdataindschedule[".addFields"][] = "RDNDHrs";
$tdataindschedule[".addFields"][] = "RHRDND";
$tdataindschedule[".addFields"][] = "SHRDND";
$tdataindschedule[".addFields"][] = "DHRDND";
$tdataindschedule[".addFields"][] = "ExcessHrs";
$tdataindschedule[".addFields"][] = "ApprovedOT";
$tdataindschedule[".addFields"][] = "RegOTHrs";
$tdataindschedule[".addFields"][] = "RHOTHrs";
$tdataindschedule[".addFields"][] = "SHOTHrs";
$tdataindschedule[".addFields"][] = "SHOTD";
$tdataindschedule[".addFields"][] = "DHOT";
$tdataindschedule[".addFields"][] = "RDOTHrs";
$tdataindschedule[".addFields"][] = "NDOT";
$tdataindschedule[".addFields"][] = "RHNDOTHrs";
$tdataindschedule[".addFields"][] = "SHNDOTHrs";
$tdataindschedule[".addFields"][] = "DHNDOT";
$tdataindschedule[".addFields"][] = "RDNDOTHrs";
$tdataindschedule[".addFields"][] = "RHRDOT";
$tdataindschedule[".addFields"][] = "SHRDOT";
$tdataindschedule[".addFields"][] = "SHRDOTD";
$tdataindschedule[".addFields"][] = "DHRDOT";
$tdataindschedule[".addFields"][] = "RHRDNDOT";
$tdataindschedule[".addFields"][] = "SHRDNDOT";
$tdataindschedule[".addFields"][] = "DHRDNDOT";
$tdataindschedule[".addFields"][] = "VLDay";
$tdataindschedule[".addFields"][] = "SLDay";
$tdataindschedule[".addFields"][] = "ELDay";
$tdataindschedule[".addFields"][] = "PLDay";
$tdataindschedule[".addFields"][] = "TrODay";
$tdataindschedule[".addFields"][] = "ApprovedRD";
$tdataindschedule[".addFields"][] = "RegRD";
$tdataindschedule[".addFields"][] = "RHRD";
$tdataindschedule[".addFields"][] = "SHRD";
$tdataindschedule[".addFields"][] = "DHRD";
$tdataindschedule[".addFields"][] = "SchedType";
$tdataindschedule[".addFields"][] = "Shift";
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
$tdataindschedule[".masterListFields"][] = "LunchBreakFrom";
$tdataindschedule[".masterListFields"][] = "LunchBreakTo";
$tdataindschedule[".masterListFields"][] = "AfterBreakLogOut";
$tdataindschedule[".masterListFields"][] = "AfterBreakLog";
$tdataindschedule[".masterListFields"][] = "Mispunched";
$tdataindschedule[".masterListFields"][] = "RegWD";
$tdataindschedule[".masterListFields"][] = "DWork";
$tdataindschedule[".masterListFields"][] = "Absent";
$tdataindschedule[".masterListFields"][] = "LateMins";
$tdataindschedule[".masterListFields"][] = "UndertimeMins";
$tdataindschedule[".masterListFields"][] = "LatePenaltyMins";
$tdataindschedule[".masterListFields"][] = "LateFixPenalty";
$tdataindschedule[".masterListFields"][] = "BreakLateMins";
$tdataindschedule[".masterListFields"][] = "TotLateMins";
$tdataindschedule[".masterListFields"][] = "HolidayType";
$tdataindschedule[".masterListFields"][] = "Holiday1stHalf";
$tdataindschedule[".masterListFields"][] = "Holiday2ndHalf";
$tdataindschedule[".masterListFields"][] = "RHolidayHrs";
$tdataindschedule[".masterListFields"][] = "SHolidayHrs";
$tdataindschedule[".masterListFields"][] = "DH";
$tdataindschedule[".masterListFields"][] = "ApprovedNightDiff";
$tdataindschedule[".masterListFields"][] = "RegND";
$tdataindschedule[".masterListFields"][] = "RHNDHrs";
$tdataindschedule[".masterListFields"][] = "SHNDHrs";
$tdataindschedule[".masterListFields"][] = "DHND";
$tdataindschedule[".masterListFields"][] = "RDNDHrs";
$tdataindschedule[".masterListFields"][] = "RHRDND";
$tdataindschedule[".masterListFields"][] = "SHRDND";
$tdataindschedule[".masterListFields"][] = "DHRDND";
$tdataindschedule[".masterListFields"][] = "ExcessHrs";
$tdataindschedule[".masterListFields"][] = "ApprovedOT";
$tdataindschedule[".masterListFields"][] = "RegOTHrs";
$tdataindschedule[".masterListFields"][] = "RHOTHrs";
$tdataindschedule[".masterListFields"][] = "SHOTHrs";
$tdataindschedule[".masterListFields"][] = "SHOTD";
$tdataindschedule[".masterListFields"][] = "DHOT";
$tdataindschedule[".masterListFields"][] = "RDOTHrs";
$tdataindschedule[".masterListFields"][] = "NDOT";
$tdataindschedule[".masterListFields"][] = "RHNDOTHrs";
$tdataindschedule[".masterListFields"][] = "SHNDOTHrs";
$tdataindschedule[".masterListFields"][] = "DHNDOT";
$tdataindschedule[".masterListFields"][] = "RDNDOTHrs";
$tdataindschedule[".masterListFields"][] = "RHRDOT";
$tdataindschedule[".masterListFields"][] = "SHRDOT";
$tdataindschedule[".masterListFields"][] = "SHRDOTD";
$tdataindschedule[".masterListFields"][] = "DHRDOT";
$tdataindschedule[".masterListFields"][] = "RHRDNDOT";
$tdataindschedule[".masterListFields"][] = "SHRDNDOT";
$tdataindschedule[".masterListFields"][] = "DHRDNDOT";
$tdataindschedule[".masterListFields"][] = "VLDay";
$tdataindschedule[".masterListFields"][] = "SLDay";
$tdataindschedule[".masterListFields"][] = "ELDay";
$tdataindschedule[".masterListFields"][] = "PLDay";
$tdataindschedule[".masterListFields"][] = "TrODay";
$tdataindschedule[".masterListFields"][] = "ApprovedRD";
$tdataindschedule[".masterListFields"][] = "RegRD";
$tdataindschedule[".masterListFields"][] = "RHRD";
$tdataindschedule[".masterListFields"][] = "SHRD";
$tdataindschedule[".masterListFields"][] = "DHRD";
$tdataindschedule[".masterListFields"][] = "SchedType";
$tdataindschedule[".masterListFields"][] = "Shift";
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
$tdataindschedule[".inlineAddFields"][] = "LunchBreakFrom";
$tdataindschedule[".inlineAddFields"][] = "LunchBreakTo";
$tdataindschedule[".inlineAddFields"][] = "AfterBreakLogOut";
$tdataindschedule[".inlineAddFields"][] = "AfterBreakLog";
$tdataindschedule[".inlineAddFields"][] = "Mispunched";
$tdataindschedule[".inlineAddFields"][] = "RegWD";
$tdataindschedule[".inlineAddFields"][] = "DWork";
$tdataindschedule[".inlineAddFields"][] = "Absent";
$tdataindschedule[".inlineAddFields"][] = "LateMins";
$tdataindschedule[".inlineAddFields"][] = "UndertimeMins";
$tdataindschedule[".inlineAddFields"][] = "LatePenaltyMins";
$tdataindschedule[".inlineAddFields"][] = "LateFixPenalty";
$tdataindschedule[".inlineAddFields"][] = "BreakLateMins";
$tdataindschedule[".inlineAddFields"][] = "TotLateMins";
$tdataindschedule[".inlineAddFields"][] = "HolidayType";
$tdataindschedule[".inlineAddFields"][] = "Holiday1stHalf";
$tdataindschedule[".inlineAddFields"][] = "Holiday2ndHalf";
$tdataindschedule[".inlineAddFields"][] = "RHolidayHrs";
$tdataindschedule[".inlineAddFields"][] = "SHolidayHrs";
$tdataindschedule[".inlineAddFields"][] = "DH";
$tdataindschedule[".inlineAddFields"][] = "ApprovedNightDiff";
$tdataindschedule[".inlineAddFields"][] = "RegND";
$tdataindschedule[".inlineAddFields"][] = "RHNDHrs";
$tdataindschedule[".inlineAddFields"][] = "SHNDHrs";
$tdataindschedule[".inlineAddFields"][] = "DHND";
$tdataindschedule[".inlineAddFields"][] = "RDNDHrs";
$tdataindschedule[".inlineAddFields"][] = "RHRDND";
$tdataindschedule[".inlineAddFields"][] = "SHRDND";
$tdataindschedule[".inlineAddFields"][] = "DHRDND";
$tdataindschedule[".inlineAddFields"][] = "ExcessHrs";
$tdataindschedule[".inlineAddFields"][] = "ApprovedOT";
$tdataindschedule[".inlineAddFields"][] = "RegOTHrs";
$tdataindschedule[".inlineAddFields"][] = "RHOTHrs";
$tdataindschedule[".inlineAddFields"][] = "SHOTHrs";
$tdataindschedule[".inlineAddFields"][] = "SHOTD";
$tdataindschedule[".inlineAddFields"][] = "DHOT";
$tdataindschedule[".inlineAddFields"][] = "RDOTHrs";
$tdataindschedule[".inlineAddFields"][] = "NDOT";
$tdataindschedule[".inlineAddFields"][] = "RHNDOTHrs";
$tdataindschedule[".inlineAddFields"][] = "SHNDOTHrs";
$tdataindschedule[".inlineAddFields"][] = "DHNDOT";
$tdataindschedule[".inlineAddFields"][] = "RDNDOTHrs";
$tdataindschedule[".inlineAddFields"][] = "RHRDOT";
$tdataindschedule[".inlineAddFields"][] = "SHRDOT";
$tdataindschedule[".inlineAddFields"][] = "SHRDOTD";
$tdataindschedule[".inlineAddFields"][] = "DHRDOT";
$tdataindschedule[".inlineAddFields"][] = "RHRDNDOT";
$tdataindschedule[".inlineAddFields"][] = "SHRDNDOT";
$tdataindschedule[".inlineAddFields"][] = "DHRDNDOT";
$tdataindschedule[".inlineAddFields"][] = "VLDay";
$tdataindschedule[".inlineAddFields"][] = "SLDay";
$tdataindschedule[".inlineAddFields"][] = "ELDay";
$tdataindschedule[".inlineAddFields"][] = "PLDay";
$tdataindschedule[".inlineAddFields"][] = "TrODay";
$tdataindschedule[".inlineAddFields"][] = "ApprovedRD";
$tdataindschedule[".inlineAddFields"][] = "RegRD";
$tdataindschedule[".inlineAddFields"][] = "RHRD";
$tdataindschedule[".inlineAddFields"][] = "SHRD";
$tdataindschedule[".inlineAddFields"][] = "DHRD";
$tdataindschedule[".inlineAddFields"][] = "SchedType";
$tdataindschedule[".inlineAddFields"][] = "Shift";
$tdataindschedule[".inlineAddFields"][] = "BreakMins";

$tdataindschedule[".editFields"] = array();
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
$tdataindschedule[".editFields"][] = "LateMins";
$tdataindschedule[".editFields"][] = "UndertimeMins";
$tdataindschedule[".editFields"][] = "LatePenaltyMins";
$tdataindschedule[".editFields"][] = "LateFixPenalty";
$tdataindschedule[".editFields"][] = "BreakLateMins";
$tdataindschedule[".editFields"][] = "TotLateMins";
$tdataindschedule[".editFields"][] = "HolidayType";
$tdataindschedule[".editFields"][] = "Holiday1stHalf";
$tdataindschedule[".editFields"][] = "Holiday2ndHalf";
$tdataindschedule[".editFields"][] = "RHolidayHrs";
$tdataindschedule[".editFields"][] = "SHolidayHrs";
$tdataindschedule[".editFields"][] = "DH";
$tdataindschedule[".editFields"][] = "ApprovedNightDiff";
$tdataindschedule[".editFields"][] = "RegND";
$tdataindschedule[".editFields"][] = "RHNDHrs";
$tdataindschedule[".editFields"][] = "SHNDHrs";
$tdataindschedule[".editFields"][] = "DHND";
$tdataindschedule[".editFields"][] = "RDNDHrs";
$tdataindschedule[".editFields"][] = "RHRDND";
$tdataindschedule[".editFields"][] = "SHRDND";
$tdataindschedule[".editFields"][] = "DHRDND";
$tdataindschedule[".editFields"][] = "ExcessHrs";
$tdataindschedule[".editFields"][] = "ApprovedOT";
$tdataindschedule[".editFields"][] = "RegOTHrs";
$tdataindschedule[".editFields"][] = "RHOTHrs";
$tdataindschedule[".editFields"][] = "SHOTHrs";
$tdataindschedule[".editFields"][] = "SHOTD";
$tdataindschedule[".editFields"][] = "DHOT";
$tdataindschedule[".editFields"][] = "RDOTHrs";
$tdataindschedule[".editFields"][] = "NDOT";
$tdataindschedule[".editFields"][] = "RHNDOTHrs";
$tdataindschedule[".editFields"][] = "SHNDOTHrs";
$tdataindschedule[".editFields"][] = "DHNDOT";
$tdataindschedule[".editFields"][] = "RDNDOTHrs";
$tdataindschedule[".editFields"][] = "RHRDOT";
$tdataindschedule[".editFields"][] = "SHRDOT";
$tdataindschedule[".editFields"][] = "SHRDOTD";
$tdataindschedule[".editFields"][] = "DHRDOT";
$tdataindschedule[".editFields"][] = "RHRDNDOT";
$tdataindschedule[".editFields"][] = "SHRDNDOT";
$tdataindschedule[".editFields"][] = "DHRDNDOT";
$tdataindschedule[".editFields"][] = "VLDay";
$tdataindschedule[".editFields"][] = "SLDay";
$tdataindschedule[".editFields"][] = "ELDay";
$tdataindschedule[".editFields"][] = "PLDay";
$tdataindschedule[".editFields"][] = "TrODay";
$tdataindschedule[".editFields"][] = "ApprovedRD";
$tdataindschedule[".editFields"][] = "RegRD";
$tdataindschedule[".editFields"][] = "RHRD";
$tdataindschedule[".editFields"][] = "SHRD";
$tdataindschedule[".editFields"][] = "DHRD";
$tdataindschedule[".editFields"][] = "SchedType";
$tdataindschedule[".editFields"][] = "Shift";
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
$tdataindschedule[".inlineEditFields"][] = "LunchBreakFrom";
$tdataindschedule[".inlineEditFields"][] = "LunchBreakTo";
$tdataindschedule[".inlineEditFields"][] = "AfterBreakLogOut";
$tdataindschedule[".inlineEditFields"][] = "AfterBreakLog";
$tdataindschedule[".inlineEditFields"][] = "Mispunched";
$tdataindschedule[".inlineEditFields"][] = "RegWD";
$tdataindschedule[".inlineEditFields"][] = "DWork";
$tdataindschedule[".inlineEditFields"][] = "Absent";
$tdataindschedule[".inlineEditFields"][] = "LateMins";
$tdataindschedule[".inlineEditFields"][] = "UndertimeMins";
$tdataindschedule[".inlineEditFields"][] = "LatePenaltyMins";
$tdataindschedule[".inlineEditFields"][] = "LateFixPenalty";
$tdataindschedule[".inlineEditFields"][] = "BreakLateMins";
$tdataindschedule[".inlineEditFields"][] = "TotLateMins";
$tdataindschedule[".inlineEditFields"][] = "HolidayType";
$tdataindschedule[".inlineEditFields"][] = "Holiday1stHalf";
$tdataindschedule[".inlineEditFields"][] = "Holiday2ndHalf";
$tdataindschedule[".inlineEditFields"][] = "RHolidayHrs";
$tdataindschedule[".inlineEditFields"][] = "SHolidayHrs";
$tdataindschedule[".inlineEditFields"][] = "DH";
$tdataindschedule[".inlineEditFields"][] = "ApprovedNightDiff";
$tdataindschedule[".inlineEditFields"][] = "RegND";
$tdataindschedule[".inlineEditFields"][] = "RHNDHrs";
$tdataindschedule[".inlineEditFields"][] = "SHNDHrs";
$tdataindschedule[".inlineEditFields"][] = "DHND";
$tdataindschedule[".inlineEditFields"][] = "RDNDHrs";
$tdataindschedule[".inlineEditFields"][] = "RHRDND";
$tdataindschedule[".inlineEditFields"][] = "SHRDND";
$tdataindschedule[".inlineEditFields"][] = "DHRDND";
$tdataindschedule[".inlineEditFields"][] = "ExcessHrs";
$tdataindschedule[".inlineEditFields"][] = "ApprovedOT";
$tdataindschedule[".inlineEditFields"][] = "RegOTHrs";
$tdataindschedule[".inlineEditFields"][] = "RHOTHrs";
$tdataindschedule[".inlineEditFields"][] = "SHOTHrs";
$tdataindschedule[".inlineEditFields"][] = "SHOTD";
$tdataindschedule[".inlineEditFields"][] = "DHOT";
$tdataindschedule[".inlineEditFields"][] = "RDOTHrs";
$tdataindschedule[".inlineEditFields"][] = "NDOT";
$tdataindschedule[".inlineEditFields"][] = "RHNDOTHrs";
$tdataindschedule[".inlineEditFields"][] = "SHNDOTHrs";
$tdataindschedule[".inlineEditFields"][] = "DHNDOT";
$tdataindschedule[".inlineEditFields"][] = "RDNDOTHrs";
$tdataindschedule[".inlineEditFields"][] = "RHRDOT";
$tdataindschedule[".inlineEditFields"][] = "SHRDOT";
$tdataindschedule[".inlineEditFields"][] = "SHRDOTD";
$tdataindschedule[".inlineEditFields"][] = "DHRDOT";
$tdataindschedule[".inlineEditFields"][] = "RHRDNDOT";
$tdataindschedule[".inlineEditFields"][] = "SHRDNDOT";
$tdataindschedule[".inlineEditFields"][] = "DHRDNDOT";
$tdataindschedule[".inlineEditFields"][] = "VLDay";
$tdataindschedule[".inlineEditFields"][] = "SLDay";
$tdataindschedule[".inlineEditFields"][] = "ELDay";
$tdataindschedule[".inlineEditFields"][] = "PLDay";
$tdataindschedule[".inlineEditFields"][] = "TrODay";
$tdataindschedule[".inlineEditFields"][] = "ApprovedRD";
$tdataindschedule[".inlineEditFields"][] = "RegRD";
$tdataindschedule[".inlineEditFields"][] = "RHRD";
$tdataindschedule[".inlineEditFields"][] = "SHRD";
$tdataindschedule[".inlineEditFields"][] = "DHRD";
$tdataindschedule[".inlineEditFields"][] = "SchedType";
$tdataindschedule[".inlineEditFields"][] = "Shift";
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
$tdataindschedule[".updateSelectedFields"][] = "LateFixPenalty";
$tdataindschedule[".updateSelectedFields"][] = "TotLateMins";
$tdataindschedule[".updateSelectedFields"][] = "HolidayType";
$tdataindschedule[".updateSelectedFields"][] = "Holiday1stHalf";
$tdataindschedule[".updateSelectedFields"][] = "Holiday2ndHalf";
$tdataindschedule[".updateSelectedFields"][] = "RHolidayHrs";
$tdataindschedule[".updateSelectedFields"][] = "SHolidayHrs";
$tdataindschedule[".updateSelectedFields"][] = "ApprovedNightDiff";
$tdataindschedule[".updateSelectedFields"][] = "RHNDHrs";
$tdataindschedule[".updateSelectedFields"][] = "SHNDHrs";
$tdataindschedule[".updateSelectedFields"][] = "RDNDHrs";
$tdataindschedule[".updateSelectedFields"][] = "ExcessHrs";
$tdataindschedule[".updateSelectedFields"][] = "ApprovedOT";
$tdataindschedule[".updateSelectedFields"][] = "RegOTHrs";
$tdataindschedule[".updateSelectedFields"][] = "RHOTHrs";
$tdataindschedule[".updateSelectedFields"][] = "SHOTHrs";
$tdataindschedule[".updateSelectedFields"][] = "RDOTHrs";
$tdataindschedule[".updateSelectedFields"][] = "VLDay";
$tdataindschedule[".updateSelectedFields"][] = "SLDay";
$tdataindschedule[".updateSelectedFields"][] = "ELDay";
$tdataindschedule[".updateSelectedFields"][] = "PLDay";
$tdataindschedule[".updateSelectedFields"][] = "TrODay";
$tdataindschedule[".updateSelectedFields"][] = "ApprovedRD";
$tdataindschedule[".updateSelectedFields"][] = "SchedType";
$tdataindschedule[".updateSelectedFields"][] = "Shift";
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
$tdataindschedule[".exportFields"][] = "LunchBreakFrom";
$tdataindschedule[".exportFields"][] = "LunchBreakTo";
$tdataindschedule[".exportFields"][] = "AfterBreakLogOut";
$tdataindschedule[".exportFields"][] = "AfterBreakLog";
$tdataindschedule[".exportFields"][] = "Mispunched";
$tdataindschedule[".exportFields"][] = "RegWD";
$tdataindschedule[".exportFields"][] = "DWork";
$tdataindschedule[".exportFields"][] = "Absent";
$tdataindschedule[".exportFields"][] = "LateMins";
$tdataindschedule[".exportFields"][] = "UndertimeMins";
$tdataindschedule[".exportFields"][] = "LatePenaltyMins";
$tdataindschedule[".exportFields"][] = "LateFixPenalty";
$tdataindschedule[".exportFields"][] = "BreakLateMins";
$tdataindschedule[".exportFields"][] = "TotLateMins";
$tdataindschedule[".exportFields"][] = "HolidayType";
$tdataindschedule[".exportFields"][] = "Holiday1stHalf";
$tdataindschedule[".exportFields"][] = "Holiday2ndHalf";
$tdataindschedule[".exportFields"][] = "RHolidayHrs";
$tdataindschedule[".exportFields"][] = "SHolidayHrs";
$tdataindschedule[".exportFields"][] = "DH";
$tdataindschedule[".exportFields"][] = "ApprovedNightDiff";
$tdataindschedule[".exportFields"][] = "RegND";
$tdataindschedule[".exportFields"][] = "RHNDHrs";
$tdataindschedule[".exportFields"][] = "SHNDHrs";
$tdataindschedule[".exportFields"][] = "DHND";
$tdataindschedule[".exportFields"][] = "RDNDHrs";
$tdataindschedule[".exportFields"][] = "RHRDND";
$tdataindschedule[".exportFields"][] = "SHRDND";
$tdataindschedule[".exportFields"][] = "DHRDND";
$tdataindschedule[".exportFields"][] = "ExcessHrs";
$tdataindschedule[".exportFields"][] = "ApprovedOT";
$tdataindschedule[".exportFields"][] = "RegOTHrs";
$tdataindschedule[".exportFields"][] = "RHOTHrs";
$tdataindschedule[".exportFields"][] = "SHOTHrs";
$tdataindschedule[".exportFields"][] = "SHOTD";
$tdataindschedule[".exportFields"][] = "DHOT";
$tdataindschedule[".exportFields"][] = "RDOTHrs";
$tdataindschedule[".exportFields"][] = "NDOT";
$tdataindschedule[".exportFields"][] = "RHNDOTHrs";
$tdataindschedule[".exportFields"][] = "SHNDOTHrs";
$tdataindschedule[".exportFields"][] = "DHNDOT";
$tdataindschedule[".exportFields"][] = "RDNDOTHrs";
$tdataindschedule[".exportFields"][] = "RHRDOT";
$tdataindschedule[".exportFields"][] = "SHRDOT";
$tdataindschedule[".exportFields"][] = "SHRDOTD";
$tdataindschedule[".exportFields"][] = "DHRDOT";
$tdataindschedule[".exportFields"][] = "RHRDNDOT";
$tdataindschedule[".exportFields"][] = "SHRDNDOT";
$tdataindschedule[".exportFields"][] = "DHRDNDOT";
$tdataindschedule[".exportFields"][] = "VLDay";
$tdataindschedule[".exportFields"][] = "SLDay";
$tdataindschedule[".exportFields"][] = "ELDay";
$tdataindschedule[".exportFields"][] = "PLDay";
$tdataindschedule[".exportFields"][] = "TrODay";
$tdataindschedule[".exportFields"][] = "ApprovedRD";
$tdataindschedule[".exportFields"][] = "RegRD";
$tdataindschedule[".exportFields"][] = "RHRD";
$tdataindschedule[".exportFields"][] = "SHRD";
$tdataindschedule[".exportFields"][] = "DHRD";
$tdataindschedule[".exportFields"][] = "SchedType";
$tdataindschedule[".exportFields"][] = "Shift";
$tdataindschedule[".exportFields"][] = "BreakMins";

$tdataindschedule[".importFields"] = array();
$tdataindschedule[".importFields"][] = "ScID";
$tdataindschedule[".importFields"][] = "UserName";
$tdataindschedule[".importFields"][] = "SDate";
$tdataindschedule[".importFields"][] = "STimeIn";
$tdataindschedule[".importFields"][] = "STimeOut";
$tdataindschedule[".importFields"][] = "SchedType";
$tdataindschedule[".importFields"][] = "ApprovedOT";
$tdataindschedule[".importFields"][] = "WageType";
$tdataindschedule[".importFields"][] = "ApprovedNightDiff";
$tdataindschedule[".importFields"][] = "EmployeeID";
$tdataindschedule[".importFields"][] = "BreakMins";
$tdataindschedule[".importFields"][] = "Shift";
$tdataindschedule[".importFields"][] = "ApprovedRD";
$tdataindschedule[".importFields"][] = "LunchBreakFrom";
$tdataindschedule[".importFields"][] = "LunchBreakTo";
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
$tdataindschedule[".importFields"][] = "ExcessHrs";
$tdataindschedule[".importFields"][] = "RegOTHrs";
$tdataindschedule[".importFields"][] = "RHOTHrs";
$tdataindschedule[".importFields"][] = "SHOTHrs";
$tdataindschedule[".importFields"][] = "RDOTHrs";
$tdataindschedule[".importFields"][] = "RHNDHrs";
$tdataindschedule[".importFields"][] = "SHNDHrs";
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
$tdataindschedule[".importFields"][] = "BreakLateMins";
$tdataindschedule[".importFields"][] = "RHNDOTHrs";
$tdataindschedule[".importFields"][] = "SHNDOTHrs";
$tdataindschedule[".importFields"][] = "RDNDOTHrs";
$tdataindschedule[".importFields"][] = "DH";
$tdataindschedule[".importFields"][] = "DHRD";
$tdataindschedule[".importFields"][] = "DHOT";
$tdataindschedule[".importFields"][] = "DHRDOT";
$tdataindschedule[".importFields"][] = "SHRDND";
$tdataindschedule[".importFields"][] = "RHRDND";
$tdataindschedule[".importFields"][] = "SHRDNDOT";
$tdataindschedule[".importFields"][] = "RHRDNDOT";
$tdataindschedule[".importFields"][] = "DHND";
$tdataindschedule[".importFields"][] = "DHRDND";
$tdataindschedule[".importFields"][] = "DHNDOT";
$tdataindschedule[".importFields"][] = "DHRDNDOT";
$tdataindschedule[".importFields"][] = "RHRDOT";
$tdataindschedule[".importFields"][] = "SHRDOT";
$tdataindschedule[".importFields"][] = "RegND";
$tdataindschedule[".importFields"][] = "RegRD";
$tdataindschedule[".importFields"][] = "SHOTD";
$tdataindschedule[".importFields"][] = "SHRDOTD";
$tdataindschedule[".importFields"][] = "NDOT";
$tdataindschedule[".importFields"][] = "RHRD";
$tdataindschedule[".importFields"][] = "SHRD";

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
$tdataindschedule[".printFields"][] = "LunchBreakFrom";
$tdataindschedule[".printFields"][] = "LunchBreakTo";
$tdataindschedule[".printFields"][] = "AfterBreakLogOut";
$tdataindschedule[".printFields"][] = "AfterBreakLog";
$tdataindschedule[".printFields"][] = "Mispunched";
$tdataindschedule[".printFields"][] = "RegWD";
$tdataindschedule[".printFields"][] = "DWork";
$tdataindschedule[".printFields"][] = "Absent";
$tdataindschedule[".printFields"][] = "LateMins";
$tdataindschedule[".printFields"][] = "UndertimeMins";
$tdataindschedule[".printFields"][] = "LatePenaltyMins";
$tdataindschedule[".printFields"][] = "LateFixPenalty";
$tdataindschedule[".printFields"][] = "BreakLateMins";
$tdataindschedule[".printFields"][] = "TotLateMins";
$tdataindschedule[".printFields"][] = "HolidayType";
$tdataindschedule[".printFields"][] = "Holiday1stHalf";
$tdataindschedule[".printFields"][] = "Holiday2ndHalf";
$tdataindschedule[".printFields"][] = "RHolidayHrs";
$tdataindschedule[".printFields"][] = "SHolidayHrs";
$tdataindschedule[".printFields"][] = "DH";
$tdataindschedule[".printFields"][] = "ApprovedNightDiff";
$tdataindschedule[".printFields"][] = "RegND";
$tdataindschedule[".printFields"][] = "RHNDHrs";
$tdataindschedule[".printFields"][] = "SHNDHrs";
$tdataindschedule[".printFields"][] = "DHND";
$tdataindschedule[".printFields"][] = "RDNDHrs";
$tdataindschedule[".printFields"][] = "RHRDND";
$tdataindschedule[".printFields"][] = "SHRDND";
$tdataindschedule[".printFields"][] = "DHRDND";
$tdataindschedule[".printFields"][] = "ExcessHrs";
$tdataindschedule[".printFields"][] = "ApprovedOT";
$tdataindschedule[".printFields"][] = "RegOTHrs";
$tdataindschedule[".printFields"][] = "RHOTHrs";
$tdataindschedule[".printFields"][] = "SHOTHrs";
$tdataindschedule[".printFields"][] = "SHOTD";
$tdataindschedule[".printFields"][] = "DHOT";
$tdataindschedule[".printFields"][] = "RDOTHrs";
$tdataindschedule[".printFields"][] = "NDOT";
$tdataindschedule[".printFields"][] = "RHNDOTHrs";
$tdataindschedule[".printFields"][] = "SHNDOTHrs";
$tdataindschedule[".printFields"][] = "DHNDOT";
$tdataindschedule[".printFields"][] = "RDNDOTHrs";
$tdataindschedule[".printFields"][] = "RHRDOT";
$tdataindschedule[".printFields"][] = "SHRDOT";
$tdataindschedule[".printFields"][] = "SHRDOTD";
$tdataindschedule[".printFields"][] = "DHRDOT";
$tdataindschedule[".printFields"][] = "RHRDNDOT";
$tdataindschedule[".printFields"][] = "SHRDNDOT";
$tdataindschedule[".printFields"][] = "DHRDNDOT";
$tdataindschedule[".printFields"][] = "VLDay";
$tdataindschedule[".printFields"][] = "SLDay";
$tdataindschedule[".printFields"][] = "ELDay";
$tdataindschedule[".printFields"][] = "PLDay";
$tdataindschedule[".printFields"][] = "TrODay";
$tdataindschedule[".printFields"][] = "ApprovedRD";
$tdataindschedule[".printFields"][] = "RegRD";
$tdataindschedule[".printFields"][] = "RHRD";
$tdataindschedule[".printFields"][] = "SHRD";
$tdataindschedule[".printFields"][] = "DHRD";
$tdataindschedule[".printFields"][] = "SchedType";
$tdataindschedule[".printFields"][] = "Shift";
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
		$fdata["defaultSearchOption"] = "Contains";

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
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
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
	$fdata["Index"] = 9;
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
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
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








	$tdataindschedule["EmployeeID"] = $fdata;
//	BreakMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
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
	$fdata["Index"] = 12;
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
	$fdata["Index"] = 13;
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
//	LunchBreakFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
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
	$fdata["Index"] = 15;
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
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
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
	$fdata["Index"] = 17;
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








	$tdataindschedule["TimeIn"] = $fdata;
//	TimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
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








	$tdataindschedule["TimeOut"] = $fdata;
//	DayIs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
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
	$fdata["Index"] = 20;
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
	$fdata["Index"] = 21;
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








	$tdataindschedule["Department"] = $fdata;
//	RegWD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "RegWD";
	$fdata["GoodName"] = "RegWD";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","RegWD");
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

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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
	$fdata["Index"] = 23;
	$fdata["strName"] = "DWork";
	$fdata["GoodName"] = "DWork";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","DWork");
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

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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
	$fdata["Index"] = 24;
	$fdata["strName"] = "Absent";
	$fdata["GoodName"] = "Absent";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","Absent");
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

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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








	$tdataindschedule["Absent"] = $fdata;
//	LateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "LateMins";
	$fdata["GoodName"] = "LateMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","LateMins");
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

		$fdata["strField"] = "LateMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LateMins";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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
	$fdata["Index"] = 26;
	$fdata["strName"] = "UndertimeMins";
	$fdata["GoodName"] = "UndertimeMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","UndertimeMins");
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

		$fdata["strField"] = "UndertimeMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UndertimeMins";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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
	$fdata["Index"] = 27;
	$fdata["strName"] = "RHolidayHrs";
	$fdata["GoodName"] = "RHolidayHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","RHolidayHrs");
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

		$fdata["strField"] = "RHolidayHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHolidayHrs";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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
	$fdata["Index"] = 28;
	$fdata["strName"] = "SHolidayHrs";
	$fdata["GoodName"] = "SHolidayHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","SHolidayHrs");
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

		$fdata["strField"] = "SHolidayHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHolidayHrs";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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
//	ExcessHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "ExcessHrs";
	$fdata["GoodName"] = "ExcessHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","ExcessHrs");
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

		$fdata["strField"] = "ExcessHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ExcessHrs";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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








	$tdataindschedule["ExcessHrs"] = $fdata;
//	RegOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "RegOTHrs";
	$fdata["GoodName"] = "RegOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","RegOTHrs");
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

		$fdata["strField"] = "RegOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegOTHrs";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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
	$fdata["Index"] = 31;
	$fdata["strName"] = "RHOTHrs";
	$fdata["GoodName"] = "RHOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","RHOTHrs");
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

		$fdata["strField"] = "RHOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHOTHrs";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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
	$fdata["Index"] = 32;
	$fdata["strName"] = "SHOTHrs";
	$fdata["GoodName"] = "SHOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","SHOTHrs");
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

		$fdata["strField"] = "SHOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHOTHrs";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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
//	RDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "RDOTHrs";
	$fdata["GoodName"] = "RDOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","RDOTHrs");
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

		$fdata["strField"] = "RDOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RDOTHrs";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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
//	RHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "RHNDHrs";
	$fdata["GoodName"] = "RHNDHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","RHNDHrs");
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

		$fdata["strField"] = "RHNDHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHNDHrs";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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
	$fdata["Index"] = 35;
	$fdata["strName"] = "SHNDHrs";
	$fdata["GoodName"] = "SHNDHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","SHNDHrs");
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

		$fdata["strField"] = "SHNDHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHNDHrs";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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
//	RDNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "RDNDHrs";
	$fdata["GoodName"] = "RDNDHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","RDNDHrs");
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

		$fdata["strField"] = "RDNDHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RDNDHrs";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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
	$fdata["Index"] = 37;
	$fdata["strName"] = "VLDay";
	$fdata["GoodName"] = "VLDay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","VLDay");
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

		$fdata["strField"] = "VLDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VLDay";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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
	$fdata["Index"] = 38;
	$fdata["strName"] = "SLDay";
	$fdata["GoodName"] = "SLDay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","SLDay");
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

		$fdata["strField"] = "SLDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SLDay";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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
	$fdata["Index"] = 39;
	$fdata["strName"] = "ELDay";
	$fdata["GoodName"] = "ELDay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","ELDay");
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

		$fdata["strField"] = "ELDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ELDay";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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
	$fdata["Index"] = 40;
	$fdata["strName"] = "PLDay";
	$fdata["GoodName"] = "PLDay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","PLDay");
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

		$fdata["strField"] = "PLDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PLDay";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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
	$fdata["Index"] = 41;
	$fdata["strName"] = "TrODay";
	$fdata["GoodName"] = "TrODay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","TrODay");
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

		$fdata["strField"] = "TrODay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TrODay";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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
	$fdata["Index"] = 42;
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
	$fdata["Index"] = 43;
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

	
	
	
	
	
	
		$edata["controlWidth"] = 64;

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




	$tdataindschedule["Mispunched"] = $fdata;
//	Holiday1stHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
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
	$fdata["Index"] = 45;
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
	$fdata["Index"] = 46;
	$fdata["strName"] = "TotLateMins";
	$fdata["GoodName"] = "TotLateMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","TotLateMins");
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

		$fdata["strField"] = "TotLateMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TotLateMins";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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
	$fdata["Index"] = 47;
	$fdata["strName"] = "LatePenaltyMins";
	$fdata["GoodName"] = "LatePenaltyMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","LatePenaltyMins");
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

		$fdata["strField"] = "LatePenaltyMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LatePenaltyMins";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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
	$fdata["Index"] = 48;
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








	$tdataindschedule["Employer"] = $fdata;
//	LateFixPenalty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
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

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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
	$fdata["Index"] = 50;
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








	$tdataindschedule["AfterBreakLogOut"] = $fdata;
//	AfterBreakLog
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
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








	$tdataindschedule["AfterBreakLog"] = $fdata;
//	BreakLateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "BreakLateMins";
	$fdata["GoodName"] = "BreakLateMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","BreakLateMins");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BreakLateMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BreakLateMins";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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








	$tdataindschedule["BreakLateMins"] = $fdata;
//	RHNDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "RHNDOTHrs";
	$fdata["GoodName"] = "RHNDOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","RHNDOTHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHNDOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHNDOTHrs";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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








	$tdataindschedule["RHNDOTHrs"] = $fdata;
//	SHNDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "SHNDOTHrs";
	$fdata["GoodName"] = "SHNDOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","SHNDOTHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHNDOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHNDOTHrs";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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








	$tdataindschedule["SHNDOTHrs"] = $fdata;
//	RDNDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "RDNDOTHrs";
	$fdata["GoodName"] = "RDNDOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","RDNDOTHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RDNDOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RDNDOTHrs";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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








	$tdataindschedule["RDNDOTHrs"] = $fdata;
//	DH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "DH";
	$fdata["GoodName"] = "DH";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","DH");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DH";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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








	$tdataindschedule["DH"] = $fdata;
//	DHRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "DHRD";
	$fdata["GoodName"] = "DHRD";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","DHRD");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DHRD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHRD";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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








	$tdataindschedule["DHRD"] = $fdata;
//	DHOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "DHOT";
	$fdata["GoodName"] = "DHOT";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","DHOT");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DHOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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








	$tdataindschedule["DHOT"] = $fdata;
//	DHRDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "DHRDOT";
	$fdata["GoodName"] = "DHRDOT";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","DHRDOT");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DHRDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHRDOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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








	$tdataindschedule["DHRDOT"] = $fdata;
//	SHRDND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "SHRDND";
	$fdata["GoodName"] = "SHRDND";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","SHRDND");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHRDND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHRDND";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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








	$tdataindschedule["SHRDND"] = $fdata;
//	RHRDND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "RHRDND";
	$fdata["GoodName"] = "RHRDND";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","RHRDND");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHRDND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHRDND";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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








	$tdataindschedule["RHRDND"] = $fdata;
//	SHRDNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "SHRDNDOT";
	$fdata["GoodName"] = "SHRDNDOT";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","SHRDNDOT");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHRDNDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHRDNDOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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








	$tdataindschedule["SHRDNDOT"] = $fdata;
//	RHRDNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "RHRDNDOT";
	$fdata["GoodName"] = "RHRDNDOT";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","RHRDNDOT");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHRDNDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHRDNDOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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








	$tdataindschedule["RHRDNDOT"] = $fdata;
//	DHND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "DHND";
	$fdata["GoodName"] = "DHND";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","DHND");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DHND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHND";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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








	$tdataindschedule["DHND"] = $fdata;
//	DHRDND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "DHRDND";
	$fdata["GoodName"] = "DHRDND";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","DHRDND");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DHRDND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHRDND";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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








	$tdataindschedule["DHRDND"] = $fdata;
//	DHNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "DHNDOT";
	$fdata["GoodName"] = "DHNDOT";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","DHNDOT");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DHNDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHNDOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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








	$tdataindschedule["DHNDOT"] = $fdata;
//	DHRDNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "DHRDNDOT";
	$fdata["GoodName"] = "DHRDNDOT";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","DHRDNDOT");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DHRDNDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHRDNDOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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








	$tdataindschedule["DHRDNDOT"] = $fdata;
//	RHRDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "RHRDOT";
	$fdata["GoodName"] = "RHRDOT";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","RHRDOT");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHRDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHRDOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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




	$tdataindschedule["RHRDOT"] = $fdata;
//	SHRDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "SHRDOT";
	$fdata["GoodName"] = "SHRDOT";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","SHRDOT");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHRDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHRDOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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




	$tdataindschedule["SHRDOT"] = $fdata;
//	RegND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "RegND";
	$fdata["GoodName"] = "RegND";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","RegND");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RegND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegND";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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




	$tdataindschedule["RegND"] = $fdata;
//	RegRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "RegRD";
	$fdata["GoodName"] = "RegRD";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","RegRD");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RegRD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegRD";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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




	$tdataindschedule["RegRD"] = $fdata;
//	SHOTD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "SHOTD";
	$fdata["GoodName"] = "SHOTD";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","SHOTD");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHOTD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHOTD";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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




	$tdataindschedule["SHOTD"] = $fdata;
//	SHRDOTD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "SHRDOTD";
	$fdata["GoodName"] = "SHRDOTD";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","SHRDOTD");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHRDOTD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHRDOTD";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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




	$tdataindschedule["SHRDOTD"] = $fdata;
//	NDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "NDOT";
	$fdata["GoodName"] = "NDOT";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","NDOT");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NDOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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




	$tdataindschedule["NDOT"] = $fdata;
//	RHRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "RHRD";
	$fdata["GoodName"] = "RHRD";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","RHRD");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHRD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHRD";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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




	$tdataindschedule["RHRD"] = $fdata;
//	SHRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "SHRD";
	$fdata["GoodName"] = "SHRD";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule","SHRD");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHRD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHRD";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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




	$tdataindschedule["SHRD"] = $fdata;


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
$proto0["m_strFieldList"] = "ScID,  UserName,  SDate,  STimeIn,  STimeOut,  SchedType,  ApprovedOT,  WageType,  ApprovedNightDiff,  EmployeeID,  BreakMins,  Shift,  ApprovedRD,  LunchBreakFrom,  LunchBreakTo,  Division,  TimeIn,  TimeOut,  DayIs,  RestDay,  Department,  RegWD,  DWork,  Absent,  LateMins,  UndertimeMins,  RHolidayHrs,  SHolidayHrs,  ExcessHrs,  RegOTHrs,  RHOTHrs,  SHOTHrs,  RDOTHrs,  RHNDHrs,  SHNDHrs,  RDNDHrs,  VLDay,  SLDay,  ELDay,  PLDay,  TrODay,  HolidayType,  Mispunched,  Holiday1stHalf,  Holiday2ndHalf,  TotLateMins,  LatePenaltyMins,  Employer,  LateFixPenalty,  AfterBreakLogOut,  AfterBreakLog,  BreakLateMins,  RHNDOTHrs,  SHNDOTHrs,  RDNDOTHrs,  DH,  DHRD,  DHOT,  DHRDOT,  SHRDND,  RHRDND,  SHRDNDOT,  RHRDNDOT,  DHND,  DHRDND,  DHNDOT,  DHRDNDOT,  RHRDOT,  SHRDOT,  RegND,  RegRD,  SHOTD,  SHRDOTD,  NDOT,  RHRD,  SHRD";
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
	"m_strName" => "WageType",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto20["m_sql"] = "WageType";
$proto20["m_srcTableName"] = "indschedule";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedNightDiff",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto22["m_sql"] = "ApprovedNightDiff";
$proto22["m_srcTableName"] = "indschedule";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto24["m_sql"] = "EmployeeID";
$proto24["m_srcTableName"] = "indschedule";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "BreakMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto26["m_sql"] = "BreakMins";
$proto26["m_srcTableName"] = "indschedule";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Shift",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto28["m_sql"] = "Shift";
$proto28["m_srcTableName"] = "indschedule";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedRD",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto30["m_sql"] = "ApprovedRD";
$proto30["m_srcTableName"] = "indschedule";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "LunchBreakFrom",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto32["m_sql"] = "LunchBreakFrom";
$proto32["m_srcTableName"] = "indschedule";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "LunchBreakTo",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto34["m_sql"] = "LunchBreakTo";
$proto34["m_srcTableName"] = "indschedule";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto36["m_sql"] = "Division";
$proto36["m_srcTableName"] = "indschedule";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeIn",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto38["m_sql"] = "TimeIn";
$proto38["m_srcTableName"] = "indschedule";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeOut",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto40["m_sql"] = "TimeOut";
$proto40["m_srcTableName"] = "indschedule";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "DayIs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto42["m_sql"] = "DayIs";
$proto42["m_srcTableName"] = "indschedule";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "RestDay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto44["m_sql"] = "RestDay";
$proto44["m_srcTableName"] = "indschedule";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto46["m_sql"] = "Department";
$proto46["m_srcTableName"] = "indschedule";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "RegWD",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto48["m_sql"] = "RegWD";
$proto48["m_srcTableName"] = "indschedule";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "DWork",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto50["m_sql"] = "DWork";
$proto50["m_srcTableName"] = "indschedule";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Absent",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto52["m_sql"] = "Absent";
$proto52["m_srcTableName"] = "indschedule";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "LateMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto54["m_sql"] = "LateMins";
$proto54["m_srcTableName"] = "indschedule";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "UndertimeMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto56["m_sql"] = "UndertimeMins";
$proto56["m_srcTableName"] = "indschedule";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "RHolidayHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto58["m_sql"] = "RHolidayHrs";
$proto58["m_srcTableName"] = "indschedule";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "SHolidayHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto60["m_sql"] = "SHolidayHrs";
$proto60["m_srcTableName"] = "indschedule";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "ExcessHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto62["m_sql"] = "ExcessHrs";
$proto62["m_srcTableName"] = "indschedule";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "RegOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto64["m_sql"] = "RegOTHrs";
$proto64["m_srcTableName"] = "indschedule";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "RHOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto66["m_sql"] = "RHOTHrs";
$proto66["m_srcTableName"] = "indschedule";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto68["m_sql"] = "SHOTHrs";
$proto68["m_srcTableName"] = "indschedule";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "RDOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto70["m_sql"] = "RDOTHrs";
$proto70["m_srcTableName"] = "indschedule";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "RHNDHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto72["m_sql"] = "RHNDHrs";
$proto72["m_srcTableName"] = "indschedule";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "SHNDHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto74["m_sql"] = "SHNDHrs";
$proto74["m_srcTableName"] = "indschedule";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "RDNDHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto76["m_sql"] = "RDNDHrs";
$proto76["m_srcTableName"] = "indschedule";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "VLDay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto78["m_sql"] = "VLDay";
$proto78["m_srcTableName"] = "indschedule";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "SLDay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto80["m_sql"] = "SLDay";
$proto80["m_srcTableName"] = "indschedule";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "ELDay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto82["m_sql"] = "ELDay";
$proto82["m_srcTableName"] = "indschedule";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "PLDay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto84["m_sql"] = "PLDay";
$proto84["m_srcTableName"] = "indschedule";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "TrODay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto86["m_sql"] = "TrODay";
$proto86["m_srcTableName"] = "indschedule";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "HolidayType",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto88["m_sql"] = "HolidayType";
$proto88["m_srcTableName"] = "indschedule";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "Mispunched",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto90["m_sql"] = "Mispunched";
$proto90["m_srcTableName"] = "indschedule";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "Holiday1stHalf",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto92["m_sql"] = "Holiday1stHalf";
$proto92["m_srcTableName"] = "indschedule";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "Holiday2ndHalf",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto94["m_sql"] = "Holiday2ndHalf";
$proto94["m_srcTableName"] = "indschedule";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "TotLateMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto96["m_sql"] = "TotLateMins";
$proto96["m_srcTableName"] = "indschedule";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "LatePenaltyMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto98["m_sql"] = "LatePenaltyMins";
$proto98["m_srcTableName"] = "indschedule";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto100["m_sql"] = "Employer";
$proto100["m_srcTableName"] = "indschedule";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "LateFixPenalty",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto102["m_sql"] = "LateFixPenalty";
$proto102["m_srcTableName"] = "indschedule";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "AfterBreakLogOut",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto104["m_sql"] = "AfterBreakLogOut";
$proto104["m_srcTableName"] = "indschedule";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "AfterBreakLog",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto106["m_sql"] = "AfterBreakLog";
$proto106["m_srcTableName"] = "indschedule";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "BreakLateMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto108["m_sql"] = "BreakLateMins";
$proto108["m_srcTableName"] = "indschedule";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "RHNDOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto110["m_sql"] = "RHNDOTHrs";
$proto110["m_srcTableName"] = "indschedule";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "SHNDOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto112["m_sql"] = "SHNDOTHrs";
$proto112["m_srcTableName"] = "indschedule";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "RDNDOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto114["m_sql"] = "RDNDOTHrs";
$proto114["m_srcTableName"] = "indschedule";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "DH",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto116["m_sql"] = "DH";
$proto116["m_srcTableName"] = "indschedule";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRD",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto118["m_sql"] = "DHRD";
$proto118["m_srcTableName"] = "indschedule";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "DHOT",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto120["m_sql"] = "DHOT";
$proto120["m_srcTableName"] = "indschedule";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDOT",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto122["m_sql"] = "DHRDOT";
$proto122["m_srcTableName"] = "indschedule";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDND",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto124["m_sql"] = "SHRDND";
$proto124["m_srcTableName"] = "indschedule";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDND",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto126["m_sql"] = "RHRDND";
$proto126["m_srcTableName"] = "indschedule";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDNDOT",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto128["m_sql"] = "SHRDNDOT";
$proto128["m_srcTableName"] = "indschedule";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDNDOT",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto130["m_sql"] = "RHRDNDOT";
$proto130["m_srcTableName"] = "indschedule";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "DHND",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto132["m_sql"] = "DHND";
$proto132["m_srcTableName"] = "indschedule";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDND",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto134["m_sql"] = "DHRDND";
$proto134["m_srcTableName"] = "indschedule";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "DHNDOT",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto136["m_sql"] = "DHNDOT";
$proto136["m_srcTableName"] = "indschedule";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDNDOT",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto138["m_sql"] = "DHRDNDOT";
$proto138["m_srcTableName"] = "indschedule";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDOT",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto140["m_sql"] = "RHRDOT";
$proto140["m_srcTableName"] = "indschedule";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDOT",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto142["m_sql"] = "SHRDOT";
$proto142["m_srcTableName"] = "indschedule";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "RegND",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto144["m_sql"] = "RegND";
$proto144["m_srcTableName"] = "indschedule";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "RegRD",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto146["m_sql"] = "RegRD";
$proto146["m_srcTableName"] = "indschedule";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOTD",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto148["m_sql"] = "SHOTD";
$proto148["m_srcTableName"] = "indschedule";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDOTD",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto150["m_sql"] = "SHRDOTD";
$proto150["m_srcTableName"] = "indschedule";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "NDOT",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto152["m_sql"] = "NDOT";
$proto152["m_srcTableName"] = "indschedule";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRD",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto154["m_sql"] = "RHRD";
$proto154["m_srcTableName"] = "indschedule";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRD",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto156["m_sql"] = "SHRD";
$proto156["m_srcTableName"] = "indschedule";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto158=array();
$proto158["m_link"] = "SQLL_MAIN";
			$proto159=array();
$proto159["m_strName"] = "indschedule";
$proto159["m_srcTableName"] = "indschedule";
$proto159["m_columns"] = array();
$proto159["m_columns"][] = "ScID";
$proto159["m_columns"][] = "UserName";
$proto159["m_columns"][] = "SDate";
$proto159["m_columns"][] = "STimeIn";
$proto159["m_columns"][] = "STimeOut";
$proto159["m_columns"][] = "SchedType";
$proto159["m_columns"][] = "CrossMidnight";
$proto159["m_columns"][] = "RecordOnFirstDay";
$proto159["m_columns"][] = "RecordOnSecondDay";
$proto159["m_columns"][] = "ApprovedOT";
$proto159["m_columns"][] = "AOTMins";
$proto159["m_columns"][] = "SRestDay";
$proto159["m_columns"][] = "WageType";
$proto159["m_columns"][] = "ApprovedNightDiff";
$proto159["m_columns"][] = "ANDiff";
$proto159["m_columns"][] = "EmployeeID";
$proto159["m_columns"][] = "MinsPerDay";
$proto159["m_columns"][] = "BreakMins";
$proto159["m_columns"][] = "Shift";
$proto159["m_columns"][] = "ApprovedRD";
$proto159["m_columns"][] = "RDMins";
$proto159["m_columns"][] = "ScRID";
$proto159["m_columns"][] = "LunchBreakFrom";
$proto159["m_columns"][] = "LunchBreakTo";
$proto159["m_columns"][] = "ReqLogOutInOnBreak";
$proto159["m_columns"][] = "FirstHalfMins";
$proto159["m_columns"][] = "SecondHalfMins";
$proto159["m_columns"][] = "NDMealAllowancePerShift";
$proto159["m_columns"][] = "NDMinimumHrs";
$proto159["m_columns"][] = "NDMealAllowance";
$proto159["m_columns"][] = "Division";
$proto159["m_columns"][] = "TimeIn";
$proto159["m_columns"][] = "TimeOut";
$proto159["m_columns"][] = "DayIs";
$proto159["m_columns"][] = "RestDay";
$proto159["m_columns"][] = "Schedx";
$proto159["m_columns"][] = "Department";
$proto159["m_columns"][] = "RegWD";
$proto159["m_columns"][] = "DWork";
$proto159["m_columns"][] = "Absent";
$proto159["m_columns"][] = "LateMins";
$proto159["m_columns"][] = "UndertimeMins";
$proto159["m_columns"][] = "RHolidayHrs";
$proto159["m_columns"][] = "SHolidayHrs";
$proto159["m_columns"][] = "CHolidayHrs";
$proto159["m_columns"][] = "ExcessHrs";
$proto159["m_columns"][] = "RegOTHrs";
$proto159["m_columns"][] = "RHOTHrs";
$proto159["m_columns"][] = "SHOTHrs";
$proto159["m_columns"][] = "CHOTHrs";
$proto159["m_columns"][] = "RDOTHrs";
$proto159["m_columns"][] = "NDHrs";
$proto159["m_columns"][] = "RDHrs";
$proto159["m_columns"][] = "RegNDHrs";
$proto159["m_columns"][] = "RHNDHrs";
$proto159["m_columns"][] = "SHNDHrs";
$proto159["m_columns"][] = "CHNDHrs";
$proto159["m_columns"][] = "RDNDHrs";
$proto159["m_columns"][] = "VLDay";
$proto159["m_columns"][] = "SLDay";
$proto159["m_columns"][] = "ELDay";
$proto159["m_columns"][] = "PLDay";
$proto159["m_columns"][] = "TrODay";
$proto159["m_columns"][] = "HolidayType";
$proto159["m_columns"][] = "Mispunched";
$proto159["m_columns"][] = "Holiday1stHalf";
$proto159["m_columns"][] = "Holiday2ndHalf";
$proto159["m_columns"][] = "AfterBreakLog";
$proto159["m_columns"][] = "BreakLateMins";
$proto159["m_columns"][] = "TotLateMins";
$proto159["m_columns"][] = "LatePenaltyMins";
$proto159["m_columns"][] = "Employer";
$proto159["m_columns"][] = "AfterBreakLogOut";
$proto159["m_columns"][] = "LateFixPenalty";
$proto159["m_columns"][] = "Locked";
$proto159["m_columns"][] = "IScRID";
$proto159["m_columns"][] = "PreLogMins";
$proto159["m_columns"][] = "IncludeBreakLate";
$proto159["m_columns"][] = "GracePeriodMins";
$proto159["m_columns"][] = "WithAddBreaks";
$proto159["m_columns"][] = "ANDOTMins";
$proto159["m_columns"][] = "RegNDOTHrs";
$proto159["m_columns"][] = "RHNDOTHrs";
$proto159["m_columns"][] = "SHNDOTHrs";
$proto159["m_columns"][] = "CHNDOTHrs";
$proto159["m_columns"][] = "RDNDOTHrs";
$proto159["m_columns"][] = "DH";
$proto159["m_columns"][] = "DHRD";
$proto159["m_columns"][] = "DHOT";
$proto159["m_columns"][] = "DHRDOT";
$proto159["m_columns"][] = "SHRDND";
$proto159["m_columns"][] = "RHRDND";
$proto159["m_columns"][] = "SHRDNDOT";
$proto159["m_columns"][] = "RHRDNDOT";
$proto159["m_columns"][] = "DHND";
$proto159["m_columns"][] = "DHRDND";
$proto159["m_columns"][] = "DHNDOT";
$proto159["m_columns"][] = "DHRDNDOT";
$proto159["m_columns"][] = "RHRDOT";
$proto159["m_columns"][] = "SHRDOT";
$proto159["m_columns"][] = "RegND";
$proto159["m_columns"][] = "RegRD";
$proto159["m_columns"][] = "SHOTD";
$proto159["m_columns"][] = "SHRDOTD";
$proto159["m_columns"][] = "NDOT";
$proto159["m_columns"][] = "RHRD";
$proto159["m_columns"][] = "SHRD";
$obj = new SQLTable($proto159);

$proto158["m_table"] = $obj;
$proto158["m_sql"] = "indschedule";
$proto158["m_alias"] = "";
$proto158["m_srcTableName"] = "indschedule";
$proto160=array();
$proto160["m_sql"] = "";
$proto160["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto160["m_column"]=$obj;
$proto160["m_contained"] = array();
$proto160["m_strCase"] = "";
$proto160["m_havingmode"] = false;
$proto160["m_inBrackets"] = false;
$proto160["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto160);

$proto158["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto158);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto162=array();
						$obj = new SQLField(array(
	"m_strName" => "ScID",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule"
));

$proto162["m_column"]=$obj;
$proto162["m_bAsc"] = 1;
$proto162["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto162);

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