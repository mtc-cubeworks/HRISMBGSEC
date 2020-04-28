<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamispunched = array();
	$tdatamispunched[".truncateText"] = true;
	$tdatamispunched[".NumberOfChars"] = 80;
	$tdatamispunched[".ShortName"] = "mispunched";
	$tdatamispunched[".OwnerID"] = "";
	$tdatamispunched[".OriginalTable"] = "mispunched";

//	field labels
$fieldLabelsmispunched = array();
$fieldToolTipsmispunched = array();
$pageTitlesmispunched = array();
$placeHoldersmispunched = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmispunched["English"] = array();
	$fieldToolTipsmispunched["English"] = array();
	$placeHoldersmispunched["English"] = array();
	$pageTitlesmispunched["English"] = array();
	$fieldLabelsmispunched["English"]["ScID"] = "Sc ID";
	$fieldToolTipsmispunched["English"]["ScID"] = "";
	$placeHoldersmispunched["English"]["ScID"] = "";
	$fieldLabelsmispunched["English"]["SDate"] = "SDate";
	$fieldToolTipsmispunched["English"]["SDate"] = "";
	$placeHoldersmispunched["English"]["SDate"] = "";
	$fieldLabelsmispunched["English"]["STimeIn"] = "STime In";
	$fieldToolTipsmispunched["English"]["STimeIn"] = "";
	$placeHoldersmispunched["English"]["STimeIn"] = "";
	$fieldLabelsmispunched["English"]["STimeOut"] = "STime Out";
	$fieldToolTipsmispunched["English"]["STimeOut"] = "";
	$placeHoldersmispunched["English"]["STimeOut"] = "";
	$fieldLabelsmispunched["English"]["TimeIn"] = "Time In";
	$fieldToolTipsmispunched["English"]["TimeIn"] = "";
	$placeHoldersmispunched["English"]["TimeIn"] = "";
	$fieldLabelsmispunched["English"]["TimeOut"] = "Time Out";
	$fieldToolTipsmispunched["English"]["TimeOut"] = "";
	$placeHoldersmispunched["English"]["TimeOut"] = "";
	$fieldLabelsmispunched["English"]["Mispunched"] = "Mispunched";
	$fieldToolTipsmispunched["English"]["Mispunched"] = "";
	$placeHoldersmispunched["English"]["Mispunched"] = "";
	$fieldLabelsmispunched["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipsmispunched["English"]["EmployeeID"] = "";
	$placeHoldersmispunched["English"]["EmployeeID"] = "";
	if (count($fieldToolTipsmispunched["English"]))
		$tdatamispunched[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmispunched[""] = array();
	$fieldToolTipsmispunched[""] = array();
	$placeHoldersmispunched[""] = array();
	$pageTitlesmispunched[""] = array();
	$fieldLabelsmispunched[""]["ScID"] = "Sc ID";
	$fieldToolTipsmispunched[""]["ScID"] = "";
	$placeHoldersmispunched[""]["ScID"] = "";
	$fieldLabelsmispunched[""]["SDate"] = "SDate";
	$fieldToolTipsmispunched[""]["SDate"] = "";
	$placeHoldersmispunched[""]["SDate"] = "";
	$fieldLabelsmispunched[""]["STimeIn"] = "STime In";
	$fieldToolTipsmispunched[""]["STimeIn"] = "";
	$placeHoldersmispunched[""]["STimeIn"] = "";
	$fieldLabelsmispunched[""]["STimeOut"] = "STime Out";
	$fieldToolTipsmispunched[""]["STimeOut"] = "";
	$placeHoldersmispunched[""]["STimeOut"] = "";
	$fieldLabelsmispunched[""]["TimeIn"] = "Time In";
	$fieldToolTipsmispunched[""]["TimeIn"] = "";
	$placeHoldersmispunched[""]["TimeIn"] = "";
	$fieldLabelsmispunched[""]["TimeOut"] = "Time Out";
	$fieldToolTipsmispunched[""]["TimeOut"] = "";
	$placeHoldersmispunched[""]["TimeOut"] = "";
	$fieldLabelsmispunched[""]["Mispunched"] = "Mispunched";
	$fieldToolTipsmispunched[""]["Mispunched"] = "";
	$placeHoldersmispunched[""]["Mispunched"] = "";
	$fieldLabelsmispunched[""]["EmployeeID"] = "Employee ID";
	$fieldToolTipsmispunched[""]["EmployeeID"] = "";
	$placeHoldersmispunched[""]["EmployeeID"] = "";
	if (count($fieldToolTipsmispunched[""]))
		$tdatamispunched[".isUseToolTips"] = true;
}


	$tdatamispunched[".NCSearch"] = true;



$tdatamispunched[".shortTableName"] = "mispunched";
$tdatamispunched[".nSecOptions"] = 0;
$tdatamispunched[".recsPerRowPrint"] = 1;
$tdatamispunched[".mainTableOwnerID"] = "";
$tdatamispunched[".moveNext"] = 1;
$tdatamispunched[".entityType"] = 0;

$tdatamispunched[".strOriginalTableName"] = "mispunched";

	



$tdatamispunched[".showAddInPopup"] = false;

$tdatamispunched[".showEditInPopup"] = false;

$tdatamispunched[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamispunched[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamispunched[".fieldsForRegister"] = array();

$tdatamispunched[".listAjax"] = false;

	$tdatamispunched[".audit"] = false;

	$tdatamispunched[".locking"] = false;



$tdatamispunched[".list"] = true;



$tdatamispunched[".reorderRecordsByHeader"] = true;


$tdatamispunched[".exportFormatting"] = 2;
$tdatamispunched[".exportDelimiter"] = ",";
		


$tdatamispunched[".exportTo"] = true;

$tdatamispunched[".printFriendly"] = true;


$tdatamispunched[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamispunched[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamispunched[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamispunched[".searchSaving"] = false;
//

$tdatamispunched[".showSearchPanel"] = true;
		$tdatamispunched[".flexibleSearch"] = true;

$tdatamispunched[".isUseAjaxSuggest"] = true;

$tdatamispunched[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdatamispunched[".ajaxCodeSnippetAdded"] = false;

$tdatamispunched[".buttonsAdded"] = false;

$tdatamispunched[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamispunched[".isUseTimeForSearch"] = false;



$tdatamispunched[".badgeColor"] = "A9A9A9";


$tdatamispunched[".allSearchFields"] = array();
$tdatamispunched[".filterFields"] = array();
$tdatamispunched[".requiredSearchFields"] = array();

$tdatamispunched[".allSearchFields"][] = "ScID";
	$tdatamispunched[".allSearchFields"][] = "SDate";
	$tdatamispunched[".allSearchFields"][] = "STimeIn";
	$tdatamispunched[".allSearchFields"][] = "STimeOut";
	$tdatamispunched[".allSearchFields"][] = "TimeIn";
	$tdatamispunched[".allSearchFields"][] = "TimeOut";
	$tdatamispunched[".allSearchFields"][] = "Mispunched";
	$tdatamispunched[".allSearchFields"][] = "EmployeeID";
	

$tdatamispunched[".googleLikeFields"] = array();
$tdatamispunched[".googleLikeFields"][] = "ScID";
$tdatamispunched[".googleLikeFields"][] = "SDate";
$tdatamispunched[".googleLikeFields"][] = "STimeIn";
$tdatamispunched[".googleLikeFields"][] = "STimeOut";
$tdatamispunched[".googleLikeFields"][] = "TimeIn";
$tdatamispunched[".googleLikeFields"][] = "TimeOut";
$tdatamispunched[".googleLikeFields"][] = "Mispunched";
$tdatamispunched[".googleLikeFields"][] = "EmployeeID";


$tdatamispunched[".advSearchFields"] = array();
$tdatamispunched[".advSearchFields"][] = "ScID";
$tdatamispunched[".advSearchFields"][] = "SDate";
$tdatamispunched[".advSearchFields"][] = "STimeIn";
$tdatamispunched[".advSearchFields"][] = "STimeOut";
$tdatamispunched[".advSearchFields"][] = "TimeIn";
$tdatamispunched[".advSearchFields"][] = "TimeOut";
$tdatamispunched[".advSearchFields"][] = "Mispunched";
$tdatamispunched[".advSearchFields"][] = "EmployeeID";

$tdatamispunched[".tableType"] = "list";

$tdatamispunched[".printerPageOrientation"] = 0;
$tdatamispunched[".nPrinterPageScale"] = 100;

$tdatamispunched[".nPrinterSplitRecords"] = 40;

$tdatamispunched[".nPrinterPDFSplitRecords"] = 40;



$tdatamispunched[".geocodingEnabled"] = false;





$tdatamispunched[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamispunched[".pageSize"] = 20;

$tdatamispunched[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamispunched[".strOrderBy"] = $tstrOrderBy;

$tdatamispunched[".orderindexes"] = array();

$tdatamispunched[".sqlHead"] = "SELECT ScID,  	SDate,  	STimeIn,  	STimeOut,  	TimeIn,  	TimeOut,  	Mispunched,  	EmployeeID";
$tdatamispunched[".sqlFrom"] = "FROM mispunched";
$tdatamispunched[".sqlWhereExpr"] = "";
$tdatamispunched[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamispunched[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamispunched[".arrGroupsPerPage"] = $arrGPP;

$tdatamispunched[".highlightSearchResults"] = true;

$tableKeysmispunched = array();
$tableKeysmispunched[] = "ScID";
$tdatamispunched[".Keys"] = $tableKeysmispunched;

$tdatamispunched[".listFields"] = array();
$tdatamispunched[".listFields"][] = "ScID";
$tdatamispunched[".listFields"][] = "SDate";
$tdatamispunched[".listFields"][] = "EmployeeID";
$tdatamispunched[".listFields"][] = "STimeIn";
$tdatamispunched[".listFields"][] = "STimeOut";
$tdatamispunched[".listFields"][] = "TimeIn";
$tdatamispunched[".listFields"][] = "TimeOut";
$tdatamispunched[".listFields"][] = "Mispunched";

$tdatamispunched[".hideMobileList"] = array();


$tdatamispunched[".viewFields"] = array();

$tdatamispunched[".addFields"] = array();

$tdatamispunched[".masterListFields"] = array();
$tdatamispunched[".masterListFields"][] = "ScID";
$tdatamispunched[".masterListFields"][] = "SDate";
$tdatamispunched[".masterListFields"][] = "STimeIn";
$tdatamispunched[".masterListFields"][] = "STimeOut";
$tdatamispunched[".masterListFields"][] = "TimeIn";
$tdatamispunched[".masterListFields"][] = "TimeOut";
$tdatamispunched[".masterListFields"][] = "Mispunched";
$tdatamispunched[".masterListFields"][] = "EmployeeID";

$tdatamispunched[".inlineAddFields"] = array();

$tdatamispunched[".editFields"] = array();

$tdatamispunched[".inlineEditFields"] = array();

$tdatamispunched[".updateSelectedFields"] = array();


$tdatamispunched[".exportFields"] = array();
$tdatamispunched[".exportFields"][] = "ScID";
$tdatamispunched[".exportFields"][] = "SDate";
$tdatamispunched[".exportFields"][] = "STimeIn";
$tdatamispunched[".exportFields"][] = "STimeOut";
$tdatamispunched[".exportFields"][] = "TimeIn";
$tdatamispunched[".exportFields"][] = "TimeOut";
$tdatamispunched[".exportFields"][] = "Mispunched";
$tdatamispunched[".exportFields"][] = "EmployeeID";

$tdatamispunched[".importFields"] = array();

$tdatamispunched[".printFields"] = array();
$tdatamispunched[".printFields"][] = "ScID";
$tdatamispunched[".printFields"][] = "SDate";
$tdatamispunched[".printFields"][] = "STimeIn";
$tdatamispunched[".printFields"][] = "STimeOut";
$tdatamispunched[".printFields"][] = "TimeIn";
$tdatamispunched[".printFields"][] = "TimeOut";
$tdatamispunched[".printFields"][] = "Mispunched";
$tdatamispunched[".printFields"][] = "EmployeeID";


//	ScID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ScID";
	$fdata["GoodName"] = "ScID";
	$fdata["ownerTable"] = "mispunched";
	$fdata["Label"] = GetFieldLabel("mispunched","ScID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ScID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ScID";

	
	
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




	$tdatamispunched["ScID"] = $fdata;
//	SDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SDate";
	$fdata["GoodName"] = "SDate";
	$fdata["ownerTable"] = "mispunched";
	$fdata["Label"] = GetFieldLabel("mispunched","SDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SDate";

	
	
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




	$tdatamispunched["SDate"] = $fdata;
//	STimeIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "STimeIn";
	$fdata["GoodName"] = "STimeIn";
	$fdata["ownerTable"] = "mispunched";
	$fdata["Label"] = GetFieldLabel("mispunched","STimeIn");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "STimeIn";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STimeIn";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
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




	$tdatamispunched["STimeIn"] = $fdata;
//	STimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "STimeOut";
	$fdata["GoodName"] = "STimeOut";
	$fdata["ownerTable"] = "mispunched";
	$fdata["Label"] = GetFieldLabel("mispunched","STimeOut");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "STimeOut";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STimeOut";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
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




	$tdatamispunched["STimeOut"] = $fdata;
//	TimeIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TimeIn";
	$fdata["GoodName"] = "TimeIn";
	$fdata["ownerTable"] = "mispunched";
	$fdata["Label"] = GetFieldLabel("mispunched","TimeIn");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TimeIn";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TimeIn";

	
	
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

	$edata = array("EditFormat" => "Readonly");

		$edata["ShowTime"] = true;

	
		
	


	
	
	
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




	$tdatamispunched["TimeIn"] = $fdata;
//	TimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TimeOut";
	$fdata["GoodName"] = "TimeOut";
	$fdata["ownerTable"] = "mispunched";
	$fdata["Label"] = GetFieldLabel("mispunched","TimeOut");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TimeOut";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TimeOut";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
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




	$tdatamispunched["TimeOut"] = $fdata;
//	Mispunched
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Mispunched";
	$fdata["GoodName"] = "Mispunched";
	$fdata["ownerTable"] = "mispunched";
	$fdata["Label"] = GetFieldLabel("mispunched","Mispunched");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Mispunched";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Mispunched";

	
	
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




	$tdatamispunched["Mispunched"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "mispunched";
	$fdata["Label"] = GetFieldLabel("mispunched","EmployeeID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatamispunched["EmployeeID"] = $fdata;


$tables_data["mispunched"]=&$tdatamispunched;
$field_labels["mispunched"] = &$fieldLabelsmispunched;
$fieldToolTips["mispunched"] = &$fieldToolTipsmispunched;
$placeHolders["mispunched"] = &$placeHoldersmispunched;
$page_titles["mispunched"] = &$pageTitlesmispunched;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mispunched"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mispunched"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mispunched()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ScID,  	SDate,  	STimeIn,  	STimeOut,  	TimeIn,  	TimeOut,  	Mispunched,  	EmployeeID";
$proto0["m_strFrom"] = "FROM mispunched";
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
	"m_strName" => "ScID",
	"m_strTable" => "mispunched",
	"m_srcTableName" => "mispunched"
));

$proto6["m_sql"] = "ScID";
$proto6["m_srcTableName"] = "mispunched";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SDate",
	"m_strTable" => "mispunched",
	"m_srcTableName" => "mispunched"
));

$proto8["m_sql"] = "SDate";
$proto8["m_srcTableName"] = "mispunched";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "STimeIn",
	"m_strTable" => "mispunched",
	"m_srcTableName" => "mispunched"
));

$proto10["m_sql"] = "STimeIn";
$proto10["m_srcTableName"] = "mispunched";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "STimeOut",
	"m_strTable" => "mispunched",
	"m_srcTableName" => "mispunched"
));

$proto12["m_sql"] = "STimeOut";
$proto12["m_srcTableName"] = "mispunched";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeIn",
	"m_strTable" => "mispunched",
	"m_srcTableName" => "mispunched"
));

$proto14["m_sql"] = "TimeIn";
$proto14["m_srcTableName"] = "mispunched";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeOut",
	"m_strTable" => "mispunched",
	"m_srcTableName" => "mispunched"
));

$proto16["m_sql"] = "TimeOut";
$proto16["m_srcTableName"] = "mispunched";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Mispunched",
	"m_strTable" => "mispunched",
	"m_srcTableName" => "mispunched"
));

$proto18["m_sql"] = "Mispunched";
$proto18["m_srcTableName"] = "mispunched";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "mispunched",
	"m_srcTableName" => "mispunched"
));

$proto20["m_sql"] = "EmployeeID";
$proto20["m_srcTableName"] = "mispunched";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "mispunched";
$proto23["m_srcTableName"] = "mispunched";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "ScID";
$proto23["m_columns"][] = "SDate";
$proto23["m_columns"][] = "STimeIn";
$proto23["m_columns"][] = "STimeOut";
$proto23["m_columns"][] = "TimeIn";
$proto23["m_columns"][] = "TimeOut";
$proto23["m_columns"][] = "Mispunched";
$proto23["m_columns"][] = "EmployeeID";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "mispunched";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "mispunched";
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
$proto0["m_srcTableName"]="mispunched";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mispunched = createSqlQuery_mispunched();


	
		;

								

$tdatamispunched[".sqlquery"] = $queryData_mispunched;

$tableEvents["mispunched"] = new eventsBase;
$tdatamispunched[".hasEvents"] = false;

?>