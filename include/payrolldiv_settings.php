<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapayrolldiv = array();
	$tdatapayrolldiv[".truncateText"] = true;
	$tdatapayrolldiv[".NumberOfChars"] = 80;
	$tdatapayrolldiv[".ShortName"] = "payrolldiv";
	$tdatapayrolldiv[".OwnerID"] = "";
	$tdatapayrolldiv[".OriginalTable"] = "payrolldiv";

//	field labels
$fieldLabelspayrolldiv = array();
$fieldToolTipspayrolldiv = array();
$pageTitlespayrolldiv = array();
$placeHolderspayrolldiv = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspayrolldiv["English"] = array();
	$fieldToolTipspayrolldiv["English"] = array();
	$placeHolderspayrolldiv["English"] = array();
	$pageTitlespayrolldiv["English"] = array();
	$fieldLabelspayrolldiv["English"]["PRollID"] = "PRoll ID";
	$fieldToolTipspayrolldiv["English"]["PRollID"] = "";
	$placeHolderspayrolldiv["English"]["PRollID"] = "";
	$fieldLabelspayrolldiv["English"]["Employer"] = "Employer";
	$fieldToolTipspayrolldiv["English"]["Employer"] = "";
	$placeHolderspayrolldiv["English"]["Employer"] = "";
	$fieldLabelspayrolldiv["English"]["Division"] = "Division";
	$fieldToolTipspayrolldiv["English"]["Division"] = "";
	$placeHolderspayrolldiv["English"]["Division"] = "";
	$fieldLabelspayrolldiv["English"]["FromDate"] = "From Date";
	$fieldToolTipspayrolldiv["English"]["FromDate"] = "";
	$placeHolderspayrolldiv["English"]["FromDate"] = "";
	$fieldLabelspayrolldiv["English"]["ToDate"] = "To Date";
	$fieldToolTipspayrolldiv["English"]["ToDate"] = "";
	$placeHolderspayrolldiv["English"]["ToDate"] = "";
	$fieldLabelspayrolldiv["English"]["WageType"] = "Wage Type";
	$fieldToolTipspayrolldiv["English"]["WageType"] = "";
	$placeHolderspayrolldiv["English"]["WageType"] = "";
	$fieldLabelspayrolldiv["English"]["Locked"] = "Locked";
	$fieldToolTipspayrolldiv["English"]["Locked"] = "";
	$placeHolderspayrolldiv["English"]["Locked"] = "";
	if (count($fieldToolTipspayrolldiv["English"]))
		$tdatapayrolldiv[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspayrolldiv[""] = array();
	$fieldToolTipspayrolldiv[""] = array();
	$placeHolderspayrolldiv[""] = array();
	$pageTitlespayrolldiv[""] = array();
	if (count($fieldToolTipspayrolldiv[""]))
		$tdatapayrolldiv[".isUseToolTips"] = true;
}


	$tdatapayrolldiv[".NCSearch"] = true;



$tdatapayrolldiv[".shortTableName"] = "payrolldiv";
$tdatapayrolldiv[".nSecOptions"] = 0;
$tdatapayrolldiv[".recsPerRowPrint"] = 1;
$tdatapayrolldiv[".mainTableOwnerID"] = "";
$tdatapayrolldiv[".moveNext"] = 1;
$tdatapayrolldiv[".entityType"] = 0;

$tdatapayrolldiv[".strOriginalTableName"] = "payrolldiv";

	



$tdatapayrolldiv[".showAddInPopup"] = false;

$tdatapayrolldiv[".showEditInPopup"] = false;

