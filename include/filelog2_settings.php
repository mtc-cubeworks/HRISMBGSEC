<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafilelog2 = array();
	$tdatafilelog2[".truncateText"] = true;
	$tdatafilelog2[".NumberOfChars"] = 80;
	$tdatafilelog2[".ShortName"] = "filelog2";
	$tdatafilelog2[".OwnerID"] = "ApprovedBy";
	$tdatafilelog2[".OriginalTable"] = "filelog";

//	field labels
$fieldLabelsfilelog2 = array();
$fieldToolTipsfilelog2 = array();
$pageTitlesfilelog2 = array();
$placeHoldersfilelog2 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfilelog2["English"] = array();
	$fieldToolTipsfilelog2["English"] = array();
	$placeHoldersfilelog2["English"] = array();
	$pageTitlesfilelog2["English"] = array();
	$fieldLabelsfilelog2["English"]["log_time"] = "Log Time";
	$fieldToolTipsfilelog2["English"]["log_time"] = "";
	$placeHoldersfilelog2["English"]["log_time"] = "";
	$fieldLabelsfilelog2["English"]["data"] = "Data";
	$fieldToolTipsfilelog2["English"]["data"] = "";
	$placeHoldersfilelog2["English"]["data"] = "";
	$fieldLabelsfilelog2["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipsfilelog2["English"]["EmployeeID"] = "";
	$placeHoldersfilelog2["English"]["EmployeeID"] = "";
	$fieldLabelsfilelog2["English"]["MLogID"] = "MLog ID";
	$fieldToolTipsfilelog2["English"]["MLogID"] = "";
	$placeHoldersfilelog2["English"]["MLogID"] = "";
	$fieldLabelsfilelog2["English"]["MLogDate"] = "MLog Date";
	$fieldToolTipsfilelog2["English"]["MLogDate"] = "";
	$placeHoldersfilelog2["English"]["MLogDate"] = "";
	$fieldLabelsfilelog2["English"]["ClockType"] = "Clock Type";
	$fieldToolTipsfilelog2["English"]["ClockType"] = "";
	$placeHoldersfilelog2["English"]["ClockType"] = "";
	$fieldLabelsfilelog2["English"]["CheckedBy"] = "Supervisor";
	$fieldToolTipsfilelog2["English"]["CheckedBy"] = "";
	$placeHoldersfilelog2["English"]["CheckedBy"] = "";
	$fieldLabelsfilelog2["English"]["ApprovedBy"] = "Manager";
	$fieldToolTipsfilelog2["English"]["ApprovedBy"] = "";
	$placeHoldersfilelog2["English"]["ApprovedBy"] = "";
	$fieldLabelsfilelog2["English"]["HRApproval"] = "HR";
	$fieldToolTipsfilelog2["English"]["HRApproval"] = "";
	$placeHoldersfilelog2["English"]["HRApproval"] = "";
	$fieldLabelsfilelog2["English"]["TransID2"] = "Trans ID2";
	$fieldToolTipsfilelog2["English"]["TransID2"] = "";
	$placeHoldersfilelog2["English"]["TransID2"] = "";
	$fieldLabelsfilelog2["English"]["Checked"] = "Supervisor Approval";
	$fieldToolTipsfilelog2["English"]["Checked"] = "";
	$placeHoldersfilelog2["English"]["Checked"] = "";
	$fieldLabelsfilelog2["English"]["Approved"] = "Manager Approval";
	$fieldToolTipsfilelog2["English"]["Approved"] = "";
	$placeHoldersfilelog2["English"]["Approved"] = "";
	$fieldLabelsfilelog2["English"]["HRApproved"] = "HR Approval";
	$fieldToolTipsfilelog2["English"]["HRApproved"] = "";
	$placeHoldersfilelog2["English"]["HRApproved"] = "";
	$fieldLabelsfilelog2["English"]["HRApprovedDate"] = "HR Approved Date";
	$fieldToolTipsfilelog2["English"]["HRApprovedDate"] = "";
	$placeHoldersfilelog2["English"]["HRApprovedDate"] = "";
	$fieldLabelsfilelog2["English"]["Reason"] = "Reason";
	$fieldToolTipsfilelog2["English"]["Reason"] = "";
	$placeHoldersfilelog2["English"]["Reason"] = "";
	$fieldLabelsfilelog2["English"]["Locked"] = "Locked";
	$fieldToolTipsfilelog2["English"]["Locked"] = "";
	$placeHoldersfilelog2["English"]["Locked"] = "";
	if (count($fieldToolTipsfilelog2["English"]))
		$tdatafilelog2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfilelog2[""] = array();
	$fieldToolTipsfilelog2[""] = array();
	$placeHoldersfilelog2[""] = array();
	$pageTitlesfilelog2[""] = array();
	$fieldLabelsfilelog2[""]["log_time"] = "Log Time";
	$fieldToolTipsfilelog2[""]["log_time"] = "";
	$placeHoldersfilelog2[""]["log_time"] = "";
	$fieldLabelsfilelog2[""]["data"] = "Data";
	$fieldToolTipsfilelog2[""]["data"] = "";
	$placeHoldersfilelog2[""]["data"] = "";
	$fieldLabelsfilelog2[""]["EmployeeID"] = "Employee ID";
	$fieldToolTipsfilelog2[""]["EmployeeID"] = "";
	$placeHoldersfilelog2[""]["EmployeeID"] = "";
	$fieldLabelsfilelog2[""]["MLogID"] = "MLog ID";
	$fieldToolTipsfilelog2[""]["MLogID"] = "";
	$placeHoldersfilelog2[""]["MLogID"] = "";
	$fieldLabelsfilelog2[""]["MLogDate"] = "MLog Date";
	$fieldToolTipsfilelog2[""]["MLogDate"] = "";
	$placeHoldersfilelog2[""]["MLogDate"] = "";
	$fieldLabelsfilelog2[""]["ClockType"] = "Clock Type";
	$fieldToolTipsfilelog2[""]["ClockType"] = "";
	$placeHoldersfilelog2[""]["ClockType"] = "";
	$fieldLabelsfilelog2[""]["CheckedBy"] = "Checked By";
	$fieldToolTipsfilelog2[""]["CheckedBy"] = "";
	$placeHoldersfilelog2[""]["CheckedBy"] = "";
	$fieldLabelsfilelog2[""]["ApprovedBy"] = "Approved By";
	$fieldToolTipsfilelog2[""]["ApprovedBy"] = "";
	$placeHoldersfilelog2[""]["ApprovedBy"] = "";
	$fieldLabelsfilelog2[""]["HRApproval"] = "HRApproval";
	$fieldToolTipsfilelog2[""]["HRApproval"] = "";
	$placeHoldersfilelog2[""]["HRApproval"] = "";
	$fieldLabelsfilelog2[""]["TransID2"] = "Trans ID2";
	$fieldToolTipsfilelog2[""]["TransID2"] = "";
	$placeHoldersfilelog2[""]["TransID2"] = "";
	$fieldLabelsfilelog2[""]["Checked"] = "Checked";
	$fieldToolTipsfilelog2[""]["Checked"] = "";
	$placeHoldersfilelog2[""]["Checked"] = "";
	$fieldLabelsfilelog2[""]["Approved"] = "Approved";
	$fieldToolTipsfilelog2[""]["Approved"] = "";
	$placeHoldersfilelog2[""]["Approved"] = "";
	$fieldLabelsfilelog2[""]["HRApproved"] = "HRApproved";
	$fieldToolTipsfilelog2[""]["HRApproved"] = "";
	$placeHoldersfilelog2[""]["HRApproved"] = "";
	$fieldLabelsfilelog2[""]["HRApprovedDate"] = "HRApproved Date";
	$fieldToolTipsfilelog2[""]["HRApprovedDate"] = "";
	$placeHoldersfilelog2[""]["HRApprovedDate"] = "";
	$fieldLabelsfilelog2[""]["Reason"] = "Reason";
	$fieldToolTipsfilelog2[""]["Reason"] = "";
	$placeHoldersfilelog2[""]["Reason"] = "";
	$fieldLabelsfilelog2[""]["Locked"] = "Locked";
	$fieldToolTipsfilelog2[""]["Locked"] = "";
	$placeHoldersfilelog2[""]["Locked"] = "";
	if (count($fieldToolTipsfilelog2[""]))
		$tdatafilelog2[".isUseToolTips"] = true;
}


	$tdatafilelog2[".NCSearch"] = true;



