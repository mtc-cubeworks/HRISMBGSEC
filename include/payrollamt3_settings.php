<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapayrollamt3 = array();
	$tdatapayrollamt3[".truncateText"] = true;
	$tdatapayrollamt3[".NumberOfChars"] = 80;
	$tdatapayrollamt3[".ShortName"] = "payrollamt3";
	$tdatapayrollamt3[".OwnerID"] = "";
	$tdatapayrollamt3[".OriginalTable"] = "payrollamt3";

//	field labels
$fieldLabelspayrollamt3 = array();
$fieldToolTipspayrollamt3 = array();
$pageTitlespayrollamt3 = array();
$placeHolderspayrollamt3 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspayrollamt3["English"] = array();
	$fieldToolTipspayrollamt3["English"] = array();
	$placeHolderspayrollamt3["English"] = array();
	$pageTitlespayrollamt3["English"] = array();
	$fieldLabelspayrollamt3["English"]["PtabID"] = "Ptab ID";
	$fieldToolTipspayrollamt3["English"]["PtabID"] = "";
	$placeHolderspayrollamt3["English"]["PtabID"] = "";
	$fieldLabelspayrollamt3["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipspayrollamt3["English"]["EmployeeID"] = "";
	$placeHolderspayrollamt3["English"]["EmployeeID"] = "";
	$fieldLabelspayrollamt3["English"]["UserName"] = "Employee";
	$fieldToolTipspayrollamt3["English"]["UserName"] = "";
	$placeHolderspayrollamt3["English"]["UserName"] = "";
	$fieldLabelspayrollamt3["English"]["Status"] = "Status";
	$fieldToolTipspayrollamt3["English"]["Status"] = "";
	$placeHolderspayrollamt3["English"]["Status"] = "";
	$fieldLabelspayrollamt3["English"]["Division"] = "Division";
	$fieldToolTipspayrollamt3["English"]["Division"] = "";
	$placeHolderspayrollamt3["English"]["Division"] = "";
	$fieldLabelspayrollamt3["English"]["FromDate"] = "From Date";
	$fieldToolTipspayrollamt3["English"]["FromDate"] = "";
	$placeHolderspayrollamt3["English"]["FromDate"] = "";
	$fieldLabelspayrollamt3["English"]["ToDate"] = "To Date";
	$fieldToolTipspayrollamt3["English"]["ToDate"] = "";
	$placeHolderspayrollamt3["English"]["ToDate"] = "";
	$fieldLabelspayrollamt3["English"]["BasicMonthly"] = "Basic Monthly";
	$fieldToolTipspayrollamt3["English"]["BasicMonthly"] = "";
	$placeHolderspayrollamt3["English"]["BasicMonthly"] = "";
	$fieldLabelspayrollamt3["English"]["SemiMonthly"] = "Semi Monthly";
	$fieldToolTipspayrollamt3["English"]["SemiMonthly"] = "";
	$placeHolderspayrollamt3["English"]["SemiMonthly"] = "";
	$fieldLabelspayrollamt3["English"]["BasicDaily"] = "Basic Daily";
	$fieldToolTipspayrollamt3["English"]["BasicDaily"] = "";
	$placeHolderspayrollamt3["English"]["BasicDaily"] = "";
	$fieldLabelspayrollamt3["English"]["DWork"] = "DWork";
	$fieldToolTipspayrollamt3["English"]["DWork"] = "";
	$placeHolderspayrollamt3["English"]["DWork"] = "";
	$fieldLabelspayrollamt3["English"]["Absent"] = "Absent";
	$fieldToolTipspayrollamt3["English"]["Absent"] = "";
	$placeHolderspayrollamt3["English"]["Absent"] = "";
	$fieldLabelspayrollamt3["English"]["RegPay"] = "Reg Pay";
	$fieldToolTipspayrollamt3["English"]["RegPay"] = "";
	$placeHolderspayrollamt3["English"]["RegPay"] = "";
	$fieldLabelspayrollamt3["English"]["Late"] = "Late";
	$fieldToolTipspayrollamt3["English"]["Late"] = "";
	$placeHolderspayrollamt3["English"]["Late"] = "";
	$fieldLabelspayrollamt3["English"]["UnderTime"] = "Under Time";
	$fieldToolTipspayrollamt3["English"]["UnderTime"] = "";
	$placeHolderspayrollamt3["English"]["UnderTime"] = "";
	$fieldLabelspayrollamt3["English"]["RHoliday"] = "RHoliday";
	$fieldToolTipspayrollamt3["English"]["RHoliday"] = "";
	$placeHolderspayrollamt3["English"]["RHoliday"] = "";
	$fieldLabelspayrollamt3["English"]["SHoliday"] = "SHoliday";
	$fieldToolTipspayrollamt3["English"]["SHoliday"] = "";
	$placeHolderspayrollamt3["English"]["SHoliday"] = "";
	$fieldLabelspayrollamt3["English"]["RegOT"] = "Reg OT";
	$fieldToolTipspayrollamt3["English"]["RegOT"] = "";
	$placeHolderspayrollamt3["English"]["RegOT"] = "";
	$fieldLabelspayrollamt3["English"]["RHOT"] = "RHOT";
	$fieldToolTipspayrollamt3["English"]["RHOT"] = "";
	$placeHolderspayrollamt3["English"]["RHOT"] = "";
	$fieldLabelspayrollamt3["English"]["SHOT"] = "SHOT";
	$fieldToolTipspayrollamt3["English"]["SHOT"] = "";
	$placeHolderspayrollamt3["English"]["SHOT"] = "";
	$fieldLabelspayrollamt3["English"]["RDOT"] = "RDOT";
	$fieldToolTipspayrollamt3["English"]["RDOT"] = "";
	$placeHolderspayrollamt3["English"]["RDOT"] = "";
	$fieldLabelspayrollamt3["English"]["RD"] = "RD";
	$fieldToolTipspayrollamt3["English"]["RD"] = "";
	$placeHolderspayrollamt3["English"]["RD"] = "";
	$fieldLabelspayrollamt3["English"]["ND"] = "ND";
	$fieldToolTipspayrollamt3["English"]["ND"] = "";
	$placeHolderspayrollamt3["English"]["ND"] = "";
	$fieldLabelspayrollamt3["English"]["RHND"] = "RHND";
	$fieldToolTipspayrollamt3["English"]["RHND"] = "";
	$placeHolderspayrollamt3["English"]["RHND"] = "";
	$fieldLabelspayrollamt3["English"]["SHND"] = "SHND";
	$fieldToolTipspayrollamt3["English"]["SHND"] = "";
	$placeHolderspayrollamt3["English"]["SHND"] = "";
	$fieldLabelspayrollamt3["English"]["RDND"] = "RDND";
	$fieldToolTipspayrollamt3["English"]["RDND"] = "";
	$placeHolderspayrollamt3["English"]["RDND"] = "";
	$fieldLabelspayrollamt3["English"]["VL"] = "VL";
	$fieldToolTipspayrollamt3["English"]["VL"] = "";
	$placeHolderspayrollamt3["English"]["VL"] = "";
	$fieldLabelspayrollamt3["English"]["SL"] = "SL";
	$fieldToolTipspayrollamt3["English"]["SL"] = "";
	$placeHolderspayrollamt3["English"]["SL"] = "";
	$fieldLabelspayrollamt3["English"]["EL"] = "EL";
	$fieldToolTipspayrollamt3["English"]["EL"] = "";
	$placeHolderspayrollamt3["English"]["EL"] = "";
	$fieldLabelspayrollamt3["English"]["PL"] = "PL";
	$fieldToolTipspayrollamt3["English"]["PL"] = "";
	$placeHolderspayrollamt3["English"]["PL"] = "";
	$fieldLabelspayrollamt3["English"]["TrO"] = "Tr O";
	$fieldToolTipspayrollamt3["English"]["TrO"] = "";
	$placeHolderspayrollamt3["English"]["TrO"] = "";
	$fieldLabelspayrollamt3["English"]["LateMins"] = "Late Mins";
	$fieldToolTipspayrollamt3["English"]["LateMins"] = "";
	$placeHolderspayrollamt3["English"]["LateMins"] = "";
	$fieldLabelspayrollamt3["English"]["UndertimeMins"] = "Undertime Mins";
	$fieldToolTipspayrollamt3["English"]["UndertimeMins"] = "";
	$placeHolderspayrollamt3["English"]["UndertimeMins"] = "";
	$fieldLabelspayrollamt3["English"]["RHolidayHrs"] = "RHoliday Hrs";
	$fieldToolTipspayrollamt3["English"]["RHolidayHrs"] = "";
	$placeHolderspayrollamt3["English"]["RHolidayHrs"] = "";
	$fieldLabelspayrollamt3["English"]["SHolidayHrs"] = "SHoliday Hrs";
	$fieldToolTipspayrollamt3["English"]["SHolidayHrs"] = "";
	$placeHolderspayrollamt3["English"]["SHolidayHrs"] = "";
	$fieldLabelspayrollamt3["English"]["RegOTHrs"] = "Reg OTHrs";
	$fieldToolTipspayrollamt3["English"]["RegOTHrs"] = "";
	$placeHolderspayrollamt3["English"]["RegOTHrs"] = "";
	$fieldLabelspayrollamt3["English"]["RHOTHrs"] = "RHOTHrs";
	$fieldToolTipspayrollamt3["English"]["RHOTHrs"] = "";
	$placeHolderspayrollamt3["English"]["RHOTHrs"] = "";
	$fieldLabelspayrollamt3["English"]["SHOTHrs"] = "SHOTHRs";
	$fieldToolTipspayrollamt3["English"]["SHOTHrs"] = "";
	$placeHolderspayrollamt3["English"]["SHOTHrs"] = "";
	$fieldLabelspayrollamt3["English"]["RDOTHrs"] = "RDOTHrs";
	$fieldToolTipspayrollamt3["English"]["RDOTHrs"] = "";
	$placeHolderspayrollamt3["English"]["RDOTHrs"] = "";
	$fieldLabelspayrollamt3["English"]["RDHrs"] = "RDHrs";
	$fieldToolTipspayrollamt3["English"]["RDHrs"] = "";
	$placeHolderspayrollamt3["English"]["RDHrs"] = "";
	$fieldLabelspayrollamt3["English"]["RegNDHrs"] = "Reg NDHrs";
	$fieldToolTipspayrollamt3["English"]["RegNDHrs"] = "";
	$placeHolderspayrollamt3["English"]["RegNDHrs"] = "";
	$fieldLabelspayrollamt3["English"]["RHNDHrs"] = "RHNDHrs";
	$fieldToolTipspayrollamt3["English"]["RHNDHrs"] = "";
	$placeHolderspayrollamt3["English"]["RHNDHrs"] = "";
	$fieldLabelspayrollamt3["English"]["SHNDHrs"] = "SHNDHrs";
	$fieldToolTipspayrollamt3["English"]["SHNDHrs"] = "";
	$placeHolderspayrollamt3["English"]["SHNDHrs"] = "";
	$fieldLabelspayrollamt3["English"]["RDNDHrs"] = "RDNDHrs";
	$fieldToolTipspayrollamt3["English"]["RDNDHrs"] = "";
	$placeHolderspayrollamt3["English"]["RDNDHrs"] = "";
	$fieldLabelspayrollamt3["English"]["VLBalance"] = "VLBalance";
	$fieldToolTipspayrollamt3["English"]["VLBalance"] = "";
	$placeHolderspayrollamt3["English"]["VLBalance"] = "";
	$fieldLabelspayrollamt3["English"]["SLBalance"] = "SLBalance";
	$fieldToolTipspayrollamt3["English"]["SLBalance"] = "";
	$placeHolderspayrollamt3["English"]["SLBalance"] = "";
	$fieldLabelspayrollamt3["English"]["ELBalance"] = "ELBalance";
	$fieldToolTipspayrollamt3["English"]["ELBalance"] = "";
	$placeHolderspayrollamt3["English"]["ELBalance"] = "";
	$fieldLabelspayrollamt3["English"]["PLBalance"] = "PLBalance";
	$fieldToolTipspayrollamt3["English"]["PLBalance"] = "";
	$placeHolderspayrollamt3["English"]["PLBalance"] = "";
	$fieldLabelspayrollamt3["English"]["LWOP"] = "LWOP";
	$fieldToolTipspayrollamt3["English"]["LWOP"] = "";
	$placeHolderspayrollamt3["English"]["LWOP"] = "";
	$fieldLabelspayrollamt3["English"]["LWOPdays"] = "LWOPdays";
	$fieldToolTipspayrollamt3["English"]["LWOPdays"] = "";
	$placeHolderspayrollamt3["English"]["LWOPdays"] = "";
	$fieldLabelspayrollamt3["English"]["TAdj"] = "TAdj";
	$fieldToolTipspayrollamt3["English"]["TAdj"] = "";
	$placeHolderspayrollamt3["English"]["TAdj"] = "";
	$fieldLabelspayrollamt3["English"]["TAdjt"] = "TAdjt";
	$fieldToolTipspayrollamt3["English"]["TAdjt"] = "";
	$placeHolderspayrollamt3["English"]["TAdjt"] = "";
	$fieldLabelspayrollamt3["English"]["TDeduct"] = "TDeduct";
	$fieldToolTipspayrollamt3["English"]["TDeduct"] = "";
	$placeHolderspayrollamt3["English"]["TDeduct"] = "";
	$fieldLabelspayrollamt3["English"]["Ttax"] = "Ttax";
	$fieldToolTipspayrollamt3["English"]["Ttax"] = "";
	$placeHolderspayrollamt3["English"]["Ttax"] = "";
	$fieldLabelspayrollamt3["English"]["SSS"] = "SSS";
	$fieldToolTipspayrollamt3["English"]["SSS"] = "";
	$placeHolderspayrollamt3["English"]["SSS"] = "";
	$fieldLabelspayrollamt3["English"]["PagIbig"] = "Pag Ibig";
	$fieldToolTipspayrollamt3["English"]["PagIbig"] = "";
	$placeHolderspayrollamt3["English"]["PagIbig"] = "";
	$fieldLabelspayrollamt3["English"]["PHIC"] = "PHIC";
	$fieldToolTipspayrollamt3["English"]["PHIC"] = "";
	$placeHolderspayrollamt3["English"]["PHIC"] = "";
	$fieldLabelspayrollamt3["English"]["TDeductions"] = "TDeductions";
	$fieldToolTipspayrollamt3["English"]["TDeductions"] = "";
	$placeHolderspayrollamt3["English"]["TDeductions"] = "";
	$fieldLabelspayrollamt3["English"]["Taxable"] = "Taxable";
	$fieldToolTipspayrollamt3["English"]["Taxable"] = "";
	$placeHolderspayrollamt3["English"]["Taxable"] = "";
	$fieldLabelspayrollamt3["English"]["Allowance"] = "Allowance";
	$fieldToolTipspayrollamt3["English"]["Allowance"] = "";
	$placeHolderspayrollamt3["English"]["Allowance"] = "";
	$fieldLabelspayrollamt3["English"]["AgentShare"] = "Agent Share";
	$fieldToolTipspayrollamt3["English"]["AgentShare"] = "";
	$placeHolderspayrollamt3["English"]["AgentShare"] = "";
	$fieldLabelspayrollamt3["English"]["GrossPay"] = "Gross Pay";
	$fieldToolTipspayrollamt3["English"]["GrossPay"] = "";
	$placeHolderspayrollamt3["English"]["GrossPay"] = "";
	$fieldLabelspayrollamt3["English"]["NetPay"] = "Net Pay";
	$fieldToolTipspayrollamt3["English"]["NetPay"] = "";
	$placeHolderspayrollamt3["English"]["NetPay"] = "";
	$fieldLabelspayrollamt3["English"]["WageType"] = "Wage Type";
	$fieldToolTipspayrollamt3["English"]["WageType"] = "";
	$placeHolderspayrollamt3["English"]["WageType"] = "";
	if (count($fieldToolTipspayrollamt3["English"]))
		$tdatapayrollamt3[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspayrollamt3[""] = array();
	$fieldToolTipspayrollamt3[""] = array();
	$placeHolderspayrollamt3[""] = array();
	$pageTitlespayrollamt3[""] = array();
	if (count($fieldToolTipspayrollamt3[""]))
		$tdatapayrollamt3[".isUseToolTips"] = true;
}


	$tdatapayrollamt3[".NCSearch"] = true;



$tdatapayrollamt3[".shortTableName"] = "payrollamt3";
$tdatapayrollamt3[".nSecOptions"] = 0;
$tdatapayrollamt3[".recsPerRowPrint"] = 1;
$tdatapayrollamt3[".mainTableOwnerID"] = "";
$tdatapayrollamt3[".moveNext"] = 1;
$tdatapayrollamt3[".entityType"] = 0;

$tdatapayrollamt3[".strOriginalTableName"] = "payrollamt3";

	



$tdatapayrollamt3[".showAddInPopup"] = false;

$tdatapayrollamt3[".showEditInPopup"] = false;

$tdatapayrollamt3[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapayrollamt3[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapayrollamt3[".fieldsForRegister"] = array();

$tdatapayrollamt3[".listAjax"] = false;

	$tdatapayrollamt3[".audit"] = false;

	$tdatapayrollamt3[".locking"] = false;



$tdatapayrollamt3[".list"] = true;



$tdatapayrollamt3[".reorderRecordsByHeader"] = true;


$tdatapayrollamt3[".exportFormatting"] = 2;
$tdatapayrollamt3[".exportDelimiter"] = ",";
		
$tdatapayrollamt3[".view"] = true;

$tdatapayrollamt3[".import"] = true;

$tdatapayrollamt3[".exportTo"] = true;

$tdatapayrollamt3[".printFriendly"] = true;


$tdatapayrollamt3[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapayrollamt3[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapayrollamt3[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapayrollamt3[".searchSaving"] = false;
//

$tdatapayrollamt3[".showSearchPanel"] = true;
		$tdatapayrollamt3[".flexibleSearch"] = true;

$tdatapayrollamt3[".isUseAjaxSuggest"] = true;

$tdatapayrollamt3[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																										

$tdatapayrollamt3[".ajaxCodeSnippetAdded"] = false;

$tdatapayrollamt3[".buttonsAdded"] = false;

$tdatapayrollamt3[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapayrollamt3[".isUseTimeForSearch"] = false;



$tdatapayrollamt3[".badgeColor"] = "d2691e";


$tdatapayrollamt3[".allSearchFields"] = array();
$tdatapayrollamt3[".filterFields"] = array();
$tdatapayrollamt3[".requiredSearchFields"] = array();

$tdatapayrollamt3[".allSearchFields"][] = "PtabID";
	$tdatapayrollamt3[".allSearchFields"][] = "FromDate";
	$tdatapayrollamt3[".allSearchFields"][] = "ToDate";
	$tdatapayrollamt3[".allSearchFields"][] = "EmployeeID";
	$tdatapayrollamt3[".allSearchFields"][] = "UserName";
	$tdatapayrollamt3[".allSearchFields"][] = "Division";
	$tdatapayrollamt3[".allSearchFields"][] = "Status";
	$tdatapayrollamt3[".allSearchFields"][] = "WageType";
	$tdatapayrollamt3[".allSearchFields"][] = "BasicMonthly";
	$tdatapayrollamt3[".allSearchFields"][] = "SemiMonthly";
	$tdatapayrollamt3[".allSearchFields"][] = "BasicDaily";
	$tdatapayrollamt3[".allSearchFields"][] = "DWork";
	$tdatapayrollamt3[".allSearchFields"][] = "Absent";
	$tdatapayrollamt3[".allSearchFields"][] = "RegPay";
	$tdatapayrollamt3[".allSearchFields"][] = "LWOP";
	$tdatapayrollamt3[".allSearchFields"][] = "LWOPdays";
	$tdatapayrollamt3[".allSearchFields"][] = "LateMins";
	$tdatapayrollamt3[".allSearchFields"][] = "Late";
	$tdatapayrollamt3[".allSearchFields"][] = "UndertimeMins";
	$tdatapayrollamt3[".allSearchFields"][] = "UnderTime";
	$tdatapayrollamt3[".allSearchFields"][] = "RHolidayHrs";
	$tdatapayrollamt3[".allSearchFields"][] = "RHoliday";
	$tdatapayrollamt3[".allSearchFields"][] = "SHolidayHrs";
	$tdatapayrollamt3[".allSearchFields"][] = "SHoliday";
	$tdatapayrollamt3[".allSearchFields"][] = "RDHrs";
	$tdatapayrollamt3[".allSearchFields"][] = "RD";
	$tdatapayrollamt3[".allSearchFields"][] = "RegOTHrs";
	$tdatapayrollamt3[".allSearchFields"][] = "RegOT";
	$tdatapayrollamt3[".allSearchFields"][] = "RHOTHrs";
	$tdatapayrollamt3[".allSearchFields"][] = "RHOT";
	$tdatapayrollamt3[".allSearchFields"][] = "SHOTHrs";
	$tdatapayrollamt3[".allSearchFields"][] = "SHOT";
	$tdatapayrollamt3[".allSearchFields"][] = "RDOTHrs";
	$tdatapayrollamt3[".allSearchFields"][] = "RDOT";
	$tdatapayrollamt3[".allSearchFields"][] = "ND";
	$tdatapayrollamt3[".allSearchFields"][] = "RegNDHrs";
	$tdatapayrollamt3[".allSearchFields"][] = "RHNDHrs";
	$tdatapayrollamt3[".allSearchFields"][] = "RHND";
	$tdatapayrollamt3[".allSearchFields"][] = "SHNDHrs";
	$tdatapayrollamt3[".allSearchFields"][] = "SHND";
	$tdatapayrollamt3[".allSearchFields"][] = "RDNDHrs";
	$tdatapayrollamt3[".allSearchFields"][] = "RDND";
	$tdatapayrollamt3[".allSearchFields"][] = "VL";
	$tdatapayrollamt3[".allSearchFields"][] = "SL";
	$tdatapayrollamt3[".allSearchFields"][] = "EL";
	$tdatapayrollamt3[".allSearchFields"][] = "PL";
	$tdatapayrollamt3[".allSearchFields"][] = "TrO";
	$tdatapayrollamt3[".allSearchFields"][] = "VLBalance";
	$tdatapayrollamt3[".allSearchFields"][] = "SLBalance";
	$tdatapayrollamt3[".allSearchFields"][] = "ELBalance";
	$tdatapayrollamt3[".allSearchFields"][] = "PLBalance";
	$tdatapayrollamt3[".allSearchFields"][] = "TAdj";
	$tdatapayrollamt3[".allSearchFields"][] = "TAdjt";
	$tdatapayrollamt3[".allSearchFields"][] = "TDeduct";
	$tdatapayrollamt3[".allSearchFields"][] = "SSS";
	$tdatapayrollamt3[".allSearchFields"][] = "PagIbig";
	$tdatapayrollamt3[".allSearchFields"][] = "PHIC";
	$tdatapayrollamt3[".allSearchFields"][] = "Ttax";
	$tdatapayrollamt3[".allSearchFields"][] = "TDeductions";
	$tdatapayrollamt3[".allSearchFields"][] = "GrossPay";
	$tdatapayrollamt3[".allSearchFields"][] = "Taxable";
	$tdatapayrollamt3[".allSearchFields"][] = "NetPay";
	$tdatapayrollamt3[".allSearchFields"][] = "Allowance";
	$tdatapayrollamt3[".allSearchFields"][] = "AgentShare";
	

$tdatapayrollamt3[".googleLikeFields"] = array();
$tdatapayrollamt3[".googleLikeFields"][] = "PtabID";
$tdatapayrollamt3[".googleLikeFields"][] = "EmployeeID";
$tdatapayrollamt3[".googleLikeFields"][] = "UserName";
$tdatapayrollamt3[".googleLikeFields"][] = "Status";
$tdatapayrollamt3[".googleLikeFields"][] = "Division";
$tdatapayrollamt3[".googleLikeFields"][] = "FromDate";
$tdatapayrollamt3[".googleLikeFields"][] = "ToDate";
$tdatapayrollamt3[".googleLikeFields"][] = "BasicMonthly";
$tdatapayrollamt3[".googleLikeFields"][] = "SemiMonthly";
$tdatapayrollamt3[".googleLikeFields"][] = "BasicDaily";
$tdatapayrollamt3[".googleLikeFields"][] = "DWork";
$tdatapayrollamt3[".googleLikeFields"][] = "Absent";
$tdatapayrollamt3[".googleLikeFields"][] = "RegPay";
$tdatapayrollamt3[".googleLikeFields"][] = "Late";
$tdatapayrollamt3[".googleLikeFields"][] = "UnderTime";
$tdatapayrollamt3[".googleLikeFields"][] = "RHoliday";
$tdatapayrollamt3[".googleLikeFields"][] = "SHoliday";
$tdatapayrollamt3[".googleLikeFields"][] = "RegOT";
$tdatapayrollamt3[".googleLikeFields"][] = "RHOT";
$tdatapayrollamt3[".googleLikeFields"][] = "SHOT";
$tdatapayrollamt3[".googleLikeFields"][] = "RDOT";
$tdatapayrollamt3[".googleLikeFields"][] = "RD";
$tdatapayrollamt3[".googleLikeFields"][] = "ND";
$tdatapayrollamt3[".googleLikeFields"][] = "RHND";
$tdatapayrollamt3[".googleLikeFields"][] = "SHND";
$tdatapayrollamt3[".googleLikeFields"][] = "RDND";
$tdatapayrollamt3[".googleLikeFields"][] = "VL";
$tdatapayrollamt3[".googleLikeFields"][] = "SL";
$tdatapayrollamt3[".googleLikeFields"][] = "EL";
$tdatapayrollamt3[".googleLikeFields"][] = "PL";
$tdatapayrollamt3[".googleLikeFields"][] = "TrO";
$tdatapayrollamt3[".googleLikeFields"][] = "LateMins";
$tdatapayrollamt3[".googleLikeFields"][] = "UndertimeMins";
$tdatapayrollamt3[".googleLikeFields"][] = "RHolidayHrs";
$tdatapayrollamt3[".googleLikeFields"][] = "SHolidayHrs";
$tdatapayrollamt3[".googleLikeFields"][] = "RegOTHrs";
$tdatapayrollamt3[".googleLikeFields"][] = "RHOTHrs";
$tdatapayrollamt3[".googleLikeFields"][] = "SHOTHrs";
$tdatapayrollamt3[".googleLikeFields"][] = "RDOTHrs";
$tdatapayrollamt3[".googleLikeFields"][] = "RDHrs";
$tdatapayrollamt3[".googleLikeFields"][] = "RegNDHrs";
$tdatapayrollamt3[".googleLikeFields"][] = "RHNDHrs";
$tdatapayrollamt3[".googleLikeFields"][] = "SHNDHrs";
$tdatapayrollamt3[".googleLikeFields"][] = "RDNDHrs";
$tdatapayrollamt3[".googleLikeFields"][] = "VLBalance";
$tdatapayrollamt3[".googleLikeFields"][] = "SLBalance";
$tdatapayrollamt3[".googleLikeFields"][] = "ELBalance";
$tdatapayrollamt3[".googleLikeFields"][] = "PLBalance";
$tdatapayrollamt3[".googleLikeFields"][] = "LWOP";
$tdatapayrollamt3[".googleLikeFields"][] = "LWOPdays";
$tdatapayrollamt3[".googleLikeFields"][] = "TAdj";
$tdatapayrollamt3[".googleLikeFields"][] = "TAdjt";
$tdatapayrollamt3[".googleLikeFields"][] = "TDeduct";
$tdatapayrollamt3[".googleLikeFields"][] = "Ttax";
$tdatapayrollamt3[".googleLikeFields"][] = "SSS";
$tdatapayrollamt3[".googleLikeFields"][] = "PagIbig";
$tdatapayrollamt3[".googleLikeFields"][] = "PHIC";
$tdatapayrollamt3[".googleLikeFields"][] = "TDeductions";
$tdatapayrollamt3[".googleLikeFields"][] = "Taxable";
$tdatapayrollamt3[".googleLikeFields"][] = "Allowance";
$tdatapayrollamt3[".googleLikeFields"][] = "AgentShare";
$tdatapayrollamt3[".googleLikeFields"][] = "GrossPay";
$tdatapayrollamt3[".googleLikeFields"][] = "NetPay";
$tdatapayrollamt3[".googleLikeFields"][] = "WageType";


$tdatapayrollamt3[".advSearchFields"] = array();
$tdatapayrollamt3[".advSearchFields"][] = "PtabID";
$tdatapayrollamt3[".advSearchFields"][] = "FromDate";
$tdatapayrollamt3[".advSearchFields"][] = "ToDate";
$tdatapayrollamt3[".advSearchFields"][] = "EmployeeID";
$tdatapayrollamt3[".advSearchFields"][] = "UserName";
$tdatapayrollamt3[".advSearchFields"][] = "Division";
$tdatapayrollamt3[".advSearchFields"][] = "Status";
$tdatapayrollamt3[".advSearchFields"][] = "WageType";
$tdatapayrollamt3[".advSearchFields"][] = "BasicMonthly";
$tdatapayrollamt3[".advSearchFields"][] = "SemiMonthly";
$tdatapayrollamt3[".advSearchFields"][] = "BasicDaily";
$tdatapayrollamt3[".advSearchFields"][] = "DWork";
$tdatapayrollamt3[".advSearchFields"][] = "Absent";
$tdatapayrollamt3[".advSearchFields"][] = "RegPay";
$tdatapayrollamt3[".advSearchFields"][] = "LWOP";
$tdatapayrollamt3[".advSearchFields"][] = "LWOPdays";
$tdatapayrollamt3[".advSearchFields"][] = "LateMins";
$tdatapayrollamt3[".advSearchFields"][] = "Late";
$tdatapayrollamt3[".advSearchFields"][] = "UndertimeMins";
$tdatapayrollamt3[".advSearchFields"][] = "UnderTime";
$tdatapayrollamt3[".advSearchFields"][] = "RHolidayHrs";
$tdatapayrollamt3[".advSearchFields"][] = "RHoliday";
$tdatapayrollamt3[".advSearchFields"][] = "SHolidayHrs";
$tdatapayrollamt3[".advSearchFields"][] = "SHoliday";
$tdatapayrollamt3[".advSearchFields"][] = "RDHrs";
$tdatapayrollamt3[".advSearchFields"][] = "RD";
$tdatapayrollamt3[".advSearchFields"][] = "RegOTHrs";
$tdatapayrollamt3[".advSearchFields"][] = "RegOT";
$tdatapayrollamt3[".advSearchFields"][] = "RHOTHrs";
$tdatapayrollamt3[".advSearchFields"][] = "RHOT";
$tdatapayrollamt3[".advSearchFields"][] = "SHOTHrs";
$tdatapayrollamt3[".advSearchFields"][] = "SHOT";
$tdatapayrollamt3[".advSearchFields"][] = "RDOTHrs";
$tdatapayrollamt3[".advSearchFields"][] = "RDOT";
$tdatapayrollamt3[".advSearchFields"][] = "ND";
$tdatapayrollamt3[".advSearchFields"][] = "RegNDHrs";
$tdatapayrollamt3[".advSearchFields"][] = "RHNDHrs";
$tdatapayrollamt3[".advSearchFields"][] = "RHND";
$tdatapayrollamt3[".advSearchFields"][] = "SHNDHrs";
$tdatapayrollamt3[".advSearchFields"][] = "SHND";
$tdatapayrollamt3[".advSearchFields"][] = "RDNDHrs";
$tdatapayrollamt3[".advSearchFields"][] = "RDND";
$tdatapayrollamt3[".advSearchFields"][] = "VL";
$tdatapayrollamt3[".advSearchFields"][] = "SL";
$tdatapayrollamt3[".advSearchFields"][] = "EL";
$tdatapayrollamt3[".advSearchFields"][] = "PL";
$tdatapayrollamt3[".advSearchFields"][] = "TrO";
$tdatapayrollamt3[".advSearchFields"][] = "VLBalance";
$tdatapayrollamt3[".advSearchFields"][] = "SLBalance";
$tdatapayrollamt3[".advSearchFields"][] = "ELBalance";
$tdatapayrollamt3[".advSearchFields"][] = "PLBalance";
$tdatapayrollamt3[".advSearchFields"][] = "TAdj";
$tdatapayrollamt3[".advSearchFields"][] = "TAdjt";
$tdatapayrollamt3[".advSearchFields"][] = "TDeduct";
$tdatapayrollamt3[".advSearchFields"][] = "SSS";
$tdatapayrollamt3[".advSearchFields"][] = "PagIbig";
$tdatapayrollamt3[".advSearchFields"][] = "PHIC";
$tdatapayrollamt3[".advSearchFields"][] = "Ttax";
$tdatapayrollamt3[".advSearchFields"][] = "TDeductions";
$tdatapayrollamt3[".advSearchFields"][] = "GrossPay";
$tdatapayrollamt3[".advSearchFields"][] = "Taxable";
$tdatapayrollamt3[".advSearchFields"][] = "NetPay";
$tdatapayrollamt3[".advSearchFields"][] = "Allowance";
$tdatapayrollamt3[".advSearchFields"][] = "AgentShare";

$tdatapayrollamt3[".tableType"] = "list";

$tdatapayrollamt3[".printerPageOrientation"] = 0;
$tdatapayrollamt3[".nPrinterPageScale"] = 100;

$tdatapayrollamt3[".nPrinterSplitRecords"] = 40;

$tdatapayrollamt3[".nPrinterPDFSplitRecords"] = 40;



$tdatapayrollamt3[".geocodingEnabled"] = false;





$tdatapayrollamt3[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatapayrollamt3[".pageSize"] = 20;

$tdatapayrollamt3[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapayrollamt3[".strOrderBy"] = $tstrOrderBy;

$tdatapayrollamt3[".orderindexes"] = array();

$tdatapayrollamt3[".sqlHead"] = "SELECT PtabID,  EmployeeID,  UserName,  Status,  Division,  FromDate,  ToDate,  BasicMonthly,  SemiMonthly,  BasicDaily,  DWork,  Absent,  RegPay,  Late,  UnderTime,  RHoliday,  SHoliday,    RegOT,  RHOT,  SHOT,    RDOT,  RD,  ND,  RHND,  SHND,    RDND,  VL,  SL,  EL,  PL,  TrO,  LateMins,  UndertimeMins,  RHolidayHrs,  SHolidayHrs,    RegOTHrs,  RHOTHrs,  SHOTHRs,    RDOTHrs,  RDHrs,  RegNDHrs,  RHNDHrs,  SHNDHrs,    RDNDHrs,  VLBalance,  SLBalance,  ELBalance,  PLBalance,  LWOP,  LWOPdays,  TAdj,  TAdjt,  TDeduct,  Ttax,  SSS,  PagIbig,  PHIC,  TDeductions,  Taxable,  Allowance,  AgentShare,  GrossPay,  NetPay,  WageType";
$tdatapayrollamt3[".sqlFrom"] = "FROM payrollamt3";
$tdatapayrollamt3[".sqlWhereExpr"] = "";
$tdatapayrollamt3[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapayrollamt3[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapayrollamt3[".arrGroupsPerPage"] = $arrGPP;

$tdatapayrollamt3[".highlightSearchResults"] = true;

$tableKeyspayrollamt3 = array();
$tableKeyspayrollamt3[] = "PtabID";
$tdatapayrollamt3[".Keys"] = $tableKeyspayrollamt3;

$tdatapayrollamt3[".listFields"] = array();
$tdatapayrollamt3[".listFields"][] = "PtabID";
$tdatapayrollamt3[".listFields"][] = "FromDate";
$tdatapayrollamt3[".listFields"][] = "ToDate";
$tdatapayrollamt3[".listFields"][] = "EmployeeID";
$tdatapayrollamt3[".listFields"][] = "UserName";
$tdatapayrollamt3[".listFields"][] = "Division";
$tdatapayrollamt3[".listFields"][] = "Status";
$tdatapayrollamt3[".listFields"][] = "WageType";
$tdatapayrollamt3[".listFields"][] = "BasicMonthly";
$tdatapayrollamt3[".listFields"][] = "SemiMonthly";
$tdatapayrollamt3[".listFields"][] = "BasicDaily";
$tdatapayrollamt3[".listFields"][] = "DWork";
$tdatapayrollamt3[".listFields"][] = "Absent";
$tdatapayrollamt3[".listFields"][] = "RegPay";
$tdatapayrollamt3[".listFields"][] = "LWOP";
$tdatapayrollamt3[".listFields"][] = "LWOPdays";
$tdatapayrollamt3[".listFields"][] = "LateMins";
$tdatapayrollamt3[".listFields"][] = "Late";
$tdatapayrollamt3[".listFields"][] = "UndertimeMins";
$tdatapayrollamt3[".listFields"][] = "UnderTime";
$tdatapayrollamt3[".listFields"][] = "RHolidayHrs";
$tdatapayrollamt3[".listFields"][] = "RHoliday";
$tdatapayrollamt3[".listFields"][] = "SHolidayHrs";
$tdatapayrollamt3[".listFields"][] = "SHoliday";
$tdatapayrollamt3[".listFields"][] = "RDHrs";
$tdatapayrollamt3[".listFields"][] = "RD";
$tdatapayrollamt3[".listFields"][] = "RegOTHrs";
$tdatapayrollamt3[".listFields"][] = "RegOT";
$tdatapayrollamt3[".listFields"][] = "RHOTHrs";
$tdatapayrollamt3[".listFields"][] = "RHOT";
$tdatapayrollamt3[".listFields"][] = "SHOTHrs";
$tdatapayrollamt3[".listFields"][] = "SHOT";
$tdatapayrollamt3[".listFields"][] = "RDOTHrs";
$tdatapayrollamt3[".listFields"][] = "RDOT";
$tdatapayrollamt3[".listFields"][] = "ND";
$tdatapayrollamt3[".listFields"][] = "RegNDHrs";
$tdatapayrollamt3[".listFields"][] = "RHNDHrs";
$tdatapayrollamt3[".listFields"][] = "RHND";
$tdatapayrollamt3[".listFields"][] = "SHNDHrs";
$tdatapayrollamt3[".listFields"][] = "SHND";
$tdatapayrollamt3[".listFields"][] = "RDNDHrs";
$tdatapayrollamt3[".listFields"][] = "RDND";
$tdatapayrollamt3[".listFields"][] = "VL";
$tdatapayrollamt3[".listFields"][] = "SL";
$tdatapayrollamt3[".listFields"][] = "EL";
$tdatapayrollamt3[".listFields"][] = "PL";
$tdatapayrollamt3[".listFields"][] = "TrO";
$tdatapayrollamt3[".listFields"][] = "VLBalance";
$tdatapayrollamt3[".listFields"][] = "SLBalance";
$tdatapayrollamt3[".listFields"][] = "ELBalance";
$tdatapayrollamt3[".listFields"][] = "PLBalance";
$tdatapayrollamt3[".listFields"][] = "TAdj";
$tdatapayrollamt3[".listFields"][] = "TAdjt";
$tdatapayrollamt3[".listFields"][] = "TDeduct";
$tdatapayrollamt3[".listFields"][] = "SSS";
$tdatapayrollamt3[".listFields"][] = "PagIbig";
$tdatapayrollamt3[".listFields"][] = "PHIC";
$tdatapayrollamt3[".listFields"][] = "Ttax";
$tdatapayrollamt3[".listFields"][] = "TDeductions";
$tdatapayrollamt3[".listFields"][] = "GrossPay";
$tdatapayrollamt3[".listFields"][] = "Taxable";
$tdatapayrollamt3[".listFields"][] = "NetPay";
$tdatapayrollamt3[".listFields"][] = "Allowance";
$tdatapayrollamt3[".listFields"][] = "AgentShare";

$tdatapayrollamt3[".hideMobileList"] = array();


$tdatapayrollamt3[".viewFields"] = array();
$tdatapayrollamt3[".viewFields"][] = "PtabID";
$tdatapayrollamt3[".viewFields"][] = "FromDate";
$tdatapayrollamt3[".viewFields"][] = "ToDate";
$tdatapayrollamt3[".viewFields"][] = "EmployeeID";
$tdatapayrollamt3[".viewFields"][] = "UserName";
$tdatapayrollamt3[".viewFields"][] = "Division";
$tdatapayrollamt3[".viewFields"][] = "Status";
$tdatapayrollamt3[".viewFields"][] = "WageType";
$tdatapayrollamt3[".viewFields"][] = "BasicMonthly";
$tdatapayrollamt3[".viewFields"][] = "SemiMonthly";
$tdatapayrollamt3[".viewFields"][] = "BasicDaily";
$tdatapayrollamt3[".viewFields"][] = "DWork";
$tdatapayrollamt3[".viewFields"][] = "Absent";
$tdatapayrollamt3[".viewFields"][] = "RegPay";
$tdatapayrollamt3[".viewFields"][] = "LWOP";
$tdatapayrollamt3[".viewFields"][] = "LWOPdays";
$tdatapayrollamt3[".viewFields"][] = "LateMins";
$tdatapayrollamt3[".viewFields"][] = "Late";
$tdatapayrollamt3[".viewFields"][] = "UndertimeMins";
$tdatapayrollamt3[".viewFields"][] = "UnderTime";
$tdatapayrollamt3[".viewFields"][] = "RHolidayHrs";
$tdatapayrollamt3[".viewFields"][] = "RHoliday";
$tdatapayrollamt3[".viewFields"][] = "SHolidayHrs";
$tdatapayrollamt3[".viewFields"][] = "SHoliday";
$tdatapayrollamt3[".viewFields"][] = "RDHrs";
$tdatapayrollamt3[".viewFields"][] = "RD";
$tdatapayrollamt3[".viewFields"][] = "RegOTHrs";
$tdatapayrollamt3[".viewFields"][] = "RegOT";
$tdatapayrollamt3[".viewFields"][] = "RHOTHrs";
$tdatapayrollamt3[".viewFields"][] = "RHOT";
$tdatapayrollamt3[".viewFields"][] = "SHOTHrs";
$tdatapayrollamt3[".viewFields"][] = "SHOT";
$tdatapayrollamt3[".viewFields"][] = "RDOTHrs";
$tdatapayrollamt3[".viewFields"][] = "RDOT";
$tdatapayrollamt3[".viewFields"][] = "ND";
$tdatapayrollamt3[".viewFields"][] = "RegNDHrs";
$tdatapayrollamt3[".viewFields"][] = "RHNDHrs";
$tdatapayrollamt3[".viewFields"][] = "RHND";
$tdatapayrollamt3[".viewFields"][] = "SHNDHrs";
$tdatapayrollamt3[".viewFields"][] = "SHND";
$tdatapayrollamt3[".viewFields"][] = "RDNDHrs";
$tdatapayrollamt3[".viewFields"][] = "RDND";
$tdatapayrollamt3[".viewFields"][] = "VL";
$tdatapayrollamt3[".viewFields"][] = "SL";
$tdatapayrollamt3[".viewFields"][] = "EL";
$tdatapayrollamt3[".viewFields"][] = "PL";
$tdatapayrollamt3[".viewFields"][] = "TrO";
$tdatapayrollamt3[".viewFields"][] = "VLBalance";
$tdatapayrollamt3[".viewFields"][] = "SLBalance";
$tdatapayrollamt3[".viewFields"][] = "ELBalance";
$tdatapayrollamt3[".viewFields"][] = "PLBalance";
$tdatapayrollamt3[".viewFields"][] = "TAdj";
$tdatapayrollamt3[".viewFields"][] = "TAdjt";
$tdatapayrollamt3[".viewFields"][] = "TDeduct";
$tdatapayrollamt3[".viewFields"][] = "SSS";
$tdatapayrollamt3[".viewFields"][] = "PagIbig";
$tdatapayrollamt3[".viewFields"][] = "PHIC";
$tdatapayrollamt3[".viewFields"][] = "Ttax";
$tdatapayrollamt3[".viewFields"][] = "TDeductions";
$tdatapayrollamt3[".viewFields"][] = "GrossPay";
$tdatapayrollamt3[".viewFields"][] = "Taxable";
$tdatapayrollamt3[".viewFields"][] = "NetPay";
$tdatapayrollamt3[".viewFields"][] = "Allowance";
$tdatapayrollamt3[".viewFields"][] = "AgentShare";

$tdatapayrollamt3[".addFields"] = array();

$tdatapayrollamt3[".masterListFields"] = array();
$tdatapayrollamt3[".masterListFields"][] = "PtabID";
$tdatapayrollamt3[".masterListFields"][] = "FromDate";
$tdatapayrollamt3[".masterListFields"][] = "ToDate";
$tdatapayrollamt3[".masterListFields"][] = "EmployeeID";
$tdatapayrollamt3[".masterListFields"][] = "UserName";
$tdatapayrollamt3[".masterListFields"][] = "Division";
$tdatapayrollamt3[".masterListFields"][] = "Status";
$tdatapayrollamt3[".masterListFields"][] = "WageType";
$tdatapayrollamt3[".masterListFields"][] = "BasicMonthly";
$tdatapayrollamt3[".masterListFields"][] = "SemiMonthly";
$tdatapayrollamt3[".masterListFields"][] = "BasicDaily";
$tdatapayrollamt3[".masterListFields"][] = "DWork";
$tdatapayrollamt3[".masterListFields"][] = "Absent";
$tdatapayrollamt3[".masterListFields"][] = "RegPay";
$tdatapayrollamt3[".masterListFields"][] = "LWOP";
$tdatapayrollamt3[".masterListFields"][] = "LWOPdays";
$tdatapayrollamt3[".masterListFields"][] = "LateMins";
$tdatapayrollamt3[".masterListFields"][] = "Late";
$tdatapayrollamt3[".masterListFields"][] = "UndertimeMins";
$tdatapayrollamt3[".masterListFields"][] = "UnderTime";
$tdatapayrollamt3[".masterListFields"][] = "RHolidayHrs";
$tdatapayrollamt3[".masterListFields"][] = "RHoliday";
$tdatapayrollamt3[".masterListFields"][] = "SHolidayHrs";
$tdatapayrollamt3[".masterListFields"][] = "SHoliday";
$tdatapayrollamt3[".masterListFields"][] = "RDHrs";
$tdatapayrollamt3[".masterListFields"][] = "RD";
$tdatapayrollamt3[".masterListFields"][] = "RegOTHrs";
$tdatapayrollamt3[".masterListFields"][] = "RegOT";
$tdatapayrollamt3[".masterListFields"][] = "RHOTHrs";
$tdatapayrollamt3[".masterListFields"][] = "RHOT";
$tdatapayrollamt3[".masterListFields"][] = "SHOTHrs";
$tdatapayrollamt3[".masterListFields"][] = "SHOT";
$tdatapayrollamt3[".masterListFields"][] = "RDOTHrs";
$tdatapayrollamt3[".masterListFields"][] = "RDOT";
$tdatapayrollamt3[".masterListFields"][] = "ND";
$tdatapayrollamt3[".masterListFields"][] = "RegNDHrs";
$tdatapayrollamt3[".masterListFields"][] = "RHNDHrs";
$tdatapayrollamt3[".masterListFields"][] = "RHND";
$tdatapayrollamt3[".masterListFields"][] = "SHNDHrs";
$tdatapayrollamt3[".masterListFields"][] = "SHND";
$tdatapayrollamt3[".masterListFields"][] = "RDNDHrs";
$tdatapayrollamt3[".masterListFields"][] = "RDND";
$tdatapayrollamt3[".masterListFields"][] = "VL";
$tdatapayrollamt3[".masterListFields"][] = "SL";
$tdatapayrollamt3[".masterListFields"][] = "EL";
$tdatapayrollamt3[".masterListFields"][] = "PL";
$tdatapayrollamt3[".masterListFields"][] = "TrO";
$tdatapayrollamt3[".masterListFields"][] = "VLBalance";
$tdatapayrollamt3[".masterListFields"][] = "SLBalance";
$tdatapayrollamt3[".masterListFields"][] = "ELBalance";
$tdatapayrollamt3[".masterListFields"][] = "PLBalance";
$tdatapayrollamt3[".masterListFields"][] = "TAdj";
$tdatapayrollamt3[".masterListFields"][] = "TAdjt";
$tdatapayrollamt3[".masterListFields"][] = "TDeduct";
$tdatapayrollamt3[".masterListFields"][] = "SSS";
$tdatapayrollamt3[".masterListFields"][] = "PagIbig";
$tdatapayrollamt3[".masterListFields"][] = "PHIC";
$tdatapayrollamt3[".masterListFields"][] = "Ttax";
$tdatapayrollamt3[".masterListFields"][] = "TDeductions";
$tdatapayrollamt3[".masterListFields"][] = "GrossPay";
$tdatapayrollamt3[".masterListFields"][] = "Taxable";
$tdatapayrollamt3[".masterListFields"][] = "NetPay";
$tdatapayrollamt3[".masterListFields"][] = "Allowance";
$tdatapayrollamt3[".masterListFields"][] = "AgentShare";

$tdatapayrollamt3[".inlineAddFields"] = array();

$tdatapayrollamt3[".editFields"] = array();

$tdatapayrollamt3[".inlineEditFields"] = array();

$tdatapayrollamt3[".updateSelectedFields"] = array();


$tdatapayrollamt3[".exportFields"] = array();
$tdatapayrollamt3[".exportFields"][] = "PtabID";
$tdatapayrollamt3[".exportFields"][] = "FromDate";
$tdatapayrollamt3[".exportFields"][] = "ToDate";
$tdatapayrollamt3[".exportFields"][] = "EmployeeID";
$tdatapayrollamt3[".exportFields"][] = "UserName";
$tdatapayrollamt3[".exportFields"][] = "Division";
$tdatapayrollamt3[".exportFields"][] = "Status";
$tdatapayrollamt3[".exportFields"][] = "WageType";
$tdatapayrollamt3[".exportFields"][] = "BasicMonthly";
$tdatapayrollamt3[".exportFields"][] = "SemiMonthly";
$tdatapayrollamt3[".exportFields"][] = "BasicDaily";
$tdatapayrollamt3[".exportFields"][] = "DWork";
$tdatapayrollamt3[".exportFields"][] = "Absent";
$tdatapayrollamt3[".exportFields"][] = "RegPay";
$tdatapayrollamt3[".exportFields"][] = "LWOP";
$tdatapayrollamt3[".exportFields"][] = "LWOPdays";
$tdatapayrollamt3[".exportFields"][] = "LateMins";
$tdatapayrollamt3[".exportFields"][] = "Late";
$tdatapayrollamt3[".exportFields"][] = "UndertimeMins";
$tdatapayrollamt3[".exportFields"][] = "UnderTime";
$tdatapayrollamt3[".exportFields"][] = "RHolidayHrs";
$tdatapayrollamt3[".exportFields"][] = "RHoliday";
$tdatapayrollamt3[".exportFields"][] = "SHolidayHrs";
$tdatapayrollamt3[".exportFields"][] = "SHoliday";
$tdatapayrollamt3[".exportFields"][] = "RDHrs";
$tdatapayrollamt3[".exportFields"][] = "RD";
$tdatapayrollamt3[".exportFields"][] = "RegOTHrs";
$tdatapayrollamt3[".exportFields"][] = "RegOT";
$tdatapayrollamt3[".exportFields"][] = "RHOTHrs";
$tdatapayrollamt3[".exportFields"][] = "RHOT";
$tdatapayrollamt3[".exportFields"][] = "SHOTHrs";
$tdatapayrollamt3[".exportFields"][] = "SHOT";
$tdatapayrollamt3[".exportFields"][] = "RDOTHrs";
$tdatapayrollamt3[".exportFields"][] = "RDOT";
$tdatapayrollamt3[".exportFields"][] = "ND";
$tdatapayrollamt3[".exportFields"][] = "RegNDHrs";
$tdatapayrollamt3[".exportFields"][] = "RHNDHrs";
$tdatapayrollamt3[".exportFields"][] = "RHND";
$tdatapayrollamt3[".exportFields"][] = "SHNDHrs";
$tdatapayrollamt3[".exportFields"][] = "SHND";
$tdatapayrollamt3[".exportFields"][] = "RDNDHrs";
$tdatapayrollamt3[".exportFields"][] = "RDND";
$tdatapayrollamt3[".exportFields"][] = "VL";
$tdatapayrollamt3[".exportFields"][] = "SL";
$tdatapayrollamt3[".exportFields"][] = "EL";
$tdatapayrollamt3[".exportFields"][] = "PL";
$tdatapayrollamt3[".exportFields"][] = "TrO";
$tdatapayrollamt3[".exportFields"][] = "VLBalance";
$tdatapayrollamt3[".exportFields"][] = "SLBalance";
$tdatapayrollamt3[".exportFields"][] = "ELBalance";
$tdatapayrollamt3[".exportFields"][] = "PLBalance";
$tdatapayrollamt3[".exportFields"][] = "TAdj";
$tdatapayrollamt3[".exportFields"][] = "TAdjt";
$tdatapayrollamt3[".exportFields"][] = "TDeduct";
$tdatapayrollamt3[".exportFields"][] = "SSS";
$tdatapayrollamt3[".exportFields"][] = "PagIbig";
$tdatapayrollamt3[".exportFields"][] = "PHIC";
$tdatapayrollamt3[".exportFields"][] = "Ttax";
$tdatapayrollamt3[".exportFields"][] = "TDeductions";
$tdatapayrollamt3[".exportFields"][] = "GrossPay";
$tdatapayrollamt3[".exportFields"][] = "Taxable";
$tdatapayrollamt3[".exportFields"][] = "NetPay";
$tdatapayrollamt3[".exportFields"][] = "Allowance";
$tdatapayrollamt3[".exportFields"][] = "AgentShare";

$tdatapayrollamt3[".importFields"] = array();
$tdatapayrollamt3[".importFields"][] = "PtabID";
$tdatapayrollamt3[".importFields"][] = "EmployeeID";
$tdatapayrollamt3[".importFields"][] = "UserName";
$tdatapayrollamt3[".importFields"][] = "Status";
$tdatapayrollamt3[".importFields"][] = "Division";
$tdatapayrollamt3[".importFields"][] = "FromDate";
$tdatapayrollamt3[".importFields"][] = "ToDate";
$tdatapayrollamt3[".importFields"][] = "BasicMonthly";
$tdatapayrollamt3[".importFields"][] = "SemiMonthly";
$tdatapayrollamt3[".importFields"][] = "BasicDaily";
$tdatapayrollamt3[".importFields"][] = "DWork";
$tdatapayrollamt3[".importFields"][] = "Absent";
$tdatapayrollamt3[".importFields"][] = "RegPay";
$tdatapayrollamt3[".importFields"][] = "Late";
$tdatapayrollamt3[".importFields"][] = "UnderTime";
$tdatapayrollamt3[".importFields"][] = "RHoliday";
$tdatapayrollamt3[".importFields"][] = "SHoliday";
$tdatapayrollamt3[".importFields"][] = "RegOT";
$tdatapayrollamt3[".importFields"][] = "RHOT";
$tdatapayrollamt3[".importFields"][] = "SHOT";
$tdatapayrollamt3[".importFields"][] = "RDOT";
$tdatapayrollamt3[".importFields"][] = "RD";
$tdatapayrollamt3[".importFields"][] = "ND";
$tdatapayrollamt3[".importFields"][] = "RHND";
$tdatapayrollamt3[".importFields"][] = "SHND";
$tdatapayrollamt3[".importFields"][] = "RDND";
$tdatapayrollamt3[".importFields"][] = "VL";
$tdatapayrollamt3[".importFields"][] = "SL";
$tdatapayrollamt3[".importFields"][] = "EL";
$tdatapayrollamt3[".importFields"][] = "PL";
$tdatapayrollamt3[".importFields"][] = "TrO";
$tdatapayrollamt3[".importFields"][] = "LateMins";
$tdatapayrollamt3[".importFields"][] = "UndertimeMins";
$tdatapayrollamt3[".importFields"][] = "RHolidayHrs";
$tdatapayrollamt3[".importFields"][] = "SHolidayHrs";
$tdatapayrollamt3[".importFields"][] = "RegOTHrs";
$tdatapayrollamt3[".importFields"][] = "RHOTHrs";
$tdatapayrollamt3[".importFields"][] = "SHOTHrs";
$tdatapayrollamt3[".importFields"][] = "RDOTHrs";
$tdatapayrollamt3[".importFields"][] = "RDHrs";
$tdatapayrollamt3[".importFields"][] = "RegNDHrs";
$tdatapayrollamt3[".importFields"][] = "RHNDHrs";
$tdatapayrollamt3[".importFields"][] = "SHNDHrs";
$tdatapayrollamt3[".importFields"][] = "RDNDHrs";
$tdatapayrollamt3[".importFields"][] = "VLBalance";
$tdatapayrollamt3[".importFields"][] = "SLBalance";
$tdatapayrollamt3[".importFields"][] = "ELBalance";
$tdatapayrollamt3[".importFields"][] = "PLBalance";
$tdatapayrollamt3[".importFields"][] = "LWOP";
$tdatapayrollamt3[".importFields"][] = "LWOPdays";
$tdatapayrollamt3[".importFields"][] = "TAdj";
$tdatapayrollamt3[".importFields"][] = "TAdjt";
$tdatapayrollamt3[".importFields"][] = "TDeduct";
$tdatapayrollamt3[".importFields"][] = "Ttax";
$tdatapayrollamt3[".importFields"][] = "SSS";
$tdatapayrollamt3[".importFields"][] = "PagIbig";
$tdatapayrollamt3[".importFields"][] = "PHIC";
$tdatapayrollamt3[".importFields"][] = "TDeductions";
$tdatapayrollamt3[".importFields"][] = "Taxable";
$tdatapayrollamt3[".importFields"][] = "Allowance";
$tdatapayrollamt3[".importFields"][] = "AgentShare";
$tdatapayrollamt3[".importFields"][] = "GrossPay";
$tdatapayrollamt3[".importFields"][] = "NetPay";
$tdatapayrollamt3[".importFields"][] = "WageType";

$tdatapayrollamt3[".printFields"] = array();
$tdatapayrollamt3[".printFields"][] = "PtabID";
$tdatapayrollamt3[".printFields"][] = "FromDate";
$tdatapayrollamt3[".printFields"][] = "ToDate";
$tdatapayrollamt3[".printFields"][] = "EmployeeID";
$tdatapayrollamt3[".printFields"][] = "UserName";
$tdatapayrollamt3[".printFields"][] = "Division";
$tdatapayrollamt3[".printFields"][] = "Status";
$tdatapayrollamt3[".printFields"][] = "WageType";
$tdatapayrollamt3[".printFields"][] = "BasicMonthly";
$tdatapayrollamt3[".printFields"][] = "SemiMonthly";
$tdatapayrollamt3[".printFields"][] = "BasicDaily";
$tdatapayrollamt3[".printFields"][] = "DWork";
$tdatapayrollamt3[".printFields"][] = "Absent";
$tdatapayrollamt3[".printFields"][] = "RegPay";
$tdatapayrollamt3[".printFields"][] = "LWOP";
$tdatapayrollamt3[".printFields"][] = "LWOPdays";
$tdatapayrollamt3[".printFields"][] = "LateMins";
$tdatapayrollamt3[".printFields"][] = "Late";
$tdatapayrollamt3[".printFields"][] = "UndertimeMins";
$tdatapayrollamt3[".printFields"][] = "UnderTime";
$tdatapayrollamt3[".printFields"][] = "RHolidayHrs";
$tdatapayrollamt3[".printFields"][] = "RHoliday";
$tdatapayrollamt3[".printFields"][] = "SHolidayHrs";
$tdatapayrollamt3[".printFields"][] = "SHoliday";
$tdatapayrollamt3[".printFields"][] = "RDHrs";
$tdatapayrollamt3[".printFields"][] = "RD";
$tdatapayrollamt3[".printFields"][] = "RegOTHrs";
$tdatapayrollamt3[".printFields"][] = "RegOT";
$tdatapayrollamt3[".printFields"][] = "RHOTHrs";
$tdatapayrollamt3[".printFields"][] = "RHOT";
$tdatapayrollamt3[".printFields"][] = "SHOTHrs";
$tdatapayrollamt3[".printFields"][] = "SHOT";
$tdatapayrollamt3[".printFields"][] = "RDOTHrs";
$tdatapayrollamt3[".printFields"][] = "RDOT";
$tdatapayrollamt3[".printFields"][] = "ND";
$tdatapayrollamt3[".printFields"][] = "RegNDHrs";
$tdatapayrollamt3[".printFields"][] = "RHNDHrs";
$tdatapayrollamt3[".printFields"][] = "RHND";
$tdatapayrollamt3[".printFields"][] = "SHNDHrs";
$tdatapayrollamt3[".printFields"][] = "SHND";
$tdatapayrollamt3[".printFields"][] = "RDNDHrs";
$tdatapayrollamt3[".printFields"][] = "RDND";
$tdatapayrollamt3[".printFields"][] = "VL";
$tdatapayrollamt3[".printFields"][] = "SL";
$tdatapayrollamt3[".printFields"][] = "EL";
$tdatapayrollamt3[".printFields"][] = "PL";
$tdatapayrollamt3[".printFields"][] = "TrO";
$tdatapayrollamt3[".printFields"][] = "VLBalance";
$tdatapayrollamt3[".printFields"][] = "SLBalance";
$tdatapayrollamt3[".printFields"][] = "ELBalance";
$tdatapayrollamt3[".printFields"][] = "PLBalance";
$tdatapayrollamt3[".printFields"][] = "TAdj";
$tdatapayrollamt3[".printFields"][] = "TAdjt";
$tdatapayrollamt3[".printFields"][] = "TDeduct";
$tdatapayrollamt3[".printFields"][] = "SSS";
$tdatapayrollamt3[".printFields"][] = "PagIbig";
$tdatapayrollamt3[".printFields"][] = "PHIC";
$tdatapayrollamt3[".printFields"][] = "Ttax";
$tdatapayrollamt3[".printFields"][] = "TDeductions";
$tdatapayrollamt3[".printFields"][] = "GrossPay";
$tdatapayrollamt3[".printFields"][] = "Taxable";
$tdatapayrollamt3[".printFields"][] = "NetPay";
$tdatapayrollamt3[".printFields"][] = "Allowance";
$tdatapayrollamt3[".printFields"][] = "AgentShare";


//	PtabID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PtabID";
	$fdata["GoodName"] = "PtabID";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","PtabID");
	$fdata["FieldType"] = 3;

	
	
	
			
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

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrollamt3["PtabID"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","EmployeeID");
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrollamt3["EmployeeID"] = $fdata;
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","UserName");
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




	$tdatapayrollamt3["UserName"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","Status");
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




	$tdatapayrollamt3["Status"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","Division");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrollamt3["Division"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","FromDate");
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




	$tdatapayrollamt3["FromDate"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","ToDate");
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




	$tdatapayrollamt3["ToDate"] = $fdata;
//	BasicMonthly
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "BasicMonthly";
	$fdata["GoodName"] = "BasicMonthly";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","BasicMonthly");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayrollamt3["BasicMonthly"] = $fdata;
//	SemiMonthly
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "SemiMonthly";
	$fdata["GoodName"] = "SemiMonthly";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","SemiMonthly");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SemiMonthly";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SemiMonthly";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrollamt3["SemiMonthly"] = $fdata;
//	BasicDaily
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "BasicDaily";
	$fdata["GoodName"] = "BasicDaily";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","BasicDaily");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayrollamt3["BasicDaily"] = $fdata;
//	DWork
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DWork";
	$fdata["GoodName"] = "DWork";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","DWork");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayrollamt3["DWork"] = $fdata;
//	Absent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Absent";
	$fdata["GoodName"] = "Absent";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","Absent");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayrollamt3["Absent"] = $fdata;
//	RegPay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "RegPay";
	$fdata["GoodName"] = "RegPay";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","RegPay");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["RegPay"] = $fdata;
//	Late
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Late";
	$fdata["GoodName"] = "Late";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","Late");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["Late"] = $fdata;
//	UnderTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "UnderTime";
	$fdata["GoodName"] = "UnderTime";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","UnderTime");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["UnderTime"] = $fdata;
//	RHoliday
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "RHoliday";
	$fdata["GoodName"] = "RHoliday";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","RHoliday");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["RHoliday"] = $fdata;
//	SHoliday
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "SHoliday";
	$fdata["GoodName"] = "SHoliday";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","SHoliday");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["SHoliday"] = $fdata;
//	RegOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "RegOT";
	$fdata["GoodName"] = "RegOT";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","RegOT");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["RegOT"] = $fdata;
//	RHOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "RHOT";
	$fdata["GoodName"] = "RHOT";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","RHOT");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["RHOT"] = $fdata;
//	SHOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "SHOT";
	$fdata["GoodName"] = "SHOT";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","SHOT");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["SHOT"] = $fdata;
//	RDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "RDOT";
	$fdata["GoodName"] = "RDOT";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","RDOT");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["RDOT"] = $fdata;
//	RD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "RD";
	$fdata["GoodName"] = "RD";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","RD");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["RD"] = $fdata;
//	ND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "ND";
	$fdata["GoodName"] = "ND";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","ND");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["ND"] = $fdata;
//	RHND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "RHND";
	$fdata["GoodName"] = "RHND";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","RHND");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["RHND"] = $fdata;
//	SHND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "SHND";
	$fdata["GoodName"] = "SHND";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","SHND");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["SHND"] = $fdata;
//	RDND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "RDND";
	$fdata["GoodName"] = "RDND";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","RDND");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["RDND"] = $fdata;
//	VL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "VL";
	$fdata["GoodName"] = "VL";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","VL");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["VL"] = $fdata;
//	SL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "SL";
	$fdata["GoodName"] = "SL";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","SL");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["SL"] = $fdata;
//	EL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "EL";
	$fdata["GoodName"] = "EL";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","EL");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["EL"] = $fdata;
//	PL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "PL";
	$fdata["GoodName"] = "PL";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","PL");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["PL"] = $fdata;
//	TrO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "TrO";
	$fdata["GoodName"] = "TrO";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","TrO");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["TrO"] = $fdata;
//	LateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "LateMins";
	$fdata["GoodName"] = "LateMins";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","LateMins");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayrollamt3["LateMins"] = $fdata;
//	UndertimeMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "UndertimeMins";
	$fdata["GoodName"] = "UndertimeMins";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","UndertimeMins");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayrollamt3["UndertimeMins"] = $fdata;
//	RHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "RHolidayHrs";
	$fdata["GoodName"] = "RHolidayHrs";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","RHolidayHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayrollamt3["RHolidayHrs"] = $fdata;
//	SHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "SHolidayHrs";
	$fdata["GoodName"] = "SHolidayHrs";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","SHolidayHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayrollamt3["SHolidayHrs"] = $fdata;
//	RegOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "RegOTHrs";
	$fdata["GoodName"] = "RegOTHrs";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","RegOTHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrollamt3["RegOTHrs"] = $fdata;
//	RHOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "RHOTHrs";
	$fdata["GoodName"] = "RHOTHrs";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","RHOTHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayrollamt3["RHOTHrs"] = $fdata;
//	SHOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "SHOTHrs";
	$fdata["GoodName"] = "SHOTHrs";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","SHOTHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHOTHrs";

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




	$tdatapayrollamt3["SHOTHrs"] = $fdata;
//	RDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "RDOTHrs";
	$fdata["GoodName"] = "RDOTHrs";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","RDOTHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayrollamt3["RDOTHrs"] = $fdata;
//	RDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "RDHrs";
	$fdata["GoodName"] = "RDHrs";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","RDHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayrollamt3["RDHrs"] = $fdata;
//	RegNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "RegNDHrs";
	$fdata["GoodName"] = "RegNDHrs";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","RegNDHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayrollamt3["RegNDHrs"] = $fdata;
//	RHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "RHNDHrs";
	$fdata["GoodName"] = "RHNDHrs";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","RHNDHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayrollamt3["RHNDHrs"] = $fdata;
//	SHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "SHNDHrs";
	$fdata["GoodName"] = "SHNDHrs";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","SHNDHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayrollamt3["SHNDHrs"] = $fdata;
//	RDNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "RDNDHrs";
	$fdata["GoodName"] = "RDNDHrs";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","RDNDHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayrollamt3["RDNDHrs"] = $fdata;
//	VLBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "VLBalance";
	$fdata["GoodName"] = "VLBalance";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","VLBalance");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayrollamt3["VLBalance"] = $fdata;
//	SLBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "SLBalance";
	$fdata["GoodName"] = "SLBalance";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","SLBalance");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayrollamt3["SLBalance"] = $fdata;
//	ELBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "ELBalance";
	$fdata["GoodName"] = "ELBalance";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","ELBalance");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayrollamt3["ELBalance"] = $fdata;
//	PLBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "PLBalance";
	$fdata["GoodName"] = "PLBalance";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","PLBalance");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayrollamt3["PLBalance"] = $fdata;
//	LWOP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "LWOP";
	$fdata["GoodName"] = "LWOP";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","LWOP");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["LWOP"] = $fdata;
//	LWOPdays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "LWOPdays";
	$fdata["GoodName"] = "LWOPdays";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","LWOPdays");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["LWOPdays"] = $fdata;
//	TAdj
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "TAdj";
	$fdata["GoodName"] = "TAdj";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","TAdj");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["TAdj"] = $fdata;
//	TAdjt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "TAdjt";
	$fdata["GoodName"] = "TAdjt";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","TAdjt");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["TAdjt"] = $fdata;
//	TDeduct
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "TDeduct";
	$fdata["GoodName"] = "TDeduct";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","TDeduct");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TDeduct";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TDeduct";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrollamt3["TDeduct"] = $fdata;
//	Ttax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "Ttax";
	$fdata["GoodName"] = "Ttax";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","Ttax");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["Ttax"] = $fdata;
//	SSS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "SSS";
	$fdata["GoodName"] = "SSS";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","SSS");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["SSS"] = $fdata;
//	PagIbig
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "PagIbig";
	$fdata["GoodName"] = "PagIbig";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","PagIbig");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["PagIbig"] = $fdata;
//	PHIC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "PHIC";
	$fdata["GoodName"] = "PHIC";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","PHIC");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["PHIC"] = $fdata;
//	TDeductions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "TDeductions";
	$fdata["GoodName"] = "TDeductions";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","TDeductions");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["TDeductions"] = $fdata;
//	Taxable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "Taxable";
	$fdata["GoodName"] = "Taxable";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","Taxable");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["Taxable"] = $fdata;
//	Allowance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "Allowance";
	$fdata["GoodName"] = "Allowance";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","Allowance");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Allowance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Allowance";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrollamt3["Allowance"] = $fdata;
//	AgentShare
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "AgentShare";
	$fdata["GoodName"] = "AgentShare";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","AgentShare");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AgentShare";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AgentShare";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrollamt3["AgentShare"] = $fdata;
//	GrossPay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "GrossPay";
	$fdata["GoodName"] = "GrossPay";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","GrossPay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["GrossPay"] = $fdata;
//	NetPay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "NetPay";
	$fdata["GoodName"] = "NetPay";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","NetPay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatapayrollamt3["NetPay"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "payrollamt3";
	$fdata["Label"] = GetFieldLabel("payrollamt3","WageType");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrollamt3["WageType"] = $fdata;


$tables_data["payrollamt3"]=&$tdatapayrollamt3;
$field_labels["payrollamt3"] = &$fieldLabelspayrollamt3;
$fieldToolTips["payrollamt3"] = &$fieldToolTipspayrollamt3;
$placeHolders["payrollamt3"] = &$placeHolderspayrollamt3;
$page_titles["payrollamt3"] = &$pageTitlespayrollamt3;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["payrollamt3"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["payrollamt3"] = array();


	
				$strOriginalDetailsTable="payrolltab";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="payrolltab";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "payrolltab";
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
					$masterTablesData["payrollamt3"][0] = $masterParams;
				$masterTablesData["payrollamt3"][0]["masterKeys"] = array();
	$masterTablesData["payrollamt3"][0]["masterKeys"][]="EmployeeID";
				$masterTablesData["payrollamt3"][0]["masterKeys"][]="FromDate";
				$masterTablesData["payrollamt3"][0]["masterKeys"][]="ToDate";
				$masterTablesData["payrollamt3"][0]["detailKeys"] = array();
	$masterTablesData["payrollamt3"][0]["detailKeys"][]="EmployeeID";
				$masterTablesData["payrollamt3"][0]["detailKeys"][]="FromDate";
				$masterTablesData["payrollamt3"][0]["detailKeys"][]="ToDate";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_payrollamt3()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PtabID,  EmployeeID,  UserName,  Status,  Division,  FromDate,  ToDate,  BasicMonthly,  SemiMonthly,  BasicDaily,  DWork,  Absent,  RegPay,  Late,  UnderTime,  RHoliday,  SHoliday,    RegOT,  RHOT,  SHOT,    RDOT,  RD,  ND,  RHND,  SHND,    RDND,  VL,  SL,  EL,  PL,  TrO,  LateMins,  UndertimeMins,  RHolidayHrs,  SHolidayHrs,    RegOTHrs,  RHOTHrs,  SHOTHRs,    RDOTHrs,  RDHrs,  RegNDHrs,  RHNDHrs,  SHNDHrs,    RDNDHrs,  VLBalance,  SLBalance,  ELBalance,  PLBalance,  LWOP,  LWOPdays,  TAdj,  TAdjt,  TDeduct,  Ttax,  SSS,  PagIbig,  PHIC,  TDeductions,  Taxable,  Allowance,  AgentShare,  GrossPay,  NetPay,  WageType";
$proto0["m_strFrom"] = "FROM payrollamt3";
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
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto6["m_sql"] = "PtabID";
$proto6["m_srcTableName"] = "payrollamt3";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto8["m_sql"] = "EmployeeID";
$proto8["m_srcTableName"] = "payrollamt3";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto10["m_sql"] = "UserName";
$proto10["m_srcTableName"] = "payrollamt3";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto12["m_sql"] = "Status";
$proto12["m_srcTableName"] = "payrollamt3";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto14["m_sql"] = "Division";
$proto14["m_srcTableName"] = "payrollamt3";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto16["m_sql"] = "FromDate";
$proto16["m_srcTableName"] = "payrollamt3";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto18["m_sql"] = "ToDate";
$proto18["m_srcTableName"] = "payrollamt3";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "BasicMonthly",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto20["m_sql"] = "BasicMonthly";
$proto20["m_srcTableName"] = "payrollamt3";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "SemiMonthly",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto22["m_sql"] = "SemiMonthly";
$proto22["m_srcTableName"] = "payrollamt3";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "BasicDaily",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto24["m_sql"] = "BasicDaily";
$proto24["m_srcTableName"] = "payrollamt3";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DWork",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto26["m_sql"] = "DWork";
$proto26["m_srcTableName"] = "payrollamt3";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Absent",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto28["m_sql"] = "Absent";
$proto28["m_srcTableName"] = "payrollamt3";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "RegPay",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto30["m_sql"] = "RegPay";
$proto30["m_srcTableName"] = "payrollamt3";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Late",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto32["m_sql"] = "Late";
$proto32["m_srcTableName"] = "payrollamt3";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "UnderTime",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto34["m_sql"] = "UnderTime";
$proto34["m_srcTableName"] = "payrollamt3";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "RHoliday",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto36["m_sql"] = "RHoliday";
$proto36["m_srcTableName"] = "payrollamt3";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "SHoliday",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto38["m_sql"] = "SHoliday";
$proto38["m_srcTableName"] = "payrollamt3";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "RegOT",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto40["m_sql"] = "RegOT";
$proto40["m_srcTableName"] = "payrollamt3";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "RHOT",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto42["m_sql"] = "RHOT";
$proto42["m_srcTableName"] = "payrollamt3";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOT",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto44["m_sql"] = "SHOT";
$proto44["m_srcTableName"] = "payrollamt3";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "RDOT",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto46["m_sql"] = "RDOT";
$proto46["m_srcTableName"] = "payrollamt3";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "RD",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto48["m_sql"] = "RD";
$proto48["m_srcTableName"] = "payrollamt3";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "ND",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto50["m_sql"] = "ND";
$proto50["m_srcTableName"] = "payrollamt3";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "RHND",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto52["m_sql"] = "RHND";
$proto52["m_srcTableName"] = "payrollamt3";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "SHND",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto54["m_sql"] = "SHND";
$proto54["m_srcTableName"] = "payrollamt3";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "RDND",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto56["m_sql"] = "RDND";
$proto56["m_srcTableName"] = "payrollamt3";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "VL",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto58["m_sql"] = "VL";
$proto58["m_srcTableName"] = "payrollamt3";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "SL",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto60["m_sql"] = "SL";
$proto60["m_srcTableName"] = "payrollamt3";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "EL",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto62["m_sql"] = "EL";
$proto62["m_srcTableName"] = "payrollamt3";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "PL",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto64["m_sql"] = "PL";
$proto64["m_srcTableName"] = "payrollamt3";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "TrO",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto66["m_sql"] = "TrO";
$proto66["m_srcTableName"] = "payrollamt3";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "LateMins",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto68["m_sql"] = "LateMins";
$proto68["m_srcTableName"] = "payrollamt3";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "UndertimeMins",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto70["m_sql"] = "UndertimeMins";
$proto70["m_srcTableName"] = "payrollamt3";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "RHolidayHrs",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto72["m_sql"] = "RHolidayHrs";
$proto72["m_srcTableName"] = "payrollamt3";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "SHolidayHrs",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto74["m_sql"] = "SHolidayHrs";
$proto74["m_srcTableName"] = "payrollamt3";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "RegOTHrs",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto76["m_sql"] = "RegOTHrs";
$proto76["m_srcTableName"] = "payrollamt3";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "RHOTHrs",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto78["m_sql"] = "RHOTHrs";
$proto78["m_srcTableName"] = "payrollamt3";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOTHrs",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto80["m_sql"] = "SHOTHRs";
$proto80["m_srcTableName"] = "payrollamt3";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "RDOTHrs",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto82["m_sql"] = "RDOTHrs";
$proto82["m_srcTableName"] = "payrollamt3";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "RDHrs",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto84["m_sql"] = "RDHrs";
$proto84["m_srcTableName"] = "payrollamt3";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "RegNDHrs",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto86["m_sql"] = "RegNDHrs";
$proto86["m_srcTableName"] = "payrollamt3";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "RHNDHrs",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto88["m_sql"] = "RHNDHrs";
$proto88["m_srcTableName"] = "payrollamt3";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "SHNDHrs",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto90["m_sql"] = "SHNDHrs";
$proto90["m_srcTableName"] = "payrollamt3";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "RDNDHrs",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto92["m_sql"] = "RDNDHrs";
$proto92["m_srcTableName"] = "payrollamt3";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "VLBalance",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto94["m_sql"] = "VLBalance";
$proto94["m_srcTableName"] = "payrollamt3";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "SLBalance",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto96["m_sql"] = "SLBalance";
$proto96["m_srcTableName"] = "payrollamt3";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "ELBalance",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto98["m_sql"] = "ELBalance";
$proto98["m_srcTableName"] = "payrollamt3";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "PLBalance",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto100["m_sql"] = "PLBalance";
$proto100["m_srcTableName"] = "payrollamt3";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "LWOP",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto102["m_sql"] = "LWOP";
$proto102["m_srcTableName"] = "payrollamt3";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "LWOPdays",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto104["m_sql"] = "LWOPdays";
$proto104["m_srcTableName"] = "payrollamt3";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "TAdj",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto106["m_sql"] = "TAdj";
$proto106["m_srcTableName"] = "payrollamt3";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "TAdjt",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto108["m_sql"] = "TAdjt";
$proto108["m_srcTableName"] = "payrollamt3";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "TDeduct",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto110["m_sql"] = "TDeduct";
$proto110["m_srcTableName"] = "payrollamt3";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "Ttax",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto112["m_sql"] = "Ttax";
$proto112["m_srcTableName"] = "payrollamt3";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "SSS",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto114["m_sql"] = "SSS";
$proto114["m_srcTableName"] = "payrollamt3";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbig",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto116["m_sql"] = "PagIbig";
$proto116["m_srcTableName"] = "payrollamt3";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "PHIC",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto118["m_sql"] = "PHIC";
$proto118["m_srcTableName"] = "payrollamt3";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "TDeductions",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto120["m_sql"] = "TDeductions";
$proto120["m_srcTableName"] = "payrollamt3";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "Taxable",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto122["m_sql"] = "Taxable";
$proto122["m_srcTableName"] = "payrollamt3";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "Allowance",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto124["m_sql"] = "Allowance";
$proto124["m_srcTableName"] = "payrollamt3";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "AgentShare",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto126["m_sql"] = "AgentShare";
$proto126["m_srcTableName"] = "payrollamt3";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "GrossPay",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto128["m_sql"] = "GrossPay";
$proto128["m_srcTableName"] = "payrollamt3";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "NetPay",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto130["m_sql"] = "NetPay";
$proto130["m_srcTableName"] = "payrollamt3";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "WageType",
	"m_strTable" => "payrollamt3",
	"m_srcTableName" => "payrollamt3"
));

$proto132["m_sql"] = "WageType";
$proto132["m_srcTableName"] = "payrollamt3";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto134=array();
$proto134["m_link"] = "SQLL_MAIN";
			$proto135=array();
$proto135["m_strName"] = "payrollamt3";
$proto135["m_srcTableName"] = "payrollamt3";
$proto135["m_columns"] = array();
$proto135["m_columns"][] = "PtabID";
$proto135["m_columns"][] = "EmployeeID";
$proto135["m_columns"][] = "UserName";
$proto135["m_columns"][] = "Status";
$proto135["m_columns"][] = "FromDate";
$proto135["m_columns"][] = "ToDate";
$proto135["m_columns"][] = "MontlyPaymentPeriods";
$proto135["m_columns"][] = "WageType";
$proto135["m_columns"][] = "EmployeeType";
$proto135["m_columns"][] = "EmployeeStatus";
$proto135["m_columns"][] = "FDivision";
$proto135["m_columns"][] = "EmployerName";
$proto135["m_columns"][] = "PayrollID";
$proto135["m_columns"][] = "Division";
$proto135["m_columns"][] = "Employer";
$proto135["m_columns"][] = "BasicMonthly";
$proto135["m_columns"][] = "SemiMonthly";
$proto135["m_columns"][] = "BasicDaily";
$proto135["m_columns"][] = "DWork";
$proto135["m_columns"][] = "Absent";
$proto135["m_columns"][] = "MoDailyRate";
$proto135["m_columns"][] = "RegPay";
$proto135["m_columns"][] = "LateMins";
$proto135["m_columns"][] = "Late";
$proto135["m_columns"][] = "UndertimeMins";
$proto135["m_columns"][] = "UnderTime";
$proto135["m_columns"][] = "RHolidayHrs";
$proto135["m_columns"][] = "RHoliday";
$proto135["m_columns"][] = "SHolidayHrs";
$proto135["m_columns"][] = "SHoliday";
$proto135["m_columns"][] = "DH";
$proto135["m_columns"][] = "DHpay";
$proto135["m_columns"][] = "RegOTHrs";
$proto135["m_columns"][] = "RegOT";
$proto135["m_columns"][] = "RHOTHrs";
$proto135["m_columns"][] = "RHOT";
$proto135["m_columns"][] = "SHOTHrs";
$proto135["m_columns"][] = "SHOT";
$proto135["m_columns"][] = "SHOTDHrs";
$proto135["m_columns"][] = "SHOTD";
$proto135["m_columns"][] = "DHOT";
$proto135["m_columns"][] = "DHOTpay";
$proto135["m_columns"][] = "NDOTHrs";
$proto135["m_columns"][] = "NDOT";
$proto135["m_columns"][] = "RHNDHrs";
$proto135["m_columns"][] = "RHND";
$proto135["m_columns"][] = "SHNDHrs";
$proto135["m_columns"][] = "SHND";
$proto135["m_columns"][] = "DHND";
$proto135["m_columns"][] = "DHNDpay";
$proto135["m_columns"][] = "DHRDND";
$proto135["m_columns"][] = "DHRDNDpay";
$proto135["m_columns"][] = "RHRDND";
$proto135["m_columns"][] = "RHRDNDpay";
$proto135["m_columns"][] = "SHRDND";
$proto135["m_columns"][] = "SHRDNDpay";
$proto135["m_columns"][] = "RHNDOTHrs";
$proto135["m_columns"][] = "RHNDOT";
$proto135["m_columns"][] = "SHNDOTHrs";
$proto135["m_columns"][] = "SHNDOT";
$proto135["m_columns"][] = "DHNDOT";
$proto135["m_columns"][] = "DHNDOTpay";
$proto135["m_columns"][] = "RDNDOTHrs";
$proto135["m_columns"][] = "RDNDOT";
$proto135["m_columns"][] = "RHRDOT";
$proto135["m_columns"][] = "RHRDOTpay";
$proto135["m_columns"][] = "SHRDOT";
$proto135["m_columns"][] = "SHRDOTpay";
$proto135["m_columns"][] = "SHRDOTD";
$proto135["m_columns"][] = "SHRDOTDpay";
$proto135["m_columns"][] = "DHRDOT";
$proto135["m_columns"][] = "DHRDOTpay";
$proto135["m_columns"][] = "RHRDNDOT";
$proto135["m_columns"][] = "RHRDNDOTpay";
$proto135["m_columns"][] = "SHRDNDOT";
$proto135["m_columns"][] = "SHRDNDOTpay";
$proto135["m_columns"][] = "DHRDNDOT";
$proto135["m_columns"][] = "DHRDNDOTpay";
$proto135["m_columns"][] = "RHRD";
$proto135["m_columns"][] = "RHRDpay";
$proto135["m_columns"][] = "SHRD";
$proto135["m_columns"][] = "SHRDpay";
$proto135["m_columns"][] = "DHRD";
$proto135["m_columns"][] = "DHRDpay";
$proto135["m_columns"][] = "RDOTHrs";
$proto135["m_columns"][] = "RDOT";
$proto135["m_columns"][] = "RegNDHrs";
$proto135["m_columns"][] = "ND";
$proto135["m_columns"][] = "RDHrs";
$proto135["m_columns"][] = "RD";
$proto135["m_columns"][] = "RDNDHrs";
$proto135["m_columns"][] = "RDND";
$proto135["m_columns"][] = "VLDays";
$proto135["m_columns"][] = "VL";
$proto135["m_columns"][] = "SLDays";
$proto135["m_columns"][] = "SL";
$proto135["m_columns"][] = "ELDays";
$proto135["m_columns"][] = "EL";
$proto135["m_columns"][] = "PLDays";
$proto135["m_columns"][] = "PL";
$proto135["m_columns"][] = "TrODays";
$proto135["m_columns"][] = "TrO";
$proto135["m_columns"][] = "VLBalance";
$proto135["m_columns"][] = "SLBalance";
$proto135["m_columns"][] = "ELBalance";
$proto135["m_columns"][] = "PLBalance";
$proto135["m_columns"][] = "LWOP";
$proto135["m_columns"][] = "LWOPdays";
$proto135["m_columns"][] = "TND";
$proto135["m_columns"][] = "TNDOT";
$proto135["m_columns"][] = "TNDHr";
$proto135["m_columns"][] = "TNDOTHr";
$proto135["m_columns"][] = "TAdj";
$proto135["m_columns"][] = "TAdjt";
$proto135["m_columns"][] = "TDeduct";
$proto135["m_columns"][] = "Ttax";
$proto135["m_columns"][] = "SSS";
$proto135["m_columns"][] = "PagIbig";
$proto135["m_columns"][] = "PHIC";
$proto135["m_columns"][] = "TDeductions";
$proto135["m_columns"][] = "Taxable";
$proto135["m_columns"][] = "AllowancePerDay";
$proto135["m_columns"][] = "Allowance";
$proto135["m_columns"][] = "AgencySharePerDay";
$proto135["m_columns"][] = "AgentShare";
$proto135["m_columns"][] = "GrossPay";
$proto135["m_columns"][] = "NetPay";
$proto135["m_columns"][] = "NDMealAllowance";
$proto135["m_columns"][] = "PayDate";
$proto135["m_columns"][] = "ThirToDate";
$proto135["m_columns"][] = "TaxableToDate";
$proto135["m_columns"][] = "TaxToDate";
$obj = new SQLTable($proto135);

$proto134["m_table"] = $obj;
$proto134["m_sql"] = "payrollamt3";
$proto134["m_alias"] = "";
$proto134["m_srcTableName"] = "payrollamt3";
$proto136=array();
$proto136["m_sql"] = "";
$proto136["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto136["m_column"]=$obj;
$proto136["m_contained"] = array();
$proto136["m_strCase"] = "";
$proto136["m_havingmode"] = false;
$proto136["m_inBrackets"] = false;
$proto136["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto136);

$proto134["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto134);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="payrollamt3";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_payrollamt3 = createSqlQuery_payrollamt3();


	
		;

																																																																

$tdatapayrollamt3[".sqlquery"] = $queryData_payrollamt3;

$tableEvents["payrollamt3"] = new eventsBase;
$tdatapayrollamt3[".hasEvents"] = false;

?>