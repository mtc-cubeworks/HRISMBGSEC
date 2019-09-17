<?php
require_once(getabspath("classes/cipherer.php"));




$tdatademo_logemp = array();
	$tdatademo_logemp[".truncateText"] = true;
	$tdatademo_logemp[".NumberOfChars"] = 80;
	$tdatademo_logemp[".ShortName"] = "demo_logemp";
	$tdatademo_logemp[".OwnerID"] = "EmployeeID";
	$tdatademo_logemp[".OriginalTable"] = "demo_log";

//	field labels
$fieldLabelsdemo_logemp = array();
$fieldToolTipsdemo_logemp = array();
$pageTitlesdemo_logemp = array();
$placeHoldersdemo_logemp = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdemo_logemp["English"] = array();
	$fieldToolTipsdemo_logemp["English"] = array();
	$placeHoldersdemo_logemp["English"] = array();
	$pageTitlesdemo_logemp["English"] = array();
	$fieldLabelsdemo_logemp["English"]["log_time"] = "Log Time";
	$fieldToolTipsdemo_logemp["English"]["log_time"] = "";
	$placeHoldersdemo_logemp["English"]["log_time"] = "";
	$fieldLabelsdemo_logemp["English"]["data"] = "Data";
	$fieldToolTipsdemo_logemp["English"]["data"] = "";
	$placeHoldersdemo_logemp["English"]["data"] = "";
	$fieldLabelsdemo_logemp["English"]["EmployeeID"] = "Employee";
	$fieldToolTipsdemo_logemp["English"]["EmployeeID"] = "";
	$placeHoldersdemo_logemp["English"]["EmployeeID"] = "";
	$fieldLabelsdemo_logemp["English"]["user_name"] = "User Name";
	$fieldToolTipsdemo_logemp["English"]["user_name"] = "";
	$placeHoldersdemo_logemp["English"]["user_name"] = "";
	$fieldLabelsdemo_logemp["English"]["TransID"] = "Trans ID";
	$fieldToolTipsdemo_logemp["English"]["TransID"] = "";
	$placeHoldersdemo_logemp["English"]["TransID"] = "";
	$fieldLabelsdemo_logemp["English"]["MLogID"] = "MLog ID";
	$fieldToolTipsdemo_logemp["English"]["MLogID"] = "";
	$placeHoldersdemo_logemp["English"]["MLogID"] = "";
	$fieldLabelsdemo_logemp["English"]["MLogDate"] = "MLog Date";
	$fieldToolTipsdemo_logemp["English"]["MLogDate"] = "";
	$placeHoldersdemo_logemp["English"]["MLogDate"] = "";
	$fieldLabelsdemo_logemp["English"]["ClockType"] = "Clock Type";
	$fieldToolTipsdemo_logemp["English"]["ClockType"] = "";
	$placeHoldersdemo_logemp["English"]["ClockType"] = "";
	$fieldLabelsdemo_logemp["English"]["LogDate"] = "Log Date";
	$fieldToolTipsdemo_logemp["English"]["LogDate"] = "";
	$placeHoldersdemo_logemp["English"]["LogDate"] = "";
	if (count($fieldToolTipsdemo_logemp["English"]))
		$tdatademo_logemp[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdemo_logemp[""] = array();
	$fieldToolTipsdemo_logemp[""] = array();
	$placeHoldersdemo_logemp[""] = array();
	$pageTitlesdemo_logemp[""] = array();
	$fieldLabelsdemo_logemp[""]["LogDate"] = "Log Date";
	$fieldToolTipsdemo_logemp[""]["LogDate"] = "";
	$placeHoldersdemo_logemp[""]["LogDate"] = "";
	if (count($fieldToolTipsdemo_logemp[""]))
		$tdatademo_logemp[".isUseToolTips"] = true;
}


	$tdatademo_logemp[".NCSearch"] = true;



$tdatademo_logemp[".shortTableName"] = "demo_logemp";
$tdatademo_logemp[".nSecOptions"] = 1;
$tdatademo_logemp[".recsPerRowPrint"] = 1;
$tdatademo_logemp[".mainTableOwnerID"] = "EmployeeID";
$tdatademo_logemp[".moveNext"] = 1;
$tdatademo_logemp[".entityType"] = 1;

$tdatademo_logemp[".strOriginalTableName"] = "demo_log";

	



$tdatademo_logemp[".showAddInPopup"] = false;

$tdatademo_logemp[".showEditInPopup"] = false;

