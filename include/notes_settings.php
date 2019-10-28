<?php
require_once(getabspath("classes/cipherer.php"));




$tdatanotes = array();
	$tdatanotes[".truncateText"] = true;
	$tdatanotes[".NumberOfChars"] = 80;
	$tdatanotes[".ShortName"] = "notes";
	$tdatanotes[".OwnerID"] = "Encodedby";
	$tdatanotes[".OriginalTable"] = "notes";

//	field labels
$fieldLabelsnotes = array();
$fieldToolTipsnotes = array();
$pageTitlesnotes = array();
$placeHoldersnotes = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsnotes["English"] = array();
	$fieldToolTipsnotes["English"] = array();
	$placeHoldersnotes["English"] = array();
	$pageTitlesnotes["English"] = array();
	$fieldLabelsnotes["English"]["NID"] = "NID";
	$fieldToolTipsnotes["English"]["NID"] = "";
	$placeHoldersnotes["English"]["NID"] = "";
	$fieldLabelsnotes["English"]["CreatedDate"] = "Created Date";
	$fieldToolTipsnotes["English"]["CreatedDate"] = "";
	$placeHoldersnotes["English"]["CreatedDate"] = "";
	$fieldLabelsnotes["English"]["NoteType"] = "Note Type";
	$fieldToolTipsnotes["English"]["NoteType"] = "";
	$placeHoldersnotes["English"]["NoteType"] = "";
	$fieldLabelsnotes["English"]["StartDate"] = "Start Date";
	$fieldToolTipsnotes["English"]["StartDate"] = "";
	$placeHoldersnotes["English"]["StartDate"] = "";
	$fieldLabelsnotes["English"]["EndDate"] = "End Date";
	$fieldToolTipsnotes["English"]["EndDate"] = "Can be an Expiry Date";
	$placeHoldersnotes["English"]["EndDate"] = "";
	$fieldLabelsnotes["English"]["Remarks"] = "Remarks";
	$fieldToolTipsnotes["English"]["Remarks"] = "";
	$placeHoldersnotes["English"]["Remarks"] = "";
	$fieldLabelsnotes["English"]["Encodedby"] = "Encodedby";
	$fieldToolTipsnotes["English"]["Encodedby"] = "";
	$placeHoldersnotes["English"]["Encodedby"] = "";
	$fieldLabelsnotes["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipsnotes["English"]["EmployeeID"] = "";
	$placeHoldersnotes["English"]["EmployeeID"] = "";
	$fieldLabelsnotes["English"]["UploadFile"] = "Upload File";
	$fieldToolTipsnotes["English"]["UploadFile"] = "";
	$placeHoldersnotes["English"]["UploadFile"] = "";
	$fieldLabelsnotes["English"]["Status"] = "Status";
	$fieldToolTipsnotes["English"]["Status"] = "";
	$placeHoldersnotes["English"]["Status"] = "";
	$fieldLabelsnotes["English"]["NotifyDays"] = "Notify Days";
	$fieldToolTipsnotes["English"]["NotifyDays"] = "No. of Days to notify";
	$placeHoldersnotes["English"]["NotifyDays"] = "";
	$fieldLabelsnotes["English"]["NotifyDaysLeft"] = "Notify Days Left";
	$fieldToolTipsnotes["English"]["NotifyDaysLeft"] = "";
	$placeHoldersnotes["English"]["NotifyDaysLeft"] = "";
	$fieldLabelsnotes["English"]["DaysLeft"] = "Days Left";
	$fieldToolTipsnotes["English"]["DaysLeft"] = "";
	$placeHoldersnotes["English"]["DaysLeft"] = "";
	$fieldLabelsnotes["English"]["Closed"] = "Closed";
	$fieldToolTipsnotes["English"]["Closed"] = "Check to Stop Monitoring";
	$placeHoldersnotes["English"]["Closed"] = "";
	if (count($fieldToolTipsnotes["English"]))
		$tdatanotes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsnotes[""] = array();
	$fieldToolTipsnotes[""] = array();
	$placeHoldersnotes[""] = array();
	$pageTitlesnotes[""] = array();
	$fieldLabelsnotes[""]["NID"] = "NID";
	$fieldToolTipsnotes[""]["NID"] = "";
	$placeHoldersnotes[""]["NID"] = "";
	$fieldLabelsnotes[""]["CreatedDate"] = "Created Date";
	$fieldToolTipsnotes[""]["CreatedDate"] = "";
	$placeHoldersnotes[""]["CreatedDate"] = "";
	$fieldLabelsnotes[""]["NoteType"] = "Note Type";
	$fieldToolTipsnotes[""]["NoteType"] = "";
	$placeHoldersnotes[""]["NoteType"] = "";
	$fieldLabelsnotes[""]["StartDate"] = "Start Date";
	$fieldToolTipsnotes[""]["StartDate"] = "";
	$placeHoldersnotes[""]["StartDate"] = "";
	$fieldLabelsnotes[""]["EndDate"] = "End Date";
	$fieldToolTipsnotes[""]["EndDate"] = "";
	$placeHoldersnotes[""]["EndDate"] = "";
	$fieldLabelsnotes[""]["Remarks"] = "Remarks";
	$fieldToolTipsnotes[""]["Remarks"] = "";
	$placeHoldersnotes[""]["Remarks"] = "";
	$fieldLabelsnotes[""]["Encodedby"] = "Encodedby";
	$fieldToolTipsnotes[""]["Encodedby"] = "";
	$placeHoldersnotes[""]["Encodedby"] = "";
	$fieldLabelsnotes[""]["EmployeeID"] = "Employee ID";
	$fieldToolTipsnotes[""]["EmployeeID"] = "";
	$placeHoldersnotes[""]["EmployeeID"] = "";
	$fieldLabelsnotes[""]["UploadFile"] = "Upload File";
	$fieldToolTipsnotes[""]["UploadFile"] = "";
	$placeHoldersnotes[""]["UploadFile"] = "";
	$fieldLabelsnotes[""]["Status"] = "Status";
	$fieldToolTipsnotes[""]["Status"] = "";
	$placeHoldersnotes[""]["Status"] = "";
	$fieldLabelsnotes[""]["NotifyDays"] = "Notify Days";
	$fieldToolTipsnotes[""]["NotifyDays"] = "";
	$placeHoldersnotes[""]["NotifyDays"] = "";
	$fieldLabelsnotes[""]["NotifyDaysLeft"] = "Notify Days Left";
	$fieldToolTipsnotes[""]["NotifyDaysLeft"] = "";
	$placeHoldersnotes[""]["NotifyDaysLeft"] = "";
	$fieldLabelsnotes[""]["DaysLeft"] = "Days Left";
	$fieldToolTipsnotes[""]["DaysLeft"] = "";
	$placeHoldersnotes[""]["DaysLeft"] = "";
	$fieldLabelsnotes[""]["Closed"] = "Closed";
	$fieldToolTipsnotes[""]["Closed"] = "";
	$placeHoldersnotes[""]["Closed"] = "";
	if (count($fieldToolTipsnotes[""]))
		$tdatanotes[".isUseToolTips"] = true;
}


	$tdatanotes[".NCSearch"] = true;



