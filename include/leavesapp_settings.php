<?php
require_once(getabspath("classes/cipherer.php"));




$tdataleavesapp = array();
	$tdataleavesapp[".truncateText"] = true;
	$tdataleavesapp[".NumberOfChars"] = 80;
	$tdataleavesapp[".ShortName"] = "leavesapp";
	$tdataleavesapp[".OwnerID"] = "Superior";
	$tdataleavesapp[".OriginalTable"] = "leaves";

//	field labels
$fieldLabelsleavesapp = array();
$fieldToolTipsleavesapp = array();
$pageTitlesleavesapp = array();
$placeHoldersleavesapp = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsleavesapp["English"] = array();
	$fieldToolTipsleavesapp["English"] = array();
	$placeHoldersleavesapp["English"] = array();
	$pageTitlesleavesapp["English"] = array();
	$fieldLabelsleavesapp["English"]["LvID"] = "Lv ID";
	$fieldToolTipsleavesapp["English"]["LvID"] = "";
	$placeHoldersleavesapp["English"]["LvID"] = "";
	$fieldLabelsleavesapp["English"]["LeaveType"] = "Leave Type";
	$fieldToolTipsleavesapp["English"]["LeaveType"] = "";
	$placeHoldersleavesapp["English"]["LeaveType"] = "";
	$fieldLabelsleavesapp["English"]["Days"] = "Half/Whole Day";
	$fieldToolTipsleavesapp["English"]["Days"] = "";
	$placeHoldersleavesapp["English"]["Days"] = "";
	$fieldLabelsleavesapp["English"]["EmployeeID"] = "Employee";
	$fieldToolTipsleavesapp["English"]["EmployeeID"] = "";
	$placeHoldersleavesapp["English"]["EmployeeID"] = "";
	$fieldLabelsleavesapp["English"]["FromDate"] = "From Date";
	$fieldToolTipsleavesapp["English"]["FromDate"] = "";
	$placeHoldersleavesapp["English"]["FromDate"] = "";
	$fieldLabelsleavesapp["English"]["ToDate"] = "To Date";
	$fieldToolTipsleavesapp["English"]["ToDate"] = "";
	$placeHoldersleavesapp["English"]["ToDate"] = "";
	$fieldLabelsleavesapp["English"]["Approved"] = "Approved";
	$fieldToolTipsleavesapp["English"]["Approved"] = "";
	$placeHoldersleavesapp["English"]["Approved"] = "";
	$fieldLabelsleavesapp["English"]["ApprovedDate"] = "Approved Date";
	$fieldToolTipsleavesapp["English"]["ApprovedDate"] = "";
	$placeHoldersleavesapp["English"]["ApprovedDate"] = "";
	$fieldLabelsleavesapp["English"]["Approvedby"] = "Approved by";
	$fieldToolTipsleavesapp["English"]["Approvedby"] = "";
	$placeHoldersleavesapp["English"]["Approvedby"] = "";
	$fieldLabelsleavesapp["English"]["Posted"] = "Posted";
	$fieldToolTipsleavesapp["English"]["Posted"] = "";
	$placeHoldersleavesapp["English"]["Posted"] = "";
	$fieldLabelsleavesapp["English"]["DateCreated"] = "Date Created";
	$fieldToolTipsleavesapp["English"]["DateCreated"] = "";
	$placeHoldersleavesapp["English"]["DateCreated"] = "";
	$fieldLabelsleavesapp["English"]["ApprovedTime"] = "Approved Time";
	$fieldToolTipsleavesapp["English"]["ApprovedTime"] = "";
	$placeHoldersleavesapp["English"]["ApprovedTime"] = "";
	$fieldLabelsleavesapp["English"]["FirstHalf"] = "First Half";
	$fieldToolTipsleavesapp["English"]["FirstHalf"] = "";
	$placeHoldersleavesapp["English"]["FirstHalf"] = "";
	$fieldLabelsleavesapp["English"]["SecondHalf"] = "Second Half";
	$fieldToolTipsleavesapp["English"]["SecondHalf"] = "";
	$placeHoldersleavesapp["English"]["SecondHalf"] = "";
	$fieldLabelsleavesapp["English"]["Locked"] = "Locked";
	$fieldToolTipsleavesapp["English"]["Locked"] = "";
	$placeHoldersleavesapp["English"]["Locked"] = "";
	$fieldLabelsleavesapp["English"]["Superior"] = "Supervisor";
	$fieldToolTipsleavesapp["English"]["Superior"] = "";
	$placeHoldersleavesapp["English"]["Superior"] = "";
	$fieldLabelsleavesapp["English"]["Reason"] = "Reason";
	$fieldToolTipsleavesapp["English"]["Reason"] = "";
	$placeHoldersleavesapp["English"]["Reason"] = "";
	$fieldLabelsleavesapp["English"]["Superior2"] = "Manager";
	$fieldToolTipsleavesapp["English"]["Superior2"] = "";
	$placeHoldersleavesapp["English"]["Superior2"] = "";
	$fieldLabelsleavesapp["English"]["1stApproval"] = "Supervisor Approval";
	$fieldToolTipsleavesapp["English"]["1stApproval"] = "";
	$placeHoldersleavesapp["English"]["1stApproval"] = "";
	$fieldLabelsleavesapp["English"]["2ndApproval"] = "Manager Approval";
	$fieldToolTipsleavesapp["English"]["2ndApproval"] = "";
	$placeHoldersleavesapp["English"]["2ndApproval"] = "";
	$fieldLabelsleavesapp["English"]["TotalDays"] = "Total Days";
	$fieldToolTipsleavesapp["English"]["TotalDays"] = "";
	$placeHoldersleavesapp["English"]["TotalDays"] = "";
	if (count($fieldToolTipsleavesapp["English"]))
		$tdataleavesapp[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsleavesapp[""] = array();
	$fieldToolTipsleavesapp[""] = array();
	$placeHoldersleavesapp[""] = array();
	$pageTitlesleavesapp[""] = array();
	$fieldLabelsleavesapp[""]["TotalDays"] = "Total Days";
	$fieldToolTipsleavesapp[""]["TotalDays"] = "";
	$placeHoldersleavesapp[""]["TotalDays"] = "";
	if (count($fieldToolTipsleavesapp[""]))
		$tdataleavesapp[".isUseToolTips"] = true;
}


	$tdataleavesapp[".NCSearch"] = true;



