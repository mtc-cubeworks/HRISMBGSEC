<?php
require_once(getabspath("classes/cipherer.php"));




$tdataindschedule1 = array();
	$tdataindschedule1[".truncateText"] = true;
	$tdataindschedule1[".NumberOfChars"] = 80;
	$tdataindschedule1[".ShortName"] = "indschedule1";
	$tdataindschedule1[".OwnerID"] = "";
	$tdataindschedule1[".OriginalTable"] = "indschedule";

//	field labels
$fieldLabelsindschedule1 = array();
$fieldToolTipsindschedule1 = array();
$pageTitlesindschedule1 = array();
$placeHoldersindschedule1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsindschedule1["English"] = array();
	$fieldToolTipsindschedule1["English"] = array();
	$placeHoldersindschedule1["English"] = array();
	$pageTitlesindschedule1["English"] = array();
	$fieldLabelsindschedule1["English"]["ScID"] = "Sc ID";
	$fieldToolTipsindschedule1["English"]["ScID"] = "";
	$placeHoldersindschedule1["English"]["ScID"] = "";
	$fieldLabelsindschedule1["English"]["ApprovedOT"] = "Approved OT";
	$fieldToolTipsindschedule1["English"]["ApprovedOT"] = "";
	$placeHoldersindschedule1["English"]["ApprovedOT"] = "";
	$fieldLabelsindschedule1["English"]["AOTMins"] = "OT mins";
	$fieldToolTipsindschedule1["English"]["AOTMins"] = "";
	$placeHoldersindschedule1["English"]["AOTMins"] = "";
	$fieldLabelsindschedule1["English"]["ApprovedNightDiff"] = "Approved ND";
	$fieldToolTipsindschedule1["English"]["ApprovedNightDiff"] = "";
	$placeHoldersindschedule1["English"]["ApprovedNightDiff"] = "";
	$fieldLabelsindschedule1["English"]["ANDiff"] = "ND mins";
	$fieldToolTipsindschedule1["English"]["ANDiff"] = "";
	$placeHoldersindschedule1["English"]["ANDiff"] = "";
	$fieldLabelsindschedule1["English"]["ApprovedRD"] = "Approved Rest Day";
	$fieldToolTipsindschedule1["English"]["ApprovedRD"] = "";
	$placeHoldersindschedule1["English"]["ApprovedRD"] = "";
	$fieldLabelsindschedule1["English"]["RDMins"] = "RD mins";
	$fieldToolTipsindschedule1["English"]["RDMins"] = "";
	$placeHoldersindschedule1["English"]["RDMins"] = "";
	$fieldLabelsindschedule1["English"]["TempOT"] = "Temp OT";
	$fieldToolTipsindschedule1["English"]["TempOT"] = "";
	$placeHoldersindschedule1["English"]["TempOT"] = "";
	$fieldLabelsindschedule1["English"]["NDMins"] = "Temp ND";
	$fieldToolTipsindschedule1["English"]["NDMins"] = "";
	$placeHoldersindschedule1["English"]["NDMins"] = "";
	$fieldLabelsindschedule1["English"]["WorkMinsNet"] = "Working Rest Day";
	$fieldToolTipsindschedule1["English"]["WorkMinsNet"] = "";
	$placeHoldersindschedule1["English"]["WorkMinsNet"] = "";
	$fieldLabelsindschedule1["English"]["FiledOT"] = "Filed OT";
	$fieldToolTipsindschedule1["English"]["FiledOT"] = "";
	$placeHoldersindschedule1["English"]["FiledOT"] = "";
	$fieldLabelsindschedule1["English"]["NDMealAllowancePerShift"] = "NDMeal Allowance Per Shift";
	$fieldToolTipsindschedule1["English"]["NDMealAllowancePerShift"] = "";
	$placeHoldersindschedule1["English"]["NDMealAllowancePerShift"] = "";
	$fieldLabelsindschedule1["English"]["NDMinimumHrs"] = "NDMinimum Hrs";
	$fieldToolTipsindschedule1["English"]["NDMinimumHrs"] = "";
	$placeHoldersindschedule1["English"]["NDMinimumHrs"] = "";
	$fieldLabelsindschedule1["English"]["NDMealAllowance"] = "NDMeal Allowance";
	$fieldToolTipsindschedule1["English"]["NDMealAllowance"] = "";
	$placeHoldersindschedule1["English"]["NDMealAllowance"] = "";
	$fieldLabelsindschedule1["English"]["SDate"] = "SDate";
	$fieldToolTipsindschedule1["English"]["SDate"] = "";
	$placeHoldersindschedule1["English"]["SDate"] = "";
	$fieldLabelsindschedule1["English"]["UserName"] = "Employee";
	$fieldToolTipsindschedule1["English"]["UserName"] = "";
	$placeHoldersindschedule1["English"]["UserName"] = "";
	$fieldLabelsindschedule1["English"]["ANDOTMins"] = "ND-OT mins";
	$fieldToolTipsindschedule1["English"]["ANDOTMins"] = "";
	$placeHoldersindschedule1["English"]["ANDOTMins"] = "";
	if (count($fieldToolTipsindschedule1["English"]))
		$tdataindschedule1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsindschedule1[""] = array();
	$fieldToolTipsindschedule1[""] = array();
	$placeHoldersindschedule1[""] = array();
	$pageTitlesindschedule1[""] = array();
	$fieldLabelsindschedule1[""]["ANDOTMins"] = "ANDOTMins";
	$fieldToolTipsindschedule1[""]["ANDOTMins"] = "";
	$placeHoldersindschedule1[""]["ANDOTMins"] = "";
	if (count($fieldToolTipsindschedule1[""]))
		$tdataindschedule1[".isUseToolTips"] = true;
}


	$tdataindschedule1[".NCSearch"] = true;