$tdatafilelog2[".shortTableName"] = "filelog2";
$tdatafilelog2[".nSecOptions"] = 1;
$tdatafilelog2[".recsPerRowPrint"] = 1;
$tdatafilelog2[".mainTableOwnerID"] = "ApprovedBy";
$tdatafilelog2[".moveNext"] = 1;
$tdatafilelog2[".entityType"] = 1;

$tdatafilelog2[".strOriginalTableName"] = "filelog";

	



$tdatafilelog2[".showAddInPopup"] = false;

$tdatafilelog2[".showEditInPopup"] = false;

$tdatafilelog2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafilelog2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafilelog2[".fieldsForRegister"] = array();

$tdatafilelog2[".listAjax"] = false;

	$tdatafilelog2[".audit"] = false;

	$tdatafilelog2[".locking"] = false;

$tdatafilelog2[".edit"] = true;
$tdatafilelog2[".afterEditAction"] = 0;
$tdatafilelog2[".closePopupAfterEdit"] = 1;
$tdatafilelog2[".afterEditActionDetTable"] = "Detail tables not found!";


$tdatafilelog2[".list"] = true;



$tdatafilelog2[".reorderRecordsByHeader"] = true;


$tdatafilelog2[".exportFormatting"] = 2;
$tdatafilelog2[".exportDelimiter"] = ",";
		
