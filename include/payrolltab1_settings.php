<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapayrolltab1 = array();
	$tdatapayrolltab1[".truncateText"] = true;
	$tdatapayrolltab1[".NumberOfChars"] = 80;
	$tdatapayrolltab1[".ShortName"] = "payrolltab1";
	$tdatapayrolltab1[".OwnerID"] = "EmployeeID";
	$tdatapayrolltab1[".OriginalTable"] = "payrolltab";

//	field labels
$fieldLabelspayrolltab1 = array();
$fieldToolTipspayrolltab1 = array();
$pageTitlespayrolltab1 = array();
$placeHolderspayrolltab1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspayrolltab1["English"] = array();
	$fieldToolTipspayrolltab1["English"] = array();
	$placeHolderspayrolltab1["English"] = array();
	$pageTitlespayrolltab1["English"] = array();
	$fieldLabelspayrolltab1["English"]["PtabID"] = "Ptab ID";
	$fieldToolTipspayrolltab1["English"]["PtabID"] = "";
	$placeHolderspayrolltab1["English"]["PtabID"] = "";
	$fieldLabelspayrolltab1["English"]["WageType"] = "Wage Type";
	$fieldToolTipspayrolltab1["English"]["WageType"] = "";
	$placeHolderspayrolltab1["English"]["WageType"] = "";
	$fieldLabelspayrolltab1["English"]["Status"] = "Status";
	$fieldToolTipspayrolltab1["English"]["Status"] = "";
	$placeHolderspayrolltab1["English"]["Status"] = "";
	$fieldLabelspayrolltab1["English"]["EmployeeID"] = "Biometric ID";
	$fieldToolTipspayrolltab1["English"]["EmployeeID"] = "";
	$placeHolderspayrolltab1["English"]["EmployeeID"] = "";
	$fieldLabelspayrolltab1["English"]["BasicMonthly"] = "Basic Monthly";
	$fieldToolTipspayrolltab1["English"]["BasicMonthly"] = "";
	$placeHolderspayrolltab1["English"]["BasicMonthly"] = "";
	$fieldLabelspayrolltab1["English"]["BasicDaily"] = "Basic Daily";
	$fieldToolTipspayrolltab1["English"]["BasicDaily"] = "";
	$placeHolderspayrolltab1["English"]["BasicDaily"] = "";
	$fieldLabelspayrolltab1["English"]["DWork"] = "DWork";
	$fieldToolTipspayrolltab1["English"]["DWork"] = "";
	$placeHolderspayrolltab1["English"]["DWork"] = "";
	$fieldLabelspayrolltab1["English"]["Absent"] = "Absent";
	$fieldToolTipspayrolltab1["English"]["Absent"] = "";
	$placeHolderspayrolltab1["English"]["Absent"] = "";
	$fieldLabelspayrolltab1["English"]["LateMins"] = "Late Mins";
	$fieldToolTipspayrolltab1["English"]["LateMins"] = "";
	$placeHolderspayrolltab1["English"]["LateMins"] = "";
	$fieldLabelspayrolltab1["English"]["UndertimeMins"] = "Undertime Mins";
	$fieldToolTipspayrolltab1["English"]["UndertimeMins"] = "";
	$placeHolderspayrolltab1["English"]["UndertimeMins"] = "";
	$fieldLabelspayrolltab1["English"]["RHolidayHrs"] = "RHoliday Hrs";
	$fieldToolTipspayrolltab1["English"]["RHolidayHrs"] = "";
	$placeHolderspayrolltab1["English"]["RHolidayHrs"] = "";
	$fieldLabelspayrolltab1["English"]["SHolidayHrs"] = "SHoliday Hrs";
	$fieldToolTipspayrolltab1["English"]["SHolidayHrs"] = "";
	$placeHolderspayrolltab1["English"]["SHolidayHrs"] = "";
	$fieldLabelspayrolltab1["English"]["CHolidayHrs"] = "CHoliday Hrs";
	$fieldToolTipspayrolltab1["English"]["CHolidayHrs"] = "";
	$placeHolderspayrolltab1["English"]["CHolidayHrs"] = "";
	$fieldLabelspayrolltab1["English"]["ExcessHrs"] = "Excess Hrs";
	$fieldToolTipspayrolltab1["English"]["ExcessHrs"] = "";
	$placeHolderspayrolltab1["English"]["ExcessHrs"] = "";
	$fieldLabelspayrolltab1["English"]["RegOTHrs"] = "Reg OTHrs";
	$fieldToolTipspayrolltab1["English"]["RegOTHrs"] = "";
	$placeHolderspayrolltab1["English"]["RegOTHrs"] = "";
	$fieldLabelspayrolltab1["English"]["RHOTHrs"] = "RHOTHrs";
	$fieldToolTipspayrolltab1["English"]["RHOTHrs"] = "";
	$placeHolderspayrolltab1["English"]["RHOTHrs"] = "";
	$fieldLabelspayrolltab1["English"]["SHOTHRs"] = "SHOTHRs";
	$fieldToolTipspayrolltab1["English"]["SHOTHRs"] = "";
	$placeHolderspayrolltab1["English"]["SHOTHRs"] = "";
	$fieldLabelspayrolltab1["English"]["CHOTHrs"] = "CHOTHrs";
	$fieldToolTipspayrolltab1["English"]["CHOTHrs"] = "";
	$placeHolderspayrolltab1["English"]["CHOTHrs"] = "";
	$fieldLabelspayrolltab1["English"]["RDOTHrs"] = "RDOTHrs";
	$fieldToolTipspayrolltab1["English"]["RDOTHrs"] = "";
	$placeHolderspayrolltab1["English"]["RDOTHrs"] = "";
	$fieldLabelspayrolltab1["English"]["NDHrs"] = "NDHrs";
	$fieldToolTipspayrolltab1["English"]["NDHrs"] = "";
	$placeHolderspayrolltab1["English"]["NDHrs"] = "";
	$fieldLabelspayrolltab1["English"]["RDHrs"] = "RDHrs";
	$fieldToolTipspayrolltab1["English"]["RDHrs"] = "";
	$placeHolderspayrolltab1["English"]["RDHrs"] = "";
	$fieldLabelspayrolltab1["English"]["RegNDHrs"] = "Reg NDHrs";
	$fieldToolTipspayrolltab1["English"]["RegNDHrs"] = "";
	$placeHolderspayrolltab1["English"]["RegNDHrs"] = "";
	$fieldLabelspayrolltab1["English"]["RHNDHrs"] = "RHNDHrs";
	$fieldToolTipspayrolltab1["English"]["RHNDHrs"] = "";
	$placeHolderspayrolltab1["English"]["RHNDHrs"] = "";
	$fieldLabelspayrolltab1["English"]["SHNDHrs"] = "SHNDHrs";
	$fieldToolTipspayrolltab1["English"]["SHNDHrs"] = "";
	$placeHolderspayrolltab1["English"]["SHNDHrs"] = "";
	$fieldLabelspayrolltab1["English"]["CHNDHrs"] = "CHNDHrs";
	$fieldToolTipspayrolltab1["English"]["CHNDHrs"] = "";
	$placeHolderspayrolltab1["English"]["CHNDHrs"] = "";
	$fieldLabelspayrolltab1["English"]["RDNDHrs"] = "RDNDHrs";
	$fieldToolTipspayrolltab1["English"]["RDNDHrs"] = "";
	$placeHolderspayrolltab1["English"]["RDNDHrs"] = "";
	$fieldLabelspayrolltab1["English"]["VLDays"] = "VLDays";
	$fieldToolTipspayrolltab1["English"]["VLDays"] = "";
	$placeHolderspayrolltab1["English"]["VLDays"] = "";
	$fieldLabelspayrolltab1["English"]["SLDays"] = "SLDays";
	$fieldToolTipspayrolltab1["English"]["SLDays"] = "";
	$placeHolderspayrolltab1["English"]["SLDays"] = "";
	$fieldLabelspayrolltab1["English"]["ELDays"] = "ELDays";
	$fieldToolTipspayrolltab1["English"]["ELDays"] = "";
	$placeHolderspayrolltab1["English"]["ELDays"] = "";
	$fieldLabelspayrolltab1["English"]["PLDays"] = "PLDays";
	$fieldToolTipspayrolltab1["English"]["PLDays"] = "";
	$placeHolderspayrolltab1["English"]["PLDays"] = "";
	$fieldLabelspayrolltab1["English"]["TrODays"] = "Tr ODays";
	$fieldToolTipspayrolltab1["English"]["TrODays"] = "";
	$placeHolderspayrolltab1["English"]["TrODays"] = "";
	$fieldLabelspayrolltab1["English"]["FromDate"] = "From Date";
	$fieldToolTipspayrolltab1["English"]["FromDate"] = "";
	$placeHolderspayrolltab1["English"]["FromDate"] = "";
	$fieldLabelspayrolltab1["English"]["ToDate"] = "To Date";
	$fieldToolTipspayrolltab1["English"]["ToDate"] = "";
	$placeHolderspayrolltab1["English"]["ToDate"] = "";
	$fieldLabelspayrolltab1["English"]["UserName"] = "Employee";
	$fieldToolTipspayrolltab1["English"]["UserName"] = "";
	$placeHolderspayrolltab1["English"]["UserName"] = "";
	$fieldLabelspayrolltab1["English"]["AllowancePerDay"] = "Allowance Per Day";
	$fieldToolTipspayrolltab1["English"]["AllowancePerDay"] = "";
	$placeHolderspayrolltab1["English"]["AllowancePerDay"] = "";
	$fieldLabelspayrolltab1["English"]["VLBalance"] = "VLBalance";
	$fieldToolTipspayrolltab1["English"]["VLBalance"] = "";
	$placeHolderspayrolltab1["English"]["VLBalance"] = "";
	$fieldLabelspayrolltab1["English"]["SLBalance"] = "SLBalance";
	$fieldToolTipspayrolltab1["English"]["SLBalance"] = "";
	$placeHolderspayrolltab1["English"]["SLBalance"] = "";
	$fieldLabelspayrolltab1["English"]["ELBalance"] = "ELBalance";
	$fieldToolTipspayrolltab1["English"]["ELBalance"] = "";
	$placeHolderspayrolltab1["English"]["ELBalance"] = "";
	$fieldLabelspayrolltab1["English"]["PLBalance"] = "PLBalance";
	$fieldToolTipspayrolltab1["English"]["PLBalance"] = "";
	$placeHolderspayrolltab1["English"]["PLBalance"] = "";
	$fieldLabelspayrolltab1["English"]["AgencyShare"] = "Agency Share";
	$fieldToolTipspayrolltab1["English"]["AgencyShare"] = "";
	$placeHolderspayrolltab1["English"]["AgencyShare"] = "";
	$fieldLabelspayrolltab1["English"]["NDMealAllowance"] = "NDMeal Allowance";
	$fieldToolTipspayrolltab1["English"]["NDMealAllowance"] = "";
	$placeHolderspayrolltab1["English"]["NDMealAllowance"] = "";
	$fieldLabelspayrolltab1["English"]["Division"] = "Division";
	$fieldToolTipspayrolltab1["English"]["Division"] = "";
	$placeHolderspayrolltab1["English"]["Division"] = "";
	$fieldLabelspayrolltab1["English"]["Employer"] = "Employer";
	$fieldToolTipspayrolltab1["English"]["Employer"] = "";
	$placeHolderspayrolltab1["English"]["Employer"] = "";
	$fieldLabelspayrolltab1["English"]["PayrollID"] = "Payroll ID";
	$fieldToolTipspayrolltab1["English"]["PayrollID"] = "";
	$placeHolderspayrolltab1["English"]["PayrollID"] = "";
	$fieldLabelspayrolltab1["English"]["Email"] = "Email";
	$fieldToolTipspayrolltab1["English"]["Email"] = "";
	$placeHolderspayrolltab1["English"]["Email"] = "";
	$fieldLabelspayrolltab1["English"]["Locked"] = "Locked";
	$fieldToolTipspayrolltab1["English"]["Locked"] = "";
	$placeHolderspayrolltab1["English"]["Locked"] = "";
	$fieldLabelspayrolltab1["English"]["Position"] = "Position";
	$fieldToolTipspayrolltab1["English"]["Position"] = "";
	$placeHolderspayrolltab1["English"]["Position"] = "";
	if (count($fieldToolTipspayrolltab1["English"]))
		$tdatapayrolltab1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspayrolltab1[""] = array();
	$fieldToolTipspayrolltab1[""] = array();
	$placeHolderspayrolltab1[""] = array();
	$pageTitlespayrolltab1[""] = array();
	if (count($fieldToolTipspayrolltab1[""]))
		$tdatapayrolltab1[".isUseToolTips"] = true;
}


	$tdatapayrolltab1[".NCSearch"] = true;



