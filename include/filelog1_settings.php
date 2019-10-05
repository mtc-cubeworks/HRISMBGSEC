<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafilelog1 = array();
	$tdatafilelog1[".truncateText"] = true;
	$tdatafilelog1[".NumberOfChars"] = 80;
	$tdatafilelog1[".ShortName"] = "filelog1";
	$tdatafilelog1[".OwnerID"] = "CheckedBy";
	$tdatafilelog1[".OriginalTable"] = "filelog";

//	field labels
$fieldLabelsfilelog1 = array();
$fieldToolTipsfilelog1 = array();
$pageTitlesfilelog1 = array();
$placeHoldersfilelog1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfilelog1["English"] = array();
	$fieldToolTipsfilelog1["English"] = array();
	$placeHoldersfilelog1["English"] = array();
	$pageTitlesfilelog1["English"] = array();
	$fieldLabelsfilelog1["English"]["log_time"] = "Log Time";
	$fieldToolTipsfilelog1["English"]["log_time"] = "";
	$placeHoldersfilelog1["English"]["log_time"] = "";
	$fieldLabelsfilelog1["English"]["data"] = "Data";
	$fieldToolTipsfilelog1["English"]["data"] = "";
	$placeHoldersfilelog1["English"]["data"] = "";
	$fieldLabelsfilelog1["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipsfilelog1["English"]["EmployeeID"] = "";
	$placeHoldersfilelog1["English"]["EmployeeID"] = "";
	$fieldLabelsfilelog1["English"]["MLogID"] = "MLog ID";
	$fieldToolTipsfilelog1["English"]["MLogID"] = "";
	$placeHoldersfilelog1["English"]["MLogID"] = "";
	$fieldLabelsfilelog1["English"]["MLogDate"] = "MLog Date";
	$fieldToolTipsfilelog1["English"]["MLogDate"] = "";
	$placeHoldersfilelog1["English"]["MLogDate"] = "";
	$fieldLabelsfilelog1["English"]["ClockType"] = "Clock Type";
	$fieldToolTipsfilelog1["English"]["ClockType"] = "";
	$placeHoldersfilelog1["English"]["ClockType"] = "";
	$fieldLabelsfilelog1["English"]["CheckedBy"] = "Supervisor";
	$fieldToolTipsfilelog1["English"]["CheckedBy"] = "";
	$placeHoldersfilelog1["English"]["CheckedBy"] = "";
	$fieldLabelsfilelog1["English"]["ApprovedBy"] = "Manager";
	$fieldToolTipsfilelog1["English"]["ApprovedBy"] = "";
	$placeHoldersfilelog1["English"]["ApprovedBy"] = "";
	$fieldLabelsfilelog1["English"]["HRApproval"] = "HR";
	$fieldToolTipsfilelog1["English"]["HRApproval"] = "";
	$placeHoldersfilelog1["English"]["HRApproval"] = "";
	$fieldLabelsfilelog1["English"]["TransID2"] = "Trans ID2";
	$fieldToolTipsfilelog1["English"]["TransID2"] = "";
	$placeHoldersfilelog1["English"]["TransID2"] = "";
	$fieldLabelsfilelog1["English"]["Checked"] = "Supervisor Approval";
	$fieldToolTipsfilelog1["English"]["Checked"] = "";
	$placeHoldersfilelog1["English"]["Checked"] = "";
	$fieldLabelsfilelog1["English"]["Approved"] = "Manager Approval";
	$fieldToolTipsfilelog1["English"]["Approved"] = "";
	$placeHoldersfilelog1["English"]["Approved"] = "";
	$fieldLabelsfilelog1["English"]["HRApproved"] = "HR Approval";
	$fieldToolTipsfilelog1["English"]["HRApproved"] = "";
	$placeHoldersfilelog1["English"]["HRApproved"] = "";
	$fieldLabelsfilelog1["English"]["HRApprovedDate"] = "HR Approved Date";
	$fieldToolTipsfilelog1["English"]["HRApprovedDate"] = "";
	$placeHoldersfilelog1["English"]["HRApprovedDate"] = "";
	$fieldLabelsfilelog1["English"]["Reason"] = "Reason";
	$fieldToolTipsfilelog1["English"]["Reason"] = "";
	$placeHoldersfilelog1["English"]["Reason"] = "";
	$fieldLabelsfilelog1["English"]["Locked"] = "Locked";
	$fieldToolTipsfilelog1["English"]["Locked"] = "";
	$placeHoldersfilelog1["English"]["Locked"] = "";
	if (count($fieldToolTipsfilelog1["English"]))
		$tdatafilelog1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfilelog1[""] = array();
	$fieldToolTipsfilelog1[""] = array();
	$placeHoldersfilelog1[""] = array();
	$pageTitlesfilelog1[""] = array();
	$fieldLabelsfilelog1[""]["log_time"] = "Log Time";
	$fieldToolTipsfilelog1[""]["log_time"] = "";
	$placeHoldersfilelog1[""]["log_time"] = "";
	$fieldLabelsfilelog1[""]["data"] = "Data";
	$fieldToolTipsfilelog1[""]["data"] = "";
	$placeHoldersfilelog1[""]["data"] = "";
	$fieldLabelsfilelog1[""]["EmployeeID"] = "Employee ID";
	$fieldToolTipsfilelog1[""]["EmployeeID"] = "";
	$placeHoldersfilelog1[""]["EmployeeID"] = "";
	$fieldLabelsfilelog1[""]["MLogID"] = "MLog ID";
	$fieldToolTipsfilelog1[""]["MLogID"] = "";
	$placeHoldersfilelog1[""]["MLogID"] = "";
	$fieldLabelsfilelog1[""]["MLogDate"] = "MLog Date";
	$fieldToolTipsfilelog1[""]["MLogDate"] = "";
	$placeHoldersfilelog1[""]["MLogDate"] = "";
	$fieldLabelsfilelog1[""]["ClockType"] = "Clock Type";
	$fieldToolTipsfilelog1[""]["ClockType"] = "";
	$placeHoldersfilelog1[""]["ClockType"] = "";
	$fieldLabelsfilelog1[""]["CheckedBy"] = "Checked By";
	$fieldToolTipsfilelog1[""]["CheckedBy"] = "";
	$placeHoldersfilelog1[""]["CheckedBy"] = "";
	$fieldLabelsfilelog1[""]["ApprovedBy"] = "Approved By";
	$fieldToolTipsfilelog1[""]["ApprovedBy"] = "";
	$placeHoldersfilelog1[""]["ApprovedBy"] = "";
	$fieldLabelsfilelog1[""]["HRApproval"] = "HRApproval";
	$fieldToolTipsfilelog1[""]["HRApproval"] = "";
	$placeHoldersfilelog1[""]["HRApproval"] = "";
	$fieldLabelsfilelog1[""]["TransID2"] = "Trans ID2";
	$fieldToolTipsfilelog1[""]["TransID2"] = "";
	$placeHoldersfilelog1[""]["TransID2"] = "";
	$fieldLabelsfilelog1[""]["Checked"] = "Checked";
	$fieldToolTipsfilelog1[""]["Checked"] = "";
	$placeHoldersfilelog1[""]["Checked"] = "";
	$fieldLabelsfilelog1[""]["Approved"] = "Approved";
	$fieldToolTipsfilelog1[""]["Approved"] = "";
	$placeHoldersfilelog1[""]["Approved"] = "";
	$fieldLabelsfilelog1[""]["HRApproved"] = "HRApproved";
	$fieldToolTipsfilelog1[""]["HRApproved"] = "";
	$placeHoldersfilelog1[""]["HRApproved"] = "";
	$fieldLabelsfilelog1[""]["HRApprovedDate"] = "HRApproved Date";
	$fieldToolTipsfilelog1[""]["HRApprovedDate"] = "";
	$placeHoldersfilelog1[""]["HRApprovedDate"] = "";
	$fieldLabelsfilelog1[""]["Reason"] = "Reason";
	$fieldToolTipsfilelog1[""]["Reason"] = "";
	$placeHoldersfilelog1[""]["Reason"] = "";
	$fieldLabelsfilelog1[""]["Locked"] = "Locked";
	$fieldToolTipsfilelog1[""]["Locked"] = "";
	$placeHoldersfilelog1[""]["Locked"] = "";
	if (count($fieldToolTipsfilelog1[""]))
		$tdatafilelog1[".isUseToolTips"] = true;
}


	$tdatafilelog1[".NCSearch"] = true;



