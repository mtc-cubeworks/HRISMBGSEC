<?php
require_once(getabspath("classes/cipherer.php"));




$tdataindbreaks = array();
	$tdataindbreaks[".truncateText"] = true;
	$tdataindbreaks[".NumberOfChars"] = 80;
	$tdataindbreaks[".ShortName"] = "indbreaks";
	$tdataindbreaks[".OwnerID"] = "";
	$tdataindbreaks[".OriginalTable"] = "indbreaks";

//	field labels
$fieldLabelsindbreaks = array();
$fieldToolTipsindbreaks = array();
$pageTitlesindbreaks = array();
$placeHoldersindbreaks = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsindbreaks["English"] = array();
	$fieldToolTipsindbreaks["English"] = array();
	$placeHoldersindbreaks["English"] = array();
	$pageTitlesindbreaks["English"] = array();
	$fieldLabelsindbreaks["English"]["IBID"] = "IBID";
	$fieldToolTipsindbreaks["English"]["IBID"] = "";
	$placeHoldersindbreaks["English"]["IBID"] = "";
	$fieldLabelsindbreaks["English"]["BreakOut"] = "Break Out";
	$fieldToolTipsindbreaks["English"]["BreakOut"] = "";
	$placeHoldersindbreaks["English"]["BreakOut"] = "";
	$fieldLabelsindbreaks["English"]["BreakIn"] = "Break In";
	$fieldToolTipsindbreaks["English"]["BreakIn"] = "";
	$placeHoldersindbreaks["English"]["BreakIn"] = "";
	$fieldLabelsindbreaks["English"]["BreakM"] = "Break Mins";
	$fieldToolTipsindbreaks["English"]["BreakM"] = "";
	$placeHoldersindbreaks["English"]["BreakM"] = "";
	$fieldLabelsindbreaks["English"]["ScID"] = "Sc ID";
	$fieldToolTipsindbreaks["English"]["ScID"] = "";
	$placeHoldersindbreaks["English"]["ScID"] = "";
	$fieldLabelsindbreaks["English"]["AllowedBreakM"] = "Allowed Break Mins";
	$fieldToolTipsindbreaks["English"]["AllowedBreakM"] = "";
	$placeHoldersindbreaks["English"]["AllowedBreakM"] = "";
	$fieldLabelsindbreaks["English"]["Excess"] = "Excess Mins";
	$fieldToolTipsindbreaks["English"]["Excess"] = "";
	$placeHoldersindbreaks["English"]["Excess"] = "";
	if (count($fieldToolTipsindbreaks["English"]))
		$tdataindbreaks[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsindbreaks[""] = array();
	$fieldToolTipsindbreaks[""] = array();
	$placeHoldersindbreaks[""] = array();
	$pageTitlesindbreaks[""] = array();
	if (count($fieldToolTipsindbreaks[""]))
		$tdataindbreaks[".isUseToolTips"] = true;
}


	$tdataindbreaks[".NCSearch"] = true;



$tdataindbreaks[".shortTableName"] = "indbreaks";
$tdataindbreaks[".nSecOptions"] = 0;
$tdataindbreaks[".recsPerRowPrint"] = 1;
$tdataindbreaks[".mainTableOwnerID"] = "";
$tdataindbreaks[".moveNext"] = 1;
$tdataindbreaks[".entityType"] = 0;

$tdataindbreaks[".strOriginalTableName"] = "indbreaks";

	



$tdataindbreaks[".showAddInPopup"] = false;

$tdataindbreaks[".showEditInPopup"] = false;

