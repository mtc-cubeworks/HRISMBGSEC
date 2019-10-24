<?php
require_once(getabspath("classes/cipherer.php"));




$tdataschedrange = array();
	$tdataschedrange[".truncateText"] = true;
	$tdataschedrange[".NumberOfChars"] = 80;
	$tdataschedrange[".ShortName"] = "schedrange";
	$tdataschedrange[".OwnerID"] = "";
	$tdataschedrange[".OriginalTable"] = "schedrange";

//	field labels
$fieldLabelsschedrange = array();
$fieldToolTipsschedrange = array();
$pageTitlesschedrange = array();
$placeHoldersschedrange = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsschedrange["English"] = array();
	$fieldToolTipsschedrange["English"] = array();
	$placeHoldersschedrange["English"] = array();
	$pageTitlesschedrange["English"] = array();
	$fieldLabelsschedrange["English"]["ScRID"] = "Sc RID";
	$fieldToolTipsschedrange["English"]["ScRID"] = "";
	$placeHoldersschedrange["English"]["ScRID"] = "";
	$fieldLabelsschedrange["English"]["FromDate"] = "From Date";
	$fieldToolTipsschedrange["English"]["FromDate"] = "";
	$placeHoldersschedrange["English"]["FromDate"] = "";
	$fieldLabelsschedrange["English"]["ToDate"] = "To Date";
	$fieldToolTipsschedrange["English"]["ToDate"] = "";
	$placeHoldersschedrange["English"]["ToDate"] = "";
	$fieldLabelsschedrange["English"]["TimeIn"] = "Time In";
	$fieldToolTipsschedrange["English"]["TimeIn"] = "";
	$placeHoldersschedrange["English"]["TimeIn"] = "";
	$fieldLabelsschedrange["English"]["TimeOut"] = "Time Out";
	$fieldToolTipsschedrange["English"]["TimeOut"] = "";
	$placeHoldersschedrange["English"]["TimeOut"] = "";
	$fieldLabelsschedrange["English"]["StrictTimeOut"] = "Strict Time Out";
	$fieldToolTipsschedrange["English"]["StrictTimeOut"] = "";
	$placeHoldersschedrange["English"]["StrictTimeOut"] = "";
	$fieldLabelsschedrange["English"]["StrictTimeIn"] = "Strict Time In";
	$fieldToolTipsschedrange["English"]["StrictTimeIn"] = "";
	$placeHoldersschedrange["English"]["StrictTimeIn"] = "";
	$fieldLabelsschedrange["English"]["SchedType"] = "Sched Type";
	$fieldToolTipsschedrange["English"]["SchedType"] = "";
	$placeHoldersschedrange["English"]["SchedType"] = "";
	$fieldLabelsschedrange["English"]["MinsPerDay"] = "Mins Per Day";
	$fieldToolTipsschedrange["English"]["MinsPerDay"] = "";
	$placeHoldersschedrange["English"]["MinsPerDay"] = "";
	$fieldLabelsschedrange["English"]["BreakMins"] = "Break Mins";
	$fieldToolTipsschedrange["English"]["BreakMins"] = "";
	$placeHoldersschedrange["English"]["BreakMins"] = "";
	$fieldLabelsschedrange["English"]["Shift"] = "Shift";
	$fieldToolTipsschedrange["English"]["Shift"] = "";
	$placeHoldersschedrange["English"]["Shift"] = "";
	$fieldLabelsschedrange["English"]["Posted"] = "Posted";
	$fieldToolTipsschedrange["English"]["Posted"] = "";
	$placeHoldersschedrange["English"]["Posted"] = "";
	$fieldLabelsschedrange["English"]["LunchBreakTimeFrom"] = "Break Out";
	$fieldToolTipsschedrange["English"]["LunchBreakTimeFrom"] = "";
	$placeHoldersschedrange["English"]["LunchBreakTimeFrom"] = "";
	$fieldLabelsschedrange["English"]["LunchBreakTimeTo"] = "Break In";
	$fieldToolTipsschedrange["English"]["LunchBreakTimeTo"] = "";
	$placeHoldersschedrange["English"]["LunchBreakTimeTo"] = "";
	$fieldLabelsschedrange["English"]["FirstHalfMins"] = "First Half Mins";
	$fieldToolTipsschedrange["English"]["FirstHalfMins"] = "";
	$placeHoldersschedrange["English"]["FirstHalfMins"] = "";
	$fieldLabelsschedrange["English"]["SecondHalfMins"] = "Second Half Mins";
	$fieldToolTipsschedrange["English"]["SecondHalfMins"] = "";
	$placeHoldersschedrange["English"]["SecondHalfMins"] = "";
	$fieldLabelsschedrange["English"]["RestDays"] = "Select Days";
	$fieldToolTipsschedrange["English"]["RestDays"] = "";
	$placeHoldersschedrange["English"]["RestDays"] = "";
	$fieldLabelsschedrange["English"]["SchedBy"] = "Sched By";
	$fieldToolTipsschedrange["English"]["SchedBy"] = "";
	$placeHoldersschedrange["English"]["SchedBy"] = "";
	$fieldLabelsschedrange["English"]["Employer"] = "Employer";
	$fieldToolTipsschedrange["English"]["Employer"] = "";
	$placeHoldersschedrange["English"]["Employer"] = "";
	$fieldLabelsschedrange["English"]["Division"] = "Division";
	$fieldToolTipsschedrange["English"]["Division"] = "";
	$placeHoldersschedrange["English"]["Division"] = "";
	$fieldLabelsschedrange["English"]["PreLogMins"] = "PreLog Mins";
	$fieldToolTipsschedrange["English"]["PreLogMins"] = "";
	$placeHoldersschedrange["English"]["PreLogMins"] = "";
	if (count($fieldToolTipsschedrange["English"]))
		$tdataschedrange[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsschedrange[""] = array();
	$fieldToolTipsschedrange[""] = array();
	$placeHoldersschedrange[""] = array();
	$pageTitlesschedrange[""] = array();
	if (count($fieldToolTipsschedrange[""]))
		$tdataschedrange[".isUseToolTips"] = true;
}


	$tdataschedrange[".NCSearch"] = true;



