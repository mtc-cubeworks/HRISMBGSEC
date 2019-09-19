<?php
require_once(getabspath("classes/cipherer.php"));




$tdataileave = array();
	$tdataileave[".truncateText"] = true;
	$tdataileave[".NumberOfChars"] = 80;
	$tdataileave[".ShortName"] = "ileave";
	$tdataileave[".OwnerID"] = "";
	$tdataileave[".OriginalTable"] = "ileave";

//	field labels
$fieldLabelsileave = array();
$fieldToolTipsileave = array();
$pageTitlesileave = array();
$placeHoldersileave = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsileave["English"] = array();
	$fieldToolTipsileave["English"] = array();
	$placeHoldersileave["English"] = array();
	$pageTitlesileave["English"] = array();
	$fieldLabelsileave["English"]["EmployeeID"] = "Employee";
	$fieldToolTipsileave["English"]["EmployeeID"] = "";
	$placeHoldersileave["English"]["EmployeeID"] = "";
	$fieldLabelsileave["English"]["LDate"] = "LDate";
	$fieldToolTipsileave["English"]["LDate"] = "";
	$placeHoldersileave["English"]["LDate"] = "";
	$fieldLabelsileave["English"]["Days"] = "Days";
	$fieldToolTipsileave["English"]["Days"] = "";
	$placeHoldersileave["English"]["Days"] = "";
	$fieldLabelsileave["English"]["LWOP"] = "LWOP";
	$fieldToolTipsileave["English"]["LWOP"] = "";
	$placeHoldersileave["English"]["LWOP"] = "";
	$fieldLabelsileave["English"]["LeaveType"] = "Leave Type";
	$fieldToolTipsileave["English"]["LeaveType"] = "";
	$placeHoldersileave["English"]["LeaveType"] = "";
	$fieldLabelsileave["English"]["FirtHalf"] = "Firt Half";
	$fieldToolTipsileave["English"]["FirtHalf"] = "";
	$placeHoldersileave["English"]["FirtHalf"] = "";
	$fieldLabelsileave["English"]["SecondHalf"] = "Second Half";
	$fieldToolTipsileave["English"]["SecondHalf"] = "";
	$placeHoldersileave["English"]["SecondHalf"] = "";
	if (count($fieldToolTipsileave["English"]))
		$tdataileave[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsileave[""] = array();
	$fieldToolTipsileave[""] = array();
	$placeHoldersileave[""] = array();
	$pageTitlesileave[""] = array();
	if (count($fieldToolTipsileave[""]))
		$tdataileave[".isUseToolTips"] = true;
}


	$tdataileave[".NCSearch"] = true;



$tdataileave[".shortTableName"] = "ileave";
$tdataileave[".nSecOptions"] = 0;
$tdataileave[".recsPerRowPrint"] = 1;
$tdataileave[".mainTableOwnerID"] = "";
$tdataileave[".moveNext"] = 1;
$tdataileave[".entityType"] = 0;

$tdataileave[".strOriginalTableName"] = "ileave";

	



$tdataileave[".showAddInPopup"] = false;

$tdataileave[".showEditInPopup"] = false;

