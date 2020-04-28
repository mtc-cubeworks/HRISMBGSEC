<?php
require_once(getabspath("classes/cipherer.php"));




$tdatanotes1 = array();
	$tdatanotes1[".truncateText"] = true;
	$tdatanotes1[".NumberOfChars"] = 80;
	$tdatanotes1[".ShortName"] = "notes1";
	$tdatanotes1[".OwnerID"] = "Encodedby";
	$tdatanotes1[".OriginalTable"] = "notes";

//	field labels
$fieldLabelsnotes1 = array();
$fieldToolTipsnotes1 = array();
$pageTitlesnotes1 = array();
$placeHoldersnotes1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsnotes1["English"] = array();
	$fieldToolTipsnotes1["English"] = array();
	$placeHoldersnotes1["English"] = array();
	$pageTitlesnotes1["English"] = array();
	$fieldLabelsnotes1["English"]["NID"] = "NID";
	$fieldToolTipsnotes1["English"]["NID"] = "";
	$placeHoldersnotes1["English"]["NID"] = "";
	$fieldLabelsnotes1["English"]["CreatedDate"] = "Created Date";
	$fieldToolTipsnotes1["English"]["CreatedDate"] = "";
	$placeHoldersnotes1["English"]["CreatedDate"] = "";
	$fieldLabelsnotes1["English"]["NoteType"] = "Note Type";
	$fieldToolTipsnotes1["English"]["NoteType"] = "";
	$placeHoldersnotes1["English"]["NoteType"] = "";
	$fieldLabelsnotes1["English"]["StartDate"] = "Start Date";
	$fieldToolTipsnotes1["English"]["StartDate"] = "";
	$placeHoldersnotes1["English"]["StartDate"] = "";
	$fieldLabelsnotes1["English"]["EndDate"] = "End Date";
	$fieldToolTipsnotes1["English"]["EndDate"] = "";
	$placeHoldersnotes1["English"]["EndDate"] = "";
	$fieldLabelsnotes1["English"]["Remarks"] = "Remarks";
	$fieldToolTipsnotes1["English"]["Remarks"] = "";
	$placeHoldersnotes1["English"]["Remarks"] = "";
	$fieldLabelsnotes1["English"]["Encodedby"] = "Encoded by";
	$fieldToolTipsnotes1["English"]["Encodedby"] = "";
	$placeHoldersnotes1["English"]["Encodedby"] = "";
	$fieldLabelsnotes1["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipsnotes1["English"]["EmployeeID"] = "";
	$placeHoldersnotes1["English"]["EmployeeID"] = "";
	$fieldLabelsnotes1["English"]["UploadFile"] = "Upload File";
	$fieldToolTipsnotes1["English"]["UploadFile"] = "";
	$placeHoldersnotes1["English"]["UploadFile"] = "";
	$fieldLabelsnotes1["English"]["Status"] = "Status";
	$fieldToolTipsnotes1["English"]["Status"] = "";
	$placeHoldersnotes1["English"]["Status"] = "";
	$fieldLabelsnotes1["English"]["NotifyDays"] = "Notify Days";
	$fieldToolTipsnotes1["English"]["NotifyDays"] = "";
	$placeHoldersnotes1["English"]["NotifyDays"] = "";
	$fieldLabelsnotes1["English"]["Closed"] = "Closed";
	$fieldToolTipsnotes1["English"]["Closed"] = "";
	$placeHoldersnotes1["English"]["Closed"] = "";
	$fieldLabelsnotes1["English"]["NotifyDaysLeft"] = "Notify Days Left";
	$fieldToolTipsnotes1["English"]["NotifyDaysLeft"] = "";
	$placeHoldersnotes1["English"]["NotifyDaysLeft"] = "";
	$fieldLabelsnotes1["English"]["DaysLeft"] = "Days Left";
	$fieldToolTipsnotes1["English"]["DaysLeft"] = "";
	$placeHoldersnotes1["English"]["DaysLeft"] = "";
	if (count($fieldToolTipsnotes1["English"]))
		$tdatanotes1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsnotes1[""] = array();
	$fieldToolTipsnotes1[""] = array();
	$placeHoldersnotes1[""] = array();
	$pageTitlesnotes1[""] = array();
	$fieldLabelsnotes1[""]["NID"] = "NID";
	$fieldToolTipsnotes1[""]["NID"] = "";
	$placeHoldersnotes1[""]["NID"] = "";
	$fieldLabelsnotes1[""]["CreatedDate"] = "Created Date";
	$fieldToolTipsnotes1[""]["CreatedDate"] = "";
	$placeHoldersnotes1[""]["CreatedDate"] = "";
	$fieldLabelsnotes1[""]["NoteType"] = "Note Type";
	$fieldToolTipsnotes1[""]["NoteType"] = "";
	$placeHoldersnotes1[""]["NoteType"] = "";
	$fieldLabelsnotes1[""]["StartDate"] = "Start Date";
	$fieldToolTipsnotes1[""]["StartDate"] = "";
	$placeHoldersnotes1[""]["StartDate"] = "";
	$fieldLabelsnotes1[""]["EndDate"] = "End Date";
	$fieldToolTipsnotes1[""]["EndDate"] = "";
	$placeHoldersnotes1[""]["EndDate"] = "";
	$fieldLabelsnotes1[""]["Remarks"] = "Remarks";
	$fieldToolTipsnotes1[""]["Remarks"] = "";
	$placeHoldersnotes1[""]["Remarks"] = "";
	$fieldLabelsnotes1[""]["Encodedby"] = "Encodedby";
	$fieldToolTipsnotes1[""]["Encodedby"] = "";
	$placeHoldersnotes1[""]["Encodedby"] = "";
	$fieldLabelsnotes1[""]["EmployeeID"] = "Employee ID";
	$fieldToolTipsnotes1[""]["EmployeeID"] = "";
	$placeHoldersnotes1[""]["EmployeeID"] = "";
	$fieldLabelsnotes1[""]["UploadFile"] = "Upload File";
	$fieldToolTipsnotes1[""]["UploadFile"] = "";
	$placeHoldersnotes1[""]["UploadFile"] = "";
	$fieldLabelsnotes1[""]["Status"] = "Status";
	$fieldToolTipsnotes1[""]["Status"] = "";
	$placeHoldersnotes1[""]["Status"] = "";
	$fieldLabelsnotes1[""]["NotifyDays"] = "Notify Days";
	$fieldToolTipsnotes1[""]["NotifyDays"] = "";
	$placeHoldersnotes1[""]["NotifyDays"] = "";
	$fieldLabelsnotes1[""]["Closed"] = "Closed";
	$fieldToolTipsnotes1[""]["Closed"] = "";
	$placeHoldersnotes1[""]["Closed"] = "";
	$fieldLabelsnotes1[""]["NotifyDaysLeft"] = "Notify Days Left";
	$fieldToolTipsnotes1[""]["NotifyDaysLeft"] = "";
	$placeHoldersnotes1[""]["NotifyDaysLeft"] = "";
	$fieldLabelsnotes1[""]["DaysLeft"] = "Days Left";
	$fieldToolTipsnotes1[""]["DaysLeft"] = "";
	$placeHoldersnotes1[""]["DaysLeft"] = "";
	if (count($fieldToolTipsnotes1[""]))
		$tdatanotes1[".isUseToolTips"] = true;
}


	$tdatanotes1[".NCSearch"] = true;



