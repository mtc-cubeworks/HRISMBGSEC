<?php
require_once(getabspath("classes/cipherer.php"));




$tdataholidayupdate = array();
	$tdataholidayupdate[".truncateText"] = true;
	$tdataholidayupdate[".NumberOfChars"] = 80;
	$tdataholidayupdate[".ShortName"] = "holidayupdate";
	$tdataholidayupdate[".OwnerID"] = "";
	$tdataholidayupdate[".OriginalTable"] = "holidayupdate";

//	field labels
$fieldLabelsholidayupdate = array();
$fieldToolTipsholidayupdate = array();
$pageTitlesholidayupdate = array();
$placeHoldersholidayupdate = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsholidayupdate["English"] = array();
	$fieldToolTipsholidayupdate["English"] = array();
	$placeHoldersholidayupdate["English"] = array();
	$pageTitlesholidayupdate["English"] = array();
	$fieldLabelsholidayupdate["English"]["HuID"] = "Hu ID";
	$fieldToolTipsholidayupdate["English"]["HuID"] = "";
	$placeHoldersholidayupdate["English"]["HuID"] = "";
	$fieldLabelsholidayupdate["English"]["HolidayType"] = "Holiday Type";
	$fieldToolTipsholidayupdate["English"]["HolidayType"] = "";
	$placeHoldersholidayupdate["English"]["HolidayType"] = "";
	$fieldLabelsholidayupdate["English"]["1stHalf"] = "1st Half";
	$fieldToolTipsholidayupdate["English"]["1stHalf"] = "";
	$placeHoldersholidayupdate["English"]["1stHalf"] = "";
	$fieldLabelsholidayupdate["English"]["2ndHalf"] = "2nd Half";
	$fieldToolTipsholidayupdate["English"]["2ndHalf"] = "";
	$placeHoldersholidayupdate["English"]["2ndHalf"] = "";
	$fieldLabelsholidayupdate["English"]["HDate"] = "Holiday Date";
	$fieldToolTipsholidayupdate["English"]["HDate"] = "";
	$placeHoldersholidayupdate["English"]["HDate"] = "";
	$fieldLabelsholidayupdate["English"]["Employer"] = "Employer";
	$fieldToolTipsholidayupdate["English"]["Employer"] = "";
	$placeHoldersholidayupdate["English"]["Employer"] = "";
	$fieldLabelsholidayupdate["English"]["Division"] = "Division";
	$fieldToolTipsholidayupdate["English"]["Division"] = "";
	$placeHoldersholidayupdate["English"]["Division"] = "";
	$fieldLabelsholidayupdate["English"]["Department"] = "Department";
	$fieldToolTipsholidayupdate["English"]["Department"] = "";
	$placeHoldersholidayupdate["English"]["Department"] = "";
	$fieldLabelsholidayupdate["English"]["Employee"] = "Employee";
	$fieldToolTipsholidayupdate["English"]["Employee"] = "";
	$placeHoldersholidayupdate["English"]["Employee"] = "";
	$fieldLabelsholidayupdate["English"]["Remarks"] = "Remarks";
	$fieldToolTipsholidayupdate["English"]["Remarks"] = "";
	$placeHoldersholidayupdate["English"]["Remarks"] = "";
	if (count($fieldToolTipsholidayupdate["English"]))
		$tdataholidayupdate[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsholidayupdate[""] = array();
	$fieldToolTipsholidayupdate[""] = array();
	$placeHoldersholidayupdate[""] = array();
	$pageTitlesholidayupdate[""] = array();
	$fieldLabelsholidayupdate[""]["HuID"] = "Hu ID";
	$fieldToolTipsholidayupdate[""]["HuID"] = "";
	$placeHoldersholidayupdate[""]["HuID"] = "";
	$fieldLabelsholidayupdate[""]["HolidayType"] = "Holiday Type";
	$fieldToolTipsholidayupdate[""]["HolidayType"] = "";
	$placeHoldersholidayupdate[""]["HolidayType"] = "";
	$fieldLabelsholidayupdate[""]["1stHalf"] = "1st Half";
	$fieldToolTipsholidayupdate[""]["1stHalf"] = "";
	$placeHoldersholidayupdate[""]["1stHalf"] = "";
	$fieldLabelsholidayupdate[""]["2ndHalf"] = "2nd Half";
	$fieldToolTipsholidayupdate[""]["2ndHalf"] = "";
	$placeHoldersholidayupdate[""]["2ndHalf"] = "";
	$fieldLabelsholidayupdate[""]["HDate"] = "HDate";
	$fieldToolTipsholidayupdate[""]["HDate"] = "";
	$placeHoldersholidayupdate[""]["HDate"] = "";
	$fieldLabelsholidayupdate[""]["Employer"] = "Employer";
	$fieldToolTipsholidayupdate[""]["Employer"] = "";
	$placeHoldersholidayupdate[""]["Employer"] = "";
	$fieldLabelsholidayupdate[""]["Division"] = "Division";
	$fieldToolTipsholidayupdate[""]["Division"] = "";
	$placeHoldersholidayupdate[""]["Division"] = "";
	$fieldLabelsholidayupdate[""]["Department"] = "Department";
	$fieldToolTipsholidayupdate[""]["Department"] = "";
	$placeHoldersholidayupdate[""]["Department"] = "";
	$fieldLabelsholidayupdate[""]["Employee"] = "Employee";
	$fieldToolTipsholidayupdate[""]["Employee"] = "";
	$placeHoldersholidayupdate[""]["Employee"] = "";
	$fieldLabelsholidayupdate[""]["Remarks"] = "Remarks";
	$fieldToolTipsholidayupdate[""]["Remarks"] = "";
	$placeHoldersholidayupdate[""]["Remarks"] = "";
	if (count($fieldToolTipsholidayupdate[""]))
		$tdataholidayupdate[".isUseToolTips"] = true;
}


	$tdataholidayupdate[".NCSearch"] = true;



