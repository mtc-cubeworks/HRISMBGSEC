<?php
require_once(getabspath("classes/cipherer.php"));




$tdataleavestoday = array();
	$tdataleavestoday[".truncateText"] = true;
	$tdataleavestoday[".NumberOfChars"] = 80;
	$tdataleavestoday[".ShortName"] = "leavestoday";
	$tdataleavestoday[".OwnerID"] = "";
	$tdataleavestoday[".OriginalTable"] = "leavestoday";

//	field labels
$fieldLabelsleavestoday = array();
$fieldToolTipsleavestoday = array();
$pageTitlesleavestoday = array();
$placeHoldersleavestoday = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsleavestoday["English"] = array();
	$fieldToolTipsleavestoday["English"] = array();
	$placeHoldersleavestoday["English"] = array();
	$pageTitlesleavestoday["English"] = array();
	$fieldLabelsleavestoday["English"]["Date"] = "Leave Today";
	$fieldToolTipsleavestoday["English"]["Date"] = "";
	$placeHoldersleavestoday["English"]["Date"] = "";
	$fieldLabelsleavestoday["English"]["Employee"] = "Employee";
	$fieldToolTipsleavestoday["English"]["Employee"] = "";
	$placeHoldersleavestoday["English"]["Employee"] = "";
	$fieldLabelsleavestoday["English"]["LeaveType"] = "Leave Type";
	$fieldToolTipsleavestoday["English"]["LeaveType"] = "";
	$placeHoldersleavestoday["English"]["LeaveType"] = "";
	$fieldLabelsleavestoday["English"]["FirtHalf"] = "1st Half";
	$fieldToolTipsleavestoday["English"]["FirtHalf"] = "";
	$placeHoldersleavestoday["English"]["FirtHalf"] = "";
	$fieldLabelsleavestoday["English"]["SecondHalf"] = "2nd Half";
	$fieldToolTipsleavestoday["English"]["SecondHalf"] = "";
	$placeHoldersleavestoday["English"]["SecondHalf"] = "";
	$fieldLabelsleavestoday["English"]["Reason"] = "Reason";
	$fieldToolTipsleavestoday["English"]["Reason"] = "";
	$placeHoldersleavestoday["English"]["Reason"] = "";
	$fieldLabelsleavestoday["English"]["LWOP"] = "LWOP";
	$fieldToolTipsleavestoday["English"]["LWOP"] = "";
	$placeHoldersleavestoday["English"]["LWOP"] = "";
	$fieldLabelsleavestoday["English"]["LtID"] = "Lt ID";
	$fieldToolTipsleavestoday["English"]["LtID"] = "";
	$placeHoldersleavestoday["English"]["LtID"] = "";
	if (count($fieldToolTipsleavestoday["English"]))
		$tdataleavestoday[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsleavestoday[""] = array();
	$fieldToolTipsleavestoday[""] = array();
	$placeHoldersleavestoday[""] = array();
	$pageTitlesleavestoday[""] = array();
	$fieldLabelsleavestoday[""]["Date"] = "Date";
	$fieldToolTipsleavestoday[""]["Date"] = "";
	$placeHoldersleavestoday[""]["Date"] = "";
	$fieldLabelsleavestoday[""]["Employee"] = "Employee";
	$fieldToolTipsleavestoday[""]["Employee"] = "";
	$placeHoldersleavestoday[""]["Employee"] = "";
	$fieldLabelsleavestoday[""]["LeaveType"] = "Leave Type";
	$fieldToolTipsleavestoday[""]["LeaveType"] = "";
	$placeHoldersleavestoday[""]["LeaveType"] = "";
	$fieldLabelsleavestoday[""]["FirtHalf"] = "Firt Half";
	$fieldToolTipsleavestoday[""]["FirtHalf"] = "";
	$placeHoldersleavestoday[""]["FirtHalf"] = "";
	$fieldLabelsleavestoday[""]["SecondHalf"] = "Second Half";
	$fieldToolTipsleavestoday[""]["SecondHalf"] = "";
	$placeHoldersleavestoday[""]["SecondHalf"] = "";
	$fieldLabelsleavestoday[""]["Reason"] = "Reason";
	$fieldToolTipsleavestoday[""]["Reason"] = "";
	$placeHoldersleavestoday[""]["Reason"] = "";
	$fieldLabelsleavestoday[""]["LWOP"] = "LWOP";
	$fieldToolTipsleavestoday[""]["LWOP"] = "";
	$placeHoldersleavestoday[""]["LWOP"] = "";
	$fieldLabelsleavestoday[""]["LtID"] = "Lt ID";
	$fieldToolTipsleavestoday[""]["LtID"] = "";
	$placeHoldersleavestoday[""]["LtID"] = "";
	if (count($fieldToolTipsleavestoday[""]))
		$tdataleavestoday[".isUseToolTips"] = true;
}


	$tdataleavestoday[".NCSearch"] = true;



