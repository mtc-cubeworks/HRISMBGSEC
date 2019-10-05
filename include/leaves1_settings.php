<?php
require_once(getabspath("classes/cipherer.php"));




$tdataleaves1 = array();
	$tdataleaves1[".truncateText"] = true;
	$tdataleaves1[".NumberOfChars"] = 80;
	$tdataleaves1[".ShortName"] = "leaves1";
	$tdataleaves1[".OwnerID"] = "";
	$tdataleaves1[".OriginalTable"] = "leaves";

//	field labels
$fieldLabelsleaves1 = array();
$fieldToolTipsleaves1 = array();
$pageTitlesleaves1 = array();
$placeHoldersleaves1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsleaves1["English"] = array();
	$fieldToolTipsleaves1["English"] = array();
	$placeHoldersleaves1["English"] = array();
	$pageTitlesleaves1["English"] = array();
	$fieldLabelsleaves1["English"]["LvID"] = "Lv ID";
	$fieldToolTipsleaves1["English"]["LvID"] = "";
	$placeHoldersleaves1["English"]["LvID"] = "";
	$fieldLabelsleaves1["English"]["LeaveType"] = "Leave Type";
	$fieldToolTipsleaves1["English"]["LeaveType"] = "";
	$placeHoldersleaves1["English"]["LeaveType"] = "";
	$fieldLabelsleaves1["English"]["Days"] = "Half/Whole Day";
	$fieldToolTipsleaves1["English"]["Days"] = "";
	$placeHoldersleaves1["English"]["Days"] = "";
	$fieldLabelsleaves1["English"]["EmployeeID"] = "Employee";
	$fieldToolTipsleaves1["English"]["EmployeeID"] = "";
	$placeHoldersleaves1["English"]["EmployeeID"] = "";
	$fieldLabelsleaves1["English"]["FromDate"] = "From Date";
	$fieldToolTipsleaves1["English"]["FromDate"] = "";
	$placeHoldersleaves1["English"]["FromDate"] = "";
	$fieldLabelsleaves1["English"]["ToDate"] = "To Date";
	$fieldToolTipsleaves1["English"]["ToDate"] = "";
	$placeHoldersleaves1["English"]["ToDate"] = "";
	$fieldLabelsleaves1["English"]["Approved"] = "Approved";
	$fieldToolTipsleaves1["English"]["Approved"] = "";
	$placeHoldersleaves1["English"]["Approved"] = "";
	$fieldLabelsleaves1["English"]["ApprovedDate"] = "Approved Date";
	$fieldToolTipsleaves1["English"]["ApprovedDate"] = "";
	$placeHoldersleaves1["English"]["ApprovedDate"] = "";
	$fieldLabelsleaves1["English"]["Approvedby"] = "Approved by";
	$fieldToolTipsleaves1["English"]["Approvedby"] = "";
	$placeHoldersleaves1["English"]["Approvedby"] = "";
	$fieldLabelsleaves1["English"]["Posted"] = "Posted";
	$fieldToolTipsleaves1["English"]["Posted"] = "";
	$placeHoldersleaves1["English"]["Posted"] = "";
	$fieldLabelsleaves1["English"]["DateCreated"] = "Date Created";
	$fieldToolTipsleaves1["English"]["DateCreated"] = "";
	$placeHoldersleaves1["English"]["DateCreated"] = "";
	$fieldLabelsleaves1["English"]["ApprovedTime"] = "Approved Time";
	$fieldToolTipsleaves1["English"]["ApprovedTime"] = "";
	$placeHoldersleaves1["English"]["ApprovedTime"] = "";
	$fieldLabelsleaves1["English"]["FirstHalf"] = "First Half";
	$fieldToolTipsleaves1["English"]["FirstHalf"] = "";
	$placeHoldersleaves1["English"]["FirstHalf"] = "";
	$fieldLabelsleaves1["English"]["SecondHalf"] = "Second Half";
	$fieldToolTipsleaves1["English"]["SecondHalf"] = "";
	$placeHoldersleaves1["English"]["SecondHalf"] = "";
	$fieldLabelsleaves1["English"]["Locked"] = "Locked";
	$fieldToolTipsleaves1["English"]["Locked"] = "";
	$placeHoldersleaves1["English"]["Locked"] = "";
	$fieldLabelsleaves1["English"]["Superior"] = "Supervisor";
	$fieldToolTipsleaves1["English"]["Superior"] = "";
	$placeHoldersleaves1["English"]["Superior"] = "";
	$fieldLabelsleaves1["English"]["Reason"] = "Reason";
	$fieldToolTipsleaves1["English"]["Reason"] = "";
	$placeHoldersleaves1["English"]["Reason"] = "";
	$fieldLabelsleaves1["English"]["Superior2"] = "Manager";
	$fieldToolTipsleaves1["English"]["Superior2"] = "";
	$placeHoldersleaves1["English"]["Superior2"] = "";
	$fieldLabelsleaves1["English"]["1stApproval"] = "Supervisor Approval";
	$fieldToolTipsleaves1["English"]["1stApproval"] = "";
	$placeHoldersleaves1["English"]["1stApproval"] = "";
	$fieldLabelsleaves1["English"]["2ndApproval"] = "Manager Approval";
	$fieldToolTipsleaves1["English"]["2ndApproval"] = "";
	$placeHoldersleaves1["English"]["2ndApproval"] = "";
	$fieldLabelsleaves1["English"]["TotalDays"] = "Total Days";
	$fieldToolTipsleaves1["English"]["TotalDays"] = "";
	$placeHoldersleaves1["English"]["TotalDays"] = "";
	if (count($fieldToolTipsleaves1["English"]))
		$tdataleaves1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsleaves1[""] = array();
	$fieldToolTipsleaves1[""] = array();
	$placeHoldersleaves1[""] = array();
	$pageTitlesleaves1[""] = array();
	if (count($fieldToolTipsleaves1[""]))
		$tdataleaves1[".isUseToolTips"] = true;
}


	$tdataleaves1[".NCSearch"] = true;



