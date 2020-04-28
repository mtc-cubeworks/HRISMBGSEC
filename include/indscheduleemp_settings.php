<?php
require_once(getabspath("classes/cipherer.php"));




$tdataindscheduleemp = array();
	$tdataindscheduleemp[".truncateText"] = true;
	$tdataindscheduleemp[".NumberOfChars"] = 80;
	$tdataindscheduleemp[".ShortName"] = "indscheduleemp";
	$tdataindscheduleemp[".OwnerID"] = "";
	$tdataindscheduleemp[".OriginalTable"] = "indschedule";

//	field labels
$fieldLabelsindscheduleemp = array();
$fieldToolTipsindscheduleemp = array();
$pageTitlesindscheduleemp = array();
$placeHoldersindscheduleemp = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsindscheduleemp["English"] = array();
	$fieldToolTipsindscheduleemp["English"] = array();
	$placeHoldersindscheduleemp["English"] = array();
	$pageTitlesindscheduleemp["English"] = array();
	$fieldLabelsindscheduleemp["English"]["ScID"] = "Sc ID";
	$fieldToolTipsindscheduleemp["English"]["ScID"] = "";
	$placeHoldersindscheduleemp["English"]["ScID"] = "";
	$fieldLabelsindscheduleemp["English"]["UserName"] = "Employee";
	$fieldToolTipsindscheduleemp["English"]["UserName"] = "";
	$placeHoldersindscheduleemp["English"]["UserName"] = "";
	$fieldLabelsindscheduleemp["English"]["SDate"] = "SDate";
	$fieldToolTipsindscheduleemp["English"]["SDate"] = "";
	$placeHoldersindscheduleemp["English"]["SDate"] = "";
	$fieldLabelsindscheduleemp["English"]["STimeIn"] = "STime In";
	$fieldToolTipsindscheduleemp["English"]["STimeIn"] = "";
	$placeHoldersindscheduleemp["English"]["STimeIn"] = "";
	$fieldLabelsindscheduleemp["English"]["STimeOut"] = "STime Out";
	$fieldToolTipsindscheduleemp["English"]["STimeOut"] = "";
	$placeHoldersindscheduleemp["English"]["STimeOut"] = "";
	$fieldLabelsindscheduleemp["English"]["SchedType"] = "Sched Type";
	$fieldToolTipsindscheduleemp["English"]["SchedType"] = "";
	$placeHoldersindscheduleemp["English"]["SchedType"] = "";
	$fieldLabelsindscheduleemp["English"]["ApprovedOT"] = "Approved OT";
	$fieldToolTipsindscheduleemp["English"]["ApprovedOT"] = "";
	$placeHoldersindscheduleemp["English"]["ApprovedOT"] = "";
	$fieldLabelsindscheduleemp["English"]["WageType"] = "Wage Type";
	$fieldToolTipsindscheduleemp["English"]["WageType"] = "";
	$placeHoldersindscheduleemp["English"]["WageType"] = "";
	$fieldLabelsindscheduleemp["English"]["ApprovedNightDiff"] = "Approved ND";
	$fieldToolTipsindscheduleemp["English"]["ApprovedNightDiff"] = "";
	$placeHoldersindscheduleemp["English"]["ApprovedNightDiff"] = "";
	$fieldLabelsindscheduleemp["English"]["EmployeeID"] = "Biometric ID";
	$fieldToolTipsindscheduleemp["English"]["EmployeeID"] = "";
	$placeHoldersindscheduleemp["English"]["EmployeeID"] = "";
	$fieldLabelsindscheduleemp["English"]["BreakMins"] = "Break (m)";
	$fieldToolTipsindscheduleemp["English"]["BreakMins"] = "";
	$placeHoldersindscheduleemp["English"]["BreakMins"] = "";
	$fieldLabelsindscheduleemp["English"]["Shift"] = "Shift";
	$fieldToolTipsindscheduleemp["English"]["Shift"] = "";
	$placeHoldersindscheduleemp["English"]["Shift"] = "";
	$fieldLabelsindscheduleemp["English"]["ApprovedRD"] = "Approved RD";
	$fieldToolTipsindscheduleemp["English"]["ApprovedRD"] = "";
	$placeHoldersindscheduleemp["English"]["ApprovedRD"] = "";
	$fieldLabelsindscheduleemp["English"]["LunchBreakFrom"] = "SBreak Out";
	$fieldToolTipsindscheduleemp["English"]["LunchBreakFrom"] = "";
	$placeHoldersindscheduleemp["English"]["LunchBreakFrom"] = "";
	$fieldLabelsindscheduleemp["English"]["LunchBreakTo"] = "SBreak In";
	$fieldToolTipsindscheduleemp["English"]["LunchBreakTo"] = "";
	$placeHoldersindscheduleemp["English"]["LunchBreakTo"] = "";
	$fieldLabelsindscheduleemp["English"]["Division"] = "Division";
	$fieldToolTipsindscheduleemp["English"]["Division"] = "";
	$placeHoldersindscheduleemp["English"]["Division"] = "";
	$fieldLabelsindscheduleemp["English"]["TimeIn"] = "Time In";
	$fieldToolTipsindscheduleemp["English"]["TimeIn"] = "";
	$placeHoldersindscheduleemp["English"]["TimeIn"] = "";
	$fieldLabelsindscheduleemp["English"]["TimeOut"] = "Time Out";
	$fieldToolTipsindscheduleemp["English"]["TimeOut"] = "";
	$placeHoldersindscheduleemp["English"]["TimeOut"] = "";
	$fieldLabelsindscheduleemp["English"]["DayIs"] = "Day Is";
	$fieldToolTipsindscheduleemp["English"]["DayIs"] = "";
	$placeHoldersindscheduleemp["English"]["DayIs"] = "";
	$fieldLabelsindscheduleemp["English"]["RestDay"] = "Rest Day";
	$fieldToolTipsindscheduleemp["English"]["RestDay"] = "";
	$placeHoldersindscheduleemp["English"]["RestDay"] = "";
	$fieldLabelsindscheduleemp["English"]["Department"] = "Department";
	$fieldToolTipsindscheduleemp["English"]["Department"] = "";
	$placeHoldersindscheduleemp["English"]["Department"] = "";
	$fieldLabelsindscheduleemp["English"]["RegWD"] = "Reg WD";
	$fieldToolTipsindscheduleemp["English"]["RegWD"] = "";
	$placeHoldersindscheduleemp["English"]["RegWD"] = "";
	$fieldLabelsindscheduleemp["English"]["DWork"] = "DWork";
	$fieldToolTipsindscheduleemp["English"]["DWork"] = "";
	$placeHoldersindscheduleemp["English"]["DWork"] = "";
	$fieldLabelsindscheduleemp["English"]["Absent"] = "Absent";
	$fieldToolTipsindscheduleemp["English"]["Absent"] = "";
	$placeHoldersindscheduleemp["English"]["Absent"] = "";
	$fieldLabelsindscheduleemp["English"]["LateMins"] = "Late (m)";
	$fieldToolTipsindscheduleemp["English"]["LateMins"] = "";
	$placeHoldersindscheduleemp["English"]["LateMins"] = "";
	$fieldLabelsindscheduleemp["English"]["UndertimeMins"] = "Undertime (m)";
	$fieldToolTipsindscheduleemp["English"]["UndertimeMins"] = "";
	$placeHoldersindscheduleemp["English"]["UndertimeMins"] = "";
	$fieldLabelsindscheduleemp["English"]["RHolidayHrs"] = "RH (h)";
	$fieldToolTipsindscheduleemp["English"]["RHolidayHrs"] = "";
	$placeHoldersindscheduleemp["English"]["RHolidayHrs"] = "";
	$fieldLabelsindscheduleemp["English"]["SHolidayHrs"] = "SH (h)";
	$fieldToolTipsindscheduleemp["English"]["SHolidayHrs"] = "";
	$placeHoldersindscheduleemp["English"]["SHolidayHrs"] = "";
	$fieldLabelsindscheduleemp["English"]["ExcessHrs"] = "Temp OT (h)";
	$fieldToolTipsindscheduleemp["English"]["ExcessHrs"] = "";
	$placeHoldersindscheduleemp["English"]["ExcessHrs"] = "";
	$fieldLabelsindscheduleemp["English"]["RegOTHrs"] = "Reg OT (h)";
	$fieldToolTipsindscheduleemp["English"]["RegOTHrs"] = "";
	$placeHoldersindscheduleemp["English"]["RegOTHrs"] = "";
	$fieldLabelsindscheduleemp["English"]["RHOTHrs"] = "RH-OT (h)";
	$fieldToolTipsindscheduleemp["English"]["RHOTHrs"] = "";
	$placeHoldersindscheduleemp["English"]["RHOTHrs"] = "";
	$fieldLabelsindscheduleemp["English"]["SHOTHrs"] = "SH-OT (h)";
	$fieldToolTipsindscheduleemp["English"]["SHOTHrs"] = "";
	$placeHoldersindscheduleemp["English"]["SHOTHrs"] = "";
	$fieldLabelsindscheduleemp["English"]["RDOTHrs"] = "RD-OT (h)";
	$fieldToolTipsindscheduleemp["English"]["RDOTHrs"] = "";
	$placeHoldersindscheduleemp["English"]["RDOTHrs"] = "";
	$fieldLabelsindscheduleemp["English"]["RHNDHrs"] = "RH-ND (h)";
	$fieldToolTipsindscheduleemp["English"]["RHNDHrs"] = "";
	$placeHoldersindscheduleemp["English"]["RHNDHrs"] = "";
	$fieldLabelsindscheduleemp["English"]["SHNDHrs"] = "SH-ND (h)";
	$fieldToolTipsindscheduleemp["English"]["SHNDHrs"] = "";
	$placeHoldersindscheduleemp["English"]["SHNDHrs"] = "";
	$fieldLabelsindscheduleemp["English"]["RDNDHrs"] = "RD-ND (h)";
	$fieldToolTipsindscheduleemp["English"]["RDNDHrs"] = "";
	$placeHoldersindscheduleemp["English"]["RDNDHrs"] = "";
	$fieldLabelsindscheduleemp["English"]["VLDay"] = "VL (d)";
	$fieldToolTipsindscheduleemp["English"]["VLDay"] = "";
	$placeHoldersindscheduleemp["English"]["VLDay"] = "";
	$fieldLabelsindscheduleemp["English"]["SLDay"] = "SL (d)";
	$fieldToolTipsindscheduleemp["English"]["SLDay"] = "";
	$placeHoldersindscheduleemp["English"]["SLDay"] = "";
	$fieldLabelsindscheduleemp["English"]["ELDay"] = "EL (d)";
	$fieldToolTipsindscheduleemp["English"]["ELDay"] = "";
	$placeHoldersindscheduleemp["English"]["ELDay"] = "";
	$fieldLabelsindscheduleemp["English"]["PLDay"] = "PL (d)";
	$fieldToolTipsindscheduleemp["English"]["PLDay"] = "";
	$placeHoldersindscheduleemp["English"]["PLDay"] = "";
	$fieldLabelsindscheduleemp["English"]["TrODay"] = "OB (d)";
	$fieldToolTipsindscheduleemp["English"]["TrODay"] = "";
	$placeHoldersindscheduleemp["English"]["TrODay"] = "";
	$fieldLabelsindscheduleemp["English"]["Mispunched"] = "Mispunched";
	$fieldToolTipsindscheduleemp["English"]["Mispunched"] = "";
	$placeHoldersindscheduleemp["English"]["Mispunched"] = "";
	$fieldLabelsindscheduleemp["English"]["HolidayType"] = "Holiday Type";
	$fieldToolTipsindscheduleemp["English"]["HolidayType"] = "";
	$placeHoldersindscheduleemp["English"]["HolidayType"] = "";
	$fieldLabelsindscheduleemp["English"]["Holiday1stHalf"] = "Holiday1st Half";
	$fieldToolTipsindscheduleemp["English"]["Holiday1stHalf"] = "";
	$placeHoldersindscheduleemp["English"]["Holiday1stHalf"] = "";
	$fieldLabelsindscheduleemp["English"]["Holiday2ndHalf"] = "Holiday2nd Half";
	$fieldToolTipsindscheduleemp["English"]["Holiday2ndHalf"] = "";
	$placeHoldersindscheduleemp["English"]["Holiday2ndHalf"] = "";
	$fieldLabelsindscheduleemp["English"]["TotLateMins"] = "Tot Late (m)";
	$fieldToolTipsindscheduleemp["English"]["TotLateMins"] = "";
	$placeHoldersindscheduleemp["English"]["TotLateMins"] = "";
	$fieldLabelsindscheduleemp["English"]["LatePenaltyMins"] = "Late Penalty (m)";
	$fieldToolTipsindscheduleemp["English"]["LatePenaltyMins"] = "";
	$placeHoldersindscheduleemp["English"]["LatePenaltyMins"] = "";
	$fieldLabelsindscheduleemp["English"]["Employer"] = "Employer";
	$fieldToolTipsindscheduleemp["English"]["Employer"] = "";
	$placeHoldersindscheduleemp["English"]["Employer"] = "";
	$fieldLabelsindscheduleemp["English"]["LateFixPenalty"] = "Late Fix Penalty";
	$fieldToolTipsindscheduleemp["English"]["LateFixPenalty"] = "";
	$placeHoldersindscheduleemp["English"]["LateFixPenalty"] = "";
	$fieldLabelsindscheduleemp["English"]["AfterBreakLogOut"] = "Break Out";
	$fieldToolTipsindscheduleemp["English"]["AfterBreakLogOut"] = "";
	$placeHoldersindscheduleemp["English"]["AfterBreakLogOut"] = "";
	$fieldLabelsindscheduleemp["English"]["AfterBreakLog"] = "Break In";
	$fieldToolTipsindscheduleemp["English"]["AfterBreakLog"] = "";
	$placeHoldersindscheduleemp["English"]["AfterBreakLog"] = "";
	$fieldLabelsindscheduleemp["English"]["BreakLateMins"] = "Break Late (m)";
	$fieldToolTipsindscheduleemp["English"]["BreakLateMins"] = "";
	$placeHoldersindscheduleemp["English"]["BreakLateMins"] = "";
	$fieldLabelsindscheduleemp["English"]["RHNDOTHrs"] = "RH-ND-OT (h)";
	$fieldToolTipsindscheduleemp["English"]["RHNDOTHrs"] = "";
	$placeHoldersindscheduleemp["English"]["RHNDOTHrs"] = "";
	$fieldLabelsindscheduleemp["English"]["SHNDOTHrs"] = "SH-ND-OT (h)";
	$fieldToolTipsindscheduleemp["English"]["SHNDOTHrs"] = "";
	$placeHoldersindscheduleemp["English"]["SHNDOTHrs"] = "";
	$fieldLabelsindscheduleemp["English"]["RDNDOTHrs"] = "RD-ND-OT (h)";
	$fieldToolTipsindscheduleemp["English"]["RDNDOTHrs"] = "";
	$placeHoldersindscheduleemp["English"]["RDNDOTHrs"] = "";
	$fieldLabelsindscheduleemp["English"]["DH"] = "DH (h)";
	$fieldToolTipsindscheduleemp["English"]["DH"] = "";
	$placeHoldersindscheduleemp["English"]["DH"] = "";
	$fieldLabelsindscheduleemp["English"]["DHRD"] = "DH-RD (h)";
	$fieldToolTipsindscheduleemp["English"]["DHRD"] = "";
	$placeHoldersindscheduleemp["English"]["DHRD"] = "";
	$fieldLabelsindscheduleemp["English"]["DHOT"] = "DH-OT (h)";
	$fieldToolTipsindscheduleemp["English"]["DHOT"] = "";
	$placeHoldersindscheduleemp["English"]["DHOT"] = "";
	$fieldLabelsindscheduleemp["English"]["DHRDOT"] = "DH-RD-OT (h)";
	$fieldToolTipsindscheduleemp["English"]["DHRDOT"] = "";
	$placeHoldersindscheduleemp["English"]["DHRDOT"] = "";
	$fieldLabelsindscheduleemp["English"]["SHRDND"] = "SH-RD-ND (h)";
	$fieldToolTipsindscheduleemp["English"]["SHRDND"] = "";
	$placeHoldersindscheduleemp["English"]["SHRDND"] = "";
	$fieldLabelsindscheduleemp["English"]["RHRDND"] = "RH-RD-ND (h)";
	$fieldToolTipsindscheduleemp["English"]["RHRDND"] = "";
	$placeHoldersindscheduleemp["English"]["RHRDND"] = "";
	$fieldLabelsindscheduleemp["English"]["SHRDNDOT"] = "SH-RD-ND-OT (h)";
	$fieldToolTipsindscheduleemp["English"]["SHRDNDOT"] = "";
	$placeHoldersindscheduleemp["English"]["SHRDNDOT"] = "";
	$fieldLabelsindscheduleemp["English"]["RHRDNDOT"] = "RH-RD-ND-OT (h)";
	$fieldToolTipsindscheduleemp["English"]["RHRDNDOT"] = "";
	$placeHoldersindscheduleemp["English"]["RHRDNDOT"] = "";
	$fieldLabelsindscheduleemp["English"]["DHND"] = "DH-ND (h)";
	$fieldToolTipsindscheduleemp["English"]["DHND"] = "";
	$placeHoldersindscheduleemp["English"]["DHND"] = "";
	$fieldLabelsindscheduleemp["English"]["DHRDND"] = "DH-RD-ND (h)";
	$fieldToolTipsindscheduleemp["English"]["DHRDND"] = "";
	$placeHoldersindscheduleemp["English"]["DHRDND"] = "";
	$fieldLabelsindscheduleemp["English"]["DHNDOT"] = "DH-ND-OT (h)";
	$fieldToolTipsindscheduleemp["English"]["DHNDOT"] = "";
	$placeHoldersindscheduleemp["English"]["DHNDOT"] = "";
	$fieldLabelsindscheduleemp["English"]["DHRDNDOT"] = "DH-RD-ND-OT (h)";
	$fieldToolTipsindscheduleemp["English"]["DHRDNDOT"] = "";
	$placeHoldersindscheduleemp["English"]["DHRDNDOT"] = "";
	$fieldLabelsindscheduleemp["English"]["RHRDOT"] = "RH-RD-OT (h)";
	$fieldToolTipsindscheduleemp["English"]["RHRDOT"] = "";
	$placeHoldersindscheduleemp["English"]["RHRDOT"] = "";
	$fieldLabelsindscheduleemp["English"]["SHRDOT"] = "SH-RD-OT (h)";
	$fieldToolTipsindscheduleemp["English"]["SHRDOT"] = "";
	$placeHoldersindscheduleemp["English"]["SHRDOT"] = "";
	$fieldLabelsindscheduleemp["English"]["RegND"] = "Reg ND (h)";
	$fieldToolTipsindscheduleemp["English"]["RegND"] = "";
	$placeHoldersindscheduleemp["English"]["RegND"] = "";
	$fieldLabelsindscheduleemp["English"]["RegRD"] = "Reg RD (h)";
	$fieldToolTipsindscheduleemp["English"]["RegRD"] = "";
	$placeHoldersindscheduleemp["English"]["RegRD"] = "";
	$fieldLabelsindscheduleemp["English"]["SHOTD"] = "SH-OT-D (h)";
	$fieldToolTipsindscheduleemp["English"]["SHOTD"] = "";
	$placeHoldersindscheduleemp["English"]["SHOTD"] = "";
	$fieldLabelsindscheduleemp["English"]["SHRDOTD"] = "SH-RD-OT-D (h)";
	$fieldToolTipsindscheduleemp["English"]["SHRDOTD"] = "";
	$placeHoldersindscheduleemp["English"]["SHRDOTD"] = "";
	$fieldLabelsindscheduleemp["English"]["NDOT"] = "ND-OT (h)";
	$fieldToolTipsindscheduleemp["English"]["NDOT"] = "";
	$placeHoldersindscheduleemp["English"]["NDOT"] = "";
	$fieldLabelsindscheduleemp["English"]["RHRD"] = "RH-RD (h)";
	$fieldToolTipsindscheduleemp["English"]["RHRD"] = "";
	$placeHoldersindscheduleemp["English"]["RHRD"] = "";
	$fieldLabelsindscheduleemp["English"]["SHRD"] = "SH-RD (h)";
	$fieldToolTipsindscheduleemp["English"]["SHRD"] = "";
	$placeHoldersindscheduleemp["English"]["SHRD"] = "";
	if (count($fieldToolTipsindscheduleemp["English"]))
		$tdataindscheduleemp[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsindscheduleemp[""] = array();
	$fieldToolTipsindscheduleemp[""] = array();
	$placeHoldersindscheduleemp[""] = array();
	$pageTitlesindscheduleemp[""] = array();
	$fieldLabelsindscheduleemp[""]["RHNDOTHrs"] = "RHNDOTHrs";
	$fieldToolTipsindscheduleemp[""]["RHNDOTHrs"] = "";
	$placeHoldersindscheduleemp[""]["RHNDOTHrs"] = "";
	$fieldLabelsindscheduleemp[""]["SHNDOTHrs"] = "SHNDOTHrs";
	$fieldToolTipsindscheduleemp[""]["SHNDOTHrs"] = "";
	$placeHoldersindscheduleemp[""]["SHNDOTHrs"] = "";
	$fieldLabelsindscheduleemp[""]["RDNDOTHrs"] = "RDNDOTHrs";
	$fieldToolTipsindscheduleemp[""]["RDNDOTHrs"] = "";
	$placeHoldersindscheduleemp[""]["RDNDOTHrs"] = "";
	$fieldLabelsindscheduleemp[""]["DH"] = "DH";
	$fieldToolTipsindscheduleemp[""]["DH"] = "";
	$placeHoldersindscheduleemp[""]["DH"] = "";
	$fieldLabelsindscheduleemp[""]["DHRD"] = "DHRD";
	$fieldToolTipsindscheduleemp[""]["DHRD"] = "";
	$placeHoldersindscheduleemp[""]["DHRD"] = "";
	$fieldLabelsindscheduleemp[""]["DHOT"] = "DHOT";
	$fieldToolTipsindscheduleemp[""]["DHOT"] = "";
	$placeHoldersindscheduleemp[""]["DHOT"] = "";
	$fieldLabelsindscheduleemp[""]["DHRDOT"] = "DHRDOT";
	$fieldToolTipsindscheduleemp[""]["DHRDOT"] = "";
	$placeHoldersindscheduleemp[""]["DHRDOT"] = "";
	$fieldLabelsindscheduleemp[""]["SHRDND"] = "SHRDND";
	$fieldToolTipsindscheduleemp[""]["SHRDND"] = "";
	$placeHoldersindscheduleemp[""]["SHRDND"] = "";
	$fieldLabelsindscheduleemp[""]["RHRDND"] = "RHRDND";
	$fieldToolTipsindscheduleemp[""]["RHRDND"] = "";
	$placeHoldersindscheduleemp[""]["RHRDND"] = "";
	$fieldLabelsindscheduleemp[""]["SHRDNDOT"] = "SHRDNDOT";
	$fieldToolTipsindscheduleemp[""]["SHRDNDOT"] = "";
	$placeHoldersindscheduleemp[""]["SHRDNDOT"] = "";
	$fieldLabelsindscheduleemp[""]["RHRDNDOT"] = "RHRDNDOT";
	$fieldToolTipsindscheduleemp[""]["RHRDNDOT"] = "";
	$placeHoldersindscheduleemp[""]["RHRDNDOT"] = "";
	$fieldLabelsindscheduleemp[""]["DHND"] = "DHND";
	$fieldToolTipsindscheduleemp[""]["DHND"] = "";
	$placeHoldersindscheduleemp[""]["DHND"] = "";
	$fieldLabelsindscheduleemp[""]["DHRDND"] = "DHRDND";
	$fieldToolTipsindscheduleemp[""]["DHRDND"] = "";
	$placeHoldersindscheduleemp[""]["DHRDND"] = "";
	$fieldLabelsindscheduleemp[""]["DHNDOT"] = "DHNDOT";
	$fieldToolTipsindscheduleemp[""]["DHNDOT"] = "";
	$placeHoldersindscheduleemp[""]["DHNDOT"] = "";
	$fieldLabelsindscheduleemp[""]["DHRDNDOT"] = "DHRDNDOT";
	$fieldToolTipsindscheduleemp[""]["DHRDNDOT"] = "";
	$placeHoldersindscheduleemp[""]["DHRDNDOT"] = "";
	$fieldLabelsindscheduleemp[""]["RHRDOT"] = "RHRDOT";
	$fieldToolTipsindscheduleemp[""]["RHRDOT"] = "";
	$placeHoldersindscheduleemp[""]["RHRDOT"] = "";
	$fieldLabelsindscheduleemp[""]["SHRDOT"] = "SHRDOT";
	$fieldToolTipsindscheduleemp[""]["SHRDOT"] = "";
	$placeHoldersindscheduleemp[""]["SHRDOT"] = "";
	$fieldLabelsindscheduleemp[""]["RegND"] = "Reg ND";
	$fieldToolTipsindscheduleemp[""]["RegND"] = "";
	$placeHoldersindscheduleemp[""]["RegND"] = "";
	$fieldLabelsindscheduleemp[""]["RegRD"] = "Reg RD";
	$fieldToolTipsindscheduleemp[""]["RegRD"] = "";
	$placeHoldersindscheduleemp[""]["RegRD"] = "";
	$fieldLabelsindscheduleemp[""]["SHOTD"] = "SHOTD";
	$fieldToolTipsindscheduleemp[""]["SHOTD"] = "";
	$placeHoldersindscheduleemp[""]["SHOTD"] = "";
	$fieldLabelsindscheduleemp[""]["SHRDOTD"] = "SHRDOTD";
	$fieldToolTipsindscheduleemp[""]["SHRDOTD"] = "";
	$placeHoldersindscheduleemp[""]["SHRDOTD"] = "";
	$fieldLabelsindscheduleemp[""]["NDOT"] = "NDOT";
	$fieldToolTipsindscheduleemp[""]["NDOT"] = "";
	$placeHoldersindscheduleemp[""]["NDOT"] = "";
	$fieldLabelsindscheduleemp[""]["RHRD"] = "RHRD";
	$fieldToolTipsindscheduleemp[""]["RHRD"] = "";
	$placeHoldersindscheduleemp[""]["RHRD"] = "";
	$fieldLabelsindscheduleemp[""]["SHRD"] = "SHRD";
	$fieldToolTipsindscheduleemp[""]["SHRD"] = "";
	$placeHoldersindscheduleemp[""]["SHRD"] = "";
	if (count($fieldToolTipsindscheduleemp[""]))
		$tdataindscheduleemp[".isUseToolTips"] = true;
}


	$tdataindscheduleemp[".NCSearch"] = true;



