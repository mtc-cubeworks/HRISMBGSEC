<?php
require_once(getabspath("classes/cipherer.php"));




$tdatademo_user2 = array();
	$tdatademo_user2[".truncateText"] = true;
	$tdatademo_user2[".NumberOfChars"] = 80;
	$tdatademo_user2[".ShortName"] = "demo_user2";
	$tdatademo_user2[".OwnerID"] = "";
	$tdatademo_user2[".OriginalTable"] = "demo_user";

//	field labels
$fieldLabelsdemo_user2 = array();
$fieldToolTipsdemo_user2 = array();
$pageTitlesdemo_user2 = array();
$placeHoldersdemo_user2 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdemo_user2["English"] = array();
	$fieldToolTipsdemo_user2["English"] = array();
	$placeHoldersdemo_user2["English"] = array();
	$pageTitlesdemo_user2["English"] = array();
	$fieldLabelsdemo_user2["English"]["user_id"] = "User Id";
	$fieldToolTipsdemo_user2["English"]["user_id"] = "";
	$placeHoldersdemo_user2["English"]["user_id"] = "";
	$fieldLabelsdemo_user2["English"]["user_name"] = "Employee";
	$fieldToolTipsdemo_user2["English"]["user_name"] = "";
	$placeHoldersdemo_user2["English"]["user_name"] = "";
	$fieldLabelsdemo_user2["English"]["Photo"] = "Photo";
	$fieldToolTipsdemo_user2["English"]["Photo"] = "";
	$placeHoldersdemo_user2["English"]["Photo"] = "";
	$fieldLabelsdemo_user2["English"]["EmployeeType"] = "Wage Type";
	$fieldToolTipsdemo_user2["English"]["EmployeeType"] = "";
	$placeHoldersdemo_user2["English"]["EmployeeType"] = "";
	$fieldLabelsdemo_user2["English"]["SSSNo"] = "SSS No";
	$fieldToolTipsdemo_user2["English"]["SSSNo"] = "";
	$placeHoldersdemo_user2["English"]["SSSNo"] = "";
	$fieldLabelsdemo_user2["English"]["TIN"] = "TIN";
	$fieldToolTipsdemo_user2["English"]["TIN"] = "";
	$placeHoldersdemo_user2["English"]["TIN"] = "";
	$fieldLabelsdemo_user2["English"]["Mobile"] = "Mobile";
	$fieldToolTipsdemo_user2["English"]["Mobile"] = "";
	$placeHoldersdemo_user2["English"]["Mobile"] = "";
	$fieldLabelsdemo_user2["English"]["Address"] = "Address";
	$fieldToolTipsdemo_user2["English"]["Address"] = "";
	$placeHoldersdemo_user2["English"]["Address"] = "";
	$fieldLabelsdemo_user2["English"]["Email"] = "Email";
	$fieldToolTipsdemo_user2["English"]["Email"] = "";
	$placeHoldersdemo_user2["English"]["Email"] = "";
	$fieldLabelsdemo_user2["English"]["EmployeeID"] = "Biometric ID";
	$fieldToolTipsdemo_user2["English"]["EmployeeID"] = "";
	$placeHoldersdemo_user2["English"]["EmployeeID"] = "";
	$fieldLabelsdemo_user2["English"]["Division"] = "Division";
	$fieldToolTipsdemo_user2["English"]["Division"] = "";
	$placeHoldersdemo_user2["English"]["Division"] = "";
	$fieldLabelsdemo_user2["English"]["Status"] = "Status";
	$fieldToolTipsdemo_user2["English"]["Status"] = "";
	$placeHoldersdemo_user2["English"]["Status"] = "";
	$fieldLabelsdemo_user2["English"]["Department"] = "Department";
	$fieldToolTipsdemo_user2["English"]["Department"] = "";
	$placeHoldersdemo_user2["English"]["Department"] = "";
	$fieldLabelsdemo_user2["English"]["AllowableSickLeave"] = "SL";
	$fieldToolTipsdemo_user2["English"]["AllowableSickLeave"] = "";
	$placeHoldersdemo_user2["English"]["AllowableSickLeave"] = "";
	$fieldLabelsdemo_user2["English"]["AllowableVacationLeave"] = "VL";
	$fieldToolTipsdemo_user2["English"]["AllowableVacationLeave"] = "";
	$placeHoldersdemo_user2["English"]["AllowableVacationLeave"] = "";
	$fieldLabelsdemo_user2["English"]["AllowableEmergencyLeave"] = "EL";
	$fieldToolTipsdemo_user2["English"]["AllowableEmergencyLeave"] = "";
	$placeHoldersdemo_user2["English"]["AllowableEmergencyLeave"] = "";
	$fieldLabelsdemo_user2["English"]["SSSEE"] = "SSS EE";
	$fieldToolTipsdemo_user2["English"]["SSSEE"] = "";
	$placeHoldersdemo_user2["English"]["SSSEE"] = "";
	$fieldLabelsdemo_user2["English"]["SSSER"] = "SSS ER";
	$fieldToolTipsdemo_user2["English"]["SSSER"] = "";
	$placeHoldersdemo_user2["English"]["SSSER"] = "";
	$fieldLabelsdemo_user2["English"]["PhilHealthEE"] = "PHIC EE";
	$fieldToolTipsdemo_user2["English"]["PhilHealthEE"] = "";
	$placeHoldersdemo_user2["English"]["PhilHealthEE"] = "";
	$fieldLabelsdemo_user2["English"]["PhilHealthER"] = "PHIC ER";
	$fieldToolTipsdemo_user2["English"]["PhilHealthER"] = "";
	$placeHoldersdemo_user2["English"]["PhilHealthER"] = "";
	$fieldLabelsdemo_user2["English"]["AllowablePaternityLeave"] = "PL";
	$fieldToolTipsdemo_user2["English"]["AllowablePaternityLeave"] = "";
	$placeHoldersdemo_user2["English"]["AllowablePaternityLeave"] = "";
	$fieldLabelsdemo_user2["English"]["HiredDate"] = "Hired Date";
	$fieldToolTipsdemo_user2["English"]["HiredDate"] = "";
	$placeHoldersdemo_user2["English"]["HiredDate"] = "";
	$fieldLabelsdemo_user2["English"]["ExitDate"] = "Exit Date";
	$fieldToolTipsdemo_user2["English"]["ExitDate"] = "";
	$placeHoldersdemo_user2["English"]["ExitDate"] = "";
	$fieldLabelsdemo_user2["English"]["Inactive"] = "Inactive";
	$fieldToolTipsdemo_user2["English"]["Inactive"] = "";
	$placeHoldersdemo_user2["English"]["Inactive"] = "";
	$fieldLabelsdemo_user2["English"]["PagIbigEE"] = "HDMF EE";
	$fieldToolTipsdemo_user2["English"]["PagIbigEE"] = "";
	$placeHoldersdemo_user2["English"]["PagIbigEE"] = "";
	$fieldLabelsdemo_user2["English"]["PagIbigER"] = "HDMF ER";
	$fieldToolTipsdemo_user2["English"]["PagIbigER"] = "";
	$placeHoldersdemo_user2["English"]["PagIbigER"] = "";
	$fieldLabelsdemo_user2["English"]["PagIbigNo"] = "HDMF No";
	$fieldToolTipsdemo_user2["English"]["PagIbigNo"] = "";
	$placeHoldersdemo_user2["English"]["PagIbigNo"] = "";
	$fieldLabelsdemo_user2["English"]["PhilHealthNo"] = "PHIC No";
	$fieldToolTipsdemo_user2["English"]["PhilHealthNo"] = "";
	$placeHoldersdemo_user2["English"]["PhilHealthNo"] = "";
	$fieldLabelsdemo_user2["English"]["SSSEC"] = "SSS EC";
	$fieldToolTipsdemo_user2["English"]["SSSEC"] = "";
	$placeHoldersdemo_user2["English"]["SSSEC"] = "";
	$fieldLabelsdemo_user2["English"]["Level"] = "Level";
	$fieldToolTipsdemo_user2["English"]["Level"] = "";
	$placeHoldersdemo_user2["English"]["Level"] = "";
	$fieldLabelsdemo_user2["English"]["DateCreated"] = "Date Created";
	$fieldToolTipsdemo_user2["English"]["DateCreated"] = "";
	$placeHoldersdemo_user2["English"]["DateCreated"] = "";
	$fieldLabelsdemo_user2["English"]["ApprovedDate"] = "Approved Date";
	$fieldToolTipsdemo_user2["English"]["ApprovedDate"] = "";
	$placeHoldersdemo_user2["English"]["ApprovedDate"] = "";
	$fieldLabelsdemo_user2["English"]["Approved"] = "Approved";
	$fieldToolTipsdemo_user2["English"]["Approved"] = "";
	$placeHoldersdemo_user2["English"]["Approved"] = "";
	$fieldLabelsdemo_user2["English"]["Approvedby"] = "Approvedby";
	$fieldToolTipsdemo_user2["English"]["Approvedby"] = "";
	$placeHoldersdemo_user2["English"]["Approvedby"] = "";
	$fieldLabelsdemo_user2["English"]["Preparedby"] = "Preparedby";
	$fieldToolTipsdemo_user2["English"]["Preparedby"] = "";
	$placeHoldersdemo_user2["English"]["Preparedby"] = "";
	$fieldLabelsdemo_user2["English"]["Checkedby"] = "Checkedby";
	$fieldToolTipsdemo_user2["English"]["Checkedby"] = "";
	$placeHoldersdemo_user2["English"]["Checkedby"] = "";
	$fieldLabelsdemo_user2["English"]["CheckedDate"] = "Checked Date";
	$fieldToolTipsdemo_user2["English"]["CheckedDate"] = "";
	$placeHoldersdemo_user2["English"]["CheckedDate"] = "";
	$fieldLabelsdemo_user2["English"]["Checked"] = "Checked";
	$fieldToolTipsdemo_user2["English"]["Checked"] = "";
	$placeHoldersdemo_user2["English"]["Checked"] = "";
	$fieldLabelsdemo_user2["English"]["Superior"] = "Supervisor";
	$fieldToolTipsdemo_user2["English"]["Superior"] = "";
	$placeHoldersdemo_user2["English"]["Superior"] = "";
	$fieldLabelsdemo_user2["English"]["Position"] = "Position";
	$fieldToolTipsdemo_user2["English"]["Position"] = "";
	$placeHoldersdemo_user2["English"]["Position"] = "";
	$fieldLabelsdemo_user2["English"]["Employer"] = "Employer";
	$fieldToolTipsdemo_user2["English"]["Employer"] = "";
	$placeHoldersdemo_user2["English"]["Employer"] = "";
	$fieldLabelsdemo_user2["English"]["IDNo"] = "Employee ID";
	$fieldToolTipsdemo_user2["English"]["IDNo"] = "";
	$placeHoldersdemo_user2["English"]["IDNo"] = "";
	$fieldLabelsdemo_user2["English"]["AccountNo"] = "Account No";
	$fieldToolTipsdemo_user2["English"]["AccountNo"] = "";
	$placeHoldersdemo_user2["English"]["AccountNo"] = "";
	$fieldLabelsdemo_user2["English"]["LateFixPenalty"] = "Late Fix Penalty";
	$fieldToolTipsdemo_user2["English"]["LateFixPenalty"] = "";
	$placeHoldersdemo_user2["English"]["LateFixPenalty"] = "";
	$fieldLabelsdemo_user2["English"]["DoNotUpdateContributions"] = "Do Not Update Contributions";
	$fieldToolTipsdemo_user2["English"]["DoNotUpdateContributions"] = "";
	$placeHoldersdemo_user2["English"]["DoNotUpdateContributions"] = "";
	$fieldLabelsdemo_user2["English"]["ExcludeContributionOnPayroll"] = "Exclude Contribution On Payroll";
	$fieldToolTipsdemo_user2["English"]["ExcludeContributionOnPayroll"] = "";
	$placeHoldersdemo_user2["English"]["ExcludeContributionOnPayroll"] = "";
	$fieldLabelsdemo_user2["English"]["Birthday"] = "Birthday";
	$fieldToolTipsdemo_user2["English"]["Birthday"] = "";
	$placeHoldersdemo_user2["English"]["Birthday"] = "";
	$fieldLabelsdemo_user2["English"]["Bank"] = "Bank";
	$fieldToolTipsdemo_user2["English"]["Bank"] = "";
	$placeHoldersdemo_user2["English"]["Bank"] = "";
	$fieldLabelsdemo_user2["English"]["NoLateDeduction"] = "No Late Deduction";
	$fieldToolTipsdemo_user2["English"]["NoLateDeduction"] = "";
	$placeHoldersdemo_user2["English"]["NoLateDeduction"] = "";
	$fieldLabelsdemo_user2["English"]["IncludeBreakLate"] = "Include Break Late";
	$fieldToolTipsdemo_user2["English"]["IncludeBreakLate"] = "";
	$placeHoldersdemo_user2["English"]["IncludeBreakLate"] = "";
	$fieldLabelsdemo_user2["English"]["GracePeriodMins"] = "Grace Period Mins";
	$fieldToolTipsdemo_user2["English"]["GracePeriodMins"] = "";
	$placeHoldersdemo_user2["English"]["GracePeriodMins"] = "";
	$fieldLabelsdemo_user2["English"]["WithAdditionalBreaks"] = "With Additional Breaks";
	$fieldToolTipsdemo_user2["English"]["WithAdditionalBreaks"] = "";
	$placeHoldersdemo_user2["English"]["WithAdditionalBreaks"] = "";
	$fieldLabelsdemo_user2["English"]["Superior2"] = "Manager";
	$fieldToolTipsdemo_user2["English"]["Superior2"] = "";
	$placeHoldersdemo_user2["English"]["Superior2"] = "";
	if (count($fieldToolTipsdemo_user2["English"]))
		$tdatademo_user2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdemo_user2[""] = array();
	$fieldToolTipsdemo_user2[""] = array();
	$placeHoldersdemo_user2[""] = array();
	$pageTitlesdemo_user2[""] = array();
	$fieldLabelsdemo_user2[""]["Superior2"] = "Superior2";
	$fieldToolTipsdemo_user2[""]["Superior2"] = "";
	$placeHoldersdemo_user2[""]["Superior2"] = "";
	if (count($fieldToolTipsdemo_user2[""]))
		$tdatademo_user2[".isUseToolTips"] = true;
}


	$tdatademo_user2[".NCSearch"] = true;



