<?php
require_once(getabspath("classes/cipherer.php"));




$tdatademo_log = array();
	$tdatademo_log[".truncateText"] = true;
	$tdatademo_log[".NumberOfChars"] = 80;
	$tdatademo_log[".ShortName"] = "demo_log";
	$tdatademo_log[".OwnerID"] = "";
	$tdatademo_log[".OriginalTable"] = "demo_log";

//	field labels
$fieldLabelsdemo_log = array();
$fieldToolTipsdemo_log = array();
$pageTitlesdemo_log = array();
$placeHoldersdemo_log = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdemo_log["English"] = array();
	$fieldToolTipsdemo_log["English"] = array();
	$placeHoldersdemo_log["English"] = array();
	$pageTitlesdemo_log["English"] = array();
	$fieldLabelsdemo_log["English"]["log_time"] = "Log Time";
	$fieldToolTipsdemo_log["English"]["log_time"] = "";
	$placeHoldersdemo_log["English"]["log_time"] = "";
	$fieldLabelsdemo_log["English"]["data"] = "Data";
	$fieldToolTipsdemo_log["English"]["data"] = "";
	$placeHoldersdemo_log["English"]["data"] = "";
	$fieldLabelsdemo_log["English"]["EmployeeID"] = "Employee";
	$fieldToolTipsdemo_log["English"]["EmployeeID"] = "";
	$placeHoldersdemo_log["English"]["EmployeeID"] = "";
	$fieldLabelsdemo_log["English"]["user_name"] = "User Name";
	$fieldToolTipsdemo_log["English"]["user_name"] = "";
	$placeHoldersdemo_log["English"]["user_name"] = "";
	$fieldLabelsdemo_log["English"]["TransID"] = "Trans ID";
	$fieldToolTipsdemo_log["English"]["TransID"] = "";
	$placeHoldersdemo_log["English"]["TransID"] = "";
	$fieldLabelsdemo_log["English"]["MLogID"] = "MLog ID";
	$fieldToolTipsdemo_log["English"]["MLogID"] = "";
	$placeHoldersdemo_log["English"]["MLogID"] = "";
	$fieldLabelsdemo_log["English"]["MLogDate"] = "MLog Date";
	$fieldToolTipsdemo_log["English"]["MLogDate"] = "";
	$placeHoldersdemo_log["English"]["MLogDate"] = "";
	$fieldLabelsdemo_log["English"]["ClockType"] = "Clock Type";
	$fieldToolTipsdemo_log["English"]["ClockType"] = "";
	$placeHoldersdemo_log["English"]["ClockType"] = "";
	if (count($fieldToolTipsdemo_log["English"]))
		$tdatademo_log[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdemo_log[""] = array();
	$fieldToolTipsdemo_log[""] = array();
	$placeHoldersdemo_log[""] = array();
	$pageTitlesdemo_log[""] = array();
	if (count($fieldToolTipsdemo_log[""]))
		$tdatademo_log[".isUseToolTips"] = true;
}


	$tdatademo_log[".NCSearch"] = true;



$tdatademo_log[".shortTableName"] = "demo_log";
$tdatademo_log[".nSecOptions"] = 0;
$tdatademo_log[".recsPerRowPrint"] = 1;
$tdatademo_log[".mainTableOwnerID"] = "";
$tdatademo_log[".moveNext"] = 1;
$tdatademo_log[".entityType"] = 0;

$tdatademo_log[".strOriginalTableName"] = "demo_log";

	



$tdatademo_log[".showAddInPopup"] = false;

$tdatademo_log[".showEditInPopup"] = false;

