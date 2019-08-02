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
	$fieldLabelspayrolltab["English"]["Thirteenth"] = "13th Month";
	$fieldToolTipspayrolltab["English"]["Thirteenth"] = "";
	$placeHolderspayrolltab["English"]["Thirteenth"] = "";
	$fieldLabelspayrolltab["English"]["Taxable"] = "Taxable";
	$fieldToolTipspayrolltab["English"]["Taxable"] = "";
	$placeHolderspayrolltab["English"]["Taxable"] = "";
	$fieldLabelspayrolltab["English"]["NDOTHrs"] = "NDOTHrs";
	$fieldToolTipspayrolltab["English"]["NDOTHrs"] = "";
	$placeHolderspayrolltab["English"]["NDOTHrs"] = "";
	$fieldLabelspayrolltab["English"]["RegNDOTHrs"] = "Reg NDOTHrs";
	$fieldToolTipspayrolltab["English"]["RegNDOTHrs"] = "";
	$placeHolderspayrolltab["English"]["RegNDOTHrs"] = "";
	$fieldLabelspayrolltab["English"]["RHNDOTHrs"] = "RHNDOTHrs";
	$fieldToolTipspayrolltab["English"]["RHNDOTHrs"] = "";
	$placeHolderspayrolltab["English"]["RHNDOTHrs"] = "";
	$fieldLabelspayrolltab["English"]["SHNDOTHrs"] = "SHNDOTHrs";
	$fieldToolTipspayrolltab["English"]["SHNDOTHrs"] = "";
	$placeHolderspayrolltab["English"]["SHNDOTHrs"] = "";
	$fieldLabelspayrolltab["English"]["CHNDOTHrs"] = "CHNDOTHrs";
	$fieldToolTipspayrolltab["English"]["CHNDOTHrs"] = "";
	$placeHolderspayrolltab["English"]["CHNDOTHrs"] = "";
	$fieldLabelspayrolltab["English"]["RDNDOTHrs"] = "RDNDOTHrs";
	$fieldToolTipspayrolltab["English"]["RDNDOTHrs"] = "";
	$placeHolderspayrolltab["English"]["RDNDOTHrs"] = "";
	$fieldLabelspayrolltab["English"]["DH"] = "DH";
	$fieldToolTipspayrolltab["English"]["DH"] = "";
	$placeHolderspayrolltab["English"]["DH"] = "";
	$fieldLabelspayrolltab["English"]["DHRD"] = "DHRD";
	$fieldToolTipspayrolltab["English"]["DHRD"] = "";
	$placeHolderspayrolltab["English"]["DHRD"] = "";
	$fieldLabelspayrolltab["English"]["DHOT"] = "DHOT";
	$fieldToolTipspayrolltab["English"]["DHOT"] = "";
	$placeHolderspayrolltab["English"]["DHOT"] = "";
	$fieldLabelspayrolltab["English"]["DHRDOT"] = "DHRDOT";
	$fieldToolTipspayrolltab["English"]["DHRDOT"] = "";
	$placeHolderspayrolltab["English"]["DHRDOT"] = "";
	$fieldLabelspayrolltab["English"]["SHRDND"] = "SHRDND";
	$fieldToolTipspayrolltab["English"]["SHRDND"] = "";
	$placeHolderspayrolltab["English"]["SHRDND"] = "";
	$fieldLabelspayrolltab["English"]["RHRDND"] = "RHRDND";
	$fieldToolTipspayrolltab["English"]["RHRDND"] = "";
	$placeHolderspayrolltab["English"]["RHRDND"] = "";
	$fieldLabelspayrolltab["English"]["SHRDNDOT"] = "SHRDNDOT";
	$fieldToolTipspayrolltab["English"]["SHRDNDOT"] = "";
	$placeHolderspayrolltab["English"]["SHRDNDOT"] = "";
	$fieldLabelspayrolltab["English"]["RHRDNDOT"] = "RHRDNDOT";
	$fieldToolTipspayrolltab["English"]["RHRDNDOT"] = "";
	$placeHolderspayrolltab["English"]["RHRDNDOT"] = "";
	$fieldLabelspayrolltab["English"]["DHND"] = "DHND";
	$fieldToolTipspayrolltab["English"]["DHND"] = "";
	$placeHolderspayrolltab["English"]["DHND"] = "";
	$fieldLabelspayrolltab["English"]["DHRDND"] = "DHRDND";
	$fieldToolTipspayrolltab["English"]["DHRDND"] = "";
	$placeHolderspayrolltab["English"]["DHRDND"] = "";
	$fieldLabelspayrolltab["English"]["DHNDOT"] = "DHNDOT";
	$fieldToolTipspayrolltab["English"]["DHNDOT"] = "";
	$placeHolderspayrolltab["English"]["DHNDOT"] = "";
	$fieldLabelspayrolltab["English"]["DHRDNDOT"] = "DHRDNDOT";
	$fieldToolTipspayrolltab["English"]["DHRDNDOT"] = "";
	$placeHolderspayrolltab["English"]["DHRDNDOT"] = "";
	$fieldLabelspayrolltab["English"]["ThirToDate"] = "13th Month To-Date";
	$fieldToolTipspayrolltab["English"]["ThirToDate"] = "";
	$placeHolderspayrolltab["English"]["ThirToDate"] = "";
	$fieldLabelspayrolltab["English"]["TaxableToDate"] = "Taxable To-Date";
	$fieldToolTipspayrolltab["English"]["TaxableToDate"] = "";
	$placeHolderspayrolltab["English"]["TaxableToDate"] = "";
	$fieldLabelspayrolltab["English"]["TaxToDate"] = "Tax To-Date";
	$fieldToolTipspayrolltab["English"]["TaxToDate"] = "";
	$placeHolderspayrolltab["English"]["TaxToDate"] = "";
	if (count($fieldToolTipspayrolltab["English"]))
		$tdatapayrolltab[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspayrolltab[""] = array();
	$fieldToolTipspayrolltab[""] = array();
	$placeHolderspayrolltab[""] = array();
	$pageTitlespayrolltab[""] = array();
	$fieldLabelspayrolltab[""]["NDOTHrs"] = "NDOTHrs";
	$fieldToolTipspayrolltab[""]["NDOTHrs"] = "";
	$placeHolderspayrolltab[""]["NDOTHrs"] = "";
	$fieldLabelspayrolltab[""]["RegNDOTHrs"] = "Reg NDOTHrs";
	$fieldToolTipspayrolltab[""]["RegNDOTHrs"] = "";
	$placeHolderspayrolltab[""]["RegNDOTHrs"] = "";
	$fieldLabelspayrolltab[""]["RHNDOTHrs"] = "RHNDOTHrs";
	$fieldToolTipspayrolltab[""]["RHNDOTHrs"] = "";
	$placeHolderspayrolltab[""]["RHNDOTHrs"] = "";
	$fieldLabelspayrolltab[""]["SHNDOTHrs"] = "SHNDOTHrs";
	$fieldToolTipspayrolltab[""]["SHNDOTHrs"] = "";
	$placeHolderspayrolltab[""]["SHNDOTHrs"] = "";
	$fieldLabelspayrolltab[""]["CHNDOTHrs"] = "CHNDOTHrs";
	$fieldToolTipspayrolltab[""]["CHNDOTHrs"] = "";
	$placeHolderspayrolltab[""]["CHNDOTHrs"] = "";
	$fieldLabelspayrolltab[""]["RDNDOTHrs"] = "RDNDOTHrs";
	$fieldToolTipspayrolltab[""]["RDNDOTHrs"] = "";
	$placeHolderspayrolltab[""]["RDNDOTHrs"] = "";
	$fieldLabelspayrolltab[""]["DH"] = "DH";
	$fieldToolTipspayrolltab[""]["DH"] = "";
	$placeHolderspayrolltab[""]["DH"] = "";
	$fieldLabelspayrolltab[""]["DHRD"] = "DHRD";
	$fieldToolTipspayrolltab[""]["DHRD"] = "";
	$placeHolderspayrolltab[""]["DHRD"] = "";
	$fieldLabelspayrolltab[""]["DHOT"] = "DHOT";
	$fieldToolTipspayrolltab[""]["DHOT"] = "";
	$placeHolderspayrolltab[""]["DHOT"] = "";
	$fieldLabelspayrolltab[""]["DHRDOT"] = "DHRDOT";
	$fieldToolTipspayrolltab[""]["DHRDOT"] = "";
	$placeHolderspayrolltab[""]["DHRDOT"] = "";
	$fieldLabelspayrolltab[""]["SHRDND"] = "SHRDND";
	$fieldToolTipspayrolltab[""]["SHRDND"] = "";
	$placeHolderspayrolltab[""]["SHRDND"] = "";
	$fieldLabelspayrolltab[""]["RHRDND"] = "RHRDND";
	$fieldToolTipspayrolltab[""]["RHRDND"] = "";
	$placeHolderspayrolltab[""]["RHRDND"] = "";
	$fieldLabelspayrolltab[""]["SHRDNDOT"] = "SHRDNDOT";
	$fieldToolTipspayrolltab[""]["SHRDNDOT"] = "";
	$placeHolderspayrolltab[""]["SHRDNDOT"] = "";
	$fieldLabelspayrolltab[""]["RHRDNDOT"] = "RHRDNDOT";
	$fieldToolTipspayrolltab[""]["RHRDNDOT"] = "";
	$placeHolderspayrolltab[""]["RHRDNDOT"] = "";
	$fieldLabelspayrolltab[""]["DHND"] = "DHND";
	$fieldToolTipspayrolltab[""]["DHND"] = "";
	$placeHolderspayrolltab[""]["DHND"] = "";
	$fieldLabelspayrolltab[""]["DHRDND"] = "DHRDND";
	$fieldToolTipspayrolltab[""]["DHRDND"] = "";
	$placeHolderspayrolltab[""]["DHRDND"] = "";
	$fieldLabelspayrolltab[""]["DHNDOT"] = "DHNDOT";
	$fieldToolTipspayrolltab[""]["DHNDOT"] = "";
	$placeHolderspayrolltab[""]["DHNDOT"] = "";
	$fieldLabelspayrolltab[""]["DHRDNDOT"] = "DHRDNDOT";
	$fieldToolTipspayrolltab[""]["DHRDNDOT"] = "";
	$placeHolderspayrolltab[""]["DHRDNDOT"] = "";
	$fieldLabelspayrolltab[""]["ThirToDate"] = "Thir To Date";
	$fieldToolTipspayrolltab[""]["ThirToDate"] = "";
	$placeHolderspayrolltab[""]["ThirToDate"] = "";
	$fieldLabelspayrolltab[""]["TaxableToDate"] = "Taxable To Date";
	$fieldToolTipspayrolltab[""]["TaxableToDate"] = "";
	$placeHolderspayrolltab[""]["TaxableToDate"] = "";
	$fieldLabelspayrolltab[""]["TaxToDate"] = "Tax To Date";
	$fieldToolTipspayrolltab[""]["TaxToDate"] = "";
	$placeHolderspayrolltab[""]["TaxToDate"] = "";
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

$tdatapayrolltab[".allSearchFields"][] = "FromDate";
	$tdatapayrolltab[".allSearchFields"][] = "ToDate";
	$tdatapayrolltab[".allSearchFields"][] = "UserName";
	$tdatapayrolltab[".allSearchFields"][] = "Division";
	$tdatapayrolltab[".allSearchFields"][] = "Employer";
	$tdatapayrolltab[".allSearchFields"][] = "WageType";
	$tdatapayrolltab[".allSearchFields"][] = "Status";
	$tdatapayrolltab[".allSearchFields"][] = "BasicMonthly";
	$tdatapayrolltab[".allSearchFields"][] = "BasicDaily";
	$tdatapayrolltab[".allSearchFields"][] = "ThirToDate";
	$tdatapayrolltab[".allSearchFields"][] = "TaxableToDate";
	$tdatapayrolltab[".allSearchFields"][] = "TaxToDate";
	

$tdatapayrolltab[".googleLikeFields"] = array();
$tdatapayrolltab[".googleLikeFields"][] = "WageType";
$tdatapayrolltab[".googleLikeFields"][] = "Status";
$tdatapayrolltab[".googleLikeFields"][] = "BasicMonthly";
$tdatapayrolltab[".googleLikeFields"][] = "BasicDaily";
$tdatapayrolltab[".googleLikeFields"][] = "UserName";
$tdatapayrolltab[".googleLikeFields"][] = "FromDate";
$tdatapayrolltab[".googleLikeFields"][] = "ToDate";
$tdatapayrolltab[".googleLikeFields"][] = "Division";
$tdatapayrolltab[".googleLikeFields"][] = "Employer";
$tdatapayrolltab[".googleLikeFields"][] = "ThirToDate";
$tdatapayrolltab[".googleLikeFields"][] = "TaxableToDate";
$tdatapayrolltab[".googleLikeFields"][] = "TaxToDate";

$tdatapayrolltab[".panelSearchFields"] = array();
$tdatapayrolltab[".searchPanelOptions"] = array();
$tdatapayrolltab[".panelSearchFields"][] = "FromDate";
	$tdatapayrolltab[".panelSearchFields"][] = "ToDate";
	$tdatapayrolltab[".panelSearchFields"][] = "UserName";
	$tdatapayrolltab[".panelSearchFields"][] = "Division";
	$tdatapayrolltab[".panelSearchFields"][] = "Employer";
	$tdatapayrolltab[".panelSearchFields"][] = "WageType";
	$tdatapayrolltab[".panelSearchFields"][] = "Status";
	
$tdatapayrolltab[".advSearchFields"] = array();
$tdatapayrolltab[".advSearchFields"][] = "FromDate";
$tdatapayrolltab[".advSearchFields"][] = "ToDate";
$tdatapayrolltab[".advSearchFields"][] = "UserName";
$tdatapayrolltab[".advSearchFields"][] = "Division";
$tdatapayrolltab[".advSearchFields"][] = "Employer";
$tdatapayrolltab[".advSearchFields"][] = "WageType";
$tdatapayrolltab[".advSearchFields"][] = "Status";
$tdatapayrolltab[".advSearchFields"][] = "BasicMonthly";
$tdatapayrolltab[".advSearchFields"][] = "BasicDaily";
$tdatapayrolltab[".advSearchFields"][] = "ThirToDate";
$tdatapayrolltab[".advSearchFields"][] = "TaxableToDate";
$tdatapayrolltab[".advSearchFields"][] = "TaxToDate";

$tdatapayrolltab[".tableType"] = "list";

$tdatapayrolltab[".printerPageOrientation"] = 0;
$tdatapayrolltab[".nPrinterPageScale"] = 100;

$tdatapayrolltab[".nPrinterSplitRecords"] = 40;

$tdatapayrolltab[".nPrinterPDFSplitRecords"] = 40;



$tdatapayrolltab[".geocodingEnabled"] = false;





$tdatapayrolltab[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatapayrolltab[".totalsFields"] = array();
$tdatapayrolltab[".totalsFields"][] = array(
	"fName" => "Locked",
	"numRows" => 0,
	"totalsType" => "COUNT",
	"viewFormat" => 'Checkbox');

$tdatapayrolltab[".pageSize"] = 20;

$tdatapayrolltab[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY ToDate DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapayrolltab[".strOrderBy"] = $tstrOrderBy;

$tdatapayrolltab[".orderindexes"] = array();
	$tdatapayrolltab[".orderindexes"][] = array(34, (0 ? "ASC" : "DESC"), "ToDate");


$tdatapayrolltab[".sqlHead"] = "SELECT PtabID,  EmployeeID,  WageType,  Status,  BasicMonthly,  BasicDaily,  DWork,  Absent,  LateMins,  UndertimeMins,  RHolidayHrs,  SHolidayHrs,  CHolidayHrs,  ExcessHrs,  RegOTHrs,  RHOTHrs,  SHOTHRs,  CHOTHrs,  RDOTHrs,  NDHrs,  RDHrs,  RegNDHrs,  RHNDHrs,  SHNDHrs,  CHNDHrs,  RDNDHrs,  VLDays,  SLDays,  ELDays,  PLDays,  TrODays,  UserName,  FromDate,  ToDate,  AllowancePerDay,  VLBalance,  SLBalance,  ELBalance,  PLBalance,  AgencyShare,  NDMealAllowance,  Division,  Employer,  PayrollID,  Email,  Locked,  `Position`,  Thirteenth,  Taxable,  NDOTHrs,  RegNDOTHrs,  RHNDOTHrs,  SHNDOTHrs,  CHNDOTHrs,  RDNDOTHrs,  DH,  DHRD,  DHOT,  DHRDOT,  SHRDND,  RHRDND,  SHRDNDOT,  RHRDNDOT,  DHND,  DHRDND,  DHNDOT,  DHRDNDOT,  ThirToDate,  TaxableToDate,  TaxToDate";
$tdatapayrolltab[".sqlFrom"] = "FROM payrolltab";
$tdatapayrolltab[".sqlWhereExpr"] = "";
$tdatapayrolltab[".sqlTail"] = "";

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
$tdatapayrolltab[".arrGridTabs"] = $arrGridTabs;











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
$tdatapayrolltab[".listFields"][] = "FromDate";
$tdatapayrolltab[".listFields"][] = "ToDate";
$tdatapayrolltab[".listFields"][] = "EmployeeID";
$tdatapayrolltab[".listFields"][] = "UserName";
$tdatapayrolltab[".listFields"][] = "Email";
$tdatapayrolltab[".listFields"][] = "Position";
$tdatapayrolltab[".listFields"][] = "Division";
$tdatapayrolltab[".listFields"][] = "Employer";
$tdatapayrolltab[".listFields"][] = "WageType";
$tdatapayrolltab[".listFields"][] = "Status";
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
$tdatapayrolltab[".listFields"][] = "NDOTHrs";
$tdatapayrolltab[".listFields"][] = "RegNDOTHrs";
$tdatapayrolltab[".listFields"][] = "RHNDOTHrs";
$tdatapayrolltab[".listFields"][] = "CHNDOTHrs";
$tdatapayrolltab[".listFields"][] = "SHNDOTHrs";
$tdatapayrolltab[".listFields"][] = "SHRDNDOT";
$tdatapayrolltab[".listFields"][] = "RHRDNDOT";
$tdatapayrolltab[".listFields"][] = "RDNDOTHrs";
$tdatapayrolltab[".listFields"][] = "DHRDOT";
$tdatapayrolltab[".listFields"][] = "DHRDNDOT";
$tdatapayrolltab[".listFields"][] = "DHNDOT";
$tdatapayrolltab[".listFields"][] = "RDHrs";
$tdatapayrolltab[".listFields"][] = "RegNDHrs";
$tdatapayrolltab[".listFields"][] = "RHNDHrs";
$tdatapayrolltab[".listFields"][] = "SHNDHrs";
$tdatapayrolltab[".listFields"][] = "CHNDHrs";
$tdatapayrolltab[".listFields"][] = "RDNDHrs";
$tdatapayrolltab[".listFields"][] = "DHRDND";
$tdatapayrolltab[".listFields"][] = "DHND";
$tdatapayrolltab[".listFields"][] = "RHRDND";
$tdatapayrolltab[".listFields"][] = "SHRDND";
$tdatapayrolltab[".listFields"][] = "DHOT";
$tdatapayrolltab[".listFields"][] = "DHRD";
$tdatapayrolltab[".listFields"][] = "DH";
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
$tdatapayrolltab[".listFields"][] = "Thirteenth";
$tdatapayrolltab[".listFields"][] = "Taxable";
$tdatapayrolltab[".listFields"][] = "ThirToDate";
$tdatapayrolltab[".listFields"][] = "TaxableToDate";
$tdatapayrolltab[".listFields"][] = "TaxToDate";
$tdatapayrolltab[".listFields"][] = "PayrollID";

$tdatapayrolltab[".hideMobileList"] = array();


$tdatapayrolltab[".viewFields"] = array();
$tdatapayrolltab[".viewFields"][] = "PtabID";
$tdatapayrolltab[".viewFields"][] = "Locked";
$tdatapayrolltab[".viewFields"][] = "FromDate";
$tdatapayrolltab[".viewFields"][] = "ToDate";
$tdatapayrolltab[".viewFields"][] = "EmployeeID";
$tdatapayrolltab[".viewFields"][] = "UserName";
$tdatapayrolltab[".viewFields"][] = "Email";
$tdatapayrolltab[".viewFields"][] = "Position";
$tdatapayrolltab[".viewFields"][] = "Division";
$tdatapayrolltab[".viewFields"][] = "Employer";
$tdatapayrolltab[".viewFields"][] = "WageType";
$tdatapayrolltab[".viewFields"][] = "Status";
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
$tdatapayrolltab[".viewFields"][] = "NDOTHrs";
$tdatapayrolltab[".viewFields"][] = "RegNDOTHrs";
$tdatapayrolltab[".viewFields"][] = "RHNDOTHrs";
$tdatapayrolltab[".viewFields"][] = "CHNDOTHrs";
$tdatapayrolltab[".viewFields"][] = "SHNDOTHrs";
$tdatapayrolltab[".viewFields"][] = "SHRDNDOT";
$tdatapayrolltab[".viewFields"][] = "RHRDNDOT";
$tdatapayrolltab[".viewFields"][] = "RDNDOTHrs";
$tdatapayrolltab[".viewFields"][] = "DHRDOT";
$tdatapayrolltab[".viewFields"][] = "DHRDNDOT";
$tdatapayrolltab[".viewFields"][] = "DHNDOT";
$tdatapayrolltab[".viewFields"][] = "RDHrs";
$tdatapayrolltab[".viewFields"][] = "RegNDHrs";
$tdatapayrolltab[".viewFields"][] = "RHNDHrs";
$tdatapayrolltab[".viewFields"][] = "SHNDHrs";
$tdatapayrolltab[".viewFields"][] = "CHNDHrs";
$tdatapayrolltab[".viewFields"][] = "RDNDHrs";
$tdatapayrolltab[".viewFields"][] = "DHRDND";
$tdatapayrolltab[".viewFields"][] = "DHND";
$tdatapayrolltab[".viewFields"][] = "RHRDND";
$tdatapayrolltab[".viewFields"][] = "SHRDND";
$tdatapayrolltab[".viewFields"][] = "DHOT";
$tdatapayrolltab[".viewFields"][] = "DHRD";
$tdatapayrolltab[".viewFields"][] = "DH";
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
$tdatapayrolltab[".viewFields"][] = "Thirteenth";
$tdatapayrolltab[".viewFields"][] = "Taxable";
$tdatapayrolltab[".viewFields"][] = "ThirToDate";
$tdatapayrolltab[".viewFields"][] = "TaxableToDate";
$tdatapayrolltab[".viewFields"][] = "TaxToDate";
$tdatapayrolltab[".viewFields"][] = "PayrollID";

$tdatapayrolltab[".addFields"] = array();
$tdatapayrolltab[".addFields"][] = "Locked";
$tdatapayrolltab[".addFields"][] = "FromDate";
$tdatapayrolltab[".addFields"][] = "ToDate";
$tdatapayrolltab[".addFields"][] = "EmployeeID";
$tdatapayrolltab[".addFields"][] = "UserName";
$tdatapayrolltab[".addFields"][] = "Email";
$tdatapayrolltab[".addFields"][] = "Position";
$tdatapayrolltab[".addFields"][] = "Division";
$tdatapayrolltab[".addFields"][] = "Employer";
$tdatapayrolltab[".addFields"][] = "WageType";
$tdatapayrolltab[".addFields"][] = "Status";
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
$tdatapayrolltab[".addFields"][] = "NDOTHrs";
$tdatapayrolltab[".addFields"][] = "RegNDOTHrs";
$tdatapayrolltab[".addFields"][] = "RHNDOTHrs";
$tdatapayrolltab[".addFields"][] = "CHNDOTHrs";
$tdatapayrolltab[".addFields"][] = "SHNDOTHrs";
$tdatapayrolltab[".addFields"][] = "SHRDNDOT";
$tdatapayrolltab[".addFields"][] = "RHRDNDOT";
$tdatapayrolltab[".addFields"][] = "RDNDOTHrs";
$tdatapayrolltab[".addFields"][] = "DHRDOT";
$tdatapayrolltab[".addFields"][] = "DHRDNDOT";
$tdatapayrolltab[".addFields"][] = "DHNDOT";
$tdatapayrolltab[".addFields"][] = "RDHrs";
$tdatapayrolltab[".addFields"][] = "RegNDHrs";
$tdatapayrolltab[".addFields"][] = "RHNDHrs";
$tdatapayrolltab[".addFields"][] = "SHNDHrs";
$tdatapayrolltab[".addFields"][] = "CHNDHrs";
$tdatapayrolltab[".addFields"][] = "RDNDHrs";
$tdatapayrolltab[".addFields"][] = "DHRDND";
$tdatapayrolltab[".addFields"][] = "DHND";
$tdatapayrolltab[".addFields"][] = "RHRDND";
$tdatapayrolltab[".addFields"][] = "SHRDND";
$tdatapayrolltab[".addFields"][] = "DHOT";
$tdatapayrolltab[".addFields"][] = "DHRD";
$tdatapayrolltab[".addFields"][] = "DH";
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
$tdatapayrolltab[".addFields"][] = "Thirteenth";
$tdatapayrolltab[".addFields"][] = "Taxable";
$tdatapayrolltab[".addFields"][] = "ThirToDate";
$tdatapayrolltab[".addFields"][] = "TaxableToDate";
$tdatapayrolltab[".addFields"][] = "TaxToDate";
$tdatapayrolltab[".addFields"][] = "PayrollID";

$tdatapayrolltab[".masterListFields"] = array();
$tdatapayrolltab[".masterListFields"][] = "PtabID";
$tdatapayrolltab[".masterListFields"][] = "Locked";
$tdatapayrolltab[".masterListFields"][] = "FromDate";
$tdatapayrolltab[".masterListFields"][] = "ToDate";
$tdatapayrolltab[".masterListFields"][] = "EmployeeID";
$tdatapayrolltab[".masterListFields"][] = "UserName";
$tdatapayrolltab[".masterListFields"][] = "Email";
$tdatapayrolltab[".masterListFields"][] = "Position";
$tdatapayrolltab[".masterListFields"][] = "Division";
$tdatapayrolltab[".masterListFields"][] = "Employer";
$tdatapayrolltab[".masterListFields"][] = "WageType";
$tdatapayrolltab[".masterListFields"][] = "Status";
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
$tdatapayrolltab[".masterListFields"][] = "NDOTHrs";
$tdatapayrolltab[".masterListFields"][] = "RegNDOTHrs";
$tdatapayrolltab[".masterListFields"][] = "RHNDOTHrs";
$tdatapayrolltab[".masterListFields"][] = "CHNDOTHrs";
$tdatapayrolltab[".masterListFields"][] = "SHNDOTHrs";
$tdatapayrolltab[".masterListFields"][] = "SHRDNDOT";
$tdatapayrolltab[".masterListFields"][] = "RHRDNDOT";
$tdatapayrolltab[".masterListFields"][] = "RDNDOTHrs";
$tdatapayrolltab[".masterListFields"][] = "DHRDOT";
$tdatapayrolltab[".masterListFields"][] = "DHRDNDOT";
$tdatapayrolltab[".masterListFields"][] = "DHNDOT";
$tdatapayrolltab[".masterListFields"][] = "RDHrs";
$tdatapayrolltab[".masterListFields"][] = "RegNDHrs";
$tdatapayrolltab[".masterListFields"][] = "RHNDHrs";
$tdatapayrolltab[".masterListFields"][] = "SHNDHrs";
$tdatapayrolltab[".masterListFields"][] = "CHNDHrs";
$tdatapayrolltab[".masterListFields"][] = "RDNDHrs";
$tdatapayrolltab[".masterListFields"][] = "DHRDND";
$tdatapayrolltab[".masterListFields"][] = "DHND";
$tdatapayrolltab[".masterListFields"][] = "RHRDND";
$tdatapayrolltab[".masterListFields"][] = "SHRDND";
$tdatapayrolltab[".masterListFields"][] = "DHOT";
$tdatapayrolltab[".masterListFields"][] = "DHRD";
$tdatapayrolltab[".masterListFields"][] = "DH";
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
$tdatapayrolltab[".masterListFields"][] = "Thirteenth";
$tdatapayrolltab[".masterListFields"][] = "Taxable";
$tdatapayrolltab[".masterListFields"][] = "ThirToDate";
$tdatapayrolltab[".masterListFields"][] = "TaxableToDate";
$tdatapayrolltab[".masterListFields"][] = "TaxToDate";
$tdatapayrolltab[".masterListFields"][] = "PayrollID";

$tdatapayrolltab[".inlineAddFields"] = array();
$tdatapayrolltab[".inlineAddFields"][] = "Locked";
$tdatapayrolltab[".inlineAddFields"][] = "FromDate";
$tdatapayrolltab[".inlineAddFields"][] = "ToDate";
$tdatapayrolltab[".inlineAddFields"][] = "EmployeeID";
$tdatapayrolltab[".inlineAddFields"][] = "UserName";
$tdatapayrolltab[".inlineAddFields"][] = "Email";
$tdatapayrolltab[".inlineAddFields"][] = "Position";
$tdatapayrolltab[".inlineAddFields"][] = "Division";
$tdatapayrolltab[".inlineAddFields"][] = "Employer";
$tdatapayrolltab[".inlineAddFields"][] = "WageType";
$tdatapayrolltab[".inlineAddFields"][] = "Status";
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
$tdatapayrolltab[".inlineAddFields"][] = "NDOTHrs";
$tdatapayrolltab[".inlineAddFields"][] = "RegNDOTHrs";
$tdatapayrolltab[".inlineAddFields"][] = "RHNDOTHrs";
$tdatapayrolltab[".inlineAddFields"][] = "CHNDOTHrs";
$tdatapayrolltab[".inlineAddFields"][] = "SHNDOTHrs";
$tdatapayrolltab[".inlineAddFields"][] = "SHRDNDOT";
$tdatapayrolltab[".inlineAddFields"][] = "RHRDNDOT";
$tdatapayrolltab[".inlineAddFields"][] = "RDNDOTHrs";
$tdatapayrolltab[".inlineAddFields"][] = "DHRDOT";
$tdatapayrolltab[".inlineAddFields"][] = "DHRDNDOT";
$tdatapayrolltab[".inlineAddFields"][] = "DHNDOT";
$tdatapayrolltab[".inlineAddFields"][] = "RDHrs";
$tdatapayrolltab[".inlineAddFields"][] = "RegNDHrs";
$tdatapayrolltab[".inlineAddFields"][] = "RHNDHrs";
$tdatapayrolltab[".inlineAddFields"][] = "SHNDHrs";
$tdatapayrolltab[".inlineAddFields"][] = "CHNDHrs";
$tdatapayrolltab[".inlineAddFields"][] = "RDNDHrs";
$tdatapayrolltab[".inlineAddFields"][] = "DHRDND";
$tdatapayrolltab[".inlineAddFields"][] = "DHND";
$tdatapayrolltab[".inlineAddFields"][] = "RHRDND";
$tdatapayrolltab[".inlineAddFields"][] = "SHRDND";
$tdatapayrolltab[".inlineAddFields"][] = "DHOT";
$tdatapayrolltab[".inlineAddFields"][] = "DHRD";
$tdatapayrolltab[".inlineAddFields"][] = "DH";
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
$tdatapayrolltab[".inlineAddFields"][] = "Thirteenth";
$tdatapayrolltab[".inlineAddFields"][] = "Taxable";
$tdatapayrolltab[".inlineAddFields"][] = "ThirToDate";
$tdatapayrolltab[".inlineAddFields"][] = "TaxableToDate";
$tdatapayrolltab[".inlineAddFields"][] = "TaxToDate";
$tdatapayrolltab[".inlineAddFields"][] = "PayrollID";

$tdatapayrolltab[".editFields"] = array();
$tdatapayrolltab[".editFields"][] = "Locked";
$tdatapayrolltab[".editFields"][] = "FromDate";
$tdatapayrolltab[".editFields"][] = "ToDate";
$tdatapayrolltab[".editFields"][] = "EmployeeID";
$tdatapayrolltab[".editFields"][] = "UserName";
$tdatapayrolltab[".editFields"][] = "Email";
$tdatapayrolltab[".editFields"][] = "Position";
$tdatapayrolltab[".editFields"][] = "Division";
$tdatapayrolltab[".editFields"][] = "Employer";
$tdatapayrolltab[".editFields"][] = "WageType";
$tdatapayrolltab[".editFields"][] = "Status";
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
$tdatapayrolltab[".editFields"][] = "NDOTHrs";
$tdatapayrolltab[".editFields"][] = "RegNDOTHrs";
$tdatapayrolltab[".editFields"][] = "RHNDOTHrs";
$tdatapayrolltab[".editFields"][] = "CHNDOTHrs";
$tdatapayrolltab[".editFields"][] = "SHNDOTHrs";
$tdatapayrolltab[".editFields"][] = "SHRDNDOT";
$tdatapayrolltab[".editFields"][] = "RHRDNDOT";
$tdatapayrolltab[".editFields"][] = "RDNDOTHrs";
$tdatapayrolltab[".editFields"][] = "DHRDOT";
$tdatapayrolltab[".editFields"][] = "DHRDNDOT";
$tdatapayrolltab[".editFields"][] = "DHNDOT";
$tdatapayrolltab[".editFields"][] = "RDHrs";
$tdatapayrolltab[".editFields"][] = "RegNDHrs";
$tdatapayrolltab[".editFields"][] = "RHNDHrs";
$tdatapayrolltab[".editFields"][] = "SHNDHrs";
$tdatapayrolltab[".editFields"][] = "CHNDHrs";
$tdatapayrolltab[".editFields"][] = "RDNDHrs";
$tdatapayrolltab[".editFields"][] = "DHRDND";
$tdatapayrolltab[".editFields"][] = "DHND";
$tdatapayrolltab[".editFields"][] = "RHRDND";
$tdatapayrolltab[".editFields"][] = "SHRDND";
$tdatapayrolltab[".editFields"][] = "DHOT";
$tdatapayrolltab[".editFields"][] = "DHRD";
$tdatapayrolltab[".editFields"][] = "DH";
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
$tdatapayrolltab[".editFields"][] = "Thirteenth";
$tdatapayrolltab[".editFields"][] = "Taxable";
$tdatapayrolltab[".editFields"][] = "ThirToDate";
$tdatapayrolltab[".editFields"][] = "TaxableToDate";
$tdatapayrolltab[".editFields"][] = "TaxToDate";
$tdatapayrolltab[".editFields"][] = "PayrollID";

$tdatapayrolltab[".inlineEditFields"] = array();
$tdatapayrolltab[".inlineEditFields"][] = "Locked";
$tdatapayrolltab[".inlineEditFields"][] = "FromDate";
$tdatapayrolltab[".inlineEditFields"][] = "ToDate";
$tdatapayrolltab[".inlineEditFields"][] = "EmployeeID";
$tdatapayrolltab[".inlineEditFields"][] = "UserName";
$tdatapayrolltab[".inlineEditFields"][] = "Email";
$tdatapayrolltab[".inlineEditFields"][] = "Position";
$tdatapayrolltab[".inlineEditFields"][] = "Division";
$tdatapayrolltab[".inlineEditFields"][] = "Employer";
$tdatapayrolltab[".inlineEditFields"][] = "WageType";
$tdatapayrolltab[".inlineEditFields"][] = "Status";
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
$tdatapayrolltab[".inlineEditFields"][] = "NDOTHrs";
$tdatapayrolltab[".inlineEditFields"][] = "RegNDOTHrs";
$tdatapayrolltab[".inlineEditFields"][] = "RHNDOTHrs";
$tdatapayrolltab[".inlineEditFields"][] = "CHNDOTHrs";
$tdatapayrolltab[".inlineEditFields"][] = "SHNDOTHrs";
$tdatapayrolltab[".inlineEditFields"][] = "SHRDNDOT";
$tdatapayrolltab[".inlineEditFields"][] = "RHRDNDOT";
$tdatapayrolltab[".inlineEditFields"][] = "RDNDOTHrs";
$tdatapayrolltab[".inlineEditFields"][] = "DHRDOT";
$tdatapayrolltab[".inlineEditFields"][] = "DHRDNDOT";
$tdatapayrolltab[".inlineEditFields"][] = "DHNDOT";
$tdatapayrolltab[".inlineEditFields"][] = "RDHrs";
$tdatapayrolltab[".inlineEditFields"][] = "RegNDHrs";
$tdatapayrolltab[".inlineEditFields"][] = "RHNDHrs";
$tdatapayrolltab[".inlineEditFields"][] = "SHNDHrs";
$tdatapayrolltab[".inlineEditFields"][] = "CHNDHrs";
$tdatapayrolltab[".inlineEditFields"][] = "RDNDHrs";
$tdatapayrolltab[".inlineEditFields"][] = "DHRDND";
$tdatapayrolltab[".inlineEditFields"][] = "DHND";
$tdatapayrolltab[".inlineEditFields"][] = "RHRDND";
$tdatapayrolltab[".inlineEditFields"][] = "SHRDND";
$tdatapayrolltab[".inlineEditFields"][] = "DHOT";
$tdatapayrolltab[".inlineEditFields"][] = "DHRD";
$tdatapayrolltab[".inlineEditFields"][] = "DH";
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
$tdatapayrolltab[".inlineEditFields"][] = "Thirteenth";
$tdatapayrolltab[".inlineEditFields"][] = "Taxable";
$tdatapayrolltab[".inlineEditFields"][] = "ThirToDate";
$tdatapayrolltab[".inlineEditFields"][] = "TaxableToDate";
$tdatapayrolltab[".inlineEditFields"][] = "TaxToDate";
$tdatapayrolltab[".inlineEditFields"][] = "PayrollID";

$tdatapayrolltab[".updateSelectedFields"] = array();
$tdatapayrolltab[".updateSelectedFields"][] = "Locked";
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
$tdatapayrolltab[".updateSelectedFields"][] = "RDOTHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "NDHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "NDOTHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "RegNDOTHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "RHNDOTHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "CHNDOTHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "SHNDOTHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "SHRDNDOT";
$tdatapayrolltab[".updateSelectedFields"][] = "RHRDNDOT";
$tdatapayrolltab[".updateSelectedFields"][] = "RDNDOTHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "DHRDOT";
$tdatapayrolltab[".updateSelectedFields"][] = "DHRDNDOT";
$tdatapayrolltab[".updateSelectedFields"][] = "DHNDOT";
$tdatapayrolltab[".updateSelectedFields"][] = "RDHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "RegNDHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "RHNDHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "SHNDHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "CHNDHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "RDNDHrs";
$tdatapayrolltab[".updateSelectedFields"][] = "DHRDND";
$tdatapayrolltab[".updateSelectedFields"][] = "DHND";
$tdatapayrolltab[".updateSelectedFields"][] = "RHRDND";
$tdatapayrolltab[".updateSelectedFields"][] = "SHRDND";
$tdatapayrolltab[".updateSelectedFields"][] = "DHOT";
$tdatapayrolltab[".updateSelectedFields"][] = "DHRD";
$tdatapayrolltab[".updateSelectedFields"][] = "DH";
$tdatapayrolltab[".updateSelectedFields"][] = "AllowancePerDay";
$tdatapayrolltab[".updateSelectedFields"][] = "NDMealAllowance";


$tdatapayrolltab[".exportFields"] = array();
$tdatapayrolltab[".exportFields"][] = "PtabID";
$tdatapayrolltab[".exportFields"][] = "Locked";
$tdatapayrolltab[".exportFields"][] = "FromDate";
$tdatapayrolltab[".exportFields"][] = "ToDate";
$tdatapayrolltab[".exportFields"][] = "EmployeeID";
$tdatapayrolltab[".exportFields"][] = "UserName";
$tdatapayrolltab[".exportFields"][] = "Email";
$tdatapayrolltab[".exportFields"][] = "Position";
$tdatapayrolltab[".exportFields"][] = "Division";
$tdatapayrolltab[".exportFields"][] = "Employer";
$tdatapayrolltab[".exportFields"][] = "WageType";
$tdatapayrolltab[".exportFields"][] = "Status";
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
$tdatapayrolltab[".exportFields"][] = "NDOTHrs";
$tdatapayrolltab[".exportFields"][] = "RegNDOTHrs";
$tdatapayrolltab[".exportFields"][] = "RHNDOTHrs";
$tdatapayrolltab[".exportFields"][] = "CHNDOTHrs";
$tdatapayrolltab[".exportFields"][] = "SHNDOTHrs";
$tdatapayrolltab[".exportFields"][] = "SHRDNDOT";
$tdatapayrolltab[".exportFields"][] = "RHRDNDOT";
$tdatapayrolltab[".exportFields"][] = "RDNDOTHrs";
$tdatapayrolltab[".exportFields"][] = "DHRDOT";
$tdatapayrolltab[".exportFields"][] = "DHRDNDOT";
$tdatapayrolltab[".exportFields"][] = "DHNDOT";
$tdatapayrolltab[".exportFields"][] = "RDHrs";
$tdatapayrolltab[".exportFields"][] = "RegNDHrs";
$tdatapayrolltab[".exportFields"][] = "RHNDHrs";
$tdatapayrolltab[".exportFields"][] = "SHNDHrs";
$tdatapayrolltab[".exportFields"][] = "CHNDHrs";
$tdatapayrolltab[".exportFields"][] = "RDNDHrs";
$tdatapayrolltab[".exportFields"][] = "DHRDND";
$tdatapayrolltab[".exportFields"][] = "DHND";
$tdatapayrolltab[".exportFields"][] = "RHRDND";
$tdatapayrolltab[".exportFields"][] = "SHRDND";
$tdatapayrolltab[".exportFields"][] = "DHOT";
$tdatapayrolltab[".exportFields"][] = "DHRD";
$tdatapayrolltab[".exportFields"][] = "DH";
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
$tdatapayrolltab[".exportFields"][] = "Thirteenth";
$tdatapayrolltab[".exportFields"][] = "Taxable";
$tdatapayrolltab[".exportFields"][] = "ThirToDate";
$tdatapayrolltab[".exportFields"][] = "TaxableToDate";
$tdatapayrolltab[".exportFields"][] = "TaxToDate";
$tdatapayrolltab[".exportFields"][] = "PayrollID";

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
$tdatapayrolltab[".importFields"][] = "UserName";
$tdatapayrolltab[".importFields"][] = "FromDate";
$tdatapayrolltab[".importFields"][] = "ToDate";
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
$tdatapayrolltab[".importFields"][] = "Thirteenth";
$tdatapayrolltab[".importFields"][] = "Taxable";
$tdatapayrolltab[".importFields"][] = "NDOTHrs";
$tdatapayrolltab[".importFields"][] = "RegNDOTHrs";
$tdatapayrolltab[".importFields"][] = "RHNDOTHrs";
$tdatapayrolltab[".importFields"][] = "SHNDOTHrs";
$tdatapayrolltab[".importFields"][] = "CHNDOTHrs";
$tdatapayrolltab[".importFields"][] = "RDNDOTHrs";
$tdatapayrolltab[".importFields"][] = "DH";
$tdatapayrolltab[".importFields"][] = "DHRD";
$tdatapayrolltab[".importFields"][] = "DHOT";
$tdatapayrolltab[".importFields"][] = "DHRDOT";
$tdatapayrolltab[".importFields"][] = "SHRDND";
$tdatapayrolltab[".importFields"][] = "RHRDND";
$tdatapayrolltab[".importFields"][] = "SHRDNDOT";
$tdatapayrolltab[".importFields"][] = "RHRDNDOT";
$tdatapayrolltab[".importFields"][] = "DHND";
$tdatapayrolltab[".importFields"][] = "DHRDND";
$tdatapayrolltab[".importFields"][] = "DHNDOT";
$tdatapayrolltab[".importFields"][] = "DHRDNDOT";
$tdatapayrolltab[".importFields"][] = "ThirToDate";
$tdatapayrolltab[".importFields"][] = "TaxableToDate";
$tdatapayrolltab[".importFields"][] = "TaxToDate";

$tdatapayrolltab[".printFields"] = array();
$tdatapayrolltab[".printFields"][] = "PtabID";
$tdatapayrolltab[".printFields"][] = "Locked";
$tdatapayrolltab[".printFields"][] = "FromDate";
$tdatapayrolltab[".printFields"][] = "ToDate";
$tdatapayrolltab[".printFields"][] = "EmployeeID";
$tdatapayrolltab[".printFields"][] = "UserName";
$tdatapayrolltab[".printFields"][] = "Email";
$tdatapayrolltab[".printFields"][] = "Position";
$tdatapayrolltab[".printFields"][] = "Division";
$tdatapayrolltab[".printFields"][] = "Employer";
$tdatapayrolltab[".printFields"][] = "WageType";
$tdatapayrolltab[".printFields"][] = "Status";
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
$tdatapayrolltab[".printFields"][] = "NDOTHrs";
$tdatapayrolltab[".printFields"][] = "RegNDOTHrs";
$tdatapayrolltab[".printFields"][] = "RHNDOTHrs";
$tdatapayrolltab[".printFields"][] = "CHNDOTHrs";
$tdatapayrolltab[".printFields"][] = "SHNDOTHrs";
$tdatapayrolltab[".printFields"][] = "SHRDNDOT";
$tdatapayrolltab[".printFields"][] = "RHRDNDOT";
$tdatapayrolltab[".printFields"][] = "RDNDOTHrs";
$tdatapayrolltab[".printFields"][] = "DHRDOT";
$tdatapayrolltab[".printFields"][] = "DHRDNDOT";
$tdatapayrolltab[".printFields"][] = "DHNDOT";
$tdatapayrolltab[".printFields"][] = "RDHrs";
$tdatapayrolltab[".printFields"][] = "RegNDHrs";
$tdatapayrolltab[".printFields"][] = "RHNDHrs";
$tdatapayrolltab[".printFields"][] = "SHNDHrs";
$tdatapayrolltab[".printFields"][] = "CHNDHrs";
$tdatapayrolltab[".printFields"][] = "RDNDHrs";
$tdatapayrolltab[".printFields"][] = "DHRDND";
$tdatapayrolltab[".printFields"][] = "DHND";
$tdatapayrolltab[".printFields"][] = "RHRDND";
$tdatapayrolltab[".printFields"][] = "SHRDND";
$tdatapayrolltab[".printFields"][] = "DHOT";
$tdatapayrolltab[".printFields"][] = "DHRD";
$tdatapayrolltab[".printFields"][] = "DH";
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
$tdatapayrolltab[".printFields"][] = "Thirteenth";
$tdatapayrolltab[".printFields"][] = "Taxable";
$tdatapayrolltab[".printFields"][] = "ThirToDate";
$tdatapayrolltab[".printFields"][] = "TaxableToDate";
$tdatapayrolltab[".printFields"][] = "TaxToDate";
$tdatapayrolltab[".printFields"][] = "PayrollID";


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
		$fdata["defaultSearchOption"] = "Equals";

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
		$fdata["defaultSearchOption"] = "Equals";

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








	$tdatapayrolltab["TrODays"] = $fdata;
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings




	$tdatapayrolltab["UserName"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
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




	$tdatapayrolltab["FromDate"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
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




	$tdatapayrolltab["ToDate"] = $fdata;
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

	

		$fdata["bViewPage"] = true;

	
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

	

		$fdata["bViewPage"] = true;

	
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

	

		$fdata["bViewPage"] = true;

	
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

	

		$fdata["bViewPage"] = true;

	
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

	

		$fdata["bViewPage"] = true;

	
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

	

		$fdata["bViewPage"] = true;

	
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

	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrolltab["Position"] = $fdata;
//	Thirteenth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "Thirteenth";
	$fdata["GoodName"] = "Thirteenth";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","Thirteenth");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Thirteenth";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Thirteenth";

	
	
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








	$tdatapayrolltab["Thirteenth"] = $fdata;
//	Taxable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "Taxable";
	$fdata["GoodName"] = "Taxable";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","Taxable");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Taxable";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Taxable";

	
	
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








	$tdatapayrolltab["Taxable"] = $fdata;
//	NDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "NDOTHrs";
	$fdata["GoodName"] = "NDOTHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","NDOTHrs");
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








	$tdatapayrolltab["NDOTHrs"] = $fdata;
//	RegNDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "RegNDOTHrs";
	$fdata["GoodName"] = "RegNDOTHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","RegNDOTHrs");
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








	$tdatapayrolltab["RegNDOTHrs"] = $fdata;
//	RHNDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "RHNDOTHrs";
	$fdata["GoodName"] = "RHNDOTHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","RHNDOTHrs");
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








	$tdatapayrolltab["RHNDOTHrs"] = $fdata;
//	SHNDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "SHNDOTHrs";
	$fdata["GoodName"] = "SHNDOTHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","SHNDOTHrs");
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








	$tdatapayrolltab["SHNDOTHrs"] = $fdata;
//	CHNDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "CHNDOTHrs";
	$fdata["GoodName"] = "CHNDOTHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","CHNDOTHrs");
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








	$tdatapayrolltab["CHNDOTHrs"] = $fdata;