$tdatanotes1[".shortTableName"] = "notes1";
$tdatanotes1[".nSecOptions"] = 0;
$tdatanotes1[".recsPerRowPrint"] = 1;
$tdatanotes1[".mainTableOwnerID"] = "Encodedby";
$tdatanotes1[".moveNext"] = 1;
$tdatanotes1[".entityType"] = 1;

$tdatanotes1[".strOriginalTableName"] = "notes";

	



$tdatanotes1[".showAddInPopup"] = false;

$tdatanotes1[".showEditInPopup"] = false;

$tdatanotes1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatanotes1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatanotes1[".fieldsForRegister"] = array();

$tdatanotes1[".listAjax"] = false;

	$tdatanotes1[".audit"] = false;

	$tdatanotes1[".locking"] = false;

$tdatanotes1[".edit"] = true;
$tdatanotes1[".afterEditAction"] = 0;
$tdatanotes1[".closePopupAfterEdit"] = 1;
$tdatanotes1[".afterEditActionDetTable"] = "notestatus";

$tdatanotes1[".add"] = true;
$tdatanotes1[".afterAddAction"] = 0;
$tdatanotes1[".closePopupAfterAdd"] = 1;
$tdatanotes1[".afterAddActionDetTable"] = "notestatus";

$tdatanotes1[".list"] = true;

