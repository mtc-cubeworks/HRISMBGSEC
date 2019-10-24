<?php
require_once(getabspath("classes/cipherer.php"));




$tdatashifts = array();
	$tdatashifts[".truncateText"] = true;
	$tdatashifts[".NumberOfChars"] = 80;
	$tdatashifts[".ShortName"] = "shifts";
	$tdatashifts[".OwnerID"] = "";
	$tdatashifts[".OriginalTable"] = "shifts";

//	field labels
$fieldLabelsshifts = array();
$fieldToolTipsshifts = array();
$pageTitlesshifts = array();
$placeHoldersshifts = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsshifts["English"] = array();
	$fieldToolTipsshifts["English"] = array();
	$placeHoldersshifts["English"] = array();
	$pageTitlesshifts["English"] = array();
	$fieldLabelsshifts["English"]["shID"] = "Sh ID";
	$fieldToolTipsshifts["English"]["shID"] = "";
	$placeHoldersshifts["English"]["shID"] = "";
	$fieldLabelsshifts["English"]["Shift"] = "Shift";
	$fieldToolTipsshifts["English"]["Shift"] = "";
	$placeHoldersshifts["English"]["Shift"] = "";
	$fieldLabelsshifts["English"]["TimeIn"] = "Time In";
	$fieldToolTipsshifts["English"]["TimeIn"] = "";
	$placeHoldersshifts["English"]["TimeIn"] = "";
	$fieldLabelsshifts["English"]["TimeOut"] = "Time Out";
	$fieldToolTipsshifts["English"]["TimeOut"] = "";
	$placeHoldersshifts["English"]["TimeOut"] = "";
	$fieldLabelsshifts["English"]["BreakMins"] = "Break Mins";
	$fieldToolTipsshifts["English"]["BreakMins"] = "";
	$placeHoldersshifts["English"]["BreakMins"] = "";
	$fieldLabelsshifts["English"]["MinsPerDay"] = "Mins Per Day";
	$fieldToolTipsshifts["English"]["MinsPerDay"] = "";
	$placeHoldersshifts["English"]["MinsPerDay"] = "";
	$fieldLabelsshifts["English"]["LunchBreakTimeFrom"] = "Lunch Break Time From";
	$fieldToolTipsshifts["English"]["LunchBreakTimeFrom"] = "";
	$placeHoldersshifts["English"]["LunchBreakTimeFrom"] = "";
	$fieldLabelsshifts["English"]["LunchBreakTimeTo"] = "Lunch Break Time To";
	$fieldToolTipsshifts["English"]["LunchBreakTimeTo"] = "";
	$placeHoldersshifts["English"]["LunchBreakTimeTo"] = "";
	$fieldLabelsshifts["English"]["FirstHalfMins"] = "First Half Mins";
	$fieldToolTipsshifts["English"]["FirstHalfMins"] = "";
	$placeHoldersshifts["English"]["FirstHalfMins"] = "";
	$fieldLabelsshifts["English"]["SecondHalfMins"] = "Second Half Mins";
	$fieldToolTipsshifts["English"]["SecondHalfMins"] = "";
	$placeHoldersshifts["English"]["SecondHalfMins"] = "";
	$fieldLabelsshifts["English"]["ReqLogOutInOnBreak"] = "Req'd Break Log";
	$fieldToolTipsshifts["English"]["ReqLogOutInOnBreak"] = "";
	$placeHoldersshifts["English"]["ReqLogOutInOnBreak"] = "";
	$fieldLabelsshifts["English"]["SchedType"] = "Sched Type";
	$fieldToolTipsshifts["English"]["SchedType"] = "";
	$placeHoldersshifts["English"]["SchedType"] = "";
	$fieldLabelsshifts["English"]["PreLogMins"] = "PreLog Mins";
	$fieldToolTipsshifts["English"]["PreLogMins"] = "";
	$placeHoldersshifts["English"]["PreLogMins"] = "";
	if (count($fieldToolTipsshifts["English"]))
		$tdatashifts[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsshifts[""] = array();
	$fieldToolTipsshifts[""] = array();
	$placeHoldersshifts[""] = array();
	$pageTitlesshifts[""] = array();
	$fieldLabelsshifts[""]["PreLogMins"] = "Pre Log Mins";
	$fieldToolTipsshifts[""]["PreLogMins"] = "";
	$placeHoldersshifts[""]["PreLogMins"] = "";
	if (count($fieldToolTipsshifts[""]))
		$tdatashifts[".isUseToolTips"] = true;
}


	$tdatashifts[".NCSearch"] = true;



