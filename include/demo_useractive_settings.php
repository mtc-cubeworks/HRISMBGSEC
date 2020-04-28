<?php
require_once(getabspath("classes/cipherer.php"));




$tdatademo_useractive = array();
	$tdatademo_useractive[".truncateText"] = true;
	$tdatademo_useractive[".NumberOfChars"] = 80;
	$tdatademo_useractive[".ShortName"] = "demo_useractive";
	$tdatademo_useractive[".OwnerID"] = "";
	$tdatademo_useractive[".OriginalTable"] = "demo_user";

//	field labels
$fieldLabelsdemo_useractive = array();
$fieldToolTipsdemo_useractive = array();
$pageTitlesdemo_useractive = array();
$placeHoldersdemo_useractive = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdemo_useractive["English"] = array();
	$fieldToolTipsdemo_useractive["English"] = array();
	$placeHoldersdemo_useractive["English"] = array();
	$pageTitlesdemo_useractive["English"] = array();
	$fieldLabelsdemo_useractive["English"]["user_id"] = "User Id";
	$fieldToolTipsdemo_useractive["English"]["user_id"] = "";
	$placeHoldersdemo_useractive["English"]["user_id"] = "";
	$fieldLabelsdemo_useractive["English"]["user_name"] = "Employee";
	$fieldToolTipsdemo_useractive["English"]["user_name"] = "";
	$placeHoldersdemo_useractive["English"]["user_name"] = "";
	$fieldLabelsdemo_useractive["English"]["Photo"] = "Photo";
	$fieldToolTipsdemo_useractive["English"]["Photo"] = "";
	$placeHoldersdemo_useractive["English"]["Photo"] = "";
	$fieldLabelsdemo_useractive["English"]["EmployeeType"] = "Wage Type";
	$fieldToolTipsdemo_useractive["English"]["EmployeeType"] = "";
	$placeHoldersdemo_useractive["English"]["EmployeeType"] = "";
	$fieldLabelsdemo_useractive["English"]["SSSNo"] = "SSS No";
	$fieldToolTipsdemo_useractive["English"]["SSSNo"] = "";
	$placeHoldersdemo_useractive["English"]["SSSNo"] = "";
	$fieldLabelsdemo_useractive["English"]["TIN"] = "TIN";
	$fieldToolTipsdemo_useractive["English"]["TIN"] = "";
	$placeHoldersdemo_useractive["English"]["TIN"] = "";
	$fieldLabelsdemo_useractive["English"]["Mobile"] = "Mobile";
	$fieldToolTipsdemo_useractive["English"]["Mobile"] = "";
	$placeHoldersdemo_useractive["English"]["Mobile"] = "";
	$fieldLabelsdemo_useractive["English"]["Address"] = "Address";
	$fieldToolTipsdemo_useractive["English"]["Address"] = "";
	$placeHoldersdemo_useractive["English"]["Address"] = "";
	$fieldLabelsdemo_useractive["English"]["Email"] = "Email";
	$fieldToolTipsdemo_useractive["English"]["Email"] = "";
	$placeHoldersdemo_useractive["English"]["Email"] = "";
	$fieldLabelsdemo_useractive["English"]["EmployeeID"] = "Biometric ID";
	$fieldToolTipsdemo_useractive["English"]["EmployeeID"] = "";
	$placeHoldersdemo_useractive["English"]["EmployeeID"] = "";
	$fieldLabelsdemo_useractive["English"]["Division"] = "Division";
	$fieldToolTipsdemo_useractive["English"]["Division"] = "";
	$placeHoldersdemo_useractive["English"]["Division"] = "";
	$fieldLabelsdemo_useractive["English"]["Status"] = "Status";
	$fieldToolTipsdemo_useractive["English"]["Status"] = "";
	$placeHoldersdemo_useractive["English"]["Status"] = "";
	$fieldLabelsdemo_useractive["English"]["Department"] = "Department";
	$fieldToolTipsdemo_useractive["English"]["Department"] = "";
	$placeHoldersdemo_useractive["English"]["Department"] = "";
	$fieldLabelsdemo_useractive["English"]["AllowableSickLeave"] = "SL";
	$fieldToolTipsdemo_useractive["English"]["AllowableSickLeave"] = "";
	$placeHoldersdemo_useractive["English"]["AllowableSickLeave"] = "";
	$fieldLabelsdemo_useractive["English"]["AllowableVacationLeave"] = "VL";
	$fieldToolTipsdemo_useractive["English"]["AllowableVacationLeave"] = "";
	$placeHoldersdemo_useractive["English"]["AllowableVacationLeave"] = "";
	$fieldLabelsdemo_useractive["English"]["AllowableEmergencyLeave"] = "EL";
	$fieldToolTipsdemo_useractive["English"]["AllowableEmergencyLeave"] = "";
	$placeHoldersdemo_useractive["English"]["AllowableEmergencyLeave"] = "";
	$fieldLabelsdemo_useractive["English"]["SSSEE"] = "SSS EE";
	$fieldToolTipsdemo_useractive["English"]["SSSEE"] = "";
	$placeHoldersdemo_useractive["English"]["SSSEE"] = "";
	$fieldLabelsdemo_useractive["English"]["SSSER"] = "SSS ER";
	$fieldToolTipsdemo_useractive["English"]["SSSER"] = "";
	$placeHoldersdemo_useractive["English"]["SSSER"] = "";
	$fieldLabelsdemo_useractive["English"]["PhilHealthEE"] = "PHIC EE";
	$fieldToolTipsdemo_useractive["English"]["PhilHealthEE"] = "";
	$placeHoldersdemo_useractive["English"]["PhilHealthEE"] = "";
	$fieldLabelsdemo_useractive["English"]["PhilHealthER"] = "PHIC ER";
	$fieldToolTipsdemo_useractive["English"]["PhilHealthER"] = "";
	$placeHoldersdemo_useractive["English"]["PhilHealthER"] = "";
	$fieldLabelsdemo_useractive["English"]["AllowablePaternityLeave"] = "PL";
	$fieldToolTipsdemo_useractive["English"]["AllowablePaternityLeave"] = "";
	$placeHoldersdemo_useractive["English"]["AllowablePaternityLeave"] = "";
	$fieldLabelsdemo_useractive["English"]["HiredDate"] = "Hired Date";
	$fieldToolTipsdemo_useractive["English"]["HiredDate"] = "";
	$placeHoldersdemo_useractive["English"]["HiredDate"] = "";
	$fieldLabelsdemo_useractive["English"]["ExitDate"] = "Exit Date";
	$fieldToolTipsdemo_useractive["English"]["ExitDate"] = "";
	$placeHoldersdemo_useractive["English"]["ExitDate"] = "";
	$fieldLabelsdemo_useractive["English"]["Inactive"] = "Inactive";
	$fieldToolTipsdemo_useractive["English"]["Inactive"] = "";
	$placeHoldersdemo_useractive["English"]["Inactive"] = "";
	$fieldLabelsdemo_useractive["English"]["PagIbigEE"] = "HDMF EE";
	$fieldToolTipsdemo_useractive["English"]["PagIbigEE"] = "";
	$placeHoldersdemo_useractive["English"]["PagIbigEE"] = "";
	$fieldLabelsdemo_useractive["English"]["PagIbigER"] = "HDMF ER";
	$fieldToolTipsdemo_useractive["English"]["PagIbigER"] = "";
	$placeHoldersdemo_useractive["English"]["PagIbigER"] = "";
	$fieldLabelsdemo_useractive["English"]["PagIbigNo"] = "HDMF No";
	$fieldToolTipsdemo_useractive["English"]["PagIbigNo"] = "";
	$placeHoldersdemo_useractive["English"]["PagIbigNo"] = "";
	$fieldLabelsdemo_useractive["English"]["PhilHealthNo"] = "PHIC No";
	$fieldToolTipsdemo_useractive["English"]["PhilHealthNo"] = "";
	$placeHoldersdemo_useractive["English"]["PhilHealthNo"] = "";
	$fieldLabelsdemo_useractive["English"]["SSSEC"] = "SSS EC";
	$fieldToolTipsdemo_useractive["English"]["SSSEC"] = "";
	$placeHoldersdemo_useractive["English"]["SSSEC"] = "";
	$fieldLabelsdemo_useractive["English"]["Level"] = "Level";
	$fieldToolTipsdemo_useractive["English"]["Level"] = "";
	$placeHoldersdemo_useractive["English"]["Level"] = "";
	$fieldLabelsdemo_useractive["English"]["DateCreated"] = "Date Created";
	$fieldToolTipsdemo_useractive["English"]["DateCreated"] = "";
	$placeHoldersdemo_useractive["English"]["DateCreated"] = "";
	$fieldLabelsdemo_useractive["English"]["ApprovedDate"] = "Approved Date";
	$fieldToolTipsdemo_useractive["English"]["ApprovedDate"] = "";
	$placeHoldersdemo_useractive["English"]["ApprovedDate"] = "";
	$fieldLabelsdemo_useractive["English"]["Approved"] = "Approved";
	$fieldToolTipsdemo_useractive["English"]["Approved"] = "";
	$placeHoldersdemo_useractive["English"]["Approved"] = "";
	$fieldLabelsdemo_useractive["English"]["Approvedby"] = "Approvedby";
	$fieldToolTipsdemo_useractive["English"]["Approvedby"] = "";
	$placeHoldersdemo_useractive["English"]["Approvedby"] = "";
	$fieldLabelsdemo_useractive["English"]["Preparedby"] = "Preparedby";
	$fieldToolTipsdemo_useractive["English"]["Preparedby"] = "";
	$placeHoldersdemo_useractive["English"]["Preparedby"] = "";
	$fieldLabelsdemo_useractive["English"]["Checkedby"] = "Checkedby";
	$fieldToolTipsdemo_useractive["English"]["Checkedby"] = "";
	$placeHoldersdemo_useractive["English"]["Checkedby"] = "";
	$fieldLabelsdemo_useractive["English"]["CheckedDate"] = "Checked Date";
	$fieldToolTipsdemo_useractive["English"]["CheckedDate"] = "";
	$placeHoldersdemo_useractive["English"]["CheckedDate"] = "";
	$fieldLabelsdemo_useractive["English"]["Checked"] = "Checked";
	$fieldToolTipsdemo_useractive["English"]["Checked"] = "";
	$placeHoldersdemo_useractive["English"]["Checked"] = "";
	$fieldLabelsdemo_useractive["English"]["Superior"] = "Supervisor";
	$fieldToolTipsdemo_useractive["English"]["Superior"] = "";
	$placeHoldersdemo_useractive["English"]["Superior"] = "";
	$fieldLabelsdemo_useractive["English"]["Position"] = "Position";
	$fieldToolTipsdemo_useractive["English"]["Position"] = "";
	$placeHoldersdemo_useractive["English"]["Position"] = "";
	$fieldLabelsdemo_useractive["English"]["Employer"] = "Employer";
	$fieldToolTipsdemo_useractive["English"]["Employer"] = "";
	$placeHoldersdemo_useractive["English"]["Employer"] = "";
	$fieldLabelsdemo_useractive["English"]["IDNo"] = "Employee ID";
	$fieldToolTipsdemo_useractive["English"]["IDNo"] = "";
	$placeHoldersdemo_useractive["English"]["IDNo"] = "";
	$fieldLabelsdemo_useractive["English"]["AccountNo"] = "Account No";
	$fieldToolTipsdemo_useractive["English"]["AccountNo"] = "";
	$placeHoldersdemo_useractive["English"]["AccountNo"] = "";
	$fieldLabelsdemo_useractive["English"]["LateFixPenalty"] = "Late Fix Penalty";
	$fieldToolTipsdemo_useractive["English"]["LateFixPenalty"] = "";
	$placeHoldersdemo_useractive["English"]["LateFixPenalty"] = "";
	$fieldLabelsdemo_useractive["English"]["DoNotUpdateContributions"] = "Do Not Update Contributions";
	$fieldToolTipsdemo_useractive["English"]["DoNotUpdateContributions"] = "";
	$placeHoldersdemo_useractive["English"]["DoNotUpdateContributions"] = "";
	$fieldLabelsdemo_useractive["English"]["ExcludeContributionOnPayroll"] = "Exclude Contribution On Payroll";
	$fieldToolTipsdemo_useractive["English"]["ExcludeContributionOnPayroll"] = "";
	$placeHoldersdemo_useractive["English"]["ExcludeContributionOnPayroll"] = "";
	$fieldLabelsdemo_useractive["English"]["Birthday"] = "Birthday";
	$fieldToolTipsdemo_useractive["English"]["Birthday"] = "";
	$placeHoldersdemo_useractive["English"]["Birthday"] = "";
	$fieldLabelsdemo_useractive["English"]["Bank"] = "Bank";
	$fieldToolTipsdemo_useractive["English"]["Bank"] = "";
	$placeHoldersdemo_useractive["English"]["Bank"] = "";
	$fieldLabelsdemo_useractive["English"]["NoLateDeduction"] = "No Late Deduction";
	$fieldToolTipsdemo_useractive["English"]["NoLateDeduction"] = "";
	$placeHoldersdemo_useractive["English"]["NoLateDeduction"] = "";
	$fieldLabelsdemo_useractive["English"]["IncludeBreakLate"] = "Include Break Late";
	$fieldToolTipsdemo_useractive["English"]["IncludeBreakLate"] = "";
	$placeHoldersdemo_useractive["English"]["IncludeBreakLate"] = "";
	$fieldLabelsdemo_useractive["English"]["GracePeriodMins"] = "Grace Period Mins";
	$fieldToolTipsdemo_useractive["English"]["GracePeriodMins"] = "";
	$placeHoldersdemo_useractive["English"]["GracePeriodMins"] = "";
	$fieldLabelsdemo_useractive["English"]["WithAdditionalBreaks"] = "With Additional Breaks";
	$fieldToolTipsdemo_useractive["English"]["WithAdditionalBreaks"] = "";
	$placeHoldersdemo_useractive["English"]["WithAdditionalBreaks"] = "";
	$fieldLabelsdemo_useractive["English"]["Superior2"] = "Manager";
	$fieldToolTipsdemo_useractive["English"]["Superior2"] = "";
	$placeHoldersdemo_useractive["English"]["Superior2"] = "";
	if (count($fieldToolTipsdemo_useractive["English"]))
		$tdatademo_useractive[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdemo_useractive[""] = array();
	$fieldToolTipsdemo_useractive[""] = array();
	$placeHoldersdemo_useractive[""] = array();
	$pageTitlesdemo_useractive[""] = array();
	$fieldLabelsdemo_useractive[""]["Superior2"] = "Superior2";
	$fieldToolTipsdemo_useractive[""]["Superior2"] = "";
	$placeHoldersdemo_useractive[""]["Superior2"] = "";
	if (count($fieldToolTipsdemo_useractive[""]))
		$tdatademo_useractive[".isUseToolTips"] = true;
}


	$tdatademo_useractive[".NCSearch"] = true;



