<?php
require_once(getabspath("classes/cipherer.php"));




$tdataindleave1 = array();
	$tdataindleave1[".truncateText"] = true;
	$tdataindleave1[".NumberOfChars"] = 80;
	$tdataindleave1[".ShortName"] = "indleave1";
	$tdataindleave1[".OwnerID"] = "EmployeeID";
	$tdataindleave1[".OriginalTable"] = "indleave";

//	field labels
$fieldLabelsindleave1 = array();
$fieldToolTipsindleave1 = array();
$pageTitlesindleave1 = array();
$placeHoldersindleave1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsindleave1["English"] = array();
	$fieldToolTipsindleave1["English"] = array();
	$placeHoldersindleave1["English"] = array();
	$pageTitlesindleave1["English"] = array();
	$fieldLabelsindleave1["English"]["LtID"] = "Lt ID";
	$fieldToolTipsindleave1["English"]["LtID"] = "";
	$placeHoldersindleave1["English"]["LtID"] = "";
	$fieldLabelsindleave1["English"]["EmployeeID"] = "Employee";
	$fieldToolTipsindleave1["English"]["EmployeeID"] = "";
	$placeHoldersindleave1["English"]["EmployeeID"] = "";
	$fieldLabelsindleave1["English"]["LDate"] = "LDate";
	$fieldToolTipsindleave1["English"]["LDate"] = "";
	$placeHoldersindleave1["English"]["LDate"] = "";
	$fieldLabelsindleave1["English"]["NoDays"] = "Half/Whole Day";
	$fieldToolTipsindleave1["English"]["NoDays"] = "";
	$placeHoldersindleave1["English"]["NoDays"] = "";
	$fieldLabelsindleave1["English"]["LWOP"] = "LWOP";
	$fieldToolTipsindleave1["English"]["LWOP"] = "";
	$placeHoldersindleave1["English"]["LWOP"] = "";
	$fieldLabelsindleave1["English"]["LvID"] = "Lv ID";
	$fieldToolTipsindleave1["English"]["LvID"] = "";
	$placeHoldersindleave1["English"]["LvID"] = "";
	$fieldLabelsindleave1["English"]["LeaveType"] = "Leave Type";
	$fieldToolTipsindleave1["English"]["LeaveType"] = "";
	$placeHoldersindleave1["English"]["LeaveType"] = "";
	$fieldLabelsindleave1["English"]["FirtHalf"] = "First Half";
	$fieldToolTipsindleave1["English"]["FirtHalf"] = "";
	$placeHoldersindleave1["English"]["FirtHalf"] = "";
	$fieldLabelsindleave1["English"]["SecondHalf"] = "Second Half";
	$fieldToolTipsindleave1["English"]["SecondHalf"] = "";
	$placeHoldersindleave1["English"]["SecondHalf"] = "";
	$fieldLabelsindleave1["English"]["Reason"] = "Reason";
	$fieldToolTipsindleave1["English"]["Reason"] = "";
	$placeHoldersindleave1["English"]["Reason"] = "";
	if (count($fieldToolTipsindleave1["English"]))
		$tdataindleave1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsindleave1[""] = array();
	$fieldToolTipsindleave1[""] = array();
	$placeHoldersindleave1[""] = array();
	$pageTitlesindleave1[""] = array();
	if (count($fieldToolTipsindleave1[""]))
		$tdataindleave1[".isUseToolTips"] = true;
}


	$tdataindleave1[".NCSearch"] = true;



$tdataindleave1[".shortTableName"] = "indleave1";
$tdataindleave1[".nSecOptions"] = 1;
$tdataindleave1[".recsPerRowPrint"] = 1;
$tdataindleave1[".mainTableOwnerID"] = "EmployeeID";
$tdataindleave1[".moveNext"] = 1;
$tdataindleave1[".entityType"] = 1;

$tdataindleave1[".strOriginalTableName"] = "indleave";

	



$tdataindleave1[".showAddInPopup"] = false;

$tdataindleave1[".showEditInPopup"] = false;

$tdataindleave1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataindleave1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataindleave1[".fieldsForRegister"] = array();

$tdataindleave1[".listAjax"] = false;

	$tdataindleave1[".audit"] = false;

	$tdataindleave1[".locking"] = false;

$tdataindleave1[".edit"] = true;
$tdataindleave1[".afterEditAction"] = 1;
$tdataindleave1[".closePopupAfterEdit"] = 1;
$tdataindleave1[".afterEditActionDetTable"] = "";

