<?php
require_once(getabspath("classes/cipherer.php"));




$tdatanotestatus = array();
	$tdatanotestatus[".truncateText"] = true;
	$tdatanotestatus[".NumberOfChars"] = 80;
	$tdatanotestatus[".ShortName"] = "notestatus";
	$tdatanotestatus[".OwnerID"] = "Encodedby";
	$tdatanotestatus[".OriginalTable"] = "notestatus";

//	field labels
$fieldLabelsnotestatus = array();
$fieldToolTipsnotestatus = array();
$pageTitlesnotestatus = array();
$placeHoldersnotestatus = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsnotestatus["English"] = array();
	$fieldToolTipsnotestatus["English"] = array();
	$placeHoldersnotestatus["English"] = array();
	$pageTitlesnotestatus["English"] = array();
	$fieldLabelsnotestatus["English"]["NSID"] = "NSID";
	$fieldToolTipsnotestatus["English"]["NSID"] = "";
	$placeHoldersnotestatus["English"]["NSID"] = "";
	$fieldLabelsnotestatus["English"]["CreatedDate"] = "Created Date";
	$fieldToolTipsnotestatus["English"]["CreatedDate"] = "";
	$placeHoldersnotestatus["English"]["CreatedDate"] = "";
	$fieldLabelsnotestatus["English"]["NStatusDate"] = "Status Date";
	$fieldToolTipsnotestatus["English"]["NStatusDate"] = "";
	$placeHoldersnotestatus["English"]["NStatusDate"] = "";
	$fieldLabelsnotestatus["English"]["NoteStatus"] = "Status";
	$fieldToolTipsnotestatus["English"]["NoteStatus"] = "";
	$placeHoldersnotestatus["English"]["NoteStatus"] = "";
	$fieldLabelsnotestatus["English"]["Remarks"] = "Remarks";
	$fieldToolTipsnotestatus["English"]["Remarks"] = "";
	$placeHoldersnotestatus["English"]["Remarks"] = "";
	$fieldLabelsnotestatus["English"]["NID"] = "NID";
	$fieldToolTipsnotestatus["English"]["NID"] = "";
	$placeHoldersnotestatus["English"]["NID"] = "";
	$fieldLabelsnotestatus["English"]["UploadFile"] = "Upload File";
	$fieldToolTipsnotestatus["English"]["UploadFile"] = "";
	$placeHoldersnotestatus["English"]["UploadFile"] = "";
	$fieldLabelsnotestatus["English"]["Encodedby"] = "Encodedby";
	$fieldToolTipsnotestatus["English"]["Encodedby"] = "";
	$placeHoldersnotestatus["English"]["Encodedby"] = "";
	$fieldLabelsnotestatus["English"]["Closed"] = "Closed";
	$fieldToolTipsnotestatus["English"]["Closed"] = "";
	$placeHoldersnotestatus["English"]["Closed"] = "";
	if (count($fieldToolTipsnotestatus["English"]))
		$tdatanotestatus[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsnotestatus[""] = array();
	$fieldToolTipsnotestatus[""] = array();
	$placeHoldersnotestatus[""] = array();
	$pageTitlesnotestatus[""] = array();
	$fieldLabelsnotestatus[""]["NSID"] = "NSID";
	$fieldToolTipsnotestatus[""]["NSID"] = "";
	$placeHoldersnotestatus[""]["NSID"] = "";
	$fieldLabelsnotestatus[""]["CreatedDate"] = "Created Date";
	$fieldToolTipsnotestatus[""]["CreatedDate"] = "";
	$placeHoldersnotestatus[""]["CreatedDate"] = "";
	$fieldLabelsnotestatus[""]["NStatusDate"] = "NStatus Date";
	$fieldToolTipsnotestatus[""]["NStatusDate"] = "";
	$placeHoldersnotestatus[""]["NStatusDate"] = "";
	$fieldLabelsnotestatus[""]["NoteStatus"] = "Note Status";
	$fieldToolTipsnotestatus[""]["NoteStatus"] = "";
	$placeHoldersnotestatus[""]["NoteStatus"] = "";
	$fieldLabelsnotestatus[""]["Remarks"] = "Remarks";
	$fieldToolTipsnotestatus[""]["Remarks"] = "";
	$placeHoldersnotestatus[""]["Remarks"] = "";
	$fieldLabelsnotestatus[""]["NID"] = "NID";
	$fieldToolTipsnotestatus[""]["NID"] = "";
	$placeHoldersnotestatus[""]["NID"] = "";
	$fieldLabelsnotestatus[""]["UploadFile"] = "Upload File";
	$fieldToolTipsnotestatus[""]["UploadFile"] = "";
	$placeHoldersnotestatus[""]["UploadFile"] = "";
	$fieldLabelsnotestatus[""]["Encodedby"] = "Encodedby";
	$fieldToolTipsnotestatus[""]["Encodedby"] = "";
	$placeHoldersnotestatus[""]["Encodedby"] = "";
	$fieldLabelsnotestatus[""]["Closed"] = "Closed";
	$fieldToolTipsnotestatus[""]["Closed"] = "";
	$placeHoldersnotestatus[""]["Closed"] = "";
	if (count($fieldToolTipsnotestatus[""]))
		$tdatanotestatus[".isUseToolTips"] = true;
}


	$tdatanotestatus[".NCSearch"] = true;



