<?php
require_once(getabspath("classes/cipherer.php"));




$tdataleaves = array();
	$tdataleaves[".truncateText"] = true;
	$tdataleaves[".NumberOfChars"] = 80;
	$tdataleaves[".ShortName"] = "leaves";
	$tdataleaves[".OwnerID"] = "";
	$tdataleaves[".OriginalTable"] = "leaves";

//	field labels
$fieldLabelsleaves = array();
$fieldToolTipsleaves = array();
$pageTitlesleaves = array();
$placeHoldersleaves = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsleaves["English"] = array();
	$fieldToolTipsleaves["English"] = array();
	$placeHoldersleaves["English"] = array();
	$pageTitlesleaves["English"] = array();
	$fieldLabelsleaves["English"]["LvID"] = "Lv ID";
	$fieldToolTipsleaves["English"]["LvID"] = "";
	$placeHoldersleaves["English"]["LvID"] = "";
	$fieldLabelsleaves["English"]["FromDate"] = "From Date";
	$fieldToolTipsleaves["English"]["FromDate"] = "";
	$placeHoldersleaves["English"]["FromDate"] = "";
	$fieldLabelsleaves["English"]["LeaveType"] = "Leave Type";
	$fieldToolTipsleaves["English"]["LeaveType"] = "";
	$placeHoldersleaves["English"]["LeaveType"] = "";
	$fieldLabelsleaves["English"]["Days"] = "Half/Whole Day";
	$fieldToolTipsleaves["English"]["Days"] = "";
	$placeHoldersleaves["English"]["Days"] = "";
	$fieldLabelsleaves["English"]["EmployeeID"] = "Employee";
	$fieldToolTipsleaves["English"]["EmployeeID"] = "";
	$placeHoldersleaves["English"]["EmployeeID"] = "";
	$fieldLabelsleaves["English"]["ToDate"] = "To Date";
	$fieldToolTipsleaves["English"]["ToDate"] = "";
	$placeHoldersleaves["English"]["ToDate"] = "";
	$fieldLabelsleaves["English"]["Approved"] = "Approved";
	$fieldToolTipsleaves["English"]["Approved"] = "";
	$placeHoldersleaves["English"]["Approved"] = "";
	$fieldLabelsleaves["English"]["ApprovedDate"] = "Approved Date";
	$fieldToolTipsleaves["English"]["ApprovedDate"] = "";
	$placeHoldersleaves["English"]["ApprovedDate"] = "";
	$fieldLabelsleaves["English"]["Approvedby"] = "Approved by";
	$fieldToolTipsleaves["English"]["Approvedby"] = "";
	$placeHoldersleaves["English"]["Approvedby"] = "";
	$fieldLabelsleaves["English"]["Posted"] = "Posted";
	$fieldToolTipsleaves["English"]["Posted"] = "";
	$placeHoldersleaves["English"]["Posted"] = "";
	$fieldLabelsleaves["English"]["DateCreated"] = "Date Created";
	$fieldToolTipsleaves["English"]["DateCreated"] = "";
	$placeHoldersleaves["English"]["DateCreated"] = "";
	$fieldLabelsleaves["English"]["ApprovedTime"] = "Approved Time";
	$fieldToolTipsleaves["English"]["ApprovedTime"] = "";
	$placeHoldersleaves["English"]["ApprovedTime"] = "";
	$fieldLabelsleaves["English"]["FirstHalf"] = "First Half";
	$fieldToolTipsleaves["English"]["FirstHalf"] = "";
	$placeHoldersleaves["English"]["FirstHalf"] = "";
	$fieldLabelsleaves["English"]["SecondHalf"] = "Second Half";
	$fieldToolTipsleaves["English"]["SecondHalf"] = "";
	$placeHoldersleaves["English"]["SecondHalf"] = "";
	$fieldLabelsleaves["English"]["Locked"] = "Locked";
	$fieldToolTipsleaves["English"]["Locked"] = "";
	$placeHoldersleaves["English"]["Locked"] = "";
	$fieldLabelsleaves["English"]["Superior"] = "Supervisor";
	$fieldToolTipsleaves["English"]["Superior"] = "";
	$placeHoldersleaves["English"]["Superior"] = "";
	$fieldLabelsleaves["English"]["Reason"] = "Reason";
	$fieldToolTipsleaves["English"]["Reason"] = "";
	$placeHoldersleaves["English"]["Reason"] = "";
	$fieldLabelsleaves["English"]["Superior2"] = "Manager";
	$fieldToolTipsleaves["English"]["Superior2"] = "";
	$placeHoldersleaves["English"]["Superior2"] = "";
	$fieldLabelsleaves["English"]["1stApproval"] = "Supervisor Approval";
	$fieldToolTipsleaves["English"]["1stApproval"] = "";
	$placeHoldersleaves["English"]["1stApproval"] = "";
	$fieldLabelsleaves["English"]["2ndApproval"] = "Manager Approval";
	$fieldToolTipsleaves["English"]["2ndApproval"] = "";
	$placeHoldersleaves["English"]["2ndApproval"] = "";
	$fieldLabelsleaves["English"]["TotalDays"] = "Total Days";
	$fieldToolTipsleaves["English"]["TotalDays"] = "";
	$placeHoldersleaves["English"]["TotalDays"] = "";
	if (count($fieldToolTipsleaves["English"]))
		$tdataleaves[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsleaves[""] = array();
	$fieldToolTipsleaves[""] = array();
	$placeHoldersleaves[""] = array();
	$pageTitlesleaves[""] = array();
	$fieldLabelsleaves[""]["LvID"] = "Lv ID";
	$fieldToolTipsleaves[""]["LvID"] = "";
	$placeHoldersleaves[""]["LvID"] = "";
	$fieldLabelsleaves[""]["FromDate"] = "From Date";
	$fieldToolTipsleaves[""]["FromDate"] = "";
	$placeHoldersleaves[""]["FromDate"] = "";
	$fieldLabelsleaves[""]["LeaveType"] = "Leave Type";
	$fieldToolTipsleaves[""]["LeaveType"] = "";
	$placeHoldersleaves[""]["LeaveType"] = "";
	$fieldLabelsleaves[""]["Days"] = "Days";
	$fieldToolTipsleaves[""]["Days"] = "";
	$placeHoldersleaves[""]["Days"] = "";
	$fieldLabelsleaves[""]["EmployeeID"] = "Employee ID";
	$fieldToolTipsleaves[""]["EmployeeID"] = "";
	$placeHoldersleaves[""]["EmployeeID"] = "";
	$fieldLabelsleaves[""]["ToDate"] = "To Date";
	$fieldToolTipsleaves[""]["ToDate"] = "";
	$placeHoldersleaves[""]["ToDate"] = "";
	$fieldLabelsleaves[""]["Approved"] = "Approved";
	$fieldToolTipsleaves[""]["Approved"] = "";
	$placeHoldersleaves[""]["Approved"] = "";
	$fieldLabelsleaves[""]["ApprovedDate"] = "Approved Date";
	$fieldToolTipsleaves[""]["ApprovedDate"] = "";
	$placeHoldersleaves[""]["ApprovedDate"] = "";
	$fieldLabelsleaves[""]["Approvedby"] = "Approvedby";
	$fieldToolTipsleaves[""]["Approvedby"] = "";
	$placeHoldersleaves[""]["Approvedby"] = "";
	$fieldLabelsleaves[""]["Posted"] = "Posted";
	$fieldToolTipsleaves[""]["Posted"] = "";
	$placeHoldersleaves[""]["Posted"] = "";
	$fieldLabelsleaves[""]["DateCreated"] = "Date Created";
	$fieldToolTipsleaves[""]["DateCreated"] = "";
	$placeHoldersleaves[""]["DateCreated"] = "";
	$fieldLabelsleaves[""]["ApprovedTime"] = "Approved Time";
	$fieldToolTipsleaves[""]["ApprovedTime"] = "";
	$placeHoldersleaves[""]["ApprovedTime"] = "";
	$fieldLabelsleaves[""]["FirstHalf"] = "First Half";
	$fieldToolTipsleaves[""]["FirstHalf"] = "";
	$placeHoldersleaves[""]["FirstHalf"] = "";
	$fieldLabelsleaves[""]["SecondHalf"] = "Second Half";
	$fieldToolTipsleaves[""]["SecondHalf"] = "";
	$placeHoldersleaves[""]["SecondHalf"] = "";
	$fieldLabelsleaves[""]["Locked"] = "Locked";
	$fieldToolTipsleaves[""]["Locked"] = "";
	$placeHoldersleaves[""]["Locked"] = "";
	$fieldLabelsleaves[""]["Superior"] = "Superior";
	$fieldToolTipsleaves[""]["Superior"] = "";
	$placeHoldersleaves[""]["Superior"] = "";
	$fieldLabelsleaves[""]["Reason"] = "Reason";
	$fieldToolTipsleaves[""]["Reason"] = "";
	$placeHoldersleaves[""]["Reason"] = "";
	$fieldLabelsleaves[""]["Superior2"] = "Superior2";
	$fieldToolTipsleaves[""]["Superior2"] = "";
	$placeHoldersleaves[""]["Superior2"] = "";
	$fieldLabelsleaves[""]["1stApproval"] = "1st Approval";
	$fieldToolTipsleaves[""]["1stApproval"] = "";
	$placeHoldersleaves[""]["1stApproval"] = "";
	$fieldLabelsleaves[""]["2ndApproval"] = "2nd Approval";
	$fieldToolTipsleaves[""]["2ndApproval"] = "";
	$placeHoldersleaves[""]["2ndApproval"] = "";
	$fieldLabelsleaves[""]["TotalDays"] = "Total Days";
	$fieldToolTipsleaves[""]["TotalDays"] = "";
	$placeHoldersleaves[""]["TotalDays"] = "";
	if (count($fieldToolTipsleaves[""]))
		$tdataleaves[".isUseToolTips"] = true;
}


	$tdataleaves[".NCSearch"] = true;