//	RDNDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "RDNDOTHrs";
	$fdata["GoodName"] = "RDNDOTHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","RDNDOTHrs");
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








	$tdatapayrolltab["RDNDOTHrs"] = $fdata;
//	DH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "DH";
	$fdata["GoodName"] = "DH";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","DH");
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

		$fdata["strField"] = "DH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DH";

	
	
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








	$tdatapayrolltab["DH"] = $fdata;
//	DHRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "DHRD";
	$fdata["GoodName"] = "DHRD";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","DHRD");
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

		$fdata["strField"] = "DHRD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHRD";

	
	
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








	$tdatapayrolltab["DHRD"] = $fdata;
//	DHOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "DHOT";
	$fdata["GoodName"] = "DHOT";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","DHOT");
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

		$fdata["strField"] = "DHOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHOT";

	
	
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








	$tdatapayrolltab["DHOT"] = $fdata;
//	DHRDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "DHRDOT";
	$fdata["GoodName"] = "DHRDOT";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","DHRDOT");
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

		$fdata["strField"] = "DHRDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHRDOT";

	
	
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








	$tdatapayrolltab["DHRDOT"] = $fdata;
//	SHRDND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "SHRDND";
	$fdata["GoodName"] = "SHRDND";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","SHRDND");
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

		$fdata["strField"] = "SHRDND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHRDND";

	
	
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








	$tdatapayrolltab["SHRDND"] = $fdata;