$tdataindleave1[".add"] = true;
$tdataindleave1[".afterAddAction"] = 1;
$tdataindleave1[".closePopupAfterAdd"] = 1;
$tdataindleave1[".afterAddActionDetTable"] = "";

$tdataindleave1[".list"] = true;

$tdataindleave1[".inlineEdit"] = true;


$tdataindleave1[".reorderRecordsByHeader"] = true;


$tdataindleave1[".exportFormatting"] = 2;
$tdataindleave1[".exportDelimiter"] = ",";
		
$tdataindleave1[".inlineAdd"] = true;
$tdataindleave1[".view"] = true;

$tdataindleave1[".import"] = true;

$tdataindleave1[".exportTo"] = true;

$tdataindleave1[".printFriendly"] = true;

$tdataindleave1[".delete"] = true;

$tdataindleave1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataindleave1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataindleave1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataindleave1[".searchSaving"] = false;
//

$tdataindleave1[".showSearchPanel"] = true;
		$tdataindleave1[".flexibleSearch"] = true;

$tdataindleave1[".isUseAjaxSuggest"] = true;

$tdataindleave1[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																		

$tdataindleave1[".ajaxCodeSnippetAdded"] = false;

$tdataindleave1[".buttonsAdded"] = false;

$tdataindleave1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataindleave1[".isUseTimeForSearch"] = false;



$tdataindleave1[".badgeColor"] = "2F4F4F";


$tdataindleave1[".allSearchFields"] = array();
$tdataindleave1[".filterFields"] = array();
$tdataindleave1[".requiredSearchFields"] = array();

$tdataindleave1[".allSearchFields"][] = "LtID";
	$tdataindleave1[".allSearchFields"][] = "LDate";
	$tdataindleave1[".allSearchFields"][] = "EmployeeID";
	$tdataindleave1[".allSearchFields"][] = "LeaveType";
	$tdataindleave1[".allSearchFields"][] = "Reason";
	$tdataindleave1[".allSearchFields"][] = "FirtHalf";
	$tdataindleave1[".allSearchFields"][] = "SecondHalf";
	$tdataindleave1[".allSearchFields"][] = "NoDays";
	$tdataindleave1[".allSearchFields"][] = "LWOP";
	$tdataindleave1[".allSearchFields"][] = "LvID";
	

$tdataindleave1[".googleLikeFields"] = array();
$tdataindleave1[".googleLikeFields"][] = "LtID";
$tdataindleave1[".googleLikeFields"][] = "EmployeeID";
$tdataindleave1[".googleLikeFields"][] = "LDate";
$tdataindleave1[".googleLikeFields"][] = "NoDays";
$tdataindleave1[".googleLikeFields"][] = "LWOP";
$tdataindleave1[".googleLikeFields"][] = "LeaveType";
$tdataindleave1[".googleLikeFields"][] = "LvID";
$tdataindleave1[".googleLikeFields"][] = "FirtHalf";
$tdataindleave1[".googleLikeFields"][] = "SecondHalf";
$tdataindleave1[".googleLikeFields"][] = "Reason";


$tdataindleave1[".advSearchFields"] = array();
$tdataindleave1[".advSearchFields"][] = "LtID";
$tdataindleave1[".advSearchFields"][] = "LDate";
$tdataindleave1[".advSearchFields"][] = "EmployeeID";
$tdataindleave1[".advSearchFields"][] = "LeaveType";
$tdataindleave1[".advSearchFields"][] = "Reason";
$tdataindleave1[".advSearchFields"][] = "FirtHalf";
$tdataindleave1[".advSearchFields"][] = "SecondHalf";
$tdataindleave1[".advSearchFields"][] = "NoDays";
$tdataindleave1[".advSearchFields"][] = "LWOP";
$tdataindleave1[".advSearchFields"][] = "LvID";

$tdataindleave1[".tableType"] = "list";

$tdataindleave1[".printerPageOrientation"] = 0;
$tdataindleave1[".nPrinterPageScale"] = 100;

$tdataindleave1[".nPrinterSplitRecords"] = 40;

$tdataindleave1[".nPrinterPDFSplitRecords"] = 40;



$tdataindleave1[".geocodingEnabled"] = false;





$tdataindleave1[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataindleave1[".pageSize"] = 20;

$tdataindleave1[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY LtID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataindleave1[".strOrderBy"] = $tstrOrderBy;

$tdataindleave1[".orderindexes"] = array();
	$tdataindleave1[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "LtID");


$tdataindleave1[".sqlHead"] = "SELECT LtID,  EmployeeID,  LDate,  NoDays,  LWOP,  LeaveType,  LvID,  FirtHalf,  SecondHalf,  Reason";
$tdataindleave1[".sqlFrom"] = "FROM indleave";
$tdataindleave1[".sqlWhereExpr"] = "";
$tdataindleave1[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataindleave1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataindleave1[".arrGroupsPerPage"] = $arrGPP;

$tdataindleave1[".highlightSearchResults"] = true;

$tableKeysindleave1 = array();
$tableKeysindleave1[] = "LtID";
$tdataindleave1[".Keys"] = $tableKeysindleave1;

$tdataindleave1[".listFields"] = array();
$tdataindleave1[".listFields"][] = "LtID";
$tdataindleave1[".listFields"][] = "LDate";
$tdataindleave1[".listFields"][] = "EmployeeID";
$tdataindleave1[".listFields"][] = "LeaveType";
$tdataindleave1[".listFields"][] = "Reason";
$tdataindleave1[".listFields"][] = "FirtHalf";
$tdataindleave1[".listFields"][] = "SecondHalf";
$tdataindleave1[".listFields"][] = "NoDays";
$tdataindleave1[".listFields"][] = "LWOP";
$tdataindleave1[".listFields"][] = "LvID";

$tdataindleave1[".hideMobileList"] = array();


$tdataindleave1[".viewFields"] = array();
$tdataindleave1[".viewFields"][] = "LtID";
$tdataindleave1[".viewFields"][] = "LDate";
$tdataindleave1[".viewFields"][] = "EmployeeID";
$tdataindleave1[".viewFields"][] = "LeaveType";
$tdataindleave1[".viewFields"][] = "Reason";
$tdataindleave1[".viewFields"][] = "FirtHalf";
$tdataindleave1[".viewFields"][] = "SecondHalf";
$tdataindleave1[".viewFields"][] = "NoDays";
$tdataindleave1[".viewFields"][] = "LWOP";
$tdataindleave1[".viewFields"][] = "LvID";

$tdataindleave1[".addFields"] = array();
$tdataindleave1[".addFields"][] = "LDate";
$tdataindleave1[".addFields"][] = "LeaveType";
$tdataindleave1[".addFields"][] = "Reason";
$tdataindleave1[".addFields"][] = "FirtHalf";
$tdataindleave1[".addFields"][] = "SecondHalf";
$tdataindleave1[".addFields"][] = "NoDays";
$tdataindleave1[".addFields"][] = "LWOP";
$tdataindleave1[".addFields"][] = "LvID";

$tdataindleave1[".masterListFields"] = array();
$tdataindleave1[".masterListFields"][] = "LtID";
$tdataindleave1[".masterListFields"][] = "LDate";
$tdataindleave1[".masterListFields"][] = "EmployeeID";
$tdataindleave1[".masterListFields"][] = "LeaveType";
$tdataindleave1[".masterListFields"][] = "Reason";
$tdataindleave1[".masterListFields"][] = "FirtHalf";
$tdataindleave1[".masterListFields"][] = "SecondHalf";
$tdataindleave1[".masterListFields"][] = "NoDays";
$tdataindleave1[".masterListFields"][] = "LWOP";
$tdataindleave1[".masterListFields"][] = "LvID";

$tdataindleave1[".inlineAddFields"] = array();
$tdataindleave1[".inlineAddFields"][] = "LDate";
$tdataindleave1[".inlineAddFields"][] = "LeaveType";
$tdataindleave1[".inlineAddFields"][] = "Reason";
$tdataindleave1[".inlineAddFields"][] = "FirtHalf";
$tdataindleave1[".inlineAddFields"][] = "SecondHalf";
$tdataindleave1[".inlineAddFields"][] = "NoDays";
$tdataindleave1[".inlineAddFields"][] = "LWOP";
$tdataindleave1[".inlineAddFields"][] = "LvID";

$tdataindleave1[".editFields"] = array();
$tdataindleave1[".editFields"][] = "LDate";
$tdataindleave1[".editFields"][] = "EmployeeID";
$tdataindleave1[".editFields"][] = "LeaveType";
$tdataindleave1[".editFields"][] = "Reason";
$tdataindleave1[".editFields"][] = "FirtHalf";
$tdataindleave1[".editFields"][] = "SecondHalf";
$tdataindleave1[".editFields"][] = "NoDays";
$tdataindleave1[".editFields"][] = "LWOP";
$tdataindleave1[".editFields"][] = "LvID";

$tdataindleave1[".inlineEditFields"] = array();
$tdataindleave1[".inlineEditFields"][] = "LDate";
$tdataindleave1[".inlineEditFields"][] = "EmployeeID";
$tdataindleave1[".inlineEditFields"][] = "LeaveType";
$tdataindleave1[".inlineEditFields"][] = "Reason";
$tdataindleave1[".inlineEditFields"][] = "FirtHalf";
$tdataindleave1[".inlineEditFields"][] = "SecondHalf";
$tdataindleave1[".inlineEditFields"][] = "NoDays";
$tdataindleave1[".inlineEditFields"][] = "LWOP";
$tdataindleave1[".inlineEditFields"][] = "LvID";

$tdataindleave1[".updateSelectedFields"] = array();
$tdataindleave1[".updateSelectedFields"][] = "LDate";
$tdataindleave1[".updateSelectedFields"][] = "EmployeeID";
$tdataindleave1[".updateSelectedFields"][] = "LeaveType";
$tdataindleave1[".updateSelectedFields"][] = "Reason";
$tdataindleave1[".updateSelectedFields"][] = "FirtHalf";
$tdataindleave1[".updateSelectedFields"][] = "SecondHalf";
$tdataindleave1[".updateSelectedFields"][] = "NoDays";
$tdataindleave1[".updateSelectedFields"][] = "LWOP";
$tdataindleave1[".updateSelectedFields"][] = "LvID";


$tdataindleave1[".exportFields"] = array();
$tdataindleave1[".exportFields"][] = "LtID";
$tdataindleave1[".exportFields"][] = "LDate";
$tdataindleave1[".exportFields"][] = "EmployeeID";
$tdataindleave1[".exportFields"][] = "LeaveType";
$tdataindleave1[".exportFields"][] = "Reason";
$tdataindleave1[".exportFields"][] = "FirtHalf";
$tdataindleave1[".exportFields"][] = "SecondHalf";
$tdataindleave1[".exportFields"][] = "NoDays";
$tdataindleave1[".exportFields"][] = "LWOP";
$tdataindleave1[".exportFields"][] = "LvID";

$tdataindleave1[".importFields"] = array();
$tdataindleave1[".importFields"][] = "LtID";
$tdataindleave1[".importFields"][] = "EmployeeID";
$tdataindleave1[".importFields"][] = "LDate";
$tdataindleave1[".importFields"][] = "NoDays";
$tdataindleave1[".importFields"][] = "LWOP";
$tdataindleave1[".importFields"][] = "LeaveType";
$tdataindleave1[".importFields"][] = "LvID";
$tdataindleave1[".importFields"][] = "FirtHalf";
$tdataindleave1[".importFields"][] = "SecondHalf";
$tdataindleave1[".importFields"][] = "Reason";

$tdataindleave1[".printFields"] = array();
$tdataindleave1[".printFields"][] = "LtID";
$tdataindleave1[".printFields"][] = "LDate";
$tdataindleave1[".printFields"][] = "EmployeeID";
$tdataindleave1[".printFields"][] = "LeaveType";
$tdataindleave1[".printFields"][] = "Reason";
$tdataindleave1[".printFields"][] = "FirtHalf";
$tdataindleave1[".printFields"][] = "SecondHalf";
$tdataindleave1[".printFields"][] = "NoDays";
$tdataindleave1[".printFields"][] = "LWOP";
$tdataindleave1[".printFields"][] = "LvID";


//	LtID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LtID";
	$fdata["GoodName"] = "LtID";
	$fdata["ownerTable"] = "indleave";
	$fdata["Label"] = GetFieldLabel("indleave1","LtID");
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




	$tdataindleave1["LtID"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "indleave";
	$fdata["Label"] = GetFieldLabel("indleave1","EmployeeID");
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




	$tdataindleave1["EmployeeID"] = $fdata;
//	LDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LDate";
	$fdata["GoodName"] = "LDate";
	$fdata["ownerTable"] = "indleave";
	$fdata["Label"] = GetFieldLabel("indleave1","LDate");
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




	$tdataindleave1["LDate"] = $fdata;
//	NoDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "NoDays";
	$fdata["GoodName"] = "NoDays";
	$fdata["ownerTable"] = "indleave";
	$fdata["Label"] = GetFieldLabel("indleave1","NoDays");
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




	$tdataindleave1["NoDays"] = $fdata;
//	LWOP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "LWOP";
	$fdata["GoodName"] = "LWOP";
	$fdata["ownerTable"] = "indleave";
	$fdata["Label"] = GetFieldLabel("indleave1","LWOP");
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




	$tdataindleave1["LWOP"] = $fdata;
//	LeaveType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "LeaveType";
	$fdata["GoodName"] = "LeaveType";
	$fdata["ownerTable"] = "indleave";
	$fdata["Label"] = GetFieldLabel("indleave1","LeaveType");
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




	$tdataindleave1["LeaveType"] = $fdata;
//	LvID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "LvID";
	$fdata["GoodName"] = "LvID";
	$fdata["ownerTable"] = "indleave";
	$fdata["Label"] = GetFieldLabel("indleave1","LvID");
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




	$tdataindleave1["LvID"] = $fdata;
//	FirtHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FirtHalf";
	$fdata["GoodName"] = "FirtHalf";
	$fdata["ownerTable"] = "indleave";
	$fdata["Label"] = GetFieldLabel("indleave1","FirtHalf");
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




	$tdataindleave1["FirtHalf"] = $fdata;
//	SecondHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "SecondHalf";
	$fdata["GoodName"] = "SecondHalf";
	$fdata["ownerTable"] = "indleave";
	$fdata["Label"] = GetFieldLabel("indleave1","SecondHalf");
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




	$tdataindleave1["SecondHalf"] = $fdata;
//	Reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Reason";
	$fdata["GoodName"] = "Reason";
	$fdata["ownerTable"] = "indleave";
	$fdata["Label"] = GetFieldLabel("indleave1","Reason");
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




	$tdataindleave1["Reason"] = $fdata;


$tables_data["indleave1"]=&$tdataindleave1;
$field_labels["indleave1"] = &$fieldLabelsindleave1;
$fieldToolTips["indleave1"] = &$fieldToolTipsindleave1;
$placeHolders["indleave1"] = &$placeHoldersindleave1;
$page_titles["indleave1"] = &$pageTitlesindleave1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["indleave1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["indleave1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_indleave1()
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
	"m_srcTableName" => "indleave1"
));

$proto6["m_sql"] = "LtID";
$proto6["m_srcTableName"] = "indleave1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "indleave",
	"m_srcTableName" => "indleave1"
));

$proto8["m_sql"] = "EmployeeID";
$proto8["m_srcTableName"] = "indleave1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "LDate",
	"m_strTable" => "indleave",
	"m_srcTableName" => "indleave1"
));

