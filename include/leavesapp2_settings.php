<?php
require_once(getabspath("classes/cipherer.php"));




$tdataleavesapp2 = array();
	$tdataleavesapp2[".truncateText"] = true;
	$tdataleavesapp2[".NumberOfChars"] = 80;
	$tdataleavesapp2[".ShortName"] = "leavesapp2";
	$tdataleavesapp2[".OwnerID"] = "Superior2";
	$tdataleavesapp2[".OriginalTable"] = "leaves";

//	field labels
$fieldLabelsleavesapp2 = array();
$fieldToolTipsleavesapp2 = array();
$pageTitlesleavesapp2 = array();
$placeHoldersleavesapp2 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsleavesapp2["English"] = array();
	$fieldToolTipsleavesapp2["English"] = array();
	$placeHoldersleavesapp2["English"] = array();
	$pageTitlesleavesapp2["English"] = array();
	$fieldLabelsleavesapp2["English"]["LvID"] = "Lv ID";
	$fieldToolTipsleavesapp2["English"]["LvID"] = "";
	$placeHoldersleavesapp2["English"]["LvID"] = "";
	$fieldLabelsleavesapp2["English"]["LeaveType"] = "Leave Type";
	$fieldToolTipsleavesapp2["English"]["LeaveType"] = "";
	$placeHoldersleavesapp2["English"]["LeaveType"] = "";
	$fieldLabelsleavesapp2["English"]["Days"] = "Half/Whole Day";
	$fieldToolTipsleavesapp2["English"]["Days"] = "";
	$placeHoldersleavesapp2["English"]["Days"] = "";
	$fieldLabelsleavesapp2["English"]["EmployeeID"] = "Employee";
	$fieldToolTipsleavesapp2["English"]["EmployeeID"] = "";
	$placeHoldersleavesapp2["English"]["EmployeeID"] = "";
	$fieldLabelsleavesapp2["English"]["FromDate"] = "From Date";
	$fieldToolTipsleavesapp2["English"]["FromDate"] = "";
	$placeHoldersleavesapp2["English"]["FromDate"] = "";
	$fieldLabelsleavesapp2["English"]["ToDate"] = "To Date";
	$fieldToolTipsleavesapp2["English"]["ToDate"] = "";
	$placeHoldersleavesapp2["English"]["ToDate"] = "";
	$fieldLabelsleavesapp2["English"]["Approved"] = "Approved";
	$fieldToolTipsleavesapp2["English"]["Approved"] = "";
	$placeHoldersleavesapp2["English"]["Approved"] = "";
	$fieldLabelsleavesapp2["English"]["ApprovedDate"] = "Approved Date";
	$fieldToolTipsleavesapp2["English"]["ApprovedDate"] = "";
	$placeHoldersleavesapp2["English"]["ApprovedDate"] = "";
	$fieldLabelsleavesapp2["English"]["Approvedby"] = "Approvedby";
	$fieldToolTipsleavesapp2["English"]["Approvedby"] = "";
	$placeHoldersleavesapp2["English"]["Approvedby"] = "";
	$fieldLabelsleavesapp2["English"]["Posted"] = "Posted";
	$fieldToolTipsleavesapp2["English"]["Posted"] = "";
	$placeHoldersleavesapp2["English"]["Posted"] = "";
	$fieldLabelsleavesapp2["English"]["DateCreated"] = "Date Created";
	$fieldToolTipsleavesapp2["English"]["DateCreated"] = "";
	$placeHoldersleavesapp2["English"]["DateCreated"] = "";
	$fieldLabelsleavesapp2["English"]["ApprovedTime"] = "Approved Time";
	$fieldToolTipsleavesapp2["English"]["ApprovedTime"] = "";
	$placeHoldersleavesapp2["English"]["ApprovedTime"] = "";
	$fieldLabelsleavesapp2["English"]["FirstHalf"] = "First Half";
	$fieldToolTipsleavesapp2["English"]["FirstHalf"] = "";
	$placeHoldersleavesapp2["English"]["FirstHalf"] = "";
	$fieldLabelsleavesapp2["English"]["SecondHalf"] = "Second Half";
	$fieldToolTipsleavesapp2["English"]["SecondHalf"] = "";
	$placeHoldersleavesapp2["English"]["SecondHalf"] = "";
	$fieldLabelsleavesapp2["English"]["Locked"] = "Locked";
	$fieldToolTipsleavesapp2["English"]["Locked"] = "";
	$placeHoldersleavesapp2["English"]["Locked"] = "";
	$fieldLabelsleavesapp2["English"]["Superior"] = "Supervisor";
	$fieldToolTipsleavesapp2["English"]["Superior"] = "";
	$placeHoldersleavesapp2["English"]["Superior"] = "";
	$fieldLabelsleavesapp2["English"]["Reason"] = "Reason";
	$fieldToolTipsleavesapp2["English"]["Reason"] = "";
	$placeHoldersleavesapp2["English"]["Reason"] = "";
	$fieldLabelsleavesapp2["English"]["Superior2"] = "Manager";
	$fieldToolTipsleavesapp2["English"]["Superior2"] = "";
	$placeHoldersleavesapp2["English"]["Superior2"] = "";
	$fieldLabelsleavesapp2["English"]["1stApproval"] = "Supervisor Approval";
	$fieldToolTipsleavesapp2["English"]["1stApproval"] = "";
	$placeHoldersleavesapp2["English"]["1stApproval"] = "";
	$fieldLabelsleavesapp2["English"]["2ndApproval"] = "Manager Approval";
	$fieldToolTipsleavesapp2["English"]["2ndApproval"] = "";
	$placeHoldersleavesapp2["English"]["2ndApproval"] = "";
	$fieldLabelsleavesapp2["English"]["TotalDays"] = "Total Days";
	$fieldToolTipsleavesapp2["English"]["TotalDays"] = "";
	$placeHoldersleavesapp2["English"]["TotalDays"] = "";
	if (count($fieldToolTipsleavesapp2["English"]))
		$tdataleavesapp2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsleavesapp2[""] = array();
	$fieldToolTipsleavesapp2[""] = array();
	$placeHoldersleavesapp2[""] = array();
	$pageTitlesleavesapp2[""] = array();
	$fieldLabelsleavesapp2[""]["TotalDays"] = "Total Days";
	$fieldToolTipsleavesapp2[""]["TotalDays"] = "";
	$placeHoldersleavesapp2[""]["TotalDays"] = "";
	if (count($fieldToolTipsleavesapp2[""]))
		$tdataleavesapp2[".isUseToolTips"] = true;
}


	$tdataleavesapp2[".NCSearch"] = true;



