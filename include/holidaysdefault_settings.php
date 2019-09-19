<?php
require_once(getabspath("classes/cipherer.php"));




$tdataholidaysdefault = array();
	$tdataholidaysdefault[".truncateText"] = true;
	$tdataholidaysdefault[".NumberOfChars"] = 80;
	$tdataholidaysdefault[".ShortName"] = "holidaysdefault";
	$tdataholidaysdefault[".OwnerID"] = "";
	$tdataholidaysdefault[".OriginalTable"] = "holidaysdefault";

//	field labels
$fieldLabelsholidaysdefault = array();
$fieldToolTipsholidaysdefault = array();
$pageTitlesholidaysdefault = array();
$placeHoldersholidaysdefault = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsholidaysdefault["English"] = array();
	$fieldToolTipsholidaysdefault["English"] = array();
	$placeHoldersholidaysdefault["English"] = array();
	$pageTitlesholidaysdefault["English"] = array();
	$fieldLabelsholidaysdefault["English"]["HdID"] = "Hd ID";
	$fieldToolTipsholidaysdefault["English"]["HdID"] = "";
	$placeHoldersholidaysdefault["English"]["HdID"] = "";
	$fieldLabelsholidaysdefault["English"]["HolidayDate"] = "Holiday Date";
	$fieldToolTipsholidaysdefault["English"]["HolidayDate"] = "";
	$placeHoldersholidaysdefault["English"]["HolidayDate"] = "";
	$fieldLabelsholidaysdefault["English"]["HolidayType"] = "Holiday Type";
	$fieldToolTipsholidaysdefault["English"]["HolidayType"] = "";
	$placeHoldersholidaysdefault["English"]["HolidayType"] = "";
	$fieldLabelsholidaysdefault["English"]["HolidayDay"] = "Holiday Day";
	$fieldToolTipsholidaysdefault["English"]["HolidayDay"] = "";
	$placeHoldersholidaysdefault["English"]["HolidayDay"] = "";
	$fieldLabelsholidaysdefault["English"]["FirstHalf"] = "First Half";
	$fieldToolTipsholidaysdefault["English"]["FirstHalf"] = "";
	$placeHoldersholidaysdefault["English"]["FirstHalf"] = "";
	$fieldLabelsholidaysdefault["English"]["SecondHalf"] = "Second Half";
	$fieldToolTipsholidaysdefault["English"]["SecondHalf"] = "";
	$placeHoldersholidaysdefault["English"]["SecondHalf"] = "";
	$fieldLabelsholidaysdefault["English"]["HolidayDescription"] = "Holiday Description";
	$fieldToolTipsholidaysdefault["English"]["HolidayDescription"] = "";
	$placeHoldersholidaysdefault["English"]["HolidayDescription"] = "";
	if (count($fieldToolTipsholidaysdefault["English"]))
		$tdataholidaysdefault[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsholidaysdefault[""] = array();
	$fieldToolTipsholidaysdefault[""] = array();
	$placeHoldersholidaysdefault[""] = array();
	$pageTitlesholidaysdefault[""] = array();
	$fieldLabelsholidaysdefault[""]["HdID"] = "Hd ID";
	$fieldToolTipsholidaysdefault[""]["HdID"] = "";
	$placeHoldersholidaysdefault[""]["HdID"] = "";
	$fieldLabelsholidaysdefault[""]["HolidayDate"] = "Holiday Date";
	$fieldToolTipsholidaysdefault[""]["HolidayDate"] = "";
	$placeHoldersholidaysdefault[""]["HolidayDate"] = "";
	$fieldLabelsholidaysdefault[""]["HolidayType"] = "Holiday Type";
	$fieldToolTipsholidaysdefault[""]["HolidayType"] = "";
	$placeHoldersholidaysdefault[""]["HolidayType"] = "";
	$fieldLabelsholidaysdefault[""]["HolidayDay"] = "Holiday Day";
	$fieldToolTipsholidaysdefault[""]["HolidayDay"] = "";
	$placeHoldersholidaysdefault[""]["HolidayDay"] = "";
	$fieldLabelsholidaysdefault[""]["FirstHalf"] = "First Half";
	$fieldToolTipsholidaysdefault[""]["FirstHalf"] = "";
	$placeHoldersholidaysdefault[""]["FirstHalf"] = "";
	$fieldLabelsholidaysdefault[""]["SecondHalf"] = "Second Half";
	$fieldToolTipsholidaysdefault[""]["SecondHalf"] = "";
	$placeHoldersholidaysdefault[""]["SecondHalf"] = "";
	$fieldLabelsholidaysdefault[""]["HolidayDescription"] = "Holiday Description";
	$fieldToolTipsholidaysdefault[""]["HolidayDescription"] = "";
	$placeHoldersholidaysdefault[""]["HolidayDescription"] = "";
	if (count($fieldToolTipsholidaysdefault[""]))
		$tdataholidaysdefault[".isUseToolTips"] = true;
}


	$tdataholidaysdefault[".NCSearch"] = true;