$tdataleavesapp[".shortTableName"] = "leavesapp";
$tdataleavesapp[".nSecOptions"] = 1;
$tdataleavesapp[".recsPerRowPrint"] = 1;
$tdataleavesapp[".mainTableOwnerID"] = "Superior";
$tdataleavesapp[".moveNext"] = 1;
$tdataleavesapp[".entityType"] = 1;

$tdataleavesapp[".strOriginalTableName"] = "leaves";

	



$tdataleavesapp[".showAddInPopup"] = false;

$tdataleavesapp[".showEditInPopup"] = false;

$tdataleavesapp[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataleavesapp[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataleavesapp[".fieldsForRegister"] = array();

$tdataleavesapp[".listAjax"] = false;

	$tdataleavesapp[".audit"] = false;

	$tdataleavesapp[".locking"] = false;

$tdataleavesapp[".edit"] = true;
$tdataleavesapp[".afterEditAction"] = 0;
$tdataleavesapp[".closePopupAfterEdit"] = 1;
$tdataleavesapp[".afterEditActionDetTable"] = "leaveremarks";


$tdataleavesapp[".list"] = true;

$tdataleavesapp[".inlineEdit"] = true;


$tdataleavesapp[".reorderRecordsByHeader"] = true;


$tdataleavesapp[".exportFormatting"] = 2;
$tdataleavesapp[".exportDelimiter"] = ",";
		
$tdataleavesapp[".view"] = true;

$tdataleavesapp[".import"] = true;

$tdataleavesapp[".exportTo"] = true;

$tdataleavesapp[".printFriendly"] = true;

$tdataleavesapp[".delete"] = true;

$tdataleavesapp[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataleavesapp[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataleavesapp[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataleavesapp[".searchSaving"] = false;
//

$tdataleavesapp[".showSearchPanel"] = true;
		$tdataleavesapp[".flexibleSearch"] = true;

$tdataleavesapp[".isUseAjaxSuggest"] = true;

$tdataleavesapp[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdataleavesapp[".ajaxCodeSnippetAdded"] = false;

$tdataleavesapp[".buttonsAdded"] = false;

$tdataleavesapp[".addPageEvents"] = true;

// use timepicker for search panel
$tdataleavesapp[".isUseTimeForSearch"] = true;





$tdataleavesapp[".allSearchFields"] = array();
$tdataleavesapp[".filterFields"] = array();
$tdataleavesapp[".requiredSearchFields"] = array();

$tdataleavesapp[".allSearchFields"][] = "LvID";
	$tdataleavesapp[".allSearchFields"][] = "DateCreated";
	$tdataleavesapp[".allSearchFields"][] = "LeaveType";
	$tdataleavesapp[".allSearchFields"][] = "EmployeeID";
	$tdataleavesapp[".allSearchFields"][] = "FromDate";
	$tdataleavesapp[".allSearchFields"][] = "ToDate";
	$tdataleavesapp[".allSearchFields"][] = "Reason";
	$tdataleavesapp[".allSearchFields"][] = "FirstHalf";
	$tdataleavesapp[".allSearchFields"][] = "SecondHalf";
	$tdataleavesapp[".allSearchFields"][] = "Days";
	$tdataleavesapp[".allSearchFields"][] = "Superior";
	$tdataleavesapp[".allSearchFields"][] = "1stApproval";
	$tdataleavesapp[".allSearchFields"][] = "TotalDays";
	$tdataleavesapp[".allSearchFields"][] = "Superior2";
	$tdataleavesapp[".allSearchFields"][] = "2ndApproval";
	$tdataleavesapp[".allSearchFields"][] = "Approved";
	$tdataleavesapp[".allSearchFields"][] = "ApprovedDate";
	$tdataleavesapp[".allSearchFields"][] = "ApprovedTime";
	$tdataleavesapp[".allSearchFields"][] = "Approvedby";
	$tdataleavesapp[".allSearchFields"][] = "Posted";
	$tdataleavesapp[".allSearchFields"][] = "Locked";
	

$tdataleavesapp[".googleLikeFields"] = array();
$tdataleavesapp[".googleLikeFields"][] = "LvID";
$tdataleavesapp[".googleLikeFields"][] = "FromDate";
$tdataleavesapp[".googleLikeFields"][] = "LeaveType";
$tdataleavesapp[".googleLikeFields"][] = "Days";
$tdataleavesapp[".googleLikeFields"][] = "EmployeeID";
$tdataleavesapp[".googleLikeFields"][] = "ToDate";
$tdataleavesapp[".googleLikeFields"][] = "Approved";
$tdataleavesapp[".googleLikeFields"][] = "ApprovedDate";
$tdataleavesapp[".googleLikeFields"][] = "Approvedby";
$tdataleavesapp[".googleLikeFields"][] = "Posted";
$tdataleavesapp[".googleLikeFields"][] = "DateCreated";
$tdataleavesapp[".googleLikeFields"][] = "ApprovedTime";
$tdataleavesapp[".googleLikeFields"][] = "FirstHalf";
$tdataleavesapp[".googleLikeFields"][] = "SecondHalf";
$tdataleavesapp[".googleLikeFields"][] = "Locked";
$tdataleavesapp[".googleLikeFields"][] = "Superior";
$tdataleavesapp[".googleLikeFields"][] = "Reason";
$tdataleavesapp[".googleLikeFields"][] = "Superior2";
$tdataleavesapp[".googleLikeFields"][] = "1stApproval";
$tdataleavesapp[".googleLikeFields"][] = "2ndApproval";
$tdataleavesapp[".googleLikeFields"][] = "TotalDays";


$tdataleavesapp[".advSearchFields"] = array();
$tdataleavesapp[".advSearchFields"][] = "LvID";
$tdataleavesapp[".advSearchFields"][] = "DateCreated";
$tdataleavesapp[".advSearchFields"][] = "LeaveType";
$tdataleavesapp[".advSearchFields"][] = "EmployeeID";
$tdataleavesapp[".advSearchFields"][] = "FromDate";
$tdataleavesapp[".advSearchFields"][] = "ToDate";
$tdataleavesapp[".advSearchFields"][] = "Reason";
$tdataleavesapp[".advSearchFields"][] = "FirstHalf";
$tdataleavesapp[".advSearchFields"][] = "SecondHalf";
$tdataleavesapp[".advSearchFields"][] = "Days";
$tdataleavesapp[".advSearchFields"][] = "Superior";
$tdataleavesapp[".advSearchFields"][] = "1stApproval";
$tdataleavesapp[".advSearchFields"][] = "TotalDays";
$tdataleavesapp[".advSearchFields"][] = "Superior2";
$tdataleavesapp[".advSearchFields"][] = "2ndApproval";
$tdataleavesapp[".advSearchFields"][] = "Approved";
$tdataleavesapp[".advSearchFields"][] = "ApprovedDate";
$tdataleavesapp[".advSearchFields"][] = "ApprovedTime";
$tdataleavesapp[".advSearchFields"][] = "Approvedby";
$tdataleavesapp[".advSearchFields"][] = "Posted";
$tdataleavesapp[".advSearchFields"][] = "Locked";

$tdataleavesapp[".tableType"] = "list";

$tdataleavesapp[".printerPageOrientation"] = 0;
$tdataleavesapp[".nPrinterPageScale"] = 100;

$tdataleavesapp[".nPrinterSplitRecords"] = 40;

$tdataleavesapp[".nPrinterPDFSplitRecords"] = 40;



$tdataleavesapp[".geocodingEnabled"] = false;





$tdataleavesapp[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataleavesapp[".pageSize"] = 20;

$tdataleavesapp[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY LvID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataleavesapp[".strOrderBy"] = $tstrOrderBy;

$tdataleavesapp[".orderindexes"] = array();
	$tdataleavesapp[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "LvID");


$tdataleavesapp[".sqlHead"] = "SELECT LvID,  FromDate,  LeaveType,  Days,  EmployeeID,  ToDate,  Approved,  ApprovedDate,  Approvedby,  Posted,  DateCreated,  ApprovedTime,  FirstHalf,  SecondHalf,  Locked,  Superior,  Reason,  Superior2,  `1stApproval`,  `2ndApproval`,  TotalDays";
$tdataleavesapp[".sqlFrom"] = "FROM leaves";
$tdataleavesapp[".sqlWhereExpr"] = "(Superior is not null) AND (`1stApproval` is null) AND (`2ndApproval` is null)";
$tdataleavesapp[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataleavesapp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataleavesapp[".arrGroupsPerPage"] = $arrGPP;

$tdataleavesapp[".highlightSearchResults"] = true;

$tableKeysleavesapp = array();
$tableKeysleavesapp[] = "LvID";
$tdataleavesapp[".Keys"] = $tableKeysleavesapp;

$tdataleavesapp[".listFields"] = array();
$tdataleavesapp[".listFields"][] = "LvID";
$tdataleavesapp[".listFields"][] = "DateCreated";
$tdataleavesapp[".listFields"][] = "LeaveType";
$tdataleavesapp[".listFields"][] = "EmployeeID";
$tdataleavesapp[".listFields"][] = "FromDate";
$tdataleavesapp[".listFields"][] = "ToDate";
$tdataleavesapp[".listFields"][] = "Reason";
$tdataleavesapp[".listFields"][] = "FirstHalf";
$tdataleavesapp[".listFields"][] = "SecondHalf";
$tdataleavesapp[".listFields"][] = "Days";
$tdataleavesapp[".listFields"][] = "Superior";
$tdataleavesapp[".listFields"][] = "1stApproval";
$tdataleavesapp[".listFields"][] = "TotalDays";
$tdataleavesapp[".listFields"][] = "Superior2";
$tdataleavesapp[".listFields"][] = "2ndApproval";
$tdataleavesapp[".listFields"][] = "Approved";
$tdataleavesapp[".listFields"][] = "ApprovedDate";
$tdataleavesapp[".listFields"][] = "ApprovedTime";
$tdataleavesapp[".listFields"][] = "Approvedby";
$tdataleavesapp[".listFields"][] = "Posted";
$tdataleavesapp[".listFields"][] = "Locked";

$tdataleavesapp[".hideMobileList"] = array();


$tdataleavesapp[".viewFields"] = array();
$tdataleavesapp[".viewFields"][] = "LvID";
$tdataleavesapp[".viewFields"][] = "DateCreated";
$tdataleavesapp[".viewFields"][] = "LeaveType";
$tdataleavesapp[".viewFields"][] = "EmployeeID";
$tdataleavesapp[".viewFields"][] = "FromDate";
$tdataleavesapp[".viewFields"][] = "ToDate";
$tdataleavesapp[".viewFields"][] = "Reason";
$tdataleavesapp[".viewFields"][] = "FirstHalf";
$tdataleavesapp[".viewFields"][] = "SecondHalf";
$tdataleavesapp[".viewFields"][] = "Days";
$tdataleavesapp[".viewFields"][] = "Superior";
$tdataleavesapp[".viewFields"][] = "1stApproval";
$tdataleavesapp[".viewFields"][] = "TotalDays";
$tdataleavesapp[".viewFields"][] = "Superior2";
$tdataleavesapp[".viewFields"][] = "2ndApproval";
$tdataleavesapp[".viewFields"][] = "Approved";
$tdataleavesapp[".viewFields"][] = "ApprovedDate";
$tdataleavesapp[".viewFields"][] = "ApprovedTime";
$tdataleavesapp[".viewFields"][] = "Approvedby";
$tdataleavesapp[".viewFields"][] = "Posted";
$tdataleavesapp[".viewFields"][] = "Locked";

$tdataleavesapp[".addFields"] = array();

$tdataleavesapp[".masterListFields"] = array();
$tdataleavesapp[".masterListFields"][] = "LvID";
$tdataleavesapp[".masterListFields"][] = "DateCreated";
$tdataleavesapp[".masterListFields"][] = "LeaveType";
$tdataleavesapp[".masterListFields"][] = "EmployeeID";
$tdataleavesapp[".masterListFields"][] = "FromDate";
$tdataleavesapp[".masterListFields"][] = "ToDate";
$tdataleavesapp[".masterListFields"][] = "Reason";
$tdataleavesapp[".masterListFields"][] = "FirstHalf";
$tdataleavesapp[".masterListFields"][] = "SecondHalf";
$tdataleavesapp[".masterListFields"][] = "Days";
$tdataleavesapp[".masterListFields"][] = "Superior";
$tdataleavesapp[".masterListFields"][] = "1stApproval";
$tdataleavesapp[".masterListFields"][] = "TotalDays";
$tdataleavesapp[".masterListFields"][] = "Superior2";
$tdataleavesapp[".masterListFields"][] = "2ndApproval";
$tdataleavesapp[".masterListFields"][] = "Approved";
$tdataleavesapp[".masterListFields"][] = "ApprovedDate";
$tdataleavesapp[".masterListFields"][] = "ApprovedTime";
$tdataleavesapp[".masterListFields"][] = "Approvedby";
$tdataleavesapp[".masterListFields"][] = "Posted";
$tdataleavesapp[".masterListFields"][] = "Locked";

$tdataleavesapp[".inlineAddFields"] = array();

$tdataleavesapp[".editFields"] = array();
$tdataleavesapp[".editFields"][] = "DateCreated";
$tdataleavesapp[".editFields"][] = "LeaveType";
$tdataleavesapp[".editFields"][] = "EmployeeID";
$tdataleavesapp[".editFields"][] = "FromDate";
$tdataleavesapp[".editFields"][] = "ToDate";
$tdataleavesapp[".editFields"][] = "Reason";
$tdataleavesapp[".editFields"][] = "FirstHalf";
$tdataleavesapp[".editFields"][] = "SecondHalf";
$tdataleavesapp[".editFields"][] = "Days";
$tdataleavesapp[".editFields"][] = "Superior";
$tdataleavesapp[".editFields"][] = "1stApproval";
$tdataleavesapp[".editFields"][] = "Superior2";
$tdataleavesapp[".editFields"][] = "2ndApproval";
$tdataleavesapp[".editFields"][] = "Approved";
$tdataleavesapp[".editFields"][] = "ApprovedDate";
$tdataleavesapp[".editFields"][] = "ApprovedTime";
$tdataleavesapp[".editFields"][] = "Approvedby";
$tdataleavesapp[".editFields"][] = "Posted";
$tdataleavesapp[".editFields"][] = "Locked";

$tdataleavesapp[".inlineEditFields"] = array();
$tdataleavesapp[".inlineEditFields"][] = "DateCreated";
$tdataleavesapp[".inlineEditFields"][] = "LeaveType";
$tdataleavesapp[".inlineEditFields"][] = "EmployeeID";
$tdataleavesapp[".inlineEditFields"][] = "FromDate";
$tdataleavesapp[".inlineEditFields"][] = "ToDate";
$tdataleavesapp[".inlineEditFields"][] = "Reason";
$tdataleavesapp[".inlineEditFields"][] = "FirstHalf";
$tdataleavesapp[".inlineEditFields"][] = "SecondHalf";
$tdataleavesapp[".inlineEditFields"][] = "Days";
$tdataleavesapp[".inlineEditFields"][] = "Superior";
$tdataleavesapp[".inlineEditFields"][] = "1stApproval";
$tdataleavesapp[".inlineEditFields"][] = "Superior2";
$tdataleavesapp[".inlineEditFields"][] = "2ndApproval";
$tdataleavesapp[".inlineEditFields"][] = "Approved";
$tdataleavesapp[".inlineEditFields"][] = "ApprovedDate";
$tdataleavesapp[".inlineEditFields"][] = "ApprovedTime";
$tdataleavesapp[".inlineEditFields"][] = "Approvedby";
$tdataleavesapp[".inlineEditFields"][] = "Posted";
$tdataleavesapp[".inlineEditFields"][] = "Locked";

$tdataleavesapp[".updateSelectedFields"] = array();
$tdataleavesapp[".updateSelectedFields"][] = "DateCreated";
$tdataleavesapp[".updateSelectedFields"][] = "LeaveType";
$tdataleavesapp[".updateSelectedFields"][] = "EmployeeID";
$tdataleavesapp[".updateSelectedFields"][] = "FromDate";
$tdataleavesapp[".updateSelectedFields"][] = "ToDate";
$tdataleavesapp[".updateSelectedFields"][] = "Reason";
$tdataleavesapp[".updateSelectedFields"][] = "FirstHalf";
$tdataleavesapp[".updateSelectedFields"][] = "SecondHalf";
$tdataleavesapp[".updateSelectedFields"][] = "Days";
$tdataleavesapp[".updateSelectedFields"][] = "Superior";
$tdataleavesapp[".updateSelectedFields"][] = "Approved";
$tdataleavesapp[".updateSelectedFields"][] = "ApprovedDate";
$tdataleavesapp[".updateSelectedFields"][] = "ApprovedTime";
$tdataleavesapp[".updateSelectedFields"][] = "Approvedby";
$tdataleavesapp[".updateSelectedFields"][] = "Posted";
$tdataleavesapp[".updateSelectedFields"][] = "Locked";


$tdataleavesapp[".exportFields"] = array();
$tdataleavesapp[".exportFields"][] = "LvID";
$tdataleavesapp[".exportFields"][] = "DateCreated";
$tdataleavesapp[".exportFields"][] = "LeaveType";
$tdataleavesapp[".exportFields"][] = "EmployeeID";
$tdataleavesapp[".exportFields"][] = "FromDate";
$tdataleavesapp[".exportFields"][] = "ToDate";
$tdataleavesapp[".exportFields"][] = "Reason";
$tdataleavesapp[".exportFields"][] = "FirstHalf";
$tdataleavesapp[".exportFields"][] = "SecondHalf";
$tdataleavesapp[".exportFields"][] = "Days";
$tdataleavesapp[".exportFields"][] = "Superior";
$tdataleavesapp[".exportFields"][] = "1stApproval";
$tdataleavesapp[".exportFields"][] = "TotalDays";
$tdataleavesapp[".exportFields"][] = "Superior2";
$tdataleavesapp[".exportFields"][] = "2ndApproval";
$tdataleavesapp[".exportFields"][] = "Approved";
$tdataleavesapp[".exportFields"][] = "ApprovedDate";
$tdataleavesapp[".exportFields"][] = "ApprovedTime";
$tdataleavesapp[".exportFields"][] = "Approvedby";
$tdataleavesapp[".exportFields"][] = "Posted";
$tdataleavesapp[".exportFields"][] = "Locked";

$tdataleavesapp[".importFields"] = array();
$tdataleavesapp[".importFields"][] = "LvID";
$tdataleavesapp[".importFields"][] = "FromDate";
$tdataleavesapp[".importFields"][] = "LeaveType";
$tdataleavesapp[".importFields"][] = "Days";
$tdataleavesapp[".importFields"][] = "EmployeeID";
$tdataleavesapp[".importFields"][] = "ToDate";
$tdataleavesapp[".importFields"][] = "Approved";
$tdataleavesapp[".importFields"][] = "ApprovedDate";
$tdataleavesapp[".importFields"][] = "Approvedby";
$tdataleavesapp[".importFields"][] = "Posted";
$tdataleavesapp[".importFields"][] = "DateCreated";
$tdataleavesapp[".importFields"][] = "ApprovedTime";
$tdataleavesapp[".importFields"][] = "FirstHalf";
$tdataleavesapp[".importFields"][] = "SecondHalf";
$tdataleavesapp[".importFields"][] = "Locked";
$tdataleavesapp[".importFields"][] = "Superior";
$tdataleavesapp[".importFields"][] = "Reason";
$tdataleavesapp[".importFields"][] = "Superior2";
$tdataleavesapp[".importFields"][] = "1stApproval";
$tdataleavesapp[".importFields"][] = "2ndApproval";
$tdataleavesapp[".importFields"][] = "TotalDays";

$tdataleavesapp[".printFields"] = array();
$tdataleavesapp[".printFields"][] = "LvID";
$tdataleavesapp[".printFields"][] = "DateCreated";
$tdataleavesapp[".printFields"][] = "LeaveType";
$tdataleavesapp[".printFields"][] = "EmployeeID";
$tdataleavesapp[".printFields"][] = "FromDate";
$tdataleavesapp[".printFields"][] = "ToDate";
$tdataleavesapp[".printFields"][] = "Reason";
$tdataleavesapp[".printFields"][] = "FirstHalf";
$tdataleavesapp[".printFields"][] = "SecondHalf";
$tdataleavesapp[".printFields"][] = "Days";
$tdataleavesapp[".printFields"][] = "Superior";
$tdataleavesapp[".printFields"][] = "1stApproval";
$tdataleavesapp[".printFields"][] = "TotalDays";
$tdataleavesapp[".printFields"][] = "Superior2";
$tdataleavesapp[".printFields"][] = "2ndApproval";
$tdataleavesapp[".printFields"][] = "Approved";
$tdataleavesapp[".printFields"][] = "ApprovedDate";
$tdataleavesapp[".printFields"][] = "ApprovedTime";
$tdataleavesapp[".printFields"][] = "Approvedby";
$tdataleavesapp[".printFields"][] = "Posted";
$tdataleavesapp[".printFields"][] = "Locked";


//	LvID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LvID";
	$fdata["GoodName"] = "LvID";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp","LvID");
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




	$tdataleavesapp["LvID"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp","FromDate");
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




	$tdataleavesapp["FromDate"] = $fdata;
//	LeaveType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LeaveType";
	$fdata["GoodName"] = "LeaveType";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp","LeaveType");
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




	$tdataleavesapp["LeaveType"] = $fdata;
//	Days
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Days";
	$fdata["GoodName"] = "Days";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp","Days");
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




	$tdataleavesapp["Days"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp","EmployeeID");
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




	$tdataleavesapp["EmployeeID"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp","ToDate");
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




	$tdataleavesapp["ToDate"] = $fdata;
//	Approved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Approved";
	$fdata["GoodName"] = "Approved";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp","Approved");
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




	$tdataleavesapp["Approved"] = $fdata;
//	ApprovedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ApprovedDate";
	$fdata["GoodName"] = "ApprovedDate";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp","ApprovedDate");
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




	$tdataleavesapp["ApprovedDate"] = $fdata;
//	Approvedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Approvedby";
	$fdata["GoodName"] = "Approvedby";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp","Approvedby");
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




	$tdataleavesapp["Approvedby"] = $fdata;
//	Posted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Posted";
	$fdata["GoodName"] = "Posted";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp","Posted");
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




	$tdataleavesapp["Posted"] = $fdata;
//	DateCreated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DateCreated";
	$fdata["GoodName"] = "DateCreated";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp","DateCreated");
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




	$tdataleavesapp["DateCreated"] = $fdata;
//	ApprovedTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ApprovedTime";
	$fdata["GoodName"] = "ApprovedTime";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp","ApprovedTime");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataleavesapp["ApprovedTime"] = $fdata;
//	FirstHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "FirstHalf";
	$fdata["GoodName"] = "FirstHalf";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp","FirstHalf");
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




	$tdataleavesapp["FirstHalf"] = $fdata;
//	SecondHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "SecondHalf";
	$fdata["GoodName"] = "SecondHalf";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp","SecondHalf");
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




	$tdataleavesapp["SecondHalf"] = $fdata;
//	Locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Locked";
	$fdata["GoodName"] = "Locked";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp","Locked");
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




	$tdataleavesapp["Locked"] = $fdata;
//	Superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Superior";
	$fdata["GoodName"] = "Superior";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp","Superior");
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




	$tdataleavesapp["Superior"] = $fdata;
//	Reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Reason";
	$fdata["GoodName"] = "Reason";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp","Reason");
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




	$tdataleavesapp["Reason"] = $fdata;
//	Superior2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Superior2";
	$fdata["GoodName"] = "Superior2";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp","Superior2");
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




	$tdataleavesapp["Superior2"] = $fdata;
//	1stApproval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "1stApproval";
	$fdata["GoodName"] = "1stApproval";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp","1stApproval");
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




	$tdataleavesapp["1stApproval"] = $fdata;
//	2ndApproval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "2ndApproval";
	$fdata["GoodName"] = "2ndApproval";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp","2ndApproval");
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




	$tdataleavesapp["2ndApproval"] = $fdata;
//	TotalDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "TotalDays";
	$fdata["GoodName"] = "TotalDays";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leavesapp","TotalDays");
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




	$tdataleavesapp["TotalDays"] = $fdata;


$tables_data["leavesapp"]=&$tdataleavesapp;
$field_labels["leavesapp"] = &$fieldLabelsleavesapp;
$fieldToolTips["leavesapp"] = &$fieldToolTipsleavesapp;
$placeHolders["leavesapp"] = &$placeHoldersleavesapp;
$page_titles["leavesapp"] = &$pageTitlesleavesapp;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["leavesapp"] = array();
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
		
	$detailsTablesData["leavesapp"][$dIndex] = $detailsParam;

	
		$detailsTablesData["leavesapp"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["leavesapp"][$dIndex]["masterKeys"][]="LvID";

				$detailsTablesData["leavesapp"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["leavesapp"][$dIndex]["detailKeys"][]="LvID";

// tables which are master tables for current table (detail)
$masterTablesData["leavesapp"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_leavesapp()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LvID,  FromDate,  LeaveType,  Days,  EmployeeID,  ToDate,  Approved,  ApprovedDate,  Approvedby,  Posted,  DateCreated,  ApprovedTime,  FirstHalf,  SecondHalf,  Locked,  Superior,  Reason,  Superior2,  `1stApproval`,  `2ndApproval`,  TotalDays";
$proto0["m_strFrom"] = "FROM leaves";
$proto0["m_strWhere"] = "(Superior is not null) AND (`1stApproval` is null) AND (`2ndApproval` is null)";
$proto0["m_strOrderBy"] = "ORDER BY LvID DESC";
	
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
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp"
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
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp"
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
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp"
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
	"m_strName" => "LvID",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp"
));

$proto12["m_sql"] = "LvID";
$proto12["m_srcTableName"] = "leavesapp";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp"
));

$proto14["m_sql"] = "FromDate";
$proto14["m_srcTableName"] = "leavesapp";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "LeaveType",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp"
));

$proto16["m_sql"] = "LeaveType";
$proto16["m_srcTableName"] = "leavesapp";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Days",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp"
));

$proto18["m_sql"] = "Days";
$proto18["m_srcTableName"] = "leavesapp";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp"
));

$proto20["m_sql"] = "EmployeeID";
$proto20["m_srcTableName"] = "leavesapp";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp"
));

$proto22["m_sql"] = "ToDate";
$proto22["m_srcTableName"] = "leavesapp";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Approved",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp"
));

$proto24["m_sql"] = "Approved";
$proto24["m_srcTableName"] = "leavesapp";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedDate",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp"
));

