<?php
require_once(getabspath("classes/cipherer.php"));




$tdatademo_user1 = array();
	$tdatademo_user1[".truncateText"] = true;
	$tdatademo_user1[".NumberOfChars"] = 80;
	$tdatademo_user1[".ShortName"] = "demo_user1";
	$tdatademo_user1[".OwnerID"] = "";
	$tdatademo_user1[".OriginalTable"] = "demo_user";

//	field labels
$fieldLabelsdemo_user1 = array();
$fieldToolTipsdemo_user1 = array();
$pageTitlesdemo_user1 = array();
$placeHoldersdemo_user1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdemo_user1["English"] = array();
	$fieldToolTipsdemo_user1["English"] = array();
	$placeHoldersdemo_user1["English"] = array();
	$pageTitlesdemo_user1["English"] = array();
	$fieldLabelsdemo_user1["English"]["user_id"] = "User Id";
	$fieldToolTipsdemo_user1["English"]["user_id"] = "";
	$placeHoldersdemo_user1["English"]["user_id"] = "";
	$fieldLabelsdemo_user1["English"]["user_name"] = "Employee";
	$fieldToolTipsdemo_user1["English"]["user_name"] = "";
	$placeHoldersdemo_user1["English"]["user_name"] = "";
	$fieldLabelsdemo_user1["English"]["Photo"] = "Photo";
	$fieldToolTipsdemo_user1["English"]["Photo"] = "";
	$placeHoldersdemo_user1["English"]["Photo"] = "";
	$fieldLabelsdemo_user1["English"]["EmployeeType"] = "Wage Type";
	$fieldToolTipsdemo_user1["English"]["EmployeeType"] = "";
	$placeHoldersdemo_user1["English"]["EmployeeType"] = "";
	$fieldLabelsdemo_user1["English"]["SSSNo"] = "SSS No";
	$fieldToolTipsdemo_user1["English"]["SSSNo"] = "";
	$placeHoldersdemo_user1["English"]["SSSNo"] = "";
	$fieldLabelsdemo_user1["English"]["TIN"] = "TIN";
	$fieldToolTipsdemo_user1["English"]["TIN"] = "";
	$placeHoldersdemo_user1["English"]["TIN"] = "";
	$fieldLabelsdemo_user1["English"]["Mobile"] = "Mobile";
	$fieldToolTipsdemo_user1["English"]["Mobile"] = "";
	$placeHoldersdemo_user1["English"]["Mobile"] = "";
	$fieldLabelsdemo_user1["English"]["Address"] = "Address";
	$fieldToolTipsdemo_user1["English"]["Address"] = "";
	$placeHoldersdemo_user1["English"]["Address"] = "";
	$fieldLabelsdemo_user1["English"]["Email"] = "Email";
	$fieldToolTipsdemo_user1["English"]["Email"] = "";
	$placeHoldersdemo_user1["English"]["Email"] = "";
	$fieldLabelsdemo_user1["English"]["BasicMonthlyPay"] = "Basic Monthly Pay";
	$fieldToolTipsdemo_user1["English"]["BasicMonthlyPay"] = "";
	$placeHoldersdemo_user1["English"]["BasicMonthlyPay"] = "";
	$fieldLabelsdemo_user1["English"]["BasicDailyPay"] = "Basic Daily Pay";
	$fieldToolTipsdemo_user1["English"]["BasicDailyPay"] = "";
	$placeHoldersdemo_user1["English"]["BasicDailyPay"] = "";
	$fieldLabelsdemo_user1["English"]["EmployeeID"] = "Biometric ID";
	$fieldToolTipsdemo_user1["English"]["EmployeeID"] = "";
	$placeHoldersdemo_user1["English"]["EmployeeID"] = "";
	$fieldLabelsdemo_user1["English"]["Division"] = "Division";
	$fieldToolTipsdemo_user1["English"]["Division"] = "";
	$placeHoldersdemo_user1["English"]["Division"] = "";
	$fieldLabelsdemo_user1["English"]["Status"] = "Status";
	$fieldToolTipsdemo_user1["English"]["Status"] = "";
	$placeHoldersdemo_user1["English"]["Status"] = "";
	$fieldLabelsdemo_user1["English"]["Department"] = "Department";
	$fieldToolTipsdemo_user1["English"]["Department"] = "";
	$placeHoldersdemo_user1["English"]["Department"] = "";
	$fieldLabelsdemo_user1["English"]["AllowableSickLeave"] = "SL";
	$fieldToolTipsdemo_user1["English"]["AllowableSickLeave"] = "";
	$placeHoldersdemo_user1["English"]["AllowableSickLeave"] = "";
	$fieldLabelsdemo_user1["English"]["AllowableVacationLeave"] = "VL";
	$fieldToolTipsdemo_user1["English"]["AllowableVacationLeave"] = "";
	$placeHoldersdemo_user1["English"]["AllowableVacationLeave"] = "";
	$fieldLabelsdemo_user1["English"]["AllowableEmergencyLeave"] = "EL";
	$fieldToolTipsdemo_user1["English"]["AllowableEmergencyLeave"] = "";
	$placeHoldersdemo_user1["English"]["AllowableEmergencyLeave"] = "";
	$fieldLabelsdemo_user1["English"]["SSSEE"] = "SSS EE";
	$fieldToolTipsdemo_user1["English"]["SSSEE"] = "";
	$placeHoldersdemo_user1["English"]["SSSEE"] = "";
	$fieldLabelsdemo_user1["English"]["SSSER"] = "SSS ER";
	$fieldToolTipsdemo_user1["English"]["SSSER"] = "";
	$placeHoldersdemo_user1["English"]["SSSER"] = "";
	$fieldLabelsdemo_user1["English"]["PhilHealthEE"] = "PHIC EE";
	$fieldToolTipsdemo_user1["English"]["PhilHealthEE"] = "";
	$placeHoldersdemo_user1["English"]["PhilHealthEE"] = "";
	$fieldLabelsdemo_user1["English"]["PhilHealthER"] = "PHIC ER";
	$fieldToolTipsdemo_user1["English"]["PhilHealthER"] = "";
	$placeHoldersdemo_user1["English"]["PhilHealthER"] = "";
	$fieldLabelsdemo_user1["English"]["AllowablePaternityLeave"] = "PL";
	$fieldToolTipsdemo_user1["English"]["AllowablePaternityLeave"] = "";
	$placeHoldersdemo_user1["English"]["AllowablePaternityLeave"] = "";
	$fieldLabelsdemo_user1["English"]["HiredDate"] = "Hired Date";
	$fieldToolTipsdemo_user1["English"]["HiredDate"] = "";
	$placeHoldersdemo_user1["English"]["HiredDate"] = "";
	$fieldLabelsdemo_user1["English"]["ExitDate"] = "Exit Date";
	$fieldToolTipsdemo_user1["English"]["ExitDate"] = "";
	$placeHoldersdemo_user1["English"]["ExitDate"] = "";
	$fieldLabelsdemo_user1["English"]["Inactive"] = "Inactive";
	$fieldToolTipsdemo_user1["English"]["Inactive"] = "";
	$placeHoldersdemo_user1["English"]["Inactive"] = "";
	$fieldLabelsdemo_user1["English"]["PagIbigEE"] = "HDMF EE";
	$fieldToolTipsdemo_user1["English"]["PagIbigEE"] = "";
	$placeHoldersdemo_user1["English"]["PagIbigEE"] = "";
	$fieldLabelsdemo_user1["English"]["PagIbigER"] = "HDMF ER";
	$fieldToolTipsdemo_user1["English"]["PagIbigER"] = "";
	$placeHoldersdemo_user1["English"]["PagIbigER"] = "";
	$fieldLabelsdemo_user1["English"]["PagIbigNo"] = "HDMF No";
	$fieldToolTipsdemo_user1["English"]["PagIbigNo"] = "";
	$placeHoldersdemo_user1["English"]["PagIbigNo"] = "";
	$fieldLabelsdemo_user1["English"]["PhilHealthNo"] = "PHIC No";
	$fieldToolTipsdemo_user1["English"]["PhilHealthNo"] = "";
	$placeHoldersdemo_user1["English"]["PhilHealthNo"] = "";
	$fieldLabelsdemo_user1["English"]["SSSEC"] = "SSS EC";
	$fieldToolTipsdemo_user1["English"]["SSSEC"] = "";
	$placeHoldersdemo_user1["English"]["SSSEC"] = "";
	$fieldLabelsdemo_user1["English"]["Level"] = "Level";
	$fieldToolTipsdemo_user1["English"]["Level"] = "";
	$placeHoldersdemo_user1["English"]["Level"] = "";
	$fieldLabelsdemo_user1["English"]["DateCreated"] = "Date Created";
	$fieldToolTipsdemo_user1["English"]["DateCreated"] = "";
	$placeHoldersdemo_user1["English"]["DateCreated"] = "";
	$fieldLabelsdemo_user1["English"]["ApprovedDate"] = "Approved Date";
	$fieldToolTipsdemo_user1["English"]["ApprovedDate"] = "";
	$placeHoldersdemo_user1["English"]["ApprovedDate"] = "";
	$fieldLabelsdemo_user1["English"]["Approved"] = "Approved";
	$fieldToolTipsdemo_user1["English"]["Approved"] = "";
	$placeHoldersdemo_user1["English"]["Approved"] = "";
	$fieldLabelsdemo_user1["English"]["Approvedby"] = "Approvedby";
	$fieldToolTipsdemo_user1["English"]["Approvedby"] = "";
	$placeHoldersdemo_user1["English"]["Approvedby"] = "";
	$fieldLabelsdemo_user1["English"]["Preparedby"] = "Preparedby";
	$fieldToolTipsdemo_user1["English"]["Preparedby"] = "";
	$placeHoldersdemo_user1["English"]["Preparedby"] = "";
	$fieldLabelsdemo_user1["English"]["Checkedby"] = "Checkedby";
	$fieldToolTipsdemo_user1["English"]["Checkedby"] = "";
	$placeHoldersdemo_user1["English"]["Checkedby"] = "";
	$fieldLabelsdemo_user1["English"]["CheckedDate"] = "Checked Date";
	$fieldToolTipsdemo_user1["English"]["CheckedDate"] = "";
	$placeHoldersdemo_user1["English"]["CheckedDate"] = "";
	$fieldLabelsdemo_user1["English"]["Checked"] = "Checked";
	$fieldToolTipsdemo_user1["English"]["Checked"] = "";
	$placeHoldersdemo_user1["English"]["Checked"] = "";
	$fieldLabelsdemo_user1["English"]["Position"] = "Position";
	$fieldToolTipsdemo_user1["English"]["Position"] = "";
	$placeHoldersdemo_user1["English"]["Position"] = "";
	$fieldLabelsdemo_user1["English"]["Superior"] = "Supervisor";
	$fieldToolTipsdemo_user1["English"]["Superior"] = "";
	$placeHoldersdemo_user1["English"]["Superior"] = "";
	$fieldLabelsdemo_user1["English"]["Employer"] = "Employer";
	$fieldToolTipsdemo_user1["English"]["Employer"] = "";
	$placeHoldersdemo_user1["English"]["Employer"] = "";
	$fieldLabelsdemo_user1["English"]["IDNo"] = "Employee ID";
	$fieldToolTipsdemo_user1["English"]["IDNo"] = "";
	$placeHoldersdemo_user1["English"]["IDNo"] = "";
	$fieldLabelsdemo_user1["English"]["AccountNo"] = "Account No";
	$fieldToolTipsdemo_user1["English"]["AccountNo"] = "";
	$placeHoldersdemo_user1["English"]["AccountNo"] = "";
	$fieldLabelsdemo_user1["English"]["LateFixPenalty"] = "Late Fix Penalty";
	$fieldToolTipsdemo_user1["English"]["LateFixPenalty"] = "";
	$placeHoldersdemo_user1["English"]["LateFixPenalty"] = "";
	$fieldLabelsdemo_user1["English"]["DoNotUpdateContributions"] = "Do Not Update Contributions";
	$fieldToolTipsdemo_user1["English"]["DoNotUpdateContributions"] = "";
	$placeHoldersdemo_user1["English"]["DoNotUpdateContributions"] = "";
	$fieldLabelsdemo_user1["English"]["ExcludeContributionOnPayroll"] = "Exclude Contribution On Payroll";
	$fieldToolTipsdemo_user1["English"]["ExcludeContributionOnPayroll"] = "";
	$placeHoldersdemo_user1["English"]["ExcludeContributionOnPayroll"] = "";
	$fieldLabelsdemo_user1["English"]["Bank"] = "Bank";
	$fieldToolTipsdemo_user1["English"]["Bank"] = "";
	$placeHoldersdemo_user1["English"]["Bank"] = "";
	$fieldLabelsdemo_user1["English"]["Birthday"] = "Birthday";
	$fieldToolTipsdemo_user1["English"]["Birthday"] = "";
	$placeHoldersdemo_user1["English"]["Birthday"] = "";
	$fieldLabelsdemo_user1["English"]["DeMinimis"] = "De Minimis";
	$fieldToolTipsdemo_user1["English"]["DeMinimis"] = "";
	$placeHoldersdemo_user1["English"]["DeMinimis"] = "";
	$fieldLabelsdemo_user1["English"]["NoLateDeduction"] = "No Late Deduction";
	$fieldToolTipsdemo_user1["English"]["NoLateDeduction"] = "";
	$placeHoldersdemo_user1["English"]["NoLateDeduction"] = "";
	$fieldLabelsdemo_user1["English"]["IncludeBreakLate"] = "Include Break Late";
	$fieldToolTipsdemo_user1["English"]["IncludeBreakLate"] = "";
	$placeHoldersdemo_user1["English"]["IncludeBreakLate"] = "";
	$fieldLabelsdemo_user1["English"]["GracePeriodMins"] = "Grace Period Mins";
	$fieldToolTipsdemo_user1["English"]["GracePeriodMins"] = "";
	$placeHoldersdemo_user1["English"]["GracePeriodMins"] = "";
	$fieldLabelsdemo_user1["English"]["TaxPeriods"] = "Tax Periods";
	$fieldToolTipsdemo_user1["English"]["TaxPeriods"] = "";
	$placeHoldersdemo_user1["English"]["TaxPeriods"] = "";
	$fieldLabelsdemo_user1["English"]["PresetMoNonTax"] = "Preset Monthly Add'l Taxable";
	$fieldToolTipsdemo_user1["English"]["PresetMoNonTax"] = "";
	$placeHoldersdemo_user1["English"]["PresetMoNonTax"] = "";
	$fieldLabelsdemo_user1["English"]["PreCalMoTaxable"] = "Pre-Calculated Monthly Taxable";
	$fieldToolTipsdemo_user1["English"]["PreCalMoTaxable"] = "";
	$placeHoldersdemo_user1["English"]["PreCalMoTaxable"] = "";
	$fieldLabelsdemo_user1["English"]["CalMonthly"] = "Calculated Monthly Income";
	$fieldToolTipsdemo_user1["English"]["CalMonthly"] = "";
	$placeHoldersdemo_user1["English"]["CalMonthly"] = "";
	$fieldLabelsdemo_user1["English"]["WithAdditionalBreaks"] = "With Additional Breaks";
	$fieldToolTipsdemo_user1["English"]["WithAdditionalBreaks"] = "";
	$placeHoldersdemo_user1["English"]["WithAdditionalBreaks"] = "";
	$fieldLabelsdemo_user1["English"]["TaxPerPeriod"] = "Tax Per Period";
	$fieldToolTipsdemo_user1["English"]["TaxPerPeriod"] = "";
	$placeHoldersdemo_user1["English"]["TaxPerPeriod"] = "";
	$fieldLabelsdemo_user1["English"]["Superior2"] = "Manager";
	$fieldToolTipsdemo_user1["English"]["Superior2"] = "";
	$placeHoldersdemo_user1["English"]["Superior2"] = "";
	$fieldLabelsdemo_user1["English"]["ExcludeBio"] = "Exclude Biometric Login";
	$fieldToolTipsdemo_user1["English"]["ExcludeBio"] = "";
	$placeHoldersdemo_user1["English"]["ExcludeBio"] = "";
	if (count($fieldToolTipsdemo_user1["English"]))
		$tdatademo_user1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdemo_user1[""] = array();
	$fieldToolTipsdemo_user1[""] = array();
	$placeHoldersdemo_user1[""] = array();
	$pageTitlesdemo_user1[""] = array();
	$fieldLabelsdemo_user1[""]["TaxPeriods"] = "Tax Periods";
	$fieldToolTipsdemo_user1[""]["TaxPeriods"] = "";
	$placeHoldersdemo_user1[""]["TaxPeriods"] = "";
	$fieldLabelsdemo_user1[""]["PresetMoNonTax"] = "Preset Mo Non Tax";
	$fieldToolTipsdemo_user1[""]["PresetMoNonTax"] = "";
	$placeHoldersdemo_user1[""]["PresetMoNonTax"] = "";
	$fieldLabelsdemo_user1[""]["PreCalMoTaxable"] = "Pre Cal Mo Taxable";
	$fieldToolTipsdemo_user1[""]["PreCalMoTaxable"] = "";
	$placeHoldersdemo_user1[""]["PreCalMoTaxable"] = "";
	$fieldLabelsdemo_user1[""]["CalMonthly"] = "Cal Monthly";
	$fieldToolTipsdemo_user1[""]["CalMonthly"] = "";
	$placeHoldersdemo_user1[""]["CalMonthly"] = "";
	$fieldLabelsdemo_user1[""]["WithAdditionalBreaks"] = "With Additional Breaks";
	$fieldToolTipsdemo_user1[""]["WithAdditionalBreaks"] = "";
	$placeHoldersdemo_user1[""]["WithAdditionalBreaks"] = "";
	$fieldLabelsdemo_user1[""]["TaxPerPeriod"] = "Tax Per Period";
	$fieldToolTipsdemo_user1[""]["TaxPerPeriod"] = "";
	$placeHoldersdemo_user1[""]["TaxPerPeriod"] = "";
	$fieldLabelsdemo_user1[""]["Superior2"] = "Superior2";
	$fieldToolTipsdemo_user1[""]["Superior2"] = "";
	$placeHoldersdemo_user1[""]["Superior2"] = "";
	$fieldLabelsdemo_user1[""]["ExcludeBio"] = "Exclude Bio";
	$fieldToolTipsdemo_user1[""]["ExcludeBio"] = "";
	$placeHoldersdemo_user1[""]["ExcludeBio"] = "";
	if (count($fieldToolTipsdemo_user1[""]))
		$tdatademo_user1[".isUseToolTips"] = true;
}


	$tdatademo_user1[".NCSearch"] = true;



