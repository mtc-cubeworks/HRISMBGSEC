<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapayslipmain = array();
	$tdatapayslipmain[".truncateText"] = true;
	$tdatapayslipmain[".NumberOfChars"] = 80;
	$tdatapayslipmain[".ShortName"] = "payslipmain";
	$tdatapayslipmain[".OwnerID"] = "";
	$tdatapayslipmain[".OriginalTable"] = "payslipmain";

//	field labels
$fieldLabelspayslipmain = array();
$fieldToolTipspayslipmain = array();
$pageTitlespayslipmain = array();
$placeHolderspayslipmain = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspayslipmain["English"] = array();
	$fieldToolTipspayslipmain["English"] = array();
	$placeHolderspayslipmain["English"] = array();
	$pageTitlespayslipmain["English"] = array();
	$fieldLabelspayslipmain["English"]["PFID"] = "PFID";
	$fieldToolTipspayslipmain["English"]["PFID"] = "";
	$placeHolderspayslipmain["English"]["PFID"] = "";
	$fieldLabelspayslipmain["English"]["FromDate"] = "From Date";
	$fieldToolTipspayslipmain["English"]["FromDate"] = "";
	$placeHolderspayslipmain["English"]["FromDate"] = "";
	$fieldLabelspayslipmain["English"]["ToDate"] = "To Date";
	$fieldToolTipspayslipmain["English"]["ToDate"] = "";
	$placeHolderspayslipmain["English"]["ToDate"] = "";
	$fieldLabelspayslipmain["English"]["PayDate"] = "Pay Date";
	$fieldToolTipspayslipmain["English"]["PayDate"] = "";
	$placeHolderspayslipmain["English"]["PayDate"] = "";
	$fieldLabelspayslipmain["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipspayslipmain["English"]["EmployeeID"] = "";
	$placeHolderspayslipmain["English"]["EmployeeID"] = "";
	$fieldLabelspayslipmain["English"]["FullName"] = "Full Name";
	$fieldToolTipspayslipmain["English"]["FullName"] = "";
	$placeHolderspayslipmain["English"]["FullName"] = "";
	$fieldLabelspayslipmain["English"]["WageType"] = "Wage Type";
	$fieldToolTipspayslipmain["English"]["WageType"] = "";
	$placeHolderspayslipmain["English"]["WageType"] = "";
	$fieldLabelspayslipmain["English"]["Status"] = "Status";
	$fieldToolTipspayslipmain["English"]["Status"] = "";
	$placeHolderspayslipmain["English"]["Status"] = "";
	$fieldLabelspayslipmain["English"]["MonthlyRate"] = "Monthly Rate";
	$fieldToolTipspayslipmain["English"]["MonthlyRate"] = "";
	$placeHolderspayslipmain["English"]["MonthlyRate"] = "";
	$fieldLabelspayslipmain["English"]["Division"] = "Division";
	$fieldToolTipspayslipmain["English"]["Division"] = "";
	$placeHolderspayslipmain["English"]["Division"] = "";
	$fieldLabelspayslipmain["English"]["VL"] = "VL";
	$fieldToolTipspayslipmain["English"]["VL"] = "";
	$placeHolderspayslipmain["English"]["VL"] = "";
	$fieldLabelspayslipmain["English"]["SL"] = "SL";
	$fieldToolTipspayslipmain["English"]["SL"] = "";
	$placeHolderspayslipmain["English"]["SL"] = "";
	$fieldLabelspayslipmain["English"]["EL"] = "EL";
	$fieldToolTipspayslipmain["English"]["EL"] = "";
	$placeHolderspayslipmain["English"]["EL"] = "";
	$fieldLabelspayslipmain["English"]["PL"] = "PL";
	$fieldToolTipspayslipmain["English"]["PL"] = "";
	$placeHolderspayslipmain["English"]["PL"] = "";
	$fieldLabelspayslipmain["English"]["RegularPayT"] = "Regular Pay T";
	$fieldToolTipspayslipmain["English"]["RegularPayT"] = "";
	$placeHolderspayslipmain["English"]["RegularPayT"] = "";
	$fieldLabelspayslipmain["English"]["RegularPay"] = "Regular Pay";
	$fieldToolTipspayslipmain["English"]["RegularPay"] = "";
	$placeHolderspayslipmain["English"]["RegularPay"] = "";
	$fieldLabelspayslipmain["English"]["LateT"] = "Late T";
	$fieldToolTipspayslipmain["English"]["LateT"] = "";
	$placeHolderspayslipmain["English"]["LateT"] = "";
	$fieldLabelspayslipmain["English"]["Late"] = "Late";
	$fieldToolTipspayslipmain["English"]["Late"] = "";
	$placeHolderspayslipmain["English"]["Late"] = "";
	$fieldLabelspayslipmain["English"]["UndertimeT"] = "Undertime T";
	$fieldToolTipspayslipmain["English"]["UndertimeT"] = "";
	$placeHolderspayslipmain["English"]["UndertimeT"] = "";
	$fieldLabelspayslipmain["English"]["Undertime"] = "Undertime";
	$fieldToolTipspayslipmain["English"]["Undertime"] = "";
	$placeHolderspayslipmain["English"]["Undertime"] = "";
	$fieldLabelspayslipmain["English"]["LWOPT"] = "LWOPT";
	$fieldToolTipspayslipmain["English"]["LWOPT"] = "";
	$placeHolderspayslipmain["English"]["LWOPT"] = "";
	$fieldLabelspayslipmain["English"]["LWOP"] = "LWOP";
	$fieldToolTipspayslipmain["English"]["LWOP"] = "";
	$placeHolderspayslipmain["English"]["LWOP"] = "";
	$fieldLabelspayslipmain["English"]["RegOTT"] = "Reg OTT";
	$fieldToolTipspayslipmain["English"]["RegOTT"] = "";
	$placeHolderspayslipmain["English"]["RegOTT"] = "";
	$fieldLabelspayslipmain["English"]["RegOT"] = "Reg OT";
	$fieldToolTipspayslipmain["English"]["RegOT"] = "";
	$placeHolderspayslipmain["English"]["RegOT"] = "";
	$fieldLabelspayslipmain["English"]["SHOTT"] = "SHOTT";
	$fieldToolTipspayslipmain["English"]["SHOTT"] = "";
	$placeHolderspayslipmain["English"]["SHOTT"] = "";
	$fieldLabelspayslipmain["English"]["SHOT"] = "SHOT";
	$fieldToolTipspayslipmain["English"]["SHOT"] = "";
	$placeHolderspayslipmain["English"]["SHOT"] = "";
	$fieldLabelspayslipmain["English"]["DHOTT"] = "DHOTT";
	$fieldToolTipspayslipmain["English"]["DHOTT"] = "";
	$placeHolderspayslipmain["English"]["DHOTT"] = "";
	$fieldLabelspayslipmain["English"]["DHOT"] = "DHOT";
	$fieldToolTipspayslipmain["English"]["DHOT"] = "";
	$placeHolderspayslipmain["English"]["DHOT"] = "";
	$fieldLabelspayslipmain["English"]["RDOTT"] = "RDOTT";
	$fieldToolTipspayslipmain["English"]["RDOTT"] = "";
	$placeHolderspayslipmain["English"]["RDOTT"] = "";
	$fieldLabelspayslipmain["English"]["RDOT"] = "RDOT";
	$fieldToolTipspayslipmain["English"]["RDOT"] = "";
	$placeHolderspayslipmain["English"]["RDOT"] = "";
	$fieldLabelspayslipmain["English"]["RHRDOTT"] = "RHRDOTT";
	$fieldToolTipspayslipmain["English"]["RHRDOTT"] = "";
	$placeHolderspayslipmain["English"]["RHRDOTT"] = "";
	$fieldLabelspayslipmain["English"]["RHRDOT"] = "RHRDOT";
	$fieldToolTipspayslipmain["English"]["RHRDOT"] = "";
	$placeHolderspayslipmain["English"]["RHRDOT"] = "";
	$fieldLabelspayslipmain["English"]["SHRDOTT"] = "SHRDOTT";
	$fieldToolTipspayslipmain["English"]["SHRDOTT"] = "";
	$placeHolderspayslipmain["English"]["SHRDOTT"] = "";
	$fieldLabelspayslipmain["English"]["SHRDOT"] = "SHRDOT";
	$fieldToolTipspayslipmain["English"]["SHRDOT"] = "";
	$placeHolderspayslipmain["English"]["SHRDOT"] = "";
	$fieldLabelspayslipmain["English"]["DHRDOTT"] = "DHRDOTT";
	$fieldToolTipspayslipmain["English"]["DHRDOTT"] = "";
	$placeHolderspayslipmain["English"]["DHRDOTT"] = "";
	$fieldLabelspayslipmain["English"]["DHRDOT"] = "DHRDOT";
	$fieldToolTipspayslipmain["English"]["DHRDOT"] = "";
	$placeHolderspayslipmain["English"]["DHRDOT"] = "";
	$fieldLabelspayslipmain["English"]["TNDOTT"] = "TNDOTT";
	$fieldToolTipspayslipmain["English"]["TNDOTT"] = "";
	$placeHolderspayslipmain["English"]["TNDOTT"] = "";
	$fieldLabelspayslipmain["English"]["TNDOT"] = "TNDOT";
	$fieldToolTipspayslipmain["English"]["TNDOT"] = "";
	$placeHolderspayslipmain["English"]["TNDOT"] = "";
	$fieldLabelspayslipmain["English"]["RegHolT"] = "Reg Hol T";
	$fieldToolTipspayslipmain["English"]["RegHolT"] = "";
	$placeHolderspayslipmain["English"]["RegHolT"] = "";
	$fieldLabelspayslipmain["English"]["RegHol"] = "Reg Hol";
	$fieldToolTipspayslipmain["English"]["RegHol"] = "";
	$placeHolderspayslipmain["English"]["RegHol"] = "";
	$fieldLabelspayslipmain["English"]["SpHolT"] = "Sp Hol T";
	$fieldToolTipspayslipmain["English"]["SpHolT"] = "";
	$placeHolderspayslipmain["English"]["SpHolT"] = "";
	$fieldLabelspayslipmain["English"]["SpHol"] = "Sp Hol";
	$fieldToolTipspayslipmain["English"]["SpHol"] = "";
	$placeHolderspayslipmain["English"]["SpHol"] = "";
	$fieldLabelspayslipmain["English"]["DbHolT"] = "Db Hol T";
	$fieldToolTipspayslipmain["English"]["DbHolT"] = "";
	$placeHolderspayslipmain["English"]["DbHolT"] = "";
	$fieldLabelspayslipmain["English"]["DbHol"] = "Db Hol";
	$fieldToolTipspayslipmain["English"]["DbHol"] = "";
	$placeHolderspayslipmain["English"]["DbHol"] = "";
	$fieldLabelspayslipmain["English"]["RestDayT"] = "Rest Day T";
	$fieldToolTipspayslipmain["English"]["RestDayT"] = "";
	$placeHolderspayslipmain["English"]["RestDayT"] = "";
	$fieldLabelspayslipmain["English"]["RestDay"] = "Rest Day";
	$fieldToolTipspayslipmain["English"]["RestDay"] = "";
	$placeHolderspayslipmain["English"]["RestDay"] = "";
	$fieldLabelspayslipmain["English"]["RHRDT"] = "RHRDT";
	$fieldToolTipspayslipmain["English"]["RHRDT"] = "";
	$placeHolderspayslipmain["English"]["RHRDT"] = "";
	$fieldLabelspayslipmain["English"]["RHRD"] = "RHRD";
	$fieldToolTipspayslipmain["English"]["RHRD"] = "";
	$placeHolderspayslipmain["English"]["RHRD"] = "";
	$fieldLabelspayslipmain["English"]["SHRDT"] = "SHRDT";
	$fieldToolTipspayslipmain["English"]["SHRDT"] = "";
	$placeHolderspayslipmain["English"]["SHRDT"] = "";
	$fieldLabelspayslipmain["English"]["SHRD"] = "SHRD";
	$fieldToolTipspayslipmain["English"]["SHRD"] = "";
	$placeHolderspayslipmain["English"]["SHRD"] = "";
	$fieldLabelspayslipmain["English"]["DHRDT"] = "DHRDT";
	$fieldToolTipspayslipmain["English"]["DHRDT"] = "";
	$placeHolderspayslipmain["English"]["DHRDT"] = "";
	$fieldLabelspayslipmain["English"]["DHRD"] = "DHRD";
	$fieldToolTipspayslipmain["English"]["DHRD"] = "";
	$placeHolderspayslipmain["English"]["DHRD"] = "";
	$fieldLabelspayslipmain["English"]["NDiffT"] = "NDiff T";
	$fieldToolTipspayslipmain["English"]["NDiffT"] = "";
	$placeHolderspayslipmain["English"]["NDiffT"] = "";
	$fieldLabelspayslipmain["English"]["NDiff"] = "NDiff";
	$fieldToolTipspayslipmain["English"]["NDiff"] = "";
	$placeHolderspayslipmain["English"]["NDiff"] = "";
	$fieldLabelspayslipmain["English"]["VacLeaveT"] = "Vac Leave T";
	$fieldToolTipspayslipmain["English"]["VacLeaveT"] = "";
	$placeHolderspayslipmain["English"]["VacLeaveT"] = "";
	$fieldLabelspayslipmain["English"]["VacLeave"] = "Vac Leave";
	$fieldToolTipspayslipmain["English"]["VacLeave"] = "";
	$placeHolderspayslipmain["English"]["VacLeave"] = "";
	$fieldLabelspayslipmain["English"]["SicLeaveT"] = "Sic Leave T";
	$fieldToolTipspayslipmain["English"]["SicLeaveT"] = "";
	$placeHolderspayslipmain["English"]["SicLeaveT"] = "";
	$fieldLabelspayslipmain["English"]["SicLeave"] = "Sic Leave";
	$fieldToolTipspayslipmain["English"]["SicLeave"] = "";
	$placeHolderspayslipmain["English"]["SicLeave"] = "";
	$fieldLabelspayslipmain["English"]["EmeLeaveT"] = "Eme Leave T";
	$fieldToolTipspayslipmain["English"]["EmeLeaveT"] = "";
	$placeHolderspayslipmain["English"]["EmeLeaveT"] = "";
	$fieldLabelspayslipmain["English"]["EmeLeave"] = "Eme Leave";
	$fieldToolTipspayslipmain["English"]["EmeLeave"] = "";
	$placeHolderspayslipmain["English"]["EmeLeave"] = "";
	$fieldLabelspayslipmain["English"]["GrossPay"] = "Gross Pay";
	$fieldToolTipspayslipmain["English"]["GrossPay"] = "";
	$placeHolderspayslipmain["English"]["GrossPay"] = "";
	$fieldLabelspayslipmain["English"]["Taxable"] = "Taxable";
	$fieldToolTipspayslipmain["English"]["Taxable"] = "";
	$placeHolderspayslipmain["English"]["Taxable"] = "";
	$fieldLabelspayslipmain["English"]["TaxableToDate"] = "Taxable To Date";
	$fieldToolTipspayslipmain["English"]["TaxableToDate"] = "";
	$placeHolderspayslipmain["English"]["TaxableToDate"] = "";
	$fieldLabelspayslipmain["English"]["TaxToDate"] = "Tax To Date";
	$fieldToolTipspayslipmain["English"]["TaxToDate"] = "";
	$placeHolderspayslipmain["English"]["TaxToDate"] = "";
	$fieldLabelspayslipmain["English"]["ThirToDate"] = "Thir To Date";
	$fieldToolTipspayslipmain["English"]["ThirToDate"] = "";
	$placeHolderspayslipmain["English"]["ThirToDate"] = "";
	$fieldLabelspayslipmain["English"]["RHOTT"] = "RHOTT";
	$fieldToolTipspayslipmain["English"]["RHOTT"] = "";
	$placeHolderspayslipmain["English"]["RHOTT"] = "";
	$fieldLabelspayslipmain["English"]["RHOT"] = "RHOT";
	$fieldToolTipspayslipmain["English"]["RHOT"] = "";
	$placeHolderspayslipmain["English"]["RHOT"] = "";
	$fieldLabelspayslipmain["English"]["TDeductions"] = "TDeductions";
	$fieldToolTipspayslipmain["English"]["TDeductions"] = "";
	$placeHolderspayslipmain["English"]["TDeductions"] = "";
	$fieldLabelspayslipmain["English"]["NetPay"] = "Net Pay";
	$fieldToolTipspayslipmain["English"]["NetPay"] = "";
	$placeHolderspayslipmain["English"]["NetPay"] = "";
	$fieldLabelspayslipmain["English"]["Employer"] = "Employer";
	$fieldToolTipspayslipmain["English"]["Employer"] = "";
	$placeHolderspayslipmain["English"]["Employer"] = "";
	$fieldLabelspayslipmain["English"]["EmployerID"] = "Employer ID";
	$fieldToolTipspayslipmain["English"]["EmployerID"] = "";
	$placeHolderspayslipmain["English"]["EmployerID"] = "";
	$fieldLabelspayslipmain["English"]["WageTypeID"] = "Wage Type ID";
	$fieldToolTipspayslipmain["English"]["WageTypeID"] = "";
	$placeHolderspayslipmain["English"]["WageTypeID"] = "";
	$fieldLabelspayslipmain["English"]["DivisionID"] = "Division ID";
	$fieldToolTipspayslipmain["English"]["DivisionID"] = "";
	$placeHolderspayslipmain["English"]["DivisionID"] = "";
	$fieldLabelspayslipmain["English"]["BasicDailyRate"] = "Basic Daily Rate";
	$fieldToolTipspayslipmain["English"]["BasicDailyRate"] = "";
	$placeHolderspayslipmain["English"]["BasicDailyRate"] = "";
	$fieldLabelspayslipmain["English"]["PtabID"] = "Ptab ID";
	$fieldToolTipspayslipmain["English"]["PtabID"] = "";
	$placeHolderspayslipmain["English"]["PtabID"] = "";
	if (count($fieldToolTipspayslipmain["English"]))
		$tdatapayslipmain[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspayslipmain[""] = array();
	$fieldToolTipspayslipmain[""] = array();
	$placeHolderspayslipmain[""] = array();
	$pageTitlespayslipmain[""] = array();
	$fieldLabelspayslipmain[""]["PFID"] = "PFID";
	$fieldToolTipspayslipmain[""]["PFID"] = "";
	$placeHolderspayslipmain[""]["PFID"] = "";
	$fieldLabelspayslipmain[""]["FromDate"] = "From Date";
	$fieldToolTipspayslipmain[""]["FromDate"] = "";
	$placeHolderspayslipmain[""]["FromDate"] = "";
	$fieldLabelspayslipmain[""]["ToDate"] = "To Date";
	$fieldToolTipspayslipmain[""]["ToDate"] = "";
	$placeHolderspayslipmain[""]["ToDate"] = "";
	$fieldLabelspayslipmain[""]["PayDate"] = "Pay Date";
	$fieldToolTipspayslipmain[""]["PayDate"] = "";
	$placeHolderspayslipmain[""]["PayDate"] = "";
	$fieldLabelspayslipmain[""]["EmployeeID"] = "Employee ID";
	$fieldToolTipspayslipmain[""]["EmployeeID"] = "";
	$placeHolderspayslipmain[""]["EmployeeID"] = "";
	$fieldLabelspayslipmain[""]["FullName"] = "Full Name";
	$fieldToolTipspayslipmain[""]["FullName"] = "";
	$placeHolderspayslipmain[""]["FullName"] = "";
	$fieldLabelspayslipmain[""]["WageType"] = "Wage Type";
	$fieldToolTipspayslipmain[""]["WageType"] = "";
	$placeHolderspayslipmain[""]["WageType"] = "";
	$fieldLabelspayslipmain[""]["Status"] = "Status";
	$fieldToolTipspayslipmain[""]["Status"] = "";
	$placeHolderspayslipmain[""]["Status"] = "";
	$fieldLabelspayslipmain[""]["MonthlyRate"] = "Monthly Rate";
	$fieldToolTipspayslipmain[""]["MonthlyRate"] = "";
	$placeHolderspayslipmain[""]["MonthlyRate"] = "";
	$fieldLabelspayslipmain[""]["Division"] = "Division";
	$fieldToolTipspayslipmain[""]["Division"] = "";
	$placeHolderspayslipmain[""]["Division"] = "";
	$fieldLabelspayslipmain[""]["VL"] = "VL";
	$fieldToolTipspayslipmain[""]["VL"] = "";
	$placeHolderspayslipmain[""]["VL"] = "";
	$fieldLabelspayslipmain[""]["SL"] = "SL";
	$fieldToolTipspayslipmain[""]["SL"] = "";
	$placeHolderspayslipmain[""]["SL"] = "";
	$fieldLabelspayslipmain[""]["EL"] = "EL";
	$fieldToolTipspayslipmain[""]["EL"] = "";
	$placeHolderspayslipmain[""]["EL"] = "";
	$fieldLabelspayslipmain[""]["PL"] = "PL";
	$fieldToolTipspayslipmain[""]["PL"] = "";
	$placeHolderspayslipmain[""]["PL"] = "";
	$fieldLabelspayslipmain[""]["RegularPayT"] = "Regular Pay T";
	$fieldToolTipspayslipmain[""]["RegularPayT"] = "";
	$placeHolderspayslipmain[""]["RegularPayT"] = "";
	$fieldLabelspayslipmain[""]["RegularPay"] = "Regular Pay";
	$fieldToolTipspayslipmain[""]["RegularPay"] = "";
	$placeHolderspayslipmain[""]["RegularPay"] = "";
	$fieldLabelspayslipmain[""]["LateT"] = "Late T";
	$fieldToolTipspayslipmain[""]["LateT"] = "";
	$placeHolderspayslipmain[""]["LateT"] = "";
	$fieldLabelspayslipmain[""]["Late"] = "Late";
	$fieldToolTipspayslipmain[""]["Late"] = "";
	$placeHolderspayslipmain[""]["Late"] = "";
	$fieldLabelspayslipmain[""]["UndertimeT"] = "Undertime T";
	$fieldToolTipspayslipmain[""]["UndertimeT"] = "";
	$placeHolderspayslipmain[""]["UndertimeT"] = "";
	$fieldLabelspayslipmain[""]["Undertime"] = "Undertime";
	$fieldToolTipspayslipmain[""]["Undertime"] = "";
	$placeHolderspayslipmain[""]["Undertime"] = "";
	$fieldLabelspayslipmain[""]["LWOPT"] = "LWOPT";
	$fieldToolTipspayslipmain[""]["LWOPT"] = "";
	$placeHolderspayslipmain[""]["LWOPT"] = "";
	$fieldLabelspayslipmain[""]["LWOP"] = "LWOP";
	$fieldToolTipspayslipmain[""]["LWOP"] = "";
	$placeHolderspayslipmain[""]["LWOP"] = "";
	$fieldLabelspayslipmain[""]["RegOTT"] = "Reg OTT";
	$fieldToolTipspayslipmain[""]["RegOTT"] = "";
	$placeHolderspayslipmain[""]["RegOTT"] = "";
	$fieldLabelspayslipmain[""]["RegOT"] = "Reg OT";
	$fieldToolTipspayslipmain[""]["RegOT"] = "";
	$placeHolderspayslipmain[""]["RegOT"] = "";
	$fieldLabelspayslipmain[""]["SHOTT"] = "SHOTT";
	$fieldToolTipspayslipmain[""]["SHOTT"] = "";
	$placeHolderspayslipmain[""]["SHOTT"] = "";
	$fieldLabelspayslipmain[""]["SHOT"] = "SHOT";
	$fieldToolTipspayslipmain[""]["SHOT"] = "";
	$placeHolderspayslipmain[""]["SHOT"] = "";
	$fieldLabelspayslipmain[""]["DHOTT"] = "DHOTT";
	$fieldToolTipspayslipmain[""]["DHOTT"] = "";
	$placeHolderspayslipmain[""]["DHOTT"] = "";
	$fieldLabelspayslipmain[""]["DHOT"] = "DHOT";
	$fieldToolTipspayslipmain[""]["DHOT"] = "";
	$placeHolderspayslipmain[""]["DHOT"] = "";
	$fieldLabelspayslipmain[""]["RDOTT"] = "RDOTT";
	$fieldToolTipspayslipmain[""]["RDOTT"] = "";
	$placeHolderspayslipmain[""]["RDOTT"] = "";
	$fieldLabelspayslipmain[""]["RDOT"] = "RDOT";
	$fieldToolTipspayslipmain[""]["RDOT"] = "";
	$placeHolderspayslipmain[""]["RDOT"] = "";
	$fieldLabelspayslipmain[""]["RHRDOTT"] = "RHRDOTT";
	$fieldToolTipspayslipmain[""]["RHRDOTT"] = "";
	$placeHolderspayslipmain[""]["RHRDOTT"] = "";
	$fieldLabelspayslipmain[""]["RHRDOT"] = "RHRDOT";
	$fieldToolTipspayslipmain[""]["RHRDOT"] = "";
	$placeHolderspayslipmain[""]["RHRDOT"] = "";
	$fieldLabelspayslipmain[""]["SHRDOTT"] = "SHRDOTT";
	$fieldToolTipspayslipmain[""]["SHRDOTT"] = "";
	$placeHolderspayslipmain[""]["SHRDOTT"] = "";
	$fieldLabelspayslipmain[""]["SHRDOT"] = "SHRDOT";
	$fieldToolTipspayslipmain[""]["SHRDOT"] = "";
	$placeHolderspayslipmain[""]["SHRDOT"] = "";
	$fieldLabelspayslipmain[""]["DHRDOTT"] = "DHRDOTT";
	$fieldToolTipspayslipmain[""]["DHRDOTT"] = "";
	$placeHolderspayslipmain[""]["DHRDOTT"] = "";
	$fieldLabelspayslipmain[""]["DHRDOT"] = "DHRDOT";
	$fieldToolTipspayslipmain[""]["DHRDOT"] = "";
	$placeHolderspayslipmain[""]["DHRDOT"] = "";
	$fieldLabelspayslipmain[""]["TNDOTT"] = "TNDOTT";
	$fieldToolTipspayslipmain[""]["TNDOTT"] = "";
	$placeHolderspayslipmain[""]["TNDOTT"] = "";
	$fieldLabelspayslipmain[""]["TNDOT"] = "TNDOT";
	$fieldToolTipspayslipmain[""]["TNDOT"] = "";
	$placeHolderspayslipmain[""]["TNDOT"] = "";
	$fieldLabelspayslipmain[""]["RegHolT"] = "Reg Hol T";
	$fieldToolTipspayslipmain[""]["RegHolT"] = "";
	$placeHolderspayslipmain[""]["RegHolT"] = "";
	$fieldLabelspayslipmain[""]["RegHol"] = "Reg Hol";
	$fieldToolTipspayslipmain[""]["RegHol"] = "";
	$placeHolderspayslipmain[""]["RegHol"] = "";
	$fieldLabelspayslipmain[""]["SpHolT"] = "Sp Hol T";
	$fieldToolTipspayslipmain[""]["SpHolT"] = "";
	$placeHolderspayslipmain[""]["SpHolT"] = "";
	$fieldLabelspayslipmain[""]["SpHol"] = "Sp Hol";
	$fieldToolTipspayslipmain[""]["SpHol"] = "";
	$placeHolderspayslipmain[""]["SpHol"] = "";
	$fieldLabelspayslipmain[""]["DbHolT"] = "Db Hol T";
	$fieldToolTipspayslipmain[""]["DbHolT"] = "";
	$placeHolderspayslipmain[""]["DbHolT"] = "";
	$fieldLabelspayslipmain[""]["DbHol"] = "Db Hol";
	$fieldToolTipspayslipmain[""]["DbHol"] = "";
	$placeHolderspayslipmain[""]["DbHol"] = "";
	$fieldLabelspayslipmain[""]["RestDayT"] = "Rest Day T";
	$fieldToolTipspayslipmain[""]["RestDayT"] = "";
	$placeHolderspayslipmain[""]["RestDayT"] = "";
	$fieldLabelspayslipmain[""]["RestDay"] = "Rest Day";
	$fieldToolTipspayslipmain[""]["RestDay"] = "";
	$placeHolderspayslipmain[""]["RestDay"] = "";
	$fieldLabelspayslipmain[""]["RHRDT"] = "RHRDT";
	$fieldToolTipspayslipmain[""]["RHRDT"] = "";
	$placeHolderspayslipmain[""]["RHRDT"] = "";
	$fieldLabelspayslipmain[""]["RHRD"] = "RHRD";
	$fieldToolTipspayslipmain[""]["RHRD"] = "";
	$placeHolderspayslipmain[""]["RHRD"] = "";
	$fieldLabelspayslipmain[""]["SHRDT"] = "SHRDT";
	$fieldToolTipspayslipmain[""]["SHRDT"] = "";
	$placeHolderspayslipmain[""]["SHRDT"] = "";
	$fieldLabelspayslipmain[""]["SHRD"] = "SHRD";
	$fieldToolTipspayslipmain[""]["SHRD"] = "";
	$placeHolderspayslipmain[""]["SHRD"] = "";
	$fieldLabelspayslipmain[""]["DHRDT"] = "DHRDT";
	$fieldToolTipspayslipmain[""]["DHRDT"] = "";
	$placeHolderspayslipmain[""]["DHRDT"] = "";
	$fieldLabelspayslipmain[""]["DHRD"] = "DHRD";
	$fieldToolTipspayslipmain[""]["DHRD"] = "";
	$placeHolderspayslipmain[""]["DHRD"] = "";
	$fieldLabelspayslipmain[""]["NDiffT"] = "NDiff T";
	$fieldToolTipspayslipmain[""]["NDiffT"] = "";
	$placeHolderspayslipmain[""]["NDiffT"] = "";
	$fieldLabelspayslipmain[""]["NDiff"] = "NDiff";
	$fieldToolTipspayslipmain[""]["NDiff"] = "";
	$placeHolderspayslipmain[""]["NDiff"] = "";
	$fieldLabelspayslipmain[""]["VacLeaveT"] = "Vac Leave T";
	$fieldToolTipspayslipmain[""]["VacLeaveT"] = "";
	$placeHolderspayslipmain[""]["VacLeaveT"] = "";
	$fieldLabelspayslipmain[""]["VacLeave"] = "Vac Leave";
	$fieldToolTipspayslipmain[""]["VacLeave"] = "";
	$placeHolderspayslipmain[""]["VacLeave"] = "";
	$fieldLabelspayslipmain[""]["SicLeaveT"] = "Sic Leave T";
	$fieldToolTipspayslipmain[""]["SicLeaveT"] = "";
	$placeHolderspayslipmain[""]["SicLeaveT"] = "";
	$fieldLabelspayslipmain[""]["SicLeave"] = "Sic Leave";
	$fieldToolTipspayslipmain[""]["SicLeave"] = "";
	$placeHolderspayslipmain[""]["SicLeave"] = "";
	$fieldLabelspayslipmain[""]["EmeLeaveT"] = "Eme Leave T";
	$fieldToolTipspayslipmain[""]["EmeLeaveT"] = "";
	$placeHolderspayslipmain[""]["EmeLeaveT"] = "";
	$fieldLabelspayslipmain[""]["EmeLeave"] = "Eme Leave";
	$fieldToolTipspayslipmain[""]["EmeLeave"] = "";
	$placeHolderspayslipmain[""]["EmeLeave"] = "";
	$fieldLabelspayslipmain[""]["GrossPay"] = "Gross Pay";
	$fieldToolTipspayslipmain[""]["GrossPay"] = "";
	$placeHolderspayslipmain[""]["GrossPay"] = "";
	$fieldLabelspayslipmain[""]["Taxable"] = "Taxable";
	$fieldToolTipspayslipmain[""]["Taxable"] = "";
	$placeHolderspayslipmain[""]["Taxable"] = "";
	$fieldLabelspayslipmain[""]["TaxableToDate"] = "Taxable To Date";
	$fieldToolTipspayslipmain[""]["TaxableToDate"] = "";
	$placeHolderspayslipmain[""]["TaxableToDate"] = "";
	$fieldLabelspayslipmain[""]["TaxToDate"] = "Tax To Date";
	$fieldToolTipspayslipmain[""]["TaxToDate"] = "";
	$placeHolderspayslipmain[""]["TaxToDate"] = "";
	$fieldLabelspayslipmain[""]["ThirToDate"] = "Thir To Date";
	$fieldToolTipspayslipmain[""]["ThirToDate"] = "";
	$placeHolderspayslipmain[""]["ThirToDate"] = "";
	$fieldLabelspayslipmain[""]["RHOTT"] = "RHOTT";
	$fieldToolTipspayslipmain[""]["RHOTT"] = "";
	$placeHolderspayslipmain[""]["RHOTT"] = "";
	$fieldLabelspayslipmain[""]["RHOT"] = "RHOT";
	$fieldToolTipspayslipmain[""]["RHOT"] = "";
	$placeHolderspayslipmain[""]["RHOT"] = "";
	$fieldLabelspayslipmain[""]["TDeductions"] = "TDeductions";
	$fieldToolTipspayslipmain[""]["TDeductions"] = "";
	$placeHolderspayslipmain[""]["TDeductions"] = "";
	$fieldLabelspayslipmain[""]["NetPay"] = "Net Pay";
	$fieldToolTipspayslipmain[""]["NetPay"] = "";
	$placeHolderspayslipmain[""]["NetPay"] = "";
	$fieldLabelspayslipmain[""]["Employer"] = "Employer";
	$fieldToolTipspayslipmain[""]["Employer"] = "";
	$placeHolderspayslipmain[""]["Employer"] = "";
	$fieldLabelspayslipmain[""]["EmployerID"] = "Employer ID";
	$fieldToolTipspayslipmain[""]["EmployerID"] = "";
	$placeHolderspayslipmain[""]["EmployerID"] = "";
	$fieldLabelspayslipmain[""]["WageTypeID"] = "Wage Type ID";
	$fieldToolTipspayslipmain[""]["WageTypeID"] = "";
	$placeHolderspayslipmain[""]["WageTypeID"] = "";
	$fieldLabelspayslipmain[""]["DivisionID"] = "Division ID";
	$fieldToolTipspayslipmain[""]["DivisionID"] = "";
	$placeHolderspayslipmain[""]["DivisionID"] = "";
	$fieldLabelspayslipmain[""]["BasicDailyRate"] = "Basic Daily Rate";
	$fieldToolTipspayslipmain[""]["BasicDailyRate"] = "";
	$placeHolderspayslipmain[""]["BasicDailyRate"] = "";
	$fieldLabelspayslipmain[""]["PtabID"] = "Ptab ID";
	$fieldToolTipspayslipmain[""]["PtabID"] = "";
	$placeHolderspayslipmain[""]["PtabID"] = "";
	if (count($fieldToolTipspayslipmain[""]))
		$tdatapayslipmain[".isUseToolTips"] = true;
}


	$tdatapayslipmain[".NCSearch"] = true;



$tdatapayslipmain[".shortTableName"] = "payslipmain";
$tdatapayslipmain[".nSecOptions"] = 0;
$tdatapayslipmain[".recsPerRowPrint"] = 1;
$tdatapayslipmain[".mainTableOwnerID"] = "";
$tdatapayslipmain[".moveNext"] = 1;
$tdatapayslipmain[".entityType"] = 0;

$tdatapayslipmain[".strOriginalTableName"] = "payslipmain";

	



$tdatapayslipmain[".showAddInPopup"] = false;

$tdatapayslipmain[".showEditInPopup"] = false;

$tdatapayslipmain[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapayslipmain[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapayslipmain[".fieldsForRegister"] = array();

$tdatapayslipmain[".listAjax"] = false;

	$tdatapayslipmain[".audit"] = false;

	$tdatapayslipmain[".locking"] = false;

$tdatapayslipmain[".edit"] = true;
$tdatapayslipmain[".afterEditAction"] = 1;
$tdatapayslipmain[".closePopupAfterEdit"] = 1;
$tdatapayslipmain[".afterEditActionDetTable"] = "";

$tdatapayslipmain[".add"] = true;
$tdatapayslipmain[".afterAddAction"] = 1;
$tdatapayslipmain[".closePopupAfterAdd"] = 1;
$tdatapayslipmain[".afterAddActionDetTable"] = "";

$tdatapayslipmain[".list"] = true;



$tdatapayslipmain[".reorderRecordsByHeader"] = true;


$tdatapayslipmain[".exportFormatting"] = 2;
$tdatapayslipmain[".exportDelimiter"] = ",";
		
$tdatapayslipmain[".view"] = true;

$tdatapayslipmain[".import"] = true;

$tdatapayslipmain[".exportTo"] = true;

$tdatapayslipmain[".printFriendly"] = true;

$tdatapayslipmain[".delete"] = true;

$tdatapayslipmain[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapayslipmain[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapayslipmain[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapayslipmain[".searchSaving"] = false;
//

$tdatapayslipmain[".showSearchPanel"] = true;
		$tdatapayslipmain[".flexibleSearch"] = true;

$tdatapayslipmain[".isUseAjaxSuggest"] = true;

$tdatapayslipmain[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdatapayslipmain[".ajaxCodeSnippetAdded"] = false;

$tdatapayslipmain[".buttonsAdded"] = false;

$tdatapayslipmain[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapayslipmain[".isUseTimeForSearch"] = false;





$tdatapayslipmain[".allSearchFields"] = array();
$tdatapayslipmain[".filterFields"] = array();
$tdatapayslipmain[".requiredSearchFields"] = array();

$tdatapayslipmain[".allSearchFields"][] = "PFID";
	$tdatapayslipmain[".allSearchFields"][] = "FromDate";
	$tdatapayslipmain[".allSearchFields"][] = "ToDate";
	$tdatapayslipmain[".allSearchFields"][] = "PayDate";
	$tdatapayslipmain[".allSearchFields"][] = "EmployeeID";
	$tdatapayslipmain[".allSearchFields"][] = "FullName";
	$tdatapayslipmain[".allSearchFields"][] = "WageType";
	$tdatapayslipmain[".allSearchFields"][] = "Status";
	$tdatapayslipmain[".allSearchFields"][] = "MonthlyRate";
	$tdatapayslipmain[".allSearchFields"][] = "BasicDailyRate";
	$tdatapayslipmain[".allSearchFields"][] = "Division";
	$tdatapayslipmain[".allSearchFields"][] = "VL";
	$tdatapayslipmain[".allSearchFields"][] = "SL";
	$tdatapayslipmain[".allSearchFields"][] = "EL";
	$tdatapayslipmain[".allSearchFields"][] = "PL";
	$tdatapayslipmain[".allSearchFields"][] = "RegularPayT";
	$tdatapayslipmain[".allSearchFields"][] = "RegularPay";
	$tdatapayslipmain[".allSearchFields"][] = "LateT";
	$tdatapayslipmain[".allSearchFields"][] = "Late";
	$tdatapayslipmain[".allSearchFields"][] = "UndertimeT";
	$tdatapayslipmain[".allSearchFields"][] = "Undertime";
	$tdatapayslipmain[".allSearchFields"][] = "LWOPT";
	$tdatapayslipmain[".allSearchFields"][] = "LWOP";
	$tdatapayslipmain[".allSearchFields"][] = "RegOTT";
	$tdatapayslipmain[".allSearchFields"][] = "RegOT";
	$tdatapayslipmain[".allSearchFields"][] = "RHOTT";
	$tdatapayslipmain[".allSearchFields"][] = "RHOT";
	$tdatapayslipmain[".allSearchFields"][] = "SHOTT";
	$tdatapayslipmain[".allSearchFields"][] = "SHOT";
	$tdatapayslipmain[".allSearchFields"][] = "DHOTT";
	$tdatapayslipmain[".allSearchFields"][] = "DHOT";
	$tdatapayslipmain[".allSearchFields"][] = "RDOTT";
	$tdatapayslipmain[".allSearchFields"][] = "RDOT";
	$tdatapayslipmain[".allSearchFields"][] = "RHRDOTT";
	$tdatapayslipmain[".allSearchFields"][] = "RHRDOT";
	$tdatapayslipmain[".allSearchFields"][] = "SHRDOTT";
	$tdatapayslipmain[".allSearchFields"][] = "SHRDOT";
	$tdatapayslipmain[".allSearchFields"][] = "DHRDOTT";
	$tdatapayslipmain[".allSearchFields"][] = "DHRDOT";
	$tdatapayslipmain[".allSearchFields"][] = "TNDOTT";
	$tdatapayslipmain[".allSearchFields"][] = "TNDOT";
	$tdatapayslipmain[".allSearchFields"][] = "RegHolT";
	$tdatapayslipmain[".allSearchFields"][] = "RegHol";
	$tdatapayslipmain[".allSearchFields"][] = "SpHolT";
	$tdatapayslipmain[".allSearchFields"][] = "SpHol";
	$tdatapayslipmain[".allSearchFields"][] = "DbHolT";
	$tdatapayslipmain[".allSearchFields"][] = "DbHol";
	$tdatapayslipmain[".allSearchFields"][] = "RestDayT";
	$tdatapayslipmain[".allSearchFields"][] = "RestDay";
	$tdatapayslipmain[".allSearchFields"][] = "RHRDT";
	$tdatapayslipmain[".allSearchFields"][] = "RHRD";
	$tdatapayslipmain[".allSearchFields"][] = "SHRDT";
	$tdatapayslipmain[".allSearchFields"][] = "SHRD";
	$tdatapayslipmain[".allSearchFields"][] = "DHRDT";
	$tdatapayslipmain[".allSearchFields"][] = "DHRD";
	$tdatapayslipmain[".allSearchFields"][] = "NDiffT";
	$tdatapayslipmain[".allSearchFields"][] = "NDiff";
	$tdatapayslipmain[".allSearchFields"][] = "VacLeaveT";
	$tdatapayslipmain[".allSearchFields"][] = "VacLeave";
	$tdatapayslipmain[".allSearchFields"][] = "SicLeaveT";
	$tdatapayslipmain[".allSearchFields"][] = "SicLeave";
	$tdatapayslipmain[".allSearchFields"][] = "EmeLeaveT";
	$tdatapayslipmain[".allSearchFields"][] = "EmeLeave";
	$tdatapayslipmain[".allSearchFields"][] = "GrossPay";
	$tdatapayslipmain[".allSearchFields"][] = "Taxable";
	$tdatapayslipmain[".allSearchFields"][] = "TaxableToDate";
	$tdatapayslipmain[".allSearchFields"][] = "TaxToDate";
	$tdatapayslipmain[".allSearchFields"][] = "ThirToDate";
	$tdatapayslipmain[".allSearchFields"][] = "TDeductions";
	$tdatapayslipmain[".allSearchFields"][] = "NetPay";
	$tdatapayslipmain[".allSearchFields"][] = "Employer";
	$tdatapayslipmain[".allSearchFields"][] = "EmployerID";
	$tdatapayslipmain[".allSearchFields"][] = "WageTypeID";
	$tdatapayslipmain[".allSearchFields"][] = "DivisionID";
	$tdatapayslipmain[".allSearchFields"][] = "PtabID";
	

$tdatapayslipmain[".googleLikeFields"] = array();
$tdatapayslipmain[".googleLikeFields"][] = "PFID";
$tdatapayslipmain[".googleLikeFields"][] = "FromDate";
$tdatapayslipmain[".googleLikeFields"][] = "ToDate";
$tdatapayslipmain[".googleLikeFields"][] = "PayDate";
$tdatapayslipmain[".googleLikeFields"][] = "EmployeeID";
$tdatapayslipmain[".googleLikeFields"][] = "FullName";
$tdatapayslipmain[".googleLikeFields"][] = "WageType";
$tdatapayslipmain[".googleLikeFields"][] = "Status";
$tdatapayslipmain[".googleLikeFields"][] = "MonthlyRate";
$tdatapayslipmain[".googleLikeFields"][] = "BasicDailyRate";
$tdatapayslipmain[".googleLikeFields"][] = "Division";
$tdatapayslipmain[".googleLikeFields"][] = "VL";
$tdatapayslipmain[".googleLikeFields"][] = "SL";
$tdatapayslipmain[".googleLikeFields"][] = "EL";
$tdatapayslipmain[".googleLikeFields"][] = "PL";
$tdatapayslipmain[".googleLikeFields"][] = "RegularPayT";
$tdatapayslipmain[".googleLikeFields"][] = "RegularPay";
$tdatapayslipmain[".googleLikeFields"][] = "LateT";
$tdatapayslipmain[".googleLikeFields"][] = "Late";
$tdatapayslipmain[".googleLikeFields"][] = "UndertimeT";
$tdatapayslipmain[".googleLikeFields"][] = "Undertime";
$tdatapayslipmain[".googleLikeFields"][] = "LWOPT";
$tdatapayslipmain[".googleLikeFields"][] = "LWOP";
$tdatapayslipmain[".googleLikeFields"][] = "RegOTT";
$tdatapayslipmain[".googleLikeFields"][] = "RegOT";
$tdatapayslipmain[".googleLikeFields"][] = "RHOTT";
$tdatapayslipmain[".googleLikeFields"][] = "RHOT";
$tdatapayslipmain[".googleLikeFields"][] = "SHOTT";
$tdatapayslipmain[".googleLikeFields"][] = "SHOT";
$tdatapayslipmain[".googleLikeFields"][] = "DHOTT";
$tdatapayslipmain[".googleLikeFields"][] = "DHOT";
$tdatapayslipmain[".googleLikeFields"][] = "RDOTT";
$tdatapayslipmain[".googleLikeFields"][] = "RDOT";
$tdatapayslipmain[".googleLikeFields"][] = "RHRDOTT";
$tdatapayslipmain[".googleLikeFields"][] = "RHRDOT";
$tdatapayslipmain[".googleLikeFields"][] = "SHRDOTT";
$tdatapayslipmain[".googleLikeFields"][] = "SHRDOT";
$tdatapayslipmain[".googleLikeFields"][] = "DHRDOTT";
$tdatapayslipmain[".googleLikeFields"][] = "DHRDOT";
$tdatapayslipmain[".googleLikeFields"][] = "TNDOTT";
$tdatapayslipmain[".googleLikeFields"][] = "TNDOT";
$tdatapayslipmain[".googleLikeFields"][] = "RegHolT";
$tdatapayslipmain[".googleLikeFields"][] = "RegHol";
$tdatapayslipmain[".googleLikeFields"][] = "SpHolT";
$tdatapayslipmain[".googleLikeFields"][] = "SpHol";
$tdatapayslipmain[".googleLikeFields"][] = "DbHolT";
$tdatapayslipmain[".googleLikeFields"][] = "DbHol";
$tdatapayslipmain[".googleLikeFields"][] = "RestDayT";
$tdatapayslipmain[".googleLikeFields"][] = "RestDay";
$tdatapayslipmain[".googleLikeFields"][] = "RHRDT";
$tdatapayslipmain[".googleLikeFields"][] = "RHRD";
$tdatapayslipmain[".googleLikeFields"][] = "SHRDT";
$tdatapayslipmain[".googleLikeFields"][] = "SHRD";
$tdatapayslipmain[".googleLikeFields"][] = "DHRDT";
$tdatapayslipmain[".googleLikeFields"][] = "DHRD";
$tdatapayslipmain[".googleLikeFields"][] = "NDiffT";
$tdatapayslipmain[".googleLikeFields"][] = "NDiff";
$tdatapayslipmain[".googleLikeFields"][] = "VacLeaveT";
$tdatapayslipmain[".googleLikeFields"][] = "VacLeave";
$tdatapayslipmain[".googleLikeFields"][] = "SicLeaveT";
$tdatapayslipmain[".googleLikeFields"][] = "SicLeave";
$tdatapayslipmain[".googleLikeFields"][] = "EmeLeaveT";
$tdatapayslipmain[".googleLikeFields"][] = "EmeLeave";
$tdatapayslipmain[".googleLikeFields"][] = "GrossPay";
$tdatapayslipmain[".googleLikeFields"][] = "Taxable";
$tdatapayslipmain[".googleLikeFields"][] = "TaxableToDate";
$tdatapayslipmain[".googleLikeFields"][] = "TaxToDate";
$tdatapayslipmain[".googleLikeFields"][] = "ThirToDate";
$tdatapayslipmain[".googleLikeFields"][] = "TDeductions";
$tdatapayslipmain[".googleLikeFields"][] = "NetPay";
$tdatapayslipmain[".googleLikeFields"][] = "Employer";
$tdatapayslipmain[".googleLikeFields"][] = "EmployerID";
$tdatapayslipmain[".googleLikeFields"][] = "WageTypeID";
$tdatapayslipmain[".googleLikeFields"][] = "DivisionID";
$tdatapayslipmain[".googleLikeFields"][] = "PtabID";


$tdatapayslipmain[".advSearchFields"] = array();
$tdatapayslipmain[".advSearchFields"][] = "PFID";
$tdatapayslipmain[".advSearchFields"][] = "FromDate";
$tdatapayslipmain[".advSearchFields"][] = "ToDate";
$tdatapayslipmain[".advSearchFields"][] = "PayDate";
$tdatapayslipmain[".advSearchFields"][] = "EmployeeID";
$tdatapayslipmain[".advSearchFields"][] = "FullName";
$tdatapayslipmain[".advSearchFields"][] = "WageType";
$tdatapayslipmain[".advSearchFields"][] = "Status";
$tdatapayslipmain[".advSearchFields"][] = "MonthlyRate";
$tdatapayslipmain[".advSearchFields"][] = "BasicDailyRate";
$tdatapayslipmain[".advSearchFields"][] = "Division";
$tdatapayslipmain[".advSearchFields"][] = "VL";
$tdatapayslipmain[".advSearchFields"][] = "SL";
$tdatapayslipmain[".advSearchFields"][] = "EL";
$tdatapayslipmain[".advSearchFields"][] = "PL";
$tdatapayslipmain[".advSearchFields"][] = "RegularPayT";
$tdatapayslipmain[".advSearchFields"][] = "RegularPay";
$tdatapayslipmain[".advSearchFields"][] = "LateT";
$tdatapayslipmain[".advSearchFields"][] = "Late";
$tdatapayslipmain[".advSearchFields"][] = "UndertimeT";
$tdatapayslipmain[".advSearchFields"][] = "Undertime";
$tdatapayslipmain[".advSearchFields"][] = "LWOPT";
$tdatapayslipmain[".advSearchFields"][] = "LWOP";
$tdatapayslipmain[".advSearchFields"][] = "RegOTT";
$tdatapayslipmain[".advSearchFields"][] = "RegOT";
$tdatapayslipmain[".advSearchFields"][] = "RHOTT";
$tdatapayslipmain[".advSearchFields"][] = "RHOT";
$tdatapayslipmain[".advSearchFields"][] = "SHOTT";
$tdatapayslipmain[".advSearchFields"][] = "SHOT";
$tdatapayslipmain[".advSearchFields"][] = "DHOTT";
$tdatapayslipmain[".advSearchFields"][] = "DHOT";
$tdatapayslipmain[".advSearchFields"][] = "RDOTT";
$tdatapayslipmain[".advSearchFields"][] = "RDOT";
$tdatapayslipmain[".advSearchFields"][] = "RHRDOTT";
$tdatapayslipmain[".advSearchFields"][] = "RHRDOT";
$tdatapayslipmain[".advSearchFields"][] = "SHRDOTT";
$tdatapayslipmain[".advSearchFields"][] = "SHRDOT";
$tdatapayslipmain[".advSearchFields"][] = "DHRDOTT";
$tdatapayslipmain[".advSearchFields"][] = "DHRDOT";
$tdatapayslipmain[".advSearchFields"][] = "TNDOTT";
$tdatapayslipmain[".advSearchFields"][] = "TNDOT";
$tdatapayslipmain[".advSearchFields"][] = "RegHolT";
$tdatapayslipmain[".advSearchFields"][] = "RegHol";
$tdatapayslipmain[".advSearchFields"][] = "SpHolT";
$tdatapayslipmain[".advSearchFields"][] = "SpHol";
$tdatapayslipmain[".advSearchFields"][] = "DbHolT";
$tdatapayslipmain[".advSearchFields"][] = "DbHol";
$tdatapayslipmain[".advSearchFields"][] = "RestDayT";
$tdatapayslipmain[".advSearchFields"][] = "RestDay";
$tdatapayslipmain[".advSearchFields"][] = "RHRDT";
$tdatapayslipmain[".advSearchFields"][] = "RHRD";
$tdatapayslipmain[".advSearchFields"][] = "SHRDT";
$tdatapayslipmain[".advSearchFields"][] = "SHRD";
$tdatapayslipmain[".advSearchFields"][] = "DHRDT";
$tdatapayslipmain[".advSearchFields"][] = "DHRD";
$tdatapayslipmain[".advSearchFields"][] = "NDiffT";
$tdatapayslipmain[".advSearchFields"][] = "NDiff";
$tdatapayslipmain[".advSearchFields"][] = "VacLeaveT";
$tdatapayslipmain[".advSearchFields"][] = "VacLeave";
$tdatapayslipmain[".advSearchFields"][] = "SicLeaveT";
$tdatapayslipmain[".advSearchFields"][] = "SicLeave";
$tdatapayslipmain[".advSearchFields"][] = "EmeLeaveT";
$tdatapayslipmain[".advSearchFields"][] = "EmeLeave";
$tdatapayslipmain[".advSearchFields"][] = "GrossPay";
$tdatapayslipmain[".advSearchFields"][] = "Taxable";
$tdatapayslipmain[".advSearchFields"][] = "TaxableToDate";
$tdatapayslipmain[".advSearchFields"][] = "TaxToDate";
$tdatapayslipmain[".advSearchFields"][] = "ThirToDate";
$tdatapayslipmain[".advSearchFields"][] = "TDeductions";
$tdatapayslipmain[".advSearchFields"][] = "NetPay";
$tdatapayslipmain[".advSearchFields"][] = "Employer";
$tdatapayslipmain[".advSearchFields"][] = "EmployerID";
$tdatapayslipmain[".advSearchFields"][] = "WageTypeID";
$tdatapayslipmain[".advSearchFields"][] = "DivisionID";
$tdatapayslipmain[".advSearchFields"][] = "PtabID";

$tdatapayslipmain[".tableType"] = "list";

$tdatapayslipmain[".printerPageOrientation"] = 0;
$tdatapayslipmain[".nPrinterPageScale"] = 100;

$tdatapayslipmain[".nPrinterSplitRecords"] = 40;

$tdatapayslipmain[".nPrinterPDFSplitRecords"] = 40;



$tdatapayslipmain[".geocodingEnabled"] = false;





$tdatapayslipmain[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatapayslipmain[".pageSize"] = 20;

$tdatapayslipmain[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapayslipmain[".strOrderBy"] = $tstrOrderBy;

$tdatapayslipmain[".orderindexes"] = array();

$tdatapayslipmain[".sqlHead"] = "SELECT PFID,  	FromDate,  	ToDate,  	PayDate,  	EmployeeID,  	FullName,  	WageType,  	Status,  	MonthlyRate,  	BasicDailyRate,  	Division,  	VL,  	SL,  	EL,  	PL,  	RegularPayT,  	RegularPay,  	LateT,  	Late,  	UndertimeT,  	Undertime,  	LWOPT,  	LWOP,  	RegOTT,  	RegOT,  	RHOTT,  	RHOT,  	SHOTT,  	SHOT,  	DHOTT,  	DHOT,  	RDOTT,  	RDOT,  	RHRDOTT,  	RHRDOT,  	SHRDOTT,  	SHRDOT,  	DHRDOTT,  	DHRDOT,  	TNDOTT,  	TNDOT,  	RegHolT,  	RegHol,  	SpHolT,  	SpHol,  	DbHolT,  	DbHol,  	RestDayT,  	RestDay,  	RHRDT,  	RHRD,  	SHRDT,  	SHRD,  	DHRDT,  	DHRD,  	NDiffT,  	NDiff,  	VacLeaveT,  	VacLeave,  	SicLeaveT,  	SicLeave,  	EmeLeaveT,  	EmeLeave,  	GrossPay,  	Taxable,  	TaxableToDate,  	TaxToDate,  	ThirToDate,  	TDeductions,  	NetPay,  	Employer,  	EmployerID,  	WageTypeID,  	DivisionID,  	PtabID";
$tdatapayslipmain[".sqlFrom"] = "FROM payslipmain";
$tdatapayslipmain[".sqlWhereExpr"] = "";
$tdatapayslipmain[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapayslipmain[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapayslipmain[".arrGroupsPerPage"] = $arrGPP;

$tdatapayslipmain[".highlightSearchResults"] = true;

$tableKeyspayslipmain = array();
$tableKeyspayslipmain[] = "PFID";
$tdatapayslipmain[".Keys"] = $tableKeyspayslipmain;

$tdatapayslipmain[".listFields"] = array();
$tdatapayslipmain[".listFields"][] = "PFID";
$tdatapayslipmain[".listFields"][] = "FromDate";
$tdatapayslipmain[".listFields"][] = "ToDate";
$tdatapayslipmain[".listFields"][] = "PayDate";
$tdatapayslipmain[".listFields"][] = "EmployeeID";
$tdatapayslipmain[".listFields"][] = "FullName";
$tdatapayslipmain[".listFields"][] = "WageType";
$tdatapayslipmain[".listFields"][] = "Status";
$tdatapayslipmain[".listFields"][] = "MonthlyRate";
$tdatapayslipmain[".listFields"][] = "BasicDailyRate";
$tdatapayslipmain[".listFields"][] = "Division";
$tdatapayslipmain[".listFields"][] = "VL";
$tdatapayslipmain[".listFields"][] = "SL";
$tdatapayslipmain[".listFields"][] = "EL";
$tdatapayslipmain[".listFields"][] = "PL";
$tdatapayslipmain[".listFields"][] = "RegularPayT";
$tdatapayslipmain[".listFields"][] = "RegularPay";
$tdatapayslipmain[".listFields"][] = "LateT";
$tdatapayslipmain[".listFields"][] = "Late";
$tdatapayslipmain[".listFields"][] = "UndertimeT";
$tdatapayslipmain[".listFields"][] = "Undertime";
$tdatapayslipmain[".listFields"][] = "LWOPT";
$tdatapayslipmain[".listFields"][] = "LWOP";
$tdatapayslipmain[".listFields"][] = "RegOTT";
$tdatapayslipmain[".listFields"][] = "RegOT";
$tdatapayslipmain[".listFields"][] = "RHOTT";
$tdatapayslipmain[".listFields"][] = "RHOT";
$tdatapayslipmain[".listFields"][] = "SHOTT";
$tdatapayslipmain[".listFields"][] = "SHOT";
$tdatapayslipmain[".listFields"][] = "DHOTT";
$tdatapayslipmain[".listFields"][] = "DHOT";
$tdatapayslipmain[".listFields"][] = "RDOTT";
$tdatapayslipmain[".listFields"][] = "RDOT";
$tdatapayslipmain[".listFields"][] = "RHRDOTT";
$tdatapayslipmain[".listFields"][] = "RHRDOT";
$tdatapayslipmain[".listFields"][] = "SHRDOTT";
$tdatapayslipmain[".listFields"][] = "SHRDOT";
$tdatapayslipmain[".listFields"][] = "DHRDOTT";
$tdatapayslipmain[".listFields"][] = "DHRDOT";
$tdatapayslipmain[".listFields"][] = "TNDOTT";
$tdatapayslipmain[".listFields"][] = "TNDOT";
$tdatapayslipmain[".listFields"][] = "RegHolT";
$tdatapayslipmain[".listFields"][] = "RegHol";
$tdatapayslipmain[".listFields"][] = "SpHolT";
$tdatapayslipmain[".listFields"][] = "SpHol";
$tdatapayslipmain[".listFields"][] = "DbHolT";
$tdatapayslipmain[".listFields"][] = "DbHol";
$tdatapayslipmain[".listFields"][] = "RestDayT";
$tdatapayslipmain[".listFields"][] = "RestDay";
$tdatapayslipmain[".listFields"][] = "RHRDT";
$tdatapayslipmain[".listFields"][] = "RHRD";
$tdatapayslipmain[".listFields"][] = "SHRDT";
$tdatapayslipmain[".listFields"][] = "SHRD";
$tdatapayslipmain[".listFields"][] = "DHRDT";
$tdatapayslipmain[".listFields"][] = "DHRD";
$tdatapayslipmain[".listFields"][] = "NDiffT";
$tdatapayslipmain[".listFields"][] = "NDiff";
$tdatapayslipmain[".listFields"][] = "VacLeaveT";
$tdatapayslipmain[".listFields"][] = "VacLeave";
$tdatapayslipmain[".listFields"][] = "SicLeaveT";
$tdatapayslipmain[".listFields"][] = "SicLeave";
$tdatapayslipmain[".listFields"][] = "EmeLeaveT";
$tdatapayslipmain[".listFields"][] = "EmeLeave";
$tdatapayslipmain[".listFields"][] = "GrossPay";
$tdatapayslipmain[".listFields"][] = "Taxable";
$tdatapayslipmain[".listFields"][] = "TaxableToDate";
$tdatapayslipmain[".listFields"][] = "TaxToDate";
$tdatapayslipmain[".listFields"][] = "ThirToDate";
$tdatapayslipmain[".listFields"][] = "TDeductions";
$tdatapayslipmain[".listFields"][] = "NetPay";
$tdatapayslipmain[".listFields"][] = "Employer";
$tdatapayslipmain[".listFields"][] = "EmployerID";
$tdatapayslipmain[".listFields"][] = "WageTypeID";
$tdatapayslipmain[".listFields"][] = "DivisionID";
$tdatapayslipmain[".listFields"][] = "PtabID";

$tdatapayslipmain[".hideMobileList"] = array();


$tdatapayslipmain[".viewFields"] = array();
$tdatapayslipmain[".viewFields"][] = "PFID";
$tdatapayslipmain[".viewFields"][] = "FromDate";
$tdatapayslipmain[".viewFields"][] = "ToDate";
$tdatapayslipmain[".viewFields"][] = "PayDate";
$tdatapayslipmain[".viewFields"][] = "EmployeeID";
$tdatapayslipmain[".viewFields"][] = "FullName";
$tdatapayslipmain[".viewFields"][] = "WageType";
$tdatapayslipmain[".viewFields"][] = "Status";
$tdatapayslipmain[".viewFields"][] = "MonthlyRate";
$tdatapayslipmain[".viewFields"][] = "BasicDailyRate";
$tdatapayslipmain[".viewFields"][] = "Division";
$tdatapayslipmain[".viewFields"][] = "VL";
$tdatapayslipmain[".viewFields"][] = "SL";
$tdatapayslipmain[".viewFields"][] = "EL";
$tdatapayslipmain[".viewFields"][] = "PL";
$tdatapayslipmain[".viewFields"][] = "RegularPayT";
$tdatapayslipmain[".viewFields"][] = "RegularPay";
$tdatapayslipmain[".viewFields"][] = "LateT";
$tdatapayslipmain[".viewFields"][] = "Late";
$tdatapayslipmain[".viewFields"][] = "UndertimeT";
$tdatapayslipmain[".viewFields"][] = "Undertime";
$tdatapayslipmain[".viewFields"][] = "LWOPT";
$tdatapayslipmain[".viewFields"][] = "LWOP";
$tdatapayslipmain[".viewFields"][] = "RegOTT";
$tdatapayslipmain[".viewFields"][] = "RegOT";
$tdatapayslipmain[".viewFields"][] = "RHOTT";
$tdatapayslipmain[".viewFields"][] = "RHOT";
$tdatapayslipmain[".viewFields"][] = "SHOTT";
$tdatapayslipmain[".viewFields"][] = "SHOT";
$tdatapayslipmain[".viewFields"][] = "DHOTT";
$tdatapayslipmain[".viewFields"][] = "DHOT";
$tdatapayslipmain[".viewFields"][] = "RDOTT";
$tdatapayslipmain[".viewFields"][] = "RDOT";
$tdatapayslipmain[".viewFields"][] = "RHRDOTT";
$tdatapayslipmain[".viewFields"][] = "RHRDOT";
$tdatapayslipmain[".viewFields"][] = "SHRDOTT";
$tdatapayslipmain[".viewFields"][] = "SHRDOT";
$tdatapayslipmain[".viewFields"][] = "DHRDOTT";
$tdatapayslipmain[".viewFields"][] = "DHRDOT";
$tdatapayslipmain[".viewFields"][] = "TNDOTT";
$tdatapayslipmain[".viewFields"][] = "TNDOT";
$tdatapayslipmain[".viewFields"][] = "RegHolT";
$tdatapayslipmain[".viewFields"][] = "RegHol";
$tdatapayslipmain[".viewFields"][] = "SpHolT";
$tdatapayslipmain[".viewFields"][] = "SpHol";
$tdatapayslipmain[".viewFields"][] = "DbHolT";
$tdatapayslipmain[".viewFields"][] = "DbHol";
$tdatapayslipmain[".viewFields"][] = "RestDayT";
$tdatapayslipmain[".viewFields"][] = "RestDay";
$tdatapayslipmain[".viewFields"][] = "RHRDT";
$tdatapayslipmain[".viewFields"][] = "RHRD";
$tdatapayslipmain[".viewFields"][] = "SHRDT";
$tdatapayslipmain[".viewFields"][] = "SHRD";
$tdatapayslipmain[".viewFields"][] = "DHRDT";
$tdatapayslipmain[".viewFields"][] = "DHRD";
$tdatapayslipmain[".viewFields"][] = "NDiffT";
$tdatapayslipmain[".viewFields"][] = "NDiff";
$tdatapayslipmain[".viewFields"][] = "VacLeaveT";
$tdatapayslipmain[".viewFields"][] = "VacLeave";
$tdatapayslipmain[".viewFields"][] = "SicLeaveT";
$tdatapayslipmain[".viewFields"][] = "SicLeave";
$tdatapayslipmain[".viewFields"][] = "EmeLeaveT";
$tdatapayslipmain[".viewFields"][] = "EmeLeave";
$tdatapayslipmain[".viewFields"][] = "GrossPay";
$tdatapayslipmain[".viewFields"][] = "Taxable";
$tdatapayslipmain[".viewFields"][] = "TaxableToDate";
$tdatapayslipmain[".viewFields"][] = "TaxToDate";
$tdatapayslipmain[".viewFields"][] = "ThirToDate";
$tdatapayslipmain[".viewFields"][] = "TDeductions";
$tdatapayslipmain[".viewFields"][] = "NetPay";
$tdatapayslipmain[".viewFields"][] = "Employer";
$tdatapayslipmain[".viewFields"][] = "EmployerID";
$tdatapayslipmain[".viewFields"][] = "WageTypeID";
$tdatapayslipmain[".viewFields"][] = "DivisionID";
$tdatapayslipmain[".viewFields"][] = "PtabID";

$tdatapayslipmain[".addFields"] = array();
$tdatapayslipmain[".addFields"][] = "FromDate";
$tdatapayslipmain[".addFields"][] = "ToDate";
$tdatapayslipmain[".addFields"][] = "PayDate";
$tdatapayslipmain[".addFields"][] = "EmployeeID";
$tdatapayslipmain[".addFields"][] = "FullName";
$tdatapayslipmain[".addFields"][] = "WageType";
$tdatapayslipmain[".addFields"][] = "Status";
$tdatapayslipmain[".addFields"][] = "MonthlyRate";
$tdatapayslipmain[".addFields"][] = "BasicDailyRate";
$tdatapayslipmain[".addFields"][] = "Division";
$tdatapayslipmain[".addFields"][] = "VL";
$tdatapayslipmain[".addFields"][] = "SL";
$tdatapayslipmain[".addFields"][] = "EL";
$tdatapayslipmain[".addFields"][] = "PL";
$tdatapayslipmain[".addFields"][] = "RegularPayT";
$tdatapayslipmain[".addFields"][] = "RegularPay";
$tdatapayslipmain[".addFields"][] = "LateT";
$tdatapayslipmain[".addFields"][] = "Late";
$tdatapayslipmain[".addFields"][] = "UndertimeT";
$tdatapayslipmain[".addFields"][] = "Undertime";
$tdatapayslipmain[".addFields"][] = "LWOPT";
$tdatapayslipmain[".addFields"][] = "LWOP";
$tdatapayslipmain[".addFields"][] = "RegOTT";
$tdatapayslipmain[".addFields"][] = "RegOT";
$tdatapayslipmain[".addFields"][] = "RHOTT";
$tdatapayslipmain[".addFields"][] = "RHOT";
$tdatapayslipmain[".addFields"][] = "SHOTT";
$tdatapayslipmain[".addFields"][] = "SHOT";
$tdatapayslipmain[".addFields"][] = "DHOTT";
$tdatapayslipmain[".addFields"][] = "DHOT";
$tdatapayslipmain[".addFields"][] = "RDOTT";
$tdatapayslipmain[".addFields"][] = "RDOT";
$tdatapayslipmain[".addFields"][] = "RHRDOTT";
$tdatapayslipmain[".addFields"][] = "RHRDOT";
$tdatapayslipmain[".addFields"][] = "SHRDOTT";
$tdatapayslipmain[".addFields"][] = "SHRDOT";
$tdatapayslipmain[".addFields"][] = "DHRDOTT";
$tdatapayslipmain[".addFields"][] = "DHRDOT";
$tdatapayslipmain[".addFields"][] = "TNDOTT";
$tdatapayslipmain[".addFields"][] = "TNDOT";
$tdatapayslipmain[".addFields"][] = "RegHolT";
$tdatapayslipmain[".addFields"][] = "RegHol";
$tdatapayslipmain[".addFields"][] = "SpHolT";
$tdatapayslipmain[".addFields"][] = "SpHol";
$tdatapayslipmain[".addFields"][] = "DbHolT";
$tdatapayslipmain[".addFields"][] = "DbHol";
$tdatapayslipmain[".addFields"][] = "RestDayT";
$tdatapayslipmain[".addFields"][] = "RestDay";
$tdatapayslipmain[".addFields"][] = "RHRDT";
$tdatapayslipmain[".addFields"][] = "RHRD";
$tdatapayslipmain[".addFields"][] = "SHRDT";
$tdatapayslipmain[".addFields"][] = "SHRD";
$tdatapayslipmain[".addFields"][] = "DHRDT";
$tdatapayslipmain[".addFields"][] = "DHRD";
$tdatapayslipmain[".addFields"][] = "NDiffT";
$tdatapayslipmain[".addFields"][] = "NDiff";
$tdatapayslipmain[".addFields"][] = "VacLeaveT";
$tdatapayslipmain[".addFields"][] = "VacLeave";
$tdatapayslipmain[".addFields"][] = "SicLeaveT";
$tdatapayslipmain[".addFields"][] = "SicLeave";
$tdatapayslipmain[".addFields"][] = "EmeLeaveT";
$tdatapayslipmain[".addFields"][] = "EmeLeave";
$tdatapayslipmain[".addFields"][] = "GrossPay";
$tdatapayslipmain[".addFields"][] = "Taxable";
$tdatapayslipmain[".addFields"][] = "TaxableToDate";
$tdatapayslipmain[".addFields"][] = "TaxToDate";
$tdatapayslipmain[".addFields"][] = "ThirToDate";
$tdatapayslipmain[".addFields"][] = "TDeductions";
$tdatapayslipmain[".addFields"][] = "NetPay";
$tdatapayslipmain[".addFields"][] = "Employer";
$tdatapayslipmain[".addFields"][] = "EmployerID";
$tdatapayslipmain[".addFields"][] = "WageTypeID";
$tdatapayslipmain[".addFields"][] = "DivisionID";
$tdatapayslipmain[".addFields"][] = "PtabID";

$tdatapayslipmain[".masterListFields"] = array();
$tdatapayslipmain[".masterListFields"][] = "PFID";
$tdatapayslipmain[".masterListFields"][] = "FromDate";
$tdatapayslipmain[".masterListFields"][] = "ToDate";
$tdatapayslipmain[".masterListFields"][] = "PayDate";
$tdatapayslipmain[".masterListFields"][] = "EmployeeID";
$tdatapayslipmain[".masterListFields"][] = "FullName";
$tdatapayslipmain[".masterListFields"][] = "WageType";
$tdatapayslipmain[".masterListFields"][] = "Status";
$tdatapayslipmain[".masterListFields"][] = "MonthlyRate";
$tdatapayslipmain[".masterListFields"][] = "BasicDailyRate";
$tdatapayslipmain[".masterListFields"][] = "Division";
$tdatapayslipmain[".masterListFields"][] = "VL";
$tdatapayslipmain[".masterListFields"][] = "SL";
$tdatapayslipmain[".masterListFields"][] = "EL";
$tdatapayslipmain[".masterListFields"][] = "PL";
$tdatapayslipmain[".masterListFields"][] = "RegularPayT";
$tdatapayslipmain[".masterListFields"][] = "RegularPay";
$tdatapayslipmain[".masterListFields"][] = "LateT";
$tdatapayslipmain[".masterListFields"][] = "Late";
$tdatapayslipmain[".masterListFields"][] = "UndertimeT";
$tdatapayslipmain[".masterListFields"][] = "Undertime";
$tdatapayslipmain[".masterListFields"][] = "LWOPT";
$tdatapayslipmain[".masterListFields"][] = "LWOP";
$tdatapayslipmain[".masterListFields"][] = "RegOTT";
$tdatapayslipmain[".masterListFields"][] = "RegOT";
$tdatapayslipmain[".masterListFields"][] = "RHOTT";
$tdatapayslipmain[".masterListFields"][] = "RHOT";
$tdatapayslipmain[".masterListFields"][] = "SHOTT";
$tdatapayslipmain[".masterListFields"][] = "SHOT";
$tdatapayslipmain[".masterListFields"][] = "DHOTT";
$tdatapayslipmain[".masterListFields"][] = "DHOT";
$tdatapayslipmain[".masterListFields"][] = "RDOTT";
$tdatapayslipmain[".masterListFields"][] = "RDOT";
$tdatapayslipmain[".masterListFields"][] = "RHRDOTT";
$tdatapayslipmain[".masterListFields"][] = "RHRDOT";
$tdatapayslipmain[".masterListFields"][] = "SHRDOTT";
$tdatapayslipmain[".masterListFields"][] = "SHRDOT";
$tdatapayslipmain[".masterListFields"][] = "DHRDOTT";
$tdatapayslipmain[".masterListFields"][] = "DHRDOT";
$tdatapayslipmain[".masterListFields"][] = "TNDOTT";
$tdatapayslipmain[".masterListFields"][] = "TNDOT";
$tdatapayslipmain[".masterListFields"][] = "RegHolT";
$tdatapayslipmain[".masterListFields"][] = "RegHol";
$tdatapayslipmain[".masterListFields"][] = "SpHolT";
$tdatapayslipmain[".masterListFields"][] = "SpHol";
$tdatapayslipmain[".masterListFields"][] = "DbHolT";
$tdatapayslipmain[".masterListFields"][] = "DbHol";
$tdatapayslipmain[".masterListFields"][] = "RestDayT";
$tdatapayslipmain[".masterListFields"][] = "RestDay";
$tdatapayslipmain[".masterListFields"][] = "RHRDT";
$tdatapayslipmain[".masterListFields"][] = "RHRD";
$tdatapayslipmain[".masterListFields"][] = "SHRDT";
$tdatapayslipmain[".masterListFields"][] = "SHRD";
$tdatapayslipmain[".masterListFields"][] = "DHRDT";
$tdatapayslipmain[".masterListFields"][] = "DHRD";
$tdatapayslipmain[".masterListFields"][] = "NDiffT";
$tdatapayslipmain[".masterListFields"][] = "NDiff";
$tdatapayslipmain[".masterListFields"][] = "VacLeaveT";
$tdatapayslipmain[".masterListFields"][] = "VacLeave";
$tdatapayslipmain[".masterListFields"][] = "SicLeaveT";
$tdatapayslipmain[".masterListFields"][] = "SicLeave";
$tdatapayslipmain[".masterListFields"][] = "EmeLeaveT";
$tdatapayslipmain[".masterListFields"][] = "EmeLeave";
$tdatapayslipmain[".masterListFields"][] = "GrossPay";
$tdatapayslipmain[".masterListFields"][] = "Taxable";
$tdatapayslipmain[".masterListFields"][] = "TaxableToDate";
$tdatapayslipmain[".masterListFields"][] = "TaxToDate";
$tdatapayslipmain[".masterListFields"][] = "ThirToDate";
$tdatapayslipmain[".masterListFields"][] = "TDeductions";
$tdatapayslipmain[".masterListFields"][] = "NetPay";
$tdatapayslipmain[".masterListFields"][] = "Employer";
$tdatapayslipmain[".masterListFields"][] = "EmployerID";
$tdatapayslipmain[".masterListFields"][] = "WageTypeID";
$tdatapayslipmain[".masterListFields"][] = "DivisionID";
$tdatapayslipmain[".masterListFields"][] = "PtabID";

$tdatapayslipmain[".inlineAddFields"] = array();
$tdatapayslipmain[".inlineAddFields"][] = "FromDate";
$tdatapayslipmain[".inlineAddFields"][] = "ToDate";
$tdatapayslipmain[".inlineAddFields"][] = "PayDate";
$tdatapayslipmain[".inlineAddFields"][] = "EmployeeID";
$tdatapayslipmain[".inlineAddFields"][] = "FullName";
$tdatapayslipmain[".inlineAddFields"][] = "WageType";
$tdatapayslipmain[".inlineAddFields"][] = "Status";
$tdatapayslipmain[".inlineAddFields"][] = "MonthlyRate";
$tdatapayslipmain[".inlineAddFields"][] = "BasicDailyRate";
$tdatapayslipmain[".inlineAddFields"][] = "Division";
$tdatapayslipmain[".inlineAddFields"][] = "VL";
$tdatapayslipmain[".inlineAddFields"][] = "SL";
$tdatapayslipmain[".inlineAddFields"][] = "EL";
$tdatapayslipmain[".inlineAddFields"][] = "PL";
$tdatapayslipmain[".inlineAddFields"][] = "RegularPayT";
$tdatapayslipmain[".inlineAddFields"][] = "RegularPay";
$tdatapayslipmain[".inlineAddFields"][] = "LateT";
$tdatapayslipmain[".inlineAddFields"][] = "Late";
$tdatapayslipmain[".inlineAddFields"][] = "UndertimeT";
$tdatapayslipmain[".inlineAddFields"][] = "Undertime";
$tdatapayslipmain[".inlineAddFields"][] = "LWOPT";
$tdatapayslipmain[".inlineAddFields"][] = "LWOP";
$tdatapayslipmain[".inlineAddFields"][] = "RegOTT";
$tdatapayslipmain[".inlineAddFields"][] = "RegOT";
$tdatapayslipmain[".inlineAddFields"][] = "RHOTT";
$tdatapayslipmain[".inlineAddFields"][] = "RHOT";
$tdatapayslipmain[".inlineAddFields"][] = "SHOTT";
$tdatapayslipmain[".inlineAddFields"][] = "SHOT";
$tdatapayslipmain[".inlineAddFields"][] = "DHOTT";
$tdatapayslipmain[".inlineAddFields"][] = "DHOT";
$tdatapayslipmain[".inlineAddFields"][] = "RDOTT";
$tdatapayslipmain[".inlineAddFields"][] = "RDOT";
$tdatapayslipmain[".inlineAddFields"][] = "RHRDOTT";
$tdatapayslipmain[".inlineAddFields"][] = "RHRDOT";
$tdatapayslipmain[".inlineAddFields"][] = "SHRDOTT";
$tdatapayslipmain[".inlineAddFields"][] = "SHRDOT";
$tdatapayslipmain[".inlineAddFields"][] = "DHRDOTT";
$tdatapayslipmain[".inlineAddFields"][] = "DHRDOT";
$tdatapayslipmain[".inlineAddFields"][] = "TNDOTT";
$tdatapayslipmain[".inlineAddFields"][] = "TNDOT";
$tdatapayslipmain[".inlineAddFields"][] = "RegHolT";
$tdatapayslipmain[".inlineAddFields"][] = "RegHol";
$tdatapayslipmain[".inlineAddFields"][] = "SpHolT";
$tdatapayslipmain[".inlineAddFields"][] = "SpHol";
$tdatapayslipmain[".inlineAddFields"][] = "DbHolT";
$tdatapayslipmain[".inlineAddFields"][] = "DbHol";
$tdatapayslipmain[".inlineAddFields"][] = "RestDayT";
$tdatapayslipmain[".inlineAddFields"][] = "RestDay";
$tdatapayslipmain[".inlineAddFields"][] = "RHRDT";
$tdatapayslipmain[".inlineAddFields"][] = "RHRD";
$tdatapayslipmain[".inlineAddFields"][] = "SHRDT";
$tdatapayslipmain[".inlineAddFields"][] = "SHRD";
$tdatapayslipmain[".inlineAddFields"][] = "DHRDT";
$tdatapayslipmain[".inlineAddFields"][] = "DHRD";
$tdatapayslipmain[".inlineAddFields"][] = "NDiffT";
$tdatapayslipmain[".inlineAddFields"][] = "NDiff";
$tdatapayslipmain[".inlineAddFields"][] = "VacLeaveT";
$tdatapayslipmain[".inlineAddFields"][] = "VacLeave";
$tdatapayslipmain[".inlineAddFields"][] = "SicLeaveT";
$tdatapayslipmain[".inlineAddFields"][] = "SicLeave";
$tdatapayslipmain[".inlineAddFields"][] = "EmeLeaveT";
$tdatapayslipmain[".inlineAddFields"][] = "EmeLeave";
$tdatapayslipmain[".inlineAddFields"][] = "GrossPay";
$tdatapayslipmain[".inlineAddFields"][] = "Taxable";
$tdatapayslipmain[".inlineAddFields"][] = "TaxableToDate";
$tdatapayslipmain[".inlineAddFields"][] = "TaxToDate";
$tdatapayslipmain[".inlineAddFields"][] = "ThirToDate";
$tdatapayslipmain[".inlineAddFields"][] = "TDeductions";
$tdatapayslipmain[".inlineAddFields"][] = "NetPay";
$tdatapayslipmain[".inlineAddFields"][] = "Employer";
$tdatapayslipmain[".inlineAddFields"][] = "EmployerID";
$tdatapayslipmain[".inlineAddFields"][] = "WageTypeID";
$tdatapayslipmain[".inlineAddFields"][] = "DivisionID";
$tdatapayslipmain[".inlineAddFields"][] = "PtabID";

$tdatapayslipmain[".editFields"] = array();
$tdatapayslipmain[".editFields"][] = "FromDate";
$tdatapayslipmain[".editFields"][] = "ToDate";
$tdatapayslipmain[".editFields"][] = "PayDate";
$tdatapayslipmain[".editFields"][] = "EmployeeID";
$tdatapayslipmain[".editFields"][] = "FullName";
$tdatapayslipmain[".editFields"][] = "WageType";
$tdatapayslipmain[".editFields"][] = "Status";
$tdatapayslipmain[".editFields"][] = "MonthlyRate";
$tdatapayslipmain[".editFields"][] = "BasicDailyRate";
$tdatapayslipmain[".editFields"][] = "Division";
$tdatapayslipmain[".editFields"][] = "VL";
$tdatapayslipmain[".editFields"][] = "SL";
$tdatapayslipmain[".editFields"][] = "EL";
$tdatapayslipmain[".editFields"][] = "PL";
$tdatapayslipmain[".editFields"][] = "RegularPayT";
$tdatapayslipmain[".editFields"][] = "RegularPay";
$tdatapayslipmain[".editFields"][] = "LateT";
$tdatapayslipmain[".editFields"][] = "Late";
$tdatapayslipmain[".editFields"][] = "UndertimeT";
$tdatapayslipmain[".editFields"][] = "Undertime";
$tdatapayslipmain[".editFields"][] = "LWOPT";
$tdatapayslipmain[".editFields"][] = "LWOP";
$tdatapayslipmain[".editFields"][] = "RegOTT";
$tdatapayslipmain[".editFields"][] = "RegOT";
$tdatapayslipmain[".editFields"][] = "RHOTT";
$tdatapayslipmain[".editFields"][] = "RHOT";
$tdatapayslipmain[".editFields"][] = "SHOTT";
$tdatapayslipmain[".editFields"][] = "SHOT";
$tdatapayslipmain[".editFields"][] = "DHOTT";
$tdatapayslipmain[".editFields"][] = "DHOT";
$tdatapayslipmain[".editFields"][] = "RDOTT";
$tdatapayslipmain[".editFields"][] = "RDOT";
$tdatapayslipmain[".editFields"][] = "RHRDOTT";
$tdatapayslipmain[".editFields"][] = "RHRDOT";
$tdatapayslipmain[".editFields"][] = "SHRDOTT";
$tdatapayslipmain[".editFields"][] = "SHRDOT";
$tdatapayslipmain[".editFields"][] = "DHRDOTT";
$tdatapayslipmain[".editFields"][] = "DHRDOT";
$tdatapayslipmain[".editFields"][] = "TNDOTT";
$tdatapayslipmain[".editFields"][] = "TNDOT";
$tdatapayslipmain[".editFields"][] = "RegHolT";
$tdatapayslipmain[".editFields"][] = "RegHol";
$tdatapayslipmain[".editFields"][] = "SpHolT";
$tdatapayslipmain[".editFields"][] = "SpHol";
$tdatapayslipmain[".editFields"][] = "DbHolT";
$tdatapayslipmain[".editFields"][] = "DbHol";
$tdatapayslipmain[".editFields"][] = "RestDayT";
$tdatapayslipmain[".editFields"][] = "RestDay";
$tdatapayslipmain[".editFields"][] = "RHRDT";
$tdatapayslipmain[".editFields"][] = "RHRD";
$tdatapayslipmain[".editFields"][] = "SHRDT";
$tdatapayslipmain[".editFields"][] = "SHRD";
$tdatapayslipmain[".editFields"][] = "DHRDT";
$tdatapayslipmain[".editFields"][] = "DHRD";
$tdatapayslipmain[".editFields"][] = "NDiffT";
$tdatapayslipmain[".editFields"][] = "NDiff";
$tdatapayslipmain[".editFields"][] = "VacLeaveT";
$tdatapayslipmain[".editFields"][] = "VacLeave";
$tdatapayslipmain[".editFields"][] = "SicLeaveT";
$tdatapayslipmain[".editFields"][] = "SicLeave";
$tdatapayslipmain[".editFields"][] = "EmeLeaveT";
$tdatapayslipmain[".editFields"][] = "EmeLeave";
$tdatapayslipmain[".editFields"][] = "GrossPay";
$tdatapayslipmain[".editFields"][] = "Taxable";
$tdatapayslipmain[".editFields"][] = "TaxableToDate";
$tdatapayslipmain[".editFields"][] = "TaxToDate";
$tdatapayslipmain[".editFields"][] = "ThirToDate";
$tdatapayslipmain[".editFields"][] = "TDeductions";
$tdatapayslipmain[".editFields"][] = "NetPay";
$tdatapayslipmain[".editFields"][] = "Employer";
$tdatapayslipmain[".editFields"][] = "EmployerID";
$tdatapayslipmain[".editFields"][] = "WageTypeID";
$tdatapayslipmain[".editFields"][] = "DivisionID";
$tdatapayslipmain[".editFields"][] = "PtabID";

$tdatapayslipmain[".inlineEditFields"] = array();
$tdatapayslipmain[".inlineEditFields"][] = "FromDate";
$tdatapayslipmain[".inlineEditFields"][] = "ToDate";
$tdatapayslipmain[".inlineEditFields"][] = "PayDate";
$tdatapayslipmain[".inlineEditFields"][] = "EmployeeID";
$tdatapayslipmain[".inlineEditFields"][] = "FullName";
$tdatapayslipmain[".inlineEditFields"][] = "WageType";
$tdatapayslipmain[".inlineEditFields"][] = "Status";
$tdatapayslipmain[".inlineEditFields"][] = "MonthlyRate";
$tdatapayslipmain[".inlineEditFields"][] = "BasicDailyRate";
$tdatapayslipmain[".inlineEditFields"][] = "Division";
$tdatapayslipmain[".inlineEditFields"][] = "VL";
$tdatapayslipmain[".inlineEditFields"][] = "SL";
$tdatapayslipmain[".inlineEditFields"][] = "EL";
$tdatapayslipmain[".inlineEditFields"][] = "PL";
$tdatapayslipmain[".inlineEditFields"][] = "RegularPayT";
$tdatapayslipmain[".inlineEditFields"][] = "RegularPay";
$tdatapayslipmain[".inlineEditFields"][] = "LateT";
$tdatapayslipmain[".inlineEditFields"][] = "Late";
$tdatapayslipmain[".inlineEditFields"][] = "UndertimeT";
$tdatapayslipmain[".inlineEditFields"][] = "Undertime";
$tdatapayslipmain[".inlineEditFields"][] = "LWOPT";
$tdatapayslipmain[".inlineEditFields"][] = "LWOP";
$tdatapayslipmain[".inlineEditFields"][] = "RegOTT";
$tdatapayslipmain[".inlineEditFields"][] = "RegOT";
$tdatapayslipmain[".inlineEditFields"][] = "RHOTT";
$tdatapayslipmain[".inlineEditFields"][] = "RHOT";
$tdatapayslipmain[".inlineEditFields"][] = "SHOTT";
$tdatapayslipmain[".inlineEditFields"][] = "SHOT";
$tdatapayslipmain[".inlineEditFields"][] = "DHOTT";
$tdatapayslipmain[".inlineEditFields"][] = "DHOT";
$tdatapayslipmain[".inlineEditFields"][] = "RDOTT";
$tdatapayslipmain[".inlineEditFields"][] = "RDOT";
$tdatapayslipmain[".inlineEditFields"][] = "RHRDOTT";
$tdatapayslipmain[".inlineEditFields"][] = "RHRDOT";
$tdatapayslipmain[".inlineEditFields"][] = "SHRDOTT";
$tdatapayslipmain[".inlineEditFields"][] = "SHRDOT";
$tdatapayslipmain[".inlineEditFields"][] = "DHRDOTT";
$tdatapayslipmain[".inlineEditFields"][] = "DHRDOT";
$tdatapayslipmain[".inlineEditFields"][] = "TNDOTT";
$tdatapayslipmain[".inlineEditFields"][] = "TNDOT";
$tdatapayslipmain[".inlineEditFields"][] = "RegHolT";
$tdatapayslipmain[".inlineEditFields"][] = "RegHol";
$tdatapayslipmain[".inlineEditFields"][] = "SpHolT";
$tdatapayslipmain[".inlineEditFields"][] = "SpHol";
$tdatapayslipmain[".inlineEditFields"][] = "DbHolT";
$tdatapayslipmain[".inlineEditFields"][] = "DbHol";
$tdatapayslipmain[".inlineEditFields"][] = "RestDayT";
$tdatapayslipmain[".inlineEditFields"][] = "RestDay";
$tdatapayslipmain[".inlineEditFields"][] = "RHRDT";
$tdatapayslipmain[".inlineEditFields"][] = "RHRD";
$tdatapayslipmain[".inlineEditFields"][] = "SHRDT";
$tdatapayslipmain[".inlineEditFields"][] = "SHRD";
$tdatapayslipmain[".inlineEditFields"][] = "DHRDT";
$tdatapayslipmain[".inlineEditFields"][] = "DHRD";
$tdatapayslipmain[".inlineEditFields"][] = "NDiffT";
$tdatapayslipmain[".inlineEditFields"][] = "NDiff";
$tdatapayslipmain[".inlineEditFields"][] = "VacLeaveT";
$tdatapayslipmain[".inlineEditFields"][] = "VacLeave";
$tdatapayslipmain[".inlineEditFields"][] = "SicLeaveT";
$tdatapayslipmain[".inlineEditFields"][] = "SicLeave";
$tdatapayslipmain[".inlineEditFields"][] = "EmeLeaveT";
$tdatapayslipmain[".inlineEditFields"][] = "EmeLeave";
$tdatapayslipmain[".inlineEditFields"][] = "GrossPay";
$tdatapayslipmain[".inlineEditFields"][] = "Taxable";
$tdatapayslipmain[".inlineEditFields"][] = "TaxableToDate";
$tdatapayslipmain[".inlineEditFields"][] = "TaxToDate";
$tdatapayslipmain[".inlineEditFields"][] = "ThirToDate";
$tdatapayslipmain[".inlineEditFields"][] = "TDeductions";
$tdatapayslipmain[".inlineEditFields"][] = "NetPay";
$tdatapayslipmain[".inlineEditFields"][] = "Employer";
$tdatapayslipmain[".inlineEditFields"][] = "EmployerID";
$tdatapayslipmain[".inlineEditFields"][] = "WageTypeID";
$tdatapayslipmain[".inlineEditFields"][] = "DivisionID";
$tdatapayslipmain[".inlineEditFields"][] = "PtabID";

$tdatapayslipmain[".updateSelectedFields"] = array();
$tdatapayslipmain[".updateSelectedFields"][] = "FromDate";
$tdatapayslipmain[".updateSelectedFields"][] = "ToDate";
$tdatapayslipmain[".updateSelectedFields"][] = "PayDate";
$tdatapayslipmain[".updateSelectedFields"][] = "EmployeeID";
$tdatapayslipmain[".updateSelectedFields"][] = "FullName";
$tdatapayslipmain[".updateSelectedFields"][] = "WageType";
$tdatapayslipmain[".updateSelectedFields"][] = "Status";
$tdatapayslipmain[".updateSelectedFields"][] = "MonthlyRate";
$tdatapayslipmain[".updateSelectedFields"][] = "BasicDailyRate";
$tdatapayslipmain[".updateSelectedFields"][] = "Division";
$tdatapayslipmain[".updateSelectedFields"][] = "VL";
$tdatapayslipmain[".updateSelectedFields"][] = "SL";
$tdatapayslipmain[".updateSelectedFields"][] = "EL";
$tdatapayslipmain[".updateSelectedFields"][] = "PL";
$tdatapayslipmain[".updateSelectedFields"][] = "RegularPayT";
$tdatapayslipmain[".updateSelectedFields"][] = "RegularPay";
$tdatapayslipmain[".updateSelectedFields"][] = "LateT";
$tdatapayslipmain[".updateSelectedFields"][] = "Late";
$tdatapayslipmain[".updateSelectedFields"][] = "UndertimeT";
$tdatapayslipmain[".updateSelectedFields"][] = "Undertime";
$tdatapayslipmain[".updateSelectedFields"][] = "LWOPT";
$tdatapayslipmain[".updateSelectedFields"][] = "LWOP";
$tdatapayslipmain[".updateSelectedFields"][] = "RegOTT";
$tdatapayslipmain[".updateSelectedFields"][] = "RegOT";
$tdatapayslipmain[".updateSelectedFields"][] = "RHOTT";
$tdatapayslipmain[".updateSelectedFields"][] = "RHOT";
$tdatapayslipmain[".updateSelectedFields"][] = "SHOTT";
$tdatapayslipmain[".updateSelectedFields"][] = "SHOT";
$tdatapayslipmain[".updateSelectedFields"][] = "DHOTT";
$tdatapayslipmain[".updateSelectedFields"][] = "DHOT";
$tdatapayslipmain[".updateSelectedFields"][] = "RDOTT";
$tdatapayslipmain[".updateSelectedFields"][] = "RDOT";
$tdatapayslipmain[".updateSelectedFields"][] = "RHRDOTT";
$tdatapayslipmain[".updateSelectedFields"][] = "RHRDOT";
$tdatapayslipmain[".updateSelectedFields"][] = "SHRDOTT";
$tdatapayslipmain[".updateSelectedFields"][] = "SHRDOT";
$tdatapayslipmain[".updateSelectedFields"][] = "DHRDOTT";
$tdatapayslipmain[".updateSelectedFields"][] = "DHRDOT";
$tdatapayslipmain[".updateSelectedFields"][] = "TNDOTT";
$tdatapayslipmain[".updateSelectedFields"][] = "TNDOT";
$tdatapayslipmain[".updateSelectedFields"][] = "RegHolT";
$tdatapayslipmain[".updateSelectedFields"][] = "RegHol";
$tdatapayslipmain[".updateSelectedFields"][] = "SpHolT";
$tdatapayslipmain[".updateSelectedFields"][] = "SpHol";
$tdatapayslipmain[".updateSelectedFields"][] = "DbHolT";
$tdatapayslipmain[".updateSelectedFields"][] = "DbHol";
$tdatapayslipmain[".updateSelectedFields"][] = "RestDayT";
$tdatapayslipmain[".updateSelectedFields"][] = "RestDay";
$tdatapayslipmain[".updateSelectedFields"][] = "RHRDT";
$tdatapayslipmain[".updateSelectedFields"][] = "RHRD";
$tdatapayslipmain[".updateSelectedFields"][] = "SHRDT";
$tdatapayslipmain[".updateSelectedFields"][] = "SHRD";
$tdatapayslipmain[".updateSelectedFields"][] = "DHRDT";
$tdatapayslipmain[".updateSelectedFields"][] = "DHRD";
$tdatapayslipmain[".updateSelectedFields"][] = "NDiffT";
$tdatapayslipmain[".updateSelectedFields"][] = "NDiff";
$tdatapayslipmain[".updateSelectedFields"][] = "VacLeaveT";
$tdatapayslipmain[".updateSelectedFields"][] = "VacLeave";
$tdatapayslipmain[".updateSelectedFields"][] = "SicLeaveT";
$tdatapayslipmain[".updateSelectedFields"][] = "SicLeave";
$tdatapayslipmain[".updateSelectedFields"][] = "EmeLeaveT";
$tdatapayslipmain[".updateSelectedFields"][] = "EmeLeave";
$tdatapayslipmain[".updateSelectedFields"][] = "GrossPay";
$tdatapayslipmain[".updateSelectedFields"][] = "Taxable";
$tdatapayslipmain[".updateSelectedFields"][] = "TaxableToDate";
$tdatapayslipmain[".updateSelectedFields"][] = "TaxToDate";
$tdatapayslipmain[".updateSelectedFields"][] = "ThirToDate";
$tdatapayslipmain[".updateSelectedFields"][] = "TDeductions";
$tdatapayslipmain[".updateSelectedFields"][] = "NetPay";
$tdatapayslipmain[".updateSelectedFields"][] = "Employer";
$tdatapayslipmain[".updateSelectedFields"][] = "EmployerID";
$tdatapayslipmain[".updateSelectedFields"][] = "WageTypeID";
$tdatapayslipmain[".updateSelectedFields"][] = "DivisionID";
$tdatapayslipmain[".updateSelectedFields"][] = "PtabID";


$tdatapayslipmain[".exportFields"] = array();
$tdatapayslipmain[".exportFields"][] = "PFID";
$tdatapayslipmain[".exportFields"][] = "FromDate";
$tdatapayslipmain[".exportFields"][] = "ToDate";
$tdatapayslipmain[".exportFields"][] = "PayDate";
$tdatapayslipmain[".exportFields"][] = "EmployeeID";
$tdatapayslipmain[".exportFields"][] = "FullName";
$tdatapayslipmain[".exportFields"][] = "WageType";
$tdatapayslipmain[".exportFields"][] = "Status";
$tdatapayslipmain[".exportFields"][] = "MonthlyRate";
$tdatapayslipmain[".exportFields"][] = "BasicDailyRate";
$tdatapayslipmain[".exportFields"][] = "Division";
$tdatapayslipmain[".exportFields"][] = "VL";
$tdatapayslipmain[".exportFields"][] = "SL";
$tdatapayslipmain[".exportFields"][] = "EL";
$tdatapayslipmain[".exportFields"][] = "PL";
$tdatapayslipmain[".exportFields"][] = "RegularPayT";
$tdatapayslipmain[".exportFields"][] = "RegularPay";
$tdatapayslipmain[".exportFields"][] = "LateT";
$tdatapayslipmain[".exportFields"][] = "Late";
$tdatapayslipmain[".exportFields"][] = "UndertimeT";
$tdatapayslipmain[".exportFields"][] = "Undertime";
$tdatapayslipmain[".exportFields"][] = "LWOPT";
$tdatapayslipmain[".exportFields"][] = "LWOP";
$tdatapayslipmain[".exportFields"][] = "RegOTT";
$tdatapayslipmain[".exportFields"][] = "RegOT";
$tdatapayslipmain[".exportFields"][] = "RHOTT";
$tdatapayslipmain[".exportFields"][] = "RHOT";
$tdatapayslipmain[".exportFields"][] = "SHOTT";
$tdatapayslipmain[".exportFields"][] = "SHOT";
$tdatapayslipmain[".exportFields"][] = "DHOTT";
$tdatapayslipmain[".exportFields"][] = "DHOT";
$tdatapayslipmain[".exportFields"][] = "RDOTT";
$tdatapayslipmain[".exportFields"][] = "RDOT";
$tdatapayslipmain[".exportFields"][] = "RHRDOTT";
$tdatapayslipmain[".exportFields"][] = "RHRDOT";
$tdatapayslipmain[".exportFields"][] = "SHRDOTT";
$tdatapayslipmain[".exportFields"][] = "SHRDOT";
$tdatapayslipmain[".exportFields"][] = "DHRDOTT";
$tdatapayslipmain[".exportFields"][] = "DHRDOT";
$tdatapayslipmain[".exportFields"][] = "TNDOTT";
$tdatapayslipmain[".exportFields"][] = "TNDOT";
$tdatapayslipmain[".exportFields"][] = "RegHolT";
$tdatapayslipmain[".exportFields"][] = "RegHol";
$tdatapayslipmain[".exportFields"][] = "SpHolT";
$tdatapayslipmain[".exportFields"][] = "SpHol";
$tdatapayslipmain[".exportFields"][] = "DbHolT";
$tdatapayslipmain[".exportFields"][] = "DbHol";
$tdatapayslipmain[".exportFields"][] = "RestDayT";
$tdatapayslipmain[".exportFields"][] = "RestDay";
$tdatapayslipmain[".exportFields"][] = "RHRDT";
$tdatapayslipmain[".exportFields"][] = "RHRD";
$tdatapayslipmain[".exportFields"][] = "SHRDT";
$tdatapayslipmain[".exportFields"][] = "SHRD";
$tdatapayslipmain[".exportFields"][] = "DHRDT";
$tdatapayslipmain[".exportFields"][] = "DHRD";
$tdatapayslipmain[".exportFields"][] = "NDiffT";
$tdatapayslipmain[".exportFields"][] = "NDiff";
$tdatapayslipmain[".exportFields"][] = "VacLeaveT";
$tdatapayslipmain[".exportFields"][] = "VacLeave";
$tdatapayslipmain[".exportFields"][] = "SicLeaveT";
$tdatapayslipmain[".exportFields"][] = "SicLeave";
$tdatapayslipmain[".exportFields"][] = "EmeLeaveT";
$tdatapayslipmain[".exportFields"][] = "EmeLeave";
$tdatapayslipmain[".exportFields"][] = "GrossPay";
$tdatapayslipmain[".exportFields"][] = "Taxable";
$tdatapayslipmain[".exportFields"][] = "TaxableToDate";
$tdatapayslipmain[".exportFields"][] = "TaxToDate";
$tdatapayslipmain[".exportFields"][] = "ThirToDate";
$tdatapayslipmain[".exportFields"][] = "TDeductions";
$tdatapayslipmain[".exportFields"][] = "NetPay";
$tdatapayslipmain[".exportFields"][] = "Employer";
$tdatapayslipmain[".exportFields"][] = "EmployerID";
$tdatapayslipmain[".exportFields"][] = "WageTypeID";
$tdatapayslipmain[".exportFields"][] = "DivisionID";
$tdatapayslipmain[".exportFields"][] = "PtabID";

$tdatapayslipmain[".importFields"] = array();
$tdatapayslipmain[".importFields"][] = "PFID";
$tdatapayslipmain[".importFields"][] = "FromDate";
$tdatapayslipmain[".importFields"][] = "ToDate";
$tdatapayslipmain[".importFields"][] = "PayDate";
$tdatapayslipmain[".importFields"][] = "EmployeeID";
$tdatapayslipmain[".importFields"][] = "FullName";
$tdatapayslipmain[".importFields"][] = "WageType";
$tdatapayslipmain[".importFields"][] = "Status";
$tdatapayslipmain[".importFields"][] = "MonthlyRate";
$tdatapayslipmain[".importFields"][] = "BasicDailyRate";
$tdatapayslipmain[".importFields"][] = "Division";
$tdatapayslipmain[".importFields"][] = "VL";
$tdatapayslipmain[".importFields"][] = "SL";
$tdatapayslipmain[".importFields"][] = "EL";
$tdatapayslipmain[".importFields"][] = "PL";
$tdatapayslipmain[".importFields"][] = "RegularPayT";
$tdatapayslipmain[".importFields"][] = "RegularPay";
$tdatapayslipmain[".importFields"][] = "LateT";
$tdatapayslipmain[".importFields"][] = "Late";
$tdatapayslipmain[".importFields"][] = "UndertimeT";
$tdatapayslipmain[".importFields"][] = "Undertime";
$tdatapayslipmain[".importFields"][] = "LWOPT";
$tdatapayslipmain[".importFields"][] = "LWOP";
$tdatapayslipmain[".importFields"][] = "RegOTT";
$tdatapayslipmain[".importFields"][] = "RegOT";
$tdatapayslipmain[".importFields"][] = "RHOTT";
$tdatapayslipmain[".importFields"][] = "RHOT";
$tdatapayslipmain[".importFields"][] = "SHOTT";
$tdatapayslipmain[".importFields"][] = "SHOT";
$tdatapayslipmain[".importFields"][] = "DHOTT";
$tdatapayslipmain[".importFields"][] = "DHOT";
$tdatapayslipmain[".importFields"][] = "RDOTT";
$tdatapayslipmain[".importFields"][] = "RDOT";
$tdatapayslipmain[".importFields"][] = "RHRDOTT";
$tdatapayslipmain[".importFields"][] = "RHRDOT";
$tdatapayslipmain[".importFields"][] = "SHRDOTT";
$tdatapayslipmain[".importFields"][] = "SHRDOT";
$tdatapayslipmain[".importFields"][] = "DHRDOTT";
$tdatapayslipmain[".importFields"][] = "DHRDOT";
$tdatapayslipmain[".importFields"][] = "TNDOTT";
$tdatapayslipmain[".importFields"][] = "TNDOT";
$tdatapayslipmain[".importFields"][] = "RegHolT";
$tdatapayslipmain[".importFields"][] = "RegHol";
$tdatapayslipmain[".importFields"][] = "SpHolT";
$tdatapayslipmain[".importFields"][] = "SpHol";
$tdatapayslipmain[".importFields"][] = "DbHolT";
$tdatapayslipmain[".importFields"][] = "DbHol";
$tdatapayslipmain[".importFields"][] = "RestDayT";
$tdatapayslipmain[".importFields"][] = "RestDay";
$tdatapayslipmain[".importFields"][] = "RHRDT";
$tdatapayslipmain[".importFields"][] = "RHRD";
$tdatapayslipmain[".importFields"][] = "SHRDT";
$tdatapayslipmain[".importFields"][] = "SHRD";
$tdatapayslipmain[".importFields"][] = "DHRDT";
$tdatapayslipmain[".importFields"][] = "DHRD";
$tdatapayslipmain[".importFields"][] = "NDiffT";
$tdatapayslipmain[".importFields"][] = "NDiff";
$tdatapayslipmain[".importFields"][] = "VacLeaveT";
$tdatapayslipmain[".importFields"][] = "VacLeave";
$tdatapayslipmain[".importFields"][] = "SicLeaveT";
$tdatapayslipmain[".importFields"][] = "SicLeave";
$tdatapayslipmain[".importFields"][] = "EmeLeaveT";
$tdatapayslipmain[".importFields"][] = "EmeLeave";
$tdatapayslipmain[".importFields"][] = "GrossPay";
$tdatapayslipmain[".importFields"][] = "Taxable";
$tdatapayslipmain[".importFields"][] = "TaxableToDate";
$tdatapayslipmain[".importFields"][] = "TaxToDate";
$tdatapayslipmain[".importFields"][] = "ThirToDate";
$tdatapayslipmain[".importFields"][] = "TDeductions";
$tdatapayslipmain[".importFields"][] = "NetPay";
$tdatapayslipmain[".importFields"][] = "Employer";
$tdatapayslipmain[".importFields"][] = "EmployerID";
$tdatapayslipmain[".importFields"][] = "WageTypeID";
$tdatapayslipmain[".importFields"][] = "DivisionID";
$tdatapayslipmain[".importFields"][] = "PtabID";

$tdatapayslipmain[".printFields"] = array();
$tdatapayslipmain[".printFields"][] = "PFID";
$tdatapayslipmain[".printFields"][] = "FromDate";
$tdatapayslipmain[".printFields"][] = "ToDate";
$tdatapayslipmain[".printFields"][] = "PayDate";
$tdatapayslipmain[".printFields"][] = "EmployeeID";
$tdatapayslipmain[".printFields"][] = "FullName";
$tdatapayslipmain[".printFields"][] = "WageType";
$tdatapayslipmain[".printFields"][] = "Status";
$tdatapayslipmain[".printFields"][] = "MonthlyRate";
$tdatapayslipmain[".printFields"][] = "BasicDailyRate";
$tdatapayslipmain[".printFields"][] = "Division";
$tdatapayslipmain[".printFields"][] = "VL";
$tdatapayslipmain[".printFields"][] = "SL";
$tdatapayslipmain[".printFields"][] = "EL";
$tdatapayslipmain[".printFields"][] = "PL";
$tdatapayslipmain[".printFields"][] = "RegularPayT";
$tdatapayslipmain[".printFields"][] = "RegularPay";
$tdatapayslipmain[".printFields"][] = "LateT";
$tdatapayslipmain[".printFields"][] = "Late";
$tdatapayslipmain[".printFields"][] = "UndertimeT";
$tdatapayslipmain[".printFields"][] = "Undertime";
$tdatapayslipmain[".printFields"][] = "LWOPT";
$tdatapayslipmain[".printFields"][] = "LWOP";
$tdatapayslipmain[".printFields"][] = "RegOTT";
$tdatapayslipmain[".printFields"][] = "RegOT";
$tdatapayslipmain[".printFields"][] = "RHOTT";
$tdatapayslipmain[".printFields"][] = "RHOT";
$tdatapayslipmain[".printFields"][] = "SHOTT";
$tdatapayslipmain[".printFields"][] = "SHOT";
$tdatapayslipmain[".printFields"][] = "DHOTT";
$tdatapayslipmain[".printFields"][] = "DHOT";
$tdatapayslipmain[".printFields"][] = "RDOTT";
$tdatapayslipmain[".printFields"][] = "RDOT";
$tdatapayslipmain[".printFields"][] = "RHRDOTT";
$tdatapayslipmain[".printFields"][] = "RHRDOT";
$tdatapayslipmain[".printFields"][] = "SHRDOTT";
$tdatapayslipmain[".printFields"][] = "SHRDOT";
$tdatapayslipmain[".printFields"][] = "DHRDOTT";
$tdatapayslipmain[".printFields"][] = "DHRDOT";
$tdatapayslipmain[".printFields"][] = "TNDOTT";
$tdatapayslipmain[".printFields"][] = "TNDOT";
$tdatapayslipmain[".printFields"][] = "RegHolT";
$tdatapayslipmain[".printFields"][] = "RegHol";
$tdatapayslipmain[".printFields"][] = "SpHolT";
$tdatapayslipmain[".printFields"][] = "SpHol";
$tdatapayslipmain[".printFields"][] = "DbHolT";
$tdatapayslipmain[".printFields"][] = "DbHol";
$tdatapayslipmain[".printFields"][] = "RestDayT";
$tdatapayslipmain[".printFields"][] = "RestDay";
$tdatapayslipmain[".printFields"][] = "RHRDT";
$tdatapayslipmain[".printFields"][] = "RHRD";
$tdatapayslipmain[".printFields"][] = "SHRDT";
$tdatapayslipmain[".printFields"][] = "SHRD";
$tdatapayslipmain[".printFields"][] = "DHRDT";
$tdatapayslipmain[".printFields"][] = "DHRD";
$tdatapayslipmain[".printFields"][] = "NDiffT";
$tdatapayslipmain[".printFields"][] = "NDiff";
$tdatapayslipmain[".printFields"][] = "VacLeaveT";
$tdatapayslipmain[".printFields"][] = "VacLeave";
$tdatapayslipmain[".printFields"][] = "SicLeaveT";
$tdatapayslipmain[".printFields"][] = "SicLeave";
$tdatapayslipmain[".printFields"][] = "EmeLeaveT";
$tdatapayslipmain[".printFields"][] = "EmeLeave";
$tdatapayslipmain[".printFields"][] = "GrossPay";
$tdatapayslipmain[".printFields"][] = "Taxable";
$tdatapayslipmain[".printFields"][] = "TaxableToDate";
$tdatapayslipmain[".printFields"][] = "TaxToDate";
$tdatapayslipmain[".printFields"][] = "ThirToDate";
$tdatapayslipmain[".printFields"][] = "TDeductions";
$tdatapayslipmain[".printFields"][] = "NetPay";
$tdatapayslipmain[".printFields"][] = "Employer";
$tdatapayslipmain[".printFields"][] = "EmployerID";
$tdatapayslipmain[".printFields"][] = "WageTypeID";
$tdatapayslipmain[".printFields"][] = "DivisionID";
$tdatapayslipmain[".printFields"][] = "PtabID";


//	PFID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PFID";
	$fdata["GoodName"] = "PFID";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","PFID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PFID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PFID";

	
	
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




	$tdatapayslipmain["PFID"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","FromDate");
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




	$tdatapayslipmain["FromDate"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","ToDate");
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




	$tdatapayslipmain["ToDate"] = $fdata;
//	PayDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PayDate";
	$fdata["GoodName"] = "PayDate";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","PayDate");
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




	$tdatapayslipmain["PayDate"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","EmployeeID");
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["EmployeeID"] = $fdata;
//	FullName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "FullName";
	$fdata["GoodName"] = "FullName";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","FullName");
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

		$fdata["strField"] = "FullName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FullName";

	
	
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
			$edata["EditParams"].= " maxlength=180";

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




	$tdatapayslipmain["FullName"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","WageType");
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




	$tdatapayslipmain["WageType"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","Status");
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




	$tdatapayslipmain["Status"] = $fdata;
//	MonthlyRate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "MonthlyRate";
	$fdata["GoodName"] = "MonthlyRate";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","MonthlyRate");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "MonthlyRate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MonthlyRate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["MonthlyRate"] = $fdata;
//	BasicDailyRate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "BasicDailyRate";
	$fdata["GoodName"] = "BasicDailyRate";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","BasicDailyRate");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "BasicDailyRate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BasicDailyRate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["BasicDailyRate"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","Division");
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




	$tdatapayslipmain["Division"] = $fdata;
//	VL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "VL";
	$fdata["GoodName"] = "VL";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","VL");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayslipmain["VL"] = $fdata;
//	SL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "SL";
	$fdata["GoodName"] = "SL";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","SL");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayslipmain["SL"] = $fdata;
//	EL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "EL";
	$fdata["GoodName"] = "EL";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","EL");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayslipmain["EL"] = $fdata;
//	PL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "PL";
	$fdata["GoodName"] = "PL";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","PL");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayslipmain["PL"] = $fdata;
//	RegularPayT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "RegularPayT";
	$fdata["GoodName"] = "RegularPayT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","RegularPayT");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "RegularPayT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegularPayT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["RegularPayT"] = $fdata;
//	RegularPay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "RegularPay";
	$fdata["GoodName"] = "RegularPay";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","RegularPay");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "RegularPay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegularPay";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayslipmain["RegularPay"] = $fdata;
//	LateT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "LateT";
	$fdata["GoodName"] = "LateT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","LateT");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "LateT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LateT";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayslipmain["LateT"] = $fdata;
//	Late
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Late";
	$fdata["GoodName"] = "Late";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","Late");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "Late";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Late";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayslipmain["Late"] = $fdata;
//	UndertimeT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "UndertimeT";
	$fdata["GoodName"] = "UndertimeT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","UndertimeT");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "UndertimeT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UndertimeT";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayslipmain["UndertimeT"] = $fdata;
//	Undertime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Undertime";
	$fdata["GoodName"] = "Undertime";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","Undertime");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "Undertime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Undertime";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayslipmain["Undertime"] = $fdata;
//	LWOPT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "LWOPT";
	$fdata["GoodName"] = "LWOPT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","LWOPT");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "LWOPT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LWOPT";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayslipmain["LWOPT"] = $fdata;
//	LWOP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "LWOP";
	$fdata["GoodName"] = "LWOP";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","LWOP");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "LWOP";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LWOP";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayslipmain["LWOP"] = $fdata;
//	RegOTT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "RegOTT";
	$fdata["GoodName"] = "RegOTT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","RegOTT");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "RegOTT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegOTT";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayslipmain["RegOTT"] = $fdata;
//	RegOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "RegOT";
	$fdata["GoodName"] = "RegOT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","RegOT");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayslipmain["RegOT"] = $fdata;
//	RHOTT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "RHOTT";
	$fdata["GoodName"] = "RHOTT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","RHOTT");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "RHOTT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHOTT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["RHOTT"] = $fdata;
//	RHOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "RHOT";
	$fdata["GoodName"] = "RHOT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","RHOT");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayslipmain["RHOT"] = $fdata;
//	SHOTT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "SHOTT";
	$fdata["GoodName"] = "SHOTT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","SHOTT");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "SHOTT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHOTT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["SHOTT"] = $fdata;
//	SHOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "SHOT";
	$fdata["GoodName"] = "SHOT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","SHOT");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayslipmain["SHOT"] = $fdata;
//	DHOTT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "DHOTT";
	$fdata["GoodName"] = "DHOTT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","DHOTT");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "DHOTT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHOTT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["DHOTT"] = $fdata;
//	DHOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "DHOT";
	$fdata["GoodName"] = "DHOT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","DHOT");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayslipmain["DHOT"] = $fdata;
//	RDOTT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "RDOTT";
	$fdata["GoodName"] = "RDOTT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","RDOTT");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "RDOTT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RDOTT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["RDOTT"] = $fdata;
//	RDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "RDOT";
	$fdata["GoodName"] = "RDOT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","RDOT");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayslipmain["RDOT"] = $fdata;
//	RHRDOTT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "RHRDOTT";
	$fdata["GoodName"] = "RHRDOTT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","RHRDOTT");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "RHRDOTT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHRDOTT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["RHRDOTT"] = $fdata;
//	RHRDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "RHRDOT";
	$fdata["GoodName"] = "RHRDOT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","RHRDOT");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayslipmain["RHRDOT"] = $fdata;
//	SHRDOTT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "SHRDOTT";
	$fdata["GoodName"] = "SHRDOTT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","SHRDOTT");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "SHRDOTT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHRDOTT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["SHRDOTT"] = $fdata;
//	SHRDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "SHRDOT";
	$fdata["GoodName"] = "SHRDOT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","SHRDOT");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayslipmain["SHRDOT"] = $fdata;