$tdataleaves1[".shortTableName"] = "leaves1";
$tdataleaves1[".nSecOptions"] = 0;
$tdataleaves1[".recsPerRowPrint"] = 1;
$tdataleaves1[".mainTableOwnerID"] = "";
$tdataleaves1[".moveNext"] = 1;
$tdataleaves1[".entityType"] = 1;

$tdataleaves1[".strOriginalTableName"] = "leaves";

	



$tdataleaves1[".showAddInPopup"] = false;

$tdataleaves1[".showEditInPopup"] = false;

$tdataleaves1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataleaves1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataleaves1[".fieldsForRegister"] = array();

$tdataleaves1[".listAjax"] = false;

	$tdataleaves1[".audit"] = false;

	$tdataleaves1[".locking"] = false;

$tdataleaves1[".edit"] = true;
$tdataleaves1[".afterEditAction"] = 0;
$tdataleaves1[".closePopupAfterEdit"] = 1;
$tdataleaves1[".afterEditActionDetTable"] = "Detail tables not found!";

$tdataleaves1[".add"] = true;
$tdataleaves1[".afterAddAction"] = 1;
$tdataleaves1[".closePopupAfterAdd"] = 1;
$tdataleaves1[".afterAddActionDetTable"] = "";

$tdataleaves1[".list"] = true;

$tdataleaves1[".inlineEdit"] = true;

$tdataleaves1[".updateSelected"] = true;

$tdataleaves1[".reorderRecordsByHeader"] = true;


$tdataleaves1[".exportFormatting"] = 2;
$tdataleaves1[".exportDelimiter"] = ",";
		
$tdataleaves1[".inlineAdd"] = true;
$tdataleaves1[".view"] = true;

$tdataleaves1[".import"] = true;

$tdataleaves1[".exportTo"] = true;

$tdataleaves1[".printFriendly"] = true;

$tdataleaves1[".delete"] = true;

$tdataleaves1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataleaves1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataleaves1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataleaves1[".searchSaving"] = false;
//

$tdataleaves1[".showSearchPanel"] = true;
		$tdataleaves1[".flexibleSearch"] = true;

$tdataleaves1[".isUseAjaxSuggest"] = true;

