<?php
require_once(getabspath("classes/cipherer.php"));




$tdatademo_useremp = array();
	$tdatademo_useremp[".truncateText"] = true;
	$tdatademo_useremp[".NumberOfChars"] = 80;
	$tdatademo_useremp[".ShortName"] = "demo_useremp";
	$tdatademo_useremp[".OwnerID"] = "EmployeeID";
	$tdatademo_useremp[".OriginalTable"] = "demo_user";

//	field labels
$fieldLabelsdemo_useremp = array();
$fieldToolTipsdemo_useremp = array();
$pageTitlesdemo_useremp = array();
$placeHoldersdemo_useremp = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdemo_useremp["English"] = array();
	$fieldToolTipsdemo_useremp["English"] = array();
	$placeHoldersdemo_useremp["English"] = array();
	$pageTitlesdemo_useremp["English"] = array();
	$fieldLabelsdemo_useremp["English"]["user_id"] = "User Id";
	$fieldToolTipsdemo_useremp["English"]["user_id"] = "";
	$placeHoldersdemo_useremp["English"]["user_id"] = "";
	$fieldLabelsdemo_useremp["English"]["user_name"] = "Employee";
	$fieldToolTipsdemo_useremp["English"]["user_name"] = "";
	$placeHoldersdemo_useremp["English"]["user_name"] = "";
	$fieldLabelsdemo_useremp["English"]["Photo"] = "Photo";
	$fieldToolTipsdemo_useremp["English"]["Photo"] = "";
	$placeHoldersdemo_useremp["English"]["Photo"] = "";
	$fieldLabelsdemo_useremp["English"]["EmployeeType"] = "Wage Type";
	$fieldToolTipsdemo_useremp["English"]["EmployeeType"] = "";
	$placeHoldersdemo_useremp["English"]["EmployeeType"] = "";
	$fieldLabelsdemo_useremp["English"]["SSSNo"] = "SSS No";
	$fieldToolTipsdemo_useremp["English"]["SSSNo"] = "";
	$placeHoldersdemo_useremp["English"]["SSSNo"] = "";
	$fieldLabelsdemo_useremp["English"]["TIN"] = "TIN";
	$fieldToolTipsdemo_useremp["English"]["TIN"] = "";
	$placeHoldersdemo_useremp["English"]["TIN"] = "";
	$fieldLabelsdemo_useremp["English"]["Mobile"] = "Mobile";
	$fieldToolTipsdemo_useremp["English"]["Mobile"] = "";
	$placeHoldersdemo_useremp["English"]["Mobile"] = "";
	$fieldLabelsdemo_useremp["English"]["Address"] = "Address";
	$fieldToolTipsdemo_useremp["English"]["Address"] = "";
	$placeHoldersdemo_useremp["English"]["Address"] = "";
	$fieldLabelsdemo_useremp["English"]["Email"] = "Email";
	$fieldToolTipsdemo_useremp["English"]["Email"] = "";
	$placeHoldersdemo_useremp["English"]["Email"] = "";
	$fieldLabelsdemo_useremp["English"]["EmployeeID"] = "Biometric ID";
	$fieldToolTipsdemo_useremp["English"]["EmployeeID"] = "";
	$placeHoldersdemo_useremp["English"]["EmployeeID"] = "";
	$fieldLabelsdemo_useremp["English"]["Division"] = "Division";
	$fieldToolTipsdemo_useremp["English"]["Division"] = "";
	$placeHoldersdemo_useremp["English"]["Division"] = "";
	$fieldLabelsdemo_useremp["English"]["Status"] = "Status";
	$fieldToolTipsdemo_useremp["English"]["Status"] = "";
	$placeHoldersdemo_useremp["English"]["Status"] = "";
	$fieldLabelsdemo_useremp["English"]["Department"] = "Department";
	$fieldToolTipsdemo_useremp["English"]["Department"] = "";
	$placeHoldersdemo_useremp["English"]["Department"] = "";
	$fieldLabelsdemo_useremp["English"]["AllowableSickLeave"] = "SL";
	$fieldToolTipsdemo_useremp["English"]["AllowableSickLeave"] = "";
	$placeHoldersdemo_useremp["English"]["AllowableSickLeave"] = "";
	$fieldLabelsdemo_useremp["English"]["AllowableVacationLeave"] = "VL";
	$fieldToolTipsdemo_useremp["English"]["AllowableVacationLeave"] = "";
	$placeHoldersdemo_useremp["English"]["AllowableVacationLeave"] = "";
	$fieldLabelsdemo_useremp["English"]["AllowableEmergencyLeave"] = "EL";
	$fieldToolTipsdemo_useremp["English"]["AllowableEmergencyLeave"] = "";
	$placeHoldersdemo_useremp["English"]["AllowableEmergencyLeave"] = "";
	$fieldLabelsdemo_useremp["English"]["SSSEE"] = "SSS EE";
	$fieldToolTipsdemo_useremp["English"]["SSSEE"] = "";
	$placeHoldersdemo_useremp["English"]["SSSEE"] = "";
	$fieldLabelsdemo_useremp["English"]["SSSER"] = "SSS ER";
	$fieldToolTipsdemo_useremp["English"]["SSSER"] = "";
	$placeHoldersdemo_useremp["English"]["SSSER"] = "";
	$fieldLabelsdemo_useremp["English"]["PhilHealthEE"] = "PHIC EE";
	$fieldToolTipsdemo_useremp["English"]["PhilHealthEE"] = "";
	$placeHoldersdemo_useremp["English"]["PhilHealthEE"] = "";
	$fieldLabelsdemo_useremp["English"]["PhilHealthER"] = "PHIC ER";
	$fieldToolTipsdemo_useremp["English"]["PhilHealthER"] = "";
	$placeHoldersdemo_useremp["English"]["PhilHealthER"] = "";
	$fieldLabelsdemo_useremp["English"]["AllowablePaternityLeave"] = "PL";
	$fieldToolTipsdemo_useremp["English"]["AllowablePaternityLeave"] = "";
	$placeHoldersdemo_useremp["English"]["AllowablePaternityLeave"] = "";
	$fieldLabelsdemo_useremp["English"]["HiredDate"] = "Hired Date";
	$fieldToolTipsdemo_useremp["English"]["HiredDate"] = "";
	$placeHoldersdemo_useremp["English"]["HiredDate"] = "";
	$fieldLabelsdemo_useremp["English"]["ExitDate"] = "Exit Date";
	$fieldToolTipsdemo_useremp["English"]["ExitDate"] = "";
	$placeHoldersdemo_useremp["English"]["ExitDate"] = "";
	$fieldLabelsdemo_useremp["English"]["Inactive"] = "Inactive";
	$fieldToolTipsdemo_useremp["English"]["Inactive"] = "";
	$placeHoldersdemo_useremp["English"]["Inactive"] = "";
	$fieldLabelsdemo_useremp["English"]["PagIbigEE"] = "HDMF EE";
	$fieldToolTipsdemo_useremp["English"]["PagIbigEE"] = "";
	$placeHoldersdemo_useremp["English"]["PagIbigEE"] = "";
	$fieldLabelsdemo_useremp["English"]["PagIbigER"] = "HDMF ER";
	$fieldToolTipsdemo_useremp["English"]["PagIbigER"] = "";
	$placeHoldersdemo_useremp["English"]["PagIbigER"] = "";
	$fieldLabelsdemo_useremp["English"]["PagIbigNo"] = "HDMF No";
	$fieldToolTipsdemo_useremp["English"]["PagIbigNo"] = "";
	$placeHoldersdemo_useremp["English"]["PagIbigNo"] = "";
	$fieldLabelsdemo_useremp["English"]["PhilHealthNo"] = "PHIC No";
	$fieldToolTipsdemo_useremp["English"]["PhilHealthNo"] = "";
	$placeHoldersdemo_useremp["English"]["PhilHealthNo"] = "";
	$fieldLabelsdemo_useremp["English"]["SSSEC"] = "SSS EC";
	$fieldToolTipsdemo_useremp["English"]["SSSEC"] = "";
	$placeHoldersdemo_useremp["English"]["SSSEC"] = "";
	$fieldLabelsdemo_useremp["English"]["Level"] = "Level";
	$fieldToolTipsdemo_useremp["English"]["Level"] = "";
	$placeHoldersdemo_useremp["English"]["Level"] = "";
	$fieldLabelsdemo_useremp["English"]["DateCreated"] = "Date Created";
	$fieldToolTipsdemo_useremp["English"]["DateCreated"] = "";
	$placeHoldersdemo_useremp["English"]["DateCreated"] = "";
	$fieldLabelsdemo_useremp["English"]["ApprovedDate"] = "Approved Date";
	$fieldToolTipsdemo_useremp["English"]["ApprovedDate"] = "";
	$placeHoldersdemo_useremp["English"]["ApprovedDate"] = "";
	$fieldLabelsdemo_useremp["English"]["Approved"] = "Approved";
	$fieldToolTipsdemo_useremp["English"]["Approved"] = "";
	$placeHoldersdemo_useremp["English"]["Approved"] = "";
	$fieldLabelsdemo_useremp["English"]["Approvedby"] = "Approvedby";
	$fieldToolTipsdemo_useremp["English"]["Approvedby"] = "";
	$placeHoldersdemo_useremp["English"]["Approvedby"] = "";
	$fieldLabelsdemo_useremp["English"]["Preparedby"] = "Preparedby";
	$fieldToolTipsdemo_useremp["English"]["Preparedby"] = "";
	$placeHoldersdemo_useremp["English"]["Preparedby"] = "";
	$fieldLabelsdemo_useremp["English"]["Checkedby"] = "Checkedby";
	$fieldToolTipsdemo_useremp["English"]["Checkedby"] = "";
	$placeHoldersdemo_useremp["English"]["Checkedby"] = "";
	$fieldLabelsdemo_useremp["English"]["CheckedDate"] = "Checked Date";
	$fieldToolTipsdemo_useremp["English"]["CheckedDate"] = "";
	$placeHoldersdemo_useremp["English"]["CheckedDate"] = "";
	$fieldLabelsdemo_useremp["English"]["Checked"] = "Checked";
	$fieldToolTipsdemo_useremp["English"]["Checked"] = "";
	$placeHoldersdemo_useremp["English"]["Checked"] = "";
	$fieldLabelsdemo_useremp["English"]["Superior"] = "Supervisor";
	$fieldToolTipsdemo_useremp["English"]["Superior"] = "";
	$placeHoldersdemo_useremp["English"]["Superior"] = "";
	$fieldLabelsdemo_useremp["English"]["Position"] = "Position";
	$fieldToolTipsdemo_useremp["English"]["Position"] = "";
	$placeHoldersdemo_useremp["English"]["Position"] = "";
	$fieldLabelsdemo_useremp["English"]["Employer"] = "Employer";
	$fieldToolTipsdemo_useremp["English"]["Employer"] = "";
	$placeHoldersdemo_useremp["English"]["Employer"] = "";
	$fieldLabelsdemo_useremp["English"]["IDNo"] = "Employee ID";
	$fieldToolTipsdemo_useremp["English"]["IDNo"] = "";
	$placeHoldersdemo_useremp["English"]["IDNo"] = "";
	$fieldLabelsdemo_useremp["English"]["AccountNo"] = "Account No";
	$fieldToolTipsdemo_useremp["English"]["AccountNo"] = "";
	$placeHoldersdemo_useremp["English"]["AccountNo"] = "";
	$fieldLabelsdemo_useremp["English"]["LateFixPenalty"] = "Late Fix Penalty";
	$fieldToolTipsdemo_useremp["English"]["LateFixPenalty"] = "";
	$placeHoldersdemo_useremp["English"]["LateFixPenalty"] = "";
	$fieldLabelsdemo_useremp["English"]["DoNotUpdateContributions"] = "Do Not Update Contributions";
	$fieldToolTipsdemo_useremp["English"]["DoNotUpdateContributions"] = "";
	$placeHoldersdemo_useremp["English"]["DoNotUpdateContributions"] = "";
	$fieldLabelsdemo_useremp["English"]["ExcludeContributionOnPayroll"] = "Exclude Contribution On Payroll";
	$fieldToolTipsdemo_useremp["English"]["ExcludeContributionOnPayroll"] = "";
	$placeHoldersdemo_useremp["English"]["ExcludeContributionOnPayroll"] = "";
	$fieldLabelsdemo_useremp["English"]["Birthday"] = "Birthday";
	$fieldToolTipsdemo_useremp["English"]["Birthday"] = "";
	$placeHoldersdemo_useremp["English"]["Birthday"] = "";
	$fieldLabelsdemo_useremp["English"]["Bank"] = "Bank";
	$fieldToolTipsdemo_useremp["English"]["Bank"] = "";
	$placeHoldersdemo_useremp["English"]["Bank"] = "";
	$fieldLabelsdemo_useremp["English"]["NoLateDeduction"] = "No Late Deduction";
	$fieldToolTipsdemo_useremp["English"]["NoLateDeduction"] = "";
	$placeHoldersdemo_useremp["English"]["NoLateDeduction"] = "";
	$fieldLabelsdemo_useremp["English"]["IncludeBreakLate"] = "Include Break Late";
	$fieldToolTipsdemo_useremp["English"]["IncludeBreakLate"] = "";
	$placeHoldersdemo_useremp["English"]["IncludeBreakLate"] = "";
	$fieldLabelsdemo_useremp["English"]["GracePeriodMins"] = "Grace Period Mins";
	$fieldToolTipsdemo_useremp["English"]["GracePeriodMins"] = "";
	$placeHoldersdemo_useremp["English"]["GracePeriodMins"] = "";
	$fieldLabelsdemo_useremp["English"]["WithAdditionalBreaks"] = "With Additional Breaks";
	$fieldToolTipsdemo_useremp["English"]["WithAdditionalBreaks"] = "";
	$placeHoldersdemo_useremp["English"]["WithAdditionalBreaks"] = "";
	$fieldLabelsdemo_useremp["English"]["TaxPeriods"] = "Tax Periods";
	$fieldToolTipsdemo_useremp["English"]["TaxPeriods"] = "";
	$placeHoldersdemo_useremp["English"]["TaxPeriods"] = "";
	$fieldLabelsdemo_useremp["English"]["PresetMoNonTax"] = "Preset Monthly Add'l Taxable";
	$fieldToolTipsdemo_useremp["English"]["PresetMoNonTax"] = "";
	$placeHoldersdemo_useremp["English"]["PresetMoNonTax"] = "";
	$fieldLabelsdemo_useremp["English"]["PreCalMoTaxable"] = "Pre-Calculated Monthly Taxable";
	$fieldToolTipsdemo_useremp["English"]["PreCalMoTaxable"] = "";
	$placeHoldersdemo_useremp["English"]["PreCalMoTaxable"] = "";
	$fieldLabelsdemo_useremp["English"]["CalMonthly"] = "Calculated Monthly Income";
	$fieldToolTipsdemo_useremp["English"]["CalMonthly"] = "";
	$placeHoldersdemo_useremp["English"]["CalMonthly"] = "";
	$fieldLabelsdemo_useremp["English"]["TaxPerPeriod"] = "Tax Per Period";
	$fieldToolTipsdemo_useremp["English"]["TaxPerPeriod"] = "";
	$placeHoldersdemo_useremp["English"]["TaxPerPeriod"] = "";
	$fieldLabelsdemo_useremp["English"]["Superior2"] = "Manager";
	$fieldToolTipsdemo_useremp["English"]["Superior2"] = "";
	$placeHoldersdemo_useremp["English"]["Superior2"] = "";
	$fieldLabelsdemo_useremp["English"]["BasicMonthlyPay"] = "Basic Monthly Pay";
	$fieldToolTipsdemo_useremp["English"]["BasicMonthlyPay"] = "";
	$placeHoldersdemo_useremp["English"]["BasicMonthlyPay"] = "";
	$fieldLabelsdemo_useremp["English"]["BasicDailyPay"] = "Basic Daily Pay";
	$fieldToolTipsdemo_useremp["English"]["BasicDailyPay"] = "";
	$placeHoldersdemo_useremp["English"]["BasicDailyPay"] = "";
	if (count($fieldToolTipsdemo_useremp["English"]))
		$tdatademo_useremp[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdemo_useremp[""] = array();
	$fieldToolTipsdemo_useremp[""] = array();
	$placeHoldersdemo_useremp[""] = array();
	$pageTitlesdemo_useremp[""] = array();
	$fieldLabelsdemo_useremp[""]["TaxPeriods"] = "Tax Periods";
	$fieldToolTipsdemo_useremp[""]["TaxPeriods"] = "";
	$placeHoldersdemo_useremp[""]["TaxPeriods"] = "";
	$fieldLabelsdemo_useremp[""]["PresetMoNonTax"] = "Preset Mo Non Tax";
	$fieldToolTipsdemo_useremp[""]["PresetMoNonTax"] = "";
	$placeHoldersdemo_useremp[""]["PresetMoNonTax"] = "";
	$fieldLabelsdemo_useremp[""]["PreCalMoTaxable"] = "Pre Cal Mo Taxable";
	$fieldToolTipsdemo_useremp[""]["PreCalMoTaxable"] = "";
	$placeHoldersdemo_useremp[""]["PreCalMoTaxable"] = "";
	$fieldLabelsdemo_useremp[""]["CalMonthly"] = "Cal Monthly";
	$fieldToolTipsdemo_useremp[""]["CalMonthly"] = "";
	$placeHoldersdemo_useremp[""]["CalMonthly"] = "";
	$fieldLabelsdemo_useremp[""]["TaxPerPeriod"] = "Tax Per Period";
	$fieldToolTipsdemo_useremp[""]["TaxPerPeriod"] = "";
	$placeHoldersdemo_useremp[""]["TaxPerPeriod"] = "";
	$fieldLabelsdemo_useremp[""]["Superior2"] = "Superior2";
	$fieldToolTipsdemo_useremp[""]["Superior2"] = "";
	$placeHoldersdemo_useremp[""]["Superior2"] = "";
	$fieldLabelsdemo_useremp[""]["BasicMonthlyPay"] = "Basic Monthly Pay";
	$fieldToolTipsdemo_useremp[""]["BasicMonthlyPay"] = "";
	$placeHoldersdemo_useremp[""]["BasicMonthlyPay"] = "";
	$fieldLabelsdemo_useremp[""]["BasicDailyPay"] = "Basic Daily Pay";
	$fieldToolTipsdemo_useremp[""]["BasicDailyPay"] = "";
	$placeHoldersdemo_useremp[""]["BasicDailyPay"] = "";
	if (count($fieldToolTipsdemo_useremp[""]))
		$tdatademo_useremp[".isUseToolTips"] = true;
}


	$tdatademo_useremp[".NCSearch"] = true;