$tdataleaves[".shortTableName"] = "leaves";
$tdataleaves[".nSecOptions"] = 0;
$tdataleaves[".recsPerRowPrint"] = 1;
$tdataleaves[".mainTableOwnerID"] = "";
$tdataleaves[".moveNext"] = 1;
$tdataleaves[".entityType"] = 0;

$tdataleaves[".strOriginalTableName"] = "leaves";

	



$tdataleaves[".showAddInPopup"] = false;

$tdataleaves[".showEditInPopup"] = false;

$tdataleaves[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataleaves[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataleaves[".fieldsForRegister"] = array();

$tdataleaves[".listAjax"] = false;

	$tdataleaves[".audit"] = false;

	$tdataleaves[".locking"] = false;

$tdataleaves[".edit"] = true;
$tdataleaves[".afterEditAction"] = 1;
$tdataleaves[".closePopupAfterEdit"] = 1;
$tdataleaves[".afterEditActionDetTable"] = "";

$tdataleaves[".add"] = true;
$tdataleaves[".afterAddAction"] = 1;
$tdataleaves[".closePopupAfterAdd"] = 1;
$tdataleaves[".afterAddActionDetTable"] = "";

$tdataleaves[".list"] = true;



$tdataleaves[".reorderRecordsByHeader"] = true;


$tdataleaves[".exportFormatting"] = 2;
$tdataleaves[".exportDelimiter"] = ",";
		
$tdataleaves[".view"] = true;

$tdataleaves[".import"] = true;

$tdataleaves[".exportTo"] = true;

$tdataleaves[".printFriendly"] = true;

$tdataleaves[".delete"] = true;

$tdataleaves[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataleaves[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataleaves[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataleaves[".searchSaving"] = false;
//

$tdataleaves[".showSearchPanel"] = true;
		$tdataleaves[".flexibleSearch"] = true;

$tdataleaves[".isUseAjaxSuggest"] = true;

$tdataleaves[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																					

$tdataleaves[".ajaxCodeSnippetAdded"] = false;

$tdataleaves[".buttonsAdded"] = false;

$tdataleaves[".addPageEvents"] = false;

// use timepicker for search panel
$tdataleaves[".isUseTimeForSearch"] = false;





$tdataleaves[".allSearchFields"] = array();
$tdataleaves[".filterFields"] = array();
$tdataleaves[".requiredSearchFields"] = array();

$tdataleaves[".allSearchFields"][] = "LvID";
	$tdataleaves[".allSearchFields"][] = "FromDate";
	$tdataleaves[".allSearchFields"][] = "LeaveType";
	$tdataleaves[".allSearchFields"][] = "Days";
	$tdataleaves[".allSearchFields"][] = "EmployeeID";
	$tdataleaves[".allSearchFields"][] = "ToDate";
	$tdataleaves[".allSearchFields"][] = "Approved";
	$tdataleaves[".allSearchFields"][] = "ApprovedDate";
	$tdataleaves[".allSearchFields"][] = "Approvedby";
	$tdataleaves[".allSearchFields"][] = "Posted";
	$tdataleaves[".allSearchFields"][] = "DateCreated";
	$tdataleaves[".allSearchFields"][] = "ApprovedTime";
	$tdataleaves[".allSearchFields"][] = "FirstHalf";
	$tdataleaves[".allSearchFields"][] = "SecondHalf";
	$tdataleaves[".allSearchFields"][] = "Locked";
	$tdataleaves[".allSearchFields"][] = "Superior";
	$tdataleaves[".allSearchFields"][] = "Reason";
	$tdataleaves[".allSearchFields"][] = "Superior2";
	$tdataleaves[".allSearchFields"][] = "1stApproval";
	$tdataleaves[".allSearchFields"][] = "2ndApproval";
	$tdataleaves[".allSearchFields"][] = "TotalDays";
	

$tdataleaves[".googleLikeFields"] = array();
$tdataleaves[".googleLikeFields"][] = "LvID";
$tdataleaves[".googleLikeFields"][] = "FromDate";
$tdataleaves[".googleLikeFields"][] = "LeaveType";
$tdataleaves[".googleLikeFields"][] = "Days";
$tdataleaves[".googleLikeFields"][] = "EmployeeID";
$tdataleaves[".googleLikeFields"][] = "ToDate";
$tdataleaves[".googleLikeFields"][] = "Approved";
$tdataleaves[".googleLikeFields"][] = "ApprovedDate";
$tdataleaves[".googleLikeFields"][] = "Approvedby";
$tdataleaves[".googleLikeFields"][] = "Posted";
$tdataleaves[".googleLikeFields"][] = "DateCreated";
$tdataleaves[".googleLikeFields"][] = "ApprovedTime";
$tdataleaves[".googleLikeFields"][] = "FirstHalf";
$tdataleaves[".googleLikeFields"][] = "SecondHalf";
$tdataleaves[".googleLikeFields"][] = "Locked";
$tdataleaves[".googleLikeFields"][] = "Superior";
$tdataleaves[".googleLikeFields"][] = "Reason";
$tdataleaves[".googleLikeFields"][] = "Superior2";
$tdataleaves[".googleLikeFields"][] = "1stApproval";
$tdataleaves[".googleLikeFields"][] = "2ndApproval";
$tdataleaves[".googleLikeFields"][] = "TotalDays";


$tdataleaves[".advSearchFields"] = array();
$tdataleaves[".advSearchFields"][] = "LvID";
$tdataleaves[".advSearchFields"][] = "FromDate";
$tdataleaves[".advSearchFields"][] = "LeaveType";
$tdataleaves[".advSearchFields"][] = "Days";
$tdataleaves[".advSearchFields"][] = "EmployeeID";
$tdataleaves[".advSearchFields"][] = "ToDate";
$tdataleaves[".advSearchFields"][] = "Approved";
$tdataleaves[".advSearchFields"][] = "ApprovedDate";
$tdataleaves[".advSearchFields"][] = "Approvedby";
$tdataleaves[".advSearchFields"][] = "Posted";
$tdataleaves[".advSearchFields"][] = "DateCreated";
$tdataleaves[".advSearchFields"][] = "ApprovedTime";
$tdataleaves[".advSearchFields"][] = "FirstHalf";
$tdataleaves[".advSearchFields"][] = "SecondHalf";
$tdataleaves[".advSearchFields"][] = "Locked";
$tdataleaves[".advSearchFields"][] = "Superior";
$tdataleaves[".advSearchFields"][] = "Reason";
$tdataleaves[".advSearchFields"][] = "Superior2";
$tdataleaves[".advSearchFields"][] = "1stApproval";
$tdataleaves[".advSearchFields"][] = "2ndApproval";
$tdataleaves[".advSearchFields"][] = "TotalDays";

$tdataleaves[".tableType"] = "list";

$tdataleaves[".printerPageOrientation"] = 0;
$tdataleaves[".nPrinterPageScale"] = 100;

$tdataleaves[".nPrinterSplitRecords"] = 40;

$tdataleaves[".nPrinterPDFSplitRecords"] = 40;



$tdataleaves[".geocodingEnabled"] = false;





$tdataleaves[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataleaves[".pageSize"] = 20;

$tdataleaves[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataleaves[".strOrderBy"] = $tstrOrderBy;

$tdataleaves[".orderindexes"] = array();

$tdataleaves[".sqlHead"] = "SELECT LvID,  	FromDate,  	LeaveType,  	Days,  	EmployeeID,  	ToDate,  	Approved,  	ApprovedDate,  	Approvedby,  	Posted,  	DateCreated,  	ApprovedTime,  	FirstHalf,  	SecondHalf,  	Locked,  	Superior,  	Reason,  	Superior2,  	`1stApproval`,  	`2ndApproval`,  	TotalDays";
$tdataleaves[".sqlFrom"] = "FROM leaves";
$tdataleaves[".sqlWhereExpr"] = "";
$tdataleaves[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataleaves[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataleaves[".arrGroupsPerPage"] = $arrGPP;

$tdataleaves[".highlightSearchResults"] = true;

$tableKeysleaves = array();
$tableKeysleaves[] = "LvID";
$tdataleaves[".Keys"] = $tableKeysleaves;

$tdataleaves[".listFields"] = array();
$tdataleaves[".listFields"][] = "LvID";
$tdataleaves[".listFields"][] = "FromDate";
$tdataleaves[".listFields"][] = "LeaveType";
$tdataleaves[".listFields"][] = "Days";
$tdataleaves[".listFields"][] = "EmployeeID";
$tdataleaves[".listFields"][] = "ToDate";
$tdataleaves[".listFields"][] = "Approved";
$tdataleaves[".listFields"][] = "ApprovedDate";
$tdataleaves[".listFields"][] = "Approvedby";
$tdataleaves[".listFields"][] = "Posted";
$tdataleaves[".listFields"][] = "DateCreated";
$tdataleaves[".listFields"][] = "ApprovedTime";
$tdataleaves[".listFields"][] = "FirstHalf";
$tdataleaves[".listFields"][] = "SecondHalf";
$tdataleaves[".listFields"][] = "Locked";
$tdataleaves[".listFields"][] = "Superior";
$tdataleaves[".listFields"][] = "Reason";
$tdataleaves[".listFields"][] = "Superior2";
$tdataleaves[".listFields"][] = "1stApproval";
$tdataleaves[".listFields"][] = "2ndApproval";
$tdataleaves[".listFields"][] = "TotalDays";

$tdataleaves[".hideMobileList"] = array();


$tdataleaves[".viewFields"] = array();
$tdataleaves[".viewFields"][] = "LvID";
$tdataleaves[".viewFields"][] = "FromDate";
$tdataleaves[".viewFields"][] = "LeaveType";
$tdataleaves[".viewFields"][] = "Days";
$tdataleaves[".viewFields"][] = "EmployeeID";
$tdataleaves[".viewFields"][] = "ToDate";
$tdataleaves[".viewFields"][] = "Approved";
$tdataleaves[".viewFields"][] = "ApprovedDate";
$tdataleaves[".viewFields"][] = "Approvedby";
$tdataleaves[".viewFields"][] = "Posted";
$tdataleaves[".viewFields"][] = "DateCreated";
$tdataleaves[".viewFields"][] = "ApprovedTime";
$tdataleaves[".viewFields"][] = "FirstHalf";
$tdataleaves[".viewFields"][] = "SecondHalf";
$tdataleaves[".viewFields"][] = "Locked";
$tdataleaves[".viewFields"][] = "Superior";
$tdataleaves[".viewFields"][] = "Reason";
$tdataleaves[".viewFields"][] = "Superior2";
$tdataleaves[".viewFields"][] = "1stApproval";
$tdataleaves[".viewFields"][] = "2ndApproval";
$tdataleaves[".viewFields"][] = "TotalDays";

$tdataleaves[".addFields"] = array();
$tdataleaves[".addFields"][] = "FromDate";
$tdataleaves[".addFields"][] = "LeaveType";
$tdataleaves[".addFields"][] = "Days";
$tdataleaves[".addFields"][] = "EmployeeID";
$tdataleaves[".addFields"][] = "ToDate";
$tdataleaves[".addFields"][] = "Approved";
$tdataleaves[".addFields"][] = "ApprovedDate";
$tdataleaves[".addFields"][] = "Approvedby";
$tdataleaves[".addFields"][] = "Posted";
$tdataleaves[".addFields"][] = "DateCreated";
$tdataleaves[".addFields"][] = "ApprovedTime";
$tdataleaves[".addFields"][] = "FirstHalf";
$tdataleaves[".addFields"][] = "SecondHalf";
$tdataleaves[".addFields"][] = "Locked";
$tdataleaves[".addFields"][] = "Superior";
$tdataleaves[".addFields"][] = "Reason";
$tdataleaves[".addFields"][] = "Superior2";
$tdataleaves[".addFields"][] = "1stApproval";
$tdataleaves[".addFields"][] = "2ndApproval";
$tdataleaves[".addFields"][] = "TotalDays";

$tdataleaves[".masterListFields"] = array();
$tdataleaves[".masterListFields"][] = "LvID";
$tdataleaves[".masterListFields"][] = "FromDate";
$tdataleaves[".masterListFields"][] = "LeaveType";
$tdataleaves[".masterListFields"][] = "Days";
$tdataleaves[".masterListFields"][] = "EmployeeID";
$tdataleaves[".masterListFields"][] = "ToDate";
$tdataleaves[".masterListFields"][] = "Approved";
$tdataleaves[".masterListFields"][] = "ApprovedDate";
$tdataleaves[".masterListFields"][] = "Approvedby";
$tdataleaves[".masterListFields"][] = "Posted";
$tdataleaves[".masterListFields"][] = "DateCreated";
$tdataleaves[".masterListFields"][] = "ApprovedTime";
$tdataleaves[".masterListFields"][] = "FirstHalf";
$tdataleaves[".masterListFields"][] = "SecondHalf";
$tdataleaves[".masterListFields"][] = "Locked";
$tdataleaves[".masterListFields"][] = "Superior";
$tdataleaves[".masterListFields"][] = "Reason";
$tdataleaves[".masterListFields"][] = "Superior2";
$tdataleaves[".masterListFields"][] = "1stApproval";
$tdataleaves[".masterListFields"][] = "2ndApproval";
$tdataleaves[".masterListFields"][] = "TotalDays";

$tdataleaves[".inlineAddFields"] = array();

$tdataleaves[".editFields"] = array();
$tdataleaves[".editFields"][] = "FromDate";
$tdataleaves[".editFields"][] = "LeaveType";
$tdataleaves[".editFields"][] = "Days";
$tdataleaves[".editFields"][] = "EmployeeID";
$tdataleaves[".editFields"][] = "ToDate";
$tdataleaves[".editFields"][] = "Approved";
$tdataleaves[".editFields"][] = "ApprovedDate";
$tdataleaves[".editFields"][] = "Approvedby";
$tdataleaves[".editFields"][] = "Posted";
$tdataleaves[".editFields"][] = "DateCreated";
$tdataleaves[".editFields"][] = "ApprovedTime";
$tdataleaves[".editFields"][] = "FirstHalf";
$tdataleaves[".editFields"][] = "SecondHalf";
$tdataleaves[".editFields"][] = "Locked";
$tdataleaves[".editFields"][] = "Superior";
$tdataleaves[".editFields"][] = "Reason";
$tdataleaves[".editFields"][] = "Superior2";
$tdataleaves[".editFields"][] = "1stApproval";
$tdataleaves[".editFields"][] = "2ndApproval";
$tdataleaves[".editFields"][] = "TotalDays";

$tdataleaves[".inlineEditFields"] = array();

$tdataleaves[".updateSelectedFields"] = array();
$tdataleaves[".updateSelectedFields"][] = "FromDate";
$tdataleaves[".updateSelectedFields"][] = "LeaveType";
$tdataleaves[".updateSelectedFields"][] = "Days";
$tdataleaves[".updateSelectedFields"][] = "EmployeeID";
$tdataleaves[".updateSelectedFields"][] = "ToDate";
$tdataleaves[".updateSelectedFields"][] = "Approved";
$tdataleaves[".updateSelectedFields"][] = "ApprovedDate";
$tdataleaves[".updateSelectedFields"][] = "Approvedby";
$tdataleaves[".updateSelectedFields"][] = "Posted";
$tdataleaves[".updateSelectedFields"][] = "DateCreated";
$tdataleaves[".updateSelectedFields"][] = "ApprovedTime";
$tdataleaves[".updateSelectedFields"][] = "FirstHalf";
$tdataleaves[".updateSelectedFields"][] = "SecondHalf";
$tdataleaves[".updateSelectedFields"][] = "Locked";
$tdataleaves[".updateSelectedFields"][] = "Superior";
$tdataleaves[".updateSelectedFields"][] = "Reason";
$tdataleaves[".updateSelectedFields"][] = "Superior2";
$tdataleaves[".updateSelectedFields"][] = "1stApproval";
$tdataleaves[".updateSelectedFields"][] = "2ndApproval";
$tdataleaves[".updateSelectedFields"][] = "TotalDays";


$tdataleaves[".exportFields"] = array();
$tdataleaves[".exportFields"][] = "LvID";
$tdataleaves[".exportFields"][] = "FromDate";
$tdataleaves[".exportFields"][] = "LeaveType";
$tdataleaves[".exportFields"][] = "Days";
$tdataleaves[".exportFields"][] = "EmployeeID";
$tdataleaves[".exportFields"][] = "ToDate";
$tdataleaves[".exportFields"][] = "Approved";
$tdataleaves[".exportFields"][] = "ApprovedDate";
$tdataleaves[".exportFields"][] = "Approvedby";
$tdataleaves[".exportFields"][] = "Posted";
$tdataleaves[".exportFields"][] = "DateCreated";
$tdataleaves[".exportFields"][] = "ApprovedTime";
$tdataleaves[".exportFields"][] = "FirstHalf";
$tdataleaves[".exportFields"][] = "SecondHalf";
$tdataleaves[".exportFields"][] = "Locked";
$tdataleaves[".exportFields"][] = "Superior";
$tdataleaves[".exportFields"][] = "Reason";
$tdataleaves[".exportFields"][] = "Superior2";
$tdataleaves[".exportFields"][] = "1stApproval";
$tdataleaves[".exportFields"][] = "2ndApproval";
$tdataleaves[".exportFields"][] = "TotalDays";

$tdataleaves[".importFields"] = array();
$tdataleaves[".importFields"][] = "LvID";
$tdataleaves[".importFields"][] = "FromDate";
$tdataleaves[".importFields"][] = "LeaveType";
$tdataleaves[".importFields"][] = "Days";
$tdataleaves[".importFields"][] = "EmployeeID";
$tdataleaves[".importFields"][] = "ToDate";
$tdataleaves[".importFields"][] = "Approved";
$tdataleaves[".importFields"][] = "ApprovedDate";
$tdataleaves[".importFields"][] = "Approvedby";
$tdataleaves[".importFields"][] = "Posted";
$tdataleaves[".importFields"][] = "DateCreated";
$tdataleaves[".importFields"][] = "ApprovedTime";
$tdataleaves[".importFields"][] = "FirstHalf";
$tdataleaves[".importFields"][] = "SecondHalf";
$tdataleaves[".importFields"][] = "Locked";
$tdataleaves[".importFields"][] = "Superior";
$tdataleaves[".importFields"][] = "Reason";
$tdataleaves[".importFields"][] = "Superior2";
$tdataleaves[".importFields"][] = "1stApproval";
$tdataleaves[".importFields"][] = "2ndApproval";
$tdataleaves[".importFields"][] = "TotalDays";

$tdataleaves[".printFields"] = array();
$tdataleaves[".printFields"][] = "LvID";
$tdataleaves[".printFields"][] = "FromDate";
$tdataleaves[".printFields"][] = "LeaveType";
$tdataleaves[".printFields"][] = "Days";
$tdataleaves[".printFields"][] = "EmployeeID";
$tdataleaves[".printFields"][] = "ToDate";
$tdataleaves[".printFields"][] = "Approved";
$tdataleaves[".printFields"][] = "ApprovedDate";
$tdataleaves[".printFields"][] = "Approvedby";
$tdataleaves[".printFields"][] = "Posted";
$tdataleaves[".printFields"][] = "DateCreated";
$tdataleaves[".printFields"][] = "ApprovedTime";
$tdataleaves[".printFields"][] = "FirstHalf";
$tdataleaves[".printFields"][] = "SecondHalf";
$tdataleaves[".printFields"][] = "Locked";
$tdataleaves[".printFields"][] = "Superior";
$tdataleaves[".printFields"][] = "Reason";
$tdataleaves[".printFields"][] = "Superior2";
$tdataleaves[".printFields"][] = "1stApproval";
$tdataleaves[".printFields"][] = "2ndApproval";
$tdataleaves[".printFields"][] = "TotalDays";


//	LvID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LvID";
	$fdata["GoodName"] = "LvID";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves","LvID");
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




	$tdataleaves["LvID"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves","FromDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataleaves["FromDate"] = $fdata;
//	LeaveType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LeaveType";
	$fdata["GoodName"] = "LeaveType";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves","LeaveType");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataleaves["LeaveType"] = $fdata;
//	Days
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Days";
	$fdata["GoodName"] = "Days";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves","Days");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataleaves["Days"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves","EmployeeID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataleaves["EmployeeID"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves","ToDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataleaves["ToDate"] = $fdata;
//	Approved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Approved";
	$fdata["GoodName"] = "Approved";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves","Approved");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataleaves["Approved"] = $fdata;
//	ApprovedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ApprovedDate";
	$fdata["GoodName"] = "ApprovedDate";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves","ApprovedDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataleaves["ApprovedDate"] = $fdata;
//	Approvedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Approvedby";
	$fdata["GoodName"] = "Approvedby";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves","Approvedby");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataleaves["Approvedby"] = $fdata;
//	Posted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Posted";
	$fdata["GoodName"] = "Posted";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves","Posted");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataleaves["Posted"] = $fdata;
//	DateCreated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DateCreated";
	$fdata["GoodName"] = "DateCreated";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves","DateCreated");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	
		
	


	
	
	
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




	$tdataleaves["DateCreated"] = $fdata;
//	ApprovedTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ApprovedTime";
	$fdata["GoodName"] = "ApprovedTime";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves","ApprovedTime");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataleaves["ApprovedTime"] = $fdata;
//	FirstHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "FirstHalf";
	$fdata["GoodName"] = "FirstHalf";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves","FirstHalf");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataleaves["FirstHalf"] = $fdata;
//	SecondHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "SecondHalf";
	$fdata["GoodName"] = "SecondHalf";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves","SecondHalf");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataleaves["SecondHalf"] = $fdata;
//	Locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Locked";
	$fdata["GoodName"] = "Locked";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves","Locked");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataleaves["Locked"] = $fdata;
//	Superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Superior";
	$fdata["GoodName"] = "Superior";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves","Superior");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataleaves["Superior"] = $fdata;
//	Reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Reason";
	$fdata["GoodName"] = "Reason";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves","Reason");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataleaves["Reason"] = $fdata;
//	Superior2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Superior2";
	$fdata["GoodName"] = "Superior2";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves","Superior2");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataleaves["Superior2"] = $fdata;
//	1stApproval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "1stApproval";
	$fdata["GoodName"] = "1stApproval";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves","1stApproval");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataleaves["1stApproval"] = $fdata;
//	2ndApproval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "2ndApproval";
	$fdata["GoodName"] = "2ndApproval";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves","2ndApproval");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataleaves["2ndApproval"] = $fdata;
//	TotalDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "TotalDays";
	$fdata["GoodName"] = "TotalDays";
	$fdata["ownerTable"] = "leaves";
	$fdata["Label"] = GetFieldLabel("leaves","TotalDays");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


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




	$tdataleaves["TotalDays"] = $fdata;


$tables_data["leaves"]=&$tdataleaves;
$field_labels["leaves"] = &$fieldLabelsleaves;
$fieldToolTips["leaves"] = &$fieldToolTipsleaves;
$placeHolders["leaves"] = &$placeHoldersleaves;
$page_titles["leaves"] = &$pageTitlesleaves;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["leaves"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["leaves"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_leaves()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LvID,  	FromDate,  	LeaveType,  	Days,  	EmployeeID,  	ToDate,  	Approved,  	ApprovedDate,  	Approvedby,  	Posted,  	DateCreated,  	ApprovedTime,  	FirstHalf,  	SecondHalf,  	Locked,  	Superior,  	Reason,  	Superior2,  	`1stApproval`,  	`2ndApproval`,  	TotalDays";
$proto0["m_strFrom"] = "FROM leaves";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
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
	"m_srcTableName" => "leaves"
));

$proto6["m_sql"] = "LvID";
$proto6["m_srcTableName"] = "leaves";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves"
));

$proto8["m_sql"] = "FromDate";
$proto8["m_srcTableName"] = "leaves";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "LeaveType",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves"
));

$proto10["m_sql"] = "LeaveType";
$proto10["m_srcTableName"] = "leaves";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Days",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves"
));

$proto12["m_sql"] = "Days";
$proto12["m_srcTableName"] = "leaves";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves"
));

$proto14["m_sql"] = "EmployeeID";
$proto14["m_srcTableName"] = "leaves";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves"
));

$proto16["m_sql"] = "ToDate";
$proto16["m_srcTableName"] = "leaves";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Approved",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves"
));