$tdataleaves1[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																					

$tdataleaves1[".ajaxCodeSnippetAdded"] = false;

$tdataleaves1[".buttonsAdded"] = false;

$tdataleaves1[".addPageEvents"] = true;

// use timepicker for search panel
$tdataleaves1[".isUseTimeForSearch"] = true;





$tdataleaves1[".allSearchFields"] = array();
$tdataleaves1[".filterFields"] = array();
$tdataleaves1[".requiredSearchFields"] = array();

$tdataleaves1[".allSearchFields"][] = "LvID";
	$tdataleaves1[".allSearchFields"][] = "DateCreated";
	$tdataleaves1[".allSearchFields"][] = "LeaveType";
	$tdataleaves1[".allSearchFields"][] = "EmployeeID";
	$tdataleaves1[".allSearchFields"][] = "FromDate";
	$tdataleaves1[".allSearchFields"][] = "ToDate";
	$tdataleaves1[".allSearchFields"][] = "Reason";
	$tdataleaves1[".allSearchFields"][] = "FirstHalf";
	$tdataleaves1[".allSearchFields"][] = "SecondHalf";
	$tdataleaves1[".allSearchFields"][] = "Days";
	$tdataleaves1[".allSearchFields"][] = "TotalDays";
	$tdataleaves1[".allSearchFields"][] = "Superior";
	$tdataleaves1[".allSearchFields"][] = "1stApproval";
	$tdataleaves1[".allSearchFields"][] = "Superior2";
	$tdataleaves1[".allSearchFields"][] = "2ndApproval";
	$tdataleaves1[".allSearchFields"][] = "Approved";
	$tdataleaves1[".allSearchFields"][] = "ApprovedDate";
	$tdataleaves1[".allSearchFields"][] = "ApprovedTime";
	$tdataleaves1[".allSearchFields"][] = "Approvedby";
	$tdataleaves1[".allSearchFields"][] = "Posted";
	$tdataleaves1[".allSearchFields"][] = "Locked";
	

$tdataleaves1[".googleLikeFields"] = array();
$tdataleaves1[".googleLikeFields"][] = "LvID";
$tdataleaves1[".googleLikeFields"][] = "FromDate";
$tdataleaves1[".googleLikeFields"][] = "LeaveType";
$tdataleaves1[".googleLikeFields"][] = "Days";
$tdataleaves1[".googleLikeFields"][] = "EmployeeID";
$tdataleaves1[".googleLikeFields"][] = "ToDate";
$tdataleaves1[".googleLikeFields"][] = "Approved";
$tdataleaves1[".googleLikeFields"][] = "ApprovedDate";
$tdataleaves1[".googleLikeFields"][] = "Approvedby";
$tdataleaves1[".googleLikeFields"][] = "Posted";
$tdataleaves1[".googleLikeFields"][] = "DateCreated";
$tdataleaves1[".googleLikeFields"][] = "ApprovedTime";
$tdataleaves1[".googleLikeFields"][] = "FirstHalf";
$tdataleaves1[".googleLikeFields"][] = "SecondHalf";
$tdataleaves1[".googleLikeFields"][] = "Locked";
$tdataleaves1[".googleLikeFields"][] = "Superior";
$tdataleaves1[".googleLikeFields"][] = "Reason";
$tdataleaves1[".googleLikeFields"][] = "Superior2";
$tdataleaves1[".googleLikeFields"][] = "1stApproval";
$tdataleaves1[".googleLikeFields"][] = "2ndApproval";
$tdataleaves1[".googleLikeFields"][] = "TotalDays";


$tdataleaves1[".advSearchFields"] = array();
$tdataleaves1[".advSearchFields"][] = "LvID";
$tdataleaves1[".advSearchFields"][] = "DateCreated";
$tdataleaves1[".advSearchFields"][] = "LeaveType";
$tdataleaves1[".advSearchFields"][] = "EmployeeID";
$tdataleaves1[".advSearchFields"][] = "FromDate";
$tdataleaves1[".advSearchFields"][] = "ToDate";
$tdataleaves1[".advSearchFields"][] = "Reason";
$tdataleaves1[".advSearchFields"][] = "FirstHalf";
$tdataleaves1[".advSearchFields"][] = "SecondHalf";
$tdataleaves1[".advSearchFields"][] = "Days";
$tdataleaves1[".advSearchFields"][] = "TotalDays";
$tdataleaves1[".advSearchFields"][] = "Superior";
$tdataleaves1[".advSearchFields"][] = "1stApproval";
$tdataleaves1[".advSearchFields"][] = "Superior2";
$tdataleaves1[".advSearchFields"][] = "2ndApproval";
$tdataleaves1[".advSearchFields"][] = "Approved";
$tdataleaves1[".advSearchFields"][] = "ApprovedDate";
$tdataleaves1[".advSearchFields"][] = "ApprovedTime";
$tdataleaves1[".advSearchFields"][] = "Approvedby";
$tdataleaves1[".advSearchFields"][] = "Posted";
$tdataleaves1[".advSearchFields"][] = "Locked";

$tdataleaves1[".tableType"] = "list";

$tdataleaves1[".printerPageOrientation"] = 0;
$tdataleaves1[".nPrinterPageScale"] = 100;

$tdataleaves1[".nPrinterSplitRecords"] = 40;

$tdataleaves1[".nPrinterPDFSplitRecords"] = 40;



$tdataleaves1[".geocodingEnabled"] = false;





$tdataleaves1[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataleaves1[".pageSize"] = 20;

$tdataleaves1[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY LvID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataleaves1[".strOrderBy"] = $tstrOrderBy;

$tdataleaves1[".orderindexes"] = array();
	$tdataleaves1[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "LvID");


$tdataleaves1[".sqlHead"] = "SELECT LvID,  FromDate,  LeaveType,  Days,  EmployeeID,  ToDate,  Approved,  ApprovedDate,  Approvedby,  Posted,  DateCreated,  ApprovedTime,  FirstHalf,  SecondHalf,  Locked,  Superior,  Reason,  Superior2,  `1stApproval`,  `2ndApproval`,  TotalDays";
$tdataleaves1[".sqlFrom"] = "FROM leaves";
$tdataleaves1[".sqlWhereExpr"] = "";
$tdataleaves1[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataleaves1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataleaves1[".arrGroupsPerPage"] = $arrGPP;

$tdataleaves1[".highlightSearchResults"] = true;

$tableKeysleaves1 = array();
$tableKeysleaves1[] = "LvID";
$tdataleaves1[".Keys"] = $tableKeysleaves1;

$tdataleaves1[".listFields"] = array();
$tdataleaves1[".listFields"][] = "LvID";
$tdataleaves1[".listFields"][] = "DateCreated";
$tdataleaves1[".listFields"][] = "LeaveType";
$tdataleaves1[".listFields"][] = "EmployeeID";
$tdataleaves1[".listFields"][] = "FromDate";
$tdataleaves1[".listFields"][] = "ToDate";
$tdataleaves1[".listFields"][] = "Reason";
$tdataleaves1[".listFields"][] = "FirstHalf";
$tdataleaves1[".listFields"][] = "SecondHalf";
$tdataleaves1[".listFields"][] = "Days";
$tdataleaves1[".listFields"][] = "TotalDays";
$tdataleaves1[".listFields"][] = "Superior";
$tdataleaves1[".listFields"][] = "1stApproval";
$tdataleaves1[".listFields"][] = "Superior2";
$tdataleaves1[".listFields"][] = "2ndApproval";
$tdataleaves1[".listFields"][] = "Approved";
$tdataleaves1[".listFields"][] = "ApprovedDate";
$tdataleaves1[".listFields"][] = "ApprovedTime";
$tdataleaves1[".listFields"][] = "Approvedby";
$tdataleaves1[".listFields"][] = "Posted";
$tdataleaves1[".listFields"][] = "Locked";

$tdataleaves1[".hideMobileList"] = array();


$tdataleaves1[".viewFields"] = array();
$tdataleaves1[".viewFields"][] = "LvID";
$tdataleaves1[".viewFields"][] = "DateCreated";
$tdataleaves1[".viewFields"][] = "LeaveType";
$tdataleaves1[".viewFields"][] = "EmployeeID";
$tdataleaves1[".viewFields"][] = "FromDate";
$tdataleaves1[".viewFields"][] = "ToDate";
$tdataleaves1[".viewFields"][] = "Reason";
$tdataleaves1[".viewFields"][] = "FirstHalf";
$tdataleaves1[".viewFields"][] = "SecondHalf";
$tdataleaves1[".viewFields"][] = "Days";
$tdataleaves1[".viewFields"][] = "TotalDays";
$tdataleaves1[".viewFields"][] = "Superior";
$tdataleaves1[".viewFields"][] = "1stApproval";
$tdataleaves1[".viewFields"][] = "Superior2";
$tdataleaves1[".viewFields"][] = "2ndApproval";
$tdataleaves1[".viewFields"][] = "Approved";
$tdataleaves1[".viewFields"][] = "ApprovedDate";
$tdataleaves1[".viewFields"][] = "ApprovedTime";
$tdataleaves1[".viewFields"][] = "Approvedby";
$tdataleaves1[".viewFields"][] = "Posted";
$tdataleaves1[".viewFields"][] = "Locked";

$tdataleaves1[".addFields"] = array();
$tdataleaves1[".addFields"][] = "DateCreated";
$tdataleaves1[".addFields"][] = "LeaveType";
$tdataleaves1[".addFields"][] = "EmployeeID";
$tdataleaves1[".addFields"][] = "FromDate";
$tdataleaves1[".addFields"][] = "ToDate";
$tdataleaves1[".addFields"][] = "Reason";
$tdataleaves1[".addFields"][] = "FirstHalf";
$tdataleaves1[".addFields"][] = "SecondHalf";
$tdataleaves1[".addFields"][] = "Days";
$tdataleaves1[".addFields"][] = "Superior";
$tdataleaves1[".addFields"][] = "1stApproval";
$tdataleaves1[".addFields"][] = "Superior2";
$tdataleaves1[".addFields"][] = "2ndApproval";
$tdataleaves1[".addFields"][] = "Approved";
$tdataleaves1[".addFields"][] = "ApprovedDate";
$tdataleaves1[".addFields"][] = "ApprovedTime";
$tdataleaves1[".addFields"][] = "Approvedby";
$tdataleaves1[".addFields"][] = "Posted";
$tdataleaves1[".addFields"][] = "Locked";

$tdataleaves1[".masterListFields"] = array();
$tdataleaves1[".masterListFields"][] = "LvID";
$tdataleaves1[".masterListFields"][] = "DateCreated";
$tdataleaves1[".masterListFields"][] = "LeaveType";
$tdataleaves1[".masterListFields"][] = "EmployeeID";
$tdataleaves1[".masterListFields"][] = "FromDate";
$tdataleaves1[".masterListFields"][] = "ToDate";
$tdataleaves1[".masterListFields"][] = "Reason";
$tdataleaves1[".masterListFields"][] = "FirstHalf";
$tdataleaves1[".masterListFields"][] = "SecondHalf";
$tdataleaves1[".masterListFields"][] = "Days";
$tdataleaves1[".masterListFields"][] = "TotalDays";
$tdataleaves1[".masterListFields"][] = "Superior";
$tdataleaves1[".masterListFields"][] = "1stApproval";
$tdataleaves1[".masterListFields"][] = "Superior2";
$tdataleaves1[".masterListFields"][] = "2ndApproval";
$tdataleaves1[".masterListFields"][] = "Approved";
$tdataleaves1[".masterListFields"][] = "ApprovedDate";
$tdataleaves1[".masterListFields"][] = "ApprovedTime";
$tdataleaves1[".masterListFields"][] = "Approvedby";
$tdataleaves1[".masterListFields"][] = "Posted";
$tdataleaves1[".masterListFields"][] = "Locked";

$tdataleaves1[".inlineAddFields"] = array();
$tdataleaves1[".inlineAddFields"][] = "DateCreated";
$tdataleaves1[".inlineAddFields"][] = "LeaveType";
$tdataleaves1[".inlineAddFields"][] = "EmployeeID";
$tdataleaves1[".inlineAddFields"][] = "FromDate";
$tdataleaves1[".inlineAddFields"][] = "ToDate";
$tdataleaves1[".inlineAddFields"][] = "Reason";
$tdataleaves1[".inlineAddFields"][] = "FirstHalf";
$tdataleaves1[".inlineAddFields"][] = "SecondHalf";
$tdataleaves1[".inlineAddFields"][] = "Days";
$tdataleaves1[".inlineAddFields"][] = "Superior";
$tdataleaves1[".inlineAddFields"][] = "1stApproval";
$tdataleaves1[".inlineAddFields"][] = "Superior2";
$tdataleaves1[".inlineAddFields"][] = "2ndApproval";
$tdataleaves1[".inlineAddFields"][] = "Approved";
$tdataleaves1[".inlineAddFields"][] = "ApprovedDate";
$tdataleaves1[".inlineAddFields"][] = "ApprovedTime";
$tdataleaves1[".inlineAddFields"][] = "Approvedby";
$tdataleaves1[".inlineAddFields"][] = "Posted";
$tdataleaves1[".inlineAddFields"][] = "Locked";

$tdataleaves1[".editFields"] = array();
$tdataleaves1[".editFields"][] = "DateCreated";
$tdataleaves1[".editFields"][] = "LeaveType";
$tdataleaves1[".editFields"][] = "EmployeeID";
$tdataleaves1[".editFields"][] = "FromDate";
$tdataleaves1[".editFields"][] = "ToDate";
$tdataleaves1[".editFields"][] = "Reason";
$tdataleaves1[".editFields"][] = "FirstHalf";
$tdataleaves1[".editFields"][] = "SecondHalf";
$tdataleaves1[".editFields"][] = "Days";
$tdataleaves1[".editFields"][] = "Superior";
$tdataleaves1[".editFields"][] = "1stApproval";
$tdataleaves1[".editFields"][] = "Superior2";
$tdataleaves1[".editFields"][] = "2ndApproval";
$tdataleaves1[".editFields"][] = "Approved";
$tdataleaves1[".editFields"][] = "ApprovedDate";
$tdataleaves1[".editFields"][] = "ApprovedTime";
$tdataleaves1[".editFields"][] = "Approvedby";
$tdataleaves1[".editFields"][] = "Posted";
$tdataleaves1[".editFields"][] = "Locked";

$tdataleaves1[".inlineEditFields"] = array();
$tdataleaves1[".inlineEditFields"][] = "DateCreated";
$tdataleaves1[".inlineEditFields"][] = "LeaveType";
$tdataleaves1[".inlineEditFields"][] = "EmployeeID";
$tdataleaves1[".inlineEditFields"][] = "FromDate";
$tdataleaves1[".inlineEditFields"][] = "ToDate";
$tdataleaves1[".inlineEditFields"][] = "Reason";
$tdataleaves1[".inlineEditFields"][] = "FirstHalf";
$tdataleaves1[".inlineEditFields"][] = "SecondHalf";
$tdataleaves1[".inlineEditFields"][] = "Days";
$tdataleaves1[".inlineEditFields"][] = "Superior";
$tdataleaves1[".inlineEditFields"][] = "1stApproval";
$tdataleaves1[".inlineEditFields"][] = "Superior2";
$tdataleaves1[".inlineEditFields"][] = "2ndApproval";
$tdataleaves1[".inlineEditFields"][] = "Approved";
$tdataleaves1[".inlineEditFields"][] = "ApprovedDate";
$tdataleaves1[".inlineEditFields"][] = "ApprovedTime";
$tdataleaves1[".inlineEditFields"][] = "Approvedby";
$tdataleaves1[".inlineEditFields"][] = "Posted";
$tdataleaves1[".inlineEditFields"][] = "Locked";

$tdataleaves1[".updateSelectedFields"] = array();
$tdataleaves1[".updateSelectedFields"][] = "DateCreated";
$tdataleaves1[".updateSelectedFields"][] = "LeaveType";
$tdataleaves1[".updateSelectedFields"][] = "EmployeeID";
$tdataleaves1[".updateSelectedFields"][] = "FromDate";
$tdataleaves1[".updateSelectedFields"][] = "ToDate";
$tdataleaves1[".updateSelectedFields"][] = "Reason";
$tdataleaves1[".updateSelectedFields"][] = "FirstHalf";
$tdataleaves1[".updateSelectedFields"][] = "SecondHalf";
$tdataleaves1[".updateSelectedFields"][] = "Days";
$tdataleaves1[".updateSelectedFields"][] = "Superior";
$tdataleaves1[".updateSelectedFields"][] = "Superior2";
$tdataleaves1[".updateSelectedFields"][] = "Approved";
$tdataleaves1[".updateSelectedFields"][] = "ApprovedDate";
$tdataleaves1[".updateSelectedFields"][] = "ApprovedTime";
$tdataleaves1[".updateSelectedFields"][] = "Approvedby";
$tdataleaves1[".updateSelectedFields"][] = "Posted";
$tdataleaves1[".updateSelectedFields"][] = "Locked";


$tdataleaves1[".exportFields"] = array();
$tdataleaves1[".exportFields"][] = "LvID";
$tdataleaves1[".exportFields"][] = "DateCreated";
$tdataleaves1[".exportFields"][] = "LeaveType";
$tdataleaves1[".exportFields"][] = "EmployeeID";
$tdataleaves1[".exportFields"][] = "FromDate";
$tdataleaves1[".exportFields"][] = "ToDate";
$tdataleaves1[".exportFields"][] = "Reason";
$tdataleaves1[".exportFields"][] = "FirstHalf";
$tdataleaves1[".exportFields"][] = "SecondHalf";
$tdataleaves1[".exportFields"][] = "Days";
$tdataleaves1[".exportFields"][] = "TotalDays";
$tdataleaves1[".exportFields"][] = "Superior";
$tdataleaves1[".exportFields"][] = "1stApproval";
$tdataleaves1[".exportFields"][] = "Superior2";
$tdataleaves1[".exportFields"][] = "2ndApproval";
$tdataleaves1[".exportFields"][] = "Approved";
$tdataleaves1[".exportFields"][] = "ApprovedDate";
$tdataleaves1[".exportFields"][] = "ApprovedTime";
$tdataleaves1[".exportFields"][] = "Approvedby";
$tdataleaves1[".exportFields"][] = "Posted";
$tdataleaves1[".exportFields"][] = "Locked";

$tdataleaves1[".importFields"] = array();
$tdataleaves1[".importFields"][] = "LvID";
$tdataleaves1[".importFields"][] = "FromDate";
$tdataleaves1[".importFields"][] = "LeaveType";
$tdataleaves1[".importFields"][] = "Days";
$tdataleaves1[".importFields"][] = "EmployeeID";
$tdataleaves1[".importFields"][] = "ToDate";
$tdataleaves1[".importFields"][] = "Approved";
$tdataleaves1[".importFields"][] = "ApprovedDate";
$tdataleaves1[".importFields"][] = "Approvedby";
$tdataleaves1[".importFields"][] = "Posted";
$tdataleaves1[".importFields"][] = "DateCreated";
$tdataleaves1[".importFields"][] = "ApprovedTime";
$tdataleaves1[".importFields"][] = "FirstHalf";
$tdataleaves1[".importFields"][] = "SecondHalf";
$tdataleaves1[".importFields"][] = "Locked";
$tdataleaves1[".importFields"][] = "Superior";
$tdataleaves1[".importFields"][] = "Reason";
$tdataleaves1[".importFields"][] = "Superior2";
$tdataleaves1[".importFields"][] = "1stApproval";
$tdataleaves1[".importFields"][] = "2ndApproval";
$tdataleaves1[".importFields"][] = "TotalDays";

$tdataleaves1[".printFields"] = array();
$tdataleaves1[".printFields"][] = "LvID";
$tdataleaves1[".printFields"][] = "DateCreated";
$tdataleaves1[".printFields"][] = "LeaveType";
$tdataleaves1[".printFields"][] = "EmployeeID";
$tdataleaves1[".printFields"][] = "FromDate";
$tdataleaves1[".printFields"][] = "ToDate";
$tdataleaves1[".printFields"][] = "Reason";
$tdataleaves1[".printFields"][] = "FirstHalf";
$tdataleaves1[".printFields"][] = "SecondHalf";
$tdataleaves1[".printFields"][] = "Days";
$tdataleaves1[".printFields"][] = "TotalDays";
$tdataleaves1[".printFields"][] = "Superior";
$tdataleaves1[".printFields"][] = "1stApproval";
$tdataleaves1[".printFields"][] = "Superior2";
$tdataleaves1[".printFields"][] = "2ndApproval";
$tdataleaves1[".printFields"][] = "Approved";
$tdataleaves1[".printFields"][] = "ApprovedDate";
$tdataleaves1[".printFields"][] = "ApprovedTime";
$tdataleaves1[".printFields"][] = "Approvedby";
$tdataleaves1[".printFields"][] = "Posted";
$tdataleaves1[".printFields"][] = "Locked";


//	LvID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LvID";
	$fdata["GoodName"] = "LvID";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves1","LvID");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataleaves1["LvID"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves1","FromDate");
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

	$edata = array("EditFormat" => "Date");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 21;

	
	
	
		$edata["controlWidth"] = 120;

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




	$tdataleaves1["FromDate"] = $fdata;
//	LeaveType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LeaveType";
	$fdata["GoodName"] = "LeaveType";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves1","LeaveType");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataleaves1["LeaveType"] = $fdata;
//	Days
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Days";
	$fdata["GoodName"] = "Days";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves1","Days");
	$fdata["FieldType"] = 5;

	
	
	
			
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




	$tdataleaves1["Days"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves1","EmployeeID");
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
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"Superior", 'lookupF'=>"Superior");
	$edata["autoCompleteFields"][] = array('masterF'=>"Superior2", 'lookupF'=>"Superior2");
	$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "EmployeeID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "user_name";
	
	

	
	$edata["LookupOrderBy"] = "user_name";

	
	
	
	

	
	
	
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




	$tdataleaves1["EmployeeID"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves1","ToDate");
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

	$edata = array("EditFormat" => "Date");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 21;

	
	
	
		$edata["controlWidth"] = 120;

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




	$tdataleaves1["ToDate"] = $fdata;
//	Approved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Approved";
	$fdata["GoodName"] = "Approved";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves1","Approved");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataleaves1["Approved"] = $fdata;
//	ApprovedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ApprovedDate";
	$fdata["GoodName"] = "ApprovedDate";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves1","ApprovedDate");
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




	$tdataleaves1["ApprovedDate"] = $fdata;
//	Approvedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Approvedby";
	$fdata["GoodName"] = "Approvedby";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves1","Approvedby");
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




	$tdataleaves1["Approvedby"] = $fdata;
//	Posted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Posted";
	$fdata["GoodName"] = "Posted";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves1","Posted");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataleaves1["Posted"] = $fdata;
//	DateCreated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DateCreated";
	$fdata["GoodName"] = "DateCreated";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves1","DateCreated");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataleaves1["DateCreated"] = $fdata;
//	ApprovedTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ApprovedTime";
	$fdata["GoodName"] = "ApprovedTime";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves1","ApprovedTime");
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




	$tdataleaves1["ApprovedTime"] = $fdata;
//	FirstHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "FirstHalf";
	$fdata["GoodName"] = "FirstHalf";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves1","FirstHalf");
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




	$tdataleaves1["FirstHalf"] = $fdata;
//	SecondHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "SecondHalf";
	$fdata["GoodName"] = "SecondHalf";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves1","SecondHalf");
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




	$tdataleaves1["SecondHalf"] = $fdata;
//	Locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Locked";
	$fdata["GoodName"] = "Locked";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves1","Locked");
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




	$tdataleaves1["Locked"] = $fdata;
//	Superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Superior";
	$fdata["GoodName"] = "Superior";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves1","Superior");
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
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "EmployeeID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "user_name";
	
	

	
	$edata["LookupOrderBy"] = "user_name";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 232;

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




	$tdataleaves1["Superior"] = $fdata;
//	Reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Reason";
	$fdata["GoodName"] = "Reason";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves1","Reason");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdataleaves1["Reason"] = $fdata;
//	Superior2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Superior2";
	$fdata["GoodName"] = "Superior2";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves1","Superior2");
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
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "EmployeeID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "user_name";
	
	

	
	$edata["LookupOrderBy"] = "user_name";

	
	
	
	

	
	
	
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




	$tdataleaves1["Superior2"] = $fdata;
//	1stApproval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "1stApproval";
	$fdata["GoodName"] = "1stApproval";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves1","1stApproval");
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




	$tdataleaves1["1stApproval"] = $fdata;
//	2ndApproval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "2ndApproval";
	$fdata["GoodName"] = "2ndApproval";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves1","2ndApproval");
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




	$tdataleaves1["2ndApproval"] = $fdata;
//	TotalDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "TotalDays";
	$fdata["GoodName"] = "TotalDays";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves1","TotalDays");
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




	$tdataleaves1["TotalDays"] = $fdata;


$tables_data["leaves1"]=&$tdataleaves1;
$field_labels["leaves1"] = &$fieldLabelsleaves1;
$fieldToolTips["leaves1"] = &$fieldToolTipsleaves1;
$placeHolders["leaves1"] = &$placeHoldersleaves1;
$page_titles["leaves1"] = &$pageTitlesleaves1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["leaves1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["leaves1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_leaves1()
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
	"m_srcTableName" => "leaves1"
));

$proto6["m_sql"] = "LvID";
$proto6["m_srcTableName"] = "leaves1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves1"
));

$proto8["m_sql"] = "FromDate";
$proto8["m_srcTableName"] = "leaves1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "LeaveType",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves1"
));

