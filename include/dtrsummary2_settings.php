<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadtrsummary2 = array();
	$tdatadtrsummary2[".truncateText"] = true;
	$tdatadtrsummary2[".NumberOfChars"] = 80;
	$tdatadtrsummary2[".ShortName"] = "dtrsummary2";
	$tdatadtrsummary2[".OwnerID"] = "";
	$tdatadtrsummary2[".OriginalTable"] = "dtrsummary2";

//	field labels
$fieldLabelsdtrsummary2 = array();
$fieldToolTipsdtrsummary2 = array();
$pageTitlesdtrsummary2 = array();
$placeHoldersdtrsummary2 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdtrsummary2["English"] = array();
	$fieldToolTipsdtrsummary2["English"] = array();
	$placeHoldersdtrsummary2["English"] = array();
	$pageTitlesdtrsummary2["English"] = array();
	$fieldLabelsdtrsummary2["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipsdtrsummary2["English"]["EmployeeID"] = "";
	$placeHoldersdtrsummary2["English"]["EmployeeID"] = "";
	$fieldLabelsdtrsummary2["English"]["UserName"] = "User Name";
	$fieldToolTipsdtrsummary2["English"]["UserName"] = "";
	$placeHoldersdtrsummary2["English"]["UserName"] = "";
	$fieldLabelsdtrsummary2["English"]["Division"] = "Division";
	$fieldToolTipsdtrsummary2["English"]["Division"] = "";
	$placeHoldersdtrsummary2["English"]["Division"] = "";
	$fieldLabelsdtrsummary2["English"]["WageType"] = "Wage Type";
	$fieldToolTipsdtrsummary2["English"]["WageType"] = "";
	$placeHoldersdtrsummary2["English"]["WageType"] = "";
	$fieldLabelsdtrsummary2["English"]["RegWD"] = "Reg WD";
	$fieldToolTipsdtrsummary2["English"]["RegWD"] = "";
	$placeHoldersdtrsummary2["English"]["RegWD"] = "";
	$fieldLabelsdtrsummary2["English"]["DWork"] = "DWork";
	$fieldToolTipsdtrsummary2["English"]["DWork"] = "";
	$placeHoldersdtrsummary2["English"]["DWork"] = "";
	$fieldLabelsdtrsummary2["English"]["Absent"] = "Absent";
	$fieldToolTipsdtrsummary2["English"]["Absent"] = "";
	$placeHoldersdtrsummary2["English"]["Absent"] = "";
	$fieldLabelsdtrsummary2["English"]["TLates"] = "TLates";
	$fieldToolTipsdtrsummary2["English"]["TLates"] = "";
	$placeHoldersdtrsummary2["English"]["TLates"] = "";
	$fieldLabelsdtrsummary2["English"]["LateMins"] = "Late Mins";
	$fieldToolTipsdtrsummary2["English"]["LateMins"] = "";
	$placeHoldersdtrsummary2["English"]["LateMins"] = "";
	$fieldLabelsdtrsummary2["English"]["UndertimeMins"] = "Undertime Mins";
	$fieldToolTipsdtrsummary2["English"]["UndertimeMins"] = "";
	$placeHoldersdtrsummary2["English"]["UndertimeMins"] = "";
	$fieldLabelsdtrsummary2["English"]["ExcessHrs"] = "Excess Hrs";
	$fieldToolTipsdtrsummary2["English"]["ExcessHrs"] = "";
	$placeHoldersdtrsummary2["English"]["ExcessHrs"] = "";
	$fieldLabelsdtrsummary2["English"]["RegOTHrs"] = "Reg OTHrs";
	$fieldToolTipsdtrsummary2["English"]["RegOTHrs"] = "";
	$placeHoldersdtrsummary2["English"]["RegOTHrs"] = "";
	$fieldLabelsdtrsummary2["English"]["RHOTHrs"] = "RHOTHrs";
	$fieldToolTipsdtrsummary2["English"]["RHOTHrs"] = "";
	$placeHoldersdtrsummary2["English"]["RHOTHrs"] = "";
	$fieldLabelsdtrsummary2["English"]["SHOTHRs"] = "SHOTHRs";
	$fieldToolTipsdtrsummary2["English"]["SHOTHRs"] = "";
	$placeHoldersdtrsummary2["English"]["SHOTHRs"] = "";
	$fieldLabelsdtrsummary2["English"]["CHOTHrs"] = "CHOTHrs";
	$fieldToolTipsdtrsummary2["English"]["CHOTHrs"] = "";
	$placeHoldersdtrsummary2["English"]["CHOTHrs"] = "";
	$fieldLabelsdtrsummary2["English"]["RDOTHrs"] = "RDOTHrs";
	$fieldToolTipsdtrsummary2["English"]["RDOTHrs"] = "";
	$placeHoldersdtrsummary2["English"]["RDOTHrs"] = "";
	$fieldLabelsdtrsummary2["English"]["NDHrs"] = "NDHrs";
	$fieldToolTipsdtrsummary2["English"]["NDHrs"] = "";
	$placeHoldersdtrsummary2["English"]["NDHrs"] = "";
	$fieldLabelsdtrsummary2["English"]["NDOTHrs"] = "NDOTHrs";
	$fieldToolTipsdtrsummary2["English"]["NDOTHrs"] = "";
	$placeHoldersdtrsummary2["English"]["NDOTHrs"] = "";
	$fieldLabelsdtrsummary2["English"]["RDHrs"] = "RDHrs";
	$fieldToolTipsdtrsummary2["English"]["RDHrs"] = "";
	$placeHoldersdtrsummary2["English"]["RDHrs"] = "";
	$fieldLabelsdtrsummary2["English"]["RegNDHrs"] = "Reg NDHrs";
	$fieldToolTipsdtrsummary2["English"]["RegNDHrs"] = "";
	$placeHoldersdtrsummary2["English"]["RegNDHrs"] = "";
	$fieldLabelsdtrsummary2["English"]["RHNDHrs"] = "RHNDHrs";
	$fieldToolTipsdtrsummary2["English"]["RHNDHrs"] = "";
	$placeHoldersdtrsummary2["English"]["RHNDHrs"] = "";
	$fieldLabelsdtrsummary2["English"]["SHNDHrs"] = "SHNDHrs";
	$fieldToolTipsdtrsummary2["English"]["SHNDHrs"] = "";
	$placeHoldersdtrsummary2["English"]["SHNDHrs"] = "";
	$fieldLabelsdtrsummary2["English"]["CHNDHrs"] = "CHNDHrs";
	$fieldToolTipsdtrsummary2["English"]["CHNDHrs"] = "";
	$placeHoldersdtrsummary2["English"]["CHNDHrs"] = "";
	$fieldLabelsdtrsummary2["English"]["RDNDHrs"] = "RDNDHrs";
	$fieldToolTipsdtrsummary2["English"]["RDNDHrs"] = "";
	$placeHoldersdtrsummary2["English"]["RDNDHrs"] = "";
	$fieldLabelsdtrsummary2["English"]["VLDays"] = "VLDays";
	$fieldToolTipsdtrsummary2["English"]["VLDays"] = "";
	$placeHoldersdtrsummary2["English"]["VLDays"] = "";
	$fieldLabelsdtrsummary2["English"]["SLDays"] = "SLDays";
	$fieldToolTipsdtrsummary2["English"]["SLDays"] = "";
	$placeHoldersdtrsummary2["English"]["SLDays"] = "";
	$fieldLabelsdtrsummary2["English"]["ELDays"] = "ELDays";
	$fieldToolTipsdtrsummary2["English"]["ELDays"] = "";
	$placeHoldersdtrsummary2["English"]["ELDays"] = "";
	$fieldLabelsdtrsummary2["English"]["PLDays"] = "PLDays";
	$fieldToolTipsdtrsummary2["English"]["PLDays"] = "";
	$placeHoldersdtrsummary2["English"]["PLDays"] = "";
	$fieldLabelsdtrsummary2["English"]["TrODays"] = "Tr ODays";
	$fieldToolTipsdtrsummary2["English"]["TrODays"] = "";
	$placeHoldersdtrsummary2["English"]["TrODays"] = "";
	$fieldLabelsdtrsummary2["English"]["RLink"] = "RLink";
	$fieldToolTipsdtrsummary2["English"]["RLink"] = "";
	$placeHoldersdtrsummary2["English"]["RLink"] = "";
	$fieldLabelsdtrsummary2["English"]["NDMealAllowance"] = "NDMeal Allowance";
	$fieldToolTipsdtrsummary2["English"]["NDMealAllowance"] = "";
	$placeHoldersdtrsummary2["English"]["NDMealAllowance"] = "";
	$fieldLabelsdtrsummary2["English"]["Employer"] = "Employer";
	$fieldToolTipsdtrsummary2["English"]["Employer"] = "";
	$placeHoldersdtrsummary2["English"]["Employer"] = "";
	$fieldLabelsdtrsummary2["English"]["RHolidayHrs"] = "RHoliday Hrs";
	$fieldToolTipsdtrsummary2["English"]["RHolidayHrs"] = "";
	$placeHoldersdtrsummary2["English"]["RHolidayHrs"] = "";
	$fieldLabelsdtrsummary2["English"]["SHolidayHrs"] = "SHoliday Hrs";
	$fieldToolTipsdtrsummary2["English"]["SHolidayHrs"] = "";
	$placeHoldersdtrsummary2["English"]["SHolidayHrs"] = "";
	$fieldLabelsdtrsummary2["English"]["CHolidayHrs"] = "CHoliday Hrs";
	$fieldToolTipsdtrsummary2["English"]["CHolidayHrs"] = "";
	$placeHoldersdtrsummary2["English"]["CHolidayHrs"] = "";
	$fieldLabelsdtrsummary2["English"]["TBreakLateMins"] = "TBreak Late Mins";
	$fieldToolTipsdtrsummary2["English"]["TBreakLateMins"] = "";
	$placeHoldersdtrsummary2["English"]["TBreakLateMins"] = "";
	$fieldLabelsdtrsummary2["English"]["RegNDOTHrs"] = "Reg NDOTHrs";
	$fieldToolTipsdtrsummary2["English"]["RegNDOTHrs"] = "";
	$placeHoldersdtrsummary2["English"]["RegNDOTHrs"] = "";
	$fieldLabelsdtrsummary2["English"]["RHNDOTHrs"] = "RHNDOTHrs";
	$fieldToolTipsdtrsummary2["English"]["RHNDOTHrs"] = "";
	$placeHoldersdtrsummary2["English"]["RHNDOTHrs"] = "";
	$fieldLabelsdtrsummary2["English"]["SHNDOTHrs"] = "SHNDOTHrs";
	$fieldToolTipsdtrsummary2["English"]["SHNDOTHrs"] = "";
	$placeHoldersdtrsummary2["English"]["SHNDOTHrs"] = "";
	$fieldLabelsdtrsummary2["English"]["CHNDOTHrs"] = "CHNDOTHrs";
	$fieldToolTipsdtrsummary2["English"]["CHNDOTHrs"] = "";
	$placeHoldersdtrsummary2["English"]["CHNDOTHrs"] = "";
	$fieldLabelsdtrsummary2["English"]["RDNDOTHrs"] = "RDNDOTHrs";
	$fieldToolTipsdtrsummary2["English"]["RDNDOTHrs"] = "";
	$placeHoldersdtrsummary2["English"]["RDNDOTHrs"] = "";
	$fieldLabelsdtrsummary2["English"]["DHh"] = "DHh";
	$fieldToolTipsdtrsummary2["English"]["DHh"] = "";
	$placeHoldersdtrsummary2["English"]["DHh"] = "";
	$fieldLabelsdtrsummary2["English"]["DHRDh"] = "DHRDh";
	$fieldToolTipsdtrsummary2["English"]["DHRDh"] = "";
	$placeHoldersdtrsummary2["English"]["DHRDh"] = "";
	$fieldLabelsdtrsummary2["English"]["DHOTh"] = "DHOTh";
	$fieldToolTipsdtrsummary2["English"]["DHOTh"] = "";
	$placeHoldersdtrsummary2["English"]["DHOTh"] = "";
	$fieldLabelsdtrsummary2["English"]["DHRDOTh"] = "DHRDOTh";
	$fieldToolTipsdtrsummary2["English"]["DHRDOTh"] = "";
	$placeHoldersdtrsummary2["English"]["DHRDOTh"] = "";
	$fieldLabelsdtrsummary2["English"]["SHRDNDh"] = "SHRDNDh";
	$fieldToolTipsdtrsummary2["English"]["SHRDNDh"] = "";
	$placeHoldersdtrsummary2["English"]["SHRDNDh"] = "";
	$fieldLabelsdtrsummary2["English"]["RHRDNDh"] = "RHRDNDh";
	$fieldToolTipsdtrsummary2["English"]["RHRDNDh"] = "";
	$placeHoldersdtrsummary2["English"]["RHRDNDh"] = "";
	$fieldLabelsdtrsummary2["English"]["SHRDNDOTh"] = "SHRDNDOTh";
	$fieldToolTipsdtrsummary2["English"]["SHRDNDOTh"] = "";
	$placeHoldersdtrsummary2["English"]["SHRDNDOTh"] = "";
	$fieldLabelsdtrsummary2["English"]["RHRDNDOTh"] = "RHRDNDOTh";
	$fieldToolTipsdtrsummary2["English"]["RHRDNDOTh"] = "";
	$placeHoldersdtrsummary2["English"]["RHRDNDOTh"] = "";
	$fieldLabelsdtrsummary2["English"]["DHNDh"] = "DHNDh";
	$fieldToolTipsdtrsummary2["English"]["DHNDh"] = "";
	$placeHoldersdtrsummary2["English"]["DHNDh"] = "";
	$fieldLabelsdtrsummary2["English"]["DHRDNDh"] = "DHRDNDh";
	$fieldToolTipsdtrsummary2["English"]["DHRDNDh"] = "";
	$placeHoldersdtrsummary2["English"]["DHRDNDh"] = "";
	$fieldLabelsdtrsummary2["English"]["DHNDOTh"] = "DHNDOTh";
	$fieldToolTipsdtrsummary2["English"]["DHNDOTh"] = "";
	$placeHoldersdtrsummary2["English"]["DHNDOTh"] = "";
	$fieldLabelsdtrsummary2["English"]["DHRDNDOTh"] = "DHRDNDOTh";
	$fieldToolTipsdtrsummary2["English"]["DHRDNDOTh"] = "";
	$placeHoldersdtrsummary2["English"]["DHRDNDOTh"] = "";
	if (count($fieldToolTipsdtrsummary2["English"]))
		$tdatadtrsummary2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdtrsummary2[""] = array();
	$fieldToolTipsdtrsummary2[""] = array();
	$placeHoldersdtrsummary2[""] = array();
	$pageTitlesdtrsummary2[""] = array();
	$fieldLabelsdtrsummary2[""]["EmployeeID"] = "Employee ID";
	$fieldToolTipsdtrsummary2[""]["EmployeeID"] = "";
	$placeHoldersdtrsummary2[""]["EmployeeID"] = "";
	$fieldLabelsdtrsummary2[""]["UserName"] = "User Name";
	$fieldToolTipsdtrsummary2[""]["UserName"] = "";
	$placeHoldersdtrsummary2[""]["UserName"] = "";
	$fieldLabelsdtrsummary2[""]["Division"] = "Division";
	$fieldToolTipsdtrsummary2[""]["Division"] = "";
	$placeHoldersdtrsummary2[""]["Division"] = "";
	$fieldLabelsdtrsummary2[""]["WageType"] = "Wage Type";
	$fieldToolTipsdtrsummary2[""]["WageType"] = "";
	$placeHoldersdtrsummary2[""]["WageType"] = "";
	$fieldLabelsdtrsummary2[""]["RegWD"] = "Reg WD";
	$fieldToolTipsdtrsummary2[""]["RegWD"] = "";
	$placeHoldersdtrsummary2[""]["RegWD"] = "";
	$fieldLabelsdtrsummary2[""]["DWork"] = "DWork";
	$fieldToolTipsdtrsummary2[""]["DWork"] = "";
	$placeHoldersdtrsummary2[""]["DWork"] = "";
	$fieldLabelsdtrsummary2[""]["Absent"] = "Absent";
	$fieldToolTipsdtrsummary2[""]["Absent"] = "";
	$placeHoldersdtrsummary2[""]["Absent"] = "";
	$fieldLabelsdtrsummary2[""]["TLates"] = "TLates";
	$fieldToolTipsdtrsummary2[""]["TLates"] = "";
	$placeHoldersdtrsummary2[""]["TLates"] = "";
	$fieldLabelsdtrsummary2[""]["LateMins"] = "Late Mins";
	$fieldToolTipsdtrsummary2[""]["LateMins"] = "";
	$placeHoldersdtrsummary2[""]["LateMins"] = "";
	$fieldLabelsdtrsummary2[""]["UndertimeMins"] = "Undertime Mins";
	$fieldToolTipsdtrsummary2[""]["UndertimeMins"] = "";
	$placeHoldersdtrsummary2[""]["UndertimeMins"] = "";
	$fieldLabelsdtrsummary2[""]["ExcessHrs"] = "Excess Hrs";
	$fieldToolTipsdtrsummary2[""]["ExcessHrs"] = "";
	$placeHoldersdtrsummary2[""]["ExcessHrs"] = "";
	$fieldLabelsdtrsummary2[""]["RegOTHrs"] = "Reg OTHrs";
	$fieldToolTipsdtrsummary2[""]["RegOTHrs"] = "";
	$placeHoldersdtrsummary2[""]["RegOTHrs"] = "";
	$fieldLabelsdtrsummary2[""]["RHOTHrs"] = "RHOTHrs";
	$fieldToolTipsdtrsummary2[""]["RHOTHrs"] = "";
	$placeHoldersdtrsummary2[""]["RHOTHrs"] = "";
	$fieldLabelsdtrsummary2[""]["SHOTHRs"] = "SHOTHRs";
	$fieldToolTipsdtrsummary2[""]["SHOTHRs"] = "";
	$placeHoldersdtrsummary2[""]["SHOTHRs"] = "";
	$fieldLabelsdtrsummary2[""]["CHOTHrs"] = "CHOTHrs";
	$fieldToolTipsdtrsummary2[""]["CHOTHrs"] = "";
	$placeHoldersdtrsummary2[""]["CHOTHrs"] = "";
	$fieldLabelsdtrsummary2[""]["RDOTHrs"] = "RDOTHrs";
	$fieldToolTipsdtrsummary2[""]["RDOTHrs"] = "";
	$placeHoldersdtrsummary2[""]["RDOTHrs"] = "";
	$fieldLabelsdtrsummary2[""]["NDHrs"] = "NDHrs";
	$fieldToolTipsdtrsummary2[""]["NDHrs"] = "";
	$placeHoldersdtrsummary2[""]["NDHrs"] = "";
	$fieldLabelsdtrsummary2[""]["NDOTHrs"] = "NDOTHrs";
	$fieldToolTipsdtrsummary2[""]["NDOTHrs"] = "";
	$placeHoldersdtrsummary2[""]["NDOTHrs"] = "";
	$fieldLabelsdtrsummary2[""]["RDHrs"] = "RDHrs";
	$fieldToolTipsdtrsummary2[""]["RDHrs"] = "";
	$placeHoldersdtrsummary2[""]["RDHrs"] = "";
	$fieldLabelsdtrsummary2[""]["RegNDHrs"] = "Reg NDHrs";
	$fieldToolTipsdtrsummary2[""]["RegNDHrs"] = "";
	$placeHoldersdtrsummary2[""]["RegNDHrs"] = "";
	$fieldLabelsdtrsummary2[""]["RHNDHrs"] = "RHNDHrs";
	$fieldToolTipsdtrsummary2[""]["RHNDHrs"] = "";
	$placeHoldersdtrsummary2[""]["RHNDHrs"] = "";
	$fieldLabelsdtrsummary2[""]["SHNDHrs"] = "SHNDHrs";
	$fieldToolTipsdtrsummary2[""]["SHNDHrs"] = "";
	$placeHoldersdtrsummary2[""]["SHNDHrs"] = "";
	$fieldLabelsdtrsummary2[""]["CHNDHrs"] = "CHNDHrs";
	$fieldToolTipsdtrsummary2[""]["CHNDHrs"] = "";
	$placeHoldersdtrsummary2[""]["CHNDHrs"] = "";
	$fieldLabelsdtrsummary2[""]["RDNDHrs"] = "RDNDHrs";
	$fieldToolTipsdtrsummary2[""]["RDNDHrs"] = "";
	$placeHoldersdtrsummary2[""]["RDNDHrs"] = "";
	$fieldLabelsdtrsummary2[""]["VLDays"] = "VLDays";
	$fieldToolTipsdtrsummary2[""]["VLDays"] = "";
	$placeHoldersdtrsummary2[""]["VLDays"] = "";
	$fieldLabelsdtrsummary2[""]["SLDays"] = "SLDays";
	$fieldToolTipsdtrsummary2[""]["SLDays"] = "";
	$placeHoldersdtrsummary2[""]["SLDays"] = "";
	$fieldLabelsdtrsummary2[""]["ELDays"] = "ELDays";
	$fieldToolTipsdtrsummary2[""]["ELDays"] = "";
	$placeHoldersdtrsummary2[""]["ELDays"] = "";
	$fieldLabelsdtrsummary2[""]["PLDays"] = "PLDays";
	$fieldToolTipsdtrsummary2[""]["PLDays"] = "";
	$placeHoldersdtrsummary2[""]["PLDays"] = "";
	$fieldLabelsdtrsummary2[""]["TrODays"] = "Tr ODays";
	$fieldToolTipsdtrsummary2[""]["TrODays"] = "";
	$placeHoldersdtrsummary2[""]["TrODays"] = "";
	$fieldLabelsdtrsummary2[""]["RLink"] = "RLink";
	$fieldToolTipsdtrsummary2[""]["RLink"] = "";
	$placeHoldersdtrsummary2[""]["RLink"] = "";
	$fieldLabelsdtrsummary2[""]["NDMealAllowance"] = "NDMeal Allowance";
	$fieldToolTipsdtrsummary2[""]["NDMealAllowance"] = "";
	$placeHoldersdtrsummary2[""]["NDMealAllowance"] = "";
	$fieldLabelsdtrsummary2[""]["Employer"] = "Employer";
	$fieldToolTipsdtrsummary2[""]["Employer"] = "";
	$placeHoldersdtrsummary2[""]["Employer"] = "";
	$fieldLabelsdtrsummary2[""]["RHolidayHrs"] = "RHoliday Hrs";
	$fieldToolTipsdtrsummary2[""]["RHolidayHrs"] = "";
	$placeHoldersdtrsummary2[""]["RHolidayHrs"] = "";
	$fieldLabelsdtrsummary2[""]["SHolidayHrs"] = "SHoliday Hrs";
	$fieldToolTipsdtrsummary2[""]["SHolidayHrs"] = "";
	$placeHoldersdtrsummary2[""]["SHolidayHrs"] = "";
	$fieldLabelsdtrsummary2[""]["CHolidayHrs"] = "CHoliday Hrs";
	$fieldToolTipsdtrsummary2[""]["CHolidayHrs"] = "";
	$placeHoldersdtrsummary2[""]["CHolidayHrs"] = "";
	$fieldLabelsdtrsummary2[""]["TBreakLateMins"] = "TBreak Late Mins";
	$fieldToolTipsdtrsummary2[""]["TBreakLateMins"] = "";
	$placeHoldersdtrsummary2[""]["TBreakLateMins"] = "";
	$fieldLabelsdtrsummary2[""]["RegNDOTHrs"] = "Reg NDOTHrs";
	$fieldToolTipsdtrsummary2[""]["RegNDOTHrs"] = "";
	$placeHoldersdtrsummary2[""]["RegNDOTHrs"] = "";
	$fieldLabelsdtrsummary2[""]["RHNDOTHrs"] = "RHNDOTHrs";
	$fieldToolTipsdtrsummary2[""]["RHNDOTHrs"] = "";
	$placeHoldersdtrsummary2[""]["RHNDOTHrs"] = "";
	$fieldLabelsdtrsummary2[""]["SHNDOTHrs"] = "SHNDOTHrs";
	$fieldToolTipsdtrsummary2[""]["SHNDOTHrs"] = "";
	$placeHoldersdtrsummary2[""]["SHNDOTHrs"] = "";
	$fieldLabelsdtrsummary2[""]["CHNDOTHrs"] = "CHNDOTHrs";
	$fieldToolTipsdtrsummary2[""]["CHNDOTHrs"] = "";
	$placeHoldersdtrsummary2[""]["CHNDOTHrs"] = "";
	$fieldLabelsdtrsummary2[""]["RDNDOTHrs"] = "RDNDOTHrs";
	$fieldToolTipsdtrsummary2[""]["RDNDOTHrs"] = "";
	$placeHoldersdtrsummary2[""]["RDNDOTHrs"] = "";
	$fieldLabelsdtrsummary2[""]["DHh"] = "DHh";
	$fieldToolTipsdtrsummary2[""]["DHh"] = "";
	$placeHoldersdtrsummary2[""]["DHh"] = "";
	$fieldLabelsdtrsummary2[""]["DHRDh"] = "DHRDh";
	$fieldToolTipsdtrsummary2[""]["DHRDh"] = "";
	$placeHoldersdtrsummary2[""]["DHRDh"] = "";
	$fieldLabelsdtrsummary2[""]["DHOTh"] = "DHOTh";
	$fieldToolTipsdtrsummary2[""]["DHOTh"] = "";
	$placeHoldersdtrsummary2[""]["DHOTh"] = "";
	$fieldLabelsdtrsummary2[""]["DHRDOTh"] = "DHRDOTh";
	$fieldToolTipsdtrsummary2[""]["DHRDOTh"] = "";
	$placeHoldersdtrsummary2[""]["DHRDOTh"] = "";
	$fieldLabelsdtrsummary2[""]["SHRDNDh"] = "SHRDNDh";
	$fieldToolTipsdtrsummary2[""]["SHRDNDh"] = "";
	$placeHoldersdtrsummary2[""]["SHRDNDh"] = "";
	$fieldLabelsdtrsummary2[""]["RHRDNDh"] = "RHRDNDh";
	$fieldToolTipsdtrsummary2[""]["RHRDNDh"] = "";
	$placeHoldersdtrsummary2[""]["RHRDNDh"] = "";
	$fieldLabelsdtrsummary2[""]["SHRDNDOTh"] = "SHRDNDOTh";
	$fieldToolTipsdtrsummary2[""]["SHRDNDOTh"] = "";
	$placeHoldersdtrsummary2[""]["SHRDNDOTh"] = "";
	$fieldLabelsdtrsummary2[""]["RHRDNDOTh"] = "RHRDNDOTh";
	$fieldToolTipsdtrsummary2[""]["RHRDNDOTh"] = "";
	$placeHoldersdtrsummary2[""]["RHRDNDOTh"] = "";
	$fieldLabelsdtrsummary2[""]["DHNDh"] = "DHNDh";
	$fieldToolTipsdtrsummary2[""]["DHNDh"] = "";
	$placeHoldersdtrsummary2[""]["DHNDh"] = "";
	$fieldLabelsdtrsummary2[""]["DHRDNDh"] = "DHRDNDh";
	$fieldToolTipsdtrsummary2[""]["DHRDNDh"] = "";
	$placeHoldersdtrsummary2[""]["DHRDNDh"] = "";
	$fieldLabelsdtrsummary2[""]["DHNDOTh"] = "DHNDOTh";
	$fieldToolTipsdtrsummary2[""]["DHNDOTh"] = "";
	$placeHoldersdtrsummary2[""]["DHNDOTh"] = "";
	$fieldLabelsdtrsummary2[""]["DHRDNDOTh"] = "DHRDNDOTh";
	$fieldToolTipsdtrsummary2[""]["DHRDNDOTh"] = "";
	$placeHoldersdtrsummary2[""]["DHRDNDOTh"] = "";
	if (count($fieldToolTipsdtrsummary2[""]))
		$tdatadtrsummary2[".isUseToolTips"] = true;
}


	$tdatadtrsummary2[".NCSearch"] = true;