$tdataschedrange[".shortTableName"] = "schedrange";
$tdataschedrange[".nSecOptions"] = 0;
$tdataschedrange[".recsPerRowPrint"] = 1;
$tdataschedrange[".mainTableOwnerID"] = "";
$tdataschedrange[".moveNext"] = 1;
$tdataschedrange[".entityType"] = 0;

$tdataschedrange[".strOriginalTableName"] = "schedrange";

	



$tdataschedrange[".showAddInPopup"] = false;

$tdataschedrange[".showEditInPopup"] = false;

$tdataschedrange[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataschedrange[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataschedrange[".fieldsForRegister"] = array();

$tdataschedrange[".listAjax"] = false;

	$tdataschedrange[".audit"] = false;

	$tdataschedrange[".locking"] = false;

$tdataschedrange[".edit"] = true;
$tdataschedrange[".afterEditAction"] = 1;
$tdataschedrange[".closePopupAfterEdit"] = 1;
$tdataschedrange[".afterEditActionDetTable"] = "";

$tdataschedrange[".add"] = true;
$tdataschedrange[".afterAddAction"] = 1;
$tdataschedrange[".closePopupAfterAdd"] = 1;
$tdataschedrange[".afterAddActionDetTable"] = "";

$tdataschedrange[".list"] = true;

$tdataschedrange[".inlineEdit"] = true;

$tdataschedrange[".updateSelected"] = true;

$tdataschedrange[".reorderRecordsByHeader"] = true;


$tdataschedrange[".exportFormatting"] = 2;
$tdataschedrange[".exportDelimiter"] = ",";
		
$tdataschedrange[".inlineAdd"] = true;
$tdataschedrange[".copy"] = true;
$tdataschedrange[".view"] = true;

$tdataschedrange[".import"] = true;

$tdataschedrange[".exportTo"] = true;

$tdataschedrange[".printFriendly"] = true;

$tdataschedrange[".delete"] = true;

$tdataschedrange[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataschedrange[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataschedrange[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataschedrange[".searchSaving"] = false;
//

$tdataschedrange[".showSearchPanel"] = true;
		$tdataschedrange[".flexibleSearch"] = true;

$tdataschedrange[".isUseAjaxSuggest"] = true;

$tdataschedrange[".rowHighlite"] = true;



																																																																																																																																			
							
																																																																																																																																									

$tdataschedrange[".ajaxCodeSnippetAdded"] = false;

$tdataschedrange[".buttonsAdded"] = true;

$tdataschedrange[".addPageEvents"] = true;

// use timepicker for search panel
$tdataschedrange[".isUseTimeForSearch"] = true;




$tdataschedrange[".detailsLinksOnList"] = "1";

$tdataschedrange[".allSearchFields"] = array();
$tdataschedrange[".filterFields"] = array();
$tdataschedrange[".requiredSearchFields"] = array();

$tdataschedrange[".allSearchFields"][] = "ScRID";
	$tdataschedrange[".allSearchFields"][] = "Employer";
	$tdataschedrange[".allSearchFields"][] = "Division";
	$tdataschedrange[".allSearchFields"][] = "Shift";
	$tdataschedrange[".allSearchFields"][] = "FromDate";
	$tdataschedrange[".allSearchFields"][] = "ToDate";
	$tdataschedrange[".allSearchFields"][] = "SchedType";
	$tdataschedrange[".allSearchFields"][] = "SchedBy";
	$tdataschedrange[".allSearchFields"][] = "RestDays";
	$tdataschedrange[".allSearchFields"][] = "PreLogMins";
	$tdataschedrange[".allSearchFields"][] = "TimeIn";
	$tdataschedrange[".allSearchFields"][] = "TimeOut";
	$tdataschedrange[".allSearchFields"][] = "LunchBreakTimeFrom";
	$tdataschedrange[".allSearchFields"][] = "LunchBreakTimeTo";
	$tdataschedrange[".allSearchFields"][] = "MinsPerDay";
	$tdataschedrange[".allSearchFields"][] = "FirstHalfMins";
	$tdataschedrange[".allSearchFields"][] = "BreakMins";
	$tdataschedrange[".allSearchFields"][] = "SecondHalfMins";
	$tdataschedrange[".allSearchFields"][] = "Posted";
	

$tdataschedrange[".googleLikeFields"] = array();
$tdataschedrange[".googleLikeFields"][] = "ScRID";
$tdataschedrange[".googleLikeFields"][] = "FromDate";
$tdataschedrange[".googleLikeFields"][] = "ToDate";
$tdataschedrange[".googleLikeFields"][] = "TimeIn";
$tdataschedrange[".googleLikeFields"][] = "TimeOut";
$tdataschedrange[".googleLikeFields"][] = "StrictTimeOut";
$tdataschedrange[".googleLikeFields"][] = "StrictTimeIn";
$tdataschedrange[".googleLikeFields"][] = "SchedType";
$tdataschedrange[".googleLikeFields"][] = "MinsPerDay";
$tdataschedrange[".googleLikeFields"][] = "BreakMins";
$tdataschedrange[".googleLikeFields"][] = "Shift";
$tdataschedrange[".googleLikeFields"][] = "Posted";
$tdataschedrange[".googleLikeFields"][] = "LunchBreakTimeFrom";
$tdataschedrange[".googleLikeFields"][] = "LunchBreakTimeTo";
$tdataschedrange[".googleLikeFields"][] = "FirstHalfMins";
$tdataschedrange[".googleLikeFields"][] = "SecondHalfMins";
$tdataschedrange[".googleLikeFields"][] = "RestDays";
$tdataschedrange[".googleLikeFields"][] = "SchedBy";
$tdataschedrange[".googleLikeFields"][] = "Employer";
$tdataschedrange[".googleLikeFields"][] = "Division";
$tdataschedrange[".googleLikeFields"][] = "PreLogMins";


$tdataschedrange[".advSearchFields"] = array();
$tdataschedrange[".advSearchFields"][] = "ScRID";
$tdataschedrange[".advSearchFields"][] = "Employer";
$tdataschedrange[".advSearchFields"][] = "Division";
$tdataschedrange[".advSearchFields"][] = "Shift";
$tdataschedrange[".advSearchFields"][] = "FromDate";
$tdataschedrange[".advSearchFields"][] = "ToDate";
$tdataschedrange[".advSearchFields"][] = "SchedType";
$tdataschedrange[".advSearchFields"][] = "SchedBy";
$tdataschedrange[".advSearchFields"][] = "RestDays";
$tdataschedrange[".advSearchFields"][] = "PreLogMins";
$tdataschedrange[".advSearchFields"][] = "TimeIn";
$tdataschedrange[".advSearchFields"][] = "TimeOut";
$tdataschedrange[".advSearchFields"][] = "LunchBreakTimeFrom";
$tdataschedrange[".advSearchFields"][] = "LunchBreakTimeTo";
$tdataschedrange[".advSearchFields"][] = "MinsPerDay";
$tdataschedrange[".advSearchFields"][] = "FirstHalfMins";
$tdataschedrange[".advSearchFields"][] = "BreakMins";
$tdataschedrange[".advSearchFields"][] = "SecondHalfMins";
$tdataschedrange[".advSearchFields"][] = "Posted";

$tdataschedrange[".tableType"] = "list";

$tdataschedrange[".printerPageOrientation"] = 0;
$tdataschedrange[".nPrinterPageScale"] = 100;

$tdataschedrange[".nPrinterSplitRecords"] = 40;

$tdataschedrange[".nPrinterPDFSplitRecords"] = 40;



$tdataschedrange[".geocodingEnabled"] = false;





$tdataschedrange[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataschedrange[".pageSize"] = 20;

$tdataschedrange[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY ScRID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataschedrange[".strOrderBy"] = $tstrOrderBy;

$tdataschedrange[".orderindexes"] = array();
	$tdataschedrange[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "ScRID");


$tdataschedrange[".sqlHead"] = "SELECT ScRID,  FromDate,  ToDate,  TimeIn,  TimeOut,  StrictTimeOut,  StrictTimeIn,  SchedType,  MinsPerDay,  BreakMins,  Shift,  Posted,  LunchBreakTimeFrom,  LunchBreakTimeTo,  FirstHalfMins,  SecondHalfMins,  RestDays,  SchedBy,  Employer,  Division,  PreLogMins";
$tdataschedrange[".sqlFrom"] = "FROM schedrange";
$tdataschedrange[".sqlWhereExpr"] = "";
$tdataschedrange[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataschedrange[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataschedrange[".arrGroupsPerPage"] = $arrGPP;

$tdataschedrange[".highlightSearchResults"] = true;

$tableKeysschedrange = array();
$tableKeysschedrange[] = "ScRID";
$tdataschedrange[".Keys"] = $tableKeysschedrange;

$tdataschedrange[".listFields"] = array();
$tdataschedrange[".listFields"][] = "ScRID";
$tdataschedrange[".listFields"][] = "Employer";
$tdataschedrange[".listFields"][] = "Division";
$tdataschedrange[".listFields"][] = "Shift";
$tdataschedrange[".listFields"][] = "FromDate";
$tdataschedrange[".listFields"][] = "ToDate";
$tdataschedrange[".listFields"][] = "SchedType";
$tdataschedrange[".listFields"][] = "SchedBy";
$tdataschedrange[".listFields"][] = "RestDays";
$tdataschedrange[".listFields"][] = "PreLogMins";
$tdataschedrange[".listFields"][] = "TimeIn";
$tdataschedrange[".listFields"][] = "TimeOut";
$tdataschedrange[".listFields"][] = "LunchBreakTimeFrom";
$tdataschedrange[".listFields"][] = "LunchBreakTimeTo";
$tdataschedrange[".listFields"][] = "MinsPerDay";
$tdataschedrange[".listFields"][] = "FirstHalfMins";
$tdataschedrange[".listFields"][] = "BreakMins";
$tdataschedrange[".listFields"][] = "SecondHalfMins";
$tdataschedrange[".listFields"][] = "Posted";

$tdataschedrange[".hideMobileList"] = array();


$tdataschedrange[".viewFields"] = array();
$tdataschedrange[".viewFields"][] = "ScRID";
$tdataschedrange[".viewFields"][] = "Employer";
$tdataschedrange[".viewFields"][] = "Division";
$tdataschedrange[".viewFields"][] = "Shift";
$tdataschedrange[".viewFields"][] = "FromDate";
$tdataschedrange[".viewFields"][] = "ToDate";
$tdataschedrange[".viewFields"][] = "SchedType";
$tdataschedrange[".viewFields"][] = "SchedBy";
$tdataschedrange[".viewFields"][] = "RestDays";
$tdataschedrange[".viewFields"][] = "PreLogMins";
$tdataschedrange[".viewFields"][] = "TimeIn";
$tdataschedrange[".viewFields"][] = "TimeOut";
$tdataschedrange[".viewFields"][] = "LunchBreakTimeFrom";
$tdataschedrange[".viewFields"][] = "LunchBreakTimeTo";
$tdataschedrange[".viewFields"][] = "MinsPerDay";
$tdataschedrange[".viewFields"][] = "FirstHalfMins";
$tdataschedrange[".viewFields"][] = "BreakMins";
$tdataschedrange[".viewFields"][] = "SecondHalfMins";
$tdataschedrange[".viewFields"][] = "Posted";

$tdataschedrange[".addFields"] = array();
$tdataschedrange[".addFields"][] = "Employer";
$tdataschedrange[".addFields"][] = "Division";
$tdataschedrange[".addFields"][] = "Shift";
$tdataschedrange[".addFields"][] = "FromDate";
$tdataschedrange[".addFields"][] = "ToDate";
$tdataschedrange[".addFields"][] = "SchedType";
$tdataschedrange[".addFields"][] = "SchedBy";
$tdataschedrange[".addFields"][] = "RestDays";
$tdataschedrange[".addFields"][] = "PreLogMins";
$tdataschedrange[".addFields"][] = "TimeIn";
$tdataschedrange[".addFields"][] = "TimeOut";
$tdataschedrange[".addFields"][] = "LunchBreakTimeFrom";
$tdataschedrange[".addFields"][] = "LunchBreakTimeTo";
$tdataschedrange[".addFields"][] = "MinsPerDay";
$tdataschedrange[".addFields"][] = "FirstHalfMins";
$tdataschedrange[".addFields"][] = "BreakMins";
$tdataschedrange[".addFields"][] = "SecondHalfMins";
$tdataschedrange[".addFields"][] = "Posted";

$tdataschedrange[".masterListFields"] = array();
$tdataschedrange[".masterListFields"][] = "ScRID";
$tdataschedrange[".masterListFields"][] = "Employer";
$tdataschedrange[".masterListFields"][] = "Division";
$tdataschedrange[".masterListFields"][] = "Shift";
$tdataschedrange[".masterListFields"][] = "FromDate";
$tdataschedrange[".masterListFields"][] = "ToDate";
$tdataschedrange[".masterListFields"][] = "SchedType";
$tdataschedrange[".masterListFields"][] = "SchedBy";
$tdataschedrange[".masterListFields"][] = "RestDays";
$tdataschedrange[".masterListFields"][] = "PreLogMins";
$tdataschedrange[".masterListFields"][] = "TimeIn";
$tdataschedrange[".masterListFields"][] = "TimeOut";
$tdataschedrange[".masterListFields"][] = "LunchBreakTimeFrom";
$tdataschedrange[".masterListFields"][] = "LunchBreakTimeTo";
$tdataschedrange[".masterListFields"][] = "MinsPerDay";
$tdataschedrange[".masterListFields"][] = "FirstHalfMins";
$tdataschedrange[".masterListFields"][] = "BreakMins";
$tdataschedrange[".masterListFields"][] = "SecondHalfMins";
$tdataschedrange[".masterListFields"][] = "Posted";

$tdataschedrange[".inlineAddFields"] = array();
$tdataschedrange[".inlineAddFields"][] = "Employer";
$tdataschedrange[".inlineAddFields"][] = "Division";
$tdataschedrange[".inlineAddFields"][] = "Shift";
$tdataschedrange[".inlineAddFields"][] = "FromDate";
$tdataschedrange[".inlineAddFields"][] = "ToDate";
$tdataschedrange[".inlineAddFields"][] = "SchedType";
$tdataschedrange[".inlineAddFields"][] = "SchedBy";
$tdataschedrange[".inlineAddFields"][] = "RestDays";
$tdataschedrange[".inlineAddFields"][] = "PreLogMins";
$tdataschedrange[".inlineAddFields"][] = "TimeIn";
$tdataschedrange[".inlineAddFields"][] = "TimeOut";
$tdataschedrange[".inlineAddFields"][] = "LunchBreakTimeFrom";
$tdataschedrange[".inlineAddFields"][] = "LunchBreakTimeTo";
$tdataschedrange[".inlineAddFields"][] = "MinsPerDay";
$tdataschedrange[".inlineAddFields"][] = "FirstHalfMins";
$tdataschedrange[".inlineAddFields"][] = "BreakMins";
$tdataschedrange[".inlineAddFields"][] = "SecondHalfMins";
$tdataschedrange[".inlineAddFields"][] = "Posted";

$tdataschedrange[".editFields"] = array();
$tdataschedrange[".editFields"][] = "Employer";
$tdataschedrange[".editFields"][] = "Division";
$tdataschedrange[".editFields"][] = "Shift";
$tdataschedrange[".editFields"][] = "FromDate";
$tdataschedrange[".editFields"][] = "ToDate";
$tdataschedrange[".editFields"][] = "SchedType";
$tdataschedrange[".editFields"][] = "SchedBy";
$tdataschedrange[".editFields"][] = "RestDays";
$tdataschedrange[".editFields"][] = "PreLogMins";
$tdataschedrange[".editFields"][] = "TimeIn";
$tdataschedrange[".editFields"][] = "TimeOut";
$tdataschedrange[".editFields"][] = "LunchBreakTimeFrom";
$tdataschedrange[".editFields"][] = "LunchBreakTimeTo";
$tdataschedrange[".editFields"][] = "MinsPerDay";
$tdataschedrange[".editFields"][] = "FirstHalfMins";
$tdataschedrange[".editFields"][] = "BreakMins";
$tdataschedrange[".editFields"][] = "SecondHalfMins";
$tdataschedrange[".editFields"][] = "Posted";

$tdataschedrange[".inlineEditFields"] = array();
$tdataschedrange[".inlineEditFields"][] = "Employer";
$tdataschedrange[".inlineEditFields"][] = "Division";
$tdataschedrange[".inlineEditFields"][] = "Shift";
$tdataschedrange[".inlineEditFields"][] = "FromDate";
$tdataschedrange[".inlineEditFields"][] = "ToDate";
$tdataschedrange[".inlineEditFields"][] = "SchedType";
$tdataschedrange[".inlineEditFields"][] = "SchedBy";
$tdataschedrange[".inlineEditFields"][] = "RestDays";
$tdataschedrange[".inlineEditFields"][] = "PreLogMins";
$tdataschedrange[".inlineEditFields"][] = "TimeIn";
$tdataschedrange[".inlineEditFields"][] = "TimeOut";
$tdataschedrange[".inlineEditFields"][] = "LunchBreakTimeFrom";
$tdataschedrange[".inlineEditFields"][] = "LunchBreakTimeTo";
$tdataschedrange[".inlineEditFields"][] = "MinsPerDay";
$tdataschedrange[".inlineEditFields"][] = "FirstHalfMins";
$tdataschedrange[".inlineEditFields"][] = "BreakMins";
$tdataschedrange[".inlineEditFields"][] = "SecondHalfMins";
$tdataschedrange[".inlineEditFields"][] = "Posted";

$tdataschedrange[".updateSelectedFields"] = array();
$tdataschedrange[".updateSelectedFields"][] = "Shift";
$tdataschedrange[".updateSelectedFields"][] = "FromDate";
$tdataschedrange[".updateSelectedFields"][] = "ToDate";
$tdataschedrange[".updateSelectedFields"][] = "SchedType";
$tdataschedrange[".updateSelectedFields"][] = "RestDays";
$tdataschedrange[".updateSelectedFields"][] = "TimeIn";
$tdataschedrange[".updateSelectedFields"][] = "TimeOut";
$tdataschedrange[".updateSelectedFields"][] = "LunchBreakTimeFrom";
$tdataschedrange[".updateSelectedFields"][] = "LunchBreakTimeTo";
$tdataschedrange[".updateSelectedFields"][] = "MinsPerDay";
$tdataschedrange[".updateSelectedFields"][] = "FirstHalfMins";
$tdataschedrange[".updateSelectedFields"][] = "BreakMins";
$tdataschedrange[".updateSelectedFields"][] = "SecondHalfMins";
$tdataschedrange[".updateSelectedFields"][] = "Posted";


$tdataschedrange[".exportFields"] = array();
$tdataschedrange[".exportFields"][] = "ScRID";
$tdataschedrange[".exportFields"][] = "Employer";
$tdataschedrange[".exportFields"][] = "Division";
$tdataschedrange[".exportFields"][] = "Shift";
$tdataschedrange[".exportFields"][] = "FromDate";
$tdataschedrange[".exportFields"][] = "ToDate";
$tdataschedrange[".exportFields"][] = "SchedType";
$tdataschedrange[".exportFields"][] = "SchedBy";
$tdataschedrange[".exportFields"][] = "RestDays";
$tdataschedrange[".exportFields"][] = "PreLogMins";
$tdataschedrange[".exportFields"][] = "TimeIn";
$tdataschedrange[".exportFields"][] = "TimeOut";
$tdataschedrange[".exportFields"][] = "LunchBreakTimeFrom";
$tdataschedrange[".exportFields"][] = "LunchBreakTimeTo";
$tdataschedrange[".exportFields"][] = "MinsPerDay";
$tdataschedrange[".exportFields"][] = "FirstHalfMins";
$tdataschedrange[".exportFields"][] = "BreakMins";
$tdataschedrange[".exportFields"][] = "SecondHalfMins";
$tdataschedrange[".exportFields"][] = "Posted";

$tdataschedrange[".importFields"] = array();
$tdataschedrange[".importFields"][] = "ScRID";
$tdataschedrange[".importFields"][] = "FromDate";
$tdataschedrange[".importFields"][] = "ToDate";
$tdataschedrange[".importFields"][] = "TimeIn";
$tdataschedrange[".importFields"][] = "TimeOut";
$tdataschedrange[".importFields"][] = "SchedType";
$tdataschedrange[".importFields"][] = "MinsPerDay";
$tdataschedrange[".importFields"][] = "BreakMins";
$tdataschedrange[".importFields"][] = "Shift";
$tdataschedrange[".importFields"][] = "Posted";
$tdataschedrange[".importFields"][] = "LunchBreakTimeFrom";
$tdataschedrange[".importFields"][] = "LunchBreakTimeTo";
$tdataschedrange[".importFields"][] = "FirstHalfMins";
$tdataschedrange[".importFields"][] = "SecondHalfMins";
$tdataschedrange[".importFields"][] = "RestDays";
$tdataschedrange[".importFields"][] = "SchedBy";
$tdataschedrange[".importFields"][] = "Employer";
$tdataschedrange[".importFields"][] = "Division";
$tdataschedrange[".importFields"][] = "PreLogMins";

$tdataschedrange[".printFields"] = array();
$tdataschedrange[".printFields"][] = "ScRID";
$tdataschedrange[".printFields"][] = "Employer";
$tdataschedrange[".printFields"][] = "Division";
$tdataschedrange[".printFields"][] = "Shift";
$tdataschedrange[".printFields"][] = "FromDate";
$tdataschedrange[".printFields"][] = "ToDate";
$tdataschedrange[".printFields"][] = "SchedType";
$tdataschedrange[".printFields"][] = "SchedBy";
$tdataschedrange[".printFields"][] = "RestDays";
$tdataschedrange[".printFields"][] = "PreLogMins";
$tdataschedrange[".printFields"][] = "TimeIn";
$tdataschedrange[".printFields"][] = "TimeOut";
$tdataschedrange[".printFields"][] = "LunchBreakTimeFrom";
$tdataschedrange[".printFields"][] = "LunchBreakTimeTo";
$tdataschedrange[".printFields"][] = "MinsPerDay";
$tdataschedrange[".printFields"][] = "FirstHalfMins";
$tdataschedrange[".printFields"][] = "BreakMins";
$tdataschedrange[".printFields"][] = "SecondHalfMins";
$tdataschedrange[".printFields"][] = "Posted";


//	ScRID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ScRID";
	$fdata["GoodName"] = "ScRID";
	$fdata["ownerTable"] = "schedrange";
	$fdata["Label"] = GetFieldLabel("schedrange","ScRID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ScRID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ScRID";

	
	
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




	$tdataschedrange["ScRID"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "schedrange";
	$fdata["Label"] = GetFieldLabel("schedrange","FromDate");
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

		$fdata["strField"] = "FromDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FromDate";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataschedrange["FromDate"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "schedrange";
	$fdata["Label"] = GetFieldLabel("schedrange","ToDate");
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

		$fdata["strField"] = "ToDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ToDate";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataschedrange["ToDate"] = $fdata;
//	TimeIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TimeIn";
	$fdata["GoodName"] = "TimeIn";
	$fdata["ownerTable"] = "schedrange";
	$fdata["Label"] = GetFieldLabel("schedrange","TimeIn");
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

	$edata = array("EditFormat" => "Readonly");

		$edata["ShowTime"] = true;

	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 102;

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




	$tdataschedrange["TimeIn"] = $fdata;
//	TimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TimeOut";
	$fdata["GoodName"] = "TimeOut";
	$fdata["ownerTable"] = "schedrange";
	$fdata["Label"] = GetFieldLabel("schedrange","TimeOut");
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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 102;

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




	$tdataschedrange["TimeOut"] = $fdata;
//	StrictTimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "StrictTimeOut";
	$fdata["GoodName"] = "StrictTimeOut";
	$fdata["ownerTable"] = "schedrange";
	$fdata["Label"] = GetFieldLabel("schedrange","StrictTimeOut");
	$fdata["FieldType"] = 16;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "StrictTimeOut";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "StrictTimeOut";

	
	
			
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

	
	
	
	
	
	
		$edata["controlWidth"] = 40;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataschedrange["StrictTimeOut"] = $fdata;
//	StrictTimeIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "StrictTimeIn";
	$fdata["GoodName"] = "StrictTimeIn";
	$fdata["ownerTable"] = "schedrange";
	$fdata["Label"] = GetFieldLabel("schedrange","StrictTimeIn");
	$fdata["FieldType"] = 16;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "StrictTimeIn";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "StrictTimeIn";

	
	
			
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

	
	
	
	
	
	
		$edata["controlWidth"] = 40;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataschedrange["StrictTimeIn"] = $fdata;
//	SchedType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SchedType";
	$fdata["GoodName"] = "SchedType";
	$fdata["ownerTable"] = "schedrange";
	$fdata["Label"] = GetFieldLabel("schedrange","SchedType");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataschedrange["SchedType"] = $fdata;
//	MinsPerDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "MinsPerDay";
	$fdata["GoodName"] = "MinsPerDay";
	$fdata["ownerTable"] = "schedrange";
	$fdata["Label"] = GetFieldLabel("schedrange","MinsPerDay");
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

	
	
	
	
	
	
		$edata["controlWidth"] = 60;

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




	$tdataschedrange["MinsPerDay"] = $fdata;
//	BreakMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "BreakMins";
	$fdata["GoodName"] = "BreakMins";
	$fdata["ownerTable"] = "schedrange";
	$fdata["Label"] = GetFieldLabel("schedrange","BreakMins");
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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 57;

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




	$tdataschedrange["BreakMins"] = $fdata;
//	Shift
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Shift";
	$fdata["GoodName"] = "Shift";
	$fdata["ownerTable"] = "schedrange";
	$fdata["Label"] = GetFieldLabel("schedrange","Shift");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "shifts";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"TimeIn", 'lookupF'=>"TimeIn");
	$edata["autoCompleteFields"][] = array('masterF'=>"TimeOut", 'lookupF'=>"TimeOut");
	$edata["autoCompleteFields"][] = array('masterF'=>"SchedType", 'lookupF'=>"SchedType");
	$edata["autoCompleteFields"][] = array('masterF'=>"MinsPerDay", 'lookupF'=>"MinsPerDay");
	$edata["autoCompleteFields"][] = array('masterF'=>"BreakMins", 'lookupF'=>"BreakMins");
	$edata["autoCompleteFields"][] = array('masterF'=>"LunchBreakTimeFrom", 'lookupF'=>"LunchBreakTimeFrom");
	$edata["autoCompleteFields"][] = array('masterF'=>"LunchBreakTimeTo", 'lookupF'=>"LunchBreakTimeTo");
	$edata["autoCompleteFields"][] = array('masterF'=>"FirstHalfMins", 'lookupF'=>"FirstHalfMins");
	$edata["autoCompleteFields"][] = array('masterF'=>"SecondHalfMins", 'lookupF'=>"SecondHalfMins");
	$edata["autoCompleteFields"][] = array('masterF'=>"PreLogMins", 'lookupF'=>"PreLogMins");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "shID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Shift";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 80;

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




	$tdataschedrange["Shift"] = $fdata;
//	Posted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Posted";
	$fdata["GoodName"] = "Posted";
	$fdata["ownerTable"] = "schedrange";
	$fdata["Label"] = GetFieldLabel("schedrange","Posted");
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

		$fdata["strField"] = "Posted";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Posted";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 40;

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




	$tdataschedrange["Posted"] = $fdata;
//	LunchBreakTimeFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "LunchBreakTimeFrom";
	$fdata["GoodName"] = "LunchBreakTimeFrom";
	$fdata["ownerTable"] = "schedrange";
	$fdata["Label"] = GetFieldLabel("schedrange","LunchBreakTimeFrom");
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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 102;

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




	$tdataschedrange["LunchBreakTimeFrom"] = $fdata;
//	LunchBreakTimeTo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "LunchBreakTimeTo";
	$fdata["GoodName"] = "LunchBreakTimeTo";
	$fdata["ownerTable"] = "schedrange";
	$fdata["Label"] = GetFieldLabel("schedrange","LunchBreakTimeTo");
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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 102;

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




	$tdataschedrange["LunchBreakTimeTo"] = $fdata;
//	FirstHalfMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "FirstHalfMins";
	$fdata["GoodName"] = "FirstHalfMins";
	$fdata["ownerTable"] = "schedrange";
	$fdata["Label"] = GetFieldLabel("schedrange","FirstHalfMins");
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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 57;

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




	$tdataschedrange["FirstHalfMins"] = $fdata;
//	SecondHalfMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "SecondHalfMins";
	$fdata["GoodName"] = "SecondHalfMins";
	$fdata["ownerTable"] = "schedrange";
	$fdata["Label"] = GetFieldLabel("schedrange","SecondHalfMins");
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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 57;

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




	$tdataschedrange["SecondHalfMins"] = $fdata;
//	RestDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "RestDays";
	$fdata["GoodName"] = "RestDays";
	$fdata["ownerTable"] = "schedrange";
	$fdata["Label"] = GetFieldLabel("schedrange","RestDays");
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

		$fdata["strField"] = "RestDays";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RestDays";

	
	
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
	$edata["LookupTable"] = "daysweek";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "dayID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "DayIs";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

	
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




	$tdataschedrange["RestDays"] = $fdata;
//	SchedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "SchedBy";
	$fdata["GoodName"] = "SchedBy";
	$fdata["ownerTable"] = "schedrange";
	$fdata["Label"] = GetFieldLabel("schedrange","SchedBy");
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

		$fdata["strField"] = "SchedBy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SchedBy";

	
	
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
	$edata["LookupTable"] = "schedby";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "sbID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ScheduleBy";
	
	

	
	$edata["LookupOrderBy"] = "sbID";

	
	
	
	

	
	
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




	$tdataschedrange["SchedBy"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "schedrange";
	$fdata["Label"] = GetFieldLabel("schedrange","Employer");
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

		$fdata["strField"] = "Employer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Employer";

	
	
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
	$edata["LookupTable"] = "employername";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EnID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "EmployerName";
	
	

	
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




	$tdataschedrange["Employer"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "schedrange";
	$fdata["Label"] = GetFieldLabel("schedrange","Division");
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

		$fdata["strField"] = "Division";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Division";

	
	
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
	$edata["LookupTable"] = "divisions";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DvID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Division";
	
	

	
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




	$tdataschedrange["Division"] = $fdata;
//	PreLogMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "PreLogMins";
	$fdata["GoodName"] = "PreLogMins";
	$fdata["ownerTable"] = "schedrange";
	$fdata["Label"] = GetFieldLabel("schedrange","PreLogMins");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataschedrange["PreLogMins"] = $fdata;


$tables_data["schedrange"]=&$tdataschedrange;
$field_labels["schedrange"] = &$fieldLabelsschedrange;
$fieldToolTips["schedrange"] = &$fieldToolTipsschedrange;
$placeHolders["schedrange"] = &$placeHoldersschedrange;
$page_titles["schedrange"] = &$pageTitlesschedrange;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["schedrange"] = array();
//	schedtab
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="schedtab";
		$detailsParam["dOriginalTable"] = "schedtab";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "schedtab";
	$detailsParam["dCaptionTable"] = GetTableCaption("schedtab");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["schedrange"][$dIndex] = $detailsParam;

	
		$detailsTablesData["schedrange"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["schedrange"][$dIndex]["masterKeys"][]="ScRID";

				$detailsTablesData["schedrange"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["schedrange"][$dIndex]["detailKeys"][]="ScRID";

// tables which are master tables for current table (detail)
$masterTablesData["schedrange"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_schedrange()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ScRID,  FromDate,  ToDate,  TimeIn,  TimeOut,  StrictTimeOut,  StrictTimeIn,  SchedType,  MinsPerDay,  BreakMins,  Shift,  Posted,  LunchBreakTimeFrom,  LunchBreakTimeTo,  FirstHalfMins,  SecondHalfMins,  RestDays,  SchedBy,  Employer,  Division,  PreLogMins";
$proto0["m_strFrom"] = "FROM schedrange";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY ScRID DESC";
	
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
	"m_strName" => "ScRID",
	"m_strTable" => "schedrange",
	"m_srcTableName" => "schedrange"
));

$proto6["m_sql"] = "ScRID";
$proto6["m_srcTableName"] = "schedrange";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "schedrange",
	"m_srcTableName" => "schedrange"
));

$proto8["m_sql"] = "FromDate";
$proto8["m_srcTableName"] = "schedrange";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "schedrange",
	"m_srcTableName" => "schedrange"
));

$proto10["m_sql"] = "ToDate";
$proto10["m_srcTableName"] = "schedrange";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeIn",
	"m_strTable" => "schedrange",
	"m_srcTableName" => "schedrange"
));

$proto12["m_sql"] = "TimeIn";
$proto12["m_srcTableName"] = "schedrange";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeOut",
	"m_strTable" => "schedrange",
	"m_srcTableName" => "schedrange"
));

$proto14["m_sql"] = "TimeOut";
$proto14["m_srcTableName"] = "schedrange";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "StrictTimeOut",
	"m_strTable" => "schedrange",
	"m_srcTableName" => "schedrange"
));

$proto16["m_sql"] = "StrictTimeOut";
$proto16["m_srcTableName"] = "schedrange";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "StrictTimeIn",
	"m_strTable" => "schedrange",
	"m_srcTableName" => "schedrange"
));

$proto18["m_sql"] = "StrictTimeIn";
$proto18["m_srcTableName"] = "schedrange";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SchedType",
	"m_strTable" => "schedrange",
	"m_srcTableName" => "schedrange"
));

