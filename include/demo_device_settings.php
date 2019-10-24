<?php
require_once(getabspath("classes/cipherer.php"));




$tdatademo_device = array();
	$tdatademo_device[".truncateText"] = true;
	$tdatademo_device[".NumberOfChars"] = 80;
	$tdatademo_device[".ShortName"] = "demo_device";
	$tdatademo_device[".OwnerID"] = "";
	$tdatademo_device[".OriginalTable"] = "demo_device";

//	field labels
$fieldLabelsdemo_device = array();
$fieldToolTipsdemo_device = array();
$pageTitlesdemo_device = array();
$placeHoldersdemo_device = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdemo_device["English"] = array();
	$fieldToolTipsdemo_device["English"] = array();
	$placeHoldersdemo_device["English"] = array();
	$pageTitlesdemo_device["English"] = array();
	$fieldLabelsdemo_device["English"]["device_name"] = "Device Name";
	$fieldToolTipsdemo_device["English"]["device_name"] = "";
	$placeHoldersdemo_device["English"]["device_name"] = "";
	$fieldLabelsdemo_device["English"]["sn"] = "Sn";
	$fieldToolTipsdemo_device["English"]["sn"] = "";
	$placeHoldersdemo_device["English"]["sn"] = "";
	$fieldLabelsdemo_device["English"]["vc"] = "Vc";
	$fieldToolTipsdemo_device["English"]["vc"] = "";
	$placeHoldersdemo_device["English"]["vc"] = "";
	$fieldLabelsdemo_device["English"]["ac"] = "Ac";
	$fieldToolTipsdemo_device["English"]["ac"] = "";
	$placeHoldersdemo_device["English"]["ac"] = "";
	$fieldLabelsdemo_device["English"]["vkey"] = "Vkey";
	$fieldToolTipsdemo_device["English"]["vkey"] = "";
	$placeHoldersdemo_device["English"]["vkey"] = "";
	if (count($fieldToolTipsdemo_device["English"]))
		$tdatademo_device[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdemo_device[""] = array();
	$fieldToolTipsdemo_device[""] = array();
	$placeHoldersdemo_device[""] = array();
	$pageTitlesdemo_device[""] = array();
	if (count($fieldToolTipsdemo_device[""]))
		$tdatademo_device[".isUseToolTips"] = true;
}


	$tdatademo_device[".NCSearch"] = true;



$tdatademo_device[".shortTableName"] = "demo_device";
$tdatademo_device[".nSecOptions"] = 0;
$tdatademo_device[".recsPerRowPrint"] = 1;
$tdatademo_device[".mainTableOwnerID"] = "";
$tdatademo_device[".moveNext"] = 1;
$tdatademo_device[".entityType"] = 0;

$tdatademo_device[".strOriginalTableName"] = "demo_device";

	



$tdatademo_device[".showAddInPopup"] = false;

$tdatademo_device[".showEditInPopup"] = false;

