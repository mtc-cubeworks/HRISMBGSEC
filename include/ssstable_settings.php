<?php
require_once(getabspath("classes/cipherer.php"));




$tdatassstable = array();
	$tdatassstable[".truncateText"] = true;
	$tdatassstable[".NumberOfChars"] = 80;
	$tdatassstable[".ShortName"] = "ssstable";
	$tdatassstable[".OwnerID"] = "";
	$tdatassstable[".OriginalTable"] = "ssstable";

//	field labels
$fieldLabelsssstable = array();
$fieldToolTipsssstable = array();
$pageTitlesssstable = array();
$placeHoldersssstable = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsssstable["English"] = array();
	$fieldToolTipsssstable["English"] = array();
	$placeHoldersssstable["English"] = array();
	$pageTitlesssstable["English"] = array();
	$fieldLabelsssstable["English"]["ssID"] = "SSID";
	$fieldToolTipsssstable["English"]["ssID"] = "";
	$placeHoldersssstable["English"]["ssID"] = "";
	$fieldLabelsssstable["English"]["CompFrom"] = "Compensation From";
	$fieldToolTipsssstable["English"]["CompFrom"] = "";
	$placeHoldersssstable["English"]["CompFrom"] = "";
	$fieldLabelsssstable["English"]["CompTo"] = "Compensation To";
	$fieldToolTipsssstable["English"]["CompTo"] = "";
	$placeHoldersssstable["English"]["CompTo"] = "";
	$fieldLabelsssstable["English"]["ER"] = "Employer Share";
	$fieldToolTipsssstable["English"]["ER"] = "";
	$placeHoldersssstable["English"]["ER"] = "";
	$fieldLabelsssstable["English"]["EE"] = "Employee Share";
	$fieldToolTipsssstable["English"]["EE"] = "";
	$placeHoldersssstable["English"]["EE"] = "";
	$fieldLabelsssstable["English"]["EC"] = "EC";
	$fieldToolTipsssstable["English"]["EC"] = "";
	$placeHoldersssstable["English"]["EC"] = "";
	if (count($fieldToolTipsssstable["English"]))
		$tdatassstable[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsssstable[""] = array();
	$fieldToolTipsssstable[""] = array();
	$placeHoldersssstable[""] = array();
	$pageTitlesssstable[""] = array();
	if (count($fieldToolTipsssstable[""]))
		$tdatassstable[".isUseToolTips"] = true;
}


	$tdatassstable[".NCSearch"] = true;



$tdatassstable[".shortTableName"] = "ssstable";
$tdatassstable[".nSecOptions"] = 0;
$tdatassstable[".recsPerRowPrint"] = 1;
$tdatassstable[".mainTableOwnerID"] = "";
$tdatassstable[".moveNext"] = 1;
$tdatassstable[".entityType"] = 0;

$tdatassstable[".strOriginalTableName"] = "ssstable";

	



$tdatassstable[".showAddInPopup"] = false;

$tdatassstable[".showEditInPopup"] = false;