//	DHRDOTT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "DHRDOTT";
	$fdata["GoodName"] = "DHRDOTT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","DHRDOTT");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "DHRDOTT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHRDOTT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["DHRDOTT"] = $fdata;
//	DHRDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "DHRDOT";
	$fdata["GoodName"] = "DHRDOT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","DHRDOT");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayslipmain["DHRDOT"] = $fdata;
//	TNDOTT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "TNDOTT";
	$fdata["GoodName"] = "TNDOTT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","TNDOTT");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "TNDOTT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TNDOTT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["TNDOTT"] = $fdata;
//	TNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "TNDOT";
	$fdata["GoodName"] = "TNDOT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","TNDOT");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayslipmain["TNDOT"] = $fdata;
//	RegHolT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "RegHolT";
	$fdata["GoodName"] = "RegHolT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","RegHolT");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "RegHolT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegHolT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["RegHolT"] = $fdata;
//	RegHol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "RegHol";
	$fdata["GoodName"] = "RegHol";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","RegHol");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "RegHol";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegHol";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["RegHol"] = $fdata;
//	SpHolT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "SpHolT";
	$fdata["GoodName"] = "SpHolT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","SpHolT");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "SpHolT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SpHolT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["SpHolT"] = $fdata;
//	SpHol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "SpHol";
	$fdata["GoodName"] = "SpHol";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","SpHol");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "SpHol";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SpHol";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["SpHol"] = $fdata;
