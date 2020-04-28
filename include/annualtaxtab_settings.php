<?php
require_once(getabspath("classes/cipherer.php"));




$tdataannualtaxtab = array();
	$tdataannualtaxtab[".truncateText"] = true;
	$tdataannualtaxtab[".NumberOfChars"] = 80;
	$tdataannualtaxtab[".ShortName"] = "annualtaxtab";
	$tdataannualtaxtab[".OwnerID"] = "";
	$tdataannualtaxtab[".OriginalTable"] = "annualtaxtab";

//	field labels
$fieldLabelsannualtaxtab = array();
$fieldToolTipsannualtaxtab = array();
$pageTitlesannualtaxtab = array();
$placeHoldersannualtaxtab = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsannualtaxtab["English"] = array();
	$fieldToolTipsannualtaxtab["English"] = array();
	$placeHoldersannualtaxtab["English"] = array();
	$pageTitlesannualtaxtab["English"] = array();
	$fieldLabelsannualtaxtab["English"]["txID"] = "Tx ID";
	$fieldToolTipsannualtaxtab["English"]["txID"] = "";
	$placeHoldersannualtaxtab["English"]["txID"] = "";
	$fieldLabelsannualtaxtab["English"]["Excess"] = "Excess";
	$fieldToolTipsannualtaxtab["English"]["Excess"] = "";
	$placeHoldersannualtaxtab["English"]["Excess"] = "";
	$fieldLabelsannualtaxtab["English"]["Base"] = "Base";
	$fieldToolTipsannualtaxtab["English"]["Base"] = "";
	$placeHoldersannualtaxtab["English"]["Base"] = "";
	$fieldLabelsannualtaxtab["English"]["Rate"] = "Rate";
	$fieldToolTipsannualtaxtab["English"]["Rate"] = "";
	$placeHoldersannualtaxtab["English"]["Rate"] = "";
	$fieldLabelsannualtaxtab["English"]["IncomeFrom"] = "Income From";
	$fieldToolTipsannualtaxtab["English"]["IncomeFrom"] = "";
	$placeHoldersannualtaxtab["English"]["IncomeFrom"] = "";
	$fieldLabelsannualtaxtab["English"]["IncomeTo"] = "Income To";
	$fieldToolTipsannualtaxtab["English"]["IncomeTo"] = "";
	$placeHoldersannualtaxtab["English"]["IncomeTo"] = "";
	if (count($fieldToolTipsannualtaxtab["English"]))
		$tdataannualtaxtab[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsannualtaxtab[""] = array();
	$fieldToolTipsannualtaxtab[""] = array();
	$placeHoldersannualtaxtab[""] = array();
	$pageTitlesannualtaxtab[""] = array();
	if (count($fieldToolTipsannualtaxtab[""]))
		$tdataannualtaxtab[".isUseToolTips"] = true;
}


	$tdataannualtaxtab[".NCSearch"] = true;



$tdataannualtaxtab[".shortTableName"] = "annualtaxtab";
$tdataannualtaxtab[".nSecOptions"] = 0;
$tdataannualtaxtab[".recsPerRowPrint"] = 1;
$tdataannualtaxtab[".mainTableOwnerID"] = "";
$tdataannualtaxtab[".moveNext"] = 1;
$tdataannualtaxtab[".entityType"] = 0;

$tdataannualtaxtab[".strOriginalTableName"] = "annualtaxtab";

	



$tdataannualtaxtab[".showAddInPopup"] = false;

$tdataannualtaxtab[".showEditInPopup"] = false;