$tdataholidaysdefault[".shortTableName"] = "holidaysdefault";
$tdataholidaysdefault[".nSecOptions"] = 0;
$tdataholidaysdefault[".recsPerRowPrint"] = 1;
$tdataholidaysdefault[".mainTableOwnerID"] = "";
$tdataholidaysdefault[".moveNext"] = 1;
$tdataholidaysdefault[".entityType"] = 0;

$tdataholidaysdefault[".strOriginalTableName"] = "holidaysdefault";

	



$tdataholidaysdefault[".showAddInPopup"] = false;

$tdataholidaysdefault[".showEditInPopup"] = false;

$tdataholidaysdefault[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataholidaysdefault[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataholidaysdefault[".fieldsForRegister"] = array();

$tdataholidaysdefault[".listAjax"] = false;

	$tdataholidaysdefault[".audit"] = false;

	$tdataholidaysdefault[".locking"] = false;

$tdataholidaysdefault[".edit"] = true;
$tdataholidaysdefault[".afterEditAction"] = 1;
$tdataholidaysdefault[".closePopupAfterEdit"] = 1;
$tdataholidaysdefault[".afterEditActionDetTable"] = "";

$tdataholidaysdefault[".add"] = true;
$tdataholidaysdefault[".afterAddAction"] = 1;
$tdataholidaysdefault[".closePopupAfterAdd"] = 1;
$tdataholidaysdefault[".afterAddActionDetTable"] = "";

$tdataholidaysdefault[".list"] = true;



$tdataholidaysdefault[".reorderRecordsByHeader"] = true;


$tdataholidaysdefault[".exportFormatting"] = 2;
$tdataholidaysdefault[".exportDelimiter"] = ",";
		
$tdataholidaysdefault[".view"] = true;

$tdataholidaysdefault[".import"] = true;

$tdataholidaysdefault[".exportTo"] = true;

$tdataholidaysdefault[".printFriendly"] = true;

$tdataholidaysdefault[".delete"] = true;

$tdataholidaysdefault[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataholidaysdefault[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataholidaysdefault[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataholidaysdefault[".searchSaving"] = false;
//

$tdataholidaysdefault[".showSearchPanel"] = true;
		$tdataholidaysdefault[".flexibleSearch"] = true;

$tdataholidaysdefault[".isUseAjaxSuggest"] = true;

$tdataholidaysdefault[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																					

$tdataholidaysdefault[".ajaxCodeSnippetAdded"] = false;

$tdataholidaysdefault[".buttonsAdded"] = false;

$tdataholidaysdefault[".addPageEvents"] = true;

// use timepicker for search panel
$tdataholidaysdefault[".isUseTimeForSearch"] = false;





$tdataholidaysdefault[".allSearchFields"] = array();
$tdataholidaysdefault[".filterFields"] = array();
$tdataholidaysdefault[".requiredSearchFields"] = array();

$tdataholidaysdefault[".allSearchFields"][] = "HdID";
	$tdataholidaysdefault[".allSearchFields"][] = "HolidayDate";
	$tdataholidaysdefault[".allSearchFields"][] = "HolidayDescription";
	$tdataholidaysdefault[".allSearchFields"][] = "HolidayType";
	$tdataholidaysdefault[".allSearchFields"][] = "FirstHalf";
	$tdataholidaysdefault[".allSearchFields"][] = "SecondHalf";
	$tdataholidaysdefault[".allSearchFields"][] = "HolidayDay";
	

$tdataholidaysdefault[".googleLikeFields"] = array();
$tdataholidaysdefault[".googleLikeFields"][] = "HdID";
$tdataholidaysdefault[".googleLikeFields"][] = "HolidayDate";
$tdataholidaysdefault[".googleLikeFields"][] = "HolidayType";
$tdataholidaysdefault[".googleLikeFields"][] = "HolidayDay";
$tdataholidaysdefault[".googleLikeFields"][] = "FirstHalf";
$tdataholidaysdefault[".googleLikeFields"][] = "SecondHalf";
$tdataholidaysdefault[".googleLikeFields"][] = "HolidayDescription";


$tdataholidaysdefault[".advSearchFields"] = array();
$tdataholidaysdefault[".advSearchFields"][] = "HdID";
$tdataholidaysdefault[".advSearchFields"][] = "HolidayDate";
$tdataholidaysdefault[".advSearchFields"][] = "HolidayDescription";
$tdataholidaysdefault[".advSearchFields"][] = "HolidayType";
$tdataholidaysdefault[".advSearchFields"][] = "FirstHalf";
$tdataholidaysdefault[".advSearchFields"][] = "SecondHalf";
$tdataholidaysdefault[".advSearchFields"][] = "HolidayDay";

$tdataholidaysdefault[".tableType"] = "list";

$tdataholidaysdefault[".printerPageOrientation"] = 0;
$tdataholidaysdefault[".nPrinterPageScale"] = 100;

$tdataholidaysdefault[".nPrinterSplitRecords"] = 40;

$tdataholidaysdefault[".nPrinterPDFSplitRecords"] = 40;



$tdataholidaysdefault[".geocodingEnabled"] = false;





$tdataholidaysdefault[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataholidaysdefault[".pageSize"] = 20;

$tdataholidaysdefault[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataholidaysdefault[".strOrderBy"] = $tstrOrderBy;

$tdataholidaysdefault[".orderindexes"] = array();

$tdataholidaysdefault[".sqlHead"] = "SELECT HdID,  HolidayDate,  HolidayType,  HolidayDay,  FirstHalf,  SecondHalf,  HolidayDescription";
$tdataholidaysdefault[".sqlFrom"] = "FROM holidaysdefault";
$tdataholidaysdefault[".sqlWhereExpr"] = "";
$tdataholidaysdefault[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataholidaysdefault[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataholidaysdefault[".arrGroupsPerPage"] = $arrGPP;

$tdataholidaysdefault[".highlightSearchResults"] = true;

$tableKeysholidaysdefault = array();
$tableKeysholidaysdefault[] = "HdID";
$tdataholidaysdefault[".Keys"] = $tableKeysholidaysdefault;

$tdataholidaysdefault[".listFields"] = array();
$tdataholidaysdefault[".listFields"][] = "HdID";
$tdataholidaysdefault[".listFields"][] = "HolidayDate";
$tdataholidaysdefault[".listFields"][] = "HolidayDescription";
$tdataholidaysdefault[".listFields"][] = "HolidayType";
$tdataholidaysdefault[".listFields"][] = "FirstHalf";
$tdataholidaysdefault[".listFields"][] = "SecondHalf";
$tdataholidaysdefault[".listFields"][] = "HolidayDay";

$tdataholidaysdefault[".hideMobileList"] = array();


$tdataholidaysdefault[".viewFields"] = array();
$tdataholidaysdefault[".viewFields"][] = "HdID";
$tdataholidaysdefault[".viewFields"][] = "HolidayDate";
$tdataholidaysdefault[".viewFields"][] = "HolidayDescription";
$tdataholidaysdefault[".viewFields"][] = "HolidayType";
$tdataholidaysdefault[".viewFields"][] = "FirstHalf";
$tdataholidaysdefault[".viewFields"][] = "SecondHalf";
$tdataholidaysdefault[".viewFields"][] = "HolidayDay";

$tdataholidaysdefault[".addFields"] = array();
$tdataholidaysdefault[".addFields"][] = "HolidayDate";
$tdataholidaysdefault[".addFields"][] = "HolidayDescription";
$tdataholidaysdefault[".addFields"][] = "HolidayType";
$tdataholidaysdefault[".addFields"][] = "FirstHalf";
$tdataholidaysdefault[".addFields"][] = "SecondHalf";
$tdataholidaysdefault[".addFields"][] = "HolidayDay";

$tdataholidaysdefault[".masterListFields"] = array();
$tdataholidaysdefault[".masterListFields"][] = "HdID";
$tdataholidaysdefault[".masterListFields"][] = "HolidayDate";
$tdataholidaysdefault[".masterListFields"][] = "HolidayDescription";
$tdataholidaysdefault[".masterListFields"][] = "HolidayType";
$tdataholidaysdefault[".masterListFields"][] = "FirstHalf";
$tdataholidaysdefault[".masterListFields"][] = "SecondHalf";
$tdataholidaysdefault[".masterListFields"][] = "HolidayDay";

$tdataholidaysdefault[".inlineAddFields"] = array();

$tdataholidaysdefault[".editFields"] = array();
$tdataholidaysdefault[".editFields"][] = "HolidayDate";
$tdataholidaysdefault[".editFields"][] = "HolidayDescription";
$tdataholidaysdefault[".editFields"][] = "HolidayType";
$tdataholidaysdefault[".editFields"][] = "FirstHalf";
$tdataholidaysdefault[".editFields"][] = "SecondHalf";
$tdataholidaysdefault[".editFields"][] = "HolidayDay";

$tdataholidaysdefault[".inlineEditFields"] = array();

$tdataholidaysdefault[".updateSelectedFields"] = array();
$tdataholidaysdefault[".updateSelectedFields"][] = "HolidayDate";
$tdataholidaysdefault[".updateSelectedFields"][] = "HolidayDescription";
$tdataholidaysdefault[".updateSelectedFields"][] = "HolidayType";
$tdataholidaysdefault[".updateSelectedFields"][] = "FirstHalf";
$tdataholidaysdefault[".updateSelectedFields"][] = "SecondHalf";
$tdataholidaysdefault[".updateSelectedFields"][] = "HolidayDay";


$tdataholidaysdefault[".exportFields"] = array();
$tdataholidaysdefault[".exportFields"][] = "HdID";
$tdataholidaysdefault[".exportFields"][] = "HolidayDate";
$tdataholidaysdefault[".exportFields"][] = "HolidayDescription";
$tdataholidaysdefault[".exportFields"][] = "HolidayType";
$tdataholidaysdefault[".exportFields"][] = "FirstHalf";
$tdataholidaysdefault[".exportFields"][] = "SecondHalf";
$tdataholidaysdefault[".exportFields"][] = "HolidayDay";

$tdataholidaysdefault[".importFields"] = array();
$tdataholidaysdefault[".importFields"][] = "HdID";
$tdataholidaysdefault[".importFields"][] = "HolidayDate";
$tdataholidaysdefault[".importFields"][] = "HolidayType";
$tdataholidaysdefault[".importFields"][] = "HolidayDay";
$tdataholidaysdefault[".importFields"][] = "FirstHalf";
$tdataholidaysdefault[".importFields"][] = "SecondHalf";
$tdataholidaysdefault[".importFields"][] = "HolidayDescription";

$tdataholidaysdefault[".printFields"] = array();
$tdataholidaysdefault[".printFields"][] = "HdID";
$tdataholidaysdefault[".printFields"][] = "HolidayDate";
$tdataholidaysdefault[".printFields"][] = "HolidayDescription";
$tdataholidaysdefault[".printFields"][] = "HolidayType";
$tdataholidaysdefault[".printFields"][] = "FirstHalf";
$tdataholidaysdefault[".printFields"][] = "SecondHalf";
$tdataholidaysdefault[".printFields"][] = "HolidayDay";


//	HdID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "HdID";
	$fdata["GoodName"] = "HdID";
	$fdata["ownerTable"] = "holidaysdefault";
	$fdata["Label"] = GetFieldLabel("holidaysdefault","HdID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "HdID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HdID";

	
	
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




	$tdataholidaysdefault["HdID"] = $fdata;
//	HolidayDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "HolidayDate";
	$fdata["GoodName"] = "HolidayDate";
	$fdata["ownerTable"] = "holidaysdefault";
	$fdata["Label"] = GetFieldLabel("holidaysdefault","HolidayDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataholidaysdefault["HolidayDate"] = $fdata;
//	HolidayType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "HolidayType";
	$fdata["GoodName"] = "HolidayType";
	$fdata["ownerTable"] = "holidaysdefault";
	$fdata["Label"] = GetFieldLabel("holidaysdefault","HolidayType");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataholidaysdefault["HolidayType"] = $fdata;
//	HolidayDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "HolidayDay";
	$fdata["GoodName"] = "HolidayDay";
	$fdata["ownerTable"] = "holidaysdefault";
	$fdata["Label"] = GetFieldLabel("holidaysdefault","HolidayDay");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataholidaysdefault["HolidayDay"] = $fdata;
//	FirstHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FirstHalf";
	$fdata["GoodName"] = "FirstHalf";
	$fdata["ownerTable"] = "holidaysdefault";
	$fdata["Label"] = GetFieldLabel("holidaysdefault","FirstHalf");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataholidaysdefault["FirstHalf"] = $fdata;
//	SecondHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SecondHalf";
	$fdata["GoodName"] = "SecondHalf";
	$fdata["ownerTable"] = "holidaysdefault";
	$fdata["Label"] = GetFieldLabel("holidaysdefault","SecondHalf");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataholidaysdefault["SecondHalf"] = $fdata;
//	HolidayDescription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "HolidayDescription";
	$fdata["GoodName"] = "HolidayDescription";
	$fdata["ownerTable"] = "holidaysdefault";
	$fdata["Label"] = GetFieldLabel("holidaysdefault","HolidayDescription");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
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




	$tdataholidaysdefault["HolidayDescription"] = $fdata;


$tables_data["holidaysdefault"]=&$tdataholidaysdefault;
$field_labels["holidaysdefault"] = &$fieldLabelsholidaysdefault;
$fieldToolTips["holidaysdefault"] = &$fieldToolTipsholidaysdefault;
$placeHolders["holidaysdefault"] = &$placeHoldersholidaysdefault;
$page_titles["holidaysdefault"] = &$pageTitlesholidaysdefault;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["holidaysdefault"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["holidaysdefault"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_holidaysdefault()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "HdID,  HolidayDate,  HolidayType,  HolidayDay,  FirstHalf,  SecondHalf,  HolidayDescription";
$proto0["m_strFrom"] = "FROM holidaysdefault";
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
	"m_strName" => "HdID",
	"m_strTable" => "holidaysdefault",
	"m_srcTableName" => "holidaysdefault"
));

$proto6["m_sql"] = "HdID";
$proto6["m_srcTableName"] = "holidaysdefault";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "HolidayDate",
	"m_strTable" => "holidaysdefault",
	"m_srcTableName" => "holidaysdefault"
));

$proto8["m_sql"] = "HolidayDate";
$proto8["m_srcTableName"] = "holidaysdefault";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "HolidayType",
	"m_strTable" => "holidaysdefault",
	"m_srcTableName" => "holidaysdefault"
));

$proto10["m_sql"] = "HolidayType";
$proto10["m_srcTableName"] = "holidaysdefault";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "HolidayDay",
	"m_strTable" => "holidaysdefault",
	"m_srcTableName" => "holidaysdefault"
));

$proto12["m_sql"] = "HolidayDay";
$proto12["m_srcTableName"] = "holidaysdefault";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FirstHalf",
	"m_strTable" => "holidaysdefault",
	"m_srcTableName" => "holidaysdefault"
));

$proto14["m_sql"] = "FirstHalf";
$proto14["m_srcTableName"] = "holidaysdefault";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "SecondHalf",
	"m_strTable" => "holidaysdefault",
	"m_srcTableName" => "holidaysdefault"
));

$proto16["m_sql"] = "SecondHalf";
$proto16["m_srcTableName"] = "holidaysdefault";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "HolidayDescription",
	"m_strTable" => "holidaysdefault",
	"m_srcTableName" => "holidaysdefault"
));

$proto18["m_sql"] = "HolidayDescription";
$proto18["m_srcTableName"] = "holidaysdefault";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "holidaysdefault";
$proto21["m_srcTableName"] = "holidaysdefault";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "HdID";
$proto21["m_columns"][] = "HolidayDate";
$proto21["m_columns"][] = "HolidayType";
$proto21["m_columns"][] = "HolidayDay";
$proto21["m_columns"][] = "FirstHalf";
$proto21["m_columns"][] = "SecondHalf";
$proto21["m_columns"][] = "WholeDay";
$proto21["m_columns"][] = "WordayBeforeHoliday";
$proto21["m_columns"][] = "HolidayDescription";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "holidaysdefault";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "holidaysdefault";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="holidaysdefault";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_holidaysdefault = createSqlQuery_holidaysdefault();


	
		;

							

$tdataholidaysdefault[".sqlquery"] = $queryData_holidaysdefault;

include_once(getabspath("include/holidaysdefault_events.php"));
$tableEvents["holidaysdefault"] = new eventclass_holidaysdefault;
$tdataholidaysdefault[".hasEvents"] = true;

?>