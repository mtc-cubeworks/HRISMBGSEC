<?php
require_once(getabspath("classes/cipherer.php"));




$tdataindschedrange = array();
	$tdataindschedrange[".truncateText"] = true;
	$tdataindschedrange[".NumberOfChars"] = 80;
	$tdataindschedrange[".ShortName"] = "indschedrange";
	$tdataindschedrange[".OwnerID"] = "EmployeeID";
	$tdataindschedrange[".OriginalTable"] = "indschedrange";

//	field labels
$fieldLabelsindschedrange = array();
$fieldToolTipsindschedrange = array();
$pageTitlesindschedrange = array();
$placeHoldersindschedrange = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsindschedrange["English"] = array();
	$fieldToolTipsindschedrange["English"] = array();
	$placeHoldersindschedrange["English"] = array();
	$pageTitlesindschedrange["English"] = array();
	$fieldLabelsindschedrange["English"]["FromDate"] = "From Date";
	$fieldToolTipsindschedrange["English"]["FromDate"] = "";
	$placeHoldersindschedrange["English"]["FromDate"] = "";
	$fieldLabelsindschedrange["English"]["ToDate"] = "To Date";
	$fieldToolTipsindschedrange["English"]["ToDate"] = "";
	$placeHoldersindschedrange["English"]["ToDate"] = "";
	$fieldLabelsindschedrange["English"]["TimeIn"] = "Time In";
	$fieldToolTipsindschedrange["English"]["TimeIn"] = "";
	$placeHoldersindschedrange["English"]["TimeIn"] = "";
	$fieldLabelsindschedrange["English"]["TimeOut"] = "Time Out";
	$fieldToolTipsindschedrange["English"]["TimeOut"] = "";
	$placeHoldersindschedrange["English"]["TimeOut"] = "";
	$fieldLabelsindschedrange["English"]["SchedType"] = "Sched Type";
	$fieldToolTipsindschedrange["English"]["SchedType"] = "";
	$placeHoldersindschedrange["English"]["SchedType"] = "";
	$fieldLabelsindschedrange["English"]["MinsPerDay"] = "Mins Per Day";
	$fieldToolTipsindschedrange["English"]["MinsPerDay"] = "";
	$placeHoldersindschedrange["English"]["MinsPerDay"] = "";
	$fieldLabelsindschedrange["English"]["BreakMins"] = "Break Mins";
	$fieldToolTipsindschedrange["English"]["BreakMins"] = "";
	$placeHoldersindschedrange["English"]["BreakMins"] = "";
	$fieldLabelsindschedrange["English"]["Shift"] = "Shift";
	$fieldToolTipsindschedrange["English"]["Shift"] = "";
	$placeHoldersindschedrange["English"]["Shift"] = "";
	$fieldLabelsindschedrange["English"]["Posted"] = "Posted";
	$fieldToolTipsindschedrange["English"]["Posted"] = "";
	$placeHoldersindschedrange["English"]["Posted"] = "";
	$fieldLabelsindschedrange["English"]["LunchBreakTimeFrom"] = "Break Out";
	$fieldToolTipsindschedrange["English"]["LunchBreakTimeFrom"] = "";
	$placeHoldersindschedrange["English"]["LunchBreakTimeFrom"] = "";
	$fieldLabelsindschedrange["English"]["LunchBreakTimeTo"] = "Break In";
	$fieldToolTipsindschedrange["English"]["LunchBreakTimeTo"] = "";
	$placeHoldersindschedrange["English"]["LunchBreakTimeTo"] = "";
	$fieldLabelsindschedrange["English"]["FirstHalfMins"] = "First Half Mins";
	$fieldToolTipsindschedrange["English"]["FirstHalfMins"] = "";
	$placeHoldersindschedrange["English"]["FirstHalfMins"] = "";
	$fieldLabelsindschedrange["English"]["SecondHalfMins"] = "Second Half Mins";
	$fieldToolTipsindschedrange["English"]["SecondHalfMins"] = "";
	$placeHoldersindschedrange["English"]["SecondHalfMins"] = "";
	$fieldLabelsindschedrange["English"]["RestDays"] = "Select Days";
	$fieldToolTipsindschedrange["English"]["RestDays"] = "";
	$placeHoldersindschedrange["English"]["RestDays"] = "";
	$fieldLabelsindschedrange["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipsindschedrange["English"]["EmployeeID"] = "";
	$placeHoldersindschedrange["English"]["EmployeeID"] = "";
	$fieldLabelsindschedrange["English"]["IScRID"] = "ISc RID";
	$fieldToolTipsindschedrange["English"]["IScRID"] = "";
	$placeHoldersindschedrange["English"]["IScRID"] = "";
	$fieldLabelsindschedrange["English"]["SchedBy"] = "Sched By";
	$fieldToolTipsindschedrange["English"]["SchedBy"] = "";
	$placeHoldersindschedrange["English"]["SchedBy"] = "";
	$fieldLabelsindschedrange["English"]["PreLogMins"] = "Pre Log Mins";
	$fieldToolTipsindschedrange["English"]["PreLogMins"] = "";
	$placeHoldersindschedrange["English"]["PreLogMins"] = "";
	if (count($fieldToolTipsindschedrange["English"]))
		$tdataindschedrange[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsindschedrange[""] = array();
	$fieldToolTipsindschedrange[""] = array();
	$placeHoldersindschedrange[""] = array();
	$pageTitlesindschedrange[""] = array();
	if (count($fieldToolTipsindschedrange[""]))
		$tdataindschedrange[".isUseToolTips"] = true;
}


	$tdataindschedrange[".NCSearch"] = true;



$tdataindschedrange[".shortTableName"] = "indschedrange";
$tdataindschedrange[".nSecOptions"] = 1;
$tdataindschedrange[".recsPerRowPrint"] = 1;
$tdataindschedrange[".mainTableOwnerID"] = "EmployeeID";
$tdataindschedrange[".moveNext"] = 1;
$tdataindschedrange[".entityType"] = 0;

$tdataindschedrange[".strOriginalTableName"] = "indschedrange";

	



$tdataindschedrange[".showAddInPopup"] = false;

$tdataindschedrange[".showEditInPopup"] = false;

$tdataindschedrange[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataindschedrange[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataindschedrange[".fieldsForRegister"] = array();

$tdataindschedrange[".listAjax"] = false;

	$tdataindschedrange[".audit"] = false;

	$tdataindschedrange[".locking"] = false;

$tdataindschedrange[".edit"] = true;
$tdataindschedrange[".afterEditAction"] = 0;
$tdataindschedrange[".closePopupAfterEdit"] = 1;
$tdataindschedrange[".afterEditActionDetTable"] = "";

$tdataindschedrange[".add"] = true;
$tdataindschedrange[".afterAddAction"] = 0;
$tdataindschedrange[".closePopupAfterAdd"] = 1;
$tdataindschedrange[".afterAddActionDetTable"] = "";

$tdataindschedrange[".list"] = true;

$tdataindschedrange[".inlineEdit"] = true;

$tdataindschedrange[".updateSelected"] = true;

$tdataindschedrange[".reorderRecordsByHeader"] = true;


$tdataindschedrange[".exportFormatting"] = 2;
$tdataindschedrange[".exportDelimiter"] = ",";
		
$tdataindschedrange[".inlineAdd"] = true;
$tdataindschedrange[".view"] = true;

$tdataindschedrange[".import"] = true;

$tdataindschedrange[".exportTo"] = true;

$tdataindschedrange[".printFriendly"] = true;

$tdataindschedrange[".delete"] = true;

$tdataindschedrange[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataindschedrange[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataindschedrange[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataindschedrange[".searchSaving"] = false;
//

$tdataindschedrange[".showSearchPanel"] = true;
		$tdataindschedrange[".flexibleSearch"] = true;

$tdataindschedrange[".isUseAjaxSuggest"] = true;

$tdataindschedrange[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																													
							
																																																																																																																																																																																												

$tdataindschedrange[".ajaxCodeSnippetAdded"] = false;

$tdataindschedrange[".buttonsAdded"] = true;

$tdataindschedrange[".addPageEvents"] = true;

// use timepicker for search panel
$tdataindschedrange[".isUseTimeForSearch"] = true;



$tdataindschedrange[".badgeColor"] = "9acd32";


$tdataindschedrange[".allSearchFields"] = array();
$tdataindschedrange[".filterFields"] = array();
$tdataindschedrange[".requiredSearchFields"] = array();

$tdataindschedrange[".allSearchFields"][] = "IScRID";
	$tdataindschedrange[".allSearchFields"][] = "Shift";
	$tdataindschedrange[".allSearchFields"][] = "FromDate";
	$tdataindschedrange[".allSearchFields"][] = "ToDate";
	$tdataindschedrange[".allSearchFields"][] = "SchedType";
	$tdataindschedrange[".allSearchFields"][] = "SchedBy";
	$tdataindschedrange[".allSearchFields"][] = "RestDays";
	$tdataindschedrange[".allSearchFields"][] = "PreLogMins";
	$tdataindschedrange[".allSearchFields"][] = "TimeIn";
	$tdataindschedrange[".allSearchFields"][] = "TimeOut";
	$tdataindschedrange[".allSearchFields"][] = "LunchBreakTimeFrom";
	$tdataindschedrange[".allSearchFields"][] = "LunchBreakTimeTo";
	$tdataindschedrange[".allSearchFields"][] = "MinsPerDay";
	$tdataindschedrange[".allSearchFields"][] = "FirstHalfMins";
	$tdataindschedrange[".allSearchFields"][] = "BreakMins";
	$tdataindschedrange[".allSearchFields"][] = "SecondHalfMins";
	$tdataindschedrange[".allSearchFields"][] = "Posted";
	$tdataindschedrange[".allSearchFields"][] = "EmployeeID";
	

$tdataindschedrange[".googleLikeFields"] = array();
$tdataindschedrange[".googleLikeFields"][] = "IScRID";
$tdataindschedrange[".googleLikeFields"][] = "FromDate";
$tdataindschedrange[".googleLikeFields"][] = "ToDate";
$tdataindschedrange[".googleLikeFields"][] = "TimeIn";
$tdataindschedrange[".googleLikeFields"][] = "TimeOut";
$tdataindschedrange[".googleLikeFields"][] = "SchedType";
$tdataindschedrange[".googleLikeFields"][] = "MinsPerDay";
$tdataindschedrange[".googleLikeFields"][] = "BreakMins";
$tdataindschedrange[".googleLikeFields"][] = "Shift";
$tdataindschedrange[".googleLikeFields"][] = "Posted";
$tdataindschedrange[".googleLikeFields"][] = "LunchBreakTimeFrom";
$tdataindschedrange[".googleLikeFields"][] = "LunchBreakTimeTo";
$tdataindschedrange[".googleLikeFields"][] = "FirstHalfMins";
$tdataindschedrange[".googleLikeFields"][] = "SecondHalfMins";
$tdataindschedrange[".googleLikeFields"][] = "RestDays";
$tdataindschedrange[".googleLikeFields"][] = "EmployeeID";
$tdataindschedrange[".googleLikeFields"][] = "SchedBy";
$tdataindschedrange[".googleLikeFields"][] = "PreLogMins";


$tdataindschedrange[".advSearchFields"] = array();
$tdataindschedrange[".advSearchFields"][] = "IScRID";
$tdataindschedrange[".advSearchFields"][] = "Shift";
$tdataindschedrange[".advSearchFields"][] = "FromDate";
$tdataindschedrange[".advSearchFields"][] = "ToDate";
$tdataindschedrange[".advSearchFields"][] = "SchedType";
$tdataindschedrange[".advSearchFields"][] = "SchedBy";
$tdataindschedrange[".advSearchFields"][] = "RestDays";
$tdataindschedrange[".advSearchFields"][] = "PreLogMins";
$tdataindschedrange[".advSearchFields"][] = "TimeIn";
$tdataindschedrange[".advSearchFields"][] = "TimeOut";
$tdataindschedrange[".advSearchFields"][] = "LunchBreakTimeFrom";
$tdataindschedrange[".advSearchFields"][] = "LunchBreakTimeTo";
$tdataindschedrange[".advSearchFields"][] = "MinsPerDay";
$tdataindschedrange[".advSearchFields"][] = "FirstHalfMins";
$tdataindschedrange[".advSearchFields"][] = "BreakMins";
$tdataindschedrange[".advSearchFields"][] = "SecondHalfMins";
$tdataindschedrange[".advSearchFields"][] = "Posted";
$tdataindschedrange[".advSearchFields"][] = "EmployeeID";

$tdataindschedrange[".tableType"] = "list";

$tdataindschedrange[".printerPageOrientation"] = 0;
$tdataindschedrange[".nPrinterPageScale"] = 100;

$tdataindschedrange[".nPrinterSplitRecords"] = 40;

$tdataindschedrange[".nPrinterPDFSplitRecords"] = 40;



$tdataindschedrange[".geocodingEnabled"] = false;





$tdataindschedrange[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataindschedrange[".pageSize"] = 20;

$tdataindschedrange[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataindschedrange[".strOrderBy"] = $tstrOrderBy;

$tdataindschedrange[".orderindexes"] = array();

$tdataindschedrange[".sqlHead"] = "SELECT IScRID,  FromDate,  ToDate,  TimeIn,  TimeOut,  SchedType,  MinsPerDay,  BreakMins,  Shift,  Posted,  LunchBreakTimeFrom,  LunchBreakTimeTo,  FirstHalfMins,  SecondHalfMins,  RestDays,  EmployeeID,  SchedBy,  PreLogMins";
$tdataindschedrange[".sqlFrom"] = "FROM indschedrange";
$tdataindschedrange[".sqlWhereExpr"] = "";
$tdataindschedrange[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataindschedrange[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataindschedrange[".arrGroupsPerPage"] = $arrGPP;

$tdataindschedrange[".highlightSearchResults"] = true;

$tableKeysindschedrange = array();
$tableKeysindschedrange[] = "IScRID";
$tdataindschedrange[".Keys"] = $tableKeysindschedrange;

$tdataindschedrange[".listFields"] = array();
$tdataindschedrange[".listFields"][] = "IScRID";
$tdataindschedrange[".listFields"][] = "Shift";
$tdataindschedrange[".listFields"][] = "FromDate";
$tdataindschedrange[".listFields"][] = "ToDate";
$tdataindschedrange[".listFields"][] = "SchedType";
$tdataindschedrange[".listFields"][] = "SchedBy";
$tdataindschedrange[".listFields"][] = "RestDays";
$tdataindschedrange[".listFields"][] = "PreLogMins";
$tdataindschedrange[".listFields"][] = "TimeIn";
$tdataindschedrange[".listFields"][] = "TimeOut";
$tdataindschedrange[".listFields"][] = "LunchBreakTimeFrom";
$tdataindschedrange[".listFields"][] = "LunchBreakTimeTo";
$tdataindschedrange[".listFields"][] = "MinsPerDay";
$tdataindschedrange[".listFields"][] = "FirstHalfMins";
$tdataindschedrange[".listFields"][] = "BreakMins";
$tdataindschedrange[".listFields"][] = "SecondHalfMins";
$tdataindschedrange[".listFields"][] = "Posted";
$tdataindschedrange[".listFields"][] = "EmployeeID";

$tdataindschedrange[".hideMobileList"] = array();


$tdataindschedrange[".viewFields"] = array();
$tdataindschedrange[".viewFields"][] = "IScRID";
$tdataindschedrange[".viewFields"][] = "Shift";
$tdataindschedrange[".viewFields"][] = "FromDate";
$tdataindschedrange[".viewFields"][] = "ToDate";
$tdataindschedrange[".viewFields"][] = "SchedType";
$tdataindschedrange[".viewFields"][] = "SchedBy";
$tdataindschedrange[".viewFields"][] = "RestDays";
$tdataindschedrange[".viewFields"][] = "PreLogMins";
$tdataindschedrange[".viewFields"][] = "TimeIn";
$tdataindschedrange[".viewFields"][] = "TimeOut";
$tdataindschedrange[".viewFields"][] = "LunchBreakTimeFrom";
$tdataindschedrange[".viewFields"][] = "LunchBreakTimeTo";
$tdataindschedrange[".viewFields"][] = "MinsPerDay";
$tdataindschedrange[".viewFields"][] = "FirstHalfMins";
$tdataindschedrange[".viewFields"][] = "BreakMins";
$tdataindschedrange[".viewFields"][] = "SecondHalfMins";
$tdataindschedrange[".viewFields"][] = "Posted";
$tdataindschedrange[".viewFields"][] = "EmployeeID";

$tdataindschedrange[".addFields"] = array();
$tdataindschedrange[".addFields"][] = "Shift";
$tdataindschedrange[".addFields"][] = "FromDate";
$tdataindschedrange[".addFields"][] = "ToDate";
$tdataindschedrange[".addFields"][] = "SchedType";
$tdataindschedrange[".addFields"][] = "SchedBy";
$tdataindschedrange[".addFields"][] = "RestDays";
$tdataindschedrange[".addFields"][] = "PreLogMins";
$tdataindschedrange[".addFields"][] = "TimeIn";
$tdataindschedrange[".addFields"][] = "TimeOut";
$tdataindschedrange[".addFields"][] = "LunchBreakTimeFrom";
$tdataindschedrange[".addFields"][] = "LunchBreakTimeTo";
$tdataindschedrange[".addFields"][] = "MinsPerDay";
$tdataindschedrange[".addFields"][] = "FirstHalfMins";
$tdataindschedrange[".addFields"][] = "BreakMins";
$tdataindschedrange[".addFields"][] = "SecondHalfMins";
$tdataindschedrange[".addFields"][] = "Posted";
$tdataindschedrange[".addFields"][] = "EmployeeID";

$tdataindschedrange[".masterListFields"] = array();
$tdataindschedrange[".masterListFields"][] = "IScRID";
$tdataindschedrange[".masterListFields"][] = "Shift";
$tdataindschedrange[".masterListFields"][] = "FromDate";
$tdataindschedrange[".masterListFields"][] = "ToDate";
$tdataindschedrange[".masterListFields"][] = "SchedType";
$tdataindschedrange[".masterListFields"][] = "SchedBy";
$tdataindschedrange[".masterListFields"][] = "RestDays";
$tdataindschedrange[".masterListFields"][] = "PreLogMins";
$tdataindschedrange[".masterListFields"][] = "TimeIn";
$tdataindschedrange[".masterListFields"][] = "TimeOut";
$tdataindschedrange[".masterListFields"][] = "LunchBreakTimeFrom";
$tdataindschedrange[".masterListFields"][] = "LunchBreakTimeTo";
$tdataindschedrange[".masterListFields"][] = "MinsPerDay";
$tdataindschedrange[".masterListFields"][] = "FirstHalfMins";
$tdataindschedrange[".masterListFields"][] = "BreakMins";
$tdataindschedrange[".masterListFields"][] = "SecondHalfMins";
$tdataindschedrange[".masterListFields"][] = "Posted";
$tdataindschedrange[".masterListFields"][] = "EmployeeID";

$tdataindschedrange[".inlineAddFields"] = array();
$tdataindschedrange[".inlineAddFields"][] = "Shift";
$tdataindschedrange[".inlineAddFields"][] = "FromDate";
$tdataindschedrange[".inlineAddFields"][] = "ToDate";
$tdataindschedrange[".inlineAddFields"][] = "SchedType";
$tdataindschedrange[".inlineAddFields"][] = "SchedBy";
$tdataindschedrange[".inlineAddFields"][] = "RestDays";
$tdataindschedrange[".inlineAddFields"][] = "PreLogMins";
$tdataindschedrange[".inlineAddFields"][] = "TimeIn";
$tdataindschedrange[".inlineAddFields"][] = "TimeOut";
$tdataindschedrange[".inlineAddFields"][] = "LunchBreakTimeFrom";
$tdataindschedrange[".inlineAddFields"][] = "LunchBreakTimeTo";
$tdataindschedrange[".inlineAddFields"][] = "MinsPerDay";
$tdataindschedrange[".inlineAddFields"][] = "FirstHalfMins";
$tdataindschedrange[".inlineAddFields"][] = "BreakMins";
$tdataindschedrange[".inlineAddFields"][] = "SecondHalfMins";
$tdataindschedrange[".inlineAddFields"][] = "Posted";
$tdataindschedrange[".inlineAddFields"][] = "EmployeeID";

$tdataindschedrange[".editFields"] = array();
$tdataindschedrange[".editFields"][] = "IScRID";
$tdataindschedrange[".editFields"][] = "Shift";
$tdataindschedrange[".editFields"][] = "FromDate";
$tdataindschedrange[".editFields"][] = "ToDate";
$tdataindschedrange[".editFields"][] = "SchedType";
$tdataindschedrange[".editFields"][] = "SchedBy";
$tdataindschedrange[".editFields"][] = "RestDays";
$tdataindschedrange[".editFields"][] = "PreLogMins";
$tdataindschedrange[".editFields"][] = "TimeIn";
$tdataindschedrange[".editFields"][] = "TimeOut";
$tdataindschedrange[".editFields"][] = "LunchBreakTimeFrom";
$tdataindschedrange[".editFields"][] = "LunchBreakTimeTo";
$tdataindschedrange[".editFields"][] = "MinsPerDay";
$tdataindschedrange[".editFields"][] = "FirstHalfMins";
$tdataindschedrange[".editFields"][] = "BreakMins";
$tdataindschedrange[".editFields"][] = "SecondHalfMins";
$tdataindschedrange[".editFields"][] = "Posted";
$tdataindschedrange[".editFields"][] = "EmployeeID";

$tdataindschedrange[".inlineEditFields"] = array();
$tdataindschedrange[".inlineEditFields"][] = "IScRID";
$tdataindschedrange[".inlineEditFields"][] = "Shift";
$tdataindschedrange[".inlineEditFields"][] = "FromDate";
$tdataindschedrange[".inlineEditFields"][] = "ToDate";
$tdataindschedrange[".inlineEditFields"][] = "SchedType";
$tdataindschedrange[".inlineEditFields"][] = "SchedBy";
$tdataindschedrange[".inlineEditFields"][] = "RestDays";
$tdataindschedrange[".inlineEditFields"][] = "PreLogMins";
$tdataindschedrange[".inlineEditFields"][] = "TimeIn";
$tdataindschedrange[".inlineEditFields"][] = "TimeOut";
$tdataindschedrange[".inlineEditFields"][] = "LunchBreakTimeFrom";
$tdataindschedrange[".inlineEditFields"][] = "LunchBreakTimeTo";
$tdataindschedrange[".inlineEditFields"][] = "MinsPerDay";
$tdataindschedrange[".inlineEditFields"][] = "FirstHalfMins";
$tdataindschedrange[".inlineEditFields"][] = "BreakMins";
$tdataindschedrange[".inlineEditFields"][] = "SecondHalfMins";
$tdataindschedrange[".inlineEditFields"][] = "Posted";
$tdataindschedrange[".inlineEditFields"][] = "EmployeeID";

$tdataindschedrange[".updateSelectedFields"] = array();
$tdataindschedrange[".updateSelectedFields"][] = "IScRID";
$tdataindschedrange[".updateSelectedFields"][] = "Shift";
$tdataindschedrange[".updateSelectedFields"][] = "FromDate";
$tdataindschedrange[".updateSelectedFields"][] = "ToDate";
$tdataindschedrange[".updateSelectedFields"][] = "SchedType";
$tdataindschedrange[".updateSelectedFields"][] = "SchedBy";
$tdataindschedrange[".updateSelectedFields"][] = "RestDays";
$tdataindschedrange[".updateSelectedFields"][] = "TimeIn";
$tdataindschedrange[".updateSelectedFields"][] = "TimeOut";
$tdataindschedrange[".updateSelectedFields"][] = "LunchBreakTimeFrom";
$tdataindschedrange[".updateSelectedFields"][] = "LunchBreakTimeTo";
$tdataindschedrange[".updateSelectedFields"][] = "MinsPerDay";
$tdataindschedrange[".updateSelectedFields"][] = "FirstHalfMins";
$tdataindschedrange[".updateSelectedFields"][] = "BreakMins";
$tdataindschedrange[".updateSelectedFields"][] = "SecondHalfMins";
$tdataindschedrange[".updateSelectedFields"][] = "Posted";
$tdataindschedrange[".updateSelectedFields"][] = "EmployeeID";


$tdataindschedrange[".exportFields"] = array();
$tdataindschedrange[".exportFields"][] = "IScRID";
$tdataindschedrange[".exportFields"][] = "Shift";
$tdataindschedrange[".exportFields"][] = "FromDate";
$tdataindschedrange[".exportFields"][] = "ToDate";
$tdataindschedrange[".exportFields"][] = "SchedType";
$tdataindschedrange[".exportFields"][] = "SchedBy";
$tdataindschedrange[".exportFields"][] = "RestDays";
$tdataindschedrange[".exportFields"][] = "PreLogMins";
$tdataindschedrange[".exportFields"][] = "TimeIn";
$tdataindschedrange[".exportFields"][] = "TimeOut";
$tdataindschedrange[".exportFields"][] = "LunchBreakTimeFrom";
$tdataindschedrange[".exportFields"][] = "LunchBreakTimeTo";
$tdataindschedrange[".exportFields"][] = "MinsPerDay";
$tdataindschedrange[".exportFields"][] = "FirstHalfMins";
$tdataindschedrange[".exportFields"][] = "BreakMins";
$tdataindschedrange[".exportFields"][] = "SecondHalfMins";
$tdataindschedrange[".exportFields"][] = "Posted";
$tdataindschedrange[".exportFields"][] = "EmployeeID";

$tdataindschedrange[".importFields"] = array();
$tdataindschedrange[".importFields"][] = "IScRID";
$tdataindschedrange[".importFields"][] = "FromDate";
$tdataindschedrange[".importFields"][] = "ToDate";
$tdataindschedrange[".importFields"][] = "TimeIn";
$tdataindschedrange[".importFields"][] = "TimeOut";
$tdataindschedrange[".importFields"][] = "SchedType";
$tdataindschedrange[".importFields"][] = "MinsPerDay";
$tdataindschedrange[".importFields"][] = "BreakMins";
$tdataindschedrange[".importFields"][] = "Shift";
$tdataindschedrange[".importFields"][] = "Posted";
$tdataindschedrange[".importFields"][] = "LunchBreakTimeFrom";
$tdataindschedrange[".importFields"][] = "LunchBreakTimeTo";
$tdataindschedrange[".importFields"][] = "FirstHalfMins";
$tdataindschedrange[".importFields"][] = "SecondHalfMins";
$tdataindschedrange[".importFields"][] = "RestDays";
$tdataindschedrange[".importFields"][] = "EmployeeID";
$tdataindschedrange[".importFields"][] = "SchedBy";
$tdataindschedrange[".importFields"][] = "PreLogMins";

$tdataindschedrange[".printFields"] = array();
$tdataindschedrange[".printFields"][] = "IScRID";
$tdataindschedrange[".printFields"][] = "Shift";
$tdataindschedrange[".printFields"][] = "FromDate";
$tdataindschedrange[".printFields"][] = "ToDate";
$tdataindschedrange[".printFields"][] = "SchedType";
$tdataindschedrange[".printFields"][] = "SchedBy";
$tdataindschedrange[".printFields"][] = "RestDays";
$tdataindschedrange[".printFields"][] = "PreLogMins";
$tdataindschedrange[".printFields"][] = "TimeIn";
$tdataindschedrange[".printFields"][] = "TimeOut";
$tdataindschedrange[".printFields"][] = "LunchBreakTimeFrom";
$tdataindschedrange[".printFields"][] = "LunchBreakTimeTo";
$tdataindschedrange[".printFields"][] = "MinsPerDay";
$tdataindschedrange[".printFields"][] = "FirstHalfMins";
$tdataindschedrange[".printFields"][] = "BreakMins";
$tdataindschedrange[".printFields"][] = "SecondHalfMins";
$tdataindschedrange[".printFields"][] = "Posted";
$tdataindschedrange[".printFields"][] = "EmployeeID";


//	IScRID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IScRID";
	$fdata["GoodName"] = "IScRID";
	$fdata["ownerTable"] = "indschedrange";
	$fdata["Label"] = GetFieldLabel("indschedrange","IScRID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "IScRID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IScRID";

	
	
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
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




	$tdataindschedrange["IScRID"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "indschedrange";
	$fdata["Label"] = GetFieldLabel("indschedrange","FromDate");
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




	$tdataindschedrange["FromDate"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "indschedrange";
	$fdata["Label"] = GetFieldLabel("indschedrange","ToDate");
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




	$tdataindschedrange["ToDate"] = $fdata;
//	TimeIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TimeIn";
	$fdata["GoodName"] = "TimeIn";
	$fdata["ownerTable"] = "indschedrange";
	$fdata["Label"] = GetFieldLabel("indschedrange","TimeIn");
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




	$tdataindschedrange["TimeIn"] = $fdata;
//	TimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TimeOut";
	$fdata["GoodName"] = "TimeOut";
	$fdata["ownerTable"] = "indschedrange";
	$fdata["Label"] = GetFieldLabel("indschedrange","TimeOut");
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




	$tdataindschedrange["TimeOut"] = $fdata;
//	SchedType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SchedType";
	$fdata["GoodName"] = "SchedType";
	$fdata["ownerTable"] = "indschedrange";
	$fdata["Label"] = GetFieldLabel("indschedrange","SchedType");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataindschedrange["SchedType"] = $fdata;
//	MinsPerDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "MinsPerDay";
	$fdata["GoodName"] = "MinsPerDay";
	$fdata["ownerTable"] = "indschedrange";
	$fdata["Label"] = GetFieldLabel("indschedrange","MinsPerDay");
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




	$tdataindschedrange["MinsPerDay"] = $fdata;
//	BreakMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "BreakMins";
	$fdata["GoodName"] = "BreakMins";
	$fdata["ownerTable"] = "indschedrange";
	$fdata["Label"] = GetFieldLabel("indschedrange","BreakMins");
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




	$tdataindschedrange["BreakMins"] = $fdata;
//	Shift
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Shift";
	$fdata["GoodName"] = "Shift";
	$fdata["ownerTable"] = "indschedrange";
	$fdata["Label"] = GetFieldLabel("indschedrange","Shift");
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




	$tdataindschedrange["Shift"] = $fdata;
//	Posted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Posted";
	$fdata["GoodName"] = "Posted";
	$fdata["ownerTable"] = "indschedrange";
	$fdata["Label"] = GetFieldLabel("indschedrange","Posted");
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




	$tdataindschedrange["Posted"] = $fdata;
//	LunchBreakTimeFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "LunchBreakTimeFrom";
	$fdata["GoodName"] = "LunchBreakTimeFrom";
	$fdata["ownerTable"] = "indschedrange";
	$fdata["Label"] = GetFieldLabel("indschedrange","LunchBreakTimeFrom");
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




	$tdataindschedrange["LunchBreakTimeFrom"] = $fdata;
//	LunchBreakTimeTo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "LunchBreakTimeTo";
	$fdata["GoodName"] = "LunchBreakTimeTo";
	$fdata["ownerTable"] = "indschedrange";
	$fdata["Label"] = GetFieldLabel("indschedrange","LunchBreakTimeTo");
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




	$tdataindschedrange["LunchBreakTimeTo"] = $fdata;
//	FirstHalfMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "FirstHalfMins";
	$fdata["GoodName"] = "FirstHalfMins";
	$fdata["ownerTable"] = "indschedrange";
	$fdata["Label"] = GetFieldLabel("indschedrange","FirstHalfMins");
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




	$tdataindschedrange["FirstHalfMins"] = $fdata;
//	SecondHalfMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "SecondHalfMins";
	$fdata["GoodName"] = "SecondHalfMins";
	$fdata["ownerTable"] = "indschedrange";
	$fdata["Label"] = GetFieldLabel("indschedrange","SecondHalfMins");
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




	$tdataindschedrange["SecondHalfMins"] = $fdata;
//	RestDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "RestDays";
	$fdata["GoodName"] = "RestDays";
	$fdata["ownerTable"] = "indschedrange";
	$fdata["Label"] = GetFieldLabel("indschedrange","RestDays");
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




	$tdataindschedrange["RestDays"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "indschedrange";
	$fdata["Label"] = GetFieldLabel("indschedrange","EmployeeID");
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
	
	

	
	$edata["LookupOrderBy"] = "user_name";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 327;

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




	$tdataindschedrange["EmployeeID"] = $fdata;
//	SchedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "SchedBy";
	$fdata["GoodName"] = "SchedBy";
	$fdata["ownerTable"] = "indschedrange";
	$fdata["Label"] = GetFieldLabel("indschedrange","SchedBy");
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




	$tdataindschedrange["SchedBy"] = $fdata;
//	PreLogMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "PreLogMins";
	$fdata["GoodName"] = "PreLogMins";
	$fdata["ownerTable"] = "indschedrange";
	$fdata["Label"] = GetFieldLabel("indschedrange","PreLogMins");
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




	$tdataindschedrange["PreLogMins"] = $fdata;


$tables_data["indschedrange"]=&$tdataindschedrange;
$field_labels["indschedrange"] = &$fieldLabelsindschedrange;
$fieldToolTips["indschedrange"] = &$fieldToolTipsindschedrange;
$placeHolders["indschedrange"] = &$placeHoldersindschedrange;
$page_titles["indschedrange"] = &$pageTitlesindschedrange;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["indschedrange"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["indschedrange"] = array();


	
				$strOriginalDetailsTable="demo_user";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="demo_user";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "demo_user";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
			$masterParams["dispMasterInfo"][PAGE_EDIT] = true;
			$masterParams["dispMasterInfo"][PAGE_VIEW] = true;

	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["indschedrange"][0] = $masterParams;
				$masterTablesData["indschedrange"][0]["masterKeys"] = array();
	$masterTablesData["indschedrange"][0]["masterKeys"][]="EmployeeID";
				$masterTablesData["indschedrange"][0]["detailKeys"] = array();
	$masterTablesData["indschedrange"][0]["detailKeys"][]="EmployeeID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_indschedrange()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IScRID,  FromDate,  ToDate,  TimeIn,  TimeOut,  SchedType,  MinsPerDay,  BreakMins,  Shift,  Posted,  LunchBreakTimeFrom,  LunchBreakTimeTo,  FirstHalfMins,  SecondHalfMins,  RestDays,  EmployeeID,  SchedBy,  PreLogMins";
$proto0["m_strFrom"] = "FROM indschedrange";
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
	"m_strName" => "IScRID",
	"m_strTable" => "indschedrange",
	"m_srcTableName" => "indschedrange"
));

$proto6["m_sql"] = "IScRID";
$proto6["m_srcTableName"] = "indschedrange";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "indschedrange",
	"m_srcTableName" => "indschedrange"
));

$proto8["m_sql"] = "FromDate";
$proto8["m_srcTableName"] = "indschedrange";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "indschedrange",
	"m_srcTableName" => "indschedrange"
));

$proto10["m_sql"] = "ToDate";
$proto10["m_srcTableName"] = "indschedrange";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeIn",
	"m_strTable" => "indschedrange",
	"m_srcTableName" => "indschedrange"
));

$proto12["m_sql"] = "TimeIn";
$proto12["m_srcTableName"] = "indschedrange";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeOut",
	"m_strTable" => "indschedrange",
	"m_srcTableName" => "indschedrange"
));

$proto14["m_sql"] = "TimeOut";
$proto14["m_srcTableName"] = "indschedrange";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "SchedType",
	"m_strTable" => "indschedrange",
	"m_srcTableName" => "indschedrange"
));

$proto16["m_sql"] = "SchedType";
$proto16["m_srcTableName"] = "indschedrange";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "MinsPerDay",
	"m_strTable" => "indschedrange",
	"m_srcTableName" => "indschedrange"
));

$proto18["m_sql"] = "MinsPerDay";
$proto18["m_srcTableName"] = "indschedrange";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "BreakMins",
	"m_strTable" => "indschedrange",
	"m_srcTableName" => "indschedrange"
));

