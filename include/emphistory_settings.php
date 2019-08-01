<?php
require_once(getabspath("classes/cipherer.php"));




$tdataemphistory = array();
	$tdataemphistory[".truncateText"] = true;
	$tdataemphistory[".NumberOfChars"] = 80;
	$tdataemphistory[".ShortName"] = "emphistory";
	$tdataemphistory[".OwnerID"] = "";
	$tdataemphistory[".OriginalTable"] = "emphistory";

//	field labels
$fieldLabelsemphistory = array();
$fieldToolTipsemphistory = array();
$pageTitlesemphistory = array();
$placeHoldersemphistory = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsemphistory["English"] = array();
	$fieldToolTipsemphistory["English"] = array();
	$placeHoldersemphistory["English"] = array();
	$pageTitlesemphistory["English"] = array();
	$fieldLabelsemphistory["English"]["EHID"] = "EHID";
	$fieldToolTipsemphistory["English"]["EHID"] = "";
	$placeHoldersemphistory["English"]["EHID"] = "";
	$fieldLabelsemphistory["English"]["DateIn"] = "Date In";
	$fieldToolTipsemphistory["English"]["DateIn"] = "";
	$placeHoldersemphistory["English"]["DateIn"] = "";
	$fieldLabelsemphistory["English"]["DateOut"] = "Date Out";
	$fieldToolTipsemphistory["English"]["DateOut"] = "";
	$placeHoldersemphistory["English"]["DateOut"] = "";
	$fieldLabelsemphistory["English"]["Division"] = "Division";
	$fieldToolTipsemphistory["English"]["Division"] = "";
	$placeHoldersemphistory["English"]["Division"] = "";
	$fieldLabelsemphistory["English"]["Department"] = "Department";
	$fieldToolTipsemphistory["English"]["Department"] = "";
	$placeHoldersemphistory["English"]["Department"] = "";
	$fieldLabelsemphistory["English"]["Remarks"] = "Remarks";
	$fieldToolTipsemphistory["English"]["Remarks"] = "";
	$placeHoldersemphistory["English"]["Remarks"] = "";
	$fieldLabelsemphistory["English"]["EmployeeiD"] = "Employeei D";
	$fieldToolTipsemphistory["English"]["EmployeeiD"] = "";
	$placeHoldersemphistory["English"]["EmployeeiD"] = "";
	if (count($fieldToolTipsemphistory["English"]))
		$tdataemphistory[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsemphistory[""] = array();
	$fieldToolTipsemphistory[""] = array();
	$placeHoldersemphistory[""] = array();
	$pageTitlesemphistory[""] = array();
	if (count($fieldToolTipsemphistory[""]))
		$tdataemphistory[".isUseToolTips"] = true;
}


	$tdataemphistory[".NCSearch"] = true;



$tdataemphistory[".shortTableName"] = "emphistory";
$tdataemphistory[".nSecOptions"] = 0;
$tdataemphistory[".recsPerRowPrint"] = 1;
$tdataemphistory[".mainTableOwnerID"] = "";
$tdataemphistory[".moveNext"] = 1;
$tdataemphistory[".entityType"] = 0;

$tdataemphistory[".strOriginalTableName"] = "emphistory";

	



$tdataemphistory[".showAddInPopup"] = false;

$tdataemphistory[".showEditInPopup"] = false;