$tdatadtrsummary2[".shortTableName"] = "dtrsummary2";
$tdatadtrsummary2[".nSecOptions"] = 0;
$tdatadtrsummary2[".recsPerRowPrint"] = 1;
$tdatadtrsummary2[".mainTableOwnerID"] = "";
$tdatadtrsummary2[".moveNext"] = 1;
$tdatadtrsummary2[".entityType"] = 0;

$tdatadtrsummary2[".strOriginalTableName"] = "dtrsummary2";

	



$tdatadtrsummary2[".showAddInPopup"] = false;

$tdatadtrsummary2[".showEditInPopup"] = false;

$tdatadtrsummary2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadtrsummary2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadtrsummary2[".fieldsForRegister"] = array();

$tdatadtrsummary2[".listAjax"] = false;

	$tdatadtrsummary2[".audit"] = false;

	$tdatadtrsummary2[".locking"] = false;



$tdatadtrsummary2[".list"] = true;



$tdatadtrsummary2[".reorderRecordsByHeader"] = true;


$tdatadtrsummary2[".exportFormatting"] = 2;
$tdatadtrsummary2[".exportDelimiter"] = ",";
		
$tdatadtrsummary2[".view"] = true;


$tdatadtrsummary2[".exportTo"] = true;

$tdatadtrsummary2[".printFriendly"] = true;


