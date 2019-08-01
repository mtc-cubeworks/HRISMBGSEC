<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadtrrange = array();
	$tdatadtrrange[".truncateText"] = true;
	$tdatadtrrange[".NumberOfChars"] = 80;
	$tdatadtrrange[".ShortName"] = "dtrrange";
	$tdatadtrrange[".OwnerID"] = "";
	$tdatadtrrange[".OriginalTable"] = "dtrrange";

//	field labels
$fieldLabelsdtrrange = array();
$fieldToolTipsdtrrange = array();
$pageTitlesdtrrange = array();
$placeHoldersdtrrange = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdtrrange["English"] = array();
	$fieldToolTipsdtrrange["English"] = array();
	$placeHoldersdtrrange["English"] = array();
	$pageTitlesdtrrange["English"] = array();
	$fieldLabelsdtrrange["English"]["DrID"] = "Dr ID";
	$fieldToolTipsdtrrange["English"]["DrID"] = "";
	$placeHoldersdtrrange["English"]["DrID"] = "";
	$fieldLabelsdtrrange["English"]["FromDate"] = "From Date";
	$fieldToolTipsdtrrange["English"]["FromDate"] = "";
	$placeHoldersdtrrange["English"]["FromDate"] = "";
	$fieldLabelsdtrrange["English"]["ToDate"] = "To Date";
	$fieldToolTipsdtrrange["English"]["ToDate"] = "";
	$placeHoldersdtrrange["English"]["ToDate"] = "";
	$fieldLabelsdtrrange["English"]["Employer"] = "Employer";
	$fieldToolTipsdtrrange["English"]["Employer"] = "";
	$placeHoldersdtrrange["English"]["Employer"] = "";
	$fieldLabelsdtrrange["English"]["WageType"] = "Wage Type";
	$fieldToolTipsdtrrange["English"]["WageType"] = "";
	$placeHoldersdtrrange["English"]["WageType"] = "";
	$fieldLabelsdtrrange["English"]["Division"] = "Division";
	$fieldToolTipsdtrrange["English"]["Division"] = "";
	$placeHoldersdtrrange["English"]["Division"] = "";
	if (count($fieldToolTipsdtrrange["English"]))
		$tdatadtrrange[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdtrrange[""] = array();
	$fieldToolTipsdtrrange[""] = array();
	$placeHoldersdtrrange[""] = array();
	$pageTitlesdtrrange[""] = array();
	if (count($fieldToolTipsdtrrange[""]))
		$tdatadtrrange[".isUseToolTips"] = true;
}


	$tdatadtrrange[".NCSearch"] = true;



$tdatadtrrange[".shortTableName"] = "dtrrange";
$tdatadtrrange[".nSecOptions"] = 0;
$tdatadtrrange[".recsPerRowPrint"] = 1;
$tdatadtrrange[".mainTableOwnerID"] = "";
$tdatadtrrange[".moveNext"] = 1;
$tdatadtrrange[".entityType"] = 0;

$tdatadtrrange[".strOriginalTableName"] = "dtrrange";

	



$tdatadtrrange[".showAddInPopup"] = false;

$tdatadtrrange[".showEditInPopup"] = false;