$tdatademo_device[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatademo_device[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatademo_device[".fieldsForRegister"] = array();

$tdatademo_device[".listAjax"] = false;

	$tdatademo_device[".audit"] = false;

	$tdatademo_device[".locking"] = false;

$tdatademo_device[".edit"] = true;
$tdatademo_device[".afterEditAction"] = 1;
$tdatademo_device[".closePopupAfterEdit"] = 1;
$tdatademo_device[".afterEditActionDetTable"] = "";

$tdatademo_device[".add"] = true;
$tdatademo_device[".afterAddAction"] = 1;
$tdatademo_device[".closePopupAfterAdd"] = 1;
$tdatademo_device[".afterAddActionDetTable"] = "";

$tdatademo_device[".list"] = true;

$tdatademo_device[".inlineEdit"] = true;


$tdatademo_device[".reorderRecordsByHeader"] = true;


$tdatademo_device[".exportFormatting"] = 2;
$tdatademo_device[".exportDelimiter"] = ",";
		
$tdatademo_device[".inlineAdd"] = true;
$tdatademo_device[".view"] = true;

$tdatademo_device[".import"] = true;

$tdatademo_device[".exportTo"] = true;

$tdatademo_device[".printFriendly"] = true;

$tdatademo_device[".delete"] = true;

$tdatademo_device[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatademo_device[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatademo_device[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatademo_device[".searchSaving"] = false;
//

$tdatademo_device[".showSearchPanel"] = true;
		$tdatademo_device[".flexibleSearch"] = true;

$tdatademo_device[".isUseAjaxSuggest"] = true;

$tdatademo_device[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																											

$tdatademo_device[".ajaxCodeSnippetAdded"] = false;

$tdatademo_device[".buttonsAdded"] = false;

$tdatademo_device[".addPageEvents"] = false;

// use timepicker for search panel
$tdatademo_device[".isUseTimeForSearch"] = false;



$tdatademo_device[".badgeColor"] = "2F4F4F";


$tdatademo_device[".allSearchFields"] = array();
$tdatademo_device[".filterFields"] = array();
$tdatademo_device[".requiredSearchFields"] = array();

$tdatademo_device[".allSearchFields"][] = "device_name";
	$tdatademo_device[".allSearchFields"][] = "sn";
	$tdatademo_device[".allSearchFields"][] = "vc";
	$tdatademo_device[".allSearchFields"][] = "ac";
	$tdatademo_device[".allSearchFields"][] = "vkey";
	

$tdatademo_device[".googleLikeFields"] = array();
$tdatademo_device[".googleLikeFields"][] = "device_name";
$tdatademo_device[".googleLikeFields"][] = "sn";
$tdatademo_device[".googleLikeFields"][] = "vc";
$tdatademo_device[".googleLikeFields"][] = "ac";
$tdatademo_device[".googleLikeFields"][] = "vkey";


$tdatademo_device[".advSearchFields"] = array();
$tdatademo_device[".advSearchFields"][] = "device_name";
$tdatademo_device[".advSearchFields"][] = "sn";
$tdatademo_device[".advSearchFields"][] = "vc";
$tdatademo_device[".advSearchFields"][] = "ac";
$tdatademo_device[".advSearchFields"][] = "vkey";

$tdatademo_device[".tableType"] = "list";

$tdatademo_device[".printerPageOrientation"] = 0;
$tdatademo_device[".nPrinterPageScale"] = 100;

$tdatademo_device[".nPrinterSplitRecords"] = 40;

$tdatademo_device[".nPrinterPDFSplitRecords"] = 40;



$tdatademo_device[".geocodingEnabled"] = false;





$tdatademo_device[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatademo_device[".pageSize"] = 20;

$tdatademo_device[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatademo_device[".strOrderBy"] = $tstrOrderBy;

$tdatademo_device[".orderindexes"] = array();

$tdatademo_device[".sqlHead"] = "SELECT device_name,  	sn,  	vc,  	ac,  	vkey";
$tdatademo_device[".sqlFrom"] = "FROM demo_device";
$tdatademo_device[".sqlWhereExpr"] = "";
$tdatademo_device[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatademo_device[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatademo_device[".arrGroupsPerPage"] = $arrGPP;

$tdatademo_device[".highlightSearchResults"] = true;

$tableKeysdemo_device = array();
$tableKeysdemo_device[] = "sn";
$tdatademo_device[".Keys"] = $tableKeysdemo_device;

$tdatademo_device[".listFields"] = array();
$tdatademo_device[".listFields"][] = "device_name";
$tdatademo_device[".listFields"][] = "sn";
$tdatademo_device[".listFields"][] = "vc";
$tdatademo_device[".listFields"][] = "ac";
$tdatademo_device[".listFields"][] = "vkey";

$tdatademo_device[".hideMobileList"] = array();


$tdatademo_device[".viewFields"] = array();
$tdatademo_device[".viewFields"][] = "device_name";
$tdatademo_device[".viewFields"][] = "sn";
$tdatademo_device[".viewFields"][] = "vc";
$tdatademo_device[".viewFields"][] = "ac";
$tdatademo_device[".viewFields"][] = "vkey";

$tdatademo_device[".addFields"] = array();
$tdatademo_device[".addFields"][] = "device_name";
$tdatademo_device[".addFields"][] = "sn";
$tdatademo_device[".addFields"][] = "vc";
$tdatademo_device[".addFields"][] = "ac";
$tdatademo_device[".addFields"][] = "vkey";

$tdatademo_device[".masterListFields"] = array();
$tdatademo_device[".masterListFields"][] = "device_name";
$tdatademo_device[".masterListFields"][] = "sn";
$tdatademo_device[".masterListFields"][] = "vc";
$tdatademo_device[".masterListFields"][] = "ac";
$tdatademo_device[".masterListFields"][] = "vkey";

$tdatademo_device[".inlineAddFields"] = array();
$tdatademo_device[".inlineAddFields"][] = "device_name";
$tdatademo_device[".inlineAddFields"][] = "sn";
$tdatademo_device[".inlineAddFields"][] = "vc";
$tdatademo_device[".inlineAddFields"][] = "ac";
$tdatademo_device[".inlineAddFields"][] = "vkey";

$tdatademo_device[".editFields"] = array();
$tdatademo_device[".editFields"][] = "device_name";
$tdatademo_device[".editFields"][] = "sn";
$tdatademo_device[".editFields"][] = "vc";
$tdatademo_device[".editFields"][] = "ac";
$tdatademo_device[".editFields"][] = "vkey";

$tdatademo_device[".inlineEditFields"] = array();
$tdatademo_device[".inlineEditFields"][] = "device_name";
$tdatademo_device[".inlineEditFields"][] = "sn";
$tdatademo_device[".inlineEditFields"][] = "vc";
$tdatademo_device[".inlineEditFields"][] = "ac";
$tdatademo_device[".inlineEditFields"][] = "vkey";

$tdatademo_device[".updateSelectedFields"] = array();
$tdatademo_device[".updateSelectedFields"][] = "device_name";
$tdatademo_device[".updateSelectedFields"][] = "sn";
$tdatademo_device[".updateSelectedFields"][] = "vc";
$tdatademo_device[".updateSelectedFields"][] = "ac";
$tdatademo_device[".updateSelectedFields"][] = "vkey";


$tdatademo_device[".exportFields"] = array();
$tdatademo_device[".exportFields"][] = "device_name";
$tdatademo_device[".exportFields"][] = "sn";
$tdatademo_device[".exportFields"][] = "vc";
$tdatademo_device[".exportFields"][] = "ac";
$tdatademo_device[".exportFields"][] = "vkey";

$tdatademo_device[".importFields"] = array();
$tdatademo_device[".importFields"][] = "device_name";
$tdatademo_device[".importFields"][] = "sn";
$tdatademo_device[".importFields"][] = "vc";
$tdatademo_device[".importFields"][] = "ac";
$tdatademo_device[".importFields"][] = "vkey";

$tdatademo_device[".printFields"] = array();
$tdatademo_device[".printFields"][] = "device_name";
$tdatademo_device[".printFields"][] = "sn";
$tdatademo_device[".printFields"][] = "vc";
$tdatademo_device[".printFields"][] = "ac";
$tdatademo_device[".printFields"][] = "vkey";


//	device_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "device_name";
	$fdata["GoodName"] = "device_name";
	$fdata["ownerTable"] = "demo_device";
	$fdata["Label"] = GetFieldLabel("demo_device","device_name");
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

		$fdata["strField"] = "device_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "device_name";

	
	
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




	$tdatademo_device["device_name"] = $fdata;
//	sn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sn";
	$fdata["GoodName"] = "sn";
	$fdata["ownerTable"] = "demo_device";
	$fdata["Label"] = GetFieldLabel("demo_device","sn");
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

		$fdata["strField"] = "sn";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sn";

	
	
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




	$tdatademo_device["sn"] = $fdata;
//	vc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vc";
	$fdata["GoodName"] = "vc";
	$fdata["ownerTable"] = "demo_device";
	$fdata["Label"] = GetFieldLabel("demo_device","vc");
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

		$fdata["strField"] = "vc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vc";

	
	
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




	$tdatademo_device["vc"] = $fdata;
//	ac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ac";
	$fdata["GoodName"] = "ac";
	$fdata["ownerTable"] = "demo_device";
	$fdata["Label"] = GetFieldLabel("demo_device","ac");
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

		$fdata["strField"] = "ac";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ac";

	
	
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




	$tdatademo_device["ac"] = $fdata;
//	vkey
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "vkey";
	$fdata["GoodName"] = "vkey";
	$fdata["ownerTable"] = "demo_device";
	$fdata["Label"] = GetFieldLabel("demo_device","vkey");
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

		$fdata["strField"] = "vkey";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vkey";

	
	
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




	$tdatademo_device["vkey"] = $fdata;


$tables_data["demo_device"]=&$tdatademo_device;
$field_labels["demo_device"] = &$fieldLabelsdemo_device;
$fieldToolTips["demo_device"] = &$fieldToolTipsdemo_device;
$placeHolders["demo_device"] = &$placeHoldersdemo_device;
$page_titles["demo_device"] = &$pageTitlesdemo_device;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["demo_device"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["demo_device"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_demo_device()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "device_name,  	sn,  	vc,  	ac,  	vkey";
$proto0["m_strFrom"] = "FROM demo_device";
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
	"m_strName" => "device_name",
	"m_strTable" => "demo_device",
	"m_srcTableName" => "demo_device"
));

$proto6["m_sql"] = "device_name";
$proto6["m_srcTableName"] = "demo_device";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sn",
	"m_strTable" => "demo_device",
	"m_srcTableName" => "demo_device"
));

$proto8["m_sql"] = "sn";
$proto8["m_srcTableName"] = "demo_device";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vc",
	"m_strTable" => "demo_device",
	"m_srcTableName" => "demo_device"
));

$proto10["m_sql"] = "vc";
$proto10["m_srcTableName"] = "demo_device";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ac",
	"m_strTable" => "demo_device",
	"m_srcTableName" => "demo_device"
));

$proto12["m_sql"] = "ac";
$proto12["m_srcTableName"] = "demo_device";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "vkey",
	"m_strTable" => "demo_device",
	"m_srcTableName" => "demo_device"
));

$proto14["m_sql"] = "vkey";
$proto14["m_srcTableName"] = "demo_device";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "demo_device";
$proto17["m_srcTableName"] = "demo_device";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "device_name";
$proto17["m_columns"][] = "sn";
$proto17["m_columns"][] = "vc";
$proto17["m_columns"][] = "ac";
$proto17["m_columns"][] = "vkey";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "demo_device";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "demo_device";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="demo_device";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_demo_device = createSqlQuery_demo_device();


	
		;

					

$tdatademo_device[".sqlquery"] = $queryData_demo_device;

$tableEvents["demo_device"] = new eventsBase;
$tdatademo_device[".hasEvents"] = false;

?>