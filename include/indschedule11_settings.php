<?php
require_once(getabspath("classes/cipherer.php"));




$tdataindschedule11 = array();
	$tdataindschedule11[".truncateText"] = true;
	$tdataindschedule11[".NumberOfChars"] = 80;
	$tdataindschedule11[".ShortName"] = "indschedule11";
	$tdataindschedule11[".OwnerID"] = "";
	$tdataindschedule11[".OriginalTable"] = "indschedule";

//	field labels
$fieldLabelsindschedule11 = array();
$fieldToolTipsindschedule11 = array();
$pageTitlesindschedule11 = array();
$placeHoldersindschedule11 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsindschedule11["English"] = array();
	$fieldToolTipsindschedule11["English"] = array();
	$placeHoldersindschedule11["English"] = array();
	$pageTitlesindschedule11["English"] = array();
	$fieldLabelsindschedule11["English"]["ScID"] = "Sc ID";
	$fieldToolTipsindschedule11["English"]["ScID"] = "";
	$placeHoldersindschedule11["English"]["ScID"] = "";
	$fieldLabelsindschedule11["English"]["ApprovedOT"] = "Approved OT";
	$fieldToolTipsindschedule11["English"]["ApprovedOT"] = "";
	$placeHoldersindschedule11["English"]["ApprovedOT"] = "";
	$fieldLabelsindschedule11["English"]["AOTMins"] = "OTmins";
	$fieldToolTipsindschedule11["English"]["AOTMins"] = "";
	$placeHoldersindschedule11["English"]["AOTMins"] = "";
	$fieldLabelsindschedule11["English"]["ApprovedNightDiff"] = "Approved NDiff";
	$fieldToolTipsindschedule11["English"]["ApprovedNightDiff"] = "";
	$placeHoldersindschedule11["English"]["ApprovedNightDiff"] = "";
	$fieldLabelsindschedule11["English"]["ANDiff"] = "NDiffmins";
	$fieldToolTipsindschedule11["English"]["ANDiff"] = "";
	$placeHoldersindschedule11["English"]["ANDiff"] = "";
	$fieldLabelsindschedule11["English"]["ApprovedRD"] = "Approved Rest Day";
	$fieldToolTipsindschedule11["English"]["ApprovedRD"] = "";
	$placeHoldersindschedule11["English"]["ApprovedRD"] = "";
	$fieldLabelsindschedule11["English"]["RDMins"] = "RDmins";
	$fieldToolTipsindschedule11["English"]["RDMins"] = "";
	$placeHoldersindschedule11["English"]["RDMins"] = "";
	$fieldLabelsindschedule11["English"]["TempOT"] = "Temp OT";
	$fieldToolTipsindschedule11["English"]["TempOT"] = "";
	$placeHoldersindschedule11["English"]["TempOT"] = "";
	$fieldLabelsindschedule11["English"]["NDMins"] = "Temp ND";
	$fieldToolTipsindschedule11["English"]["NDMins"] = "";
	$placeHoldersindschedule11["English"]["NDMins"] = "";
	$fieldLabelsindschedule11["English"]["WorkMinsNet"] = "Working Rest Day";
	$fieldToolTipsindschedule11["English"]["WorkMinsNet"] = "";
	$placeHoldersindschedule11["English"]["WorkMinsNet"] = "";
	$fieldLabelsindschedule11["English"]["FiledOT"] = "Filed OT";
	$fieldToolTipsindschedule11["English"]["FiledOT"] = "";
	$placeHoldersindschedule11["English"]["FiledOT"] = "";
	$fieldLabelsindschedule11["English"]["NDMealAllowancePerShift"] = "NDMeal Allowance Per Shift";
	$fieldToolTipsindschedule11["English"]["NDMealAllowancePerShift"] = "";
	$placeHoldersindschedule11["English"]["NDMealAllowancePerShift"] = "";
	$fieldLabelsindschedule11["English"]["NDMinimumHrs"] = "NDMinimum Hrs";
	$fieldToolTipsindschedule11["English"]["NDMinimumHrs"] = "";
	$placeHoldersindschedule11["English"]["NDMinimumHrs"] = "";
	$fieldLabelsindschedule11["English"]["NDMealAllowance"] = "NDMeal Allowance";
	$fieldToolTipsindschedule11["English"]["NDMealAllowance"] = "";
	$placeHoldersindschedule11["English"]["NDMealAllowance"] = "";
	$fieldLabelsindschedule11["English"]["SDate"] = "SDate";
	$fieldToolTipsindschedule11["English"]["SDate"] = "";
	$placeHoldersindschedule11["English"]["SDate"] = "";
	if (count($fieldToolTipsindschedule11["English"]))
		$tdataindschedule11[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsindschedule11[""] = array();
	$fieldToolTipsindschedule11[""] = array();
	$placeHoldersindschedule11[""] = array();
	$pageTitlesindschedule11[""] = array();
	if (count($fieldToolTipsindschedule11[""]))
		$tdataindschedule11[".isUseToolTips"] = true;
}


	$tdataindschedule11[".NCSearch"] = true;