$proto10["m_sql"] = "LeaveType";
$proto10["m_srcTableName"] = "leaves1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Days",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves1"
));

$proto12["m_sql"] = "Days";
$proto12["m_srcTableName"] = "leaves1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves1"
));

$proto14["m_sql"] = "EmployeeID";
$proto14["m_srcTableName"] = "leaves1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves1"
));

$proto16["m_sql"] = "ToDate";
$proto16["m_srcTableName"] = "leaves1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Approved",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves1"
));

$proto18["m_sql"] = "Approved";
$proto18["m_srcTableName"] = "leaves1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedDate",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves1"
));

$proto20["m_sql"] = "ApprovedDate";
$proto20["m_srcTableName"] = "leaves1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Approvedby",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves1"
));

$proto22["m_sql"] = "Approvedby";
$proto22["m_srcTableName"] = "leaves1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Posted",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves1"
));

$proto24["m_sql"] = "Posted";
$proto24["m_srcTableName"] = "leaves1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DateCreated",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves1"
));

$proto26["m_sql"] = "DateCreated";
$proto26["m_srcTableName"] = "leaves1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedTime",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves1"
));

$proto28["m_sql"] = "ApprovedTime";
$proto28["m_srcTableName"] = "leaves1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "FirstHalf",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves1"
));

