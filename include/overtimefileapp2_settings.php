<?php
require_once(getabspath("classes/cipherer.php"));




$tdataovertimefileapp2 = array();
	$tdataovertimefileapp2[".truncateText"] = true;
	$tdataovertimefileapp2[".NumberOfChars"] = 80;
	$tdataovertimefileapp2[".ShortName"] = "overtimefileapp2";
	$tdataovertimefileapp2[".OwnerID"] = "Superior2";
	$tdataovertimefileapp2[".OriginalTable"] = "overtimefile";

//	field labels
$fieldLabelsovertimefileapp2 = array();
$fieldToolTipsovertimefileapp2 = array();
$pageTitlesovertimefileapp2 = array();
$placeHoldersovertimefileapp2 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsovertimefileapp2["English"] = array();
	$fieldToolTipsovertimefileapp2["English"] = array();
	$placeHoldersovertimefileapp2["English"] = array();
	$pageTitlesovertimefileapp2["English"] = array();
	$fieldLabelsovertimefileapp2["English"]["DateCreated"] = "Date Created";
	$fieldToolTipsovertimefileapp2["English"]["DateCreated"] = "";
	$placeHoldersovertimefileapp2["English"]["DateCreated"] = "";
	$fieldLabelsovertimefileapp2["English"]["Approved"] = "Approved";
	$fieldToolTipsovertimefileapp2["English"]["Approved"] = "";
	$placeHoldersovertimefileapp2["English"]["Approved"] = "";
	$fieldLabelsovertimefileapp2["English"]["Approvedby"] = "Approved by";
	$fieldToolTipsovertimefileapp2["English"]["Approvedby"] = "";
	$placeHoldersovertimefileapp2["English"]["Approvedby"] = "";
	$fieldLabelsovertimefileapp2["English"]["ApprovedTime"] = "Approved Time";
	$fieldToolTipsovertimefileapp2["English"]["ApprovedTime"] = "";
	$placeHoldersovertimefileapp2["English"]["ApprovedTime"] = "";
	$fieldLabelsovertimefileapp2["English"]["Posted"] = "Posted";
	$fieldToolTipsovertimefileapp2["English"]["Posted"] = "";
	$placeHoldersovertimefileapp2["English"]["Posted"] = "";
	$fieldLabelsovertimefileapp2["English"]["NoMins"] = "No Mins";
	$fieldToolTipsovertimefileapp2["English"]["NoMins"] = "";
	$placeHoldersovertimefileapp2["English"]["NoMins"] = "";
	$fieldLabelsovertimefileapp2["English"]["ApprovedDate"] = "Approved Date";
	$fieldToolTipsovertimefileapp2["English"]["ApprovedDate"] = "";
	$placeHoldersovertimefileapp2["English"]["ApprovedDate"] = "";
	$fieldLabelsovertimefileapp2["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipsovertimefileapp2["English"]["EmployeeID"] = "";
	$placeHoldersovertimefileapp2["English"]["EmployeeID"] = "";
	$fieldLabelsovertimefileapp2["English"]["Reason"] = "Reason";
	$fieldToolTipsovertimefileapp2["English"]["Reason"] = "";
	$placeHoldersovertimefileapp2["English"]["Reason"] = "";
	$fieldLabelsovertimefileapp2["English"]["ItiD"] = "Iti D";
	$fieldToolTipsovertimefileapp2["English"]["ItiD"] = "";
	$placeHoldersovertimefileapp2["English"]["ItiD"] = "";
	$fieldLabelsovertimefileapp2["English"]["Superior"] = "Supervisor";
	$fieldToolTipsovertimefileapp2["English"]["Superior"] = "";
	$placeHoldersovertimefileapp2["English"]["Superior"] = "";
	$fieldLabelsovertimefileapp2["English"]["Locked"] = "Locked";
	$fieldToolTipsovertimefileapp2["English"]["Locked"] = "";
	$placeHoldersovertimefileapp2["English"]["Locked"] = "";
	$fieldLabelsovertimefileapp2["English"]["Superior2"] = "Manager";
	$fieldToolTipsovertimefileapp2["English"]["Superior2"] = "";
	$placeHoldersovertimefileapp2["English"]["Superior2"] = "";
	$fieldLabelsovertimefileapp2["English"]["1stApproval"] = "Supervisor Approval";
	$fieldToolTipsovertimefileapp2["English"]["1stApproval"] = "";
	$placeHoldersovertimefileapp2["English"]["1stApproval"] = "";
	$fieldLabelsovertimefileapp2["English"]["2ndApproval"] = "Manager Approval";
	$fieldToolTipsovertimefileapp2["English"]["2ndApproval"] = "";
	$placeHoldersovertimefileapp2["English"]["2ndApproval"] = "";
	$fieldLabelsovertimefileapp2["English"]["FromTime"] = "From Time";
	$fieldToolTipsovertimefileapp2["English"]["FromTime"] = "";
	$placeHoldersovertimefileapp2["English"]["FromTime"] = "";
	$fieldLabelsovertimefileapp2["English"]["ToTime"] = "To Time";
	$fieldToolTipsovertimefileapp2["English"]["ToTime"] = "";
	$placeHoldersovertimefileapp2["English"]["ToTime"] = "";
	$fieldLabelsovertimefileapp2["English"]["DateOT"] = "Date OT";
	$fieldToolTipsovertimefileapp2["English"]["DateOT"] = "";
	$placeHoldersovertimefileapp2["English"]["DateOT"] = "";
	if (count($fieldToolTipsovertimefileapp2["English"]))
		$tdataovertimefileapp2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsovertimefileapp2[""] = array();
	$fieldToolTipsovertimefileapp2[""] = array();
	$placeHoldersovertimefileapp2[""] = array();
	$pageTitlesovertimefileapp2[""] = array();
	$fieldLabelsovertimefileapp2[""]["FromTime"] = "From Time";
	$fieldToolTipsovertimefileapp2[""]["FromTime"] = "";
	$placeHoldersovertimefileapp2[""]["FromTime"] = "";
	$fieldLabelsovertimefileapp2[""]["ToTime"] = "To Time";
	$fieldToolTipsovertimefileapp2[""]["ToTime"] = "";
	$placeHoldersovertimefileapp2[""]["ToTime"] = "";
	$fieldLabelsovertimefileapp2[""]["DateOT"] = "Date OT";
	$fieldToolTipsovertimefileapp2[""]["DateOT"] = "";
	$placeHoldersovertimefileapp2[""]["DateOT"] = "";
	if (count($fieldToolTipsovertimefileapp2[""]))
		$tdataovertimefileapp2[".isUseToolTips"] = true;
}


	$tdataovertimefileapp2[".NCSearch"] = true;



