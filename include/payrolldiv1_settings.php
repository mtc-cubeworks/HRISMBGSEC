<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapayrolldiv1 = array();
	$tdatapayrolldiv1[".truncateText"] = true;
	$tdatapayrolldiv1[".NumberOfChars"] = 80;
	$tdatapayrolldiv1[".ShortName"] = "payrolldiv1";
	$tdatapayrolldiv1[".OwnerID"] = "";
	$tdatapayrolldiv1[".OriginalTable"] = "payrolldiv";

//	field labels
$fieldLabelspayrolldiv1 = array();
$fieldToolTipspayrolldiv1 = array();
$pageTitlespayrolldiv1 = array();
$placeHolderspayrolldiv1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspayrolldiv1["English"] = array();
	$fieldToolTipspayrolldiv1["English"] = array();
	$placeHolderspayrolldiv1["English"] = array();
	$pageTitlespayrolldiv1["English"] = array();
	$fieldLabelspayrolldiv1["English"]["PRollID"] = "PRoll ID";
	$fieldToolTipspayrolldiv1["English"]["PRollID"] = "";
	$placeHolderspayrolldiv1["English"]["PRollID"] = "";
	$fieldLabelspayrolldiv1["English"]["Employer"] = "Employer";
	$fieldToolTipspayrolldiv1["English"]["Employer"] = "";
	$placeHolderspayrolldiv1["English"]["Employer"] = "";
	$fieldLabelspayrolldiv1["English"]["Division"] = "Division";
	$fieldToolTipspayrolldiv1["English"]["Division"] = "";
	$placeHolderspayrolldiv1["English"]["Division"] = "";
	$fieldLabelspayrolldiv1["English"]["ToDate"] = "To Date";
	$fieldToolTipspayrolldiv1["English"]["ToDate"] = "";
	$placeHolderspayrolldiv1["English"]["ToDate"] = "";
	$fieldLabelspayrolldiv1["English"]["FromDate"] = "From Date";
	$fieldToolTipspayrolldiv1["English"]["FromDate"] = "";
	$placeHolderspayrolldiv1["English"]["FromDate"] = "";
	$fieldLabelspayrolldiv1["English"]["WageType"] = "Wage Type";
	$fieldToolTipspayrolldiv1["English"]["WageType"] = "";
	$placeHolderspayrolldiv1["English"]["WageType"] = "";
	$fieldLabelspayrolldiv1["English"]["Locked"] = "Locked";
	$fieldToolTipspayrolldiv1["English"]["Locked"] = "";
	$placeHolderspayrolldiv1["English"]["Locked"] = "";
	if (count($fieldToolTipspayrolldiv1["English"]))
		$tdatapayrolldiv1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspayrolldiv1[""] = array();
	$fieldToolTipspayrolldiv1[""] = array();
	$placeHolderspayrolldiv1[""] = array();
	$pageTitlespayrolldiv1[""] = array();
	if (count($fieldToolTipspayrolldiv1[""]))
		$tdatapayrolldiv1[".isUseToolTips"] = true;
}


	$tdatapayrolldiv1[".NCSearch"] = true;



$tdatapayrolldiv1[".shortTableName"] = "payrolldiv1";
$tdatapayrolldiv1[".nSecOptions"] = 0;
$tdatapayrolldiv1[".recsPerRowPrint"] = 1;
$tdatapayrolldiv1[".mainTableOwnerID"] = "";
$tdatapayrolldiv1[".moveNext"] = 1;
$tdatapayrolldiv1[".entityType"] = 1;

$tdatapayrolldiv1[".strOriginalTableName"] = "payrolldiv";

	



$tdatapayrolldiv1[".showAddInPopup"] = false;

$tdatapayrolldiv1[".showEditInPopup"] = false;

$tdatapayrolldiv1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapayrolldiv1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapayrolldiv1[".fieldsForRegister"] = array();

$tdatapayrolldiv1[".listAjax"] = false;

	$tdatapayrolldiv1[".audit"] = false;

	$tdatapayrolldiv1[".locking"] = false;

$tdatapayrolldiv1[".edit"] = true;
$tdatapayrolldiv1[".afterEditAction"] = 1;
$tdatapayrolldiv1[".closePopupAfterEdit"] = 1;
$tdatapayrolldiv1[".afterEditActionDetTable"] = "";

$tdatapayrolldiv1[".add"] = true;
$tdatapayrolldiv1[".afterAddAction"] = 1;
$tdatapayrolldiv1[".closePopupAfterAdd"] = 1;
$tdatapayrolldiv1[".afterAddActionDetTable"] = "";

$tdatapayrolldiv1[".list"] = true;



$tdatapayrolldiv1[".reorderRecordsByHeader"] = true;


$tdatapayrolldiv1[".exportFormatting"] = 2;
$tdatapayrolldiv1[".exportDelimiter"] = ",";
		