$tdatapayrolltab1[".shortTableName"] = "payrolltab1";
$tdatapayrolltab1[".nSecOptions"] = 1;
$tdatapayrolltab1[".recsPerRowPrint"] = 1;
$tdatapayrolltab1[".mainTableOwnerID"] = "EmployeeID";
$tdatapayrolltab1[".moveNext"] = 1;
$tdatapayrolltab1[".entityType"] = 1;

$tdatapayrolltab1[".strOriginalTableName"] = "payrolltab";

	



$tdatapayrolltab1[".showAddInPopup"] = false;

$tdatapayrolltab1[".showEditInPopup"] = false;

$tdatapayrolltab1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapayrolltab1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapayrolltab1[".fieldsForRegister"] = array();

$tdatapayrolltab1[".listAjax"] = false;

	$tdatapayrolltab1[".audit"] = false;

	$tdatapayrolltab1[".locking"] = false;



$tdatapayrolltab1[".list"] = true;



$tdatapayrolltab1[".reorderRecordsByHeader"] = true;


$tdatapayrolltab1[".exportFormatting"] = 2;
$tdatapayrolltab1[".exportDelimiter"] = ",";
		
$tdatapayrolltab1[".view"] = true;


$tdatapayrolltab1[".exportTo"] = true;

$tdatapayrolltab1[".printFriendly"] = true;


$tdatapayrolltab1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapayrolltab1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapayrolltab1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapayrolltab1[".searchSaving"] = false;
//

$tdatapayrolltab1[".showSearchPanel"] = true;
		$tdatapayrolltab1[".flexibleSearch"] = true;

$tdatapayrolltab1[".isUseAjaxSuggest"] = true;