$tdataovertimefileapp2[".shortTableName"] = "overtimefileapp2";
$tdataovertimefileapp2[".nSecOptions"] = 1;
$tdataovertimefileapp2[".recsPerRowPrint"] = 1;
$tdataovertimefileapp2[".mainTableOwnerID"] = "Superior2";
$tdataovertimefileapp2[".moveNext"] = 1;
$tdataovertimefileapp2[".entityType"] = 1;

$tdataovertimefileapp2[".strOriginalTableName"] = "overtimefile";

	



$tdataovertimefileapp2[".showAddInPopup"] = false;

$tdataovertimefileapp2[".showEditInPopup"] = false;

$tdataovertimefileapp2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataovertimefileapp2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataovertimefileapp2[".fieldsForRegister"] = array();

$tdataovertimefileapp2[".listAjax"] = false;

	$tdataovertimefileapp2[".audit"] = false;

	$tdataovertimefileapp2[".locking"] = false;

$tdataovertimefileapp2[".edit"] = true;
$tdataovertimefileapp2[".afterEditAction"] = 0;
$tdataovertimefileapp2[".closePopupAfterEdit"] = 1;
$tdataovertimefileapp2[".afterEditActionDetTable"] = "Detail tables not found!";


$tdataovertimefileapp2[".list"] = true;

$tdataovertimefileapp2[".inlineEdit"] = true;


$tdataovertimefileapp2[".reorderRecordsByHeader"] = true;


$tdataovertimefileapp2[".exportFormatting"] = 2;
$tdataovertimefileapp2[".exportDelimiter"] = ",";
		
$tdataovertimefileapp2[".view"] = true;


$tdataovertimefileapp2[".exportTo"] = true;

$tdataovertimefileapp2[".printFriendly"] = true;

$tdataovertimefileapp2[".delete"] = true;

