<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadtrrange1 = array();
	$tdatadtrrange1[".truncateText"] = true;
	$tdatadtrrange1[".NumberOfChars"] = 80;
	$tdatadtrrange1[".ShortName"] = "dtrrange1";
	$tdatadtrrange1[".OwnerID"] = "";
	$tdatadtrrange1[".OriginalTable"] = "dtrrange";

//	field labels
$fieldLabelsdtrrange1 = array();
$fieldToolTipsdtrrange1 = array();
$pageTitlesdtrrange1 = array();
$placeHoldersdtrrange1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdtrrange1["English"] = array();
	$fieldToolTipsdtrrange1["English"] = array();
	$placeHoldersdtrrange1["English"] = array();
	$pageTitlesdtrrange1["English"] = array();
	$fieldLabelsdtrrange1["English"]["DrID"] = "Dr ID";
	$fieldToolTipsdtrrange1["English"]["DrID"] = "";
	$placeHoldersdtrrange1["English"]["DrID"] = "";
	$fieldLabelsdtrrange1["English"]["FromDate"] = "From Date";
	$fieldToolTipsdtrrange1["English"]["FromDate"] = "";
	$placeHoldersdtrrange1["English"]["FromDate"] = "";
	$fieldLabelsdtrrange1["English"]["ToDate"] = "To Date";
	$fieldToolTipsdtrrange1["English"]["ToDate"] = "";
	$placeHoldersdtrrange1["English"]["ToDate"] = "";
	$fieldLabelsdtrrange1["English"]["Employer"] = "Employer";
	$fieldToolTipsdtrrange1["English"]["Employer"] = "";
	$placeHoldersdtrrange1["English"]["Employer"] = "";
	$fieldLabelsdtrrange1["English"]["Employee"] = "Employee";
	$fieldToolTipsdtrrange1["English"]["Employee"] = "";
	$placeHoldersdtrrange1["English"]["Employee"] = "";
	if (count($fieldToolTipsdtrrange1["English"]))
		$tdatadtrrange1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdtrrange1[""] = array();
	$fieldToolTipsdtrrange1[""] = array();
	$placeHoldersdtrrange1[""] = array();
	$pageTitlesdtrrange1[""] = array();
	$fieldLabelsdtrrange1[""]["Employee"] = "Employee";
	$fieldToolTipsdtrrange1[""]["Employee"] = "";
	$placeHoldersdtrrange1[""]["Employee"] = "";
	if (count($fieldToolTipsdtrrange1[""]))
		$tdatadtrrange1[".isUseToolTips"] = true;
}


	$tdatadtrrange1[".NCSearch"] = true;



$tdatadtrrange1[".shortTableName"] = "dtrrange1";
$tdatadtrrange1[".nSecOptions"] = 0;
$tdatadtrrange1[".recsPerRowPrint"] = 1;
$tdatadtrrange1[".mainTableOwnerID"] = "";
$tdatadtrrange1[".moveNext"] = 1;
$tdatadtrrange1[".entityType"] = 1;

$tdatadtrrange1[".strOriginalTableName"] = "dtrrange";

	



$tdatadtrrange1[".showAddInPopup"] = false;

$tdatadtrrange1[".showEditInPopup"] = false;

$tdatadtrrange1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadtrrange1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadtrrange1[".fieldsForRegister"] = array();

$tdatadtrrange1[".listAjax"] = false;

	$tdatadtrrange1[".audit"] = false;

	$tdatadtrrange1[".locking"] = false;

$tdatadtrrange1[".edit"] = true;
$tdatadtrrange1[".afterEditAction"] = 0;
$tdatadtrrange1[".closePopupAfterEdit"] = 1;
$tdatadtrrange1[".afterEditActionDetTable"] = "Detail tables not found!";