//	DbHolT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "DbHolT";
	$fdata["GoodName"] = "DbHolT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","DbHolT");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "DbHolT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DbHolT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["DbHolT"] = $fdata;
//	DbHol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "DbHol";
	$fdata["GoodName"] = "DbHol";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","DbHol");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "DbHol";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DbHol";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["DbHol"] = $fdata;
//	RestDayT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "RestDayT";
	$fdata["GoodName"] = "RestDayT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","RestDayT");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "RestDayT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RestDayT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["RestDayT"] = $fdata;
//	RestDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "RestDay";
	$fdata["GoodName"] = "RestDay";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","RestDay");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "RestDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RestDay";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["RestDay"] = $fdata;
//	RHRDT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "RHRDT";
	$fdata["GoodName"] = "RHRDT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","RHRDT");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "RHRDT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHRDT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["RHRDT"] = $fdata;
//	RHRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "RHRD";
	$fdata["GoodName"] = "RHRD";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","RHRD");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayslipmain["RHRD"] = $fdata;
//	SHRDT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "SHRDT";
	$fdata["GoodName"] = "SHRDT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","SHRDT");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "SHRDT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHRDT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["SHRDT"] = $fdata;
//	SHRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "SHRD";
	$fdata["GoodName"] = "SHRD";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","SHRD");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayslipmain["SHRD"] = $fdata;