$tdatademo_log[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatademo_log[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatademo_log[".fieldsForRegister"] = array();

$tdatademo_log[".listAjax"] = false;

	$tdatademo_log[".audit"] = false;

	$tdatademo_log[".locking"] = false;

$tdatademo_log[".edit"] = true;
$tdatademo_log[".afterEditAction"] = 1;
$tdatademo_log[".closePopupAfterEdit"] = 1;
$tdatademo_log[".afterEditActionDetTable"] = "";

$tdatademo_log[".add"] = true;
$tdatademo_log[".afterAddAction"] = 1;
$tdatademo_log[".closePopupAfterAdd"] = 1;
$tdatademo_log[".afterAddActionDetTable"] = "";

$tdatademo_log[".list"] = true;

$tdatademo_log[".inlineEdit"] = true;


$tdatademo_log[".reorderRecordsByHeader"] = true;


$tdatademo_log[".exportFormatting"] = 2;
$tdatademo_log[".exportDelimiter"] = ",";
		
$tdatademo_log[".inlineAdd"] = true;
$tdatademo_log[".view"] = true;

$tdatademo_log[".import"] = true;

$tdatademo_log[".exportTo"] = true;

$tdatademo_log[".printFriendly"] = true;

$tdatademo_log[".delete"] = true;

$tdatademo_log[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatademo_log[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatademo_log[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatademo_log[".searchSaving"] = false;
//

$tdatademo_log[".showSearchPanel"] = true;
		$tdatademo_log[".flexibleSearch"] = true;

$tdatademo_log[".isUseAjaxSuggest"] = true;

$tdatademo_log[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																				

$tdatademo_log[".ajaxCodeSnippetAdded"] = false;

$tdatademo_log[".buttonsAdded"] = false;

$tdatademo_log[".addPageEvents"] = true;

// use timepicker for search panel
$tdatademo_log[".isUseTimeForSearch"] = false;





$tdatademo_log[".allSearchFields"] = array();
$tdatademo_log[".filterFields"] = array();
$tdatademo_log[".requiredSearchFields"] = array();

$tdatademo_log[".allSearchFields"][] = "TransID";
	$tdatademo_log[".allSearchFields"][] = "EmployeeID";
	$tdatademo_log[".allSearchFields"][] = "log_time";
	$tdatademo_log[".allSearchFields"][] = "ClockType";
	$tdatademo_log[".allSearchFields"][] = "data";
	$tdatademo_log[".allSearchFields"][] = "MLogID";
	$tdatademo_log[".allSearchFields"][] = "MLogDate";
	

$tdatademo_log[".googleLikeFields"] = array();
$tdatademo_log[".googleLikeFields"][] = "log_time";
$tdatademo_log[".googleLikeFields"][] = "data";
$tdatademo_log[".googleLikeFields"][] = "EmployeeID";
$tdatademo_log[".googleLikeFields"][] = "user_name";
$tdatademo_log[".googleLikeFields"][] = "TransID";
$tdatademo_log[".googleLikeFields"][] = "MLogID";
$tdatademo_log[".googleLikeFields"][] = "MLogDate";
$tdatademo_log[".googleLikeFields"][] = "ClockType";


$tdatademo_log[".advSearchFields"] = array();
$tdatademo_log[".advSearchFields"][] = "TransID";
$tdatademo_log[".advSearchFields"][] = "EmployeeID";
$tdatademo_log[".advSearchFields"][] = "log_time";
$tdatademo_log[".advSearchFields"][] = "ClockType";
$tdatademo_log[".advSearchFields"][] = "data";
$tdatademo_log[".advSearchFields"][] = "MLogID";
$tdatademo_log[".advSearchFields"][] = "MLogDate";

$tdatademo_log[".tableType"] = "list";

$tdatademo_log[".printerPageOrientation"] = 0;
$tdatademo_log[".nPrinterPageScale"] = 100;

$tdatademo_log[".nPrinterSplitRecords"] = 40;

$tdatademo_log[".nPrinterPDFSplitRecords"] = 40;



$tdatademo_log[".geocodingEnabled"] = false;





$tdatademo_log[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatademo_log[".pageSize"] = 20;

$tdatademo_log[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY TransID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatademo_log[".strOrderBy"] = $tstrOrderBy;

$tdatademo_log[".orderindexes"] = array();
	$tdatademo_log[".orderindexes"][] = array(5, (0 ? "ASC" : "DESC"), "TransID");


$tdatademo_log[".sqlHead"] = "SELECT log_time,  `data`,  EmployeeID,  user_name,  TransID,  MLogID,  MLogDate,  ClockType";
$tdatademo_log[".sqlFrom"] = "FROM demo_log";
$tdatademo_log[".sqlWhereExpr"] = "";
$tdatademo_log[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatademo_log[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatademo_log[".arrGroupsPerPage"] = $arrGPP;

$tdatademo_log[".highlightSearchResults"] = true;

$tableKeysdemo_log = array();
$tableKeysdemo_log[] = "TransID";
$tdatademo_log[".Keys"] = $tableKeysdemo_log;

$tdatademo_log[".listFields"] = array();
$tdatademo_log[".listFields"][] = "TransID";
$tdatademo_log[".listFields"][] = "EmployeeID";
$tdatademo_log[".listFields"][] = "log_time";
$tdatademo_log[".listFields"][] = "ClockType";
$tdatademo_log[".listFields"][] = "data";
$tdatademo_log[".listFields"][] = "MLogID";
$tdatademo_log[".listFields"][] = "MLogDate";

$tdatademo_log[".hideMobileList"] = array();


$tdatademo_log[".viewFields"] = array();
$tdatademo_log[".viewFields"][] = "TransID";
$tdatademo_log[".viewFields"][] = "EmployeeID";
$tdatademo_log[".viewFields"][] = "log_time";
$tdatademo_log[".viewFields"][] = "user_name";
$tdatademo_log[".viewFields"][] = "ClockType";
$tdatademo_log[".viewFields"][] = "data";
$tdatademo_log[".viewFields"][] = "MLogID";
$tdatademo_log[".viewFields"][] = "MLogDate";

$tdatademo_log[".addFields"] = array();
$tdatademo_log[".addFields"][] = "EmployeeID";
$tdatademo_log[".addFields"][] = "log_time";
$tdatademo_log[".addFields"][] = "ClockType";
$tdatademo_log[".addFields"][] = "data";
$tdatademo_log[".addFields"][] = "MLogID";
$tdatademo_log[".addFields"][] = "MLogDate";

$tdatademo_log[".masterListFields"] = array();
$tdatademo_log[".masterListFields"][] = "TransID";
$tdatademo_log[".masterListFields"][] = "EmployeeID";
$tdatademo_log[".masterListFields"][] = "log_time";
$tdatademo_log[".masterListFields"][] = "user_name";
$tdatademo_log[".masterListFields"][] = "ClockType";
$tdatademo_log[".masterListFields"][] = "data";
$tdatademo_log[".masterListFields"][] = "MLogID";
$tdatademo_log[".masterListFields"][] = "MLogDate";

$tdatademo_log[".inlineAddFields"] = array();
$tdatademo_log[".inlineAddFields"][] = "EmployeeID";
$tdatademo_log[".inlineAddFields"][] = "log_time";
$tdatademo_log[".inlineAddFields"][] = "ClockType";
$tdatademo_log[".inlineAddFields"][] = "data";
$tdatademo_log[".inlineAddFields"][] = "MLogID";
$tdatademo_log[".inlineAddFields"][] = "MLogDate";

$tdatademo_log[".editFields"] = array();
$tdatademo_log[".editFields"][] = "EmployeeID";
$tdatademo_log[".editFields"][] = "log_time";
$tdatademo_log[".editFields"][] = "ClockType";
$tdatademo_log[".editFields"][] = "data";
$tdatademo_log[".editFields"][] = "MLogID";
$tdatademo_log[".editFields"][] = "MLogDate";

$tdatademo_log[".inlineEditFields"] = array();
$tdatademo_log[".inlineEditFields"][] = "EmployeeID";
$tdatademo_log[".inlineEditFields"][] = "log_time";
$tdatademo_log[".inlineEditFields"][] = "ClockType";
$tdatademo_log[".inlineEditFields"][] = "data";
$tdatademo_log[".inlineEditFields"][] = "MLogID";
$tdatademo_log[".inlineEditFields"][] = "MLogDate";

$tdatademo_log[".updateSelectedFields"] = array();
$tdatademo_log[".updateSelectedFields"][] = "EmployeeID";
$tdatademo_log[".updateSelectedFields"][] = "log_time";
$tdatademo_log[".updateSelectedFields"][] = "ClockType";
$tdatademo_log[".updateSelectedFields"][] = "data";


$tdatademo_log[".exportFields"] = array();
$tdatademo_log[".exportFields"][] = "TransID";
$tdatademo_log[".exportFields"][] = "EmployeeID";
$tdatademo_log[".exportFields"][] = "log_time";
$tdatademo_log[".exportFields"][] = "ClockType";
$tdatademo_log[".exportFields"][] = "data";
$tdatademo_log[".exportFields"][] = "MLogID";
$tdatademo_log[".exportFields"][] = "MLogDate";

$tdatademo_log[".importFields"] = array();
$tdatademo_log[".importFields"][] = "log_time";
$tdatademo_log[".importFields"][] = "data";
$tdatademo_log[".importFields"][] = "EmployeeID";
$tdatademo_log[".importFields"][] = "TransID";
$tdatademo_log[".importFields"][] = "MLogID";
$tdatademo_log[".importFields"][] = "MLogDate";
$tdatademo_log[".importFields"][] = "ClockType";

$tdatademo_log[".printFields"] = array();
$tdatademo_log[".printFields"][] = "TransID";
$tdatademo_log[".printFields"][] = "EmployeeID";
$tdatademo_log[".printFields"][] = "log_time";
$tdatademo_log[".printFields"][] = "ClockType";
$tdatademo_log[".printFields"][] = "data";
$tdatademo_log[".printFields"][] = "MLogID";
$tdatademo_log[".printFields"][] = "MLogDate";


//	log_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "log_time";
	$fdata["GoodName"] = "log_time";
	$fdata["ownerTable"] = "demo_log";
	$fdata["Label"] = GetFieldLabel("demo_log","log_time");
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

		$fdata["strField"] = "log_time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "log_time";

	
	
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

	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 11;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatademo_log["log_time"] = $fdata;
//	data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "data";
	$fdata["GoodName"] = "data";
	$fdata["ownerTable"] = "demo_log";
	$fdata["Label"] = GetFieldLabel("demo_log","data");
	$fdata["FieldType"] = 201;

	
	
	
			
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

		$fdata["strField"] = "data";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`data`";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_log["data"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "demo_log";
	$fdata["Label"] = GetFieldLabel("demo_log","EmployeeID");
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
		$edata["LCType"] = 1;

	
		
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




	$tdatademo_log["EmployeeID"] = $fdata;
//	user_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user_name";
	$fdata["GoodName"] = "user_name";
	$fdata["ownerTable"] = "demo_log";
	$fdata["Label"] = GetFieldLabel("demo_log","user_name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

	
	
	
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








	$tdatademo_log["user_name"] = $fdata;
//	TransID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TransID";
	$fdata["GoodName"] = "TransID";
	$fdata["ownerTable"] = "demo_log";
	$fdata["Label"] = GetFieldLabel("demo_log","TransID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TransID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TransID";

	
	
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




	$tdatademo_log["TransID"] = $fdata;
//	MLogID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "MLogID";
	$fdata["GoodName"] = "MLogID";
	$fdata["ownerTable"] = "demo_log";
	$fdata["Label"] = GetFieldLabel("demo_log","MLogID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MLogID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MLogID";

	
	
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
	$edata["LookupTable"] = "logins";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "LogID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "FullName";
	
	

	
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
							
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatademo_log["MLogID"] = $fdata;
//	MLogDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "MLogDate";
	$fdata["GoodName"] = "MLogDate";
	$fdata["ownerTable"] = "demo_log";
	$fdata["Label"] = GetFieldLabel("demo_log","MLogDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MLogDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MLogDate";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatademo_log["MLogDate"] = $fdata;
//	ClockType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ClockType";
	$fdata["GoodName"] = "ClockType";
	$fdata["ownerTable"] = "demo_log";
	$fdata["Label"] = GetFieldLabel("demo_log","ClockType");
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

		$fdata["strField"] = "ClockType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ClockType";

	
	
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
	$edata["LookupTable"] = "clocktypes";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CtID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ClockType";
	
	

	
	$edata["LookupOrderBy"] = "CtID";

	
	
		$edata["AllowToAdd"] = true;

	

	
	
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




	$tdatademo_log["ClockType"] = $fdata;


$tables_data["demo_log"]=&$tdatademo_log;
$field_labels["demo_log"] = &$fieldLabelsdemo_log;
$fieldToolTips["demo_log"] = &$fieldToolTipsdemo_log;
$placeHolders["demo_log"] = &$placeHoldersdemo_log;
$page_titles["demo_log"] = &$pageTitlesdemo_log;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["demo_log"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["demo_log"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_demo_log()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "log_time,  `data`,  EmployeeID,  user_name,  TransID,  MLogID,  MLogDate,  ClockType";
$proto0["m_strFrom"] = "FROM demo_log";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY TransID DESC";
	
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
	"m_strName" => "log_time",
	"m_strTable" => "demo_log",
	"m_srcTableName" => "demo_log"
));

$proto6["m_sql"] = "log_time";
$proto6["m_srcTableName"] = "demo_log";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "data",
	"m_strTable" => "demo_log",
	"m_srcTableName" => "demo_log"
));

$proto8["m_sql"] = "`data`";
$proto8["m_srcTableName"] = "demo_log";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "demo_log",
	"m_srcTableName" => "demo_log"
));

$proto10["m_sql"] = "EmployeeID";
$proto10["m_srcTableName"] = "demo_log";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "demo_log",
	"m_srcTableName" => "demo_log"
));

$proto12["m_sql"] = "user_name";
$proto12["m_srcTableName"] = "demo_log";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TransID",
	"m_strTable" => "demo_log",
	"m_srcTableName" => "demo_log"
));

$proto14["m_sql"] = "TransID";
$proto14["m_srcTableName"] = "demo_log";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "MLogID",
	"m_strTable" => "demo_log",
	"m_srcTableName" => "demo_log"
));

$proto16["m_sql"] = "MLogID";
$proto16["m_srcTableName"] = "demo_log";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "MLogDate",
	"m_strTable" => "demo_log",
	"m_srcTableName" => "demo_log"
));

$proto18["m_sql"] = "MLogDate";
$proto18["m_srcTableName"] = "demo_log";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ClockType",
	"m_strTable" => "demo_log",
	"m_srcTableName" => "demo_log"
));

$proto20["m_sql"] = "ClockType";
$proto20["m_srcTableName"] = "demo_log";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "demo_log";
$proto23["m_srcTableName"] = "demo_log";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "log_time";
$proto23["m_columns"][] = "user_name";
$proto23["m_columns"][] = "data";
$proto23["m_columns"][] = "EmployeeID";
$proto23["m_columns"][] = "TransID";
$proto23["m_columns"][] = "MLogID";
$proto23["m_columns"][] = "MLogDate";
$proto23["m_columns"][] = "ClockType";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "demo_log";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "demo_log";
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
	"m_strName" => "TransID",
	"m_strTable" => "demo_log",
	"m_srcTableName" => "demo_log"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 0;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="demo_log";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_demo_log = createSqlQuery_demo_log();


	
		;

								

$tdatademo_log[".sqlquery"] = $queryData_demo_log;

include_once(getabspath("include/demo_log_events.php"));
$tableEvents["demo_log"] = new eventclass_demo_log;
$tdatademo_log[".hasEvents"] = true;

?>