$tdatadtrrange1[".add"] = true;
$tdatadtrrange1[".afterAddAction"] = 1;
$tdatadtrrange1[".closePopupAfterAdd"] = 1;
$tdatadtrrange1[".afterAddActionDetTable"] = "";

$tdatadtrrange1[".list"] = true;

$tdatadtrrange1[".inlineEdit"] = true;


$tdatadtrrange1[".reorderRecordsByHeader"] = true;


$tdatadtrrange1[".exportFormatting"] = 2;
$tdatadtrrange1[".exportDelimiter"] = ",";
		
$tdatadtrrange1[".inlineAdd"] = true;
$tdatadtrrange1[".view"] = true;


$tdatadtrrange1[".exportTo"] = true;

$tdatadtrrange1[".printFriendly"] = true;

$tdatadtrrange1[".delete"] = true;

$tdatadtrrange1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadtrrange1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatadtrrange1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatadtrrange1[".searchSaving"] = false;
//

$tdatadtrrange1[".showSearchPanel"] = true;
		$tdatadtrrange1[".flexibleSearch"] = true;

$tdatadtrrange1[".isUseAjaxSuggest"] = true;

$tdatadtrrange1[".rowHighlite"] = true;



																																																																																																																																																																																																																																												
							
							
										
																							

$tdatadtrrange1[".ajaxCodeSnippetAdded"] = false;

$tdatadtrrange1[".buttonsAdded"] = true;

$tdatadtrrange1[".addPageEvents"] = true;

// use timepicker for search panel
$tdatadtrrange1[".isUseTimeForSearch"] = false;



$tdatadtrrange1[".badgeColor"] = "CD5C5C";

$tdatadtrrange1[".detailsLinksOnList"] = "1";

$tdatadtrrange1[".allSearchFields"] = array();
$tdatadtrrange1[".filterFields"] = array();
$tdatadtrrange1[".requiredSearchFields"] = array();

$tdatadtrrange1[".allSearchFields"][] = "DrID";
	$tdatadtrrange1[".allSearchFields"][] = "FromDate";
	$tdatadtrrange1[".allSearchFields"][] = "ToDate";
	$tdatadtrrange1[".allSearchFields"][] = "Employee";
	$tdatadtrrange1[".allSearchFields"][] = "Employer";
	

$tdatadtrrange1[".googleLikeFields"] = array();
$tdatadtrrange1[".googleLikeFields"][] = "DrID";
$tdatadtrrange1[".googleLikeFields"][] = "FromDate";
$tdatadtrrange1[".googleLikeFields"][] = "ToDate";
$tdatadtrrange1[".googleLikeFields"][] = "Employer";
$tdatadtrrange1[".googleLikeFields"][] = "Employee";


$tdatadtrrange1[".advSearchFields"] = array();
$tdatadtrrange1[".advSearchFields"][] = "DrID";
$tdatadtrrange1[".advSearchFields"][] = "FromDate";
$tdatadtrrange1[".advSearchFields"][] = "ToDate";
$tdatadtrrange1[".advSearchFields"][] = "Employee";
$tdatadtrrange1[".advSearchFields"][] = "Employer";

$tdatadtrrange1[".tableType"] = "list";

$tdatadtrrange1[".printerPageOrientation"] = 0;
$tdatadtrrange1[".nPrinterPageScale"] = 100;

$tdatadtrrange1[".nPrinterSplitRecords"] = 40;

$tdatadtrrange1[".nPrinterPDFSplitRecords"] = 40;



$tdatadtrrange1[".geocodingEnabled"] = false;