$proto20["m_sql"] = "BreakMins";
$proto20["m_srcTableName"] = "indschedrange";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Shift",
	"m_strTable" => "indschedrange",
	"m_srcTableName" => "indschedrange"
));

$proto22["m_sql"] = "Shift";
$proto22["m_srcTableName"] = "indschedrange";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Posted",
	"m_strTable" => "indschedrange",
	"m_srcTableName" => "indschedrange"
));

$proto24["m_sql"] = "Posted";
$proto24["m_srcTableName"] = "indschedrange";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "LunchBreakTimeFrom",
	"m_strTable" => "indschedrange",
	"m_srcTableName" => "indschedrange"
));

$proto26["m_sql"] = "LunchBreakTimeFrom";
$proto26["m_srcTableName"] = "indschedrange";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "LunchBreakTimeTo",
	"m_strTable" => "indschedrange",
	"m_srcTableName" => "indschedrange"
));

$proto28["m_sql"] = "LunchBreakTimeTo";
$proto28["m_srcTableName"] = "indschedrange";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "FirstHalfMins",
	"m_strTable" => "indschedrange",
	"m_srcTableName" => "indschedrange"
));

$proto30["m_sql"] = "FirstHalfMins";
$proto30["m_srcTableName"] = "indschedrange";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "SecondHalfMins",
	"m_strTable" => "indschedrange",
	"m_srcTableName" => "indschedrange"
));

