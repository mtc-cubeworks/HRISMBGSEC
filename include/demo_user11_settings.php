<?php
require_once(getabspath("classes/cipherer.php"));




$tdatademo_user11 = array();
	$tdatademo_user11[".truncateText"] = true;
	$tdatademo_user11[".NumberOfChars"] = 80;
	$tdatademo_user11[".ShortName"] = "demo_user11";
	$tdatademo_user11[".OwnerID"] = "";
	$tdatademo_user11[".OriginalTable"] = "demo_user";

//	field labels
$fieldLabelsdemo_user11 = array();
$fieldToolTipsdemo_user11 = array();
$pageTitlesdemo_user11 = array();
$placeHoldersdemo_user11 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdemo_user11["English"] = array();
	$fieldToolTipsdemo_user11["English"] = array();
	$placeHoldersdemo_user11["English"] = array();
	$pageTitlesdemo_user11["English"] = array();
	$fieldLabelsdemo_user11["English"]["user_id"] = "User Id";
	$fieldToolTipsdemo_user11["English"]["user_id"] = "";
	$placeHoldersdemo_user11["English"]["user_id"] = "";
	$fieldLabelsdemo_user11["English"]["user_name"] = "Employee";
	$fieldToolTipsdemo_user11["English"]["user_name"] = "";
	$placeHoldersdemo_user11["English"]["user_name"] = "";
	$fieldLabelsdemo_user11["English"]["Photo"] = "Photo";
	$fieldToolTipsdemo_user11["English"]["Photo"] = "";
	$placeHoldersdemo_user11["English"]["Photo"] = "";
	$fieldLabelsdemo_user11["English"]["EmployeeType"] = "Wage Type";
	$fieldToolTipsdemo_user11["English"]["EmployeeType"] = "";
	$placeHoldersdemo_user11["English"]["EmployeeType"] = "";
	$fieldLabelsdemo_user11["English"]["SSSNo"] = "SSS No";
	$fieldToolTipsdemo_user11["English"]["SSSNo"] = "";
	$placeHoldersdemo_user11["English"]["SSSNo"] = "";
	$fieldLabelsdemo_user11["English"]["TIN"] = "TIN";
	$fieldToolTipsdemo_user11["English"]["TIN"] = "";
	$placeHoldersdemo_user11["English"]["TIN"] = "";
	$fieldLabelsdemo_user11["English"]["Mobile"] = "Mobile";
	$fieldToolTipsdemo_user11["English"]["Mobile"] = "";
	$placeHoldersdemo_user11["English"]["Mobile"] = "";
	$fieldLabelsdemo_user11["English"]["Address"] = "Address";
	$fieldToolTipsdemo_user11["English"]["Address"] = "";
	$placeHoldersdemo_user11["English"]["Address"] = "";
	$fieldLabelsdemo_user11["English"]["Email"] = "Email";
	$fieldToolTipsdemo_user11["English"]["Email"] = "";
	$placeHoldersdemo_user11["English"]["Email"] = "";
	$fieldLabelsdemo_user11["English"]["BasicMonthlyPay"] = "Basic Monthly Pay";
	$fieldToolTipsdemo_user11["English"]["BasicMonthlyPay"] = "";
	$placeHoldersdemo_user11["English"]["BasicMonthlyPay"] = "";
	$fieldLabelsdemo_user11["English"]["BasicDailyPay"] = "Basic Daily Pay";
	$fieldToolTipsdemo_user11["English"]["BasicDailyPay"] = "";
	$placeHoldersdemo_user11["English"]["BasicDailyPay"] = "";
	$fieldLabelsdemo_user11["English"]["EmployeeID"] = "Biometric ID";
	$fieldToolTipsdemo_user11["English"]["EmployeeID"] = "";
	$placeHoldersdemo_user11["English"]["EmployeeID"] = "";
	$fieldLabelsdemo_user11["English"]["Division"] = "Division";
	$fieldToolTipsdemo_user11["English"]["Division"] = "";
	$placeHoldersdemo_user11["English"]["Division"] = "";
	$fieldLabelsdemo_user11["English"]["Status"] = "Status";
	$fieldToolTipsdemo_user11["English"]["Status"] = "";
	$placeHoldersdemo_user11["English"]["Status"] = "";
	$fieldLabelsdemo_user11["English"]["Department"] = "Department";
	$fieldToolTipsdemo_user11["English"]["Department"] = "";
	$placeHoldersdemo_user11["English"]["Department"] = "";
	$fieldLabelsdemo_user11["English"]["AllowableSickLeave"] = "SL";
	$fieldToolTipsdemo_user11["English"]["AllowableSickLeave"] = "";
	$placeHoldersdemo_user11["English"]["AllowableSickLeave"] = "";
	$fieldLabelsdemo_user11["English"]["AllowableVacationLeave"] = "VL";
	$fieldToolTipsdemo_user11["English"]["AllowableVacationLeave"] = "";
	$placeHoldersdemo_user11["English"]["AllowableVacationLeave"] = "";
	$fieldLabelsdemo_user11["English"]["AllowableEmergencyLeave"] = "EL";
	$fieldToolTipsdemo_user11["English"]["AllowableEmergencyLeave"] = "";
	$placeHoldersdemo_user11["English"]["AllowableEmergencyLeave"] = "";
	$fieldLabelsdemo_user11["English"]["SSSEE"] = "SSS EE";
	$fieldToolTipsdemo_user11["English"]["SSSEE"] = "";
	$placeHoldersdemo_user11["English"]["SSSEE"] = "";
	$fieldLabelsdemo_user11["English"]["SSSER"] = "SSS ER";
	$fieldToolTipsdemo_user11["English"]["SSSER"] = "";
	$placeHoldersdemo_user11["English"]["SSSER"] = "";
	$fieldLabelsdemo_user11["English"]["PhilHealthEE"] = "PHIC EE";
	$fieldToolTipsdemo_user11["English"]["PhilHealthEE"] = "";
	$placeHoldersdemo_user11["English"]["PhilHealthEE"] = "";
	$fieldLabelsdemo_user11["English"]["PhilHealthER"] = "PHIC ER";
	$fieldToolTipsdemo_user11["English"]["PhilHealthER"] = "";
	$placeHoldersdemo_user11["English"]["PhilHealthER"] = "";
	$fieldLabelsdemo_user11["English"]["AllowablePaternityLeave"] = "PL";
	$fieldToolTipsdemo_user11["English"]["AllowablePaternityLeave"] = "";
	$placeHoldersdemo_user11["English"]["AllowablePaternityLeave"] = "";
	$fieldLabelsdemo_user11["English"]["HiredDate"] = "Hired Date";
	$fieldToolTipsdemo_user11["English"]["HiredDate"] = "";
	$placeHoldersdemo_user11["English"]["HiredDate"] = "";
	$fieldLabelsdemo_user11["English"]["ExitDate"] = "Exit Date";
	$fieldToolTipsdemo_user11["English"]["ExitDate"] = "";
	$placeHoldersdemo_user11["English"]["ExitDate"] = "";
	$fieldLabelsdemo_user11["English"]["Inactive"] = "Inactive";
	$fieldToolTipsdemo_user11["English"]["Inactive"] = "";
	$placeHoldersdemo_user11["English"]["Inactive"] = "";
	$fieldLabelsdemo_user11["English"]["PagIbigEE"] = "HDMF EE";
	$fieldToolTipsdemo_user11["English"]["PagIbigEE"] = "";
	$placeHoldersdemo_user11["English"]["PagIbigEE"] = "";
	$fieldLabelsdemo_user11["English"]["PagIbigER"] = "HDMF ER";
	$fieldToolTipsdemo_user11["English"]["PagIbigER"] = "";
	$placeHoldersdemo_user11["English"]["PagIbigER"] = "";
	$fieldLabelsdemo_user11["English"]["PagIbigNo"] = "HDMF No";
	$fieldToolTipsdemo_user11["English"]["PagIbigNo"] = "";
	$placeHoldersdemo_user11["English"]["PagIbigNo"] = "";
	$fieldLabelsdemo_user11["English"]["PhilHealthNo"] = "PHIC No";
	$fieldToolTipsdemo_user11["English"]["PhilHealthNo"] = "";
	$placeHoldersdemo_user11["English"]["PhilHealthNo"] = "";
	$fieldLabelsdemo_user11["English"]["SSSEC"] = "SSS EC";
	$fieldToolTipsdemo_user11["English"]["SSSEC"] = "";
	$placeHoldersdemo_user11["English"]["SSSEC"] = "";
	$fieldLabelsdemo_user11["English"]["Level"] = "Level";
	$fieldToolTipsdemo_user11["English"]["Level"] = "";
	$placeHoldersdemo_user11["English"]["Level"] = "";
	$fieldLabelsdemo_user11["English"]["DateCreated"] = "Date Created";
	$fieldToolTipsdemo_user11["English"]["DateCreated"] = "";
	$placeHoldersdemo_user11["English"]["DateCreated"] = "";
	$fieldLabelsdemo_user11["English"]["ApprovedDate"] = "Approved Date";
	$fieldToolTipsdemo_user11["English"]["ApprovedDate"] = "";
	$placeHoldersdemo_user11["English"]["ApprovedDate"] = "";
	$fieldLabelsdemo_user11["English"]["Approved"] = "Approved";
	$fieldToolTipsdemo_user11["English"]["Approved"] = "";
	$placeHoldersdemo_user11["English"]["Approved"] = "";
	$fieldLabelsdemo_user11["English"]["Approvedby"] = "Approvedby";
	$fieldToolTipsdemo_user11["English"]["Approvedby"] = "";
	$placeHoldersdemo_user11["English"]["Approvedby"] = "";
	$fieldLabelsdemo_user11["English"]["Preparedby"] = "Preparedby";
	$fieldToolTipsdemo_user11["English"]["Preparedby"] = "";
	$placeHoldersdemo_user11["English"]["Preparedby"] = "";
	$fieldLabelsdemo_user11["English"]["Checkedby"] = "Checkedby";
	$fieldToolTipsdemo_user11["English"]["Checkedby"] = "";
	$placeHoldersdemo_user11["English"]["Checkedby"] = "";
	$fieldLabelsdemo_user11["English"]["CheckedDate"] = "Checked Date";
	$fieldToolTipsdemo_user11["English"]["CheckedDate"] = "";
	$placeHoldersdemo_user11["English"]["CheckedDate"] = "";
	$fieldLabelsdemo_user11["English"]["Checked"] = "Checked";
	$fieldToolTipsdemo_user11["English"]["Checked"] = "";
	$placeHoldersdemo_user11["English"]["Checked"] = "";
	$fieldLabelsdemo_user11["English"]["Position"] = "Position";
	$fieldToolTipsdemo_user11["English"]["Position"] = "";
	$placeHoldersdemo_user11["English"]["Position"] = "";
	$fieldLabelsdemo_user11["English"]["Superior"] = "Supervisor";
	$fieldToolTipsdemo_user11["English"]["Superior"] = "";
	$placeHoldersdemo_user11["English"]["Superior"] = "";
	$fieldLabelsdemo_user11["English"]["Employer"] = "Employer";
	$fieldToolTipsdemo_user11["English"]["Employer"] = "";
	$placeHoldersdemo_user11["English"]["Employer"] = "";
	$fieldLabelsdemo_user11["English"]["IDNo"] = "Employee ID";
	$fieldToolTipsdemo_user11["English"]["IDNo"] = "";
	$placeHoldersdemo_user11["English"]["IDNo"] = "";
	$fieldLabelsdemo_user11["English"]["AccountNo"] = "Account No";
	$fieldToolTipsdemo_user11["English"]["AccountNo"] = "";
	$placeHoldersdemo_user11["English"]["AccountNo"] = "";
	$fieldLabelsdemo_user11["English"]["LateFixPenalty"] = "Late Fix Penalty";
	$fieldToolTipsdemo_user11["English"]["LateFixPenalty"] = "";
	$placeHoldersdemo_user11["English"]["LateFixPenalty"] = "";
	$fieldLabelsdemo_user11["English"]["DoNotUpdateContributions"] = "Do Not Update Contributions";
	$fieldToolTipsdemo_user11["English"]["DoNotUpdateContributions"] = "";
	$placeHoldersdemo_user11["English"]["DoNotUpdateContributions"] = "";
	$fieldLabelsdemo_user11["English"]["ExcludeContributionOnPayroll"] = "Exclude Contribution On Payroll";
	$fieldToolTipsdemo_user11["English"]["ExcludeContributionOnPayroll"] = "";
	$placeHoldersdemo_user11["English"]["ExcludeContributionOnPayroll"] = "";
	$fieldLabelsdemo_user11["English"]["Bank"] = "Bank";
	$fieldToolTipsdemo_user11["English"]["Bank"] = "";
	$placeHoldersdemo_user11["English"]["Bank"] = "";
	$fieldLabelsdemo_user11["English"]["Birthday"] = "Birthday";
	$fieldToolTipsdemo_user11["English"]["Birthday"] = "";
	$placeHoldersdemo_user11["English"]["Birthday"] = "";
	$fieldLabelsdemo_user11["English"]["DeMinimis"] = "De Minimis";
	$fieldToolTipsdemo_user11["English"]["DeMinimis"] = "";
	$placeHoldersdemo_user11["English"]["DeMinimis"] = "";
	$fieldLabelsdemo_user11["English"]["NoLateDeduction"] = "No Late Deduction";
	$fieldToolTipsdemo_user11["English"]["NoLateDeduction"] = "";
	$placeHoldersdemo_user11["English"]["NoLateDeduction"] = "";
	$fieldLabelsdemo_user11["English"]["IncludeBreakLate"] = "Include Break Late";
	$fieldToolTipsdemo_user11["English"]["IncludeBreakLate"] = "";
	$placeHoldersdemo_user11["English"]["IncludeBreakLate"] = "";
	$fieldLabelsdemo_user11["English"]["GracePeriodMins"] = "Grace Period Mins";
	$fieldToolTipsdemo_user11["English"]["GracePeriodMins"] = "";
	$placeHoldersdemo_user11["English"]["GracePeriodMins"] = "";
	$fieldLabelsdemo_user11["English"]["TaxPeriods"] = "Tax Periods";
	$fieldToolTipsdemo_user11["English"]["TaxPeriods"] = "";
	$placeHoldersdemo_user11["English"]["TaxPeriods"] = "";
	$fieldLabelsdemo_user11["English"]["PresetMoNonTax"] = "Preset Monthly Add'l Taxable";
	$fieldToolTipsdemo_user11["English"]["PresetMoNonTax"] = "";
	$placeHoldersdemo_user11["English"]["PresetMoNonTax"] = "";
	$fieldLabelsdemo_user11["English"]["PreCalMoTaxable"] = "Pre-Calculated Monthly Taxable";
	$fieldToolTipsdemo_user11["English"]["PreCalMoTaxable"] = "";
	$placeHoldersdemo_user11["English"]["PreCalMoTaxable"] = "";
	$fieldLabelsdemo_user11["English"]["CalMonthly"] = "Calculated Monthly Income";
	$fieldToolTipsdemo_user11["English"]["CalMonthly"] = "";
	$placeHoldersdemo_user11["English"]["CalMonthly"] = "";
	$fieldLabelsdemo_user11["English"]["WithAdditionalBreaks"] = "With Additional Breaks";
	$fieldToolTipsdemo_user11["English"]["WithAdditionalBreaks"] = "";
	$placeHoldersdemo_user11["English"]["WithAdditionalBreaks"] = "";
	$fieldLabelsdemo_user11["English"]["TaxPerPeriod"] = "Tax Per Period";
	$fieldToolTipsdemo_user11["English"]["TaxPerPeriod"] = "";
	$placeHoldersdemo_user11["English"]["TaxPerPeriod"] = "";
	$fieldLabelsdemo_user11["English"]["Superior2"] = "Manager";
	$fieldToolTipsdemo_user11["English"]["Superior2"] = "";
	$placeHoldersdemo_user11["English"]["Superior2"] = "";
	$fieldLabelsdemo_user11["English"]["ExcludeBio"] = "Exclude Biometric Login";
	$fieldToolTipsdemo_user11["English"]["ExcludeBio"] = "";
	$placeHoldersdemo_user11["English"]["ExcludeBio"] = "";
	if (count($fieldToolTipsdemo_user11["English"]))
		$tdatademo_user11[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdemo_user11[""] = array();
	$fieldToolTipsdemo_user11[""] = array();
	$placeHoldersdemo_user11[""] = array();
	$pageTitlesdemo_user11[""] = array();
	$fieldLabelsdemo_user11[""]["TaxPeriods"] = "Tax Periods";
	$fieldToolTipsdemo_user11[""]["TaxPeriods"] = "";
	$placeHoldersdemo_user11[""]["TaxPeriods"] = "";
	$fieldLabelsdemo_user11[""]["PresetMoNonTax"] = "Preset Mo Non Tax";
	$fieldToolTipsdemo_user11[""]["PresetMoNonTax"] = "";
	$placeHoldersdemo_user11[""]["PresetMoNonTax"] = "";
	$fieldLabelsdemo_user11[""]["PreCalMoTaxable"] = "Pre Cal Mo Taxable";
	$fieldToolTipsdemo_user11[""]["PreCalMoTaxable"] = "";
	$placeHoldersdemo_user11[""]["PreCalMoTaxable"] = "";
	$fieldLabelsdemo_user11[""]["CalMonthly"] = "Cal Monthly";
	$fieldToolTipsdemo_user11[""]["CalMonthly"] = "";
	$placeHoldersdemo_user11[""]["CalMonthly"] = "";
	$fieldLabelsdemo_user11[""]["WithAdditionalBreaks"] = "With Additional Breaks";
	$fieldToolTipsdemo_user11[""]["WithAdditionalBreaks"] = "";
	$placeHoldersdemo_user11[""]["WithAdditionalBreaks"] = "";
	$fieldLabelsdemo_user11[""]["TaxPerPeriod"] = "Tax Per Period";
	$fieldToolTipsdemo_user11[""]["TaxPerPeriod"] = "";
	$placeHoldersdemo_user11[""]["TaxPerPeriod"] = "";
	$fieldLabelsdemo_user11[""]["Superior2"] = "Superior2";
	$fieldToolTipsdemo_user11[""]["Superior2"] = "";
	$placeHoldersdemo_user11[""]["Superior2"] = "";
	$fieldLabelsdemo_user11[""]["ExcludeBio"] = "Exclude Bio";
	$fieldToolTipsdemo_user11[""]["ExcludeBio"] = "";
	$placeHoldersdemo_user11[""]["ExcludeBio"] = "";
	if (count($fieldToolTipsdemo_user11[""]))
		$tdatademo_user11[".isUseToolTips"] = true;
}


	$tdatademo_user11[".NCSearch"] = true;