$tdatademo_logemp[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatademo_logemp[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatademo_logemp[".fieldsForRegister"] = array();

$tdatademo_logemp[".listAjax"] = false;

	$tdatademo_logemp[".audit"] = false;

	$tdatademo_logemp[".locking"] = false;



$tdatademo_logemp[".list"] = true;



$tdatademo_logemp[".reorderRecordsByHeader"] = true;


$tdatademo_logemp[".exportFormatting"] = 2;
$tdatademo_logemp[".exportDelimiter"] = ",";
		
$tdatademo_logemp[".view"] = true;


$tdatademo_logemp[".exportTo"] = true;

$tdatademo_logemp[".printFriendly"] = true;


$tdatademo_logemp[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatademo_logemp[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatademo_logemp[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatademo_logemp[".searchSaving"] = false;
//

$tdatademo_logemp[".showSearchPanel"] = true;
		$tdatademo_logemp[".flexibleSearch"] = true;

$tdatademo_logemp[".isUseAjaxSuggest"] = true;

$tdatademo_logemp[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																		

$tdatademo_logemp[".ajaxCodeSnippetAdded"] = false;

$tdatademo_logemp[".buttonsAdded"] = false;

$tdatademo_logemp[".addPageEvents"] = true;

// use timepicker for search panel
$tdatademo_logemp[".isUseTimeForSearch"] = false;



$tdatademo_logemp[".badgeColor"] = "D2AF80";


$tdatademo_logemp[".allSearchFields"] = array();
$tdatademo_logemp[".filterFields"] = array();
$tdatademo_logemp[".requiredSearchFields"] = array();

$tdatademo_logemp[".allSearchFields"][] = "LogDate";
		$tdatademo_logemp[".requiredSearchFields"][] = "LogDate";


$tdatademo_logemp[".googleLikeFields"] = array();
$tdatademo_logemp[".googleLikeFields"][] = "LogDate";

$tdatademo_logemp[".panelSearchFields"] = array();
$tdatademo_logemp[".searchPanelOptions"] = array();
$tdatademo_logemp[".panelSearchFields"][] = "LogDate";
	
$tdatademo_logemp[".advSearchFields"] = array();
$tdatademo_logemp[".advSearchFields"][] = "LogDate";

$tdatademo_logemp[".tableType"] = "list";

$tdatademo_logemp[".printerPageOrientation"] = 0;
$tdatademo_logemp[".nPrinterPageScale"] = 100;

$tdatademo_logemp[".nPrinterSplitRecords"] = 40;

$tdatademo_logemp[".nPrinterPDFSplitRecords"] = 40;



$tdatademo_logemp[".geocodingEnabled"] = false;





$tdatademo_logemp[".listGridLayout"] = 3;




$tdatademo_logemp[".noRecordsFirstPage"] = true;

// view page pdf

// print page pdf


$tdatademo_logemp[".pageSize"] = 20;

$tdatademo_logemp[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY TransID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatademo_logemp[".strOrderBy"] = $tstrOrderBy;

$tdatademo_logemp[".orderindexes"] = array();
	$tdatademo_logemp[".orderindexes"][] = array(6, (0 ? "ASC" : "DESC"), "TransID");


$tdatademo_logemp[".sqlHead"] = "SELECT log_time AS LogDate,  log_time,  `data`,  EmployeeID,  user_name,  TransID,  MLogID,  MLogDate,  ClockType";
$tdatademo_logemp[".sqlFrom"] = "FROM demo_log";
$tdatademo_logemp[".sqlWhereExpr"] = "";
$tdatademo_logemp[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatademo_logemp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatademo_logemp[".arrGroupsPerPage"] = $arrGPP;

$tdatademo_logemp[".highlightSearchResults"] = true;

$tableKeysdemo_logemp = array();
$tableKeysdemo_logemp[] = "TransID";
$tdatademo_logemp[".Keys"] = $tableKeysdemo_logemp;

$tdatademo_logemp[".listFields"] = array();
$tdatademo_logemp[".listFields"][] = "TransID";
$tdatademo_logemp[".listFields"][] = "EmployeeID";
$tdatademo_logemp[".listFields"][] = "LogDate";
$tdatademo_logemp[".listFields"][] = "log_time";
$tdatademo_logemp[".listFields"][] = "ClockType";
$tdatademo_logemp[".listFields"][] = "data";
$tdatademo_logemp[".listFields"][] = "MLogID";
$tdatademo_logemp[".listFields"][] = "MLogDate";

$tdatademo_logemp[".hideMobileList"] = array();


$tdatademo_logemp[".viewFields"] = array();
$tdatademo_logemp[".viewFields"][] = "TransID";
$tdatademo_logemp[".viewFields"][] = "EmployeeID";
$tdatademo_logemp[".viewFields"][] = "LogDate";
$tdatademo_logemp[".viewFields"][] = "log_time";
$tdatademo_logemp[".viewFields"][] = "user_name";
$tdatademo_logemp[".viewFields"][] = "ClockType";
$tdatademo_logemp[".viewFields"][] = "data";
$tdatademo_logemp[".viewFields"][] = "MLogID";
$tdatademo_logemp[".viewFields"][] = "MLogDate";

$tdatademo_logemp[".addFields"] = array();

$tdatademo_logemp[".masterListFields"] = array();
$tdatademo_logemp[".masterListFields"][] = "TransID";
$tdatademo_logemp[".masterListFields"][] = "EmployeeID";
$tdatademo_logemp[".masterListFields"][] = "LogDate";
$tdatademo_logemp[".masterListFields"][] = "log_time";
$tdatademo_logemp[".masterListFields"][] = "user_name";
$tdatademo_logemp[".masterListFields"][] = "ClockType";
$tdatademo_logemp[".masterListFields"][] = "data";
$tdatademo_logemp[".masterListFields"][] = "MLogID";
$tdatademo_logemp[".masterListFields"][] = "MLogDate";

$tdatademo_logemp[".inlineAddFields"] = array();

$tdatademo_logemp[".editFields"] = array();

$tdatademo_logemp[".inlineEditFields"] = array();

$tdatademo_logemp[".updateSelectedFields"] = array();


$tdatademo_logemp[".exportFields"] = array();
$tdatademo_logemp[".exportFields"][] = "TransID";
$tdatademo_logemp[".exportFields"][] = "EmployeeID";
$tdatademo_logemp[".exportFields"][] = "LogDate";
$tdatademo_logemp[".exportFields"][] = "log_time";
$tdatademo_logemp[".exportFields"][] = "ClockType";
$tdatademo_logemp[".exportFields"][] = "data";
$tdatademo_logemp[".exportFields"][] = "MLogID";
$tdatademo_logemp[".exportFields"][] = "MLogDate";

$tdatademo_logemp[".importFields"] = array();

$tdatademo_logemp[".printFields"] = array();
$tdatademo_logemp[".printFields"][] = "TransID";
$tdatademo_logemp[".printFields"][] = "EmployeeID";
$tdatademo_logemp[".printFields"][] = "LogDate";
$tdatademo_logemp[".printFields"][] = "log_time";
$tdatademo_logemp[".printFields"][] = "ClockType";
$tdatademo_logemp[".printFields"][] = "data";
$tdatademo_logemp[".printFields"][] = "MLogID";
$tdatademo_logemp[".printFields"][] = "MLogDate";


//	LogDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LogDate";
	$fdata["GoodName"] = "LogDate";
	$fdata["ownerTable"] = "demo_log";
	$fdata["Label"] = GetFieldLabel("demo_logemp","LogDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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
		$fdata["defaultSearchOption"] = "Between";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings




	$tdatademo_logemp["LogDate"] = $fdata;
//	log_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "log_time";
	$fdata["GoodName"] = "log_time";
	$fdata["ownerTable"] = "demo_log";
	$fdata["Label"] = GetFieldLabel("demo_logemp","log_time");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatademo_logemp["log_time"] = $fdata;
//	data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "data";
	$fdata["GoodName"] = "data";
	$fdata["ownerTable"] = "demo_log";
	$fdata["Label"] = GetFieldLabel("demo_logemp","data");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatademo_logemp["data"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "demo_log";
	$fdata["Label"] = GetFieldLabel("demo_logemp","EmployeeID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatademo_logemp["EmployeeID"] = $fdata;
//	user_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "user_name";
	$fdata["GoodName"] = "user_name";
	$fdata["ownerTable"] = "demo_log";
	$fdata["Label"] = GetFieldLabel("demo_logemp","user_name");
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








	$tdatademo_logemp["user_name"] = $fdata;
//	TransID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TransID";
	$fdata["GoodName"] = "TransID";
	$fdata["ownerTable"] = "demo_log";
	$fdata["Label"] = GetFieldLabel("demo_logemp","TransID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatademo_logemp["TransID"] = $fdata;
//	MLogID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "MLogID";
	$fdata["GoodName"] = "MLogID";
	$fdata["ownerTable"] = "demo_log";
	$fdata["Label"] = GetFieldLabel("demo_logemp","MLogID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatademo_logemp["MLogID"] = $fdata;
//	MLogDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "MLogDate";
	$fdata["GoodName"] = "MLogDate";
	$fdata["ownerTable"] = "demo_log";
	$fdata["Label"] = GetFieldLabel("demo_logemp","MLogDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatademo_logemp["MLogDate"] = $fdata;
//	ClockType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ClockType";
	$fdata["GoodName"] = "ClockType";
	$fdata["ownerTable"] = "demo_log";
	$fdata["Label"] = GetFieldLabel("demo_logemp","ClockType");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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
		$edata["autoCompleteFieldsOnEdit"] = 1;
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








	$tdatademo_logemp["ClockType"] = $fdata;


$tables_data["demo_logemp"]=&$tdatademo_logemp;
$field_labels["demo_logemp"] = &$fieldLabelsdemo_logemp;
$fieldToolTips["demo_logemp"] = &$fieldToolTipsdemo_logemp;
$placeHolders["demo_logemp"] = &$placeHoldersdemo_logemp;
$page_titles["demo_logemp"] = &$pageTitlesdemo_logemp;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["demo_logemp"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["demo_logemp"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_demo_logemp()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "log_time AS LogDate,  log_time,  `data`,  EmployeeID,  user_name,  TransID,  MLogID,  MLogDate,  ClockType";
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
	"m_srcTableName" => "demo_logemp"
));

$proto6["m_sql"] = "log_time";
$proto6["m_srcTableName"] = "demo_logemp";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "LogDate";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "log_time",
	"m_strTable" => "demo_log",
	"m_srcTableName" => "demo_logemp"
));

$proto8["m_sql"] = "log_time";
$proto8["m_srcTableName"] = "demo_logemp";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "data",
	"m_strTable" => "demo_log",
	"m_srcTableName" => "demo_logemp"
));

$proto10["m_sql"] = "`data`";
$proto10["m_srcTableName"] = "demo_logemp";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "demo_log",
	"m_srcTableName" => "demo_logemp"
));

$proto12["m_sql"] = "EmployeeID";
$proto12["m_srcTableName"] = "demo_logemp";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "demo_log",
	"m_srcTableName" => "demo_logemp"
));

$proto14["m_sql"] = "user_name";
$proto14["m_srcTableName"] = "demo_logemp";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TransID",
	"m_strTable" => "demo_log",
	"m_srcTableName" => "demo_logemp"
));

$proto16["m_sql"] = "TransID";
$proto16["m_srcTableName"] = "demo_logemp";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "MLogID",
	"m_strTable" => "demo_log",
	"m_srcTableName" => "demo_logemp"
));

$proto18["m_sql"] = "MLogID";
$proto18["m_srcTableName"] = "demo_logemp";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "MLogDate",
	"m_strTable" => "demo_log",
	"m_srcTableName" => "demo_logemp"
));

