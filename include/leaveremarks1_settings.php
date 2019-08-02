<?php
require_once(getabspath("classes/cipherer.php"));




$tdataleaveremarks1 = array();
	$tdataleaveremarks1[".truncateText"] = true;
	$tdataleaveremarks1[".NumberOfChars"] = 80;
	$tdataleaveremarks1[".ShortName"] = "leaveremarks1";
	$tdataleaveremarks1[".OwnerID"] = "Superior";
	$tdataleaveremarks1[".OriginalTable"] = "leaveremarks";

//	field labels
$fieldLabelsleaveremarks1 = array();
$fieldToolTipsleaveremarks1 = array();
$pageTitlesleaveremarks1 = array();
$placeHoldersleaveremarks1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsleaveremarks1["English"] = array();
	$fieldToolTipsleaveremarks1["English"] = array();
	$placeHoldersleaveremarks1["English"] = array();
	$pageTitlesleaveremarks1["English"] = array();
	$fieldLabelsleaveremarks1["English"]["LRID"] = "LRID";
	$fieldToolTipsleaveremarks1["English"]["LRID"] = "";
	$placeHoldersleaveremarks1["English"]["LRID"] = "";
	$fieldLabelsleaveremarks1["English"]["LRDate"] = "LRDate";
	$fieldToolTipsleaveremarks1["English"]["LRDate"] = "";
	$placeHoldersleaveremarks1["English"]["LRDate"] = "";
	$fieldLabelsleaveremarks1["English"]["Remarks"] = "Remarks";
	$fieldToolTipsleaveremarks1["English"]["Remarks"] = "";
	$placeHoldersleaveremarks1["English"]["Remarks"] = "";
	$fieldLabelsleaveremarks1["English"]["LogID"] = "Log ID";
	$fieldToolTipsleaveremarks1["English"]["LogID"] = "";
	$placeHoldersleaveremarks1["English"]["LogID"] = "";
	$fieldLabelsleaveremarks1["English"]["LvID"] = "Lv ID";
	$fieldToolTipsleaveremarks1["English"]["LvID"] = "";
	$placeHoldersleaveremarks1["English"]["LvID"] = "";
	$fieldLabelsleaveremarks1["English"]["Superior"] = "Superior";
	$fieldToolTipsleaveremarks1["English"]["Superior"] = "";
	$placeHoldersleaveremarks1["English"]["Superior"] = "";
	$fieldLabelsleaveremarks1["English"]["Superior2"] = "Superior2";
	$fieldToolTipsleaveremarks1["English"]["Superior2"] = "";
	$placeHoldersleaveremarks1["English"]["Superior2"] = "";
	if (count($fieldToolTipsleaveremarks1["English"]))
		$tdataleaveremarks1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsleaveremarks1[""] = array();
	$fieldToolTipsleaveremarks1[""] = array();
	$placeHoldersleaveremarks1[""] = array();
	$pageTitlesleaveremarks1[""] = array();
	$fieldLabelsleaveremarks1[""]["LRID"] = "LRID";
	$fieldToolTipsleaveremarks1[""]["LRID"] = "";
	$placeHoldersleaveremarks1[""]["LRID"] = "";
	$fieldLabelsleaveremarks1[""]["LRDate"] = "LRDate";
	$fieldToolTipsleaveremarks1[""]["LRDate"] = "";
	$placeHoldersleaveremarks1[""]["LRDate"] = "";
	$fieldLabelsleaveremarks1[""]["Remarks"] = "Remarks";
	$fieldToolTipsleaveremarks1[""]["Remarks"] = "";
	$placeHoldersleaveremarks1[""]["Remarks"] = "";
	$fieldLabelsleaveremarks1[""]["LogID"] = "Log ID";
	$fieldToolTipsleaveremarks1[""]["LogID"] = "";
	$placeHoldersleaveremarks1[""]["LogID"] = "";
	$fieldLabelsleaveremarks1[""]["LvID"] = "Lv ID";
	$fieldToolTipsleaveremarks1[""]["LvID"] = "";
	$placeHoldersleaveremarks1[""]["LvID"] = "";
	$fieldLabelsleaveremarks1[""]["Superior"] = "Superior";
	$fieldToolTipsleaveremarks1[""]["Superior"] = "";
	$placeHoldersleaveremarks1[""]["Superior"] = "";
	$fieldLabelsleaveremarks1[""]["Superior2"] = "Superior2";
	$fieldToolTipsleaveremarks1[""]["Superior2"] = "";
	$placeHoldersleaveremarks1[""]["Superior2"] = "";
	if (count($fieldToolTipsleaveremarks1[""]))
		$tdataleaveremarks1[".isUseToolTips"] = true;
}


	$tdataleaveremarks1[".NCSearch"] = true;



