<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafilelog3 = array();
	$tdatafilelog3[".truncateText"] = true;
	$tdatafilelog3[".NumberOfChars"] = 80;
	$tdatafilelog3[".ShortName"] = "filelog3";
	$tdatafilelog3[".OwnerID"] = "EmployeeID";
	$tdatafilelog3[".OriginalTable"] = "filelog";

//	field labels
$fieldLabelsfilelog3 = array();
$fieldToolTipsfilelog3 = array();
$pageTitlesfilelog3 = array();
$placeHoldersfilelog3 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfilelog3["English"] = array();
	$fieldToolTipsfilelog3["English"] = array();
	$placeHoldersfilelog3["English"] = array();
	$pageTitlesfilelog3["English"] = array();
	$fieldLabelsfilelog3["English"]["log_time"] = "Log Time";
	$fieldToolTipsfilelog3["English"]["log_time"] = "";
	$placeHoldersfilelog3["English"]["log_time"] = "";
	$fieldLabelsfilelog3["English"]["data"] = "Data";
	$fieldToolTipsfilelog3["English"]["data"] = "";
	$placeHoldersfilelog3["English"]["data"] = "";
	$fieldLabelsfilelog3["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipsfilelog3["English"]["EmployeeID"] = "";
	$placeHoldersfilelog3["English"]["EmployeeID"] = "";
	$fieldLabelsfilelog3["English"]["MLogID"] = "MLog ID";
	$fieldToolTipsfilelog3["English"]["MLogID"] = "";
	$placeHoldersfilelog3["English"]["MLogID"] = "";
	$fieldLabelsfilelog3["English"]["MLogDate"] = "MLog Date";
	$fieldToolTipsfilelog3["English"]["MLogDate"] = "";
	$placeHoldersfilelog3["English"]["MLogDate"] = "";
	$fieldLabelsfilelog3["English"]["ClockType"] = "Clock Type";
	$fieldToolTipsfilelog3["English"]["ClockType"] = "";
	$placeHoldersfilelog3["English"]["ClockType"] = "";
	$fieldLabelsfilelog3["English"]["CheckedBy"] = "Supervisor";
	$fieldToolTipsfilelog3["English"]["CheckedBy"] = "";
	$placeHoldersfilelog3["English"]["CheckedBy"] = "";
	$fieldLabelsfilelog3["English"]["ApprovedBy"] = "Manager";
	$fieldToolTipsfilelog3["English"]["ApprovedBy"] = "";
	$placeHoldersfilelog3["English"]["ApprovedBy"] = "";
	$fieldLabelsfilelog3["English"]["HRApproval"] = "HR";
	$fieldToolTipsfilelog3["English"]["HRApproval"] = "";
	$placeHoldersfilelog3["English"]["HRApproval"] = "";
	$fieldLabelsfilelog3["English"]["TransID2"] = "Trans ID2";
	$fieldToolTipsfilelog3["English"]["TransID2"] = "";
	$placeHoldersfilelog3["English"]["TransID2"] = "";
	$fieldLabelsfilelog3["English"]["Checked"] = "Supervisor Approval";
	$fieldToolTipsfilelog3["English"]["Checked"] = "";
	$placeHoldersfilelog3["English"]["Checked"] = "";
	$fieldLabelsfilelog3["English"]["Approved"] = "Manager Approval";
	$fieldToolTipsfilelog3["English"]["Approved"] = "";
	$placeHoldersfilelog3["English"]["Approved"] = "";
	$fieldLabelsfilelog3["English"]["HRApproved"] = "HR Approval";
	$fieldToolTipsfilelog3["English"]["HRApproved"] = "";
	$placeHoldersfilelog3["English"]["HRApproved"] = "";
	$fieldLabelsfilelog3["English"]["HRApprovedDate"] = "HR Approved Date";
	$fieldToolTipsfilelog3["English"]["HRApprovedDate"] = "";
	$placeHoldersfilelog3["English"]["HRApprovedDate"] = "";
	$fieldLabelsfilelog3["English"]["Reason"] = "Reason";
	$fieldToolTipsfilelog3["English"]["Reason"] = "";
	$placeHoldersfilelog3["English"]["Reason"] = "";
	$fieldLabelsfilelog3["English"]["Locked"] = "Locked";
	$fieldToolTipsfilelog3["English"]["Locked"] = "";
	$placeHoldersfilelog3["English"]["Locked"] = "";
	if (count($fieldToolTipsfilelog3["English"]))
		$tdatafilelog3[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfilelog3[""] = array();
	$fieldToolTipsfilelog3[""] = array();
	$placeHoldersfilelog3[""] = array();
	$pageTitlesfilelog3[""] = array();
	$fieldLabelsfilelog3[""]["log_time"] = "Log Time";
	$fieldToolTipsfilelog3[""]["log_time"] = "";
	$placeHoldersfilelog3[""]["log_time"] = "";
	$fieldLabelsfilelog3[""]["data"] = "Data";
	$fieldToolTipsfilelog3[""]["data"] = "";
	$placeHoldersfilelog3[""]["data"] = "";
	$fieldLabelsfilelog3[""]["EmployeeID"] = "Employee ID";
	$fieldToolTipsfilelog3[""]["EmployeeID"] = "";
	$placeHoldersfilelog3[""]["EmployeeID"] = "";
	$fieldLabelsfilelog3[""]["MLogID"] = "MLog ID";
	$fieldToolTipsfilelog3[""]["MLogID"] = "";
	$placeHoldersfilelog3[""]["MLogID"] = "";
	$fieldLabelsfilelog3[""]["MLogDate"] = "MLog Date";
	$fieldToolTipsfilelog3[""]["MLogDate"] = "";
	$placeHoldersfilelog3[""]["MLogDate"] = "";
	$fieldLabelsfilelog3[""]["ClockType"] = "Clock Type";
	$fieldToolTipsfilelog3[""]["ClockType"] = "";
	$placeHoldersfilelog3[""]["ClockType"] = "";
	$fieldLabelsfilelog3[""]["CheckedBy"] = "Checked By";
	$fieldToolTipsfilelog3[""]["CheckedBy"] = "";
	$placeHoldersfilelog3[""]["CheckedBy"] = "";
	$fieldLabelsfilelog3[""]["ApprovedBy"] = "Approved By";
	$fieldToolTipsfilelog3[""]["ApprovedBy"] = "";
	$placeHoldersfilelog3[""]["ApprovedBy"] = "";
	$fieldLabelsfilelog3[""]["HRApproval"] = "HRApproval";
	$fieldToolTipsfilelog3[""]["HRApproval"] = "";
	$placeHoldersfilelog3[""]["HRApproval"] = "";
	$fieldLabelsfilelog3[""]["TransID2"] = "Trans ID2";
	$fieldToolTipsfilelog3[""]["TransID2"] = "";
	$placeHoldersfilelog3[""]["TransID2"] = "";
	$fieldLabelsfilelog3[""]["Checked"] = "Checked";
	$fieldToolTipsfilelog3[""]["Checked"] = "";
	$placeHoldersfilelog3[""]["Checked"] = "";
	$fieldLabelsfilelog3[""]["Approved"] = "Approved";
	$fieldToolTipsfilelog3[""]["Approved"] = "";
	$placeHoldersfilelog3[""]["Approved"] = "";
	$fieldLabelsfilelog3[""]["HRApproved"] = "HRApproved";
	$fieldToolTipsfilelog3[""]["HRApproved"] = "";
	$placeHoldersfilelog3[""]["HRApproved"] = "";
	$fieldLabelsfilelog3[""]["HRApprovedDate"] = "HRApproved Date";
	$fieldToolTipsfilelog3[""]["HRApprovedDate"] = "";
	$placeHoldersfilelog3[""]["HRApprovedDate"] = "";
	$fieldLabelsfilelog3[""]["Reason"] = "Reason";
	$fieldToolTipsfilelog3[""]["Reason"] = "";
	$placeHoldersfilelog3[""]["Reason"] = "";
	$fieldLabelsfilelog3[""]["Locked"] = "Locked";
	$fieldToolTipsfilelog3[""]["Locked"] = "";
	$placeHoldersfilelog3[""]["Locked"] = "";
	if (count($fieldToolTipsfilelog3[""]))
		$tdatafilelog3[".isUseToolTips"] = true;
}


	$tdatafilelog3[".NCSearch"] = true;



$tdatafilelog3[".shortTableName"] = "filelog3";
$tdatafilelog3[".nSecOptions"] = 0;
$tdatafilelog3[".recsPerRowPrint"] = 1;
$tdatafilelog3[".mainTableOwnerID"] = "EmployeeID";
$tdatafilelog3[".moveNext"] = 1;
$tdatafilelog3[".entityType"] = 1;

$tdatafilelog3[".strOriginalTableName"] = "filelog";

	



$tdatafilelog3[".showAddInPopup"] = false;

$tdatafilelog3[".showEditInPopup"] = false;

$tdatafilelog3[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafilelog3[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafilelog3[".fieldsForRegister"] = array();

$tdatafilelog3[".listAjax"] = false;

	$tdatafilelog3[".audit"] = false;

	$tdatafilelog3[".locking"] = false;

$tdatafilelog3[".edit"] = true;
$tdatafilelog3[".afterEditAction"] = 0;
$tdatafilelog3[".closePopupAfterEdit"] = 1;
$tdatafilelog3[".afterEditActionDetTable"] = "Detail tables not found!";


$tdatafilelog3[".list"] = true;



$tdatafilelog3[".reorderRecordsByHeader"] = true;


$tdatafilelog3[".exportFormatting"] = 2;
$tdatafilelog3[".exportDelimiter"] = ",";
		
$tdatafilelog3[".view"] = true;

$tdatafilelog3[".import"] = true;

$tdatafilelog3[".exportTo"] = true;

$tdatafilelog3[".printFriendly"] = true;

$tdatafilelog3[".delete"] = true;

$tdatafilelog3[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafilelog3[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafilelog3[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafilelog3[".searchSaving"] = false;
//

$tdatafilelog3[".showSearchPanel"] = true;
		$tdatafilelog3[".flexibleSearch"] = true;

$tdatafilelog3[".isUseAjaxSuggest"] = true;

$tdatafilelog3[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																					

$tdatafilelog3[".ajaxCodeSnippetAdded"] = false;

$tdatafilelog3[".buttonsAdded"] = false;

$tdatafilelog3[".addPageEvents"] = true;

// use timepicker for search panel
$tdatafilelog3[".isUseTimeForSearch"] = false;





$tdatafilelog3[".allSearchFields"] = array();
$tdatafilelog3[".filterFields"] = array();
$tdatafilelog3[".requiredSearchFields"] = array();

$tdatafilelog3[".allSearchFields"][] = "Locked";
	$tdatafilelog3[".allSearchFields"][] = "TransID2";
	$tdatafilelog3[".allSearchFields"][] = "EmployeeID";
	$tdatafilelog3[".allSearchFields"][] = "log_time";
	$tdatafilelog3[".allSearchFields"][] = "Reason";
	$tdatafilelog3[".allSearchFields"][] = "ClockType";
	$tdatafilelog3[".allSearchFields"][] = "data";
	$tdatafilelog3[".allSearchFields"][] = "MLogID";
	$tdatafilelog3[".allSearchFields"][] = "MLogDate";
	$tdatafilelog3[".allSearchFields"][] = "CheckedBy";
	$tdatafilelog3[".allSearchFields"][] = "Checked";
	$tdatafilelog3[".allSearchFields"][] = "ApprovedBy";
	$tdatafilelog3[".allSearchFields"][] = "Approved";
	$tdatafilelog3[".allSearchFields"][] = "HRApproval";
	$tdatafilelog3[".allSearchFields"][] = "HRApproved";
	$tdatafilelog3[".allSearchFields"][] = "HRApprovedDate";
	

$tdatafilelog3[".googleLikeFields"] = array();
$tdatafilelog3[".googleLikeFields"][] = "log_time";
$tdatafilelog3[".googleLikeFields"][] = "data";
$tdatafilelog3[".googleLikeFields"][] = "EmployeeID";
$tdatafilelog3[".googleLikeFields"][] = "TransID2";
$tdatafilelog3[".googleLikeFields"][] = "MLogID";
$tdatafilelog3[".googleLikeFields"][] = "MLogDate";
$tdatafilelog3[".googleLikeFields"][] = "ClockType";
$tdatafilelog3[".googleLikeFields"][] = "CheckedBy";
$tdatafilelog3[".googleLikeFields"][] = "ApprovedBy";
$tdatafilelog3[".googleLikeFields"][] = "HRApproval";
$tdatafilelog3[".googleLikeFields"][] = "Checked";
$tdatafilelog3[".googleLikeFields"][] = "Approved";
$tdatafilelog3[".googleLikeFields"][] = "HRApproved";
$tdatafilelog3[".googleLikeFields"][] = "HRApprovedDate";
$tdatafilelog3[".googleLikeFields"][] = "Reason";
$tdatafilelog3[".googleLikeFields"][] = "Locked";


$tdatafilelog3[".advSearchFields"] = array();
$tdatafilelog3[".advSearchFields"][] = "Locked";
$tdatafilelog3[".advSearchFields"][] = "TransID2";
$tdatafilelog3[".advSearchFields"][] = "EmployeeID";
$tdatafilelog3[".advSearchFields"][] = "log_time";
$tdatafilelog3[".advSearchFields"][] = "Reason";
$tdatafilelog3[".advSearchFields"][] = "ClockType";
$tdatafilelog3[".advSearchFields"][] = "data";
$tdatafilelog3[".advSearchFields"][] = "MLogID";
$tdatafilelog3[".advSearchFields"][] = "MLogDate";
$tdatafilelog3[".advSearchFields"][] = "CheckedBy";
$tdatafilelog3[".advSearchFields"][] = "Checked";
$tdatafilelog3[".advSearchFields"][] = "ApprovedBy";
$tdatafilelog3[".advSearchFields"][] = "Approved";
$tdatafilelog3[".advSearchFields"][] = "HRApproval";
$tdatafilelog3[".advSearchFields"][] = "HRApproved";
$tdatafilelog3[".advSearchFields"][] = "HRApprovedDate";

$tdatafilelog3[".tableType"] = "list";

$tdatafilelog3[".printerPageOrientation"] = 0;
$tdatafilelog3[".nPrinterPageScale"] = 100;

$tdatafilelog3[".nPrinterSplitRecords"] = 40;

$tdatafilelog3[".nPrinterPDFSplitRecords"] = 40;



$tdatafilelog3[".geocodingEnabled"] = false;





$tdatafilelog3[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafilelog3[".pageSize"] = 20;

$tdatafilelog3[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY TransID2 DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafilelog3[".strOrderBy"] = $tstrOrderBy;

$tdatafilelog3[".orderindexes"] = array();
	$tdatafilelog3[".orderindexes"][] = array(4, (0 ? "ASC" : "DESC"), "TransID2");


$tdatafilelog3[".sqlHead"] = "SELECT log_time,  `data`,  EmployeeID,  TransID2,  MLogID,  MLogDate,  ClockType,  CheckedBy,  ApprovedBy,  HRApproval,  Checked,  Approved,  HRApproved,  HRApprovedDate,  Reason,  Locked";
$tdatafilelog3[".sqlFrom"] = "FROM filelog";
$tdatafilelog3[".sqlWhereExpr"] = "";
$tdatafilelog3[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafilelog3[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafilelog3[".arrGroupsPerPage"] = $arrGPP;

$tdatafilelog3[".highlightSearchResults"] = true;

$tableKeysfilelog3 = array();
$tableKeysfilelog3[] = "TransID2";
$tdatafilelog3[".Keys"] = $tableKeysfilelog3;

$tdatafilelog3[".listFields"] = array();
$tdatafilelog3[".listFields"][] = "Locked";
$tdatafilelog3[".listFields"][] = "TransID2";
$tdatafilelog3[".listFields"][] = "EmployeeID";
$tdatafilelog3[".listFields"][] = "log_time";
$tdatafilelog3[".listFields"][] = "Reason";
$tdatafilelog3[".listFields"][] = "ClockType";
$tdatafilelog3[".listFields"][] = "data";
$tdatafilelog3[".listFields"][] = "MLogID";
$tdatafilelog3[".listFields"][] = "MLogDate";
$tdatafilelog3[".listFields"][] = "CheckedBy";
$tdatafilelog3[".listFields"][] = "Checked";
$tdatafilelog3[".listFields"][] = "ApprovedBy";
$tdatafilelog3[".listFields"][] = "Approved";
$tdatafilelog3[".listFields"][] = "HRApproval";
$tdatafilelog3[".listFields"][] = "HRApproved";
$tdatafilelog3[".listFields"][] = "HRApprovedDate";

$tdatafilelog3[".hideMobileList"] = array();


$tdatafilelog3[".viewFields"] = array();
$tdatafilelog3[".viewFields"][] = "Locked";
$tdatafilelog3[".viewFields"][] = "TransID2";
$tdatafilelog3[".viewFields"][] = "EmployeeID";
$tdatafilelog3[".viewFields"][] = "log_time";
$tdatafilelog3[".viewFields"][] = "Reason";
$tdatafilelog3[".viewFields"][] = "ClockType";
$tdatafilelog3[".viewFields"][] = "data";
$tdatafilelog3[".viewFields"][] = "MLogID";
$tdatafilelog3[".viewFields"][] = "MLogDate";
$tdatafilelog3[".viewFields"][] = "CheckedBy";
$tdatafilelog3[".viewFields"][] = "Checked";
$tdatafilelog3[".viewFields"][] = "ApprovedBy";
$tdatafilelog3[".viewFields"][] = "Approved";
$tdatafilelog3[".viewFields"][] = "HRApproval";
$tdatafilelog3[".viewFields"][] = "HRApproved";
$tdatafilelog3[".viewFields"][] = "HRApprovedDate";

$tdatafilelog3[".addFields"] = array();
$tdatafilelog3[".addFields"][] = "Locked";
$tdatafilelog3[".addFields"][] = "EmployeeID";
$tdatafilelog3[".addFields"][] = "log_time";
$tdatafilelog3[".addFields"][] = "Reason";
$tdatafilelog3[".addFields"][] = "ClockType";
$tdatafilelog3[".addFields"][] = "data";
$tdatafilelog3[".addFields"][] = "MLogID";
$tdatafilelog3[".addFields"][] = "MLogDate";
$tdatafilelog3[".addFields"][] = "CheckedBy";
$tdatafilelog3[".addFields"][] = "ApprovedBy";

$tdatafilelog3[".masterListFields"] = array();
$tdatafilelog3[".masterListFields"][] = "Locked";
$tdatafilelog3[".masterListFields"][] = "TransID2";
$tdatafilelog3[".masterListFields"][] = "EmployeeID";
$tdatafilelog3[".masterListFields"][] = "log_time";
$tdatafilelog3[".masterListFields"][] = "Reason";
$tdatafilelog3[".masterListFields"][] = "ClockType";
$tdatafilelog3[".masterListFields"][] = "data";
$tdatafilelog3[".masterListFields"][] = "MLogID";
$tdatafilelog3[".masterListFields"][] = "MLogDate";
$tdatafilelog3[".masterListFields"][] = "CheckedBy";
$tdatafilelog3[".masterListFields"][] = "Checked";
$tdatafilelog3[".masterListFields"][] = "ApprovedBy";
$tdatafilelog3[".masterListFields"][] = "Approved";
$tdatafilelog3[".masterListFields"][] = "HRApproval";
$tdatafilelog3[".masterListFields"][] = "HRApproved";
$tdatafilelog3[".masterListFields"][] = "HRApprovedDate";

$tdatafilelog3[".inlineAddFields"] = array();
$tdatafilelog3[".inlineAddFields"][] = "Locked";
$tdatafilelog3[".inlineAddFields"][] = "EmployeeID";
$tdatafilelog3[".inlineAddFields"][] = "log_time";
$tdatafilelog3[".inlineAddFields"][] = "Reason";
$tdatafilelog3[".inlineAddFields"][] = "ClockType";
$tdatafilelog3[".inlineAddFields"][] = "data";
$tdatafilelog3[".inlineAddFields"][] = "MLogID";
$tdatafilelog3[".inlineAddFields"][] = "MLogDate";
$tdatafilelog3[".inlineAddFields"][] = "CheckedBy";
$tdatafilelog3[".inlineAddFields"][] = "ApprovedBy";

$tdatafilelog3[".editFields"] = array();
$tdatafilelog3[".editFields"][] = "Locked";
$tdatafilelog3[".editFields"][] = "TransID2";
$tdatafilelog3[".editFields"][] = "EmployeeID";
$tdatafilelog3[".editFields"][] = "log_time";
$tdatafilelog3[".editFields"][] = "Reason";
$tdatafilelog3[".editFields"][] = "ClockType";
$tdatafilelog3[".editFields"][] = "data";
$tdatafilelog3[".editFields"][] = "MLogID";
$tdatafilelog3[".editFields"][] = "MLogDate";
$tdatafilelog3[".editFields"][] = "CheckedBy";
$tdatafilelog3[".editFields"][] = "Checked";
$tdatafilelog3[".editFields"][] = "ApprovedBy";
$tdatafilelog3[".editFields"][] = "Approved";
$tdatafilelog3[".editFields"][] = "HRApproval";
$tdatafilelog3[".editFields"][] = "HRApproved";
$tdatafilelog3[".editFields"][] = "HRApprovedDate";

$tdatafilelog3[".inlineEditFields"] = array();
$tdatafilelog3[".inlineEditFields"][] = "Locked";

$tdatafilelog3[".updateSelectedFields"] = array();
$tdatafilelog3[".updateSelectedFields"][] = "Locked";
$tdatafilelog3[".updateSelectedFields"][] = "TransID2";
$tdatafilelog3[".updateSelectedFields"][] = "EmployeeID";
$tdatafilelog3[".updateSelectedFields"][] = "log_time";
$tdatafilelog3[".updateSelectedFields"][] = "Reason";
$tdatafilelog3[".updateSelectedFields"][] = "ClockType";
$tdatafilelog3[".updateSelectedFields"][] = "data";
$tdatafilelog3[".updateSelectedFields"][] = "MLogID";
$tdatafilelog3[".updateSelectedFields"][] = "MLogDate";
$tdatafilelog3[".updateSelectedFields"][] = "CheckedBy";
$tdatafilelog3[".updateSelectedFields"][] = "Checked";
$tdatafilelog3[".updateSelectedFields"][] = "ApprovedBy";
$tdatafilelog3[".updateSelectedFields"][] = "Approved";
$tdatafilelog3[".updateSelectedFields"][] = "HRApproval";
$tdatafilelog3[".updateSelectedFields"][] = "HRApproved";
$tdatafilelog3[".updateSelectedFields"][] = "HRApprovedDate";


$tdatafilelog3[".exportFields"] = array();
$tdatafilelog3[".exportFields"][] = "Locked";
$tdatafilelog3[".exportFields"][] = "TransID2";
$tdatafilelog3[".exportFields"][] = "EmployeeID";
$tdatafilelog3[".exportFields"][] = "log_time";
$tdatafilelog3[".exportFields"][] = "Reason";
$tdatafilelog3[".exportFields"][] = "ClockType";
$tdatafilelog3[".exportFields"][] = "data";
$tdatafilelog3[".exportFields"][] = "MLogID";
$tdatafilelog3[".exportFields"][] = "MLogDate";
$tdatafilelog3[".exportFields"][] = "CheckedBy";
$tdatafilelog3[".exportFields"][] = "Checked";
$tdatafilelog3[".exportFields"][] = "ApprovedBy";
$tdatafilelog3[".exportFields"][] = "Approved";
$tdatafilelog3[".exportFields"][] = "HRApproval";
$tdatafilelog3[".exportFields"][] = "HRApproved";
$tdatafilelog3[".exportFields"][] = "HRApprovedDate";

$tdatafilelog3[".importFields"] = array();
$tdatafilelog3[".importFields"][] = "log_time";
$tdatafilelog3[".importFields"][] = "data";
$tdatafilelog3[".importFields"][] = "EmployeeID";
$tdatafilelog3[".importFields"][] = "TransID2";
$tdatafilelog3[".importFields"][] = "MLogID";
$tdatafilelog3[".importFields"][] = "MLogDate";
$tdatafilelog3[".importFields"][] = "ClockType";
$tdatafilelog3[".importFields"][] = "CheckedBy";
$tdatafilelog3[".importFields"][] = "ApprovedBy";
$tdatafilelog3[".importFields"][] = "HRApproval";
$tdatafilelog3[".importFields"][] = "Checked";
$tdatafilelog3[".importFields"][] = "Approved";
$tdatafilelog3[".importFields"][] = "HRApproved";
$tdatafilelog3[".importFields"][] = "HRApprovedDate";
$tdatafilelog3[".importFields"][] = "Reason";
$tdatafilelog3[".importFields"][] = "Locked";

$tdatafilelog3[".printFields"] = array();
$tdatafilelog3[".printFields"][] = "Locked";
$tdatafilelog3[".printFields"][] = "TransID2";
$tdatafilelog3[".printFields"][] = "EmployeeID";
$tdatafilelog3[".printFields"][] = "log_time";
$tdatafilelog3[".printFields"][] = "Reason";
$tdatafilelog3[".printFields"][] = "ClockType";
$tdatafilelog3[".printFields"][] = "data";
$tdatafilelog3[".printFields"][] = "MLogID";
$tdatafilelog3[".printFields"][] = "MLogDate";
$tdatafilelog3[".printFields"][] = "CheckedBy";
$tdatafilelog3[".printFields"][] = "Checked";
$tdatafilelog3[".printFields"][] = "ApprovedBy";
$tdatafilelog3[".printFields"][] = "Approved";
$tdatafilelog3[".printFields"][] = "HRApproval";
$tdatafilelog3[".printFields"][] = "HRApproved";
$tdatafilelog3[".printFields"][] = "HRApprovedDate";


//	log_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "log_time";
	$fdata["GoodName"] = "log_time";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog3","log_time");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "log_time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "log_time";

	
	
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

		$edata["ShowTime"] = true;

	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 11;
	$edata["InitialYearFactor"] = 0;
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




	$tdatafilelog3["log_time"] = $fdata;
//	data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "data";
	$fdata["GoodName"] = "data";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog3","data");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "data";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`data`";

	
	
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




	$tdatafilelog3["data"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog3","EmployeeID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "demo_user";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"CheckedBy", 'lookupF'=>"Superior");
	$edata["autoCompleteFields"][] = array('masterF'=>"ApprovedBy", 'lookupF'=>"Superior2");
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




	$tdatafilelog3["EmployeeID"] = $fdata;
//	TransID2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TransID2";
	$fdata["GoodName"] = "TransID2";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog3","TransID2");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TransID2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TransID2";

	
	
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




	$tdatafilelog3["TransID2"] = $fdata;
//	MLogID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MLogID";
	$fdata["GoodName"] = "MLogID";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog3","MLogID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MLogID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MLogID";

	
	
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
							
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafilelog3["MLogID"] = $fdata;
//	MLogDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "MLogDate";
	$fdata["GoodName"] = "MLogDate";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog3","MLogDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MLogDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MLogDate";

	
	
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
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatafilelog3["MLogDate"] = $fdata;
//	ClockType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ClockType";
	$fdata["GoodName"] = "ClockType";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog3","ClockType");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ClockType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ClockType";

	
	
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
	$edata["LookupTable"] = "clocktypes";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CtID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ClockType";
	
	

	
	$edata["LookupOrderBy"] = "CtID";

	
	
	
	

	
	
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




	$tdatafilelog3["ClockType"] = $fdata;
//	CheckedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CheckedBy";
	$fdata["GoodName"] = "CheckedBy";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog3","CheckedBy");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CheckedBy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CheckedBy";

	
	
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




	$tdatafilelog3["CheckedBy"] = $fdata;
//	ApprovedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ApprovedBy";
	$fdata["GoodName"] = "ApprovedBy";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog3","ApprovedBy");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ApprovedBy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ApprovedBy";

	
	
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




	$tdatafilelog3["ApprovedBy"] = $fdata;
//	HRApproval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "HRApproval";
	$fdata["GoodName"] = "HRApproval";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog3","HRApproval");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "HRApproval";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HRApproval";

	
	
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




	$tdatafilelog3["HRApproval"] = $fdata;
//	Checked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Checked";
	$fdata["GoodName"] = "Checked";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog3","Checked");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
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




	$tdatafilelog3["Checked"] = $fdata;
//	Approved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Approved";
	$fdata["GoodName"] = "Approved";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog3","Approved");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatafilelog3["Approved"] = $fdata;
//	HRApproved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "HRApproved";
	$fdata["GoodName"] = "HRApproved";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog3","HRApproved");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "HRApproved";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HRApproved";

	
	
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




	$tdatafilelog3["HRApproved"] = $fdata;
//	HRApprovedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "HRApprovedDate";
	$fdata["GoodName"] = "HRApprovedDate";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog3","HRApprovedDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "HRApprovedDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HRApprovedDate";

	
	
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




	$tdatafilelog3["HRApprovedDate"] = $fdata;
//	Reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Reason";
	$fdata["GoodName"] = "Reason";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog3","Reason");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

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




	$tdatafilelog3["Reason"] = $fdata;
//	Locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Locked";
	$fdata["GoodName"] = "Locked";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog3","Locked");
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




	$tdatafilelog3["Locked"] = $fdata;


$tables_data["filelog3"]=&$tdatafilelog3;
$field_labels["filelog3"] = &$fieldLabelsfilelog3;
$fieldToolTips["filelog3"] = &$fieldToolTipsfilelog3;
$placeHolders["filelog3"] = &$placeHoldersfilelog3;
$page_titles["filelog3"] = &$pageTitlesfilelog3;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["filelog3"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["filelog3"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_filelog3()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "log_time,  `data`,  EmployeeID,  TransID2,  MLogID,  MLogDate,  ClockType,  CheckedBy,  ApprovedBy,  HRApproval,  Checked,  Approved,  HRApproved,  HRApprovedDate,  Reason,  Locked";
$proto0["m_strFrom"] = "FROM filelog";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY TransID2 DESC";
	
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
	"m_strName" => "log_time",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog3"
));

$proto6["m_sql"] = "log_time";
$proto6["m_srcTableName"] = "filelog3";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "data",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog3"
));

$proto8["m_sql"] = "`data`";
$proto8["m_srcTableName"] = "filelog3";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog3"
));

$proto10["m_sql"] = "EmployeeID";
$proto10["m_srcTableName"] = "filelog3";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TransID2",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog3"
));

$proto12["m_sql"] = "TransID2";
$proto12["m_srcTableName"] = "filelog3";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "MLogID",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog3"
));

$proto14["m_sql"] = "MLogID";
$proto14["m_srcTableName"] = "filelog3";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "MLogDate",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog3"
));

$proto16["m_sql"] = "MLogDate";
$proto16["m_srcTableName"] = "filelog3";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ClockType",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog3"
));