$tdataholidayupdate[".shortTableName"] = "holidayupdate";
$tdataholidayupdate[".nSecOptions"] = 0;
$tdataholidayupdate[".recsPerRowPrint"] = 1;
$tdataholidayupdate[".mainTableOwnerID"] = "";
$tdataholidayupdate[".moveNext"] = 1;
$tdataholidayupdate[".entityType"] = 0;

$tdataholidayupdate[".strOriginalTableName"] = "holidayupdate";

	



$tdataholidayupdate[".showAddInPopup"] = false;

$tdataholidayupdate[".showEditInPopup"] = false;

$tdataholidayupdate[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataholidayupdate[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataholidayupdate[".fieldsForRegister"] = array();

$tdataholidayupdate[".listAjax"] = false;

	$tdataholidayupdate[".audit"] = false;

	$tdataholidayupdate[".locking"] = false;

$tdataholidayupdate[".edit"] = true;
$tdataholidayupdate[".afterEditAction"] = 0;
$tdataholidayupdate[".closePopupAfterEdit"] = 1;
$tdataholidayupdate[".afterEditActionDetTable"] = "Detail tables not found!";

$tdataholidayupdate[".add"] = true;
$tdataholidayupdate[".afterAddAction"] = 0;
$tdataholidayupdate[".closePopupAfterAdd"] = 1;
$tdataholidayupdate[".afterAddActionDetTable"] = "Detail tables not found!";

$tdataholidayupdate[".list"] = true;



$tdataholidayupdate[".reorderRecordsByHeader"] = true;


$tdataholidayupdate[".exportFormatting"] = 2;
$tdataholidayupdate[".exportDelimiter"] = ",";
		
$tdataholidayupdate[".view"] = true;

$tdataholidayupdate[".import"] = true;

$tdataholidayupdate[".exportTo"] = true;

$tdataholidayupdate[".printFriendly"] = true;

$tdataholidayupdate[".delete"] = true;

$tdataholidayupdate[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataholidayupdate[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataholidayupdate[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataholidayupdate[".searchSaving"] = false;
//

$tdataholidayupdate[".showSearchPanel"] = true;
		$tdataholidayupdate[".flexibleSearch"] = true;

$tdataholidayupdate[".isUseAjaxSuggest"] = true;

$tdataholidayupdate[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																													
		

$tdataholidayupdate[".ajaxCodeSnippetAdded"] = false;

$tdataholidayupdate[".buttonsAdded"] = true;

$tdataholidayupdate[".addPageEvents"] = true;

// use timepicker for search panel
$tdataholidayupdate[".isUseTimeForSearch"] = false;





$tdataholidayupdate[".allSearchFields"] = array();
$tdataholidayupdate[".filterFields"] = array();
$tdataholidayupdate[".requiredSearchFields"] = array();

$tdataholidayupdate[".allSearchFields"][] = "HuID";
	$tdataholidayupdate[".allSearchFields"][] = "HolidayType";
	$tdataholidayupdate[".allSearchFields"][] = "1stHalf";
	$tdataholidayupdate[".allSearchFields"][] = "2ndHalf";
	$tdataholidayupdate[".allSearchFields"][] = "HDate";
	$tdataholidayupdate[".allSearchFields"][] = "Employer";
	$tdataholidayupdate[".allSearchFields"][] = "Division";
	$tdataholidayupdate[".allSearchFields"][] = "Department";
	$tdataholidayupdate[".allSearchFields"][] = "Employee";
	$tdataholidayupdate[".allSearchFields"][] = "Remarks";
	

$tdataholidayupdate[".googleLikeFields"] = array();
$tdataholidayupdate[".googleLikeFields"][] = "HuID";
$tdataholidayupdate[".googleLikeFields"][] = "HolidayType";
$tdataholidayupdate[".googleLikeFields"][] = "1stHalf";
$tdataholidayupdate[".googleLikeFields"][] = "2ndHalf";
$tdataholidayupdate[".googleLikeFields"][] = "HDate";
$tdataholidayupdate[".googleLikeFields"][] = "Employer";
$tdataholidayupdate[".googleLikeFields"][] = "Division";
$tdataholidayupdate[".googleLikeFields"][] = "Department";
$tdataholidayupdate[".googleLikeFields"][] = "Employee";
$tdataholidayupdate[".googleLikeFields"][] = "Remarks";


$tdataholidayupdate[".advSearchFields"] = array();
$tdataholidayupdate[".advSearchFields"][] = "HuID";
$tdataholidayupdate[".advSearchFields"][] = "HolidayType";
$tdataholidayupdate[".advSearchFields"][] = "1stHalf";
$tdataholidayupdate[".advSearchFields"][] = "2ndHalf";
$tdataholidayupdate[".advSearchFields"][] = "HDate";
$tdataholidayupdate[".advSearchFields"][] = "Employer";
$tdataholidayupdate[".advSearchFields"][] = "Division";
$tdataholidayupdate[".advSearchFields"][] = "Department";
$tdataholidayupdate[".advSearchFields"][] = "Employee";
$tdataholidayupdate[".advSearchFields"][] = "Remarks";

$tdataholidayupdate[".tableType"] = "list";

$tdataholidayupdate[".printerPageOrientation"] = 0;
$tdataholidayupdate[".nPrinterPageScale"] = 100;

$tdataholidayupdate[".nPrinterSplitRecords"] = 40;

$tdataholidayupdate[".nPrinterPDFSplitRecords"] = 40;



$tdataholidayupdate[".geocodingEnabled"] = false;





$tdataholidayupdate[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataholidayupdate[".pageSize"] = 20;

$tdataholidayupdate[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataholidayupdate[".strOrderBy"] = $tstrOrderBy;

$tdataholidayupdate[".orderindexes"] = array();

$tdataholidayupdate[".sqlHead"] = "SELECT HuID,  	HolidayType,  	`1stHalf`,  	`2ndHalf`,  	HDate,  	Employer,  	Division,  	Department,  	Employee,  	Remarks";
$tdataholidayupdate[".sqlFrom"] = "FROM holidayupdate";
$tdataholidayupdate[".sqlWhereExpr"] = "";
$tdataholidayupdate[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataholidayupdate[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataholidayupdate[".arrGroupsPerPage"] = $arrGPP;

$tdataholidayupdate[".highlightSearchResults"] = true;

$tableKeysholidayupdate = array();
$tableKeysholidayupdate[] = "HuID";
$tdataholidayupdate[".Keys"] = $tableKeysholidayupdate;

$tdataholidayupdate[".listFields"] = array();
$tdataholidayupdate[".listFields"][] = "HuID";
$tdataholidayupdate[".listFields"][] = "HolidayType";
$tdataholidayupdate[".listFields"][] = "1stHalf";
$tdataholidayupdate[".listFields"][] = "2ndHalf";
$tdataholidayupdate[".listFields"][] = "HDate";
$tdataholidayupdate[".listFields"][] = "Employer";
$tdataholidayupdate[".listFields"][] = "Division";
$tdataholidayupdate[".listFields"][] = "Department";
$tdataholidayupdate[".listFields"][] = "Employee";
$tdataholidayupdate[".listFields"][] = "Remarks";

$tdataholidayupdate[".hideMobileList"] = array();


$tdataholidayupdate[".viewFields"] = array();
$tdataholidayupdate[".viewFields"][] = "HuID";
$tdataholidayupdate[".viewFields"][] = "HolidayType";
$tdataholidayupdate[".viewFields"][] = "1stHalf";
$tdataholidayupdate[".viewFields"][] = "2ndHalf";
$tdataholidayupdate[".viewFields"][] = "HDate";
$tdataholidayupdate[".viewFields"][] = "Employer";
$tdataholidayupdate[".viewFields"][] = "Division";
$tdataholidayupdate[".viewFields"][] = "Department";
$tdataholidayupdate[".viewFields"][] = "Employee";
$tdataholidayupdate[".viewFields"][] = "Remarks";

$tdataholidayupdate[".addFields"] = array();
$tdataholidayupdate[".addFields"][] = "HolidayType";
$tdataholidayupdate[".addFields"][] = "1stHalf";
$tdataholidayupdate[".addFields"][] = "2ndHalf";
$tdataholidayupdate[".addFields"][] = "HDate";
$tdataholidayupdate[".addFields"][] = "Employer";
$tdataholidayupdate[".addFields"][] = "Division";
$tdataholidayupdate[".addFields"][] = "Department";
$tdataholidayupdate[".addFields"][] = "Employee";
$tdataholidayupdate[".addFields"][] = "Remarks";

$tdataholidayupdate[".masterListFields"] = array();
$tdataholidayupdate[".masterListFields"][] = "HuID";
$tdataholidayupdate[".masterListFields"][] = "HolidayType";
$tdataholidayupdate[".masterListFields"][] = "1stHalf";
$tdataholidayupdate[".masterListFields"][] = "2ndHalf";
$tdataholidayupdate[".masterListFields"][] = "HDate";
$tdataholidayupdate[".masterListFields"][] = "Employer";
$tdataholidayupdate[".masterListFields"][] = "Division";
$tdataholidayupdate[".masterListFields"][] = "Department";
$tdataholidayupdate[".masterListFields"][] = "Employee";
$tdataholidayupdate[".masterListFields"][] = "Remarks";

$tdataholidayupdate[".inlineAddFields"] = array();
$tdataholidayupdate[".inlineAddFields"][] = "HolidayType";
$tdataholidayupdate[".inlineAddFields"][] = "1stHalf";
$tdataholidayupdate[".inlineAddFields"][] = "2ndHalf";
$tdataholidayupdate[".inlineAddFields"][] = "HDate";
$tdataholidayupdate[".inlineAddFields"][] = "Employer";
$tdataholidayupdate[".inlineAddFields"][] = "Division";
$tdataholidayupdate[".inlineAddFields"][] = "Department";
$tdataholidayupdate[".inlineAddFields"][] = "Employee";
$tdataholidayupdate[".inlineAddFields"][] = "Remarks";

$tdataholidayupdate[".editFields"] = array();
$tdataholidayupdate[".editFields"][] = "HolidayType";
$tdataholidayupdate[".editFields"][] = "1stHalf";
$tdataholidayupdate[".editFields"][] = "2ndHalf";
$tdataholidayupdate[".editFields"][] = "HDate";
$tdataholidayupdate[".editFields"][] = "Employer";
$tdataholidayupdate[".editFields"][] = "Division";
$tdataholidayupdate[".editFields"][] = "Department";
$tdataholidayupdate[".editFields"][] = "Employee";
$tdataholidayupdate[".editFields"][] = "Remarks";

$tdataholidayupdate[".inlineEditFields"] = array();
$tdataholidayupdate[".inlineEditFields"][] = "HolidayType";
$tdataholidayupdate[".inlineEditFields"][] = "1stHalf";
$tdataholidayupdate[".inlineEditFields"][] = "2ndHalf";
$tdataholidayupdate[".inlineEditFields"][] = "HDate";
$tdataholidayupdate[".inlineEditFields"][] = "Employer";
$tdataholidayupdate[".inlineEditFields"][] = "Division";
$tdataholidayupdate[".inlineEditFields"][] = "Department";
$tdataholidayupdate[".inlineEditFields"][] = "Employee";
$tdataholidayupdate[".inlineEditFields"][] = "Remarks";

$tdataholidayupdate[".updateSelectedFields"] = array();
$tdataholidayupdate[".updateSelectedFields"][] = "HolidayType";
$tdataholidayupdate[".updateSelectedFields"][] = "1stHalf";
$tdataholidayupdate[".updateSelectedFields"][] = "2ndHalf";
$tdataholidayupdate[".updateSelectedFields"][] = "HDate";
$tdataholidayupdate[".updateSelectedFields"][] = "Employer";
$tdataholidayupdate[".updateSelectedFields"][] = "Division";
$tdataholidayupdate[".updateSelectedFields"][] = "Department";
$tdataholidayupdate[".updateSelectedFields"][] = "Employee";
$tdataholidayupdate[".updateSelectedFields"][] = "Remarks";


$tdataholidayupdate[".exportFields"] = array();
$tdataholidayupdate[".exportFields"][] = "HuID";
$tdataholidayupdate[".exportFields"][] = "HolidayType";
$tdataholidayupdate[".exportFields"][] = "1stHalf";
$tdataholidayupdate[".exportFields"][] = "2ndHalf";
$tdataholidayupdate[".exportFields"][] = "HDate";
$tdataholidayupdate[".exportFields"][] = "Employer";
$tdataholidayupdate[".exportFields"][] = "Division";
$tdataholidayupdate[".exportFields"][] = "Department";
$tdataholidayupdate[".exportFields"][] = "Employee";
$tdataholidayupdate[".exportFields"][] = "Remarks";

$tdataholidayupdate[".importFields"] = array();
$tdataholidayupdate[".importFields"][] = "HuID";
$tdataholidayupdate[".importFields"][] = "HolidayType";
$tdataholidayupdate[".importFields"][] = "1stHalf";
$tdataholidayupdate[".importFields"][] = "2ndHalf";
$tdataholidayupdate[".importFields"][] = "HDate";
$tdataholidayupdate[".importFields"][] = "Employer";
$tdataholidayupdate[".importFields"][] = "Division";
$tdataholidayupdate[".importFields"][] = "Department";
$tdataholidayupdate[".importFields"][] = "Employee";
$tdataholidayupdate[".importFields"][] = "Remarks";

$tdataholidayupdate[".printFields"] = array();
$tdataholidayupdate[".printFields"][] = "HuID";
$tdataholidayupdate[".printFields"][] = "HolidayType";
$tdataholidayupdate[".printFields"][] = "1stHalf";
$tdataholidayupdate[".printFields"][] = "2ndHalf";
$tdataholidayupdate[".printFields"][] = "HDate";
$tdataholidayupdate[".printFields"][] = "Employer";
$tdataholidayupdate[".printFields"][] = "Division";
$tdataholidayupdate[".printFields"][] = "Department";
$tdataholidayupdate[".printFields"][] = "Employee";
$tdataholidayupdate[".printFields"][] = "Remarks";


//	HuID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "HuID";
	$fdata["GoodName"] = "HuID";
	$fdata["ownerTable"] = "holidayupdate";
	$fdata["Label"] = GetFieldLabel("holidayupdate","HuID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "HuID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HuID";

	
	
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




	$tdataholidayupdate["HuID"] = $fdata;
//	HolidayType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "HolidayType";
	$fdata["GoodName"] = "HolidayType";
	$fdata["ownerTable"] = "holidayupdate";
	$fdata["Label"] = GetFieldLabel("holidayupdate","HolidayType");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "holidaytype";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "HID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "HolidayType";
	
	

	
	$edata["LookupOrderBy"] = "HID";

	
	
	
	

	
	
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




	$tdataholidayupdate["HolidayType"] = $fdata;
//	1stHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "1stHalf";
	$fdata["GoodName"] = "1stHalf";
	$fdata["ownerTable"] = "holidayupdate";
	$fdata["Label"] = GetFieldLabel("holidayupdate","1stHalf");
	$fdata["FieldType"] = 16;

	
	
	
			
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

		$fdata["strField"] = "1stHalf";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`1stHalf`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	
		
	


	
	
	
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




	$tdataholidayupdate["1stHalf"] = $fdata;
//	2ndHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "2ndHalf";
	$fdata["GoodName"] = "2ndHalf";
	$fdata["ownerTable"] = "holidayupdate";
	$fdata["Label"] = GetFieldLabel("holidayupdate","2ndHalf");
	$fdata["FieldType"] = 16;

	
	
	
			
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

		$fdata["strField"] = "2ndHalf";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`2ndHalf`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	
		
	


	
	
	
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




	$tdataholidayupdate["2ndHalf"] = $fdata;
//	HDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "HDate";
	$fdata["GoodName"] = "HDate";
	$fdata["ownerTable"] = "holidayupdate";
	$fdata["Label"] = GetFieldLabel("holidayupdate","HDate");
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

		$fdata["strField"] = "HDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HDate";

	
	
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataholidayupdate["HDate"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "holidayupdate";
	$fdata["Label"] = GetFieldLabel("holidayupdate","Employer");
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




	$tdataholidayupdate["Employer"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "holidayupdate";
	$fdata["Label"] = GetFieldLabel("holidayupdate","Division");
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
	
	

	
	$edata["LookupOrderBy"] = "Division";

	
	
	
	

	
	
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




	$tdataholidayupdate["Division"] = $fdata;
//	Department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Department";
	$fdata["GoodName"] = "Department";
	$fdata["ownerTable"] = "holidayupdate";
	$fdata["Label"] = GetFieldLabel("holidayupdate","Department");
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
	
	

	
	$edata["LookupOrderBy"] = "Department";

	
	
	
	

	
	
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




	$tdataholidayupdate["Department"] = $fdata;
//	Employee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Employee";
	$fdata["GoodName"] = "Employee";
	$fdata["ownerTable"] = "holidayupdate";
	$fdata["Label"] = GetFieldLabel("holidayupdate","Employee");
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
	$edata["LookupTable"] = "demo_user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "EmployeeID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "user_name";
	
	

	
	$edata["LookupOrderBy"] = "user_name";

	
	
	
	

	
	
	
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




	$tdataholidayupdate["Employee"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "holidayupdate";
	$fdata["Label"] = GetFieldLabel("holidayupdate","Remarks");
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




	$tdataholidayupdate["Remarks"] = $fdata;


$tables_data["holidayupdate"]=&$tdataholidayupdate;
$field_labels["holidayupdate"] = &$fieldLabelsholidayupdate;
$fieldToolTips["holidayupdate"] = &$fieldToolTipsholidayupdate;
$placeHolders["holidayupdate"] = &$placeHoldersholidayupdate;
$page_titles["holidayupdate"] = &$pageTitlesholidayupdate;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["holidayupdate"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["holidayupdate"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_holidayupdate()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "HuID,  	HolidayType,  	`1stHalf`,  	`2ndHalf`,  	HDate,  	Employer,  	Division,  	Department,  	Employee,  	Remarks";
$proto0["m_strFrom"] = "FROM holidayupdate";
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
	"m_strName" => "HuID",
	"m_strTable" => "holidayupdate",
	"m_srcTableName" => "holidayupdate"
));

$proto6["m_sql"] = "HuID";
$proto6["m_srcTableName"] = "holidayupdate";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "HolidayType",
	"m_strTable" => "holidayupdate",
	"m_srcTableName" => "holidayupdate"
));

$proto8["m_sql"] = "HolidayType";
$proto8["m_srcTableName"] = "holidayupdate";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "1stHalf",
	"m_strTable" => "holidayupdate",
	"m_srcTableName" => "holidayupdate"
));

$proto10["m_sql"] = "`1stHalf`";
$proto10["m_srcTableName"] = "holidayupdate";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "2ndHalf",
	"m_strTable" => "holidayupdate",
	"m_srcTableName" => "holidayupdate"
));

$proto12["m_sql"] = "`2ndHalf`";
$proto12["m_srcTableName"] = "holidayupdate";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "HDate",
	"m_strTable" => "holidayupdate",
	"m_srcTableName" => "holidayupdate"
));

$proto14["m_sql"] = "HDate";
$proto14["m_srcTableName"] = "holidayupdate";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "holidayupdate",
	"m_srcTableName" => "holidayupdate"
));

$proto16["m_sql"] = "Employer";
$proto16["m_srcTableName"] = "holidayupdate";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "holidayupdate",
	"m_srcTableName" => "holidayupdate"
));

$proto18["m_sql"] = "Division";
$proto18["m_srcTableName"] = "holidayupdate";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "holidayupdate",
	"m_srcTableName" => "holidayupdate"
));