//	DHRDT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "DHRDT";
	$fdata["GoodName"] = "DHRDT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","DHRDT");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "DHRDT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHRDT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["DHRDT"] = $fdata;
//	DHRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "DHRD";
	$fdata["GoodName"] = "DHRD";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","DHRD");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayslipmain["DHRD"] = $fdata;
//	NDiffT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "NDiffT";
	$fdata["GoodName"] = "NDiffT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","NDiffT");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "NDiffT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NDiffT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["NDiffT"] = $fdata;
//	NDiff
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "NDiff";
	$fdata["GoodName"] = "NDiff";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","NDiff");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "NDiff";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NDiff";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["NDiff"] = $fdata;
//	VacLeaveT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "VacLeaveT";
	$fdata["GoodName"] = "VacLeaveT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","VacLeaveT");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "VacLeaveT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VacLeaveT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["VacLeaveT"] = $fdata;
//	VacLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "VacLeave";
	$fdata["GoodName"] = "VacLeave";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","VacLeave");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "VacLeave";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VacLeave";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["VacLeave"] = $fdata;
//	SicLeaveT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "SicLeaveT";
	$fdata["GoodName"] = "SicLeaveT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","SicLeaveT");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "SicLeaveT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SicLeaveT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["SicLeaveT"] = $fdata;
