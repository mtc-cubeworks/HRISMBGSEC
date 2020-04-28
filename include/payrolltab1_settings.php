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
	$fieldLabelspayrolltab1["English"]["EmployeeID"] = "Employee ID";
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
	$fieldLabelspayrolltab1["English"]["LateMins"] = "Late(m)";
	$fieldToolTipspayrolltab1["English"]["LateMins"] = "";
	$placeHolderspayrolltab1["English"]["LateMins"] = "";
	$fieldLabelspayrolltab1["English"]["UndertimeMins"] = "Undertime(m)";
	$fieldToolTipspayrolltab1["English"]["UndertimeMins"] = "";
	$placeHolderspayrolltab1["English"]["UndertimeMins"] = "";
	$fieldLabelspayrolltab1["English"]["RHolidayHrs"] = "RH(h)";
	$fieldToolTipspayrolltab1["English"]["RHolidayHrs"] = "";
	$placeHolderspayrolltab1["English"]["RHolidayHrs"] = "";
	$fieldLabelspayrolltab1["English"]["SHolidayHrs"] = "SH(h)";
	$fieldToolTipspayrolltab1["English"]["SHolidayHrs"] = "";
	$placeHolderspayrolltab1["English"]["SHolidayHrs"] = "";
	$fieldLabelspayrolltab1["English"]["ExcessHrs"] = "Temp OT(h)";
	$fieldToolTipspayrolltab1["English"]["ExcessHrs"] = "";
	$placeHolderspayrolltab1["English"]["ExcessHrs"] = "";
	$fieldLabelspayrolltab1["English"]["RegOTHrs"] = "Reg OT(h)";
	$fieldToolTipspayrolltab1["English"]["RegOTHrs"] = "";
	$placeHolderspayrolltab1["English"]["RegOTHrs"] = "";
	$fieldLabelspayrolltab1["English"]["RHOTHrs"] = "RH-OT(h)";
	$fieldToolTipspayrolltab1["English"]["RHOTHrs"] = "";
	$placeHolderspayrolltab1["English"]["RHOTHrs"] = "";
	$fieldLabelspayrolltab1["English"]["SHOTHRs"] = "SH-OT(h)";
	$fieldToolTipspayrolltab1["English"]["SHOTHRs"] = "";
	$placeHolderspayrolltab1["English"]["SHOTHRs"] = "";
	$fieldLabelspayrolltab1["English"]["RDOTHrs"] = "RD-OT(h)";
	$fieldToolTipspayrolltab1["English"]["RDOTHrs"] = "";
	$placeHolderspayrolltab1["English"]["RDOTHrs"] = "";
	$fieldLabelspayrolltab1["English"]["RHNDHrs"] = "RH-ND(h)";
	$fieldToolTipspayrolltab1["English"]["RHNDHrs"] = "";
	$placeHolderspayrolltab1["English"]["RHNDHrs"] = "";
	$fieldLabelspayrolltab1["English"]["SHNDHrs"] = "SH-ND(h)";
	$fieldToolTipspayrolltab1["English"]["SHNDHrs"] = "";
	$placeHolderspayrolltab1["English"]["SHNDHrs"] = "";
	$fieldLabelspayrolltab1["English"]["RDNDHrs"] = "RD-ND(h)";
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
	$fieldLabelspayrolltab1["English"]["TrODays"] = "TrO Days";
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
	$fieldLabelspayrolltab1["English"]["Thirteenth"] = "13th Month";
	$fieldToolTipspayrolltab1["English"]["Thirteenth"] = "";
	$placeHolderspayrolltab1["English"]["Thirteenth"] = "";
	$fieldLabelspayrolltab1["English"]["Taxable"] = "Taxable";
	$fieldToolTipspayrolltab1["English"]["Taxable"] = "";
	$placeHolderspayrolltab1["English"]["Taxable"] = "";
	$fieldLabelspayrolltab1["English"]["NDOTHrs"] = "ND-OT(h)";
	$fieldToolTipspayrolltab1["English"]["NDOTHrs"] = "";
	$placeHolderspayrolltab1["English"]["NDOTHrs"] = "";
	$fieldLabelspayrolltab1["English"]["RHNDOTHrs"] = "RH-ND-OT(h)";
	$fieldToolTipspayrolltab1["English"]["RHNDOTHrs"] = "";
	$placeHolderspayrolltab1["English"]["RHNDOTHrs"] = "";
	$fieldLabelspayrolltab1["English"]["SHNDOTHrs"] = "SH-ND-OT(h)";
	$fieldToolTipspayrolltab1["English"]["SHNDOTHrs"] = "";
	$placeHolderspayrolltab1["English"]["SHNDOTHrs"] = "";
	$fieldLabelspayrolltab1["English"]["RDNDOTHrs"] = "RD-ND-OT(h)";
	$fieldToolTipspayrolltab1["English"]["RDNDOTHrs"] = "";
	$placeHolderspayrolltab1["English"]["RDNDOTHrs"] = "";
	$fieldLabelspayrolltab1["English"]["DH"] = "DH(h)";
	$fieldToolTipspayrolltab1["English"]["DH"] = "";
	$placeHolderspayrolltab1["English"]["DH"] = "";
	$fieldLabelspayrolltab1["English"]["DHRD"] = "DH-RD(h)";
	$fieldToolTipspayrolltab1["English"]["DHRD"] = "";
	$placeHolderspayrolltab1["English"]["DHRD"] = "";
	$fieldLabelspayrolltab1["English"]["DHOT"] = "DH-OT(h)";
	$fieldToolTipspayrolltab1["English"]["DHOT"] = "";
	$placeHolderspayrolltab1["English"]["DHOT"] = "";
	$fieldLabelspayrolltab1["English"]["DHRDOT"] = "DH-RD-OT(h)";
	$fieldToolTipspayrolltab1["English"]["DHRDOT"] = "";
	$placeHolderspayrolltab1["English"]["DHRDOT"] = "";
	$fieldLabelspayrolltab1["English"]["SHRDND"] = "SH-RD-ND(h)";
	$fieldToolTipspayrolltab1["English"]["SHRDND"] = "";
	$placeHolderspayrolltab1["English"]["SHRDND"] = "";
	$fieldLabelspayrolltab1["English"]["RHRDND"] = "RH-RD-ND(h)";
	$fieldToolTipspayrolltab1["English"]["RHRDND"] = "";
	$placeHolderspayrolltab1["English"]["RHRDND"] = "";
	$fieldLabelspayrolltab1["English"]["SHRDNDOT"] = "SH-RD-ND-OT(h)";
	$fieldToolTipspayrolltab1["English"]["SHRDNDOT"] = "";
	$placeHolderspayrolltab1["English"]["SHRDNDOT"] = "";
	$fieldLabelspayrolltab1["English"]["RHRDNDOT"] = "RH-RD-ND-OT(h)";
	$fieldToolTipspayrolltab1["English"]["RHRDNDOT"] = "";
	$placeHolderspayrolltab1["English"]["RHRDNDOT"] = "";
	$fieldLabelspayrolltab1["English"]["DHND"] = "DH-ND(h)";
	$fieldToolTipspayrolltab1["English"]["DHND"] = "";
	$placeHolderspayrolltab1["English"]["DHND"] = "";
	$fieldLabelspayrolltab1["English"]["DHRDND"] = "DH-RD-ND(h)";
	$fieldToolTipspayrolltab1["English"]["DHRDND"] = "";
	$placeHolderspayrolltab1["English"]["DHRDND"] = "";
	$fieldLabelspayrolltab1["English"]["DHNDOT"] = "DH-ND-OT(h)";
	$fieldToolTipspayrolltab1["English"]["DHNDOT"] = "";
	$placeHolderspayrolltab1["English"]["DHNDOT"] = "";
	$fieldLabelspayrolltab1["English"]["DHRDNDOT"] = "DH-RD-ND-OT(h)";
	$fieldToolTipspayrolltab1["English"]["DHRDNDOT"] = "";
	$placeHolderspayrolltab1["English"]["DHRDNDOT"] = "";
	$fieldLabelspayrolltab1["English"]["ThirToDate"] = "13th Month To-Date";
	$fieldToolTipspayrolltab1["English"]["ThirToDate"] = "";
	$placeHolderspayrolltab1["English"]["ThirToDate"] = "";
	$fieldLabelspayrolltab1["English"]["TaxableToDate"] = "Taxable To-Date";
	$fieldToolTipspayrolltab1["English"]["TaxableToDate"] = "";
	$placeHolderspayrolltab1["English"]["TaxableToDate"] = "";
	$fieldLabelspayrolltab1["English"]["TaxToDate"] = "Tax To-Date";
	$fieldToolTipspayrolltab1["English"]["TaxToDate"] = "";
	$placeHolderspayrolltab1["English"]["TaxToDate"] = "";
	$fieldLabelspayrolltab1["English"]["SHOTD"] = "SH-OT-D(h)";
	$fieldToolTipspayrolltab1["English"]["SHOTD"] = "";
	$placeHolderspayrolltab1["English"]["SHOTD"] = "";
	$fieldLabelspayrolltab1["English"]["RegRD"] = "Reg RD(h)";
	$fieldToolTipspayrolltab1["English"]["RegRD"] = "";
	$placeHolderspayrolltab1["English"]["RegRD"] = "";
	$fieldLabelspayrolltab1["English"]["RHRD"] = "RH-RD(h)";
	$fieldToolTipspayrolltab1["English"]["RHRD"] = "";
	$placeHolderspayrolltab1["English"]["RHRD"] = "";
	$fieldLabelspayrolltab1["English"]["SHRD"] = "SH-RD(h)";
	$fieldToolTipspayrolltab1["English"]["SHRD"] = "";
	$placeHolderspayrolltab1["English"]["SHRD"] = "";
	$fieldLabelspayrolltab1["English"]["RegND"] = "Reg ND(h)";
	$fieldToolTipspayrolltab1["English"]["RegND"] = "";
	$placeHolderspayrolltab1["English"]["RegND"] = "";
	$fieldLabelspayrolltab1["English"]["RHRDOT"] = "RH-RD-OT(h)";
	$fieldToolTipspayrolltab1["English"]["RHRDOT"] = "";
	$placeHolderspayrolltab1["English"]["RHRDOT"] = "";
	$fieldLabelspayrolltab1["English"]["SHRDOT"] = "SH-RD-OT(h)";
	$fieldToolTipspayrolltab1["English"]["SHRDOT"] = "";
	$placeHolderspayrolltab1["English"]["SHRDOT"] = "";
	$fieldLabelspayrolltab1["English"]["SHRDOTD"] = "SH-RD-OT-D(h)";
	$fieldToolTipspayrolltab1["English"]["SHRDOTD"] = "";
	$placeHolderspayrolltab1["English"]["SHRDOTD"] = "";
	if (count($fieldToolTipspayrolltab1["English"]))
		$tdatapayrolltab1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspayrolltab1[""] = array();
	$fieldToolTipspayrolltab1[""] = array();
	$placeHolderspayrolltab1[""] = array();
	$pageTitlespayrolltab1[""] = array();
	$fieldLabelspayrolltab1[""]["NDOTHrs"] = "NDOTHrs";
	$fieldToolTipspayrolltab1[""]["NDOTHrs"] = "";
	$placeHolderspayrolltab1[""]["NDOTHrs"] = "";
	$fieldLabelspayrolltab1[""]["RHNDOTHrs"] = "RHNDOTHrs";
	$fieldToolTipspayrolltab1[""]["RHNDOTHrs"] = "";
	$placeHolderspayrolltab1[""]["RHNDOTHrs"] = "";
	$fieldLabelspayrolltab1[""]["SHNDOTHrs"] = "SHNDOTHrs";
	$fieldToolTipspayrolltab1[""]["SHNDOTHrs"] = "";
	$placeHolderspayrolltab1[""]["SHNDOTHrs"] = "";
	$fieldLabelspayrolltab1[""]["RDNDOTHrs"] = "RDNDOTHrs";
	$fieldToolTipspayrolltab1[""]["RDNDOTHrs"] = "";
	$placeHolderspayrolltab1[""]["RDNDOTHrs"] = "";
	$fieldLabelspayrolltab1[""]["DH"] = "DH";
	$fieldToolTipspayrolltab1[""]["DH"] = "";
	$placeHolderspayrolltab1[""]["DH"] = "";
	$fieldLabelspayrolltab1[""]["DHRD"] = "DHRD";
	$fieldToolTipspayrolltab1[""]["DHRD"] = "";
	$placeHolderspayrolltab1[""]["DHRD"] = "";
	$fieldLabelspayrolltab1[""]["DHOT"] = "DHOT";
	$fieldToolTipspayrolltab1[""]["DHOT"] = "";
	$placeHolderspayrolltab1[""]["DHOT"] = "";
	$fieldLabelspayrolltab1[""]["DHRDOT"] = "DHRDOT";
	$fieldToolTipspayrolltab1[""]["DHRDOT"] = "";
	$placeHolderspayrolltab1[""]["DHRDOT"] = "";
	$fieldLabelspayrolltab1[""]["SHRDND"] = "SHRDND";
	$fieldToolTipspayrolltab1[""]["SHRDND"] = "";
	$placeHolderspayrolltab1[""]["SHRDND"] = "";
	$fieldLabelspayrolltab1[""]["RHRDND"] = "RHRDND";
	$fieldToolTipspayrolltab1[""]["RHRDND"] = "";
	$placeHolderspayrolltab1[""]["RHRDND"] = "";
	$fieldLabelspayrolltab1[""]["SHRDNDOT"] = "SHRDNDOT";
	$fieldToolTipspayrolltab1[""]["SHRDNDOT"] = "";
	$placeHolderspayrolltab1[""]["SHRDNDOT"] = "";
	$fieldLabelspayrolltab1[""]["RHRDNDOT"] = "RHRDNDOT";
	$fieldToolTipspayrolltab1[""]["RHRDNDOT"] = "";
	$placeHolderspayrolltab1[""]["RHRDNDOT"] = "";
	$fieldLabelspayrolltab1[""]["DHND"] = "DHND";
	$fieldToolTipspayrolltab1[""]["DHND"] = "";
	$placeHolderspayrolltab1[""]["DHND"] = "";
	$fieldLabelspayrolltab1[""]["DHRDND"] = "DHRDND";
	$fieldToolTipspayrolltab1[""]["DHRDND"] = "";
	$placeHolderspayrolltab1[""]["DHRDND"] = "";
	$fieldLabelspayrolltab1[""]["DHNDOT"] = "DHNDOT";
	$fieldToolTipspayrolltab1[""]["DHNDOT"] = "";
	$placeHolderspayrolltab1[""]["DHNDOT"] = "";
	$fieldLabelspayrolltab1[""]["DHRDNDOT"] = "DHRDNDOT";
	$fieldToolTipspayrolltab1[""]["DHRDNDOT"] = "";
	$placeHolderspayrolltab1[""]["DHRDNDOT"] = "";
	$fieldLabelspayrolltab1[""]["ThirToDate"] = "Thir To Date";
	$fieldToolTipspayrolltab1[""]["ThirToDate"] = "";
	$placeHolderspayrolltab1[""]["ThirToDate"] = "";
	$fieldLabelspayrolltab1[""]["TaxableToDate"] = "Taxable To Date";
	$fieldToolTipspayrolltab1[""]["TaxableToDate"] = "";
	$placeHolderspayrolltab1[""]["TaxableToDate"] = "";
	$fieldLabelspayrolltab1[""]["TaxToDate"] = "Tax To Date";
	$fieldToolTipspayrolltab1[""]["TaxToDate"] = "";
	$placeHolderspayrolltab1[""]["TaxToDate"] = "";
	$fieldLabelspayrolltab1[""]["SHOTD"] = "SHOTD";
	$fieldToolTipspayrolltab1[""]["SHOTD"] = "";
	$placeHolderspayrolltab1[""]["SHOTD"] = "";
	$fieldLabelspayrolltab1[""]["RegRD"] = "Reg RD";
	$fieldToolTipspayrolltab1[""]["RegRD"] = "";
	$placeHolderspayrolltab1[""]["RegRD"] = "";
	$fieldLabelspayrolltab1[""]["RHRD"] = "RHRD";
	$fieldToolTipspayrolltab1[""]["RHRD"] = "";
	$placeHolderspayrolltab1[""]["RHRD"] = "";
	$fieldLabelspayrolltab1[""]["SHRD"] = "SHRD";
	$fieldToolTipspayrolltab1[""]["SHRD"] = "";
	$placeHolderspayrolltab1[""]["SHRD"] = "";
	$fieldLabelspayrolltab1[""]["RegND"] = "Reg ND";
	$fieldToolTipspayrolltab1[""]["RegND"] = "";
	$placeHolderspayrolltab1[""]["RegND"] = "";
	$fieldLabelspayrolltab1[""]["RHRDOT"] = "RHRDOT";
	$fieldToolTipspayrolltab1[""]["RHRDOT"] = "";
	$placeHolderspayrolltab1[""]["RHRDOT"] = "";
	$fieldLabelspayrolltab1[""]["SHRDOT"] = "SHRDOT";
	$fieldToolTipspayrolltab1[""]["SHRDOT"] = "";
	$placeHolderspayrolltab1[""]["SHRDOT"] = "";
	$fieldLabelspayrolltab1[""]["SHRDOTD"] = "SHRDOTD";
	$fieldToolTipspayrolltab1[""]["SHRDOTD"] = "";
	$placeHolderspayrolltab1[""]["SHRDOTD"] = "";
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

