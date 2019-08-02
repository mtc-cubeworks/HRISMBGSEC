<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadtrtable = array();
	$tdatadtrtable[".truncateText"] = true;
	$tdatadtrtable[".NumberOfChars"] = 80;
	$tdatadtrtable[".ShortName"] = "dtrtable";
	$tdatadtrtable[".OwnerID"] = "";
	$tdatadtrtable[".OriginalTable"] = "dtrtable";

//	field labels
$fieldLabelsdtrtable = array();
$fieldToolTipsdtrtable = array();
$pageTitlesdtrtable = array();
$placeHoldersdtrtable = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdtrtable["English"] = array();
	$fieldToolTipsdtrtable["English"] = array();
	$placeHoldersdtrtable["English"] = array();
	$pageTitlesdtrtable["English"] = array();
	$fieldLabelsdtrtable["English"]["DtID"] = "Dt ID";
	$fieldToolTipsdtrtable["English"]["DtID"] = "";
	$placeHoldersdtrtable["English"]["DtID"] = "";
	$fieldLabelsdtrtable["English"]["BioID"] = "Bio ID";
	$fieldToolTipsdtrtable["English"]["BioID"] = "";
	$placeHoldersdtrtable["English"]["BioID"] = "";
	$fieldLabelsdtrtable["English"]["TimeIn"] = "Time In";
	$fieldToolTipsdtrtable["English"]["TimeIn"] = "";
	$placeHoldersdtrtable["English"]["TimeIn"] = "";
	$fieldLabelsdtrtable["English"]["TimeOut"] = "Time Out";
	$fieldToolTipsdtrtable["English"]["TimeOut"] = "";
	$placeHoldersdtrtable["English"]["TimeOut"] = "";
	$fieldLabelsdtrtable["English"]["SDate"] = "SDate";
	$fieldToolTipsdtrtable["English"]["SDate"] = "";
	$placeHoldersdtrtable["English"]["SDate"] = "";
	$fieldLabelsdtrtable["English"]["SubTime"] = "Sub Time";
	$fieldToolTipsdtrtable["English"]["SubTime"] = "";
	$placeHoldersdtrtable["English"]["SubTime"] = "";
	$fieldLabelsdtrtable["English"]["Employer"] = "Employer";
	$fieldToolTipsdtrtable["English"]["Employer"] = "";
	$placeHoldersdtrtable["English"]["Employer"] = "";
	$fieldLabelsdtrtable["English"]["Division"] = "Division";
	$fieldToolTipsdtrtable["English"]["Division"] = "";
	$placeHoldersdtrtable["English"]["Division"] = "";
	$fieldLabelsdtrtable["English"]["WageType"] = "Wage Type";
	$fieldToolTipsdtrtable["English"]["WageType"] = "";
	$placeHoldersdtrtable["English"]["WageType"] = "";
	$fieldLabelsdtrtable["English"]["ScID"] = "Sc ID";
	$fieldToolTipsdtrtable["English"]["ScID"] = "";
	$placeHoldersdtrtable["English"]["ScID"] = "";
	$fieldLabelsdtrtable["English"]["FromDate"] = "From Date";
	$fieldToolTipsdtrtable["English"]["FromDate"] = "";
	$placeHoldersdtrtable["English"]["FromDate"] = "";
	$fieldLabelsdtrtable["English"]["ToDate"] = "To Date";
	$fieldToolTipsdtrtable["English"]["ToDate"] = "";
	$placeHoldersdtrtable["English"]["ToDate"] = "";
	if (count($fieldToolTipsdtrtable["English"]))
		$tdatadtrtable[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdtrtable[""] = array();
	$fieldToolTipsdtrtable[""] = array();
	$placeHoldersdtrtable[""] = array();
	$pageTitlesdtrtable[""] = array();
	if (count($fieldToolTipsdtrtable[""]))
		$tdatadtrtable[".isUseToolTips"] = true;
}


	$tdatadtrtable[".NCSearch"] = true;