$tdatadtrsummary2[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadtrsummary2[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatadtrsummary2[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatadtrsummary2[".searchSaving"] = false;
//

$tdatadtrsummary2[".showSearchPanel"] = true;
		$tdatadtrsummary2[".flexibleSearch"] = true;

$tdatadtrsummary2[".isUseAjaxSuggest"] = true;

$tdatadtrsummary2[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																														

$tdatadtrsummary2[".ajaxCodeSnippetAdded"] = false;

$tdatadtrsummary2[".buttonsAdded"] = false;

$tdatadtrsummary2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadtrsummary2[".isUseTimeForSearch"] = false;





$tdatadtrsummary2[".allSearchFields"] = array();
$tdatadtrsummary2[".filterFields"] = array();
$tdatadtrsummary2[".requiredSearchFields"] = array();

$tdatadtrsummary2[".allSearchFields"][] = "UserName";
	$tdatadtrsummary2[".allSearchFields"][] = "Division";
	$tdatadtrsummary2[".allSearchFields"][] = "WageType";
	$tdatadtrsummary2[".allSearchFields"][] = "Employer";
	

$tdatadtrsummary2[".googleLikeFields"] = array();
$tdatadtrsummary2[".googleLikeFields"][] = "UserName";
$tdatadtrsummary2[".googleLikeFields"][] = "Division";
$tdatadtrsummary2[".googleLikeFields"][] = "WageType";
$tdatadtrsummary2[".googleLikeFields"][] = "Employer";

$tdatadtrsummary2[".panelSearchFields"] = array();
$tdatadtrsummary2[".searchPanelOptions"] = array();
$tdatadtrsummary2[".panelSearchFields"][] = "UserName";
	$tdatadtrsummary2[".panelSearchFields"][] = "Division";
	$tdatadtrsummary2[".panelSearchFields"][] = "WageType";
	$tdatadtrsummary2[".panelSearchFields"][] = "Employer";
	
$tdatadtrsummary2[".advSearchFields"] = array();
$tdatadtrsummary2[".advSearchFields"][] = "UserName";
$tdatadtrsummary2[".advSearchFields"][] = "Division";
$tdatadtrsummary2[".advSearchFields"][] = "WageType";
$tdatadtrsummary2[".advSearchFields"][] = "Employer";

$tdatadtrsummary2[".tableType"] = "list";

$tdatadtrsummary2[".printerPageOrientation"] = 0;
$tdatadtrsummary2[".nPrinterPageScale"] = 100;

$tdatadtrsummary2[".nPrinterSplitRecords"] = 40;

$tdatadtrsummary2[".nPrinterPDFSplitRecords"] = 40;



$tdatadtrsummary2[".geocodingEnabled"] = false;





$tdatadtrsummary2[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatadtrsummary2[".pageSize"] = 20;

$tdatadtrsummary2[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY UserName";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadtrsummary2[".strOrderBy"] = $tstrOrderBy;

$tdatadtrsummary2[".orderindexes"] = array();
	$tdatadtrsummary2[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "UserName");


$tdatadtrsummary2[".sqlHead"] = "SELECT EmployeeID,  UserName,  Division,  WageType,  RegWD,  DWork,  Absent,  TLates,  LateMins,  UndertimeMins,  ExcessHrs,  RegOTHrs,  RHOTHrs,  SHOTHRs,  CHOTHrs,  RDOTHrs,  NDHrs,  NDOTHrs,  RDHrs,  RegNDHrs,  RHNDHrs,  SHNDHrs,  CHNDHrs,  RDNDHrs,  VLDays,  SLDays,  ELDays,  PLDays,  TrODays,  RLink,  NDMealAllowance,  Employer,  RHolidayHrs,  SHolidayHrs,  CHolidayHrs,  TBreakLateMins,  RegNDOTHrs,  RHNDOTHrs,  SHNDOTHrs,  CHNDOTHrs,  RDNDOTHrs,  DHh,  DHRDh,  DHOTh,  DHRDOTh,  SHRDNDh,  RHRDNDh,  SHRDNDOTh,  RHRDNDOTh,  DHNDh,  DHRDNDh,  DHNDOTh,  DHRDNDOTh";
$tdatadtrsummary2[".sqlFrom"] = "FROM dtrsummary2";
$tdatadtrsummary2[".sqlWhereExpr"] = "";
$tdatadtrsummary2[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadtrsummary2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadtrsummary2[".arrGroupsPerPage"] = $arrGPP;

$tdatadtrsummary2[".highlightSearchResults"] = true;

$tableKeysdtrsummary2 = array();
$tableKeysdtrsummary2[] = "EmployeeID";
$tdatadtrsummary2[".Keys"] = $tableKeysdtrsummary2;

$tdatadtrsummary2[".listFields"] = array();
$tdatadtrsummary2[".listFields"][] = "EmployeeID";
$tdatadtrsummary2[".listFields"][] = "UserName";
$tdatadtrsummary2[".listFields"][] = "Division";
$tdatadtrsummary2[".listFields"][] = "WageType";
$tdatadtrsummary2[".listFields"][] = "Employer";
$tdatadtrsummary2[".listFields"][] = "RegWD";
$tdatadtrsummary2[".listFields"][] = "DWork";
$tdatadtrsummary2[".listFields"][] = "Absent";
$tdatadtrsummary2[".listFields"][] = "TLates";
$tdatadtrsummary2[".listFields"][] = "LateMins";
$tdatadtrsummary2[".listFields"][] = "UndertimeMins";
$tdatadtrsummary2[".listFields"][] = "ExcessHrs";
$tdatadtrsummary2[".listFields"][] = "RegOTHrs";
$tdatadtrsummary2[".listFields"][] = "RHOTHrs";
$tdatadtrsummary2[".listFields"][] = "SHOTHRs";
$tdatadtrsummary2[".listFields"][] = "CHOTHrs";
$tdatadtrsummary2[".listFields"][] = "RDOTHrs";
$tdatadtrsummary2[".listFields"][] = "NDHrs";
$tdatadtrsummary2[".listFields"][] = "NDOTHrs";
$tdatadtrsummary2[".listFields"][] = "RDHrs";
$tdatadtrsummary2[".listFields"][] = "RegNDHrs";
$tdatadtrsummary2[".listFields"][] = "RHNDHrs";
$tdatadtrsummary2[".listFields"][] = "SHNDHrs";
$tdatadtrsummary2[".listFields"][] = "CHNDHrs";
$tdatadtrsummary2[".listFields"][] = "RDNDHrs";
$tdatadtrsummary2[".listFields"][] = "VLDays";
$tdatadtrsummary2[".listFields"][] = "SLDays";
$tdatadtrsummary2[".listFields"][] = "ELDays";
$tdatadtrsummary2[".listFields"][] = "PLDays";
$tdatadtrsummary2[".listFields"][] = "TrODays";
$tdatadtrsummary2[".listFields"][] = "RLink";
$tdatadtrsummary2[".listFields"][] = "NDMealAllowance";
$tdatadtrsummary2[".listFields"][] = "RHolidayHrs";
$tdatadtrsummary2[".listFields"][] = "SHolidayHrs";
$tdatadtrsummary2[".listFields"][] = "CHolidayHrs";
$tdatadtrsummary2[".listFields"][] = "TBreakLateMins";
$tdatadtrsummary2[".listFields"][] = "RegNDOTHrs";
$tdatadtrsummary2[".listFields"][] = "RHNDOTHrs";
$tdatadtrsummary2[".listFields"][] = "SHNDOTHrs";
$tdatadtrsummary2[".listFields"][] = "CHNDOTHrs";
$tdatadtrsummary2[".listFields"][] = "RDNDOTHrs";
$tdatadtrsummary2[".listFields"][] = "DHh";
$tdatadtrsummary2[".listFields"][] = "DHRDh";
$tdatadtrsummary2[".listFields"][] = "DHOTh";
$tdatadtrsummary2[".listFields"][] = "DHRDOTh";
$tdatadtrsummary2[".listFields"][] = "SHRDNDh";
$tdatadtrsummary2[".listFields"][] = "RHRDNDh";
$tdatadtrsummary2[".listFields"][] = "SHRDNDOTh";
$tdatadtrsummary2[".listFields"][] = "RHRDNDOTh";
$tdatadtrsummary2[".listFields"][] = "DHNDh";
$tdatadtrsummary2[".listFields"][] = "DHRDNDh";
$tdatadtrsummary2[".listFields"][] = "DHNDOTh";
$tdatadtrsummary2[".listFields"][] = "DHRDNDOTh";

$tdatadtrsummary2[".hideMobileList"] = array();


$tdatadtrsummary2[".viewFields"] = array();
$tdatadtrsummary2[".viewFields"][] = "EmployeeID";
$tdatadtrsummary2[".viewFields"][] = "UserName";
$tdatadtrsummary2[".viewFields"][] = "Division";
$tdatadtrsummary2[".viewFields"][] = "WageType";
$tdatadtrsummary2[".viewFields"][] = "Employer";
$tdatadtrsummary2[".viewFields"][] = "RegWD";
$tdatadtrsummary2[".viewFields"][] = "DWork";
$tdatadtrsummary2[".viewFields"][] = "Absent";
$tdatadtrsummary2[".viewFields"][] = "TLates";
$tdatadtrsummary2[".viewFields"][] = "LateMins";
$tdatadtrsummary2[".viewFields"][] = "UndertimeMins";
$tdatadtrsummary2[".viewFields"][] = "ExcessHrs";
$tdatadtrsummary2[".viewFields"][] = "RegOTHrs";
$tdatadtrsummary2[".viewFields"][] = "RHOTHrs";
$tdatadtrsummary2[".viewFields"][] = "SHOTHRs";
$tdatadtrsummary2[".viewFields"][] = "CHOTHrs";
$tdatadtrsummary2[".viewFields"][] = "RDOTHrs";
$tdatadtrsummary2[".viewFields"][] = "NDHrs";
$tdatadtrsummary2[".viewFields"][] = "NDOTHrs";
$tdatadtrsummary2[".viewFields"][] = "RDHrs";
$tdatadtrsummary2[".viewFields"][] = "RegNDHrs";
$tdatadtrsummary2[".viewFields"][] = "RHNDHrs";
$tdatadtrsummary2[".viewFields"][] = "SHNDHrs";
$tdatadtrsummary2[".viewFields"][] = "CHNDHrs";
$tdatadtrsummary2[".viewFields"][] = "RDNDHrs";
$tdatadtrsummary2[".viewFields"][] = "VLDays";
$tdatadtrsummary2[".viewFields"][] = "SLDays";
$tdatadtrsummary2[".viewFields"][] = "ELDays";
$tdatadtrsummary2[".viewFields"][] = "PLDays";
$tdatadtrsummary2[".viewFields"][] = "TrODays";
$tdatadtrsummary2[".viewFields"][] = "RLink";
$tdatadtrsummary2[".viewFields"][] = "NDMealAllowance";
$tdatadtrsummary2[".viewFields"][] = "RHolidayHrs";
$tdatadtrsummary2[".viewFields"][] = "SHolidayHrs";
$tdatadtrsummary2[".viewFields"][] = "CHolidayHrs";
$tdatadtrsummary2[".viewFields"][] = "TBreakLateMins";
$tdatadtrsummary2[".viewFields"][] = "RegNDOTHrs";
$tdatadtrsummary2[".viewFields"][] = "RHNDOTHrs";
$tdatadtrsummary2[".viewFields"][] = "SHNDOTHrs";
$tdatadtrsummary2[".viewFields"][] = "CHNDOTHrs";
$tdatadtrsummary2[".viewFields"][] = "RDNDOTHrs";
$tdatadtrsummary2[".viewFields"][] = "DHh";
$tdatadtrsummary2[".viewFields"][] = "DHRDh";
$tdatadtrsummary2[".viewFields"][] = "DHOTh";
$tdatadtrsummary2[".viewFields"][] = "DHRDOTh";
$tdatadtrsummary2[".viewFields"][] = "SHRDNDh";
$tdatadtrsummary2[".viewFields"][] = "RHRDNDh";
$tdatadtrsummary2[".viewFields"][] = "SHRDNDOTh";
$tdatadtrsummary2[".viewFields"][] = "RHRDNDOTh";
$tdatadtrsummary2[".viewFields"][] = "DHNDh";
$tdatadtrsummary2[".viewFields"][] = "DHRDNDh";
$tdatadtrsummary2[".viewFields"][] = "DHNDOTh";
$tdatadtrsummary2[".viewFields"][] = "DHRDNDOTh";

$tdatadtrsummary2[".addFields"] = array();

$tdatadtrsummary2[".masterListFields"] = array();
$tdatadtrsummary2[".masterListFields"][] = "EmployeeID";
$tdatadtrsummary2[".masterListFields"][] = "UserName";
$tdatadtrsummary2[".masterListFields"][] = "Division";
$tdatadtrsummary2[".masterListFields"][] = "WageType";
$tdatadtrsummary2[".masterListFields"][] = "Employer";
$tdatadtrsummary2[".masterListFields"][] = "RegWD";
$tdatadtrsummary2[".masterListFields"][] = "DWork";
$tdatadtrsummary2[".masterListFields"][] = "Absent";
$tdatadtrsummary2[".masterListFields"][] = "TLates";
$tdatadtrsummary2[".masterListFields"][] = "LateMins";
$tdatadtrsummary2[".masterListFields"][] = "UndertimeMins";
$tdatadtrsummary2[".masterListFields"][] = "ExcessHrs";
$tdatadtrsummary2[".masterListFields"][] = "RegOTHrs";
$tdatadtrsummary2[".masterListFields"][] = "RHOTHrs";
$tdatadtrsummary2[".masterListFields"][] = "SHOTHRs";
$tdatadtrsummary2[".masterListFields"][] = "CHOTHrs";
$tdatadtrsummary2[".masterListFields"][] = "RDOTHrs";
$tdatadtrsummary2[".masterListFields"][] = "NDHrs";
$tdatadtrsummary2[".masterListFields"][] = "NDOTHrs";
$tdatadtrsummary2[".masterListFields"][] = "RDHrs";
$tdatadtrsummary2[".masterListFields"][] = "RegNDHrs";
$tdatadtrsummary2[".masterListFields"][] = "RHNDHrs";
$tdatadtrsummary2[".masterListFields"][] = "SHNDHrs";
$tdatadtrsummary2[".masterListFields"][] = "CHNDHrs";
$tdatadtrsummary2[".masterListFields"][] = "RDNDHrs";
$tdatadtrsummary2[".masterListFields"][] = "VLDays";
$tdatadtrsummary2[".masterListFields"][] = "SLDays";
$tdatadtrsummary2[".masterListFields"][] = "ELDays";
$tdatadtrsummary2[".masterListFields"][] = "PLDays";
$tdatadtrsummary2[".masterListFields"][] = "TrODays";
$tdatadtrsummary2[".masterListFields"][] = "RLink";
$tdatadtrsummary2[".masterListFields"][] = "NDMealAllowance";
$tdatadtrsummary2[".masterListFields"][] = "RHolidayHrs";
$tdatadtrsummary2[".masterListFields"][] = "SHolidayHrs";
$tdatadtrsummary2[".masterListFields"][] = "CHolidayHrs";
$tdatadtrsummary2[".masterListFields"][] = "TBreakLateMins";
$tdatadtrsummary2[".masterListFields"][] = "RegNDOTHrs";
$tdatadtrsummary2[".masterListFields"][] = "RHNDOTHrs";
$tdatadtrsummary2[".masterListFields"][] = "SHNDOTHrs";
$tdatadtrsummary2[".masterListFields"][] = "CHNDOTHrs";
$tdatadtrsummary2[".masterListFields"][] = "RDNDOTHrs";
$tdatadtrsummary2[".masterListFields"][] = "DHh";
$tdatadtrsummary2[".masterListFields"][] = "DHRDh";
$tdatadtrsummary2[".masterListFields"][] = "DHOTh";
$tdatadtrsummary2[".masterListFields"][] = "DHRDOTh";
$tdatadtrsummary2[".masterListFields"][] = "SHRDNDh";
$tdatadtrsummary2[".masterListFields"][] = "RHRDNDh";
$tdatadtrsummary2[".masterListFields"][] = "SHRDNDOTh";
$tdatadtrsummary2[".masterListFields"][] = "RHRDNDOTh";
$tdatadtrsummary2[".masterListFields"][] = "DHNDh";
$tdatadtrsummary2[".masterListFields"][] = "DHRDNDh";
$tdatadtrsummary2[".masterListFields"][] = "DHNDOTh";
$tdatadtrsummary2[".masterListFields"][] = "DHRDNDOTh";

$tdatadtrsummary2[".inlineAddFields"] = array();

$tdatadtrsummary2[".editFields"] = array();

$tdatadtrsummary2[".inlineEditFields"] = array();

$tdatadtrsummary2[".updateSelectedFields"] = array();


$tdatadtrsummary2[".exportFields"] = array();
$tdatadtrsummary2[".exportFields"][] = "EmployeeID";
$tdatadtrsummary2[".exportFields"][] = "UserName";
$tdatadtrsummary2[".exportFields"][] = "Division";
$tdatadtrsummary2[".exportFields"][] = "WageType";
$tdatadtrsummary2[".exportFields"][] = "Employer";
$tdatadtrsummary2[".exportFields"][] = "RegWD";
$tdatadtrsummary2[".exportFields"][] = "DWork";
$tdatadtrsummary2[".exportFields"][] = "Absent";
$tdatadtrsummary2[".exportFields"][] = "TLates";
$tdatadtrsummary2[".exportFields"][] = "LateMins";
$tdatadtrsummary2[".exportFields"][] = "UndertimeMins";
$tdatadtrsummary2[".exportFields"][] = "ExcessHrs";
$tdatadtrsummary2[".exportFields"][] = "RegOTHrs";
$tdatadtrsummary2[".exportFields"][] = "RHOTHrs";
$tdatadtrsummary2[".exportFields"][] = "SHOTHRs";
$tdatadtrsummary2[".exportFields"][] = "CHOTHrs";
$tdatadtrsummary2[".exportFields"][] = "RDOTHrs";
$tdatadtrsummary2[".exportFields"][] = "NDHrs";
$tdatadtrsummary2[".exportFields"][] = "NDOTHrs";
$tdatadtrsummary2[".exportFields"][] = "RDHrs";
$tdatadtrsummary2[".exportFields"][] = "RegNDHrs";
$tdatadtrsummary2[".exportFields"][] = "RHNDHrs";
$tdatadtrsummary2[".exportFields"][] = "SHNDHrs";
$tdatadtrsummary2[".exportFields"][] = "CHNDHrs";
$tdatadtrsummary2[".exportFields"][] = "RDNDHrs";
$tdatadtrsummary2[".exportFields"][] = "VLDays";
$tdatadtrsummary2[".exportFields"][] = "SLDays";
$tdatadtrsummary2[".exportFields"][] = "ELDays";
$tdatadtrsummary2[".exportFields"][] = "PLDays";
$tdatadtrsummary2[".exportFields"][] = "TrODays";
$tdatadtrsummary2[".exportFields"][] = "RLink";
$tdatadtrsummary2[".exportFields"][] = "NDMealAllowance";
$tdatadtrsummary2[".exportFields"][] = "RHolidayHrs";
$tdatadtrsummary2[".exportFields"][] = "SHolidayHrs";
$tdatadtrsummary2[".exportFields"][] = "CHolidayHrs";
$tdatadtrsummary2[".exportFields"][] = "TBreakLateMins";
$tdatadtrsummary2[".exportFields"][] = "RegNDOTHrs";
$tdatadtrsummary2[".exportFields"][] = "RHNDOTHrs";
$tdatadtrsummary2[".exportFields"][] = "SHNDOTHrs";
$tdatadtrsummary2[".exportFields"][] = "CHNDOTHrs";
$tdatadtrsummary2[".exportFields"][] = "RDNDOTHrs";
$tdatadtrsummary2[".exportFields"][] = "DHh";
$tdatadtrsummary2[".exportFields"][] = "DHRDh";
$tdatadtrsummary2[".exportFields"][] = "DHOTh";
$tdatadtrsummary2[".exportFields"][] = "DHRDOTh";
$tdatadtrsummary2[".exportFields"][] = "SHRDNDh";
$tdatadtrsummary2[".exportFields"][] = "RHRDNDh";
$tdatadtrsummary2[".exportFields"][] = "SHRDNDOTh";
$tdatadtrsummary2[".exportFields"][] = "RHRDNDOTh";
$tdatadtrsummary2[".exportFields"][] = "DHNDh";
$tdatadtrsummary2[".exportFields"][] = "DHRDNDh";
$tdatadtrsummary2[".exportFields"][] = "DHNDOTh";
$tdatadtrsummary2[".exportFields"][] = "DHRDNDOTh";

$tdatadtrsummary2[".importFields"] = array();

$tdatadtrsummary2[".printFields"] = array();
$tdatadtrsummary2[".printFields"][] = "EmployeeID";
$tdatadtrsummary2[".printFields"][] = "UserName";
$tdatadtrsummary2[".printFields"][] = "Division";
$tdatadtrsummary2[".printFields"][] = "WageType";
$tdatadtrsummary2[".printFields"][] = "Employer";
$tdatadtrsummary2[".printFields"][] = "RegWD";
$tdatadtrsummary2[".printFields"][] = "DWork";
$tdatadtrsummary2[".printFields"][] = "Absent";
$tdatadtrsummary2[".printFields"][] = "TLates";
$tdatadtrsummary2[".printFields"][] = "LateMins";
$tdatadtrsummary2[".printFields"][] = "UndertimeMins";
$tdatadtrsummary2[".printFields"][] = "ExcessHrs";
$tdatadtrsummary2[".printFields"][] = "RegOTHrs";
$tdatadtrsummary2[".printFields"][] = "RHOTHrs";
$tdatadtrsummary2[".printFields"][] = "SHOTHRs";
$tdatadtrsummary2[".printFields"][] = "CHOTHrs";
$tdatadtrsummary2[".printFields"][] = "RDOTHrs";
$tdatadtrsummary2[".printFields"][] = "NDHrs";
$tdatadtrsummary2[".printFields"][] = "NDOTHrs";
$tdatadtrsummary2[".printFields"][] = "RDHrs";
$tdatadtrsummary2[".printFields"][] = "RegNDHrs";
$tdatadtrsummary2[".printFields"][] = "RHNDHrs";
$tdatadtrsummary2[".printFields"][] = "SHNDHrs";
$tdatadtrsummary2[".printFields"][] = "CHNDHrs";
$tdatadtrsummary2[".printFields"][] = "RDNDHrs";
$tdatadtrsummary2[".printFields"][] = "VLDays";
$tdatadtrsummary2[".printFields"][] = "SLDays";
$tdatadtrsummary2[".printFields"][] = "ELDays";
$tdatadtrsummary2[".printFields"][] = "PLDays";
$tdatadtrsummary2[".printFields"][] = "TrODays";
$tdatadtrsummary2[".printFields"][] = "RLink";
$tdatadtrsummary2[".printFields"][] = "NDMealAllowance";
$tdatadtrsummary2[".printFields"][] = "RHolidayHrs";
$tdatadtrsummary2[".printFields"][] = "SHolidayHrs";
$tdatadtrsummary2[".printFields"][] = "CHolidayHrs";
$tdatadtrsummary2[".printFields"][] = "TBreakLateMins";
$tdatadtrsummary2[".printFields"][] = "RegNDOTHrs";
$tdatadtrsummary2[".printFields"][] = "RHNDOTHrs";
$tdatadtrsummary2[".printFields"][] = "SHNDOTHrs";
$tdatadtrsummary2[".printFields"][] = "CHNDOTHrs";
$tdatadtrsummary2[".printFields"][] = "RDNDOTHrs";
$tdatadtrsummary2[".printFields"][] = "DHh";
$tdatadtrsummary2[".printFields"][] = "DHRDh";
$tdatadtrsummary2[".printFields"][] = "DHOTh";
$tdatadtrsummary2[".printFields"][] = "DHRDOTh";
$tdatadtrsummary2[".printFields"][] = "SHRDNDh";
$tdatadtrsummary2[".printFields"][] = "RHRDNDh";
$tdatadtrsummary2[".printFields"][] = "SHRDNDOTh";
$tdatadtrsummary2[".printFields"][] = "RHRDNDOTh";
$tdatadtrsummary2[".printFields"][] = "DHNDh";
$tdatadtrsummary2[".printFields"][] = "DHRDNDh";
$tdatadtrsummary2[".printFields"][] = "DHNDOTh";
$tdatadtrsummary2[".printFields"][] = "DHRDNDOTh";


//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","EmployeeID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatadtrsummary2["EmployeeID"] = $fdata;
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","UserName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatadtrsummary2["UserName"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","Division");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatadtrsummary2["Division"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","WageType");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatadtrsummary2["WageType"] = $fdata;
//	RegWD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "RegWD";
	$fdata["GoodName"] = "RegWD";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RegWD");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatadtrsummary2["RegWD"] = $fdata;
//	DWork
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DWork";
	$fdata["GoodName"] = "DWork";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","DWork");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatadtrsummary2["DWork"] = $fdata;
//	Absent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Absent";
	$fdata["GoodName"] = "Absent";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","Absent");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatadtrsummary2["Absent"] = $fdata;
//	TLates
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "TLates";
	$fdata["GoodName"] = "TLates";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","TLates");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TLates";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TLates";

	
	
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








	$tdatadtrsummary2["TLates"] = $fdata;
//	LateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "LateMins";
	$fdata["GoodName"] = "LateMins";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","LateMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatadtrsummary2["LateMins"] = $fdata;
//	UndertimeMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "UndertimeMins";
	$fdata["GoodName"] = "UndertimeMins";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","UndertimeMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatadtrsummary2["UndertimeMins"] = $fdata;
//	ExcessHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ExcessHrs";
	$fdata["GoodName"] = "ExcessHrs";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","ExcessHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatadtrsummary2["ExcessHrs"] = $fdata;
//	RegOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "RegOTHrs";
	$fdata["GoodName"] = "RegOTHrs";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RegOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatadtrsummary2["RegOTHrs"] = $fdata;
//	RHOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "RHOTHrs";
	$fdata["GoodName"] = "RHOTHrs";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RHOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatadtrsummary2["RHOTHrs"] = $fdata;
//	SHOTHRs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "SHOTHRs";
	$fdata["GoodName"] = "SHOTHRs";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","SHOTHRs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHOTHRs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHOTHRs";

	
	
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








	$tdatadtrsummary2["SHOTHRs"] = $fdata;
//	CHOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "CHOTHrs";
	$fdata["GoodName"] = "CHOTHrs";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","CHOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatadtrsummary2["CHOTHrs"] = $fdata;
//	RDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "RDOTHrs";
	$fdata["GoodName"] = "RDOTHrs";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RDOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatadtrsummary2["RDOTHrs"] = $fdata;
//	NDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "NDHrs";
	$fdata["GoodName"] = "NDHrs";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","NDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatadtrsummary2["NDHrs"] = $fdata;
//	NDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "NDOTHrs";
	$fdata["GoodName"] = "NDOTHrs";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","NDOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NDOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NDOTHrs";

	
	
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








	$tdatadtrsummary2["NDOTHrs"] = $fdata;
//	RDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "RDHrs";
	$fdata["GoodName"] = "RDHrs";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatadtrsummary2["RDHrs"] = $fdata;
//	RegNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "RegNDHrs";
	$fdata["GoodName"] = "RegNDHrs";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RegNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatadtrsummary2["RegNDHrs"] = $fdata;
//	RHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "RHNDHrs";
	$fdata["GoodName"] = "RHNDHrs";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RHNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatadtrsummary2["RHNDHrs"] = $fdata;
//	SHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "SHNDHrs";
	$fdata["GoodName"] = "SHNDHrs";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","SHNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatadtrsummary2["SHNDHrs"] = $fdata;
//	CHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "CHNDHrs";
	$fdata["GoodName"] = "CHNDHrs";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","CHNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatadtrsummary2["CHNDHrs"] = $fdata;
//	RDNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "RDNDHrs";
	$fdata["GoodName"] = "RDNDHrs";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RDNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatadtrsummary2["RDNDHrs"] = $fdata;
//	VLDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "VLDays";
	$fdata["GoodName"] = "VLDays";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","VLDays");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "VLDays";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VLDays";

	
	
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








	$tdatadtrsummary2["VLDays"] = $fdata;
//	SLDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "SLDays";
	$fdata["GoodName"] = "SLDays";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","SLDays");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SLDays";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SLDays";

	
	
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








	$tdatadtrsummary2["SLDays"] = $fdata;
//	ELDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "ELDays";
	$fdata["GoodName"] = "ELDays";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","ELDays");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ELDays";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ELDays";

	
	
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








	$tdatadtrsummary2["ELDays"] = $fdata;
//	PLDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "PLDays";
	$fdata["GoodName"] = "PLDays";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","PLDays");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PLDays";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PLDays";

	
	
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








	$tdatadtrsummary2["PLDays"] = $fdata;
//	TrODays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "TrODays";
	$fdata["GoodName"] = "TrODays";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","TrODays");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TrODays";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TrODays";

	
	
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








	$tdatadtrsummary2["TrODays"] = $fdata;
//	RLink
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "RLink";
	$fdata["GoodName"] = "RLink";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RLink");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RLink";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RLink";

	
	
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








	$tdatadtrsummary2["RLink"] = $fdata;
//	NDMealAllowance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "NDMealAllowance";
	$fdata["GoodName"] = "NDMealAllowance";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","NDMealAllowance");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatadtrsummary2["NDMealAllowance"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","Employer");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatadtrsummary2["Employer"] = $fdata;
//	RHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "RHolidayHrs";
	$fdata["GoodName"] = "RHolidayHrs";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RHolidayHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatadtrsummary2["RHolidayHrs"] = $fdata;
//	SHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "SHolidayHrs";
	$fdata["GoodName"] = "SHolidayHrs";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","SHolidayHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatadtrsummary2["SHolidayHrs"] = $fdata;
//	CHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "CHolidayHrs";
	$fdata["GoodName"] = "CHolidayHrs";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","CHolidayHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatadtrsummary2["CHolidayHrs"] = $fdata;
//	TBreakLateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "TBreakLateMins";
	$fdata["GoodName"] = "TBreakLateMins";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","TBreakLateMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TBreakLateMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TBreakLateMins";

	
	
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








	$tdatadtrsummary2["TBreakLateMins"] = $fdata;
//	RegNDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "RegNDOTHrs";
	$fdata["GoodName"] = "RegNDOTHrs";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RegNDOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RegNDOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegNDOTHrs";

	
	
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








	$tdatadtrsummary2["RegNDOTHrs"] = $fdata;
//	RHNDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "RHNDOTHrs";
	$fdata["GoodName"] = "RHNDOTHrs";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RHNDOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatadtrsummary2["RHNDOTHrs"] = $fdata;
//	SHNDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "SHNDOTHrs";
	$fdata["GoodName"] = "SHNDOTHrs";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","SHNDOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatadtrsummary2["SHNDOTHrs"] = $fdata;
//	CHNDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "CHNDOTHrs";
	$fdata["GoodName"] = "CHNDOTHrs";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","CHNDOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CHNDOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHNDOTHrs";

	
	
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








	$tdatadtrsummary2["CHNDOTHrs"] = $fdata;
//	RDNDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "RDNDOTHrs";
	$fdata["GoodName"] = "RDNDOTHrs";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RDNDOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatadtrsummary2["RDNDOTHrs"] = $fdata;
//	DHh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "DHh";
	$fdata["GoodName"] = "DHh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","DHh");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DHh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHh";

	
	
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








	$tdatadtrsummary2["DHh"] = $fdata;
//	DHRDh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "DHRDh";
	$fdata["GoodName"] = "DHRDh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","DHRDh");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DHRDh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHRDh";

	
	
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








	$tdatadtrsummary2["DHRDh"] = $fdata;
//	DHOTh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "DHOTh";
	$fdata["GoodName"] = "DHOTh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","DHOTh");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DHOTh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHOTh";

	
	
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








	$tdatadtrsummary2["DHOTh"] = $fdata;
//	DHRDOTh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "DHRDOTh";
	$fdata["GoodName"] = "DHRDOTh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","DHRDOTh");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DHRDOTh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHRDOTh";

	
	
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








	$tdatadtrsummary2["DHRDOTh"] = $fdata;
//	SHRDNDh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "SHRDNDh";
	$fdata["GoodName"] = "SHRDNDh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","SHRDNDh");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHRDNDh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHRDNDh";

	
	
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








	$tdatadtrsummary2["SHRDNDh"] = $fdata;
//	RHRDNDh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "RHRDNDh";
	$fdata["GoodName"] = "RHRDNDh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RHRDNDh");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHRDNDh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHRDNDh";

	
	
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








	$tdatadtrsummary2["RHRDNDh"] = $fdata;