$tdataindschedule11[".shortTableName"] = "indschedule11";
$tdataindschedule11[".nSecOptions"] = 0;
$tdataindschedule11[".recsPerRowPrint"] = 1;
$tdataindschedule11[".mainTableOwnerID"] = "";
$tdataindschedule11[".moveNext"] = 1;
$tdataindschedule11[".entityType"] = 1;

$tdataindschedule11[".strOriginalTableName"] = "indschedule";

	



$tdataindschedule11[".showAddInPopup"] = false;

$tdataindschedule11[".showEditInPopup"] = false;

$tdataindschedule11[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataindschedule11[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataindschedule11[".fieldsForRegister"] = array();

$tdataindschedule11[".listAjax"] = false;

	$tdataindschedule11[".audit"] = false;

	$tdataindschedule11[".locking"] = false;

$tdataindschedule11[".edit"] = true;
$tdataindschedule11[".afterEditAction"] = 1;
$tdataindschedule11[".closePopupAfterEdit"] = 1;
$tdataindschedule11[".afterEditActionDetTable"] = "";


$tdataindschedule11[".list"] = true;

$tdataindschedule11[".inlineEdit"] = true;


$tdataindschedule11[".reorderRecordsByHeader"] = true;


$tdataindschedule11[".exportFormatting"] = 2;
$tdataindschedule11[".exportDelimiter"] = ",";
		


$tdataindschedule11[".exportTo"] = true;

$tdataindschedule11[".printFriendly"] = true;


$tdataindschedule11[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataindschedule11[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataindschedule11[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataindschedule11[".searchSaving"] = false;
//

$tdataindschedule11[".showSearchPanel"] = true;
		$tdataindschedule11[".flexibleSearch"] = true;

$tdataindschedule11[".isUseAjaxSuggest"] = true;

$tdataindschedule11[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																		

$tdataindschedule11[".ajaxCodeSnippetAdded"] = false;

$tdataindschedule11[".buttonsAdded"] = false;

$tdataindschedule11[".addPageEvents"] = true;

// use timepicker for search panel
$tdataindschedule11[".isUseTimeForSearch"] = false;



$tdataindschedule11[".badgeColor"] = "3cb371";

$tdataindschedule11[".detailsLinksOnList"] = "1";

$tdataindschedule11[".allSearchFields"] = array();
$tdataindschedule11[".filterFields"] = array();
$tdataindschedule11[".requiredSearchFields"] = array();

$tdataindschedule11[".allSearchFields"][] = "SDate";
	$tdataindschedule11[".allSearchFields"][] = "ScID";
	$tdataindschedule11[".allSearchFields"][] = "TempOT";
	$tdataindschedule11[".allSearchFields"][] = "FiledOT";
	$tdataindschedule11[".allSearchFields"][] = "ApprovedOT";
	$tdataindschedule11[".allSearchFields"][] = "AOTMins";
	$tdataindschedule11[".allSearchFields"][] = "NDMins";
	$tdataindschedule11[".allSearchFields"][] = "ApprovedNightDiff";
	$tdataindschedule11[".allSearchFields"][] = "ANDiff";
	$tdataindschedule11[".allSearchFields"][] = "NDMealAllowancePerShift";
	$tdataindschedule11[".allSearchFields"][] = "NDMinimumHrs";
	$tdataindschedule11[".allSearchFields"][] = "NDMealAllowance";
	$tdataindschedule11[".allSearchFields"][] = "WorkMinsNet";
	$tdataindschedule11[".allSearchFields"][] = "ApprovedRD";
	$tdataindschedule11[".allSearchFields"][] = "RDMins";
	

$tdataindschedule11[".googleLikeFields"] = array();
$tdataindschedule11[".googleLikeFields"][] = "ScID";
$tdataindschedule11[".googleLikeFields"][] = "ApprovedOT";
$tdataindschedule11[".googleLikeFields"][] = "AOTMins";
$tdataindschedule11[".googleLikeFields"][] = "ApprovedNightDiff";
$tdataindschedule11[".googleLikeFields"][] = "ANDiff";
$tdataindschedule11[".googleLikeFields"][] = "ApprovedRD";
$tdataindschedule11[".googleLikeFields"][] = "RDMins";
$tdataindschedule11[".googleLikeFields"][] = "TempOT";
$tdataindschedule11[".googleLikeFields"][] = "NDMins";
$tdataindschedule11[".googleLikeFields"][] = "WorkMinsNet";
$tdataindschedule11[".googleLikeFields"][] = "FiledOT";
$tdataindschedule11[".googleLikeFields"][] = "NDMealAllowancePerShift";
$tdataindschedule11[".googleLikeFields"][] = "NDMinimumHrs";
$tdataindschedule11[".googleLikeFields"][] = "NDMealAllowance";
$tdataindschedule11[".googleLikeFields"][] = "SDate";


$tdataindschedule11[".advSearchFields"] = array();
$tdataindschedule11[".advSearchFields"][] = "SDate";
$tdataindschedule11[".advSearchFields"][] = "ScID";
$tdataindschedule11[".advSearchFields"][] = "TempOT";
$tdataindschedule11[".advSearchFields"][] = "FiledOT";
$tdataindschedule11[".advSearchFields"][] = "ApprovedOT";
$tdataindschedule11[".advSearchFields"][] = "AOTMins";
$tdataindschedule11[".advSearchFields"][] = "NDMins";
$tdataindschedule11[".advSearchFields"][] = "ApprovedNightDiff";
$tdataindschedule11[".advSearchFields"][] = "ANDiff";
$tdataindschedule11[".advSearchFields"][] = "NDMealAllowancePerShift";
$tdataindschedule11[".advSearchFields"][] = "NDMinimumHrs";
$tdataindschedule11[".advSearchFields"][] = "NDMealAllowance";
$tdataindschedule11[".advSearchFields"][] = "WorkMinsNet";
$tdataindschedule11[".advSearchFields"][] = "ApprovedRD";
$tdataindschedule11[".advSearchFields"][] = "RDMins";

$tdataindschedule11[".tableType"] = "list";

$tdataindschedule11[".printerPageOrientation"] = 0;
$tdataindschedule11[".nPrinterPageScale"] = 100;

$tdataindschedule11[".nPrinterSplitRecords"] = 40;

$tdataindschedule11[".nPrinterPDFSplitRecords"] = 40;



$tdataindschedule11[".geocodingEnabled"] = false;





$tdataindschedule11[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataindschedule11[".pageSize"] = 20;

$tdataindschedule11[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataindschedule11[".strOrderBy"] = $tstrOrderBy;

$tdataindschedule11[".orderindexes"] = array();

$tdataindschedule11[".sqlHead"] = "SELECT indschedule.ScID,  indschedule.ApprovedOT,  indschedule.AOTMins,  indschedule.ApprovedNightDiff,  indschedule.ANDiff,  indschedule.ApprovedRD,  indschedule.RDMins,  forapp.TempOT,  forapp.NDMins,  forapp.WorkMinsNet,  forapp.FiledOT,  indschedule.NDMealAllowancePerShift,  indschedule.NDMinimumHrs,  indschedule.NDMealAllowance,  indschedule.SDate";
$tdataindschedule11[".sqlFrom"] = "FROM indschedule  INNER JOIN forapp ON indschedule.ScID = forapp.ScID";
$tdataindschedule11[".sqlWhereExpr"] = "";
$tdataindschedule11[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataindschedule11[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataindschedule11[".arrGroupsPerPage"] = $arrGPP;

$tdataindschedule11[".highlightSearchResults"] = true;

$tableKeysindschedule11 = array();
$tableKeysindschedule11[] = "ScID";
$tdataindschedule11[".Keys"] = $tableKeysindschedule11;

$tdataindschedule11[".listFields"] = array();
$tdataindschedule11[".listFields"][] = "SDate";
$tdataindschedule11[".listFields"][] = "ScID";
$tdataindschedule11[".listFields"][] = "TempOT";
$tdataindschedule11[".listFields"][] = "FiledOT";
$tdataindschedule11[".listFields"][] = "ApprovedOT";
$tdataindschedule11[".listFields"][] = "AOTMins";
$tdataindschedule11[".listFields"][] = "NDMins";
$tdataindschedule11[".listFields"][] = "ApprovedNightDiff";
$tdataindschedule11[".listFields"][] = "ANDiff";
$tdataindschedule11[".listFields"][] = "NDMealAllowancePerShift";
$tdataindschedule11[".listFields"][] = "NDMinimumHrs";
$tdataindschedule11[".listFields"][] = "NDMealAllowance";
$tdataindschedule11[".listFields"][] = "WorkMinsNet";
$tdataindschedule11[".listFields"][] = "ApprovedRD";
$tdataindschedule11[".listFields"][] = "RDMins";

$tdataindschedule11[".hideMobileList"] = array();


$tdataindschedule11[".viewFields"] = array();

$tdataindschedule11[".addFields"] = array();

$tdataindschedule11[".masterListFields"] = array();
$tdataindschedule11[".masterListFields"][] = "SDate";
$tdataindschedule11[".masterListFields"][] = "ScID";
$tdataindschedule11[".masterListFields"][] = "TempOT";
$tdataindschedule11[".masterListFields"][] = "FiledOT";
$tdataindschedule11[".masterListFields"][] = "ApprovedOT";
$tdataindschedule11[".masterListFields"][] = "AOTMins";
$tdataindschedule11[".masterListFields"][] = "NDMins";
$tdataindschedule11[".masterListFields"][] = "ApprovedNightDiff";
$tdataindschedule11[".masterListFields"][] = "ANDiff";
$tdataindschedule11[".masterListFields"][] = "NDMealAllowancePerShift";
$tdataindschedule11[".masterListFields"][] = "NDMinimumHrs";
$tdataindschedule11[".masterListFields"][] = "NDMealAllowance";
$tdataindschedule11[".masterListFields"][] = "WorkMinsNet";
$tdataindschedule11[".masterListFields"][] = "ApprovedRD";
$tdataindschedule11[".masterListFields"][] = "RDMins";

$tdataindschedule11[".inlineAddFields"] = array();

$tdataindschedule11[".editFields"] = array();
$tdataindschedule11[".editFields"][] = "SDate";
$tdataindschedule11[".editFields"][] = "TempOT";
$tdataindschedule11[".editFields"][] = "FiledOT";
$tdataindschedule11[".editFields"][] = "ApprovedOT";
$tdataindschedule11[".editFields"][] = "AOTMins";
$tdataindschedule11[".editFields"][] = "NDMins";
$tdataindschedule11[".editFields"][] = "ApprovedNightDiff";
$tdataindschedule11[".editFields"][] = "ANDiff";
$tdataindschedule11[".editFields"][] = "NDMealAllowancePerShift";
$tdataindschedule11[".editFields"][] = "NDMinimumHrs";
$tdataindschedule11[".editFields"][] = "NDMealAllowance";
$tdataindschedule11[".editFields"][] = "WorkMinsNet";
$tdataindschedule11[".editFields"][] = "ApprovedRD";
$tdataindschedule11[".editFields"][] = "RDMins";

$tdataindschedule11[".inlineEditFields"] = array();
$tdataindschedule11[".inlineEditFields"][] = "SDate";
$tdataindschedule11[".inlineEditFields"][] = "TempOT";
$tdataindschedule11[".inlineEditFields"][] = "FiledOT";
$tdataindschedule11[".inlineEditFields"][] = "ApprovedOT";
$tdataindschedule11[".inlineEditFields"][] = "AOTMins";
$tdataindschedule11[".inlineEditFields"][] = "NDMins";
$tdataindschedule11[".inlineEditFields"][] = "ApprovedNightDiff";
$tdataindschedule11[".inlineEditFields"][] = "ANDiff";
$tdataindschedule11[".inlineEditFields"][] = "NDMealAllowancePerShift";
$tdataindschedule11[".inlineEditFields"][] = "NDMinimumHrs";
$tdataindschedule11[".inlineEditFields"][] = "NDMealAllowance";
$tdataindschedule11[".inlineEditFields"][] = "WorkMinsNet";
$tdataindschedule11[".inlineEditFields"][] = "ApprovedRD";
$tdataindschedule11[".inlineEditFields"][] = "RDMins";

$tdataindschedule11[".updateSelectedFields"] = array();
$tdataindschedule11[".updateSelectedFields"][] = "SDate";
$tdataindschedule11[".updateSelectedFields"][] = "TempOT";
$tdataindschedule11[".updateSelectedFields"][] = "FiledOT";
$tdataindschedule11[".updateSelectedFields"][] = "ApprovedOT";
$tdataindschedule11[".updateSelectedFields"][] = "AOTMins";
$tdataindschedule11[".updateSelectedFields"][] = "NDMins";
$tdataindschedule11[".updateSelectedFields"][] = "ApprovedNightDiff";
$tdataindschedule11[".updateSelectedFields"][] = "ANDiff";
$tdataindschedule11[".updateSelectedFields"][] = "NDMealAllowancePerShift";
$tdataindschedule11[".updateSelectedFields"][] = "NDMinimumHrs";
$tdataindschedule11[".updateSelectedFields"][] = "NDMealAllowance";
$tdataindschedule11[".updateSelectedFields"][] = "WorkMinsNet";
$tdataindschedule11[".updateSelectedFields"][] = "ApprovedRD";
$tdataindschedule11[".updateSelectedFields"][] = "RDMins";


$tdataindschedule11[".exportFields"] = array();
$tdataindschedule11[".exportFields"][] = "SDate";
$tdataindschedule11[".exportFields"][] = "ScID";
$tdataindschedule11[".exportFields"][] = "TempOT";
$tdataindschedule11[".exportFields"][] = "FiledOT";
$tdataindschedule11[".exportFields"][] = "ApprovedOT";
$tdataindschedule11[".exportFields"][] = "AOTMins";
$tdataindschedule11[".exportFields"][] = "NDMins";
$tdataindschedule11[".exportFields"][] = "ApprovedNightDiff";
$tdataindschedule11[".exportFields"][] = "ANDiff";
$tdataindschedule11[".exportFields"][] = "NDMealAllowancePerShift";
$tdataindschedule11[".exportFields"][] = "NDMinimumHrs";
$tdataindschedule11[".exportFields"][] = "NDMealAllowance";
$tdataindschedule11[".exportFields"][] = "WorkMinsNet";
$tdataindschedule11[".exportFields"][] = "ApprovedRD";
$tdataindschedule11[".exportFields"][] = "RDMins";

$tdataindschedule11[".importFields"] = array();

$tdataindschedule11[".printFields"] = array();
$tdataindschedule11[".printFields"][] = "SDate";
$tdataindschedule11[".printFields"][] = "ScID";
$tdataindschedule11[".printFields"][] = "TempOT";
$tdataindschedule11[".printFields"][] = "FiledOT";
$tdataindschedule11[".printFields"][] = "ApprovedOT";
$tdataindschedule11[".printFields"][] = "AOTMins";
$tdataindschedule11[".printFields"][] = "NDMins";
$tdataindschedule11[".printFields"][] = "ApprovedNightDiff";
$tdataindschedule11[".printFields"][] = "ANDiff";
$tdataindschedule11[".printFields"][] = "NDMealAllowancePerShift";
$tdataindschedule11[".printFields"][] = "NDMinimumHrs";
$tdataindschedule11[".printFields"][] = "NDMealAllowance";
$tdataindschedule11[".printFields"][] = "WorkMinsNet";
$tdataindschedule11[".printFields"][] = "ApprovedRD";
$tdataindschedule11[".printFields"][] = "RDMins";


//	ScID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ScID";
	$fdata["GoodName"] = "ScID";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule11","ScID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataindschedule11["ScID"] = $fdata;
//	ApprovedOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ApprovedOT";
	$fdata["GoodName"] = "ApprovedOT";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule11","ApprovedOT");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdataindschedule11["ApprovedOT"] = $fdata;
//	AOTMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AOTMins";
	$fdata["GoodName"] = "AOTMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule11","AOTMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdataindschedule11["AOTMins"] = $fdata;
//	ApprovedNightDiff
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ApprovedNightDiff";
	$fdata["GoodName"] = "ApprovedNightDiff";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule11","ApprovedNightDiff");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdataindschedule11["ApprovedNightDiff"] = $fdata;
//	ANDiff
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ANDiff";
	$fdata["GoodName"] = "ANDiff";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule11","ANDiff");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdataindschedule11["ANDiff"] = $fdata;
//	ApprovedRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ApprovedRD";
	$fdata["GoodName"] = "ApprovedRD";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule11","ApprovedRD");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdataindschedule11["ApprovedRD"] = $fdata;
//	RDMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "RDMins";
	$fdata["GoodName"] = "RDMins";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule11","RDMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdataindschedule11["RDMins"] = $fdata;
//	TempOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "TempOT";
	$fdata["GoodName"] = "TempOT";
	$fdata["ownerTable"] = "forapp";
	$fdata["Label"] = GetFieldLabel("indschedule11","TempOT");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataindschedule11["TempOT"] = $fdata;
//	NDMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "NDMins";
	$fdata["GoodName"] = "NDMins";
	$fdata["ownerTable"] = "forapp";
	$fdata["Label"] = GetFieldLabel("indschedule11","NDMins");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdataindschedule11["NDMins"] = $fdata;
//	WorkMinsNet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "WorkMinsNet";
	$fdata["GoodName"] = "WorkMinsNet";
	$fdata["ownerTable"] = "forapp";
	$fdata["Label"] = GetFieldLabel("indschedule11","WorkMinsNet");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdataindschedule11["WorkMinsNet"] = $fdata;
//	FiledOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "FiledOT";
	$fdata["GoodName"] = "FiledOT";
	$fdata["ownerTable"] = "forapp";
	$fdata["Label"] = GetFieldLabel("indschedule11","FiledOT");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdataindschedule11["FiledOT"] = $fdata;
//	NDMealAllowancePerShift
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "NDMealAllowancePerShift";
	$fdata["GoodName"] = "NDMealAllowancePerShift";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule11","NDMealAllowancePerShift");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdataindschedule11["NDMealAllowancePerShift"] = $fdata;
//	NDMinimumHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "NDMinimumHrs";
	$fdata["GoodName"] = "NDMinimumHrs";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule11","NDMinimumHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdataindschedule11["NDMinimumHrs"] = $fdata;
//	NDMealAllowance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "NDMealAllowance";
	$fdata["GoodName"] = "NDMealAllowance";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule11","NDMealAllowance");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdataindschedule11["NDMealAllowance"] = $fdata;
//	SDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "SDate";
	$fdata["GoodName"] = "SDate";
	$fdata["ownerTable"] = "indschedule";
	$fdata["Label"] = GetFieldLabel("indschedule11","SDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdataindschedule11["SDate"] = $fdata;


$tables_data["indschedule11"]=&$tdataindschedule11;
$field_labels["indschedule11"] = &$fieldLabelsindschedule11;
$fieldToolTips["indschedule11"] = &$fieldToolTipsindschedule11;
$placeHolders["indschedule11"] = &$placeHoldersindschedule11;
$page_titles["indschedule11"] = &$pageTitlesindschedule11;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["indschedule11"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["indschedule11"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_indschedule11()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "indschedule.ScID,  indschedule.ApprovedOT,  indschedule.AOTMins,  indschedule.ApprovedNightDiff,  indschedule.ANDiff,  indschedule.ApprovedRD,  indschedule.RDMins,  forapp.TempOT,  forapp.NDMins,  forapp.WorkMinsNet,  forapp.FiledOT,  indschedule.NDMealAllowancePerShift,  indschedule.NDMinimumHrs,  indschedule.NDMealAllowance,  indschedule.SDate";
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
	"m_srcTableName" => "indschedule11"
));

$proto6["m_sql"] = "indschedule.ScID";
$proto6["m_srcTableName"] = "indschedule11";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedOT",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule11"
));

$proto8["m_sql"] = "indschedule.ApprovedOT";
$proto8["m_srcTableName"] = "indschedule11";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AOTMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule11"
));

$proto10["m_sql"] = "indschedule.AOTMins";
$proto10["m_srcTableName"] = "indschedule11";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedNightDiff",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule11"
));

$proto12["m_sql"] = "indschedule.ApprovedNightDiff";
$proto12["m_srcTableName"] = "indschedule11";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ANDiff",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule11"
));

$proto14["m_sql"] = "indschedule.ANDiff";
$proto14["m_srcTableName"] = "indschedule11";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedRD",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule11"
));

$proto16["m_sql"] = "indschedule.ApprovedRD";
$proto16["m_srcTableName"] = "indschedule11";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "RDMins",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule11"
));