$tdatafilelog1[".shortTableName"] = "filelog1";
$tdatafilelog1[".nSecOptions"] = 1;
$tdatafilelog1[".recsPerRowPrint"] = 1;
$tdatafilelog1[".mainTableOwnerID"] = "CheckedBy";
$tdatafilelog1[".moveNext"] = 1;
$tdatafilelog1[".entityType"] = 1;

$tdatafilelog1[".strOriginalTableName"] = "filelog";

	



$tdatafilelog1[".showAddInPopup"] = false;

$tdatafilelog1[".showEditInPopup"] = false;

$tdatafilelog1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafilelog1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafilelog1[".fieldsForRegister"] = array();

$tdatafilelog1[".listAjax"] = false;

	$tdatafilelog1[".audit"] = false;

	$tdatafilelog1[".locking"] = false;

$tdatafilelog1[".edit"] = true;
$tdatafilelog1[".afterEditAction"] = 0;
$tdatafilelog1[".closePopupAfterEdit"] = 1;
$tdatafilelog1[".afterEditActionDetTable"] = "Detail tables not found!";


$tdatafilelog1[".list"] = true;



$tdatafilelog1[".reorderRecordsByHeader"] = true;


$tdatafilelog1[".exportFormatting"] = 2;
$tdatafilelog1[".exportDelimiter"] = ",";
		