//	SHRDNDOTh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "SHRDNDOTh";
	$fdata["GoodName"] = "SHRDNDOTh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","SHRDNDOTh");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHRDNDOTh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHRDNDOTh";

	
	
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








	$tdatadtrsummary2["SHRDNDOTh"] = $fdata;
//	RHRDNDOTh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "RHRDNDOTh";
	$fdata["GoodName"] = "RHRDNDOTh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RHRDNDOTh");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHRDNDOTh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHRDNDOTh";

	
	
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








	$tdatadtrsummary2["RHRDNDOTh"] = $fdata;
//	DHNDh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "DHNDh";
	$fdata["GoodName"] = "DHNDh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","DHNDh");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DHNDh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHNDh";

	
	
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








	$tdatadtrsummary2["DHNDh"] = $fdata;
//	DHRDNDh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "DHRDNDh";
	$fdata["GoodName"] = "DHRDNDh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","DHRDNDh");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DHRDNDh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHRDNDh";

	
	
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








	$tdatadtrsummary2["DHRDNDh"] = $fdata;
//	DHNDOTh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "DHNDOTh";
	$fdata["GoodName"] = "DHNDOTh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","DHNDOTh");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DHNDOTh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHNDOTh";

	
	
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








	$tdatadtrsummary2["DHNDOTh"] = $fdata;
