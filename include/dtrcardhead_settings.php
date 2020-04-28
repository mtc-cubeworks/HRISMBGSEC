<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadtrcardhead = array();
	$tdatadtrcardhead[".truncateText"] = true;
	$tdatadtrcardhead[".NumberOfChars"] = 80;
	$tdatadtrcardhead[".ShortName"] = "dtrcardhead";
	$tdatadtrcardhead[".OwnerID"] = "";
	$tdatadtrcardhead[".OriginalTable"] = "dtrcardhead";

//	field labels
$fieldLabelsdtrcardhead = array();
$fieldToolTipsdtrcardhead = array();
$pageTitlesdtrcardhead = array();
$placeHoldersdtrcardhead = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdtrcardhead["English"] = array();
	$fieldToolTipsdtrcardhead["English"] = array();
	$placeHoldersdtrcardhead["English"] = array();
	$pageTitlesdtrcardhead["English"] = array();
	$fieldLabelsdtrcardhead["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipsdtrcardhead["English"]["EmployeeID"] = "";
	$placeHoldersdtrcardhead["English"]["EmployeeID"] = "";
	$fieldLabelsdtrcardhead["English"]["user_name"] = "User Name";
	$fieldToolTipsdtrcardhead["English"]["user_name"] = "";
	$placeHoldersdtrcardhead["English"]["user_name"] = "";
	$fieldLabelsdtrcardhead["English"]["Employer"] = "Employer";
	$fieldToolTipsdtrcardhead["English"]["Employer"] = "";
	$placeHoldersdtrcardhead["English"]["Employer"] = "";
	$fieldLabelsdtrcardhead["English"]["Division"] = "Division";
	$fieldToolTipsdtrcardhead["English"]["Division"] = "";
	$placeHoldersdtrcardhead["English"]["Division"] = "";
	$fieldLabelsdtrcardhead["English"]["Department"] = "Department";
	$fieldToolTipsdtrcardhead["English"]["Department"] = "";
	$placeHoldersdtrcardhead["English"]["Department"] = "";
	$fieldLabelsdtrcardhead["English"]["ExitDate"] = "Exit Date";
	$fieldToolTipsdtrcardhead["English"]["ExitDate"] = "";
	$placeHoldersdtrcardhead["English"]["ExitDate"] = "";
	$fieldLabelsdtrcardhead["English"]["FromDate"] = "From Date";
	$fieldToolTipsdtrcardhead["English"]["FromDate"] = "";
	$placeHoldersdtrcardhead["English"]["FromDate"] = "";
	$fieldLabelsdtrcardhead["English"]["ToDate"] = "To Date";
	$fieldToolTipsdtrcardhead["English"]["ToDate"] = "";
	$placeHoldersdtrcardhead["English"]["ToDate"] = "";
	if (count($fieldToolTipsdtrcardhead["English"]))
		$tdatadtrcardhead[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdtrcardhead[""] = array();
	$fieldToolTipsdtrcardhead[""] = array();
	$placeHoldersdtrcardhead[""] = array();
	$pageTitlesdtrcardhead[""] = array();
	$fieldLabelsdtrcardhead[""]["EmployeeID"] = "Employee ID";
	$fieldToolTipsdtrcardhead[""]["EmployeeID"] = "";
	$placeHoldersdtrcardhead[""]["EmployeeID"] = "";
	$fieldLabelsdtrcardhead[""]["user_name"] = "User Name";
	$fieldToolTipsdtrcardhead[""]["user_name"] = "";
	$placeHoldersdtrcardhead[""]["user_name"] = "";
	$fieldLabelsdtrcardhead[""]["Employer"] = "Employer";
	$fieldToolTipsdtrcardhead[""]["Employer"] = "";
	$placeHoldersdtrcardhead[""]["Employer"] = "";
	$fieldLabelsdtrcardhead[""]["Division"] = "Division";
	$fieldToolTipsdtrcardhead[""]["Division"] = "";
	$placeHoldersdtrcardhead[""]["Division"] = "";
	$fieldLabelsdtrcardhead[""]["Department"] = "Department";
	$fieldToolTipsdtrcardhead[""]["Department"] = "";
	$placeHoldersdtrcardhead[""]["Department"] = "";
	$fieldLabelsdtrcardhead[""]["ExitDate"] = "Exit Date";
	$fieldToolTipsdtrcardhead[""]["ExitDate"] = "";
	$placeHoldersdtrcardhead[""]["ExitDate"] = "";
	$fieldLabelsdtrcardhead[""]["FromDate"] = "From Date";
	$fieldToolTipsdtrcardhead[""]["FromDate"] = "";
	$placeHoldersdtrcardhead[""]["FromDate"] = "";
	$fieldLabelsdtrcardhead[""]["ToDate"] = "To Date";
	$fieldToolTipsdtrcardhead[""]["ToDate"] = "";
	$placeHoldersdtrcardhead[""]["ToDate"] = "";
	if (count($fieldToolTipsdtrcardhead[""]))
		$tdatadtrcardhead[".isUseToolTips"] = true;
}


	$tdatadtrcardhead[".NCSearch"] = true;



$tdatadtrcardhead[".shortTableName"] = "dtrcardhead";
$tdatadtrcardhead[".nSecOptions"] = 0;
$tdatadtrcardhead[".recsPerRowPrint"] = 1;
$tdatadtrcardhead[".mainTableOwnerID"] = "";
$tdatadtrcardhead[".moveNext"] = 1;
$tdatadtrcardhead[".entityType"] = 0;

$tdatadtrcardhead[".strOriginalTableName"] = "dtrcardhead";

	



$tdatadtrcardhead[".showAddInPopup"] = false;

$tdatadtrcardhead[".showEditInPopup"] = false;

$tdatadtrcardhead[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadtrcardhead[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadtrcardhead[".fieldsForRegister"] = array();

$tdatadtrcardhead[".listAjax"] = false;

	$tdatadtrcardhead[".audit"] = false;

	$tdatadtrcardhead[".locking"] = false;



$tdatadtrcardhead[".list"] = true;



$tdatadtrcardhead[".reorderRecordsByHeader"] = true;


$tdatadtrcardhead[".exportFormatting"] = 2;
$tdatadtrcardhead[".exportDelimiter"] = ",";
		
$tdatadtrcardhead[".view"] = true;


$tdatadtrcardhead[".exportTo"] = true;

$tdatadtrcardhead[".printFriendly"] = true;


$tdatadtrcardhead[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadtrcardhead[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatadtrcardhead[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatadtrcardhead[".searchSaving"] = false;
//

$tdatadtrcardhead[".showSearchPanel"] = true;
		$tdatadtrcardhead[".flexibleSearch"] = true;

$tdatadtrcardhead[".isUseAjaxSuggest"] = true;

$tdatadtrcardhead[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdatadtrcardhead[".ajaxCodeSnippetAdded"] = false;

$tdatadtrcardhead[".buttonsAdded"] = false;

$tdatadtrcardhead[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadtrcardhead[".isUseTimeForSearch"] = false;





$tdatadtrcardhead[".allSearchFields"] = array();
$tdatadtrcardhead[".filterFields"] = array();
$tdatadtrcardhead[".requiredSearchFields"] = array();

$tdatadtrcardhead[".allSearchFields"][] = "EmployeeID";
	$tdatadtrcardhead[".allSearchFields"][] = "user_name";
	$tdatadtrcardhead[".allSearchFields"][] = "Employer";
	$tdatadtrcardhead[".allSearchFields"][] = "Division";
	$tdatadtrcardhead[".allSearchFields"][] = "Department";
	$tdatadtrcardhead[".allSearchFields"][] = "ExitDate";
	$tdatadtrcardhead[".allSearchFields"][] = "FromDate";
	$tdatadtrcardhead[".allSearchFields"][] = "ToDate";
	

$tdatadtrcardhead[".googleLikeFields"] = array();
$tdatadtrcardhead[".googleLikeFields"][] = "EmployeeID";
$tdatadtrcardhead[".googleLikeFields"][] = "user_name";
$tdatadtrcardhead[".googleLikeFields"][] = "Employer";
$tdatadtrcardhead[".googleLikeFields"][] = "Division";
$tdatadtrcardhead[".googleLikeFields"][] = "Department";
$tdatadtrcardhead[".googleLikeFields"][] = "ExitDate";
$tdatadtrcardhead[".googleLikeFields"][] = "FromDate";
$tdatadtrcardhead[".googleLikeFields"][] = "ToDate";


$tdatadtrcardhead[".advSearchFields"] = array();
$tdatadtrcardhead[".advSearchFields"][] = "EmployeeID";
$tdatadtrcardhead[".advSearchFields"][] = "user_name";
$tdatadtrcardhead[".advSearchFields"][] = "Employer";
$tdatadtrcardhead[".advSearchFields"][] = "Division";
$tdatadtrcardhead[".advSearchFields"][] = "Department";
$tdatadtrcardhead[".advSearchFields"][] = "ExitDate";
$tdatadtrcardhead[".advSearchFields"][] = "FromDate";
$tdatadtrcardhead[".advSearchFields"][] = "ToDate";

$tdatadtrcardhead[".tableType"] = "list";

$tdatadtrcardhead[".printerPageOrientation"] = 0;
$tdatadtrcardhead[".nPrinterPageScale"] = 100;

$tdatadtrcardhead[".nPrinterSplitRecords"] = 40;

$tdatadtrcardhead[".nPrinterPDFSplitRecords"] = 40;



$tdatadtrcardhead[".geocodingEnabled"] = false;





$tdatadtrcardhead[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatadtrcardhead[".pageSize"] = 20;

$tdatadtrcardhead[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadtrcardhead[".strOrderBy"] = $tstrOrderBy;

$tdatadtrcardhead[".orderindexes"] = array();

$tdatadtrcardhead[".sqlHead"] = "SELECT EmployeeID,  	user_name,  	Employer,  	Division,  	Department,  	ExitDate,  	FromDate,  	ToDate";
$tdatadtrcardhead[".sqlFrom"] = "FROM dtrcardhead";
$tdatadtrcardhead[".sqlWhereExpr"] = "";
$tdatadtrcardhead[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadtrcardhead[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadtrcardhead[".arrGroupsPerPage"] = $arrGPP;

$tdatadtrcardhead[".highlightSearchResults"] = true;

$tableKeysdtrcardhead = array();
$tableKeysdtrcardhead[] = "EmployeeID";
$tdatadtrcardhead[".Keys"] = $tableKeysdtrcardhead;

$tdatadtrcardhead[".listFields"] = array();
$tdatadtrcardhead[".listFields"][] = "EmployeeID";
$tdatadtrcardhead[".listFields"][] = "user_name";
$tdatadtrcardhead[".listFields"][] = "Employer";
$tdatadtrcardhead[".listFields"][] = "Division";
$tdatadtrcardhead[".listFields"][] = "Department";
$tdatadtrcardhead[".listFields"][] = "ExitDate";
$tdatadtrcardhead[".listFields"][] = "FromDate";
$tdatadtrcardhead[".listFields"][] = "ToDate";

$tdatadtrcardhead[".hideMobileList"] = array();


$tdatadtrcardhead[".viewFields"] = array();
$tdatadtrcardhead[".viewFields"][] = "EmployeeID";
$tdatadtrcardhead[".viewFields"][] = "user_name";
$tdatadtrcardhead[".viewFields"][] = "Employer";
$tdatadtrcardhead[".viewFields"][] = "Division";
$tdatadtrcardhead[".viewFields"][] = "Department";
$tdatadtrcardhead[".viewFields"][] = "ExitDate";
$tdatadtrcardhead[".viewFields"][] = "FromDate";
$tdatadtrcardhead[".viewFields"][] = "ToDate";

$tdatadtrcardhead[".addFields"] = array();
$tdatadtrcardhead[".addFields"][] = "EmployeeID";
$tdatadtrcardhead[".addFields"][] = "user_name";
$tdatadtrcardhead[".addFields"][] = "Employer";
$tdatadtrcardhead[".addFields"][] = "Division";
$tdatadtrcardhead[".addFields"][] = "Department";
$tdatadtrcardhead[".addFields"][] = "ExitDate";
$tdatadtrcardhead[".addFields"][] = "FromDate";
$tdatadtrcardhead[".addFields"][] = "ToDate";

$tdatadtrcardhead[".masterListFields"] = array();
$tdatadtrcardhead[".masterListFields"][] = "EmployeeID";
$tdatadtrcardhead[".masterListFields"][] = "user_name";
$tdatadtrcardhead[".masterListFields"][] = "Employer";
$tdatadtrcardhead[".masterListFields"][] = "Division";
$tdatadtrcardhead[".masterListFields"][] = "Department";
$tdatadtrcardhead[".masterListFields"][] = "ExitDate";
$tdatadtrcardhead[".masterListFields"][] = "FromDate";
$tdatadtrcardhead[".masterListFields"][] = "ToDate";

$tdatadtrcardhead[".inlineAddFields"] = array();
$tdatadtrcardhead[".inlineAddFields"][] = "EmployeeID";
$tdatadtrcardhead[".inlineAddFields"][] = "user_name";
$tdatadtrcardhead[".inlineAddFields"][] = "Employer";
$tdatadtrcardhead[".inlineAddFields"][] = "Division";
$tdatadtrcardhead[".inlineAddFields"][] = "Department";
$tdatadtrcardhead[".inlineAddFields"][] = "ExitDate";
$tdatadtrcardhead[".inlineAddFields"][] = "FromDate";
$tdatadtrcardhead[".inlineAddFields"][] = "ToDate";

$tdatadtrcardhead[".editFields"] = array();
$tdatadtrcardhead[".editFields"][] = "EmployeeID";
$tdatadtrcardhead[".editFields"][] = "user_name";
$tdatadtrcardhead[".editFields"][] = "Employer";
$tdatadtrcardhead[".editFields"][] = "Division";
$tdatadtrcardhead[".editFields"][] = "Department";
$tdatadtrcardhead[".editFields"][] = "ExitDate";
$tdatadtrcardhead[".editFields"][] = "FromDate";
$tdatadtrcardhead[".editFields"][] = "ToDate";

$tdatadtrcardhead[".inlineEditFields"] = array();
$tdatadtrcardhead[".inlineEditFields"][] = "EmployeeID";
$tdatadtrcardhead[".inlineEditFields"][] = "user_name";
$tdatadtrcardhead[".inlineEditFields"][] = "Employer";
$tdatadtrcardhead[".inlineEditFields"][] = "Division";
$tdatadtrcardhead[".inlineEditFields"][] = "Department";
$tdatadtrcardhead[".inlineEditFields"][] = "ExitDate";
$tdatadtrcardhead[".inlineEditFields"][] = "FromDate";
$tdatadtrcardhead[".inlineEditFields"][] = "ToDate";

$tdatadtrcardhead[".updateSelectedFields"] = array();
$tdatadtrcardhead[".updateSelectedFields"][] = "EmployeeID";
$tdatadtrcardhead[".updateSelectedFields"][] = "user_name";
$tdatadtrcardhead[".updateSelectedFields"][] = "Employer";
$tdatadtrcardhead[".updateSelectedFields"][] = "Division";
$tdatadtrcardhead[".updateSelectedFields"][] = "Department";
$tdatadtrcardhead[".updateSelectedFields"][] = "ExitDate";
$tdatadtrcardhead[".updateSelectedFields"][] = "FromDate";
$tdatadtrcardhead[".updateSelectedFields"][] = "ToDate";


$tdatadtrcardhead[".exportFields"] = array();
$tdatadtrcardhead[".exportFields"][] = "EmployeeID";
$tdatadtrcardhead[".exportFields"][] = "user_name";
$tdatadtrcardhead[".exportFields"][] = "Employer";
$tdatadtrcardhead[".exportFields"][] = "Division";
$tdatadtrcardhead[".exportFields"][] = "Department";
$tdatadtrcardhead[".exportFields"][] = "ExitDate";
$tdatadtrcardhead[".exportFields"][] = "FromDate";
$tdatadtrcardhead[".exportFields"][] = "ToDate";

$tdatadtrcardhead[".importFields"] = array();
$tdatadtrcardhead[".importFields"][] = "EmployeeID";
$tdatadtrcardhead[".importFields"][] = "user_name";
$tdatadtrcardhead[".importFields"][] = "Employer";
$tdatadtrcardhead[".importFields"][] = "Division";
$tdatadtrcardhead[".importFields"][] = "Department";
$tdatadtrcardhead[".importFields"][] = "ExitDate";
$tdatadtrcardhead[".importFields"][] = "FromDate";
$tdatadtrcardhead[".importFields"][] = "ToDate";

$tdatadtrcardhead[".printFields"] = array();
$tdatadtrcardhead[".printFields"][] = "EmployeeID";
$tdatadtrcardhead[".printFields"][] = "user_name";
$tdatadtrcardhead[".printFields"][] = "Employer";
$tdatadtrcardhead[".printFields"][] = "Division";
$tdatadtrcardhead[".printFields"][] = "Department";
$tdatadtrcardhead[".printFields"][] = "ExitDate";
$tdatadtrcardhead[".printFields"][] = "FromDate";
$tdatadtrcardhead[".printFields"][] = "ToDate";


//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "dtrcardhead";
	$fdata["Label"] = GetFieldLabel("dtrcardhead","EmployeeID");
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

		$fdata["strField"] = "EmployeeID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmployeeID";

	
	
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




	$tdatadtrcardhead["EmployeeID"] = $fdata;
//	user_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_name";
	$fdata["GoodName"] = "user_name";
	$fdata["ownerTable"] = "dtrcardhead";
	$fdata["Label"] = GetFieldLabel("dtrcardhead","user_name");
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

		$fdata["strField"] = "user_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_name";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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




	$tdatadtrcardhead["user_name"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "dtrcardhead";
	$fdata["Label"] = GetFieldLabel("dtrcardhead","Employer");
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




	$tdatadtrcardhead["Employer"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "dtrcardhead";
	$fdata["Label"] = GetFieldLabel("dtrcardhead","Division");
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




	$tdatadtrcardhead["Division"] = $fdata;
//	Department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Department";
	$fdata["GoodName"] = "Department";
	$fdata["ownerTable"] = "dtrcardhead";
	$fdata["Label"] = GetFieldLabel("dtrcardhead","Department");
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

		$fdata["strField"] = "Department";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Department";

	
	
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
	$edata["LookupTable"] = "department";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DeID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Department";
	
	

	
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




	$tdatadtrcardhead["Department"] = $fdata;
//	ExitDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ExitDate";
	$fdata["GoodName"] = "ExitDate";
	$fdata["ownerTable"] = "dtrcardhead";
	$fdata["Label"] = GetFieldLabel("dtrcardhead","ExitDate");
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

		$fdata["strField"] = "ExitDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ExitDate";

	
	
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




	$tdatadtrcardhead["ExitDate"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "dtrcardhead";
	$fdata["Label"] = GetFieldLabel("dtrcardhead","FromDate");
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




	$tdatadtrcardhead["FromDate"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "dtrcardhead";
	$fdata["Label"] = GetFieldLabel("dtrcardhead","ToDate");
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




	$tdatadtrcardhead["ToDate"] = $fdata;


$tables_data["dtrcardhead"]=&$tdatadtrcardhead;
$field_labels["dtrcardhead"] = &$fieldLabelsdtrcardhead;
$fieldToolTips["dtrcardhead"] = &$fieldToolTipsdtrcardhead;
$placeHolders["dtrcardhead"] = &$placeHoldersdtrcardhead;
$page_titles["dtrcardhead"] = &$pageTitlesdtrcardhead;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dtrcardhead"] = array();
//	dtrcard
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dtrcard";
		$detailsParam["dOriginalTable"] = "dtrcard";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "dtrcard";
	$detailsParam["dCaptionTable"] = GetTableCaption("dtrcard");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["dtrcardhead"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dtrcardhead"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dtrcardhead"][$dIndex]["masterKeys"][]="EmployeeID";

				$detailsTablesData["dtrcardhead"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dtrcardhead"][$dIndex]["detailKeys"][]="EmployeeID";

// tables which are master tables for current table (detail)
$masterTablesData["dtrcardhead"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_dtrcardhead()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EmployeeID,  	user_name,  	Employer,  	Division,  	Department,  	ExitDate,  	FromDate,  	ToDate";
$proto0["m_strFrom"] = "FROM dtrcardhead";
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
	"m_strName" => "EmployeeID",
	"m_strTable" => "dtrcardhead",
	"m_srcTableName" => "dtrcardhead"
));

$proto6["m_sql"] = "EmployeeID";
$proto6["m_srcTableName"] = "dtrcardhead";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "dtrcardhead",
	"m_srcTableName" => "dtrcardhead"
));

$proto8["m_sql"] = "user_name";
$proto8["m_srcTableName"] = "dtrcardhead";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "dtrcardhead",
	"m_srcTableName" => "dtrcardhead"
));

$proto10["m_sql"] = "Employer";
$proto10["m_srcTableName"] = "dtrcardhead";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "dtrcardhead",
	"m_srcTableName" => "dtrcardhead"
));

$proto12["m_sql"] = "Division";
$proto12["m_srcTableName"] = "dtrcardhead";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "dtrcardhead",
	"m_srcTableName" => "dtrcardhead"
));

$proto14["m_sql"] = "Department";
$proto14["m_srcTableName"] = "dtrcardhead";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ExitDate",
	"m_strTable" => "dtrcardhead",
	"m_srcTableName" => "dtrcardhead"
));

$proto16["m_sql"] = "ExitDate";
$proto16["m_srcTableName"] = "dtrcardhead";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "dtrcardhead",
	"m_srcTableName" => "dtrcardhead"
));

$proto18["m_sql"] = "FromDate";
$proto18["m_srcTableName"] = "dtrcardhead";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "dtrcardhead",
	"m_srcTableName" => "dtrcardhead"
));

$proto20["m_sql"] = "ToDate";
$proto20["m_srcTableName"] = "dtrcardhead";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "dtrcardhead";
$proto23["m_srcTableName"] = "dtrcardhead";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "EmployeeID";
$proto23["m_columns"][] = "user_name";
$proto23["m_columns"][] = "Employer";
$proto23["m_columns"][] = "Division";
$proto23["m_columns"][] = "Department";
$proto23["m_columns"][] = "ExitDate";
$proto23["m_columns"][] = "FromDate";
$proto23["m_columns"][] = "ToDate";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "dtrcardhead";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "dtrcardhead";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dtrcardhead";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dtrcardhead = createSqlQuery_dtrcardhead();


	
		;

								

$tdatadtrcardhead[".sqlquery"] = $queryData_dtrcardhead;

$tableEvents["dtrcardhead"] = new eventsBase;
$tdatadtrcardhead[".hasEvents"] = false;

?>