$tdatanotes1[".inlineEdit"] = true;

$tdatanotes1[".updateSelected"] = true;

$tdatanotes1[".reorderRecordsByHeader"] = true;


$tdatanotes1[".exportFormatting"] = 2;
$tdatanotes1[".exportDelimiter"] = ",";
		
$tdatanotes1[".inlineAdd"] = true;
$tdatanotes1[".view"] = true;

$tdatanotes1[".import"] = true;

$tdatanotes1[".exportTo"] = true;

$tdatanotes1[".printFriendly"] = true;

$tdatanotes1[".delete"] = true;

$tdatanotes1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatanotes1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatanotes1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatanotes1[".searchSaving"] = false;
//

$tdatanotes1[".showSearchPanel"] = true;
		$tdatanotes1[".flexibleSearch"] = true;

$tdatanotes1[".isUseAjaxSuggest"] = true;

$tdatanotes1[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdatanotes1[".ajaxCodeSnippetAdded"] = false;

$tdatanotes1[".buttonsAdded"] = false;

$tdatanotes1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanotes1[".isUseTimeForSearch"] = false;



$tdatanotes1[".badgeColor"] = "A9A9A9";


$tdatanotes1[".allSearchFields"] = array();
$tdatanotes1[".filterFields"] = array();
$tdatanotes1[".requiredSearchFields"] = array();

$tdatanotes1[".allSearchFields"][] = "NID";
	$tdatanotes1[".allSearchFields"][] = "CreatedDate";
	$tdatanotes1[".allSearchFields"][] = "EmployeeID";
	$tdatanotes1[".allSearchFields"][] = "NoteType";
	$tdatanotes1[".allSearchFields"][] = "StartDate";
	$tdatanotes1[".allSearchFields"][] = "EndDate";
	$tdatanotes1[".allSearchFields"][] = "Remarks";
	$tdatanotes1[".allSearchFields"][] = "UploadFile";
	$tdatanotes1[".allSearchFields"][] = "Status";
	$tdatanotes1[".allSearchFields"][] = "NotifyDays";
	$tdatanotes1[".allSearchFields"][] = "NotifyDaysLeft";
	$tdatanotes1[".allSearchFields"][] = "DaysLeft";
	$tdatanotes1[".allSearchFields"][] = "Closed";
	$tdatanotes1[".allSearchFields"][] = "Encodedby";
	

$tdatanotes1[".googleLikeFields"] = array();
$tdatanotes1[".googleLikeFields"][] = "NID";
$tdatanotes1[".googleLikeFields"][] = "CreatedDate";
$tdatanotes1[".googleLikeFields"][] = "NoteType";
$tdatanotes1[".googleLikeFields"][] = "StartDate";
$tdatanotes1[".googleLikeFields"][] = "EndDate";
$tdatanotes1[".googleLikeFields"][] = "Remarks";
$tdatanotes1[".googleLikeFields"][] = "Encodedby";
$tdatanotes1[".googleLikeFields"][] = "EmployeeID";
$tdatanotes1[".googleLikeFields"][] = "UploadFile";
$tdatanotes1[".googleLikeFields"][] = "Status";
$tdatanotes1[".googleLikeFields"][] = "NotifyDays";
$tdatanotes1[".googleLikeFields"][] = "Closed";
$tdatanotes1[".googleLikeFields"][] = "NotifyDaysLeft";
$tdatanotes1[".googleLikeFields"][] = "DaysLeft";


$tdatanotes1[".advSearchFields"] = array();
$tdatanotes1[".advSearchFields"][] = "NID";
$tdatanotes1[".advSearchFields"][] = "CreatedDate";
$tdatanotes1[".advSearchFields"][] = "EmployeeID";
$tdatanotes1[".advSearchFields"][] = "NoteType";
$tdatanotes1[".advSearchFields"][] = "StartDate";
$tdatanotes1[".advSearchFields"][] = "EndDate";
$tdatanotes1[".advSearchFields"][] = "Remarks";
$tdatanotes1[".advSearchFields"][] = "UploadFile";
$tdatanotes1[".advSearchFields"][] = "Status";
$tdatanotes1[".advSearchFields"][] = "NotifyDays";
$tdatanotes1[".advSearchFields"][] = "NotifyDaysLeft";
$tdatanotes1[".advSearchFields"][] = "DaysLeft";
$tdatanotes1[".advSearchFields"][] = "Closed";
$tdatanotes1[".advSearchFields"][] = "Encodedby";

$tdatanotes1[".tableType"] = "list";

$tdatanotes1[".printerPageOrientation"] = 0;
$tdatanotes1[".nPrinterPageScale"] = 100;

$tdatanotes1[".nPrinterSplitRecords"] = 40;

$tdatanotes1[".nPrinterPDFSplitRecords"] = 40;



$tdatanotes1[".geocodingEnabled"] = false;





$tdatanotes1[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatanotes1[".totalsFields"] = array();
$tdatanotes1[".totalsFields"][] = array(
	"fName" => "NID",
	"numRows" => 0,
	"totalsType" => "COUNT",
	"viewFormat" => '');

$tdatanotes1[".pageSize"] = 20;

$tdatanotes1[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY noteage2.NotifyDaysLeft DESC, noteage2.DaysLeft DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatanotes1[".strOrderBy"] = $tstrOrderBy;

$tdatanotes1[".orderindexes"] = array();
	$tdatanotes1[".orderindexes"][] = array(13, (0 ? "ASC" : "DESC"), "noteage2.NotifyDaysLeft");

	$tdatanotes1[".orderindexes"][] = array(14, (0 ? "ASC" : "DESC"), "noteage2.DaysLeft");


$tdatanotes1[".sqlHead"] = "SELECT notes.NID,  notes.CreatedDate,  notes.NoteType,  notes.StartDate,  notes.EndDate,  notes.Remarks,  notes.Encodedby,  notes.EmployeeID,  notes.UploadFile,  notes.Status,  notes.NotifyDays,  notes.Closed,  noteage2.NotifyDaysLeft,  noteage2.DaysLeft";
$tdatanotes1[".sqlFrom"] = "FROM notes  INNER JOIN noteage2 ON notes.NID = noteage2.NID";
$tdatanotes1[".sqlWhereExpr"] = "(noteage2.NotifyDaysLeft >-1)";
$tdatanotes1[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",	
	'showRowCount' => 0,
	'hideEmpty' => 0,	
);				  
$tdatanotes1[".arrGridTabs"] = $arrGridTabs;











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanotes1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanotes1[".arrGroupsPerPage"] = $arrGPP;

$tdatanotes1[".highlightSearchResults"] = true;

$tableKeysnotes1 = array();
$tableKeysnotes1[] = "NID";
$tdatanotes1[".Keys"] = $tableKeysnotes1;

$tdatanotes1[".listFields"] = array();
$tdatanotes1[".listFields"][] = "NID";
$tdatanotes1[".listFields"][] = "CreatedDate";
$tdatanotes1[".listFields"][] = "EmployeeID";
$tdatanotes1[".listFields"][] = "NoteType";
$tdatanotes1[".listFields"][] = "StartDate";
$tdatanotes1[".listFields"][] = "EndDate";
$tdatanotes1[".listFields"][] = "Remarks";
$tdatanotes1[".listFields"][] = "UploadFile";
$tdatanotes1[".listFields"][] = "Status";
$tdatanotes1[".listFields"][] = "NotifyDays";
$tdatanotes1[".listFields"][] = "NotifyDaysLeft";
$tdatanotes1[".listFields"][] = "DaysLeft";
$tdatanotes1[".listFields"][] = "Closed";
$tdatanotes1[".listFields"][] = "Encodedby";

$tdatanotes1[".hideMobileList"] = array();


$tdatanotes1[".viewFields"] = array();
$tdatanotes1[".viewFields"][] = "NID";
$tdatanotes1[".viewFields"][] = "CreatedDate";
$tdatanotes1[".viewFields"][] = "EmployeeID";
$tdatanotes1[".viewFields"][] = "NoteType";
$tdatanotes1[".viewFields"][] = "StartDate";
$tdatanotes1[".viewFields"][] = "EndDate";
$tdatanotes1[".viewFields"][] = "Remarks";
$tdatanotes1[".viewFields"][] = "UploadFile";
$tdatanotes1[".viewFields"][] = "Status";
$tdatanotes1[".viewFields"][] = "NotifyDays";
$tdatanotes1[".viewFields"][] = "NotifyDaysLeft";
$tdatanotes1[".viewFields"][] = "DaysLeft";
$tdatanotes1[".viewFields"][] = "Closed";
$tdatanotes1[".viewFields"][] = "Encodedby";

$tdatanotes1[".addFields"] = array();
$tdatanotes1[".addFields"][] = "CreatedDate";
$tdatanotes1[".addFields"][] = "EmployeeID";
$tdatanotes1[".addFields"][] = "NoteType";
$tdatanotes1[".addFields"][] = "StartDate";
$tdatanotes1[".addFields"][] = "EndDate";
$tdatanotes1[".addFields"][] = "Remarks";
$tdatanotes1[".addFields"][] = "UploadFile";
$tdatanotes1[".addFields"][] = "Status";
$tdatanotes1[".addFields"][] = "NotifyDays";
$tdatanotes1[".addFields"][] = "Closed";

$tdatanotes1[".masterListFields"] = array();
$tdatanotes1[".masterListFields"][] = "NID";
$tdatanotes1[".masterListFields"][] = "CreatedDate";
$tdatanotes1[".masterListFields"][] = "EmployeeID";
$tdatanotes1[".masterListFields"][] = "NoteType";
$tdatanotes1[".masterListFields"][] = "StartDate";
$tdatanotes1[".masterListFields"][] = "EndDate";
$tdatanotes1[".masterListFields"][] = "Remarks";
$tdatanotes1[".masterListFields"][] = "UploadFile";
$tdatanotes1[".masterListFields"][] = "Status";
$tdatanotes1[".masterListFields"][] = "NotifyDays";
$tdatanotes1[".masterListFields"][] = "NotifyDaysLeft";
$tdatanotes1[".masterListFields"][] = "DaysLeft";
$tdatanotes1[".masterListFields"][] = "Closed";
$tdatanotes1[".masterListFields"][] = "Encodedby";

$tdatanotes1[".inlineAddFields"] = array();
$tdatanotes1[".inlineAddFields"][] = "CreatedDate";
$tdatanotes1[".inlineAddFields"][] = "EmployeeID";
$tdatanotes1[".inlineAddFields"][] = "NoteType";
$tdatanotes1[".inlineAddFields"][] = "StartDate";
$tdatanotes1[".inlineAddFields"][] = "EndDate";
$tdatanotes1[".inlineAddFields"][] = "Remarks";
$tdatanotes1[".inlineAddFields"][] = "UploadFile";
$tdatanotes1[".inlineAddFields"][] = "Status";
$tdatanotes1[".inlineAddFields"][] = "NotifyDays";
$tdatanotes1[".inlineAddFields"][] = "Closed";

$tdatanotes1[".editFields"] = array();
$tdatanotes1[".editFields"][] = "CreatedDate";
$tdatanotes1[".editFields"][] = "EmployeeID";
$tdatanotes1[".editFields"][] = "NoteType";
$tdatanotes1[".editFields"][] = "StartDate";
$tdatanotes1[".editFields"][] = "EndDate";
$tdatanotes1[".editFields"][] = "Remarks";
$tdatanotes1[".editFields"][] = "UploadFile";
$tdatanotes1[".editFields"][] = "Status";
$tdatanotes1[".editFields"][] = "NotifyDays";
$tdatanotes1[".editFields"][] = "Closed";
$tdatanotes1[".editFields"][] = "Encodedby";

$tdatanotes1[".inlineEditFields"] = array();
$tdatanotes1[".inlineEditFields"][] = "CreatedDate";
$tdatanotes1[".inlineEditFields"][] = "EmployeeID";
$tdatanotes1[".inlineEditFields"][] = "NoteType";
$tdatanotes1[".inlineEditFields"][] = "StartDate";
$tdatanotes1[".inlineEditFields"][] = "EndDate";
$tdatanotes1[".inlineEditFields"][] = "Remarks";
$tdatanotes1[".inlineEditFields"][] = "UploadFile";
$tdatanotes1[".inlineEditFields"][] = "Status";
$tdatanotes1[".inlineEditFields"][] = "NotifyDays";
$tdatanotes1[".inlineEditFields"][] = "Closed";
$tdatanotes1[".inlineEditFields"][] = "Encodedby";

$tdatanotes1[".updateSelectedFields"] = array();
$tdatanotes1[".updateSelectedFields"][] = "CreatedDate";
$tdatanotes1[".updateSelectedFields"][] = "EmployeeID";
$tdatanotes1[".updateSelectedFields"][] = "NoteType";
$tdatanotes1[".updateSelectedFields"][] = "StartDate";
$tdatanotes1[".updateSelectedFields"][] = "EndDate";
$tdatanotes1[".updateSelectedFields"][] = "Remarks";
$tdatanotes1[".updateSelectedFields"][] = "UploadFile";
$tdatanotes1[".updateSelectedFields"][] = "Status";
$tdatanotes1[".updateSelectedFields"][] = "NotifyDays";
$tdatanotes1[".updateSelectedFields"][] = "Closed";
$tdatanotes1[".updateSelectedFields"][] = "Encodedby";


$tdatanotes1[".exportFields"] = array();
$tdatanotes1[".exportFields"][] = "NID";
$tdatanotes1[".exportFields"][] = "CreatedDate";
$tdatanotes1[".exportFields"][] = "EmployeeID";
$tdatanotes1[".exportFields"][] = "NoteType";
$tdatanotes1[".exportFields"][] = "StartDate";
$tdatanotes1[".exportFields"][] = "EndDate";
$tdatanotes1[".exportFields"][] = "Remarks";
$tdatanotes1[".exportFields"][] = "UploadFile";
$tdatanotes1[".exportFields"][] = "Status";
$tdatanotes1[".exportFields"][] = "NotifyDays";
$tdatanotes1[".exportFields"][] = "NotifyDaysLeft";
$tdatanotes1[".exportFields"][] = "DaysLeft";
$tdatanotes1[".exportFields"][] = "Closed";
$tdatanotes1[".exportFields"][] = "Encodedby";

$tdatanotes1[".importFields"] = array();
$tdatanotes1[".importFields"][] = "NID";
$tdatanotes1[".importFields"][] = "CreatedDate";
$tdatanotes1[".importFields"][] = "NoteType";
$tdatanotes1[".importFields"][] = "StartDate";
$tdatanotes1[".importFields"][] = "EndDate";
$tdatanotes1[".importFields"][] = "Remarks";
$tdatanotes1[".importFields"][] = "Encodedby";
$tdatanotes1[".importFields"][] = "EmployeeID";
$tdatanotes1[".importFields"][] = "UploadFile";
$tdatanotes1[".importFields"][] = "Status";
$tdatanotes1[".importFields"][] = "NotifyDays";
$tdatanotes1[".importFields"][] = "Closed";
$tdatanotes1[".importFields"][] = "NotifyDaysLeft";
$tdatanotes1[".importFields"][] = "DaysLeft";

$tdatanotes1[".printFields"] = array();
$tdatanotes1[".printFields"][] = "NID";
$tdatanotes1[".printFields"][] = "CreatedDate";
$tdatanotes1[".printFields"][] = "EmployeeID";
$tdatanotes1[".printFields"][] = "NoteType";
$tdatanotes1[".printFields"][] = "StartDate";
$tdatanotes1[".printFields"][] = "EndDate";
$tdatanotes1[".printFields"][] = "Remarks";
$tdatanotes1[".printFields"][] = "UploadFile";
$tdatanotes1[".printFields"][] = "Status";
$tdatanotes1[".printFields"][] = "NotifyDays";
$tdatanotes1[".printFields"][] = "NotifyDaysLeft";
$tdatanotes1[".printFields"][] = "DaysLeft";
$tdatanotes1[".printFields"][] = "Closed";
$tdatanotes1[".printFields"][] = "Encodedby";


//	NID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "NID";
	$fdata["GoodName"] = "NID";
	$fdata["ownerTable"] = "notes";
	$fdata["Label"] = GetFieldLabel("notes1","NID");
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




	$tdatanotes1["NID"] = $fdata;
//	CreatedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CreatedDate";
	$fdata["GoodName"] = "CreatedDate";
	$fdata["ownerTable"] = "notes";
	$fdata["Label"] = GetFieldLabel("notes1","CreatedDate");
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




	$tdatanotes1["CreatedDate"] = $fdata;
//	NoteType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NoteType";
	$fdata["GoodName"] = "NoteType";
	$fdata["ownerTable"] = "notes";
	$fdata["Label"] = GetFieldLabel("notes1","NoteType");
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




	$tdatanotes1["NoteType"] = $fdata;
//	StartDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "StartDate";
	$fdata["GoodName"] = "StartDate";
	$fdata["ownerTable"] = "notes";
	$fdata["Label"] = GetFieldLabel("notes1","StartDate");
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




	$tdatanotes1["StartDate"] = $fdata;
//	EndDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "EndDate";
	$fdata["GoodName"] = "EndDate";
	$fdata["ownerTable"] = "notes";
	$fdata["Label"] = GetFieldLabel("notes1","EndDate");
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




	$tdatanotes1["EndDate"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "notes";
	$fdata["Label"] = GetFieldLabel("notes1","Remarks");
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




	$tdatanotes1["Remarks"] = $fdata;
//	Encodedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Encodedby";
	$fdata["GoodName"] = "Encodedby";
	$fdata["ownerTable"] = "notes";
	$fdata["Label"] = GetFieldLabel("notes1","Encodedby");
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




	$tdatanotes1["Encodedby"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "notes";
	$fdata["Label"] = GetFieldLabel("notes1","EmployeeID");
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
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "EmployeeID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "user_name";
	
	

	
	$edata["LookupOrderBy"] = "user_name";

	
	
	
	

	
	
	
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




	$tdatanotes1["EmployeeID"] = $fdata;
//	UploadFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "UploadFile";
	$fdata["GoodName"] = "UploadFile";
	$fdata["ownerTable"] = "notes";
	$fdata["Label"] = GetFieldLabel("notes1","UploadFile");
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

		$edata["maxNumberOfFiles"] = 5;

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




	$tdatanotes1["UploadFile"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "notes";
	$fdata["Label"] = GetFieldLabel("notes1","Status");
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
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "NSID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "NoteStatus";
	
	

	
	$edata["LookupOrderBy"] = "NoteStatus";

	
	
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




	$tdatanotes1["Status"] = $fdata;
//	NotifyDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "NotifyDays";
	$fdata["GoodName"] = "NotifyDays";
	$fdata["ownerTable"] = "notes";
	$fdata["Label"] = GetFieldLabel("notes1","NotifyDays");
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




	$tdatanotes1["NotifyDays"] = $fdata;
//	Closed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Closed";
	$fdata["GoodName"] = "Closed";
	$fdata["ownerTable"] = "notes";
	$fdata["Label"] = GetFieldLabel("notes1","Closed");
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




	$tdatanotes1["Closed"] = $fdata;
//	NotifyDaysLeft
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "NotifyDaysLeft";
	$fdata["GoodName"] = "NotifyDaysLeft";
	$fdata["ownerTable"] = "noteage2";
	$fdata["Label"] = GetFieldLabel("notes1","NotifyDaysLeft");
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




	$tdatanotes1["NotifyDaysLeft"] = $fdata;
//	DaysLeft
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DaysLeft";
	$fdata["GoodName"] = "DaysLeft";
	$fdata["ownerTable"] = "noteage2";
	$fdata["Label"] = GetFieldLabel("notes1","DaysLeft");
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




	$tdatanotes1["DaysLeft"] = $fdata;


$tables_data["notes1"]=&$tdatanotes1;
$field_labels["notes1"] = &$fieldLabelsnotes1;
$fieldToolTips["notes1"] = &$fieldToolTipsnotes1;
$placeHolders["notes1"] = &$placeHoldersnotes1;
$page_titles["notes1"] = &$pageTitlesnotes1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["notes1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["notes1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_notes1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "notes.NID,  notes.CreatedDate,  notes.NoteType,  notes.StartDate,  notes.EndDate,  notes.Remarks,  notes.Encodedby,  notes.EmployeeID,  notes.UploadFile,  notes.Status,  notes.NotifyDays,  notes.Closed,  noteage2.NotifyDaysLeft,  noteage2.DaysLeft";
$proto0["m_strFrom"] = "FROM notes  INNER JOIN noteage2 ON notes.NID = noteage2.NID";
$proto0["m_strWhere"] = "(noteage2.NotifyDaysLeft >-1)";
$proto0["m_strOrderBy"] = "ORDER BY noteage2.NotifyDaysLeft DESC, noteage2.DaysLeft DESC";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "noteage2.NotifyDaysLeft >-1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "NotifyDaysLeft",
	"m_strTable" => "noteage2",
	"m_srcTableName" => "notes1"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = ">-1";
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
	"m_srcTableName" => "notes1"
));

$proto6["m_sql"] = "notes.NID";
$proto6["m_srcTableName"] = "notes1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CreatedDate",
	"m_strTable" => "notes",
	"m_srcTableName" => "notes1"
));

$proto8["m_sql"] = "notes.CreatedDate";
$proto8["m_srcTableName"] = "notes1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NoteType",
	"m_strTable" => "notes",
	"m_srcTableName" => "notes1"
));

$proto10["m_sql"] = "notes.NoteType";
$proto10["m_srcTableName"] = "notes1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "StartDate",
	"m_strTable" => "notes",
	"m_srcTableName" => "notes1"
));