//	DHRDNDOTh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "DHRDNDOTh";
	$fdata["GoodName"] = "DHRDNDOTh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","DHRDNDOTh");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DHRDNDOTh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHRDNDOTh";

	
	
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








	$tdatadtrsummary2["DHRDNDOTh"] = $fdata;


$tables_data["dtrsummary2"]=&$tdatadtrsummary2;
$field_labels["dtrsummary2"] = &$fieldLabelsdtrsummary2;
$fieldToolTips["dtrsummary2"] = &$fieldToolTipsdtrsummary2;
$placeHolders["dtrsummary2"] = &$placeHoldersdtrsummary2;
$page_titles["dtrsummary2"] = &$pageTitlesdtrsummary2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dtrsummary2"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dtrsummary2"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_dtrsummary2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EmployeeID,  UserName,  Division,  WageType,  RegWD,  DWork,  Absent,  TLates,  LateMins,  UndertimeMins,  ExcessHrs,  RegOTHrs,  RHOTHrs,  SHOTHRs,  CHOTHrs,  RDOTHrs,  NDHrs,  NDOTHrs,  RDHrs,  RegNDHrs,  RHNDHrs,  SHNDHrs,  CHNDHrs,  RDNDHrs,  VLDays,  SLDays,  ELDays,  PLDays,  TrODays,  RLink,  NDMealAllowance,  Employer,  RHolidayHrs,  SHolidayHrs,  CHolidayHrs,  TBreakLateMins,  RegNDOTHrs,  RHNDOTHrs,  SHNDOTHrs,  CHNDOTHrs,  RDNDOTHrs,  DHh,  DHRDh,  DHOTh,  DHRDOTh,  SHRDNDh,  RHRDNDh,  SHRDNDOTh,  RHRDNDOTh,  DHNDh,  DHRDNDh,  DHNDOTh,  DHRDNDOTh";
$proto0["m_strFrom"] = "FROM dtrsummary2";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY UserName";
	
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
	"m_strName" => "EmployeeID",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto6["m_sql"] = "EmployeeID";
