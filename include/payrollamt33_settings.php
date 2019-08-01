<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapayrollamt33 = array();
	$tdatapayrollamt33[".truncateText"] = true;
	$tdatapayrollamt33[".NumberOfChars"] = 80;
	$tdatapayrollamt33[".ShortName"] = "payrollamt33";
	$tdatapayrollamt33[".OwnerID"] = "";
	$tdatapayrollamt33[".OriginalTable"] = "payrollamt33";

//	field labels
$fieldLabelspayrollamt33 = array();
$fieldToolTipspayrollamt33 = array();
$pageTitlespayrollamt33 = array();
$placeHolderspayrollamt33 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspayrollamt33["English"] = array();
	$fieldToolTipspayrollamt33["English"] = array();
	$placeHolderspayrollamt33["English"] = array();
	$pageTitlespayrollamt33["English"] = array();
	$fieldLabelspayrollamt33["English"]["PtabID"] = "Ptab ID";
	$fieldToolTipspayrollamt33["English"]["PtabID"] = "";
	$placeHolderspayrollamt33["English"]["PtabID"] = "";
	$fieldLabelspayrollamt33["English"]["EmployeeID"] = "Biometric ID";
	$fieldToolTipspayrollamt33["English"]["EmployeeID"] = "";
	$placeHolderspayrollamt33["English"]["EmployeeID"] = "";
	$fieldLabelspayrollamt33["English"]["UserName"] = "Employee";
	$fieldToolTipspayrollamt33["English"]["UserName"] = "";
	$placeHolderspayrollamt33["English"]["UserName"] = "";
	$fieldLabelspayrollamt33["English"]["Status"] = "Status";
	$fieldToolTipspayrollamt33["English"]["Status"] = "";
	$placeHolderspayrollamt33["English"]["Status"] = "";
	$fieldLabelspayrollamt33["English"]["Division"] = "Division";
	$fieldToolTipspayrollamt33["English"]["Division"] = "";
	$placeHolderspayrollamt33["English"]["Division"] = "";
	$fieldLabelspayrollamt33["English"]["FromDate"] = "From Date";
	$fieldToolTipspayrollamt33["English"]["FromDate"] = "";
	$placeHolderspayrollamt33["English"]["FromDate"] = "";
	$fieldLabelspayrollamt33["English"]["ToDate"] = "To Date";
	$fieldToolTipspayrollamt33["English"]["ToDate"] = "";
	$placeHolderspayrollamt33["English"]["ToDate"] = "";
	$fieldLabelspayrollamt33["English"]["BasicMonthly"] = "Basic Monthly";
	$fieldToolTipspayrollamt33["English"]["BasicMonthly"] = "";
	$placeHolderspayrollamt33["English"]["BasicMonthly"] = "";
	$fieldLabelspayrollamt33["English"]["BasicDaily"] = "Basic Daily";
	$fieldToolTipspayrollamt33["English"]["BasicDaily"] = "";
	$placeHolderspayrollamt33["English"]["BasicDaily"] = "";
	$fieldLabelspayrollamt33["English"]["DWork"] = "DWork";
	$fieldToolTipspayrollamt33["English"]["DWork"] = "";
	$placeHolderspayrollamt33["English"]["DWork"] = "";
	$fieldLabelspayrollamt33["English"]["Absent"] = "Absent";
	$fieldToolTipspayrollamt33["English"]["Absent"] = "";
	$placeHolderspayrollamt33["English"]["Absent"] = "";
	$fieldLabelspayrollamt33["English"]["RegPay"] = "Reg Pay";
	$fieldToolTipspayrollamt33["English"]["RegPay"] = "";
	$placeHolderspayrollamt33["English"]["RegPay"] = "";
	$fieldLabelspayrollamt33["English"]["Late"] = "Late";
	$fieldToolTipspayrollamt33["English"]["Late"] = "";
	$placeHolderspayrollamt33["English"]["Late"] = "";
	$fieldLabelspayrollamt33["English"]["UnderTime"] = "Under Time";
	$fieldToolTipspayrollamt33["English"]["UnderTime"] = "";
	$placeHolderspayrollamt33["English"]["UnderTime"] = "";
	$fieldLabelspayrollamt33["English"]["RHoliday"] = "RHoliday";
	$fieldToolTipspayrollamt33["English"]["RHoliday"] = "";
	$placeHolderspayrollamt33["English"]["RHoliday"] = "";
	$fieldLabelspayrollamt33["English"]["SHoliday"] = "SHoliday";
	$fieldToolTipspayrollamt33["English"]["SHoliday"] = "";
	$placeHolderspayrollamt33["English"]["SHoliday"] = "";
	$fieldLabelspayrollamt33["English"]["CHoliday"] = "CHoliday";
	$fieldToolTipspayrollamt33["English"]["CHoliday"] = "";
	$placeHolderspayrollamt33["English"]["CHoliday"] = "";
	$fieldLabelspayrollamt33["English"]["RegOT"] = "Reg OT";
	$fieldToolTipspayrollamt33["English"]["RegOT"] = "";
	$placeHolderspayrollamt33["English"]["RegOT"] = "";
	$fieldLabelspayrollamt33["English"]["RHOT"] = "RHOT";
	$fieldToolTipspayrollamt33["English"]["RHOT"] = "";
	$placeHolderspayrollamt33["English"]["RHOT"] = "";
	$fieldLabelspayrollamt33["English"]["SHOT"] = "SHOT";
	$fieldToolTipspayrollamt33["English"]["SHOT"] = "";
	$placeHolderspayrollamt33["English"]["SHOT"] = "";
	$fieldLabelspayrollamt33["English"]["CHOT"] = "CHOT";
	$fieldToolTipspayrollamt33["English"]["CHOT"] = "";
	$placeHolderspayrollamt33["English"]["CHOT"] = "";
	$fieldLabelspayrollamt33["English"]["RDOT"] = "RDOT";
	$fieldToolTipspayrollamt33["English"]["RDOT"] = "";
	$placeHolderspayrollamt33["English"]["RDOT"] = "";
	$fieldLabelspayrollamt33["English"]["RD"] = "RD";
	$fieldToolTipspayrollamt33["English"]["RD"] = "";
	$placeHolderspayrollamt33["English"]["RD"] = "";
	$fieldLabelspayrollamt33["English"]["ND"] = "RegND";
	$fieldToolTipspayrollamt33["English"]["ND"] = "";
	$placeHolderspayrollamt33["English"]["ND"] = "";
	$fieldLabelspayrollamt33["English"]["RHND"] = "RHND";
	$fieldToolTipspayrollamt33["English"]["RHND"] = "";
	$placeHolderspayrollamt33["English"]["RHND"] = "";
	$fieldLabelspayrollamt33["English"]["SHND"] = "SHND";
	$fieldToolTipspayrollamt33["English"]["SHND"] = "";
	$placeHolderspayrollamt33["English"]["SHND"] = "";
	$fieldLabelspayrollamt33["English"]["CHND"] = "CHND";
	$fieldToolTipspayrollamt33["English"]["CHND"] = "";
	$placeHolderspayrollamt33["English"]["CHND"] = "";
	$fieldLabelspayrollamt33["English"]["RDND"] = "RDND";
	$fieldToolTipspayrollamt33["English"]["RDND"] = "";
	$placeHolderspayrollamt33["English"]["RDND"] = "";
	$fieldLabelspayrollamt33["English"]["VL"] = "VL";
	$fieldToolTipspayrollamt33["English"]["VL"] = "";
	$placeHolderspayrollamt33["English"]["VL"] = "";
	$fieldLabelspayrollamt33["English"]["SL"] = "SL";
	$fieldToolTipspayrollamt33["English"]["SL"] = "";
	$placeHolderspayrollamt33["English"]["SL"] = "";
	$fieldLabelspayrollamt33["English"]["EL"] = "EL";
	$fieldToolTipspayrollamt33["English"]["EL"] = "";
	$placeHolderspayrollamt33["English"]["EL"] = "";
	$fieldLabelspayrollamt33["English"]["PL"] = "PL";
	$fieldToolTipspayrollamt33["English"]["PL"] = "";
	$placeHolderspayrollamt33["English"]["PL"] = "";
	$fieldLabelspayrollamt33["English"]["TrO"] = "Tr O";
	$fieldToolTipspayrollamt33["English"]["TrO"] = "";
	$placeHolderspayrollamt33["English"]["TrO"] = "";
	$fieldLabelspayrollamt33["English"]["WageType"] = "Wage Type";
	$fieldToolTipspayrollamt33["English"]["WageType"] = "";
	$placeHolderspayrollamt33["English"]["WageType"] = "";
	$fieldLabelspayrollamt33["English"]["LateMins"] = "Late Mins";
	$fieldToolTipspayrollamt33["English"]["LateMins"] = "";
	$placeHolderspayrollamt33["English"]["LateMins"] = "";
	$fieldLabelspayrollamt33["English"]["UndertimeMins"] = "Undertime Mins";
	$fieldToolTipspayrollamt33["English"]["UndertimeMins"] = "";
	$placeHolderspayrollamt33["English"]["UndertimeMins"] = "";
	$fieldLabelspayrollamt33["English"]["RHolidayHrs"] = "RHoliday Hrs";
	$fieldToolTipspayrollamt33["English"]["RHolidayHrs"] = "";
	$placeHolderspayrollamt33["English"]["RHolidayHrs"] = "";
	$fieldLabelspayrollamt33["English"]["SHolidayHrs"] = "SHoliday Hrs";
	$fieldToolTipspayrollamt33["English"]["SHolidayHrs"] = "";
	$placeHolderspayrollamt33["English"]["SHolidayHrs"] = "";
	$fieldLabelspayrollamt33["English"]["CHolidayHrs"] = "CHoliday Hrs";
	$fieldToolTipspayrollamt33["English"]["CHolidayHrs"] = "";
	$placeHolderspayrollamt33["English"]["CHolidayHrs"] = "";
	$fieldLabelspayrollamt33["English"]["RegOTHrs"] = "Reg OTHrs";
	$fieldToolTipspayrollamt33["English"]["RegOTHrs"] = "";
	$placeHolderspayrollamt33["English"]["RegOTHrs"] = "";
	$fieldLabelspayrollamt33["English"]["RHOTHrs"] = "RHOTHrs";
	$fieldToolTipspayrollamt33["English"]["RHOTHrs"] = "";
	$placeHolderspayrollamt33["English"]["RHOTHrs"] = "";
	$fieldLabelspayrollamt33["English"]["SHOTHRs"] = "SHOTHrs";
	$fieldToolTipspayrollamt33["English"]["SHOTHRs"] = "";
	$placeHolderspayrollamt33["English"]["SHOTHRs"] = "";
	$fieldLabelspayrollamt33["English"]["CHOTHrs"] = "CHOTHrs";
	$fieldToolTipspayrollamt33["English"]["CHOTHrs"] = "";
	$placeHolderspayrollamt33["English"]["CHOTHrs"] = "";
	$fieldLabelspayrollamt33["English"]["RDOTHrs"] = "RDOTHrs";
	$fieldToolTipspayrollamt33["English"]["RDOTHrs"] = "";
	$placeHolderspayrollamt33["English"]["RDOTHrs"] = "";
	$fieldLabelspayrollamt33["English"]["RDHrs"] = "RDHrs";
	$fieldToolTipspayrollamt33["English"]["RDHrs"] = "";
	$placeHolderspayrollamt33["English"]["RDHrs"] = "";
	$fieldLabelspayrollamt33["English"]["RegNDHrs"] = "Reg NDHrs";
	$fieldToolTipspayrollamt33["English"]["RegNDHrs"] = "";
	$placeHolderspayrollamt33["English"]["RegNDHrs"] = "";
	$fieldLabelspayrollamt33["English"]["RHNDHrs"] = "RHNDHrs";
	$fieldToolTipspayrollamt33["English"]["RHNDHrs"] = "";
	$placeHolderspayrollamt33["English"]["RHNDHrs"] = "";
	$fieldLabelspayrollamt33["English"]["SHNDHrs"] = "SHNDHrs";
	$fieldToolTipspayrollamt33["English"]["SHNDHrs"] = "";
	$placeHolderspayrollamt33["English"]["SHNDHrs"] = "";
	$fieldLabelspayrollamt33["English"]["CHNDHrs"] = "CHNDHrs";
	$fieldToolTipspayrollamt33["English"]["CHNDHrs"] = "";
	$placeHolderspayrollamt33["English"]["CHNDHrs"] = "";
	$fieldLabelspayrollamt33["English"]["RDNDHrs"] = "RDNDHrs";
	$fieldToolTipspayrollamt33["English"]["RDNDHrs"] = "";
	$placeHolderspayrollamt33["English"]["RDNDHrs"] = "";
	$fieldLabelspayrollamt33["English"]["VLBalance"] = "VLBalance";
	$fieldToolTipspayrollamt33["English"]["VLBalance"] = "";
	$placeHolderspayrollamt33["English"]["VLBalance"] = "";
	$fieldLabelspayrollamt33["English"]["SLBalance"] = "SLBalance";
	$fieldToolTipspayrollamt33["English"]["SLBalance"] = "";
	$placeHolderspayrollamt33["English"]["SLBalance"] = "";
	$fieldLabelspayrollamt33["English"]["ELBalance"] = "ELBalance";
	$fieldToolTipspayrollamt33["English"]["ELBalance"] = "";
	$placeHolderspayrollamt33["English"]["ELBalance"] = "";
	$fieldLabelspayrollamt33["English"]["PLBalance"] = "PLBalance";
	$fieldToolTipspayrollamt33["English"]["PLBalance"] = "";
	$placeHolderspayrollamt33["English"]["PLBalance"] = "";
	$fieldLabelspayrollamt33["English"]["PayDate"] = "Pay Date";
	$fieldToolTipspayrollamt33["English"]["PayDate"] = "";
	$placeHolderspayrollamt33["English"]["PayDate"] = "";
	$fieldLabelspayrollamt33["English"]["LWOP"] = "LWOP";
	$fieldToolTipspayrollamt33["English"]["LWOP"] = "";
	$placeHolderspayrollamt33["English"]["LWOP"] = "";
	$fieldLabelspayrollamt33["English"]["LWOPdays"] = "LWOPdays";
	$fieldToolTipspayrollamt33["English"]["LWOPdays"] = "";
	$placeHolderspayrollamt33["English"]["LWOPdays"] = "";
	$fieldLabelspayrollamt33["English"]["TAdj"] = "TAdj-NTx";
	$fieldToolTipspayrollamt33["English"]["TAdj"] = "";
	$placeHolderspayrollamt33["English"]["TAdj"] = "";
	$fieldLabelspayrollamt33["English"]["TAdjt"] = "TAdj-Tx";
	$fieldToolTipspayrollamt33["English"]["TAdjt"] = "";
	$placeHolderspayrollamt33["English"]["TAdjt"] = "";
	$fieldLabelspayrollamt33["English"]["Ttax"] = "Ttax";
	$fieldToolTipspayrollamt33["English"]["Ttax"] = "";
	$placeHolderspayrollamt33["English"]["Ttax"] = "";
	$fieldLabelspayrollamt33["English"]["SSS"] = "SSS";
	$fieldToolTipspayrollamt33["English"]["SSS"] = "";
	$placeHolderspayrollamt33["English"]["SSS"] = "";
	$fieldLabelspayrollamt33["English"]["PagIbig"] = "Pag Ibig";
	$fieldToolTipspayrollamt33["English"]["PagIbig"] = "";
	$placeHolderspayrollamt33["English"]["PagIbig"] = "";
	$fieldLabelspayrollamt33["English"]["PHIC"] = "PHIC";
	$fieldToolTipspayrollamt33["English"]["PHIC"] = "";
	$placeHolderspayrollamt33["English"]["PHIC"] = "";
	$fieldLabelspayrollamt33["English"]["Taxable"] = "Taxable";
	$fieldToolTipspayrollamt33["English"]["Taxable"] = "";
	$placeHolderspayrollamt33["English"]["Taxable"] = "";
	$fieldLabelspayrollamt33["English"]["GrossPay"] = "Gross Pay";
	$fieldToolTipspayrollamt33["English"]["GrossPay"] = "";
	$placeHolderspayrollamt33["English"]["GrossPay"] = "";
	$fieldLabelspayrollamt33["English"]["NetPay"] = "Net Pay";
	$fieldToolTipspayrollamt33["English"]["NetPay"] = "";
	$placeHolderspayrollamt33["English"]["NetPay"] = "";
	$fieldLabelspayrollamt33["English"]["VLDays"] = "VLDays";
	$fieldToolTipspayrollamt33["English"]["VLDays"] = "";
	$placeHolderspayrollamt33["English"]["VLDays"] = "";
	$fieldLabelspayrollamt33["English"]["ELDays"] = "ELDays";
	$fieldToolTipspayrollamt33["English"]["ELDays"] = "";
	$placeHolderspayrollamt33["English"]["ELDays"] = "";
	$fieldLabelspayrollamt33["English"]["SLDays"] = "SLDays";
	$fieldToolTipspayrollamt33["English"]["SLDays"] = "";
	$placeHolderspayrollamt33["English"]["SLDays"] = "";
	$fieldLabelspayrollamt33["English"]["PLDays"] = "PLDays";
	$fieldToolTipspayrollamt33["English"]["PLDays"] = "";
	$placeHolderspayrollamt33["English"]["PLDays"] = "";
	$fieldLabelspayrollamt33["English"]["TND"] = "Total ND";
	$fieldToolTipspayrollamt33["English"]["TND"] = "";
	$placeHolderspayrollamt33["English"]["TND"] = "";
	$fieldLabelspayrollamt33["English"]["Employer"] = "Employer";
	$fieldToolTipspayrollamt33["English"]["Employer"] = "";
	$placeHolderspayrollamt33["English"]["Employer"] = "";
	$fieldLabelspayrollamt33["English"]["TDeductions"] = "TDeductions";
	$fieldToolTipspayrollamt33["English"]["TDeductions"] = "";
	$placeHolderspayrollamt33["English"]["TDeductions"] = "";
	$fieldLabelspayrollamt33["English"]["OT"] = "Total OT";
	$fieldToolTipspayrollamt33["English"]["OT"] = "";
	$placeHolderspayrollamt33["English"]["OT"] = "";
	if (count($fieldToolTipspayrollamt33["English"]))
		$tdatapayrollamt33[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspayrollamt33[""] = array();
	$fieldToolTipspayrollamt33[""] = array();
	$placeHolderspayrollamt33[""] = array();
	$pageTitlespayrollamt33[""] = array();
	if (count($fieldToolTipspayrollamt33[""]))
		$tdatapayrollamt33[".isUseToolTips"] = true;
}


	$tdatapayrollamt33[".NCSearch"] = true;