$proto12["m_sql"] = "notes.StartDate";
$proto12["m_srcTableName"] = "notes1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "EndDate",
	"m_strTable" => "notes",
	"m_srcTableName" => "notes1"
));

$proto14["m_sql"] = "notes.EndDate";
$proto14["m_srcTableName"] = "notes1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "notes",
	"m_srcTableName" => "notes1"
));

$proto16["m_sql"] = "notes.Remarks";
$proto16["m_srcTableName"] = "notes1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Encodedby",
	"m_strTable" => "notes",
	"m_srcTableName" => "notes1"
));

$proto18["m_sql"] = "notes.Encodedby";
$proto18["m_srcTableName"] = "notes1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "notes",
	"m_srcTableName" => "notes1"
));

$proto20["m_sql"] = "notes.EmployeeID";
$proto20["m_srcTableName"] = "notes1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "UploadFile",
	"m_strTable" => "notes",
	"m_srcTableName" => "notes1"
));

$proto22["m_sql"] = "notes.UploadFile";
$proto22["m_srcTableName"] = "notes1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "notes",
	"m_srcTableName" => "notes1"
));

$proto24["m_sql"] = "notes.Status";
$proto24["m_srcTableName"] = "notes1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "NotifyDays",
	"m_strTable" => "notes",
	"m_srcTableName" => "notes1"
));