$tdatapayrolltab1[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																													
											

$tdatapayrolltab1[".ajaxCodeSnippetAdded"] = false;

$tdatapayrolltab1[".buttonsAdded"] = true;

$tdatapayrolltab1[".addPageEvents"] = true;

// use timepicker for search panel
$tdatapayrolltab1[".isUseTimeForSearch"] = false;



$tdatapayrolltab1[".badgeColor"] = "2F4F4F";

$tdatapayrolltab1[".detailsLinksOnList"] = "1";

$tdatapayrolltab1[".allSearchFields"] = array();
$tdatapayrolltab1[".filterFields"] = array();
$tdatapayrolltab1[".requiredSearchFields"] = array();

$tdatapayrolltab1[".allSearchFields"][] = "PtabID";
	$tdatapayrolltab1[".allSearchFields"][] = "Locked";
	$tdatapayrolltab1[".allSearchFields"][] = "Email";
	$tdatapayrolltab1[".allSearchFields"][] = "PayrollID";
	$tdatapayrolltab1[".allSearchFields"][] = "EmployeeID";
	$tdatapayrolltab1[".allSearchFields"][] = "UserName";
	$tdatapayrolltab1[".allSearchFields"][] = "Position";
	$tdatapayrolltab1[".allSearchFields"][] = "Division";
	$tdatapayrolltab1[".allSearchFields"][] = "Employer";
	$tdatapayrolltab1[".allSearchFields"][] = "WageType";
	$tdatapayrolltab1[".allSearchFields"][] = "Status";
	$tdatapayrolltab1[".allSearchFields"][] = "FromDate";
	$tdatapayrolltab1[".allSearchFields"][] = "ToDate";
	$tdatapayrolltab1[".allSearchFields"][] = "BasicMonthly";
	$tdatapayrolltab1[".allSearchFields"][] = "BasicDaily";
	$tdatapayrolltab1[".allSearchFields"][] = "DWork";
	$tdatapayrolltab1[".allSearchFields"][] = "Absent";
	$tdatapayrolltab1[".allSearchFields"][] = "LateMins";
	$tdatapayrolltab1[".allSearchFields"][] = "UndertimeMins";
	$tdatapayrolltab1[".allSearchFields"][] = "RHolidayHrs";
	$tdatapayrolltab1[".allSearchFields"][] = "SHolidayHrs";
	$tdatapayrolltab1[".allSearchFields"][] = "CHolidayHrs";
	$tdatapayrolltab1[".allSearchFields"][] = "ExcessHrs";
	$tdatapayrolltab1[".allSearchFields"][] = "RegOTHrs";
	$tdatapayrolltab1[".allSearchFields"][] = "RHOTHrs";
	$tdatapayrolltab1[".allSearchFields"][] = "SHOTHRs";
	$tdatapayrolltab1[".allSearchFields"][] = "CHOTHrs";
	$tdatapayrolltab1[".allSearchFields"][] = "TrODays";
	$tdatapayrolltab1[".allSearchFields"][] = "RDOTHrs";
	$tdatapayrolltab1[".allSearchFields"][] = "NDHrs";
	$tdatapayrolltab1[".allSearchFields"][] = "RDHrs";
	$tdatapayrolltab1[".allSearchFields"][] = "RegNDHrs";
	$tdatapayrolltab1[".allSearchFields"][] = "RHNDHrs";
	$tdatapayrolltab1[".allSearchFields"][] = "SHNDHrs";
	$tdatapayrolltab1[".allSearchFields"][] = "CHNDHrs";
	$tdatapayrolltab1[".allSearchFields"][] = "RDNDHrs";
	$tdatapayrolltab1[".allSearchFields"][] = "VLDays";
	$tdatapayrolltab1[".allSearchFields"][] = "SLDays";
	$tdatapayrolltab1[".allSearchFields"][] = "ELDays";
	$tdatapayrolltab1[".allSearchFields"][] = "PLDays";
	$tdatapayrolltab1[".allSearchFields"][] = "PLBalance";
	$tdatapayrolltab1[".allSearchFields"][] = "ELBalance";
	$tdatapayrolltab1[".allSearchFields"][] = "SLBalance";
	$tdatapayrolltab1[".allSearchFields"][] = "VLBalance";
	$tdatapayrolltab1[".allSearchFields"][] = "AllowancePerDay";
	$tdatapayrolltab1[".allSearchFields"][] = "AgencyShare";
	$tdatapayrolltab1[".allSearchFields"][] = "NDMealAllowance";
	

$tdatapayrolltab1[".googleLikeFields"] = array();
$tdatapayrolltab1[".googleLikeFields"][] = "PtabID";
$tdatapayrolltab1[".googleLikeFields"][] = "EmployeeID";
$tdatapayrolltab1[".googleLikeFields"][] = "WageType";
$tdatapayrolltab1[".googleLikeFields"][] = "Status";
$tdatapayrolltab1[".googleLikeFields"][] = "BasicMonthly";
$tdatapayrolltab1[".googleLikeFields"][] = "BasicDaily";
$tdatapayrolltab1[".googleLikeFields"][] = "DWork";
$tdatapayrolltab1[".googleLikeFields"][] = "Absent";
$tdatapayrolltab1[".googleLikeFields"][] = "LateMins";
$tdatapayrolltab1[".googleLikeFields"][] = "UndertimeMins";
$tdatapayrolltab1[".googleLikeFields"][] = "RHolidayHrs";
$tdatapayrolltab1[".googleLikeFields"][] = "SHolidayHrs";
$tdatapayrolltab1[".googleLikeFields"][] = "CHolidayHrs";
$tdatapayrolltab1[".googleLikeFields"][] = "ExcessHrs";
$tdatapayrolltab1[".googleLikeFields"][] = "RegOTHrs";
$tdatapayrolltab1[".googleLikeFields"][] = "RHOTHrs";
$tdatapayrolltab1[".googleLikeFields"][] = "SHOTHRs";
$tdatapayrolltab1[".googleLikeFields"][] = "CHOTHrs";
$tdatapayrolltab1[".googleLikeFields"][] = "RDOTHrs";
$tdatapayrolltab1[".googleLikeFields"][] = "NDHrs";
$tdatapayrolltab1[".googleLikeFields"][] = "RDHrs";
$tdatapayrolltab1[".googleLikeFields"][] = "RegNDHrs";
$tdatapayrolltab1[".googleLikeFields"][] = "RHNDHrs";
$tdatapayrolltab1[".googleLikeFields"][] = "SHNDHrs";
$tdatapayrolltab1[".googleLikeFields"][] = "CHNDHrs";
$tdatapayrolltab1[".googleLikeFields"][] = "RDNDHrs";
$tdatapayrolltab1[".googleLikeFields"][] = "VLDays";
$tdatapayrolltab1[".googleLikeFields"][] = "SLDays";
$tdatapayrolltab1[".googleLikeFields"][] = "ELDays";
$tdatapayrolltab1[".googleLikeFields"][] = "PLDays";
$tdatapayrolltab1[".googleLikeFields"][] = "TrODays";
$tdatapayrolltab1[".googleLikeFields"][] = "FromDate";
$tdatapayrolltab1[".googleLikeFields"][] = "ToDate";
$tdatapayrolltab1[".googleLikeFields"][] = "UserName";
$tdatapayrolltab1[".googleLikeFields"][] = "AllowancePerDay";
$tdatapayrolltab1[".googleLikeFields"][] = "VLBalance";
$tdatapayrolltab1[".googleLikeFields"][] = "SLBalance";
$tdatapayrolltab1[".googleLikeFields"][] = "ELBalance";
$tdatapayrolltab1[".googleLikeFields"][] = "PLBalance";
$tdatapayrolltab1[".googleLikeFields"][] = "AgencyShare";
$tdatapayrolltab1[".googleLikeFields"][] = "NDMealAllowance";
$tdatapayrolltab1[".googleLikeFields"][] = "Division";
$tdatapayrolltab1[".googleLikeFields"][] = "Employer";
$tdatapayrolltab1[".googleLikeFields"][] = "PayrollID";
$tdatapayrolltab1[".googleLikeFields"][] = "Email";
$tdatapayrolltab1[".googleLikeFields"][] = "Locked";
$tdatapayrolltab1[".googleLikeFields"][] = "Position";


$tdatapayrolltab1[".advSearchFields"] = array();
$tdatapayrolltab1[".advSearchFields"][] = "PtabID";
$tdatapayrolltab1[".advSearchFields"][] = "Locked";
$tdatapayrolltab1[".advSearchFields"][] = "Email";
$tdatapayrolltab1[".advSearchFields"][] = "PayrollID";
$tdatapayrolltab1[".advSearchFields"][] = "EmployeeID";
$tdatapayrolltab1[".advSearchFields"][] = "UserName";
$tdatapayrolltab1[".advSearchFields"][] = "Position";
$tdatapayrolltab1[".advSearchFields"][] = "Division";
$tdatapayrolltab1[".advSearchFields"][] = "Employer";
$tdatapayrolltab1[".advSearchFields"][] = "WageType";
$tdatapayrolltab1[".advSearchFields"][] = "Status";
$tdatapayrolltab1[".advSearchFields"][] = "FromDate";
$tdatapayrolltab1[".advSearchFields"][] = "ToDate";
$tdatapayrolltab1[".advSearchFields"][] = "BasicMonthly";
$tdatapayrolltab1[".advSearchFields"][] = "BasicDaily";
$tdatapayrolltab1[".advSearchFields"][] = "DWork";
$tdatapayrolltab1[".advSearchFields"][] = "Absent";
$tdatapayrolltab1[".advSearchFields"][] = "LateMins";
$tdatapayrolltab1[".advSearchFields"][] = "UndertimeMins";
$tdatapayrolltab1[".advSearchFields"][] = "RHolidayHrs";
$tdatapayrolltab1[".advSearchFields"][] = "SHolidayHrs";
$tdatapayrolltab1[".advSearchFields"][] = "CHolidayHrs";
$tdatapayrolltab1[".advSearchFields"][] = "ExcessHrs";
$tdatapayrolltab1[".advSearchFields"][] = "RegOTHrs";
$tdatapayrolltab1[".advSearchFields"][] = "RHOTHrs";
$tdatapayrolltab1[".advSearchFields"][] = "SHOTHRs";
$tdatapayrolltab1[".advSearchFields"][] = "CHOTHrs";
$tdatapayrolltab1[".advSearchFields"][] = "TrODays";
$tdatapayrolltab1[".advSearchFields"][] = "RDOTHrs";
$tdatapayrolltab1[".advSearchFields"][] = "NDHrs";
$tdatapayrolltab1[".advSearchFields"][] = "RDHrs";
$tdatapayrolltab1[".advSearchFields"][] = "RegNDHrs";
$tdatapayrolltab1[".advSearchFields"][] = "RHNDHrs";
$tdatapayrolltab1[".advSearchFields"][] = "SHNDHrs";
$tdatapayrolltab1[".advSearchFields"][] = "CHNDHrs";
$tdatapayrolltab1[".advSearchFields"][] = "RDNDHrs";
$tdatapayrolltab1[".advSearchFields"][] = "VLDays";
$tdatapayrolltab1[".advSearchFields"][] = "SLDays";
$tdatapayrolltab1[".advSearchFields"][] = "ELDays";
$tdatapayrolltab1[".advSearchFields"][] = "PLDays";
$tdatapayrolltab1[".advSearchFields"][] = "PLBalance";
$tdatapayrolltab1[".advSearchFields"][] = "ELBalance";
$tdatapayrolltab1[".advSearchFields"][] = "SLBalance";
$tdatapayrolltab1[".advSearchFields"][] = "VLBalance";
$tdatapayrolltab1[".advSearchFields"][] = "AllowancePerDay";
$tdatapayrolltab1[".advSearchFields"][] = "AgencyShare";
$tdatapayrolltab1[".advSearchFields"][] = "NDMealAllowance";

$tdatapayrolltab1[".tableType"] = "list";

$tdatapayrolltab1[".printerPageOrientation"] = 0;
$tdatapayrolltab1[".nPrinterPageScale"] = 100;

$tdatapayrolltab1[".nPrinterSplitRecords"] = 40;

$tdatapayrolltab1[".nPrinterPDFSplitRecords"] = 40;



$tdatapayrolltab1[".geocodingEnabled"] = false;





$tdatapayrolltab1[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatapayrolltab1[".pageSize"] = 20;

$tdatapayrolltab1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapayrolltab1[".strOrderBy"] = $tstrOrderBy;

$tdatapayrolltab1[".orderindexes"] = array();

$tdatapayrolltab1[".sqlHead"] = "SELECT PtabID,  	EmployeeID,  	WageType,  	Status,  	BasicMonthly,  	BasicDaily,  	DWork,  	Absent,  	LateMins,  	UndertimeMins,  	RHolidayHrs,  	SHolidayHrs,  	CHolidayHrs,  	ExcessHrs,  	RegOTHrs,  	RHOTHrs,  	SHOTHRs,  	CHOTHrs,  	RDOTHrs,  	NDHrs,  	RDHrs,  	RegNDHrs,  	RHNDHrs,  	SHNDHrs,  	CHNDHrs,  	RDNDHrs,  	VLDays,  	SLDays,  	ELDays,  	PLDays,  	TrODays,  	FromDate,  	ToDate,  	UserName,  	AllowancePerDay,  	VLBalance,  	SLBalance,  	ELBalance,  	PLBalance,  	AgencyShare,  	NDMealAllowance,  	Division,  	Employer,  	PayrollID,  	Email,  	Locked,  	`Position`";
$tdatapayrolltab1[".sqlFrom"] = "FROM payrolltab";
$tdatapayrolltab1[".sqlWhereExpr"] = "";
$tdatapayrolltab1[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapayrolltab1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapayrolltab1[".arrGroupsPerPage"] = $arrGPP;

$tdatapayrolltab1[".highlightSearchResults"] = true;

$tableKeyspayrolltab1 = array();
$tableKeyspayrolltab1[] = "PtabID";
$tdatapayrolltab1[".Keys"] = $tableKeyspayrolltab1;

$tdatapayrolltab1[".listFields"] = array();
$tdatapayrolltab1[".listFields"][] = "PtabID";
$tdatapayrolltab1[".listFields"][] = "Locked";
$tdatapayrolltab1[".listFields"][] = "Email";
$tdatapayrolltab1[".listFields"][] = "PayrollID";
$tdatapayrolltab1[".listFields"][] = "EmployeeID";
$tdatapayrolltab1[".listFields"][] = "UserName";
$tdatapayrolltab1[".listFields"][] = "Position";
$tdatapayrolltab1[".listFields"][] = "Division";
$tdatapayrolltab1[".listFields"][] = "Employer";
$tdatapayrolltab1[".listFields"][] = "WageType";
$tdatapayrolltab1[".listFields"][] = "Status";
$tdatapayrolltab1[".listFields"][] = "FromDate";
$tdatapayrolltab1[".listFields"][] = "ToDate";
$tdatapayrolltab1[".listFields"][] = "BasicMonthly";
$tdatapayrolltab1[".listFields"][] = "BasicDaily";
$tdatapayrolltab1[".listFields"][] = "DWork";
$tdatapayrolltab1[".listFields"][] = "Absent";
$tdatapayrolltab1[".listFields"][] = "LateMins";
$tdatapayrolltab1[".listFields"][] = "UndertimeMins";
$tdatapayrolltab1[".listFields"][] = "RHolidayHrs";
$tdatapayrolltab1[".listFields"][] = "SHolidayHrs";
$tdatapayrolltab1[".listFields"][] = "CHolidayHrs";
$tdatapayrolltab1[".listFields"][] = "ExcessHrs";
$tdatapayrolltab1[".listFields"][] = "RegOTHrs";
$tdatapayrolltab1[".listFields"][] = "RHOTHrs";
$tdatapayrolltab1[".listFields"][] = "SHOTHRs";
$tdatapayrolltab1[".listFields"][] = "CHOTHrs";
$tdatapayrolltab1[".listFields"][] = "TrODays";
$tdatapayrolltab1[".listFields"][] = "RDOTHrs";
$tdatapayrolltab1[".listFields"][] = "NDHrs";
$tdatapayrolltab1[".listFields"][] = "RDHrs";
$tdatapayrolltab1[".listFields"][] = "RegNDHrs";
$tdatapayrolltab1[".listFields"][] = "RHNDHrs";
$tdatapayrolltab1[".listFields"][] = "SHNDHrs";
$tdatapayrolltab1[".listFields"][] = "CHNDHrs";
$tdatapayrolltab1[".listFields"][] = "RDNDHrs";
$tdatapayrolltab1[".listFields"][] = "VLDays";
$tdatapayrolltab1[".listFields"][] = "SLDays";
$tdatapayrolltab1[".listFields"][] = "ELDays";
$tdatapayrolltab1[".listFields"][] = "PLDays";
$tdatapayrolltab1[".listFields"][] = "PLBalance";
$tdatapayrolltab1[".listFields"][] = "ELBalance";
$tdatapayrolltab1[".listFields"][] = "SLBalance";
$tdatapayrolltab1[".listFields"][] = "VLBalance";
$tdatapayrolltab1[".listFields"][] = "AllowancePerDay";
$tdatapayrolltab1[".listFields"][] = "AgencyShare";
$tdatapayrolltab1[".listFields"][] = "NDMealAllowance";

$tdatapayrolltab1[".hideMobileList"] = array();


$tdatapayrolltab1[".viewFields"] = array();
$tdatapayrolltab1[".viewFields"][] = "PtabID";
$tdatapayrolltab1[".viewFields"][] = "Locked";
$tdatapayrolltab1[".viewFields"][] = "Email";
$tdatapayrolltab1[".viewFields"][] = "PayrollID";
$tdatapayrolltab1[".viewFields"][] = "EmployeeID";
$tdatapayrolltab1[".viewFields"][] = "UserName";
$tdatapayrolltab1[".viewFields"][] = "Position";
$tdatapayrolltab1[".viewFields"][] = "Division";
$tdatapayrolltab1[".viewFields"][] = "Employer";
$tdatapayrolltab1[".viewFields"][] = "WageType";
$tdatapayrolltab1[".viewFields"][] = "Status";
$tdatapayrolltab1[".viewFields"][] = "FromDate";
$tdatapayrolltab1[".viewFields"][] = "ToDate";
$tdatapayrolltab1[".viewFields"][] = "BasicMonthly";
$tdatapayrolltab1[".viewFields"][] = "BasicDaily";
$tdatapayrolltab1[".viewFields"][] = "DWork";
$tdatapayrolltab1[".viewFields"][] = "Absent";
$tdatapayrolltab1[".viewFields"][] = "LateMins";
$tdatapayrolltab1[".viewFields"][] = "UndertimeMins";
$tdatapayrolltab1[".viewFields"][] = "RHolidayHrs";
$tdatapayrolltab1[".viewFields"][] = "SHolidayHrs";
$tdatapayrolltab1[".viewFields"][] = "CHolidayHrs";
$tdatapayrolltab1[".viewFields"][] = "ExcessHrs";
$tdatapayrolltab1[".viewFields"][] = "RegOTHrs";
$tdatapayrolltab1[".viewFields"][] = "RHOTHrs";
$tdatapayrolltab1[".viewFields"][] = "SHOTHRs";
$tdatapayrolltab1[".viewFields"][] = "CHOTHrs";
$tdatapayrolltab1[".viewFields"][] = "TrODays";
$tdatapayrolltab1[".viewFields"][] = "RDOTHrs";
$tdatapayrolltab1[".viewFields"][] = "NDHrs";
$tdatapayrolltab1[".viewFields"][] = "RDHrs";
$tdatapayrolltab1[".viewFields"][] = "RegNDHrs";
$tdatapayrolltab1[".viewFields"][] = "RHNDHrs";
$tdatapayrolltab1[".viewFields"][] = "SHNDHrs";
$tdatapayrolltab1[".viewFields"][] = "CHNDHrs";
$tdatapayrolltab1[".viewFields"][] = "RDNDHrs";
$tdatapayrolltab1[".viewFields"][] = "VLDays";
$tdatapayrolltab1[".viewFields"][] = "SLDays";
$tdatapayrolltab1[".viewFields"][] = "ELDays";
$tdatapayrolltab1[".viewFields"][] = "PLDays";
$tdatapayrolltab1[".viewFields"][] = "PLBalance";
$tdatapayrolltab1[".viewFields"][] = "ELBalance";
$tdatapayrolltab1[".viewFields"][] = "SLBalance";
$tdatapayrolltab1[".viewFields"][] = "VLBalance";
$tdatapayrolltab1[".viewFields"][] = "AllowancePerDay";
$tdatapayrolltab1[".viewFields"][] = "AgencyShare";
$tdatapayrolltab1[".viewFields"][] = "NDMealAllowance";

$tdatapayrolltab1[".addFields"] = array();

$tdatapayrolltab1[".masterListFields"] = array();
$tdatapayrolltab1[".masterListFields"][] = "PtabID";
$tdatapayrolltab1[".masterListFields"][] = "Locked";
$tdatapayrolltab1[".masterListFields"][] = "Email";
$tdatapayrolltab1[".masterListFields"][] = "PayrollID";
$tdatapayrolltab1[".masterListFields"][] = "EmployeeID";
$tdatapayrolltab1[".masterListFields"][] = "UserName";
$tdatapayrolltab1[".masterListFields"][] = "Position";
$tdatapayrolltab1[".masterListFields"][] = "Division";
$tdatapayrolltab1[".masterListFields"][] = "Employer";
$tdatapayrolltab1[".masterListFields"][] = "WageType";
$tdatapayrolltab1[".masterListFields"][] = "Status";
$tdatapayrolltab1[".masterListFields"][] = "FromDate";
$tdatapayrolltab1[".masterListFields"][] = "ToDate";
$tdatapayrolltab1[".masterListFields"][] = "BasicMonthly";
$tdatapayrolltab1[".masterListFields"][] = "BasicDaily";
$tdatapayrolltab1[".masterListFields"][] = "DWork";
$tdatapayrolltab1[".masterListFields"][] = "Absent";
$tdatapayrolltab1[".masterListFields"][] = "LateMins";
$tdatapayrolltab1[".masterListFields"][] = "UndertimeMins";
$tdatapayrolltab1[".masterListFields"][] = "RHolidayHrs";
$tdatapayrolltab1[".masterListFields"][] = "SHolidayHrs";
$tdatapayrolltab1[".masterListFields"][] = "CHolidayHrs";
$tdatapayrolltab1[".masterListFields"][] = "ExcessHrs";
$tdatapayrolltab1[".masterListFields"][] = "RegOTHrs";
$tdatapayrolltab1[".masterListFields"][] = "RHOTHrs";
$tdatapayrolltab1[".masterListFields"][] = "SHOTHRs";
$tdatapayrolltab1[".masterListFields"][] = "CHOTHrs";
$tdatapayrolltab1[".masterListFields"][] = "TrODays";
$tdatapayrolltab1[".masterListFields"][] = "RDOTHrs";
$tdatapayrolltab1[".masterListFields"][] = "NDHrs";
$tdatapayrolltab1[".masterListFields"][] = "RDHrs";
$tdatapayrolltab1[".masterListFields"][] = "RegNDHrs";
$tdatapayrolltab1[".masterListFields"][] = "RHNDHrs";
$tdatapayrolltab1[".masterListFields"][] = "SHNDHrs";
$tdatapayrolltab1[".masterListFields"][] = "CHNDHrs";
$tdatapayrolltab1[".masterListFields"][] = "RDNDHrs";
$tdatapayrolltab1[".masterListFields"][] = "VLDays";
$tdatapayrolltab1[".masterListFields"][] = "SLDays";
$tdatapayrolltab1[".masterListFields"][] = "ELDays";
$tdatapayrolltab1[".masterListFields"][] = "PLDays";
$tdatapayrolltab1[".masterListFields"][] = "PLBalance";
$tdatapayrolltab1[".masterListFields"][] = "ELBalance";
$tdatapayrolltab1[".masterListFields"][] = "SLBalance";
$tdatapayrolltab1[".masterListFields"][] = "VLBalance";
$tdatapayrolltab1[".masterListFields"][] = "AllowancePerDay";
$tdatapayrolltab1[".masterListFields"][] = "AgencyShare";
$tdatapayrolltab1[".masterListFields"][] = "NDMealAllowance";

$tdatapayrolltab1[".inlineAddFields"] = array();

$tdatapayrolltab1[".editFields"] = array();

$tdatapayrolltab1[".inlineEditFields"] = array();

$tdatapayrolltab1[".updateSelectedFields"] = array();


$tdatapayrolltab1[".exportFields"] = array();
$tdatapayrolltab1[".exportFields"][] = "PtabID";
$tdatapayrolltab1[".exportFields"][] = "Locked";
$tdatapayrolltab1[".exportFields"][] = "Email";
$tdatapayrolltab1[".exportFields"][] = "PayrollID";
$tdatapayrolltab1[".exportFields"][] = "EmployeeID";
$tdatapayrolltab1[".exportFields"][] = "UserName";
$tdatapayrolltab1[".exportFields"][] = "Position";
$tdatapayrolltab1[".exportFields"][] = "Division";
$tdatapayrolltab1[".exportFields"][] = "Employer";
$tdatapayrolltab1[".exportFields"][] = "WageType";
$tdatapayrolltab1[".exportFields"][] = "Status";
$tdatapayrolltab1[".exportFields"][] = "FromDate";
$tdatapayrolltab1[".exportFields"][] = "ToDate";
$tdatapayrolltab1[".exportFields"][] = "BasicMonthly";
$tdatapayrolltab1[".exportFields"][] = "BasicDaily";
$tdatapayrolltab1[".exportFields"][] = "DWork";
$tdatapayrolltab1[".exportFields"][] = "Absent";
$tdatapayrolltab1[".exportFields"][] = "LateMins";
$tdatapayrolltab1[".exportFields"][] = "UndertimeMins";
$tdatapayrolltab1[".exportFields"][] = "RHolidayHrs";
$tdatapayrolltab1[".exportFields"][] = "SHolidayHrs";
$tdatapayrolltab1[".exportFields"][] = "CHolidayHrs";
$tdatapayrolltab1[".exportFields"][] = "ExcessHrs";
$tdatapayrolltab1[".exportFields"][] = "RegOTHrs";
$tdatapayrolltab1[".exportFields"][] = "RHOTHrs";
$tdatapayrolltab1[".exportFields"][] = "SHOTHRs";
$tdatapayrolltab1[".exportFields"][] = "CHOTHrs";
$tdatapayrolltab1[".exportFields"][] = "TrODays";
$tdatapayrolltab1[".exportFields"][] = "RDOTHrs";
$tdatapayrolltab1[".exportFields"][] = "NDHrs";
$tdatapayrolltab1[".exportFields"][] = "RDHrs";
$tdatapayrolltab1[".exportFields"][] = "RegNDHrs";
$tdatapayrolltab1[".exportFields"][] = "RHNDHrs";
$tdatapayrolltab1[".exportFields"][] = "SHNDHrs";
$tdatapayrolltab1[".exportFields"][] = "CHNDHrs";
$tdatapayrolltab1[".exportFields"][] = "RDNDHrs";
$tdatapayrolltab1[".exportFields"][] = "VLDays";
$tdatapayrolltab1[".exportFields"][] = "SLDays";
$tdatapayrolltab1[".exportFields"][] = "ELDays";
$tdatapayrolltab1[".exportFields"][] = "PLDays";
$tdatapayrolltab1[".exportFields"][] = "PLBalance";
$tdatapayrolltab1[".exportFields"][] = "ELBalance";
$tdatapayrolltab1[".exportFields"][] = "SLBalance";
$tdatapayrolltab1[".exportFields"][] = "VLBalance";
$tdatapayrolltab1[".exportFields"][] = "AllowancePerDay";
$tdatapayrolltab1[".exportFields"][] = "AgencyShare";
$tdatapayrolltab1[".exportFields"][] = "NDMealAllowance";

$tdatapayrolltab1[".importFields"] = array();

$tdatapayrolltab1[".printFields"] = array();
$tdatapayrolltab1[".printFields"][] = "PtabID";
$tdatapayrolltab1[".printFields"][] = "Locked";
$tdatapayrolltab1[".printFields"][] = "Email";
$tdatapayrolltab1[".printFields"][] = "PayrollID";
$tdatapayrolltab1[".printFields"][] = "EmployeeID";
$tdatapayrolltab1[".printFields"][] = "UserName";
$tdatapayrolltab1[".printFields"][] = "Position";
$tdatapayrolltab1[".printFields"][] = "Division";
$tdatapayrolltab1[".printFields"][] = "Employer";
$tdatapayrolltab1[".printFields"][] = "WageType";
$tdatapayrolltab1[".printFields"][] = "Status";
$tdatapayrolltab1[".printFields"][] = "FromDate";
$tdatapayrolltab1[".printFields"][] = "ToDate";
$tdatapayrolltab1[".printFields"][] = "BasicMonthly";
$tdatapayrolltab1[".printFields"][] = "BasicDaily";
$tdatapayrolltab1[".printFields"][] = "DWork";
$tdatapayrolltab1[".printFields"][] = "Absent";
$tdatapayrolltab1[".printFields"][] = "LateMins";
$tdatapayrolltab1[".printFields"][] = "UndertimeMins";
$tdatapayrolltab1[".printFields"][] = "RHolidayHrs";
$tdatapayrolltab1[".printFields"][] = "SHolidayHrs";
$tdatapayrolltab1[".printFields"][] = "CHolidayHrs";
$tdatapayrolltab1[".printFields"][] = "ExcessHrs";
$tdatapayrolltab1[".printFields"][] = "RegOTHrs";
$tdatapayrolltab1[".printFields"][] = "RHOTHrs";
$tdatapayrolltab1[".printFields"][] = "SHOTHRs";
$tdatapayrolltab1[".printFields"][] = "CHOTHrs";
$tdatapayrolltab1[".printFields"][] = "TrODays";
$tdatapayrolltab1[".printFields"][] = "RDOTHrs";
$tdatapayrolltab1[".printFields"][] = "NDHrs";
$tdatapayrolltab1[".printFields"][] = "RDHrs";
$tdatapayrolltab1[".printFields"][] = "RegNDHrs";
$tdatapayrolltab1[".printFields"][] = "RHNDHrs";
$tdatapayrolltab1[".printFields"][] = "SHNDHrs";
$tdatapayrolltab1[".printFields"][] = "CHNDHrs";
$tdatapayrolltab1[".printFields"][] = "RDNDHrs";
$tdatapayrolltab1[".printFields"][] = "VLDays";
$tdatapayrolltab1[".printFields"][] = "SLDays";
$tdatapayrolltab1[".printFields"][] = "ELDays";
$tdatapayrolltab1[".printFields"][] = "PLDays";
$tdatapayrolltab1[".printFields"][] = "PLBalance";
$tdatapayrolltab1[".printFields"][] = "ELBalance";
$tdatapayrolltab1[".printFields"][] = "SLBalance";
$tdatapayrolltab1[".printFields"][] = "VLBalance";
$tdatapayrolltab1[".printFields"][] = "AllowancePerDay";
$tdatapayrolltab1[".printFields"][] = "AgencyShare";
$tdatapayrolltab1[".printFields"][] = "NDMealAllowance";


//	PtabID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PtabID";
	$fdata["GoodName"] = "PtabID";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","PtabID");
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




	$tdatapayrolltab1["PtabID"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","EmployeeID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["EmployeeID"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","WageType");
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




	$tdatapayrolltab1["WageType"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","Status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["Status"] = $fdata;
//	BasicMonthly
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "BasicMonthly";
	$fdata["GoodName"] = "BasicMonthly";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","BasicMonthly");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["BasicMonthly"] = $fdata;
//	BasicDaily
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "BasicDaily";
	$fdata["GoodName"] = "BasicDaily";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","BasicDaily");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["BasicDaily"] = $fdata;
//	DWork
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DWork";
	$fdata["GoodName"] = "DWork";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","DWork");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["DWork"] = $fdata;
//	Absent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Absent";
	$fdata["GoodName"] = "Absent";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","Absent");
	$fdata["FieldType"] = 5;

	
	
	
			
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




	$tdatapayrolltab1["Absent"] = $fdata;
//	LateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "LateMins";
	$fdata["GoodName"] = "LateMins";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","LateMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["LateMins"] = $fdata;
//	UndertimeMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "UndertimeMins";
	$fdata["GoodName"] = "UndertimeMins";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","UndertimeMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["UndertimeMins"] = $fdata;
//	RHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "RHolidayHrs";
	$fdata["GoodName"] = "RHolidayHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","RHolidayHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["RHolidayHrs"] = $fdata;
//	SHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "SHolidayHrs";
	$fdata["GoodName"] = "SHolidayHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","SHolidayHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["SHolidayHrs"] = $fdata;
//	CHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "CHolidayHrs";
	$fdata["GoodName"] = "CHolidayHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","CHolidayHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["CHolidayHrs"] = $fdata;
//	ExcessHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ExcessHrs";
	$fdata["GoodName"] = "ExcessHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","ExcessHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["ExcessHrs"] = $fdata;
//	RegOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "RegOTHrs";
	$fdata["GoodName"] = "RegOTHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","RegOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["RegOTHrs"] = $fdata;
//	RHOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "RHOTHrs";
	$fdata["GoodName"] = "RHOTHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","RHOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["RHOTHrs"] = $fdata;
//	SHOTHRs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "SHOTHRs";
	$fdata["GoodName"] = "SHOTHRs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","SHOTHRs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["SHOTHRs"] = $fdata;
//	CHOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "CHOTHrs";
	$fdata["GoodName"] = "CHOTHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","CHOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["CHOTHrs"] = $fdata;
//	RDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "RDOTHrs";
	$fdata["GoodName"] = "RDOTHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","RDOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["RDOTHrs"] = $fdata;
//	NDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "NDHrs";
	$fdata["GoodName"] = "NDHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","NDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["NDHrs"] = $fdata;
//	RDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "RDHrs";
	$fdata["GoodName"] = "RDHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","RDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["RDHrs"] = $fdata;
//	RegNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "RegNDHrs";
	$fdata["GoodName"] = "RegNDHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","RegNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["RegNDHrs"] = $fdata;
//	RHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "RHNDHrs";
	$fdata["GoodName"] = "RHNDHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","RHNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["RHNDHrs"] = $fdata;
//	SHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "SHNDHrs";
	$fdata["GoodName"] = "SHNDHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","SHNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["SHNDHrs"] = $fdata;
//	CHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "CHNDHrs";
	$fdata["GoodName"] = "CHNDHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","CHNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["CHNDHrs"] = $fdata;
//	RDNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "RDNDHrs";
	$fdata["GoodName"] = "RDNDHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","RDNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["RDNDHrs"] = $fdata;
//	VLDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "VLDays";
	$fdata["GoodName"] = "VLDays";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","VLDays");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["VLDays"] = $fdata;
//	SLDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "SLDays";
	$fdata["GoodName"] = "SLDays";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","SLDays");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["SLDays"] = $fdata;
//	ELDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "ELDays";
	$fdata["GoodName"] = "ELDays";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","ELDays");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["ELDays"] = $fdata;
//	PLDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "PLDays";
	$fdata["GoodName"] = "PLDays";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","PLDays");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["PLDays"] = $fdata;
//	TrODays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "TrODays";
	$fdata["GoodName"] = "TrODays";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","TrODays");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["TrODays"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","FromDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["FromDate"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","ToDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["ToDate"] = $fdata;
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","UserName");
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




	$tdatapayrolltab1["UserName"] = $fdata;
//	AllowancePerDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "AllowancePerDay";
	$fdata["GoodName"] = "AllowancePerDay";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","AllowancePerDay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["AllowancePerDay"] = $fdata;
//	VLBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "VLBalance";
	$fdata["GoodName"] = "VLBalance";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","VLBalance");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["VLBalance"] = $fdata;
//	SLBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "SLBalance";
	$fdata["GoodName"] = "SLBalance";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","SLBalance");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["SLBalance"] = $fdata;
//	ELBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "ELBalance";
	$fdata["GoodName"] = "ELBalance";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","ELBalance");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["ELBalance"] = $fdata;
//	PLBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "PLBalance";
	$fdata["GoodName"] = "PLBalance";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","PLBalance");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["PLBalance"] = $fdata;
//	AgencyShare
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "AgencyShare";
	$fdata["GoodName"] = "AgencyShare";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","AgencyShare");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["AgencyShare"] = $fdata;
//	NDMealAllowance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "NDMealAllowance";
	$fdata["GoodName"] = "NDMealAllowance";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","NDMealAllowance");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["NDMealAllowance"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","Division");
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




	$tdatapayrolltab1["Division"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","Employer");
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




	$tdatapayrolltab1["Employer"] = $fdata;
//	PayrollID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "PayrollID";
	$fdata["GoodName"] = "PayrollID";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","PayrollID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["PayrollID"] = $fdata;
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","Email");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["Email"] = $fdata;
//	Locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "Locked";
	$fdata["GoodName"] = "Locked";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","Locked");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["Locked"] = $fdata;
//	Position
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "Position";
	$fdata["GoodName"] = "Position";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","Position");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrolltab1["Position"] = $fdata;


$tables_data["payrolltab1"]=&$tdatapayrolltab1;
$field_labels["payrolltab1"] = &$fieldLabelspayrolltab1;
$fieldToolTips["payrolltab1"] = &$fieldToolTipspayrolltab1;
$placeHolders["payrolltab1"] = &$placeHolderspayrolltab1;
$page_titles["payrolltab1"] = &$pageTitlespayrolltab1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["payrolltab1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["payrolltab1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_payrolltab1()
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
	"m_srcTableName" => "payrolltab1"
));

$proto6["m_sql"] = "PtabID";
$proto6["m_srcTableName"] = "payrolltab1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto8["m_sql"] = "EmployeeID";
$proto8["m_srcTableName"] = "payrolltab1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "WageType",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto10["m_sql"] = "WageType";
$proto10["m_srcTableName"] = "payrolltab1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto12["m_sql"] = "Status";
$proto12["m_srcTableName"] = "payrolltab1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "BasicMonthly",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto14["m_sql"] = "BasicMonthly";
$proto14["m_srcTableName"] = "payrolltab1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "BasicDaily",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto16["m_sql"] = "BasicDaily";
$proto16["m_srcTableName"] = "payrolltab1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DWork",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto18["m_sql"] = "DWork";
$proto18["m_srcTableName"] = "payrolltab1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Absent",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto20["m_sql"] = "Absent";
$proto20["m_srcTableName"] = "payrolltab1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "LateMins",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto22["m_sql"] = "LateMins";
$proto22["m_srcTableName"] = "payrolltab1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "UndertimeMins",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto24["m_sql"] = "UndertimeMins";
$proto24["m_srcTableName"] = "payrolltab1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "RHolidayHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto26["m_sql"] = "RHolidayHrs";
$proto26["m_srcTableName"] = "payrolltab1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "SHolidayHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto28["m_sql"] = "SHolidayHrs";
$proto28["m_srcTableName"] = "payrolltab1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "CHolidayHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto30["m_sql"] = "CHolidayHrs";
$proto30["m_srcTableName"] = "payrolltab1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ExcessHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto32["m_sql"] = "ExcessHrs";
$proto32["m_srcTableName"] = "payrolltab1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "RegOTHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto34["m_sql"] = "RegOTHrs";
$proto34["m_srcTableName"] = "payrolltab1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "RHOTHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto36["m_sql"] = "RHOTHrs";
$proto36["m_srcTableName"] = "payrolltab1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOTHRs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto38["m_sql"] = "SHOTHRs";
$proto38["m_srcTableName"] = "payrolltab1";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "CHOTHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto40["m_sql"] = "CHOTHrs";
$proto40["m_srcTableName"] = "payrolltab1";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "RDOTHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto42["m_sql"] = "RDOTHrs";
$proto42["m_srcTableName"] = "payrolltab1";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "NDHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto44["m_sql"] = "NDHrs";
$proto44["m_srcTableName"] = "payrolltab1";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "RDHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto46["m_sql"] = "RDHrs";
$proto46["m_srcTableName"] = "payrolltab1";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "RegNDHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto48["m_sql"] = "RegNDHrs";
$proto48["m_srcTableName"] = "payrolltab1";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "RHNDHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto50["m_sql"] = "RHNDHrs";
$proto50["m_srcTableName"] = "payrolltab1";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "SHNDHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto52["m_sql"] = "SHNDHrs";
$proto52["m_srcTableName"] = "payrolltab1";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "CHNDHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto54["m_sql"] = "CHNDHrs";
$proto54["m_srcTableName"] = "payrolltab1";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "RDNDHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto56["m_sql"] = "RDNDHrs";
$proto56["m_srcTableName"] = "payrolltab1";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "VLDays",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto58["m_sql"] = "VLDays";
$proto58["m_srcTableName"] = "payrolltab1";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "SLDays",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto60["m_sql"] = "SLDays";
$proto60["m_srcTableName"] = "payrolltab1";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "ELDays",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto62["m_sql"] = "ELDays";
$proto62["m_srcTableName"] = "payrolltab1";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "PLDays",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto64["m_sql"] = "PLDays";
$proto64["m_srcTableName"] = "payrolltab1";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "TrODays",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto66["m_sql"] = "TrODays";
$proto66["m_srcTableName"] = "payrolltab1";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto68["m_sql"] = "FromDate";
$proto68["m_srcTableName"] = "payrolltab1";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto70["m_sql"] = "ToDate";
$proto70["m_srcTableName"] = "payrolltab1";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto72["m_sql"] = "UserName";
$proto72["m_srcTableName"] = "payrolltab1";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowancePerDay",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto74["m_sql"] = "AllowancePerDay";
$proto74["m_srcTableName"] = "payrolltab1";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "VLBalance",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto76["m_sql"] = "VLBalance";
$proto76["m_srcTableName"] = "payrolltab1";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "SLBalance",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto78["m_sql"] = "SLBalance";
$proto78["m_srcTableName"] = "payrolltab1";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "ELBalance",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto80["m_sql"] = "ELBalance";
$proto80["m_srcTableName"] = "payrolltab1";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "PLBalance",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto82["m_sql"] = "PLBalance";
$proto82["m_srcTableName"] = "payrolltab1";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "AgencyShare",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto84["m_sql"] = "AgencyShare";
$proto84["m_srcTableName"] = "payrolltab1";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "NDMealAllowance",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto86["m_sql"] = "NDMealAllowance";
$proto86["m_srcTableName"] = "payrolltab1";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto88["m_sql"] = "Division";
$proto88["m_srcTableName"] = "payrolltab1";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto90["m_sql"] = "Employer";
$proto90["m_srcTableName"] = "payrolltab1";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "PayrollID",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto92["m_sql"] = "PayrollID";
$proto92["m_srcTableName"] = "payrolltab1";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto94["m_sql"] = "Email";
$proto94["m_srcTableName"] = "payrolltab1";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "Locked",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto96["m_sql"] = "Locked";
$proto96["m_srcTableName"] = "payrolltab1";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "Position",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto98["m_sql"] = "`Position`";
$proto98["m_srcTableName"] = "payrolltab1";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto100=array();
$proto100["m_link"] = "SQLL_MAIN";
			$proto101=array();
$proto101["m_strName"] = "payrolltab";
$proto101["m_srcTableName"] = "payrolltab1";
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
$proto100["m_srcTableName"] = "payrolltab1";
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
$proto0["m_srcTableName"]="payrolltab1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_payrolltab1 = createSqlQuery_payrolltab1();


	
		;

																																															

$tdatapayrolltab1[".sqlquery"] = $queryData_payrolltab1;

include_once(getabspath("include/payrolltab1_events.php"));
$tableEvents["payrolltab1"] = new eventclass_payrolltab1;
$tdatapayrolltab1[".hasEvents"] = true;

?>