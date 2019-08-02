<?php
require_once(getabspath("classes/cipherer.php"));




$tdataleaveremarks2 = array();
	$tdataleaveremarks2[".truncateText"] = true;
	$tdataleaveremarks2[".NumberOfChars"] = 80;
	$tdataleaveremarks2[".ShortName"] = "leaveremarks2";
	$tdataleaveremarks2[".OwnerID"] = "Superior2";
	$tdataleaveremarks2[".OriginalTable"] = "leaveremarks";

//	field labels
$fieldLabelsleaveremarks2 = array();
$fieldToolTipsleaveremarks2 = array();
$pageTitlesleaveremarks2 = array();
$placeHoldersleaveremarks2 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsleaveremarks2["English"] = array();
	$fieldToolTipsleaveremarks2["English"] = array();
	$placeHoldersleaveremarks2["English"] = array();
	$pageTitlesleaveremarks2["English"] = array();
	$fieldLabelsleaveremarks2["English"]["LRID"] = "LRID";
	$fieldToolTipsleaveremarks2["English"]["LRID"] = "";
	$placeHoldersleaveremarks2["English"]["LRID"] = "";
	$fieldLabelsleaveremarks2["English"]["LRDate"] = "LRDate";
	$fieldToolTipsleaveremarks2["English"]["LRDate"] = "";
	$placeHoldersleaveremarks2["English"]["LRDate"] = "";
	$fieldLabelsleaveremarks2["English"]["Remarks"] = "Remarks";
	$fieldToolTipsleaveremarks2["English"]["Remarks"] = "";
	$placeHoldersleaveremarks2["English"]["Remarks"] = "";
	$fieldLabelsleaveremarks2["English"]["LogID"] = "Log ID";
	$fieldToolTipsleaveremarks2["English"]["LogID"] = "";
	$placeHoldersleaveremarks2["English"]["LogID"] = "";
	$fieldLabelsleaveremarks2["English"]["LvID"] = "Lv ID";
	$fieldToolTipsleaveremarks2["English"]["LvID"] = "";
	$placeHoldersleaveremarks2["English"]["LvID"] = "";
	$fieldLabelsleaveremarks2["English"]["Superior"] = "Superior";
	$fieldToolTipsleaveremarks2["English"]["Superior"] = "";
	$placeHoldersleaveremarks2["English"]["Superior"] = "";
	$fieldLabelsleaveremarks2["English"]["Superior2"] = "Superior2";
	$fieldToolTipsleaveremarks2["English"]["Superior2"] = "";
	$placeHoldersleaveremarks2["English"]["Superior2"] = "";
	if (count($fieldToolTipsleaveremarks2["English"]))
		$tdataleaveremarks2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsleaveremarks2[""] = array();
	$fieldToolTipsleaveremarks2[""] = array();
	$placeHoldersleaveremarks2[""] = array();
	$pageTitlesleaveremarks2[""] = array();
	$fieldLabelsleaveremarks2[""]["LRID"] = "LRID";
	$fieldToolTipsleaveremarks2[""]["LRID"] = "";
	$placeHoldersleaveremarks2[""]["LRID"] = "";
	$fieldLabelsleaveremarks2[""]["LRDate"] = "LRDate";
	$fieldToolTipsleaveremarks2[""]["LRDate"] = "";
	$placeHoldersleaveremarks2[""]["LRDate"] = "";
	$fieldLabelsleaveremarks2[""]["Remarks"] = "Remarks";
	$fieldToolTipsleaveremarks2[""]["Remarks"] = "";
	$placeHoldersleaveremarks2[""]["Remarks"] = "";
	$fieldLabelsleaveremarks2[""]["LogID"] = "Log ID";
	$fieldToolTipsleaveremarks2[""]["LogID"] = "";
	$placeHoldersleaveremarks2[""]["LogID"] = "";
	$fieldLabelsleaveremarks2[""]["LvID"] = "Lv ID";
	$fieldToolTipsleaveremarks2[""]["LvID"] = "";
	$placeHoldersleaveremarks2[""]["LvID"] = "";
	$fieldLabelsleaveremarks2[""]["Superior"] = "Superior";
	$fieldToolTipsleaveremarks2[""]["Superior"] = "";
	$placeHoldersleaveremarks2[""]["Superior"] = "";
	$fieldLabelsleaveremarks2[""]["Superior2"] = "Superior2";
	$fieldToolTipsleaveremarks2[""]["Superior2"] = "";
	$placeHoldersleaveremarks2[""]["Superior2"] = "";
	if (count($fieldToolTipsleaveremarks2[""]))
		$tdataleaveremarks2[".isUseToolTips"] = true;
}


	$tdataleaveremarks2[".NCSearch"] = true;