$tdataovertimefileapp2[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataovertimefileapp2[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataovertimefileapp2[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataovertimefileapp2[".searchSaving"] = false;
//

$tdataovertimefileapp2[".showSearchPanel"] = true;
		$tdataovertimefileapp2[".flexibleSearch"] = true;

$tdataovertimefileapp2[".isUseAjaxSuggest"] = true;

$tdataovertimefileapp2[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdataovertimefileapp2[".ajaxCodeSnippetAdded"] = false;

$tdataovertimefileapp2[".buttonsAdded"] = false;

$tdataovertimefileapp2[".addPageEvents"] = true;

// use timepicker for search panel
$tdataovertimefileapp2[".isUseTimeForSearch"] = true;





$tdataovertimefileapp2[".allSearchFields"] = array();
$tdataovertimefileapp2[".filterFields"] = array();
$tdataovertimefileapp2[".requiredSearchFields"] = array();

$tdataovertimefileapp2[".allSearchFields"][] = "ItiD";
	$tdataovertimefileapp2[".allSearchFields"][] = "DateCreated";
	$tdataovertimefileapp2[".allSearchFields"][] = "DateOT";
	$tdataovertimefileapp2[".allSearchFields"][] = "EmployeeID";
	$tdataovertimefileapp2[".allSearchFields"][] = "Reason";
	$tdataovertimefileapp2[".allSearchFields"][] = "FromTime";
	$tdataovertimefileapp2[".allSearchFields"][] = "ToTime";
	$tdataovertimefileapp2[".allSearchFields"][] = "NoMins";
	$tdataovertimefileapp2[".allSearchFields"][] = "Approved";
	$tdataovertimefileapp2[".allSearchFields"][] = "Approvedby";
	$tdataovertimefileapp2[".allSearchFields"][] = "ApprovedDate";
	$tdataovertimefileapp2[".allSearchFields"][] = "ApprovedTime";
	$tdataovertimefileapp2[".allSearchFields"][] = "Posted";
	$tdataovertimefileapp2[".allSearchFields"][] = "Locked";
	$tdataovertimefileapp2[".allSearchFields"][] = "Superior";
	$tdataovertimefileapp2[".allSearchFields"][] = "1stApproval";
	$tdataovertimefileapp2[".allSearchFields"][] = "Superior2";
	$tdataovertimefileapp2[".allSearchFields"][] = "2ndApproval";
	

$tdataovertimefileapp2[".googleLikeFields"] = array();
$tdataovertimefileapp2[".googleLikeFields"][] = "ItiD";
$tdataovertimefileapp2[".googleLikeFields"][] = "DateCreated";
$tdataovertimefileapp2[".googleLikeFields"][] = "FromTime";
$tdataovertimefileapp2[".googleLikeFields"][] = "ToTime";
$tdataovertimefileapp2[".googleLikeFields"][] = "Approved";
$tdataovertimefileapp2[".googleLikeFields"][] = "Approvedby";
$tdataovertimefileapp2[".googleLikeFields"][] = "ApprovedTime";
$tdataovertimefileapp2[".googleLikeFields"][] = "Posted";
$tdataovertimefileapp2[".googleLikeFields"][] = "NoMins";
$tdataovertimefileapp2[".googleLikeFields"][] = "ApprovedDate";
$tdataovertimefileapp2[".googleLikeFields"][] = "EmployeeID";
$tdataovertimefileapp2[".googleLikeFields"][] = "Reason";
$tdataovertimefileapp2[".googleLikeFields"][] = "Superior";
$tdataovertimefileapp2[".googleLikeFields"][] = "Locked";
$tdataovertimefileapp2[".googleLikeFields"][] = "Superior2";
$tdataovertimefileapp2[".googleLikeFields"][] = "1stApproval";
$tdataovertimefileapp2[".googleLikeFields"][] = "2ndApproval";
$tdataovertimefileapp2[".googleLikeFields"][] = "DateOT";


$tdataovertimefileapp2[".advSearchFields"] = array();
$tdataovertimefileapp2[".advSearchFields"][] = "ItiD";
$tdataovertimefileapp2[".advSearchFields"][] = "DateCreated";
$tdataovertimefileapp2[".advSearchFields"][] = "DateOT";
$tdataovertimefileapp2[".advSearchFields"][] = "EmployeeID";
$tdataovertimefileapp2[".advSearchFields"][] = "Reason";
$tdataovertimefileapp2[".advSearchFields"][] = "FromTime";
$tdataovertimefileapp2[".advSearchFields"][] = "ToTime";
$tdataovertimefileapp2[".advSearchFields"][] = "NoMins";
$tdataovertimefileapp2[".advSearchFields"][] = "Approved";
$tdataovertimefileapp2[".advSearchFields"][] = "Approvedby";
$tdataovertimefileapp2[".advSearchFields"][] = "ApprovedDate";
$tdataovertimefileapp2[".advSearchFields"][] = "ApprovedTime";
$tdataovertimefileapp2[".advSearchFields"][] = "Posted";
$tdataovertimefileapp2[".advSearchFields"][] = "Locked";
$tdataovertimefileapp2[".advSearchFields"][] = "Superior";
$tdataovertimefileapp2[".advSearchFields"][] = "1stApproval";
$tdataovertimefileapp2[".advSearchFields"][] = "Superior2";
$tdataovertimefileapp2[".advSearchFields"][] = "2ndApproval";

$tdataovertimefileapp2[".tableType"] = "list";

$tdataovertimefileapp2[".printerPageOrientation"] = 0;
$tdataovertimefileapp2[".nPrinterPageScale"] = 100;

$tdataovertimefileapp2[".nPrinterSplitRecords"] = 40;

$tdataovertimefileapp2[".nPrinterPDFSplitRecords"] = 40;



$tdataovertimefileapp2[".geocodingEnabled"] = false;





$tdataovertimefileapp2[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataovertimefileapp2[".pageSize"] = 20;

$tdataovertimefileapp2[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY ItiD DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataovertimefileapp2[".strOrderBy"] = $tstrOrderBy;

$tdataovertimefileapp2[".orderindexes"] = array();
	$tdataovertimefileapp2[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "ItiD");


$tdataovertimefileapp2[".sqlHead"] = "SELECT ItiD,  DateCreated,  FromTime,  ToTime,  Approved,  Approvedby,  ApprovedTime,  Posted,  NoMins,  ApprovedDate,  EmployeeID,  Reason,  Superior,  Locked,  Superior2,  `1stApproval`,  `2ndApproval`,  DateOT";
$tdataovertimefileapp2[".sqlFrom"] = "FROM overtimefile";
$tdataovertimefileapp2[".sqlWhereExpr"] = "(Superior2 is not null) AND (`2ndApproval` is null)";
$tdataovertimefileapp2[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataovertimefileapp2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataovertimefileapp2[".arrGroupsPerPage"] = $arrGPP;

$tdataovertimefileapp2[".highlightSearchResults"] = true;

$tableKeysovertimefileapp2 = array();
$tableKeysovertimefileapp2[] = "ItiD";
$tdataovertimefileapp2[".Keys"] = $tableKeysovertimefileapp2;

$tdataovertimefileapp2[".listFields"] = array();
$tdataovertimefileapp2[".listFields"][] = "ItiD";
$tdataovertimefileapp2[".listFields"][] = "DateCreated";
$tdataovertimefileapp2[".listFields"][] = "DateOT";
$tdataovertimefileapp2[".listFields"][] = "EmployeeID";
$tdataovertimefileapp2[".listFields"][] = "Reason";
$tdataovertimefileapp2[".listFields"][] = "FromTime";
$tdataovertimefileapp2[".listFields"][] = "ToTime";
$tdataovertimefileapp2[".listFields"][] = "NoMins";
$tdataovertimefileapp2[".listFields"][] = "Approved";
$tdataovertimefileapp2[".listFields"][] = "Approvedby";
$tdataovertimefileapp2[".listFields"][] = "ApprovedDate";
$tdataovertimefileapp2[".listFields"][] = "ApprovedTime";
$tdataovertimefileapp2[".listFields"][] = "Posted";
$tdataovertimefileapp2[".listFields"][] = "Locked";
$tdataovertimefileapp2[".listFields"][] = "Superior";
$tdataovertimefileapp2[".listFields"][] = "1stApproval";
$tdataovertimefileapp2[".listFields"][] = "Superior2";
$tdataovertimefileapp2[".listFields"][] = "2ndApproval";

$tdataovertimefileapp2[".hideMobileList"] = array();


$tdataovertimefileapp2[".viewFields"] = array();
$tdataovertimefileapp2[".viewFields"][] = "ItiD";
$tdataovertimefileapp2[".viewFields"][] = "DateCreated";
$tdataovertimefileapp2[".viewFields"][] = "DateOT";
$tdataovertimefileapp2[".viewFields"][] = "EmployeeID";
$tdataovertimefileapp2[".viewFields"][] = "Reason";
$tdataovertimefileapp2[".viewFields"][] = "FromTime";
$tdataovertimefileapp2[".viewFields"][] = "ToTime";
$tdataovertimefileapp2[".viewFields"][] = "NoMins";
$tdataovertimefileapp2[".viewFields"][] = "Approved";
$tdataovertimefileapp2[".viewFields"][] = "Approvedby";
$tdataovertimefileapp2[".viewFields"][] = "ApprovedDate";
$tdataovertimefileapp2[".viewFields"][] = "ApprovedTime";
$tdataovertimefileapp2[".viewFields"][] = "Posted";
$tdataovertimefileapp2[".viewFields"][] = "Locked";
$tdataovertimefileapp2[".viewFields"][] = "Superior";
$tdataovertimefileapp2[".viewFields"][] = "1stApproval";
$tdataovertimefileapp2[".viewFields"][] = "Superior2";
$tdataovertimefileapp2[".viewFields"][] = "2ndApproval";

$tdataovertimefileapp2[".addFields"] = array();
$tdataovertimefileapp2[".addFields"][] = "DateOT";
$tdataovertimefileapp2[".addFields"][] = "FromTime";
$tdataovertimefileapp2[".addFields"][] = "ToTime";

$tdataovertimefileapp2[".masterListFields"] = array();
$tdataovertimefileapp2[".masterListFields"][] = "ItiD";
$tdataovertimefileapp2[".masterListFields"][] = "DateCreated";
$tdataovertimefileapp2[".masterListFields"][] = "DateOT";
$tdataovertimefileapp2[".masterListFields"][] = "EmployeeID";
$tdataovertimefileapp2[".masterListFields"][] = "Reason";
$tdataovertimefileapp2[".masterListFields"][] = "FromTime";
$tdataovertimefileapp2[".masterListFields"][] = "ToTime";
$tdataovertimefileapp2[".masterListFields"][] = "NoMins";
$tdataovertimefileapp2[".masterListFields"][] = "Approved";
$tdataovertimefileapp2[".masterListFields"][] = "Approvedby";
$tdataovertimefileapp2[".masterListFields"][] = "ApprovedDate";
$tdataovertimefileapp2[".masterListFields"][] = "ApprovedTime";
$tdataovertimefileapp2[".masterListFields"][] = "Posted";
$tdataovertimefileapp2[".masterListFields"][] = "Locked";
$tdataovertimefileapp2[".masterListFields"][] = "Superior";
$tdataovertimefileapp2[".masterListFields"][] = "1stApproval";
$tdataovertimefileapp2[".masterListFields"][] = "Superior2";
$tdataovertimefileapp2[".masterListFields"][] = "2ndApproval";

$tdataovertimefileapp2[".inlineAddFields"] = array();
$tdataovertimefileapp2[".inlineAddFields"][] = "DateOT";
$tdataovertimefileapp2[".inlineAddFields"][] = "FromTime";
$tdataovertimefileapp2[".inlineAddFields"][] = "ToTime";

$tdataovertimefileapp2[".editFields"] = array();
$tdataovertimefileapp2[".editFields"][] = "DateCreated";
$tdataovertimefileapp2[".editFields"][] = "DateOT";
$tdataovertimefileapp2[".editFields"][] = "EmployeeID";
$tdataovertimefileapp2[".editFields"][] = "Reason";
$tdataovertimefileapp2[".editFields"][] = "FromTime";
$tdataovertimefileapp2[".editFields"][] = "ToTime";
$tdataovertimefileapp2[".editFields"][] = "NoMins";
$tdataovertimefileapp2[".editFields"][] = "Approved";
$tdataovertimefileapp2[".editFields"][] = "Approvedby";
$tdataovertimefileapp2[".editFields"][] = "ApprovedDate";
$tdataovertimefileapp2[".editFields"][] = "ApprovedTime";
$tdataovertimefileapp2[".editFields"][] = "Posted";
$tdataovertimefileapp2[".editFields"][] = "Locked";
$tdataovertimefileapp2[".editFields"][] = "Superior";
$tdataovertimefileapp2[".editFields"][] = "1stApproval";
$tdataovertimefileapp2[".editFields"][] = "Superior2";
$tdataovertimefileapp2[".editFields"][] = "2ndApproval";

$tdataovertimefileapp2[".inlineEditFields"] = array();
$tdataovertimefileapp2[".inlineEditFields"][] = "DateCreated";
$tdataovertimefileapp2[".inlineEditFields"][] = "DateOT";
$tdataovertimefileapp2[".inlineEditFields"][] = "EmployeeID";
$tdataovertimefileapp2[".inlineEditFields"][] = "Reason";
$tdataovertimefileapp2[".inlineEditFields"][] = "FromTime";
$tdataovertimefileapp2[".inlineEditFields"][] = "ToTime";
$tdataovertimefileapp2[".inlineEditFields"][] = "NoMins";
$tdataovertimefileapp2[".inlineEditFields"][] = "Approved";
$tdataovertimefileapp2[".inlineEditFields"][] = "Approvedby";
$tdataovertimefileapp2[".inlineEditFields"][] = "ApprovedDate";
$tdataovertimefileapp2[".inlineEditFields"][] = "ApprovedTime";
$tdataovertimefileapp2[".inlineEditFields"][] = "Posted";
$tdataovertimefileapp2[".inlineEditFields"][] = "Locked";
$tdataovertimefileapp2[".inlineEditFields"][] = "Superior";
$tdataovertimefileapp2[".inlineEditFields"][] = "1stApproval";
$tdataovertimefileapp2[".inlineEditFields"][] = "Superior2";
$tdataovertimefileapp2[".inlineEditFields"][] = "2ndApproval";

$tdataovertimefileapp2[".updateSelectedFields"] = array();
$tdataovertimefileapp2[".updateSelectedFields"][] = "DateCreated";
$tdataovertimefileapp2[".updateSelectedFields"][] = "DateOT";
$tdataovertimefileapp2[".updateSelectedFields"][] = "EmployeeID";
$tdataovertimefileapp2[".updateSelectedFields"][] = "Reason";
$tdataovertimefileapp2[".updateSelectedFields"][] = "FromTime";
$tdataovertimefileapp2[".updateSelectedFields"][] = "ToTime";
$tdataovertimefileapp2[".updateSelectedFields"][] = "NoMins";
$tdataovertimefileapp2[".updateSelectedFields"][] = "Approved";
$tdataovertimefileapp2[".updateSelectedFields"][] = "Approvedby";
$tdataovertimefileapp2[".updateSelectedFields"][] = "ApprovedDate";
$tdataovertimefileapp2[".updateSelectedFields"][] = "ApprovedTime";
$tdataovertimefileapp2[".updateSelectedFields"][] = "Posted";
$tdataovertimefileapp2[".updateSelectedFields"][] = "Locked";
$tdataovertimefileapp2[".updateSelectedFields"][] = "Superior";
$tdataovertimefileapp2[".updateSelectedFields"][] = "1stApproval";
$tdataovertimefileapp2[".updateSelectedFields"][] = "Superior2";
$tdataovertimefileapp2[".updateSelectedFields"][] = "2ndApproval";


$tdataovertimefileapp2[".exportFields"] = array();
$tdataovertimefileapp2[".exportFields"][] = "ItiD";
$tdataovertimefileapp2[".exportFields"][] = "DateCreated";
$tdataovertimefileapp2[".exportFields"][] = "DateOT";
$tdataovertimefileapp2[".exportFields"][] = "EmployeeID";
$tdataovertimefileapp2[".exportFields"][] = "Reason";
$tdataovertimefileapp2[".exportFields"][] = "FromTime";
$tdataovertimefileapp2[".exportFields"][] = "ToTime";
$tdataovertimefileapp2[".exportFields"][] = "NoMins";
$tdataovertimefileapp2[".exportFields"][] = "Approved";
$tdataovertimefileapp2[".exportFields"][] = "Approvedby";
$tdataovertimefileapp2[".exportFields"][] = "ApprovedDate";
$tdataovertimefileapp2[".exportFields"][] = "ApprovedTime";
$tdataovertimefileapp2[".exportFields"][] = "Posted";
$tdataovertimefileapp2[".exportFields"][] = "Locked";
$tdataovertimefileapp2[".exportFields"][] = "Superior";
$tdataovertimefileapp2[".exportFields"][] = "1stApproval";
$tdataovertimefileapp2[".exportFields"][] = "Superior2";
$tdataovertimefileapp2[".exportFields"][] = "2ndApproval";

$tdataovertimefileapp2[".importFields"] = array();
$tdataovertimefileapp2[".importFields"][] = "FromTime";
$tdataovertimefileapp2[".importFields"][] = "ToTime";
$tdataovertimefileapp2[".importFields"][] = "DateOT";

$tdataovertimefileapp2[".printFields"] = array();
$tdataovertimefileapp2[".printFields"][] = "ItiD";
$tdataovertimefileapp2[".printFields"][] = "DateCreated";
$tdataovertimefileapp2[".printFields"][] = "DateOT";
$tdataovertimefileapp2[".printFields"][] = "EmployeeID";
$tdataovertimefileapp2[".printFields"][] = "Reason";
$tdataovertimefileapp2[".printFields"][] = "FromTime";
$tdataovertimefileapp2[".printFields"][] = "ToTime";
$tdataovertimefileapp2[".printFields"][] = "NoMins";
$tdataovertimefileapp2[".printFields"][] = "Approved";
$tdataovertimefileapp2[".printFields"][] = "Approvedby";
$tdataovertimefileapp2[".printFields"][] = "ApprovedDate";
$tdataovertimefileapp2[".printFields"][] = "ApprovedTime";
$tdataovertimefileapp2[".printFields"][] = "Posted";
$tdataovertimefileapp2[".printFields"][] = "Locked";
$tdataovertimefileapp2[".printFields"][] = "Superior";
$tdataovertimefileapp2[".printFields"][] = "1stApproval";
$tdataovertimefileapp2[".printFields"][] = "Superior2";
$tdataovertimefileapp2[".printFields"][] = "2ndApproval";


//	ItiD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ItiD";
	$fdata["GoodName"] = "ItiD";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp2","ItiD");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ItiD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ItiD";

	
	
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




	$tdataovertimefileapp2["ItiD"] = $fdata;
//	DateCreated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DateCreated";
	$fdata["GoodName"] = "DateCreated";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp2","DateCreated");
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

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
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




	$tdataovertimefileapp2["DateCreated"] = $fdata;
//	FromTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FromTime";
	$fdata["GoodName"] = "FromTime";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp2","FromTime");
	$fdata["FieldType"] = 134;

	
	
	
			
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

		$fdata["strField"] = "FromTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FromTime";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataovertimefileapp2["FromTime"] = $fdata;
//	ToTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ToTime";
	$fdata["GoodName"] = "ToTime";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp2","ToTime");
	$fdata["FieldType"] = 134;

	
	
	
			
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

		$fdata["strField"] = "ToTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ToTime";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataovertimefileapp2["ToTime"] = $fdata;
//	Approved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Approved";
	$fdata["GoodName"] = "Approved";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp2","Approved");
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

	
	
	
	
	
	
		$edata["controlWidth"] = 67;

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




	$tdataovertimefileapp2["Approved"] = $fdata;
//	Approvedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Approvedby";
	$fdata["GoodName"] = "Approvedby";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp2","Approvedby");
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




	$tdataovertimefileapp2["Approvedby"] = $fdata;
//	ApprovedTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ApprovedTime";
	$fdata["GoodName"] = "ApprovedTime";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp2","ApprovedTime");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ApprovedTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ApprovedTime";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataovertimefileapp2["ApprovedTime"] = $fdata;
//	Posted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Posted";
	$fdata["GoodName"] = "Posted";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp2","Posted");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Posted";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Posted";

	
	
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




	$tdataovertimefileapp2["Posted"] = $fdata;
//	NoMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "NoMins";
	$fdata["GoodName"] = "NoMins";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp2","NoMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NoMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NoMins";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdataovertimefileapp2["NoMins"] = $fdata;
//	ApprovedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ApprovedDate";
	$fdata["GoodName"] = "ApprovedDate";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp2","ApprovedDate");
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




	$tdataovertimefileapp2["ApprovedDate"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp2","EmployeeID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "demo_user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"Superior", 'lookupF'=>"Superior");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EmployeeID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "user_name";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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




	$tdataovertimefileapp2["EmployeeID"] = $fdata;
//	Reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Reason";
	$fdata["GoodName"] = "Reason";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp2","Reason");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Reason";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Reason";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataovertimefileapp2["Reason"] = $fdata;
//	Superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Superior";
	$fdata["GoodName"] = "Superior";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp2","Superior");
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




	$tdataovertimefileapp2["Superior"] = $fdata;
//	Locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Locked";
	$fdata["GoodName"] = "Locked";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp2","Locked");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

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




	$tdataovertimefileapp2["Locked"] = $fdata;
//	Superior2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Superior2";
	$fdata["GoodName"] = "Superior2";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp2","Superior2");
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




	$tdataovertimefileapp2["Superior2"] = $fdata;
//	1stApproval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "1stApproval";
	$fdata["GoodName"] = "1stApproval";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp2","1stApproval");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "1stApproval";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`1stApproval`";

	
	
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
	$edata["LookupTable"] = "approvalbutton";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "ApBID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "SelectApproval";
	
	

	
	$edata["LookupOrderBy"] = "ApBID";

	
	
	
	

	
	
	
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




	$tdataovertimefileapp2["1stApproval"] = $fdata;
//	2ndApproval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "2ndApproval";
	$fdata["GoodName"] = "2ndApproval";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp2","2ndApproval");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "2ndApproval";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`2ndApproval`";

	
	
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
	$edata["LookupTable"] = "approvalbutton";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "ApBID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "SelectApproval";
	
	

	
	$edata["LookupOrderBy"] = "ApBID";

	
	
	
	

	
	
	
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




	$tdataovertimefileapp2["2ndApproval"] = $fdata;
//	DateOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "DateOT";
	$fdata["GoodName"] = "DateOT";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp2","DateOT");
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

		$fdata["strField"] = "DateOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DateOT";

	
	
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




	$tdataovertimefileapp2["DateOT"] = $fdata;


$tables_data["overtimefileapp2"]=&$tdataovertimefileapp2;
$field_labels["overtimefileapp2"] = &$fieldLabelsovertimefileapp2;
$fieldToolTips["overtimefileapp2"] = &$fieldToolTipsovertimefileapp2;
$placeHolders["overtimefileapp2"] = &$placeHoldersovertimefileapp2;
$page_titles["overtimefileapp2"] = &$pageTitlesovertimefileapp2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["overtimefileapp2"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["overtimefileapp2"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_overtimefileapp2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ItiD,  DateCreated,  FromTime,  ToTime,  Approved,  Approvedby,  ApprovedTime,  Posted,  NoMins,  ApprovedDate,  EmployeeID,  Reason,  Superior,  Locked,  Superior2,  `1stApproval`,  `2ndApproval`,  DateOT";
$proto0["m_strFrom"] = "FROM overtimefile";
$proto0["m_strWhere"] = "(Superior2 is not null) AND (`2ndApproval` is null)";
$proto0["m_strOrderBy"] = "ORDER BY ItiD DESC";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(Superior2 is not null) AND (`2ndApproval` is null)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(Superior2 is not null) AND (`2ndApproval` is null)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "Superior2 is not null";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Superior2",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp2"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "is not null";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "`2ndApproval` is null";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "2ndApproval",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp2"
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
	"m_strName" => "ItiD",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp2"
));

$proto10["m_sql"] = "ItiD";
$proto10["m_srcTableName"] = "overtimefileapp2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DateCreated",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp2"
));

$proto12["m_sql"] = "DateCreated";
$proto12["m_srcTableName"] = "overtimefileapp2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FromTime",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp2"
));

$proto14["m_sql"] = "FromTime";
$proto14["m_srcTableName"] = "overtimefileapp2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ToTime",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp2"
));

$proto16["m_sql"] = "ToTime";
$proto16["m_srcTableName"] = "overtimefileapp2";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Approved",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp2"
));