$proto20["m_sql"] = "MLogDate";
$proto20["m_srcTableName"] = "demo_logemp";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ClockType",
	"m_strTable" => "demo_log",
	"m_srcTableName" => "demo_logemp"
));

$proto22["m_sql"] = "ClockType";
$proto22["m_srcTableName"] = "demo_logemp";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "demo_log";
$proto25["m_srcTableName"] = "demo_logemp";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "log_time";
$proto25["m_columns"][] = "user_name";
$proto25["m_columns"][] = "data";
$proto25["m_columns"][] = "EmployeeID";
$proto25["m_columns"][] = "TransID";
$proto25["m_columns"][] = "MLogID";
$proto25["m_columns"][] = "MLogDate";
$proto25["m_columns"][] = "ClockType";
$proto25["m_columns"][] = "TransID2";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "demo_log";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "demo_logemp";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "TransID",
	"m_strTable" => "demo_log",
	"m_srcTableName" => "demo_logemp"
));

$proto28["m_column"]=$obj;
$proto28["m_bAsc"] = 0;
$proto28["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto28);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="demo_logemp";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_demo_logemp = createSqlQuery_demo_logemp();


	
		;

									

$tdatademo_logemp[".sqlquery"] = $queryData_demo_logemp;

include_once(getabspath("include/demo_logemp_events.php"));
$tableEvents["demo_logemp"] = new eventclass_demo_logemp;
$tdatademo_logemp[".hasEvents"] = true;

?>