<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapayrolltab = array();
	$tdatapayrolltab[".truncateText"] = true;
	$tdatapayrolltab[".NumberOfChars"] = 80;
	$tdatapayrolltab[".ShortName"] = "payrolltab";
	$tdatapayrolltab[".OwnerID"] = "";
	$tdatapayrolltab[".OriginalTable"] = "payrolltab";

//	field labels
$fieldLabelspayrolltab = array();
$fieldToolTipspayrolltab = array();
$pageTitlespayrolltab = array();
$placeHolderspayrolltab = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspayrolltab["English"] = array();
	$fieldToolTipspayrolltab["English"] = array();
	$placeHolderspayrolltab["English"] = array();
	$pageTitlespayrolltab["English"] = array();
	$fieldLabelspayrolltab["English"]["PtabID"] = "Ptab ID";
	$fieldToolTipspayrolltab["English"]["PtabID"] = "";
	$placeHolderspayrolltab["English"]["PtabID"] = "";
	$fieldLabelspayrolltab["English"]["WageType"] = "Wage Type";
	$fieldToolTipspayrolltab["English"]["WageType"] = "";
	$placeHolderspayrolltab["English"]["WageType"] = "";
	$fieldLabelspayrolltab["English"]["Status"] = "Status";
	$fieldToolTipspayrolltab["English"]["Status"] = "";
	$placeHolderspayrolltab["English"]["Status"] = "";
	$fieldLabelspayrolltab["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipspayrolltab["English"]["EmployeeID"] = "";
	$placeHolderspayrolltab["English"]["EmployeeID"] = "";
	$fieldLabelspayrolltab["English"]["BasicMonthly"] = "Basic Monthly";
	$fieldToolTipspayrolltab["English"]["BasicMonthly"] = "";
	$placeHolderspayrolltab["English"]["BasicMonthly"] = "";
	$fieldLabelspayrolltab["English"]["BasicDaily"] = "Basic Daily";
	$fieldToolTipspayrolltab["English"]["BasicDaily"] = "";
	$placeHolderspayrolltab["English"]["BasicDaily"] = "";
	$fieldLabelspayrolltab["English"]["DWork"] = "DWork";
	$fieldToolTipspayrolltab["English"]["DWork"] = "";
	$placeHolderspayrolltab["English"]["DWork"] = "";
	$fieldLabelspayrolltab["English"]["Absent"] = "Absent";
	$fieldToolTipspayrolltab["English"]["Absent"] = "";
	$placeHolderspayrolltab["English"]["Absent"] = "";
	$fieldLabelspayrolltab["English"]["LateMins"] = "Late Mins";
	$fieldToolTipspayrolltab["English"]["LateMins"] = "";
	$placeHolderspayrolltab["English"]["LateMins"] = "";
	$fieldLabelspayrolltab["English"]["UndertimeMins"] = "Undertime Mins";
	$fieldToolTipspayrolltab["English"]["UndertimeMins"] = "";
	$placeHolderspayrolltab["English"]["UndertimeMins"] = "";
	$fieldLabelspayrolltab["English"]["RHolidayHrs"] = "RHoliday Hrs";
	$fieldToolTipspayrolltab["English"]["RHolidayHrs"] = "";
	$placeHolderspayrolltab["English"]["RHolidayHrs"] = "";
	$fieldLabelspayrolltab["English"]["SHolidayHrs"] = "SHoliday Hrs";
	$fieldToolTipspayrolltab["English"]["SHolidayHrs"] = "";
	$placeHolderspayrolltab["English"]["SHolidayHrs"] = "";
	$fieldLabelspayrolltab["English"]["CHolidayHrs"] = "CHoliday Hrs";
	$fieldToolTipspayrolltab["English"]["CHolidayHrs"] = "";
	$placeHolderspayrolltab["English"]["CHolidayHrs"] = "";
	$fieldLabelspayrolltab["English"]["ExcessHrs"] = "Excess Hrs";
	$fieldToolTipspayrolltab["English"]["ExcessHrs"] = "";
	$placeHolderspayrolltab["English"]["ExcessHrs"] = "";
	$fieldLabelspayrolltab["English"]["RegOTHrs"] = "Reg OTHrs";
	$fieldToolTipspayrolltab["English"]["RegOTHrs"] = "";
	$placeHolderspayrolltab["English"]["RegOTHrs"] = "";
	$fieldLabelspayrolltab["English"]["RHOTHrs"] = "RHOTHrs";
	$fieldToolTipspayrolltab["English"]["RHOTHrs"] = "";
	$placeHolderspayrolltab["English"]["RHOTHrs"] = "";
	$fieldLabelspayrolltab["English"]["SHOTHRs"] = "SHOTHRs";
	$fieldToolTipspayrolltab["English"]["SHOTHRs"] = "";
	$placeHolderspayrolltab["English"]["SHOTHRs"] = "";
	$fieldLabelspayrolltab["English"]["CHOTHrs"] = "CHOTHrs";
	$fieldToolTipspayrolltab["English"]["CHOTHrs"] = "";
	$placeHolderspayrolltab["English"]["CHOTHrs"] = "";
	$fieldLabelspayrolltab["English"]["RDOTHrs"] = "RDOTHrs";
	$fieldToolTipspayrolltab["English"]["RDOTHrs"] = "";
	$placeHolderspayrolltab["English"]["RDOTHrs"] = "";
	$fieldLabelspayrolltab["English"]["NDHrs"] = "NDHrs";
	$fieldToolTipspayrolltab["English"]["NDHrs"] = "";
	$placeHolderspayrolltab["English"]["NDHrs"] = "";
	$fieldLabelspayrolltab["English"]["RDHrs"] = "RDHrs";
	$fieldToolTipspayrolltab["English"]["RDHrs"] = "";
	$placeHolderspayrolltab["English"]["RDHrs"] = "";
	$fieldLabelspayrolltab["English"]["RegNDHrs"] = "Reg NDHrs";
	$fieldToolTipspayrolltab["English"]["RegNDHrs"] = "";
	$placeHolderspayrolltab["English"]["RegNDHrs"] = "";
	$fieldLabelspayrolltab["English"]["RHNDHrs"] = "RHNDHrs";
	$fieldToolTipspayrolltab["English"]["RHNDHrs"] = "";
	$placeHolderspayrolltab["English"]["RHNDHrs"] = "";
	$fieldLabelspayrolltab["English"]["SHNDHrs"] = "SHNDHrs";
	$fieldToolTipspayrolltab["English"]["SHNDHrs"] = "";
	$placeHolderspayrolltab["English"]["SHNDHrs"] = "";
	$fieldLabelspayrolltab["English"]["CHNDHrs"] = "CHNDHrs";
	$fieldToolTipspayrolltab["English"]["CHNDHrs"] = "";
	$placeHolderspayrolltab["English"]["CHNDHrs"] = "";
	$fieldLabelspayrolltab["English"]["RDNDHrs"] = "RDNDHrs";
	$fieldToolTipspayrolltab["English"]["RDNDHrs"] = "";
	$placeHolderspayrolltab["English"]["RDNDHrs"] = "";
	$fieldLabelspayrolltab["English"]["VLDays"] = "VLDays";
	$fieldToolTipspayrolltab["English"]["VLDays"] = "";
	$placeHolderspayrolltab["English"]["VLDays"] = "";
	$fieldLabelspayrolltab["English"]["SLDays"] = "SLDays";
	$fieldToolTipspayrolltab["English"]["SLDays"] = "";
	$placeHolderspayrolltab["English"]["SLDays"] = "";
	$fieldLabelspayrolltab["English"]["ELDays"] = "ELDays";
	$fieldToolTipspayrolltab["English"]["ELDays"] = "";
	$placeHolderspayrolltab["English"]["ELDays"] = "";
	$fieldLabelspayrolltab["English"]["PLDays"] = "PLDays";
	$fieldToolTipspayrolltab["English"]["PLDays"] = "";
	$placeHolderspayrolltab["English"]["PLDays"] = "";
	$fieldLabelspayrolltab["English"]["TrODays"] = "Tr ODays";
	$fieldToolTipspayrolltab["English"]["TrODays"] = "";
	$placeHolderspayrolltab["English"]["TrODays"] = "";
	$fieldLabelspayrolltab["English"]["FromDate"] = "From Date";
	$fieldToolTipspayrolltab["English"]["FromDate"] = "";
	$placeHolderspayrolltab["English"]["FromDate"] = "";
	$fieldLabelspayrolltab["English"]["ToDate"] = "To Date";
	$fieldToolTipspayrolltab["English"]["ToDate"] = "";
	$placeHolderspayrolltab["English"]["ToDate"] = "";
	$fieldLabelspayrolltab["English"]["UserName"] = "Employee";
	$fieldToolTipspayrolltab["English"]["UserName"] = "";
	$placeHolderspayrolltab["English"]["UserName"] = "";
	$fieldLabelspayrolltab["English"]["AllowancePerDay"] = "Allowance Per Day";
	$fieldToolTipspayrolltab["English"]["AllowancePerDay"] = "";
	$placeHolderspayrolltab["English"]["AllowancePerDay"] = "";
	$fieldLabelspayrolltab["English"]["VLBalance"] = "VLBalance";
	$fieldToolTipspayrolltab["English"]["VLBalance"] = "";
	$placeHolderspayrolltab["English"]["VLBalance"] = "";
	$fieldLabelspayrolltab["English"]["SLBalance"] = "SLBalance";
	$fieldToolTipspayrolltab["English"]["SLBalance"] = "";
	$placeHolderspayrolltab["English"]["SLBalance"] = "";
	$fieldLabelspayrolltab["English"]["ELBalance"] = "ELBalance";
	$fieldToolTipspayrolltab["English"]["ELBalance"] = "";
	$placeHolderspayrolltab["English"]["ELBalance"] = "";
	$fieldLabelspayrolltab["English"]["PLBalance"] = "PLBalance";
	$fieldToolTipspayrolltab["English"]["PLBalance"] = "";
	$placeHolderspayrolltab["English"]["PLBalance"] = "";
	$fieldLabelspayrolltab["English"]["AgencyShare"] = "Agency Share";
	$fieldToolTipspayrolltab["English"]["AgencyShare"] = "";
	$placeHolderspayrolltab["English"]["AgencyShare"] = "";
	$fieldLabelspayrolltab["English"]["NDMealAllowance"] = "NDMeal Allowance";
	$fieldToolTipspayrolltab["English"]["NDMealAllowance"] = "";
	$placeHolderspayrolltab["English"]["NDMealAllowance"] = "";
	$fieldLabelspayrolltab["English"]["Division"] = "Division";
	$fieldToolTipspayrolltab["English"]["Division"] = "";
	$placeHolderspayrolltab["English"]["Division"] = "";
	$fieldLabelspayrolltab["English"]["Employer"] = "Employer";
	$fieldToolTipspayrolltab["English"]["Employer"] = "";
	$placeHolderspayrolltab["English"]["Employer"] = "";
	$fieldLabelspayrolltab["English"]["PayrollID"] = "Payroll ID";
	$fieldToolTipspayrolltab["English"]["PayrollID"] = "";
	$placeHolderspayrolltab["English"]["PayrollID"] = "";
	$fieldLabelspayrolltab["English"]["Email"] = "Email";
	$fieldToolTipspayrolltab["English"]["Email"] = "";
	$placeHolderspayrolltab["English"]["Email"] = "";
	$fieldLabelspayrolltab["English"]["Locked"] = "Locked";
	$fieldToolTipspayrolltab["English"]["Locked"] = "";
	$placeHolderspayrolltab["English"]["Locked"] = "";
	$fieldLabelspayrolltab["English"]["Position"] = "Position";
	$fieldToolTipspayrolltab["English"]["Position"] = "";
	$placeHolderspayrolltab["English"]["Position"] = "";
	if (count($fieldToolTipspayrolltab["English"]))
		$tdatapayrolltab[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspayrolltab[""] = array();
	$fieldToolTipspayrolltab[""] = array();
	$placeHolderspayrolltab[""] = array();
	$pageTitlespayrolltab[""] = array();
	if (count($fieldToolTipspayrolltab[""]))
		$tdatapayrolltab[".isUseToolTips"] = true;
}


	$tdatapayrolltab[".NCSearch"] = true;



$tdatapayrolltab[".shortTableName"] = "payrolltab";
$tdatapayrolltab[".nSecOptions"] = 0;
$tdatapayrolltab[".recsPerRowPrint"] = 1;
$tdatapayrolltab[".mainTableOwnerID"] = "";
$tdatapayrolltab[".moveNext"] = 1;
$tdatapayrolltab[".entityType"] = 0;

$tdatapayrolltab[".strOriginalTableName"] = "payrolltab";

	



$tdatapayrolltab[".showAddInPopup"] = false;

$tdatapayrolltab[".showEditInPopup"] = false;

$tdatapayrolltab[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapayrolltab[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapayrolltab[".fieldsForRegister"] = array();

$tdatapayrolltab[".listAjax"] = false;

	$tdatapayrolltab[".audit"] = false;

	$tdatapayrolltab[".locking"] = false;

$tdatapayrolltab[".edit"] = true;
$tdatapayrolltab[".afterEditAction"] = 1;
$tdatapayrolltab[".closePopupAfterEdit"] = 1;
$tdatapayrolltab[".afterEditActionDetTable"] = "";

$tdatapayrolltab[".add"] = true;
$tdatapayrolltab[".afterAddAction"] = 1;
$tdatapayrolltab[".closePopupAfterAdd"] = 1;
$tdatapayrolltab[".afterAddActionDetTable"] = "";

$tdatapayrolltab[".list"] = true;

$tdatapayrolltab[".inlineEdit"] = true;

$tdatapayrolltab[".updateSelected"] = true;

$tdatapayrolltab[".reorderRecordsByHeader"] = true;


$tdatapayrolltab[".exportFormatting"] = 2;
$tdatapayrolltab[".exportDelimiter"] = ",";
		
$tdatapayrolltab[".inlineAdd"] = true;
$tdatapayrolltab[".view"] = true;

$tdatapayrolltab[".import"] = true;

$tdatapayrolltab[".exportTo"] = true;

$tdatapayrolltab[".printFriendly"] = true;

$tdatapayrolltab[".delete"] = true;

$tdatapayrolltab[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapayrolltab[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapayrolltab[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapayrolltab[".searchSaving"] = false;
//

$tdatapayrolltab[".showSearchPanel"] = true;
		$tdatapayrolltab[".flexibleSearch"] = true;

$tdatapayrolltab[".isUseAjaxSuggest"] = true;

$tdatapayrolltab[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																							
																																																																																																		

$tdatapayrolltab[".ajaxCodeSnippetAdded"] = false;

$tdatapayrolltab[".buttonsAdded"] = true;

$tdatapayrolltab[".addPageEvents"] = true;

// use timepicker for search panel
$tdatapayrolltab[".isUseTimeForSearch"] = false;



$tdatapayrolltab[".badgeColor"] = "4682b4";


$tdatapayrolltab[".allSearchFields"] = array();
$tdatapayrolltab[".filterFields"] = array();
$tdatapayrolltab[".requiredSearchFields"] = array();

$tdatapayrolltab[".allSearchFields"][] = "PtabID";
	$tdatapayrolltab[".allSearchFields"][] = "Locked";
	$tdatapayrolltab[".allSearchFields"][] = "Email";
	$tdatapayrolltab[".allSearchFields"][] = "PayrollID";
	$tdatapayrolltab[".allSearchFields"][] = "EmployeeID";
	$tdatapayrolltab[".allSearchFields"][] = "UserName";
	$tdatapayrolltab[".allSearchFields"][] = "Position";
	$tdatapayrolltab[".allSearchFields"][] = "Division";
	$tdatapayrolltab[".allSearchFields"][] = "Employer";
	$tdatapayrolltab[".allSearchFields"][] = "WageType";
	$tdatapayrolltab[".allSearchFields"][] = "Status";
	$tdatapayrolltab[".allSearchFields"][] = "FromDate";
	$tdatapayrolltab[".allSearchFields"][] = "ToDate";
	$tdatapayrolltab[".allSearchFields"][] = "BasicMonthly";
	$tdatapayrolltab[".allSearchFields"][] = "BasicDaily";
	$tdatapayrolltab[".allSearchFields"][] = "DWork";
	$tdatapayrolltab[".allSearchFields"][] = "Absent";
	$tdatapayrolltab[".allSearchFields"][] = "LateMins";
	$tdatapayrolltab[".allSearchFields"][] = "UndertimeMins";
	$tdatapayrolltab[".allSearchFields"][] = "RHolidayHrs";
	$tdatapayrolltab[".allSearchFields"][] = "SHolidayHrs";
	$tdatapayrolltab[".allSearchFields"][] = "CHolidayHrs";
	$tdatapayrolltab[".allSearchFields"][] = "ExcessHrs";
	$tdatapayrolltab[".allSearchFields"][] = "RegOTHrs";
	$tdatapayrolltab[".allSearchFields"][] = "RHOTHrs";
	$tdatapayrolltab[".allSearchFields"][] = "SHOTHRs";
	$tdatapayrolltab[".allSearchFields"][] = "CHOTHrs";
	$tdatapayrolltab[".allSearchFields"][] = "TrODays";
	$tdatapayrolltab[".allSearchFields"][] = "RDOTHrs";
	$tdatapayrolltab[".allSearchFields"][] = "NDHrs";
	$tdatapayrolltab[".allSearchFields"][] = "RDHrs";
	$tdatapayrolltab[".allSearchFields"][] = "RegNDHrs";
	$tdatapayrolltab[".allSearchFields"][] = "RHNDHrs";
	$tdatapayrolltab[".allSearchFields"][] = "SHNDHrs";
	$tdatapayrolltab[".allSearchFields"][] = "CHNDHrs";
	$tdatapayrolltab[".allSearchFields"][] = "RDNDHrs";
	$tdatapayrolltab[".allSearchFields"][] = "VLDays";
	$tdatapayrolltab[".allSearchFields"][] = "SLDays";
	$tdatapayrolltab[".allSearchFields"][] = "ELDays";
	$tdatapayrolltab[".allSearchFields"][] = "PLDays";
	$tdatapayrolltab[".allSearchFields"][] = "PLBalance";
	$tdatapayrolltab[".allSearchFields"][] = "ELBalance";
	$tdatapayrolltab[".allSearchFields"][] = "SLBalance";
	$tdatapayrolltab[".allSearchFields"][] = "VLBalance";
	$tdatapayrolltab[".allSearchFields"][] = "AllowancePerDay";
	$tdatapayrolltab[".allSearchFields"][] = "AgencyShare";
	$tdatapayrolltab[".allSearchFields"][] = "NDMealAllowance";
	

$tdatapayrolltab[".googleLikeFields"] = array();
$tdatapayrolltab[".googleLikeFields"][] = "PtabID";
$tdatapayrolltab[".googleLikeFields"][] = "EmployeeID";
$tdatapayrolltab[".googleLikeFields"][] = "WageType";
$tdatapayrolltab[".googleLikeFields"][] = "Status";
$tdatapayrolltab[".googleLikeFields"][] = "BasicMonthly";
$tdatapayrolltab[".googleLikeFields"][] = "BasicDaily";
$tdatapayrolltab[".googleLikeFields"][] = "DWork";
$tdatapayrolltab[".googleLikeFields"][] = "Absent";
$tdatapayrolltab[".googleLikeFields"][] = "LateMins";
$tdatapayrolltab[".googleLikeFields"][] = "UndertimeMins";
$tdatapayrolltab[".googleLikeFields"][] = "RHolidayHrs";
$tdatapayrolltab[".googleLikeFields"][] = "SHolidayHrs";
$tdatapayrolltab[".googleLikeFields"][] = "CHolidayHrs";
$tdatapayrolltab[".googleLikeFields"][] = "ExcessHrs";
$tdatapayrolltab[".googleLikeFields"][] = "RegOTHrs";
$tdatapayrolltab[".googleLikeFields"][] = "RHOTHrs";
$tdatapayrolltab[".googleLikeFields"][] = "SHOTHRs";
$tdatapayrolltab[".googleLikeFields"][] = "CHOTHrs";
$tdatapayrolltab[".googleLikeFields"][] = "RDOTHrs";
$tdatapayrolltab[".googleLikeFields"][] = "NDHrs";
$tdatapayrolltab[".googleLikeFields"][] = "RDHrs";
$tdatapayrolltab[".googleLikeFields"][] = "RegNDHrs";
$tdatapayrolltab[".googleLikeFields"][] = "RHNDHrs";
$tdatapayrolltab[".googleLikeFields"][] = "SHNDHrs";
$tdatapayrolltab[".googleLikeFields"][] = "CHNDHrs";
$tdatapayrolltab[".googleLikeFields"][] = "RDNDHrs";
$tdatapayrolltab[".googleLikeFields"][] = "VLDays";
$tdatapayrolltab[".googleLikeFields"][] = "SLDays";
$tdatapayrolltab[".googleLikeFields"][] = "ELDays";
$tdatapayrolltab[".googleLikeFields"][] = "PLDays";
$tdatapayrolltab[".googleLikeFields"][] = "TrODays";
$tdatapayrolltab[".googleLikeFields"][] = "FromDate";
$tdatapayrolltab[".googleLikeFields"][] = "ToDate";
$tdatapayrolltab[".googleLikeFields"][] = "UserName";
$tdatapayrolltab[".googleLikeFields"][] = "AllowancePerDay";
$tdatapayrolltab[".googleLikeFields"][] = "VLBalance";
$tdatapayrolltab[".googleLikeFields"][] = "SLBalance";
$tdatapayrolltab[".googleLikeFields"][] = "ELBalance";
$tdatapayrolltab[".googleLikeFields"][] = "PLBalance";
$tdatapayrolltab[".googleLikeFields"][] = "AgencyShare";
$tdatapayrolltab[".googleLikeFields"][] = "NDMealAllowance";
$tdatapayrolltab[".googleLikeFields"][] = "Division";
$tdatapayrolltab[".googleLikeFields"][] = "Employer";
$tdatapayrolltab[".googleLikeFields"][] = "PayrollID";
$tdatapayrolltab[".googleLikeFields"][] = "Email";
$tdatapayrolltab[".googleLikeFields"][] = "Locked";
$tdatapayrolltab[".googleLikeFields"][] = "Position";


$tdatapayrolltab[".advSearchFields"] = array();
$tdatapayrolltab[".advSearchFields"][] = "PtabID";
$tdatapayrolltab[".advSearchFields"][] = "Locked";
$tdatapayrolltab[".advSearchFields"][] = "Email";
$tdatapayrolltab[".advSearchFields"][] = "PayrollID";
$tdatapayrolltab[".advSearchFields"][] = "EmployeeID";
$tdatapayrolltab[".advSearchFields"][] = "UserName";
$tdatapayrolltab[".advSearchFields"][] = "Position";
$tdatapayrolltab[".advSearchFields"][] = "Division";
$tdatapayrolltab[".advSearchFields"][] = "Employer";
$tdatapayrolltab[".advSearchFields"][] = "WageType";
$tdatapayrolltab[".advSearchFields"][] = "Status";
$tdatapayrolltab[".advSearchFields"][] = "FromDate";
$tdatapayrolltab[".advSearchFields"][] = "ToDate";
$tdatapayrolltab[".advSearchFields"][] = "BasicMonthly";
$tdatapayrolltab[".advSearchFields"][] = "BasicDaily";
$tdatapayrolltab[".advSearchFields"][] = "DWork";
$tdatapayrolltab[".advSearchFields"][] = "Absent";
$tdatapayrolltab[".advSearchFields"][] = "LateMins";
$tdatapayrolltab[".advSearchFields"][] = "UndertimeMins";
$tdatapayrolltab[".advSearchFields"][] = "RHolidayHrs";
$tdatapayrolltab[".advSearchFields"][] = "SHolidayHrs";
$tdatapayrolltab[".advSearchFields"][] = "CHolidayHrs";
$tdatapayrolltab[".advSearchFields"][] = "ExcessHrs";
$tdatapayrolltab[".advSearchFields"][] = "RegOTHrs";
$tdatapayrolltab[".advSearchFields"][] = "RHOTHrs";
$tdatapayrolltab[".advSearchFields"][] = "SHOTHRs";
$tdatapayrolltab[".advSearchFields"][] = "CHOTHrs";
$tdatapayrolltab[".advSearchFields"][] = "TrODays";
$tdatapayrolltab[".advSearchFields"][] = "RDOTHrs";
$tdatapayrolltab[".advSearchFields"][] = "NDHrs";
$tdatapayrolltab[".advSearchFields"][] = "RDHrs";
$tdatapayrolltab[".advSearchFields"][] = "RegNDHrs";
$tdatapayrolltab[".advSearchFields"][] = "RHNDHrs";
$tdatapayrolltab[".advSearchFields"][] = "SHNDHrs";
$tdatapayrolltab[".advSearchFields"][] = "CHNDHrs";
$tdatapayrolltab[".advSearchFields"][] = "RDNDHrs";
$tdatapayrolltab[".advSearchFields"][] = "VLDays";
$tdatapayrolltab[".advSearchFields"][] = "SLDays";
$tdatapayrolltab[".advSearchFields"][] = "ELDays";
$tdatapayrolltab[".advSearchFields"][] = "PLDays";
$tdatapayrolltab[".advSearchFields"][] = "PLBalance";
$tdatapayrolltab[".advSearchFields"][] = "ELBalance";
$tdatapayrolltab[".advSearchFields"][] = "SLBalance";
$tdatapayrolltab[".advSearchFields"][] = "VLBalance";
$tdatapayrolltab[".advSearchFields"][] = "AllowancePerDay";
$tdatapayrolltab[".advSearchFields"][] = "AgencyShare";
$tdatapayrolltab[".advSearchFields"][] = "NDMealAllowance";

$tdatapayrolltab[".tableType"] = "list";

$tdatapayrolltab[".printerPageOrientation"] = 0;
$tdatapayrolltab[".nPrinterPageScale"] = 100;

$tdatapayrolltab[".nPrinterSplitRecords"] = 40;

$tdatapayrolltab[".nPrinterPDFSplitRecords"] = 40;



$tdatapayrolltab[".geocodingEnabled"] = false;





$tdatapayrolltab[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatapayrolltab[".pageSize"] = 20;

$tdatapayrolltab[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapayrolltab[".strOrderBy"] = $tstrOrderBy;

$tdatapayrolltab[".orderindexes"] = array();

$tdatapayrolltab[".sqlHead"] = "SELECT PtabID,  	EmployeeID,  	WageType,  	Status,  	BasicMonthly,  	BasicDaily,  	DWork,  	Absent,  	LateMins,  	UndertimeMins,  	RHolidayHrs,  	SHolidayHrs,  	CHolidayHrs,  	ExcessHrs,  	RegOTHrs,  	RHOTHrs,  	SHOTHRs,  	CHOTHrs,  	RDOTHrs,  	NDHrs,  	RDHrs,  	RegNDHrs,  	RHNDHrs,  	SHNDHrs,  	CHNDHrs,  	RDNDHrs,  	VLDays,  	SLDays,  	ELDays,  	PLDays,  	TrODays,  	FromDate,  	ToDate,  	UserName,  	AllowancePerDay,  	VLBalance,  	SLBalance,  	ELBalance,  	PLBalance,  	AgencyShare,  	NDMealAllowance,  	Division,  	Employer,  	PayrollID,  	Email,  	Locked,  	`Position`";
$tdatapayrolltab[".sqlFrom"] = "FROM payrolltab";
$tdatapayrolltab[".sqlWhereExpr"] = "";
$tdatapayrolltab[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapayrolltab[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapayrolltab[".arrGroupsPerPage"] = $arrGPP;

$tdatapayrolltab[".highlightSearchResults"] = true;

$tableKeyspayrolltab = array();
$tableKeyspayrolltab[] = "PtabID";
$tdatapayrolltab[".Keys"] = $tableKeyspayrolltab;

$tdatapayrolltab[".listFields"] = array();
$tdatapayrolltab[".listFields"][] = "PtabID";
$tdatapayrolltab[".listFields"][] = "Locked";
$tdatapayrolltab[".listFields"][] = "Email";
$tdatapayrolltab[".listFields"][] = "PayrollID";
$tdatapayrolltab[".listFields"][] = "EmployeeID";
$tdatapayrolltab[".listFields"][] = "UserName";
$tdatapayrolltab[".listFields"][] = "Position";
$tdatapayrolltab[".listFields"][] = "Division";
$tdatapayrolltab[".listFields"][] = "Employer";
$tdatapayrolltab[".listFields"][] = "WageType";
$tdatapayrolltab[".listFields"][] = "Status";
$tdatapayrolltab[".listFields"][] = "FromDate";
$tdatapayrolltab[".listFields"][] = "ToDate";
$tdatapayrolltab[".listFields"][] = "BasicMonthly";
$tdatapayrolltab[".listFields"][] = "BasicDaily";
$tdatapayrolltab[".listFields"][] = "DWork";
$tdatapayrolltab[".listFields"][] = "Absent";
$tdatapayrolltab[".listFields"][] = "LateMins";
$tdatapayrolltab[".listFields"][] = "UndertimeMins";
$tdatapayrolltab[".listFields"][] = "RHolidayHrs";
$tdatapayrolltab[".listFields"][] = "SHolidayHrs";
$tdatapayrolltab[".listFields"][] = "CHolidayHrs";
$tdatapayrolltab[".listFields"][] = "ExcessHrs";
$tdatapayrolltab[".listFields"][] = "RegOTHrs";
$tdatapayrolltab[".listFields"][] = "RHOTHrs";
$tdatapayrolltab[".listFields"][] = "SHOTHRs";
$tdatapayrolltab[".listFields"][] = "CHOTHrs";
$tdatapayrolltab[".listFields"][] = "TrODays";
$tdatapayrolltab[".listFields"][] = "RDOTHrs";
$tdatapayrolltab[".listFields"][] = "NDHrs";
$tdatapayrolltab[".listFields"][] = "RDHrs";
$tdatapayrolltab[".listFields"][] = "RegNDHrs";
$tdatapayrolltab[".listFields"][] = "RHNDHrs";
$tdatapayrolltab[".listFields"][] = "SHNDHrs";
$tdatapayrolltab[".listFields"][] = "CHNDHrs";
$tdatapayrolltab[".listFields"][] = "RDNDHrs";
$tdatapayrolltab[".listFields"][] = "VLDays";
$tdatapayrolltab[".listFields"][] = "SLDays";
$tdatapayrolltab[".listFields"][] = "ELDays";
$tdatapayrolltab[".listFields"][] = "PLDays";
$tdatapayrolltab[".listFields"][] = "PLBalance";
$tdatapayrolltab[".listFields"][] = "ELBalance";
$tdatapayrolltab[".listFields"][] = "SLBalance";
$tdatapayrolltab[".listFields"][] = "VLBalance";
$tdatapayrolltab[".listFields"][] = "AllowancePerDay";
$tdatapayrolltab[".listFields"][] = "AgencyShare";
$tdatapayrolltab[".listFields"][] = "NDMealAllowance";

$tdatapayrolltab[".hideMobileList"] = array();


$tdatapayrolltab[".viewFields"] = array();
$tdatapayrolltab[".viewFields"][] = "PtabID";
$tdatapayrolltab[".viewFields"][] = "Locked";
$tdatapayrolltab[".viewFields"][] = "Email";
$tdatapayrolltab[".viewFields"][] = "PayrollID";
$tdatapayrolltab[".viewFields"][] = "EmployeeID";
$tdatapayrolltab[".viewFields"][] = "UserName";
$tdatapayrolltab[".viewFields"][] = "Position";
$tdatapayrolltab[".viewFields"][] = "Division";
$tdatapayrolltab[".viewFields"][] = "Employer";
$tdatapayrolltab[".viewFields"][] = "WageType";
$tdatapayrolltab[".viewFields"][] = "Status";
$tdatapayrolltab[".viewFields"][] = "FromDate";
$tdatapayrolltab[".viewFields"][] = "ToDate";
$tdatapayrolltab[".viewFields"][] = "BasicMonthly";
$tdatapayrolltab[".viewFields"][] = "BasicDaily";
$tdatapayrolltab[".viewFields"][] = "DWork";
$tdatapayrolltab[".viewFields"][] = "Absent";
$tdatapayrolltab[".viewFields"][] = "LateMins";
$tdatapayrolltab[".viewFields"][] = "UndertimeMins";
$tdatapayrolltab[".viewFields"][] = "RHolidayHrs";
$tdatapayrolltab[".viewFields"][] = "SHolidayHrs";
$tdatapayrolltab[".viewFields"][] = "CHolidayHrs";
$tdatapayrolltab[".viewFields"][] = "ExcessHrs";
$tdatapayrolltab[".viewFields"][] = "RegOTHrs";
$tdatapayrolltab[".viewFields"][] = "RHOTHrs";
$tdatapayrolltab[".viewFields"][] = "SHOTHRs";
$tdatapayrolltab[".viewFields"][] = "CHOTHrs";
$tdatapayrolltab[".viewFields"][] = "TrODays";
$tdatapayrolltab[".viewFields"][] = "RDOTHrs";
$tdatapayrolltab[".viewFields"][] = "NDHrs";
$tdatapayrolltab[".viewFields"][] = "RDHrs";
$tdatapayrolltab[".viewFields"][] = "RegNDHrs";
$tdatapayrolltab[".viewFields"][] = "RHNDHrs";
$tdatapayrolltab[".viewFields"][] = "SHNDHrs";
$tdatapayrolltab[".viewFields"][] = "CHNDHrs";
$tdatapayrolltab[".viewFields"][] = "RDNDHrs";
$tdatapayrolltab[".viewFields"][] = "VLDays";
$tdatapayrolltab[".viewFields"][] = "SLDays";
$tdatapayrolltab[".viewFields"][] = "ELDays";
$tdatapayrolltab[".viewFields"][] = "PLDays";
$tdatapayrolltab[".viewFields"][] = "PLBalance";
$tdatapayrolltab[".viewFields"][] = "ELBalance";
$tdatapayrolltab[".viewFields"][] = "SLBalance";
$tdatapayrolltab[".viewFields"][] = "VLBalance";
$tdatapayrolltab[".viewFields"][] = "AllowancePerDay";
$tdatapayrolltab[".viewFields"][] = "AgencyShare";
$tdatapayrolltab[".viewFields"][] = "NDMealAllowance";

$tdatapayrolltab[".addFields"] = array();
$tdatapayrolltab[".addFields"][] = "Locked";
$tdatapayrolltab[".addFields"][] = "Email";
$tdatapayrolltab[".addFields"][] = "PayrollID";
$tdatapayrolltab[".addFields"][] = "EmployeeID";
$tdatapayrolltab[".addFields"][] = "UserName";
$tdatapayrolltab[".addFields"][] = "Position";
$tdatapayrolltab[".addFields"][] = "Division";
$tdatapayrolltab[".addFields"][] = "Employer";
$tdatapayrolltab[".addFields"][] = "WageType";
$tdatapayrolltab[".addFields"][] = "Status";
$tdatapayrolltab[".addFields"][] = "FromDate";
$tdatapayrolltab[".addFields"][] = "ToDate";
$tdatapayrolltab[".addFields"][] = "BasicMonthly";
$tdatapayrolltab[".addFields"][] = "BasicDaily";
$tdatapayrolltab[".addFields"][] = "DWork";
$tdatapayrolltab[".addFields"][] = "Absent";
$tdatapayrolltab[".addFields"][] = "LateMins";
$tdatapayrolltab[".addFields"][] = "UndertimeMins";
$tdatapayrolltab[".addFields"][] = "RHolidayHrs";
$tdatapayrolltab[".addFields"][] = "SHolidayHrs";
$tdatapayrolltab[".addFields"][] = "CHolidayHrs";
$tdatapayrolltab[".addFields"][] = "ExcessHrs";
$tdatapayrolltab[".addFields"][] = "RegOTHrs";
$tdatapayrolltab[".addFields"][] = "RHOTHrs";
$tdatapayrolltab[".addFields"][] = "SHOTHRs";
$tdatapayrolltab[".addFields"][] = "CHOTHrs";
$tdatapayrolltab[".addFields"][] = "TrODays";
$tdatapayrolltab[".addFields"][] = "RDOTHrs";
$tdatapayrolltab[".addFields"][] = "NDHrs";
$tdatapayrolltab[".addFields"][] = "RDHrs";
$tdatapayrolltab[".addFields"][] = "RegNDHrs";
$tdatapayrolltab[".addFields"][] = "RHNDHrs";
$tdatapayrolltab[".addFields"][] = "SHNDHrs";
$tdatapayrolltab[".addFields"][] = "CHNDHrs";
$tdatapayrolltab[".addFields"][] = "RDNDHrs";
$tdatapayrolltab[".addFields"][] = "VLDays";
$tdatapayrolltab[".addFields"][] = "SLDays";
$tdatapayrolltab[".addFields"][] = "ELDays";
$tdatapayrolltab[".addFields"][] = "PLDays";
$tdatapayrolltab[".addFields"][] = "PLBalance";
$tdatapayrolltab[".addFields"][] = "ELBalance";
$tdatapayrolltab[".addFields"][] = "SLBalance";
$tdatapayrolltab[".addFields"][] = "VLBalance";
$tdatapayrolltab[".addFields"][] = "AllowancePerDay";
$tdatapayrolltab[".addFields"][] = "AgencyShare";
$tdatapayrolltab[".addFields"][] = "NDMealAllowance";

$tdatapayrolltab[".masterListFields"] = array();
$tdatapayrolltab[".masterListFields"][] = "PtabID";
$tdatapayrolltab[".masterListFields"][] = "Locked";
$tdatapayrolltab[".masterListFields"][] = "Email";
$tdatapayrolltab[".masterListFields"][] = "PayrollID";
$tdatapayrolltab[".masterListFields"][] = "EmployeeID";
$tdatapayrolltab[".masterListFields"][] = "UserName";
$tdatapayrolltab[".masterListFields"][] = "Position";
$tdatapayrolltab[".masterListFields"][] = "Division";
$tdatapayrolltab[".masterListFields"][] = "Employer";
$tdatapayrolltab[".masterListFields"][] = "WageType";
$tdatapayrolltab[".masterListFields"][] = "Status";
$tdatapayrolltab[".masterListFields"][] = "FromDate";
$tdatapayrolltab[".masterListFields"][] = "ToDate";
$tdatapayrolltab[".masterListFields"][] = "BasicMonthly";
$tdatapayrolltab[".masterListFields"][] = "BasicDaily";
$tdatapayrolltab[".masterListFields"][] = "DWork";
$tdatapayrolltab[".masterListFields"][] = "Absent";
$tdatapayrolltab[".masterListFields"][] = "LateMins";
$tdatapayrolltab[".masterListFields"][] = "UndertimeMins";
$tdatapayrolltab[".masterListFields"][] = "RHolidayHrs";
$tdatapayrolltab[".masterListFields"][] = "SHolidayHrs";
$tdatapayrolltab[".masterListFields"][] = "CHolidayHrs";
$tdatapayrolltab[".masterListFields"][] = "ExcessHrs";
$tdatapayrolltab[".masterListFields"][] = "RegOTHrs";
$tdatapayrolltab[".masterListFields"][] = "RHOTHrs";
$tdatapayrolltab[".masterListFields"][] = "SHOTHRs";
$tdatapayrolltab[".masterListFields"][] = "CHOTHrs";
$tdatapayrolltab[".masterListFields"][] = "TrODays";
$tdatapayrolltab[".masterListFields"][] = "RDOTHrs";
$tdatapayrolltab[".masterListFields"][] = "NDHrs";
$tdatapayrolltab[".masterListFields"][] = "RDHrs";
$tdatapayrolltab[".masterListFields"][] = "RegNDHrs";
$tdatapayrolltab[".masterListFields"][] = "RHNDHrs";
$tdatapayrolltab[".masterListFields"][] = "SHNDHrs";
$tdatapayrolltab[".masterListFields"][] = "CHNDHrs";
$tdatapayrolltab[".masterListFields"][] = "RDNDHrs";
$tdatapayrolltab[".masterListFields"][] = "VLDays";
$tdatapayrolltab[".masterListFields"][] = "SLDays";
$tdatapayrolltab[".masterListFields"][] = "ELDays";
$tdatapayrolltab[".masterListFields"][] = "PLDays";
$tdatapayrolltab[".masterListFields"][] = "PLBalance";
$tdatapayrolltab[".masterListFields"][] = "ELBalance";
$tdatapayrolltab[".masterListFields"][] = "SLBalance";
$tdatapayrolltab[".masterListFields"][] = "VLBalance";
$tdatapayrolltab[".masterListFields"][] = "AllowancePerDay";
$tdatapayrolltab[".masterListFields"][] = "AgencyShare";
$tdatapayrolltab[".masterListFields"][] = "NDMealAllowance";

$tdatapayrolltab[".inlineAddFields"] = array();
$tdatapayrolltab[".inlineAddFields"][] = "Locked";
$tdatapayrolltab[".inlineAddFields"][] = "Email";
$tdatapayrolltab[".inlineAddFields"][] = "PayrollID";
$tdatapayrolltab[".inlineAddFields"][] = "EmployeeID";
$tdatapayrolltab[".inlineAddFields"][] = "UserName";
$tdatapayrolltab[".inlineAddFields"][] = "Position";
$tdatapayrolltab[".inlineAddFields"][] = "Division";
$tdatapayrolltab[".inlineAddFields"][] = "Employer";
$tdatapayrolltab[".inlineAddFields"][] = "WageType";
$tdatapayrolltab[".inlineAddFields"][] = "Status";
$tdatapayrolltab[".inlineAddFields"][] = "FromDate";
$tdatapayrolltab[".inlineAddFields"][] = "ToDate";
$tdatapayrolltab[".inlineAddFields"][] = "BasicMonthly";
$tdatapayrolltab[".inlineAddFields"][] = "BasicDaily";
$tdatapayrolltab[".inlineAddFields"][] = "DWork";
$tdatapayrolltab[".inlineAddFields"][] = "Absent";
$tdatapayrolltab[".inlineAddFields"][] = "LateMins";
$tdatapayrolltab[".inlineAddFields"][] = "UndertimeMins";
$tdatapayrolltab[".inlineAddFields"][] = "RHolidayHrs";
$tdatapayrolltab[".inlineAddFields"][] = "SHolidayHrs";
$tdatapayrolltab[".inlineAddFields"][] = "CHolidayHrs";
$tdatapayrolltab[".inlineAddFields"][] = "ExcessHrs";
$tdatapayrolltab[".inlineAddFields"][] = "RegOTHrs";
$tdatapayrolltab[".inlineAddFields"][] = "RHOTHrs";
$tdatapayrolltab[".inlineAddFields"][] = "SHOTHRs";
$tdatapayrolltab[".inlineAddFields"][] = "CHOTHrs";
$tdatapayrolltab[".inlineAddFields"][] = "TrODays";
$tdatapayrolltab[".inlineAddFields"][] = "RDOTHrs";
$tdatapayrolltab[".inlineAddFields"][] = "NDHrs";
$tdatapayrolltab[".inlineAddFields"][] = "RDHrs";
$tdatapayrolltab[".inlineAddFields"][] = "RegNDHrs";
$tdatapayrolltab[".inlineAddFields"][] = "RHNDHrs";
$tdatapayrolltab[".inlineAddFields"][] = "SHNDHrs";
$tdatapayrolltab[".inlineAddFields"][] = "CHNDHrs";
$tdatapayrolltab[".inlineAddFields"][] = "RDNDHrs";
$tdatapayrolltab[".inlineAddFields"][] = "VLDays";
$tdatapayrolltab[".inlineAddFields"][] = "SLDays";
$tdatapayrolltab[".inlineAddFields"][] = "ELDays";
$tdatapayrolltab[".inlineAddFields"][] = "PLDays";
$tdatapayrolltab[".inlineAddFields"][] = "PLBalance";
$tdatapayrolltab[".inlineAddFields"][] = "ELBalance";
$tdatapayrolltab[".inlineAddFields"][] = "SLBalance";
$tdatapayrolltab[".inlineAddFields"][] = "VLBalance";
$tdatapayrolltab[".inlineAddFields"][] = "AllowancePerDay";
$tdatapayrolltab[".inlineAddFields"][] = "AgencyShare";
$tdatapayrolltab[".inlineAddFields"][] = "NDMealAllowance";

$tdatapayrolltab[".editFields"] = array();
$tdatapayrolltab[".editFields"][] = "Locked";
$tdatapayrolltab[".editFields"][] = "Email";
$tdatapayrolltab[".editFields"][] = "PayrollID";
$tdatapayrolltab[".editFields"][] = "EmployeeID";
$tdatapayrolltab[".editFields"][] = "UserName";
$tdatapayrolltab[".editFields"][] = "Position";
$tdatapayrolltab[".editFields"][] = "Division";
$tdatapayrolltab[".editFields"][] = "Employer";
$tdatapayrolltab[".editFields"][] = "WageType";
$tdatapayrolltab[".editFields"][] = "Status";
$tdatapayrolltab[".editFields"][] = "FromDate";
$tdatapayrolltab[".editFields"][] = "ToDate";
$tdatapayrolltab[".editFields"][] = "BasicMonthly";
$tdatapayrolltab[".editFields"][] = "BasicDaily";
$tdatapayrolltab[".editFields"][] = "DWork";
$tdatapayrolltab[".editFields"][] = "Absent";
$tdatapayrolltab[".editFields"][] = "LateMins";
$tdatapayrolltab[".editFields"][] = "UndertimeMins";
$tdatapayrolltab[".editFields"][] = "RHolidayHrs";
$tdatapayrolltab[".editFields"][] = "SHolidayHrs";
$tdatapayrolltab[".editFields"][] = "CHolidayHrs";
$tdatapayrolltab[".editFields"][] = "ExcessHrs";
$tdatapayrolltab[".editFields"][] = "RegOTHrs";
$tdatapayrolltab[".editFields"][] = "RHOTHrs";
$tdatapayrolltab[".editFields"][] = "SHOTHRs";
$tdatapayrolltab[".editFields"][] = "CHOTHrs";
$tdatapayrolltab[".editFields"][] = "TrODays";
$tdatapayrolltab[".editFields"][] = "RDOTHrs";
$tdatapayrolltab[".editFields"][] = "NDHrs";
$tdatapayrolltab[".editFields"][] = "RDHrs";
$tdatapayrolltab[".editFields"][] = "RegNDHrs";
$tdatapayrolltab[".editFields"][] = "RHNDHrs";
$tdatapayrolltab[".editFields"][] = "SHNDHrs";
$tdatapayrolltab[".editFields"][] = "CHNDHrs";
$tdatapayrolltab[".editFields"][] = "RDNDHrs";
$tdatapayrolltab[".editFields"][] = "VLDays";
$tdatapayrolltab[".editFields"][] = "SLDays";
$tdatapayrolltab[".editFields"][] = "ELDays";
$tdatapayrolltab[".editFields"][] = "PLDays";
$tdatapayrolltab[".editFields"][] = "PLBalance";
$tdatapayrolltab[".editFields"][] = "ELBalance";
$tdatapayrolltab[".editFields"][] = "SLBalance";
$tdatapayrolltab[".editFields"][] = "VLBalance";
$tdatapayrolltab[".editFields"][] = "AllowancePerDay";
$tdatapayrolltab[".editFields"][] = "AgencyShare";
$tdatapayrolltab[".editFields"][] = "NDMealAllowance";

$tdatapayrolltab[".inlineEditFields"] = array();
$tdatapayrolltab[".inlineEditFields"][] = "Locked";
$tdatapayrolltab[".inlineEditFields"][] = "Email";
$tdatapayrolltab[".inlineEditFields"][] = "PayrollID";
$tdatapayrolltab[".inlineEditFields"][] = "EmployeeID";
$tdatapayrolltab[".inlineEditFields"][] = "UserName";
$tdatapayrolltab[".inlineEditFields"][] = "Position";
$tdatapayrolltab[".inlineEditFields"][] = "Division";
$tdatapayrolltab[".inlineEditFields"][] = "Employer";
$tdatapayrolltab[".inlineEditFields"][] = "WageType";
$tdatapayrolltab[".inlineEditFields"][] = "Status";
$tdatapayrolltab[".inlineEditFields"][] = "FromDate";
$tdatapayrolltab[".inlineEditFields"][] = "ToDate";
$tdatapayrolltab[".inlineEditFields"][] = "BasicMonthly";
$tdatapayrolltab[".inlineEditFields"][] = "BasicDaily";
$tdatapayrolltab[".inlineEditFields"][] = "DWork";
$tdatapayrolltab[".inlineEditFields"][] = "Absent";
$tdatapayrolltab[".inlineEditFields"][] = "LateMins";
$tdatapayrolltab[".inlineEditFields"][] = "UndertimeMins";
$tdatapayrolltab[".inlineEditFields"][] = "RHolidayHrs";
$tdatapayrolltab[".inlineEditFields"][] = "SHolidayHrs";
$tdatapayrolltab[".inlineEditFields"][] = "CHolidayHrs";
$tdatapayrolltab[".inlineEditFields"][] = "ExcessHrs";
$tdatapayrolltab[".inlineEditFields"][] = "RegOTHrs";
$tdatapayrolltab[".inlineEditFields"][] = "RHOTHrs";
$tdatapayrolltab[".inlineEditFields"][] = "SHOTHRs";
$tdatapayrolltab[".inlineEditFields"][] = "CHOTHrs";
$tdatapayrolltab[".inlineEditFields"][] = "TrODays";
$tdatapayrolltab[".inlineEditFields"][] = "RDOTHrs";
$tdatapayrolltab[".inlineEditFields"][] = "NDHrs";
$tdatapayrolltab[".inlineEditFields"][] = "RDHrs";
$tdatapayrolltab[".inlineEditFields"][] = "RegNDHrs";
$tdatapayrolltab[".inlineEditFields"][] = "RHNDHrs";
$tdatapayrolltab[".inlineEditFields"][] = "SHNDHrs";
$tdatapayrolltab[".inlineEditFields"][] = "CHNDHrs";
$tdatapayrolltab[".inlineEditFields"][] = "RDNDHrs";
$tdatapayrolltab[".inlineEditFields"][] = "VLDays";
$tdatapayrolltab[".inlineEditFields"][] = "SLDays";
$tdatapayrolltab[".inlineEditFields"][] = "ELDays";
$tdatapayrolltab[".inlineEditFields"][] = "PLDays";
$tdatapayrolltab[".inlineEditFields"][] = "PLBalance";
$tdatapayrolltab[".inlineEditFields"][] = "ELBalance";
$tdatapayrolltab[".inlineEditFields"][] = "SLBalance";
$tdatapayrolltab[".inlineEditFields"][] = "VLBalance";
$tdatapayrolltab[".inlineEditFields"][] = "AllowancePerDay";
$tdatapayrolltab[".inlineEditFields"][] = "AgencyShare";
$tdatapayrolltab[".inlineEditFields"][] = "NDMealAllowance";

$tdatapayrolltab[".updateSelectedFields"] = array();
$tdatapayrolltab[".updateSelectedFields"][] = "Locked";
$tdatapayrolltab[".updateSelectedFields"][] = "Email";
$tdatapayrolltab[".updateSelectedFields"][] = "PayrollID";
$tdatapayrolltab[".updateSelectedFields"][] = "EmployeeID";
$tdatapayrolltab[".updateSelectedFields"][] = "UserName";
$tdatapayrolltab[".updateSelectedFields"][] = "Division";
$tdatapayrolltab[".updateSelectedFields"][] = "Employer";
$tdatapayrolltab[".updateSelectedFields"][] = "WageType";
$tdatapayrolltab[".updateSelectedFields"][] = "Status";
$tdatapayrolltab[".updateSelectedFields"][] = "FromDate";
$tdatapayrolltab[".updateSelectedFields"][] = "ToDate";
$tdatapayrolltab[".updateSelectedFields"][] = "BasicMonthly";
$tdatapayrolltab[".updateSelectedFields"][] = "BasicDaily";
$tdatapayrolltab[".updateSelectedFields"][] = "DWork";
$tdatapayrolltab[".updateSelectedFields"][] = "Absent";
$tdatapayrolltab[".updateSelectedFields"][] = "LateMins";
$tdatapayrolltab[".updateSelectedFields"][] = "UndertimeMins";
$tdatapayrolltab[".updateSelectedFields"][] = "RHolidayHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "SHolidayHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "CHolidayHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "ExcessHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "RegOTHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "RHOTHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "SHOTHRs";
$tdatapayrolltab[".updateSelectedFields"][] = "CHOTHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "TrODays";
$tdatapayrolltab[".updateSelectedFields"][] = "RDOTHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "NDHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "RDHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "RegNDHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "RHNDHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "SHNDHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "CHNDHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "RDNDHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "VLDays";
$tdatapayrolltab[".updateSelectedFields"][] = "SLDays";
$tdatapayrolltab[".updateSelectedFields"][] = "ELDays";
$tdatapayrolltab[".updateSelectedFields"][] = "PLDays";
$tdatapayrolltab[".updateSelectedFields"][] = "PLBalance";
$tdatapayrolltab[".updateSelectedFields"][] = "ELBalance";
$tdatapayrolltab[".updateSelectedFields"][] = "SLBalance";
$tdatapayrolltab[".updateSelectedFields"][] = "VLBalance";
$tdatapayrolltab[".updateSelectedFields"][] = "AllowancePerDay";
$tdatapayrolltab[".updateSelectedFields"][] = "AgencyShare";
$tdatapayrolltab[".updateSelectedFields"][] = "NDMealAllowance";


$tdatapayrolltab[".exportFields"] = array();
$tdatapayrolltab[".exportFields"][] = "PtabID";
$tdatapayrolltab[".exportFields"][] = "Locked";
$tdatapayrolltab[".exportFields"][] = "Email";
$tdatapayrolltab[".exportFields"][] = "PayrollID";
$tdatapayrolltab[".exportFields"][] = "EmployeeID";
$tdatapayrolltab[".exportFields"][] = "UserName";
$tdatapayrolltab[".exportFields"][] = "Position";
$tdatapayrolltab[".exportFields"][] = "Division";
$tdatapayrolltab[".exportFields"][] = "Employer";
$tdatapayrolltab[".exportFields"][] = "WageType";
$tdatapayrolltab[".exportFields"][] = "Status";
$tdatapayrolltab[".exportFields"][] = "FromDate";
$tdatapayrolltab[".exportFields"][] = "ToDate";
$tdatapayrolltab[".exportFields"][] = "BasicMonthly";
$tdatapayrolltab[".exportFields"][] = "BasicDaily";
$tdatapayrolltab[".exportFields"][] = "DWork";
$tdatapayrolltab[".exportFields"][] = "Absent";
$tdatapayrolltab[".exportFields"][] = "LateMins";
$tdatapayrolltab[".exportFields"][] = "UndertimeMins";
$tdatapayrolltab[".exportFields"][] = "RHolidayHrs";
$tdatapayrolltab[".exportFields"][] = "SHolidayHrs";
$tdatapayrolltab[".exportFields"][] = "CHolidayHrs";
$tdatapayrolltab[".exportFields"][] = "ExcessHrs";
$tdatapayrolltab[".exportFields"][] = "RegOTHrs";
$tdatapayrolltab[".exportFields"][] = "RHOTHrs";
$tdatapayrolltab[".exportFields"][] = "SHOTHRs";
$tdatapayrolltab[".exportFields"][] = "CHOTHrs";
$tdatapayrolltab[".exportFields"][] = "TrODays";
$tdatapayrolltab[".exportFields"][] = "RDOTHrs";
$tdatapayrolltab[".exportFields"][] = "NDHrs";
$tdatapayrolltab[".exportFields"][] = "RDHrs";
$tdatapayrolltab[".exportFields"][] = "RegNDHrs";
$tdatapayrolltab[".exportFields"][] = "RHNDHrs";
$tdatapayrolltab[".exportFields"][] = "SHNDHrs";
$tdatapayrolltab[".exportFields"][] = "CHNDHrs";
$tdatapayrolltab[".exportFields"][] = "RDNDHrs";
$tdatapayrolltab[".exportFields"][] = "VLDays";
$tdatapayrolltab[".exportFields"][] = "SLDays";
$tdatapayrolltab[".exportFields"][] = "ELDays";
$tdatapayrolltab[".exportFields"][] = "PLDays";
$tdatapayrolltab[".exportFields"][] = "PLBalance";
$tdatapayrolltab[".exportFields"][] = "ELBalance";
$tdatapayrolltab[".exportFields"][] = "SLBalance";
$tdatapayrolltab[".exportFields"][] = "VLBalance";
$tdatapayrolltab[".exportFields"][] = "AllowancePerDay";
$tdatapayrolltab[".exportFields"][] = "AgencyShare";
$tdatapayrolltab[".exportFields"][] = "NDMealAllowance";

$tdatapayrolltab[".importFields"] = array();
$tdatapayrolltab[".importFields"][] = "PtabID";
$tdatapayrolltab[".importFields"][] = "EmployeeID";
$tdatapayrolltab[".importFields"][] = "WageType";
$tdatapayrolltab[".importFields"][] = "Status";
$tdatapayrolltab[".importFields"][] = "BasicMonthly";
$tdatapayrolltab[".importFields"][] = "BasicDaily";
$tdatapayrolltab[".importFields"][] = "DWork";
$tdatapayrolltab[".importFields"][] = "Absent";
$tdatapayrolltab[".importFields"][] = "LateMins";
$tdatapayrolltab[".importFields"][] = "UndertimeMins";
$tdatapayrolltab[".importFields"][] = "RHolidayHrs";
$tdatapayrolltab[".importFields"][] = "SHolidayHrs";
$tdatapayrolltab[".importFields"][] = "CHolidayHrs";
$tdatapayrolltab[".importFields"][] = "ExcessHrs";
$tdatapayrolltab[".importFields"][] = "RegOTHrs";
$tdatapayrolltab[".importFields"][] = "RHOTHrs";
$tdatapayrolltab[".importFields"][] = "SHOTHRs";
$tdatapayrolltab[".importFields"][] = "CHOTHrs";
$tdatapayrolltab[".importFields"][] = "RDOTHrs";
$tdatapayrolltab[".importFields"][] = "NDHrs";
$tdatapayrolltab[".importFields"][] = "RDHrs";
$tdatapayrolltab[".importFields"][] = "RegNDHrs";
$tdatapayrolltab[".importFields"][] = "RHNDHrs";
$tdatapayrolltab[".importFields"][] = "SHNDHrs";
$tdatapayrolltab[".importFields"][] = "CHNDHrs";
$tdatapayrolltab[".importFields"][] = "RDNDHrs";
$tdatapayrolltab[".importFields"][] = "VLDays";
$tdatapayrolltab[".importFields"][] = "SLDays";
$tdatapayrolltab[".importFields"][] = "ELDays";
$tdatapayrolltab[".importFields"][] = "PLDays";
$tdatapayrolltab[".importFields"][] = "TrODays";
$tdatapayrolltab[".importFields"][] = "FromDate";
$tdatapayrolltab[".importFields"][] = "ToDate";
$tdatapayrolltab[".importFields"][] = "UserName";
$tdatapayrolltab[".importFields"][] = "AllowancePerDay";
$tdatapayrolltab[".importFields"][] = "VLBalance";
$tdatapayrolltab[".importFields"][] = "SLBalance";
$tdatapayrolltab[".importFields"][] = "ELBalance";
$tdatapayrolltab[".importFields"][] = "PLBalance";
$tdatapayrolltab[".importFields"][] = "AgencyShare";
$tdatapayrolltab[".importFields"][] = "NDMealAllowance";
$tdatapayrolltab[".importFields"][] = "Division";
$tdatapayrolltab[".importFields"][] = "Employer";
$tdatapayrolltab[".importFields"][] = "PayrollID";
$tdatapayrolltab[".importFields"][] = "Email";
$tdatapayrolltab[".importFields"][] = "Locked";
$tdatapayrolltab[".importFields"][] = "Position";

$tdatapayrolltab[".printFields"] = array();
$tdatapayrolltab[".printFields"][] = "PtabID";
$tdatapayrolltab[".printFields"][] = "Locked";
$tdatapayrolltab[".printFields"][] = "Email";
$tdatapayrolltab[".printFields"][] = "PayrollID";
$tdatapayrolltab[".printFields"][] = "EmployeeID";
$tdatapayrolltab[".printFields"][] = "UserName";
$tdatapayrolltab[".printFields"][] = "Position";
$tdatapayrolltab[".printFields"][] = "Division";
$tdatapayrolltab[".printFields"][] = "Employer";
$tdatapayrolltab[".printFields"][] = "WageType";
$tdatapayrolltab[".printFields"][] = "Status";
$tdatapayrolltab[".printFields"][] = "FromDate";
$tdatapayrolltab[".printFields"][] = "ToDate";
$tdatapayrolltab[".printFields"][] = "BasicMonthly";
$tdatapayrolltab[".printFields"][] = "BasicDaily";
$tdatapayrolltab[".printFields"][] = "DWork";
$tdatapayrolltab[".printFields"][] = "Absent";
$tdatapayrolltab[".printFields"][] = "LateMins";
$tdatapayrolltab[".printFields"][] = "UndertimeMins";
$tdatapayrolltab[".printFields"][] = "RHolidayHrs";
$tdatapayrolltab[".printFields"][] = "SHolidayHrs";
$tdatapayrolltab[".printFields"][] = "CHolidayHrs";
$tdatapayrolltab[".printFields"][] = "ExcessHrs";
$tdatapayrolltab[".printFields"][] = "RegOTHrs";
$tdatapayrolltab[".printFields"][] = "RHOTHrs";
$tdatapayrolltab[".printFields"][] = "SHOTHRs";
$tdatapayrolltab[".printFields"][] = "CHOTHrs";
$tdatapayrolltab[".printFields"][] = "TrODays";
$tdatapayrolltab[".printFields"][] = "RDOTHrs";
$tdatapayrolltab[".printFields"][] = "NDHrs";
$tdatapayrolltab[".printFields"][] = "RDHrs";
$tdatapayrolltab[".printFields"][] = "RegNDHrs";
$tdatapayrolltab[".printFields"][] = "RHNDHrs";
$tdatapayrolltab[".printFields"][] = "SHNDHrs";
$tdatapayrolltab[".printFields"][] = "CHNDHrs";
$tdatapayrolltab[".printFields"][] = "RDNDHrs";
$tdatapayrolltab[".printFields"][] = "VLDays";
$tdatapayrolltab[".printFields"][] = "SLDays";
$tdatapayrolltab[".printFields"][] = "ELDays";
$tdatapayrolltab[".printFields"][] = "PLDays";
$tdatapayrolltab[".printFields"][] = "PLBalance";
$tdatapayrolltab[".printFields"][] = "ELBalance";
$tdatapayrolltab[".printFields"][] = "SLBalance";
$tdatapayrolltab[".printFields"][] = "VLBalance";
$tdatapayrolltab[".printFields"][] = "AllowancePerDay";
$tdatapayrolltab[".printFields"][] = "AgencyShare";
$tdatapayrolltab[".printFields"][] = "NDMealAllowance";


//	PtabID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PtabID";
	$fdata["GoodName"] = "PtabID";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","PtabID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PtabID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PtabID";

	
	
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




	$tdatapayrolltab["PtabID"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","EmployeeID");
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
		
		$edata["controlWidth"] = 320;

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




	$tdatapayrolltab["EmployeeID"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","WageType");
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

	
	
	
	
	
	
		$edata["controlWidth"] = 140;

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




	$tdatapayrolltab["WageType"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","Status");
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

		$fdata["strField"] = "Status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Status";

	
	
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
	$edata["LookupTable"] = "empstatus";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "stID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "EmployeeStatus";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 140;

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




	$tdatapayrolltab["Status"] = $fdata;
//	BasicMonthly
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "BasicMonthly";
	$fdata["GoodName"] = "BasicMonthly";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","BasicMonthly");
	$fdata["FieldType"] = 5;

	
	
	
			
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

		$fdata["strField"] = "BasicMonthly";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BasicMonthly";

	
	
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




	$tdatapayrolltab["BasicMonthly"] = $fdata;
//	BasicDaily
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "BasicDaily";
	$fdata["GoodName"] = "BasicDaily";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","BasicDaily");
	$fdata["FieldType"] = 5;

	
	
	
			
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

		$fdata["strField"] = "BasicDaily";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BasicDaily";

	
	
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




	$tdatapayrolltab["BasicDaily"] = $fdata;
//	DWork
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DWork";
	$fdata["GoodName"] = "DWork";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","DWork");
	$fdata["FieldType"] = 5;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrolltab["DWork"] = $fdata;
//	Absent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Absent";
	$fdata["GoodName"] = "Absent";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","Absent");
	$fdata["FieldType"] = 5;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrolltab["Absent"] = $fdata;
//	LateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "LateMins";
	$fdata["GoodName"] = "LateMins";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","LateMins");
	$fdata["FieldType"] = 5;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrolltab["LateMins"] = $fdata;
//	UndertimeMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "UndertimeMins";
	$fdata["GoodName"] = "UndertimeMins";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","UndertimeMins");
	$fdata["FieldType"] = 5;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrolltab["UndertimeMins"] = $fdata;
//	RHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "RHolidayHrs";
	$fdata["GoodName"] = "RHolidayHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","RHolidayHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrolltab["RHolidayHrs"] = $fdata;
//	SHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "SHolidayHrs";
	$fdata["GoodName"] = "SHolidayHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","SHolidayHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrolltab["SHolidayHrs"] = $fdata;
//	CHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "CHolidayHrs";
	$fdata["GoodName"] = "CHolidayHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","CHolidayHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrolltab["CHolidayHrs"] = $fdata;
//	ExcessHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ExcessHrs";
	$fdata["GoodName"] = "ExcessHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","ExcessHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrolltab["ExcessHrs"] = $fdata;
//	RegOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "RegOTHrs";
	$fdata["GoodName"] = "RegOTHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","RegOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 50;

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




	$tdatapayrolltab["RegOTHrs"] = $fdata;
//	RHOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "RHOTHrs";
	$fdata["GoodName"] = "RHOTHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","RHOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrolltab["RHOTHrs"] = $fdata;
//	SHOTHRs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "SHOTHRs";
	$fdata["GoodName"] = "SHOTHRs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","SHOTHRs");
	$fdata["FieldType"] = 5;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrolltab["SHOTHRs"] = $fdata;
//	CHOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "CHOTHrs";
	$fdata["GoodName"] = "CHOTHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","CHOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrolltab["CHOTHrs"] = $fdata;
//	RDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "RDOTHrs";
	$fdata["GoodName"] = "RDOTHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","RDOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrolltab["RDOTHrs"] = $fdata;
//	NDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "NDHrs";
	$fdata["GoodName"] = "NDHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","NDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrolltab["NDHrs"] = $fdata;
//	RDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "RDHrs";
	$fdata["GoodName"] = "RDHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","RDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrolltab["RDHrs"] = $fdata;
//	RegNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "RegNDHrs";
	$fdata["GoodName"] = "RegNDHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","RegNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrolltab["RegNDHrs"] = $fdata;
//	RHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "RHNDHrs";
	$fdata["GoodName"] = "RHNDHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","RHNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrolltab["RHNDHrs"] = $fdata;
//	SHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "SHNDHrs";
	$fdata["GoodName"] = "SHNDHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","SHNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrolltab["SHNDHrs"] = $fdata;
//	CHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "CHNDHrs";
	$fdata["GoodName"] = "CHNDHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","CHNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrolltab["CHNDHrs"] = $fdata;
//	RDNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "RDNDHrs";
	$fdata["GoodName"] = "RDNDHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","RDNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrolltab["RDNDHrs"] = $fdata;
//	VLDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "VLDays";
	$fdata["GoodName"] = "VLDays";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","VLDays");
	$fdata["FieldType"] = 5;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrolltab["VLDays"] = $fdata;
//	SLDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "SLDays";
	$fdata["GoodName"] = "SLDays";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","SLDays");
	$fdata["FieldType"] = 5;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrolltab["SLDays"] = $fdata;
//	ELDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "ELDays";
	$fdata["GoodName"] = "ELDays";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","ELDays");
	$fdata["FieldType"] = 5;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrolltab["ELDays"] = $fdata;
//	PLDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "PLDays";
	$fdata["GoodName"] = "PLDays";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","PLDays");
	$fdata["FieldType"] = 5;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrolltab["PLDays"] = $fdata;
//	TrODays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "TrODays";
	$fdata["GoodName"] = "TrODays";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","TrODays");
	$fdata["FieldType"] = 5;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrolltab["TrODays"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","FromDate");
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

		$fdata["strField"] = "FromDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FromDate";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatapayrolltab["FromDate"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","ToDate");
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

		$fdata["strField"] = "ToDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ToDate";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatapayrolltab["ToDate"] = $fdata;
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","UserName");
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
			$edata["EditParams"].= " maxlength=50";

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




	$tdatapayrolltab["UserName"] = $fdata;
//	AllowancePerDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "AllowancePerDay";
	$fdata["GoodName"] = "AllowancePerDay";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","AllowancePerDay");
	$fdata["FieldType"] = 5;

	
	
	
			
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

		$fdata["strField"] = "AllowancePerDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AllowancePerDay";

	
	
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




	$tdatapayrolltab["AllowancePerDay"] = $fdata;
//	VLBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "VLBalance";
	$fdata["GoodName"] = "VLBalance";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","VLBalance");
	$fdata["FieldType"] = 5;

	
	
	
			
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

		$fdata["strField"] = "VLBalance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VLBalance";

	
	
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




	$tdatapayrolltab["VLBalance"] = $fdata;
//	SLBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "SLBalance";
	$fdata["GoodName"] = "SLBalance";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","SLBalance");
	$fdata["FieldType"] = 5;

	
	
	
			
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

		$fdata["strField"] = "SLBalance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SLBalance";

	
	
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




	$tdatapayrolltab["SLBalance"] = $fdata;
//	ELBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "ELBalance";
	$fdata["GoodName"] = "ELBalance";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","ELBalance");
	$fdata["FieldType"] = 5;

	
	
	
			
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

		$fdata["strField"] = "ELBalance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ELBalance";

	
	
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




	$tdatapayrolltab["ELBalance"] = $fdata;
//	PLBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "PLBalance";
	$fdata["GoodName"] = "PLBalance";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","PLBalance");
	$fdata["FieldType"] = 5;

	
	
	
			
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

		$fdata["strField"] = "PLBalance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PLBalance";

	
	
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




	$tdatapayrolltab["PLBalance"] = $fdata;
//	AgencyShare
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "AgencyShare";
	$fdata["GoodName"] = "AgencyShare";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","AgencyShare");
	$fdata["FieldType"] = 5;

	
	
	
			
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

		$fdata["strField"] = "AgencyShare";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AgencyShare";

	
	
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




	$tdatapayrolltab["AgencyShare"] = $fdata;
//	NDMealAllowance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "NDMealAllowance";
	$fdata["GoodName"] = "NDMealAllowance";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","NDMealAllowance");
	$fdata["FieldType"] = 5;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrolltab["NDMealAllowance"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","Division");
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




	$tdatapayrolltab["Division"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","Employer");
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
	
	

	
	$edata["LookupOrderBy"] = "EmployerName";

	
	
	
	

	
	
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




	$tdatapayrolltab["Employer"] = $fdata;
//	PayrollID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "PayrollID";
	$fdata["GoodName"] = "PayrollID";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","PayrollID");
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

		$fdata["strField"] = "PayrollID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PayrollID";

	
	
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




	$tdatapayrolltab["PayrollID"] = $fdata;
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","Email");
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

		$fdata["strField"] = "Email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Email";

	
	
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
			$edata["EditParams"].= " maxlength=80";

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




	$tdatapayrolltab["Email"] = $fdata;
//	Locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "Locked";
	$fdata["GoodName"] = "Locked";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","Locked");
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

		$fdata["strField"] = "Locked";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Locked";

	
	
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




	$tdatapayrolltab["Locked"] = $fdata;
//	Position
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "Position";
	$fdata["GoodName"] = "Position";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","Position");
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

		$fdata["strField"] = "Position";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Position`";

	
	
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
	$edata["LookupTable"] = "positions";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "posID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Position";
	
	

	
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




	$tdatapayrolltab["Position"] = $fdata;


$tables_data["payrolltab"]=&$tdatapayrolltab;
$field_labels["payrolltab"] = &$fieldLabelspayrolltab;
$fieldToolTips["payrolltab"] = &$fieldToolTipspayrolltab;
$placeHolders["payrolltab"] = &$placeHolderspayrolltab;
$page_titles["payrolltab"] = &$pageTitlespayrolltab;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["payrolltab"] = array();
//	payrollamt3
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="payrollamt3";
		$detailsParam["dOriginalTable"] = "payrollamt3";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "payrollamt3";
	$detailsParam["dCaptionTable"] = GetTableCaption("payrollamt3");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["payrolltab"][$dIndex] = $detailsParam;

	
		$detailsTablesData["payrolltab"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["payrolltab"][$dIndex]["masterKeys"][]="EmployeeID";

	$detailsTablesData["payrolltab"][$dIndex]["masterKeys"][]="FromDate";

	$detailsTablesData["payrolltab"][$dIndex]["masterKeys"][]="ToDate";

				$detailsTablesData["payrolltab"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["payrolltab"][$dIndex]["detailKeys"][]="EmployeeID";

		
	$detailsTablesData["payrolltab"][$dIndex]["detailKeys"][]="FromDate";

		
	$detailsTablesData["payrolltab"][$dIndex]["detailKeys"][]="ToDate";
//	payrolldeductions
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="payrolldeductions";
		$detailsParam["dOriginalTable"] = "payrolldeductions";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "payrolldeductions";
	$detailsParam["dCaptionTable"] = GetTableCaption("payrolldeductions");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["payrolltab"][$dIndex] = $detailsParam;

	
		$detailsTablesData["payrolltab"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["payrolltab"][$dIndex]["masterKeys"][]="EmployeeID";

	$detailsTablesData["payrolltab"][$dIndex]["masterKeys"][]="ToDate";

	$detailsTablesData["payrolltab"][$dIndex]["masterKeys"][]="FromDate";

	$detailsTablesData["payrolltab"][$dIndex]["masterKeys"][]="Employer";

	$detailsTablesData["payrolltab"][$dIndex]["masterKeys"][]="Division";

	$detailsTablesData["payrolltab"][$dIndex]["masterKeys"][]="WageType";

				$detailsTablesData["payrolltab"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["payrolltab"][$dIndex]["detailKeys"][]="EmployeeID";

		
	$detailsTablesData["payrolltab"][$dIndex]["detailKeys"][]="ToDate";

		
	$detailsTablesData["payrolltab"][$dIndex]["detailKeys"][]="FromDate";

		
	$detailsTablesData["payrolltab"][$dIndex]["detailKeys"][]="Employer";

		
	$detailsTablesData["payrolltab"][$dIndex]["detailKeys"][]="Division";

		
	$detailsTablesData["payrolltab"][$dIndex]["detailKeys"][]="WageType";
//	payrollearnadj
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="payrollearnadj";
		$detailsParam["dOriginalTable"] = "payrollearnadj";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "payrollearnadj";
	$detailsParam["dCaptionTable"] = GetTableCaption("payrollearnadj");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["payrolltab"][$dIndex] = $detailsParam;

	
		$detailsTablesData["payrolltab"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["payrolltab"][$dIndex]["masterKeys"][]="EmployeeID";

	$detailsTablesData["payrolltab"][$dIndex]["masterKeys"][]="ToDate";

	$detailsTablesData["payrolltab"][$dIndex]["masterKeys"][]="FromDate";

	$detailsTablesData["payrolltab"][$dIndex]["masterKeys"][]="Employer";

	$detailsTablesData["payrolltab"][$dIndex]["masterKeys"][]="Division";

	$detailsTablesData["payrolltab"][$dIndex]["masterKeys"][]="WageType";

				$detailsTablesData["payrolltab"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["payrolltab"][$dIndex]["detailKeys"][]="EmployeeID";

		
	$detailsTablesData["payrolltab"][$dIndex]["detailKeys"][]="ToDate";

		
	$detailsTablesData["payrolltab"][$dIndex]["detailKeys"][]="FromDate";

		
	$detailsTablesData["payrolltab"][$dIndex]["detailKeys"][]="Employer";

		
	$detailsTablesData["payrolltab"][$dIndex]["detailKeys"][]="Division";

		
	$detailsTablesData["payrolltab"][$dIndex]["detailKeys"][]="WageType";
//	payrollstatutories
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="payrollstatutories";
		$detailsParam["dOriginalTable"] = "payrollstatutories";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "payrollstatutories";
	$detailsParam["dCaptionTable"] = GetTableCaption("payrollstatutories");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["payrolltab"][$dIndex] = $detailsParam;

	
		$detailsTablesData["payrolltab"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["payrolltab"][$dIndex]["masterKeys"][]="EmployeeID";

	$detailsTablesData["payrolltab"][$dIndex]["masterKeys"][]="ToDate";

	$detailsTablesData["payrolltab"][$dIndex]["masterKeys"][]="FromDate";

	$detailsTablesData["payrolltab"][$dIndex]["masterKeys"][]="Employer";

	$detailsTablesData["payrolltab"][$dIndex]["masterKeys"][]="Division";

	$detailsTablesData["payrolltab"][$dIndex]["masterKeys"][]="WageType";

				$detailsTablesData["payrolltab"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["payrolltab"][$dIndex]["detailKeys"][]="EmployeeID";

		
	$detailsTablesData["payrolltab"][$dIndex]["detailKeys"][]="ToDate";

		
	$detailsTablesData["payrolltab"][$dIndex]["detailKeys"][]="FromDate";

		
	$detailsTablesData["payrolltab"][$dIndex]["detailKeys"][]="Employer";

		
	$detailsTablesData["payrolltab"][$dIndex]["detailKeys"][]="Division";

		
	$detailsTablesData["payrolltab"][$dIndex]["detailKeys"][]="WageType";
//	payrolltax
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="payrolltax";
		$detailsParam["dOriginalTable"] = "payrolltax";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "payrolltax";
	$detailsParam["dCaptionTable"] = GetTableCaption("payrolltax");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["payrolltab"][$dIndex] = $detailsParam;

	
		$detailsTablesData["payrolltab"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["payrolltab"][$dIndex]["masterKeys"][]="EmployeeID";

	$detailsTablesData["payrolltab"][$dIndex]["masterKeys"][]="FromDate";

	$detailsTablesData["payrolltab"][$dIndex]["masterKeys"][]="ToDate";

	$detailsTablesData["payrolltab"][$dIndex]["masterKeys"][]="Employer";

	$detailsTablesData["payrolltab"][$dIndex]["masterKeys"][]="Division";

	$detailsTablesData["payrolltab"][$dIndex]["masterKeys"][]="WageType";

				$detailsTablesData["payrolltab"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["payrolltab"][$dIndex]["detailKeys"][]="EmployeeID";

		
	$detailsTablesData["payrolltab"][$dIndex]["detailKeys"][]="FromDate";

		
	$detailsTablesData["payrolltab"][$dIndex]["detailKeys"][]="ToDate";

		
	$detailsTablesData["payrolltab"][$dIndex]["detailKeys"][]="Employer";

		
	$detailsTablesData["payrolltab"][$dIndex]["detailKeys"][]="Division";

		
	$detailsTablesData["payrolltab"][$dIndex]["detailKeys"][]="WageType";

// tables which are master tables for current table (detail)
$masterTablesData["payrolltab"] = array();


	
				$strOriginalDetailsTable="payroll";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="payroll";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "payroll";
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
					$masterTablesData["payrolltab"][0] = $masterParams;
				$masterTablesData["payrolltab"][0]["masterKeys"] = array();
	$masterTablesData["payrolltab"][0]["masterKeys"][]="PayToDate";
				$masterTablesData["payrolltab"][0]["masterKeys"][]="Employer";
				$masterTablesData["payrolltab"][0]["masterKeys"][]="Division";
				$masterTablesData["payrolltab"][0]["masterKeys"][]="WageType";
				$masterTablesData["payrolltab"][0]["detailKeys"] = array();
	$masterTablesData["payrolltab"][0]["detailKeys"][]="ToDate";
				$masterTablesData["payrolltab"][0]["detailKeys"][]="Employer";
				$masterTablesData["payrolltab"][0]["detailKeys"][]="Division";
				$masterTablesData["payrolltab"][0]["detailKeys"][]="WageType";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_payrolltab()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PtabID,  	EmployeeID,  	WageType,  	Status,  	BasicMonthly,  	BasicDaily,  	DWork,  	Absent,  	LateMins,  	UndertimeMins,  	RHolidayHrs,  	SHolidayHrs,  	CHolidayHrs,  	ExcessHrs,  	RegOTHrs,  	RHOTHrs,  	SHOTHRs,  	CHOTHrs,  	RDOTHrs,  	NDHrs,  	RDHrs,  	RegNDHrs,  	RHNDHrs,  	SHNDHrs,  	CHNDHrs,  	RDNDHrs,  	VLDays,  	SLDays,  	ELDays,  	PLDays,  	TrODays,  	FromDate,  	ToDate,  	UserName,  	AllowancePerDay,  	VLBalance,  	SLBalance,  	ELBalance,  	PLBalance,  	AgencyShare,  	NDMealAllowance,  	Division,  	Employer,  	PayrollID,  	Email,  	Locked,  	`Position`";
$proto0["m_strFrom"] = "FROM payrolltab";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
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
	"m_strName" => "PtabID",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto6["m_sql"] = "PtabID";
$proto6["m_srcTableName"] = "payrolltab";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto8["m_sql"] = "EmployeeID";
$proto8["m_srcTableName"] = "payrolltab";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "WageType",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto10["m_sql"] = "WageType";
$proto10["m_srcTableName"] = "payrolltab";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto12["m_sql"] = "Status";
$proto12["m_srcTableName"] = "payrolltab";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "BasicMonthly",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto14["m_sql"] = "BasicMonthly";
$proto14["m_srcTableName"] = "payrolltab";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "BasicDaily",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto16["m_sql"] = "BasicDaily";
$proto16["m_srcTableName"] = "payrolltab";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DWork",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto18["m_sql"] = "DWork";
$proto18["m_srcTableName"] = "payrolltab";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Absent",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto20["m_sql"] = "Absent";
$proto20["m_srcTableName"] = "payrolltab";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "LateMins",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto22["m_sql"] = "LateMins";
$proto22["m_srcTableName"] = "payrolltab";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "UndertimeMins",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto24["m_sql"] = "UndertimeMins";
$proto24["m_srcTableName"] = "payrolltab";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "RHolidayHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto26["m_sql"] = "RHolidayHrs";
$proto26["m_srcTableName"] = "payrolltab";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "SHolidayHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto28["m_sql"] = "SHolidayHrs";
$proto28["m_srcTableName"] = "payrolltab";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "CHolidayHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto30["m_sql"] = "CHolidayHrs";
$proto30["m_srcTableName"] = "payrolltab";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ExcessHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto32["m_sql"] = "ExcessHrs";
$proto32["m_srcTableName"] = "payrolltab";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "RegOTHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto34["m_sql"] = "RegOTHrs";
$proto34["m_srcTableName"] = "payrolltab";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "RHOTHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto36["m_sql"] = "RHOTHrs";
$proto36["m_srcTableName"] = "payrolltab";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOTHRs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto38["m_sql"] = "SHOTHRs";
$proto38["m_srcTableName"] = "payrolltab";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "CHOTHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto40["m_sql"] = "CHOTHrs";
$proto40["m_srcTableName"] = "payrolltab";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "RDOTHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto42["m_sql"] = "RDOTHrs";
$proto42["m_srcTableName"] = "payrolltab";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "NDHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto44["m_sql"] = "NDHrs";
$proto44["m_srcTableName"] = "payrolltab";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "RDHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto46["m_sql"] = "RDHrs";
$proto46["m_srcTableName"] = "payrolltab";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "RegNDHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto48["m_sql"] = "RegNDHrs";
$proto48["m_srcTableName"] = "payrolltab";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "RHNDHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto50["m_sql"] = "RHNDHrs";
$proto50["m_srcTableName"] = "payrolltab";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "SHNDHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto52["m_sql"] = "SHNDHrs";
$proto52["m_srcTableName"] = "payrolltab";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "CHNDHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto54["m_sql"] = "CHNDHrs";
$proto54["m_srcTableName"] = "payrolltab";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "RDNDHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto56["m_sql"] = "RDNDHrs";
$proto56["m_srcTableName"] = "payrolltab";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "VLDays",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto58["m_sql"] = "VLDays";
$proto58["m_srcTableName"] = "payrolltab";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "SLDays",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto60["m_sql"] = "SLDays";
$proto60["m_srcTableName"] = "payrolltab";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "ELDays",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto62["m_sql"] = "ELDays";
$proto62["m_srcTableName"] = "payrolltab";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "PLDays",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto64["m_sql"] = "PLDays";
$proto64["m_srcTableName"] = "payrolltab";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "TrODays",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto66["m_sql"] = "TrODays";
$proto66["m_srcTableName"] = "payrolltab";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto68["m_sql"] = "FromDate";
$proto68["m_srcTableName"] = "payrolltab";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto70["m_sql"] = "ToDate";
$proto70["m_srcTableName"] = "payrolltab";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto72["m_sql"] = "UserName";
$proto72["m_srcTableName"] = "payrolltab";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowancePerDay",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto74["m_sql"] = "AllowancePerDay";
$proto74["m_srcTableName"] = "payrolltab";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "VLBalance",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto76["m_sql"] = "VLBalance";
$proto76["m_srcTableName"] = "payrolltab";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "SLBalance",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto78["m_sql"] = "SLBalance";
$proto78["m_srcTableName"] = "payrolltab";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "ELBalance",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto80["m_sql"] = "ELBalance";
$proto80["m_srcTableName"] = "payrolltab";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "PLBalance",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto82["m_sql"] = "PLBalance";
$proto82["m_srcTableName"] = "payrolltab";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "AgencyShare",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto84["m_sql"] = "AgencyShare";
$proto84["m_srcTableName"] = "payrolltab";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "NDMealAllowance",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto86["m_sql"] = "NDMealAllowance";
$proto86["m_srcTableName"] = "payrolltab";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto88["m_sql"] = "Division";
$proto88["m_srcTableName"] = "payrolltab";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto90["m_sql"] = "Employer";
$proto90["m_srcTableName"] = "payrolltab";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "PayrollID",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto92["m_sql"] = "PayrollID";
$proto92["m_srcTableName"] = "payrolltab";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto94["m_sql"] = "Email";
$proto94["m_srcTableName"] = "payrolltab";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "Locked",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto96["m_sql"] = "Locked";
$proto96["m_srcTableName"] = "payrolltab";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "Position",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto98["m_sql"] = "`Position`";
$proto98["m_srcTableName"] = "payrolltab";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto100=array();
$proto100["m_link"] = "SQLL_MAIN";
			$proto101=array();
$proto101["m_strName"] = "payrolltab";
$proto101["m_srcTableName"] = "payrolltab";
$proto101["m_columns"] = array();
$proto101["m_columns"][] = "PtabID";
$proto101["m_columns"][] = "EmployeeID";
$proto101["m_columns"][] = "WageType";
$proto101["m_columns"][] = "Status";
$proto101["m_columns"][] = "BasicMonthly";
$proto101["m_columns"][] = "BasicDaily";
$proto101["m_columns"][] = "DWork";
$proto101["m_columns"][] = "Absent";
$proto101["m_columns"][] = "LateMins";
$proto101["m_columns"][] = "UndertimeMins";
$proto101["m_columns"][] = "RHolidayHrs";
$proto101["m_columns"][] = "SHolidayHrs";
$proto101["m_columns"][] = "CHolidayHrs";
$proto101["m_columns"][] = "ExcessHrs";
$proto101["m_columns"][] = "RegOTHrs";
$proto101["m_columns"][] = "RHOTHrs";
$proto101["m_columns"][] = "SHOTHRs";
$proto101["m_columns"][] = "CHOTHrs";
$proto101["m_columns"][] = "RDOTHrs";
$proto101["m_columns"][] = "NDHrs";
$proto101["m_columns"][] = "RDHrs";
$proto101["m_columns"][] = "RegNDHrs";
$proto101["m_columns"][] = "RHNDHrs";
$proto101["m_columns"][] = "SHNDHrs";
$proto101["m_columns"][] = "CHNDHrs";
$proto101["m_columns"][] = "RDNDHrs";
$proto101["m_columns"][] = "VLDays";
$proto101["m_columns"][] = "SLDays";
$proto101["m_columns"][] = "ELDays";
$proto101["m_columns"][] = "PLDays";
$proto101["m_columns"][] = "TrODays";
$proto101["m_columns"][] = "FromDate";
$proto101["m_columns"][] = "ToDate";
$proto101["m_columns"][] = "UserName";
$proto101["m_columns"][] = "AllowancePerDay";
$proto101["m_columns"][] = "VLBalance";
$proto101["m_columns"][] = "SLBalance";
$proto101["m_columns"][] = "ELBalance";
$proto101["m_columns"][] = "PLBalance";
$proto101["m_columns"][] = "AgencyShare";
$proto101["m_columns"][] = "NDMealAllowance";
$proto101["m_columns"][] = "Division";
$proto101["m_columns"][] = "Employer";
$proto101["m_columns"][] = "PayrollID";
$proto101["m_columns"][] = "Email";
$proto101["m_columns"][] = "Locked";
$proto101["m_columns"][] = "Position";
$obj = new SQLTable($proto101);

$proto100["m_table"] = $obj;
$proto100["m_sql"] = "payrolltab";
$proto100["m_alias"] = "";
$proto100["m_srcTableName"] = "payrolltab";
$proto102=array();
$proto102["m_sql"] = "";
$proto102["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto102["m_column"]=$obj;
$proto102["m_contained"] = array();
$proto102["m_strCase"] = "";
$proto102["m_havingmode"] = false;
$proto102["m_inBrackets"] = false;
$proto102["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto102);

$proto100["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto100);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="payrolltab";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_payrolltab = createSqlQuery_payrolltab();


	
		;

																																															

$tdatapayrolltab[".sqlquery"] = $queryData_payrolltab;

include_once(getabspath("include/payrolltab_events.php"));
$tableEvents["payrolltab"] = new eventclass_payrolltab;
$tdatapayrolltab[".hasEvents"] = true;

?>