$tdataleaveremarks1[".shortTableName"] = "leaveremarks1";
$tdataleaveremarks1[".nSecOptions"] = 1;
$tdataleaveremarks1[".recsPerRowPrint"] = 1;
$tdataleaveremarks1[".mainTableOwnerID"] = "Superior";
$tdataleaveremarks1[".moveNext"] = 1;
$tdataleaveremarks1[".entityType"] = 1;

$tdataleaveremarks1[".strOriginalTableName"] = "leaveremarks";

	



$tdataleaveremarks1[".showAddInPopup"] = false;

$tdataleaveremarks1[".showEditInPopup"] = false;

$tdataleaveremarks1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataleaveremarks1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataleaveremarks1[".fieldsForRegister"] = array();

$tdataleaveremarks1[".listAjax"] = false;

	$tdataleaveremarks1[".audit"] = false;

	$tdataleaveremarks1[".locking"] = false;


$tdataleaveremarks1[".add"] = true;
$tdataleaveremarks1[".afterAddAction"] = 1;
$tdataleaveremarks1[".closePopupAfterAdd"] = 1;
$tdataleaveremarks1[".afterAddActionDetTable"] = "";

$tdataleaveremarks1[".list"] = true;



$tdataleaveremarks1[".reorderRecordsByHeader"] = true;


$tdataleaveremarks1[".exportFormatting"] = 2;
$tdataleaveremarks1[".exportDelimiter"] = ",";
		
$tdataleaveremarks1[".inlineAdd"] = true;
$tdataleaveremarks1[".view"] = true;


$tdataleaveremarks1[".exportTo"] = true;

$tdataleaveremarks1[".printFriendly"] = true;

$tdataleaveremarks1[".delete"] = true;

$tdataleaveremarks1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataleaveremarks1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataleaveremarks1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataleaveremarks1[".searchSaving"] = false;
//

$tdataleaveremarks1[".showSearchPanel"] = true;
		$tdataleaveremarks1[".flexibleSearch"] = true;

$tdataleaveremarks1[".isUseAjaxSuggest"] = true;