$tdatashifts[".shortTableName"] = "shifts";
$tdatashifts[".nSecOptions"] = 0;
$tdatashifts[".recsPerRowPrint"] = 1;
$tdatashifts[".mainTableOwnerID"] = "";
$tdatashifts[".moveNext"] = 1;
$tdatashifts[".entityType"] = 0;

$tdatashifts[".strOriginalTableName"] = "shifts";

	



$tdatashifts[".showAddInPopup"] = false;

$tdatashifts[".showEditInPopup"] = false;

$tdatashifts[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatashifts[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatashifts[".fieldsForRegister"] = array();

$tdatashifts[".listAjax"] = false;

	$tdatashifts[".audit"] = false;

	$tdatashifts[".locking"] = false;

$tdatashifts[".edit"] = true;
$tdatashifts[".afterEditAction"] = 1;
$tdatashifts[".closePopupAfterEdit"] = 1;
$tdatashifts[".afterEditActionDetTable"] = "";

$tdatashifts[".add"] = true;
$tdatashifts[".afterAddAction"] = 1;
$tdatashifts[".closePopupAfterAdd"] = 1;
$tdatashifts[".afterAddActionDetTable"] = "";

$tdatashifts[".list"] = true;

$tdatashifts[".inlineEdit"] = true;

$tdatashifts[".updateSelected"] = true;

$tdatashifts[".reorderRecordsByHeader"] = true;


$tdatashifts[".exportFormatting"] = 2;
$tdatashifts[".exportDelimiter"] = ",";
		
$tdatashifts[".inlineAdd"] = true;
$tdatashifts[".copy"] = true;
$tdatashifts[".view"] = true;

$tdatashifts[".import"] = true;

$tdatashifts[".exportTo"] = true;

$tdatashifts[".printFriendly"] = true;

$tdatashifts[".delete"] = true;

$tdatashifts[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatashifts[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatashifts[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatashifts[".searchSaving"] = false;
//

$tdatashifts[".showSearchPanel"] = true;
		$tdatashifts[".flexibleSearch"] = true;

$tdatashifts[".isUseAjaxSuggest"] = true;

$tdatashifts[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																											

$tdatashifts[".ajaxCodeSnippetAdded"] = false;

$tdatashifts[".buttonsAdded"] = false;

$tdatashifts[".addPageEvents"] = true;

// use timepicker for search panel
$tdatashifts[".isUseTimeForSearch"] = true;





$tdatashifts[".allSearchFields"] = array();
$tdatashifts[".filterFields"] = array();
$tdatashifts[".requiredSearchFields"] = array();

$tdatashifts[".allSearchFields"][] = "shID";
	$tdatashifts[".allSearchFields"][] = "Shift";
	$tdatashifts[".allSearchFields"][] = "SchedType";
	$tdatashifts[".allSearchFields"][] = "PreLogMins";
	$tdatashifts[".allSearchFields"][] = "TimeIn";
	$tdatashifts[".allSearchFields"][] = "TimeOut";
	$tdatashifts[".allSearchFields"][] = "LunchBreakTimeFrom";
	$tdatashifts[".allSearchFields"][] = "LunchBreakTimeTo";
	$tdatashifts[".allSearchFields"][] = "ReqLogOutInOnBreak";
	$tdatashifts[".allSearchFields"][] = "FirstHalfMins";
	$tdatashifts[".allSearchFields"][] = "BreakMins";
	$tdatashifts[".allSearchFields"][] = "SecondHalfMins";
	$tdatashifts[".allSearchFields"][] = "MinsPerDay";
	

$tdatashifts[".googleLikeFields"] = array();
$tdatashifts[".googleLikeFields"][] = "shID";
$tdatashifts[".googleLikeFields"][] = "Shift";
$tdatashifts[".googleLikeFields"][] = "TimeIn";
$tdatashifts[".googleLikeFields"][] = "TimeOut";
$tdatashifts[".googleLikeFields"][] = "BreakMins";
$tdatashifts[".googleLikeFields"][] = "MinsPerDay";
$tdatashifts[".googleLikeFields"][] = "LunchBreakTimeFrom";
$tdatashifts[".googleLikeFields"][] = "LunchBreakTimeTo";
$tdatashifts[".googleLikeFields"][] = "FirstHalfMins";
$tdatashifts[".googleLikeFields"][] = "SecondHalfMins";
$tdatashifts[".googleLikeFields"][] = "ReqLogOutInOnBreak";
$tdatashifts[".googleLikeFields"][] = "SchedType";
$tdatashifts[".googleLikeFields"][] = "PreLogMins";


$tdatashifts[".advSearchFields"] = array();
$tdatashifts[".advSearchFields"][] = "shID";
$tdatashifts[".advSearchFields"][] = "Shift";
$tdatashifts[".advSearchFields"][] = "SchedType";
$tdatashifts[".advSearchFields"][] = "PreLogMins";
$tdatashifts[".advSearchFields"][] = "TimeIn";
$tdatashifts[".advSearchFields"][] = "TimeOut";
$tdatashifts[".advSearchFields"][] = "LunchBreakTimeFrom";
$tdatashifts[".advSearchFields"][] = "LunchBreakTimeTo";
$tdatashifts[".advSearchFields"][] = "ReqLogOutInOnBreak";
$tdatashifts[".advSearchFields"][] = "FirstHalfMins";
$tdatashifts[".advSearchFields"][] = "BreakMins";
$tdatashifts[".advSearchFields"][] = "SecondHalfMins";
$tdatashifts[".advSearchFields"][] = "MinsPerDay";

$tdatashifts[".tableType"] = "list";

$tdatashifts[".printerPageOrientation"] = 0;
$tdatashifts[".nPrinterPageScale"] = 100;

$tdatashifts[".nPrinterSplitRecords"] = 40;

$tdatashifts[".nPrinterPDFSplitRecords"] = 40;



$tdatashifts[".geocodingEnabled"] = false;





$tdatashifts[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatashifts[".pageSize"] = 20;

$tdatashifts[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatashifts[".strOrderBy"] = $tstrOrderBy;

$tdatashifts[".orderindexes"] = array();

$tdatashifts[".sqlHead"] = "SELECT shID,  Shift,  TimeIn,  TimeOut,  BreakMins,  MinsPerDay,  LunchBreakTimeFrom,  LunchBreakTimeTo,  FirstHalfMins,  SecondHalfMins,  ReqLogOutInOnBreak,  SchedType,  PreLogMins";
$tdatashifts[".sqlFrom"] = "FROM shifts";
$tdatashifts[".sqlWhereExpr"] = "";
$tdatashifts[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatashifts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatashifts[".arrGroupsPerPage"] = $arrGPP;

$tdatashifts[".highlightSearchResults"] = true;

$tableKeysshifts = array();
$tableKeysshifts[] = "shID";
$tdatashifts[".Keys"] = $tableKeysshifts;

$tdatashifts[".listFields"] = array();
$tdatashifts[".listFields"][] = "shID";
$tdatashifts[".listFields"][] = "Shift";
$tdatashifts[".listFields"][] = "SchedType";
$tdatashifts[".listFields"][] = "PreLogMins";
$tdatashifts[".listFields"][] = "TimeIn";
$tdatashifts[".listFields"][] = "TimeOut";
$tdatashifts[".listFields"][] = "LunchBreakTimeFrom";
$tdatashifts[".listFields"][] = "LunchBreakTimeTo";
$tdatashifts[".listFields"][] = "ReqLogOutInOnBreak";
$tdatashifts[".listFields"][] = "FirstHalfMins";
$tdatashifts[".listFields"][] = "BreakMins";
$tdatashifts[".listFields"][] = "SecondHalfMins";
$tdatashifts[".listFields"][] = "MinsPerDay";

$tdatashifts[".hideMobileList"] = array();


$tdatashifts[".viewFields"] = array();
$tdatashifts[".viewFields"][] = "shID";
$tdatashifts[".viewFields"][] = "Shift";
$tdatashifts[".viewFields"][] = "SchedType";
$tdatashifts[".viewFields"][] = "PreLogMins";
$tdatashifts[".viewFields"][] = "TimeIn";
$tdatashifts[".viewFields"][] = "TimeOut";
$tdatashifts[".viewFields"][] = "LunchBreakTimeFrom";
$tdatashifts[".viewFields"][] = "LunchBreakTimeTo";
$tdatashifts[".viewFields"][] = "ReqLogOutInOnBreak";
$tdatashifts[".viewFields"][] = "FirstHalfMins";
$tdatashifts[".viewFields"][] = "BreakMins";
$tdatashifts[".viewFields"][] = "SecondHalfMins";
$tdatashifts[".viewFields"][] = "MinsPerDay";

$tdatashifts[".addFields"] = array();
$tdatashifts[".addFields"][] = "Shift";
$tdatashifts[".addFields"][] = "SchedType";
$tdatashifts[".addFields"][] = "PreLogMins";
$tdatashifts[".addFields"][] = "TimeIn";
$tdatashifts[".addFields"][] = "TimeOut";
$tdatashifts[".addFields"][] = "LunchBreakTimeFrom";
$tdatashifts[".addFields"][] = "LunchBreakTimeTo";
$tdatashifts[".addFields"][] = "ReqLogOutInOnBreak";
$tdatashifts[".addFields"][] = "FirstHalfMins";
$tdatashifts[".addFields"][] = "BreakMins";
$tdatashifts[".addFields"][] = "SecondHalfMins";
$tdatashifts[".addFields"][] = "MinsPerDay";

$tdatashifts[".masterListFields"] = array();
$tdatashifts[".masterListFields"][] = "shID";
$tdatashifts[".masterListFields"][] = "Shift";
$tdatashifts[".masterListFields"][] = "SchedType";
$tdatashifts[".masterListFields"][] = "PreLogMins";
$tdatashifts[".masterListFields"][] = "TimeIn";
$tdatashifts[".masterListFields"][] = "TimeOut";
$tdatashifts[".masterListFields"][] = "LunchBreakTimeFrom";
$tdatashifts[".masterListFields"][] = "LunchBreakTimeTo";
$tdatashifts[".masterListFields"][] = "ReqLogOutInOnBreak";
$tdatashifts[".masterListFields"][] = "FirstHalfMins";
$tdatashifts[".masterListFields"][] = "BreakMins";
$tdatashifts[".masterListFields"][] = "SecondHalfMins";
$tdatashifts[".masterListFields"][] = "MinsPerDay";

$tdatashifts[".inlineAddFields"] = array();
$tdatashifts[".inlineAddFields"][] = "Shift";
$tdatashifts[".inlineAddFields"][] = "SchedType";
$tdatashifts[".inlineAddFields"][] = "PreLogMins";
$tdatashifts[".inlineAddFields"][] = "TimeIn";
$tdatashifts[".inlineAddFields"][] = "TimeOut";
$tdatashifts[".inlineAddFields"][] = "LunchBreakTimeFrom";
$tdatashifts[".inlineAddFields"][] = "LunchBreakTimeTo";
$tdatashifts[".inlineAddFields"][] = "ReqLogOutInOnBreak";
$tdatashifts[".inlineAddFields"][] = "FirstHalfMins";
$tdatashifts[".inlineAddFields"][] = "BreakMins";
$tdatashifts[".inlineAddFields"][] = "SecondHalfMins";
$tdatashifts[".inlineAddFields"][] = "MinsPerDay";

$tdatashifts[".editFields"] = array();
$tdatashifts[".editFields"][] = "Shift";
$tdatashifts[".editFields"][] = "SchedType";
$tdatashifts[".editFields"][] = "PreLogMins";
$tdatashifts[".editFields"][] = "TimeIn";
$tdatashifts[".editFields"][] = "TimeOut";
$tdatashifts[".editFields"][] = "LunchBreakTimeFrom";
$tdatashifts[".editFields"][] = "LunchBreakTimeTo";
$tdatashifts[".editFields"][] = "ReqLogOutInOnBreak";
$tdatashifts[".editFields"][] = "FirstHalfMins";
$tdatashifts[".editFields"][] = "BreakMins";
$tdatashifts[".editFields"][] = "SecondHalfMins";
$tdatashifts[".editFields"][] = "MinsPerDay";

$tdatashifts[".inlineEditFields"] = array();
$tdatashifts[".inlineEditFields"][] = "Shift";
$tdatashifts[".inlineEditFields"][] = "SchedType";
$tdatashifts[".inlineEditFields"][] = "PreLogMins";
$tdatashifts[".inlineEditFields"][] = "TimeIn";
$tdatashifts[".inlineEditFields"][] = "TimeOut";
$tdatashifts[".inlineEditFields"][] = "LunchBreakTimeFrom";
$tdatashifts[".inlineEditFields"][] = "LunchBreakTimeTo";
$tdatashifts[".inlineEditFields"][] = "ReqLogOutInOnBreak";
$tdatashifts[".inlineEditFields"][] = "FirstHalfMins";
$tdatashifts[".inlineEditFields"][] = "BreakMins";
$tdatashifts[".inlineEditFields"][] = "SecondHalfMins";
$tdatashifts[".inlineEditFields"][] = "MinsPerDay";

$tdatashifts[".updateSelectedFields"] = array();
$tdatashifts[".updateSelectedFields"][] = "Shift";
$tdatashifts[".updateSelectedFields"][] = "TimeIn";
$tdatashifts[".updateSelectedFields"][] = "TimeOut";
$tdatashifts[".updateSelectedFields"][] = "LunchBreakTimeFrom";
$tdatashifts[".updateSelectedFields"][] = "LunchBreakTimeTo";
$tdatashifts[".updateSelectedFields"][] = "FirstHalfMins";
$tdatashifts[".updateSelectedFields"][] = "BreakMins";
$tdatashifts[".updateSelectedFields"][] = "SecondHalfMins";
$tdatashifts[".updateSelectedFields"][] = "MinsPerDay";


$tdatashifts[".exportFields"] = array();
$tdatashifts[".exportFields"][] = "shID";
$tdatashifts[".exportFields"][] = "Shift";
$tdatashifts[".exportFields"][] = "SchedType";
$tdatashifts[".exportFields"][] = "PreLogMins";
$tdatashifts[".exportFields"][] = "TimeIn";
$tdatashifts[".exportFields"][] = "TimeOut";
$tdatashifts[".exportFields"][] = "LunchBreakTimeFrom";
$tdatashifts[".exportFields"][] = "LunchBreakTimeTo";
$tdatashifts[".exportFields"][] = "ReqLogOutInOnBreak";
$tdatashifts[".exportFields"][] = "FirstHalfMins";
$tdatashifts[".exportFields"][] = "BreakMins";
$tdatashifts[".exportFields"][] = "SecondHalfMins";
$tdatashifts[".exportFields"][] = "MinsPerDay";

$tdatashifts[".importFields"] = array();
$tdatashifts[".importFields"][] = "shID";
$tdatashifts[".importFields"][] = "Shift";
$tdatashifts[".importFields"][] = "TimeIn";
$tdatashifts[".importFields"][] = "TimeOut";
$tdatashifts[".importFields"][] = "BreakMins";
$tdatashifts[".importFields"][] = "MinsPerDay";
$tdatashifts[".importFields"][] = "LunchBreakTimeFrom";
$tdatashifts[".importFields"][] = "LunchBreakTimeTo";
$tdatashifts[".importFields"][] = "FirstHalfMins";
$tdatashifts[".importFields"][] = "SecondHalfMins";
$tdatashifts[".importFields"][] = "ReqLogOutInOnBreak";
$tdatashifts[".importFields"][] = "SchedType";
$tdatashifts[".importFields"][] = "PreLogMins";

$tdatashifts[".printFields"] = array();
$tdatashifts[".printFields"][] = "shID";
$tdatashifts[".printFields"][] = "Shift";
$tdatashifts[".printFields"][] = "SchedType";
$tdatashifts[".printFields"][] = "PreLogMins";
$tdatashifts[".printFields"][] = "TimeIn";
$tdatashifts[".printFields"][] = "TimeOut";
$tdatashifts[".printFields"][] = "LunchBreakTimeFrom";
$tdatashifts[".printFields"][] = "LunchBreakTimeTo";
$tdatashifts[".printFields"][] = "ReqLogOutInOnBreak";
$tdatashifts[".printFields"][] = "FirstHalfMins";
$tdatashifts[".printFields"][] = "BreakMins";
$tdatashifts[".printFields"][] = "SecondHalfMins";
$tdatashifts[".printFields"][] = "MinsPerDay";


//	shID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "shID";
	$fdata["GoodName"] = "shID";
	$fdata["ownerTable"] = "shifts";
	$fdata["Label"] = GetFieldLabel("shifts","shID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shID";

	
	
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




	$tdatashifts["shID"] = $fdata;
//	Shift
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Shift";
	$fdata["GoodName"] = "Shift";
	$fdata["ownerTable"] = "shifts";
	$fdata["Label"] = GetFieldLabel("shifts","Shift");
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

		$fdata["strField"] = "Shift";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Shift";

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 62;

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatashifts["Shift"] = $fdata;
//	TimeIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TimeIn";
	$fdata["GoodName"] = "TimeIn";
	$fdata["ownerTable"] = "shifts";
	$fdata["Label"] = GetFieldLabel("shifts","TimeIn");
	$fdata["FieldType"] = 134;

	
	
	
			
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

		$fdata["strField"] = "TimeIn";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TimeIn";

	
	
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

	$edata = array("EditFormat" => "Time");

		$edata["ShowTime"] = true;

	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 122;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
	//	End validation

	
			
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatashifts["TimeIn"] = $fdata;
//	TimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TimeOut";
	$fdata["GoodName"] = "TimeOut";
	$fdata["ownerTable"] = "shifts";
	$fdata["Label"] = GetFieldLabel("shifts","TimeOut");
	$fdata["FieldType"] = 134;

	
	
	
			
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

		$fdata["strField"] = "TimeOut";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TimeOut";

	
	
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

	$edata = array("EditFormat" => "Time");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 122;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
	//	End validation

	
			
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatashifts["TimeOut"] = $fdata;
//	BreakMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "BreakMins";
	$fdata["GoodName"] = "BreakMins";
	$fdata["ownerTable"] = "shifts";
	$fdata["Label"] = GetFieldLabel("shifts","BreakMins");
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

		$fdata["strField"] = "BreakMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BreakMins";

	
	
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
		
		$edata["controlWidth"] = 72;

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




	$tdatashifts["BreakMins"] = $fdata;
//	MinsPerDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "MinsPerDay";
	$fdata["GoodName"] = "MinsPerDay";
	$fdata["ownerTable"] = "shifts";
	$fdata["Label"] = GetFieldLabel("shifts","MinsPerDay");
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

		$fdata["strField"] = "MinsPerDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MinsPerDay";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 72;

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




	$tdatashifts["MinsPerDay"] = $fdata;
//	LunchBreakTimeFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "LunchBreakTimeFrom";
	$fdata["GoodName"] = "LunchBreakTimeFrom";
	$fdata["ownerTable"] = "shifts";
	$fdata["Label"] = GetFieldLabel("shifts","LunchBreakTimeFrom");
	$fdata["FieldType"] = 134;

	
	
	
			
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

		$fdata["strField"] = "LunchBreakTimeFrom";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LunchBreakTimeFrom";

	
	
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

	$edata = array("EditFormat" => "Time");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 122;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
	//	End validation

	
			
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 1);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatashifts["LunchBreakTimeFrom"] = $fdata;
//	LunchBreakTimeTo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "LunchBreakTimeTo";
	$fdata["GoodName"] = "LunchBreakTimeTo";
	$fdata["ownerTable"] = "shifts";
	$fdata["Label"] = GetFieldLabel("shifts","LunchBreakTimeTo");
	$fdata["FieldType"] = 134;

	
	
	
			
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

		$fdata["strField"] = "LunchBreakTimeTo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LunchBreakTimeTo";

	
	
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

	$edata = array("EditFormat" => "Time");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 122;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
	//	End validation

	
			
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 1);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatashifts["LunchBreakTimeTo"] = $fdata;
//	FirstHalfMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "FirstHalfMins";
	$fdata["GoodName"] = "FirstHalfMins";
	$fdata["ownerTable"] = "shifts";
	$fdata["Label"] = GetFieldLabel("shifts","FirstHalfMins");
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

		$fdata["strField"] = "FirstHalfMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FirstHalfMins";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 72;

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




	$tdatashifts["FirstHalfMins"] = $fdata;
//	SecondHalfMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "SecondHalfMins";
	$fdata["GoodName"] = "SecondHalfMins";
	$fdata["ownerTable"] = "shifts";
	$fdata["Label"] = GetFieldLabel("shifts","SecondHalfMins");
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

		$fdata["strField"] = "SecondHalfMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SecondHalfMins";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 72;

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




	$tdatashifts["SecondHalfMins"] = $fdata;
//	ReqLogOutInOnBreak
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ReqLogOutInOnBreak";
	$fdata["GoodName"] = "ReqLogOutInOnBreak";
	$fdata["ownerTable"] = "shifts";
	$fdata["Label"] = GetFieldLabel("shifts","ReqLogOutInOnBreak");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ReqLogOutInOnBreak";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ReqLogOutInOnBreak";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 122;

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




	$tdatashifts["ReqLogOutInOnBreak"] = $fdata;
//	SchedType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "SchedType";
	$fdata["GoodName"] = "SchedType";
	$fdata["ownerTable"] = "shifts";
	$fdata["Label"] = GetFieldLabel("shifts","SchedType");
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

		$fdata["strField"] = "SchedType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SchedType";

	
	
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
	$edata["LookupTable"] = "schedtype";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "stID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ScheduleType";
	
	

	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatashifts["SchedType"] = $fdata;
//	PreLogMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "PreLogMins";
	$fdata["GoodName"] = "PreLogMins";
	$fdata["ownerTable"] = "shifts";
	$fdata["Label"] = GetFieldLabel("shifts","PreLogMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PreLogMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PreLogMins";

	
	
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




	$tdatashifts["PreLogMins"] = $fdata;


$tables_data["shifts"]=&$tdatashifts;
$field_labels["shifts"] = &$fieldLabelsshifts;
$fieldToolTips["shifts"] = &$fieldToolTipsshifts;
$placeHolders["shifts"] = &$placeHoldersshifts;
$page_titles["shifts"] = &$pageTitlesshifts;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["shifts"] = array();
//	addbreaks
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="addbreaks";
		$detailsParam["dOriginalTable"] = "addbreaks";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "addbreaks";
	$detailsParam["dCaptionTable"] = GetTableCaption("addbreaks");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["shifts"][$dIndex] = $detailsParam;

	
		$detailsTablesData["shifts"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["shifts"][$dIndex]["masterKeys"][]="shID";

				$detailsTablesData["shifts"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["shifts"][$dIndex]["detailKeys"][]="shID";

// tables which are master tables for current table (detail)
$masterTablesData["shifts"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_shifts()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "shID,  Shift,  TimeIn,  TimeOut,  BreakMins,  MinsPerDay,  LunchBreakTimeFrom,  LunchBreakTimeTo,  FirstHalfMins,  SecondHalfMins,  ReqLogOutInOnBreak,  SchedType,  PreLogMins";
$proto0["m_strFrom"] = "FROM shifts";
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
	"m_strName" => "shID",
	"m_strTable" => "shifts",
	"m_srcTableName" => "shifts"
));

$proto6["m_sql"] = "shID";
$proto6["m_srcTableName"] = "shifts";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Shift",
	"m_strTable" => "shifts",
	"m_srcTableName" => "shifts"
));

$proto8["m_sql"] = "Shift";
$proto8["m_srcTableName"] = "shifts";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeIn",
	"m_strTable" => "shifts",
	"m_srcTableName" => "shifts"
));

$proto10["m_sql"] = "TimeIn";
$proto10["m_srcTableName"] = "shifts";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeOut",
	"m_strTable" => "shifts",
	"m_srcTableName" => "shifts"
));

$proto12["m_sql"] = "TimeOut";
$proto12["m_srcTableName"] = "shifts";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "BreakMins",
	"m_strTable" => "shifts",
	"m_srcTableName" => "shifts"
));

$proto14["m_sql"] = "BreakMins";
$proto14["m_srcTableName"] = "shifts";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "MinsPerDay",
	"m_strTable" => "shifts",
	"m_srcTableName" => "shifts"
));