$tdataindscheduleemp[".shortTableName"] = "indscheduleemp";
$tdataindscheduleemp[".nSecOptions"] = 0;
$tdataindscheduleemp[".recsPerRowPrint"] = 1;
$tdataindscheduleemp[".mainTableOwnerID"] = "";
$tdataindscheduleemp[".moveNext"] = 1;
$tdataindscheduleemp[".entityType"] = 1;

$tdataindscheduleemp[".strOriginalTableName"] = "indschedule";

	



$tdataindscheduleemp[".showAddInPopup"] = false;

$tdataindscheduleemp[".showEditInPopup"] = false;

$tdataindscheduleemp[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataindscheduleemp[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataindscheduleemp[".fieldsForRegister"] = array();

$tdataindscheduleemp[".listAjax"] = false;

	$tdataindscheduleemp[".audit"] = false;

	$tdataindscheduleemp[".locking"] = false;

$tdataindscheduleemp[".edit"] = true;
$tdataindscheduleemp[".afterEditAction"] = 1;
$tdataindscheduleemp[".closePopupAfterEdit"] = 1;
$tdataindscheduleemp[".afterEditActionDetTable"] = "";

$tdataindscheduleemp[".add"] = true;
$tdataindscheduleemp[".afterAddAction"] = 1;
$tdataindscheduleemp[".closePopupAfterAdd"] = 1;
$tdataindscheduleemp[".afterAddActionDetTable"] = "";

$tdataindscheduleemp[".list"] = true;

$tdataindscheduleemp[".inlineEdit"] = true;

$tdataindscheduleemp[".updateSelected"] = true;

$tdataindscheduleemp[".reorderRecordsByHeader"] = true;


$tdataindscheduleemp[".exportFormatting"] = 2;
$tdataindscheduleemp[".exportDelimiter"] = ",";
		
$tdataindscheduleemp[".inlineAdd"] = true;
$tdataindscheduleemp[".view"] = true;

$tdataindscheduleemp[".import"] = true;

$tdataindscheduleemp[".exportTo"] = true;

$tdataindscheduleemp[".printFriendly"] = true;

$tdataindscheduleemp[".delete"] = true;

$tdataindscheduleemp[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataindscheduleemp[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataindscheduleemp[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataindscheduleemp[".searchSaving"] = false;
//

$tdataindscheduleemp[".showSearchPanel"] = true;
		$tdataindscheduleemp[".flexibleSearch"] = true;

$tdataindscheduleemp[".isUseAjaxSuggest"] = true;

$tdataindscheduleemp[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																												

$tdataindscheduleemp[".ajaxCodeSnippetAdded"] = false;

$tdataindscheduleemp[".buttonsAdded"] = false;

$tdataindscheduleemp[".addPageEvents"] = false;

// use timepicker for search panel
$tdataindscheduleemp[".isUseTimeForSearch"] = true;



$tdataindscheduleemp[".badgeColor"] = "cd853f";


$tdataindscheduleemp[".allSearchFields"] = array();
$tdataindscheduleemp[".filterFields"] = array();
$tdataindscheduleemp[".requiredSearchFields"] = array();

$tdataindscheduleemp[".allSearchFields"][] = "UserName";
	$tdataindscheduleemp[".allSearchFields"][] = "Division";
	$tdataindscheduleemp[".allSearchFields"][] = "WageType";
	$tdataindscheduleemp[".allSearchFields"][] = "SDate";
	$tdataindscheduleemp[".allSearchFields"][] = "Mispunched";
	$tdataindscheduleemp[".allSearchFields"][] = "RegND";
	$tdataindscheduleemp[".allSearchFields"][] = "SHOTD";
	$tdataindscheduleemp[".allSearchFields"][] = "NDOT";
	$tdataindscheduleemp[".allSearchFields"][] = "RHRDOT";
	$tdataindscheduleemp[".allSearchFields"][] = "SHRDOT";
	$tdataindscheduleemp[".allSearchFields"][] = "SHRDOTD";
	$tdataindscheduleemp[".allSearchFields"][] = "RegRD";
	$tdataindscheduleemp[".allSearchFields"][] = "RHRD";
	$tdataindscheduleemp[".allSearchFields"][] = "SHRD";
	

$tdataindscheduleemp[".googleLikeFields"] = array();
$tdataindscheduleemp[".googleLikeFields"][] = "UserName";
$tdataindscheduleemp[".googleLikeFields"][] = "SDate";
$tdataindscheduleemp[".googleLikeFields"][] = "WageType";
$tdataindscheduleemp[".googleLikeFields"][] = "Division";
$tdataindscheduleemp[".googleLikeFields"][] = "Mispunched";
$tdataindscheduleemp[".googleLikeFields"][] = "RHRDOT";
$tdataindscheduleemp[".googleLikeFields"][] = "SHRDOT";
$tdataindscheduleemp[".googleLikeFields"][] = "RegND";
$tdataindscheduleemp[".googleLikeFields"][] = "RegRD";
$tdataindscheduleemp[".googleLikeFields"][] = "SHOTD";
$tdataindscheduleemp[".googleLikeFields"][] = "SHRDOTD";
$tdataindscheduleemp[".googleLikeFields"][] = "NDOT";
$tdataindscheduleemp[".googleLikeFields"][] = "RHRD";
$tdataindscheduleemp[".googleLikeFields"][] = "SHRD";

$tdataindscheduleemp[".panelSearchFields"] = array();
$tdataindscheduleemp[".searchPanelOptions"] = array();
$tdataindscheduleemp[".panelSearchFields"][] = "UserName";
	$tdataindscheduleemp[".panelSearchFields"][] = "Division";
	$tdataindscheduleemp[".panelSearchFields"][] = "WageType";
	$tdataindscheduleemp[".panelSearchFields"][] = "SDate";
	
$tdataindscheduleemp[".advSearchFields"] = array();
$tdataindscheduleemp[".advSearchFields"][] = "UserName";
$tdataindscheduleemp[".advSearchFields"][] = "Division";
$tdataindscheduleemp[".advSearchFields"][] = "WageType";
$tdataindscheduleemp[".advSearchFields"][] = "SDate";
$tdataindscheduleemp[".advSearchFields"][] = "Mispunched";
$tdataindscheduleemp[".advSearchFields"][] = "RegND";
$tdataindscheduleemp[".advSearchFields"][] = "SHOTD";
$tdataindscheduleemp[".advSearchFields"][] = "NDOT";
$tdataindscheduleemp[".advSearchFields"][] = "RHRDOT";
$tdataindscheduleemp[".advSearchFields"][] = "SHRDOT";
$tdataindscheduleemp[".advSearchFields"][] = "SHRDOTD";
$tdataindscheduleemp[".advSearchFields"][] = "RegRD";
$tdataindscheduleemp[".advSearchFields"][] = "RHRD";
$tdataindscheduleemp[".advSearchFields"][] = "SHRD";

$tdataindscheduleemp[".tableType"] = "list";

$tdataindscheduleemp[".printerPageOrientation"] = 0;
$tdataindscheduleemp[".nPrinterPageScale"] = 100;

$tdataindscheduleemp[".nPrinterSplitRecords"] = 40;

$tdataindscheduleemp[".nPrinterPDFSplitRecords"] = 40;



$tdataindscheduleemp[".geocodingEnabled"] = false;





$tdataindscheduleemp[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdataindscheduleemp[".totalsFields"] = array();
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "RegWD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "DWork",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "Absent",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "LateMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "UndertimeMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "LatePenaltyMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "LateFixPenalty",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "BreakLateMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "TotLateMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "RHolidayHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "SHolidayHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "DH",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "RegND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "RHNDHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "SHNDHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "DHND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "RDNDHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "RHRDND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "SHRDND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "DHRDND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "ExcessHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "RegOTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "RHOTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "SHOTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "SHOTD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "DHOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "RDOTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "NDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "RHNDOTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "SHNDOTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "DHNDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "RDNDOTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "RHRDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "SHRDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "SHRDOTD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "DHRDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "RHRDNDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "SHRDNDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "DHRDNDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "VLDay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "SLDay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "ELDay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "PLDay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "TrODay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "RegRD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "RHRD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "SHRD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataindscheduleemp[".totalsFields"][] = array(
	"fName" => "DHRD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');

$tdataindscheduleemp[".pageSize"] = 20;

$tdataindscheduleemp[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY SDate";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataindscheduleemp[".strOrderBy"] = $tstrOrderBy;

$tdataindscheduleemp[".orderindexes"] = array();
	$tdataindscheduleemp[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "SDate");


$tdataindscheduleemp[".sqlHead"] = "SELECT ScID,  UserName,  SDate,  STimeIn,  STimeOut,  SchedType,  ApprovedOT,  WageType,  ApprovedNightDiff,  EmployeeID,  BreakMins,  Shift,  ApprovedRD,  LunchBreakFrom,  LunchBreakTo,  Division,  TimeIn,  TimeOut,  DayIs,  RestDay,  Department,  RegWD,  DWork,  Absent,  LateMins,  UndertimeMins,  RHolidayHrs,  SHolidayHrs,  ExcessHrs,  RegOTHrs,  RHOTHrs,  SHOTHrs,  RDOTHrs,  RHNDHrs,  SHNDHrs,  RDNDHrs,  VLDay,  SLDay,  ELDay,  PLDay,  TrODay,  HolidayType,  Mispunched,  Holiday1stHalf,  Holiday2ndHalf,  TotLateMins,  LatePenaltyMins,  Employer,  LateFixPenalty,  AfterBreakLogOut,  AfterBreakLog,  BreakLateMins,  RHNDOTHrs,  SHNDOTHrs,  RDNDOTHrs,  DH,  DHRD,  DHOT,  DHRDOT,  SHRDND,  RHRDND,  SHRDNDOT,  RHRDNDOT,  DHND,  DHRDND,  DHNDOT,  DHRDNDOT,  RHRDOT,  SHRDOT,  RegND,  RegRD,  SHOTD,  SHRDOTD,  NDOT,  RHRD,  SHRD";
$tdataindscheduleemp[".sqlFrom"] = "FROM indschedule";
$tdataindscheduleemp[".sqlWhereExpr"] = "";
$tdataindscheduleemp[".sqlTail"] = "";


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
$tdataindscheduleemp[".arrEditTabs"] = $arrEditTabs;


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
$tdataindscheduleemp[".arrAddTabs"] = $arrAddTabs;

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
$tdataindscheduleemp[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataindscheduleemp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataindscheduleemp[".arrGroupsPerPage"] = $arrGPP;

$tdataindscheduleemp[".highlightSearchResults"] = true;

$tableKeysindscheduleemp = array();
$tableKeysindscheduleemp[] = "ScID";
$tdataindscheduleemp[".Keys"] = $tableKeysindscheduleemp;

$tdataindscheduleemp[".listFields"] = array();
$tdataindscheduleemp[".listFields"][] = "ScID";
$tdataindscheduleemp[".listFields"][] = "EmployeeID";
$tdataindscheduleemp[".listFields"][] = "UserName";
$tdataindscheduleemp[".listFields"][] = "Employer";
$tdataindscheduleemp[".listFields"][] = "Division";
$tdataindscheduleemp[".listFields"][] = "Department";
$tdataindscheduleemp[".listFields"][] = "WageType";
$tdataindscheduleemp[".listFields"][] = "SDate";
$tdataindscheduleemp[".listFields"][] = "DayIs";
$tdataindscheduleemp[".listFields"][] = "RestDay";
$tdataindscheduleemp[".listFields"][] = "STimeIn";
$tdataindscheduleemp[".listFields"][] = "STimeOut";
$tdataindscheduleemp[".listFields"][] = "TimeIn";
$tdataindscheduleemp[".listFields"][] = "TimeOut";
$tdataindscheduleemp[".listFields"][] = "LunchBreakFrom";
$tdataindscheduleemp[".listFields"][] = "LunchBreakTo";
$tdataindscheduleemp[".listFields"][] = "AfterBreakLogOut";
$tdataindscheduleemp[".listFields"][] = "AfterBreakLog";
$tdataindscheduleemp[".listFields"][] = "Mispunched";
$tdataindscheduleemp[".listFields"][] = "RegWD";
$tdataindscheduleemp[".listFields"][] = "DWork";
$tdataindscheduleemp[".listFields"][] = "Absent";
$tdataindscheduleemp[".listFields"][] = "LateMins";
$tdataindscheduleemp[".listFields"][] = "UndertimeMins";
$tdataindscheduleemp[".listFields"][] = "LatePenaltyMins";
$tdataindscheduleemp[".listFields"][] = "LateFixPenalty";
$tdataindscheduleemp[".listFields"][] = "BreakLateMins";
$tdataindscheduleemp[".listFields"][] = "TotLateMins";
$tdataindscheduleemp[".listFields"][] = "HolidayType";
$tdataindscheduleemp[".listFields"][] = "Holiday1stHalf";
$tdataindscheduleemp[".listFields"][] = "Holiday2ndHalf";
$tdataindscheduleemp[".listFields"][] = "RHolidayHrs";
$tdataindscheduleemp[".listFields"][] = "SHolidayHrs";
$tdataindscheduleemp[".listFields"][] = "DH";
$tdataindscheduleemp[".listFields"][] = "ApprovedNightDiff";
$tdataindscheduleemp[".listFields"][] = "RegND";
$tdataindscheduleemp[".listFields"][] = "RHNDHrs";
$tdataindscheduleemp[".listFields"][] = "SHNDHrs";
$tdataindscheduleemp[".listFields"][] = "DHND";
$tdataindscheduleemp[".listFields"][] = "RDNDHrs";
$tdataindscheduleemp[".listFields"][] = "RHRDND";
$tdataindscheduleemp[".listFields"][] = "SHRDND";
$tdataindscheduleemp[".listFields"][] = "DHRDND";
$tdataindscheduleemp[".listFields"][] = "ExcessHrs";
$tdataindscheduleemp[".listFields"][] = "ApprovedOT";
$tdataindscheduleemp[".listFields"][] = "RegOTHrs";
$tdataindscheduleemp[".listFields"][] = "RHOTHrs";
$tdataindscheduleemp[".listFields"][] = "SHOTHrs";
$tdataindscheduleemp[".listFields"][] = "SHOTD";
$tdataindscheduleemp[".listFields"][] = "DHOT";
$tdataindscheduleemp[".listFields"][] = "RDOTHrs";
$tdataindscheduleemp[".listFields"][] = "NDOT";
$tdataindscheduleemp[".listFields"][] = "RHNDOTHrs";
$tdataindscheduleemp[".listFields"][] = "SHNDOTHrs";
$tdataindscheduleemp[".listFields"][] = "DHNDOT";
$tdataindscheduleemp[".listFields"][] = "RDNDOTHrs";
$tdataindscheduleemp[".listFields"][] = "RHRDOT";
$tdataindscheduleemp[".listFields"][] = "SHRDOT";
$tdataindscheduleemp[".listFields"][] = "SHRDOTD";
$tdataindscheduleemp[".listFields"][] = "DHRDOT";
$tdataindscheduleemp[".listFields"][] = "RHRDNDOT";
$tdataindscheduleemp[".listFields"][] = "SHRDNDOT";
$tdataindscheduleemp[".listFields"][] = "DHRDNDOT";
$tdataindscheduleemp[".listFields"][] = "VLDay";
$tdataindscheduleemp[".listFields"][] = "SLDay";
$tdataindscheduleemp[".listFields"][] = "ELDay";
$tdataindscheduleemp[".listFields"][] = "PLDay";
$tdataindscheduleemp[".listFields"][] = "TrODay";
$tdataindscheduleemp[".listFields"][] = "ApprovedRD";
$tdataindscheduleemp[".listFields"][] = "RegRD";
$tdataindscheduleemp[".listFields"][] = "RHRD";
$tdataindscheduleemp[".listFields"][] = "SHRD";
$tdataindscheduleemp[".listFields"][] = "DHRD";
$tdataindscheduleemp[".listFields"][] = "SchedType";
$tdataindscheduleemp[".listFields"][] = "Shift";
$tdataindscheduleemp[".listFields"][] = "BreakMins";

$tdataindscheduleemp[".hideMobileList"] = array();


$tdataindscheduleemp[".viewFields"] = array();
$tdataindscheduleemp[".viewFields"][] = "ScID";
$tdataindscheduleemp[".viewFields"][] = "EmployeeID";
$tdataindscheduleemp[".viewFields"][] = "UserName";
$tdataindscheduleemp[".viewFields"][] = "Employer";
$tdataindscheduleemp[".viewFields"][] = "Division";
$tdataindscheduleemp[".viewFields"][] = "Department";
$tdataindscheduleemp[".viewFields"][] = "WageType";
$tdataindscheduleemp[".viewFields"][] = "SDate";
$tdataindscheduleemp[".viewFields"][] = "DayIs";
$tdataindscheduleemp[".viewFields"][] = "RestDay";
$tdataindscheduleemp[".viewFields"][] = "STimeIn";
$tdataindscheduleemp[".viewFields"][] = "STimeOut";
$tdataindscheduleemp[".viewFields"][] = "TimeIn";
$tdataindscheduleemp[".viewFields"][] = "TimeOut";
$tdataindscheduleemp[".viewFields"][] = "LunchBreakFrom";
$tdataindscheduleemp[".viewFields"][] = "LunchBreakTo";
$tdataindscheduleemp[".viewFields"][] = "AfterBreakLogOut";
$tdataindscheduleemp[".viewFields"][] = "AfterBreakLog";
$tdataindscheduleemp[".viewFields"][] = "Mispunched";
$tdataindscheduleemp[".viewFields"][] = "RegWD";
$tdataindscheduleemp[".viewFields"][] = "DWork";
$tdataindscheduleemp[".viewFields"][] = "Absent";
$tdataindscheduleemp[".viewFields"][] = "LateMins";
$tdataindscheduleemp[".viewFields"][] = "UndertimeMins";
$tdataindscheduleemp[".viewFields"][] = "LatePenaltyMins";
$tdataindscheduleemp[".viewFields"][] = "LateFixPenalty";
$tdataindscheduleemp[".viewFields"][] = "BreakLateMins";
$tdataindscheduleemp[".viewFields"][] = "TotLateMins";
$tdataindscheduleemp[".viewFields"][] = "HolidayType";
$tdataindscheduleemp[".viewFields"][] = "Holiday1stHalf";
$tdataindscheduleemp[".viewFields"][] = "Holiday2ndHalf";
$tdataindscheduleemp[".viewFields"][] = "RHolidayHrs";
$tdataindscheduleemp[".viewFields"][] = "SHolidayHrs";
$tdataindscheduleemp[".viewFields"][] = "DH";
$tdataindscheduleemp[".viewFields"][] = "ApprovedNightDiff";
$tdataindscheduleemp[".viewFields"][] = "RegND";
$tdataindscheduleemp[".viewFields"][] = "RHNDHrs";
$tdataindscheduleemp[".viewFields"][] = "SHNDHrs";
$tdataindscheduleemp[".viewFields"][] = "DHND";
$tdataindscheduleemp[".viewFields"][] = "RDNDHrs";
$tdataindscheduleemp[".viewFields"][] = "RHRDND";
$tdataindscheduleemp[".viewFields"][] = "SHRDND";
$tdataindscheduleemp[".viewFields"][] = "DHRDND";
$tdataindscheduleemp[".viewFields"][] = "ExcessHrs";
$tdataindscheduleemp[".viewFields"][] = "ApprovedOT";
$tdataindscheduleemp[".viewFields"][] = "RegOTHrs";
$tdataindscheduleemp[".viewFields"][] = "RHOTHrs";
$tdataindscheduleemp[".viewFields"][] = "SHOTHrs";
$tdataindscheduleemp[".viewFields"][] = "SHOTD";
$tdataindscheduleemp[".viewFields"][] = "DHOT";
$tdataindscheduleemp[".viewFields"][] = "RDOTHrs";
$tdataindscheduleemp[".viewFields"][] = "NDOT";
$tdataindscheduleemp[".viewFields"][] = "RHNDOTHrs";
$tdataindscheduleemp[".viewFields"][] = "SHNDOTHrs";
$tdataindscheduleemp[".viewFields"][] = "DHNDOT";
$tdataindscheduleemp[".viewFields"][] = "RDNDOTHrs";
$tdataindscheduleemp[".viewFields"][] = "RHRDOT";
$tdataindscheduleemp[".viewFields"][] = "SHRDOT";
$tdataindscheduleemp[".viewFields"][] = "SHRDOTD";
$tdataindscheduleemp[".viewFields"][] = "DHRDOT";
$tdataindscheduleemp[".viewFields"][] = "RHRDNDOT";
$tdataindscheduleemp[".viewFields"][] = "SHRDNDOT";
$tdataindscheduleemp[".viewFields"][] = "DHRDNDOT";
$tdataindscheduleemp[".viewFields"][] = "VLDay";
$tdataindscheduleemp[".viewFields"][] = "SLDay";
$tdataindscheduleemp[".viewFields"][] = "ELDay";
$tdataindscheduleemp[".viewFields"][] = "PLDay";
$tdataindscheduleemp[".viewFields"][] = "TrODay";
$tdataindscheduleemp[".viewFields"][] = "ApprovedRD";
$tdataindscheduleemp[".viewFields"][] = "RegRD";
$tdataindscheduleemp[".viewFields"][] = "RHRD";
$tdataindscheduleemp[".viewFields"][] = "SHRD";
$tdataindscheduleemp[".viewFields"][] = "DHRD";
$tdataindscheduleemp[".viewFields"][] = "SchedType";
$tdataindscheduleemp[".viewFields"][] = "Shift";
$tdataindscheduleemp[".viewFields"][] = "BreakMins";

$tdataindscheduleemp[".addFields"] = array();
$tdataindscheduleemp[".addFields"][] = "EmployeeID";
$tdataindscheduleemp[".addFields"][] = "UserName";
$tdataindscheduleemp[".addFields"][] = "Employer";
$tdataindscheduleemp[".addFields"][] = "Division";
$tdataindscheduleemp[".addFields"][] = "Department";
$tdataindscheduleemp[".addFields"][] = "WageType";
$tdataindscheduleemp[".addFields"][] = "SDate";
$tdataindscheduleemp[".addFields"][] = "DayIs";
$tdataindscheduleemp[".addFields"][] = "RestDay";
$tdataindscheduleemp[".addFields"][] = "STimeIn";
$tdataindscheduleemp[".addFields"][] = "STimeOut";
$tdataindscheduleemp[".addFields"][] = "TimeIn";
$tdataindscheduleemp[".addFields"][] = "TimeOut";
$tdataindscheduleemp[".addFields"][] = "LunchBreakFrom";
$tdataindscheduleemp[".addFields"][] = "LunchBreakTo";
$tdataindscheduleemp[".addFields"][] = "AfterBreakLogOut";
$tdataindscheduleemp[".addFields"][] = "AfterBreakLog";
$tdataindscheduleemp[".addFields"][] = "Mispunched";
$tdataindscheduleemp[".addFields"][] = "RegWD";
$tdataindscheduleemp[".addFields"][] = "DWork";
$tdataindscheduleemp[".addFields"][] = "Absent";
$tdataindscheduleemp[".addFields"][] = "LateMins";
$tdataindscheduleemp[".addFields"][] = "UndertimeMins";
$tdataindscheduleemp[".addFields"][] = "LatePenaltyMins";
$tdataindscheduleemp[".addFields"][] = "LateFixPenalty";
$tdataindscheduleemp[".addFields"][] = "BreakLateMins";
$tdataindscheduleemp[".addFields"][] = "TotLateMins";
$tdataindscheduleemp[".addFields"][] = "HolidayType";
$tdataindscheduleemp[".addFields"][] = "Holiday1stHalf";
$tdataindscheduleemp[".addFields"][] = "Holiday2ndHalf";
$tdataindscheduleemp[".addFields"][] = "RHolidayHrs";
$tdataindscheduleemp[".addFields"][] = "SHolidayHrs";
$tdataindscheduleemp[".addFields"][] = "DH";
$tdataindscheduleemp[".addFields"][] = "ApprovedNightDiff";
$tdataindscheduleemp[".addFields"][] = "RegND";
$tdataindscheduleemp[".addFields"][] = "RHNDHrs";
$tdataindscheduleemp[".addFields"][] = "SHNDHrs";
$tdataindscheduleemp[".addFields"][] = "DHND";
$tdataindscheduleemp[".addFields"][] = "RDNDHrs";
$tdataindscheduleemp[".addFields"][] = "RHRDND";
$tdataindscheduleemp[".addFields"][] = "SHRDND";
$tdataindscheduleemp[".addFields"][] = "DHRDND";
$tdataindscheduleemp[".addFields"][] = "ExcessHrs";
$tdataindscheduleemp[".addFields"][] = "ApprovedOT";
$tdataindscheduleemp[".addFields"][] = "RegOTHrs";
$tdataindscheduleemp[".addFields"][] = "RHOTHrs";
$tdataindscheduleemp[".addFields"][] = "SHOTHrs";
$tdataindscheduleemp[".addFields"][] = "SHOTD";
$tdataindscheduleemp[".addFields"][] = "DHOT";
$tdataindscheduleemp[".addFields"][] = "RDOTHrs";
$tdataindscheduleemp[".addFields"][] = "NDOT";
$tdataindscheduleemp[".addFields"][] = "RHNDOTHrs";
$tdataindscheduleemp[".addFields"][] = "SHNDOTHrs";
$tdataindscheduleemp[".addFields"][] = "DHNDOT";
$tdataindscheduleemp[".addFields"][] = "RDNDOTHrs";
$tdataindscheduleemp[".addFields"][] = "RHRDOT";
$tdataindscheduleemp[".addFields"][] = "SHRDOT";
$tdataindscheduleemp[".addFields"][] = "SHRDOTD";
$tdataindscheduleemp[".addFields"][] = "DHRDOT";
$tdataindscheduleemp[".addFields"][] = "RHRDNDOT";
$tdataindscheduleemp[".addFields"][] = "SHRDNDOT";
$tdataindscheduleemp[".addFields"][] = "DHRDNDOT";
$tdataindscheduleemp[".addFields"][] = "VLDay";
$tdataindscheduleemp[".addFields"][] = "SLDay";
$tdataindscheduleemp[".addFields"][] = "ELDay";
$tdataindscheduleemp[".addFields"][] = "PLDay";
$tdataindscheduleemp[".addFields"][] = "TrODay";
$tdataindscheduleemp[".addFields"][] = "ApprovedRD";
$tdataindscheduleemp[".addFields"][] = "RegRD";
$tdataindscheduleemp[".addFields"][] = "RHRD";
$tdataindscheduleemp[".addFields"][] = "SHRD";
$tdataindscheduleemp[".addFields"][] = "DHRD";
$tdataindscheduleemp[".addFields"][] = "SchedType";
$tdataindscheduleemp[".addFields"][] = "Shift";
$tdataindscheduleemp[".addFields"][] = "BreakMins";

$tdataindscheduleemp[".masterListFields"] = array();
$tdataindscheduleemp[".masterListFields"][] = "ScID";
$tdataindscheduleemp[".masterListFields"][] = "EmployeeID";
$tdataindscheduleemp[".masterListFields"][] = "UserName";
$tdataindscheduleemp[".masterListFields"][] = "Employer";
$tdataindscheduleemp[".masterListFields"][] = "Division";
$tdataindscheduleemp[".masterListFields"][] = "Department";
$tdataindscheduleemp[".masterListFields"][] = "WageType";
$tdataindscheduleemp[".masterListFields"][] = "SDate";
$tdataindscheduleemp[".masterListFields"][] = "DayIs";
$tdataindscheduleemp[".masterListFields"][] = "RestDay";
$tdataindscheduleemp[".masterListFields"][] = "STimeIn";
$tdataindscheduleemp[".masterListFields"][] = "STimeOut";
$tdataindscheduleemp[".masterListFields"][] = "TimeIn";
$tdataindscheduleemp[".masterListFields"][] = "TimeOut";
$tdataindscheduleemp[".masterListFields"][] = "LunchBreakFrom";
$tdataindscheduleemp[".masterListFields"][] = "LunchBreakTo";
$tdataindscheduleemp[".masterListFields"][] = "AfterBreakLogOut";
$tdataindscheduleemp[".masterListFields"][] = "AfterBreakLog";
$tdataindscheduleemp[".masterListFields"][] = "Mispunched";
$tdataindscheduleemp[".masterListFields"][] = "RegWD";
$tdataindscheduleemp[".masterListFields"][] = "DWork";
$tdataindscheduleemp[".masterListFields"][] = "Absent";
$tdataindscheduleemp[".masterListFields"][] = "LateMins";
$tdataindscheduleemp[".masterListFields"][] = "UndertimeMins";
$tdataindscheduleemp[".masterListFields"][] = "LatePenaltyMins";
$tdataindscheduleemp[".masterListFields"][] = "LateFixPenalty";
$tdataindscheduleemp[".masterListFields"][] = "BreakLateMins";
$tdataindscheduleemp[".masterListFields"][] = "TotLateMins";
$tdataindscheduleemp[".masterListFields"][] = "HolidayType";
$tdataindscheduleemp[".masterListFields"][] = "Holiday1stHalf";
$tdataindscheduleemp[".masterListFields"][] = "Holiday2ndHalf";
$tdataindscheduleemp[".masterListFields"][] = "RHolidayHrs";
$tdataindscheduleemp[".masterListFields"][] = "SHolidayHrs";
$tdataindscheduleemp[".masterListFields"][] = "DH";
$tdataindscheduleemp[".masterListFields"][] = "ApprovedNightDiff";
$tdataindscheduleemp[".masterListFields"][] = "RegND";
$tdataindscheduleemp[".masterListFields"][] = "RHNDHrs";
$tdataindscheduleemp[".masterListFields"][] = "SHNDHrs";
$tdataindscheduleemp[".masterListFields"][] = "DHND";
$tdataindscheduleemp[".masterListFields"][] = "RDNDHrs";
$tdataindscheduleemp[".masterListFields"][] = "RHRDND";
$tdataindscheduleemp[".masterListFields"][] = "SHRDND";
$tdataindscheduleemp[".masterListFields"][] = "DHRDND";
$tdataindscheduleemp[".masterListFields"][] = "ExcessHrs";
$tdataindscheduleemp[".masterListFields"][] = "ApprovedOT";
$tdataindscheduleemp[".masterListFields"][] = "RegOTHrs";
$tdataindscheduleemp[".masterListFields"][] = "RHOTHrs";
$tdataindscheduleemp[".masterListFields"][] = "SHOTHrs";
$tdataindscheduleemp[".masterListFields"][] = "SHOTD";
$tdataindscheduleemp[".masterListFields"][] = "DHOT";
$tdataindscheduleemp[".masterListFields"][] = "RDOTHrs";
$tdataindscheduleemp[".masterListFields"][] = "NDOT";
$tdataindscheduleemp[".masterListFields"][] = "RHNDOTHrs";
$tdataindscheduleemp[".masterListFields"][] = "SHNDOTHrs";
$tdataindscheduleemp[".masterListFields"][] = "DHNDOT";
$tdataindscheduleemp[".masterListFields"][] = "RDNDOTHrs";
$tdataindscheduleemp[".masterListFields"][] = "RHRDOT";
$tdataindscheduleemp[".masterListFields"][] = "SHRDOT";
$tdataindscheduleemp[".masterListFields"][] = "SHRDOTD";
$tdataindscheduleemp[".masterListFields"][] = "DHRDOT";
$tdataindscheduleemp[".masterListFields"][] = "RHRDNDOT";
$tdataindscheduleemp[".masterListFields"][] = "SHRDNDOT";
$tdataindscheduleemp[".masterListFields"][] = "DHRDNDOT";
$tdataindscheduleemp[".masterListFields"][] = "VLDay";
$tdataindscheduleemp[".masterListFields"][] = "SLDay";
$tdataindscheduleemp[".masterListFields"][] = "ELDay";
$tdataindscheduleemp[".masterListFields"][] = "PLDay";
$tdataindscheduleemp[".masterListFields"][] = "TrODay";
$tdataindscheduleemp[".masterListFields"][] = "ApprovedRD";
$tdataindscheduleemp[".masterListFields"][] = "RegRD";
$tdataindscheduleemp[".masterListFields"][] = "RHRD";
$tdataindscheduleemp[".masterListFields"][] = "SHRD";
$tdataindscheduleemp[".masterListFields"][] = "DHRD";
$tdataindscheduleemp[".masterListFields"][] = "SchedType";
$tdataindscheduleemp[".masterListFields"][] = "Shift";
$tdataindscheduleemp[".masterListFields"][] = "BreakMins";

$tdataindscheduleemp[".inlineAddFields"] = array();
$tdataindscheduleemp[".inlineAddFields"][] = "EmployeeID";
$tdataindscheduleemp[".inlineAddFields"][] = "UserName";
$tdataindscheduleemp[".inlineAddFields"][] = "Employer";
$tdataindscheduleemp[".inlineAddFields"][] = "Division";
$tdataindscheduleemp[".inlineAddFields"][] = "Department";
$tdataindscheduleemp[".inlineAddFields"][] = "WageType";
$tdataindscheduleemp[".inlineAddFields"][] = "SDate";
$tdataindscheduleemp[".inlineAddFields"][] = "DayIs";
$tdataindscheduleemp[".inlineAddFields"][] = "RestDay";
$tdataindscheduleemp[".inlineAddFields"][] = "STimeIn";
$tdataindscheduleemp[".inlineAddFields"][] = "STimeOut";
$tdataindscheduleemp[".inlineAddFields"][] = "TimeIn";
$tdataindscheduleemp[".inlineAddFields"][] = "TimeOut";
$tdataindscheduleemp[".inlineAddFields"][] = "LunchBreakFrom";
$tdataindscheduleemp[".inlineAddFields"][] = "LunchBreakTo";
$tdataindscheduleemp[".inlineAddFields"][] = "AfterBreakLogOut";
$tdataindscheduleemp[".inlineAddFields"][] = "AfterBreakLog";
$tdataindscheduleemp[".inlineAddFields"][] = "Mispunched";
$tdataindscheduleemp[".inlineAddFields"][] = "RegWD";
$tdataindscheduleemp[".inlineAddFields"][] = "DWork";
$tdataindscheduleemp[".inlineAddFields"][] = "Absent";
$tdataindscheduleemp[".inlineAddFields"][] = "LateMins";
$tdataindscheduleemp[".inlineAddFields"][] = "UndertimeMins";
$tdataindscheduleemp[".inlineAddFields"][] = "LatePenaltyMins";
$tdataindscheduleemp[".inlineAddFields"][] = "LateFixPenalty";
$tdataindscheduleemp[".inlineAddFields"][] = "BreakLateMins";
$tdataindscheduleemp[".inlineAddFields"][] = "TotLateMins";
$tdataindscheduleemp[".inlineAddFields"][] = "HolidayType";
$tdataindscheduleemp[".inlineAddFields"][] = "Holiday1stHalf";
$tdataindscheduleemp[".inlineAddFields"][] = "Holiday2ndHalf";
$tdataindscheduleemp[".inlineAddFields"][] = "RHolidayHrs";
$tdataindscheduleemp[".inlineAddFields"][] = "SHolidayHrs";
$tdataindscheduleemp[".inlineAddFields"][] = "DH";
$tdataindscheduleemp[".inlineAddFields"][] = "ApprovedNightDiff";
$tdataindscheduleemp[".inlineAddFields"][] = "RegND";
$tdataindscheduleemp[".inlineAddFields"][] = "RHNDHrs";
$tdataindscheduleemp[".inlineAddFields"][] = "SHNDHrs";
$tdataindscheduleemp[".inlineAddFields"][] = "DHND";
$tdataindscheduleemp[".inlineAddFields"][] = "RDNDHrs";
$tdataindscheduleemp[".inlineAddFields"][] = "RHRDND";
$tdataindscheduleemp[".inlineAddFields"][] = "SHRDND";
$tdataindscheduleemp[".inlineAddFields"][] = "DHRDND";
$tdataindscheduleemp[".inlineAddFields"][] = "ExcessHrs";
$tdataindscheduleemp[".inlineAddFields"][] = "ApprovedOT";
$tdataindscheduleemp[".inlineAddFields"][] = "RegOTHrs";
$tdataindscheduleemp[".inlineAddFields"][] = "RHOTHrs";
$tdataindscheduleemp[".inlineAddFields"][] = "SHOTHrs";
$tdataindscheduleemp[".inlineAddFields"][] = "SHOTD";
$tdataindscheduleemp[".inlineAddFields"][] = "DHOT";
$tdataindscheduleemp[".inlineAddFields"][] = "RDOTHrs";
$tdataindscheduleemp[".inlineAddFields"][] = "NDOT";
$tdataindscheduleemp[".inlineAddFields"][] = "RHNDOTHrs";
$tdataindscheduleemp[".inlineAddFields"][] = "SHNDOTHrs";
$tdataindscheduleemp[".inlineAddFields"][] = "DHNDOT";
$tdataindscheduleemp[".inlineAddFields"][] = "RDNDOTHrs";
$tdataindscheduleemp[".inlineAddFields"][] = "RHRDOT";
$tdataindscheduleemp[".inlineAddFields"][] = "SHRDOT";
$tdataindscheduleemp[".inlineAddFields"][] = "SHRDOTD";
$tdataindscheduleemp[".inlineAddFields"][] = "DHRDOT";
$tdataindscheduleemp[".inlineAddFields"][] = "RHRDNDOT";
$tdataindscheduleemp[".inlineAddFields"][] = "SHRDNDOT";
$tdataindscheduleemp[".inlineAddFields"][] = "DHRDNDOT";
$tdataindscheduleemp[".inlineAddFields"][] = "VLDay";
$tdataindscheduleemp[".inlineAddFields"][] = "SLDay";
$tdataindscheduleemp[".inlineAddFields"][] = "ELDay";
$tdataindscheduleemp[".inlineAddFields"][] = "PLDay";
$tdataindscheduleemp[".inlineAddFields"][] = "TrODay";
$tdataindscheduleemp[".inlineAddFields"][] = "ApprovedRD";
$tdataindscheduleemp[".inlineAddFields"][] = "RegRD";
$tdataindscheduleemp[".inlineAddFields"][] = "RHRD";
$tdataindscheduleemp[".inlineAddFields"][] = "SHRD";
$tdataindscheduleemp[".inlineAddFields"][] = "DHRD";
$tdataindscheduleemp[".inlineAddFields"][] = "SchedType";
$tdataindscheduleemp[".inlineAddFields"][] = "Shift";
$tdataindscheduleemp[".inlineAddFields"][] = "BreakMins";

$tdataindscheduleemp[".editFields"] = array();
$tdataindscheduleemp[".editFields"][] = "EmployeeID";
$tdataindscheduleemp[".editFields"][] = "UserName";
$tdataindscheduleemp[".editFields"][] = "Employer";
$tdataindscheduleemp[".editFields"][] = "Division";
$tdataindscheduleemp[".editFields"][] = "Department";
$tdataindscheduleemp[".editFields"][] = "WageType";
$tdataindscheduleemp[".editFields"][] = "SDate";
$tdataindscheduleemp[".editFields"][] = "DayIs";
$tdataindscheduleemp[".editFields"][] = "RestDay";
$tdataindscheduleemp[".editFields"][] = "STimeIn";
$tdataindscheduleemp[".editFields"][] = "STimeOut";
$tdataindscheduleemp[".editFields"][] = "TimeIn";
$tdataindscheduleemp[".editFields"][] = "TimeOut";
$tdataindscheduleemp[".editFields"][] = "LunchBreakFrom";
$tdataindscheduleemp[".editFields"][] = "LunchBreakTo";
$tdataindscheduleemp[".editFields"][] = "AfterBreakLogOut";
$tdataindscheduleemp[".editFields"][] = "AfterBreakLog";
$tdataindscheduleemp[".editFields"][] = "Mispunched";
$tdataindscheduleemp[".editFields"][] = "RegWD";
$tdataindscheduleemp[".editFields"][] = "DWork";
$tdataindscheduleemp[".editFields"][] = "Absent";
$tdataindscheduleemp[".editFields"][] = "LateMins";
$tdataindscheduleemp[".editFields"][] = "UndertimeMins";
$tdataindscheduleemp[".editFields"][] = "LatePenaltyMins";
$tdataindscheduleemp[".editFields"][] = "LateFixPenalty";
$tdataindscheduleemp[".editFields"][] = "BreakLateMins";
$tdataindscheduleemp[".editFields"][] = "TotLateMins";
$tdataindscheduleemp[".editFields"][] = "HolidayType";
$tdataindscheduleemp[".editFields"][] = "Holiday1stHalf";
$tdataindscheduleemp[".editFields"][] = "Holiday2ndHalf";
$tdataindscheduleemp[".editFields"][] = "RHolidayHrs";
$tdataindscheduleemp[".editFields"][] = "SHolidayHrs";
$tdataindscheduleemp[".editFields"][] = "DH";
$tdataindscheduleemp[".editFields"][] = "ApprovedNightDiff";
$tdataindscheduleemp[".editFields"][] = "RegND";
$tdataindscheduleemp[".editFields"][] = "RHNDHrs";
$tdataindscheduleemp[".editFields"][] = "SHNDHrs";
$tdataindscheduleemp[".editFields"][] = "DHND";
$tdataindscheduleemp[".editFields"][] = "RDNDHrs";
$tdataindscheduleemp[".editFields"][] = "RHRDND";
$tdataindscheduleemp[".editFields"][] = "SHRDND";
$tdataindscheduleemp[".editFields"][] = "DHRDND";
$tdataindscheduleemp[".editFields"][] = "ExcessHrs";
$tdataindscheduleemp[".editFields"][] = "ApprovedOT";
$tdataindscheduleemp[".editFields"][] = "RegOTHrs";
$tdataindscheduleemp[".editFields"][] = "RHOTHrs";
$tdataindscheduleemp[".editFields"][] = "SHOTHrs";
$tdataindscheduleemp[".editFields"][] = "SHOTD";
$tdataindscheduleemp[".editFields"][] = "DHOT";
$tdataindscheduleemp[".editFields"][] = "RDOTHrs";
$tdataindscheduleemp[".editFields"][] = "NDOT";
$tdataindscheduleemp[".editFields"][] = "RHNDOTHrs";
$tdataindscheduleemp[".editFields"][] = "SHNDOTHrs";
$tdataindscheduleemp[".editFields"][] = "DHNDOT";
$tdataindscheduleemp[".editFields"][] = "RDNDOTHrs";
$tdataindscheduleemp[".editFields"][] = "RHRDOT";
$tdataindscheduleemp[".editFields"][] = "SHRDOT";
$tdataindscheduleemp[".editFields"][] = "SHRDOTD";
$tdataindscheduleemp[".editFields"][] = "DHRDOT";
$tdataindscheduleemp[".editFields"][] = "RHRDNDOT";
$tdataindscheduleemp[".editFields"][] = "SHRDNDOT";
$tdataindscheduleemp[".editFields"][] = "DHRDNDOT";
$tdataindscheduleemp[".editFields"][] = "VLDay";
$tdataindscheduleemp[".editFields"][] = "SLDay";
$tdataindscheduleemp[".editFields"][] = "ELDay";
$tdataindscheduleemp[".editFields"][] = "PLDay";
$tdataindscheduleemp[".editFields"][] = "TrODay";
$tdataindscheduleemp[".editFields"][] = "ApprovedRD";
$tdataindscheduleemp[".editFields"][] = "RegRD";
$tdataindscheduleemp[".editFields"][] = "RHRD";
$tdataindscheduleemp[".editFields"][] = "SHRD";
$tdataindscheduleemp[".editFields"][] = "DHRD";
$tdataindscheduleemp[".editFields"][] = "SchedType";
$tdataindscheduleemp[".editFields"][] = "Shift";
$tdataindscheduleemp[".editFields"][] = "BreakMins";

$tdataindscheduleemp[".inlineEditFields"] = array();
$tdataindscheduleemp[".inlineEditFields"][] = "EmployeeID";
$tdataindscheduleemp[".inlineEditFields"][] = "UserName";
$tdataindscheduleemp[".inlineEditFields"][] = "Employer";
$tdataindscheduleemp[".inlineEditFields"][] = "Division";
$tdataindscheduleemp[".inlineEditFields"][] = "Department";
$tdataindscheduleemp[".inlineEditFields"][] = "WageType";
$tdataindscheduleemp[".inlineEditFields"][] = "SDate";
$tdataindscheduleemp[".inlineEditFields"][] = "DayIs";
$tdataindscheduleemp[".inlineEditFields"][] = "RestDay";
$tdataindscheduleemp[".inlineEditFields"][] = "STimeIn";
$tdataindscheduleemp[".inlineEditFields"][] = "STimeOut";
$tdataindscheduleemp[".inlineEditFields"][] = "TimeIn";
$tdataindscheduleemp[".inlineEditFields"][] = "TimeOut";
$tdataindscheduleemp[".inlineEditFields"][] = "LunchBreakFrom";
$tdataindscheduleemp[".inlineEditFields"][] = "LunchBreakTo";
$tdataindscheduleemp[".inlineEditFields"][] = "AfterBreakLogOut";
$tdataindscheduleemp[".inlineEditFields"][] = "AfterBreakLog";
$tdataindscheduleemp[".inlineEditFields"][] = "Mispunched";
$tdataindscheduleemp[".inlineEditFields"][] = "RegWD";
$tdataindscheduleemp[".inlineEditFields"][] = "DWork";
$tdataindscheduleemp[".inlineEditFields"][] = "Absent";
$tdataindscheduleemp[".inlineEditFields"][] = "LateMins";
$tdataindscheduleemp[".inlineEditFields"][] = "UndertimeMins";
$tdataindscheduleemp[".inlineEditFields"][] = "LatePenaltyMins";
$tdataindscheduleemp[".inlineEditFields"][] = "LateFixPenalty";
$tdataindscheduleemp[".inlineEditFields"][] = "BreakLateMins";
$tdataindscheduleemp[".inlineEditFields"][] = "TotLateMins";
$tdataindscheduleemp[".inlineEditFields"][] = "HolidayType";
$tdataindscheduleemp[".inlineEditFields"][] = "Holiday1stHalf";
$tdataindscheduleemp[".inlineEditFields"][] = "Holiday2ndHalf";
$tdataindscheduleemp[".inlineEditFields"][] = "RHolidayHrs";
$tdataindscheduleemp[".inlineEditFields"][] = "SHolidayHrs";
$tdataindscheduleemp[".inlineEditFields"][] = "DH";
$tdataindscheduleemp[".inlineEditFields"][] = "ApprovedNightDiff";
$tdataindscheduleemp[".inlineEditFields"][] = "RegND";
$tdataindscheduleemp[".inlineEditFields"][] = "RHNDHrs";
$tdataindscheduleemp[".inlineEditFields"][] = "SHNDHrs";
$tdataindscheduleemp[".inlineEditFields"][] = "DHND";
$tdataindscheduleemp[".inlineEditFields"][] = "RDNDHrs";
$tdataindscheduleemp[".inlineEditFields"][] = "RHRDND";
$tdataindscheduleemp[".inlineEditFields"][] = "SHRDND";
$tdataindscheduleemp[".inlineEditFields"][] = "DHRDND";
$tdataindscheduleemp[".inlineEditFields"][] = "ExcessHrs";
$tdataindscheduleemp[".inlineEditFields"][] = "ApprovedOT";
$tdataindscheduleemp[".inlineEditFields"][] = "RegOTHrs";
$tdataindscheduleemp[".inlineEditFields"][] = "RHOTHrs";
$tdataindscheduleemp[".inlineEditFields"][] = "SHOTHrs";
$tdataindscheduleemp[".inlineEditFields"][] = "SHOTD";
$tdataindscheduleemp[".inlineEditFields"][] = "DHOT";
$tdataindscheduleemp[".inlineEditFields"][] = "RDOTHrs";
$tdataindscheduleemp[".inlineEditFields"][] = "NDOT";
$tdataindscheduleemp[".inlineEditFields"][] = "RHNDOTHrs";
$tdataindscheduleemp[".inlineEditFields"][] = "SHNDOTHrs";
$tdataindscheduleemp[".inlineEditFields"][] = "DHNDOT";
$tdataindscheduleemp[".inlineEditFields"][] = "RDNDOTHrs";
$tdataindscheduleemp[".inlineEditFields"][] = "RHRDOT";
$tdataindscheduleemp[".inlineEditFields"][] = "SHRDOT";
$tdataindscheduleemp[".inlineEditFields"][] = "SHRDOTD";
$tdataindscheduleemp[".inlineEditFields"][] = "DHRDOT";
$tdataindscheduleemp[".inlineEditFields"][] = "RHRDNDOT";
$tdataindscheduleemp[".inlineEditFields"][] = "SHRDNDOT";
$tdataindscheduleemp[".inlineEditFields"][] = "DHRDNDOT";
$tdataindscheduleemp[".inlineEditFields"][] = "VLDay";
$tdataindscheduleemp[".inlineEditFields"][] = "SLDay";
$tdataindscheduleemp[".inlineEditFields"][] = "ELDay";
$tdataindscheduleemp[".inlineEditFields"][] = "PLDay";
$tdataindscheduleemp[".inlineEditFields"][] = "TrODay";
$tdataindscheduleemp[".inlineEditFields"][] = "ApprovedRD";
$tdataindscheduleemp[".inlineEditFields"][] = "RegRD";
$tdataindscheduleemp[".inlineEditFields"][] = "RHRD";
$tdataindscheduleemp[".inlineEditFields"][] = "SHRD";
$tdataindscheduleemp[".inlineEditFields"][] = "DHRD";
$tdataindscheduleemp[".inlineEditFields"][] = "SchedType";
$tdataindscheduleemp[".inlineEditFields"][] = "Shift";
$tdataindscheduleemp[".inlineEditFields"][] = "BreakMins";

$tdataindscheduleemp[".updateSelectedFields"] = array();
$tdataindscheduleemp[".updateSelectedFields"][] = "EmployeeID";
$tdataindscheduleemp[".updateSelectedFields"][] = "UserName";
$tdataindscheduleemp[".updateSelectedFields"][] = "Employer";
$tdataindscheduleemp[".updateSelectedFields"][] = "Division";
$tdataindscheduleemp[".updateSelectedFields"][] = "Department";
$tdataindscheduleemp[".updateSelectedFields"][] = "WageType";
$tdataindscheduleemp[".updateSelectedFields"][] = "SDate";
$tdataindscheduleemp[".updateSelectedFields"][] = "DayIs";
$tdataindscheduleemp[".updateSelectedFields"][] = "RestDay";
$tdataindscheduleemp[".updateSelectedFields"][] = "STimeIn";
$tdataindscheduleemp[".updateSelectedFields"][] = "STimeOut";
$tdataindscheduleemp[".updateSelectedFields"][] = "TimeIn";
$tdataindscheduleemp[".updateSelectedFields"][] = "TimeOut";
$tdataindscheduleemp[".updateSelectedFields"][] = "LunchBreakFrom";
$tdataindscheduleemp[".updateSelectedFields"][] = "LunchBreakTo";
$tdataindscheduleemp[".updateSelectedFields"][] = "Mispunched";
$tdataindscheduleemp[".updateSelectedFields"][] = "RegWD";
$tdataindscheduleemp[".updateSelectedFields"][] = "DWork";
$tdataindscheduleemp[".updateSelectedFields"][] = "Absent";
$tdataindscheduleemp[".updateSelectedFields"][] = "LateMins";
$tdataindscheduleemp[".updateSelectedFields"][] = "UndertimeMins";
$tdataindscheduleemp[".updateSelectedFields"][] = "LatePenaltyMins";
$tdataindscheduleemp[".updateSelectedFields"][] = "LateFixPenalty";
$tdataindscheduleemp[".updateSelectedFields"][] = "TotLateMins";
$tdataindscheduleemp[".updateSelectedFields"][] = "HolidayType";
$tdataindscheduleemp[".updateSelectedFields"][] = "Holiday1stHalf";
$tdataindscheduleemp[".updateSelectedFields"][] = "Holiday2ndHalf";
$tdataindscheduleemp[".updateSelectedFields"][] = "RHolidayHrs";
$tdataindscheduleemp[".updateSelectedFields"][] = "SHolidayHrs";
$tdataindscheduleemp[".updateSelectedFields"][] = "ApprovedNightDiff";
$tdataindscheduleemp[".updateSelectedFields"][] = "RHNDHrs";
$tdataindscheduleemp[".updateSelectedFields"][] = "SHNDHrs";
$tdataindscheduleemp[".updateSelectedFields"][] = "RDNDHrs";
$tdataindscheduleemp[".updateSelectedFields"][] = "ExcessHrs";
$tdataindscheduleemp[".updateSelectedFields"][] = "ApprovedOT";
$tdataindscheduleemp[".updateSelectedFields"][] = "RegOTHrs";
$tdataindscheduleemp[".updateSelectedFields"][] = "RHOTHrs";
$tdataindscheduleemp[".updateSelectedFields"][] = "SHOTHrs";
$tdataindscheduleemp[".updateSelectedFields"][] = "RDOTHrs";
$tdataindscheduleemp[".updateSelectedFields"][] = "VLDay";
$tdataindscheduleemp[".updateSelectedFields"][] = "SLDay";
$tdataindscheduleemp[".updateSelectedFields"][] = "ELDay";
$tdataindscheduleemp[".updateSelectedFields"][] = "PLDay";
$tdataindscheduleemp[".updateSelectedFields"][] = "TrODay";
$tdataindscheduleemp[".updateSelectedFields"][] = "ApprovedRD";
$tdataindscheduleemp[".updateSelectedFields"][] = "SchedType";
$tdataindscheduleemp[".updateSelectedFields"][] = "Shift";
$tdataindscheduleemp[".updateSelectedFields"][] = "BreakMins";


$tdataindscheduleemp[".exportFields"] = array();
$tdataindscheduleemp[".exportFields"][] = "ScID";
$tdataindscheduleemp[".exportFields"][] = "EmployeeID";
$tdataindscheduleemp[".exportFields"][] = "UserName";
$tdataindscheduleemp[".exportFields"][] = "Employer";
$tdataindscheduleemp[".exportFields"][] = "Division";
$tdataindscheduleemp[".exportFields"][] = "Department";
$tdataindscheduleemp[".exportFields"][] = "WageType";
$tdataindscheduleemp[".exportFields"][] = "SDate";
$tdataindscheduleemp[".exportFields"][] = "DayIs";
$tdataindscheduleemp[".exportFields"][] = "RestDay";
$tdataindscheduleemp[".exportFields"][] = "STimeIn";
$tdataindscheduleemp[".exportFields"][] = "STimeOut";
$tdataindscheduleemp[".exportFields"][] = "TimeIn";
$tdataindscheduleemp[".exportFields"][] = "TimeOut";
$tdataindscheduleemp[".exportFields"][] = "LunchBreakFrom";
$tdataindscheduleemp[".exportFields"][] = "LunchBreakTo";
$tdataindscheduleemp[".exportFields"][] = "AfterBreakLogOut";
$tdataindscheduleemp[".exportFields"][] = "AfterBreakLog";
$tdataindscheduleemp[".exportFields"][] = "Mispunched";
$tdataindscheduleemp[".exportFields"][] = "RegWD";
$tdataindscheduleemp[".exportFields"][] = "DWork";
$tdataindscheduleemp[".exportFields"][] = "Absent";
$tdataindscheduleemp[".exportFields"][] = "LateMins";
$tdataindscheduleemp[".exportFields"][] = "UndertimeMins";
$tdataindscheduleemp[".exportFields"][] = "LatePenaltyMins";
$tdataindscheduleemp[".exportFields"][] = "LateFixPenalty";
$tdataindscheduleemp[".exportFields"][] = "BreakLateMins";
$tdataindscheduleemp[".exportFields"][] = "TotLateMins";
$tdataindscheduleemp[".exportFields"][] = "HolidayType";
$tdataindscheduleemp[".exportFields"][] = "Holiday1stHalf";
$tdataindscheduleemp[".exportFields"][] = "Holiday2ndHalf";
$tdataindscheduleemp[".exportFields"][] = "RHolidayHrs";
$tdataindscheduleemp[".exportFields"][] = "SHolidayHrs";
$tdataindscheduleemp[".exportFields"][] = "DH";
$tdataindscheduleemp[".exportFields"][] = "ApprovedNightDiff";
$tdataindscheduleemp[".exportFields"][] = "RegND";
$tdataindscheduleemp[".exportFields"][] = "RHNDHrs";
$tdataindscheduleemp[".exportFields"][] = "SHNDHrs";
$tdataindscheduleemp[".exportFields"][] = "DHND";
$tdataindscheduleemp[".exportFields"][] = "RDNDHrs";
$tdataindscheduleemp[".exportFields"][] = "RHRDND";
$tdataindscheduleemp[".exportFields"][] = "SHRDND";
$tdataindscheduleemp[".exportFields"][] = "DHRDND";
$tdataindscheduleemp[".exportFields"][] = "ExcessHrs";
$tdataindscheduleemp[".exportFields"][] = "ApprovedOT";
$tdataindscheduleemp[".exportFields"][] = "RegOTHrs";
$tdataindscheduleemp[".exportFields"][] = "RHOTHrs";
$tdataindscheduleemp[".exportFields"][] = "SHOTHrs";
$tdataindscheduleemp[".exportFields"][] = "SHOTD";
$tdataindscheduleemp[".exportFields"][] = "DHOT";
$tdataindscheduleemp[".exportFields"][] = "RDOTHrs";
$tdataindscheduleemp[".exportFields"][] = "NDOT";
$tdataindscheduleemp[".exportFields"][] = "RHNDOTHrs";
$tdataindscheduleemp[".exportFields"][] = "SHNDOTHrs";
$tdataindscheduleemp[".exportFields"][] = "DHNDOT";
$tdataindscheduleemp[".exportFields"][] = "RDNDOTHrs";
$tdataindscheduleemp[".exportFields"][] = "RHRDOT";
$tdataindscheduleemp[".exportFields"][] = "SHRDOT";
$tdataindscheduleemp[".exportFields"][] = "SHRDOTD";
$tdataindscheduleemp[".exportFields"][] = "DHRDOT";
$tdataindscheduleemp[".exportFields"][] = "RHRDNDOT";
$tdataindscheduleemp[".exportFields"][] = "SHRDNDOT";
$tdataindscheduleemp[".exportFields"][] = "DHRDNDOT";
$tdataindscheduleemp[".exportFields"][] = "VLDay";
$tdataindscheduleemp[".exportFields"][] = "SLDay";
$tdataindscheduleemp[".exportFields"][] = "ELDay";
$tdataindscheduleemp[".exportFields"][] = "PLDay";
$tdataindscheduleemp[".exportFields"][] = "TrODay";
$tdataindscheduleemp[".exportFields"][] = "ApprovedRD";
$tdataindscheduleemp[".exportFields"][] = "RegRD";
$tdataindscheduleemp[".exportFields"][] = "RHRD";
$tdataindscheduleemp[".exportFields"][] = "SHRD";
$tdataindscheduleemp[".exportFields"][] = "DHRD";
$tdataindscheduleemp[".exportFields"][] = "SchedType";
$tdataindscheduleemp[".exportFields"][] = "Shift";
$tdataindscheduleemp[".exportFields"][] = "BreakMins";

$tdataindscheduleemp[".importFields"] = array();
$tdataindscheduleemp[".importFields"][] = "ScID";
$tdataindscheduleemp[".importFields"][] = "UserName";
$tdataindscheduleemp[".importFields"][] = "SDate";
$tdataindscheduleemp[".importFields"][] = "STimeIn";
$tdataindscheduleemp[".importFields"][] = "STimeOut";
$tdataindscheduleemp[".importFields"][] = "SchedType";
$tdataindscheduleemp[".importFields"][] = "ApprovedOT";
$tdataindscheduleemp[".importFields"][] = "WageType";
$tdataindscheduleemp[".importFields"][] = "ApprovedNightDiff";
$tdataindscheduleemp[".importFields"][] = "EmployeeID";
$tdataindscheduleemp[".importFields"][] = "BreakMins";
$tdataindscheduleemp[".importFields"][] = "Shift";
$tdataindscheduleemp[".importFields"][] = "ApprovedRD";
$tdataindscheduleemp[".importFields"][] = "LunchBreakFrom";
$tdataindscheduleemp[".importFields"][] = "LunchBreakTo";
$tdataindscheduleemp[".importFields"][] = "Division";
$tdataindscheduleemp[".importFields"][] = "TimeIn";
$tdataindscheduleemp[".importFields"][] = "TimeOut";
$tdataindscheduleemp[".importFields"][] = "DayIs";
$tdataindscheduleemp[".importFields"][] = "RestDay";
$tdataindscheduleemp[".importFields"][] = "Department";
$tdataindscheduleemp[".importFields"][] = "RegWD";
$tdataindscheduleemp[".importFields"][] = "DWork";
$tdataindscheduleemp[".importFields"][] = "Absent";
$tdataindscheduleemp[".importFields"][] = "LateMins";
$tdataindscheduleemp[".importFields"][] = "UndertimeMins";
$tdataindscheduleemp[".importFields"][] = "RHolidayHrs";
$tdataindscheduleemp[".importFields"][] = "SHolidayHrs";
$tdataindscheduleemp[".importFields"][] = "ExcessHrs";
$tdataindscheduleemp[".importFields"][] = "RegOTHrs";
$tdataindscheduleemp[".importFields"][] = "RHOTHrs";
$tdataindscheduleemp[".importFields"][] = "SHOTHrs";
$tdataindscheduleemp[".importFields"][] = "RDOTHrs";
$tdataindscheduleemp[".importFields"][] = "RHNDHrs";
$tdataindscheduleemp[".importFields"][] = "SHNDHrs";
$tdataindscheduleemp[".importFields"][] = "RDNDHrs";
$tdataindscheduleemp[".importFields"][] = "VLDay";
$tdataindscheduleemp[".importFields"][] = "SLDay";
$tdataindscheduleemp[".importFields"][] = "ELDay";
$tdataindscheduleemp[".importFields"][] = "PLDay";
$tdataindscheduleemp[".importFields"][] = "TrODay";
$tdataindscheduleemp[".importFields"][] = "HolidayType";
$tdataindscheduleemp[".importFields"][] = "Mispunched";
$tdataindscheduleemp[".importFields"][] = "Holiday1stHalf";
$tdataindscheduleemp[".importFields"][] = "Holiday2ndHalf";
$tdataindscheduleemp[".importFields"][] = "TotLateMins";
$tdataindscheduleemp[".importFields"][] = "LatePenaltyMins";
$tdataindscheduleemp[".importFields"][] = "Employer";
$tdataindscheduleemp[".importFields"][] = "LateFixPenalty";
$tdataindscheduleemp[".importFields"][] = "AfterBreakLogOut";
$tdataindscheduleemp[".importFields"][] = "AfterBreakLog";
$tdataindscheduleemp[".importFields"][] = "BreakLateMins";
$tdataindscheduleemp[".importFields"][] = "RHNDOTHrs";
$tdataindscheduleemp[".importFields"][] = "SHNDOTHrs";
$tdataindscheduleemp[".importFields"][] = "RDNDOTHrs";
$tdataindscheduleemp[".importFields"][] = "DH";
$tdataindscheduleemp[".importFields"][] = "DHRD";
$tdataindscheduleemp[".importFields"][] = "DHOT";
$tdataindscheduleemp[".importFields"][] = "DHRDOT";
$tdataindscheduleemp[".importFields"][] = "SHRDND";
$tdataindscheduleemp[".importFields"][] = "RHRDND";
$tdataindscheduleemp[".importFields"][] = "SHRDNDOT";
$tdataindscheduleemp[".importFields"][] = "RHRDNDOT";
$tdataindscheduleemp[".importFields"][] = "DHND";
$tdataindscheduleemp[".importFields"][] = "DHRDND";
$tdataindscheduleemp[".importFields"][] = "DHNDOT";
$tdataindscheduleemp[".importFields"][] = "DHRDNDOT";
$tdataindscheduleemp[".importFields"][] = "RHRDOT";
$tdataindscheduleemp[".importFields"][] = "SHRDOT";
$tdataindscheduleemp[".importFields"][] = "RegND";
$tdataindscheduleemp[".importFields"][] = "RegRD";
$tdataindscheduleemp[".importFields"][] = "SHOTD";
$tdataindscheduleemp[".importFields"][] = "SHRDOTD";
$tdataindscheduleemp[".importFields"][] = "NDOT";
$tdataindscheduleemp[".importFields"][] = "RHRD";
$tdataindscheduleemp[".importFields"][] = "SHRD";

$tdataindscheduleemp[".printFields"] = array();
$tdataindscheduleemp[".printFields"][] = "ScID";
$tdataindscheduleemp[".printFields"][] = "EmployeeID";
$tdataindscheduleemp[".printFields"][] = "UserName";
$tdataindscheduleemp[".printFields"][] = "Employer";
$tdataindscheduleemp[".printFields"][] = "Division";
$tdataindscheduleemp[".printFields"][] = "Department";
$tdataindscheduleemp[".printFields"][] = "WageType";
$tdataindscheduleemp[".printFields"][] = "SDate";
$tdataindscheduleemp[".printFields"][] = "DayIs";
$tdataindscheduleemp[".printFields"][] = "RestDay";
$tdataindscheduleemp[".printFields"][] = "STimeIn";
$tdataindscheduleemp[".printFields"][] = "STimeOut";
$tdataindscheduleemp[".printFields"][] = "TimeIn";
$tdataindscheduleemp[".printFields"][] = "TimeOut";
$tdataindscheduleemp[".printFields"][] = "LunchBreakFrom";
$tdataindscheduleemp[".printFields"][] = "LunchBreakTo";
$tdataindscheduleemp[".printFields"][] = "AfterBreakLogOut";
$tdataindscheduleemp[".printFields"][] = "AfterBreakLog";
$tdataindscheduleemp[".printFields"][] = "Mispunched";
$tdataindscheduleemp[".printFields"][] = "RegWD";
$tdataindscheduleemp[".printFields"][] = "DWork";
$tdataindscheduleemp[".printFields"][] = "Absent";
$tdataindscheduleemp[".printFields"][] = "LateMins";
$tdataindscheduleemp[".printFields"][] = "UndertimeMins";
$tdataindscheduleemp[".printFields"][] = "LatePenaltyMins";
$tdataindscheduleemp[".printFields"][] = "LateFixPenalty";
$tdataindscheduleemp[".printFields"][] = "BreakLateMins";
$tdataindscheduleemp[".printFields"][] = "TotLateMins";
$tdataindscheduleemp[".printFields"][] = "HolidayType";
$tdataindscheduleemp[".printFields"][] = "Holiday1stHalf";
$tdataindscheduleemp[".printFields"][] = "Holiday2ndHalf";
$tdataindscheduleemp[".printFields"][] = "RHolidayHrs";
$tdataindscheduleemp[".printFields"][] = "SHolidayHrs";
$tdataindscheduleemp[".printFields"][] = "DH";
$tdataindscheduleemp[".printFields"][] = "ApprovedNightDiff";
$tdataindscheduleemp[".printFields"][] = "RegND";
$tdataindscheduleemp[".printFields"][] = "RHNDHrs";
$tdataindscheduleemp[".printFields"][] = "SHNDHrs";
$tdataindscheduleemp[".printFields"][] = "DHND";
$tdataindscheduleemp[".printFields"][] = "RDNDHrs";
$tdataindscheduleemp[".printFields"][] = "RHRDND";
$tdataindscheduleemp[".printFields"][] = "SHRDND";
$tdataindscheduleemp[".printFields"][] = "DHRDND";
$tdataindscheduleemp[".printFields"][] = "ExcessHrs";
$tdataindscheduleemp[".printFields"][] = "ApprovedOT";
$tdataindscheduleemp[".printFields"][] = "RegOTHrs";
$tdataindscheduleemp[".printFields"][] = "RHOTHrs";
$tdataindscheduleemp[".printFields"][] = "SHOTHrs";
$tdataindscheduleemp[".printFields"][] = "SHOTD";
$tdataindscheduleemp[".printFields"][] = "DHOT";
$tdataindscheduleemp[".printFields"][] = "RDOTHrs";
$tdataindscheduleemp[".printFields"][] = "NDOT";
$tdataindscheduleemp[".printFields"][] = "RHNDOTHrs";
$tdataindscheduleemp[".printFields"][] = "SHNDOTHrs";
$tdataindscheduleemp[".printFields"][] = "DHNDOT";
$tdataindscheduleemp[".printFields"][] = "RDNDOTHrs";
$tdataindscheduleemp[".printFields"][] = "RHRDOT";
$tdataindscheduleemp[".printFields"][] = "SHRDOT";
$tdataindscheduleemp[".printFields"][] = "SHRDOTD";
$tdataindscheduleemp[".printFields"][] = "DHRDOT";
$tdataindscheduleemp[".printFields"][] = "RHRDNDOT";
$tdataindscheduleemp[".printFields"][] = "SHRDNDOT";
$tdataindscheduleemp[".printFields"][] = "DHRDNDOT";
$tdataindscheduleemp[".printFields"][] = "VLDay";
$tdataindscheduleemp[".printFields"][] = "SLDay";
$tdataindscheduleemp[".printFields"][] = "ELDay";
$tdataindscheduleemp[".printFields"][] = "PLDay";
$tdataindscheduleemp[".printFields"][] = "TrODay";
$tdataindscheduleemp[".printFields"][] = "ApprovedRD";
$tdataindscheduleemp[".printFields"][] = "RegRD";
$tdataindscheduleemp[".printFields"][] = "RHRD";
$tdataindscheduleemp[".printFields"][] = "SHRD";
$tdataindscheduleemp[".printFields"][] = "DHRD";
$tdataindscheduleemp[".printFields"][] = "SchedType";
$tdataindscheduleemp[".printFields"][] = "Shift";
$tdataindscheduleemp[".printFields"][] = "BreakMins";


//	ScID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ScID";
	$fdata["GoodName"] = "ScID";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","ScID");
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








	$tdataindscheduleemp["ScID"] = $fdata;
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","UserName");
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




	$tdataindscheduleemp["UserName"] = $fdata;
//	SDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SDate";
	$fdata["GoodName"] = "SDate";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","SDate");
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




	$tdataindscheduleemp["SDate"] = $fdata;
//	STimeIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "STimeIn";
	$fdata["GoodName"] = "STimeIn";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","STimeIn");
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








	$tdataindscheduleemp["STimeIn"] = $fdata;
//	STimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "STimeOut";
	$fdata["GoodName"] = "STimeOut";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","STimeOut");
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








	$tdataindscheduleemp["STimeOut"] = $fdata;
//	SchedType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SchedType";
	$fdata["GoodName"] = "SchedType";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","SchedType");
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








	$tdataindscheduleemp["SchedType"] = $fdata;
//	ApprovedOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ApprovedOT";
	$fdata["GoodName"] = "ApprovedOT";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","ApprovedOT");
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








	$tdataindscheduleemp["ApprovedOT"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","WageType");
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




	$tdataindscheduleemp["WageType"] = $fdata;
//	ApprovedNightDiff
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ApprovedNightDiff";
	$fdata["GoodName"] = "ApprovedNightDiff";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","ApprovedNightDiff");
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








	$tdataindscheduleemp["ApprovedNightDiff"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","EmployeeID");
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








	$tdataindscheduleemp["EmployeeID"] = $fdata;
//	BreakMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "BreakMins";
	$fdata["GoodName"] = "BreakMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","BreakMins");
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








	$tdataindscheduleemp["BreakMins"] = $fdata;
//	Shift
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Shift";
	$fdata["GoodName"] = "Shift";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","Shift");
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








	$tdataindscheduleemp["Shift"] = $fdata;
//	ApprovedRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ApprovedRD";
	$fdata["GoodName"] = "ApprovedRD";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","ApprovedRD");
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








	$tdataindscheduleemp["ApprovedRD"] = $fdata;
//	LunchBreakFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "LunchBreakFrom";
	$fdata["GoodName"] = "LunchBreakFrom";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","LunchBreakFrom");
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








	$tdataindscheduleemp["LunchBreakFrom"] = $fdata;
//	LunchBreakTo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "LunchBreakTo";
	$fdata["GoodName"] = "LunchBreakTo";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","LunchBreakTo");
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








	$tdataindscheduleemp["LunchBreakTo"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","Division");
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




	$tdataindscheduleemp["Division"] = $fdata;
//	TimeIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "TimeIn";
	$fdata["GoodName"] = "TimeIn";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","TimeIn");
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








	$tdataindscheduleemp["TimeIn"] = $fdata;
//	TimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "TimeOut";
	$fdata["GoodName"] = "TimeOut";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","TimeOut");
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








	$tdataindscheduleemp["TimeOut"] = $fdata;
//	DayIs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "DayIs";
	$fdata["GoodName"] = "DayIs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","DayIs");
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








	$tdataindscheduleemp["DayIs"] = $fdata;
//	RestDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "RestDay";
	$fdata["GoodName"] = "RestDay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","RestDay");
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








	$tdataindscheduleemp["RestDay"] = $fdata;
//	Department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Department";
	$fdata["GoodName"] = "Department";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","Department");
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








	$tdataindscheduleemp["Department"] = $fdata;
//	RegWD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "RegWD";
	$fdata["GoodName"] = "RegWD";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","RegWD");
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








	$tdataindscheduleemp["RegWD"] = $fdata;
//	DWork
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "DWork";
	$fdata["GoodName"] = "DWork";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","DWork");
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








	$tdataindscheduleemp["DWork"] = $fdata;
//	Absent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Absent";
	$fdata["GoodName"] = "Absent";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","Absent");
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








	$tdataindscheduleemp["Absent"] = $fdata;
//	LateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "LateMins";
	$fdata["GoodName"] = "LateMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","LateMins");
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








	$tdataindscheduleemp["LateMins"] = $fdata;
//	UndertimeMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "UndertimeMins";
	$fdata["GoodName"] = "UndertimeMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","UndertimeMins");
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








	$tdataindscheduleemp["UndertimeMins"] = $fdata;
//	RHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "RHolidayHrs";
	$fdata["GoodName"] = "RHolidayHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","RHolidayHrs");
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








	$tdataindscheduleemp["RHolidayHrs"] = $fdata;
//	SHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "SHolidayHrs";
	$fdata["GoodName"] = "SHolidayHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","SHolidayHrs");
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








	$tdataindscheduleemp["SHolidayHrs"] = $fdata;
//	ExcessHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "ExcessHrs";
	$fdata["GoodName"] = "ExcessHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","ExcessHrs");
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








	$tdataindscheduleemp["ExcessHrs"] = $fdata;
//	RegOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "RegOTHrs";
	$fdata["GoodName"] = "RegOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","RegOTHrs");
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








	$tdataindscheduleemp["RegOTHrs"] = $fdata;
//	RHOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "RHOTHrs";
	$fdata["GoodName"] = "RHOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","RHOTHrs");
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








	$tdataindscheduleemp["RHOTHrs"] = $fdata;
//	SHOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "SHOTHrs";
	$fdata["GoodName"] = "SHOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","SHOTHrs");
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








	$tdataindscheduleemp["SHOTHrs"] = $fdata;
//	RDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "RDOTHrs";
	$fdata["GoodName"] = "RDOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","RDOTHrs");
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








	$tdataindscheduleemp["RDOTHrs"] = $fdata;