//	RHRDND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "RHRDND";
	$fdata["GoodName"] = "RHRDND";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","RHRDND");
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

		$fdata["strField"] = "RHRDND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHRDND";

	
	
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








	$tdatapayrolltab["RHRDND"] = $fdata;
//	SHRDNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "SHRDNDOT";
	$fdata["GoodName"] = "SHRDNDOT";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","SHRDNDOT");
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

		$fdata["strField"] = "SHRDNDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHRDNDOT";

	
	
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








	$tdatapayrolltab["SHRDNDOT"] = $fdata;
//	RHRDNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "RHRDNDOT";
	$fdata["GoodName"] = "RHRDNDOT";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","RHRDNDOT");
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

		$fdata["strField"] = "RHRDNDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHRDNDOT";

	
	
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








	$tdatapayrolltab["RHRDNDOT"] = $fdata;
//	DHND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "DHND";
	$fdata["GoodName"] = "DHND";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","DHND");
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

		$fdata["strField"] = "DHND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHND";

	
	
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








	$tdatapayrolltab["DHND"] = $fdata;
//	DHRDND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "DHRDND";
	$fdata["GoodName"] = "DHRDND";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","DHRDND");
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

		$fdata["strField"] = "DHRDND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHRDND";

	
	
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








	$tdatapayrolltab["DHRDND"] = $fdata;