$proto16["m_sql"] = "MinsPerDay";
$proto16["m_srcTableName"] = "shifts";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "LunchBreakTimeFrom",
	"m_strTable" => "shifts",
	"m_srcTableName" => "shifts"
));

$proto18["m_sql"] = "LunchBreakTimeFrom";
$proto18["m_srcTableName"] = "shifts";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "LunchBreakTimeTo",
	"m_strTable" => "shifts",
	"m_srcTableName" => "shifts"
));

$proto20["m_sql"] = "LunchBreakTimeTo";
$proto20["m_srcTableName"] = "shifts";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "FirstHalfMins",
	"m_strTable" => "shifts",
	"m_srcTableName" => "shifts"
));

$proto22["m_sql"] = "FirstHalfMins";
$proto22["m_srcTableName"] = "shifts";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "SecondHalfMins",
	"m_strTable" => "shifts",
	"m_srcTableName" => "shifts"
));

$proto24["m_sql"] = "SecondHalfMins";
$proto24["m_srcTableName"] = "shifts";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ReqLogOutInOnBreak",
	"m_strTable" => "shifts",
	"m_srcTableName" => "shifts"
));

$proto26["m_sql"] = "ReqLogOutInOnBreak";
$proto26["m_srcTableName"] = "shifts";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "SchedType",
	"m_strTable" => "shifts",
	"m_srcTableName" => "shifts"
));