//	RHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "RHNDHrs";
	$fdata["GoodName"] = "RHNDHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","RHNDHrs");
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








	$tdataindscheduleemp["RHNDHrs"] = $fdata;
//	SHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "SHNDHrs";
	$fdata["GoodName"] = "SHNDHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","SHNDHrs");
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








	$tdataindscheduleemp["SHNDHrs"] = $fdata;
//	RDNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "RDNDHrs";
	$fdata["GoodName"] = "RDNDHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","RDNDHrs");
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








	$tdataindscheduleemp["RDNDHrs"] = $fdata;
//	VLDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "VLDay";
	$fdata["GoodName"] = "VLDay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","VLDay");
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








	$tdataindscheduleemp["VLDay"] = $fdata;
//	SLDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "SLDay";
	$fdata["GoodName"] = "SLDay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","SLDay");
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








	$tdataindscheduleemp["SLDay"] = $fdata;
//	ELDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "ELDay";
	$fdata["GoodName"] = "ELDay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","ELDay");
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








	$tdataindscheduleemp["ELDay"] = $fdata;
//	PLDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "PLDay";
	$fdata["GoodName"] = "PLDay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","PLDay");
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








	$tdataindscheduleemp["PLDay"] = $fdata;
//	TrODay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "TrODay";
	$fdata["GoodName"] = "TrODay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","TrODay");
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








	$tdataindscheduleemp["TrODay"] = $fdata;