$tdatafilelog1[".view"] = true;

$tdatafilelog1[".import"] = true;

$tdatafilelog1[".exportTo"] = true;

$tdatafilelog1[".printFriendly"] = true;

$tdatafilelog1[".delete"] = true;

$tdatafilelog1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafilelog1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafilelog1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafilelog1[".searchSaving"] = false;
//

$tdatafilelog1[".showSearchPanel"] = true;
		$tdatafilelog1[".flexibleSearch"] = true;

$tdatafilelog1[".isUseAjaxSuggest"] = true;

$tdatafilelog1[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																					

$tdatafilelog1[".ajaxCodeSnippetAdded"] = false;

$tdatafilelog1[".buttonsAdded"] = false;

$tdatafilelog1[".addPageEvents"] = true;

// use timepicker for search panel
$tdatafilelog1[".isUseTimeForSearch"] = false;





$tdatafilelog1[".allSearchFields"] = array();
$tdatafilelog1[".filterFields"] = array();
$tdatafilelog1[".requiredSearchFields"] = array();

$tdatafilelog1[".allSearchFields"][] = "Locked";
	$tdatafilelog1[".allSearchFields"][] = "TransID2";
	$tdatafilelog1[".allSearchFields"][] = "EmployeeID";
	$tdatafilelog1[".allSearchFields"][] = "log_time";
	$tdatafilelog1[".allSearchFields"][] = "Reason";
	$tdatafilelog1[".allSearchFields"][] = "data";
	$tdatafilelog1[".allSearchFields"][] = "MLogID";
	$tdatafilelog1[".allSearchFields"][] = "MLogDate";
	$tdatafilelog1[".allSearchFields"][] = "CheckedBy";
	$tdatafilelog1[".allSearchFields"][] = "Checked";
	$tdatafilelog1[".allSearchFields"][] = "ApprovedBy";
	$tdatafilelog1[".allSearchFields"][] = "Approved";
	$tdatafilelog1[".allSearchFields"][] = "HRApproval";
	$tdatafilelog1[".allSearchFields"][] = "HRApproved";
	$tdatafilelog1[".allSearchFields"][] = "HRApprovedDate";
	

$tdatafilelog1[".googleLikeFields"] = array();
$tdatafilelog1[".googleLikeFields"][] = "log_time";
$tdatafilelog1[".googleLikeFields"][] = "data";
$tdatafilelog1[".googleLikeFields"][] = "EmployeeID";
$tdatafilelog1[".googleLikeFields"][] = "TransID2";
$tdatafilelog1[".googleLikeFields"][] = "MLogID";
$tdatafilelog1[".googleLikeFields"][] = "MLogDate";
$tdatafilelog1[".googleLikeFields"][] = "ClockType";
$tdatafilelog1[".googleLikeFields"][] = "CheckedBy";
$tdatafilelog1[".googleLikeFields"][] = "ApprovedBy";
$tdatafilelog1[".googleLikeFields"][] = "HRApproval";
$tdatafilelog1[".googleLikeFields"][] = "Checked";
$tdatafilelog1[".googleLikeFields"][] = "Approved";
$tdatafilelog1[".googleLikeFields"][] = "HRApproved";
$tdatafilelog1[".googleLikeFields"][] = "HRApprovedDate";
$tdatafilelog1[".googleLikeFields"][] = "Reason";
$tdatafilelog1[".googleLikeFields"][] = "Locked";


$tdatafilelog1[".advSearchFields"] = array();
$tdatafilelog1[".advSearchFields"][] = "Locked";
$tdatafilelog1[".advSearchFields"][] = "TransID2";
$tdatafilelog1[".advSearchFields"][] = "EmployeeID";
$tdatafilelog1[".advSearchFields"][] = "log_time";
$tdatafilelog1[".advSearchFields"][] = "Reason";
$tdatafilelog1[".advSearchFields"][] = "data";
$tdatafilelog1[".advSearchFields"][] = "MLogID";
$tdatafilelog1[".advSearchFields"][] = "MLogDate";
$tdatafilelog1[".advSearchFields"][] = "CheckedBy";
$tdatafilelog1[".advSearchFields"][] = "Checked";
$tdatafilelog1[".advSearchFields"][] = "ApprovedBy";
$tdatafilelog1[".advSearchFields"][] = "Approved";
$tdatafilelog1[".advSearchFields"][] = "HRApproval";
$tdatafilelog1[".advSearchFields"][] = "HRApproved";
$tdatafilelog1[".advSearchFields"][] = "HRApprovedDate";

$tdatafilelog1[".tableType"] = "list";

$tdatafilelog1[".printerPageOrientation"] = 0;
$tdatafilelog1[".nPrinterPageScale"] = 100;

$tdatafilelog1[".nPrinterSplitRecords"] = 40;

$tdatafilelog1[".nPrinterPDFSplitRecords"] = 40;



$tdatafilelog1[".geocodingEnabled"] = false;





$tdatafilelog1[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafilelog1[".pageSize"] = 20;

$tdatafilelog1[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY TransID2 DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafilelog1[".strOrderBy"] = $tstrOrderBy;

$tdatafilelog1[".orderindexes"] = array();
	$tdatafilelog1[".orderindexes"][] = array(4, (0 ? "ASC" : "DESC"), "TransID2");


$tdatafilelog1[".sqlHead"] = "SELECT log_time,  `data`,  EmployeeID,  TransID2,  MLogID,  MLogDate,  ClockType,  CheckedBy,  ApprovedBy,  HRApproval,  Checked,  Approved,  HRApproved,  HRApprovedDate,  Reason,  Locked";
$tdatafilelog1[".sqlFrom"] = "FROM filelog";
$tdatafilelog1[".sqlWhereExpr"] = "";
$tdatafilelog1[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafilelog1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafilelog1[".arrGroupsPerPage"] = $arrGPP;

$tdatafilelog1[".highlightSearchResults"] = true;

$tableKeysfilelog1 = array();
$tableKeysfilelog1[] = "TransID2";
$tdatafilelog1[".Keys"] = $tableKeysfilelog1;

$tdatafilelog1[".listFields"] = array();
$tdatafilelog1[".listFields"][] = "Locked";
$tdatafilelog1[".listFields"][] = "TransID2";
$tdatafilelog1[".listFields"][] = "EmployeeID";
$tdatafilelog1[".listFields"][] = "log_time";
$tdatafilelog1[".listFields"][] = "Reason";
$tdatafilelog1[".listFields"][] = "ClockType";
$tdatafilelog1[".listFields"][] = "data";
$tdatafilelog1[".listFields"][] = "MLogID";
$tdatafilelog1[".listFields"][] = "MLogDate";
$tdatafilelog1[".listFields"][] = "CheckedBy";
$tdatafilelog1[".listFields"][] = "Checked";
$tdatafilelog1[".listFields"][] = "ApprovedBy";
$tdatafilelog1[".listFields"][] = "Approved";
$tdatafilelog1[".listFields"][] = "HRApproval";
$tdatafilelog1[".listFields"][] = "HRApproved";
$tdatafilelog1[".listFields"][] = "HRApprovedDate";

$tdatafilelog1[".hideMobileList"] = array();


$tdatafilelog1[".viewFields"] = array();
$tdatafilelog1[".viewFields"][] = "Locked";
$tdatafilelog1[".viewFields"][] = "TransID2";
$tdatafilelog1[".viewFields"][] = "EmployeeID";
$tdatafilelog1[".viewFields"][] = "log_time";
$tdatafilelog1[".viewFields"][] = "Reason";
$tdatafilelog1[".viewFields"][] = "ClockType";
$tdatafilelog1[".viewFields"][] = "data";
$tdatafilelog1[".viewFields"][] = "MLogID";
$tdatafilelog1[".viewFields"][] = "MLogDate";
$tdatafilelog1[".viewFields"][] = "CheckedBy";
$tdatafilelog1[".viewFields"][] = "Checked";
$tdatafilelog1[".viewFields"][] = "ApprovedBy";
$tdatafilelog1[".viewFields"][] = "Approved";
$tdatafilelog1[".viewFields"][] = "HRApproval";
$tdatafilelog1[".viewFields"][] = "HRApproved";
$tdatafilelog1[".viewFields"][] = "HRApprovedDate";

$tdatafilelog1[".addFields"] = array();

$tdatafilelog1[".masterListFields"] = array();
$tdatafilelog1[".masterListFields"][] = "Locked";
$tdatafilelog1[".masterListFields"][] = "TransID2";
$tdatafilelog1[".masterListFields"][] = "EmployeeID";
$tdatafilelog1[".masterListFields"][] = "log_time";
$tdatafilelog1[".masterListFields"][] = "Reason";
$tdatafilelog1[".masterListFields"][] = "ClockType";
$tdatafilelog1[".masterListFields"][] = "data";
$tdatafilelog1[".masterListFields"][] = "MLogID";
$tdatafilelog1[".masterListFields"][] = "MLogDate";
$tdatafilelog1[".masterListFields"][] = "CheckedBy";
$tdatafilelog1[".masterListFields"][] = "Checked";
$tdatafilelog1[".masterListFields"][] = "ApprovedBy";
$tdatafilelog1[".masterListFields"][] = "Approved";
$tdatafilelog1[".masterListFields"][] = "HRApproval";
$tdatafilelog1[".masterListFields"][] = "HRApproved";
$tdatafilelog1[".masterListFields"][] = "HRApprovedDate";

$tdatafilelog1[".inlineAddFields"] = array();

$tdatafilelog1[".editFields"] = array();
$tdatafilelog1[".editFields"][] = "Locked";
$tdatafilelog1[".editFields"][] = "EmployeeID";
$tdatafilelog1[".editFields"][] = "log_time";
$tdatafilelog1[".editFields"][] = "Reason";
$tdatafilelog1[".editFields"][] = "ClockType";
$tdatafilelog1[".editFields"][] = "data";
$tdatafilelog1[".editFields"][] = "MLogID";
$tdatafilelog1[".editFields"][] = "MLogDate";
$tdatafilelog1[".editFields"][] = "CheckedBy";
$tdatafilelog1[".editFields"][] = "Checked";
$tdatafilelog1[".editFields"][] = "ApprovedBy";
$tdatafilelog1[".editFields"][] = "Approved";
$tdatafilelog1[".editFields"][] = "HRApproval";
$tdatafilelog1[".editFields"][] = "HRApproved";
$tdatafilelog1[".editFields"][] = "HRApprovedDate";

$tdatafilelog1[".inlineEditFields"] = array();

$tdatafilelog1[".updateSelectedFields"] = array();
$tdatafilelog1[".updateSelectedFields"][] = "Locked";
$tdatafilelog1[".updateSelectedFields"][] = "EmployeeID";
$tdatafilelog1[".updateSelectedFields"][] = "log_time";
$tdatafilelog1[".updateSelectedFields"][] = "Reason";
$tdatafilelog1[".updateSelectedFields"][] = "ClockType";
$tdatafilelog1[".updateSelectedFields"][] = "data";
$tdatafilelog1[".updateSelectedFields"][] = "MLogID";
$tdatafilelog1[".updateSelectedFields"][] = "MLogDate";
$tdatafilelog1[".updateSelectedFields"][] = "CheckedBy";
$tdatafilelog1[".updateSelectedFields"][] = "Checked";
$tdatafilelog1[".updateSelectedFields"][] = "ApprovedBy";
$tdatafilelog1[".updateSelectedFields"][] = "Approved";
$tdatafilelog1[".updateSelectedFields"][] = "HRApproval";
$tdatafilelog1[".updateSelectedFields"][] = "HRApproved";
$tdatafilelog1[".updateSelectedFields"][] = "HRApprovedDate";


$tdatafilelog1[".exportFields"] = array();
$tdatafilelog1[".exportFields"][] = "Locked";
$tdatafilelog1[".exportFields"][] = "TransID2";
$tdatafilelog1[".exportFields"][] = "EmployeeID";
$tdatafilelog1[".exportFields"][] = "log_time";
$tdatafilelog1[".exportFields"][] = "Reason";
$tdatafilelog1[".exportFields"][] = "ClockType";
$tdatafilelog1[".exportFields"][] = "data";
$tdatafilelog1[".exportFields"][] = "MLogID";
$tdatafilelog1[".exportFields"][] = "MLogDate";
$tdatafilelog1[".exportFields"][] = "CheckedBy";
$tdatafilelog1[".exportFields"][] = "Checked";
$tdatafilelog1[".exportFields"][] = "ApprovedBy";
$tdatafilelog1[".exportFields"][] = "Approved";
$tdatafilelog1[".exportFields"][] = "HRApproval";
$tdatafilelog1[".exportFields"][] = "HRApproved";
$tdatafilelog1[".exportFields"][] = "HRApprovedDate";

$tdatafilelog1[".importFields"] = array();
$tdatafilelog1[".importFields"][] = "log_time";
$tdatafilelog1[".importFields"][] = "data";
$tdatafilelog1[".importFields"][] = "EmployeeID";
$tdatafilelog1[".importFields"][] = "TransID2";
$tdatafilelog1[".importFields"][] = "MLogID";
$tdatafilelog1[".importFields"][] = "MLogDate";
$tdatafilelog1[".importFields"][] = "ClockType";
$tdatafilelog1[".importFields"][] = "CheckedBy";
$tdatafilelog1[".importFields"][] = "ApprovedBy";
$tdatafilelog1[".importFields"][] = "HRApproval";
$tdatafilelog1[".importFields"][] = "Checked";
$tdatafilelog1[".importFields"][] = "Approved";
$tdatafilelog1[".importFields"][] = "HRApproved";
$tdatafilelog1[".importFields"][] = "HRApprovedDate";
$tdatafilelog1[".importFields"][] = "Reason";
$tdatafilelog1[".importFields"][] = "Locked";

$tdatafilelog1[".printFields"] = array();
$tdatafilelog1[".printFields"][] = "Locked";
$tdatafilelog1[".printFields"][] = "TransID2";
$tdatafilelog1[".printFields"][] = "EmployeeID";
$tdatafilelog1[".printFields"][] = "log_time";
$tdatafilelog1[".printFields"][] = "Reason";
$tdatafilelog1[".printFields"][] = "ClockType";
$tdatafilelog1[".printFields"][] = "data";
$tdatafilelog1[".printFields"][] = "MLogID";
$tdatafilelog1[".printFields"][] = "MLogDate";
$tdatafilelog1[".printFields"][] = "CheckedBy";
$tdatafilelog1[".printFields"][] = "Checked";
$tdatafilelog1[".printFields"][] = "ApprovedBy";
$tdatafilelog1[".printFields"][] = "Approved";
$tdatafilelog1[".printFields"][] = "HRApproval";
$tdatafilelog1[".printFields"][] = "HRApproved";
$tdatafilelog1[".printFields"][] = "HRApprovedDate";


//	log_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "log_time";
	$fdata["GoodName"] = "log_time";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog1","log_time");
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




	$tdatafilelog1["log_time"] = $fdata;
//	data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "data";
	$fdata["GoodName"] = "data";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog1","data");
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




	$tdatafilelog1["data"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog1","EmployeeID");
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




	$tdatafilelog1["EmployeeID"] = $fdata;
//	TransID2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TransID2";
	$fdata["GoodName"] = "TransID2";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog1","TransID2");
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




	$tdatafilelog1["TransID2"] = $fdata;
//	MLogID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MLogID";
	$fdata["GoodName"] = "MLogID";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog1","MLogID");
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




	$tdatafilelog1["MLogID"] = $fdata;
//	MLogDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "MLogDate";
	$fdata["GoodName"] = "MLogDate";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog1","MLogDate");
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




	$tdatafilelog1["MLogDate"] = $fdata;
//	ClockType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ClockType";
	$fdata["GoodName"] = "ClockType";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog1","ClockType");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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








	$tdatafilelog1["ClockType"] = $fdata;
//	CheckedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CheckedBy";
	$fdata["GoodName"] = "CheckedBy";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog1","CheckedBy");
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




	$tdatafilelog1["CheckedBy"] = $fdata;
//	ApprovedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ApprovedBy";
	$fdata["GoodName"] = "ApprovedBy";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog1","ApprovedBy");
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




	$tdatafilelog1["ApprovedBy"] = $fdata;
//	HRApproval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "HRApproval";
	$fdata["GoodName"] = "HRApproval";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog1","HRApproval");
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




	$tdatafilelog1["HRApproval"] = $fdata;
//	Checked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Checked";
	$fdata["GoodName"] = "Checked";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog1","Checked");
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




	$tdatafilelog1["Checked"] = $fdata;
//	Approved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Approved";
	$fdata["GoodName"] = "Approved";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog1","Approved");
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




	$tdatafilelog1["Approved"] = $fdata;
//	HRApproved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "HRApproved";
	$fdata["GoodName"] = "HRApproved";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog1","HRApproved");
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




	$tdatafilelog1["HRApproved"] = $fdata;
//	HRApprovedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "HRApprovedDate";
	$fdata["GoodName"] = "HRApprovedDate";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog1","HRApprovedDate");
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




	$tdatafilelog1["HRApprovedDate"] = $fdata;
//	Reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Reason";
	$fdata["GoodName"] = "Reason";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog1","Reason");
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




	$tdatafilelog1["Reason"] = $fdata;
//	Locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Locked";
	$fdata["GoodName"] = "Locked";
	$fdata["ownerTable"] = "filelog";
	$fdata["Label"] = GetFieldLabel("filelog1","Locked");
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




	$tdatafilelog1["Locked"] = $fdata;


$tables_data["filelog1"]=&$tdatafilelog1;
$field_labels["filelog1"] = &$fieldLabelsfilelog1;
$fieldToolTips["filelog1"] = &$fieldToolTipsfilelog1;
$placeHolders["filelog1"] = &$placeHoldersfilelog1;
$page_titles["filelog1"] = &$pageTitlesfilelog1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["filelog1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["filelog1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_filelog1()
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
	"m_srcTableName" => "filelog1"
));

$proto6["m_sql"] = "log_time";
$proto6["m_srcTableName"] = "filelog1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "data",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog1"
));

$proto8["m_sql"] = "`data`";
$proto8["m_srcTableName"] = "filelog1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog1"
));

