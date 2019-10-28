<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapayroll21 = array();
	$tdatapayroll21[".truncateText"] = true;
	$tdatapayroll21[".NumberOfChars"] = 80;
	$tdatapayroll21[".ShortName"] = "payroll21";
	$tdatapayroll21[".OwnerID"] = "";
	$tdatapayroll21[".OriginalTable"] = "payroll";

//	field labels
$fieldLabelspayroll21 = array();
$fieldToolTipspayroll21 = array();
$pageTitlespayroll21 = array();
$placeHolderspayroll21 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspayroll21["English"] = array();
	$fieldToolTipspayroll21["English"] = array();
	$placeHolderspayroll21["English"] = array();
	$pageTitlespayroll21["English"] = array();
	$fieldLabelspayroll21["English"]["PSID"] = "PSID";
	$fieldToolTipspayroll21["English"]["PSID"] = "";
	$placeHolderspayroll21["English"]["PSID"] = "";
	$fieldLabelspayroll21["English"]["PayDate"] = "Pay Date";
	$fieldToolTipspayroll21["English"]["PayDate"] = "";
	$placeHolderspayroll21["English"]["PayDate"] = "";
	$fieldLabelspayroll21["English"]["PayFromDate"] = "Pay From Date";
	$fieldToolTipspayroll21["English"]["PayFromDate"] = "";
	$placeHolderspayroll21["English"]["PayFromDate"] = "";
	$fieldLabelspayroll21["English"]["PayToDate"] = "Pay To Date";
	$fieldToolTipspayroll21["English"]["PayToDate"] = "";
	$placeHolderspayroll21["English"]["PayToDate"] = "";
	$fieldLabelspayroll21["English"]["PayPeriod"] = "Pay Period";
	$fieldToolTipspayroll21["English"]["PayPeriod"] = "";
	$placeHolderspayroll21["English"]["PayPeriod"] = "";
	$fieldLabelspayroll21["English"]["Locked"] = "Locked";
	$fieldToolTipspayroll21["English"]["Locked"] = "";
	$placeHolderspayroll21["English"]["Locked"] = "";
	if (count($fieldToolTipspayroll21["English"]))
		$tdatapayroll21[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspayroll21[""] = array();
	$fieldToolTipspayroll21[""] = array();
	$placeHolderspayroll21[""] = array();
	$pageTitlespayroll21[""] = array();
	if (count($fieldToolTipspayroll21[""]))
		$tdatapayroll21[".isUseToolTips"] = true;
}


	$tdatapayroll21[".NCSearch"] = true;



$tdatapayroll21[".shortTableName"] = "payroll21";
$tdatapayroll21[".nSecOptions"] = 0;
$tdatapayroll21[".recsPerRowPrint"] = 1;
$tdatapayroll21[".mainTableOwnerID"] = "";
$tdatapayroll21[".moveNext"] = 1;
$tdatapayroll21[".entityType"] = 1;

$tdatapayroll21[".strOriginalTableName"] = "payroll";

	



$tdatapayroll21[".showAddInPopup"] = false;

$tdatapayroll21[".showEditInPopup"] = false;

