<?php
require_once(getabspath("classes/cipherer.php"));




$tdataleaves11 = array();
	$tdataleaves11[".truncateText"] = true;
	$tdataleaves11[".NumberOfChars"] = 80;
	$tdataleaves11[".ShortName"] = "leaves11";
	$tdataleaves11[".OwnerID"] = "EmployeeID";
	$tdataleaves11[".OriginalTable"] = "leaves";

//	field labels
$fieldLabelsleaves11 = array();
$fieldToolTipsleaves11 = array();
$pageTitlesleaves11 = array();
$placeHoldersleaves11 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsleaves11["English"] = array();
	$fieldToolTipsleaves11["English"] = array();
	$placeHoldersleaves11["English"] = array();
	$pageTitlesleaves11["English"] = array();
	$fieldLabelsleaves11["English"]["LvID"] = "Lv ID";
	$fieldToolTipsleaves11["English"]["LvID"] = "";
	$placeHoldersleaves11["English"]["LvID"] = "";
	$fieldLabelsleaves11["English"]["LeaveType"] = "Leave Type";
	$fieldToolTipsleaves11["English"]["LeaveType"] = "";
	$placeHoldersleaves11["English"]["LeaveType"] = "";
	$fieldLabelsleaves11["English"]["Days"] = "Half/Whole Day";
	$fieldToolTipsleaves11["English"]["Days"] = "";
	$placeHoldersleaves11["English"]["Days"] = "";
	$fieldLabelsleaves11["English"]["EmployeeID"] = "Employee";
	$fieldToolTipsleaves11["English"]["EmployeeID"] = "";
	$placeHoldersleaves11["English"]["EmployeeID"] = "";
	$fieldLabelsleaves11["English"]["FromDate"] = "From Date";
	$fieldToolTipsleaves11["English"]["FromDate"] = "";
	$placeHoldersleaves11["English"]["FromDate"] = "";
	$fieldLabelsleaves11["English"]["ToDate"] = "To Date";
	$fieldToolTipsleaves11["English"]["ToDate"] = "";
	$placeHoldersleaves11["English"]["ToDate"] = "";
	$fieldLabelsleaves11["English"]["Approved"] = "Approved";
	$fieldToolTipsleaves11["English"]["Approved"] = "";
	$placeHoldersleaves11["English"]["Approved"] = "";
	$fieldLabelsleaves11["English"]["ApprovedDate"] = "Approved Date";
	$fieldToolTipsleaves11["English"]["ApprovedDate"] = "";
	$placeHoldersleaves11["English"]["ApprovedDate"] = "";
	$fieldLabelsleaves11["English"]["Approvedby"] = "Approved by";
	$fieldToolTipsleaves11["English"]["Approvedby"] = "";
	$placeHoldersleaves11["English"]["Approvedby"] = "";
	$fieldLabelsleaves11["English"]["Posted"] = "Posted";
	$fieldToolTipsleaves11["English"]["Posted"] = "";
	$placeHoldersleaves11["English"]["Posted"] = "";
	$fieldLabelsleaves11["English"]["DateCreated"] = "Date Created";
	$fieldToolTipsleaves11["English"]["DateCreated"] = "";
	$placeHoldersleaves11["English"]["DateCreated"] = "";
	$fieldLabelsleaves11["English"]["ApprovedTime"] = "Approved Time";
	$fieldToolTipsleaves11["English"]["ApprovedTime"] = "";
	$placeHoldersleaves11["English"]["ApprovedTime"] = "";
	$fieldLabelsleaves11["English"]["FirstHalf"] = "First Half";
	$fieldToolTipsleaves11["English"]["FirstHalf"] = "";
	$placeHoldersleaves11["English"]["FirstHalf"] = "";
	$fieldLabelsleaves11["English"]["SecondHalf"] = "Second Half";
	$fieldToolTipsleaves11["English"]["SecondHalf"] = "";
	$placeHoldersleaves11["English"]["SecondHalf"] = "";
	$fieldLabelsleaves11["English"]["Locked"] = "Locked";
	$fieldToolTipsleaves11["English"]["Locked"] = "";
	$placeHoldersleaves11["English"]["Locked"] = "";
	$fieldLabelsleaves11["English"]["Superior"] = "Supervisor";
	$fieldToolTipsleaves11["English"]["Superior"] = "";
	$placeHoldersleaves11["English"]["Superior"] = "";
	$fieldLabelsleaves11["English"]["Reason"] = "Reason";
	$fieldToolTipsleaves11["English"]["Reason"] = "";
	$placeHoldersleaves11["English"]["Reason"] = "";
	$fieldLabelsleaves11["English"]["Superior2"] = "Manager";
	$fieldToolTipsleaves11["English"]["Superior2"] = "";
	$placeHoldersleaves11["English"]["Superior2"] = "";
	$fieldLabelsleaves11["English"]["1stApproval"] = "Supervisor Approval";
	$fieldToolTipsleaves11["English"]["1stApproval"] = "";
	$placeHoldersleaves11["English"]["1stApproval"] = "";
	$fieldLabelsleaves11["English"]["2ndApproval"] = "Manager Approval";
	$fieldToolTipsleaves11["English"]["2ndApproval"] = "";
	$placeHoldersleaves11["English"]["2ndApproval"] = "";
	$fieldLabelsleaves11["English"]["TotalDays"] = "Total Days";
	$fieldToolTipsleaves11["English"]["TotalDays"] = "";
	$placeHoldersleaves11["English"]["TotalDays"] = "";
	$fieldLabelsleaves11["English"]["UploadFile"] = "Upload File";
	$fieldToolTipsleaves11["English"]["UploadFile"] = "";
	$placeHoldersleaves11["English"]["UploadFile"] = "";
	if (count($fieldToolTipsleaves11["English"]))
		$tdataleaves11[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsleaves11[""] = array();
	$fieldToolTipsleaves11[""] = array();
	$placeHoldersleaves11[""] = array();
	$pageTitlesleaves11[""] = array();
	$fieldLabelsleaves11[""]["UploadFile"] = "Upload File";
	$fieldToolTipsleaves11[""]["UploadFile"] = "";
	$placeHoldersleaves11[""]["UploadFile"] = "";
	if (count($fieldToolTipsleaves11[""]))
		$tdataleaves11[".isUseToolTips"] = true;
}


	$tdataleaves11[".NCSearch"] = true;