$tdatafilelog2[".view"] = true;

$tdatafilelog2[".import"] = true;

$tdatafilelog2[".exportTo"] = true;

$tdatafilelog2[".printFriendly"] = true;

$tdatafilelog2[".delete"] = true;

$tdatafilelog2[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafilelog2[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafilelog2[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafilelog2[".searchSaving"] = false;
//

$tdatafilelog2[".showSearchPanel"] = true;
		$tdatafilelog2[".flexibleSearch"] = true;

$tdatafilelog2[".isUseAjaxSuggest"] = true;

$tdatafilelog2[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																														

$tdatafilelog2[".ajaxCodeSnippetAdded"] = false;

$tdatafilelog2[".buttonsAdded"] = false;

$tdatafilelog2[".addPageEvents"] = true;

// use timepicker for search panel
$tdatafilelog2[".isUseTimeForSearch"] = false;





$tdatafilelog2[".allSearchFields"] = array();
$tdatafilelog2[".filterFields"] = array();
$tdatafilelog2[".requiredSearchFields"] = array();

$tdatafilelog2[".allSearchFields"][] = "Locked";
	$tdatafilelog2[".allSearchFields"][] = "TransID2";
	$tdatafilelog2[".allSearchFields"][] = "EmployeeID";
	$tdatafilelog2[".allSearchFields"][] = "log_time";
	$tdatafilelog2[".allSearchFields"][] = "Reason";
	$tdatafilelog2[".allSearchFields"][] = "ClockType";
	$tdatafilelog2[".allSearchFields"][] = "data";
	$tdatafilelog2[".allSearchFields"][] = "MLogID";
	$tdatafilelog2[".allSearchFields"][] = "MLogDate";
	$tdatafilelog2[".allSearchFields"][] = "CheckedBy";
	$tdatafilelog2[".allSearchFields"][] = "Checked";
	$tdatafilelog2[".allSearchFields"][] = "ApprovedBy";
	$tdatafilelog2[".allSearchFields"][] = "Approved";
	$tdatafilelog2[".allSearchFields"][] = "HRApproval";
	$tdatafilelog2[".allSearchFields"][] = "HRApproved";
	$tdatafilelog2[".allSearchFields"][] = "HRApprovedDate";
	

$tdatafilelog2[".googleLikeFields"] = array();
$tdatafilelog2[".googleLikeFields"][] = "log_time";
$tdatafilelog2[".googleLikeFields"][] = "data";
$tdatafilelog2[".googleLikeFields"][] = "EmployeeID";
$tdatafilelog2[".googleLikeFields"][] = "TransID2";
$tdatafilelog2[".googleLikeFields"][] = "MLogID";
$tdatafilelog2[".googleLikeFields"][] = "MLogDate";
$tdatafilelog2[".googleLikeFields"][] = "ClockType";
$tdatafilelog2[".googleLikeFields"][] = "CheckedBy";
$tdatafilelog2[".googleLikeFields"][] = "ApprovedBy";
$tdatafilelog2[".googleLikeFields"][] = "HRApproval";
$tdatafilelog2[".googleLikeFields"][] = "Checked";
$tdatafilelog2[".googleLikeFields"][] = "Approved";
$tdatafilelog2[".googleLikeFields"][] = "HRApproved";
$tdatafilelog2[".googleLikeFields"][] = "HRApprovedDate";
$tdatafilelog2[".googleLikeFields"][] = "Reason";
$tdatafilelog2[".googleLikeFields"][] = "Locked";


$tdatafilelog2[".advSearchFields"] = array();
$tdatafilelog2[".advSearchFields"][] = "Locked";
$tdatafilelog2[".advSearchFields"][] = "TransID2";
$tdatafilelog2[".advSearchFields"][] = "EmployeeID";
$tdatafilelog2[".advSearchFields"][] = "log_time";
$tdatafilelog2[".advSearchFields"][] = "Reason";
$tdatafilelog2[".advSearchFields"][] = "ClockType";
$tdatafilelog2[".advSearchFields"][] = "data";
$tdatafilelog2[".advSearchFields"][] = "MLogID";
$tdatafilelog2[".advSearchFields"][] = "MLogDate";
$tdatafilelog2[".advSearchFields"][] = "CheckedBy";
$tdatafilelog2[".advSearchFields"][] = "Checked";
$tdatafilelog2[".advSearchFields"][] = "ApprovedBy";
$tdatafilelog2[".advSearchFields"][] = "Approved";
$tdatafilelog2[".advSearchFields"][] = "HRApproval";
$tdatafilelog2[".advSearchFields"][] = "HRApproved";
$tdatafilelog2[".advSearchFields"][] = "HRApprovedDate";

$tdatafilelog2[".tableType"] = "list";

$tdatafilelog2[".printerPageOrientation"] = 0;
$tdatafilelog2[".nPrinterPageScale"] = 100;

$tdatafilelog2[".nPrinterSplitRecords"] = 40;

$tdatafilelog2[".nPrinterPDFSplitRecords"] = 40;



$tdatafilelog2[".geocodingEnabled"] = false;





$tdatafilelog2[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafilelog2[".pageSize"] = 20;

$tdatafilelog2[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY TransID2 DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafilelog2[".strOrderBy"] = $tstrOrderBy;

$tdatafilelog2[".orderindexes"] = array();
	$tdatafilelog2[".orderindexes"][] = array(4, (0 ? "ASC" : "DESC"), "TransID2");


$tdatafilelog2[".sqlHead"] = "SELECT log_time,  `data`,  EmployeeID,  TransID2,  MLogID,  MLogDate,  ClockType,  CheckedBy,  ApprovedBy,  HRApproval,  Checked,  Approved,  HRApproved,  HRApprovedDate,  Reason,  Locked";
$tdatafilelog2[".sqlFrom"] = "FROM filelog";
$tdatafilelog2[".sqlWhereExpr"] = "";
$tdatafilelog2[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafilelog2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafilelog2[".arrGroupsPerPage"] = $arrGPP;

$tdatafilelog2[".highlightSearchResults"] = true;

$tableKeysfilelog2 = array();
$tableKeysfilelog2[] = "TransID2";
$tdatafilelog2[".Keys"] = $tableKeysfilelog2;

$tdatafilelog2[".listFields"] = array();
$tdatafilelog2[".listFields"][] = "Locked";
$tdatafilelog2[".listFields"][] = "TransID2";
$tdatafilelog2[".listFields"][] = "EmployeeID";
$tdatafilelog2[".listFields"][] = "log_time";
$tdatafilelog2[".listFields"][] = "Reason";
$tdatafilelog2[".listFields"][] = "ClockType";
$tdatafilelog2[".listFields"][] = "data";
$tdatafilelog2[".listFields"][] = "MLogID";
$tdatafilelog2[".listFields"][] = "MLogDate";
$tdatafilelog2[".listFields"][] = "CheckedBy";
$tdatafilelog2[".listFields"][] = "Checked";
$tdatafilelog2[".listFields"][] = "ApprovedBy";
$tdatafilelog2[".listFields"][] = "Approved";
$tdatafilelog2[".listFields"][] = "HRApproval";
$tdatafilelog2[".listFields"][] = "HRApproved";
$tdatafilelog2[".listFields"][] = "HRApprovedDate";

$tdatafilelog2[".hideMobileList"] = array();


$tdatafilelog2[".viewFields"] = array();
$tdatafilelog2[".viewFields"][] = "Locked";
$tdatafilelog2[".viewFields"][] = "TransID2";
$tdatafilelog2[".viewFields"][] = "EmployeeID";
$tdatafilelog2[".viewFields"][] = "log_time";
$tdatafilelog2[".viewFields"][] = "Reason";
$tdatafilelog2[".viewFields"][] = "ClockType";
$tdatafilelog2[".viewFields"][] = "data";
$tdatafilelog2[".viewFields"][] = "MLogID";
$tdatafilelog2[".viewFields"][] = "MLogDate";
$tdatafilelog2[".viewFields"][] = "CheckedBy";
$tdatafilelog2[".viewFields"][] = "Checked";
$tdatafilelog2[".viewFields"][] = "ApprovedBy";
$tdatafilelog2[".viewFields"][] = "Approved";
$tdatafilelog2[".viewFields"][] = "HRApproval";
$tdatafilelog2[".viewFields"][] = "HRApproved";
$tdatafilelog2[".viewFields"][] = "HRApprovedDate";

$tdatafilelog2[".addFields"] = array();

$tdatafilelog2[".masterListFields"] = array();
$tdatafilelog2[".masterListFields"][] = "Locked";
$tdatafilelog2[".masterListFields"][] = "TransID2";
$tdatafilelog2[".masterListFields"][] = "EmployeeID";
$tdatafilelog2[".masterListFields"][] = "log_time";
$tdatafilelog2[".masterListFields"][] = "Reason";
$tdatafilelog2[".masterListFields"][] = "ClockType";
$tdatafilelog2[".masterListFields"][] = "data";
$tdatafilelog2[".masterListFields"][] = "MLogID";
$tdatafilelog2[".masterListFields"][] = "MLogDate";
$tdatafilelog2[".masterListFields"][] = "CheckedBy";
$tdatafilelog2[".masterListFields"][] = "Checked";
$tdatafilelog2[".masterListFields"][] = "ApprovedBy";
$tdatafilelog2[".masterListFields"][] = "Approved";
$tdatafilelog2[".masterListFields"][] = "HRApproval";
$tdatafilelog2[".masterListFields"][] = "HRApproved";
$tdatafilelog2[".masterListFields"][] = "HRApprovedDate";

$tdatafilelog2[".inlineAddFields"] = array();

$tdatafilelog2[".editFields"] = array();
$tdatafilelog2[".editFields"][] = "Locked";
$tdatafilelog2[".editFields"][] = "EmployeeID";
$tdatafilelog2[".editFields"][] = "log_time";
$tdatafilelog2[".editFields"][] = "Reason";
$tdatafilelog2[".editFields"][] = "ClockType";
$tdatafilelog2[".editFields"][] = "data";
$tdatafilelog2[".editFields"][] = "MLogID";
$tdatafilelog2[".editFields"][] = "MLogDate";
$tdatafilelog2[".editFields"][] = "CheckedBy";
$tdatafilelog2[".editFields"][] = "Checked";
$tdatafilelog2[".editFields"][] = "ApprovedBy";
$tdatafilelog2[".editFields"][] = "Approved";
$tdatafilelog2[".editFields"][] = "HRApproval";
$tdatafilelog2[".editFields"][] = "HRApproved";
$tdatafilelog2[".editFields"][] = "HRApprovedDate";

$tdatafilelog2[".inlineEditFields"] = array();

$tdatafilelog2[".updateSelectedFields"] = array();
$tdatafilelog2[".updateSelectedFields"][] = "Locked";
$tdatafilelog2[".updateSelectedFields"][] = "EmployeeID";
$tdatafilelog2[".updateSelectedFields"][] = "log_time";
$tdatafilelog2[".updateSelectedFields"][] = "Reason";
$tdatafilelog2[".updateSelectedFields"][] = "ClockType";
$tdatafilelog2[".updateSelectedFields"][] = "data";
$tdatafilelog2[".updateSelectedFields"][] = "MLogID";
$tdatafilelog2[".updateSelectedFields"][] = "MLogDate";
$tdatafilelog2[".updateSelectedFields"][] = "CheckedBy";
$tdatafilelog2[".updateSelectedFields"][] = "Checked";
$tdatafilelog2[".updateSelectedFields"][] = "ApprovedBy";
$tdatafilelog2[".updateSelectedFields"][] = "Approved";
$tdatafilelog2[".updateSelectedFields"][] = "HRApproval";
$tdatafilelog2[".updateSelectedFields"][] = "HRApproved";
$tdatafilelog2[".updateSelectedFields"][] = "HRApprovedDate";


$tdatafilelog2[".exportFields"] = array();
$tdatafilelog2[".exportFields"][] = "Locked";
$tdatafilelog2[".exportFields"][] = "TransID2";
$tdatafilelog2[".exportFields"][] = "EmployeeID";
$tdatafilelog2[".exportFields"][] = "log_time";
$tdatafilelog2[".exportFields"][] = "Reason";
$tdatafilelog2[".exportFields"][] = "ClockType";
$tdatafilelog2[".exportFields"][] = "data";
$tdatafilelog2[".exportFields"][] = "MLogID";
$tdatafilelog2[".exportFields"][] = "MLogDate";
$tdatafilelog2[".exportFields"][] = "CheckedBy";
$tdatafilelog2[".exportFields"][] = "Checked";
$tdatafilelog2[".exportFields"][] = "ApprovedBy";
$tdatafilelog2[".exportFields"][] = "Approved";
$tdatafilelog2[".exportFields"][] = "HRApproval";
$tdatafilelog2[".exportFields"][] = "HRApproved";
$tdatafilelog2[".exportFields"][] = "HRApprovedDate";

$tdatafilelog2[".importFields"] = array();
$tdatafilelog2[".importFields"][] = "log_time";
$tdatafilelog2[".importFields"][] = "data";
$tdatafilelog2[".importFields"][] = "EmployeeID";
$tdatafilelog2[".importFields"][] = "TransID2";
$tdatafilelog2[".importFields"][] = "MLogID";
$tdatafilelog2[".importFields"][] = "MLogDate";
$tdatafilelog2[".importFields"][] = "ClockType";
$tdatafilelog2[".importFields"][] = "CheckedBy";
$tdatafilelog2[".importFields"][] = "ApprovedBy";
$tdatafilelog2[".importFields"][] = "HRApproval";
$tdatafilelog2[".importFields"][] = "Checked";
$tdatafilelog2[".importFields"][] = "Approved";
$tdatafilelog2[".importFields"][] = "HRApproved";
$tdatafilelog2[".importFields"][] = "HRApprovedDate";
$tdatafilelog2[".importFields"][] = "Reason";
$tdatafilelog2[".importFields"][] = "Locked";

$tdatafilelog2[".printFields"] = array();
$tdatafilelog2[".printFields"][] = "Locked";
$tdatafilelog2[".printFields"][] = "TransID2";
$tdatafilelog2[".printFields"][] = "EmployeeID";
$tdatafilelog2[".printFields"][] = "log_time";
$tdatafilelog2[".printFields"][] = "Reason";
$tdatafilelog2[".printFields"][] = "ClockType";
$tdatafilelog2[".printFields"][] = "data";
$tdatafilelog2[".printFields"][] = "MLogID";
$tdatafilelog2[".printFields"][] = "MLogDate";
$tdatafilelog2[".printFields"][] = "CheckedBy";
$tdatafilelog2[".printFields"][] = "Checked";
$tdatafilelog2[".printFields"][] = "ApprovedBy";
$tdatafilelog2[".printFields"][] = "Approved";
$tdatafilelog2[".printFields"][] = "HRApproval";
$tdatafilelog2[".printFields"][] = "HRApproved";
$tdatafilelog2[".printFields"][] = "HRApprovedDate";


//	log_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "log_time";
	$fdata["GoodName"] = "log_time";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog2","log_time");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatafilelog2["log_time"] = $fdata;
//	data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "data";
	$fdata["GoodName"] = "data";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog2","data");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatafilelog2["data"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog2","EmployeeID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatafilelog2["EmployeeID"] = $fdata;
//	TransID2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TransID2";
	$fdata["GoodName"] = "TransID2";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog2","TransID2");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatafilelog2["TransID2"] = $fdata;
//	MLogID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MLogID";
	$fdata["GoodName"] = "MLogID";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog2","MLogID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatafilelog2["MLogID"] = $fdata;
//	MLogDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "MLogDate";
	$fdata["GoodName"] = "MLogDate";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog2","MLogDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatafilelog2["MLogDate"] = $fdata;
//	ClockType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ClockType";
	$fdata["GoodName"] = "ClockType";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog2","ClockType");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatafilelog2["ClockType"] = $fdata;
//	CheckedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CheckedBy";
	$fdata["GoodName"] = "CheckedBy";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog2","CheckedBy");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatafilelog2["CheckedBy"] = $fdata;
//	ApprovedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ApprovedBy";
	$fdata["GoodName"] = "ApprovedBy";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog2","ApprovedBy");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatafilelog2["ApprovedBy"] = $fdata;
//	HRApproval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "HRApproval";
	$fdata["GoodName"] = "HRApproval";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog2","HRApproval");
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




	$tdatafilelog2["HRApproval"] = $fdata;
//	Checked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Checked";
	$fdata["GoodName"] = "Checked";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog2","Checked");
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




	$tdatafilelog2["Checked"] = $fdata;
//	Approved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Approved";
	$fdata["GoodName"] = "Approved";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog2","Approved");
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




	$tdatafilelog2["Approved"] = $fdata;
//	HRApproved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "HRApproved";
	$fdata["GoodName"] = "HRApproved";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog2","HRApproved");
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




	$tdatafilelog2["HRApproved"] = $fdata;
//	HRApprovedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "HRApprovedDate";
	$fdata["GoodName"] = "HRApprovedDate";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog2","HRApprovedDate");
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




	$tdatafilelog2["HRApprovedDate"] = $fdata;
//	Reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Reason";
	$fdata["GoodName"] = "Reason";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog2","Reason");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatafilelog2["Reason"] = $fdata;
//	Locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Locked";
	$fdata["GoodName"] = "Locked";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog2","Locked");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatafilelog2["Locked"] = $fdata;


$tables_data["filelog2"]=&$tdatafilelog2;
$field_labels["filelog2"] = &$fieldLabelsfilelog2;
$fieldToolTips["filelog2"] = &$fieldToolTipsfilelog2;
$placeHolders["filelog2"] = &$placeHoldersfilelog2;
$page_titles["filelog2"] = &$pageTitlesfilelog2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["filelog2"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["filelog2"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_filelog2()
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
	"m_srcTableName" => "filelog2"
));

$proto6["m_sql"] = "log_time";
$proto6["m_srcTableName"] = "filelog2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "data",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog2"
));

$proto8["m_sql"] = "`data`";
$proto8["m_srcTableName"] = "filelog2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog2"
));

$proto10["m_sql"] = "EmployeeID";
$proto10["m_srcTableName"] = "filelog2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TransID2",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog2"
));

$proto12["m_sql"] = "TransID2";
$proto12["m_srcTableName"] = "filelog2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "MLogID",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog2"
));