$tdataleaveremarks2[".shortTableName"] = "leaveremarks2";
$tdataleaveremarks2[".nSecOptions"] = 1;
$tdataleaveremarks2[".recsPerRowPrint"] = 1;
$tdataleaveremarks2[".mainTableOwnerID"] = "Superior2";
$tdataleaveremarks2[".moveNext"] = 1;
$tdataleaveremarks2[".entityType"] = 1;

$tdataleaveremarks2[".strOriginalTableName"] = "leaveremarks";

	



$tdataleaveremarks2[".showAddInPopup"] = false;

$tdataleaveremarks2[".showEditInPopup"] = false;

$tdataleaveremarks2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataleaveremarks2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataleaveremarks2[".fieldsForRegister"] = array();

$tdataleaveremarks2[".listAjax"] = false;

	$tdataleaveremarks2[".audit"] = false;

	$tdataleaveremarks2[".locking"] = false;


$tdataleaveremarks2[".add"] = true;
$tdataleaveremarks2[".afterAddAction"] = 1;
$tdataleaveremarks2[".closePopupAfterAdd"] = 1;
$tdataleaveremarks2[".afterAddActionDetTable"] = "";

$tdataleaveremarks2[".list"] = true;



$tdataleaveremarks2[".reorderRecordsByHeader"] = true;


$tdataleaveremarks2[".exportFormatting"] = 2;
$tdataleaveremarks2[".exportDelimiter"] = ",";
		
$tdataleaveremarks2[".inlineAdd"] = true;
$tdataleaveremarks2[".view"] = true;


$tdataleaveremarks2[".exportTo"] = true;

$tdataleaveremarks2[".printFriendly"] = true;

$tdataleaveremarks2[".delete"] = true;