$tdataindbreaks[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataindbreaks[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataindbreaks[".fieldsForRegister"] = array();

$tdataindbreaks[".listAjax"] = false;

	$tdataindbreaks[".audit"] = false;

	$tdataindbreaks[".locking"] = false;

$tdataindbreaks[".edit"] = true;
$tdataindbreaks[".afterEditAction"] = 0;
$tdataindbreaks[".closePopupAfterEdit"] = 1;
$tdataindbreaks[".afterEditActionDetTable"] = "";

$tdataindbreaks[".add"] = true;
$tdataindbreaks[".afterAddAction"] = 0;
$tdataindbreaks[".closePopupAfterAdd"] = 1;
$tdataindbreaks[".afterAddActionDetTable"] = "";

$tdataindbreaks[".list"] = true;



$tdataindbreaks[".reorderRecordsByHeader"] = true;


$tdataindbreaks[".exportFormatting"] = 2;
$tdataindbreaks[".exportDelimiter"] = ",";
		
$tdataindbreaks[".view"] = true;

$tdataindbreaks[".import"] = true;

$tdataindbreaks[".exportTo"] = true;

$tdataindbreaks[".printFriendly"] = true;

$tdataindbreaks[".delete"] = true;

$tdataindbreaks[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataindbreaks[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataindbreaks[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataindbreaks[".searchSaving"] = false;
//

$tdataindbreaks[".showSearchPanel"] = true;
		$tdataindbreaks[".flexibleSearch"] = true;

$tdataindbreaks[".isUseAjaxSuggest"] = true;

$tdataindbreaks[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																					

$tdataindbreaks[".ajaxCodeSnippetAdded"] = false;

$tdataindbreaks[".buttonsAdded"] = false;

$tdataindbreaks[".addPageEvents"] = false;

// use timepicker for search panel
$tdataindbreaks[".isUseTimeForSearch"] = false;



$tdataindbreaks[".badgeColor"] = "3cb371";


$tdataindbreaks[".allSearchFields"] = array();
$tdataindbreaks[".filterFields"] = array();
$tdataindbreaks[".requiredSearchFields"] = array();

$tdataindbreaks[".allSearchFields"][] = "IBID";
	$tdataindbreaks[".allSearchFields"][] = "BreakOut";
	$tdataindbreaks[".allSearchFields"][] = "BreakIn";
	$tdataindbreaks[".allSearchFields"][] = "BreakM";
	$tdataindbreaks[".allSearchFields"][] = "AllowedBreakM";
	$tdataindbreaks[".allSearchFields"][] = "Excess";
	$tdataindbreaks[".allSearchFields"][] = "ScID";
	

$tdataindbreaks[".googleLikeFields"] = array();
$tdataindbreaks[".googleLikeFields"][] = "IBID";
$tdataindbreaks[".googleLikeFields"][] = "BreakOut";
$tdataindbreaks[".googleLikeFields"][] = "BreakIn";
$tdataindbreaks[".googleLikeFields"][] = "BreakM";
$tdataindbreaks[".googleLikeFields"][] = "ScID";
$tdataindbreaks[".googleLikeFields"][] = "AllowedBreakM";
$tdataindbreaks[".googleLikeFields"][] = "Excess";


$tdataindbreaks[".advSearchFields"] = array();
$tdataindbreaks[".advSearchFields"][] = "IBID";
$tdataindbreaks[".advSearchFields"][] = "BreakOut";
$tdataindbreaks[".advSearchFields"][] = "BreakIn";
$tdataindbreaks[".advSearchFields"][] = "BreakM";
$tdataindbreaks[".advSearchFields"][] = "AllowedBreakM";
$tdataindbreaks[".advSearchFields"][] = "Excess";
$tdataindbreaks[".advSearchFields"][] = "ScID";

$tdataindbreaks[".tableType"] = "list";

$tdataindbreaks[".printerPageOrientation"] = 0;
$tdataindbreaks[".nPrinterPageScale"] = 100;

$tdataindbreaks[".nPrinterSplitRecords"] = 40;

$tdataindbreaks[".nPrinterPDFSplitRecords"] = 40;



$tdataindbreaks[".geocodingEnabled"] = false;





$tdataindbreaks[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdataindbreaks[".totalsFields"] = array();
$tdataindbreaks[".totalsFields"][] = array(
	"fName" => "BreakM",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataindbreaks[".totalsFields"][] = array(
	"fName" => "AllowedBreakM",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataindbreaks[".totalsFields"][] = array(
	"fName" => "Excess",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdataindbreaks[".pageSize"] = 20;

$tdataindbreaks[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataindbreaks[".strOrderBy"] = $tstrOrderBy;

$tdataindbreaks[".orderindexes"] = array();

$tdataindbreaks[".sqlHead"] = "SELECT IBID,  	BreakOut,  	BreakIn,  	BreakM,  	ScID,  	AllowedBreakM,  	if(Excess<0,0,Excess) AS Excess";
$tdataindbreaks[".sqlFrom"] = "FROM indbreaks";
$tdataindbreaks[".sqlWhereExpr"] = "";
$tdataindbreaks[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataindbreaks[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataindbreaks[".arrGroupsPerPage"] = $arrGPP;

$tdataindbreaks[".highlightSearchResults"] = true;

$tableKeysindbreaks = array();
$tableKeysindbreaks[] = "IBID";
$tdataindbreaks[".Keys"] = $tableKeysindbreaks;

$tdataindbreaks[".listFields"] = array();
$tdataindbreaks[".listFields"][] = "IBID";
$tdataindbreaks[".listFields"][] = "BreakOut";
$tdataindbreaks[".listFields"][] = "BreakIn";
$tdataindbreaks[".listFields"][] = "BreakM";
$tdataindbreaks[".listFields"][] = "AllowedBreakM";
$tdataindbreaks[".listFields"][] = "Excess";
$tdataindbreaks[".listFields"][] = "ScID";

$tdataindbreaks[".hideMobileList"] = array();


$tdataindbreaks[".viewFields"] = array();
$tdataindbreaks[".viewFields"][] = "IBID";
$tdataindbreaks[".viewFields"][] = "BreakOut";
$tdataindbreaks[".viewFields"][] = "BreakIn";
$tdataindbreaks[".viewFields"][] = "BreakM";
$tdataindbreaks[".viewFields"][] = "AllowedBreakM";
$tdataindbreaks[".viewFields"][] = "Excess";
$tdataindbreaks[".viewFields"][] = "ScID";

$tdataindbreaks[".addFields"] = array();
$tdataindbreaks[".addFields"][] = "BreakOut";
$tdataindbreaks[".addFields"][] = "BreakIn";
$tdataindbreaks[".addFields"][] = "BreakM";
$tdataindbreaks[".addFields"][] = "AllowedBreakM";
$tdataindbreaks[".addFields"][] = "Excess";
$tdataindbreaks[".addFields"][] = "ScID";

$tdataindbreaks[".masterListFields"] = array();
$tdataindbreaks[".masterListFields"][] = "IBID";
$tdataindbreaks[".masterListFields"][] = "BreakOut";
$tdataindbreaks[".masterListFields"][] = "BreakIn";
$tdataindbreaks[".masterListFields"][] = "BreakM";
$tdataindbreaks[".masterListFields"][] = "AllowedBreakM";
$tdataindbreaks[".masterListFields"][] = "Excess";
$tdataindbreaks[".masterListFields"][] = "ScID";

$tdataindbreaks[".inlineAddFields"] = array();

$tdataindbreaks[".editFields"] = array();
$tdataindbreaks[".editFields"][] = "BreakOut";
$tdataindbreaks[".editFields"][] = "BreakIn";
$tdataindbreaks[".editFields"][] = "BreakM";
$tdataindbreaks[".editFields"][] = "AllowedBreakM";
$tdataindbreaks[".editFields"][] = "Excess";
$tdataindbreaks[".editFields"][] = "ScID";

$tdataindbreaks[".inlineEditFields"] = array();

$tdataindbreaks[".updateSelectedFields"] = array();
$tdataindbreaks[".updateSelectedFields"][] = "BreakOut";
$tdataindbreaks[".updateSelectedFields"][] = "BreakIn";
$tdataindbreaks[".updateSelectedFields"][] = "BreakM";
$tdataindbreaks[".updateSelectedFields"][] = "AllowedBreakM";
$tdataindbreaks[".updateSelectedFields"][] = "Excess";
$tdataindbreaks[".updateSelectedFields"][] = "ScID";


$tdataindbreaks[".exportFields"] = array();
$tdataindbreaks[".exportFields"][] = "IBID";
$tdataindbreaks[".exportFields"][] = "BreakOut";
$tdataindbreaks[".exportFields"][] = "BreakIn";
$tdataindbreaks[".exportFields"][] = "BreakM";
$tdataindbreaks[".exportFields"][] = "AllowedBreakM";
$tdataindbreaks[".exportFields"][] = "Excess";
$tdataindbreaks[".exportFields"][] = "ScID";

$tdataindbreaks[".importFields"] = array();
$tdataindbreaks[".importFields"][] = "IBID";
$tdataindbreaks[".importFields"][] = "BreakOut";
$tdataindbreaks[".importFields"][] = "BreakIn";
$tdataindbreaks[".importFields"][] = "BreakM";
$tdataindbreaks[".importFields"][] = "ScID";
$tdataindbreaks[".importFields"][] = "AllowedBreakM";
$tdataindbreaks[".importFields"][] = "Excess";

$tdataindbreaks[".printFields"] = array();
$tdataindbreaks[".printFields"][] = "IBID";
$tdataindbreaks[".printFields"][] = "BreakOut";
$tdataindbreaks[".printFields"][] = "BreakIn";
$tdataindbreaks[".printFields"][] = "BreakM";
$tdataindbreaks[".printFields"][] = "AllowedBreakM";
$tdataindbreaks[".printFields"][] = "Excess";
$tdataindbreaks[".printFields"][] = "ScID";


//	IBID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IBID";
	$fdata["GoodName"] = "IBID";
	$fdata["ownerTable"] = "indbreaks";
	$fdata["Label"] = GetFieldLabel("indbreaks","IBID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "IBID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IBID";

	
	
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




	$tdataindbreaks["IBID"] = $fdata;
//	BreakOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "BreakOut";
	$fdata["GoodName"] = "BreakOut";
	$fdata["ownerTable"] = "indbreaks";
	$fdata["Label"] = GetFieldLabel("indbreaks","BreakOut");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BreakOut";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BreakOut";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
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




	$tdataindbreaks["BreakOut"] = $fdata;
//	BreakIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "BreakIn";
	$fdata["GoodName"] = "BreakIn";
	$fdata["ownerTable"] = "indbreaks";
	$fdata["Label"] = GetFieldLabel("indbreaks","BreakIn");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BreakIn";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BreakIn";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
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




	$tdataindbreaks["BreakIn"] = $fdata;
//	BreakM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "BreakM";
	$fdata["GoodName"] = "BreakM";
	$fdata["ownerTable"] = "indbreaks";
	$fdata["Label"] = GetFieldLabel("indbreaks","BreakM");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BreakM";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BreakM";

	
	
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




	$tdataindbreaks["BreakM"] = $fdata;
//	ScID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ScID";
	$fdata["GoodName"] = "ScID";
	$fdata["ownerTable"] = "indbreaks";
	$fdata["Label"] = GetFieldLabel("indbreaks","ScID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataindbreaks["ScID"] = $fdata;
//	AllowedBreakM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "AllowedBreakM";
	$fdata["GoodName"] = "AllowedBreakM";
	$fdata["ownerTable"] = "indbreaks";
	$fdata["Label"] = GetFieldLabel("indbreaks","AllowedBreakM");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AllowedBreakM";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AllowedBreakM";

	
	
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




	$tdataindbreaks["AllowedBreakM"] = $fdata;
//	Excess
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Excess";
	$fdata["GoodName"] = "Excess";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("indbreaks","Excess");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Excess";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "if(Excess<0,0,Excess)";

	
	
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




	$tdataindbreaks["Excess"] = $fdata;


$tables_data["indbreaks"]=&$tdataindbreaks;
$field_labels["indbreaks"] = &$fieldLabelsindbreaks;
$fieldToolTips["indbreaks"] = &$fieldToolTipsindbreaks;
$placeHolders["indbreaks"] = &$placeHoldersindbreaks;
$page_titles["indbreaks"] = &$pageTitlesindbreaks;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["indbreaks"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["indbreaks"] = array();


	
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
					$masterTablesData["indbreaks"][0] = $masterParams;
				$masterTablesData["indbreaks"][0]["masterKeys"] = array();
	$masterTablesData["indbreaks"][0]["masterKeys"][]="ScID";
				$masterTablesData["indbreaks"][0]["detailKeys"] = array();
	$masterTablesData["indbreaks"][0]["detailKeys"][]="ScID";
		
	
				$strOriginalDetailsTable="indschedule";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="indschedule";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "indschedule";
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
					$masterTablesData["indbreaks"][1] = $masterParams;
				$masterTablesData["indbreaks"][1]["masterKeys"] = array();
	$masterTablesData["indbreaks"][1]["masterKeys"][]="ScID";
				$masterTablesData["indbreaks"][1]["detailKeys"] = array();
	$masterTablesData["indbreaks"][1]["detailKeys"][]="ScID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_indbreaks()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IBID,  	BreakOut,  	BreakIn,  	BreakM,  	ScID,  	AllowedBreakM,  	if(Excess<0,0,Excess) AS Excess";
$proto0["m_strFrom"] = "FROM indbreaks";
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
	"m_strName" => "IBID",
	"m_strTable" => "indbreaks",
	"m_srcTableName" => "indbreaks"
));

$proto6["m_sql"] = "IBID";
$proto6["m_srcTableName"] = "indbreaks";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "BreakOut",
	"m_strTable" => "indbreaks",
	"m_srcTableName" => "indbreaks"
));

$proto8["m_sql"] = "BreakOut";
$proto8["m_srcTableName"] = "indbreaks";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "BreakIn",
	"m_strTable" => "indbreaks",
	"m_srcTableName" => "indbreaks"
));

$proto10["m_sql"] = "BreakIn";
$proto10["m_srcTableName"] = "indbreaks";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "BreakM",
	"m_strTable" => "indbreaks",
	"m_srcTableName" => "indbreaks"
));

$proto12["m_sql"] = "BreakM";
$proto12["m_srcTableName"] = "indbreaks";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ScID",
	"m_strTable" => "indbreaks",
	"m_srcTableName" => "indbreaks"
));

$proto14["m_sql"] = "ScID";
$proto14["m_srcTableName"] = "indbreaks";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowedBreakM",
	"m_strTable" => "indbreaks",
	"m_srcTableName" => "indbreaks"
));

$proto16["m_sql"] = "AllowedBreakM";
$proto16["m_srcTableName"] = "indbreaks";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_functiontype"] = "SQLF_CUSTOM";
$proto19["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Excess<0"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "Excess"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "if(Excess<0,0,Excess)";
$proto18["m_srcTableName"] = "indbreaks";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "Excess";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "indbreaks";
$proto24["m_srcTableName"] = "indbreaks";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "IBID";
$proto24["m_columns"][] = "BreakOut";
$proto24["m_columns"][] = "BreakIn";
$proto24["m_columns"][] = "BreakM";
$proto24["m_columns"][] = "ScID";
$proto24["m_columns"][] = "AllowedBreakM";
$proto24["m_columns"][] = "Excess";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "indbreaks";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "indbreaks";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="indbreaks";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_indbreaks = createSqlQuery_indbreaks();


	
		;

							

$tdataindbreaks[".sqlquery"] = $queryData_indbreaks;

$tableEvents["indbreaks"] = new eventsBase;
$tdataindbreaks[".hasEvents"] = false;

?>