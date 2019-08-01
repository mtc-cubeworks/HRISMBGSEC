<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapayroll2 = array();
	$tdatapayroll2[".truncateText"] = true;
	$tdatapayroll2[".NumberOfChars"] = 80;
	$tdatapayroll2[".ShortName"] = "payroll2";
	$tdatapayroll2[".OwnerID"] = "";
	$tdatapayroll2[".OriginalTable"] = "payroll";

//	field labels
$fieldLabelspayroll2 = array();
$fieldToolTipspayroll2 = array();
$pageTitlespayroll2 = array();
$placeHolderspayroll2 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspayroll2["English"] = array();
	$fieldToolTipspayroll2["English"] = array();
	$placeHolderspayroll2["English"] = array();
	$pageTitlespayroll2["English"] = array();
	$fieldLabelspayroll2["English"]["PSID"] = "PSID";
	$fieldToolTipspayroll2["English"]["PSID"] = "";
	$placeHolderspayroll2["English"]["PSID"] = "";
	$fieldLabelspayroll2["English"]["PayDate"] = "Pay Date";
	$fieldToolTipspayroll2["English"]["PayDate"] = "";
	$placeHolderspayroll2["English"]["PayDate"] = "";
	$fieldLabelspayroll2["English"]["PayFromDate"] = "Pay From Date";
	$fieldToolTipspayroll2["English"]["PayFromDate"] = "";
	$placeHolderspayroll2["English"]["PayFromDate"] = "";
	$fieldLabelspayroll2["English"]["PayToDate"] = "Pay To Date";
	$fieldToolTipspayroll2["English"]["PayToDate"] = "";
	$placeHolderspayroll2["English"]["PayToDate"] = "";
	$fieldLabelspayroll2["English"]["PayPeriod"] = "Pay Period";
	$fieldToolTipspayroll2["English"]["PayPeriod"] = "";
	$placeHolderspayroll2["English"]["PayPeriod"] = "";
	$fieldLabelspayroll2["English"]["Locked"] = "Locked";
	$fieldToolTipspayroll2["English"]["Locked"] = "";
	$placeHolderspayroll2["English"]["Locked"] = "";
	if (count($fieldToolTipspayroll2["English"]))
		$tdatapayroll2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspayroll2[""] = array();
	$fieldToolTipspayroll2[""] = array();
	$placeHolderspayroll2[""] = array();
	$pageTitlespayroll2[""] = array();
	if (count($fieldToolTipspayroll2[""]))
		$tdatapayroll2[".isUseToolTips"] = true;
}


	$tdatapayroll2[".NCSearch"] = true;



$tdatapayroll2[".shortTableName"] = "payroll2";
$tdatapayroll2[".nSecOptions"] = 0;
$tdatapayroll2[".recsPerRowPrint"] = 1;
$tdatapayroll2[".mainTableOwnerID"] = "";
$tdatapayroll2[".moveNext"] = 1;
$tdatapayroll2[".entityType"] = 1;

$tdatapayroll2[".strOriginalTableName"] = "payroll";

	



$tdatapayroll2[".showAddInPopup"] = false;

$tdatapayroll2[".showEditInPopup"] = false;

$tdatapayroll2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapayroll2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapayroll2[".fieldsForRegister"] = array();

$tdatapayroll2[".listAjax"] = false;

	$tdatapayroll2[".audit"] = false;

	$tdatapayroll2[".locking"] = false;

$tdatapayroll2[".edit"] = true;
$tdatapayroll2[".afterEditAction"] = 1;
$tdatapayroll2[".closePopupAfterEdit"] = 1;
$tdatapayroll2[".afterEditActionDetTable"] = "";


$tdatapayroll2[".list"] = true;

$tdatapayroll2[".inlineEdit"] = true;


$tdatapayroll2[".reorderRecordsByHeader"] = true;


$tdatapayroll2[".exportFormatting"] = 2;
$tdatapayroll2[".exportDelimiter"] = ",";
		
$tdatapayroll2[".view"] = true;