$tdataindschedule1[".shortTableName"] = "indschedule1";
$tdataindschedule1[".nSecOptions"] = 0;
$tdataindschedule1[".recsPerRowPrint"] = 1;
$tdataindschedule1[".mainTableOwnerID"] = "";
$tdataindschedule1[".moveNext"] = 1;
$tdataindschedule1[".entityType"] = 1;

$tdataindschedule1[".strOriginalTableName"] = "indschedule";

	



$tdataindschedule1[".showAddInPopup"] = false;

$tdataindschedule1[".showEditInPopup"] = false;

$tdataindschedule1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataindschedule1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataindschedule1[".fieldsForRegister"] = array();

$tdataindschedule1[".listAjax"] = false;

	$tdataindschedule1[".audit"] = false;

	$tdataindschedule1[".locking"] = false;

$tdataindschedule1[".edit"] = true;
$tdataindschedule1[".afterEditAction"] = 1;
$tdataindschedule1[".closePopupAfterEdit"] = 1;
$tdataindschedule1[".afterEditActionDetTable"] = "";


$tdataindschedule1[".list"] = true;

$tdataindschedule1[".inlineEdit"] = true;

$tdataindschedule1[".updateSelected"] = true;

$tdataindschedule1[".reorderRecordsByHeader"] = true;


$tdataindschedule1[".exportFormatting"] = 2;
$tdataindschedule1[".exportDelimiter"] = ",";
		
$tdataindschedule1[".view"] = true;


$tdataindschedule1[".exportTo"] = true;

$tdataindschedule1[".printFriendly"] = true;


$tdataindschedule1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataindschedule1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataindschedule1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataindschedule1[".searchSaving"] = false;
//

$tdataindschedule1[".showSearchPanel"] = true;
		$tdataindschedule1[".flexibleSearch"] = true;

$tdataindschedule1[".isUseAjaxSuggest"] = true;