$tdatadtrtable[".shortTableName"] = "dtrtable";
$tdatadtrtable[".nSecOptions"] = 0;
$tdatadtrtable[".recsPerRowPrint"] = 1;
$tdatadtrtable[".mainTableOwnerID"] = "";
$tdatadtrtable[".moveNext"] = 1;
$tdatadtrtable[".entityType"] = 0;

$tdatadtrtable[".strOriginalTableName"] = "dtrtable";

	



$tdatadtrtable[".showAddInPopup"] = false;

$tdatadtrtable[".showEditInPopup"] = false;

$tdatadtrtable[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadtrtable[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadtrtable[".fieldsForRegister"] = array();

$tdatadtrtable[".listAjax"] = false;

	$tdatadtrtable[".audit"] = false;

	$tdatadtrtable[".locking"] = false;

$tdatadtrtable[".edit"] = true;
$tdatadtrtable[".afterEditAction"] = 1;
$tdatadtrtable[".closePopupAfterEdit"] = 1;
$tdatadtrtable[".afterEditActionDetTable"] = "";

$tdatadtrtable[".add"] = true;
$tdatadtrtable[".afterAddAction"] = 1;
$tdatadtrtable[".closePopupAfterAdd"] = 1;
$tdatadtrtable[".afterAddActionDetTable"] = "";

$tdatadtrtable[".list"] = true;



$tdatadtrtable[".reorderRecordsByHeader"] = true;


$tdatadtrtable[".exportFormatting"] = 2;
$tdatadtrtable[".exportDelimiter"] = ",";
		
$tdatadtrtable[".view"] = true;

$tdatadtrtable[".import"] = true;

$tdatadtrtable[".exportTo"] = true;

$tdatadtrtable[".printFriendly"] = true;

$tdatadtrtable[".delete"] = true;

$tdatadtrtable[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadtrtable[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatadtrtable[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatadtrtable[".searchSaving"] = false;
//

$tdatadtrtable[".showSearchPanel"] = true;
		$tdatadtrtable[".flexibleSearch"] = true;

$tdatadtrtable[".isUseAjaxSuggest"] = true;

$tdatadtrtable[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																												

$tdatadtrtable[".ajaxCodeSnippetAdded"] = false;

$tdatadtrtable[".buttonsAdded"] = false;

$tdatadtrtable[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadtrtable[".isUseTimeForSearch"] = false;



$tdatadtrtable[".badgeColor"] = "7b68ee";


$tdatadtrtable[".allSearchFields"] = array();
$tdatadtrtable[".filterFields"] = array();
$tdatadtrtable[".requiredSearchFields"] = array();

$tdatadtrtable[".allSearchFields"][] = "DtID";
	$tdatadtrtable[".allSearchFields"][] = "BioID";
	$tdatadtrtable[".allSearchFields"][] = "TimeIn";
	$tdatadtrtable[".allSearchFields"][] = "TimeOut";
	$tdatadtrtable[".allSearchFields"][] = "SDate";
	$tdatadtrtable[".allSearchFields"][] = "SubTime";
	$tdatadtrtable[".allSearchFields"][] = "Employer";
	$tdatadtrtable[".allSearchFields"][] = "Division";
	$tdatadtrtable[".allSearchFields"][] = "WageType";
	$tdatadtrtable[".allSearchFields"][] = "ScID";
	$tdatadtrtable[".allSearchFields"][] = "FromDate";
	$tdatadtrtable[".allSearchFields"][] = "ToDate";
	

$tdatadtrtable[".googleLikeFields"] = array();
$tdatadtrtable[".googleLikeFields"][] = "DtID";
$tdatadtrtable[".googleLikeFields"][] = "BioID";
$tdatadtrtable[".googleLikeFields"][] = "TimeIn";
$tdatadtrtable[".googleLikeFields"][] = "TimeOut";
$tdatadtrtable[".googleLikeFields"][] = "SDate";
$tdatadtrtable[".googleLikeFields"][] = "SubTime";
$tdatadtrtable[".googleLikeFields"][] = "Employer";
$tdatadtrtable[".googleLikeFields"][] = "Division";
$tdatadtrtable[".googleLikeFields"][] = "WageType";
$tdatadtrtable[".googleLikeFields"][] = "ScID";
$tdatadtrtable[".googleLikeFields"][] = "FromDate";
$tdatadtrtable[".googleLikeFields"][] = "ToDate";


$tdatadtrtable[".advSearchFields"] = array();
$tdatadtrtable[".advSearchFields"][] = "DtID";
$tdatadtrtable[".advSearchFields"][] = "BioID";
$tdatadtrtable[".advSearchFields"][] = "TimeIn";
$tdatadtrtable[".advSearchFields"][] = "TimeOut";
$tdatadtrtable[".advSearchFields"][] = "SDate";
$tdatadtrtable[".advSearchFields"][] = "SubTime";
$tdatadtrtable[".advSearchFields"][] = "Employer";
$tdatadtrtable[".advSearchFields"][] = "Division";
$tdatadtrtable[".advSearchFields"][] = "WageType";
$tdatadtrtable[".advSearchFields"][] = "ScID";
$tdatadtrtable[".advSearchFields"][] = "FromDate";
$tdatadtrtable[".advSearchFields"][] = "ToDate";

$tdatadtrtable[".tableType"] = "list";

$tdatadtrtable[".printerPageOrientation"] = 0;
$tdatadtrtable[".nPrinterPageScale"] = 100;

$tdatadtrtable[".nPrinterSplitRecords"] = 40;

$tdatadtrtable[".nPrinterPDFSplitRecords"] = 40;



$tdatadtrtable[".geocodingEnabled"] = false;





$tdatadtrtable[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatadtrtable[".pageSize"] = 20;

$tdatadtrtable[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadtrtable[".strOrderBy"] = $tstrOrderBy;

$tdatadtrtable[".orderindexes"] = array();

$tdatadtrtable[".sqlHead"] = "SELECT DtID,  	BioID,  	TimeIn,  	TimeOut,  	SDate,  	SubTime,  	Employer,  	Division,  	WageType,  	ScID,  	FromDate,  	ToDate";
$tdatadtrtable[".sqlFrom"] = "FROM dtrtable";
$tdatadtrtable[".sqlWhereExpr"] = "";
$tdatadtrtable[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadtrtable[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadtrtable[".arrGroupsPerPage"] = $arrGPP;

$tdatadtrtable[".highlightSearchResults"] = true;

$tableKeysdtrtable = array();
$tableKeysdtrtable[] = "DtID";
$tdatadtrtable[".Keys"] = $tableKeysdtrtable;

$tdatadtrtable[".listFields"] = array();
$tdatadtrtable[".listFields"][] = "DtID";
$tdatadtrtable[".listFields"][] = "BioID";
$tdatadtrtable[".listFields"][] = "TimeIn";
$tdatadtrtable[".listFields"][] = "TimeOut";
$tdatadtrtable[".listFields"][] = "SDate";
$tdatadtrtable[".listFields"][] = "SubTime";
$tdatadtrtable[".listFields"][] = "Employer";
$tdatadtrtable[".listFields"][] = "Division";
$tdatadtrtable[".listFields"][] = "WageType";
$tdatadtrtable[".listFields"][] = "ScID";
$tdatadtrtable[".listFields"][] = "FromDate";
$tdatadtrtable[".listFields"][] = "ToDate";

$tdatadtrtable[".hideMobileList"] = array();


$tdatadtrtable[".viewFields"] = array();
$tdatadtrtable[".viewFields"][] = "DtID";
$tdatadtrtable[".viewFields"][] = "BioID";
$tdatadtrtable[".viewFields"][] = "TimeIn";
$tdatadtrtable[".viewFields"][] = "TimeOut";
$tdatadtrtable[".viewFields"][] = "SDate";
$tdatadtrtable[".viewFields"][] = "SubTime";
$tdatadtrtable[".viewFields"][] = "Employer";
$tdatadtrtable[".viewFields"][] = "Division";
$tdatadtrtable[".viewFields"][] = "WageType";
$tdatadtrtable[".viewFields"][] = "ScID";
$tdatadtrtable[".viewFields"][] = "FromDate";
$tdatadtrtable[".viewFields"][] = "ToDate";

$tdatadtrtable[".addFields"] = array();
$tdatadtrtable[".addFields"][] = "BioID";
$tdatadtrtable[".addFields"][] = "TimeIn";
$tdatadtrtable[".addFields"][] = "TimeOut";
$tdatadtrtable[".addFields"][] = "SDate";
$tdatadtrtable[".addFields"][] = "SubTime";
$tdatadtrtable[".addFields"][] = "Employer";
$tdatadtrtable[".addFields"][] = "Division";
$tdatadtrtable[".addFields"][] = "WageType";
$tdatadtrtable[".addFields"][] = "ScID";
$tdatadtrtable[".addFields"][] = "FromDate";
$tdatadtrtable[".addFields"][] = "ToDate";

$tdatadtrtable[".masterListFields"] = array();
$tdatadtrtable[".masterListFields"][] = "DtID";
$tdatadtrtable[".masterListFields"][] = "BioID";
$tdatadtrtable[".masterListFields"][] = "TimeIn";
$tdatadtrtable[".masterListFields"][] = "TimeOut";
$tdatadtrtable[".masterListFields"][] = "SDate";
$tdatadtrtable[".masterListFields"][] = "SubTime";
$tdatadtrtable[".masterListFields"][] = "Employer";
$tdatadtrtable[".masterListFields"][] = "Division";
$tdatadtrtable[".masterListFields"][] = "WageType";
$tdatadtrtable[".masterListFields"][] = "ScID";
$tdatadtrtable[".masterListFields"][] = "FromDate";
$tdatadtrtable[".masterListFields"][] = "ToDate";

$tdatadtrtable[".inlineAddFields"] = array();
$tdatadtrtable[".inlineAddFields"][] = "BioID";
$tdatadtrtable[".inlineAddFields"][] = "TimeIn";
$tdatadtrtable[".inlineAddFields"][] = "TimeOut";
$tdatadtrtable[".inlineAddFields"][] = "SDate";
$tdatadtrtable[".inlineAddFields"][] = "SubTime";
$tdatadtrtable[".inlineAddFields"][] = "Employer";
$tdatadtrtable[".inlineAddFields"][] = "Division";
$tdatadtrtable[".inlineAddFields"][] = "WageType";
$tdatadtrtable[".inlineAddFields"][] = "ScID";
$tdatadtrtable[".inlineAddFields"][] = "FromDate";
$tdatadtrtable[".inlineAddFields"][] = "ToDate";

$tdatadtrtable[".editFields"] = array();
$tdatadtrtable[".editFields"][] = "BioID";
$tdatadtrtable[".editFields"][] = "TimeIn";
$tdatadtrtable[".editFields"][] = "TimeOut";
$tdatadtrtable[".editFields"][] = "SDate";
$tdatadtrtable[".editFields"][] = "SubTime";
$tdatadtrtable[".editFields"][] = "Employer";
$tdatadtrtable[".editFields"][] = "Division";
$tdatadtrtable[".editFields"][] = "WageType";
$tdatadtrtable[".editFields"][] = "ScID";
$tdatadtrtable[".editFields"][] = "FromDate";
$tdatadtrtable[".editFields"][] = "ToDate";

$tdatadtrtable[".inlineEditFields"] = array();
$tdatadtrtable[".inlineEditFields"][] = "BioID";
$tdatadtrtable[".inlineEditFields"][] = "TimeIn";
$tdatadtrtable[".inlineEditFields"][] = "TimeOut";
$tdatadtrtable[".inlineEditFields"][] = "SDate";
$tdatadtrtable[".inlineEditFields"][] = "SubTime";
$tdatadtrtable[".inlineEditFields"][] = "Employer";
$tdatadtrtable[".inlineEditFields"][] = "Division";
$tdatadtrtable[".inlineEditFields"][] = "WageType";
$tdatadtrtable[".inlineEditFields"][] = "ScID";
$tdatadtrtable[".inlineEditFields"][] = "FromDate";
$tdatadtrtable[".inlineEditFields"][] = "ToDate";

$tdatadtrtable[".updateSelectedFields"] = array();
$tdatadtrtable[".updateSelectedFields"][] = "BioID";
$tdatadtrtable[".updateSelectedFields"][] = "TimeIn";
$tdatadtrtable[".updateSelectedFields"][] = "TimeOut";
$tdatadtrtable[".updateSelectedFields"][] = "SDate";
$tdatadtrtable[".updateSelectedFields"][] = "SubTime";
$tdatadtrtable[".updateSelectedFields"][] = "Employer";
$tdatadtrtable[".updateSelectedFields"][] = "Division";
$tdatadtrtable[".updateSelectedFields"][] = "WageType";
$tdatadtrtable[".updateSelectedFields"][] = "ScID";
$tdatadtrtable[".updateSelectedFields"][] = "FromDate";
$tdatadtrtable[".updateSelectedFields"][] = "ToDate";


$tdatadtrtable[".exportFields"] = array();
$tdatadtrtable[".exportFields"][] = "DtID";
$tdatadtrtable[".exportFields"][] = "BioID";
$tdatadtrtable[".exportFields"][] = "TimeIn";
$tdatadtrtable[".exportFields"][] = "TimeOut";
$tdatadtrtable[".exportFields"][] = "SDate";
$tdatadtrtable[".exportFields"][] = "SubTime";
$tdatadtrtable[".exportFields"][] = "Employer";
$tdatadtrtable[".exportFields"][] = "Division";
$tdatadtrtable[".exportFields"][] = "WageType";
$tdatadtrtable[".exportFields"][] = "ScID";
$tdatadtrtable[".exportFields"][] = "FromDate";
$tdatadtrtable[".exportFields"][] = "ToDate";

$tdatadtrtable[".importFields"] = array();
$tdatadtrtable[".importFields"][] = "DtID";
$tdatadtrtable[".importFields"][] = "BioID";
$tdatadtrtable[".importFields"][] = "TimeIn";
$tdatadtrtable[".importFields"][] = "TimeOut";
$tdatadtrtable[".importFields"][] = "SDate";
$tdatadtrtable[".importFields"][] = "SubTime";
$tdatadtrtable[".importFields"][] = "Employer";
$tdatadtrtable[".importFields"][] = "Division";
$tdatadtrtable[".importFields"][] = "WageType";
$tdatadtrtable[".importFields"][] = "ScID";
$tdatadtrtable[".importFields"][] = "FromDate";
$tdatadtrtable[".importFields"][] = "ToDate";

$tdatadtrtable[".printFields"] = array();
$tdatadtrtable[".printFields"][] = "DtID";
$tdatadtrtable[".printFields"][] = "BioID";
$tdatadtrtable[".printFields"][] = "TimeIn";
$tdatadtrtable[".printFields"][] = "TimeOut";
$tdatadtrtable[".printFields"][] = "SDate";
$tdatadtrtable[".printFields"][] = "SubTime";
$tdatadtrtable[".printFields"][] = "Employer";
$tdatadtrtable[".printFields"][] = "Division";
$tdatadtrtable[".printFields"][] = "WageType";
$tdatadtrtable[".printFields"][] = "ScID";
$tdatadtrtable[".printFields"][] = "FromDate";
$tdatadtrtable[".printFields"][] = "ToDate";


//	DtID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DtID";
	$fdata["GoodName"] = "DtID";
	$fdata["ownerTable"] = "dtrtable";
	$fdata["Label"] = GetFieldLabel("dtrtable","DtID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DtID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DtID";

	
	
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




	$tdatadtrtable["DtID"] = $fdata;
//	BioID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "BioID";
	$fdata["GoodName"] = "BioID";
	$fdata["ownerTable"] = "dtrtable";
	$fdata["Label"] = GetFieldLabel("dtrtable","BioID");
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

		$fdata["strField"] = "BioID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BioID";

	
	
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




	$tdatadtrtable["BioID"] = $fdata;
//	TimeIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TimeIn";
	$fdata["GoodName"] = "TimeIn";
	$fdata["ownerTable"] = "dtrtable";
	$fdata["Label"] = GetFieldLabel("dtrtable","TimeIn");
	$fdata["FieldType"] = 135;

	
	
	
			
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

		$fdata["strField"] = "TimeIn";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TimeIn";

	
	
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

		$edata["ShowTime"] = true;

	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 21;

	
	
	
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




	$tdatadtrtable["TimeIn"] = $fdata;
//	TimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TimeOut";
	$fdata["GoodName"] = "TimeOut";
	$fdata["ownerTable"] = "dtrtable";
	$fdata["Label"] = GetFieldLabel("dtrtable","TimeOut");
	$fdata["FieldType"] = 135;

	
	
	
			
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

		$fdata["strField"] = "TimeOut";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TimeOut";

	
	
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

		$edata["ShowTime"] = true;

	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 21;

	
	
	
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




	$tdatadtrtable["TimeOut"] = $fdata;
//	SDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SDate";
	$fdata["GoodName"] = "SDate";
	$fdata["ownerTable"] = "dtrtable";
	$fdata["Label"] = GetFieldLabel("dtrtable","SDate");
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

		$fdata["strField"] = "SDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SDate";

	
	
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




	$tdatadtrtable["SDate"] = $fdata;
//	SubTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SubTime";
	$fdata["GoodName"] = "SubTime";
	$fdata["ownerTable"] = "dtrtable";
	$fdata["Label"] = GetFieldLabel("dtrtable","SubTime");
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

		$fdata["strField"] = "SubTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SubTime";

	
	
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




	$tdatadtrtable["SubTime"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "dtrtable";
	$fdata["Label"] = GetFieldLabel("dtrtable","Employer");
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




	$tdatadtrtable["Employer"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "dtrtable";
	$fdata["Label"] = GetFieldLabel("dtrtable","Division");
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




	$tdatadtrtable["Division"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "dtrtable";
	$fdata["Label"] = GetFieldLabel("dtrtable","WageType");
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




	$tdatadtrtable["WageType"] = $fdata;
//	ScID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ScID";
	$fdata["GoodName"] = "ScID";
	$fdata["ownerTable"] = "dtrtable";
	$fdata["Label"] = GetFieldLabel("dtrtable","ScID");
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

		$fdata["strField"] = "ScID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ScID";

	
	
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




	$tdatadtrtable["ScID"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "dtrtable";
	$fdata["Label"] = GetFieldLabel("dtrtable","FromDate");
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

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 21;

	
	
	
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




	$tdatadtrtable["FromDate"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "dtrtable";
	$fdata["Label"] = GetFieldLabel("dtrtable","ToDate");
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

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 21;

	
	
	
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




	$tdatadtrtable["ToDate"] = $fdata;


$tables_data["dtrtable"]=&$tdatadtrtable;
$field_labels["dtrtable"] = &$fieldLabelsdtrtable;
$fieldToolTips["dtrtable"] = &$fieldToolTipsdtrtable;
$placeHolders["dtrtable"] = &$placeHoldersdtrtable;
$page_titles["dtrtable"] = &$pageTitlesdtrtable;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dtrtable"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dtrtable"] = array();


	
				$strOriginalDetailsTable="dt5";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dt5";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "dt5";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "1";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dtrtable"][0] = $masterParams;
				$masterTablesData["dtrtable"][0]["masterKeys"] = array();
	$masterTablesData["dtrtable"][0]["masterKeys"][]="ScID";
				$masterTablesData["dtrtable"][0]["detailKeys"] = array();
	$masterTablesData["dtrtable"][0]["detailKeys"][]="ScID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_dtrtable()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DtID,  	BioID,  	TimeIn,  	TimeOut,  	SDate,  	SubTime,  	Employer,  	Division,  	WageType,  	ScID,  	FromDate,  	ToDate";
$proto0["m_strFrom"] = "FROM dtrtable";
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
	"m_strName" => "DtID",
	"m_strTable" => "dtrtable",
	"m_srcTableName" => "dtrtable"
));

$proto6["m_sql"] = "DtID";
$proto6["m_srcTableName"] = "dtrtable";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "BioID",
	"m_strTable" => "dtrtable",
	"m_srcTableName" => "dtrtable"
));

$proto8["m_sql"] = "BioID";
$proto8["m_srcTableName"] = "dtrtable";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeIn",
	"m_strTable" => "dtrtable",
	"m_srcTableName" => "dtrtable"
));

$proto10["m_sql"] = "TimeIn";
$proto10["m_srcTableName"] = "dtrtable";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeOut",
	"m_strTable" => "dtrtable",
	"m_srcTableName" => "dtrtable"
));

$proto12["m_sql"] = "TimeOut";
$proto12["m_srcTableName"] = "dtrtable";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "SDate",
	"m_strTable" => "dtrtable",
	"m_srcTableName" => "dtrtable"
));

$proto14["m_sql"] = "SDate";
$proto14["m_srcTableName"] = "dtrtable";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "SubTime",
	"m_strTable" => "dtrtable",
	"m_srcTableName" => "dtrtable"
));

$proto16["m_sql"] = "SubTime";
$proto16["m_srcTableName"] = "dtrtable";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "dtrtable",
	"m_srcTableName" => "dtrtable"
));

$proto18["m_sql"] = "Employer";
$proto18["m_srcTableName"] = "dtrtable";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "dtrtable",
	"m_srcTableName" => "dtrtable"
));