$proto28["m_sql"] = "SchedType";
$proto28["m_srcTableName"] = "shifts";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "PreLogMins",
	"m_strTable" => "shifts",
	"m_srcTableName" => "shifts"
));

$proto30["m_sql"] = "PreLogMins";
$proto30["m_srcTableName"] = "shifts";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "shifts";
$proto33["m_srcTableName"] = "shifts";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "shID";
$proto33["m_columns"][] = "Shift";
$proto33["m_columns"][] = "TimeIn";
$proto33["m_columns"][] = "TimeOut";
$proto33["m_columns"][] = "BreakMins";
$proto33["m_columns"][] = "CrossMidnight";
$proto33["m_columns"][] = "RecordOnFirstDay";
$proto33["m_columns"][] = "RecordOnSecondDay";
$proto33["m_columns"][] = "MinsPerDay";
$proto33["m_columns"][] = "LunchBreakTimeFrom";
$proto33["m_columns"][] = "LunchBreakTimeTo";
$proto33["m_columns"][] = "ReqLogOutInOnBreak";
$proto33["m_columns"][] = "FirstHalfMins";
$proto33["m_columns"][] = "SecondHalfMins";
$proto33["m_columns"][] = "AutoApproveNDiff";
$proto33["m_columns"][] = "SchedType";
$proto33["m_columns"][] = "AutoApproveRD";
$proto33["m_columns"][] = "PreLogMins";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "shifts";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "shifts";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="shifts";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_shifts = createSqlQuery_shifts();


	
		;

													

$tdatashifts[".sqlquery"] = $queryData_shifts;

include_once(getabspath("include/shifts_events.php"));
$tableEvents["shifts"] = new eventclass_shifts;
$tdatashifts[".hasEvents"] = true;

?>