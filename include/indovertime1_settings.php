<?php
require_once(getabspath("classes/cipherer.php"));




$tdataindovertime1 = array();
	$tdataindovertime1[".truncateText"] = true;
	$tdataindovertime1[".NumberOfChars"] = 80;
	$tdataindovertime1[".ShortName"] = "indovertime1";
	$tdataindovertime1[".OwnerID"] = "EmployeeID";
	$tdataindovertime1[".OriginalTable"] = "indovertime";

//	field labels
$fieldLabelsindovertime1 = array();
$fieldToolTipsindovertime1 = array();
$pageTitlesindovertime1 = array();
$placeHoldersindovertime1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsindovertime1["English"] = array();
	$fieldToolTipsindovertime1["English"] = array();
	$placeHoldersindovertime1["English"] = array();
	$pageTitlesindovertime1["English"] = array();
	$fieldLabelsindovertime1["English"]["iOTID"] = "I OTID";
	$fieldToolTipsindovertime1["English"]["iOTID"] = "";
	$placeHoldersindovertime1["English"]["iOTID"] = "";
	$fieldLabelsindovertime1["English"]["DateCreated"] = "Date Created";
	$fieldToolTipsindovertime1["English"]["DateCreated"] = "";
	$placeHoldersindovertime1["English"]["DateCreated"] = "";
	$fieldLabelsindovertime1["English"]["EmployeeID"] = "Employee";
	$fieldToolTipsindovertime1["English"]["EmployeeID"] = "";
	$placeHoldersindovertime1["English"]["EmployeeID"] = "";
	$fieldLabelsindovertime1["English"]["OTDate"] = "OTDate";
	$fieldToolTipsindovertime1["English"]["OTDate"] = "";
	$placeHoldersindovertime1["English"]["OTDate"] = "";
	$fieldLabelsindovertime1["English"]["FromTime"] = "From Time";
	$fieldToolTipsindovertime1["English"]["FromTime"] = "";
	$placeHoldersindovertime1["English"]["FromTime"] = "";
	$fieldLabelsindovertime1["English"]["ToTime"] = "To Time";
	$fieldToolTipsindovertime1["English"]["ToTime"] = "";
	$placeHoldersindovertime1["English"]["ToTime"] = "";
	$fieldLabelsindovertime1["English"]["NoMins"] = "No Mins";
	$fieldToolTipsindovertime1["English"]["NoMins"] = "";
	$placeHoldersindovertime1["English"]["NoMins"] = "";
	if (count($fieldToolTipsindovertime1["English"]))
		$tdataindovertime1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsindovertime1[""] = array();
	$fieldToolTipsindovertime1[""] = array();
	$placeHoldersindovertime1[""] = array();
	$pageTitlesindovertime1[""] = array();
	if (count($fieldToolTipsindovertime1[""]))
		$tdataindovertime1[".isUseToolTips"] = true;
}


	$tdataindovertime1[".NCSearch"] = true;



$tdataindovertime1[".shortTableName"] = "indovertime1";
$tdataindovertime1[".nSecOptions"] = 1;
$tdataindovertime1[".recsPerRowPrint"] = 1;
$tdataindovertime1[".mainTableOwnerID"] = "EmployeeID";
$tdataindovertime1[".moveNext"] = 1;
$tdataindovertime1[".entityType"] = 1;

$tdataindovertime1[".strOriginalTableName"] = "indovertime";

	



$tdataindovertime1[".showAddInPopup"] = false;

$tdataindovertime1[".showEditInPopup"] = false;

$tdataindovertime1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataindovertime1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataindovertime1[".fieldsForRegister"] = array();

$tdataindovertime1[".listAjax"] = false;

	$tdataindovertime1[".audit"] = false;

	$tdataindovertime1[".locking"] = false;

$tdataindovertime1[".edit"] = true;
$tdataindovertime1[".afterEditAction"] = 1;
$tdataindovertime1[".closePopupAfterEdit"] = 1;
$tdataindovertime1[".afterEditActionDetTable"] = "";