$tdataleaveremarks2[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataleaveremarks2[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataleaveremarks2[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataleaveremarks2[".searchSaving"] = false;
//

$tdataleaveremarks2[".showSearchPanel"] = true;
		$tdataleaveremarks2[".flexibleSearch"] = true;

$tdataleaveremarks2[".isUseAjaxSuggest"] = true;

$tdataleaveremarks2[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																												

$tdataleaveremarks2[".ajaxCodeSnippetAdded"] = false;

$tdataleaveremarks2[".buttonsAdded"] = false;

$tdataleaveremarks2[".addPageEvents"] = true;

// use timepicker for search panel
$tdataleaveremarks2[".isUseTimeForSearch"] = false;



$tdataleaveremarks2[".badgeColor"] = "778899";


$tdataleaveremarks2[".allSearchFields"] = array();
$tdataleaveremarks2[".filterFields"] = array();
$tdataleaveremarks2[".requiredSearchFields"] = array();

$tdataleaveremarks2[".allSearchFields"][] = "LRID";
	$tdataleaveremarks2[".allSearchFields"][] = "LRDate";
	$tdataleaveremarks2[".allSearchFields"][] = "Remarks";
	$tdataleaveremarks2[".allSearchFields"][] = "LogID";
	$tdataleaveremarks2[".allSearchFields"][] = "LvID";
	$tdataleaveremarks2[".allSearchFields"][] = "Superior";
	$tdataleaveremarks2[".allSearchFields"][] = "Superior2";
	

$tdataleaveremarks2[".googleLikeFields"] = array();
$tdataleaveremarks2[".googleLikeFields"][] = "LRID";
$tdataleaveremarks2[".googleLikeFields"][] = "LRDate";
$tdataleaveremarks2[".googleLikeFields"][] = "Remarks";
$tdataleaveremarks2[".googleLikeFields"][] = "LogID";
$tdataleaveremarks2[".googleLikeFields"][] = "LvID";
$tdataleaveremarks2[".googleLikeFields"][] = "Superior";
$tdataleaveremarks2[".googleLikeFields"][] = "Superior2";


$tdataleaveremarks2[".advSearchFields"] = array();
$tdataleaveremarks2[".advSearchFields"][] = "LRID";
$tdataleaveremarks2[".advSearchFields"][] = "LRDate";
$tdataleaveremarks2[".advSearchFields"][] = "Remarks";
$tdataleaveremarks2[".advSearchFields"][] = "LogID";
$tdataleaveremarks2[".advSearchFields"][] = "LvID";
$tdataleaveremarks2[".advSearchFields"][] = "Superior";
$tdataleaveremarks2[".advSearchFields"][] = "Superior2";

$tdataleaveremarks2[".tableType"] = "list";

$tdataleaveremarks2[".printerPageOrientation"] = 0;
$tdataleaveremarks2[".nPrinterPageScale"] = 100;

$tdataleaveremarks2[".nPrinterSplitRecords"] = 40;

$tdataleaveremarks2[".nPrinterPDFSplitRecords"] = 40;



$tdataleaveremarks2[".geocodingEnabled"] = false;





$tdataleaveremarks2[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataleaveremarks2[".pageSize"] = 20;

$tdataleaveremarks2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataleaveremarks2[".strOrderBy"] = $tstrOrderBy;

$tdataleaveremarks2[".orderindexes"] = array();

$tdataleaveremarks2[".sqlHead"] = "SELECT LRID,  	LRDate,  	Remarks,  	LogID,  	LvID,  	Superior,  	Superior2";
$tdataleaveremarks2[".sqlFrom"] = "FROM leaveremarks";
$tdataleaveremarks2[".sqlWhereExpr"] = "";
$tdataleaveremarks2[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataleaveremarks2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataleaveremarks2[".arrGroupsPerPage"] = $arrGPP;

$tdataleaveremarks2[".highlightSearchResults"] = true;

$tableKeysleaveremarks2 = array();
$tableKeysleaveremarks2[] = "LRID";
$tdataleaveremarks2[".Keys"] = $tableKeysleaveremarks2;

$tdataleaveremarks2[".listFields"] = array();
$tdataleaveremarks2[".listFields"][] = "LRID";
$tdataleaveremarks2[".listFields"][] = "LRDate";
$tdataleaveremarks2[".listFields"][] = "Remarks";
$tdataleaveremarks2[".listFields"][] = "LogID";
$tdataleaveremarks2[".listFields"][] = "LvID";
$tdataleaveremarks2[".listFields"][] = "Superior";
$tdataleaveremarks2[".listFields"][] = "Superior2";

$tdataleaveremarks2[".hideMobileList"] = array();


$tdataleaveremarks2[".viewFields"] = array();
$tdataleaveremarks2[".viewFields"][] = "LRID";
$tdataleaveremarks2[".viewFields"][] = "LRDate";
$tdataleaveremarks2[".viewFields"][] = "Remarks";
$tdataleaveremarks2[".viewFields"][] = "LogID";
$tdataleaveremarks2[".viewFields"][] = "LvID";
$tdataleaveremarks2[".viewFields"][] = "Superior";
$tdataleaveremarks2[".viewFields"][] = "Superior2";

$tdataleaveremarks2[".addFields"] = array();
$tdataleaveremarks2[".addFields"][] = "LRDate";
$tdataleaveremarks2[".addFields"][] = "Remarks";
$tdataleaveremarks2[".addFields"][] = "LvID";

$tdataleaveremarks2[".masterListFields"] = array();
$tdataleaveremarks2[".masterListFields"][] = "LRID";
$tdataleaveremarks2[".masterListFields"][] = "LRDate";
$tdataleaveremarks2[".masterListFields"][] = "Remarks";
$tdataleaveremarks2[".masterListFields"][] = "LogID";
$tdataleaveremarks2[".masterListFields"][] = "LvID";
$tdataleaveremarks2[".masterListFields"][] = "Superior";
$tdataleaveremarks2[".masterListFields"][] = "Superior2";

$tdataleaveremarks2[".inlineAddFields"] = array();
$tdataleaveremarks2[".inlineAddFields"][] = "LRDate";
$tdataleaveremarks2[".inlineAddFields"][] = "Remarks";
$tdataleaveremarks2[".inlineAddFields"][] = "LvID";

$tdataleaveremarks2[".editFields"] = array();

$tdataleaveremarks2[".inlineEditFields"] = array();

$tdataleaveremarks2[".updateSelectedFields"] = array();


$tdataleaveremarks2[".exportFields"] = array();
$tdataleaveremarks2[".exportFields"][] = "LRID";
$tdataleaveremarks2[".exportFields"][] = "LRDate";
$tdataleaveremarks2[".exportFields"][] = "Remarks";
$tdataleaveremarks2[".exportFields"][] = "LogID";
$tdataleaveremarks2[".exportFields"][] = "LvID";
$tdataleaveremarks2[".exportFields"][] = "Superior";
$tdataleaveremarks2[".exportFields"][] = "Superior2";

$tdataleaveremarks2[".importFields"] = array();

$tdataleaveremarks2[".printFields"] = array();
$tdataleaveremarks2[".printFields"][] = "LRID";
$tdataleaveremarks2[".printFields"][] = "LRDate";
$tdataleaveremarks2[".printFields"][] = "Remarks";
$tdataleaveremarks2[".printFields"][] = "LogID";
$tdataleaveremarks2[".printFields"][] = "LvID";
$tdataleaveremarks2[".printFields"][] = "Superior";
$tdataleaveremarks2[".printFields"][] = "Superior2";


//	LRID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LRID";
	$fdata["GoodName"] = "LRID";
	$fdata["ownerTable"] = "leaveremarks";
	$fdata["Label"] = GetFieldLabel("leaveremarks2","LRID");
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




	$tdataleaveremarks2["LRID"] = $fdata;
//	LRDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "LRDate";
	$fdata["GoodName"] = "LRDate";
	$fdata["ownerTable"] = "leaveremarks";
	$fdata["Label"] = GetFieldLabel("leaveremarks2","LRDate");
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




	$tdataleaveremarks2["LRDate"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "leaveremarks";
	$fdata["Label"] = GetFieldLabel("leaveremarks2","Remarks");
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




	$tdataleaveremarks2["Remarks"] = $fdata;
//	LogID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "LogID";
	$fdata["GoodName"] = "LogID";
	$fdata["ownerTable"] = "leaveremarks";
	$fdata["Label"] = GetFieldLabel("leaveremarks2","LogID");
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




	$tdataleaveremarks2["LogID"] = $fdata;
//	LvID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "LvID";
	$fdata["GoodName"] = "LvID";
	$fdata["ownerTable"] = "leaveremarks";
	$fdata["Label"] = GetFieldLabel("leaveremarks2","LvID");
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




	$tdataleaveremarks2["LvID"] = $fdata;
//	Superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Superior";
	$fdata["GoodName"] = "Superior";
	$fdata["ownerTable"] = "leaveremarks";
	$fdata["Label"] = GetFieldLabel("leaveremarks2","Superior");
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




	$tdataleaveremarks2["Superior"] = $fdata;
//	Superior2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Superior2";
	$fdata["GoodName"] = "Superior2";
	$fdata["ownerTable"] = "leaveremarks";
	$fdata["Label"] = GetFieldLabel("leaveremarks2","Superior2");
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




	$tdataleaveremarks2["Superior2"] = $fdata;


$tables_data["leaveremarks2"]=&$tdataleaveremarks2;
$field_labels["leaveremarks2"] = &$fieldLabelsleaveremarks2;
$fieldToolTips["leaveremarks2"] = &$fieldToolTipsleaveremarks2;
$placeHolders["leaveremarks2"] = &$placeHoldersleaveremarks2;
$page_titles["leaveremarks2"] = &$pageTitlesleaveremarks2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["leaveremarks2"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["leaveremarks2"] = array();


	
				$strOriginalDetailsTable="leaves";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="leavesapp2";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "leavesapp2";
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
					$masterTablesData["leaveremarks2"][0] = $masterParams;
				$masterTablesData["leaveremarks2"][0]["masterKeys"] = array();
	$masterTablesData["leaveremarks2"][0]["masterKeys"][]="LvID";
				$masterTablesData["leaveremarks2"][0]["masterKeys"][]="Superior";
				$masterTablesData["leaveremarks2"][0]["masterKeys"][]="Superior2";
				$masterTablesData["leaveremarks2"][0]["detailKeys"] = array();
	$masterTablesData["leaveremarks2"][0]["detailKeys"][]="LvID";
				$masterTablesData["leaveremarks2"][0]["detailKeys"][]="Superior";
				$masterTablesData["leaveremarks2"][0]["detailKeys"][]="Superior2";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_leaveremarks2()
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
	"m_srcTableName" => "leaveremarks2"
));

$proto6["m_sql"] = "LRID";
$proto6["m_srcTableName"] = "leaveremarks2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "LRDate",
	"m_strTable" => "leaveremarks",
	"m_srcTableName" => "leaveremarks2"
));

$proto8["m_sql"] = "LRDate";
$proto8["m_srcTableName"] = "leaveremarks2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "leaveremarks",
	"m_srcTableName" => "leaveremarks2"
));

$proto10["m_sql"] = "Remarks";
$proto10["m_srcTableName"] = "leaveremarks2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "LogID",
	"m_strTable" => "leaveremarks",
	"m_srcTableName" => "leaveremarks2"
));

