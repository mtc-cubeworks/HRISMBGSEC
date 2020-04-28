<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacontrolin = array();
	$tdatacontrolin[".truncateText"] = true;
	$tdatacontrolin[".NumberOfChars"] = 80;
	$tdatacontrolin[".ShortName"] = "controlin";
	$tdatacontrolin[".OwnerID"] = "";
	$tdatacontrolin[".OriginalTable"] = "controlin";

//	field labels
$fieldLabelscontrolin = array();
$fieldToolTipscontrolin = array();
$pageTitlescontrolin = array();
$placeHolderscontrolin = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscontrolin["English"] = array();
	$fieldToolTipscontrolin["English"] = array();
	$placeHolderscontrolin["English"] = array();
	$pageTitlescontrolin["English"] = array();
	$fieldLabelscontrolin["English"]["iID"] = "I ID";
	$fieldToolTipscontrolin["English"]["iID"] = "";
	$placeHolderscontrolin["English"]["iID"] = "";
	$fieldLabelscontrolin["English"]["NoTimeInFrom"] = "No Time In From";
	$fieldToolTipscontrolin["English"]["NoTimeInFrom"] = "";
	$placeHolderscontrolin["English"]["NoTimeInFrom"] = "";
	$fieldLabelscontrolin["English"]["NoTimeInTo"] = "No TIme In To";
	$fieldToolTipscontrolin["English"]["NoTimeInTo"] = "";
	$placeHolderscontrolin["English"]["NoTimeInTo"] = "";
	$fieldLabelscontrolin["English"]["NoTimeInFrom2"] = "No Time In From2";
	$fieldToolTipscontrolin["English"]["NoTimeInFrom2"] = "";
	$placeHolderscontrolin["English"]["NoTimeInFrom2"] = "";
	$fieldLabelscontrolin["English"]["NoTimeInTo2"] = "No Time In To2";
	$fieldToolTipscontrolin["English"]["NoTimeInTo2"] = "";
	$placeHolderscontrolin["English"]["NoTimeInTo2"] = "";
	$fieldLabelscontrolin["English"]["Division"] = "Division";
	$fieldToolTipscontrolin["English"]["Division"] = "";
	$placeHolderscontrolin["English"]["Division"] = "";
	if (count($fieldToolTipscontrolin["English"]))
		$tdatacontrolin[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscontrolin[""] = array();
	$fieldToolTipscontrolin[""] = array();
	$placeHolderscontrolin[""] = array();
	$pageTitlescontrolin[""] = array();
	if (count($fieldToolTipscontrolin[""]))
		$tdatacontrolin[".isUseToolTips"] = true;
}


	$tdatacontrolin[".NCSearch"] = true;



$tdatacontrolin[".shortTableName"] = "controlin";
$tdatacontrolin[".nSecOptions"] = 0;
$tdatacontrolin[".recsPerRowPrint"] = 1;
$tdatacontrolin[".mainTableOwnerID"] = "";
$tdatacontrolin[".moveNext"] = 1;
$tdatacontrolin[".entityType"] = 0;

$tdatacontrolin[".strOriginalTableName"] = "controlin";

	



$tdatacontrolin[".showAddInPopup"] = false;

$tdatacontrolin[".showEditInPopup"] = false;