$proto10["m_sql"] = "EmployeeID";
$proto10["m_srcTableName"] = "filelog1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TransID2",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog1"
));

$proto12["m_sql"] = "TransID2";
$proto12["m_srcTableName"] = "filelog1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "MLogID",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog1"
));

$proto14["m_sql"] = "MLogID";
$proto14["m_srcTableName"] = "filelog1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "MLogDate",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog1"
));

$proto16["m_sql"] = "MLogDate";
$proto16["m_srcTableName"] = "filelog1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ClockType",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog1"
));

$proto18["m_sql"] = "ClockType";
$proto18["m_srcTableName"] = "filelog1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CheckedBy",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog1"
));

$proto20["m_sql"] = "CheckedBy";
$proto20["m_srcTableName"] = "filelog1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog1"
));

$proto22["m_sql"] = "ApprovedBy";
$proto22["m_srcTableName"] = "filelog1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "HRApproval",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog1"
));

$proto24["m_sql"] = "HRApproval";
$proto24["m_srcTableName"] = "filelog1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Checked",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog1"
));

$proto26["m_sql"] = "Checked";
$proto26["m_srcTableName"] = "filelog1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Approved",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog1"
));

$proto28["m_sql"] = "Approved";
$proto28["m_srcTableName"] = "filelog1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "HRApproved",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog1"
));

$proto30["m_sql"] = "HRApproved";
$proto30["m_srcTableName"] = "filelog1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "HRApprovedDate",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog1"
));

$proto32["m_sql"] = "HRApprovedDate";
$proto32["m_srcTableName"] = "filelog1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Reason",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog1"
));

$proto34["m_sql"] = "Reason";
$proto34["m_srcTableName"] = "filelog1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Locked",
	"m_strTable" => "filelog",
	"m_srcTableName" => "filelog1"
));

$proto36["m_sql"] = "Locked";
$proto36["m_srcTableName"] = "filelog1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "filelog";
$proto39["m_srcTableName"] = "filelog1";
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
$proto38["m_srcTableName"] = "filelog1";
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
	"m_srcTableName" => "filelog1"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 0;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="filelog1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_filelog1 = createSqlQuery_filelog1();


	
		;

																

$tdatafilelog1[".sqlquery"] = $queryData_filelog1;

include_once(getabspath("include/filelog1_events.php"));
$tableEvents["filelog1"] = new eventclass_filelog1;
$tdatafilelog1[".hasEvents"] = true;

?>