$tdatapayrolldiv[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapayrolldiv[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapayrolldiv[".fieldsForRegister"] = array();

$tdatapayrolldiv[".listAjax"] = false;

	$tdatapayrolldiv[".audit"] = false;

	$tdatapayrolldiv[".locking"] = false;

$tdatapayrolldiv[".edit"] = true;
$tdatapayrolldiv[".afterEditAction"] = 1;
$tdatapayrolldiv[".closePopupAfterEdit"] = 1;
$tdatapayrolldiv[".afterEditActionDetTable"] = "";

$tdatapayrolldiv[".add"] = true;
$tdatapayrolldiv[".afterAddAction"] = 1;
$tdatapayrolldiv[".closePopupAfterAdd"] = 1;
$tdatapayrolldiv[".afterAddActionDetTable"] = "";

$tdatapayrolldiv[".list"] = true;



$tdatapayrolldiv[".reorderRecordsByHeader"] = true;


$tdatapayrolldiv[".exportFormatting"] = 2;
$tdatapayrolldiv[".exportDelimiter"] = ",";
		
$tdatapayrolldiv[".view"] = true;

$tdatapayrolldiv[".import"] = true;

$tdatapayrolldiv[".exportTo"] = true;

$tdatapayrolldiv[".printFriendly"] = true;

$tdatapayrolldiv[".delete"] = true;

$tdatapayrolldiv[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapayrolldiv[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapayrolldiv[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapayrolldiv[".searchSaving"] = false;
//

$tdatapayrolldiv[".showSearchPanel"] = true;
		$tdatapayrolldiv[".flexibleSearch"] = true;

$tdatapayrolldiv[".isUseAjaxSuggest"] = true;

$tdatapayrolldiv[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																							
							
							
							
							
																										

$tdatapayrolldiv[".ajaxCodeSnippetAdded"] = false;

$tdatapayrolldiv[".buttonsAdded"] = true;

$tdatapayrolldiv[".addPageEvents"] = true;

// use timepicker for search panel
$tdatapayrolldiv[".isUseTimeForSearch"] = false;



$tdatapayrolldiv[".badgeColor"] = "3cb371";


$tdatapayrolldiv[".allSearchFields"] = array();
$tdatapayrolldiv[".filterFields"] = array();
$tdatapayrolldiv[".requiredSearchFields"] = array();

$tdatapayrolldiv[".allSearchFields"][] = "PRollID";
	$tdatapayrolldiv[".allSearchFields"][] = "Locked";
	$tdatapayrolldiv[".allSearchFields"][] = "Employer";
	$tdatapayrolldiv[".allSearchFields"][] = "Division";
	$tdatapayrolldiv[".allSearchFields"][] = "WageType";
	$tdatapayrolldiv[".allSearchFields"][] = "FromDate";
	$tdatapayrolldiv[".allSearchFields"][] = "ToDate";
	

$tdatapayrolldiv[".googleLikeFields"] = array();
$tdatapayrolldiv[".googleLikeFields"][] = "PRollID";
$tdatapayrolldiv[".googleLikeFields"][] = "Employer";
$tdatapayrolldiv[".googleLikeFields"][] = "Division";
$tdatapayrolldiv[".googleLikeFields"][] = "FromDate";
$tdatapayrolldiv[".googleLikeFields"][] = "ToDate";
$tdatapayrolldiv[".googleLikeFields"][] = "WageType";
$tdatapayrolldiv[".googleLikeFields"][] = "Locked";


$tdatapayrolldiv[".advSearchFields"] = array();
$tdatapayrolldiv[".advSearchFields"][] = "PRollID";
$tdatapayrolldiv[".advSearchFields"][] = "Locked";
$tdatapayrolldiv[".advSearchFields"][] = "Employer";
$tdatapayrolldiv[".advSearchFields"][] = "Division";
$tdatapayrolldiv[".advSearchFields"][] = "WageType";
$tdatapayrolldiv[".advSearchFields"][] = "FromDate";
$tdatapayrolldiv[".advSearchFields"][] = "ToDate";

$tdatapayrolldiv[".tableType"] = "list";

$tdatapayrolldiv[".printerPageOrientation"] = 0;
$tdatapayrolldiv[".nPrinterPageScale"] = 100;

$tdatapayrolldiv[".nPrinterSplitRecords"] = 40;

$tdatapayrolldiv[".nPrinterPDFSplitRecords"] = 40;



$tdatapayrolldiv[".geocodingEnabled"] = false;





$tdatapayrolldiv[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatapayrolldiv[".pageSize"] = 20;

$tdatapayrolldiv[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapayrolldiv[".strOrderBy"] = $tstrOrderBy;

$tdatapayrolldiv[".orderindexes"] = array();

$tdatapayrolldiv[".sqlHead"] = "SELECT PRollID,  	Employer,  	Division,  	FromDate,  	ToDate,  	WageType,  	Locked";
$tdatapayrolldiv[".sqlFrom"] = "FROM payrolldiv";
$tdatapayrolldiv[".sqlWhereExpr"] = "";
$tdatapayrolldiv[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapayrolldiv[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapayrolldiv[".arrGroupsPerPage"] = $arrGPP;

$tdatapayrolldiv[".highlightSearchResults"] = true;

$tableKeyspayrolldiv = array();
$tableKeyspayrolldiv[] = "PRollID";
$tdatapayrolldiv[".Keys"] = $tableKeyspayrolldiv;

$tdatapayrolldiv[".listFields"] = array();
$tdatapayrolldiv[".listFields"][] = "PRollID";
$tdatapayrolldiv[".listFields"][] = "Locked";
$tdatapayrolldiv[".listFields"][] = "Employer";
$tdatapayrolldiv[".listFields"][] = "Division";
$tdatapayrolldiv[".listFields"][] = "WageType";
$tdatapayrolldiv[".listFields"][] = "FromDate";
$tdatapayrolldiv[".listFields"][] = "ToDate";

$tdatapayrolldiv[".hideMobileList"] = array();


$tdatapayrolldiv[".viewFields"] = array();
$tdatapayrolldiv[".viewFields"][] = "PRollID";
$tdatapayrolldiv[".viewFields"][] = "Locked";
$tdatapayrolldiv[".viewFields"][] = "Employer";
$tdatapayrolldiv[".viewFields"][] = "Division";
$tdatapayrolldiv[".viewFields"][] = "WageType";
$tdatapayrolldiv[".viewFields"][] = "FromDate";
$tdatapayrolldiv[".viewFields"][] = "ToDate";

$tdatapayrolldiv[".addFields"] = array();
$tdatapayrolldiv[".addFields"][] = "Locked";
$tdatapayrolldiv[".addFields"][] = "Employer";
$tdatapayrolldiv[".addFields"][] = "Division";
$tdatapayrolldiv[".addFields"][] = "WageType";
$tdatapayrolldiv[".addFields"][] = "FromDate";
$tdatapayrolldiv[".addFields"][] = "ToDate";

$tdatapayrolldiv[".masterListFields"] = array();
$tdatapayrolldiv[".masterListFields"][] = "PRollID";
$tdatapayrolldiv[".masterListFields"][] = "Locked";
$tdatapayrolldiv[".masterListFields"][] = "Employer";
$tdatapayrolldiv[".masterListFields"][] = "Division";
$tdatapayrolldiv[".masterListFields"][] = "WageType";
$tdatapayrolldiv[".masterListFields"][] = "FromDate";
$tdatapayrolldiv[".masterListFields"][] = "ToDate";

$tdatapayrolldiv[".inlineAddFields"] = array();

$tdatapayrolldiv[".editFields"] = array();
$tdatapayrolldiv[".editFields"][] = "Locked";
$tdatapayrolldiv[".editFields"][] = "Employer";
$tdatapayrolldiv[".editFields"][] = "Division";
$tdatapayrolldiv[".editFields"][] = "WageType";
$tdatapayrolldiv[".editFields"][] = "FromDate";
$tdatapayrolldiv[".editFields"][] = "ToDate";

$tdatapayrolldiv[".inlineEditFields"] = array();

$tdatapayrolldiv[".updateSelectedFields"] = array();
$tdatapayrolldiv[".updateSelectedFields"][] = "Locked";
$tdatapayrolldiv[".updateSelectedFields"][] = "Employer";
$tdatapayrolldiv[".updateSelectedFields"][] = "Division";
$tdatapayrolldiv[".updateSelectedFields"][] = "WageType";
$tdatapayrolldiv[".updateSelectedFields"][] = "FromDate";
$tdatapayrolldiv[".updateSelectedFields"][] = "ToDate";


$tdatapayrolldiv[".exportFields"] = array();
$tdatapayrolldiv[".exportFields"][] = "PRollID";
$tdatapayrolldiv[".exportFields"][] = "Locked";
$tdatapayrolldiv[".exportFields"][] = "Employer";
$tdatapayrolldiv[".exportFields"][] = "Division";
$tdatapayrolldiv[".exportFields"][] = "WageType";
$tdatapayrolldiv[".exportFields"][] = "FromDate";
$tdatapayrolldiv[".exportFields"][] = "ToDate";

$tdatapayrolldiv[".importFields"] = array();
$tdatapayrolldiv[".importFields"][] = "PRollID";
$tdatapayrolldiv[".importFields"][] = "Employer";
$tdatapayrolldiv[".importFields"][] = "Division";
$tdatapayrolldiv[".importFields"][] = "FromDate";
$tdatapayrolldiv[".importFields"][] = "ToDate";
$tdatapayrolldiv[".importFields"][] = "WageType";
$tdatapayrolldiv[".importFields"][] = "Locked";

$tdatapayrolldiv[".printFields"] = array();
$tdatapayrolldiv[".printFields"][] = "PRollID";
$tdatapayrolldiv[".printFields"][] = "Locked";
$tdatapayrolldiv[".printFields"][] = "Employer";
$tdatapayrolldiv[".printFields"][] = "Division";
$tdatapayrolldiv[".printFields"][] = "WageType";
$tdatapayrolldiv[".printFields"][] = "FromDate";
$tdatapayrolldiv[".printFields"][] = "ToDate";


//	PRollID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PRollID";
	$fdata["GoodName"] = "PRollID";
	$fdata["ownerTable"] = "payrolldiv";
	$fdata["Label"] = GetFieldLabel("payrolldiv","PRollID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PRollID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRollID";

	
	
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




	$tdatapayrolldiv["PRollID"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "payrolldiv";
	$fdata["Label"] = GetFieldLabel("payrolldiv","Employer");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

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




	$tdatapayrolldiv["Employer"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "payrolldiv";
	$fdata["Label"] = GetFieldLabel("payrolldiv","Division");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdatapayrolldiv["Division"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "payrolldiv";
	$fdata["Label"] = GetFieldLabel("payrolldiv","FromDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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




	$tdatapayrolldiv["FromDate"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "payrolldiv";
	$fdata["Label"] = GetFieldLabel("payrolldiv","ToDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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




	$tdatapayrolldiv["ToDate"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "payrolldiv";
	$fdata["Label"] = GetFieldLabel("payrolldiv","WageType");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

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
	$edata["LookupTable"] = "emptype";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ECatID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "EmployeeType";
	
	

	
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




	$tdatapayrolldiv["WageType"] = $fdata;
//	Locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Locked";
	$fdata["GoodName"] = "Locked";
	$fdata["ownerTable"] = "payrolldiv";
	$fdata["Label"] = GetFieldLabel("payrolldiv","Locked");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
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




	$tdatapayrolldiv["Locked"] = $fdata;


$tables_data["payrolldiv"]=&$tdatapayrolldiv;
$field_labels["payrolldiv"] = &$fieldLabelspayrolldiv;
$fieldToolTips["payrolldiv"] = &$fieldToolTipspayrolldiv;
$placeHolders["payrolldiv"] = &$placeHolderspayrolldiv;
$page_titles["payrolldiv"] = &$pageTitlespayrolldiv;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["payrolldiv"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["payrolldiv"] = array();


	
				$strOriginalDetailsTable="payroll";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="payroll";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "payroll";
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
					$masterTablesData["payrolldiv"][0] = $masterParams;
				$masterTablesData["payrolldiv"][0]["masterKeys"] = array();
	$masterTablesData["payrolldiv"][0]["masterKeys"][]="PayFromDate";
				$masterTablesData["payrolldiv"][0]["masterKeys"][]="PayToDate";
				$masterTablesData["payrolldiv"][0]["masterKeys"][]="Employer";
				$masterTablesData["payrolldiv"][0]["masterKeys"][]="Division";
				$masterTablesData["payrolldiv"][0]["masterKeys"][]="WageType";
				$masterTablesData["payrolldiv"][0]["detailKeys"] = array();
	$masterTablesData["payrolldiv"][0]["detailKeys"][]="FromDate";
				$masterTablesData["payrolldiv"][0]["detailKeys"][]="ToDate";
				$masterTablesData["payrolldiv"][0]["detailKeys"][]="Employer";
				$masterTablesData["payrolldiv"][0]["detailKeys"][]="Division";
				$masterTablesData["payrolldiv"][0]["detailKeys"][]="WageType";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_payrolldiv()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PRollID,  	Employer,  	Division,  	FromDate,  	ToDate,  	WageType,  	Locked";
$proto0["m_strFrom"] = "FROM payrolldiv";
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
	"m_strName" => "PRollID",
	"m_strTable" => "payrolldiv",
	"m_srcTableName" => "payrolldiv"
));

$proto6["m_sql"] = "PRollID";
$proto6["m_srcTableName"] = "payrolldiv";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "payrolldiv",
	"m_srcTableName" => "payrolldiv"
));

$proto8["m_sql"] = "Employer";
$proto8["m_srcTableName"] = "payrolldiv";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "payrolldiv",
	"m_srcTableName" => "payrolldiv"
));

$proto10["m_sql"] = "Division";
$proto10["m_srcTableName"] = "payrolldiv";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "payrolldiv",
	"m_srcTableName" => "payrolldiv"
));

$proto12["m_sql"] = "FromDate";
$proto12["m_srcTableName"] = "payrolldiv";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "payrolldiv",
	"m_srcTableName" => "payrolldiv"
));

$proto14["m_sql"] = "ToDate";
$proto14["m_srcTableName"] = "payrolldiv";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "WageType",
	"m_strTable" => "payrolldiv",
	"m_srcTableName" => "payrolldiv"
));

$proto16["m_sql"] = "WageType";
$proto16["m_srcTableName"] = "payrolldiv";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Locked",
	"m_strTable" => "payrolldiv",
	"m_srcTableName" => "payrolldiv"
));

$proto18["m_sql"] = "Locked";
$proto18["m_srcTableName"] = "payrolldiv";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "payrolldiv";
$proto21["m_srcTableName"] = "payrolldiv";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "PRollID";
$proto21["m_columns"][] = "Employer";
$proto21["m_columns"][] = "Division";
$proto21["m_columns"][] = "FromDate";
$proto21["m_columns"][] = "ToDate";
$proto21["m_columns"][] = "WageType";
$proto21["m_columns"][] = "Locked";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "payrolldiv";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "payrolldiv";
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
$proto0["m_srcTableName"]="payrolldiv";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_payrolldiv = createSqlQuery_payrolldiv();


	
		;

							

$tdatapayrolldiv[".sqlquery"] = $queryData_payrolldiv;

include_once(getabspath("include/payrolldiv_events.php"));
$tableEvents["payrolldiv"] = new eventclass_payrolldiv;
$tdatapayrolldiv[".hasEvents"] = true;

?>