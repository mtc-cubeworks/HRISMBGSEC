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
	$fieldLabelspayrollamt33["English"]["RegOT"] = "Reg OT";
	$fieldToolTipspayrollamt33["English"]["RegOT"] = "";
	$placeHolderspayrollamt33["English"]["RegOT"] = "";
	$fieldLabelspayrollamt33["English"]["RHOT"] = "RH-OT";
	$fieldToolTipspayrollamt33["English"]["RHOT"] = "";
	$placeHolderspayrollamt33["English"]["RHOT"] = "";
	$fieldLabelspayrollamt33["English"]["SHOT"] = "SH-OT";
	$fieldToolTipspayrollamt33["English"]["SHOT"] = "";
	$placeHolderspayrollamt33["English"]["SHOT"] = "";
	$fieldLabelspayrollamt33["English"]["RDOT"] = "RD-OT";
	$fieldToolTipspayrollamt33["English"]["RDOT"] = "";
	$placeHolderspayrollamt33["English"]["RDOT"] = "";
	$fieldLabelspayrollamt33["English"]["RD"] = "Rest Day";
	$fieldToolTipspayrollamt33["English"]["RD"] = "";
	$placeHolderspayrollamt33["English"]["RD"] = "";
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
	$fieldLabelspayrollamt33["English"]["WageType"] = "Wage Type";
	$fieldToolTipspayrollamt33["English"]["WageType"] = "";
	$placeHolderspayrollamt33["English"]["WageType"] = "";
	$fieldLabelspayrollamt33["English"]["LateMins"] = "Late(m)";
	$fieldToolTipspayrollamt33["English"]["LateMins"] = "";
	$placeHolderspayrollamt33["English"]["LateMins"] = "";
	$fieldLabelspayrollamt33["English"]["UndertimeMins"] = "Undertime(m)";
	$fieldToolTipspayrollamt33["English"]["UndertimeMins"] = "";
	$placeHolderspayrollamt33["English"]["UndertimeMins"] = "";
	$fieldLabelspayrollamt33["English"]["RHolidayHrs"] = "RH(h)";
	$fieldToolTipspayrollamt33["English"]["RHolidayHrs"] = "";
	$placeHolderspayrollamt33["English"]["RHolidayHrs"] = "";
	$fieldLabelspayrollamt33["English"]["SHolidayHrs"] = "SH(h)";
	$fieldToolTipspayrollamt33["English"]["SHolidayHrs"] = "";
	$placeHolderspayrollamt33["English"]["SHolidayHrs"] = "";
	$fieldLabelspayrollamt33["English"]["RegOTHrs"] = "Reg OT(h)";
	$fieldToolTipspayrollamt33["English"]["RegOTHrs"] = "";
	$placeHolderspayrollamt33["English"]["RegOTHrs"] = "";
	$fieldLabelspayrollamt33["English"]["RHOTHrs"] = "RH-OT(h)";
	$fieldToolTipspayrollamt33["English"]["RHOTHrs"] = "";
	$placeHolderspayrollamt33["English"]["RHOTHrs"] = "";
	$fieldLabelspayrollamt33["English"]["SHOTHrs"] = "SH-OT(h)";
	$fieldToolTipspayrollamt33["English"]["SHOTHrs"] = "";
	$placeHolderspayrollamt33["English"]["SHOTHrs"] = "";
	$fieldLabelspayrollamt33["English"]["RDOTHrs"] = "RD-OT(h)";
	$fieldToolTipspayrollamt33["English"]["RDOTHrs"] = "";
	$placeHolderspayrollamt33["English"]["RDOTHrs"] = "";
	$fieldLabelspayrollamt33["English"]["RDHrs"] = "RD(h)";
	$fieldToolTipspayrollamt33["English"]["RDHrs"] = "";
	$placeHolderspayrollamt33["English"]["RDHrs"] = "";
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
	$fieldLabelspayrollamt33["English"]["LWOP"] = "LWOP";
	$fieldToolTipspayrollamt33["English"]["LWOP"] = "";
	$placeHolderspayrollamt33["English"]["LWOP"] = "";
	$fieldLabelspayrollamt33["English"]["LWOPdays"] = "LWOP(d)";
	$fieldToolTipspayrollamt33["English"]["LWOPdays"] = "";
	$placeHolderspayrollamt33["English"]["LWOPdays"] = "";
	$fieldLabelspayrollamt33["English"]["TAdj"] = "TAdj-NonTax";
	$fieldToolTipspayrollamt33["English"]["TAdj"] = "";
	$placeHolderspayrollamt33["English"]["TAdj"] = "";
	$fieldLabelspayrollamt33["English"]["TAdjt"] = "TAdj-Tax";
	$fieldToolTipspayrollamt33["English"]["TAdjt"] = "";
	$placeHolderspayrollamt33["English"]["TAdjt"] = "";
	$fieldLabelspayrollamt33["English"]["Ttax"] = "Ttax";
	$fieldToolTipspayrollamt33["English"]["Ttax"] = "";
	$placeHolderspayrollamt33["English"]["Ttax"] = "";
	$fieldLabelspayrollamt33["English"]["SSS"] = "SSS";
	$fieldToolTipspayrollamt33["English"]["SSS"] = "";
	$placeHolderspayrollamt33["English"]["SSS"] = "";
	$fieldLabelspayrollamt33["English"]["PagIbig"] = "Pag-Ibig";
	$fieldToolTipspayrollamt33["English"]["PagIbig"] = "";
	$placeHolderspayrollamt33["English"]["PagIbig"] = "";
	$fieldLabelspayrollamt33["English"]["PHIC"] = "PhilHealth";
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
	$fieldLabelspayrollamt33["English"]["TND"] = "TND";
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
	$fieldLabelspayrollamt33["English"]["DHOTpay"] = "DH-OT";
	$fieldToolTipspayrollamt33["English"]["DHOTpay"] = "";
	$placeHolderspayrollamt33["English"]["DHOTpay"] = "";
	$fieldLabelspayrollamt33["English"]["OTHrs"] = "Total OT(h)";
	$fieldToolTipspayrollamt33["English"]["OTHrs"] = "";
	$placeHolderspayrollamt33["English"]["OTHrs"] = "";
	$fieldLabelspayrollamt33["English"]["TNDHr"] = "TND(h)";
	$fieldToolTipspayrollamt33["English"]["TNDHr"] = "";
	$placeHolderspayrollamt33["English"]["TNDHr"] = "";
	$fieldLabelspayrollamt33["English"]["ThirToDate"] = "13th Month To-Date";
	$fieldToolTipspayrollamt33["English"]["ThirToDate"] = "";
	$placeHolderspayrollamt33["English"]["ThirToDate"] = "";
	$fieldLabelspayrollamt33["English"]["TaxableToDate"] = "Taxable To-Date";
	$fieldToolTipspayrollamt33["English"]["TaxableToDate"] = "";
	$placeHolderspayrollamt33["English"]["TaxableToDate"] = "";
	$fieldLabelspayrollamt33["English"]["TaxToDate"] = "Tax To-Date";
	$fieldToolTipspayrollamt33["English"]["TaxToDate"] = "";
	$placeHolderspayrollamt33["English"]["TaxToDate"] = "";
	$fieldLabelspayrollamt33["English"]["RHRD"] = "RH-RD(h)";
	$fieldToolTipspayrollamt33["English"]["RHRD"] = "";
	$placeHolderspayrollamt33["English"]["RHRD"] = "";
	$fieldLabelspayrollamt33["English"]["RHRDpay"] = "RH-RD";
	$fieldToolTipspayrollamt33["English"]["RHRDpay"] = "";
	$placeHolderspayrollamt33["English"]["RHRDpay"] = "";
	$fieldLabelspayrollamt33["English"]["DH"] = "DH(h)";
	$fieldToolTipspayrollamt33["English"]["DH"] = "";
	$placeHolderspayrollamt33["English"]["DH"] = "";
	$fieldLabelspayrollamt33["English"]["TNDOT"] = "TND-OT";
	$fieldToolTipspayrollamt33["English"]["TNDOT"] = "";
	$placeHolderspayrollamt33["English"]["TNDOT"] = "";
	$fieldLabelspayrollamt33["English"]["TNDOTHr"] = "TND-OT(h)";
	$fieldToolTipspayrollamt33["English"]["TNDOTHr"] = "";
	$placeHolderspayrollamt33["English"]["TNDOTHr"] = "";
	$fieldLabelspayrollamt33["English"]["DHOT"] = "DH-OT(h)";
	$fieldToolTipspayrollamt33["English"]["DHOT"] = "";
	$placeHolderspayrollamt33["English"]["DHOT"] = "";
	$fieldLabelspayrollamt33["English"]["RHRDOT"] = "RH-RD-OT(h)";
	$fieldToolTipspayrollamt33["English"]["RHRDOT"] = "";
	$placeHolderspayrollamt33["English"]["RHRDOT"] = "";
	$fieldLabelspayrollamt33["English"]["RHRDOTpay"] = "RH-RD-OT";
	$fieldToolTipspayrollamt33["English"]["RHRDOTpay"] = "";
	$placeHolderspayrollamt33["English"]["RHRDOTpay"] = "";
	$fieldLabelspayrollamt33["English"]["SHRDOT"] = "SH-RD-OT(h)";
	$fieldToolTipspayrollamt33["English"]["SHRDOT"] = "";
	$placeHolderspayrollamt33["English"]["SHRDOT"] = "";
	$fieldLabelspayrollamt33["English"]["SHRDOTpay"] = "SH-RD-OT";
	$fieldToolTipspayrollamt33["English"]["SHRDOTpay"] = "";
	$placeHolderspayrollamt33["English"]["SHRDOTpay"] = "";
	$fieldLabelspayrollamt33["English"]["DHRDOT"] = "DH-RD-OT(h)";
	$fieldToolTipspayrollamt33["English"]["DHRDOT"] = "";
	$placeHolderspayrollamt33["English"]["DHRDOT"] = "";
	$fieldLabelspayrollamt33["English"]["DHRDOTpay"] = "DH-RD-OT";
	$fieldToolTipspayrollamt33["English"]["DHRDOTpay"] = "";
	$placeHolderspayrollamt33["English"]["DHRDOTpay"] = "";
	$fieldLabelspayrollamt33["English"]["SHRD"] = "SH-RD(h)";
	$fieldToolTipspayrollamt33["English"]["SHRD"] = "";
	$placeHolderspayrollamt33["English"]["SHRD"] = "";
	$fieldLabelspayrollamt33["English"]["SHRDpay"] = "SH-RD";
	$fieldToolTipspayrollamt33["English"]["SHRDpay"] = "";
	$placeHolderspayrollamt33["English"]["SHRDpay"] = "";
	$fieldLabelspayrollamt33["English"]["DHRD"] = "DH-RD(h)";
	$fieldToolTipspayrollamt33["English"]["DHRD"] = "";
	$placeHolderspayrollamt33["English"]["DHRD"] = "";
	$fieldLabelspayrollamt33["English"]["DHRDpay"] = "DH-RD";
	$fieldToolTipspayrollamt33["English"]["DHRDpay"] = "";
	$placeHolderspayrollamt33["English"]["DHRDpay"] = "";
	$fieldLabelspayrollamt33["English"]["DHpay"] = "DHoliday";
	$fieldToolTipspayrollamt33["English"]["DHpay"] = "";
	$placeHolderspayrollamt33["English"]["DHpay"] = "";
	if (count($fieldToolTipspayrollamt33["English"]))
		$tdatapayrollamt33[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspayrollamt33[""] = array();
	$fieldToolTipspayrollamt33[""] = array();
	$placeHolderspayrollamt33[""] = array();
	$pageTitlespayrollamt33[""] = array();
	$fieldLabelspayrollamt33[""]["DHOTpay"] = "DHOTpay";
	$fieldToolTipspayrollamt33[""]["DHOTpay"] = "";
	$placeHolderspayrollamt33[""]["DHOTpay"] = "";
	$fieldLabelspayrollamt33[""]["OTHrs"] = "OTHrs";
	$fieldToolTipspayrollamt33[""]["OTHrs"] = "";
	$placeHolderspayrollamt33[""]["OTHrs"] = "";
	$fieldLabelspayrollamt33[""]["TNDHr"] = "TNDHr";
	$fieldToolTipspayrollamt33[""]["TNDHr"] = "";
	$placeHolderspayrollamt33[""]["TNDHr"] = "";
	$fieldLabelspayrollamt33[""]["ThirToDate"] = "Thir To Date";
	$fieldToolTipspayrollamt33[""]["ThirToDate"] = "";
	$placeHolderspayrollamt33[""]["ThirToDate"] = "";
	$fieldLabelspayrollamt33[""]["TaxableToDate"] = "Taxable To Date";
	$fieldToolTipspayrollamt33[""]["TaxableToDate"] = "";
	$placeHolderspayrollamt33[""]["TaxableToDate"] = "";
	$fieldLabelspayrollamt33[""]["TaxToDate"] = "Tax To Date";
	$fieldToolTipspayrollamt33[""]["TaxToDate"] = "";
	$placeHolderspayrollamt33[""]["TaxToDate"] = "";
	$fieldLabelspayrollamt33[""]["RHRD"] = "RHRD";
	$fieldToolTipspayrollamt33[""]["RHRD"] = "";
	$placeHolderspayrollamt33[""]["RHRD"] = "";
	$fieldLabelspayrollamt33[""]["RHRDpay"] = "RHRDpay";
	$fieldToolTipspayrollamt33[""]["RHRDpay"] = "";
	$placeHolderspayrollamt33[""]["RHRDpay"] = "";
	$fieldLabelspayrollamt33[""]["DH"] = "DH";
	$fieldToolTipspayrollamt33[""]["DH"] = "";
	$placeHolderspayrollamt33[""]["DH"] = "";
	$fieldLabelspayrollamt33[""]["TNDOT"] = "TNDOT";
	$fieldToolTipspayrollamt33[""]["TNDOT"] = "";
	$placeHolderspayrollamt33[""]["TNDOT"] = "";
	$fieldLabelspayrollamt33[""]["TNDOTHr"] = "TNDOTHr";
	$fieldToolTipspayrollamt33[""]["TNDOTHr"] = "";
	$placeHolderspayrollamt33[""]["TNDOTHr"] = "";
	$fieldLabelspayrollamt33[""]["DHOT"] = "DHOT";
	$fieldToolTipspayrollamt33[""]["DHOT"] = "";
	$placeHolderspayrollamt33[""]["DHOT"] = "";
	$fieldLabelspayrollamt33[""]["RHRDOT"] = "RHRDOT";
	$fieldToolTipspayrollamt33[""]["RHRDOT"] = "";
	$placeHolderspayrollamt33[""]["RHRDOT"] = "";
	$fieldLabelspayrollamt33[""]["RHRDOTpay"] = "RHRDOTpay";
	$fieldToolTipspayrollamt33[""]["RHRDOTpay"] = "";
	$placeHolderspayrollamt33[""]["RHRDOTpay"] = "";
	$fieldLabelspayrollamt33[""]["SHRDOT"] = "SHRDOT";
	$fieldToolTipspayrollamt33[""]["SHRDOT"] = "";
	$placeHolderspayrollamt33[""]["SHRDOT"] = "";
	$fieldLabelspayrollamt33[""]["SHRDOTpay"] = "SHRDOTpay";
	$fieldToolTipspayrollamt33[""]["SHRDOTpay"] = "";
	$placeHolderspayrollamt33[""]["SHRDOTpay"] = "";
	$fieldLabelspayrollamt33[""]["DHRDOT"] = "DHRDOT";
	$fieldToolTipspayrollamt33[""]["DHRDOT"] = "";
	$placeHolderspayrollamt33[""]["DHRDOT"] = "";
	$fieldLabelspayrollamt33[""]["DHRDOTpay"] = "DHRDOTpay";
	$fieldToolTipspayrollamt33[""]["DHRDOTpay"] = "";
	$placeHolderspayrollamt33[""]["DHRDOTpay"] = "";
	$fieldLabelspayrollamt33[""]["SHRD"] = "SHRD";
	$fieldToolTipspayrollamt33[""]["SHRD"] = "";
	$placeHolderspayrollamt33[""]["SHRD"] = "";
	$fieldLabelspayrollamt33[""]["SHRDpay"] = "SHRDpay";
	$fieldToolTipspayrollamt33[""]["SHRDpay"] = "";
	$placeHolderspayrollamt33[""]["SHRDpay"] = "";
	$fieldLabelspayrollamt33[""]["DHRD"] = "DHRD";
	$fieldToolTipspayrollamt33[""]["DHRD"] = "";
	$placeHolderspayrollamt33[""]["DHRD"] = "";
	$fieldLabelspayrollamt33[""]["DHRDpay"] = "DHRDpay";
	$fieldToolTipspayrollamt33[""]["DHRDpay"] = "";
	$placeHolderspayrollamt33[""]["DHRDpay"] = "";
	$fieldLabelspayrollamt33[""]["DHpay"] = "DHpay";
	$fieldToolTipspayrollamt33[""]["DHpay"] = "";
	$placeHolderspayrollamt33[""]["DHpay"] = "";
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
		
$tdatapayrollamt33[".view"] = true;


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

$tdatapayrollamt33[".allSearchFields"][] = "FromDate";
	$tdatapayrollamt33[".allSearchFields"][] = "ToDate";
	$tdatapayrollamt33[".allSearchFields"][] = "EmployeeID";
	$tdatapayrollamt33[".allSearchFields"][] = "UserName";
	$tdatapayrollamt33[".allSearchFields"][] = "Status";
	$tdatapayrollamt33[".allSearchFields"][] = "Employer";
	$tdatapayrollamt33[".allSearchFields"][] = "Division";
	$tdatapayrollamt33[".allSearchFields"][] = "DHOT";
	$tdatapayrollamt33[".allSearchFields"][] = "DHOTpay";
	$tdatapayrollamt33[".allSearchFields"][] = "RHRDOT";
	$tdatapayrollamt33[".allSearchFields"][] = "RHRDOTpay";
	$tdatapayrollamt33[".allSearchFields"][] = "SHRDOT";
	$tdatapayrollamt33[".allSearchFields"][] = "SHRDOTpay";
	$tdatapayrollamt33[".allSearchFields"][] = "DHRDOT";
	$tdatapayrollamt33[".allSearchFields"][] = "DHRDOTpay";
	$tdatapayrollamt33[".allSearchFields"][] = "TNDOTHr";
	$tdatapayrollamt33[".allSearchFields"][] = "TNDOT";
	$tdatapayrollamt33[".allSearchFields"][] = "DH";
	$tdatapayrollamt33[".allSearchFields"][] = "DHpay";
	$tdatapayrollamt33[".allSearchFields"][] = "RHRD";
	$tdatapayrollamt33[".allSearchFields"][] = "RHRDpay";
	$tdatapayrollamt33[".allSearchFields"][] = "SHRD";
	$tdatapayrollamt33[".allSearchFields"][] = "SHRDpay";
	$tdatapayrollamt33[".allSearchFields"][] = "DHRD";
	$tdatapayrollamt33[".allSearchFields"][] = "DHRDpay";
	$tdatapayrollamt33[".allSearchFields"][] = "TNDHr";
	$tdatapayrollamt33[".allSearchFields"][] = "OTHrs";
	$tdatapayrollamt33[".allSearchFields"][] = "TaxableToDate";
	$tdatapayrollamt33[".allSearchFields"][] = "ThirToDate";
	$tdatapayrollamt33[".allSearchFields"][] = "TaxToDate";
	

$tdatapayrollamt33[".googleLikeFields"] = array();
$tdatapayrollamt33[".googleLikeFields"][] = "DHOT";
$tdatapayrollamt33[".googleLikeFields"][] = "DHOTpay";
$tdatapayrollamt33[".googleLikeFields"][] = "RHRDOT";
$tdatapayrollamt33[".googleLikeFields"][] = "RHRDOTpay";
$tdatapayrollamt33[".googleLikeFields"][] = "SHRDOT";
$tdatapayrollamt33[".googleLikeFields"][] = "SHRDOTpay";
$tdatapayrollamt33[".googleLikeFields"][] = "DHRDOT";
$tdatapayrollamt33[".googleLikeFields"][] = "DHRDOTpay";
$tdatapayrollamt33[".googleLikeFields"][] = "TNDOTHr";
$tdatapayrollamt33[".googleLikeFields"][] = "TNDOT";
$tdatapayrollamt33[".googleLikeFields"][] = "DH";
$tdatapayrollamt33[".googleLikeFields"][] = "DHpay";
$tdatapayrollamt33[".googleLikeFields"][] = "RHRD";
$tdatapayrollamt33[".googleLikeFields"][] = "RHRDpay";
$tdatapayrollamt33[".googleLikeFields"][] = "SHRD";
$tdatapayrollamt33[".googleLikeFields"][] = "SHRDpay";
$tdatapayrollamt33[".googleLikeFields"][] = "DHRD";
$tdatapayrollamt33[".googleLikeFields"][] = "DHRDpay";
$tdatapayrollamt33[".googleLikeFields"][] = "TNDHr";
$tdatapayrollamt33[".googleLikeFields"][] = "OTHrs";
$tdatapayrollamt33[".googleLikeFields"][] = "ThirToDate";
$tdatapayrollamt33[".googleLikeFields"][] = "TaxableToDate";
$tdatapayrollamt33[".googleLikeFields"][] = "TaxToDate";

$tdatapayrollamt33[".panelSearchFields"] = array();
$tdatapayrollamt33[".searchPanelOptions"] = array();
$tdatapayrollamt33[".panelSearchFields"][] = "FromDate";
	$tdatapayrollamt33[".panelSearchFields"][] = "ToDate";
	$tdatapayrollamt33[".panelSearchFields"][] = "UserName";
	
$tdatapayrollamt33[".advSearchFields"] = array();
$tdatapayrollamt33[".advSearchFields"][] = "FromDate";
$tdatapayrollamt33[".advSearchFields"][] = "ToDate";
$tdatapayrollamt33[".advSearchFields"][] = "EmployeeID";
$tdatapayrollamt33[".advSearchFields"][] = "UserName";
$tdatapayrollamt33[".advSearchFields"][] = "Status";
$tdatapayrollamt33[".advSearchFields"][] = "Employer";
$tdatapayrollamt33[".advSearchFields"][] = "Division";
$tdatapayrollamt33[".advSearchFields"][] = "DHOT";
$tdatapayrollamt33[".advSearchFields"][] = "DHOTpay";
$tdatapayrollamt33[".advSearchFields"][] = "RHRDOT";
$tdatapayrollamt33[".advSearchFields"][] = "RHRDOTpay";
$tdatapayrollamt33[".advSearchFields"][] = "SHRDOT";
$tdatapayrollamt33[".advSearchFields"][] = "SHRDOTpay";
$tdatapayrollamt33[".advSearchFields"][] = "DHRDOT";
$tdatapayrollamt33[".advSearchFields"][] = "DHRDOTpay";
$tdatapayrollamt33[".advSearchFields"][] = "TNDOTHr";
$tdatapayrollamt33[".advSearchFields"][] = "TNDOT";
$tdatapayrollamt33[".advSearchFields"][] = "DH";
$tdatapayrollamt33[".advSearchFields"][] = "DHpay";
$tdatapayrollamt33[".advSearchFields"][] = "RHRD";
$tdatapayrollamt33[".advSearchFields"][] = "RHRDpay";
$tdatapayrollamt33[".advSearchFields"][] = "SHRD";
$tdatapayrollamt33[".advSearchFields"][] = "SHRDpay";
$tdatapayrollamt33[".advSearchFields"][] = "DHRD";
$tdatapayrollamt33[".advSearchFields"][] = "DHRDpay";
$tdatapayrollamt33[".advSearchFields"][] = "TNDHr";
$tdatapayrollamt33[".advSearchFields"][] = "OTHrs";
$tdatapayrollamt33[".advSearchFields"][] = "TaxableToDate";
$tdatapayrollamt33[".advSearchFields"][] = "ThirToDate";
$tdatapayrollamt33[".advSearchFields"][] = "TaxToDate";

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
	"fName" => "BasicMonthly",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "BasicDaily",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "Absent",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "RegPay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "LateMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "Late",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "UndertimeMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "UnderTime",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "LWOPdays",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "LWOP",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "RegOTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "RegOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "RHOTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "RHOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "SHOTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "SHOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "DHOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "DHOTpay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "RDOTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "RDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "RHRDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "RHRDOTpay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "SHRDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "SHRDOTpay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "DHRDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "DHRDOTpay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "TNDOTHr",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "TNDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "RHolidayHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "RHoliday",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "SHolidayHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "SHoliday",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "DH",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "DHpay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "RDHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "RD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "RHRD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "RHRDpay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "SHRD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "SHRDpay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "DHRD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "DHRDpay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "TNDHr",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "TND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "VLDays",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "VL",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "SLDays",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "SL",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "ELDays",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "EL",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "PLDays",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "PL",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "VLBalance",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "SLBalance",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "ELBalance",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "PLBalance",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "OTHrs",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "OT",
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
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "TaxableToDate",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "ThirToDate",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollamt33[".totalsFields"][] = array(
	"fName" => "TaxToDate",
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

$tdatapayrollamt33[".sqlHead"] = "SELECT PtabID,  EmployeeID,  UserName,  Status,  Employer,  Division,  WageType,  FromDate,  ToDate,  BasicMonthly,  BasicDaily,  DWork,  Absent,  RegPay,  LateMins,  Late,  UndertimeMins,  UnderTime,  LWOPdays,  LWOP,  RegOTHrs,  RegOT,  RHOTHrs,  RHOT,  SHOTHrs,  SHOT,  DHOT,  DHOTpay,  RDOTHrs,  RDOT,  RHRDOT,  RHRDOTpay,  SHRDOT,  SHRDOTpay,  DHRDOT,  DHRDOTpay,  TNDOTHr,  TNDOT,  RHolidayHrs,  RHoliday,  SHolidayHrs,  SHoliday,  DH,  DHpay,  RDHrs,  RD,  RHRD,  RHRDpay,  SHRD,  SHRDpay,  DHRD,  DHRDpay,  TNDHr,  TND,  VLDays,  VL,  SLDays,  SL,  ELDays,  EL,  PLDays,  PL,  VLBalance,  SLBalance,  ELBalance,  PLBalance,  OTHrs,  OT,  TAdj,  TAdjt,  Ttax,  SSS,  PagIbig,  PHIC,  TDeductions,  Taxable,  GrossPay,  NetPay,  ThirToDate,  TaxableToDate,  TaxToDate";
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
$tdatapayrollamt33[".listFields"][] = "RegPay";
$tdatapayrollamt33[".listFields"][] = "LateMins";
$tdatapayrollamt33[".listFields"][] = "Late";
$tdatapayrollamt33[".listFields"][] = "UndertimeMins";
$tdatapayrollamt33[".listFields"][] = "UnderTime";
$tdatapayrollamt33[".listFields"][] = "LWOPdays";
$tdatapayrollamt33[".listFields"][] = "LWOP";
$tdatapayrollamt33[".listFields"][] = "RegOTHrs";
$tdatapayrollamt33[".listFields"][] = "RegOT";
$tdatapayrollamt33[".listFields"][] = "RHOTHrs";
$tdatapayrollamt33[".listFields"][] = "RHOT";
$tdatapayrollamt33[".listFields"][] = "SHOTHrs";
$tdatapayrollamt33[".listFields"][] = "SHOT";
$tdatapayrollamt33[".listFields"][] = "DHOT";
$tdatapayrollamt33[".listFields"][] = "DHOTpay";
$tdatapayrollamt33[".listFields"][] = "RDOTHrs";
$tdatapayrollamt33[".listFields"][] = "RDOT";
$tdatapayrollamt33[".listFields"][] = "RHRDOT";
$tdatapayrollamt33[".listFields"][] = "RHRDOTpay";
$tdatapayrollamt33[".listFields"][] = "SHRDOT";
$tdatapayrollamt33[".listFields"][] = "SHRDOTpay";
$tdatapayrollamt33[".listFields"][] = "DHRDOT";
$tdatapayrollamt33[".listFields"][] = "DHRDOTpay";
$tdatapayrollamt33[".listFields"][] = "TNDOTHr";
$tdatapayrollamt33[".listFields"][] = "TNDOT";
$tdatapayrollamt33[".listFields"][] = "RHolidayHrs";
$tdatapayrollamt33[".listFields"][] = "RHoliday";
$tdatapayrollamt33[".listFields"][] = "SHolidayHrs";
$tdatapayrollamt33[".listFields"][] = "SHoliday";
$tdatapayrollamt33[".listFields"][] = "DH";
$tdatapayrollamt33[".listFields"][] = "DHpay";
$tdatapayrollamt33[".listFields"][] = "RDHrs";
$tdatapayrollamt33[".listFields"][] = "RD";
$tdatapayrollamt33[".listFields"][] = "RHRD";
$tdatapayrollamt33[".listFields"][] = "RHRDpay";
$tdatapayrollamt33[".listFields"][] = "SHRD";
$tdatapayrollamt33[".listFields"][] = "SHRDpay";
$tdatapayrollamt33[".listFields"][] = "DHRD";
$tdatapayrollamt33[".listFields"][] = "DHRDpay";
$tdatapayrollamt33[".listFields"][] = "TNDHr";
$tdatapayrollamt33[".listFields"][] = "TND";
$tdatapayrollamt33[".listFields"][] = "VLDays";
$tdatapayrollamt33[".listFields"][] = "VL";
$tdatapayrollamt33[".listFields"][] = "SLDays";
$tdatapayrollamt33[".listFields"][] = "SL";
$tdatapayrollamt33[".listFields"][] = "ELDays";
$tdatapayrollamt33[".listFields"][] = "EL";
$tdatapayrollamt33[".listFields"][] = "PLDays";
$tdatapayrollamt33[".listFields"][] = "PL";
$tdatapayrollamt33[".listFields"][] = "VLBalance";
$tdatapayrollamt33[".listFields"][] = "SLBalance";
$tdatapayrollamt33[".listFields"][] = "ELBalance";
$tdatapayrollamt33[".listFields"][] = "PLBalance";
$tdatapayrollamt33[".listFields"][] = "OTHrs";
$tdatapayrollamt33[".listFields"][] = "OT";
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
$tdatapayrollamt33[".listFields"][] = "TaxableToDate";
$tdatapayrollamt33[".listFields"][] = "ThirToDate";
$tdatapayrollamt33[".listFields"][] = "TaxToDate";

$tdatapayrollamt33[".hideMobileList"] = array();


$tdatapayrollamt33[".viewFields"] = array();
$tdatapayrollamt33[".viewFields"][] = "PtabID";
$tdatapayrollamt33[".viewFields"][] = "FromDate";
$tdatapayrollamt33[".viewFields"][] = "ToDate";
$tdatapayrollamt33[".viewFields"][] = "EmployeeID";
$tdatapayrollamt33[".viewFields"][] = "UserName";
$tdatapayrollamt33[".viewFields"][] = "Status";
$tdatapayrollamt33[".viewFields"][] = "Employer";
$tdatapayrollamt33[".viewFields"][] = "Division";
$tdatapayrollamt33[".viewFields"][] = "WageType";
$tdatapayrollamt33[".viewFields"][] = "BasicMonthly";
$tdatapayrollamt33[".viewFields"][] = "BasicDaily";
$tdatapayrollamt33[".viewFields"][] = "DWork";
$tdatapayrollamt33[".viewFields"][] = "Absent";
$tdatapayrollamt33[".viewFields"][] = "RegPay";
$tdatapayrollamt33[".viewFields"][] = "LateMins";
$tdatapayrollamt33[".viewFields"][] = "Late";
$tdatapayrollamt33[".viewFields"][] = "UndertimeMins";
$tdatapayrollamt33[".viewFields"][] = "UnderTime";
$tdatapayrollamt33[".viewFields"][] = "LWOPdays";
$tdatapayrollamt33[".viewFields"][] = "LWOP";
$tdatapayrollamt33[".viewFields"][] = "RegOTHrs";
$tdatapayrollamt33[".viewFields"][] = "RegOT";
$tdatapayrollamt33[".viewFields"][] = "RHOTHrs";
$tdatapayrollamt33[".viewFields"][] = "RHOT";
$tdatapayrollamt33[".viewFields"][] = "SHOTHrs";
$tdatapayrollamt33[".viewFields"][] = "SHOT";
$tdatapayrollamt33[".viewFields"][] = "DHOT";
$tdatapayrollamt33[".viewFields"][] = "DHOTpay";
$tdatapayrollamt33[".viewFields"][] = "RDOTHrs";
$tdatapayrollamt33[".viewFields"][] = "RDOT";
$tdatapayrollamt33[".viewFields"][] = "RHRDOT";
$tdatapayrollamt33[".viewFields"][] = "RHRDOTpay";
$tdatapayrollamt33[".viewFields"][] = "SHRDOT";
$tdatapayrollamt33[".viewFields"][] = "SHRDOTpay";
$tdatapayrollamt33[".viewFields"][] = "DHRDOT";
$tdatapayrollamt33[".viewFields"][] = "DHRDOTpay";
$tdatapayrollamt33[".viewFields"][] = "TNDOTHr";
$tdatapayrollamt33[".viewFields"][] = "TNDOT";
$tdatapayrollamt33[".viewFields"][] = "RHolidayHrs";
$tdatapayrollamt33[".viewFields"][] = "RHoliday";
$tdatapayrollamt33[".viewFields"][] = "SHolidayHrs";
$tdatapayrollamt33[".viewFields"][] = "SHoliday";
$tdatapayrollamt33[".viewFields"][] = "DH";
$tdatapayrollamt33[".viewFields"][] = "DHpay";
$tdatapayrollamt33[".viewFields"][] = "RDHrs";
$tdatapayrollamt33[".viewFields"][] = "RD";
$tdatapayrollamt33[".viewFields"][] = "RHRD";
$tdatapayrollamt33[".viewFields"][] = "RHRDpay";
$tdatapayrollamt33[".viewFields"][] = "SHRD";
$tdatapayrollamt33[".viewFields"][] = "SHRDpay";
$tdatapayrollamt33[".viewFields"][] = "DHRD";
$tdatapayrollamt33[".viewFields"][] = "DHRDpay";
$tdatapayrollamt33[".viewFields"][] = "TNDHr";
$tdatapayrollamt33[".viewFields"][] = "TND";
$tdatapayrollamt33[".viewFields"][] = "VLDays";
$tdatapayrollamt33[".viewFields"][] = "VL";
$tdatapayrollamt33[".viewFields"][] = "SLDays";
$tdatapayrollamt33[".viewFields"][] = "SL";
$tdatapayrollamt33[".viewFields"][] = "ELDays";
$tdatapayrollamt33[".viewFields"][] = "EL";
$tdatapayrollamt33[".viewFields"][] = "PLDays";
$tdatapayrollamt33[".viewFields"][] = "PL";
$tdatapayrollamt33[".viewFields"][] = "VLBalance";
$tdatapayrollamt33[".viewFields"][] = "SLBalance";
$tdatapayrollamt33[".viewFields"][] = "ELBalance";
$tdatapayrollamt33[".viewFields"][] = "PLBalance";
$tdatapayrollamt33[".viewFields"][] = "OTHrs";
$tdatapayrollamt33[".viewFields"][] = "OT";
$tdatapayrollamt33[".viewFields"][] = "TAdj";
$tdatapayrollamt33[".viewFields"][] = "TAdjt";
$tdatapayrollamt33[".viewFields"][] = "Ttax";
$tdatapayrollamt33[".viewFields"][] = "SSS";
$tdatapayrollamt33[".viewFields"][] = "PagIbig";
$tdatapayrollamt33[".viewFields"][] = "PHIC";
$tdatapayrollamt33[".viewFields"][] = "TDeductions";
$tdatapayrollamt33[".viewFields"][] = "Taxable";
$tdatapayrollamt33[".viewFields"][] = "GrossPay";
$tdatapayrollamt33[".viewFields"][] = "NetPay";
$tdatapayrollamt33[".viewFields"][] = "TaxableToDate";
$tdatapayrollamt33[".viewFields"][] = "ThirToDate";
$tdatapayrollamt33[".viewFields"][] = "TaxToDate";

$tdatapayrollamt33[".addFields"] = array();

$tdatapayrollamt33[".masterListFields"] = array();
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
$tdatapayrollamt33[".masterListFields"][] = "LWOPdays";
$tdatapayrollamt33[".masterListFields"][] = "LWOP";
$tdatapayrollamt33[".masterListFields"][] = "RegOTHrs";
$tdatapayrollamt33[".masterListFields"][] = "RegOT";
$tdatapayrollamt33[".masterListFields"][] = "RHOTHrs";
$tdatapayrollamt33[".masterListFields"][] = "RHOT";
$tdatapayrollamt33[".masterListFields"][] = "SHOTHrs";
$tdatapayrollamt33[".masterListFields"][] = "SHOT";
$tdatapayrollamt33[".masterListFields"][] = "DHOT";
$tdatapayrollamt33[".masterListFields"][] = "DHOTpay";
$tdatapayrollamt33[".masterListFields"][] = "RDOTHrs";
$tdatapayrollamt33[".masterListFields"][] = "RDOT";
$tdatapayrollamt33[".masterListFields"][] = "RHRDOT";
$tdatapayrollamt33[".masterListFields"][] = "RHRDOTpay";
$tdatapayrollamt33[".masterListFields"][] = "SHRDOT";
$tdatapayrollamt33[".masterListFields"][] = "SHRDOTpay";
$tdatapayrollamt33[".masterListFields"][] = "DHRDOT";
$tdatapayrollamt33[".masterListFields"][] = "DHRDOTpay";
$tdatapayrollamt33[".masterListFields"][] = "TNDOTHr";
$tdatapayrollamt33[".masterListFields"][] = "TNDOT";
$tdatapayrollamt33[".masterListFields"][] = "RHolidayHrs";
$tdatapayrollamt33[".masterListFields"][] = "RHoliday";
$tdatapayrollamt33[".masterListFields"][] = "SHolidayHrs";
$tdatapayrollamt33[".masterListFields"][] = "SHoliday";
$tdatapayrollamt33[".masterListFields"][] = "DH";
$tdatapayrollamt33[".masterListFields"][] = "DHpay";
$tdatapayrollamt33[".masterListFields"][] = "RDHrs";
$tdatapayrollamt33[".masterListFields"][] = "RD";
$tdatapayrollamt33[".masterListFields"][] = "RHRD";
$tdatapayrollamt33[".masterListFields"][] = "RHRDpay";
$tdatapayrollamt33[".masterListFields"][] = "SHRD";
$tdatapayrollamt33[".masterListFields"][] = "SHRDpay";
$tdatapayrollamt33[".masterListFields"][] = "DHRD";
$tdatapayrollamt33[".masterListFields"][] = "DHRDpay";
$tdatapayrollamt33[".masterListFields"][] = "TNDHr";
$tdatapayrollamt33[".masterListFields"][] = "TND";
$tdatapayrollamt33[".masterListFields"][] = "VLDays";
$tdatapayrollamt33[".masterListFields"][] = "VL";
$tdatapayrollamt33[".masterListFields"][] = "SLDays";
$tdatapayrollamt33[".masterListFields"][] = "SL";
$tdatapayrollamt33[".masterListFields"][] = "ELDays";
$tdatapayrollamt33[".masterListFields"][] = "EL";
$tdatapayrollamt33[".masterListFields"][] = "PLDays";
$tdatapayrollamt33[".masterListFields"][] = "PL";
$tdatapayrollamt33[".masterListFields"][] = "VLBalance";
$tdatapayrollamt33[".masterListFields"][] = "SLBalance";
$tdatapayrollamt33[".masterListFields"][] = "ELBalance";
$tdatapayrollamt33[".masterListFields"][] = "PLBalance";
$tdatapayrollamt33[".masterListFields"][] = "OTHrs";
$tdatapayrollamt33[".masterListFields"][] = "OT";
$tdatapayrollamt33[".masterListFields"][] = "TAdj";
$tdatapayrollamt33[".masterListFields"][] = "TAdjt";
$tdatapayrollamt33[".masterListFields"][] = "Ttax";
$tdatapayrollamt33[".masterListFields"][] = "SSS";
$tdatapayrollamt33[".masterListFields"][] = "PagIbig";
$tdatapayrollamt33[".masterListFields"][] = "PHIC";
$tdatapayrollamt33[".masterListFields"][] = "TDeductions";
$tdatapayrollamt33[".masterListFields"][] = "Taxable";
$tdatapayrollamt33[".masterListFields"][] = "GrossPay";
$tdatapayrollamt33[".masterListFields"][] = "NetPay";
$tdatapayrollamt33[".masterListFields"][] = "TaxableToDate";
$tdatapayrollamt33[".masterListFields"][] = "ThirToDate";
$tdatapayrollamt33[".masterListFields"][] = "TaxToDate";

$tdatapayrollamt33[".inlineAddFields"] = array();

$tdatapayrollamt33[".editFields"] = array();

$tdatapayrollamt33[".inlineEditFields"] = array();

$tdatapayrollamt33[".updateSelectedFields"] = array();


$tdatapayrollamt33[".exportFields"] = array();
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
$tdatapayrollamt33[".exportFields"][] = "LWOPdays";
$tdatapayrollamt33[".exportFields"][] = "LWOP";
$tdatapayrollamt33[".exportFields"][] = "RegOTHrs";
$tdatapayrollamt33[".exportFields"][] = "RegOT";
$tdatapayrollamt33[".exportFields"][] = "RHOTHrs";
$tdatapayrollamt33[".exportFields"][] = "RHOT";
$tdatapayrollamt33[".exportFields"][] = "SHOTHrs";
$tdatapayrollamt33[".exportFields"][] = "SHOT";
$tdatapayrollamt33[".exportFields"][] = "DHOT";
$tdatapayrollamt33[".exportFields"][] = "DHOTpay";
$tdatapayrollamt33[".exportFields"][] = "RDOTHrs";
$tdatapayrollamt33[".exportFields"][] = "RDOT";
$tdatapayrollamt33[".exportFields"][] = "RHRDOT";
$tdatapayrollamt33[".exportFields"][] = "RHRDOTpay";
$tdatapayrollamt33[".exportFields"][] = "SHRDOT";
$tdatapayrollamt33[".exportFields"][] = "SHRDOTpay";
$tdatapayrollamt33[".exportFields"][] = "DHRDOT";
$tdatapayrollamt33[".exportFields"][] = "DHRDOTpay";
$tdatapayrollamt33[".exportFields"][] = "TNDOTHr";
$tdatapayrollamt33[".exportFields"][] = "TNDOT";
$tdatapayrollamt33[".exportFields"][] = "RHolidayHrs";
$tdatapayrollamt33[".exportFields"][] = "RHoliday";
$tdatapayrollamt33[".exportFields"][] = "SHolidayHrs";
$tdatapayrollamt33[".exportFields"][] = "SHoliday";
$tdatapayrollamt33[".exportFields"][] = "DH";
$tdatapayrollamt33[".exportFields"][] = "DHpay";
$tdatapayrollamt33[".exportFields"][] = "RDHrs";
$tdatapayrollamt33[".exportFields"][] = "RD";
$tdatapayrollamt33[".exportFields"][] = "RHRD";
$tdatapayrollamt33[".exportFields"][] = "RHRDpay";
$tdatapayrollamt33[".exportFields"][] = "SHRD";
$tdatapayrollamt33[".exportFields"][] = "SHRDpay";
$tdatapayrollamt33[".exportFields"][] = "DHRD";
$tdatapayrollamt33[".exportFields"][] = "DHRDpay";
$tdatapayrollamt33[".exportFields"][] = "TNDHr";
$tdatapayrollamt33[".exportFields"][] = "TND";
$tdatapayrollamt33[".exportFields"][] = "VLDays";
$tdatapayrollamt33[".exportFields"][] = "VL";
$tdatapayrollamt33[".exportFields"][] = "SLDays";
$tdatapayrollamt33[".exportFields"][] = "SL";
$tdatapayrollamt33[".exportFields"][] = "ELDays";
$tdatapayrollamt33[".exportFields"][] = "EL";
$tdatapayrollamt33[".exportFields"][] = "PLDays";
$tdatapayrollamt33[".exportFields"][] = "PL";
$tdatapayrollamt33[".exportFields"][] = "VLBalance";
$tdatapayrollamt33[".exportFields"][] = "SLBalance";
$tdatapayrollamt33[".exportFields"][] = "ELBalance";
$tdatapayrollamt33[".exportFields"][] = "PLBalance";
$tdatapayrollamt33[".exportFields"][] = "OTHrs";
$tdatapayrollamt33[".exportFields"][] = "OT";
$tdatapayrollamt33[".exportFields"][] = "TAdj";
$tdatapayrollamt33[".exportFields"][] = "TAdjt";
$tdatapayrollamt33[".exportFields"][] = "Ttax";
$tdatapayrollamt33[".exportFields"][] = "SSS";
$tdatapayrollamt33[".exportFields"][] = "PagIbig";
$tdatapayrollamt33[".exportFields"][] = "PHIC";
$tdatapayrollamt33[".exportFields"][] = "TDeductions";
$tdatapayrollamt33[".exportFields"][] = "Taxable";
$tdatapayrollamt33[".exportFields"][] = "GrossPay";
$tdatapayrollamt33[".exportFields"][] = "NetPay";
$tdatapayrollamt33[".exportFields"][] = "TaxableToDate";
$tdatapayrollamt33[".exportFields"][] = "ThirToDate";
$tdatapayrollamt33[".exportFields"][] = "TaxToDate";

$tdatapayrollamt33[".importFields"] = array();

$tdatapayrollamt33[".printFields"] = array();
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
$tdatapayrollamt33[".printFields"][] = "LWOPdays";
$tdatapayrollamt33[".printFields"][] = "LWOP";
$tdatapayrollamt33[".printFields"][] = "RegOTHrs";
$tdatapayrollamt33[".printFields"][] = "RegOT";
$tdatapayrollamt33[".printFields"][] = "RHOTHrs";
$tdatapayrollamt33[".printFields"][] = "RHOT";
$tdatapayrollamt33[".printFields"][] = "SHOTHrs";
$tdatapayrollamt33[".printFields"][] = "SHOT";
$tdatapayrollamt33[".printFields"][] = "DHOT";
$tdatapayrollamt33[".printFields"][] = "DHOTpay";
$tdatapayrollamt33[".printFields"][] = "RDOTHrs";
$tdatapayrollamt33[".printFields"][] = "RDOT";
$tdatapayrollamt33[".printFields"][] = "RHRDOT";
$tdatapayrollamt33[".printFields"][] = "RHRDOTpay";
$tdatapayrollamt33[".printFields"][] = "SHRDOT";
$tdatapayrollamt33[".printFields"][] = "SHRDOTpay";
$tdatapayrollamt33[".printFields"][] = "DHRDOT";
$tdatapayrollamt33[".printFields"][] = "DHRDOTpay";
$tdatapayrollamt33[".printFields"][] = "TNDOTHr";
$tdatapayrollamt33[".printFields"][] = "TNDOT";
$tdatapayrollamt33[".printFields"][] = "RHolidayHrs";
$tdatapayrollamt33[".printFields"][] = "RHoliday";
$tdatapayrollamt33[".printFields"][] = "SHolidayHrs";
$tdatapayrollamt33[".printFields"][] = "SHoliday";
$tdatapayrollamt33[".printFields"][] = "DH";
$tdatapayrollamt33[".printFields"][] = "DHpay";
$tdatapayrollamt33[".printFields"][] = "RDHrs";
$tdatapayrollamt33[".printFields"][] = "RD";
$tdatapayrollamt33[".printFields"][] = "RHRD";
$tdatapayrollamt33[".printFields"][] = "RHRDpay";
$tdatapayrollamt33[".printFields"][] = "SHRD";
$tdatapayrollamt33[".printFields"][] = "SHRDpay";
$tdatapayrollamt33[".printFields"][] = "DHRD";
$tdatapayrollamt33[".printFields"][] = "DHRDpay";
$tdatapayrollamt33[".printFields"][] = "TNDHr";
$tdatapayrollamt33[".printFields"][] = "TND";
$tdatapayrollamt33[".printFields"][] = "VLDays";
$tdatapayrollamt33[".printFields"][] = "VL";
$tdatapayrollamt33[".printFields"][] = "SLDays";
$tdatapayrollamt33[".printFields"][] = "SL";
$tdatapayrollamt33[".printFields"][] = "ELDays";
$tdatapayrollamt33[".printFields"][] = "EL";
$tdatapayrollamt33[".printFields"][] = "PLDays";
$tdatapayrollamt33[".printFields"][] = "PL";
$tdatapayrollamt33[".printFields"][] = "VLBalance";
$tdatapayrollamt33[".printFields"][] = "SLBalance";
$tdatapayrollamt33[".printFields"][] = "ELBalance";
$tdatapayrollamt33[".printFields"][] = "PLBalance";
$tdatapayrollamt33[".printFields"][] = "OTHrs";
$tdatapayrollamt33[".printFields"][] = "OT";
$tdatapayrollamt33[".printFields"][] = "TAdj";
$tdatapayrollamt33[".printFields"][] = "TAdjt";
$tdatapayrollamt33[".printFields"][] = "Ttax";
$tdatapayrollamt33[".printFields"][] = "SSS";
$tdatapayrollamt33[".printFields"][] = "PagIbig";
$tdatapayrollamt33[".printFields"][] = "PHIC";
$tdatapayrollamt33[".printFields"][] = "TDeductions";
$tdatapayrollamt33[".printFields"][] = "Taxable";
$tdatapayrollamt33[".printFields"][] = "GrossPay";
$tdatapayrollamt33[".printFields"][] = "NetPay";
$tdatapayrollamt33[".printFields"][] = "TaxableToDate";
$tdatapayrollamt33[".printFields"][] = "ThirToDate";
$tdatapayrollamt33[".printFields"][] = "TaxToDate";


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

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








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




	$tdatapayrollamt33["Division"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","WageType");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["WageType"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","FromDate");
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




	$tdatapayrollamt33["FromDate"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","ToDate");
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




	$tdatapayrollamt33["ToDate"] = $fdata;
//	BasicMonthly
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "BasicMonthly";
	$fdata["GoodName"] = "BasicMonthly";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","BasicMonthly");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["BasicMonthly"] = $fdata;
//	BasicDaily
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "BasicDaily";
	$fdata["GoodName"] = "BasicDaily";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","BasicDaily");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["BasicDaily"] = $fdata;
//	DWork
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DWork";
	$fdata["GoodName"] = "DWork";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","DWork");
	$fdata["FieldType"] = 14;

	
	
	
			
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








	$tdatapayrollamt33["DWork"] = $fdata;
//	Absent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Absent";
	$fdata["GoodName"] = "Absent";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","Absent");
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








	$tdatapayrollamt33["Absent"] = $fdata;
//	RegPay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "RegPay";
	$fdata["GoodName"] = "RegPay";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RegPay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["RegPay"] = $fdata;
//	LateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "LateMins";
	$fdata["GoodName"] = "LateMins";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","LateMins");
	$fdata["FieldType"] = 14;

	
	
	
			
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








	$tdatapayrollamt33["LateMins"] = $fdata;
//	Late
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Late";
	$fdata["GoodName"] = "Late";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","Late");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["Late"] = $fdata;
//	UndertimeMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "UndertimeMins";
	$fdata["GoodName"] = "UndertimeMins";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","UndertimeMins");
	$fdata["FieldType"] = 14;

	
	
	
			
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








	$tdatapayrollamt33["UndertimeMins"] = $fdata;
//	UnderTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "UnderTime";
	$fdata["GoodName"] = "UnderTime";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","UnderTime");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["UnderTime"] = $fdata;
//	LWOPdays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "LWOPdays";
	$fdata["GoodName"] = "LWOPdays";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","LWOPdays");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["LWOPdays"] = $fdata;
//	LWOP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "LWOP";
	$fdata["GoodName"] = "LWOP";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","LWOP");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["LWOP"] = $fdata;
//	RegOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "RegOTHrs";
	$fdata["GoodName"] = "RegOTHrs";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RegOTHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
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








	$tdatapayrollamt33["RegOTHrs"] = $fdata;
//	RegOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "RegOT";
	$fdata["GoodName"] = "RegOT";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RegOT");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["RegOT"] = $fdata;
//	RHOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "RHOTHrs";
	$fdata["GoodName"] = "RHOTHrs";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RHOTHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
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








	$tdatapayrollamt33["RHOTHrs"] = $fdata;
//	RHOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "RHOT";
	$fdata["GoodName"] = "RHOT";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RHOT");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["RHOT"] = $fdata;
//	SHOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "SHOTHrs";
	$fdata["GoodName"] = "SHOTHrs";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","SHOTHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatapayrollamt33["SHOTHrs"] = $fdata;
//	SHOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "SHOT";
	$fdata["GoodName"] = "SHOT";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","SHOT");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["SHOT"] = $fdata;
//	DHOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "DHOT";
	$fdata["GoodName"] = "DHOT";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","DHOT");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrollamt33["DHOT"] = $fdata;
//	DHOTpay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "DHOTpay";
	$fdata["GoodName"] = "DHOTpay";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","DHOTpay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DHOTpay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHOTpay";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrollamt33["DHOTpay"] = $fdata;
//	RDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "RDOTHrs";
	$fdata["GoodName"] = "RDOTHrs";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RDOTHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
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








	$tdatapayrollamt33["RDOTHrs"] = $fdata;
//	RDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "RDOT";
	$fdata["GoodName"] = "RDOT";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RDOT");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["RDOT"] = $fdata;
//	RHRDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "RHRDOT";
	$fdata["GoodName"] = "RHRDOT";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RHRDOT");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrollamt33["RHRDOT"] = $fdata;
//	RHRDOTpay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "RHRDOTpay";
	$fdata["GoodName"] = "RHRDOTpay";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RHRDOTpay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHRDOTpay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHRDOTpay";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrollamt33["RHRDOTpay"] = $fdata;
//	SHRDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "SHRDOT";
	$fdata["GoodName"] = "SHRDOT";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","SHRDOT");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrollamt33["SHRDOT"] = $fdata;
//	SHRDOTpay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "SHRDOTpay";
	$fdata["GoodName"] = "SHRDOTpay";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","SHRDOTpay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHRDOTpay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHRDOTpay";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrollamt33["SHRDOTpay"] = $fdata;
//	DHRDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "DHRDOT";
	$fdata["GoodName"] = "DHRDOT";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","DHRDOT");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrollamt33["DHRDOT"] = $fdata;
//	DHRDOTpay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "DHRDOTpay";
	$fdata["GoodName"] = "DHRDOTpay";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","DHRDOTpay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DHRDOTpay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHRDOTpay";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrollamt33["DHRDOTpay"] = $fdata;
//	TNDOTHr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "TNDOTHr";
	$fdata["GoodName"] = "TNDOTHr";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","TNDOTHr");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TNDOTHr";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TNDOTHr";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrollamt33["TNDOTHr"] = $fdata;
//	TNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "TNDOT";
	$fdata["GoodName"] = "TNDOT";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","TNDOT");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TNDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TNDOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrollamt33["TNDOT"] = $fdata;
//	RHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "RHolidayHrs";
	$fdata["GoodName"] = "RHolidayHrs";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RHolidayHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
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








	$tdatapayrollamt33["RHolidayHrs"] = $fdata;
//	RHoliday
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "RHoliday";
	$fdata["GoodName"] = "RHoliday";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RHoliday");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["RHoliday"] = $fdata;
//	SHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "SHolidayHrs";
	$fdata["GoodName"] = "SHolidayHrs";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","SHolidayHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
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








	$tdatapayrollamt33["SHolidayHrs"] = $fdata;
//	SHoliday
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "SHoliday";
	$fdata["GoodName"] = "SHoliday";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","SHoliday");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["SHoliday"] = $fdata;
//	DH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "DH";
	$fdata["GoodName"] = "DH";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","DH");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrollamt33["DH"] = $fdata;
//	DHpay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "DHpay";
	$fdata["GoodName"] = "DHpay";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","DHpay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DHpay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHpay";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrollamt33["DHpay"] = $fdata;
//	RDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "RDHrs";
	$fdata["GoodName"] = "RDHrs";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RDHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
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








	$tdatapayrollamt33["RDHrs"] = $fdata;
//	RD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "RD";
	$fdata["GoodName"] = "RD";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RD");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["RD"] = $fdata;
//	RHRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "RHRD";
	$fdata["GoodName"] = "RHRD";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RHRD");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrollamt33["RHRD"] = $fdata;
//	RHRDpay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "RHRDpay";
	$fdata["GoodName"] = "RHRDpay";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","RHRDpay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHRDpay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHRDpay";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrollamt33["RHRDpay"] = $fdata;
//	SHRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "SHRD";
	$fdata["GoodName"] = "SHRD";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","SHRD");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrollamt33["SHRD"] = $fdata;
//	SHRDpay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "SHRDpay";
	$fdata["GoodName"] = "SHRDpay";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","SHRDpay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHRDpay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHRDpay";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrollamt33["SHRDpay"] = $fdata;
//	DHRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "DHRD";
	$fdata["GoodName"] = "DHRD";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","DHRD");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrollamt33["DHRD"] = $fdata;
//	DHRDpay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "DHRDpay";
	$fdata["GoodName"] = "DHRDpay";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","DHRDpay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DHRDpay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHRDpay";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrollamt33["DHRDpay"] = $fdata;
//	TNDHr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "TNDHr";
	$fdata["GoodName"] = "TNDHr";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","TNDHr");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TNDHr";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TNDHr";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrollamt33["TNDHr"] = $fdata;
//	TND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "TND";
	$fdata["GoodName"] = "TND";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","TND");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["TND"] = $fdata;
//	VLDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "VLDays";
	$fdata["GoodName"] = "VLDays";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","VLDays");
	$fdata["FieldType"] = 14;

	
	
	
			
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








	$tdatapayrollamt33["VLDays"] = $fdata;
//	VL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "VL";
	$fdata["GoodName"] = "VL";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","VL");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["VL"] = $fdata;
//	SLDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "SLDays";
	$fdata["GoodName"] = "SLDays";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","SLDays");
	$fdata["FieldType"] = 14;

	
	
	
			
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








	$tdatapayrollamt33["SLDays"] = $fdata;
//	SL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "SL";
	$fdata["GoodName"] = "SL";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","SL");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["SL"] = $fdata;
//	ELDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "ELDays";
	$fdata["GoodName"] = "ELDays";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","ELDays");
	$fdata["FieldType"] = 14;

	
	
	
			
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








	$tdatapayrollamt33["ELDays"] = $fdata;
//	EL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "EL";
	$fdata["GoodName"] = "EL";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","EL");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["EL"] = $fdata;
//	PLDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "PLDays";
	$fdata["GoodName"] = "PLDays";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","PLDays");
	$fdata["FieldType"] = 14;

	
	
	
			
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








	$tdatapayrollamt33["PLDays"] = $fdata;
//	PL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "PL";
	$fdata["GoodName"] = "PL";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","PL");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["PL"] = $fdata;
//	VLBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "VLBalance";
	$fdata["GoodName"] = "VLBalance";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","VLBalance");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatapayrollamt33["VLBalance"] = $fdata;
//	SLBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "SLBalance";
	$fdata["GoodName"] = "SLBalance";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","SLBalance");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatapayrollamt33["SLBalance"] = $fdata;
//	ELBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "ELBalance";
	$fdata["GoodName"] = "ELBalance";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","ELBalance");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatapayrollamt33["ELBalance"] = $fdata;
//	PLBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "PLBalance";
	$fdata["GoodName"] = "PLBalance";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","PLBalance");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatapayrollamt33["PLBalance"] = $fdata;
//	OTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "OTHrs";
	$fdata["GoodName"] = "OTHrs";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","OTHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "OTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OTHrs";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrollamt33["OTHrs"] = $fdata;
//	OT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "OT";
	$fdata["GoodName"] = "OT";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","OT");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["OT"] = $fdata;
//	TAdj
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "TAdj";
	$fdata["GoodName"] = "TAdj";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","TAdj");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["TAdj"] = $fdata;
//	TAdjt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "TAdjt";
	$fdata["GoodName"] = "TAdjt";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","TAdjt");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["TAdjt"] = $fdata;
//	Ttax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "Ttax";
	$fdata["GoodName"] = "Ttax";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","Ttax");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["Ttax"] = $fdata;
//	SSS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "SSS";
	$fdata["GoodName"] = "SSS";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","SSS");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["SSS"] = $fdata;
//	PagIbig
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "PagIbig";
	$fdata["GoodName"] = "PagIbig";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","PagIbig");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["PagIbig"] = $fdata;
//	PHIC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "PHIC";
	$fdata["GoodName"] = "PHIC";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","PHIC");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["PHIC"] = $fdata;
//	TDeductions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "TDeductions";
	$fdata["GoodName"] = "TDeductions";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","TDeductions");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["TDeductions"] = $fdata;
//	Taxable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "Taxable";
	$fdata["GoodName"] = "Taxable";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","Taxable");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdatapayrollamt33["Taxable"] = $fdata;
//	GrossPay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "GrossPay";
	$fdata["GoodName"] = "GrossPay";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","GrossPay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["GrossPay"] = $fdata;
//	NetPay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "NetPay";
	$fdata["GoodName"] = "NetPay";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","NetPay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatapayrollamt33["NetPay"] = $fdata;
//	ThirToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "ThirToDate";
	$fdata["GoodName"] = "ThirToDate";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","ThirToDate");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrollamt33["ThirToDate"] = $fdata;
//	TaxableToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "TaxableToDate";
	$fdata["GoodName"] = "TaxableToDate";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","TaxableToDate");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrollamt33["TaxableToDate"] = $fdata;
//	TaxToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "TaxToDate";
	$fdata["GoodName"] = "TaxToDate";
	$fdata["ownerTable"] = "payrollamt33";
	$fdata["Label"] = GetFieldLabel("payrollamt33","TaxToDate");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayrollamt33["TaxToDate"] = $fdata;


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
$proto0["m_strFieldList"] = "PtabID,  EmployeeID,  UserName,  Status,  Employer,  Division,  WageType,  FromDate,  ToDate,  BasicMonthly,  BasicDaily,  DWork,  Absent,  RegPay,  LateMins,  Late,  UndertimeMins,  UnderTime,  LWOPdays,  LWOP,  RegOTHrs,  RegOT,  RHOTHrs,  RHOT,  SHOTHrs,  SHOT,  DHOT,  DHOTpay,  RDOTHrs,  RDOT,  RHRDOT,  RHRDOTpay,  SHRDOT,  SHRDOTpay,  DHRDOT,  DHRDOTpay,  TNDOTHr,  TNDOT,  RHolidayHrs,  RHoliday,  SHolidayHrs,  SHoliday,  DH,  DHpay,  RDHrs,  RD,  RHRD,  RHRDpay,  SHRD,  SHRDpay,  DHRD,  DHRDpay,  TNDHr,  TND,  VLDays,  VL,  SLDays,  SL,  ELDays,  EL,  PLDays,  PL,  VLBalance,  SLBalance,  ELBalance,  PLBalance,  OTHrs,  OT,  TAdj,  TAdjt,  Ttax,  SSS,  PagIbig,  PHIC,  TDeductions,  Taxable,  GrossPay,  NetPay,  ThirToDate,  TaxableToDate,  TaxToDate";
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
	"m_strName" => "WageType",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto18["m_sql"] = "WageType";
$proto18["m_srcTableName"] = "payrollamt33";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto20["m_sql"] = "FromDate";
$proto20["m_srcTableName"] = "payrollamt33";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto22["m_sql"] = "ToDate";
$proto22["m_srcTableName"] = "payrollamt33";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "BasicMonthly",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto24["m_sql"] = "BasicMonthly";
$proto24["m_srcTableName"] = "payrollamt33";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "BasicDaily",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto26["m_sql"] = "BasicDaily";
$proto26["m_srcTableName"] = "payrollamt33";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "DWork",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto28["m_sql"] = "DWork";
$proto28["m_srcTableName"] = "payrollamt33";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Absent",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto30["m_sql"] = "Absent";
$proto30["m_srcTableName"] = "payrollamt33";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "RegPay",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto32["m_sql"] = "RegPay";
$proto32["m_srcTableName"] = "payrollamt33";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "LateMins",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto34["m_sql"] = "LateMins";
$proto34["m_srcTableName"] = "payrollamt33";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Late",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto36["m_sql"] = "Late";
$proto36["m_srcTableName"] = "payrollamt33";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "UndertimeMins",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto38["m_sql"] = "UndertimeMins";
$proto38["m_srcTableName"] = "payrollamt33";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "UnderTime",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto40["m_sql"] = "UnderTime";
$proto40["m_srcTableName"] = "payrollamt33";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "LWOPdays",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto42["m_sql"] = "LWOPdays";
$proto42["m_srcTableName"] = "payrollamt33";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "LWOP",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto44["m_sql"] = "LWOP";
$proto44["m_srcTableName"] = "payrollamt33";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "RegOTHrs",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto46["m_sql"] = "RegOTHrs";
$proto46["m_srcTableName"] = "payrollamt33";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "RegOT",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto48["m_sql"] = "RegOT";
$proto48["m_srcTableName"] = "payrollamt33";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "RHOTHrs",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto50["m_sql"] = "RHOTHrs";
$proto50["m_srcTableName"] = "payrollamt33";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "RHOT",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto52["m_sql"] = "RHOT";
$proto52["m_srcTableName"] = "payrollamt33";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOTHrs",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto54["m_sql"] = "SHOTHrs";
$proto54["m_srcTableName"] = "payrollamt33";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOT",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto56["m_sql"] = "SHOT";
$proto56["m_srcTableName"] = "payrollamt33";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "DHOT",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto58["m_sql"] = "DHOT";
$proto58["m_srcTableName"] = "payrollamt33";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "DHOTpay",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto60["m_sql"] = "DHOTpay";
$proto60["m_srcTableName"] = "payrollamt33";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "RDOTHrs",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto62["m_sql"] = "RDOTHrs";
$proto62["m_srcTableName"] = "payrollamt33";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "RDOT",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto64["m_sql"] = "RDOT";
$proto64["m_srcTableName"] = "payrollamt33";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDOT",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto66["m_sql"] = "RHRDOT";
$proto66["m_srcTableName"] = "payrollamt33";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDOTpay",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto68["m_sql"] = "RHRDOTpay";
$proto68["m_srcTableName"] = "payrollamt33";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDOT",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto70["m_sql"] = "SHRDOT";
$proto70["m_srcTableName"] = "payrollamt33";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDOTpay",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto72["m_sql"] = "SHRDOTpay";
$proto72["m_srcTableName"] = "payrollamt33";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDOT",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto74["m_sql"] = "DHRDOT";
$proto74["m_srcTableName"] = "payrollamt33";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDOTpay",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto76["m_sql"] = "DHRDOTpay";
$proto76["m_srcTableName"] = "payrollamt33";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "TNDOTHr",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto78["m_sql"] = "TNDOTHr";
$proto78["m_srcTableName"] = "payrollamt33";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "TNDOT",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto80["m_sql"] = "TNDOT";
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
	"m_strName" => "RHoliday",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto84["m_sql"] = "RHoliday";
$proto84["m_srcTableName"] = "payrollamt33";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "SHolidayHrs",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto86["m_sql"] = "SHolidayHrs";
$proto86["m_srcTableName"] = "payrollamt33";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "SHoliday",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto88["m_sql"] = "SHoliday";
$proto88["m_srcTableName"] = "payrollamt33";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "DH",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto90["m_sql"] = "DH";
$proto90["m_srcTableName"] = "payrollamt33";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "DHpay",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto92["m_sql"] = "DHpay";
$proto92["m_srcTableName"] = "payrollamt33";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "RDHrs",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto94["m_sql"] = "RDHrs";
$proto94["m_srcTableName"] = "payrollamt33";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "RD",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto96["m_sql"] = "RD";
$proto96["m_srcTableName"] = "payrollamt33";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRD",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto98["m_sql"] = "RHRD";
$proto98["m_srcTableName"] = "payrollamt33";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDpay",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto100["m_sql"] = "RHRDpay";
$proto100["m_srcTableName"] = "payrollamt33";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRD",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto102["m_sql"] = "SHRD";
$proto102["m_srcTableName"] = "payrollamt33";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDpay",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto104["m_sql"] = "SHRDpay";
$proto104["m_srcTableName"] = "payrollamt33";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRD",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto106["m_sql"] = "DHRD";
$proto106["m_srcTableName"] = "payrollamt33";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDpay",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto108["m_sql"] = "DHRDpay";
$proto108["m_srcTableName"] = "payrollamt33";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "TNDHr",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto110["m_sql"] = "TNDHr";
$proto110["m_srcTableName"] = "payrollamt33";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "TND",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto112["m_sql"] = "TND";
$proto112["m_srcTableName"] = "payrollamt33";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "VLDays",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto114["m_sql"] = "VLDays";
$proto114["m_srcTableName"] = "payrollamt33";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "VL",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto116["m_sql"] = "VL";
$proto116["m_srcTableName"] = "payrollamt33";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "SLDays",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto118["m_sql"] = "SLDays";
$proto118["m_srcTableName"] = "payrollamt33";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "SL",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto120["m_sql"] = "SL";
$proto120["m_srcTableName"] = "payrollamt33";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "ELDays",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto122["m_sql"] = "ELDays";
$proto122["m_srcTableName"] = "payrollamt33";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "EL",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto124["m_sql"] = "EL";
$proto124["m_srcTableName"] = "payrollamt33";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "PLDays",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto126["m_sql"] = "PLDays";
$proto126["m_srcTableName"] = "payrollamt33";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "PL",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto128["m_sql"] = "PL";
$proto128["m_srcTableName"] = "payrollamt33";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "VLBalance",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto130["m_sql"] = "VLBalance";
$proto130["m_srcTableName"] = "payrollamt33";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "SLBalance",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto132["m_sql"] = "SLBalance";
$proto132["m_srcTableName"] = "payrollamt33";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "ELBalance",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto134["m_sql"] = "ELBalance";
$proto134["m_srcTableName"] = "payrollamt33";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "PLBalance",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto136["m_sql"] = "PLBalance";
$proto136["m_srcTableName"] = "payrollamt33";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "OTHrs",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto138["m_sql"] = "OTHrs";
$proto138["m_srcTableName"] = "payrollamt33";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "OT",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto140["m_sql"] = "OT";
$proto140["m_srcTableName"] = "payrollamt33";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "TAdj",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto142["m_sql"] = "TAdj";
$proto142["m_srcTableName"] = "payrollamt33";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "TAdjt",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto144["m_sql"] = "TAdjt";
$proto144["m_srcTableName"] = "payrollamt33";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "Ttax",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto146["m_sql"] = "Ttax";
$proto146["m_srcTableName"] = "payrollamt33";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "SSS",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto148["m_sql"] = "SSS";
$proto148["m_srcTableName"] = "payrollamt33";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbig",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto150["m_sql"] = "PagIbig";
$proto150["m_srcTableName"] = "payrollamt33";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "PHIC",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto152["m_sql"] = "PHIC";
$proto152["m_srcTableName"] = "payrollamt33";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "TDeductions",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto154["m_sql"] = "TDeductions";
$proto154["m_srcTableName"] = "payrollamt33";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "Taxable",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto156["m_sql"] = "Taxable";
$proto156["m_srcTableName"] = "payrollamt33";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "GrossPay",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto158["m_sql"] = "GrossPay";
$proto158["m_srcTableName"] = "payrollamt33";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "NetPay",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto160["m_sql"] = "NetPay";
$proto160["m_srcTableName"] = "payrollamt33";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "ThirToDate",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto162["m_sql"] = "ThirToDate";
$proto162["m_srcTableName"] = "payrollamt33";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "TaxableToDate",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto164["m_sql"] = "TaxableToDate";
$proto164["m_srcTableName"] = "payrollamt33";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "TaxToDate",
	"m_strTable" => "payrollamt33",
	"m_srcTableName" => "payrollamt33"
));

$proto166["m_sql"] = "TaxToDate";
$proto166["m_srcTableName"] = "payrollamt33";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto168=array();
$proto168["m_link"] = "SQLL_MAIN";
			$proto169=array();
$proto169["m_strName"] = "payrollamt33";
$proto169["m_srcTableName"] = "payrollamt33";
$proto169["m_columns"] = array();
$proto169["m_columns"][] = "PtabID";
$proto169["m_columns"][] = "EmployeeID";
$proto169["m_columns"][] = "UserName";
$proto169["m_columns"][] = "Status";
$proto169["m_columns"][] = "Division";
$proto169["m_columns"][] = "FromDate";
$proto169["m_columns"][] = "ToDate";
$proto169["m_columns"][] = "MontlyPaymentPeriods";
$proto169["m_columns"][] = "BasicMonthly";
$proto169["m_columns"][] = "SemiMonthly";
$proto169["m_columns"][] = "BasicDaily";
$proto169["m_columns"][] = "DWork";
$proto169["m_columns"][] = "Absent";
$proto169["m_columns"][] = "MoDailyRate";
$proto169["m_columns"][] = "RegPay";
$proto169["m_columns"][] = "Late";
$proto169["m_columns"][] = "UnderTime";
$proto169["m_columns"][] = "RHoliday";
$proto169["m_columns"][] = "SHoliday";
$proto169["m_columns"][] = "RegOT";
$proto169["m_columns"][] = "RHOT";
$proto169["m_columns"][] = "SHOT";
$proto169["m_columns"][] = "DHOTpay";
$proto169["m_columns"][] = "RDOT";
$proto169["m_columns"][] = "OTHrs";
$proto169["m_columns"][] = "OT";
$proto169["m_columns"][] = "RD";
$proto169["m_columns"][] = "VL";
$proto169["m_columns"][] = "SL";
$proto169["m_columns"][] = "EL";
$proto169["m_columns"][] = "PL";
$proto169["m_columns"][] = "TrO";
$proto169["m_columns"][] = "WageType";
$proto169["m_columns"][] = "EmployeeType";
$proto169["m_columns"][] = "EmployeeStatus";
$proto169["m_columns"][] = "FDivision";
$proto169["m_columns"][] = "LateMins";
$proto169["m_columns"][] = "UndertimeMins";
$proto169["m_columns"][] = "RHolidayHrs";
$proto169["m_columns"][] = "SHolidayHrs";
$proto169["m_columns"][] = "RegOTHrs";
$proto169["m_columns"][] = "RHOTHrs";
$proto169["m_columns"][] = "SHOTHrs";
$proto169["m_columns"][] = "RDOTHrs";
$proto169["m_columns"][] = "RDHrs";
$proto169["m_columns"][] = "RegNDHrs";
$proto169["m_columns"][] = "RHNDHrs";
$proto169["m_columns"][] = "SHNDHrs";
$proto169["m_columns"][] = "RDNDHrs";
$proto169["m_columns"][] = "VLBalance";
$proto169["m_columns"][] = "SLBalance";
$proto169["m_columns"][] = "ELBalance";
$proto169["m_columns"][] = "PLBalance";
$proto169["m_columns"][] = "PayDate";
$proto169["m_columns"][] = "LWOP";
$proto169["m_columns"][] = "LWOPdays";
$proto169["m_columns"][] = "TAdj";
$proto169["m_columns"][] = "TAdjt";
$proto169["m_columns"][] = "TotAdj";
$proto169["m_columns"][] = "TDeduct";
$proto169["m_columns"][] = "Ttax";
$proto169["m_columns"][] = "SSS";
$proto169["m_columns"][] = "PagIbig";
$proto169["m_columns"][] = "PHIC";
$proto169["m_columns"][] = "TDeductions";
$proto169["m_columns"][] = "Taxable";
$proto169["m_columns"][] = "AllowancePerDay";
$proto169["m_columns"][] = "Allowance";
$proto169["m_columns"][] = "AllowDays";
$proto169["m_columns"][] = "AgencySharePerDay";
$proto169["m_columns"][] = "AgentShare";
$proto169["m_columns"][] = "GrossPay";
$proto169["m_columns"][] = "NetPay";
$proto169["m_columns"][] = "NDMealAllowance";
$proto169["m_columns"][] = "VLDays";
$proto169["m_columns"][] = "ELDays";
$proto169["m_columns"][] = "SLDays";
$proto169["m_columns"][] = "PLDays";
$proto169["m_columns"][] = "TNDHrs";
$proto169["m_columns"][] = "TND";
$proto169["m_columns"][] = "EmployerName";
$proto169["m_columns"][] = "PayrollID";
$proto169["m_columns"][] = "Employer";
$proto169["m_columns"][] = "TNDHr";
$proto169["m_columns"][] = "ThirToDate";
$proto169["m_columns"][] = "TaxableToDate";
$proto169["m_columns"][] = "TaxToDate";
$proto169["m_columns"][] = "RHRD";
$proto169["m_columns"][] = "RHRDpay";
$proto169["m_columns"][] = "SHRD";
$proto169["m_columns"][] = "SHRDpay";
$proto169["m_columns"][] = "DHRD";
$proto169["m_columns"][] = "DHRDpay";
$proto169["m_columns"][] = "DHOT";
$proto169["m_columns"][] = "RHRDOT";
$proto169["m_columns"][] = "RHRDOTpay";
$proto169["m_columns"][] = "SHRDOT";
$proto169["m_columns"][] = "SHRDOTpay";
$proto169["m_columns"][] = "DHRDOT";
$proto169["m_columns"][] = "DHRDOTpay";
$proto169["m_columns"][] = "ND";
$proto169["m_columns"][] = "RHND";
$proto169["m_columns"][] = "SHND";
$proto169["m_columns"][] = "RDND";
$proto169["m_columns"][] = "DH";
$proto169["m_columns"][] = "DHpay";
$proto169["m_columns"][] = "TNDOT";
$proto169["m_columns"][] = "TNDOTHr";
$obj = new SQLTable($proto169);

$proto168["m_table"] = $obj;
$proto168["m_sql"] = "payrollamt33";
$proto168["m_alias"] = "";
$proto168["m_srcTableName"] = "payrollamt33";
$proto170=array();
$proto170["m_sql"] = "";
$proto170["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto170["m_column"]=$obj;
$proto170["m_contained"] = array();
$proto170["m_strCase"] = "";
$proto170["m_havingmode"] = false;
$proto170["m_inBrackets"] = false;
$proto170["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto170);

$proto168["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto168);

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