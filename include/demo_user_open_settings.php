<?php
require_once(getabspath("classes/cipherer.php"));




$tdatademo_user_open = array();
	$tdatademo_user_open[".truncateText"] = true;
	$tdatademo_user_open[".NumberOfChars"] = 80;
	$tdatademo_user_open[".ShortName"] = "demo_user_open";
	$tdatademo_user_open[".OwnerID"] = "";
	$tdatademo_user_open[".OriginalTable"] = "demo_user";

//	field labels
$fieldLabelsdemo_user_open = array();
$fieldToolTipsdemo_user_open = array();
$pageTitlesdemo_user_open = array();
$placeHoldersdemo_user_open = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdemo_user_open["English"] = array();
	$fieldToolTipsdemo_user_open["English"] = array();
	$placeHoldersdemo_user_open["English"] = array();
	$pageTitlesdemo_user_open["English"] = array();
	$fieldLabelsdemo_user_open["English"]["user_id"] = "User Id";
	$fieldToolTipsdemo_user_open["English"]["user_id"] = "";
	$placeHoldersdemo_user_open["English"]["user_id"] = "";
	$fieldLabelsdemo_user_open["English"]["user_name"] = "Employee";
	$fieldToolTipsdemo_user_open["English"]["user_name"] = "";
	$placeHoldersdemo_user_open["English"]["user_name"] = "";
	$fieldLabelsdemo_user_open["English"]["Photo"] = "Photo";
	$fieldToolTipsdemo_user_open["English"]["Photo"] = "";
	$placeHoldersdemo_user_open["English"]["Photo"] = "";
	$fieldLabelsdemo_user_open["English"]["EmployeeType"] = "Wage Type";
	$fieldToolTipsdemo_user_open["English"]["EmployeeType"] = "";
	$placeHoldersdemo_user_open["English"]["EmployeeType"] = "";
	$fieldLabelsdemo_user_open["English"]["SSSNo"] = "SSS No";
	$fieldToolTipsdemo_user_open["English"]["SSSNo"] = "";
	$placeHoldersdemo_user_open["English"]["SSSNo"] = "";
	$fieldLabelsdemo_user_open["English"]["TIN"] = "TIN";
	$fieldToolTipsdemo_user_open["English"]["TIN"] = "";
	$placeHoldersdemo_user_open["English"]["TIN"] = "";
	$fieldLabelsdemo_user_open["English"]["Mobile"] = "Mobile";
	$fieldToolTipsdemo_user_open["English"]["Mobile"] = "";
	$placeHoldersdemo_user_open["English"]["Mobile"] = "";
	$fieldLabelsdemo_user_open["English"]["Address"] = "Address";
	$fieldToolTipsdemo_user_open["English"]["Address"] = "";
	$placeHoldersdemo_user_open["English"]["Address"] = "";
	$fieldLabelsdemo_user_open["English"]["Email"] = "Email";
	$fieldToolTipsdemo_user_open["English"]["Email"] = "";
	$placeHoldersdemo_user_open["English"]["Email"] = "";
	$fieldLabelsdemo_user_open["English"]["EmployeeID"] = "Biometric ID";
	$fieldToolTipsdemo_user_open["English"]["EmployeeID"] = "";
	$placeHoldersdemo_user_open["English"]["EmployeeID"] = "";
	$fieldLabelsdemo_user_open["English"]["Division"] = "Division";
	$fieldToolTipsdemo_user_open["English"]["Division"] = "";
	$placeHoldersdemo_user_open["English"]["Division"] = "";
	$fieldLabelsdemo_user_open["English"]["Status"] = "Status";
	$fieldToolTipsdemo_user_open["English"]["Status"] = "";
	$placeHoldersdemo_user_open["English"]["Status"] = "";
	$fieldLabelsdemo_user_open["English"]["Department"] = "Department";
	$fieldToolTipsdemo_user_open["English"]["Department"] = "";
	$placeHoldersdemo_user_open["English"]["Department"] = "";
	$fieldLabelsdemo_user_open["English"]["AllowableSickLeave"] = "SL";
	$fieldToolTipsdemo_user_open["English"]["AllowableSickLeave"] = "";
	$placeHoldersdemo_user_open["English"]["AllowableSickLeave"] = "";
	$fieldLabelsdemo_user_open["English"]["AllowableVacationLeave"] = "VL";
	$fieldToolTipsdemo_user_open["English"]["AllowableVacationLeave"] = "";
	$placeHoldersdemo_user_open["English"]["AllowableVacationLeave"] = "";
	$fieldLabelsdemo_user_open["English"]["AllowableEmergencyLeave"] = "EL";
	$fieldToolTipsdemo_user_open["English"]["AllowableEmergencyLeave"] = "";
	$placeHoldersdemo_user_open["English"]["AllowableEmergencyLeave"] = "";
	$fieldLabelsdemo_user_open["English"]["SSSEE"] = "SSS EE";
	$fieldToolTipsdemo_user_open["English"]["SSSEE"] = "";
	$placeHoldersdemo_user_open["English"]["SSSEE"] = "";
	$fieldLabelsdemo_user_open["English"]["SSSER"] = "SSS ER";
	$fieldToolTipsdemo_user_open["English"]["SSSER"] = "";
	$placeHoldersdemo_user_open["English"]["SSSER"] = "";
	$fieldLabelsdemo_user_open["English"]["PhilHealthEE"] = "PHIC EE";
	$fieldToolTipsdemo_user_open["English"]["PhilHealthEE"] = "";
	$placeHoldersdemo_user_open["English"]["PhilHealthEE"] = "";
	$fieldLabelsdemo_user_open["English"]["PhilHealthER"] = "PHIC ER";
	$fieldToolTipsdemo_user_open["English"]["PhilHealthER"] = "";
	$placeHoldersdemo_user_open["English"]["PhilHealthER"] = "";
	$fieldLabelsdemo_user_open["English"]["AllowablePaternityLeave"] = "PL";
	$fieldToolTipsdemo_user_open["English"]["AllowablePaternityLeave"] = "";
	$placeHoldersdemo_user_open["English"]["AllowablePaternityLeave"] = "";
	$fieldLabelsdemo_user_open["English"]["HiredDate"] = "Hired Date";
	$fieldToolTipsdemo_user_open["English"]["HiredDate"] = "";
	$placeHoldersdemo_user_open["English"]["HiredDate"] = "";
	$fieldLabelsdemo_user_open["English"]["ExitDate"] = "Exit Date";
	$fieldToolTipsdemo_user_open["English"]["ExitDate"] = "";
	$placeHoldersdemo_user_open["English"]["ExitDate"] = "";
	$fieldLabelsdemo_user_open["English"]["Inactive"] = "Inactive";
	$fieldToolTipsdemo_user_open["English"]["Inactive"] = "";
	$placeHoldersdemo_user_open["English"]["Inactive"] = "";
	$fieldLabelsdemo_user_open["English"]["PagIbigEE"] = "HDMF EE";
	$fieldToolTipsdemo_user_open["English"]["PagIbigEE"] = "";
	$placeHoldersdemo_user_open["English"]["PagIbigEE"] = "";
	$fieldLabelsdemo_user_open["English"]["PagIbigER"] = "HDMF ER";
	$fieldToolTipsdemo_user_open["English"]["PagIbigER"] = "";
	$placeHoldersdemo_user_open["English"]["PagIbigER"] = "";
	$fieldLabelsdemo_user_open["English"]["PagIbigNo"] = "HDMF No";
	$fieldToolTipsdemo_user_open["English"]["PagIbigNo"] = "";
	$placeHoldersdemo_user_open["English"]["PagIbigNo"] = "";
	$fieldLabelsdemo_user_open["English"]["PhilHealthNo"] = "PHIC No";
	$fieldToolTipsdemo_user_open["English"]["PhilHealthNo"] = "";
	$placeHoldersdemo_user_open["English"]["PhilHealthNo"] = "";
	$fieldLabelsdemo_user_open["English"]["SSSEC"] = "SSS EC";
	$fieldToolTipsdemo_user_open["English"]["SSSEC"] = "";
	$placeHoldersdemo_user_open["English"]["SSSEC"] = "";
	$fieldLabelsdemo_user_open["English"]["Level"] = "Level";
	$fieldToolTipsdemo_user_open["English"]["Level"] = "";
	$placeHoldersdemo_user_open["English"]["Level"] = "";
	$fieldLabelsdemo_user_open["English"]["DateCreated"] = "Date Created";
	$fieldToolTipsdemo_user_open["English"]["DateCreated"] = "";
	$placeHoldersdemo_user_open["English"]["DateCreated"] = "";
	$fieldLabelsdemo_user_open["English"]["ApprovedDate"] = "Approved Date";
	$fieldToolTipsdemo_user_open["English"]["ApprovedDate"] = "";
	$placeHoldersdemo_user_open["English"]["ApprovedDate"] = "";
	$fieldLabelsdemo_user_open["English"]["Approved"] = "Approved";
	$fieldToolTipsdemo_user_open["English"]["Approved"] = "";
	$placeHoldersdemo_user_open["English"]["Approved"] = "";
	$fieldLabelsdemo_user_open["English"]["Approvedby"] = "Approvedby";
	$fieldToolTipsdemo_user_open["English"]["Approvedby"] = "";
	$placeHoldersdemo_user_open["English"]["Approvedby"] = "";
	$fieldLabelsdemo_user_open["English"]["Preparedby"] = "Preparedby";
	$fieldToolTipsdemo_user_open["English"]["Preparedby"] = "";
	$placeHoldersdemo_user_open["English"]["Preparedby"] = "";
	$fieldLabelsdemo_user_open["English"]["Checkedby"] = "Checkedby";
	$fieldToolTipsdemo_user_open["English"]["Checkedby"] = "";
	$placeHoldersdemo_user_open["English"]["Checkedby"] = "";
	$fieldLabelsdemo_user_open["English"]["CheckedDate"] = "Checked Date";
	$fieldToolTipsdemo_user_open["English"]["CheckedDate"] = "";
	$placeHoldersdemo_user_open["English"]["CheckedDate"] = "";
	$fieldLabelsdemo_user_open["English"]["Checked"] = "Checked";
	$fieldToolTipsdemo_user_open["English"]["Checked"] = "";
	$placeHoldersdemo_user_open["English"]["Checked"] = "";
	$fieldLabelsdemo_user_open["English"]["Superior"] = "Supervisor";
	$fieldToolTipsdemo_user_open["English"]["Superior"] = "";
	$placeHoldersdemo_user_open["English"]["Superior"] = "";
	$fieldLabelsdemo_user_open["English"]["Position"] = "Position";
	$fieldToolTipsdemo_user_open["English"]["Position"] = "";
	$placeHoldersdemo_user_open["English"]["Position"] = "";
	$fieldLabelsdemo_user_open["English"]["Employer"] = "Employer";
	$fieldToolTipsdemo_user_open["English"]["Employer"] = "";
	$placeHoldersdemo_user_open["English"]["Employer"] = "";
	$fieldLabelsdemo_user_open["English"]["IDNo"] = "Employee ID";
	$fieldToolTipsdemo_user_open["English"]["IDNo"] = "";
	$placeHoldersdemo_user_open["English"]["IDNo"] = "";
	$fieldLabelsdemo_user_open["English"]["AccountNo"] = "Account No";
	$fieldToolTipsdemo_user_open["English"]["AccountNo"] = "";
	$placeHoldersdemo_user_open["English"]["AccountNo"] = "";
	$fieldLabelsdemo_user_open["English"]["LateFixPenalty"] = "Late Fix Penalty";
	$fieldToolTipsdemo_user_open["English"]["LateFixPenalty"] = "";
	$placeHoldersdemo_user_open["English"]["LateFixPenalty"] = "";
	$fieldLabelsdemo_user_open["English"]["DoNotUpdateContributions"] = "Do Not Update Contributions";
	$fieldToolTipsdemo_user_open["English"]["DoNotUpdateContributions"] = "";
	$placeHoldersdemo_user_open["English"]["DoNotUpdateContributions"] = "";
	$fieldLabelsdemo_user_open["English"]["ExcludeContributionOnPayroll"] = "Exclude Contribution On Payroll";
	$fieldToolTipsdemo_user_open["English"]["ExcludeContributionOnPayroll"] = "";
	$placeHoldersdemo_user_open["English"]["ExcludeContributionOnPayroll"] = "";
	$fieldLabelsdemo_user_open["English"]["Birthday"] = "Birthday";
	$fieldToolTipsdemo_user_open["English"]["Birthday"] = "";
	$placeHoldersdemo_user_open["English"]["Birthday"] = "";
	$fieldLabelsdemo_user_open["English"]["Bank"] = "Bank";
	$fieldToolTipsdemo_user_open["English"]["Bank"] = "";
	$placeHoldersdemo_user_open["English"]["Bank"] = "";
	$fieldLabelsdemo_user_open["English"]["NoLateDeduction"] = "No Late Deduction";
	$fieldToolTipsdemo_user_open["English"]["NoLateDeduction"] = "";
	$placeHoldersdemo_user_open["English"]["NoLateDeduction"] = "";
	$fieldLabelsdemo_user_open["English"]["IncludeBreakLate"] = "Include Break Late";
	$fieldToolTipsdemo_user_open["English"]["IncludeBreakLate"] = "";
	$placeHoldersdemo_user_open["English"]["IncludeBreakLate"] = "";
	$fieldLabelsdemo_user_open["English"]["GracePeriodMins"] = "Grace Period Mins";
	$fieldToolTipsdemo_user_open["English"]["GracePeriodMins"] = "";
	$placeHoldersdemo_user_open["English"]["GracePeriodMins"] = "";
	$fieldLabelsdemo_user_open["English"]["WithAdditionalBreaks"] = "With Additional Breaks";
	$fieldToolTipsdemo_user_open["English"]["WithAdditionalBreaks"] = "";
	$placeHoldersdemo_user_open["English"]["WithAdditionalBreaks"] = "";
	$fieldLabelsdemo_user_open["English"]["TaxPeriods"] = "Tax Periods";
	$fieldToolTipsdemo_user_open["English"]["TaxPeriods"] = "";
	$placeHoldersdemo_user_open["English"]["TaxPeriods"] = "";
	$fieldLabelsdemo_user_open["English"]["PresetMoNonTax"] = "Preset Monthly Add'l Taxable";
	$fieldToolTipsdemo_user_open["English"]["PresetMoNonTax"] = "";
	$placeHoldersdemo_user_open["English"]["PresetMoNonTax"] = "";
	$fieldLabelsdemo_user_open["English"]["PreCalMoTaxable"] = "Pre-Calculated Monthly Taxable";
	$fieldToolTipsdemo_user_open["English"]["PreCalMoTaxable"] = "";
	$placeHoldersdemo_user_open["English"]["PreCalMoTaxable"] = "";
	$fieldLabelsdemo_user_open["English"]["CalMonthly"] = "Calculated Monthly Income";
	$fieldToolTipsdemo_user_open["English"]["CalMonthly"] = "";
	$placeHoldersdemo_user_open["English"]["CalMonthly"] = "";
	$fieldLabelsdemo_user_open["English"]["TaxPerPeriod"] = "Tax Per Period";
	$fieldToolTipsdemo_user_open["English"]["TaxPerPeriod"] = "";
	$placeHoldersdemo_user_open["English"]["TaxPerPeriod"] = "";
	$fieldLabelsdemo_user_open["English"]["Superior2"] = "Manager";
	$fieldToolTipsdemo_user_open["English"]["Superior2"] = "";
	$placeHoldersdemo_user_open["English"]["Superior2"] = "";
	$fieldLabelsdemo_user_open["English"]["BasicMonthlyPay"] = "Basic Monthly Pay";
	$fieldToolTipsdemo_user_open["English"]["BasicMonthlyPay"] = "";
	$placeHoldersdemo_user_open["English"]["BasicMonthlyPay"] = "";
	$fieldLabelsdemo_user_open["English"]["BasicDailyPay"] = "Basic Daily Pay";
	$fieldToolTipsdemo_user_open["English"]["BasicDailyPay"] = "";
	$placeHoldersdemo_user_open["English"]["BasicDailyPay"] = "";
	$fieldLabelsdemo_user_open["English"]["DeMinimis"] = "De Minimis";
	$fieldToolTipsdemo_user_open["English"]["DeMinimis"] = "";
	$placeHoldersdemo_user_open["English"]["DeMinimis"] = "";
	$fieldLabelsdemo_user_open["English"]["ExcludeBio"] = "Exclude Bio";
	$fieldToolTipsdemo_user_open["English"]["ExcludeBio"] = "";
	$placeHoldersdemo_user_open["English"]["ExcludeBio"] = "";
	if (count($fieldToolTipsdemo_user_open["English"]))
		$tdatademo_user_open[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdemo_user_open[""] = array();
	$fieldToolTipsdemo_user_open[""] = array();
	$placeHoldersdemo_user_open[""] = array();
	$pageTitlesdemo_user_open[""] = array();
	$fieldLabelsdemo_user_open[""]["TaxPeriods"] = "Tax Periods";
	$fieldToolTipsdemo_user_open[""]["TaxPeriods"] = "";
	$placeHoldersdemo_user_open[""]["TaxPeriods"] = "";
	$fieldLabelsdemo_user_open[""]["PresetMoNonTax"] = "Preset Mo Non Tax";
	$fieldToolTipsdemo_user_open[""]["PresetMoNonTax"] = "";
	$placeHoldersdemo_user_open[""]["PresetMoNonTax"] = "";
	$fieldLabelsdemo_user_open[""]["PreCalMoTaxable"] = "Pre Cal Mo Taxable";
	$fieldToolTipsdemo_user_open[""]["PreCalMoTaxable"] = "";
	$placeHoldersdemo_user_open[""]["PreCalMoTaxable"] = "";
	$fieldLabelsdemo_user_open[""]["CalMonthly"] = "Cal Monthly";
	$fieldToolTipsdemo_user_open[""]["CalMonthly"] = "";
	$placeHoldersdemo_user_open[""]["CalMonthly"] = "";
	$fieldLabelsdemo_user_open[""]["TaxPerPeriod"] = "Tax Per Period";
	$fieldToolTipsdemo_user_open[""]["TaxPerPeriod"] = "";
	$placeHoldersdemo_user_open[""]["TaxPerPeriod"] = "";
	$fieldLabelsdemo_user_open[""]["Superior2"] = "Superior2";
	$fieldToolTipsdemo_user_open[""]["Superior2"] = "";
	$placeHoldersdemo_user_open[""]["Superior2"] = "";
	$fieldLabelsdemo_user_open[""]["BasicMonthlyPay"] = "Basic Monthly Pay";
	$fieldToolTipsdemo_user_open[""]["BasicMonthlyPay"] = "";
	$placeHoldersdemo_user_open[""]["BasicMonthlyPay"] = "";
	$fieldLabelsdemo_user_open[""]["BasicDailyPay"] = "Basic Daily Pay";
	$fieldToolTipsdemo_user_open[""]["BasicDailyPay"] = "";
	$placeHoldersdemo_user_open[""]["BasicDailyPay"] = "";
	$fieldLabelsdemo_user_open[""]["DeMinimis"] = "De Minimis";
	$fieldToolTipsdemo_user_open[""]["DeMinimis"] = "";
	$placeHoldersdemo_user_open[""]["DeMinimis"] = "";
	$fieldLabelsdemo_user_open[""]["ExcludeBio"] = "Exclude Bio";
	$fieldToolTipsdemo_user_open[""]["ExcludeBio"] = "";
	$placeHoldersdemo_user_open[""]["ExcludeBio"] = "";
	if (count($fieldToolTipsdemo_user_open[""]))
		$tdatademo_user_open[".isUseToolTips"] = true;
}


	$tdatademo_user_open[".NCSearch"] = true;