$tdataleavesapp2[".shortTableName"] = "leavesapp2";
$tdataleavesapp2[".nSecOptions"] = 1;
$tdataleavesapp2[".recsPerRowPrint"] = 1;
$tdataleavesapp2[".mainTableOwnerID"] = "Superior2";
$tdataleavesapp2[".moveNext"] = 1;
$tdataleavesapp2[".entityType"] = 1;

$tdataleavesapp2[".strOriginalTableName"] = "leaves";

	



$tdataleavesapp2[".showAddInPopup"] = false;

$tdataleavesapp2[".showEditInPopup"] = false;

$tdataleavesapp2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataleavesapp2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataleavesapp2[".fieldsForRegister"] = array();

$tdataleavesapp2[".listAjax"] = false;

	$tdataleavesapp2[".audit"] = false;

	$tdataleavesapp2[".locking"] = false;

$tdataleavesapp2[".edit"] = true;
$tdataleavesapp2[".afterEditAction"] = 0;
$tdataleavesapp2[".closePopupAfterEdit"] = 1;
$tdataleavesapp2[".afterEditActionDetTable"] = "leaveremarks";


$tdataleavesapp2[".list"] = true;

$tdataleavesapp2[".inlineEdit"] = true;

$tdataleavesapp2[".updateSelected"] = true;

$tdataleavesapp2[".reorderRecordsByHeader"] = true;


$tdataleavesapp2[".exportFormatting"] = 2;
$tdataleavesapp2[".exportDelimiter"] = ",";
		
$tdataleavesapp2[".view"] = true;

$tdataleavesapp2[".import"] = true;

$tdataleavesapp2[".exportTo"] = true;

$tdataleavesapp2[".printFriendly"] = true;

$tdataleavesapp2[".delete"] = true;