$proto10["m_sql"] = "LDate";
$proto10["m_srcTableName"] = "indleave1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NoDays",
	"m_strTable" => "indleave",
	"m_srcTableName" => "indleave1"
));

$proto12["m_sql"] = "NoDays";
$proto12["m_srcTableName"] = "indleave1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "LWOP",
	"m_strTable" => "indleave",
	"m_srcTableName" => "indleave1"
));

$proto14["m_sql"] = "LWOP";
$proto14["m_srcTableName"] = "indleave1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "LeaveType",
	"m_strTable" => "indleave",
	"m_srcTableName" => "indleave1"
));

$proto16["m_sql"] = "LeaveType";
$proto16["m_srcTableName"] = "indleave1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "LvID",
	"m_strTable" => "indleave",
	"m_srcTableName" => "indleave1"
));

$proto18["m_sql"] = "LvID";
$proto18["m_srcTableName"] = "indleave1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "FirtHalf",
	"m_strTable" => "indleave",
	"m_srcTableName" => "indleave1"
));

$proto20["m_sql"] = "FirtHalf";
$proto20["m_srcTableName"] = "indleave1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "SecondHalf",
	"m_strTable" => "indleave",
	"m_srcTableName" => "indleave1"
));

$proto22["m_sql"] = "SecondHalf";
$proto22["m_srcTableName"] = "indleave1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Reason",
	"m_strTable" => "indleave",
	"m_srcTableName" => "indleave1"
));

$proto24["m_sql"] = "Reason";
$proto24["m_srcTableName"] = "indleave1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "indleave";
$proto27["m_srcTableName"] = "indleave1";
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
$proto26["m_srcTableName"] = "indleave1";
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
	"m_srcTableName" => "indleave1"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 0;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="indleave1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_indleave1 = createSqlQuery_indleave1();


	
		;

										

$tdataindleave1[".sqlquery"] = $queryData_indleave1;

$tableEvents["indleave1"] = new eventsBase;
$tdataindleave1[".hasEvents"] = false;

?>