//	DHNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "DHNDOT";
	$fdata["GoodName"] = "DHNDOT";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","DHNDOT");
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

		$fdata["strField"] = "DHNDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHNDOT";

	
	
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








	$tdatapayrolltab["DHNDOT"] = $fdata;
//	DHRDNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "DHRDNDOT";
	$fdata["GoodName"] = "DHRDNDOT";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","DHRDNDOT");
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

		$fdata["strField"] = "DHRDNDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHRDNDOT";

	
	
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








	$tdatapayrolltab["DHRDNDOT"] = $fdata;
//	ThirToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "ThirToDate";
	$fdata["GoodName"] = "ThirToDate";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","ThirToDate");
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

		$fdata["strField"] = "ThirToDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ThirToDate";

	
	
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




	$tdatapayrolltab["ThirToDate"] = $fdata;
//	TaxableToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "TaxableToDate";
	$fdata["GoodName"] = "TaxableToDate";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","TaxableToDate");
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

		$fdata["strField"] = "TaxableToDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TaxableToDate";

	
	
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




	$tdatapayrolltab["TaxableToDate"] = $fdata;
//	TaxToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "TaxToDate";
	$fdata["GoodName"] = "TaxToDate";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab","TaxToDate");
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

		$fdata["strField"] = "TaxToDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TaxToDate";

	
	
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




	$tdatapayrolltab["TaxToDate"] = $fdata;


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
$proto0["m_strFieldList"] = "PtabID,  EmployeeID,  WageType,  Status,  BasicMonthly,  BasicDaily,  DWork,  Absent,  LateMins,  UndertimeMins,  RHolidayHrs,  SHolidayHrs,  CHolidayHrs,  ExcessHrs,  RegOTHrs,  RHOTHrs,  SHOTHRs,  CHOTHrs,  RDOTHrs,  NDHrs,  RDHrs,  RegNDHrs,  RHNDHrs,  SHNDHrs,  CHNDHrs,  RDNDHrs,  VLDays,  SLDays,  ELDays,  PLDays,  TrODays,  UserName,  FromDate,  ToDate,  AllowancePerDay,  VLBalance,  SLBalance,  ELBalance,  PLBalance,  AgencyShare,  NDMealAllowance,  Division,  Employer,  PayrollID,  Email,  Locked,  `Position`,  Thirteenth,  Taxable,  NDOTHrs,  RegNDOTHrs,  RHNDOTHrs,  SHNDOTHrs,  CHNDOTHrs,  RDNDOTHrs,  DH,  DHRD,  DHOT,  DHRDOT,  SHRDND,  RHRDND,  SHRDNDOT,  RHRDNDOT,  DHND,  DHRDND,  DHNDOT,  DHRDNDOT,  ThirToDate,  TaxableToDate,  TaxToDate";
$proto0["m_strFrom"] = "FROM payrolltab";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY ToDate DESC";
	
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
	"m_strName" => "UserName",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto68["m_sql"] = "UserName";