$tdatademo_useractive[".shortTableName"] = "demo_useractive";
$tdatademo_useractive[".nSecOptions"] = 0;
$tdatademo_useractive[".recsPerRowPrint"] = 1;
$tdatademo_useractive[".mainTableOwnerID"] = "";
$tdatademo_useractive[".moveNext"] = 1;
$tdatademo_useractive[".entityType"] = 1;

$tdatademo_useractive[".strOriginalTableName"] = "demo_user";

	



$tdatademo_useractive[".showAddInPopup"] = false;

$tdatademo_useractive[".showEditInPopup"] = false;

$tdatademo_useractive[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatademo_useractive[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatademo_useractive[".fieldsForRegister"] = array();

$tdatademo_useractive[".listAjax"] = false;

	$tdatademo_useractive[".audit"] = false;

	$tdatademo_useractive[".locking"] = false;

$tdatademo_useractive[".edit"] = true;
$tdatademo_useractive[".afterEditAction"] = 1;
$tdatademo_useractive[".closePopupAfterEdit"] = 1;
$tdatademo_useractive[".afterEditActionDetTable"] = "";

$tdatademo_useractive[".add"] = true;
$tdatademo_useractive[".afterAddAction"] = 1;
$tdatademo_useractive[".closePopupAfterAdd"] = 1;
$tdatademo_useractive[".afterAddActionDetTable"] = "";

$tdatademo_useractive[".list"] = true;

$tdatademo_useractive[".inlineEdit"] = true;

$tdatademo_useractive[".updateSelected"] = true;

$tdatademo_useractive[".reorderRecordsByHeader"] = true;


$tdatademo_useractive[".exportFormatting"] = 2;
$tdatademo_useractive[".exportDelimiter"] = ",";
		
$tdatademo_useractive[".inlineAdd"] = true;
$tdatademo_useractive[".view"] = true;

$tdatademo_useractive[".import"] = true;

$tdatademo_useractive[".exportTo"] = true;

$tdatademo_useractive[".printFriendly"] = true;

$tdatademo_useractive[".delete"] = true;

$tdatademo_useractive[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatademo_useractive[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatademo_useractive[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatademo_useractive[".searchSaving"] = false;
//

$tdatademo_useractive[".showSearchPanel"] = true;
		$tdatademo_useractive[".flexibleSearch"] = true;

$tdatademo_useractive[".isUseAjaxSuggest"] = true;

$tdatademo_useractive[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																					
																													

$tdatademo_useractive[".ajaxCodeSnippetAdded"] = false;

$tdatademo_useractive[".buttonsAdded"] = true;

$tdatademo_useractive[".addPageEvents"] = true;

// use timepicker for search panel
$tdatademo_useractive[".isUseTimeForSearch"] = false;



$tdatademo_useractive[".badgeColor"] = "3C4D51";


$tdatademo_useractive[".allSearchFields"] = array();
$tdatademo_useractive[".filterFields"] = array();
$tdatademo_useractive[".requiredSearchFields"] = array();

$tdatademo_useractive[".allSearchFields"][] = "EmployeeID";
	$tdatademo_useractive[".allSearchFields"][] = "IDNo";
	$tdatademo_useractive[".allSearchFields"][] = "Photo";
	$tdatademo_useractive[".allSearchFields"][] = "user_name";
	$tdatademo_useractive[".allSearchFields"][] = "Employer";
	$tdatademo_useractive[".allSearchFields"][] = "Division";
	$tdatademo_useractive[".allSearchFields"][] = "Department";
	$tdatademo_useractive[".allSearchFields"][] = "HiredDate";
	$tdatademo_useractive[".allSearchFields"][] = "Inactive";
	$tdatademo_useractive[".allSearchFields"][] = "ExitDate";
	$tdatademo_useractive[".allSearchFields"][] = "Status";
	$tdatademo_useractive[".allSearchFields"][] = "Position";
	$tdatademo_useractive[".allSearchFields"][] = "Superior";
	$tdatademo_useractive[".allSearchFields"][] = "Superior2";
	$tdatademo_useractive[".allSearchFields"][] = "Mobile";
	$tdatademo_useractive[".allSearchFields"][] = "Address";
	$tdatademo_useractive[".allSearchFields"][] = "Birthday";
	$tdatademo_useractive[".allSearchFields"][] = "Email";
	$tdatademo_useractive[".allSearchFields"][] = "SSSNo";
	$tdatademo_useractive[".allSearchFields"][] = "PagIbigNo";
	$tdatademo_useractive[".allSearchFields"][] = "PhilHealthNo";
	$tdatademo_useractive[".allSearchFields"][] = "TIN";
	$tdatademo_useractive[".allSearchFields"][] = "Bank";
	$tdatademo_useractive[".allSearchFields"][] = "AccountNo";
	$tdatademo_useractive[".allSearchFields"][] = "AllowableSickLeave";
	$tdatademo_useractive[".allSearchFields"][] = "AllowableVacationLeave";
	$tdatademo_useractive[".allSearchFields"][] = "AllowableEmergencyLeave";
	$tdatademo_useractive[".allSearchFields"][] = "AllowablePaternityLeave";
	$tdatademo_useractive[".allSearchFields"][] = "EmployeeType";
	$tdatademo_useractive[".allSearchFields"][] = "Level";
	$tdatademo_useractive[".allSearchFields"][] = "DoNotUpdateContributions";
	$tdatademo_useractive[".allSearchFields"][] = "ExcludeContributionOnPayroll";
	$tdatademo_useractive[".allSearchFields"][] = "SSSEE";
	$tdatademo_useractive[".allSearchFields"][] = "SSSER";
	$tdatademo_useractive[".allSearchFields"][] = "SSSEC";
	$tdatademo_useractive[".allSearchFields"][] = "PhilHealthEE";
	$tdatademo_useractive[".allSearchFields"][] = "PhilHealthER";
	$tdatademo_useractive[".allSearchFields"][] = "PagIbigEE";
	$tdatademo_useractive[".allSearchFields"][] = "PagIbigER";
	$tdatademo_useractive[".allSearchFields"][] = "NoLateDeduction";
	$tdatademo_useractive[".allSearchFields"][] = "GracePeriodMins";
	$tdatademo_useractive[".allSearchFields"][] = "WithAdditionalBreaks";
	$tdatademo_useractive[".allSearchFields"][] = "IncludeBreakLate";
	$tdatademo_useractive[".allSearchFields"][] = "user_id";
	$tdatademo_useractive[".allSearchFields"][] = "LateFixPenalty";
	$tdatademo_useractive[".allSearchFields"][] = "DateCreated";
	$tdatademo_useractive[".allSearchFields"][] = "Preparedby";
	$tdatademo_useractive[".allSearchFields"][] = "Checked";
	$tdatademo_useractive[".allSearchFields"][] = "Checkedby";
	$tdatademo_useractive[".allSearchFields"][] = "CheckedDate";
	$tdatademo_useractive[".allSearchFields"][] = "Approved";
	$tdatademo_useractive[".allSearchFields"][] = "Approvedby";
	$tdatademo_useractive[".allSearchFields"][] = "ApprovedDate";
	

$tdatademo_useractive[".googleLikeFields"] = array();
$tdatademo_useractive[".googleLikeFields"][] = "user_id";
$tdatademo_useractive[".googleLikeFields"][] = "user_name";
$tdatademo_useractive[".googleLikeFields"][] = "Photo";
$tdatademo_useractive[".googleLikeFields"][] = "SSSNo";
$tdatademo_useractive[".googleLikeFields"][] = "TIN";
$tdatademo_useractive[".googleLikeFields"][] = "Mobile";
$tdatademo_useractive[".googleLikeFields"][] = "Address";
$tdatademo_useractive[".googleLikeFields"][] = "Email";
$tdatademo_useractive[".googleLikeFields"][] = "EmployeeType";
$tdatademo_useractive[".googleLikeFields"][] = "EmployeeID";
$tdatademo_useractive[".googleLikeFields"][] = "Division";
$tdatademo_useractive[".googleLikeFields"][] = "Status";
$tdatademo_useractive[".googleLikeFields"][] = "Department";
$tdatademo_useractive[".googleLikeFields"][] = "AllowableSickLeave";
$tdatademo_useractive[".googleLikeFields"][] = "AllowableVacationLeave";
$tdatademo_useractive[".googleLikeFields"][] = "AllowableEmergencyLeave";
$tdatademo_useractive[".googleLikeFields"][] = "SSSEE";
$tdatademo_useractive[".googleLikeFields"][] = "SSSER";
$tdatademo_useractive[".googleLikeFields"][] = "PhilHealthEE";
$tdatademo_useractive[".googleLikeFields"][] = "PhilHealthER";
$tdatademo_useractive[".googleLikeFields"][] = "PagIbigEE";
$tdatademo_useractive[".googleLikeFields"][] = "AllowablePaternityLeave";
$tdatademo_useractive[".googleLikeFields"][] = "HiredDate";
$tdatademo_useractive[".googleLikeFields"][] = "Inactive";
$tdatademo_useractive[".googleLikeFields"][] = "ExitDate";
$tdatademo_useractive[".googleLikeFields"][] = "PagIbigER";
$tdatademo_useractive[".googleLikeFields"][] = "PagIbigNo";
$tdatademo_useractive[".googleLikeFields"][] = "PhilHealthNo";
$tdatademo_useractive[".googleLikeFields"][] = "SSSEC";
$tdatademo_useractive[".googleLikeFields"][] = "Level";
$tdatademo_useractive[".googleLikeFields"][] = "DateCreated";
$tdatademo_useractive[".googleLikeFields"][] = "ApprovedDate";
$tdatademo_useractive[".googleLikeFields"][] = "Approved";
$tdatademo_useractive[".googleLikeFields"][] = "Approvedby";
$tdatademo_useractive[".googleLikeFields"][] = "Preparedby";
$tdatademo_useractive[".googleLikeFields"][] = "Checkedby";
$tdatademo_useractive[".googleLikeFields"][] = "CheckedDate";
$tdatademo_useractive[".googleLikeFields"][] = "Checked";
$tdatademo_useractive[".googleLikeFields"][] = "Superior";
$tdatademo_useractive[".googleLikeFields"][] = "Position";
$tdatademo_useractive[".googleLikeFields"][] = "Employer";
$tdatademo_useractive[".googleLikeFields"][] = "IDNo";
$tdatademo_useractive[".googleLikeFields"][] = "AccountNo";
$tdatademo_useractive[".googleLikeFields"][] = "LateFixPenalty";
$tdatademo_useractive[".googleLikeFields"][] = "DoNotUpdateContributions";
$tdatademo_useractive[".googleLikeFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_useractive[".googleLikeFields"][] = "Birthday";
$tdatademo_useractive[".googleLikeFields"][] = "Bank";
$tdatademo_useractive[".googleLikeFields"][] = "NoLateDeduction";
$tdatademo_useractive[".googleLikeFields"][] = "IncludeBreakLate";
$tdatademo_useractive[".googleLikeFields"][] = "GracePeriodMins";
$tdatademo_useractive[".googleLikeFields"][] = "WithAdditionalBreaks";
$tdatademo_useractive[".googleLikeFields"][] = "Superior2";


$tdatademo_useractive[".advSearchFields"] = array();
$tdatademo_useractive[".advSearchFields"][] = "EmployeeID";
$tdatademo_useractive[".advSearchFields"][] = "IDNo";
$tdatademo_useractive[".advSearchFields"][] = "Photo";
$tdatademo_useractive[".advSearchFields"][] = "user_name";
$tdatademo_useractive[".advSearchFields"][] = "Employer";
$tdatademo_useractive[".advSearchFields"][] = "Division";
$tdatademo_useractive[".advSearchFields"][] = "Department";
$tdatademo_useractive[".advSearchFields"][] = "HiredDate";
$tdatademo_useractive[".advSearchFields"][] = "Inactive";
$tdatademo_useractive[".advSearchFields"][] = "ExitDate";
$tdatademo_useractive[".advSearchFields"][] = "Status";
$tdatademo_useractive[".advSearchFields"][] = "Position";
$tdatademo_useractive[".advSearchFields"][] = "Superior";
$tdatademo_useractive[".advSearchFields"][] = "Superior2";
$tdatademo_useractive[".advSearchFields"][] = "Mobile";
$tdatademo_useractive[".advSearchFields"][] = "Address";
$tdatademo_useractive[".advSearchFields"][] = "Birthday";
$tdatademo_useractive[".advSearchFields"][] = "Email";
$tdatademo_useractive[".advSearchFields"][] = "SSSNo";
$tdatademo_useractive[".advSearchFields"][] = "PagIbigNo";
$tdatademo_useractive[".advSearchFields"][] = "PhilHealthNo";
$tdatademo_useractive[".advSearchFields"][] = "TIN";
$tdatademo_useractive[".advSearchFields"][] = "Bank";
$tdatademo_useractive[".advSearchFields"][] = "AccountNo";
$tdatademo_useractive[".advSearchFields"][] = "AllowableSickLeave";
$tdatademo_useractive[".advSearchFields"][] = "AllowableVacationLeave";
$tdatademo_useractive[".advSearchFields"][] = "AllowableEmergencyLeave";
$tdatademo_useractive[".advSearchFields"][] = "AllowablePaternityLeave";
$tdatademo_useractive[".advSearchFields"][] = "EmployeeType";
$tdatademo_useractive[".advSearchFields"][] = "Level";
$tdatademo_useractive[".advSearchFields"][] = "DoNotUpdateContributions";
$tdatademo_useractive[".advSearchFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_useractive[".advSearchFields"][] = "SSSEE";
$tdatademo_useractive[".advSearchFields"][] = "SSSER";
$tdatademo_useractive[".advSearchFields"][] = "SSSEC";
$tdatademo_useractive[".advSearchFields"][] = "PhilHealthEE";
$tdatademo_useractive[".advSearchFields"][] = "PhilHealthER";
$tdatademo_useractive[".advSearchFields"][] = "PagIbigEE";
$tdatademo_useractive[".advSearchFields"][] = "PagIbigER";
$tdatademo_useractive[".advSearchFields"][] = "NoLateDeduction";
$tdatademo_useractive[".advSearchFields"][] = "GracePeriodMins";
$tdatademo_useractive[".advSearchFields"][] = "WithAdditionalBreaks";
$tdatademo_useractive[".advSearchFields"][] = "IncludeBreakLate";
$tdatademo_useractive[".advSearchFields"][] = "user_id";
$tdatademo_useractive[".advSearchFields"][] = "LateFixPenalty";
$tdatademo_useractive[".advSearchFields"][] = "DateCreated";
$tdatademo_useractive[".advSearchFields"][] = "Preparedby";
$tdatademo_useractive[".advSearchFields"][] = "Checked";
$tdatademo_useractive[".advSearchFields"][] = "Checkedby";
$tdatademo_useractive[".advSearchFields"][] = "CheckedDate";
$tdatademo_useractive[".advSearchFields"][] = "Approved";
$tdatademo_useractive[".advSearchFields"][] = "Approvedby";
$tdatademo_useractive[".advSearchFields"][] = "ApprovedDate";

$tdatademo_useractive[".tableType"] = "list";

$tdatademo_useractive[".printerPageOrientation"] = 0;
$tdatademo_useractive[".nPrinterPageScale"] = 100;

$tdatademo_useractive[".nPrinterSplitRecords"] = 40;

$tdatademo_useractive[".nPrinterPDFSplitRecords"] = 40;



$tdatademo_useractive[".geocodingEnabled"] = false;





$tdatademo_useractive[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatademo_useractive[".pageSize"] = 20;

$tdatademo_useractive[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY user_name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatademo_useractive[".strOrderBy"] = $tstrOrderBy;

$tdatademo_useractive[".orderindexes"] = array();
	$tdatademo_useractive[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "user_name");


$tdatademo_useractive[".sqlHead"] = "SELECT user_id,  user_name,  Photo,  SSSNo,  TIN,  Mobile,  Address,  Email,  EmployeeType,  EmployeeID,  Division,  Status,  Department,  AllowableSickLeave,  AllowableVacationLeave,  AllowableEmergencyLeave,  SSSEE,  SSSER,  PhilHealthEE,  PhilHealthER,  PagIbigEE,  AllowablePaternityLeave,  HiredDate,  Inactive,  ExitDate,  PagIbigER,  PagIbigNo,  PhilHealthNo,  SSSEC,  `Level`,  DateCreated,  ApprovedDate,  Approved,  Approvedby,  Preparedby,  Checkedby,  CheckedDate,  Checked,  Superior,  `Position`,  Employer,  IDNo,  AccountNo,  LateFixPenalty,  DoNotUpdateContributions,  ExcludeContributionOnPayroll,  Birthday,  Bank,  NoLateDeduction,  IncludeBreakLate,  GracePeriodMins,  WithAdditionalBreaks,  Superior2";
$tdatademo_useractive[".sqlFrom"] = "FROM demo_user";
$tdatademo_useractive[".sqlWhereExpr"] = "(Inactive <>1)";
$tdatademo_useractive[".sqlTail"] = "";


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
$tdatademo_useractive[".arrEditTabs"] = $arrEditTabs;


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
$tdatademo_useractive[".arrAddTabs"] = $arrAddTabs;

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
$tdatademo_useractive[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatademo_useractive[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatademo_useractive[".arrGroupsPerPage"] = $arrGPP;

$tdatademo_useractive[".highlightSearchResults"] = true;

$tableKeysdemo_useractive = array();
$tableKeysdemo_useractive[] = "user_id";
$tdatademo_useractive[".Keys"] = $tableKeysdemo_useractive;

$tdatademo_useractive[".listFields"] = array();
$tdatademo_useractive[".listFields"][] = "EmployeeID";
$tdatademo_useractive[".listFields"][] = "IDNo";
$tdatademo_useractive[".listFields"][] = "Photo";
$tdatademo_useractive[".listFields"][] = "user_name";
$tdatademo_useractive[".listFields"][] = "Employer";
$tdatademo_useractive[".listFields"][] = "Division";
$tdatademo_useractive[".listFields"][] = "Department";
$tdatademo_useractive[".listFields"][] = "HiredDate";
$tdatademo_useractive[".listFields"][] = "Inactive";
$tdatademo_useractive[".listFields"][] = "ExitDate";
$tdatademo_useractive[".listFields"][] = "Status";
$tdatademo_useractive[".listFields"][] = "Position";
$tdatademo_useractive[".listFields"][] = "Superior";
$tdatademo_useractive[".listFields"][] = "Superior2";
$tdatademo_useractive[".listFields"][] = "Mobile";
$tdatademo_useractive[".listFields"][] = "Address";
$tdatademo_useractive[".listFields"][] = "Birthday";
$tdatademo_useractive[".listFields"][] = "Email";
$tdatademo_useractive[".listFields"][] = "SSSNo";
$tdatademo_useractive[".listFields"][] = "PagIbigNo";
$tdatademo_useractive[".listFields"][] = "PhilHealthNo";
$tdatademo_useractive[".listFields"][] = "TIN";
$tdatademo_useractive[".listFields"][] = "Bank";
$tdatademo_useractive[".listFields"][] = "AccountNo";
$tdatademo_useractive[".listFields"][] = "AllowableSickLeave";
$tdatademo_useractive[".listFields"][] = "AllowableVacationLeave";
$tdatademo_useractive[".listFields"][] = "AllowableEmergencyLeave";
$tdatademo_useractive[".listFields"][] = "AllowablePaternityLeave";
$tdatademo_useractive[".listFields"][] = "EmployeeType";
$tdatademo_useractive[".listFields"][] = "Level";
$tdatademo_useractive[".listFields"][] = "DoNotUpdateContributions";
$tdatademo_useractive[".listFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_useractive[".listFields"][] = "SSSEE";
$tdatademo_useractive[".listFields"][] = "SSSER";
$tdatademo_useractive[".listFields"][] = "SSSEC";
$tdatademo_useractive[".listFields"][] = "PhilHealthEE";
$tdatademo_useractive[".listFields"][] = "PhilHealthER";
$tdatademo_useractive[".listFields"][] = "PagIbigEE";
$tdatademo_useractive[".listFields"][] = "PagIbigER";
$tdatademo_useractive[".listFields"][] = "NoLateDeduction";
$tdatademo_useractive[".listFields"][] = "GracePeriodMins";
$tdatademo_useractive[".listFields"][] = "WithAdditionalBreaks";
$tdatademo_useractive[".listFields"][] = "IncludeBreakLate";
$tdatademo_useractive[".listFields"][] = "user_id";
$tdatademo_useractive[".listFields"][] = "LateFixPenalty";
$tdatademo_useractive[".listFields"][] = "DateCreated";
$tdatademo_useractive[".listFields"][] = "Preparedby";
$tdatademo_useractive[".listFields"][] = "Checked";
$tdatademo_useractive[".listFields"][] = "Checkedby";
$tdatademo_useractive[".listFields"][] = "CheckedDate";
$tdatademo_useractive[".listFields"][] = "Approved";
$tdatademo_useractive[".listFields"][] = "Approvedby";
$tdatademo_useractive[".listFields"][] = "ApprovedDate";

$tdatademo_useractive[".hideMobileList"] = array();


$tdatademo_useractive[".viewFields"] = array();
$tdatademo_useractive[".viewFields"][] = "EmployeeID";
$tdatademo_useractive[".viewFields"][] = "IDNo";
$tdatademo_useractive[".viewFields"][] = "Photo";
$tdatademo_useractive[".viewFields"][] = "user_name";
$tdatademo_useractive[".viewFields"][] = "Employer";
$tdatademo_useractive[".viewFields"][] = "Division";
$tdatademo_useractive[".viewFields"][] = "Department";
$tdatademo_useractive[".viewFields"][] = "HiredDate";
$tdatademo_useractive[".viewFields"][] = "Inactive";
$tdatademo_useractive[".viewFields"][] = "ExitDate";
$tdatademo_useractive[".viewFields"][] = "Status";
$tdatademo_useractive[".viewFields"][] = "Position";
$tdatademo_useractive[".viewFields"][] = "Superior";
$tdatademo_useractive[".viewFields"][] = "Superior2";
$tdatademo_useractive[".viewFields"][] = "Mobile";
$tdatademo_useractive[".viewFields"][] = "Address";
$tdatademo_useractive[".viewFields"][] = "Birthday";
$tdatademo_useractive[".viewFields"][] = "Email";
$tdatademo_useractive[".viewFields"][] = "SSSNo";
$tdatademo_useractive[".viewFields"][] = "PagIbigNo";
$tdatademo_useractive[".viewFields"][] = "PhilHealthNo";
$tdatademo_useractive[".viewFields"][] = "TIN";
$tdatademo_useractive[".viewFields"][] = "Bank";
$tdatademo_useractive[".viewFields"][] = "AccountNo";
$tdatademo_useractive[".viewFields"][] = "AllowableSickLeave";
$tdatademo_useractive[".viewFields"][] = "AllowableVacationLeave";
$tdatademo_useractive[".viewFields"][] = "AllowableEmergencyLeave";
$tdatademo_useractive[".viewFields"][] = "AllowablePaternityLeave";
$tdatademo_useractive[".viewFields"][] = "EmployeeType";
$tdatademo_useractive[".viewFields"][] = "Level";
$tdatademo_useractive[".viewFields"][] = "DoNotUpdateContributions";
$tdatademo_useractive[".viewFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_useractive[".viewFields"][] = "SSSEE";
$tdatademo_useractive[".viewFields"][] = "SSSER";
$tdatademo_useractive[".viewFields"][] = "SSSEC";
$tdatademo_useractive[".viewFields"][] = "PhilHealthEE";
$tdatademo_useractive[".viewFields"][] = "PhilHealthER";
$tdatademo_useractive[".viewFields"][] = "PagIbigEE";
$tdatademo_useractive[".viewFields"][] = "PagIbigER";
$tdatademo_useractive[".viewFields"][] = "NoLateDeduction";
$tdatademo_useractive[".viewFields"][] = "GracePeriodMins";
$tdatademo_useractive[".viewFields"][] = "WithAdditionalBreaks";
$tdatademo_useractive[".viewFields"][] = "IncludeBreakLate";
$tdatademo_useractive[".viewFields"][] = "user_id";
$tdatademo_useractive[".viewFields"][] = "LateFixPenalty";
$tdatademo_useractive[".viewFields"][] = "DateCreated";
$tdatademo_useractive[".viewFields"][] = "Preparedby";
$tdatademo_useractive[".viewFields"][] = "Checked";
$tdatademo_useractive[".viewFields"][] = "Checkedby";
$tdatademo_useractive[".viewFields"][] = "CheckedDate";
$tdatademo_useractive[".viewFields"][] = "Approved";
$tdatademo_useractive[".viewFields"][] = "Approvedby";
$tdatademo_useractive[".viewFields"][] = "ApprovedDate";

$tdatademo_useractive[".addFields"] = array();
$tdatademo_useractive[".addFields"][] = "EmployeeID";
$tdatademo_useractive[".addFields"][] = "IDNo";
$tdatademo_useractive[".addFields"][] = "Photo";
$tdatademo_useractive[".addFields"][] = "user_name";
$tdatademo_useractive[".addFields"][] = "Employer";
$tdatademo_useractive[".addFields"][] = "Division";
$tdatademo_useractive[".addFields"][] = "Department";
$tdatademo_useractive[".addFields"][] = "HiredDate";
$tdatademo_useractive[".addFields"][] = "Inactive";
$tdatademo_useractive[".addFields"][] = "ExitDate";
$tdatademo_useractive[".addFields"][] = "Status";
$tdatademo_useractive[".addFields"][] = "Position";
$tdatademo_useractive[".addFields"][] = "Superior";
$tdatademo_useractive[".addFields"][] = "Superior2";
$tdatademo_useractive[".addFields"][] = "Mobile";
$tdatademo_useractive[".addFields"][] = "Address";
$tdatademo_useractive[".addFields"][] = "Birthday";
$tdatademo_useractive[".addFields"][] = "Email";
$tdatademo_useractive[".addFields"][] = "SSSNo";
$tdatademo_useractive[".addFields"][] = "PagIbigNo";
$tdatademo_useractive[".addFields"][] = "PhilHealthNo";
$tdatademo_useractive[".addFields"][] = "TIN";
$tdatademo_useractive[".addFields"][] = "Bank";
$tdatademo_useractive[".addFields"][] = "AccountNo";
$tdatademo_useractive[".addFields"][] = "AllowableSickLeave";
$tdatademo_useractive[".addFields"][] = "AllowableVacationLeave";
$tdatademo_useractive[".addFields"][] = "AllowableEmergencyLeave";
$tdatademo_useractive[".addFields"][] = "AllowablePaternityLeave";
$tdatademo_useractive[".addFields"][] = "EmployeeType";
$tdatademo_useractive[".addFields"][] = "Level";
$tdatademo_useractive[".addFields"][] = "DoNotUpdateContributions";
$tdatademo_useractive[".addFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_useractive[".addFields"][] = "SSSEE";
$tdatademo_useractive[".addFields"][] = "SSSER";
$tdatademo_useractive[".addFields"][] = "SSSEC";
$tdatademo_useractive[".addFields"][] = "PhilHealthEE";
$tdatademo_useractive[".addFields"][] = "PhilHealthER";
$tdatademo_useractive[".addFields"][] = "PagIbigEE";
$tdatademo_useractive[".addFields"][] = "PagIbigER";
$tdatademo_useractive[".addFields"][] = "NoLateDeduction";
$tdatademo_useractive[".addFields"][] = "GracePeriodMins";
$tdatademo_useractive[".addFields"][] = "WithAdditionalBreaks";
$tdatademo_useractive[".addFields"][] = "IncludeBreakLate";
$tdatademo_useractive[".addFields"][] = "LateFixPenalty";
$tdatademo_useractive[".addFields"][] = "DateCreated";
$tdatademo_useractive[".addFields"][] = "Preparedby";
$tdatademo_useractive[".addFields"][] = "Checked";
$tdatademo_useractive[".addFields"][] = "Checkedby";
$tdatademo_useractive[".addFields"][] = "CheckedDate";
$tdatademo_useractive[".addFields"][] = "Approved";
$tdatademo_useractive[".addFields"][] = "Approvedby";
$tdatademo_useractive[".addFields"][] = "ApprovedDate";

$tdatademo_useractive[".masterListFields"] = array();
$tdatademo_useractive[".masterListFields"][] = "EmployeeID";
$tdatademo_useractive[".masterListFields"][] = "IDNo";
$tdatademo_useractive[".masterListFields"][] = "Photo";
$tdatademo_useractive[".masterListFields"][] = "user_name";
$tdatademo_useractive[".masterListFields"][] = "Employer";
$tdatademo_useractive[".masterListFields"][] = "Division";
$tdatademo_useractive[".masterListFields"][] = "Department";
$tdatademo_useractive[".masterListFields"][] = "HiredDate";
$tdatademo_useractive[".masterListFields"][] = "Inactive";
$tdatademo_useractive[".masterListFields"][] = "ExitDate";
$tdatademo_useractive[".masterListFields"][] = "Status";
$tdatademo_useractive[".masterListFields"][] = "Position";
$tdatademo_useractive[".masterListFields"][] = "Superior";
$tdatademo_useractive[".masterListFields"][] = "Superior2";
$tdatademo_useractive[".masterListFields"][] = "Mobile";
$tdatademo_useractive[".masterListFields"][] = "Address";
$tdatademo_useractive[".masterListFields"][] = "Birthday";
$tdatademo_useractive[".masterListFields"][] = "Email";
$tdatademo_useractive[".masterListFields"][] = "SSSNo";
$tdatademo_useractive[".masterListFields"][] = "PagIbigNo";
$tdatademo_useractive[".masterListFields"][] = "PhilHealthNo";
$tdatademo_useractive[".masterListFields"][] = "TIN";
$tdatademo_useractive[".masterListFields"][] = "Bank";
$tdatademo_useractive[".masterListFields"][] = "AccountNo";
$tdatademo_useractive[".masterListFields"][] = "AllowableSickLeave";
$tdatademo_useractive[".masterListFields"][] = "AllowableVacationLeave";
$tdatademo_useractive[".masterListFields"][] = "AllowableEmergencyLeave";
$tdatademo_useractive[".masterListFields"][] = "AllowablePaternityLeave";
$tdatademo_useractive[".masterListFields"][] = "EmployeeType";
$tdatademo_useractive[".masterListFields"][] = "Level";
$tdatademo_useractive[".masterListFields"][] = "DoNotUpdateContributions";
$tdatademo_useractive[".masterListFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_useractive[".masterListFields"][] = "SSSEE";
$tdatademo_useractive[".masterListFields"][] = "SSSER";
$tdatademo_useractive[".masterListFields"][] = "SSSEC";
$tdatademo_useractive[".masterListFields"][] = "PhilHealthEE";
$tdatademo_useractive[".masterListFields"][] = "PhilHealthER";
$tdatademo_useractive[".masterListFields"][] = "PagIbigEE";
$tdatademo_useractive[".masterListFields"][] = "PagIbigER";
$tdatademo_useractive[".masterListFields"][] = "NoLateDeduction";
$tdatademo_useractive[".masterListFields"][] = "GracePeriodMins";
$tdatademo_useractive[".masterListFields"][] = "WithAdditionalBreaks";
$tdatademo_useractive[".masterListFields"][] = "IncludeBreakLate";
$tdatademo_useractive[".masterListFields"][] = "user_id";
$tdatademo_useractive[".masterListFields"][] = "LateFixPenalty";
$tdatademo_useractive[".masterListFields"][] = "DateCreated";
$tdatademo_useractive[".masterListFields"][] = "Preparedby";
$tdatademo_useractive[".masterListFields"][] = "Checked";
$tdatademo_useractive[".masterListFields"][] = "Checkedby";
$tdatademo_useractive[".masterListFields"][] = "CheckedDate";
$tdatademo_useractive[".masterListFields"][] = "Approved";
$tdatademo_useractive[".masterListFields"][] = "Approvedby";
$tdatademo_useractive[".masterListFields"][] = "ApprovedDate";

$tdatademo_useractive[".inlineAddFields"] = array();
$tdatademo_useractive[".inlineAddFields"][] = "EmployeeID";
$tdatademo_useractive[".inlineAddFields"][] = "IDNo";
$tdatademo_useractive[".inlineAddFields"][] = "Photo";
$tdatademo_useractive[".inlineAddFields"][] = "user_name";
$tdatademo_useractive[".inlineAddFields"][] = "Employer";
$tdatademo_useractive[".inlineAddFields"][] = "Division";
$tdatademo_useractive[".inlineAddFields"][] = "Department";
$tdatademo_useractive[".inlineAddFields"][] = "HiredDate";
$tdatademo_useractive[".inlineAddFields"][] = "Inactive";
$tdatademo_useractive[".inlineAddFields"][] = "ExitDate";
$tdatademo_useractive[".inlineAddFields"][] = "Status";
$tdatademo_useractive[".inlineAddFields"][] = "Position";
$tdatademo_useractive[".inlineAddFields"][] = "Superior";
$tdatademo_useractive[".inlineAddFields"][] = "Superior2";
$tdatademo_useractive[".inlineAddFields"][] = "Mobile";
$tdatademo_useractive[".inlineAddFields"][] = "Address";
$tdatademo_useractive[".inlineAddFields"][] = "Birthday";
$tdatademo_useractive[".inlineAddFields"][] = "Email";
$tdatademo_useractive[".inlineAddFields"][] = "SSSNo";
$tdatademo_useractive[".inlineAddFields"][] = "PagIbigNo";
$tdatademo_useractive[".inlineAddFields"][] = "PhilHealthNo";
$tdatademo_useractive[".inlineAddFields"][] = "TIN";
$tdatademo_useractive[".inlineAddFields"][] = "Bank";
$tdatademo_useractive[".inlineAddFields"][] = "AccountNo";
$tdatademo_useractive[".inlineAddFields"][] = "AllowableSickLeave";
$tdatademo_useractive[".inlineAddFields"][] = "AllowableVacationLeave";
$tdatademo_useractive[".inlineAddFields"][] = "AllowableEmergencyLeave";
$tdatademo_useractive[".inlineAddFields"][] = "AllowablePaternityLeave";
$tdatademo_useractive[".inlineAddFields"][] = "EmployeeType";
$tdatademo_useractive[".inlineAddFields"][] = "Level";
$tdatademo_useractive[".inlineAddFields"][] = "DoNotUpdateContributions";
$tdatademo_useractive[".inlineAddFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_useractive[".inlineAddFields"][] = "SSSEE";
$tdatademo_useractive[".inlineAddFields"][] = "SSSER";
$tdatademo_useractive[".inlineAddFields"][] = "SSSEC";
$tdatademo_useractive[".inlineAddFields"][] = "PhilHealthEE";
$tdatademo_useractive[".inlineAddFields"][] = "PhilHealthER";
$tdatademo_useractive[".inlineAddFields"][] = "PagIbigEE";
$tdatademo_useractive[".inlineAddFields"][] = "PagIbigER";
$tdatademo_useractive[".inlineAddFields"][] = "NoLateDeduction";
$tdatademo_useractive[".inlineAddFields"][] = "GracePeriodMins";
$tdatademo_useractive[".inlineAddFields"][] = "WithAdditionalBreaks";
$tdatademo_useractive[".inlineAddFields"][] = "IncludeBreakLate";
$tdatademo_useractive[".inlineAddFields"][] = "LateFixPenalty";
$tdatademo_useractive[".inlineAddFields"][] = "DateCreated";
$tdatademo_useractive[".inlineAddFields"][] = "Preparedby";
$tdatademo_useractive[".inlineAddFields"][] = "Checked";
$tdatademo_useractive[".inlineAddFields"][] = "Checkedby";
$tdatademo_useractive[".inlineAddFields"][] = "CheckedDate";
$tdatademo_useractive[".inlineAddFields"][] = "Approved";
$tdatademo_useractive[".inlineAddFields"][] = "Approvedby";
$tdatademo_useractive[".inlineAddFields"][] = "ApprovedDate";

$tdatademo_useractive[".editFields"] = array();
$tdatademo_useractive[".editFields"][] = "EmployeeID";
$tdatademo_useractive[".editFields"][] = "IDNo";
$tdatademo_useractive[".editFields"][] = "Photo";
$tdatademo_useractive[".editFields"][] = "user_name";
$tdatademo_useractive[".editFields"][] = "Employer";
$tdatademo_useractive[".editFields"][] = "Division";
$tdatademo_useractive[".editFields"][] = "Department";
$tdatademo_useractive[".editFields"][] = "HiredDate";
$tdatademo_useractive[".editFields"][] = "Inactive";
$tdatademo_useractive[".editFields"][] = "ExitDate";
$tdatademo_useractive[".editFields"][] = "Status";
$tdatademo_useractive[".editFields"][] = "Position";
$tdatademo_useractive[".editFields"][] = "Superior";
$tdatademo_useractive[".editFields"][] = "Superior2";
$tdatademo_useractive[".editFields"][] = "Mobile";
$tdatademo_useractive[".editFields"][] = "Address";
$tdatademo_useractive[".editFields"][] = "Birthday";
$tdatademo_useractive[".editFields"][] = "Email";
$tdatademo_useractive[".editFields"][] = "SSSNo";
$tdatademo_useractive[".editFields"][] = "PagIbigNo";
$tdatademo_useractive[".editFields"][] = "PhilHealthNo";
$tdatademo_useractive[".editFields"][] = "TIN";
$tdatademo_useractive[".editFields"][] = "Bank";
$tdatademo_useractive[".editFields"][] = "AccountNo";
$tdatademo_useractive[".editFields"][] = "AllowableSickLeave";
$tdatademo_useractive[".editFields"][] = "AllowableVacationLeave";
$tdatademo_useractive[".editFields"][] = "AllowableEmergencyLeave";
$tdatademo_useractive[".editFields"][] = "AllowablePaternityLeave";
$tdatademo_useractive[".editFields"][] = "EmployeeType";
$tdatademo_useractive[".editFields"][] = "Level";
$tdatademo_useractive[".editFields"][] = "DoNotUpdateContributions";
$tdatademo_useractive[".editFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_useractive[".editFields"][] = "SSSEE";
$tdatademo_useractive[".editFields"][] = "SSSER";
$tdatademo_useractive[".editFields"][] = "SSSEC";
$tdatademo_useractive[".editFields"][] = "PhilHealthEE";
$tdatademo_useractive[".editFields"][] = "PhilHealthER";
$tdatademo_useractive[".editFields"][] = "PagIbigEE";
$tdatademo_useractive[".editFields"][] = "PagIbigER";
$tdatademo_useractive[".editFields"][] = "NoLateDeduction";
$tdatademo_useractive[".editFields"][] = "GracePeriodMins";
$tdatademo_useractive[".editFields"][] = "WithAdditionalBreaks";
$tdatademo_useractive[".editFields"][] = "IncludeBreakLate";
$tdatademo_useractive[".editFields"][] = "LateFixPenalty";
$tdatademo_useractive[".editFields"][] = "DateCreated";
$tdatademo_useractive[".editFields"][] = "Preparedby";
$tdatademo_useractive[".editFields"][] = "Checked";
$tdatademo_useractive[".editFields"][] = "Checkedby";
$tdatademo_useractive[".editFields"][] = "CheckedDate";
$tdatademo_useractive[".editFields"][] = "Approved";
$tdatademo_useractive[".editFields"][] = "Approvedby";
$tdatademo_useractive[".editFields"][] = "ApprovedDate";

$tdatademo_useractive[".inlineEditFields"] = array();
$tdatademo_useractive[".inlineEditFields"][] = "EmployeeID";
$tdatademo_useractive[".inlineEditFields"][] = "IDNo";
$tdatademo_useractive[".inlineEditFields"][] = "Photo";
$tdatademo_useractive[".inlineEditFields"][] = "user_name";
$tdatademo_useractive[".inlineEditFields"][] = "Employer";
$tdatademo_useractive[".inlineEditFields"][] = "Division";
$tdatademo_useractive[".inlineEditFields"][] = "Department";
$tdatademo_useractive[".inlineEditFields"][] = "HiredDate";
$tdatademo_useractive[".inlineEditFields"][] = "Inactive";
$tdatademo_useractive[".inlineEditFields"][] = "ExitDate";
$tdatademo_useractive[".inlineEditFields"][] = "Status";
$tdatademo_useractive[".inlineEditFields"][] = "Position";
$tdatademo_useractive[".inlineEditFields"][] = "Superior";
$tdatademo_useractive[".inlineEditFields"][] = "Superior2";
$tdatademo_useractive[".inlineEditFields"][] = "Mobile";
$tdatademo_useractive[".inlineEditFields"][] = "Address";
$tdatademo_useractive[".inlineEditFields"][] = "Birthday";
$tdatademo_useractive[".inlineEditFields"][] = "Email";
$tdatademo_useractive[".inlineEditFields"][] = "SSSNo";
$tdatademo_useractive[".inlineEditFields"][] = "PagIbigNo";
$tdatademo_useractive[".inlineEditFields"][] = "PhilHealthNo";
$tdatademo_useractive[".inlineEditFields"][] = "TIN";
$tdatademo_useractive[".inlineEditFields"][] = "Bank";
$tdatademo_useractive[".inlineEditFields"][] = "AccountNo";
$tdatademo_useractive[".inlineEditFields"][] = "AllowableSickLeave";
$tdatademo_useractive[".inlineEditFields"][] = "AllowableVacationLeave";
$tdatademo_useractive[".inlineEditFields"][] = "AllowableEmergencyLeave";
$tdatademo_useractive[".inlineEditFields"][] = "AllowablePaternityLeave";
$tdatademo_useractive[".inlineEditFields"][] = "EmployeeType";
$tdatademo_useractive[".inlineEditFields"][] = "Level";
$tdatademo_useractive[".inlineEditFields"][] = "DoNotUpdateContributions";
$tdatademo_useractive[".inlineEditFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_useractive[".inlineEditFields"][] = "SSSEE";
$tdatademo_useractive[".inlineEditFields"][] = "SSSER";
$tdatademo_useractive[".inlineEditFields"][] = "SSSEC";
$tdatademo_useractive[".inlineEditFields"][] = "PhilHealthEE";
$tdatademo_useractive[".inlineEditFields"][] = "PhilHealthER";
$tdatademo_useractive[".inlineEditFields"][] = "PagIbigEE";
$tdatademo_useractive[".inlineEditFields"][] = "PagIbigER";
$tdatademo_useractive[".inlineEditFields"][] = "NoLateDeduction";
$tdatademo_useractive[".inlineEditFields"][] = "GracePeriodMins";
$tdatademo_useractive[".inlineEditFields"][] = "WithAdditionalBreaks";
$tdatademo_useractive[".inlineEditFields"][] = "IncludeBreakLate";
$tdatademo_useractive[".inlineEditFields"][] = "LateFixPenalty";
$tdatademo_useractive[".inlineEditFields"][] = "DateCreated";
$tdatademo_useractive[".inlineEditFields"][] = "Preparedby";
$tdatademo_useractive[".inlineEditFields"][] = "Checked";
$tdatademo_useractive[".inlineEditFields"][] = "Checkedby";
$tdatademo_useractive[".inlineEditFields"][] = "CheckedDate";
$tdatademo_useractive[".inlineEditFields"][] = "Approved";
$tdatademo_useractive[".inlineEditFields"][] = "Approvedby";
$tdatademo_useractive[".inlineEditFields"][] = "ApprovedDate";

$tdatademo_useractive[".updateSelectedFields"] = array();
$tdatademo_useractive[".updateSelectedFields"][] = "Employer";
$tdatademo_useractive[".updateSelectedFields"][] = "Division";
$tdatademo_useractive[".updateSelectedFields"][] = "Department";
$tdatademo_useractive[".updateSelectedFields"][] = "HiredDate";
$tdatademo_useractive[".updateSelectedFields"][] = "Inactive";
$tdatademo_useractive[".updateSelectedFields"][] = "ExitDate";
$tdatademo_useractive[".updateSelectedFields"][] = "Status";
$tdatademo_useractive[".updateSelectedFields"][] = "Position";
$tdatademo_useractive[".updateSelectedFields"][] = "Superior";
$tdatademo_useractive[".updateSelectedFields"][] = "Superior2";
$tdatademo_useractive[".updateSelectedFields"][] = "Bank";
$tdatademo_useractive[".updateSelectedFields"][] = "AllowableSickLeave";
$tdatademo_useractive[".updateSelectedFields"][] = "AllowableVacationLeave";
$tdatademo_useractive[".updateSelectedFields"][] = "AllowableEmergencyLeave";
$tdatademo_useractive[".updateSelectedFields"][] = "AllowablePaternityLeave";
$tdatademo_useractive[".updateSelectedFields"][] = "EmployeeType";
$tdatademo_useractive[".updateSelectedFields"][] = "Level";
$tdatademo_useractive[".updateSelectedFields"][] = "DoNotUpdateContributions";
$tdatademo_useractive[".updateSelectedFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_useractive[".updateSelectedFields"][] = "SSSEE";
$tdatademo_useractive[".updateSelectedFields"][] = "SSSER";
$tdatademo_useractive[".updateSelectedFields"][] = "SSSEC";
$tdatademo_useractive[".updateSelectedFields"][] = "PhilHealthEE";
$tdatademo_useractive[".updateSelectedFields"][] = "PhilHealthER";
$tdatademo_useractive[".updateSelectedFields"][] = "PagIbigEE";
$tdatademo_useractive[".updateSelectedFields"][] = "PagIbigER";
$tdatademo_useractive[".updateSelectedFields"][] = "LateFixPenalty";
$tdatademo_useractive[".updateSelectedFields"][] = "DateCreated";
$tdatademo_useractive[".updateSelectedFields"][] = "Preparedby";
$tdatademo_useractive[".updateSelectedFields"][] = "Checked";
$tdatademo_useractive[".updateSelectedFields"][] = "Checkedby";
$tdatademo_useractive[".updateSelectedFields"][] = "CheckedDate";
$tdatademo_useractive[".updateSelectedFields"][] = "Approved";
$tdatademo_useractive[".updateSelectedFields"][] = "Approvedby";
$tdatademo_useractive[".updateSelectedFields"][] = "ApprovedDate";


$tdatademo_useractive[".exportFields"] = array();
$tdatademo_useractive[".exportFields"][] = "EmployeeID";
$tdatademo_useractive[".exportFields"][] = "IDNo";
$tdatademo_useractive[".exportFields"][] = "Photo";
$tdatademo_useractive[".exportFields"][] = "user_name";
$tdatademo_useractive[".exportFields"][] = "Employer";
$tdatademo_useractive[".exportFields"][] = "Division";
$tdatademo_useractive[".exportFields"][] = "Department";
$tdatademo_useractive[".exportFields"][] = "HiredDate";
$tdatademo_useractive[".exportFields"][] = "Inactive";
$tdatademo_useractive[".exportFields"][] = "ExitDate";
$tdatademo_useractive[".exportFields"][] = "Status";
$tdatademo_useractive[".exportFields"][] = "Position";
$tdatademo_useractive[".exportFields"][] = "Superior";
$tdatademo_useractive[".exportFields"][] = "Superior2";
$tdatademo_useractive[".exportFields"][] = "Mobile";
$tdatademo_useractive[".exportFields"][] = "Address";
$tdatademo_useractive[".exportFields"][] = "Birthday";
$tdatademo_useractive[".exportFields"][] = "Email";
$tdatademo_useractive[".exportFields"][] = "SSSNo";
$tdatademo_useractive[".exportFields"][] = "PagIbigNo";
$tdatademo_useractive[".exportFields"][] = "PhilHealthNo";
$tdatademo_useractive[".exportFields"][] = "TIN";
$tdatademo_useractive[".exportFields"][] = "Bank";
$tdatademo_useractive[".exportFields"][] = "AccountNo";
$tdatademo_useractive[".exportFields"][] = "AllowableSickLeave";
$tdatademo_useractive[".exportFields"][] = "AllowableVacationLeave";
$tdatademo_useractive[".exportFields"][] = "AllowableEmergencyLeave";
$tdatademo_useractive[".exportFields"][] = "AllowablePaternityLeave";
$tdatademo_useractive[".exportFields"][] = "EmployeeType";
$tdatademo_useractive[".exportFields"][] = "Level";
$tdatademo_useractive[".exportFields"][] = "DoNotUpdateContributions";
$tdatademo_useractive[".exportFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_useractive[".exportFields"][] = "SSSEE";
$tdatademo_useractive[".exportFields"][] = "SSSER";
$tdatademo_useractive[".exportFields"][] = "SSSEC";
$tdatademo_useractive[".exportFields"][] = "PhilHealthEE";
$tdatademo_useractive[".exportFields"][] = "PhilHealthER";
$tdatademo_useractive[".exportFields"][] = "PagIbigEE";
$tdatademo_useractive[".exportFields"][] = "PagIbigER";
$tdatademo_useractive[".exportFields"][] = "NoLateDeduction";
$tdatademo_useractive[".exportFields"][] = "GracePeriodMins";
$tdatademo_useractive[".exportFields"][] = "WithAdditionalBreaks";
$tdatademo_useractive[".exportFields"][] = "IncludeBreakLate";
$tdatademo_useractive[".exportFields"][] = "user_id";
$tdatademo_useractive[".exportFields"][] = "LateFixPenalty";
$tdatademo_useractive[".exportFields"][] = "DateCreated";
$tdatademo_useractive[".exportFields"][] = "Preparedby";
$tdatademo_useractive[".exportFields"][] = "Checked";
$tdatademo_useractive[".exportFields"][] = "Checkedby";
$tdatademo_useractive[".exportFields"][] = "CheckedDate";
$tdatademo_useractive[".exportFields"][] = "Approved";
$tdatademo_useractive[".exportFields"][] = "Approvedby";
$tdatademo_useractive[".exportFields"][] = "ApprovedDate";

$tdatademo_useractive[".importFields"] = array();
$tdatademo_useractive[".importFields"][] = "user_id";
$tdatademo_useractive[".importFields"][] = "user_name";
$tdatademo_useractive[".importFields"][] = "Photo";
$tdatademo_useractive[".importFields"][] = "SSSNo";
$tdatademo_useractive[".importFields"][] = "TIN";
$tdatademo_useractive[".importFields"][] = "Mobile";
$tdatademo_useractive[".importFields"][] = "Address";
$tdatademo_useractive[".importFields"][] = "Email";
$tdatademo_useractive[".importFields"][] = "EmployeeType";
$tdatademo_useractive[".importFields"][] = "EmployeeID";
$tdatademo_useractive[".importFields"][] = "Division";
$tdatademo_useractive[".importFields"][] = "Status";
$tdatademo_useractive[".importFields"][] = "Department";
$tdatademo_useractive[".importFields"][] = "AllowableSickLeave";
$tdatademo_useractive[".importFields"][] = "AllowableVacationLeave";
$tdatademo_useractive[".importFields"][] = "AllowableEmergencyLeave";
$tdatademo_useractive[".importFields"][] = "SSSEE";
$tdatademo_useractive[".importFields"][] = "SSSER";
$tdatademo_useractive[".importFields"][] = "PhilHealthEE";
$tdatademo_useractive[".importFields"][] = "PhilHealthER";
$tdatademo_useractive[".importFields"][] = "PagIbigEE";
$tdatademo_useractive[".importFields"][] = "AllowablePaternityLeave";
$tdatademo_useractive[".importFields"][] = "HiredDate";
$tdatademo_useractive[".importFields"][] = "Inactive";
$tdatademo_useractive[".importFields"][] = "ExitDate";
$tdatademo_useractive[".importFields"][] = "PagIbigER";
$tdatademo_useractive[".importFields"][] = "PagIbigNo";
$tdatademo_useractive[".importFields"][] = "PhilHealthNo";
$tdatademo_useractive[".importFields"][] = "SSSEC";
$tdatademo_useractive[".importFields"][] = "Level";
$tdatademo_useractive[".importFields"][] = "DateCreated";
$tdatademo_useractive[".importFields"][] = "ApprovedDate";
$tdatademo_useractive[".importFields"][] = "Approved";
$tdatademo_useractive[".importFields"][] = "Approvedby";
$tdatademo_useractive[".importFields"][] = "Preparedby";
$tdatademo_useractive[".importFields"][] = "Checkedby";
$tdatademo_useractive[".importFields"][] = "CheckedDate";
$tdatademo_useractive[".importFields"][] = "Checked";
$tdatademo_useractive[".importFields"][] = "Superior";
$tdatademo_useractive[".importFields"][] = "Position";
$tdatademo_useractive[".importFields"][] = "Employer";
$tdatademo_useractive[".importFields"][] = "IDNo";
$tdatademo_useractive[".importFields"][] = "AccountNo";
$tdatademo_useractive[".importFields"][] = "LateFixPenalty";
$tdatademo_useractive[".importFields"][] = "DoNotUpdateContributions";
$tdatademo_useractive[".importFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_useractive[".importFields"][] = "Birthday";
$tdatademo_useractive[".importFields"][] = "Bank";
$tdatademo_useractive[".importFields"][] = "NoLateDeduction";
$tdatademo_useractive[".importFields"][] = "IncludeBreakLate";
$tdatademo_useractive[".importFields"][] = "GracePeriodMins";
$tdatademo_useractive[".importFields"][] = "WithAdditionalBreaks";
$tdatademo_useractive[".importFields"][] = "Superior2";

$tdatademo_useractive[".printFields"] = array();
$tdatademo_useractive[".printFields"][] = "EmployeeID";
$tdatademo_useractive[".printFields"][] = "IDNo";
$tdatademo_useractive[".printFields"][] = "Photo";
$tdatademo_useractive[".printFields"][] = "user_name";
$tdatademo_useractive[".printFields"][] = "Employer";
$tdatademo_useractive[".printFields"][] = "Division";
$tdatademo_useractive[".printFields"][] = "Department";
$tdatademo_useractive[".printFields"][] = "HiredDate";
$tdatademo_useractive[".printFields"][] = "Inactive";
$tdatademo_useractive[".printFields"][] = "ExitDate";
$tdatademo_useractive[".printFields"][] = "Status";
$tdatademo_useractive[".printFields"][] = "Position";
$tdatademo_useractive[".printFields"][] = "Superior";
$tdatademo_useractive[".printFields"][] = "Superior2";
$tdatademo_useractive[".printFields"][] = "Mobile";
$tdatademo_useractive[".printFields"][] = "Address";
$tdatademo_useractive[".printFields"][] = "Birthday";
$tdatademo_useractive[".printFields"][] = "Email";
$tdatademo_useractive[".printFields"][] = "SSSNo";
$tdatademo_useractive[".printFields"][] = "PagIbigNo";
$tdatademo_useractive[".printFields"][] = "PhilHealthNo";
$tdatademo_useractive[".printFields"][] = "TIN";
$tdatademo_useractive[".printFields"][] = "Bank";
$tdatademo_useractive[".printFields"][] = "AccountNo";
$tdatademo_useractive[".printFields"][] = "AllowableSickLeave";
$tdatademo_useractive[".printFields"][] = "AllowableVacationLeave";
$tdatademo_useractive[".printFields"][] = "AllowableEmergencyLeave";
$tdatademo_useractive[".printFields"][] = "AllowablePaternityLeave";
$tdatademo_useractive[".printFields"][] = "EmployeeType";
$tdatademo_useractive[".printFields"][] = "Level";
$tdatademo_useractive[".printFields"][] = "DoNotUpdateContributions";
$tdatademo_useractive[".printFields"][] = "ExcludeContributionOnPayroll";
$tdatademo_useractive[".printFields"][] = "SSSEE";
$tdatademo_useractive[".printFields"][] = "SSSER";
$tdatademo_useractive[".printFields"][] = "SSSEC";
$tdatademo_useractive[".printFields"][] = "PhilHealthEE";
$tdatademo_useractive[".printFields"][] = "PhilHealthER";
$tdatademo_useractive[".printFields"][] = "PagIbigEE";
$tdatademo_useractive[".printFields"][] = "PagIbigER";
$tdatademo_useractive[".printFields"][] = "NoLateDeduction";
$tdatademo_useractive[".printFields"][] = "GracePeriodMins";
$tdatademo_useractive[".printFields"][] = "WithAdditionalBreaks";
$tdatademo_useractive[".printFields"][] = "IncludeBreakLate";
$tdatademo_useractive[".printFields"][] = "user_id";
$tdatademo_useractive[".printFields"][] = "LateFixPenalty";
$tdatademo_useractive[".printFields"][] = "DateCreated";
$tdatademo_useractive[".printFields"][] = "Preparedby";
$tdatademo_useractive[".printFields"][] = "Checked";
$tdatademo_useractive[".printFields"][] = "Checkedby";
$tdatademo_useractive[".printFields"][] = "CheckedDate";
$tdatademo_useractive[".printFields"][] = "Approved";
$tdatademo_useractive[".printFields"][] = "Approvedby";
$tdatademo_useractive[".printFields"][] = "ApprovedDate";


//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","user_id");
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




	$tdatademo_useractive["user_id"] = $fdata;
//	user_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_name";
	$fdata["GoodName"] = "user_name";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","user_name");
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




	$tdatademo_useractive["user_name"] = $fdata;
//	Photo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Photo";
	$fdata["GoodName"] = "Photo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","Photo");
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




	$tdatademo_useractive["Photo"] = $fdata;
//	SSSNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SSSNo";
	$fdata["GoodName"] = "SSSNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","SSSNo");
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




	$tdatademo_useractive["SSSNo"] = $fdata;
//	TIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TIN";
	$fdata["GoodName"] = "TIN";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","TIN");
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




	$tdatademo_useractive["TIN"] = $fdata;
//	Mobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Mobile";
	$fdata["GoodName"] = "Mobile";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","Mobile");
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




	$tdatademo_useractive["Mobile"] = $fdata;
//	Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Address";
	$fdata["GoodName"] = "Address";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","Address");
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




	$tdatademo_useractive["Address"] = $fdata;
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","Email");
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




	$tdatademo_useractive["Email"] = $fdata;
//	EmployeeType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "EmployeeType";
	$fdata["GoodName"] = "EmployeeType";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","EmployeeType");
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




	$tdatademo_useractive["EmployeeType"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","EmployeeID");
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




	$tdatademo_useractive["EmployeeID"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","Division");
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




	$tdatademo_useractive["Division"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","Status");
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




	$tdatademo_useractive["Status"] = $fdata;
//	Department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Department";
	$fdata["GoodName"] = "Department";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","Department");
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




	$tdatademo_useractive["Department"] = $fdata;
//	AllowableSickLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "AllowableSickLeave";
	$fdata["GoodName"] = "AllowableSickLeave";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","AllowableSickLeave");
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




	$tdatademo_useractive["AllowableSickLeave"] = $fdata;
//	AllowableVacationLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "AllowableVacationLeave";
	$fdata["GoodName"] = "AllowableVacationLeave";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","AllowableVacationLeave");
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




	$tdatademo_useractive["AllowableVacationLeave"] = $fdata;
//	AllowableEmergencyLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "AllowableEmergencyLeave";
	$fdata["GoodName"] = "AllowableEmergencyLeave";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","AllowableEmergencyLeave");
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




	$tdatademo_useractive["AllowableEmergencyLeave"] = $fdata;
//	SSSEE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "SSSEE";
	$fdata["GoodName"] = "SSSEE";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","SSSEE");
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




	$tdatademo_useractive["SSSEE"] = $fdata;
//	SSSER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "SSSER";
	$fdata["GoodName"] = "SSSER";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","SSSER");
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




	$tdatademo_useractive["SSSER"] = $fdata;
//	PhilHealthEE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "PhilHealthEE";
	$fdata["GoodName"] = "PhilHealthEE";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","PhilHealthEE");
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




	$tdatademo_useractive["PhilHealthEE"] = $fdata;
//	PhilHealthER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "PhilHealthER";
	$fdata["GoodName"] = "PhilHealthER";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","PhilHealthER");
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




	$tdatademo_useractive["PhilHealthER"] = $fdata;
//	PagIbigEE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "PagIbigEE";
	$fdata["GoodName"] = "PagIbigEE";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","PagIbigEE");
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




	$tdatademo_useractive["PagIbigEE"] = $fdata;
//	AllowablePaternityLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "AllowablePaternityLeave";
	$fdata["GoodName"] = "AllowablePaternityLeave";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","AllowablePaternityLeave");
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




	$tdatademo_useractive["AllowablePaternityLeave"] = $fdata;
//	HiredDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "HiredDate";
	$fdata["GoodName"] = "HiredDate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","HiredDate");
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




	$tdatademo_useractive["HiredDate"] = $fdata;
//	Inactive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Inactive";
	$fdata["GoodName"] = "Inactive";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","Inactive");
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




	$tdatademo_useractive["Inactive"] = $fdata;
//	ExitDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "ExitDate";
	$fdata["GoodName"] = "ExitDate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","ExitDate");
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




	$tdatademo_useractive["ExitDate"] = $fdata;
//	PagIbigER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "PagIbigER";
	$fdata["GoodName"] = "PagIbigER";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","PagIbigER");
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




	$tdatademo_useractive["PagIbigER"] = $fdata;
//	PagIbigNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "PagIbigNo";
	$fdata["GoodName"] = "PagIbigNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","PagIbigNo");
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




	$tdatademo_useractive["PagIbigNo"] = $fdata;
//	PhilHealthNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "PhilHealthNo";
	$fdata["GoodName"] = "PhilHealthNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","PhilHealthNo");
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




	$tdatademo_useractive["PhilHealthNo"] = $fdata;
//	SSSEC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "SSSEC";
	$fdata["GoodName"] = "SSSEC";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","SSSEC");
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




	$tdatademo_useractive["SSSEC"] = $fdata;
//	Level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Level";
	$fdata["GoodName"] = "Level";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","Level");
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




	$tdatademo_useractive["Level"] = $fdata;
//	DateCreated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "DateCreated";
	$fdata["GoodName"] = "DateCreated";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","DateCreated");
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




	$tdatademo_useractive["DateCreated"] = $fdata;
//	ApprovedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "ApprovedDate";
	$fdata["GoodName"] = "ApprovedDate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","ApprovedDate");
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




	$tdatademo_useractive["ApprovedDate"] = $fdata;
//	Approved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Approved";
	$fdata["GoodName"] = "Approved";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","Approved");
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




	$tdatademo_useractive["Approved"] = $fdata;
//	Approvedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Approvedby";
	$fdata["GoodName"] = "Approvedby";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","Approvedby");
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




	$tdatademo_useractive["Approvedby"] = $fdata;
//	Preparedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Preparedby";
	$fdata["GoodName"] = "Preparedby";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","Preparedby");
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




	$tdatademo_useractive["Preparedby"] = $fdata;
//	Checkedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Checkedby";
	$fdata["GoodName"] = "Checkedby";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","Checkedby");
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




	$tdatademo_useractive["Checkedby"] = $fdata;
//	CheckedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "CheckedDate";
	$fdata["GoodName"] = "CheckedDate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","CheckedDate");
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




	$tdatademo_useractive["CheckedDate"] = $fdata;
//	Checked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Checked";
	$fdata["GoodName"] = "Checked";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","Checked");
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




	$tdatademo_useractive["Checked"] = $fdata;
//	Superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Superior";
	$fdata["GoodName"] = "Superior";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","Superior");
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




	$tdatademo_useractive["Superior"] = $fdata;
//	Position
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Position";
	$fdata["GoodName"] = "Position";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","Position");
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




	$tdatademo_useractive["Position"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","Employer");
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




	$tdatademo_useractive["Employer"] = $fdata;
//	IDNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "IDNo";
	$fdata["GoodName"] = "IDNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","IDNo");
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




	$tdatademo_useractive["IDNo"] = $fdata;
//	AccountNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "AccountNo";
	$fdata["GoodName"] = "AccountNo";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","AccountNo");
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




	$tdatademo_useractive["AccountNo"] = $fdata;
//	LateFixPenalty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "LateFixPenalty";
	$fdata["GoodName"] = "LateFixPenalty";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","LateFixPenalty");
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




	$tdatademo_useractive["LateFixPenalty"] = $fdata;
//	DoNotUpdateContributions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "DoNotUpdateContributions";
	$fdata["GoodName"] = "DoNotUpdateContributions";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","DoNotUpdateContributions");
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




	$tdatademo_useractive["DoNotUpdateContributions"] = $fdata;
//	ExcludeContributionOnPayroll
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "ExcludeContributionOnPayroll";
	$fdata["GoodName"] = "ExcludeContributionOnPayroll";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","ExcludeContributionOnPayroll");
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




	$tdatademo_useractive["ExcludeContributionOnPayroll"] = $fdata;
//	Birthday
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "Birthday";
	$fdata["GoodName"] = "Birthday";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","Birthday");
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




	$tdatademo_useractive["Birthday"] = $fdata;
//	Bank
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "Bank";
	$fdata["GoodName"] = "Bank";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","Bank");
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




	$tdatademo_useractive["Bank"] = $fdata;
//	NoLateDeduction
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "NoLateDeduction";
	$fdata["GoodName"] = "NoLateDeduction";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","NoLateDeduction");
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




	$tdatademo_useractive["NoLateDeduction"] = $fdata;
//	IncludeBreakLate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "IncludeBreakLate";
	$fdata["GoodName"] = "IncludeBreakLate";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","IncludeBreakLate");
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




	$tdatademo_useractive["IncludeBreakLate"] = $fdata;
//	GracePeriodMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "GracePeriodMins";
	$fdata["GoodName"] = "GracePeriodMins";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","GracePeriodMins");
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




	$tdatademo_useractive["GracePeriodMins"] = $fdata;
//	WithAdditionalBreaks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "WithAdditionalBreaks";
	$fdata["GoodName"] = "WithAdditionalBreaks";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","WithAdditionalBreaks");
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




	$tdatademo_useractive["WithAdditionalBreaks"] = $fdata;
//	Superior2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "Superior2";
	$fdata["GoodName"] = "Superior2";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("demo_useractive","Superior2");
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




	$tdatademo_useractive["Superior2"] = $fdata;


$tables_data["demo_useractive"]=&$tdatademo_useractive;
$field_labels["demo_useractive"] = &$fieldLabelsdemo_useractive;
$fieldToolTips["demo_useractive"] = &$fieldToolTipsdemo_useractive;
$placeHolders["demo_useractive"] = &$placeHoldersdemo_useractive;
$page_titles["demo_useractive"] = &$pageTitlesdemo_useractive;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["demo_useractive"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["demo_useractive"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_demo_useractive()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "user_id,  user_name,  Photo,  SSSNo,  TIN,  Mobile,  Address,  Email,  EmployeeType,  EmployeeID,  Division,  Status,  Department,  AllowableSickLeave,  AllowableVacationLeave,  AllowableEmergencyLeave,  SSSEE,  SSSER,  PhilHealthEE,  PhilHealthER,  PagIbigEE,  AllowablePaternityLeave,  HiredDate,  Inactive,  ExitDate,  PagIbigER,  PagIbigNo,  PhilHealthNo,  SSSEC,  `Level`,  DateCreated,  ApprovedDate,  Approved,  Approvedby,  Preparedby,  Checkedby,  CheckedDate,  Checked,  Superior,  `Position`,  Employer,  IDNo,  AccountNo,  LateFixPenalty,  DoNotUpdateContributions,  ExcludeContributionOnPayroll,  Birthday,  Bank,  NoLateDeduction,  IncludeBreakLate,  GracePeriodMins,  WithAdditionalBreaks,  Superior2";
$proto0["m_strFrom"] = "FROM demo_user";
$proto0["m_strWhere"] = "(Inactive <>1)";
$proto0["m_strOrderBy"] = "ORDER BY user_name";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "Inactive <>1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Inactive",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "<>1";
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
	"m_srcTableName" => "demo_useractive"
));

$proto6["m_sql"] = "user_id";
$proto6["m_srcTableName"] = "demo_useractive";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto8["m_sql"] = "user_name";
$proto8["m_srcTableName"] = "demo_useractive";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Photo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto10["m_sql"] = "Photo";
$proto10["m_srcTableName"] = "demo_useractive";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto12["m_sql"] = "SSSNo";
$proto12["m_srcTableName"] = "demo_useractive";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TIN",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto14["m_sql"] = "TIN";
$proto14["m_srcTableName"] = "demo_useractive";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Mobile",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto16["m_sql"] = "Mobile";
$proto16["m_srcTableName"] = "demo_useractive";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Address",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto18["m_sql"] = "Address";
$proto18["m_srcTableName"] = "demo_useractive";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto20["m_sql"] = "Email";
$proto20["m_srcTableName"] = "demo_useractive";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeType",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto22["m_sql"] = "EmployeeType";
$proto22["m_srcTableName"] = "demo_useractive";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto24["m_sql"] = "EmployeeID";
$proto24["m_srcTableName"] = "demo_useractive";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto26["m_sql"] = "Division";
$proto26["m_srcTableName"] = "demo_useractive";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto28["m_sql"] = "Status";
$proto28["m_srcTableName"] = "demo_useractive";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto30["m_sql"] = "Department";
$proto30["m_srcTableName"] = "demo_useractive";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableSickLeave",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto32["m_sql"] = "AllowableSickLeave";
$proto32["m_srcTableName"] = "demo_useractive";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableVacationLeave",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto34["m_sql"] = "AllowableVacationLeave";
$proto34["m_srcTableName"] = "demo_useractive";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableEmergencyLeave",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto36["m_sql"] = "AllowableEmergencyLeave";
$proto36["m_srcTableName"] = "demo_useractive";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSEE",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto38["m_sql"] = "SSSEE";
$proto38["m_srcTableName"] = "demo_useractive";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSER",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto40["m_sql"] = "SSSER";
$proto40["m_srcTableName"] = "demo_useractive";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "PhilHealthEE",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto42["m_sql"] = "PhilHealthEE";
$proto42["m_srcTableName"] = "demo_useractive";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "PhilHealthER",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto44["m_sql"] = "PhilHealthER";
$proto44["m_srcTableName"] = "demo_useractive";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbigEE",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto46["m_sql"] = "PagIbigEE";
$proto46["m_srcTableName"] = "demo_useractive";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowablePaternityLeave",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto48["m_sql"] = "AllowablePaternityLeave";
$proto48["m_srcTableName"] = "demo_useractive";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "HiredDate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto50["m_sql"] = "HiredDate";
$proto50["m_srcTableName"] = "demo_useractive";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Inactive",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto52["m_sql"] = "Inactive";
$proto52["m_srcTableName"] = "demo_useractive";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "ExitDate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto54["m_sql"] = "ExitDate";
$proto54["m_srcTableName"] = "demo_useractive";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbigER",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto56["m_sql"] = "PagIbigER";
$proto56["m_srcTableName"] = "demo_useractive";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbigNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto58["m_sql"] = "PagIbigNo";
$proto58["m_srcTableName"] = "demo_useractive";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "PhilHealthNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto60["m_sql"] = "PhilHealthNo";
$proto60["m_srcTableName"] = "demo_useractive";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSEC",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto62["m_sql"] = "SSSEC";
$proto62["m_srcTableName"] = "demo_useractive";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Level",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto64["m_sql"] = "`Level`";
$proto64["m_srcTableName"] = "demo_useractive";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "DateCreated",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto66["m_sql"] = "DateCreated";
$proto66["m_srcTableName"] = "demo_useractive";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedDate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto68["m_sql"] = "ApprovedDate";
$proto68["m_srcTableName"] = "demo_useractive";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "Approved",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto70["m_sql"] = "Approved";
$proto70["m_srcTableName"] = "demo_useractive";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Approvedby",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto72["m_sql"] = "Approvedby";
$proto72["m_srcTableName"] = "demo_useractive";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Preparedby",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto74["m_sql"] = "Preparedby";
$proto74["m_srcTableName"] = "demo_useractive";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Checkedby",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto76["m_sql"] = "Checkedby";
$proto76["m_srcTableName"] = "demo_useractive";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "CheckedDate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto78["m_sql"] = "CheckedDate";
$proto78["m_srcTableName"] = "demo_useractive";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "Checked",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto80["m_sql"] = "Checked";
$proto80["m_srcTableName"] = "demo_useractive";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto82["m_sql"] = "Superior";
$proto82["m_srcTableName"] = "demo_useractive";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Position",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto84["m_sql"] = "`Position`";
$proto84["m_srcTableName"] = "demo_useractive";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto86["m_sql"] = "Employer";
$proto86["m_srcTableName"] = "demo_useractive";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "IDNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto88["m_sql"] = "IDNo";
$proto88["m_srcTableName"] = "demo_useractive";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNo",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto90["m_sql"] = "AccountNo";
$proto90["m_srcTableName"] = "demo_useractive";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "LateFixPenalty",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto92["m_sql"] = "LateFixPenalty";
$proto92["m_srcTableName"] = "demo_useractive";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "DoNotUpdateContributions",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto94["m_sql"] = "DoNotUpdateContributions";
$proto94["m_srcTableName"] = "demo_useractive";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "ExcludeContributionOnPayroll",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto96["m_sql"] = "ExcludeContributionOnPayroll";
$proto96["m_srcTableName"] = "demo_useractive";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "Birthday",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto98["m_sql"] = "Birthday";
$proto98["m_srcTableName"] = "demo_useractive";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "Bank",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto100["m_sql"] = "Bank";
$proto100["m_srcTableName"] = "demo_useractive";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "NoLateDeduction",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto102["m_sql"] = "NoLateDeduction";
$proto102["m_srcTableName"] = "demo_useractive";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "IncludeBreakLate",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto104["m_sql"] = "IncludeBreakLate";
$proto104["m_srcTableName"] = "demo_useractive";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "GracePeriodMins",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto106["m_sql"] = "GracePeriodMins";
$proto106["m_srcTableName"] = "demo_useractive";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "WithAdditionalBreaks",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto108["m_sql"] = "WithAdditionalBreaks";
$proto108["m_srcTableName"] = "demo_useractive";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior2",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "demo_useractive"
));

$proto110["m_sql"] = "Superior2";
$proto110["m_srcTableName"] = "demo_useractive";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto112=array();
$proto112["m_link"] = "SQLL_MAIN";
			$proto113=array();
$proto113["m_strName"] = "demo_user";
$proto113["m_srcTableName"] = "demo_useractive";
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
$proto112["m_srcTableName"] = "demo_useractive";
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
	"m_srcTableName" => "demo_useractive"
));

$proto116["m_column"]=$obj;
$proto116["m_bAsc"] = 1;
$proto116["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto116);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="demo_useractive";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_demo_useractive = createSqlQuery_demo_useractive();


	
		;

																																																					

$tdatademo_useractive[".sqlquery"] = $queryData_demo_useractive;

include_once(getabspath("include/demo_useractive_events.php"));
$tableEvents["demo_useractive"] = new eventclass_demo_useractive;
$tdatademo_useractive[".hasEvents"] = true;

?>