$tdatanotestatus[".shortTableName"] = "notestatus";
$tdatanotestatus[".nSecOptions"] = 2;
$tdatanotestatus[".recsPerRowPrint"] = 1;
$tdatanotestatus[".mainTableOwnerID"] = "Encodedby";
$tdatanotestatus[".moveNext"] = 1;
$tdatanotestatus[".entityType"] = 0;

$tdatanotestatus[".strOriginalTableName"] = "notestatus";

	



$tdatanotestatus[".showAddInPopup"] = false;

$tdatanotestatus[".showEditInPopup"] = false;

$tdatanotestatus[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatanotestatus[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatanotestatus[".fieldsForRegister"] = array();

$tdatanotestatus[".listAjax"] = false;

	$tdatanotestatus[".audit"] = false;

	$tdatanotestatus[".locking"] = false;

$tdatanotestatus[".edit"] = true;
$tdatanotestatus[".afterEditAction"] = 0;
$tdatanotestatus[".closePopupAfterEdit"] = 1;
$tdatanotestatus[".afterEditActionDetTable"] = "Detail tables not found!";

$tdatanotestatus[".add"] = true;
$tdatanotestatus[".afterAddAction"] = 0;
$tdatanotestatus[".closePopupAfterAdd"] = 1;
$tdatanotestatus[".afterAddActionDetTable"] = "Detail tables not found!";

$tdatanotestatus[".list"] = true;

$tdatanotestatus[".inlineEdit"] = true;

$tdatanotestatus[".updateSelected"] = true;

$tdatanotestatus[".reorderRecordsByHeader"] = true;


$tdatanotestatus[".exportFormatting"] = 2;
$tdatanotestatus[".exportDelimiter"] = ",";
		
$tdatanotestatus[".inlineAdd"] = true;
$tdatanotestatus[".view"] = true;

$tdatanotestatus[".import"] = true;

$tdatanotestatus[".exportTo"] = true;

$tdatanotestatus[".printFriendly"] = true;

$tdatanotestatus[".delete"] = true;

$tdatanotestatus[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatanotestatus[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatanotestatus[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatanotestatus[".searchSaving"] = false;
//

$tdatanotestatus[".showSearchPanel"] = true;
		$tdatanotestatus[".flexibleSearch"] = true;

$tdatanotestatus[".isUseAjaxSuggest"] = true;

$tdatanotestatus[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																	
														

$tdatanotestatus[".ajaxCodeSnippetAdded"] = false;

$tdatanotestatus[".buttonsAdded"] = true;

$tdatanotestatus[".addPageEvents"] = true;

// use timepicker for search panel
$tdatanotestatus[".isUseTimeForSearch"] = false;



$tdatanotestatus[".badgeColor"] = "cfae83";


$tdatanotestatus[".allSearchFields"] = array();
$tdatanotestatus[".filterFields"] = array();
$tdatanotestatus[".requiredSearchFields"] = array();

$tdatanotestatus[".allSearchFields"][] = "Closed";
	$tdatanotestatus[".allSearchFields"][] = "NSID";
	$tdatanotestatus[".allSearchFields"][] = "CreatedDate";
	$tdatanotestatus[".allSearchFields"][] = "NStatusDate";
	$tdatanotestatus[".allSearchFields"][] = "NoteStatus";
	$tdatanotestatus[".allSearchFields"][] = "Remarks";
	$tdatanotestatus[".allSearchFields"][] = "UploadFile";
	$tdatanotestatus[".allSearchFields"][] = "Encodedby";
	$tdatanotestatus[".allSearchFields"][] = "NID";
	

$tdatanotestatus[".googleLikeFields"] = array();
$tdatanotestatus[".googleLikeFields"][] = "NSID";
$tdatanotestatus[".googleLikeFields"][] = "CreatedDate";
$tdatanotestatus[".googleLikeFields"][] = "NStatusDate";
$tdatanotestatus[".googleLikeFields"][] = "NoteStatus";
$tdatanotestatus[".googleLikeFields"][] = "Remarks";
$tdatanotestatus[".googleLikeFields"][] = "NID";
$tdatanotestatus[".googleLikeFields"][] = "UploadFile";
$tdatanotestatus[".googleLikeFields"][] = "Encodedby";
$tdatanotestatus[".googleLikeFields"][] = "Closed";


$tdatanotestatus[".advSearchFields"] = array();
$tdatanotestatus[".advSearchFields"][] = "Closed";
$tdatanotestatus[".advSearchFields"][] = "NSID";
$tdatanotestatus[".advSearchFields"][] = "CreatedDate";
$tdatanotestatus[".advSearchFields"][] = "NStatusDate";
$tdatanotestatus[".advSearchFields"][] = "NoteStatus";
$tdatanotestatus[".advSearchFields"][] = "Remarks";
$tdatanotestatus[".advSearchFields"][] = "UploadFile";
$tdatanotestatus[".advSearchFields"][] = "Encodedby";
$tdatanotestatus[".advSearchFields"][] = "NID";

$tdatanotestatus[".tableType"] = "list";

$tdatanotestatus[".printerPageOrientation"] = 0;
$tdatanotestatus[".nPrinterPageScale"] = 100;

$tdatanotestatus[".nPrinterSplitRecords"] = 40;

$tdatanotestatus[".nPrinterPDFSplitRecords"] = 40;



$tdatanotestatus[".geocodingEnabled"] = false;





$tdatanotestatus[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatanotestatus[".pageSize"] = 20;

$tdatanotestatus[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatanotestatus[".strOrderBy"] = $tstrOrderBy;

$tdatanotestatus[".orderindexes"] = array();

$tdatanotestatus[".sqlHead"] = "SELECT NSID,  	CreatedDate,  	NStatusDate,  	NoteStatus,  	Remarks,  	NID,  	UploadFile,  	Encodedby,  	Closed";
$tdatanotestatus[".sqlFrom"] = "FROM notestatus";
$tdatanotestatus[".sqlWhereExpr"] = "";
$tdatanotestatus[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanotestatus[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanotestatus[".arrGroupsPerPage"] = $arrGPP;

$tdatanotestatus[".highlightSearchResults"] = true;

$tableKeysnotestatus = array();
$tableKeysnotestatus[] = "NSID";
$tdatanotestatus[".Keys"] = $tableKeysnotestatus;

$tdatanotestatus[".listFields"] = array();
$tdatanotestatus[".listFields"][] = "NSID";
$tdatanotestatus[".listFields"][] = "CreatedDate";
$tdatanotestatus[".listFields"][] = "NStatusDate";
$tdatanotestatus[".listFields"][] = "NoteStatus";
$tdatanotestatus[".listFields"][] = "Remarks";
$tdatanotestatus[".listFields"][] = "UploadFile";
$tdatanotestatus[".listFields"][] = "Closed";
$tdatanotestatus[".listFields"][] = "Encodedby";
$tdatanotestatus[".listFields"][] = "NID";

$tdatanotestatus[".hideMobileList"] = array();


$tdatanotestatus[".viewFields"] = array();
$tdatanotestatus[".viewFields"][] = "Closed";
$tdatanotestatus[".viewFields"][] = "NSID";
$tdatanotestatus[".viewFields"][] = "CreatedDate";
$tdatanotestatus[".viewFields"][] = "NStatusDate";
$tdatanotestatus[".viewFields"][] = "NoteStatus";
$tdatanotestatus[".viewFields"][] = "Remarks";
$tdatanotestatus[".viewFields"][] = "UploadFile";
$tdatanotestatus[".viewFields"][] = "Encodedby";
$tdatanotestatus[".viewFields"][] = "NID";

$tdatanotestatus[".addFields"] = array();
$tdatanotestatus[".addFields"][] = "Closed";
$tdatanotestatus[".addFields"][] = "CreatedDate";
$tdatanotestatus[".addFields"][] = "NStatusDate";
$tdatanotestatus[".addFields"][] = "NoteStatus";
$tdatanotestatus[".addFields"][] = "Remarks";
$tdatanotestatus[".addFields"][] = "UploadFile";
$tdatanotestatus[".addFields"][] = "NID";

$tdatanotestatus[".masterListFields"] = array();
$tdatanotestatus[".masterListFields"][] = "Closed";
$tdatanotestatus[".masterListFields"][] = "NSID";
$tdatanotestatus[".masterListFields"][] = "CreatedDate";
$tdatanotestatus[".masterListFields"][] = "NStatusDate";
$tdatanotestatus[".masterListFields"][] = "NoteStatus";
$tdatanotestatus[".masterListFields"][] = "Remarks";
$tdatanotestatus[".masterListFields"][] = "UploadFile";
$tdatanotestatus[".masterListFields"][] = "Encodedby";
$tdatanotestatus[".masterListFields"][] = "NID";

$tdatanotestatus[".inlineAddFields"] = array();
$tdatanotestatus[".inlineAddFields"][] = "CreatedDate";
$tdatanotestatus[".inlineAddFields"][] = "NStatusDate";
$tdatanotestatus[".inlineAddFields"][] = "NoteStatus";
$tdatanotestatus[".inlineAddFields"][] = "Remarks";
$tdatanotestatus[".inlineAddFields"][] = "UploadFile";
$tdatanotestatus[".inlineAddFields"][] = "Closed";
$tdatanotestatus[".inlineAddFields"][] = "NID";

$tdatanotestatus[".editFields"] = array();
$tdatanotestatus[".editFields"][] = "Closed";
$tdatanotestatus[".editFields"][] = "CreatedDate";
$tdatanotestatus[".editFields"][] = "NStatusDate";
$tdatanotestatus[".editFields"][] = "NoteStatus";
$tdatanotestatus[".editFields"][] = "Remarks";
$tdatanotestatus[".editFields"][] = "UploadFile";
$tdatanotestatus[".editFields"][] = "Encodedby";
$tdatanotestatus[".editFields"][] = "NID";

$tdatanotestatus[".inlineEditFields"] = array();
$tdatanotestatus[".inlineEditFields"][] = "CreatedDate";
$tdatanotestatus[".inlineEditFields"][] = "NStatusDate";
$tdatanotestatus[".inlineEditFields"][] = "NoteStatus";
$tdatanotestatus[".inlineEditFields"][] = "Remarks";
$tdatanotestatus[".inlineEditFields"][] = "UploadFile";
$tdatanotestatus[".inlineEditFields"][] = "Closed";
$tdatanotestatus[".inlineEditFields"][] = "Encodedby";
$tdatanotestatus[".inlineEditFields"][] = "NID";

$tdatanotestatus[".updateSelectedFields"] = array();
$tdatanotestatus[".updateSelectedFields"][] = "CreatedDate";
$tdatanotestatus[".updateSelectedFields"][] = "NStatusDate";
$tdatanotestatus[".updateSelectedFields"][] = "NoteStatus";
$tdatanotestatus[".updateSelectedFields"][] = "Remarks";
$tdatanotestatus[".updateSelectedFields"][] = "UploadFile";
$tdatanotestatus[".updateSelectedFields"][] = "Encodedby";
$tdatanotestatus[".updateSelectedFields"][] = "NID";


$tdatanotestatus[".exportFields"] = array();
$tdatanotestatus[".exportFields"][] = "Closed";
$tdatanotestatus[".exportFields"][] = "NSID";
$tdatanotestatus[".exportFields"][] = "CreatedDate";
$tdatanotestatus[".exportFields"][] = "NStatusDate";
$tdatanotestatus[".exportFields"][] = "NoteStatus";
$tdatanotestatus[".exportFields"][] = "Remarks";
$tdatanotestatus[".exportFields"][] = "UploadFile";
$tdatanotestatus[".exportFields"][] = "Encodedby";
$tdatanotestatus[".exportFields"][] = "NID";

$tdatanotestatus[".importFields"] = array();
$tdatanotestatus[".importFields"][] = "NSID";
$tdatanotestatus[".importFields"][] = "CreatedDate";
$tdatanotestatus[".importFields"][] = "NStatusDate";
$tdatanotestatus[".importFields"][] = "NoteStatus";
$tdatanotestatus[".importFields"][] = "Remarks";
$tdatanotestatus[".importFields"][] = "NID";
$tdatanotestatus[".importFields"][] = "UploadFile";
$tdatanotestatus[".importFields"][] = "Encodedby";
$tdatanotestatus[".importFields"][] = "Closed";

$tdatanotestatus[".printFields"] = array();
$tdatanotestatus[".printFields"][] = "Closed";
$tdatanotestatus[".printFields"][] = "NSID";
$tdatanotestatus[".printFields"][] = "CreatedDate";
$tdatanotestatus[".printFields"][] = "NStatusDate";
$tdatanotestatus[".printFields"][] = "NoteStatus";
$tdatanotestatus[".printFields"][] = "Remarks";
$tdatanotestatus[".printFields"][] = "UploadFile";
$tdatanotestatus[".printFields"][] = "Encodedby";
$tdatanotestatus[".printFields"][] = "NID";


//	NSID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "NSID";
	$fdata["GoodName"] = "NSID";
	$fdata["ownerTable"] = "notestatus";
	$fdata["Label"] = GetFieldLabel("notestatus","NSID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NSID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NSID";

	
	
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




	$tdatanotestatus["NSID"] = $fdata;
//	CreatedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CreatedDate";
	$fdata["GoodName"] = "CreatedDate";
	$fdata["ownerTable"] = "notestatus";
	$fdata["Label"] = GetFieldLabel("notestatus","CreatedDate");
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
	$fdata["FullName"] = "CreatedDate";

	
	
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




	$tdatanotestatus["CreatedDate"] = $fdata;
//	NStatusDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NStatusDate";
	$fdata["GoodName"] = "NStatusDate";
	$fdata["ownerTable"] = "notestatus";
	$fdata["Label"] = GetFieldLabel("notestatus","NStatusDate");
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

		$fdata["strField"] = "NStatusDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NStatusDate";

	
	
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




	$tdatanotestatus["NStatusDate"] = $fdata;
//	NoteStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "NoteStatus";
	$fdata["GoodName"] = "NoteStatus";
	$fdata["ownerTable"] = "notestatus";
	$fdata["Label"] = GetFieldLabel("notestatus","NoteStatus");
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

		$fdata["strField"] = "NoteStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NoteStatus";

	
	
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




	$tdatanotestatus["NoteStatus"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "notestatus";
	$fdata["Label"] = GetFieldLabel("notestatus","Remarks");
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
	$fdata["FullName"] = "Remarks";

	
	
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
			$edata["EditParams"].= " maxlength=80";

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




	$tdatanotestatus["Remarks"] = $fdata;
//	NID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "NID";
	$fdata["GoodName"] = "NID";
	$fdata["ownerTable"] = "notestatus";
	$fdata["Label"] = GetFieldLabel("notestatus","NID");
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

		$fdata["strField"] = "NID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NID";

	
	
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




	$tdatanotestatus["NID"] = $fdata;
//	UploadFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "UploadFile";
	$fdata["GoodName"] = "UploadFile";
	$fdata["ownerTable"] = "notestatus";
	$fdata["Label"] = GetFieldLabel("notestatus","UploadFile");
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




	$tdatanotestatus["UploadFile"] = $fdata;
//	Encodedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Encodedby";
	$fdata["GoodName"] = "Encodedby";
	$fdata["ownerTable"] = "notestatus";
	$fdata["Label"] = GetFieldLabel("notestatus","Encodedby");
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
	$fdata["FullName"] = "Encodedby";

	
	
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




	$tdatanotestatus["Encodedby"] = $fdata;
//	Closed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Closed";
	$fdata["GoodName"] = "Closed";
	$fdata["ownerTable"] = "notestatus";
	$fdata["Label"] = GetFieldLabel("notestatus","Closed");
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

		$fdata["strField"] = "Closed";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Closed";

	
	
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




	$tdatanotestatus["Closed"] = $fdata;


$tables_data["notestatus"]=&$tdatanotestatus;
$field_labels["notestatus"] = &$fieldLabelsnotestatus;
$fieldToolTips["notestatus"] = &$fieldToolTipsnotestatus;
$placeHolders["notestatus"] = &$placeHoldersnotestatus;
$page_titles["notestatus"] = &$pageTitlesnotestatus;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["notestatus"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["notestatus"] = array();


	
				$strOriginalDetailsTable="notes";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="notes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "notes";
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
					$masterTablesData["notestatus"][0] = $masterParams;
				$masterTablesData["notestatus"][0]["masterKeys"] = array();
	$masterTablesData["notestatus"][0]["masterKeys"][]="NID";
				$masterTablesData["notestatus"][0]["detailKeys"] = array();
	$masterTablesData["notestatus"][0]["detailKeys"][]="NID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_notestatus()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "NSID,  	CreatedDate,  	NStatusDate,  	NoteStatus,  	Remarks,  	NID,  	UploadFile,  	Encodedby,  	Closed";
$proto0["m_strFrom"] = "FROM notestatus";
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
	"m_strName" => "NSID",
	"m_strTable" => "notestatus",
	"m_srcTableName" => "notestatus"
));

$proto6["m_sql"] = "NSID";
$proto6["m_srcTableName"] = "notestatus";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CreatedDate",
	"m_strTable" => "notestatus",
	"m_srcTableName" => "notestatus"
));

$proto8["m_sql"] = "CreatedDate";
$proto8["m_srcTableName"] = "notestatus";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NStatusDate",
	"m_strTable" => "notestatus",
	"m_srcTableName" => "notestatus"
));

$proto10["m_sql"] = "NStatusDate";
$proto10["m_srcTableName"] = "notestatus";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NoteStatus",
	"m_strTable" => "notestatus",
	"m_srcTableName" => "notestatus"
));

$proto12["m_sql"] = "NoteStatus";
$proto12["m_srcTableName"] = "notestatus";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "notestatus",
	"m_srcTableName" => "notestatus"
));

$proto14["m_sql"] = "Remarks";
$proto14["m_srcTableName"] = "notestatus";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "NID",
	"m_strTable" => "notestatus",
	"m_srcTableName" => "notestatus"
));

$proto16["m_sql"] = "NID";
$proto16["m_srcTableName"] = "notestatus";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "UploadFile",
	"m_strTable" => "notestatus",
	"m_srcTableName" => "notestatus"
));