$tdatanotes[".shortTableName"] = "notes";
$tdatanotes[".nSecOptions"] = 2;
$tdatanotes[".recsPerRowPrint"] = 1;
$tdatanotes[".mainTableOwnerID"] = "Encodedby";
$tdatanotes[".moveNext"] = 1;
$tdatanotes[".entityType"] = 0;

$tdatanotes[".strOriginalTableName"] = "notes";

	



$tdatanotes[".showAddInPopup"] = false;

$tdatanotes[".showEditInPopup"] = false;

$tdatanotes[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatanotes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatanotes[".fieldsForRegister"] = array();

$tdatanotes[".listAjax"] = false;

	$tdatanotes[".audit"] = false;

	$tdatanotes[".locking"] = false;

$tdatanotes[".edit"] = true;
$tdatanotes[".afterEditAction"] = 0;
$tdatanotes[".closePopupAfterEdit"] = 1;
$tdatanotes[".afterEditActionDetTable"] = "Detail tables not found!";

$tdatanotes[".add"] = true;
$tdatanotes[".afterAddAction"] = 0;
$tdatanotes[".closePopupAfterAdd"] = 1;
$tdatanotes[".afterAddActionDetTable"] = "Detail tables not found!";

$tdatanotes[".list"] = true;

$tdatanotes[".inlineEdit"] = true;

$tdatanotes[".updateSelected"] = true;

$tdatanotes[".reorderRecordsByHeader"] = true;


$tdatanotes[".exportFormatting"] = 2;
$tdatanotes[".exportDelimiter"] = ",";
		
$tdatanotes[".inlineAdd"] = true;
$tdatanotes[".view"] = true;

$tdatanotes[".import"] = true;

$tdatanotes[".exportTo"] = true;

$tdatanotes[".printFriendly"] = true;

$tdatanotes[".delete"] = true;

$tdatanotes[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatanotes[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatanotes[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatanotes[".searchSaving"] = false;
//

$tdatanotes[".showSearchPanel"] = true;
		$tdatanotes[".flexibleSearch"] = true;

$tdatanotes[".isUseAjaxSuggest"] = true;

$tdatanotes[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																											
																				

$tdatanotes[".ajaxCodeSnippetAdded"] = false;

$tdatanotes[".buttonsAdded"] = true;

$tdatanotes[".addPageEvents"] = true;

// use timepicker for search panel
$tdatanotes[".isUseTimeForSearch"] = false;



$tdatanotes[".badgeColor"] = "e8926f";


$tdatanotes[".allSearchFields"] = array();
$tdatanotes[".filterFields"] = array();
$tdatanotes[".requiredSearchFields"] = array();

$tdatanotes[".allSearchFields"][] = "NID";
	$tdatanotes[".allSearchFields"][] = "CreatedDate";
	$tdatanotes[".allSearchFields"][] = "EmployeeID";
	$tdatanotes[".allSearchFields"][] = "NoteType";
	$tdatanotes[".allSearchFields"][] = "StartDate";
	$tdatanotes[".allSearchFields"][] = "EndDate";
	$tdatanotes[".allSearchFields"][] = "Remarks";
	$tdatanotes[".allSearchFields"][] = "UploadFile";
	$tdatanotes[".allSearchFields"][] = "Status";
	$tdatanotes[".allSearchFields"][] = "NotifyDays";
	$tdatanotes[".allSearchFields"][] = "NotifyDaysLeft";
	$tdatanotes[".allSearchFields"][] = "DaysLeft";
	$tdatanotes[".allSearchFields"][] = "Closed";
	$tdatanotes[".allSearchFields"][] = "Encodedby";
	

$tdatanotes[".googleLikeFields"] = array();
$tdatanotes[".googleLikeFields"][] = "NID";
$tdatanotes[".googleLikeFields"][] = "CreatedDate";
$tdatanotes[".googleLikeFields"][] = "NoteType";
$tdatanotes[".googleLikeFields"][] = "StartDate";
$tdatanotes[".googleLikeFields"][] = "EndDate";
$tdatanotes[".googleLikeFields"][] = "Remarks";
$tdatanotes[".googleLikeFields"][] = "Encodedby";
$tdatanotes[".googleLikeFields"][] = "EmployeeID";
$tdatanotes[".googleLikeFields"][] = "UploadFile";
$tdatanotes[".googleLikeFields"][] = "Status";
$tdatanotes[".googleLikeFields"][] = "NotifyDays";
$tdatanotes[".googleLikeFields"][] = "Closed";
$tdatanotes[".googleLikeFields"][] = "NotifyDaysLeft";
$tdatanotes[".googleLikeFields"][] = "DaysLeft";


$tdatanotes[".advSearchFields"] = array();
$tdatanotes[".advSearchFields"][] = "NID";
$tdatanotes[".advSearchFields"][] = "CreatedDate";
$tdatanotes[".advSearchFields"][] = "EmployeeID";
$tdatanotes[".advSearchFields"][] = "NoteType";
$tdatanotes[".advSearchFields"][] = "StartDate";
$tdatanotes[".advSearchFields"][] = "EndDate";
$tdatanotes[".advSearchFields"][] = "Remarks";
$tdatanotes[".advSearchFields"][] = "UploadFile";
$tdatanotes[".advSearchFields"][] = "Status";
$tdatanotes[".advSearchFields"][] = "NotifyDays";
$tdatanotes[".advSearchFields"][] = "NotifyDaysLeft";
$tdatanotes[".advSearchFields"][] = "DaysLeft";
$tdatanotes[".advSearchFields"][] = "Closed";
$tdatanotes[".advSearchFields"][] = "Encodedby";

$tdatanotes[".tableType"] = "list";

$tdatanotes[".printerPageOrientation"] = 0;
$tdatanotes[".nPrinterPageScale"] = 100;

$tdatanotes[".nPrinterSplitRecords"] = 40;

$tdatanotes[".nPrinterPDFSplitRecords"] = 40;



$tdatanotes[".geocodingEnabled"] = false;





$tdatanotes[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatanotes[".pageSize"] = 20;

$tdatanotes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatanotes[".strOrderBy"] = $tstrOrderBy;

$tdatanotes[".orderindexes"] = array();

$tdatanotes[".sqlHead"] = "SELECT notes.NID,  notes.CreatedDate,  notes.NoteType,  notes.StartDate,  notes.EndDate,  notes.Remarks,  notes.Encodedby,  notes.EmployeeID,  notes.UploadFile,  notes.Status,  notes.NotifyDays,  notes.Closed,  noteage2.NotifyDaysLeft,  noteage2.DaysLeft";
$tdatanotes[".sqlFrom"] = "FROM notes  INNER JOIN noteage2 ON notes.NID = noteage2.NID";
$tdatanotes[".sqlWhereExpr"] = "";
$tdatanotes[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanotes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanotes[".arrGroupsPerPage"] = $arrGPP;

$tdatanotes[".highlightSearchResults"] = true;

$tableKeysnotes = array();
$tableKeysnotes[] = "NID";
$tdatanotes[".Keys"] = $tableKeysnotes;

$tdatanotes[".listFields"] = array();
$tdatanotes[".listFields"][] = "NID";
$tdatanotes[".listFields"][] = "CreatedDate";
$tdatanotes[".listFields"][] = "EmployeeID";
$tdatanotes[".listFields"][] = "NoteType";
$tdatanotes[".listFields"][] = "StartDate";
$tdatanotes[".listFields"][] = "EndDate";
$tdatanotes[".listFields"][] = "Remarks";
$tdatanotes[".listFields"][] = "UploadFile";
$tdatanotes[".listFields"][] = "Status";
$tdatanotes[".listFields"][] = "NotifyDays";
$tdatanotes[".listFields"][] = "NotifyDaysLeft";
$tdatanotes[".listFields"][] = "DaysLeft";
$tdatanotes[".listFields"][] = "Closed";
$tdatanotes[".listFields"][] = "Encodedby";

$tdatanotes[".hideMobileList"] = array();


$tdatanotes[".viewFields"] = array();
$tdatanotes[".viewFields"][] = "NID";
$tdatanotes[".viewFields"][] = "CreatedDate";
$tdatanotes[".viewFields"][] = "EmployeeID";
$tdatanotes[".viewFields"][] = "NoteType";
$tdatanotes[".viewFields"][] = "StartDate";
$tdatanotes[".viewFields"][] = "EndDate";
$tdatanotes[".viewFields"][] = "Remarks";
$tdatanotes[".viewFields"][] = "UploadFile";
$tdatanotes[".viewFields"][] = "Status";
$tdatanotes[".viewFields"][] = "NotifyDays";
$tdatanotes[".viewFields"][] = "NotifyDaysLeft";
$tdatanotes[".viewFields"][] = "DaysLeft";
$tdatanotes[".viewFields"][] = "Closed";
$tdatanotes[".viewFields"][] = "Encodedby";

$tdatanotes[".addFields"] = array();
$tdatanotes[".addFields"][] = "CreatedDate";
$tdatanotes[".addFields"][] = "EmployeeID";
$tdatanotes[".addFields"][] = "NoteType";
$tdatanotes[".addFields"][] = "StartDate";
$tdatanotes[".addFields"][] = "EndDate";
$tdatanotes[".addFields"][] = "Remarks";
$tdatanotes[".addFields"][] = "UploadFile";
$tdatanotes[".addFields"][] = "Status";
$tdatanotes[".addFields"][] = "NotifyDays";
$tdatanotes[".addFields"][] = "Closed";

$tdatanotes[".masterListFields"] = array();
$tdatanotes[".masterListFields"][] = "NID";
$tdatanotes[".masterListFields"][] = "CreatedDate";
$tdatanotes[".masterListFields"][] = "EmployeeID";
$tdatanotes[".masterListFields"][] = "NoteType";
$tdatanotes[".masterListFields"][] = "StartDate";
$tdatanotes[".masterListFields"][] = "EndDate";
$tdatanotes[".masterListFields"][] = "Remarks";
$tdatanotes[".masterListFields"][] = "UploadFile";
$tdatanotes[".masterListFields"][] = "Status";
$tdatanotes[".masterListFields"][] = "NotifyDays";
$tdatanotes[".masterListFields"][] = "NotifyDaysLeft";
$tdatanotes[".masterListFields"][] = "DaysLeft";
$tdatanotes[".masterListFields"][] = "Closed";
$tdatanotes[".masterListFields"][] = "Encodedby";

$tdatanotes[".inlineAddFields"] = array();
$tdatanotes[".inlineAddFields"][] = "CreatedDate";
$tdatanotes[".inlineAddFields"][] = "EmployeeID";
$tdatanotes[".inlineAddFields"][] = "NoteType";
$tdatanotes[".inlineAddFields"][] = "StartDate";
$tdatanotes[".inlineAddFields"][] = "EndDate";
$tdatanotes[".inlineAddFields"][] = "Remarks";
$tdatanotes[".inlineAddFields"][] = "UploadFile";
$tdatanotes[".inlineAddFields"][] = "Status";
$tdatanotes[".inlineAddFields"][] = "NotifyDays";
$tdatanotes[".inlineAddFields"][] = "Closed";

$tdatanotes[".editFields"] = array();
$tdatanotes[".editFields"][] = "CreatedDate";
$tdatanotes[".editFields"][] = "EmployeeID";
$tdatanotes[".editFields"][] = "NoteType";
$tdatanotes[".editFields"][] = "StartDate";
$tdatanotes[".editFields"][] = "EndDate";
$tdatanotes[".editFields"][] = "Remarks";
$tdatanotes[".editFields"][] = "UploadFile";
$tdatanotes[".editFields"][] = "Status";
$tdatanotes[".editFields"][] = "NotifyDays";
$tdatanotes[".editFields"][] = "Closed";
$tdatanotes[".editFields"][] = "Encodedby";

$tdatanotes[".inlineEditFields"] = array();
$tdatanotes[".inlineEditFields"][] = "CreatedDate";
$tdatanotes[".inlineEditFields"][] = "EmployeeID";
$tdatanotes[".inlineEditFields"][] = "NoteType";
$tdatanotes[".inlineEditFields"][] = "StartDate";
$tdatanotes[".inlineEditFields"][] = "EndDate";
$tdatanotes[".inlineEditFields"][] = "Remarks";
$tdatanotes[".inlineEditFields"][] = "UploadFile";
$tdatanotes[".inlineEditFields"][] = "Status";
$tdatanotes[".inlineEditFields"][] = "NotifyDays";
$tdatanotes[".inlineEditFields"][] = "Closed";
$tdatanotes[".inlineEditFields"][] = "Encodedby";

$tdatanotes[".updateSelectedFields"] = array();
$tdatanotes[".updateSelectedFields"][] = "CreatedDate";
$tdatanotes[".updateSelectedFields"][] = "EmployeeID";
$tdatanotes[".updateSelectedFields"][] = "NoteType";
$tdatanotes[".updateSelectedFields"][] = "StartDate";
$tdatanotes[".updateSelectedFields"][] = "EndDate";
$tdatanotes[".updateSelectedFields"][] = "Remarks";
$tdatanotes[".updateSelectedFields"][] = "UploadFile";
$tdatanotes[".updateSelectedFields"][] = "Status";
$tdatanotes[".updateSelectedFields"][] = "NotifyDays";
$tdatanotes[".updateSelectedFields"][] = "Closed";
$tdatanotes[".updateSelectedFields"][] = "Encodedby";


$tdatanotes[".exportFields"] = array();
$tdatanotes[".exportFields"][] = "NID";
$tdatanotes[".exportFields"][] = "CreatedDate";
$tdatanotes[".exportFields"][] = "EmployeeID";
$tdatanotes[".exportFields"][] = "NoteType";
$tdatanotes[".exportFields"][] = "StartDate";
$tdatanotes[".exportFields"][] = "EndDate";
$tdatanotes[".exportFields"][] = "Remarks";
$tdatanotes[".exportFields"][] = "UploadFile";
$tdatanotes[".exportFields"][] = "Status";
$tdatanotes[".exportFields"][] = "NotifyDays";
$tdatanotes[".exportFields"][] = "NotifyDaysLeft";
$tdatanotes[".exportFields"][] = "DaysLeft";
$tdatanotes[".exportFields"][] = "Closed";
$tdatanotes[".exportFields"][] = "Encodedby";

$tdatanotes[".importFields"] = array();
$tdatanotes[".importFields"][] = "NID";
$tdatanotes[".importFields"][] = "CreatedDate";
$tdatanotes[".importFields"][] = "NoteType";
$tdatanotes[".importFields"][] = "StartDate";
$tdatanotes[".importFields"][] = "EndDate";
$tdatanotes[".importFields"][] = "Remarks";
$tdatanotes[".importFields"][] = "Encodedby";
$tdatanotes[".importFields"][] = "EmployeeID";
$tdatanotes[".importFields"][] = "UploadFile";
$tdatanotes[".importFields"][] = "Status";
$tdatanotes[".importFields"][] = "NotifyDays";
$tdatanotes[".importFields"][] = "Closed";
$tdatanotes[".importFields"][] = "NotifyDaysLeft";
$tdatanotes[".importFields"][] = "DaysLeft";

$tdatanotes[".printFields"] = array();
$tdatanotes[".printFields"][] = "NID";
$tdatanotes[".printFields"][] = "CreatedDate";
$tdatanotes[".printFields"][] = "EmployeeID";
$tdatanotes[".printFields"][] = "NoteType";
$tdatanotes[".printFields"][] = "StartDate";
$tdatanotes[".printFields"][] = "EndDate";
$tdatanotes[".printFields"][] = "Remarks";
$tdatanotes[".printFields"][] = "UploadFile";
$tdatanotes[".printFields"][] = "Status";
$tdatanotes[".printFields"][] = "NotifyDays";
$tdatanotes[".printFields"][] = "NotifyDaysLeft";
$tdatanotes[".printFields"][] = "DaysLeft";
$tdatanotes[".printFields"][] = "Closed";
$tdatanotes[".printFields"][] = "Encodedby";


//	NID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "NID";
	$fdata["GoodName"] = "NID";
	$fdata["ownerTable"] = "notes";
	$fdata["Label"] = GetFieldLabel("notes","NID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notes.NID";

	
	
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




	$tdatanotes["NID"] = $fdata;
//	CreatedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CreatedDate";
	$fdata["GoodName"] = "CreatedDate";
	$fdata["ownerTable"] = "notes";
	$fdata["Label"] = GetFieldLabel("notes","CreatedDate");
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

		$fdata["strField"] = "CreatedDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notes.CreatedDate";

	
	
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
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




	$tdatanotes["CreatedDate"] = $fdata;
//	NoteType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NoteType";
	$fdata["GoodName"] = "NoteType";
	$fdata["ownerTable"] = "notes";
	$fdata["Label"] = GetFieldLabel("notes","NoteType");
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

		$fdata["strField"] = "NoteType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notes.NoteType";

	
	
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
	$edata["LookupTable"] = "notetypes";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "NTID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "NoteTypes";
	
	

	
	$edata["LookupOrderBy"] = "NoteTypes";

	
	
		$edata["AllowToAdd"] = true;

	

	
	
	
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




	$tdatanotes["NoteType"] = $fdata;
//	StartDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "StartDate";
	$fdata["GoodName"] = "StartDate";
	$fdata["ownerTable"] = "notes";
	$fdata["Label"] = GetFieldLabel("notes","StartDate");
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

		$fdata["strField"] = "StartDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notes.StartDate";

	
	
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
	$edata["InitialYearFactor"] = 5;
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




	$tdatanotes["StartDate"] = $fdata;
//	EndDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "EndDate";
	$fdata["GoodName"] = "EndDate";
	$fdata["ownerTable"] = "notes";
	$fdata["Label"] = GetFieldLabel("notes","EndDate");
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

		$fdata["strField"] = "EndDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notes.EndDate";

	
	
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
	$edata["InitialYearFactor"] = 5;
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




	$tdatanotes["EndDate"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "notes";
	$fdata["Label"] = GetFieldLabel("notes","Remarks");
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

		$fdata["strField"] = "Remarks";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notes.Remarks";

	
	
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




	$tdatanotes["Remarks"] = $fdata;
//	Encodedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Encodedby";
	$fdata["GoodName"] = "Encodedby";
	$fdata["ownerTable"] = "notes";
	$fdata["Label"] = GetFieldLabel("notes","Encodedby");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Encodedby";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notes.Encodedby";

	
	
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
	
	

	
	$edata["LookupOrderBy"] = "FullName";

	
	
	
	

	
	
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




	$tdatanotes["Encodedby"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "notes";
	$fdata["Label"] = GetFieldLabel("notes","EmployeeID");
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
	$fdata["FullName"] = "notes.EmployeeID";

	
	
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




	$tdatanotes["EmployeeID"] = $fdata;
//	UploadFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "UploadFile";
	$fdata["GoodName"] = "UploadFile";
	$fdata["ownerTable"] = "notes";
	$fdata["Label"] = GetFieldLabel("notes","UploadFile");
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
	$fdata["FullName"] = "notes.UploadFile";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 80;
	$vdata["ThumbHeight"] = 80;
			$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 0;

	
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
	
		
	


	
	
	
							$edata["acceptFileTypes"] = "bmp";
						$edata["acceptFileTypes"] .= "|doc";
						$edata["acceptFileTypes"] .= "|docx";
						$edata["acceptFileTypes"] .= "|gif";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|pdf";
						$edata["acceptFileTypes"] .= "|png";
						$edata["acceptFileTypes"] .= "|rtf";
						$edata["acceptFileTypes"] .= "|txt";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

		$edata["maxNumberOfFiles"] = 1;

		$edata["maxFileSize"] = 8000;

	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 80;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatanotes["UploadFile"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "notes";
	$fdata["Label"] = GetFieldLabel("notes","Status");
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

		$fdata["strField"] = "Status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notes.Status";

	
	
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
	$edata["LookupTable"] = "notestatuses";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "NSID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "NoteStatus";
	
	

	
	$edata["LookupOrderBy"] = "NoteStatus";

	
	
		$edata["AllowToAdd"] = true;

	

	
	
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




	$tdatanotes["Status"] = $fdata;
//	NotifyDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "NotifyDays";
	$fdata["GoodName"] = "NotifyDays";
	$fdata["ownerTable"] = "notes";
	$fdata["Label"] = GetFieldLabel("notes","NotifyDays");
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

		$fdata["strField"] = "NotifyDays";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notes.NotifyDays";

	
	
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




	$tdatanotes["NotifyDays"] = $fdata;
//	Closed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Closed";
	$fdata["GoodName"] = "Closed";
	$fdata["ownerTable"] = "notes";
	$fdata["Label"] = GetFieldLabel("notes","Closed");
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

		$fdata["strField"] = "Closed";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notes.Closed";

	
	
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




	$tdatanotes["Closed"] = $fdata;
//	NotifyDaysLeft
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "NotifyDaysLeft";
	$fdata["GoodName"] = "NotifyDaysLeft";
	$fdata["ownerTable"] = "noteage2";
	$fdata["Label"] = GetFieldLabel("notes","NotifyDaysLeft");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NotifyDaysLeft";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "noteage2.NotifyDaysLeft";

	
	
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




	$tdatanotes["NotifyDaysLeft"] = $fdata;
//	DaysLeft
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DaysLeft";
	$fdata["GoodName"] = "DaysLeft";
	$fdata["ownerTable"] = "noteage2";
	$fdata["Label"] = GetFieldLabel("notes","DaysLeft");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DaysLeft";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "noteage2.DaysLeft";

	
	
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




	$tdatanotes["DaysLeft"] = $fdata;


$tables_data["notes"]=&$tdatanotes;
$field_labels["notes"] = &$fieldLabelsnotes;
$fieldToolTips["notes"] = &$fieldToolTipsnotes;
$placeHolders["notes"] = &$placeHoldersnotes;
$page_titles["notes"] = &$pageTitlesnotes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["notes"] = array();
//	notestatus
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="notestatus";
		$detailsParam["dOriginalTable"] = "notestatus";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "notestatus";
	$detailsParam["dCaptionTable"] = GetTableCaption("notestatus");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["notes"][$dIndex] = $detailsParam;

	
		$detailsTablesData["notes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notes"][$dIndex]["masterKeys"][]="NID";

				$detailsTablesData["notes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notes"][$dIndex]["detailKeys"][]="NID";

// tables which are master tables for current table (detail)
$masterTablesData["notes"] = array();


	
				$strOriginalDetailsTable="demo_user";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="demo_user";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "demo_user";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["notes"][0] = $masterParams;
				$masterTablesData["notes"][0]["masterKeys"] = array();
	$masterTablesData["notes"][0]["masterKeys"][]="EmployeeID";
				$masterTablesData["notes"][0]["detailKeys"] = array();
	$masterTablesData["notes"][0]["detailKeys"][]="EmployeeID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_notes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "notes.NID,  notes.CreatedDate,  notes.NoteType,  notes.StartDate,  notes.EndDate,  notes.Remarks,  notes.Encodedby,  notes.EmployeeID,  notes.UploadFile,  notes.Status,  notes.NotifyDays,  notes.Closed,  noteage2.NotifyDaysLeft,  noteage2.DaysLeft";
$proto0["m_strFrom"] = "FROM notes  INNER JOIN noteage2 ON notes.NID = noteage2.NID";
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
	"m_strName" => "NID",
	"m_strTable" => "notes",
	"m_srcTableName" => "notes"
));

$proto6["m_sql"] = "notes.NID";
$proto6["m_srcTableName"] = "notes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CreatedDate",
	"m_strTable" => "notes",
	"m_srcTableName" => "notes"
));

$proto8["m_sql"] = "notes.CreatedDate";
$proto8["m_srcTableName"] = "notes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NoteType",
	"m_strTable" => "notes",
	"m_srcTableName" => "notes"
));

$proto10["m_sql"] = "notes.NoteType";
$proto10["m_srcTableName"] = "notes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "StartDate",
	"m_strTable" => "notes",
	"m_srcTableName" => "notes"
));

$proto12["m_sql"] = "notes.StartDate";
$proto12["m_srcTableName"] = "notes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "EndDate",
	"m_strTable" => "notes",
	"m_srcTableName" => "notes"
));

$proto14["m_sql"] = "notes.EndDate";
$proto14["m_srcTableName"] = "notes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "notes",
	"m_srcTableName" => "notes"
));