$tdatademo_user2[".shortTableName"] = "demo_user2";
$tdatademo_user2[".nSecOptions"] = 0;
$tdatademo_user2[".recsPerRowPrint"] = 1;
$tdatademo_user2[".mainTableOwnerID"] = "";
$tdatademo_user2[".moveNext"] = 1;
$tdatademo_user2[".entityType"] = 1;

$tdatademo_user2[".strOriginalTableName"] = "demo_user";

	



$tdatademo_user2[".showAddInPopup"] = false;

$tdatademo_user2[".showEditInPopup"] = false;

$tdatademo_user2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatademo_user2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatademo_user2[".fieldsForRegister"] = array();

$tdatademo_user2[".listAjax"] = false;

	$tdatademo_user2[".audit"] = false;

	$tdatademo_user2[".locking"] = false;

$tdatademo_user2[".edit"] = true;
$tdatademo_user2[".afterEditAction"] = 1;
$tdatademo_user2[".closePopupAfterEdit"] = 1;
$tdatademo_user2[".afterEditActionDetTable"] = "";

$tdatademo_user2[".add"] = true;
$tdatademo_user2[".afterAddAction"] = 1;
$tdatademo_user2[".closePopupAfterAdd"] = 1;
$tdatademo_user2[".afterAddActionDetTable"] = "";

$tdatademo_user2[".list"] = true;

$tdatademo_user2[".inlineEdit"] = true;

$tdatademo_user2[".updateSelected"] = true;

$tdatademo_user2[".reorderRecordsByHeader"] = true;


$tdatademo_user2[".exportFormatting"] = 2;
$tdatademo_user2[".exportDelimiter"] = ",";
		
$tdatademo_user2[".inlineAdd"] = true;
$tdatademo_user2[".view"] = true;

$tdatademo_user2[".import"] = true;

$tdatademo_user2[".exportTo"] = true;

$tdatademo_user2[".printFriendly"] = true;

$tdatademo_user2[".delete"] = true;