$proto18["m_sql"] = "Approved";
$proto18["m_srcTableName"] = "overtimefileapp2";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Approvedby",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp2"
));

$proto20["m_sql"] = "Approvedby";
$proto20["m_srcTableName"] = "overtimefileapp2";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedTime",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp2"
));

$proto22["m_sql"] = "ApprovedTime";
$proto22["m_srcTableName"] = "overtimefileapp2";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Posted",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp2"
));

$proto24["m_sql"] = "Posted";
$proto24["m_srcTableName"] = "overtimefileapp2";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "NoMins",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp2"
));

$proto26["m_sql"] = "NoMins";
$proto26["m_srcTableName"] = "overtimefileapp2";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedDate",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp2"
));

$proto28["m_sql"] = "ApprovedDate";
$proto28["m_srcTableName"] = "overtimefileapp2";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp2"
));

$proto30["m_sql"] = "EmployeeID";
$proto30["m_srcTableName"] = "overtimefileapp2";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Reason",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp2"
));

$proto32["m_sql"] = "Reason";
$proto32["m_srcTableName"] = "overtimefileapp2";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp2"
));

$proto34["m_sql"] = "Superior";
$proto34["m_srcTableName"] = "overtimefileapp2";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Locked",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp2"
));

$proto36["m_sql"] = "Locked";
$proto36["m_srcTableName"] = "overtimefileapp2";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior2",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp2"
));