$tdataleavesapp2[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataleavesapp2[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataleavesapp2[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataleavesapp2[".searchSaving"] = false;
//

$tdataleavesapp2[".showSearchPanel"] = true;
		$tdataleavesapp2[".flexibleSearch"] = true;

$tdataleavesapp2[".isUseAjaxSuggest"] = true;

$tdataleavesapp2[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																														

$tdataleavesapp2[".ajaxCodeSnippetAdded"] = false;

$tdataleavesapp2[".buttonsAdded"] = false;

$tdataleavesapp2[".addPageEvents"] = true;

// use timepicker for search panel
$tdataleavesapp2[".isUseTimeForSearch"] = true;





$tdataleavesapp2[".allSearchFields"] = array();
$tdataleavesapp2[".filterFields"] = array();
$tdataleavesapp2[".requiredSearchFields"] = array();

$tdataleavesapp2[".allSearchFields"][] = "LvID";
	$tdataleavesapp2[".allSearchFields"][] = "DateCreated";
	$tdataleavesapp2[".allSearchFields"][] = "LeaveType";
	$tdataleavesapp2[".allSearchFields"][] = "EmployeeID";
	$tdataleavesapp2[".allSearchFields"][] = "FromDate";
	$tdataleavesapp2[".allSearchFields"][] = "ToDate";
	$tdataleavesapp2[".allSearchFields"][] = "Reason";
	$tdataleavesapp2[".allSearchFields"][] = "FirstHalf";
	$tdataleavesapp2[".allSearchFields"][] = "SecondHalf";
	$tdataleavesapp2[".allSearchFields"][] = "Days";
	$tdataleavesapp2[".allSearchFields"][] = "Superior";
	$tdataleavesapp2[".allSearchFields"][] = "1stApproval";
	$tdataleavesapp2[".allSearchFields"][] = "Superior2";
	$tdataleavesapp2[".allSearchFields"][] = "2ndApproval";
	$tdataleavesapp2[".allSearchFields"][] = "TotalDays";
	$tdataleavesapp2[".allSearchFields"][] = "Approved";
	$tdataleavesapp2[".allSearchFields"][] = "ApprovedDate";
	$tdataleavesapp2[".allSearchFields"][] = "ApprovedTime";
	$tdataleavesapp2[".allSearchFields"][] = "Approvedby";
	$tdataleavesapp2[".allSearchFields"][] = "Posted";
	$tdataleavesapp2[".allSearchFields"][] = "Locked";
	

$tdataleavesapp2[".googleLikeFields"] = array();
$tdataleavesapp2[".googleLikeFields"][] = "LvID";
$tdataleavesapp2[".googleLikeFields"][] = "FromDate";
$tdataleavesapp2[".googleLikeFields"][] = "LeaveType";
$tdataleavesapp2[".googleLikeFields"][] = "Days";
$tdataleavesapp2[".googleLikeFields"][] = "EmployeeID";
$tdataleavesapp2[".googleLikeFields"][] = "ToDate";
$tdataleavesapp2[".googleLikeFields"][] = "Approved";
$tdataleavesapp2[".googleLikeFields"][] = "ApprovedDate";
$tdataleavesapp2[".googleLikeFields"][] = "Approvedby";
$tdataleavesapp2[".googleLikeFields"][] = "Posted";
$tdataleavesapp2[".googleLikeFields"][] = "DateCreated";
$tdataleavesapp2[".googleLikeFields"][] = "ApprovedTime";
$tdataleavesapp2[".googleLikeFields"][] = "FirstHalf";
$tdataleavesapp2[".googleLikeFields"][] = "SecondHalf";
$tdataleavesapp2[".googleLikeFields"][] = "Locked";
$tdataleavesapp2[".googleLikeFields"][] = "Superior";
$tdataleavesapp2[".googleLikeFields"][] = "Reason";
$tdataleavesapp2[".googleLikeFields"][] = "Superior2";
$tdataleavesapp2[".googleLikeFields"][] = "1stApproval";
$tdataleavesapp2[".googleLikeFields"][] = "2ndApproval";
$tdataleavesapp2[".googleLikeFields"][] = "TotalDays";


$tdataleavesapp2[".advSearchFields"] = array();
$tdataleavesapp2[".advSearchFields"][] = "LvID";
$tdataleavesapp2[".advSearchFields"][] = "DateCreated";
$tdataleavesapp2[".advSearchFields"][] = "LeaveType";
$tdataleavesapp2[".advSearchFields"][] = "EmployeeID";
$tdataleavesapp2[".advSearchFields"][] = "FromDate";
$tdataleavesapp2[".advSearchFields"][] = "ToDate";
$tdataleavesapp2[".advSearchFields"][] = "Reason";
$tdataleavesapp2[".advSearchFields"][] = "FirstHalf";
$tdataleavesapp2[".advSearchFields"][] = "SecondHalf";
$tdataleavesapp2[".advSearchFields"][] = "Days";
$tdataleavesapp2[".advSearchFields"][] = "Superior";
$tdataleavesapp2[".advSearchFields"][] = "1stApproval";
$tdataleavesapp2[".advSearchFields"][] = "Superior2";
$tdataleavesapp2[".advSearchFields"][] = "2ndApproval";
$tdataleavesapp2[".advSearchFields"][] = "TotalDays";
$tdataleavesapp2[".advSearchFields"][] = "Approved";
$tdataleavesapp2[".advSearchFields"][] = "ApprovedDate";
$tdataleavesapp2[".advSearchFields"][] = "ApprovedTime";
$tdataleavesapp2[".advSearchFields"][] = "Approvedby";
$tdataleavesapp2[".advSearchFields"][] = "Posted";
$tdataleavesapp2[".advSearchFields"][] = "Locked";

$tdataleavesapp2[".tableType"] = "list";

$tdataleavesapp2[".printerPageOrientation"] = 0;
$tdataleavesapp2[".nPrinterPageScale"] = 100;

$tdataleavesapp2[".nPrinterSplitRecords"] = 40;

$tdataleavesapp2[".nPrinterPDFSplitRecords"] = 40;



$tdataleavesapp2[".geocodingEnabled"] = false;





$tdataleavesapp2[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataleavesapp2[".pageSize"] = 20;

$tdataleavesapp2[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY LvID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataleavesapp2[".strOrderBy"] = $tstrOrderBy;

$tdataleavesapp2[".orderindexes"] = array();
	$tdataleavesapp2[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "LvID");


$tdataleavesapp2[".sqlHead"] = "SELECT LvID,  FromDate,  LeaveType,  Days,  EmployeeID,  ToDate,  Approved,  ApprovedDate,  Approvedby,  Posted,  DateCreated,  ApprovedTime,  FirstHalf,  SecondHalf,  Locked,  Superior,  Reason,  Superior2,  `1stApproval`,  `2ndApproval`,  TotalDays";
$tdataleavesapp2[".sqlFrom"] = "FROM leaves";
$tdataleavesapp2[".sqlWhereExpr"] = "";
$tdataleavesapp2[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataleavesapp2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataleavesapp2[".arrGroupsPerPage"] = $arrGPP;

$tdataleavesapp2[".highlightSearchResults"] = true;

$tableKeysleavesapp2 = array();
$tableKeysleavesapp2[] = "LvID";
$tdataleavesapp2[".Keys"] = $tableKeysleavesapp2;

$tdataleavesapp2[".listFields"] = array();
$tdataleavesapp2[".listFields"][] = "LvID";
$tdataleavesapp2[".listFields"][] = "DateCreated";
$tdataleavesapp2[".listFields"][] = "LeaveType";
$tdataleavesapp2[".listFields"][] = "EmployeeID";
$tdataleavesapp2[".listFields"][] = "FromDate";
$tdataleavesapp2[".listFields"][] = "ToDate";
$tdataleavesapp2[".listFields"][] = "Reason";
$tdataleavesapp2[".listFields"][] = "FirstHalf";
$tdataleavesapp2[".listFields"][] = "SecondHalf";
$tdataleavesapp2[".listFields"][] = "Days";
$tdataleavesapp2[".listFields"][] = "Superior";
$tdataleavesapp2[".listFields"][] = "1stApproval";
$tdataleavesapp2[".listFields"][] = "Superior2";
$tdataleavesapp2[".listFields"][] = "2ndApproval";
$tdataleavesapp2[".listFields"][] = "TotalDays";
$tdataleavesapp2[".listFields"][] = "Approved";
$tdataleavesapp2[".listFields"][] = "ApprovedDate";
$tdataleavesapp2[".listFields"][] = "ApprovedTime";
$tdataleavesapp2[".listFields"][] = "Approvedby";
$tdataleavesapp2[".listFields"][] = "Posted";
$tdataleavesapp2[".listFields"][] = "Locked";

$tdataleavesapp2[".hideMobileList"] = array();


$tdataleavesapp2[".viewFields"] = array();
$tdataleavesapp2[".viewFields"][] = "LvID";
$tdataleavesapp2[".viewFields"][] = "DateCreated";
$tdataleavesapp2[".viewFields"][] = "LeaveType";
$tdataleavesapp2[".viewFields"][] = "EmployeeID";
$tdataleavesapp2[".viewFields"][] = "FromDate";
$tdataleavesapp2[".viewFields"][] = "ToDate";
$tdataleavesapp2[".viewFields"][] = "Reason";
$tdataleavesapp2[".viewFields"][] = "FirstHalf";
$tdataleavesapp2[".viewFields"][] = "SecondHalf";
$tdataleavesapp2[".viewFields"][] = "Days";
$tdataleavesapp2[".viewFields"][] = "Superior";
$tdataleavesapp2[".viewFields"][] = "1stApproval";
$tdataleavesapp2[".viewFields"][] = "Superior2";
$tdataleavesapp2[".viewFields"][] = "2ndApproval";
$tdataleavesapp2[".viewFields"][] = "TotalDays";
$tdataleavesapp2[".viewFields"][] = "Approved";
$tdataleavesapp2[".viewFields"][] = "ApprovedDate";
$tdataleavesapp2[".viewFields"][] = "ApprovedTime";
$tdataleavesapp2[".viewFields"][] = "Approvedby";
$tdataleavesapp2[".viewFields"][] = "Posted";
$tdataleavesapp2[".viewFields"][] = "Locked";

$tdataleavesapp2[".addFields"] = array();

$tdataleavesapp2[".masterListFields"] = array();
$tdataleavesapp2[".masterListFields"][] = "LvID";
$tdataleavesapp2[".masterListFields"][] = "DateCreated";
$tdataleavesapp2[".masterListFields"][] = "LeaveType";
$tdataleavesapp2[".masterListFields"][] = "EmployeeID";
$tdataleavesapp2[".masterListFields"][] = "FromDate";
$tdataleavesapp2[".masterListFields"][] = "ToDate";
$tdataleavesapp2[".masterListFields"][] = "Reason";
$tdataleavesapp2[".masterListFields"][] = "FirstHalf";
$tdataleavesapp2[".masterListFields"][] = "SecondHalf";
$tdataleavesapp2[".masterListFields"][] = "Days";
$tdataleavesapp2[".masterListFields"][] = "Superior";
$tdataleavesapp2[".masterListFields"][] = "1stApproval";
$tdataleavesapp2[".masterListFields"][] = "Superior2";
$tdataleavesapp2[".masterListFields"][] = "2ndApproval";
$tdataleavesapp2[".masterListFields"][] = "TotalDays";
$tdataleavesapp2[".masterListFields"][] = "Approved";
$tdataleavesapp2[".masterListFields"][] = "ApprovedDate";
$tdataleavesapp2[".masterListFields"][] = "ApprovedTime";
$tdataleavesapp2[".masterListFields"][] = "Approvedby";
$tdataleavesapp2[".masterListFields"][] = "Posted";
$tdataleavesapp2[".masterListFields"][] = "Locked";

$tdataleavesapp2[".inlineAddFields"] = array();

$tdataleavesapp2[".editFields"] = array();
$tdataleavesapp2[".editFields"][] = "DateCreated";
$tdataleavesapp2[".editFields"][] = "LeaveType";
$tdataleavesapp2[".editFields"][] = "EmployeeID";
$tdataleavesapp2[".editFields"][] = "FromDate";
$tdataleavesapp2[".editFields"][] = "ToDate";
$tdataleavesapp2[".editFields"][] = "Reason";
$tdataleavesapp2[".editFields"][] = "FirstHalf";
$tdataleavesapp2[".editFields"][] = "SecondHalf";
$tdataleavesapp2[".editFields"][] = "Days";
$tdataleavesapp2[".editFields"][] = "Superior";
$tdataleavesapp2[".editFields"][] = "1stApproval";
$tdataleavesapp2[".editFields"][] = "Superior2";
$tdataleavesapp2[".editFields"][] = "2ndApproval";
$tdataleavesapp2[".editFields"][] = "Approved";
$tdataleavesapp2[".editFields"][] = "ApprovedDate";
$tdataleavesapp2[".editFields"][] = "ApprovedTime";
$tdataleavesapp2[".editFields"][] = "Approvedby";
$tdataleavesapp2[".editFields"][] = "Posted";
$tdataleavesapp2[".editFields"][] = "Locked";

$tdataleavesapp2[".inlineEditFields"] = array();
$tdataleavesapp2[".inlineEditFields"][] = "DateCreated";
$tdataleavesapp2[".inlineEditFields"][] = "LeaveType";
$tdataleavesapp2[".inlineEditFields"][] = "EmployeeID";
$tdataleavesapp2[".inlineEditFields"][] = "FromDate";
$tdataleavesapp2[".inlineEditFields"][] = "ToDate";
$tdataleavesapp2[".inlineEditFields"][] = "Reason";
$tdataleavesapp2[".inlineEditFields"][] = "FirstHalf";
$tdataleavesapp2[".inlineEditFields"][] = "SecondHalf";
$tdataleavesapp2[".inlineEditFields"][] = "Days";
$tdataleavesapp2[".inlineEditFields"][] = "Superior";
$tdataleavesapp2[".inlineEditFields"][] = "1stApproval";
$tdataleavesapp2[".inlineEditFields"][] = "Superior2";
$tdataleavesapp2[".inlineEditFields"][] = "2ndApproval";
$tdataleavesapp2[".inlineEditFields"][] = "Approved";
$tdataleavesapp2[".inlineEditFields"][] = "ApprovedDate";
$tdataleavesapp2[".inlineEditFields"][] = "ApprovedTime";
$tdataleavesapp2[".inlineEditFields"][] = "Approvedby";
$tdataleavesapp2[".inlineEditFields"][] = "Posted";
$tdataleavesapp2[".inlineEditFields"][] = "Locked";

$tdataleavesapp2[".updateSelectedFields"] = array();
$tdataleavesapp2[".updateSelectedFields"][] = "DateCreated";
$tdataleavesapp2[".updateSelectedFields"][] = "LeaveType";
$tdataleavesapp2[".updateSelectedFields"][] = "EmployeeID";
$tdataleavesapp2[".updateSelectedFields"][] = "FromDate";
$tdataleavesapp2[".updateSelectedFields"][] = "ToDate";
$tdataleavesapp2[".updateSelectedFields"][] = "Reason";
$tdataleavesapp2[".updateSelectedFields"][] = "FirstHalf";
$tdataleavesapp2[".updateSelectedFields"][] = "SecondHalf";
$tdataleavesapp2[".updateSelectedFields"][] = "Days";
$tdataleavesapp2[".updateSelectedFields"][] = "Superior";
$tdataleavesapp2[".updateSelectedFields"][] = "Approved";
$tdataleavesapp2[".updateSelectedFields"][] = "ApprovedDate";
$tdataleavesapp2[".updateSelectedFields"][] = "ApprovedTime";
$tdataleavesapp2[".updateSelectedFields"][] = "Approvedby";
$tdataleavesapp2[".updateSelectedFields"][] = "Posted";
$tdataleavesapp2[".updateSelectedFields"][] = "Locked";


$tdataleavesapp2[".exportFields"] = array();
$tdataleavesapp2[".exportFields"][] = "LvID";
$tdataleavesapp2[".exportFields"][] = "DateCreated";
$tdataleavesapp2[".exportFields"][] = "LeaveType";
$tdataleavesapp2[".exportFields"][] = "EmployeeID";
$tdataleavesapp2[".exportFields"][] = "FromDate";
$tdataleavesapp2[".exportFields"][] = "ToDate";
$tdataleavesapp2[".exportFields"][] = "Reason";
$tdataleavesapp2[".exportFields"][] = "FirstHalf";
$tdataleavesapp2[".exportFields"][] = "SecondHalf";
$tdataleavesapp2[".exportFields"][] = "Days";
$tdataleavesapp2[".exportFields"][] = "Superior";
$tdataleavesapp2[".exportFields"][] = "1stApproval";
$tdataleavesapp2[".exportFields"][] = "Superior2";
$tdataleavesapp2[".exportFields"][] = "2ndApproval";
$tdataleavesapp2[".exportFields"][] = "TotalDays";
$tdataleavesapp2[".exportFields"][] = "Approved";
$tdataleavesapp2[".exportFields"][] = "ApprovedDate";
$tdataleavesapp2[".exportFields"][] = "ApprovedTime";
$tdataleavesapp2[".exportFields"][] = "Approvedby";
$tdataleavesapp2[".exportFields"][] = "Posted";
$tdataleavesapp2[".exportFields"][] = "Locked";

$tdataleavesapp2[".importFields"] = array();
$tdataleavesapp2[".importFields"][] = "LvID";
$tdataleavesapp2[".importFields"][] = "FromDate";
$tdataleavesapp2[".importFields"][] = "LeaveType";
$tdataleavesapp2[".importFields"][] = "Days";
$tdataleavesapp2[".importFields"][] = "EmployeeID";
$tdataleavesapp2[".importFields"][] = "ToDate";
$tdataleavesapp2[".importFields"][] = "Approved";
$tdataleavesapp2[".importFields"][] = "ApprovedDate";
$tdataleavesapp2[".importFields"][] = "Approvedby";
$tdataleavesapp2[".importFields"][] = "Posted";
$tdataleavesapp2[".importFields"][] = "DateCreated";
$tdataleavesapp2[".importFields"][] = "ApprovedTime";
$tdataleavesapp2[".importFields"][] = "FirstHalf";
$tdataleavesapp2[".importFields"][] = "SecondHalf";
$tdataleavesapp2[".importFields"][] = "Locked";
$tdataleavesapp2[".importFields"][] = "Superior";
$tdataleavesapp2[".importFields"][] = "Reason";
$tdataleavesapp2[".importFields"][] = "Superior2";
$tdataleavesapp2[".importFields"][] = "1stApproval";
$tdataleavesapp2[".importFields"][] = "2ndApproval";
$tdataleavesapp2[".importFields"][] = "TotalDays";

$tdataleavesapp2[".printFields"] = array();
$tdataleavesapp2[".printFields"][] = "LvID";
$tdataleavesapp2[".printFields"][] = "DateCreated";
$tdataleavesapp2[".printFields"][] = "LeaveType";
$tdataleavesapp2[".printFields"][] = "EmployeeID";
$tdataleavesapp2[".printFields"][] = "FromDate";
$tdataleavesapp2[".printFields"][] = "ToDate";
$tdataleavesapp2[".printFields"][] = "Reason";
$tdataleavesapp2[".printFields"][] = "FirstHalf";
$tdataleavesapp2[".printFields"][] = "SecondHalf";
$tdataleavesapp2[".printFields"][] = "Days";
$tdataleavesapp2[".printFields"][] = "Superior";
$tdataleavesapp2[".printFields"][] = "1stApproval";
$tdataleavesapp2[".printFields"][] = "Superior2";
$tdataleavesapp2[".printFields"][] = "2ndApproval";
$tdataleavesapp2[".printFields"][] = "TotalDays";
$tdataleavesapp2[".printFields"][] = "Approved";
$tdataleavesapp2[".printFields"][] = "ApprovedDate";
$tdataleavesapp2[".printFields"][] = "ApprovedTime";
$tdataleavesapp2[".printFields"][] = "Approvedby";
$tdataleavesapp2[".printFields"][] = "Posted";
$tdataleavesapp2[".printFields"][] = "Locked";


//	LvID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LvID";
	$fdata["GoodName"] = "LvID";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp2","LvID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LvID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LvID";

	
	
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




	$tdataleavesapp2["LvID"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp2","FromDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 120;

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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataleavesapp2["FromDate"] = $fdata;
//	LeaveType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LeaveType";
	$fdata["GoodName"] = "LeaveType";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp2","LeaveType");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LeaveType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LeaveType";

	
	
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
	$edata["LookupTable"] = "leavetypes";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "LTID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "LeaveType";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 240;

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




	$tdataleavesapp2["LeaveType"] = $fdata;
//	Days
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Days";
	$fdata["GoodName"] = "Days";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp2","Days");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Days";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Days";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 50;

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




	$tdataleavesapp2["Days"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp2","EmployeeID");
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
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EmployeeID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "user_name";
	
	

	
	$edata["LookupOrderBy"] = "user_name";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 290;

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




	$tdataleavesapp2["EmployeeID"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp2","ToDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 120;

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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataleavesapp2["ToDate"] = $fdata;
//	Approved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Approved";
	$fdata["GoodName"] = "Approved";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp2","Approved");
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

	
	
	
	
	
	
		$edata["controlWidth"] = 40;

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




	$tdataleavesapp2["Approved"] = $fdata;
//	ApprovedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ApprovedDate";
	$fdata["GoodName"] = "ApprovedDate";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp2","ApprovedDate");
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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 120;

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




	$tdataleavesapp2["ApprovedDate"] = $fdata;
//	Approvedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Approvedby";
	$fdata["GoodName"] = "Approvedby";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp2","Approvedby");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataleavesapp2["Approvedby"] = $fdata;
//	Posted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Posted";
	$fdata["GoodName"] = "Posted";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp2","Posted");
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

	
	
	
	
	
	
		$edata["controlWidth"] = 30;

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




	$tdataleavesapp2["Posted"] = $fdata;
//	DateCreated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DateCreated";
	$fdata["GoodName"] = "DateCreated";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp2","DateCreated");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataleavesapp2["DateCreated"] = $fdata;
//	ApprovedTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ApprovedTime";
	$fdata["GoodName"] = "ApprovedTime";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp2","ApprovedTime");
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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 100;

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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataleavesapp2["ApprovedTime"] = $fdata;
//	FirstHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "FirstHalf";
	$fdata["GoodName"] = "FirstHalf";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp2","FirstHalf");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FirstHalf";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FirstHalf";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 42;

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




	$tdataleavesapp2["FirstHalf"] = $fdata;
//	SecondHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "SecondHalf";
	$fdata["GoodName"] = "SecondHalf";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp2","SecondHalf");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SecondHalf";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SecondHalf";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 42;

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




	$tdataleavesapp2["SecondHalf"] = $fdata;
//	Locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Locked";
	$fdata["GoodName"] = "Locked";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp2","Locked");
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

	
	
	
	
	
	
		$edata["controlWidth"] = 32;

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




	$tdataleavesapp2["Locked"] = $fdata;
//	Superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Superior";
	$fdata["GoodName"] = "Superior";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp2","Superior");
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

	
	
	
	
	
	
		$edata["controlWidth"] = 242;

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




	$tdataleavesapp2["Superior"] = $fdata;
//	Reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Reason";
	$fdata["GoodName"] = "Reason";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp2","Reason");
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataleavesapp2["Reason"] = $fdata;
//	Superior2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Superior2";
	$fdata["GoodName"] = "Superior2";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp2","Superior2");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdataleavesapp2["Superior2"] = $fdata;
//	1stApproval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "1stApproval";
	$fdata["GoodName"] = "1stApproval";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp2","1stApproval");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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




	$tdataleavesapp2["1stApproval"] = $fdata;
//	2ndApproval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "2ndApproval";
	$fdata["GoodName"] = "2ndApproval";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp2","2ndApproval");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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




	$tdataleavesapp2["2ndApproval"] = $fdata;
//	TotalDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "TotalDays";
	$fdata["GoodName"] = "TotalDays";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp2","TotalDays");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TotalDays";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TotalDays";

	
	
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




	$tdataleavesapp2["TotalDays"] = $fdata;


$tables_data["leavesapp2"]=&$tdataleavesapp2;
$field_labels["leavesapp2"] = &$fieldLabelsleavesapp2;
$fieldToolTips["leavesapp2"] = &$fieldToolTipsleavesapp2;
$placeHolders["leavesapp2"] = &$placeHoldersleavesapp2;
$page_titles["leavesapp2"] = &$pageTitlesleavesapp2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["leavesapp2"] = array();
//	leaveremarks
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="leaveremarks";
		$detailsParam["dOriginalTable"] = "leaveremarks";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "leaveremarks";
	$detailsParam["dCaptionTable"] = GetTableCaption("leaveremarks");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["leavesapp2"][$dIndex] = $detailsParam;

	
		$detailsTablesData["leavesapp2"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["leavesapp2"][$dIndex]["masterKeys"][]="LvID";

				$detailsTablesData["leavesapp2"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["leavesapp2"][$dIndex]["detailKeys"][]="LvID";

// tables which are master tables for current table (detail)
$masterTablesData["leavesapp2"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_leavesapp2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LvID,  FromDate,  LeaveType,  Days,  EmployeeID,  ToDate,  Approved,  ApprovedDate,  Approvedby,  Posted,  DateCreated,  ApprovedTime,  FirstHalf,  SecondHalf,  Locked,  Superior,  Reason,  Superior2,  `1stApproval`,  `2ndApproval`,  TotalDays";
$proto0["m_strFrom"] = "FROM leaves";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY LvID DESC";
	
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
	"m_strName" => "LvID",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp2"
));

$proto6["m_sql"] = "LvID";
$proto6["m_srcTableName"] = "leavesapp2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp2"
));

$proto8["m_sql"] = "FromDate";
$proto8["m_srcTableName"] = "leavesapp2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "LeaveType",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp2"
));

$proto10["m_sql"] = "LeaveType";
$proto10["m_srcTableName"] = "leavesapp2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Days",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp2"
));

$proto12["m_sql"] = "Days";
$proto12["m_srcTableName"] = "leavesapp2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp2"
));

$proto14["m_sql"] = "EmployeeID";
$proto14["m_srcTableName"] = "leavesapp2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp2"
));

$proto16["m_sql"] = "ToDate";
$proto16["m_srcTableName"] = "leavesapp2";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Approved",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp2"
));