$tdataleaves11[".shortTableName"] = "leaves11";
$tdataleaves11[".nSecOptions"] = 1;
$tdataleaves11[".recsPerRowPrint"] = 1;
$tdataleaves11[".mainTableOwnerID"] = "EmployeeID";
$tdataleaves11[".moveNext"] = 1;
$tdataleaves11[".entityType"] = 1;

$tdataleaves11[".strOriginalTableName"] = "leaves";

	



$tdataleaves11[".showAddInPopup"] = false;

$tdataleaves11[".showEditInPopup"] = false;

$tdataleaves11[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataleaves11[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataleaves11[".fieldsForRegister"] = array();

$tdataleaves11[".listAjax"] = false;

	$tdataleaves11[".audit"] = false;

	$tdataleaves11[".locking"] = false;

$tdataleaves11[".edit"] = true;
$tdataleaves11[".afterEditAction"] = 0;
$tdataleaves11[".closePopupAfterEdit"] = 1;
$tdataleaves11[".afterEditActionDetTable"] = "leaveremarks";

$tdataleaves11[".add"] = true;
$tdataleaves11[".afterAddAction"] = 0;
$tdataleaves11[".closePopupAfterAdd"] = 1;
$tdataleaves11[".afterAddActionDetTable"] = "leaveremarks";

$tdataleaves11[".list"] = true;

$tdataleaves11[".inlineEdit"] = true;


$tdataleaves11[".reorderRecordsByHeader"] = true;


$tdataleaves11[".exportFormatting"] = 2;
$tdataleaves11[".exportDelimiter"] = ",";
		
$tdataleaves11[".inlineAdd"] = true;
$tdataleaves11[".view"] = true;

$tdataleaves11[".import"] = true;

$tdataleaves11[".exportTo"] = true;

$tdataleaves11[".printFriendly"] = true;

$tdataleaves11[".delete"] = true;

$tdataleaves11[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataleaves11[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataleaves11[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataleaves11[".searchSaving"] = false;
//

$tdataleaves11[".showSearchPanel"] = true;
		$tdataleaves11[".flexibleSearch"] = true;

$tdataleaves11[".isUseAjaxSuggest"] = true;

$tdataleaves11[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																							

$tdataleaves11[".ajaxCodeSnippetAdded"] = false;

$tdataleaves11[".buttonsAdded"] = false;

$tdataleaves11[".addPageEvents"] = true;

// use timepicker for search panel
$tdataleaves11[".isUseTimeForSearch"] = true;





$tdataleaves11[".allSearchFields"] = array();
$tdataleaves11[".filterFields"] = array();
$tdataleaves11[".requiredSearchFields"] = array();

$tdataleaves11[".allSearchFields"][] = "LvID";
	$tdataleaves11[".allSearchFields"][] = "DateCreated";
	$tdataleaves11[".allSearchFields"][] = "LeaveType";
	$tdataleaves11[".allSearchFields"][] = "EmployeeID";
	$tdataleaves11[".allSearchFields"][] = "FromDate";
	$tdataleaves11[".allSearchFields"][] = "ToDate";
	$tdataleaves11[".allSearchFields"][] = "Reason";
	$tdataleaves11[".allSearchFields"][] = "UploadFile";
	$tdataleaves11[".allSearchFields"][] = "FirstHalf";
	$tdataleaves11[".allSearchFields"][] = "SecondHalf";
	$tdataleaves11[".allSearchFields"][] = "Days";
	$tdataleaves11[".allSearchFields"][] = "TotalDays";
	$tdataleaves11[".allSearchFields"][] = "Superior";
	$tdataleaves11[".allSearchFields"][] = "1stApproval";
	$tdataleaves11[".allSearchFields"][] = "Superior2";
	$tdataleaves11[".allSearchFields"][] = "2ndApproval";
	$tdataleaves11[".allSearchFields"][] = "Approved";
	$tdataleaves11[".allSearchFields"][] = "ApprovedDate";
	$tdataleaves11[".allSearchFields"][] = "ApprovedTime";
	$tdataleaves11[".allSearchFields"][] = "Approvedby";
	$tdataleaves11[".allSearchFields"][] = "Posted";
	$tdataleaves11[".allSearchFields"][] = "Locked";
	

$tdataleaves11[".googleLikeFields"] = array();
$tdataleaves11[".googleLikeFields"][] = "LvID";
$tdataleaves11[".googleLikeFields"][] = "FromDate";
$tdataleaves11[".googleLikeFields"][] = "LeaveType";
$tdataleaves11[".googleLikeFields"][] = "Days";
$tdataleaves11[".googleLikeFields"][] = "EmployeeID";
$tdataleaves11[".googleLikeFields"][] = "ToDate";
$tdataleaves11[".googleLikeFields"][] = "Approved";
$tdataleaves11[".googleLikeFields"][] = "ApprovedDate";
$tdataleaves11[".googleLikeFields"][] = "Approvedby";
$tdataleaves11[".googleLikeFields"][] = "Posted";
$tdataleaves11[".googleLikeFields"][] = "DateCreated";
$tdataleaves11[".googleLikeFields"][] = "ApprovedTime";
$tdataleaves11[".googleLikeFields"][] = "FirstHalf";
$tdataleaves11[".googleLikeFields"][] = "SecondHalf";
$tdataleaves11[".googleLikeFields"][] = "Locked";
$tdataleaves11[".googleLikeFields"][] = "Superior";
$tdataleaves11[".googleLikeFields"][] = "Reason";
$tdataleaves11[".googleLikeFields"][] = "Superior2";
$tdataleaves11[".googleLikeFields"][] = "1stApproval";
$tdataleaves11[".googleLikeFields"][] = "2ndApproval";
$tdataleaves11[".googleLikeFields"][] = "TotalDays";
$tdataleaves11[".googleLikeFields"][] = "UploadFile";


$tdataleaves11[".advSearchFields"] = array();
$tdataleaves11[".advSearchFields"][] = "LvID";
$tdataleaves11[".advSearchFields"][] = "DateCreated";
$tdataleaves11[".advSearchFields"][] = "LeaveType";
$tdataleaves11[".advSearchFields"][] = "EmployeeID";
$tdataleaves11[".advSearchFields"][] = "FromDate";
$tdataleaves11[".advSearchFields"][] = "ToDate";
$tdataleaves11[".advSearchFields"][] = "Reason";
$tdataleaves11[".advSearchFields"][] = "UploadFile";
$tdataleaves11[".advSearchFields"][] = "FirstHalf";
$tdataleaves11[".advSearchFields"][] = "SecondHalf";
$tdataleaves11[".advSearchFields"][] = "Days";
$tdataleaves11[".advSearchFields"][] = "TotalDays";
$tdataleaves11[".advSearchFields"][] = "Superior";
$tdataleaves11[".advSearchFields"][] = "1stApproval";
$tdataleaves11[".advSearchFields"][] = "Superior2";
$tdataleaves11[".advSearchFields"][] = "2ndApproval";
$tdataleaves11[".advSearchFields"][] = "Approved";
$tdataleaves11[".advSearchFields"][] = "ApprovedDate";
$tdataleaves11[".advSearchFields"][] = "ApprovedTime";
$tdataleaves11[".advSearchFields"][] = "Approvedby";
$tdataleaves11[".advSearchFields"][] = "Posted";
$tdataleaves11[".advSearchFields"][] = "Locked";

$tdataleaves11[".tableType"] = "list";

$tdataleaves11[".printerPageOrientation"] = 0;
$tdataleaves11[".nPrinterPageScale"] = 100;

$tdataleaves11[".nPrinterSplitRecords"] = 40;

$tdataleaves11[".nPrinterPDFSplitRecords"] = 40;



$tdataleaves11[".geocodingEnabled"] = false;





$tdataleaves11[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataleaves11[".pageSize"] = 20;

$tdataleaves11[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY LvID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataleaves11[".strOrderBy"] = $tstrOrderBy;

$tdataleaves11[".orderindexes"] = array();
	$tdataleaves11[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "LvID");


$tdataleaves11[".sqlHead"] = "SELECT LvID,  FromDate,  LeaveType,  Days,  EmployeeID,  ToDate,  Approved,  ApprovedDate,  Approvedby,  Posted,  DateCreated,  ApprovedTime,  FirstHalf,  SecondHalf,  Locked,  Superior,  Reason,  Superior2,  `1stApproval`,  `2ndApproval`,  TotalDays,  UploadFile";
$tdataleaves11[".sqlFrom"] = "FROM leaves";
$tdataleaves11[".sqlWhereExpr"] = "";
$tdataleaves11[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataleaves11[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataleaves11[".arrGroupsPerPage"] = $arrGPP;

$tdataleaves11[".highlightSearchResults"] = true;

$tableKeysleaves11 = array();
$tableKeysleaves11[] = "LvID";
$tdataleaves11[".Keys"] = $tableKeysleaves11;

$tdataleaves11[".listFields"] = array();
$tdataleaves11[".listFields"][] = "LvID";
$tdataleaves11[".listFields"][] = "DateCreated";
$tdataleaves11[".listFields"][] = "LeaveType";
$tdataleaves11[".listFields"][] = "EmployeeID";
$tdataleaves11[".listFields"][] = "FromDate";
$tdataleaves11[".listFields"][] = "ToDate";
$tdataleaves11[".listFields"][] = "Reason";
$tdataleaves11[".listFields"][] = "UploadFile";
$tdataleaves11[".listFields"][] = "FirstHalf";
$tdataleaves11[".listFields"][] = "SecondHalf";
$tdataleaves11[".listFields"][] = "Days";
$tdataleaves11[".listFields"][] = "TotalDays";
$tdataleaves11[".listFields"][] = "Superior";
$tdataleaves11[".listFields"][] = "1stApproval";
$tdataleaves11[".listFields"][] = "Superior2";
$tdataleaves11[".listFields"][] = "2ndApproval";
$tdataleaves11[".listFields"][] = "Approved";
$tdataleaves11[".listFields"][] = "ApprovedDate";
$tdataleaves11[".listFields"][] = "ApprovedTime";
$tdataleaves11[".listFields"][] = "Approvedby";
$tdataleaves11[".listFields"][] = "Posted";
$tdataleaves11[".listFields"][] = "Locked";

$tdataleaves11[".hideMobileList"] = array();


$tdataleaves11[".viewFields"] = array();
$tdataleaves11[".viewFields"][] = "LvID";
$tdataleaves11[".viewFields"][] = "DateCreated";
$tdataleaves11[".viewFields"][] = "LeaveType";
$tdataleaves11[".viewFields"][] = "EmployeeID";
$tdataleaves11[".viewFields"][] = "FromDate";
$tdataleaves11[".viewFields"][] = "ToDate";
$tdataleaves11[".viewFields"][] = "Reason";
$tdataleaves11[".viewFields"][] = "UploadFile";
$tdataleaves11[".viewFields"][] = "FirstHalf";
$tdataleaves11[".viewFields"][] = "SecondHalf";
$tdataleaves11[".viewFields"][] = "Days";
$tdataleaves11[".viewFields"][] = "TotalDays";
$tdataleaves11[".viewFields"][] = "Superior";
$tdataleaves11[".viewFields"][] = "1stApproval";
$tdataleaves11[".viewFields"][] = "Superior2";
$tdataleaves11[".viewFields"][] = "2ndApproval";
$tdataleaves11[".viewFields"][] = "Approved";
$tdataleaves11[".viewFields"][] = "ApprovedDate";
$tdataleaves11[".viewFields"][] = "ApprovedTime";
$tdataleaves11[".viewFields"][] = "Approvedby";
$tdataleaves11[".viewFields"][] = "Posted";
$tdataleaves11[".viewFields"][] = "Locked";

$tdataleaves11[".addFields"] = array();
$tdataleaves11[".addFields"][] = "DateCreated";
$tdataleaves11[".addFields"][] = "LeaveType";
$tdataleaves11[".addFields"][] = "EmployeeID";
$tdataleaves11[".addFields"][] = "FromDate";
$tdataleaves11[".addFields"][] = "ToDate";
$tdataleaves11[".addFields"][] = "Reason";
$tdataleaves11[".addFields"][] = "UploadFile";
$tdataleaves11[".addFields"][] = "FirstHalf";
$tdataleaves11[".addFields"][] = "SecondHalf";
$tdataleaves11[".addFields"][] = "Days";
$tdataleaves11[".addFields"][] = "Superior";
$tdataleaves11[".addFields"][] = "Superior2";

$tdataleaves11[".masterListFields"] = array();
$tdataleaves11[".masterListFields"][] = "LvID";
$tdataleaves11[".masterListFields"][] = "DateCreated";
$tdataleaves11[".masterListFields"][] = "LeaveType";
$tdataleaves11[".masterListFields"][] = "EmployeeID";
$tdataleaves11[".masterListFields"][] = "FromDate";
$tdataleaves11[".masterListFields"][] = "ToDate";
$tdataleaves11[".masterListFields"][] = "Reason";
$tdataleaves11[".masterListFields"][] = "UploadFile";
$tdataleaves11[".masterListFields"][] = "FirstHalf";
$tdataleaves11[".masterListFields"][] = "SecondHalf";
$tdataleaves11[".masterListFields"][] = "Days";
$tdataleaves11[".masterListFields"][] = "TotalDays";
$tdataleaves11[".masterListFields"][] = "Superior";
$tdataleaves11[".masterListFields"][] = "1stApproval";
$tdataleaves11[".masterListFields"][] = "Superior2";
$tdataleaves11[".masterListFields"][] = "2ndApproval";
$tdataleaves11[".masterListFields"][] = "Approved";
$tdataleaves11[".masterListFields"][] = "ApprovedDate";
$tdataleaves11[".masterListFields"][] = "ApprovedTime";
$tdataleaves11[".masterListFields"][] = "Approvedby";
$tdataleaves11[".masterListFields"][] = "Posted";
$tdataleaves11[".masterListFields"][] = "Locked";

$tdataleaves11[".inlineAddFields"] = array();
$tdataleaves11[".inlineAddFields"][] = "DateCreated";
$tdataleaves11[".inlineAddFields"][] = "LeaveType";
$tdataleaves11[".inlineAddFields"][] = "EmployeeID";
$tdataleaves11[".inlineAddFields"][] = "FromDate";
$tdataleaves11[".inlineAddFields"][] = "ToDate";
$tdataleaves11[".inlineAddFields"][] = "Reason";
$tdataleaves11[".inlineAddFields"][] = "UploadFile";
$tdataleaves11[".inlineAddFields"][] = "FirstHalf";
$tdataleaves11[".inlineAddFields"][] = "SecondHalf";
$tdataleaves11[".inlineAddFields"][] = "Days";
$tdataleaves11[".inlineAddFields"][] = "Superior";
$tdataleaves11[".inlineAddFields"][] = "Superior2";
$tdataleaves11[".inlineAddFields"][] = "ApprovedTime";

$tdataleaves11[".editFields"] = array();
$tdataleaves11[".editFields"][] = "DateCreated";
$tdataleaves11[".editFields"][] = "LeaveType";
$tdataleaves11[".editFields"][] = "EmployeeID";
$tdataleaves11[".editFields"][] = "FromDate";
$tdataleaves11[".editFields"][] = "ToDate";
$tdataleaves11[".editFields"][] = "Reason";
$tdataleaves11[".editFields"][] = "UploadFile";
$tdataleaves11[".editFields"][] = "FirstHalf";
$tdataleaves11[".editFields"][] = "SecondHalf";
$tdataleaves11[".editFields"][] = "Days";
$tdataleaves11[".editFields"][] = "Superior";
$tdataleaves11[".editFields"][] = "1stApproval";
$tdataleaves11[".editFields"][] = "Superior2";
$tdataleaves11[".editFields"][] = "2ndApproval";
$tdataleaves11[".editFields"][] = "Approved";
$tdataleaves11[".editFields"][] = "ApprovedDate";
$tdataleaves11[".editFields"][] = "ApprovedTime";
$tdataleaves11[".editFields"][] = "Approvedby";
$tdataleaves11[".editFields"][] = "Posted";
$tdataleaves11[".editFields"][] = "Locked";

$tdataleaves11[".inlineEditFields"] = array();
$tdataleaves11[".inlineEditFields"][] = "DateCreated";
$tdataleaves11[".inlineEditFields"][] = "LeaveType";
$tdataleaves11[".inlineEditFields"][] = "EmployeeID";
$tdataleaves11[".inlineEditFields"][] = "FromDate";
$tdataleaves11[".inlineEditFields"][] = "ToDate";
$tdataleaves11[".inlineEditFields"][] = "Reason";
$tdataleaves11[".inlineEditFields"][] = "UploadFile";
$tdataleaves11[".inlineEditFields"][] = "FirstHalf";
$tdataleaves11[".inlineEditFields"][] = "SecondHalf";
$tdataleaves11[".inlineEditFields"][] = "Days";
$tdataleaves11[".inlineEditFields"][] = "Superior";
$tdataleaves11[".inlineEditFields"][] = "1stApproval";
$tdataleaves11[".inlineEditFields"][] = "Superior2";
$tdataleaves11[".inlineEditFields"][] = "2ndApproval";
$tdataleaves11[".inlineEditFields"][] = "Approved";
$tdataleaves11[".inlineEditFields"][] = "ApprovedDate";
$tdataleaves11[".inlineEditFields"][] = "ApprovedTime";
$tdataleaves11[".inlineEditFields"][] = "Approvedby";
$tdataleaves11[".inlineEditFields"][] = "Posted";
$tdataleaves11[".inlineEditFields"][] = "Locked";

$tdataleaves11[".updateSelectedFields"] = array();
$tdataleaves11[".updateSelectedFields"][] = "DateCreated";
$tdataleaves11[".updateSelectedFields"][] = "LeaveType";
$tdataleaves11[".updateSelectedFields"][] = "EmployeeID";
$tdataleaves11[".updateSelectedFields"][] = "FromDate";
$tdataleaves11[".updateSelectedFields"][] = "ToDate";
$tdataleaves11[".updateSelectedFields"][] = "Reason";
$tdataleaves11[".updateSelectedFields"][] = "UploadFile";
$tdataleaves11[".updateSelectedFields"][] = "FirstHalf";
$tdataleaves11[".updateSelectedFields"][] = "SecondHalf";
$tdataleaves11[".updateSelectedFields"][] = "Days";
$tdataleaves11[".updateSelectedFields"][] = "Superior";
$tdataleaves11[".updateSelectedFields"][] = "1stApproval";
$tdataleaves11[".updateSelectedFields"][] = "Superior2";
$tdataleaves11[".updateSelectedFields"][] = "2ndApproval";
$tdataleaves11[".updateSelectedFields"][] = "Approved";
$tdataleaves11[".updateSelectedFields"][] = "ApprovedDate";
$tdataleaves11[".updateSelectedFields"][] = "ApprovedTime";
$tdataleaves11[".updateSelectedFields"][] = "Approvedby";
$tdataleaves11[".updateSelectedFields"][] = "Posted";
$tdataleaves11[".updateSelectedFields"][] = "Locked";


$tdataleaves11[".exportFields"] = array();
$tdataleaves11[".exportFields"][] = "LvID";
$tdataleaves11[".exportFields"][] = "DateCreated";
$tdataleaves11[".exportFields"][] = "LeaveType";
$tdataleaves11[".exportFields"][] = "EmployeeID";
$tdataleaves11[".exportFields"][] = "FromDate";
$tdataleaves11[".exportFields"][] = "ToDate";
$tdataleaves11[".exportFields"][] = "Reason";
$tdataleaves11[".exportFields"][] = "UploadFile";
$tdataleaves11[".exportFields"][] = "FirstHalf";
$tdataleaves11[".exportFields"][] = "SecondHalf";
$tdataleaves11[".exportFields"][] = "Days";
$tdataleaves11[".exportFields"][] = "TotalDays";
$tdataleaves11[".exportFields"][] = "Superior";
$tdataleaves11[".exportFields"][] = "1stApproval";
$tdataleaves11[".exportFields"][] = "Superior2";
$tdataleaves11[".exportFields"][] = "2ndApproval";
$tdataleaves11[".exportFields"][] = "Approved";
$tdataleaves11[".exportFields"][] = "ApprovedDate";
$tdataleaves11[".exportFields"][] = "ApprovedTime";
$tdataleaves11[".exportFields"][] = "Approvedby";
$tdataleaves11[".exportFields"][] = "Posted";
$tdataleaves11[".exportFields"][] = "Locked";

$tdataleaves11[".importFields"] = array();
$tdataleaves11[".importFields"][] = "LvID";
$tdataleaves11[".importFields"][] = "FromDate";
$tdataleaves11[".importFields"][] = "LeaveType";
$tdataleaves11[".importFields"][] = "Days";
$tdataleaves11[".importFields"][] = "EmployeeID";
$tdataleaves11[".importFields"][] = "ToDate";
$tdataleaves11[".importFields"][] = "Approved";
$tdataleaves11[".importFields"][] = "ApprovedDate";
$tdataleaves11[".importFields"][] = "Approvedby";
$tdataleaves11[".importFields"][] = "Posted";
$tdataleaves11[".importFields"][] = "DateCreated";
$tdataleaves11[".importFields"][] = "ApprovedTime";
$tdataleaves11[".importFields"][] = "FirstHalf";
$tdataleaves11[".importFields"][] = "SecondHalf";
$tdataleaves11[".importFields"][] = "Locked";
$tdataleaves11[".importFields"][] = "Superior";
$tdataleaves11[".importFields"][] = "Reason";
$tdataleaves11[".importFields"][] = "Superior2";
$tdataleaves11[".importFields"][] = "1stApproval";
$tdataleaves11[".importFields"][] = "2ndApproval";
$tdataleaves11[".importFields"][] = "TotalDays";
$tdataleaves11[".importFields"][] = "UploadFile";

$tdataleaves11[".printFields"] = array();
$tdataleaves11[".printFields"][] = "LvID";
$tdataleaves11[".printFields"][] = "DateCreated";
$tdataleaves11[".printFields"][] = "LeaveType";
$tdataleaves11[".printFields"][] = "EmployeeID";
$tdataleaves11[".printFields"][] = "FromDate";
$tdataleaves11[".printFields"][] = "ToDate";
$tdataleaves11[".printFields"][] = "Reason";
$tdataleaves11[".printFields"][] = "UploadFile";
$tdataleaves11[".printFields"][] = "FirstHalf";
$tdataleaves11[".printFields"][] = "SecondHalf";
$tdataleaves11[".printFields"][] = "Days";
$tdataleaves11[".printFields"][] = "TotalDays";
$tdataleaves11[".printFields"][] = "Superior";
$tdataleaves11[".printFields"][] = "1stApproval";
$tdataleaves11[".printFields"][] = "Superior2";
$tdataleaves11[".printFields"][] = "2ndApproval";
$tdataleaves11[".printFields"][] = "Approved";
$tdataleaves11[".printFields"][] = "ApprovedDate";
$tdataleaves11[".printFields"][] = "ApprovedTime";
$tdataleaves11[".printFields"][] = "Approvedby";
$tdataleaves11[".printFields"][] = "Posted";
$tdataleaves11[".printFields"][] = "Locked";


//	LvID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LvID";
	$fdata["GoodName"] = "LvID";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves11","LvID");
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




	$tdataleaves11["LvID"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves11","FromDate");
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




	$tdataleaves11["FromDate"] = $fdata;
//	LeaveType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LeaveType";
	$fdata["GoodName"] = "LeaveType";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves11","LeaveType");
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




	$tdataleaves11["LeaveType"] = $fdata;
//	Days
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Days";
	$fdata["GoodName"] = "Days";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves11","Days");
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




	$tdataleaves11["Days"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves11","EmployeeID");
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




	$tdataleaves11["EmployeeID"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves11","ToDate");
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




	$tdataleaves11["ToDate"] = $fdata;
//	Approved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Approved";
	$fdata["GoodName"] = "Approved";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves11","Approved");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataleaves11["Approved"] = $fdata;
//	ApprovedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ApprovedDate";
	$fdata["GoodName"] = "ApprovedDate";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves11","ApprovedDate");
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




	$tdataleaves11["ApprovedDate"] = $fdata;
//	Approvedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Approvedby";
	$fdata["GoodName"] = "Approvedby";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves11","Approvedby");
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




	$tdataleaves11["Approvedby"] = $fdata;
//	Posted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Posted";
	$fdata["GoodName"] = "Posted";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves11","Posted");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataleaves11["Posted"] = $fdata;
//	DateCreated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DateCreated";
	$fdata["GoodName"] = "DateCreated";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves11","DateCreated");
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




	$tdataleaves11["DateCreated"] = $fdata;
//	ApprovedTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ApprovedTime";
	$fdata["GoodName"] = "ApprovedTime";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves11","ApprovedTime");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

	
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




	$tdataleaves11["ApprovedTime"] = $fdata;
//	FirstHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "FirstHalf";
	$fdata["GoodName"] = "FirstHalf";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves11","FirstHalf");
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




	$tdataleaves11["FirstHalf"] = $fdata;
//	SecondHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "SecondHalf";
	$fdata["GoodName"] = "SecondHalf";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves11","SecondHalf");
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




	$tdataleaves11["SecondHalf"] = $fdata;
//	Locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Locked";
	$fdata["GoodName"] = "Locked";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves11","Locked");
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




	$tdataleaves11["Locked"] = $fdata;
//	Superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Superior";
	$fdata["GoodName"] = "Superior";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves11","Superior");
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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["export"] = $vdata;
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
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 272;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 72;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 72;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataleaves11["Superior"] = $fdata;
//	Reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Reason";
	$fdata["GoodName"] = "Reason";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves11","Reason");
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




	$tdataleaves11["Reason"] = $fdata;
//	Superior2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Superior2";
	$fdata["GoodName"] = "Superior2";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves11","Superior2");
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




	$tdataleaves11["Superior2"] = $fdata;
//	1stApproval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "1stApproval";
	$fdata["GoodName"] = "1stApproval";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves11","1stApproval");
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




	$tdataleaves11["1stApproval"] = $fdata;
//	2ndApproval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "2ndApproval";
	$fdata["GoodName"] = "2ndApproval";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves11","2ndApproval");
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




	$tdataleaves11["2ndApproval"] = $fdata;
//	TotalDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "TotalDays";
	$fdata["GoodName"] = "TotalDays";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves11","TotalDays");
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




	$tdataleaves11["TotalDays"] = $fdata;
//	UploadFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "UploadFile";
	$fdata["GoodName"] = "UploadFile";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves11","UploadFile");
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

		$fdata["strField"] = "UploadFile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UploadFile";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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




	$tdataleaves11["UploadFile"] = $fdata;


$tables_data["leaves11"]=&$tdataleaves11;
$field_labels["leaves11"] = &$fieldLabelsleaves11;
$fieldToolTips["leaves11"] = &$fieldToolTipsleaves11;
$placeHolders["leaves11"] = &$placeHoldersleaves11;
$page_titles["leaves11"] = &$pageTitlesleaves11;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["leaves11"] = array();
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
		
	$detailsTablesData["leaves11"][$dIndex] = $detailsParam;

	
		$detailsTablesData["leaves11"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["leaves11"][$dIndex]["masterKeys"][]="LvID";

				$detailsTablesData["leaves11"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["leaves11"][$dIndex]["detailKeys"][]="LvID";

// tables which are master tables for current table (detail)
$masterTablesData["leaves11"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_leaves11()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LvID,  FromDate,  LeaveType,  Days,  EmployeeID,  ToDate,  Approved,  ApprovedDate,  Approvedby,  Posted,  DateCreated,  ApprovedTime,  FirstHalf,  SecondHalf,  Locked,  Superior,  Reason,  Superior2,  `1stApproval`,  `2ndApproval`,  TotalDays,  UploadFile";
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
	"m_srcTableName" => "leaves11"
));

$proto6["m_sql"] = "LvID";
$proto6["m_srcTableName"] = "leaves11";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves11"
));

$proto8["m_sql"] = "FromDate";
$proto8["m_srcTableName"] = "leaves11";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "LeaveType",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves11"
));

$proto10["m_sql"] = "LeaveType";
$proto10["m_srcTableName"] = "leaves11";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Days",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves11"
));

$proto12["m_sql"] = "Days";
$proto12["m_srcTableName"] = "leaves11";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves11"
));

$proto14["m_sql"] = "EmployeeID";
$proto14["m_srcTableName"] = "leaves11";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves11"
));

$proto16["m_sql"] = "ToDate";
$proto16["m_srcTableName"] = "leaves11";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Approved",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves11"
));

$proto18["m_sql"] = "Approved";
$proto18["m_srcTableName"] = "leaves11";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedDate",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves11"
));

