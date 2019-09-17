<?php
require_once(getabspath("classes/cipherer.php"));




$tdataaddbreaks = array();
	$tdataaddbreaks[".truncateText"] = true;
	$tdataaddbreaks[".NumberOfChars"] = 80;
	$tdataaddbreaks[".ShortName"] = "addbreaks";
	$tdataaddbreaks[".OwnerID"] = "";
	$tdataaddbreaks[".OriginalTable"] = "addbreaks";

//	field labels
$fieldLabelsaddbreaks = array();
$fieldToolTipsaddbreaks = array();
$pageTitlesaddbreaks = array();
$placeHoldersaddbreaks = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsaddbreaks["English"] = array();
	$fieldToolTipsaddbreaks["English"] = array();
	$placeHoldersaddbreaks["English"] = array();
	$pageTitlesaddbreaks["English"] = array();
	$fieldLabelsaddbreaks["English"]["BrkID"] = "Brk ID";
	$fieldToolTipsaddbreaks["English"]["BrkID"] = "";
	$placeHoldersaddbreaks["English"]["BrkID"] = "";
	$fieldLabelsaddbreaks["English"]["BreakoutLimit"] = "Break Out Limit";
	$fieldToolTipsaddbreaks["English"]["BreakoutLimit"] = "";
	$placeHoldersaddbreaks["English"]["BreakoutLimit"] = "";
	$fieldLabelsaddbreaks["English"]["BreakInLimit"] = "Break In Limit";
	$fieldToolTipsaddbreaks["English"]["BreakInLimit"] = "";
	$placeHoldersaddbreaks["English"]["BreakInLimit"] = "";
	$fieldLabelsaddbreaks["English"]["AllowedBreakMins"] = "Allowed Break Mins";
	$fieldToolTipsaddbreaks["English"]["AllowedBreakMins"] = "";
	$placeHoldersaddbreaks["English"]["AllowedBreakMins"] = "";
	$fieldLabelsaddbreaks["English"]["shID"] = "Sh ID";
	$fieldToolTipsaddbreaks["English"]["shID"] = "";
	$placeHoldersaddbreaks["English"]["shID"] = "";
	if (count($fieldToolTipsaddbreaks["English"]))
		$tdataaddbreaks[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsaddbreaks[""] = array();
	$fieldToolTipsaddbreaks[""] = array();
	$placeHoldersaddbreaks[""] = array();
	$pageTitlesaddbreaks[""] = array();
	if (count($fieldToolTipsaddbreaks[""]))
		$tdataaddbreaks[".isUseToolTips"] = true;
}


	$tdataaddbreaks[".NCSearch"] = true;



$tdataaddbreaks[".shortTableName"] = "addbreaks";
$tdataaddbreaks[".nSecOptions"] = 0;
$tdataaddbreaks[".recsPerRowPrint"] = 1;
$tdataaddbreaks[".mainTableOwnerID"] = "";
$tdataaddbreaks[".moveNext"] = 1;
$tdataaddbreaks[".entityType"] = 0;

$tdataaddbreaks[".strOriginalTableName"] = "addbreaks";

	



$tdataaddbreaks[".showAddInPopup"] = false;

$tdataaddbreaks[".showEditInPopup"] = false;