//	SicLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "SicLeave";
	$fdata["GoodName"] = "SicLeave";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","SicLeave");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "SicLeave";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SicLeave";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["SicLeave"] = $fdata;
//	EmeLeaveT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "EmeLeaveT";
	$fdata["GoodName"] = "EmeLeaveT";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","EmeLeaveT");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "EmeLeaveT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmeLeaveT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["EmeLeaveT"] = $fdata;
//	EmeLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "EmeLeave";
	$fdata["GoodName"] = "EmeLeave";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","EmeLeave");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "EmeLeave";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmeLeave";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




	$tdatapayslipmain["EmeLeave"] = $fdata;
//	GrossPay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "GrossPay";
	$fdata["GoodName"] = "GrossPay";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","GrossPay");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayslipmain["GrossPay"] = $fdata;
//	Taxable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "Taxable";
	$fdata["GoodName"] = "Taxable";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","Taxable");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayslipmain["Taxable"] = $fdata;
//	TaxableToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "TaxableToDate";
	$fdata["GoodName"] = "TaxableToDate";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","TaxableToDate");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayslipmain["TaxableToDate"] = $fdata;
//	TaxToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "TaxToDate";
	$fdata["GoodName"] = "TaxToDate";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","TaxToDate");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayslipmain["TaxToDate"] = $fdata;