$tdataannualtaxtab[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataannualtaxtab[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataannualtaxtab[".fieldsForRegister"] = array();

$tdataannualtaxtab[".listAjax"] = false;

	$tdataannualtaxtab[".audit"] = false;

	$tdataannualtaxtab[".locking"] = false;

$tdataannualtaxtab[".edit"] = true;
$tdataannualtaxtab[".afterEditAction"] = 1;
$tdataannualtaxtab[".closePopupAfterEdit"] = 1;
$tdataannualtaxtab[".afterEditActionDetTable"] = "";

$tdataannualtaxtab[".add"] = true;
$tdataannualtaxtab[".afterAddAction"] = 1;
$tdataannualtaxtab[".closePopupAfterAdd"] = 1;
$tdataannualtaxtab[".afterAddActionDetTable"] = "";

$tdataannualtaxtab[".list"] = true;

$tdataannualtaxtab[".inlineEdit"] = true;


$tdataannualtaxtab[".reorderRecordsByHeader"] = true;


$tdataannualtaxtab[".exportFormatting"] = 2;
$tdataannualtaxtab[".exportDelimiter"] = ",";
		
$tdataannualtaxtab[".inlineAdd"] = true;
$tdataannualtaxtab[".copy"] = true;
$tdataannualtaxtab[".view"] = true;

$tdataannualtaxtab[".import"] = true;

$tdataannualtaxtab[".exportTo"] = true;

$tdataannualtaxtab[".printFriendly"] = true;

$tdataannualtaxtab[".delete"] = true;

$tdataannualtaxtab[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataannualtaxtab[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataannualtaxtab[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataannualtaxtab[".searchSaving"] = false;
//

$tdataannualtaxtab[".showSearchPanel"] = true;
		$tdataannualtaxtab[".flexibleSearch"] = true;

$tdataannualtaxtab[".isUseAjaxSuggest"] = true;

$tdataannualtaxtab[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdataannualtaxtab[".ajaxCodeSnippetAdded"] = false;

$tdataannualtaxtab[".buttonsAdded"] = false;

$tdataannualtaxtab[".addPageEvents"] = false;

// use timepicker for search panel
$tdataannualtaxtab[".isUseTimeForSearch"] = false;





$tdataannualtaxtab[".allSearchFields"] = array();
$tdataannualtaxtab[".filterFields"] = array();
$tdataannualtaxtab[".requiredSearchFields"] = array();

$tdataannualtaxtab[".allSearchFields"][] = "txID";
	$tdataannualtaxtab[".allSearchFields"][] = "Excess";
	$tdataannualtaxtab[".allSearchFields"][] = "Base";
	$tdataannualtaxtab[".allSearchFields"][] = "Rate";
	$tdataannualtaxtab[".allSearchFields"][] = "IncomeFrom";
	$tdataannualtaxtab[".allSearchFields"][] = "IncomeTo";
	

$tdataannualtaxtab[".googleLikeFields"] = array();
$tdataannualtaxtab[".googleLikeFields"][] = "txID";
$tdataannualtaxtab[".googleLikeFields"][] = "Excess";
$tdataannualtaxtab[".googleLikeFields"][] = "Base";
$tdataannualtaxtab[".googleLikeFields"][] = "Rate";
$tdataannualtaxtab[".googleLikeFields"][] = "IncomeFrom";
$tdataannualtaxtab[".googleLikeFields"][] = "IncomeTo";


$tdataannualtaxtab[".advSearchFields"] = array();
$tdataannualtaxtab[".advSearchFields"][] = "txID";
$tdataannualtaxtab[".advSearchFields"][] = "Excess";
$tdataannualtaxtab[".advSearchFields"][] = "Base";
$tdataannualtaxtab[".advSearchFields"][] = "Rate";
$tdataannualtaxtab[".advSearchFields"][] = "IncomeFrom";
$tdataannualtaxtab[".advSearchFields"][] = "IncomeTo";

$tdataannualtaxtab[".tableType"] = "list";

$tdataannualtaxtab[".printerPageOrientation"] = 0;
$tdataannualtaxtab[".nPrinterPageScale"] = 100;

$tdataannualtaxtab[".nPrinterSplitRecords"] = 40;

$tdataannualtaxtab[".nPrinterPDFSplitRecords"] = 40;



$tdataannualtaxtab[".geocodingEnabled"] = false;





$tdataannualtaxtab[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataannualtaxtab[".pageSize"] = 20;

$tdataannualtaxtab[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataannualtaxtab[".strOrderBy"] = $tstrOrderBy;

$tdataannualtaxtab[".orderindexes"] = array();

$tdataannualtaxtab[".sqlHead"] = "SELECT txID,  	Excess,  	Base,  	Rate,  	IncomeFrom,  	IncomeTo";
$tdataannualtaxtab[".sqlFrom"] = "FROM annualtaxtab";
$tdataannualtaxtab[".sqlWhereExpr"] = "";
$tdataannualtaxtab[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataannualtaxtab[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataannualtaxtab[".arrGroupsPerPage"] = $arrGPP;

$tdataannualtaxtab[".highlightSearchResults"] = true;

$tableKeysannualtaxtab = array();
$tableKeysannualtaxtab[] = "txID";
$tdataannualtaxtab[".Keys"] = $tableKeysannualtaxtab;

$tdataannualtaxtab[".listFields"] = array();
$tdataannualtaxtab[".listFields"][] = "txID";
$tdataannualtaxtab[".listFields"][] = "Excess";
$tdataannualtaxtab[".listFields"][] = "Base";
$tdataannualtaxtab[".listFields"][] = "Rate";
$tdataannualtaxtab[".listFields"][] = "IncomeFrom";
$tdataannualtaxtab[".listFields"][] = "IncomeTo";

$tdataannualtaxtab[".hideMobileList"] = array();


$tdataannualtaxtab[".viewFields"] = array();
$tdataannualtaxtab[".viewFields"][] = "txID";
$tdataannualtaxtab[".viewFields"][] = "Excess";
$tdataannualtaxtab[".viewFields"][] = "Base";
$tdataannualtaxtab[".viewFields"][] = "Rate";
$tdataannualtaxtab[".viewFields"][] = "IncomeFrom";
$tdataannualtaxtab[".viewFields"][] = "IncomeTo";

$tdataannualtaxtab[".addFields"] = array();
$tdataannualtaxtab[".addFields"][] = "Excess";
$tdataannualtaxtab[".addFields"][] = "Base";
$tdataannualtaxtab[".addFields"][] = "Rate";
$tdataannualtaxtab[".addFields"][] = "IncomeFrom";
$tdataannualtaxtab[".addFields"][] = "IncomeTo";

$tdataannualtaxtab[".masterListFields"] = array();
$tdataannualtaxtab[".masterListFields"][] = "txID";
$tdataannualtaxtab[".masterListFields"][] = "Excess";
$tdataannualtaxtab[".masterListFields"][] = "Base";
$tdataannualtaxtab[".masterListFields"][] = "Rate";
$tdataannualtaxtab[".masterListFields"][] = "IncomeFrom";
$tdataannualtaxtab[".masterListFields"][] = "IncomeTo";

$tdataannualtaxtab[".inlineAddFields"] = array();
$tdataannualtaxtab[".inlineAddFields"][] = "Excess";
$tdataannualtaxtab[".inlineAddFields"][] = "Base";
$tdataannualtaxtab[".inlineAddFields"][] = "Rate";
$tdataannualtaxtab[".inlineAddFields"][] = "IncomeFrom";
$tdataannualtaxtab[".inlineAddFields"][] = "IncomeTo";

$tdataannualtaxtab[".editFields"] = array();
$tdataannualtaxtab[".editFields"][] = "Excess";
$tdataannualtaxtab[".editFields"][] = "Base";
$tdataannualtaxtab[".editFields"][] = "Rate";
$tdataannualtaxtab[".editFields"][] = "IncomeFrom";
$tdataannualtaxtab[".editFields"][] = "IncomeTo";

$tdataannualtaxtab[".inlineEditFields"] = array();
$tdataannualtaxtab[".inlineEditFields"][] = "Excess";
$tdataannualtaxtab[".inlineEditFields"][] = "Base";
$tdataannualtaxtab[".inlineEditFields"][] = "Rate";
$tdataannualtaxtab[".inlineEditFields"][] = "IncomeFrom";
$tdataannualtaxtab[".inlineEditFields"][] = "IncomeTo";

$tdataannualtaxtab[".updateSelectedFields"] = array();
$tdataannualtaxtab[".updateSelectedFields"][] = "Excess";
$tdataannualtaxtab[".updateSelectedFields"][] = "Base";
$tdataannualtaxtab[".updateSelectedFields"][] = "Rate";
$tdataannualtaxtab[".updateSelectedFields"][] = "IncomeFrom";
$tdataannualtaxtab[".updateSelectedFields"][] = "IncomeTo";


$tdataannualtaxtab[".exportFields"] = array();
$tdataannualtaxtab[".exportFields"][] = "txID";
$tdataannualtaxtab[".exportFields"][] = "Excess";
$tdataannualtaxtab[".exportFields"][] = "Base";
$tdataannualtaxtab[".exportFields"][] = "Rate";
$tdataannualtaxtab[".exportFields"][] = "IncomeFrom";
$tdataannualtaxtab[".exportFields"][] = "IncomeTo";

$tdataannualtaxtab[".importFields"] = array();
$tdataannualtaxtab[".importFields"][] = "txID";
$tdataannualtaxtab[".importFields"][] = "Excess";
$tdataannualtaxtab[".importFields"][] = "Base";
$tdataannualtaxtab[".importFields"][] = "Rate";
$tdataannualtaxtab[".importFields"][] = "IncomeFrom";
$tdataannualtaxtab[".importFields"][] = "IncomeTo";

$tdataannualtaxtab[".printFields"] = array();
$tdataannualtaxtab[".printFields"][] = "txID";
$tdataannualtaxtab[".printFields"][] = "Excess";
$tdataannualtaxtab[".printFields"][] = "Base";
$tdataannualtaxtab[".printFields"][] = "Rate";
$tdataannualtaxtab[".printFields"][] = "IncomeFrom";
$tdataannualtaxtab[".printFields"][] = "IncomeTo";


//	txID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "txID";
	$fdata["GoodName"] = "txID";
	$fdata["ownerTable"] = "annualtaxtab";
	$fdata["Label"] = GetFieldLabel("annualtaxtab","txID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "txID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "txID";

	
	
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




	$tdataannualtaxtab["txID"] = $fdata;
//	Excess
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Excess";
	$fdata["GoodName"] = "Excess";
	$fdata["ownerTable"] = "annualtaxtab";
	$fdata["Label"] = GetFieldLabel("annualtaxtab","Excess");
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

		$fdata["strField"] = "Excess";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Excess";

	
	
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




	$tdataannualtaxtab["Excess"] = $fdata;
//	Base
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Base";
	$fdata["GoodName"] = "Base";
	$fdata["ownerTable"] = "annualtaxtab";
	$fdata["Label"] = GetFieldLabel("annualtaxtab","Base");
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

		$fdata["strField"] = "Base";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Base";

	
	
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




	$tdataannualtaxtab["Base"] = $fdata;
//	Rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Rate";
	$fdata["GoodName"] = "Rate";
	$fdata["ownerTable"] = "annualtaxtab";
	$fdata["Label"] = GetFieldLabel("annualtaxtab","Rate");
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

		$fdata["strField"] = "Rate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Rate";

	
	
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




	$tdataannualtaxtab["Rate"] = $fdata;
//	IncomeFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "IncomeFrom";
	$fdata["GoodName"] = "IncomeFrom";
	$fdata["ownerTable"] = "annualtaxtab";
	$fdata["Label"] = GetFieldLabel("annualtaxtab","IncomeFrom");
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

		$fdata["strField"] = "IncomeFrom";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IncomeFrom";

	
	
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




	$tdataannualtaxtab["IncomeFrom"] = $fdata;
//	IncomeTo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "IncomeTo";
	$fdata["GoodName"] = "IncomeTo";
	$fdata["ownerTable"] = "annualtaxtab";
	$fdata["Label"] = GetFieldLabel("annualtaxtab","IncomeTo");
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

		$fdata["strField"] = "IncomeTo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IncomeTo";

	
	
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




	$tdataannualtaxtab["IncomeTo"] = $fdata;


$tables_data["annualtaxtab"]=&$tdataannualtaxtab;
$field_labels["annualtaxtab"] = &$fieldLabelsannualtaxtab;
$fieldToolTips["annualtaxtab"] = &$fieldToolTipsannualtaxtab;
$placeHolders["annualtaxtab"] = &$placeHoldersannualtaxtab;
$page_titles["annualtaxtab"] = &$pageTitlesannualtaxtab;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["annualtaxtab"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["annualtaxtab"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_annualtaxtab()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "txID,  	Excess,  	Base,  	Rate,  	IncomeFrom,  	IncomeTo";
$proto0["m_strFrom"] = "FROM annualtaxtab";
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
	"m_strName" => "txID",
	"m_strTable" => "annualtaxtab",
	"m_srcTableName" => "annualtaxtab"
));

$proto6["m_sql"] = "txID";
$proto6["m_srcTableName"] = "annualtaxtab";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Excess",
	"m_strTable" => "annualtaxtab",
	"m_srcTableName" => "annualtaxtab"
));

$proto8["m_sql"] = "Excess";
$proto8["m_srcTableName"] = "annualtaxtab";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Base",
	"m_strTable" => "annualtaxtab",
	"m_srcTableName" => "annualtaxtab"
));

$proto10["m_sql"] = "Base";
$proto10["m_srcTableName"] = "annualtaxtab";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Rate",
	"m_strTable" => "annualtaxtab",
	"m_srcTableName" => "annualtaxtab"
));

$proto12["m_sql"] = "Rate";
$proto12["m_srcTableName"] = "annualtaxtab";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "IncomeFrom",
	"m_strTable" => "annualtaxtab",
	"m_srcTableName" => "annualtaxtab"
));

$proto14["m_sql"] = "IncomeFrom";
$proto14["m_srcTableName"] = "annualtaxtab";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "IncomeTo",
	"m_strTable" => "annualtaxtab",
	"m_srcTableName" => "annualtaxtab"
));

$proto16["m_sql"] = "IncomeTo";
$proto16["m_srcTableName"] = "annualtaxtab";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "annualtaxtab";
$proto19["m_srcTableName"] = "annualtaxtab";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "txID";
$proto19["m_columns"][] = "Excess";
$proto19["m_columns"][] = "Base";
$proto19["m_columns"][] = "Rate";
$proto19["m_columns"][] = "IncomeFrom";
$proto19["m_columns"][] = "IncomeTo";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "annualtaxtab";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "annualtaxtab";
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
$proto0["m_srcTableName"]="annualtaxtab";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_annualtaxtab = createSqlQuery_annualtaxtab();


	
		;

						

$tdataannualtaxtab[".sqlquery"] = $queryData_annualtaxtab;

$tableEvents["annualtaxtab"] = new eventsBase;
$tdataannualtaxtab[".hasEvents"] = false;

?>