$tdatacontrolin[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacontrolin[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacontrolin[".fieldsForRegister"] = array();

$tdatacontrolin[".listAjax"] = false;

	$tdatacontrolin[".audit"] = false;

	$tdatacontrolin[".locking"] = false;

$tdatacontrolin[".edit"] = true;
$tdatacontrolin[".afterEditAction"] = 1;
$tdatacontrolin[".closePopupAfterEdit"] = 1;
$tdatacontrolin[".afterEditActionDetTable"] = "";

$tdatacontrolin[".add"] = true;
$tdatacontrolin[".afterAddAction"] = 1;
$tdatacontrolin[".closePopupAfterAdd"] = 1;
$tdatacontrolin[".afterAddActionDetTable"] = "";

$tdatacontrolin[".list"] = true;

$tdatacontrolin[".inlineEdit"] = true;

$tdatacontrolin[".updateSelected"] = true;

$tdatacontrolin[".reorderRecordsByHeader"] = true;


$tdatacontrolin[".exportFormatting"] = 2;
$tdatacontrolin[".exportDelimiter"] = ",";
		
$tdatacontrolin[".inlineAdd"] = true;
$tdatacontrolin[".view"] = true;

$tdatacontrolin[".import"] = true;

$tdatacontrolin[".exportTo"] = true;

$tdatacontrolin[".printFriendly"] = true;

$tdatacontrolin[".delete"] = true;

$tdatacontrolin[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacontrolin[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatacontrolin[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatacontrolin[".searchSaving"] = false;
//

$tdatacontrolin[".showSearchPanel"] = true;
		$tdatacontrolin[".flexibleSearch"] = true;

$tdatacontrolin[".isUseAjaxSuggest"] = true;

$tdatacontrolin[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdatacontrolin[".ajaxCodeSnippetAdded"] = false;

$tdatacontrolin[".buttonsAdded"] = false;

$tdatacontrolin[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrolin[".isUseTimeForSearch"] = true;





$tdatacontrolin[".allSearchFields"] = array();
$tdatacontrolin[".filterFields"] = array();
$tdatacontrolin[".requiredSearchFields"] = array();

$tdatacontrolin[".allSearchFields"][] = "Division";
	$tdatacontrolin[".allSearchFields"][] = "iID";
	$tdatacontrolin[".allSearchFields"][] = "NoTimeInFrom";
	$tdatacontrolin[".allSearchFields"][] = "NoTimeInTo";
	$tdatacontrolin[".allSearchFields"][] = "NoTimeInFrom2";
	$tdatacontrolin[".allSearchFields"][] = "NoTimeInTo2";
	

$tdatacontrolin[".googleLikeFields"] = array();
$tdatacontrolin[".googleLikeFields"][] = "iID";
$tdatacontrolin[".googleLikeFields"][] = "Division";
$tdatacontrolin[".googleLikeFields"][] = "NoTimeInFrom";
$tdatacontrolin[".googleLikeFields"][] = "NoTimeInTo";
$tdatacontrolin[".googleLikeFields"][] = "NoTimeInFrom2";
$tdatacontrolin[".googleLikeFields"][] = "NoTimeInTo2";


$tdatacontrolin[".advSearchFields"] = array();
$tdatacontrolin[".advSearchFields"][] = "Division";
$tdatacontrolin[".advSearchFields"][] = "iID";
$tdatacontrolin[".advSearchFields"][] = "NoTimeInFrom";
$tdatacontrolin[".advSearchFields"][] = "NoTimeInTo";
$tdatacontrolin[".advSearchFields"][] = "NoTimeInFrom2";
$tdatacontrolin[".advSearchFields"][] = "NoTimeInTo2";

$tdatacontrolin[".tableType"] = "list";

$tdatacontrolin[".printerPageOrientation"] = 0;
$tdatacontrolin[".nPrinterPageScale"] = 100;

$tdatacontrolin[".nPrinterSplitRecords"] = 40;

$tdatacontrolin[".nPrinterPDFSplitRecords"] = 40;



$tdatacontrolin[".geocodingEnabled"] = false;





$tdatacontrolin[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatacontrolin[".pageSize"] = 20;

$tdatacontrolin[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacontrolin[".strOrderBy"] = $tstrOrderBy;

$tdatacontrolin[".orderindexes"] = array();

$tdatacontrolin[".sqlHead"] = "SELECT iID,  	Division,  	NoTimeInFrom,  	NoTimeInTo,  	NoTimeInFrom2,  	NoTimeInTo2";
$tdatacontrolin[".sqlFrom"] = "FROM controlin";
$tdatacontrolin[".sqlWhereExpr"] = "";
$tdatacontrolin[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrolin[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrolin[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrolin[".highlightSearchResults"] = true;

$tableKeyscontrolin = array();
$tableKeyscontrolin[] = "iID";
$tdatacontrolin[".Keys"] = $tableKeyscontrolin;

$tdatacontrolin[".listFields"] = array();
$tdatacontrolin[".listFields"][] = "Division";
$tdatacontrolin[".listFields"][] = "iID";
$tdatacontrolin[".listFields"][] = "NoTimeInFrom";
$tdatacontrolin[".listFields"][] = "NoTimeInTo";
$tdatacontrolin[".listFields"][] = "NoTimeInFrom2";
$tdatacontrolin[".listFields"][] = "NoTimeInTo2";

$tdatacontrolin[".hideMobileList"] = array();


$tdatacontrolin[".viewFields"] = array();
$tdatacontrolin[".viewFields"][] = "Division";
$tdatacontrolin[".viewFields"][] = "iID";
$tdatacontrolin[".viewFields"][] = "NoTimeInFrom";
$tdatacontrolin[".viewFields"][] = "NoTimeInTo";
$tdatacontrolin[".viewFields"][] = "NoTimeInFrom2";
$tdatacontrolin[".viewFields"][] = "NoTimeInTo2";

$tdatacontrolin[".addFields"] = array();
$tdatacontrolin[".addFields"][] = "Division";
$tdatacontrolin[".addFields"][] = "NoTimeInFrom";
$tdatacontrolin[".addFields"][] = "NoTimeInTo";
$tdatacontrolin[".addFields"][] = "NoTimeInFrom2";
$tdatacontrolin[".addFields"][] = "NoTimeInTo2";

$tdatacontrolin[".masterListFields"] = array();
$tdatacontrolin[".masterListFields"][] = "Division";
$tdatacontrolin[".masterListFields"][] = "iID";
$tdatacontrolin[".masterListFields"][] = "NoTimeInFrom";
$tdatacontrolin[".masterListFields"][] = "NoTimeInTo";
$tdatacontrolin[".masterListFields"][] = "NoTimeInFrom2";
$tdatacontrolin[".masterListFields"][] = "NoTimeInTo2";

$tdatacontrolin[".inlineAddFields"] = array();
$tdatacontrolin[".inlineAddFields"][] = "Division";
$tdatacontrolin[".inlineAddFields"][] = "NoTimeInFrom";
$tdatacontrolin[".inlineAddFields"][] = "NoTimeInTo";
$tdatacontrolin[".inlineAddFields"][] = "NoTimeInFrom2";
$tdatacontrolin[".inlineAddFields"][] = "NoTimeInTo2";

$tdatacontrolin[".editFields"] = array();
$tdatacontrolin[".editFields"][] = "Division";
$tdatacontrolin[".editFields"][] = "NoTimeInFrom";
$tdatacontrolin[".editFields"][] = "NoTimeInTo";
$tdatacontrolin[".editFields"][] = "NoTimeInFrom2";
$tdatacontrolin[".editFields"][] = "NoTimeInTo2";

$tdatacontrolin[".inlineEditFields"] = array();
$tdatacontrolin[".inlineEditFields"][] = "Division";
$tdatacontrolin[".inlineEditFields"][] = "NoTimeInFrom";
$tdatacontrolin[".inlineEditFields"][] = "NoTimeInTo";
$tdatacontrolin[".inlineEditFields"][] = "NoTimeInFrom2";
$tdatacontrolin[".inlineEditFields"][] = "NoTimeInTo2";

$tdatacontrolin[".updateSelectedFields"] = array();
$tdatacontrolin[".updateSelectedFields"][] = "Division";
$tdatacontrolin[".updateSelectedFields"][] = "NoTimeInFrom";
$tdatacontrolin[".updateSelectedFields"][] = "NoTimeInTo";
$tdatacontrolin[".updateSelectedFields"][] = "NoTimeInFrom2";
$tdatacontrolin[".updateSelectedFields"][] = "NoTimeInTo2";


$tdatacontrolin[".exportFields"] = array();
$tdatacontrolin[".exportFields"][] = "Division";
$tdatacontrolin[".exportFields"][] = "iID";
$tdatacontrolin[".exportFields"][] = "NoTimeInFrom";
$tdatacontrolin[".exportFields"][] = "NoTimeInTo";
$tdatacontrolin[".exportFields"][] = "NoTimeInFrom2";
$tdatacontrolin[".exportFields"][] = "NoTimeInTo2";

$tdatacontrolin[".importFields"] = array();
$tdatacontrolin[".importFields"][] = "iID";
$tdatacontrolin[".importFields"][] = "Division";
$tdatacontrolin[".importFields"][] = "NoTimeInFrom";
$tdatacontrolin[".importFields"][] = "NoTimeInTo";
$tdatacontrolin[".importFields"][] = "NoTimeInFrom2";
$tdatacontrolin[".importFields"][] = "NoTimeInTo2";

$tdatacontrolin[".printFields"] = array();
$tdatacontrolin[".printFields"][] = "Division";
$tdatacontrolin[".printFields"][] = "iID";
$tdatacontrolin[".printFields"][] = "NoTimeInFrom";
$tdatacontrolin[".printFields"][] = "NoTimeInTo";
$tdatacontrolin[".printFields"][] = "NoTimeInFrom2";
$tdatacontrolin[".printFields"][] = "NoTimeInTo2";


//	iID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "iID";
	$fdata["GoodName"] = "iID";
	$fdata["ownerTable"] = "controlin";
	$fdata["Label"] = GetFieldLabel("controlin","iID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "iID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "iID";

	
	
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
		
		$edata["controlWidth"] = 100;

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacontrolin["iID"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "controlin";
	$fdata["Label"] = GetFieldLabel("controlin","Division");
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

		$fdata["strField"] = "Division";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Division";

	
	
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
	$edata["LookupTable"] = "divisions";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DvID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Division";
	
	

	
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




	$tdatacontrolin["Division"] = $fdata;
//	NoTimeInFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NoTimeInFrom";
	$fdata["GoodName"] = "NoTimeInFrom";
	$fdata["ownerTable"] = "controlin";
	$fdata["Label"] = GetFieldLabel("controlin","NoTimeInFrom");
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

		$fdata["strField"] = "NoTimeInFrom";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NoTimeInFrom";

	
	
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
		
		$edata["controlWidth"] = 110;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
	//	End validation

	
			
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 1);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatacontrolin["NoTimeInFrom"] = $fdata;
//	NoTimeInTo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "NoTimeInTo";
	$fdata["GoodName"] = "NoTimeInTo";
	$fdata["ownerTable"] = "controlin";
	$fdata["Label"] = GetFieldLabel("controlin","NoTimeInTo");
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

		$fdata["strField"] = "NoTimeInTo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NoTimeInTo";

	
	
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
		
		$edata["controlWidth"] = 110;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
	//	End validation

	
			
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 1);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatacontrolin["NoTimeInTo"] = $fdata;
//	NoTimeInFrom2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "NoTimeInFrom2";
	$fdata["GoodName"] = "NoTimeInFrom2";
	$fdata["ownerTable"] = "controlin";
	$fdata["Label"] = GetFieldLabel("controlin","NoTimeInFrom2");
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

		$fdata["strField"] = "NoTimeInFrom2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NoTimeInFrom2";

	
	
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
		
		$edata["controlWidth"] = 110;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
	//	End validation

	
			
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 1);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatacontrolin["NoTimeInFrom2"] = $fdata;
//	NoTimeInTo2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "NoTimeInTo2";
	$fdata["GoodName"] = "NoTimeInTo2";
	$fdata["ownerTable"] = "controlin";
	$fdata["Label"] = GetFieldLabel("controlin","NoTimeInTo2");
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

		$fdata["strField"] = "NoTimeInTo2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NoTimeInTo2";

	
	
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
		
		$edata["controlWidth"] = 110;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
	//	End validation

	
			
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 1);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatacontrolin["NoTimeInTo2"] = $fdata;


$tables_data["controlin"]=&$tdatacontrolin;
$field_labels["controlin"] = &$fieldLabelscontrolin;
$fieldToolTips["controlin"] = &$fieldToolTipscontrolin;
$placeHolders["controlin"] = &$placeHolderscontrolin;
$page_titles["controlin"] = &$pageTitlescontrolin;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["controlin"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["controlin"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_controlin()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "iID,  	Division,  	NoTimeInFrom,  	NoTimeInTo,  	NoTimeInFrom2,  	NoTimeInTo2";
$proto0["m_strFrom"] = "FROM controlin";
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
	"m_strName" => "iID",
	"m_strTable" => "controlin",
	"m_srcTableName" => "controlin"
));

$proto6["m_sql"] = "iID";
$proto6["m_srcTableName"] = "controlin";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "controlin",
	"m_srcTableName" => "controlin"
));

$proto8["m_sql"] = "Division";
$proto8["m_srcTableName"] = "controlin";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NoTimeInFrom",
	"m_strTable" => "controlin",
	"m_srcTableName" => "controlin"
));

$proto10["m_sql"] = "NoTimeInFrom";
$proto10["m_srcTableName"] = "controlin";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NoTimeInTo",
	"m_strTable" => "controlin",
	"m_srcTableName" => "controlin"
));

$proto12["m_sql"] = "NoTimeInTo";
$proto12["m_srcTableName"] = "controlin";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "NoTimeInFrom2",
	"m_strTable" => "controlin",
	"m_srcTableName" => "controlin"
));

$proto14["m_sql"] = "NoTimeInFrom2";
$proto14["m_srcTableName"] = "controlin";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "NoTimeInTo2",
	"m_strTable" => "controlin",
	"m_srcTableName" => "controlin"
));

$proto16["m_sql"] = "NoTimeInTo2";
$proto16["m_srcTableName"] = "controlin";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "controlin";
$proto19["m_srcTableName"] = "controlin";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "iID";
$proto19["m_columns"][] = "Division";
$proto19["m_columns"][] = "NoTimeInFrom";
$proto19["m_columns"][] = "NoTimeInTo";
$proto19["m_columns"][] = "NoTimeInFrom2";
$proto19["m_columns"][] = "NoTimeInTo2";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "controlin";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "controlin";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="controlin";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_controlin = createSqlQuery_controlin();


	
		;

						

$tdatacontrolin[".sqlquery"] = $queryData_controlin;

$tableEvents["controlin"] = new eventsBase;
$tdatacontrolin[".hasEvents"] = false;

?>