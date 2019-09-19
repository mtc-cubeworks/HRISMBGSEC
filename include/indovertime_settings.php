<?php
require_once(getabspath("classes/cipherer.php"));




$tdataindovertime = array();
	$tdataindovertime[".truncateText"] = true;
	$tdataindovertime[".NumberOfChars"] = 80;
	$tdataindovertime[".ShortName"] = "indovertime";
	$tdataindovertime[".OwnerID"] = "";
	$tdataindovertime[".OriginalTable"] = "indovertime";

//	field labels
$fieldLabelsindovertime = array();
$fieldToolTipsindovertime = array();
$pageTitlesindovertime = array();
$placeHoldersindovertime = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsindovertime["English"] = array();
	$fieldToolTipsindovertime["English"] = array();
	$placeHoldersindovertime["English"] = array();
	$pageTitlesindovertime["English"] = array();
	$fieldLabelsindovertime["English"]["iOTID"] = "I OTID";
	$fieldToolTipsindovertime["English"]["iOTID"] = "";
	$placeHoldersindovertime["English"]["iOTID"] = "";
	$fieldLabelsindovertime["English"]["DateCreated"] = "Date Created";
	$fieldToolTipsindovertime["English"]["DateCreated"] = "";
	$placeHoldersindovertime["English"]["DateCreated"] = "";
	$fieldLabelsindovertime["English"]["EmployeeID"] = "Employee";
	$fieldToolTipsindovertime["English"]["EmployeeID"] = "";
	$placeHoldersindovertime["English"]["EmployeeID"] = "";
	$fieldLabelsindovertime["English"]["OTDate"] = "OTDate";
	$fieldToolTipsindovertime["English"]["OTDate"] = "";
	$placeHoldersindovertime["English"]["OTDate"] = "";
	$fieldLabelsindovertime["English"]["FromTime"] = "From Time";
	$fieldToolTipsindovertime["English"]["FromTime"] = "";
	$placeHoldersindovertime["English"]["FromTime"] = "";
	$fieldLabelsindovertime["English"]["ToTime"] = "To Time";
	$fieldToolTipsindovertime["English"]["ToTime"] = "";
	$placeHoldersindovertime["English"]["ToTime"] = "";
	$fieldLabelsindovertime["English"]["NoMins"] = "No Mins";
	$fieldToolTipsindovertime["English"]["NoMins"] = "";
	$placeHoldersindovertime["English"]["NoMins"] = "";
	$fieldLabelsindovertime["English"]["Reason"] = "Reason";
	$fieldToolTipsindovertime["English"]["Reason"] = "";
	$placeHoldersindovertime["English"]["Reason"] = "";
	if (count($fieldToolTipsindovertime["English"]))
		$tdataindovertime[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsindovertime[""] = array();
	$fieldToolTipsindovertime[""] = array();
	$placeHoldersindovertime[""] = array();
	$pageTitlesindovertime[""] = array();
	if (count($fieldToolTipsindovertime[""]))
		$tdataindovertime[".isUseToolTips"] = true;
}


	$tdataindovertime[".NCSearch"] = true;



$tdataindovertime[".shortTableName"] = "indovertime";
$tdataindovertime[".nSecOptions"] = 0;
$tdataindovertime[".recsPerRowPrint"] = 1;
$tdataindovertime[".mainTableOwnerID"] = "";
$tdataindovertime[".moveNext"] = 1;
$tdataindovertime[".entityType"] = 0;

$tdataindovertime[".strOriginalTableName"] = "indovertime";

	



$tdataindovertime[".showAddInPopup"] = false;

$tdataindovertime[".showEditInPopup"] = false;