//	ThirToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "ThirToDate";
	$fdata["GoodName"] = "ThirToDate";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","ThirToDate");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayslipmain["ThirToDate"] = $fdata;
//	TDeductions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "TDeductions";
	$fdata["GoodName"] = "TDeductions";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","TDeductions");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayslipmain["TDeductions"] = $fdata;
//	NetPay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "NetPay";
	$fdata["GoodName"] = "NetPay";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","NetPay");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdatapayslipmain["NetPay"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","Employer");
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




	$tdatapayslipmain["Employer"] = $fdata;
//	EmployerID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "EmployerID";
	$fdata["GoodName"] = "EmployerID";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","EmployerID");
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

		$fdata["strField"] = "EmployerID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmployerID";

	
	
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




	$tdatapayslipmain["EmployerID"] = $fdata;
//	WageTypeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "WageTypeID";
	$fdata["GoodName"] = "WageTypeID";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","WageTypeID");
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

		$fdata["strField"] = "WageTypeID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WageTypeID";

	
	
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




	$tdatapayslipmain["WageTypeID"] = $fdata;
//	DivisionID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "DivisionID";
	$fdata["GoodName"] = "DivisionID";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","DivisionID");
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

		$fdata["strField"] = "DivisionID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DivisionID";

	
	
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




	$tdatapayslipmain["DivisionID"] = $fdata;
