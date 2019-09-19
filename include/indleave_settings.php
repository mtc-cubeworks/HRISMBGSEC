<?php
require_once(getabspath("classes/cipherer.php"));




$tdataindleave = array();
	$tdataindleave[".truncateText"] = true;
	$tdataindleave[".NumberOfChars"] = 80;
	$tdataindleave[".ShortName"] = "indleave";
	$tdataindleave[".OwnerID"] = "";
	$tdataindleave[".OriginalTable"] = "indleave";

//	field labels
$fieldLabelsindleave = array();
$fieldToolTipsindleave = array();
$pageTitlesindleave = array();
$placeHoldersindleave = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsindleave["English"] = array();
	$fieldToolTipsindleave["English"] = array();
	$placeHoldersindleave["English"] = array();
	$pageTitlesindleave["English"] = array();
	$fieldLabelsindleave["English"]["LtID"] = "Lt ID";
	$fieldToolTipsindleave["English"]["LtID"] = "";
	$placeHoldersindleave["English"]["LtID"] = "";
	$fieldLabelsindleave["English"]["EmployeeID"] = "Employee";
	$fieldToolTipsindleave["English"]["EmployeeID"] = "";
	$placeHoldersindleave["English"]["EmployeeID"] = "";
	$fieldLabelsindleave["English"]["LDate"] = "LDate";
	$fieldToolTipsindleave["English"]["LDate"] = "";
	$placeHoldersindleave["English"]["LDate"] = "";
	$fieldLabelsindleave["English"]["NoDays"] = "Half/Whole Day";
	$fieldToolTipsindleave["English"]["NoDays"] = "";
	$placeHoldersindleave["English"]["NoDays"] = "";
	$fieldLabelsindleave["English"]["LWOP"] = "LWOP";
	$fieldToolTipsindleave["English"]["LWOP"] = "";
	$placeHoldersindleave["English"]["LWOP"] = "";
	$fieldLabelsindleave["English"]["LvID"] = "Lv ID";
	$fieldToolTipsindleave["English"]["LvID"] = "";
	$placeHoldersindleave["English"]["LvID"] = "";
	$fieldLabelsindleave["English"]["LeaveType"] = "Leave Type";
	$fieldToolTipsindleave["English"]["LeaveType"] = "";
	$placeHoldersindleave["English"]["LeaveType"] = "";
	$fieldLabelsindleave["English"]["FirtHalf"] = "First Half";
	$fieldToolTipsindleave["English"]["FirtHalf"] = "";
	$placeHoldersindleave["English"]["FirtHalf"] = "";
	$fieldLabelsindleave["English"]["SecondHalf"] = "Second Half";
	$fieldToolTipsindleave["English"]["SecondHalf"] = "";
	$placeHoldersindleave["English"]["SecondHalf"] = "";
	$fieldLabelsindleave["English"]["Reason"] = "Reason";
	$fieldToolTipsindleave["English"]["Reason"] = "";
	$placeHoldersindleave["English"]["Reason"] = "";
	if (count($fieldToolTipsindleave["English"]))
		$tdataindleave[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsindleave[""] = array();
	$fieldToolTipsindleave[""] = array();
	$placeHoldersindleave[""] = array();
	$pageTitlesindleave[""] = array();
	if (count($fieldToolTipsindleave[""]))
		$tdataindleave[".isUseToolTips"] = true;
}


	$tdataindleave[".NCSearch"] = true;



$tdataindleave[".shortTableName"] = "indleave";
$tdataindleave[".nSecOptions"] = 0;
$tdataindleave[".recsPerRowPrint"] = 1;
$tdataindleave[".mainTableOwnerID"] = "";
$tdataindleave[".moveNext"] = 1;
$tdataindleave[".entityType"] = 0;

$tdataindleave[".strOriginalTableName"] = "indleave";

	



$tdataindleave[".showAddInPopup"] = false;

$tdataindleave[".showEditInPopup"] = false;

