<?php
require_once(getabspath("classes/cipherer.php"));




$tdataovertimefileapp = array();
	$tdataovertimefileapp[".truncateText"] = true;
	$tdataovertimefileapp[".NumberOfChars"] = 80;
	$tdataovertimefileapp[".ShortName"] = "overtimefileapp";
	$tdataovertimefileapp[".OwnerID"] = "Superior";
	$tdataovertimefileapp[".OriginalTable"] = "overtimefile";

//	field labels
$fieldLabelsovertimefileapp = array();
$fieldToolTipsovertimefileapp = array();
$pageTitlesovertimefileapp = array();
$placeHoldersovertimefileapp = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsovertimefileapp["English"] = array();
	$fieldToolTipsovertimefileapp["English"] = array();
	$placeHoldersovertimefileapp["English"] = array();
	$pageTitlesovertimefileapp["English"] = array();
	$fieldLabelsovertimefileapp["English"]["DateCreated"] = "Date Created";
	$fieldToolTipsovertimefileapp["English"]["DateCreated"] = "";
	$placeHoldersovertimefileapp["English"]["DateCreated"] = "";
	$fieldLabelsovertimefileapp["English"]["Approved"] = "Approved";
	$fieldToolTipsovertimefileapp["English"]["Approved"] = "";
	$placeHoldersovertimefileapp["English"]["Approved"] = "";
	$fieldLabelsovertimefileapp["English"]["Approvedby"] = "Approved by";
	$fieldToolTipsovertimefileapp["English"]["Approvedby"] = "";
	$placeHoldersovertimefileapp["English"]["Approvedby"] = "";
	$fieldLabelsovertimefileapp["English"]["ApprovedTime"] = "Approved Time";
	$fieldToolTipsovertimefileapp["English"]["ApprovedTime"] = "";
	$placeHoldersovertimefileapp["English"]["ApprovedTime"] = "";
	$fieldLabelsovertimefileapp["English"]["Posted"] = "Posted";
	$fieldToolTipsovertimefileapp["English"]["Posted"] = "";
	$placeHoldersovertimefileapp["English"]["Posted"] = "";
	$fieldLabelsovertimefileapp["English"]["NoMins"] = "No Mins";
	$fieldToolTipsovertimefileapp["English"]["NoMins"] = "";
	$placeHoldersovertimefileapp["English"]["NoMins"] = "";
	$fieldLabelsovertimefileapp["English"]["ApprovedDate"] = "Approved Date";
	$fieldToolTipsovertimefileapp["English"]["ApprovedDate"] = "";
	$placeHoldersovertimefileapp["English"]["ApprovedDate"] = "";
	$fieldLabelsovertimefileapp["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipsovertimefileapp["English"]["EmployeeID"] = "";
	$placeHoldersovertimefileapp["English"]["EmployeeID"] = "";
	$fieldLabelsovertimefileapp["English"]["Reason"] = "Reason";
	$fieldToolTipsovertimefileapp["English"]["Reason"] = "";
	$placeHoldersovertimefileapp["English"]["Reason"] = "";
	$fieldLabelsovertimefileapp["English"]["ItiD"] = "Iti D";
	$fieldToolTipsovertimefileapp["English"]["ItiD"] = "";
	$placeHoldersovertimefileapp["English"]["ItiD"] = "";
	$fieldLabelsovertimefileapp["English"]["Superior"] = "Supervisor";
	$fieldToolTipsovertimefileapp["English"]["Superior"] = "";
	$placeHoldersovertimefileapp["English"]["Superior"] = "";
	$fieldLabelsovertimefileapp["English"]["Locked"] = "Locked";
	$fieldToolTipsovertimefileapp["English"]["Locked"] = "";
	$placeHoldersovertimefileapp["English"]["Locked"] = "";
	$fieldLabelsovertimefileapp["English"]["Superior2"] = "Manager";
	$fieldToolTipsovertimefileapp["English"]["Superior2"] = "";
	$placeHoldersovertimefileapp["English"]["Superior2"] = "";
	$fieldLabelsovertimefileapp["English"]["1stApproval"] = "Supervisor Approval";
	$fieldToolTipsovertimefileapp["English"]["1stApproval"] = "";
	$placeHoldersovertimefileapp["English"]["1stApproval"] = "";
	$fieldLabelsovertimefileapp["English"]["2ndApproval"] = "Manager Approval";
	$fieldToolTipsovertimefileapp["English"]["2ndApproval"] = "";
	$placeHoldersovertimefileapp["English"]["2ndApproval"] = "";
	$fieldLabelsovertimefileapp["English"]["FromTime"] = "From Time";
	$fieldToolTipsovertimefileapp["English"]["FromTime"] = "";
	$placeHoldersovertimefileapp["English"]["FromTime"] = "";
	$fieldLabelsovertimefileapp["English"]["ToTime"] = "To Time";
	$fieldToolTipsovertimefileapp["English"]["ToTime"] = "";
	$placeHoldersovertimefileapp["English"]["ToTime"] = "";
	$fieldLabelsovertimefileapp["English"]["DateOT"] = "Date OT";
	$fieldToolTipsovertimefileapp["English"]["DateOT"] = "";
	$placeHoldersovertimefileapp["English"]["DateOT"] = "";
	if (count($fieldToolTipsovertimefileapp["English"]))
		$tdataovertimefileapp[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsovertimefileapp[""] = array();
	$fieldToolTipsovertimefileapp[""] = array();
	$placeHoldersovertimefileapp[""] = array();
	$pageTitlesovertimefileapp[""] = array();
	$fieldLabelsovertimefileapp[""]["FromTime"] = "From Time";
	$fieldToolTipsovertimefileapp[""]["FromTime"] = "";
	$placeHoldersovertimefileapp[""]["FromTime"] = "";
	$fieldLabelsovertimefileapp[""]["ToTime"] = "To Time";
	$fieldToolTipsovertimefileapp[""]["ToTime"] = "";
	$placeHoldersovertimefileapp[""]["ToTime"] = "";
	$fieldLabelsovertimefileapp[""]["DateOT"] = "Date OT";
	$fieldToolTipsovertimefileapp[""]["DateOT"] = "";
	$placeHoldersovertimefileapp[""]["DateOT"] = "";
	if (count($fieldToolTipsovertimefileapp[""]))
		$tdataovertimefileapp[".isUseToolTips"] = true;
}


	$tdataovertimefileapp[".NCSearch"] = true;



$tdataovertimefileapp[".shortTableName"] = "overtimefileapp";
$tdataovertimefileapp[".nSecOptions"] = 1;
$tdataovertimefileapp[".recsPerRowPrint"] = 1;
$tdataovertimefileapp[".mainTableOwnerID"] = "Superior";
$tdataovertimefileapp[".moveNext"] = 1;
$tdataovertimefileapp[".entityType"] = 1;

$tdataovertimefileapp[".strOriginalTableName"] = "overtimefile";

	



$tdataovertimefileapp[".showAddInPopup"] = false;

$tdataovertimefileapp[".showEditInPopup"] = false;

$tdataovertimefileapp[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataovertimefileapp[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataovertimefileapp[".fieldsForRegister"] = array();

$tdataovertimefileapp[".listAjax"] = false;

	$tdataovertimefileapp[".audit"] = false;

	$tdataovertimefileapp[".locking"] = false;

$tdataovertimefileapp[".edit"] = true;
$tdataovertimefileapp[".afterEditAction"] = 0;
$tdataovertimefileapp[".closePopupAfterEdit"] = 1;
$tdataovertimefileapp[".afterEditActionDetTable"] = "Detail tables not found!";


$tdataovertimefileapp[".list"] = true;

$tdataovertimefileapp[".inlineEdit"] = true;


$tdataovertimefileapp[".reorderRecordsByHeader"] = true;


$tdataovertimefileapp[".exportFormatting"] = 2;
$tdataovertimefileapp[".exportDelimiter"] = ",";
		
$tdataovertimefileapp[".view"] = true;


$tdataovertimefileapp[".exportTo"] = true;

$tdataovertimefileapp[".printFriendly"] = true;


$tdataovertimefileapp[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataovertimefileapp[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataovertimefileapp[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataovertimefileapp[".searchSaving"] = false;
//

$tdataovertimefileapp[".showSearchPanel"] = true;
		$tdataovertimefileapp[".flexibleSearch"] = true;

$tdataovertimefileapp[".isUseAjaxSuggest"] = true;

$tdataovertimefileapp[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdataovertimefileapp[".ajaxCodeSnippetAdded"] = false;

$tdataovertimefileapp[".buttonsAdded"] = false;

$tdataovertimefileapp[".addPageEvents"] = true;

// use timepicker for search panel
$tdataovertimefileapp[".isUseTimeForSearch"] = true;





$tdataovertimefileapp[".allSearchFields"] = array();
$tdataovertimefileapp[".filterFields"] = array();
$tdataovertimefileapp[".requiredSearchFields"] = array();

$tdataovertimefileapp[".allSearchFields"][] = "ItiD";
	$tdataovertimefileapp[".allSearchFields"][] = "DateCreated";
	$tdataovertimefileapp[".allSearchFields"][] = "DateOT";
	$tdataovertimefileapp[".allSearchFields"][] = "EmployeeID";
	$tdataovertimefileapp[".allSearchFields"][] = "Reason";
	$tdataovertimefileapp[".allSearchFields"][] = "FromTime";
	$tdataovertimefileapp[".allSearchFields"][] = "ToTime";
	$tdataovertimefileapp[".allSearchFields"][] = "NoMins";
	$tdataovertimefileapp[".allSearchFields"][] = "Approved";
	$tdataovertimefileapp[".allSearchFields"][] = "Approvedby";
	$tdataovertimefileapp[".allSearchFields"][] = "ApprovedDate";
	$tdataovertimefileapp[".allSearchFields"][] = "ApprovedTime";
	$tdataovertimefileapp[".allSearchFields"][] = "Posted";
	$tdataovertimefileapp[".allSearchFields"][] = "Locked";
	$tdataovertimefileapp[".allSearchFields"][] = "Superior";
	$tdataovertimefileapp[".allSearchFields"][] = "1stApproval";
	$tdataovertimefileapp[".allSearchFields"][] = "Superior2";
	$tdataovertimefileapp[".allSearchFields"][] = "2ndApproval";
	

$tdataovertimefileapp[".googleLikeFields"] = array();
$tdataovertimefileapp[".googleLikeFields"][] = "ItiD";
$tdataovertimefileapp[".googleLikeFields"][] = "DateCreated";
$tdataovertimefileapp[".googleLikeFields"][] = "FromTime";
$tdataovertimefileapp[".googleLikeFields"][] = "ToTime";
$tdataovertimefileapp[".googleLikeFields"][] = "Approved";
$tdataovertimefileapp[".googleLikeFields"][] = "Approvedby";
$tdataovertimefileapp[".googleLikeFields"][] = "ApprovedTime";
$tdataovertimefileapp[".googleLikeFields"][] = "Posted";
$tdataovertimefileapp[".googleLikeFields"][] = "NoMins";
$tdataovertimefileapp[".googleLikeFields"][] = "ApprovedDate";
$tdataovertimefileapp[".googleLikeFields"][] = "EmployeeID";
$tdataovertimefileapp[".googleLikeFields"][] = "Reason";
$tdataovertimefileapp[".googleLikeFields"][] = "Superior";
$tdataovertimefileapp[".googleLikeFields"][] = "Locked";
$tdataovertimefileapp[".googleLikeFields"][] = "Superior2";
$tdataovertimefileapp[".googleLikeFields"][] = "1stApproval";
$tdataovertimefileapp[".googleLikeFields"][] = "2ndApproval";
$tdataovertimefileapp[".googleLikeFields"][] = "DateOT";


$tdataovertimefileapp[".advSearchFields"] = array();
$tdataovertimefileapp[".advSearchFields"][] = "ItiD";
$tdataovertimefileapp[".advSearchFields"][] = "DateCreated";
$tdataovertimefileapp[".advSearchFields"][] = "DateOT";
$tdataovertimefileapp[".advSearchFields"][] = "EmployeeID";
$tdataovertimefileapp[".advSearchFields"][] = "Reason";
$tdataovertimefileapp[".advSearchFields"][] = "FromTime";
$tdataovertimefileapp[".advSearchFields"][] = "ToTime";
$tdataovertimefileapp[".advSearchFields"][] = "NoMins";
$tdataovertimefileapp[".advSearchFields"][] = "Approved";
$tdataovertimefileapp[".advSearchFields"][] = "Approvedby";
$tdataovertimefileapp[".advSearchFields"][] = "ApprovedDate";
$tdataovertimefileapp[".advSearchFields"][] = "ApprovedTime";
$tdataovertimefileapp[".advSearchFields"][] = "Posted";
$tdataovertimefileapp[".advSearchFields"][] = "Locked";
$tdataovertimefileapp[".advSearchFields"][] = "Superior";
$tdataovertimefileapp[".advSearchFields"][] = "1stApproval";
$tdataovertimefileapp[".advSearchFields"][] = "Superior2";
$tdataovertimefileapp[".advSearchFields"][] = "2ndApproval";

$tdataovertimefileapp[".tableType"] = "list";

$tdataovertimefileapp[".printerPageOrientation"] = 0;
$tdataovertimefileapp[".nPrinterPageScale"] = 100;

$tdataovertimefileapp[".nPrinterSplitRecords"] = 40;

$tdataovertimefileapp[".nPrinterPDFSplitRecords"] = 40;



$tdataovertimefileapp[".geocodingEnabled"] = false;





$tdataovertimefileapp[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataovertimefileapp[".pageSize"] = 20;

$tdataovertimefileapp[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY ItiD DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataovertimefileapp[".strOrderBy"] = $tstrOrderBy;

$tdataovertimefileapp[".orderindexes"] = array();
	$tdataovertimefileapp[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "ItiD");


$tdataovertimefileapp[".sqlHead"] = "SELECT ItiD,  DateCreated,  FromTime,  ToTime,  Approved,  Approvedby,  ApprovedTime,  Posted,  NoMins,  ApprovedDate,  EmployeeID,  Reason,  Superior,  Locked,  Superior2,  `1stApproval`,  `2ndApproval`,  DateOT";
$tdataovertimefileapp[".sqlFrom"] = "FROM overtimefile";
$tdataovertimefileapp[".sqlWhereExpr"] = "(Superior is not null) AND (`1stApproval` is null) AND (`2ndApproval` is null)";
$tdataovertimefileapp[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataovertimefileapp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataovertimefileapp[".arrGroupsPerPage"] = $arrGPP;

$tdataovertimefileapp[".highlightSearchResults"] = true;

$tableKeysovertimefileapp = array();
$tableKeysovertimefileapp[] = "ItiD";
$tdataovertimefileapp[".Keys"] = $tableKeysovertimefileapp;

$tdataovertimefileapp[".listFields"] = array();
$tdataovertimefileapp[".listFields"][] = "ItiD";
$tdataovertimefileapp[".listFields"][] = "DateCreated";
$tdataovertimefileapp[".listFields"][] = "DateOT";
$tdataovertimefileapp[".listFields"][] = "EmployeeID";
$tdataovertimefileapp[".listFields"][] = "Reason";
$tdataovertimefileapp[".listFields"][] = "FromTime";
$tdataovertimefileapp[".listFields"][] = "ToTime";
$tdataovertimefileapp[".listFields"][] = "NoMins";
$tdataovertimefileapp[".listFields"][] = "Approved";
$tdataovertimefileapp[".listFields"][] = "Approvedby";
$tdataovertimefileapp[".listFields"][] = "ApprovedDate";
$tdataovertimefileapp[".listFields"][] = "ApprovedTime";
$tdataovertimefileapp[".listFields"][] = "Posted";
$tdataovertimefileapp[".listFields"][] = "Locked";
$tdataovertimefileapp[".listFields"][] = "Superior";
$tdataovertimefileapp[".listFields"][] = "1stApproval";
$tdataovertimefileapp[".listFields"][] = "Superior2";
$tdataovertimefileapp[".listFields"][] = "2ndApproval";

$tdataovertimefileapp[".hideMobileList"] = array();


$tdataovertimefileapp[".viewFields"] = array();
$tdataovertimefileapp[".viewFields"][] = "ItiD";
$tdataovertimefileapp[".viewFields"][] = "DateCreated";
$tdataovertimefileapp[".viewFields"][] = "DateOT";
$tdataovertimefileapp[".viewFields"][] = "EmployeeID";
$tdataovertimefileapp[".viewFields"][] = "Reason";
$tdataovertimefileapp[".viewFields"][] = "FromTime";
$tdataovertimefileapp[".viewFields"][] = "ToTime";
$tdataovertimefileapp[".viewFields"][] = "NoMins";
$tdataovertimefileapp[".viewFields"][] = "Approved";
$tdataovertimefileapp[".viewFields"][] = "Approvedby";
$tdataovertimefileapp[".viewFields"][] = "ApprovedDate";
$tdataovertimefileapp[".viewFields"][] = "ApprovedTime";
$tdataovertimefileapp[".viewFields"][] = "Posted";
$tdataovertimefileapp[".viewFields"][] = "Locked";
$tdataovertimefileapp[".viewFields"][] = "Superior";
$tdataovertimefileapp[".viewFields"][] = "1stApproval";
$tdataovertimefileapp[".viewFields"][] = "Superior2";
$tdataovertimefileapp[".viewFields"][] = "2ndApproval";

$tdataovertimefileapp[".addFields"] = array();

$tdataovertimefileapp[".masterListFields"] = array();
$tdataovertimefileapp[".masterListFields"][] = "ItiD";
$tdataovertimefileapp[".masterListFields"][] = "DateCreated";
$tdataovertimefileapp[".masterListFields"][] = "DateOT";
$tdataovertimefileapp[".masterListFields"][] = "EmployeeID";
$tdataovertimefileapp[".masterListFields"][] = "Reason";
$tdataovertimefileapp[".masterListFields"][] = "FromTime";
$tdataovertimefileapp[".masterListFields"][] = "ToTime";
$tdataovertimefileapp[".masterListFields"][] = "NoMins";
$tdataovertimefileapp[".masterListFields"][] = "Approved";
$tdataovertimefileapp[".masterListFields"][] = "Approvedby";
$tdataovertimefileapp[".masterListFields"][] = "ApprovedDate";
$tdataovertimefileapp[".masterListFields"][] = "ApprovedTime";
$tdataovertimefileapp[".masterListFields"][] = "Posted";
$tdataovertimefileapp[".masterListFields"][] = "Locked";
$tdataovertimefileapp[".masterListFields"][] = "Superior";
$tdataovertimefileapp[".masterListFields"][] = "1stApproval";
$tdataovertimefileapp[".masterListFields"][] = "Superior2";
$tdataovertimefileapp[".masterListFields"][] = "2ndApproval";

$tdataovertimefileapp[".inlineAddFields"] = array();

$tdataovertimefileapp[".editFields"] = array();
$tdataovertimefileapp[".editFields"][] = "DateCreated";
$tdataovertimefileapp[".editFields"][] = "DateOT";
$tdataovertimefileapp[".editFields"][] = "EmployeeID";
$tdataovertimefileapp[".editFields"][] = "Reason";
$tdataovertimefileapp[".editFields"][] = "FromTime";
$tdataovertimefileapp[".editFields"][] = "ToTime";
$tdataovertimefileapp[".editFields"][] = "NoMins";
$tdataovertimefileapp[".editFields"][] = "Approved";
$tdataovertimefileapp[".editFields"][] = "Approvedby";
$tdataovertimefileapp[".editFields"][] = "ApprovedDate";
$tdataovertimefileapp[".editFields"][] = "ApprovedTime";
$tdataovertimefileapp[".editFields"][] = "Posted";
$tdataovertimefileapp[".editFields"][] = "Locked";
$tdataovertimefileapp[".editFields"][] = "Superior";
$tdataovertimefileapp[".editFields"][] = "1stApproval";
$tdataovertimefileapp[".editFields"][] = "Superior2";
$tdataovertimefileapp[".editFields"][] = "2ndApproval";

$tdataovertimefileapp[".inlineEditFields"] = array();
$tdataovertimefileapp[".inlineEditFields"][] = "DateCreated";
$tdataovertimefileapp[".inlineEditFields"][] = "DateOT";
$tdataovertimefileapp[".inlineEditFields"][] = "EmployeeID";
$tdataovertimefileapp[".inlineEditFields"][] = "Reason";
$tdataovertimefileapp[".inlineEditFields"][] = "FromTime";
$tdataovertimefileapp[".inlineEditFields"][] = "ToTime";
$tdataovertimefileapp[".inlineEditFields"][] = "NoMins";
$tdataovertimefileapp[".inlineEditFields"][] = "Approved";
$tdataovertimefileapp[".inlineEditFields"][] = "Approvedby";
$tdataovertimefileapp[".inlineEditFields"][] = "ApprovedDate";
$tdataovertimefileapp[".inlineEditFields"][] = "ApprovedTime";
$tdataovertimefileapp[".inlineEditFields"][] = "Posted";
$tdataovertimefileapp[".inlineEditFields"][] = "Locked";
$tdataovertimefileapp[".inlineEditFields"][] = "Superior";
$tdataovertimefileapp[".inlineEditFields"][] = "1stApproval";
$tdataovertimefileapp[".inlineEditFields"][] = "Superior2";
$tdataovertimefileapp[".inlineEditFields"][] = "2ndApproval";

$tdataovertimefileapp[".updateSelectedFields"] = array();
$tdataovertimefileapp[".updateSelectedFields"][] = "DateCreated";
$tdataovertimefileapp[".updateSelectedFields"][] = "DateOT";
$tdataovertimefileapp[".updateSelectedFields"][] = "EmployeeID";
$tdataovertimefileapp[".updateSelectedFields"][] = "Reason";
$tdataovertimefileapp[".updateSelectedFields"][] = "FromTime";
$tdataovertimefileapp[".updateSelectedFields"][] = "ToTime";
$tdataovertimefileapp[".updateSelectedFields"][] = "NoMins";
$tdataovertimefileapp[".updateSelectedFields"][] = "Approved";
$tdataovertimefileapp[".updateSelectedFields"][] = "Approvedby";
$tdataovertimefileapp[".updateSelectedFields"][] = "ApprovedDate";
$tdataovertimefileapp[".updateSelectedFields"][] = "ApprovedTime";
$tdataovertimefileapp[".updateSelectedFields"][] = "Posted";
$tdataovertimefileapp[".updateSelectedFields"][] = "Locked";
$tdataovertimefileapp[".updateSelectedFields"][] = "Superior";
$tdataovertimefileapp[".updateSelectedFields"][] = "1stApproval";
$tdataovertimefileapp[".updateSelectedFields"][] = "Superior2";
$tdataovertimefileapp[".updateSelectedFields"][] = "2ndApproval";


$tdataovertimefileapp[".exportFields"] = array();
$tdataovertimefileapp[".exportFields"][] = "ItiD";
$tdataovertimefileapp[".exportFields"][] = "DateCreated";
$tdataovertimefileapp[".exportFields"][] = "DateOT";
$tdataovertimefileapp[".exportFields"][] = "EmployeeID";
$tdataovertimefileapp[".exportFields"][] = "Reason";
$tdataovertimefileapp[".exportFields"][] = "FromTime";
$tdataovertimefileapp[".exportFields"][] = "ToTime";
$tdataovertimefileapp[".exportFields"][] = "NoMins";
$tdataovertimefileapp[".exportFields"][] = "Approved";
$tdataovertimefileapp[".exportFields"][] = "Approvedby";
$tdataovertimefileapp[".exportFields"][] = "ApprovedDate";
$tdataovertimefileapp[".exportFields"][] = "ApprovedTime";
$tdataovertimefileapp[".exportFields"][] = "Posted";
$tdataovertimefileapp[".exportFields"][] = "Locked";
$tdataovertimefileapp[".exportFields"][] = "Superior";
$tdataovertimefileapp[".exportFields"][] = "1stApproval";
$tdataovertimefileapp[".exportFields"][] = "Superior2";
$tdataovertimefileapp[".exportFields"][] = "2ndApproval";

$tdataovertimefileapp[".importFields"] = array();

$tdataovertimefileapp[".printFields"] = array();
$tdataovertimefileapp[".printFields"][] = "ItiD";
$tdataovertimefileapp[".printFields"][] = "DateCreated";
$tdataovertimefileapp[".printFields"][] = "DateOT";
$tdataovertimefileapp[".printFields"][] = "EmployeeID";
$tdataovertimefileapp[".printFields"][] = "Reason";
$tdataovertimefileapp[".printFields"][] = "FromTime";
$tdataovertimefileapp[".printFields"][] = "ToTime";
$tdataovertimefileapp[".printFields"][] = "NoMins";
$tdataovertimefileapp[".printFields"][] = "Approved";
$tdataovertimefileapp[".printFields"][] = "Approvedby";
$tdataovertimefileapp[".printFields"][] = "ApprovedDate";
$tdataovertimefileapp[".printFields"][] = "ApprovedTime";
$tdataovertimefileapp[".printFields"][] = "Posted";
$tdataovertimefileapp[".printFields"][] = "Locked";
$tdataovertimefileapp[".printFields"][] = "Superior";
$tdataovertimefileapp[".printFields"][] = "1stApproval";
$tdataovertimefileapp[".printFields"][] = "Superior2";
$tdataovertimefileapp[".printFields"][] = "2ndApproval";


//	ItiD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ItiD";
	$fdata["GoodName"] = "ItiD";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp","ItiD");
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




	$tdataovertimefileapp["ItiD"] = $fdata;
//	DateCreated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DateCreated";
	$fdata["GoodName"] = "DateCreated";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp","DateCreated");
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




	$tdataovertimefileapp["DateCreated"] = $fdata;
//	FromTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FromTime";
	$fdata["GoodName"] = "FromTime";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp","FromTime");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdataovertimefileapp["FromTime"] = $fdata;
//	ToTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ToTime";
	$fdata["GoodName"] = "ToTime";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp","ToTime");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdataovertimefileapp["ToTime"] = $fdata;
//	Approved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Approved";
	$fdata["GoodName"] = "Approved";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp","Approved");
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




	$tdataovertimefileapp["Approved"] = $fdata;
//	Approvedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Approvedby";
	$fdata["GoodName"] = "Approvedby";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp","Approvedby");
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




	$tdataovertimefileapp["Approvedby"] = $fdata;
//	ApprovedTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ApprovedTime";
	$fdata["GoodName"] = "ApprovedTime";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp","ApprovedTime");
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




	$tdataovertimefileapp["ApprovedTime"] = $fdata;
//	Posted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Posted";
	$fdata["GoodName"] = "Posted";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp","Posted");
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




	$tdataovertimefileapp["Posted"] = $fdata;
//	NoMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "NoMins";
	$fdata["GoodName"] = "NoMins";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp","NoMins");
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




	$tdataovertimefileapp["NoMins"] = $fdata;
//	ApprovedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ApprovedDate";
	$fdata["GoodName"] = "ApprovedDate";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp","ApprovedDate");
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




	$tdataovertimefileapp["ApprovedDate"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp","EmployeeID");
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




	$tdataovertimefileapp["EmployeeID"] = $fdata;
//	Reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Reason";
	$fdata["GoodName"] = "Reason";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp","Reason");
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




	$tdataovertimefileapp["Reason"] = $fdata;
//	Superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Superior";
	$fdata["GoodName"] = "Superior";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp","Superior");
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




	$tdataovertimefileapp["Superior"] = $fdata;
//	Locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Locked";
	$fdata["GoodName"] = "Locked";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp","Locked");
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




	$tdataovertimefileapp["Locked"] = $fdata;
//	Superior2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Superior2";
	$fdata["GoodName"] = "Superior2";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp","Superior2");
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




	$tdataovertimefileapp["Superior2"] = $fdata;
//	1stApproval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "1stApproval";
	$fdata["GoodName"] = "1stApproval";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp","1stApproval");
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




	$tdataovertimefileapp["1stApproval"] = $fdata;
//	2ndApproval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "2ndApproval";
	$fdata["GoodName"] = "2ndApproval";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp","2ndApproval");
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




	$tdataovertimefileapp["2ndApproval"] = $fdata;
//	DateOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "DateOT";
	$fdata["GoodName"] = "DateOT";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefileapp","DateOT");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdataovertimefileapp["DateOT"] = $fdata;


$tables_data["overtimefileapp"]=&$tdataovertimefileapp;
$field_labels["overtimefileapp"] = &$fieldLabelsovertimefileapp;
$fieldToolTips["overtimefileapp"] = &$fieldToolTipsovertimefileapp;
$placeHolders["overtimefileapp"] = &$placeHoldersovertimefileapp;
$page_titles["overtimefileapp"] = &$pageTitlesovertimefileapp;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["overtimefileapp"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["overtimefileapp"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_overtimefileapp()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ItiD,  DateCreated,  FromTime,  ToTime,  Approved,  Approvedby,  ApprovedTime,  Posted,  NoMins,  ApprovedDate,  EmployeeID,  Reason,  Superior,  Locked,  Superior2,  `1stApproval`,  `2ndApproval`,  DateOT";
$proto0["m_strFrom"] = "FROM overtimefile";
$proto0["m_strWhere"] = "(Superior is not null) AND (`1stApproval` is null) AND (`2ndApproval` is null)";
$proto0["m_strOrderBy"] = "ORDER BY ItiD DESC";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(Superior is not null) AND (`1stApproval` is null) AND (`2ndApproval` is null)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(Superior is not null) AND (`1stApproval` is null) AND (`2ndApproval` is null)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "Superior is not null";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Superior",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp"
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
$proto6["m_sql"] = "`1stApproval` is null";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "1stApproval",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "is null";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "`2ndApproval` is null";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "2ndApproval",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "is null";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = true;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ItiD",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp"
));

$proto12["m_sql"] = "ItiD";
$proto12["m_srcTableName"] = "overtimefileapp";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DateCreated",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp"
));

$proto14["m_sql"] = "DateCreated";
$proto14["m_srcTableName"] = "overtimefileapp";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "FromTime",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp"
));

$proto16["m_sql"] = "FromTime";
$proto16["m_srcTableName"] = "overtimefileapp";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ToTime",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp"
));

$proto18["m_sql"] = "ToTime";
$proto18["m_srcTableName"] = "overtimefileapp";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Approved",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp"
));

$proto20["m_sql"] = "Approved";
$proto20["m_srcTableName"] = "overtimefileapp";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Approvedby",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp"
));

$proto22["m_sql"] = "Approvedby";
$proto22["m_srcTableName"] = "overtimefileapp";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedTime",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp"
));

