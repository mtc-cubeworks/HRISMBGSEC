<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapayroll = array();
	$tdatapayroll[".truncateText"] = true;
	$tdatapayroll[".NumberOfChars"] = 80;
	$tdatapayroll[".ShortName"] = "payroll";
	$tdatapayroll[".OwnerID"] = "";
	$tdatapayroll[".OriginalTable"] = "payroll";

//	field labels
$fieldLabelspayroll = array();
$fieldToolTipspayroll = array();
$pageTitlespayroll = array();
$placeHolderspayroll = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspayroll["English"] = array();
	$fieldToolTipspayroll["English"] = array();
	$placeHolderspayroll["English"] = array();
	$pageTitlespayroll["English"] = array();
	$fieldLabelspayroll["English"]["PSID"] = "PSID";
	$fieldToolTipspayroll["English"]["PSID"] = "";
	$placeHolderspayroll["English"]["PSID"] = "";
	$fieldLabelspayroll["English"]["PayDate"] = "Pay Date";
	$fieldToolTipspayroll["English"]["PayDate"] = "";
	$placeHolderspayroll["English"]["PayDate"] = "";
	$fieldLabelspayroll["English"]["PayFromDate"] = "Pay From Date";
	$fieldToolTipspayroll["English"]["PayFromDate"] = "";
	$placeHolderspayroll["English"]["PayFromDate"] = "";
	$fieldLabelspayroll["English"]["PayToDate"] = "Pay To Date";
	$fieldToolTipspayroll["English"]["PayToDate"] = "";
	$placeHolderspayroll["English"]["PayToDate"] = "";
	$fieldLabelspayroll["English"]["Locked"] = "Locked";
	$fieldToolTipspayroll["English"]["Locked"] = "";
	$placeHolderspayroll["English"]["Locked"] = "";
	$fieldLabelspayroll["English"]["Statutories"] = "Statutories";
	$fieldToolTipspayroll["English"]["Statutories"] = "";
	$placeHolderspayroll["English"]["Statutories"] = "";
	$fieldLabelspayroll["English"]["Stat_Loans"] = "Statutory Loans";
	$fieldToolTipspayroll["English"]["Stat_Loans"] = "";
	$placeHolderspayroll["English"]["Stat_Loans"] = "";
	$fieldLabelspayroll["English"]["Deductions"] = "Deductions";
	$fieldToolTipspayroll["English"]["Deductions"] = "";
	$placeHolderspayroll["English"]["Deductions"] = "";
	$fieldLabelspayroll["English"]["Adjustments"] = "Adjustments";
	$fieldToolTipspayroll["English"]["Adjustments"] = "";
	$placeHolderspayroll["English"]["Adjustments"] = "";
	$fieldLabelspayroll["English"]["PresetTax"] = "Tax";
	$fieldToolTipspayroll["English"]["PresetTax"] = "";
	$placeHolderspayroll["English"]["PresetTax"] = "";
	$fieldLabelspayroll["English"]["13thMonth"] = "Pay 13th Month";
	$fieldToolTipspayroll["English"]["13thMonth"] = "";
	$placeHolderspayroll["English"]["13thMonth"] = "";
	$fieldLabelspayroll["English"]["Employer"] = "Employer";
	$fieldToolTipspayroll["English"]["Employer"] = "";
	$placeHolderspayroll["English"]["Employer"] = "";
	$fieldLabelspayroll["English"]["Division"] = "Division";
	$fieldToolTipspayroll["English"]["Division"] = "";
	$placeHolderspayroll["English"]["Division"] = "";
	$fieldLabelspayroll["English"]["WageType"] = "Wage Type";
	$fieldToolTipspayroll["English"]["WageType"] = "";
	$placeHolderspayroll["English"]["WageType"] = "";
	if (count($fieldToolTipspayroll["English"]))
		$tdatapayroll[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspayroll[""] = array();
	$fieldToolTipspayroll[""] = array();
	$placeHolderspayroll[""] = array();
	$pageTitlespayroll[""] = array();
	if (count($fieldToolTipspayroll[""]))
		$tdatapayroll[".isUseToolTips"] = true;
}


	$tdatapayroll[".NCSearch"] = true;



$tdatapayroll[".shortTableName"] = "payroll";
$tdatapayroll[".nSecOptions"] = 0;
$tdatapayroll[".recsPerRowPrint"] = 1;
$tdatapayroll[".mainTableOwnerID"] = "";
$tdatapayroll[".moveNext"] = 1;
$tdatapayroll[".entityType"] = 0;