$proto18["m_sql"] = "Approved";
$proto18["m_srcTableName"] = "leavesapp2";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedDate",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp2"
));

$proto20["m_sql"] = "ApprovedDate";
$proto20["m_srcTableName"] = "leavesapp2";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Approvedby",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp2"
));

$proto22["m_sql"] = "Approvedby";
$proto22["m_srcTableName"] = "leavesapp2";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Posted",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp2"
));

$proto24["m_sql"] = "Posted";
$proto24["m_srcTableName"] = "leavesapp2";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DateCreated",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp2"
));

$proto26["m_sql"] = "DateCreated";
$proto26["m_srcTableName"] = "leavesapp2";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedTime",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp2"
));

$proto28["m_sql"] = "ApprovedTime";
$proto28["m_srcTableName"] = "leavesapp2";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "FirstHalf",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp2"
));

$proto30["m_sql"] = "FirstHalf";
$proto30["m_srcTableName"] = "leavesapp2";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "SecondHalf",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp2"
));

$proto32["m_sql"] = "SecondHalf";
$proto32["m_srcTableName"] = "leavesapp2";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Locked",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp2"
));

$proto34["m_sql"] = "Locked";
$proto34["m_srcTableName"] = "leavesapp2";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp2"
));

$proto36["m_sql"] = "Superior";
$proto36["m_srcTableName"] = "leavesapp2";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Reason",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp2"
));

