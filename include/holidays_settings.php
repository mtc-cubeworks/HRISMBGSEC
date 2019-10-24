<?php
require_once(getabspath("classes/cipherer.php"));




$tdataholidays = array();
	$tdataholidays[".truncateText"] = true;
	$tdataholidays[".NumberOfChars"] = 80;
	$tdataholidays[".ShortName"] = "holidays";
	$tdataholidays[".OwnerID"] = "";
	$tdataholidays[".OriginalTable"] = "holidays";

//	field labels
$fieldLabelsholidays = array();
$fieldToolTipsholidays = array();
$pageTitlesholidays = array();
$placeHoldersholidays = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsholidays["English"] = array();
	$fieldToolTipsholidays["English"] = array();
	$placeHoldersholidays["English"] = array();
	$pageTitlesholidays["English"] = array();
	$fieldLabelsholidays["English"]["HID"] = "HID";
	$fieldToolTipsholidays["English"]["HID"] = "";
	$placeHoldersholidays["English"]["HID"] = "";
	$fieldLabelsholidays["English"]["HolidayDate"] = "Holiday Date";
	$fieldToolTipsholidays["English"]["HolidayDate"] = "";
	$placeHoldersholidays["English"]["HolidayDate"] = "";
	$fieldLabelsholidays["English"]["HolidayType"] = "Holiday Type";
	$fieldToolTipsholidays["English"]["HolidayType"] = "";
	$placeHoldersholidays["English"]["HolidayType"] = "";
	$fieldLabelsholidays["English"]["HolidayDay"] = "Holiday Day";
	$fieldToolTipsholidays["English"]["HolidayDay"] = "";
	$placeHoldersholidays["English"]["HolidayDay"] = "";
	$fieldLabelsholidays["English"]["FirstHalf"] = "First Half";
	$fieldToolTipsholidays["English"]["FirstHalf"] = "";
	$placeHoldersholidays["English"]["FirstHalf"] = "";
	$fieldLabelsholidays["English"]["SecondHalf"] = "Second Half";
	$fieldToolTipsholidays["English"]["SecondHalf"] = "";
	$placeHoldersholidays["English"]["SecondHalf"] = "";
	$fieldLabelsholidays["English"]["HolidayDescription"] = "Holiday Description";
	$fieldToolTipsholidays["English"]["HolidayDescription"] = "";
	$placeHoldersholidays["English"]["HolidayDescription"] = "";
	$fieldLabelsholidays["English"]["Division"] = "Division";
	$fieldToolTipsholidays["English"]["Division"] = "";
	$placeHoldersholidays["English"]["Division"] = "";
	if (count($fieldToolTipsholidays["English"]))
		$tdataholidays[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsholidays[""] = array();
	$fieldToolTipsholidays[""] = array();
	$placeHoldersholidays[""] = array();
	$pageTitlesholidays[""] = array();
	$fieldLabelsholidays[""]["Division"] = "Division";
	$fieldToolTipsholidays[""]["Division"] = "";
	$placeHoldersholidays[""]["Division"] = "";
	if (count($fieldToolTipsholidays[""]))
		$tdataholidays[".isUseToolTips"] = true;
}


	$tdataholidays[".NCSearch"] = true;



$tdataholidays[".shortTableName"] = "holidays";
$tdataholidays[".nSecOptions"] = 0;
$tdataholidays[".recsPerRowPrint"] = 1;
$tdataholidays[".mainTableOwnerID"] = "";
$tdataholidays[".moveNext"] = 1;
$tdataholidays[".entityType"] = 0;

$tdataholidays[".strOriginalTableName"] = "holidays";

	



$tdataholidays[".showAddInPopup"] = false;

$tdataholidays[".showEditInPopup"] = false;