$tdatademo_user_open[".shortTableName"] = "demo_user_open";
$tdatademo_user_open[".nSecOptions"] = 0;
$tdatademo_user_open[".recsPerRowPrint"] = 1;
$tdatademo_user_open[".mainTableOwnerID"] = "";
$tdatademo_user_open[".moveNext"] = 1;
$tdatademo_user_open[".entityType"] = 1;

$tdatademo_user_open[".strOriginalTableName"] = "demo_user";

	



$tdatademo_user_open[".showAddInPopup"] = false;

$tdatademo_user_open[".showEditInPopup"] = false;

$tdatademo_user_open[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatademo_user_open[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatademo_user_open[".fieldsForRegister"] = array();

$tdatademo_user_open[".listAjax"] = false;

	$tdatademo_user_open[".audit"] = false;

	$tdatademo_user_open[".locking"] = false;

$tdatademo_user_open[".edit"] = true;
$tdatademo_user_open[".afterEditAction"] = 1;
$tdatademo_user_open[".closePopupAfterEdit"] = 1;
$tdatademo_user_open[".afterEditActionDetTable"] = "";

$tdatademo_user_open[".add"] = true;
$tdatademo_user_open[".afterAddAction"] = 1;
$tdatademo_user_open[".closePopupAfterAdd"] = 1;
$tdatademo_user_open[".afterAddActionDetTable"] = "";

$tdatademo_user_open[".list"] = true;

$tdatademo_user_open[".inlineEdit"] = true;

$tdatademo_user_open[".updateSelected"] = true;

$tdatademo_user_open[".reorderRecordsByHeader"] = true;


$tdatademo_user_open[".exportFormatting"] = 2;
$tdatademo_user_open[".exportDelimiter"] = ",";
		
$tdatademo_user_open[".inlineAdd"] = true;
$tdatademo_user_open[".view"] = true;

$tdatademo_user_open[".import"] = true;

$tdatademo_user_open[".exportTo"] = true;

$tdatademo_user_open[".printFriendly"] = true;

$tdatademo_user_open[".delete"] = true;

$tdatademo_user_open[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatademo_user_open[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatademo_user_open[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatademo_user_open[".searchSaving"] = false;
//

$tdatademo_user_open[".showSearchPanel"] = true;
		$tdatademo_user_open[".flexibleSearch"] = true;

$tdatademo_user_open[".isUseAjaxSuggest"] = true;

$tdatademo_user_open[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																					

$tdatademo_user_open[".ajaxCodeSnippetAdded"] = false;

$tdatademo_user_open[".buttonsAdded"] = false;

$tdatademo_user_open[".addPageEvents"] = true;

// use timepicker for search panel
$tdatademo_user_open[".isUseTimeForSearch"] = false;



$tdatademo_user_open[".badgeColor"] = "E8926F";


$tdatademo_user_open[".allSearchFields"] = array();
$tdatademo_user_open[".filterFields"] = array();
$tdatademo_user_open[".requiredSearchFields"] = array();

$tdatademo_user_open[".allSearchFields"][] = "EmployeeID";
	$tdatademo_user_open[".allSearchFields"][] = "IDNo";
	$tdatademo_user_open[".allSearchFields"][] = "Photo";
	$tdatademo_user_open[".allSearchFields"][] = "user_name";
	$tdatademo_user_open[".allSearchFields"][] = "Employer";
	$tdatademo_user_open[".allSearchFields"][] = "Division";
	$tdatademo_user_open[".allSearchFields"][] = "Department";
	$tdatademo_user_open[".allSearchFields"][] = "HiredDate";
	$tdatademo_user_open[".allSearchFields"][] = "Inactive";
	$tdatademo_user_open[".allSearchFields"][] = "ExitDate";
	$tdatademo_user_open[".allSearchFields"][] = "Status";
	$tdatademo_user_open[".allSearchFields"][] = "Position";
	$tdatademo_user_open[".allSearchFields"][] = "Superior";
	$tdatademo_user_open[".allSearchFields"][] = "Superior2";
	$tdatademo_user_open[".allSearchFields"][] = "Mobile";
	$tdatademo_user_open[".allSearchFields"][] = "Address";
	$tdatademo_user_open[".allSearchFields"][] = "Birthday";
	$tdatademo_user_open[".allSearchFields"][] = "Email";
	$tdatademo_user_open[".allSearchFields"][] = "SSSNo";
	$tdatademo_user_open[".allSearchFields"][] = "PagIbigNo";
	$tdatademo_user_open[".allSearchFields"][] = "PhilHealthNo";
	$tdatademo_user_open[".allSearchFields"][] = "TIN";
	$tdatademo_user_open[".allSearchFields"][] = "Bank";
	$tdatademo_user_open[".allSearchFields"][] = "AccountNo";
	$tdatademo_user_open[".allSearchFields"][] = "ExcludeBio";
	$tdatademo_user_open[".allSearchFields"][] = "AllowableSickLeave";
	$tdatademo_user_open[".allSearchFields"][] = "AllowableVacationLeave";
	$tdatademo_user_open[".allSearchFields"][] = "AllowableEmergencyLeave";
	$tdatademo_user_open[".allSearchFields"][] = "AllowablePaternityLeave";
	$tdatademo_user_open[".allSearchFields"][] = "EmployeeType";
	$tdatademo_user_open[".allSearchFields"][] = "BasicDailyPay";
	$tdatademo_user_open[".allSearchFields"][] = "BasicMonthlyPay";
	$tdatademo_user_open[".allSearchFields"][] = "Level";
	$tdatademo_user_open[".allSearchFields"][] = "DeMinimis";
	$tdatademo_user_open[".allSearchFields"][] = "DoNotUpdateContributions";
	$tdatademo_user_open[".allSearchFields"][] = "ExcludeContributionOnPayroll";
	$tdatademo_user_open[".allSearchFields"][] = "SSSEE";
	$tdatademo_user_open[".allSearchFields"][] = "SSSER";
	$tdatademo_user_open[".allSearchFields"][] = "SSSEC";
	$tdatademo_user_open[".allSearchFields"][] = "PhilHealthEE";
	$tdatademo_user_open[".allSearchFields"][] = "PhilHealthER";
	$tdatademo_user_open[".allSearchFields"][] = "PagIbigEE";
	$tdatademo_user_open[".allSearchFields"][] = "PagIbigER";
	$tdatademo_user_open[".allSearchFields"][] = "NoLateDeduction";
	$tdatademo_user_open[".allSearchFields"][] = "user_id";
	$tdatademo_user_open[".allSearchFields"][] = "GracePeriodMins";
	$tdatademo_user_open[".allSearchFields"][] = "WithAdditionalBreaks";
	$tdatademo_user_open[".allSearchFields"][] = "IncludeBreakLate";
	$tdatademo_user_open[".allSearchFields"][] = "LateFixPenalty";
	$tdatademo_user_open[".allSearchFields"][] = "CalMonthly";
	$tdatademo_user_open[".allSearchFields"][] = "PresetMoNonTax";
	$tdatademo_user_open[".allSearchFields"][] = "PreCalMoTaxable";
	$tdatademo_user_open[".allSearchFields"][] = "TaxPeriods";
	$tdatademo_user_open[".allSearchFields"][] = "TaxPerPeriod";
	$tdatademo_user_open[".allSearchFields"][] = "DateCreated";
	$tdatademo_user_open[".allSearchFields"][] = "Preparedby";
	$tdatademo_user_open[".allSearchFields"][] = "Checked";
	$tdatademo_user_open[".allSearchFields"][] = "Checkedby";
	$tdatademo_user_open[".allSearchFields"][] = "CheckedDate";
	$tdatademo_user_open[".allSearchFields"][] = "Approved";
	$tdatademo_user_open[".allSearchFields"][] = "Approvedby";
	$tdatademo_user_open[".allSearchFields"][] = "ApprovedDate";
	

$tdatademo_user_open[".googleLikeFields"] = array();
$tdatademo_user_open[".googleLikeFields"][] = "user_id";
$tdatademo_user_open[".googleLikeFields"][] = "user_name";
$tdatademo_user_open[".googleLikeFields"][] = "Photo";
$tdatademo_user_open[".googleLikeFields"][] = "SSSNo";
$tdatademo_user_open[".googleLikeFields"][] = "TIN";
$tdatademo_user_open[".googleLikeFields"][] = "Mobile";
$tdatademo_user_open[".googleLikeFields"][] = "Address";
$tdatademo_user_open[".googleLikeFields"][] = "Email";
$tdatademo_user_open[".googleLikeFields"][] = "EmployeeType";
$tdatademo_user_open[".googleLikeFields"][] = "EmployeeID";
$tdatademo_user_open[".googleLikeFields"][] = "Division";
$tdatademo_user_open[".googleLikeFields"][] = "Status";
$tdatademo_user_open[".googleLikeFields"][] = "Department";
$tdatademo_user_open[".googleLikeFields"][] = "AllowableSickLeave";
$tdatademo_user_open[".googleLikeFields"][] = "AllowableVacationLeave";
$tdatademo_user_open[".googleLikeFields"][] = "AllowableEmergencyLeave";
$tdatademo_user_open[".googleLikeFields"][] = "SSSEE";
$tdatademo_user_open[".googleLikeFields"][] = "SSSER";
$tdatademo_user_open[".googleLikeFields"][] = "PhilHealthEE";
$tdatademo_user_open[".googleLikeFields"][] = "PhilHealthER";
$tdatademo_user_open[".googleLikeFields"][] = "PagIbigEE";
$tdatademo_user_open[".googleLikeFields"][] = "AllowablePaternityLeave";
$tdatademo_user_open[".googleLikeFields"][] = "HiredDate";
$tdatademo_user_open[".googleLikeFields"][] = "Inactive";
$tdatademo_user_open[".googleLikeFields"][] = "ExitDate";
$tdatademo_user_open[".googleLikeFields"][] = "PagIbigER";
$tdatademo_user_open[".googleLikeFields"][] = "PagIbigNo";
$tdatademo_user_open[".googleLikeFields"][] = "PhilHealthNo";
$tdatademo_user_open[".googleLikeFields"][] = "SSSEC";
$tdatademo_user_open[".googleLikeFields"][] = "Level";
$tdatademo_user_open[".googleLikeFields"][] = "DateCreated";
$tdatademo_user_open[".googleLikeFields"][] = "ApprovedDate";
$tdatademo_user_open[".googleLikeFields"][] = "Approved";
$tdatademo_user_open[".googleLikeFields"][] = "Approvedby";
$tdatademo_user_open[".googleLikeFields"][] = "Preparedby";
$tdatademo_user_open[".googleLikeFields"][] = "Checkedby";
$tdatademo_user_open[".googleLikeFields"][] = "CheckedDate";
$tdatademo_user_open[".googleLikeFields"][] = "Checked";
$tdatademo_user_open[".googleLikeFields"][] = "Superior";
$tdatademo_user_open[".googleLikeFields"][] = "Position";
$tdatademo_user_open[".googleLikeFields"][] = "Employer";
$tdatademo_user_open[".googleLikeFields"][] = "IDNo";
$tdatademo_user_open[".googleLikeFields"][] = "AccountNo";
$tdatademo_user_open[".googleLikeFields"][] = "LateFixPenalty";
$tdatademo_user_open[".googleLikeFields"][] = "DoNotUpdateContributions";
$tdatademo_user_open[".googleLikeFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user_open[".googleLikeFields"][] = "Birthday";
$tdatademo_user_open[".googleLikeFields"][] = "Bank";
$tdatademo_user_open[".googleLikeFields"][] = "NoLateDeduction";
$tdatademo_user_open[".googleLikeFields"][] = "IncludeBreakLate";
$tdatademo_user_open[".googleLikeFields"][] = "GracePeriodMins";
$tdatademo_user_open[".googleLikeFields"][] = "WithAdditionalBreaks";
$tdatademo_user_open[".googleLikeFields"][] = "TaxPeriods";
$tdatademo_user_open[".googleLikeFields"][] = "PresetMoNonTax";
$tdatademo_user_open[".googleLikeFields"][] = "PreCalMoTaxable";
$tdatademo_user_open[".googleLikeFields"][] = "CalMonthly";
$tdatademo_user_open[".googleLikeFields"][] = "TaxPerPeriod";
$tdatademo_user_open[".googleLikeFields"][] = "Superior2";
$tdatademo_user_open[".googleLikeFields"][] = "BasicMonthlyPay";
$tdatademo_user_open[".googleLikeFields"][] = "BasicDailyPay";
$tdatademo_user_open[".googleLikeFields"][] = "DeMinimis";
$tdatademo_user_open[".googleLikeFields"][] = "ExcludeBio";


$tdatademo_user_open[".advSearchFields"] = array();
$tdatademo_user_open[".advSearchFields"][] = "EmployeeID";
$tdatademo_user_open[".advSearchFields"][] = "IDNo";
$tdatademo_user_open[".advSearchFields"][] = "Photo";
$tdatademo_user_open[".advSearchFields"][] = "user_name";
$tdatademo_user_open[".advSearchFields"][] = "Employer";
$tdatademo_user_open[".advSearchFields"][] = "Division";
$tdatademo_user_open[".advSearchFields"][] = "Department";
$tdatademo_user_open[".advSearchFields"][] = "HiredDate";
$tdatademo_user_open[".advSearchFields"][] = "Inactive";
$tdatademo_user_open[".advSearchFields"][] = "ExitDate";
$tdatademo_user_open[".advSearchFields"][] = "Status";
$tdatademo_user_open[".advSearchFields"][] = "Position";
$tdatademo_user_open[".advSearchFields"][] = "Superior";
$tdatademo_user_open[".advSearchFields"][] = "Superior2";
$tdatademo_user_open[".advSearchFields"][] = "Mobile";
$tdatademo_user_open[".advSearchFields"][] = "Address";
$tdatademo_user_open[".advSearchFields"][] = "Birthday";
$tdatademo_user_open[".advSearchFields"][] = "Email";
$tdatademo_user_open[".advSearchFields"][] = "SSSNo";
$tdatademo_user_open[".advSearchFields"][] = "PagIbigNo";
$tdatademo_user_open[".advSearchFields"][] = "PhilHealthNo";
$tdatademo_user_open[".advSearchFields"][] = "TIN";
$tdatademo_user_open[".advSearchFields"][] = "Bank";
$tdatademo_user_open[".advSearchFields"][] = "AccountNo";
$tdatademo_user_open[".advSearchFields"][] = "ExcludeBio";
$tdatademo_user_open[".advSearchFields"][] = "AllowableSickLeave";
$tdatademo_user_open[".advSearchFields"][] = "AllowableVacationLeave";
$tdatademo_user_open[".advSearchFields"][] = "AllowableEmergencyLeave";
$tdatademo_user_open[".advSearchFields"][] = "AllowablePaternityLeave";
$tdatademo_user_open[".advSearchFields"][] = "EmployeeType";
$tdatademo_user_open[".advSearchFields"][] = "BasicDailyPay";
$tdatademo_user_open[".advSearchFields"][] = "BasicMonthlyPay";
$tdatademo_user_open[".advSearchFields"][] = "Level";
$tdatademo_user_open[".advSearchFields"][] = "DeMinimis";
$tdatademo_user_open[".advSearchFields"][] = "DoNotUpdateContributions";
$tdatademo_user_open[".advSearchFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user_open[".advSearchFields"][] = "SSSEE";
$tdatademo_user_open[".advSearchFields"][] = "SSSER";
$tdatademo_user_open[".advSearchFields"][] = "SSSEC";
$tdatademo_user_open[".advSearchFields"][] = "PhilHealthEE";
$tdatademo_user_open[".advSearchFields"][] = "PhilHealthER";
$tdatademo_user_open[".advSearchFields"][] = "PagIbigEE";
$tdatademo_user_open[".advSearchFields"][] = "PagIbigER";
$tdatademo_user_open[".advSearchFields"][] = "NoLateDeduction";
$tdatademo_user_open[".advSearchFields"][] = "user_id";
$tdatademo_user_open[".advSearchFields"][] = "GracePeriodMins";
$tdatademo_user_open[".advSearchFields"][] = "WithAdditionalBreaks";
$tdatademo_user_open[".advSearchFields"][] = "IncludeBreakLate";
$tdatademo_user_open[".advSearchFields"][] = "LateFixPenalty";
$tdatademo_user_open[".advSearchFields"][] = "CalMonthly";
$tdatademo_user_open[".advSearchFields"][] = "PresetMoNonTax";
$tdatademo_user_open[".advSearchFields"][] = "PreCalMoTaxable";
$tdatademo_user_open[".advSearchFields"][] = "TaxPeriods";
$tdatademo_user_open[".advSearchFields"][] = "TaxPerPeriod";
$tdatademo_user_open[".advSearchFields"][] = "DateCreated";
$tdatademo_user_open[".advSearchFields"][] = "Preparedby";
$tdatademo_user_open[".advSearchFields"][] = "Checked";
$tdatademo_user_open[".advSearchFields"][] = "Checkedby";
$tdatademo_user_open[".advSearchFields"][] = "CheckedDate";
$tdatademo_user_open[".advSearchFields"][] = "Approved";
$tdatademo_user_open[".advSearchFields"][] = "Approvedby";
$tdatademo_user_open[".advSearchFields"][] = "ApprovedDate";

$tdatademo_user_open[".tableType"] = "list";

$tdatademo_user_open[".printerPageOrientation"] = 0;
$tdatademo_user_open[".nPrinterPageScale"] = 100;

$tdatademo_user_open[".nPrinterSplitRecords"] = 40;

$tdatademo_user_open[".nPrinterPDFSplitRecords"] = 40;



$tdatademo_user_open[".geocodingEnabled"] = false;





$tdatademo_user_open[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatademo_user_open[".pageSize"] = 20;

$tdatademo_user_open[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY user_name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatademo_user_open[".strOrderBy"] = $tstrOrderBy;

$tdatademo_user_open[".orderindexes"] = array();
	$tdatademo_user_open[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "user_name");


$tdatademo_user_open[".sqlHead"] = "SELECT user_id,  user_name,  Photo,  SSSNo,  TIN,  Mobile,  Address,  Email,  EmployeeType,  EmployeeID,  Division,  Status,  Department,  AllowableSickLeave,  AllowableVacationLeave,  AllowableEmergencyLeave,  SSSEE,  SSSER,  PhilHealthEE,  PhilHealthER,  PagIbigEE,  AllowablePaternityLeave,  HiredDate,  Inactive,  ExitDate,  PagIbigER,  PagIbigNo,  PhilHealthNo,  SSSEC,  `Level`,  DateCreated,  ApprovedDate,  Approved,  Approvedby,  Preparedby,  Checkedby,  CheckedDate,  Checked,  Superior,  `Position`,  Employer,  IDNo,  AccountNo,  LateFixPenalty,  DoNotUpdateContributions,  ExcludeContributionOnPayroll,  Birthday,  Bank,  NoLateDeduction,  IncludeBreakLate,  GracePeriodMins,  WithAdditionalBreaks,  TaxPeriods,  PresetMoNonTax,  PreCalMoTaxable,  CalMonthly,  TaxPerPeriod,  Superior2,  BasicMonthlyPay,  BasicDailyPay,  DeMinimis,  ExcludeBio";
$tdatademo_user_open[".sqlFrom"] = "FROM demo_user";
$tdatademo_user_open[".sqlWhereExpr"] = "";
$tdatademo_user_open[".sqlTail"] = "";


//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	
	
		$tabFields[] = "EmployeeID";
	
		$tabFields[] = "IDNo";
	
		$tabFields[] = "Photo";
	
		$tabFields[] = "user_name";
	
		$tabFields[] = "Employer";
	
		$tabFields[] = "Division";
	
		$tabFields[] = "Department";
	
		$tabFields[] = "HiredDate";
	
		$tabFields[] = "Inactive";
	
		$tabFields[] = "ExitDate";
	
		$tabFields[] = "Status";
	
		$tabFields[] = "Position";
	
		$tabFields[] = "Superior";
	
		$tabFields[] = "Superior2";
	
		$tabFields[] = "Mobile";
	
		$tabFields[] = "Address";
	
		$tabFields[] = "Birthday";
	
		$tabFields[] = "Email";
	
		$tabFields[] = "SSSNo";
	
		$tabFields[] = "PagIbigNo";
	
		$tabFields[] = "PhilHealthNo";
	
		$tabFields[] = "TIN";
	
		$tabFields[] = "Bank";
	
		$tabFields[] = "AccountNo";
	
		$tabFields[] = "ExcludeBio";
$arrEditTabs[] = array('tabId'=>'Primary1',
					   'tabName'=>"Primary",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "AllowableSickLeave";
	
		$tabFields[] = "AllowableVacationLeave";
	
		$tabFields[] = "AllowableEmergencyLeave";
	
		$tabFields[] = "AllowablePaternityLeave";
$arrEditTabs[] = array('tabId'=>'Leave_Allowance1',
					   'tabName'=>"Leave Allowance",
					   'nType'=>'0',
					   'nOrder'=>27,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "EmployeeType";
	
		$tabFields[] = "BasicDailyPay";
	
		$tabFields[] = "BasicMonthlyPay";
	
		$tabFields[] = "Level";
	
		$tabFields[] = "DeMinimis";
$arrEditTabs[] = array('tabId'=>'Compensation1',
					   'tabName'=>"Compensation",
					   'nType'=>'0',
					   'nOrder'=>32,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "DoNotUpdateContributions";
	
		$tabFields[] = "ExcludeContributionOnPayroll";
	
		$tabFields[] = "SSSEE";
	
		$tabFields[] = "SSSER";
	
		$tabFields[] = "SSSEC";
	
		$tabFields[] = "PhilHealthEE";
	
		$tabFields[] = "PhilHealthER";
	
		$tabFields[] = "PagIbigEE";
	
		$tabFields[] = "PagIbigER";
$arrEditTabs[] = array('tabId'=>'Statutory1',
					   'tabName'=>"Statutory",
					   'nType'=>'0',
					   'nOrder'=>38,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "NoLateDeduction";
	
		$tabFields[] = "GracePeriodMins";
	
		$tabFields[] = "WithAdditionalBreaks";
	
		$tabFields[] = "IncludeBreakLate";
	
		$tabFields[] = "LateFixPenalty";
$arrEditTabs[] = array('tabId'=>'Late_Penalty1',
					   'tabName'=>"Late Penalty",
					   'nType'=>'0',
					   'nOrder'=>48,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "CalMonthly";
	
		$tabFields[] = "PresetMoNonTax";
	
		$tabFields[] = "PreCalMoTaxable";
	
		$tabFields[] = "TaxPeriods";
	
		$tabFields[] = "TaxPerPeriod";
$arrEditTabs[] = array('tabId'=>'Tax1',
					   'tabName'=>"Tax",
					   'nType'=>'0',
					   'nOrder'=>54,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "DateCreated";
	
		$tabFields[] = "Preparedby";
	
		$tabFields[] = "Checked";
	
		$tabFields[] = "Checkedby";
	
		$tabFields[] = "CheckedDate";
	
		$tabFields[] = "Approved";
	
		$tabFields[] = "Approvedby";
	
		$tabFields[] = "ApprovedDate";
$arrEditTabs[] = array('tabId'=>'Approval1',
					   'tabName'=>"Approval",
					   'nType'=>'0',
					   'nOrder'=>60,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatademo_user_open[".arrEditTabs"] = $arrEditTabs;


//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	
	
		$tabFields[] = "EmployeeID";
	
		$tabFields[] = "IDNo";
	
		$tabFields[] = "Photo";
	
		$tabFields[] = "user_name";
	
		$tabFields[] = "Employer";
	
		$tabFields[] = "Division";
	
		$tabFields[] = "Department";
	
		$tabFields[] = "HiredDate";
	
		$tabFields[] = "Inactive";
	
		$tabFields[] = "ExitDate";
	
		$tabFields[] = "Status";
	
		$tabFields[] = "Position";
	
		$tabFields[] = "Superior";
	
		$tabFields[] = "Superior2";
	
		$tabFields[] = "Mobile";
	
		$tabFields[] = "Address";
	
		$tabFields[] = "Birthday";
	
		$tabFields[] = "Email";
	
		$tabFields[] = "SSSNo";
	
		$tabFields[] = "PagIbigNo";
	
		$tabFields[] = "PhilHealthNo";
	
		$tabFields[] = "TIN";
	
		$tabFields[] = "Bank";
	
		$tabFields[] = "AccountNo";
	
		$tabFields[] = "ExcludeBio";
$arrAddTabs[] = array('tabId'=>'Primary1',
					  'tabName'=>"Primary",
					  'nType'=>'0',
					  'nOrder'=>1,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "AllowableSickLeave";
	
		$tabFields[] = "AllowableVacationLeave";
	
		$tabFields[] = "AllowableEmergencyLeave";
	
		$tabFields[] = "AllowablePaternityLeave";
$arrAddTabs[] = array('tabId'=>'Leave_Allowance1',
					  'tabName'=>"Leave Allowance",
					  'nType'=>'0',
					  'nOrder'=>27,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "EmployeeType";
	
		$tabFields[] = "BasicDailyPay";
	
		$tabFields[] = "BasicMonthlyPay";
	
		$tabFields[] = "Level";
	
		$tabFields[] = "DeMinimis";
$arrAddTabs[] = array('tabId'=>'Compensation1',
					  'tabName'=>"Compensation",
					  'nType'=>'0',
					  'nOrder'=>32,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "DoNotUpdateContributions";
	
		$tabFields[] = "ExcludeContributionOnPayroll";
	
		$tabFields[] = "SSSEE";
	
		$tabFields[] = "SSSER";
	
		$tabFields[] = "SSSEC";
	
		$tabFields[] = "PhilHealthEE";
	
		$tabFields[] = "PhilHealthER";
	
		$tabFields[] = "PagIbigEE";
	
		$tabFields[] = "PagIbigER";
$arrAddTabs[] = array('tabId'=>'Statutory1',
					  'tabName'=>"Statutory",
					  'nType'=>'0',
					  'nOrder'=>38,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "NoLateDeduction";
	
		$tabFields[] = "GracePeriodMins";
	
		$tabFields[] = "WithAdditionalBreaks";
	
		$tabFields[] = "IncludeBreakLate";
	
		$tabFields[] = "LateFixPenalty";
$arrAddTabs[] = array('tabId'=>'Late_Penalty1',
					  'tabName'=>"Late Penalty",
					  'nType'=>'0',
					  'nOrder'=>48,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "CalMonthly";
	
		$tabFields[] = "PresetMoNonTax";
	
		$tabFields[] = "PreCalMoTaxable";
	
		$tabFields[] = "TaxPeriods";
	
		$tabFields[] = "TaxPerPeriod";
$arrAddTabs[] = array('tabId'=>'Tax1',
					  'tabName'=>"Tax",
					  'nType'=>'0',
					  'nOrder'=>54,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "DateCreated";
	
		$tabFields[] = "Preparedby";
	
		$tabFields[] = "Checked";
	
		$tabFields[] = "Checkedby";
	
		$tabFields[] = "CheckedDate";
	
		$tabFields[] = "Approved";
	
		$tabFields[] = "Approvedby";
	
		$tabFields[] = "ApprovedDate";
$arrAddTabs[] = array('tabId'=>'Approval1',
					  'tabName'=>"Approval",
					  'nType'=>'0',
					  'nOrder'=>60,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdatademo_user_open[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	
	$tabFields[] = "EmployeeID";
	$tabFields[] = "IDNo";
	$tabFields[] = "Photo";
	$tabFields[] = "user_name";
	$tabFields[] = "Employer";
	$tabFields[] = "Division";
	$tabFields[] = "Department";
	$tabFields[] = "HiredDate";
	$tabFields[] = "Inactive";
	$tabFields[] = "ExitDate";
	$tabFields[] = "Status";
	$tabFields[] = "Position";
	$tabFields[] = "Superior";
	$tabFields[] = "Superior2";
	$tabFields[] = "Mobile";
	$tabFields[] = "Address";
	$tabFields[] = "Birthday";
	$tabFields[] = "Email";
	$tabFields[] = "SSSNo";
	$tabFields[] = "PagIbigNo";
	$tabFields[] = "PhilHealthNo";
	$tabFields[] = "TIN";
	$tabFields[] = "Bank";
	$tabFields[] = "AccountNo";
	$tabFields[] = "ExcludeBio";
$arrViewTabs[] = array('tabId'=>'Primary1',
					   'tabName'=>"Primary",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "AllowableSickLeave";
	$tabFields[] = "AllowableVacationLeave";
	$tabFields[] = "AllowableEmergencyLeave";
	$tabFields[] = "AllowablePaternityLeave";
$arrViewTabs[] = array('tabId'=>'Leave_Allowance1',
					   'tabName'=>"Leave Allowance",
					   'nType'=>'0',
					   'nOrder'=>27,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "EmployeeType";
	$tabFields[] = "BasicDailyPay";
	$tabFields[] = "BasicMonthlyPay";
	$tabFields[] = "Level";
	$tabFields[] = "DeMinimis";
$arrViewTabs[] = array('tabId'=>'Compensation1',
					   'tabName'=>"Compensation",
					   'nType'=>'0',
					   'nOrder'=>32,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "DoNotUpdateContributions";
	$tabFields[] = "ExcludeContributionOnPayroll";
	$tabFields[] = "SSSEE";
	$tabFields[] = "SSSER";
	$tabFields[] = "SSSEC";
	$tabFields[] = "PhilHealthEE";
	$tabFields[] = "PhilHealthER";
	$tabFields[] = "PagIbigEE";
	$tabFields[] = "PagIbigER";
$arrViewTabs[] = array('tabId'=>'Statutory1',
					   'tabName'=>"Statutory",
					   'nType'=>'0',
					   'nOrder'=>38,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "NoLateDeduction";
	$tabFields[] = "GracePeriodMins";
	$tabFields[] = "WithAdditionalBreaks";
	$tabFields[] = "IncludeBreakLate";
	$tabFields[] = "LateFixPenalty";
$arrViewTabs[] = array('tabId'=>'Late_Penalty1',
					   'tabName'=>"Late Penalty",
					   'nType'=>'0',
					   'nOrder'=>48,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "CalMonthly";
	$tabFields[] = "PresetMoNonTax";
	$tabFields[] = "PreCalMoTaxable";
	$tabFields[] = "TaxPeriods";
	$tabFields[] = "TaxPerPeriod";
$arrViewTabs[] = array('tabId'=>'Tax1',
					   'tabName'=>"Tax",
					   'nType'=>'0',
					   'nOrder'=>54,
					   'tabGroup'=>2,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "DateCreated";
	$tabFields[] = "Preparedby";
	$tabFields[] = "Checked";
	$tabFields[] = "Checkedby";
	$tabFields[] = "CheckedDate";
	$tabFields[] = "Approved";
	$tabFields[] = "Approvedby";
	$tabFields[] = "ApprovedDate";
$arrViewTabs[] = array('tabId'=>'Approval1',
					   'tabName'=>"Approval",
					   'nType'=>'0',
					   'nOrder'=>60,
					   'tabGroup'=>2,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatademo_user_open[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatademo_user_open[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatademo_user_open[".arrGroupsPerPage"] = $arrGPP;

$tdatademo_user_open[".highlightSearchResults"] = true;

$tableKeysdemo_user_open = array();
$tableKeysdemo_user_open[] = "user_id";
$tdatademo_user_open[".Keys"] = $tableKeysdemo_user_open;

$tdatademo_user_open[".listFields"] = array();
$tdatademo_user_open[".listFields"][] = "EmployeeID";
$tdatademo_user_open[".listFields"][] = "IDNo";
$tdatademo_user_open[".listFields"][] = "Photo";
$tdatademo_user_open[".listFields"][] = "user_name";
$tdatademo_user_open[".listFields"][] = "Employer";
$tdatademo_user_open[".listFields"][] = "Division";
$tdatademo_user_open[".listFields"][] = "Department";
$tdatademo_user_open[".listFields"][] = "HiredDate";
$tdatademo_user_open[".listFields"][] = "Inactive";
$tdatademo_user_open[".listFields"][] = "ExitDate";
$tdatademo_user_open[".listFields"][] = "Status";
$tdatademo_user_open[".listFields"][] = "Position";
$tdatademo_user_open[".listFields"][] = "Superior";
$tdatademo_user_open[".listFields"][] = "Superior2";
$tdatademo_user_open[".listFields"][] = "Mobile";
$tdatademo_user_open[".listFields"][] = "Address";
$tdatademo_user_open[".listFields"][] = "Birthday";
$tdatademo_user_open[".listFields"][] = "Email";
$tdatademo_user_open[".listFields"][] = "SSSNo";
$tdatademo_user_open[".listFields"][] = "PagIbigNo";
$tdatademo_user_open[".listFields"][] = "PhilHealthNo";
$tdatademo_user_open[".listFields"][] = "TIN";
$tdatademo_user_open[".listFields"][] = "Bank";
$tdatademo_user_open[".listFields"][] = "AccountNo";
$tdatademo_user_open[".listFields"][] = "ExcludeBio";
$tdatademo_user_open[".listFields"][] = "AllowableSickLeave";
$tdatademo_user_open[".listFields"][] = "AllowableVacationLeave";
$tdatademo_user_open[".listFields"][] = "AllowableEmergencyLeave";
$tdatademo_user_open[".listFields"][] = "AllowablePaternityLeave";
$tdatademo_user_open[".listFields"][] = "EmployeeType";
$tdatademo_user_open[".listFields"][] = "BasicDailyPay";
$tdatademo_user_open[".listFields"][] = "BasicMonthlyPay";
$tdatademo_user_open[".listFields"][] = "Level";
$tdatademo_user_open[".listFields"][] = "DeMinimis";
$tdatademo_user_open[".listFields"][] = "DoNotUpdateContributions";
$tdatademo_user_open[".listFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user_open[".listFields"][] = "SSSEE";
$tdatademo_user_open[".listFields"][] = "SSSER";
$tdatademo_user_open[".listFields"][] = "SSSEC";
$tdatademo_user_open[".listFields"][] = "PhilHealthEE";
$tdatademo_user_open[".listFields"][] = "PhilHealthER";
$tdatademo_user_open[".listFields"][] = "PagIbigEE";
$tdatademo_user_open[".listFields"][] = "PagIbigER";
$tdatademo_user_open[".listFields"][] = "NoLateDeduction";
$tdatademo_user_open[".listFields"][] = "user_id";
$tdatademo_user_open[".listFields"][] = "GracePeriodMins";
$tdatademo_user_open[".listFields"][] = "WithAdditionalBreaks";
$tdatademo_user_open[".listFields"][] = "IncludeBreakLate";
$tdatademo_user_open[".listFields"][] = "LateFixPenalty";
$tdatademo_user_open[".listFields"][] = "CalMonthly";
$tdatademo_user_open[".listFields"][] = "PresetMoNonTax";
$tdatademo_user_open[".listFields"][] = "PreCalMoTaxable";
$tdatademo_user_open[".listFields"][] = "TaxPeriods";
$tdatademo_user_open[".listFields"][] = "TaxPerPeriod";
$tdatademo_user_open[".listFields"][] = "DateCreated";
$tdatademo_user_open[".listFields"][] = "Preparedby";
$tdatademo_user_open[".listFields"][] = "Checked";
$tdatademo_user_open[".listFields"][] = "Checkedby";
$tdatademo_user_open[".listFields"][] = "CheckedDate";
$tdatademo_user_open[".listFields"][] = "Approved";
$tdatademo_user_open[".listFields"][] = "Approvedby";
$tdatademo_user_open[".listFields"][] = "ApprovedDate";

$tdatademo_user_open[".hideMobileList"] = array();


$tdatademo_user_open[".viewFields"] = array();
$tdatademo_user_open[".viewFields"][] = "EmployeeID";
$tdatademo_user_open[".viewFields"][] = "IDNo";
$tdatademo_user_open[".viewFields"][] = "Photo";
$tdatademo_user_open[".viewFields"][] = "user_name";
$tdatademo_user_open[".viewFields"][] = "Employer";
$tdatademo_user_open[".viewFields"][] = "Division";
$tdatademo_user_open[".viewFields"][] = "Department";
$tdatademo_user_open[".viewFields"][] = "HiredDate";
$tdatademo_user_open[".viewFields"][] = "Inactive";
$tdatademo_user_open[".viewFields"][] = "ExitDate";
$tdatademo_user_open[".viewFields"][] = "Status";
$tdatademo_user_open[".viewFields"][] = "Position";
$tdatademo_user_open[".viewFields"][] = "Superior";
$tdatademo_user_open[".viewFields"][] = "Superior2";
$tdatademo_user_open[".viewFields"][] = "Mobile";
$tdatademo_user_open[".viewFields"][] = "Address";
$tdatademo_user_open[".viewFields"][] = "Birthday";
$tdatademo_user_open[".viewFields"][] = "Email";
$tdatademo_user_open[".viewFields"][] = "SSSNo";
$tdatademo_user_open[".viewFields"][] = "PagIbigNo";
$tdatademo_user_open[".viewFields"][] = "PhilHealthNo";
$tdatademo_user_open[".viewFields"][] = "TIN";
$tdatademo_user_open[".viewFields"][] = "Bank";
$tdatademo_user_open[".viewFields"][] = "AccountNo";
$tdatademo_user_open[".viewFields"][] = "ExcludeBio";
$tdatademo_user_open[".viewFields"][] = "AllowableSickLeave";
$tdatademo_user_open[".viewFields"][] = "AllowableVacationLeave";
$tdatademo_user_open[".viewFields"][] = "AllowableEmergencyLeave";
$tdatademo_user_open[".viewFields"][] = "AllowablePaternityLeave";
$tdatademo_user_open[".viewFields"][] = "EmployeeType";
$tdatademo_user_open[".viewFields"][] = "BasicDailyPay";
$tdatademo_user_open[".viewFields"][] = "BasicMonthlyPay";
$tdatademo_user_open[".viewFields"][] = "Level";
$tdatademo_user_open[".viewFields"][] = "DeMinimis";
$tdatademo_user_open[".viewFields"][] = "DoNotUpdateContributions";
$tdatademo_user_open[".viewFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user_open[".viewFields"][] = "SSSEE";
$tdatademo_user_open[".viewFields"][] = "SSSER";
$tdatademo_user_open[".viewFields"][] = "SSSEC";
$tdatademo_user_open[".viewFields"][] = "PhilHealthEE";
$tdatademo_user_open[".viewFields"][] = "PhilHealthER";
$tdatademo_user_open[".viewFields"][] = "PagIbigEE";
$tdatademo_user_open[".viewFields"][] = "PagIbigER";
$tdatademo_user_open[".viewFields"][] = "NoLateDeduction";
$tdatademo_user_open[".viewFields"][] = "user_id";
$tdatademo_user_open[".viewFields"][] = "GracePeriodMins";
$tdatademo_user_open[".viewFields"][] = "WithAdditionalBreaks";
$tdatademo_user_open[".viewFields"][] = "IncludeBreakLate";
$tdatademo_user_open[".viewFields"][] = "LateFixPenalty";
$tdatademo_user_open[".viewFields"][] = "CalMonthly";
$tdatademo_user_open[".viewFields"][] = "PresetMoNonTax";
$tdatademo_user_open[".viewFields"][] = "PreCalMoTaxable";
$tdatademo_user_open[".viewFields"][] = "TaxPeriods";
$tdatademo_user_open[".viewFields"][] = "TaxPerPeriod";
$tdatademo_user_open[".viewFields"][] = "DateCreated";
$tdatademo_user_open[".viewFields"][] = "Preparedby";
$tdatademo_user_open[".viewFields"][] = "Checked";
$tdatademo_user_open[".viewFields"][] = "Checkedby";
$tdatademo_user_open[".viewFields"][] = "CheckedDate";
$tdatademo_user_open[".viewFields"][] = "Approved";
$tdatademo_user_open[".viewFields"][] = "Approvedby";
$tdatademo_user_open[".viewFields"][] = "ApprovedDate";

$tdatademo_user_open[".addFields"] = array();
$tdatademo_user_open[".addFields"][] = "EmployeeID";
$tdatademo_user_open[".addFields"][] = "IDNo";
$tdatademo_user_open[".addFields"][] = "Photo";
$tdatademo_user_open[".addFields"][] = "user_name";
$tdatademo_user_open[".addFields"][] = "Employer";
$tdatademo_user_open[".addFields"][] = "Division";
$tdatademo_user_open[".addFields"][] = "Department";
$tdatademo_user_open[".addFields"][] = "HiredDate";
$tdatademo_user_open[".addFields"][] = "Inactive";
$tdatademo_user_open[".addFields"][] = "ExitDate";
$tdatademo_user_open[".addFields"][] = "Status";
$tdatademo_user_open[".addFields"][] = "Position";
$tdatademo_user_open[".addFields"][] = "Superior";
$tdatademo_user_open[".addFields"][] = "Superior2";
$tdatademo_user_open[".addFields"][] = "Mobile";
$tdatademo_user_open[".addFields"][] = "Address";
$tdatademo_user_open[".addFields"][] = "Birthday";
$tdatademo_user_open[".addFields"][] = "Email";
$tdatademo_user_open[".addFields"][] = "SSSNo";
$tdatademo_user_open[".addFields"][] = "PagIbigNo";
$tdatademo_user_open[".addFields"][] = "PhilHealthNo";
$tdatademo_user_open[".addFields"][] = "TIN";
$tdatademo_user_open[".addFields"][] = "Bank";
$tdatademo_user_open[".addFields"][] = "AccountNo";
$tdatademo_user_open[".addFields"][] = "ExcludeBio";
$tdatademo_user_open[".addFields"][] = "AllowableSickLeave";
$tdatademo_user_open[".addFields"][] = "AllowableVacationLeave";
$tdatademo_user_open[".addFields"][] = "AllowableEmergencyLeave";
$tdatademo_user_open[".addFields"][] = "AllowablePaternityLeave";
$tdatademo_user_open[".addFields"][] = "EmployeeType";
$tdatademo_user_open[".addFields"][] = "BasicDailyPay";
$tdatademo_user_open[".addFields"][] = "BasicMonthlyPay";
$tdatademo_user_open[".addFields"][] = "Level";
$tdatademo_user_open[".addFields"][] = "DeMinimis";
$tdatademo_user_open[".addFields"][] = "DoNotUpdateContributions";
$tdatademo_user_open[".addFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user_open[".addFields"][] = "SSSEE";
$tdatademo_user_open[".addFields"][] = "SSSER";
$tdatademo_user_open[".addFields"][] = "SSSEC";
$tdatademo_user_open[".addFields"][] = "PhilHealthEE";
$tdatademo_user_open[".addFields"][] = "PhilHealthER";
$tdatademo_user_open[".addFields"][] = "PagIbigEE";
$tdatademo_user_open[".addFields"][] = "PagIbigER";
$tdatademo_user_open[".addFields"][] = "NoLateDeduction";
$tdatademo_user_open[".addFields"][] = "GracePeriodMins";
$tdatademo_user_open[".addFields"][] = "WithAdditionalBreaks";
$tdatademo_user_open[".addFields"][] = "IncludeBreakLate";
$tdatademo_user_open[".addFields"][] = "LateFixPenalty";
$tdatademo_user_open[".addFields"][] = "CalMonthly";
$tdatademo_user_open[".addFields"][] = "PresetMoNonTax";
$tdatademo_user_open[".addFields"][] = "PreCalMoTaxable";
$tdatademo_user_open[".addFields"][] = "TaxPeriods";
$tdatademo_user_open[".addFields"][] = "TaxPerPeriod";
$tdatademo_user_open[".addFields"][] = "DateCreated";
$tdatademo_user_open[".addFields"][] = "Preparedby";
$tdatademo_user_open[".addFields"][] = "Checked";
$tdatademo_user_open[".addFields"][] = "Checkedby";
$tdatademo_user_open[".addFields"][] = "CheckedDate";
$tdatademo_user_open[".addFields"][] = "Approved";
$tdatademo_user_open[".addFields"][] = "Approvedby";
$tdatademo_user_open[".addFields"][] = "ApprovedDate";

$tdatademo_user_open[".masterListFields"] = array();
$tdatademo_user_open[".masterListFields"][] = "EmployeeID";
$tdatademo_user_open[".masterListFields"][] = "IDNo";
$tdatademo_user_open[".masterListFields"][] = "Photo";
$tdatademo_user_open[".masterListFields"][] = "user_name";
$tdatademo_user_open[".masterListFields"][] = "Employer";
$tdatademo_user_open[".masterListFields"][] = "Division";
$tdatademo_user_open[".masterListFields"][] = "Department";
$tdatademo_user_open[".masterListFields"][] = "HiredDate";
$tdatademo_user_open[".masterListFields"][] = "Inactive";
$tdatademo_user_open[".masterListFields"][] = "ExitDate";
$tdatademo_user_open[".masterListFields"][] = "Status";
$tdatademo_user_open[".masterListFields"][] = "Position";
$tdatademo_user_open[".masterListFields"][] = "Superior";
$tdatademo_user_open[".masterListFields"][] = "Superior2";
$tdatademo_user_open[".masterListFields"][] = "Mobile";
$tdatademo_user_open[".masterListFields"][] = "Address";
$tdatademo_user_open[".masterListFields"][] = "Birthday";
$tdatademo_user_open[".masterListFields"][] = "Email";
$tdatademo_user_open[".masterListFields"][] = "SSSNo";
$tdatademo_user_open[".masterListFields"][] = "PagIbigNo";
$tdatademo_user_open[".masterListFields"][] = "PhilHealthNo";
$tdatademo_user_open[".masterListFields"][] = "TIN";
$tdatademo_user_open[".masterListFields"][] = "Bank";
$tdatademo_user_open[".masterListFields"][] = "AccountNo";
$tdatademo_user_open[".masterListFields"][] = "ExcludeBio";
$tdatademo_user_open[".masterListFields"][] = "AllowableSickLeave";
$tdatademo_user_open[".masterListFields"][] = "AllowableVacationLeave";
$tdatademo_user_open[".masterListFields"][] = "AllowableEmergencyLeave";
$tdatademo_user_open[".masterListFields"][] = "AllowablePaternityLeave";
$tdatademo_user_open[".masterListFields"][] = "EmployeeType";
$tdatademo_user_open[".masterListFields"][] = "BasicDailyPay";
$tdatademo_user_open[".masterListFields"][] = "BasicMonthlyPay";
$tdatademo_user_open[".masterListFields"][] = "Level";
$tdatademo_user_open[".masterListFields"][] = "DeMinimis";
$tdatademo_user_open[".masterListFields"][] = "DoNotUpdateContributions";
$tdatademo_user_open[".masterListFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user_open[".masterListFields"][] = "SSSEE";
$tdatademo_user_open[".masterListFields"][] = "SSSER";
$tdatademo_user_open[".masterListFields"][] = "SSSEC";
$tdatademo_user_open[".masterListFields"][] = "PhilHealthEE";
$tdatademo_user_open[".masterListFields"][] = "PhilHealthER";
$tdatademo_user_open[".masterListFields"][] = "PagIbigEE";
$tdatademo_user_open[".masterListFields"][] = "PagIbigER";
$tdatademo_user_open[".masterListFields"][] = "NoLateDeduction";
$tdatademo_user_open[".masterListFields"][] = "user_id";
$tdatademo_user_open[".masterListFields"][] = "GracePeriodMins";
$tdatademo_user_open[".masterListFields"][] = "WithAdditionalBreaks";
$tdatademo_user_open[".masterListFields"][] = "IncludeBreakLate";
$tdatademo_user_open[".masterListFields"][] = "LateFixPenalty";
$tdatademo_user_open[".masterListFields"][] = "CalMonthly";
$tdatademo_user_open[".masterListFields"][] = "PresetMoNonTax";
$tdatademo_user_open[".masterListFields"][] = "PreCalMoTaxable";
$tdatademo_user_open[".masterListFields"][] = "TaxPeriods";
$tdatademo_user_open[".masterListFields"][] = "TaxPerPeriod";
$tdatademo_user_open[".masterListFields"][] = "DateCreated";
$tdatademo_user_open[".masterListFields"][] = "Preparedby";
$tdatademo_user_open[".masterListFields"][] = "Checked";
$tdatademo_user_open[".masterListFields"][] = "Checkedby";
$tdatademo_user_open[".masterListFields"][] = "CheckedDate";
$tdatademo_user_open[".masterListFields"][] = "Approved";
$tdatademo_user_open[".masterListFields"][] = "Approvedby";
$tdatademo_user_open[".masterListFields"][] = "ApprovedDate";

$tdatademo_user_open[".inlineAddFields"] = array();
$tdatademo_user_open[".inlineAddFields"][] = "EmployeeID";
$tdatademo_user_open[".inlineAddFields"][] = "IDNo";
$tdatademo_user_open[".inlineAddFields"][] = "Photo";
$tdatademo_user_open[".inlineAddFields"][] = "user_name";
$tdatademo_user_open[".inlineAddFields"][] = "Employer";
$tdatademo_user_open[".inlineAddFields"][] = "Division";
$tdatademo_user_open[".inlineAddFields"][] = "Department";
$tdatademo_user_open[".inlineAddFields"][] = "HiredDate";
$tdatademo_user_open[".inlineAddFields"][] = "Inactive";
$tdatademo_user_open[".inlineAddFields"][] = "ExitDate";
$tdatademo_user_open[".inlineAddFields"][] = "Status";
$tdatademo_user_open[".inlineAddFields"][] = "Position";
$tdatademo_user_open[".inlineAddFields"][] = "Superior";
$tdatademo_user_open[".inlineAddFields"][] = "Superior2";
$tdatademo_user_open[".inlineAddFields"][] = "Mobile";
$tdatademo_user_open[".inlineAddFields"][] = "Address";
$tdatademo_user_open[".inlineAddFields"][] = "Birthday";
$tdatademo_user_open[".inlineAddFields"][] = "Email";
$tdatademo_user_open[".inlineAddFields"][] = "SSSNo";
$tdatademo_user_open[".inlineAddFields"][] = "PagIbigNo";
$tdatademo_user_open[".inlineAddFields"][] = "PhilHealthNo";
$tdatademo_user_open[".inlineAddFields"][] = "TIN";
$tdatademo_user_open[".inlineAddFields"][] = "Bank";
$tdatademo_user_open[".inlineAddFields"][] = "AccountNo";
$tdatademo_user_open[".inlineAddFields"][] = "ExcludeBio";
$tdatademo_user_open[".inlineAddFields"][] = "AllowableSickLeave";
$tdatademo_user_open[".inlineAddFields"][] = "AllowableVacationLeave";
$tdatademo_user_open[".inlineAddFields"][] = "AllowableEmergencyLeave";
$tdatademo_user_open[".inlineAddFields"][] = "AllowablePaternityLeave";
$tdatademo_user_open[".inlineAddFields"][] = "EmployeeType";
$tdatademo_user_open[".inlineAddFields"][] = "BasicDailyPay";
$tdatademo_user_open[".inlineAddFields"][] = "BasicMonthlyPay";
$tdatademo_user_open[".inlineAddFields"][] = "Level";
$tdatademo_user_open[".inlineAddFields"][] = "DeMinimis";
$tdatademo_user_open[".inlineAddFields"][] = "DoNotUpdateContributions";
$tdatademo_user_open[".inlineAddFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user_open[".inlineAddFields"][] = "SSSEE";
$tdatademo_user_open[".inlineAddFields"][] = "SSSER";
$tdatademo_user_open[".inlineAddFields"][] = "SSSEC";
$tdatademo_user_open[".inlineAddFields"][] = "PhilHealthEE";
$tdatademo_user_open[".inlineAddFields"][] = "PhilHealthER";
$tdatademo_user_open[".inlineAddFields"][] = "PagIbigEE";
$tdatademo_user_open[".inlineAddFields"][] = "PagIbigER";
$tdatademo_user_open[".inlineAddFields"][] = "NoLateDeduction";
$tdatademo_user_open[".inlineAddFields"][] = "GracePeriodMins";
$tdatademo_user_open[".inlineAddFields"][] = "WithAdditionalBreaks";
$tdatademo_user_open[".inlineAddFields"][] = "IncludeBreakLate";
$tdatademo_user_open[".inlineAddFields"][] = "LateFixPenalty";
$tdatademo_user_open[".inlineAddFields"][] = "CalMonthly";
$tdatademo_user_open[".inlineAddFields"][] = "PresetMoNonTax";
$tdatademo_user_open[".inlineAddFields"][] = "PreCalMoTaxable";
$tdatademo_user_open[".inlineAddFields"][] = "TaxPeriods";
$tdatademo_user_open[".inlineAddFields"][] = "TaxPerPeriod";
$tdatademo_user_open[".inlineAddFields"][] = "DateCreated";
$tdatademo_user_open[".inlineAddFields"][] = "Preparedby";
$tdatademo_user_open[".inlineAddFields"][] = "Checked";
$tdatademo_user_open[".inlineAddFields"][] = "Checkedby";
$tdatademo_user_open[".inlineAddFields"][] = "CheckedDate";
$tdatademo_user_open[".inlineAddFields"][] = "Approved";
$tdatademo_user_open[".inlineAddFields"][] = "Approvedby";
$tdatademo_user_open[".inlineAddFields"][] = "ApprovedDate";

$tdatademo_user_open[".editFields"] = array();
$tdatademo_user_open[".editFields"][] = "EmployeeID";
$tdatademo_user_open[".editFields"][] = "IDNo";
$tdatademo_user_open[".editFields"][] = "Photo";
$tdatademo_user_open[".editFields"][] = "user_name";
$tdatademo_user_open[".editFields"][] = "Employer";
$tdatademo_user_open[".editFields"][] = "Division";
$tdatademo_user_open[".editFields"][] = "Department";
$tdatademo_user_open[".editFields"][] = "HiredDate";
$tdatademo_user_open[".editFields"][] = "Inactive";
$tdatademo_user_open[".editFields"][] = "ExitDate";
$tdatademo_user_open[".editFields"][] = "Status";
$tdatademo_user_open[".editFields"][] = "Position";
$tdatademo_user_open[".editFields"][] = "Superior";
$tdatademo_user_open[".editFields"][] = "Superior2";
$tdatademo_user_open[".editFields"][] = "Mobile";
$tdatademo_user_open[".editFields"][] = "Address";
$tdatademo_user_open[".editFields"][] = "Birthday";
$tdatademo_user_open[".editFields"][] = "Email";
$tdatademo_user_open[".editFields"][] = "SSSNo";
$tdatademo_user_open[".editFields"][] = "PagIbigNo";
$tdatademo_user_open[".editFields"][] = "PhilHealthNo";
$tdatademo_user_open[".editFields"][] = "TIN";
$tdatademo_user_open[".editFields"][] = "Bank";
$tdatademo_user_open[".editFields"][] = "AccountNo";
$tdatademo_user_open[".editFields"][] = "ExcludeBio";
$tdatademo_user_open[".editFields"][] = "AllowableSickLeave";
$tdatademo_user_open[".editFields"][] = "AllowableVacationLeave";
$tdatademo_user_open[".editFields"][] = "AllowableEmergencyLeave";
$tdatademo_user_open[".editFields"][] = "AllowablePaternityLeave";
$tdatademo_user_open[".editFields"][] = "EmployeeType";
$tdatademo_user_open[".editFields"][] = "BasicDailyPay";
$tdatademo_user_open[".editFields"][] = "BasicMonthlyPay";
$tdatademo_user_open[".editFields"][] = "Level";
$tdatademo_user_open[".editFields"][] = "DeMinimis";
$tdatademo_user_open[".editFields"][] = "DoNotUpdateContributions";
$tdatademo_user_open[".editFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user_open[".editFields"][] = "SSSEE";
$tdatademo_user_open[".editFields"][] = "SSSER";
$tdatademo_user_open[".editFields"][] = "SSSEC";
$tdatademo_user_open[".editFields"][] = "PhilHealthEE";
$tdatademo_user_open[".editFields"][] = "PhilHealthER";
$tdatademo_user_open[".editFields"][] = "PagIbigEE";
$tdatademo_user_open[".editFields"][] = "PagIbigER";
$tdatademo_user_open[".editFields"][] = "NoLateDeduction";
$tdatademo_user_open[".editFields"][] = "GracePeriodMins";
$tdatademo_user_open[".editFields"][] = "WithAdditionalBreaks";
$tdatademo_user_open[".editFields"][] = "IncludeBreakLate";
$tdatademo_user_open[".editFields"][] = "LateFixPenalty";
$tdatademo_user_open[".editFields"][] = "CalMonthly";
$tdatademo_user_open[".editFields"][] = "PresetMoNonTax";
$tdatademo_user_open[".editFields"][] = "PreCalMoTaxable";
$tdatademo_user_open[".editFields"][] = "TaxPeriods";
$tdatademo_user_open[".editFields"][] = "TaxPerPeriod";
$tdatademo_user_open[".editFields"][] = "DateCreated";
$tdatademo_user_open[".editFields"][] = "Preparedby";
$tdatademo_user_open[".editFields"][] = "Checked";
$tdatademo_user_open[".editFields"][] = "Checkedby";
$tdatademo_user_open[".editFields"][] = "CheckedDate";
$tdatademo_user_open[".editFields"][] = "Approved";
$tdatademo_user_open[".editFields"][] = "Approvedby";
$tdatademo_user_open[".editFields"][] = "ApprovedDate";

$tdatademo_user_open[".inlineEditFields"] = array();
$tdatademo_user_open[".inlineEditFields"][] = "EmployeeID";
$tdatademo_user_open[".inlineEditFields"][] = "IDNo";
$tdatademo_user_open[".inlineEditFields"][] = "Photo";
$tdatademo_user_open[".inlineEditFields"][] = "user_name";
$tdatademo_user_open[".inlineEditFields"][] = "Employer";
$tdatademo_user_open[".inlineEditFields"][] = "Division";
$tdatademo_user_open[".inlineEditFields"][] = "Department";
$tdatademo_user_open[".inlineEditFields"][] = "HiredDate";
$tdatademo_user_open[".inlineEditFields"][] = "Inactive";
$tdatademo_user_open[".inlineEditFields"][] = "ExitDate";
$tdatademo_user_open[".inlineEditFields"][] = "Status";
$tdatademo_user_open[".inlineEditFields"][] = "Position";
$tdatademo_user_open[".inlineEditFields"][] = "Superior";
$tdatademo_user_open[".inlineEditFields"][] = "Superior2";
$tdatademo_user_open[".inlineEditFields"][] = "Mobile";
$tdatademo_user_open[".inlineEditFields"][] = "Address";
$tdatademo_user_open[".inlineEditFields"][] = "Birthday";
$tdatademo_user_open[".inlineEditFields"][] = "Email";
$tdatademo_user_open[".inlineEditFields"][] = "SSSNo";
$tdatademo_user_open[".inlineEditFields"][] = "PagIbigNo";
$tdatademo_user_open[".inlineEditFields"][] = "PhilHealthNo";
$tdatademo_user_open[".inlineEditFields"][] = "TIN";
$tdatademo_user_open[".inlineEditFields"][] = "Bank";
$tdatademo_user_open[".inlineEditFields"][] = "AccountNo";
$tdatademo_user_open[".inlineEditFields"][] = "ExcludeBio";
$tdatademo_user_open[".inlineEditFields"][] = "AllowableSickLeave";
$tdatademo_user_open[".inlineEditFields"][] = "AllowableVacationLeave";
$tdatademo_user_open[".inlineEditFields"][] = "AllowableEmergencyLeave";
$tdatademo_user_open[".inlineEditFields"][] = "AllowablePaternityLeave";
$tdatademo_user_open[".inlineEditFields"][] = "EmployeeType";
$tdatademo_user_open[".inlineEditFields"][] = "BasicDailyPay";
$tdatademo_user_open[".inlineEditFields"][] = "BasicMonthlyPay";
$tdatademo_user_open[".inlineEditFields"][] = "Level";
$tdatademo_user_open[".inlineEditFields"][] = "DeMinimis";
$tdatademo_user_open[".inlineEditFields"][] = "DoNotUpdateContributions";
$tdatademo_user_open[".inlineEditFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user_open[".inlineEditFields"][] = "SSSEE";
$tdatademo_user_open[".inlineEditFields"][] = "SSSER";
$tdatademo_user_open[".inlineEditFields"][] = "SSSEC";
$tdatademo_user_open[".inlineEditFields"][] = "PhilHealthEE";
$tdatademo_user_open[".inlineEditFields"][] = "PhilHealthER";
$tdatademo_user_open[".inlineEditFields"][] = "PagIbigEE";
$tdatademo_user_open[".inlineEditFields"][] = "PagIbigER";
$tdatademo_user_open[".inlineEditFields"][] = "NoLateDeduction";
$tdatademo_user_open[".inlineEditFields"][] = "GracePeriodMins";
$tdatademo_user_open[".inlineEditFields"][] = "WithAdditionalBreaks";
$tdatademo_user_open[".inlineEditFields"][] = "IncludeBreakLate";
$tdatademo_user_open[".inlineEditFields"][] = "LateFixPenalty";
$tdatademo_user_open[".inlineEditFields"][] = "CalMonthly";
$tdatademo_user_open[".inlineEditFields"][] = "PresetMoNonTax";
$tdatademo_user_open[".inlineEditFields"][] = "PreCalMoTaxable";
$tdatademo_user_open[".inlineEditFields"][] = "TaxPeriods";
$tdatademo_user_open[".inlineEditFields"][] = "TaxPerPeriod";
$tdatademo_user_open[".inlineEditFields"][] = "DateCreated";
$tdatademo_user_open[".inlineEditFields"][] = "Preparedby";
$tdatademo_user_open[".inlineEditFields"][] = "Checked";
$tdatademo_user_open[".inlineEditFields"][] = "Checkedby";
$tdatademo_user_open[".inlineEditFields"][] = "CheckedDate";
$tdatademo_user_open[".inlineEditFields"][] = "Approved";
$tdatademo_user_open[".inlineEditFields"][] = "Approvedby";
$tdatademo_user_open[".inlineEditFields"][] = "ApprovedDate";

$tdatademo_user_open[".updateSelectedFields"] = array();
$tdatademo_user_open[".updateSelectedFields"][] = "EmployeeID";
$tdatademo_user_open[".updateSelectedFields"][] = "IDNo";
$tdatademo_user_open[".updateSelectedFields"][] = "Photo";
$tdatademo_user_open[".updateSelectedFields"][] = "user_name";
$tdatademo_user_open[".updateSelectedFields"][] = "Employer";
$tdatademo_user_open[".updateSelectedFields"][] = "Division";
$tdatademo_user_open[".updateSelectedFields"][] = "Department";
$tdatademo_user_open[".updateSelectedFields"][] = "HiredDate";
$tdatademo_user_open[".updateSelectedFields"][] = "Inactive";
$tdatademo_user_open[".updateSelectedFields"][] = "ExitDate";
$tdatademo_user_open[".updateSelectedFields"][] = "Status";
$tdatademo_user_open[".updateSelectedFields"][] = "Position";
$tdatademo_user_open[".updateSelectedFields"][] = "Superior";
$tdatademo_user_open[".updateSelectedFields"][] = "Mobile";
$tdatademo_user_open[".updateSelectedFields"][] = "Address";
$tdatademo_user_open[".updateSelectedFields"][] = "Email";
$tdatademo_user_open[".updateSelectedFields"][] = "SSSNo";
$tdatademo_user_open[".updateSelectedFields"][] = "PagIbigNo";
$tdatademo_user_open[".updateSelectedFields"][] = "PhilHealthNo";
$tdatademo_user_open[".updateSelectedFields"][] = "TIN";
$tdatademo_user_open[".updateSelectedFields"][] = "AccountNo";
$tdatademo_user_open[".updateSelectedFields"][] = "AllowableSickLeave";
$tdatademo_user_open[".updateSelectedFields"][] = "AllowableVacationLeave";
$tdatademo_user_open[".updateSelectedFields"][] = "AllowableEmergencyLeave";
$tdatademo_user_open[".updateSelectedFields"][] = "AllowablePaternityLeave";
$tdatademo_user_open[".updateSelectedFields"][] = "EmployeeType";
$tdatademo_user_open[".updateSelectedFields"][] = "Level";
$tdatademo_user_open[".updateSelectedFields"][] = "DoNotUpdateContributions";
$tdatademo_user_open[".updateSelectedFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user_open[".updateSelectedFields"][] = "SSSEE";
$tdatademo_user_open[".updateSelectedFields"][] = "SSSER";
$tdatademo_user_open[".updateSelectedFields"][] = "SSSEC";
$tdatademo_user_open[".updateSelectedFields"][] = "PhilHealthEE";
$tdatademo_user_open[".updateSelectedFields"][] = "PhilHealthER";
$tdatademo_user_open[".updateSelectedFields"][] = "PagIbigEE";
$tdatademo_user_open[".updateSelectedFields"][] = "PagIbigER";
$tdatademo_user_open[".updateSelectedFields"][] = "LateFixPenalty";
$tdatademo_user_open[".updateSelectedFields"][] = "DateCreated";
$tdatademo_user_open[".updateSelectedFields"][] = "Preparedby";
$tdatademo_user_open[".updateSelectedFields"][] = "Checked";
$tdatademo_user_open[".updateSelectedFields"][] = "Checkedby";
$tdatademo_user_open[".updateSelectedFields"][] = "CheckedDate";
$tdatademo_user_open[".updateSelectedFields"][] = "Approved";
$tdatademo_user_open[".updateSelectedFields"][] = "Approvedby";
$tdatademo_user_open[".updateSelectedFields"][] = "ApprovedDate";


$tdatademo_user_open[".exportFields"] = array();
$tdatademo_user_open[".exportFields"][] = "EmployeeID";
$tdatademo_user_open[".exportFields"][] = "IDNo";
$tdatademo_user_open[".exportFields"][] = "Photo";
$tdatademo_user_open[".exportFields"][] = "user_name";
$tdatademo_user_open[".exportFields"][] = "Employer";
$tdatademo_user_open[".exportFields"][] = "Division";
$tdatademo_user_open[".exportFields"][] = "Department";
$tdatademo_user_open[".exportFields"][] = "HiredDate";
$tdatademo_user_open[".exportFields"][] = "Inactive";
$tdatademo_user_open[".exportFields"][] = "ExitDate";
$tdatademo_user_open[".exportFields"][] = "Status";
$tdatademo_user_open[".exportFields"][] = "Position";
$tdatademo_user_open[".exportFields"][] = "Superior";
$tdatademo_user_open[".exportFields"][] = "Superior2";
$tdatademo_user_open[".exportFields"][] = "Mobile";
$tdatademo_user_open[".exportFields"][] = "Address";
$tdatademo_user_open[".exportFields"][] = "Birthday";
$tdatademo_user_open[".exportFields"][] = "Email";
$tdatademo_user_open[".exportFields"][] = "SSSNo";
$tdatademo_user_open[".exportFields"][] = "PagIbigNo";
$tdatademo_user_open[".exportFields"][] = "PhilHealthNo";
$tdatademo_user_open[".exportFields"][] = "TIN";
$tdatademo_user_open[".exportFields"][] = "Bank";
$tdatademo_user_open[".exportFields"][] = "AccountNo";
$tdatademo_user_open[".exportFields"][] = "ExcludeBio";
$tdatademo_user_open[".exportFields"][] = "AllowableSickLeave";
$tdatademo_user_open[".exportFields"][] = "AllowableVacationLeave";
$tdatademo_user_open[".exportFields"][] = "AllowableEmergencyLeave";
$tdatademo_user_open[".exportFields"][] = "AllowablePaternityLeave";
$tdatademo_user_open[".exportFields"][] = "EmployeeType";
$tdatademo_user_open[".exportFields"][] = "BasicDailyPay";
$tdatademo_user_open[".exportFields"][] = "BasicMonthlyPay";
$tdatademo_user_open[".exportFields"][] = "Level";
$tdatademo_user_open[".exportFields"][] = "DeMinimis";
$tdatademo_user_open[".exportFields"][] = "DoNotUpdateContributions";
$tdatademo_user_open[".exportFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user_open[".exportFields"][] = "SSSEE";
$tdatademo_user_open[".exportFields"][] = "SSSER";
$tdatademo_user_open[".exportFields"][] = "SSSEC";
$tdatademo_user_open[".exportFields"][] = "PhilHealthEE";
$tdatademo_user_open[".exportFields"][] = "PhilHealthER";
$tdatademo_user_open[".exportFields"][] = "PagIbigEE";
$tdatademo_user_open[".exportFields"][] = "PagIbigER";
$tdatademo_user_open[".exportFields"][] = "NoLateDeduction";
$tdatademo_user_open[".exportFields"][] = "user_id";
$tdatademo_user_open[".exportFields"][] = "GracePeriodMins";
$tdatademo_user_open[".exportFields"][] = "WithAdditionalBreaks";
$tdatademo_user_open[".exportFields"][] = "IncludeBreakLate";
$tdatademo_user_open[".exportFields"][] = "LateFixPenalty";
$tdatademo_user_open[".exportFields"][] = "CalMonthly";
$tdatademo_user_open[".exportFields"][] = "PresetMoNonTax";
$tdatademo_user_open[".exportFields"][] = "PreCalMoTaxable";
$tdatademo_user_open[".exportFields"][] = "TaxPeriods";
$tdatademo_user_open[".exportFields"][] = "TaxPerPeriod";
$tdatademo_user_open[".exportFields"][] = "DateCreated";
$tdatademo_user_open[".exportFields"][] = "Preparedby";
$tdatademo_user_open[".exportFields"][] = "Checked";
$tdatademo_user_open[".exportFields"][] = "Checkedby";
$tdatademo_user_open[".exportFields"][] = "CheckedDate";
$tdatademo_user_open[".exportFields"][] = "Approved";
$tdatademo_user_open[".exportFields"][] = "Approvedby";
$tdatademo_user_open[".exportFields"][] = "ApprovedDate";

$tdatademo_user_open[".importFields"] = array();
$tdatademo_user_open[".importFields"][] = "user_id";
$tdatademo_user_open[".importFields"][] = "user_name";
$tdatademo_user_open[".importFields"][] = "Photo";
$tdatademo_user_open[".importFields"][] = "SSSNo";
$tdatademo_user_open[".importFields"][] = "TIN";
$tdatademo_user_open[".importFields"][] = "Mobile";
$tdatademo_user_open[".importFields"][] = "Address";
$tdatademo_user_open[".importFields"][] = "Email";
$tdatademo_user_open[".importFields"][] = "EmployeeType";
$tdatademo_user_open[".importFields"][] = "EmployeeID";
$tdatademo_user_open[".importFields"][] = "Division";
$tdatademo_user_open[".importFields"][] = "Status";
$tdatademo_user_open[".importFields"][] = "Department";
$tdatademo_user_open[".importFields"][] = "AllowableSickLeave";
$tdatademo_user_open[".importFields"][] = "AllowableVacationLeave";
$tdatademo_user_open[".importFields"][] = "AllowableEmergencyLeave";
$tdatademo_user_open[".importFields"][] = "SSSEE";
$tdatademo_user_open[".importFields"][] = "SSSER";
$tdatademo_user_open[".importFields"][] = "PhilHealthEE";
$tdatademo_user_open[".importFields"][] = "PhilHealthER";
$tdatademo_user_open[".importFields"][] = "PagIbigEE";
$tdatademo_user_open[".importFields"][] = "AllowablePaternityLeave";
$tdatademo_user_open[".importFields"][] = "HiredDate";
$tdatademo_user_open[".importFields"][] = "Inactive";
$tdatademo_user_open[".importFields"][] = "ExitDate";
$tdatademo_user_open[".importFields"][] = "PagIbigER";
$tdatademo_user_open[".importFields"][] = "PagIbigNo";
$tdatademo_user_open[".importFields"][] = "PhilHealthNo";
$tdatademo_user_open[".importFields"][] = "SSSEC";
$tdatademo_user_open[".importFields"][] = "Level";
$tdatademo_user_open[".importFields"][] = "DateCreated";
$tdatademo_user_open[".importFields"][] = "ApprovedDate";
$tdatademo_user_open[".importFields"][] = "Approved";
$tdatademo_user_open[".importFields"][] = "Approvedby";
$tdatademo_user_open[".importFields"][] = "Preparedby";
$tdatademo_user_open[".importFields"][] = "Checkedby";
$tdatademo_user_open[".importFields"][] = "CheckedDate";
$tdatademo_user_open[".importFields"][] = "Checked";
$tdatademo_user_open[".importFields"][] = "Superior";
$tdatademo_user_open[".importFields"][] = "Position";
$tdatademo_user_open[".importFields"][] = "Employer";
$tdatademo_user_open[".importFields"][] = "IDNo";
$tdatademo_user_open[".importFields"][] = "AccountNo";
$tdatademo_user_open[".importFields"][] = "LateFixPenalty";
$tdatademo_user_open[".importFields"][] = "DoNotUpdateContributions";
$tdatademo_user_open[".importFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user_open[".importFields"][] = "Birthday";
$tdatademo_user_open[".importFields"][] = "Bank";
$tdatademo_user_open[".importFields"][] = "NoLateDeduction";
$tdatademo_user_open[".importFields"][] = "IncludeBreakLate";
$tdatademo_user_open[".importFields"][] = "GracePeriodMins";
$tdatademo_user_open[".importFields"][] = "WithAdditionalBreaks";
$tdatademo_user_open[".importFields"][] = "TaxPeriods";
$tdatademo_user_open[".importFields"][] = "PresetMoNonTax";
$tdatademo_user_open[".importFields"][] = "PreCalMoTaxable";
$tdatademo_user_open[".importFields"][] = "CalMonthly";
$tdatademo_user_open[".importFields"][] = "TaxPerPeriod";
$tdatademo_user_open[".importFields"][] = "Superior2";
$tdatademo_user_open[".importFields"][] = "BasicMonthlyPay";
$tdatademo_user_open[".importFields"][] = "BasicDailyPay";
$tdatademo_user_open[".importFields"][] = "DeMinimis";
$tdatademo_user_open[".importFields"][] = "ExcludeBio";

$tdatademo_user_open[".printFields"] = array();
$tdatademo_user_open[".printFields"][] = "EmployeeID";
$tdatademo_user_open[".printFields"][] = "IDNo";
$tdatademo_user_open[".printFields"][] = "Photo";
$tdatademo_user_open[".printFields"][] = "user_name";
$tdatademo_user_open[".printFields"][] = "Employer";
$tdatademo_user_open[".printFields"][] = "Division";
$tdatademo_user_open[".printFields"][] = "Department";
$tdatademo_user_open[".printFields"][] = "HiredDate";
$tdatademo_user_open[".printFields"][] = "Inactive";
$tdatademo_user_open[".printFields"][] = "ExitDate";
$tdatademo_user_open[".printFields"][] = "Status";
$tdatademo_user_open[".printFields"][] = "Position";
$tdatademo_user_open[".printFields"][] = "Superior";
$tdatademo_user_open[".printFields"][] = "Superior2";
$tdatademo_user_open[".printFields"][] = "Mobile";
$tdatademo_user_open[".printFields"][] = "Address";
$tdatademo_user_open[".printFields"][] = "Birthday";
$tdatademo_user_open[".printFields"][] = "Email";
$tdatademo_user_open[".printFields"][] = "SSSNo";
$tdatademo_user_open[".printFields"][] = "PagIbigNo";
$tdatademo_user_open[".printFields"][] = "PhilHealthNo";
$tdatademo_user_open[".printFields"][] = "TIN";
$tdatademo_user_open[".printFields"][] = "Bank";
$tdatademo_user_open[".printFields"][] = "AccountNo";
$tdatademo_user_open[".printFields"][] = "ExcludeBio";
$tdatademo_user_open[".printFields"][] = "AllowableSickLeave";
$tdatademo_user_open[".printFields"][] = "AllowableVacationLeave";
$tdatademo_user_open[".printFields"][] = "AllowableEmergencyLeave";
$tdatademo_user_open[".printFields"][] = "AllowablePaternityLeave";
$tdatademo_user_open[".printFields"][] = "EmployeeType";
$tdatademo_user_open[".printFields"][] = "BasicDailyPay";
$tdatademo_user_open[".printFields"][] = "BasicMonthlyPay";
$tdatademo_user_open[".printFields"][] = "Level";
$tdatademo_user_open[".printFields"][] = "DeMinimis";
$tdatademo_user_open[".printFields"][] = "DoNotUpdateContributions";
$tdatademo_user_open[".printFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user_open[".printFields"][] = "SSSEE";
$tdatademo_user_open[".printFields"][] = "SSSER";
$tdatademo_user_open[".printFields"][] = "SSSEC";
$tdatademo_user_open[".printFields"][] = "PhilHealthEE";
$tdatademo_user_open[".printFields"][] = "PhilHealthER";
$tdatademo_user_open[".printFields"][] = "PagIbigEE";
$tdatademo_user_open[".printFields"][] = "PagIbigER";
$tdatademo_user_open[".printFields"][] = "NoLateDeduction";
$tdatademo_user_open[".printFields"][] = "user_id";
$tdatademo_user_open[".printFields"][] = "GracePeriodMins";
$tdatademo_user_open[".printFields"][] = "WithAdditionalBreaks";
$tdatademo_user_open[".printFields"][] = "IncludeBreakLate";
$tdatademo_user_open[".printFields"][] = "LateFixPenalty";
$tdatademo_user_open[".printFields"][] = "CalMonthly";
$tdatademo_user_open[".printFields"][] = "PresetMoNonTax";
$tdatademo_user_open[".printFields"][] = "PreCalMoTaxable";
$tdatademo_user_open[".printFields"][] = "TaxPeriods";
$tdatademo_user_open[".printFields"][] = "TaxPerPeriod";
$tdatademo_user_open[".printFields"][] = "DateCreated";
$tdatademo_user_open[".printFields"][] = "Preparedby";
$tdatademo_user_open[".printFields"][] = "Checked";
$tdatademo_user_open[".printFields"][] = "Checkedby";
$tdatademo_user_open[".printFields"][] = "CheckedDate";
$tdatademo_user_open[".printFields"][] = "Approved";
$tdatademo_user_open[".printFields"][] = "Approvedby";
$tdatademo_user_open[".printFields"][] = "ApprovedDate";


//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","user_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_id";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user_open["user_id"] = $fdata;
//	user_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_name";
	$fdata["GoodName"] = "user_name";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","user_name");
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

		$fdata["strField"] = "user_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_name";

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user_open["user_name"] = $fdata;
//	Photo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Photo";
	$fdata["GoodName"] = "Photo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","Photo");
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

		$fdata["strField"] = "Photo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Photo";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "photos";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 100;
	$vdata["ThumbHeight"] = 100;
			$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 0;

	
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
	
		
	


	
	
	
							$edata["acceptFileTypes"] = "bmp";
						$edata["acceptFileTypes"] .= "|gif";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|png";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 100;

				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 150;

	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user_open["Photo"] = $fdata;
//	SSSNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SSSNo";
	$fdata["GoodName"] = "SSSNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","SSSNo");
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

		$fdata["strField"] = "SSSNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SSSNo";

	
	
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




	$tdatademo_user_open["SSSNo"] = $fdata;
//	TIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TIN";
	$fdata["GoodName"] = "TIN";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","TIN");
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

		$fdata["strField"] = "TIN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIN";

	
	
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




	$tdatademo_user_open["TIN"] = $fdata;
//	Mobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Mobile";
	$fdata["GoodName"] = "Mobile";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","Mobile");
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

		$fdata["strField"] = "Mobile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Mobile";

	
	
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




	$tdatademo_user_open["Mobile"] = $fdata;
//	Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Address";
	$fdata["GoodName"] = "Address";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","Address");
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

		$fdata["strField"] = "Address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Address";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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




	$tdatademo_user_open["Address"] = $fdata;
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","Email");
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

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user_open["Email"] = $fdata;
//	EmployeeType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "EmployeeType";
	$fdata["GoodName"] = "EmployeeType";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","EmployeeType");
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

		$fdata["strField"] = "EmployeeType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmployeeType";

	
	
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
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "EmployeeType";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 110;

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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user_open["EmployeeType"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","EmployeeID");
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user_open["EmployeeID"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","Division");
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

	
	
		$edata["AllowToAdd"] = true;

	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user_open["Division"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","Status");
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


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 140;

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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user_open["Status"] = $fdata;
//	Department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Department";
	$fdata["GoodName"] = "Department";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","Department");
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

		$fdata["strField"] = "Department";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Department";

	
	
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
	$edata["LookupTable"] = "department";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DeID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Department";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;

	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user_open["Department"] = $fdata;
//	AllowableSickLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "AllowableSickLeave";
	$fdata["GoodName"] = "AllowableSickLeave";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","AllowableSickLeave");
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

		$fdata["strField"] = "AllowableSickLeave";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AllowableSickLeave";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 50;

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




	$tdatademo_user_open["AllowableSickLeave"] = $fdata;
//	AllowableVacationLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "AllowableVacationLeave";
	$fdata["GoodName"] = "AllowableVacationLeave";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","AllowableVacationLeave");
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

		$fdata["strField"] = "AllowableVacationLeave";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AllowableVacationLeave";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 50;

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




	$tdatademo_user_open["AllowableVacationLeave"] = $fdata;
//	AllowableEmergencyLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "AllowableEmergencyLeave";
	$fdata["GoodName"] = "AllowableEmergencyLeave";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","AllowableEmergencyLeave");
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

		$fdata["strField"] = "AllowableEmergencyLeave";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AllowableEmergencyLeave";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 50;

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




	$tdatademo_user_open["AllowableEmergencyLeave"] = $fdata;
//	SSSEE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "SSSEE";
	$fdata["GoodName"] = "SSSEE";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","SSSEE");
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

		$fdata["strField"] = "SSSEE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SSSEE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 114;

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




	$tdatademo_user_open["SSSEE"] = $fdata;
//	SSSER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "SSSER";
	$fdata["GoodName"] = "SSSER";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","SSSER");
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

		$fdata["strField"] = "SSSER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SSSER";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 114;

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




	$tdatademo_user_open["SSSER"] = $fdata;
//	PhilHealthEE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "PhilHealthEE";
	$fdata["GoodName"] = "PhilHealthEE";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","PhilHealthEE");
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

		$fdata["strField"] = "PhilHealthEE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PhilHealthEE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 114;

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




	$tdatademo_user_open["PhilHealthEE"] = $fdata;
//	PhilHealthER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "PhilHealthER";
	$fdata["GoodName"] = "PhilHealthER";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","PhilHealthER");
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

		$fdata["strField"] = "PhilHealthER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PhilHealthER";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 114;

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




	$tdatademo_user_open["PhilHealthER"] = $fdata;
//	PagIbigEE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "PagIbigEE";
	$fdata["GoodName"] = "PagIbigEE";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","PagIbigEE");
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

		$fdata["strField"] = "PagIbigEE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PagIbigEE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 114;

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




	$tdatademo_user_open["PagIbigEE"] = $fdata;
//	AllowablePaternityLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "AllowablePaternityLeave";
	$fdata["GoodName"] = "AllowablePaternityLeave";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","AllowablePaternityLeave");
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

		$fdata["strField"] = "AllowablePaternityLeave";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AllowablePaternityLeave";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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




	$tdatademo_user_open["AllowablePaternityLeave"] = $fdata;
//	HiredDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "HiredDate";
	$fdata["GoodName"] = "HiredDate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","HiredDate");
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

		$fdata["strField"] = "HiredDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HiredDate";

	
	
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




	$tdatademo_user_open["HiredDate"] = $fdata;
//	Inactive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Inactive";
	$fdata["GoodName"] = "Inactive";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","Inactive");
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

		$fdata["strField"] = "Inactive";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Inactive";

	
	
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




	$tdatademo_user_open["Inactive"] = $fdata;
//	ExitDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "ExitDate";
	$fdata["GoodName"] = "ExitDate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","ExitDate");
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

		$fdata["strField"] = "ExitDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ExitDate";

	
	
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




	$tdatademo_user_open["ExitDate"] = $fdata;
//	PagIbigER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "PagIbigER";
	$fdata["GoodName"] = "PagIbigER";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","PagIbigER");
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

		$fdata["strField"] = "PagIbigER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PagIbigER";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 114;

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




	$tdatademo_user_open["PagIbigER"] = $fdata;
//	PagIbigNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "PagIbigNo";
	$fdata["GoodName"] = "PagIbigNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","PagIbigNo");
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

		$fdata["strField"] = "PagIbigNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PagIbigNo";

	
	
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




	$tdatademo_user_open["PagIbigNo"] = $fdata;
//	PhilHealthNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "PhilHealthNo";
	$fdata["GoodName"] = "PhilHealthNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","PhilHealthNo");
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

		$fdata["strField"] = "PhilHealthNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PhilHealthNo";

	
	
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




	$tdatademo_user_open["PhilHealthNo"] = $fdata;
//	SSSEC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "SSSEC";
	$fdata["GoodName"] = "SSSEC";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","SSSEC");
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

		$fdata["strField"] = "SSSEC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SSSEC";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 114;

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




	$tdatademo_user_open["SSSEC"] = $fdata;
//	Level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Level";
	$fdata["GoodName"] = "Level";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","Level");
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

		$fdata["strField"] = "Level";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Level`";

	
	
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
	$edata["LookupTable"] = "leveldrops";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"DeMinimis", 'lookupF'=>"TotalDeMinimis");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "LevID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Level";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;

	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 84;

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




	$tdatademo_user_open["Level"] = $fdata;
//	DateCreated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "DateCreated";
	$fdata["GoodName"] = "DateCreated";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","DateCreated");
	$fdata["FieldType"] = 135;

	
	
	
			
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

		$fdata["strField"] = "DateCreated";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DateCreated";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatademo_user_open["DateCreated"] = $fdata;
//	ApprovedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "ApprovedDate";
	$fdata["GoodName"] = "ApprovedDate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","ApprovedDate");
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

		$fdata["strField"] = "ApprovedDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ApprovedDate";

	
	
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

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 21;

	
	
	
		$edata["controlWidth"] = 144;

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




	$tdatademo_user_open["ApprovedDate"] = $fdata;
//	Approved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Approved";
	$fdata["GoodName"] = "Approved";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","Approved");
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

		$fdata["strField"] = "Approved";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Approved";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 34;

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




	$tdatademo_user_open["Approved"] = $fdata;
//	Approvedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Approvedby";
	$fdata["GoodName"] = "Approvedby";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","Approvedby");
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

		$fdata["strField"] = "Approvedby";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Approvedby";

	
	
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
	$edata["LookupTable"] = "logins";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "LogID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "FullName";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 224;

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




	$tdatademo_user_open["Approvedby"] = $fdata;
//	Preparedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Preparedby";
	$fdata["GoodName"] = "Preparedby";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","Preparedby");
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

		$fdata["strField"] = "Preparedby";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Preparedby";

	
	
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
	$edata["LookupTable"] = "logins";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "LogID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "FullName";
	
	

	
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




	$tdatademo_user_open["Preparedby"] = $fdata;
//	Checkedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Checkedby";
	$fdata["GoodName"] = "Checkedby";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","Checkedby");
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

		$fdata["strField"] = "Checkedby";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Checkedby";

	
	
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
	$edata["LookupTable"] = "logins";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "LogID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "FullName";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 224;

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




	$tdatademo_user_open["Checkedby"] = $fdata;
//	CheckedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "CheckedDate";
	$fdata["GoodName"] = "CheckedDate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","CheckedDate");
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

		$fdata["strField"] = "CheckedDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CheckedDate";

	
	
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

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 21;

	
	
	
		$edata["controlWidth"] = 144;

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




	$tdatademo_user_open["CheckedDate"] = $fdata;
//	Checked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Checked";
	$fdata["GoodName"] = "Checked";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","Checked");
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

		$fdata["strField"] = "Checked";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Checked";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 34;

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




	$tdatademo_user_open["Checked"] = $fdata;
//	Superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Superior";
	$fdata["GoodName"] = "Superior";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","Superior");
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

		$fdata["strField"] = "Superior";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Superior";

	
	
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
	$edata["LookupTable"] = "demo_user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EmployeeID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "user_name";
	
	

	
	$edata["LookupOrderBy"] = "user_name";

	
	
	
	

	
	
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




	$tdatademo_user_open["Superior"] = $fdata;
//	Position
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Position";
	$fdata["GoodName"] = "Position";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","Position");
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
	
	

	
	$edata["LookupOrderBy"] = "Position";

	
	
		$edata["AllowToAdd"] = true;

	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user_open["Position"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","Employer");
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
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;

	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user_open["Employer"] = $fdata;
//	IDNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "IDNo";
	$fdata["GoodName"] = "IDNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","IDNo");
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

		$fdata["strField"] = "IDNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IDNo";

	
	
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




	$tdatademo_user_open["IDNo"] = $fdata;
//	AccountNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "AccountNo";
	$fdata["GoodName"] = "AccountNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","AccountNo");
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

		$fdata["strField"] = "AccountNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccountNo";

	
	
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




	$tdatademo_user_open["AccountNo"] = $fdata;
//	LateFixPenalty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "LateFixPenalty";
	$fdata["GoodName"] = "LateFixPenalty";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","LateFixPenalty");
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

		$fdata["strField"] = "LateFixPenalty";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LateFixPenalty";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 57;

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




	$tdatademo_user_open["LateFixPenalty"] = $fdata;
//	DoNotUpdateContributions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "DoNotUpdateContributions";
	$fdata["GoodName"] = "DoNotUpdateContributions";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","DoNotUpdateContributions");
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

		$fdata["strField"] = "DoNotUpdateContributions";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DoNotUpdateContributions";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 34;

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




	$tdatademo_user_open["DoNotUpdateContributions"] = $fdata;
//	ExcludeContributionOnPayroll
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "ExcludeContributionOnPayroll";
	$fdata["GoodName"] = "ExcludeContributionOnPayroll";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","ExcludeContributionOnPayroll");
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

		$fdata["strField"] = "ExcludeContributionOnPayroll";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ExcludeContributionOnPayroll";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 34;

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




	$tdatademo_user_open["ExcludeContributionOnPayroll"] = $fdata;
//	Birthday
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "Birthday";
	$fdata["GoodName"] = "Birthday";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","Birthday");
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

		$fdata["strField"] = "Birthday";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Birthday";

	
	
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




	$tdatademo_user_open["Birthday"] = $fdata;
//	Bank
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "Bank";
	$fdata["GoodName"] = "Bank";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","Bank");
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

		$fdata["strField"] = "Bank";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Bank";

	
	
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
	$edata["LookupTable"] = "banks";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "BankID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Bank";
	
	

	
	$edata["LookupOrderBy"] = "Bank";

	
	
		$edata["AllowToAdd"] = true;

	

	
	
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




	$tdatademo_user_open["Bank"] = $fdata;
//	NoLateDeduction
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "NoLateDeduction";
	$fdata["GoodName"] = "NoLateDeduction";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","NoLateDeduction");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NoLateDeduction";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NoLateDeduction";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 57;

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




	$tdatademo_user_open["NoLateDeduction"] = $fdata;
//	IncludeBreakLate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "IncludeBreakLate";
	$fdata["GoodName"] = "IncludeBreakLate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","IncludeBreakLate");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "IncludeBreakLate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IncludeBreakLate";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 47;

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




	$tdatademo_user_open["IncludeBreakLate"] = $fdata;
//	GracePeriodMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "GracePeriodMins";
	$fdata["GoodName"] = "GracePeriodMins";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","GracePeriodMins");
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

		$fdata["strField"] = "GracePeriodMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GracePeriodMins";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 67;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user_open["GracePeriodMins"] = $fdata;
//	WithAdditionalBreaks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "WithAdditionalBreaks";
	$fdata["GoodName"] = "WithAdditionalBreaks";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","WithAdditionalBreaks");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "WithAdditionalBreaks";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WithAdditionalBreaks";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 47;

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




	$tdatademo_user_open["WithAdditionalBreaks"] = $fdata;
//	TaxPeriods
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "TaxPeriods";
	$fdata["GoodName"] = "TaxPeriods";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","TaxPeriods");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TaxPeriods";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TaxPeriods";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
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




	$tdatademo_user_open["TaxPeriods"] = $fdata;
//	PresetMoNonTax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "PresetMoNonTax";
	$fdata["GoodName"] = "PresetMoNonTax";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","PresetMoNonTax");
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

		$fdata["strField"] = "PresetMoNonTax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PresetMoNonTax";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
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




	$tdatademo_user_open["PresetMoNonTax"] = $fdata;
//	PreCalMoTaxable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "PreCalMoTaxable";
	$fdata["GoodName"] = "PreCalMoTaxable";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","PreCalMoTaxable");
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

		$fdata["strField"] = "PreCalMoTaxable";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PreCalMoTaxable";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
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




	$tdatademo_user_open["PreCalMoTaxable"] = $fdata;
//	CalMonthly
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "CalMonthly";
	$fdata["GoodName"] = "CalMonthly";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","CalMonthly");
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

		$fdata["strField"] = "CalMonthly";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CalMonthly";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
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




	$tdatademo_user_open["CalMonthly"] = $fdata;
//	TaxPerPeriod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "TaxPerPeriod";
	$fdata["GoodName"] = "TaxPerPeriod";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","TaxPerPeriod");
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

		$fdata["strField"] = "TaxPerPeriod";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TaxPerPeriod";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
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




	$tdatademo_user_open["TaxPerPeriod"] = $fdata;
//	Superior2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "Superior2";
	$fdata["GoodName"] = "Superior2";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","Superior2");
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

		$fdata["strField"] = "Superior2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Superior2";

	
	
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
	$edata["LookupTable"] = "demo_user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EmployeeID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "user_name";
	
	

	
	$edata["LookupOrderBy"] = "user_name";

	
	
	
	

	
	
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




	$tdatademo_user_open["Superior2"] = $fdata;
//	BasicMonthlyPay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "BasicMonthlyPay";
	$fdata["GoodName"] = "BasicMonthlyPay";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","BasicMonthlyPay");
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

		$fdata["strField"] = "BasicMonthlyPay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BasicMonthlyPay";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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
		
		$edata["controlWidth"] = 110;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user_open["BasicMonthlyPay"] = $fdata;
//	BasicDailyPay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "BasicDailyPay";
	$fdata["GoodName"] = "BasicDailyPay";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","BasicDailyPay");
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

		$fdata["strField"] = "BasicDailyPay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BasicDailyPay";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
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
		
		$edata["controlWidth"] = 110;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user_open["BasicDailyPay"] = $fdata;
//	DeMinimis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "DeMinimis";
	$fdata["GoodName"] = "DeMinimis";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","DeMinimis");
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

		$fdata["strField"] = "DeMinimis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DeMinimis";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 104;

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




	$tdatademo_user_open["DeMinimis"] = $fdata;
//	ExcludeBio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "ExcludeBio";
	$fdata["GoodName"] = "ExcludeBio";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user_open","ExcludeBio");
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

		$fdata["strField"] = "ExcludeBio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ExcludeBio";

	
	
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




	$tdatademo_user_open["ExcludeBio"] = $fdata;


$tables_data["demo_user_open"]=&$tdatademo_user_open;
$field_labels["demo_user_open"] = &$fieldLabelsdemo_user_open;
$fieldToolTips["demo_user_open"] = &$fieldToolTipsdemo_user_open;
$placeHolders["demo_user_open"] = &$placeHoldersdemo_user_open;
$page_titles["demo_user_open"] = &$pageTitlesdemo_user_open;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["demo_user_open"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["demo_user_open"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_demo_user_open()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "user_id,  user_name,  Photo,  SSSNo,  TIN,  Mobile,  Address,  Email,  EmployeeType,  EmployeeID,  Division,  Status,  Department,  AllowableSickLeave,  AllowableVacationLeave,  AllowableEmergencyLeave,  SSSEE,  SSSER,  PhilHealthEE,  PhilHealthER,  PagIbigEE,  AllowablePaternityLeave,  HiredDate,  Inactive,  ExitDate,  PagIbigER,  PagIbigNo,  PhilHealthNo,  SSSEC,  `Level`,  DateCreated,  ApprovedDate,  Approved,  Approvedby,  Preparedby,  Checkedby,  CheckedDate,  Checked,  Superior,  `Position`,  Employer,  IDNo,  AccountNo,  LateFixPenalty,  DoNotUpdateContributions,  ExcludeContributionOnPayroll,  Birthday,  Bank,  NoLateDeduction,  IncludeBreakLate,  GracePeriodMins,  WithAdditionalBreaks,  TaxPeriods,  PresetMoNonTax,  PreCalMoTaxable,  CalMonthly,  TaxPerPeriod,  Superior2,  BasicMonthlyPay,  BasicDailyPay,  DeMinimis,  ExcludeBio";
$proto0["m_strFrom"] = "FROM demo_user";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY user_name";
	
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
	"m_strName" => "user_id",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto6["m_sql"] = "user_id";
$proto6["m_srcTableName"] = "demo_user_open";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto8["m_sql"] = "user_name";
$proto8["m_srcTableName"] = "demo_user_open";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Photo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto10["m_sql"] = "Photo";
$proto10["m_srcTableName"] = "demo_user_open";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto12["m_sql"] = "SSSNo";
$proto12["m_srcTableName"] = "demo_user_open";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TIN",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto14["m_sql"] = "TIN";
$proto14["m_srcTableName"] = "demo_user_open";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Mobile",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto16["m_sql"] = "Mobile";
$proto16["m_srcTableName"] = "demo_user_open";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Address",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto18["m_sql"] = "Address";
$proto18["m_srcTableName"] = "demo_user_open";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto20["m_sql"] = "Email";
$proto20["m_srcTableName"] = "demo_user_open";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeType",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto22["m_sql"] = "EmployeeType";
$proto22["m_srcTableName"] = "demo_user_open";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto24["m_sql"] = "EmployeeID";
$proto24["m_srcTableName"] = "demo_user_open";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto26["m_sql"] = "Division";
$proto26["m_srcTableName"] = "demo_user_open";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto28["m_sql"] = "Status";
$proto28["m_srcTableName"] = "demo_user_open";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto30["m_sql"] = "Department";
$proto30["m_srcTableName"] = "demo_user_open";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableSickLeave",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto32["m_sql"] = "AllowableSickLeave";
$proto32["m_srcTableName"] = "demo_user_open";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableVacationLeave",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto34["m_sql"] = "AllowableVacationLeave";
$proto34["m_srcTableName"] = "demo_user_open";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableEmergencyLeave",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto36["m_sql"] = "AllowableEmergencyLeave";
$proto36["m_srcTableName"] = "demo_user_open";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSEE",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto38["m_sql"] = "SSSEE";
$proto38["m_srcTableName"] = "demo_user_open";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSER",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto40["m_sql"] = "SSSER";
$proto40["m_srcTableName"] = "demo_user_open";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "PhilHealthEE",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto42["m_sql"] = "PhilHealthEE";
$proto42["m_srcTableName"] = "demo_user_open";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "PhilHealthER",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto44["m_sql"] = "PhilHealthER";
$proto44["m_srcTableName"] = "demo_user_open";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbigEE",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto46["m_sql"] = "PagIbigEE";
$proto46["m_srcTableName"] = "demo_user_open";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowablePaternityLeave",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto48["m_sql"] = "AllowablePaternityLeave";
$proto48["m_srcTableName"] = "demo_user_open";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "HiredDate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto50["m_sql"] = "HiredDate";
$proto50["m_srcTableName"] = "demo_user_open";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Inactive",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto52["m_sql"] = "Inactive";
$proto52["m_srcTableName"] = "demo_user_open";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "ExitDate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto54["m_sql"] = "ExitDate";
$proto54["m_srcTableName"] = "demo_user_open";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbigER",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto56["m_sql"] = "PagIbigER";
$proto56["m_srcTableName"] = "demo_user_open";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbigNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto58["m_sql"] = "PagIbigNo";
$proto58["m_srcTableName"] = "demo_user_open";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "PhilHealthNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto60["m_sql"] = "PhilHealthNo";
$proto60["m_srcTableName"] = "demo_user_open";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSEC",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto62["m_sql"] = "SSSEC";
$proto62["m_srcTableName"] = "demo_user_open";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Level",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto64["m_sql"] = "`Level`";
$proto64["m_srcTableName"] = "demo_user_open";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "DateCreated",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto66["m_sql"] = "DateCreated";
$proto66["m_srcTableName"] = "demo_user_open";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedDate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto68["m_sql"] = "ApprovedDate";
$proto68["m_srcTableName"] = "demo_user_open";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "Approved",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto70["m_sql"] = "Approved";
$proto70["m_srcTableName"] = "demo_user_open";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Approvedby",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto72["m_sql"] = "Approvedby";
$proto72["m_srcTableName"] = "demo_user_open";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Preparedby",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto74["m_sql"] = "Preparedby";
$proto74["m_srcTableName"] = "demo_user_open";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Checkedby",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto76["m_sql"] = "Checkedby";
$proto76["m_srcTableName"] = "demo_user_open";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "CheckedDate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto78["m_sql"] = "CheckedDate";
$proto78["m_srcTableName"] = "demo_user_open";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "Checked",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto80["m_sql"] = "Checked";
$proto80["m_srcTableName"] = "demo_user_open";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto82["m_sql"] = "Superior";
$proto82["m_srcTableName"] = "demo_user_open";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Position",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto84["m_sql"] = "`Position`";
$proto84["m_srcTableName"] = "demo_user_open";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto86["m_sql"] = "Employer";
$proto86["m_srcTableName"] = "demo_user_open";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "IDNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto88["m_sql"] = "IDNo";
$proto88["m_srcTableName"] = "demo_user_open";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto90["m_sql"] = "AccountNo";
$proto90["m_srcTableName"] = "demo_user_open";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "LateFixPenalty",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto92["m_sql"] = "LateFixPenalty";
$proto92["m_srcTableName"] = "demo_user_open";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "DoNotUpdateContributions",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto94["m_sql"] = "DoNotUpdateContributions";
$proto94["m_srcTableName"] = "demo_user_open";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "ExcludeContributionOnPayroll",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto96["m_sql"] = "ExcludeContributionOnPayroll";
$proto96["m_srcTableName"] = "demo_user_open";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "Birthday",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto98["m_sql"] = "Birthday";
$proto98["m_srcTableName"] = "demo_user_open";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "Bank",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto100["m_sql"] = "Bank";
$proto100["m_srcTableName"] = "demo_user_open";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "NoLateDeduction",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto102["m_sql"] = "NoLateDeduction";
$proto102["m_srcTableName"] = "demo_user_open";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "IncludeBreakLate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto104["m_sql"] = "IncludeBreakLate";
$proto104["m_srcTableName"] = "demo_user_open";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "GracePeriodMins",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto106["m_sql"] = "GracePeriodMins";
$proto106["m_srcTableName"] = "demo_user_open";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "WithAdditionalBreaks",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto108["m_sql"] = "WithAdditionalBreaks";
$proto108["m_srcTableName"] = "demo_user_open";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "TaxPeriods",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto110["m_sql"] = "TaxPeriods";
$proto110["m_srcTableName"] = "demo_user_open";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "PresetMoNonTax",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto112["m_sql"] = "PresetMoNonTax";
$proto112["m_srcTableName"] = "demo_user_open";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "PreCalMoTaxable",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto114["m_sql"] = "PreCalMoTaxable";
$proto114["m_srcTableName"] = "demo_user_open";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "CalMonthly",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto116["m_sql"] = "CalMonthly";
$proto116["m_srcTableName"] = "demo_user_open";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "TaxPerPeriod",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto118["m_sql"] = "TaxPerPeriod";
$proto118["m_srcTableName"] = "demo_user_open";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior2",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto120["m_sql"] = "Superior2";
$proto120["m_srcTableName"] = "demo_user_open";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "BasicMonthlyPay",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto122["m_sql"] = "BasicMonthlyPay";
$proto122["m_srcTableName"] = "demo_user_open";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "BasicDailyPay",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto124["m_sql"] = "BasicDailyPay";
$proto124["m_srcTableName"] = "demo_user_open";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "DeMinimis",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto126["m_sql"] = "DeMinimis";
$proto126["m_srcTableName"] = "demo_user_open";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "ExcludeBio",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto128["m_sql"] = "ExcludeBio";
$proto128["m_srcTableName"] = "demo_user_open";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto130=array();
$proto130["m_link"] = "SQLL_MAIN";
			$proto131=array();
$proto131["m_strName"] = "demo_user";
$proto131["m_srcTableName"] = "demo_user_open";
$proto131["m_columns"] = array();
$proto131["m_columns"][] = "user_id";
$proto131["m_columns"][] = "user_name";
$proto131["m_columns"][] = "Photo";
$proto131["m_columns"][] = "user_photo";
$proto131["m_columns"][] = "SSSNo";
$proto131["m_columns"][] = "TIN";
$proto131["m_columns"][] = "Mobile";
$proto131["m_columns"][] = "Address";
$proto131["m_columns"][] = "Email";
$proto131["m_columns"][] = "EmployeeType";
$proto131["m_columns"][] = "BasicMonthlyPay";
$proto131["m_columns"][] = "BasicDailyPay";
$proto131["m_columns"][] = "EmployeeID";
$proto131["m_columns"][] = "Division";
$proto131["m_columns"][] = "Status";
$proto131["m_columns"][] = "Department";
$proto131["m_columns"][] = "AllowableSickLeave";
$proto131["m_columns"][] = "AllowableVacationLeave";
$proto131["m_columns"][] = "AllowableEmergencyLeave";
$proto131["m_columns"][] = "SSSEE";
$proto131["m_columns"][] = "SSSER";
$proto131["m_columns"][] = "PhilHealthEE";
$proto131["m_columns"][] = "PhilHealthER";
$proto131["m_columns"][] = "PagIbigEE";
$proto131["m_columns"][] = "AllowablePaternityLeave";
$proto131["m_columns"][] = "HiredDate";
$proto131["m_columns"][] = "Inactive";
$proto131["m_columns"][] = "ExitDate";
$proto131["m_columns"][] = "PagIbigER";
$proto131["m_columns"][] = "PagIbigNo";
$proto131["m_columns"][] = "PhilHealthNo";
$proto131["m_columns"][] = "SSSEC";
$proto131["m_columns"][] = "Filex";
$proto131["m_columns"][] = "PresetTax";
$proto131["m_columns"][] = "AgentSharePerDay";
$proto131["m_columns"][] = "AllowancePerDay";
$proto131["m_columns"][] = "DeMinimis";
$proto131["m_columns"][] = "Level";
$proto131["m_columns"][] = "DateCreated";
$proto131["m_columns"][] = "ApprovedDate";
$proto131["m_columns"][] = "Approved";
$proto131["m_columns"][] = "Approvedby";
$proto131["m_columns"][] = "Preparedby";
$proto131["m_columns"][] = "Checkedby";
$proto131["m_columns"][] = "CheckedDate";
$proto131["m_columns"][] = "Checked";
$proto131["m_columns"][] = "AdjustedMonthlyPay";
$proto131["m_columns"][] = "AdjustedDailyPay";
$proto131["m_columns"][] = "Superior";
$proto131["m_columns"][] = "Position";
$proto131["m_columns"][] = "Employer";
$proto131["m_columns"][] = "IDNo";
$proto131["m_columns"][] = "AccountNo";
$proto131["m_columns"][] = "LogID";
$proto131["m_columns"][] = "LateFixPenalty";
$proto131["m_columns"][] = "DoNotUpdateContributions";
$proto131["m_columns"][] = "ExcludeContributionOnPayroll";
$proto131["m_columns"][] = "Birthday";
$proto131["m_columns"][] = "Bank";
$proto131["m_columns"][] = "NoLateDeduction";
$proto131["m_columns"][] = "IncludeBreakLate";
$proto131["m_columns"][] = "GracePeriodMins";
$proto131["m_columns"][] = "WithAdditionalBreaks";
$proto131["m_columns"][] = "TaxPeriods";
$proto131["m_columns"][] = "PresetMoNonTax";
$proto131["m_columns"][] = "PreCalMoTaxable";
$proto131["m_columns"][] = "CalMonthly";
$proto131["m_columns"][] = "TaxPerPeriod";
$proto131["m_columns"][] = "Superior2";
$proto131["m_columns"][] = "ExcludeBio";
$obj = new SQLTable($proto131);

$proto130["m_table"] = $obj;
$proto130["m_sql"] = "demo_user";
$proto130["m_alias"] = "";
$proto130["m_srcTableName"] = "demo_user_open";
$proto132=array();
$proto132["m_sql"] = "";
$proto132["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto132["m_column"]=$obj;
$proto132["m_contained"] = array();
$proto132["m_strCase"] = "";
$proto132["m_havingmode"] = false;
$proto132["m_inBrackets"] = false;
$proto132["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto132);

$proto130["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto130);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto134=array();
						$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user_open"
));

$proto134["m_column"]=$obj;
$proto134["m_bAsc"] = 1;
$proto134["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto134);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="demo_user_open";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_demo_user_open = createSqlQuery_demo_user_open();


	
		;

																																																														

$tdatademo_user_open[".sqlquery"] = $queryData_demo_user_open;

include_once(getabspath("include/demo_user_open_events.php"));
$tableEvents["demo_user_open"] = new eventclass_demo_user_open;
$tdatademo_user_open[".hasEvents"] = true;

?>