//	PtabID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "PtabID";
	$fdata["GoodName"] = "PtabID";
	$fdata["ownerTable"] = "payslipmain";
	$fdata["Label"] = GetFieldLabel("payslipmain","PtabID");
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




	$tdatapayslipmain["PtabID"] = $fdata;


$tables_data["payslipmain"]=&$tdatapayslipmain;
$field_labels["payslipmain"] = &$fieldLabelspayslipmain;
$fieldToolTips["payslipmain"] = &$fieldToolTipspayslipmain;
$placeHolders["payslipmain"] = &$placeHolderspayslipmain;
$page_titles["payslipmain"] = &$pageTitlespayslipmain;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["payslipmain"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["payslipmain"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_payslipmain()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PFID,  	FromDate,  	ToDate,  	PayDate,  	EmployeeID,  	FullName,  	WageType,  	Status,  	MonthlyRate,  	BasicDailyRate,  	Division,  	VL,  	SL,  	EL,  	PL,  	RegularPayT,  	RegularPay,  	LateT,  	Late,  	UndertimeT,  	Undertime,  	LWOPT,  	LWOP,  	RegOTT,  	RegOT,  	RHOTT,  	RHOT,  	SHOTT,  	SHOT,  	DHOTT,  	DHOT,  	RDOTT,  	RDOT,  	RHRDOTT,  	RHRDOT,  	SHRDOTT,  	SHRDOT,  	DHRDOTT,  	DHRDOT,  	TNDOTT,  	TNDOT,  	RegHolT,  	RegHol,  	SpHolT,  	SpHol,  	DbHolT,  	DbHol,  	RestDayT,  	RestDay,  	RHRDT,  	RHRD,  	SHRDT,  	SHRD,  	DHRDT,  	DHRD,  	NDiffT,  	NDiff,  	VacLeaveT,  	VacLeave,  	SicLeaveT,  	SicLeave,  	EmeLeaveT,  	EmeLeave,  	GrossPay,  	Taxable,  	TaxableToDate,  	TaxToDate,  	ThirToDate,  	TDeductions,  	NetPay,  	Employer,  	EmployerID,  	WageTypeID,  	DivisionID,  	PtabID";
$proto0["m_strFrom"] = "FROM payslipmain";
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
	"m_strName" => "PFID",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto6["m_sql"] = "PFID";
$proto6["m_srcTableName"] = "payslipmain";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto8["m_sql"] = "FromDate";
$proto8["m_srcTableName"] = "payslipmain";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto10["m_sql"] = "ToDate";
$proto10["m_srcTableName"] = "payslipmain";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PayDate",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto12["m_sql"] = "PayDate";
$proto12["m_srcTableName"] = "payslipmain";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto14["m_sql"] = "EmployeeID";
$proto14["m_srcTableName"] = "payslipmain";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "FullName",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto16["m_sql"] = "FullName";
$proto16["m_srcTableName"] = "payslipmain";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "WageType",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto18["m_sql"] = "WageType";
$proto18["m_srcTableName"] = "payslipmain";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto20["m_sql"] = "Status";
$proto20["m_srcTableName"] = "payslipmain";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "MonthlyRate",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto22["m_sql"] = "MonthlyRate";
$proto22["m_srcTableName"] = "payslipmain";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "BasicDailyRate",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto24["m_sql"] = "BasicDailyRate";
$proto24["m_srcTableName"] = "payslipmain";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto26["m_sql"] = "Division";
$proto26["m_srcTableName"] = "payslipmain";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "VL",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto28["m_sql"] = "VL";
$proto28["m_srcTableName"] = "payslipmain";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "SL",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto30["m_sql"] = "SL";
$proto30["m_srcTableName"] = "payslipmain";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "EL",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto32["m_sql"] = "EL";
$proto32["m_srcTableName"] = "payslipmain";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "PL",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto34["m_sql"] = "PL";
$proto34["m_srcTableName"] = "payslipmain";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "RegularPayT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto36["m_sql"] = "RegularPayT";
$proto36["m_srcTableName"] = "payslipmain";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "RegularPay",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto38["m_sql"] = "RegularPay";
$proto38["m_srcTableName"] = "payslipmain";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "LateT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto40["m_sql"] = "LateT";
$proto40["m_srcTableName"] = "payslipmain";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Late",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto42["m_sql"] = "Late";
$proto42["m_srcTableName"] = "payslipmain";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "UndertimeT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto44["m_sql"] = "UndertimeT";
$proto44["m_srcTableName"] = "payslipmain";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Undertime",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto46["m_sql"] = "Undertime";
$proto46["m_srcTableName"] = "payslipmain";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "LWOPT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto48["m_sql"] = "LWOPT";
$proto48["m_srcTableName"] = "payslipmain";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "LWOP",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto50["m_sql"] = "LWOP";
$proto50["m_srcTableName"] = "payslipmain";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "RegOTT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto52["m_sql"] = "RegOTT";
$proto52["m_srcTableName"] = "payslipmain";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "RegOT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto54["m_sql"] = "RegOT";
$proto54["m_srcTableName"] = "payslipmain";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "RHOTT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto56["m_sql"] = "RHOTT";
$proto56["m_srcTableName"] = "payslipmain";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "RHOT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto58["m_sql"] = "RHOT";
$proto58["m_srcTableName"] = "payslipmain";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOTT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto60["m_sql"] = "SHOTT";
$proto60["m_srcTableName"] = "payslipmain";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto62["m_sql"] = "SHOT";
$proto62["m_srcTableName"] = "payslipmain";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "DHOTT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto64["m_sql"] = "DHOTT";
$proto64["m_srcTableName"] = "payslipmain";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "DHOT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto66["m_sql"] = "DHOT";
$proto66["m_srcTableName"] = "payslipmain";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "RDOTT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto68["m_sql"] = "RDOTT";
$proto68["m_srcTableName"] = "payslipmain";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "RDOT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto70["m_sql"] = "RDOT";
$proto70["m_srcTableName"] = "payslipmain";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDOTT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto72["m_sql"] = "RHRDOTT";
$proto72["m_srcTableName"] = "payslipmain";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDOT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto74["m_sql"] = "RHRDOT";
$proto74["m_srcTableName"] = "payslipmain";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDOTT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto76["m_sql"] = "SHRDOTT";
$proto76["m_srcTableName"] = "payslipmain";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDOT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto78["m_sql"] = "SHRDOT";
$proto78["m_srcTableName"] = "payslipmain";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDOTT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto80["m_sql"] = "DHRDOTT";
$proto80["m_srcTableName"] = "payslipmain";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDOT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto82["m_sql"] = "DHRDOT";
$proto82["m_srcTableName"] = "payslipmain";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "TNDOTT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto84["m_sql"] = "TNDOTT";
$proto84["m_srcTableName"] = "payslipmain";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "TNDOT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto86["m_sql"] = "TNDOT";
$proto86["m_srcTableName"] = "payslipmain";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "RegHolT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto88["m_sql"] = "RegHolT";
$proto88["m_srcTableName"] = "payslipmain";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "RegHol",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto90["m_sql"] = "RegHol";
$proto90["m_srcTableName"] = "payslipmain";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "SpHolT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto92["m_sql"] = "SpHolT";
$proto92["m_srcTableName"] = "payslipmain";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "SpHol",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto94["m_sql"] = "SpHol";
$proto94["m_srcTableName"] = "payslipmain";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "DbHolT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto96["m_sql"] = "DbHolT";
$proto96["m_srcTableName"] = "payslipmain";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "DbHol",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto98["m_sql"] = "DbHol";
$proto98["m_srcTableName"] = "payslipmain";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "RestDayT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto100["m_sql"] = "RestDayT";
$proto100["m_srcTableName"] = "payslipmain";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "RestDay",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto102["m_sql"] = "RestDay";
$proto102["m_srcTableName"] = "payslipmain";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto104["m_sql"] = "RHRDT";
$proto104["m_srcTableName"] = "payslipmain";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRD",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto106["m_sql"] = "RHRD";
$proto106["m_srcTableName"] = "payslipmain";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto108["m_sql"] = "SHRDT";
$proto108["m_srcTableName"] = "payslipmain";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRD",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto110["m_sql"] = "SHRD";
$proto110["m_srcTableName"] = "payslipmain";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto112["m_sql"] = "DHRDT";
$proto112["m_srcTableName"] = "payslipmain";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRD",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto114["m_sql"] = "DHRD";
$proto114["m_srcTableName"] = "payslipmain";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "NDiffT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto116["m_sql"] = "NDiffT";
$proto116["m_srcTableName"] = "payslipmain";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "NDiff",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto118["m_sql"] = "NDiff";
$proto118["m_srcTableName"] = "payslipmain";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "VacLeaveT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto120["m_sql"] = "VacLeaveT";
$proto120["m_srcTableName"] = "payslipmain";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "VacLeave",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto122["m_sql"] = "VacLeave";
$proto122["m_srcTableName"] = "payslipmain";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "SicLeaveT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto124["m_sql"] = "SicLeaveT";
$proto124["m_srcTableName"] = "payslipmain";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "SicLeave",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto126["m_sql"] = "SicLeave";
$proto126["m_srcTableName"] = "payslipmain";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "EmeLeaveT",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto128["m_sql"] = "EmeLeaveT";
$proto128["m_srcTableName"] = "payslipmain";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "EmeLeave",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto130["m_sql"] = "EmeLeave";
$proto130["m_srcTableName"] = "payslipmain";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "GrossPay",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto132["m_sql"] = "GrossPay";
$proto132["m_srcTableName"] = "payslipmain";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "Taxable",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto134["m_sql"] = "Taxable";
$proto134["m_srcTableName"] = "payslipmain";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "TaxableToDate",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto136["m_sql"] = "TaxableToDate";
$proto136["m_srcTableName"] = "payslipmain";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "TaxToDate",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto138["m_sql"] = "TaxToDate";
$proto138["m_srcTableName"] = "payslipmain";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "ThirToDate",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto140["m_sql"] = "ThirToDate";
$proto140["m_srcTableName"] = "payslipmain";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "TDeductions",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto142["m_sql"] = "TDeductions";
$proto142["m_srcTableName"] = "payslipmain";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "NetPay",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto144["m_sql"] = "NetPay";
$proto144["m_srcTableName"] = "payslipmain";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto146["m_sql"] = "Employer";
$proto146["m_srcTableName"] = "payslipmain";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployerID",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto148["m_sql"] = "EmployerID";
$proto148["m_srcTableName"] = "payslipmain";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "WageTypeID",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto150["m_sql"] = "WageTypeID";
$proto150["m_srcTableName"] = "payslipmain";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "DivisionID",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto152["m_sql"] = "DivisionID";
$proto152["m_srcTableName"] = "payslipmain";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "PtabID",
	"m_strTable" => "payslipmain",
	"m_srcTableName" => "payslipmain"
));