$tdatapayrolltab1[".edit"] = true;
$tdatapayrolltab1[".afterEditAction"] = 1;
$tdatapayrolltab1[".closePopupAfterEdit"] = 1;
$tdatapayrolltab1[".afterEditActionDetTable"] = "";

$tdatapayrolltab1[".add"] = true;
$tdatapayrolltab1[".afterAddAction"] = 1;
$tdatapayrolltab1[".closePopupAfterAdd"] = 1;
$tdatapayrolltab1[".afterAddActionDetTable"] = "";

$tdatapayrolltab1[".list"] = true;

$tdatapayrolltab1[".inlineEdit"] = true;

$tdatapayrolltab1[".updateSelected"] = true;

$tdatapayrolltab1[".reorderRecordsByHeader"] = true;


$tdatapayrolltab1[".exportFormatting"] = 2;
$tdatapayrolltab1[".exportDelimiter"] = ",";
		
$tdatapayrolltab1[".inlineAdd"] = true;
$tdatapayrolltab1[".view"] = true;

$tdatapayrolltab1[".import"] = true;

$tdatapayrolltab1[".exportTo"] = true;

$tdatapayrolltab1[".printFriendly"] = true;

$tdatapayrolltab1[".delete"] = true;

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



$tdatapayrolltab1[".badgeColor"] = "DB7093";


$tdatapayrolltab1[".allSearchFields"] = array();
$tdatapayrolltab1[".filterFields"] = array();
$tdatapayrolltab1[".requiredSearchFields"] = array();

$tdatapayrolltab1[".allSearchFields"][] = "FromDate";
	$tdatapayrolltab1[".allSearchFields"][] = "ToDate";
	$tdatapayrolltab1[".allSearchFields"][] = "UserName";
	$tdatapayrolltab1[".allSearchFields"][] = "Division";
	$tdatapayrolltab1[".allSearchFields"][] = "Employer";
	$tdatapayrolltab1[".allSearchFields"][] = "WageType";
	$tdatapayrolltab1[".allSearchFields"][] = "Status";
	$tdatapayrolltab1[".allSearchFields"][] = "BasicMonthly";
	$tdatapayrolltab1[".allSearchFields"][] = "BasicDaily";
	$tdatapayrolltab1[".allSearchFields"][] = "RegRD";
	$tdatapayrolltab1[".allSearchFields"][] = "SHOTD";
	$tdatapayrolltab1[".allSearchFields"][] = "RegND";
	$tdatapayrolltab1[".allSearchFields"][] = "RHRD";
	$tdatapayrolltab1[".allSearchFields"][] = "SHRD";
	$tdatapayrolltab1[".allSearchFields"][] = "RHRDOT";
	$tdatapayrolltab1[".allSearchFields"][] = "SHRDOT";
	$tdatapayrolltab1[".allSearchFields"][] = "SHRDOTD";
	$tdatapayrolltab1[".allSearchFields"][] = "ThirToDate";
	$tdatapayrolltab1[".allSearchFields"][] = "TaxableToDate";
	$tdatapayrolltab1[".allSearchFields"][] = "TaxToDate";
	

$tdatapayrolltab1[".googleLikeFields"] = array();
$tdatapayrolltab1[".googleLikeFields"][] = "WageType";
$tdatapayrolltab1[".googleLikeFields"][] = "Status";
$tdatapayrolltab1[".googleLikeFields"][] = "BasicMonthly";
$tdatapayrolltab1[".googleLikeFields"][] = "BasicDaily";
$tdatapayrolltab1[".googleLikeFields"][] = "UserName";
$tdatapayrolltab1[".googleLikeFields"][] = "FromDate";
$tdatapayrolltab1[".googleLikeFields"][] = "ToDate";
$tdatapayrolltab1[".googleLikeFields"][] = "Division";
$tdatapayrolltab1[".googleLikeFields"][] = "Employer";
$tdatapayrolltab1[".googleLikeFields"][] = "ThirToDate";
$tdatapayrolltab1[".googleLikeFields"][] = "TaxableToDate";
$tdatapayrolltab1[".googleLikeFields"][] = "TaxToDate";
$tdatapayrolltab1[".googleLikeFields"][] = "SHOTD";
$tdatapayrolltab1[".googleLikeFields"][] = "RegRD";
$tdatapayrolltab1[".googleLikeFields"][] = "RHRD";
$tdatapayrolltab1[".googleLikeFields"][] = "SHRD";
$tdatapayrolltab1[".googleLikeFields"][] = "RegND";
$tdatapayrolltab1[".googleLikeFields"][] = "RHRDOT";
$tdatapayrolltab1[".googleLikeFields"][] = "SHRDOT";
$tdatapayrolltab1[".googleLikeFields"][] = "SHRDOTD";

$tdatapayrolltab1[".panelSearchFields"] = array();
$tdatapayrolltab1[".searchPanelOptions"] = array();
$tdatapayrolltab1[".panelSearchFields"][] = "FromDate";
	$tdatapayrolltab1[".panelSearchFields"][] = "ToDate";
	$tdatapayrolltab1[".panelSearchFields"][] = "UserName";
	$tdatapayrolltab1[".panelSearchFields"][] = "Division";
	$tdatapayrolltab1[".panelSearchFields"][] = "Employer";
	$tdatapayrolltab1[".panelSearchFields"][] = "WageType";
	$tdatapayrolltab1[".panelSearchFields"][] = "Status";
	
$tdatapayrolltab1[".advSearchFields"] = array();
$tdatapayrolltab1[".advSearchFields"][] = "FromDate";
$tdatapayrolltab1[".advSearchFields"][] = "ToDate";
$tdatapayrolltab1[".advSearchFields"][] = "UserName";
$tdatapayrolltab1[".advSearchFields"][] = "Division";
$tdatapayrolltab1[".advSearchFields"][] = "Employer";
$tdatapayrolltab1[".advSearchFields"][] = "WageType";
$tdatapayrolltab1[".advSearchFields"][] = "Status";
$tdatapayrolltab1[".advSearchFields"][] = "BasicMonthly";
$tdatapayrolltab1[".advSearchFields"][] = "BasicDaily";
$tdatapayrolltab1[".advSearchFields"][] = "RegRD";
$tdatapayrolltab1[".advSearchFields"][] = "SHOTD";
$tdatapayrolltab1[".advSearchFields"][] = "RegND";
$tdatapayrolltab1[".advSearchFields"][] = "RHRD";
$tdatapayrolltab1[".advSearchFields"][] = "SHRD";
$tdatapayrolltab1[".advSearchFields"][] = "RHRDOT";
$tdatapayrolltab1[".advSearchFields"][] = "SHRDOT";
$tdatapayrolltab1[".advSearchFields"][] = "SHRDOTD";
$tdatapayrolltab1[".advSearchFields"][] = "ThirToDate";
$tdatapayrolltab1[".advSearchFields"][] = "TaxableToDate";
$tdatapayrolltab1[".advSearchFields"][] = "TaxToDate";

$tdatapayrolltab1[".tableType"] = "list";

$tdatapayrolltab1[".printerPageOrientation"] = 0;
$tdatapayrolltab1[".nPrinterPageScale"] = 100;

$tdatapayrolltab1[".nPrinterSplitRecords"] = 40;

$tdatapayrolltab1[".nPrinterPDFSplitRecords"] = 40;



$tdatapayrolltab1[".geocodingEnabled"] = false;





