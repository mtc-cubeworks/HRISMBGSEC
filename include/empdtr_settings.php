<?php
require_once(getabspath("classes/cipherer.php"));




$tdataempdtr = array();
	$tdataempdtr[".truncateText"] = true;
	$tdataempdtr[".NumberOfChars"] = 80;
	$tdataempdtr[".ShortName"] = "empdtr";
	$tdataempdtr[".OwnerID"] = "EmployeeID";
	$tdataempdtr[".OriginalTable"] = "indschedule";

//	field labels
$fieldLabelsempdtr = array();
$fieldToolTipsempdtr = array();
$pageTitlesempdtr = array();
$placeHoldersempdtr = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsempdtr["English"] = array();
	$fieldToolTipsempdtr["English"] = array();
	$placeHoldersempdtr["English"] = array();
	$pageTitlesempdtr["English"] = array();
	$fieldLabelsempdtr["English"]["UserName"] = "Employee";
	$fieldToolTipsempdtr["English"]["UserName"] = "";
	$placeHoldersempdtr["English"]["UserName"] = "";
	$fieldLabelsempdtr["English"]["SDate"] = "SDate";
	$fieldToolTipsempdtr["English"]["SDate"] = "";
	$placeHoldersempdtr["English"]["SDate"] = "";
	$fieldLabelsempdtr["English"]["STimeIn"] = "STime In";
	$fieldToolTipsempdtr["English"]["STimeIn"] = "";
	$placeHoldersempdtr["English"]["STimeIn"] = "";
	$fieldLabelsempdtr["English"]["STimeOut"] = "STime Out";
	$fieldToolTipsempdtr["English"]["STimeOut"] = "";
	$placeHoldersempdtr["English"]["STimeOut"] = "";
	$fieldLabelsempdtr["English"]["WageType"] = "Wage Type";
	$fieldToolTipsempdtr["English"]["WageType"] = "";
	$placeHoldersempdtr["English"]["WageType"] = "";
	$fieldLabelsempdtr["English"]["Shift"] = "Shift";
	$fieldToolTipsempdtr["English"]["Shift"] = "";
	$placeHoldersempdtr["English"]["Shift"] = "";
	$fieldLabelsempdtr["English"]["Division"] = "Division";
	$fieldToolTipsempdtr["English"]["Division"] = "";
	$placeHoldersempdtr["English"]["Division"] = "";
	$fieldLabelsempdtr["English"]["TimeIn"] = "Time In";
	$fieldToolTipsempdtr["English"]["TimeIn"] = "";
	$placeHoldersempdtr["English"]["TimeIn"] = "";
	$fieldLabelsempdtr["English"]["TimeOut"] = "Time Out";
	$fieldToolTipsempdtr["English"]["TimeOut"] = "";
	$placeHoldersempdtr["English"]["TimeOut"] = "";
	$fieldLabelsempdtr["English"]["DayIs"] = "Day Is";
	$fieldToolTipsempdtr["English"]["DayIs"] = "";
	$placeHoldersempdtr["English"]["DayIs"] = "";
	$fieldLabelsempdtr["English"]["RestDay"] = "Rest Day";
	$fieldToolTipsempdtr["English"]["RestDay"] = "";
	$placeHoldersempdtr["English"]["RestDay"] = "";
	$fieldLabelsempdtr["English"]["Department"] = "Department";
	$fieldToolTipsempdtr["English"]["Department"] = "";
	$placeHoldersempdtr["English"]["Department"] = "";
	$fieldLabelsempdtr["English"]["Absent"] = "Absent";
	$fieldToolTipsempdtr["English"]["Absent"] = "";
	$placeHoldersempdtr["English"]["Absent"] = "";
	$fieldLabelsempdtr["English"]["LateMins"] = "Late Mins";
	$fieldToolTipsempdtr["English"]["LateMins"] = "";
	$placeHoldersempdtr["English"]["LateMins"] = "";
	$fieldLabelsempdtr["English"]["UndertimeMins"] = "Undertime Mins";
	$fieldToolTipsempdtr["English"]["UndertimeMins"] = "";
	$placeHoldersempdtr["English"]["UndertimeMins"] = "";
	$fieldLabelsempdtr["English"]["Mispunched"] = "Mispunched";
	$fieldToolTipsempdtr["English"]["Mispunched"] = "";
	$placeHoldersempdtr["English"]["Mispunched"] = "";
	$fieldLabelsempdtr["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipsempdtr["English"]["EmployeeID"] = "";
	$placeHoldersempdtr["English"]["EmployeeID"] = "";
	$fieldLabelsempdtr["English"]["AfterBreakLog"] = "Break In";
	$fieldToolTipsempdtr["English"]["AfterBreakLog"] = "";
	$placeHoldersempdtr["English"]["AfterBreakLog"] = "";
	$fieldLabelsempdtr["English"]["AfterBreakLogOut"] = "Break Out";
	$fieldToolTipsempdtr["English"]["AfterBreakLogOut"] = "";
	$placeHoldersempdtr["English"]["AfterBreakLogOut"] = "";
	$fieldLabelsempdtr["English"]["LunchBreakFrom"] = "SBreak Out";
	$fieldToolTipsempdtr["English"]["LunchBreakFrom"] = "";
	$placeHoldersempdtr["English"]["LunchBreakFrom"] = "";
	$fieldLabelsempdtr["English"]["LunchBreakTo"] = "SBreak In";
	$fieldToolTipsempdtr["English"]["LunchBreakTo"] = "";
	$placeHoldersempdtr["English"]["LunchBreakTo"] = "";
	if (count($fieldToolTipsempdtr["English"]))
		$tdataempdtr[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsempdtr[""] = array();
	$fieldToolTipsempdtr[""] = array();
	$placeHoldersempdtr[""] = array();
	$pageTitlesempdtr[""] = array();
	if (count($fieldToolTipsempdtr[""]))
		$tdataempdtr[".isUseToolTips"] = true;
}


	$tdataempdtr[".NCSearch"] = true;



$tdataempdtr[".shortTableName"] = "empdtr";
$tdataempdtr[".nSecOptions"] = 1;
$tdataempdtr[".recsPerRowPrint"] = 1;
$tdataempdtr[".mainTableOwnerID"] = "EmployeeID";
$tdataempdtr[".moveNext"] = 1;
$tdataempdtr[".entityType"] = 1;

$tdataempdtr[".strOriginalTableName"] = "indschedule";

	



$tdataempdtr[".showAddInPopup"] = false;

$tdataempdtr[".showEditInPopup"] = false;

$tdataempdtr[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataempdtr[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataempdtr[".fieldsForRegister"] = array();

$tdataempdtr[".listAjax"] = false;

	$tdataempdtr[".audit"] = false;

	$tdataempdtr[".locking"] = false;



$tdataempdtr[".list"] = true;



$tdataempdtr[".reorderRecordsByHeader"] = true;


$tdataempdtr[".exportFormatting"] = 2;
$tdataempdtr[".exportDelimiter"] = ",";
		


$tdataempdtr[".exportTo"] = true;

$tdataempdtr[".printFriendly"] = true;


$tdataempdtr[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataempdtr[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataempdtr[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataempdtr[".searchSaving"] = false;
//

$tdataempdtr[".showSearchPanel"] = true;
		$tdataempdtr[".flexibleSearch"] = true;

$tdataempdtr[".isUseAjaxSuggest"] = true;

$tdataempdtr[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																		

$tdataempdtr[".ajaxCodeSnippetAdded"] = false;

$tdataempdtr[".buttonsAdded"] = false;

$tdataempdtr[".addPageEvents"] = false;

// use timepicker for search panel
$tdataempdtr[".isUseTimeForSearch"] = true;



$tdataempdtr[".badgeColor"] = "d2af80";

$tdataempdtr[".detailsLinksOnList"] = "1";

$tdataempdtr[".allSearchFields"] = array();
$tdataempdtr[".filterFields"] = array();
$tdataempdtr[".requiredSearchFields"] = array();

$tdataempdtr[".allSearchFields"][] = "SDate";
		$tdataempdtr[".requiredSearchFields"][] = "SDate";


$tdataempdtr[".googleLikeFields"] = array();
$tdataempdtr[".googleLikeFields"][] = "SDate";

$tdataempdtr[".panelSearchFields"] = array();
$tdataempdtr[".searchPanelOptions"] = array();
$tdataempdtr[".panelSearchFields"][] = "SDate";
	
$tdataempdtr[".advSearchFields"] = array();
$tdataempdtr[".advSearchFields"][] = "SDate";

$tdataempdtr[".tableType"] = "list";

$tdataempdtr[".printerPageOrientation"] = 0;
$tdataempdtr[".nPrinterPageScale"] = 100;

$tdataempdtr[".nPrinterSplitRecords"] = 40;

$tdataempdtr[".nPrinterPDFSplitRecords"] = 40;



$tdataempdtr[".geocodingEnabled"] = false;





$tdataempdtr[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdataempdtr[".totalsFields"] = array();
$tdataempdtr[".totalsFields"][] = array(
	"fName" => "Absent",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataempdtr[".totalsFields"][] = array(
	"fName" => "LateMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataempdtr[".totalsFields"][] = array(
	"fName" => "UndertimeMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdataempdtr[".pageSize"] = 20;

$tdataempdtr[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY SDate DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataempdtr[".strOrderBy"] = $tstrOrderBy;

$tdataempdtr[".orderindexes"] = array();
	$tdataempdtr[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "SDate");


$tdataempdtr[".sqlHead"] = "SELECT UserName,  SDate,  STimeIn,  STimeOut,  Shift,  Division,  TimeIn,  TimeOut,  DayIs,  RestDay,  Department,  Absent,  LateMins,  UndertimeMins,  Mispunched,  WageType,  EmployeeID,  AfterBreakLog,  AfterBreakLogOut,  LunchBreakFrom,  LunchBreakTo";
$tdataempdtr[".sqlFrom"] = "FROM indschedule";
$tdataempdtr[".sqlWhereExpr"] = "";
$tdataempdtr[".sqlTail"] = "";


//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	
$arrEditTabs[] = array('tabId'=>'Time_Log1',
					   'tabName'=>"Time Log",
					   'nType'=>'0',
					   'nOrder'=>2,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
$arrEditTabs[] = array('tabId'=>'Lates_and_Undertime1',
					   'tabName'=>"Lates and Undertime",
					   'nType'=>'0',
					   'nOrder'=>21,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
$arrEditTabs[] = array('tabId'=>'Holiday1',
					   'tabName'=>"Holiday",
					   'nType'=>'0',
					   'nOrder'=>24,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
$arrEditTabs[] = array('tabId'=>'Night_Diff1',
					   'tabName'=>"Night Diff",
					   'nType'=>'0',
					   'nOrder'=>26,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
$arrEditTabs[] = array('tabId'=>'Overtime1',
					   'tabName'=>"Overtime",
					   'nType'=>'0',
					   'nOrder'=>28,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
$arrEditTabs[] = array('tabId'=>'Leaves1',
					   'tabName'=>"Leaves",
					   'nType'=>'0',
					   'nOrder'=>30,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
$arrEditTabs[] = array('tabId'=>'Sched_Setup1',
					   'tabName'=>"Sched Setup",
					   'nType'=>'0',
					   'nOrder'=>32,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataempdtr[".arrEditTabs"] = $arrEditTabs;


//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	
$arrAddTabs[] = array('tabId'=>'Time_Log1',
					  'tabName'=>"Time Log",
					  'nType'=>'0',
					  'nOrder'=>2,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
$arrAddTabs[] = array('tabId'=>'Lates_and_Undertime1',
					  'tabName'=>"Lates and Undertime",
					  'nType'=>'0',
					  'nOrder'=>21,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
$arrAddTabs[] = array('tabId'=>'Holiday1',
					  'tabName'=>"Holiday",
					  'nType'=>'0',
					  'nOrder'=>24,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
$arrAddTabs[] = array('tabId'=>'Night_Diff1',
					  'tabName'=>"Night Diff",
					  'nType'=>'0',
					  'nOrder'=>26,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
$arrAddTabs[] = array('tabId'=>'Overtime1',
					  'tabName'=>"Overtime",
					  'nType'=>'0',
					  'nOrder'=>28,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
$arrAddTabs[] = array('tabId'=>'Leaves1',
					  'tabName'=>"Leaves",
					  'nType'=>'0',
					  'nOrder'=>30,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
$arrAddTabs[] = array('tabId'=>'Sched_Setup1',
					  'tabName'=>"Sched Setup",
					  'nType'=>'0',
					  'nOrder'=>32,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdataempdtr[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	
$arrViewTabs[] = array('tabId'=>'Time_Log1',
					   'tabName'=>"Time Log",
					   'nType'=>'0',
					   'nOrder'=>2,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
$arrViewTabs[] = array('tabId'=>'Lates_and_Undertime1',
					   'tabName'=>"Lates and Undertime",
					   'nType'=>'0',
					   'nOrder'=>21,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
$arrViewTabs[] = array('tabId'=>'Holiday1',
					   'tabName'=>"Holiday",
					   'nType'=>'0',
					   'nOrder'=>24,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
$arrViewTabs[] = array('tabId'=>'Night_Diff1',
					   'tabName'=>"Night Diff",
					   'nType'=>'0',
					   'nOrder'=>26,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
$arrViewTabs[] = array('tabId'=>'Overtime1',
					   'tabName'=>"Overtime",
					   'nType'=>'0',
					   'nOrder'=>28,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
$arrViewTabs[] = array('tabId'=>'Leaves1',
					   'tabName'=>"Leaves",
					   'nType'=>'0',
					   'nOrder'=>30,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
$arrViewTabs[] = array('tabId'=>'Sched_Setup1',
					   'tabName'=>"Sched Setup",
					   'nType'=>'0',
					   'nOrder'=>32,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataempdtr[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataempdtr[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataempdtr[".arrGroupsPerPage"] = $arrGPP;

$tdataempdtr[".highlightSearchResults"] = true;

$tableKeysempdtr = array();
$tdataempdtr[".Keys"] = $tableKeysempdtr;

$tdataempdtr[".listFields"] = array();
$tdataempdtr[".listFields"][] = "EmployeeID";
$tdataempdtr[".listFields"][] = "UserName";
$tdataempdtr[".listFields"][] = "Division";
$tdataempdtr[".listFields"][] = "Department";
$tdataempdtr[".listFields"][] = "WageType";
$tdataempdtr[".listFields"][] = "SDate";
$tdataempdtr[".listFields"][] = "DayIs";
$tdataempdtr[".listFields"][] = "RestDay";
$tdataempdtr[".listFields"][] = "STimeIn";
$tdataempdtr[".listFields"][] = "STimeOut";
$tdataempdtr[".listFields"][] = "TimeIn";
$tdataempdtr[".listFields"][] = "TimeOut";
$tdataempdtr[".listFields"][] = "LunchBreakFrom";
$tdataempdtr[".listFields"][] = "LunchBreakTo";
$tdataempdtr[".listFields"][] = "AfterBreakLogOut";
$tdataempdtr[".listFields"][] = "AfterBreakLog";
$tdataempdtr[".listFields"][] = "Mispunched";
$tdataempdtr[".listFields"][] = "Absent";
$tdataempdtr[".listFields"][] = "LateMins";
$tdataempdtr[".listFields"][] = "UndertimeMins";
$tdataempdtr[".listFields"][] = "Shift";

$tdataempdtr[".hideMobileList"] = array();


$tdataempdtr[".viewFields"] = array();

$tdataempdtr[".addFields"] = array();

$tdataempdtr[".masterListFields"] = array();
$tdataempdtr[".masterListFields"][] = "EmployeeID";
$tdataempdtr[".masterListFields"][] = "UserName";
$tdataempdtr[".masterListFields"][] = "Division";
$tdataempdtr[".masterListFields"][] = "Department";
$tdataempdtr[".masterListFields"][] = "WageType";
$tdataempdtr[".masterListFields"][] = "SDate";
$tdataempdtr[".masterListFields"][] = "DayIs";
$tdataempdtr[".masterListFields"][] = "RestDay";
$tdataempdtr[".masterListFields"][] = "STimeIn";
$tdataempdtr[".masterListFields"][] = "STimeOut";
$tdataempdtr[".masterListFields"][] = "TimeIn";
$tdataempdtr[".masterListFields"][] = "TimeOut";
$tdataempdtr[".masterListFields"][] = "LunchBreakFrom";
$tdataempdtr[".masterListFields"][] = "LunchBreakTo";
$tdataempdtr[".masterListFields"][] = "AfterBreakLogOut";
$tdataempdtr[".masterListFields"][] = "AfterBreakLog";
$tdataempdtr[".masterListFields"][] = "Mispunched";
$tdataempdtr[".masterListFields"][] = "Absent";
$tdataempdtr[".masterListFields"][] = "LateMins";
$tdataempdtr[".masterListFields"][] = "UndertimeMins";
$tdataempdtr[".masterListFields"][] = "Shift";

$tdataempdtr[".inlineAddFields"] = array();

$tdataempdtr[".editFields"] = array();

$tdataempdtr[".inlineEditFields"] = array();

$tdataempdtr[".updateSelectedFields"] = array();


$tdataempdtr[".exportFields"] = array();
$tdataempdtr[".exportFields"][] = "EmployeeID";
$tdataempdtr[".exportFields"][] = "UserName";
$tdataempdtr[".exportFields"][] = "Division";
$tdataempdtr[".exportFields"][] = "Department";
$tdataempdtr[".exportFields"][] = "WageType";
$tdataempdtr[".exportFields"][] = "SDate";
$tdataempdtr[".exportFields"][] = "DayIs";
$tdataempdtr[".exportFields"][] = "RestDay";
$tdataempdtr[".exportFields"][] = "STimeIn";
$tdataempdtr[".exportFields"][] = "STimeOut";
$tdataempdtr[".exportFields"][] = "TimeIn";
$tdataempdtr[".exportFields"][] = "TimeOut";
$tdataempdtr[".exportFields"][] = "LunchBreakFrom";
$tdataempdtr[".exportFields"][] = "LunchBreakTo";
$tdataempdtr[".exportFields"][] = "AfterBreakLogOut";
$tdataempdtr[".exportFields"][] = "AfterBreakLog";
$tdataempdtr[".exportFields"][] = "Mispunched";
$tdataempdtr[".exportFields"][] = "Absent";
$tdataempdtr[".exportFields"][] = "LateMins";
$tdataempdtr[".exportFields"][] = "UndertimeMins";
$tdataempdtr[".exportFields"][] = "Shift";

$tdataempdtr[".importFields"] = array();

$tdataempdtr[".printFields"] = array();
$tdataempdtr[".printFields"][] = "EmployeeID";
$tdataempdtr[".printFields"][] = "UserName";
$tdataempdtr[".printFields"][] = "Division";
$tdataempdtr[".printFields"][] = "Department";
$tdataempdtr[".printFields"][] = "WageType";
$tdataempdtr[".printFields"][] = "SDate";
$tdataempdtr[".printFields"][] = "DayIs";
$tdataempdtr[".printFields"][] = "RestDay";
$tdataempdtr[".printFields"][] = "STimeIn";
$tdataempdtr[".printFields"][] = "STimeOut";
$tdataempdtr[".printFields"][] = "TimeIn";
$tdataempdtr[".printFields"][] = "TimeOut";
$tdataempdtr[".printFields"][] = "LunchBreakFrom";
$tdataempdtr[".printFields"][] = "LunchBreakTo";
$tdataempdtr[".printFields"][] = "AfterBreakLogOut";
$tdataempdtr[".printFields"][] = "AfterBreakLog";
$tdataempdtr[".printFields"][] = "Mispunched";
$tdataempdtr[".printFields"][] = "Absent";
$tdataempdtr[".printFields"][] = "LateMins";
$tdataempdtr[".printFields"][] = "UndertimeMins";
$tdataempdtr[".printFields"][] = "Shift";


//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empdtr","UserName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "UserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserName";

	
	
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

		$edata["controlWidth"] = 240;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataempdtr["UserName"] = $fdata;
//	SDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SDate";
	$fdata["GoodName"] = "SDate";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empdtr","SDate");
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
		$fdata["defaultSearchOption"] = "Between";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataempdtr["SDate"] = $fdata;
//	STimeIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "STimeIn";
	$fdata["GoodName"] = "STimeIn";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empdtr","STimeIn");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
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

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 130;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataempdtr["STimeIn"] = $fdata;
//	STimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "STimeOut";
	$fdata["GoodName"] = "STimeOut";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empdtr","STimeOut");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
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

	$edata = array("EditFormat" => "Time");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 130;

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








	$tdataempdtr["STimeOut"] = $fdata;
//	Shift
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Shift";
	$fdata["GoodName"] = "Shift";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empdtr","Shift");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
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
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "shID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Shift";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 50;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataempdtr["Shift"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empdtr","Division");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
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








	$tdataempdtr["Division"] = $fdata;
//	TimeIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TimeIn";
	$fdata["GoodName"] = "TimeIn";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empdtr","TimeIn");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
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

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	
		
	


	
	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataempdtr["TimeIn"] = $fdata;
//	TimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "TimeOut";
	$fdata["GoodName"] = "TimeOut";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empdtr","TimeOut");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
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

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	
		
	


	
	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataempdtr["TimeOut"] = $fdata;
//	DayIs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DayIs";
	$fdata["GoodName"] = "DayIs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empdtr","DayIs");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DayIs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DayIs";

	
	
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
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "dayID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "DayIs";
	
	

	
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








	$tdataempdtr["DayIs"] = $fdata;
//	RestDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "RestDay";
	$fdata["GoodName"] = "RestDay";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empdtr","RestDay");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RestDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RestDay";

	
	
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








	$tdataempdtr["RestDay"] = $fdata;
//	Department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Department";
	$fdata["GoodName"] = "Department";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empdtr","Department");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Department";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Department";

	
	
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
	$edata["LookupTable"] = "department";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DeID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Department";
	
	

	
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








	$tdataempdtr["Department"] = $fdata;
//	Absent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Absent";
	$fdata["GoodName"] = "Absent";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empdtr","Absent");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Absent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Absent";

	
	
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
		
		$edata["controlWidth"] = 64;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataempdtr["Absent"] = $fdata;
//	LateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "LateMins";
	$fdata["GoodName"] = "LateMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empdtr","LateMins");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LateMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LateMins";

	
	
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








	$tdataempdtr["LateMins"] = $fdata;
//	UndertimeMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "UndertimeMins";
	$fdata["GoodName"] = "UndertimeMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empdtr","UndertimeMins");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "UndertimeMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UndertimeMins";

	
	
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








	$tdataempdtr["UndertimeMins"] = $fdata;
//	Mispunched
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Mispunched";
	$fdata["GoodName"] = "Mispunched";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empdtr","Mispunched");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 64;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataempdtr["Mispunched"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empdtr","WageType");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "WageType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WageType";

	
	
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
	$edata["LookupTable"] = "emptype";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ECatID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "EmployeeType";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 120;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataempdtr["WageType"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empdtr","EmployeeID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
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

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 124;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataempdtr["EmployeeID"] = $fdata;
//	AfterBreakLog
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "AfterBreakLog";
	$fdata["GoodName"] = "AfterBreakLog";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empdtr","AfterBreakLog");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AfterBreakLog";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AfterBreakLog";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataempdtr["AfterBreakLog"] = $fdata;
//	AfterBreakLogOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "AfterBreakLogOut";
	$fdata["GoodName"] = "AfterBreakLogOut";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empdtr","AfterBreakLogOut");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AfterBreakLogOut";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AfterBreakLogOut";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataempdtr["AfterBreakLogOut"] = $fdata;
//	LunchBreakFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "LunchBreakFrom";
	$fdata["GoodName"] = "LunchBreakFrom";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empdtr","LunchBreakFrom");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LunchBreakFrom";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LunchBreakFrom";

	
	
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
		
		$edata["controlWidth"] = 200;

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








	$tdataempdtr["LunchBreakFrom"] = $fdata;
//	LunchBreakTo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "LunchBreakTo";
	$fdata["GoodName"] = "LunchBreakTo";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("empdtr","LunchBreakTo");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LunchBreakTo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LunchBreakTo";

	
	
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
		
		$edata["controlWidth"] = 200;

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








	$tdataempdtr["LunchBreakTo"] = $fdata;


$tables_data["empdtr"]=&$tdataempdtr;
$field_labels["empdtr"] = &$fieldLabelsempdtr;
$fieldToolTips["empdtr"] = &$fieldToolTipsempdtr;
$placeHolders["empdtr"] = &$placeHoldersempdtr;
$page_titles["empdtr"] = &$pageTitlesempdtr;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["empdtr"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["empdtr"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_empdtr()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "UserName,  SDate,  STimeIn,  STimeOut,  Shift,  Division,  TimeIn,  TimeOut,  DayIs,  RestDay,  Department,  Absent,  LateMins,  UndertimeMins,  Mispunched,  WageType,  EmployeeID,  AfterBreakLog,  AfterBreakLogOut,  LunchBreakFrom,  LunchBreakTo";
$proto0["m_strFrom"] = "FROM indschedule";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY SDate DESC";
	
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
	"m_strName" => "UserName",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empdtr"
));

$proto6["m_sql"] = "UserName";
$proto6["m_srcTableName"] = "empdtr";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SDate",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empdtr"
));

$proto8["m_sql"] = "SDate";
$proto8["m_srcTableName"] = "empdtr";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "STimeIn",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empdtr"
));

$proto10["m_sql"] = "STimeIn";
$proto10["m_srcTableName"] = "empdtr";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "STimeOut",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empdtr"
));

$proto12["m_sql"] = "STimeOut";
$proto12["m_srcTableName"] = "empdtr";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Shift",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empdtr"
));

$proto14["m_sql"] = "Shift";
$proto14["m_srcTableName"] = "empdtr";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empdtr"
));

$proto16["m_sql"] = "Division";
$proto16["m_srcTableName"] = "empdtr";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeIn",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empdtr"
));

$proto18["m_sql"] = "TimeIn";
$proto18["m_srcTableName"] = "empdtr";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeOut",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empdtr"
));

$proto20["m_sql"] = "TimeOut";
$proto20["m_srcTableName"] = "empdtr";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DayIs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empdtr"
));

$proto22["m_sql"] = "DayIs";
$proto22["m_srcTableName"] = "empdtr";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "RestDay",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empdtr"
));

$proto24["m_sql"] = "RestDay";
$proto24["m_srcTableName"] = "empdtr";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empdtr"
));

$proto26["m_sql"] = "Department";
$proto26["m_srcTableName"] = "empdtr";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Absent",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empdtr"
));

$proto28["m_sql"] = "Absent";
$proto28["m_srcTableName"] = "empdtr";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "LateMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empdtr"
));

$proto30["m_sql"] = "LateMins";
$proto30["m_srcTableName"] = "empdtr";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "UndertimeMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empdtr"
));

$proto32["m_sql"] = "UndertimeMins";
$proto32["m_srcTableName"] = "empdtr";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Mispunched",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empdtr"
));

$proto34["m_sql"] = "Mispunched";
$proto34["m_srcTableName"] = "empdtr";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "WageType",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empdtr"
));

$proto36["m_sql"] = "WageType";
$proto36["m_srcTableName"] = "empdtr";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empdtr"
));

$proto38["m_sql"] = "EmployeeID";
$proto38["m_srcTableName"] = "empdtr";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "AfterBreakLog",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empdtr"
));