$tdatademo_user1[".shortTableName"] = "demo_user1";
$tdatademo_user1[".nSecOptions"] = 0;
$tdatademo_user1[".recsPerRowPrint"] = 1;
$tdatademo_user1[".mainTableOwnerID"] = "";
$tdatademo_user1[".moveNext"] = 1;
$tdatademo_user1[".entityType"] = 1;

$tdatademo_user1[".strOriginalTableName"] = "demo_user";

	



$tdatademo_user1[".showAddInPopup"] = false;

$tdatademo_user1[".showEditInPopup"] = false;

$tdatademo_user1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatademo_user1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatademo_user1[".fieldsForRegister"] = array();

$tdatademo_user1[".listAjax"] = false;

	$tdatademo_user1[".audit"] = false;

	$tdatademo_user1[".locking"] = false;

$tdatademo_user1[".edit"] = true;
$tdatademo_user1[".afterEditAction"] = 1;
$tdatademo_user1[".closePopupAfterEdit"] = 1;
$tdatademo_user1[".afterEditActionDetTable"] = "";


$tdatademo_user1[".list"] = true;

$tdatademo_user1[".inlineEdit"] = true;

$tdatademo_user1[".updateSelected"] = true;

$tdatademo_user1[".reorderRecordsByHeader"] = true;


$tdatademo_user1[".exportFormatting"] = 2;
$tdatademo_user1[".exportDelimiter"] = ",";
		
$tdatademo_user1[".view"] = true;

$tdatademo_user1[".import"] = true;

$tdatademo_user1[".exportTo"] = true;

$tdatademo_user1[".printFriendly"] = true;

$tdatademo_user1[".delete"] = true;

$tdatademo_user1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatademo_user1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatademo_user1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatademo_user1[".searchSaving"] = false;
//

$tdatademo_user1[".showSearchPanel"] = true;
		$tdatademo_user1[".flexibleSearch"] = true;

$tdatademo_user1[".isUseAjaxSuggest"] = true;

$tdatademo_user1[".rowHighlite"] = true;



																																																					
																																																																																																																																																																
							
							
																																															

$tdatademo_user1[".ajaxCodeSnippetAdded"] = false;

$tdatademo_user1[".buttonsAdded"] = true;

$tdatademo_user1[".addPageEvents"] = true;

// use timepicker for search panel
$tdatademo_user1[".isUseTimeForSearch"] = false;




$tdatademo_user1[".detailsLinksOnList"] = "1";

$tdatademo_user1[".allSearchFields"] = array();
$tdatademo_user1[".filterFields"] = array();
$tdatademo_user1[".requiredSearchFields"] = array();

$tdatademo_user1[".allSearchFields"][] = "EmployeeID";
	$tdatademo_user1[".allSearchFields"][] = "IDNo";
	$tdatademo_user1[".allSearchFields"][] = "Photo";
	$tdatademo_user1[".allSearchFields"][] = "user_name";
	$tdatademo_user1[".allSearchFields"][] = "Employer";
	$tdatademo_user1[".allSearchFields"][] = "Division";
	$tdatademo_user1[".allSearchFields"][] = "Department";
	$tdatademo_user1[".allSearchFields"][] = "HiredDate";
	$tdatademo_user1[".allSearchFields"][] = "Inactive";
	$tdatademo_user1[".allSearchFields"][] = "ExitDate";
	$tdatademo_user1[".allSearchFields"][] = "Status";
	$tdatademo_user1[".allSearchFields"][] = "Position";
	$tdatademo_user1[".allSearchFields"][] = "Superior";
	$tdatademo_user1[".allSearchFields"][] = "Superior2";
	$tdatademo_user1[".allSearchFields"][] = "Mobile";
	$tdatademo_user1[".allSearchFields"][] = "Address";
	$tdatademo_user1[".allSearchFields"][] = "Birthday";
	$tdatademo_user1[".allSearchFields"][] = "Email";
	$tdatademo_user1[".allSearchFields"][] = "SSSNo";
	$tdatademo_user1[".allSearchFields"][] = "PagIbigNo";
	$tdatademo_user1[".allSearchFields"][] = "PhilHealthNo";
	$tdatademo_user1[".allSearchFields"][] = "TIN";
	$tdatademo_user1[".allSearchFields"][] = "Bank";
	$tdatademo_user1[".allSearchFields"][] = "AccountNo";
	$tdatademo_user1[".allSearchFields"][] = "ExcludeBio";
	$tdatademo_user1[".allSearchFields"][] = "AllowableSickLeave";
	$tdatademo_user1[".allSearchFields"][] = "AllowableVacationLeave";
	$tdatademo_user1[".allSearchFields"][] = "AllowableEmergencyLeave";
	$tdatademo_user1[".allSearchFields"][] = "AllowablePaternityLeave";
	$tdatademo_user1[".allSearchFields"][] = "EmployeeType";
	$tdatademo_user1[".allSearchFields"][] = "Level";
	$tdatademo_user1[".allSearchFields"][] = "DeMinimis";
	$tdatademo_user1[".allSearchFields"][] = "BasicMonthlyPay";
	$tdatademo_user1[".allSearchFields"][] = "BasicDailyPay";
	$tdatademo_user1[".allSearchFields"][] = "ExcludeContributionOnPayroll";
	$tdatademo_user1[".allSearchFields"][] = "DoNotUpdateContributions";
	$tdatademo_user1[".allSearchFields"][] = "SSSEE";
	$tdatademo_user1[".allSearchFields"][] = "SSSER";
	$tdatademo_user1[".allSearchFields"][] = "SSSEC";
	$tdatademo_user1[".allSearchFields"][] = "PhilHealthEE";
	$tdatademo_user1[".allSearchFields"][] = "PhilHealthER";
	$tdatademo_user1[".allSearchFields"][] = "PagIbigEE";
	$tdatademo_user1[".allSearchFields"][] = "PagIbigER";
	$tdatademo_user1[".allSearchFields"][] = "NoLateDeduction";
	$tdatademo_user1[".allSearchFields"][] = "GracePeriodMins";
	$tdatademo_user1[".allSearchFields"][] = "WithAdditionalBreaks";
	$tdatademo_user1[".allSearchFields"][] = "IncludeBreakLate";
	$tdatademo_user1[".allSearchFields"][] = "LateFixPenalty";
	$tdatademo_user1[".allSearchFields"][] = "CalMonthly";
	$tdatademo_user1[".allSearchFields"][] = "PresetMoNonTax";
	$tdatademo_user1[".allSearchFields"][] = "PreCalMoTaxable";
	$tdatademo_user1[".allSearchFields"][] = "TaxPeriods";
	$tdatademo_user1[".allSearchFields"][] = "TaxPerPeriod";
	$tdatademo_user1[".allSearchFields"][] = "user_id";
	$tdatademo_user1[".allSearchFields"][] = "Preparedby";
	$tdatademo_user1[".allSearchFields"][] = "Checked";
	$tdatademo_user1[".allSearchFields"][] = "Checkedby";
	$tdatademo_user1[".allSearchFields"][] = "CheckedDate";
	$tdatademo_user1[".allSearchFields"][] = "Approved";
	$tdatademo_user1[".allSearchFields"][] = "Approvedby";
	$tdatademo_user1[".allSearchFields"][] = "ApprovedDate";
	$tdatademo_user1[".allSearchFields"][] = "DateCreated";
	