$tdatapayrolltab1[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatapayrolltab1[".totalsFields"] = array();
$tdatapayrolltab1[".totalsFields"][] = array(
	"fName" => "Locked",
	"numRows" => 0,
	"totalsType" => "COUNT",
	"viewFormat" => 'Checkbox');

$tdatapayrolltab1[".pageSize"] = 20;

$tdatapayrolltab1[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY ToDate DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapayrolltab1[".strOrderBy"] = $tstrOrderBy;

$tdatapayrolltab1[".orderindexes"] = array();
	$tdatapayrolltab1[".orderindexes"][] = array(28, (0 ? "ASC" : "DESC"), "ToDate");


$tdatapayrolltab1[".sqlHead"] = "SELECT PtabID,  EmployeeID,  WageType,  Status,  BasicMonthly,  BasicDaily,  DWork,  Absent,  LateMins,  UndertimeMins,  RHolidayHrs,  SHolidayHrs,  ExcessHrs,  RegOTHrs,  RHOTHrs,  SHOTHRs,  RDOTHrs,  RHNDHrs,  SHNDHrs,  RDNDHrs,  VLDays,  SLDays,  ELDays,  PLDays,  TrODays,  UserName,  FromDate,  ToDate,  VLBalance,  SLBalance,  ELBalance,  PLBalance,  AgencyShare,  NDMealAllowance,  Division,  Employer,  PayrollID,  Email,  Locked,  `Position`,  Thirteenth,  Taxable,  NDOTHrs,  RHNDOTHrs,  SHNDOTHrs,  RDNDOTHrs,  DH,  DHRD,  DHOT,  DHRDOT,  SHRDND,  RHRDND,  SHRDNDOT,  RHRDNDOT,  DHND,  DHRDND,  DHNDOT,  DHRDNDOT,  ThirToDate,  TaxableToDate,  TaxToDate,  SHOTD,  RegRD,  RHRD,  SHRD,  RegND,  RHRDOT,  SHRDOT,  SHRDOTD";
$tdatapayrolltab1[".sqlFrom"] = "FROM payrolltab";
$tdatapayrolltab1[".sqlWhereExpr"] = "";
$tdatapayrolltab1[".sqlTail"] = "";

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
$tdatapayrolltab1[".arrGridTabs"] = $arrGridTabs;











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
$tdatapayrolltab1[".listFields"][] = "FromDate";
$tdatapayrolltab1[".listFields"][] = "ToDate";
$tdatapayrolltab1[".listFields"][] = "EmployeeID";
$tdatapayrolltab1[".listFields"][] = "UserName";
$tdatapayrolltab1[".listFields"][] = "Email";
$tdatapayrolltab1[".listFields"][] = "Position";
$tdatapayrolltab1[".listFields"][] = "Division";
$tdatapayrolltab1[".listFields"][] = "Employer";
$tdatapayrolltab1[".listFields"][] = "WageType";
$tdatapayrolltab1[".listFields"][] = "Status";
$tdatapayrolltab1[".listFields"][] = "BasicMonthly";
$tdatapayrolltab1[".listFields"][] = "BasicDaily";
$tdatapayrolltab1[".listFields"][] = "DWork";
$tdatapayrolltab1[".listFields"][] = "Absent";
$tdatapayrolltab1[".listFields"][] = "LateMins";
$tdatapayrolltab1[".listFields"][] = "UndertimeMins";
$tdatapayrolltab1[".listFields"][] = "VLDays";
$tdatapayrolltab1[".listFields"][] = "SLDays";
$tdatapayrolltab1[".listFields"][] = "ELDays";
$tdatapayrolltab1[".listFields"][] = "PLDays";
$tdatapayrolltab1[".listFields"][] = "TrODays";
$tdatapayrolltab1[".listFields"][] = "PLBalance";
$tdatapayrolltab1[".listFields"][] = "ELBalance";
$tdatapayrolltab1[".listFields"][] = "SLBalance";
$tdatapayrolltab1[".listFields"][] = "VLBalance";
$tdatapayrolltab1[".listFields"][] = "RHolidayHrs";
$tdatapayrolltab1[".listFields"][] = "SHolidayHrs";
$tdatapayrolltab1[".listFields"][] = "DH";
$tdatapayrolltab1[".listFields"][] = "RegRD";
$tdatapayrolltab1[".listFields"][] = "ExcessHrs";
$tdatapayrolltab1[".listFields"][] = "RegOTHrs";
$tdatapayrolltab1[".listFields"][] = "RHOTHrs";
$tdatapayrolltab1[".listFields"][] = "SHOTHRs";
$tdatapayrolltab1[".listFields"][] = "SHOTD";
$tdatapayrolltab1[".listFields"][] = "RDOTHrs";
$tdatapayrolltab1[".listFields"][] = "DHOT";
$tdatapayrolltab1[".listFields"][] = "NDOTHrs";
$tdatapayrolltab1[".listFields"][] = "RegND";
$tdatapayrolltab1[".listFields"][] = "RHNDHrs";
$tdatapayrolltab1[".listFields"][] = "SHNDHrs";
$tdatapayrolltab1[".listFields"][] = "DHND";
$tdatapayrolltab1[".listFields"][] = "RDNDHrs";
$tdatapayrolltab1[".listFields"][] = "RHNDOTHrs";
$tdatapayrolltab1[".listFields"][] = "SHNDOTHrs";
$tdatapayrolltab1[".listFields"][] = "DHNDOT";
$tdatapayrolltab1[".listFields"][] = "RDNDOTHrs";
$tdatapayrolltab1[".listFields"][] = "RHRD";
$tdatapayrolltab1[".listFields"][] = "SHRD";
$tdatapayrolltab1[".listFields"][] = "DHRD";
$tdatapayrolltab1[".listFields"][] = "RHRDOT";
$tdatapayrolltab1[".listFields"][] = "SHRDOT";
$tdatapayrolltab1[".listFields"][] = "SHRDOTD";
$tdatapayrolltab1[".listFields"][] = "DHRDOT";
$tdatapayrolltab1[".listFields"][] = "RHRDND";
$tdatapayrolltab1[".listFields"][] = "SHRDND";
$tdatapayrolltab1[".listFields"][] = "DHRDND";
$tdatapayrolltab1[".listFields"][] = "RHRDNDOT";
$tdatapayrolltab1[".listFields"][] = "SHRDNDOT";
$tdatapayrolltab1[".listFields"][] = "DHRDNDOT";
$tdatapayrolltab1[".listFields"][] = "AgencyShare";
$tdatapayrolltab1[".listFields"][] = "NDMealAllowance";
$tdatapayrolltab1[".listFields"][] = "Thirteenth";
$tdatapayrolltab1[".listFields"][] = "Taxable";
$tdatapayrolltab1[".listFields"][] = "ThirToDate";
$tdatapayrolltab1[".listFields"][] = "TaxableToDate";
$tdatapayrolltab1[".listFields"][] = "TaxToDate";
$tdatapayrolltab1[".listFields"][] = "PayrollID";

$tdatapayrolltab1[".hideMobileList"] = array();


$tdatapayrolltab1[".viewFields"] = array();
$tdatapayrolltab1[".viewFields"][] = "PtabID";
$tdatapayrolltab1[".viewFields"][] = "Locked";
$tdatapayrolltab1[".viewFields"][] = "FromDate";
$tdatapayrolltab1[".viewFields"][] = "ToDate";
$tdatapayrolltab1[".viewFields"][] = "EmployeeID";
$tdatapayrolltab1[".viewFields"][] = "UserName";
$tdatapayrolltab1[".viewFields"][] = "Email";
$tdatapayrolltab1[".viewFields"][] = "Position";
$tdatapayrolltab1[".viewFields"][] = "Division";
$tdatapayrolltab1[".viewFields"][] = "Employer";
$tdatapayrolltab1[".viewFields"][] = "WageType";
$tdatapayrolltab1[".viewFields"][] = "Status";
$tdatapayrolltab1[".viewFields"][] = "BasicMonthly";
$tdatapayrolltab1[".viewFields"][] = "BasicDaily";
$tdatapayrolltab1[".viewFields"][] = "DWork";
$tdatapayrolltab1[".viewFields"][] = "Absent";
$tdatapayrolltab1[".viewFields"][] = "LateMins";
$tdatapayrolltab1[".viewFields"][] = "UndertimeMins";
$tdatapayrolltab1[".viewFields"][] = "VLDays";
$tdatapayrolltab1[".viewFields"][] = "SLDays";
$tdatapayrolltab1[".viewFields"][] = "ELDays";
$tdatapayrolltab1[".viewFields"][] = "PLDays";
$tdatapayrolltab1[".viewFields"][] = "TrODays";
$tdatapayrolltab1[".viewFields"][] = "PLBalance";
$tdatapayrolltab1[".viewFields"][] = "ELBalance";
$tdatapayrolltab1[".viewFields"][] = "SLBalance";
$tdatapayrolltab1[".viewFields"][] = "VLBalance";
$tdatapayrolltab1[".viewFields"][] = "RHolidayHrs";
$tdatapayrolltab1[".viewFields"][] = "SHolidayHrs";
$tdatapayrolltab1[".viewFields"][] = "DH";
$tdatapayrolltab1[".viewFields"][] = "RegRD";
$tdatapayrolltab1[".viewFields"][] = "ExcessHrs";
$tdatapayrolltab1[".viewFields"][] = "RegOTHrs";
$tdatapayrolltab1[".viewFields"][] = "RHOTHrs";
$tdatapayrolltab1[".viewFields"][] = "SHOTHRs";
$tdatapayrolltab1[".viewFields"][] = "SHOTD";
$tdatapayrolltab1[".viewFields"][] = "RDOTHrs";
$tdatapayrolltab1[".viewFields"][] = "DHOT";
$tdatapayrolltab1[".viewFields"][] = "NDOTHrs";
$tdatapayrolltab1[".viewFields"][] = "RegND";
$tdatapayrolltab1[".viewFields"][] = "RHNDHrs";
$tdatapayrolltab1[".viewFields"][] = "SHNDHrs";
$tdatapayrolltab1[".viewFields"][] = "DHND";
$tdatapayrolltab1[".viewFields"][] = "RDNDHrs";
$tdatapayrolltab1[".viewFields"][] = "RHNDOTHrs";
$tdatapayrolltab1[".viewFields"][] = "SHNDOTHrs";
$tdatapayrolltab1[".viewFields"][] = "DHNDOT";
$tdatapayrolltab1[".viewFields"][] = "RDNDOTHrs";
$tdatapayrolltab1[".viewFields"][] = "RHRD";
$tdatapayrolltab1[".viewFields"][] = "SHRD";
$tdatapayrolltab1[".viewFields"][] = "DHRD";
$tdatapayrolltab1[".viewFields"][] = "RHRDOT";
$tdatapayrolltab1[".viewFields"][] = "SHRDOT";
$tdatapayrolltab1[".viewFields"][] = "SHRDOTD";
$tdatapayrolltab1[".viewFields"][] = "DHRDOT";
$tdatapayrolltab1[".viewFields"][] = "RHRDND";
$tdatapayrolltab1[".viewFields"][] = "SHRDND";
$tdatapayrolltab1[".viewFields"][] = "DHRDND";
$tdatapayrolltab1[".viewFields"][] = "RHRDNDOT";
$tdatapayrolltab1[".viewFields"][] = "SHRDNDOT";
$tdatapayrolltab1[".viewFields"][] = "DHRDNDOT";
$tdatapayrolltab1[".viewFields"][] = "AgencyShare";
$tdatapayrolltab1[".viewFields"][] = "NDMealAllowance";
$tdatapayrolltab1[".viewFields"][] = "Thirteenth";
$tdatapayrolltab1[".viewFields"][] = "Taxable";
$tdatapayrolltab1[".viewFields"][] = "ThirToDate";
$tdatapayrolltab1[".viewFields"][] = "TaxableToDate";
$tdatapayrolltab1[".viewFields"][] = "TaxToDate";
$tdatapayrolltab1[".viewFields"][] = "PayrollID";

$tdatapayrolltab1[".addFields"] = array();
$tdatapayrolltab1[".addFields"][] = "Locked";
$tdatapayrolltab1[".addFields"][] = "FromDate";
$tdatapayrolltab1[".addFields"][] = "ToDate";
$tdatapayrolltab1[".addFields"][] = "UserName";
$tdatapayrolltab1[".addFields"][] = "Email";
$tdatapayrolltab1[".addFields"][] = "Position";
$tdatapayrolltab1[".addFields"][] = "Division";
$tdatapayrolltab1[".addFields"][] = "Employer";
$tdatapayrolltab1[".addFields"][] = "WageType";
$tdatapayrolltab1[".addFields"][] = "Status";
$tdatapayrolltab1[".addFields"][] = "BasicMonthly";
$tdatapayrolltab1[".addFields"][] = "BasicDaily";
$tdatapayrolltab1[".addFields"][] = "DWork";
$tdatapayrolltab1[".addFields"][] = "Absent";
$tdatapayrolltab1[".addFields"][] = "LateMins";
$tdatapayrolltab1[".addFields"][] = "UndertimeMins";
$tdatapayrolltab1[".addFields"][] = "VLDays";
$tdatapayrolltab1[".addFields"][] = "SLDays";
$tdatapayrolltab1[".addFields"][] = "ELDays";
$tdatapayrolltab1[".addFields"][] = "PLDays";
$tdatapayrolltab1[".addFields"][] = "TrODays";
$tdatapayrolltab1[".addFields"][] = "PLBalance";
$tdatapayrolltab1[".addFields"][] = "ELBalance";
$tdatapayrolltab1[".addFields"][] = "SLBalance";
$tdatapayrolltab1[".addFields"][] = "VLBalance";
$tdatapayrolltab1[".addFields"][] = "RHolidayHrs";
$tdatapayrolltab1[".addFields"][] = "SHolidayHrs";
$tdatapayrolltab1[".addFields"][] = "DH";
$tdatapayrolltab1[".addFields"][] = "RegRD";
$tdatapayrolltab1[".addFields"][] = "ExcessHrs";
$tdatapayrolltab1[".addFields"][] = "RegOTHrs";
$tdatapayrolltab1[".addFields"][] = "RHOTHrs";
$tdatapayrolltab1[".addFields"][] = "SHOTHRs";
$tdatapayrolltab1[".addFields"][] = "SHOTD";
$tdatapayrolltab1[".addFields"][] = "RDOTHrs";
$tdatapayrolltab1[".addFields"][] = "DHOT";
$tdatapayrolltab1[".addFields"][] = "NDOTHrs";
$tdatapayrolltab1[".addFields"][] = "RegND";
$tdatapayrolltab1[".addFields"][] = "RHNDHrs";
$tdatapayrolltab1[".addFields"][] = "SHNDHrs";
$tdatapayrolltab1[".addFields"][] = "DHND";
$tdatapayrolltab1[".addFields"][] = "RDNDHrs";
$tdatapayrolltab1[".addFields"][] = "RHNDOTHrs";
$tdatapayrolltab1[".addFields"][] = "SHNDOTHrs";
$tdatapayrolltab1[".addFields"][] = "DHNDOT";
$tdatapayrolltab1[".addFields"][] = "RDNDOTHrs";
$tdatapayrolltab1[".addFields"][] = "RHRD";
$tdatapayrolltab1[".addFields"][] = "SHRD";
$tdatapayrolltab1[".addFields"][] = "DHRD";
$tdatapayrolltab1[".addFields"][] = "RHRDOT";
$tdatapayrolltab1[".addFields"][] = "SHRDOT";
$tdatapayrolltab1[".addFields"][] = "SHRDOTD";
$tdatapayrolltab1[".addFields"][] = "DHRDOT";
$tdatapayrolltab1[".addFields"][] = "RHRDND";
$tdatapayrolltab1[".addFields"][] = "SHRDND";
$tdatapayrolltab1[".addFields"][] = "DHRDND";
$tdatapayrolltab1[".addFields"][] = "RHRDNDOT";
$tdatapayrolltab1[".addFields"][] = "SHRDNDOT";
$tdatapayrolltab1[".addFields"][] = "DHRDNDOT";
$tdatapayrolltab1[".addFields"][] = "AgencyShare";
$tdatapayrolltab1[".addFields"][] = "NDMealAllowance";
$tdatapayrolltab1[".addFields"][] = "Thirteenth";
$tdatapayrolltab1[".addFields"][] = "Taxable";
$tdatapayrolltab1[".addFields"][] = "ThirToDate";
$tdatapayrolltab1[".addFields"][] = "TaxableToDate";
$tdatapayrolltab1[".addFields"][] = "TaxToDate";
$tdatapayrolltab1[".addFields"][] = "PayrollID";

$tdatapayrolltab1[".masterListFields"] = array();
$tdatapayrolltab1[".masterListFields"][] = "PtabID";
$tdatapayrolltab1[".masterListFields"][] = "Locked";
$tdatapayrolltab1[".masterListFields"][] = "FromDate";
$tdatapayrolltab1[".masterListFields"][] = "ToDate";
$tdatapayrolltab1[".masterListFields"][] = "EmployeeID";
$tdatapayrolltab1[".masterListFields"][] = "UserName";
$tdatapayrolltab1[".masterListFields"][] = "Email";
$tdatapayrolltab1[".masterListFields"][] = "Position";
$tdatapayrolltab1[".masterListFields"][] = "Division";
$tdatapayrolltab1[".masterListFields"][] = "Employer";
$tdatapayrolltab1[".masterListFields"][] = "WageType";
$tdatapayrolltab1[".masterListFields"][] = "Status";
$tdatapayrolltab1[".masterListFields"][] = "BasicMonthly";
$tdatapayrolltab1[".masterListFields"][] = "BasicDaily";
$tdatapayrolltab1[".masterListFields"][] = "DWork";
$tdatapayrolltab1[".masterListFields"][] = "Absent";
$tdatapayrolltab1[".masterListFields"][] = "LateMins";
$tdatapayrolltab1[".masterListFields"][] = "UndertimeMins";
$tdatapayrolltab1[".masterListFields"][] = "VLDays";
$tdatapayrolltab1[".masterListFields"][] = "SLDays";
$tdatapayrolltab1[".masterListFields"][] = "ELDays";
$tdatapayrolltab1[".masterListFields"][] = "PLDays";
$tdatapayrolltab1[".masterListFields"][] = "TrODays";
$tdatapayrolltab1[".masterListFields"][] = "PLBalance";
$tdatapayrolltab1[".masterListFields"][] = "ELBalance";
$tdatapayrolltab1[".masterListFields"][] = "SLBalance";
$tdatapayrolltab1[".masterListFields"][] = "VLBalance";
$tdatapayrolltab1[".masterListFields"][] = "RHolidayHrs";
$tdatapayrolltab1[".masterListFields"][] = "SHolidayHrs";
$tdatapayrolltab1[".masterListFields"][] = "DH";
$tdatapayrolltab1[".masterListFields"][] = "RegRD";
$tdatapayrolltab1[".masterListFields"][] = "ExcessHrs";
$tdatapayrolltab1[".masterListFields"][] = "RegOTHrs";
$tdatapayrolltab1[".masterListFields"][] = "RHOTHrs";
$tdatapayrolltab1[".masterListFields"][] = "SHOTHRs";
$tdatapayrolltab1[".masterListFields"][] = "SHOTD";
$tdatapayrolltab1[".masterListFields"][] = "RDOTHrs";
$tdatapayrolltab1[".masterListFields"][] = "DHOT";
$tdatapayrolltab1[".masterListFields"][] = "NDOTHrs";
$tdatapayrolltab1[".masterListFields"][] = "RegND";
$tdatapayrolltab1[".masterListFields"][] = "RHNDHrs";
$tdatapayrolltab1[".masterListFields"][] = "SHNDHrs";
$tdatapayrolltab1[".masterListFields"][] = "DHND";
$tdatapayrolltab1[".masterListFields"][] = "RDNDHrs";
$tdatapayrolltab1[".masterListFields"][] = "RHNDOTHrs";
$tdatapayrolltab1[".masterListFields"][] = "SHNDOTHrs";
$tdatapayrolltab1[".masterListFields"][] = "DHNDOT";
$tdatapayrolltab1[".masterListFields"][] = "RDNDOTHrs";
$tdatapayrolltab1[".masterListFields"][] = "RHRD";
$tdatapayrolltab1[".masterListFields"][] = "SHRD";
$tdatapayrolltab1[".masterListFields"][] = "DHRD";
$tdatapayrolltab1[".masterListFields"][] = "RHRDOT";
$tdatapayrolltab1[".masterListFields"][] = "SHRDOT";
$tdatapayrolltab1[".masterListFields"][] = "SHRDOTD";
$tdatapayrolltab1[".masterListFields"][] = "DHRDOT";
$tdatapayrolltab1[".masterListFields"][] = "RHRDND";
$tdatapayrolltab1[".masterListFields"][] = "SHRDND";
$tdatapayrolltab1[".masterListFields"][] = "DHRDND";
$tdatapayrolltab1[".masterListFields"][] = "RHRDNDOT";
$tdatapayrolltab1[".masterListFields"][] = "SHRDNDOT";
$tdatapayrolltab1[".masterListFields"][] = "DHRDNDOT";
$tdatapayrolltab1[".masterListFields"][] = "AgencyShare";
$tdatapayrolltab1[".masterListFields"][] = "NDMealAllowance";
$tdatapayrolltab1[".masterListFields"][] = "Thirteenth";
$tdatapayrolltab1[".masterListFields"][] = "Taxable";
$tdatapayrolltab1[".masterListFields"][] = "ThirToDate";
$tdatapayrolltab1[".masterListFields"][] = "TaxableToDate";
$tdatapayrolltab1[".masterListFields"][] = "TaxToDate";
$tdatapayrolltab1[".masterListFields"][] = "PayrollID";

$tdatapayrolltab1[".inlineAddFields"] = array();
$tdatapayrolltab1[".inlineAddFields"][] = "Locked";
$tdatapayrolltab1[".inlineAddFields"][] = "FromDate";
$tdatapayrolltab1[".inlineAddFields"][] = "ToDate";
$tdatapayrolltab1[".inlineAddFields"][] = "UserName";
$tdatapayrolltab1[".inlineAddFields"][] = "Email";
$tdatapayrolltab1[".inlineAddFields"][] = "Position";
$tdatapayrolltab1[".inlineAddFields"][] = "Division";
$tdatapayrolltab1[".inlineAddFields"][] = "Employer";
$tdatapayrolltab1[".inlineAddFields"][] = "WageType";
$tdatapayrolltab1[".inlineAddFields"][] = "Status";
$tdatapayrolltab1[".inlineAddFields"][] = "BasicMonthly";
$tdatapayrolltab1[".inlineAddFields"][] = "BasicDaily";
$tdatapayrolltab1[".inlineAddFields"][] = "DWork";
$tdatapayrolltab1[".inlineAddFields"][] = "Absent";
$tdatapayrolltab1[".inlineAddFields"][] = "LateMins";
$tdatapayrolltab1[".inlineAddFields"][] = "UndertimeMins";
$tdatapayrolltab1[".inlineAddFields"][] = "VLDays";
$tdatapayrolltab1[".inlineAddFields"][] = "SLDays";
$tdatapayrolltab1[".inlineAddFields"][] = "ELDays";
$tdatapayrolltab1[".inlineAddFields"][] = "PLDays";
$tdatapayrolltab1[".inlineAddFields"][] = "TrODays";
$tdatapayrolltab1[".inlineAddFields"][] = "PLBalance";
$tdatapayrolltab1[".inlineAddFields"][] = "ELBalance";
$tdatapayrolltab1[".inlineAddFields"][] = "SLBalance";
$tdatapayrolltab1[".inlineAddFields"][] = "VLBalance";
$tdatapayrolltab1[".inlineAddFields"][] = "RHolidayHrs";
$tdatapayrolltab1[".inlineAddFields"][] = "SHolidayHrs";
$tdatapayrolltab1[".inlineAddFields"][] = "DH";
$tdatapayrolltab1[".inlineAddFields"][] = "RegRD";
$tdatapayrolltab1[".inlineAddFields"][] = "ExcessHrs";
$tdatapayrolltab1[".inlineAddFields"][] = "RegOTHrs";
$tdatapayrolltab1[".inlineAddFields"][] = "RHOTHrs";
$tdatapayrolltab1[".inlineAddFields"][] = "SHOTHRs";
$tdatapayrolltab1[".inlineAddFields"][] = "SHOTD";
$tdatapayrolltab1[".inlineAddFields"][] = "RDOTHrs";
$tdatapayrolltab1[".inlineAddFields"][] = "DHOT";
$tdatapayrolltab1[".inlineAddFields"][] = "NDOTHrs";
$tdatapayrolltab1[".inlineAddFields"][] = "RegND";
$tdatapayrolltab1[".inlineAddFields"][] = "RHNDHrs";
$tdatapayrolltab1[".inlineAddFields"][] = "SHNDHrs";
$tdatapayrolltab1[".inlineAddFields"][] = "DHND";
$tdatapayrolltab1[".inlineAddFields"][] = "RDNDHrs";
$tdatapayrolltab1[".inlineAddFields"][] = "RHNDOTHrs";
$tdatapayrolltab1[".inlineAddFields"][] = "SHNDOTHrs";
$tdatapayrolltab1[".inlineAddFields"][] = "DHNDOT";
$tdatapayrolltab1[".inlineAddFields"][] = "RDNDOTHrs";
$tdatapayrolltab1[".inlineAddFields"][] = "RHRD";
$tdatapayrolltab1[".inlineAddFields"][] = "SHRD";
$tdatapayrolltab1[".inlineAddFields"][] = "DHRD";
$tdatapayrolltab1[".inlineAddFields"][] = "RHRDOT";
$tdatapayrolltab1[".inlineAddFields"][] = "SHRDOT";
$tdatapayrolltab1[".inlineAddFields"][] = "SHRDOTD";
$tdatapayrolltab1[".inlineAddFields"][] = "DHRDOT";
$tdatapayrolltab1[".inlineAddFields"][] = "RHRDND";
$tdatapayrolltab1[".inlineAddFields"][] = "SHRDND";
$tdatapayrolltab1[".inlineAddFields"][] = "DHRDND";
$tdatapayrolltab1[".inlineAddFields"][] = "RHRDNDOT";
$tdatapayrolltab1[".inlineAddFields"][] = "SHRDNDOT";
$tdatapayrolltab1[".inlineAddFields"][] = "DHRDNDOT";
$tdatapayrolltab1[".inlineAddFields"][] = "AgencyShare";
$tdatapayrolltab1[".inlineAddFields"][] = "NDMealAllowance";
$tdatapayrolltab1[".inlineAddFields"][] = "Thirteenth";
$tdatapayrolltab1[".inlineAddFields"][] = "Taxable";
$tdatapayrolltab1[".inlineAddFields"][] = "ThirToDate";
$tdatapayrolltab1[".inlineAddFields"][] = "TaxableToDate";
$tdatapayrolltab1[".inlineAddFields"][] = "TaxToDate";
$tdatapayrolltab1[".inlineAddFields"][] = "PayrollID";

$tdatapayrolltab1[".editFields"] = array();
$tdatapayrolltab1[".editFields"][] = "Locked";
$tdatapayrolltab1[".editFields"][] = "FromDate";
$tdatapayrolltab1[".editFields"][] = "ToDate";
$tdatapayrolltab1[".editFields"][] = "EmployeeID";
$tdatapayrolltab1[".editFields"][] = "UserName";
$tdatapayrolltab1[".editFields"][] = "Email";
$tdatapayrolltab1[".editFields"][] = "Position";
$tdatapayrolltab1[".editFields"][] = "Division";
$tdatapayrolltab1[".editFields"][] = "Employer";
$tdatapayrolltab1[".editFields"][] = "WageType";
$tdatapayrolltab1[".editFields"][] = "Status";
$tdatapayrolltab1[".editFields"][] = "BasicMonthly";
$tdatapayrolltab1[".editFields"][] = "BasicDaily";
$tdatapayrolltab1[".editFields"][] = "DWork";
$tdatapayrolltab1[".editFields"][] = "Absent";
$tdatapayrolltab1[".editFields"][] = "LateMins";
$tdatapayrolltab1[".editFields"][] = "UndertimeMins";
$tdatapayrolltab1[".editFields"][] = "VLDays";
$tdatapayrolltab1[".editFields"][] = "SLDays";
$tdatapayrolltab1[".editFields"][] = "ELDays";
$tdatapayrolltab1[".editFields"][] = "PLDays";
$tdatapayrolltab1[".editFields"][] = "TrODays";
$tdatapayrolltab1[".editFields"][] = "PLBalance";
$tdatapayrolltab1[".editFields"][] = "ELBalance";
$tdatapayrolltab1[".editFields"][] = "SLBalance";
$tdatapayrolltab1[".editFields"][] = "VLBalance";
$tdatapayrolltab1[".editFields"][] = "RHolidayHrs";
$tdatapayrolltab1[".editFields"][] = "SHolidayHrs";
$tdatapayrolltab1[".editFields"][] = "DH";
$tdatapayrolltab1[".editFields"][] = "RegRD";
$tdatapayrolltab1[".editFields"][] = "ExcessHrs";
$tdatapayrolltab1[".editFields"][] = "RegOTHrs";
$tdatapayrolltab1[".editFields"][] = "RHOTHrs";
$tdatapayrolltab1[".editFields"][] = "SHOTHRs";
$tdatapayrolltab1[".editFields"][] = "SHOTD";
$tdatapayrolltab1[".editFields"][] = "RDOTHrs";
$tdatapayrolltab1[".editFields"][] = "DHOT";
$tdatapayrolltab1[".editFields"][] = "NDOTHrs";
$tdatapayrolltab1[".editFields"][] = "RegND";
$tdatapayrolltab1[".editFields"][] = "RHNDHrs";
$tdatapayrolltab1[".editFields"][] = "SHNDHrs";
$tdatapayrolltab1[".editFields"][] = "DHND";
$tdatapayrolltab1[".editFields"][] = "RDNDHrs";
$tdatapayrolltab1[".editFields"][] = "RHNDOTHrs";
$tdatapayrolltab1[".editFields"][] = "SHNDOTHrs";
$tdatapayrolltab1[".editFields"][] = "DHNDOT";
$tdatapayrolltab1[".editFields"][] = "RDNDOTHrs";
$tdatapayrolltab1[".editFields"][] = "RHRD";
$tdatapayrolltab1[".editFields"][] = "SHRD";
$tdatapayrolltab1[".editFields"][] = "DHRD";
$tdatapayrolltab1[".editFields"][] = "RHRDOT";
$tdatapayrolltab1[".editFields"][] = "SHRDOT";
$tdatapayrolltab1[".editFields"][] = "SHRDOTD";
$tdatapayrolltab1[".editFields"][] = "DHRDOT";
$tdatapayrolltab1[".editFields"][] = "RHRDND";
$tdatapayrolltab1[".editFields"][] = "SHRDND";
$tdatapayrolltab1[".editFields"][] = "DHRDND";
$tdatapayrolltab1[".editFields"][] = "RHRDNDOT";
$tdatapayrolltab1[".editFields"][] = "SHRDNDOT";
$tdatapayrolltab1[".editFields"][] = "DHRDNDOT";
$tdatapayrolltab1[".editFields"][] = "AgencyShare";
$tdatapayrolltab1[".editFields"][] = "NDMealAllowance";
$tdatapayrolltab1[".editFields"][] = "Thirteenth";
$tdatapayrolltab1[".editFields"][] = "Taxable";
$tdatapayrolltab1[".editFields"][] = "ThirToDate";
$tdatapayrolltab1[".editFields"][] = "TaxableToDate";
$tdatapayrolltab1[".editFields"][] = "TaxToDate";
$tdatapayrolltab1[".editFields"][] = "PayrollID";

$tdatapayrolltab1[".inlineEditFields"] = array();
$tdatapayrolltab1[".inlineEditFields"][] = "Locked";
$tdatapayrolltab1[".inlineEditFields"][] = "FromDate";
$tdatapayrolltab1[".inlineEditFields"][] = "ToDate";
$tdatapayrolltab1[".inlineEditFields"][] = "EmployeeID";
$tdatapayrolltab1[".inlineEditFields"][] = "UserName";
$tdatapayrolltab1[".inlineEditFields"][] = "Email";
$tdatapayrolltab1[".inlineEditFields"][] = "Position";
$tdatapayrolltab1[".inlineEditFields"][] = "Division";
$tdatapayrolltab1[".inlineEditFields"][] = "Employer";
$tdatapayrolltab1[".inlineEditFields"][] = "WageType";
$tdatapayrolltab1[".inlineEditFields"][] = "Status";
$tdatapayrolltab1[".inlineEditFields"][] = "BasicMonthly";
$tdatapayrolltab1[".inlineEditFields"][] = "BasicDaily";
$tdatapayrolltab1[".inlineEditFields"][] = "DWork";
$tdatapayrolltab1[".inlineEditFields"][] = "Absent";
$tdatapayrolltab1[".inlineEditFields"][] = "LateMins";
$tdatapayrolltab1[".inlineEditFields"][] = "UndertimeMins";
$tdatapayrolltab1[".inlineEditFields"][] = "VLDays";
$tdatapayrolltab1[".inlineEditFields"][] = "SLDays";
$tdatapayrolltab1[".inlineEditFields"][] = "ELDays";
$tdatapayrolltab1[".inlineEditFields"][] = "PLDays";
$tdatapayrolltab1[".inlineEditFields"][] = "TrODays";
$tdatapayrolltab1[".inlineEditFields"][] = "PLBalance";
$tdatapayrolltab1[".inlineEditFields"][] = "ELBalance";
$tdatapayrolltab1[".inlineEditFields"][] = "SLBalance";
$tdatapayrolltab1[".inlineEditFields"][] = "VLBalance";
$tdatapayrolltab1[".inlineEditFields"][] = "RHolidayHrs";
$tdatapayrolltab1[".inlineEditFields"][] = "SHolidayHrs";
$tdatapayrolltab1[".inlineEditFields"][] = "DH";
$tdatapayrolltab1[".inlineEditFields"][] = "RegRD";
$tdatapayrolltab1[".inlineEditFields"][] = "ExcessHrs";
$tdatapayrolltab1[".inlineEditFields"][] = "RegOTHrs";
$tdatapayrolltab1[".inlineEditFields"][] = "RHOTHrs";
$tdatapayrolltab1[".inlineEditFields"][] = "SHOTHRs";
$tdatapayrolltab1[".inlineEditFields"][] = "SHOTD";
$tdatapayrolltab1[".inlineEditFields"][] = "RDOTHrs";
$tdatapayrolltab1[".inlineEditFields"][] = "DHOT";
$tdatapayrolltab1[".inlineEditFields"][] = "NDOTHrs";
$tdatapayrolltab1[".inlineEditFields"][] = "RegND";
$tdatapayrolltab1[".inlineEditFields"][] = "RHNDHrs";
$tdatapayrolltab1[".inlineEditFields"][] = "SHNDHrs";
$tdatapayrolltab1[".inlineEditFields"][] = "DHND";
$tdatapayrolltab1[".inlineEditFields"][] = "RDNDHrs";
$tdatapayrolltab1[".inlineEditFields"][] = "RHNDOTHrs";
$tdatapayrolltab1[".inlineEditFields"][] = "SHNDOTHrs";
$tdatapayrolltab1[".inlineEditFields"][] = "DHNDOT";
$tdatapayrolltab1[".inlineEditFields"][] = "RDNDOTHrs";
$tdatapayrolltab1[".inlineEditFields"][] = "RHRD";
$tdatapayrolltab1[".inlineEditFields"][] = "SHRD";
$tdatapayrolltab1[".inlineEditFields"][] = "DHRD";
$tdatapayrolltab1[".inlineEditFields"][] = "RHRDOT";
$tdatapayrolltab1[".inlineEditFields"][] = "SHRDOT";
$tdatapayrolltab1[".inlineEditFields"][] = "SHRDOTD";
$tdatapayrolltab1[".inlineEditFields"][] = "DHRDOT";
$tdatapayrolltab1[".inlineEditFields"][] = "RHRDND";
$tdatapayrolltab1[".inlineEditFields"][] = "SHRDND";
$tdatapayrolltab1[".inlineEditFields"][] = "DHRDND";
$tdatapayrolltab1[".inlineEditFields"][] = "RHRDNDOT";
$tdatapayrolltab1[".inlineEditFields"][] = "SHRDNDOT";
$tdatapayrolltab1[".inlineEditFields"][] = "DHRDNDOT";
$tdatapayrolltab1[".inlineEditFields"][] = "AgencyShare";
$tdatapayrolltab1[".inlineEditFields"][] = "NDMealAllowance";
$tdatapayrolltab1[".inlineEditFields"][] = "Thirteenth";
$tdatapayrolltab1[".inlineEditFields"][] = "Taxable";
$tdatapayrolltab1[".inlineEditFields"][] = "ThirToDate";
$tdatapayrolltab1[".inlineEditFields"][] = "TaxableToDate";
$tdatapayrolltab1[".inlineEditFields"][] = "TaxToDate";
$tdatapayrolltab1[".inlineEditFields"][] = "PayrollID";

$tdatapayrolltab1[".updateSelectedFields"] = array();
$tdatapayrolltab1[".updateSelectedFields"][] = "Locked";
$tdatapayrolltab1[".updateSelectedFields"][] = "RegOTHrs";


$tdatapayrolltab1[".exportFields"] = array();
$tdatapayrolltab1[".exportFields"][] = "PtabID";
$tdatapayrolltab1[".exportFields"][] = "Locked";
$tdatapayrolltab1[".exportFields"][] = "FromDate";
$tdatapayrolltab1[".exportFields"][] = "ToDate";
$tdatapayrolltab1[".exportFields"][] = "EmployeeID";
$tdatapayrolltab1[".exportFields"][] = "UserName";
$tdatapayrolltab1[".exportFields"][] = "Email";
$tdatapayrolltab1[".exportFields"][] = "Position";
$tdatapayrolltab1[".exportFields"][] = "Division";
$tdatapayrolltab1[".exportFields"][] = "Employer";
$tdatapayrolltab1[".exportFields"][] = "WageType";
$tdatapayrolltab1[".exportFields"][] = "Status";
$tdatapayrolltab1[".exportFields"][] = "BasicMonthly";
$tdatapayrolltab1[".exportFields"][] = "BasicDaily";
$tdatapayrolltab1[".exportFields"][] = "DWork";
$tdatapayrolltab1[".exportFields"][] = "Absent";
$tdatapayrolltab1[".exportFields"][] = "LateMins";
$tdatapayrolltab1[".exportFields"][] = "UndertimeMins";
$tdatapayrolltab1[".exportFields"][] = "VLDays";
$tdatapayrolltab1[".exportFields"][] = "SLDays";
$tdatapayrolltab1[".exportFields"][] = "ELDays";
$tdatapayrolltab1[".exportFields"][] = "PLDays";
$tdatapayrolltab1[".exportFields"][] = "TrODays";
$tdatapayrolltab1[".exportFields"][] = "PLBalance";
$tdatapayrolltab1[".exportFields"][] = "ELBalance";
$tdatapayrolltab1[".exportFields"][] = "SLBalance";
$tdatapayrolltab1[".exportFields"][] = "VLBalance";
$tdatapayrolltab1[".exportFields"][] = "RHolidayHrs";
$tdatapayrolltab1[".exportFields"][] = "SHolidayHrs";
$tdatapayrolltab1[".exportFields"][] = "DH";
$tdatapayrolltab1[".exportFields"][] = "RegRD";
$tdatapayrolltab1[".exportFields"][] = "ExcessHrs";
$tdatapayrolltab1[".exportFields"][] = "RegOTHrs";
$tdatapayrolltab1[".exportFields"][] = "RHOTHrs";
$tdatapayrolltab1[".exportFields"][] = "SHOTHRs";
$tdatapayrolltab1[".exportFields"][] = "SHOTD";
$tdatapayrolltab1[".exportFields"][] = "RDOTHrs";
$tdatapayrolltab1[".exportFields"][] = "DHOT";
$tdatapayrolltab1[".exportFields"][] = "NDOTHrs";
$tdatapayrolltab1[".exportFields"][] = "RegND";
$tdatapayrolltab1[".exportFields"][] = "RHNDHrs";
$tdatapayrolltab1[".exportFields"][] = "SHNDHrs";
$tdatapayrolltab1[".exportFields"][] = "DHND";
$tdatapayrolltab1[".exportFields"][] = "RDNDHrs";
$tdatapayrolltab1[".exportFields"][] = "RHNDOTHrs";
$tdatapayrolltab1[".exportFields"][] = "SHNDOTHrs";
$tdatapayrolltab1[".exportFields"][] = "DHNDOT";
$tdatapayrolltab1[".exportFields"][] = "RDNDOTHrs";
$tdatapayrolltab1[".exportFields"][] = "RHRD";
$tdatapayrolltab1[".exportFields"][] = "SHRD";
$tdatapayrolltab1[".exportFields"][] = "DHRD";
$tdatapayrolltab1[".exportFields"][] = "RHRDOT";
$tdatapayrolltab1[".exportFields"][] = "SHRDOT";
$tdatapayrolltab1[".exportFields"][] = "SHRDOTD";
$tdatapayrolltab1[".exportFields"][] = "DHRDOT";
$tdatapayrolltab1[".exportFields"][] = "RHRDND";
$tdatapayrolltab1[".exportFields"][] = "SHRDND";
$tdatapayrolltab1[".exportFields"][] = "DHRDND";
$tdatapayrolltab1[".exportFields"][] = "RHRDNDOT";
$tdatapayrolltab1[".exportFields"][] = "SHRDNDOT";
$tdatapayrolltab1[".exportFields"][] = "DHRDNDOT";
$tdatapayrolltab1[".exportFields"][] = "AgencyShare";
$tdatapayrolltab1[".exportFields"][] = "NDMealAllowance";
$tdatapayrolltab1[".exportFields"][] = "Thirteenth";
$tdatapayrolltab1[".exportFields"][] = "Taxable";
$tdatapayrolltab1[".exportFields"][] = "ThirToDate";
$tdatapayrolltab1[".exportFields"][] = "TaxableToDate";
$tdatapayrolltab1[".exportFields"][] = "TaxToDate";
$tdatapayrolltab1[".exportFields"][] = "PayrollID";

$tdatapayrolltab1[".importFields"] = array();
$tdatapayrolltab1[".importFields"][] = "PtabID";
$tdatapayrolltab1[".importFields"][] = "EmployeeID";
$tdatapayrolltab1[".importFields"][] = "WageType";
$tdatapayrolltab1[".importFields"][] = "Status";
$tdatapayrolltab1[".importFields"][] = "BasicMonthly";
$tdatapayrolltab1[".importFields"][] = "BasicDaily";
$tdatapayrolltab1[".importFields"][] = "DWork";
$tdatapayrolltab1[".importFields"][] = "Absent";
$tdatapayrolltab1[".importFields"][] = "LateMins";
$tdatapayrolltab1[".importFields"][] = "UndertimeMins";
$tdatapayrolltab1[".importFields"][] = "RHolidayHrs";
$tdatapayrolltab1[".importFields"][] = "SHolidayHrs";
$tdatapayrolltab1[".importFields"][] = "ExcessHrs";
$tdatapayrolltab1[".importFields"][] = "RegOTHrs";
$tdatapayrolltab1[".importFields"][] = "RHOTHrs";
$tdatapayrolltab1[".importFields"][] = "SHOTHRs";
$tdatapayrolltab1[".importFields"][] = "RDOTHrs";
$tdatapayrolltab1[".importFields"][] = "RHNDHrs";
$tdatapayrolltab1[".importFields"][] = "SHNDHrs";
$tdatapayrolltab1[".importFields"][] = "RDNDHrs";
$tdatapayrolltab1[".importFields"][] = "VLDays";
$tdatapayrolltab1[".importFields"][] = "SLDays";
$tdatapayrolltab1[".importFields"][] = "ELDays";
$tdatapayrolltab1[".importFields"][] = "PLDays";
$tdatapayrolltab1[".importFields"][] = "TrODays";
$tdatapayrolltab1[".importFields"][] = "UserName";
$tdatapayrolltab1[".importFields"][] = "FromDate";
$tdatapayrolltab1[".importFields"][] = "ToDate";
$tdatapayrolltab1[".importFields"][] = "VLBalance";
$tdatapayrolltab1[".importFields"][] = "SLBalance";
$tdatapayrolltab1[".importFields"][] = "ELBalance";
$tdatapayrolltab1[".importFields"][] = "PLBalance";
$tdatapayrolltab1[".importFields"][] = "AgencyShare";
$tdatapayrolltab1[".importFields"][] = "NDMealAllowance";
$tdatapayrolltab1[".importFields"][] = "Division";
$tdatapayrolltab1[".importFields"][] = "Employer";
$tdatapayrolltab1[".importFields"][] = "PayrollID";
$tdatapayrolltab1[".importFields"][] = "Email";
$tdatapayrolltab1[".importFields"][] = "Locked";
$tdatapayrolltab1[".importFields"][] = "Position";
$tdatapayrolltab1[".importFields"][] = "Thirteenth";
$tdatapayrolltab1[".importFields"][] = "Taxable";
$tdatapayrolltab1[".importFields"][] = "NDOTHrs";
$tdatapayrolltab1[".importFields"][] = "RHNDOTHrs";
$tdatapayrolltab1[".importFields"][] = "SHNDOTHrs";
$tdatapayrolltab1[".importFields"][] = "RDNDOTHrs";
$tdatapayrolltab1[".importFields"][] = "DH";
$tdatapayrolltab1[".importFields"][] = "DHRD";
$tdatapayrolltab1[".importFields"][] = "DHOT";
$tdatapayrolltab1[".importFields"][] = "DHRDOT";
$tdatapayrolltab1[".importFields"][] = "SHRDND";
$tdatapayrolltab1[".importFields"][] = "RHRDND";
$tdatapayrolltab1[".importFields"][] = "SHRDNDOT";
$tdatapayrolltab1[".importFields"][] = "RHRDNDOT";
$tdatapayrolltab1[".importFields"][] = "DHND";
$tdatapayrolltab1[".importFields"][] = "DHRDND";
$tdatapayrolltab1[".importFields"][] = "DHNDOT";
$tdatapayrolltab1[".importFields"][] = "DHRDNDOT";
$tdatapayrolltab1[".importFields"][] = "ThirToDate";
$tdatapayrolltab1[".importFields"][] = "TaxableToDate";
$tdatapayrolltab1[".importFields"][] = "TaxToDate";
$tdatapayrolltab1[".importFields"][] = "SHOTD";
$tdatapayrolltab1[".importFields"][] = "RegRD";
$tdatapayrolltab1[".importFields"][] = "RHRD";
$tdatapayrolltab1[".importFields"][] = "SHRD";
$tdatapayrolltab1[".importFields"][] = "RegND";
$tdatapayrolltab1[".importFields"][] = "RHRDOT";
$tdatapayrolltab1[".importFields"][] = "SHRDOT";
$tdatapayrolltab1[".importFields"][] = "SHRDOTD";

$tdatapayrolltab1[".printFields"] = array();
$tdatapayrolltab1[".printFields"][] = "PtabID";
$tdatapayrolltab1[".printFields"][] = "Locked";
$tdatapayrolltab1[".printFields"][] = "FromDate";
$tdatapayrolltab1[".printFields"][] = "ToDate";
$tdatapayrolltab1[".printFields"][] = "EmployeeID";
$tdatapayrolltab1[".printFields"][] = "UserName";
$tdatapayrolltab1[".printFields"][] = "Email";
$tdatapayrolltab1[".printFields"][] = "Position";
$tdatapayrolltab1[".printFields"][] = "Division";
$tdatapayrolltab1[".printFields"][] = "Employer";
$tdatapayrolltab1[".printFields"][] = "WageType";
$tdatapayrolltab1[".printFields"][] = "Status";
$tdatapayrolltab1[".printFields"][] = "BasicMonthly";
$tdatapayrolltab1[".printFields"][] = "BasicDaily";
$tdatapayrolltab1[".printFields"][] = "DWork";
$tdatapayrolltab1[".printFields"][] = "Absent";
$tdatapayrolltab1[".printFields"][] = "LateMins";
$tdatapayrolltab1[".printFields"][] = "UndertimeMins";
$tdatapayrolltab1[".printFields"][] = "VLDays";
$tdatapayrolltab1[".printFields"][] = "SLDays";
$tdatapayrolltab1[".printFields"][] = "ELDays";
$tdatapayrolltab1[".printFields"][] = "PLDays";
$tdatapayrolltab1[".printFields"][] = "TrODays";
$tdatapayrolltab1[".printFields"][] = "PLBalance";
$tdatapayrolltab1[".printFields"][] = "ELBalance";
$tdatapayrolltab1[".printFields"][] = "SLBalance";
$tdatapayrolltab1[".printFields"][] = "VLBalance";
$tdatapayrolltab1[".printFields"][] = "RHolidayHrs";
$tdatapayrolltab1[".printFields"][] = "SHolidayHrs";
$tdatapayrolltab1[".printFields"][] = "DH";
$tdatapayrolltab1[".printFields"][] = "RegRD";
$tdatapayrolltab1[".printFields"][] = "ExcessHrs";
$tdatapayrolltab1[".printFields"][] = "RegOTHrs";
$tdatapayrolltab1[".printFields"][] = "RHOTHrs";
$tdatapayrolltab1[".printFields"][] = "SHOTHRs";
$tdatapayrolltab1[".printFields"][] = "SHOTD";
$tdatapayrolltab1[".printFields"][] = "RDOTHrs";
$tdatapayrolltab1[".printFields"][] = "DHOT";
$tdatapayrolltab1[".printFields"][] = "NDOTHrs";
$tdatapayrolltab1[".printFields"][] = "RegND";
$tdatapayrolltab1[".printFields"][] = "RHNDHrs";
$tdatapayrolltab1[".printFields"][] = "SHNDHrs";
$tdatapayrolltab1[".printFields"][] = "DHND";
$tdatapayrolltab1[".printFields"][] = "RDNDHrs";
$tdatapayrolltab1[".printFields"][] = "RHNDOTHrs";
$tdatapayrolltab1[".printFields"][] = "SHNDOTHrs";
$tdatapayrolltab1[".printFields"][] = "DHNDOT";
$tdatapayrolltab1[".printFields"][] = "RDNDOTHrs";
$tdatapayrolltab1[".printFields"][] = "RHRD";
$tdatapayrolltab1[".printFields"][] = "SHRD";
$tdatapayrolltab1[".printFields"][] = "DHRD";
$tdatapayrolltab1[".printFields"][] = "RHRDOT";
$tdatapayrolltab1[".printFields"][] = "SHRDOT";
$tdatapayrolltab1[".printFields"][] = "SHRDOTD";
$tdatapayrolltab1[".printFields"][] = "DHRDOT";
$tdatapayrolltab1[".printFields"][] = "RHRDND";
$tdatapayrolltab1[".printFields"][] = "SHRDND";
$tdatapayrolltab1[".printFields"][] = "DHRDND";
$tdatapayrolltab1[".printFields"][] = "RHRDNDOT";
$tdatapayrolltab1[".printFields"][] = "SHRDNDOT";
$tdatapayrolltab1[".printFields"][] = "DHRDNDOT";
$tdatapayrolltab1[".printFields"][] = "AgencyShare";
$tdatapayrolltab1[".printFields"][] = "NDMealAllowance";
$tdatapayrolltab1[".printFields"][] = "Thirteenth";
$tdatapayrolltab1[".printFields"][] = "Taxable";
$tdatapayrolltab1[".printFields"][] = "ThirToDate";
$tdatapayrolltab1[".printFields"][] = "TaxableToDate";
$tdatapayrolltab1[".printFields"][] = "TaxToDate";
$tdatapayrolltab1[".printFields"][] = "PayrollID";


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




	$tdatapayrolltab1["Status"] = $fdata;
//	BasicMonthly
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "BasicMonthly";
	$fdata["GoodName"] = "BasicMonthly";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","BasicMonthly");
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
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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








	$tdatapayrolltab1["DWork"] = $fdata;
//	Absent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Absent";
	$fdata["GoodName"] = "Absent";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","Absent");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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








	$tdatapayrolltab1["Absent"] = $fdata;
//	LateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "LateMins";
	$fdata["GoodName"] = "LateMins";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","LateMins");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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








	$tdatapayrolltab1["LateMins"] = $fdata;
//	UndertimeMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "UndertimeMins";
	$fdata["GoodName"] = "UndertimeMins";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","UndertimeMins");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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








	$tdatapayrolltab1["UndertimeMins"] = $fdata;
//	RHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "RHolidayHrs";
	$fdata["GoodName"] = "RHolidayHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","RHolidayHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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








	$tdatapayrolltab1["RHolidayHrs"] = $fdata;
//	SHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "SHolidayHrs";
	$fdata["GoodName"] = "SHolidayHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","SHolidayHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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








	$tdatapayrolltab1["SHolidayHrs"] = $fdata;
//	ExcessHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ExcessHrs";
	$fdata["GoodName"] = "ExcessHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","ExcessHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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








	$tdatapayrolltab1["ExcessHrs"] = $fdata;
//	RegOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "RegOTHrs";
	$fdata["GoodName"] = "RegOTHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","RegOTHrs");
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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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








	$tdatapayrolltab1["RegOTHrs"] = $fdata;
//	RHOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "RHOTHrs";
	$fdata["GoodName"] = "RHOTHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","RHOTHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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








	$tdatapayrolltab1["RHOTHrs"] = $fdata;
//	SHOTHRs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "SHOTHRs";
	$fdata["GoodName"] = "SHOTHRs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","SHOTHRs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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








	$tdatapayrolltab1["SHOTHRs"] = $fdata;
//	RDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "RDOTHrs";
	$fdata["GoodName"] = "RDOTHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","RDOTHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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








	$tdatapayrolltab1["RDOTHrs"] = $fdata;
//	RHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "RHNDHrs";
	$fdata["GoodName"] = "RHNDHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","RHNDHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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








	$tdatapayrolltab1["RHNDHrs"] = $fdata;
//	SHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "SHNDHrs";
	$fdata["GoodName"] = "SHNDHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","SHNDHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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








	$tdatapayrolltab1["SHNDHrs"] = $fdata;
//	RDNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "RDNDHrs";
	$fdata["GoodName"] = "RDNDHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","RDNDHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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








	$tdatapayrolltab1["RDNDHrs"] = $fdata;
//	VLDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "VLDays";
	$fdata["GoodName"] = "VLDays";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","VLDays");
	$fdata["FieldType"] = 14;

	
	
	
			
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








	$tdatapayrolltab1["VLDays"] = $fdata;
//	SLDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "SLDays";
	$fdata["GoodName"] = "SLDays";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","SLDays");
	$fdata["FieldType"] = 14;

	
	
	
			
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








	$tdatapayrolltab1["SLDays"] = $fdata;
//	ELDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "ELDays";
	$fdata["GoodName"] = "ELDays";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","ELDays");
	$fdata["FieldType"] = 14;

	
	
	
			
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








	$tdatapayrolltab1["ELDays"] = $fdata;
//	PLDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "PLDays";
	$fdata["GoodName"] = "PLDays";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","PLDays");
	$fdata["FieldType"] = 14;

	
	
	
			
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








	$tdatapayrolltab1["PLDays"] = $fdata;
//	TrODays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "TrODays";
	$fdata["GoodName"] = "TrODays";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","TrODays");
	$fdata["FieldType"] = 14;

	
	
	
			
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








	$tdatapayrolltab1["TrODays"] = $fdata;
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","UserName");
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




	$tdatapayrolltab1["UserName"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","FromDate");
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




	$tdatapayrolltab1["FromDate"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","ToDate");
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




	$tdatapayrolltab1["ToDate"] = $fdata;
//	VLBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "VLBalance";
	$fdata["GoodName"] = "VLBalance";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","VLBalance");
	$fdata["FieldType"] = 14;

	
	
	
			
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








	$tdatapayrolltab1["VLBalance"] = $fdata;
//	SLBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "SLBalance";
	$fdata["GoodName"] = "SLBalance";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","SLBalance");
	$fdata["FieldType"] = 14;

	
	
	
			
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








	$tdatapayrolltab1["SLBalance"] = $fdata;
//	ELBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "ELBalance";
	$fdata["GoodName"] = "ELBalance";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","ELBalance");
	$fdata["FieldType"] = 14;

	
	
	
			
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








	$tdatapayrolltab1["ELBalance"] = $fdata;
//	PLBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "PLBalance";
	$fdata["GoodName"] = "PLBalance";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","PLBalance");
	$fdata["FieldType"] = 14;

	
	
	
			
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








	$tdatapayrolltab1["PLBalance"] = $fdata;
//	AgencyShare
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "AgencyShare";
	$fdata["GoodName"] = "AgencyShare";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","AgencyShare");
	$fdata["FieldType"] = 14;

	
	
	
			
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








	$tdatapayrolltab1["AgencyShare"] = $fdata;
//	NDMealAllowance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "NDMealAllowance";
	$fdata["GoodName"] = "NDMealAllowance";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","NDMealAllowance");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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








	$tdatapayrolltab1["NDMealAllowance"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","Division");
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




	$tdatapayrolltab1["Division"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","Employer");
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




	$tdatapayrolltab1["Employer"] = $fdata;
//	PayrollID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "PayrollID";
	$fdata["GoodName"] = "PayrollID";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","PayrollID");
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








	$tdatapayrolltab1["PayrollID"] = $fdata;
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","Email");
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








	$tdatapayrolltab1["Email"] = $fdata;
//	Locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Locked";
	$fdata["GoodName"] = "Locked";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","Locked");
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








	$tdatapayrolltab1["Locked"] = $fdata;
//	Position
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Position";
	$fdata["GoodName"] = "Position";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","Position");
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








	$tdatapayrolltab1["Position"] = $fdata;
//	Thirteenth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Thirteenth";
	$fdata["GoodName"] = "Thirteenth";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","Thirteenth");
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








	$tdatapayrolltab1["Thirteenth"] = $fdata;
//	Taxable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "Taxable";
	$fdata["GoodName"] = "Taxable";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","Taxable");
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








	$tdatapayrolltab1["Taxable"] = $fdata;
//	NDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "NDOTHrs";
	$fdata["GoodName"] = "NDOTHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","NDOTHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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








	$tdatapayrolltab1["NDOTHrs"] = $fdata;
//	RHNDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "RHNDOTHrs";
	$fdata["GoodName"] = "RHNDOTHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","RHNDOTHrs");
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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapayrolltab1["RHNDOTHrs"] = $fdata;
//	SHNDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "SHNDOTHrs";
	$fdata["GoodName"] = "SHNDOTHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","SHNDOTHrs");
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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapayrolltab1["SHNDOTHrs"] = $fdata;
//	RDNDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "RDNDOTHrs";
	$fdata["GoodName"] = "RDNDOTHrs";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","RDNDOTHrs");
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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapayrolltab1["RDNDOTHrs"] = $fdata;
//	DH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "DH";
	$fdata["GoodName"] = "DH";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","DH");
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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapayrolltab1["DH"] = $fdata;
//	DHRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "DHRD";
	$fdata["GoodName"] = "DHRD";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","DHRD");
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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapayrolltab1["DHRD"] = $fdata;
//	DHOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "DHOT";
	$fdata["GoodName"] = "DHOT";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","DHOT");
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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapayrolltab1["DHOT"] = $fdata;
//	DHRDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "DHRDOT";
	$fdata["GoodName"] = "DHRDOT";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","DHRDOT");
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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapayrolltab1["DHRDOT"] = $fdata;
//	SHRDND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "SHRDND";
	$fdata["GoodName"] = "SHRDND";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","SHRDND");
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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapayrolltab1["SHRDND"] = $fdata;
//	RHRDND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "RHRDND";
	$fdata["GoodName"] = "RHRDND";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","RHRDND");
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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapayrolltab1["RHRDND"] = $fdata;
//	SHRDNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "SHRDNDOT";
	$fdata["GoodName"] = "SHRDNDOT";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","SHRDNDOT");
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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapayrolltab1["SHRDNDOT"] = $fdata;
//	RHRDNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "RHRDNDOT";
	$fdata["GoodName"] = "RHRDNDOT";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","RHRDNDOT");
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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapayrolltab1["RHRDNDOT"] = $fdata;
//	DHND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "DHND";
	$fdata["GoodName"] = "DHND";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","DHND");
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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapayrolltab1["DHND"] = $fdata;
//	DHRDND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "DHRDND";
	$fdata["GoodName"] = "DHRDND";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","DHRDND");
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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapayrolltab1["DHRDND"] = $fdata;
//	DHNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "DHNDOT";
	$fdata["GoodName"] = "DHNDOT";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","DHNDOT");
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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapayrolltab1["DHNDOT"] = $fdata;
//	DHRDNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "DHRDNDOT";
	$fdata["GoodName"] = "DHRDNDOT";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","DHRDNDOT");
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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapayrolltab1["DHRDNDOT"] = $fdata;
//	ThirToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "ThirToDate";
	$fdata["GoodName"] = "ThirToDate";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","ThirToDate");
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




	$tdatapayrolltab1["ThirToDate"] = $fdata;
//	TaxableToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "TaxableToDate";
	$fdata["GoodName"] = "TaxableToDate";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","TaxableToDate");
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




	$tdatapayrolltab1["TaxableToDate"] = $fdata;
//	TaxToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "TaxToDate";
	$fdata["GoodName"] = "TaxToDate";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","TaxToDate");
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




	$tdatapayrolltab1["TaxToDate"] = $fdata;
//	SHOTD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "SHOTD";
	$fdata["GoodName"] = "SHOTD";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","SHOTD");
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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrolltab1["SHOTD"] = $fdata;
//	RegRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "RegRD";
	$fdata["GoodName"] = "RegRD";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","RegRD");
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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrolltab1["RegRD"] = $fdata;
//	RHRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "RHRD";
	$fdata["GoodName"] = "RHRD";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","RHRD");
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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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
		
		$edata["controlWidth"] = 120;

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




	$tdatapayrolltab1["RHRD"] = $fdata;
//	SHRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "SHRD";
	$fdata["GoodName"] = "SHRD";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","SHRD");
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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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
		
		$edata["controlWidth"] = 120;

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




	$tdatapayrolltab1["SHRD"] = $fdata;
//	RegND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "RegND";
	$fdata["GoodName"] = "RegND";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","RegND");
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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrolltab1["RegND"] = $fdata;
//	RHRDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "RHRDOT";
	$fdata["GoodName"] = "RHRDOT";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","RHRDOT");
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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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
		
		$edata["controlWidth"] = 120;

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




	$tdatapayrolltab1["RHRDOT"] = $fdata;
//	SHRDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "SHRDOT";
	$fdata["GoodName"] = "SHRDOT";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","SHRDOT");
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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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
		
		$edata["controlWidth"] = 120;

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




	$tdatapayrolltab1["SHRDOT"] = $fdata;
//	SHRDOTD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "SHRDOTD";
	$fdata["GoodName"] = "SHRDOTD";
	$fdata["ownerTable"] = "payrolltab";
	$fdata["Label"] = GetFieldLabel("payrolltab1","SHRDOTD");
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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayrolltab1["SHRDOTD"] = $fdata;


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
$proto0["m_strFieldList"] = "PtabID,  EmployeeID,  WageType,  Status,  BasicMonthly,  BasicDaily,  DWork,  Absent,  LateMins,  UndertimeMins,  RHolidayHrs,  SHolidayHrs,  ExcessHrs,  RegOTHrs,  RHOTHrs,  SHOTHRs,  RDOTHrs,  RHNDHrs,  SHNDHrs,  RDNDHrs,  VLDays,  SLDays,  ELDays,  PLDays,  TrODays,  UserName,  FromDate,  ToDate,  VLBalance,  SLBalance,  ELBalance,  PLBalance,  AgencyShare,  NDMealAllowance,  Division,  Employer,  PayrollID,  Email,  Locked,  `Position`,  Thirteenth,  Taxable,  NDOTHrs,  RHNDOTHrs,  SHNDOTHrs,  RDNDOTHrs,  DH,  DHRD,  DHOT,  DHRDOT,  SHRDND,  RHRDND,  SHRDNDOT,  RHRDNDOT,  DHND,  DHRDND,  DHNDOT,  DHRDNDOT,  ThirToDate,  TaxableToDate,  TaxToDate,  SHOTD,  RegRD,  RHRD,  SHRD,  RegND,  RHRDOT,  SHRDOT,  SHRDOTD";
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
	"m_strName" => "ExcessHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto30["m_sql"] = "ExcessHrs";
$proto30["m_srcTableName"] = "payrolltab1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "RegOTHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto32["m_sql"] = "RegOTHrs";
$proto32["m_srcTableName"] = "payrolltab1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "RHOTHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto34["m_sql"] = "RHOTHrs";
$proto34["m_srcTableName"] = "payrolltab1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOTHRs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto36["m_sql"] = "SHOTHRs";
$proto36["m_srcTableName"] = "payrolltab1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "RDOTHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto38["m_sql"] = "RDOTHrs";
$proto38["m_srcTableName"] = "payrolltab1";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "RHNDHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto40["m_sql"] = "RHNDHrs";
$proto40["m_srcTableName"] = "payrolltab1";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "SHNDHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto42["m_sql"] = "SHNDHrs";
$proto42["m_srcTableName"] = "payrolltab1";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "RDNDHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto44["m_sql"] = "RDNDHrs";
$proto44["m_srcTableName"] = "payrolltab1";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "VLDays",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto46["m_sql"] = "VLDays";
$proto46["m_srcTableName"] = "payrolltab1";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "SLDays",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto48["m_sql"] = "SLDays";
$proto48["m_srcTableName"] = "payrolltab1";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "ELDays",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto50["m_sql"] = "ELDays";
$proto50["m_srcTableName"] = "payrolltab1";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "PLDays",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto52["m_sql"] = "PLDays";
$proto52["m_srcTableName"] = "payrolltab1";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "TrODays",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto54["m_sql"] = "TrODays";
$proto54["m_srcTableName"] = "payrolltab1";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto56["m_sql"] = "UserName";
$proto56["m_srcTableName"] = "payrolltab1";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto58["m_sql"] = "FromDate";
$proto58["m_srcTableName"] = "payrolltab1";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto60["m_sql"] = "ToDate";
$proto60["m_srcTableName"] = "payrolltab1";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "VLBalance",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto62["m_sql"] = "VLBalance";
$proto62["m_srcTableName"] = "payrolltab1";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "SLBalance",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto64["m_sql"] = "SLBalance";
$proto64["m_srcTableName"] = "payrolltab1";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "ELBalance",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto66["m_sql"] = "ELBalance";
$proto66["m_srcTableName"] = "payrolltab1";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "PLBalance",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto68["m_sql"] = "PLBalance";
$proto68["m_srcTableName"] = "payrolltab1";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "AgencyShare",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto70["m_sql"] = "AgencyShare";
$proto70["m_srcTableName"] = "payrolltab1";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "NDMealAllowance",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto72["m_sql"] = "NDMealAllowance";
$proto72["m_srcTableName"] = "payrolltab1";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto74["m_sql"] = "Division";
$proto74["m_srcTableName"] = "payrolltab1";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto76["m_sql"] = "Employer";
$proto76["m_srcTableName"] = "payrolltab1";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "PayrollID",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto78["m_sql"] = "PayrollID";
$proto78["m_srcTableName"] = "payrolltab1";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto80["m_sql"] = "Email";
$proto80["m_srcTableName"] = "payrolltab1";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Locked",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto82["m_sql"] = "Locked";
$proto82["m_srcTableName"] = "payrolltab1";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Position",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto84["m_sql"] = "`Position`";
$proto84["m_srcTableName"] = "payrolltab1";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Thirteenth",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto86["m_sql"] = "Thirteenth";
$proto86["m_srcTableName"] = "payrolltab1";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "Taxable",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto88["m_sql"] = "Taxable";
$proto88["m_srcTableName"] = "payrolltab1";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "NDOTHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto90["m_sql"] = "NDOTHrs";
$proto90["m_srcTableName"] = "payrolltab1";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "RHNDOTHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto92["m_sql"] = "RHNDOTHrs";
$proto92["m_srcTableName"] = "payrolltab1";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "SHNDOTHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto94["m_sql"] = "SHNDOTHrs";
$proto94["m_srcTableName"] = "payrolltab1";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "RDNDOTHrs",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto96["m_sql"] = "RDNDOTHrs";
$proto96["m_srcTableName"] = "payrolltab1";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "DH",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto98["m_sql"] = "DH";
$proto98["m_srcTableName"] = "payrolltab1";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRD",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto100["m_sql"] = "DHRD";
$proto100["m_srcTableName"] = "payrolltab1";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "DHOT",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto102["m_sql"] = "DHOT";
$proto102["m_srcTableName"] = "payrolltab1";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDOT",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto104["m_sql"] = "DHRDOT";
$proto104["m_srcTableName"] = "payrolltab1";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDND",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto106["m_sql"] = "SHRDND";
$proto106["m_srcTableName"] = "payrolltab1";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDND",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto108["m_sql"] = "RHRDND";
$proto108["m_srcTableName"] = "payrolltab1";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDNDOT",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto110["m_sql"] = "SHRDNDOT";
$proto110["m_srcTableName"] = "payrolltab1";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDNDOT",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto112["m_sql"] = "RHRDNDOT";
$proto112["m_srcTableName"] = "payrolltab1";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "DHND",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto114["m_sql"] = "DHND";
$proto114["m_srcTableName"] = "payrolltab1";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDND",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto116["m_sql"] = "DHRDND";
$proto116["m_srcTableName"] = "payrolltab1";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "DHNDOT",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto118["m_sql"] = "DHNDOT";
$proto118["m_srcTableName"] = "payrolltab1";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDNDOT",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto120["m_sql"] = "DHRDNDOT";
$proto120["m_srcTableName"] = "payrolltab1";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "ThirToDate",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto122["m_sql"] = "ThirToDate";
$proto122["m_srcTableName"] = "payrolltab1";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "TaxableToDate",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto124["m_sql"] = "TaxableToDate";
$proto124["m_srcTableName"] = "payrolltab1";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "TaxToDate",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto126["m_sql"] = "TaxToDate";
$proto126["m_srcTableName"] = "payrolltab1";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOTD",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto128["m_sql"] = "SHOTD";
$proto128["m_srcTableName"] = "payrolltab1";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "RegRD",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto130["m_sql"] = "RegRD";
$proto130["m_srcTableName"] = "payrolltab1";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRD",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto132["m_sql"] = "RHRD";
$proto132["m_srcTableName"] = "payrolltab1";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRD",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto134["m_sql"] = "SHRD";
$proto134["m_srcTableName"] = "payrolltab1";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "RegND",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto136["m_sql"] = "RegND";
$proto136["m_srcTableName"] = "payrolltab1";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDOT",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto138["m_sql"] = "RHRDOT";
$proto138["m_srcTableName"] = "payrolltab1";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDOT",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto140["m_sql"] = "SHRDOT";
$proto140["m_srcTableName"] = "payrolltab1";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDOTD",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto142["m_sql"] = "SHRDOTD";
$proto142["m_srcTableName"] = "payrolltab1";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto144=array();
$proto144["m_link"] = "SQLL_MAIN";
			$proto145=array();
$proto145["m_strName"] = "payrolltab";
$proto145["m_srcTableName"] = "payrolltab1";
$proto145["m_columns"] = array();
$proto145["m_columns"][] = "PtabID";
$proto145["m_columns"][] = "EmployeeID";
$proto145["m_columns"][] = "WageType";
$proto145["m_columns"][] = "Status";
$proto145["m_columns"][] = "BasicMonthly";
$proto145["m_columns"][] = "BasicDaily";
$proto145["m_columns"][] = "DWork";
$proto145["m_columns"][] = "Absent";
$proto145["m_columns"][] = "LateMins";
$proto145["m_columns"][] = "UndertimeMins";
$proto145["m_columns"][] = "RHolidayHrs";
$proto145["m_columns"][] = "SHolidayHrs";
$proto145["m_columns"][] = "CHolidayHrs";
$proto145["m_columns"][] = "ExcessHrs";
$proto145["m_columns"][] = "RegOTHrs";
$proto145["m_columns"][] = "RHOTHrs";
$proto145["m_columns"][] = "SHOTHRs";
$proto145["m_columns"][] = "CHOTHrs";
$proto145["m_columns"][] = "RDOTHrs";
$proto145["m_columns"][] = "NDHrs";
$proto145["m_columns"][] = "RDHrs";
$proto145["m_columns"][] = "RegNDHrs";
$proto145["m_columns"][] = "RHNDHrs";
$proto145["m_columns"][] = "SHNDHrs";
$proto145["m_columns"][] = "CHNDHrs";
$proto145["m_columns"][] = "RDNDHrs";
$proto145["m_columns"][] = "VLDays";
$proto145["m_columns"][] = "SLDays";
$proto145["m_columns"][] = "ELDays";
$proto145["m_columns"][] = "PLDays";
$proto145["m_columns"][] = "TrODays";
$proto145["m_columns"][] = "FromDate";
$proto145["m_columns"][] = "ToDate";
$proto145["m_columns"][] = "UserName";
$proto145["m_columns"][] = "AllowancePerDay";
$proto145["m_columns"][] = "VLBalance";
$proto145["m_columns"][] = "SLBalance";
$proto145["m_columns"][] = "ELBalance";
$proto145["m_columns"][] = "PLBalance";
$proto145["m_columns"][] = "AgencyShare";
$proto145["m_columns"][] = "NDMealAllowance";
$proto145["m_columns"][] = "Division";
$proto145["m_columns"][] = "Employer";
$proto145["m_columns"][] = "PayrollID";
$proto145["m_columns"][] = "Email";
$proto145["m_columns"][] = "Locked";
$proto145["m_columns"][] = "Position";
$proto145["m_columns"][] = "Thirteenth";
$proto145["m_columns"][] = "Taxable";
$proto145["m_columns"][] = "NDOTHrs";
$proto145["m_columns"][] = "RegNDOTHrs";
$proto145["m_columns"][] = "RHNDOTHrs";
$proto145["m_columns"][] = "SHNDOTHrs";
$proto145["m_columns"][] = "CHNDOTHrs";
$proto145["m_columns"][] = "RDNDOTHrs";
$proto145["m_columns"][] = "DH";
$proto145["m_columns"][] = "DHRD";
$proto145["m_columns"][] = "DHOT";
$proto145["m_columns"][] = "DHRDOT";
$proto145["m_columns"][] = "SHRDND";
$proto145["m_columns"][] = "RHRDND";
$proto145["m_columns"][] = "SHRDNDOT";
$proto145["m_columns"][] = "RHRDNDOT";
$proto145["m_columns"][] = "DHND";
$proto145["m_columns"][] = "DHRDND";
$proto145["m_columns"][] = "DHNDOT";
$proto145["m_columns"][] = "DHRDNDOT";
$proto145["m_columns"][] = "ThirToDate";
$proto145["m_columns"][] = "TaxableToDate";
$proto145["m_columns"][] = "TaxToDate";
$proto145["m_columns"][] = "SHOTD";
$proto145["m_columns"][] = "RegRD";
$proto145["m_columns"][] = "RHRD";
$proto145["m_columns"][] = "SHRD";
$proto145["m_columns"][] = "RegND";
$proto145["m_columns"][] = "RHRDOT";
$proto145["m_columns"][] = "SHRDOT";
$proto145["m_columns"][] = "SHRDOTD";
$obj = new SQLTable($proto145);

$proto144["m_table"] = $obj;
$proto144["m_sql"] = "payrolltab";
$proto144["m_alias"] = "";
$proto144["m_srcTableName"] = "payrolltab1";
$proto146=array();
$proto146["m_sql"] = "";
$proto146["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto146["m_column"]=$obj;
$proto146["m_contained"] = array();
$proto146["m_strCase"] = "";
$proto146["m_havingmode"] = false;
$proto146["m_inBrackets"] = false;
$proto146["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto146);

$proto144["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto144);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto148=array();
						$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "payrolltab",
	"m_srcTableName" => "payrolltab1"
));

$proto148["m_column"]=$obj;
$proto148["m_bAsc"] = 0;
$proto148["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto148);

$proto0["m_orderby"][]=$obj;					
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