$proto18["m_sql"] = "indschedule.RDMins";
$proto18["m_srcTableName"] = "indschedule11";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "TempOT",
	"m_strTable" => "forapp",
	"m_srcTableName" => "indschedule11"
));

$proto20["m_sql"] = "forapp.TempOT";
$proto20["m_srcTableName"] = "indschedule11";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "NDMins",
	"m_strTable" => "forapp",
	"m_srcTableName" => "indschedule11"
));

$proto22["m_sql"] = "forapp.NDMins";
$proto22["m_srcTableName"] = "indschedule11";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "WorkMinsNet",
	"m_strTable" => "forapp",
	"m_srcTableName" => "indschedule11"
));

$proto24["m_sql"] = "forapp.WorkMinsNet";
$proto24["m_srcTableName"] = "indschedule11";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "FiledOT",
	"m_strTable" => "forapp",
	"m_srcTableName" => "indschedule11"
));

$proto26["m_sql"] = "forapp.FiledOT";
$proto26["m_srcTableName"] = "indschedule11";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "NDMealAllowancePerShift",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule11"
));

$proto28["m_sql"] = "indschedule.NDMealAllowancePerShift";
$proto28["m_srcTableName"] = "indschedule11";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "NDMinimumHrs",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule11"
));

$proto30["m_sql"] = "indschedule.NDMinimumHrs";
$proto30["m_srcTableName"] = "indschedule11";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "NDMealAllowance",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule11"
));

