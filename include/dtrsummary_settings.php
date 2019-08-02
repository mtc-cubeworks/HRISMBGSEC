<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadtrsummary = array();
	$tdatadtrsummary[".truncateText"] = true;
	$tdatadtrsummary[".NumberOfChars"] = 80;
	$tdatadtrsummary[".ShortName"] = "dtrsummary";
	$tdatadtrsummary[".OwnerID"] = "";
	$tdatadtrsummary[".OriginalTable"] = "dtrsummary";

//	field labels
$fieldLabelsdtrsummary = array();
$fieldToolTipsdtrsummary = array();
$pageTitlesdtrsummary = array();
$placeHoldersdtrsummary = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdtrsummary["English"] = array();
	$fieldToolTipsdtrsummary["English"] = array();
	$placeHoldersdtrsummary["English"] = array();
	$pageTitlesdtrsummary["English"] = array();
	$fieldLabelsdtrsummary["English"]["EmployeeID"] = "Biometric ID";
	$fieldToolTipsdtrsummary["English"]["EmployeeID"] = "";
	$placeHoldersdtrsummary["English"]["EmployeeID"] = "";
	$fieldLabelsdtrsummary["English"]["UserName"] = "Employee";
	$fieldToolTipsdtrsummary["English"]["UserName"] = "";
	$placeHoldersdtrsummary["English"]["UserName"] = "";
	$fieldLabelsdtrsummary["English"]["Division"] = "Division";
	$fieldToolTipsdtrsummary["English"]["Division"] = "";
	$placeHoldersdtrsummary["English"]["Division"] = "";
	$fieldLabelsdtrsummary["English"]["WageType"] = "Wage Type";
	$fieldToolTipsdtrsummary["English"]["WageType"] = "";
	$placeHoldersdtrsummary["English"]["WageType"] = "";
	$fieldLabelsdtrsummary["English"]["RegWD"] = "Reg WD";
	$fieldToolTipsdtrsummary["English"]["RegWD"] = "";
	$placeHoldersdtrsummary["English"]["RegWD"] = "";
	$fieldLabelsdtrsummary["English"]["DWork"] = "DWork";
	$fieldToolTipsdtrsummary["English"]["DWork"] = "";
	$placeHoldersdtrsummary["English"]["DWork"] = "";
	$fieldLabelsdtrsummary["English"]["Absent"] = "Absent";
	$fieldToolTipsdtrsummary["English"]["Absent"] = "";
	$placeHoldersdtrsummary["English"]["Absent"] = "";
	$fieldLabelsdtrsummary["English"]["LateMins"] = "Late Mins";
	$fieldToolTipsdtrsummary["English"]["LateMins"] = "";
	$placeHoldersdtrsummary["English"]["LateMins"] = "";
	$fieldLabelsdtrsummary["English"]["UndertimeMins"] = "Undertime Mins";
	$fieldToolTipsdtrsummary["English"]["UndertimeMins"] = "";
	$placeHoldersdtrsummary["English"]["UndertimeMins"] = "";
	$fieldLabelsdtrsummary["English"]["RHolidayHrs"] = "RHoliday Hrs";
	$fieldToolTipsdtrsummary["English"]["RHolidayHrs"] = "";
	$placeHoldersdtrsummary["English"]["RHolidayHrs"] = "";
	$fieldLabelsdtrsummary["English"]["SHolidayHrs"] = "SHoliday Hrs";
	$fieldToolTipsdtrsummary["English"]["SHolidayHrs"] = "";
	$placeHoldersdtrsummary["English"]["SHolidayHrs"] = "";
	$fieldLabelsdtrsummary["English"]["CHolidayHrs"] = "CHoliday Hrs";
	$fieldToolTipsdtrsummary["English"]["CHolidayHrs"] = "";
	$placeHoldersdtrsummary["English"]["CHolidayHrs"] = "";
	$fieldLabelsdtrsummary["English"]["ExcessHrs"] = "Excess Hrs";
	$fieldToolTipsdtrsummary["English"]["ExcessHrs"] = "";
	$placeHoldersdtrsummary["English"]["ExcessHrs"] = "";
	$fieldLabelsdtrsummary["English"]["RegOTHrs"] = "Reg OTHrs";
	$fieldToolTipsdtrsummary["English"]["RegOTHrs"] = "";
	$placeHoldersdtrsummary["English"]["RegOTHrs"] = "";
	$fieldLabelsdtrsummary["English"]["RHOTHrs"] = "RHOTHrs";
	$fieldToolTipsdtrsummary["English"]["RHOTHrs"] = "";
	$placeHoldersdtrsummary["English"]["RHOTHrs"] = "";
	$fieldLabelsdtrsummary["English"]["SHOTHrs"] = "SHOTHRs";
	$fieldToolTipsdtrsummary["English"]["SHOTHrs"] = "";
	$placeHoldersdtrsummary["English"]["SHOTHrs"] = "";
	$fieldLabelsdtrsummary["English"]["CHOTHrs"] = "CHOTHrs";
	$fieldToolTipsdtrsummary["English"]["CHOTHrs"] = "";
	$placeHoldersdtrsummary["English"]["CHOTHrs"] = "";
	$fieldLabelsdtrsummary["English"]["RDOTHrs"] = "RDOTHrs";
	$fieldToolTipsdtrsummary["English"]["RDOTHrs"] = "";
	$placeHoldersdtrsummary["English"]["RDOTHrs"] = "";
	$fieldLabelsdtrsummary["English"]["NDHrs"] = "NDHrs";
	$fieldToolTipsdtrsummary["English"]["NDHrs"] = "";
	$placeHoldersdtrsummary["English"]["NDHrs"] = "";
	$fieldLabelsdtrsummary["English"]["RDHrs"] = "RDHrs";
	$fieldToolTipsdtrsummary["English"]["RDHrs"] = "";
	$placeHoldersdtrsummary["English"]["RDHrs"] = "";
	$fieldLabelsdtrsummary["English"]["RegNDHrs"] = "Reg NDHrs";
	$fieldToolTipsdtrsummary["English"]["RegNDHrs"] = "";
	$placeHoldersdtrsummary["English"]["RegNDHrs"] = "";
	$fieldLabelsdtrsummary["English"]["RHNDHrs"] = "RHNDHrs";
	$fieldToolTipsdtrsummary["English"]["RHNDHrs"] = "";
	$placeHoldersdtrsummary["English"]["RHNDHrs"] = "";
	$fieldLabelsdtrsummary["English"]["SHNDHrs"] = "SHNDHrs";
	$fieldToolTipsdtrsummary["English"]["SHNDHrs"] = "";
	$placeHoldersdtrsummary["English"]["SHNDHrs"] = "";
	$fieldLabelsdtrsummary["English"]["CHNDHrs"] = "CHNDHrs";
	$fieldToolTipsdtrsummary["English"]["CHNDHrs"] = "";
	$placeHoldersdtrsummary["English"]["CHNDHrs"] = "";
	$fieldLabelsdtrsummary["English"]["RDNDHrs"] = "RDNDHrs";
	$fieldToolTipsdtrsummary["English"]["RDNDHrs"] = "";
	$placeHoldersdtrsummary["English"]["RDNDHrs"] = "";
	$fieldLabelsdtrsummary["English"]["NDMealAllowance"] = "NDMeal Allowance";
	$fieldToolTipsdtrsummary["English"]["NDMealAllowance"] = "";
	$placeHoldersdtrsummary["English"]["NDMealAllowance"] = "";
	$fieldLabelsdtrsummary["English"]["Employer"] = "Employer";
	$fieldToolTipsdtrsummary["English"]["Employer"] = "";
	$placeHoldersdtrsummary["English"]["Employer"] = "";
	$fieldLabelsdtrsummary["English"]["ScID"] = "Sc ID";
	$fieldToolTipsdtrsummary["English"]["ScID"] = "";
	$placeHoldersdtrsummary["English"]["ScID"] = "";
	$fieldLabelsdtrsummary["English"]["SDate"] = "SDate";
	$fieldToolTipsdtrsummary["English"]["SDate"] = "";
	$placeHoldersdtrsummary["English"]["SDate"] = "";
	$fieldLabelsdtrsummary["English"]["STimeIn"] = "STime In";
	$fieldToolTipsdtrsummary["English"]["STimeIn"] = "";
	$placeHoldersdtrsummary["English"]["STimeIn"] = "";
	$fieldLabelsdtrsummary["English"]["STimeOut"] = "STime Out";
	$fieldToolTipsdtrsummary["English"]["STimeOut"] = "";
	$placeHoldersdtrsummary["English"]["STimeOut"] = "";
	$fieldLabelsdtrsummary["English"]["SchedType"] = "Sched Type";
	$fieldToolTipsdtrsummary["English"]["SchedType"] = "";
	$placeHoldersdtrsummary["English"]["SchedType"] = "";
	$fieldLabelsdtrsummary["English"]["ApprovedOT"] = "Approved OT";
	$fieldToolTipsdtrsummary["English"]["ApprovedOT"] = "";
	$placeHoldersdtrsummary["English"]["ApprovedOT"] = "";
	$fieldLabelsdtrsummary["English"]["AOTMins"] = "AOTMins";
	$fieldToolTipsdtrsummary["English"]["AOTMins"] = "";
	$placeHoldersdtrsummary["English"]["AOTMins"] = "";
	$fieldLabelsdtrsummary["English"]["ApprovedNightDiff"] = "Approved Night Diff";
	$fieldToolTipsdtrsummary["English"]["ApprovedNightDiff"] = "";
	$placeHoldersdtrsummary["English"]["ApprovedNightDiff"] = "";
	$fieldLabelsdtrsummary["English"]["ANDiff"] = "ANDiff";
	$fieldToolTipsdtrsummary["English"]["ANDiff"] = "";
	$placeHoldersdtrsummary["English"]["ANDiff"] = "";
	$fieldLabelsdtrsummary["English"]["MinsPerDay"] = "Mins Per Day";
	$fieldToolTipsdtrsummary["English"]["MinsPerDay"] = "";
	$placeHoldersdtrsummary["English"]["MinsPerDay"] = "";
	$fieldLabelsdtrsummary["English"]["BreakMins"] = "Break Mins";
	$fieldToolTipsdtrsummary["English"]["BreakMins"] = "";
	$placeHoldersdtrsummary["English"]["BreakMins"] = "";
	$fieldLabelsdtrsummary["English"]["Shift"] = "Shift";
	$fieldToolTipsdtrsummary["English"]["Shift"] = "";
	$placeHoldersdtrsummary["English"]["Shift"] = "";
	$fieldLabelsdtrsummary["English"]["ApprovedRD"] = "Approved RD";
	$fieldToolTipsdtrsummary["English"]["ApprovedRD"] = "";
	$placeHoldersdtrsummary["English"]["ApprovedRD"] = "";
	$fieldLabelsdtrsummary["English"]["RDMins"] = "RDMins";
	$fieldToolTipsdtrsummary["English"]["RDMins"] = "";
	$placeHoldersdtrsummary["English"]["RDMins"] = "";
	$fieldLabelsdtrsummary["English"]["LunchBreakFrom"] = "Lunch Break From";
	$fieldToolTipsdtrsummary["English"]["LunchBreakFrom"] = "";
	$placeHoldersdtrsummary["English"]["LunchBreakFrom"] = "";
	$fieldLabelsdtrsummary["English"]["LunchBreakTo"] = "Lunch Break To";
	$fieldToolTipsdtrsummary["English"]["LunchBreakTo"] = "";
	$placeHoldersdtrsummary["English"]["LunchBreakTo"] = "";
	$fieldLabelsdtrsummary["English"]["NDMealAllowancePerShift"] = "NDMeal Allowance Per Shift";
	$fieldToolTipsdtrsummary["English"]["NDMealAllowancePerShift"] = "";
	$placeHoldersdtrsummary["English"]["NDMealAllowancePerShift"] = "";
	$fieldLabelsdtrsummary["English"]["NDMinimumHrs"] = "NDMinimum Hrs";
	$fieldToolTipsdtrsummary["English"]["NDMinimumHrs"] = "";
	$placeHoldersdtrsummary["English"]["NDMinimumHrs"] = "";
	$fieldLabelsdtrsummary["English"]["TimeIn"] = "Time In";
	$fieldToolTipsdtrsummary["English"]["TimeIn"] = "";
	$placeHoldersdtrsummary["English"]["TimeIn"] = "";
	$fieldLabelsdtrsummary["English"]["TimeOut"] = "Time Out";
	$fieldToolTipsdtrsummary["English"]["TimeOut"] = "";
	$placeHoldersdtrsummary["English"]["TimeOut"] = "";
	$fieldLabelsdtrsummary["English"]["DayIs"] = "Day Is";
	$fieldToolTipsdtrsummary["English"]["DayIs"] = "";
	$placeHoldersdtrsummary["English"]["DayIs"] = "";
	$fieldLabelsdtrsummary["English"]["RestDay"] = "Rest Day";
	$fieldToolTipsdtrsummary["English"]["RestDay"] = "";
	$placeHoldersdtrsummary["English"]["RestDay"] = "";
	$fieldLabelsdtrsummary["English"]["Department"] = "Department";
	$fieldToolTipsdtrsummary["English"]["Department"] = "";
	$placeHoldersdtrsummary["English"]["Department"] = "";
	$fieldLabelsdtrsummary["English"]["VLDay"] = "VLDay";
	$fieldToolTipsdtrsummary["English"]["VLDay"] = "";
	$placeHoldersdtrsummary["English"]["VLDay"] = "";
	$fieldLabelsdtrsummary["English"]["SLDay"] = "SLDay";
	$fieldToolTipsdtrsummary["English"]["SLDay"] = "";
	$placeHoldersdtrsummary["English"]["SLDay"] = "";
	$fieldLabelsdtrsummary["English"]["ELDay"] = "ELDay";
	$fieldToolTipsdtrsummary["English"]["ELDay"] = "";
	$placeHoldersdtrsummary["English"]["ELDay"] = "";
	$fieldLabelsdtrsummary["English"]["PLDay"] = "PLDay";
	$fieldToolTipsdtrsummary["English"]["PLDay"] = "";
	$placeHoldersdtrsummary["English"]["PLDay"] = "";
	$fieldLabelsdtrsummary["English"]["TrODay"] = "Tr ODay";
	$fieldToolTipsdtrsummary["English"]["TrODay"] = "";
	$placeHoldersdtrsummary["English"]["TrODay"] = "";
	$fieldLabelsdtrsummary["English"]["HolidayType"] = "Holiday Type";
	$fieldToolTipsdtrsummary["English"]["HolidayType"] = "";
	$placeHoldersdtrsummary["English"]["HolidayType"] = "";
	$fieldLabelsdtrsummary["English"]["Mispunched"] = "Mispunched";
	$fieldToolTipsdtrsummary["English"]["Mispunched"] = "";
	$placeHoldersdtrsummary["English"]["Mispunched"] = "";
	$fieldLabelsdtrsummary["English"]["Holiday1stHalf"] = "Holiday1st Half";
	$fieldToolTipsdtrsummary["English"]["Holiday1stHalf"] = "";
	$placeHoldersdtrsummary["English"]["Holiday1stHalf"] = "";
	$fieldLabelsdtrsummary["English"]["Holiday2ndHalf"] = "Holiday2nd Half";
	$fieldToolTipsdtrsummary["English"]["Holiday2ndHalf"] = "";
	$placeHoldersdtrsummary["English"]["Holiday2ndHalf"] = "";
	$fieldLabelsdtrsummary["English"]["TotLateMins"] = "Tot Late Mins";
	$fieldToolTipsdtrsummary["English"]["TotLateMins"] = "";
	$placeHoldersdtrsummary["English"]["TotLateMins"] = "";
	$fieldLabelsdtrsummary["English"]["LatePenaltyMins"] = "Late Penalty Mins";
	$fieldToolTipsdtrsummary["English"]["LatePenaltyMins"] = "";
	$placeHoldersdtrsummary["English"]["LatePenaltyMins"] = "";
	$fieldLabelsdtrsummary["English"]["LateFixPenalty"] = "Late Fix Penalty";
	$fieldToolTipsdtrsummary["English"]["LateFixPenalty"] = "";
	$placeHoldersdtrsummary["English"]["LateFixPenalty"] = "";
	$fieldLabelsdtrsummary["English"]["AfterBreakLogOut"] = "After Break Log Out";
	$fieldToolTipsdtrsummary["English"]["AfterBreakLogOut"] = "";
	$placeHoldersdtrsummary["English"]["AfterBreakLogOut"] = "";
	$fieldLabelsdtrsummary["English"]["AfterBreakLog"] = "After Break Log";
	$fieldToolTipsdtrsummary["English"]["AfterBreakLog"] = "";
	$placeHoldersdtrsummary["English"]["AfterBreakLog"] = "";
	$fieldLabelsdtrsummary["English"]["PreLogMins"] = "Pre Log Mins";
	$fieldToolTipsdtrsummary["English"]["PreLogMins"] = "";
	$placeHoldersdtrsummary["English"]["PreLogMins"] = "";
	$fieldLabelsdtrsummary["English"]["IncludeBreakLate"] = "Include Break Late";
	$fieldToolTipsdtrsummary["English"]["IncludeBreakLate"] = "";
	$placeHoldersdtrsummary["English"]["IncludeBreakLate"] = "";
	$fieldLabelsdtrsummary["English"]["GracePeriodMins"] = "Grace Period Mins";
	$fieldToolTipsdtrsummary["English"]["GracePeriodMins"] = "";
	$placeHoldersdtrsummary["English"]["GracePeriodMins"] = "";
	$fieldLabelsdtrsummary["English"]["BreakLateMins"] = "Break Late Mins";
	$fieldToolTipsdtrsummary["English"]["BreakLateMins"] = "";
	$placeHoldersdtrsummary["English"]["BreakLateMins"] = "";
	$fieldLabelsdtrsummary["English"]["ANDOTMins"] = "ANDOTMins";
	$fieldToolTipsdtrsummary["English"]["ANDOTMins"] = "";
	$placeHoldersdtrsummary["English"]["ANDOTMins"] = "";
	$fieldLabelsdtrsummary["English"]["RegNDOTHrs"] = "Reg NDOTHrs";
	$fieldToolTipsdtrsummary["English"]["RegNDOTHrs"] = "";
	$placeHoldersdtrsummary["English"]["RegNDOTHrs"] = "";
	$fieldLabelsdtrsummary["English"]["RHNDOTHrs"] = "RHNDOTHrs";
	$fieldToolTipsdtrsummary["English"]["RHNDOTHrs"] = "";
	$placeHoldersdtrsummary["English"]["RHNDOTHrs"] = "";
	$fieldLabelsdtrsummary["English"]["SHNDOTHrs"] = "SHNDOTHrs";
	$fieldToolTipsdtrsummary["English"]["SHNDOTHrs"] = "";
	$placeHoldersdtrsummary["English"]["SHNDOTHrs"] = "";
	$fieldLabelsdtrsummary["English"]["CHNDOTHrs"] = "CHNDOTHrs";
	$fieldToolTipsdtrsummary["English"]["CHNDOTHrs"] = "";
	$placeHoldersdtrsummary["English"]["CHNDOTHrs"] = "";
	$fieldLabelsdtrsummary["English"]["RDNDOTHrs"] = "RDNDOTHrs";
	$fieldToolTipsdtrsummary["English"]["RDNDOTHrs"] = "";
	$placeHoldersdtrsummary["English"]["RDNDOTHrs"] = "";
	if (count($fieldToolTipsdtrsummary["English"]))
		$tdatadtrsummary[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdtrsummary[""] = array();
	$fieldToolTipsdtrsummary[""] = array();
	$placeHoldersdtrsummary[""] = array();
	$pageTitlesdtrsummary[""] = array();
	$fieldLabelsdtrsummary[""]["ScID"] = "Sc ID";
	$fieldToolTipsdtrsummary[""]["ScID"] = "";
	$placeHoldersdtrsummary[""]["ScID"] = "";
	$fieldLabelsdtrsummary[""]["SDate"] = "SDate";
	$fieldToolTipsdtrsummary[""]["SDate"] = "";
	$placeHoldersdtrsummary[""]["SDate"] = "";
	$fieldLabelsdtrsummary[""]["STimeIn"] = "STime In";
	$fieldToolTipsdtrsummary[""]["STimeIn"] = "";
	$placeHoldersdtrsummary[""]["STimeIn"] = "";
	$fieldLabelsdtrsummary[""]["STimeOut"] = "STime Out";
	$fieldToolTipsdtrsummary[""]["STimeOut"] = "";
	$placeHoldersdtrsummary[""]["STimeOut"] = "";
	$fieldLabelsdtrsummary[""]["SchedType"] = "Sched Type";
	$fieldToolTipsdtrsummary[""]["SchedType"] = "";
	$placeHoldersdtrsummary[""]["SchedType"] = "";
	$fieldLabelsdtrsummary[""]["ApprovedOT"] = "Approved OT";
	$fieldToolTipsdtrsummary[""]["ApprovedOT"] = "";
	$placeHoldersdtrsummary[""]["ApprovedOT"] = "";
	$fieldLabelsdtrsummary[""]["AOTMins"] = "AOTMins";
	$fieldToolTipsdtrsummary[""]["AOTMins"] = "";
	$placeHoldersdtrsummary[""]["AOTMins"] = "";
	$fieldLabelsdtrsummary[""]["ApprovedNightDiff"] = "Approved Night Diff";
	$fieldToolTipsdtrsummary[""]["ApprovedNightDiff"] = "";
	$placeHoldersdtrsummary[""]["ApprovedNightDiff"] = "";
	$fieldLabelsdtrsummary[""]["ANDiff"] = "ANDiff";
	$fieldToolTipsdtrsummary[""]["ANDiff"] = "";
	$placeHoldersdtrsummary[""]["ANDiff"] = "";
	$fieldLabelsdtrsummary[""]["MinsPerDay"] = "Mins Per Day";
	$fieldToolTipsdtrsummary[""]["MinsPerDay"] = "";
	$placeHoldersdtrsummary[""]["MinsPerDay"] = "";
	$fieldLabelsdtrsummary[""]["BreakMins"] = "Break Mins";
	$fieldToolTipsdtrsummary[""]["BreakMins"] = "";
	$placeHoldersdtrsummary[""]["BreakMins"] = "";
	$fieldLabelsdtrsummary[""]["Shift"] = "Shift";
	$fieldToolTipsdtrsummary[""]["Shift"] = "";
	$placeHoldersdtrsummary[""]["Shift"] = "";
	$fieldLabelsdtrsummary[""]["ApprovedRD"] = "Approved RD";
	$fieldToolTipsdtrsummary[""]["ApprovedRD"] = "";
	$placeHoldersdtrsummary[""]["ApprovedRD"] = "";
	$fieldLabelsdtrsummary[""]["RDMins"] = "RDMins";
	$fieldToolTipsdtrsummary[""]["RDMins"] = "";
	$placeHoldersdtrsummary[""]["RDMins"] = "";
	$fieldLabelsdtrsummary[""]["LunchBreakFrom"] = "Lunch Break From";
	$fieldToolTipsdtrsummary[""]["LunchBreakFrom"] = "";
	$placeHoldersdtrsummary[""]["LunchBreakFrom"] = "";
	$fieldLabelsdtrsummary[""]["LunchBreakTo"] = "Lunch Break To";
	$fieldToolTipsdtrsummary[""]["LunchBreakTo"] = "";
	$placeHoldersdtrsummary[""]["LunchBreakTo"] = "";
	$fieldLabelsdtrsummary[""]["NDMealAllowancePerShift"] = "NDMeal Allowance Per Shift";
	$fieldToolTipsdtrsummary[""]["NDMealAllowancePerShift"] = "";
	$placeHoldersdtrsummary[""]["NDMealAllowancePerShift"] = "";
	$fieldLabelsdtrsummary[""]["NDMinimumHrs"] = "NDMinimum Hrs";
	$fieldToolTipsdtrsummary[""]["NDMinimumHrs"] = "";
	$placeHoldersdtrsummary[""]["NDMinimumHrs"] = "";
	$fieldLabelsdtrsummary[""]["TimeIn"] = "Time In";
	$fieldToolTipsdtrsummary[""]["TimeIn"] = "";
	$placeHoldersdtrsummary[""]["TimeIn"] = "";
	$fieldLabelsdtrsummary[""]["TimeOut"] = "Time Out";
	$fieldToolTipsdtrsummary[""]["TimeOut"] = "";
	$placeHoldersdtrsummary[""]["TimeOut"] = "";
	$fieldLabelsdtrsummary[""]["DayIs"] = "Day Is";
	$fieldToolTipsdtrsummary[""]["DayIs"] = "";
	$placeHoldersdtrsummary[""]["DayIs"] = "";
	$fieldLabelsdtrsummary[""]["RestDay"] = "Rest Day";
	$fieldToolTipsdtrsummary[""]["RestDay"] = "";
	$placeHoldersdtrsummary[""]["RestDay"] = "";
	$fieldLabelsdtrsummary[""]["Department"] = "Department";
	$fieldToolTipsdtrsummary[""]["Department"] = "";
	$placeHoldersdtrsummary[""]["Department"] = "";
	$fieldLabelsdtrsummary[""]["VLDay"] = "VLDay";
	$fieldToolTipsdtrsummary[""]["VLDay"] = "";
	$placeHoldersdtrsummary[""]["VLDay"] = "";
	$fieldLabelsdtrsummary[""]["SLDay"] = "SLDay";
	$fieldToolTipsdtrsummary[""]["SLDay"] = "";
	$placeHoldersdtrsummary[""]["SLDay"] = "";
	$fieldLabelsdtrsummary[""]["ELDay"] = "ELDay";
	$fieldToolTipsdtrsummary[""]["ELDay"] = "";
	$placeHoldersdtrsummary[""]["ELDay"] = "";
	$fieldLabelsdtrsummary[""]["PLDay"] = "PLDay";
	$fieldToolTipsdtrsummary[""]["PLDay"] = "";
	$placeHoldersdtrsummary[""]["PLDay"] = "";
	$fieldLabelsdtrsummary[""]["TrODay"] = "Tr ODay";
	$fieldToolTipsdtrsummary[""]["TrODay"] = "";
	$placeHoldersdtrsummary[""]["TrODay"] = "";
	$fieldLabelsdtrsummary[""]["HolidayType"] = "Holiday Type";
	$fieldToolTipsdtrsummary[""]["HolidayType"] = "";
	$placeHoldersdtrsummary[""]["HolidayType"] = "";
	$fieldLabelsdtrsummary[""]["Mispunched"] = "Mispunched";
	$fieldToolTipsdtrsummary[""]["Mispunched"] = "";
	$placeHoldersdtrsummary[""]["Mispunched"] = "";
	$fieldLabelsdtrsummary[""]["Holiday1stHalf"] = "Holiday1st Half";
	$fieldToolTipsdtrsummary[""]["Holiday1stHalf"] = "";
	$placeHoldersdtrsummary[""]["Holiday1stHalf"] = "";
	$fieldLabelsdtrsummary[""]["Holiday2ndHalf"] = "Holiday2nd Half";
	$fieldToolTipsdtrsummary[""]["Holiday2ndHalf"] = "";
	$placeHoldersdtrsummary[""]["Holiday2ndHalf"] = "";
	$fieldLabelsdtrsummary[""]["TotLateMins"] = "Tot Late Mins";
	$fieldToolTipsdtrsummary[""]["TotLateMins"] = "";
	$placeHoldersdtrsummary[""]["TotLateMins"] = "";
	$fieldLabelsdtrsummary[""]["LatePenaltyMins"] = "Late Penalty Mins";
	$fieldToolTipsdtrsummary[""]["LatePenaltyMins"] = "";
	$placeHoldersdtrsummary[""]["LatePenaltyMins"] = "";
	$fieldLabelsdtrsummary[""]["LateFixPenalty"] = "Late Fix Penalty";
	$fieldToolTipsdtrsummary[""]["LateFixPenalty"] = "";
	$placeHoldersdtrsummary[""]["LateFixPenalty"] = "";
	$fieldLabelsdtrsummary[""]["AfterBreakLogOut"] = "After Break Log Out";
	$fieldToolTipsdtrsummary[""]["AfterBreakLogOut"] = "";
	$placeHoldersdtrsummary[""]["AfterBreakLogOut"] = "";
	$fieldLabelsdtrsummary[""]["AfterBreakLog"] = "After Break Log";
	$fieldToolTipsdtrsummary[""]["AfterBreakLog"] = "";
	$placeHoldersdtrsummary[""]["AfterBreakLog"] = "";
	$fieldLabelsdtrsummary[""]["PreLogMins"] = "Pre Log Mins";
	$fieldToolTipsdtrsummary[""]["PreLogMins"] = "";
	$placeHoldersdtrsummary[""]["PreLogMins"] = "";
	$fieldLabelsdtrsummary[""]["IncludeBreakLate"] = "Include Break Late";
	$fieldToolTipsdtrsummary[""]["IncludeBreakLate"] = "";
	$placeHoldersdtrsummary[""]["IncludeBreakLate"] = "";
	$fieldLabelsdtrsummary[""]["GracePeriodMins"] = "Grace Period Mins";
	$fieldToolTipsdtrsummary[""]["GracePeriodMins"] = "";
	$placeHoldersdtrsummary[""]["GracePeriodMins"] = "";
	$fieldLabelsdtrsummary[""]["BreakLateMins"] = "Break Late Mins";
	$fieldToolTipsdtrsummary[""]["BreakLateMins"] = "";
	$placeHoldersdtrsummary[""]["BreakLateMins"] = "";
	$fieldLabelsdtrsummary[""]["ANDOTMins"] = "ANDOTMins";
	$fieldToolTipsdtrsummary[""]["ANDOTMins"] = "";
	$placeHoldersdtrsummary[""]["ANDOTMins"] = "";
	$fieldLabelsdtrsummary[""]["RegNDOTHrs"] = "Reg NDOTHrs";
	$fieldToolTipsdtrsummary[""]["RegNDOTHrs"] = "";
	$placeHoldersdtrsummary[""]["RegNDOTHrs"] = "";
	$fieldLabelsdtrsummary[""]["RHNDOTHrs"] = "RHNDOTHrs";
	$fieldToolTipsdtrsummary[""]["RHNDOTHrs"] = "";
	$placeHoldersdtrsummary[""]["RHNDOTHrs"] = "";
	$fieldLabelsdtrsummary[""]["SHNDOTHrs"] = "SHNDOTHrs";
	$fieldToolTipsdtrsummary[""]["SHNDOTHrs"] = "";
	$placeHoldersdtrsummary[""]["SHNDOTHrs"] = "";
	$fieldLabelsdtrsummary[""]["CHNDOTHrs"] = "CHNDOTHrs";
	$fieldToolTipsdtrsummary[""]["CHNDOTHrs"] = "";
	$placeHoldersdtrsummary[""]["CHNDOTHrs"] = "";
	$fieldLabelsdtrsummary[""]["RDNDOTHrs"] = "RDNDOTHrs";
	$fieldToolTipsdtrsummary[""]["RDNDOTHrs"] = "";
	$placeHoldersdtrsummary[""]["RDNDOTHrs"] = "";
	if (count($fieldToolTipsdtrsummary[""]))
		$tdatadtrsummary[".isUseToolTips"] = true;
}


	$tdatadtrsummary[".NCSearch"] = true;



