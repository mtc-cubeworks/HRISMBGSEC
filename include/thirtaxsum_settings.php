<?php
require_once(getabspath("classes/cipherer.php"));




$tdatathirtaxsum = array();
	$tdatathirtaxsum[".truncateText"] = true;
	$tdatathirtaxsum[".NumberOfChars"] = 80;
	$tdatathirtaxsum[".ShortName"] = "thirtaxsum";
	$tdatathirtaxsum[".OwnerID"] = "";
	$tdatathirtaxsum[".OriginalTable"] = "thirtaxsum";

//	field labels
$fieldLabelsthirtaxsum = array();
$fieldToolTipsthirtaxsum = array();
$pageTitlesthirtaxsum = array();
$placeHoldersthirtaxsum = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsthirtaxsum["English"] = array();
	$fieldToolTipsthirtaxsum["English"] = array();
	$placeHoldersthirtaxsum["English"] = array();
	$pageTitlesthirtaxsum["English"] = array();
	$fieldLabelsthirtaxsum["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipsthirtaxsum["English"]["EmployeeID"] = "";
	$placeHoldersthirtaxsum["English"]["EmployeeID"] = "";
	$fieldLabelsthirtaxsum["English"]["13thToDate"] = "13th To-Date";
	$fieldToolTipsthirtaxsum["English"]["13thToDate"] = "";
	$placeHoldersthirtaxsum["English"]["13thToDate"] = "";
	$fieldLabelsthirtaxsum["English"]["TaxabaleToDate"] = "Taxabale To-Date";
	$fieldToolTipsthirtaxsum["English"]["TaxabaleToDate"] = "";
	$placeHoldersthirtaxsum["English"]["TaxabaleToDate"] = "";
	$fieldLabelsthirtaxsum["English"]["TaxToDate"] = "Tax To-Date";
	$fieldToolTipsthirtaxsum["English"]["TaxToDate"] = "";
	$placeHoldersthirtaxsum["English"]["TaxToDate"] = "";
	$fieldLabelsthirtaxsum["English"]["Employer"] = "Employer";
	$fieldToolTipsthirtaxsum["English"]["Employer"] = "";
	$placeHoldersthirtaxsum["English"]["Employer"] = "";
	$fieldLabelsthirtaxsum["English"]["Division"] = "Division";
	$fieldToolTipsthirtaxsum["English"]["Division"] = "";
	$placeHoldersthirtaxsum["English"]["Division"] = "";
	$fieldLabelsthirtaxsum["English"]["WageType"] = "Wage Type";
	$fieldToolTipsthirtaxsum["English"]["WageType"] = "";
	$placeHoldersthirtaxsum["English"]["WageType"] = "";
	if (count($fieldToolTipsthirtaxsum["English"]))
		$tdatathirtaxsum[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsthirtaxsum[""] = array();
	$fieldToolTipsthirtaxsum[""] = array();
	$placeHoldersthirtaxsum[""] = array();
	$pageTitlesthirtaxsum[""] = array();
	$fieldLabelsthirtaxsum[""]["EmployeeID"] = "Employee ID";
	$fieldToolTipsthirtaxsum[""]["EmployeeID"] = "";
	$placeHoldersthirtaxsum[""]["EmployeeID"] = "";
	$fieldLabelsthirtaxsum[""]["13thToDate"] = "13th To Date";
	$fieldToolTipsthirtaxsum[""]["13thToDate"] = "";
	$placeHoldersthirtaxsum[""]["13thToDate"] = "";
	$fieldLabelsthirtaxsum[""]["TaxabaleToDate"] = "Taxabale To Date";
	$fieldToolTipsthirtaxsum[""]["TaxabaleToDate"] = "";
	$placeHoldersthirtaxsum[""]["TaxabaleToDate"] = "";
	$fieldLabelsthirtaxsum[""]["TaxToDate"] = "Tax To Date";
	$fieldToolTipsthirtaxsum[""]["TaxToDate"] = "";
	$placeHoldersthirtaxsum[""]["TaxToDate"] = "";
	$fieldLabelsthirtaxsum[""]["Employer"] = "Employer";
	$fieldToolTipsthirtaxsum[""]["Employer"] = "";
	$placeHoldersthirtaxsum[""]["Employer"] = "";
	$fieldLabelsthirtaxsum[""]["Division"] = "Division";
	$fieldToolTipsthirtaxsum[""]["Division"] = "";
	$placeHoldersthirtaxsum[""]["Division"] = "";
	$fieldLabelsthirtaxsum[""]["WageType"] = "Wage Type";
	$fieldToolTipsthirtaxsum[""]["WageType"] = "";
	$placeHoldersthirtaxsum[""]["WageType"] = "";
	if (count($fieldToolTipsthirtaxsum[""]))
		$tdatathirtaxsum[".isUseToolTips"] = true;
}


	$tdatathirtaxsum[".NCSearch"] = true;



$tdatathirtaxsum[".shortTableName"] = "thirtaxsum";
$tdatathirtaxsum[".nSecOptions"] = 0;
$tdatathirtaxsum[".recsPerRowPrint"] = 1;
$tdatathirtaxsum[".mainTableOwnerID"] = "";
$tdatathirtaxsum[".moveNext"] = 1;
$tdatathirtaxsum[".entityType"] = 0;

$tdatathirtaxsum[".strOriginalTableName"] = "thirtaxsum";

	



$tdatathirtaxsum[".showAddInPopup"] = false;

$tdatathirtaxsum[".showEditInPopup"] = false;

$tdatathirtaxsum[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatathirtaxsum[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatathirtaxsum[".fieldsForRegister"] = array();

$tdatathirtaxsum[".listAjax"] = false;

	$tdatathirtaxsum[".audit"] = false;

	$tdatathirtaxsum[".locking"] = false;



$tdatathirtaxsum[".list"] = true;



$tdatathirtaxsum[".reorderRecordsByHeader"] = true;


$tdatathirtaxsum[".exportFormatting"] = 2;
$tdatathirtaxsum[".exportDelimiter"] = ",";
		


$tdatathirtaxsum[".exportTo"] = true;

$tdatathirtaxsum[".printFriendly"] = true;


$tdatathirtaxsum[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatathirtaxsum[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatathirtaxsum[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatathirtaxsum[".searchSaving"] = false;
//

$tdatathirtaxsum[".showSearchPanel"] = true;
		$tdatathirtaxsum[".flexibleSearch"] = true;

$tdatathirtaxsum[".isUseAjaxSuggest"] = true;

$tdatathirtaxsum[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																				

$tdatathirtaxsum[".ajaxCodeSnippetAdded"] = false;

$tdatathirtaxsum[".buttonsAdded"] = false;

$tdatathirtaxsum[".addPageEvents"] = false;

// use timepicker for search panel
$tdatathirtaxsum[".isUseTimeForSearch"] = false;



$tdatathirtaxsum[".badgeColor"] = "7b68ee";


$tdatathirtaxsum[".allSearchFields"] = array();
$tdatathirtaxsum[".filterFields"] = array();
$tdatathirtaxsum[".requiredSearchFields"] = array();

$tdatathirtaxsum[".allSearchFields"][] = "EmployeeID";
	$tdatathirtaxsum[".allSearchFields"][] = "Employer";
	$tdatathirtaxsum[".allSearchFields"][] = "Division";
	$tdatathirtaxsum[".allSearchFields"][] = "WageType";
	$tdatathirtaxsum[".allSearchFields"][] = "13thToDate";
	$tdatathirtaxsum[".allSearchFields"][] = "TaxabaleToDate";
	$tdatathirtaxsum[".allSearchFields"][] = "TaxToDate";
	

$tdatathirtaxsum[".googleLikeFields"] = array();
$tdatathirtaxsum[".googleLikeFields"][] = "EmployeeID";
$tdatathirtaxsum[".googleLikeFields"][] = "13thToDate";
$tdatathirtaxsum[".googleLikeFields"][] = "TaxabaleToDate";
$tdatathirtaxsum[".googleLikeFields"][] = "TaxToDate";
$tdatathirtaxsum[".googleLikeFields"][] = "Employer";
$tdatathirtaxsum[".googleLikeFields"][] = "Division";
$tdatathirtaxsum[".googleLikeFields"][] = "WageType";


$tdatathirtaxsum[".advSearchFields"] = array();
$tdatathirtaxsum[".advSearchFields"][] = "EmployeeID";
$tdatathirtaxsum[".advSearchFields"][] = "Employer";
$tdatathirtaxsum[".advSearchFields"][] = "Division";
$tdatathirtaxsum[".advSearchFields"][] = "WageType";
$tdatathirtaxsum[".advSearchFields"][] = "13thToDate";
$tdatathirtaxsum[".advSearchFields"][] = "TaxabaleToDate";
$tdatathirtaxsum[".advSearchFields"][] = "TaxToDate";

$tdatathirtaxsum[".tableType"] = "list";

$tdatathirtaxsum[".printerPageOrientation"] = 0;
$tdatathirtaxsum[".nPrinterPageScale"] = 100;

$tdatathirtaxsum[".nPrinterSplitRecords"] = 40;

$tdatathirtaxsum[".nPrinterPDFSplitRecords"] = 40;



$tdatathirtaxsum[".geocodingEnabled"] = false;





$tdatathirtaxsum[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatathirtaxsum[".totalsFields"] = array();
$tdatathirtaxsum[".totalsFields"][] = array(
	"fName" => "13thToDate",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatathirtaxsum[".totalsFields"][] = array(
	"fName" => "TaxabaleToDate",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatathirtaxsum[".totalsFields"][] = array(
	"fName" => "TaxToDate",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatathirtaxsum[".pageSize"] = 20;

$tdatathirtaxsum[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatathirtaxsum[".strOrderBy"] = $tstrOrderBy;

$tdatathirtaxsum[".orderindexes"] = array();

$tdatathirtaxsum[".sqlHead"] = "SELECT EmployeeID,  	`13thToDate`,  	TaxabaleToDate,  	TaxToDate,  	Employer,  	Division,  	WageType";
$tdatathirtaxsum[".sqlFrom"] = "FROM thirtaxsum";
$tdatathirtaxsum[".sqlWhereExpr"] = "";
$tdatathirtaxsum[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatathirtaxsum[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatathirtaxsum[".arrGroupsPerPage"] = $arrGPP;

$tdatathirtaxsum[".highlightSearchResults"] = true;

$tableKeysthirtaxsum = array();
$tableKeysthirtaxsum[] = "EmployeeID";
$tdatathirtaxsum[".Keys"] = $tableKeysthirtaxsum;

$tdatathirtaxsum[".listFields"] = array();
$tdatathirtaxsum[".listFields"][] = "EmployeeID";
$tdatathirtaxsum[".listFields"][] = "Employer";
$tdatathirtaxsum[".listFields"][] = "Division";
$tdatathirtaxsum[".listFields"][] = "WageType";
$tdatathirtaxsum[".listFields"][] = "13thToDate";
$tdatathirtaxsum[".listFields"][] = "TaxabaleToDate";
$tdatathirtaxsum[".listFields"][] = "TaxToDate";

$tdatathirtaxsum[".hideMobileList"] = array();


$tdatathirtaxsum[".viewFields"] = array();

$tdatathirtaxsum[".addFields"] = array();

$tdatathirtaxsum[".masterListFields"] = array();
$tdatathirtaxsum[".masterListFields"][] = "EmployeeID";
$tdatathirtaxsum[".masterListFields"][] = "Employer";
$tdatathirtaxsum[".masterListFields"][] = "Division";
$tdatathirtaxsum[".masterListFields"][] = "WageType";
$tdatathirtaxsum[".masterListFields"][] = "13thToDate";
$tdatathirtaxsum[".masterListFields"][] = "TaxabaleToDate";
$tdatathirtaxsum[".masterListFields"][] = "TaxToDate";

$tdatathirtaxsum[".inlineAddFields"] = array();

$tdatathirtaxsum[".editFields"] = array();

$tdatathirtaxsum[".inlineEditFields"] = array();

$tdatathirtaxsum[".updateSelectedFields"] = array();


$tdatathirtaxsum[".exportFields"] = array();
$tdatathirtaxsum[".exportFields"][] = "EmployeeID";
$tdatathirtaxsum[".exportFields"][] = "Employer";
$tdatathirtaxsum[".exportFields"][] = "Division";
$tdatathirtaxsum[".exportFields"][] = "WageType";
$tdatathirtaxsum[".exportFields"][] = "13thToDate";
$tdatathirtaxsum[".exportFields"][] = "TaxabaleToDate";
$tdatathirtaxsum[".exportFields"][] = "TaxToDate";

$tdatathirtaxsum[".importFields"] = array();

$tdatathirtaxsum[".printFields"] = array();
$tdatathirtaxsum[".printFields"][] = "EmployeeID";
$tdatathirtaxsum[".printFields"][] = "Employer";
$tdatathirtaxsum[".printFields"][] = "Division";
$tdatathirtaxsum[".printFields"][] = "WageType";
$tdatathirtaxsum[".printFields"][] = "13thToDate";
$tdatathirtaxsum[".printFields"][] = "TaxabaleToDate";
$tdatathirtaxsum[".printFields"][] = "TaxToDate";


//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "thirtaxsum";
	$fdata["Label"] = GetFieldLabel("thirtaxsum","EmployeeID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatathirtaxsum["EmployeeID"] = $fdata;
//	13thToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "13thToDate";
	$fdata["GoodName"] = "13thToDate";
	$fdata["ownerTable"] = "thirtaxsum";
	$fdata["Label"] = GetFieldLabel("thirtaxsum","13thToDate");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "13thToDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`13thToDate`";

	
	
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




	$tdatathirtaxsum["13thToDate"] = $fdata;
//	TaxabaleToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TaxabaleToDate";
	$fdata["GoodName"] = "TaxabaleToDate";
	$fdata["ownerTable"] = "thirtaxsum";
	$fdata["Label"] = GetFieldLabel("thirtaxsum","TaxabaleToDate");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TaxabaleToDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TaxabaleToDate";

	
	
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




	$tdatathirtaxsum["TaxabaleToDate"] = $fdata;
//	TaxToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TaxToDate";
	$fdata["GoodName"] = "TaxToDate";
	$fdata["ownerTable"] = "thirtaxsum";
	$fdata["Label"] = GetFieldLabel("thirtaxsum","TaxToDate");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TaxToDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TaxToDate";

	
	
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




	$tdatathirtaxsum["TaxToDate"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "thirtaxsum";
	$fdata["Label"] = GetFieldLabel("thirtaxsum","Employer");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Employer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Employer";

	
	
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
	$edata["LookupTable"] = "employername";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EnID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "EmployerName";
	
	

	
	$edata["LookupOrderBy"] = "EmployerName";

	
	
	
	

	
	
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




	$tdatathirtaxsum["Employer"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "thirtaxsum";
	$fdata["Label"] = GetFieldLabel("thirtaxsum","Division");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatathirtaxsum["Division"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "thirtaxsum";
	$fdata["Label"] = GetFieldLabel("thirtaxsum","WageType");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "WageType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WageType";

	
	
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
	$edata["LookupTable"] = "empstatus";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "stID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "EmployeeStatus";
	
	

	
	$edata["LookupOrderBy"] = "EmployeeStatus";

	
	
	
	

	
	
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




	$tdatathirtaxsum["WageType"] = $fdata;


$tables_data["thirtaxsum"]=&$tdatathirtaxsum;
$field_labels["thirtaxsum"] = &$fieldLabelsthirtaxsum;
$fieldToolTips["thirtaxsum"] = &$fieldToolTipsthirtaxsum;
$placeHolders["thirtaxsum"] = &$placeHoldersthirtaxsum;
$page_titles["thirtaxsum"] = &$pageTitlesthirtaxsum;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["thirtaxsum"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["thirtaxsum"] = array();


	
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
					$masterTablesData["thirtaxsum"][0] = $masterParams;
				$masterTablesData["thirtaxsum"][0]["masterKeys"] = array();
	$masterTablesData["thirtaxsum"][0]["masterKeys"][]="EmployeeID";
				$masterTablesData["thirtaxsum"][0]["detailKeys"] = array();
	$masterTablesData["thirtaxsum"][0]["detailKeys"][]="EmployeeID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_thirtaxsum()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EmployeeID,  	`13thToDate`,  	TaxabaleToDate,  	TaxToDate,  	Employer,  	Division,  	WageType";
$proto0["m_strFrom"] = "FROM thirtaxsum";
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
	"m_strName" => "EmployeeID",
	"m_strTable" => "thirtaxsum",
	"m_srcTableName" => "thirtaxsum"
));

$proto6["m_sql"] = "EmployeeID";
$proto6["m_srcTableName"] = "thirtaxsum";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "13thToDate",
	"m_strTable" => "thirtaxsum",
	"m_srcTableName" => "thirtaxsum"
));

$proto8["m_sql"] = "`13thToDate`";
$proto8["m_srcTableName"] = "thirtaxsum";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TaxabaleToDate",
	"m_strTable" => "thirtaxsum",
	"m_srcTableName" => "thirtaxsum"
));

$proto10["m_sql"] = "TaxabaleToDate";
$proto10["m_srcTableName"] = "thirtaxsum";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TaxToDate",
	"m_strTable" => "thirtaxsum",
	"m_srcTableName" => "thirtaxsum"
));

$proto12["m_sql"] = "TaxToDate";
$proto12["m_srcTableName"] = "thirtaxsum";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "thirtaxsum",
	"m_srcTableName" => "thirtaxsum"
));

$proto14["m_sql"] = "Employer";
$proto14["m_srcTableName"] = "thirtaxsum";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "thirtaxsum",
	"m_srcTableName" => "thirtaxsum"
));

$proto16["m_sql"] = "Division";
$proto16["m_srcTableName"] = "thirtaxsum";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "WageType",
	"m_strTable" => "thirtaxsum",
	"m_srcTableName" => "thirtaxsum"
));

$proto18["m_sql"] = "WageType";
$proto18["m_srcTableName"] = "thirtaxsum";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "thirtaxsum";
$proto21["m_srcTableName"] = "thirtaxsum";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "EmployeeID";
$proto21["m_columns"][] = "13thToDate";
$proto21["m_columns"][] = "TaxabaleToDate";
$proto21["m_columns"][] = "TaxToDate";
$proto21["m_columns"][] = "Employer";
$proto21["m_columns"][] = "Division";
$proto21["m_columns"][] = "WageType";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "thirtaxsum";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "thirtaxsum";
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
$proto0["m_srcTableName"]="thirtaxsum";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_thirtaxsum = createSqlQuery_thirtaxsum();


	
		;

							

$tdatathirtaxsum[".sqlquery"] = $queryData_thirtaxsum;

$tableEvents["thirtaxsum"] = new eventsBase;
$tdatathirtaxsum[".hasEvents"] = false;

?>