$tdataindovertime1[".add"] = true;
$tdataindovertime1[".afterAddAction"] = 1;
$tdataindovertime1[".closePopupAfterAdd"] = 1;
$tdataindovertime1[".afterAddActionDetTable"] = "";

$tdataindovertime1[".list"] = true;

$tdataindovertime1[".inlineEdit"] = true;

$tdataindovertime1[".updateSelected"] = true;

$tdataindovertime1[".reorderRecordsByHeader"] = true;


$tdataindovertime1[".exportFormatting"] = 2;
$tdataindovertime1[".exportDelimiter"] = ",";
		
$tdataindovertime1[".inlineAdd"] = true;
$tdataindovertime1[".copy"] = true;
$tdataindovertime1[".view"] = true;

$tdataindovertime1[".import"] = true;

$tdataindovertime1[".exportTo"] = true;

$tdataindovertime1[".printFriendly"] = true;

$tdataindovertime1[".delete"] = true;

$tdataindovertime1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataindovertime1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataindovertime1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataindovertime1[".searchSaving"] = false;
//

$tdataindovertime1[".showSearchPanel"] = true;
		$tdataindovertime1[".flexibleSearch"] = true;

$tdataindovertime1[".isUseAjaxSuggest"] = true;

$tdataindovertime1[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																					

$tdataindovertime1[".ajaxCodeSnippetAdded"] = false;

$tdataindovertime1[".buttonsAdded"] = false;

$tdataindovertime1[".addPageEvents"] = true;

// use timepicker for search panel
$tdataindovertime1[".isUseTimeForSearch"] = false;



$tdataindovertime1[".badgeColor"] = "00C2C5";


$tdataindovertime1[".allSearchFields"] = array();
$tdataindovertime1[".filterFields"] = array();
$tdataindovertime1[".requiredSearchFields"] = array();

$tdataindovertime1[".allSearchFields"][] = "iOTID";
	$tdataindovertime1[".allSearchFields"][] = "DateCreated";
	$tdataindovertime1[".allSearchFields"][] = "EmployeeID";
	$tdataindovertime1[".allSearchFields"][] = "OTDate";
	$tdataindovertime1[".allSearchFields"][] = "FromTime";
	$tdataindovertime1[".allSearchFields"][] = "ToTime";
	$tdataindovertime1[".allSearchFields"][] = "NoMins";
	

$tdataindovertime1[".googleLikeFields"] = array();
$tdataindovertime1[".googleLikeFields"][] = "iOTID";
$tdataindovertime1[".googleLikeFields"][] = "DateCreated";
$tdataindovertime1[".googleLikeFields"][] = "EmployeeID";
$tdataindovertime1[".googleLikeFields"][] = "OTDate";
$tdataindovertime1[".googleLikeFields"][] = "NoMins";
$tdataindovertime1[".googleLikeFields"][] = "FromTime";
$tdataindovertime1[".googleLikeFields"][] = "ToTime";


$tdataindovertime1[".advSearchFields"] = array();
$tdataindovertime1[".advSearchFields"][] = "iOTID";
$tdataindovertime1[".advSearchFields"][] = "DateCreated";
$tdataindovertime1[".advSearchFields"][] = "EmployeeID";
$tdataindovertime1[".advSearchFields"][] = "OTDate";
$tdataindovertime1[".advSearchFields"][] = "FromTime";
$tdataindovertime1[".advSearchFields"][] = "ToTime";
$tdataindovertime1[".advSearchFields"][] = "NoMins";

$tdataindovertime1[".tableType"] = "list";

$tdataindovertime1[".printerPageOrientation"] = 0;
$tdataindovertime1[".nPrinterPageScale"] = 100;

$tdataindovertime1[".nPrinterSplitRecords"] = 40;

$tdataindovertime1[".nPrinterPDFSplitRecords"] = 40;



$tdataindovertime1[".geocodingEnabled"] = false;





$tdataindovertime1[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataindovertime1[".pageSize"] = 20;

$tdataindovertime1[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY iOTID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataindovertime1[".strOrderBy"] = $tstrOrderBy;

$tdataindovertime1[".orderindexes"] = array();
	$tdataindovertime1[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "iOTID");


$tdataindovertime1[".sqlHead"] = "SELECT iOTID,  DateCreated,  EmployeeID,  OTDate,  NoMins,  FromTime,  ToTime";
$tdataindovertime1[".sqlFrom"] = "FROM indovertime";
$tdataindovertime1[".sqlWhereExpr"] = "";
$tdataindovertime1[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataindovertime1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataindovertime1[".arrGroupsPerPage"] = $arrGPP;

$tdataindovertime1[".highlightSearchResults"] = true;

$tableKeysindovertime1 = array();
$tableKeysindovertime1[] = "iOTID";
$tdataindovertime1[".Keys"] = $tableKeysindovertime1;

$tdataindovertime1[".listFields"] = array();
$tdataindovertime1[".listFields"][] = "iOTID";
$tdataindovertime1[".listFields"][] = "DateCreated";
$tdataindovertime1[".listFields"][] = "EmployeeID";
$tdataindovertime1[".listFields"][] = "OTDate";
$tdataindovertime1[".listFields"][] = "FromTime";
$tdataindovertime1[".listFields"][] = "ToTime";
$tdataindovertime1[".listFields"][] = "NoMins";

$tdataindovertime1[".hideMobileList"] = array();


$tdataindovertime1[".viewFields"] = array();
$tdataindovertime1[".viewFields"][] = "iOTID";
$tdataindovertime1[".viewFields"][] = "DateCreated";
$tdataindovertime1[".viewFields"][] = "EmployeeID";
$tdataindovertime1[".viewFields"][] = "OTDate";
$tdataindovertime1[".viewFields"][] = "FromTime";
$tdataindovertime1[".viewFields"][] = "ToTime";
$tdataindovertime1[".viewFields"][] = "NoMins";

$tdataindovertime1[".addFields"] = array();
$tdataindovertime1[".addFields"][] = "DateCreated";
$tdataindovertime1[".addFields"][] = "OTDate";
$tdataindovertime1[".addFields"][] = "FromTime";
$tdataindovertime1[".addFields"][] = "ToTime";
$tdataindovertime1[".addFields"][] = "NoMins";

$tdataindovertime1[".masterListFields"] = array();
$tdataindovertime1[".masterListFields"][] = "iOTID";
$tdataindovertime1[".masterListFields"][] = "DateCreated";
$tdataindovertime1[".masterListFields"][] = "EmployeeID";
$tdataindovertime1[".masterListFields"][] = "OTDate";
$tdataindovertime1[".masterListFields"][] = "FromTime";
$tdataindovertime1[".masterListFields"][] = "ToTime";
$tdataindovertime1[".masterListFields"][] = "NoMins";

$tdataindovertime1[".inlineAddFields"] = array();
$tdataindovertime1[".inlineAddFields"][] = "DateCreated";
$tdataindovertime1[".inlineAddFields"][] = "OTDate";
$tdataindovertime1[".inlineAddFields"][] = "FromTime";
$tdataindovertime1[".inlineAddFields"][] = "ToTime";
$tdataindovertime1[".inlineAddFields"][] = "NoMins";

$tdataindovertime1[".editFields"] = array();
$tdataindovertime1[".editFields"][] = "DateCreated";
$tdataindovertime1[".editFields"][] = "EmployeeID";
$tdataindovertime1[".editFields"][] = "OTDate";
$tdataindovertime1[".editFields"][] = "FromTime";
$tdataindovertime1[".editFields"][] = "ToTime";
$tdataindovertime1[".editFields"][] = "NoMins";

$tdataindovertime1[".inlineEditFields"] = array();
$tdataindovertime1[".inlineEditFields"][] = "DateCreated";
$tdataindovertime1[".inlineEditFields"][] = "EmployeeID";
$tdataindovertime1[".inlineEditFields"][] = "OTDate";
$tdataindovertime1[".inlineEditFields"][] = "FromTime";
$tdataindovertime1[".inlineEditFields"][] = "ToTime";
$tdataindovertime1[".inlineEditFields"][] = "NoMins";

$tdataindovertime1[".updateSelectedFields"] = array();
$tdataindovertime1[".updateSelectedFields"][] = "DateCreated";
$tdataindovertime1[".updateSelectedFields"][] = "EmployeeID";
$tdataindovertime1[".updateSelectedFields"][] = "OTDate";
$tdataindovertime1[".updateSelectedFields"][] = "FromTime";
$tdataindovertime1[".updateSelectedFields"][] = "ToTime";
$tdataindovertime1[".updateSelectedFields"][] = "NoMins";


$tdataindovertime1[".exportFields"] = array();
$tdataindovertime1[".exportFields"][] = "iOTID";
$tdataindovertime1[".exportFields"][] = "DateCreated";
$tdataindovertime1[".exportFields"][] = "EmployeeID";
$tdataindovertime1[".exportFields"][] = "OTDate";
$tdataindovertime1[".exportFields"][] = "FromTime";
$tdataindovertime1[".exportFields"][] = "ToTime";
$tdataindovertime1[".exportFields"][] = "NoMins";

$tdataindovertime1[".importFields"] = array();
$tdataindovertime1[".importFields"][] = "iOTID";
$tdataindovertime1[".importFields"][] = "DateCreated";
$tdataindovertime1[".importFields"][] = "EmployeeID";
$tdataindovertime1[".importFields"][] = "OTDate";
$tdataindovertime1[".importFields"][] = "NoMins";
$tdataindovertime1[".importFields"][] = "FromTime";
$tdataindovertime1[".importFields"][] = "ToTime";

$tdataindovertime1[".printFields"] = array();
$tdataindovertime1[".printFields"][] = "iOTID";
$tdataindovertime1[".printFields"][] = "DateCreated";
$tdataindovertime1[".printFields"][] = "EmployeeID";
$tdataindovertime1[".printFields"][] = "OTDate";
$tdataindovertime1[".printFields"][] = "FromTime";
$tdataindovertime1[".printFields"][] = "ToTime";
$tdataindovertime1[".printFields"][] = "NoMins";


//	iOTID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "iOTID";
	$fdata["GoodName"] = "iOTID";
	$fdata["ownerTable"] = "indovertime";
	$fdata["Label"] = GetFieldLabel("indovertime1","iOTID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "iOTID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "iOTID";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataindovertime1["iOTID"] = $fdata;
//	DateCreated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DateCreated";
	$fdata["GoodName"] = "DateCreated";
	$fdata["ownerTable"] = "indovertime";
	$fdata["Label"] = GetFieldLabel("indovertime1","DateCreated");
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

		$fdata["strField"] = "DateCreated";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DateCreated";

	
	
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

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 180;

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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataindovertime1["DateCreated"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "indovertime";
	$fdata["Label"] = GetFieldLabel("indovertime1","EmployeeID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "demo_user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EmployeeID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "user_name";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 250;

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




	$tdataindovertime1["EmployeeID"] = $fdata;
//	OTDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "OTDate";
	$fdata["GoodName"] = "OTDate";
	$fdata["ownerTable"] = "indovertime";
	$fdata["Label"] = GetFieldLabel("indovertime1","OTDate");
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

		$fdata["strField"] = "OTDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OTDate";

	
	
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

	
	
	
		$edata["controlWidth"] = 120;

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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataindovertime1["OTDate"] = $fdata;
//	NoMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "NoMins";
	$fdata["GoodName"] = "NoMins";
	$fdata["ownerTable"] = "indovertime";
	$fdata["Label"] = GetFieldLabel("indovertime1","NoMins");
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

		$fdata["strField"] = "NoMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NoMins";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataindovertime1["NoMins"] = $fdata;
//	FromTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "FromTime";
	$fdata["GoodName"] = "FromTime";
	$fdata["ownerTable"] = "indovertime";
	$fdata["Label"] = GetFieldLabel("indovertime1","FromTime");
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

		$fdata["strField"] = "FromTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FromTime";

	
	
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

		$edata["ShowTime"] = true;

	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 11;
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




	$tdataindovertime1["FromTime"] = $fdata;
//	ToTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ToTime";
	$fdata["GoodName"] = "ToTime";
	$fdata["ownerTable"] = "indovertime";
	$fdata["Label"] = GetFieldLabel("indovertime1","ToTime");
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

		$fdata["strField"] = "ToTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ToTime";

	
	
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

		$edata["ShowTime"] = true;

	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 11;
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




	$tdataindovertime1["ToTime"] = $fdata;


$tables_data["indovertime1"]=&$tdataindovertime1;
$field_labels["indovertime1"] = &$fieldLabelsindovertime1;
$fieldToolTips["indovertime1"] = &$fieldToolTipsindovertime1;
$placeHolders["indovertime1"] = &$placeHoldersindovertime1;
$page_titles["indovertime1"] = &$pageTitlesindovertime1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["indovertime1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["indovertime1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_indovertime1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "iOTID,  DateCreated,  EmployeeID,  OTDate,  NoMins,  FromTime,  ToTime";
$proto0["m_strFrom"] = "FROM indovertime";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY iOTID DESC";
	
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
	"m_strName" => "iOTID",
	"m_strTable" => "indovertime",
	"m_srcTableName" => "indovertime1"
));

$proto6["m_sql"] = "iOTID";
$proto6["m_srcTableName"] = "indovertime1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DateCreated",
	"m_strTable" => "indovertime",
	"m_srcTableName" => "indovertime1"
));

$proto8["m_sql"] = "DateCreated";
$proto8["m_srcTableName"] = "indovertime1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "indovertime",
	"m_srcTableName" => "indovertime1"
));

$proto10["m_sql"] = "EmployeeID";
$proto10["m_srcTableName"] = "indovertime1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "OTDate",
	"m_strTable" => "indovertime",
	"m_srcTableName" => "indovertime1"
));