$proto38["m_sql"] = "Reason";
$proto38["m_srcTableName"] = "leavesapp2";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior2",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp2"
));

$proto40["m_sql"] = "Superior2";
$proto40["m_srcTableName"] = "leavesapp2";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "1stApproval",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp2"
));

$proto42["m_sql"] = "`1stApproval`";
$proto42["m_srcTableName"] = "leavesapp2";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "2ndApproval",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp2"
));

$proto44["m_sql"] = "`2ndApproval`";
$proto44["m_srcTableName"] = "leavesapp2";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalDays",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp2"
));

$proto46["m_sql"] = "TotalDays";
$proto46["m_srcTableName"] = "leavesapp2";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "leaves";
$proto49["m_srcTableName"] = "leavesapp2";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "LvID";
$proto49["m_columns"][] = "FromDate";
$proto49["m_columns"][] = "LeaveType";
$proto49["m_columns"][] = "Days";
$proto49["m_columns"][] = "EmployeeID";
$proto49["m_columns"][] = "ToDate";
$proto49["m_columns"][] = "Approved";
$proto49["m_columns"][] = "ApprovedDate";
$proto49["m_columns"][] = "Approvedby";
$proto49["m_columns"][] = "Posted";
$proto49["m_columns"][] = "DateCreated";
$proto49["m_columns"][] = "ApprovedTime";
$proto49["m_columns"][] = "FirstHalf";
$proto49["m_columns"][] = "SecondHalf";
$proto49["m_columns"][] = "Locked";
$proto49["m_columns"][] = "Superior";
$proto49["m_columns"][] = "Reason";
$proto49["m_columns"][] = "Superior2";
$proto49["m_columns"][] = "1stApproval";
$proto49["m_columns"][] = "2ndApproval";
$proto49["m_columns"][] = "TotalDays";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "leaves";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "leavesapp2";
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
	"m_strName" => "LvID",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp2"
));

$proto52["m_column"]=$obj;
$proto52["m_bAsc"] = 0;
$proto52["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto52);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="leavesapp2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_leavesapp2 = createSqlQuery_leavesapp2();


	
		;

																					

$tdataleavesapp2[".sqlquery"] = $queryData_leavesapp2;

include_once(getabspath("include/leavesapp2_events.php"));
$tableEvents["leavesapp2"] = new eventclass_leavesapp2;
$tdataleavesapp2[".hasEvents"] = true;

?>