$tdatapayroll21[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapayroll21[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapayroll21[".fieldsForRegister"] = array();

$tdatapayroll21[".listAjax"] = false;

	$tdatapayroll21[".audit"] = false;

	$tdatapayroll21[".locking"] = false;

$tdatapayroll21[".edit"] = true;
$tdatapayroll21[".afterEditAction"] = 0;
$tdatapayroll21[".closePopupAfterEdit"] = 1;
$tdatapayroll21[".afterEditActionDetTable"] = "";


$tdatapayroll21[".list"] = true;

$tdatapayroll21[".inlineEdit"] = true;


$tdatapayroll21[".reorderRecordsByHeader"] = true;


$tdatapayroll21[".exportFormatting"] = 2;
$tdatapayroll21[".exportDelimiter"] = ",";
		
$tdatapayroll21[".view"] = true;

$tdatapayroll21[".import"] = true;

$tdatapayroll21[".exportTo"] = true;

$tdatapayroll21[".printFriendly"] = true;


$tdatapayroll21[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapayroll21[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapayroll21[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapayroll21[".searchSaving"] = false;
//

$tdatapayroll21[".showSearchPanel"] = true;
		$tdatapayroll21[".flexibleSearch"] = true;

$tdatapayroll21[".isUseAjaxSuggest"] = true;

$tdatapayroll21[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																							

$tdatapayroll21[".ajaxCodeSnippetAdded"] = false;

$tdatapayroll21[".buttonsAdded"] = false;

$tdatapayroll21[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapayroll21[".isUseTimeForSearch"] = false;



$tdatapayroll21[".badgeColor"] = "DC143C";

$tdatapayroll21[".detailsLinksOnList"] = "1";

$tdatapayroll21[".allSearchFields"] = array();
$tdatapayroll21[".filterFields"] = array();
$tdatapayroll21[".requiredSearchFields"] = array();

$tdatapayroll21[".allSearchFields"][] = "PSID";
	$tdatapayroll21[".allSearchFields"][] = "PayFromDate";
	$tdatapayroll21[".allSearchFields"][] = "PayToDate";
	$tdatapayroll21[".allSearchFields"][] = "PayPeriod";
	$tdatapayroll21[".allSearchFields"][] = "PayDate";
	$tdatapayroll21[".allSearchFields"][] = "Locked";
	

$tdatapayroll21[".googleLikeFields"] = array();
$tdatapayroll21[".googleLikeFields"][] = "PSID";
$tdatapayroll21[".googleLikeFields"][] = "PayDate";
$tdatapayroll21[".googleLikeFields"][] = "PayFromDate";
$tdatapayroll21[".googleLikeFields"][] = "PayToDate";
$tdatapayroll21[".googleLikeFields"][] = "PayPeriod";
$tdatapayroll21[".googleLikeFields"][] = "Locked";


$tdatapayroll21[".advSearchFields"] = array();
$tdatapayroll21[".advSearchFields"][] = "PSID";
$tdatapayroll21[".advSearchFields"][] = "PayFromDate";
$tdatapayroll21[".advSearchFields"][] = "PayToDate";
$tdatapayroll21[".advSearchFields"][] = "PayPeriod";
$tdatapayroll21[".advSearchFields"][] = "PayDate";
$tdatapayroll21[".advSearchFields"][] = "Locked";

$tdatapayroll21[".tableType"] = "list";

$tdatapayroll21[".printerPageOrientation"] = 0;
$tdatapayroll21[".nPrinterPageScale"] = 100;

$tdatapayroll21[".nPrinterSplitRecords"] = 40;

$tdatapayroll21[".nPrinterPDFSplitRecords"] = 40;



$tdatapayroll21[".geocodingEnabled"] = false;





$tdatapayroll21[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatapayroll21[".pageSize"] = 20;

$tdatapayroll21[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapayroll21[".strOrderBy"] = $tstrOrderBy;

$tdatapayroll21[".orderindexes"] = array();

$tdatapayroll21[".sqlHead"] = "SELECT PSID,  PayDate,  PayFromDate,  PayToDate,  PayPeriod,  Locked";
$tdatapayroll21[".sqlFrom"] = "FROM payroll";
$tdatapayroll21[".sqlWhereExpr"] = "";
$tdatapayroll21[".sqlTail"] = "";

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
$tdatapayroll21[".arrGridTabs"] = $arrGridTabs;











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapayroll21[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapayroll21[".arrGroupsPerPage"] = $arrGPP;

$tdatapayroll21[".highlightSearchResults"] = true;

$tableKeyspayroll21 = array();
$tableKeyspayroll21[] = "PSID";
$tdatapayroll21[".Keys"] = $tableKeyspayroll21;

$tdatapayroll21[".listFields"] = array();
$tdatapayroll21[".listFields"][] = "PSID";
$tdatapayroll21[".listFields"][] = "PayFromDate";
$tdatapayroll21[".listFields"][] = "PayToDate";
$tdatapayroll21[".listFields"][] = "PayPeriod";
$tdatapayroll21[".listFields"][] = "PayDate";
$tdatapayroll21[".listFields"][] = "Locked";

$tdatapayroll21[".hideMobileList"] = array();


$tdatapayroll21[".viewFields"] = array();
$tdatapayroll21[".viewFields"][] = "PSID";
$tdatapayroll21[".viewFields"][] = "PayFromDate";
$tdatapayroll21[".viewFields"][] = "PayToDate";
$tdatapayroll21[".viewFields"][] = "PayPeriod";
$tdatapayroll21[".viewFields"][] = "PayDate";
$tdatapayroll21[".viewFields"][] = "Locked";

$tdatapayroll21[".addFields"] = array();

$tdatapayroll21[".masterListFields"] = array();
$tdatapayroll21[".masterListFields"][] = "PSID";
$tdatapayroll21[".masterListFields"][] = "PayFromDate";
$tdatapayroll21[".masterListFields"][] = "PayToDate";
$tdatapayroll21[".masterListFields"][] = "PayPeriod";
$tdatapayroll21[".masterListFields"][] = "PayDate";
$tdatapayroll21[".masterListFields"][] = "Locked";

$tdatapayroll21[".inlineAddFields"] = array();

$tdatapayroll21[".editFields"] = array();
$tdatapayroll21[".editFields"][] = "PayFromDate";
$tdatapayroll21[".editFields"][] = "PayToDate";
$tdatapayroll21[".editFields"][] = "PayPeriod";
$tdatapayroll21[".editFields"][] = "PayDate";
$tdatapayroll21[".editFields"][] = "Locked";

$tdatapayroll21[".inlineEditFields"] = array();
$tdatapayroll21[".inlineEditFields"][] = "PayFromDate";
$tdatapayroll21[".inlineEditFields"][] = "PayToDate";
$tdatapayroll21[".inlineEditFields"][] = "PayPeriod";
$tdatapayroll21[".inlineEditFields"][] = "PayDate";
$tdatapayroll21[".inlineEditFields"][] = "Locked";

$tdatapayroll21[".updateSelectedFields"] = array();
$tdatapayroll21[".updateSelectedFields"][] = "PayFromDate";
$tdatapayroll21[".updateSelectedFields"][] = "PayToDate";
$tdatapayroll21[".updateSelectedFields"][] = "PayPeriod";
$tdatapayroll21[".updateSelectedFields"][] = "PayDate";
$tdatapayroll21[".updateSelectedFields"][] = "Locked";


$tdatapayroll21[".exportFields"] = array();
$tdatapayroll21[".exportFields"][] = "PSID";
$tdatapayroll21[".exportFields"][] = "PayFromDate";
$tdatapayroll21[".exportFields"][] = "PayToDate";
$tdatapayroll21[".exportFields"][] = "PayPeriod";
$tdatapayroll21[".exportFields"][] = "PayDate";
$tdatapayroll21[".exportFields"][] = "Locked";

$tdatapayroll21[".importFields"] = array();
$tdatapayroll21[".importFields"][] = "PSID";
$tdatapayroll21[".importFields"][] = "PayDate";
$tdatapayroll21[".importFields"][] = "PayFromDate";
$tdatapayroll21[".importFields"][] = "PayToDate";
$tdatapayroll21[".importFields"][] = "PayPeriod";
$tdatapayroll21[".importFields"][] = "Locked";

$tdatapayroll21[".printFields"] = array();
$tdatapayroll21[".printFields"][] = "PSID";
$tdatapayroll21[".printFields"][] = "PayFromDate";
$tdatapayroll21[".printFields"][] = "PayToDate";
$tdatapayroll21[".printFields"][] = "PayPeriod";
$tdatapayroll21[".printFields"][] = "PayDate";
$tdatapayroll21[".printFields"][] = "Locked";


//	PSID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PSID";
	$fdata["GoodName"] = "PSID";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll21","PSID");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayroll21["PSID"] = $fdata;
//	PayDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PayDate";
	$fdata["GoodName"] = "PayDate";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll21","PayDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatapayroll21["PayDate"] = $fdata;
//	PayFromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PayFromDate";
	$fdata["GoodName"] = "PayFromDate";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll21","PayFromDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatapayroll21["PayFromDate"] = $fdata;
//	PayToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PayToDate";
	$fdata["GoodName"] = "PayToDate";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll21","PayToDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatapayroll21["PayToDate"] = $fdata;
//	PayPeriod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PayPeriod";
	$fdata["GoodName"] = "PayPeriod";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll21","PayPeriod");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PayPeriod";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PayPeriod";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatapayroll21["PayPeriod"] = $fdata;
//	Locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Locked";
	$fdata["GoodName"] = "Locked";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll21","Locked");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdatapayroll21["Locked"] = $fdata;


$tables_data["payroll21"]=&$tdatapayroll21;
$field_labels["payroll21"] = &$fieldLabelspayroll21;
$fieldToolTips["payroll21"] = &$fieldToolTipspayroll21;
$placeHolders["payroll21"] = &$placeHolderspayroll21;
$page_titles["payroll21"] = &$pageTitlespayroll21;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["payroll21"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["payroll21"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_payroll21()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PSID,  PayDate,  PayFromDate,  PayToDate,  PayPeriod,  Locked";
$proto0["m_strFrom"] = "FROM payroll";
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
	"m_strName" => "PSID",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll21"
));

$proto6["m_sql"] = "PSID";
$proto6["m_srcTableName"] = "payroll21";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PayDate",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll21"
));

$proto8["m_sql"] = "PayDate";
$proto8["m_srcTableName"] = "payroll21";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PayFromDate",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll21"
));

$proto10["m_sql"] = "PayFromDate";
$proto10["m_srcTableName"] = "payroll21";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PayToDate",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll21"
));

$proto12["m_sql"] = "PayToDate";
$proto12["m_srcTableName"] = "payroll21";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PayPeriod",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll21"
));

$proto14["m_sql"] = "PayPeriod";
$proto14["m_srcTableName"] = "payroll21";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Locked",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll21"
));

$proto16["m_sql"] = "Locked";
$proto16["m_srcTableName"] = "payroll21";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "payroll";
$proto19["m_srcTableName"] = "payroll21";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "PSID";
$proto19["m_columns"][] = "PayDate";
$proto19["m_columns"][] = "PayFromDate";
$proto19["m_columns"][] = "PayToDate";
$proto19["m_columns"][] = "PayPeriod";
$proto19["m_columns"][] = "Statutories";
$proto19["m_columns"][] = "Stat Loans";
$proto19["m_columns"][] = "Deductions";
$proto19["m_columns"][] = "Adjustments";
$proto19["m_columns"][] = "MoAdjustment";
$proto19["m_columns"][] = "PresetTax";
$proto19["m_columns"][] = "13thMonth";
$proto19["m_columns"][] = "Locked";
$proto19["m_columns"][] = "Employer";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "payroll";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "payroll21";
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
$proto0["m_srcTableName"]="payroll21";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_payroll21 = createSqlQuery_payroll21();


	
		;

						

$tdatapayroll21[".sqlquery"] = $queryData_payroll21;

include_once(getabspath("include/payroll21_events.php"));
$tableEvents["payroll21"] = new eventclass_payroll21;
$tdatapayroll21[".hasEvents"] = true;

?>