$proto154["m_sql"] = "PtabID";
$proto154["m_srcTableName"] = "payslipmain";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto156=array();
$proto156["m_link"] = "SQLL_MAIN";
			$proto157=array();
$proto157["m_strName"] = "payslipmain";
$proto157["m_srcTableName"] = "payslipmain";
$proto157["m_columns"] = array();
$proto157["m_columns"][] = "PFID";
$proto157["m_columns"][] = "FromDate";
$proto157["m_columns"][] = "ToDate";
$proto157["m_columns"][] = "PayDate";
$proto157["m_columns"][] = "EmployeeID";
$proto157["m_columns"][] = "FullName";
$proto157["m_columns"][] = "WageType";
$proto157["m_columns"][] = "Status";
$proto157["m_columns"][] = "MonthlyRate";
$proto157["m_columns"][] = "BasicDailyRate";
$proto157["m_columns"][] = "Division";
$proto157["m_columns"][] = "VL";
$proto157["m_columns"][] = "SL";
$proto157["m_columns"][] = "EL";
$proto157["m_columns"][] = "PL";
$proto157["m_columns"][] = "RegularPayT";
$proto157["m_columns"][] = "RegularPay";
$proto157["m_columns"][] = "LateT";
$proto157["m_columns"][] = "Late";
$proto157["m_columns"][] = "UndertimeT";
$proto157["m_columns"][] = "Undertime";
$proto157["m_columns"][] = "LWOPT";
$proto157["m_columns"][] = "LWOP";
$proto157["m_columns"][] = "RegOTT";
$proto157["m_columns"][] = "RegOT";
$proto157["m_columns"][] = "RHOTT";
$proto157["m_columns"][] = "RHOT";
$proto157["m_columns"][] = "SHOTT";
$proto157["m_columns"][] = "SHOT";
$proto157["m_columns"][] = "DHOTT";
$proto157["m_columns"][] = "DHOT";
$proto157["m_columns"][] = "RDOTT";
$proto157["m_columns"][] = "RDOT";
$proto157["m_columns"][] = "RHRDOTT";
$proto157["m_columns"][] = "RHRDOT";
$proto157["m_columns"][] = "SHRDOTT";
$proto157["m_columns"][] = "SHRDOT";
$proto157["m_columns"][] = "DHRDOTT";
$proto157["m_columns"][] = "DHRDOT";
$proto157["m_columns"][] = "TNDOTT";
$proto157["m_columns"][] = "TNDOT";
$proto157["m_columns"][] = "RegHolT";
$proto157["m_columns"][] = "RegHol";
$proto157["m_columns"][] = "SpHolT";
$proto157["m_columns"][] = "SpHol";
$proto157["m_columns"][] = "DbHolT";
$proto157["m_columns"][] = "DbHol";
$proto157["m_columns"][] = "RestDayT";
$proto157["m_columns"][] = "RestDay";
$proto157["m_columns"][] = "RHRDT";
$proto157["m_columns"][] = "RHRD";
$proto157["m_columns"][] = "SHRDT";
$proto157["m_columns"][] = "SHRD";
$proto157["m_columns"][] = "DHRDT";
$proto157["m_columns"][] = "DHRD";
$proto157["m_columns"][] = "NDiffT";
$proto157["m_columns"][] = "NDiff";
$proto157["m_columns"][] = "VacLeaveT";
$proto157["m_columns"][] = "VacLeave";
$proto157["m_columns"][] = "SicLeaveT";
$proto157["m_columns"][] = "SicLeave";
$proto157["m_columns"][] = "EmeLeaveT";
$proto157["m_columns"][] = "EmeLeave";
$proto157["m_columns"][] = "GrossPay";
$proto157["m_columns"][] = "Taxable";
$proto157["m_columns"][] = "TaxableToDate";
$proto157["m_columns"][] = "TaxToDate";
$proto157["m_columns"][] = "ThirToDate";
$proto157["m_columns"][] = "TDeductions";
$proto157["m_columns"][] = "NetPay";
$proto157["m_columns"][] = "Employer";
$proto157["m_columns"][] = "EmployerID";
$proto157["m_columns"][] = "WageTypeID";
$proto157["m_columns"][] = "DivisionID";
$proto157["m_columns"][] = "PtabID";
$obj = new SQLTable($proto157);

$proto156["m_table"] = $obj;
$proto156["m_sql"] = "payslipmain";
$proto156["m_alias"] = "";
$proto156["m_srcTableName"] = "payslipmain";
$proto158=array();
$proto158["m_sql"] = "";
$proto158["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto158["m_column"]=$obj;
$proto158["m_contained"] = array();
$proto158["m_strCase"] = "";
$proto158["m_havingmode"] = false;
$proto158["m_inBrackets"] = false;
$proto158["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto158);

$proto156["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto156);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="payslipmain";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_payslipmain = createSqlQuery_payslipmain();


	
		;

																																																																											

$tdatapayslipmain[".sqlquery"] = $queryData_payslipmain;

$tableEvents["payslipmain"] = new eventsBase;
$tdatapayslipmain[".hasEvents"] = false;

?>