$proto20["m_sql"] = "Department";
$proto20["m_srcTableName"] = "holidayupdate";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Employee",
	"m_strTable" => "holidayupdate",
	"m_srcTableName" => "holidayupdate"
));

$proto22["m_sql"] = "Employee";
$proto22["m_srcTableName"] = "holidayupdate";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "holidayupdate",
	"m_srcTableName" => "holidayupdate"
));

$proto24["m_sql"] = "Remarks";
$proto24["m_srcTableName"] = "holidayupdate";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "holidayupdate";
$proto27["m_srcTableName"] = "holidayupdate";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "HuID";
$proto27["m_columns"][] = "HolidayType";
$proto27["m_columns"][] = "1stHalf";
$proto27["m_columns"][] = "2ndHalf";
$proto27["m_columns"][] = "HDate";
$proto27["m_columns"][] = "Employer";
$proto27["m_columns"][] = "Division";
$proto27["m_columns"][] = "Department";
$proto27["m_columns"][] = "Employee";
$proto27["m_columns"][] = "Remarks";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "holidayupdate";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "holidayupdate";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="holidayupdate";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_holidayupdate = createSqlQuery_holidayupdate();


	
		;

										

$tdataholidayupdate[".sqlquery"] = $queryData_holidayupdate;

include_once(getabspath("include/holidayupdate_events.php"));
$tableEvents["holidayupdate"] = new eventclass_holidayupdate;
$tdataholidayupdate[".hasEvents"] = true;

?>