<?php
require_once(getabspath("classes/cipherer.php"));




$tdataphilhealthtable = array();
	$tdataphilhealthtable[".truncateText"] = true;
	$tdataphilhealthtable[".NumberOfChars"] = 80;
	$tdataphilhealthtable[".ShortName"] = "philhealthtable";
	$tdataphilhealthtable[".OwnerID"] = "";
	$tdataphilhealthtable[".OriginalTable"] = "philhealthtable";

//	field labels
$fieldLabelsphilhealthtable = array();
$fieldToolTipsphilhealthtable = array();
$pageTitlesphilhealthtable = array();
$placeHoldersphilhealthtable = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsphilhealthtable["English"] = array();
	$fieldToolTipsphilhealthtable["English"] = array();
	$placeHoldersphilhealthtable["English"] = array();
	$pageTitlesphilhealthtable["English"] = array();
	$fieldLabelsphilhealthtable["English"]["phID"] = "PhID";
	$fieldToolTipsphilhealthtable["English"]["phID"] = "";
	$placeHoldersphilhealthtable["English"]["phID"] = "";
	$fieldLabelsphilhealthtable["English"]["SalaryFrom"] = "Salary From";
	$fieldToolTipsphilhealthtable["English"]["SalaryFrom"] = "";
	$placeHoldersphilhealthtable["English"]["SalaryFrom"] = "";
	$fieldLabelsphilhealthtable["English"]["SalaryTo"] = "Salary To";
	$fieldToolTipsphilhealthtable["English"]["SalaryTo"] = "";
	$placeHoldersphilhealthtable["English"]["SalaryTo"] = "";
	$fieldLabelsphilhealthtable["English"]["ER"] = "Employer Share";
	$fieldToolTipsphilhealthtable["English"]["ER"] = "";
	$placeHoldersphilhealthtable["English"]["ER"] = "";
	$fieldLabelsphilhealthtable["English"]["EE"] = "Employee Share";
	$fieldToolTipsphilhealthtable["English"]["EE"] = "";
	$placeHoldersphilhealthtable["English"]["EE"] = "";
	$fieldLabelsphilhealthtable["English"]["PcntRate"] = "Pcnt Rate";
	$fieldToolTipsphilhealthtable["English"]["PcntRate"] = "";
	$placeHoldersphilhealthtable["English"]["PcntRate"] = "";
	if (count($fieldToolTipsphilhealthtable["English"]))
		$tdataphilhealthtable[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsphilhealthtable[""] = array();
	$fieldToolTipsphilhealthtable[""] = array();
	$placeHoldersphilhealthtable[""] = array();
	$pageTitlesphilhealthtable[""] = array();
	if (count($fieldToolTipsphilhealthtable[""]))
		$tdataphilhealthtable[".isUseToolTips"] = true;
}


	$tdataphilhealthtable[".NCSearch"] = true;



$tdataphilhealthtable[".shortTableName"] = "philhealthtable";
$tdataphilhealthtable[".nSecOptions"] = 0;
$tdataphilhealthtable[".recsPerRowPrint"] = 1;
$tdataphilhealthtable[".mainTableOwnerID"] = "";
$tdataphilhealthtable[".moveNext"] = 1;
$tdataphilhealthtable[".entityType"] = 0;

$tdataphilhealthtable[".strOriginalTableName"] = "philhealthtable";

	



$tdataphilhealthtable[".showAddInPopup"] = false;

$tdataphilhealthtable[".showEditInPopup"] = false;