$proto38["m_sql"] = "Superior2";
$proto38["m_srcTableName"] = "overtimefileapp2";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "1stApproval",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp2"
));

$proto40["m_sql"] = "`1stApproval`";
$proto40["m_srcTableName"] = "overtimefileapp2";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "2ndApproval",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp2"
));

$proto42["m_sql"] = "`2ndApproval`";
$proto42["m_srcTableName"] = "overtimefileapp2";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "DateOT",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp2"
));

$proto44["m_sql"] = "DateOT";
$proto44["m_srcTableName"] = "overtimefileapp2";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "overtimefile";
$proto47["m_srcTableName"] = "overtimefileapp2";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "ItiD";
$proto47["m_columns"][] = "DateCreated";
$proto47["m_columns"][] = "FromTime";
$proto47["m_columns"][] = "ToTime";
$proto47["m_columns"][] = "Approved";
$proto47["m_columns"][] = "Approvedby";
$proto47["m_columns"][] = "ApprovedTime";
$proto47["m_columns"][] = "Posted";
$proto47["m_columns"][] = "NoMins";
$proto47["m_columns"][] = "ApprovedDate";
$proto47["m_columns"][] = "EmployeeID";
$proto47["m_columns"][] = "Reason";
$proto47["m_columns"][] = "Superior";
$proto47["m_columns"][] = "Locked";
$proto47["m_columns"][] = "Superior2";
$proto47["m_columns"][] = "1stApproval";
$proto47["m_columns"][] = "2ndApproval";
$proto47["m_columns"][] = "1stDisapproval";
$proto47["m_columns"][] = "2ndDisapproval";
$proto47["m_columns"][] = "DateOT";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "overtimefile";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "overtimefileapp2";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "ItiD",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp2"
));

$proto50["m_column"]=$obj;
$proto50["m_bAsc"] = 0;
$proto50["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto50);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="overtimefileapp2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_overtimefileapp2 = createSqlQuery_overtimefileapp2();


	
		;

																		

$tdataovertimefileapp2[".sqlquery"] = $queryData_overtimefileapp2;

include_once(getabspath("include/overtimefileapp2_events.php"));
$tableEvents["overtimefileapp2"] = new eventclass_overtimefileapp2;
$tdataovertimefileapp2[".hasEvents"] = true;

?>