$tdataemphistory[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataemphistory[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataemphistory[".fieldsForRegister"] = array();

$tdataemphistory[".listAjax"] = false;

	$tdataemphistory[".audit"] = false;

	$tdataemphistory[".locking"] = false;

$tdataemphistory[".edit"] = true;
$tdataemphistory[".afterEditAction"] = 1;
$tdataemphistory[".closePopupAfterEdit"] = 1;
$tdataemphistory[".afterEditActionDetTable"] = "";

$tdataemphistory[".add"] = true;
$tdataemphistory[".afterAddAction"] = 1;
$tdataemphistory[".closePopupAfterAdd"] = 1;
$tdataemphistory[".afterAddActionDetTable"] = "";

$tdataemphistory[".list"] = true;



$tdataemphistory[".reorderRecordsByHeader"] = true;


$tdataemphistory[".exportFormatting"] = 2;
$tdataemphistory[".exportDelimiter"] = ",";
		
$tdataemphistory[".view"] = true;

$tdataemphistory[".import"] = true;

$tdataemphistory[".exportTo"] = true;

$tdataemphistory[".printFriendly"] = true;

$tdataemphistory[".delete"] = true;

$tdataemphistory[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataemphistory[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataemphistory[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataemphistory[".searchSaving"] = false;
//

$tdataemphistory[".showSearchPanel"] = true;
		$tdataemphistory[".flexibleSearch"] = true;

$tdataemphistory[".isUseAjaxSuggest"] = true;

$tdataemphistory[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdataemphistory[".ajaxCodeSnippetAdded"] = false;

$tdataemphistory[".buttonsAdded"] = false;

$tdataemphistory[".addPageEvents"] = false;

// use timepicker for search panel
$tdataemphistory[".isUseTimeForSearch"] = false;



$tdataemphistory[".badgeColor"] = "cfae83";


$tdataemphistory[".allSearchFields"] = array();
$tdataemphistory[".filterFields"] = array();
$tdataemphistory[".requiredSearchFields"] = array();

$tdataemphistory[".allSearchFields"][] = "EHID";
	$tdataemphistory[".allSearchFields"][] = "DateIn";
	$tdataemphistory[".allSearchFields"][] = "DateOut";
	$tdataemphistory[".allSearchFields"][] = "Division";
	$tdataemphistory[".allSearchFields"][] = "Department";
	$tdataemphistory[".allSearchFields"][] = "Remarks";
	$tdataemphistory[".allSearchFields"][] = "EmployeeiD";
	

$tdataemphistory[".googleLikeFields"] = array();
$tdataemphistory[".googleLikeFields"][] = "EHID";
$tdataemphistory[".googleLikeFields"][] = "DateIn";
$tdataemphistory[".googleLikeFields"][] = "DateOut";
$tdataemphistory[".googleLikeFields"][] = "Division";
$tdataemphistory[".googleLikeFields"][] = "Department";
$tdataemphistory[".googleLikeFields"][] = "Remarks";
$tdataemphistory[".googleLikeFields"][] = "EmployeeiD";


$tdataemphistory[".advSearchFields"] = array();
$tdataemphistory[".advSearchFields"][] = "EHID";
$tdataemphistory[".advSearchFields"][] = "DateIn";
$tdataemphistory[".advSearchFields"][] = "DateOut";
$tdataemphistory[".advSearchFields"][] = "Division";
$tdataemphistory[".advSearchFields"][] = "Department";
$tdataemphistory[".advSearchFields"][] = "Remarks";
$tdataemphistory[".advSearchFields"][] = "EmployeeiD";

$tdataemphistory[".tableType"] = "list";

$tdataemphistory[".printerPageOrientation"] = 0;
$tdataemphistory[".nPrinterPageScale"] = 100;

$tdataemphistory[".nPrinterSplitRecords"] = 40;

$tdataemphistory[".nPrinterPDFSplitRecords"] = 40;



$tdataemphistory[".geocodingEnabled"] = false;





$tdataemphistory[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataemphistory[".pageSize"] = 20;

$tdataemphistory[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataemphistory[".strOrderBy"] = $tstrOrderBy;

$tdataemphistory[".orderindexes"] = array();

$tdataemphistory[".sqlHead"] = "SELECT EHID,  	DateIn,  	DateOut,  	Division,  	Department,  	Remarks,  	EmployeeiD";
$tdataemphistory[".sqlFrom"] = "FROM emphistory";
$tdataemphistory[".sqlWhereExpr"] = "";
$tdataemphistory[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataemphistory[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataemphistory[".arrGroupsPerPage"] = $arrGPP;

$tdataemphistory[".highlightSearchResults"] = true;

$tableKeysemphistory = array();
$tableKeysemphistory[] = "EHID";
$tdataemphistory[".Keys"] = $tableKeysemphistory;

$tdataemphistory[".listFields"] = array();
$tdataemphistory[".listFields"][] = "EHID";
$tdataemphistory[".listFields"][] = "DateIn";
$tdataemphistory[".listFields"][] = "DateOut";
$tdataemphistory[".listFields"][] = "Division";
$tdataemphistory[".listFields"][] = "Department";
$tdataemphistory[".listFields"][] = "Remarks";
$tdataemphistory[".listFields"][] = "EmployeeiD";

$tdataemphistory[".hideMobileList"] = array();


$tdataemphistory[".viewFields"] = array();
$tdataemphistory[".viewFields"][] = "EHID";
$tdataemphistory[".viewFields"][] = "DateIn";
$tdataemphistory[".viewFields"][] = "DateOut";
$tdataemphistory[".viewFields"][] = "Division";
$tdataemphistory[".viewFields"][] = "Department";
$tdataemphistory[".viewFields"][] = "Remarks";
$tdataemphistory[".viewFields"][] = "EmployeeiD";

$tdataemphistory[".addFields"] = array();
$tdataemphistory[".addFields"][] = "DateIn";
$tdataemphistory[".addFields"][] = "DateOut";
$tdataemphistory[".addFields"][] = "Division";
$tdataemphistory[".addFields"][] = "Department";
$tdataemphistory[".addFields"][] = "Remarks";
$tdataemphistory[".addFields"][] = "EmployeeiD";

$tdataemphistory[".masterListFields"] = array();
$tdataemphistory[".masterListFields"][] = "EHID";
$tdataemphistory[".masterListFields"][] = "DateIn";
$tdataemphistory[".masterListFields"][] = "DateOut";
$tdataemphistory[".masterListFields"][] = "Division";
$tdataemphistory[".masterListFields"][] = "Department";
$tdataemphistory[".masterListFields"][] = "Remarks";
$tdataemphistory[".masterListFields"][] = "EmployeeiD";

$tdataemphistory[".inlineAddFields"] = array();

$tdataemphistory[".editFields"] = array();
$tdataemphistory[".editFields"][] = "DateIn";
$tdataemphistory[".editFields"][] = "DateOut";
$tdataemphistory[".editFields"][] = "Division";
$tdataemphistory[".editFields"][] = "Department";
$tdataemphistory[".editFields"][] = "Remarks";
$tdataemphistory[".editFields"][] = "EmployeeiD";

$tdataemphistory[".inlineEditFields"] = array();

$tdataemphistory[".updateSelectedFields"] = array();
$tdataemphistory[".updateSelectedFields"][] = "DateIn";
$tdataemphistory[".updateSelectedFields"][] = "DateOut";
$tdataemphistory[".updateSelectedFields"][] = "Division";
$tdataemphistory[".updateSelectedFields"][] = "Department";
$tdataemphistory[".updateSelectedFields"][] = "Remarks";
$tdataemphistory[".updateSelectedFields"][] = "EmployeeiD";


$tdataemphistory[".exportFields"] = array();
$tdataemphistory[".exportFields"][] = "EHID";
$tdataemphistory[".exportFields"][] = "DateIn";
$tdataemphistory[".exportFields"][] = "DateOut";
$tdataemphistory[".exportFields"][] = "Division";
$tdataemphistory[".exportFields"][] = "Department";
$tdataemphistory[".exportFields"][] = "Remarks";
$tdataemphistory[".exportFields"][] = "EmployeeiD";

$tdataemphistory[".importFields"] = array();
$tdataemphistory[".importFields"][] = "EHID";
$tdataemphistory[".importFields"][] = "DateIn";
$tdataemphistory[".importFields"][] = "DateOut";
$tdataemphistory[".importFields"][] = "Division";
$tdataemphistory[".importFields"][] = "Department";
$tdataemphistory[".importFields"][] = "Remarks";
$tdataemphistory[".importFields"][] = "EmployeeiD";

$tdataemphistory[".printFields"] = array();
$tdataemphistory[".printFields"][] = "EHID";
$tdataemphistory[".printFields"][] = "DateIn";
$tdataemphistory[".printFields"][] = "DateOut";
$tdataemphistory[".printFields"][] = "Division";
$tdataemphistory[".printFields"][] = "Department";
$tdataemphistory[".printFields"][] = "Remarks";
$tdataemphistory[".printFields"][] = "EmployeeiD";


//	EHID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EHID";
	$fdata["GoodName"] = "EHID";
	$fdata["ownerTable"] = "emphistory";
	$fdata["Label"] = GetFieldLabel("emphistory","EHID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EHID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EHID";

	
	
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




	$tdataemphistory["EHID"] = $fdata;
//	DateIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DateIn";
	$fdata["GoodName"] = "DateIn";
	$fdata["ownerTable"] = "emphistory";
	$fdata["Label"] = GetFieldLabel("emphistory","DateIn");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DateIn";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DateIn";

	
	
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




	$tdataemphistory["DateIn"] = $fdata;
//	DateOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DateOut";
	$fdata["GoodName"] = "DateOut";
	$fdata["ownerTable"] = "emphistory";
	$fdata["Label"] = GetFieldLabel("emphistory","DateOut");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DateOut";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DateOut";

	
	
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




	$tdataemphistory["DateOut"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "emphistory";
	$fdata["Label"] = GetFieldLabel("emphistory","Division");
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




	$tdataemphistory["Division"] = $fdata;
//	Department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Department";
	$fdata["GoodName"] = "Department";
	$fdata["ownerTable"] = "emphistory";
	$fdata["Label"] = GetFieldLabel("emphistory","Department");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Department";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Department";

	
	
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
	$edata["LookupTable"] = "department";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DeID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Department";
	
	

	
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




	$tdataemphistory["Department"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "emphistory";
	$fdata["Label"] = GetFieldLabel("emphistory","Remarks");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Remarks";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Remarks";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataemphistory["Remarks"] = $fdata;
//	EmployeeiD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "EmployeeiD";
	$fdata["GoodName"] = "EmployeeiD";
	$fdata["ownerTable"] = "emphistory";
	$fdata["Label"] = GetFieldLabel("emphistory","EmployeeiD");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EmployeeiD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmployeeiD";

	
	
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




	$tdataemphistory["EmployeeiD"] = $fdata;


$tables_data["emphistory"]=&$tdataemphistory;
$field_labels["emphistory"] = &$fieldLabelsemphistory;
$fieldToolTips["emphistory"] = &$fieldToolTipsemphistory;
$placeHolders["emphistory"] = &$placeHoldersemphistory;
$page_titles["emphistory"] = &$pageTitlesemphistory;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["emphistory"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["emphistory"] = array();


	
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
					$masterTablesData["emphistory"][0] = $masterParams;
				$masterTablesData["emphistory"][0]["masterKeys"] = array();
	$masterTablesData["emphistory"][0]["masterKeys"][]="EmployeeID";
				$masterTablesData["emphistory"][0]["detailKeys"] = array();
	$masterTablesData["emphistory"][0]["detailKeys"][]="EmployeeiD";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_emphistory()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EHID,  	DateIn,  	DateOut,  	Division,  	Department,  	Remarks,  	EmployeeiD";
$proto0["m_strFrom"] = "FROM emphistory";
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
	"m_strName" => "EHID",
	"m_strTable" => "emphistory",
	"m_srcTableName" => "emphistory"
));

$proto6["m_sql"] = "EHID";
$proto6["m_srcTableName"] = "emphistory";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DateIn",
	"m_strTable" => "emphistory",
	"m_srcTableName" => "emphistory"
));

$proto8["m_sql"] = "DateIn";
$proto8["m_srcTableName"] = "emphistory";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DateOut",
	"m_strTable" => "emphistory",
	"m_srcTableName" => "emphistory"
));

$proto10["m_sql"] = "DateOut";
$proto10["m_srcTableName"] = "emphistory";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "emphistory",
	"m_srcTableName" => "emphistory"
));

$proto12["m_sql"] = "Division";
$proto12["m_srcTableName"] = "emphistory";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "emphistory",
	"m_srcTableName" => "emphistory"
));

$proto14["m_sql"] = "Department";
$proto14["m_srcTableName"] = "emphistory";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "emphistory",
	"m_srcTableName" => "emphistory"
));

$proto16["m_sql"] = "Remarks";
$proto16["m_srcTableName"] = "emphistory";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeiD",
	"m_strTable" => "emphistory",
	"m_srcTableName" => "emphistory"
));

$proto18["m_sql"] = "EmployeeiD";
$proto18["m_srcTableName"] = "emphistory";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "emphistory";
$proto21["m_srcTableName"] = "emphistory";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "EHID";
$proto21["m_columns"][] = "DateIn";
$proto21["m_columns"][] = "DateOut";
$proto21["m_columns"][] = "Division";
$proto21["m_columns"][] = "Department";
$proto21["m_columns"][] = "Remarks";
$proto21["m_columns"][] = "EmployeeiD";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "emphistory";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "emphistory";
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
$proto0["m_srcTableName"]="emphistory";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_emphistory = createSqlQuery_emphistory();


	
		;

							

$tdataemphistory[".sqlquery"] = $queryData_emphistory;

$tableEvents["emphistory"] = new eventsBase;
$tdataemphistory[".hasEvents"] = false;

?>