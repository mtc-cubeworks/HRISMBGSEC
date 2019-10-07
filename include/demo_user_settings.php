<?php
require_once(getabspath("classes/cipherer.php"));




$tdatademo_user = array();
	$tdatademo_user[".truncateText"] = true;
	$tdatademo_user[".NumberOfChars"] = 80;
	$tdatademo_user[".ShortName"] = "demo_user";
	$tdatademo_user[".OwnerID"] = "";
	$tdatademo_user[".OriginalTable"] = "demo_user";

//	field labels
$fieldLabelsdemo_user = array();
$fieldToolTipsdemo_user = array();
$pageTitlesdemo_user = array();
$placeHoldersdemo_user = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdemo_user["English"] = array();
	$fieldToolTipsdemo_user["English"] = array();
	$placeHoldersdemo_user["English"] = array();
	$pageTitlesdemo_user["English"] = array();
	$fieldLabelsdemo_user["English"]["user_id"] = "User Id";
	$fieldToolTipsdemo_user["English"]["user_id"] = "";
	$placeHoldersdemo_user["English"]["user_id"] = "";
	$fieldLabelsdemo_user["English"]["user_name"] = "Employee";
	$fieldToolTipsdemo_user["English"]["user_name"] = "";
	$placeHoldersdemo_user["English"]["user_name"] = "";
	$fieldLabelsdemo_user["English"]["Photo"] = "Photo";
	$fieldToolTipsdemo_user["English"]["Photo"] = "";
	$placeHoldersdemo_user["English"]["Photo"] = "";
	$fieldLabelsdemo_user["English"]["EmployeeType"] = "Wage Type";
	$fieldToolTipsdemo_user["English"]["EmployeeType"] = "";
	$placeHoldersdemo_user["English"]["EmployeeType"] = "";
	$fieldLabelsdemo_user["English"]["SSSNo"] = "SSS No";
	$fieldToolTipsdemo_user["English"]["SSSNo"] = "";
	$placeHoldersdemo_user["English"]["SSSNo"] = "";
	$fieldLabelsdemo_user["English"]["TIN"] = "TIN";
	$fieldToolTipsdemo_user["English"]["TIN"] = "";
	$placeHoldersdemo_user["English"]["TIN"] = "";
	$fieldLabelsdemo_user["English"]["Mobile"] = "Mobile";
	$fieldToolTipsdemo_user["English"]["Mobile"] = "";
	$placeHoldersdemo_user["English"]["Mobile"] = "";
	$fieldLabelsdemo_user["English"]["Address"] = "Address";
	$fieldToolTipsdemo_user["English"]["Address"] = "";
	$placeHoldersdemo_user["English"]["Address"] = "";
	$fieldLabelsdemo_user["English"]["Email"] = "Email";
	$fieldToolTipsdemo_user["English"]["Email"] = "";
	$placeHoldersdemo_user["English"]["Email"] = "";
	$fieldLabelsdemo_user["English"]["EmployeeID"] = "Biometric ID";
	$fieldToolTipsdemo_user["English"]["EmployeeID"] = "";
	$placeHoldersdemo_user["English"]["EmployeeID"] = "";
	$fieldLabelsdemo_user["English"]["Division"] = "Division";
	$fieldToolTipsdemo_user["English"]["Division"] = "";
	$placeHoldersdemo_user["English"]["Division"] = "";
	$fieldLabelsdemo_user["English"]["Status"] = "Status";
	$fieldToolTipsdemo_user["English"]["Status"] = "";
	$placeHoldersdemo_user["English"]["Status"] = "";
	$fieldLabelsdemo_user["English"]["Department"] = "Department";
	$fieldToolTipsdemo_user["English"]["Department"] = "";
	$placeHoldersdemo_user["English"]["Department"] = "";
	$fieldLabelsdemo_user["English"]["AllowableSickLeave"] = "SL";
	$fieldToolTipsdemo_user["English"]["AllowableSickLeave"] = "";
	$placeHoldersdemo_user["English"]["AllowableSickLeave"] = "";
	$fieldLabelsdemo_user["English"]["AllowableVacationLeave"] = "VL";
	$fieldToolTipsdemo_user["English"]["AllowableVacationLeave"] = "";
	$placeHoldersdemo_user["English"]["AllowableVacationLeave"] = "";
	$fieldLabelsdemo_user["English"]["AllowableEmergencyLeave"] = "EL";
	$fieldToolTipsdemo_user["English"]["AllowableEmergencyLeave"] = "";
	$placeHoldersdemo_user["English"]["AllowableEmergencyLeave"] = "";
	$fieldLabelsdemo_user["English"]["SSSEE"] = "SSS EE";
	$fieldToolTipsdemo_user["English"]["SSSEE"] = "";
	$placeHoldersdemo_user["English"]["SSSEE"] = "";
	$fieldLabelsdemo_user["English"]["SSSER"] = "SSS ER";
	$fieldToolTipsdemo_user["English"]["SSSER"] = "";
	$placeHoldersdemo_user["English"]["SSSER"] = "";
	$fieldLabelsdemo_user["English"]["PhilHealthEE"] = "PHIC EE";
	$fieldToolTipsdemo_user["English"]["PhilHealthEE"] = "";
	$placeHoldersdemo_user["English"]["PhilHealthEE"] = "";
	$fieldLabelsdemo_user["English"]["PhilHealthER"] = "PHIC ER";
	$fieldToolTipsdemo_user["English"]["PhilHealthER"] = "";
	$placeHoldersdemo_user["English"]["PhilHealthER"] = "";
	$fieldLabelsdemo_user["English"]["AllowablePaternityLeave"] = "PL";
	$fieldToolTipsdemo_user["English"]["AllowablePaternityLeave"] = "";
	$placeHoldersdemo_user["English"]["AllowablePaternityLeave"] = "";
	$fieldLabelsdemo_user["English"]["HiredDate"] = "Hired Date";
	$fieldToolTipsdemo_user["English"]["HiredDate"] = "";
	$placeHoldersdemo_user["English"]["HiredDate"] = "";
	$fieldLabelsdemo_user["English"]["ExitDate"] = "Exit Date";
	$fieldToolTipsdemo_user["English"]["ExitDate"] = "";
	$placeHoldersdemo_user["English"]["ExitDate"] = "";
	$fieldLabelsdemo_user["English"]["Inactive"] = "Inactive";
	$fieldToolTipsdemo_user["English"]["Inactive"] = "";
	$placeHoldersdemo_user["English"]["Inactive"] = "";
	$fieldLabelsdemo_user["English"]["PagIbigEE"] = "HDMF EE";
	$fieldToolTipsdemo_user["English"]["PagIbigEE"] = "";
	$placeHoldersdemo_user["English"]["PagIbigEE"] = "";
	$fieldLabelsdemo_user["English"]["PagIbigER"] = "HDMF ER";
	$fieldToolTipsdemo_user["English"]["PagIbigER"] = "";
	$placeHoldersdemo_user["English"]["PagIbigER"] = "";
	$fieldLabelsdemo_user["English"]["PagIbigNo"] = "HDMF No";
	$fieldToolTipsdemo_user["English"]["PagIbigNo"] = "";
	$placeHoldersdemo_user["English"]["PagIbigNo"] = "";
	$fieldLabelsdemo_user["English"]["PhilHealthNo"] = "PHIC No";
	$fieldToolTipsdemo_user["English"]["PhilHealthNo"] = "";
	$placeHoldersdemo_user["English"]["PhilHealthNo"] = "";
	$fieldLabelsdemo_user["English"]["SSSEC"] = "SSS EC";
	$fieldToolTipsdemo_user["English"]["SSSEC"] = "";
	$placeHoldersdemo_user["English"]["SSSEC"] = "";
	$fieldLabelsdemo_user["English"]["Level"] = "Level";
	$fieldToolTipsdemo_user["English"]["Level"] = "";
	$placeHoldersdemo_user["English"]["Level"] = "";
	$fieldLabelsdemo_user["English"]["DateCreated"] = "Date Created";
	$fieldToolTipsdemo_user["English"]["DateCreated"] = "";
	$placeHoldersdemo_user["English"]["DateCreated"] = "";
	$fieldLabelsdemo_user["English"]["ApprovedDate"] = "Approved Date";
	$fieldToolTipsdemo_user["English"]["ApprovedDate"] = "";
	$placeHoldersdemo_user["English"]["ApprovedDate"] = "";
	$fieldLabelsdemo_user["English"]["Approved"] = "Approved";
	$fieldToolTipsdemo_user["English"]["Approved"] = "";
	$placeHoldersdemo_user["English"]["Approved"] = "";
	$fieldLabelsdemo_user["English"]["Approvedby"] = "Approvedby";
	$fieldToolTipsdemo_user["English"]["Approvedby"] = "";
	$placeHoldersdemo_user["English"]["Approvedby"] = "";
	$fieldLabelsdemo_user["English"]["Preparedby"] = "Preparedby";
	$fieldToolTipsdemo_user["English"]["Preparedby"] = "";
	$placeHoldersdemo_user["English"]["Preparedby"] = "";
	$fieldLabelsdemo_user["English"]["Checkedby"] = "Checkedby";
	$fieldToolTipsdemo_user["English"]["Checkedby"] = "";
	$placeHoldersdemo_user["English"]["Checkedby"] = "";
	$fieldLabelsdemo_user["English"]["CheckedDate"] = "Checked Date";
	$fieldToolTipsdemo_user["English"]["CheckedDate"] = "";
	$placeHoldersdemo_user["English"]["CheckedDate"] = "";
	$fieldLabelsdemo_user["English"]["Checked"] = "Checked";
	$fieldToolTipsdemo_user["English"]["Checked"] = "";
	$placeHoldersdemo_user["English"]["Checked"] = "";
	$fieldLabelsdemo_user["English"]["Superior"] = "Supervisor";
	$fieldToolTipsdemo_user["English"]["Superior"] = "";
	$placeHoldersdemo_user["English"]["Superior"] = "";
	$fieldLabelsdemo_user["English"]["Position"] = "Position";
	$fieldToolTipsdemo_user["English"]["Position"] = "";
	$placeHoldersdemo_user["English"]["Position"] = "";
	$fieldLabelsdemo_user["English"]["Employer"] = "Employer";
	$fieldToolTipsdemo_user["English"]["Employer"] = "";
	$placeHoldersdemo_user["English"]["Employer"] = "";
	$fieldLabelsdemo_user["English"]["IDNo"] = "Employee ID";
	$fieldToolTipsdemo_user["English"]["IDNo"] = "";
	$placeHoldersdemo_user["English"]["IDNo"] = "";
	$fieldLabelsdemo_user["English"]["AccountNo"] = "Account No";
	$fieldToolTipsdemo_user["English"]["AccountNo"] = "";
	$placeHoldersdemo_user["English"]["AccountNo"] = "";
	$fieldLabelsdemo_user["English"]["LateFixPenalty"] = "Late Fix Penalty";
	$fieldToolTipsdemo_user["English"]["LateFixPenalty"] = "";
	$placeHoldersdemo_user["English"]["LateFixPenalty"] = "";
	$fieldLabelsdemo_user["English"]["DoNotUpdateContributions"] = "Do Not Update Contributions";
	$fieldToolTipsdemo_user["English"]["DoNotUpdateContributions"] = "";
	$placeHoldersdemo_user["English"]["DoNotUpdateContributions"] = "";
	$fieldLabelsdemo_user["English"]["ExcludeContributionOnPayroll"] = "Exclude Contribution On Payroll";
	$fieldToolTipsdemo_user["English"]["ExcludeContributionOnPayroll"] = "";
	$placeHoldersdemo_user["English"]["ExcludeContributionOnPayroll"] = "";
	$fieldLabelsdemo_user["English"]["Birthday"] = "Birthday";
	$fieldToolTipsdemo_user["English"]["Birthday"] = "";
	$placeHoldersdemo_user["English"]["Birthday"] = "";
	$fieldLabelsdemo_user["English"]["Bank"] = "Bank";
	$fieldToolTipsdemo_user["English"]["Bank"] = "";
	$placeHoldersdemo_user["English"]["Bank"] = "";
	$fieldLabelsdemo_user["English"]["NoLateDeduction"] = "No Late Deduction";
	$fieldToolTipsdemo_user["English"]["NoLateDeduction"] = "";
	$placeHoldersdemo_user["English"]["NoLateDeduction"] = "";
	$fieldLabelsdemo_user["English"]["IncludeBreakLate"] = "Include Break Late";
	$fieldToolTipsdemo_user["English"]["IncludeBreakLate"] = "";
	$placeHoldersdemo_user["English"]["IncludeBreakLate"] = "";
	$fieldLabelsdemo_user["English"]["GracePeriodMins"] = "Grace Period Mins";
	$fieldToolTipsdemo_user["English"]["GracePeriodMins"] = "";
	$placeHoldersdemo_user["English"]["GracePeriodMins"] = "";
	$fieldLabelsdemo_user["English"]["WithAdditionalBreaks"] = "With Additional Breaks";
	$fieldToolTipsdemo_user["English"]["WithAdditionalBreaks"] = "";
	$placeHoldersdemo_user["English"]["WithAdditionalBreaks"] = "";
	$fieldLabelsdemo_user["English"]["Superior2"] = "Manager";
	$fieldToolTipsdemo_user["English"]["Superior2"] = "";
	$placeHoldersdemo_user["English"]["Superior2"] = "";
	if (count($fieldToolTipsdemo_user["English"]))
		$tdatademo_user[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdemo_user[""] = array();
	$fieldToolTipsdemo_user[""] = array();
	$placeHoldersdemo_user[""] = array();
	$pageTitlesdemo_user[""] = array();
	$fieldLabelsdemo_user[""]["Superior2"] = "Superior2";
	$fieldToolTipsdemo_user[""]["Superior2"] = "";
	$placeHoldersdemo_user[""]["Superior2"] = "";
	if (count($fieldToolTipsdemo_user[""]))
		$tdatademo_user[".isUseToolTips"] = true;
}


	$tdatademo_user[".NCSearch"] = true;