$tdatapayrollamt33[".shortTableName"] = "payrollamt33";
$tdatapayrollamt33[".nSecOptions"] = 0;
$tdatapayrollamt33[".recsPerRowPrint"] = 1;
$tdatapayrollamt33[".mainTableOwnerID"] = "";
$tdatapayrollamt33[".moveNext"] = 1;
$tdatapayrollamt33[".entityType"] = 0;

$tdatapayrollamt33[".strOriginalTableName"] = "payrollamt33";

	



$tdatapayrollamt33[".showAddInPopup"] = false;

$tdatapayrollamt33[".showEditInPopup"] = false;

$tdatapayrollamt33[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapayrollamt33[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapayrollamt33[".fieldsForRegister"] = array();

$tdatapayrollamt33[".listAjax"] = false;

	$tdatapayrollamt33[".audit"] = false;

	$tdatapayrollamt33[".locking"] = false;



$tdatapayrollamt33[".list"] = true;



$tdatapayrollamt33[".reorderRecordsByHeader"] = true;


$tdatapayrollamt33[".exportFormatting"] = 2;
$tdatapayrollamt33[".exportDelimiter"] = ",";
		


$tdatapayrollamt33[".exportTo"] = true;

$tdatapayrollamt33[".printFriendly"] = true;


$tdatapayrollamt33[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapayrollamt33[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapayrollamt33[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapayrollamt33[".searchSaving"] = false;
//

$tdatapayrollamt33[".showSearchPanel"] = true;
		$tdatapayrollamt33[".flexibleSearch"] = true;

$tdatapayrollamt33[".isUseAjaxSuggest"] = true;

$tdatapayrollamt33[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																				

$tdatapayrollamt33[".ajaxCodeSnippetAdded"] = false;

$tdatapayrollamt33[".buttonsAdded"] = false;

$tdatapayrollamt33[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapayrollamt33[".isUseTimeForSearch"] = false;





$tdatapayrollamt33[".allSearchFields"] = array();
$tdatapayrollamt33[".filterFields"] = array();
$tdatapayrollamt33[".requiredSearchFields"] = array();

$tdatapayrollamt33[".allSearchFields"][] = "OT";
	$tdatapayrollamt33[".allSearchFields"][] = "TDeductions";
	$tdatapayrollamt33[".allSearchFields"][] = "PtabID";
	$tdatapayrollamt33[".allSearchFields"][] = "FromDate";
	$tdatapayrollamt33[".allSearchFields"][] = "ToDate";
	$tdatapayrollamt33[".allSearchFields"][] = "EmployeeID";
	$tdatapayrollamt33[".allSearchFields"][] = "UserName";
	$tdatapayrollamt33[".allSearchFields"][] = "Status";
	$tdatapayrollamt33[".allSearchFields"][] = "Employer";
	$tdatapayrollamt33[".allSearchFields"][] = "Division";
	$tdatapayrollamt33[".allSearchFields"][] = "WageType";
	$tdatapayrollamt33[".allSearchFields"][] = "BasicMonthly";
	$tdatapayrollamt33[".allSearchFields"][] = "BasicDaily";
	$tdatapayrollamt33[".allSearchFields"][] = "DWork";
	$tdatapayrollamt33[".allSearchFields"][] = "Absent";
	$tdatapayrollamt33[".allSearchFields"][] = "RegPay";
	$tdatapayrollamt33[".allSearchFields"][] = "LateMins";
	$tdatapayrollamt33[".allSearchFields"][] = "Late";
	$tdatapayrollamt33[".allSearchFields"][] = "UndertimeMins";
	$tdatapayrollamt33[".allSearchFields"][] = "UnderTime";
	$tdatapayrollamt33[".allSearchFields"][] = "RHoliday";
	$tdatapayrollamt33[".allSearchFields"][] = "SHoliday";
	$tdatapayrollamt33[".allSearchFields"][] = "CHoliday";
	$tdatapayrollamt33[".allSearchFields"][] = "RegOT";
	$tdatapayrollamt33[".allSearchFields"][] = "RHOT";
	$tdatapayrollamt33[".allSearchFields"][] = "SHOT";
	$tdatapayrollamt33[".allSearchFields"][] = "CHOT";
	$tdatapayrollamt33[".allSearchFields"][] = "RDOT";
	$tdatapayrollamt33[".allSearchFields"][] = "RD";
	$tdatapayrollamt33[".allSearchFields"][] = "ND";
	$tdatapayrollamt33[".allSearchFields"][] = "RHND";
	$tdatapayrollamt33[".allSearchFields"][] = "SHND";
	$tdatapayrollamt33[".allSearchFields"][] = "CHND";
	$tdatapayrollamt33[".allSearchFields"][] = "RDND";
	$tdatapayrollamt33[".allSearchFields"][] = "TND";
	$tdatapayrollamt33[".allSearchFields"][] = "VL";
	$tdatapayrollamt33[".allSearchFields"][] = "SL";
	$tdatapayrollamt33[".allSearchFields"][] = "EL";
	$tdatapayrollamt33[".allSearchFields"][] = "PL";
	$tdatapayrollamt33[".allSearchFields"][] = "TrO";
	$tdatapayrollamt33[".allSearchFields"][] = "RHolidayHrs";
	$tdatapayrollamt33[".allSearchFields"][] = "SHolidayHrs";
	$tdatapayrollamt33[".allSearchFields"][] = "CHolidayHrs";
	$tdatapayrollamt33[".allSearchFields"][] = "RegOTHrs";
	$tdatapayrollamt33[".allSearchFields"][] = "RHOTHrs";
	$tdatapayrollamt33[".allSearchFields"][] = "SHOTHRs";
	$tdatapayrollamt33[".allSearchFields"][] = "CHOTHrs";
	$tdatapayrollamt33[".allSearchFields"][] = "RDOTHrs";
	$tdatapayrollamt33[".allSearchFields"][] = "RDHrs";
	$tdatapayrollamt33[".allSearchFields"][] = "RegNDHrs";
	$tdatapayrollamt33[".allSearchFields"][] = "RHNDHrs";
	$tdatapayrollamt33[".allSearchFields"][] = "SHNDHrs";
	$tdatapayrollamt33[".allSearchFields"][] = "CHNDHrs";
	$tdatapayrollamt33[".allSearchFields"][] = "RDNDHrs";
	$tdatapayrollamt33[".allSearchFields"][] = "VLBalance";
	$tdatapayrollamt33[".allSearchFields"][] = "SLBalance";
	$tdatapayrollamt33[".allSearchFields"][] = "ELBalance";
	$tdatapayrollamt33[".allSearchFields"][] = "PLBalance";
	$tdatapayrollamt33[".allSearchFields"][] = "PayDate";
	$tdatapayrollamt33[".allSearchFields"][] = "LWOP";
	$tdatapayrollamt33[".allSearchFields"][] = "LWOPdays";
	$tdatapayrollamt33[".allSearchFields"][] = "TAdj";
	$tdatapayrollamt33[".allSearchFields"][] = "TAdjt";
	$tdatapayrollamt33[".allSearchFields"][] = "Ttax";
	$tdatapayrollamt33[".allSearchFields"][] = "SSS";
	$tdatapayrollamt33[".allSearchFields"][] = "PagIbig";
	$tdatapayrollamt33[".allSearchFields"][] = "PHIC";
	$tdatapayrollamt33[".allSearchFields"][] = "Taxable";
	$tdatapayrollamt33[".allSearchFields"][] = "GrossPay";
	$tdatapayrollamt33[".allSearchFields"][] = "NetPay";
	$tdatapayrollamt33[".allSearchFields"][] = "VLDays";
	$tdatapayrollamt33[".allSearchFields"][] = "ELDays";
	$tdatapayrollamt33[".allSearchFields"][] = "SLDays";
	$tdatapayrollamt33[".allSearchFields"][] = "PLDays";
	

$tdatapayrollamt33[".googleLikeFields"] = array();
$tdatapayrollamt33[".googleLikeFields"][] = "PtabID";
$tdatapayrollamt33[".googleLikeFields"][] = "EmployeeID";
$tdatapayrollamt33[".googleLikeFields"][] = "UserName";
$tdatapayrollamt33[".googleLikeFields"][] = "Status";
$tdatapayrollamt33[".googleLikeFields"][] = "Employer";
$tdatapayrollamt33[".googleLikeFields"][] = "Division";
$tdatapayrollamt33[".googleLikeFields"][] = "FromDate";
$tdatapayrollamt33[".googleLikeFields"][] = "ToDate";
$tdatapayrollamt33[".googleLikeFields"][] = "BasicMonthly";
$tdatapayrollamt33[".googleLikeFields"][] = "BasicDaily";
$tdatapayrollamt33[".googleLikeFields"][] = "DWork";
$tdatapayrollamt33[".googleLikeFields"][] = "Absent";
$tdatapayrollamt33[".googleLikeFields"][] = "RegPay";
$tdatapayrollamt33[".googleLikeFields"][] = "Late";
$tdatapayrollamt33[".googleLikeFields"][] = "UnderTime";
$tdatapayrollamt33[".googleLikeFields"][] = "RHoliday";
$tdatapayrollamt33[".googleLikeFields"][] = "SHoliday";
$tdatapayrollamt33[".googleLikeFields"][] = "CHoliday";
$tdatapayrollamt33[".googleLikeFields"][] = "RegOT";
$tdatapayrollamt33[".googleLikeFields"][] = "RHOT";
$tdatapayrollamt33[".googleLikeFields"][] = "SHOT";
$tdatapayrollamt33[".googleLikeFields"][] = "CHOT";
$tdatapayrollamt33[".googleLikeFields"][] = "RDOT";
$tdatapayrollamt33[".googleLikeFields"][] = "OT";
$tdatapayrollamt33[".googleLikeFields"][] = "RD";
$tdatapayrollamt33[".googleLikeFields"][] = "ND";
$tdatapayrollamt33[".googleLikeFields"][] = "RHND";
$tdatapayrollamt33[".googleLikeFields"][] = "SHND";
$tdatapayrollamt33[".googleLikeFields"][] = "CHND";
$tdatapayrollamt33[".googleLikeFields"][] = "RDND";
$tdatapayrollamt33[".googleLikeFields"][] = "VL";
$tdatapayrollamt33[".googleLikeFields"][] = "SL";
$tdatapayrollamt33[".googleLikeFields"][] = "EL";
$tdatapayrollamt33[".googleLikeFields"][] = "PL";
$tdatapayrollamt33[".googleLikeFields"][] = "TrO";
$tdatapayrollamt33[".googleLikeFields"][] = "WageType";
$tdatapayrollamt33[".googleLikeFields"][] = "LateMins";
$tdatapayrollamt33[".googleLikeFields"][] = "UndertimeMins";
$tdatapayrollamt33[".googleLikeFields"][] = "RHolidayHrs";
$tdatapayrollamt33[".googleLikeFields"][] = "SHolidayHrs";
$tdatapayrollamt33[".googleLikeFields"][] = "CHolidayHrs";
$tdatapayrollamt33[".googleLikeFields"][] = "RegOTHrs";
$tdatapayrollamt33[".googleLikeFields"][] = "RHOTHrs";
$tdatapayrollamt33[".googleLikeFields"][] = "SHOTHRs";
$tdatapayrollamt33[".googleLikeFields"][] = "CHOTHrs";
$tdatapayrollamt33[".googleLikeFields"][] = "RDOTHrs";
$tdatapayrollamt33[".googleLikeFields"][] = "RDHrs";
$tdatapayrollamt33[".googleLikeFields"][] = "RegNDHrs";
$tdatapayrollamt33[".googleLikeFields"][] = "RHNDHrs";
$tdatapayrollamt33[".googleLikeFields"][] = "SHNDHrs";
$tdatapayrollamt33[".googleLikeFields"][] = "CHNDHrs";
$tdatapayrollamt33[".googleLikeFields"][] = "RDNDHrs";
$tdatapayrollamt33[".googleLikeFields"][] = "VLBalance";
$tdatapayrollamt33[".googleLikeFields"][] = "SLBalance";
$tdatapayrollamt33[".googleLikeFields"][] = "ELBalance";
$tdatapayrollamt33[".googleLikeFields"][] = "PLBalance";
$tdatapayrollamt33[".googleLikeFields"][] = "PayDate";
$tdatapayrollamt33[".googleLikeFields"][] = "LWOP";
$tdatapayrollamt33[".googleLikeFields"][] = "LWOPdays";
$tdatapayrollamt33[".googleLikeFields"][] = "TAdj";
$tdatapayrollamt33[".googleLikeFields"][] = "TAdjt";
$tdatapayrollamt33[".googleLikeFields"][] = "Ttax";
$tdatapayrollamt33[".googleLikeFields"][] = "SSS";
$tdatapayrollamt33[".googleLikeFields"][] = "PagIbig";
$tdatapayrollamt33[".googleLikeFields"][] = "PHIC";
$tdatapayrollamt33[".googleLikeFields"][] = "TDeductions";
$tdatapayrollamt33[".googleLikeFields"][] = "Taxable";
$tdatapayrollamt33[".googleLikeFields"][] = "GrossPay";
$tdatapayrollamt33[".googleLikeFields"][] = "NetPay";
$tdatapayrollamt33[".googleLikeFields"][] = "VLDays";
$tdatapayrollamt33[".googleLikeFields"][] = "ELDays";
$tdatapayrollamt33[".googleLikeFields"][] = "SLDays";
$tdatapayrollamt33[".googleLikeFields"][] = "PLDays";
$tdatapayrollamt33[".googleLikeFields"][] = "TND";


$tdatapayrollamt33[".advSearchFields"] = array();
$tdatapayrollamt33[".advSearchFields"][] = "OT";
$tdatapayrollamt33[".advSearchFields"][] = "TDeductions";
$tdatapayrollamt33[".advSearchFields"][] = "PtabID";
$tdatapayrollamt33[".advSearchFields"][] = "FromDate";
$tdatapayrollamt33[".advSearchFields"][] = "ToDate";
$tdatapayrollamt33[".advSearchFields"][] = "EmployeeID";
$tdatapayrollamt33[".advSearchFields"][] = "UserName";
$tdatapayrollamt33[".advSearchFields"][] = "Status";
$tdatapayrollamt33[".advSearchFields"][] = "Employer";
$tdatapayrollamt33[".advSearchFields"][] = "Division";
$tdatapayrollamt33[".advSearchFields"][] = "WageType";
$tdatapayrollamt33[".advSearchFields"][] = "BasicMonthly";
$tdatapayrollamt33[".advSearchFields"][] = "BasicDaily";
$tdatapayrollamt33[".advSearchFields"][] = "DWork";
$tdatapayrollamt33[".advSearchFields"][] = "Absent";
$tdatapayrollamt33[".advSearchFields"][] = "RegPay";
$tdatapayrollamt33[".advSearchFields"][] = "LateMins";
$tdatapayrollamt33[".advSearchFields"][] = "Late";
$tdatapayrollamt33[".advSearchFields"][] = "UndertimeMins";
$tdatapayrollamt33[".advSearchFields"][] = "UnderTime";
$tdatapayrollamt33[".advSearchFields"][] = "RHoliday";
$tdatapayrollamt33[".advSearchFields"][] = "SHoliday";
$tdatapayrollamt33[".advSearchFields"][] = "CHoliday";
$tdatapayrollamt33[".advSearchFields"][] = "RegOT";
$tdatapayrollamt33[".advSearchFields"][] = "RHOT";
$tdatapayrollamt33[".advSearchFields"][] = "SHOT";
$tdatapayrollamt33[".advSearchFields"][] = "CHOT";
$tdatapayrollamt33[".advSearchFields"][] = "RDOT";
$tdatapayrollamt33[".advSearchFields"][] = "RD";
$tdatapayrollamt33[".advSearchFields"][] = "ND";
$tdatapayrollamt33[".advSearchFields"][] = "RHND";
$tdatapayrollamt33[".advSearchFields"][] = "SHND";
$tdatapayrollamt33[".advSearchFields"][] = "CHND";
$tdatapayrollamt33[".advSearchFields"][] = "RDND";
$tdatapayrollamt33[".advSearchFields"][] = "TND";
$tdatapayrollamt33[".advSearchFields"][] = "VL";
$tdatapayrollamt33[".advSearchFields"][] = "SL";
$tdatapayrollamt33[".advSearchFields"][] = "EL";
$tdatapayrollamt33[".advSearchFields"][] = "PL";
$tdatapayrollamt33[".advSearchFields"][] = "TrO";
$tdatapayrollamt33[".advSearchFields"][] = "RHolidayHrs";
$tdatapayrollamt33[".advSearchFields"][] = "SHolidayHrs";
$tdatapayrollamt33[".advSearchFields"][] = "CHolidayHrs";
$tdatapayrollamt33[".advSearchFields"][] = "RegOTHrs";
$tdatapayrollamt33[".advSearchFields"][] = "RHOTHrs";
$tdatapayrollamt33[".advSearchFields"][] = "SHOTHRs";
$tdatapayrollamt33[".advSearchFields"][] = "CHOTHrs";
$tdatapayrollamt33[".advSearchFields"][] = "RDOTHrs";
$tdatapayrollamt33[".advSearchFields"][] = "RDHrs";
$tdatapayrollamt33[".advSearchFields"][] = "RegNDHrs";
$tdatapayrollamt33[".advSearchFields"][] = "RHNDHrs";
$tdatapayrollamt33[".advSearchFields"][] = "SHNDHrs";
$tdatapayrollamt33[".advSearchFields"][] = "CHNDHrs";
$tdatapayrollamt33[".advSearchFields"][] = "RDNDHrs";
$tdatapayrollamt33[".advSearchFields"][] = "VLBalance";
$tdatapayrollamt33[".advSearchFields"][] = "SLBalance";
$tdatapayrollamt33[".advSearchFields"][] = "ELBalance";
$tdatapayrollamt33[".advSearchFields"][] = "PLBalance";
$tdatapayrollamt33[".advSearchFields"][] = "PayDate";
$tdatapayrollamt33[".advSearchFields"][] = "LWOP";
$tdatapayrollamt33[".advSearchFields"][] = "LWOPdays";
$tdatapayrollamt33[".advSearchFields"][] = "TAdj";
$tdatapayrollamt33[".advSearchFields"][] = "TAdjt";
$tdatapayrollamt33[".advSearchFields"][] = "Ttax";
$tdatapayrollamt33[".advSearchFields"][] = "SSS";
$tdatapayrollamt33[".advSearchFields"][] = "PagIbig";
$tdatapayrollamt33[".advSearchFields"][] = "PHIC";
$tdatapayrollamt33[".advSearchFields"][] = "Taxable";
$tdatapayrollamt33[".advSearchFields"][] = "GrossPay";
$tdatapayrollamt33[".advSearchFields"][] = "NetPay";
$tdatapayrollamt33[".advSearchFields"][] = "VLDays";
$tdatapayrollamt33[".advSearchFields"][] = "ELDays";
$tdatapayrollamt33[".advSearchFields"][] = "SLDays";
$tdatapayrollamt33[".advSearchFields"][] = "PLDays";

$tdatapayrollamt33[".tableType"] = "list";

$tdatapayrollamt33[".printerPageOrientation"] = 0;
$tdatapayrollamt33[".nPrinterPageScale"] = 100;

$tdatapayrollamt33[".nPrinterSplitRecords"] = 40;

$tdatapayrollamt33[".nPrinterPDFSplitRecords"] = 40;



$tdatapayrollamt33[".geocodingEnabled"] = false;





$tdatapayrollamt33[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatapayrollamt33[".totalsFields"] = array();
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "RegPay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "Late",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "UnderTime",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "RHoliday",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "SHoliday",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "CHoliday",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "RegOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "RHOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "SHOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "CHOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "RDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "OT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "RD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "TND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "TAdj",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "TAdjt",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "Ttax",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "SSS",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "PagIbig",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "PHIC",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "TDeductions",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "Taxable",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "GrossPay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "NetPay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatapayrollamt33[".pageSize"] = 20;

$tdatapayrollamt33[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapayrollamt33[".strOrderBy"] = $tstrOrderBy;

$tdatapayrollamt33[".orderindexes"] = array();

$tdatapayrollamt33[".sqlHead"] = "SELECT PtabID,  EmployeeID,  UserName,  Status,  Employer,  Division,  FromDate,  ToDate,  BasicMonthly,  BasicDaily,  DWork,  Absent,  RegPay,  Late,  UnderTime,  RHoliday,  SHoliday,  CHoliday,  RegOT,  RHOT,  SHOT,  CHOT,  RDOT,  OT,  RD,  ND,  RHND,  SHND,  CHND,  RDND,  VL,  SL,  EL,  PL,  TrO,  WageType,  LateMins,  UndertimeMins,  RHolidayHrs,  SHolidayHrs,  CHolidayHrs,  RegOTHrs,  RHOTHrs,  SHOTHRs,  CHOTHrs,  RDOTHrs,  RDHrs,  RegNDHrs,  RHNDHrs,  SHNDHrs,  CHNDHrs,  RDNDHrs,  VLBalance,  SLBalance,  ELBalance,  PLBalance,  PayDate,  LWOP,  LWOPdays,  TAdj,  TAdjt,  Ttax,  SSS,  PagIbig,  PHIC,  TDeductions,  Taxable,  GrossPay,  NetPay,  VLDays,  ELDays,  SLDays,  PLDays,  TND";
$tdatapayrollamt33[".sqlFrom"] = "FROM payrollamt33";
$tdatapayrollamt33[".sqlWhereExpr"] = "";
$tdatapayrollamt33[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapayrollamt33[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapayrollamt33[".arrGroupsPerPage"] = $arrGPP;

$tdatapayrollamt33[".highlightSearchResults"] = true;

$tableKeyspayrollamt33 = array();
$tableKeyspayrollamt33[] = "PtabID";
$tdatapayrollamt33[".Keys"] = $tableKeyspayrollamt33;

$tdatapayrollamt33[".listFields"] = array();
$tdatapayrollamt33[".listFields"][] = "PtabID";
$tdatapayrollamt33[".listFields"][] = "FromDate";
$tdatapayrollamt33[".listFields"][] = "ToDate";
$tdatapayrollamt33[".listFields"][] = "PayDate";
$tdatapayrollamt33[".listFields"][] = "EmployeeID";
$tdatapayrollamt33[".listFields"][] = "UserName";
$tdatapayrollamt33[".listFields"][] = "Status";
$tdatapayrollamt33[".listFields"][] = "Employer";
$tdatapayrollamt33[".listFields"][] = "Division";
$tdatapayrollamt33[".listFields"][] = "WageType";
$tdatapayrollamt33[".listFields"][] = "BasicMonthly";
$tdatapayrollamt33[".listFields"][] = "BasicDaily";
$tdatapayrollamt33[".listFields"][] = "DWork";
$tdatapayrollamt33[".listFields"][] = "Absent";
$tdatapayrollamt33[".listFields"][] = "LWOPdays";
$tdatapayrollamt33[".listFields"][] = "LWOP";
$tdatapayrollamt33[".listFields"][] = "RegPay";
$tdatapayrollamt33[".listFields"][] = "LateMins";
$tdatapayrollamt33[".listFields"][] = "Late";
$tdatapayrollamt33[".listFields"][] = "UndertimeMins";
$tdatapayrollamt33[".listFields"][] = "UnderTime";
$tdatapayrollamt33[".listFields"][] = "RHolidayHrs";
$tdatapayrollamt33[".listFields"][] = "RHoliday";
$tdatapayrollamt33[".listFields"][] = "SHolidayHrs";
$tdatapayrollamt33[".listFields"][] = "SHoliday";
$tdatapayrollamt33[".listFields"][] = "CHolidayHrs";
$tdatapayrollamt33[".listFields"][] = "CHoliday";
$tdatapayrollamt33[".listFields"][] = "RegOTHrs";
$tdatapayrollamt33[".listFields"][] = "RegOT";
$tdatapayrollamt33[".listFields"][] = "RHOTHrs";
$tdatapayrollamt33[".listFields"][] = "RHOT";
$tdatapayrollamt33[".listFields"][] = "SHOTHRs";
$tdatapayrollamt33[".listFields"][] = "SHOT";
$tdatapayrollamt33[".listFields"][] = "CHOTHrs";
$tdatapayrollamt33[".listFields"][] = "CHOT";
$tdatapayrollamt33[".listFields"][] = "RDOTHrs";
$tdatapayrollamt33[".listFields"][] = "RDOT";
$tdatapayrollamt33[".listFields"][] = "OT";
$tdatapayrollamt33[".listFields"][] = "RDHrs";
$tdatapayrollamt33[".listFields"][] = "RD";
$tdatapayrollamt33[".listFields"][] = "RegNDHrs";
$tdatapayrollamt33[".listFields"][] = "ND";
$tdatapayrollamt33[".listFields"][] = "RHNDHrs";
$tdatapayrollamt33[".listFields"][] = "RHND";
$tdatapayrollamt33[".listFields"][] = "SHNDHrs";
$tdatapayrollamt33[".listFields"][] = "SHND";
$tdatapayrollamt33[".listFields"][] = "CHNDHrs";
$tdatapayrollamt33[".listFields"][] = "CHND";
$tdatapayrollamt33[".listFields"][] = "RDNDHrs";
$tdatapayrollamt33[".listFields"][] = "RDND";
$tdatapayrollamt33[".listFields"][] = "TND";
$tdatapayrollamt33[".listFields"][] = "VLDays";
$tdatapayrollamt33[".listFields"][] = "VL";
$tdatapayrollamt33[".listFields"][] = "SLDays";
$tdatapayrollamt33[".listFields"][] = "SL";
$tdatapayrollamt33[".listFields"][] = "ELDays";
$tdatapayrollamt33[".listFields"][] = "EL";
$tdatapayrollamt33[".listFields"][] = "PLDays";
$tdatapayrollamt33[".listFields"][] = "PL";
$tdatapayrollamt33[".listFields"][] = "TrO";
$tdatapayrollamt33[".listFields"][] = "VLBalance";
$tdatapayrollamt33[".listFields"][] = "SLBalance";
$tdatapayrollamt33[".listFields"][] = "ELBalance";
$tdatapayrollamt33[".listFields"][] = "PLBalance";
$tdatapayrollamt33[".listFields"][] = "TAdj";
$tdatapayrollamt33[".listFields"][] = "TAdjt";
$tdatapayrollamt33[".listFields"][] = "Ttax";
$tdatapayrollamt33[".listFields"][] = "SSS";
$tdatapayrollamt33[".listFields"][] = "PagIbig";
$tdatapayrollamt33[".listFields"][] = "PHIC";
$tdatapayrollamt33[".listFields"][] = "TDeductions";
$tdatapayrollamt33[".listFields"][] = "Taxable";
$tdatapayrollamt33[".listFields"][] = "GrossPay";
$tdatapayrollamt33[".listFields"][] = "NetPay";

$tdatapayrollamt33[".hideMobileList"] = array();


$tdatapayrollamt33[".viewFields"] = array();

$tdatapayrollamt33[".addFields"] = array();

$tdatapayrollamt33[".masterListFields"] = array();
$tdatapayrollamt33[".masterListFields"][] = "OT";
$tdatapayrollamt33[".masterListFields"][] = "TDeductions";
$tdatapayrollamt33[".masterListFields"][] = "PtabID";
$tdatapayrollamt33[".masterListFields"][] = "FromDate";
$tdatapayrollamt33[".masterListFields"][] = "ToDate";
$tdatapayrollamt33[".masterListFields"][] = "EmployeeID";
$tdatapayrollamt33[".masterListFields"][] = "UserName";
$tdatapayrollamt33[".masterListFields"][] = "Status";
$tdatapayrollamt33[".masterListFields"][] = "Employer";
$tdatapayrollamt33[".masterListFields"][] = "Division";
$tdatapayrollamt33[".masterListFields"][] = "WageType";
$tdatapayrollamt33[".masterListFields"][] = "BasicMonthly";
$tdatapayrollamt33[".masterListFields"][] = "BasicDaily";
$tdatapayrollamt33[".masterListFields"][] = "DWork";
$tdatapayrollamt33[".masterListFields"][] = "Absent";
$tdatapayrollamt33[".masterListFields"][] = "RegPay";
$tdatapayrollamt33[".masterListFields"][] = "LateMins";
$tdatapayrollamt33[".masterListFields"][] = "Late";
$tdatapayrollamt33[".masterListFields"][] = "UndertimeMins";
$tdatapayrollamt33[".masterListFields"][] = "UnderTime";
$tdatapayrollamt33[".masterListFields"][] = "RHoliday";
$tdatapayrollamt33[".masterListFields"][] = "SHoliday";
$tdatapayrollamt33[".masterListFields"][] = "CHoliday";
$tdatapayrollamt33[".masterListFields"][] = "RegOT";
$tdatapayrollamt33[".masterListFields"][] = "RHOT";
$tdatapayrollamt33[".masterListFields"][] = "SHOT";
$tdatapayrollamt33[".masterListFields"][] = "CHOT";
$tdatapayrollamt33[".masterListFields"][] = "RDOT";
$tdatapayrollamt33[".masterListFields"][] = "RD";
$tdatapayrollamt33[".masterListFields"][] = "ND";
$tdatapayrollamt33[".masterListFields"][] = "RHND";
$tdatapayrollamt33[".masterListFields"][] = "SHND";
$tdatapayrollamt33[".masterListFields"][] = "CHND";
$tdatapayrollamt33[".masterListFields"][] = "RDND";
$tdatapayrollamt33[".masterListFields"][] = "TND";
$tdatapayrollamt33[".masterListFields"][] = "VL";
$tdatapayrollamt33[".masterListFields"][] = "SL";
$tdatapayrollamt33[".masterListFields"][] = "EL";
$tdatapayrollamt33[".masterListFields"][] = "PL";
$tdatapayrollamt33[".masterListFields"][] = "TrO";
$tdatapayrollamt33[".masterListFields"][] = "RHolidayHrs";
$tdatapayrollamt33[".masterListFields"][] = "SHolidayHrs";
$tdatapayrollamt33[".masterListFields"][] = "CHolidayHrs";
$tdatapayrollamt33[".masterListFields"][] = "RegOTHrs";
$tdatapayrollamt33[".masterListFields"][] = "RHOTHrs";
$tdatapayrollamt33[".masterListFields"][] = "SHOTHRs";
$tdatapayrollamt33[".masterListFields"][] = "CHOTHrs";
$tdatapayrollamt33[".masterListFields"][] = "RDOTHrs";
$tdatapayrollamt33[".masterListFields"][] = "RDHrs";
$tdatapayrollamt33[".masterListFields"][] = "RegNDHrs";
$tdatapayrollamt33[".masterListFields"][] = "RHNDHrs";
$tdatapayrollamt33[".masterListFields"][] = "SHNDHrs";
$tdatapayrollamt33[".masterListFields"][] = "CHNDHrs";
$tdatapayrollamt33[".masterListFields"][] = "RDNDHrs";
$tdatapayrollamt33[".masterListFields"][] = "VLBalance";
$tdatapayrollamt33[".masterListFields"][] = "SLBalance";
$tdatapayrollamt33[".masterListFields"][] = "ELBalance";
$tdatapayrollamt33[".masterListFields"][] = "PLBalance";
$tdatapayrollamt33[".masterListFields"][] = "PayDate";
$tdatapayrollamt33[".masterListFields"][] = "LWOP";
$tdatapayrollamt33[".masterListFields"][] = "LWOPdays";
$tdatapayrollamt33[".masterListFields"][] = "TAdj";
$tdatapayrollamt33[".masterListFields"][] = "TAdjt";
$tdatapayrollamt33[".masterListFields"][] = "Ttax";
$tdatapayrollamt33[".masterListFields"][] = "SSS";
$tdatapayrollamt33[".masterListFields"][] = "PagIbig";
$tdatapayrollamt33[".masterListFields"][] = "PHIC";
$tdatapayrollamt33[".masterListFields"][] = "Taxable";
$tdatapayrollamt33[".masterListFields"][] = "GrossPay";
$tdatapayrollamt33[".masterListFields"][] = "NetPay";
$tdatapayrollamt33[".masterListFields"][] = "VLDays";
$tdatapayrollamt33[".masterListFields"][] = "ELDays";
$tdatapayrollamt33[".masterListFields"][] = "SLDays";
$tdatapayrollamt33[".masterListFields"][] = "PLDays";

$tdatapayrollamt33[".inlineAddFields"] = array();

$tdatapayrollamt33[".editFields"] = array();

$tdatapayrollamt33[".inlineEditFields"] = array();

$tdatapayrollamt33[".updateSelectedFields"] = array();


$tdatapayrollamt33[".exportFields"] = array();
$tdatapayrollamt33[".exportFields"][] = "OT";
$tdatapayrollamt33[".exportFields"][] = "TDeductions";
$tdatapayrollamt33[".exportFields"][] = "PtabID";
$tdatapayrollamt33[".exportFields"][] = "FromDate";
$tdatapayrollamt33[".exportFields"][] = "ToDate";
$tdatapayrollamt33[".exportFields"][] = "EmployeeID";
$tdatapayrollamt33[".exportFields"][] = "UserName";
$tdatapayrollamt33[".exportFields"][] = "Status";
$tdatapayrollamt33[".exportFields"][] = "Employer";
$tdatapayrollamt33[".exportFields"][] = "Division";
$tdatapayrollamt33[".exportFields"][] = "WageType";
$tdatapayrollamt33[".exportFields"][] = "BasicMonthly";
$tdatapayrollamt33[".exportFields"][] = "BasicDaily";
$tdatapayrollamt33[".exportFields"][] = "DWork";
$tdatapayrollamt33[".exportFields"][] = "Absent";
$tdatapayrollamt33[".exportFields"][] = "RegPay";
$tdatapayrollamt33[".exportFields"][] = "LateMins";
$tdatapayrollamt33[".exportFields"][] = "Late";
$tdatapayrollamt33[".exportFields"][] = "UndertimeMins";
$tdatapayrollamt33[".exportFields"][] = "UnderTime";
$tdatapayrollamt33[".exportFields"][] = "RHoliday";
$tdatapayrollamt33[".exportFields"][] = "SHoliday";
$tdatapayrollamt33[".exportFields"][] = "CHoliday";
$tdatapayrollamt33[".exportFields"][] = "RegOT";
$tdatapayrollamt33[".exportFields"][] = "RHOT";
$tdatapayrollamt33[".exportFields"][] = "SHOT";
$tdatapayrollamt33[".exportFields"][] = "CHOT";
$tdatapayrollamt33[".exportFields"][] = "RDOT";
$tdatapayrollamt33[".exportFields"][] = "RD";
$tdatapayrollamt33[".exportFields"][] = "ND";
$tdatapayrollamt33[".exportFields"][] = "RHND";
$tdatapayrollamt33[".exportFields"][] = "SHND";
$tdatapayrollamt33[".exportFields"][] = "CHND";
$tdatapayrollamt33[".exportFields"][] = "RDND";
$tdatapayrollamt33[".exportFields"][] = "TND";
$tdatapayrollamt33[".exportFields"][] = "VL";
$tdatapayrollamt33[".exportFields"][] = "SL";
$tdatapayrollamt33[".exportFields"][] = "EL";
$tdatapayrollamt33[".exportFields"][] = "PL";
$tdatapayrollamt33[".exportFields"][] = "TrO";
$tdatapayrollamt33[".exportFields"][] = "RHolidayHrs";
$tdatapayrollamt33[".exportFields"][] = "SHolidayHrs";
$tdatapayrollamt33[".exportFields"][] = "CHolidayHrs";
$tdatapayrollamt33[".exportFields"][] = "RegOTHrs";
$tdatapayrollamt33[".exportFields"][] = "RHOTHrs";
$tdatapayrollamt33[".exportFields"][] = "SHOTHRs";
$tdatapayrollamt33[".exportFields"][] = "CHOTHrs";
$tdatapayrollamt33[".exportFields"][] = "RDOTHrs";
$tdatapayrollamt33[".exportFields"][] = "RDHrs";
$tdatapayrollamt33[".exportFields"][] = "RegNDHrs";
$tdatapayrollamt33[".exportFields"][] = "RHNDHrs";
$tdatapayrollamt33[".exportFields"][] = "SHNDHrs";
$tdatapayrollamt33[".exportFields"][] = "CHNDHrs";
$tdatapayrollamt33[".exportFields"][] = "RDNDHrs";
$tdatapayrollamt33[".exportFields"][] = "VLBalance";
$tdatapayrollamt33[".exportFields"][] = "SLBalance";
$tdatapayrollamt33[".exportFields"][] = "ELBalance";
$tdatapayrollamt33[".exportFields"][] = "PLBalance";
$tdatapayrollamt33[".exportFields"][] = "PayDate";
$tdatapayrollamt33[".exportFields"][] = "LWOP";
$tdatapayrollamt33[".exportFields"][] = "LWOPdays";
$tdatapayrollamt33[".exportFields"][] = "TAdj";
$tdatapayrollamt33[".exportFields"][] = "TAdjt";
$tdatapayrollamt33[".exportFields"][] = "Ttax";
$tdatapayrollamt33[".exportFields"][] = "SSS";
$tdatapayrollamt33[".exportFields"][] = "PagIbig";
$tdatapayrollamt33[".exportFields"][] = "PHIC";
$tdatapayrollamt33[".exportFields"][] = "Taxable";
$tdatapayrollamt33[".exportFields"][] = "GrossPay";
$tdatapayrollamt33[".exportFields"][] = "NetPay";
$tdatapayrollamt33[".exportFields"][] = "VLDays";
$tdatapayrollamt33[".exportFields"][] = "ELDays";
$tdatapayrollamt33[".exportFields"][] = "SLDays";
$tdatapayrollamt33[".exportFields"][] = "PLDays";

$tdatapayrollamt33[".importFields"] = array();

$tdatapayrollamt33[".printFields"] = array();
$tdatapayrollamt33[".printFields"][] = "OT";
$tdatapayrollamt33[".printFields"][] = "TDeductions";
$tdatapayrollamt33[".printFields"][] = "PtabID";
$tdatapayrollamt33[".printFields"][] = "FromDate";
$tdatapayrollamt33[".printFields"][] = "ToDate";
$tdatapayrollamt33[".printFields"][] = "EmployeeID";
$tdatapayrollamt33[".printFields"][] = "UserName";
$tdatapayrollamt33[".printFields"][] = "Status";
$tdatapayrollamt33[".printFields"][] = "Employer";
$tdatapayrollamt33[".printFields"][] = "Division";
$tdatapayrollamt33[".printFields"][] = "WageType";
$tdatapayrollamt33[".printFields"][] = "BasicMonthly";
$tdatapayrollamt33[".printFields"][] = "BasicDaily";
$tdatapayrollamt33[".printFields"][] = "DWork";
$tdatapayrollamt33[".printFields"][] = "Absent";
$tdatapayrollamt33[".printFields"][] = "RegPay";
$tdatapayrollamt33[".printFields"][] = "LateMins";
$tdatapayrollamt33[".printFields"][] = "Late";
$tdatapayrollamt33[".printFields"][] = "UndertimeMins";
$tdatapayrollamt33[".printFields"][] = "UnderTime";
$tdatapayrollamt33[".printFields"][] = "RHoliday";
$tdatapayrollamt33[".printFields"][] = "SHoliday";
$tdatapayrollamt33[".printFields"][] = "CHoliday";
$tdatapayrollamt33[".printFields"][] = "RegOT";
$tdatapayrollamt33[".printFields"][] = "RHOT";
$tdatapayrollamt33[".printFields"][] = "SHOT";
$tdatapayrollamt33[".printFields"][] = "CHOT";
$tdatapayrollamt33[".printFields"][] = "RDOT";
$tdatapayrollamt33[".printFields"][] = "RD";
$tdatapayrollamt33[".printFields"][] = "ND";
$tdatapayrollamt33[".printFields"][] = "RHND";
$tdatapayrollamt33[".printFields"][] = "SHND";
$tdatapayrollamt33[".printFields"][] = "CHND";
$tdatapayrollamt33[".printFields"][] = "RDND";
$tdatapayrollamt33[".printFields"][] = "TND";
$tdatapayrollamt33[".printFields"][] = "VL";
$tdatapayrollamt33[".printFields"][] = "SL";
$tdatapayrollamt33[".printFields"][] = "EL";
$tdatapayrollamt33[".printFields"][] = "PL";
$tdatapayrollamt33[".printFields"][] = "TrO";
$tdatapayrollamt33[".printFields"][] = "RHolidayHrs";
$tdatapayrollamt33[".printFields"][] = "SHolidayHrs";
$tdatapayrollamt33[".printFields"][] = "CHolidayHrs";
$tdatapayrollamt33[".printFields"][] = "RegOTHrs";
$tdatapayrollamt33[".printFields"][] = "RHOTHrs";
$tdatapayrollamt33[".printFields"][] = "SHOTHRs";
$tdatapayrollamt33[".printFields"][] = "CHOTHrs";
$tdatapayrollamt33[".printFields"][] = "RDOTHrs";
$tdatapayrollamt33[".printFields"][] = "RDHrs";
$tdatapayrollamt33[".printFields"][] = "RegNDHrs";
$tdatapayrollamt33[".printFields"][] = "RHNDHrs";
$tdatapayrollamt33[".printFields"][] = "SHNDHrs";
$tdatapayrollamt33[".printFields"][] = "CHNDHrs";
$tdatapayrollamt33[".printFields"][] = "RDNDHrs";
$tdatapayrollamt33[".printFields"][] = "VLBalance";
$tdatapayrollamt33[".printFields"][] = "SLBalance";
$tdatapayrollamt33[".printFields"][] = "ELBalance";
$tdatapayrollamt33[".printFields"][] = "PLBalance";
$tdatapayrollamt33[".printFields"][] = "PayDate";
$tdatapayrollamt33[".printFields"][] = "LWOP";
$tdatapayrollamt33[".printFields"][] = "LWOPdays";
$tdatapayrollamt33[".printFields"][] = "TAdj";
$tdatapayrollamt33[".printFields"][] = "TAdjt";
$tdatapayrollamt33[".printFields"][] = "Ttax";
$tdatapayrollamt33[".printFields"][] = "SSS";
$tdatapayrollamt33[".printFields"][] = "PagIbig";
$tdatapayrollamt33[".printFields"][] = "PHIC";
$tdatapayrollamt33[".printFields"][] = "Taxable";
$tdatapayrollamt33[".printFields"][] = "GrossPay";
$tdatapayrollamt33[".printFields"][] = "NetPay";
$tdatapayrollamt33[".printFields"][] = "VLDays";
$tdatapayrollamt33[".printFields"][] = "ELDays";
$tdatapayrollamt33[".printFields"][] = "SLDays";
$tdatapayrollamt33[".printFields"][] = "PLDays";


//	PtabID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PtabID";
	$fdata["GoodName"] = "PtabID";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","PtabID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrollamt33["PtabID"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","EmployeeID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrollamt33["EmployeeID"] = $fdata;
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","UserName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["UserName"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","Status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["Status"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","Employer");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["Employer"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","Division");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["Division"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","FromDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["FromDate"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","ToDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["ToDate"] = $fdata;
//	BasicMonthly
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "BasicMonthly";
	$fdata["GoodName"] = "BasicMonthly";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","BasicMonthly");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["BasicMonthly"] = $fdata;
//	BasicDaily
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "BasicDaily";
	$fdata["GoodName"] = "BasicDaily";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","BasicDaily");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["BasicDaily"] = $fdata;
//	DWork
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DWork";
	$fdata["GoodName"] = "DWork";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","DWork");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["DWork"] = $fdata;
//	Absent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Absent";
	$fdata["GoodName"] = "Absent";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","Absent");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["Absent"] = $fdata;
//	RegPay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "RegPay";
	$fdata["GoodName"] = "RegPay";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RegPay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RegPay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegPay";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["RegPay"] = $fdata;
//	Late
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Late";
	$fdata["GoodName"] = "Late";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","Late");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Late";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Late";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["Late"] = $fdata;
//	UnderTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "UnderTime";
	$fdata["GoodName"] = "UnderTime";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","UnderTime");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "UnderTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UnderTime";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["UnderTime"] = $fdata;
//	RHoliday
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "RHoliday";
	$fdata["GoodName"] = "RHoliday";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RHoliday");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHoliday";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHoliday";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["RHoliday"] = $fdata;
//	SHoliday
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "SHoliday";
	$fdata["GoodName"] = "SHoliday";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","SHoliday");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHoliday";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHoliday";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["SHoliday"] = $fdata;
//	CHoliday
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "CHoliday";
	$fdata["GoodName"] = "CHoliday";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","CHoliday");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CHoliday";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHoliday";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["CHoliday"] = $fdata;
//	RegOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "RegOT";
	$fdata["GoodName"] = "RegOT";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RegOT");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RegOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["RegOT"] = $fdata;
//	RHOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "RHOT";
	$fdata["GoodName"] = "RHOT";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RHOT");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["RHOT"] = $fdata;
//	SHOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "SHOT";
	$fdata["GoodName"] = "SHOT";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","SHOT");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["SHOT"] = $fdata;
//	CHOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "CHOT";
	$fdata["GoodName"] = "CHOT";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","CHOT");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CHOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["CHOT"] = $fdata;
//	RDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "RDOT";
	$fdata["GoodName"] = "RDOT";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RDOT");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RDOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["RDOT"] = $fdata;
//	OT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "OT";
	$fdata["GoodName"] = "OT";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","OT");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "OT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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




	$tdatapayrollamt33["OT"] = $fdata;
//	RD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "RD";
	$fdata["GoodName"] = "RD";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RD");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RD";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["RD"] = $fdata;
//	ND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "ND";
	$fdata["GoodName"] = "ND";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","ND");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ND";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["ND"] = $fdata;
//	RHND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "RHND";
	$fdata["GoodName"] = "RHND";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RHND");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHND";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["RHND"] = $fdata;
//	SHND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "SHND";
	$fdata["GoodName"] = "SHND";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","SHND");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHND";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["SHND"] = $fdata;
//	CHND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "CHND";
	$fdata["GoodName"] = "CHND";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","CHND");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CHND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHND";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["CHND"] = $fdata;
//	RDND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "RDND";
	$fdata["GoodName"] = "RDND";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RDND");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RDND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RDND";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["RDND"] = $fdata;
//	VL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "VL";
	$fdata["GoodName"] = "VL";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","VL");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "VL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["VL"] = $fdata;
//	SL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "SL";
	$fdata["GoodName"] = "SL";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","SL");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["SL"] = $fdata;
//	EL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "EL";
	$fdata["GoodName"] = "EL";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","EL");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["EL"] = $fdata;
//	PL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "PL";
	$fdata["GoodName"] = "PL";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","PL");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["PL"] = $fdata;
//	TrO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "TrO";
	$fdata["GoodName"] = "TrO";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","TrO");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TrO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TrO";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["TrO"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","WageType");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["WageType"] = $fdata;
//	LateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "LateMins";
	$fdata["GoodName"] = "LateMins";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","LateMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["LateMins"] = $fdata;
//	UndertimeMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "UndertimeMins";
	$fdata["GoodName"] = "UndertimeMins";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","UndertimeMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["UndertimeMins"] = $fdata;
//	RHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "RHolidayHrs";
	$fdata["GoodName"] = "RHolidayHrs";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RHolidayHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["RHolidayHrs"] = $fdata;
//	SHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "SHolidayHrs";
	$fdata["GoodName"] = "SHolidayHrs";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","SHolidayHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["SHolidayHrs"] = $fdata;
//	CHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "CHolidayHrs";
	$fdata["GoodName"] = "CHolidayHrs";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","CHolidayHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["CHolidayHrs"] = $fdata;
//	RegOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "RegOTHrs";
	$fdata["GoodName"] = "RegOTHrs";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RegOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrollamt33["RegOTHrs"] = $fdata;
//	RHOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "RHOTHrs";
	$fdata["GoodName"] = "RHOTHrs";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RHOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["RHOTHrs"] = $fdata;
//	SHOTHRs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "SHOTHRs";
	$fdata["GoodName"] = "SHOTHRs";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","SHOTHRs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["SHOTHRs"] = $fdata;
//	CHOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "CHOTHrs";
	$fdata["GoodName"] = "CHOTHrs";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","CHOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["CHOTHrs"] = $fdata;
//	RDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "RDOTHrs";
	$fdata["GoodName"] = "RDOTHrs";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RDOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["RDOTHrs"] = $fdata;
//	RDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "RDHrs";
	$fdata["GoodName"] = "RDHrs";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["RDHrs"] = $fdata;
//	RegNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "RegNDHrs";
	$fdata["GoodName"] = "RegNDHrs";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RegNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["RegNDHrs"] = $fdata;
//	RHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "RHNDHrs";
	$fdata["GoodName"] = "RHNDHrs";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RHNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["RHNDHrs"] = $fdata;
//	SHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "SHNDHrs";
	$fdata["GoodName"] = "SHNDHrs";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","SHNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["SHNDHrs"] = $fdata;
//	CHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "CHNDHrs";
	$fdata["GoodName"] = "CHNDHrs";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","CHNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["CHNDHrs"] = $fdata;
//	RDNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "RDNDHrs";
	$fdata["GoodName"] = "RDNDHrs";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RDNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["RDNDHrs"] = $fdata;
//	VLBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "VLBalance";
	$fdata["GoodName"] = "VLBalance";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","VLBalance");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["VLBalance"] = $fdata;
//	SLBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "SLBalance";
	$fdata["GoodName"] = "SLBalance";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","SLBalance");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["SLBalance"] = $fdata;
//	ELBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "ELBalance";
	$fdata["GoodName"] = "ELBalance";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","ELBalance");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["ELBalance"] = $fdata;
//	PLBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "PLBalance";
	$fdata["GoodName"] = "PLBalance";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","PLBalance");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["PLBalance"] = $fdata;
//	PayDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "PayDate";
	$fdata["GoodName"] = "PayDate";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","PayDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PayDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PayDate";

	
	
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




	$tdatapayrollamt33["PayDate"] = $fdata;
//	LWOP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "LWOP";
	$fdata["GoodName"] = "LWOP";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","LWOP");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LWOP";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LWOP";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["LWOP"] = $fdata;
//	LWOPdays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "LWOPdays";
	$fdata["GoodName"] = "LWOPdays";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","LWOPdays");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LWOPdays";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LWOPdays";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["LWOPdays"] = $fdata;
//	TAdj
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "TAdj";
	$fdata["GoodName"] = "TAdj";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","TAdj");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TAdj";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAdj";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["TAdj"] = $fdata;
//	TAdjt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "TAdjt";
	$fdata["GoodName"] = "TAdjt";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","TAdjt");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TAdjt";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAdjt";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["TAdjt"] = $fdata;
//	Ttax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "Ttax";
	$fdata["GoodName"] = "Ttax";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","Ttax");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Ttax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ttax";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["Ttax"] = $fdata;
//	SSS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "SSS";
	$fdata["GoodName"] = "SSS";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","SSS");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SSS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SSS";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["SSS"] = $fdata;
//	PagIbig
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "PagIbig";
	$fdata["GoodName"] = "PagIbig";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","PagIbig");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PagIbig";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PagIbig";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["PagIbig"] = $fdata;
//	PHIC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "PHIC";
	$fdata["GoodName"] = "PHIC";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","PHIC");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PHIC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PHIC";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["PHIC"] = $fdata;
//	TDeductions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "TDeductions";
	$fdata["GoodName"] = "TDeductions";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","TDeductions");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TDeductions";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TDeductions";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["TDeductions"] = $fdata;
//	Taxable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "Taxable";
	$fdata["GoodName"] = "Taxable";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","Taxable");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrollamt33["Taxable"] = $fdata;
//	GrossPay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "GrossPay";
	$fdata["GoodName"] = "GrossPay";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","GrossPay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "GrossPay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GrossPay";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["GrossPay"] = $fdata;
//	NetPay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "NetPay";
	$fdata["GoodName"] = "NetPay";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","NetPay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NetPay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NetPay";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["NetPay"] = $fdata;
//	VLDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "VLDays";
	$fdata["GoodName"] = "VLDays";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","VLDays");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["VLDays"] = $fdata;
//	ELDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "ELDays";
	$fdata["GoodName"] = "ELDays";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","ELDays");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["ELDays"] = $fdata;
//	SLDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "SLDays";
	$fdata["GoodName"] = "SLDays";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","SLDays");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["SLDays"] = $fdata;
//	PLDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "PLDays";
	$fdata["GoodName"] = "PLDays";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","PLDays");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatapayrollamt33["PLDays"] = $fdata;
//	TND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "TND";
	$fdata["GoodName"] = "TND";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","TND");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TND";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatapayrollamt33["TND"] = $fdata;


$tables_data["payrollamt33"]=&$tdatapayrollamt33;
$field_labels["payrollamt33"] = &$fieldLabelspayrollamt33;
$fieldToolTips["payrollamt33"] = &$fieldToolTipspayrollamt33;
$placeHolders["payrollamt33"] = &$placeHolderspayrollamt33;
$page_titles["payrollamt33"] = &$pageTitlespayrollamt33;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["payrollamt33"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["payrollamt33"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_payrollamt33()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PtabID,  EmployeeID,  UserName,  Status,  Employer,  Division,  FromDate,  ToDate,  BasicMonthly,  BasicDaily,  DWork,  Absent,  RegPay,  Late,  UnderTime,  RHoliday,  SHoliday,  CHoliday,  RegOT,  RHOT,  SHOT,  CHOT,  RDOT,  OT,  RD,  ND,  RHND,  SHND,  CHND,  RDND,  VL,  SL,  EL,  PL,  TrO,  WageType,  LateMins,  UndertimeMins,  RHolidayHrs,  SHolidayHrs,  CHolidayHrs,  RegOTHrs,  RHOTHrs,  SHOTHRs,  CHOTHrs,  RDOTHrs,  RDHrs,  RegNDHrs,  RHNDHrs,  SHNDHrs,  CHNDHrs,  RDNDHrs,  VLBalance,  SLBalance,  ELBalance,  PLBalance,  PayDate,  LWOP,  LWOPdays,  TAdj,  TAdjt,  Ttax,  SSS,  PagIbig,  PHIC,  TDeductions,  Taxable,  GrossPay,  NetPay,  VLDays,  ELDays,  SLDays,  PLDays,  TND";
$proto0["m_strFrom"] = "FROM payrollamt33";
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
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto6["m_sql"] = "PtabID";
$proto6["m_srcTableName"] = "payrollamt33";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto8["m_sql"] = "EmployeeID";
$proto8["m_srcTableName"] = "payrollamt33";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto10["m_sql"] = "UserName";
$proto10["m_srcTableName"] = "payrollamt33";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto12["m_sql"] = "Status";
$proto12["m_srcTableName"] = "payrollamt33";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto14["m_sql"] = "Employer";
$proto14["m_srcTableName"] = "payrollamt33";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto16["m_sql"] = "Division";
$proto16["m_srcTableName"] = "payrollamt33";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto18["m_sql"] = "FromDate";
$proto18["m_srcTableName"] = "payrollamt33";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto20["m_sql"] = "ToDate";
$proto20["m_srcTableName"] = "payrollamt33";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "BasicMonthly",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto22["m_sql"] = "BasicMonthly";
$proto22["m_srcTableName"] = "payrollamt33";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "BasicDaily",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto24["m_sql"] = "BasicDaily";
$proto24["m_srcTableName"] = "payrollamt33";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DWork",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto26["m_sql"] = "DWork";
$proto26["m_srcTableName"] = "payrollamt33";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Absent",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto28["m_sql"] = "Absent";
$proto28["m_srcTableName"] = "payrollamt33";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "RegPay",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto30["m_sql"] = "RegPay";
$proto30["m_srcTableName"] = "payrollamt33";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Late",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto32["m_sql"] = "Late";
$proto32["m_srcTableName"] = "payrollamt33";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "UnderTime",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto34["m_sql"] = "UnderTime";
$proto34["m_srcTableName"] = "payrollamt33";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "RHoliday",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto36["m_sql"] = "RHoliday";
$proto36["m_srcTableName"] = "payrollamt33";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "SHoliday",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto38["m_sql"] = "SHoliday";
$proto38["m_srcTableName"] = "payrollamt33";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "CHoliday",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto40["m_sql"] = "CHoliday";
$proto40["m_srcTableName"] = "payrollamt33";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "RegOT",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto42["m_sql"] = "RegOT";
$proto42["m_srcTableName"] = "payrollamt33";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "RHOT",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto44["m_sql"] = "RHOT";
$proto44["m_srcTableName"] = "payrollamt33";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOT",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto46["m_sql"] = "SHOT";
$proto46["m_srcTableName"] = "payrollamt33";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "CHOT",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto48["m_sql"] = "CHOT";
$proto48["m_srcTableName"] = "payrollamt33";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "RDOT",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto50["m_sql"] = "RDOT";
$proto50["m_srcTableName"] = "payrollamt33";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "OT",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto52["m_sql"] = "OT";
$proto52["m_srcTableName"] = "payrollamt33";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "RD",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto54["m_sql"] = "RD";
$proto54["m_srcTableName"] = "payrollamt33";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "ND",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto56["m_sql"] = "ND";
$proto56["m_srcTableName"] = "payrollamt33";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "RHND",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto58["m_sql"] = "RHND";
$proto58["m_srcTableName"] = "payrollamt33";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "SHND",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto60["m_sql"] = "SHND";
$proto60["m_srcTableName"] = "payrollamt33";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "CHND",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto62["m_sql"] = "CHND";
$proto62["m_srcTableName"] = "payrollamt33";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "RDND",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto64["m_sql"] = "RDND";
$proto64["m_srcTableName"] = "payrollamt33";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "VL",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto66["m_sql"] = "VL";
$proto66["m_srcTableName"] = "payrollamt33";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "SL",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto68["m_sql"] = "SL";
$proto68["m_srcTableName"] = "payrollamt33";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "EL",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto70["m_sql"] = "EL";
$proto70["m_srcTableName"] = "payrollamt33";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "PL",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto72["m_sql"] = "PL";
$proto72["m_srcTableName"] = "payrollamt33";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "TrO",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto74["m_sql"] = "TrO";
$proto74["m_srcTableName"] = "payrollamt33";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "WageType",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto76["m_sql"] = "WageType";
$proto76["m_srcTableName"] = "payrollamt33";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "LateMins",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto78["m_sql"] = "LateMins";
$proto78["m_srcTableName"] = "payrollamt33";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "UndertimeMins",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto80["m_sql"] = "UndertimeMins";
$proto80["m_srcTableName"] = "payrollamt33";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "RHolidayHrs",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto82["m_sql"] = "RHolidayHrs";
$proto82["m_srcTableName"] = "payrollamt33";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "SHolidayHrs",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto84["m_sql"] = "SHolidayHrs";
$proto84["m_srcTableName"] = "payrollamt33";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "CHolidayHrs",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto86["m_sql"] = "CHolidayHrs";
$proto86["m_srcTableName"] = "payrollamt33";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "RegOTHrs",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto88["m_sql"] = "RegOTHrs";
$proto88["m_srcTableName"] = "payrollamt33";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "RHOTHrs",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto90["m_sql"] = "RHOTHrs";
$proto90["m_srcTableName"] = "payrollamt33";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOTHRs",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto92["m_sql"] = "SHOTHRs";
$proto92["m_srcTableName"] = "payrollamt33";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "CHOTHrs",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto94["m_sql"] = "CHOTHrs";
$proto94["m_srcTableName"] = "payrollamt33";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "RDOTHrs",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto96["m_sql"] = "RDOTHrs";
$proto96["m_srcTableName"] = "payrollamt33";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "RDHrs",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto98["m_sql"] = "RDHrs";
$proto98["m_srcTableName"] = "payrollamt33";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "RegNDHrs",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto100["m_sql"] = "RegNDHrs";
$proto100["m_srcTableName"] = "payrollamt33";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "RHNDHrs",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto102["m_sql"] = "RHNDHrs";
$proto102["m_srcTableName"] = "payrollamt33";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "SHNDHrs",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto104["m_sql"] = "SHNDHrs";
$proto104["m_srcTableName"] = "payrollamt33";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "CHNDHrs",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto106["m_sql"] = "CHNDHrs";
$proto106["m_srcTableName"] = "payrollamt33";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "RDNDHrs",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto108["m_sql"] = "RDNDHrs";
$proto108["m_srcTableName"] = "payrollamt33";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "VLBalance",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto110["m_sql"] = "VLBalance";
$proto110["m_srcTableName"] = "payrollamt33";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "SLBalance",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto112["m_sql"] = "SLBalance";
$proto112["m_srcTableName"] = "payrollamt33";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "ELBalance",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto114["m_sql"] = "ELBalance";
$proto114["m_srcTableName"] = "payrollamt33";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "PLBalance",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto116["m_sql"] = "PLBalance";
$proto116["m_srcTableName"] = "payrollamt33";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "PayDate",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto118["m_sql"] = "PayDate";
$proto118["m_srcTableName"] = "payrollamt33";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "LWOP",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto120["m_sql"] = "LWOP";
$proto120["m_srcTableName"] = "payrollamt33";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "LWOPdays",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto122["m_sql"] = "LWOPdays";
$proto122["m_srcTableName"] = "payrollamt33";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "TAdj",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto124["m_sql"] = "TAdj";
$proto124["m_srcTableName"] = "payrollamt33";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "TAdjt",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto126["m_sql"] = "TAdjt";
$proto126["m_srcTableName"] = "payrollamt33";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "Ttax",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto128["m_sql"] = "Ttax";
$proto128["m_srcTableName"] = "payrollamt33";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "SSS",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto130["m_sql"] = "SSS";
$proto130["m_srcTableName"] = "payrollamt33";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbig",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto132["m_sql"] = "PagIbig";
$proto132["m_srcTableName"] = "payrollamt33";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "PHIC",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto134["m_sql"] = "PHIC";
$proto134["m_srcTableName"] = "payrollamt33";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "TDeductions",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto136["m_sql"] = "TDeductions";
$proto136["m_srcTableName"] = "payrollamt33";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "Taxable",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto138["m_sql"] = "Taxable";
$proto138["m_srcTableName"] = "payrollamt33";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "GrossPay",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto140["m_sql"] = "GrossPay";
$proto140["m_srcTableName"] = "payrollamt33";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "NetPay",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto142["m_sql"] = "NetPay";
$proto142["m_srcTableName"] = "payrollamt33";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "VLDays",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto144["m_sql"] = "VLDays";
$proto144["m_srcTableName"] = "payrollamt33";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "ELDays",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto146["m_sql"] = "ELDays";
$proto146["m_srcTableName"] = "payrollamt33";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "SLDays",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto148["m_sql"] = "SLDays";
$proto148["m_srcTableName"] = "payrollamt33";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "PLDays",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto150["m_sql"] = "PLDays";
$proto150["m_srcTableName"] = "payrollamt33";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "TND",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto152["m_sql"] = "TND";
$proto152["m_srcTableName"] = "payrollamt33";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto154=array();
$proto154["m_link"] = "SQLL_MAIN";
			$proto155=array();
$proto155["m_strName"] = "payrollamt33";
$proto155["m_srcTableName"] = "payrollamt33";
$proto155["m_columns"] = array();
$proto155["m_columns"][] = "PtabID";
$proto155["m_columns"][] = "EmployeeID";
$proto155["m_columns"][] = "UserName";
$proto155["m_columns"][] = "Status";
$proto155["m_columns"][] = "Division";
$proto155["m_columns"][] = "FromDate";
$proto155["m_columns"][] = "ToDate";
$proto155["m_columns"][] = "MontlyPaymentPeriods";
$proto155["m_columns"][] = "BasicMonthly";
$proto155["m_columns"][] = "SemiMonthly";
$proto155["m_columns"][] = "BasicDaily";
$proto155["m_columns"][] = "DWork";
$proto155["m_columns"][] = "Absent";
$proto155["m_columns"][] = "MoDailyRate";
$proto155["m_columns"][] = "RegPay";
$proto155["m_columns"][] = "Late";
$proto155["m_columns"][] = "UnderTime";
$proto155["m_columns"][] = "RHoliday";
$proto155["m_columns"][] = "SHoliday";
$proto155["m_columns"][] = "CHoliday";
$proto155["m_columns"][] = "RegOT";
$proto155["m_columns"][] = "RHOT";
$proto155["m_columns"][] = "SHOT";
$proto155["m_columns"][] = "CHOT";
$proto155["m_columns"][] = "RDOT";
$proto155["m_columns"][] = "OTHrs";
$proto155["m_columns"][] = "OT";
$proto155["m_columns"][] = "RD";
$proto155["m_columns"][] = "ND";
$proto155["m_columns"][] = "RHND";
$proto155["m_columns"][] = "SHND";
$proto155["m_columns"][] = "CHND";
$proto155["m_columns"][] = "RDND";
$proto155["m_columns"][] = "VL";
$proto155["m_columns"][] = "SL";
$proto155["m_columns"][] = "EL";
$proto155["m_columns"][] = "PL";
$proto155["m_columns"][] = "TrO";
$proto155["m_columns"][] = "WageType";
$proto155["m_columns"][] = "EmployeeType";
$proto155["m_columns"][] = "EmployeeStatus";
$proto155["m_columns"][] = "FDivision";
$proto155["m_columns"][] = "LateMins";
$proto155["m_columns"][] = "UndertimeMins";
$proto155["m_columns"][] = "RHolidayHrs";
$proto155["m_columns"][] = "SHolidayHrs";
$proto155["m_columns"][] = "CHolidayHrs";
$proto155["m_columns"][] = "RegOTHrs";
$proto155["m_columns"][] = "RHOTHrs";
$proto155["m_columns"][] = "SHOTHRs";
$proto155["m_columns"][] = "CHOTHrs";
$proto155["m_columns"][] = "RDOTHrs";
$proto155["m_columns"][] = "NDHrs";
$proto155["m_columns"][] = "RDHrs";
$proto155["m_columns"][] = "RegNDHrs";
$proto155["m_columns"][] = "RHNDHrs";
$proto155["m_columns"][] = "SHNDHrs";
$proto155["m_columns"][] = "CHNDHrs";
$proto155["m_columns"][] = "RDNDHrs";
$proto155["m_columns"][] = "VLBalance";
$proto155["m_columns"][] = "SLBalance";
$proto155["m_columns"][] = "ELBalance";
$proto155["m_columns"][] = "PLBalance";
$proto155["m_columns"][] = "PayDate";
$proto155["m_columns"][] = "LWOP";
$proto155["m_columns"][] = "LWOPdays";
$proto155["m_columns"][] = "TAdj";
$proto155["m_columns"][] = "TAdjt";
$proto155["m_columns"][] = "TotAdj";
$proto155["m_columns"][] = "TDeduct";
$proto155["m_columns"][] = "Ttax";
$proto155["m_columns"][] = "SSS";
$proto155["m_columns"][] = "PagIbig";
$proto155["m_columns"][] = "PHIC";
$proto155["m_columns"][] = "TDeductions";
$proto155["m_columns"][] = "Taxable";
$proto155["m_columns"][] = "AllowancePerDay";
$proto155["m_columns"][] = "Allowance";
$proto155["m_columns"][] = "AllowDays";
$proto155["m_columns"][] = "AgencySharePerDay";
$proto155["m_columns"][] = "AgentShare";
$proto155["m_columns"][] = "GrossPay";
$proto155["m_columns"][] = "NetPay";
$proto155["m_columns"][] = "NDMealAllowance";
$proto155["m_columns"][] = "VLDays";
$proto155["m_columns"][] = "ELDays";
$proto155["m_columns"][] = "SLDays";
$proto155["m_columns"][] = "PLDays";
$proto155["m_columns"][] = "TNDHrs";
$proto155["m_columns"][] = "TND";
$proto155["m_columns"][] = "EmployerName";
$proto155["m_columns"][] = "PayrollID";
$proto155["m_columns"][] = "Employer";
$obj = new SQLTable($proto155);

$proto154["m_table"] = $obj;
$proto154["m_sql"] = "payrollamt33";
$proto154["m_alias"] = "";
$proto154["m_srcTableName"] = "payrollamt33";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="payrollamt33";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_payrollamt33 = createSqlQuery_payrollamt33();


	
		;

																																																																										

$tdatapayrollamt33[".sqlquery"] = $queryData_payrollamt33;

$tableEvents["payrollamt33"] = new eventsBase;
$tdatapayrollamt33[".hasEvents"] = false;

?>