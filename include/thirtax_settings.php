<?php
require_once(getabspath("classes/cipherer.php"));




$tdatathirtax = array();
	$tdatathirtax[".truncateText"] = true;
	$tdatathirtax[".NumberOfChars"] = 80;
	$tdatathirtax[".ShortName"] = "thirtax";
	$tdatathirtax[".OwnerID"] = "";
	$tdatathirtax[".OriginalTable"] = "thirtax";

//	field labels
$fieldLabelsthirtax = array();
$fieldToolTipsthirtax = array();
$pageTitlesthirtax = array();
$placeHoldersthirtax = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsthirtax["English"] = array();
	$fieldToolTipsthirtax["English"] = array();
	$placeHoldersthirtax["English"] = array();
	$pageTitlesthirtax["English"] = array();
	$fieldLabelsthirtax["English"]["PtabID"] = "Ptab ID";
	$fieldToolTipsthirtax["English"]["PtabID"] = "";
	$placeHoldersthirtax["English"]["PtabID"] = "";
	$fieldLabelsthirtax["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipsthirtax["English"]["EmployeeID"] = "";
	$placeHoldersthirtax["English"]["EmployeeID"] = "";
	$fieldLabelsthirtax["English"]["FromDate"] = "From Date";
	$fieldToolTipsthirtax["English"]["FromDate"] = "";
	$placeHoldersthirtax["English"]["FromDate"] = "";
	$fieldLabelsthirtax["English"]["ToDate"] = "To Date";
	$fieldToolTipsthirtax["English"]["ToDate"] = "";
	$placeHoldersthirtax["English"]["ToDate"] = "";
	$fieldLabelsthirtax["English"]["WageType"] = "Wage Type";
	$fieldToolTipsthirtax["English"]["WageType"] = "";
	$placeHoldersthirtax["English"]["WageType"] = "";
	$fieldLabelsthirtax["English"]["Thirteenth"] = "13th Month";
	$fieldToolTipsthirtax["English"]["Thirteenth"] = "";
	$placeHoldersthirtax["English"]["Thirteenth"] = "";
	$fieldLabelsthirtax["English"]["Taxable"] = "Taxable";
	$fieldToolTipsthirtax["English"]["Taxable"] = "";
	$placeHoldersthirtax["English"]["Taxable"] = "";
	$fieldLabelsthirtax["English"]["Tax"] = "Tax";
	$fieldToolTipsthirtax["English"]["Tax"] = "";
	$placeHoldersthirtax["English"]["Tax"] = "";
	$fieldLabelsthirtax["English"]["Employer"] = "Employer";
	$fieldToolTipsthirtax["English"]["Employer"] = "";
	$placeHoldersthirtax["English"]["Employer"] = "";
	$fieldLabelsthirtax["English"]["Division"] = "Division";
	$fieldToolTipsthirtax["English"]["Division"] = "";
	$placeHoldersthirtax["English"]["Division"] = "";
	if (count($fieldToolTipsthirtax["English"]))
		$tdatathirtax[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsthirtax[""] = array();
	$fieldToolTipsthirtax[""] = array();
	$placeHoldersthirtax[""] = array();
	$pageTitlesthirtax[""] = array();
	$fieldLabelsthirtax[""]["PtabID"] = "Ptab ID";
	$fieldToolTipsthirtax[""]["PtabID"] = "";
	$placeHoldersthirtax[""]["PtabID"] = "";
	$fieldLabelsthirtax[""]["EmployeeID"] = "Employee ID";
	$fieldToolTipsthirtax[""]["EmployeeID"] = "";
	$placeHoldersthirtax[""]["EmployeeID"] = "";
	$fieldLabelsthirtax[""]["FromDate"] = "From Date";
	$fieldToolTipsthirtax[""]["FromDate"] = "";
	$placeHoldersthirtax[""]["FromDate"] = "";
	$fieldLabelsthirtax[""]["ToDate"] = "To Date";
	$fieldToolTipsthirtax[""]["ToDate"] = "";
	$placeHoldersthirtax[""]["ToDate"] = "";
	$fieldLabelsthirtax[""]["WageType"] = "Wage Type";
	$fieldToolTipsthirtax[""]["WageType"] = "";
	$placeHoldersthirtax[""]["WageType"] = "";
	$fieldLabelsthirtax[""]["Thirteenth"] = "Thirteenth";
	$fieldToolTipsthirtax[""]["Thirteenth"] = "";
	$placeHoldersthirtax[""]["Thirteenth"] = "";
	$fieldLabelsthirtax[""]["Taxable"] = "Taxable";
	$fieldToolTipsthirtax[""]["Taxable"] = "";
	$placeHoldersthirtax[""]["Taxable"] = "";
	$fieldLabelsthirtax[""]["Tax"] = "Tax";
	$fieldToolTipsthirtax[""]["Tax"] = "";
	$placeHoldersthirtax[""]["Tax"] = "";
	$fieldLabelsthirtax[""]["Employer"] = "Employer";
	$fieldToolTipsthirtax[""]["Employer"] = "";
	$placeHoldersthirtax[""]["Employer"] = "";
	$fieldLabelsthirtax[""]["Division"] = "Division";
	$fieldToolTipsthirtax[""]["Division"] = "";
	$placeHoldersthirtax[""]["Division"] = "";
	if (count($fieldToolTipsthirtax[""]))
		$tdatathirtax[".isUseToolTips"] = true;
}


	$tdatathirtax[".NCSearch"] = true;



$tdatathirtax[".shortTableName"] = "thirtax";
$tdatathirtax[".nSecOptions"] = 0;
$tdatathirtax[".recsPerRowPrint"] = 1;
$tdatathirtax[".mainTableOwnerID"] = "";
$tdatathirtax[".moveNext"] = 1;
$tdatathirtax[".entityType"] = 0;

$tdatathirtax[".strOriginalTableName"] = "thirtax";

	



$tdatathirtax[".showAddInPopup"] = false;

$tdatathirtax[".showEditInPopup"] = false;

$tdatathirtax[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatathirtax[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatathirtax[".fieldsForRegister"] = array();

$tdatathirtax[".listAjax"] = false;

	$tdatathirtax[".audit"] = false;

	$tdatathirtax[".locking"] = false;



$tdatathirtax[".list"] = true;



$tdatathirtax[".reorderRecordsByHeader"] = true;


$tdatathirtax[".exportFormatting"] = 2;
$tdatathirtax[".exportDelimiter"] = ",";
		


$tdatathirtax[".exportTo"] = true;

$tdatathirtax[".printFriendly"] = true;


$tdatathirtax[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatathirtax[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatathirtax[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatathirtax[".searchSaving"] = false;
//

$tdatathirtax[".showSearchPanel"] = true;
		$tdatathirtax[".flexibleSearch"] = true;

$tdatathirtax[".isUseAjaxSuggest"] = true;

$tdatathirtax[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																												

$tdatathirtax[".ajaxCodeSnippetAdded"] = false;

$tdatathirtax[".buttonsAdded"] = false;

$tdatathirtax[".addPageEvents"] = false;

// use timepicker for search panel
$tdatathirtax[".isUseTimeForSearch"] = false;



$tdatathirtax[".badgeColor"] = "db7093";


$tdatathirtax[".allSearchFields"] = array();
$tdatathirtax[".filterFields"] = array();
$tdatathirtax[".requiredSearchFields"] = array();

$tdatathirtax[".allSearchFields"][] = "PtabID";
	$tdatathirtax[".allSearchFields"][] = "EmployeeID";
	$tdatathirtax[".allSearchFields"][] = "Employer";
	$tdatathirtax[".allSearchFields"][] = "Division";
	$tdatathirtax[".allSearchFields"][] = "WageType";
	$tdatathirtax[".allSearchFields"][] = "FromDate";
	$tdatathirtax[".allSearchFields"][] = "ToDate";
	$tdatathirtax[".allSearchFields"][] = "Thirteenth";
	$tdatathirtax[".allSearchFields"][] = "Taxable";
	$tdatathirtax[".allSearchFields"][] = "Tax";
	

$tdatathirtax[".googleLikeFields"] = array();
$tdatathirtax[".googleLikeFields"][] = "PtabID";
$tdatathirtax[".googleLikeFields"][] = "EmployeeID";
$tdatathirtax[".googleLikeFields"][] = "FromDate";
$tdatathirtax[".googleLikeFields"][] = "ToDate";
$tdatathirtax[".googleLikeFields"][] = "WageType";
$tdatathirtax[".googleLikeFields"][] = "Thirteenth";
$tdatathirtax[".googleLikeFields"][] = "Taxable";
$tdatathirtax[".googleLikeFields"][] = "Tax";
$tdatathirtax[".googleLikeFields"][] = "Employer";
$tdatathirtax[".googleLikeFields"][] = "Division";


$tdatathirtax[".advSearchFields"] = array();
$tdatathirtax[".advSearchFields"][] = "PtabID";
$tdatathirtax[".advSearchFields"][] = "EmployeeID";
$tdatathirtax[".advSearchFields"][] = "Employer";
$tdatathirtax[".advSearchFields"][] = "Division";
$tdatathirtax[".advSearchFields"][] = "WageType";
$tdatathirtax[".advSearchFields"][] = "FromDate";
$tdatathirtax[".advSearchFields"][] = "ToDate";
$tdatathirtax[".advSearchFields"][] = "Thirteenth";
$tdatathirtax[".advSearchFields"][] = "Taxable";
$tdatathirtax[".advSearchFields"][] = "Tax";

$tdatathirtax[".tableType"] = "list";

$tdatathirtax[".printerPageOrientation"] = 0;
$tdatathirtax[".nPrinterPageScale"] = 100;

$tdatathirtax[".nPrinterSplitRecords"] = 40;

$tdatathirtax[".nPrinterPDFSplitRecords"] = 40;



$tdatathirtax[".geocodingEnabled"] = false;





$tdatathirtax[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatathirtax[".totalsFields"] = array();
$tdatathirtax[".totalsFields"][] = array(
	"fName" => "Thirteenth",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatathirtax[".totalsFields"][] = array(
	"fName" => "Taxable",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatathirtax[".totalsFields"][] = array(
	"fName" => "Tax",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatathirtax[".pageSize"] = 20;

$tdatathirtax[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatathirtax[".strOrderBy"] = $tstrOrderBy;

$tdatathirtax[".orderindexes"] = array();

$tdatathirtax[".sqlHead"] = "SELECT PtabID,  	EmployeeID,  	FromDate,  	ToDate,  	WageType,  	Thirteenth,  	Taxable,  	Tax,  	Employer,  	Division";
$tdatathirtax[".sqlFrom"] = "FROM thirtax";
$tdatathirtax[".sqlWhereExpr"] = "";
$tdatathirtax[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatathirtax[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatathirtax[".arrGroupsPerPage"] = $arrGPP;

$tdatathirtax[".highlightSearchResults"] = true;

$tableKeysthirtax = array();
$tableKeysthirtax[] = "PtabID";
$tdatathirtax[".Keys"] = $tableKeysthirtax;

$tdatathirtax[".listFields"] = array();
$tdatathirtax[".listFields"][] = "PtabID";
$tdatathirtax[".listFields"][] = "EmployeeID";
$tdatathirtax[".listFields"][] = "Employer";
$tdatathirtax[".listFields"][] = "Division";
$tdatathirtax[".listFields"][] = "WageType";
$tdatathirtax[".listFields"][] = "FromDate";
$tdatathirtax[".listFields"][] = "ToDate";
$tdatathirtax[".listFields"][] = "Thirteenth";
$tdatathirtax[".listFields"][] = "Taxable";
$tdatathirtax[".listFields"][] = "Tax";

$tdatathirtax[".hideMobileList"] = array();


$tdatathirtax[".viewFields"] = array();

$tdatathirtax[".addFields"] = array();

$tdatathirtax[".masterListFields"] = array();
$tdatathirtax[".masterListFields"][] = "PtabID";
$tdatathirtax[".masterListFields"][] = "EmployeeID";
$tdatathirtax[".masterListFields"][] = "Employer";
$tdatathirtax[".masterListFields"][] = "Division";
$tdatathirtax[".masterListFields"][] = "WageType";
$tdatathirtax[".masterListFields"][] = "FromDate";
$tdatathirtax[".masterListFields"][] = "ToDate";
$tdatathirtax[".masterListFields"][] = "Thirteenth";
$tdatathirtax[".masterListFields"][] = "Taxable";
$tdatathirtax[".masterListFields"][] = "Tax";

$tdatathirtax[".inlineAddFields"] = array();

$tdatathirtax[".editFields"] = array();

$tdatathirtax[".inlineEditFields"] = array();

$tdatathirtax[".updateSelectedFields"] = array();


$tdatathirtax[".exportFields"] = array();
$tdatathirtax[".exportFields"][] = "PtabID";
$tdatathirtax[".exportFields"][] = "EmployeeID";
$tdatathirtax[".exportFields"][] = "Employer";
$tdatathirtax[".exportFields"][] = "Division";
$tdatathirtax[".exportFields"][] = "WageType";
$tdatathirtax[".exportFields"][] = "FromDate";
$tdatathirtax[".exportFields"][] = "ToDate";
$tdatathirtax[".exportFields"][] = "Thirteenth";
$tdatathirtax[".exportFields"][] = "Taxable";
$tdatathirtax[".exportFields"][] = "Tax";

$tdatathirtax[".importFields"] = array();

$tdatathirtax[".printFields"] = array();
$tdatathirtax[".printFields"][] = "PtabID";
$tdatathirtax[".printFields"][] = "EmployeeID";
$tdatathirtax[".printFields"][] = "Employer";
$tdatathirtax[".printFields"][] = "Division";
$tdatathirtax[".printFields"][] = "WageType";
$tdatathirtax[".printFields"][] = "FromDate";
$tdatathirtax[".printFields"][] = "ToDate";
$tdatathirtax[".printFields"][] = "Thirteenth";
$tdatathirtax[".printFields"][] = "Taxable";
$tdatathirtax[".printFields"][] = "Tax";


//	PtabID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PtabID";
	$fdata["GoodName"] = "PtabID";
	$fdata["ownerTable"] = "thirtax";
	$fdata["Label"] = GetFieldLabel("thirtax","PtabID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PtabID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PtabID";

	
	
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




	$tdatathirtax["PtabID"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "thirtax";
	$fdata["Label"] = GetFieldLabel("thirtax","EmployeeID");
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




	$tdatathirtax["EmployeeID"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "thirtax";
	$fdata["Label"] = GetFieldLabel("thirtax","FromDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FromDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FromDate";

	
	
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




	$tdatathirtax["FromDate"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "thirtax";
	$fdata["Label"] = GetFieldLabel("thirtax","ToDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ToDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ToDate";

	
	
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




	$tdatathirtax["ToDate"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "thirtax";
	$fdata["Label"] = GetFieldLabel("thirtax","WageType");
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




	$tdatathirtax["WageType"] = $fdata;
//	Thirteenth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Thirteenth";
	$fdata["GoodName"] = "Thirteenth";
	$fdata["ownerTable"] = "thirtax";
	$fdata["Label"] = GetFieldLabel("thirtax","Thirteenth");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Thirteenth";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Thirteenth";

	
	
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




	$tdatathirtax["Thirteenth"] = $fdata;
//	Taxable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Taxable";
	$fdata["GoodName"] = "Taxable";
	$fdata["ownerTable"] = "thirtax";
	$fdata["Label"] = GetFieldLabel("thirtax","Taxable");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Taxable";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Taxable";

	
	
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




	$tdatathirtax["Taxable"] = $fdata;
//	Tax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Tax";
	$fdata["GoodName"] = "Tax";
	$fdata["ownerTable"] = "thirtax";
	$fdata["Label"] = GetFieldLabel("thirtax","Tax");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Tax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tax";

	
	
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




	$tdatathirtax["Tax"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "thirtax";
	$fdata["Label"] = GetFieldLabel("thirtax","Employer");
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




	$tdatathirtax["Employer"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "thirtax";
	$fdata["Label"] = GetFieldLabel("thirtax","Division");
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




	$tdatathirtax["Division"] = $fdata;


$tables_data["thirtax"]=&$tdatathirtax;
$field_labels["thirtax"] = &$fieldLabelsthirtax;
$fieldToolTips["thirtax"] = &$fieldToolTipsthirtax;
$placeHolders["thirtax"] = &$placeHoldersthirtax;
$page_titles["thirtax"] = &$pageTitlesthirtax;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["thirtax"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["thirtax"] = array();


	
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
					$masterTablesData["thirtax"][0] = $masterParams;
				$masterTablesData["thirtax"][0]["masterKeys"] = array();
	$masterTablesData["thirtax"][0]["masterKeys"][]="EmployeeID";
				$masterTablesData["thirtax"][0]["detailKeys"] = array();
	$masterTablesData["thirtax"][0]["detailKeys"][]="EmployeeID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_thirtax()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PtabID,  	EmployeeID,  	FromDate,  	ToDate,  	WageType,  	Thirteenth,  	Taxable,  	Tax,  	Employer,  	Division";
$proto0["m_strFrom"] = "FROM thirtax";
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
	"m_strName" => "PtabID",
	"m_strTable" => "thirtax",
	"m_srcTableName" => "thirtax"
));

$proto6["m_sql"] = "PtabID";
$proto6["m_srcTableName"] = "thirtax";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "thirtax",
	"m_srcTableName" => "thirtax"
));

$proto8["m_sql"] = "EmployeeID";
$proto8["m_srcTableName"] = "thirtax";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "thirtax",
	"m_srcTableName" => "thirtax"
));

$proto10["m_sql"] = "FromDate";
$proto10["m_srcTableName"] = "thirtax";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "thirtax",
	"m_srcTableName" => "thirtax"
));

$proto12["m_sql"] = "ToDate";
$proto12["m_srcTableName"] = "thirtax";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "WageType",
	"m_strTable" => "thirtax",
	"m_srcTableName" => "thirtax"
));

$proto14["m_sql"] = "WageType";
$proto14["m_srcTableName"] = "thirtax";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Thirteenth",
	"m_strTable" => "thirtax",
	"m_srcTableName" => "thirtax"
));

$proto16["m_sql"] = "Thirteenth";
$proto16["m_srcTableName"] = "thirtax";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Taxable",
	"m_strTable" => "thirtax",
	"m_srcTableName" => "thirtax"
));

$proto18["m_sql"] = "Taxable";
$proto18["m_srcTableName"] = "thirtax";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Tax",
	"m_strTable" => "thirtax",
	"m_srcTableName" => "thirtax"
));

$proto20["m_sql"] = "Tax";
$proto20["m_srcTableName"] = "thirtax";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "thirtax",
	"m_srcTableName" => "thirtax"
));

$proto22["m_sql"] = "Employer";
$proto22["m_srcTableName"] = "thirtax";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "thirtax",
	"m_srcTableName" => "thirtax"
));

$proto24["m_sql"] = "Division";
$proto24["m_srcTableName"] = "thirtax";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "thirtax";
$proto27["m_srcTableName"] = "thirtax";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "PtabID";
$proto27["m_columns"][] = "EmployeeID";
$proto27["m_columns"][] = "FromDate";
$proto27["m_columns"][] = "ToDate";
$proto27["m_columns"][] = "WageType";
$proto27["m_columns"][] = "Thirteenth";
$proto27["m_columns"][] = "Taxable";
$proto27["m_columns"][] = "Tax";
$proto27["m_columns"][] = "Employer";
$proto27["m_columns"][] = "Division";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "thirtax";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "thirtax";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="thirtax";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_thirtax = createSqlQuery_thirtax();


	
		;

										

$tdatathirtax[".sqlquery"] = $queryData_thirtax;

$tableEvents["thirtax"] = new eventsBase;
$tdatathirtax[".hasEvents"] = false;

?>