$proto26["m_sql"] = "ApprovedDate";
$proto26["m_srcTableName"] = "leavesapp";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Approvedby",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp"
));

$proto28["m_sql"] = "Approvedby";
$proto28["m_srcTableName"] = "leavesapp";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Posted",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp"
));

$proto30["m_sql"] = "Posted";
$proto30["m_srcTableName"] = "leavesapp";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DateCreated",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp"
));

$proto32["m_sql"] = "DateCreated";
$proto32["m_srcTableName"] = "leavesapp";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedTime",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp"
));

$proto34["m_sql"] = "ApprovedTime";
$proto34["m_srcTableName"] = "leavesapp";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "FirstHalf",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp"
));

$proto36["m_sql"] = "FirstHalf";
$proto36["m_srcTableName"] = "leavesapp";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "SecondHalf",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp"
));

$proto38["m_sql"] = "SecondHalf";
$proto38["m_srcTableName"] = "leavesapp";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Locked",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp"
));

$proto40["m_sql"] = "Locked";
$proto40["m_srcTableName"] = "leavesapp";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp"
));

$proto42["m_sql"] = "Superior";
$proto42["m_srcTableName"] = "leavesapp";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Reason",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp"
));

$proto44["m_sql"] = "Reason";
$proto44["m_srcTableName"] = "leavesapp";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior2",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp"
));