$proto14["m_sql"] = "MLogID";
$proto14["m_srcTableName"] = "filelog2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "MLogDate",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog2"
));

$proto16["m_sql"] = "MLogDate";
$proto16["m_srcTableName"] = "filelog2";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ClockType",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog2"
));

$proto18["m_sql"] = "ClockType";
$proto18["m_srcTableName"] = "filelog2";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CheckedBy",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog2"
));

$proto20["m_sql"] = "CheckedBy";
$proto20["m_srcTableName"] = "filelog2";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog2"
));

$proto22["m_sql"] = "ApprovedBy";
$proto22["m_srcTableName"] = "filelog2";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "HRApproval",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog2"
));

$proto24["m_sql"] = "HRApproval";
$proto24["m_srcTableName"] = "filelog2";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Checked",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog2"
));

$proto26["m_sql"] = "Checked";
$proto26["m_srcTableName"] = "filelog2";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Approved",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog2"
));

$proto28["m_sql"] = "Approved";
$proto28["m_srcTableName"] = "filelog2";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "HRApproved",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog2"
));

$proto30["m_sql"] = "HRApproved";
$proto30["m_srcTableName"] = "filelog2";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "HRApprovedDate",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog2"
));

$proto32["m_sql"] = "HRApprovedDate";
$proto32["m_srcTableName"] = "filelog2";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Reason",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog2"
));

$proto34["m_sql"] = "Reason";
$proto34["m_srcTableName"] = "filelog2";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Locked",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog2"
));

$proto36["m_sql"] = "Locked";
$proto36["m_srcTableName"] = "filelog2";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "filelog";
$proto39["m_srcTableName"] = "filelog2";
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
$proto38["m_srcTableName"] = "filelog2";
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
	"m_srcTableName" => "filelog2"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 0;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="filelog2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_filelog2 = createSqlQuery_filelog2();


	
		;

																

$tdatafilelog2[".sqlquery"] = $queryData_filelog2;

include_once(getabspath("include/filelog2_events.php"));
$tableEvents["filelog2"] = new eventclass_filelog2;
$tdatafilelog2[".hasEvents"] = true;

?>