$tdataholidays[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataholidays[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataholidays[".fieldsForRegister"] = array();

$tdataholidays[".listAjax"] = false;

	$tdataholidays[".audit"] = false;

	$tdataholidays[".locking"] = false;

$tdataholidays[".edit"] = true;
$tdataholidays[".afterEditAction"] = 0;
$tdataholidays[".closePopupAfterEdit"] = 1;
$tdataholidays[".afterEditActionDetTable"] = "Detail tables not found!";

$tdataholidays[".add"] = true;
$tdataholidays[".afterAddAction"] = 1;
$tdataholidays[".closePopupAfterAdd"] = 1;
$tdataholidays[".afterAddActionDetTable"] = "";

$tdataholidays[".list"] = true;

$tdataholidays[".inlineEdit"] = true;

$tdataholidays[".updateSelected"] = true;

$tdataholidays[".reorderRecordsByHeader"] = true;


$tdataholidays[".exportFormatting"] = 2;
$tdataholidays[".exportDelimiter"] = ",";
		
$tdataholidays[".inlineAdd"] = true;
$tdataholidays[".view"] = true;

$tdataholidays[".import"] = true;

$tdataholidays[".exportTo"] = true;

$tdataholidays[".printFriendly"] = true;

$tdataholidays[".delete"] = true;

$tdataholidays[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataholidays[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataholidays[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataholidays[".searchSaving"] = false;
//

$tdataholidays[".showSearchPanel"] = true;
		$tdataholidays[".flexibleSearch"] = true;

$tdataholidays[".isUseAjaxSuggest"] = true;

$tdataholidays[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																						

$tdataholidays[".ajaxCodeSnippetAdded"] = false;

$tdataholidays[".buttonsAdded"] = false;

$tdataholidays[".addPageEvents"] = true;

// use timepicker for search panel
$tdataholidays[".isUseTimeForSearch"] = false;



$tdataholidays[".badgeColor"] = "00c2c5";


$tdataholidays[".allSearchFields"] = array();
$tdataholidays[".filterFields"] = array();
$tdataholidays[".requiredSearchFields"] = array();

$tdataholidays[".allSearchFields"][] = "HID";
	$tdataholidays[".allSearchFields"][] = "HolidayDate";
	$tdataholidays[".allSearchFields"][] = "HolidayDescription";
	$tdataholidays[".allSearchFields"][] = "HolidayType";
	$tdataholidays[".allSearchFields"][] = "FirstHalf";
	$tdataholidays[".allSearchFields"][] = "SecondHalf";
	$tdataholidays[".allSearchFields"][] = "HolidayDay";
	$tdataholidays[".allSearchFields"][] = "Division";
	

$tdataholidays[".googleLikeFields"] = array();
$tdataholidays[".googleLikeFields"][] = "HID";
$tdataholidays[".googleLikeFields"][] = "HolidayDate";
$tdataholidays[".googleLikeFields"][] = "HolidayType";
$tdataholidays[".googleLikeFields"][] = "HolidayDay";
$tdataholidays[".googleLikeFields"][] = "FirstHalf";
$tdataholidays[".googleLikeFields"][] = "SecondHalf";
$tdataholidays[".googleLikeFields"][] = "HolidayDescription";
$tdataholidays[".googleLikeFields"][] = "Division";


$tdataholidays[".advSearchFields"] = array();
$tdataholidays[".advSearchFields"][] = "HID";
$tdataholidays[".advSearchFields"][] = "HolidayDate";
$tdataholidays[".advSearchFields"][] = "HolidayDescription";
$tdataholidays[".advSearchFields"][] = "HolidayType";
$tdataholidays[".advSearchFields"][] = "FirstHalf";
$tdataholidays[".advSearchFields"][] = "SecondHalf";
$tdataholidays[".advSearchFields"][] = "HolidayDay";
$tdataholidays[".advSearchFields"][] = "Division";

$tdataholidays[".tableType"] = "list";

$tdataholidays[".printerPageOrientation"] = 0;
$tdataholidays[".nPrinterPageScale"] = 100;

$tdataholidays[".nPrinterSplitRecords"] = 40;

$tdataholidays[".nPrinterPDFSplitRecords"] = 40;



$tdataholidays[".geocodingEnabled"] = false;





$tdataholidays[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataholidays[".pageSize"] = 20;

$tdataholidays[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataholidays[".strOrderBy"] = $tstrOrderBy;

$tdataholidays[".orderindexes"] = array();

$tdataholidays[".sqlHead"] = "SELECT HID,  HolidayDate,  HolidayType,  HolidayDay,  FirstHalf,  SecondHalf,  HolidayDescription,  Division";
$tdataholidays[".sqlFrom"] = "FROM holidays";
$tdataholidays[".sqlWhereExpr"] = "";
$tdataholidays[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataholidays[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataholidays[".arrGroupsPerPage"] = $arrGPP;

$tdataholidays[".highlightSearchResults"] = true;

$tableKeysholidays = array();
$tableKeysholidays[] = "HID";
$tdataholidays[".Keys"] = $tableKeysholidays;

$tdataholidays[".listFields"] = array();
$tdataholidays[".listFields"][] = "HID";
$tdataholidays[".listFields"][] = "HolidayDate";
$tdataholidays[".listFields"][] = "HolidayDescription";
$tdataholidays[".listFields"][] = "HolidayType";
$tdataholidays[".listFields"][] = "FirstHalf";
$tdataholidays[".listFields"][] = "SecondHalf";
$tdataholidays[".listFields"][] = "HolidayDay";
$tdataholidays[".listFields"][] = "Division";

$tdataholidays[".hideMobileList"] = array();


$tdataholidays[".viewFields"] = array();
$tdataholidays[".viewFields"][] = "HID";
$tdataholidays[".viewFields"][] = "HolidayDate";
$tdataholidays[".viewFields"][] = "HolidayDescription";
$tdataholidays[".viewFields"][] = "HolidayType";
$tdataholidays[".viewFields"][] = "FirstHalf";
$tdataholidays[".viewFields"][] = "SecondHalf";
$tdataholidays[".viewFields"][] = "HolidayDay";
$tdataholidays[".viewFields"][] = "Division";

$tdataholidays[".addFields"] = array();
$tdataholidays[".addFields"][] = "HolidayDate";
$tdataholidays[".addFields"][] = "HolidayDescription";
$tdataholidays[".addFields"][] = "HolidayType";
$tdataholidays[".addFields"][] = "FirstHalf";
$tdataholidays[".addFields"][] = "SecondHalf";
$tdataholidays[".addFields"][] = "HolidayDay";
$tdataholidays[".addFields"][] = "Division";

$tdataholidays[".masterListFields"] = array();
$tdataholidays[".masterListFields"][] = "HID";
$tdataholidays[".masterListFields"][] = "HolidayDate";
$tdataholidays[".masterListFields"][] = "HolidayDescription";
$tdataholidays[".masterListFields"][] = "HolidayType";
$tdataholidays[".masterListFields"][] = "FirstHalf";
$tdataholidays[".masterListFields"][] = "SecondHalf";
$tdataholidays[".masterListFields"][] = "HolidayDay";
$tdataholidays[".masterListFields"][] = "Division";

$tdataholidays[".inlineAddFields"] = array();
$tdataholidays[".inlineAddFields"][] = "HolidayDate";
$tdataholidays[".inlineAddFields"][] = "HolidayDescription";
$tdataholidays[".inlineAddFields"][] = "HolidayType";
$tdataholidays[".inlineAddFields"][] = "FirstHalf";
$tdataholidays[".inlineAddFields"][] = "SecondHalf";
$tdataholidays[".inlineAddFields"][] = "HolidayDay";
$tdataholidays[".inlineAddFields"][] = "Division";

$tdataholidays[".editFields"] = array();
$tdataholidays[".editFields"][] = "HolidayDate";
$tdataholidays[".editFields"][] = "HolidayDescription";
$tdataholidays[".editFields"][] = "HolidayType";
$tdataholidays[".editFields"][] = "FirstHalf";
$tdataholidays[".editFields"][] = "SecondHalf";
$tdataholidays[".editFields"][] = "HolidayDay";
$tdataholidays[".editFields"][] = "Division";

$tdataholidays[".inlineEditFields"] = array();
$tdataholidays[".inlineEditFields"][] = "HolidayDate";
$tdataholidays[".inlineEditFields"][] = "HolidayDescription";
$tdataholidays[".inlineEditFields"][] = "HolidayType";
$tdataholidays[".inlineEditFields"][] = "FirstHalf";
$tdataholidays[".inlineEditFields"][] = "SecondHalf";
$tdataholidays[".inlineEditFields"][] = "HolidayDay";
$tdataholidays[".inlineEditFields"][] = "Division";

$tdataholidays[".updateSelectedFields"] = array();
$tdataholidays[".updateSelectedFields"][] = "HolidayDate";
$tdataholidays[".updateSelectedFields"][] = "HolidayDescription";
$tdataholidays[".updateSelectedFields"][] = "HolidayType";
$tdataholidays[".updateSelectedFields"][] = "FirstHalf";
$tdataholidays[".updateSelectedFields"][] = "SecondHalf";
$tdataholidays[".updateSelectedFields"][] = "HolidayDay";
$tdataholidays[".updateSelectedFields"][] = "Division";


$tdataholidays[".exportFields"] = array();
$tdataholidays[".exportFields"][] = "HID";
$tdataholidays[".exportFields"][] = "HolidayDate";
$tdataholidays[".exportFields"][] = "HolidayDescription";
$tdataholidays[".exportFields"][] = "HolidayType";
$tdataholidays[".exportFields"][] = "FirstHalf";
$tdataholidays[".exportFields"][] = "SecondHalf";
$tdataholidays[".exportFields"][] = "HolidayDay";
$tdataholidays[".exportFields"][] = "Division";

$tdataholidays[".importFields"] = array();
$tdataholidays[".importFields"][] = "HID";
$tdataholidays[".importFields"][] = "HolidayDate";
$tdataholidays[".importFields"][] = "HolidayType";
$tdataholidays[".importFields"][] = "HolidayDay";
$tdataholidays[".importFields"][] = "FirstHalf";
$tdataholidays[".importFields"][] = "SecondHalf";
$tdataholidays[".importFields"][] = "HolidayDescription";
$tdataholidays[".importFields"][] = "Division";

$tdataholidays[".printFields"] = array();
$tdataholidays[".printFields"][] = "HID";
$tdataholidays[".printFields"][] = "HolidayDate";
$tdataholidays[".printFields"][] = "HolidayDescription";
$tdataholidays[".printFields"][] = "HolidayType";
$tdataholidays[".printFields"][] = "FirstHalf";
$tdataholidays[".printFields"][] = "SecondHalf";
$tdataholidays[".printFields"][] = "HolidayDay";
$tdataholidays[".printFields"][] = "Division";


//	HID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "HID";
	$fdata["GoodName"] = "HID";
	$fdata["ownerTable"] = "holidays";
	$fdata["Label"] = GetFieldLabel("holidays","HID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "HID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HID";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataholidays["HID"] = $fdata;
//	HolidayDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "HolidayDate";
	$fdata["GoodName"] = "HolidayDate";
	$fdata["ownerTable"] = "holidays";
	$fdata["Label"] = GetFieldLabel("holidays","HolidayDate");
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

		$fdata["strField"] = "HolidayDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HolidayDate";

	
	
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataholidays["HolidayDate"] = $fdata;
//	HolidayType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "HolidayType";
	$fdata["GoodName"] = "HolidayType";
	$fdata["ownerTable"] = "holidays";
	$fdata["Label"] = GetFieldLabel("holidays","HolidayType");
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

		$fdata["strField"] = "HolidayType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HolidayType";

	
	
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
	$edata["LookupTable"] = "holidaytype";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "HID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "HolidayType";
	
	

	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataholidays["HolidayType"] = $fdata;
//	HolidayDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "HolidayDay";
	$fdata["GoodName"] = "HolidayDay";
	$fdata["ownerTable"] = "holidays";
	$fdata["Label"] = GetFieldLabel("holidays","HolidayDay");
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

		$fdata["strField"] = "HolidayDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HolidayDay";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 60;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataholidays["HolidayDay"] = $fdata;
//	FirstHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FirstHalf";
	$fdata["GoodName"] = "FirstHalf";
	$fdata["ownerTable"] = "holidays";
	$fdata["Label"] = GetFieldLabel("holidays","FirstHalf");
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

		$fdata["strField"] = "FirstHalf";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FirstHalf";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataholidays["FirstHalf"] = $fdata;
//	SecondHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SecondHalf";
	$fdata["GoodName"] = "SecondHalf";
	$fdata["ownerTable"] = "holidays";
	$fdata["Label"] = GetFieldLabel("holidays","SecondHalf");
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

		$fdata["strField"] = "SecondHalf";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SecondHalf";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataholidays["SecondHalf"] = $fdata;
//	HolidayDescription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "HolidayDescription";
	$fdata["GoodName"] = "HolidayDescription";
	$fdata["ownerTable"] = "holidays";
	$fdata["Label"] = GetFieldLabel("holidays","HolidayDescription");
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

		$fdata["strField"] = "HolidayDescription";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HolidayDescription";

	
	
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




	$tdataholidays["HolidayDescription"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "holidays";
	$fdata["Label"] = GetFieldLabel("holidays","Division");
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
	
	

	
	$edata["LookupOrderBy"] = "Division";

	
	
	
	

	
	
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




	$tdataholidays["Division"] = $fdata;


$tables_data["holidays"]=&$tdataholidays;
$field_labels["holidays"] = &$fieldLabelsholidays;
$fieldToolTips["holidays"] = &$fieldToolTipsholidays;
$placeHolders["holidays"] = &$placeHoldersholidays;
$page_titles["holidays"] = &$pageTitlesholidays;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["holidays"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["holidays"] = array();


	
				$strOriginalDetailsTable="divisions";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="divisions";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "divisions";
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
					$masterTablesData["holidays"][0] = $masterParams;
				$masterTablesData["holidays"][0]["masterKeys"] = array();
	$masterTablesData["holidays"][0]["masterKeys"][]="DvID";
				$masterTablesData["holidays"][0]["detailKeys"] = array();
	$masterTablesData["holidays"][0]["detailKeys"][]="Division";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_holidays()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "HID,  HolidayDate,  HolidayType,  HolidayDay,  FirstHalf,  SecondHalf,  HolidayDescription,  Division";
$proto0["m_strFrom"] = "FROM holidays";
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
	"m_strName" => "HID",
	"m_strTable" => "holidays",
	"m_srcTableName" => "holidays"
));

$proto6["m_sql"] = "HID";
$proto6["m_srcTableName"] = "holidays";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "HolidayDate",
	"m_strTable" => "holidays",
	"m_srcTableName" => "holidays"
));

$proto8["m_sql"] = "HolidayDate";
$proto8["m_srcTableName"] = "holidays";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "HolidayType",
	"m_strTable" => "holidays",
	"m_srcTableName" => "holidays"
));

$proto10["m_sql"] = "HolidayType";
$proto10["m_srcTableName"] = "holidays";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "HolidayDay",
	"m_strTable" => "holidays",
	"m_srcTableName" => "holidays"
));

$proto12["m_sql"] = "HolidayDay";
$proto12["m_srcTableName"] = "holidays";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FirstHalf",
	"m_strTable" => "holidays",
	"m_srcTableName" => "holidays"
));

$proto14["m_sql"] = "FirstHalf";
$proto14["m_srcTableName"] = "holidays";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "SecondHalf",
	"m_strTable" => "holidays",
	"m_srcTableName" => "holidays"
));

$proto16["m_sql"] = "SecondHalf";
$proto16["m_srcTableName"] = "holidays";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "HolidayDescription",
	"m_strTable" => "holidays",
	"m_srcTableName" => "holidays"
));

$proto18["m_sql"] = "HolidayDescription";
$proto18["m_srcTableName"] = "holidays";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "holidays",
	"m_srcTableName" => "holidays"
));

$proto20["m_sql"] = "Division";
$proto20["m_srcTableName"] = "holidays";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "holidays";
$proto23["m_srcTableName"] = "holidays";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "HID";
$proto23["m_columns"][] = "HolidayDate";
$proto23["m_columns"][] = "HolidayType";
$proto23["m_columns"][] = "HolidayDay";
$proto23["m_columns"][] = "FirstHalf";
$proto23["m_columns"][] = "SecondHalf";
$proto23["m_columns"][] = "WholeDay";
$proto23["m_columns"][] = "WordayBeforeHoliday";
$proto23["m_columns"][] = "HolidayDescription";
$proto23["m_columns"][] = "Division";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "holidays";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "holidays";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="holidays";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_holidays = createSqlQuery_holidays();


	
		;

								

$tdataholidays[".sqlquery"] = $queryData_holidays;

include_once(getabspath("include/holidays_events.php"));
$tableEvents["holidays"] = new eventclass_holidays;
$tdataholidays[".hasEvents"] = true;

?>