$proto20["m_sql"] = "SchedType";
$proto20["m_srcTableName"] = "schedrange";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "MinsPerDay",
	"m_strTable" => "schedrange",
	"m_srcTableName" => "schedrange"
));

$proto22["m_sql"] = "MinsPerDay";
$proto22["m_srcTableName"] = "schedrange";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "BreakMins",
	"m_strTable" => "schedrange",
	"m_srcTableName" => "schedrange"
));

$proto24["m_sql"] = "BreakMins";
$proto24["m_srcTableName"] = "schedrange";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Shift",
	"m_strTable" => "schedrange",
	"m_srcTableName" => "schedrange"
));

$proto26["m_sql"] = "Shift";
$proto26["m_srcTableName"] = "schedrange";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Posted",
	"m_strTable" => "schedrange",
	"m_srcTableName" => "schedrange"
));

$proto28["m_sql"] = "Posted";
$proto28["m_srcTableName"] = "schedrange";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "LunchBreakTimeFrom",
	"m_strTable" => "schedrange",
	"m_srcTableName" => "schedrange"
));

$proto30["m_sql"] = "LunchBreakTimeFrom";
$proto30["m_srcTableName"] = "schedrange";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "LunchBreakTimeTo",
	"m_strTable" => "schedrange",
	"m_srcTableName" => "schedrange"
));