$tdatademo_user11[".shortTableName"] = "demo_user11";
$tdatademo_user11[".nSecOptions"] = 0;
$tdatademo_user11[".recsPerRowPrint"] = 1;
$tdatademo_user11[".mainTableOwnerID"] = "";
$tdatademo_user11[".moveNext"] = 1;
$tdatademo_user11[".entityType"] = 1;

$tdatademo_user11[".strOriginalTableName"] = "demo_user";

	



$tdatademo_user11[".showAddInPopup"] = false;

$tdatademo_user11[".showEditInPopup"] = false;

$tdatademo_user11[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatademo_user11[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatademo_user11[".fieldsForRegister"] = array();

$tdatademo_user11[".listAjax"] = false;

	$tdatademo_user11[".audit"] = false;

	$tdatademo_user11[".locking"] = false;

$tdatademo_user11[".edit"] = true;
$tdatademo_user11[".afterEditAction"] = 1;
$tdatademo_user11[".closePopupAfterEdit"] = 1;
$tdatademo_user11[".afterEditActionDetTable"] = "";


$tdatademo_user11[".list"] = true;

$tdatademo_user11[".inlineEdit"] = true;

$tdatademo_user11[".updateSelected"] = true;

$tdatademo_user11[".reorderRecordsByHeader"] = true;


$tdatademo_user11[".exportFormatting"] = 2;
$tdatademo_user11[".exportDelimiter"] = ",";
		
$tdatademo_user11[".view"] = true;

$tdatademo_user11[".import"] = true;

$tdatademo_user11[".exportTo"] = true;

$tdatademo_user11[".printFriendly"] = true;

$tdatademo_user11[".delete"] = true;

$tdatademo_user11[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatademo_user11[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatademo_user11[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatademo_user11[".searchSaving"] = false;
//

$tdatademo_user11[".showSearchPanel"] = true;
		$tdatademo_user11[".flexibleSearch"] = true;

$tdatademo_user11[".isUseAjaxSuggest"] = true;

$tdatademo_user11[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																												
							
							
																																

$tdatademo_user11[".ajaxCodeSnippetAdded"] = false;

$tdatademo_user11[".buttonsAdded"] = true;

$tdatademo_user11[".addPageEvents"] = true;

// use timepicker for search panel
$tdatademo_user11[".isUseTimeForSearch"] = false;



$tdatademo_user11[".badgeColor"] = "3C4D51";

$tdatademo_user11[".detailsLinksOnList"] = "1";

$tdatademo_user11[".allSearchFields"] = array();
$tdatademo_user11[".filterFields"] = array();
$tdatademo_user11[".requiredSearchFields"] = array();

$tdatademo_user11[".allSearchFields"][] = "EmployeeID";
	$tdatademo_user11[".allSearchFields"][] = "IDNo";
	$tdatademo_user11[".allSearchFields"][] = "Photo";
	$tdatademo_user11[".allSearchFields"][] = "user_name";
	$tdatademo_user11[".allSearchFields"][] = "Employer";
	$tdatademo_user11[".allSearchFields"][] = "Division";
	$tdatademo_user11[".allSearchFields"][] = "Department";
	$tdatademo_user11[".allSearchFields"][] = "HiredDate";
	$tdatademo_user11[".allSearchFields"][] = "Inactive";
	$tdatademo_user11[".allSearchFields"][] = "ExitDate";
	$tdatademo_user11[".allSearchFields"][] = "Status";
	$tdatademo_user11[".allSearchFields"][] = "Position";
	$tdatademo_user11[".allSearchFields"][] = "Superior";
	$tdatademo_user11[".allSearchFields"][] = "Superior2";
	$tdatademo_user11[".allSearchFields"][] = "Mobile";
	$tdatademo_user11[".allSearchFields"][] = "Address";
	$tdatademo_user11[".allSearchFields"][] = "Birthday";
	$tdatademo_user11[".allSearchFields"][] = "Email";
	$tdatademo_user11[".allSearchFields"][] = "SSSNo";
	$tdatademo_user11[".allSearchFields"][] = "PagIbigNo";
	$tdatademo_user11[".allSearchFields"][] = "PhilHealthNo";
	$tdatademo_user11[".allSearchFields"][] = "TIN";
	$tdatademo_user11[".allSearchFields"][] = "Bank";
	$tdatademo_user11[".allSearchFields"][] = "AccountNo";
	$tdatademo_user11[".allSearchFields"][] = "ExcludeBio";
	$tdatademo_user11[".allSearchFields"][] = "AllowableSickLeave";
	$tdatademo_user11[".allSearchFields"][] = "AllowableVacationLeave";
	$tdatademo_user11[".allSearchFields"][] = "AllowableEmergencyLeave";
	$tdatademo_user11[".allSearchFields"][] = "AllowablePaternityLeave";
	$tdatademo_user11[".allSearchFields"][] = "EmployeeType";
	$tdatademo_user11[".allSearchFields"][] = "Level";
	$tdatademo_user11[".allSearchFields"][] = "DeMinimis";
	$tdatademo_user11[".allSearchFields"][] = "BasicMonthlyPay";
	$tdatademo_user11[".allSearchFields"][] = "BasicDailyPay";
	$tdatademo_user11[".allSearchFields"][] = "ExcludeContributionOnPayroll";
	$tdatademo_user11[".allSearchFields"][] = "DoNotUpdateContributions";
	$tdatademo_user11[".allSearchFields"][] = "SSSEE";
	$tdatademo_user11[".allSearchFields"][] = "SSSER";
	$tdatademo_user11[".allSearchFields"][] = "SSSEC";
	$tdatademo_user11[".allSearchFields"][] = "PhilHealthEE";
	$tdatademo_user11[".allSearchFields"][] = "PhilHealthER";
	$tdatademo_user11[".allSearchFields"][] = "PagIbigEE";
	$tdatademo_user11[".allSearchFields"][] = "PagIbigER";
	$tdatademo_user11[".allSearchFields"][] = "NoLateDeduction";
	$tdatademo_user11[".allSearchFields"][] = "GracePeriodMins";
	$tdatademo_user11[".allSearchFields"][] = "WithAdditionalBreaks";
	$tdatademo_user11[".allSearchFields"][] = "IncludeBreakLate";
	$tdatademo_user11[".allSearchFields"][] = "LateFixPenalty";
	$tdatademo_user11[".allSearchFields"][] = "CalMonthly";
	$tdatademo_user11[".allSearchFields"][] = "PresetMoNonTax";
	$tdatademo_user11[".allSearchFields"][] = "PreCalMoTaxable";
	$tdatademo_user11[".allSearchFields"][] = "TaxPeriods";
	$tdatademo_user11[".allSearchFields"][] = "TaxPerPeriod";
	$tdatademo_user11[".allSearchFields"][] = "user_id";
	$tdatademo_user11[".allSearchFields"][] = "Preparedby";
	$tdatademo_user11[".allSearchFields"][] = "Checked";
	$tdatademo_user11[".allSearchFields"][] = "Checkedby";
	$tdatademo_user11[".allSearchFields"][] = "CheckedDate";
	$tdatademo_user11[".allSearchFields"][] = "Approved";
	$tdatademo_user11[".allSearchFields"][] = "Approvedby";
	$tdatademo_user11[".allSearchFields"][] = "ApprovedDate";
	$tdatademo_user11[".allSearchFields"][] = "DateCreated";
	

$tdatademo_user11[".googleLikeFields"] = array();
$tdatademo_user11[".googleLikeFields"][] = "user_id";
$tdatademo_user11[".googleLikeFields"][] = "user_name";
$tdatademo_user11[".googleLikeFields"][] = "Photo";
$tdatademo_user11[".googleLikeFields"][] = "SSSNo";
$tdatademo_user11[".googleLikeFields"][] = "TIN";
$tdatademo_user11[".googleLikeFields"][] = "Mobile";
$tdatademo_user11[".googleLikeFields"][] = "Address";
$tdatademo_user11[".googleLikeFields"][] = "Email";
$tdatademo_user11[".googleLikeFields"][] = "EmployeeType";
$tdatademo_user11[".googleLikeFields"][] = "BasicMonthlyPay";
$tdatademo_user11[".googleLikeFields"][] = "BasicDailyPay";
$tdatademo_user11[".googleLikeFields"][] = "EmployeeID";
$tdatademo_user11[".googleLikeFields"][] = "Division";
$tdatademo_user11[".googleLikeFields"][] = "Status";
$tdatademo_user11[".googleLikeFields"][] = "Department";
$tdatademo_user11[".googleLikeFields"][] = "AllowableSickLeave";
$tdatademo_user11[".googleLikeFields"][] = "AllowableVacationLeave";
$tdatademo_user11[".googleLikeFields"][] = "AllowableEmergencyLeave";
$tdatademo_user11[".googleLikeFields"][] = "SSSEE";
$tdatademo_user11[".googleLikeFields"][] = "SSSER";
$tdatademo_user11[".googleLikeFields"][] = "PhilHealthEE";
$tdatademo_user11[".googleLikeFields"][] = "PhilHealthER";
$tdatademo_user11[".googleLikeFields"][] = "PagIbigEE";
$tdatademo_user11[".googleLikeFields"][] = "AllowablePaternityLeave";
$tdatademo_user11[".googleLikeFields"][] = "HiredDate";
$tdatademo_user11[".googleLikeFields"][] = "Inactive";
$tdatademo_user11[".googleLikeFields"][] = "ExitDate";
$tdatademo_user11[".googleLikeFields"][] = "PagIbigER";
$tdatademo_user11[".googleLikeFields"][] = "PagIbigNo";
$tdatademo_user11[".googleLikeFields"][] = "PhilHealthNo";
$tdatademo_user11[".googleLikeFields"][] = "SSSEC";
$tdatademo_user11[".googleLikeFields"][] = "Level";
$tdatademo_user11[".googleLikeFields"][] = "DateCreated";
$tdatademo_user11[".googleLikeFields"][] = "ApprovedDate";
$tdatademo_user11[".googleLikeFields"][] = "Approved";
$tdatademo_user11[".googleLikeFields"][] = "Approvedby";
$tdatademo_user11[".googleLikeFields"][] = "Preparedby";
$tdatademo_user11[".googleLikeFields"][] = "Checkedby";
$tdatademo_user11[".googleLikeFields"][] = "CheckedDate";
$tdatademo_user11[".googleLikeFields"][] = "Checked";
$tdatademo_user11[".googleLikeFields"][] = "Position";
$tdatademo_user11[".googleLikeFields"][] = "Superior";
$tdatademo_user11[".googleLikeFields"][] = "Employer";
$tdatademo_user11[".googleLikeFields"][] = "IDNo";
$tdatademo_user11[".googleLikeFields"][] = "AccountNo";
$tdatademo_user11[".googleLikeFields"][] = "LateFixPenalty";
$tdatademo_user11[".googleLikeFields"][] = "DoNotUpdateContributions";
$tdatademo_user11[".googleLikeFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user11[".googleLikeFields"][] = "Bank";
$tdatademo_user11[".googleLikeFields"][] = "Birthday";
$tdatademo_user11[".googleLikeFields"][] = "DeMinimis";
$tdatademo_user11[".googleLikeFields"][] = "NoLateDeduction";
$tdatademo_user11[".googleLikeFields"][] = "IncludeBreakLate";
$tdatademo_user11[".googleLikeFields"][] = "GracePeriodMins";
$tdatademo_user11[".googleLikeFields"][] = "WithAdditionalBreaks";
$tdatademo_user11[".googleLikeFields"][] = "PresetMoNonTax";
$tdatademo_user11[".googleLikeFields"][] = "PreCalMoTaxable";
$tdatademo_user11[".googleLikeFields"][] = "CalMonthly";
$tdatademo_user11[".googleLikeFields"][] = "TaxPeriods";
$tdatademo_user11[".googleLikeFields"][] = "TaxPerPeriod";
$tdatademo_user11[".googleLikeFields"][] = "Superior2";
$tdatademo_user11[".googleLikeFields"][] = "ExcludeBio";


$tdatademo_user11[".advSearchFields"] = array();
$tdatademo_user11[".advSearchFields"][] = "EmployeeID";
$tdatademo_user11[".advSearchFields"][] = "IDNo";
$tdatademo_user11[".advSearchFields"][] = "Photo";
$tdatademo_user11[".advSearchFields"][] = "user_name";
$tdatademo_user11[".advSearchFields"][] = "Employer";
$tdatademo_user11[".advSearchFields"][] = "Division";
$tdatademo_user11[".advSearchFields"][] = "Department";
$tdatademo_user11[".advSearchFields"][] = "HiredDate";
$tdatademo_user11[".advSearchFields"][] = "Inactive";
$tdatademo_user11[".advSearchFields"][] = "ExitDate";
$tdatademo_user11[".advSearchFields"][] = "Status";
$tdatademo_user11[".advSearchFields"][] = "Position";
$tdatademo_user11[".advSearchFields"][] = "Superior";
$tdatademo_user11[".advSearchFields"][] = "Superior2";
$tdatademo_user11[".advSearchFields"][] = "Mobile";
$tdatademo_user11[".advSearchFields"][] = "Address";
$tdatademo_user11[".advSearchFields"][] = "Birthday";
$tdatademo_user11[".advSearchFields"][] = "Email";
$tdatademo_user11[".advSearchFields"][] = "SSSNo";
$tdatademo_user11[".advSearchFields"][] = "PagIbigNo";
$tdatademo_user11[".advSearchFields"][] = "PhilHealthNo";
$tdatademo_user11[".advSearchFields"][] = "TIN";
$tdatademo_user11[".advSearchFields"][] = "Bank";
$tdatademo_user11[".advSearchFields"][] = "AccountNo";
$tdatademo_user11[".advSearchFields"][] = "ExcludeBio";
$tdatademo_user11[".advSearchFields"][] = "AllowableSickLeave";
$tdatademo_user11[".advSearchFields"][] = "AllowableVacationLeave";
$tdatademo_user11[".advSearchFields"][] = "AllowableEmergencyLeave";
$tdatademo_user11[".advSearchFields"][] = "AllowablePaternityLeave";
$tdatademo_user11[".advSearchFields"][] = "EmployeeType";
$tdatademo_user11[".advSearchFields"][] = "Level";
$tdatademo_user11[".advSearchFields"][] = "DeMinimis";
$tdatademo_user11[".advSearchFields"][] = "BasicMonthlyPay";
$tdatademo_user11[".advSearchFields"][] = "BasicDailyPay";
$tdatademo_user11[".advSearchFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user11[".advSearchFields"][] = "DoNotUpdateContributions";
$tdatademo_user11[".advSearchFields"][] = "SSSEE";
$tdatademo_user11[".advSearchFields"][] = "SSSER";
$tdatademo_user11[".advSearchFields"][] = "SSSEC";
$tdatademo_user11[".advSearchFields"][] = "PhilHealthEE";
$tdatademo_user11[".advSearchFields"][] = "PhilHealthER";
$tdatademo_user11[".advSearchFields"][] = "PagIbigEE";
$tdatademo_user11[".advSearchFields"][] = "PagIbigER";
$tdatademo_user11[".advSearchFields"][] = "NoLateDeduction";
$tdatademo_user11[".advSearchFields"][] = "GracePeriodMins";
$tdatademo_user11[".advSearchFields"][] = "WithAdditionalBreaks";
$tdatademo_user11[".advSearchFields"][] = "IncludeBreakLate";
$tdatademo_user11[".advSearchFields"][] = "LateFixPenalty";
$tdatademo_user11[".advSearchFields"][] = "CalMonthly";
$tdatademo_user11[".advSearchFields"][] = "PresetMoNonTax";
$tdatademo_user11[".advSearchFields"][] = "PreCalMoTaxable";
$tdatademo_user11[".advSearchFields"][] = "TaxPeriods";
$tdatademo_user11[".advSearchFields"][] = "TaxPerPeriod";
$tdatademo_user11[".advSearchFields"][] = "user_id";
$tdatademo_user11[".advSearchFields"][] = "Preparedby";
$tdatademo_user11[".advSearchFields"][] = "Checked";
$tdatademo_user11[".advSearchFields"][] = "Checkedby";
$tdatademo_user11[".advSearchFields"][] = "CheckedDate";
$tdatademo_user11[".advSearchFields"][] = "Approved";
$tdatademo_user11[".advSearchFields"][] = "Approvedby";
$tdatademo_user11[".advSearchFields"][] = "ApprovedDate";
$tdatademo_user11[".advSearchFields"][] = "DateCreated";

$tdatademo_user11[".tableType"] = "list";

$tdatademo_user11[".printerPageOrientation"] = 0;
$tdatademo_user11[".nPrinterPageScale"] = 100;

$tdatademo_user11[".nPrinterSplitRecords"] = 40;

$tdatademo_user11[".nPrinterPDFSplitRecords"] = 40;



$tdatademo_user11[".geocodingEnabled"] = false;





$tdatademo_user11[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatademo_user11[".totalsFields"] = array();
$tdatademo_user11[".totalsFields"][] = array(
	"fName" => "BasicMonthlyPay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatademo_user11[".totalsFields"][] = array(
	"fName" => "BasicDailyPay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatademo_user11[".pageSize"] = 20;

$tdatademo_user11[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY user_name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatademo_user11[".strOrderBy"] = $tstrOrderBy;

$tdatademo_user11[".orderindexes"] = array();
	$tdatademo_user11[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "user_name");


$tdatademo_user11[".sqlHead"] = "SELECT user_id,  user_name,  Photo,  SSSNo,  TIN,  Mobile,  Address,  Email,  EmployeeType,  BasicMonthlyPay,  BasicDailyPay,  EmployeeID,  Division,  Status,  Department,  AllowableSickLeave,  AllowableVacationLeave,  AllowableEmergencyLeave,  SSSEE,  SSSER,  PhilHealthEE,  PhilHealthER,  PagIbigEE,  AllowablePaternityLeave,  HiredDate,  Inactive,  ExitDate,  PagIbigER,  PagIbigNo,  PhilHealthNo,  SSSEC,  `Level`,  DateCreated,  ApprovedDate,  Approved,  Approvedby,  Preparedby,  Checkedby,  CheckedDate,  Checked,  `Position`,  Superior,  Employer,  IDNo,  AccountNo,  LateFixPenalty,  DoNotUpdateContributions,  ExcludeContributionOnPayroll,  Bank,  Birthday,  DeMinimis,  NoLateDeduction,  IncludeBreakLate,  GracePeriodMins,  WithAdditionalBreaks,  PresetMoNonTax,  PreCalMoTaxable,  CalMonthly,  TaxPeriods,  TaxPerPeriod,  Superior2,  ExcludeBio";
$tdatademo_user11[".sqlFrom"] = "FROM demo_user";
$tdatademo_user11[".sqlWhereExpr"] = "(BasicMonthlyPay is null) AND (BasicDailyPay is null)";
$tdatademo_user11[".sqlTail"] = "";


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
$arrEditTabs[] = array('tabId'=>'New_tab1',
					   'tabName'=>"Leave Allowance",
					   'nType'=>'0',
					   'nOrder'=>27,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "EmployeeType";
	
		$tabFields[] = "Level";
	
		$tabFields[] = "DeMinimis";
	
		$tabFields[] = "BasicMonthlyPay";
	
		$tabFields[] = "BasicDailyPay";
$arrEditTabs[] = array('tabId'=>'Compensation1',
					   'tabName'=>"Compensation",
					   'nType'=>'0',
					   'nOrder'=>32,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "ExcludeContributionOnPayroll";
	
		$tabFields[] = "DoNotUpdateContributions";
	
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
	
	
		$tabFields[] = "Preparedby";
	
		$tabFields[] = "Checked";
	
		$tabFields[] = "Checkedby";
	
		$tabFields[] = "CheckedDate";
	
		$tabFields[] = "Approved";
	
		$tabFields[] = "Approvedby";
	
		$tabFields[] = "ApprovedDate";
	
		$tabFields[] = "DateCreated";
$arrEditTabs[] = array('tabId'=>'Approval1',
					   'tabName'=>"Approval",
					   'nType'=>'0',
					   'nOrder'=>60,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatademo_user11[".arrEditTabs"] = $arrEditTabs;


//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	
	
		$tabFields[] = "ExcludeBio";
$arrAddTabs[] = array('tabId'=>'Primary1',
					  'tabName'=>"Primary",
					  'nType'=>'0',
					  'nOrder'=>1,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
$arrAddTabs[] = array('tabId'=>'New_tab1',
					  'tabName'=>"Leave Allowance",
					  'nType'=>'0',
					  'nOrder'=>27,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
$arrAddTabs[] = array('tabId'=>'Compensation1',
					  'tabName'=>"Compensation",
					  'nType'=>'0',
					  'nOrder'=>32,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
$arrAddTabs[] = array('tabId'=>'Statutory1',
					  'tabName'=>"Statutory",
					  'nType'=>'0',
					  'nOrder'=>38,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
$arrAddTabs[] = array('tabId'=>'Late_Penalty1',
					  'tabName'=>"Late Penalty",
					  'nType'=>'0',
					  'nOrder'=>48,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
$arrAddTabs[] = array('tabId'=>'Tax1',
					  'tabName'=>"Tax",
					  'nType'=>'0',
					  'nOrder'=>54,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
$arrAddTabs[] = array('tabId'=>'Approval1',
					  'tabName'=>"Approval",
					  'nType'=>'0',
					  'nOrder'=>60,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdatademo_user11[".arrAddTabs"] = $arrAddTabs;

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
$arrViewTabs[] = array('tabId'=>'New_tab1',
					   'tabName'=>"Leave Allowance",
					   'nType'=>'0',
					   'nOrder'=>27,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "EmployeeType";
	$tabFields[] = "Level";
	$tabFields[] = "DeMinimis";
	$tabFields[] = "BasicMonthlyPay";
	$tabFields[] = "BasicDailyPay";
$arrViewTabs[] = array('tabId'=>'Compensation1',
					   'tabName'=>"Compensation",
					   'nType'=>'0',
					   'nOrder'=>32,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "ExcludeContributionOnPayroll";
	$tabFields[] = "DoNotUpdateContributions";
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
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "Preparedby";
	$tabFields[] = "Checked";
	$tabFields[] = "Checkedby";
	$tabFields[] = "CheckedDate";
	$tabFields[] = "Approved";
	$tabFields[] = "Approvedby";
	$tabFields[] = "ApprovedDate";
	$tabFields[] = "DateCreated";
$arrViewTabs[] = array('tabId'=>'Approval1',
					   'tabName'=>"Approval",
					   'nType'=>'0',
					   'nOrder'=>60,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatademo_user11[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatademo_user11[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatademo_user11[".arrGroupsPerPage"] = $arrGPP;

$tdatademo_user11[".highlightSearchResults"] = true;

$tableKeysdemo_user11 = array();
$tableKeysdemo_user11[] = "user_id";
$tdatademo_user11[".Keys"] = $tableKeysdemo_user11;

$tdatademo_user11[".listFields"] = array();
$tdatademo_user11[".listFields"][] = "EmployeeID";
$tdatademo_user11[".listFields"][] = "IDNo";
$tdatademo_user11[".listFields"][] = "Photo";
$tdatademo_user11[".listFields"][] = "user_name";
$tdatademo_user11[".listFields"][] = "Employer";
$tdatademo_user11[".listFields"][] = "Division";
$tdatademo_user11[".listFields"][] = "Department";
$tdatademo_user11[".listFields"][] = "HiredDate";
$tdatademo_user11[".listFields"][] = "Inactive";
$tdatademo_user11[".listFields"][] = "ExitDate";
$tdatademo_user11[".listFields"][] = "Status";
$tdatademo_user11[".listFields"][] = "Position";
$tdatademo_user11[".listFields"][] = "Superior";
$tdatademo_user11[".listFields"][] = "Superior2";
$tdatademo_user11[".listFields"][] = "Mobile";
$tdatademo_user11[".listFields"][] = "Address";
$tdatademo_user11[".listFields"][] = "Birthday";
$tdatademo_user11[".listFields"][] = "Email";
$tdatademo_user11[".listFields"][] = "SSSNo";
$tdatademo_user11[".listFields"][] = "PagIbigNo";
$tdatademo_user11[".listFields"][] = "PhilHealthNo";
$tdatademo_user11[".listFields"][] = "TIN";
$tdatademo_user11[".listFields"][] = "Bank";
$tdatademo_user11[".listFields"][] = "AccountNo";
$tdatademo_user11[".listFields"][] = "ExcludeBio";
$tdatademo_user11[".listFields"][] = "AllowableSickLeave";
$tdatademo_user11[".listFields"][] = "AllowableVacationLeave";
$tdatademo_user11[".listFields"][] = "AllowableEmergencyLeave";
$tdatademo_user11[".listFields"][] = "AllowablePaternityLeave";
$tdatademo_user11[".listFields"][] = "EmployeeType";
$tdatademo_user11[".listFields"][] = "Level";
$tdatademo_user11[".listFields"][] = "DeMinimis";
$tdatademo_user11[".listFields"][] = "BasicMonthlyPay";
$tdatademo_user11[".listFields"][] = "BasicDailyPay";
$tdatademo_user11[".listFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user11[".listFields"][] = "DoNotUpdateContributions";
$tdatademo_user11[".listFields"][] = "SSSEE";
$tdatademo_user11[".listFields"][] = "SSSER";
$tdatademo_user11[".listFields"][] = "SSSEC";
$tdatademo_user11[".listFields"][] = "PhilHealthEE";
$tdatademo_user11[".listFields"][] = "PhilHealthER";
$tdatademo_user11[".listFields"][] = "PagIbigEE";
$tdatademo_user11[".listFields"][] = "PagIbigER";
$tdatademo_user11[".listFields"][] = "NoLateDeduction";
$tdatademo_user11[".listFields"][] = "GracePeriodMins";
$tdatademo_user11[".listFields"][] = "WithAdditionalBreaks";
$tdatademo_user11[".listFields"][] = "IncludeBreakLate";
$tdatademo_user11[".listFields"][] = "LateFixPenalty";
$tdatademo_user11[".listFields"][] = "CalMonthly";
$tdatademo_user11[".listFields"][] = "PresetMoNonTax";
$tdatademo_user11[".listFields"][] = "PreCalMoTaxable";
$tdatademo_user11[".listFields"][] = "TaxPeriods";
$tdatademo_user11[".listFields"][] = "TaxPerPeriod";
$tdatademo_user11[".listFields"][] = "user_id";
$tdatademo_user11[".listFields"][] = "Preparedby";
$tdatademo_user11[".listFields"][] = "Checked";
$tdatademo_user11[".listFields"][] = "Checkedby";
$tdatademo_user11[".listFields"][] = "CheckedDate";
$tdatademo_user11[".listFields"][] = "Approved";
$tdatademo_user11[".listFields"][] = "Approvedby";
$tdatademo_user11[".listFields"][] = "ApprovedDate";
$tdatademo_user11[".listFields"][] = "DateCreated";

$tdatademo_user11[".hideMobileList"] = array();


$tdatademo_user11[".viewFields"] = array();
$tdatademo_user11[".viewFields"][] = "EmployeeID";
$tdatademo_user11[".viewFields"][] = "IDNo";
$tdatademo_user11[".viewFields"][] = "Photo";
$tdatademo_user11[".viewFields"][] = "user_name";
$tdatademo_user11[".viewFields"][] = "Employer";
$tdatademo_user11[".viewFields"][] = "Division";
$tdatademo_user11[".viewFields"][] = "Department";
$tdatademo_user11[".viewFields"][] = "HiredDate";
$tdatademo_user11[".viewFields"][] = "Inactive";
$tdatademo_user11[".viewFields"][] = "ExitDate";
$tdatademo_user11[".viewFields"][] = "Status";
$tdatademo_user11[".viewFields"][] = "Position";
$tdatademo_user11[".viewFields"][] = "Superior";
$tdatademo_user11[".viewFields"][] = "Superior2";
$tdatademo_user11[".viewFields"][] = "Mobile";
$tdatademo_user11[".viewFields"][] = "Address";
$tdatademo_user11[".viewFields"][] = "Birthday";
$tdatademo_user11[".viewFields"][] = "Email";
$tdatademo_user11[".viewFields"][] = "SSSNo";
$tdatademo_user11[".viewFields"][] = "PagIbigNo";
$tdatademo_user11[".viewFields"][] = "PhilHealthNo";
$tdatademo_user11[".viewFields"][] = "TIN";
$tdatademo_user11[".viewFields"][] = "Bank";
$tdatademo_user11[".viewFields"][] = "AccountNo";
$tdatademo_user11[".viewFields"][] = "ExcludeBio";
$tdatademo_user11[".viewFields"][] = "AllowableSickLeave";
$tdatademo_user11[".viewFields"][] = "AllowableVacationLeave";
$tdatademo_user11[".viewFields"][] = "AllowableEmergencyLeave";
$tdatademo_user11[".viewFields"][] = "AllowablePaternityLeave";
$tdatademo_user11[".viewFields"][] = "EmployeeType";
$tdatademo_user11[".viewFields"][] = "Level";
$tdatademo_user11[".viewFields"][] = "DeMinimis";
$tdatademo_user11[".viewFields"][] = "BasicMonthlyPay";
$tdatademo_user11[".viewFields"][] = "BasicDailyPay";
$tdatademo_user11[".viewFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user11[".viewFields"][] = "DoNotUpdateContributions";
$tdatademo_user11[".viewFields"][] = "SSSEE";
$tdatademo_user11[".viewFields"][] = "SSSER";
$tdatademo_user11[".viewFields"][] = "SSSEC";
$tdatademo_user11[".viewFields"][] = "PhilHealthEE";
$tdatademo_user11[".viewFields"][] = "PhilHealthER";
$tdatademo_user11[".viewFields"][] = "PagIbigEE";
$tdatademo_user11[".viewFields"][] = "PagIbigER";
$tdatademo_user11[".viewFields"][] = "NoLateDeduction";
$tdatademo_user11[".viewFields"][] = "GracePeriodMins";
$tdatademo_user11[".viewFields"][] = "WithAdditionalBreaks";
$tdatademo_user11[".viewFields"][] = "IncludeBreakLate";
$tdatademo_user11[".viewFields"][] = "LateFixPenalty";
$tdatademo_user11[".viewFields"][] = "CalMonthly";
$tdatademo_user11[".viewFields"][] = "PresetMoNonTax";
$tdatademo_user11[".viewFields"][] = "PreCalMoTaxable";
$tdatademo_user11[".viewFields"][] = "TaxPeriods";
$tdatademo_user11[".viewFields"][] = "TaxPerPeriod";
$tdatademo_user11[".viewFields"][] = "user_id";
$tdatademo_user11[".viewFields"][] = "Preparedby";
$tdatademo_user11[".viewFields"][] = "Checked";
$tdatademo_user11[".viewFields"][] = "Checkedby";
$tdatademo_user11[".viewFields"][] = "CheckedDate";
$tdatademo_user11[".viewFields"][] = "Approved";
$tdatademo_user11[".viewFields"][] = "Approvedby";
$tdatademo_user11[".viewFields"][] = "ApprovedDate";
$tdatademo_user11[".viewFields"][] = "DateCreated";

$tdatademo_user11[".addFields"] = array();
$tdatademo_user11[".addFields"][] = "ExcludeBio";

$tdatademo_user11[".masterListFields"] = array();
$tdatademo_user11[".masterListFields"][] = "EmployeeID";
$tdatademo_user11[".masterListFields"][] = "IDNo";
$tdatademo_user11[".masterListFields"][] = "Photo";
$tdatademo_user11[".masterListFields"][] = "user_name";
$tdatademo_user11[".masterListFields"][] = "Employer";
$tdatademo_user11[".masterListFields"][] = "Division";
$tdatademo_user11[".masterListFields"][] = "Department";
$tdatademo_user11[".masterListFields"][] = "HiredDate";
$tdatademo_user11[".masterListFields"][] = "Inactive";
$tdatademo_user11[".masterListFields"][] = "ExitDate";
$tdatademo_user11[".masterListFields"][] = "Status";
$tdatademo_user11[".masterListFields"][] = "Position";
$tdatademo_user11[".masterListFields"][] = "Superior";
$tdatademo_user11[".masterListFields"][] = "Superior2";
$tdatademo_user11[".masterListFields"][] = "Mobile";
$tdatademo_user11[".masterListFields"][] = "Address";
$tdatademo_user11[".masterListFields"][] = "Birthday";
$tdatademo_user11[".masterListFields"][] = "Email";
$tdatademo_user11[".masterListFields"][] = "SSSNo";
$tdatademo_user11[".masterListFields"][] = "PagIbigNo";
$tdatademo_user11[".masterListFields"][] = "PhilHealthNo";
$tdatademo_user11[".masterListFields"][] = "TIN";
$tdatademo_user11[".masterListFields"][] = "Bank";
$tdatademo_user11[".masterListFields"][] = "AccountNo";
$tdatademo_user11[".masterListFields"][] = "ExcludeBio";
$tdatademo_user11[".masterListFields"][] = "AllowableSickLeave";
$tdatademo_user11[".masterListFields"][] = "AllowableVacationLeave";
$tdatademo_user11[".masterListFields"][] = "AllowableEmergencyLeave";
$tdatademo_user11[".masterListFields"][] = "AllowablePaternityLeave";
$tdatademo_user11[".masterListFields"][] = "EmployeeType";
$tdatademo_user11[".masterListFields"][] = "Level";
$tdatademo_user11[".masterListFields"][] = "DeMinimis";
$tdatademo_user11[".masterListFields"][] = "BasicMonthlyPay";
$tdatademo_user11[".masterListFields"][] = "BasicDailyPay";
$tdatademo_user11[".masterListFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user11[".masterListFields"][] = "DoNotUpdateContributions";
$tdatademo_user11[".masterListFields"][] = "SSSEE";
$tdatademo_user11[".masterListFields"][] = "SSSER";
$tdatademo_user11[".masterListFields"][] = "SSSEC";
$tdatademo_user11[".masterListFields"][] = "PhilHealthEE";
$tdatademo_user11[".masterListFields"][] = "PhilHealthER";
$tdatademo_user11[".masterListFields"][] = "PagIbigEE";
$tdatademo_user11[".masterListFields"][] = "PagIbigER";
$tdatademo_user11[".masterListFields"][] = "NoLateDeduction";
$tdatademo_user11[".masterListFields"][] = "GracePeriodMins";
$tdatademo_user11[".masterListFields"][] = "WithAdditionalBreaks";
$tdatademo_user11[".masterListFields"][] = "IncludeBreakLate";
$tdatademo_user11[".masterListFields"][] = "LateFixPenalty";
$tdatademo_user11[".masterListFields"][] = "CalMonthly";
$tdatademo_user11[".masterListFields"][] = "PresetMoNonTax";
$tdatademo_user11[".masterListFields"][] = "PreCalMoTaxable";
$tdatademo_user11[".masterListFields"][] = "TaxPeriods";
$tdatademo_user11[".masterListFields"][] = "TaxPerPeriod";
$tdatademo_user11[".masterListFields"][] = "user_id";
$tdatademo_user11[".masterListFields"][] = "Preparedby";
$tdatademo_user11[".masterListFields"][] = "Checked";
$tdatademo_user11[".masterListFields"][] = "Checkedby";
$tdatademo_user11[".masterListFields"][] = "CheckedDate";
$tdatademo_user11[".masterListFields"][] = "Approved";
$tdatademo_user11[".masterListFields"][] = "Approvedby";
$tdatademo_user11[".masterListFields"][] = "ApprovedDate";
$tdatademo_user11[".masterListFields"][] = "DateCreated";

$tdatademo_user11[".inlineAddFields"] = array();
$tdatademo_user11[".inlineAddFields"][] = "ExcludeBio";

$tdatademo_user11[".editFields"] = array();
$tdatademo_user11[".editFields"][] = "EmployeeID";
$tdatademo_user11[".editFields"][] = "IDNo";
$tdatademo_user11[".editFields"][] = "Photo";
$tdatademo_user11[".editFields"][] = "user_name";
$tdatademo_user11[".editFields"][] = "Employer";
$tdatademo_user11[".editFields"][] = "Division";
$tdatademo_user11[".editFields"][] = "Department";
$tdatademo_user11[".editFields"][] = "HiredDate";
$tdatademo_user11[".editFields"][] = "Inactive";
$tdatademo_user11[".editFields"][] = "ExitDate";
$tdatademo_user11[".editFields"][] = "Status";
$tdatademo_user11[".editFields"][] = "Position";
$tdatademo_user11[".editFields"][] = "Superior";
$tdatademo_user11[".editFields"][] = "Superior2";
$tdatademo_user11[".editFields"][] = "Mobile";
$tdatademo_user11[".editFields"][] = "Address";
$tdatademo_user11[".editFields"][] = "Birthday";
$tdatademo_user11[".editFields"][] = "Email";
$tdatademo_user11[".editFields"][] = "SSSNo";
$tdatademo_user11[".editFields"][] = "PagIbigNo";
$tdatademo_user11[".editFields"][] = "PhilHealthNo";
$tdatademo_user11[".editFields"][] = "TIN";
$tdatademo_user11[".editFields"][] = "Bank";
$tdatademo_user11[".editFields"][] = "AccountNo";
$tdatademo_user11[".editFields"][] = "ExcludeBio";
$tdatademo_user11[".editFields"][] = "AllowableSickLeave";
$tdatademo_user11[".editFields"][] = "AllowableVacationLeave";
$tdatademo_user11[".editFields"][] = "AllowableEmergencyLeave";
$tdatademo_user11[".editFields"][] = "AllowablePaternityLeave";
$tdatademo_user11[".editFields"][] = "EmployeeType";
$tdatademo_user11[".editFields"][] = "Level";
$tdatademo_user11[".editFields"][] = "DeMinimis";
$tdatademo_user11[".editFields"][] = "BasicMonthlyPay";
$tdatademo_user11[".editFields"][] = "BasicDailyPay";
$tdatademo_user11[".editFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user11[".editFields"][] = "DoNotUpdateContributions";
$tdatademo_user11[".editFields"][] = "SSSEE";
$tdatademo_user11[".editFields"][] = "SSSER";
$tdatademo_user11[".editFields"][] = "SSSEC";
$tdatademo_user11[".editFields"][] = "PhilHealthEE";
$tdatademo_user11[".editFields"][] = "PhilHealthER";
$tdatademo_user11[".editFields"][] = "PagIbigEE";
$tdatademo_user11[".editFields"][] = "PagIbigER";
$tdatademo_user11[".editFields"][] = "NoLateDeduction";
$tdatademo_user11[".editFields"][] = "GracePeriodMins";
$tdatademo_user11[".editFields"][] = "WithAdditionalBreaks";
$tdatademo_user11[".editFields"][] = "IncludeBreakLate";
$tdatademo_user11[".editFields"][] = "LateFixPenalty";
$tdatademo_user11[".editFields"][] = "CalMonthly";
$tdatademo_user11[".editFields"][] = "PresetMoNonTax";
$tdatademo_user11[".editFields"][] = "PreCalMoTaxable";
$tdatademo_user11[".editFields"][] = "TaxPeriods";
$tdatademo_user11[".editFields"][] = "TaxPerPeriod";
$tdatademo_user11[".editFields"][] = "Preparedby";
$tdatademo_user11[".editFields"][] = "Checked";
$tdatademo_user11[".editFields"][] = "Checkedby";
$tdatademo_user11[".editFields"][] = "CheckedDate";
$tdatademo_user11[".editFields"][] = "Approved";
$tdatademo_user11[".editFields"][] = "Approvedby";
$tdatademo_user11[".editFields"][] = "ApprovedDate";
$tdatademo_user11[".editFields"][] = "DateCreated";

$tdatademo_user11[".inlineEditFields"] = array();
$tdatademo_user11[".inlineEditFields"][] = "EmployeeID";
$tdatademo_user11[".inlineEditFields"][] = "IDNo";
$tdatademo_user11[".inlineEditFields"][] = "Photo";
$tdatademo_user11[".inlineEditFields"][] = "user_name";
$tdatademo_user11[".inlineEditFields"][] = "Employer";
$tdatademo_user11[".inlineEditFields"][] = "Division";
$tdatademo_user11[".inlineEditFields"][] = "Department";
$tdatademo_user11[".inlineEditFields"][] = "HiredDate";
$tdatademo_user11[".inlineEditFields"][] = "Inactive";
$tdatademo_user11[".inlineEditFields"][] = "ExitDate";
$tdatademo_user11[".inlineEditFields"][] = "Status";
$tdatademo_user11[".inlineEditFields"][] = "Position";
$tdatademo_user11[".inlineEditFields"][] = "Superior";
$tdatademo_user11[".inlineEditFields"][] = "Superior2";
$tdatademo_user11[".inlineEditFields"][] = "Mobile";
$tdatademo_user11[".inlineEditFields"][] = "Address";
$tdatademo_user11[".inlineEditFields"][] = "Birthday";
$tdatademo_user11[".inlineEditFields"][] = "Email";
$tdatademo_user11[".inlineEditFields"][] = "SSSNo";
$tdatademo_user11[".inlineEditFields"][] = "PagIbigNo";
$tdatademo_user11[".inlineEditFields"][] = "PhilHealthNo";
$tdatademo_user11[".inlineEditFields"][] = "TIN";
$tdatademo_user11[".inlineEditFields"][] = "Bank";
$tdatademo_user11[".inlineEditFields"][] = "AccountNo";
$tdatademo_user11[".inlineEditFields"][] = "ExcludeBio";
$tdatademo_user11[".inlineEditFields"][] = "AllowableSickLeave";
$tdatademo_user11[".inlineEditFields"][] = "AllowableVacationLeave";
$tdatademo_user11[".inlineEditFields"][] = "AllowableEmergencyLeave";
$tdatademo_user11[".inlineEditFields"][] = "AllowablePaternityLeave";
$tdatademo_user11[".inlineEditFields"][] = "EmployeeType";
$tdatademo_user11[".inlineEditFields"][] = "Level";
$tdatademo_user11[".inlineEditFields"][] = "DeMinimis";
$tdatademo_user11[".inlineEditFields"][] = "BasicMonthlyPay";
$tdatademo_user11[".inlineEditFields"][] = "BasicDailyPay";
$tdatademo_user11[".inlineEditFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user11[".inlineEditFields"][] = "DoNotUpdateContributions";
$tdatademo_user11[".inlineEditFields"][] = "SSSEE";
$tdatademo_user11[".inlineEditFields"][] = "SSSER";
$tdatademo_user11[".inlineEditFields"][] = "SSSEC";
$tdatademo_user11[".inlineEditFields"][] = "PhilHealthEE";
$tdatademo_user11[".inlineEditFields"][] = "PhilHealthER";
$tdatademo_user11[".inlineEditFields"][] = "PagIbigEE";
$tdatademo_user11[".inlineEditFields"][] = "PagIbigER";
$tdatademo_user11[".inlineEditFields"][] = "NoLateDeduction";
$tdatademo_user11[".inlineEditFields"][] = "GracePeriodMins";
$tdatademo_user11[".inlineEditFields"][] = "WithAdditionalBreaks";
$tdatademo_user11[".inlineEditFields"][] = "IncludeBreakLate";
$tdatademo_user11[".inlineEditFields"][] = "LateFixPenalty";
$tdatademo_user11[".inlineEditFields"][] = "CalMonthly";
$tdatademo_user11[".inlineEditFields"][] = "PresetMoNonTax";
$tdatademo_user11[".inlineEditFields"][] = "PreCalMoTaxable";
$tdatademo_user11[".inlineEditFields"][] = "TaxPeriods";
$tdatademo_user11[".inlineEditFields"][] = "TaxPerPeriod";
$tdatademo_user11[".inlineEditFields"][] = "Preparedby";
$tdatademo_user11[".inlineEditFields"][] = "Checked";
$tdatademo_user11[".inlineEditFields"][] = "Checkedby";
$tdatademo_user11[".inlineEditFields"][] = "CheckedDate";
$tdatademo_user11[".inlineEditFields"][] = "Approved";
$tdatademo_user11[".inlineEditFields"][] = "Approvedby";
$tdatademo_user11[".inlineEditFields"][] = "ApprovedDate";
$tdatademo_user11[".inlineEditFields"][] = "DateCreated";

$tdatademo_user11[".updateSelectedFields"] = array();
$tdatademo_user11[".updateSelectedFields"][] = "Employer";
$tdatademo_user11[".updateSelectedFields"][] = "Division";
$tdatademo_user11[".updateSelectedFields"][] = "Department";
$tdatademo_user11[".updateSelectedFields"][] = "HiredDate";
$tdatademo_user11[".updateSelectedFields"][] = "ExitDate";
$tdatademo_user11[".updateSelectedFields"][] = "Status";
$tdatademo_user11[".updateSelectedFields"][] = "Position";
$tdatademo_user11[".updateSelectedFields"][] = "Superior";
$tdatademo_user11[".updateSelectedFields"][] = "Superior2";
$tdatademo_user11[".updateSelectedFields"][] = "Bank";
$tdatademo_user11[".updateSelectedFields"][] = "AllowableSickLeave";
$tdatademo_user11[".updateSelectedFields"][] = "AllowableVacationLeave";
$tdatademo_user11[".updateSelectedFields"][] = "AllowableEmergencyLeave";
$tdatademo_user11[".updateSelectedFields"][] = "AllowablePaternityLeave";
$tdatademo_user11[".updateSelectedFields"][] = "EmployeeType";
$tdatademo_user11[".updateSelectedFields"][] = "Level";
$tdatademo_user11[".updateSelectedFields"][] = "BasicMonthlyPay";
$tdatademo_user11[".updateSelectedFields"][] = "BasicDailyPay";
$tdatademo_user11[".updateSelectedFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user11[".updateSelectedFields"][] = "DoNotUpdateContributions";
$tdatademo_user11[".updateSelectedFields"][] = "SSSEE";
$tdatademo_user11[".updateSelectedFields"][] = "SSSER";
$tdatademo_user11[".updateSelectedFields"][] = "SSSEC";
$tdatademo_user11[".updateSelectedFields"][] = "PhilHealthEE";
$tdatademo_user11[".updateSelectedFields"][] = "PhilHealthER";
$tdatademo_user11[".updateSelectedFields"][] = "PagIbigEE";
$tdatademo_user11[".updateSelectedFields"][] = "PagIbigER";
$tdatademo_user11[".updateSelectedFields"][] = "LateFixPenalty";
$tdatademo_user11[".updateSelectedFields"][] = "Preparedby";
$tdatademo_user11[".updateSelectedFields"][] = "Checked";
$tdatademo_user11[".updateSelectedFields"][] = "Checkedby";
$tdatademo_user11[".updateSelectedFields"][] = "CheckedDate";
$tdatademo_user11[".updateSelectedFields"][] = "Approved";
$tdatademo_user11[".updateSelectedFields"][] = "Approvedby";
$tdatademo_user11[".updateSelectedFields"][] = "ApprovedDate";
$tdatademo_user11[".updateSelectedFields"][] = "DateCreated";


$tdatademo_user11[".exportFields"] = array();
$tdatademo_user11[".exportFields"][] = "EmployeeID";
$tdatademo_user11[".exportFields"][] = "IDNo";
$tdatademo_user11[".exportFields"][] = "Photo";
$tdatademo_user11[".exportFields"][] = "user_name";
$tdatademo_user11[".exportFields"][] = "Employer";
$tdatademo_user11[".exportFields"][] = "Division";
$tdatademo_user11[".exportFields"][] = "Department";
$tdatademo_user11[".exportFields"][] = "HiredDate";
$tdatademo_user11[".exportFields"][] = "Inactive";
$tdatademo_user11[".exportFields"][] = "ExitDate";
$tdatademo_user11[".exportFields"][] = "Status";
$tdatademo_user11[".exportFields"][] = "Position";
$tdatademo_user11[".exportFields"][] = "Superior";
$tdatademo_user11[".exportFields"][] = "Superior2";
$tdatademo_user11[".exportFields"][] = "Mobile";
$tdatademo_user11[".exportFields"][] = "Address";
$tdatademo_user11[".exportFields"][] = "Birthday";
$tdatademo_user11[".exportFields"][] = "Email";
$tdatademo_user11[".exportFields"][] = "SSSNo";
$tdatademo_user11[".exportFields"][] = "PagIbigNo";
$tdatademo_user11[".exportFields"][] = "PhilHealthNo";
$tdatademo_user11[".exportFields"][] = "TIN";
$tdatademo_user11[".exportFields"][] = "Bank";
$tdatademo_user11[".exportFields"][] = "AccountNo";
$tdatademo_user11[".exportFields"][] = "ExcludeBio";
$tdatademo_user11[".exportFields"][] = "AllowableSickLeave";
$tdatademo_user11[".exportFields"][] = "AllowableVacationLeave";
$tdatademo_user11[".exportFields"][] = "AllowableEmergencyLeave";
$tdatademo_user11[".exportFields"][] = "AllowablePaternityLeave";
$tdatademo_user11[".exportFields"][] = "EmployeeType";
$tdatademo_user11[".exportFields"][] = "Level";
$tdatademo_user11[".exportFields"][] = "DeMinimis";
$tdatademo_user11[".exportFields"][] = "BasicMonthlyPay";
$tdatademo_user11[".exportFields"][] = "BasicDailyPay";
$tdatademo_user11[".exportFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user11[".exportFields"][] = "DoNotUpdateContributions";
$tdatademo_user11[".exportFields"][] = "SSSEE";
$tdatademo_user11[".exportFields"][] = "SSSER";
$tdatademo_user11[".exportFields"][] = "SSSEC";
$tdatademo_user11[".exportFields"][] = "PhilHealthEE";
$tdatademo_user11[".exportFields"][] = "PhilHealthER";
$tdatademo_user11[".exportFields"][] = "PagIbigEE";
$tdatademo_user11[".exportFields"][] = "PagIbigER";
$tdatademo_user11[".exportFields"][] = "NoLateDeduction";
$tdatademo_user11[".exportFields"][] = "GracePeriodMins";
$tdatademo_user11[".exportFields"][] = "WithAdditionalBreaks";
$tdatademo_user11[".exportFields"][] = "IncludeBreakLate";
$tdatademo_user11[".exportFields"][] = "LateFixPenalty";
$tdatademo_user11[".exportFields"][] = "CalMonthly";
$tdatademo_user11[".exportFields"][] = "PresetMoNonTax";
$tdatademo_user11[".exportFields"][] = "PreCalMoTaxable";
$tdatademo_user11[".exportFields"][] = "TaxPeriods";
$tdatademo_user11[".exportFields"][] = "TaxPerPeriod";
$tdatademo_user11[".exportFields"][] = "user_id";
$tdatademo_user11[".exportFields"][] = "Preparedby";
$tdatademo_user11[".exportFields"][] = "Checked";
$tdatademo_user11[".exportFields"][] = "Checkedby";
$tdatademo_user11[".exportFields"][] = "CheckedDate";
$tdatademo_user11[".exportFields"][] = "Approved";
$tdatademo_user11[".exportFields"][] = "Approvedby";
$tdatademo_user11[".exportFields"][] = "ApprovedDate";
$tdatademo_user11[".exportFields"][] = "DateCreated";

$tdatademo_user11[".importFields"] = array();
$tdatademo_user11[".importFields"][] = "user_id";
$tdatademo_user11[".importFields"][] = "user_name";
$tdatademo_user11[".importFields"][] = "Photo";
$tdatademo_user11[".importFields"][] = "SSSNo";
$tdatademo_user11[".importFields"][] = "TIN";
$tdatademo_user11[".importFields"][] = "Mobile";
$tdatademo_user11[".importFields"][] = "Address";
$tdatademo_user11[".importFields"][] = "Email";
$tdatademo_user11[".importFields"][] = "EmployeeType";
$tdatademo_user11[".importFields"][] = "BasicMonthlyPay";
$tdatademo_user11[".importFields"][] = "BasicDailyPay";
$tdatademo_user11[".importFields"][] = "EmployeeID";
$tdatademo_user11[".importFields"][] = "Division";
$tdatademo_user11[".importFields"][] = "Status";
$tdatademo_user11[".importFields"][] = "Department";
$tdatademo_user11[".importFields"][] = "AllowableSickLeave";
$tdatademo_user11[".importFields"][] = "AllowableVacationLeave";
$tdatademo_user11[".importFields"][] = "AllowableEmergencyLeave";
$tdatademo_user11[".importFields"][] = "SSSEE";
$tdatademo_user11[".importFields"][] = "SSSER";
$tdatademo_user11[".importFields"][] = "PhilHealthEE";
$tdatademo_user11[".importFields"][] = "PhilHealthER";
$tdatademo_user11[".importFields"][] = "PagIbigEE";
$tdatademo_user11[".importFields"][] = "AllowablePaternityLeave";
$tdatademo_user11[".importFields"][] = "HiredDate";
$tdatademo_user11[".importFields"][] = "Inactive";
$tdatademo_user11[".importFields"][] = "ExitDate";
$tdatademo_user11[".importFields"][] = "PagIbigER";
$tdatademo_user11[".importFields"][] = "PagIbigNo";
$tdatademo_user11[".importFields"][] = "PhilHealthNo";
$tdatademo_user11[".importFields"][] = "SSSEC";
$tdatademo_user11[".importFields"][] = "Level";
$tdatademo_user11[".importFields"][] = "DateCreated";
$tdatademo_user11[".importFields"][] = "ApprovedDate";
$tdatademo_user11[".importFields"][] = "Approved";
$tdatademo_user11[".importFields"][] = "Approvedby";
$tdatademo_user11[".importFields"][] = "Preparedby";
$tdatademo_user11[".importFields"][] = "Checkedby";
$tdatademo_user11[".importFields"][] = "CheckedDate";
$tdatademo_user11[".importFields"][] = "Checked";
$tdatademo_user11[".importFields"][] = "Position";
$tdatademo_user11[".importFields"][] = "Superior";
$tdatademo_user11[".importFields"][] = "Employer";
$tdatademo_user11[".importFields"][] = "IDNo";
$tdatademo_user11[".importFields"][] = "AccountNo";
$tdatademo_user11[".importFields"][] = "LateFixPenalty";
$tdatademo_user11[".importFields"][] = "DoNotUpdateContributions";
$tdatademo_user11[".importFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user11[".importFields"][] = "Bank";
$tdatademo_user11[".importFields"][] = "Birthday";
$tdatademo_user11[".importFields"][] = "DeMinimis";
$tdatademo_user11[".importFields"][] = "NoLateDeduction";
$tdatademo_user11[".importFields"][] = "IncludeBreakLate";
$tdatademo_user11[".importFields"][] = "GracePeriodMins";
$tdatademo_user11[".importFields"][] = "WithAdditionalBreaks";
$tdatademo_user11[".importFields"][] = "PresetMoNonTax";
$tdatademo_user11[".importFields"][] = "PreCalMoTaxable";
$tdatademo_user11[".importFields"][] = "CalMonthly";
$tdatademo_user11[".importFields"][] = "TaxPeriods";
$tdatademo_user11[".importFields"][] = "TaxPerPeriod";
$tdatademo_user11[".importFields"][] = "Superior2";
$tdatademo_user11[".importFields"][] = "ExcludeBio";

$tdatademo_user11[".printFields"] = array();
$tdatademo_user11[".printFields"][] = "EmployeeID";
$tdatademo_user11[".printFields"][] = "IDNo";
$tdatademo_user11[".printFields"][] = "Photo";
$tdatademo_user11[".printFields"][] = "user_name";
$tdatademo_user11[".printFields"][] = "Employer";
$tdatademo_user11[".printFields"][] = "Division";
$tdatademo_user11[".printFields"][] = "Department";
$tdatademo_user11[".printFields"][] = "HiredDate";
$tdatademo_user11[".printFields"][] = "Inactive";
$tdatademo_user11[".printFields"][] = "ExitDate";
$tdatademo_user11[".printFields"][] = "Status";
$tdatademo_user11[".printFields"][] = "Position";
$tdatademo_user11[".printFields"][] = "Superior";
$tdatademo_user11[".printFields"][] = "Superior2";
$tdatademo_user11[".printFields"][] = "Mobile";
$tdatademo_user11[".printFields"][] = "Address";
$tdatademo_user11[".printFields"][] = "Birthday";
$tdatademo_user11[".printFields"][] = "Email";
$tdatademo_user11[".printFields"][] = "SSSNo";
$tdatademo_user11[".printFields"][] = "PagIbigNo";
$tdatademo_user11[".printFields"][] = "PhilHealthNo";
$tdatademo_user11[".printFields"][] = "TIN";
$tdatademo_user11[".printFields"][] = "Bank";
$tdatademo_user11[".printFields"][] = "AccountNo";
$tdatademo_user11[".printFields"][] = "ExcludeBio";
$tdatademo_user11[".printFields"][] = "AllowableSickLeave";
$tdatademo_user11[".printFields"][] = "AllowableVacationLeave";
$tdatademo_user11[".printFields"][] = "AllowableEmergencyLeave";
$tdatademo_user11[".printFields"][] = "AllowablePaternityLeave";
$tdatademo_user11[".printFields"][] = "EmployeeType";
$tdatademo_user11[".printFields"][] = "Level";
$tdatademo_user11[".printFields"][] = "DeMinimis";
$tdatademo_user11[".printFields"][] = "BasicMonthlyPay";
$tdatademo_user11[".printFields"][] = "BasicDailyPay";
$tdatademo_user11[".printFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user11[".printFields"][] = "DoNotUpdateContributions";
$tdatademo_user11[".printFields"][] = "SSSEE";
$tdatademo_user11[".printFields"][] = "SSSER";
$tdatademo_user11[".printFields"][] = "SSSEC";
$tdatademo_user11[".printFields"][] = "PhilHealthEE";
$tdatademo_user11[".printFields"][] = "PhilHealthER";
$tdatademo_user11[".printFields"][] = "PagIbigEE";
$tdatademo_user11[".printFields"][] = "PagIbigER";
$tdatademo_user11[".printFields"][] = "NoLateDeduction";
$tdatademo_user11[".printFields"][] = "GracePeriodMins";
$tdatademo_user11[".printFields"][] = "WithAdditionalBreaks";
$tdatademo_user11[".printFields"][] = "IncludeBreakLate";
$tdatademo_user11[".printFields"][] = "LateFixPenalty";
$tdatademo_user11[".printFields"][] = "CalMonthly";
$tdatademo_user11[".printFields"][] = "PresetMoNonTax";
$tdatademo_user11[".printFields"][] = "PreCalMoTaxable";
$tdatademo_user11[".printFields"][] = "TaxPeriods";
$tdatademo_user11[".printFields"][] = "TaxPerPeriod";
$tdatademo_user11[".printFields"][] = "user_id";
$tdatademo_user11[".printFields"][] = "Preparedby";
$tdatademo_user11[".printFields"][] = "Checked";
$tdatademo_user11[".printFields"][] = "Checkedby";
$tdatademo_user11[".printFields"][] = "CheckedDate";
$tdatademo_user11[".printFields"][] = "Approved";
$tdatademo_user11[".printFields"][] = "Approvedby";
$tdatademo_user11[".printFields"][] = "ApprovedDate";
$tdatademo_user11[".printFields"][] = "DateCreated";


//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","user_id");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user11["user_id"] = $fdata;
//	user_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_name";
	$fdata["GoodName"] = "user_name";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","user_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
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




	$tdatademo_user11["user_name"] = $fdata;
//	Photo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Photo";
	$fdata["GoodName"] = "Photo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","Photo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Photo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Photo";

		$fdata["DeleteAssociatedFile"] = true;

	
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




	$tdatademo_user11["Photo"] = $fdata;
//	SSSNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SSSNo";
	$fdata["GoodName"] = "SSSNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","SSSNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user11["SSSNo"] = $fdata;
//	TIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TIN";
	$fdata["GoodName"] = "TIN";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","TIN");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user11["TIN"] = $fdata;
//	Mobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Mobile";
	$fdata["GoodName"] = "Mobile";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","Mobile");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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




	$tdatademo_user11["Mobile"] = $fdata;
//	Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Address";
	$fdata["GoodName"] = "Address";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","Address");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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




	$tdatademo_user11["Address"] = $fdata;
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","Email");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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




	$tdatademo_user11["Email"] = $fdata;
//	EmployeeType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "EmployeeType";
	$fdata["GoodName"] = "EmployeeType";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","EmployeeType");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatademo_user11["EmployeeType"] = $fdata;
//	BasicMonthlyPay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "BasicMonthlyPay";
	$fdata["GoodName"] = "BasicMonthlyPay";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","BasicMonthlyPay");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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
		
		$edata["controlWidth"] = 134;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user11["BasicMonthlyPay"] = $fdata;
//	BasicDailyPay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "BasicDailyPay";
	$fdata["GoodName"] = "BasicDailyPay";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","BasicDailyPay");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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
		
		$edata["controlWidth"] = 134;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user11["BasicDailyPay"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","EmployeeID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
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




	$tdatademo_user11["EmployeeID"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","Division");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatademo_user11["Division"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","Status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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

	
	
		$edata["AllowToAdd"] = true;

	

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user11["Status"] = $fdata;
//	Department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Department";
	$fdata["GoodName"] = "Department";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","Department");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatademo_user11["Department"] = $fdata;
//	AllowableSickLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "AllowableSickLeave";
	$fdata["GoodName"] = "AllowableSickLeave";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","AllowableSickLeave");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 54;

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




	$tdatademo_user11["AllowableSickLeave"] = $fdata;
//	AllowableVacationLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "AllowableVacationLeave";
	$fdata["GoodName"] = "AllowableVacationLeave";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","AllowableVacationLeave");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 54;

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




	$tdatademo_user11["AllowableVacationLeave"] = $fdata;
//	AllowableEmergencyLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "AllowableEmergencyLeave";
	$fdata["GoodName"] = "AllowableEmergencyLeave";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","AllowableEmergencyLeave");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 54;

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




	$tdatademo_user11["AllowableEmergencyLeave"] = $fdata;
//	SSSEE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "SSSEE";
	$fdata["GoodName"] = "SSSEE";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","SSSEE");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 114;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user11["SSSEE"] = $fdata;
//	SSSER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "SSSER";
	$fdata["GoodName"] = "SSSER";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","SSSER");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 114;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user11["SSSER"] = $fdata;
//	PhilHealthEE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "PhilHealthEE";
	$fdata["GoodName"] = "PhilHealthEE";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","PhilHealthEE");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 114;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user11["PhilHealthEE"] = $fdata;
//	PhilHealthER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "PhilHealthER";
	$fdata["GoodName"] = "PhilHealthER";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","PhilHealthER");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 114;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user11["PhilHealthER"] = $fdata;
//	PagIbigEE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "PagIbigEE";
	$fdata["GoodName"] = "PagIbigEE";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","PagIbigEE");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 114;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user11["PagIbigEE"] = $fdata;
//	AllowablePaternityLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "AllowablePaternityLeave";
	$fdata["GoodName"] = "AllowablePaternityLeave";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","AllowablePaternityLeave");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 44;

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




	$tdatademo_user11["AllowablePaternityLeave"] = $fdata;
//	HiredDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "HiredDate";
	$fdata["GoodName"] = "HiredDate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","HiredDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
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




	$tdatademo_user11["HiredDate"] = $fdata;
//	Inactive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Inactive";
	$fdata["GoodName"] = "Inactive";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","Inactive");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user11["Inactive"] = $fdata;
//	ExitDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "ExitDate";
	$fdata["GoodName"] = "ExitDate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","ExitDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatademo_user11["ExitDate"] = $fdata;
//	PagIbigER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "PagIbigER";
	$fdata["GoodName"] = "PagIbigER";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","PagIbigER");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 114;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user11["PagIbigER"] = $fdata;
//	PagIbigNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "PagIbigNo";
	$fdata["GoodName"] = "PagIbigNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","PagIbigNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user11["PagIbigNo"] = $fdata;
//	PhilHealthNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "PhilHealthNo";
	$fdata["GoodName"] = "PhilHealthNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","PhilHealthNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user11["PhilHealthNo"] = $fdata;
//	SSSEC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "SSSEC";
	$fdata["GoodName"] = "SSSEC";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","SSSEC");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 114;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user11["SSSEC"] = $fdata;
//	Level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Level";
	$fdata["GoodName"] = "Level";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","Level");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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
	$edata["LinkFieldType"] = 0;
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




	$tdatademo_user11["Level"] = $fdata;
//	DateCreated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "DateCreated";
	$fdata["GoodName"] = "DateCreated";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","DateCreated");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatademo_user11["DateCreated"] = $fdata;
//	ApprovedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "ApprovedDate";
	$fdata["GoodName"] = "ApprovedDate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","ApprovedDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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

	
	
		$edata["DateEditType"] = 11;
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




	$tdatademo_user11["ApprovedDate"] = $fdata;
//	Approved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Approved";
	$fdata["GoodName"] = "Approved";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","Approved");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatademo_user11["Approved"] = $fdata;
//	Approvedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Approvedby";
	$fdata["GoodName"] = "Approvedby";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","Approvedby");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatademo_user11["Approvedby"] = $fdata;
//	Preparedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Preparedby";
	$fdata["GoodName"] = "Preparedby";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","Preparedby");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatademo_user11["Preparedby"] = $fdata;
//	Checkedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Checkedby";
	$fdata["GoodName"] = "Checkedby";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","Checkedby");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatademo_user11["Checkedby"] = $fdata;
//	CheckedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "CheckedDate";
	$fdata["GoodName"] = "CheckedDate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","CheckedDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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

	
	
		$edata["DateEditType"] = 11;
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




	$tdatademo_user11["CheckedDate"] = $fdata;
//	Checked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Checked";
	$fdata["GoodName"] = "Checked";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","Checked");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatademo_user11["Checked"] = $fdata;
//	Position
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Position";
	$fdata["GoodName"] = "Position";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","Position");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatademo_user11["Position"] = $fdata;
//	Superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "Superior";
	$fdata["GoodName"] = "Superior";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","Superior");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatademo_user11["Superior"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","Employer");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatademo_user11["Employer"] = $fdata;
//	IDNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "IDNo";
	$fdata["GoodName"] = "IDNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","IDNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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




	$tdatademo_user11["IDNo"] = $fdata;
//	AccountNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "AccountNo";
	$fdata["GoodName"] = "AccountNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","AccountNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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




	$tdatademo_user11["AccountNo"] = $fdata;
//	LateFixPenalty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "LateFixPenalty";
	$fdata["GoodName"] = "LateFixPenalty";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","LateFixPenalty");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatademo_user11["LateFixPenalty"] = $fdata;
//	DoNotUpdateContributions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "DoNotUpdateContributions";
	$fdata["GoodName"] = "DoNotUpdateContributions";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","DoNotUpdateContributions");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatademo_user11["DoNotUpdateContributions"] = $fdata;
//	ExcludeContributionOnPayroll
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "ExcludeContributionOnPayroll";
	$fdata["GoodName"] = "ExcludeContributionOnPayroll";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","ExcludeContributionOnPayroll");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatademo_user11["ExcludeContributionOnPayroll"] = $fdata;
//	Bank
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "Bank";
	$fdata["GoodName"] = "Bank";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","Bank");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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




	$tdatademo_user11["Bank"] = $fdata;
//	Birthday
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "Birthday";
	$fdata["GoodName"] = "Birthday";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","Birthday");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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
	$edata["InitialYearFactor"] = 100;
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




	$tdatademo_user11["Birthday"] = $fdata;
//	DeMinimis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "DeMinimis";
	$fdata["GoodName"] = "DeMinimis";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","DeMinimis");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatademo_user11["DeMinimis"] = $fdata;
//	NoLateDeduction
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "NoLateDeduction";
	$fdata["GoodName"] = "NoLateDeduction";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","NoLateDeduction");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatademo_user11["NoLateDeduction"] = $fdata;
//	IncludeBreakLate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "IncludeBreakLate";
	$fdata["GoodName"] = "IncludeBreakLate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","IncludeBreakLate");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatademo_user11["IncludeBreakLate"] = $fdata;
//	GracePeriodMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "GracePeriodMins";
	$fdata["GoodName"] = "GracePeriodMins";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","GracePeriodMins");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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
		
		$edata["controlWidth"] = 57;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user11["GracePeriodMins"] = $fdata;
//	WithAdditionalBreaks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "WithAdditionalBreaks";
	$fdata["GoodName"] = "WithAdditionalBreaks";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","WithAdditionalBreaks");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user11["WithAdditionalBreaks"] = $fdata;
//	PresetMoNonTax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "PresetMoNonTax";
	$fdata["GoodName"] = "PresetMoNonTax";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","PresetMoNonTax");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user11["PresetMoNonTax"] = $fdata;
//	PreCalMoTaxable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "PreCalMoTaxable";
	$fdata["GoodName"] = "PreCalMoTaxable";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","PreCalMoTaxable");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user11["PreCalMoTaxable"] = $fdata;
//	CalMonthly
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "CalMonthly";
	$fdata["GoodName"] = "CalMonthly";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","CalMonthly");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user11["CalMonthly"] = $fdata;
//	TaxPeriods
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "TaxPeriods";
	$fdata["GoodName"] = "TaxPeriods";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","TaxPeriods");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user11["TaxPeriods"] = $fdata;
//	TaxPerPeriod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "TaxPerPeriod";
	$fdata["GoodName"] = "TaxPerPeriod";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","TaxPerPeriod");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_user11["TaxPerPeriod"] = $fdata;
//	Superior2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "Superior2";
	$fdata["GoodName"] = "Superior2";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","Superior2");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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




	$tdatademo_user11["Superior2"] = $fdata;
//	ExcludeBio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "ExcludeBio";
	$fdata["GoodName"] = "ExcludeBio";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user11","ExcludeBio");
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




	$tdatademo_user11["ExcludeBio"] = $fdata;


$tables_data["demo_user11"]=&$tdatademo_user11;
$field_labels["demo_user11"] = &$fieldLabelsdemo_user11;
$fieldToolTips["demo_user11"] = &$fieldToolTipsdemo_user11;
$placeHolders["demo_user11"] = &$placeHoldersdemo_user11;
$page_titles["demo_user11"] = &$pageTitlesdemo_user11;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["demo_user11"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["demo_user11"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_demo_user11()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "user_id,  user_name,  Photo,  SSSNo,  TIN,  Mobile,  Address,  Email,  EmployeeType,  BasicMonthlyPay,  BasicDailyPay,  EmployeeID,  Division,  Status,  Department,  AllowableSickLeave,  AllowableVacationLeave,  AllowableEmergencyLeave,  SSSEE,  SSSER,  PhilHealthEE,  PhilHealthER,  PagIbigEE,  AllowablePaternityLeave,  HiredDate,  Inactive,  ExitDate,  PagIbigER,  PagIbigNo,  PhilHealthNo,  SSSEC,  `Level`,  DateCreated,  ApprovedDate,  Approved,  Approvedby,  Preparedby,  Checkedby,  CheckedDate,  Checked,  `Position`,  Superior,  Employer,  IDNo,  AccountNo,  LateFixPenalty,  DoNotUpdateContributions,  ExcludeContributionOnPayroll,  Bank,  Birthday,  DeMinimis,  NoLateDeduction,  IncludeBreakLate,  GracePeriodMins,  WithAdditionalBreaks,  PresetMoNonTax,  PreCalMoTaxable,  CalMonthly,  TaxPeriods,  TaxPerPeriod,  Superior2,  ExcludeBio";
$proto0["m_strFrom"] = "FROM demo_user";
$proto0["m_strWhere"] = "(BasicMonthlyPay is null) AND (BasicDailyPay is null)";
$proto0["m_strOrderBy"] = "ORDER BY user_name";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(BasicMonthlyPay is null) AND (BasicDailyPay is null)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(BasicMonthlyPay is null) AND (BasicDailyPay is null)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "BasicMonthlyPay is null";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "BasicMonthlyPay",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "is null";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "BasicDailyPay is null";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "BasicDailyPay",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "is null";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto10["m_sql"] = "user_id";
$proto10["m_srcTableName"] = "demo_user11";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto12["m_sql"] = "user_name";
$proto12["m_srcTableName"] = "demo_user11";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Photo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto14["m_sql"] = "Photo";
$proto14["m_srcTableName"] = "demo_user11";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto16["m_sql"] = "SSSNo";
$proto16["m_srcTableName"] = "demo_user11";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TIN",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto18["m_sql"] = "TIN";
$proto18["m_srcTableName"] = "demo_user11";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Mobile",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto20["m_sql"] = "Mobile";
$proto20["m_srcTableName"] = "demo_user11";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Address",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto22["m_sql"] = "Address";
$proto22["m_srcTableName"] = "demo_user11";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto24["m_sql"] = "Email";
$proto24["m_srcTableName"] = "demo_user11";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeType",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto26["m_sql"] = "EmployeeType";
$proto26["m_srcTableName"] = "demo_user11";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "BasicMonthlyPay",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto28["m_sql"] = "BasicMonthlyPay";
$proto28["m_srcTableName"] = "demo_user11";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "BasicDailyPay",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto30["m_sql"] = "BasicDailyPay";
$proto30["m_srcTableName"] = "demo_user11";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto32["m_sql"] = "EmployeeID";
$proto32["m_srcTableName"] = "demo_user11";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto34["m_sql"] = "Division";
$proto34["m_srcTableName"] = "demo_user11";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto36["m_sql"] = "Status";
$proto36["m_srcTableName"] = "demo_user11";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto38["m_sql"] = "Department";
$proto38["m_srcTableName"] = "demo_user11";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableSickLeave",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto40["m_sql"] = "AllowableSickLeave";
$proto40["m_srcTableName"] = "demo_user11";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableVacationLeave",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto42["m_sql"] = "AllowableVacationLeave";
$proto42["m_srcTableName"] = "demo_user11";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableEmergencyLeave",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto44["m_sql"] = "AllowableEmergencyLeave";
$proto44["m_srcTableName"] = "demo_user11";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSEE",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto46["m_sql"] = "SSSEE";
$proto46["m_srcTableName"] = "demo_user11";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSER",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto48["m_sql"] = "SSSER";
$proto48["m_srcTableName"] = "demo_user11";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "PhilHealthEE",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto50["m_sql"] = "PhilHealthEE";
$proto50["m_srcTableName"] = "demo_user11";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "PhilHealthER",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto52["m_sql"] = "PhilHealthER";
$proto52["m_srcTableName"] = "demo_user11";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbigEE",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto54["m_sql"] = "PagIbigEE";
$proto54["m_srcTableName"] = "demo_user11";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowablePaternityLeave",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto56["m_sql"] = "AllowablePaternityLeave";
$proto56["m_srcTableName"] = "demo_user11";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "HiredDate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto58["m_sql"] = "HiredDate";
$proto58["m_srcTableName"] = "demo_user11";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Inactive",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto60["m_sql"] = "Inactive";
$proto60["m_srcTableName"] = "demo_user11";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "ExitDate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto62["m_sql"] = "ExitDate";
$proto62["m_srcTableName"] = "demo_user11";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbigER",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto64["m_sql"] = "PagIbigER";
$proto64["m_srcTableName"] = "demo_user11";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbigNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto66["m_sql"] = "PagIbigNo";
$proto66["m_srcTableName"] = "demo_user11";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "PhilHealthNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto68["m_sql"] = "PhilHealthNo";
$proto68["m_srcTableName"] = "demo_user11";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSEC",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto70["m_sql"] = "SSSEC";
$proto70["m_srcTableName"] = "demo_user11";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Level",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto72["m_sql"] = "`Level`";
$proto72["m_srcTableName"] = "demo_user11";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "DateCreated",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto74["m_sql"] = "DateCreated";
$proto74["m_srcTableName"] = "demo_user11";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedDate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto76["m_sql"] = "ApprovedDate";
$proto76["m_srcTableName"] = "demo_user11";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "Approved",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto78["m_sql"] = "Approved";
$proto78["m_srcTableName"] = "demo_user11";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "Approvedby",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto80["m_sql"] = "Approvedby";
$proto80["m_srcTableName"] = "demo_user11";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Preparedby",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto82["m_sql"] = "Preparedby";
$proto82["m_srcTableName"] = "demo_user11";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Checkedby",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto84["m_sql"] = "Checkedby";
$proto84["m_srcTableName"] = "demo_user11";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "CheckedDate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto86["m_sql"] = "CheckedDate";
$proto86["m_srcTableName"] = "demo_user11";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "Checked",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto88["m_sql"] = "Checked";
$proto88["m_srcTableName"] = "demo_user11";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "Position",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto90["m_sql"] = "`Position`";
$proto90["m_srcTableName"] = "demo_user11";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto92["m_sql"] = "Superior";
$proto92["m_srcTableName"] = "demo_user11";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto94["m_sql"] = "Employer";
$proto94["m_srcTableName"] = "demo_user11";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "IDNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto96["m_sql"] = "IDNo";
$proto96["m_srcTableName"] = "demo_user11";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto98["m_sql"] = "AccountNo";
$proto98["m_srcTableName"] = "demo_user11";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "LateFixPenalty",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto100["m_sql"] = "LateFixPenalty";
$proto100["m_srcTableName"] = "demo_user11";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "DoNotUpdateContributions",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto102["m_sql"] = "DoNotUpdateContributions";
$proto102["m_srcTableName"] = "demo_user11";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "ExcludeContributionOnPayroll",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto104["m_sql"] = "ExcludeContributionOnPayroll";
$proto104["m_srcTableName"] = "demo_user11";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "Bank",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto106["m_sql"] = "Bank";
$proto106["m_srcTableName"] = "demo_user11";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "Birthday",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto108["m_sql"] = "Birthday";
$proto108["m_srcTableName"] = "demo_user11";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "DeMinimis",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto110["m_sql"] = "DeMinimis";
$proto110["m_srcTableName"] = "demo_user11";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "NoLateDeduction",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto112["m_sql"] = "NoLateDeduction";
$proto112["m_srcTableName"] = "demo_user11";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "IncludeBreakLate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto114["m_sql"] = "IncludeBreakLate";
$proto114["m_srcTableName"] = "demo_user11";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "GracePeriodMins",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto116["m_sql"] = "GracePeriodMins";
$proto116["m_srcTableName"] = "demo_user11";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "WithAdditionalBreaks",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto118["m_sql"] = "WithAdditionalBreaks";
$proto118["m_srcTableName"] = "demo_user11";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "PresetMoNonTax",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto120["m_sql"] = "PresetMoNonTax";
$proto120["m_srcTableName"] = "demo_user11";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "PreCalMoTaxable",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto122["m_sql"] = "PreCalMoTaxable";
$proto122["m_srcTableName"] = "demo_user11";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "CalMonthly",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto124["m_sql"] = "CalMonthly";
$proto124["m_srcTableName"] = "demo_user11";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "TaxPeriods",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto126["m_sql"] = "TaxPeriods";
$proto126["m_srcTableName"] = "demo_user11";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "TaxPerPeriod",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto128["m_sql"] = "TaxPerPeriod";
$proto128["m_srcTableName"] = "demo_user11";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior2",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto130["m_sql"] = "Superior2";
$proto130["m_srcTableName"] = "demo_user11";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "ExcludeBio",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto132["m_sql"] = "ExcludeBio";
$proto132["m_srcTableName"] = "demo_user11";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto134=array();
$proto134["m_link"] = "SQLL_MAIN";
			$proto135=array();
$proto135["m_strName"] = "demo_user";
$proto135["m_srcTableName"] = "demo_user11";
$proto135["m_columns"] = array();
$proto135["m_columns"][] = "user_id";
$proto135["m_columns"][] = "user_name";
$proto135["m_columns"][] = "Photo";
$proto135["m_columns"][] = "user_photo";
$proto135["m_columns"][] = "SSSNo";
$proto135["m_columns"][] = "TIN";
$proto135["m_columns"][] = "Mobile";
$proto135["m_columns"][] = "Address";
$proto135["m_columns"][] = "Email";
$proto135["m_columns"][] = "EmployeeType";
$proto135["m_columns"][] = "BasicMonthlyPay";
$proto135["m_columns"][] = "BasicDailyPay";
$proto135["m_columns"][] = "EmployeeID";
$proto135["m_columns"][] = "Division";
$proto135["m_columns"][] = "Status";
$proto135["m_columns"][] = "Department";
$proto135["m_columns"][] = "AllowableSickLeave";
$proto135["m_columns"][] = "AllowableVacationLeave";
$proto135["m_columns"][] = "AllowableEmergencyLeave";
$proto135["m_columns"][] = "SSSEE";
$proto135["m_columns"][] = "SSSER";
$proto135["m_columns"][] = "PhilHealthEE";
$proto135["m_columns"][] = "PhilHealthER";
$proto135["m_columns"][] = "PagIbigEE";
$proto135["m_columns"][] = "AllowablePaternityLeave";
$proto135["m_columns"][] = "HiredDate";
$proto135["m_columns"][] = "Inactive";
$proto135["m_columns"][] = "ExitDate";
$proto135["m_columns"][] = "PagIbigER";
$proto135["m_columns"][] = "PagIbigNo";
$proto135["m_columns"][] = "PhilHealthNo";
$proto135["m_columns"][] = "SSSEC";
$proto135["m_columns"][] = "Filex";
$proto135["m_columns"][] = "PresetTax";
$proto135["m_columns"][] = "AgentSharePerDay";
$proto135["m_columns"][] = "AllowancePerDay";
$proto135["m_columns"][] = "DeMinimis";
$proto135["m_columns"][] = "Level";
$proto135["m_columns"][] = "DateCreated";
$proto135["m_columns"][] = "ApprovedDate";
$proto135["m_columns"][] = "Approved";
$proto135["m_columns"][] = "Approvedby";
$proto135["m_columns"][] = "Preparedby";
$proto135["m_columns"][] = "Checkedby";
$proto135["m_columns"][] = "CheckedDate";
$proto135["m_columns"][] = "Checked";
$proto135["m_columns"][] = "AdjustedMonthlyPay";
$proto135["m_columns"][] = "AdjustedDailyPay";
$proto135["m_columns"][] = "Superior";
$proto135["m_columns"][] = "Position";
$proto135["m_columns"][] = "Employer";
$proto135["m_columns"][] = "IDNo";
$proto135["m_columns"][] = "AccountNo";
$proto135["m_columns"][] = "LogID";
$proto135["m_columns"][] = "LateFixPenalty";
$proto135["m_columns"][] = "DoNotUpdateContributions";
$proto135["m_columns"][] = "ExcludeContributionOnPayroll";
$proto135["m_columns"][] = "Birthday";
$proto135["m_columns"][] = "Bank";
$proto135["m_columns"][] = "NoLateDeduction";
$proto135["m_columns"][] = "IncludeBreakLate";
$proto135["m_columns"][] = "GracePeriodMins";
$proto135["m_columns"][] = "WithAdditionalBreaks";
$proto135["m_columns"][] = "TaxPeriods";
$proto135["m_columns"][] = "PresetMoNonTax";
$proto135["m_columns"][] = "PreCalMoTaxable";
$proto135["m_columns"][] = "CalMonthly";
$proto135["m_columns"][] = "TaxPerPeriod";
$proto135["m_columns"][] = "Superior2";
$proto135["m_columns"][] = "ExcludeBio";
$obj = new SQLTable($proto135);

$proto134["m_table"] = $obj;
$proto134["m_sql"] = "demo_user";
$proto134["m_alias"] = "";
$proto134["m_srcTableName"] = "demo_user11";
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
												$proto138=array();
						$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user11"
));

$proto138["m_column"]=$obj;
$proto138["m_bAsc"] = 1;
$proto138["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto138);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="demo_user11";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_demo_user11 = createSqlQuery_demo_user11();


	
		;

																																																														

$tdatademo_user11[".sqlquery"] = $queryData_demo_user11;

include_once(getabspath("include/demo_user11_events.php"));
$tableEvents["demo_user11"] = new eventclass_demo_user11;
$tdatademo_user11[".hasEvents"] = true;

?>