$proto6["m_srcTableName"] = "dtrsummary2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto8["m_sql"] = "UserName";
$proto8["m_srcTableName"] = "dtrsummary2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto10["m_sql"] = "Division";
$proto10["m_srcTableName"] = "dtrsummary2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "WageType",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto12["m_sql"] = "WageType";
$proto12["m_srcTableName"] = "dtrsummary2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "RegWD",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto14["m_sql"] = "RegWD";
$proto14["m_srcTableName"] = "dtrsummary2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DWork",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto16["m_sql"] = "DWork";
$proto16["m_srcTableName"] = "dtrsummary2";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Absent",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto18["m_sql"] = "Absent";
$proto18["m_srcTableName"] = "dtrsummary2";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "TLates",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto20["m_sql"] = "TLates";
$proto20["m_srcTableName"] = "dtrsummary2";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "LateMins",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto22["m_sql"] = "LateMins";
$proto22["m_srcTableName"] = "dtrsummary2";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "UndertimeMins",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto24["m_sql"] = "UndertimeMins";
$proto24["m_srcTableName"] = "dtrsummary2";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ExcessHrs",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto26["m_sql"] = "ExcessHrs";
$proto26["m_srcTableName"] = "dtrsummary2";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "RegOTHrs",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto28["m_sql"] = "RegOTHrs";
$proto28["m_srcTableName"] = "dtrsummary2";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "RHOTHrs",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto30["m_sql"] = "RHOTHrs";
$proto30["m_srcTableName"] = "dtrsummary2";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOTHRs",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto32["m_sql"] = "SHOTHRs";
$proto32["m_srcTableName"] = "dtrsummary2";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "CHOTHrs",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto34["m_sql"] = "CHOTHrs";
$proto34["m_srcTableName"] = "dtrsummary2";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "RDOTHrs",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto36["m_sql"] = "RDOTHrs";
$proto36["m_srcTableName"] = "dtrsummary2";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "NDHrs",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto38["m_sql"] = "NDHrs";
$proto38["m_srcTableName"] = "dtrsummary2";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "NDOTHrs",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto40["m_sql"] = "NDOTHrs";
$proto40["m_srcTableName"] = "dtrsummary2";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "RDHrs",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto42["m_sql"] = "RDHrs";
$proto42["m_srcTableName"] = "dtrsummary2";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "RegNDHrs",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto44["m_sql"] = "RegNDHrs";
$proto44["m_srcTableName"] = "dtrsummary2";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "RHNDHrs",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto46["m_sql"] = "RHNDHrs";
$proto46["m_srcTableName"] = "dtrsummary2";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "SHNDHrs",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto48["m_sql"] = "SHNDHrs";
$proto48["m_srcTableName"] = "dtrsummary2";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "CHNDHrs",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto50["m_sql"] = "CHNDHrs";
$proto50["m_srcTableName"] = "dtrsummary2";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "RDNDHrs",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto52["m_sql"] = "RDNDHrs";
$proto52["m_srcTableName"] = "dtrsummary2";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "VLDays",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto54["m_sql"] = "VLDays";
$proto54["m_srcTableName"] = "dtrsummary2";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "SLDays",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto56["m_sql"] = "SLDays";
$proto56["m_srcTableName"] = "dtrsummary2";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "ELDays",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto58["m_sql"] = "ELDays";
$proto58["m_srcTableName"] = "dtrsummary2";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "PLDays",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto60["m_sql"] = "PLDays";
$proto60["m_srcTableName"] = "dtrsummary2";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "TrODays",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto62["m_sql"] = "TrODays";
$proto62["m_srcTableName"] = "dtrsummary2";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "RLink",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto64["m_sql"] = "RLink";
$proto64["m_srcTableName"] = "dtrsummary2";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "NDMealAllowance",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto66["m_sql"] = "NDMealAllowance";
$proto66["m_srcTableName"] = "dtrsummary2";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto68["m_sql"] = "Employer";
$proto68["m_srcTableName"] = "dtrsummary2";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "RHolidayHrs",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto70["m_sql"] = "RHolidayHrs";
$proto70["m_srcTableName"] = "dtrsummary2";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "SHolidayHrs",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto72["m_sql"] = "SHolidayHrs";
$proto72["m_srcTableName"] = "dtrsummary2";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "CHolidayHrs",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto74["m_sql"] = "CHolidayHrs";
$proto74["m_srcTableName"] = "dtrsummary2";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "TBreakLateMins",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto76["m_sql"] = "TBreakLateMins";
$proto76["m_srcTableName"] = "dtrsummary2";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "RegNDOTHrs",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto78["m_sql"] = "RegNDOTHrs";
$proto78["m_srcTableName"] = "dtrsummary2";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "RHNDOTHrs",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto80["m_sql"] = "RHNDOTHrs";
$proto80["m_srcTableName"] = "dtrsummary2";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "SHNDOTHrs",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto82["m_sql"] = "SHNDOTHrs";
$proto82["m_srcTableName"] = "dtrsummary2";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "CHNDOTHrs",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto84["m_sql"] = "CHNDOTHrs";
$proto84["m_srcTableName"] = "dtrsummary2";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "RDNDOTHrs",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto86["m_sql"] = "RDNDOTHrs";
$proto86["m_srcTableName"] = "dtrsummary2";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "DHh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto88["m_sql"] = "DHh";
$proto88["m_srcTableName"] = "dtrsummary2";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto90["m_sql"] = "DHRDh";
$proto90["m_srcTableName"] = "dtrsummary2";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "DHOTh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto92["m_sql"] = "DHOTh";
$proto92["m_srcTableName"] = "dtrsummary2";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDOTh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto94["m_sql"] = "DHRDOTh";
$proto94["m_srcTableName"] = "dtrsummary2";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDNDh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto96["m_sql"] = "SHRDNDh";
$proto96["m_srcTableName"] = "dtrsummary2";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDNDh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto98["m_sql"] = "RHRDNDh";
$proto98["m_srcTableName"] = "dtrsummary2";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDNDOTh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto100["m_sql"] = "SHRDNDOTh";
$proto100["m_srcTableName"] = "dtrsummary2";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDNDOTh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto102["m_sql"] = "RHRDNDOTh";
$proto102["m_srcTableName"] = "dtrsummary2";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "DHNDh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto104["m_sql"] = "DHNDh";
$proto104["m_srcTableName"] = "dtrsummary2";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDNDh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto106["m_sql"] = "DHRDNDh";
$proto106["m_srcTableName"] = "dtrsummary2";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "DHNDOTh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto108["m_sql"] = "DHNDOTh";
$proto108["m_srcTableName"] = "dtrsummary2";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDNDOTh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto110["m_sql"] = "DHRDNDOTh";
$proto110["m_srcTableName"] = "dtrsummary2";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto112=array();
$proto112["m_link"] = "SQLL_MAIN";
			$proto113=array();