$proto68["m_srcTableName"] = "payrolltab";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto70["m_sql"] = "FromDate";
$proto70["m_srcTableName"] = "payrolltab";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto72["m_sql"] = "ToDate";
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
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "Thirteenth",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto100["m_sql"] = "Thirteenth";
$proto100["m_srcTableName"] = "payrolltab";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "Taxable",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto102["m_sql"] = "Taxable";
$proto102["m_srcTableName"] = "payrolltab";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "NDOTHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto104["m_sql"] = "NDOTHrs";
$proto104["m_srcTableName"] = "payrolltab";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "RegNDOTHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto106["m_sql"] = "RegNDOTHrs";
$proto106["m_srcTableName"] = "payrolltab";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "RHNDOTHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto108["m_sql"] = "RHNDOTHrs";
$proto108["m_srcTableName"] = "payrolltab";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "SHNDOTHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto110["m_sql"] = "SHNDOTHrs";
$proto110["m_srcTableName"] = "payrolltab";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "CHNDOTHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto112["m_sql"] = "CHNDOTHrs";
$proto112["m_srcTableName"] = "payrolltab";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "RDNDOTHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto114["m_sql"] = "RDNDOTHrs";
$proto114["m_srcTableName"] = "payrolltab";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "DH",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto116["m_sql"] = "DH";
$proto116["m_srcTableName"] = "payrolltab";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRD",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto118["m_sql"] = "DHRD";
$proto118["m_srcTableName"] = "payrolltab";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "DHOT",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto120["m_sql"] = "DHOT";
$proto120["m_srcTableName"] = "payrolltab";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDOT",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto122["m_sql"] = "DHRDOT";
$proto122["m_srcTableName"] = "payrolltab";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDND",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto124["m_sql"] = "SHRDND";
$proto124["m_srcTableName"] = "payrolltab";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDND",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto126["m_sql"] = "RHRDND";
$proto126["m_srcTableName"] = "payrolltab";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDNDOT",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto128["m_sql"] = "SHRDNDOT";
$proto128["m_srcTableName"] = "payrolltab";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDNDOT",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto130["m_sql"] = "RHRDNDOT";
$proto130["m_srcTableName"] = "payrolltab";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "DHND",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto132["m_sql"] = "DHND";
$proto132["m_srcTableName"] = "payrolltab";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDND",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto134["m_sql"] = "DHRDND";
$proto134["m_srcTableName"] = "payrolltab";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "DHNDOT",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto136["m_sql"] = "DHNDOT";
$proto136["m_srcTableName"] = "payrolltab";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDNDOT",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto138["m_sql"] = "DHRDNDOT";
$proto138["m_srcTableName"] = "payrolltab";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "ThirToDate",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto140["m_sql"] = "ThirToDate";
$proto140["m_srcTableName"] = "payrolltab";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "TaxableToDate",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto142["m_sql"] = "TaxableToDate";
$proto142["m_srcTableName"] = "payrolltab";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "TaxToDate",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto144["m_sql"] = "TaxToDate";
$proto144["m_srcTableName"] = "payrolltab";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto146=array();
$proto146["m_link"] = "SQLL_MAIN";
			$proto147=array();