$tdatassstable[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatassstable[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatassstable[".fieldsForRegister"] = array();

$tdatassstable[".listAjax"] = false;

	$tdatassstable[".audit"] = false;

	$tdatassstable[".locking"] = false;

$tdatassstable[".edit"] = true;
$tdatassstable[".afterEditAction"] = 1;
$tdatassstable[".closePopupAfterEdit"] = 1;
$tdatassstable[".afterEditActionDetTable"] = "";

$tdatassstable[".add"] = true;
$tdatassstable[".afterAddAction"] = 1;
$tdatassstable[".closePopupAfterAdd"] = 1;
$tdatassstable[".afterAddActionDetTable"] = "";

$tdatassstable[".list"] = true;

$tdatassstable[".inlineEdit"] = true;

$tdatassstable[".updateSelected"] = true;

$tdatassstable[".reorderRecordsByHeader"] = true;


$tdatassstable[".exportFormatting"] = 2;
$tdatassstable[".exportDelimiter"] = ",";
		
$tdatassstable[".inlineAdd"] = true;
$tdatassstable[".view"] = true;

$tdatassstable[".import"] = true;

$tdatassstable[".exportTo"] = true;

$tdatassstable[".printFriendly"] = true;

$tdatassstable[".delete"] = true;

$tdatassstable[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatassstable[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatassstable[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatassstable[".searchSaving"] = false;
//

$tdatassstable[".showSearchPanel"] = true;
		$tdatassstable[".flexibleSearch"] = true;

$tdatassstable[".isUseAjaxSuggest"] = true;

$tdatassstable[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdatassstable[".ajaxCodeSnippetAdded"] = false;

$tdatassstable[".buttonsAdded"] = false;

$tdatassstable[".addPageEvents"] = false;

// use timepicker for search panel
$tdatassstable[".isUseTimeForSearch"] = false;





$tdatassstable[".allSearchFields"] = array();
$tdatassstable[".filterFields"] = array();
$tdatassstable[".requiredSearchFields"] = array();

$tdatassstable[".allSearchFields"][] = "ssID";
	$tdatassstable[".allSearchFields"][] = "CompFrom";
	$tdatassstable[".allSearchFields"][] = "CompTo";
	$tdatassstable[".allSearchFields"][] = "ER";
	$tdatassstable[".allSearchFields"][] = "EE";
	$tdatassstable[".allSearchFields"][] = "EC";
	

$tdatassstable[".googleLikeFields"] = array();
$tdatassstable[".googleLikeFields"][] = "ssID";
$tdatassstable[".googleLikeFields"][] = "CompFrom";
$tdatassstable[".googleLikeFields"][] = "CompTo";
$tdatassstable[".googleLikeFields"][] = "ER";
$tdatassstable[".googleLikeFields"][] = "EE";
$tdatassstable[".googleLikeFields"][] = "EC";


$tdatassstable[".advSearchFields"] = array();
$tdatassstable[".advSearchFields"][] = "ssID";
$tdatassstable[".advSearchFields"][] = "CompFrom";
$tdatassstable[".advSearchFields"][] = "CompTo";
$tdatassstable[".advSearchFields"][] = "ER";
$tdatassstable[".advSearchFields"][] = "EE";
$tdatassstable[".advSearchFields"][] = "EC";

$tdatassstable[".tableType"] = "list";

$tdatassstable[".printerPageOrientation"] = 0;
$tdatassstable[".nPrinterPageScale"] = 100;

$tdatassstable[".nPrinterSplitRecords"] = 40;

$tdatassstable[".nPrinterPDFSplitRecords"] = 40;



$tdatassstable[".geocodingEnabled"] = false;





$tdatassstable[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatassstable[".pageSize"] = 20;

$tdatassstable[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatassstable[".strOrderBy"] = $tstrOrderBy;

$tdatassstable[".orderindexes"] = array();

$tdatassstable[".sqlHead"] = "SELECT ssID,  	CompFrom,  	CompTo,  	ER,  	EE,  	EC";
$tdatassstable[".sqlFrom"] = "FROM ssstable";
$tdatassstable[".sqlWhereExpr"] = "";
$tdatassstable[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatassstable[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatassstable[".arrGroupsPerPage"] = $arrGPP;

$tdatassstable[".highlightSearchResults"] = true;

$tableKeysssstable = array();
$tableKeysssstable[] = "ssID";
$tdatassstable[".Keys"] = $tableKeysssstable;

$tdatassstable[".listFields"] = array();
$tdatassstable[".listFields"][] = "ssID";
$tdatassstable[".listFields"][] = "CompFrom";
$tdatassstable[".listFields"][] = "CompTo";
$tdatassstable[".listFields"][] = "ER";
$tdatassstable[".listFields"][] = "EE";
$tdatassstable[".listFields"][] = "EC";

$tdatassstable[".hideMobileList"] = array();


$tdatassstable[".viewFields"] = array();
$tdatassstable[".viewFields"][] = "ssID";
$tdatassstable[".viewFields"][] = "CompFrom";
$tdatassstable[".viewFields"][] = "CompTo";
$tdatassstable[".viewFields"][] = "ER";
$tdatassstable[".viewFields"][] = "EE";
$tdatassstable[".viewFields"][] = "EC";

$tdatassstable[".addFields"] = array();
$tdatassstable[".addFields"][] = "CompFrom";
$tdatassstable[".addFields"][] = "CompTo";
$tdatassstable[".addFields"][] = "ER";
$tdatassstable[".addFields"][] = "EE";
$tdatassstable[".addFields"][] = "EC";

$tdatassstable[".masterListFields"] = array();
$tdatassstable[".masterListFields"][] = "ssID";
$tdatassstable[".masterListFields"][] = "CompFrom";
$tdatassstable[".masterListFields"][] = "CompTo";
$tdatassstable[".masterListFields"][] = "ER";
$tdatassstable[".masterListFields"][] = "EE";
$tdatassstable[".masterListFields"][] = "EC";

$tdatassstable[".inlineAddFields"] = array();
$tdatassstable[".inlineAddFields"][] = "CompFrom";
$tdatassstable[".inlineAddFields"][] = "CompTo";
$tdatassstable[".inlineAddFields"][] = "ER";
$tdatassstable[".inlineAddFields"][] = "EE";
$tdatassstable[".inlineAddFields"][] = "EC";

$tdatassstable[".editFields"] = array();
$tdatassstable[".editFields"][] = "CompFrom";
$tdatassstable[".editFields"][] = "CompTo";
$tdatassstable[".editFields"][] = "ER";
$tdatassstable[".editFields"][] = "EE";
$tdatassstable[".editFields"][] = "EC";

$tdatassstable[".inlineEditFields"] = array();
$tdatassstable[".inlineEditFields"][] = "CompFrom";
$tdatassstable[".inlineEditFields"][] = "CompTo";
$tdatassstable[".inlineEditFields"][] = "ER";
$tdatassstable[".inlineEditFields"][] = "EE";
$tdatassstable[".inlineEditFields"][] = "EC";

$tdatassstable[".updateSelectedFields"] = array();
$tdatassstable[".updateSelectedFields"][] = "CompFrom";
$tdatassstable[".updateSelectedFields"][] = "CompTo";
$tdatassstable[".updateSelectedFields"][] = "ER";
$tdatassstable[".updateSelectedFields"][] = "EE";
$tdatassstable[".updateSelectedFields"][] = "EC";


$tdatassstable[".exportFields"] = array();
$tdatassstable[".exportFields"][] = "ssID";
$tdatassstable[".exportFields"][] = "CompFrom";
$tdatassstable[".exportFields"][] = "CompTo";
$tdatassstable[".exportFields"][] = "ER";
$tdatassstable[".exportFields"][] = "EE";
$tdatassstable[".exportFields"][] = "EC";

$tdatassstable[".importFields"] = array();
$tdatassstable[".importFields"][] = "ssID";
$tdatassstable[".importFields"][] = "CompFrom";
$tdatassstable[".importFields"][] = "CompTo";
$tdatassstable[".importFields"][] = "ER";
$tdatassstable[".importFields"][] = "EE";
$tdatassstable[".importFields"][] = "EC";

$tdatassstable[".printFields"] = array();
$tdatassstable[".printFields"][] = "ssID";
$tdatassstable[".printFields"][] = "CompFrom";
$tdatassstable[".printFields"][] = "CompTo";
$tdatassstable[".printFields"][] = "ER";
$tdatassstable[".printFields"][] = "EE";
$tdatassstable[".printFields"][] = "EC";


//	ssID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ssID";
	$fdata["GoodName"] = "ssID";
	$fdata["ownerTable"] = "ssstable";
	$fdata["Label"] = GetFieldLabel("ssstable","ssID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ssID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ssID";

	
	
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




	$tdatassstable["ssID"] = $fdata;
//	CompFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CompFrom";
	$fdata["GoodName"] = "CompFrom";
	$fdata["ownerTable"] = "ssstable";
	$fdata["Label"] = GetFieldLabel("ssstable","CompFrom");
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

		$fdata["strField"] = "CompFrom";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CompFrom";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatassstable["CompFrom"] = $fdata;
//	CompTo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CompTo";
	$fdata["GoodName"] = "CompTo";
	$fdata["ownerTable"] = "ssstable";
	$fdata["Label"] = GetFieldLabel("ssstable","CompTo");
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

		$fdata["strField"] = "CompTo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CompTo";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatassstable["CompTo"] = $fdata;
//	ER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ER";
	$fdata["GoodName"] = "ER";
	$fdata["ownerTable"] = "ssstable";
	$fdata["Label"] = GetFieldLabel("ssstable","ER");
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

		$fdata["strField"] = "ER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ER";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatassstable["ER"] = $fdata;
//	EE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "EE";
	$fdata["GoodName"] = "EE";
	$fdata["ownerTable"] = "ssstable";
	$fdata["Label"] = GetFieldLabel("ssstable","EE");
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

		$fdata["strField"] = "EE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EE";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatassstable["EE"] = $fdata;
//	EC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EC";
	$fdata["GoodName"] = "EC";
	$fdata["ownerTable"] = "ssstable";
	$fdata["Label"] = GetFieldLabel("ssstable","EC");
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

		$fdata["strField"] = "EC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EC";

	
	
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




	$tdatassstable["EC"] = $fdata;


$tables_data["ssstable"]=&$tdatassstable;
$field_labels["ssstable"] = &$fieldLabelsssstable;
$fieldToolTips["ssstable"] = &$fieldToolTipsssstable;
$placeHolders["ssstable"] = &$placeHoldersssstable;
$page_titles["ssstable"] = &$pageTitlesssstable;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ssstable"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ssstable"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ssstable()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ssID,  	CompFrom,  	CompTo,  	ER,  	EE,  	EC";
$proto0["m_strFrom"] = "FROM ssstable";
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
	"m_strName" => "ssID",
	"m_strTable" => "ssstable",
	"m_srcTableName" => "ssstable"
));

$proto6["m_sql"] = "ssID";
$proto6["m_srcTableName"] = "ssstable";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CompFrom",
	"m_strTable" => "ssstable",
	"m_srcTableName" => "ssstable"
));

$proto8["m_sql"] = "CompFrom";
$proto8["m_srcTableName"] = "ssstable";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CompTo",
	"m_strTable" => "ssstable",
	"m_srcTableName" => "ssstable"
));

$proto10["m_sql"] = "CompTo";
$proto10["m_srcTableName"] = "ssstable";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ER",
	"m_strTable" => "ssstable",
	"m_srcTableName" => "ssstable"
));

$proto12["m_sql"] = "ER";
$proto12["m_srcTableName"] = "ssstable";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "EE",
	"m_strTable" => "ssstable",
	"m_srcTableName" => "ssstable"
));

$proto14["m_sql"] = "EE";
$proto14["m_srcTableName"] = "ssstable";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "EC",
	"m_strTable" => "ssstable",
	"m_srcTableName" => "ssstable"
));

$proto16["m_sql"] = "EC";
$proto16["m_srcTableName"] = "ssstable";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "ssstable";
$proto19["m_srcTableName"] = "ssstable";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "ssID";
$proto19["m_columns"][] = "CompFrom";
$proto19["m_columns"][] = "CompTo";
$proto19["m_columns"][] = "ER";
$proto19["m_columns"][] = "EE";
$proto19["m_columns"][] = "EC";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "ssstable";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "ssstable";
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
$proto0["m_srcTableName"]="ssstable";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ssstable = createSqlQuery_ssstable();


	
		;

						

$tdatassstable[".sqlquery"] = $queryData_ssstable;

$tableEvents["ssstable"] = new eventsBase;
$tdatassstable[".hasEvents"] = false;

?>