$tdataindleave[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataindleave[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataindleave[".fieldsForRegister"] = array();

$tdataindleave[".listAjax"] = false;

	$tdataindleave[".audit"] = false;

	$tdataindleave[".locking"] = false;

$tdataindleave[".edit"] = true;
$tdataindleave[".afterEditAction"] = 1;
$tdataindleave[".closePopupAfterEdit"] = 1;
$tdataindleave[".afterEditActionDetTable"] = "";

$tdataindleave[".add"] = true;
$tdataindleave[".afterAddAction"] = 1;
$tdataindleave[".closePopupAfterAdd"] = 1;
$tdataindleave[".afterAddActionDetTable"] = "";

$tdataindleave[".list"] = true;

$tdataindleave[".inlineEdit"] = true;

$tdataindleave[".updateSelected"] = true;

$tdataindleave[".reorderRecordsByHeader"] = true;


$tdataindleave[".exportFormatting"] = 2;
$tdataindleave[".exportDelimiter"] = ",";
		
$tdataindleave[".inlineAdd"] = true;
$tdataindleave[".view"] = true;

$tdataindleave[".import"] = true;

$tdataindleave[".exportTo"] = true;

$tdataindleave[".printFriendly"] = true;

$tdataindleave[".delete"] = true;

$tdataindleave[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataindleave[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataindleave[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataindleave[".searchSaving"] = false;
//

$tdataindleave[".showSearchPanel"] = true;
		$tdataindleave[".flexibleSearch"] = true;

$tdataindleave[".isUseAjaxSuggest"] = true;

$tdataindleave[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																					

$tdataindleave[".ajaxCodeSnippetAdded"] = false;

$tdataindleave[".buttonsAdded"] = false;

$tdataindleave[".addPageEvents"] = false;

// use timepicker for search panel
$tdataindleave[".isUseTimeForSearch"] = false;





$tdataindleave[".allSearchFields"] = array();
$tdataindleave[".filterFields"] = array();
$tdataindleave[".requiredSearchFields"] = array();

$tdataindleave[".allSearchFields"][] = "LtID";
	$tdataindleave[".allSearchFields"][] = "EmployeeID";
	$tdataindleave[".allSearchFields"][] = "LeaveType";
	$tdataindleave[".allSearchFields"][] = "Reason";
	$tdataindleave[".allSearchFields"][] = "LDate";
	$tdataindleave[".allSearchFields"][] = "FirtHalf";
	$tdataindleave[".allSearchFields"][] = "SecondHalf";
	$tdataindleave[".allSearchFields"][] = "NoDays";
	$tdataindleave[".allSearchFields"][] = "LWOP";
	$tdataindleave[".allSearchFields"][] = "LvID";
	

$tdataindleave[".googleLikeFields"] = array();
$tdataindleave[".googleLikeFields"][] = "LtID";
$tdataindleave[".googleLikeFields"][] = "EmployeeID";
$tdataindleave[".googleLikeFields"][] = "LDate";
$tdataindleave[".googleLikeFields"][] = "NoDays";
$tdataindleave[".googleLikeFields"][] = "LWOP";
$tdataindleave[".googleLikeFields"][] = "LeaveType";
$tdataindleave[".googleLikeFields"][] = "LvID";
$tdataindleave[".googleLikeFields"][] = "FirtHalf";
$tdataindleave[".googleLikeFields"][] = "SecondHalf";
$tdataindleave[".googleLikeFields"][] = "Reason";


$tdataindleave[".advSearchFields"] = array();
$tdataindleave[".advSearchFields"][] = "LtID";
$tdataindleave[".advSearchFields"][] = "EmployeeID";
$tdataindleave[".advSearchFields"][] = "LeaveType";
$tdataindleave[".advSearchFields"][] = "Reason";
$tdataindleave[".advSearchFields"][] = "LDate";
$tdataindleave[".advSearchFields"][] = "FirtHalf";
$tdataindleave[".advSearchFields"][] = "SecondHalf";
$tdataindleave[".advSearchFields"][] = "NoDays";
$tdataindleave[".advSearchFields"][] = "LWOP";
$tdataindleave[".advSearchFields"][] = "LvID";

$tdataindleave[".tableType"] = "list";

$tdataindleave[".printerPageOrientation"] = 0;
$tdataindleave[".nPrinterPageScale"] = 100;

$tdataindleave[".nPrinterSplitRecords"] = 40;

$tdataindleave[".nPrinterPDFSplitRecords"] = 40;



$tdataindleave[".geocodingEnabled"] = false;





$tdataindleave[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataindleave[".pageSize"] = 20;

$tdataindleave[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY LtID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataindleave[".strOrderBy"] = $tstrOrderBy;

$tdataindleave[".orderindexes"] = array();
	$tdataindleave[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "LtID");


$tdataindleave[".sqlHead"] = "SELECT LtID,  EmployeeID,  LDate,  NoDays,  LWOP,  LeaveType,  LvID,  FirtHalf,  SecondHalf,  Reason";
$tdataindleave[".sqlFrom"] = "FROM indleave";
$tdataindleave[".sqlWhereExpr"] = "";
$tdataindleave[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataindleave[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataindleave[".arrGroupsPerPage"] = $arrGPP;

$tdataindleave[".highlightSearchResults"] = true;

$tableKeysindleave = array();
$tableKeysindleave[] = "LtID";
$tdataindleave[".Keys"] = $tableKeysindleave;

$tdataindleave[".listFields"] = array();
$tdataindleave[".listFields"][] = "LtID";
$tdataindleave[".listFields"][] = "EmployeeID";
$tdataindleave[".listFields"][] = "LeaveType";
$tdataindleave[".listFields"][] = "Reason";
$tdataindleave[".listFields"][] = "LDate";
$tdataindleave[".listFields"][] = "FirtHalf";
$tdataindleave[".listFields"][] = "SecondHalf";
$tdataindleave[".listFields"][] = "NoDays";
$tdataindleave[".listFields"][] = "LWOP";
$tdataindleave[".listFields"][] = "LvID";

$tdataindleave[".hideMobileList"] = array();


$tdataindleave[".viewFields"] = array();
$tdataindleave[".viewFields"][] = "LtID";
$tdataindleave[".viewFields"][] = "EmployeeID";
$tdataindleave[".viewFields"][] = "LeaveType";
$tdataindleave[".viewFields"][] = "Reason";
$tdataindleave[".viewFields"][] = "LDate";
$tdataindleave[".viewFields"][] = "FirtHalf";
$tdataindleave[".viewFields"][] = "SecondHalf";
$tdataindleave[".viewFields"][] = "NoDays";
$tdataindleave[".viewFields"][] = "LWOP";
$tdataindleave[".viewFields"][] = "LvID";

$tdataindleave[".addFields"] = array();
$tdataindleave[".addFields"][] = "EmployeeID";
$tdataindleave[".addFields"][] = "LeaveType";
$tdataindleave[".addFields"][] = "Reason";
$tdataindleave[".addFields"][] = "LDate";
$tdataindleave[".addFields"][] = "FirtHalf";
$tdataindleave[".addFields"][] = "SecondHalf";
$tdataindleave[".addFields"][] = "NoDays";
$tdataindleave[".addFields"][] = "LWOP";
$tdataindleave[".addFields"][] = "LvID";

$tdataindleave[".masterListFields"] = array();
$tdataindleave[".masterListFields"][] = "LtID";
$tdataindleave[".masterListFields"][] = "EmployeeID";
$tdataindleave[".masterListFields"][] = "LeaveType";
$tdataindleave[".masterListFields"][] = "Reason";
$tdataindleave[".masterListFields"][] = "LDate";
$tdataindleave[".masterListFields"][] = "FirtHalf";
$tdataindleave[".masterListFields"][] = "SecondHalf";
$tdataindleave[".masterListFields"][] = "NoDays";
$tdataindleave[".masterListFields"][] = "LWOP";
$tdataindleave[".masterListFields"][] = "LvID";

$tdataindleave[".inlineAddFields"] = array();
$tdataindleave[".inlineAddFields"][] = "EmployeeID";
$tdataindleave[".inlineAddFields"][] = "LeaveType";
$tdataindleave[".inlineAddFields"][] = "Reason";
$tdataindleave[".inlineAddFields"][] = "LDate";
$tdataindleave[".inlineAddFields"][] = "FirtHalf";
$tdataindleave[".inlineAddFields"][] = "SecondHalf";
$tdataindleave[".inlineAddFields"][] = "NoDays";
$tdataindleave[".inlineAddFields"][] = "LWOP";
$tdataindleave[".inlineAddFields"][] = "LvID";

$tdataindleave[".editFields"] = array();
$tdataindleave[".editFields"][] = "EmployeeID";
$tdataindleave[".editFields"][] = "LeaveType";
$tdataindleave[".editFields"][] = "Reason";
$tdataindleave[".editFields"][] = "LDate";
$tdataindleave[".editFields"][] = "FirtHalf";
$tdataindleave[".editFields"][] = "SecondHalf";
$tdataindleave[".editFields"][] = "NoDays";
$tdataindleave[".editFields"][] = "LWOP";
$tdataindleave[".editFields"][] = "LvID";

$tdataindleave[".inlineEditFields"] = array();
$tdataindleave[".inlineEditFields"][] = "EmployeeID";
$tdataindleave[".inlineEditFields"][] = "LeaveType";
$tdataindleave[".inlineEditFields"][] = "Reason";
$tdataindleave[".inlineEditFields"][] = "LDate";
$tdataindleave[".inlineEditFields"][] = "FirtHalf";
$tdataindleave[".inlineEditFields"][] = "SecondHalf";
$tdataindleave[".inlineEditFields"][] = "NoDays";
$tdataindleave[".inlineEditFields"][] = "LWOP";
$tdataindleave[".inlineEditFields"][] = "LvID";

$tdataindleave[".updateSelectedFields"] = array();
$tdataindleave[".updateSelectedFields"][] = "EmployeeID";
$tdataindleave[".updateSelectedFields"][] = "LeaveType";
$tdataindleave[".updateSelectedFields"][] = "LDate";
$tdataindleave[".updateSelectedFields"][] = "FirtHalf";
$tdataindleave[".updateSelectedFields"][] = "SecondHalf";
$tdataindleave[".updateSelectedFields"][] = "NoDays";
$tdataindleave[".updateSelectedFields"][] = "LWOP";
$tdataindleave[".updateSelectedFields"][] = "LvID";


$tdataindleave[".exportFields"] = array();
$tdataindleave[".exportFields"][] = "LtID";
$tdataindleave[".exportFields"][] = "EmployeeID";
$tdataindleave[".exportFields"][] = "LeaveType";
$tdataindleave[".exportFields"][] = "Reason";
$tdataindleave[".exportFields"][] = "LDate";
$tdataindleave[".exportFields"][] = "FirtHalf";
$tdataindleave[".exportFields"][] = "SecondHalf";
$tdataindleave[".exportFields"][] = "NoDays";
$tdataindleave[".exportFields"][] = "LWOP";
$tdataindleave[".exportFields"][] = "LvID";

$tdataindleave[".importFields"] = array();
$tdataindleave[".importFields"][] = "LtID";
$tdataindleave[".importFields"][] = "EmployeeID";
$tdataindleave[".importFields"][] = "LDate";
$tdataindleave[".importFields"][] = "NoDays";
$tdataindleave[".importFields"][] = "LWOP";
$tdataindleave[".importFields"][] = "LeaveType";
$tdataindleave[".importFields"][] = "LvID";
$tdataindleave[".importFields"][] = "FirtHalf";
$tdataindleave[".importFields"][] = "SecondHalf";
$tdataindleave[".importFields"][] = "Reason";

$tdataindleave[".printFields"] = array();
$tdataindleave[".printFields"][] = "LtID";
$tdataindleave[".printFields"][] = "EmployeeID";
$tdataindleave[".printFields"][] = "LeaveType";
$tdataindleave[".printFields"][] = "Reason";
$tdataindleave[".printFields"][] = "LDate";
$tdataindleave[".printFields"][] = "FirtHalf";
$tdataindleave[".printFields"][] = "SecondHalf";
$tdataindleave[".printFields"][] = "NoDays";
$tdataindleave[".printFields"][] = "LWOP";
$tdataindleave[".printFields"][] = "LvID";


//	LtID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LtID";
	$fdata["GoodName"] = "LtID";
	$fdata["ownerTable"] = "indleave";
	$fdata["Label"] = GetFieldLabel("indleave","LtID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LtID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LtID";

	
	
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




	$tdataindleave["LtID"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "indleave";
	$fdata["Label"] = GetFieldLabel("indleave","EmployeeID");
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
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "EmployeeID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "user_name";
	
	

	
	$edata["LookupOrderBy"] = "user_name";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 250;

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataindleave["EmployeeID"] = $fdata;
//	LDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LDate";
	$fdata["GoodName"] = "LDate";
	$fdata["ownerTable"] = "indleave";
	$fdata["Label"] = GetFieldLabel("indleave","LDate");
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 21;

	
	
	
		$edata["controlWidth"] = 160;

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataindleave["LDate"] = $fdata;
//	NoDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "NoDays";
	$fdata["GoodName"] = "NoDays";
	$fdata["ownerTable"] = "indleave";
	$fdata["Label"] = GetFieldLabel("indleave","NoDays");
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

		$fdata["strField"] = "NoDays";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NoDays";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "daylength";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DayLength";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "DayLength";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;

	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 60;

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




	$tdataindleave["NoDays"] = $fdata;
//	LWOP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "LWOP";
	$fdata["GoodName"] = "LWOP";
	$fdata["ownerTable"] = "indleave";
	$fdata["Label"] = GetFieldLabel("indleave","LWOP");
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

	
	
	
	
	
	
		$edata["controlWidth"] = 30;

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




	$tdataindleave["LWOP"] = $fdata;
//	LeaveType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "LeaveType";
	$fdata["GoodName"] = "LeaveType";
	$fdata["ownerTable"] = "indleave";
	$fdata["Label"] = GetFieldLabel("indleave","LeaveType");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataindleave["LeaveType"] = $fdata;
//	LvID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "LvID";
	$fdata["GoodName"] = "LvID";
	$fdata["ownerTable"] = "indleave";
	$fdata["Label"] = GetFieldLabel("indleave","LvID");
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

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 60;

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




	$tdataindleave["LvID"] = $fdata;
//	FirtHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FirtHalf";
	$fdata["GoodName"] = "FirtHalf";
	$fdata["ownerTable"] = "indleave";
	$fdata["Label"] = GetFieldLabel("indleave","FirtHalf");
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

	$edata = array("EditFormat" => "Checkbox");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 42;

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




	$tdataindleave["FirtHalf"] = $fdata;
//	SecondHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "SecondHalf";
	$fdata["GoodName"] = "SecondHalf";
	$fdata["ownerTable"] = "indleave";
	$fdata["Label"] = GetFieldLabel("indleave","SecondHalf");
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

	$edata = array("EditFormat" => "Checkbox");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 42;

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




	$tdataindleave["SecondHalf"] = $fdata;
//	Reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Reason";
	$fdata["GoodName"] = "Reason";
	$fdata["ownerTable"] = "indleave";
	$fdata["Label"] = GetFieldLabel("indleave","Reason");
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




	$tdataindleave["Reason"] = $fdata;


$tables_data["indleave"]=&$tdataindleave;
$field_labels["indleave"] = &$fieldLabelsindleave;
$fieldToolTips["indleave"] = &$fieldToolTipsindleave;
$placeHolders["indleave"] = &$placeHoldersindleave;
$page_titles["indleave"] = &$pageTitlesindleave;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["indleave"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["indleave"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_indleave()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LtID,  EmployeeID,  LDate,  NoDays,  LWOP,  LeaveType,  LvID,  FirtHalf,  SecondHalf,  Reason";
$proto0["m_strFrom"] = "FROM indleave";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY LtID DESC";
	
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
	"m_strName" => "LtID",
	"m_strTable" => "indleave",
	"m_srcTableName" => "indleave"
));

$proto6["m_sql"] = "LtID";
$proto6["m_srcTableName"] = "indleave";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "indleave",
	"m_srcTableName" => "indleave"
));

$proto8["m_sql"] = "EmployeeID";
$proto8["m_srcTableName"] = "indleave";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "LDate",
	"m_strTable" => "indleave",
	"m_srcTableName" => "indleave"
));

$proto10["m_sql"] = "LDate";
$proto10["m_srcTableName"] = "indleave";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NoDays",
	"m_strTable" => "indleave",
	"m_srcTableName" => "indleave"
));

$proto12["m_sql"] = "NoDays";
$proto12["m_srcTableName"] = "indleave";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "LWOP",
	"m_strTable" => "indleave",
	"m_srcTableName" => "indleave"
));

$proto14["m_sql"] = "LWOP";
$proto14["m_srcTableName"] = "indleave";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "LeaveType",
	"m_strTable" => "indleave",
	"m_srcTableName" => "indleave"
));

$proto16["m_sql"] = "LeaveType";
$proto16["m_srcTableName"] = "indleave";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "LvID",
	"m_strTable" => "indleave",
	"m_srcTableName" => "indleave"
));