$proto20["m_sql"] = "Division";
$proto20["m_srcTableName"] = "dtrtable";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "WageType",
	"m_strTable" => "dtrtable",
	"m_srcTableName" => "dtrtable"
));

$proto22["m_sql"] = "WageType";
$proto22["m_srcTableName"] = "dtrtable";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ScID",
	"m_strTable" => "dtrtable",
	"m_srcTableName" => "dtrtable"
));

$proto24["m_sql"] = "ScID";
$proto24["m_srcTableName"] = "dtrtable";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "dtrtable",
	"m_srcTableName" => "dtrtable"
));

$proto26["m_sql"] = "FromDate";
$proto26["m_srcTableName"] = "dtrtable";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "dtrtable",
	"m_srcTableName" => "dtrtable"
));

$proto28["m_sql"] = "ToDate";
$proto28["m_srcTableName"] = "dtrtable";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "dtrtable";
$proto31["m_srcTableName"] = "dtrtable";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "DtID";
$proto31["m_columns"][] = "BioID";
$proto31["m_columns"][] = "TimeIn";
$proto31["m_columns"][] = "TimeOut";
$proto31["m_columns"][] = "SDate";
$proto31["m_columns"][] = "SubTime";
$proto31["m_columns"][] = "Employer";
$proto31["m_columns"][] = "Division";
$proto31["m_columns"][] = "WageType";
$proto31["m_columns"][] = "ScID";
$proto31["m_columns"][] = "FromDate";
$proto31["m_columns"][] = "ToDate";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "dtrtable";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "dtrtable";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dtrtable";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dtrtable = createSqlQuery_dtrtable();


	
		;

												

$tdatadtrtable[".sqlquery"] = $queryData_dtrtable;

$tableEvents["dtrtable"] = new eventsBase;
$tdatadtrtable[".hasEvents"] = false;

?>