//	HolidayType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "HolidayType";
	$fdata["GoodName"] = "HolidayType";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","HolidayType");
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








	$tdataindscheduleemp["HolidayType"] = $fdata;
//	Mispunched
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "Mispunched";
	$fdata["GoodName"] = "Mispunched";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","Mispunched");
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




	$tdataindscheduleemp["Mispunched"] = $fdata;
//	Holiday1stHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "Holiday1stHalf";
	$fdata["GoodName"] = "Holiday1stHalf";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","Holiday1stHalf");
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








	$tdataindscheduleemp["Holiday1stHalf"] = $fdata;
//	Holiday2ndHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "Holiday2ndHalf";
	$fdata["GoodName"] = "Holiday2ndHalf";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","Holiday2ndHalf");
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








	$tdataindscheduleemp["Holiday2ndHalf"] = $fdata;
//	TotLateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "TotLateMins";
	$fdata["GoodName"] = "TotLateMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","TotLateMins");
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








	$tdataindscheduleemp["TotLateMins"] = $fdata;
//	LatePenaltyMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "LatePenaltyMins";
	$fdata["GoodName"] = "LatePenaltyMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","LatePenaltyMins");
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








	$tdataindscheduleemp["LatePenaltyMins"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","Employer");
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








	$tdataindscheduleemp["Employer"] = $fdata;
//	LateFixPenalty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "LateFixPenalty";
	$fdata["GoodName"] = "LateFixPenalty";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","LateFixPenalty");
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








	$tdataindscheduleemp["LateFixPenalty"] = $fdata;
//	AfterBreakLogOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "AfterBreakLogOut";
	$fdata["GoodName"] = "AfterBreakLogOut";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","AfterBreakLogOut");
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








	$tdataindscheduleemp["AfterBreakLogOut"] = $fdata;
//	AfterBreakLog
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "AfterBreakLog";
	$fdata["GoodName"] = "AfterBreakLog";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","AfterBreakLog");
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








	$tdataindscheduleemp["AfterBreakLog"] = $fdata;
//	BreakLateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "BreakLateMins";
	$fdata["GoodName"] = "BreakLateMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","BreakLateMins");
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








	$tdataindscheduleemp["BreakLateMins"] = $fdata;