$proto18["m_sql"] = "ClockType";
$proto18["m_srcTableName"] = "filelog3";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CheckedBy",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog3"
));

$proto20["m_sql"] = "CheckedBy";
$proto20["m_srcTableName"] = "filelog3";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog3"
));

$proto22["m_sql"] = "ApprovedBy";
$proto22["m_srcTableName"] = "filelog3";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "HRApproval",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog3"
));

$proto24["m_sql"] = "HRApproval";
$proto24["m_srcTableName"] = "filelog3";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Checked",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog3"
));

$proto26["m_sql"] = "Checked";
$proto26["m_srcTableName"] = "filelog3";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Approved",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog3"
));

$proto28["m_sql"] = "Approved";
$proto28["m_srcTableName"] = "filelog3";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "HRApproved",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog3"
));

$proto30["m_sql"] = "HRApproved";
$proto30["m_srcTableName"] = "filelog3";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "HRApprovedDate",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog3"
));

$proto32["m_sql"] = "HRApprovedDate";
$proto32["m_srcTableName"] = "filelog3";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Reason",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog3"
));

$proto34["m_sql"] = "Reason";
$proto34["m_srcTableName"] = "filelog3";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Locked",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog3"
));

$proto36["m_sql"] = "Locked";
$proto36["m_srcTableName"] = "filelog3";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "filelog";
$proto39["m_srcTableName"] = "filelog3";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "log_time";
$proto39["m_columns"][] = "data";
$proto39["m_columns"][] = "EmployeeID";
$proto39["m_columns"][] = "TransID2";
$proto39["m_columns"][] = "MLogID";
$proto39["m_columns"][] = "MLogDate";
$proto39["m_columns"][] = "ClockType";
$proto39["m_columns"][] = "CheckedBy";
$proto39["m_columns"][] = "ApprovedBy";
$proto39["m_columns"][] = "HRApproval";
$proto39["m_columns"][] = "Checked";
$proto39["m_columns"][] = "Approved";
$proto39["m_columns"][] = "HRApproved";
$proto39["m_columns"][] = "HRApprovedDate";
$proto39["m_columns"][] = "Reason";
$proto39["m_columns"][] = "Locked";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "filelog";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "filelog3";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "TransID2",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog3"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 0;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="filelog3";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_filelog3 = createSqlQuery_filelog3();


	
		;

																

$tdatafilelog3[".sqlquery"] = $queryData_filelog3;

include_once(getabspath("include/filelog3_events.php"));
$tableEvents["filelog3"] = new eventclass_filelog3;
$tdatafilelog3[".hasEvents"] = true;

?>