$tdataindschedule1[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																										

$tdataindschedule1[".ajaxCodeSnippetAdded"] = false;

$tdataindschedule1[".buttonsAdded"] = false;

$tdataindschedule1[".addPageEvents"] = true;

// use timepicker for search panel
$tdataindschedule1[".isUseTimeForSearch"] = false;



$tdataindschedule1[".badgeColor"] = "3cb371";

$tdataindschedule1[".detailsLinksOnList"] = "1";

$tdataindschedule1[".allSearchFields"] = array();
$tdataindschedule1[".filterFields"] = array();
$tdataindschedule1[".requiredSearchFields"] = array();

$tdataindschedule1[".allSearchFields"][] = "SDate";
	$tdataindschedule1[".allSearchFields"][] = "ScID";
	$tdataindschedule1[".allSearchFields"][] = "UserName";
	$tdataindschedule1[".allSearchFields"][] = "TempOT";
	$tdataindschedule1[".allSearchFields"][] = "FiledOT";
	$tdataindschedule1[".allSearchFields"][] = "ApprovedOT";
	$tdataindschedule1[".allSearchFields"][] = "AOTMins";
	$tdataindschedule1[".allSearchFields"][] = "NDMins";
	$tdataindschedule1[".allSearchFields"][] = "ApprovedNightDiff";
	$tdataindschedule1[".allSearchFields"][] = "ANDiff";
	$tdataindschedule1[".allSearchFields"][] = "ANDOTMins";
	$tdataindschedule1[".allSearchFields"][] = "NDMealAllowancePerShift";
	$tdataindschedule1[".allSearchFields"][] = "NDMinimumHrs";
	$tdataindschedule1[".allSearchFields"][] = "NDMealAllowance";
	$tdataindschedule1[".allSearchFields"][] = "WorkMinsNet";
	$tdataindschedule1[".allSearchFields"][] = "ApprovedRD";
	$tdataindschedule1[".allSearchFields"][] = "RDMins";
	

$tdataindschedule1[".googleLikeFields"] = array();
$tdataindschedule1[".googleLikeFields"][] = "ScID";
$tdataindschedule1[".googleLikeFields"][] = "ApprovedOT";
$tdataindschedule1[".googleLikeFields"][] = "AOTMins";
$tdataindschedule1[".googleLikeFields"][] = "ApprovedNightDiff";
$tdataindschedule1[".googleLikeFields"][] = "ANDiff";
$tdataindschedule1[".googleLikeFields"][] = "ApprovedRD";
$tdataindschedule1[".googleLikeFields"][] = "RDMins";
$tdataindschedule1[".googleLikeFields"][] = "TempOT";
$tdataindschedule1[".googleLikeFields"][] = "NDMins";
$tdataindschedule1[".googleLikeFields"][] = "WorkMinsNet";
$tdataindschedule1[".googleLikeFields"][] = "FiledOT";
$tdataindschedule1[".googleLikeFields"][] = "NDMealAllowancePerShift";
$tdataindschedule1[".googleLikeFields"][] = "NDMinimumHrs";
$tdataindschedule1[".googleLikeFields"][] = "NDMealAllowance";
$tdataindschedule1[".googleLikeFields"][] = "SDate";
$tdataindschedule1[".googleLikeFields"][] = "UserName";
$tdataindschedule1[".googleLikeFields"][] = "ANDOTMins";


$tdataindschedule1[".advSearchFields"] = array();
$tdataindschedule1[".advSearchFields"][] = "SDate";
$tdataindschedule1[".advSearchFields"][] = "ScID";
$tdataindschedule1[".advSearchFields"][] = "UserName";
$tdataindschedule1[".advSearchFields"][] = "TempOT";
$tdataindschedule1[".advSearchFields"][] = "FiledOT";
$tdataindschedule1[".advSearchFields"][] = "ApprovedOT";
$tdataindschedule1[".advSearchFields"][] = "AOTMins";
$tdataindschedule1[".advSearchFields"][] = "NDMins";
$tdataindschedule1[".advSearchFields"][] = "ApprovedNightDiff";
$tdataindschedule1[".advSearchFields"][] = "ANDiff";
$tdataindschedule1[".advSearchFields"][] = "ANDOTMins";
$tdataindschedule1[".advSearchFields"][] = "NDMealAllowancePerShift";
$tdataindschedule1[".advSearchFields"][] = "NDMinimumHrs";
$tdataindschedule1[".advSearchFields"][] = "NDMealAllowance";
$tdataindschedule1[".advSearchFields"][] = "WorkMinsNet";
$tdataindschedule1[".advSearchFields"][] = "ApprovedRD";
$tdataindschedule1[".advSearchFields"][] = "RDMins";

$tdataindschedule1[".tableType"] = "list";

$tdataindschedule1[".printerPageOrientation"] = 0;
$tdataindschedule1[".nPrinterPageScale"] = 100;

$tdataindschedule1[".nPrinterSplitRecords"] = 40;

$tdataindschedule1[".nPrinterPDFSplitRecords"] = 40;



$tdataindschedule1[".geocodingEnabled"] = false;





$tdataindschedule1[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataindschedule1[".pageSize"] = 20;

$tdataindschedule1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataindschedule1[".strOrderBy"] = $tstrOrderBy;

$tdataindschedule1[".orderindexes"] = array();

$tdataindschedule1[".sqlHead"] = "SELECT indschedule.ScID,  indschedule.ApprovedOT,  indschedule.AOTMins,  indschedule.ApprovedNightDiff,  indschedule.ANDiff,  indschedule.ApprovedRD,  indschedule.RDMins,  forapp.TempOT,  forapp.NDMins,  forapp.WorkMinsNet,  forapp.FiledOT,  indschedule.NDMealAllowancePerShift,  indschedule.NDMinimumHrs,  indschedule.NDMealAllowance,  indschedule.SDate,  indschedule.UserName,  indschedule.ANDOTMins";
$tdataindschedule1[".sqlFrom"] = "FROM indschedule  INNER JOIN forapp ON indschedule.ScID = forapp.ScID";
$tdataindschedule1[".sqlWhereExpr"] = "";
$tdataindschedule1[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataindschedule1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataindschedule1[".arrGroupsPerPage"] = $arrGPP;

$tdataindschedule1[".highlightSearchResults"] = true;

$tableKeysindschedule1 = array();
$tableKeysindschedule1[] = "ScID";
$tdataindschedule1[".Keys"] = $tableKeysindschedule1;

$tdataindschedule1[".listFields"] = array();
$tdataindschedule1[".listFields"][] = "SDate";
$tdataindschedule1[".listFields"][] = "ScID";
$tdataindschedule1[".listFields"][] = "UserName";
$tdataindschedule1[".listFields"][] = "TempOT";
$tdataindschedule1[".listFields"][] = "FiledOT";
$tdataindschedule1[".listFields"][] = "ApprovedOT";
$tdataindschedule1[".listFields"][] = "AOTMins";
$tdataindschedule1[".listFields"][] = "NDMins";
$tdataindschedule1[".listFields"][] = "ApprovedNightDiff";
$tdataindschedule1[".listFields"][] = "ANDiff";
$tdataindschedule1[".listFields"][] = "ANDOTMins";
$tdataindschedule1[".listFields"][] = "NDMealAllowancePerShift";
$tdataindschedule1[".listFields"][] = "NDMinimumHrs";
$tdataindschedule1[".listFields"][] = "NDMealAllowance";
$tdataindschedule1[".listFields"][] = "WorkMinsNet";
$tdataindschedule1[".listFields"][] = "ApprovedRD";
$tdataindschedule1[".listFields"][] = "RDMins";

$tdataindschedule1[".hideMobileList"] = array();


$tdataindschedule1[".viewFields"] = array();
$tdataindschedule1[".viewFields"][] = "SDate";
$tdataindschedule1[".viewFields"][] = "ScID";
$tdataindschedule1[".viewFields"][] = "UserName";
$tdataindschedule1[".viewFields"][] = "TempOT";
$tdataindschedule1[".viewFields"][] = "FiledOT";
$tdataindschedule1[".viewFields"][] = "ApprovedOT";
$tdataindschedule1[".viewFields"][] = "AOTMins";
$tdataindschedule1[".viewFields"][] = "NDMins";
$tdataindschedule1[".viewFields"][] = "ApprovedNightDiff";
$tdataindschedule1[".viewFields"][] = "ANDiff";
$tdataindschedule1[".viewFields"][] = "ANDOTMins";
$tdataindschedule1[".viewFields"][] = "NDMealAllowancePerShift";
$tdataindschedule1[".viewFields"][] = "NDMinimumHrs";
$tdataindschedule1[".viewFields"][] = "NDMealAllowance";
$tdataindschedule1[".viewFields"][] = "WorkMinsNet";
$tdataindschedule1[".viewFields"][] = "ApprovedRD";
$tdataindschedule1[".viewFields"][] = "RDMins";

$tdataindschedule1[".addFields"] = array();

$tdataindschedule1[".masterListFields"] = array();
$tdataindschedule1[".masterListFields"][] = "SDate";
$tdataindschedule1[".masterListFields"][] = "ScID";
$tdataindschedule1[".masterListFields"][] = "UserName";
$tdataindschedule1[".masterListFields"][] = "TempOT";
$tdataindschedule1[".masterListFields"][] = "FiledOT";
$tdataindschedule1[".masterListFields"][] = "ApprovedOT";
$tdataindschedule1[".masterListFields"][] = "AOTMins";
$tdataindschedule1[".masterListFields"][] = "NDMins";
$tdataindschedule1[".masterListFields"][] = "ApprovedNightDiff";
$tdataindschedule1[".masterListFields"][] = "ANDiff";
$tdataindschedule1[".masterListFields"][] = "ANDOTMins";
$tdataindschedule1[".masterListFields"][] = "NDMealAllowancePerShift";
$tdataindschedule1[".masterListFields"][] = "NDMinimumHrs";
$tdataindschedule1[".masterListFields"][] = "NDMealAllowance";
$tdataindschedule1[".masterListFields"][] = "WorkMinsNet";
$tdataindschedule1[".masterListFields"][] = "ApprovedRD";
$tdataindschedule1[".masterListFields"][] = "RDMins";

$tdataindschedule1[".inlineAddFields"] = array();

$tdataindschedule1[".editFields"] = array();
$tdataindschedule1[".editFields"][] = "SDate";
$tdataindschedule1[".editFields"][] = "UserName";
$tdataindschedule1[".editFields"][] = "TempOT";
$tdataindschedule1[".editFields"][] = "FiledOT";
$tdataindschedule1[".editFields"][] = "ApprovedOT";
$tdataindschedule1[".editFields"][] = "AOTMins";
$tdataindschedule1[".editFields"][] = "NDMins";
$tdataindschedule1[".editFields"][] = "ApprovedNightDiff";
$tdataindschedule1[".editFields"][] = "ANDiff";
$tdataindschedule1[".editFields"][] = "ANDOTMins";
$tdataindschedule1[".editFields"][] = "NDMealAllowancePerShift";
$tdataindschedule1[".editFields"][] = "NDMinimumHrs";
$tdataindschedule1[".editFields"][] = "NDMealAllowance";
$tdataindschedule1[".editFields"][] = "WorkMinsNet";
$tdataindschedule1[".editFields"][] = "ApprovedRD";
$tdataindschedule1[".editFields"][] = "RDMins";

$tdataindschedule1[".inlineEditFields"] = array();
$tdataindschedule1[".inlineEditFields"][] = "SDate";
$tdataindschedule1[".inlineEditFields"][] = "UserName";
$tdataindschedule1[".inlineEditFields"][] = "TempOT";
$tdataindschedule1[".inlineEditFields"][] = "FiledOT";
$tdataindschedule1[".inlineEditFields"][] = "ApprovedOT";
$tdataindschedule1[".inlineEditFields"][] = "AOTMins";
$tdataindschedule1[".inlineEditFields"][] = "NDMins";
$tdataindschedule1[".inlineEditFields"][] = "ApprovedNightDiff";
$tdataindschedule1[".inlineEditFields"][] = "ANDiff";
$tdataindschedule1[".inlineEditFields"][] = "ANDOTMins";
$tdataindschedule1[".inlineEditFields"][] = "NDMealAllowancePerShift";
$tdataindschedule1[".inlineEditFields"][] = "NDMinimumHrs";
$tdataindschedule1[".inlineEditFields"][] = "NDMealAllowance";
$tdataindschedule1[".inlineEditFields"][] = "WorkMinsNet";
$tdataindschedule1[".inlineEditFields"][] = "ApprovedRD";
$tdataindschedule1[".inlineEditFields"][] = "RDMins";

$tdataindschedule1[".updateSelectedFields"] = array();
$tdataindschedule1[".updateSelectedFields"][] = "SDate";
$tdataindschedule1[".updateSelectedFields"][] = "UserName";
$tdataindschedule1[".updateSelectedFields"][] = "FiledOT";
$tdataindschedule1[".updateSelectedFields"][] = "ApprovedOT";
$tdataindschedule1[".updateSelectedFields"][] = "AOTMins";
$tdataindschedule1[".updateSelectedFields"][] = "NDMins";
$tdataindschedule1[".updateSelectedFields"][] = "ApprovedNightDiff";
$tdataindschedule1[".updateSelectedFields"][] = "ANDiff";
$tdataindschedule1[".updateSelectedFields"][] = "NDMealAllowancePerShift";
$tdataindschedule1[".updateSelectedFields"][] = "NDMinimumHrs";
$tdataindschedule1[".updateSelectedFields"][] = "NDMealAllowance";
$tdataindschedule1[".updateSelectedFields"][] = "WorkMinsNet";
$tdataindschedule1[".updateSelectedFields"][] = "ApprovedRD";
$tdataindschedule1[".updateSelectedFields"][] = "RDMins";


$tdataindschedule1[".exportFields"] = array();
$tdataindschedule1[".exportFields"][] = "SDate";
$tdataindschedule1[".exportFields"][] = "ScID";
$tdataindschedule1[".exportFields"][] = "UserName";
$tdataindschedule1[".exportFields"][] = "TempOT";
$tdataindschedule1[".exportFields"][] = "FiledOT";
$tdataindschedule1[".exportFields"][] = "ApprovedOT";
$tdataindschedule1[".exportFields"][] = "AOTMins";
$tdataindschedule1[".exportFields"][] = "NDMins";
$tdataindschedule1[".exportFields"][] = "ApprovedNightDiff";
$tdataindschedule1[".exportFields"][] = "ANDiff";
$tdataindschedule1[".exportFields"][] = "ANDOTMins";
$tdataindschedule1[".exportFields"][] = "NDMealAllowancePerShift";
$tdataindschedule1[".exportFields"][] = "NDMinimumHrs";
$tdataindschedule1[".exportFields"][] = "NDMealAllowance";
$tdataindschedule1[".exportFields"][] = "WorkMinsNet";
$tdataindschedule1[".exportFields"][] = "ApprovedRD";
$tdataindschedule1[".exportFields"][] = "RDMins";

$tdataindschedule1[".importFields"] = array();

$tdataindschedule1[".printFields"] = array();
$tdataindschedule1[".printFields"][] = "SDate";
$tdataindschedule1[".printFields"][] = "ScID";
$tdataindschedule1[".printFields"][] = "UserName";
$tdataindschedule1[".printFields"][] = "TempOT";
$tdataindschedule1[".printFields"][] = "FiledOT";
$tdataindschedule1[".printFields"][] = "ApprovedOT";
$tdataindschedule1[".printFields"][] = "AOTMins";
$tdataindschedule1[".printFields"][] = "NDMins";
$tdataindschedule1[".printFields"][] = "ApprovedNightDiff";
$tdataindschedule1[".printFields"][] = "ANDiff";
$tdataindschedule1[".printFields"][] = "ANDOTMins";
$tdataindschedule1[".printFields"][] = "NDMealAllowancePerShift";
$tdataindschedule1[".printFields"][] = "NDMinimumHrs";
$tdataindschedule1[".printFields"][] = "NDMealAllowance";
$tdataindschedule1[".printFields"][] = "WorkMinsNet";
$tdataindschedule1[".printFields"][] = "ApprovedRD";
$tdataindschedule1[".printFields"][] = "RDMins";


//	ScID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ScID";
	$fdata["GoodName"] = "ScID";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule1","ScID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ScID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.ScID";

	
	
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




	$tdataindschedule1["ScID"] = $fdata;
//	ApprovedOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ApprovedOT";
	$fdata["GoodName"] = "ApprovedOT";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule1","ApprovedOT");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ApprovedOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.ApprovedOT";

	
	
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




	$tdataindschedule1["ApprovedOT"] = $fdata;
//	AOTMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AOTMins";
	$fdata["GoodName"] = "AOTMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule1","AOTMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AOTMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.AOTMins";

	
	
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
		
		$edata["controlWidth"] = 80;

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




	$tdataindschedule1["AOTMins"] = $fdata;
//	ApprovedNightDiff
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ApprovedNightDiff";
	$fdata["GoodName"] = "ApprovedNightDiff";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule1","ApprovedNightDiff");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ApprovedNightDiff";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.ApprovedNightDiff";

	
	
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




	$tdataindschedule1["ApprovedNightDiff"] = $fdata;
//	ANDiff
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ANDiff";
	$fdata["GoodName"] = "ANDiff";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule1","ANDiff");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ANDiff";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.ANDiff";

	
	
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
		
		$edata["controlWidth"] = 80;

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




	$tdataindschedule1["ANDiff"] = $fdata;
//	ApprovedRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ApprovedRD";
	$fdata["GoodName"] = "ApprovedRD";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule1","ApprovedRD");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ApprovedRD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.ApprovedRD";

	
	
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




	$tdataindschedule1["ApprovedRD"] = $fdata;
//	RDMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "RDMins";
	$fdata["GoodName"] = "RDMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule1","RDMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RDMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.RDMins";

	
	
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
		
		$edata["controlWidth"] = 80;

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




	$tdataindschedule1["RDMins"] = $fdata;
//	TempOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "TempOT";
	$fdata["GoodName"] = "TempOT";
	$fdata["ownerTable"] = "forapp";
	$fdata["Label"] = GetFieldLabel("indschedule1","TempOT");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TempOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "forapp.TempOT";

	
	
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
		
		$edata["controlWidth"] = 80;

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




	$tdataindschedule1["TempOT"] = $fdata;
//	NDMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "NDMins";
	$fdata["GoodName"] = "NDMins";
	$fdata["ownerTable"] = "forapp";
	$fdata["Label"] = GetFieldLabel("indschedule1","NDMins");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NDMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "forapp.NDMins";

	
	
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
		
		$edata["controlWidth"] = 80;

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




	$tdataindschedule1["NDMins"] = $fdata;
//	WorkMinsNet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "WorkMinsNet";
	$fdata["GoodName"] = "WorkMinsNet";
	$fdata["ownerTable"] = "forapp";
	$fdata["Label"] = GetFieldLabel("indschedule1","WorkMinsNet");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "WorkMinsNet";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "forapp.WorkMinsNet";

	
	
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
		
		$edata["controlWidth"] = 80;

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




	$tdataindschedule1["WorkMinsNet"] = $fdata;
//	FiledOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "FiledOT";
	$fdata["GoodName"] = "FiledOT";
	$fdata["ownerTable"] = "forapp";
	$fdata["Label"] = GetFieldLabel("indschedule1","FiledOT");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FiledOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "forapp.FiledOT";

	
	
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
		
		$edata["controlWidth"] = 80;

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




	$tdataindschedule1["FiledOT"] = $fdata;
//	NDMealAllowancePerShift
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "NDMealAllowancePerShift";
	$fdata["GoodName"] = "NDMealAllowancePerShift";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule1","NDMealAllowancePerShift");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NDMealAllowancePerShift";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.NDMealAllowancePerShift";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 62;

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




	$tdataindschedule1["NDMealAllowancePerShift"] = $fdata;
//	NDMinimumHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "NDMinimumHrs";
	$fdata["GoodName"] = "NDMinimumHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule1","NDMinimumHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NDMinimumHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.NDMinimumHrs";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 52;

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




	$tdataindschedule1["NDMinimumHrs"] = $fdata;
//	NDMealAllowance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "NDMealAllowance";
	$fdata["GoodName"] = "NDMealAllowance";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule1","NDMealAllowance");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NDMealAllowance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.NDMealAllowance";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 82;

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




	$tdataindschedule1["NDMealAllowance"] = $fdata;
//	SDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "SDate";
	$fdata["GoodName"] = "SDate";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule1","SDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.SDate";

	
	
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




	$tdataindschedule1["SDate"] = $fdata;
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule1","UserName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "UserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.UserName";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataindschedule1["UserName"] = $fdata;
//	ANDOTMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "ANDOTMins";
	$fdata["GoodName"] = "ANDOTMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule1","ANDOTMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ANDOTMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indschedule.ANDOTMins";

	
	
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




	$tdataindschedule1["ANDOTMins"] = $fdata;


$tables_data["indschedule1"]=&$tdataindschedule1;
$field_labels["indschedule1"] = &$fieldLabelsindschedule1;
$fieldToolTips["indschedule1"] = &$fieldToolTipsindschedule1;
$placeHolders["indschedule1"] = &$placeHoldersindschedule1;
$page_titles["indschedule1"] = &$pageTitlesindschedule1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["indschedule1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["indschedule1"] = array();


	
				$strOriginalDetailsTable="dt5";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dt5";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "dt5";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["indschedule1"][0] = $masterParams;
				$masterTablesData["indschedule1"][0]["masterKeys"] = array();
	$masterTablesData["indschedule1"][0]["masterKeys"][]="ScID";
				$masterTablesData["indschedule1"][0]["detailKeys"] = array();
	$masterTablesData["indschedule1"][0]["detailKeys"][]="ScID";
		
	
				$strOriginalDetailsTable="indschedule";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="indschedule";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "indschedule";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "1";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["indschedule1"][1] = $masterParams;
				$masterTablesData["indschedule1"][1]["masterKeys"] = array();
	$masterTablesData["indschedule1"][1]["masterKeys"][]="ScID";
				$masterTablesData["indschedule1"][1]["detailKeys"] = array();
	$masterTablesData["indschedule1"][1]["detailKeys"][]="ScID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_indschedule1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "indschedule.ScID,  indschedule.ApprovedOT,  indschedule.AOTMins,  indschedule.ApprovedNightDiff,  indschedule.ANDiff,  indschedule.ApprovedRD,  indschedule.RDMins,  forapp.TempOT,  forapp.NDMins,  forapp.WorkMinsNet,  forapp.FiledOT,  indschedule.NDMealAllowancePerShift,  indschedule.NDMinimumHrs,  indschedule.NDMealAllowance,  indschedule.SDate,  indschedule.UserName,  indschedule.ANDOTMins";
$proto0["m_strFrom"] = "FROM indschedule  INNER JOIN forapp ON indschedule.ScID = forapp.ScID";
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
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule1"
));

$proto6["m_sql"] = "indschedule.ScID";
$proto6["m_srcTableName"] = "indschedule1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedOT",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule1"
));