$tdataaddbreaks[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataaddbreaks[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataaddbreaks[".fieldsForRegister"] = array();

$tdataaddbreaks[".listAjax"] = false;

	$tdataaddbreaks[".audit"] = false;

	$tdataaddbreaks[".locking"] = false;

$tdataaddbreaks[".edit"] = true;
$tdataaddbreaks[".afterEditAction"] = 1;
$tdataaddbreaks[".closePopupAfterEdit"] = 1;
$tdataaddbreaks[".afterEditActionDetTable"] = "";

$tdataaddbreaks[".add"] = true;
$tdataaddbreaks[".afterAddAction"] = 1;
$tdataaddbreaks[".closePopupAfterAdd"] = 1;
$tdataaddbreaks[".afterAddActionDetTable"] = "";

$tdataaddbreaks[".list"] = true;

$tdataaddbreaks[".inlineEdit"] = true;


$tdataaddbreaks[".reorderRecordsByHeader"] = true;


$tdataaddbreaks[".exportFormatting"] = 2;
$tdataaddbreaks[".exportDelimiter"] = ",";
		
$tdataaddbreaks[".inlineAdd"] = true;
$tdataaddbreaks[".view"] = true;

$tdataaddbreaks[".import"] = true;

$tdataaddbreaks[".exportTo"] = true;

$tdataaddbreaks[".printFriendly"] = true;

$tdataaddbreaks[".delete"] = true;

$tdataaddbreaks[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataaddbreaks[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataaddbreaks[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataaddbreaks[".searchSaving"] = false;
//

$tdataaddbreaks[".showSearchPanel"] = true;
		$tdataaddbreaks[".flexibleSearch"] = true;

$tdataaddbreaks[".isUseAjaxSuggest"] = true;

$tdataaddbreaks[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																				

$tdataaddbreaks[".ajaxCodeSnippetAdded"] = false;

$tdataaddbreaks[".buttonsAdded"] = false;

$tdataaddbreaks[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaddbreaks[".isUseTimeForSearch"] = true;



$tdataaddbreaks[".badgeColor"] = "db7093";


$tdataaddbreaks[".allSearchFields"] = array();
$tdataaddbreaks[".filterFields"] = array();
$tdataaddbreaks[".requiredSearchFields"] = array();

$tdataaddbreaks[".allSearchFields"][] = "BrkID";
	$tdataaddbreaks[".allSearchFields"][] = "BreakoutLimit";
	$tdataaddbreaks[".allSearchFields"][] = "BreakInLimit";
	$tdataaddbreaks[".allSearchFields"][] = "AllowedBreakMins";
	$tdataaddbreaks[".allSearchFields"][] = "shID";
	

$tdataaddbreaks[".googleLikeFields"] = array();
$tdataaddbreaks[".googleLikeFields"][] = "BrkID";
$tdataaddbreaks[".googleLikeFields"][] = "BreakoutLimit";
$tdataaddbreaks[".googleLikeFields"][] = "BreakInLimit";
$tdataaddbreaks[".googleLikeFields"][] = "AllowedBreakMins";
$tdataaddbreaks[".googleLikeFields"][] = "shID";


$tdataaddbreaks[".advSearchFields"] = array();
$tdataaddbreaks[".advSearchFields"][] = "BrkID";
$tdataaddbreaks[".advSearchFields"][] = "BreakoutLimit";
$tdataaddbreaks[".advSearchFields"][] = "BreakInLimit";
$tdataaddbreaks[".advSearchFields"][] = "AllowedBreakMins";
$tdataaddbreaks[".advSearchFields"][] = "shID";

$tdataaddbreaks[".tableType"] = "list";

$tdataaddbreaks[".printerPageOrientation"] = 0;
$tdataaddbreaks[".nPrinterPageScale"] = 100;

$tdataaddbreaks[".nPrinterSplitRecords"] = 40;

$tdataaddbreaks[".nPrinterPDFSplitRecords"] = 40;



$tdataaddbreaks[".geocodingEnabled"] = false;





$tdataaddbreaks[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataaddbreaks[".pageSize"] = 20;

$tdataaddbreaks[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataaddbreaks[".strOrderBy"] = $tstrOrderBy;

$tdataaddbreaks[".orderindexes"] = array();

$tdataaddbreaks[".sqlHead"] = "SELECT BrkID,  	BreakoutLimit,  	BreakInLimit,  	AllowedBreakMins,  	shID";
$tdataaddbreaks[".sqlFrom"] = "FROM addbreaks";
$tdataaddbreaks[".sqlWhereExpr"] = "";
$tdataaddbreaks[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaddbreaks[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaddbreaks[".arrGroupsPerPage"] = $arrGPP;

$tdataaddbreaks[".highlightSearchResults"] = true;

$tableKeysaddbreaks = array();
$tableKeysaddbreaks[] = "BrkID";
$tdataaddbreaks[".Keys"] = $tableKeysaddbreaks;

$tdataaddbreaks[".listFields"] = array();
$tdataaddbreaks[".listFields"][] = "BrkID";
$tdataaddbreaks[".listFields"][] = "BreakoutLimit";
$tdataaddbreaks[".listFields"][] = "BreakInLimit";
$tdataaddbreaks[".listFields"][] = "AllowedBreakMins";
$tdataaddbreaks[".listFields"][] = "shID";

$tdataaddbreaks[".hideMobileList"] = array();


$tdataaddbreaks[".viewFields"] = array();
$tdataaddbreaks[".viewFields"][] = "BrkID";
$tdataaddbreaks[".viewFields"][] = "BreakoutLimit";
$tdataaddbreaks[".viewFields"][] = "BreakInLimit";
$tdataaddbreaks[".viewFields"][] = "AllowedBreakMins";
$tdataaddbreaks[".viewFields"][] = "shID";

$tdataaddbreaks[".addFields"] = array();
$tdataaddbreaks[".addFields"][] = "BreakoutLimit";
$tdataaddbreaks[".addFields"][] = "BreakInLimit";
$tdataaddbreaks[".addFields"][] = "AllowedBreakMins";
$tdataaddbreaks[".addFields"][] = "shID";

$tdataaddbreaks[".masterListFields"] = array();
$tdataaddbreaks[".masterListFields"][] = "BrkID";
$tdataaddbreaks[".masterListFields"][] = "BreakoutLimit";
$tdataaddbreaks[".masterListFields"][] = "BreakInLimit";
$tdataaddbreaks[".masterListFields"][] = "AllowedBreakMins";
$tdataaddbreaks[".masterListFields"][] = "shID";

$tdataaddbreaks[".inlineAddFields"] = array();
$tdataaddbreaks[".inlineAddFields"][] = "BreakoutLimit";
$tdataaddbreaks[".inlineAddFields"][] = "BreakInLimit";
$tdataaddbreaks[".inlineAddFields"][] = "AllowedBreakMins";
$tdataaddbreaks[".inlineAddFields"][] = "shID";

$tdataaddbreaks[".editFields"] = array();
$tdataaddbreaks[".editFields"][] = "BreakoutLimit";
$tdataaddbreaks[".editFields"][] = "BreakInLimit";
$tdataaddbreaks[".editFields"][] = "AllowedBreakMins";
$tdataaddbreaks[".editFields"][] = "shID";

$tdataaddbreaks[".inlineEditFields"] = array();
$tdataaddbreaks[".inlineEditFields"][] = "BreakoutLimit";
$tdataaddbreaks[".inlineEditFields"][] = "BreakInLimit";
$tdataaddbreaks[".inlineEditFields"][] = "AllowedBreakMins";
$tdataaddbreaks[".inlineEditFields"][] = "shID";

$tdataaddbreaks[".updateSelectedFields"] = array();
$tdataaddbreaks[".updateSelectedFields"][] = "BreakoutLimit";
$tdataaddbreaks[".updateSelectedFields"][] = "BreakInLimit";
$tdataaddbreaks[".updateSelectedFields"][] = "AllowedBreakMins";
$tdataaddbreaks[".updateSelectedFields"][] = "shID";


$tdataaddbreaks[".exportFields"] = array();
$tdataaddbreaks[".exportFields"][] = "BrkID";
$tdataaddbreaks[".exportFields"][] = "BreakoutLimit";
$tdataaddbreaks[".exportFields"][] = "BreakInLimit";
$tdataaddbreaks[".exportFields"][] = "AllowedBreakMins";
$tdataaddbreaks[".exportFields"][] = "shID";

$tdataaddbreaks[".importFields"] = array();
$tdataaddbreaks[".importFields"][] = "BrkID";
$tdataaddbreaks[".importFields"][] = "BreakoutLimit";
$tdataaddbreaks[".importFields"][] = "BreakInLimit";
$tdataaddbreaks[".importFields"][] = "AllowedBreakMins";
$tdataaddbreaks[".importFields"][] = "shID";

$tdataaddbreaks[".printFields"] = array();
$tdataaddbreaks[".printFields"][] = "BrkID";
$tdataaddbreaks[".printFields"][] = "BreakoutLimit";
$tdataaddbreaks[".printFields"][] = "BreakInLimit";
$tdataaddbreaks[".printFields"][] = "AllowedBreakMins";
$tdataaddbreaks[".printFields"][] = "shID";


//	BrkID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "BrkID";
	$fdata["GoodName"] = "BrkID";
	$fdata["ownerTable"] = "addbreaks";
	$fdata["Label"] = GetFieldLabel("addbreaks","BrkID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BrkID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BrkID";

	
	
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




	$tdataaddbreaks["BrkID"] = $fdata;
//	BreakoutLimit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "BreakoutLimit";
	$fdata["GoodName"] = "BreakoutLimit";
	$fdata["ownerTable"] = "addbreaks";
	$fdata["Label"] = GetFieldLabel("addbreaks","BreakoutLimit");
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

		$fdata["strField"] = "BreakoutLimit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BreakoutLimit";

	
	
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
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




	$tdataaddbreaks["BreakoutLimit"] = $fdata;
//	BreakInLimit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "BreakInLimit";
	$fdata["GoodName"] = "BreakInLimit";
	$fdata["ownerTable"] = "addbreaks";
	$fdata["Label"] = GetFieldLabel("addbreaks","BreakInLimit");
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

		$fdata["strField"] = "BreakInLimit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BreakInLimit";

	
	
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
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




	$tdataaddbreaks["BreakInLimit"] = $fdata;
//	AllowedBreakMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AllowedBreakMins";
	$fdata["GoodName"] = "AllowedBreakMins";
	$fdata["ownerTable"] = "addbreaks";
	$fdata["Label"] = GetFieldLabel("addbreaks","AllowedBreakMins");
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

		$fdata["strField"] = "AllowedBreakMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AllowedBreakMins";

	
	
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




	$tdataaddbreaks["AllowedBreakMins"] = $fdata;
//	shID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "shID";
	$fdata["GoodName"] = "shID";
	$fdata["ownerTable"] = "addbreaks";
	$fdata["Label"] = GetFieldLabel("addbreaks","shID");
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

		$fdata["strField"] = "shID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shID";

	
	
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
	$edata["LookupTable"] = "shifts";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "shID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Shift";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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




	$tdataaddbreaks["shID"] = $fdata;


$tables_data["addbreaks"]=&$tdataaddbreaks;
$field_labels["addbreaks"] = &$fieldLabelsaddbreaks;
$fieldToolTips["addbreaks"] = &$fieldToolTipsaddbreaks;
$placeHolders["addbreaks"] = &$placeHoldersaddbreaks;
$page_titles["addbreaks"] = &$pageTitlesaddbreaks;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["addbreaks"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["addbreaks"] = array();


	
				$strOriginalDetailsTable="shifts";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="shifts";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "shifts";
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
					$masterTablesData["addbreaks"][0] = $masterParams;
				$masterTablesData["addbreaks"][0]["masterKeys"] = array();
	$masterTablesData["addbreaks"][0]["masterKeys"][]="shID";
				$masterTablesData["addbreaks"][0]["detailKeys"] = array();
	$masterTablesData["addbreaks"][0]["detailKeys"][]="shID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_addbreaks()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "BrkID,  	BreakoutLimit,  	BreakInLimit,  	AllowedBreakMins,  	shID";
$proto0["m_strFrom"] = "FROM addbreaks";
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
	"m_strName" => "BrkID",
	"m_strTable" => "addbreaks",
	"m_srcTableName" => "addbreaks"
));

$proto6["m_sql"] = "BrkID";
$proto6["m_srcTableName"] = "addbreaks";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "BreakoutLimit",
	"m_strTable" => "addbreaks",
	"m_srcTableName" => "addbreaks"
));

$proto8["m_sql"] = "BreakoutLimit";
$proto8["m_srcTableName"] = "addbreaks";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "BreakInLimit",
	"m_strTable" => "addbreaks",
	"m_srcTableName" => "addbreaks"
));

$proto10["m_sql"] = "BreakInLimit";
$proto10["m_srcTableName"] = "addbreaks";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowedBreakMins",
	"m_strTable" => "addbreaks",
	"m_srcTableName" => "addbreaks"
));

$proto12["m_sql"] = "AllowedBreakMins";
$proto12["m_srcTableName"] = "addbreaks";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "shID",
	"m_strTable" => "addbreaks",
	"m_srcTableName" => "addbreaks"
));

$proto14["m_sql"] = "shID";
$proto14["m_srcTableName"] = "addbreaks";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "addbreaks";
$proto17["m_srcTableName"] = "addbreaks";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "BrkID";
$proto17["m_columns"][] = "BreakoutLimit";
$proto17["m_columns"][] = "BreakInLimit";
$proto17["m_columns"][] = "AllowedBreakMins";
$proto17["m_columns"][] = "shID";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "addbreaks";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "addbreaks";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="addbreaks";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_addbreaks = createSqlQuery_addbreaks();


	
		;

					

$tdataaddbreaks[".sqlquery"] = $queryData_addbreaks;

$tableEvents["addbreaks"] = new eventsBase;
$tdataaddbreaks[".hasEvents"] = false;

?>