$tdatademo_user2[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatademo_user2[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatademo_user2[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatademo_user2[".searchSaving"] = false;
//

$tdatademo_user2[".showSearchPanel"] = true;
		$tdatademo_user2[".flexibleSearch"] = true;

$tdatademo_user2[".isUseAjaxSuggest"] = true;

$tdatademo_user2[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																												
		

$tdatademo_user2[".ajaxCodeSnippetAdded"] = false;

$tdatademo_user2[".buttonsAdded"] = true;

$tdatademo_user2[".addPageEvents"] = true;

// use timepicker for search panel
$tdatademo_user2[".isUseTimeForSearch"] = false;



$tdatademo_user2[".badgeColor"] = "B22222";


$tdatademo_user2[".allSearchFields"] = array();
$tdatademo_user2[".filterFields"] = array();
$tdatademo_user2[".requiredSearchFields"] = array();

$tdatademo_user2[".allSearchFields"][] = "EmployeeID";
	$tdatademo_user2[".allSearchFields"][] = "IDNo";
	$tdatademo_user2[".allSearchFields"][] = "Photo";
	$tdatademo_user2[".allSearchFields"][] = "user_name";
	$tdatademo_user2[".allSearchFields"][] = "Employer";
	$tdatademo_user2[".allSearchFields"][] = "Division";
	$tdatademo_user2[".allSearchFields"][] = "Department";
	$tdatademo_user2[".allSearchFields"][] = "HiredDate";
	$tdatademo_user2[".allSearchFields"][] = "Inactive";
	$tdatademo_user2[".allSearchFields"][] = "ExitDate";
	$tdatademo_user2[".allSearchFields"][] = "Status";
	$tdatademo_user2[".allSearchFields"][] = "Position";
	$tdatademo_user2[".allSearchFields"][] = "Superior";
	$tdatademo_user2[".allSearchFields"][] = "Superior2";
	$tdatademo_user2[".allSearchFields"][] = "Mobile";
	$tdatademo_user2[".allSearchFields"][] = "Address";
	$tdatademo_user2[".allSearchFields"][] = "Birthday";
	$tdatademo_user2[".allSearchFields"][] = "Email";
	$tdatademo_user2[".allSearchFields"][] = "SSSNo";
	$tdatademo_user2[".allSearchFields"][] = "PagIbigNo";
	$tdatademo_user2[".allSearchFields"][] = "PhilHealthNo";
	$tdatademo_user2[".allSearchFields"][] = "TIN";
	$tdatademo_user2[".allSearchFields"][] = "Bank";
	$tdatademo_user2[".allSearchFields"][] = "AccountNo";
	$tdatademo_user2[".allSearchFields"][] = "AllowableSickLeave";
	$tdatademo_user2[".allSearchFields"][] = "AllowableVacationLeave";
	$tdatademo_user2[".allSearchFields"][] = "AllowableEmergencyLeave";
	$tdatademo_user2[".allSearchFields"][] = "AllowablePaternityLeave";
	$tdatademo_user2[".allSearchFields"][] = "EmployeeType";
	$tdatademo_user2[".allSearchFields"][] = "Level";
	$tdatademo_user2[".allSearchFields"][] = "DoNotUpdateContributions";
	$tdatademo_user2[".allSearchFields"][] = "ExcludeContributionOnPayroll";
	$tdatademo_user2[".allSearchFields"][] = "SSSEE";
	$tdatademo_user2[".allSearchFields"][] = "SSSER";
	$tdatademo_user2[".allSearchFields"][] = "SSSEC";
	$tdatademo_user2[".allSearchFields"][] = "PhilHealthEE";
	$tdatademo_user2[".allSearchFields"][] = "PhilHealthER";
	$tdatademo_user2[".allSearchFields"][] = "PagIbigEE";
	$tdatademo_user2[".allSearchFields"][] = "PagIbigER";
	$tdatademo_user2[".allSearchFields"][] = "NoLateDeduction";
	$tdatademo_user2[".allSearchFields"][] = "GracePeriodMins";
	$tdatademo_user2[".allSearchFields"][] = "WithAdditionalBreaks";
	$tdatademo_user2[".allSearchFields"][] = "IncludeBreakLate";
	$tdatademo_user2[".allSearchFields"][] = "user_id";
	$tdatademo_user2[".allSearchFields"][] = "LateFixPenalty";
	$tdatademo_user2[".allSearchFields"][] = "DateCreated";
	$tdatademo_user2[".allSearchFields"][] = "Preparedby";
	$tdatademo_user2[".allSearchFields"][] = "Checked";
	$tdatademo_user2[".allSearchFields"][] = "Checkedby";
	$tdatademo_user2[".allSearchFields"][] = "CheckedDate";
	$tdatademo_user2[".allSearchFields"][] = "Approved";
	$tdatademo_user2[".allSearchFields"][] = "Approvedby";
	$tdatademo_user2[".allSearchFields"][] = "ApprovedDate";
	

$tdatademo_user2[".googleLikeFields"] = array();
$tdatademo_user2[".googleLikeFields"][] = "user_id";
$tdatademo_user2[".googleLikeFields"][] = "user_name";
$tdatademo_user2[".googleLikeFields"][] = "Photo";
$tdatademo_user2[".googleLikeFields"][] = "SSSNo";
$tdatademo_user2[".googleLikeFields"][] = "TIN";
$tdatademo_user2[".googleLikeFields"][] = "Mobile";
$tdatademo_user2[".googleLikeFields"][] = "Address";
$tdatademo_user2[".googleLikeFields"][] = "Email";
$tdatademo_user2[".googleLikeFields"][] = "EmployeeType";
$tdatademo_user2[".googleLikeFields"][] = "EmployeeID";
$tdatademo_user2[".googleLikeFields"][] = "Division";
$tdatademo_user2[".googleLikeFields"][] = "Status";
$tdatademo_user2[".googleLikeFields"][] = "Department";
$tdatademo_user2[".googleLikeFields"][] = "AllowableSickLeave";
$tdatademo_user2[".googleLikeFields"][] = "AllowableVacationLeave";
$tdatademo_user2[".googleLikeFields"][] = "AllowableEmergencyLeave";
$tdatademo_user2[".googleLikeFields"][] = "SSSEE";
$tdatademo_user2[".googleLikeFields"][] = "SSSER";
$tdatademo_user2[".googleLikeFields"][] = "PhilHealthEE";
$tdatademo_user2[".googleLikeFields"][] = "PhilHealthER";
$tdatademo_user2[".googleLikeFields"][] = "PagIbigEE";
$tdatademo_user2[".googleLikeFields"][] = "AllowablePaternityLeave";
$tdatademo_user2[".googleLikeFields"][] = "HiredDate";
$tdatademo_user2[".googleLikeFields"][] = "Inactive";
$tdatademo_user2[".googleLikeFields"][] = "ExitDate";
$tdatademo_user2[".googleLikeFields"][] = "PagIbigER";
$tdatademo_user2[".googleLikeFields"][] = "PagIbigNo";
$tdatademo_user2[".googleLikeFields"][] = "PhilHealthNo";
$tdatademo_user2[".googleLikeFields"][] = "SSSEC";
$tdatademo_user2[".googleLikeFields"][] = "Level";
$tdatademo_user2[".googleLikeFields"][] = "DateCreated";
$tdatademo_user2[".googleLikeFields"][] = "ApprovedDate";
$tdatademo_user2[".googleLikeFields"][] = "Approved";
$tdatademo_user2[".googleLikeFields"][] = "Approvedby";
$tdatademo_user2[".googleLikeFields"][] = "Preparedby";
$tdatademo_user2[".googleLikeFields"][] = "Checkedby";
$tdatademo_user2[".googleLikeFields"][] = "CheckedDate";
$tdatademo_user2[".googleLikeFields"][] = "Checked";
$tdatademo_user2[".googleLikeFields"][] = "Superior";
$tdatademo_user2[".googleLikeFields"][] = "Position";
$tdatademo_user2[".googleLikeFields"][] = "Employer";
$tdatademo_user2[".googleLikeFields"][] = "IDNo";
$tdatademo_user2[".googleLikeFields"][] = "AccountNo";
$tdatademo_user2[".googleLikeFields"][] = "LateFixPenalty";
$tdatademo_user2[".googleLikeFields"][] = "DoNotUpdateContributions";
$tdatademo_user2[".googleLikeFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user2[".googleLikeFields"][] = "Birthday";
$tdatademo_user2[".googleLikeFields"][] = "Bank";
$tdatademo_user2[".googleLikeFields"][] = "NoLateDeduction";
$tdatademo_user2[".googleLikeFields"][] = "IncludeBreakLate";
$tdatademo_user2[".googleLikeFields"][] = "GracePeriodMins";
$tdatademo_user2[".googleLikeFields"][] = "WithAdditionalBreaks";
$tdatademo_user2[".googleLikeFields"][] = "Superior2";


$tdatademo_user2[".advSearchFields"] = array();
$tdatademo_user2[".advSearchFields"][] = "EmployeeID";
$tdatademo_user2[".advSearchFields"][] = "IDNo";
$tdatademo_user2[".advSearchFields"][] = "Photo";
$tdatademo_user2[".advSearchFields"][] = "user_name";
$tdatademo_user2[".advSearchFields"][] = "Employer";
$tdatademo_user2[".advSearchFields"][] = "Division";
$tdatademo_user2[".advSearchFields"][] = "Department";
$tdatademo_user2[".advSearchFields"][] = "HiredDate";
$tdatademo_user2[".advSearchFields"][] = "Inactive";
$tdatademo_user2[".advSearchFields"][] = "ExitDate";
$tdatademo_user2[".advSearchFields"][] = "Status";
$tdatademo_user2[".advSearchFields"][] = "Position";
$tdatademo_user2[".advSearchFields"][] = "Superior";
$tdatademo_user2[".advSearchFields"][] = "Superior2";
$tdatademo_user2[".advSearchFields"][] = "Mobile";
$tdatademo_user2[".advSearchFields"][] = "Address";
$tdatademo_user2[".advSearchFields"][] = "Birthday";
$tdatademo_user2[".advSearchFields"][] = "Email";
$tdatademo_user2[".advSearchFields"][] = "SSSNo";
$tdatademo_user2[".advSearchFields"][] = "PagIbigNo";
$tdatademo_user2[".advSearchFields"][] = "PhilHealthNo";
$tdatademo_user2[".advSearchFields"][] = "TIN";
$tdatademo_user2[".advSearchFields"][] = "Bank";
$tdatademo_user2[".advSearchFields"][] = "AccountNo";
$tdatademo_user2[".advSearchFields"][] = "AllowableSickLeave";
$tdatademo_user2[".advSearchFields"][] = "AllowableVacationLeave";
$tdatademo_user2[".advSearchFields"][] = "AllowableEmergencyLeave";
$tdatademo_user2[".advSearchFields"][] = "AllowablePaternityLeave";
$tdatademo_user2[".advSearchFields"][] = "EmployeeType";
$tdatademo_user2[".advSearchFields"][] = "Level";
$tdatademo_user2[".advSearchFields"][] = "DoNotUpdateContributions";
$tdatademo_user2[".advSearchFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user2[".advSearchFields"][] = "SSSEE";
$tdatademo_user2[".advSearchFields"][] = "SSSER";
$tdatademo_user2[".advSearchFields"][] = "SSSEC";
$tdatademo_user2[".advSearchFields"][] = "PhilHealthEE";
$tdatademo_user2[".advSearchFields"][] = "PhilHealthER";
$tdatademo_user2[".advSearchFields"][] = "PagIbigEE";
$tdatademo_user2[".advSearchFields"][] = "PagIbigER";
$tdatademo_user2[".advSearchFields"][] = "NoLateDeduction";
$tdatademo_user2[".advSearchFields"][] = "GracePeriodMins";
$tdatademo_user2[".advSearchFields"][] = "WithAdditionalBreaks";
$tdatademo_user2[".advSearchFields"][] = "IncludeBreakLate";
$tdatademo_user2[".advSearchFields"][] = "user_id";
$tdatademo_user2[".advSearchFields"][] = "LateFixPenalty";
$tdatademo_user2[".advSearchFields"][] = "DateCreated";
$tdatademo_user2[".advSearchFields"][] = "Preparedby";
$tdatademo_user2[".advSearchFields"][] = "Checked";
$tdatademo_user2[".advSearchFields"][] = "Checkedby";
$tdatademo_user2[".advSearchFields"][] = "CheckedDate";
$tdatademo_user2[".advSearchFields"][] = "Approved";
$tdatademo_user2[".advSearchFields"][] = "Approvedby";
$tdatademo_user2[".advSearchFields"][] = "ApprovedDate";

$tdatademo_user2[".tableType"] = "list";

$tdatademo_user2[".printerPageOrientation"] = 0;
$tdatademo_user2[".nPrinterPageScale"] = 100;

$tdatademo_user2[".nPrinterSplitRecords"] = 40;

$tdatademo_user2[".nPrinterPDFSplitRecords"] = 40;



$tdatademo_user2[".geocodingEnabled"] = false;





$tdatademo_user2[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatademo_user2[".pageSize"] = 20;

$tdatademo_user2[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY user_name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatademo_user2[".strOrderBy"] = $tstrOrderBy;

$tdatademo_user2[".orderindexes"] = array();
	$tdatademo_user2[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "user_name");


$tdatademo_user2[".sqlHead"] = "SELECT user_id,  user_name,  Photo,  SSSNo,  TIN,  Mobile,  Address,  Email,  EmployeeType,  EmployeeID,  Division,  Status,  Department,  AllowableSickLeave,  AllowableVacationLeave,  AllowableEmergencyLeave,  SSSEE,  SSSER,  PhilHealthEE,  PhilHealthER,  PagIbigEE,  AllowablePaternityLeave,  HiredDate,  Inactive,  ExitDate,  PagIbigER,  PagIbigNo,  PhilHealthNo,  SSSEC,  `Level`,  DateCreated,  ApprovedDate,  Approved,  Approvedby,  Preparedby,  Checkedby,  CheckedDate,  Checked,  Superior,  `Position`,  Employer,  IDNo,  AccountNo,  LateFixPenalty,  DoNotUpdateContributions,  ExcludeContributionOnPayroll,  Birthday,  Bank,  NoLateDeduction,  IncludeBreakLate,  GracePeriodMins,  WithAdditionalBreaks,  Superior2";
$tdatademo_user2[".sqlFrom"] = "FROM demo_user";
$tdatademo_user2[".sqlWhereExpr"] = "";
$tdatademo_user2[".sqlTail"] = "";


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
$tdatademo_user2[".arrEditTabs"] = $arrEditTabs;


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
$tdatademo_user2[".arrAddTabs"] = $arrAddTabs;

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
$tdatademo_user2[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatademo_user2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatademo_user2[".arrGroupsPerPage"] = $arrGPP;

$tdatademo_user2[".highlightSearchResults"] = true;

$tableKeysdemo_user2 = array();
$tableKeysdemo_user2[] = "user_id";
$tdatademo_user2[".Keys"] = $tableKeysdemo_user2;

$tdatademo_user2[".listFields"] = array();
$tdatademo_user2[".listFields"][] = "EmployeeID";
$tdatademo_user2[".listFields"][] = "IDNo";
$tdatademo_user2[".listFields"][] = "Photo";
$tdatademo_user2[".listFields"][] = "user_name";
$tdatademo_user2[".listFields"][] = "Employer";
$tdatademo_user2[".listFields"][] = "Division";
$tdatademo_user2[".listFields"][] = "Department";
$tdatademo_user2[".listFields"][] = "HiredDate";
$tdatademo_user2[".listFields"][] = "Inactive";
$tdatademo_user2[".listFields"][] = "ExitDate";
$tdatademo_user2[".listFields"][] = "Status";
$tdatademo_user2[".listFields"][] = "Position";
$tdatademo_user2[".listFields"][] = "Superior";
$tdatademo_user2[".listFields"][] = "Superior2";
$tdatademo_user2[".listFields"][] = "Mobile";
$tdatademo_user2[".listFields"][] = "Address";
$tdatademo_user2[".listFields"][] = "Birthday";
$tdatademo_user2[".listFields"][] = "Email";
$tdatademo_user2[".listFields"][] = "SSSNo";
$tdatademo_user2[".listFields"][] = "PagIbigNo";
$tdatademo_user2[".listFields"][] = "PhilHealthNo";
$tdatademo_user2[".listFields"][] = "TIN";
$tdatademo_user2[".listFields"][] = "Bank";
$tdatademo_user2[".listFields"][] = "AccountNo";
$tdatademo_user2[".listFields"][] = "AllowableSickLeave";
$tdatademo_user2[".listFields"][] = "AllowableVacationLeave";
$tdatademo_user2[".listFields"][] = "AllowableEmergencyLeave";
$tdatademo_user2[".listFields"][] = "AllowablePaternityLeave";
$tdatademo_user2[".listFields"][] = "EmployeeType";
$tdatademo_user2[".listFields"][] = "Level";
$tdatademo_user2[".listFields"][] = "DoNotUpdateContributions";
$tdatademo_user2[".listFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user2[".listFields"][] = "SSSEE";
$tdatademo_user2[".listFields"][] = "SSSER";
$tdatademo_user2[".listFields"][] = "SSSEC";
$tdatademo_user2[".listFields"][] = "PhilHealthEE";
$tdatademo_user2[".listFields"][] = "PhilHealthER";
$tdatademo_user2[".listFields"][] = "PagIbigEE";
$tdatademo_user2[".listFields"][] = "PagIbigER";
$tdatademo_user2[".listFields"][] = "NoLateDeduction";
$tdatademo_user2[".listFields"][] = "GracePeriodMins";
$tdatademo_user2[".listFields"][] = "WithAdditionalBreaks";
$tdatademo_user2[".listFields"][] = "IncludeBreakLate";
$tdatademo_user2[".listFields"][] = "user_id";
$tdatademo_user2[".listFields"][] = "LateFixPenalty";
$tdatademo_user2[".listFields"][] = "DateCreated";
$tdatademo_user2[".listFields"][] = "Preparedby";
$tdatademo_user2[".listFields"][] = "Checked";
$tdatademo_user2[".listFields"][] = "Checkedby";
$tdatademo_user2[".listFields"][] = "CheckedDate";
$tdatademo_user2[".listFields"][] = "Approved";
$tdatademo_user2[".listFields"][] = "Approvedby";
$tdatademo_user2[".listFields"][] = "ApprovedDate";

$tdatademo_user2[".hideMobileList"] = array();


$tdatademo_user2[".viewFields"] = array();
$tdatademo_user2[".viewFields"][] = "EmployeeID";
$tdatademo_user2[".viewFields"][] = "IDNo";
$tdatademo_user2[".viewFields"][] = "Photo";
$tdatademo_user2[".viewFields"][] = "user_name";
$tdatademo_user2[".viewFields"][] = "Employer";
$tdatademo_user2[".viewFields"][] = "Division";
$tdatademo_user2[".viewFields"][] = "Department";
$tdatademo_user2[".viewFields"][] = "HiredDate";
$tdatademo_user2[".viewFields"][] = "Inactive";
$tdatademo_user2[".viewFields"][] = "ExitDate";
$tdatademo_user2[".viewFields"][] = "Status";
$tdatademo_user2[".viewFields"][] = "Position";
$tdatademo_user2[".viewFields"][] = "Superior";
$tdatademo_user2[".viewFields"][] = "Superior2";
$tdatademo_user2[".viewFields"][] = "Mobile";
$tdatademo_user2[".viewFields"][] = "Address";
$tdatademo_user2[".viewFields"][] = "Birthday";
$tdatademo_user2[".viewFields"][] = "Email";
$tdatademo_user2[".viewFields"][] = "SSSNo";
$tdatademo_user2[".viewFields"][] = "PagIbigNo";
$tdatademo_user2[".viewFields"][] = "PhilHealthNo";
$tdatademo_user2[".viewFields"][] = "TIN";
$tdatademo_user2[".viewFields"][] = "Bank";
$tdatademo_user2[".viewFields"][] = "AccountNo";
$tdatademo_user2[".viewFields"][] = "AllowableSickLeave";
$tdatademo_user2[".viewFields"][] = "AllowableVacationLeave";
$tdatademo_user2[".viewFields"][] = "AllowableEmergencyLeave";
$tdatademo_user2[".viewFields"][] = "AllowablePaternityLeave";
$tdatademo_user2[".viewFields"][] = "EmployeeType";
$tdatademo_user2[".viewFields"][] = "Level";
$tdatademo_user2[".viewFields"][] = "DoNotUpdateContributions";
$tdatademo_user2[".viewFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user2[".viewFields"][] = "SSSEE";
$tdatademo_user2[".viewFields"][] = "SSSER";
$tdatademo_user2[".viewFields"][] = "SSSEC";
$tdatademo_user2[".viewFields"][] = "PhilHealthEE";
$tdatademo_user2[".viewFields"][] = "PhilHealthER";
$tdatademo_user2[".viewFields"][] = "PagIbigEE";
$tdatademo_user2[".viewFields"][] = "PagIbigER";
$tdatademo_user2[".viewFields"][] = "NoLateDeduction";
$tdatademo_user2[".viewFields"][] = "GracePeriodMins";
$tdatademo_user2[".viewFields"][] = "WithAdditionalBreaks";
$tdatademo_user2[".viewFields"][] = "IncludeBreakLate";
$tdatademo_user2[".viewFields"][] = "user_id";
$tdatademo_user2[".viewFields"][] = "LateFixPenalty";
$tdatademo_user2[".viewFields"][] = "DateCreated";
$tdatademo_user2[".viewFields"][] = "Preparedby";
$tdatademo_user2[".viewFields"][] = "Checked";
$tdatademo_user2[".viewFields"][] = "Checkedby";
$tdatademo_user2[".viewFields"][] = "CheckedDate";
$tdatademo_user2[".viewFields"][] = "Approved";
$tdatademo_user2[".viewFields"][] = "Approvedby";
$tdatademo_user2[".viewFields"][] = "ApprovedDate";

$tdatademo_user2[".addFields"] = array();
$tdatademo_user2[".addFields"][] = "EmployeeID";
$tdatademo_user2[".addFields"][] = "IDNo";
$tdatademo_user2[".addFields"][] = "Photo";
$tdatademo_user2[".addFields"][] = "user_name";
$tdatademo_user2[".addFields"][] = "Employer";
$tdatademo_user2[".addFields"][] = "Division";
$tdatademo_user2[".addFields"][] = "Department";
$tdatademo_user2[".addFields"][] = "HiredDate";
$tdatademo_user2[".addFields"][] = "Inactive";
$tdatademo_user2[".addFields"][] = "ExitDate";
$tdatademo_user2[".addFields"][] = "Status";
$tdatademo_user2[".addFields"][] = "Position";
$tdatademo_user2[".addFields"][] = "Superior";
$tdatademo_user2[".addFields"][] = "Superior2";
$tdatademo_user2[".addFields"][] = "Mobile";
$tdatademo_user2[".addFields"][] = "Address";
$tdatademo_user2[".addFields"][] = "Birthday";
$tdatademo_user2[".addFields"][] = "Email";
$tdatademo_user2[".addFields"][] = "SSSNo";
$tdatademo_user2[".addFields"][] = "PagIbigNo";
$tdatademo_user2[".addFields"][] = "PhilHealthNo";
$tdatademo_user2[".addFields"][] = "TIN";
$tdatademo_user2[".addFields"][] = "Bank";
$tdatademo_user2[".addFields"][] = "AccountNo";
$tdatademo_user2[".addFields"][] = "AllowableSickLeave";
$tdatademo_user2[".addFields"][] = "AllowableVacationLeave";
$tdatademo_user2[".addFields"][] = "AllowableEmergencyLeave";
$tdatademo_user2[".addFields"][] = "AllowablePaternityLeave";
$tdatademo_user2[".addFields"][] = "EmployeeType";
$tdatademo_user2[".addFields"][] = "Level";
$tdatademo_user2[".addFields"][] = "DoNotUpdateContributions";
$tdatademo_user2[".addFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user2[".addFields"][] = "SSSEE";
$tdatademo_user2[".addFields"][] = "SSSER";
$tdatademo_user2[".addFields"][] = "SSSEC";
$tdatademo_user2[".addFields"][] = "PhilHealthEE";
$tdatademo_user2[".addFields"][] = "PhilHealthER";
$tdatademo_user2[".addFields"][] = "PagIbigEE";
$tdatademo_user2[".addFields"][] = "PagIbigER";
$tdatademo_user2[".addFields"][] = "NoLateDeduction";
$tdatademo_user2[".addFields"][] = "GracePeriodMins";
$tdatademo_user2[".addFields"][] = "WithAdditionalBreaks";
$tdatademo_user2[".addFields"][] = "IncludeBreakLate";
$tdatademo_user2[".addFields"][] = "LateFixPenalty";
$tdatademo_user2[".addFields"][] = "DateCreated";
$tdatademo_user2[".addFields"][] = "Preparedby";
$tdatademo_user2[".addFields"][] = "Checked";
$tdatademo_user2[".addFields"][] = "Checkedby";
$tdatademo_user2[".addFields"][] = "CheckedDate";
$tdatademo_user2[".addFields"][] = "Approved";
$tdatademo_user2[".addFields"][] = "Approvedby";
$tdatademo_user2[".addFields"][] = "ApprovedDate";

$tdatademo_user2[".masterListFields"] = array();
$tdatademo_user2[".masterListFields"][] = "EmployeeID";
$tdatademo_user2[".masterListFields"][] = "IDNo";
$tdatademo_user2[".masterListFields"][] = "Photo";
$tdatademo_user2[".masterListFields"][] = "user_name";
$tdatademo_user2[".masterListFields"][] = "Employer";
$tdatademo_user2[".masterListFields"][] = "Division";
$tdatademo_user2[".masterListFields"][] = "Department";
$tdatademo_user2[".masterListFields"][] = "HiredDate";
$tdatademo_user2[".masterListFields"][] = "Inactive";
$tdatademo_user2[".masterListFields"][] = "ExitDate";
$tdatademo_user2[".masterListFields"][] = "Status";
$tdatademo_user2[".masterListFields"][] = "Position";
$tdatademo_user2[".masterListFields"][] = "Superior";
$tdatademo_user2[".masterListFields"][] = "Superior2";
$tdatademo_user2[".masterListFields"][] = "Mobile";
$tdatademo_user2[".masterListFields"][] = "Address";
$tdatademo_user2[".masterListFields"][] = "Birthday";
$tdatademo_user2[".masterListFields"][] = "Email";
$tdatademo_user2[".masterListFields"][] = "SSSNo";
$tdatademo_user2[".masterListFields"][] = "PagIbigNo";
$tdatademo_user2[".masterListFields"][] = "PhilHealthNo";
$tdatademo_user2[".masterListFields"][] = "TIN";
$tdatademo_user2[".masterListFields"][] = "Bank";
$tdatademo_user2[".masterListFields"][] = "AccountNo";
$tdatademo_user2[".masterListFields"][] = "AllowableSickLeave";
$tdatademo_user2[".masterListFields"][] = "AllowableVacationLeave";
$tdatademo_user2[".masterListFields"][] = "AllowableEmergencyLeave";
$tdatademo_user2[".masterListFields"][] = "AllowablePaternityLeave";
$tdatademo_user2[".masterListFields"][] = "EmployeeType";
$tdatademo_user2[".masterListFields"][] = "Level";
$tdatademo_user2[".masterListFields"][] = "DoNotUpdateContributions";
$tdatademo_user2[".masterListFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user2[".masterListFields"][] = "SSSEE";
$tdatademo_user2[".masterListFields"][] = "SSSER";
$tdatademo_user2[".masterListFields"][] = "SSSEC";
$tdatademo_user2[".masterListFields"][] = "PhilHealthEE";
$tdatademo_user2[".masterListFields"][] = "PhilHealthER";
$tdatademo_user2[".masterListFields"][] = "PagIbigEE";
$tdatademo_user2[".masterListFields"][] = "PagIbigER";
$tdatademo_user2[".masterListFields"][] = "NoLateDeduction";
$tdatademo_user2[".masterListFields"][] = "GracePeriodMins";
$tdatademo_user2[".masterListFields"][] = "WithAdditionalBreaks";
$tdatademo_user2[".masterListFields"][] = "IncludeBreakLate";
$tdatademo_user2[".masterListFields"][] = "user_id";
$tdatademo_user2[".masterListFields"][] = "LateFixPenalty";
$tdatademo_user2[".masterListFields"][] = "DateCreated";
$tdatademo_user2[".masterListFields"][] = "Preparedby";
$tdatademo_user2[".masterListFields"][] = "Checked";
$tdatademo_user2[".masterListFields"][] = "Checkedby";
$tdatademo_user2[".masterListFields"][] = "CheckedDate";
$tdatademo_user2[".masterListFields"][] = "Approved";
$tdatademo_user2[".masterListFields"][] = "Approvedby";
$tdatademo_user2[".masterListFields"][] = "ApprovedDate";

$tdatademo_user2[".inlineAddFields"] = array();
$tdatademo_user2[".inlineAddFields"][] = "EmployeeID";
$tdatademo_user2[".inlineAddFields"][] = "IDNo";
$tdatademo_user2[".inlineAddFields"][] = "Photo";
$tdatademo_user2[".inlineAddFields"][] = "user_name";
$tdatademo_user2[".inlineAddFields"][] = "Employer";
$tdatademo_user2[".inlineAddFields"][] = "Division";
$tdatademo_user2[".inlineAddFields"][] = "Department";
$tdatademo_user2[".inlineAddFields"][] = "HiredDate";
$tdatademo_user2[".inlineAddFields"][] = "Inactive";
$tdatademo_user2[".inlineAddFields"][] = "ExitDate";
$tdatademo_user2[".inlineAddFields"][] = "Status";
$tdatademo_user2[".inlineAddFields"][] = "Position";
$tdatademo_user2[".inlineAddFields"][] = "Superior";
$tdatademo_user2[".inlineAddFields"][] = "Superior2";
$tdatademo_user2[".inlineAddFields"][] = "Mobile";
$tdatademo_user2[".inlineAddFields"][] = "Address";
$tdatademo_user2[".inlineAddFields"][] = "Birthday";
$tdatademo_user2[".inlineAddFields"][] = "Email";
$tdatademo_user2[".inlineAddFields"][] = "SSSNo";
$tdatademo_user2[".inlineAddFields"][] = "PagIbigNo";
$tdatademo_user2[".inlineAddFields"][] = "PhilHealthNo";
$tdatademo_user2[".inlineAddFields"][] = "TIN";
$tdatademo_user2[".inlineAddFields"][] = "Bank";
$tdatademo_user2[".inlineAddFields"][] = "AccountNo";
$tdatademo_user2[".inlineAddFields"][] = "AllowableSickLeave";
$tdatademo_user2[".inlineAddFields"][] = "AllowableVacationLeave";
$tdatademo_user2[".inlineAddFields"][] = "AllowableEmergencyLeave";
$tdatademo_user2[".inlineAddFields"][] = "AllowablePaternityLeave";
$tdatademo_user2[".inlineAddFields"][] = "EmployeeType";
$tdatademo_user2[".inlineAddFields"][] = "Level";
$tdatademo_user2[".inlineAddFields"][] = "DoNotUpdateContributions";
$tdatademo_user2[".inlineAddFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user2[".inlineAddFields"][] = "SSSEE";
$tdatademo_user2[".inlineAddFields"][] = "SSSER";
$tdatademo_user2[".inlineAddFields"][] = "SSSEC";
$tdatademo_user2[".inlineAddFields"][] = "PhilHealthEE";
$tdatademo_user2[".inlineAddFields"][] = "PhilHealthER";
$tdatademo_user2[".inlineAddFields"][] = "PagIbigEE";
$tdatademo_user2[".inlineAddFields"][] = "PagIbigER";
$tdatademo_user2[".inlineAddFields"][] = "NoLateDeduction";
$tdatademo_user2[".inlineAddFields"][] = "GracePeriodMins";
$tdatademo_user2[".inlineAddFields"][] = "WithAdditionalBreaks";
$tdatademo_user2[".inlineAddFields"][] = "IncludeBreakLate";
$tdatademo_user2[".inlineAddFields"][] = "LateFixPenalty";
$tdatademo_user2[".inlineAddFields"][] = "DateCreated";
$tdatademo_user2[".inlineAddFields"][] = "Preparedby";
$tdatademo_user2[".inlineAddFields"][] = "Checked";
$tdatademo_user2[".inlineAddFields"][] = "Checkedby";
$tdatademo_user2[".inlineAddFields"][] = "CheckedDate";
$tdatademo_user2[".inlineAddFields"][] = "Approved";
$tdatademo_user2[".inlineAddFields"][] = "Approvedby";
$tdatademo_user2[".inlineAddFields"][] = "ApprovedDate";

$tdatademo_user2[".editFields"] = array();
$tdatademo_user2[".editFields"][] = "EmployeeID";
$tdatademo_user2[".editFields"][] = "IDNo";
$tdatademo_user2[".editFields"][] = "Photo";
$tdatademo_user2[".editFields"][] = "user_name";
$tdatademo_user2[".editFields"][] = "Employer";
$tdatademo_user2[".editFields"][] = "Division";
$tdatademo_user2[".editFields"][] = "Department";
$tdatademo_user2[".editFields"][] = "HiredDate";
$tdatademo_user2[".editFields"][] = "Inactive";
$tdatademo_user2[".editFields"][] = "ExitDate";
$tdatademo_user2[".editFields"][] = "Status";
$tdatademo_user2[".editFields"][] = "Position";
$tdatademo_user2[".editFields"][] = "Superior";
$tdatademo_user2[".editFields"][] = "Superior2";
$tdatademo_user2[".editFields"][] = "Mobile";
$tdatademo_user2[".editFields"][] = "Address";
$tdatademo_user2[".editFields"][] = "Birthday";
$tdatademo_user2[".editFields"][] = "Email";
$tdatademo_user2[".editFields"][] = "SSSNo";
$tdatademo_user2[".editFields"][] = "PagIbigNo";
$tdatademo_user2[".editFields"][] = "PhilHealthNo";
$tdatademo_user2[".editFields"][] = "TIN";
$tdatademo_user2[".editFields"][] = "Bank";
$tdatademo_user2[".editFields"][] = "AccountNo";
$tdatademo_user2[".editFields"][] = "AllowableSickLeave";
$tdatademo_user2[".editFields"][] = "AllowableVacationLeave";
$tdatademo_user2[".editFields"][] = "AllowableEmergencyLeave";
$tdatademo_user2[".editFields"][] = "AllowablePaternityLeave";
$tdatademo_user2[".editFields"][] = "EmployeeType";
$tdatademo_user2[".editFields"][] = "Level";
$tdatademo_user2[".editFields"][] = "DoNotUpdateContributions";
$tdatademo_user2[".editFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user2[".editFields"][] = "SSSEE";
$tdatademo_user2[".editFields"][] = "SSSER";
$tdatademo_user2[".editFields"][] = "SSSEC";
$tdatademo_user2[".editFields"][] = "PhilHealthEE";
$tdatademo_user2[".editFields"][] = "PhilHealthER";
$tdatademo_user2[".editFields"][] = "PagIbigEE";
$tdatademo_user2[".editFields"][] = "PagIbigER";
$tdatademo_user2[".editFields"][] = "NoLateDeduction";
$tdatademo_user2[".editFields"][] = "GracePeriodMins";
$tdatademo_user2[".editFields"][] = "WithAdditionalBreaks";
$tdatademo_user2[".editFields"][] = "IncludeBreakLate";
$tdatademo_user2[".editFields"][] = "LateFixPenalty";
$tdatademo_user2[".editFields"][] = "DateCreated";
$tdatademo_user2[".editFields"][] = "Preparedby";
$tdatademo_user2[".editFields"][] = "Checked";
$tdatademo_user2[".editFields"][] = "Checkedby";
$tdatademo_user2[".editFields"][] = "CheckedDate";
$tdatademo_user2[".editFields"][] = "Approved";
$tdatademo_user2[".editFields"][] = "Approvedby";
$tdatademo_user2[".editFields"][] = "ApprovedDate";

$tdatademo_user2[".inlineEditFields"] = array();
$tdatademo_user2[".inlineEditFields"][] = "EmployeeID";
$tdatademo_user2[".inlineEditFields"][] = "IDNo";
$tdatademo_user2[".inlineEditFields"][] = "Photo";
$tdatademo_user2[".inlineEditFields"][] = "user_name";
$tdatademo_user2[".inlineEditFields"][] = "Employer";
$tdatademo_user2[".inlineEditFields"][] = "Division";
$tdatademo_user2[".inlineEditFields"][] = "Department";
$tdatademo_user2[".inlineEditFields"][] = "HiredDate";
$tdatademo_user2[".inlineEditFields"][] = "Inactive";
$tdatademo_user2[".inlineEditFields"][] = "ExitDate";
$tdatademo_user2[".inlineEditFields"][] = "Status";
$tdatademo_user2[".inlineEditFields"][] = "Position";
$tdatademo_user2[".inlineEditFields"][] = "Superior";
$tdatademo_user2[".inlineEditFields"][] = "Superior2";
$tdatademo_user2[".inlineEditFields"][] = "Mobile";
$tdatademo_user2[".inlineEditFields"][] = "Address";
$tdatademo_user2[".inlineEditFields"][] = "Birthday";
$tdatademo_user2[".inlineEditFields"][] = "Email";
$tdatademo_user2[".inlineEditFields"][] = "SSSNo";
$tdatademo_user2[".inlineEditFields"][] = "PagIbigNo";
$tdatademo_user2[".inlineEditFields"][] = "PhilHealthNo";
$tdatademo_user2[".inlineEditFields"][] = "TIN";
$tdatademo_user2[".inlineEditFields"][] = "Bank";
$tdatademo_user2[".inlineEditFields"][] = "AccountNo";
$tdatademo_user2[".inlineEditFields"][] = "AllowableSickLeave";
$tdatademo_user2[".inlineEditFields"][] = "AllowableVacationLeave";
$tdatademo_user2[".inlineEditFields"][] = "AllowableEmergencyLeave";
$tdatademo_user2[".inlineEditFields"][] = "AllowablePaternityLeave";
$tdatademo_user2[".inlineEditFields"][] = "EmployeeType";
$tdatademo_user2[".inlineEditFields"][] = "Level";
$tdatademo_user2[".inlineEditFields"][] = "DoNotUpdateContributions";
$tdatademo_user2[".inlineEditFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user2[".inlineEditFields"][] = "SSSEE";
$tdatademo_user2[".inlineEditFields"][] = "SSSER";
$tdatademo_user2[".inlineEditFields"][] = "SSSEC";
$tdatademo_user2[".inlineEditFields"][] = "PhilHealthEE";
$tdatademo_user2[".inlineEditFields"][] = "PhilHealthER";
$tdatademo_user2[".inlineEditFields"][] = "PagIbigEE";
$tdatademo_user2[".inlineEditFields"][] = "PagIbigER";
$tdatademo_user2[".inlineEditFields"][] = "NoLateDeduction";
$tdatademo_user2[".inlineEditFields"][] = "GracePeriodMins";
$tdatademo_user2[".inlineEditFields"][] = "WithAdditionalBreaks";
$tdatademo_user2[".inlineEditFields"][] = "IncludeBreakLate";
$tdatademo_user2[".inlineEditFields"][] = "LateFixPenalty";
$tdatademo_user2[".inlineEditFields"][] = "DateCreated";
$tdatademo_user2[".inlineEditFields"][] = "Preparedby";
$tdatademo_user2[".inlineEditFields"][] = "Checked";
$tdatademo_user2[".inlineEditFields"][] = "Checkedby";
$tdatademo_user2[".inlineEditFields"][] = "CheckedDate";
$tdatademo_user2[".inlineEditFields"][] = "Approved";
$tdatademo_user2[".inlineEditFields"][] = "Approvedby";
$tdatademo_user2[".inlineEditFields"][] = "ApprovedDate";

$tdatademo_user2[".updateSelectedFields"] = array();
$tdatademo_user2[".updateSelectedFields"][] = "Employer";
$tdatademo_user2[".updateSelectedFields"][] = "Division";
$tdatademo_user2[".updateSelectedFields"][] = "Department";
$tdatademo_user2[".updateSelectedFields"][] = "HiredDate";
$tdatademo_user2[".updateSelectedFields"][] = "Inactive";
$tdatademo_user2[".updateSelectedFields"][] = "ExitDate";
$tdatademo_user2[".updateSelectedFields"][] = "Status";
$tdatademo_user2[".updateSelectedFields"][] = "Position";
$tdatademo_user2[".updateSelectedFields"][] = "Superior";
$tdatademo_user2[".updateSelectedFields"][] = "Superior2";
$tdatademo_user2[".updateSelectedFields"][] = "Bank";
$tdatademo_user2[".updateSelectedFields"][] = "AllowableSickLeave";
$tdatademo_user2[".updateSelectedFields"][] = "AllowableVacationLeave";
$tdatademo_user2[".updateSelectedFields"][] = "AllowableEmergencyLeave";
$tdatademo_user2[".updateSelectedFields"][] = "AllowablePaternityLeave";
$tdatademo_user2[".updateSelectedFields"][] = "EmployeeType";
$tdatademo_user2[".updateSelectedFields"][] = "Level";
$tdatademo_user2[".updateSelectedFields"][] = "DoNotUpdateContributions";
$tdatademo_user2[".updateSelectedFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user2[".updateSelectedFields"][] = "SSSEE";
$tdatademo_user2[".updateSelectedFields"][] = "SSSER";
$tdatademo_user2[".updateSelectedFields"][] = "SSSEC";
$tdatademo_user2[".updateSelectedFields"][] = "PhilHealthEE";
$tdatademo_user2[".updateSelectedFields"][] = "PhilHealthER";
$tdatademo_user2[".updateSelectedFields"][] = "PagIbigEE";
$tdatademo_user2[".updateSelectedFields"][] = "PagIbigER";
$tdatademo_user2[".updateSelectedFields"][] = "LateFixPenalty";
$tdatademo_user2[".updateSelectedFields"][] = "DateCreated";
$tdatademo_user2[".updateSelectedFields"][] = "Preparedby";
$tdatademo_user2[".updateSelectedFields"][] = "Checked";
$tdatademo_user2[".updateSelectedFields"][] = "Checkedby";
$tdatademo_user2[".updateSelectedFields"][] = "CheckedDate";
$tdatademo_user2[".updateSelectedFields"][] = "Approved";
$tdatademo_user2[".updateSelectedFields"][] = "Approvedby";
$tdatademo_user2[".updateSelectedFields"][] = "ApprovedDate";


$tdatademo_user2[".exportFields"] = array();
$tdatademo_user2[".exportFields"][] = "EmployeeID";
$tdatademo_user2[".exportFields"][] = "IDNo";
$tdatademo_user2[".exportFields"][] = "Photo";
$tdatademo_user2[".exportFields"][] = "user_name";
$tdatademo_user2[".exportFields"][] = "Employer";
$tdatademo_user2[".exportFields"][] = "Division";
$tdatademo_user2[".exportFields"][] = "Department";
$tdatademo_user2[".exportFields"][] = "HiredDate";
$tdatademo_user2[".exportFields"][] = "Inactive";
$tdatademo_user2[".exportFields"][] = "ExitDate";
$tdatademo_user2[".exportFields"][] = "Status";
$tdatademo_user2[".exportFields"][] = "Position";
$tdatademo_user2[".exportFields"][] = "Superior";
$tdatademo_user2[".exportFields"][] = "Superior2";
$tdatademo_user2[".exportFields"][] = "Mobile";
$tdatademo_user2[".exportFields"][] = "Address";
$tdatademo_user2[".exportFields"][] = "Birthday";
$tdatademo_user2[".exportFields"][] = "Email";
$tdatademo_user2[".exportFields"][] = "SSSNo";
$tdatademo_user2[".exportFields"][] = "PagIbigNo";
$tdatademo_user2[".exportFields"][] = "PhilHealthNo";
$tdatademo_user2[".exportFields"][] = "TIN";
$tdatademo_user2[".exportFields"][] = "Bank";
$tdatademo_user2[".exportFields"][] = "AccountNo";
$tdatademo_user2[".exportFields"][] = "AllowableSickLeave";
$tdatademo_user2[".exportFields"][] = "AllowableVacationLeave";
$tdatademo_user2[".exportFields"][] = "AllowableEmergencyLeave";
$tdatademo_user2[".exportFields"][] = "AllowablePaternityLeave";
$tdatademo_user2[".exportFields"][] = "EmployeeType";
$tdatademo_user2[".exportFields"][] = "Level";
$tdatademo_user2[".exportFields"][] = "DoNotUpdateContributions";
$tdatademo_user2[".exportFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user2[".exportFields"][] = "SSSEE";
$tdatademo_user2[".exportFields"][] = "SSSER";
$tdatademo_user2[".exportFields"][] = "SSSEC";
$tdatademo_user2[".exportFields"][] = "PhilHealthEE";
$tdatademo_user2[".exportFields"][] = "PhilHealthER";
$tdatademo_user2[".exportFields"][] = "PagIbigEE";
$tdatademo_user2[".exportFields"][] = "PagIbigER";
$tdatademo_user2[".exportFields"][] = "NoLateDeduction";
$tdatademo_user2[".exportFields"][] = "GracePeriodMins";
$tdatademo_user2[".exportFields"][] = "WithAdditionalBreaks";
$tdatademo_user2[".exportFields"][] = "IncludeBreakLate";
$tdatademo_user2[".exportFields"][] = "user_id";
$tdatademo_user2[".exportFields"][] = "LateFixPenalty";
$tdatademo_user2[".exportFields"][] = "DateCreated";
$tdatademo_user2[".exportFields"][] = "Preparedby";
$tdatademo_user2[".exportFields"][] = "Checked";
$tdatademo_user2[".exportFields"][] = "Checkedby";
$tdatademo_user2[".exportFields"][] = "CheckedDate";
$tdatademo_user2[".exportFields"][] = "Approved";
$tdatademo_user2[".exportFields"][] = "Approvedby";
$tdatademo_user2[".exportFields"][] = "ApprovedDate";

$tdatademo_user2[".importFields"] = array();
$tdatademo_user2[".importFields"][] = "user_id";
$tdatademo_user2[".importFields"][] = "user_name";
$tdatademo_user2[".importFields"][] = "Photo";
$tdatademo_user2[".importFields"][] = "SSSNo";
$tdatademo_user2[".importFields"][] = "TIN";
$tdatademo_user2[".importFields"][] = "Mobile";
$tdatademo_user2[".importFields"][] = "Address";
$tdatademo_user2[".importFields"][] = "Email";
$tdatademo_user2[".importFields"][] = "EmployeeType";
$tdatademo_user2[".importFields"][] = "EmployeeID";
$tdatademo_user2[".importFields"][] = "Division";
$tdatademo_user2[".importFields"][] = "Status";
$tdatademo_user2[".importFields"][] = "Department";
$tdatademo_user2[".importFields"][] = "AllowableSickLeave";
$tdatademo_user2[".importFields"][] = "AllowableVacationLeave";
$tdatademo_user2[".importFields"][] = "AllowableEmergencyLeave";
$tdatademo_user2[".importFields"][] = "SSSEE";
$tdatademo_user2[".importFields"][] = "SSSER";
$tdatademo_user2[".importFields"][] = "PhilHealthEE";
$tdatademo_user2[".importFields"][] = "PhilHealthER";
$tdatademo_user2[".importFields"][] = "PagIbigEE";
$tdatademo_user2[".importFields"][] = "AllowablePaternityLeave";
$tdatademo_user2[".importFields"][] = "HiredDate";
$tdatademo_user2[".importFields"][] = "Inactive";
$tdatademo_user2[".importFields"][] = "ExitDate";
$tdatademo_user2[".importFields"][] = "PagIbigER";
$tdatademo_user2[".importFields"][] = "PagIbigNo";
$tdatademo_user2[".importFields"][] = "PhilHealthNo";
$tdatademo_user2[".importFields"][] = "SSSEC";
$tdatademo_user2[".importFields"][] = "Level";
$tdatademo_user2[".importFields"][] = "DateCreated";
$tdatademo_user2[".importFields"][] = "ApprovedDate";
$tdatademo_user2[".importFields"][] = "Approved";
$tdatademo_user2[".importFields"][] = "Approvedby";
$tdatademo_user2[".importFields"][] = "Preparedby";
$tdatademo_user2[".importFields"][] = "Checkedby";
$tdatademo_user2[".importFields"][] = "CheckedDate";
$tdatademo_user2[".importFields"][] = "Checked";
$tdatademo_user2[".importFields"][] = "Superior";
$tdatademo_user2[".importFields"][] = "Position";
$tdatademo_user2[".importFields"][] = "Employer";
$tdatademo_user2[".importFields"][] = "IDNo";
$tdatademo_user2[".importFields"][] = "AccountNo";
$tdatademo_user2[".importFields"][] = "LateFixPenalty";
$tdatademo_user2[".importFields"][] = "DoNotUpdateContributions";
$tdatademo_user2[".importFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user2[".importFields"][] = "Birthday";
$tdatademo_user2[".importFields"][] = "Bank";
$tdatademo_user2[".importFields"][] = "NoLateDeduction";
$tdatademo_user2[".importFields"][] = "IncludeBreakLate";
$tdatademo_user2[".importFields"][] = "GracePeriodMins";
$tdatademo_user2[".importFields"][] = "WithAdditionalBreaks";
$tdatademo_user2[".importFields"][] = "Superior2";

$tdatademo_user2[".printFields"] = array();
$tdatademo_user2[".printFields"][] = "EmployeeID";
$tdatademo_user2[".printFields"][] = "IDNo";
$tdatademo_user2[".printFields"][] = "Photo";
$tdatademo_user2[".printFields"][] = "user_name";
$tdatademo_user2[".printFields"][] = "Employer";
$tdatademo_user2[".printFields"][] = "Division";
$tdatademo_user2[".printFields"][] = "Department";
$tdatademo_user2[".printFields"][] = "HiredDate";
$tdatademo_user2[".printFields"][] = "Inactive";
$tdatademo_user2[".printFields"][] = "ExitDate";
$tdatademo_user2[".printFields"][] = "Status";
$tdatademo_user2[".printFields"][] = "Position";
$tdatademo_user2[".printFields"][] = "Superior";
$tdatademo_user2[".printFields"][] = "Superior2";
$tdatademo_user2[".printFields"][] = "Mobile";
$tdatademo_user2[".printFields"][] = "Address";
$tdatademo_user2[".printFields"][] = "Birthday";
$tdatademo_user2[".printFields"][] = "Email";
$tdatademo_user2[".printFields"][] = "SSSNo";
$tdatademo_user2[".printFields"][] = "PagIbigNo";
$tdatademo_user2[".printFields"][] = "PhilHealthNo";
$tdatademo_user2[".printFields"][] = "TIN";
$tdatademo_user2[".printFields"][] = "Bank";
$tdatademo_user2[".printFields"][] = "AccountNo";
$tdatademo_user2[".printFields"][] = "AllowableSickLeave";
$tdatademo_user2[".printFields"][] = "AllowableVacationLeave";
$tdatademo_user2[".printFields"][] = "AllowableEmergencyLeave";
$tdatademo_user2[".printFields"][] = "AllowablePaternityLeave";
$tdatademo_user2[".printFields"][] = "EmployeeType";
$tdatademo_user2[".printFields"][] = "Level";
$tdatademo_user2[".printFields"][] = "DoNotUpdateContributions";
$tdatademo_user2[".printFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_user2[".printFields"][] = "SSSEE";
$tdatademo_user2[".printFields"][] = "SSSER";
$tdatademo_user2[".printFields"][] = "SSSEC";
$tdatademo_user2[".printFields"][] = "PhilHealthEE";
$tdatademo_user2[".printFields"][] = "PhilHealthER";
$tdatademo_user2[".printFields"][] = "PagIbigEE";
$tdatademo_user2[".printFields"][] = "PagIbigER";
$tdatademo_user2[".printFields"][] = "NoLateDeduction";
$tdatademo_user2[".printFields"][] = "GracePeriodMins";
$tdatademo_user2[".printFields"][] = "WithAdditionalBreaks";
$tdatademo_user2[".printFields"][] = "IncludeBreakLate";
$tdatademo_user2[".printFields"][] = "user_id";
$tdatademo_user2[".printFields"][] = "LateFixPenalty";
$tdatademo_user2[".printFields"][] = "DateCreated";
$tdatademo_user2[".printFields"][] = "Preparedby";
$tdatademo_user2[".printFields"][] = "Checked";
$tdatademo_user2[".printFields"][] = "Checkedby";
$tdatademo_user2[".printFields"][] = "CheckedDate";
$tdatademo_user2[".printFields"][] = "Approved";
$tdatademo_user2[".printFields"][] = "Approvedby";
$tdatademo_user2[".printFields"][] = "ApprovedDate";


//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","user_id");
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




	$tdatademo_user2["user_id"] = $fdata;
//	user_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_name";
	$fdata["GoodName"] = "user_name";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","user_name");
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




	$tdatademo_user2["user_name"] = $fdata;
//	Photo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Photo";
	$fdata["GoodName"] = "Photo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","Photo");
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




	$tdatademo_user2["Photo"] = $fdata;
//	SSSNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SSSNo";
	$fdata["GoodName"] = "SSSNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","SSSNo");
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




	$tdatademo_user2["SSSNo"] = $fdata;
//	TIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TIN";
	$fdata["GoodName"] = "TIN";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","TIN");
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




	$tdatademo_user2["TIN"] = $fdata;
//	Mobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Mobile";
	$fdata["GoodName"] = "Mobile";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","Mobile");
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




	$tdatademo_user2["Mobile"] = $fdata;
//	Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Address";
	$fdata["GoodName"] = "Address";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","Address");
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




	$tdatademo_user2["Address"] = $fdata;
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","Email");
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




	$tdatademo_user2["Email"] = $fdata;
//	EmployeeType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "EmployeeType";
	$fdata["GoodName"] = "EmployeeType";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","EmployeeType");
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




	$tdatademo_user2["EmployeeType"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","EmployeeID");
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




	$tdatademo_user2["EmployeeID"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","Division");
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




	$tdatademo_user2["Division"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","Status");
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




	$tdatademo_user2["Status"] = $fdata;
//	Department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Department";
	$fdata["GoodName"] = "Department";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","Department");
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




	$tdatademo_user2["Department"] = $fdata;
//	AllowableSickLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "AllowableSickLeave";
	$fdata["GoodName"] = "AllowableSickLeave";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","AllowableSickLeave");
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




	$tdatademo_user2["AllowableSickLeave"] = $fdata;
//	AllowableVacationLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "AllowableVacationLeave";
	$fdata["GoodName"] = "AllowableVacationLeave";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","AllowableVacationLeave");
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




	$tdatademo_user2["AllowableVacationLeave"] = $fdata;
//	AllowableEmergencyLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "AllowableEmergencyLeave";
	$fdata["GoodName"] = "AllowableEmergencyLeave";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","AllowableEmergencyLeave");
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




	$tdatademo_user2["AllowableEmergencyLeave"] = $fdata;
//	SSSEE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "SSSEE";
	$fdata["GoodName"] = "SSSEE";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","SSSEE");
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




	$tdatademo_user2["SSSEE"] = $fdata;
//	SSSER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "SSSER";
	$fdata["GoodName"] = "SSSER";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","SSSER");
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




	$tdatademo_user2["SSSER"] = $fdata;
//	PhilHealthEE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "PhilHealthEE";
	$fdata["GoodName"] = "PhilHealthEE";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","PhilHealthEE");
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




	$tdatademo_user2["PhilHealthEE"] = $fdata;
//	PhilHealthER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "PhilHealthER";
	$fdata["GoodName"] = "PhilHealthER";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","PhilHealthER");
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




	$tdatademo_user2["PhilHealthER"] = $fdata;
//	PagIbigEE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "PagIbigEE";
	$fdata["GoodName"] = "PagIbigEE";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","PagIbigEE");
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




	$tdatademo_user2["PagIbigEE"] = $fdata;
//	AllowablePaternityLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "AllowablePaternityLeave";
	$fdata["GoodName"] = "AllowablePaternityLeave";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","AllowablePaternityLeave");
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




	$tdatademo_user2["AllowablePaternityLeave"] = $fdata;
//	HiredDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "HiredDate";
	$fdata["GoodName"] = "HiredDate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","HiredDate");
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




	$tdatademo_user2["HiredDate"] = $fdata;
//	Inactive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Inactive";
	$fdata["GoodName"] = "Inactive";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","Inactive");
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




	$tdatademo_user2["Inactive"] = $fdata;
//	ExitDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "ExitDate";
	$fdata["GoodName"] = "ExitDate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","ExitDate");
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




	$tdatademo_user2["ExitDate"] = $fdata;
//	PagIbigER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "PagIbigER";
	$fdata["GoodName"] = "PagIbigER";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","PagIbigER");
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




	$tdatademo_user2["PagIbigER"] = $fdata;
//	PagIbigNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "PagIbigNo";
	$fdata["GoodName"] = "PagIbigNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","PagIbigNo");
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




	$tdatademo_user2["PagIbigNo"] = $fdata;
//	PhilHealthNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "PhilHealthNo";
	$fdata["GoodName"] = "PhilHealthNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","PhilHealthNo");
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




	$tdatademo_user2["PhilHealthNo"] = $fdata;
//	SSSEC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "SSSEC";
	$fdata["GoodName"] = "SSSEC";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","SSSEC");
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




	$tdatademo_user2["SSSEC"] = $fdata;
//	Level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Level";
	$fdata["GoodName"] = "Level";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","Level");
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




	$tdatademo_user2["Level"] = $fdata;
//	DateCreated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "DateCreated";
	$fdata["GoodName"] = "DateCreated";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","DateCreated");
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




	$tdatademo_user2["DateCreated"] = $fdata;
//	ApprovedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "ApprovedDate";
	$fdata["GoodName"] = "ApprovedDate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","ApprovedDate");
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




	$tdatademo_user2["ApprovedDate"] = $fdata;
//	Approved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Approved";
	$fdata["GoodName"] = "Approved";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","Approved");
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




	$tdatademo_user2["Approved"] = $fdata;
//	Approvedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Approvedby";
	$fdata["GoodName"] = "Approvedby";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","Approvedby");
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




	$tdatademo_user2["Approvedby"] = $fdata;
//	Preparedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Preparedby";
	$fdata["GoodName"] = "Preparedby";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","Preparedby");
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




	$tdatademo_user2["Preparedby"] = $fdata;
//	Checkedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Checkedby";
	$fdata["GoodName"] = "Checkedby";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","Checkedby");
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




	$tdatademo_user2["Checkedby"] = $fdata;
//	CheckedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "CheckedDate";
	$fdata["GoodName"] = "CheckedDate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","CheckedDate");
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




	$tdatademo_user2["CheckedDate"] = $fdata;
//	Checked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Checked";
	$fdata["GoodName"] = "Checked";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","Checked");
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




	$tdatademo_user2["Checked"] = $fdata;
//	Superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Superior";
	$fdata["GoodName"] = "Superior";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","Superior");
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




	$tdatademo_user2["Superior"] = $fdata;
//	Position
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Position";
	$fdata["GoodName"] = "Position";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","Position");
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




	$tdatademo_user2["Position"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","Employer");
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




	$tdatademo_user2["Employer"] = $fdata;
//	IDNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "IDNo";
	$fdata["GoodName"] = "IDNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","IDNo");
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




	$tdatademo_user2["IDNo"] = $fdata;
//	AccountNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "AccountNo";
	$fdata["GoodName"] = "AccountNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","AccountNo");
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




	$tdatademo_user2["AccountNo"] = $fdata;
//	LateFixPenalty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "LateFixPenalty";
	$fdata["GoodName"] = "LateFixPenalty";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","LateFixPenalty");
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




	$tdatademo_user2["LateFixPenalty"] = $fdata;
//	DoNotUpdateContributions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "DoNotUpdateContributions";
	$fdata["GoodName"] = "DoNotUpdateContributions";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","DoNotUpdateContributions");
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




	$tdatademo_user2["DoNotUpdateContributions"] = $fdata;
//	ExcludeContributionOnPayroll
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "ExcludeContributionOnPayroll";
	$fdata["GoodName"] = "ExcludeContributionOnPayroll";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","ExcludeContributionOnPayroll");
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




	$tdatademo_user2["ExcludeContributionOnPayroll"] = $fdata;
//	Birthday
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "Birthday";
	$fdata["GoodName"] = "Birthday";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","Birthday");
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




	$tdatademo_user2["Birthday"] = $fdata;
//	Bank
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "Bank";
	$fdata["GoodName"] = "Bank";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","Bank");
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




	$tdatademo_user2["Bank"] = $fdata;
//	NoLateDeduction
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "NoLateDeduction";
	$fdata["GoodName"] = "NoLateDeduction";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","NoLateDeduction");
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




	$tdatademo_user2["NoLateDeduction"] = $fdata;
//	IncludeBreakLate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "IncludeBreakLate";
	$fdata["GoodName"] = "IncludeBreakLate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","IncludeBreakLate");
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




	$tdatademo_user2["IncludeBreakLate"] = $fdata;
//	GracePeriodMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "GracePeriodMins";
	$fdata["GoodName"] = "GracePeriodMins";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","GracePeriodMins");
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




	$tdatademo_user2["GracePeriodMins"] = $fdata;
//	WithAdditionalBreaks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "WithAdditionalBreaks";
	$fdata["GoodName"] = "WithAdditionalBreaks";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","WithAdditionalBreaks");
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




	$tdatademo_user2["WithAdditionalBreaks"] = $fdata;
//	Superior2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "Superior2";
	$fdata["GoodName"] = "Superior2";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_user2","Superior2");
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




	$tdatademo_user2["Superior2"] = $fdata;


$tables_data["demo_user2"]=&$tdatademo_user2;
$field_labels["demo_user2"] = &$fieldLabelsdemo_user2;
$fieldToolTips["demo_user2"] = &$fieldToolTipsdemo_user2;
$placeHolders["demo_user2"] = &$placeHoldersdemo_user2;
$page_titles["demo_user2"] = &$pageTitlesdemo_user2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["demo_user2"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["demo_user2"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_demo_user2()
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
	"m_srcTableName" => "demo_user2"
));

$proto6["m_sql"] = "user_id";
$proto6["m_srcTableName"] = "demo_user2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto8["m_sql"] = "user_name";
$proto8["m_srcTableName"] = "demo_user2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Photo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto10["m_sql"] = "Photo";
$proto10["m_srcTableName"] = "demo_user2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto12["m_sql"] = "SSSNo";
$proto12["m_srcTableName"] = "demo_user2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TIN",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto14["m_sql"] = "TIN";
$proto14["m_srcTableName"] = "demo_user2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Mobile",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto16["m_sql"] = "Mobile";
$proto16["m_srcTableName"] = "demo_user2";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Address",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto18["m_sql"] = "Address";
$proto18["m_srcTableName"] = "demo_user2";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto20["m_sql"] = "Email";
$proto20["m_srcTableName"] = "demo_user2";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeType",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto22["m_sql"] = "EmployeeType";
$proto22["m_srcTableName"] = "demo_user2";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto24["m_sql"] = "EmployeeID";
$proto24["m_srcTableName"] = "demo_user2";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto26["m_sql"] = "Division";
$proto26["m_srcTableName"] = "demo_user2";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto28["m_sql"] = "Status";
$proto28["m_srcTableName"] = "demo_user2";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto30["m_sql"] = "Department";
$proto30["m_srcTableName"] = "demo_user2";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableSickLeave",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto32["m_sql"] = "AllowableSickLeave";
$proto32["m_srcTableName"] = "demo_user2";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableVacationLeave",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto34["m_sql"] = "AllowableVacationLeave";
$proto34["m_srcTableName"] = "demo_user2";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableEmergencyLeave",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto36["m_sql"] = "AllowableEmergencyLeave";
$proto36["m_srcTableName"] = "demo_user2";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSEE",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto38["m_sql"] = "SSSEE";
$proto38["m_srcTableName"] = "demo_user2";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSER",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto40["m_sql"] = "SSSER";
$proto40["m_srcTableName"] = "demo_user2";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "PhilHealthEE",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto42["m_sql"] = "PhilHealthEE";
$proto42["m_srcTableName"] = "demo_user2";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "PhilHealthER",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto44["m_sql"] = "PhilHealthER";
$proto44["m_srcTableName"] = "demo_user2";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbigEE",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto46["m_sql"] = "PagIbigEE";
$proto46["m_srcTableName"] = "demo_user2";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowablePaternityLeave",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto48["m_sql"] = "AllowablePaternityLeave";
$proto48["m_srcTableName"] = "demo_user2";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "HiredDate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto50["m_sql"] = "HiredDate";
$proto50["m_srcTableName"] = "demo_user2";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Inactive",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto52["m_sql"] = "Inactive";
$proto52["m_srcTableName"] = "demo_user2";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "ExitDate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto54["m_sql"] = "ExitDate";
$proto54["m_srcTableName"] = "demo_user2";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbigER",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto56["m_sql"] = "PagIbigER";
$proto56["m_srcTableName"] = "demo_user2";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbigNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto58["m_sql"] = "PagIbigNo";
$proto58["m_srcTableName"] = "demo_user2";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "PhilHealthNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto60["m_sql"] = "PhilHealthNo";
$proto60["m_srcTableName"] = "demo_user2";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSEC",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto62["m_sql"] = "SSSEC";
$proto62["m_srcTableName"] = "demo_user2";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Level",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto64["m_sql"] = "`Level`";
$proto64["m_srcTableName"] = "demo_user2";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "DateCreated",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto66["m_sql"] = "DateCreated";
$proto66["m_srcTableName"] = "demo_user2";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedDate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto68["m_sql"] = "ApprovedDate";
$proto68["m_srcTableName"] = "demo_user2";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "Approved",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto70["m_sql"] = "Approved";
$proto70["m_srcTableName"] = "demo_user2";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Approvedby",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto72["m_sql"] = "Approvedby";
$proto72["m_srcTableName"] = "demo_user2";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Preparedby",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto74["m_sql"] = "Preparedby";
$proto74["m_srcTableName"] = "demo_user2";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Checkedby",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto76["m_sql"] = "Checkedby";
$proto76["m_srcTableName"] = "demo_user2";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "CheckedDate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto78["m_sql"] = "CheckedDate";
$proto78["m_srcTableName"] = "demo_user2";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "Checked",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto80["m_sql"] = "Checked";
$proto80["m_srcTableName"] = "demo_user2";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto82["m_sql"] = "Superior";
$proto82["m_srcTableName"] = "demo_user2";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Position",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto84["m_sql"] = "`Position`";
$proto84["m_srcTableName"] = "demo_user2";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto86["m_sql"] = "Employer";
$proto86["m_srcTableName"] = "demo_user2";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "IDNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto88["m_sql"] = "IDNo";
$proto88["m_srcTableName"] = "demo_user2";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto90["m_sql"] = "AccountNo";
$proto90["m_srcTableName"] = "demo_user2";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "LateFixPenalty",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto92["m_sql"] = "LateFixPenalty";
$proto92["m_srcTableName"] = "demo_user2";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "DoNotUpdateContributions",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto94["m_sql"] = "DoNotUpdateContributions";
$proto94["m_srcTableName"] = "demo_user2";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "ExcludeContributionOnPayroll",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto96["m_sql"] = "ExcludeContributionOnPayroll";
$proto96["m_srcTableName"] = "demo_user2";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "Birthday",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto98["m_sql"] = "Birthday";
$proto98["m_srcTableName"] = "demo_user2";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "Bank",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto100["m_sql"] = "Bank";
$proto100["m_srcTableName"] = "demo_user2";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "NoLateDeduction",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto102["m_sql"] = "NoLateDeduction";
$proto102["m_srcTableName"] = "demo_user2";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "IncludeBreakLate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto104["m_sql"] = "IncludeBreakLate";
$proto104["m_srcTableName"] = "demo_user2";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "GracePeriodMins",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto106["m_sql"] = "GracePeriodMins";
$proto106["m_srcTableName"] = "demo_user2";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "WithAdditionalBreaks",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto108["m_sql"] = "WithAdditionalBreaks";
$proto108["m_srcTableName"] = "demo_user2";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior2",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_user2"
));

$proto110["m_sql"] = "Superior2";
$proto110["m_srcTableName"] = "demo_user2";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto112=array();
$proto112["m_link"] = "SQLL_MAIN";
			$proto113=array();
$proto113["m_strName"] = "demo_user";
$proto113["m_srcTableName"] = "demo_user2";
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
$proto112["m_srcTableName"] = "demo_user2";
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
	"m_srcTableName" => "demo_user2"
));

$proto116["m_column"]=$obj;
$proto116["m_bAsc"] = 1;
$proto116["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto116);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="demo_user2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_demo_user2 = createSqlQuery_demo_user2();


	
		;

																																																					

$tdatademo_user2[".sqlquery"] = $queryData_demo_user2;

include_once(getabspath("include/demo_user2_events.php"));
$tableEvents["demo_user2"] = new eventclass_demo_user2;
$tdatademo_user2[".hasEvents"] = true;

?>