$proto32["m_sql"] = "LunchBreakTimeTo";
$proto32["m_srcTableName"] = "schedrange";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "FirstHalfMins",
	"m_strTable" => "schedrange",
	"m_srcTableName" => "schedrange"
));

$proto34["m_sql"] = "FirstHalfMins";
$proto34["m_srcTableName"] = "schedrange";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "SecondHalfMins",
	"m_strTable" => "schedrange",
	"m_srcTableName" => "schedrange"
));

$proto36["m_sql"] = "SecondHalfMins";
$proto36["m_srcTableName"] = "schedrange";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "RestDays",
	"m_strTable" => "schedrange",
	"m_srcTableName" => "schedrange"
));

$proto38["m_sql"] = "RestDays";
$proto38["m_srcTableName"] = "schedrange";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "SchedBy",
	"m_strTable" => "schedrange",
	"m_srcTableName" => "schedrange"
));

$proto40["m_sql"] = "SchedBy";
$proto40["m_srcTableName"] = "schedrange";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "schedrange",
	"m_srcTableName" => "schedrange"
));

$proto42["m_sql"] = "Employer";
$proto42["m_srcTableName"] = "schedrange";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "schedrange",
	"m_srcTableName" => "schedrange"
));

$proto44["m_sql"] = "Division";
$proto44["m_srcTableName"] = "schedrange";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "PreLogMins",
	"m_strTable" => "schedrange",
	"m_srcTableName" => "schedrange"
));

