<?php
require_once(getabspath("classes/cipherer.php"));




$tdatassscontsummary = array();
	$tdatassscontsummary[".truncateText"] = true;
	$tdatassscontsummary[".NumberOfChars"] = 80;
	$tdatassscontsummary[".ShortName"] = "ssscontsummary";
	$tdatassscontsummary[".OwnerID"] = "PreparedBy";
	$tdatassscontsummary[".OriginalTable"] = "ssscontsummary";

//	field labels
$fieldLabelsssscontsummary = array();
$fieldToolTipsssscontsummary = array();
$pageTitlesssscontsummary = array();
$placeHoldersssscontsummary = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsssscontsummary["English"] = array();
	$fieldToolTipsssscontsummary["English"] = array();
	$placeHoldersssscontsummary["English"] = array();
	$pageTitlesssscontsummary["English"] = array();
	$fieldLabelsssscontsummary["English"]["ContID"] = "Cont ID";
	$fieldToolTipsssscontsummary["English"]["ContID"] = "";
	$placeHoldersssscontsummary["English"]["ContID"] = "";
	$fieldLabelsssscontsummary["English"]["Employer"] = "Employer";
	$fieldToolTipsssscontsummary["English"]["Employer"] = "";
	$placeHoldersssscontsummary["English"]["Employer"] = "";
	$fieldLabelsssscontsummary["English"]["FromDate"] = "From Date";
	$fieldToolTipsssscontsummary["English"]["FromDate"] = "";
	$placeHoldersssscontsummary["English"]["FromDate"] = "";
	$fieldLabelsssscontsummary["English"]["ToDate"] = "To Date";
	$fieldToolTipsssscontsummary["English"]["ToDate"] = "";
	$placeHoldersssscontsummary["English"]["ToDate"] = "";
	$fieldLabelsssscontsummary["English"]["PreparedBy"] = "Prepared By";
	$fieldToolTipsssscontsummary["English"]["PreparedBy"] = "";
	$placeHoldersssscontsummary["English"]["PreparedBy"] = "";
	$fieldLabelsssscontsummary["English"]["PSID"] = "PSID";
	$fieldToolTipsssscontsummary["English"]["PSID"] = "";
	$placeHoldersssscontsummary["English"]["PSID"] = "";
	if (count($fieldToolTipsssscontsummary["English"]))
		$tdatassscontsummary[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsssscontsummary[""] = array();
	$fieldToolTipsssscontsummary[""] = array();
	$placeHoldersssscontsummary[""] = array();
	$pageTitlesssscontsummary[""] = array();
	if (count($fieldToolTipsssscontsummary[""]))
		$tdatassscontsummary[".isUseToolTips"] = true;
}


	$tdatassscontsummary[".NCSearch"] = true;



$tdatassscontsummary[".shortTableName"] = "ssscontsummary";
$tdatassscontsummary[".nSecOptions"] = 2;
$tdatassscontsummary[".recsPerRowPrint"] = 1;
$tdatassscontsummary[".mainTableOwnerID"] = "PreparedBy";
$tdatassscontsummary[".moveNext"] = 1;
$tdatassscontsummary[".entityType"] = 0;

$tdatassscontsummary[".strOriginalTableName"] = "ssscontsummary";

	



$tdatassscontsummary[".showAddInPopup"] = false;

$tdatassscontsummary[".showEditInPopup"] = false;