$proto40["m_sql"] = "AfterBreakLog";
$proto40["m_srcTableName"] = "empdtr";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "AfterBreakLogOut",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empdtr"
));

$proto42["m_sql"] = "AfterBreakLogOut";
$proto42["m_srcTableName"] = "empdtr";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "LunchBreakFrom",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empdtr"
));

$proto44["m_sql"] = "LunchBreakFrom";
$proto44["m_srcTableName"] = "empdtr";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "LunchBreakTo",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empdtr"
));

$proto46["m_sql"] = "LunchBreakTo";
$proto46["m_srcTableName"] = "empdtr";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "indschedule";
$proto49["m_srcTableName"] = "empdtr";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "ScID";
$proto49["m_columns"][] = "UserName";
$proto49["m_columns"][] = "SDate";
$proto49["m_columns"][] = "STimeIn";
$proto49["m_columns"][] = "STimeOut";
$proto49["m_columns"][] = "SchedType";
$proto49["m_columns"][] = "CrossMidnight";
$proto49["m_columns"][] = "RecordOnFirstDay";
$proto49["m_columns"][] = "RecordOnSecondDay";
$proto49["m_columns"][] = "ApprovedOT";
$proto49["m_columns"][] = "AOTMins";
$proto49["m_columns"][] = "SRestDay";
$proto49["m_columns"][] = "WageType";
$proto49["m_columns"][] = "ApprovedNightDiff";
$proto49["m_columns"][] = "ANDiff";
$proto49["m_columns"][] = "EmployeeID";
$proto49["m_columns"][] = "MinsPerDay";
$proto49["m_columns"][] = "BreakMins";
$proto49["m_columns"][] = "Shift";
$proto49["m_columns"][] = "ApprovedRD";
$proto49["m_columns"][] = "RDMins";
$proto49["m_columns"][] = "ScRID";
$proto49["m_columns"][] = "LunchBreakFrom";
$proto49["m_columns"][] = "LunchBreakTo";
$proto49["m_columns"][] = "ReqLogOutInOnBreak";
$proto49["m_columns"][] = "FirstHalfMins";
$proto49["m_columns"][] = "SecondHalfMins";
$proto49["m_columns"][] = "NDMealAllowancePerShift";
$proto49["m_columns"][] = "NDMinimumHrs";
$proto49["m_columns"][] = "NDMealAllowance";
$proto49["m_columns"][] = "Division";
$proto49["m_columns"][] = "TimeIn";
$proto49["m_columns"][] = "TimeOut";
$proto49["m_columns"][] = "DayIs";
$proto49["m_columns"][] = "RestDay";
$proto49["m_columns"][] = "Schedx";
$proto49["m_columns"][] = "Department";
$proto49["m_columns"][] = "RegWD";
$proto49["m_columns"][] = "DWork";
$proto49["m_columns"][] = "Absent";
$proto49["m_columns"][] = "LateMins";
$proto49["m_columns"][] = "UndertimeMins";
$proto49["m_columns"][] = "RHolidayHrs";
$proto49["m_columns"][] = "SHolidayHrs";
$proto49["m_columns"][] = "CHolidayHrs";
$proto49["m_columns"][] = "ExcessHrs";
$proto49["m_columns"][] = "RegOTHrs";
$proto49["m_columns"][] = "RHOTHrs";
$proto49["m_columns"][] = "SHOTHrs";
$proto49["m_columns"][] = "CHOTHrs";
$proto49["m_columns"][] = "RDOTHrs";
$proto49["m_columns"][] = "NDHrs";
$proto49["m_columns"][] = "RDHrs";
$proto49["m_columns"][] = "RegNDHrs";
$proto49["m_columns"][] = "RHNDHrs";
$proto49["m_columns"][] = "SHNDHrs";
$proto49["m_columns"][] = "CHNDHrs";
$proto49["m_columns"][] = "RDNDHrs";
$proto49["m_columns"][] = "VLDay";
$proto49["m_columns"][] = "SLDay";
$proto49["m_columns"][] = "ELDay";
$proto49["m_columns"][] = "PLDay";
$proto49["m_columns"][] = "TrODay";
$proto49["m_columns"][] = "HolidayType";
$proto49["m_columns"][] = "Mispunched";
$proto49["m_columns"][] = "Holiday1stHalf";
$proto49["m_columns"][] = "Holiday2ndHalf";
$proto49["m_columns"][] = "AfterBreakLog";
$proto49["m_columns"][] = "BreakLateMins";
$proto49["m_columns"][] = "TotLateMins";
$proto49["m_columns"][] = "LatePenaltyMins";
$proto49["m_columns"][] = "Employer";
$proto49["m_columns"][] = "AfterBreakLogOut";
$proto49["m_columns"][] = "LateFixPenalty";
$proto49["m_columns"][] = "Locked";
$proto49["m_columns"][] = "IScRID";
$proto49["m_columns"][] = "PreLogMins";
$proto49["m_columns"][] = "IncludeBreakLate";
$proto49["m_columns"][] = "GracePeriodMins";
$proto49["m_columns"][] = "WithAddBreaks";
$proto49["m_columns"][] = "ANDOTMins";
$proto49["m_columns"][] = "RegNDOTHrs";
$proto49["m_columns"][] = "RHNDOTHrs";
$proto49["m_columns"][] = "SHNDOTHrs";
$proto49["m_columns"][] = "CHNDOTHrs";
$proto49["m_columns"][] = "RDNDOTHrs";
$proto49["m_columns"][] = "DH";
$proto49["m_columns"][] = "DHRD";
$proto49["m_columns"][] = "DHOT";
$proto49["m_columns"][] = "DHRDOT";
$proto49["m_columns"][] = "SHRDND";
$proto49["m_columns"][] = "RHRDND";
$proto49["m_columns"][] = "SHRDNDOT";
$proto49["m_columns"][] = "RHRDNDOT";
$proto49["m_columns"][] = "DHND";
$proto49["m_columns"][] = "DHRDND";
$proto49["m_columns"][] = "DHNDOT";
$proto49["m_columns"][] = "DHRDNDOT";
$proto49["m_columns"][] = "RHRDOT";
$proto49["m_columns"][] = "SHRDOT";
$proto49["m_columns"][] = "RegND";
$proto49["m_columns"][] = "RegRD";
$proto49["m_columns"][] = "SHOTD";
$proto49["m_columns"][] = "SHRDOTD";
$proto49["m_columns"][] = "NDOT";
$proto49["m_columns"][] = "RHRD";
$proto49["m_columns"][] = "SHRD";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "indschedule";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "empdtr";
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
	"m_strName" => "SDate",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "empdtr"
));

$proto52["m_column"]=$obj;
$proto52["m_bAsc"] = 0;
$proto52["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto52);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="empdtr";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_empdtr = createSqlQuery_empdtr();


	
		;

																					

$tdataempdtr[".sqlquery"] = $queryData_empdtr;

include_once(getabspath("include/empdtr_events.php"));
$tableEvents["empdtr"] = new eventclass_empdtr;
$tdataempdtr[".hasEvents"] = true;

?>