$tdataindovertime[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataindovertime[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataindovertime[".fieldsForRegister"] = array();

$tdataindovertime[".listAjax"] = false;

	$tdataindovertime[".audit"] = false;

	$tdataindovertime[".locking"] = false;

$tdataindovertime[".edit"] = true;
$tdataindovertime[".afterEditAction"] = 1;
$tdataindovertime[".closePopupAfterEdit"] = 1;
$tdataindovertime[".afterEditActionDetTable"] = "";

$tdataindovertime[".add"] = true;
$tdataindovertime[".afterAddAction"] = 1;
$tdataindovertime[".closePopupAfterAdd"] = 1;
$tdataindovertime[".afterAddActionDetTable"] = "";

$tdataindovertime[".list"] = true;

$tdataindovertime[".inlineEdit"] = true;

$tdataindovertime[".updateSelected"] = true;

$tdataindovertime[".reorderRecordsByHeader"] = true;


$tdataindovertime[".exportFormatting"] = 2;
$tdataindovertime[".exportDelimiter"] = ",";
		
$tdataindovertime[".inlineAdd"] = true;
$tdataindovertime[".copy"] = true;
$tdataindovertime[".view"] = true;

$tdataindovertime[".import"] = true;

$tdataindovertime[".exportTo"] = true;

$tdataindovertime[".printFriendly"] = true;

$tdataindovertime[".delete"] = true;

$tdataindovertime[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataindovertime[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataindovertime[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataindovertime[".searchSaving"] = false;
//

$tdataindovertime[".showSearchPanel"] = true;
		$tdataindovertime[".flexibleSearch"] = true;

$tdataindovertime[".isUseAjaxSuggest"] = true;

$tdataindovertime[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																					

$tdataindovertime[".ajaxCodeSnippetAdded"] = false;

$tdataindovertime[".buttonsAdded"] = false;

$tdataindovertime[".addPageEvents"] = true;

// use timepicker for search panel
$tdataindovertime[".isUseTimeForSearch"] = false;





$tdataindovertime[".allSearchFields"] = array();
$tdataindovertime[".filterFields"] = array();
$tdataindovertime[".requiredSearchFields"] = array();

$tdataindovertime[".allSearchFields"][] = "iOTID";
	$tdataindovertime[".allSearchFields"][] = "DateCreated";
	$tdataindovertime[".allSearchFields"][] = "EmployeeID";
	$tdataindovertime[".allSearchFields"][] = "Reason";
	$tdataindovertime[".allSearchFields"][] = "OTDate";
	$tdataindovertime[".allSearchFields"][] = "FromTime";
	$tdataindovertime[".allSearchFields"][] = "ToTime";
	$tdataindovertime[".allSearchFields"][] = "NoMins";
	

$tdataindovertime[".googleLikeFields"] = array();
$tdataindovertime[".googleLikeFields"][] = "iOTID";
$tdataindovertime[".googleLikeFields"][] = "DateCreated";
$tdataindovertime[".googleLikeFields"][] = "EmployeeID";
$tdataindovertime[".googleLikeFields"][] = "OTDate";
$tdataindovertime[".googleLikeFields"][] = "NoMins";
$tdataindovertime[".googleLikeFields"][] = "FromTime";
$tdataindovertime[".googleLikeFields"][] = "ToTime";
$tdataindovertime[".googleLikeFields"][] = "Reason";


$tdataindovertime[".advSearchFields"] = array();
$tdataindovertime[".advSearchFields"][] = "iOTID";
$tdataindovertime[".advSearchFields"][] = "DateCreated";
$tdataindovertime[".advSearchFields"][] = "EmployeeID";
$tdataindovertime[".advSearchFields"][] = "Reason";
$tdataindovertime[".advSearchFields"][] = "OTDate";
$tdataindovertime[".advSearchFields"][] = "FromTime";
$tdataindovertime[".advSearchFields"][] = "ToTime";
$tdataindovertime[".advSearchFields"][] = "NoMins";

$tdataindovertime[".tableType"] = "list";

$tdataindovertime[".printerPageOrientation"] = 0;
$tdataindovertime[".nPrinterPageScale"] = 100;

$tdataindovertime[".nPrinterSplitRecords"] = 40;

$tdataindovertime[".nPrinterPDFSplitRecords"] = 40;



$tdataindovertime[".geocodingEnabled"] = false;





$tdataindovertime[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataindovertime[".pageSize"] = 20;

$tdataindovertime[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY iOTID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataindovertime[".strOrderBy"] = $tstrOrderBy;

$tdataindovertime[".orderindexes"] = array();
	$tdataindovertime[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "iOTID");


$tdataindovertime[".sqlHead"] = "SELECT iOTID,  DateCreated,  EmployeeID,  OTDate,  NoMins,  FromTime,  ToTime,  Reason";
$tdataindovertime[".sqlFrom"] = "FROM indovertime";
$tdataindovertime[".sqlWhereExpr"] = "";
$tdataindovertime[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataindovertime[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataindovertime[".arrGroupsPerPage"] = $arrGPP;

$tdataindovertime[".highlightSearchResults"] = true;

$tableKeysindovertime = array();
$tableKeysindovertime[] = "iOTID";
$tdataindovertime[".Keys"] = $tableKeysindovertime;

$tdataindovertime[".listFields"] = array();
$tdataindovertime[".listFields"][] = "iOTID";
$tdataindovertime[".listFields"][] = "DateCreated";
$tdataindovertime[".listFields"][] = "EmployeeID";
$tdataindovertime[".listFields"][] = "Reason";
$tdataindovertime[".listFields"][] = "OTDate";
$tdataindovertime[".listFields"][] = "FromTime";
$tdataindovertime[".listFields"][] = "ToTime";
$tdataindovertime[".listFields"][] = "NoMins";

$tdataindovertime[".hideMobileList"] = array();


$tdataindovertime[".viewFields"] = array();
$tdataindovertime[".viewFields"][] = "iOTID";
$tdataindovertime[".viewFields"][] = "DateCreated";
$tdataindovertime[".viewFields"][] = "EmployeeID";
$tdataindovertime[".viewFields"][] = "Reason";
$tdataindovertime[".viewFields"][] = "OTDate";
$tdataindovertime[".viewFields"][] = "FromTime";
$tdataindovertime[".viewFields"][] = "ToTime";
$tdataindovertime[".viewFields"][] = "NoMins";

$tdataindovertime[".addFields"] = array();
$tdataindovertime[".addFields"][] = "DateCreated";
$tdataindovertime[".addFields"][] = "EmployeeID";
$tdataindovertime[".addFields"][] = "Reason";
$tdataindovertime[".addFields"][] = "OTDate";
$tdataindovertime[".addFields"][] = "FromTime";
$tdataindovertime[".addFields"][] = "ToTime";
$tdataindovertime[".addFields"][] = "NoMins";

$tdataindovertime[".masterListFields"] = array();
$tdataindovertime[".masterListFields"][] = "iOTID";
$tdataindovertime[".masterListFields"][] = "DateCreated";
$tdataindovertime[".masterListFields"][] = "EmployeeID";
$tdataindovertime[".masterListFields"][] = "Reason";
$tdataindovertime[".masterListFields"][] = "OTDate";
$tdataindovertime[".masterListFields"][] = "FromTime";
$tdataindovertime[".masterListFields"][] = "ToTime";
$tdataindovertime[".masterListFields"][] = "NoMins";

$tdataindovertime[".inlineAddFields"] = array();
$tdataindovertime[".inlineAddFields"][] = "DateCreated";
$tdataindovertime[".inlineAddFields"][] = "EmployeeID";
$tdataindovertime[".inlineAddFields"][] = "Reason";
$tdataindovertime[".inlineAddFields"][] = "OTDate";
$tdataindovertime[".inlineAddFields"][] = "FromTime";
$tdataindovertime[".inlineAddFields"][] = "ToTime";
$tdataindovertime[".inlineAddFields"][] = "NoMins";

$tdataindovertime[".editFields"] = array();
$tdataindovertime[".editFields"][] = "DateCreated";
$tdataindovertime[".editFields"][] = "EmployeeID";
$tdataindovertime[".editFields"][] = "Reason";
$tdataindovertime[".editFields"][] = "OTDate";
$tdataindovertime[".editFields"][] = "FromTime";
$tdataindovertime[".editFields"][] = "ToTime";
$tdataindovertime[".editFields"][] = "NoMins";

$tdataindovertime[".inlineEditFields"] = array();
$tdataindovertime[".inlineEditFields"][] = "DateCreated";
$tdataindovertime[".inlineEditFields"][] = "EmployeeID";
$tdataindovertime[".inlineEditFields"][] = "Reason";
$tdataindovertime[".inlineEditFields"][] = "OTDate";
$tdataindovertime[".inlineEditFields"][] = "FromTime";
$tdataindovertime[".inlineEditFields"][] = "ToTime";
$tdataindovertime[".inlineEditFields"][] = "NoMins";

$tdataindovertime[".updateSelectedFields"] = array();
$tdataindovertime[".updateSelectedFields"][] = "DateCreated";
$tdataindovertime[".updateSelectedFields"][] = "EmployeeID";
$tdataindovertime[".updateSelectedFields"][] = "OTDate";
$tdataindovertime[".updateSelectedFields"][] = "FromTime";
$tdataindovertime[".updateSelectedFields"][] = "ToTime";
$tdataindovertime[".updateSelectedFields"][] = "NoMins";


$tdataindovertime[".exportFields"] = array();
$tdataindovertime[".exportFields"][] = "iOTID";
$tdataindovertime[".exportFields"][] = "DateCreated";
$tdataindovertime[".exportFields"][] = "EmployeeID";
$tdataindovertime[".exportFields"][] = "Reason";
$tdataindovertime[".exportFields"][] = "OTDate";
$tdataindovertime[".exportFields"][] = "FromTime";
$tdataindovertime[".exportFields"][] = "ToTime";
$tdataindovertime[".exportFields"][] = "NoMins";

$tdataindovertime[".importFields"] = array();
$tdataindovertime[".importFields"][] = "iOTID";
$tdataindovertime[".importFields"][] = "DateCreated";
$tdataindovertime[".importFields"][] = "EmployeeID";
$tdataindovertime[".importFields"][] = "OTDate";
$tdataindovertime[".importFields"][] = "NoMins";
$tdataindovertime[".importFields"][] = "FromTime";
$tdataindovertime[".importFields"][] = "ToTime";
$tdataindovertime[".importFields"][] = "Reason";

$tdataindovertime[".printFields"] = array();
$tdataindovertime[".printFields"][] = "iOTID";
$tdataindovertime[".printFields"][] = "DateCreated";
$tdataindovertime[".printFields"][] = "EmployeeID";
$tdataindovertime[".printFields"][] = "Reason";
$tdataindovertime[".printFields"][] = "OTDate";
$tdataindovertime[".printFields"][] = "FromTime";
$tdataindovertime[".printFields"][] = "ToTime";
$tdataindovertime[".printFields"][] = "NoMins";


//	iOTID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "iOTID";
	$fdata["GoodName"] = "iOTID";
	$fdata["ownerTable"] = "indovertime";
	$fdata["Label"] = GetFieldLabel("indovertime","iOTID");
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




	$tdataindovertime["iOTID"] = $fdata;
//	DateCreated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DateCreated";
	$fdata["GoodName"] = "DateCreated";
	$fdata["ownerTable"] = "indovertime";
	$fdata["Label"] = GetFieldLabel("indovertime","DateCreated");
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




	$tdataindovertime["DateCreated"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "indovertime";
	$fdata["Label"] = GetFieldLabel("indovertime","EmployeeID");
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




	$tdataindovertime["EmployeeID"] = $fdata;
//	OTDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "OTDate";
	$fdata["GoodName"] = "OTDate";
	$fdata["ownerTable"] = "indovertime";
	$fdata["Label"] = GetFieldLabel("indovertime","OTDate");
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




	$tdataindovertime["OTDate"] = $fdata;
//	NoMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "NoMins";
	$fdata["GoodName"] = "NoMins";
	$fdata["ownerTable"] = "indovertime";
	$fdata["Label"] = GetFieldLabel("indovertime","NoMins");
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




	$tdataindovertime["NoMins"] = $fdata;
//	FromTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "FromTime";
	$fdata["GoodName"] = "FromTime";
	$fdata["ownerTable"] = "indovertime";
	$fdata["Label"] = GetFieldLabel("indovertime","FromTime");
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




	$tdataindovertime["FromTime"] = $fdata;
//	ToTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ToTime";
	$fdata["GoodName"] = "ToTime";
	$fdata["ownerTable"] = "indovertime";
	$fdata["Label"] = GetFieldLabel("indovertime","ToTime");
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




	$tdataindovertime["ToTime"] = $fdata;
//	Reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Reason";
	$fdata["GoodName"] = "Reason";
	$fdata["ownerTable"] = "indovertime";
	$fdata["Label"] = GetFieldLabel("indovertime","Reason");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Reason";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Reason";

	
	
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
			$edata["EditParams"].= " maxlength=80";

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




	$tdataindovertime["Reason"] = $fdata;


$tables_data["indovertime"]=&$tdataindovertime;
$field_labels["indovertime"] = &$fieldLabelsindovertime;
$fieldToolTips["indovertime"] = &$fieldToolTipsindovertime;
$placeHolders["indovertime"] = &$placeHoldersindovertime;
$page_titles["indovertime"] = &$pageTitlesindovertime;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["indovertime"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["indovertime"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_indovertime()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "iOTID,  DateCreated,  EmployeeID,  OTDate,  NoMins,  FromTime,  ToTime,  Reason";
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
	"m_srcTableName" => "indovertime"
));

$proto6["m_sql"] = "iOTID";
$proto6["m_srcTableName"] = "indovertime";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DateCreated",
	"m_strTable" => "indovertime",
	"m_srcTableName" => "indovertime"
));

$proto8["m_sql"] = "DateCreated";
$proto8["m_srcTableName"] = "indovertime";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "indovertime",
	"m_srcTableName" => "indovertime"
));

$proto10["m_sql"] = "EmployeeID";
$proto10["m_srcTableName"] = "indovertime";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "OTDate",
	"m_strTable" => "indovertime",
	"m_srcTableName" => "indovertime"
));

$proto12["m_sql"] = "OTDate";
$proto12["m_srcTableName"] = "indovertime";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "NoMins",
	"m_strTable" => "indovertime",
	"m_srcTableName" => "indovertime"
));

$proto14["m_sql"] = "NoMins";
$proto14["m_srcTableName"] = "indovertime";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "FromTime",
	"m_strTable" => "indovertime",
	"m_srcTableName" => "indovertime"
));

$proto16["m_sql"] = "FromTime";
$proto16["m_srcTableName"] = "indovertime";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ToTime",
	"m_strTable" => "indovertime",
	"m_srcTableName" => "indovertime"
));