$proto24["m_sql"] = "ApprovedTime";
$proto24["m_srcTableName"] = "overtimefileapp";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Posted",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp"
));

$proto26["m_sql"] = "Posted";
$proto26["m_srcTableName"] = "overtimefileapp";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "NoMins",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp"
));

$proto28["m_sql"] = "NoMins";
$proto28["m_srcTableName"] = "overtimefileapp";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedDate",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp"
));

$proto30["m_sql"] = "ApprovedDate";
$proto30["m_srcTableName"] = "overtimefileapp";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp"
));

$proto32["m_sql"] = "EmployeeID";
$proto32["m_srcTableName"] = "overtimefileapp";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Reason",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp"
));

$proto34["m_sql"] = "Reason";
$proto34["m_srcTableName"] = "overtimefileapp";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp"
));

$proto36["m_sql"] = "Superior";
$proto36["m_srcTableName"] = "overtimefileapp";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Locked",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp"
));

$proto38["m_sql"] = "Locked";
$proto38["m_srcTableName"] = "overtimefileapp";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior2",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp"
));

$proto40["m_sql"] = "Superior2";
$proto40["m_srcTableName"] = "overtimefileapp";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "1stApproval",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp"
));

$proto42["m_sql"] = "`1stApproval`";
$proto42["m_srcTableName"] = "overtimefileapp";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "2ndApproval",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp"
));