//	RHNDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "RHNDOTHrs";
	$fdata["GoodName"] = "RHNDOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","RHNDOTHrs");
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








	$tdataindscheduleemp["RHNDOTHrs"] = $fdata;
//	SHNDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "SHNDOTHrs";
	$fdata["GoodName"] = "SHNDOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","SHNDOTHrs");
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








	$tdataindscheduleemp["SHNDOTHrs"] = $fdata;
//	RDNDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "RDNDOTHrs";
	$fdata["GoodName"] = "RDNDOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","RDNDOTHrs");
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








	$tdataindscheduleemp["RDNDOTHrs"] = $fdata;
//	DH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "DH";
	$fdata["GoodName"] = "DH";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","DH");
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








	$tdataindscheduleemp["DH"] = $fdata;
//	DHRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "DHRD";
	$fdata["GoodName"] = "DHRD";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","DHRD");
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








	$tdataindscheduleemp["DHRD"] = $fdata;
//	DHOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "DHOT";
	$fdata["GoodName"] = "DHOT";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","DHOT");
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








	$tdataindscheduleemp["DHOT"] = $fdata;
//	DHRDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "DHRDOT";
	$fdata["GoodName"] = "DHRDOT";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","DHRDOT");
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








	$tdataindscheduleemp["DHRDOT"] = $fdata;