$proto16["m_sql"] = "notes.Remarks";
$proto16["m_srcTableName"] = "notes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Encodedby",
	"m_strTable" => "notes",
	"m_srcTableName" => "notes"
));

$proto18["m_sql"] = "notes.Encodedby";
$proto18["m_srcTableName"] = "notes";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "notes",
	"m_srcTableName" => "notes"
));

$proto20["m_sql"] = "notes.EmployeeID";
$proto20["m_srcTableName"] = "notes";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "UploadFile",
	"m_strTable" => "notes",
	"m_srcTableName" => "notes"
));

$proto22["m_sql"] = "notes.UploadFile";
$proto22["m_srcTableName"] = "notes";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "notes",
	"m_srcTableName" => "notes"
));

$proto24["m_sql"] = "notes.Status";
$proto24["m_srcTableName"] = "notes";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "NotifyDays",
	"m_strTable" => "notes",
	"m_srcTableName" => "notes"
));

$proto26["m_sql"] = "notes.NotifyDays";
$proto26["m_srcTableName"] = "notes";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Closed",
	"m_strTable" => "notes",
	"m_srcTableName" => "notes"
));

$proto28["m_sql"] = "notes.Closed";
$proto28["m_srcTableName"] = "notes";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "NotifyDaysLeft",
	"m_strTable" => "noteage2",
	"m_srcTableName" => "notes"
));

