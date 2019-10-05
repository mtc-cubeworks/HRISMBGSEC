<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafilelog = array();
	$tdatafilelog[".truncateText"] = true;
	$tdatafilelog[".NumberOfChars"] = 80;
	$tdatafilelog[".ShortName"] = "filelog";
	$tdatafilelog[".OwnerID"] = "EmployeeID";
	$tdatafilelog[".OriginalTable"] = "filelog";

//	field labels
$fieldLabelsfilelog = array();
$fieldToolTipsfilelog = array();
$pageTitlesfilelog = array();
$placeHoldersfilelog = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfilelog["English"] = array();
	$fieldToolTipsfilelog["English"] = array();
	$placeHoldersfilelog["English"] = array();
	$pageTitlesfilelog["English"] = array();
	$fieldLabelsfilelog["English"]["log_time"] = "Log Time";
	$fieldToolTipsfilelog["English"]["log_time"] = "";
	$placeHoldersfilelog["English"]["log_time"] = "";
	$fieldLabelsfilelog["English"]["data"] = "Data";
	$fieldToolTipsfilelog["English"]["data"] = "";
	$placeHoldersfilelog["English"]["data"] = "";
	$fieldLabelsfilelog["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipsfilelog["English"]["EmployeeID"] = "";
	$placeHoldersfilelog["English"]["EmployeeID"] = "";
	$fieldLabelsfilelog["English"]["MLogID"] = "MLog ID";
	$fieldToolTipsfilelog["English"]["MLogID"] = "";
	$placeHoldersfilelog["English"]["MLogID"] = "";
	$fieldLabelsfilelog["English"]["MLogDate"] = "MLog Date";
	$fieldToolTipsfilelog["English"]["MLogDate"] = "";
	$placeHoldersfilelog["English"]["MLogDate"] = "";
	$fieldLabelsfilelog["English"]["ClockType"] = "Clock Type";
	$fieldToolTipsfilelog["English"]["ClockType"] = "";
	$placeHoldersfilelog["English"]["ClockType"] = "";
	$fieldLabelsfilelog["English"]["CheckedBy"] = "Supervisor";
	$fieldToolTipsfilelog["English"]["CheckedBy"] = "";
	$placeHoldersfilelog["English"]["CheckedBy"] = "";
	$fieldLabelsfilelog["English"]["ApprovedBy"] = "Manager";
	$fieldToolTipsfilelog["English"]["ApprovedBy"] = "";
	$placeHoldersfilelog["English"]["ApprovedBy"] = "";
	$fieldLabelsfilelog["English"]["HRApproval"] = "HR";
	$fieldToolTipsfilelog["English"]["HRApproval"] = "";
	$placeHoldersfilelog["English"]["HRApproval"] = "";
	$fieldLabelsfilelog["English"]["TransID2"] = "Trans ID2";
	$fieldToolTipsfilelog["English"]["TransID2"] = "";
	$placeHoldersfilelog["English"]["TransID2"] = "";
	$fieldLabelsfilelog["English"]["Checked"] = "Supervisor Approval";
	$fieldToolTipsfilelog["English"]["Checked"] = "";
	$placeHoldersfilelog["English"]["Checked"] = "";
	$fieldLabelsfilelog["English"]["Approved"] = "Manager Approval";
	$fieldToolTipsfilelog["English"]["Approved"] = "";
	$placeHoldersfilelog["English"]["Approved"] = "";
	$fieldLabelsfilelog["English"]["HRApproved"] = "HR Approval";
	$fieldToolTipsfilelog["English"]["HRApproved"] = "";
	$placeHoldersfilelog["English"]["HRApproved"] = "";
	$fieldLabelsfilelog["English"]["HRApprovedDate"] = "HR Approved Date";
	$fieldToolTipsfilelog["English"]["HRApprovedDate"] = "";
	$placeHoldersfilelog["English"]["HRApprovedDate"] = "";
	$fieldLabelsfilelog["English"]["Reason"] = "Reason";
	$fieldToolTipsfilelog["English"]["Reason"] = "";
	$placeHoldersfilelog["English"]["Reason"] = "";
	$fieldLabelsfilelog["English"]["Locked"] = "Locked";
	$fieldToolTipsfilelog["English"]["Locked"] = "";
	$placeHoldersfilelog["English"]["Locked"] = "";
	if (count($fieldToolTipsfilelog["English"]))
		$tdatafilelog[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfilelog[""] = array();
	$fieldToolTipsfilelog[""] = array();
	$placeHoldersfilelog[""] = array();
	$pageTitlesfilelog[""] = array();
	$fieldLabelsfilelog[""]["log_time"] = "Log Time";
	$fieldToolTipsfilelog[""]["log_time"] = "";
	$placeHoldersfilelog[""]["log_time"] = "";
	$fieldLabelsfilelog[""]["data"] = "Data";
	$fieldToolTipsfilelog[""]["data"] = "";
	$placeHoldersfilelog[""]["data"] = "";
	$fieldLabelsfilelog[""]["EmployeeID"] = "Employee ID";
	$fieldToolTipsfilelog[""]["EmployeeID"] = "";
	$placeHoldersfilelog[""]["EmployeeID"] = "";
	$fieldLabelsfilelog[""]["MLogID"] = "MLog ID";
	$fieldToolTipsfilelog[""]["MLogID"] = "";
	$placeHoldersfilelog[""]["MLogID"] = "";
	$fieldLabelsfilelog[""]["MLogDate"] = "MLog Date";
	$fieldToolTipsfilelog[""]["MLogDate"] = "";
	$placeHoldersfilelog[""]["MLogDate"] = "";
	$fieldLabelsfilelog[""]["ClockType"] = "Clock Type";
	$fieldToolTipsfilelog[""]["ClockType"] = "";
	$placeHoldersfilelog[""]["ClockType"] = "";
	$fieldLabelsfilelog[""]["CheckedBy"] = "Checked By";
	$fieldToolTipsfilelog[""]["CheckedBy"] = "";
	$placeHoldersfilelog[""]["CheckedBy"] = "";
	$fieldLabelsfilelog[""]["ApprovedBy"] = "Approved By";
	$fieldToolTipsfilelog[""]["ApprovedBy"] = "";
	$placeHoldersfilelog[""]["ApprovedBy"] = "";
	$fieldLabelsfilelog[""]["HRApproval"] = "HRApproval";
	$fieldToolTipsfilelog[""]["HRApproval"] = "";
	$placeHoldersfilelog[""]["HRApproval"] = "";
	$fieldLabelsfilelog[""]["TransID2"] = "Trans ID2";
	$fieldToolTipsfilelog[""]["TransID2"] = "";
	$placeHoldersfilelog[""]["TransID2"] = "";
	$fieldLabelsfilelog[""]["Checked"] = "Checked";
	$fieldToolTipsfilelog[""]["Checked"] = "";
	$placeHoldersfilelog[""]["Checked"] = "";
	$fieldLabelsfilelog[""]["Approved"] = "Approved";
	$fieldToolTipsfilelog[""]["Approved"] = "";
	$placeHoldersfilelog[""]["Approved"] = "";
	$fieldLabelsfilelog[""]["HRApproved"] = "HRApproved";
	$fieldToolTipsfilelog[""]["HRApproved"] = "";
	$placeHoldersfilelog[""]["HRApproved"] = "";
	$fieldLabelsfilelog[""]["HRApprovedDate"] = "HRApproved Date";
	$fieldToolTipsfilelog[""]["HRApprovedDate"] = "";
	$placeHoldersfilelog[""]["HRApprovedDate"] = "";
	$fieldLabelsfilelog[""]["Reason"] = "Reason";
	$fieldToolTipsfilelog[""]["Reason"] = "";
	$placeHoldersfilelog[""]["Reason"] = "";
	$fieldLabelsfilelog[""]["Locked"] = "Locked";
	$fieldToolTipsfilelog[""]["Locked"] = "";
	$placeHoldersfilelog[""]["Locked"] = "";
	if (count($fieldToolTipsfilelog[""]))
		$tdatafilelog[".isUseToolTips"] = true;
}


	$tdatafilelog[".NCSearch"] = true;



$tdatafilelog[".shortTableName"] = "filelog";
$tdatafilelog[".nSecOptions"] = 1;
$tdatafilelog[".recsPerRowPrint"] = 1;
$tdatafilelog[".mainTableOwnerID"] = "EmployeeID";
$tdatafilelog[".moveNext"] = 1;
$tdatafilelog[".entityType"] = 0;

$tdatafilelog[".strOriginalTableName"] = "filelog";

	



$tdatafilelog[".showAddInPopup"] = false;

$tdatafilelog[".showEditInPopup"] = false;

$tdatafilelog[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafilelog[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafilelog[".fieldsForRegister"] = array();

$tdatafilelog[".listAjax"] = false;

	$tdatafilelog[".audit"] = false;

	$tdatafilelog[".locking"] = false;

$tdatafilelog[".edit"] = true;
$tdatafilelog[".afterEditAction"] = 0;
$tdatafilelog[".closePopupAfterEdit"] = 1;
$tdatafilelog[".afterEditActionDetTable"] = "Detail tables not found!";

$tdatafilelog[".add"] = true;
$tdatafilelog[".afterAddAction"] = 0;
$tdatafilelog[".closePopupAfterAdd"] = 1;
$tdatafilelog[".afterAddActionDetTable"] = "Detail tables not found!";

$tdatafilelog[".list"] = true;



$tdatafilelog[".reorderRecordsByHeader"] = true;


$tdatafilelog[".exportFormatting"] = 2;
$tdatafilelog[".exportDelimiter"] = ",";
		
$tdatafilelog[".inlineAdd"] = true;
$tdatafilelog[".view"] = true;

$tdatafilelog[".import"] = true;

$tdatafilelog[".exportTo"] = true;

$tdatafilelog[".printFriendly"] = true;

$tdatafilelog[".delete"] = true;

$tdatafilelog[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafilelog[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafilelog[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafilelog[".searchSaving"] = false;
//

$tdatafilelog[".showSearchPanel"] = true;
		$tdatafilelog[".flexibleSearch"] = true;

$tdatafilelog[".isUseAjaxSuggest"] = true;

$tdatafilelog[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																					

$tdatafilelog[".ajaxCodeSnippetAdded"] = false;

$tdatafilelog[".buttonsAdded"] = false;

$tdatafilelog[".addPageEvents"] = true;

// use timepicker for search panel
$tdatafilelog[".isUseTimeForSearch"] = false;





$tdatafilelog[".allSearchFields"] = array();
$tdatafilelog[".filterFields"] = array();
$tdatafilelog[".requiredSearchFields"] = array();

$tdatafilelog[".allSearchFields"][] = "Locked";
	$tdatafilelog[".allSearchFields"][] = "TransID2";
	$tdatafilelog[".allSearchFields"][] = "EmployeeID";
	$tdatafilelog[".allSearchFields"][] = "log_time";
	$tdatafilelog[".allSearchFields"][] = "Reason";
	$tdatafilelog[".allSearchFields"][] = "data";
	$tdatafilelog[".allSearchFields"][] = "MLogID";
	$tdatafilelog[".allSearchFields"][] = "MLogDate";
	$tdatafilelog[".allSearchFields"][] = "CheckedBy";
	$tdatafilelog[".allSearchFields"][] = "Checked";
	$tdatafilelog[".allSearchFields"][] = "ApprovedBy";
	$tdatafilelog[".allSearchFields"][] = "Approved";
	$tdatafilelog[".allSearchFields"][] = "HRApproval";
	$tdatafilelog[".allSearchFields"][] = "HRApproved";
	$tdatafilelog[".allSearchFields"][] = "HRApprovedDate";
	

$tdatafilelog[".googleLikeFields"] = array();
$tdatafilelog[".googleLikeFields"][] = "log_time";
$tdatafilelog[".googleLikeFields"][] = "data";
$tdatafilelog[".googleLikeFields"][] = "EmployeeID";
$tdatafilelog[".googleLikeFields"][] = "TransID2";
$tdatafilelog[".googleLikeFields"][] = "MLogID";
$tdatafilelog[".googleLikeFields"][] = "MLogDate";
$tdatafilelog[".googleLikeFields"][] = "CheckedBy";
$tdatafilelog[".googleLikeFields"][] = "ApprovedBy";
$tdatafilelog[".googleLikeFields"][] = "HRApproval";
$tdatafilelog[".googleLikeFields"][] = "Checked";
$tdatafilelog[".googleLikeFields"][] = "Approved";
$tdatafilelog[".googleLikeFields"][] = "HRApproved";
$tdatafilelog[".googleLikeFields"][] = "HRApprovedDate";
$tdatafilelog[".googleLikeFields"][] = "Reason";
$tdatafilelog[".googleLikeFields"][] = "Locked";


$tdatafilelog[".advSearchFields"] = array();
$tdatafilelog[".advSearchFields"][] = "Locked";
$tdatafilelog[".advSearchFields"][] = "TransID2";
$tdatafilelog[".advSearchFields"][] = "EmployeeID";
$tdatafilelog[".advSearchFields"][] = "log_time";
$tdatafilelog[".advSearchFields"][] = "Reason";
$tdatafilelog[".advSearchFields"][] = "data";
$tdatafilelog[".advSearchFields"][] = "MLogID";
$tdatafilelog[".advSearchFields"][] = "MLogDate";
$tdatafilelog[".advSearchFields"][] = "CheckedBy";
$tdatafilelog[".advSearchFields"][] = "Checked";
$tdatafilelog[".advSearchFields"][] = "ApprovedBy";
$tdatafilelog[".advSearchFields"][] = "Approved";
$tdatafilelog[".advSearchFields"][] = "HRApproval";
$tdatafilelog[".advSearchFields"][] = "HRApproved";
$tdatafilelog[".advSearchFields"][] = "HRApprovedDate";

$tdatafilelog[".tableType"] = "list";

$tdatafilelog[".printerPageOrientation"] = 0;
$tdatafilelog[".nPrinterPageScale"] = 100;

$tdatafilelog[".nPrinterSplitRecords"] = 40;

$tdatafilelog[".nPrinterPDFSplitRecords"] = 40;



$tdatafilelog[".geocodingEnabled"] = false;





$tdatafilelog[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafilelog[".pageSize"] = 20;

$tdatafilelog[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY TransID2 DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafilelog[".strOrderBy"] = $tstrOrderBy;

$tdatafilelog[".orderindexes"] = array();
	$tdatafilelog[".orderindexes"][] = array(4, (0 ? "ASC" : "DESC"), "TransID2");


$tdatafilelog[".sqlHead"] = "SELECT log_time,  `data`,  EmployeeID,  TransID2,  MLogID,  MLogDate,  ClockType,  CheckedBy,  ApprovedBy,  HRApproval,  Checked,  Approved,  HRApproved,  HRApprovedDate,  Reason,  Locked";
$tdatafilelog[".sqlFrom"] = "FROM filelog";
$tdatafilelog[".sqlWhereExpr"] = "";
$tdatafilelog[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafilelog[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafilelog[".arrGroupsPerPage"] = $arrGPP;

$tdatafilelog[".highlightSearchResults"] = true;

$tableKeysfilelog = array();
$tableKeysfilelog[] = "TransID2";
$tdatafilelog[".Keys"] = $tableKeysfilelog;

$tdatafilelog[".listFields"] = array();
$tdatafilelog[".listFields"][] = "Locked";
$tdatafilelog[".listFields"][] = "TransID2";
$tdatafilelog[".listFields"][] = "EmployeeID";
$tdatafilelog[".listFields"][] = "log_time";
$tdatafilelog[".listFields"][] = "Reason";
$tdatafilelog[".listFields"][] = "ClockType";
$tdatafilelog[".listFields"][] = "data";
$tdatafilelog[".listFields"][] = "MLogID";
$tdatafilelog[".listFields"][] = "MLogDate";
$tdatafilelog[".listFields"][] = "CheckedBy";
$tdatafilelog[".listFields"][] = "Checked";
$tdatafilelog[".listFields"][] = "ApprovedBy";
$tdatafilelog[".listFields"][] = "Approved";
$tdatafilelog[".listFields"][] = "HRApproval";
$tdatafilelog[".listFields"][] = "HRApproved";
$tdatafilelog[".listFields"][] = "HRApprovedDate";

$tdatafilelog[".hideMobileList"] = array();


$tdatafilelog[".viewFields"] = array();
$tdatafilelog[".viewFields"][] = "Locked";
$tdatafilelog[".viewFields"][] = "TransID2";
$tdatafilelog[".viewFields"][] = "EmployeeID";
$tdatafilelog[".viewFields"][] = "log_time";
$tdatafilelog[".viewFields"][] = "Reason";
$tdatafilelog[".viewFields"][] = "ClockType";
$tdatafilelog[".viewFields"][] = "data";
$tdatafilelog[".viewFields"][] = "MLogID";
$tdatafilelog[".viewFields"][] = "MLogDate";
$tdatafilelog[".viewFields"][] = "CheckedBy";
$tdatafilelog[".viewFields"][] = "Checked";
$tdatafilelog[".viewFields"][] = "ApprovedBy";
$tdatafilelog[".viewFields"][] = "Approved";
$tdatafilelog[".viewFields"][] = "HRApproval";
$tdatafilelog[".viewFields"][] = "HRApproved";
$tdatafilelog[".viewFields"][] = "HRApprovedDate";

$tdatafilelog[".addFields"] = array();
$tdatafilelog[".addFields"][] = "Locked";
$tdatafilelog[".addFields"][] = "EmployeeID";
$tdatafilelog[".addFields"][] = "log_time";
$tdatafilelog[".addFields"][] = "Reason";
$tdatafilelog[".addFields"][] = "ClockType";
$tdatafilelog[".addFields"][] = "data";
$tdatafilelog[".addFields"][] = "MLogID";
$tdatafilelog[".addFields"][] = "MLogDate";
$tdatafilelog[".addFields"][] = "CheckedBy";
$tdatafilelog[".addFields"][] = "ApprovedBy";

$tdatafilelog[".masterListFields"] = array();
$tdatafilelog[".masterListFields"][] = "Locked";
$tdatafilelog[".masterListFields"][] = "TransID2";
$tdatafilelog[".masterListFields"][] = "EmployeeID";
$tdatafilelog[".masterListFields"][] = "log_time";
$tdatafilelog[".masterListFields"][] = "Reason";
$tdatafilelog[".masterListFields"][] = "ClockType";
$tdatafilelog[".masterListFields"][] = "data";
$tdatafilelog[".masterListFields"][] = "MLogID";
$tdatafilelog[".masterListFields"][] = "MLogDate";
$tdatafilelog[".masterListFields"][] = "CheckedBy";
$tdatafilelog[".masterListFields"][] = "Checked";
$tdatafilelog[".masterListFields"][] = "ApprovedBy";
$tdatafilelog[".masterListFields"][] = "Approved";
$tdatafilelog[".masterListFields"][] = "HRApproval";
$tdatafilelog[".masterListFields"][] = "HRApproved";
$tdatafilelog[".masterListFields"][] = "HRApprovedDate";

$tdatafilelog[".inlineAddFields"] = array();
$tdatafilelog[".inlineAddFields"][] = "Locked";
$tdatafilelog[".inlineAddFields"][] = "EmployeeID";
$tdatafilelog[".inlineAddFields"][] = "log_time";
$tdatafilelog[".inlineAddFields"][] = "Reason";
$tdatafilelog[".inlineAddFields"][] = "ClockType";
$tdatafilelog[".inlineAddFields"][] = "data";
$tdatafilelog[".inlineAddFields"][] = "MLogID";
$tdatafilelog[".inlineAddFields"][] = "MLogDate";
$tdatafilelog[".inlineAddFields"][] = "CheckedBy";
$tdatafilelog[".inlineAddFields"][] = "ApprovedBy";

$tdatafilelog[".editFields"] = array();
$tdatafilelog[".editFields"][] = "Locked";
$tdatafilelog[".editFields"][] = "TransID2";
$tdatafilelog[".editFields"][] = "EmployeeID";
$tdatafilelog[".editFields"][] = "log_time";
$tdatafilelog[".editFields"][] = "Reason";
$tdatafilelog[".editFields"][] = "ClockType";
$tdatafilelog[".editFields"][] = "data";
$tdatafilelog[".editFields"][] = "MLogID";
$tdatafilelog[".editFields"][] = "MLogDate";
$tdatafilelog[".editFields"][] = "CheckedBy";
$tdatafilelog[".editFields"][] = "Checked";
$tdatafilelog[".editFields"][] = "ApprovedBy";
$tdatafilelog[".editFields"][] = "Approved";
$tdatafilelog[".editFields"][] = "HRApproval";
$tdatafilelog[".editFields"][] = "HRApproved";
$tdatafilelog[".editFields"][] = "HRApprovedDate";

$tdatafilelog[".inlineEditFields"] = array();

$tdatafilelog[".updateSelectedFields"] = array();
$tdatafilelog[".updateSelectedFields"][] = "Locked";
$tdatafilelog[".updateSelectedFields"][] = "TransID2";
$tdatafilelog[".updateSelectedFields"][] = "EmployeeID";
$tdatafilelog[".updateSelectedFields"][] = "log_time";
$tdatafilelog[".updateSelectedFields"][] = "Reason";
$tdatafilelog[".updateSelectedFields"][] = "ClockType";
$tdatafilelog[".updateSelectedFields"][] = "data";
$tdatafilelog[".updateSelectedFields"][] = "MLogID";
$tdatafilelog[".updateSelectedFields"][] = "MLogDate";
$tdatafilelog[".updateSelectedFields"][] = "CheckedBy";
$tdatafilelog[".updateSelectedFields"][] = "Checked";
$tdatafilelog[".updateSelectedFields"][] = "ApprovedBy";
$tdatafilelog[".updateSelectedFields"][] = "Approved";
$tdatafilelog[".updateSelectedFields"][] = "HRApproval";
$tdatafilelog[".updateSelectedFields"][] = "HRApproved";
$tdatafilelog[".updateSelectedFields"][] = "HRApprovedDate";


$tdatafilelog[".exportFields"] = array();
$tdatafilelog[".exportFields"][] = "Locked";
$tdatafilelog[".exportFields"][] = "TransID2";
$tdatafilelog[".exportFields"][] = "EmployeeID";
$tdatafilelog[".exportFields"][] = "log_time";
$tdatafilelog[".exportFields"][] = "Reason";
$tdatafilelog[".exportFields"][] = "ClockType";
$tdatafilelog[".exportFields"][] = "data";
$tdatafilelog[".exportFields"][] = "MLogID";
$tdatafilelog[".exportFields"][] = "MLogDate";
$tdatafilelog[".exportFields"][] = "CheckedBy";
$tdatafilelog[".exportFields"][] = "Checked";
$tdatafilelog[".exportFields"][] = "ApprovedBy";
$tdatafilelog[".exportFields"][] = "Approved";
$tdatafilelog[".exportFields"][] = "HRApproval";
$tdatafilelog[".exportFields"][] = "HRApproved";
$tdatafilelog[".exportFields"][] = "HRApprovedDate";

$tdatafilelog[".importFields"] = array();
$tdatafilelog[".importFields"][] = "log_time";
$tdatafilelog[".importFields"][] = "data";
$tdatafilelog[".importFields"][] = "EmployeeID";
$tdatafilelog[".importFields"][] = "TransID2";
$tdatafilelog[".importFields"][] = "MLogID";
$tdatafilelog[".importFields"][] = "MLogDate";
$tdatafilelog[".importFields"][] = "ClockType";
$tdatafilelog[".importFields"][] = "CheckedBy";
$tdatafilelog[".importFields"][] = "ApprovedBy";
$tdatafilelog[".importFields"][] = "HRApproval";
$tdatafilelog[".importFields"][] = "Checked";
$tdatafilelog[".importFields"][] = "Approved";
$tdatafilelog[".importFields"][] = "HRApproved";
$tdatafilelog[".importFields"][] = "HRApprovedDate";
$tdatafilelog[".importFields"][] = "Reason";
$tdatafilelog[".importFields"][] = "Locked";

$tdatafilelog[".printFields"] = array();
$tdatafilelog[".printFields"][] = "Locked";
$tdatafilelog[".printFields"][] = "TransID2";
$tdatafilelog[".printFields"][] = "EmployeeID";
$tdatafilelog[".printFields"][] = "log_time";
$tdatafilelog[".printFields"][] = "Reason";
$tdatafilelog[".printFields"][] = "ClockType";
$tdatafilelog[".printFields"][] = "data";
$tdatafilelog[".printFields"][] = "MLogID";
$tdatafilelog[".printFields"][] = "MLogDate";
$tdatafilelog[".printFields"][] = "CheckedBy";
$tdatafilelog[".printFields"][] = "Checked";
$tdatafilelog[".printFields"][] = "ApprovedBy";
$tdatafilelog[".printFields"][] = "Approved";
$tdatafilelog[".printFields"][] = "HRApproval";
$tdatafilelog[".printFields"][] = "HRApproved";
$tdatafilelog[".printFields"][] = "HRApprovedDate";


//	log_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "log_time";
	$fdata["GoodName"] = "log_time";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog","log_time");
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




	$tdatafilelog["log_time"] = $fdata;
//	data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "data";
	$fdata["GoodName"] = "data";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog","data");
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




	$tdatafilelog["data"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog","EmployeeID");
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




	$tdatafilelog["EmployeeID"] = $fdata;
//	TransID2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TransID2";
	$fdata["GoodName"] = "TransID2";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog","TransID2");
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




	$tdatafilelog["TransID2"] = $fdata;
//	MLogID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MLogID";
	$fdata["GoodName"] = "MLogID";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog","MLogID");
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




	$tdatafilelog["MLogID"] = $fdata;
//	MLogDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "MLogDate";
	$fdata["GoodName"] = "MLogDate";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog","MLogDate");
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




	$tdatafilelog["MLogDate"] = $fdata;
//	ClockType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ClockType";
	$fdata["GoodName"] = "ClockType";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog","ClockType");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
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








	$tdatafilelog["ClockType"] = $fdata;
//	CheckedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CheckedBy";
	$fdata["GoodName"] = "CheckedBy";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog","CheckedBy");
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




	$tdatafilelog["CheckedBy"] = $fdata;
//	ApprovedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ApprovedBy";
	$fdata["GoodName"] = "ApprovedBy";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog","ApprovedBy");
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




	$tdatafilelog["ApprovedBy"] = $fdata;
//	HRApproval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "HRApproval";
	$fdata["GoodName"] = "HRApproval";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog","HRApproval");
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




	$tdatafilelog["HRApproval"] = $fdata;
//	Checked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Checked";
	$fdata["GoodName"] = "Checked";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog","Checked");
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




	$tdatafilelog["Checked"] = $fdata;
//	Approved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Approved";
	$fdata["GoodName"] = "Approved";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog","Approved");
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




	$tdatafilelog["Approved"] = $fdata;
//	HRApproved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "HRApproved";
	$fdata["GoodName"] = "HRApproved";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog","HRApproved");
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




	$tdatafilelog["HRApproved"] = $fdata;
//	HRApprovedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "HRApprovedDate";
	$fdata["GoodName"] = "HRApprovedDate";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog","HRApprovedDate");
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




	$tdatafilelog["HRApprovedDate"] = $fdata;
//	Reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Reason";
	$fdata["GoodName"] = "Reason";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog","Reason");
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




	$tdatafilelog["Reason"] = $fdata;
//	Locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Locked";
	$fdata["GoodName"] = "Locked";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog","Locked");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

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




	$tdatafilelog["Locked"] = $fdata;


$tables_data["filelog"]=&$tdatafilelog;
$field_labels["filelog"] = &$fieldLabelsfilelog;
$fieldToolTips["filelog"] = &$fieldToolTipsfilelog;
$placeHolders["filelog"] = &$placeHoldersfilelog;
$page_titles["filelog"] = &$pageTitlesfilelog;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["filelog"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["filelog"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_filelog()
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
	"m_srcTableName" => "filelog"
));

$proto6["m_sql"] = "log_time";
$proto6["m_srcTableName"] = "filelog";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "data",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog"
));

$proto8["m_sql"] = "`data`";
$proto8["m_srcTableName"] = "filelog";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog"
));

$proto10["m_sql"] = "EmployeeID";
$proto10["m_srcTableName"] = "filelog";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TransID2",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog"
));

$proto12["m_sql"] = "TransID2";
$proto12["m_srcTableName"] = "filelog";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "MLogID",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog"
));

$proto14["m_sql"] = "MLogID";
$proto14["m_srcTableName"] = "filelog";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "MLogDate",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog"
));

$proto16["m_sql"] = "MLogDate";
$proto16["m_srcTableName"] = "filelog";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ClockType",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog"
));