$proto32["m_sql"] = "SecondHalfMins";
$proto32["m_srcTableName"] = "indschedrange";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "RestDays",
	"m_strTable" => "indschedrange",
	"m_srcTableName" => "indschedrange"
));

$proto34["m_sql"] = "RestDays";
$proto34["m_srcTableName"] = "indschedrange";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "indschedrange",
	"m_srcTableName" => "indschedrange"
));

$proto36["m_sql"] = "EmployeeID";
$proto36["m_srcTableName"] = "indschedrange";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "SchedBy",
	"m_strTable" => "indschedrange",
	"m_srcTableName" => "indschedrange"
));

$proto38["m_sql"] = "SchedBy";
$proto38["m_srcTableName"] = "indschedrange";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "PreLogMins",
	"m_strTable" => "indschedrange",
	"m_srcTableName" => "indschedrange"
));

$proto40["m_sql"] = "PreLogMins";
$proto40["m_srcTableName"] = "indschedrange";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "indschedrange";
$proto43["m_srcTableName"] = "indschedrange";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "IScRID";
$proto43["m_columns"][] = "FromDate";
$proto43["m_columns"][] = "ToDate";
$proto43["m_columns"][] = "TimeIn";
$proto43["m_columns"][] = "TimeOut";
$proto43["m_columns"][] = "StrictTimeOut";
$proto43["m_columns"][] = "StrictTimeIn";
$proto43["m_columns"][] = "SchedType";
$proto43["m_columns"][] = "CrossMidnight";
$proto43["m_columns"][] = "RecordOnFirstDay";
$proto43["m_columns"][] = "RecordOnSecondDay";
$proto43["m_columns"][] = "RestDay";
$proto43["m_columns"][] = "MinsPerDay";
$proto43["m_columns"][] = "BreakMins";
$proto43["m_columns"][] = "Shift";
$proto43["m_columns"][] = "Posted";
$proto43["m_columns"][] = "LunchBreakTimeFrom";
$proto43["m_columns"][] = "LunchBreakTimeTo";
$proto43["m_columns"][] = "ReqLogOutInOnBreak";
$proto43["m_columns"][] = "FirstHalfMins";
$proto43["m_columns"][] = "SecondHalfMins";
$proto43["m_columns"][] = "RestDays";
$proto43["m_columns"][] = "EmployeeID";
$proto43["m_columns"][] = "SchedBy";
$proto43["m_columns"][] = "PreLogMins";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "indschedrange";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "indschedrange";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="indschedrange";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_indschedrange = createSqlQuery_indschedrange();


	
		;

																		

$tdataindschedrange[".sqlquery"] = $queryData_indschedrange;

include_once(getabspath("include/indschedrange_events.php"));
$tableEvents["indschedrange"] = new eventclass_indschedrange;
$tdataindschedrange[".hasEvents"] = true;

?>