$tdataphilhealthtable[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataphilhealthtable[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataphilhealthtable[".fieldsForRegister"] = array();

$tdataphilhealthtable[".listAjax"] = false;

	$tdataphilhealthtable[".audit"] = false;

	$tdataphilhealthtable[".locking"] = false;

$tdataphilhealthtable[".edit"] = true;
$tdataphilhealthtable[".afterEditAction"] = 1;
$tdataphilhealthtable[".closePopupAfterEdit"] = 1;
$tdataphilhealthtable[".afterEditActionDetTable"] = "";

$tdataphilhealthtable[".add"] = true;
$tdataphilhealthtable[".afterAddAction"] = 1;
$tdataphilhealthtable[".closePopupAfterAdd"] = 1;
$tdataphilhealthtable[".afterAddActionDetTable"] = "";

$tdataphilhealthtable[".list"] = true;

$tdataphilhealthtable[".inlineEdit"] = true;

$tdataphilhealthtable[".updateSelected"] = true;

$tdataphilhealthtable[".reorderRecordsByHeader"] = true;


$tdataphilhealthtable[".exportFormatting"] = 2;
$tdataphilhealthtable[".exportDelimiter"] = ",";
		
$tdataphilhealthtable[".inlineAdd"] = true;
$tdataphilhealthtable[".copy"] = true;
$tdataphilhealthtable[".view"] = true;

$tdataphilhealthtable[".import"] = true;

$tdataphilhealthtable[".exportTo"] = true;

$tdataphilhealthtable[".printFriendly"] = true;

$tdataphilhealthtable[".delete"] = true;

$tdataphilhealthtable[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataphilhealthtable[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataphilhealthtable[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataphilhealthtable[".searchSaving"] = false;
//

$tdataphilhealthtable[".showSearchPanel"] = true;
		$tdataphilhealthtable[".flexibleSearch"] = true;

$tdataphilhealthtable[".isUseAjaxSuggest"] = true;

$tdataphilhealthtable[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																					

$tdataphilhealthtable[".ajaxCodeSnippetAdded"] = false;

$tdataphilhealthtable[".buttonsAdded"] = false;

$tdataphilhealthtable[".addPageEvents"] = false;

// use timepicker for search panel
$tdataphilhealthtable[".isUseTimeForSearch"] = false;





$tdataphilhealthtable[".allSearchFields"] = array();
$tdataphilhealthtable[".filterFields"] = array();
$tdataphilhealthtable[".requiredSearchFields"] = array();

$tdataphilhealthtable[".allSearchFields"][] = "phID";
	$tdataphilhealthtable[".allSearchFields"][] = "SalaryFrom";
	$tdataphilhealthtable[".allSearchFields"][] = "SalaryTo";
	$tdataphilhealthtable[".allSearchFields"][] = "ER";
	$tdataphilhealthtable[".allSearchFields"][] = "EE";
	$tdataphilhealthtable[".allSearchFields"][] = "PcntRate";
	

$tdataphilhealthtable[".googleLikeFields"] = array();
$tdataphilhealthtable[".googleLikeFields"][] = "phID";
$tdataphilhealthtable[".googleLikeFields"][] = "SalaryFrom";
$tdataphilhealthtable[".googleLikeFields"][] = "SalaryTo";
$tdataphilhealthtable[".googleLikeFields"][] = "ER";
$tdataphilhealthtable[".googleLikeFields"][] = "EE";
$tdataphilhealthtable[".googleLikeFields"][] = "PcntRate";


$tdataphilhealthtable[".advSearchFields"] = array();
$tdataphilhealthtable[".advSearchFields"][] = "phID";
$tdataphilhealthtable[".advSearchFields"][] = "SalaryFrom";
$tdataphilhealthtable[".advSearchFields"][] = "SalaryTo";
$tdataphilhealthtable[".advSearchFields"][] = "ER";
$tdataphilhealthtable[".advSearchFields"][] = "EE";
$tdataphilhealthtable[".advSearchFields"][] = "PcntRate";

$tdataphilhealthtable[".tableType"] = "list";

$tdataphilhealthtable[".printerPageOrientation"] = 0;
$tdataphilhealthtable[".nPrinterPageScale"] = 100;

$tdataphilhealthtable[".nPrinterSplitRecords"] = 40;

$tdataphilhealthtable[".nPrinterPDFSplitRecords"] = 40;



$tdataphilhealthtable[".geocodingEnabled"] = false;





$tdataphilhealthtable[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataphilhealthtable[".pageSize"] = 20;

$tdataphilhealthtable[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataphilhealthtable[".strOrderBy"] = $tstrOrderBy;

$tdataphilhealthtable[".orderindexes"] = array();

$tdataphilhealthtable[".sqlHead"] = "SELECT phID,  	SalaryFrom,  	SalaryTo,  	ER,  	EE,  	PcntRate";
$tdataphilhealthtable[".sqlFrom"] = "FROM philhealthtable";
$tdataphilhealthtable[".sqlWhereExpr"] = "";
$tdataphilhealthtable[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataphilhealthtable[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataphilhealthtable[".arrGroupsPerPage"] = $arrGPP;

$tdataphilhealthtable[".highlightSearchResults"] = true;

$tableKeysphilhealthtable = array();
$tableKeysphilhealthtable[] = "phID";
$tdataphilhealthtable[".Keys"] = $tableKeysphilhealthtable;

$tdataphilhealthtable[".listFields"] = array();
$tdataphilhealthtable[".listFields"][] = "phID";
$tdataphilhealthtable[".listFields"][] = "SalaryFrom";
$tdataphilhealthtable[".listFields"][] = "SalaryTo";
$tdataphilhealthtable[".listFields"][] = "ER";
$tdataphilhealthtable[".listFields"][] = "EE";
$tdataphilhealthtable[".listFields"][] = "PcntRate";

$tdataphilhealthtable[".hideMobileList"] = array();


$tdataphilhealthtable[".viewFields"] = array();
$tdataphilhealthtable[".viewFields"][] = "phID";
$tdataphilhealthtable[".viewFields"][] = "SalaryFrom";
$tdataphilhealthtable[".viewFields"][] = "SalaryTo";
$tdataphilhealthtable[".viewFields"][] = "ER";
$tdataphilhealthtable[".viewFields"][] = "EE";
$tdataphilhealthtable[".viewFields"][] = "PcntRate";

$tdataphilhealthtable[".addFields"] = array();
$tdataphilhealthtable[".addFields"][] = "SalaryFrom";
$tdataphilhealthtable[".addFields"][] = "SalaryTo";
$tdataphilhealthtable[".addFields"][] = "ER";
$tdataphilhealthtable[".addFields"][] = "EE";
$tdataphilhealthtable[".addFields"][] = "PcntRate";

$tdataphilhealthtable[".masterListFields"] = array();
$tdataphilhealthtable[".masterListFields"][] = "phID";
$tdataphilhealthtable[".masterListFields"][] = "SalaryFrom";
$tdataphilhealthtable[".masterListFields"][] = "SalaryTo";
$tdataphilhealthtable[".masterListFields"][] = "ER";
$tdataphilhealthtable[".masterListFields"][] = "EE";
$tdataphilhealthtable[".masterListFields"][] = "PcntRate";

$tdataphilhealthtable[".inlineAddFields"] = array();
$tdataphilhealthtable[".inlineAddFields"][] = "SalaryFrom";
$tdataphilhealthtable[".inlineAddFields"][] = "SalaryTo";
$tdataphilhealthtable[".inlineAddFields"][] = "ER";
$tdataphilhealthtable[".inlineAddFields"][] = "EE";
$tdataphilhealthtable[".inlineAddFields"][] = "PcntRate";

$tdataphilhealthtable[".editFields"] = array();
$tdataphilhealthtable[".editFields"][] = "SalaryFrom";
$tdataphilhealthtable[".editFields"][] = "SalaryTo";
$tdataphilhealthtable[".editFields"][] = "ER";
$tdataphilhealthtable[".editFields"][] = "EE";
$tdataphilhealthtable[".editFields"][] = "PcntRate";

$tdataphilhealthtable[".inlineEditFields"] = array();
$tdataphilhealthtable[".inlineEditFields"][] = "SalaryFrom";
$tdataphilhealthtable[".inlineEditFields"][] = "SalaryTo";
$tdataphilhealthtable[".inlineEditFields"][] = "ER";
$tdataphilhealthtable[".inlineEditFields"][] = "EE";
$tdataphilhealthtable[".inlineEditFields"][] = "PcntRate";

$tdataphilhealthtable[".updateSelectedFields"] = array();
$tdataphilhealthtable[".updateSelectedFields"][] = "SalaryFrom";
$tdataphilhealthtable[".updateSelectedFields"][] = "SalaryTo";
$tdataphilhealthtable[".updateSelectedFields"][] = "ER";
$tdataphilhealthtable[".updateSelectedFields"][] = "EE";
$tdataphilhealthtable[".updateSelectedFields"][] = "PcntRate";


$tdataphilhealthtable[".exportFields"] = array();
$tdataphilhealthtable[".exportFields"][] = "phID";
$tdataphilhealthtable[".exportFields"][] = "SalaryFrom";
$tdataphilhealthtable[".exportFields"][] = "SalaryTo";
$tdataphilhealthtable[".exportFields"][] = "ER";
$tdataphilhealthtable[".exportFields"][] = "EE";
$tdataphilhealthtable[".exportFields"][] = "PcntRate";

$tdataphilhealthtable[".importFields"] = array();
$tdataphilhealthtable[".importFields"][] = "phID";
$tdataphilhealthtable[".importFields"][] = "SalaryFrom";
$tdataphilhealthtable[".importFields"][] = "SalaryTo";
$tdataphilhealthtable[".importFields"][] = "ER";
$tdataphilhealthtable[".importFields"][] = "EE";
$tdataphilhealthtable[".importFields"][] = "PcntRate";

$tdataphilhealthtable[".printFields"] = array();
$tdataphilhealthtable[".printFields"][] = "phID";
$tdataphilhealthtable[".printFields"][] = "SalaryFrom";
$tdataphilhealthtable[".printFields"][] = "SalaryTo";
$tdataphilhealthtable[".printFields"][] = "ER";
$tdataphilhealthtable[".printFields"][] = "EE";
$tdataphilhealthtable[".printFields"][] = "PcntRate";


//	phID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "phID";
	$fdata["GoodName"] = "phID";
	$fdata["ownerTable"] = "philhealthtable";
	$fdata["Label"] = GetFieldLabel("philhealthtable","phID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "phID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phID";

	
	
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




	$tdataphilhealthtable["phID"] = $fdata;
//	SalaryFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SalaryFrom";
	$fdata["GoodName"] = "SalaryFrom";
	$fdata["ownerTable"] = "philhealthtable";
	$fdata["Label"] = GetFieldLabel("philhealthtable","SalaryFrom");
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

		$fdata["strField"] = "SalaryFrom";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SalaryFrom";

	
	
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




	$tdataphilhealthtable["SalaryFrom"] = $fdata;
//	SalaryTo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SalaryTo";
	$fdata["GoodName"] = "SalaryTo";
	$fdata["ownerTable"] = "philhealthtable";
	$fdata["Label"] = GetFieldLabel("philhealthtable","SalaryTo");
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

		$fdata["strField"] = "SalaryTo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SalaryTo";

	
	
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




	$tdataphilhealthtable["SalaryTo"] = $fdata;
//	ER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ER";
	$fdata["GoodName"] = "ER";
	$fdata["ownerTable"] = "philhealthtable";
	$fdata["Label"] = GetFieldLabel("philhealthtable","ER");
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




	$tdataphilhealthtable["ER"] = $fdata;
//	EE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "EE";
	$fdata["GoodName"] = "EE";
	$fdata["ownerTable"] = "philhealthtable";
	$fdata["Label"] = GetFieldLabel("philhealthtable","EE");
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




	$tdataphilhealthtable["EE"] = $fdata;
//	PcntRate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PcntRate";
	$fdata["GoodName"] = "PcntRate";
	$fdata["ownerTable"] = "philhealthtable";
	$fdata["Label"] = GetFieldLabel("philhealthtable","PcntRate");
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

		$fdata["strField"] = "PcntRate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PcntRate";

	
	
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




	$tdataphilhealthtable["PcntRate"] = $fdata;


$tables_data["philhealthtable"]=&$tdataphilhealthtable;
$field_labels["philhealthtable"] = &$fieldLabelsphilhealthtable;
$fieldToolTips["philhealthtable"] = &$fieldToolTipsphilhealthtable;
$placeHolders["philhealthtable"] = &$placeHoldersphilhealthtable;
$page_titles["philhealthtable"] = &$pageTitlesphilhealthtable;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["philhealthtable"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["philhealthtable"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_philhealthtable()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "phID,  	SalaryFrom,  	SalaryTo,  	ER,  	EE,  	PcntRate";
$proto0["m_strFrom"] = "FROM philhealthtable";
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
	"m_strName" => "phID",
	"m_strTable" => "philhealthtable",
	"m_srcTableName" => "philhealthtable"
));

$proto6["m_sql"] = "phID";
$proto6["m_srcTableName"] = "philhealthtable";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SalaryFrom",
	"m_strTable" => "philhealthtable",
	"m_srcTableName" => "philhealthtable"
));

$proto8["m_sql"] = "SalaryFrom";
$proto8["m_srcTableName"] = "philhealthtable";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SalaryTo",
	"m_strTable" => "philhealthtable",
	"m_srcTableName" => "philhealthtable"
));

$proto10["m_sql"] = "SalaryTo";
$proto10["m_srcTableName"] = "philhealthtable";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ER",
	"m_strTable" => "philhealthtable",
	"m_srcTableName" => "philhealthtable"
));

$proto12["m_sql"] = "ER";
$proto12["m_srcTableName"] = "philhealthtable";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "EE",
	"m_strTable" => "philhealthtable",
	"m_srcTableName" => "philhealthtable"
));

$proto14["m_sql"] = "EE";
$proto14["m_srcTableName"] = "philhealthtable";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PcntRate",
	"m_strTable" => "philhealthtable",
	"m_srcTableName" => "philhealthtable"
));

$proto16["m_sql"] = "PcntRate";
$proto16["m_srcTableName"] = "philhealthtable";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "philhealthtable";
$proto19["m_srcTableName"] = "philhealthtable";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "phID";
$proto19["m_columns"][] = "SalaryFrom";
$proto19["m_columns"][] = "SalaryTo";
$proto19["m_columns"][] = "ER";
$proto19["m_columns"][] = "EE";
$proto19["m_columns"][] = "PcntRate";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "philhealthtable";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "philhealthtable";
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
$proto0["m_srcTableName"]="philhealthtable";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_philhealthtable = createSqlQuery_philhealthtable();


	
		;

						

$tdataphilhealthtable[".sqlquery"] = $queryData_philhealthtable;

$tableEvents["philhealthtable"] = new eventsBase;
$tdataphilhealthtable[".hasEvents"] = false;

?>