$proto8["m_sql"] = "indschedule.ApprovedOT";
$proto8["m_srcTableName"] = "indschedule1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AOTMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule1"
));

$proto10["m_sql"] = "indschedule.AOTMins";
$proto10["m_srcTableName"] = "indschedule1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedNightDiff",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule1"
));

$proto12["m_sql"] = "indschedule.ApprovedNightDiff";
$proto12["m_srcTableName"] = "indschedule1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ANDiff",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule1"
));

$proto14["m_sql"] = "indschedule.ANDiff";
$proto14["m_srcTableName"] = "indschedule1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedRD",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule1"
));

$proto16["m_sql"] = "indschedule.ApprovedRD";
$proto16["m_srcTableName"] = "indschedule1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "RDMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule1"
));

$proto18["m_sql"] = "indschedule.RDMins";
$proto18["m_srcTableName"] = "indschedule1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "TempOT",
	"m_strTable" => "forapp",
	"m_srcTableName" => "indschedule1"
));

$proto20["m_sql"] = "forapp.TempOT";
$proto20["m_srcTableName"] = "indschedule1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "NDMins",
	"m_strTable" => "forapp",
	"m_srcTableName" => "indschedule1"
));

$proto22["m_sql"] = "forapp.NDMins";
$proto22["m_srcTableName"] = "indschedule1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "WorkMinsNet",
	"m_strTable" => "forapp",
	"m_srcTableName" => "indschedule1"
));