$proto113["m_strName"] = "dtrsummary2";
$proto113["m_srcTableName"] = "dtrsummary2";
$proto113["m_columns"] = array();
$proto113["m_columns"][] = "EmployeeID";
$proto113["m_columns"][] = "UserName";
$proto113["m_columns"][] = "Division";
$proto113["m_columns"][] = "WageType";
$proto113["m_columns"][] = "RegWD";
$proto113["m_columns"][] = "DWork";
$proto113["m_columns"][] = "Absent";
$proto113["m_columns"][] = "TLates";
$proto113["m_columns"][] = "LateMins";
$proto113["m_columns"][] = "UndertimeMins";
$proto113["m_columns"][] = "ExcessHrs";
$proto113["m_columns"][] = "RegOTHrs";
$proto113["m_columns"][] = "RHOTHrs";
$proto113["m_columns"][] = "SHOTHRs";
$proto113["m_columns"][] = "CHOTHrs";
$proto113["m_columns"][] = "RDOTHrs";
$proto113["m_columns"][] = "NDHrs";
$proto113["m_columns"][] = "NDOTHrs";
$proto113["m_columns"][] = "RDHrs";
$proto113["m_columns"][] = "RegNDHrs";
$proto113["m_columns"][] = "RHNDHrs";
$proto113["m_columns"][] = "SHNDHrs";
$proto113["m_columns"][] = "CHNDHrs";
$proto113["m_columns"][] = "RDNDHrs";
$proto113["m_columns"][] = "VLDays";
$proto113["m_columns"][] = "SLDays";
$proto113["m_columns"][] = "ELDays";
$proto113["m_columns"][] = "PLDays";
$proto113["m_columns"][] = "TrODays";
$proto113["m_columns"][] = "RLink";
$proto113["m_columns"][] = "NDMealAllowance";
$proto113["m_columns"][] = "Employer";
$proto113["m_columns"][] = "RHolidayHrs";
$proto113["m_columns"][] = "SHolidayHrs";
$proto113["m_columns"][] = "CHolidayHrs";
$proto113["m_columns"][] = "TBreakLateMins";
$proto113["m_columns"][] = "RegNDOTHrs";
$proto113["m_columns"][] = "RHNDOTHrs";
$proto113["m_columns"][] = "SHNDOTHrs";
$proto113["m_columns"][] = "CHNDOTHrs";
$proto113["m_columns"][] = "RDNDOTHrs";
$proto113["m_columns"][] = "DHh";
$proto113["m_columns"][] = "DHRDh";
$proto113["m_columns"][] = "DHOTh";
$proto113["m_columns"][] = "DHRDOTh";
$proto113["m_columns"][] = "SHRDNDh";
$proto113["m_columns"][] = "RHRDNDh";
$proto113["m_columns"][] = "SHRDNDOTh";
$proto113["m_columns"][] = "RHRDNDOTh";
$proto113["m_columns"][] = "DHNDh";
$proto113["m_columns"][] = "DHRDNDh";
$proto113["m_columns"][] = "DHNDOTh";
$proto113["m_columns"][] = "DHRDNDOTh";
$obj = new SQLTable($proto113);

$proto112["m_table"] = $obj;
$proto112["m_sql"] = "dtrsummary2";
$proto112["m_alias"] = "";
$proto112["m_srcTableName"] = "dtrsummary2";
$proto114=array();
$proto114["m_sql"] = "";
$proto114["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto114["m_column"]=$obj;
$proto114["m_contained"] = array();
$proto114["m_strCase"] = "";
$proto114["m_havingmode"] = false;
$proto114["m_inBrackets"] = false;
$proto114["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto114);

$proto112["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto112);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto116=array();
						$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto116["m_column"]=$obj;
$proto116["m_bAsc"] = 1;
$proto116["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto116);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dtrsummary2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dtrsummary2 = createSqlQuery_dtrsummary2();


	
		;

																																																					

$tdatadtrsummary2[".sqlquery"] = $queryData_dtrsummary2;

$tableEvents["dtrsummary2"] = new eventsBase;
$tdatadtrsummary2[".hasEvents"] = false;

?>