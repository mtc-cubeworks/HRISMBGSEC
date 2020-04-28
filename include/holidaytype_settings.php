<?php
require_once(getabspath("classes/cipherer.php"));




$tdataholidaytype = array();
	$tdataholidaytype[".truncateText"] = true;
	$tdataholidaytype[".NumberOfChars"] = 80;
	$tdataholidaytype[".ShortName"] = "holidaytype";
	$tdataholidaytype[".OwnerID"] = "";
	$tdataholidaytype[".OriginalTable"] = "holidaytype";

//	field labels
$fieldLabelsholidaytype = array();
$fieldToolTipsholidaytype = array();
$pageTitlesholidaytype = array();
$placeHoldersholidaytype = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsholidaytype["English"] = array();
	$fieldToolTipsholidaytype["English"] = array();
	$placeHoldersholidaytype["English"] = array();
	$pageTitlesholidaytype["English"] = array();
	$fieldLabelsholidaytype["English"]["HID"] = "HID";
	$fieldToolTipsholidaytype["English"]["HID"] = "";
	$placeHoldersholidaytype["English"]["HID"] = "";
	$fieldLabelsholidaytype["English"]["HolidayType"] = "Holiday Type";
	$fieldToolTipsholidaytype["English"]["HolidayType"] = "";
	$placeHoldersholidaytype["English"]["HolidayType"] = "";
	$fieldLabelsholidaytype["English"]["MonthliesNormalFactor"] = "Monthlies Normal Factor";
	$fieldToolTipsholidaytype["English"]["MonthliesNormalFactor"] = "";
	$placeHoldersholidaytype["English"]["MonthliesNormalFactor"] = "";
	$fieldLabelsholidaytype["English"]["MonthliesOTFactor"] = "Monthlies OTFactor";
	$fieldToolTipsholidaytype["English"]["MonthliesOTFactor"] = "";
	$placeHoldersholidaytype["English"]["MonthliesOTFactor"] = "";
	$fieldLabelsholidaytype["English"]["DailiesNormalFactor"] = "Dailies Normal Factor";
	$fieldToolTipsholidaytype["English"]["DailiesNormalFactor"] = "";
	$placeHoldersholidaytype["English"]["DailiesNormalFactor"] = "";
	$fieldLabelsholidaytype["English"]["DailiesOTFactor"] = "Dailies OTFactor";
	$fieldToolTipsholidaytype["English"]["DailiesOTFactor"] = "";
	$placeHoldersholidaytype["English"]["DailiesOTFactor"] = "";
	if (count($fieldToolTipsholidaytype["English"]))
		$tdataholidaytype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsholidaytype[""] = array();
	$fieldToolTipsholidaytype[""] = array();
	$placeHoldersholidaytype[""] = array();
	$pageTitlesholidaytype[""] = array();
	if (count($fieldToolTipsholidaytype[""]))
		$tdataholidaytype[".isUseToolTips"] = true;
}


	$tdataholidaytype[".NCSearch"] = true;



$tdataholidaytype[".shortTableName"] = "holidaytype";
$tdataholidaytype[".nSecOptions"] = 0;
$tdataholidaytype[".recsPerRowPrint"] = 1;
$tdataholidaytype[".mainTableOwnerID"] = "";
$tdataholidaytype[".moveNext"] = 1;
$tdataholidaytype[".entityType"] = 0;

$tdataholidaytype[".strOriginalTableName"] = "holidaytype";

	



$tdataholidaytype[".showAddInPopup"] = false;

$tdataholidaytype[".showEditInPopup"] = false;