$proto18["m_sql"] = "ToTime";
$proto18["m_srcTableName"] = "indovertime";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Reason",
	"m_strTable" => "indovertime",
	"m_srcTableName" => "indovertime"
));

$proto20["m_sql"] = "Reason";
$proto20["m_srcTableName"] = "indovertime";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "indovertime";
$proto23["m_srcTableName"] = "indovertime";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "iOTID";
$proto23["m_columns"][] = "DateCreated";
$proto23["m_columns"][] = "EmployeeID";
$proto23["m_columns"][] = "OTDate";
$proto23["m_columns"][] = "NoMins";
$proto23["m_columns"][] = "OtiD";
$proto23["m_columns"][] = "FromTime";
$proto23["m_columns"][] = "ToTime";
$proto23["m_columns"][] = "Crossmidnight";
$proto23["m_columns"][] = "ItiD";
$proto23["m_columns"][] = "Reason";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "indovertime";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "indovertime";
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
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "iOTID",
	"m_strTable" => "indovertime",
	"m_srcTableName" => "indovertime"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 0;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="indovertime";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_indovertime = createSqlQuery_indovertime();


	
		;

								

$tdataindovertime[".sqlquery"] = $queryData_indovertime;

include_once(getabspath("include/indovertime_events.php"));
$tableEvents["indovertime"] = new eventclass_indovertime;
$tdataindovertime[".hasEvents"] = true;

?>