$proto30["m_sql"] = "FirstHalf";
$proto30["m_srcTableName"] = "leaves1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "SecondHalf",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves1"
));

$proto32["m_sql"] = "SecondHalf";
$proto32["m_srcTableName"] = "leaves1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Locked",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves1"
));

$proto34["m_sql"] = "Locked";
$proto34["m_srcTableName"] = "leaves1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves1"
));

$proto36["m_sql"] = "Superior";
$proto36["m_srcTableName"] = "leaves1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Reason",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves1"
));

$proto38["m_sql"] = "Reason";
$proto38["m_srcTableName"] = "leaves1";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior2",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves1"
));

$proto40["m_sql"] = "Superior2";
$proto40["m_srcTableName"] = "leaves1";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "1stApproval",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves1"
));

$proto42["m_sql"] = "`1stApproval`";
$proto42["m_srcTableName"] = "leaves1";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "2ndApproval",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves1"
));

$proto44["m_sql"] = "`2ndApproval`";
$proto44["m_srcTableName"] = "leaves1";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalDays",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves1"
));

$proto46["m_sql"] = "TotalDays";
$proto46["m_srcTableName"] = "leaves1";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "leaves";
$proto49["m_srcTableName"] = "leaves1";
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
$proto48["m_srcTableName"] = "leaves1";
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
	"m_srcTableName" => "leaves1"
));

$proto52["m_column"]=$obj;
$proto52["m_bAsc"] = 0;
$proto52["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto52);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="leaves1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_leaves1 = createSqlQuery_leaves1();


	
		;

																					

$tdataleaves1[".sqlquery"] = $queryData_leaves1;

include_once(getabspath("include/leaves1_events.php"));
$tableEvents["leaves1"] = new eventclass_leaves1;
$tdataleaves1[".hasEvents"] = true;

?>