$tdatademo_user[".shortTableName"] = "demo_user";
$tdatademo_user[".nSecOptions"] = 0;
$tdatademo_user[".recsPerRowPrint"] = 1;
$tdatademo_user[".mainTableOwnerID"] = "";
$tdatademo_user[".moveNext"] = 1;
$tdatademo_user[".entityType"] = 0;

$tdatademo_user[".strOriginalTableName"] = "demo_user";

	



$tdatademo_user[".showAddInPopup"] = false;

$tdatademo_user[".showEditInPopup"] = false;

$tdatademo_user[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatademo_user[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatademo_user[".fieldsForRegister"] = array();

$tdatademo_user[".listAjax"] = false;

	$tdatademo_user[".audit"] = false;

	$tdatademo_user[".locking"] = false;

$tdatademo_user[".edit"] = true;
$tdatademo_user[".afterEditAction"] = 1;
$tdatademo_user[".closePopupAfterEdit"] = 1;
$tdatademo_user[".afterEditActionDetTable"] = "";

$tdatademo_user[".add"] = true;
$tdatademo_user[".afterAddAction"] = 1;
$tdatademo_user[".closePopupAfterAdd"] = 1;
$tdatademo_user[".afterAddActionDetTable"] = "";

$tdatademo_user[".list"] = true;

$tdatademo_user[".inlineEdit"] = true;

$tdatademo_user[".updateSelected"] = true;

$tdatademo_user[".reorderRecordsByHeader"] = true;


$tdatademo_user[".exportFormatting"] = 2;
$tdatademo_user[".exportDelimiter"] = ",";
		
$tdatademo_user[".inlineAdd"] = true;
$tdatademo_user[".view"] = true;

$tdatademo_user[".import"] = true;

$tdatademo_user[".exportTo"] = true;

$tdatademo_user[".printFriendly"] = true;

$tdatademo_user[".delete"] = true;

$tdatademo_user[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatademo_user[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatademo_user[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatademo_user[".searchSaving"] = false;
//

$tdatademo_user[".showSearchPanel"] = true;
		$tdatademo_user[".flexibleSearch"] = true;

$tdatademo_user[".isUseAjaxSuggest"] = true;

$tdatademo_user[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																					

$tdatademo_user[".ajaxCodeSnippetAdded"] = false;

$tdatademo_user[".buttonsAdded"] = false;

$tdatademo_user[".addPageEvents"] = true;

// use timepicker for search panel
$tdatademo_user[".isUseTimeForSearch"] = false;



$tdatademo_user[".badgeColor"] = "2F4F4F";


$tdatademo_user[".allSearchFields"] = array();
$tdatademo_user[".filterFields"] = array();
$tdatademo_user[".requiredSearchFields"] = array();

$tdatademo_user[".allSearchFields"][] = "EmployeeID";
	$tdatademo_user[".allSearchFields"][] = "IDNo";
	$tdatademo_user[".allSearchFields"][] = "Photo";
	$tdatademo_user[".allSearchFields"][] = "user_name";
	$tdatademo_user[".allSearchFields"][] = "Employer";
	$tdatademo_user[".allSearchFields"][] = "Division";
	$tdatademo_user[".allSearchFields"][] = "Department";
	$tdatademo_user[".allSearchFields"][] = "HiredDate";
	$tdatademo_user[".allSearchFields"][] = "Inactive";
	$tdatademo_user[".allSearchFields"][] = "ExitDate";
	$tdatademo_user[".allSearchFields"][] = "Status";
	$tdatademo_user[".allSearchFields"][] = "Position";
	$tdatademo_user[".allSearchFields"][] = "Superior";
	$tdatademo_user[".allSearchFields"][] = "Superior2";
	$tdatademo_user[".allSearchFields"][] = "Mobile";
	$tdatademo_user[".allSearchFields"][] = "Address";
	$tdatademo_user[".allSearchFields"][] = "Birthday";
	$tdatademo_user[".allSearchFields"][] = "Email";
	$tdatademo_user[".allSearchFields"][] = "SSSNo";
	$tdatademo_user[".allSearchFields"][] = "PagIbigNo";
	$tdatademo_user[".allSearchFields"][] = "PhilHealthNo";
	$tdatademo_user[".allSearchFields"][] = "TIN";
	$tdatademo_user[".allSearchFields"][] = "Bank";
	$tdatademo_user[".allSearchFields"][] = "AccountNo";
	$tdatademo_user[".allSearchFields"][] = "AllowableSickLeave";
	$tdatademo_user[".allSearchFields"][] = "AllowableVacationLeave";
	$tdatademo_user[".allSearchFields"][] = "AllowableEmergencyLeave";
	$tdatademo_user[".allSearchFields"][] = "AllowablePaternityLeave";
	$tdatademo_user[".allSearchFields"][] = "EmployeeType";
	$tdatademo_user[".allSearchFields"][] = "Level";
	$tdatademo_user[".allSearchFields"][] = "DoNotUpdateContributions";
	$tdatademo_user[".allSearchFields"][] = "ExcludeContributionOnPayroll";
	$tdatademo_user[".allSearchFields"][] = "SSSEE";
	$tdatademo_user[".allSearchFields"][] = "SSSER";
	$tdatademo_user[".allSearchFields"][] = "SSSEC";
	$tdatademo_user[".allSearchFields"][] = "PhilHealthEE";
	$tdatademo_user[".allSearchFields"][] = "PhilHealthER";
	$tdatademo_user[".allSearchFields"][] = "PagIbigEE";
	$tdatademo_user[".allSearchFields"][] = "PagIbigER";
	$tdatademo_user[".allSearchFields"][] = "NoLateDeduction";
	$tdatademo_user[".allSearchFields"][] = "GracePeriodMins";
	$tdatademo_user[".allSearchFields"][] = "WithAdditionalBreaks";
	$tdatademo_user[".allSearchFields"][] = "IncludeBreakLate";
	$tdatademo_user[".allSearchFields"][] = "user_id";
	$tdatademo_user[".allSearchFields"][] = "LateFixPenalty";
	$tdatademo_user[".allSearchFields"][] = "DateCreated";
	$tdatademo_user[".allSearchFields"][] = "Preparedby";
	$tdatademo_user[".allSearchFields"][] = "Checked";
	$tdatademo_user[".allSearchFields"][] = "Checkedby";
	$tdatademo_user[".allSearchFields"][] = "CheckedDate";
	$tdatademo_user[".allSearchFields"][] = "Approved";
	$tdatademo_user[".allSearchFields"][] = "Approvedby";
	$tdatademo_user[".allSearchFields"][] = "ApprovedDate";
	

$tdatademo_user[".googleLikeFields"] = array();
$tdatademo_user[".googleLikeFields"][] = "user_id";
$tdatademo_user[".googleLikeFields"][] = "user_name";
$tdatademo_user[".googleLikeFields"][] = "Photo";
$tdatademo_user[".googleLikeFields"][] = "SSSNo";
$tdatademo_user[".googleLikeFields"][] = "TIN";
$tdatademo_user[".googleLikeFields"][] = "Mobile";
$tdatademo_user[".googleLikeFields"][] = "Address";
$tdatademo_user[".googleLikeFields"][] = "Email";
$tdatademo_user[".googleLikeFields"][] = "EmployeeType";
$tdatademo_user[".googleLikeFields"][] = "EmployeeID";
$tdatademo_user[".googleLikeFields"][] = "Division";
$tdatademo_user[".googleLikeFields"][] = "Status";
$tdatademo_user[".googleLikeFields"][] = "Department";
$tdatademo_user[".googleLikeFields"][] = "AllowableSickLeave";
$tdatademo_user[".googleLikeFields"][] = "AllowableVacationLeave";
$tdatademo_user[".googleLikeFields"][] = "AllowableEmergencyLeave";
$tdatademo_user[".googleLikeFields"][] = "SSSEE";
$tdatademo_user[".googleLikeFields"][] = "SSSER";
$tdatademo_user[".googleLikeFields"][] = "PhilHealthEE";
$tdatademo_user[".googleLikeFields"][] = "PhilHealthER";
$tdatademo_user[".googleLikeFields"][] = "PagIbigEE";
$tdatademo_user[".googleLikeFields"][] = "AllowablePaternityLeave";
$tdatademo_user[".googleLikeFields"][] = "HiredDate";
$tdatademo_user[".googleLikeFields"][] = "Inactive";
$tdatademo_user[".googleLikeFields"][] = "ExitDate";
$tdatademo_user[".googleLikeFields"][] = "PagIbigER";
$tdatademo_user[".googleLikeFields"][] = "PagIbigNo";
$tdatademo_user[".googleLikeFields"][] = "PhilHealthNo";
$tdatademo_user[".googleLikeFields"][] = "SSSEC";
$tdatademo_user[".googleLikeFields"][] = "Level";
$tdatademo_user[".googleLikeFields"][] = "DateCreated";
$tdatademo_user[".googleLikeFields"][] = "ApprovedDate";
$tdatademo_user[".googleLikeFields"][] = "Approved";
$tdatademo_user[".googleLikeFields"][] = "Approvedby";
$tdatademo_user[".googleLikeFields"][] = "Preparedby";
$tdatademo_user[".googleLikeFields"][] = "Checkedby";
$tdatademo_user[".googleLikeFields"][] = "CheckedDate";
$tdatademo_user[".googleLikeFields"][] = "Checked";
$tdatademo_user[".googleLikeFields"][] = "Superior";
$tdatademo_user[".googleLikeFields"][] = "Position";
$tdatademo_user[".googleLikeFields"][] = "Employer";
$tdatademo_user[".googleLikeFields"][] = "IDNo";
$tdatademo_user[".googleLikeFields"][] = "AccountNo";
$tdatademo_user[".googleLikeFields"][] = "LateFixPenalty";
$tdatademo_user[".googleLikeFields"][] = "DoNotUpdateContributions";
$tdatademo_user[".googleLikeFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user[".googleLikeFields"][] = "Birthday";
$tdatademo_user[".googleLikeFields"][] = "Bank";
$tdatademo_user[".googleLikeFields"][] = "NoLateDeduction";
$tdatademo_user[".googleLikeFields"][] = "IncludeBreakLate";
$tdatademo_user[".googleLikeFields"][] = "GracePeriodMins";
$tdatademo_user[".googleLikeFields"][] = "WithAdditionalBreaks";
$tdatademo_user[".googleLikeFields"][] = "Superior2";


$tdatademo_user[".advSearchFields"] = array();
$tdatademo_user[".advSearchFields"][] = "EmployeeID";
$tdatademo_user[".advSearchFields"][] = "IDNo";
$tdatademo_user[".advSearchFields"][] = "Photo";
$tdatademo_user[".advSearchFields"][] = "user_name";
$tdatademo_user[".advSearchFields"][] = "Employer";
$tdatademo_user[".advSearchFields"][] = "Division";
$tdatademo_user[".advSearchFields"][] = "Department";
$tdatademo_user[".advSearchFields"][] = "HiredDate";
$tdatademo_user[".advSearchFields"][] = "Inactive";
$tdatademo_user[".advSearchFields"][] = "ExitDate";
$tdatademo_user[".advSearchFields"][] = "Status";
$tdatademo_user[".advSearchFields"][] = "Position";
$tdatademo_user[".advSearchFields"][] = "Superior";
$tdatademo_user[".advSearchFields"][] = "Superior2";
$tdatademo_user[".advSearchFields"][] = "Mobile";
$tdatademo_user[".advSearchFields"][] = "Address";
$tdatademo_user[".advSearchFields"][] = "Birthday";
$tdatademo_user[".advSearchFields"][] = "Email";
$tdatademo_user[".advSearchFields"][] = "SSSNo";
$tdatademo_user[".advSearchFields"][] = "PagIbigNo";
$tdatademo_user[".advSearchFields"][] = "PhilHealthNo";
$tdatademo_user[".advSearchFields"][] = "TIN";
$tdatademo_user[".advSearchFields"][] = "Bank";
$tdatademo_user[".advSearchFields"][] = "AccountNo";
$tdatademo_user[".advSearchFields"][] = "AllowableSickLeave";
$tdatademo_user[".advSearchFields"][] = "AllowableVacationLeave";
$tdatademo_user[".advSearchFields"][] = "AllowableEmergencyLeave";
$tdatademo_user[".advSearchFields"][] = "AllowablePaternityLeave";
$tdatademo_user[".advSearchFields"][] = "EmployeeType";
$tdatademo_user[".advSearchFields"][] = "Level";
$tdatademo_user[".advSearchFields"][] = "DoNotUpdateContributions";
$tdatademo_user[".advSearchFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user[".advSearchFields"][] = "SSSEE";
$tdatademo_user[".advSearchFields"][] = "SSSER";
$tdatademo_user[".advSearchFields"][] = "SSSEC";
$tdatademo_user[".advSearchFields"][] = "PhilHealthEE";
$tdatademo_user[".advSearchFields"][] = "PhilHealthER";
$tdatademo_user[".advSearchFields"][] = "PagIbigEE";
$tdatademo_user[".advSearchFields"][] = "PagIbigER";
$tdatademo_user[".advSearchFields"][] = "NoLateDeduction";
$tdatademo_user[".advSearchFields"][] = "GracePeriodMins";
$tdatademo_user[".advSearchFields"][] = "WithAdditionalBreaks";
$tdatademo_user[".advSearchFields"][] = "IncludeBreakLate";
$tdatademo_user[".advSearchFields"][] = "user_id";
$tdatademo_user[".advSearchFields"][] = "LateFixPenalty";
$tdatademo_user[".advSearchFields"][] = "DateCreated";
$tdatademo_user[".advSearchFields"][] = "Preparedby";
$tdatademo_user[".advSearchFields"][] = "Checked";
$tdatademo_user[".advSearchFields"][] = "Checkedby";
$tdatademo_user[".advSearchFields"][] = "CheckedDate";
$tdatademo_user[".advSearchFields"][] = "Approved";
$tdatademo_user[".advSearchFields"][] = "Approvedby";
$tdatademo_user[".advSearchFields"][] = "ApprovedDate";

$tdatademo_user[".tableType"] = "list";

$tdatademo_user[".printerPageOrientation"] = 0;
$tdatademo_user[".nPrinterPageScale"] = 100;

$tdatademo_user[".nPrinterSplitRecords"] = 40;

$tdatademo_user[".nPrinterPDFSplitRecords"] = 40;



$tdatademo_user[".geocodingEnabled"] = false;





$tdatademo_user[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatademo_user[".pageSize"] = 20;

$tdatademo_user[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY user_name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatademo_user[".strOrderBy"] = $tstrOrderBy;

$tdatademo_user[".orderindexes"] = array();
	$tdatademo_user[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "user_name");


$tdatademo_user[".sqlHead"] = "SELECT user_id,  user_name,  Photo,  SSSNo,  TIN,  Mobile,  Address,  Email,  EmployeeType,  EmployeeID,  Division,  Status,  Department,  AllowableSickLeave,  AllowableVacationLeave,  AllowableEmergencyLeave,  SSSEE,  SSSER,  PhilHealthEE,  PhilHealthER,  PagIbigEE,  AllowablePaternityLeave,  HiredDate,  Inactive,  ExitDate,  PagIbigER,  PagIbigNo,  PhilHealthNo,  SSSEC,  `Level`,  DateCreated,  ApprovedDate,  Approved,  Approvedby,  Preparedby,  Checkedby,  CheckedDate,  Checked,  Superior,  `Position`,  Employer,  IDNo,  AccountNo,  LateFixPenalty,  DoNotUpdateContributions,  ExcludeContributionOnPayroll,  Birthday,  Bank,  NoLateDeduction,  IncludeBreakLate,  GracePeriodMins,  WithAdditionalBreaks,  Superior2";
$tdatademo_user[".sqlFrom"] = "FROM demo_user";
$tdatademo_user[".sqlWhereExpr"] = "";
$tdatademo_user[".sqlTail"] = "";


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
					   'nOrder'=>26,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "EmployeeType";
	
		$tabFields[] = "Level";
$arrEditTabs[] = array('tabId'=>'Compensation1',
					   'tabName'=>"Compensation",
					   'nType'=>'0',
					   'nOrder'=>31,
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
					   'nOrder'=>34,
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
					   'nOrder'=>44,
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
					   'nOrder'=>50,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatademo_user[".arrEditTabs"] = $arrEditTabs;


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
	
		$tabFields[] = "Level";
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
					  'nOrder'=>35,
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
					  'nOrder'=>45,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
$arrAddTabs[] = array('tabId'=>'Tax1',
					  'tabName'=>"Tax",
					  'nType'=>'0',
					  'nOrder'=>51,
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
					  'nOrder'=>57,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdatademo_user[".arrAddTabs"] = $arrAddTabs;

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
					   'tabName'=>"Leave Allowance",
					   'nType'=>'0',
					   'nOrder'=>27,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "EmployeeType";
	$tabFields[] = "Level";
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
					   'nOrder'=>35,
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
					   'nOrder'=>45,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
$arrViewTabs[] = array('tabId'=>'Tax1',
					   'tabName'=>"Tax",
					   'nType'=>'0',
					   'nOrder'=>51,
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
					   'nOrder'=>57,
					   'tabGroup'=>2,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatademo_user[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatademo_user[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatademo_user[".arrGroupsPerPage"] = $arrGPP;

$tdatademo_user[".highlightSearchResults"] = true;

$tableKeysdemo_user = array();
$tableKeysdemo_user[] = "user_id";
$tdatademo_user[".Keys"] = $tableKeysdemo_user;

$tdatademo_user[".listFields"] = array();
$tdatademo_user[".listFields"][] = "EmployeeID";
$tdatademo_user[".listFields"][] = "IDNo";
$tdatademo_user[".listFields"][] = "Photo";
$tdatademo_user[".listFields"][] = "user_name";
$tdatademo_user[".listFields"][] = "Employer";
$tdatademo_user[".listFields"][] = "Division";
$tdatademo_user[".listFields"][] = "Department";
$tdatademo_user[".listFields"][] = "HiredDate";
$tdatademo_user[".listFields"][] = "Inactive";
$tdatademo_user[".listFields"][] = "ExitDate";
$tdatademo_user[".listFields"][] = "Status";
$tdatademo_user[".listFields"][] = "Position";
$tdatademo_user[".listFields"][] = "Superior";
$tdatademo_user[".listFields"][] = "Superior2";
$tdatademo_user[".listFields"][] = "Mobile";
$tdatademo_user[".listFields"][] = "Address";
$tdatademo_user[".listFields"][] = "Birthday";
$tdatademo_user[".listFields"][] = "Email";
$tdatademo_user[".listFields"][] = "SSSNo";
$tdatademo_user[".listFields"][] = "PagIbigNo";
$tdatademo_user[".listFields"][] = "PhilHealthNo";
$tdatademo_user[".listFields"][] = "TIN";
$tdatademo_user[".listFields"][] = "Bank";
$tdatademo_user[".listFields"][] = "AccountNo";
$tdatademo_user[".listFields"][] = "AllowableSickLeave";
$tdatademo_user[".listFields"][] = "AllowableVacationLeave";
$tdatademo_user[".listFields"][] = "AllowableEmergencyLeave";
$tdatademo_user[".listFields"][] = "AllowablePaternityLeave";
$tdatademo_user[".listFields"][] = "EmployeeType";
$tdatademo_user[".listFields"][] = "Level";
$tdatademo_user[".listFields"][] = "DoNotUpdateContributions";
$tdatademo_user[".listFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user[".listFields"][] = "SSSEE";
$tdatademo_user[".listFields"][] = "SSSER";
$tdatademo_user[".listFields"][] = "SSSEC";
$tdatademo_user[".listFields"][] = "PhilHealthEE";
$tdatademo_user[".listFields"][] = "PhilHealthER";
$tdatademo_user[".listFields"][] = "PagIbigEE";
$tdatademo_user[".listFields"][] = "PagIbigER";
$tdatademo_user[".listFields"][] = "NoLateDeduction";
$tdatademo_user[".listFields"][] = "GracePeriodMins";
$tdatademo_user[".listFields"][] = "WithAdditionalBreaks";
$tdatademo_user[".listFields"][] = "IncludeBreakLate";
$tdatademo_user[".listFields"][] = "user_id";
$tdatademo_user[".listFields"][] = "LateFixPenalty";
$tdatademo_user[".listFields"][] = "DateCreated";
$tdatademo_user[".listFields"][] = "Preparedby";
$tdatademo_user[".listFields"][] = "Checked";
$tdatademo_user[".listFields"][] = "Checkedby";
$tdatademo_user[".listFields"][] = "CheckedDate";
$tdatademo_user[".listFields"][] = "Approved";
$tdatademo_user[".listFields"][] = "Approvedby";
$tdatademo_user[".listFields"][] = "ApprovedDate";

$tdatademo_user[".hideMobileList"] = array();


$tdatademo_user[".viewFields"] = array();
$tdatademo_user[".viewFields"][] = "EmployeeID";
$tdatademo_user[".viewFields"][] = "IDNo";
$tdatademo_user[".viewFields"][] = "Photo";
$tdatademo_user[".viewFields"][] = "user_name";
$tdatademo_user[".viewFields"][] = "Employer";
$tdatademo_user[".viewFields"][] = "Division";
$tdatademo_user[".viewFields"][] = "Department";
$tdatademo_user[".viewFields"][] = "HiredDate";
$tdatademo_user[".viewFields"][] = "Inactive";
$tdatademo_user[".viewFields"][] = "ExitDate";
$tdatademo_user[".viewFields"][] = "Status";
$tdatademo_user[".viewFields"][] = "Position";
$tdatademo_user[".viewFields"][] = "Superior";
$tdatademo_user[".viewFields"][] = "Superior2";
$tdatademo_user[".viewFields"][] = "Mobile";
$tdatademo_user[".viewFields"][] = "Address";
$tdatademo_user[".viewFields"][] = "Birthday";
$tdatademo_user[".viewFields"][] = "Email";
$tdatademo_user[".viewFields"][] = "SSSNo";
$tdatademo_user[".viewFields"][] = "PagIbigNo";
$tdatademo_user[".viewFields"][] = "PhilHealthNo";
$tdatademo_user[".viewFields"][] = "TIN";
$tdatademo_user[".viewFields"][] = "Bank";
$tdatademo_user[".viewFields"][] = "AccountNo";
$tdatademo_user[".viewFields"][] = "AllowableSickLeave";
$tdatademo_user[".viewFields"][] = "AllowableVacationLeave";
$tdatademo_user[".viewFields"][] = "AllowableEmergencyLeave";
$tdatademo_user[".viewFields"][] = "AllowablePaternityLeave";
$tdatademo_user[".viewFields"][] = "EmployeeType";
$tdatademo_user[".viewFields"][] = "Level";
$tdatademo_user[".viewFields"][] = "DoNotUpdateContributions";
$tdatademo_user[".viewFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user[".viewFields"][] = "SSSEE";
$tdatademo_user[".viewFields"][] = "SSSER";
$tdatademo_user[".viewFields"][] = "SSSEC";
$tdatademo_user[".viewFields"][] = "PhilHealthEE";
$tdatademo_user[".viewFields"][] = "PhilHealthER";
$tdatademo_user[".viewFields"][] = "PagIbigEE";
$tdatademo_user[".viewFields"][] = "PagIbigER";
$tdatademo_user[".viewFields"][] = "NoLateDeduction";
$tdatademo_user[".viewFields"][] = "GracePeriodMins";
$tdatademo_user[".viewFields"][] = "WithAdditionalBreaks";
$tdatademo_user[".viewFields"][] = "IncludeBreakLate";
$tdatademo_user[".viewFields"][] = "user_id";
$tdatademo_user[".viewFields"][] = "LateFixPenalty";
$tdatademo_user[".viewFields"][] = "DateCreated";
$tdatademo_user[".viewFields"][] = "Preparedby";
$tdatademo_user[".viewFields"][] = "Checked";
$tdatademo_user[".viewFields"][] = "Checkedby";
$tdatademo_user[".viewFields"][] = "CheckedDate";
$tdatademo_user[".viewFields"][] = "Approved";
$tdatademo_user[".viewFields"][] = "Approvedby";
$tdatademo_user[".viewFields"][] = "ApprovedDate";

$tdatademo_user[".addFields"] = array();
$tdatademo_user[".addFields"][] = "EmployeeID";
$tdatademo_user[".addFields"][] = "IDNo";
$tdatademo_user[".addFields"][] = "Photo";
$tdatademo_user[".addFields"][] = "user_name";
$tdatademo_user[".addFields"][] = "Employer";
$tdatademo_user[".addFields"][] = "Division";
$tdatademo_user[".addFields"][] = "Department";
$tdatademo_user[".addFields"][] = "HiredDate";
$tdatademo_user[".addFields"][] = "Inactive";
$tdatademo_user[".addFields"][] = "ExitDate";
$tdatademo_user[".addFields"][] = "Status";
$tdatademo_user[".addFields"][] = "Position";
$tdatademo_user[".addFields"][] = "Superior";
$tdatademo_user[".addFields"][] = "Superior2";
$tdatademo_user[".addFields"][] = "Mobile";
$tdatademo_user[".addFields"][] = "Address";
$tdatademo_user[".addFields"][] = "Birthday";
$tdatademo_user[".addFields"][] = "Email";
$tdatademo_user[".addFields"][] = "SSSNo";
$tdatademo_user[".addFields"][] = "PagIbigNo";
$tdatademo_user[".addFields"][] = "PhilHealthNo";
$tdatademo_user[".addFields"][] = "TIN";
$tdatademo_user[".addFields"][] = "Bank";
$tdatademo_user[".addFields"][] = "AccountNo";
$tdatademo_user[".addFields"][] = "AllowableSickLeave";
$tdatademo_user[".addFields"][] = "AllowableVacationLeave";
$tdatademo_user[".addFields"][] = "AllowableEmergencyLeave";
$tdatademo_user[".addFields"][] = "AllowablePaternityLeave";
$tdatademo_user[".addFields"][] = "EmployeeType";
$tdatademo_user[".addFields"][] = "Level";
$tdatademo_user[".addFields"][] = "DoNotUpdateContributions";
$tdatademo_user[".addFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user[".addFields"][] = "SSSEE";
$tdatademo_user[".addFields"][] = "SSSER";
$tdatademo_user[".addFields"][] = "SSSEC";
$tdatademo_user[".addFields"][] = "PhilHealthEE";
$tdatademo_user[".addFields"][] = "PhilHealthER";
$tdatademo_user[".addFields"][] = "PagIbigEE";
$tdatademo_user[".addFields"][] = "PagIbigER";
$tdatademo_user[".addFields"][] = "NoLateDeduction";
$tdatademo_user[".addFields"][] = "GracePeriodMins";
$tdatademo_user[".addFields"][] = "WithAdditionalBreaks";
$tdatademo_user[".addFields"][] = "IncludeBreakLate";
$tdatademo_user[".addFields"][] = "LateFixPenalty";
$tdatademo_user[".addFields"][] = "DateCreated";
$tdatademo_user[".addFields"][] = "Preparedby";
$tdatademo_user[".addFields"][] = "Checked";
$tdatademo_user[".addFields"][] = "Checkedby";
$tdatademo_user[".addFields"][] = "CheckedDate";
$tdatademo_user[".addFields"][] = "Approved";
$tdatademo_user[".addFields"][] = "Approvedby";
$tdatademo_user[".addFields"][] = "ApprovedDate";

$tdatademo_user[".masterListFields"] = array();
$tdatademo_user[".masterListFields"][] = "EmployeeID";
$tdatademo_user[".masterListFields"][] = "IDNo";
$tdatademo_user[".masterListFields"][] = "Photo";
$tdatademo_user[".masterListFields"][] = "user_name";
$tdatademo_user[".masterListFields"][] = "Employer";
$tdatademo_user[".masterListFields"][] = "Division";
$tdatademo_user[".masterListFields"][] = "Department";
$tdatademo_user[".masterListFields"][] = "HiredDate";
$tdatademo_user[".masterListFields"][] = "Inactive";
$tdatademo_user[".masterListFields"][] = "ExitDate";
$tdatademo_user[".masterListFields"][] = "Status";
$tdatademo_user[".masterListFields"][] = "Position";
$tdatademo_user[".masterListFields"][] = "Superior";
$tdatademo_user[".masterListFields"][] = "Superior2";
$tdatademo_user[".masterListFields"][] = "Mobile";
$tdatademo_user[".masterListFields"][] = "Address";
$tdatademo_user[".masterListFields"][] = "Birthday";
$tdatademo_user[".masterListFields"][] = "Email";
$tdatademo_user[".masterListFields"][] = "SSSNo";
$tdatademo_user[".masterListFields"][] = "PagIbigNo";
$tdatademo_user[".masterListFields"][] = "PhilHealthNo";
$tdatademo_user[".masterListFields"][] = "TIN";
$tdatademo_user[".masterListFields"][] = "Bank";
$tdatademo_user[".masterListFields"][] = "AccountNo";
$tdatademo_user[".masterListFields"][] = "AllowableSickLeave";
$tdatademo_user[".masterListFields"][] = "AllowableVacationLeave";
$tdatademo_user[".masterListFields"][] = "AllowableEmergencyLeave";
$tdatademo_user[".masterListFields"][] = "AllowablePaternityLeave";
$tdatademo_user[".masterListFields"][] = "EmployeeType";
$tdatademo_user[".masterListFields"][] = "Level";
$tdatademo_user[".masterListFields"][] = "DoNotUpdateContributions";
$tdatademo_user[".masterListFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user[".masterListFields"][] = "SSSEE";
$tdatademo_user[".masterListFields"][] = "SSSER";
$tdatademo_user[".masterListFields"][] = "SSSEC";
$tdatademo_user[".masterListFields"][] = "PhilHealthEE";
$tdatademo_user[".masterListFields"][] = "PhilHealthER";
$tdatademo_user[".masterListFields"][] = "PagIbigEE";
$tdatademo_user[".masterListFields"][] = "PagIbigER";
$tdatademo_user[".masterListFields"][] = "NoLateDeduction";
$tdatademo_user[".masterListFields"][] = "GracePeriodMins";
$tdatademo_user[".masterListFields"][] = "WithAdditionalBreaks";
$tdatademo_user[".masterListFields"][] = "IncludeBreakLate";
$tdatademo_user[".masterListFields"][] = "user_id";
$tdatademo_user[".masterListFields"][] = "LateFixPenalty";
$tdatademo_user[".masterListFields"][] = "DateCreated";
$tdatademo_user[".masterListFields"][] = "Preparedby";
$tdatademo_user[".masterListFields"][] = "Checked";
$tdatademo_user[".masterListFields"][] = "Checkedby";
$tdatademo_user[".masterListFields"][] = "CheckedDate";
$tdatademo_user[".masterListFields"][] = "Approved";
$tdatademo_user[".masterListFields"][] = "Approvedby";
$tdatademo_user[".masterListFields"][] = "ApprovedDate";

$tdatademo_user[".inlineAddFields"] = array();
$tdatademo_user[".inlineAddFields"][] = "EmployeeID";
$tdatademo_user[".inlineAddFields"][] = "IDNo";
$tdatademo_user[".inlineAddFields"][] = "Photo";
$tdatademo_user[".inlineAddFields"][] = "user_name";
$tdatademo_user[".inlineAddFields"][] = "Employer";
$tdatademo_user[".inlineAddFields"][] = "Division";
$tdatademo_user[".inlineAddFields"][] = "Department";
$tdatademo_user[".inlineAddFields"][] = "HiredDate";
$tdatademo_user[".inlineAddFields"][] = "Inactive";
$tdatademo_user[".inlineAddFields"][] = "ExitDate";
$tdatademo_user[".inlineAddFields"][] = "Status";
$tdatademo_user[".inlineAddFields"][] = "Position";
$tdatademo_user[".inlineAddFields"][] = "Superior";
$tdatademo_user[".inlineAddFields"][] = "Superior2";
$tdatademo_user[".inlineAddFields"][] = "Mobile";
$tdatademo_user[".inlineAddFields"][] = "Address";
$tdatademo_user[".inlineAddFields"][] = "Birthday";
$tdatademo_user[".inlineAddFields"][] = "Email";
$tdatademo_user[".inlineAddFields"][] = "SSSNo";
$tdatademo_user[".inlineAddFields"][] = "PagIbigNo";
$tdatademo_user[".inlineAddFields"][] = "PhilHealthNo";
$tdatademo_user[".inlineAddFields"][] = "TIN";
$tdatademo_user[".inlineAddFields"][] = "Bank";
$tdatademo_user[".inlineAddFields"][] = "AccountNo";
$tdatademo_user[".inlineAddFields"][] = "AllowableSickLeave";
$tdatademo_user[".inlineAddFields"][] = "AllowableVacationLeave";
$tdatademo_user[".inlineAddFields"][] = "AllowableEmergencyLeave";
$tdatademo_user[".inlineAddFields"][] = "AllowablePaternityLeave";
$tdatademo_user[".inlineAddFields"][] = "EmployeeType";
$tdatademo_user[".inlineAddFields"][] = "Level";
$tdatademo_user[".inlineAddFields"][] = "DoNotUpdateContributions";
$tdatademo_user[".inlineAddFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user[".inlineAddFields"][] = "SSSEE";
$tdatademo_user[".inlineAddFields"][] = "SSSER";
$tdatademo_user[".inlineAddFields"][] = "SSSEC";
$tdatademo_user[".inlineAddFields"][] = "PhilHealthEE";
$tdatademo_user[".inlineAddFields"][] = "PhilHealthER";
$tdatademo_user[".inlineAddFields"][] = "PagIbigEE";
$tdatademo_user[".inlineAddFields"][] = "PagIbigER";
$tdatademo_user[".inlineAddFields"][] = "NoLateDeduction";
$tdatademo_user[".inlineAddFields"][] = "GracePeriodMins";
$tdatademo_user[".inlineAddFields"][] = "WithAdditionalBreaks";
$tdatademo_user[".inlineAddFields"][] = "IncludeBreakLate";
$tdatademo_user[".inlineAddFields"][] = "LateFixPenalty";
$tdatademo_user[".inlineAddFields"][] = "DateCreated";
$tdatademo_user[".inlineAddFields"][] = "Preparedby";
$tdatademo_user[".inlineAddFields"][] = "Checked";
$tdatademo_user[".inlineAddFields"][] = "Checkedby";
$tdatademo_user[".inlineAddFields"][] = "CheckedDate";
$tdatademo_user[".inlineAddFields"][] = "Approved";
$tdatademo_user[".inlineAddFields"][] = "Approvedby";
$tdatademo_user[".inlineAddFields"][] = "ApprovedDate";

$tdatademo_user[".editFields"] = array();
$tdatademo_user[".editFields"][] = "EmployeeID";
$tdatademo_user[".editFields"][] = "IDNo";
$tdatademo_user[".editFields"][] = "Photo";
$tdatademo_user[".editFields"][] = "user_name";
$tdatademo_user[".editFields"][] = "Employer";
$tdatademo_user[".editFields"][] = "Division";
$tdatademo_user[".editFields"][] = "Department";
$tdatademo_user[".editFields"][] = "HiredDate";
$tdatademo_user[".editFields"][] = "Inactive";
$tdatademo_user[".editFields"][] = "ExitDate";
$tdatademo_user[".editFields"][] = "Status";
$tdatademo_user[".editFields"][] = "Position";
$tdatademo_user[".editFields"][] = "Superior";
$tdatademo_user[".editFields"][] = "Superior2";
$tdatademo_user[".editFields"][] = "Mobile";
$tdatademo_user[".editFields"][] = "Address";
$tdatademo_user[".editFields"][] = "Birthday";
$tdatademo_user[".editFields"][] = "Email";
$tdatademo_user[".editFields"][] = "SSSNo";
$tdatademo_user[".editFields"][] = "PagIbigNo";
$tdatademo_user[".editFields"][] = "PhilHealthNo";
$tdatademo_user[".editFields"][] = "TIN";
$tdatademo_user[".editFields"][] = "Bank";
$tdatademo_user[".editFields"][] = "AccountNo";
$tdatademo_user[".editFields"][] = "AllowableSickLeave";
$tdatademo_user[".editFields"][] = "AllowableVacationLeave";
$tdatademo_user[".editFields"][] = "AllowableEmergencyLeave";
$tdatademo_user[".editFields"][] = "AllowablePaternityLeave";
$tdatademo_user[".editFields"][] = "EmployeeType";
$tdatademo_user[".editFields"][] = "Level";
$tdatademo_user[".editFields"][] = "DoNotUpdateContributions";
$tdatademo_user[".editFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user[".editFields"][] = "SSSEE";
$tdatademo_user[".editFields"][] = "SSSER";
$tdatademo_user[".editFields"][] = "SSSEC";
$tdatademo_user[".editFields"][] = "PhilHealthEE";
$tdatademo_user[".editFields"][] = "PhilHealthER";
$tdatademo_user[".editFields"][] = "PagIbigEE";
$tdatademo_user[".editFields"][] = "PagIbigER";
$tdatademo_user[".editFields"][] = "NoLateDeduction";
$tdatademo_user[".editFields"][] = "GracePeriodMins";
$tdatademo_user[".editFields"][] = "WithAdditionalBreaks";
$tdatademo_user[".editFields"][] = "IncludeBreakLate";
$tdatademo_user[".editFields"][] = "LateFixPenalty";
$tdatademo_user[".editFields"][] = "DateCreated";
$tdatademo_user[".editFields"][] = "Preparedby";
$tdatademo_user[".editFields"][] = "Checked";
$tdatademo_user[".editFields"][] = "Checkedby";
$tdatademo_user[".editFields"][] = "CheckedDate";
$tdatademo_user[".editFields"][] = "Approved";
$tdatademo_user[".editFields"][] = "Approvedby";
$tdatademo_user[".editFields"][] = "ApprovedDate";

$tdatademo_user[".inlineEditFields"] = array();
$tdatademo_user[".inlineEditFields"][] = "EmployeeID";
$tdatademo_user[".inlineEditFields"][] = "IDNo";
$tdatademo_user[".inlineEditFields"][] = "Photo";
$tdatademo_user[".inlineEditFields"][] = "user_name";
$tdatademo_user[".inlineEditFields"][] = "Employer";
$tdatademo_user[".inlineEditFields"][] = "Division";
$tdatademo_user[".inlineEditFields"][] = "Department";
$tdatademo_user[".inlineEditFields"][] = "HiredDate";
$tdatademo_user[".inlineEditFields"][] = "Inactive";
$tdatademo_user[".inlineEditFields"][] = "ExitDate";
$tdatademo_user[".inlineEditFields"][] = "Status";
$tdatademo_user[".inlineEditFields"][] = "Position";
$tdatademo_user[".inlineEditFields"][] = "Superior";
$tdatademo_user[".inlineEditFields"][] = "Superior2";
$tdatademo_user[".inlineEditFields"][] = "Mobile";
$tdatademo_user[".inlineEditFields"][] = "Address";
$tdatademo_user[".inlineEditFields"][] = "Birthday";
$tdatademo_user[".inlineEditFields"][] = "Email";
$tdatademo_user[".inlineEditFields"][] = "SSSNo";
$tdatademo_user[".inlineEditFields"][] = "PagIbigNo";
$tdatademo_user[".inlineEditFields"][] = "PhilHealthNo";
$tdatademo_user[".inlineEditFields"][] = "TIN";
$tdatademo_user[".inlineEditFields"][] = "Bank";
$tdatademo_user[".inlineEditFields"][] = "AccountNo";
$tdatademo_user[".inlineEditFields"][] = "AllowableSickLeave";
$tdatademo_user[".inlineEditFields"][] = "AllowableVacationLeave";
$tdatademo_user[".inlineEditFields"][] = "AllowableEmergencyLeave";
$tdatademo_user[".inlineEditFields"][] = "AllowablePaternityLeave";
$tdatademo_user[".inlineEditFields"][] = "EmployeeType";
$tdatademo_user[".inlineEditFields"][] = "Level";
$tdatademo_user[".inlineEditFields"][] = "DoNotUpdateContributions";
$tdatademo_user[".inlineEditFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user[".inlineEditFields"][] = "SSSEE";
$tdatademo_user[".inlineEditFields"][] = "SSSER";
$tdatademo_user[".inlineEditFields"][] = "SSSEC";
$tdatademo_user[".inlineEditFields"][] = "PhilHealthEE";
$tdatademo_user[".inlineEditFields"][] = "PhilHealthER";
$tdatademo_user[".inlineEditFields"][] = "PagIbigEE";
$tdatademo_user[".inlineEditFields"][] = "PagIbigER";
$tdatademo_user[".inlineEditFields"][] = "NoLateDeduction";
$tdatademo_user[".inlineEditFields"][] = "GracePeriodMins";
$tdatademo_user[".inlineEditFields"][] = "WithAdditionalBreaks";
$tdatademo_user[".inlineEditFields"][] = "IncludeBreakLate";
$tdatademo_user[".inlineEditFields"][] = "LateFixPenalty";
$tdatademo_user[".inlineEditFields"][] = "DateCreated";
$tdatademo_user[".inlineEditFields"][] = "Preparedby";
$tdatademo_user[".inlineEditFields"][] = "Checked";
$tdatademo_user[".inlineEditFields"][] = "Checkedby";
$tdatademo_user[".inlineEditFields"][] = "CheckedDate";
$tdatademo_user[".inlineEditFields"][] = "Approved";
$tdatademo_user[".inlineEditFields"][] = "Approvedby";
$tdatademo_user[".inlineEditFields"][] = "ApprovedDate";

$tdatademo_user[".updateSelectedFields"] = array();
$tdatademo_user[".updateSelectedFields"][] = "Employer";
$tdatademo_user[".updateSelectedFields"][] = "Division";
$tdatademo_user[".updateSelectedFields"][] = "Department";
$tdatademo_user[".updateSelectedFields"][] = "HiredDate";
$tdatademo_user[".updateSelectedFields"][] = "Inactive";
$tdatademo_user[".updateSelectedFields"][] = "ExitDate";
$tdatademo_user[".updateSelectedFields"][] = "Status";
$tdatademo_user[".updateSelectedFields"][] = "Position";
$tdatademo_user[".updateSelectedFields"][] = "Superior";
$tdatademo_user[".updateSelectedFields"][] = "Superior2";
$tdatademo_user[".updateSelectedFields"][] = "Bank";
$tdatademo_user[".updateSelectedFields"][] = "AllowableSickLeave";
$tdatademo_user[".updateSelectedFields"][] = "AllowableVacationLeave";
$tdatademo_user[".updateSelectedFields"][] = "AllowableEmergencyLeave";
$tdatademo_user[".updateSelectedFields"][] = "AllowablePaternityLeave";
$tdatademo_user[".updateSelectedFields"][] = "EmployeeType";
$tdatademo_user[".updateSelectedFields"][] = "Level";
$tdatademo_user[".updateSelectedFields"][] = "DoNotUpdateContributions";
$tdatademo_user[".updateSelectedFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user[".updateSelectedFields"][] = "SSSEE";
$tdatademo_user[".updateSelectedFields"][] = "SSSER";
$tdatademo_user[".updateSelectedFields"][] = "SSSEC";
$tdatademo_user[".updateSelectedFields"][] = "PhilHealthEE";
$tdatademo_user[".updateSelectedFields"][] = "PhilHealthER";
$tdatademo_user[".updateSelectedFields"][] = "PagIbigEE";
$tdatademo_user[".updateSelectedFields"][] = "PagIbigER";
$tdatademo_user[".updateSelectedFields"][] = "LateFixPenalty";
$tdatademo_user[".updateSelectedFields"][] = "DateCreated";
$tdatademo_user[".updateSelectedFields"][] = "Preparedby";
$tdatademo_user[".updateSelectedFields"][] = "Checked";
$tdatademo_user[".updateSelectedFields"][] = "Checkedby";
$tdatademo_user[".updateSelectedFields"][] = "CheckedDate";
$tdatademo_user[".updateSelectedFields"][] = "Approved";
$tdatademo_user[".updateSelectedFields"][] = "Approvedby";
$tdatademo_user[".updateSelectedFields"][] = "ApprovedDate";


$tdatademo_user[".exportFields"] = array();
$tdatademo_user[".exportFields"][] = "EmployeeID";
$tdatademo_user[".exportFields"][] = "IDNo";
$tdatademo_user[".exportFields"][] = "Photo";
$tdatademo_user[".exportFields"][] = "user_name";
$tdatademo_user[".exportFields"][] = "Employer";
$tdatademo_user[".exportFields"][] = "Division";
$tdatademo_user[".exportFields"][] = "Department";
$tdatademo_user[".exportFields"][] = "HiredDate";
$tdatademo_user[".exportFields"][] = "Inactive";
$tdatademo_user[".exportFields"][] = "ExitDate";
$tdatademo_user[".exportFields"][] = "Status";
$tdatademo_user[".exportFields"][] = "Position";
$tdatademo_user[".exportFields"][] = "Superior";
$tdatademo_user[".exportFields"][] = "Superior2";
$tdatademo_user[".exportFields"][] = "Mobile";
$tdatademo_user[".exportFields"][] = "Address";
$tdatademo_user[".exportFields"][] = "Birthday";
$tdatademo_user[".exportFields"][] = "Email";
$tdatademo_user[".exportFields"][] = "SSSNo";
$tdatademo_user[".exportFields"][] = "PagIbigNo";
$tdatademo_user[".exportFields"][] = "PhilHealthNo";
$tdatademo_user[".exportFields"][] = "TIN";
$tdatademo_user[".exportFields"][] = "Bank";
$tdatademo_user[".exportFields"][] = "AccountNo";
$tdatademo_user[".exportFields"][] = "AllowableSickLeave";
$tdatademo_user[".exportFields"][] = "AllowableVacationLeave";
$tdatademo_user[".exportFields"][] = "AllowableEmergencyLeave";
$tdatademo_user[".exportFields"][] = "AllowablePaternityLeave";
$tdatademo_user[".exportFields"][] = "EmployeeType";
$tdatademo_user[".exportFields"][] = "Level";
$tdatademo_user[".exportFields"][] = "DoNotUpdateContributions";
$tdatademo_user[".exportFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user[".exportFields"][] = "SSSEE";
$tdatademo_user[".exportFields"][] = "SSSER";
$tdatademo_user[".exportFields"][] = "SSSEC";
$tdatademo_user[".exportFields"][] = "PhilHealthEE";
$tdatademo_user[".exportFields"][] = "PhilHealthER";
$tdatademo_user[".exportFields"][] = "PagIbigEE";
$tdatademo_user[".exportFields"][] = "PagIbigER";
$tdatademo_user[".exportFields"][] = "NoLateDeduction";
$tdatademo_user[".exportFields"][] = "GracePeriodMins";
$tdatademo_user[".exportFields"][] = "WithAdditionalBreaks";
$tdatademo_user[".exportFields"][] = "IncludeBreakLate";
$tdatademo_user[".exportFields"][] = "user_id";
$tdatademo_user[".exportFields"][] = "LateFixPenalty";
$tdatademo_user[".exportFields"][] = "DateCreated";
$tdatademo_user[".exportFields"][] = "Preparedby";
$tdatademo_user[".exportFields"][] = "Checked";
$tdatademo_user[".exportFields"][] = "Checkedby";
$tdatademo_user[".exportFields"][] = "CheckedDate";
$tdatademo_user[".exportFields"][] = "Approved";
$tdatademo_user[".exportFields"][] = "Approvedby";
$tdatademo_user[".exportFields"][] = "ApprovedDate";

$tdatademo_user[".importFields"] = array();
$tdatademo_user[".importFields"][] = "user_id";
$tdatademo_user[".importFields"][] = "user_name";
$tdatademo_user[".importFields"][] = "Photo";
$tdatademo_user[".importFields"][] = "SSSNo";
$tdatademo_user[".importFields"][] = "TIN";
$tdatademo_user[".importFields"][] = "Mobile";
$tdatademo_user[".importFields"][] = "Address";
$tdatademo_user[".importFields"][] = "Email";
$tdatademo_user[".importFields"][] = "EmployeeType";
$tdatademo_user[".importFields"][] = "EmployeeID";
$tdatademo_user[".importFields"][] = "Division";
$tdatademo_user[".importFields"][] = "Status";
$tdatademo_user[".importFields"][] = "Department";
$tdatademo_user[".importFields"][] = "AllowableSickLeave";
$tdatademo_user[".importFields"][] = "AllowableVacationLeave";
$tdatademo_user[".importFields"][] = "AllowableEmergencyLeave";
$tdatademo_user[".importFields"][] = "SSSEE";
$tdatademo_user[".importFields"][] = "SSSER";
$tdatademo_user[".importFields"][] = "PhilHealthEE";
$tdatademo_user[".importFields"][] = "PhilHealthER";
$tdatademo_user[".importFields"][] = "PagIbigEE";
$tdatademo_user[".importFields"][] = "AllowablePaternityLeave";
$tdatademo_user[".importFields"][] = "HiredDate";
$tdatademo_user[".importFields"][] = "Inactive";
$tdatademo_user[".importFields"][] = "ExitDate";
$tdatademo_user[".importFields"][] = "PagIbigER";
$tdatademo_user[".importFields"][] = "PagIbigNo";
$tdatademo_user[".importFields"][] = "PhilHealthNo";
$tdatademo_user[".importFields"][] = "SSSEC";
$tdatademo_user[".importFields"][] = "Level";
$tdatademo_user[".importFields"][] = "DateCreated";
$tdatademo_user[".importFields"][] = "ApprovedDate";
$tdatademo_user[".importFields"][] = "Approved";
$tdatademo_user[".importFields"][] = "Approvedby";
$tdatademo_user[".importFields"][] = "Preparedby";
$tdatademo_user[".importFields"][] = "Checkedby";
$tdatademo_user[".importFields"][] = "CheckedDate";
$tdatademo_user[".importFields"][] = "Checked";
$tdatademo_user[".importFields"][] = "Superior";
$tdatademo_user[".importFields"][] = "Position";
$tdatademo_user[".importFields"][] = "Employer";
$tdatademo_user[".importFields"][] = "IDNo";
$tdatademo_user[".importFields"][] = "AccountNo";
$tdatademo_user[".importFields"][] = "LateFixPenalty";
$tdatademo_user[".importFields"][] = "DoNotUpdateContributions";
$tdatademo_user[".importFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user[".importFields"][] = "Birthday";
$tdatademo_user[".importFields"][] = "Bank";
$tdatademo_user[".importFields"][] = "NoLateDeduction";
$tdatademo_user[".importFields"][] = "IncludeBreakLate";
$tdatademo_user[".importFields"][] = "GracePeriodMins";
$tdatademo_user[".importFields"][] = "WithAdditionalBreaks";
$tdatademo_user[".importFields"][] = "Superior2";

$tdatademo_user[".printFields"] = array();
$tdatademo_user[".printFields"][] = "EmployeeID";
$tdatademo_user[".printFields"][] = "IDNo";
$tdatademo_user[".printFields"][] = "Photo";
$tdatademo_user[".printFields"][] = "user_name";
$tdatademo_user[".printFields"][] = "Employer";
$tdatademo_user[".printFields"][] = "Division";
$tdatademo_user[".printFields"][] = "Department";
$tdatademo_user[".printFields"][] = "HiredDate";
$tdatademo_user[".printFields"][] = "Inactive";
$tdatademo_user[".printFields"][] = "ExitDate";
$tdatademo_user[".printFields"][] = "Status";
$tdatademo_user[".printFields"][] = "Position";
$tdatademo_user[".printFields"][] = "Superior";
$tdatademo_user[".printFields"][] = "Superior2";
$tdatademo_user[".printFields"][] = "Mobile";
$tdatademo_user[".printFields"][] = "Address";
$tdatademo_user[".printFields"][] = "Birthday";
$tdatademo_user[".printFields"][] = "Email";
$tdatademo_user[".printFields"][] = "SSSNo";
$tdatademo_user[".printFields"][] = "PagIbigNo";
$tdatademo_user[".printFields"][] = "PhilHealthNo";
$tdatademo_user[".printFields"][] = "TIN";
$tdatademo_user[".printFields"][] = "Bank";
$tdatademo_user[".printFields"][] = "AccountNo";
$tdatademo_user[".printFields"][] = "AllowableSickLeave";
$tdatademo_user[".printFields"][] = "AllowableVacationLeave";
$tdatademo_user[".printFields"][] = "AllowableEmergencyLeave";
$tdatademo_user[".printFields"][] = "AllowablePaternityLeave";
$tdatademo_user[".printFields"][] = "EmployeeType";
$tdatademo_user[".printFields"][] = "Level";
$tdatademo_user[".printFields"][] = "DoNotUpdateContributions";
$tdatademo_user[".printFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user[".printFields"][] = "SSSEE";
$tdatademo_user[".printFields"][] = "SSSER";
$tdatademo_user[".printFields"][] = "SSSEC";
$tdatademo_user[".printFields"][] = "PhilHealthEE";
$tdatademo_user[".printFields"][] = "PhilHealthER";
$tdatademo_user[".printFields"][] = "PagIbigEE";
$tdatademo_user[".printFields"][] = "PagIbigER";
$tdatademo_user[".printFields"][] = "NoLateDeduction";
$tdatademo_user[".printFields"][] = "GracePeriodMins";
$tdatademo_user[".printFields"][] = "WithAdditionalBreaks";
$tdatademo_user[".printFields"][] = "IncludeBreakLate";
$tdatademo_user[".printFields"][] = "user_id";
$tdatademo_user[".printFields"][] = "LateFixPenalty";
$tdatademo_user[".printFields"][] = "DateCreated";
$tdatademo_user[".printFields"][] = "Preparedby";
$tdatademo_user[".printFields"][] = "Checked";
$tdatademo_user[".printFields"][] = "Checkedby";
$tdatademo_user[".printFields"][] = "CheckedDate";
$tdatademo_user[".printFields"][] = "Approved";
$tdatademo_user[".printFields"][] = "Approvedby";
$tdatademo_user[".printFields"][] = "ApprovedDate";


//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","user_id");
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




	$tdatademo_user["user_id"] = $fdata;
//	user_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_name";
	$fdata["GoodName"] = "user_name";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","user_name");
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




	$tdatademo_user["user_name"] = $fdata;
//	Photo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Photo";
	$fdata["GoodName"] = "Photo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","Photo");
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




	$tdatademo_user["Photo"] = $fdata;
//	SSSNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SSSNo";
	$fdata["GoodName"] = "SSSNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","SSSNo");
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




	$tdatademo_user["SSSNo"] = $fdata;
//	TIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TIN";
	$fdata["GoodName"] = "TIN";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","TIN");
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




	$tdatademo_user["TIN"] = $fdata;
//	Mobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Mobile";
	$fdata["GoodName"] = "Mobile";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","Mobile");
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




	$tdatademo_user["Mobile"] = $fdata;
//	Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Address";
	$fdata["GoodName"] = "Address";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","Address");
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




	$tdatademo_user["Address"] = $fdata;
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","Email");
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




	$tdatademo_user["Email"] = $fdata;
//	EmployeeType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "EmployeeType";
	$fdata["GoodName"] = "EmployeeType";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","EmployeeType");
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




	$tdatademo_user["EmployeeType"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","EmployeeID");
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




	$tdatademo_user["EmployeeID"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","Division");
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




	$tdatademo_user["Division"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","Status");
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




	$tdatademo_user["Status"] = $fdata;
//	Department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Department";
	$fdata["GoodName"] = "Department";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","Department");
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




	$tdatademo_user["Department"] = $fdata;
//	AllowableSickLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "AllowableSickLeave";
	$fdata["GoodName"] = "AllowableSickLeave";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","AllowableSickLeave");
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




	$tdatademo_user["AllowableSickLeave"] = $fdata;
//	AllowableVacationLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "AllowableVacationLeave";
	$fdata["GoodName"] = "AllowableVacationLeave";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","AllowableVacationLeave");
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




	$tdatademo_user["AllowableVacationLeave"] = $fdata;
//	AllowableEmergencyLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "AllowableEmergencyLeave";
	$fdata["GoodName"] = "AllowableEmergencyLeave";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","AllowableEmergencyLeave");
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




	$tdatademo_user["AllowableEmergencyLeave"] = $fdata;
//	SSSEE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "SSSEE";
	$fdata["GoodName"] = "SSSEE";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","SSSEE");
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




	$tdatademo_user["SSSEE"] = $fdata;
//	SSSER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "SSSER";
	$fdata["GoodName"] = "SSSER";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","SSSER");
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




	$tdatademo_user["SSSER"] = $fdata;
//	PhilHealthEE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "PhilHealthEE";
	$fdata["GoodName"] = "PhilHealthEE";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","PhilHealthEE");
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




	$tdatademo_user["PhilHealthEE"] = $fdata;
//	PhilHealthER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "PhilHealthER";
	$fdata["GoodName"] = "PhilHealthER";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","PhilHealthER");
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




	$tdatademo_user["PhilHealthER"] = $fdata;
//	PagIbigEE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "PagIbigEE";
	$fdata["GoodName"] = "PagIbigEE";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","PagIbigEE");
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




	$tdatademo_user["PagIbigEE"] = $fdata;
//	AllowablePaternityLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "AllowablePaternityLeave";
	$fdata["GoodName"] = "AllowablePaternityLeave";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","AllowablePaternityLeave");
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




	$tdatademo_user["AllowablePaternityLeave"] = $fdata;
//	HiredDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "HiredDate";
	$fdata["GoodName"] = "HiredDate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","HiredDate");
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




	$tdatademo_user["HiredDate"] = $fdata;
//	Inactive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Inactive";
	$fdata["GoodName"] = "Inactive";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","Inactive");
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




	$tdatademo_user["Inactive"] = $fdata;
//	ExitDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "ExitDate";
	$fdata["GoodName"] = "ExitDate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","ExitDate");
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
	$edata["InitialYearFactor"] = 10;
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




	$tdatademo_user["ExitDate"] = $fdata;
//	PagIbigER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "PagIbigER";
	$fdata["GoodName"] = "PagIbigER";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","PagIbigER");
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




	$tdatademo_user["PagIbigER"] = $fdata;
//	PagIbigNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "PagIbigNo";
	$fdata["GoodName"] = "PagIbigNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","PagIbigNo");
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




	$tdatademo_user["PagIbigNo"] = $fdata;
//	PhilHealthNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "PhilHealthNo";
	$fdata["GoodName"] = "PhilHealthNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","PhilHealthNo");
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




	$tdatademo_user["PhilHealthNo"] = $fdata;
//	SSSEC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "SSSEC";
	$fdata["GoodName"] = "SSSEC";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","SSSEC");
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




	$tdatademo_user["SSSEC"] = $fdata;
//	Level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Level";
	$fdata["GoodName"] = "Level";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","Level");
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




	$tdatademo_user["Level"] = $fdata;
//	DateCreated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "DateCreated";
	$fdata["GoodName"] = "DateCreated";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","DateCreated");
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




	$tdatademo_user["DateCreated"] = $fdata;
//	ApprovedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "ApprovedDate";
	$fdata["GoodName"] = "ApprovedDate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","ApprovedDate");
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




	$tdatademo_user["ApprovedDate"] = $fdata;
//	Approved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Approved";
	$fdata["GoodName"] = "Approved";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","Approved");
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




	$tdatademo_user["Approved"] = $fdata;
//	Approvedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Approvedby";
	$fdata["GoodName"] = "Approvedby";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","Approvedby");
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




	$tdatademo_user["Approvedby"] = $fdata;
//	Preparedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Preparedby";
	$fdata["GoodName"] = "Preparedby";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","Preparedby");
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




	$tdatademo_user["Preparedby"] = $fdata;
//	Checkedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Checkedby";
	$fdata["GoodName"] = "Checkedby";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","Checkedby");
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




	$tdatademo_user["Checkedby"] = $fdata;
//	CheckedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "CheckedDate";
	$fdata["GoodName"] = "CheckedDate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","CheckedDate");
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




	$tdatademo_user["CheckedDate"] = $fdata;
//	Checked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Checked";
	$fdata["GoodName"] = "Checked";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","Checked");
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




	$tdatademo_user["Checked"] = $fdata;
//	Superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Superior";
	$fdata["GoodName"] = "Superior";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","Superior");
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




	$tdatademo_user["Superior"] = $fdata;
//	Position
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Position";
	$fdata["GoodName"] = "Position";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","Position");
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




	$tdatademo_user["Position"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","Employer");
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




	$tdatademo_user["Employer"] = $fdata;
//	IDNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "IDNo";
	$fdata["GoodName"] = "IDNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","IDNo");
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




	$tdatademo_user["IDNo"] = $fdata;
//	AccountNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "AccountNo";
	$fdata["GoodName"] = "AccountNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","AccountNo");
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




	$tdatademo_user["AccountNo"] = $fdata;
//	LateFixPenalty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "LateFixPenalty";
	$fdata["GoodName"] = "LateFixPenalty";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","LateFixPenalty");
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




	$tdatademo_user["LateFixPenalty"] = $fdata;
//	DoNotUpdateContributions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "DoNotUpdateContributions";
	$fdata["GoodName"] = "DoNotUpdateContributions";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","DoNotUpdateContributions");
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




	$tdatademo_user["DoNotUpdateContributions"] = $fdata;
//	ExcludeContributionOnPayroll
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "ExcludeContributionOnPayroll";
	$fdata["GoodName"] = "ExcludeContributionOnPayroll";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","ExcludeContributionOnPayroll");
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




	$tdatademo_user["ExcludeContributionOnPayroll"] = $fdata;
//	Birthday
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "Birthday";
	$fdata["GoodName"] = "Birthday";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","Birthday");
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




	$tdatademo_user["Birthday"] = $fdata;
//	Bank
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "Bank";
	$fdata["GoodName"] = "Bank";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","Bank");
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




	$tdatademo_user["Bank"] = $fdata;
//	NoLateDeduction
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "NoLateDeduction";
	$fdata["GoodName"] = "NoLateDeduction";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","NoLateDeduction");
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




	$tdatademo_user["NoLateDeduction"] = $fdata;
//	IncludeBreakLate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "IncludeBreakLate";
	$fdata["GoodName"] = "IncludeBreakLate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","IncludeBreakLate");
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




	$tdatademo_user["IncludeBreakLate"] = $fdata;
//	GracePeriodMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "GracePeriodMins";
	$fdata["GoodName"] = "GracePeriodMins";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","GracePeriodMins");
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




	$tdatademo_user["GracePeriodMins"] = $fdata;
//	WithAdditionalBreaks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "WithAdditionalBreaks";
	$fdata["GoodName"] = "WithAdditionalBreaks";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","WithAdditionalBreaks");
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




	$tdatademo_user["WithAdditionalBreaks"] = $fdata;
//	Superior2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "Superior2";
	$fdata["GoodName"] = "Superior2";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user","Superior2");
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




	$tdatademo_user["Superior2"] = $fdata;


$tables_data["demo_user"]=&$tdatademo_user;
$field_labels["demo_user"] = &$fieldLabelsdemo_user;
$fieldToolTips["demo_user"] = &$fieldToolTipsdemo_user;
$placeHolders["demo_user"] = &$placeHoldersdemo_user;
$page_titles["demo_user"] = &$pageTitlesdemo_user;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["demo_user"] = array();
//	indschedrange
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="indschedrange";
		$detailsParam["dOriginalTable"] = "indschedrange";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "indschedrange";
	$detailsParam["dCaptionTable"] = GetTableCaption("indschedrange");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["demo_user"][$dIndex] = $detailsParam;

	
		$detailsTablesData["demo_user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["demo_user"][$dIndex]["masterKeys"][]="EmployeeID";

				$detailsTablesData["demo_user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["demo_user"][$dIndex]["detailKeys"][]="EmployeeID";
//	empindschedule
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="empindschedule";
		$detailsParam["dOriginalTable"] = "indschedule";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "empindschedule";
	$detailsParam["dCaptionTable"] = GetTableCaption("empindschedule");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["demo_user"][$dIndex] = $detailsParam;

	
		$detailsTablesData["demo_user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["demo_user"][$dIndex]["masterKeys"][]="EmployeeID";

				$detailsTablesData["demo_user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["demo_user"][$dIndex]["detailKeys"][]="EmployeeID";
//	loans
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="loans";
		$detailsParam["dOriginalTable"] = "loans";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "loans";
	$detailsParam["dCaptionTable"] = GetTableCaption("loans");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["demo_user"][$dIndex] = $detailsParam;

	
		$detailsTablesData["demo_user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["demo_user"][$dIndex]["masterKeys"][]="EmployeeID";

				$detailsTablesData["demo_user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["demo_user"][$dIndex]["detailKeys"][]="EmployeeID";
//	earningadjustment
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="earningadjustment";
		$detailsParam["dOriginalTable"] = "earningadjustment";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "earningadjustment";
	$detailsParam["dCaptionTable"] = GetTableCaption("earningadjustment");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["demo_user"][$dIndex] = $detailsParam;

	
		$detailsTablesData["demo_user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["demo_user"][$dIndex]["masterKeys"][]="EmployeeID";

				$detailsTablesData["demo_user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["demo_user"][$dIndex]["detailKeys"][]="EmployeeID";
//	emphistory
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="emphistory";
		$detailsParam["dOriginalTable"] = "emphistory";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "emphistory";
	$detailsParam["dCaptionTable"] = GetTableCaption("emphistory");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["demo_user"][$dIndex] = $detailsParam;

	
		$detailsTablesData["demo_user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["demo_user"][$dIndex]["masterKeys"][]="EmployeeID";

				$detailsTablesData["demo_user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["demo_user"][$dIndex]["detailKeys"][]="EmployeeiD";
//	thirtax
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="thirtax";
		$detailsParam["dOriginalTable"] = "thirtax";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "thirtax";
	$detailsParam["dCaptionTable"] = GetTableCaption("thirtax");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["demo_user"][$dIndex] = $detailsParam;

	
		$detailsTablesData["demo_user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["demo_user"][$dIndex]["masterKeys"][]="EmployeeID";

				$detailsTablesData["demo_user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["demo_user"][$dIndex]["detailKeys"][]="EmployeeID";
//	thirtaxsum
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="thirtaxsum";
		$detailsParam["dOriginalTable"] = "thirtaxsum";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "thirtaxsum";
	$detailsParam["dCaptionTable"] = GetTableCaption("thirtaxsum");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["demo_user"][$dIndex] = $detailsParam;

	
		$detailsTablesData["demo_user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["demo_user"][$dIndex]["masterKeys"][]="EmployeeID";

				$detailsTablesData["demo_user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["demo_user"][$dIndex]["detailKeys"][]="EmployeeID";

// tables which are master tables for current table (detail)
$masterTablesData["demo_user"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_demo_user()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "user_id,  user_name,  Photo,  SSSNo,  TIN,  Mobile,  Address,  Email,  EmployeeType,  EmployeeID,  Division,  Status,  Department,  AllowableSickLeave,  AllowableVacationLeave,  AllowableEmergencyLeave,  SSSEE,  SSSER,  PhilHealthEE,  PhilHealthER,  PagIbigEE,  AllowablePaternityLeave,  HiredDate,  Inactive,  ExitDate,  PagIbigER,  PagIbigNo,  PhilHealthNo,  SSSEC,  `Level`,  DateCreated,  ApprovedDate,  Approved,  Approvedby,  Preparedby,  Checkedby,  CheckedDate,  Checked,  Superior,  `Position`,  Employer,  IDNo,  AccountNo,  LateFixPenalty,  DoNotUpdateContributions,  ExcludeContributionOnPayroll,  Birthday,  Bank,  NoLateDeduction,  IncludeBreakLate,  GracePeriodMins,  WithAdditionalBreaks,  Superior2";
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
	"m_srcTableName" => "demo_user"
));

$proto6["m_sql"] = "user_id";
$proto6["m_srcTableName"] = "demo_user";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto8["m_sql"] = "user_name";
$proto8["m_srcTableName"] = "demo_user";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Photo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto10["m_sql"] = "Photo";
$proto10["m_srcTableName"] = "demo_user";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto12["m_sql"] = "SSSNo";
$proto12["m_srcTableName"] = "demo_user";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TIN",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto14["m_sql"] = "TIN";
$proto14["m_srcTableName"] = "demo_user";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Mobile",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto16["m_sql"] = "Mobile";
$proto16["m_srcTableName"] = "demo_user";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Address",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto18["m_sql"] = "Address";
$proto18["m_srcTableName"] = "demo_user";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto20["m_sql"] = "Email";
$proto20["m_srcTableName"] = "demo_user";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeType",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto22["m_sql"] = "EmployeeType";
$proto22["m_srcTableName"] = "demo_user";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto24["m_sql"] = "EmployeeID";
$proto24["m_srcTableName"] = "demo_user";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto26["m_sql"] = "Division";
$proto26["m_srcTableName"] = "demo_user";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto28["m_sql"] = "Status";
$proto28["m_srcTableName"] = "demo_user";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto30["m_sql"] = "Department";
$proto30["m_srcTableName"] = "demo_user";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableSickLeave",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto32["m_sql"] = "AllowableSickLeave";
$proto32["m_srcTableName"] = "demo_user";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableVacationLeave",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto34["m_sql"] = "AllowableVacationLeave";
$proto34["m_srcTableName"] = "demo_user";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableEmergencyLeave",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto36["m_sql"] = "AllowableEmergencyLeave";
$proto36["m_srcTableName"] = "demo_user";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSEE",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto38["m_sql"] = "SSSEE";
$proto38["m_srcTableName"] = "demo_user";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSER",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto40["m_sql"] = "SSSER";
$proto40["m_srcTableName"] = "demo_user";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "PhilHealthEE",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto42["m_sql"] = "PhilHealthEE";
$proto42["m_srcTableName"] = "demo_user";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "PhilHealthER",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto44["m_sql"] = "PhilHealthER";
$proto44["m_srcTableName"] = "demo_user";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbigEE",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto46["m_sql"] = "PagIbigEE";
$proto46["m_srcTableName"] = "demo_user";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowablePaternityLeave",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto48["m_sql"] = "AllowablePaternityLeave";
$proto48["m_srcTableName"] = "demo_user";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "HiredDate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto50["m_sql"] = "HiredDate";
$proto50["m_srcTableName"] = "demo_user";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Inactive",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto52["m_sql"] = "Inactive";
$proto52["m_srcTableName"] = "demo_user";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "ExitDate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto54["m_sql"] = "ExitDate";
$proto54["m_srcTableName"] = "demo_user";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbigER",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto56["m_sql"] = "PagIbigER";
$proto56["m_srcTableName"] = "demo_user";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbigNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto58["m_sql"] = "PagIbigNo";
$proto58["m_srcTableName"] = "demo_user";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "PhilHealthNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto60["m_sql"] = "PhilHealthNo";
$proto60["m_srcTableName"] = "demo_user";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSEC",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto62["m_sql"] = "SSSEC";
$proto62["m_srcTableName"] = "demo_user";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Level",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto64["m_sql"] = "`Level`";
$proto64["m_srcTableName"] = "demo_user";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "DateCreated",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto66["m_sql"] = "DateCreated";
$proto66["m_srcTableName"] = "demo_user";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedDate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto68["m_sql"] = "ApprovedDate";
$proto68["m_srcTableName"] = "demo_user";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "Approved",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto70["m_sql"] = "Approved";
$proto70["m_srcTableName"] = "demo_user";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Approvedby",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto72["m_sql"] = "Approvedby";
$proto72["m_srcTableName"] = "demo_user";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Preparedby",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto74["m_sql"] = "Preparedby";
$proto74["m_srcTableName"] = "demo_user";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Checkedby",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto76["m_sql"] = "Checkedby";
$proto76["m_srcTableName"] = "demo_user";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "CheckedDate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto78["m_sql"] = "CheckedDate";
$proto78["m_srcTableName"] = "demo_user";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "Checked",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto80["m_sql"] = "Checked";
$proto80["m_srcTableName"] = "demo_user";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto82["m_sql"] = "Superior";
$proto82["m_srcTableName"] = "demo_user";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Position",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto84["m_sql"] = "`Position`";
$proto84["m_srcTableName"] = "demo_user";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto86["m_sql"] = "Employer";
$proto86["m_srcTableName"] = "demo_user";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "IDNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto88["m_sql"] = "IDNo";
$proto88["m_srcTableName"] = "demo_user";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto90["m_sql"] = "AccountNo";
$proto90["m_srcTableName"] = "demo_user";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "LateFixPenalty",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto92["m_sql"] = "LateFixPenalty";
$proto92["m_srcTableName"] = "demo_user";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "DoNotUpdateContributions",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto94["m_sql"] = "DoNotUpdateContributions";
$proto94["m_srcTableName"] = "demo_user";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "ExcludeContributionOnPayroll",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto96["m_sql"] = "ExcludeContributionOnPayroll";
$proto96["m_srcTableName"] = "demo_user";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "Birthday",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto98["m_sql"] = "Birthday";
$proto98["m_srcTableName"] = "demo_user";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "Bank",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto100["m_sql"] = "Bank";
$proto100["m_srcTableName"] = "demo_user";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "NoLateDeduction",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto102["m_sql"] = "NoLateDeduction";
$proto102["m_srcTableName"] = "demo_user";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "IncludeBreakLate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto104["m_sql"] = "IncludeBreakLate";
$proto104["m_srcTableName"] = "demo_user";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "GracePeriodMins",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto106["m_sql"] = "GracePeriodMins";
$proto106["m_srcTableName"] = "demo_user";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "WithAdditionalBreaks",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto108["m_sql"] = "WithAdditionalBreaks";
$proto108["m_srcTableName"] = "demo_user";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior2",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto110["m_sql"] = "Superior2";
$proto110["m_srcTableName"] = "demo_user";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto112=array();
$proto112["m_link"] = "SQLL_MAIN";
			$proto113=array();
$proto113["m_strName"] = "demo_user";
$proto113["m_srcTableName"] = "demo_user";
$proto113["m_columns"] = array();
$proto113["m_columns"][] = "user_id";
$proto113["m_columns"][] = "user_name";
$proto113["m_columns"][] = "Photo";
$proto113["m_columns"][] = "user_photo";
$proto113["m_columns"][] = "SSSNo";
$proto113["m_columns"][] = "TIN";
$proto113["m_columns"][] = "Mobile";
$proto113["m_columns"][] = "Address";
$proto113["m_columns"][] = "Email";
$proto113["m_columns"][] = "EmployeeType";
$proto113["m_columns"][] = "BasicMonthlyPay";
$proto113["m_columns"][] = "BasicDailyPay";
$proto113["m_columns"][] = "EmployeeID";
$proto113["m_columns"][] = "Division";
$proto113["m_columns"][] = "Status";
$proto113["m_columns"][] = "Department";
$proto113["m_columns"][] = "AllowableSickLeave";
$proto113["m_columns"][] = "AllowableVacationLeave";
$proto113["m_columns"][] = "AllowableEmergencyLeave";
$proto113["m_columns"][] = "SSSEE";
$proto113["m_columns"][] = "SSSER";
$proto113["m_columns"][] = "PhilHealthEE";
$proto113["m_columns"][] = "PhilHealthER";
$proto113["m_columns"][] = "PagIbigEE";
$proto113["m_columns"][] = "AllowablePaternityLeave";
$proto113["m_columns"][] = "HiredDate";
$proto113["m_columns"][] = "Inactive";
$proto113["m_columns"][] = "ExitDate";
$proto113["m_columns"][] = "PagIbigER";
$proto113["m_columns"][] = "PagIbigNo";
$proto113["m_columns"][] = "PhilHealthNo";
$proto113["m_columns"][] = "SSSEC";
$proto113["m_columns"][] = "Filex";
$proto113["m_columns"][] = "PresetTax";
$proto113["m_columns"][] = "AgentSharePerDay";
$proto113["m_columns"][] = "AllowancePerDay";
$proto113["m_columns"][] = "DeMinimis";
$proto113["m_columns"][] = "Level";
$proto113["m_columns"][] = "DateCreated";
$proto113["m_columns"][] = "ApprovedDate";
$proto113["m_columns"][] = "Approved";
$proto113["m_columns"][] = "Approvedby";
$proto113["m_columns"][] = "Preparedby";
$proto113["m_columns"][] = "Checkedby";
$proto113["m_columns"][] = "CheckedDate";
$proto113["m_columns"][] = "Checked";
$proto113["m_columns"][] = "AdjustedMonthlyPay";
$proto113["m_columns"][] = "AdjustedDailyPay";
$proto113["m_columns"][] = "Superior";
$proto113["m_columns"][] = "Position";
$proto113["m_columns"][] = "Employer";
$proto113["m_columns"][] = "IDNo";
$proto113["m_columns"][] = "AccountNo";
$proto113["m_columns"][] = "LogID";
$proto113["m_columns"][] = "LateFixPenalty";
$proto113["m_columns"][] = "DoNotUpdateContributions";
$proto113["m_columns"][] = "ExcludeContributionOnPayroll";
$proto113["m_columns"][] = "Birthday";
$proto113["m_columns"][] = "Bank";
$proto113["m_columns"][] = "NoLateDeduction";
$proto113["m_columns"][] = "IncludeBreakLate";
$proto113["m_columns"][] = "GracePeriodMins";
$proto113["m_columns"][] = "WithAdditionalBreaks";
$proto113["m_columns"][] = "TaxPeriods";
$proto113["m_columns"][] = "PresetMoNonTax";
$proto113["m_columns"][] = "PreCalMoTaxable";
$proto113["m_columns"][] = "CalMonthly";
$proto113["m_columns"][] = "TaxPerPeriod";
$proto113["m_columns"][] = "Superior2";
$proto113["m_columns"][] = "ExcludeBio";
$obj = new SQLTable($proto113);

$proto112["m_table"] = $obj;
$proto112["m_sql"] = "demo_user";
$proto112["m_alias"] = "";
$proto112["m_srcTableName"] = "demo_user";
$proto114=array();
$proto114["m_sql"] = "";
$proto114["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto114["m_column"]=$obj;
$proto114["m_contained"] = array();
$proto114["m_strCase"] = "";
$proto114["m_havingmode"] = false;
$proto114["m_inBrackets"] = false;
$proto114["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto114);

$proto112["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto112);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto116=array();
						$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user"
));

$proto116["m_column"]=$obj;
$proto116["m_bAsc"] = 1;
$proto116["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto116);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="demo_user";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_demo_user = createSqlQuery_demo_user();


	
		;

																																																					

$tdatademo_user[".sqlquery"] = $queryData_demo_user;

include_once(getabspath("include/demo_user_events.php"));
$tableEvents["demo_user"] = new eventclass_demo_user;
$tdatademo_user[".hasEvents"] = true;

?>