$proto24["m_sql"] = "forapp.WorkMinsNet";
$proto24["m_srcTableName"] = "indschedule1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "FiledOT",
	"m_strTable" => "forapp",
	"m_srcTableName" => "indschedule1"
));

$proto26["m_sql"] = "forapp.FiledOT";
$proto26["m_srcTableName"] = "indschedule1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "NDMealAllowancePerShift",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule1"
));

$proto28["m_sql"] = "indschedule.NDMealAllowancePerShift";
$proto28["m_srcTableName"] = "indschedule1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "NDMinimumHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule1"
));

$proto30["m_sql"] = "indschedule.NDMinimumHrs";
$proto30["m_srcTableName"] = "indschedule1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "NDMealAllowance",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule1"
));

$proto32["m_sql"] = "indschedule.NDMealAllowance";
$proto32["m_srcTableName"] = "indschedule1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "SDate",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule1"
));

$proto34["m_sql"] = "indschedule.SDate";
$proto34["m_srcTableName"] = "indschedule1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule1"
));

$proto36["m_sql"] = "indschedule.UserName";
$proto36["m_srcTableName"] = "indschedule1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "ANDOTMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule1"
));

$proto38["m_sql"] = "indschedule.ANDOTMins";
$proto38["m_srcTableName"] = "indschedule1";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "indschedule";
$proto41["m_srcTableName"] = "indschedule1";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "ScID";
$proto41["m_columns"][] = "UserName";
$proto41["m_columns"][] = "SDate";
$proto41["m_columns"][] = "STimeIn";
$proto41["m_columns"][] = "STimeOut";
$proto41["m_columns"][] = "SchedType";
$proto41["m_columns"][] = "CrossMidnight";
$proto41["m_columns"][] = "RecordOnFirstDay";
$proto41["m_columns"][] = "RecordOnSecondDay";
$proto41["m_columns"][] = "ApprovedOT";
$proto41["m_columns"][] = "AOTMins";
$proto41["m_columns"][] = "SRestDay";
$proto41["m_columns"][] = "WageType";
$proto41["m_columns"][] = "ApprovedNightDiff";
$proto41["m_columns"][] = "ANDiff";
$proto41["m_columns"][] = "EmployeeID";
$proto41["m_columns"][] = "MinsPerDay";
$proto41["m_columns"][] = "BreakMins";
$proto41["m_columns"][] = "Shift";
$proto41["m_columns"][] = "ApprovedRD";
$proto41["m_columns"][] = "RDMins";
$proto41["m_columns"][] = "ScRID";
$proto41["m_columns"][] = "LunchBreakFrom";
$proto41["m_columns"][] = "LunchBreakTo";
$proto41["m_columns"][] = "ReqLogOutInOnBreak";
$proto41["m_columns"][] = "FirstHalfMins";
$proto41["m_columns"][] = "SecondHalfMins";
$proto41["m_columns"][] = "NDMealAllowancePerShift";
$proto41["m_columns"][] = "NDMinimumHrs";
$proto41["m_columns"][] = "NDMealAllowance";
$proto41["m_columns"][] = "Division";
$proto41["m_columns"][] = "TimeIn";
$proto41["m_columns"][] = "TimeOut";
$proto41["m_columns"][] = "DayIs";
$proto41["m_columns"][] = "RestDay";
$proto41["m_columns"][] = "Schedx";
$proto41["m_columns"][] = "Department";
$proto41["m_columns"][] = "RegWD";
$proto41["m_columns"][] = "DWork";
$proto41["m_columns"][] = "Absent";
$proto41["m_columns"][] = "LateMins";
$proto41["m_columns"][] = "UndertimeMins";
$proto41["m_columns"][] = "RHolidayHrs";
$proto41["m_columns"][] = "SHolidayHrs";
$proto41["m_columns"][] = "CHolidayHrs";
$proto41["m_columns"][] = "ExcessHrs";
$proto41["m_columns"][] = "RegOTHrs";
$proto41["m_columns"][] = "RHOTHrs";
$proto41["m_columns"][] = "SHOTHrs";
$proto41["m_columns"][] = "CHOTHrs";
$proto41["m_columns"][] = "RDOTHrs";
$proto41["m_columns"][] = "NDHrs";
$proto41["m_columns"][] = "RDHrs";
$proto41["m_columns"][] = "RegNDHrs";
$proto41["m_columns"][] = "RHNDHrs";
$proto41["m_columns"][] = "SHNDHrs";
$proto41["m_columns"][] = "CHNDHrs";
$proto41["m_columns"][] = "RDNDHrs";
$proto41["m_columns"][] = "VLDay";
$proto41["m_columns"][] = "SLDay";
$proto41["m_columns"][] = "ELDay";
$proto41["m_columns"][] = "PLDay";
$proto41["m_columns"][] = "TrODay";
$proto41["m_columns"][] = "HolidayType";
$proto41["m_columns"][] = "Mispunched";
$proto41["m_columns"][] = "Holiday1stHalf";
$proto41["m_columns"][] = "Holiday2ndHalf";
$proto41["m_columns"][] = "AfterBreakLog";
$proto41["m_columns"][] = "BreakLateMins";
$proto41["m_columns"][] = "TotLateMins";
$proto41["m_columns"][] = "LatePenaltyMins";
$proto41["m_columns"][] = "Employer";
$proto41["m_columns"][] = "AfterBreakLogOut";
$proto41["m_columns"][] = "LateFixPenalty";
$proto41["m_columns"][] = "Locked";
$proto41["m_columns"][] = "IScRID";
$proto41["m_columns"][] = "PreLogMins";
$proto41["m_columns"][] = "IncludeBreakLate";
$proto41["m_columns"][] = "GracePeriodMins";
$proto41["m_columns"][] = "WithAddBreaks";
$proto41["m_columns"][] = "ANDOTMins";
$proto41["m_columns"][] = "RegNDOTHrs";
$proto41["m_columns"][] = "RHNDOTHrs";
$proto41["m_columns"][] = "SHNDOTHrs";
$proto41["m_columns"][] = "CHNDOTHrs";
$proto41["m_columns"][] = "RDNDOTHrs";
$proto41["m_columns"][] = "DH";
$proto41["m_columns"][] = "DHRD";
$proto41["m_columns"][] = "DHOT";
$proto41["m_columns"][] = "DHRDOT";
$proto41["m_columns"][] = "SHRDND";
$proto41["m_columns"][] = "RHRDND";
$proto41["m_columns"][] = "SHRDNDOT";
$proto41["m_columns"][] = "RHRDNDOT";
$proto41["m_columns"][] = "DHND";
$proto41["m_columns"][] = "DHRDND";
$proto41["m_columns"][] = "DHNDOT";
$proto41["m_columns"][] = "DHRDNDOT";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "indschedule";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "indschedule1";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
												$proto44=array();
$proto44["m_link"] = "SQLL_INNERJOIN";
			$proto45=array();
$proto45["m_strName"] = "forapp";
$proto45["m_srcTableName"] = "indschedule1";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "ScID";
$proto45["m_columns"][] = "TempOT";
$proto45["m_columns"][] = "NDMins";
$proto45["m_columns"][] = "WorkMinsNet";
$proto45["m_columns"][] = "FiledOT";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "INNER JOIN forapp ON indschedule.ScID = forapp.ScID";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "indschedule1";
$proto46=array();
$proto46["m_sql"] = "indschedule.ScID = forapp.ScID";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ScID",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule1"
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "= forapp.ScID";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="indschedule1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_indschedule1 = createSqlQuery_indschedule1();


	
		;

																	

$tdataindschedule1[".sqlquery"] = $queryData_indschedule1;

include_once(getabspath("include/indschedule1_events.php"));
$tableEvents["indschedule1"] = new eventclass_indschedule1;
$tdataindschedule1[".hasEvents"] = true;

?>