$tdataileave[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataileave[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataileave[".fieldsForRegister"] = array();

$tdataileave[".listAjax"] = false;

	$tdataileave[".audit"] = false;

	$tdataileave[".locking"] = false;

$tdataileave[".edit"] = true;
$tdataileave[".afterEditAction"] = 1;
$tdataileave[".closePopupAfterEdit"] = 1;
$tdataileave[".afterEditActionDetTable"] = "";

$tdataileave[".add"] = true;
$tdataileave[".afterAddAction"] = 1;
$tdataileave[".closePopupAfterAdd"] = 1;
$tdataileave[".afterAddActionDetTable"] = "";

$tdataileave[".list"] = true;

$tdataileave[".inlineEdit"] = true;

$tdataileave[".updateSelected"] = true;

$tdataileave[".reorderRecordsByHeader"] = true;


$tdataileave[".exportFormatting"] = 2;
$tdataileave[".exportDelimiter"] = ",";
		
$tdataileave[".inlineAdd"] = true;
$tdataileave[".view"] = true;


$tdataileave[".exportTo"] = true;

$tdataileave[".printFriendly"] = true;

$tdataileave[".delete"] = true;

$tdataileave[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataileave[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataileave[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataileave[".searchSaving"] = false;
//

$tdataileave[".showSearchPanel"] = true;
		$tdataileave[".flexibleSearch"] = true;

$tdataileave[".isUseAjaxSuggest"] = true;

$tdataileave[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																															

$tdataileave[".ajaxCodeSnippetAdded"] = false;

$tdataileave[".buttonsAdded"] = false;

$tdataileave[".addPageEvents"] = false;

// use timepicker for search panel
$tdataileave[".isUseTimeForSearch"] = false;



$tdataileave[".badgeColor"] = "9acd32";


$tdataileave[".allSearchFields"] = array();
$tdataileave[".filterFields"] = array();
$tdataileave[".requiredSearchFields"] = array();

$tdataileave[".allSearchFields"][] = "LeaveType";
	$tdataileave[".allSearchFields"][] = "EmployeeID";
	$tdataileave[".allSearchFields"][] = "LDate";
	$tdataileave[".allSearchFields"][] = "FirtHalf";
	$tdataileave[".allSearchFields"][] = "SecondHalf";
	$tdataileave[".allSearchFields"][] = "Days";
	$tdataileave[".allSearchFields"][] = "LWOP";
	

$tdataileave[".googleLikeFields"] = array();
$tdataileave[".googleLikeFields"][] = "EmployeeID";
$tdataileave[".googleLikeFields"][] = "LDate";
$tdataileave[".googleLikeFields"][] = "Days";
$tdataileave[".googleLikeFields"][] = "LWOP";
$tdataileave[".googleLikeFields"][] = "LeaveType";
$tdataileave[".googleLikeFields"][] = "FirtHalf";
$tdataileave[".googleLikeFields"][] = "SecondHalf";


$tdataileave[".advSearchFields"] = array();
$tdataileave[".advSearchFields"][] = "LeaveType";
$tdataileave[".advSearchFields"][] = "EmployeeID";
$tdataileave[".advSearchFields"][] = "LDate";
$tdataileave[".advSearchFields"][] = "FirtHalf";
$tdataileave[".advSearchFields"][] = "SecondHalf";
$tdataileave[".advSearchFields"][] = "Days";
$tdataileave[".advSearchFields"][] = "LWOP";

$tdataileave[".tableType"] = "list";

$tdataileave[".printerPageOrientation"] = 0;
$tdataileave[".nPrinterPageScale"] = 100;

$tdataileave[".nPrinterSplitRecords"] = 40;

$tdataileave[".nPrinterPDFSplitRecords"] = 40;



$tdataileave[".geocodingEnabled"] = false;





$tdataileave[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataileave[".pageSize"] = 20;

$tdataileave[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataileave[".strOrderBy"] = $tstrOrderBy;

$tdataileave[".orderindexes"] = array();

$tdataileave[".sqlHead"] = "SELECT EmployeeID,  	LDate,  	Days,  	LWOP,  	LeaveType,  	FirtHalf,  	SecondHalf";
$tdataileave[".sqlFrom"] = "FROM ileave";
$tdataileave[".sqlWhereExpr"] = "";
$tdataileave[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataileave[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataileave[".arrGroupsPerPage"] = $arrGPP;

$tdataileave[".highlightSearchResults"] = true;

$tableKeysileave = array();
$tableKeysileave[] = "EmployeeID";
$tdataileave[".Keys"] = $tableKeysileave;

$tdataileave[".listFields"] = array();
$tdataileave[".listFields"][] = "LeaveType";
$tdataileave[".listFields"][] = "EmployeeID";
$tdataileave[".listFields"][] = "LDate";
$tdataileave[".listFields"][] = "FirtHalf";
$tdataileave[".listFields"][] = "SecondHalf";
$tdataileave[".listFields"][] = "Days";
$tdataileave[".listFields"][] = "LWOP";

$tdataileave[".hideMobileList"] = array();


$tdataileave[".viewFields"] = array();
$tdataileave[".viewFields"][] = "LeaveType";
$tdataileave[".viewFields"][] = "EmployeeID";
$tdataileave[".viewFields"][] = "LDate";
$tdataileave[".viewFields"][] = "FirtHalf";
$tdataileave[".viewFields"][] = "SecondHalf";
$tdataileave[".viewFields"][] = "Days";
$tdataileave[".viewFields"][] = "LWOP";

$tdataileave[".addFields"] = array();
$tdataileave[".addFields"][] = "LeaveType";
$tdataileave[".addFields"][] = "EmployeeID";
$tdataileave[".addFields"][] = "LDate";
$tdataileave[".addFields"][] = "FirtHalf";
$tdataileave[".addFields"][] = "SecondHalf";
$tdataileave[".addFields"][] = "Days";
$tdataileave[".addFields"][] = "LWOP";

$tdataileave[".masterListFields"] = array();
$tdataileave[".masterListFields"][] = "LeaveType";
$tdataileave[".masterListFields"][] = "EmployeeID";
$tdataileave[".masterListFields"][] = "LDate";
$tdataileave[".masterListFields"][] = "FirtHalf";
$tdataileave[".masterListFields"][] = "SecondHalf";
$tdataileave[".masterListFields"][] = "Days";
$tdataileave[".masterListFields"][] = "LWOP";

$tdataileave[".inlineAddFields"] = array();
$tdataileave[".inlineAddFields"][] = "LeaveType";
$tdataileave[".inlineAddFields"][] = "EmployeeID";
$tdataileave[".inlineAddFields"][] = "LDate";
$tdataileave[".inlineAddFields"][] = "FirtHalf";
$tdataileave[".inlineAddFields"][] = "SecondHalf";
$tdataileave[".inlineAddFields"][] = "Days";
$tdataileave[".inlineAddFields"][] = "LWOP";

$tdataileave[".editFields"] = array();
$tdataileave[".editFields"][] = "LeaveType";
$tdataileave[".editFields"][] = "EmployeeID";
$tdataileave[".editFields"][] = "LDate";
$tdataileave[".editFields"][] = "FirtHalf";
$tdataileave[".editFields"][] = "SecondHalf";
$tdataileave[".editFields"][] = "Days";
$tdataileave[".editFields"][] = "LWOP";

$tdataileave[".inlineEditFields"] = array();
$tdataileave[".inlineEditFields"][] = "LeaveType";
$tdataileave[".inlineEditFields"][] = "EmployeeID";
$tdataileave[".inlineEditFields"][] = "LDate";
$tdataileave[".inlineEditFields"][] = "FirtHalf";
$tdataileave[".inlineEditFields"][] = "SecondHalf";
$tdataileave[".inlineEditFields"][] = "Days";
$tdataileave[".inlineEditFields"][] = "LWOP";

$tdataileave[".updateSelectedFields"] = array();
$tdataileave[".updateSelectedFields"][] = "LeaveType";
$tdataileave[".updateSelectedFields"][] = "EmployeeID";
$tdataileave[".updateSelectedFields"][] = "LDate";
$tdataileave[".updateSelectedFields"][] = "FirtHalf";
$tdataileave[".updateSelectedFields"][] = "SecondHalf";
$tdataileave[".updateSelectedFields"][] = "Days";
$tdataileave[".updateSelectedFields"][] = "LWOP";


$tdataileave[".exportFields"] = array();
$tdataileave[".exportFields"][] = "LeaveType";
$tdataileave[".exportFields"][] = "EmployeeID";
$tdataileave[".exportFields"][] = "LDate";
$tdataileave[".exportFields"][] = "FirtHalf";
$tdataileave[".exportFields"][] = "SecondHalf";
$tdataileave[".exportFields"][] = "Days";
$tdataileave[".exportFields"][] = "LWOP";

$tdataileave[".importFields"] = array();

$tdataileave[".printFields"] = array();
$tdataileave[".printFields"][] = "LeaveType";
$tdataileave[".printFields"][] = "EmployeeID";
$tdataileave[".printFields"][] = "LDate";
$tdataileave[".printFields"][] = "FirtHalf";
$tdataileave[".printFields"][] = "SecondHalf";
$tdataileave[".printFields"][] = "Days";
$tdataileave[".printFields"][] = "LWOP";


//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "ileave";
	$fdata["Label"] = GetFieldLabel("ileave","EmployeeID");
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




	$tdataileave["EmployeeID"] = $fdata;
//	LDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "LDate";
	$fdata["GoodName"] = "LDate";
	$fdata["ownerTable"] = "ileave";
	$fdata["Label"] = GetFieldLabel("ileave","LDate");
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

		$fdata["strField"] = "LDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LDate";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataileave["LDate"] = $fdata;
//	Days
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Days";
	$fdata["GoodName"] = "Days";
	$fdata["ownerTable"] = "ileave";
	$fdata["Label"] = GetFieldLabel("ileave","Days");
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

		$fdata["strField"] = "Days";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Days";

	
	
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




	$tdataileave["Days"] = $fdata;
//	LWOP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "LWOP";
	$fdata["GoodName"] = "LWOP";
	$fdata["ownerTable"] = "ileave";
	$fdata["Label"] = GetFieldLabel("ileave","LWOP");
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

		$fdata["strField"] = "LWOP";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LWOP";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataileave["LWOP"] = $fdata;
//	LeaveType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "LeaveType";
	$fdata["GoodName"] = "LeaveType";
	$fdata["ownerTable"] = "ileave";
	$fdata["Label"] = GetFieldLabel("ileave","LeaveType");
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

		$fdata["strField"] = "LeaveType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LeaveType";

	
	
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
	$edata["LookupTable"] = "leavetypes";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "LTID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "LeaveType";
	
	

	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataileave["LeaveType"] = $fdata;
//	FirtHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "FirtHalf";
	$fdata["GoodName"] = "FirtHalf";
	$fdata["ownerTable"] = "ileave";
	$fdata["Label"] = GetFieldLabel("ileave","FirtHalf");
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

		$fdata["strField"] = "FirtHalf";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FirtHalf";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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




	$tdataileave["FirtHalf"] = $fdata;
//	SecondHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "SecondHalf";
	$fdata["GoodName"] = "SecondHalf";
	$fdata["ownerTable"] = "ileave";
	$fdata["Label"] = GetFieldLabel("ileave","SecondHalf");
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

		$fdata["strField"] = "SecondHalf";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SecondHalf";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
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




	$tdataileave["SecondHalf"] = $fdata;


$tables_data["ileave"]=&$tdataileave;
$field_labels["ileave"] = &$fieldLabelsileave;
$fieldToolTips["ileave"] = &$fieldToolTipsileave;
$placeHolders["ileave"] = &$placeHoldersileave;
$page_titles["ileave"] = &$pageTitlesileave;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ileave"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ileave"] = array();


	
				$strOriginalDetailsTable="indschedule";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="indschedule";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "indschedule";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "1";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ileave"][0] = $masterParams;
				$masterTablesData["ileave"][0]["masterKeys"] = array();
	$masterTablesData["ileave"][0]["masterKeys"][]="SDate";
				$masterTablesData["ileave"][0]["masterKeys"][]="EmployeeID";
				$masterTablesData["ileave"][0]["detailKeys"] = array();
	$masterTablesData["ileave"][0]["detailKeys"][]="LDate";
				$masterTablesData["ileave"][0]["detailKeys"][]="EmployeeID";
		
	
				$strOriginalDetailsTable="dt5";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dt5";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "dt5";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "1";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ileave"][1] = $masterParams;
				$masterTablesData["ileave"][1]["masterKeys"] = array();
	$masterTablesData["ileave"][1]["masterKeys"][]="SDate";
				$masterTablesData["ileave"][1]["masterKeys"][]="EmployeeID";
				$masterTablesData["ileave"][1]["detailKeys"] = array();
	$masterTablesData["ileave"][1]["detailKeys"][]="LDate";
				$masterTablesData["ileave"][1]["detailKeys"][]="EmployeeID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ileave()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EmployeeID,  	LDate,  	Days,  	LWOP,  	LeaveType,  	FirtHalf,  	SecondHalf";
$proto0["m_strFrom"] = "FROM ileave";
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
	"m_strTable" => "ileave",
	"m_srcTableName" => "ileave"
));

$proto6["m_sql"] = "EmployeeID";
$proto6["m_srcTableName"] = "ileave";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "LDate",
	"m_strTable" => "ileave",
	"m_srcTableName" => "ileave"
));

$proto8["m_sql"] = "LDate";
$proto8["m_srcTableName"] = "ileave";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Days",
	"m_strTable" => "ileave",
	"m_srcTableName" => "ileave"
));

$proto10["m_sql"] = "Days";
$proto10["m_srcTableName"] = "ileave";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "LWOP",
	"m_strTable" => "ileave",
	"m_srcTableName" => "ileave"
));