$proto26["m_sql"] = "notes.NotifyDays";
$proto26["m_srcTableName"] = "notes1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Closed",
	"m_strTable" => "notes",
	"m_srcTableName" => "notes1"
));

$proto28["m_sql"] = "notes.Closed";
$proto28["m_srcTableName"] = "notes1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "NotifyDaysLeft",
	"m_strTable" => "noteage2",
	"m_srcTableName" => "notes1"
));

$proto30["m_sql"] = "noteage2.NotifyDaysLeft";
$proto30["m_srcTableName"] = "notes1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DaysLeft",
	"m_strTable" => "noteage2",
	"m_srcTableName" => "notes1"
));

$proto32["m_sql"] = "noteage2.DaysLeft";
$proto32["m_srcTableName"] = "notes1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "notes";
$proto35["m_srcTableName"] = "notes1";
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
$proto34["m_srcTableName"] = "notes1";
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
$proto39["m_srcTableName"] = "notes1";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "NID";
$proto39["m_columns"][] = "Closed";
$proto39["m_columns"][] = "NotifyDaysLeft";
$proto39["m_columns"][] = "DaysLeft";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "INNER JOIN noteage2 ON notes.NID = noteage2.NID";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "notes1";
$proto40=array();
$proto40["m_sql"] = "notes.NID = noteage2.NID";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "NID",
	"m_strTable" => "notes",
	"m_srcTableName" => "notes1"
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
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "NotifyDaysLeft",
	"m_strTable" => "noteage2",
	"m_srcTableName" => "notes1"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 0;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "DaysLeft",
	"m_strTable" => "noteage2",
	"m_srcTableName" => "notes1"
));

$proto44["m_column"]=$obj;
$proto44["m_bAsc"] = 0;
$proto44["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto44);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="notes1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_notes1 = createSqlQuery_notes1();


	
		;

														

$tdatanotes1[".sqlquery"] = $queryData_notes1;

include_once(getabspath("include/notes1_events.php"));
$tableEvents["notes1"] = new eventclass_notes1;
$tdatanotes1[".hasEvents"] = true;

?>