//	SHRDND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "SHRDND";
	$fdata["GoodName"] = "SHRDND";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","SHRDND");
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








	$tdataindscheduleemp["SHRDND"] = $fdata;
//	RHRDND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "RHRDND";
	$fdata["GoodName"] = "RHRDND";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","RHRDND");
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








	$tdataindscheduleemp["RHRDND"] = $fdata;
//	SHRDNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "SHRDNDOT";
	$fdata["GoodName"] = "SHRDNDOT";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","SHRDNDOT");
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








	$tdataindscheduleemp["SHRDNDOT"] = $fdata;
//	RHRDNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "RHRDNDOT";
	$fdata["GoodName"] = "RHRDNDOT";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","RHRDNDOT");
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








	$tdataindscheduleemp["RHRDNDOT"] = $fdata;
//	DHND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "DHND";
	$fdata["GoodName"] = "DHND";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","DHND");
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








	$tdataindscheduleemp["DHND"] = $fdata;
//	DHRDND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "DHRDND";
	$fdata["GoodName"] = "DHRDND";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","DHRDND");
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








	$tdataindscheduleemp["DHRDND"] = $fdata;
//	DHNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "DHNDOT";
	$fdata["GoodName"] = "DHNDOT";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","DHNDOT");
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








	$tdataindscheduleemp["DHNDOT"] = $fdata;