$proto20["m_sql"] = "ApprovedDate";
$proto20["m_srcTableName"] = "leaves11";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Approvedby",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves11"
));

$proto22["m_sql"] = "Approvedby";
$proto22["m_srcTableName"] = "leaves11";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Posted",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves11"
));

$proto24["m_sql"] = "Posted";
$proto24["m_srcTableName"] = "leaves11";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DateCreated",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves11"
));

$proto26["m_sql"] = "DateCreated";
$proto26["m_srcTableName"] = "leaves11";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedTime",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves11"
));

$proto28["m_sql"] = "ApprovedTime";
$proto28["m_srcTableName"] = "leaves11";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "FirstHalf",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves11"
));

$proto30["m_sql"] = "FirstHalf";
$proto30["m_srcTableName"] = "leaves11";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "SecondHalf",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves11"
));

$proto32["m_sql"] = "SecondHalf";
$proto32["m_srcTableName"] = "leaves11";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Locked",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves11"
));

$proto34["m_sql"] = "Locked";
$proto34["m_srcTableName"] = "leaves11";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves11"
));

$proto36["m_sql"] = "Superior";
$proto36["m_srcTableName"] = "leaves11";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Reason",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves11"
));

$proto38["m_sql"] = "Reason";
$proto38["m_srcTableName"] = "leaves11";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior2",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves11"
));