$tdatassscontsummary[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatassscontsummary[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatassscontsummary[".fieldsForRegister"] = array();

$tdatassscontsummary[".listAjax"] = false;

	$tdatassscontsummary[".audit"] = false;

	$tdatassscontsummary[".locking"] = false;

$tdatassscontsummary[".edit"] = true;
$tdatassscontsummary[".afterEditAction"] = 0;
$tdatassscontsummary[".closePopupAfterEdit"] = 1;
$tdatassscontsummary[".afterEditActionDetTable"] = "";

$tdatassscontsummary[".add"] = true;
$tdatassscontsummary[".afterAddAction"] = 0;
$tdatassscontsummary[".closePopupAfterAdd"] = 1;
$tdatassscontsummary[".afterAddActionDetTable"] = "";

$tdatassscontsummary[".list"] = true;

$tdatassscontsummary[".inlineEdit"] = true;

$tdatassscontsummary[".updateSelected"] = true;

$tdatassscontsummary[".reorderRecordsByHeader"] = true;


$tdatassscontsummary[".exportFormatting"] = 2;
$tdatassscontsummary[".exportDelimiter"] = ",";
		
$tdatassscontsummary[".inlineAdd"] = true;
$tdatassscontsummary[".view"] = true;

$tdatassscontsummary[".import"] = true;

$tdatassscontsummary[".exportTo"] = true;

$tdatassscontsummary[".printFriendly"] = true;

$tdatassscontsummary[".delete"] = true;

$tdatassscontsummary[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatassscontsummary[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatassscontsummary[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatassscontsummary[".searchSaving"] = false;
//

$tdatassscontsummary[".showSearchPanel"] = true;
		$tdatassscontsummary[".flexibleSearch"] = true;

$tdatassscontsummary[".isUseAjaxSuggest"] = true;

$tdatassscontsummary[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																							
							
							
																																																																																																																																																																																																																																												

$tdatassscontsummary[".ajaxCodeSnippetAdded"] = false;

$tdatassscontsummary[".buttonsAdded"] = true;

$tdatassscontsummary[".addPageEvents"] = true;

// use timepicker for search panel
$tdatassscontsummary[".isUseTimeForSearch"] = false;



$tdatassscontsummary[".badgeColor"] = "e67349";


$tdatassscontsummary[".allSearchFields"] = array();
$tdatassscontsummary[".filterFields"] = array();
$tdatassscontsummary[".requiredSearchFields"] = array();

$tdatassscontsummary[".allSearchFields"][] = "ContID";
	$tdatassscontsummary[".allSearchFields"][] = "Employer";
	$tdatassscontsummary[".allSearchFields"][] = "FromDate";
	$tdatassscontsummary[".allSearchFields"][] = "ToDate";
	$tdatassscontsummary[".allSearchFields"][] = "PreparedBy";
	$tdatassscontsummary[".allSearchFields"][] = "PSID";
	

$tdatassscontsummary[".googleLikeFields"] = array();
$tdatassscontsummary[".googleLikeFields"][] = "ContID";
$tdatassscontsummary[".googleLikeFields"][] = "Employer";
$tdatassscontsummary[".googleLikeFields"][] = "FromDate";
$tdatassscontsummary[".googleLikeFields"][] = "ToDate";
$tdatassscontsummary[".googleLikeFields"][] = "PSID";
$tdatassscontsummary[".googleLikeFields"][] = "PreparedBy";


$tdatassscontsummary[".advSearchFields"] = array();
$tdatassscontsummary[".advSearchFields"][] = "ContID";
$tdatassscontsummary[".advSearchFields"][] = "Employer";
$tdatassscontsummary[".advSearchFields"][] = "FromDate";
$tdatassscontsummary[".advSearchFields"][] = "ToDate";
$tdatassscontsummary[".advSearchFields"][] = "PreparedBy";
$tdatassscontsummary[".advSearchFields"][] = "PSID";

$tdatassscontsummary[".tableType"] = "list";

$tdatassscontsummary[".printerPageOrientation"] = 0;
$tdatassscontsummary[".nPrinterPageScale"] = 100;

$tdatassscontsummary[".nPrinterSplitRecords"] = 40;

$tdatassscontsummary[".nPrinterPDFSplitRecords"] = 40;



$tdatassscontsummary[".geocodingEnabled"] = false;





$tdatassscontsummary[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatassscontsummary[".pageSize"] = 20;

$tdatassscontsummary[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatassscontsummary[".strOrderBy"] = $tstrOrderBy;

$tdatassscontsummary[".orderindexes"] = array();

$tdatassscontsummary[".sqlHead"] = "SELECT ContID,  	Employer,  	FromDate,  	ToDate,  	PSID,  	PreparedBy";
$tdatassscontsummary[".sqlFrom"] = "FROM ssscontsummary";
$tdatassscontsummary[".sqlWhereExpr"] = "";
$tdatassscontsummary[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatassscontsummary[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatassscontsummary[".arrGroupsPerPage"] = $arrGPP;

$tdatassscontsummary[".highlightSearchResults"] = true;

$tableKeysssscontsummary = array();
$tableKeysssscontsummary[] = "ContID";
$tdatassscontsummary[".Keys"] = $tableKeysssscontsummary;

$tdatassscontsummary[".listFields"] = array();
$tdatassscontsummary[".listFields"][] = "ContID";
$tdatassscontsummary[".listFields"][] = "Employer";
$tdatassscontsummary[".listFields"][] = "FromDate";
$tdatassscontsummary[".listFields"][] = "ToDate";
$tdatassscontsummary[".listFields"][] = "PreparedBy";
$tdatassscontsummary[".listFields"][] = "PSID";

$tdatassscontsummary[".hideMobileList"] = array();


$tdatassscontsummary[".viewFields"] = array();
$tdatassscontsummary[".viewFields"][] = "ContID";
$tdatassscontsummary[".viewFields"][] = "Employer";
$tdatassscontsummary[".viewFields"][] = "FromDate";
$tdatassscontsummary[".viewFields"][] = "ToDate";
$tdatassscontsummary[".viewFields"][] = "PreparedBy";
$tdatassscontsummary[".viewFields"][] = "PSID";

$tdatassscontsummary[".addFields"] = array();
$tdatassscontsummary[".addFields"][] = "Employer";
$tdatassscontsummary[".addFields"][] = "FromDate";
$tdatassscontsummary[".addFields"][] = "ToDate";
$tdatassscontsummary[".addFields"][] = "PSID";

$tdatassscontsummary[".masterListFields"] = array();
$tdatassscontsummary[".masterListFields"][] = "ContID";
$tdatassscontsummary[".masterListFields"][] = "Employer";
$tdatassscontsummary[".masterListFields"][] = "FromDate";
$tdatassscontsummary[".masterListFields"][] = "ToDate";
$tdatassscontsummary[".masterListFields"][] = "PreparedBy";
$tdatassscontsummary[".masterListFields"][] = "PSID";

$tdatassscontsummary[".inlineAddFields"] = array();
$tdatassscontsummary[".inlineAddFields"][] = "Employer";
$tdatassscontsummary[".inlineAddFields"][] = "FromDate";
$tdatassscontsummary[".inlineAddFields"][] = "ToDate";
$tdatassscontsummary[".inlineAddFields"][] = "PSID";

$tdatassscontsummary[".editFields"] = array();
$tdatassscontsummary[".editFields"][] = "Employer";
$tdatassscontsummary[".editFields"][] = "FromDate";
$tdatassscontsummary[".editFields"][] = "ToDate";
$tdatassscontsummary[".editFields"][] = "PSID";

$tdatassscontsummary[".inlineEditFields"] = array();
$tdatassscontsummary[".inlineEditFields"][] = "Employer";
$tdatassscontsummary[".inlineEditFields"][] = "FromDate";
$tdatassscontsummary[".inlineEditFields"][] = "ToDate";
$tdatassscontsummary[".inlineEditFields"][] = "PSID";

$tdatassscontsummary[".updateSelectedFields"] = array();
$tdatassscontsummary[".updateSelectedFields"][] = "Employer";
$tdatassscontsummary[".updateSelectedFields"][] = "FromDate";
$tdatassscontsummary[".updateSelectedFields"][] = "ToDate";
$tdatassscontsummary[".updateSelectedFields"][] = "PSID";


$tdatassscontsummary[".exportFields"] = array();
$tdatassscontsummary[".exportFields"][] = "ContID";
$tdatassscontsummary[".exportFields"][] = "Employer";
$tdatassscontsummary[".exportFields"][] = "FromDate";
$tdatassscontsummary[".exportFields"][] = "ToDate";
$tdatassscontsummary[".exportFields"][] = "PreparedBy";
$tdatassscontsummary[".exportFields"][] = "PSID";

$tdatassscontsummary[".importFields"] = array();
$tdatassscontsummary[".importFields"][] = "ContID";
$tdatassscontsummary[".importFields"][] = "Employer";
$tdatassscontsummary[".importFields"][] = "FromDate";
$tdatassscontsummary[".importFields"][] = "ToDate";
$tdatassscontsummary[".importFields"][] = "PSID";
$tdatassscontsummary[".importFields"][] = "PreparedBy";

$tdatassscontsummary[".printFields"] = array();
$tdatassscontsummary[".printFields"][] = "ContID";
$tdatassscontsummary[".printFields"][] = "Employer";
$tdatassscontsummary[".printFields"][] = "FromDate";
$tdatassscontsummary[".printFields"][] = "ToDate";
$tdatassscontsummary[".printFields"][] = "PreparedBy";
$tdatassscontsummary[".printFields"][] = "PSID";


//	ContID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ContID";
	$fdata["GoodName"] = "ContID";
	$fdata["ownerTable"] = "ssscontsummary";
	$fdata["Label"] = GetFieldLabel("ssscontsummary","ContID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ContID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ContID";

	
	
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




	$tdatassscontsummary["ContID"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "ssscontsummary";
	$fdata["Label"] = GetFieldLabel("ssscontsummary","Employer");
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
	
	

	
	$edata["LookupOrderBy"] = "EmployerName";

	
	
	
	

	
	
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




	$tdatassscontsummary["Employer"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "ssscontsummary";
	$fdata["Label"] = GetFieldLabel("ssscontsummary","FromDate");
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




	$tdatassscontsummary["FromDate"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "ssscontsummary";
	$fdata["Label"] = GetFieldLabel("ssscontsummary","ToDate");
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




	$tdatassscontsummary["ToDate"] = $fdata;
//	PSID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PSID";
	$fdata["GoodName"] = "PSID";
	$fdata["ownerTable"] = "ssscontsummary";
	$fdata["Label"] = GetFieldLabel("ssscontsummary","PSID");
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

		$fdata["strField"] = "PSID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PSID";

	
	
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




	$tdatassscontsummary["PSID"] = $fdata;
//	PreparedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PreparedBy";
	$fdata["GoodName"] = "PreparedBy";
	$fdata["ownerTable"] = "ssscontsummary";
	$fdata["Label"] = GetFieldLabel("ssscontsummary","PreparedBy");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PreparedBy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PreparedBy";

	
	
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




	$tdatassscontsummary["PreparedBy"] = $fdata;


$tables_data["ssscontsummary"]=&$tdatassscontsummary;
$field_labels["ssscontsummary"] = &$fieldLabelsssscontsummary;
$fieldToolTips["ssscontsummary"] = &$fieldToolTipsssscontsummary;
$placeHolders["ssscontsummary"] = &$placeHoldersssscontsummary;
$page_titles["ssscontsummary"] = &$pageTitlesssscontsummary;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ssscontsummary"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ssscontsummary"] = array();


	
				$strOriginalDetailsTable="contlo";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contlo";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contlo";
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
					$masterTablesData["ssscontsummary"][0] = $masterParams;
				$masterTablesData["ssscontsummary"][0]["masterKeys"] = array();
	$masterTablesData["ssscontsummary"][0]["masterKeys"][]="FromDate";
				$masterTablesData["ssscontsummary"][0]["masterKeys"][]="ToDate";
				$masterTablesData["ssscontsummary"][0]["detailKeys"] = array();
	$masterTablesData["ssscontsummary"][0]["detailKeys"][]="FromDate";
				$masterTablesData["ssscontsummary"][0]["detailKeys"][]="ToDate";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ssscontsummary()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ContID,  	Employer,  	FromDate,  	ToDate,  	PSID,  	PreparedBy";
$proto0["m_strFrom"] = "FROM ssscontsummary";
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
	"m_strName" => "ContID",
	"m_strTable" => "ssscontsummary",
	"m_srcTableName" => "ssscontsummary"
));

$proto6["m_sql"] = "ContID";
$proto6["m_srcTableName"] = "ssscontsummary";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "ssscontsummary",
	"m_srcTableName" => "ssscontsummary"
));

$proto8["m_sql"] = "Employer";
$proto8["m_srcTableName"] = "ssscontsummary";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "ssscontsummary",
	"m_srcTableName" => "ssscontsummary"
));

$proto10["m_sql"] = "FromDate";
$proto10["m_srcTableName"] = "ssscontsummary";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "ssscontsummary",
	"m_srcTableName" => "ssscontsummary"
));

$proto12["m_sql"] = "ToDate";
$proto12["m_srcTableName"] = "ssscontsummary";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PSID",
	"m_strTable" => "ssscontsummary",
	"m_srcTableName" => "ssscontsummary"
));

$proto14["m_sql"] = "PSID";
$proto14["m_srcTableName"] = "ssscontsummary";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PreparedBy",
	"m_strTable" => "ssscontsummary",
	"m_srcTableName" => "ssscontsummary"
));

$proto16["m_sql"] = "PreparedBy";
$proto16["m_srcTableName"] = "ssscontsummary";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "ssscontsummary";
$proto19["m_srcTableName"] = "ssscontsummary";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "ContID";
$proto19["m_columns"][] = "Employer";
$proto19["m_columns"][] = "FromDate";
$proto19["m_columns"][] = "ToDate";
$proto19["m_columns"][] = "PSID";
$proto19["m_columns"][] = "PreparedBy";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "ssscontsummary";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "ssscontsummary";
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
$proto0["m_srcTableName"]="ssscontsummary";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ssscontsummary = createSqlQuery_ssscontsummary();


	
		;

						

$tdatassscontsummary[".sqlquery"] = $queryData_ssscontsummary;

include_once(getabspath("include/ssscontsummary_events.php"));
$tableEvents["ssscontsummary"] = new eventclass_ssscontsummary;
$tdatassscontsummary[".hasEvents"] = true;

?>