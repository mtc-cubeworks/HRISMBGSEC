<?php
require_once(getabspath("classes/cipherer.php"));




$tdataearningsposted = array();
	$tdataearningsposted[".truncateText"] = true;
	$tdataearningsposted[".NumberOfChars"] = 80;
	$tdataearningsposted[".ShortName"] = "earningsposted";
	$tdataearningsposted[".OwnerID"] = "";
	$tdataearningsposted[".OriginalTable"] = "earningsposted";

//	field labels
$fieldLabelsearningsposted = array();
$fieldToolTipsearningsposted = array();
$pageTitlesearningsposted = array();
$placeHoldersearningsposted = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsearningsposted["English"] = array();
	$fieldToolTipsearningsposted["English"] = array();
	$placeHoldersearningsposted["English"] = array();
	$pageTitlesearningsposted["English"] = array();
	$fieldLabelsearningsposted["English"]["PPtabID"] = "PPtab ID";
	$fieldToolTipsearningsposted["English"]["PPtabID"] = "";
	$placeHoldersearningsposted["English"]["PPtabID"] = "";
	$fieldLabelsearningsposted["English"]["Earning"] = "Earning";
	$fieldToolTipsearningsposted["English"]["Earning"] = "";
	$placeHoldersearningsposted["English"]["Earning"] = "";
	$fieldLabelsearningsposted["English"]["NetTime"] = "Net Time";
	$fieldToolTipsearningsposted["English"]["NetTime"] = "";
	$placeHoldersearningsposted["English"]["NetTime"] = "";
	$fieldLabelsearningsposted["English"]["Amount"] = "Amount";
	$fieldToolTipsearningsposted["English"]["Amount"] = "";
	$placeHoldersearningsposted["English"]["Amount"] = "";
	$fieldLabelsearningsposted["English"]["PPID"] = "PPID";
	$fieldToolTipsearningsposted["English"]["PPID"] = "";
	$placeHoldersearningsposted["English"]["PPID"] = "";
	if (count($fieldToolTipsearningsposted["English"]))
		$tdataearningsposted[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsearningsposted[""] = array();
	$fieldToolTipsearningsposted[""] = array();
	$placeHoldersearningsposted[""] = array();
	$pageTitlesearningsposted[""] = array();
	$fieldLabelsearningsposted[""]["PPtabID"] = "PPtab ID";
	$fieldToolTipsearningsposted[""]["PPtabID"] = "";
	$placeHoldersearningsposted[""]["PPtabID"] = "";
	$fieldLabelsearningsposted[""]["Earning"] = "Earning";
	$fieldToolTipsearningsposted[""]["Earning"] = "";
	$placeHoldersearningsposted[""]["Earning"] = "";
	$fieldLabelsearningsposted[""]["NetTime"] = "Net Time";
	$fieldToolTipsearningsposted[""]["NetTime"] = "";
	$placeHoldersearningsposted[""]["NetTime"] = "";
	$fieldLabelsearningsposted[""]["Amount"] = "Amount";
	$fieldToolTipsearningsposted[""]["Amount"] = "";
	$placeHoldersearningsposted[""]["Amount"] = "";
	$fieldLabelsearningsposted[""]["PPID"] = "PPID";
	$fieldToolTipsearningsposted[""]["PPID"] = "";
	$placeHoldersearningsposted[""]["PPID"] = "";
	if (count($fieldToolTipsearningsposted[""]))
		$tdataearningsposted[".isUseToolTips"] = true;
}


	$tdataearningsposted[".NCSearch"] = true;



$tdataearningsposted[".shortTableName"] = "earningsposted";
$tdataearningsposted[".nSecOptions"] = 0;
$tdataearningsposted[".recsPerRowPrint"] = 1;
$tdataearningsposted[".mainTableOwnerID"] = "";
$tdataearningsposted[".moveNext"] = 1;
$tdataearningsposted[".entityType"] = 0;

$tdataearningsposted[".strOriginalTableName"] = "earningsposted";

	



$tdataearningsposted[".showAddInPopup"] = false;

$tdataearningsposted[".showEditInPopup"] = false;