$tdatapayrolldiv1[".view"] = true;

$tdatapayrolldiv1[".import"] = true;

$tdatapayrolldiv1[".exportTo"] = true;

$tdatapayrolldiv1[".printFriendly"] = true;

$tdatapayrolldiv1[".delete"] = true;

$tdatapayrolldiv1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapayrolldiv1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapayrolldiv1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapayrolldiv1[".searchSaving"] = false;
//

$tdatapayrolldiv1[".showSearchPanel"] = true;
		$tdatapayrolldiv1[".flexibleSearch"] = true;

$tdatapayrolldiv1[".isUseAjaxSuggest"] = true;

$tdatapayrolldiv1[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																			
							
																																																																																																																																																																																																																																																																																

$tdatapayrolldiv1[".ajaxCodeSnippetAdded"] = false;

$tdatapayrolldiv1[".buttonsAdded"] = true;

$tdatapayrolldiv1[".addPageEvents"] = true;

// use timepicker for search panel
$tdatapayrolldiv1[".isUseTimeForSearch"] = false;



$tdatapayrolldiv1[".badgeColor"] = "778899";


$tdatapayrolldiv1[".allSearchFields"] = array();
$tdatapayrolldiv1[".filterFields"] = array();
$tdatapayrolldiv1[".requiredSearchFields"] = array();

$tdatapayrolldiv1[".allSearchFields"][] = "Locked";
	$tdatapayrolldiv1[".allSearchFields"][] = "PRollID";
	$tdatapayrolldiv1[".allSearchFields"][] = "Employer";
	$tdatapayrolldiv1[".allSearchFields"][] = "Division";
	$tdatapayrolldiv1[".allSearchFields"][] = "WageType";
	$tdatapayrolldiv1[".allSearchFields"][] = "FromDate";
	$tdatapayrolldiv1[".allSearchFields"][] = "ToDate";
	

$tdatapayrolldiv1[".googleLikeFields"] = array();
$tdatapayrolldiv1[".googleLikeFields"][] = "PRollID";
$tdatapayrolldiv1[".googleLikeFields"][] = "Employer";
$tdatapayrolldiv1[".googleLikeFields"][] = "Division";
$tdatapayrolldiv1[".googleLikeFields"][] = "FromDate";
$tdatapayrolldiv1[".googleLikeFields"][] = "ToDate";
$tdatapayrolldiv1[".googleLikeFields"][] = "WageType";
$tdatapayrolldiv1[".googleLikeFields"][] = "Locked";


$tdatapayrolldiv1[".advSearchFields"] = array();
$tdatapayrolldiv1[".advSearchFields"][] = "Locked";
$tdatapayrolldiv1[".advSearchFields"][] = "PRollID";
$tdatapayrolldiv1[".advSearchFields"][] = "Employer";
$tdatapayrolldiv1[".advSearchFields"][] = "Division";
$tdatapayrolldiv1[".advSearchFields"][] = "WageType";
$tdatapayrolldiv1[".advSearchFields"][] = "FromDate";
$tdatapayrolldiv1[".advSearchFields"][] = "ToDate";

$tdatapayrolldiv1[".tableType"] = "list";

$tdatapayrolldiv1[".printerPageOrientation"] = 0;
$tdatapayrolldiv1[".nPrinterPageScale"] = 100;

$tdatapayrolldiv1[".nPrinterSplitRecords"] = 40;

$tdatapayrolldiv1[".nPrinterPDFSplitRecords"] = 40;



$tdatapayrolldiv1[".geocodingEnabled"] = false;





$tdatapayrolldiv1[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatapayrolldiv1[".pageSize"] = 20;

$tdatapayrolldiv1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapayrolldiv1[".strOrderBy"] = $tstrOrderBy;

$tdatapayrolldiv1[".orderindexes"] = array();

$tdatapayrolldiv1[".sqlHead"] = "SELECT PRollID,  	Employer,  	Division,  	FromDate,  	ToDate,  	WageType,  	Locked";
$tdatapayrolldiv1[".sqlFrom"] = "FROM payrolldiv";
$tdatapayrolldiv1[".sqlWhereExpr"] = "";
$tdatapayrolldiv1[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapayrolldiv1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapayrolldiv1[".arrGroupsPerPage"] = $arrGPP;

$tdatapayrolldiv1[".highlightSearchResults"] = true;

$tableKeyspayrolldiv1 = array();
$tableKeyspayrolldiv1[] = "PRollID";
$tdatapayrolldiv1[".Keys"] = $tableKeyspayrolldiv1;

$tdatapayrolldiv1[".listFields"] = array();
$tdatapayrolldiv1[".listFields"][] = "Locked";
$tdatapayrolldiv1[".listFields"][] = "PRollID";
$tdatapayrolldiv1[".listFields"][] = "Employer";
$tdatapayrolldiv1[".listFields"][] = "Division";
$tdatapayrolldiv1[".listFields"][] = "WageType";
$tdatapayrolldiv1[".listFields"][] = "FromDate";
$tdatapayrolldiv1[".listFields"][] = "ToDate";

$tdatapayrolldiv1[".hideMobileList"] = array();


$tdatapayrolldiv1[".viewFields"] = array();
$tdatapayrolldiv1[".viewFields"][] = "Locked";
$tdatapayrolldiv1[".viewFields"][] = "PRollID";
$tdatapayrolldiv1[".viewFields"][] = "Employer";
$tdatapayrolldiv1[".viewFields"][] = "Division";
$tdatapayrolldiv1[".viewFields"][] = "WageType";
$tdatapayrolldiv1[".viewFields"][] = "FromDate";
$tdatapayrolldiv1[".viewFields"][] = "ToDate";

$tdatapayrolldiv1[".addFields"] = array();
$tdatapayrolldiv1[".addFields"][] = "Locked";
$tdatapayrolldiv1[".addFields"][] = "Employer";
$tdatapayrolldiv1[".addFields"][] = "Division";
$tdatapayrolldiv1[".addFields"][] = "WageType";
$tdatapayrolldiv1[".addFields"][] = "FromDate";
$tdatapayrolldiv1[".addFields"][] = "ToDate";

$tdatapayrolldiv1[".masterListFields"] = array();
$tdatapayrolldiv1[".masterListFields"][] = "Locked";
$tdatapayrolldiv1[".masterListFields"][] = "PRollID";
$tdatapayrolldiv1[".masterListFields"][] = "Employer";
$tdatapayrolldiv1[".masterListFields"][] = "Division";
$tdatapayrolldiv1[".masterListFields"][] = "WageType";
$tdatapayrolldiv1[".masterListFields"][] = "FromDate";
$tdatapayrolldiv1[".masterListFields"][] = "ToDate";

$tdatapayrolldiv1[".inlineAddFields"] = array();
$tdatapayrolldiv1[".inlineAddFields"][] = "Locked";

$tdatapayrolldiv1[".editFields"] = array();
$tdatapayrolldiv1[".editFields"][] = "Locked";
$tdatapayrolldiv1[".editFields"][] = "Employer";
$tdatapayrolldiv1[".editFields"][] = "Division";
$tdatapayrolldiv1[".editFields"][] = "WageType";
$tdatapayrolldiv1[".editFields"][] = "FromDate";
$tdatapayrolldiv1[".editFields"][] = "ToDate";

$tdatapayrolldiv1[".inlineEditFields"] = array();
$tdatapayrolldiv1[".inlineEditFields"][] = "Locked";

$tdatapayrolldiv1[".updateSelectedFields"] = array();
$tdatapayrolldiv1[".updateSelectedFields"][] = "Locked";
$tdatapayrolldiv1[".updateSelectedFields"][] = "Employer";
$tdatapayrolldiv1[".updateSelectedFields"][] = "Division";
$tdatapayrolldiv1[".updateSelectedFields"][] = "WageType";
$tdatapayrolldiv1[".updateSelectedFields"][] = "FromDate";
$tdatapayrolldiv1[".updateSelectedFields"][] = "ToDate";


$tdatapayrolldiv1[".exportFields"] = array();
$tdatapayrolldiv1[".exportFields"][] = "Locked";
$tdatapayrolldiv1[".exportFields"][] = "PRollID";
$tdatapayrolldiv1[".exportFields"][] = "Employer";
$tdatapayrolldiv1[".exportFields"][] = "Division";
$tdatapayrolldiv1[".exportFields"][] = "WageType";
$tdatapayrolldiv1[".exportFields"][] = "FromDate";
$tdatapayrolldiv1[".exportFields"][] = "ToDate";

$tdatapayrolldiv1[".importFields"] = array();
$tdatapayrolldiv1[".importFields"][] = "PRollID";
$tdatapayrolldiv1[".importFields"][] = "Employer";
$tdatapayrolldiv1[".importFields"][] = "Division";
$tdatapayrolldiv1[".importFields"][] = "FromDate";
$tdatapayrolldiv1[".importFields"][] = "ToDate";
$tdatapayrolldiv1[".importFields"][] = "WageType";
$tdatapayrolldiv1[".importFields"][] = "Locked";

$tdatapayrolldiv1[".printFields"] = array();
$tdatapayrolldiv1[".printFields"][] = "Locked";
$tdatapayrolldiv1[".printFields"][] = "PRollID";
$tdatapayrolldiv1[".printFields"][] = "Employer";
$tdatapayrolldiv1[".printFields"][] = "Division";
$tdatapayrolldiv1[".printFields"][] = "WageType";
$tdatapayrolldiv1[".printFields"][] = "FromDate";
$tdatapayrolldiv1[".printFields"][] = "ToDate";


//	PRollID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PRollID";
	$fdata["GoodName"] = "PRollID";
	$fdata["ownerTable"] = "payrolldiv";
	$fdata["Label"] = GetFieldLabel("payrolldiv1","PRollID");
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




	$tdatapayrolldiv1["PRollID"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "payrolldiv";
	$fdata["Label"] = GetFieldLabel("payrolldiv1","Employer");
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

	
	
	
	
	
	
		$edata["controlWidth"] = 252;

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




	$tdatapayrolldiv1["Employer"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "payrolldiv";
	$fdata["Label"] = GetFieldLabel("payrolldiv1","Division");
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




	$tdatapayrolldiv1["Division"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "payrolldiv";
	$fdata["Label"] = GetFieldLabel("payrolldiv1","FromDate");
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




	$tdatapayrolldiv1["FromDate"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "payrolldiv";
	$fdata["Label"] = GetFieldLabel("payrolldiv1","ToDate");
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




	$tdatapayrolldiv1["ToDate"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "payrolldiv";
	$fdata["Label"] = GetFieldLabel("payrolldiv1","WageType");
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




	$tdatapayrolldiv1["WageType"] = $fdata;
//	Locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Locked";
	$fdata["GoodName"] = "Locked";
	$fdata["ownerTable"] = "payrolldiv";
	$fdata["Label"] = GetFieldLabel("payrolldiv1","Locked");
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

		$fdata["strField"] = "Locked";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Locked";

	
	
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




	$tdatapayrolldiv1["Locked"] = $fdata;


$tables_data["payrolldiv1"]=&$tdatapayrolldiv1;
$field_labels["payrolldiv1"] = &$fieldLabelspayrolldiv1;
$fieldToolTips["payrolldiv1"] = &$fieldToolTipspayrolldiv1;
$placeHolders["payrolldiv1"] = &$placeHolderspayrolldiv1;
$page_titles["payrolldiv1"] = &$pageTitlespayrolldiv1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["payrolldiv1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["payrolldiv1"] = array();


	
				$strOriginalDetailsTable="payroll";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="payroll21";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "payroll21";
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
					$masterTablesData["payrolldiv1"][0] = $masterParams;
				$masterTablesData["payrolldiv1"][0]["masterKeys"] = array();
	$masterTablesData["payrolldiv1"][0]["masterKeys"][]="PayFromDate";
				$masterTablesData["payrolldiv1"][0]["masterKeys"][]="PayToDate";
				$masterTablesData["payrolldiv1"][0]["detailKeys"] = array();
	$masterTablesData["payrolldiv1"][0]["detailKeys"][]="FromDate";
				$masterTablesData["payrolldiv1"][0]["detailKeys"][]="ToDate";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_payrolldiv1()
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
	"m_srcTableName" => "payrolldiv1"
));

$proto6["m_sql"] = "PRollID";
$proto6["m_srcTableName"] = "payrolldiv1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "payrolldiv",
	"m_srcTableName" => "payrolldiv1"
));

$proto8["m_sql"] = "Employer";
$proto8["m_srcTableName"] = "payrolldiv1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "payrolldiv",
	"m_srcTableName" => "payrolldiv1"
));

$proto10["m_sql"] = "Division";
$proto10["m_srcTableName"] = "payrolldiv1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "payrolldiv",
	"m_srcTableName" => "payrolldiv1"
));

$proto12["m_sql"] = "FromDate";
$proto12["m_srcTableName"] = "payrolldiv1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "payrolldiv",
	"m_srcTableName" => "payrolldiv1"
));

$proto14["m_sql"] = "ToDate";
$proto14["m_srcTableName"] = "payrolldiv1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "WageType",
	"m_strTable" => "payrolldiv",
	"m_srcTableName" => "payrolldiv1"
));

$proto16["m_sql"] = "WageType";
$proto16["m_srcTableName"] = "payrolldiv1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Locked",
	"m_strTable" => "payrolldiv",
	"m_srcTableName" => "payrolldiv1"
));

$proto18["m_sql"] = "Locked";
$proto18["m_srcTableName"] = "payrolldiv1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "payrolldiv";
$proto21["m_srcTableName"] = "payrolldiv1";
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
$proto20["m_srcTableName"] = "payrolldiv1";
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
$proto0["m_srcTableName"]="payrolldiv1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_payrolldiv1 = createSqlQuery_payrolldiv1();


	
		;

							

$tdatapayrolldiv1[".sqlquery"] = $queryData_payrolldiv1;

include_once(getabspath("include/payrolldiv1_events.php"));
$tableEvents["payrolldiv1"] = new eventclass_payrolldiv1;
$tdatapayrolldiv1[".hasEvents"] = true;

?>