$proto46["m_sql"] = "Superior2";
$proto46["m_srcTableName"] = "leavesapp";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "1stApproval",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp"
));

$proto48["m_sql"] = "`1stApproval`";
$proto48["m_srcTableName"] = "leavesapp";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "2ndApproval",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp"
));

$proto50["m_sql"] = "`2ndApproval`";
$proto50["m_srcTableName"] = "leavesapp";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalDays",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp"
));

$proto52["m_sql"] = "TotalDays";
$proto52["m_srcTableName"] = "leavesapp";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto54=array();
$proto54["m_link"] = "SQLL_MAIN";
			$proto55=array();
$proto55["m_strName"] = "leaves";
$proto55["m_srcTableName"] = "leavesapp";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "LvID";
$proto55["m_columns"][] = "FromDate";
$proto55["m_columns"][] = "LeaveType";
$proto55["m_columns"][] = "Days";
$proto55["m_columns"][] = "EmployeeID";
$proto55["m_columns"][] = "ToDate";
$proto55["m_columns"][] = "Approved";
$proto55["m_columns"][] = "ApprovedDate";
$proto55["m_columns"][] = "Approvedby";
$proto55["m_columns"][] = "Posted";
$proto55["m_columns"][] = "DateCreated";
$proto55["m_columns"][] = "ApprovedTime";
$proto55["m_columns"][] = "FirstHalf";
$proto55["m_columns"][] = "SecondHalf";
$proto55["m_columns"][] = "Locked";
$proto55["m_columns"][] = "Superior";
$proto55["m_columns"][] = "Reason";
$proto55["m_columns"][] = "Superior2";
$proto55["m_columns"][] = "1stApproval";
$proto55["m_columns"][] = "2ndApproval";
$proto55["m_columns"][] = "TotalDays";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "leaves";
$proto54["m_alias"] = "";
$proto54["m_srcTableName"] = "leavesapp";
$proto56=array();
$proto56["m_sql"] = "";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto58=array();
						$obj = new SQLField(array(
	"m_strName" => "LvID",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leavesapp"
));

$proto58["m_column"]=$obj;
$proto58["m_bAsc"] = 0;
$proto58["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto58);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="leavesapp";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_leavesapp = createSqlQuery_leavesapp();


	
		;

																					

$tdataleavesapp[".sqlquery"] = $queryData_leavesapp;

include_once(getabspath("include/leavesapp_events.php"));
$tableEvents["leavesapp"] = new eventclass_leavesapp;
$tdataleavesapp[".hasEvents"] = true;

?>