$tdataearningsposted[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataearningsposted[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataearningsposted[".fieldsForRegister"] = array();

$tdataearningsposted[".listAjax"] = false;

	$tdataearningsposted[".audit"] = false;

	$tdataearningsposted[".locking"] = false;

$tdataearningsposted[".edit"] = true;
$tdataearningsposted[".afterEditAction"] = 1;
$tdataearningsposted[".closePopupAfterEdit"] = 1;
$tdataearningsposted[".afterEditActionDetTable"] = "";

$tdataearningsposted[".add"] = true;
$tdataearningsposted[".afterAddAction"] = 1;
$tdataearningsposted[".closePopupAfterAdd"] = 1;
$tdataearningsposted[".afterAddActionDetTable"] = "";

$tdataearningsposted[".list"] = true;



$tdataearningsposted[".reorderRecordsByHeader"] = true;


$tdataearningsposted[".exportFormatting"] = 2;
$tdataearningsposted[".exportDelimiter"] = ",";
		
$tdataearningsposted[".view"] = true;

$tdataearningsposted[".import"] = true;

$tdataearningsposted[".exportTo"] = true;

$tdataearningsposted[".printFriendly"] = true;

$tdataearningsposted[".delete"] = true;

$tdataearningsposted[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataearningsposted[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataearningsposted[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataearningsposted[".searchSaving"] = false;
//

$tdataearningsposted[".showSearchPanel"] = true;
		$tdataearningsposted[".flexibleSearch"] = true;

$tdataearningsposted[".isUseAjaxSuggest"] = true;

$tdataearningsposted[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																												

$tdataearningsposted[".ajaxCodeSnippetAdded"] = false;

$tdataearningsposted[".buttonsAdded"] = false;

$tdataearningsposted[".addPageEvents"] = false;

// use timepicker for search panel
$tdataearningsposted[".isUseTimeForSearch"] = false;



$tdataearningsposted[".badgeColor"] = "bc8f8f";


$tdataearningsposted[".allSearchFields"] = array();
$tdataearningsposted[".filterFields"] = array();
$tdataearningsposted[".requiredSearchFields"] = array();

$tdataearningsposted[".allSearchFields"][] = "PPtabID";
	$tdataearningsposted[".allSearchFields"][] = "Earning";
	$tdataearningsposted[".allSearchFields"][] = "NetTime";
	$tdataearningsposted[".allSearchFields"][] = "Amount";
	$tdataearningsposted[".allSearchFields"][] = "PPID";
	

$tdataearningsposted[".googleLikeFields"] = array();
$tdataearningsposted[".googleLikeFields"][] = "PPtabID";
$tdataearningsposted[".googleLikeFields"][] = "Earning";
$tdataearningsposted[".googleLikeFields"][] = "NetTime";
$tdataearningsposted[".googleLikeFields"][] = "Amount";
$tdataearningsposted[".googleLikeFields"][] = "PPID";


$tdataearningsposted[".advSearchFields"] = array();
$tdataearningsposted[".advSearchFields"][] = "PPtabID";
$tdataearningsposted[".advSearchFields"][] = "Earning";
$tdataearningsposted[".advSearchFields"][] = "NetTime";
$tdataearningsposted[".advSearchFields"][] = "Amount";
$tdataearningsposted[".advSearchFields"][] = "PPID";

$tdataearningsposted[".tableType"] = "list";

$tdataearningsposted[".printerPageOrientation"] = 0;
$tdataearningsposted[".nPrinterPageScale"] = 100;

$tdataearningsposted[".nPrinterSplitRecords"] = 40;

$tdataearningsposted[".nPrinterPDFSplitRecords"] = 40;



$tdataearningsposted[".geocodingEnabled"] = false;





$tdataearningsposted[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataearningsposted[".pageSize"] = 20;

$tdataearningsposted[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataearningsposted[".strOrderBy"] = $tstrOrderBy;

$tdataearningsposted[".orderindexes"] = array();

$tdataearningsposted[".sqlHead"] = "SELECT PPtabID,  	Earning,  	NetTime,  	Amount,  	PPID";
$tdataearningsposted[".sqlFrom"] = "FROM earningsposted";
$tdataearningsposted[".sqlWhereExpr"] = "";
$tdataearningsposted[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataearningsposted[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataearningsposted[".arrGroupsPerPage"] = $arrGPP;

$tdataearningsposted[".highlightSearchResults"] = true;

$tableKeysearningsposted = array();
$tableKeysearningsposted[] = "PPtabID";
$tdataearningsposted[".Keys"] = $tableKeysearningsposted;

$tdataearningsposted[".listFields"] = array();
$tdataearningsposted[".listFields"][] = "PPtabID";
$tdataearningsposted[".listFields"][] = "Earning";
$tdataearningsposted[".listFields"][] = "NetTime";
$tdataearningsposted[".listFields"][] = "Amount";
$tdataearningsposted[".listFields"][] = "PPID";

$tdataearningsposted[".hideMobileList"] = array();


$tdataearningsposted[".viewFields"] = array();
$tdataearningsposted[".viewFields"][] = "PPtabID";
$tdataearningsposted[".viewFields"][] = "Earning";
$tdataearningsposted[".viewFields"][] = "NetTime";
$tdataearningsposted[".viewFields"][] = "Amount";
$tdataearningsposted[".viewFields"][] = "PPID";

$tdataearningsposted[".addFields"] = array();
$tdataearningsposted[".addFields"][] = "Earning";
$tdataearningsposted[".addFields"][] = "NetTime";
$tdataearningsposted[".addFields"][] = "Amount";
$tdataearningsposted[".addFields"][] = "PPID";

$tdataearningsposted[".masterListFields"] = array();
$tdataearningsposted[".masterListFields"][] = "PPtabID";
$tdataearningsposted[".masterListFields"][] = "Earning";
$tdataearningsposted[".masterListFields"][] = "NetTime";
$tdataearningsposted[".masterListFields"][] = "Amount";
$tdataearningsposted[".masterListFields"][] = "PPID";

$tdataearningsposted[".inlineAddFields"] = array();
$tdataearningsposted[".inlineAddFields"][] = "Earning";
$tdataearningsposted[".inlineAddFields"][] = "NetTime";
$tdataearningsposted[".inlineAddFields"][] = "Amount";
$tdataearningsposted[".inlineAddFields"][] = "PPID";

$tdataearningsposted[".editFields"] = array();
$tdataearningsposted[".editFields"][] = "Earning";
$tdataearningsposted[".editFields"][] = "NetTime";
$tdataearningsposted[".editFields"][] = "Amount";
$tdataearningsposted[".editFields"][] = "PPID";

$tdataearningsposted[".inlineEditFields"] = array();
$tdataearningsposted[".inlineEditFields"][] = "Earning";
$tdataearningsposted[".inlineEditFields"][] = "NetTime";
$tdataearningsposted[".inlineEditFields"][] = "Amount";
$tdataearningsposted[".inlineEditFields"][] = "PPID";

$tdataearningsposted[".updateSelectedFields"] = array();
$tdataearningsposted[".updateSelectedFields"][] = "Earning";
$tdataearningsposted[".updateSelectedFields"][] = "NetTime";
$tdataearningsposted[".updateSelectedFields"][] = "Amount";
$tdataearningsposted[".updateSelectedFields"][] = "PPID";


$tdataearningsposted[".exportFields"] = array();
$tdataearningsposted[".exportFields"][] = "PPtabID";
$tdataearningsposted[".exportFields"][] = "Earning";
$tdataearningsposted[".exportFields"][] = "NetTime";
$tdataearningsposted[".exportFields"][] = "Amount";
$tdataearningsposted[".exportFields"][] = "PPID";

$tdataearningsposted[".importFields"] = array();
$tdataearningsposted[".importFields"][] = "PPtabID";
$tdataearningsposted[".importFields"][] = "Earning";
$tdataearningsposted[".importFields"][] = "NetTime";
$tdataearningsposted[".importFields"][] = "Amount";
$tdataearningsposted[".importFields"][] = "PPID";

$tdataearningsposted[".printFields"] = array();
$tdataearningsposted[".printFields"][] = "PPtabID";
$tdataearningsposted[".printFields"][] = "Earning";
$tdataearningsposted[".printFields"][] = "NetTime";
$tdataearningsposted[".printFields"][] = "Amount";
$tdataearningsposted[".printFields"][] = "PPID";


//	PPtabID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PPtabID";
	$fdata["GoodName"] = "PPtabID";
	$fdata["ownerTable"] = "earningsposted";
	$fdata["Label"] = GetFieldLabel("earningsposted","PPtabID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PPtabID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PPtabID";

	
	
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




	$tdataearningsposted["PPtabID"] = $fdata;
//	Earning
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Earning";
	$fdata["GoodName"] = "Earning";
	$fdata["ownerTable"] = "earningsposted";
	$fdata["Label"] = GetFieldLabel("earningsposted","Earning");
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

		$fdata["strField"] = "Earning";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Earning";

	
	
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




	$tdataearningsposted["Earning"] = $fdata;
//	NetTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NetTime";
	$fdata["GoodName"] = "NetTime";
	$fdata["ownerTable"] = "earningsposted";
	$fdata["Label"] = GetFieldLabel("earningsposted","NetTime");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "NetTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NetTime";

	
	
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




	$tdataearningsposted["NetTime"] = $fdata;
//	Amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Amount";
	$fdata["GoodName"] = "Amount";
	$fdata["ownerTable"] = "earningsposted";
	$fdata["Label"] = GetFieldLabel("earningsposted","Amount");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "Amount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Amount";

	
	
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




	$tdataearningsposted["Amount"] = $fdata;
//	PPID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PPID";
	$fdata["GoodName"] = "PPID";
	$fdata["ownerTable"] = "earningsposted";
	$fdata["Label"] = GetFieldLabel("earningsposted","PPID");
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

		$fdata["strField"] = "PPID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PPID";

	
	
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




	$tdataearningsposted["PPID"] = $fdata;


$tables_data["earningsposted"]=&$tdataearningsposted;
$field_labels["earningsposted"] = &$fieldLabelsearningsposted;
$fieldToolTips["earningsposted"] = &$fieldToolTipsearningsposted;
$placeHolders["earningsposted"] = &$placeHoldersearningsposted;
$page_titles["earningsposted"] = &$pageTitlesearningsposted;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["earningsposted"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["earningsposted"] = array();


	
				$strOriginalDetailsTable="payslipposted";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="payslipposted";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "payslipposted";
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
					$masterTablesData["earningsposted"][0] = $masterParams;
				$masterTablesData["earningsposted"][0]["masterKeys"] = array();
	$masterTablesData["earningsposted"][0]["masterKeys"][]="PPID";
				$masterTablesData["earningsposted"][0]["detailKeys"] = array();
	$masterTablesData["earningsposted"][0]["detailKeys"][]="PPID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_earningsposted()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PPtabID,  	Earning,  	NetTime,  	Amount,  	PPID";
$proto0["m_strFrom"] = "FROM earningsposted";
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
	"m_strName" => "PPtabID",
	"m_strTable" => "earningsposted",
	"m_srcTableName" => "earningsposted"
));

$proto6["m_sql"] = "PPtabID";
$proto6["m_srcTableName"] = "earningsposted";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Earning",
	"m_strTable" => "earningsposted",
	"m_srcTableName" => "earningsposted"
));

$proto8["m_sql"] = "Earning";
$proto8["m_srcTableName"] = "earningsposted";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NetTime",
	"m_strTable" => "earningsposted",
	"m_srcTableName" => "earningsposted"
));

$proto10["m_sql"] = "NetTime";
$proto10["m_srcTableName"] = "earningsposted";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount",
	"m_strTable" => "earningsposted",
	"m_srcTableName" => "earningsposted"
));

$proto12["m_sql"] = "Amount";
$proto12["m_srcTableName"] = "earningsposted";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PPID",
	"m_strTable" => "earningsposted",
	"m_srcTableName" => "earningsposted"
));

$proto14["m_sql"] = "PPID";
$proto14["m_srcTableName"] = "earningsposted";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "earningsposted";
$proto17["m_srcTableName"] = "earningsposted";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "PPtabID";
$proto17["m_columns"][] = "Earning";
$proto17["m_columns"][] = "NetTime";
$proto17["m_columns"][] = "Amount";
$proto17["m_columns"][] = "PPID";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "earningsposted";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "earningsposted";
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
$proto0["m_srcTableName"]="earningsposted";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_earningsposted = createSqlQuery_earningsposted();


	
		;

					

$tdataearningsposted[".sqlquery"] = $queryData_earningsposted;

$tableEvents["earningsposted"] = new eventsBase;
$tdataearningsposted[".hasEvents"] = false;

?>