$proto18["m_sql"] = "Approved";
$proto18["m_srcTableName"] = "leaves";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedDate",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves"
));

$proto20["m_sql"] = "ApprovedDate";
$proto20["m_srcTableName"] = "leaves";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Approvedby",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves"
));

$proto22["m_sql"] = "Approvedby";
$proto22["m_srcTableName"] = "leaves";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Posted",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves"
));

$proto24["m_sql"] = "Posted";
$proto24["m_srcTableName"] = "leaves";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DateCreated",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves"
));

$proto26["m_sql"] = "DateCreated";
$proto26["m_srcTableName"] = "leaves";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedTime",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves"
));

$proto28["m_sql"] = "ApprovedTime";
$proto28["m_srcTableName"] = "leaves";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "FirstHalf",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves"
));

$proto30["m_sql"] = "FirstHalf";
$proto30["m_srcTableName"] = "leaves";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "SecondHalf",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves"
));

$proto32["m_sql"] = "SecondHalf";
$proto32["m_srcTableName"] = "leaves";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Locked",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves"
));

$proto34["m_sql"] = "Locked";
$proto34["m_srcTableName"] = "leaves";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves"
));

$proto36["m_sql"] = "Superior";
$proto36["m_srcTableName"] = "leaves";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Reason",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves"
));

$proto38["m_sql"] = "Reason";
$proto38["m_srcTableName"] = "leaves";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior2",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves"
));

$proto40["m_sql"] = "Superior2";
$proto40["m_srcTableName"] = "leaves";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "1stApproval",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves"
));

$proto42["m_sql"] = "`1stApproval`";
$proto42["m_srcTableName"] = "leaves";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "2ndApproval",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves"
));

$proto44["m_sql"] = "`2ndApproval`";
$proto44["m_srcTableName"] = "leaves";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalDays",
	"m_strTable" => "leaves",
	"m_srcTableName" => "leaves"
));

$proto46["m_sql"] = "TotalDays";
$proto46["m_srcTableName"] = "leaves";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "leaves";
$proto49["m_srcTableName"] = "leaves";
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
$proto48["m_srcTableName"] = "leaves";
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
$proto0["m_srcTableName"]="leaves";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_leaves = createSqlQuery_leaves();


	
		;

																					

$tdataleaves[".sqlquery"] = $queryData_leaves;

$tableEvents["leaves"] = new eventsBase;
$tdataleaves[".hasEvents"] = false;

?>