//	DHRDNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "DHRDNDOT";
	$fdata["GoodName"] = "DHRDNDOT";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","DHRDNDOT");
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








	$tdataindscheduleemp["DHRDNDOT"] = $fdata;
//	RHRDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "RHRDOT";
	$fdata["GoodName"] = "RHRDOT";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","RHRDOT");
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




	$tdataindscheduleemp["RHRDOT"] = $fdata;
//	SHRDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "SHRDOT";
	$fdata["GoodName"] = "SHRDOT";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","SHRDOT");
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




	$tdataindscheduleemp["SHRDOT"] = $fdata;
//	RegND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "RegND";
	$fdata["GoodName"] = "RegND";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","RegND");
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




	$tdataindscheduleemp["RegND"] = $fdata;
//	RegRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "RegRD";
	$fdata["GoodName"] = "RegRD";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","RegRD");
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




	$tdataindscheduleemp["RegRD"] = $fdata;
//	SHOTD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "SHOTD";
	$fdata["GoodName"] = "SHOTD";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","SHOTD");
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




	$tdataindscheduleemp["SHOTD"] = $fdata;
//	SHRDOTD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "SHRDOTD";
	$fdata["GoodName"] = "SHRDOTD";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","SHRDOTD");
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




	$tdataindscheduleemp["SHRDOTD"] = $fdata;