$tdatadtrrange[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadtrrange[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadtrrange[".fieldsForRegister"] = array();

$tdatadtrrange[".listAjax"] = false;

	$tdatadtrrange[".audit"] = false;

	$tdatadtrrange[".locking"] = false;

$tdatadtrrange[".edit"] = true;
$tdatadtrrange[".afterEditAction"] = 1;
$tdatadtrrange[".closePopupAfterEdit"] = 1;
$tdatadtrrange[".afterEditActionDetTable"] = "";

$tdatadtrrange[".add"] = true;
$tdatadtrrange[".afterAddAction"] = 1;
$tdatadtrrange[".closePopupAfterAdd"] = 1;
$tdatadtrrange[".afterAddActionDetTable"] = "";

$tdatadtrrange[".list"] = true;

$tdatadtrrange[".inlineEdit"] = true;


$tdatadtrrange[".reorderRecordsByHeader"] = true;


$tdatadtrrange[".exportFormatting"] = 2;
$tdatadtrrange[".exportDelimiter"] = ",";
		
$tdatadtrrange[".inlineAdd"] = true;
$tdatadtrrange[".view"] = true;

$tdatadtrrange[".import"] = true;

$tdatadtrrange[".exportTo"] = true;

$tdatadtrrange[".printFriendly"] = true;

$tdatadtrrange[".delete"] = true;

$tdatadtrrange[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadtrrange[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatadtrrange[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatadtrrange[".searchSaving"] = false;
//

$tdatadtrrange[".showSearchPanel"] = true;
		$tdatadtrrange[".flexibleSearch"] = true;

$tdatadtrrange[".isUseAjaxSuggest"] = true;

$tdatadtrrange[".rowHighlite"] = true;



																																																																																																																																																																																												
							
							
							
							
																																																																																

$tdatadtrrange[".ajaxCodeSnippetAdded"] = false;

$tdatadtrrange[".buttonsAdded"] = true;

$tdatadtrrange[".addPageEvents"] = true;

// use timepicker for search panel
$tdatadtrrange[".isUseTimeForSearch"] = false;




$tdatadtrrange[".detailsLinksOnList"] = "1";

$tdatadtrrange[".allSearchFields"] = array();
$tdatadtrrange[".filterFields"] = array();
$tdatadtrrange[".requiredSearchFields"] = array();

$tdatadtrrange[".allSearchFields"][] = "DrID";
	$tdatadtrrange[".allSearchFields"][] = "FromDate";
	$tdatadtrrange[".allSearchFields"][] = "ToDate";
	$tdatadtrrange[".allSearchFields"][] = "Employer";
	$tdatadtrrange[".allSearchFields"][] = "Division";
	$tdatadtrrange[".allSearchFields"][] = "WageType";
	

$tdatadtrrange[".googleLikeFields"] = array();
$tdatadtrrange[".googleLikeFields"][] = "DrID";
$tdatadtrrange[".googleLikeFields"][] = "FromDate";
$tdatadtrrange[".googleLikeFields"][] = "ToDate";
$tdatadtrrange[".googleLikeFields"][] = "Employer";
$tdatadtrrange[".googleLikeFields"][] = "WageType";
$tdatadtrrange[".googleLikeFields"][] = "Division";


$tdatadtrrange[".advSearchFields"] = array();
$tdatadtrrange[".advSearchFields"][] = "DrID";
$tdatadtrrange[".advSearchFields"][] = "FromDate";
$tdatadtrrange[".advSearchFields"][] = "ToDate";
$tdatadtrrange[".advSearchFields"][] = "Employer";
$tdatadtrrange[".advSearchFields"][] = "Division";
$tdatadtrrange[".advSearchFields"][] = "WageType";

$tdatadtrrange[".tableType"] = "list";

$tdatadtrrange[".printerPageOrientation"] = 0;
$tdatadtrrange[".nPrinterPageScale"] = 100;

$tdatadtrrange[".nPrinterSplitRecords"] = 40;

$tdatadtrrange[".nPrinterPDFSplitRecords"] = 40;



$tdatadtrrange[".geocodingEnabled"] = false;





$tdatadtrrange[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatadtrrange[".pageSize"] = 20;

$tdatadtrrange[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadtrrange[".strOrderBy"] = $tstrOrderBy;

$tdatadtrrange[".orderindexes"] = array();

$tdatadtrrange[".sqlHead"] = "SELECT DrID,  	FromDate,  	ToDate,  	Employer,  	WageType,  	Division";
$tdatadtrrange[".sqlFrom"] = "FROM dtrrange";
$tdatadtrrange[".sqlWhereExpr"] = "";
$tdatadtrrange[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadtrrange[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadtrrange[".arrGroupsPerPage"] = $arrGPP;

$tdatadtrrange[".highlightSearchResults"] = true;

$tableKeysdtrrange = array();
$tableKeysdtrrange[] = "DrID";
$tdatadtrrange[".Keys"] = $tableKeysdtrrange;

$tdatadtrrange[".listFields"] = array();
$tdatadtrrange[".listFields"][] = "DrID";
$tdatadtrrange[".listFields"][] = "FromDate";
$tdatadtrrange[".listFields"][] = "ToDate";
$tdatadtrrange[".listFields"][] = "Employer";
$tdatadtrrange[".listFields"][] = "Division";
$tdatadtrrange[".listFields"][] = "WageType";

$tdatadtrrange[".hideMobileList"] = array();


$tdatadtrrange[".viewFields"] = array();
$tdatadtrrange[".viewFields"][] = "DrID";
$tdatadtrrange[".viewFields"][] = "FromDate";
$tdatadtrrange[".viewFields"][] = "ToDate";
$tdatadtrrange[".viewFields"][] = "Employer";
$tdatadtrrange[".viewFields"][] = "Division";
$tdatadtrrange[".viewFields"][] = "WageType";

$tdatadtrrange[".addFields"] = array();
$tdatadtrrange[".addFields"][] = "FromDate";
$tdatadtrrange[".addFields"][] = "ToDate";
$tdatadtrrange[".addFields"][] = "Employer";
$tdatadtrrange[".addFields"][] = "Division";
$tdatadtrrange[".addFields"][] = "WageType";

$tdatadtrrange[".masterListFields"] = array();
$tdatadtrrange[".masterListFields"][] = "DrID";
$tdatadtrrange[".masterListFields"][] = "FromDate";
$tdatadtrrange[".masterListFields"][] = "ToDate";
$tdatadtrrange[".masterListFields"][] = "Employer";
$tdatadtrrange[".masterListFields"][] = "Division";
$tdatadtrrange[".masterListFields"][] = "WageType";

$tdatadtrrange[".inlineAddFields"] = array();
$tdatadtrrange[".inlineAddFields"][] = "FromDate";
$tdatadtrrange[".inlineAddFields"][] = "ToDate";
$tdatadtrrange[".inlineAddFields"][] = "Employer";
$tdatadtrrange[".inlineAddFields"][] = "Division";
$tdatadtrrange[".inlineAddFields"][] = "WageType";

$tdatadtrrange[".editFields"] = array();
$tdatadtrrange[".editFields"][] = "FromDate";
$tdatadtrrange[".editFields"][] = "ToDate";
$tdatadtrrange[".editFields"][] = "Employer";
$tdatadtrrange[".editFields"][] = "Division";
$tdatadtrrange[".editFields"][] = "WageType";

$tdatadtrrange[".inlineEditFields"] = array();
$tdatadtrrange[".inlineEditFields"][] = "FromDate";
$tdatadtrrange[".inlineEditFields"][] = "ToDate";
$tdatadtrrange[".inlineEditFields"][] = "Employer";
$tdatadtrrange[".inlineEditFields"][] = "Division";
$tdatadtrrange[".inlineEditFields"][] = "WageType";

$tdatadtrrange[".updateSelectedFields"] = array();
$tdatadtrrange[".updateSelectedFields"][] = "FromDate";
$tdatadtrrange[".updateSelectedFields"][] = "ToDate";
$tdatadtrrange[".updateSelectedFields"][] = "Employer";
$tdatadtrrange[".updateSelectedFields"][] = "Division";
$tdatadtrrange[".updateSelectedFields"][] = "WageType";


$tdatadtrrange[".exportFields"] = array();
$tdatadtrrange[".exportFields"][] = "DrID";
$tdatadtrrange[".exportFields"][] = "FromDate";
$tdatadtrrange[".exportFields"][] = "ToDate";
$tdatadtrrange[".exportFields"][] = "Employer";
$tdatadtrrange[".exportFields"][] = "Division";
$tdatadtrrange[".exportFields"][] = "WageType";

$tdatadtrrange[".importFields"] = array();
$tdatadtrrange[".importFields"][] = "DrID";
$tdatadtrrange[".importFields"][] = "FromDate";
$tdatadtrrange[".importFields"][] = "ToDate";
$tdatadtrrange[".importFields"][] = "Employer";
$tdatadtrrange[".importFields"][] = "WageType";
$tdatadtrrange[".importFields"][] = "Division";

$tdatadtrrange[".printFields"] = array();
$tdatadtrrange[".printFields"][] = "DrID";
$tdatadtrrange[".printFields"][] = "FromDate";
$tdatadtrrange[".printFields"][] = "ToDate";
$tdatadtrrange[".printFields"][] = "Employer";
$tdatadtrrange[".printFields"][] = "Division";
$tdatadtrrange[".printFields"][] = "WageType";


//	DrID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DrID";
	$fdata["GoodName"] = "DrID";
	$fdata["ownerTable"] = "dtrrange";
	$fdata["Label"] = GetFieldLabel("dtrrange","DrID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DrID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DrID";

	
	
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




	$tdatadtrrange["DrID"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "dtrrange";
	$fdata["Label"] = GetFieldLabel("dtrrange","FromDate");
	$fdata["FieldType"] = 7;

	
	
	
			
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatadtrrange["FromDate"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "dtrrange";
	$fdata["Label"] = GetFieldLabel("dtrrange","ToDate");
	$fdata["FieldType"] = 7;

	
	
	
			
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatadtrrange["ToDate"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "dtrrange";
	$fdata["Label"] = GetFieldLabel("dtrrange","Employer");
	$fdata["FieldType"] = 3;

	
	
	
			
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




	$tdatadtrrange["Employer"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "dtrrange";
	$fdata["Label"] = GetFieldLabel("dtrrange","WageType");
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




	$tdatadtrrange["WageType"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "dtrrange";
	$fdata["Label"] = GetFieldLabel("dtrrange","Division");
	$fdata["FieldType"] = 3;

	
	
	
			
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




	$tdatadtrrange["Division"] = $fdata;


$tables_data["dtrrange"]=&$tdatadtrrange;
$field_labels["dtrrange"] = &$fieldLabelsdtrrange;
$fieldToolTips["dtrrange"] = &$fieldToolTipsdtrrange;
$placeHolders["dtrrange"] = &$placeHoldersdtrrange;
$page_titles["dtrrange"] = &$pageTitlesdtrrange;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dtrrange"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dtrrange"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_dtrrange()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DrID,  	FromDate,  	ToDate,  	Employer,  	WageType,  	Division";
$proto0["m_strFrom"] = "FROM dtrrange";
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
	"m_strName" => "DrID",
	"m_strTable" => "dtrrange",
	"m_srcTableName" => "dtrrange"
));

$proto6["m_sql"] = "DrID";
$proto6["m_srcTableName"] = "dtrrange";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "dtrrange",
	"m_srcTableName" => "dtrrange"
));

$proto8["m_sql"] = "FromDate";
$proto8["m_srcTableName"] = "dtrrange";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "dtrrange",
	"m_srcTableName" => "dtrrange"
));

$proto10["m_sql"] = "ToDate";
$proto10["m_srcTableName"] = "dtrrange";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "dtrrange",
	"m_srcTableName" => "dtrrange"
));

$proto12["m_sql"] = "Employer";
$proto12["m_srcTableName"] = "dtrrange";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "WageType",
	"m_strTable" => "dtrrange",
	"m_srcTableName" => "dtrrange"
));

$proto14["m_sql"] = "WageType";
$proto14["m_srcTableName"] = "dtrrange";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "dtrrange",
	"m_srcTableName" => "dtrrange"
));

$proto16["m_sql"] = "Division";
$proto16["m_srcTableName"] = "dtrrange";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "dtrrange";
$proto19["m_srcTableName"] = "dtrrange";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "DrID";
$proto19["m_columns"][] = "FromDate";
$proto19["m_columns"][] = "ToDate";
$proto19["m_columns"][] = "Employer";
$proto19["m_columns"][] = "WageType";
$proto19["m_columns"][] = "Division";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "dtrrange";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "dtrrange";
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
$proto0["m_srcTableName"]="dtrrange";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dtrrange = createSqlQuery_dtrrange();


	
		;

						

$tdatadtrrange[".sqlquery"] = $queryData_dtrrange;

include_once(getabspath("include/dtrrange_events.php"));
$tableEvents["dtrrange"] = new eventclass_dtrrange;
$tdatadtrrange[".hasEvents"] = true;

?>