$tdataleavestoday[".shortTableName"] = "leavestoday";
$tdataleavestoday[".nSecOptions"] = 0;
$tdataleavestoday[".recsPerRowPrint"] = 1;
$tdataleavestoday[".mainTableOwnerID"] = "";
$tdataleavestoday[".moveNext"] = 1;
$tdataleavestoday[".entityType"] = 0;

$tdataleavestoday[".strOriginalTableName"] = "leavestoday";

	



$tdataleavestoday[".showAddInPopup"] = false;

$tdataleavestoday[".showEditInPopup"] = false;

$tdataleavestoday[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataleavestoday[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataleavestoday[".fieldsForRegister"] = array();

$tdataleavestoday[".listAjax"] = false;

	$tdataleavestoday[".audit"] = false;

	$tdataleavestoday[".locking"] = false;



$tdataleavestoday[".list"] = true;



$tdataleavestoday[".reorderRecordsByHeader"] = true;


$tdataleavestoday[".exportFormatting"] = 2;
$tdataleavestoday[".exportDelimiter"] = ",";
		
$tdataleavestoday[".view"] = true;


$tdataleavestoday[".exportTo"] = true;

$tdataleavestoday[".printFriendly"] = true;


$tdataleavestoday[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataleavestoday[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataleavestoday[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataleavestoday[".searchSaving"] = false;
//

$tdataleavestoday[".showSearchPanel"] = true;
		$tdataleavestoday[".flexibleSearch"] = true;

$tdataleavestoday[".isUseAjaxSuggest"] = true;

$tdataleavestoday[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdataleavestoday[".ajaxCodeSnippetAdded"] = false;

$tdataleavestoday[".buttonsAdded"] = false;

$tdataleavestoday[".addPageEvents"] = false;

// use timepicker for search panel
$tdataleavestoday[".isUseTimeForSearch"] = false;





$tdataleavestoday[".allSearchFields"] = array();
$tdataleavestoday[".filterFields"] = array();
$tdataleavestoday[".requiredSearchFields"] = array();

$tdataleavestoday[".allSearchFields"][] = "Date";
	$tdataleavestoday[".allSearchFields"][] = "Employee";
	$tdataleavestoday[".allSearchFields"][] = "LeaveType";
	$tdataleavestoday[".allSearchFields"][] = "FirtHalf";
	$tdataleavestoday[".allSearchFields"][] = "SecondHalf";
	$tdataleavestoday[".allSearchFields"][] = "Reason";
	$tdataleavestoday[".allSearchFields"][] = "LWOP";
	

$tdataleavestoday[".googleLikeFields"] = array();
$tdataleavestoday[".googleLikeFields"][] = "Date";
$tdataleavestoday[".googleLikeFields"][] = "Employee";
$tdataleavestoday[".googleLikeFields"][] = "LeaveType";
$tdataleavestoday[".googleLikeFields"][] = "FirtHalf";
$tdataleavestoday[".googleLikeFields"][] = "SecondHalf";
$tdataleavestoday[".googleLikeFields"][] = "Reason";
$tdataleavestoday[".googleLikeFields"][] = "LWOP";
$tdataleavestoday[".googleLikeFields"][] = "LtID";


$tdataleavestoday[".advSearchFields"] = array();
$tdataleavestoday[".advSearchFields"][] = "Date";
$tdataleavestoday[".advSearchFields"][] = "Employee";
$tdataleavestoday[".advSearchFields"][] = "LeaveType";
$tdataleavestoday[".advSearchFields"][] = "FirtHalf";
$tdataleavestoday[".advSearchFields"][] = "SecondHalf";
$tdataleavestoday[".advSearchFields"][] = "Reason";
$tdataleavestoday[".advSearchFields"][] = "LWOP";

$tdataleavestoday[".tableType"] = "list";

$tdataleavestoday[".printerPageOrientation"] = 0;
$tdataleavestoday[".nPrinterPageScale"] = 100;

$tdataleavestoday[".nPrinterSplitRecords"] = 40;

$tdataleavestoday[".nPrinterPDFSplitRecords"] = 40;



$tdataleavestoday[".geocodingEnabled"] = false;





$tdataleavestoday[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataleavestoday[".pageSize"] = 20;

$tdataleavestoday[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataleavestoday[".strOrderBy"] = $tstrOrderBy;

$tdataleavestoday[".orderindexes"] = array();

$tdataleavestoday[".sqlHead"] = "SELECT `Date`,  Employee,  LeaveType,  FirtHalf,  SecondHalf,  Reason,  LWOP,  LtID";
$tdataleavestoday[".sqlFrom"] = "FROM leavestoday";
$tdataleavestoday[".sqlWhereExpr"] = "";
$tdataleavestoday[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataleavestoday[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataleavestoday[".arrGroupsPerPage"] = $arrGPP;

$tdataleavestoday[".highlightSearchResults"] = true;

$tableKeysleavestoday = array();
$tableKeysleavestoday[] = "LtID";
$tdataleavestoday[".Keys"] = $tableKeysleavestoday;

$tdataleavestoday[".listFields"] = array();
$tdataleavestoday[".listFields"][] = "Date";
$tdataleavestoday[".listFields"][] = "Employee";
$tdataleavestoday[".listFields"][] = "LeaveType";
$tdataleavestoday[".listFields"][] = "FirtHalf";
$tdataleavestoday[".listFields"][] = "SecondHalf";
$tdataleavestoday[".listFields"][] = "LWOP";

$tdataleavestoday[".hideMobileList"] = array();


$tdataleavestoday[".viewFields"] = array();
$tdataleavestoday[".viewFields"][] = "Date";
$tdataleavestoday[".viewFields"][] = "Employee";
$tdataleavestoday[".viewFields"][] = "LeaveType";
$tdataleavestoday[".viewFields"][] = "FirtHalf";
$tdataleavestoday[".viewFields"][] = "SecondHalf";
$tdataleavestoday[".viewFields"][] = "Reason";
$tdataleavestoday[".viewFields"][] = "LWOP";

$tdataleavestoday[".addFields"] = array();

$tdataleavestoday[".masterListFields"] = array();
$tdataleavestoday[".masterListFields"][] = "LtID";
$tdataleavestoday[".masterListFields"][] = "Date";
$tdataleavestoday[".masterListFields"][] = "Employee";
$tdataleavestoday[".masterListFields"][] = "LeaveType";
$tdataleavestoday[".masterListFields"][] = "FirtHalf";
$tdataleavestoday[".masterListFields"][] = "SecondHalf";
$tdataleavestoday[".masterListFields"][] = "Reason";
$tdataleavestoday[".masterListFields"][] = "LWOP";

$tdataleavestoday[".inlineAddFields"] = array();

$tdataleavestoday[".editFields"] = array();

$tdataleavestoday[".inlineEditFields"] = array();

$tdataleavestoday[".updateSelectedFields"] = array();


$tdataleavestoday[".exportFields"] = array();
$tdataleavestoday[".exportFields"][] = "Date";
$tdataleavestoday[".exportFields"][] = "Employee";
$tdataleavestoday[".exportFields"][] = "LeaveType";
$tdataleavestoday[".exportFields"][] = "FirtHalf";
$tdataleavestoday[".exportFields"][] = "SecondHalf";
$tdataleavestoday[".exportFields"][] = "Reason";
$tdataleavestoday[".exportFields"][] = "LWOP";

$tdataleavestoday[".importFields"] = array();

$tdataleavestoday[".printFields"] = array();
$tdataleavestoday[".printFields"][] = "Date";
$tdataleavestoday[".printFields"][] = "Employee";
$tdataleavestoday[".printFields"][] = "LeaveType";
$tdataleavestoday[".printFields"][] = "FirtHalf";
$tdataleavestoday[".printFields"][] = "SecondHalf";
$tdataleavestoday[".printFields"][] = "Reason";
$tdataleavestoday[".printFields"][] = "LWOP";


//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "leavestoday";
	$fdata["Label"] = GetFieldLabel("leavestoday","Date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Date`";

	
	
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




	$tdataleavestoday["Date"] = $fdata;
//	Employee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Employee";
	$fdata["GoodName"] = "Employee";
	$fdata["ownerTable"] = "leavestoday";
	$fdata["Label"] = GetFieldLabel("leavestoday","Employee");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdataleavestoday["Employee"] = $fdata;
//	LeaveType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LeaveType";
	$fdata["GoodName"] = "LeaveType";
	$fdata["ownerTable"] = "leavestoday";
	$fdata["Label"] = GetFieldLabel("leavestoday","LeaveType");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataleavestoday["LeaveType"] = $fdata;
//	FirtHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FirtHalf";
	$fdata["GoodName"] = "FirtHalf";
	$fdata["ownerTable"] = "leavestoday";
	$fdata["Label"] = GetFieldLabel("leavestoday","FirtHalf");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdataleavestoday["FirtHalf"] = $fdata;
//	SecondHalf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SecondHalf";
	$fdata["GoodName"] = "SecondHalf";
	$fdata["ownerTable"] = "leavestoday";
	$fdata["Label"] = GetFieldLabel("leavestoday","SecondHalf");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdataleavestoday["SecondHalf"] = $fdata;
//	Reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Reason";
	$fdata["GoodName"] = "Reason";
	$fdata["ownerTable"] = "leavestoday";
	$fdata["Label"] = GetFieldLabel("leavestoday","Reason");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

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




	$tdataleavestoday["Reason"] = $fdata;
//	LWOP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "LWOP";
	$fdata["GoodName"] = "LWOP";
	$fdata["ownerTable"] = "leavestoday";
	$fdata["Label"] = GetFieldLabel("leavestoday","LWOP");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataleavestoday["LWOP"] = $fdata;
//	LtID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "LtID";
	$fdata["GoodName"] = "LtID";
	$fdata["ownerTable"] = "leavestoday";
	$fdata["Label"] = GetFieldLabel("leavestoday","LtID");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "LtID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LtID";

	
	
			
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








	$tdataleavestoday["LtID"] = $fdata;


$tables_data["leavestoday"]=&$tdataleavestoday;
$field_labels["leavestoday"] = &$fieldLabelsleavestoday;
$fieldToolTips["leavestoday"] = &$fieldToolTipsleavestoday;
$placeHolders["leavestoday"] = &$placeHoldersleavestoday;
$page_titles["leavestoday"] = &$pageTitlesleavestoday;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["leavestoday"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["leavestoday"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_leavestoday()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Date`,  Employee,  LeaveType,  FirtHalf,  SecondHalf,  Reason,  LWOP,  LtID";
$proto0["m_strFrom"] = "FROM leavestoday";
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
	"m_strName" => "Date",
	"m_strTable" => "leavestoday",
	"m_srcTableName" => "leavestoday"
));

$proto6["m_sql"] = "`Date`";
$proto6["m_srcTableName"] = "leavestoday";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Employee",
	"m_strTable" => "leavestoday",
	"m_srcTableName" => "leavestoday"
));

$proto8["m_sql"] = "Employee";
$proto8["m_srcTableName"] = "leavestoday";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "LeaveType",
	"m_strTable" => "leavestoday",
	"m_srcTableName" => "leavestoday"
));

$proto10["m_sql"] = "LeaveType";
$proto10["m_srcTableName"] = "leavestoday";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "FirtHalf",
	"m_strTable" => "leavestoday",
	"m_srcTableName" => "leavestoday"
));

$proto12["m_sql"] = "FirtHalf";
$proto12["m_srcTableName"] = "leavestoday";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "SecondHalf",
	"m_strTable" => "leavestoday",
	"m_srcTableName" => "leavestoday"
));

$proto14["m_sql"] = "SecondHalf";
$proto14["m_srcTableName"] = "leavestoday";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Reason",
	"m_strTable" => "leavestoday",
	"m_srcTableName" => "leavestoday"
));

$proto16["m_sql"] = "Reason";
$proto16["m_srcTableName"] = "leavestoday";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "LWOP",
	"m_strTable" => "leavestoday",
	"m_srcTableName" => "leavestoday"
));

$proto18["m_sql"] = "LWOP";
$proto18["m_srcTableName"] = "leavestoday";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "LtID",
	"m_strTable" => "leavestoday",
	"m_srcTableName" => "leavestoday"
));

$proto20["m_sql"] = "LtID";
$proto20["m_srcTableName"] = "leavestoday";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "leavestoday";
$proto23["m_srcTableName"] = "leavestoday";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "Date";
$proto23["m_columns"][] = "EmployeeID";
$proto23["m_columns"][] = "Employee";
$proto23["m_columns"][] = "LeaveType";
$proto23["m_columns"][] = "FirtHalf";
$proto23["m_columns"][] = "SecondHalf";
$proto23["m_columns"][] = "Reason";
$proto23["m_columns"][] = "LWOP";
$proto23["m_columns"][] = "LtID";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "leavestoday";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "leavestoday";
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
$proto0["m_srcTableName"]="leavestoday";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_leavestoday = createSqlQuery_leavestoday();


	
		;

								

$tdataleavestoday[".sqlquery"] = $queryData_leavestoday;

$tableEvents["leavestoday"] = new eventsBase;
$tdataleavestoday[".hasEvents"] = false;

?>