$proto12["m_sql"] = "OTDate";
$proto12["m_srcTableName"] = "indovertime1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "NoMins",
	"m_strTable" => "indovertime",
	"m_srcTableName" => "indovertime1"
));

$proto14["m_sql"] = "NoMins";
$proto14["m_srcTableName"] = "indovertime1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "FromTime",
	"m_strTable" => "indovertime",
	"m_srcTableName" => "indovertime1"
));

$proto16["m_sql"] = "FromTime";
$proto16["m_srcTableName"] = "indovertime1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ToTime",
	"m_strTable" => "indovertime",
	"m_srcTableName" => "indovertime1"
));

$proto18["m_sql"] = "ToTime";
$proto18["m_srcTableName"] = "indovertime1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "indovertime";
$proto21["m_srcTableName"] = "indovertime1";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "iOTID";
$proto21["m_columns"][] = "DateCreated";
$proto21["m_columns"][] = "EmployeeID";
$proto21["m_columns"][] = "OTDate";
$proto21["m_columns"][] = "NoMins";
$proto21["m_columns"][] = "OtiD";
$proto21["m_columns"][] = "FromTime";
$proto21["m_columns"][] = "ToTime";
$proto21["m_columns"][] = "Crossmidnight";
$proto21["m_columns"][] = "ItiD";
$proto21["m_columns"][] = "Reason";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "indovertime";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "indovertime1";
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
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "iOTID",
	"m_strTable" => "indovertime",
	"m_srcTableName" => "indovertime1"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 0;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="indovertime1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_indovertime1 = createSqlQuery_indovertime1();


	
		;

							

$tdataindovertime1[".sqlquery"] = $queryData_indovertime1;

include_once(getabspath("include/indovertime1_events.php"));
$tableEvents["indovertime1"] = new eventclass_indovertime1;
$tdataindovertime1[".hasEvents"] = true;

?>