$proto147["m_strName"] = "payrolltab";
$proto147["m_srcTableName"] = "payrolltab";
$proto147["m_columns"] = array();
$proto147["m_columns"][] = "PtabID";
$proto147["m_columns"][] = "EmployeeID";
$proto147["m_columns"][] = "WageType";
$proto147["m_columns"][] = "Status";
$proto147["m_columns"][] = "BasicMonthly";
$proto147["m_columns"][] = "BasicDaily";
$proto147["m_columns"][] = "DWork";
$proto147["m_columns"][] = "Absent";
$proto147["m_columns"][] = "LateMins";
$proto147["m_columns"][] = "UndertimeMins";
$proto147["m_columns"][] = "RHolidayHrs";
$proto147["m_columns"][] = "SHolidayHrs";
$proto147["m_columns"][] = "CHolidayHrs";
$proto147["m_columns"][] = "ExcessHrs";
$proto147["m_columns"][] = "RegOTHrs";
$proto147["m_columns"][] = "RHOTHrs";
$proto147["m_columns"][] = "SHOTHRs";
$proto147["m_columns"][] = "CHOTHrs";
$proto147["m_columns"][] = "RDOTHrs";
$proto147["m_columns"][] = "NDHrs";
$proto147["m_columns"][] = "RDHrs";
$proto147["m_columns"][] = "RegNDHrs";
$proto147["m_columns"][] = "RHNDHrs";
$proto147["m_columns"][] = "SHNDHrs";
$proto147["m_columns"][] = "CHNDHrs";
$proto147["m_columns"][] = "RDNDHrs";
$proto147["m_columns"][] = "VLDays";
$proto147["m_columns"][] = "SLDays";
$proto147["m_columns"][] = "ELDays";
$proto147["m_columns"][] = "PLDays";
$proto147["m_columns"][] = "TrODays";
$proto147["m_columns"][] = "FromDate";
$proto147["m_columns"][] = "ToDate";
$proto147["m_columns"][] = "UserName";
$proto147["m_columns"][] = "AllowancePerDay";
$proto147["m_columns"][] = "VLBalance";
$proto147["m_columns"][] = "SLBalance";
$proto147["m_columns"][] = "ELBalance";
$proto147["m_columns"][] = "PLBalance";
$proto147["m_columns"][] = "AgencyShare";
$proto147["m_columns"][] = "NDMealAllowance";
$proto147["m_columns"][] = "Division";
$proto147["m_columns"][] = "Employer";
$proto147["m_columns"][] = "PayrollID";
$proto147["m_columns"][] = "Email";
$proto147["m_columns"][] = "Locked";
$proto147["m_columns"][] = "Position";
$proto147["m_columns"][] = "Thirteenth";
$proto147["m_columns"][] = "Taxable";
$proto147["m_columns"][] = "NDOTHrs";
$proto147["m_columns"][] = "RegNDOTHrs";
$proto147["m_columns"][] = "RHNDOTHrs";
$proto147["m_columns"][] = "SHNDOTHrs";
$proto147["m_columns"][] = "CHNDOTHrs";
$proto147["m_columns"][] = "RDNDOTHrs";
$proto147["m_columns"][] = "DH";
$proto147["m_columns"][] = "DHRD";
$proto147["m_columns"][] = "DHOT";
$proto147["m_columns"][] = "DHRDOT";
$proto147["m_columns"][] = "SHRDND";
$proto147["m_columns"][] = "RHRDND";
$proto147["m_columns"][] = "SHRDNDOT";
$proto147["m_columns"][] = "RHRDNDOT";
$proto147["m_columns"][] = "DHND";
$proto147["m_columns"][] = "DHRDND";
$proto147["m_columns"][] = "DHNDOT";
$proto147["m_columns"][] = "DHRDNDOT";
$proto147["m_columns"][] = "ThirToDate";
$proto147["m_columns"][] = "TaxableToDate";
$proto147["m_columns"][] = "TaxToDate";
$obj = new SQLTable($proto147);

$proto146["m_table"] = $obj;
$proto146["m_sql"] = "payrolltab";
$proto146["m_alias"] = "";
$proto146["m_srcTableName"] = "payrolltab";
$proto148=array();
$proto148["m_sql"] = "";
$proto148["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto148["m_column"]=$obj;
$proto148["m_contained"] = array();
$proto148["m_strCase"] = "";
$proto148["m_havingmode"] = false;
$proto148["m_inBrackets"] = false;
$proto148["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto148);

$proto146["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto146);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto150=array();
						$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab"
));

$proto150["m_column"]=$obj;
$proto150["m_bAsc"] = 0;
$proto150["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto150);

$proto0["m_orderby"][]=$obj;					
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