$proto18["m_sql"] = "ClockType";
$proto18["m_srcTableName"] = "filelog";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CheckedBy",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog"
));

$proto20["m_sql"] = "CheckedBy";
$proto20["m_srcTableName"] = "filelog";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog"
));

$proto22["m_sql"] = "ApprovedBy";
$proto22["m_srcTableName"] = "filelog";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "HRApproval",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog"
));

$proto24["m_sql"] = "HRApproval";
$proto24["m_srcTableName"] = "filelog";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Checked",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog"
));

$proto26["m_sql"] = "Checked";
$proto26["m_srcTableName"] = "filelog";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Approved",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog"
));

$proto28["m_sql"] = "Approved";
$proto28["m_srcTableName"] = "filelog";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "HRApproved",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog"
));

$proto30["m_sql"] = "HRApproved";
$proto30["m_srcTableName"] = "filelog";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "HRApprovedDate",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog"
));

$proto32["m_sql"] = "HRApprovedDate";
$proto32["m_srcTableName"] = "filelog";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Reason",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog"
));

$proto34["m_sql"] = "Reason";
$proto34["m_srcTableName"] = "filelog";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Locked",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog"
));

$proto36["m_sql"] = "Locked";
$proto36["m_srcTableName"] = "filelog";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "filelog";
$proto39["m_srcTableName"] = "filelog";
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
$proto38["m_srcTableName"] = "filelog";
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
	"m_srcTableName" => "filelog"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 0;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="filelog";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_filelog = createSqlQuery_filelog();


	
		;

																

$tdatafilelog[".sqlquery"] = $queryData_filelog;

include_once(getabspath("include/filelog_events.php"));
$tableEvents["filelog"] = new eventclass_filelog;
$tdatafilelog[".hasEvents"] = true;

?>