$tdatademo_user1[".googleLikeFields"] = array();
$tdatademo_user1[".googleLikeFields"][] = "user_id";
$tdatademo_user1[".googleLikeFields"][] = "user_name";
$tdatademo_user1[".googleLikeFields"][] = "Photo";
$tdatademo_user1[".googleLikeFields"][] = "SSSNo";
$tdatademo_user1[".googleLikeFields"][] = "TIN";
$tdatademo_user1[".googleLikeFields"][] = "Mobile";
$tdatademo_user1[".googleLikeFields"][] = "Address";
$tdatademo_user1[".googleLikeFields"][] = "Email";
$tdatademo_user1[".googleLikeFields"][] = "EmployeeType";
$tdatademo_user1[".googleLikeFields"][] = "BasicMonthlyPay";
$tdatademo_user1[".googleLikeFields"][] = "BasicDailyPay";
$tdatademo_user1[".googleLikeFields"][] = "EmployeeID";
$tdatademo_user1[".googleLikeFields"][] = "Division";
$tdatademo_user1[".googleLikeFields"][] = "Status";
$tdatademo_user1[".googleLikeFields"][] = "Department";
$tdatademo_user1[".googleLikeFields"][] = "AllowableSickLeave";
$tdatademo_user1[".googleLikeFields"][] = "AllowableVacationLeave";
$tdatademo_user1[".googleLikeFields"][] = "AllowableEmergencyLeave";
$tdatademo_user1[".googleLikeFields"][] = "SSSEE";
$tdatademo_user1[".googleLikeFields"][] = "SSSER";
$tdatademo_user1[".googleLikeFields"][] = "PhilHealthEE";
$tdatademo_user1[".googleLikeFields"][] = "PhilHealthER";
$tdatademo_user1[".googleLikeFields"][] = "PagIbigEE";
$tdatademo_user1[".googleLikeFields"][] = "AllowablePaternityLeave";
$tdatademo_user1[".googleLikeFields"][] = "HiredDate";
$tdatademo_user1[".googleLikeFields"][] = "Inactive";
$tdatademo_user1[".googleLikeFields"][] = "ExitDate";
$tdatademo_user1[".googleLikeFields"][] = "PagIbigER";
$tdatademo_user1[".googleLikeFields"][] = "PagIbigNo";
$tdatademo_user1[".googleLikeFields"][] = "PhilHealthNo";
$tdatademo_user1[".googleLikeFields"][] = "SSSEC";
$tdatademo_user1[".googleLikeFields"][] = "Level";
$tdatademo_user1[".googleLikeFields"][] = "DateCreated";
$tdatademo_user1[".googleLikeFields"][] = "ApprovedDate";
$tdatademo_user1[".googleLikeFields"][] = "Approved";
$tdatademo_user1[".googleLikeFields"][] = "Approvedby";
$tdatademo_user1[".googleLikeFields"][] = "Preparedby";
$tdatademo_user1[".googleLikeFields"][] = "Checkedby";
$tdatademo_user1[".googleLikeFields"][] = "CheckedDate";
$tdatademo_user1[".googleLikeFields"][] = "Checked";
$tdatademo_user1[".googleLikeFields"][] = "Position";
$tdatademo_user1[".googleLikeFields"][] = "Superior";
$tdatademo_user1[".googleLikeFields"][] = "Employer";
$tdatademo_user1[".googleLikeFields"][] = "IDNo";
$tdatademo_user1[".googleLikeFields"][] = "AccountNo";
$tdatademo_user1[".googleLikeFields"][] = "LateFixPenalty";
$tdatademo_user1[".googleLikeFields"][] = "DoNotUpdateContributions";
$tdatademo_user1[".googleLikeFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user1[".googleLikeFields"][] = "Bank";
$tdatademo_user1[".googleLikeFields"][] = "Birthday";
$tdatademo_user1[".googleLikeFields"][] = "DeMinimis";
$tdatademo_user1[".googleLikeFields"][] = "NoLateDeduction";
$tdatademo_user1[".googleLikeFields"][] = "IncludeBreakLate";
$tdatademo_user1[".googleLikeFields"][] = "GracePeriodMins";
$tdatademo_user1[".googleLikeFields"][] = "WithAdditionalBreaks";
$tdatademo_user1[".googleLikeFields"][] = "PresetMoNonTax";
$tdatademo_user1[".googleLikeFields"][] = "PreCalMoTaxable";
$tdatademo_user1[".googleLikeFields"][] = "CalMonthly";
$tdatademo_user1[".googleLikeFields"][] = "TaxPeriods";
$tdatademo_user1[".googleLikeFields"][] = "TaxPerPeriod";
$tdatademo_user1[".googleLikeFields"][] = "Superior2";
$tdatademo_user1[".googleLikeFields"][] = "ExcludeBio";


$tdatademo_user1[".advSearchFields"] = array();
$tdatademo_user1[".advSearchFields"][] = "EmployeeID";
$tdatademo_user1[".advSearchFields"][] = "IDNo";
$tdatademo_user1[".advSearchFields"][] = "Photo";
$tdatademo_user1[".advSearchFields"][] = "user_name";
$tdatademo_user1[".advSearchFields"][] = "Employer";
$tdatademo_user1[".advSearchFields"][] = "Division";
$tdatademo_user1[".advSearchFields"][] = "Department";
$tdatademo_user1[".advSearchFields"][] = "HiredDate";
$tdatademo_user1[".advSearchFields"][] = "Inactive";
$tdatademo_user1[".advSearchFields"][] = "ExitDate";
$tdatademo_user1[".advSearchFields"][] = "Status";
$tdatademo_user1[".advSearchFields"][] = "Position";
$tdatademo_user1[".advSearchFields"][] = "Superior";
$tdatademo_user1[".advSearchFields"][] = "Superior2";
$tdatademo_user1[".advSearchFields"][] = "Mobile";
$tdatademo_user1[".advSearchFields"][] = "Address";
$tdatademo_user1[".advSearchFields"][] = "Birthday";
$tdatademo_user1[".advSearchFields"][] = "Email";
$tdatademo_user1[".advSearchFields"][] = "SSSNo";
$tdatademo_user1[".advSearchFields"][] = "PagIbigNo";
$tdatademo_user1[".advSearchFields"][] = "PhilHealthNo";
$tdatademo_user1[".advSearchFields"][] = "TIN";
$tdatademo_user1[".advSearchFields"][] = "Bank";
$tdatademo_user1[".advSearchFields"][] = "AccountNo";
$tdatademo_user1[".advSearchFields"][] = "ExcludeBio";
$tdatademo_user1[".advSearchFields"][] = "AllowableSickLeave";
$tdatademo_user1[".advSearchFields"][] = "AllowableVacationLeave";
$tdatademo_user1[".advSearchFields"][] = "AllowableEmergencyLeave";
$tdatademo_user1[".advSearchFields"][] = "AllowablePaternityLeave";
$tdatademo_user1[".advSearchFields"][] = "EmployeeType";
$tdatademo_user1[".advSearchFields"][] = "Level";
$tdatademo_user1[".advSearchFields"][] = "DeMinimis";
$tdatademo_user1[".advSearchFields"][] = "BasicMonthlyPay";
$tdatademo_user1[".advSearchFields"][] = "BasicDailyPay";
$tdatademo_user1[".advSearchFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user1[".advSearchFields"][] = "DoNotUpdateContributions";
$tdatademo_user1[".advSearchFields"][] = "SSSEE";
$tdatademo_user1[".advSearchFields"][] = "SSSER";
$tdatademo_user1[".advSearchFields"][] = "SSSEC";
$tdatademo_user1[".advSearchFields"][] = "PhilHealthEE";
$tdatademo_user1[".advSearchFields"][] = "PhilHealthER";
$tdatademo_user1[".advSearchFields"][] = "PagIbigEE";
$tdatademo_user1[".advSearchFields"][] = "PagIbigER";
$tdatademo_user1[".advSearchFields"][] = "NoLateDeduction";
$tdatademo_user1[".advSearchFields"][] = "GracePeriodMins";
$tdatademo_user1[".advSearchFields"][] = "WithAdditionalBreaks";
$tdatademo_user1[".advSearchFields"][] = "IncludeBreakLate";
$tdatademo_user1[".advSearchFields"][] = "LateFixPenalty";
$tdatademo_user1[".advSearchFields"][] = "CalMonthly";
$tdatademo_user1[".advSearchFields"][] = "PresetMoNonTax";
$tdatademo_user1[".advSearchFields"][] = "PreCalMoTaxable";
$tdatademo_user1[".advSearchFields"][] = "TaxPeriods";
$tdatademo_user1[".advSearchFields"][] = "TaxPerPeriod";
$tdatademo_user1[".advSearchFields"][] = "user_id";
$tdatademo_user1[".advSearchFields"][] = "Preparedby";
$tdatademo_user1[".advSearchFields"][] = "Checked";
$tdatademo_user1[".advSearchFields"][] = "Checkedby";
$tdatademo_user1[".advSearchFields"][] = "CheckedDate";
$tdatademo_user1[".advSearchFields"][] = "Approved";
$tdatademo_user1[".advSearchFields"][] = "Approvedby";
$tdatademo_user1[".advSearchFields"][] = "ApprovedDate";
$tdatademo_user1[".advSearchFields"][] = "DateCreated";

$tdatademo_user1[".tableType"] = "list";

$tdatademo_user1[".printerPageOrientation"] = 0;
$tdatademo_user1[".nPrinterPageScale"] = 100;

$tdatademo_user1[".nPrinterSplitRecords"] = 40;

$tdatademo_user1[".nPrinterPDFSplitRecords"] = 40;



$tdatademo_user1[".geocodingEnabled"] = false;





$tdatademo_user1[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatademo_user1[".totalsFields"] = array();
$tdatademo_user1[".totalsFields"][] = array(
	"fName" => "BasicMonthlyPay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatademo_user1[".totalsFields"][] = array(
	"fName" => "BasicDailyPay",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatademo_user1[".pageSize"] = 20;

$tdatademo_user1[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY user_name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatademo_user1[".strOrderBy"] = $tstrOrderBy;

$tdatademo_user1[".orderindexes"] = array();
	$tdatademo_user1[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "user_name");


$tdatademo_user1[".sqlHead"] = "SELECT user_id,  user_name,  Photo,  SSSNo,  TIN,  Mobile,  Address,  Email,  EmployeeType,  BasicMonthlyPay,  BasicDailyPay,  EmployeeID,  Division,  Status,  Department,  AllowableSickLeave,  AllowableVacationLeave,  AllowableEmergencyLeave,  SSSEE,  SSSER,  PhilHealthEE,  PhilHealthER,  PagIbigEE,  AllowablePaternityLeave,  HiredDate,  Inactive,  ExitDate,  PagIbigER,  PagIbigNo,  PhilHealthNo,  SSSEC,  `Level`,  DateCreated,  ApprovedDate,  Approved,  Approvedby,  Preparedby,  Checkedby,  CheckedDate,  Checked,  `Position`,  Superior,  Employer,  IDNo,  AccountNo,  LateFixPenalty,  DoNotUpdateContributions,  ExcludeContributionOnPayroll,  Bank,  Birthday,  DeMinimis,  NoLateDeduction,  IncludeBreakLate,  GracePeriodMins,  WithAdditionalBreaks,  PresetMoNonTax,  PreCalMoTaxable,  CalMonthly,  TaxPeriods,  TaxPerPeriod,  Superior2,  ExcludeBio";
$tdatademo_user1[".sqlFrom"] = "FROM demo_user";
$tdatademo_user1[".sqlWhereExpr"] = "";
$tdatademo_user1[".sqlTail"] = "";


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
$tdatademo_user1[".arrEditTabs"] = $arrEditTabs;


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
$tdatademo_user1[".arrAddTabs"] = $arrAddTabs;

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
$tdatademo_user1[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatademo_user1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatademo_user1[".arrGroupsPerPage"] = $arrGPP;

$tdatademo_user1[".highlightSearchResults"] = true;

$tableKeysdemo_user1 = array();
$tableKeysdemo_user1[] = "user_id";
$tdatademo_user1[".Keys"] = $tableKeysdemo_user1;

$tdatademo_user1[".listFields"] = array();
$tdatademo_user1[".listFields"][] = "EmployeeID";
$tdatademo_user1[".listFields"][] = "IDNo";
$tdatademo_user1[".listFields"][] = "Photo";
$tdatademo_user1[".listFields"][] = "user_name";
$tdatademo_user1[".listFields"][] = "Employer";
$tdatademo_user1[".listFields"][] = "Division";
$tdatademo_user1[".listFields"][] = "Department";
$tdatademo_user1[".listFields"][] = "HiredDate";
$tdatademo_user1[".listFields"][] = "Inactive";
$tdatademo_user1[".listFields"][] = "ExitDate";
$tdatademo_user1[".listFields"][] = "Status";
$tdatademo_user1[".listFields"][] = "Position";
$tdatademo_user1[".listFields"][] = "Superior";
$tdatademo_user1[".listFields"][] = "Superior2";
$tdatademo_user1[".listFields"][] = "Mobile";
$tdatademo_user1[".listFields"][] = "Address";
$tdatademo_user1[".listFields"][] = "Birthday";
$tdatademo_user1[".listFields"][] = "Email";
$tdatademo_user1[".listFields"][] = "SSSNo";
$tdatademo_user1[".listFields"][] = "PagIbigNo";
$tdatademo_user1[".listFields"][] = "PhilHealthNo";
$tdatademo_user1[".listFields"][] = "TIN";
$tdatademo_user1[".listFields"][] = "Bank";
$tdatademo_user1[".listFields"][] = "AccountNo";
$tdatademo_user1[".listFields"][] = "ExcludeBio";
$tdatademo_user1[".listFields"][] = "AllowableSickLeave";
$tdatademo_user1[".listFields"][] = "AllowableVacationLeave";
$tdatademo_user1[".listFields"][] = "AllowableEmergencyLeave";
$tdatademo_user1[".listFields"][] = "AllowablePaternityLeave";
$tdatademo_user1[".listFields"][] = "EmployeeType";
$tdatademo_user1[".listFields"][] = "Level";
$tdatademo_user1[".listFields"][] = "DeMinimis";
$tdatademo_user1[".listFields"][] = "BasicMonthlyPay";
$tdatademo_user1[".listFields"][] = "BasicDailyPay";
$tdatademo_user1[".listFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user1[".listFields"][] = "DoNotUpdateContributions";
$tdatademo_user1[".listFields"][] = "SSSEE";
$tdatademo_user1[".listFields"][] = "SSSER";
$tdatademo_user1[".listFields"][] = "SSSEC";
$tdatademo_user1[".listFields"][] = "PhilHealthEE";
$tdatademo_user1[".listFields"][] = "PhilHealthER";
$tdatademo_user1[".listFields"][] = "PagIbigEE";
$tdatademo_user1[".listFields"][] = "PagIbigER";
$tdatademo_user1[".listFields"][] = "NoLateDeduction";
$tdatademo_user1[".listFields"][] = "GracePeriodMins";
$tdatademo_user1[".listFields"][] = "WithAdditionalBreaks";
$tdatademo_user1[".listFields"][] = "IncludeBreakLate";
$tdatademo_user1[".listFields"][] = "LateFixPenalty";
$tdatademo_user1[".listFields"][] = "CalMonthly";
$tdatademo_user1[".listFields"][] = "PresetMoNonTax";
$tdatademo_user1[".listFields"][] = "PreCalMoTaxable";
$tdatademo_user1[".listFields"][] = "TaxPeriods";
$tdatademo_user1[".listFields"][] = "TaxPerPeriod";
$tdatademo_user1[".listFields"][] = "user_id";
$tdatademo_user1[".listFields"][] = "Preparedby";
$tdatademo_user1[".listFields"][] = "Checked";
$tdatademo_user1[".listFields"][] = "Checkedby";
$tdatademo_user1[".listFields"][] = "CheckedDate";
$tdatademo_user1[".listFields"][] = "Approved";
$tdatademo_user1[".listFields"][] = "Approvedby";
$tdatademo_user1[".listFields"][] = "ApprovedDate";
$tdatademo_user1[".listFields"][] = "DateCreated";

$tdatademo_user1[".hideMobileList"] = array();


$tdatademo_user1[".viewFields"] = array();
$tdatademo_user1[".viewFields"][] = "EmployeeID";
$tdatademo_user1[".viewFields"][] = "IDNo";
$tdatademo_user1[".viewFields"][] = "Photo";
$tdatademo_user1[".viewFields"][] = "user_name";
$tdatademo_user1[".viewFields"][] = "Employer";
$tdatademo_user1[".viewFields"][] = "Division";
$tdatademo_user1[".viewFields"][] = "Department";
$tdatademo_user1[".viewFields"][] = "HiredDate";
$tdatademo_user1[".viewFields"][] = "Inactive";
$tdatademo_user1[".viewFields"][] = "ExitDate";
$tdatademo_user1[".viewFields"][] = "Status";
$tdatademo_user1[".viewFields"][] = "Position";
$tdatademo_user1[".viewFields"][] = "Superior";
$tdatademo_user1[".viewFields"][] = "Superior2";
$tdatademo_user1[".viewFields"][] = "Mobile";
$tdatademo_user1[".viewFields"][] = "Address";
$tdatademo_user1[".viewFields"][] = "Birthday";
$tdatademo_user1[".viewFields"][] = "Email";
$tdatademo_user1[".viewFields"][] = "SSSNo";
$tdatademo_user1[".viewFields"][] = "PagIbigNo";
$tdatademo_user1[".viewFields"][] = "PhilHealthNo";
$tdatademo_user1[".viewFields"][] = "TIN";
$tdatademo_user1[".viewFields"][] = "Bank";
$tdatademo_user1[".viewFields"][] = "AccountNo";
$tdatademo_user1[".viewFields"][] = "ExcludeBio";
$tdatademo_user1[".viewFields"][] = "AllowableSickLeave";
$tdatademo_user1[".viewFields"][] = "AllowableVacationLeave";
$tdatademo_user1[".viewFields"][] = "AllowableEmergencyLeave";
$tdatademo_user1[".viewFields"][] = "AllowablePaternityLeave";
$tdatademo_user1[".viewFields"][] = "EmployeeType";
$tdatademo_user1[".viewFields"][] = "Level";
$tdatademo_user1[".viewFields"][] = "DeMinimis";
$tdatademo_user1[".viewFields"][] = "BasicMonthlyPay";
$tdatademo_user1[".viewFields"][] = "BasicDailyPay";
$tdatademo_user1[".viewFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user1[".viewFields"][] = "DoNotUpdateContributions";
$tdatademo_user1[".viewFields"][] = "SSSEE";
$tdatademo_user1[".viewFields"][] = "SSSER";
$tdatademo_user1[".viewFields"][] = "SSSEC";
$tdatademo_user1[".viewFields"][] = "PhilHealthEE";
$tdatademo_user1[".viewFields"][] = "PhilHealthER";
$tdatademo_user1[".viewFields"][] = "PagIbigEE";
$tdatademo_user1[".viewFields"][] = "PagIbigER";
$tdatademo_user1[".viewFields"][] = "NoLateDeduction";
$tdatademo_user1[".viewFields"][] = "GracePeriodMins";
$tdatademo_user1[".viewFields"][] = "WithAdditionalBreaks";
$tdatademo_user1[".viewFields"][] = "IncludeBreakLate";
$tdatademo_user1[".viewFields"][] = "LateFixPenalty";
$tdatademo_user1[".viewFields"][] = "CalMonthly";
$tdatademo_user1[".viewFields"][] = "PresetMoNonTax";
$tdatademo_user1[".viewFields"][] = "PreCalMoTaxable";
$tdatademo_user1[".viewFields"][] = "TaxPeriods";
$tdatademo_user1[".viewFields"][] = "TaxPerPeriod";
$tdatademo_user1[".viewFields"][] = "user_id";
$tdatademo_user1[".viewFields"][] = "Preparedby";
$tdatademo_user1[".viewFields"][] = "Checked";
$tdatademo_user1[".viewFields"][] = "Checkedby";
$tdatademo_user1[".viewFields"][] = "CheckedDate";
$tdatademo_user1[".viewFields"][] = "Approved";
$tdatademo_user1[".viewFields"][] = "Approvedby";
$tdatademo_user1[".viewFields"][] = "ApprovedDate";
$tdatademo_user1[".viewFields"][] = "DateCreated";

$tdatademo_user1[".addFields"] = array();
$tdatademo_user1[".addFields"][] = "ExcludeBio";

$tdatademo_user1[".masterListFields"] = array();
$tdatademo_user1[".masterListFields"][] = "EmployeeID";
$tdatademo_user1[".masterListFields"][] = "IDNo";
$tdatademo_user1[".masterListFields"][] = "Photo";
$tdatademo_user1[".masterListFields"][] = "user_name";
$tdatademo_user1[".masterListFields"][] = "Employer";
$tdatademo_user1[".masterListFields"][] = "Division";
$tdatademo_user1[".masterListFields"][] = "Department";
$tdatademo_user1[".masterListFields"][] = "HiredDate";
$tdatademo_user1[".masterListFields"][] = "Inactive";
$tdatademo_user1[".masterListFields"][] = "ExitDate";
$tdatademo_user1[".masterListFields"][] = "Status";
$tdatademo_user1[".masterListFields"][] = "Position";
$tdatademo_user1[".masterListFields"][] = "Superior";
$tdatademo_user1[".masterListFields"][] = "Superior2";
$tdatademo_user1[".masterListFields"][] = "Mobile";
$tdatademo_user1[".masterListFields"][] = "Address";
$tdatademo_user1[".masterListFields"][] = "Birthday";
$tdatademo_user1[".masterListFields"][] = "Email";
$tdatademo_user1[".masterListFields"][] = "SSSNo";
$tdatademo_user1[".masterListFields"][] = "PagIbigNo";
$tdatademo_user1[".masterListFields"][] = "PhilHealthNo";
$tdatademo_user1[".masterListFields"][] = "TIN";
$tdatademo_user1[".masterListFields"][] = "Bank";
$tdatademo_user1[".masterListFields"][] = "AccountNo";
$tdatademo_user1[".masterListFields"][] = "ExcludeBio";
$tdatademo_user1[".masterListFields"][] = "AllowableSickLeave";
$tdatademo_user1[".masterListFields"][] = "AllowableVacationLeave";
$tdatademo_user1[".masterListFields"][] = "AllowableEmergencyLeave";
$tdatademo_user1[".masterListFields"][] = "AllowablePaternityLeave";
$tdatademo_user1[".masterListFields"][] = "EmployeeType";
$tdatademo_user1[".masterListFields"][] = "Level";
$tdatademo_user1[".masterListFields"][] = "DeMinimis";
$tdatademo_user1[".masterListFields"][] = "BasicMonthlyPay";
$tdatademo_user1[".masterListFields"][] = "BasicDailyPay";
$tdatademo_user1[".masterListFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user1[".masterListFields"][] = "DoNotUpdateContributions";
$tdatademo_user1[".masterListFields"][] = "SSSEE";
$tdatademo_user1[".masterListFields"][] = "SSSER";
$tdatademo_user1[".masterListFields"][] = "SSSEC";
$tdatademo_user1[".masterListFields"][] = "PhilHealthEE";
$tdatademo_user1[".masterListFields"][] = "PhilHealthER";
$tdatademo_user1[".masterListFields"][] = "PagIbigEE";
$tdatademo_user1[".masterListFields"][] = "PagIbigER";
$tdatademo_user1[".masterListFields"][] = "NoLateDeduction";
$tdatademo_user1[".masterListFields"][] = "GracePeriodMins";
$tdatademo_user1[".masterListFields"][] = "WithAdditionalBreaks";
$tdatademo_user1[".masterListFields"][] = "IncludeBreakLate";
$tdatademo_user1[".masterListFields"][] = "LateFixPenalty";
$tdatademo_user1[".masterListFields"][] = "CalMonthly";
$tdatademo_user1[".masterListFields"][] = "PresetMoNonTax";
$tdatademo_user1[".masterListFields"][] = "PreCalMoTaxable";
$tdatademo_user1[".masterListFields"][] = "TaxPeriods";
$tdatademo_user1[".masterListFields"][] = "TaxPerPeriod";
$tdatademo_user1[".masterListFields"][] = "user_id";
$tdatademo_user1[".masterListFields"][] = "Preparedby";
$tdatademo_user1[".masterListFields"][] = "Checked";
$tdatademo_user1[".masterListFields"][] = "Checkedby";
$tdatademo_user1[".masterListFields"][] = "CheckedDate";
$tdatademo_user1[".masterListFields"][] = "Approved";
$tdatademo_user1[".masterListFields"][] = "Approvedby";
$tdatademo_user1[".masterListFields"][] = "ApprovedDate";
$tdatademo_user1[".masterListFields"][] = "DateCreated";

$tdatademo_user1[".inlineAddFields"] = array();
$tdatademo_user1[".inlineAddFields"][] = "ExcludeBio";

$tdatademo_user1[".editFields"] = array();
$tdatademo_user1[".editFields"][] = "EmployeeID";
$tdatademo_user1[".editFields"][] = "IDNo";
$tdatademo_user1[".editFields"][] = "Photo";
$tdatademo_user1[".editFields"][] = "user_name";
$tdatademo_user1[".editFields"][] = "Employer";
$tdatademo_user1[".editFields"][] = "Division";
$tdatademo_user1[".editFields"][] = "Department";
$tdatademo_user1[".editFields"][] = "HiredDate";
$tdatademo_user1[".editFields"][] = "Inactive";
$tdatademo_user1[".editFields"][] = "ExitDate";
$tdatademo_user1[".editFields"][] = "Status";
$tdatademo_user1[".editFields"][] = "Position";
$tdatademo_user1[".editFields"][] = "Superior";
$tdatademo_user1[".editFields"][] = "Superior2";
$tdatademo_user1[".editFields"][] = "Mobile";
$tdatademo_user1[".editFields"][] = "Address";
$tdatademo_user1[".editFields"][] = "Birthday";
$tdatademo_user1[".editFields"][] = "Email";
$tdatademo_user1[".editFields"][] = "SSSNo";
$tdatademo_user1[".editFields"][] = "PagIbigNo";
$tdatademo_user1[".editFields"][] = "PhilHealthNo";
$tdatademo_user1[".editFields"][] = "TIN";
$tdatademo_user1[".editFields"][] = "Bank";
$tdatademo_user1[".editFields"][] = "AccountNo";
$tdatademo_user1[".editFields"][] = "ExcludeBio";
$tdatademo_user1[".editFields"][] = "AllowableSickLeave";
$tdatademo_user1[".editFields"][] = "AllowableVacationLeave";
$tdatademo_user1[".editFields"][] = "AllowableEmergencyLeave";
$tdatademo_user1[".editFields"][] = "AllowablePaternityLeave";
$tdatademo_user1[".editFields"][] = "EmployeeType";
$tdatademo_user1[".editFields"][] = "Level";
$tdatademo_user1[".editFields"][] = "DeMinimis";
$tdatademo_user1[".editFields"][] = "BasicMonthlyPay";
$tdatademo_user1[".editFields"][] = "BasicDailyPay";
$tdatademo_user1[".editFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user1[".editFields"][] = "DoNotUpdateContributions";
$tdatademo_user1[".editFields"][] = "SSSEE";
$tdatademo_user1[".editFields"][] = "SSSER";
$tdatademo_user1[".editFields"][] = "SSSEC";
$tdatademo_user1[".editFields"][] = "PhilHealthEE";
$tdatademo_user1[".editFields"][] = "PhilHealthER";
$tdatademo_user1[".editFields"][] = "PagIbigEE";
$tdatademo_user1[".editFields"][] = "PagIbigER";
$tdatademo_user1[".editFields"][] = "NoLateDeduction";
$tdatademo_user1[".editFields"][] = "GracePeriodMins";
$tdatademo_user1[".editFields"][] = "WithAdditionalBreaks";
$tdatademo_user1[".editFields"][] = "IncludeBreakLate";
$tdatademo_user1[".editFields"][] = "LateFixPenalty";
$tdatademo_user1[".editFields"][] = "CalMonthly";
$tdatademo_user1[".editFields"][] = "PresetMoNonTax";
$tdatademo_user1[".editFields"][] = "PreCalMoTaxable";
$tdatademo_user1[".editFields"][] = "TaxPeriods";
$tdatademo_user1[".editFields"][] = "TaxPerPeriod";
$tdatademo_user1[".editFields"][] = "Preparedby";
$tdatademo_user1[".editFields"][] = "Checked";
$tdatademo_user1[".editFields"][] = "Checkedby";
$tdatademo_user1[".editFields"][] = "CheckedDate";
$tdatademo_user1[".editFields"][] = "Approved";
$tdatademo_user1[".editFields"][] = "Approvedby";
$tdatademo_user1[".editFields"][] = "ApprovedDate";
$tdatademo_user1[".editFields"][] = "DateCreated";

$tdatademo_user1[".inlineEditFields"] = array();
$tdatademo_user1[".inlineEditFields"][] = "EmployeeID";
$tdatademo_user1[".inlineEditFields"][] = "IDNo";
$tdatademo_user1[".inlineEditFields"][] = "Photo";
$tdatademo_user1[".inlineEditFields"][] = "user_name";
$tdatademo_user1[".inlineEditFields"][] = "Employer";
$tdatademo_user1[".inlineEditFields"][] = "Division";
$tdatademo_user1[".inlineEditFields"][] = "Department";
$tdatademo_user1[".inlineEditFields"][] = "HiredDate";
$tdatademo_user1[".inlineEditFields"][] = "Inactive";
$tdatademo_user1[".inlineEditFields"][] = "ExitDate";
$tdatademo_user1[".inlineEditFields"][] = "Status";
$tdatademo_user1[".inlineEditFields"][] = "Position";
$tdatademo_user1[".inlineEditFields"][] = "Superior";
$tdatademo_user1[".inlineEditFields"][] = "Superior2";
$tdatademo_user1[".inlineEditFields"][] = "Mobile";
$tdatademo_user1[".inlineEditFields"][] = "Address";
$tdatademo_user1[".inlineEditFields"][] = "Birthday";
$tdatademo_user1[".inlineEditFields"][] = "Email";
$tdatademo_user1[".inlineEditFields"][] = "SSSNo";
$tdatademo_user1[".inlineEditFields"][] = "PagIbigNo";
$tdatademo_user1[".inlineEditFields"][] = "PhilHealthNo";
$tdatademo_user1[".inlineEditFields"][] = "TIN";
$tdatademo_user1[".inlineEditFields"][] = "Bank";
$tdatademo_user1[".inlineEditFields"][] = "AccountNo";
$tdatademo_user1[".inlineEditFields"][] = "ExcludeBio";
$tdatademo_user1[".inlineEditFields"][] = "AllowableSickLeave";
$tdatademo_user1[".inlineEditFields"][] = "AllowableVacationLeave";
$tdatademo_user1[".inlineEditFields"][] = "AllowableEmergencyLeave";
$tdatademo_user1[".inlineEditFields"][] = "AllowablePaternityLeave";
$tdatademo_user1[".inlineEditFields"][] = "EmployeeType";
$tdatademo_user1[".inlineEditFields"][] = "Level";
$tdatademo_user1[".inlineEditFields"][] = "DeMinimis";
$tdatademo_user1[".inlineEditFields"][] = "BasicMonthlyPay";
$tdatademo_user1[".inlineEditFields"][] = "BasicDailyPay";
$tdatademo_user1[".inlineEditFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user1[".inlineEditFields"][] = "DoNotUpdateContributions";
$tdatademo_user1[".inlineEditFields"][] = "SSSEE";
$tdatademo_user1[".inlineEditFields"][] = "SSSER";
$tdatademo_user1[".inlineEditFields"][] = "SSSEC";
$tdatademo_user1[".inlineEditFields"][] = "PhilHealthEE";
$tdatademo_user1[".inlineEditFields"][] = "PhilHealthER";
$tdatademo_user1[".inlineEditFields"][] = "PagIbigEE";
$tdatademo_user1[".inlineEditFields"][] = "PagIbigER";
$tdatademo_user1[".inlineEditFields"][] = "NoLateDeduction";
$tdatademo_user1[".inlineEditFields"][] = "GracePeriodMins";
$tdatademo_user1[".inlineEditFields"][] = "WithAdditionalBreaks";
$tdatademo_user1[".inlineEditFields"][] = "IncludeBreakLate";
$tdatademo_user1[".inlineEditFields"][] = "LateFixPenalty";
$tdatademo_user1[".inlineEditFields"][] = "CalMonthly";
$tdatademo_user1[".inlineEditFields"][] = "PresetMoNonTax";
$tdatademo_user1[".inlineEditFields"][] = "PreCalMoTaxable";
$tdatademo_user1[".inlineEditFields"][] = "TaxPeriods";
$tdatademo_user1[".inlineEditFields"][] = "TaxPerPeriod";
$tdatademo_user1[".inlineEditFields"][] = "Preparedby";
$tdatademo_user1[".inlineEditFields"][] = "Checked";
$tdatademo_user1[".inlineEditFields"][] = "Checkedby";
$tdatademo_user1[".inlineEditFields"][] = "CheckedDate";
$tdatademo_user1[".inlineEditFields"][] = "Approved";
$tdatademo_user1[".inlineEditFields"][] = "Approvedby";
$tdatademo_user1[".inlineEditFields"][] = "ApprovedDate";
$tdatademo_user1[".inlineEditFields"][] = "DateCreated";

$tdatademo_user1[".updateSelectedFields"] = array();
$tdatademo_user1[".updateSelectedFields"][] = "Employer";
$tdatademo_user1[".updateSelectedFields"][] = "Division";
$tdatademo_user1[".updateSelectedFields"][] = "Department";
$tdatademo_user1[".updateSelectedFields"][] = "HiredDate";
$tdatademo_user1[".updateSelectedFields"][] = "ExitDate";
$tdatademo_user1[".updateSelectedFields"][] = "Status";
$tdatademo_user1[".updateSelectedFields"][] = "Position";
$tdatademo_user1[".updateSelectedFields"][] = "Superior";
$tdatademo_user1[".updateSelectedFields"][] = "Superior2";
$tdatademo_user1[".updateSelectedFields"][] = "Bank";
$tdatademo_user1[".updateSelectedFields"][] = "AllowableSickLeave";
$tdatademo_user1[".updateSelectedFields"][] = "AllowableVacationLeave";
$tdatademo_user1[".updateSelectedFields"][] = "AllowableEmergencyLeave";
$tdatademo_user1[".updateSelectedFields"][] = "AllowablePaternityLeave";
$tdatademo_user1[".updateSelectedFields"][] = "EmployeeType";
$tdatademo_user1[".updateSelectedFields"][] = "Level";
$tdatademo_user1[".updateSelectedFields"][] = "BasicMonthlyPay";
$tdatademo_user1[".updateSelectedFields"][] = "BasicDailyPay";
$tdatademo_user1[".updateSelectedFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user1[".updateSelectedFields"][] = "DoNotUpdateContributions";
$tdatademo_user1[".updateSelectedFields"][] = "SSSEE";
$tdatademo_user1[".updateSelectedFields"][] = "SSSER";
$tdatademo_user1[".updateSelectedFields"][] = "SSSEC";
$tdatademo_user1[".updateSelectedFields"][] = "PhilHealthEE";
$tdatademo_user1[".updateSelectedFields"][] = "PhilHealthER";
$tdatademo_user1[".updateSelectedFields"][] = "PagIbigEE";
$tdatademo_user1[".updateSelectedFields"][] = "PagIbigER";
$tdatademo_user1[".updateSelectedFields"][] = "LateFixPenalty";
$tdatademo_user1[".updateSelectedFields"][] = "Preparedby";
$tdatademo_user1[".updateSelectedFields"][] = "Checked";
$tdatademo_user1[".updateSelectedFields"][] = "Checkedby";
$tdatademo_user1[".updateSelectedFields"][] = "CheckedDate";
$tdatademo_user1[".updateSelectedFields"][] = "Approved";
$tdatademo_user1[".updateSelectedFields"][] = "Approvedby";
$tdatademo_user1[".updateSelectedFields"][] = "ApprovedDate";
$tdatademo_user1[".updateSelectedFields"][] = "DateCreated";


$tdatademo_user1[".exportFields"] = array();
$tdatademo_user1[".exportFields"][] = "EmployeeID";
$tdatademo_user1[".exportFields"][] = "IDNo";
$tdatademo_user1[".exportFields"][] = "Photo";
$tdatademo_user1[".exportFields"][] = "user_name";
$tdatademo_user1[".exportFields"][] = "Employer";
$tdatademo_user1[".exportFields"][] = "Division";
$tdatademo_user1[".exportFields"][] = "Department";
$tdatademo_user1[".exportFields"][] = "HiredDate";
$tdatademo_user1[".exportFields"][] = "Inactive";
$tdatademo_user1[".exportFields"][] = "ExitDate";
$tdatademo_user1[".exportFields"][] = "Status";
$tdatademo_user1[".exportFields"][] = "Position";
$tdatademo_user1[".exportFields"][] = "Superior";
$tdatademo_user1[".exportFields"][] = "Superior2";
$tdatademo_user1[".exportFields"][] = "Mobile";
$tdatademo_user1[".exportFields"][] = "Address";
$tdatademo_user1[".exportFields"][] = "Birthday";
$tdatademo_user1[".exportFields"][] = "Email";
$tdatademo_user1[".exportFields"][] = "SSSNo";
$tdatademo_user1[".exportFields"][] = "PagIbigNo";
$tdatademo_user1[".exportFields"][] = "PhilHealthNo";
$tdatademo_user1[".exportFields"][] = "TIN";
$tdatademo_user1[".exportFields"][] = "Bank";
$tdatademo_user1[".exportFields"][] = "AccountNo";
$tdatademo_user1[".exportFields"][] = "ExcludeBio";
$tdatademo_user1[".exportFields"][] = "AllowableSickLeave";
$tdatademo_user1[".exportFields"][] = "AllowableVacationLeave";
$tdatademo_user1[".exportFields"][] = "AllowableEmergencyLeave";
$tdatademo_user1[".exportFields"][] = "AllowablePaternityLeave";
$tdatademo_user1[".exportFields"][] = "EmployeeType";
$tdatademo_user1[".exportFields"][] = "Level";
$tdatademo_user1[".exportFields"][] = "DeMinimis";
$tdatademo_user1[".exportFields"][] = "BasicMonthlyPay";
$tdatademo_user1[".exportFields"][] = "BasicDailyPay";
$tdatademo_user1[".exportFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user1[".exportFields"][] = "DoNotUpdateContributions";
$tdatademo_user1[".exportFields"][] = "SSSEE";
$tdatademo_user1[".exportFields"][] = "SSSER";
$tdatademo_user1[".exportFields"][] = "SSSEC";
$tdatademo_user1[".exportFields"][] = "PhilHealthEE";
$tdatademo_user1[".exportFields"][] = "PhilHealthER";
$tdatademo_user1[".exportFields"][] = "PagIbigEE";
$tdatademo_user1[".exportFields"][] = "PagIbigER";
$tdatademo_user1[".exportFields"][] = "NoLateDeduction";
$tdatademo_user1[".exportFields"][] = "GracePeriodMins";
$tdatademo_user1[".exportFields"][] = "WithAdditionalBreaks";
$tdatademo_user1[".exportFields"][] = "IncludeBreakLate";
$tdatademo_user1[".exportFields"][] = "LateFixPenalty";
$tdatademo_user1[".exportFields"][] = "CalMonthly";
$tdatademo_user1[".exportFields"][] = "PresetMoNonTax";
$tdatademo_user1[".exportFields"][] = "PreCalMoTaxable";
$tdatademo_user1[".exportFields"][] = "TaxPeriods";
$tdatademo_user1[".exportFields"][] = "TaxPerPeriod";
$tdatademo_user1[".exportFields"][] = "user_id";
$tdatademo_user1[".exportFields"][] = "Preparedby";
$tdatademo_user1[".exportFields"][] = "Checked";
$tdatademo_user1[".exportFields"][] = "Checkedby";
$tdatademo_user1[".exportFields"][] = "CheckedDate";
$tdatademo_user1[".exportFields"][] = "Approved";
$tdatademo_user1[".exportFields"][] = "Approvedby";
$tdatademo_user1[".exportFields"][] = "ApprovedDate";
$tdatademo_user1[".exportFields"][] = "DateCreated";

$tdatademo_user1[".importFields"] = array();
$tdatademo_user1[".importFields"][] = "user_id";
$tdatademo_user1[".importFields"][] = "user_name";
$tdatademo_user1[".importFields"][] = "Photo";
$tdatademo_user1[".importFields"][] = "SSSNo";
$tdatademo_user1[".importFields"][] = "TIN";
$tdatademo_user1[".importFields"][] = "Mobile";
$tdatademo_user1[".importFields"][] = "Address";
$tdatademo_user1[".importFields"][] = "Email";
$tdatademo_user1[".importFields"][] = "EmployeeType";
$tdatademo_user1[".importFields"][] = "BasicMonthlyPay";
$tdatademo_user1[".importFields"][] = "BasicDailyPay";
$tdatademo_user1[".importFields"][] = "EmployeeID";
$tdatademo_user1[".importFields"][] = "Division";
$tdatademo_user1[".importFields"][] = "Status";
$tdatademo_user1[".importFields"][] = "Department";
$tdatademo_user1[".importFields"][] = "AllowableSickLeave";
$tdatademo_user1[".importFields"][] = "AllowableVacationLeave";
$tdatademo_user1[".importFields"][] = "AllowableEmergencyLeave";
$tdatademo_user1[".importFields"][] = "SSSEE";
$tdatademo_user1[".importFields"][] = "SSSER";
$tdatademo_user1[".importFields"][] = "PhilHealthEE";
$tdatademo_user1[".importFields"][] = "PhilHealthER";
$tdatademo_user1[".importFields"][] = "PagIbigEE";
$tdatademo_user1[".importFields"][] = "AllowablePaternityLeave";
$tdatademo_user1[".importFields"][] = "HiredDate";
$tdatademo_user1[".importFields"][] = "Inactive";
$tdatademo_user1[".importFields"][] = "ExitDate";
$tdatademo_user1[".importFields"][] = "PagIbigER";
$tdatademo_user1[".importFields"][] = "PagIbigNo";
$tdatademo_user1[".importFields"][] = "PhilHealthNo";
$tdatademo_user1[".importFields"][] = "SSSEC";
$tdatademo_user1[".importFields"][] = "Level";
$tdatademo_user1[".importFields"][] = "DateCreated";
$tdatademo_user1[".importFields"][] = "ApprovedDate";
$tdatademo_user1[".importFields"][] = "Approved";
$tdatademo_user1[".importFields"][] = "Approvedby";
$tdatademo_user1[".importFields"][] = "Preparedby";
$tdatademo_user1[".importFields"][] = "Checkedby";
$tdatademo_user1[".importFields"][] = "CheckedDate";
$tdatademo_user1[".importFields"][] = "Checked";
$tdatademo_user1[".importFields"][] = "Position";
$tdatademo_user1[".importFields"][] = "Superior";
$tdatademo_user1[".importFields"][] = "Employer";
$tdatademo_user1[".importFields"][] = "IDNo";
$tdatademo_user1[".importFields"][] = "AccountNo";
$tdatademo_user1[".importFields"][] = "LateFixPenalty";
$tdatademo_user1[".importFields"][] = "DoNotUpdateContributions";
$tdatademo_user1[".importFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user1[".importFields"][] = "Bank";
$tdatademo_user1[".importFields"][] = "Birthday";
$tdatademo_user1[".importFields"][] = "DeMinimis";
$tdatademo_user1[".importFields"][] = "NoLateDeduction";
$tdatademo_user1[".importFields"][] = "IncludeBreakLate";
$tdatademo_user1[".importFields"][] = "GracePeriodMins";
$tdatademo_user1[".importFields"][] = "WithAdditionalBreaks";
$tdatademo_user1[".importFields"][] = "PresetMoNonTax";
$tdatademo_user1[".importFields"][] = "PreCalMoTaxable";
$tdatademo_user1[".importFields"][] = "CalMonthly";
$tdatademo_user1[".importFields"][] = "TaxPeriods";
$tdatademo_user1[".importFields"][] = "TaxPerPeriod";
$tdatademo_user1[".importFields"][] = "Superior2";
$tdatademo_user1[".importFields"][] = "ExcludeBio";

$tdatademo_user1[".printFields"] = array();
$tdatademo_user1[".printFields"][] = "EmployeeID";
$tdatademo_user1[".printFields"][] = "IDNo";
$tdatademo_user1[".printFields"][] = "Photo";
$tdatademo_user1[".printFields"][] = "user_name";
$tdatademo_user1[".printFields"][] = "Employer";
$tdatademo_user1[".printFields"][] = "Division";
$tdatademo_user1[".printFields"][] = "Department";
$tdatademo_user1[".printFields"][] = "HiredDate";
$tdatademo_user1[".printFields"][] = "Inactive";
$tdatademo_user1[".printFields"][] = "ExitDate";
$tdatademo_user1[".printFields"][] = "Status";
$tdatademo_user1[".printFields"][] = "Position";
$tdatademo_user1[".printFields"][] = "Superior";
$tdatademo_user1[".printFields"][] = "Superior2";
$tdatademo_user1[".printFields"][] = "Mobile";
$tdatademo_user1[".printFields"][] = "Address";
$tdatademo_user1[".printFields"][] = "Birthday";
$tdatademo_user1[".printFields"][] = "Email";
$tdatademo_user1[".printFields"][] = "SSSNo";
$tdatademo_user1[".printFields"][] = "PagIbigNo";
$tdatademo_user1[".printFields"][] = "PhilHealthNo";
$tdatademo_user1[".printFields"][] = "TIN";
$tdatademo_user1[".printFields"][] = "Bank";
$tdatademo_user1[".printFields"][] = "AccountNo";
$tdatademo_user1[".printFields"][] = "ExcludeBio";
$tdatademo_user1[".printFields"][] = "AllowableSickLeave";
$tdatademo_user1[".printFields"][] = "AllowableVacationLeave";
$tdatademo_user1[".printFields"][] = "AllowableEmergencyLeave";
$tdatademo_user1[".printFields"][] = "AllowablePaternityLeave";
$tdatademo_user1[".printFields"][] = "EmployeeType";
$tdatademo_user1[".printFields"][] = "Level";
$tdatademo_user1[".printFields"][] = "DeMinimis";
$tdatademo_user1[".printFields"][] = "BasicMonthlyPay";
$tdatademo_user1[".printFields"][] = "BasicDailyPay";
$tdatademo_user1[".printFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user1[".printFields"][] = "DoNotUpdateContributions";
$tdatademo_user1[".printFields"][] = "SSSEE";
$tdatademo_user1[".printFields"][] = "SSSER";
$tdatademo_user1[".printFields"][] = "SSSEC";
$tdatademo_user1[".printFields"][] = "PhilHealthEE";
$tdatademo_user1[".printFields"][] = "PhilHealthER";
$tdatademo_user1[".printFields"][] = "PagIbigEE";
$tdatademo_user1[".printFields"][] = "PagIbigER";
$tdatademo_user1[".printFields"][] = "NoLateDeduction";
$tdatademo_user1[".printFields"][] = "GracePeriodMins";
$tdatademo_user1[".printFields"][] = "WithAdditionalBreaks";
$tdatademo_user1[".printFields"][] = "IncludeBreakLate";
$tdatademo_user1[".printFields"][] = "LateFixPenalty";
$tdatademo_user1[".printFields"][] = "CalMonthly";
$tdatademo_user1[".printFields"][] = "PresetMoNonTax";
$tdatademo_user1[".printFields"][] = "PreCalMoTaxable";
$tdatademo_user1[".printFields"][] = "TaxPeriods";
$tdatademo_user1[".printFields"][] = "TaxPerPeriod";
$tdatademo_user1[".printFields"][] = "user_id";
$tdatademo_user1[".printFields"][] = "Preparedby";
$tdatademo_user1[".printFields"][] = "Checked";
$tdatademo_user1[".printFields"][] = "Checkedby";
$tdatademo_user1[".printFields"][] = "CheckedDate";
$tdatademo_user1[".printFields"][] = "Approved";
$tdatademo_user1[".printFields"][] = "Approvedby";
$tdatademo_user1[".printFields"][] = "ApprovedDate";
$tdatademo_user1[".printFields"][] = "DateCreated";


//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","user_id");
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




	$tdatademo_user1["user_id"] = $fdata;
//	user_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_name";
	$fdata["GoodName"] = "user_name";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","user_name");
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




	$tdatademo_user1["user_name"] = $fdata;
//	Photo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Photo";
	$fdata["GoodName"] = "Photo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","Photo");
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




	$tdatademo_user1["Photo"] = $fdata;
//	SSSNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SSSNo";
	$fdata["GoodName"] = "SSSNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","SSSNo");
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




	$tdatademo_user1["SSSNo"] = $fdata;
//	TIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TIN";
	$fdata["GoodName"] = "TIN";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","TIN");
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




	$tdatademo_user1["TIN"] = $fdata;
//	Mobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Mobile";
	$fdata["GoodName"] = "Mobile";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","Mobile");
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




	$tdatademo_user1["Mobile"] = $fdata;
//	Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Address";
	$fdata["GoodName"] = "Address";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","Address");
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




	$tdatademo_user1["Address"] = $fdata;
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","Email");
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




	$tdatademo_user1["Email"] = $fdata;
//	EmployeeType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "EmployeeType";
	$fdata["GoodName"] = "EmployeeType";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","EmployeeType");
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




	$tdatademo_user1["EmployeeType"] = $fdata;
//	BasicMonthlyPay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "BasicMonthlyPay";
	$fdata["GoodName"] = "BasicMonthlyPay";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","BasicMonthlyPay");
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




	$tdatademo_user1["BasicMonthlyPay"] = $fdata;
//	BasicDailyPay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "BasicDailyPay";
	$fdata["GoodName"] = "BasicDailyPay";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","BasicDailyPay");
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




	$tdatademo_user1["BasicDailyPay"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","EmployeeID");
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




	$tdatademo_user1["EmployeeID"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","Division");
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




	$tdatademo_user1["Division"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","Status");
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




	$tdatademo_user1["Status"] = $fdata;
//	Department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Department";
	$fdata["GoodName"] = "Department";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","Department");
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




	$tdatademo_user1["Department"] = $fdata;
//	AllowableSickLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "AllowableSickLeave";
	$fdata["GoodName"] = "AllowableSickLeave";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","AllowableSickLeave");
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




	$tdatademo_user1["AllowableSickLeave"] = $fdata;
//	AllowableVacationLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "AllowableVacationLeave";
	$fdata["GoodName"] = "AllowableVacationLeave";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","AllowableVacationLeave");
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




	$tdatademo_user1["AllowableVacationLeave"] = $fdata;
//	AllowableEmergencyLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "AllowableEmergencyLeave";
	$fdata["GoodName"] = "AllowableEmergencyLeave";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","AllowableEmergencyLeave");
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




	$tdatademo_user1["AllowableEmergencyLeave"] = $fdata;
//	SSSEE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "SSSEE";
	$fdata["GoodName"] = "SSSEE";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","SSSEE");
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




	$tdatademo_user1["SSSEE"] = $fdata;
//	SSSER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "SSSER";
	$fdata["GoodName"] = "SSSER";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","SSSER");
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




	$tdatademo_user1["SSSER"] = $fdata;
//	PhilHealthEE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "PhilHealthEE";
	$fdata["GoodName"] = "PhilHealthEE";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","PhilHealthEE");
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




	$tdatademo_user1["PhilHealthEE"] = $fdata;
//	PhilHealthER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "PhilHealthER";
	$fdata["GoodName"] = "PhilHealthER";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","PhilHealthER");
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




	$tdatademo_user1["PhilHealthER"] = $fdata;
//	PagIbigEE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "PagIbigEE";
	$fdata["GoodName"] = "PagIbigEE";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","PagIbigEE");
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




	$tdatademo_user1["PagIbigEE"] = $fdata;
//	AllowablePaternityLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "AllowablePaternityLeave";
	$fdata["GoodName"] = "AllowablePaternityLeave";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","AllowablePaternityLeave");
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




	$tdatademo_user1["AllowablePaternityLeave"] = $fdata;
//	HiredDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "HiredDate";
	$fdata["GoodName"] = "HiredDate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","HiredDate");
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




	$tdatademo_user1["HiredDate"] = $fdata;
//	Inactive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Inactive";
	$fdata["GoodName"] = "Inactive";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","Inactive");
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




	$tdatademo_user1["Inactive"] = $fdata;
//	ExitDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "ExitDate";
	$fdata["GoodName"] = "ExitDate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","ExitDate");
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




	$tdatademo_user1["ExitDate"] = $fdata;
//	PagIbigER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "PagIbigER";
	$fdata["GoodName"] = "PagIbigER";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","PagIbigER");
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




	$tdatademo_user1["PagIbigER"] = $fdata;
//	PagIbigNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "PagIbigNo";
	$fdata["GoodName"] = "PagIbigNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","PagIbigNo");
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




	$tdatademo_user1["PagIbigNo"] = $fdata;
//	PhilHealthNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "PhilHealthNo";
	$fdata["GoodName"] = "PhilHealthNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","PhilHealthNo");
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




	$tdatademo_user1["PhilHealthNo"] = $fdata;
//	SSSEC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "SSSEC";
	$fdata["GoodName"] = "SSSEC";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","SSSEC");
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




	$tdatademo_user1["SSSEC"] = $fdata;
//	Level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Level";
	$fdata["GoodName"] = "Level";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","Level");
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




	$tdatademo_user1["Level"] = $fdata;
//	DateCreated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "DateCreated";
	$fdata["GoodName"] = "DateCreated";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","DateCreated");
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




	$tdatademo_user1["DateCreated"] = $fdata;
//	ApprovedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "ApprovedDate";
	$fdata["GoodName"] = "ApprovedDate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","ApprovedDate");
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




	$tdatademo_user1["ApprovedDate"] = $fdata;
//	Approved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Approved";
	$fdata["GoodName"] = "Approved";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","Approved");
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




	$tdatademo_user1["Approved"] = $fdata;
//	Approvedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Approvedby";
	$fdata["GoodName"] = "Approvedby";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","Approvedby");
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




	$tdatademo_user1["Approvedby"] = $fdata;
//	Preparedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Preparedby";
	$fdata["GoodName"] = "Preparedby";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","Preparedby");
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




	$tdatademo_user1["Preparedby"] = $fdata;
//	Checkedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Checkedby";
	$fdata["GoodName"] = "Checkedby";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","Checkedby");
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




	$tdatademo_user1["Checkedby"] = $fdata;
//	CheckedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "CheckedDate";
	$fdata["GoodName"] = "CheckedDate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","CheckedDate");
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




	$tdatademo_user1["CheckedDate"] = $fdata;
//	Checked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Checked";
	$fdata["GoodName"] = "Checked";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","Checked");
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




	$tdatademo_user1["Checked"] = $fdata;
//	Position
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Position";
	$fdata["GoodName"] = "Position";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","Position");
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




	$tdatademo_user1["Position"] = $fdata;
//	Superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "Superior";
	$fdata["GoodName"] = "Superior";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","Superior");
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




	$tdatademo_user1["Superior"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","Employer");
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




	$tdatademo_user1["Employer"] = $fdata;
//	IDNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "IDNo";
	$fdata["GoodName"] = "IDNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","IDNo");
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




	$tdatademo_user1["IDNo"] = $fdata;
//	AccountNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "AccountNo";
	$fdata["GoodName"] = "AccountNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","AccountNo");
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




	$tdatademo_user1["AccountNo"] = $fdata;
//	LateFixPenalty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "LateFixPenalty";
	$fdata["GoodName"] = "LateFixPenalty";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","LateFixPenalty");
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




	$tdatademo_user1["LateFixPenalty"] = $fdata;
//	DoNotUpdateContributions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "DoNotUpdateContributions";
	$fdata["GoodName"] = "DoNotUpdateContributions";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","DoNotUpdateContributions");
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




	$tdatademo_user1["DoNotUpdateContributions"] = $fdata;
//	ExcludeContributionOnPayroll
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "ExcludeContributionOnPayroll";
	$fdata["GoodName"] = "ExcludeContributionOnPayroll";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","ExcludeContributionOnPayroll");
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




	$tdatademo_user1["ExcludeContributionOnPayroll"] = $fdata;
//	Bank
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "Bank";
	$fdata["GoodName"] = "Bank";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","Bank");
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




	$tdatademo_user1["Bank"] = $fdata;
//	Birthday
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "Birthday";
	$fdata["GoodName"] = "Birthday";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","Birthday");
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




	$tdatademo_user1["Birthday"] = $fdata;
//	DeMinimis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "DeMinimis";
	$fdata["GoodName"] = "DeMinimis";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","DeMinimis");
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




	$tdatademo_user1["DeMinimis"] = $fdata;
//	NoLateDeduction
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "NoLateDeduction";
	$fdata["GoodName"] = "NoLateDeduction";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","NoLateDeduction");
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




	$tdatademo_user1["NoLateDeduction"] = $fdata;
//	IncludeBreakLate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "IncludeBreakLate";
	$fdata["GoodName"] = "IncludeBreakLate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","IncludeBreakLate");
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




	$tdatademo_user1["IncludeBreakLate"] = $fdata;
//	GracePeriodMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "GracePeriodMins";
	$fdata["GoodName"] = "GracePeriodMins";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","GracePeriodMins");
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




	$tdatademo_user1["GracePeriodMins"] = $fdata;
//	WithAdditionalBreaks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "WithAdditionalBreaks";
	$fdata["GoodName"] = "WithAdditionalBreaks";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","WithAdditionalBreaks");
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




	$tdatademo_user1["WithAdditionalBreaks"] = $fdata;
//	PresetMoNonTax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "PresetMoNonTax";
	$fdata["GoodName"] = "PresetMoNonTax";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","PresetMoNonTax");
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




	$tdatademo_user1["PresetMoNonTax"] = $fdata;
//	PreCalMoTaxable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "PreCalMoTaxable";
	$fdata["GoodName"] = "PreCalMoTaxable";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","PreCalMoTaxable");
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




	$tdatademo_user1["PreCalMoTaxable"] = $fdata;
//	CalMonthly
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "CalMonthly";
	$fdata["GoodName"] = "CalMonthly";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","CalMonthly");
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




	$tdatademo_user1["CalMonthly"] = $fdata;
//	TaxPeriods
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "TaxPeriods";
	$fdata["GoodName"] = "TaxPeriods";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","TaxPeriods");
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




	$tdatademo_user1["TaxPeriods"] = $fdata;
//	TaxPerPeriod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "TaxPerPeriod";
	$fdata["GoodName"] = "TaxPerPeriod";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","TaxPerPeriod");
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




	$tdatademo_user1["TaxPerPeriod"] = $fdata;
//	Superior2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "Superior2";
	$fdata["GoodName"] = "Superior2";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","Superior2");
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




	$tdatademo_user1["Superior2"] = $fdata;
//	ExcludeBio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "ExcludeBio";
	$fdata["GoodName"] = "ExcludeBio";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user1","ExcludeBio");
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




	$tdatademo_user1["ExcludeBio"] = $fdata;


$tables_data["demo_user1"]=&$tdatademo_user1;
$field_labels["demo_user1"] = &$fieldLabelsdemo_user1;
$fieldToolTips["demo_user1"] = &$fieldToolTipsdemo_user1;
$placeHolders["demo_user1"] = &$placeHoldersdemo_user1;
$page_titles["demo_user1"] = &$pageTitlesdemo_user1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["demo_user1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["demo_user1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_demo_user1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "user_id,  user_name,  Photo,  SSSNo,  TIN,  Mobile,  Address,  Email,  EmployeeType,  BasicMonthlyPay,  BasicDailyPay,  EmployeeID,  Division,  Status,  Department,  AllowableSickLeave,  AllowableVacationLeave,  AllowableEmergencyLeave,  SSSEE,  SSSER,  PhilHealthEE,  PhilHealthER,  PagIbigEE,  AllowablePaternityLeave,  HiredDate,  Inactive,  ExitDate,  PagIbigER,  PagIbigNo,  PhilHealthNo,  SSSEC,  `Level`,  DateCreated,  ApprovedDate,  Approved,  Approvedby,  Preparedby,  Checkedby,  CheckedDate,  Checked,  `Position`,  Superior,  Employer,  IDNo,  AccountNo,  LateFixPenalty,  DoNotUpdateContributions,  ExcludeContributionOnPayroll,  Bank,  Birthday,  DeMinimis,  NoLateDeduction,  IncludeBreakLate,  GracePeriodMins,  WithAdditionalBreaks,  PresetMoNonTax,  PreCalMoTaxable,  CalMonthly,  TaxPeriods,  TaxPerPeriod,  Superior2,  ExcludeBio";
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
	"m_srcTableName" => "demo_user1"
));

$proto6["m_sql"] = "user_id";
$proto6["m_srcTableName"] = "demo_user1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto8["m_sql"] = "user_name";
$proto8["m_srcTableName"] = "demo_user1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Photo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto10["m_sql"] = "Photo";
$proto10["m_srcTableName"] = "demo_user1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto12["m_sql"] = "SSSNo";
$proto12["m_srcTableName"] = "demo_user1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TIN",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto14["m_sql"] = "TIN";
$proto14["m_srcTableName"] = "demo_user1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Mobile",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto16["m_sql"] = "Mobile";
$proto16["m_srcTableName"] = "demo_user1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Address",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto18["m_sql"] = "Address";
$proto18["m_srcTableName"] = "demo_user1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto20["m_sql"] = "Email";
$proto20["m_srcTableName"] = "demo_user1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeType",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto22["m_sql"] = "EmployeeType";
$proto22["m_srcTableName"] = "demo_user1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "BasicMonthlyPay",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto24["m_sql"] = "BasicMonthlyPay";
$proto24["m_srcTableName"] = "demo_user1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "BasicDailyPay",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto26["m_sql"] = "BasicDailyPay";
$proto26["m_srcTableName"] = "demo_user1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto28["m_sql"] = "EmployeeID";
$proto28["m_srcTableName"] = "demo_user1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto30["m_sql"] = "Division";
$proto30["m_srcTableName"] = "demo_user1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto32["m_sql"] = "Status";
$proto32["m_srcTableName"] = "demo_user1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto34["m_sql"] = "Department";
$proto34["m_srcTableName"] = "demo_user1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableSickLeave",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto36["m_sql"] = "AllowableSickLeave";
$proto36["m_srcTableName"] = "demo_user1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableVacationLeave",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto38["m_sql"] = "AllowableVacationLeave";
$proto38["m_srcTableName"] = "demo_user1";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableEmergencyLeave",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto40["m_sql"] = "AllowableEmergencyLeave";
$proto40["m_srcTableName"] = "demo_user1";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSEE",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto42["m_sql"] = "SSSEE";
$proto42["m_srcTableName"] = "demo_user1";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSER",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto44["m_sql"] = "SSSER";
$proto44["m_srcTableName"] = "demo_user1";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "PhilHealthEE",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto46["m_sql"] = "PhilHealthEE";
$proto46["m_srcTableName"] = "demo_user1";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "PhilHealthER",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto48["m_sql"] = "PhilHealthER";
$proto48["m_srcTableName"] = "demo_user1";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbigEE",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto50["m_sql"] = "PagIbigEE";
$proto50["m_srcTableName"] = "demo_user1";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowablePaternityLeave",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto52["m_sql"] = "AllowablePaternityLeave";
$proto52["m_srcTableName"] = "demo_user1";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "HiredDate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto54["m_sql"] = "HiredDate";
$proto54["m_srcTableName"] = "demo_user1";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Inactive",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto56["m_sql"] = "Inactive";
$proto56["m_srcTableName"] = "demo_user1";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "ExitDate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto58["m_sql"] = "ExitDate";
$proto58["m_srcTableName"] = "demo_user1";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbigER",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto60["m_sql"] = "PagIbigER";
$proto60["m_srcTableName"] = "demo_user1";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbigNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto62["m_sql"] = "PagIbigNo";
$proto62["m_srcTableName"] = "demo_user1";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "PhilHealthNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto64["m_sql"] = "PhilHealthNo";
$proto64["m_srcTableName"] = "demo_user1";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSEC",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto66["m_sql"] = "SSSEC";
$proto66["m_srcTableName"] = "demo_user1";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "Level",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto68["m_sql"] = "`Level`";
$proto68["m_srcTableName"] = "demo_user1";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "DateCreated",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto70["m_sql"] = "DateCreated";
$proto70["m_srcTableName"] = "demo_user1";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedDate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto72["m_sql"] = "ApprovedDate";
$proto72["m_srcTableName"] = "demo_user1";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Approved",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto74["m_sql"] = "Approved";
$proto74["m_srcTableName"] = "demo_user1";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Approvedby",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto76["m_sql"] = "Approvedby";
$proto76["m_srcTableName"] = "demo_user1";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "Preparedby",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto78["m_sql"] = "Preparedby";
$proto78["m_srcTableName"] = "demo_user1";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "Checkedby",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto80["m_sql"] = "Checkedby";
$proto80["m_srcTableName"] = "demo_user1";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "CheckedDate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto82["m_sql"] = "CheckedDate";
$proto82["m_srcTableName"] = "demo_user1";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Checked",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto84["m_sql"] = "Checked";
$proto84["m_srcTableName"] = "demo_user1";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Position",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto86["m_sql"] = "`Position`";
$proto86["m_srcTableName"] = "demo_user1";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto88["m_sql"] = "Superior";
$proto88["m_srcTableName"] = "demo_user1";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto90["m_sql"] = "Employer";
$proto90["m_srcTableName"] = "demo_user1";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "IDNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto92["m_sql"] = "IDNo";
$proto92["m_srcTableName"] = "demo_user1";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto94["m_sql"] = "AccountNo";
$proto94["m_srcTableName"] = "demo_user1";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "LateFixPenalty",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto96["m_sql"] = "LateFixPenalty";
$proto96["m_srcTableName"] = "demo_user1";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "DoNotUpdateContributions",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto98["m_sql"] = "DoNotUpdateContributions";
$proto98["m_srcTableName"] = "demo_user1";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "ExcludeContributionOnPayroll",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto100["m_sql"] = "ExcludeContributionOnPayroll";
$proto100["m_srcTableName"] = "demo_user1";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "Bank",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto102["m_sql"] = "Bank";
$proto102["m_srcTableName"] = "demo_user1";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "Birthday",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto104["m_sql"] = "Birthday";
$proto104["m_srcTableName"] = "demo_user1";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "DeMinimis",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto106["m_sql"] = "DeMinimis";
$proto106["m_srcTableName"] = "demo_user1";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "NoLateDeduction",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto108["m_sql"] = "NoLateDeduction";
$proto108["m_srcTableName"] = "demo_user1";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "IncludeBreakLate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto110["m_sql"] = "IncludeBreakLate";
$proto110["m_srcTableName"] = "demo_user1";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "GracePeriodMins",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto112["m_sql"] = "GracePeriodMins";
$proto112["m_srcTableName"] = "demo_user1";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "WithAdditionalBreaks",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto114["m_sql"] = "WithAdditionalBreaks";
$proto114["m_srcTableName"] = "demo_user1";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "PresetMoNonTax",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto116["m_sql"] = "PresetMoNonTax";
$proto116["m_srcTableName"] = "demo_user1";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "PreCalMoTaxable",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto118["m_sql"] = "PreCalMoTaxable";
$proto118["m_srcTableName"] = "demo_user1";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "CalMonthly",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto120["m_sql"] = "CalMonthly";
$proto120["m_srcTableName"] = "demo_user1";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "TaxPeriods",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto122["m_sql"] = "TaxPeriods";
$proto122["m_srcTableName"] = "demo_user1";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "TaxPerPeriod",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto124["m_sql"] = "TaxPerPeriod";
$proto124["m_srcTableName"] = "demo_user1";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior2",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto126["m_sql"] = "Superior2";
$proto126["m_srcTableName"] = "demo_user1";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "ExcludeBio",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user1"
));

$proto128["m_sql"] = "ExcludeBio";
$proto128["m_srcTableName"] = "demo_user1";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto130=array();
$proto130["m_link"] = "SQLL_MAIN";
			$proto131=array();
$proto131["m_strName"] = "demo_user";
$proto131["m_srcTableName"] = "demo_user1";
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
$proto130["m_srcTableName"] = "demo_user1";
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
	"m_srcTableName" => "demo_user1"
));

$proto134["m_column"]=$obj;
$proto134["m_bAsc"] = 1;
$proto134["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto134);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="demo_user1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_demo_user1 = createSqlQuery_demo_user1();


	
		;

																																																														

$tdatademo_user1[".sqlquery"] = $queryData_demo_user1;

include_once(getabspath("include/demo_user1_events.php"));
$tableEvents["demo_user1"] = new eventclass_demo_user1;
$tdatademo_user1[".hasEvents"] = true;

?>