$proto40["m_sql"] = "Superior2";
$proto40["m_srcTableName"] = "leaves11";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "1stApproval",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves11"
));

$proto42["m_sql"] = "`1stApproval`";
$proto42["m_srcTableName"] = "leaves11";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "2ndApproval",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves11"
));

$proto44["m_sql"] = "`2ndApproval`";
$proto44["m_srcTableName"] = "leaves11";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalDays",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves11"
));

$proto46["m_sql"] = "TotalDays";
$proto46["m_srcTableName"] = "leaves11";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "UploadFile",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves11"
));

$proto48["m_sql"] = "UploadFile";
$proto48["m_srcTableName"] = "leaves11";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto50=array();
$proto50["m_link"] = "SQLL_MAIN";
			$proto51=array();
$proto51["m_strName"] = "leaves";
$proto51["m_srcTableName"] = "leaves11";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "LvID";
$proto51["m_columns"][] = "FromDate";
$proto51["m_columns"][] = "LeaveType";
$proto51["m_columns"][] = "Days";
$proto51["m_columns"][] = "EmployeeID";
$proto51["m_columns"][] = "ToDate";
$proto51["m_columns"][] = "Approved";
$proto51["m_columns"][] = "ApprovedDate";
$proto51["m_columns"][] = "Approvedby";
$proto51["m_columns"][] = "Posted";
$proto51["m_columns"][] = "DateCreated";
$proto51["m_columns"][] = "ApprovedTime";
$proto51["m_columns"][] = "FirstHalf";
$proto51["m_columns"][] = "SecondHalf";
$proto51["m_columns"][] = "Locked";
$proto51["m_columns"][] = "Superior";
$proto51["m_columns"][] = "Reason";
$proto51["m_columns"][] = "Superior2";
$proto51["m_columns"][] = "1stApproval";
$proto51["m_columns"][] = "2ndApproval";
$proto51["m_columns"][] = "TotalDays";
$proto51["m_columns"][] = "UploadFile";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "leaves";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "leaves11";
$proto52=array();
$proto52["m_sql"] = "";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto54=array();
						$obj = new SQLField(array(
	"m_strName" => "LvID",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves11"
));

$proto54["m_column"]=$obj;
$proto54["m_bAsc"] = 0;
$proto54["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto54);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="leaves11";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_leaves11 = createSqlQuery_leaves11();


	
		;

																						

$tdataleaves11[".sqlquery"] = $queryData_leaves11;

include_once(getabspath("include/leaves11_events.php"));
$tableEvents["leaves11"] = new eventclass_leaves11;
$tdataleaves11[".hasEvents"] = true;

?>