$tdataleaveremarks1[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																												

$tdataleaveremarks1[".ajaxCodeSnippetAdded"] = false;

$tdataleaveremarks1[".buttonsAdded"] = false;

$tdataleaveremarks1[".addPageEvents"] = true;

// use timepicker for search panel
$tdataleaveremarks1[".isUseTimeForSearch"] = false;



$tdataleaveremarks1[".badgeColor"] = "d2af80";


$tdataleaveremarks1[".allSearchFields"] = array();
$tdataleaveremarks1[".filterFields"] = array();
$tdataleaveremarks1[".requiredSearchFields"] = array();

$tdataleaveremarks1[".allSearchFields"][] = "LRID";
	$tdataleaveremarks1[".allSearchFields"][] = "LRDate";
	$tdataleaveremarks1[".allSearchFields"][] = "Remarks";
	$tdataleaveremarks1[".allSearchFields"][] = "LogID";
	$tdataleaveremarks1[".allSearchFields"][] = "LvID";
	$tdataleaveremarks1[".allSearchFields"][] = "Superior";
	$tdataleaveremarks1[".allSearchFields"][] = "Superior2";
	

$tdataleaveremarks1[".googleLikeFields"] = array();
$tdataleaveremarks1[".googleLikeFields"][] = "LRID";
$tdataleaveremarks1[".googleLikeFields"][] = "LRDate";
$tdataleaveremarks1[".googleLikeFields"][] = "Remarks";
$tdataleaveremarks1[".googleLikeFields"][] = "LogID";
$tdataleaveremarks1[".googleLikeFields"][] = "LvID";
$tdataleaveremarks1[".googleLikeFields"][] = "Superior";
$tdataleaveremarks1[".googleLikeFields"][] = "Superior2";


$tdataleaveremarks1[".advSearchFields"] = array();
$tdataleaveremarks1[".advSearchFields"][] = "LRID";
$tdataleaveremarks1[".advSearchFields"][] = "LRDate";
$tdataleaveremarks1[".advSearchFields"][] = "Remarks";
$tdataleaveremarks1[".advSearchFields"][] = "LogID";
$tdataleaveremarks1[".advSearchFields"][] = "LvID";
$tdataleaveremarks1[".advSearchFields"][] = "Superior";
$tdataleaveremarks1[".advSearchFields"][] = "Superior2";

$tdataleaveremarks1[".tableType"] = "list";

$tdataleaveremarks1[".printerPageOrientation"] = 0;
$tdataleaveremarks1[".nPrinterPageScale"] = 100;

$tdataleaveremarks1[".nPrinterSplitRecords"] = 40;

$tdataleaveremarks1[".nPrinterPDFSplitRecords"] = 40;



$tdataleaveremarks1[".geocodingEnabled"] = false;





$tdataleaveremarks1[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataleaveremarks1[".pageSize"] = 20;

$tdataleaveremarks1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataleaveremarks1[".strOrderBy"] = $tstrOrderBy;

$tdataleaveremarks1[".orderindexes"] = array();

$tdataleaveremarks1[".sqlHead"] = "SELECT LRID,  	LRDate,  	Remarks,  	LogID,  	LvID,  	Superior,  	Superior2";
$tdataleaveremarks1[".sqlFrom"] = "FROM leaveremarks";
$tdataleaveremarks1[".sqlWhereExpr"] = "";
$tdataleaveremarks1[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataleaveremarks1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataleaveremarks1[".arrGroupsPerPage"] = $arrGPP;

$tdataleaveremarks1[".highlightSearchResults"] = true;

$tableKeysleaveremarks1 = array();
$tableKeysleaveremarks1[] = "LRID";
$tdataleaveremarks1[".Keys"] = $tableKeysleaveremarks1;

$tdataleaveremarks1[".listFields"] = array();
$tdataleaveremarks1[".listFields"][] = "LRID";
$tdataleaveremarks1[".listFields"][] = "LRDate";
$tdataleaveremarks1[".listFields"][] = "Remarks";
$tdataleaveremarks1[".listFields"][] = "LogID";
$tdataleaveremarks1[".listFields"][] = "LvID";
$tdataleaveremarks1[".listFields"][] = "Superior";
$tdataleaveremarks1[".listFields"][] = "Superior2";

$tdataleaveremarks1[".hideMobileList"] = array();


$tdataleaveremarks1[".viewFields"] = array();
$tdataleaveremarks1[".viewFields"][] = "LRID";
$tdataleaveremarks1[".viewFields"][] = "LRDate";
$tdataleaveremarks1[".viewFields"][] = "Remarks";
$tdataleaveremarks1[".viewFields"][] = "LogID";
$tdataleaveremarks1[".viewFields"][] = "LvID";
$tdataleaveremarks1[".viewFields"][] = "Superior";
$tdataleaveremarks1[".viewFields"][] = "Superior2";

$tdataleaveremarks1[".addFields"] = array();
$tdataleaveremarks1[".addFields"][] = "LRDate";
$tdataleaveremarks1[".addFields"][] = "Remarks";
$tdataleaveremarks1[".addFields"][] = "LvID";

$tdataleaveremarks1[".masterListFields"] = array();
$tdataleaveremarks1[".masterListFields"][] = "LRID";
$tdataleaveremarks1[".masterListFields"][] = "LRDate";
$tdataleaveremarks1[".masterListFields"][] = "Remarks";
$tdataleaveremarks1[".masterListFields"][] = "LogID";
$tdataleaveremarks1[".masterListFields"][] = "LvID";
$tdataleaveremarks1[".masterListFields"][] = "Superior";
$tdataleaveremarks1[".masterListFields"][] = "Superior2";

$tdataleaveremarks1[".inlineAddFields"] = array();
$tdataleaveremarks1[".inlineAddFields"][] = "LRDate";
$tdataleaveremarks1[".inlineAddFields"][] = "Remarks";
$tdataleaveremarks1[".inlineAddFields"][] = "LvID";

$tdataleaveremarks1[".editFields"] = array();

$tdataleaveremarks1[".inlineEditFields"] = array();

$tdataleaveremarks1[".updateSelectedFields"] = array();


$tdataleaveremarks1[".exportFields"] = array();
$tdataleaveremarks1[".exportFields"][] = "LRID";
$tdataleaveremarks1[".exportFields"][] = "LRDate";
$tdataleaveremarks1[".exportFields"][] = "Remarks";
$tdataleaveremarks1[".exportFields"][] = "LogID";
$tdataleaveremarks1[".exportFields"][] = "LvID";
$tdataleaveremarks1[".exportFields"][] = "Superior";
$tdataleaveremarks1[".exportFields"][] = "Superior2";

$tdataleaveremarks1[".importFields"] = array();

$tdataleaveremarks1[".printFields"] = array();
$tdataleaveremarks1[".printFields"][] = "LRID";
$tdataleaveremarks1[".printFields"][] = "LRDate";
$tdataleaveremarks1[".printFields"][] = "Remarks";
$tdataleaveremarks1[".printFields"][] = "LogID";
$tdataleaveremarks1[".printFields"][] = "LvID";
$tdataleaveremarks1[".printFields"][] = "Superior";
$tdataleaveremarks1[".printFields"][] = "Superior2";


//	LRID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LRID";
	$fdata["GoodName"] = "LRID";
	$fdata["ownerTable"] = "leaveremarks";
	$fdata["Label"] = GetFieldLabel("leaveremarks1","LRID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LRID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LRID";

	
	
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




	$tdataleaveremarks1["LRID"] = $fdata;
//	LRDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "LRDate";
	$fdata["GoodName"] = "LRDate";
	$fdata["ownerTable"] = "leaveremarks";
	$fdata["Label"] = GetFieldLabel("leaveremarks1","LRDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LRDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LRDate";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataleaveremarks1["LRDate"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "leaveremarks";
	$fdata["Label"] = GetFieldLabel("leaveremarks1","Remarks");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

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




	$tdataleaveremarks1["Remarks"] = $fdata;
//	LogID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "LogID";
	$fdata["GoodName"] = "LogID";
	$fdata["ownerTable"] = "leaveremarks";
	$fdata["Label"] = GetFieldLabel("leaveremarks1","LogID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LogID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LogID";

	
	
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
	$edata["LookupTable"] = "logins";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "LogID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "FullName";
	
	

	
	$edata["LookupOrderBy"] = "FullName";

	
	
	
	

	
	
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




	$tdataleaveremarks1["LogID"] = $fdata;
//	LvID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "LvID";
	$fdata["GoodName"] = "LvID";
	$fdata["ownerTable"] = "leaveremarks";
	$fdata["Label"] = GetFieldLabel("leaveremarks1","LvID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LvID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LvID";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataleaveremarks1["LvID"] = $fdata;
//	Superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Superior";
	$fdata["GoodName"] = "Superior";
	$fdata["ownerTable"] = "leaveremarks";
	$fdata["Label"] = GetFieldLabel("leaveremarks1","Superior");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Superior";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Superior";

	
	
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




	$tdataleaveremarks1["Superior"] = $fdata;
//	Superior2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Superior2";
	$fdata["GoodName"] = "Superior2";
	$fdata["ownerTable"] = "leaveremarks";
	$fdata["Label"] = GetFieldLabel("leaveremarks1","Superior2");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Superior2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Superior2";

	
	
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




	$tdataleaveremarks1["Superior2"] = $fdata;


$tables_data["leaveremarks1"]=&$tdataleaveremarks1;
$field_labels["leaveremarks1"] = &$fieldLabelsleaveremarks1;
$fieldToolTips["leaveremarks1"] = &$fieldToolTipsleaveremarks1;
$placeHolders["leaveremarks1"] = &$placeHoldersleaveremarks1;
$page_titles["leaveremarks1"] = &$pageTitlesleaveremarks1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["leaveremarks1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["leaveremarks1"] = array();


	
				$strOriginalDetailsTable="leaves";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="leavesapp";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "leavesapp";
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
					$masterTablesData["leaveremarks1"][0] = $masterParams;
				$masterTablesData["leaveremarks1"][0]["masterKeys"] = array();
	$masterTablesData["leaveremarks1"][0]["masterKeys"][]="LvID";
				$masterTablesData["leaveremarks1"][0]["masterKeys"][]="Superior";
				$masterTablesData["leaveremarks1"][0]["masterKeys"][]="Superior2";
				$masterTablesData["leaveremarks1"][0]["detailKeys"] = array();
	$masterTablesData["leaveremarks1"][0]["detailKeys"][]="LvID";
				$masterTablesData["leaveremarks1"][0]["detailKeys"][]="Superior";
				$masterTablesData["leaveremarks1"][0]["detailKeys"][]="Superior2";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_leaveremarks1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LRID,  	LRDate,  	Remarks,  	LogID,  	LvID,  	Superior,  	Superior2";
$proto0["m_strFrom"] = "FROM leaveremarks";
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
	"m_strName" => "LRID",
	"m_strTable" => "leaveremarks",
	"m_srcTableName" => "leaveremarks1"
));

$proto6["m_sql"] = "LRID";
$proto6["m_srcTableName"] = "leaveremarks1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "LRDate",
	"m_strTable" => "leaveremarks",
	"m_srcTableName" => "leaveremarks1"
));

$proto8["m_sql"] = "LRDate";
$proto8["m_srcTableName"] = "leaveremarks1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "leaveremarks",
	"m_srcTableName" => "leaveremarks1"
));

$proto10["m_sql"] = "Remarks";
$proto10["m_srcTableName"] = "leaveremarks1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "LogID",
	"m_strTable" => "leaveremarks",
	"m_srcTableName" => "leaveremarks1"
));

$proto12["m_sql"] = "LogID";
$proto12["m_srcTableName"] = "leaveremarks1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "LvID",
	"m_strTable" => "leaveremarks",
	"m_srcTableName" => "leaveremarks1"
));