$proto32["m_sql"] = "indschedule.NDMealAllowance";
$proto32["m_srcTableName"] = "indschedule11";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "SDate",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule11"
));

$proto34["m_sql"] = "indschedule.SDate";
$proto34["m_srcTableName"] = "indschedule11";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "indschedule";
$proto37["m_srcTableName"] = "indschedule11";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "ScID";
$proto37["m_columns"][] = "UserName";
$proto37["m_columns"][] = "SDate";
$proto37["m_columns"][] = "STimeIn";
$proto37["m_columns"][] = "STimeOut";
$proto37["m_columns"][] = "SchedType";
$proto37["m_columns"][] = "CrossMidnight";
$proto37["m_columns"][] = "RecordOnFirstDay";
$proto37["m_columns"][] = "RecordOnSecondDay";
$proto37["m_columns"][] = "ApprovedOT";
$proto37["m_columns"][] = "AOTMins";
$proto37["m_columns"][] = "SRestDay";
$proto37["m_columns"][] = "WageType";
$proto37["m_columns"][] = "ApprovedNightDiff";
$proto37["m_columns"][] = "ANDiff";
$proto37["m_columns"][] = "EmployeeID";
$proto37["m_columns"][] = "MinsPerDay";
$proto37["m_columns"][] = "BreakMins";
$proto37["m_columns"][] = "Shift";
$proto37["m_columns"][] = "ApprovedRD";
$proto37["m_columns"][] = "RDMins";
$proto37["m_columns"][] = "ScRID";
$proto37["m_columns"][] = "LunchBreakFrom";
$proto37["m_columns"][] = "LunchBreakTo";
$proto37["m_columns"][] = "ReqLogOutInOnBreak";
$proto37["m_columns"][] = "FirstHalfMins";
$proto37["m_columns"][] = "SecondHalfMins";
$proto37["m_columns"][] = "NDMealAllowancePerShift";
$proto37["m_columns"][] = "NDMinimumHrs";
$proto37["m_columns"][] = "NDMealAllowance";
$proto37["m_columns"][] = "Division";
$proto37["m_columns"][] = "TimeIn";
$proto37["m_columns"][] = "TimeOut";
$proto37["m_columns"][] = "DayIs";
$proto37["m_columns"][] = "RestDay";
$proto37["m_columns"][] = "Schedx";
$proto37["m_columns"][] = "Department";
$proto37["m_columns"][] = "RegWD";
$proto37["m_columns"][] = "DWork";
$proto37["m_columns"][] = "Absent";
$proto37["m_columns"][] = "LateMins";
$proto37["m_columns"][] = "UndertimeMins";
$proto37["m_columns"][] = "RHolidayHrs";
$proto37["m_columns"][] = "SHolidayHrs";
$proto37["m_columns"][] = "CHolidayHrs";
$proto37["m_columns"][] = "ExcessHrs";
$proto37["m_columns"][] = "RegOTHrs";
$proto37["m_columns"][] = "RHOTHrs";
$proto37["m_columns"][] = "SHOTHrs";
$proto37["m_columns"][] = "CHOTHrs";
$proto37["m_columns"][] = "RDOTHrs";
$proto37["m_columns"][] = "NDHrs";
$proto37["m_columns"][] = "RDHrs";
$proto37["m_columns"][] = "RegNDHrs";
$proto37["m_columns"][] = "RHNDHrs";
$proto37["m_columns"][] = "SHNDHrs";
$proto37["m_columns"][] = "CHNDHrs";
$proto37["m_columns"][] = "RDNDHrs";
$proto37["m_columns"][] = "VLDay";
$proto37["m_columns"][] = "SLDay";
$proto37["m_columns"][] = "ELDay";
$proto37["m_columns"][] = "PLDay";
$proto37["m_columns"][] = "TrODay";
$proto37["m_columns"][] = "HolidayType";
$proto37["m_columns"][] = "Mispunched";
$proto37["m_columns"][] = "Holiday1stHalf";
$proto37["m_columns"][] = "Holiday2ndHalf";
$proto37["m_columns"][] = "AfterBreakLog";
$proto37["m_columns"][] = "BreakLateMins";
$proto37["m_columns"][] = "TotLateMins";
$proto37["m_columns"][] = "LatePenaltyMins";
$proto37["m_columns"][] = "Employer";
$proto37["m_columns"][] = "AfterBreakLogOut";
$proto37["m_columns"][] = "LateFixPenalty";
$proto37["m_columns"][] = "Locked";
$proto37["m_columns"][] = "IScRID";
$proto37["m_columns"][] = "PreLogMins";
$proto37["m_columns"][] = "IncludeBreakLate";
$proto37["m_columns"][] = "GracePeriodMins";
$proto37["m_columns"][] = "WithAddBreaks";
$proto37["m_columns"][] = "ANDOTMins";
$proto37["m_columns"][] = "RegNDOTHrs";
$proto37["m_columns"][] = "RHNDOTHrs";
$proto37["m_columns"][] = "SHNDOTHrs";
$proto37["m_columns"][] = "CHNDOTHrs";
$proto37["m_columns"][] = "RDNDOTHrs";
$proto37["m_columns"][] = "DH";
$proto37["m_columns"][] = "DHRD";
$proto37["m_columns"][] = "DHOT";
$proto37["m_columns"][] = "DHRDOT";
$proto37["m_columns"][] = "SHRDND";
$proto37["m_columns"][] = "RHRDND";
$proto37["m_columns"][] = "SHRDNDOT";
$proto37["m_columns"][] = "RHRDNDOT";
$proto37["m_columns"][] = "DHND";
$proto37["m_columns"][] = "DHRDND";
$proto37["m_columns"][] = "DHNDOT";
$proto37["m_columns"][] = "DHRDNDOT";
$proto37["m_columns"][] = "RHRDOT";
$proto37["m_columns"][] = "SHRDOT";
$proto37["m_columns"][] = "RegND";
$proto37["m_columns"][] = "RegRD";
$proto37["m_columns"][] = "SHOTD";
$proto37["m_columns"][] = "SHRDOTD";
$proto37["m_columns"][] = "NDOT";
$proto37["m_columns"][] = "RHRD";
$proto37["m_columns"][] = "SHRD";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "indschedule";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "indschedule11";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
												$proto40=array();
$proto40["m_link"] = "SQLL_INNERJOIN";
			$proto41=array();
$proto41["m_strName"] = "forapp";
$proto41["m_srcTableName"] = "indschedule11";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "ScID";
$proto41["m_columns"][] = "TempOT";
$proto41["m_columns"][] = "NDMins";
$proto41["m_columns"][] = "NDOTMins";
$proto41["m_columns"][] = "WorkMinsNet";
$proto41["m_columns"][] = "FiledOT";
$proto41["m_columns"][] = "RestDay";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "INNER JOIN forapp ON indschedule.ScID = forapp.ScID";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "indschedule11";
$proto42=array();
$proto42["m_sql"] = "indschedule.ScID = forapp.ScID";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ScID",
	"m_strTable" => "indschedule",
	"m_srcTableName" => "indschedule11"
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "= forapp.ScID";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="indschedule11";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_indschedule11 = createSqlQuery_indschedule11();


	
		;

															

$tdataindschedule11[".sqlquery"] = $queryData_indschedule11;

include_once(getabspath("include/indschedule11_events.php"));
$tableEvents["indschedule11"] = new eventclass_indschedule11;
$tdataindschedule11[".hasEvents"] = true;

?>