$tdatademo_useremp[".shortTableName"] = "demo_useremp";
$tdatademo_useremp[".nSecOptions"] = 1;
$tdatademo_useremp[".recsPerRowPrint"] = 1;
$tdatademo_useremp[".mainTableOwnerID"] = "EmployeeID";
$tdatademo_useremp[".moveNext"] = 1;
$tdatademo_useremp[".entityType"] = 1;

$tdatademo_useremp[".strOriginalTableName"] = "demo_user";

	



$tdatademo_useremp[".showAddInPopup"] = false;

$tdatademo_useremp[".showEditInPopup"] = false;

$tdatademo_useremp[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatademo_useremp[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatademo_useremp[".fieldsForRegister"] = array();

$tdatademo_useremp[".listAjax"] = false;

	$tdatademo_useremp[".audit"] = false;

	$tdatademo_useremp[".locking"] = false;



$tdatademo_useremp[".list"] = true;



$tdatademo_useremp[".reorderRecordsByHeader"] = true;


$tdatademo_useremp[".exportFormatting"] = 2;
$tdatademo_useremp[".exportDelimiter"] = ",";
		
$tdatademo_useremp[".view"] = true;


$tdatademo_useremp[".exportTo"] = true;

$tdatademo_useremp[".printFriendly"] = true;


$tdatademo_useremp[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatademo_useremp[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatademo_useremp[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatademo_useremp[".searchSaving"] = false;
//

$tdatademo_useremp[".showSearchPanel"] = true;
		$tdatademo_useremp[".flexibleSearch"] = true;

$tdatademo_useremp[".isUseAjaxSuggest"] = true;

$tdatademo_useremp[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																					

$tdatademo_useremp[".ajaxCodeSnippetAdded"] = false;

$tdatademo_useremp[".buttonsAdded"] = false;

$tdatademo_useremp[".addPageEvents"] = true;

// use timepicker for search panel
$tdatademo_useremp[".isUseTimeForSearch"] = false;



$tdatademo_useremp[".badgeColor"] = "4682B4";


$tdatademo_useremp[".allSearchFields"] = array();
$tdatademo_useremp[".filterFields"] = array();
$tdatademo_useremp[".requiredSearchFields"] = array();

$tdatademo_useremp[".allSearchFields"][] = "EmployeeID";
	$tdatademo_useremp[".allSearchFields"][] = "IDNo";
	$tdatademo_useremp[".allSearchFields"][] = "Photo";
	$tdatademo_useremp[".allSearchFields"][] = "user_name";
	$tdatademo_useremp[".allSearchFields"][] = "Employer";
	$tdatademo_useremp[".allSearchFields"][] = "Division";
	$tdatademo_useremp[".allSearchFields"][] = "Department";
	$tdatademo_useremp[".allSearchFields"][] = "HiredDate";
	$tdatademo_useremp[".allSearchFields"][] = "Inactive";
	$tdatademo_useremp[".allSearchFields"][] = "ExitDate";
	$tdatademo_useremp[".allSearchFields"][] = "Status";
	$tdatademo_useremp[".allSearchFields"][] = "Position";
	$tdatademo_useremp[".allSearchFields"][] = "Superior";
	$tdatademo_useremp[".allSearchFields"][] = "Superior2";
	$tdatademo_useremp[".allSearchFields"][] = "Mobile";
	$tdatademo_useremp[".allSearchFields"][] = "Address";
	$tdatademo_useremp[".allSearchFields"][] = "Birthday";
	$tdatademo_useremp[".allSearchFields"][] = "Email";
	$tdatademo_useremp[".allSearchFields"][] = "SSSNo";
	$tdatademo_useremp[".allSearchFields"][] = "PagIbigNo";
	$tdatademo_useremp[".allSearchFields"][] = "PhilHealthNo";
	$tdatademo_useremp[".allSearchFields"][] = "TIN";
	$tdatademo_useremp[".allSearchFields"][] = "Bank";
	$tdatademo_useremp[".allSearchFields"][] = "AccountNo";
	$tdatademo_useremp[".allSearchFields"][] = "AllowableSickLeave";
	$tdatademo_useremp[".allSearchFields"][] = "AllowableVacationLeave";
	$tdatademo_useremp[".allSearchFields"][] = "AllowableEmergencyLeave";
	$tdatademo_useremp[".allSearchFields"][] = "AllowablePaternityLeave";
	$tdatademo_useremp[".allSearchFields"][] = "EmployeeType";
	$tdatademo_useremp[".allSearchFields"][] = "Level";
	$tdatademo_useremp[".allSearchFields"][] = "BasicMonthlyPay";
	$tdatademo_useremp[".allSearchFields"][] = "BasicDailyPay";
	$tdatademo_useremp[".allSearchFields"][] = "SSSEE";
	$tdatademo_useremp[".allSearchFields"][] = "SSSER";
	$tdatademo_useremp[".allSearchFields"][] = "SSSEC";
	$tdatademo_useremp[".allSearchFields"][] = "PhilHealthEE";
	$tdatademo_useremp[".allSearchFields"][] = "PhilHealthER";
	$tdatademo_useremp[".allSearchFields"][] = "PagIbigEE";
	$tdatademo_useremp[".allSearchFields"][] = "PagIbigER";
	

$tdatademo_useremp[".googleLikeFields"] = array();
$tdatademo_useremp[".googleLikeFields"][] = "user_id";
$tdatademo_useremp[".googleLikeFields"][] = "user_name";
$tdatademo_useremp[".googleLikeFields"][] = "Photo";
$tdatademo_useremp[".googleLikeFields"][] = "SSSNo";
$tdatademo_useremp[".googleLikeFields"][] = "TIN";
$tdatademo_useremp[".googleLikeFields"][] = "Mobile";
$tdatademo_useremp[".googleLikeFields"][] = "Address";
$tdatademo_useremp[".googleLikeFields"][] = "Email";
$tdatademo_useremp[".googleLikeFields"][] = "EmployeeType";
$tdatademo_useremp[".googleLikeFields"][] = "EmployeeID";
$tdatademo_useremp[".googleLikeFields"][] = "Division";
$tdatademo_useremp[".googleLikeFields"][] = "Status";
$tdatademo_useremp[".googleLikeFields"][] = "Department";
$tdatademo_useremp[".googleLikeFields"][] = "AllowableSickLeave";
$tdatademo_useremp[".googleLikeFields"][] = "AllowableVacationLeave";
$tdatademo_useremp[".googleLikeFields"][] = "AllowableEmergencyLeave";
$tdatademo_useremp[".googleLikeFields"][] = "SSSEE";
$tdatademo_useremp[".googleLikeFields"][] = "SSSER";
$tdatademo_useremp[".googleLikeFields"][] = "PhilHealthEE";
$tdatademo_useremp[".googleLikeFields"][] = "PhilHealthER";
$tdatademo_useremp[".googleLikeFields"][] = "PagIbigEE";
$tdatademo_useremp[".googleLikeFields"][] = "AllowablePaternityLeave";
$tdatademo_useremp[".googleLikeFields"][] = "HiredDate";
$tdatademo_useremp[".googleLikeFields"][] = "Inactive";
$tdatademo_useremp[".googleLikeFields"][] = "ExitDate";
$tdatademo_useremp[".googleLikeFields"][] = "PagIbigER";
$tdatademo_useremp[".googleLikeFields"][] = "PagIbigNo";
$tdatademo_useremp[".googleLikeFields"][] = "PhilHealthNo";
$tdatademo_useremp[".googleLikeFields"][] = "SSSEC";
$tdatademo_useremp[".googleLikeFields"][] = "Level";
$tdatademo_useremp[".googleLikeFields"][] = "DateCreated";
$tdatademo_useremp[".googleLikeFields"][] = "ApprovedDate";
$tdatademo_useremp[".googleLikeFields"][] = "Approved";
$tdatademo_useremp[".googleLikeFields"][] = "Approvedby";
$tdatademo_useremp[".googleLikeFields"][] = "Preparedby";
$tdatademo_useremp[".googleLikeFields"][] = "Checkedby";
$tdatademo_useremp[".googleLikeFields"][] = "CheckedDate";
$tdatademo_useremp[".googleLikeFields"][] = "Checked";
$tdatademo_useremp[".googleLikeFields"][] = "Superior";
$tdatademo_useremp[".googleLikeFields"][] = "Position";
$tdatademo_useremp[".googleLikeFields"][] = "Employer";
$tdatademo_useremp[".googleLikeFields"][] = "IDNo";
$tdatademo_useremp[".googleLikeFields"][] = "AccountNo";
$tdatademo_useremp[".googleLikeFields"][] = "LateFixPenalty";
$tdatademo_useremp[".googleLikeFields"][] = "DoNotUpdateContributions";
$tdatademo_useremp[".googleLikeFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_useremp[".googleLikeFields"][] = "Birthday";
$tdatademo_useremp[".googleLikeFields"][] = "Bank";
$tdatademo_useremp[".googleLikeFields"][] = "NoLateDeduction";
$tdatademo_useremp[".googleLikeFields"][] = "IncludeBreakLate";
$tdatademo_useremp[".googleLikeFields"][] = "GracePeriodMins";
$tdatademo_useremp[".googleLikeFields"][] = "WithAdditionalBreaks";
$tdatademo_useremp[".googleLikeFields"][] = "TaxPeriods";
$tdatademo_useremp[".googleLikeFields"][] = "PresetMoNonTax";
$tdatademo_useremp[".googleLikeFields"][] = "PreCalMoTaxable";
$tdatademo_useremp[".googleLikeFields"][] = "CalMonthly";
$tdatademo_useremp[".googleLikeFields"][] = "TaxPerPeriod";
$tdatademo_useremp[".googleLikeFields"][] = "Superior2";
$tdatademo_useremp[".googleLikeFields"][] = "BasicMonthlyPay";
$tdatademo_useremp[".googleLikeFields"][] = "BasicDailyPay";


$tdatademo_useremp[".advSearchFields"] = array();
$tdatademo_useremp[".advSearchFields"][] = "EmployeeID";
$tdatademo_useremp[".advSearchFields"][] = "IDNo";
$tdatademo_useremp[".advSearchFields"][] = "Photo";
$tdatademo_useremp[".advSearchFields"][] = "user_name";
$tdatademo_useremp[".advSearchFields"][] = "Employer";
$tdatademo_useremp[".advSearchFields"][] = "Division";
$tdatademo_useremp[".advSearchFields"][] = "Department";
$tdatademo_useremp[".advSearchFields"][] = "HiredDate";
$tdatademo_useremp[".advSearchFields"][] = "Inactive";
$tdatademo_useremp[".advSearchFields"][] = "ExitDate";
$tdatademo_useremp[".advSearchFields"][] = "Status";
$tdatademo_useremp[".advSearchFields"][] = "Position";
$tdatademo_useremp[".advSearchFields"][] = "Superior";
$tdatademo_useremp[".advSearchFields"][] = "Superior2";
$tdatademo_useremp[".advSearchFields"][] = "Mobile";
$tdatademo_useremp[".advSearchFields"][] = "Address";
$tdatademo_useremp[".advSearchFields"][] = "Birthday";
$tdatademo_useremp[".advSearchFields"][] = "Email";
$tdatademo_useremp[".advSearchFields"][] = "SSSNo";
$tdatademo_useremp[".advSearchFields"][] = "PagIbigNo";
$tdatademo_useremp[".advSearchFields"][] = "PhilHealthNo";
$tdatademo_useremp[".advSearchFields"][] = "TIN";
$tdatademo_useremp[".advSearchFields"][] = "Bank";
$tdatademo_useremp[".advSearchFields"][] = "AccountNo";
$tdatademo_useremp[".advSearchFields"][] = "AllowableSickLeave";
$tdatademo_useremp[".advSearchFields"][] = "AllowableVacationLeave";
$tdatademo_useremp[".advSearchFields"][] = "AllowableEmergencyLeave";
$tdatademo_useremp[".advSearchFields"][] = "AllowablePaternityLeave";
$tdatademo_useremp[".advSearchFields"][] = "EmployeeType";
$tdatademo_useremp[".advSearchFields"][] = "Level";
$tdatademo_useremp[".advSearchFields"][] = "BasicMonthlyPay";
$tdatademo_useremp[".advSearchFields"][] = "BasicDailyPay";
$tdatademo_useremp[".advSearchFields"][] = "SSSEE";
$tdatademo_useremp[".advSearchFields"][] = "SSSER";
$tdatademo_useremp[".advSearchFields"][] = "SSSEC";
$tdatademo_useremp[".advSearchFields"][] = "PhilHealthEE";
$tdatademo_useremp[".advSearchFields"][] = "PhilHealthER";
$tdatademo_useremp[".advSearchFields"][] = "PagIbigEE";
$tdatademo_useremp[".advSearchFields"][] = "PagIbigER";

$tdatademo_useremp[".tableType"] = "list";

$tdatademo_useremp[".printerPageOrientation"] = 0;
$tdatademo_useremp[".nPrinterPageScale"] = 100;

$tdatademo_useremp[".nPrinterSplitRecords"] = 40;

$tdatademo_useremp[".nPrinterPDFSplitRecords"] = 40;



$tdatademo_useremp[".geocodingEnabled"] = false;





$tdatademo_useremp[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatademo_useremp[".pageSize"] = 20;

$tdatademo_useremp[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY user_name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatademo_useremp[".strOrderBy"] = $tstrOrderBy;

$tdatademo_useremp[".orderindexes"] = array();
	$tdatademo_useremp[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "user_name");


$tdatademo_useremp[".sqlHead"] = "SELECT user_id,  user_name,  Photo,  SSSNo,  TIN,  Mobile,  Address,  Email,  EmployeeType,  EmployeeID,  Division,  Status,  Department,  AllowableSickLeave,  AllowableVacationLeave,  AllowableEmergencyLeave,  SSSEE,  SSSER,  PhilHealthEE,  PhilHealthER,  PagIbigEE,  AllowablePaternityLeave,  HiredDate,  Inactive,  ExitDate,  PagIbigER,  PagIbigNo,  PhilHealthNo,  SSSEC,  `Level`,  DateCreated,  ApprovedDate,  Approved,  Approvedby,  Preparedby,  Checkedby,  CheckedDate,  Checked,  Superior,  `Position`,  Employer,  IDNo,  AccountNo,  LateFixPenalty,  DoNotUpdateContributions,  ExcludeContributionOnPayroll,  Birthday,  Bank,  NoLateDeduction,  IncludeBreakLate,  GracePeriodMins,  WithAdditionalBreaks,  TaxPeriods,  PresetMoNonTax,  PreCalMoTaxable,  CalMonthly,  TaxPerPeriod,  Superior2,  BasicMonthlyPay,  BasicDailyPay";
$tdatademo_useremp[".sqlFrom"] = "FROM demo_user";
$tdatademo_useremp[".sqlWhereExpr"] = "";
$tdatademo_useremp[".sqlTail"] = "";


//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	
$arrEditTabs[] = array('tabId'=>'Primary1',
					   'tabName'=>"Primary",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
$arrEditTabs[] = array('tabId'=>'Leave_Allowance1',
					   'tabName'=>"Leave Allowance",
					   'nType'=>'0',
					   'nOrder'=>26,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
$arrEditTabs[] = array('tabId'=>'Compensation1',
					   'tabName'=>"Compensation",
					   'nType'=>'0',
					   'nOrder'=>31,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
$arrEditTabs[] = array('tabId'=>'Statutory1',
					   'tabName'=>"Statutory",
					   'nType'=>'0',
					   'nOrder'=>36,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatademo_useremp[".arrEditTabs"] = $arrEditTabs;


//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	
$arrAddTabs[] = array('tabId'=>'Primary1',
					  'tabName'=>"Primary",
					  'nType'=>'0',
					  'nOrder'=>1,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
$arrAddTabs[] = array('tabId'=>'Leave_Allowance1',
					  'tabName'=>"Leave Allowance",
					  'nType'=>'0',
					  'nOrder'=>26,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
$arrAddTabs[] = array('tabId'=>'Compensation1',
					  'tabName'=>"Compensation",
					  'nType'=>'0',
					  'nOrder'=>31,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
$arrAddTabs[] = array('tabId'=>'Statutory1',
					  'tabName'=>"Statutory",
					  'nType'=>'0',
					  'nOrder'=>36,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdatademo_useremp[".arrAddTabs"] = $arrAddTabs;

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
					   'tabName'=>"Allowable Leaves",
					   'nType'=>'0',
					   'nOrder'=>26,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "EmployeeType";
	$tabFields[] = "Level";
	$tabFields[] = "BasicMonthlyPay";
	$tabFields[] = "BasicDailyPay";
$arrViewTabs[] = array('tabId'=>'Compensation1',
					   'tabName'=>"Compensation",
					   'nType'=>'0',
					   'nOrder'=>31,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
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
					   'nOrder'=>36,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatademo_useremp[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatademo_useremp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatademo_useremp[".arrGroupsPerPage"] = $arrGPP;

$tdatademo_useremp[".highlightSearchResults"] = true;

$tableKeysdemo_useremp = array();
$tableKeysdemo_useremp[] = "user_id";
$tdatademo_useremp[".Keys"] = $tableKeysdemo_useremp;

$tdatademo_useremp[".listFields"] = array();
$tdatademo_useremp[".listFields"][] = "EmployeeID";
$tdatademo_useremp[".listFields"][] = "IDNo";
$tdatademo_useremp[".listFields"][] = "Photo";
$tdatademo_useremp[".listFields"][] = "user_name";
$tdatademo_useremp[".listFields"][] = "Employer";
$tdatademo_useremp[".listFields"][] = "Division";
$tdatademo_useremp[".listFields"][] = "Department";
$tdatademo_useremp[".listFields"][] = "HiredDate";
$tdatademo_useremp[".listFields"][] = "Inactive";
$tdatademo_useremp[".listFields"][] = "ExitDate";
$tdatademo_useremp[".listFields"][] = "Status";
$tdatademo_useremp[".listFields"][] = "Position";
$tdatademo_useremp[".listFields"][] = "Superior";
$tdatademo_useremp[".listFields"][] = "Superior2";
$tdatademo_useremp[".listFields"][] = "Mobile";
$tdatademo_useremp[".listFields"][] = "Address";
$tdatademo_useremp[".listFields"][] = "Birthday";
$tdatademo_useremp[".listFields"][] = "Email";
$tdatademo_useremp[".listFields"][] = "SSSNo";
$tdatademo_useremp[".listFields"][] = "PagIbigNo";
$tdatademo_useremp[".listFields"][] = "PhilHealthNo";
$tdatademo_useremp[".listFields"][] = "TIN";
$tdatademo_useremp[".listFields"][] = "Bank";
$tdatademo_useremp[".listFields"][] = "AccountNo";
$tdatademo_useremp[".listFields"][] = "AllowableSickLeave";
$tdatademo_useremp[".listFields"][] = "AllowableVacationLeave";
$tdatademo_useremp[".listFields"][] = "AllowableEmergencyLeave";
$tdatademo_useremp[".listFields"][] = "AllowablePaternityLeave";
$tdatademo_useremp[".listFields"][] = "EmployeeType";
$tdatademo_useremp[".listFields"][] = "Level";
$tdatademo_useremp[".listFields"][] = "BasicMonthlyPay";
$tdatademo_useremp[".listFields"][] = "BasicDailyPay";
$tdatademo_useremp[".listFields"][] = "SSSEE";
$tdatademo_useremp[".listFields"][] = "SSSER";
$tdatademo_useremp[".listFields"][] = "SSSEC";
$tdatademo_useremp[".listFields"][] = "PhilHealthEE";
$tdatademo_useremp[".listFields"][] = "PhilHealthER";
$tdatademo_useremp[".listFields"][] = "PagIbigEE";
$tdatademo_useremp[".listFields"][] = "PagIbigER";

$tdatademo_useremp[".hideMobileList"] = array();


$tdatademo_useremp[".viewFields"] = array();
$tdatademo_useremp[".viewFields"][] = "EmployeeID";
$tdatademo_useremp[".viewFields"][] = "IDNo";
$tdatademo_useremp[".viewFields"][] = "Photo";
$tdatademo_useremp[".viewFields"][] = "user_name";
$tdatademo_useremp[".viewFields"][] = "Employer";
$tdatademo_useremp[".viewFields"][] = "Division";
$tdatademo_useremp[".viewFields"][] = "Department";
$tdatademo_useremp[".viewFields"][] = "HiredDate";
$tdatademo_useremp[".viewFields"][] = "Inactive";
$tdatademo_useremp[".viewFields"][] = "ExitDate";
$tdatademo_useremp[".viewFields"][] = "Status";
$tdatademo_useremp[".viewFields"][] = "Position";
$tdatademo_useremp[".viewFields"][] = "Superior";
$tdatademo_useremp[".viewFields"][] = "Superior2";
$tdatademo_useremp[".viewFields"][] = "Mobile";
$tdatademo_useremp[".viewFields"][] = "Address";
$tdatademo_useremp[".viewFields"][] = "Birthday";
$tdatademo_useremp[".viewFields"][] = "Email";
$tdatademo_useremp[".viewFields"][] = "SSSNo";
$tdatademo_useremp[".viewFields"][] = "PagIbigNo";
$tdatademo_useremp[".viewFields"][] = "PhilHealthNo";
$tdatademo_useremp[".viewFields"][] = "TIN";
$tdatademo_useremp[".viewFields"][] = "Bank";
$tdatademo_useremp[".viewFields"][] = "AccountNo";
$tdatademo_useremp[".viewFields"][] = "AllowableSickLeave";
$tdatademo_useremp[".viewFields"][] = "AllowableVacationLeave";
$tdatademo_useremp[".viewFields"][] = "AllowableEmergencyLeave";
$tdatademo_useremp[".viewFields"][] = "AllowablePaternityLeave";
$tdatademo_useremp[".viewFields"][] = "EmployeeType";
$tdatademo_useremp[".viewFields"][] = "Level";
$tdatademo_useremp[".viewFields"][] = "BasicMonthlyPay";
$tdatademo_useremp[".viewFields"][] = "BasicDailyPay";
$tdatademo_useremp[".viewFields"][] = "SSSEE";
$tdatademo_useremp[".viewFields"][] = "SSSER";
$tdatademo_useremp[".viewFields"][] = "SSSEC";
$tdatademo_useremp[".viewFields"][] = "PhilHealthEE";
$tdatademo_useremp[".viewFields"][] = "PhilHealthER";
$tdatademo_useremp[".viewFields"][] = "PagIbigEE";
$tdatademo_useremp[".viewFields"][] = "PagIbigER";

$tdatademo_useremp[".addFields"] = array();

$tdatademo_useremp[".masterListFields"] = array();
$tdatademo_useremp[".masterListFields"][] = "EmployeeID";
$tdatademo_useremp[".masterListFields"][] = "IDNo";
$tdatademo_useremp[".masterListFields"][] = "Photo";
$tdatademo_useremp[".masterListFields"][] = "user_name";
$tdatademo_useremp[".masterListFields"][] = "Employer";
$tdatademo_useremp[".masterListFields"][] = "Division";
$tdatademo_useremp[".masterListFields"][] = "Department";
$tdatademo_useremp[".masterListFields"][] = "HiredDate";
$tdatademo_useremp[".masterListFields"][] = "Inactive";
$tdatademo_useremp[".masterListFields"][] = "ExitDate";
$tdatademo_useremp[".masterListFields"][] = "Status";
$tdatademo_useremp[".masterListFields"][] = "Position";
$tdatademo_useremp[".masterListFields"][] = "Superior";
$tdatademo_useremp[".masterListFields"][] = "Superior2";
$tdatademo_useremp[".masterListFields"][] = "Mobile";
$tdatademo_useremp[".masterListFields"][] = "Address";
$tdatademo_useremp[".masterListFields"][] = "Birthday";
$tdatademo_useremp[".masterListFields"][] = "Email";
$tdatademo_useremp[".masterListFields"][] = "SSSNo";
$tdatademo_useremp[".masterListFields"][] = "PagIbigNo";
$tdatademo_useremp[".masterListFields"][] = "PhilHealthNo";
$tdatademo_useremp[".masterListFields"][] = "TIN";
$tdatademo_useremp[".masterListFields"][] = "Bank";
$tdatademo_useremp[".masterListFields"][] = "AccountNo";
$tdatademo_useremp[".masterListFields"][] = "AllowableSickLeave";
$tdatademo_useremp[".masterListFields"][] = "AllowableVacationLeave";
$tdatademo_useremp[".masterListFields"][] = "AllowableEmergencyLeave";
$tdatademo_useremp[".masterListFields"][] = "AllowablePaternityLeave";
$tdatademo_useremp[".masterListFields"][] = "EmployeeType";
$tdatademo_useremp[".masterListFields"][] = "Level";
$tdatademo_useremp[".masterListFields"][] = "BasicMonthlyPay";
$tdatademo_useremp[".masterListFields"][] = "BasicDailyPay";
$tdatademo_useremp[".masterListFields"][] = "SSSEE";
$tdatademo_useremp[".masterListFields"][] = "DoNotUpdateContributions";
$tdatademo_useremp[".masterListFields"][] = "SSSER";
$tdatademo_useremp[".masterListFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_useremp[".masterListFields"][] = "SSSEC";
$tdatademo_useremp[".masterListFields"][] = "PhilHealthEE";
$tdatademo_useremp[".masterListFields"][] = "PhilHealthER";
$tdatademo_useremp[".masterListFields"][] = "PagIbigEE";
$tdatademo_useremp[".masterListFields"][] = "PagIbigER";
$tdatademo_useremp[".masterListFields"][] = "WithAdditionalBreaks";
$tdatademo_useremp[".masterListFields"][] = "NoLateDeduction";
$tdatademo_useremp[".masterListFields"][] = "user_id";
$tdatademo_useremp[".masterListFields"][] = "GracePeriodMins";
$tdatademo_useremp[".masterListFields"][] = "IncludeBreakLate";
$tdatademo_useremp[".masterListFields"][] = "LateFixPenalty";
$tdatademo_useremp[".masterListFields"][] = "CalMonthly";
$tdatademo_useremp[".masterListFields"][] = "PresetMoNonTax";
$tdatademo_useremp[".masterListFields"][] = "PreCalMoTaxable";
$tdatademo_useremp[".masterListFields"][] = "TaxPeriods";
$tdatademo_useremp[".masterListFields"][] = "TaxPerPeriod";
$tdatademo_useremp[".masterListFields"][] = "DateCreated";
$tdatademo_useremp[".masterListFields"][] = "Preparedby";
$tdatademo_useremp[".masterListFields"][] = "Checked";
$tdatademo_useremp[".masterListFields"][] = "Checkedby";
$tdatademo_useremp[".masterListFields"][] = "CheckedDate";
$tdatademo_useremp[".masterListFields"][] = "Approved";
$tdatademo_useremp[".masterListFields"][] = "Approvedby";
$tdatademo_useremp[".masterListFields"][] = "ApprovedDate";

$tdatademo_useremp[".inlineAddFields"] = array();

$tdatademo_useremp[".editFields"] = array();

$tdatademo_useremp[".inlineEditFields"] = array();

$tdatademo_useremp[".updateSelectedFields"] = array();


$tdatademo_useremp[".exportFields"] = array();
$tdatademo_useremp[".exportFields"][] = "EmployeeID";
$tdatademo_useremp[".exportFields"][] = "IDNo";
$tdatademo_useremp[".exportFields"][] = "Photo";
$tdatademo_useremp[".exportFields"][] = "user_name";
$tdatademo_useremp[".exportFields"][] = "Employer";
$tdatademo_useremp[".exportFields"][] = "Division";
$tdatademo_useremp[".exportFields"][] = "Department";
$tdatademo_useremp[".exportFields"][] = "HiredDate";
$tdatademo_useremp[".exportFields"][] = "Inactive";
$tdatademo_useremp[".exportFields"][] = "ExitDate";
$tdatademo_useremp[".exportFields"][] = "Status";
$tdatademo_useremp[".exportFields"][] = "Position";
$tdatademo_useremp[".exportFields"][] = "Superior";
$tdatademo_useremp[".exportFields"][] = "Superior2";
$tdatademo_useremp[".exportFields"][] = "Mobile";
$tdatademo_useremp[".exportFields"][] = "Address";
$tdatademo_useremp[".exportFields"][] = "Birthday";
$tdatademo_useremp[".exportFields"][] = "Email";
$tdatademo_useremp[".exportFields"][] = "SSSNo";
$tdatademo_useremp[".exportFields"][] = "PagIbigNo";
$tdatademo_useremp[".exportFields"][] = "PhilHealthNo";
$tdatademo_useremp[".exportFields"][] = "TIN";
$tdatademo_useremp[".exportFields"][] = "Bank";
$tdatademo_useremp[".exportFields"][] = "AccountNo";
$tdatademo_useremp[".exportFields"][] = "AllowableSickLeave";
$tdatademo_useremp[".exportFields"][] = "AllowableVacationLeave";
$tdatademo_useremp[".exportFields"][] = "AllowableEmergencyLeave";
$tdatademo_useremp[".exportFields"][] = "AllowablePaternityLeave";
$tdatademo_useremp[".exportFields"][] = "EmployeeType";
$tdatademo_useremp[".exportFields"][] = "Level";
$tdatademo_useremp[".exportFields"][] = "BasicMonthlyPay";
$tdatademo_useremp[".exportFields"][] = "BasicDailyPay";
$tdatademo_useremp[".exportFields"][] = "SSSEE";
$tdatademo_useremp[".exportFields"][] = "SSSER";
$tdatademo_useremp[".exportFields"][] = "SSSEC";
$tdatademo_useremp[".exportFields"][] = "PhilHealthEE";
$tdatademo_useremp[".exportFields"][] = "PhilHealthER";
$tdatademo_useremp[".exportFields"][] = "PagIbigEE";
$tdatademo_useremp[".exportFields"][] = "PagIbigER";

$tdatademo_useremp[".importFields"] = array();

$tdatademo_useremp[".printFields"] = array();
$tdatademo_useremp[".printFields"][] = "EmployeeID";
$tdatademo_useremp[".printFields"][] = "IDNo";
$tdatademo_useremp[".printFields"][] = "Photo";
$tdatademo_useremp[".printFields"][] = "user_name";
$tdatademo_useremp[".printFields"][] = "Employer";
$tdatademo_useremp[".printFields"][] = "Division";
$tdatademo_useremp[".printFields"][] = "Department";
$tdatademo_useremp[".printFields"][] = "HiredDate";
$tdatademo_useremp[".printFields"][] = "Inactive";
$tdatademo_useremp[".printFields"][] = "ExitDate";
$tdatademo_useremp[".printFields"][] = "Status";
$tdatademo_useremp[".printFields"][] = "Position";
$tdatademo_useremp[".printFields"][] = "Superior";
$tdatademo_useremp[".printFields"][] = "Superior2";
$tdatademo_useremp[".printFields"][] = "Mobile";
$tdatademo_useremp[".printFields"][] = "Address";
$tdatademo_useremp[".printFields"][] = "Birthday";
$tdatademo_useremp[".printFields"][] = "Email";
$tdatademo_useremp[".printFields"][] = "SSSNo";
$tdatademo_useremp[".printFields"][] = "PagIbigNo";
$tdatademo_useremp[".printFields"][] = "PhilHealthNo";
$tdatademo_useremp[".printFields"][] = "TIN";
$tdatademo_useremp[".printFields"][] = "Bank";
$tdatademo_useremp[".printFields"][] = "AccountNo";
$tdatademo_useremp[".printFields"][] = "AllowableSickLeave";
$tdatademo_useremp[".printFields"][] = "AllowableVacationLeave";
$tdatademo_useremp[".printFields"][] = "AllowableEmergencyLeave";
$tdatademo_useremp[".printFields"][] = "AllowablePaternityLeave";
$tdatademo_useremp[".printFields"][] = "EmployeeType";
$tdatademo_useremp[".printFields"][] = "Level";
$tdatademo_useremp[".printFields"][] = "BasicMonthlyPay";
$tdatademo_useremp[".printFields"][] = "BasicDailyPay";
$tdatademo_useremp[".printFields"][] = "SSSEE";
$tdatademo_useremp[".printFields"][] = "SSSER";
$tdatademo_useremp[".printFields"][] = "SSSEC";
$tdatademo_useremp[".printFields"][] = "PhilHealthEE";
$tdatademo_useremp[".printFields"][] = "PhilHealthER";
$tdatademo_useremp[".printFields"][] = "PagIbigEE";
$tdatademo_useremp[".printFields"][] = "PagIbigER";


//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","user_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_id";

	
	
			
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








	$tdatademo_useremp["user_id"] = $fdata;
//	user_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_name";
	$fdata["GoodName"] = "user_name";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","user_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["user_name"] = $fdata;
//	Photo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Photo";
	$fdata["GoodName"] = "Photo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","Photo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["Photo"] = $fdata;
//	SSSNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SSSNo";
	$fdata["GoodName"] = "SSSNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","SSSNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["SSSNo"] = $fdata;
//	TIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TIN";
	$fdata["GoodName"] = "TIN";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","TIN");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["TIN"] = $fdata;
//	Mobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Mobile";
	$fdata["GoodName"] = "Mobile";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","Mobile");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["Mobile"] = $fdata;
//	Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Address";
	$fdata["GoodName"] = "Address";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","Address");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["Address"] = $fdata;
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","Email");
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




	$tdatademo_useremp["Email"] = $fdata;
//	EmployeeType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "EmployeeType";
	$fdata["GoodName"] = "EmployeeType";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","EmployeeType");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["EmployeeType"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","EmployeeID");
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




	$tdatademo_useremp["EmployeeID"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","Division");
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




	$tdatademo_useremp["Division"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","Status");
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




	$tdatademo_useremp["Status"] = $fdata;
//	Department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Department";
	$fdata["GoodName"] = "Department";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","Department");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["Department"] = $fdata;
//	AllowableSickLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "AllowableSickLeave";
	$fdata["GoodName"] = "AllowableSickLeave";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","AllowableSickLeave");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["AllowableSickLeave"] = $fdata;
//	AllowableVacationLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "AllowableVacationLeave";
	$fdata["GoodName"] = "AllowableVacationLeave";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","AllowableVacationLeave");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["AllowableVacationLeave"] = $fdata;
//	AllowableEmergencyLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "AllowableEmergencyLeave";
	$fdata["GoodName"] = "AllowableEmergencyLeave";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","AllowableEmergencyLeave");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["AllowableEmergencyLeave"] = $fdata;
//	SSSEE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "SSSEE";
	$fdata["GoodName"] = "SSSEE";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","SSSEE");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["SSSEE"] = $fdata;
//	SSSER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "SSSER";
	$fdata["GoodName"] = "SSSER";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","SSSER");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["SSSER"] = $fdata;
//	PhilHealthEE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "PhilHealthEE";
	$fdata["GoodName"] = "PhilHealthEE";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","PhilHealthEE");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["PhilHealthEE"] = $fdata;
//	PhilHealthER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "PhilHealthER";
	$fdata["GoodName"] = "PhilHealthER";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","PhilHealthER");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["PhilHealthER"] = $fdata;
//	PagIbigEE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "PagIbigEE";
	$fdata["GoodName"] = "PagIbigEE";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","PagIbigEE");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["PagIbigEE"] = $fdata;
//	AllowablePaternityLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "AllowablePaternityLeave";
	$fdata["GoodName"] = "AllowablePaternityLeave";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","AllowablePaternityLeave");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["AllowablePaternityLeave"] = $fdata;
//	HiredDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "HiredDate";
	$fdata["GoodName"] = "HiredDate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","HiredDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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
	$edata["InitialYearFactor"] = 30;
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




	$tdatademo_useremp["HiredDate"] = $fdata;
//	Inactive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Inactive";
	$fdata["GoodName"] = "Inactive";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","Inactive");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["Inactive"] = $fdata;
//	ExitDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "ExitDate";
	$fdata["GoodName"] = "ExitDate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","ExitDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["ExitDate"] = $fdata;
//	PagIbigER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "PagIbigER";
	$fdata["GoodName"] = "PagIbigER";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","PagIbigER");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["PagIbigER"] = $fdata;
//	PagIbigNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "PagIbigNo";
	$fdata["GoodName"] = "PagIbigNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","PagIbigNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["PagIbigNo"] = $fdata;
//	PhilHealthNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "PhilHealthNo";
	$fdata["GoodName"] = "PhilHealthNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","PhilHealthNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["PhilHealthNo"] = $fdata;
//	SSSEC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "SSSEC";
	$fdata["GoodName"] = "SSSEC";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","SSSEC");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["SSSEC"] = $fdata;
//	Level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Level";
	$fdata["GoodName"] = "Level";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","Level");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["Level"] = $fdata;
//	DateCreated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "DateCreated";
	$fdata["GoodName"] = "DateCreated";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","DateCreated");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "DateCreated";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DateCreated";

	
	
			
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








	$tdatademo_useremp["DateCreated"] = $fdata;
//	ApprovedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "ApprovedDate";
	$fdata["GoodName"] = "ApprovedDate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","ApprovedDate");
	$fdata["FieldType"] = 7;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ApprovedDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ApprovedDate";

	
	
			
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








	$tdatademo_useremp["ApprovedDate"] = $fdata;
//	Approved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Approved";
	$fdata["GoodName"] = "Approved";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","Approved");
	$fdata["FieldType"] = 16;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Approved";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Approved";

	
	
			
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








	$tdatademo_useremp["Approved"] = $fdata;
//	Approvedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Approvedby";
	$fdata["GoodName"] = "Approvedby";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","Approvedby");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Approvedby";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Approvedby";

	
	
			
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








	$tdatademo_useremp["Approvedby"] = $fdata;
//	Preparedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Preparedby";
	$fdata["GoodName"] = "Preparedby";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","Preparedby");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Preparedby";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Preparedby";

	
	
			
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








	$tdatademo_useremp["Preparedby"] = $fdata;
//	Checkedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Checkedby";
	$fdata["GoodName"] = "Checkedby";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","Checkedby");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Checkedby";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Checkedby";

	
	
			
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








	$tdatademo_useremp["Checkedby"] = $fdata;
//	CheckedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "CheckedDate";
	$fdata["GoodName"] = "CheckedDate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","CheckedDate");
	$fdata["FieldType"] = 7;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "CheckedDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CheckedDate";

	
	
			
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








	$tdatademo_useremp["CheckedDate"] = $fdata;
//	Checked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Checked";
	$fdata["GoodName"] = "Checked";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","Checked");
	$fdata["FieldType"] = 16;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Checked";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Checked";

	
	
			
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








	$tdatademo_useremp["Checked"] = $fdata;
//	Superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Superior";
	$fdata["GoodName"] = "Superior";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","Superior");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["Superior"] = $fdata;
//	Position
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Position";
	$fdata["GoodName"] = "Position";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","Position");
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




	$tdatademo_useremp["Position"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","Employer");
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




	$tdatademo_useremp["Employer"] = $fdata;
//	IDNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "IDNo";
	$fdata["GoodName"] = "IDNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","IDNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["IDNo"] = $fdata;
//	AccountNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "AccountNo";
	$fdata["GoodName"] = "AccountNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","AccountNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["AccountNo"] = $fdata;
//	LateFixPenalty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "LateFixPenalty";
	$fdata["GoodName"] = "LateFixPenalty";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","LateFixPenalty");
	$fdata["FieldType"] = 16;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "LateFixPenalty";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LateFixPenalty";

	
	
			
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








	$tdatademo_useremp["LateFixPenalty"] = $fdata;
//	DoNotUpdateContributions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "DoNotUpdateContributions";
	$fdata["GoodName"] = "DoNotUpdateContributions";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","DoNotUpdateContributions");
	$fdata["FieldType"] = 16;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "DoNotUpdateContributions";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DoNotUpdateContributions";

	
	
			
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








	$tdatademo_useremp["DoNotUpdateContributions"] = $fdata;
//	ExcludeContributionOnPayroll
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "ExcludeContributionOnPayroll";
	$fdata["GoodName"] = "ExcludeContributionOnPayroll";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","ExcludeContributionOnPayroll");
	$fdata["FieldType"] = 16;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ExcludeContributionOnPayroll";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ExcludeContributionOnPayroll";

	
	
			
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








	$tdatademo_useremp["ExcludeContributionOnPayroll"] = $fdata;
//	Birthday
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "Birthday";
	$fdata["GoodName"] = "Birthday";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","Birthday");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["Birthday"] = $fdata;
//	Bank
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "Bank";
	$fdata["GoodName"] = "Bank";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","Bank");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["Bank"] = $fdata;
//	NoLateDeduction
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "NoLateDeduction";
	$fdata["GoodName"] = "NoLateDeduction";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","NoLateDeduction");
	$fdata["FieldType"] = 16;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "NoLateDeduction";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NoLateDeduction";

	
	
			
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








	$tdatademo_useremp["NoLateDeduction"] = $fdata;
//	IncludeBreakLate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "IncludeBreakLate";
	$fdata["GoodName"] = "IncludeBreakLate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","IncludeBreakLate");
	$fdata["FieldType"] = 16;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "IncludeBreakLate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IncludeBreakLate";

	
	
			
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








	$tdatademo_useremp["IncludeBreakLate"] = $fdata;
//	GracePeriodMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "GracePeriodMins";
	$fdata["GoodName"] = "GracePeriodMins";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","GracePeriodMins");
	$fdata["FieldType"] = 14;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "GracePeriodMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GracePeriodMins";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
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








	$tdatademo_useremp["GracePeriodMins"] = $fdata;
//	WithAdditionalBreaks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "WithAdditionalBreaks";
	$fdata["GoodName"] = "WithAdditionalBreaks";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","WithAdditionalBreaks");
	$fdata["FieldType"] = 16;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "WithAdditionalBreaks";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WithAdditionalBreaks";

	
	
			
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








	$tdatademo_useremp["WithAdditionalBreaks"] = $fdata;
//	TaxPeriods
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "TaxPeriods";
	$fdata["GoodName"] = "TaxPeriods";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","TaxPeriods");
	$fdata["FieldType"] = 16;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "TaxPeriods";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TaxPeriods";

	
	
			
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








	$tdatademo_useremp["TaxPeriods"] = $fdata;
//	PresetMoNonTax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "PresetMoNonTax";
	$fdata["GoodName"] = "PresetMoNonTax";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","PresetMoNonTax");
	$fdata["FieldType"] = 14;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "PresetMoNonTax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PresetMoNonTax";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatademo_useremp["PresetMoNonTax"] = $fdata;
//	PreCalMoTaxable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "PreCalMoTaxable";
	$fdata["GoodName"] = "PreCalMoTaxable";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","PreCalMoTaxable");
	$fdata["FieldType"] = 14;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "PreCalMoTaxable";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PreCalMoTaxable";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatademo_useremp["PreCalMoTaxable"] = $fdata;
//	CalMonthly
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "CalMonthly";
	$fdata["GoodName"] = "CalMonthly";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","CalMonthly");
	$fdata["FieldType"] = 14;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "CalMonthly";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CalMonthly";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatademo_useremp["CalMonthly"] = $fdata;
//	TaxPerPeriod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "TaxPerPeriod";
	$fdata["GoodName"] = "TaxPerPeriod";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","TaxPerPeriod");
	$fdata["FieldType"] = 14;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "TaxPerPeriod";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TaxPerPeriod";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatademo_useremp["TaxPerPeriod"] = $fdata;
//	Superior2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "Superior2";
	$fdata["GoodName"] = "Superior2";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","Superior2");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatademo_useremp["Superior2"] = $fdata;
//	BasicMonthlyPay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "BasicMonthlyPay";
	$fdata["GoodName"] = "BasicMonthlyPay";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","BasicMonthlyPay");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 110;

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




	$tdatademo_useremp["BasicMonthlyPay"] = $fdata;
//	BasicDailyPay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "BasicDailyPay";
	$fdata["GoodName"] = "BasicDailyPay";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useremp","BasicDailyPay");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 110;

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




	$tdatademo_useremp["BasicDailyPay"] = $fdata;


$tables_data["demo_useremp"]=&$tdatademo_useremp;
$field_labels["demo_useremp"] = &$fieldLabelsdemo_useremp;
$fieldToolTips["demo_useremp"] = &$fieldToolTipsdemo_useremp;
$placeHolders["demo_useremp"] = &$placeHoldersdemo_useremp;
$page_titles["demo_useremp"] = &$pageTitlesdemo_useremp;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["demo_useremp"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["demo_useremp"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_demo_useremp()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "user_id,  user_name,  Photo,  SSSNo,  TIN,  Mobile,  Address,  Email,  EmployeeType,  EmployeeID,  Division,  Status,  Department,  AllowableSickLeave,  AllowableVacationLeave,  AllowableEmergencyLeave,  SSSEE,  SSSER,  PhilHealthEE,  PhilHealthER,  PagIbigEE,  AllowablePaternityLeave,  HiredDate,  Inactive,  ExitDate,  PagIbigER,  PagIbigNo,  PhilHealthNo,  SSSEC,  `Level`,  DateCreated,  ApprovedDate,  Approved,  Approvedby,  Preparedby,  Checkedby,  CheckedDate,  Checked,  Superior,  `Position`,  Employer,  IDNo,  AccountNo,  LateFixPenalty,  DoNotUpdateContributions,  ExcludeContributionOnPayroll,  Birthday,  Bank,  NoLateDeduction,  IncludeBreakLate,  GracePeriodMins,  WithAdditionalBreaks,  TaxPeriods,  PresetMoNonTax,  PreCalMoTaxable,  CalMonthly,  TaxPerPeriod,  Superior2,  BasicMonthlyPay,  BasicDailyPay";
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
	"m_srcTableName" => "demo_useremp"
));

$proto6["m_sql"] = "user_id";
$proto6["m_srcTableName"] = "demo_useremp";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto8["m_sql"] = "user_name";
$proto8["m_srcTableName"] = "demo_useremp";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Photo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto10["m_sql"] = "Photo";
$proto10["m_srcTableName"] = "demo_useremp";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto12["m_sql"] = "SSSNo";
$proto12["m_srcTableName"] = "demo_useremp";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TIN",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto14["m_sql"] = "TIN";
$proto14["m_srcTableName"] = "demo_useremp";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Mobile",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto16["m_sql"] = "Mobile";
$proto16["m_srcTableName"] = "demo_useremp";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Address",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto18["m_sql"] = "Address";
$proto18["m_srcTableName"] = "demo_useremp";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto20["m_sql"] = "Email";
$proto20["m_srcTableName"] = "demo_useremp";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeType",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto22["m_sql"] = "EmployeeType";
$proto22["m_srcTableName"] = "demo_useremp";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto24["m_sql"] = "EmployeeID";
$proto24["m_srcTableName"] = "demo_useremp";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto26["m_sql"] = "Division";
$proto26["m_srcTableName"] = "demo_useremp";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto28["m_sql"] = "Status";
$proto28["m_srcTableName"] = "demo_useremp";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto30["m_sql"] = "Department";
$proto30["m_srcTableName"] = "demo_useremp";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableSickLeave",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto32["m_sql"] = "AllowableSickLeave";
$proto32["m_srcTableName"] = "demo_useremp";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableVacationLeave",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto34["m_sql"] = "AllowableVacationLeave";
$proto34["m_srcTableName"] = "demo_useremp";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableEmergencyLeave",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto36["m_sql"] = "AllowableEmergencyLeave";
$proto36["m_srcTableName"] = "demo_useremp";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSEE",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto38["m_sql"] = "SSSEE";
$proto38["m_srcTableName"] = "demo_useremp";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSER",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto40["m_sql"] = "SSSER";
$proto40["m_srcTableName"] = "demo_useremp";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "PhilHealthEE",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto42["m_sql"] = "PhilHealthEE";
$proto42["m_srcTableName"] = "demo_useremp";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "PhilHealthER",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto44["m_sql"] = "PhilHealthER";
$proto44["m_srcTableName"] = "demo_useremp";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbigEE",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto46["m_sql"] = "PagIbigEE";
$proto46["m_srcTableName"] = "demo_useremp";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowablePaternityLeave",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto48["m_sql"] = "AllowablePaternityLeave";
$proto48["m_srcTableName"] = "demo_useremp";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "HiredDate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto50["m_sql"] = "HiredDate";
$proto50["m_srcTableName"] = "demo_useremp";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Inactive",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto52["m_sql"] = "Inactive";
$proto52["m_srcTableName"] = "demo_useremp";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "ExitDate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto54["m_sql"] = "ExitDate";
$proto54["m_srcTableName"] = "demo_useremp";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbigER",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto56["m_sql"] = "PagIbigER";
$proto56["m_srcTableName"] = "demo_useremp";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbigNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto58["m_sql"] = "PagIbigNo";
$proto58["m_srcTableName"] = "demo_useremp";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "PhilHealthNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto60["m_sql"] = "PhilHealthNo";
$proto60["m_srcTableName"] = "demo_useremp";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSEC",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto62["m_sql"] = "SSSEC";
$proto62["m_srcTableName"] = "demo_useremp";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Level",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto64["m_sql"] = "`Level`";
$proto64["m_srcTableName"] = "demo_useremp";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "DateCreated",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto66["m_sql"] = "DateCreated";
$proto66["m_srcTableName"] = "demo_useremp";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedDate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto68["m_sql"] = "ApprovedDate";
$proto68["m_srcTableName"] = "demo_useremp";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "Approved",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto70["m_sql"] = "Approved";
$proto70["m_srcTableName"] = "demo_useremp";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Approvedby",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto72["m_sql"] = "Approvedby";
$proto72["m_srcTableName"] = "demo_useremp";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Preparedby",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto74["m_sql"] = "Preparedby";
$proto74["m_srcTableName"] = "demo_useremp";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Checkedby",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto76["m_sql"] = "Checkedby";
$proto76["m_srcTableName"] = "demo_useremp";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "CheckedDate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto78["m_sql"] = "CheckedDate";
$proto78["m_srcTableName"] = "demo_useremp";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "Checked",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto80["m_sql"] = "Checked";
$proto80["m_srcTableName"] = "demo_useremp";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto82["m_sql"] = "Superior";
$proto82["m_srcTableName"] = "demo_useremp";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Position",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto84["m_sql"] = "`Position`";
$proto84["m_srcTableName"] = "demo_useremp";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto86["m_sql"] = "Employer";
$proto86["m_srcTableName"] = "demo_useremp";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "IDNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto88["m_sql"] = "IDNo";
$proto88["m_srcTableName"] = "demo_useremp";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto90["m_sql"] = "AccountNo";
$proto90["m_srcTableName"] = "demo_useremp";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "LateFixPenalty",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto92["m_sql"] = "LateFixPenalty";
$proto92["m_srcTableName"] = "demo_useremp";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "DoNotUpdateContributions",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto94["m_sql"] = "DoNotUpdateContributions";
$proto94["m_srcTableName"] = "demo_useremp";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "ExcludeContributionOnPayroll",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto96["m_sql"] = "ExcludeContributionOnPayroll";
$proto96["m_srcTableName"] = "demo_useremp";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "Birthday",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto98["m_sql"] = "Birthday";
$proto98["m_srcTableName"] = "demo_useremp";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "Bank",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto100["m_sql"] = "Bank";
$proto100["m_srcTableName"] = "demo_useremp";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "NoLateDeduction",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto102["m_sql"] = "NoLateDeduction";
$proto102["m_srcTableName"] = "demo_useremp";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "IncludeBreakLate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto104["m_sql"] = "IncludeBreakLate";
$proto104["m_srcTableName"] = "demo_useremp";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "GracePeriodMins",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto106["m_sql"] = "GracePeriodMins";
$proto106["m_srcTableName"] = "demo_useremp";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "WithAdditionalBreaks",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto108["m_sql"] = "WithAdditionalBreaks";
$proto108["m_srcTableName"] = "demo_useremp";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "TaxPeriods",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto110["m_sql"] = "TaxPeriods";
$proto110["m_srcTableName"] = "demo_useremp";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "PresetMoNonTax",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto112["m_sql"] = "PresetMoNonTax";
$proto112["m_srcTableName"] = "demo_useremp";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "PreCalMoTaxable",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto114["m_sql"] = "PreCalMoTaxable";
$proto114["m_srcTableName"] = "demo_useremp";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "CalMonthly",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto116["m_sql"] = "CalMonthly";
$proto116["m_srcTableName"] = "demo_useremp";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "TaxPerPeriod",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto118["m_sql"] = "TaxPerPeriod";
$proto118["m_srcTableName"] = "demo_useremp";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior2",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto120["m_sql"] = "Superior2";
$proto120["m_srcTableName"] = "demo_useremp";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "BasicMonthlyPay",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto122["m_sql"] = "BasicMonthlyPay";
$proto122["m_srcTableName"] = "demo_useremp";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "BasicDailyPay",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto124["m_sql"] = "BasicDailyPay";
$proto124["m_srcTableName"] = "demo_useremp";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto126=array();
$proto126["m_link"] = "SQLL_MAIN";
			$proto127=array();
$proto127["m_strName"] = "demo_user";
$proto127["m_srcTableName"] = "demo_useremp";
$proto127["m_columns"] = array();
$proto127["m_columns"][] = "user_id";
$proto127["m_columns"][] = "user_name";
$proto127["m_columns"][] = "Photo";
$proto127["m_columns"][] = "user_photo";
$proto127["m_columns"][] = "SSSNo";
$proto127["m_columns"][] = "TIN";
$proto127["m_columns"][] = "Mobile";
$proto127["m_columns"][] = "Address";
$proto127["m_columns"][] = "Email";
$proto127["m_columns"][] = "EmployeeType";
$proto127["m_columns"][] = "BasicMonthlyPay";
$proto127["m_columns"][] = "BasicDailyPay";
$proto127["m_columns"][] = "EmployeeID";
$proto127["m_columns"][] = "Division";
$proto127["m_columns"][] = "Status";
$proto127["m_columns"][] = "Department";
$proto127["m_columns"][] = "AllowableSickLeave";
$proto127["m_columns"][] = "AllowableVacationLeave";
$proto127["m_columns"][] = "AllowableEmergencyLeave";
$proto127["m_columns"][] = "SSSEE";
$proto127["m_columns"][] = "SSSER";
$proto127["m_columns"][] = "PhilHealthEE";
$proto127["m_columns"][] = "PhilHealthER";
$proto127["m_columns"][] = "PagIbigEE";
$proto127["m_columns"][] = "AllowablePaternityLeave";
$proto127["m_columns"][] = "HiredDate";
$proto127["m_columns"][] = "Inactive";
$proto127["m_columns"][] = "ExitDate";
$proto127["m_columns"][] = "PagIbigER";
$proto127["m_columns"][] = "PagIbigNo";
$proto127["m_columns"][] = "PhilHealthNo";
$proto127["m_columns"][] = "SSSEC";
$proto127["m_columns"][] = "Filex";
$proto127["m_columns"][] = "PresetTax";
$proto127["m_columns"][] = "AgentSharePerDay";
$proto127["m_columns"][] = "AllowancePerDay";
$proto127["m_columns"][] = "DeMinimis";
$proto127["m_columns"][] = "Level";
$proto127["m_columns"][] = "DateCreated";
$proto127["m_columns"][] = "ApprovedDate";
$proto127["m_columns"][] = "Approved";
$proto127["m_columns"][] = "Approvedby";
$proto127["m_columns"][] = "Preparedby";
$proto127["m_columns"][] = "Checkedby";
$proto127["m_columns"][] = "CheckedDate";
$proto127["m_columns"][] = "Checked";
$proto127["m_columns"][] = "AdjustedMonthlyPay";
$proto127["m_columns"][] = "AdjustedDailyPay";
$proto127["m_columns"][] = "Superior";
$proto127["m_columns"][] = "Position";
$proto127["m_columns"][] = "Employer";
$proto127["m_columns"][] = "IDNo";
$proto127["m_columns"][] = "AccountNo";
$proto127["m_columns"][] = "LogID";
$proto127["m_columns"][] = "LateFixPenalty";
$proto127["m_columns"][] = "DoNotUpdateContributions";
$proto127["m_columns"][] = "ExcludeContributionOnPayroll";
$proto127["m_columns"][] = "Birthday";
$proto127["m_columns"][] = "Bank";
$proto127["m_columns"][] = "NoLateDeduction";
$proto127["m_columns"][] = "IncludeBreakLate";
$proto127["m_columns"][] = "GracePeriodMins";
$proto127["m_columns"][] = "WithAdditionalBreaks";
$proto127["m_columns"][] = "TaxPeriods";
$proto127["m_columns"][] = "PresetMoNonTax";
$proto127["m_columns"][] = "PreCalMoTaxable";
$proto127["m_columns"][] = "CalMonthly";
$proto127["m_columns"][] = "TaxPerPeriod";
$proto127["m_columns"][] = "Superior2";
$proto127["m_columns"][] = "ExcludeBio";
$obj = new SQLTable($proto127);

$proto126["m_table"] = $obj;
$proto126["m_sql"] = "demo_user";
$proto126["m_alias"] = "";
$proto126["m_srcTableName"] = "demo_useremp";
$proto128=array();
$proto128["m_sql"] = "";
$proto128["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto128["m_column"]=$obj;
$proto128["m_contained"] = array();
$proto128["m_strCase"] = "";
$proto128["m_havingmode"] = false;
$proto128["m_inBrackets"] = false;
$proto128["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto128);

$proto126["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto126);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto130=array();
						$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useremp"
));

$proto130["m_column"]=$obj;
$proto130["m_bAsc"] = 1;
$proto130["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto130);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="demo_useremp";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_demo_useremp = createSqlQuery_demo_useremp();


	
		;

																																																												

$tdatademo_useremp[".sqlquery"] = $queryData_demo_useremp;

include_once(getabspath("include/demo_useremp_events.php"));
$tableEvents["demo_useremp"] = new eventclass_demo_useremp;
$tdatademo_useremp[".hasEvents"] = true;

?>