//	NDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "NDOT";
	$fdata["GoodName"] = "NDOT";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","NDOT");
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




	$tdataindscheduleemp["NDOT"] = $fdata;
//	RHRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "RHRD";
	$fdata["GoodName"] = "RHRD";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","RHRD");
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




	$tdataindscheduleemp["RHRD"] = $fdata;
//	SHRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "SHRD";
	$fdata["GoodName"] = "SHRD";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indscheduleemp","SHRD");
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




	$tdataindscheduleemp["SHRD"] = $fdata;


$tables_data["indscheduleemp"]=&$tdataindscheduleemp;
$field_labels["indscheduleemp"] = &$fieldLabelsindscheduleemp;
$fieldToolTips["indscheduleemp"] = &$fieldToolTipsindscheduleemp;
$placeHolders["indscheduleemp"] = &$placeHoldersindscheduleemp;
$page_titles["indscheduleemp"] = &$pageTitlesindscheduleemp;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["indscheduleemp"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["indscheduleemp"] = array();


	
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
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["indscheduleemp"][0] = $masterParams;
				$masterTablesData["indscheduleemp"][0]["masterKeys"] = array();
	$masterTablesData["indscheduleemp"][0]["masterKeys"][]="EmployeeID";
				$masterTablesData["indscheduleemp"][0]["detailKeys"] = array();
	$masterTablesData["indscheduleemp"][0]["detailKeys"][]="EmployeeID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_indscheduleemp()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ScID,  UserName,  SDate,  STimeIn,  STimeOut,  SchedType,  ApprovedOT,  WageType,  ApprovedNightDiff,  EmployeeID,  BreakMins,  Shift,  ApprovedRD,  LunchBreakFrom,  LunchBreakTo,  Division,  TimeIn,  TimeOut,  DayIs,  RestDay,  Department,  RegWD,  DWork,  Absent,  LateMins,  UndertimeMins,  RHolidayHrs,  SHolidayHrs,  ExcessHrs,  RegOTHrs,  RHOTHrs,  SHOTHrs,  RDOTHrs,  RHNDHrs,  SHNDHrs,  RDNDHrs,  VLDay,  SLDay,  ELDay,  PLDay,  TrODay,  HolidayType,  Mispunched,  Holiday1stHalf,  Holiday2ndHalf,  TotLateMins,  LatePenaltyMins,  Employer,  LateFixPenalty,  AfterBreakLogOut,  AfterBreakLog,  BreakLateMins,  RHNDOTHrs,  SHNDOTHrs,  RDNDOTHrs,  DH,  DHRD,  DHOT,  DHRDOT,  SHRDND,  RHRDND,  SHRDNDOT,  RHRDNDOT,  DHND,  DHRDND,  DHNDOT,  DHRDNDOT,  RHRDOT,  SHRDOT,  RegND,  RegRD,  SHOTD,  SHRDOTD,  NDOT,  RHRD,  SHRD";
$proto0["m_strFrom"] = "FROM indschedule";
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
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto6["m_sql"] = "ScID";
$proto6["m_srcTableName"] = "indscheduleemp";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto8["m_sql"] = "UserName";
$proto8["m_srcTableName"] = "indscheduleemp";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SDate",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto10["m_sql"] = "SDate";
$proto10["m_srcTableName"] = "indscheduleemp";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "STimeIn",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto12["m_sql"] = "STimeIn";
$proto12["m_srcTableName"] = "indscheduleemp";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "STimeOut",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto14["m_sql"] = "STimeOut";
$proto14["m_srcTableName"] = "indscheduleemp";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "SchedType",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto16["m_sql"] = "SchedType";
$proto16["m_srcTableName"] = "indscheduleemp";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedOT",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto18["m_sql"] = "ApprovedOT";
$proto18["m_srcTableName"] = "indscheduleemp";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "WageType",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto20["m_sql"] = "WageType";
$proto20["m_srcTableName"] = "indscheduleemp";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedNightDiff",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto22["m_sql"] = "ApprovedNightDiff";
$proto22["m_srcTableName"] = "indscheduleemp";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto24["m_sql"] = "EmployeeID";
$proto24["m_srcTableName"] = "indscheduleemp";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "BreakMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto26["m_sql"] = "BreakMins";
$proto26["m_srcTableName"] = "indscheduleemp";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Shift",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto28["m_sql"] = "Shift";
$proto28["m_srcTableName"] = "indscheduleemp";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedRD",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto30["m_sql"] = "ApprovedRD";
$proto30["m_srcTableName"] = "indscheduleemp";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "LunchBreakFrom",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto32["m_sql"] = "LunchBreakFrom";
$proto32["m_srcTableName"] = "indscheduleemp";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "LunchBreakTo",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto34["m_sql"] = "LunchBreakTo";
$proto34["m_srcTableName"] = "indscheduleemp";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto36["m_sql"] = "Division";
$proto36["m_srcTableName"] = "indscheduleemp";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeIn",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto38["m_sql"] = "TimeIn";
$proto38["m_srcTableName"] = "indscheduleemp";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeOut",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto40["m_sql"] = "TimeOut";
$proto40["m_srcTableName"] = "indscheduleemp";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "DayIs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto42["m_sql"] = "DayIs";
$proto42["m_srcTableName"] = "indscheduleemp";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "RestDay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto44["m_sql"] = "RestDay";
$proto44["m_srcTableName"] = "indscheduleemp";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto46["m_sql"] = "Department";
$proto46["m_srcTableName"] = "indscheduleemp";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "RegWD",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto48["m_sql"] = "RegWD";
$proto48["m_srcTableName"] = "indscheduleemp";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "DWork",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto50["m_sql"] = "DWork";
$proto50["m_srcTableName"] = "indscheduleemp";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Absent",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto52["m_sql"] = "Absent";
$proto52["m_srcTableName"] = "indscheduleemp";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "LateMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto54["m_sql"] = "LateMins";
$proto54["m_srcTableName"] = "indscheduleemp";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "UndertimeMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto56["m_sql"] = "UndertimeMins";
$proto56["m_srcTableName"] = "indscheduleemp";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "RHolidayHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto58["m_sql"] = "RHolidayHrs";
$proto58["m_srcTableName"] = "indscheduleemp";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "SHolidayHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto60["m_sql"] = "SHolidayHrs";
$proto60["m_srcTableName"] = "indscheduleemp";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "ExcessHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto62["m_sql"] = "ExcessHrs";
$proto62["m_srcTableName"] = "indscheduleemp";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "RegOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto64["m_sql"] = "RegOTHrs";
$proto64["m_srcTableName"] = "indscheduleemp";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "RHOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto66["m_sql"] = "RHOTHrs";
$proto66["m_srcTableName"] = "indscheduleemp";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto68["m_sql"] = "SHOTHrs";
$proto68["m_srcTableName"] = "indscheduleemp";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "RDOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto70["m_sql"] = "RDOTHrs";
$proto70["m_srcTableName"] = "indscheduleemp";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "RHNDHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto72["m_sql"] = "RHNDHrs";
$proto72["m_srcTableName"] = "indscheduleemp";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "SHNDHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto74["m_sql"] = "SHNDHrs";
$proto74["m_srcTableName"] = "indscheduleemp";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "RDNDHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto76["m_sql"] = "RDNDHrs";
$proto76["m_srcTableName"] = "indscheduleemp";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "VLDay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto78["m_sql"] = "VLDay";
$proto78["m_srcTableName"] = "indscheduleemp";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "SLDay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto80["m_sql"] = "SLDay";
$proto80["m_srcTableName"] = "indscheduleemp";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "ELDay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto82["m_sql"] = "ELDay";
$proto82["m_srcTableName"] = "indscheduleemp";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "PLDay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto84["m_sql"] = "PLDay";
$proto84["m_srcTableName"] = "indscheduleemp";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "TrODay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto86["m_sql"] = "TrODay";
$proto86["m_srcTableName"] = "indscheduleemp";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "HolidayType",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto88["m_sql"] = "HolidayType";
$proto88["m_srcTableName"] = "indscheduleemp";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "Mispunched",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto90["m_sql"] = "Mispunched";
$proto90["m_srcTableName"] = "indscheduleemp";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "Holiday1stHalf",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto92["m_sql"] = "Holiday1stHalf";
$proto92["m_srcTableName"] = "indscheduleemp";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "Holiday2ndHalf",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto94["m_sql"] = "Holiday2ndHalf";
$proto94["m_srcTableName"] = "indscheduleemp";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "TotLateMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto96["m_sql"] = "TotLateMins";
$proto96["m_srcTableName"] = "indscheduleemp";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "LatePenaltyMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto98["m_sql"] = "LatePenaltyMins";
$proto98["m_srcTableName"] = "indscheduleemp";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto100["m_sql"] = "Employer";
$proto100["m_srcTableName"] = "indscheduleemp";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "LateFixPenalty",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto102["m_sql"] = "LateFixPenalty";
$proto102["m_srcTableName"] = "indscheduleemp";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "AfterBreakLogOut",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto104["m_sql"] = "AfterBreakLogOut";
$proto104["m_srcTableName"] = "indscheduleemp";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "AfterBreakLog",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto106["m_sql"] = "AfterBreakLog";
$proto106["m_srcTableName"] = "indscheduleemp";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "BreakLateMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto108["m_sql"] = "BreakLateMins";
$proto108["m_srcTableName"] = "indscheduleemp";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "RHNDOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto110["m_sql"] = "RHNDOTHrs";
$proto110["m_srcTableName"] = "indscheduleemp";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "SHNDOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto112["m_sql"] = "SHNDOTHrs";
$proto112["m_srcTableName"] = "indscheduleemp";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "RDNDOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto114["m_sql"] = "RDNDOTHrs";
$proto114["m_srcTableName"] = "indscheduleemp";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "DH",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto116["m_sql"] = "DH";
$proto116["m_srcTableName"] = "indscheduleemp";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRD",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto118["m_sql"] = "DHRD";
$proto118["m_srcTableName"] = "indscheduleemp";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "DHOT",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto120["m_sql"] = "DHOT";
$proto120["m_srcTableName"] = "indscheduleemp";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDOT",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto122["m_sql"] = "DHRDOT";
$proto122["m_srcTableName"] = "indscheduleemp";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDND",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto124["m_sql"] = "SHRDND";
$proto124["m_srcTableName"] = "indscheduleemp";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDND",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto126["m_sql"] = "RHRDND";
$proto126["m_srcTableName"] = "indscheduleemp";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDNDOT",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto128["m_sql"] = "SHRDNDOT";
$proto128["m_srcTableName"] = "indscheduleemp";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDNDOT",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto130["m_sql"] = "RHRDNDOT";
$proto130["m_srcTableName"] = "indscheduleemp";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "DHND",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto132["m_sql"] = "DHND";
$proto132["m_srcTableName"] = "indscheduleemp";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDND",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto134["m_sql"] = "DHRDND";
$proto134["m_srcTableName"] = "indscheduleemp";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "DHNDOT",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto136["m_sql"] = "DHNDOT";
$proto136["m_srcTableName"] = "indscheduleemp";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDNDOT",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto138["m_sql"] = "DHRDNDOT";
$proto138["m_srcTableName"] = "indscheduleemp";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDOT",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto140["m_sql"] = "RHRDOT";
$proto140["m_srcTableName"] = "indscheduleemp";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDOT",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto142["m_sql"] = "SHRDOT";
$proto142["m_srcTableName"] = "indscheduleemp";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "RegND",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto144["m_sql"] = "RegND";
$proto144["m_srcTableName"] = "indscheduleemp";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "RegRD",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto146["m_sql"] = "RegRD";
$proto146["m_srcTableName"] = "indscheduleemp";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOTD",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto148["m_sql"] = "SHOTD";
$proto148["m_srcTableName"] = "indscheduleemp";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDOTD",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto150["m_sql"] = "SHRDOTD";
$proto150["m_srcTableName"] = "indscheduleemp";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "NDOT",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto152["m_sql"] = "NDOT";
$proto152["m_srcTableName"] = "indscheduleemp";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRD",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto154["m_sql"] = "RHRD";
$proto154["m_srcTableName"] = "indscheduleemp";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRD",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto156["m_sql"] = "SHRD";
$proto156["m_srcTableName"] = "indscheduleemp";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto158=array();
$proto158["m_link"] = "SQLL_MAIN";
			$proto159=array();
$proto159["m_strName"] = "indschedule";
$proto159["m_srcTableName"] = "indscheduleemp";
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
$proto158["m_srcTableName"] = "indscheduleemp";
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
	"m_strName" => "SDate",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indscheduleemp"
));

$proto162["m_column"]=$obj;
$proto162["m_bAsc"] = 1;
$proto162["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto162);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="indscheduleemp";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_indscheduleemp = createSqlQuery_indscheduleemp();


	
		;

																																																																												

$tdataindscheduleemp[".sqlquery"] = $queryData_indscheduleemp;

include_once(getabspath("include/indscheduleemp_events.php"));
$tableEvents["indscheduleemp"] = new eventclass_indscheduleemp;
$tdataindscheduleemp[".hasEvents"] = true;

?>