$proto12["m_sql"] = "LogID";
$proto12["m_srcTableName"] = "leaveremarks2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "LvID",
	"m_strTable" => "leaveremarks",
	"m_srcTableName" => "leaveremarks2"
));

$proto14["m_sql"] = "LvID";
$proto14["m_srcTableName"] = "leaveremarks2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior",
	"m_strTable" => "leaveremarks",
	"m_srcTableName" => "leaveremarks2"
));

$proto16["m_sql"] = "Superior";
$proto16["m_srcTableName"] = "leaveremarks2";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior2",
	"m_strTable" => "leaveremarks",
	"m_srcTableName" => "leaveremarks2"
));

$proto18["m_sql"] = "Superior2";
$proto18["m_srcTableName"] = "leaveremarks2";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "leaveremarks";
$proto21["m_srcTableName"] = "leaveremarks2";
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
$proto20["m_srcTableName"] = "leaveremarks2";
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
$proto0["m_srcTableName"]="leaveremarks2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_leaveremarks2 = createSqlQuery_leaveremarks2();


	
		;

							

$tdataleaveremarks2[".sqlquery"] = $queryData_leaveremarks2;

include_once(getabspath("include/leaveremarks2_events.php"));
$tableEvents["leaveremarks2"] = new eventclass_leaveremarks2;
$tdataleaveremarks2[".hasEvents"] = true;

?>