$proto30["m_sql"] = "noteage2.NotifyDaysLeft";
$proto30["m_srcTableName"] = "notes";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DaysLeft",
	"m_strTable" => "noteage2",
	"m_srcTableName" => "notes"
));

$proto32["m_sql"] = "noteage2.DaysLeft";
$proto32["m_srcTableName"] = "notes";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "notes";
$proto35["m_srcTableName"] = "notes";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "NID";
$proto35["m_columns"][] = "CreatedDate";
$proto35["m_columns"][] = "NoteType";
$proto35["m_columns"][] = "StartDate";
$proto35["m_columns"][] = "EndDate";
$proto35["m_columns"][] = "Remarks";
$proto35["m_columns"][] = "Encodedby";
$proto35["m_columns"][] = "EmployeeID";
$proto35["m_columns"][] = "UploadFile";
$proto35["m_columns"][] = "Status";
$proto35["m_columns"][] = "NotifyDays";
$proto35["m_columns"][] = "Closed";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "notes";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "notes";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
												$proto38=array();
$proto38["m_link"] = "SQLL_INNERJOIN";
			$proto39=array();
$proto39["m_strName"] = "noteage2";
$proto39["m_srcTableName"] = "notes";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "NID";
$proto39["m_columns"][] = "Closed";
$proto39["m_columns"][] = "NotifyDaysLeft";
$proto39["m_columns"][] = "DaysLeft";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "INNER JOIN noteage2 ON notes.NID = noteage2.NID";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "notes";
$proto40=array();
$proto40["m_sql"] = "notes.NID = noteage2.NID";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "NID",
	"m_strTable" => "notes",
	"m_srcTableName" => "notes"
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "= noteage2.NID";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="notes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_notes = createSqlQuery_notes();


	
		;

														

$tdatanotes[".sqlquery"] = $queryData_notes;

include_once(getabspath("include/notes_events.php"));
$tableEvents["notes"] = new eventclass_notes;
$tdatanotes[".hasEvents"] = true;

?>