$proto18["m_sql"] = "LvID";
$proto18["m_srcTableName"] = "indleave";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "FirtHalf",
	"m_strTable" => "indleave",
	"m_srcTableName" => "indleave"
));

$proto20["m_sql"] = "FirtHalf";
$proto20["m_srcTableName"] = "indleave";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "SecondHalf",
	"m_strTable" => "indleave",
	"m_srcTableName" => "indleave"
));

$proto22["m_sql"] = "SecondHalf";
$proto22["m_srcTableName"] = "indleave";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Reason",
	"m_strTable" => "indleave",
	"m_srcTableName" => "indleave"
));

$proto24["m_sql"] = "Reason";
$proto24["m_srcTableName"] = "indleave";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "indleave";
$proto27["m_srcTableName"] = "indleave";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "LtID";
$proto27["m_columns"][] = "EmployeeID";
$proto27["m_columns"][] = "LDate";
$proto27["m_columns"][] = "NoDays";
$proto27["m_columns"][] = "LWOP";
$proto27["m_columns"][] = "LeaveType";
$proto27["m_columns"][] = "LvID";
$proto27["m_columns"][] = "FirtHalf";
$proto27["m_columns"][] = "SecondHalf";
$proto27["m_columns"][] = "Reason";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "indleave";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "indleave";
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
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "LtID",
	"m_strTable" => "indleave",
	"m_srcTableName" => "indleave"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 0;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="indleave";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_indleave = createSqlQuery_indleave();


	
		;

										

$tdataindleave[".sqlquery"] = $queryData_indleave;

$tableEvents["indleave"] = new eventsBase;
$tdataindleave[".hasEvents"] = false;

?>