$tdatapayroll[".strOriginalTableName"] = "payroll";

	



$tdatapayroll[".showAddInPopup"] = false;

$tdatapayroll[".showEditInPopup"] = false;

$tdatapayroll[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapayroll[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapayroll[".fieldsForRegister"] = array();

$tdatapayroll[".listAjax"] = false;

	$tdatapayroll[".audit"] = false;

	$tdatapayroll[".locking"] = false;



$tdatapayroll[".list"] = true;

$tdatapayroll[".inlineEdit"] = true;


$tdatapayroll[".reorderRecordsByHeader"] = true;


$tdatapayroll[".exportFormatting"] = 2;
$tdatapayroll[".exportDelimiter"] = ",";
		
$tdatapayroll[".view"] = true;

$tdatapayroll[".import"] = true;

$tdatapayroll[".exportTo"] = true;

$tdatapayroll[".printFriendly"] = true;

$tdatapayroll[".delete"] = true;

$tdatapayroll[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapayroll[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapayroll[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapayroll[".searchSaving"] = false;
//

$tdatapayroll[".showSearchPanel"] = true;
		$tdatapayroll[".flexibleSearch"] = true;

$tdatapayroll[".isUseAjaxSuggest"] = true;

$tdatapayroll[".rowHighlite"] = true;



																																			
																																																																																																																									
																																																																																																																	

$tdatapayroll[".ajaxCodeSnippetAdded"] = false;

$tdatapayroll[".buttonsAdded"] = true;

$tdatapayroll[".addPageEvents"] = true;

// use timepicker for search panel
$tdatapayroll[".isUseTimeForSearch"] = false;





$tdatapayroll[".allSearchFields"] = array();
$tdatapayroll[".filterFields"] = array();
$tdatapayroll[".requiredSearchFields"] = array();

$tdatapayroll[".allSearchFields"][] = "PSID";
	$tdatapayroll[".allSearchFields"][] = "Locked";
	$tdatapayroll[".allSearchFields"][] = "Employer";
	$tdatapayroll[".allSearchFields"][] = "Division";
	$tdatapayroll[".allSearchFields"][] = "WageType";
	$tdatapayroll[".allSearchFields"][] = "PayFromDate";
	$tdatapayroll[".allSearchFields"][] = "PayToDate";
	$tdatapayroll[".allSearchFields"][] = "PayDate";
	$tdatapayroll[".allSearchFields"][] = "Statutories";
	$tdatapayroll[".allSearchFields"][] = "Stat Loans";
	$tdatapayroll[".allSearchFields"][] = "Deductions";
	$tdatapayroll[".allSearchFields"][] = "Adjustments";
	$tdatapayroll[".allSearchFields"][] = "PresetTax";
	$tdatapayroll[".allSearchFields"][] = "13thMonth";
	

$tdatapayroll[".googleLikeFields"] = array();
$tdatapayroll[".googleLikeFields"][] = "PSID";
$tdatapayroll[".googleLikeFields"][] = "PayDate";
$tdatapayroll[".googleLikeFields"][] = "PayFromDate";
$tdatapayroll[".googleLikeFields"][] = "PayToDate";
$tdatapayroll[".googleLikeFields"][] = "Locked";
$tdatapayroll[".googleLikeFields"][] = "Statutories";
$tdatapayroll[".googleLikeFields"][] = "Stat Loans";
$tdatapayroll[".googleLikeFields"][] = "Deductions";
$tdatapayroll[".googleLikeFields"][] = "Adjustments";
$tdatapayroll[".googleLikeFields"][] = "PresetTax";
$tdatapayroll[".googleLikeFields"][] = "13thMonth";
$tdatapayroll[".googleLikeFields"][] = "Employer";
$tdatapayroll[".googleLikeFields"][] = "Division";
$tdatapayroll[".googleLikeFields"][] = "WageType";

$tdatapayroll[".panelSearchFields"] = array();
$tdatapayroll[".searchPanelOptions"] = array();
$tdatapayroll[".panelSearchFields"][] = "Employer";
	$tdatapayroll[".panelSearchFields"][] = "Division";
	$tdatapayroll[".panelSearchFields"][] = "WageType";
	$tdatapayroll[".panelSearchFields"][] = "PayFromDate";
	$tdatapayroll[".panelSearchFields"][] = "PayToDate";
	
$tdatapayroll[".advSearchFields"] = array();
$tdatapayroll[".advSearchFields"][] = "PSID";
$tdatapayroll[".advSearchFields"][] = "Locked";
$tdatapayroll[".advSearchFields"][] = "Employer";
$tdatapayroll[".advSearchFields"][] = "Division";
$tdatapayroll[".advSearchFields"][] = "WageType";
$tdatapayroll[".advSearchFields"][] = "PayFromDate";
$tdatapayroll[".advSearchFields"][] = "PayToDate";
$tdatapayroll[".advSearchFields"][] = "PayDate";
$tdatapayroll[".advSearchFields"][] = "Statutories";
$tdatapayroll[".advSearchFields"][] = "Stat Loans";
$tdatapayroll[".advSearchFields"][] = "Deductions";
$tdatapayroll[".advSearchFields"][] = "Adjustments";
$tdatapayroll[".advSearchFields"][] = "PresetTax";
$tdatapayroll[".advSearchFields"][] = "13thMonth";

$tdatapayroll[".tableType"] = "list";

$tdatapayroll[".printerPageOrientation"] = 0;
$tdatapayroll[".nPrinterPageScale"] = 100;

$tdatapayroll[".nPrinterSplitRecords"] = 40;

$tdatapayroll[".nPrinterPDFSplitRecords"] = 40;



$tdatapayroll[".geocodingEnabled"] = false;





$tdatapayroll[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatapayroll[".pageSize"] = 20;

$tdatapayroll[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY PSID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapayroll[".strOrderBy"] = $tstrOrderBy;

$tdatapayroll[".orderindexes"] = array();
	$tdatapayroll[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "PSID");


$tdatapayroll[".sqlHead"] = "SELECT PSID,  PayDate,  PayFromDate,  PayToDate,  Locked,  Statutories,  `Stat Loans`,  Deductions,  Adjustments,  PresetTax,  `13thMonth`,  Employer,  Division,  WageType";
$tdatapayroll[".sqlFrom"] = "FROM payroll";
$tdatapayroll[".sqlWhereExpr"] = "";
$tdatapayroll[".sqlTail"] = "";

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
$tdatapayroll[".arrGridTabs"] = $arrGridTabs;











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapayroll[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapayroll[".arrGroupsPerPage"] = $arrGPP;

$tdatapayroll[".highlightSearchResults"] = true;

$tableKeyspayroll = array();
$tableKeyspayroll[] = "PSID";
$tdatapayroll[".Keys"] = $tableKeyspayroll;

$tdatapayroll[".listFields"] = array();
$tdatapayroll[".listFields"][] = "PSID";
$tdatapayroll[".listFields"][] = "Locked";
$tdatapayroll[".listFields"][] = "Employer";
$tdatapayroll[".listFields"][] = "Division";
$tdatapayroll[".listFields"][] = "WageType";
$tdatapayroll[".listFields"][] = "PayFromDate";
$tdatapayroll[".listFields"][] = "PayToDate";
$tdatapayroll[".listFields"][] = "PayDate";
$tdatapayroll[".listFields"][] = "Statutories";
$tdatapayroll[".listFields"][] = "Stat Loans";
$tdatapayroll[".listFields"][] = "Deductions";
$tdatapayroll[".listFields"][] = "Adjustments";
$tdatapayroll[".listFields"][] = "PresetTax";
$tdatapayroll[".listFields"][] = "13thMonth";

$tdatapayroll[".hideMobileList"] = array();


$tdatapayroll[".viewFields"] = array();
$tdatapayroll[".viewFields"][] = "PSID";
$tdatapayroll[".viewFields"][] = "Locked";
$tdatapayroll[".viewFields"][] = "Employer";
$tdatapayroll[".viewFields"][] = "Division";
$tdatapayroll[".viewFields"][] = "WageType";
$tdatapayroll[".viewFields"][] = "PayFromDate";
$tdatapayroll[".viewFields"][] = "PayToDate";
$tdatapayroll[".viewFields"][] = "PayDate";
$tdatapayroll[".viewFields"][] = "Statutories";
$tdatapayroll[".viewFields"][] = "Stat Loans";
$tdatapayroll[".viewFields"][] = "Deductions";
$tdatapayroll[".viewFields"][] = "Adjustments";
$tdatapayroll[".viewFields"][] = "PresetTax";
$tdatapayroll[".viewFields"][] = "13thMonth";

$tdatapayroll[".addFields"] = array();

$tdatapayroll[".masterListFields"] = array();
$tdatapayroll[".masterListFields"][] = "PSID";
$tdatapayroll[".masterListFields"][] = "Locked";
$tdatapayroll[".masterListFields"][] = "Employer";
$tdatapayroll[".masterListFields"][] = "Division";
$tdatapayroll[".masterListFields"][] = "WageType";
$tdatapayroll[".masterListFields"][] = "PayFromDate";
$tdatapayroll[".masterListFields"][] = "PayToDate";
$tdatapayroll[".masterListFields"][] = "PayDate";
$tdatapayroll[".masterListFields"][] = "Statutories";
$tdatapayroll[".masterListFields"][] = "Stat Loans";
$tdatapayroll[".masterListFields"][] = "Deductions";
$tdatapayroll[".masterListFields"][] = "Adjustments";
$tdatapayroll[".masterListFields"][] = "PresetTax";
$tdatapayroll[".masterListFields"][] = "13thMonth";

$tdatapayroll[".inlineAddFields"] = array();

$tdatapayroll[".editFields"] = array();

$tdatapayroll[".inlineEditFields"] = array();
$tdatapayroll[".inlineEditFields"][] = "Locked";
$tdatapayroll[".inlineEditFields"][] = "PayDate";
$tdatapayroll[".inlineEditFields"][] = "Statutories";
$tdatapayroll[".inlineEditFields"][] = "Stat Loans";
$tdatapayroll[".inlineEditFields"][] = "Deductions";
$tdatapayroll[".inlineEditFields"][] = "Adjustments";
$tdatapayroll[".inlineEditFields"][] = "PresetTax";
$tdatapayroll[".inlineEditFields"][] = "13thMonth";

$tdatapayroll[".updateSelectedFields"] = array();


$tdatapayroll[".exportFields"] = array();
$tdatapayroll[".exportFields"][] = "PSID";
$tdatapayroll[".exportFields"][] = "Locked";
$tdatapayroll[".exportFields"][] = "Employer";
$tdatapayroll[".exportFields"][] = "Division";
$tdatapayroll[".exportFields"][] = "WageType";
$tdatapayroll[".exportFields"][] = "PayFromDate";
$tdatapayroll[".exportFields"][] = "PayToDate";
$tdatapayroll[".exportFields"][] = "PayDate";
$tdatapayroll[".exportFields"][] = "Statutories";
$tdatapayroll[".exportFields"][] = "Stat Loans";
$tdatapayroll[".exportFields"][] = "Deductions";
$tdatapayroll[".exportFields"][] = "Adjustments";
$tdatapayroll[".exportFields"][] = "PresetTax";
$tdatapayroll[".exportFields"][] = "13thMonth";

$tdatapayroll[".importFields"] = array();
$tdatapayroll[".importFields"][] = "PSID";
$tdatapayroll[".importFields"][] = "PayDate";
$tdatapayroll[".importFields"][] = "PayFromDate";
$tdatapayroll[".importFields"][] = "PayToDate";
$tdatapayroll[".importFields"][] = "Locked";
$tdatapayroll[".importFields"][] = "Statutories";
$tdatapayroll[".importFields"][] = "Stat Loans";
$tdatapayroll[".importFields"][] = "Deductions";
$tdatapayroll[".importFields"][] = "Adjustments";
$tdatapayroll[".importFields"][] = "PresetTax";
$tdatapayroll[".importFields"][] = "13thMonth";
$tdatapayroll[".importFields"][] = "Employer";
$tdatapayroll[".importFields"][] = "Division";
$tdatapayroll[".importFields"][] = "WageType";

$tdatapayroll[".printFields"] = array();
$tdatapayroll[".printFields"][] = "PSID";
$tdatapayroll[".printFields"][] = "Locked";
$tdatapayroll[".printFields"][] = "Employer";
$tdatapayroll[".printFields"][] = "Division";
$tdatapayroll[".printFields"][] = "WageType";
$tdatapayroll[".printFields"][] = "PayFromDate";
$tdatapayroll[".printFields"][] = "PayToDate";
$tdatapayroll[".printFields"][] = "PayDate";
$tdatapayroll[".printFields"][] = "Statutories";
$tdatapayroll[".printFields"][] = "Stat Loans";
$tdatapayroll[".printFields"][] = "Deductions";
$tdatapayroll[".printFields"][] = "Adjustments";
$tdatapayroll[".printFields"][] = "PresetTax";
$tdatapayroll[".printFields"][] = "13thMonth";


//	PSID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PSID";
	$fdata["GoodName"] = "PSID";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll","PSID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PSID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PSID";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayroll["PSID"] = $fdata;
//	PayDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PayDate";
	$fdata["GoodName"] = "PayDate";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll","PayDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PayDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PayDate";

	
	
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

	
	
	
		$edata["controlWidth"] = 120;

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




	$tdatapayroll["PayDate"] = $fdata;
//	PayFromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PayFromDate";
	$fdata["GoodName"] = "PayFromDate";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll","PayFromDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PayFromDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PayFromDate";

	
	
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 120;

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




	$tdatapayroll["PayFromDate"] = $fdata;
//	PayToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PayToDate";
	$fdata["GoodName"] = "PayToDate";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll","PayToDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PayToDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PayToDate";

	
	
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 120;

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




	$tdatapayroll["PayToDate"] = $fdata;
//	Locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Locked";
	$fdata["GoodName"] = "Locked";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll","Locked");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

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




	$tdatapayroll["Locked"] = $fdata;
//	Statutories
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Statutories";
	$fdata["GoodName"] = "Statutories";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll","Statutories");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Statutories";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Statutories";

	
	
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




	$tdatapayroll["Statutories"] = $fdata;
//	Stat Loans
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Stat Loans";
	$fdata["GoodName"] = "Stat_Loans";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll","Stat_Loans");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Stat Loans";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Stat Loans`";

	
	
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




	$tdatapayroll["Stat Loans"] = $fdata;
//	Deductions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Deductions";
	$fdata["GoodName"] = "Deductions";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll","Deductions");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Deductions";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Deductions";

	
	
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




	$tdatapayroll["Deductions"] = $fdata;
//	Adjustments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Adjustments";
	$fdata["GoodName"] = "Adjustments";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll","Adjustments");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Adjustments";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Adjustments";

	
	
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




	$tdatapayroll["Adjustments"] = $fdata;
//	PresetTax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PresetTax";
	$fdata["GoodName"] = "PresetTax";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll","PresetTax");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PresetTax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PresetTax";

	
	
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




	$tdatapayroll["PresetTax"] = $fdata;
//	13thMonth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "13thMonth";
	$fdata["GoodName"] = "13thMonth";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll","13thMonth");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "13thMonth";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`13thMonth`";

	
	
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




	$tdatapayroll["13thMonth"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll","Employer");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayroll["Employer"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll","Division");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayroll["Division"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll","WageType");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatapayroll["WageType"] = $fdata;


$tables_data["payroll"]=&$tdatapayroll;
$field_labels["payroll"] = &$fieldLabelspayroll;
$fieldToolTips["payroll"] = &$fieldToolTipspayroll;
$placeHolders["payroll"] = &$placeHolderspayroll;
$page_titles["payroll"] = &$pageTitlespayroll;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["payroll"] = array();
//	payrolltab
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="payrolltab";
		$detailsParam["dOriginalTable"] = "payrolltab";
		$detailsParam["proceedLink"] = false;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "payrolltab";
	$detailsParam["dCaptionTable"] = GetTableCaption("payrolltab");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["payroll"][$dIndex] = $detailsParam;

	
		$detailsTablesData["payroll"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["payroll"][$dIndex]["masterKeys"][]="PayToDate";

	$detailsTablesData["payroll"][$dIndex]["masterKeys"][]="Employer";

	$detailsTablesData["payroll"][$dIndex]["masterKeys"][]="Division";

	$detailsTablesData["payroll"][$dIndex]["masterKeys"][]="WageType";

				$detailsTablesData["payroll"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["payroll"][$dIndex]["detailKeys"][]="ToDate";

		
	$detailsTablesData["payroll"][$dIndex]["detailKeys"][]="Employer";

		
	$detailsTablesData["payroll"][$dIndex]["detailKeys"][]="Division";

		
	$detailsTablesData["payroll"][$dIndex]["detailKeys"][]="WageType";
//	payrolldiv
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="payrolldiv";
		$detailsParam["dOriginalTable"] = "payrolldiv";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "payrolldiv";
	$detailsParam["dCaptionTable"] = GetTableCaption("payrolldiv");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["payroll"][$dIndex] = $detailsParam;

	
		$detailsTablesData["payroll"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["payroll"][$dIndex]["masterKeys"][]="PayFromDate";

	$detailsTablesData["payroll"][$dIndex]["masterKeys"][]="PayToDate";

	$detailsTablesData["payroll"][$dIndex]["masterKeys"][]="Employer";

	$detailsTablesData["payroll"][$dIndex]["masterKeys"][]="Division";

	$detailsTablesData["payroll"][$dIndex]["masterKeys"][]="WageType";

				$detailsTablesData["payroll"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["payroll"][$dIndex]["detailKeys"][]="FromDate";

		
	$detailsTablesData["payroll"][$dIndex]["detailKeys"][]="ToDate";

		
	$detailsTablesData["payroll"][$dIndex]["detailKeys"][]="Employer";

		
	$detailsTablesData["payroll"][$dIndex]["detailKeys"][]="Division";

		
	$detailsTablesData["payroll"][$dIndex]["detailKeys"][]="WageType";

// tables which are master tables for current table (detail)
$masterTablesData["payroll"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_payroll()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PSID,  PayDate,  PayFromDate,  PayToDate,  Locked,  Statutories,  `Stat Loans`,  Deductions,  Adjustments,  PresetTax,  `13thMonth`,  Employer,  Division,  WageType";
$proto0["m_strFrom"] = "FROM payroll";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY PSID DESC";
	
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
	"m_strName" => "PSID",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll"
));

$proto6["m_sql"] = "PSID";
$proto6["m_srcTableName"] = "payroll";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PayDate",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll"
));

$proto8["m_sql"] = "PayDate";
$proto8["m_srcTableName"] = "payroll";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PayFromDate",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll"
));

$proto10["m_sql"] = "PayFromDate";
$proto10["m_srcTableName"] = "payroll";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PayToDate",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll"
));

$proto12["m_sql"] = "PayToDate";
$proto12["m_srcTableName"] = "payroll";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Locked",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll"
));

$proto14["m_sql"] = "Locked";
$proto14["m_srcTableName"] = "payroll";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Statutories",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll"
));

$proto16["m_sql"] = "Statutories";
$proto16["m_srcTableName"] = "payroll";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Stat Loans",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll"
));

$proto18["m_sql"] = "`Stat Loans`";
$proto18["m_srcTableName"] = "payroll";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Deductions",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll"
));

$proto20["m_sql"] = "Deductions";
$proto20["m_srcTableName"] = "payroll";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Adjustments",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll"
));

$proto22["m_sql"] = "Adjustments";
$proto22["m_srcTableName"] = "payroll";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "PresetTax",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll"
));

$proto24["m_sql"] = "PresetTax";
$proto24["m_srcTableName"] = "payroll";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "13thMonth",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll"
));

$proto26["m_sql"] = "`13thMonth`";
$proto26["m_srcTableName"] = "payroll";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll"
));

$proto28["m_sql"] = "Employer";
$proto28["m_srcTableName"] = "payroll";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll"
));

$proto30["m_sql"] = "Division";
$proto30["m_srcTableName"] = "payroll";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "WageType",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll"
));

$proto32["m_sql"] = "WageType";
$proto32["m_srcTableName"] = "payroll";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "payroll";
$proto35["m_srcTableName"] = "payroll";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "PSID";
$proto35["m_columns"][] = "PayDate";
$proto35["m_columns"][] = "PayFromDate";
$proto35["m_columns"][] = "PayToDate";
$proto35["m_columns"][] = "PayPeriod";
$proto35["m_columns"][] = "Statutories";
$proto35["m_columns"][] = "Stat Loans";
$proto35["m_columns"][] = "Deductions";
$proto35["m_columns"][] = "Adjustments";
$proto35["m_columns"][] = "MoAdjustment";
$proto35["m_columns"][] = "PresetTax";
$proto35["m_columns"][] = "13thMonth";
$proto35["m_columns"][] = "Locked";
$proto35["m_columns"][] = "Division";
$proto35["m_columns"][] = "Employer";
$proto35["m_columns"][] = "WageType";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "payroll";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "payroll";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "PSID",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll"
));

$proto38["m_column"]=$obj;
$proto38["m_bAsc"] = 0;
$proto38["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto38);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="payroll";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_payroll = createSqlQuery_payroll();


	
		;

														

$tdatapayroll[".sqlquery"] = $queryData_payroll;

include_once(getabspath("include/payroll_events.php"));
$tableEvents["payroll"] = new eventclass_payroll;
$tdatapayroll[".hasEvents"] = true;

?>