$tdataholidaytype[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataholidaytype[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataholidaytype[".fieldsForRegister"] = array();

$tdataholidaytype[".listAjax"] = false;

	$tdataholidaytype[".audit"] = false;

	$tdataholidaytype[".locking"] = false;

$tdataholidaytype[".edit"] = true;
$tdataholidaytype[".afterEditAction"] = 1;
$tdataholidaytype[".closePopupAfterEdit"] = 1;
$tdataholidaytype[".afterEditActionDetTable"] = "";

$tdataholidaytype[".add"] = true;
$tdataholidaytype[".afterAddAction"] = 1;
$tdataholidaytype[".closePopupAfterAdd"] = 1;
$tdataholidaytype[".afterAddActionDetTable"] = "";

$tdataholidaytype[".list"] = true;

$tdataholidaytype[".inlineEdit"] = true;

$tdataholidaytype[".updateSelected"] = true;

$tdataholidaytype[".reorderRecordsByHeader"] = true;


$tdataholidaytype[".exportFormatting"] = 2;
$tdataholidaytype[".exportDelimiter"] = ",";
		
$tdataholidaytype[".inlineAdd"] = true;
$tdataholidaytype[".view"] = true;

$tdataholidaytype[".import"] = true;

$tdataholidaytype[".exportTo"] = true;

$tdataholidaytype[".printFriendly"] = true;

$tdataholidaytype[".delete"] = true;

$tdataholidaytype[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataholidaytype[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataholidaytype[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataholidaytype[".searchSaving"] = false;
//

$tdataholidaytype[".showSearchPanel"] = true;
		$tdataholidaytype[".flexibleSearch"] = true;

$tdataholidaytype[".isUseAjaxSuggest"] = true;

$tdataholidaytype[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdataholidaytype[".ajaxCodeSnippetAdded"] = false;

$tdataholidaytype[".buttonsAdded"] = false;

$tdataholidaytype[".addPageEvents"] = false;

// use timepicker for search panel
$tdataholidaytype[".isUseTimeForSearch"] = false;





$tdataholidaytype[".allSearchFields"] = array();
$tdataholidaytype[".filterFields"] = array();
$tdataholidaytype[".requiredSearchFields"] = array();

$tdataholidaytype[".allSearchFields"][] = "HID";
	$tdataholidaytype[".allSearchFields"][] = "HolidayType";
	$tdataholidaytype[".allSearchFields"][] = "MonthliesNormalFactor";
	$tdataholidaytype[".allSearchFields"][] = "MonthliesOTFactor";
	$tdataholidaytype[".allSearchFields"][] = "DailiesNormalFactor";
	$tdataholidaytype[".allSearchFields"][] = "DailiesOTFactor";
	

$tdataholidaytype[".googleLikeFields"] = array();
$tdataholidaytype[".googleLikeFields"][] = "HID";
$tdataholidaytype[".googleLikeFields"][] = "HolidayType";
$tdataholidaytype[".googleLikeFields"][] = "MonthliesNormalFactor";
$tdataholidaytype[".googleLikeFields"][] = "MonthliesOTFactor";
$tdataholidaytype[".googleLikeFields"][] = "DailiesNormalFactor";
$tdataholidaytype[".googleLikeFields"][] = "DailiesOTFactor";


$tdataholidaytype[".advSearchFields"] = array();
$tdataholidaytype[".advSearchFields"][] = "HID";
$tdataholidaytype[".advSearchFields"][] = "HolidayType";
$tdataholidaytype[".advSearchFields"][] = "MonthliesNormalFactor";
$tdataholidaytype[".advSearchFields"][] = "MonthliesOTFactor";
$tdataholidaytype[".advSearchFields"][] = "DailiesNormalFactor";
$tdataholidaytype[".advSearchFields"][] = "DailiesOTFactor";

$tdataholidaytype[".tableType"] = "list";

$tdataholidaytype[".printerPageOrientation"] = 0;
$tdataholidaytype[".nPrinterPageScale"] = 100;

$tdataholidaytype[".nPrinterSplitRecords"] = 40;

$tdataholidaytype[".nPrinterPDFSplitRecords"] = 40;



$tdataholidaytype[".geocodingEnabled"] = false;





$tdataholidaytype[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataholidaytype[".pageSize"] = 20;

$tdataholidaytype[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataholidaytype[".strOrderBy"] = $tstrOrderBy;

$tdataholidaytype[".orderindexes"] = array();

$tdataholidaytype[".sqlHead"] = "SELECT HID,  	HolidayType,  	MonthliesNormalFactor,  	MonthliesOTFactor,  	DailiesNormalFactor,  	DailiesOTFactor";
$tdataholidaytype[".sqlFrom"] = "FROM holidaytype";
$tdataholidaytype[".sqlWhereExpr"] = "";
$tdataholidaytype[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataholidaytype[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataholidaytype[".arrGroupsPerPage"] = $arrGPP;

$tdataholidaytype[".highlightSearchResults"] = true;

$tableKeysholidaytype = array();
$tableKeysholidaytype[] = "HID";
$tdataholidaytype[".Keys"] = $tableKeysholidaytype;

$tdataholidaytype[".listFields"] = array();
$tdataholidaytype[".listFields"][] = "HID";
$tdataholidaytype[".listFields"][] = "HolidayType";
$tdataholidaytype[".listFields"][] = "MonthliesNormalFactor";
$tdataholidaytype[".listFields"][] = "MonthliesOTFactor";
$tdataholidaytype[".listFields"][] = "DailiesNormalFactor";
$tdataholidaytype[".listFields"][] = "DailiesOTFactor";

$tdataholidaytype[".hideMobileList"] = array();


$tdataholidaytype[".viewFields"] = array();
$tdataholidaytype[".viewFields"][] = "HID";
$tdataholidaytype[".viewFields"][] = "HolidayType";
$tdataholidaytype[".viewFields"][] = "MonthliesNormalFactor";
$tdataholidaytype[".viewFields"][] = "MonthliesOTFactor";
$tdataholidaytype[".viewFields"][] = "DailiesNormalFactor";
$tdataholidaytype[".viewFields"][] = "DailiesOTFactor";

$tdataholidaytype[".addFields"] = array();
$tdataholidaytype[".addFields"][] = "HolidayType";
$tdataholidaytype[".addFields"][] = "MonthliesNormalFactor";
$tdataholidaytype[".addFields"][] = "MonthliesOTFactor";
$tdataholidaytype[".addFields"][] = "DailiesNormalFactor";
$tdataholidaytype[".addFields"][] = "DailiesOTFactor";

$tdataholidaytype[".masterListFields"] = array();
$tdataholidaytype[".masterListFields"][] = "HID";
$tdataholidaytype[".masterListFields"][] = "HolidayType";
$tdataholidaytype[".masterListFields"][] = "MonthliesNormalFactor";
$tdataholidaytype[".masterListFields"][] = "MonthliesOTFactor";
$tdataholidaytype[".masterListFields"][] = "DailiesNormalFactor";
$tdataholidaytype[".masterListFields"][] = "DailiesOTFactor";

$tdataholidaytype[".inlineAddFields"] = array();
$tdataholidaytype[".inlineAddFields"][] = "HolidayType";
$tdataholidaytype[".inlineAddFields"][] = "MonthliesNormalFactor";
$tdataholidaytype[".inlineAddFields"][] = "MonthliesOTFactor";
$tdataholidaytype[".inlineAddFields"][] = "DailiesNormalFactor";
$tdataholidaytype[".inlineAddFields"][] = "DailiesOTFactor";

$tdataholidaytype[".editFields"] = array();
$tdataholidaytype[".editFields"][] = "HolidayType";
$tdataholidaytype[".editFields"][] = "MonthliesNormalFactor";
$tdataholidaytype[".editFields"][] = "MonthliesOTFactor";
$tdataholidaytype[".editFields"][] = "DailiesNormalFactor";
$tdataholidaytype[".editFields"][] = "DailiesOTFactor";

$tdataholidaytype[".inlineEditFields"] = array();
$tdataholidaytype[".inlineEditFields"][] = "HolidayType";
$tdataholidaytype[".inlineEditFields"][] = "MonthliesNormalFactor";
$tdataholidaytype[".inlineEditFields"][] = "MonthliesOTFactor";
$tdataholidaytype[".inlineEditFields"][] = "DailiesNormalFactor";
$tdataholidaytype[".inlineEditFields"][] = "DailiesOTFactor";

$tdataholidaytype[".updateSelectedFields"] = array();
$tdataholidaytype[".updateSelectedFields"][] = "HolidayType";
$tdataholidaytype[".updateSelectedFields"][] = "MonthliesNormalFactor";
$tdataholidaytype[".updateSelectedFields"][] = "MonthliesOTFactor";
$tdataholidaytype[".updateSelectedFields"][] = "DailiesNormalFactor";
$tdataholidaytype[".updateSelectedFields"][] = "DailiesOTFactor";


$tdataholidaytype[".exportFields"] = array();
$tdataholidaytype[".exportFields"][] = "HID";
$tdataholidaytype[".exportFields"][] = "HolidayType";
$tdataholidaytype[".exportFields"][] = "MonthliesNormalFactor";
$tdataholidaytype[".exportFields"][] = "MonthliesOTFactor";
$tdataholidaytype[".exportFields"][] = "DailiesNormalFactor";
$tdataholidaytype[".exportFields"][] = "DailiesOTFactor";

$tdataholidaytype[".importFields"] = array();
$tdataholidaytype[".importFields"][] = "HID";
$tdataholidaytype[".importFields"][] = "HolidayType";
$tdataholidaytype[".importFields"][] = "MonthliesNormalFactor";
$tdataholidaytype[".importFields"][] = "MonthliesOTFactor";
$tdataholidaytype[".importFields"][] = "DailiesNormalFactor";
$tdataholidaytype[".importFields"][] = "DailiesOTFactor";

$tdataholidaytype[".printFields"] = array();
$tdataholidaytype[".printFields"][] = "HID";
$tdataholidaytype[".printFields"][] = "HolidayType";
$tdataholidaytype[".printFields"][] = "MonthliesNormalFactor";
$tdataholidaytype[".printFields"][] = "MonthliesOTFactor";
$tdataholidaytype[".printFields"][] = "DailiesNormalFactor";
$tdataholidaytype[".printFields"][] = "DailiesOTFactor";


//	HID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "HID";
	$fdata["GoodName"] = "HID";
	$fdata["ownerTable"] = "holidaytype";
	$fdata["Label"] = GetFieldLabel("holidaytype","HID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "HID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HID";

	
	
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




	$tdataholidaytype["HID"] = $fdata;
//	HolidayType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "HolidayType";
	$fdata["GoodName"] = "HolidayType";
	$fdata["ownerTable"] = "holidaytype";
	$fdata["Label"] = GetFieldLabel("holidaytype","HolidayType");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "HolidayType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HolidayType";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataholidaytype["HolidayType"] = $fdata;
//	MonthliesNormalFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MonthliesNormalFactor";
	$fdata["GoodName"] = "MonthliesNormalFactor";
	$fdata["ownerTable"] = "holidaytype";
	$fdata["Label"] = GetFieldLabel("holidaytype","MonthliesNormalFactor");
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

		$fdata["strField"] = "MonthliesNormalFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MonthliesNormalFactor";

	
	
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




	$tdataholidaytype["MonthliesNormalFactor"] = $fdata;
//	MonthliesOTFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "MonthliesOTFactor";
	$fdata["GoodName"] = "MonthliesOTFactor";
	$fdata["ownerTable"] = "holidaytype";
	$fdata["Label"] = GetFieldLabel("holidaytype","MonthliesOTFactor");
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

		$fdata["strField"] = "MonthliesOTFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MonthliesOTFactor";

	
	
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




	$tdataholidaytype["MonthliesOTFactor"] = $fdata;
//	DailiesNormalFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DailiesNormalFactor";
	$fdata["GoodName"] = "DailiesNormalFactor";
	$fdata["ownerTable"] = "holidaytype";
	$fdata["Label"] = GetFieldLabel("holidaytype","DailiesNormalFactor");
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

		$fdata["strField"] = "DailiesNormalFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DailiesNormalFactor";

	
	
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




	$tdataholidaytype["DailiesNormalFactor"] = $fdata;
//	DailiesOTFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DailiesOTFactor";
	$fdata["GoodName"] = "DailiesOTFactor";
	$fdata["ownerTable"] = "holidaytype";
	$fdata["Label"] = GetFieldLabel("holidaytype","DailiesOTFactor");
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

		$fdata["strField"] = "DailiesOTFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DailiesOTFactor";

	
	
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




	$tdataholidaytype["DailiesOTFactor"] = $fdata;


$tables_data["holidaytype"]=&$tdataholidaytype;
$field_labels["holidaytype"] = &$fieldLabelsholidaytype;
$fieldToolTips["holidaytype"] = &$fieldToolTipsholidaytype;
$placeHolders["holidaytype"] = &$placeHoldersholidaytype;
$page_titles["holidaytype"] = &$pageTitlesholidaytype;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["holidaytype"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["holidaytype"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_holidaytype()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "HID,  	HolidayType,  	MonthliesNormalFactor,  	MonthliesOTFactor,  	DailiesNormalFactor,  	DailiesOTFactor";
$proto0["m_strFrom"] = "FROM holidaytype";
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
	"m_strName" => "HID",
	"m_strTable" => "holidaytype",
	"m_srcTableName" => "holidaytype"
));

$proto6["m_sql"] = "HID";
$proto6["m_srcTableName"] = "holidaytype";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "HolidayType",
	"m_strTable" => "holidaytype",
	"m_srcTableName" => "holidaytype"
));

$proto8["m_sql"] = "HolidayType";
$proto8["m_srcTableName"] = "holidaytype";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MonthliesNormalFactor",
	"m_strTable" => "holidaytype",
	"m_srcTableName" => "holidaytype"
));

$proto10["m_sql"] = "MonthliesNormalFactor";
$proto10["m_srcTableName"] = "holidaytype";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "MonthliesOTFactor",
	"m_strTable" => "holidaytype",
	"m_srcTableName" => "holidaytype"
));

$proto12["m_sql"] = "MonthliesOTFactor";
$proto12["m_srcTableName"] = "holidaytype";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DailiesNormalFactor",
	"m_strTable" => "holidaytype",
	"m_srcTableName" => "holidaytype"
));

$proto14["m_sql"] = "DailiesNormalFactor";
$proto14["m_srcTableName"] = "holidaytype";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DailiesOTFactor",
	"m_strTable" => "holidaytype",
	"m_srcTableName" => "holidaytype"
));

$proto16["m_sql"] = "DailiesOTFactor";
$proto16["m_srcTableName"] = "holidaytype";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "holidaytype";
$proto19["m_srcTableName"] = "holidaytype";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "HID";
$proto19["m_columns"][] = "HolidayType";
$proto19["m_columns"][] = "MonthliesNormalFactor";
$proto19["m_columns"][] = "MonthliesOTFactor";
$proto19["m_columns"][] = "DailiesNormalFactor";
$proto19["m_columns"][] = "DailiesOTFactor";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "holidaytype";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "holidaytype";
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
$proto0["m_srcTableName"]="holidaytype";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_holidaytype = createSqlQuery_holidaytype();


	
		;

						

$tdataholidaytype[".sqlquery"] = $queryData_holidaytype;

$tableEvents["holidaytype"] = new eventsBase;
$tdataholidaytype[".hasEvents"] = false;

?>