$proto46["m_sql"] = "PreLogMins";
$proto46["m_srcTableName"] = "schedrange";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "schedrange";
$proto49["m_srcTableName"] = "schedrange";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "ScRID";
$proto49["m_columns"][] = "FromDate";
$proto49["m_columns"][] = "ToDate";
$proto49["m_columns"][] = "TimeIn";
$proto49["m_columns"][] = "TimeOut";
$proto49["m_columns"][] = "StrictTimeOut";
$proto49["m_columns"][] = "StrictTimeIn";
$proto49["m_columns"][] = "SchedType";
$proto49["m_columns"][] = "CrossMidnight";
$proto49["m_columns"][] = "RecordOnFirstDay";
$proto49["m_columns"][] = "RecordOnSecondDay";
$proto49["m_columns"][] = "RestDay";
$proto49["m_columns"][] = "MinsPerDay";
$proto49["m_columns"][] = "BreakMins";
$proto49["m_columns"][] = "Shift";
$proto49["m_columns"][] = "Posted";
$proto49["m_columns"][] = "LunchBreakTimeFrom";
$proto49["m_columns"][] = "LunchBreakTimeTo";
$proto49["m_columns"][] = "ReqLogOutInOnBreak";
$proto49["m_columns"][] = "FirstHalfMins";
$proto49["m_columns"][] = "SecondHalfMins";
$proto49["m_columns"][] = "RestDays";
$proto49["m_columns"][] = "SchedBy";
$proto49["m_columns"][] = "Employer";
$proto49["m_columns"][] = "Division";
$proto49["m_columns"][] = "PreLogMins";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "schedrange";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "schedrange";
$proto50=array();
$proto50["m_sql"] = "";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto52=array();
						$obj = new SQLField(array(
	"m_strName" => "ScRID",
	"m_strTable" => "schedrange",
	"m_srcTableName" => "schedrange"
));

$proto52["m_column"]=$obj;
$proto52["m_bAsc"] = 0;
$proto52["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto52);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="schedrange";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_schedrange = createSqlQuery_schedrange();


	
		;

																					

$tdataschedrange[".sqlquery"] = $queryData_schedrange;

include_once(getabspath("include/schedrange_events.php"));
$tableEvents["schedrange"] = new eventclass_schedrange;
$tdataschedrange[".hasEvents"] = true;

?>