$proto18["m_sql"] = "UploadFile";
$proto18["m_srcTableName"] = "notestatus";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Encodedby",
	"m_strTable" => "notestatus",
	"m_srcTableName" => "notestatus"
));

$proto20["m_sql"] = "Encodedby";
$proto20["m_srcTableName"] = "notestatus";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Closed",
	"m_strTable" => "notestatus",
	"m_srcTableName" => "notestatus"
));

$proto22["m_sql"] = "Closed";
$proto22["m_srcTableName"] = "notestatus";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "notestatus";
$proto25["m_srcTableName"] = "notestatus";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "NSID";
$proto25["m_columns"][] = "CreatedDate";
$proto25["m_columns"][] = "NStatusDate";
$proto25["m_columns"][] = "NoteStatus";
$proto25["m_columns"][] = "Remarks";
$proto25["m_columns"][] = "NID";
$proto25["m_columns"][] = "UploadFile";
$proto25["m_columns"][] = "Encodedby";
$proto25["m_columns"][] = "Closed";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "notestatus";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "notestatus";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="notestatus";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_notestatus = createSqlQuery_notestatus();


	
		;

									

$tdatanotestatus[".sqlquery"] = $queryData_notestatus;

include_once(getabspath("include/notestatus_events.php"));
$tableEvents["notestatus"] = new eventclass_notestatus;
$tdatanotestatus[".hasEvents"] = true;

?>