$tdatapayroll2[".import"] = true;

$tdatapayroll2[".exportTo"] = true;

$tdatapayroll2[".printFriendly"] = true;


$tdatapayroll2[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapayroll2[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapayroll2[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapayroll2[".searchSaving"] = false;
//

$tdatapayroll2[".showSearchPanel"] = true;
		$tdatapayroll2[".flexibleSearch"] = true;

$tdatapayroll2[".isUseAjaxSuggest"] = true;

$tdatapayroll2[".rowHighlite"] = true;



																																																																																																																													
																																																																																																																																																																																															

$tdatapayroll2[".ajaxCodeSnippetAdded"] = false;

$tdatapayroll2[".buttonsAdded"] = true;

$tdatapayroll2[".addPageEvents"] = true;

// use timepicker for search panel
$tdatapayroll2[".isUseTimeForSearch"] = false;




$tdatapayroll2[".detailsLinksOnList"] = "1";

$tdatapayroll2[".allSearchFields"] = array();
$tdatapayroll2[".filterFields"] = array();
$tdatapayroll2[".requiredSearchFields"] = array();

$tdatapayroll2[".allSearchFields"][] = "PSID";
	$tdatapayroll2[".allSearchFields"][] = "PayFromDate";
	$tdatapayroll2[".allSearchFields"][] = "PayToDate";
	$tdatapayroll2[".allSearchFields"][] = "PayPeriod";
	$tdatapayroll2[".allSearchFields"][] = "PayDate";
	$tdatapayroll2[".allSearchFields"][] = "Locked";
	

$tdatapayroll2[".googleLikeFields"] = array();
$tdatapayroll2[".googleLikeFields"][] = "PSID";
$tdatapayroll2[".googleLikeFields"][] = "PayDate";
$tdatapayroll2[".googleLikeFields"][] = "PayFromDate";
$tdatapayroll2[".googleLikeFields"][] = "PayToDate";
$tdatapayroll2[".googleLikeFields"][] = "PayPeriod";
$tdatapayroll2[".googleLikeFields"][] = "Locked";


$tdatapayroll2[".advSearchFields"] = array();
$tdatapayroll2[".advSearchFields"][] = "PSID";
$tdatapayroll2[".advSearchFields"][] = "PayFromDate";
$tdatapayroll2[".advSearchFields"][] = "PayToDate";
$tdatapayroll2[".advSearchFields"][] = "PayPeriod";
$tdatapayroll2[".advSearchFields"][] = "PayDate";
$tdatapayroll2[".advSearchFields"][] = "Locked";

$tdatapayroll2[".tableType"] = "list";

$tdatapayroll2[".printerPageOrientation"] = 0;
$tdatapayroll2[".nPrinterPageScale"] = 100;

$tdatapayroll2[".nPrinterSplitRecords"] = 40;

$tdatapayroll2[".nPrinterPDFSplitRecords"] = 40;



$tdatapayroll2[".geocodingEnabled"] = false;





$tdatapayroll2[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatapayroll2[".pageSize"] = 20;

$tdatapayroll2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapayroll2[".strOrderBy"] = $tstrOrderBy;

$tdatapayroll2[".orderindexes"] = array();

$tdatapayroll2[".sqlHead"] = "SELECT PSID,  PayDate,  PayFromDate,  PayToDate,  PayPeriod,  Locked";
$tdatapayroll2[".sqlFrom"] = "FROM payroll";
$tdatapayroll2[".sqlWhereExpr"] = "";
$tdatapayroll2[".sqlTail"] = "";

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
$tdatapayroll2[".arrGridTabs"] = $arrGridTabs;











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapayroll2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapayroll2[".arrGroupsPerPage"] = $arrGPP;

$tdatapayroll2[".highlightSearchResults"] = true;

$tableKeyspayroll2 = array();
$tableKeyspayroll2[] = "PSID";
$tdatapayroll2[".Keys"] = $tableKeyspayroll2;

$tdatapayroll2[".listFields"] = array();
$tdatapayroll2[".listFields"][] = "PSID";
$tdatapayroll2[".listFields"][] = "PayFromDate";
$tdatapayroll2[".listFields"][] = "PayToDate";
$tdatapayroll2[".listFields"][] = "PayPeriod";
$tdatapayroll2[".listFields"][] = "PayDate";
$tdatapayroll2[".listFields"][] = "Locked";

$tdatapayroll2[".hideMobileList"] = array();


$tdatapayroll2[".viewFields"] = array();
$tdatapayroll2[".viewFields"][] = "PSID";
$tdatapayroll2[".viewFields"][] = "PayFromDate";
$tdatapayroll2[".viewFields"][] = "PayToDate";
$tdatapayroll2[".viewFields"][] = "PayPeriod";
$tdatapayroll2[".viewFields"][] = "PayDate";
$tdatapayroll2[".viewFields"][] = "Locked";

$tdatapayroll2[".addFields"] = array();

$tdatapayroll2[".masterListFields"] = array();
$tdatapayroll2[".masterListFields"][] = "PSID";
$tdatapayroll2[".masterListFields"][] = "PayFromDate";
$tdatapayroll2[".masterListFields"][] = "PayToDate";
$tdatapayroll2[".masterListFields"][] = "PayPeriod";
$tdatapayroll2[".masterListFields"][] = "PayDate";
$tdatapayroll2[".masterListFields"][] = "Locked";

$tdatapayroll2[".inlineAddFields"] = array();

$tdatapayroll2[".editFields"] = array();
$tdatapayroll2[".editFields"][] = "PayFromDate";
$tdatapayroll2[".editFields"][] = "PayToDate";
$tdatapayroll2[".editFields"][] = "PayPeriod";
$tdatapayroll2[".editFields"][] = "PayDate";
$tdatapayroll2[".editFields"][] = "Locked";

$tdatapayroll2[".inlineEditFields"] = array();
$tdatapayroll2[".inlineEditFields"][] = "PayFromDate";
$tdatapayroll2[".inlineEditFields"][] = "PayToDate";
$tdatapayroll2[".inlineEditFields"][] = "PayPeriod";
$tdatapayroll2[".inlineEditFields"][] = "PayDate";
$tdatapayroll2[".inlineEditFields"][] = "Locked";

$tdatapayroll2[".updateSelectedFields"] = array();
$tdatapayroll2[".updateSelectedFields"][] = "PayFromDate";
$tdatapayroll2[".updateSelectedFields"][] = "PayToDate";
$tdatapayroll2[".updateSelectedFields"][] = "PayPeriod";
$tdatapayroll2[".updateSelectedFields"][] = "PayDate";
$tdatapayroll2[".updateSelectedFields"][] = "Locked";


$tdatapayroll2[".exportFields"] = array();
$tdatapayroll2[".exportFields"][] = "PSID";
$tdatapayroll2[".exportFields"][] = "PayFromDate";
$tdatapayroll2[".exportFields"][] = "PayToDate";
$tdatapayroll2[".exportFields"][] = "PayPeriod";
$tdatapayroll2[".exportFields"][] = "PayDate";
$tdatapayroll2[".exportFields"][] = "Locked";

$tdatapayroll2[".importFields"] = array();
$tdatapayroll2[".importFields"][] = "PSID";
$tdatapayroll2[".importFields"][] = "PayDate";
$tdatapayroll2[".importFields"][] = "PayFromDate";
$tdatapayroll2[".importFields"][] = "PayToDate";
$tdatapayroll2[".importFields"][] = "PayPeriod";
$tdatapayroll2[".importFields"][] = "Locked";

$tdatapayroll2[".printFields"] = array();
$tdatapayroll2[".printFields"][] = "PSID";
$tdatapayroll2[".printFields"][] = "PayFromDate";
$tdatapayroll2[".printFields"][] = "PayToDate";
$tdatapayroll2[".printFields"][] = "PayPeriod";
$tdatapayroll2[".printFields"][] = "PayDate";
$tdatapayroll2[".printFields"][] = "Locked";


//	PSID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PSID";
	$fdata["GoodName"] = "PSID";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll2","PSID");
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




	$tdatapayroll2["PSID"] = $fdata;
//	PayDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PayDate";
	$fdata["GoodName"] = "PayDate";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll2","PayDate");
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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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




	$tdatapayroll2["PayDate"] = $fdata;
//	PayFromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PayFromDate";
	$fdata["GoodName"] = "PayFromDate";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll2","PayFromDate");
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




	$tdatapayroll2["PayFromDate"] = $fdata;
//	PayToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PayToDate";
	$fdata["GoodName"] = "PayToDate";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll2","PayToDate");
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




	$tdatapayroll2["PayToDate"] = $fdata;
//	PayPeriod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PayPeriod";
	$fdata["GoodName"] = "PayPeriod";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll2","PayPeriod");
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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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




	$tdatapayroll2["PayPeriod"] = $fdata;
//	Locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Locked";
	$fdata["GoodName"] = "Locked";
	$fdata["ownerTable"] = "payroll";
	$fdata["Label"] = GetFieldLabel("payroll2","Locked");
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




	$tdatapayroll2["Locked"] = $fdata;


$tables_data["payroll2"]=&$tdatapayroll2;
$field_labels["payroll2"] = &$fieldLabelspayroll2;
$fieldToolTips["payroll2"] = &$fieldToolTipspayroll2;
$placeHolders["payroll2"] = &$placeHolderspayroll2;
$page_titles["payroll2"] = &$pageTitlespayroll2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["payroll2"] = array();
//	payrolldiv
	
	

		$dIndex = 0;
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
		
	$detailsTablesData["payroll2"][$dIndex] = $detailsParam;

	
		$detailsTablesData["payroll2"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["payroll2"][$dIndex]["masterKeys"][]="PSID";

	$detailsTablesData["payroll2"][$dIndex]["masterKeys"][]="PayFromDate";

	$detailsTablesData["payroll2"][$dIndex]["masterKeys"][]="PayToDate";

				$detailsTablesData["payroll2"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["payroll2"][$dIndex]["detailKeys"][]="PSID";

		
	$detailsTablesData["payroll2"][$dIndex]["detailKeys"][]="FromDate";

		
	$detailsTablesData["payroll2"][$dIndex]["detailKeys"][]="ToDate";

// tables which are master tables for current table (detail)
$masterTablesData["payroll2"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_payroll2()
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
	"m_srcTableName" => "payroll2"
));

$proto6["m_sql"] = "PSID";
$proto6["m_srcTableName"] = "payroll2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PayDate",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll2"
));

$proto8["m_sql"] = "PayDate";
$proto8["m_srcTableName"] = "payroll2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PayFromDate",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll2"
));

$proto10["m_sql"] = "PayFromDate";
$proto10["m_srcTableName"] = "payroll2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PayToDate",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll2"
));

$proto12["m_sql"] = "PayToDate";
$proto12["m_srcTableName"] = "payroll2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PayPeriod",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll2"
));

$proto14["m_sql"] = "PayPeriod";
$proto14["m_srcTableName"] = "payroll2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Locked",
	"m_strTable" => "payroll",
	"m_srcTableName" => "payroll2"
));

$proto16["m_sql"] = "Locked";
$proto16["m_srcTableName"] = "payroll2";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "payroll";
$proto19["m_srcTableName"] = "payroll2";
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
$proto19["m_columns"][] = "Division";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "payroll";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "payroll2";
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
$proto0["m_srcTableName"]="payroll2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_payroll2 = createSqlQuery_payroll2();


	
		;

						

$tdatapayroll2[".sqlquery"] = $queryData_payroll2;

include_once(getabspath("include/payroll2_events.php"));
$tableEvents["payroll2"] = new eventclass_payroll2;
$tdatapayroll2[".hasEvents"] = true;

?>