$proto12["m_sql"] = "LWOP";
$proto12["m_srcTableName"] = "ileave";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "LeaveType",
	"m_strTable" => "ileave",
	"m_srcTableName" => "ileave"
));

$proto14["m_sql"] = "LeaveType";
$proto14["m_srcTableName"] = "ileave";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "FirtHalf",
	"m_strTable" => "ileave",
	"m_srcTableName" => "ileave"
));

$proto16["m_sql"] = "FirtHalf";
$proto16["m_srcTableName"] = "ileave";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "SecondHalf",
	"m_strTable" => "ileave",
	"m_srcTableName" => "ileave"
));

$proto18["m_sql"] = "SecondHalf";
$proto18["m_srcTableName"] = "ileave";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "ileave";
$proto21["m_srcTableName"] = "ileave";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "EmployeeID";
$proto21["m_columns"][] = "LDate";
$proto21["m_columns"][] = "Days";
$proto21["m_columns"][] = "LWOP";
$proto21["m_columns"][] = "LeaveType";
$proto21["m_columns"][] = "FirtHalf";
$proto21["m_columns"][] = "SecondHalf";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "ileave";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "ileave";
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
$proto0["m_srcTableName"]="ileave";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ileave = createSqlQuery_ileave();


	
		;

							

$tdataileave[".sqlquery"] = $queryData_ileave;

$tableEvents["ileave"] = new eventsBase;
$tdataileave[".hasEvents"] = false;

?>