$proto14["m_sql"] = "LvID";
$proto14["m_srcTableName"] = "leaveremarks1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior",
	"m_strTable" => "leaveremarks",
	"m_srcTableName" => "leaveremarks1"
));

$proto16["m_sql"] = "Superior";
$proto16["m_srcTableName"] = "leaveremarks1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior2",
	"m_strTable" => "leaveremarks",
	"m_srcTableName" => "leaveremarks1"
));

$proto18["m_sql"] = "Superior2";
$proto18["m_srcTableName"] = "leaveremarks1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "leaveremarks";
$proto21["m_srcTableName"] = "leaveremarks1";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "LRID";
$proto21["m_columns"][] = "LRDate";
$proto21["m_columns"][] = "Remarks";
$proto21["m_columns"][] = "LogID";
$proto21["m_columns"][] = "LvID";
$proto21["m_columns"][] = "Superior";
$proto21["m_columns"][] = "Superior2";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "leaveremarks";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "leaveremarks1";
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
$proto0["m_srcTableName"]="leaveremarks1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_leaveremarks1 = createSqlQuery_leaveremarks1();


	
		;

							

$tdataleaveremarks1[".sqlquery"] = $queryData_leaveremarks1;

include_once(getabspath("include/leaveremarks1_events.php"));
$tableEvents["leaveremarks1"] = new eventclass_leaveremarks1;
$tdataleaveremarks1[".hasEvents"] = true;

?>