$tdatadtrsummary[".shortTableName"] = "dtrsummary";
$tdatadtrsummary[".nSecOptions"] = 0;
$tdatadtrsummary[".recsPerRowPrint"] = 1;
$tdatadtrsummary[".mainTableOwnerID"] = "";
$tdatadtrsummary[".moveNext"] = 1;
$tdatadtrsummary[".entityType"] = 0;

$tdatadtrsummary[".strOriginalTableName"] = "dtrsummary";

	



$tdatadtrsummary[".showAddInPopup"] = false;

$tdatadtrsummary[".showEditInPopup"] = false;

$tdatadtrsummary[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadtrsummary[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadtrsummary[".fieldsForRegister"] = array();

$tdatadtrsummary[".listAjax"] = false;

	$tdatadtrsummary[".audit"] = false;

	$tdatadtrsummary[".locking"] = false;



$tdatadtrsummary[".list"] = true;



$tdatadtrsummary[".reorderRecordsByHeader"] = true;


$tdatadtrsummary[".exportFormatting"] = 2;
$tdatadtrsummary[".exportDelimiter"] = ",";
		


$tdatadtrsummary[".exportTo"] = true;

$tdatadtrsummary[".printFriendly"] = true;


$tdatadtrsummary[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadtrsummary[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatadtrsummary[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatadtrsummary[".searchSaving"] = false;
//

$tdatadtrsummary[".showSearchPanel"] = true;
		$tdatadtrsummary[".flexibleSearch"] = true;

$tdatadtrsummary[".isUseAjaxSuggest"] = true;

$tdatadtrsummary[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																														

$tdatadtrsummary[".ajaxCodeSnippetAdded"] = false;

$tdatadtrsummary[".buttonsAdded"] = false;

$tdatadtrsummary[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadtrsummary[".isUseTimeForSearch"] = false;





$tdatadtrsummary[".allSearchFields"] = array();
$tdatadtrsummary[".filterFields"] = array();
$tdatadtrsummary[".requiredSearchFields"] = array();

$tdatadtrsummary[".allSearchFields"][] = "ScID";
	$tdatadtrsummary[".allSearchFields"][] = "SDate";
	$tdatadtrsummary[".allSearchFields"][] = "STimeIn";
	$tdatadtrsummary[".allSearchFields"][] = "STimeOut";
	$tdatadtrsummary[".allSearchFields"][] = "SchedType";
	$tdatadtrsummary[".allSearchFields"][] = "ApprovedOT";
	$tdatadtrsummary[".allSearchFields"][] = "AOTMins";
	$tdatadtrsummary[".allSearchFields"][] = "ApprovedNightDiff";
	$tdatadtrsummary[".allSearchFields"][] = "ANDiff";
	$tdatadtrsummary[".allSearchFields"][] = "MinsPerDay";
	$tdatadtrsummary[".allSearchFields"][] = "BreakMins";
	$tdatadtrsummary[".allSearchFields"][] = "Shift";
	$tdatadtrsummary[".allSearchFields"][] = "ApprovedRD";
	$tdatadtrsummary[".allSearchFields"][] = "RDMins";
	$tdatadtrsummary[".allSearchFields"][] = "LunchBreakFrom";
	$tdatadtrsummary[".allSearchFields"][] = "LunchBreakTo";
	$tdatadtrsummary[".allSearchFields"][] = "NDMealAllowancePerShift";
	$tdatadtrsummary[".allSearchFields"][] = "NDMinimumHrs";
	$tdatadtrsummary[".allSearchFields"][] = "TimeIn";
	$tdatadtrsummary[".allSearchFields"][] = "TimeOut";
	$tdatadtrsummary[".allSearchFields"][] = "DayIs";
	$tdatadtrsummary[".allSearchFields"][] = "RestDay";
	$tdatadtrsummary[".allSearchFields"][] = "Department";
	$tdatadtrsummary[".allSearchFields"][] = "VLDay";
	$tdatadtrsummary[".allSearchFields"][] = "SLDay";
	$tdatadtrsummary[".allSearchFields"][] = "ELDay";
	$tdatadtrsummary[".allSearchFields"][] = "PLDay";
	$tdatadtrsummary[".allSearchFields"][] = "TrODay";
	$tdatadtrsummary[".allSearchFields"][] = "HolidayType";
	$tdatadtrsummary[".allSearchFields"][] = "Mispunched";
	$tdatadtrsummary[".allSearchFields"][] = "Holiday1stHalf";
	$tdatadtrsummary[".allSearchFields"][] = "Holiday2ndHalf";
	$tdatadtrsummary[".allSearchFields"][] = "TotLateMins";
	$tdatadtrsummary[".allSearchFields"][] = "LatePenaltyMins";
	$tdatadtrsummary[".allSearchFields"][] = "LateFixPenalty";
	$tdatadtrsummary[".allSearchFields"][] = "AfterBreakLogOut";
	$tdatadtrsummary[".allSearchFields"][] = "AfterBreakLog";
	$tdatadtrsummary[".allSearchFields"][] = "PreLogMins";
	$tdatadtrsummary[".allSearchFields"][] = "IncludeBreakLate";
	$tdatadtrsummary[".allSearchFields"][] = "GracePeriodMins";
	$tdatadtrsummary[".allSearchFields"][] = "BreakLateMins";
	$tdatadtrsummary[".allSearchFields"][] = "ANDOTMins";
	$tdatadtrsummary[".allSearchFields"][] = "RegNDOTHrs";
	$tdatadtrsummary[".allSearchFields"][] = "RHNDOTHrs";
	$tdatadtrsummary[".allSearchFields"][] = "SHNDOTHrs";
	$tdatadtrsummary[".allSearchFields"][] = "CHNDOTHrs";
	$tdatadtrsummary[".allSearchFields"][] = "RDNDOTHrs";
	$tdatadtrsummary[".allSearchFields"][] = "EmployeeID";
	$tdatadtrsummary[".allSearchFields"][] = "UserName";
	$tdatadtrsummary[".allSearchFields"][] = "Employer";
	$tdatadtrsummary[".allSearchFields"][] = "Division";
	$tdatadtrsummary[".allSearchFields"][] = "WageType";
	

$tdatadtrsummary[".googleLikeFields"] = array();
$tdatadtrsummary[".googleLikeFields"][] = "ScID";
$tdatadtrsummary[".googleLikeFields"][] = "SDate";
$tdatadtrsummary[".googleLikeFields"][] = "STimeIn";
$tdatadtrsummary[".googleLikeFields"][] = "STimeOut";
$tdatadtrsummary[".googleLikeFields"][] = "SchedType";
$tdatadtrsummary[".googleLikeFields"][] = "ApprovedOT";
$tdatadtrsummary[".googleLikeFields"][] = "AOTMins";
$tdatadtrsummary[".googleLikeFields"][] = "ApprovedNightDiff";
$tdatadtrsummary[".googleLikeFields"][] = "ANDiff";
$tdatadtrsummary[".googleLikeFields"][] = "MinsPerDay";
$tdatadtrsummary[".googleLikeFields"][] = "BreakMins";
$tdatadtrsummary[".googleLikeFields"][] = "Shift";
$tdatadtrsummary[".googleLikeFields"][] = "ApprovedRD";
$tdatadtrsummary[".googleLikeFields"][] = "RDMins";
$tdatadtrsummary[".googleLikeFields"][] = "LunchBreakFrom";
$tdatadtrsummary[".googleLikeFields"][] = "LunchBreakTo";
$tdatadtrsummary[".googleLikeFields"][] = "NDMealAllowancePerShift";
$tdatadtrsummary[".googleLikeFields"][] = "NDMinimumHrs";
$tdatadtrsummary[".googleLikeFields"][] = "TimeIn";
$tdatadtrsummary[".googleLikeFields"][] = "TimeOut";
$tdatadtrsummary[".googleLikeFields"][] = "DayIs";
$tdatadtrsummary[".googleLikeFields"][] = "RestDay";
$tdatadtrsummary[".googleLikeFields"][] = "Department";
$tdatadtrsummary[".googleLikeFields"][] = "VLDay";
$tdatadtrsummary[".googleLikeFields"][] = "SLDay";
$tdatadtrsummary[".googleLikeFields"][] = "ELDay";
$tdatadtrsummary[".googleLikeFields"][] = "PLDay";
$tdatadtrsummary[".googleLikeFields"][] = "TrODay";
$tdatadtrsummary[".googleLikeFields"][] = "HolidayType";
$tdatadtrsummary[".googleLikeFields"][] = "Mispunched";
$tdatadtrsummary[".googleLikeFields"][] = "Holiday1stHalf";
$tdatadtrsummary[".googleLikeFields"][] = "Holiday2ndHalf";
$tdatadtrsummary[".googleLikeFields"][] = "TotLateMins";
$tdatadtrsummary[".googleLikeFields"][] = "LatePenaltyMins";
$tdatadtrsummary[".googleLikeFields"][] = "LateFixPenalty";
$tdatadtrsummary[".googleLikeFields"][] = "AfterBreakLogOut";
$tdatadtrsummary[".googleLikeFields"][] = "AfterBreakLog";
$tdatadtrsummary[".googleLikeFields"][] = "PreLogMins";
$tdatadtrsummary[".googleLikeFields"][] = "IncludeBreakLate";
$tdatadtrsummary[".googleLikeFields"][] = "GracePeriodMins";
$tdatadtrsummary[".googleLikeFields"][] = "BreakLateMins";
$tdatadtrsummary[".googleLikeFields"][] = "ANDOTMins";
$tdatadtrsummary[".googleLikeFields"][] = "RegNDOTHrs";
$tdatadtrsummary[".googleLikeFields"][] = "RHNDOTHrs";
$tdatadtrsummary[".googleLikeFields"][] = "SHNDOTHrs";
$tdatadtrsummary[".googleLikeFields"][] = "CHNDOTHrs";
$tdatadtrsummary[".googleLikeFields"][] = "RDNDOTHrs";

$tdatadtrsummary[".panelSearchFields"] = array();
$tdatadtrsummary[".searchPanelOptions"] = array();
$tdatadtrsummary[".panelSearchFields"][] = "UserName";
	$tdatadtrsummary[".panelSearchFields"][] = "Employer";
	$tdatadtrsummary[".panelSearchFields"][] = "Division";
	
$tdatadtrsummary[".advSearchFields"] = array();
$tdatadtrsummary[".advSearchFields"][] = "ScID";
$tdatadtrsummary[".advSearchFields"][] = "SDate";
$tdatadtrsummary[".advSearchFields"][] = "STimeIn";
$tdatadtrsummary[".advSearchFields"][] = "STimeOut";
$tdatadtrsummary[".advSearchFields"][] = "SchedType";
$tdatadtrsummary[".advSearchFields"][] = "ApprovedOT";
$tdatadtrsummary[".advSearchFields"][] = "AOTMins";
$tdatadtrsummary[".advSearchFields"][] = "ApprovedNightDiff";
$tdatadtrsummary[".advSearchFields"][] = "ANDiff";
$tdatadtrsummary[".advSearchFields"][] = "MinsPerDay";
$tdatadtrsummary[".advSearchFields"][] = "BreakMins";
$tdatadtrsummary[".advSearchFields"][] = "Shift";
$tdatadtrsummary[".advSearchFields"][] = "ApprovedRD";
$tdatadtrsummary[".advSearchFields"][] = "RDMins";
$tdatadtrsummary[".advSearchFields"][] = "LunchBreakFrom";
$tdatadtrsummary[".advSearchFields"][] = "LunchBreakTo";
$tdatadtrsummary[".advSearchFields"][] = "NDMealAllowancePerShift";
$tdatadtrsummary[".advSearchFields"][] = "NDMinimumHrs";
$tdatadtrsummary[".advSearchFields"][] = "TimeIn";
$tdatadtrsummary[".advSearchFields"][] = "TimeOut";
$tdatadtrsummary[".advSearchFields"][] = "DayIs";
$tdatadtrsummary[".advSearchFields"][] = "RestDay";
$tdatadtrsummary[".advSearchFields"][] = "Department";
$tdatadtrsummary[".advSearchFields"][] = "VLDay";
$tdatadtrsummary[".advSearchFields"][] = "SLDay";
$tdatadtrsummary[".advSearchFields"][] = "ELDay";
$tdatadtrsummary[".advSearchFields"][] = "PLDay";
$tdatadtrsummary[".advSearchFields"][] = "TrODay";
$tdatadtrsummary[".advSearchFields"][] = "HolidayType";
$tdatadtrsummary[".advSearchFields"][] = "Mispunched";
$tdatadtrsummary[".advSearchFields"][] = "Holiday1stHalf";
$tdatadtrsummary[".advSearchFields"][] = "Holiday2ndHalf";
$tdatadtrsummary[".advSearchFields"][] = "TotLateMins";
$tdatadtrsummary[".advSearchFields"][] = "LatePenaltyMins";
$tdatadtrsummary[".advSearchFields"][] = "LateFixPenalty";
$tdatadtrsummary[".advSearchFields"][] = "AfterBreakLogOut";
$tdatadtrsummary[".advSearchFields"][] = "AfterBreakLog";
$tdatadtrsummary[".advSearchFields"][] = "PreLogMins";
$tdatadtrsummary[".advSearchFields"][] = "IncludeBreakLate";
$tdatadtrsummary[".advSearchFields"][] = "GracePeriodMins";
$tdatadtrsummary[".advSearchFields"][] = "BreakLateMins";
$tdatadtrsummary[".advSearchFields"][] = "ANDOTMins";
$tdatadtrsummary[".advSearchFields"][] = "RegNDOTHrs";
$tdatadtrsummary[".advSearchFields"][] = "RHNDOTHrs";
$tdatadtrsummary[".advSearchFields"][] = "SHNDOTHrs";
$tdatadtrsummary[".advSearchFields"][] = "CHNDOTHrs";
$tdatadtrsummary[".advSearchFields"][] = "RDNDOTHrs";
$tdatadtrsummary[".advSearchFields"][] = "EmployeeID";
$tdatadtrsummary[".advSearchFields"][] = "UserName";
$tdatadtrsummary[".advSearchFields"][] = "Employer";
$tdatadtrsummary[".advSearchFields"][] = "Division";
$tdatadtrsummary[".advSearchFields"][] = "WageType";

$tdatadtrsummary[".tableType"] = "list";

$tdatadtrsummary[".printerPageOrientation"] = 0;
$tdatadtrsummary[".nPrinterPageScale"] = 100;

$tdatadtrsummary[".nPrinterSplitRecords"] = 40;

$tdatadtrsummary[".nPrinterPDFSplitRecords"] = 40;



$tdatadtrsummary[".geocodingEnabled"] = false;





$tdatadtrsummary[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatadtrsummary[".pageSize"] = 20;

$tdatadtrsummary[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY indschedule.ScID";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadtrsummary[".strOrderBy"] = $tstrOrderBy;

$tdatadtrsummary[".orderindexes"] = array();
	$tdatadtrsummary[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "indschedule.ScID");


$tdatadtrsummary[".sqlHead"] = "SELECT indschedule.ScID,  indschedule.UserName,  indschedule.SDate,  indschedule.STimeIn,  indschedule.STimeOut,  indschedule.SchedType,  indschedule.ApprovedOT,  indschedule.AOTMins,  indschedule.WageType,  indschedule.ApprovedNightDiff,  indschedule.ANDiff,  indschedule.EmployeeID,  indschedule.MinsPerDay,  indschedule.BreakMins,  indschedule.Shift,  indschedule.ApprovedRD,  indschedule.RDMins,  indschedule.LunchBreakFrom,  indschedule.LunchBreakTo,  indschedule.NDMealAllowancePerShift,  indschedule.NDMinimumHrs,  indschedule.NDMealAllowance,  indschedule.Division,  indschedule.TimeIn,  indschedule.TimeOut,  indschedule.DayIs,  indschedule.RestDay,  indschedule.Department,  indschedule.RegWD,  indschedule.DWork,  indschedule.Absent,  indschedule.LateMins,  indschedule.UndertimeMins,  indschedule.RHolidayHrs,  indschedule.SHolidayHrs,  indschedule.CHolidayHrs,  indschedule.ExcessHrs,  indschedule.RegOTHrs,  indschedule.RHOTHrs,  indschedule.SHOTHrs,  indschedule.CHOTHrs,  indschedule.RDOTHrs,  indschedule.NDHrs,  indschedule.RDHrs,  indschedule.RegNDHrs,  indschedule.RHNDHrs,  indschedule.SHNDHrs,  indschedule.CHNDHrs,  indschedule.RDNDHrs,  indschedule.VLDay,  indschedule.SLDay,  indschedule.ELDay,  indschedule.PLDay,  indschedule.TrODay,  indschedule.HolidayType,  indschedule.Mispunched,  indschedule.Holiday1stHalf,  indschedule.Holiday2ndHalf,  indschedule.TotLateMins,  indschedule.LatePenaltyMins,  indschedule.Employer,  indschedule.LateFixPenalty,  indschedule.AfterBreakLogOut,  indschedule.AfterBreakLog,  indschedule.PreLogMins,  indschedule.IncludeBreakLate,  indschedule.GracePeriodMins,  indschedule.BreakLateMins,  indschedule.ANDOTMins,  indschedule.RegNDOTHrs,  indschedule.RHNDOTHrs,  indschedule.SHNDOTHrs,  indschedule.CHNDOTHrs,  indschedule.RDNDOTHrs";
$tdatadtrsummary[".sqlFrom"] = "FROM dtrsummary  , indschedule";
$tdatadtrsummary[".sqlWhereExpr"] = "";
$tdatadtrsummary[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadtrsummary[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadtrsummary[".arrGroupsPerPage"] = $arrGPP;

$tdatadtrsummary[".highlightSearchResults"] = true;

$tableKeysdtrsummary = array();
$tdatadtrsummary[".Keys"] = $tableKeysdtrsummary;

$tdatadtrsummary[".listFields"] = array();
$tdatadtrsummary[".listFields"][] = "ScID";
$tdatadtrsummary[".listFields"][] = "SDate";
$tdatadtrsummary[".listFields"][] = "STimeIn";
$tdatadtrsummary[".listFields"][] = "STimeOut";
$tdatadtrsummary[".listFields"][] = "SchedType";
$tdatadtrsummary[".listFields"][] = "ApprovedOT";
$tdatadtrsummary[".listFields"][] = "AOTMins";
$tdatadtrsummary[".listFields"][] = "ApprovedNightDiff";
$tdatadtrsummary[".listFields"][] = "ANDiff";
$tdatadtrsummary[".listFields"][] = "MinsPerDay";
$tdatadtrsummary[".listFields"][] = "BreakMins";
$tdatadtrsummary[".listFields"][] = "Shift";
$tdatadtrsummary[".listFields"][] = "ApprovedRD";
$tdatadtrsummary[".listFields"][] = "RDMins";
$tdatadtrsummary[".listFields"][] = "LunchBreakFrom";
$tdatadtrsummary[".listFields"][] = "LunchBreakTo";
$tdatadtrsummary[".listFields"][] = "NDMealAllowancePerShift";
$tdatadtrsummary[".listFields"][] = "NDMinimumHrs";
$tdatadtrsummary[".listFields"][] = "TimeIn";
$tdatadtrsummary[".listFields"][] = "TimeOut";
$tdatadtrsummary[".listFields"][] = "DayIs";
$tdatadtrsummary[".listFields"][] = "RestDay";
$tdatadtrsummary[".listFields"][] = "Department";
$tdatadtrsummary[".listFields"][] = "VLDay";
$tdatadtrsummary[".listFields"][] = "SLDay";
$tdatadtrsummary[".listFields"][] = "ELDay";
$tdatadtrsummary[".listFields"][] = "PLDay";
$tdatadtrsummary[".listFields"][] = "TrODay";
$tdatadtrsummary[".listFields"][] = "HolidayType";
$tdatadtrsummary[".listFields"][] = "Mispunched";
$tdatadtrsummary[".listFields"][] = "Holiday1stHalf";
$tdatadtrsummary[".listFields"][] = "Holiday2ndHalf";
$tdatadtrsummary[".listFields"][] = "TotLateMins";
$tdatadtrsummary[".listFields"][] = "LatePenaltyMins";
$tdatadtrsummary[".listFields"][] = "LateFixPenalty";
$tdatadtrsummary[".listFields"][] = "AfterBreakLogOut";
$tdatadtrsummary[".listFields"][] = "AfterBreakLog";
$tdatadtrsummary[".listFields"][] = "PreLogMins";
$tdatadtrsummary[".listFields"][] = "IncludeBreakLate";
$tdatadtrsummary[".listFields"][] = "GracePeriodMins";
$tdatadtrsummary[".listFields"][] = "BreakLateMins";
$tdatadtrsummary[".listFields"][] = "ANDOTMins";
$tdatadtrsummary[".listFields"][] = "RegNDOTHrs";
$tdatadtrsummary[".listFields"][] = "RHNDOTHrs";
$tdatadtrsummary[".listFields"][] = "SHNDOTHrs";
$tdatadtrsummary[".listFields"][] = "CHNDOTHrs";
$tdatadtrsummary[".listFields"][] = "RDNDOTHrs";
$tdatadtrsummary[".listFields"][] = "EmployeeID";
$tdatadtrsummary[".listFields"][] = "UserName";
$tdatadtrsummary[".listFields"][] = "Employer";
$tdatadtrsummary[".listFields"][] = "Division";
$tdatadtrsummary[".listFields"][] = "WageType";
$tdatadtrsummary[".listFields"][] = "RegWD";
$tdatadtrsummary[".listFields"][] = "DWork";
$tdatadtrsummary[".listFields"][] = "Absent";
$tdatadtrsummary[".listFields"][] = "LateMins";
$tdatadtrsummary[".listFields"][] = "UndertimeMins";
$tdatadtrsummary[".listFields"][] = "RHolidayHrs";
$tdatadtrsummary[".listFields"][] = "SHolidayHrs";
$tdatadtrsummary[".listFields"][] = "CHolidayHrs";
$tdatadtrsummary[".listFields"][] = "ExcessHrs";
$tdatadtrsummary[".listFields"][] = "RegOTHrs";
$tdatadtrsummary[".listFields"][] = "RHOTHrs";
$tdatadtrsummary[".listFields"][] = "SHOTHrs";
$tdatadtrsummary[".listFields"][] = "CHOTHrs";
$tdatadtrsummary[".listFields"][] = "RDOTHrs";
$tdatadtrsummary[".listFields"][] = "NDHrs";
$tdatadtrsummary[".listFields"][] = "RDHrs";
$tdatadtrsummary[".listFields"][] = "RegNDHrs";
$tdatadtrsummary[".listFields"][] = "RHNDHrs";
$tdatadtrsummary[".listFields"][] = "SHNDHrs";
$tdatadtrsummary[".listFields"][] = "CHNDHrs";
$tdatadtrsummary[".listFields"][] = "RDNDHrs";
$tdatadtrsummary[".listFields"][] = "NDMealAllowance";

$tdatadtrsummary[".hideMobileList"] = array();


$tdatadtrsummary[".viewFields"] = array();

$tdatadtrsummary[".addFields"] = array();

$tdatadtrsummary[".masterListFields"] = array();
$tdatadtrsummary[".masterListFields"][] = "ScID";
$tdatadtrsummary[".masterListFields"][] = "SDate";
$tdatadtrsummary[".masterListFields"][] = "STimeIn";
$tdatadtrsummary[".masterListFields"][] = "STimeOut";
$tdatadtrsummary[".masterListFields"][] = "SchedType";
$tdatadtrsummary[".masterListFields"][] = "ApprovedOT";
$tdatadtrsummary[".masterListFields"][] = "AOTMins";
$tdatadtrsummary[".masterListFields"][] = "ApprovedNightDiff";
$tdatadtrsummary[".masterListFields"][] = "ANDiff";
$tdatadtrsummary[".masterListFields"][] = "MinsPerDay";
$tdatadtrsummary[".masterListFields"][] = "BreakMins";
$tdatadtrsummary[".masterListFields"][] = "Shift";
$tdatadtrsummary[".masterListFields"][] = "ApprovedRD";
$tdatadtrsummary[".masterListFields"][] = "RDMins";
$tdatadtrsummary[".masterListFields"][] = "LunchBreakFrom";
$tdatadtrsummary[".masterListFields"][] = "LunchBreakTo";
$tdatadtrsummary[".masterListFields"][] = "NDMealAllowancePerShift";
$tdatadtrsummary[".masterListFields"][] = "NDMinimumHrs";
$tdatadtrsummary[".masterListFields"][] = "TimeIn";
$tdatadtrsummary[".masterListFields"][] = "TimeOut";
$tdatadtrsummary[".masterListFields"][] = "DayIs";
$tdatadtrsummary[".masterListFields"][] = "RestDay";
$tdatadtrsummary[".masterListFields"][] = "Department";
$tdatadtrsummary[".masterListFields"][] = "VLDay";
$tdatadtrsummary[".masterListFields"][] = "SLDay";
$tdatadtrsummary[".masterListFields"][] = "ELDay";
$tdatadtrsummary[".masterListFields"][] = "PLDay";
$tdatadtrsummary[".masterListFields"][] = "TrODay";
$tdatadtrsummary[".masterListFields"][] = "HolidayType";
$tdatadtrsummary[".masterListFields"][] = "Mispunched";
$tdatadtrsummary[".masterListFields"][] = "Holiday1stHalf";
$tdatadtrsummary[".masterListFields"][] = "Holiday2ndHalf";
$tdatadtrsummary[".masterListFields"][] = "TotLateMins";
$tdatadtrsummary[".masterListFields"][] = "LatePenaltyMins";
$tdatadtrsummary[".masterListFields"][] = "LateFixPenalty";
$tdatadtrsummary[".masterListFields"][] = "AfterBreakLogOut";
$tdatadtrsummary[".masterListFields"][] = "AfterBreakLog";
$tdatadtrsummary[".masterListFields"][] = "PreLogMins";
$tdatadtrsummary[".masterListFields"][] = "IncludeBreakLate";
$tdatadtrsummary[".masterListFields"][] = "GracePeriodMins";
$tdatadtrsummary[".masterListFields"][] = "BreakLateMins";
$tdatadtrsummary[".masterListFields"][] = "ANDOTMins";
$tdatadtrsummary[".masterListFields"][] = "RegNDOTHrs";
$tdatadtrsummary[".masterListFields"][] = "RHNDOTHrs";
$tdatadtrsummary[".masterListFields"][] = "SHNDOTHrs";
$tdatadtrsummary[".masterListFields"][] = "CHNDOTHrs";
$tdatadtrsummary[".masterListFields"][] = "RDNDOTHrs";
$tdatadtrsummary[".masterListFields"][] = "EmployeeID";
$tdatadtrsummary[".masterListFields"][] = "UserName";
$tdatadtrsummary[".masterListFields"][] = "Employer";
$tdatadtrsummary[".masterListFields"][] = "Division";
$tdatadtrsummary[".masterListFields"][] = "WageType";
$tdatadtrsummary[".masterListFields"][] = "RegWD";
$tdatadtrsummary[".masterListFields"][] = "DWork";
$tdatadtrsummary[".masterListFields"][] = "Absent";
$tdatadtrsummary[".masterListFields"][] = "LateMins";
$tdatadtrsummary[".masterListFields"][] = "UndertimeMins";
$tdatadtrsummary[".masterListFields"][] = "RHolidayHrs";
$tdatadtrsummary[".masterListFields"][] = "SHolidayHrs";
$tdatadtrsummary[".masterListFields"][] = "CHolidayHrs";
$tdatadtrsummary[".masterListFields"][] = "ExcessHrs";
$tdatadtrsummary[".masterListFields"][] = "RegOTHrs";
$tdatadtrsummary[".masterListFields"][] = "RHOTHrs";
$tdatadtrsummary[".masterListFields"][] = "SHOTHrs";
$tdatadtrsummary[".masterListFields"][] = "CHOTHrs";
$tdatadtrsummary[".masterListFields"][] = "RDOTHrs";
$tdatadtrsummary[".masterListFields"][] = "NDHrs";
$tdatadtrsummary[".masterListFields"][] = "RDHrs";
$tdatadtrsummary[".masterListFields"][] = "RegNDHrs";
$tdatadtrsummary[".masterListFields"][] = "RHNDHrs";
$tdatadtrsummary[".masterListFields"][] = "SHNDHrs";
$tdatadtrsummary[".masterListFields"][] = "CHNDHrs";
$tdatadtrsummary[".masterListFields"][] = "RDNDHrs";
$tdatadtrsummary[".masterListFields"][] = "NDMealAllowance";

$tdatadtrsummary[".inlineAddFields"] = array();

$tdatadtrsummary[".editFields"] = array();

$tdatadtrsummary[".inlineEditFields"] = array();

$tdatadtrsummary[".updateSelectedFields"] = array();


$tdatadtrsummary[".exportFields"] = array();
$tdatadtrsummary[".exportFields"][] = "ScID";
$tdatadtrsummary[".exportFields"][] = "SDate";
$tdatadtrsummary[".exportFields"][] = "STimeIn";
$tdatadtrsummary[".exportFields"][] = "STimeOut";
$tdatadtrsummary[".exportFields"][] = "SchedType";
$tdatadtrsummary[".exportFields"][] = "ApprovedOT";
$tdatadtrsummary[".exportFields"][] = "AOTMins";
$tdatadtrsummary[".exportFields"][] = "ApprovedNightDiff";
$tdatadtrsummary[".exportFields"][] = "ANDiff";
$tdatadtrsummary[".exportFields"][] = "MinsPerDay";
$tdatadtrsummary[".exportFields"][] = "BreakMins";
$tdatadtrsummary[".exportFields"][] = "Shift";
$tdatadtrsummary[".exportFields"][] = "ApprovedRD";
$tdatadtrsummary[".exportFields"][] = "RDMins";
$tdatadtrsummary[".exportFields"][] = "LunchBreakFrom";
$tdatadtrsummary[".exportFields"][] = "LunchBreakTo";
$tdatadtrsummary[".exportFields"][] = "NDMealAllowancePerShift";
$tdatadtrsummary[".exportFields"][] = "NDMinimumHrs";
$tdatadtrsummary[".exportFields"][] = "TimeIn";
$tdatadtrsummary[".exportFields"][] = "TimeOut";
$tdatadtrsummary[".exportFields"][] = "DayIs";
$tdatadtrsummary[".exportFields"][] = "RestDay";
$tdatadtrsummary[".exportFields"][] = "Department";
$tdatadtrsummary[".exportFields"][] = "VLDay";
$tdatadtrsummary[".exportFields"][] = "SLDay";
$tdatadtrsummary[".exportFields"][] = "ELDay";
$tdatadtrsummary[".exportFields"][] = "PLDay";
$tdatadtrsummary[".exportFields"][] = "TrODay";
$tdatadtrsummary[".exportFields"][] = "HolidayType";
$tdatadtrsummary[".exportFields"][] = "Mispunched";
$tdatadtrsummary[".exportFields"][] = "Holiday1stHalf";
$tdatadtrsummary[".exportFields"][] = "Holiday2ndHalf";
$tdatadtrsummary[".exportFields"][] = "TotLateMins";
$tdatadtrsummary[".exportFields"][] = "LatePenaltyMins";
$tdatadtrsummary[".exportFields"][] = "LateFixPenalty";
$tdatadtrsummary[".exportFields"][] = "AfterBreakLogOut";
$tdatadtrsummary[".exportFields"][] = "AfterBreakLog";
$tdatadtrsummary[".exportFields"][] = "PreLogMins";
$tdatadtrsummary[".exportFields"][] = "IncludeBreakLate";
$tdatadtrsummary[".exportFields"][] = "GracePeriodMins";
$tdatadtrsummary[".exportFields"][] = "BreakLateMins";
$tdatadtrsummary[".exportFields"][] = "ANDOTMins";
$tdatadtrsummary[".exportFields"][] = "RegNDOTHrs";
$tdatadtrsummary[".exportFields"][] = "RHNDOTHrs";
$tdatadtrsummary[".exportFields"][] = "SHNDOTHrs";
$tdatadtrsummary[".exportFields"][] = "CHNDOTHrs";
$tdatadtrsummary[".exportFields"][] = "RDNDOTHrs";
$tdatadtrsummary[".exportFields"][] = "EmployeeID";
$tdatadtrsummary[".exportFields"][] = "UserName";
$tdatadtrsummary[".exportFields"][] = "Employer";
$tdatadtrsummary[".exportFields"][] = "Division";
$tdatadtrsummary[".exportFields"][] = "WageType";
$tdatadtrsummary[".exportFields"][] = "RegWD";
$tdatadtrsummary[".exportFields"][] = "DWork";
$tdatadtrsummary[".exportFields"][] = "Absent";
$tdatadtrsummary[".exportFields"][] = "LateMins";
$tdatadtrsummary[".exportFields"][] = "UndertimeMins";
$tdatadtrsummary[".exportFields"][] = "RHolidayHrs";
$tdatadtrsummary[".exportFields"][] = "SHolidayHrs";
$tdatadtrsummary[".exportFields"][] = "CHolidayHrs";
$tdatadtrsummary[".exportFields"][] = "ExcessHrs";
$tdatadtrsummary[".exportFields"][] = "RegOTHrs";
$tdatadtrsummary[".exportFields"][] = "RHOTHrs";
$tdatadtrsummary[".exportFields"][] = "SHOTHrs";
$tdatadtrsummary[".exportFields"][] = "CHOTHrs";
$tdatadtrsummary[".exportFields"][] = "RDOTHrs";
$tdatadtrsummary[".exportFields"][] = "NDHrs";
$tdatadtrsummary[".exportFields"][] = "RDHrs";
$tdatadtrsummary[".exportFields"][] = "RegNDHrs";
$tdatadtrsummary[".exportFields"][] = "RHNDHrs";
$tdatadtrsummary[".exportFields"][] = "SHNDHrs";
$tdatadtrsummary[".exportFields"][] = "CHNDHrs";
$tdatadtrsummary[".exportFields"][] = "RDNDHrs";
$tdatadtrsummary[".exportFields"][] = "NDMealAllowance";

$tdatadtrsummary[".importFields"] = array();

$tdatadtrsummary[".printFields"] = array();
$tdatadtrsummary[".printFields"][] = "ScID";
$tdatadtrsummary[".printFields"][] = "SDate";
$tdatadtrsummary[".printFields"][] = "STimeIn";
$tdatadtrsummary[".printFields"][] = "STimeOut";
$tdatadtrsummary[".printFields"][] = "SchedType";
$tdatadtrsummary[".printFields"][] = "ApprovedOT";
$tdatadtrsummary[".printFields"][] = "AOTMins";
$tdatadtrsummary[".printFields"][] = "ApprovedNightDiff";
$tdatadtrsummary[".printFields"][] = "ANDiff";
$tdatadtrsummary[".printFields"][] = "MinsPerDay";
$tdatadtrsummary[".printFields"][] = "BreakMins";
$tdatadtrsummary[".printFields"][] = "Shift";
$tdatadtrsummary[".printFields"][] = "ApprovedRD";
$tdatadtrsummary[".printFields"][] = "RDMins";
$tdatadtrsummary[".printFields"][] = "LunchBreakFrom";
$tdatadtrsummary[".printFields"][] = "LunchBreakTo";
$tdatadtrsummary[".printFields"][] = "NDMealAllowancePerShift";
$tdatadtrsummary[".printFields"][] = "NDMinimumHrs";
$tdatadtrsummary[".printFields"][] = "TimeIn";
$tdatadtrsummary[".printFields"][] = "TimeOut";
$tdatadtrsummary[".printFields"][] = "DayIs";
$tdatadtrsummary[".printFields"][] = "RestDay";
$tdatadtrsummary[".printFields"][] = "Department";
$tdatadtrsummary[".printFields"][] = "VLDay";
$tdatadtrsummary[".printFields"][] = "SLDay";
$tdatadtrsummary[".printFields"][] = "ELDay";
$tdatadtrsummary[".printFields"][] = "PLDay";
$tdatadtrsummary[".printFields"][] = "TrODay";
$tdatadtrsummary[".printFields"][] = "HolidayType";
$tdatadtrsummary[".printFields"][] = "Mispunched";
$tdatadtrsummary[".printFields"][] = "Holiday1stHalf";
$tdatadtrsummary[".printFields"][] = "Holiday2ndHalf";
$tdatadtrsummary[".printFields"][] = "TotLateMins";
$tdatadtrsummary[".printFields"][] = "LatePenaltyMins";
$tdatadtrsummary[".printFields"][] = "LateFixPenalty";
$tdatadtrsummary[".printFields"][] = "AfterBreakLogOut";
$tdatadtrsummary[".printFields"][] = "AfterBreakLog";
$tdatadtrsummary[".printFields"][] = "PreLogMins";
$tdatadtrsummary[".printFields"][] = "IncludeBreakLate";
$tdatadtrsummary[".printFields"][] = "GracePeriodMins";
$tdatadtrsummary[".printFields"][] = "BreakLateMins";
$tdatadtrsummary[".printFields"][] = "ANDOTMins";
$tdatadtrsummary[".printFields"][] = "RegNDOTHrs";
$tdatadtrsummary[".printFields"][] = "RHNDOTHrs";
$tdatadtrsummary[".printFields"][] = "SHNDOTHrs";
$tdatadtrsummary[".printFields"][] = "CHNDOTHrs";
$tdatadtrsummary[".printFields"][] = "RDNDOTHrs";
$tdatadtrsummary[".printFields"][] = "EmployeeID";
$tdatadtrsummary[".printFields"][] = "UserName";
$tdatadtrsummary[".printFields"][] = "Employer";
$tdatadtrsummary[".printFields"][] = "Division";
$tdatadtrsummary[".printFields"][] = "WageType";
$tdatadtrsummary[".printFields"][] = "RegWD";
$tdatadtrsummary[".printFields"][] = "DWork";
$tdatadtrsummary[".printFields"][] = "Absent";
$tdatadtrsummary[".printFields"][] = "LateMins";
$tdatadtrsummary[".printFields"][] = "UndertimeMins";
$tdatadtrsummary[".printFields"][] = "RHolidayHrs";
$tdatadtrsummary[".printFields"][] = "SHolidayHrs";
$tdatadtrsummary[".printFields"][] = "CHolidayHrs";
$tdatadtrsummary[".printFields"][] = "ExcessHrs";
$tdatadtrsummary[".printFields"][] = "RegOTHrs";
$tdatadtrsummary[".printFields"][] = "RHOTHrs";
$tdatadtrsummary[".printFields"][] = "SHOTHrs";
$tdatadtrsummary[".printFields"][] = "CHOTHrs";
$tdatadtrsummary[".printFields"][] = "RDOTHrs";
$tdatadtrsummary[".printFields"][] = "NDHrs";
$tdatadtrsummary[".printFields"][] = "RDHrs";
$tdatadtrsummary[".printFields"][] = "RegNDHrs";
$tdatadtrsummary[".printFields"][] = "RHNDHrs";
$tdatadtrsummary[".printFields"][] = "SHNDHrs";
$tdatadtrsummary[".printFields"][] = "CHNDHrs";
$tdatadtrsummary[".printFields"][] = "RDNDHrs";
$tdatadtrsummary[".printFields"][] = "NDMealAllowance";


//	ScID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ScID";
	$fdata["GoodName"] = "ScID";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","ScID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ScID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.ScID";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["ScID"] = $fdata;
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","UserName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "UserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.UserName";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["UserName"] = $fdata;
//	SDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SDate";
	$fdata["GoodName"] = "SDate";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","SDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.SDate";

	
	
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatadtrsummary["SDate"] = $fdata;
//	STimeIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "STimeIn";
	$fdata["GoodName"] = "STimeIn";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","STimeIn");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "STimeIn";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.STimeIn";

	
	
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatadtrsummary["STimeIn"] = $fdata;
//	STimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "STimeOut";
	$fdata["GoodName"] = "STimeOut";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","STimeOut");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "STimeOut";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.STimeOut";

	
	
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatadtrsummary["STimeOut"] = $fdata;
//	SchedType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SchedType";
	$fdata["GoodName"] = "SchedType";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","SchedType");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SchedType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.SchedType";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["SchedType"] = $fdata;
//	ApprovedOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ApprovedOT";
	$fdata["GoodName"] = "ApprovedOT";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","ApprovedOT");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ApprovedOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.ApprovedOT";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["ApprovedOT"] = $fdata;
//	AOTMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "AOTMins";
	$fdata["GoodName"] = "AOTMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","AOTMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AOTMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.AOTMins";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["AOTMins"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","WageType");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "WageType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.WageType";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["WageType"] = $fdata;
//	ApprovedNightDiff
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ApprovedNightDiff";
	$fdata["GoodName"] = "ApprovedNightDiff";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","ApprovedNightDiff");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ApprovedNightDiff";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.ApprovedNightDiff";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["ApprovedNightDiff"] = $fdata;
//	ANDiff
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ANDiff";
	$fdata["GoodName"] = "ANDiff";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","ANDiff");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ANDiff";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.ANDiff";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["ANDiff"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","EmployeeID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EmployeeID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.EmployeeID";

	
	
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




	$tdatadtrsummary["EmployeeID"] = $fdata;
//	MinsPerDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "MinsPerDay";
	$fdata["GoodName"] = "MinsPerDay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","MinsPerDay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MinsPerDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.MinsPerDay";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["MinsPerDay"] = $fdata;
//	BreakMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "BreakMins";
	$fdata["GoodName"] = "BreakMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","BreakMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BreakMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.BreakMins";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["BreakMins"] = $fdata;
//	Shift
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Shift";
	$fdata["GoodName"] = "Shift";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","Shift");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Shift";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.Shift";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["Shift"] = $fdata;
//	ApprovedRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ApprovedRD";
	$fdata["GoodName"] = "ApprovedRD";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","ApprovedRD");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ApprovedRD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.ApprovedRD";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["ApprovedRD"] = $fdata;
//	RDMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "RDMins";
	$fdata["GoodName"] = "RDMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","RDMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RDMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.RDMins";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["RDMins"] = $fdata;
//	LunchBreakFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "LunchBreakFrom";
	$fdata["GoodName"] = "LunchBreakFrom";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","LunchBreakFrom");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LunchBreakFrom";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.LunchBreakFrom";

	
	
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatadtrsummary["LunchBreakFrom"] = $fdata;
//	LunchBreakTo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "LunchBreakTo";
	$fdata["GoodName"] = "LunchBreakTo";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","LunchBreakTo");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LunchBreakTo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.LunchBreakTo";

	
	
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatadtrsummary["LunchBreakTo"] = $fdata;
//	NDMealAllowancePerShift
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "NDMealAllowancePerShift";
	$fdata["GoodName"] = "NDMealAllowancePerShift";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","NDMealAllowancePerShift");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NDMealAllowancePerShift";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.NDMealAllowancePerShift";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["NDMealAllowancePerShift"] = $fdata;
//	NDMinimumHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "NDMinimumHrs";
	$fdata["GoodName"] = "NDMinimumHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","NDMinimumHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NDMinimumHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.NDMinimumHrs";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["NDMinimumHrs"] = $fdata;
//	NDMealAllowance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "NDMealAllowance";
	$fdata["GoodName"] = "NDMealAllowance";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","NDMealAllowance");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NDMealAllowance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.NDMealAllowance";

	
	
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








	$tdatadtrsummary["NDMealAllowance"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","Division");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Division";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.Division";

	
	
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




	$tdatadtrsummary["Division"] = $fdata;
//	TimeIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "TimeIn";
	$fdata["GoodName"] = "TimeIn";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","TimeIn");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TimeIn";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.TimeIn";

	
	
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

		$edata["ShowTime"] = true;

	
		
	


		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatadtrsummary["TimeIn"] = $fdata;
//	TimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "TimeOut";
	$fdata["GoodName"] = "TimeOut";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","TimeOut");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TimeOut";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.TimeOut";

	
	
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

		$edata["ShowTime"] = true;

	
		
	


		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatadtrsummary["TimeOut"] = $fdata;
//	DayIs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "DayIs";
	$fdata["GoodName"] = "DayIs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","DayIs");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DayIs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.DayIs";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["DayIs"] = $fdata;
//	RestDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "RestDay";
	$fdata["GoodName"] = "RestDay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","RestDay");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RestDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.RestDay";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["RestDay"] = $fdata;
//	Department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Department";
	$fdata["GoodName"] = "Department";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","Department");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Department";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.Department";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["Department"] = $fdata;
//	RegWD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "RegWD";
	$fdata["GoodName"] = "RegWD";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","RegWD");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RegWD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.RegWD";

	
	
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








	$tdatadtrsummary["RegWD"] = $fdata;
//	DWork
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "DWork";
	$fdata["GoodName"] = "DWork";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","DWork");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DWork";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.DWork";

	
	
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








	$tdatadtrsummary["DWork"] = $fdata;
//	Absent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Absent";
	$fdata["GoodName"] = "Absent";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","Absent");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Absent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.Absent";

	
	
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








	$tdatadtrsummary["Absent"] = $fdata;
//	LateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "LateMins";
	$fdata["GoodName"] = "LateMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","LateMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LateMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.LateMins";

	
	
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








	$tdatadtrsummary["LateMins"] = $fdata;
//	UndertimeMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "UndertimeMins";
	$fdata["GoodName"] = "UndertimeMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","UndertimeMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "UndertimeMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.UndertimeMins";

	
	
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








	$tdatadtrsummary["UndertimeMins"] = $fdata;
//	RHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "RHolidayHrs";
	$fdata["GoodName"] = "RHolidayHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","RHolidayHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHolidayHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.RHolidayHrs";

	
	
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








	$tdatadtrsummary["RHolidayHrs"] = $fdata;
//	SHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "SHolidayHrs";
	$fdata["GoodName"] = "SHolidayHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","SHolidayHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHolidayHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.SHolidayHrs";

	
	
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








	$tdatadtrsummary["SHolidayHrs"] = $fdata;
//	CHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "CHolidayHrs";
	$fdata["GoodName"] = "CHolidayHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","CHolidayHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CHolidayHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.CHolidayHrs";

	
	
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








	$tdatadtrsummary["CHolidayHrs"] = $fdata;
//	ExcessHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "ExcessHrs";
	$fdata["GoodName"] = "ExcessHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","ExcessHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ExcessHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.ExcessHrs";

	
	
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








	$tdatadtrsummary["ExcessHrs"] = $fdata;
//	RegOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "RegOTHrs";
	$fdata["GoodName"] = "RegOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","RegOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RegOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.RegOTHrs";

	
	
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








	$tdatadtrsummary["RegOTHrs"] = $fdata;
//	RHOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "RHOTHrs";
	$fdata["GoodName"] = "RHOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","RHOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.RHOTHrs";

	
	
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








	$tdatadtrsummary["RHOTHrs"] = $fdata;
//	SHOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "SHOTHrs";
	$fdata["GoodName"] = "SHOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","SHOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.SHOTHrs";

	
	
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








	$tdatadtrsummary["SHOTHrs"] = $fdata;
//	CHOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "CHOTHrs";
	$fdata["GoodName"] = "CHOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","CHOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CHOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.CHOTHrs";

	
	
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








	$tdatadtrsummary["CHOTHrs"] = $fdata;
//	RDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "RDOTHrs";
	$fdata["GoodName"] = "RDOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","RDOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RDOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.RDOTHrs";

	
	
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








	$tdatadtrsummary["RDOTHrs"] = $fdata;
//	NDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "NDHrs";
	$fdata["GoodName"] = "NDHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","NDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NDHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.NDHrs";

	
	
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








	$tdatadtrsummary["NDHrs"] = $fdata;
//	RDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "RDHrs";
	$fdata["GoodName"] = "RDHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","RDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RDHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.RDHrs";

	
	
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








	$tdatadtrsummary["RDHrs"] = $fdata;
//	RegNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "RegNDHrs";
	$fdata["GoodName"] = "RegNDHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","RegNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RegNDHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.RegNDHrs";

	
	
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








	$tdatadtrsummary["RegNDHrs"] = $fdata;
//	RHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "RHNDHrs";
	$fdata["GoodName"] = "RHNDHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","RHNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHNDHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.RHNDHrs";

	
	
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








	$tdatadtrsummary["RHNDHrs"] = $fdata;
//	SHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "SHNDHrs";
	$fdata["GoodName"] = "SHNDHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","SHNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHNDHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.SHNDHrs";

	
	
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








	$tdatadtrsummary["SHNDHrs"] = $fdata;
//	CHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "CHNDHrs";
	$fdata["GoodName"] = "CHNDHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","CHNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CHNDHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.CHNDHrs";

	
	
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








	$tdatadtrsummary["CHNDHrs"] = $fdata;
//	RDNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "RDNDHrs";
	$fdata["GoodName"] = "RDNDHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","RDNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RDNDHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.RDNDHrs";

	
	
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








	$tdatadtrsummary["RDNDHrs"] = $fdata;
//	VLDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "VLDay";
	$fdata["GoodName"] = "VLDay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","VLDay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "VLDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.VLDay";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["VLDay"] = $fdata;
//	SLDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "SLDay";
	$fdata["GoodName"] = "SLDay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","SLDay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SLDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.SLDay";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["SLDay"] = $fdata;
//	ELDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "ELDay";
	$fdata["GoodName"] = "ELDay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","ELDay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ELDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.ELDay";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["ELDay"] = $fdata;
//	PLDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "PLDay";
	$fdata["GoodName"] = "PLDay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","PLDay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PLDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.PLDay";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["PLDay"] = $fdata;
//	TrODay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "TrODay";
	$fdata["GoodName"] = "TrODay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","TrODay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TrODay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.TrODay";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["TrODay"] = $fdata;
//	HolidayType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "HolidayType";
	$fdata["GoodName"] = "HolidayType";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","HolidayType");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "HolidayType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.HolidayType";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["HolidayType"] = $fdata;
//	Mispunched
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "Mispunched";
	$fdata["GoodName"] = "Mispunched";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","Mispunched");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Mispunched";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.Mispunched";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["Mispunched"] = $fdata;
//	Holiday1stHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "Holiday1stHalf";
	$fdata["GoodName"] = "Holiday1stHalf";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","Holiday1stHalf");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Holiday1stHalf";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.Holiday1stHalf";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["Holiday1stHalf"] = $fdata;
//	Holiday2ndHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "Holiday2ndHalf";
	$fdata["GoodName"] = "Holiday2ndHalf";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","Holiday2ndHalf");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Holiday2ndHalf";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.Holiday2ndHalf";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["Holiday2ndHalf"] = $fdata;
//	TotLateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "TotLateMins";
	$fdata["GoodName"] = "TotLateMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","TotLateMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TotLateMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.TotLateMins";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["TotLateMins"] = $fdata;
//	LatePenaltyMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "LatePenaltyMins";
	$fdata["GoodName"] = "LatePenaltyMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","LatePenaltyMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LatePenaltyMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.LatePenaltyMins";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["LatePenaltyMins"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","Employer");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Employer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.Employer";

	
	
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




	$tdatadtrsummary["Employer"] = $fdata;
//	LateFixPenalty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "LateFixPenalty";
	$fdata["GoodName"] = "LateFixPenalty";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","LateFixPenalty");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LateFixPenalty";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.LateFixPenalty";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["LateFixPenalty"] = $fdata;
//	AfterBreakLogOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "AfterBreakLogOut";
	$fdata["GoodName"] = "AfterBreakLogOut";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","AfterBreakLogOut");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AfterBreakLogOut";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.AfterBreakLogOut";

	
	
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

		$edata["ShowTime"] = true;

	
		
	


		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatadtrsummary["AfterBreakLogOut"] = $fdata;
//	AfterBreakLog
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "AfterBreakLog";
	$fdata["GoodName"] = "AfterBreakLog";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","AfterBreakLog");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AfterBreakLog";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.AfterBreakLog";

	
	
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

		$edata["ShowTime"] = true;

	
		
	


		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatadtrsummary["AfterBreakLog"] = $fdata;
//	PreLogMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "PreLogMins";
	$fdata["GoodName"] = "PreLogMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","PreLogMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PreLogMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.PreLogMins";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["PreLogMins"] = $fdata;
//	IncludeBreakLate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "IncludeBreakLate";
	$fdata["GoodName"] = "IncludeBreakLate";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","IncludeBreakLate");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "IncludeBreakLate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.IncludeBreakLate";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["IncludeBreakLate"] = $fdata;
//	GracePeriodMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "GracePeriodMins";
	$fdata["GoodName"] = "GracePeriodMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","GracePeriodMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "GracePeriodMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.GracePeriodMins";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["GracePeriodMins"] = $fdata;
//	BreakLateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "BreakLateMins";
	$fdata["GoodName"] = "BreakLateMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","BreakLateMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BreakLateMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.BreakLateMins";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["BreakLateMins"] = $fdata;
//	ANDOTMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "ANDOTMins";
	$fdata["GoodName"] = "ANDOTMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","ANDOTMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ANDOTMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.ANDOTMins";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["ANDOTMins"] = $fdata;
//	RegNDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "RegNDOTHrs";
	$fdata["GoodName"] = "RegNDOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","RegNDOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RegNDOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.RegNDOTHrs";

	
	
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




	$tdatadtrsummary["RegNDOTHrs"] = $fdata;
//	RHNDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "RHNDOTHrs";
	$fdata["GoodName"] = "RHNDOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","RHNDOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHNDOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.RHNDOTHrs";

	
	
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




	$tdatadtrsummary["RHNDOTHrs"] = $fdata;
//	SHNDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "SHNDOTHrs";
	$fdata["GoodName"] = "SHNDOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","SHNDOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHNDOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.SHNDOTHrs";

	
	
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




	$tdatadtrsummary["SHNDOTHrs"] = $fdata;
//	CHNDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "CHNDOTHrs";
	$fdata["GoodName"] = "CHNDOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","CHNDOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CHNDOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.CHNDOTHrs";

	
	
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




	$tdatadtrsummary["CHNDOTHrs"] = $fdata;
//	RDNDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "RDNDOTHrs";
	$fdata["GoodName"] = "RDNDOTHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("dtrsummary","RDNDOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RDNDOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.RDNDOTHrs";

	
	
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




	$tdatadtrsummary["RDNDOTHrs"] = $fdata;


$tables_data["dtrsummary"]=&$tdatadtrsummary;
$field_labels["dtrsummary"] = &$fieldLabelsdtrsummary;
$fieldToolTips["dtrsummary"] = &$fieldToolTipsdtrsummary;
$placeHolders["dtrsummary"] = &$placeHoldersdtrsummary;
$page_titles["dtrsummary"] = &$pageTitlesdtrsummary;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dtrsummary"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dtrsummary"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_dtrsummary()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "indschedule.ScID,  indschedule.UserName,  indschedule.SDate,  indschedule.STimeIn,  indschedule.STimeOut,  indschedule.SchedType,  indschedule.ApprovedOT,  indschedule.AOTMins,  indschedule.WageType,  indschedule.ApprovedNightDiff,  indschedule.ANDiff,  indschedule.EmployeeID,  indschedule.MinsPerDay,  indschedule.BreakMins,  indschedule.Shift,  indschedule.ApprovedRD,  indschedule.RDMins,  indschedule.LunchBreakFrom,  indschedule.LunchBreakTo,  indschedule.NDMealAllowancePerShift,  indschedule.NDMinimumHrs,  indschedule.NDMealAllowance,  indschedule.Division,  indschedule.TimeIn,  indschedule.TimeOut,  indschedule.DayIs,  indschedule.RestDay,  indschedule.Department,  indschedule.RegWD,  indschedule.DWork,  indschedule.Absent,  indschedule.LateMins,  indschedule.UndertimeMins,  indschedule.RHolidayHrs,  indschedule.SHolidayHrs,  indschedule.CHolidayHrs,  indschedule.ExcessHrs,  indschedule.RegOTHrs,  indschedule.RHOTHrs,  indschedule.SHOTHrs,  indschedule.CHOTHrs,  indschedule.RDOTHrs,  indschedule.NDHrs,  indschedule.RDHrs,  indschedule.RegNDHrs,  indschedule.RHNDHrs,  indschedule.SHNDHrs,  indschedule.CHNDHrs,  indschedule.RDNDHrs,  indschedule.VLDay,  indschedule.SLDay,  indschedule.ELDay,  indschedule.PLDay,  indschedule.TrODay,  indschedule.HolidayType,  indschedule.Mispunched,  indschedule.Holiday1stHalf,  indschedule.Holiday2ndHalf,  indschedule.TotLateMins,  indschedule.LatePenaltyMins,  indschedule.Employer,  indschedule.LateFixPenalty,  indschedule.AfterBreakLogOut,  indschedule.AfterBreakLog,  indschedule.PreLogMins,  indschedule.IncludeBreakLate,  indschedule.GracePeriodMins,  indschedule.BreakLateMins,  indschedule.ANDOTMins,  indschedule.RegNDOTHrs,  indschedule.RHNDOTHrs,  indschedule.SHNDOTHrs,  indschedule.CHNDOTHrs,  indschedule.RDNDOTHrs";
$proto0["m_strFrom"] = "FROM dtrsummary  , indschedule";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY indschedule.ScID";
	
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
	"m_srcTableName" => "dtrsummary"
));

$proto6["m_sql"] = "indschedule.ScID";
$proto6["m_srcTableName"] = "dtrsummary";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto8["m_sql"] = "indschedule.UserName";
$proto8["m_srcTableName"] = "dtrsummary";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SDate",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto10["m_sql"] = "indschedule.SDate";
$proto10["m_srcTableName"] = "dtrsummary";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "STimeIn",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto12["m_sql"] = "indschedule.STimeIn";
$proto12["m_srcTableName"] = "dtrsummary";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "STimeOut",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto14["m_sql"] = "indschedule.STimeOut";
$proto14["m_srcTableName"] = "dtrsummary";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "SchedType",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto16["m_sql"] = "indschedule.SchedType";
$proto16["m_srcTableName"] = "dtrsummary";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedOT",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto18["m_sql"] = "indschedule.ApprovedOT";
$proto18["m_srcTableName"] = "dtrsummary";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "AOTMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto20["m_sql"] = "indschedule.AOTMins";
$proto20["m_srcTableName"] = "dtrsummary";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "WageType",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto22["m_sql"] = "indschedule.WageType";
$proto22["m_srcTableName"] = "dtrsummary";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedNightDiff",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto24["m_sql"] = "indschedule.ApprovedNightDiff";
$proto24["m_srcTableName"] = "dtrsummary";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ANDiff",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto26["m_sql"] = "indschedule.ANDiff";
$proto26["m_srcTableName"] = "dtrsummary";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto28["m_sql"] = "indschedule.EmployeeID";
$proto28["m_srcTableName"] = "dtrsummary";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "MinsPerDay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto30["m_sql"] = "indschedule.MinsPerDay";
$proto30["m_srcTableName"] = "dtrsummary";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "BreakMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto32["m_sql"] = "indschedule.BreakMins";
$proto32["m_srcTableName"] = "dtrsummary";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Shift",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto34["m_sql"] = "indschedule.Shift";
$proto34["m_srcTableName"] = "dtrsummary";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedRD",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto36["m_sql"] = "indschedule.ApprovedRD";
$proto36["m_srcTableName"] = "dtrsummary";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "RDMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto38["m_sql"] = "indschedule.RDMins";
$proto38["m_srcTableName"] = "dtrsummary";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "LunchBreakFrom",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto40["m_sql"] = "indschedule.LunchBreakFrom";
$proto40["m_srcTableName"] = "dtrsummary";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "LunchBreakTo",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto42["m_sql"] = "indschedule.LunchBreakTo";
$proto42["m_srcTableName"] = "dtrsummary";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "NDMealAllowancePerShift",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto44["m_sql"] = "indschedule.NDMealAllowancePerShift";
$proto44["m_srcTableName"] = "dtrsummary";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "NDMinimumHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto46["m_sql"] = "indschedule.NDMinimumHrs";
$proto46["m_srcTableName"] = "dtrsummary";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "NDMealAllowance",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto48["m_sql"] = "indschedule.NDMealAllowance";
$proto48["m_srcTableName"] = "dtrsummary";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto50["m_sql"] = "indschedule.Division";
$proto50["m_srcTableName"] = "dtrsummary";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeIn",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto52["m_sql"] = "indschedule.TimeIn";
$proto52["m_srcTableName"] = "dtrsummary";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeOut",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto54["m_sql"] = "indschedule.TimeOut";
$proto54["m_srcTableName"] = "dtrsummary";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "DayIs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto56["m_sql"] = "indschedule.DayIs";
$proto56["m_srcTableName"] = "dtrsummary";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "RestDay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto58["m_sql"] = "indschedule.RestDay";
$proto58["m_srcTableName"] = "dtrsummary";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto60["m_sql"] = "indschedule.Department";
$proto60["m_srcTableName"] = "dtrsummary";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "RegWD",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto62["m_sql"] = "indschedule.RegWD";
$proto62["m_srcTableName"] = "dtrsummary";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "DWork",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto64["m_sql"] = "indschedule.DWork";
$proto64["m_srcTableName"] = "dtrsummary";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "Absent",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto66["m_sql"] = "indschedule.Absent";
$proto66["m_srcTableName"] = "dtrsummary";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "LateMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto68["m_sql"] = "indschedule.LateMins";
$proto68["m_srcTableName"] = "dtrsummary";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "UndertimeMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto70["m_sql"] = "indschedule.UndertimeMins";
$proto70["m_srcTableName"] = "dtrsummary";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "RHolidayHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto72["m_sql"] = "indschedule.RHolidayHrs";
$proto72["m_srcTableName"] = "dtrsummary";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "SHolidayHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto74["m_sql"] = "indschedule.SHolidayHrs";
$proto74["m_srcTableName"] = "dtrsummary";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "CHolidayHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto76["m_sql"] = "indschedule.CHolidayHrs";
$proto76["m_srcTableName"] = "dtrsummary";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "ExcessHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto78["m_sql"] = "indschedule.ExcessHrs";
$proto78["m_srcTableName"] = "dtrsummary";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "RegOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto80["m_sql"] = "indschedule.RegOTHrs";
$proto80["m_srcTableName"] = "dtrsummary";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "RHOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto82["m_sql"] = "indschedule.RHOTHrs";
$proto82["m_srcTableName"] = "dtrsummary";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto84["m_sql"] = "indschedule.SHOTHrs";
$proto84["m_srcTableName"] = "dtrsummary";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "CHOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto86["m_sql"] = "indschedule.CHOTHrs";
$proto86["m_srcTableName"] = "dtrsummary";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "RDOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto88["m_sql"] = "indschedule.RDOTHrs";
$proto88["m_srcTableName"] = "dtrsummary";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "NDHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto90["m_sql"] = "indschedule.NDHrs";
$proto90["m_srcTableName"] = "dtrsummary";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "RDHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto92["m_sql"] = "indschedule.RDHrs";
$proto92["m_srcTableName"] = "dtrsummary";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "RegNDHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto94["m_sql"] = "indschedule.RegNDHrs";
$proto94["m_srcTableName"] = "dtrsummary";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "RHNDHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto96["m_sql"] = "indschedule.RHNDHrs";
$proto96["m_srcTableName"] = "dtrsummary";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "SHNDHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto98["m_sql"] = "indschedule.SHNDHrs";
$proto98["m_srcTableName"] = "dtrsummary";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "CHNDHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto100["m_sql"] = "indschedule.CHNDHrs";
$proto100["m_srcTableName"] = "dtrsummary";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "RDNDHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto102["m_sql"] = "indschedule.RDNDHrs";
$proto102["m_srcTableName"] = "dtrsummary";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "VLDay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto104["m_sql"] = "indschedule.VLDay";
$proto104["m_srcTableName"] = "dtrsummary";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "SLDay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto106["m_sql"] = "indschedule.SLDay";
$proto106["m_srcTableName"] = "dtrsummary";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "ELDay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto108["m_sql"] = "indschedule.ELDay";
$proto108["m_srcTableName"] = "dtrsummary";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "PLDay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto110["m_sql"] = "indschedule.PLDay";
$proto110["m_srcTableName"] = "dtrsummary";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "TrODay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto112["m_sql"] = "indschedule.TrODay";
$proto112["m_srcTableName"] = "dtrsummary";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "HolidayType",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto114["m_sql"] = "indschedule.HolidayType";
$proto114["m_srcTableName"] = "dtrsummary";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "Mispunched",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto116["m_sql"] = "indschedule.Mispunched";
$proto116["m_srcTableName"] = "dtrsummary";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "Holiday1stHalf",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto118["m_sql"] = "indschedule.Holiday1stHalf";
$proto118["m_srcTableName"] = "dtrsummary";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "Holiday2ndHalf",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto120["m_sql"] = "indschedule.Holiday2ndHalf";
$proto120["m_srcTableName"] = "dtrsummary";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "TotLateMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto122["m_sql"] = "indschedule.TotLateMins";
$proto122["m_srcTableName"] = "dtrsummary";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "LatePenaltyMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto124["m_sql"] = "indschedule.LatePenaltyMins";
$proto124["m_srcTableName"] = "dtrsummary";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto126["m_sql"] = "indschedule.Employer";
$proto126["m_srcTableName"] = "dtrsummary";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "LateFixPenalty",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto128["m_sql"] = "indschedule.LateFixPenalty";
$proto128["m_srcTableName"] = "dtrsummary";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "AfterBreakLogOut",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto130["m_sql"] = "indschedule.AfterBreakLogOut";
$proto130["m_srcTableName"] = "dtrsummary";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "AfterBreakLog",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto132["m_sql"] = "indschedule.AfterBreakLog";
$proto132["m_srcTableName"] = "dtrsummary";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "PreLogMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto134["m_sql"] = "indschedule.PreLogMins";
$proto134["m_srcTableName"] = "dtrsummary";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "IncludeBreakLate",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto136["m_sql"] = "indschedule.IncludeBreakLate";
$proto136["m_srcTableName"] = "dtrsummary";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "GracePeriodMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto138["m_sql"] = "indschedule.GracePeriodMins";
$proto138["m_srcTableName"] = "dtrsummary";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "BreakLateMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto140["m_sql"] = "indschedule.BreakLateMins";
$proto140["m_srcTableName"] = "dtrsummary";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "ANDOTMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto142["m_sql"] = "indschedule.ANDOTMins";
$proto142["m_srcTableName"] = "dtrsummary";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "RegNDOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto144["m_sql"] = "indschedule.RegNDOTHrs";
$proto144["m_srcTableName"] = "dtrsummary";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "RHNDOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto146["m_sql"] = "indschedule.RHNDOTHrs";
$proto146["m_srcTableName"] = "dtrsummary";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "SHNDOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto148["m_sql"] = "indschedule.SHNDOTHrs";
$proto148["m_srcTableName"] = "dtrsummary";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "CHNDOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto150["m_sql"] = "indschedule.CHNDOTHrs";
$proto150["m_srcTableName"] = "dtrsummary";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "RDNDOTHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "dtrsummary"
));

$proto152["m_sql"] = "indschedule.RDNDOTHrs";
$proto152["m_srcTableName"] = "dtrsummary";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto154=array();
$proto154["m_link"] = "SQLL_MAIN";
			$proto155=array();
$proto155["m_strName"] = "dtrsummary";
$proto155["m_srcTableName"] = "dtrsummary";
$proto155["m_columns"] = array();
$proto155["m_columns"][] = "EmployeeID";
$proto155["m_columns"][] = "UserName";
$proto155["m_columns"][] = "Division";
$proto155["m_columns"][] = "WageType";
$proto155["m_columns"][] = "RegWD";
$proto155["m_columns"][] = "DWork";
$proto155["m_columns"][] = "Absent";
$proto155["m_columns"][] = "LateMins";
$proto155["m_columns"][] = "UndertimeMins";
$proto155["m_columns"][] = "ExcessHrs";
$proto155["m_columns"][] = "RegOTHrs";
$proto155["m_columns"][] = "RHOTHrs";
$proto155["m_columns"][] = "SHOTHRs";
$proto155["m_columns"][] = "CHOTHrs";
$proto155["m_columns"][] = "RDOTHrs";
$proto155["m_columns"][] = "NDHrs";
$proto155["m_columns"][] = "RDHrs";
$proto155["m_columns"][] = "RegNDHrs";
$proto155["m_columns"][] = "RegNDOTHrs";
$proto155["m_columns"][] = "RHNDHrs";
$proto155["m_columns"][] = "RHNDOTHrs";
$proto155["m_columns"][] = "SHNDHrs";
$proto155["m_columns"][] = "SHNDOTHrs";
$proto155["m_columns"][] = "CHNDHrs";
$proto155["m_columns"][] = "CHNDOTHrs";
$proto155["m_columns"][] = "RDNDHrs";
$proto155["m_columns"][] = "RDNDOTHrs";
$proto155["m_columns"][] = "VLDays";
$proto155["m_columns"][] = "SLDays";
$proto155["m_columns"][] = "ELDays";
$proto155["m_columns"][] = "PLDays";
$proto155["m_columns"][] = "TrODays";
$proto155["m_columns"][] = "RLink";
$proto155["m_columns"][] = "NDMealAllowance";
$proto155["m_columns"][] = "Employer";
$proto155["m_columns"][] = "RHolidayHrs";
$proto155["m_columns"][] = "SHolidayHrs";
$proto155["m_columns"][] = "CHolidayHrs";
$proto155["m_columns"][] = "TBreakLateMins";
$obj = new SQLTable($proto155);

$proto154["m_table"] = $obj;
$proto154["m_sql"] = "dtrsummary";
$proto154["m_alias"] = "";
$proto154["m_srcTableName"] = "dtrsummary";
$proto156=array();
$proto156["m_sql"] = "";
$proto156["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto156["m_column"]=$obj;
$proto156["m_contained"] = array();
$proto156["m_strCase"] = "";
$proto156["m_havingmode"] = false;
$proto156["m_inBrackets"] = false;
$proto156["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto156);

$proto154["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto154);

$proto0["m_fromlist"][]=$obj;
												$proto158=array();
$proto158["m_link"] = "SQLL_CROSSJOIN";
			$proto159=array();
$proto159["m_strName"] = "indschedule";
$proto159["m_srcTableName"] = "dtrsummary";
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
$obj = new SQLTable($proto159);

$proto158["m_table"] = $obj;
$proto158["m_sql"] = "indschedule";
$proto158["m_alias"] = "";
$proto158["m_srcTableName"] = "dtrsummary";
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
	"m_srcTableName" => "dtrsummary"
));

$proto162["m_column"]=$obj;
$proto162["m_bAsc"] = 1;
$proto162["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto162);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dtrsummary";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dtrsummary = createSqlQuery_dtrsummary();


	
		;

																																																																										

$tdatadtrsummary[".sqlquery"] = $queryData_dtrsummary;

$tableEvents["dtrsummary"] = new eventsBase;
$tdatadtrsummary[".hasEvents"] = false;

?>