$tdatadtrrange1[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatadtrrange1[".pageSize"] = 20;

$tdatadtrrange1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadtrrange1[".strOrderBy"] = $tstrOrderBy;

$tdatadtrrange1[".orderindexes"] = array();

$tdatadtrrange1[".sqlHead"] = "SELECT DrID,  FromDate,  ToDate,  Employer,  Employee";
$tdatadtrrange1[".sqlFrom"] = "FROM dtrrange";
$tdatadtrrange1[".sqlWhereExpr"] = "";
$tdatadtrrange1[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadtrrange1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadtrrange1[".arrGroupsPerPage"] = $arrGPP;

$tdatadtrrange1[".highlightSearchResults"] = true;

$tableKeysdtrrange1 = array();
$tableKeysdtrrange1[] = "DrID";
$tdatadtrrange1[".Keys"] = $tableKeysdtrrange1;

$tdatadtrrange1[".listFields"] = array();
$tdatadtrrange1[".listFields"][] = "DrID";
$tdatadtrrange1[".listFields"][] = "FromDate";
$tdatadtrrange1[".listFields"][] = "ToDate";
$tdatadtrrange1[".listFields"][] = "Employee";
$tdatadtrrange1[".listFields"][] = "Employer";

$tdatadtrrange1[".hideMobileList"] = array();


$tdatadtrrange1[".viewFields"] = array();
$tdatadtrrange1[".viewFields"][] = "DrID";
$tdatadtrrange1[".viewFields"][] = "FromDate";
$tdatadtrrange1[".viewFields"][] = "ToDate";
$tdatadtrrange1[".viewFields"][] = "Employee";
$tdatadtrrange1[".viewFields"][] = "Employer";

$tdatadtrrange1[".addFields"] = array();
$tdatadtrrange1[".addFields"][] = "FromDate";
$tdatadtrrange1[".addFields"][] = "ToDate";
$tdatadtrrange1[".addFields"][] = "Employee";
$tdatadtrrange1[".addFields"][] = "Employer";

$tdatadtrrange1[".masterListFields"] = array();
$tdatadtrrange1[".masterListFields"][] = "DrID";
$tdatadtrrange1[".masterListFields"][] = "FromDate";
$tdatadtrrange1[".masterListFields"][] = "ToDate";
$tdatadtrrange1[".masterListFields"][] = "Employee";
$tdatadtrrange1[".masterListFields"][] = "Employer";

$tdatadtrrange1[".inlineAddFields"] = array();
$tdatadtrrange1[".inlineAddFields"][] = "FromDate";
$tdatadtrrange1[".inlineAddFields"][] = "ToDate";
$tdatadtrrange1[".inlineAddFields"][] = "Employee";
$tdatadtrrange1[".inlineAddFields"][] = "Employer";

$tdatadtrrange1[".editFields"] = array();
$tdatadtrrange1[".editFields"][] = "FromDate";
$tdatadtrrange1[".editFields"][] = "ToDate";
$tdatadtrrange1[".editFields"][] = "Employee";
$tdatadtrrange1[".editFields"][] = "Employer";

$tdatadtrrange1[".inlineEditFields"] = array();
$tdatadtrrange1[".inlineEditFields"][] = "FromDate";
$tdatadtrrange1[".inlineEditFields"][] = "ToDate";
$tdatadtrrange1[".inlineEditFields"][] = "Employee";
$tdatadtrrange1[".inlineEditFields"][] = "Employer";

$tdatadtrrange1[".updateSelectedFields"] = array();
$tdatadtrrange1[".updateSelectedFields"][] = "FromDate";
$tdatadtrrange1[".updateSelectedFields"][] = "ToDate";
$tdatadtrrange1[".updateSelectedFields"][] = "Employee";
$tdatadtrrange1[".updateSelectedFields"][] = "Employer";


$tdatadtrrange1[".exportFields"] = array();
$tdatadtrrange1[".exportFields"][] = "DrID";
$tdatadtrrange1[".exportFields"][] = "FromDate";
$tdatadtrrange1[".exportFields"][] = "ToDate";
$tdatadtrrange1[".exportFields"][] = "Employee";
$tdatadtrrange1[".exportFields"][] = "Employer";

$tdatadtrrange1[".importFields"] = array();

$tdatadtrrange1[".printFields"] = array();
$tdatadtrrange1[".printFields"][] = "DrID";
$tdatadtrrange1[".printFields"][] = "FromDate";
$tdatadtrrange1[".printFields"][] = "ToDate";
$tdatadtrrange1[".printFields"][] = "Employee";
$tdatadtrrange1[".printFields"][] = "Employer";


//	DrID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DrID";
	$fdata["GoodName"] = "DrID";
	$fdata["ownerTable"] = "dtrrange";
	$fdata["Label"] = GetFieldLabel("dtrrange1","DrID");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrrange1["DrID"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "dtrrange";
	$fdata["Label"] = GetFieldLabel("dtrrange1","FromDate");
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




	$tdatadtrrange1["FromDate"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "dtrrange";
	$fdata["Label"] = GetFieldLabel("dtrrange1","ToDate");
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




	$tdatadtrrange1["ToDate"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "dtrrange";
	$fdata["Label"] = GetFieldLabel("dtrrange1","Employer");
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




	$tdatadtrrange1["Employer"] = $fdata;
//	Employee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Employee";
	$fdata["GoodName"] = "Employee";
	$fdata["ownerTable"] = "dtrrange";
	$fdata["Label"] = GetFieldLabel("dtrrange1","Employee");
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

		$fdata["strField"] = "Employee";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Employee";

	
	
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
	$edata["LookupTable"] = "dtrempl";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EmployeeID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "user_name";
	
	

	
	$edata["LookupOrderBy"] = "user_name";

	
	
	
	

	
	
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




	$tdatadtrrange1["Employee"] = $fdata;


$tables_data["dtrrange1"]=&$tdatadtrrange1;
$field_labels["dtrrange1"] = &$fieldLabelsdtrrange1;
$fieldToolTips["dtrrange1"] = &$fieldToolTipsdtrrange1;
$placeHolders["dtrrange1"] = &$placeHoldersdtrrange1;
$page_titles["dtrrange1"] = &$pageTitlesdtrrange1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dtrrange1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dtrrange1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_dtrrange1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DrID,  FromDate,  ToDate,  Employer,  Employee";
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
	"m_srcTableName" => "dtrrange1"
));

$proto6["m_sql"] = "DrID";
$proto6["m_srcTableName"] = "dtrrange1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "dtrrange",
	"m_srcTableName" => "dtrrange1"
));

$proto8["m_sql"] = "FromDate";
$proto8["m_srcTableName"] = "dtrrange1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "dtrrange",
	"m_srcTableName" => "dtrrange1"
));