$proto44["m_sql"] = "`2ndApproval`";
$proto44["m_srcTableName"] = "overtimefileapp";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "DateOT",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp"
));

$proto46["m_sql"] = "DateOT";
$proto46["m_srcTableName"] = "overtimefileapp";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "overtimefile";
$proto49["m_srcTableName"] = "overtimefileapp";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "ItiD";
$proto49["m_columns"][] = "DateCreated";
$proto49["m_columns"][] = "FromTime";
$proto49["m_columns"][] = "ToTime";
$proto49["m_columns"][] = "Approved";
$proto49["m_columns"][] = "Approvedby";
$proto49["m_columns"][] = "ApprovedTime";
$proto49["m_columns"][] = "Posted";
$proto49["m_columns"][] = "NoMins";
$proto49["m_columns"][] = "ApprovedDate";
$proto49["m_columns"][] = "EmployeeID";
$proto49["m_columns"][] = "Reason";
$proto49["m_columns"][] = "Superior";
$proto49["m_columns"][] = "Locked";
$proto49["m_columns"][] = "Superior2";
$proto49["m_columns"][] = "1stApproval";
$proto49["m_columns"][] = "2ndApproval";
$proto49["m_columns"][] = "1stDisapproval";
$proto49["m_columns"][] = "2ndDisapproval";
$proto49["m_columns"][] = "DateOT";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "overtimefile";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "overtimefileapp";
$proto50=array();
$proto50["m_sql"] = "";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto52=array();
						$obj = new SQLField(array(
	"m_strName" => "ItiD",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefileapp"
));

$proto52["m_column"]=$obj;
$proto52["m_bAsc"] = 0;
$proto52["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto52);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="overtimefileapp";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_overtimefileapp = createSqlQuery_overtimefileapp();


	
		;

																		

$tdataovertimefileapp[".sqlquery"] = $queryData_overtimefileapp;

include_once(getabspath("include/overtimefileapp_events.php"));
$tableEvents["overtimefileapp"] = new eventclass_overtimefileapp;
$tdataovertimefileapp[".hasEvents"] = true;

?>