$proto10["m_sql"] = "ToDate";
$proto10["m_srcTableName"] = "dtrrange1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "dtrrange",
	"m_srcTableName" => "dtrrange1"
));

$proto12["m_sql"] = "Employer";
$proto12["m_srcTableName"] = "dtrrange1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Employee",
	"m_strTable" => "dtrrange",
	"m_srcTableName" => "dtrrange1"
));

$proto14["m_sql"] = "Employee";
$proto14["m_srcTableName"] = "dtrrange1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "dtrrange";
$proto17["m_srcTableName"] = "dtrrange1";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "DrID";
$proto17["m_columns"][] = "FromDate";
$proto17["m_columns"][] = "ToDate";
$proto17["m_columns"][] = "Employer";
$proto17["m_columns"][] = "WageType";
$proto17["m_columns"][] = "Division";
$proto17["m_columns"][] = "Employee";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "dtrrange";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "dtrrange1";
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
$proto0["m_srcTableName"]="dtrrange1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dtrrange1 = createSqlQuery_dtrrange1();


	
		;

					

$tdatadtrrange1[".sqlquery"] = $queryData_dtrrange1;

include_once(getabspath("include/dtrrange1_events.php"));
$tableEvents["dtrrange1"] = new eventclass_dtrrange1;
$tdatadtrrange1[".hasEvents"] = true;

?>