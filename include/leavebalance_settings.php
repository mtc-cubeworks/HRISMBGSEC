<?php
require_once(getabspath("classes/cipherer.php"));




$tdataleavebalance = array();
	$tdataleavebalance[".truncateText"] = true;
	$tdataleavebalance[".NumberOfChars"] = 80;
	$tdataleavebalance[".ShortName"] = "leavebalance";
	$tdataleavebalance[".OwnerID"] = "";
	$tdataleavebalance[".OriginalTable"] = "leavebalance";

//	field labels
$fieldLabelsleavebalance = array();
$fieldToolTipsleavebalance = array();
$pageTitlesleavebalance = array();
$placeHoldersleavebalance = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsleavebalance["English"] = array();
	$fieldToolTipsleavebalance["English"] = array();
	$placeHoldersleavebalance["English"] = array();
	$pageTitlesleavebalance["English"] = array();
	$fieldLabelsleavebalance["English"]["EmployeeID"] = "Employee";
	$fieldToolTipsleavebalance["English"]["EmployeeID"] = "";
	$placeHoldersleavebalance["English"]["EmployeeID"] = "";
	$fieldLabelsleavebalance["English"]["AllowableSickLeave"] = "Allowable Sick Leave";
	$fieldToolTipsleavebalance["English"]["AllowableSickLeave"] = "";
	$placeHoldersleavebalance["English"]["AllowableSickLeave"] = "";
	$fieldLabelsleavebalance["English"]["TotalSL"] = "Total SL";
	$fieldToolTipsleavebalance["English"]["TotalSL"] = "";
	$placeHoldersleavebalance["English"]["TotalSL"] = "";
	$fieldLabelsleavebalance["English"]["AllowableVacationLeave"] = "Allowable Vacation Leave";
	$fieldToolTipsleavebalance["English"]["AllowableVacationLeave"] = "";
	$placeHoldersleavebalance["English"]["AllowableVacationLeave"] = "";
	$fieldLabelsleavebalance["English"]["TotalVL"] = "Total VL";
	$fieldToolTipsleavebalance["English"]["TotalVL"] = "";
	$placeHoldersleavebalance["English"]["TotalVL"] = "";
	$fieldLabelsleavebalance["English"]["AllowableEmergencyLeave"] = "Allowable Emergency Leave";
	$fieldToolTipsleavebalance["English"]["AllowableEmergencyLeave"] = "";
	$placeHoldersleavebalance["English"]["AllowableEmergencyLeave"] = "";
	$fieldLabelsleavebalance["English"]["TotalEL"] = "Total EL";
	$fieldToolTipsleavebalance["English"]["TotalEL"] = "";
	$placeHoldersleavebalance["English"]["TotalEL"] = "";
	$fieldLabelsleavebalance["English"]["AllowablePaternityLeave"] = "Allowable Paternity Leave";
	$fieldToolTipsleavebalance["English"]["AllowablePaternityLeave"] = "";
	$placeHoldersleavebalance["English"]["AllowablePaternityLeave"] = "";
	$fieldLabelsleavebalance["English"]["TotalPL"] = "Total PL";
	$fieldToolTipsleavebalance["English"]["TotalPL"] = "";
	$placeHoldersleavebalance["English"]["TotalPL"] = "";
	$fieldLabelsleavebalance["English"]["SLBalance"] = "SLBalance";
	$fieldToolTipsleavebalance["English"]["SLBalance"] = "";
	$placeHoldersleavebalance["English"]["SLBalance"] = "";
	$fieldLabelsleavebalance["English"]["VLBalance"] = "VLBalance";
	$fieldToolTipsleavebalance["English"]["VLBalance"] = "";
	$placeHoldersleavebalance["English"]["VLBalance"] = "";
	$fieldLabelsleavebalance["English"]["ELBalance"] = "ELBalance";
	$fieldToolTipsleavebalance["English"]["ELBalance"] = "";
	$placeHoldersleavebalance["English"]["ELBalance"] = "";
	$fieldLabelsleavebalance["English"]["PLBalance"] = "PLBalance";
	$fieldToolTipsleavebalance["English"]["PLBalance"] = "";
	$placeHoldersleavebalance["English"]["PLBalance"] = "";
	$fieldLabelsleavebalance["English"]["user_name"] = "User Name";
	$fieldToolTipsleavebalance["English"]["user_name"] = "";
	$placeHoldersleavebalance["English"]["user_name"] = "";
	if (count($fieldToolTipsleavebalance["English"]))
		$tdataleavebalance[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsleavebalance[""] = array();
	$fieldToolTipsleavebalance[""] = array();
	$placeHoldersleavebalance[""] = array();
	$pageTitlesleavebalance[""] = array();
	if (count($fieldToolTipsleavebalance[""]))
		$tdataleavebalance[".isUseToolTips"] = true;
}


	$tdataleavebalance[".NCSearch"] = true;



$tdataleavebalance[".shortTableName"] = "leavebalance";
$tdataleavebalance[".nSecOptions"] = 0;
$tdataleavebalance[".recsPerRowPrint"] = 1;
$tdataleavebalance[".mainTableOwnerID"] = "";
$tdataleavebalance[".moveNext"] = 1;
$tdataleavebalance[".entityType"] = 0;

$tdataleavebalance[".strOriginalTableName"] = "leavebalance";

	



$tdataleavebalance[".showAddInPopup"] = false;

$tdataleavebalance[".showEditInPopup"] = false;

$tdataleavebalance[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataleavebalance[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataleavebalance[".fieldsForRegister"] = array();

$tdataleavebalance[".listAjax"] = false;

	$tdataleavebalance[".audit"] = false;

	$tdataleavebalance[".locking"] = false;

$tdataleavebalance[".edit"] = true;
$tdataleavebalance[".afterEditAction"] = 1;
$tdataleavebalance[".closePopupAfterEdit"] = 1;
$tdataleavebalance[".afterEditActionDetTable"] = "";


$tdataleavebalance[".list"] = true;

$tdataleavebalance[".inlineEdit"] = true;

$tdataleavebalance[".updateSelected"] = true;

$tdataleavebalance[".reorderRecordsByHeader"] = true;


$tdataleavebalance[".exportFormatting"] = 2;
$tdataleavebalance[".exportDelimiter"] = ",";
		
$tdataleavebalance[".view"] = true;


$tdataleavebalance[".exportTo"] = true;

$tdataleavebalance[".printFriendly"] = true;


$tdataleavebalance[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataleavebalance[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataleavebalance[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataleavebalance[".searchSaving"] = false;
//

$tdataleavebalance[".showSearchPanel"] = true;
		$tdataleavebalance[".flexibleSearch"] = true;

$tdataleavebalance[".isUseAjaxSuggest"] = true;

$tdataleavebalance[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																		

$tdataleavebalance[".ajaxCodeSnippetAdded"] = false;

$tdataleavebalance[".buttonsAdded"] = false;

$tdataleavebalance[".addPageEvents"] = false;

// use timepicker for search panel
$tdataleavebalance[".isUseTimeForSearch"] = false;





$tdataleavebalance[".allSearchFields"] = array();
$tdataleavebalance[".filterFields"] = array();
$tdataleavebalance[".requiredSearchFields"] = array();

$tdataleavebalance[".allSearchFields"][] = "EmployeeID";
	$tdataleavebalance[".allSearchFields"][] = "AllowableSickLeave";
	$tdataleavebalance[".allSearchFields"][] = "TotalSL";
	$tdataleavebalance[".allSearchFields"][] = "AllowableVacationLeave";
	$tdataleavebalance[".allSearchFields"][] = "TotalVL";
	$tdataleavebalance[".allSearchFields"][] = "AllowableEmergencyLeave";
	$tdataleavebalance[".allSearchFields"][] = "TotalEL";
	$tdataleavebalance[".allSearchFields"][] = "AllowablePaternityLeave";
	$tdataleavebalance[".allSearchFields"][] = "TotalPL";
	$tdataleavebalance[".allSearchFields"][] = "SLBalance";
	$tdataleavebalance[".allSearchFields"][] = "VLBalance";
	$tdataleavebalance[".allSearchFields"][] = "ELBalance";
	$tdataleavebalance[".allSearchFields"][] = "PLBalance";
	

$tdataleavebalance[".googleLikeFields"] = array();
$tdataleavebalance[".googleLikeFields"][] = "EmployeeID";
$tdataleavebalance[".googleLikeFields"][] = "AllowableSickLeave";
$tdataleavebalance[".googleLikeFields"][] = "TotalSL";
$tdataleavebalance[".googleLikeFields"][] = "AllowableVacationLeave";
$tdataleavebalance[".googleLikeFields"][] = "TotalVL";
$tdataleavebalance[".googleLikeFields"][] = "AllowableEmergencyLeave";
$tdataleavebalance[".googleLikeFields"][] = "TotalEL";
$tdataleavebalance[".googleLikeFields"][] = "AllowablePaternityLeave";
$tdataleavebalance[".googleLikeFields"][] = "TotalPL";
$tdataleavebalance[".googleLikeFields"][] = "SLBalance";
$tdataleavebalance[".googleLikeFields"][] = "VLBalance";
$tdataleavebalance[".googleLikeFields"][] = "ELBalance";
$tdataleavebalance[".googleLikeFields"][] = "PLBalance";
$tdataleavebalance[".googleLikeFields"][] = "user_name";


$tdataleavebalance[".advSearchFields"] = array();
$tdataleavebalance[".advSearchFields"][] = "EmployeeID";
$tdataleavebalance[".advSearchFields"][] = "AllowableSickLeave";
$tdataleavebalance[".advSearchFields"][] = "TotalSL";
$tdataleavebalance[".advSearchFields"][] = "AllowableVacationLeave";
$tdataleavebalance[".advSearchFields"][] = "TotalVL";
$tdataleavebalance[".advSearchFields"][] = "AllowableEmergencyLeave";
$tdataleavebalance[".advSearchFields"][] = "TotalEL";
$tdataleavebalance[".advSearchFields"][] = "AllowablePaternityLeave";
$tdataleavebalance[".advSearchFields"][] = "TotalPL";
$tdataleavebalance[".advSearchFields"][] = "SLBalance";
$tdataleavebalance[".advSearchFields"][] = "VLBalance";
$tdataleavebalance[".advSearchFields"][] = "ELBalance";
$tdataleavebalance[".advSearchFields"][] = "PLBalance";

$tdataleavebalance[".tableType"] = "list";

$tdataleavebalance[".printerPageOrientation"] = 0;
$tdataleavebalance[".nPrinterPageScale"] = 100;

$tdataleavebalance[".nPrinterSplitRecords"] = 40;

$tdataleavebalance[".nPrinterPDFSplitRecords"] = 40;



$tdataleavebalance[".geocodingEnabled"] = false;





$tdataleavebalance[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataleavebalance[".pageSize"] = 20;

$tdataleavebalance[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY demo_user.user_name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataleavebalance[".strOrderBy"] = $tstrOrderBy;

$tdataleavebalance[".orderindexes"] = array();
	$tdataleavebalance[".orderindexes"][] = array(14, (1 ? "ASC" : "DESC"), "demo_user.user_name");


$tdataleavebalance[".sqlHead"] = "SELECT leavebalance.EmployeeID,  leavebalance.AllowableSickLeave,  leavebalance.TotalSL,  leavebalance.AllowableVacationLeave,  leavebalance.TotalVL,  leavebalance.AllowableEmergencyLeave,  leavebalance.TotalEL,  leavebalance.AllowablePaternityLeave,  leavebalance.TotalPL,  leavebalance.SLBalance,  leavebalance.VLBalance,  leavebalance.ELBalance,  leavebalance.PLBalance,  demo_user.user_name";
$tdataleavebalance[".sqlFrom"] = "FROM leavebalance  INNER JOIN demo_user ON leavebalance.EmployeeID = demo_user.EmployeeID";
$tdataleavebalance[".sqlWhereExpr"] = "";
$tdataleavebalance[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataleavebalance[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataleavebalance[".arrGroupsPerPage"] = $arrGPP;

$tdataleavebalance[".highlightSearchResults"] = true;

$tableKeysleavebalance = array();
$tableKeysleavebalance[] = "EmployeeID";
$tdataleavebalance[".Keys"] = $tableKeysleavebalance;

$tdataleavebalance[".listFields"] = array();
$tdataleavebalance[".listFields"][] = "EmployeeID";
$tdataleavebalance[".listFields"][] = "AllowableSickLeave";
$tdataleavebalance[".listFields"][] = "TotalSL";
$tdataleavebalance[".listFields"][] = "AllowableVacationLeave";
$tdataleavebalance[".listFields"][] = "TotalVL";
$tdataleavebalance[".listFields"][] = "AllowableEmergencyLeave";
$tdataleavebalance[".listFields"][] = "TotalEL";
$tdataleavebalance[".listFields"][] = "AllowablePaternityLeave";
$tdataleavebalance[".listFields"][] = "TotalPL";
$tdataleavebalance[".listFields"][] = "SLBalance";
$tdataleavebalance[".listFields"][] = "VLBalance";
$tdataleavebalance[".listFields"][] = "ELBalance";
$tdataleavebalance[".listFields"][] = "PLBalance";

$tdataleavebalance[".hideMobileList"] = array();


$tdataleavebalance[".viewFields"] = array();
$tdataleavebalance[".viewFields"][] = "EmployeeID";
$tdataleavebalance[".viewFields"][] = "AllowableSickLeave";
$tdataleavebalance[".viewFields"][] = "TotalSL";
$tdataleavebalance[".viewFields"][] = "AllowableVacationLeave";
$tdataleavebalance[".viewFields"][] = "TotalVL";
$tdataleavebalance[".viewFields"][] = "AllowableEmergencyLeave";
$tdataleavebalance[".viewFields"][] = "TotalEL";
$tdataleavebalance[".viewFields"][] = "AllowablePaternityLeave";
$tdataleavebalance[".viewFields"][] = "TotalPL";
$tdataleavebalance[".viewFields"][] = "SLBalance";
$tdataleavebalance[".viewFields"][] = "VLBalance";
$tdataleavebalance[".viewFields"][] = "ELBalance";
$tdataleavebalance[".viewFields"][] = "PLBalance";
$tdataleavebalance[".viewFields"][] = "user_name";

$tdataleavebalance[".addFields"] = array();

$tdataleavebalance[".masterListFields"] = array();
$tdataleavebalance[".masterListFields"][] = "EmployeeID";
$tdataleavebalance[".masterListFields"][] = "AllowableSickLeave";
$tdataleavebalance[".masterListFields"][] = "TotalSL";
$tdataleavebalance[".masterListFields"][] = "AllowableVacationLeave";
$tdataleavebalance[".masterListFields"][] = "TotalVL";
$tdataleavebalance[".masterListFields"][] = "AllowableEmergencyLeave";
$tdataleavebalance[".masterListFields"][] = "TotalEL";
$tdataleavebalance[".masterListFields"][] = "AllowablePaternityLeave";
$tdataleavebalance[".masterListFields"][] = "TotalPL";
$tdataleavebalance[".masterListFields"][] = "SLBalance";
$tdataleavebalance[".masterListFields"][] = "VLBalance";
$tdataleavebalance[".masterListFields"][] = "ELBalance";
$tdataleavebalance[".masterListFields"][] = "PLBalance";
$tdataleavebalance[".masterListFields"][] = "user_name";

$tdataleavebalance[".inlineAddFields"] = array();

$tdataleavebalance[".editFields"] = array();
$tdataleavebalance[".editFields"][] = "EmployeeID";
$tdataleavebalance[".editFields"][] = "AllowableSickLeave";
$tdataleavebalance[".editFields"][] = "TotalSL";
$tdataleavebalance[".editFields"][] = "AllowableVacationLeave";
$tdataleavebalance[".editFields"][] = "TotalVL";
$tdataleavebalance[".editFields"][] = "AllowableEmergencyLeave";
$tdataleavebalance[".editFields"][] = "TotalEL";
$tdataleavebalance[".editFields"][] = "AllowablePaternityLeave";
$tdataleavebalance[".editFields"][] = "TotalPL";
$tdataleavebalance[".editFields"][] = "SLBalance";
$tdataleavebalance[".editFields"][] = "VLBalance";
$tdataleavebalance[".editFields"][] = "ELBalance";
$tdataleavebalance[".editFields"][] = "PLBalance";
$tdataleavebalance[".editFields"][] = "user_name";

$tdataleavebalance[".inlineEditFields"] = array();
$tdataleavebalance[".inlineEditFields"][] = "EmployeeID";
$tdataleavebalance[".inlineEditFields"][] = "AllowableSickLeave";
$tdataleavebalance[".inlineEditFields"][] = "TotalSL";
$tdataleavebalance[".inlineEditFields"][] = "AllowableVacationLeave";
$tdataleavebalance[".inlineEditFields"][] = "TotalVL";
$tdataleavebalance[".inlineEditFields"][] = "AllowableEmergencyLeave";
$tdataleavebalance[".inlineEditFields"][] = "TotalEL";
$tdataleavebalance[".inlineEditFields"][] = "AllowablePaternityLeave";
$tdataleavebalance[".inlineEditFields"][] = "TotalPL";
$tdataleavebalance[".inlineEditFields"][] = "SLBalance";
$tdataleavebalance[".inlineEditFields"][] = "VLBalance";
$tdataleavebalance[".inlineEditFields"][] = "ELBalance";
$tdataleavebalance[".inlineEditFields"][] = "PLBalance";

$tdataleavebalance[".updateSelectedFields"] = array();
$tdataleavebalance[".updateSelectedFields"][] = "EmployeeID";
$tdataleavebalance[".updateSelectedFields"][] = "AllowableSickLeave";
$tdataleavebalance[".updateSelectedFields"][] = "TotalSL";
$tdataleavebalance[".updateSelectedFields"][] = "AllowableVacationLeave";
$tdataleavebalance[".updateSelectedFields"][] = "TotalVL";
$tdataleavebalance[".updateSelectedFields"][] = "AllowableEmergencyLeave";
$tdataleavebalance[".updateSelectedFields"][] = "TotalEL";
$tdataleavebalance[".updateSelectedFields"][] = "AllowablePaternityLeave";
$tdataleavebalance[".updateSelectedFields"][] = "TotalPL";
$tdataleavebalance[".updateSelectedFields"][] = "SLBalance";
$tdataleavebalance[".updateSelectedFields"][] = "VLBalance";
$tdataleavebalance[".updateSelectedFields"][] = "ELBalance";
$tdataleavebalance[".updateSelectedFields"][] = "PLBalance";
$tdataleavebalance[".updateSelectedFields"][] = "user_name";


$tdataleavebalance[".exportFields"] = array();
$tdataleavebalance[".exportFields"][] = "EmployeeID";
$tdataleavebalance[".exportFields"][] = "AllowableSickLeave";
$tdataleavebalance[".exportFields"][] = "TotalSL";
$tdataleavebalance[".exportFields"][] = "AllowableVacationLeave";
$tdataleavebalance[".exportFields"][] = "TotalVL";
$tdataleavebalance[".exportFields"][] = "AllowableEmergencyLeave";
$tdataleavebalance[".exportFields"][] = "TotalEL";
$tdataleavebalance[".exportFields"][] = "AllowablePaternityLeave";
$tdataleavebalance[".exportFields"][] = "TotalPL";
$tdataleavebalance[".exportFields"][] = "SLBalance";
$tdataleavebalance[".exportFields"][] = "VLBalance";
$tdataleavebalance[".exportFields"][] = "ELBalance";
$tdataleavebalance[".exportFields"][] = "PLBalance";

$tdataleavebalance[".importFields"] = array();

$tdataleavebalance[".printFields"] = array();
$tdataleavebalance[".printFields"][] = "EmployeeID";
$tdataleavebalance[".printFields"][] = "AllowableSickLeave";
$tdataleavebalance[".printFields"][] = "TotalSL";
$tdataleavebalance[".printFields"][] = "AllowableVacationLeave";
$tdataleavebalance[".printFields"][] = "TotalVL";
$tdataleavebalance[".printFields"][] = "AllowableEmergencyLeave";
$tdataleavebalance[".printFields"][] = "TotalEL";
$tdataleavebalance[".printFields"][] = "AllowablePaternityLeave";
$tdataleavebalance[".printFields"][] = "TotalPL";
$tdataleavebalance[".printFields"][] = "SLBalance";
$tdataleavebalance[".printFields"][] = "VLBalance";
$tdataleavebalance[".printFields"][] = "ELBalance";
$tdataleavebalance[".printFields"][] = "PLBalance";


//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "leavebalance";
	$fdata["Label"] = GetFieldLabel("leavebalance","EmployeeID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EmployeeID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "leavebalance.EmployeeID";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataleavebalance["EmployeeID"] = $fdata;
//	AllowableSickLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AllowableSickLeave";
	$fdata["GoodName"] = "AllowableSickLeave";
	$fdata["ownerTable"] = "leavebalance";
	$fdata["Label"] = GetFieldLabel("leavebalance","AllowableSickLeave");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AllowableSickLeave";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "leavebalance.AllowableSickLeave";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataleavebalance["AllowableSickLeave"] = $fdata;
//	TotalSL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TotalSL";
	$fdata["GoodName"] = "TotalSL";
	$fdata["ownerTable"] = "leavebalance";
	$fdata["Label"] = GetFieldLabel("leavebalance","TotalSL");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TotalSL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "leavebalance.TotalSL";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataleavebalance["TotalSL"] = $fdata;
//	AllowableVacationLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AllowableVacationLeave";
	$fdata["GoodName"] = "AllowableVacationLeave";
	$fdata["ownerTable"] = "leavebalance";
	$fdata["Label"] = GetFieldLabel("leavebalance","AllowableVacationLeave");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AllowableVacationLeave";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "leavebalance.AllowableVacationLeave";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataleavebalance["AllowableVacationLeave"] = $fdata;
//	TotalVL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TotalVL";
	$fdata["GoodName"] = "TotalVL";
	$fdata["ownerTable"] = "leavebalance";
	$fdata["Label"] = GetFieldLabel("leavebalance","TotalVL");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TotalVL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "leavebalance.TotalVL";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataleavebalance["TotalVL"] = $fdata;
//	AllowableEmergencyLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "AllowableEmergencyLeave";
	$fdata["GoodName"] = "AllowableEmergencyLeave";
	$fdata["ownerTable"] = "leavebalance";
	$fdata["Label"] = GetFieldLabel("leavebalance","AllowableEmergencyLeave");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AllowableEmergencyLeave";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "leavebalance.AllowableEmergencyLeave";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataleavebalance["AllowableEmergencyLeave"] = $fdata;
//	TotalEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TotalEL";
	$fdata["GoodName"] = "TotalEL";
	$fdata["ownerTable"] = "leavebalance";
	$fdata["Label"] = GetFieldLabel("leavebalance","TotalEL");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TotalEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "leavebalance.TotalEL";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataleavebalance["TotalEL"] = $fdata;
//	AllowablePaternityLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "AllowablePaternityLeave";
	$fdata["GoodName"] = "AllowablePaternityLeave";
	$fdata["ownerTable"] = "leavebalance";
	$fdata["Label"] = GetFieldLabel("leavebalance","AllowablePaternityLeave");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AllowablePaternityLeave";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "leavebalance.AllowablePaternityLeave";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataleavebalance["AllowablePaternityLeave"] = $fdata;
//	TotalPL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "TotalPL";
	$fdata["GoodName"] = "TotalPL";
	$fdata["ownerTable"] = "leavebalance";
	$fdata["Label"] = GetFieldLabel("leavebalance","TotalPL");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TotalPL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "leavebalance.TotalPL";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataleavebalance["TotalPL"] = $fdata;
//	SLBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "SLBalance";
	$fdata["GoodName"] = "SLBalance";
	$fdata["ownerTable"] = "leavebalance";
	$fdata["Label"] = GetFieldLabel("leavebalance","SLBalance");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SLBalance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "leavebalance.SLBalance";

	
	
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




	$tdataleavebalance["SLBalance"] = $fdata;
//	VLBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "VLBalance";
	$fdata["GoodName"] = "VLBalance";
	$fdata["ownerTable"] = "leavebalance";
	$fdata["Label"] = GetFieldLabel("leavebalance","VLBalance");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "VLBalance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "leavebalance.VLBalance";

	
	
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




	$tdataleavebalance["VLBalance"] = $fdata;
//	ELBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ELBalance";
	$fdata["GoodName"] = "ELBalance";
	$fdata["ownerTable"] = "leavebalance";
	$fdata["Label"] = GetFieldLabel("leavebalance","ELBalance");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ELBalance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "leavebalance.ELBalance";

	
	
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




	$tdataleavebalance["ELBalance"] = $fdata;
//	PLBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "PLBalance";
	$fdata["GoodName"] = "PLBalance";
	$fdata["ownerTable"] = "leavebalance";
	$fdata["Label"] = GetFieldLabel("leavebalance","PLBalance");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PLBalance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "leavebalance.PLBalance";

	
	
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




	$tdataleavebalance["PLBalance"] = $fdata;
//	user_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "user_name";
	$fdata["GoodName"] = "user_name";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("leavebalance","user_name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "user_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "demo_user.user_name";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataleavebalance["user_name"] = $fdata;


$tables_data["leavebalance"]=&$tdataleavebalance;
$field_labels["leavebalance"] = &$fieldLabelsleavebalance;
$fieldToolTips["leavebalance"] = &$fieldToolTipsleavebalance;
$placeHolders["leavebalance"] = &$placeHoldersleavebalance;
$page_titles["leavebalance"] = &$pageTitlesleavebalance;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["leavebalance"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["leavebalance"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_leavebalance()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "leavebalance.EmployeeID,  leavebalance.AllowableSickLeave,  leavebalance.TotalSL,  leavebalance.AllowableVacationLeave,  leavebalance.TotalVL,  leavebalance.AllowableEmergencyLeave,  leavebalance.TotalEL,  leavebalance.AllowablePaternityLeave,  leavebalance.TotalPL,  leavebalance.SLBalance,  leavebalance.VLBalance,  leavebalance.ELBalance,  leavebalance.PLBalance,  demo_user.user_name";
$proto0["m_strFrom"] = "FROM leavebalance  INNER JOIN demo_user ON leavebalance.EmployeeID = demo_user.EmployeeID";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY demo_user.user_name";
	
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
	"m_strName" => "EmployeeID",
	"m_strTable" => "leavebalance",
	"m_srcTableName" => "leavebalance"
));

$proto6["m_sql"] = "leavebalance.EmployeeID";
$proto6["m_srcTableName"] = "leavebalance";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableSickLeave",
	"m_strTable" => "leavebalance",
	"m_srcTableName" => "leavebalance"
));

$proto8["m_sql"] = "leavebalance.AllowableSickLeave";
$proto8["m_srcTableName"] = "leavebalance";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalSL",
	"m_strTable" => "leavebalance",
	"m_srcTableName" => "leavebalance"
));

$proto10["m_sql"] = "leavebalance.TotalSL";
$proto10["m_srcTableName"] = "leavebalance";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableVacationLeave",
	"m_strTable" => "leavebalance",
	"m_srcTableName" => "leavebalance"
));

$proto12["m_sql"] = "leavebalance.AllowableVacationLeave";
$proto12["m_srcTableName"] = "leavebalance";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalVL",
	"m_strTable" => "leavebalance",
	"m_srcTableName" => "leavebalance"
));

$proto14["m_sql"] = "leavebalance.TotalVL";
$proto14["m_srcTableName"] = "leavebalance";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableEmergencyLeave",
	"m_strTable" => "leavebalance",
	"m_srcTableName" => "leavebalance"
));

$proto16["m_sql"] = "leavebalance.AllowableEmergencyLeave";
$proto16["m_srcTableName"] = "leavebalance";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalEL",
	"m_strTable" => "leavebalance",
	"m_srcTableName" => "leavebalance"
));

$proto18["m_sql"] = "leavebalance.TotalEL";
$proto18["m_srcTableName"] = "leavebalance";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowablePaternityLeave",
	"m_strTable" => "leavebalance",
	"m_srcTableName" => "leavebalance"
));

$proto20["m_sql"] = "leavebalance.AllowablePaternityLeave";
$proto20["m_srcTableName"] = "leavebalance";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalPL",
	"m_strTable" => "leavebalance",
	"m_srcTableName" => "leavebalance"
));

$proto22["m_sql"] = "leavebalance.TotalPL";
$proto22["m_srcTableName"] = "leavebalance";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "SLBalance",
	"m_strTable" => "leavebalance",
	"m_srcTableName" => "leavebalance"
));

$proto24["m_sql"] = "leavebalance.SLBalance";
$proto24["m_srcTableName"] = "leavebalance";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "VLBalance",
	"m_strTable" => "leavebalance",
	"m_srcTableName" => "leavebalance"
));

$proto26["m_sql"] = "leavebalance.VLBalance";
$proto26["m_srcTableName"] = "leavebalance";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ELBalance",
	"m_strTable" => "leavebalance",
	"m_srcTableName" => "leavebalance"
));

$proto28["m_sql"] = "leavebalance.ELBalance";
$proto28["m_srcTableName"] = "leavebalance";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "PLBalance",
	"m_strTable" => "leavebalance",
	"m_srcTableName" => "leavebalance"
));

$proto30["m_sql"] = "leavebalance.PLBalance";
$proto30["m_srcTableName"] = "leavebalance";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "leavebalance"
));

$proto32["m_sql"] = "demo_user.user_name";
$proto32["m_srcTableName"] = "leavebalance";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "leavebalance";
$proto35["m_srcTableName"] = "leavebalance";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "EmployeeID";
$proto35["m_columns"][] = "AllowableSickLeave";
$proto35["m_columns"][] = "TotalSL";
$proto35["m_columns"][] = "AllowableVacationLeave";
$proto35["m_columns"][] = "TotalVL";
$proto35["m_columns"][] = "AllowableEmergencyLeave";
$proto35["m_columns"][] = "TotalEL";
$proto35["m_columns"][] = "AllowablePaternityLeave";
$proto35["m_columns"][] = "TotalPL";
$proto35["m_columns"][] = "SLBalance";
$proto35["m_columns"][] = "VLBalance";
$proto35["m_columns"][] = "ELBalance";
$proto35["m_columns"][] = "PLBalance";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "leavebalance";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "leavebalance";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
												$proto38=array();
$proto38["m_link"] = "SQLL_INNERJOIN";
			$proto39=array();
$proto39["m_strName"] = "demo_user";
$proto39["m_srcTableName"] = "leavebalance";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "user_id";
$proto39["m_columns"][] = "user_name";
$proto39["m_columns"][] = "Photo";
$proto39["m_columns"][] = "user_photo";
$proto39["m_columns"][] = "SSSNo";
$proto39["m_columns"][] = "TIN";
$proto39["m_columns"][] = "Mobile";
$proto39["m_columns"][] = "Address";
$proto39["m_columns"][] = "Email";
$proto39["m_columns"][] = "EmployeeType";
$proto39["m_columns"][] = "BasicMonthlyPay";
$proto39["m_columns"][] = "BasicDailyPay";
$proto39["m_columns"][] = "EmployeeID";
$proto39["m_columns"][] = "Division";
$proto39["m_columns"][] = "Status";
$proto39["m_columns"][] = "Department";
$proto39["m_columns"][] = "AllowableSickLeave";
$proto39["m_columns"][] = "AllowableVacationLeave";
$proto39["m_columns"][] = "AllowableEmergencyLeave";
$proto39["m_columns"][] = "SSSEE";
$proto39["m_columns"][] = "SSSER";
$proto39["m_columns"][] = "PhilHealthEE";
$proto39["m_columns"][] = "PhilHealthER";
$proto39["m_columns"][] = "PagIbigEE";
$proto39["m_columns"][] = "AllowablePaternityLeave";
$proto39["m_columns"][] = "HiredDate";
$proto39["m_columns"][] = "Inactive";
$proto39["m_columns"][] = "ExitDate";
$proto39["m_columns"][] = "PagIbigER";
$proto39["m_columns"][] = "PagIbigNo";
$proto39["m_columns"][] = "PhilHealthNo";
$proto39["m_columns"][] = "SSSEC";
$proto39["m_columns"][] = "Filex";
$proto39["m_columns"][] = "PresetTax";
$proto39["m_columns"][] = "AgentSharePerDay";
$proto39["m_columns"][] = "AllowancePerDay";
$proto39["m_columns"][] = "DeMinimis";
$proto39["m_columns"][] = "Level";
$proto39["m_columns"][] = "DateCreated";
$proto39["m_columns"][] = "ApprovedDate";
$proto39["m_columns"][] = "Approved";
$proto39["m_columns"][] = "Approvedby";
$proto39["m_columns"][] = "Preparedby";
$proto39["m_columns"][] = "Checkedby";
$proto39["m_columns"][] = "CheckedDate";
$proto39["m_columns"][] = "Checked";
$proto39["m_columns"][] = "AdjustedMonthlyPay";
$proto39["m_columns"][] = "AdjustedDailyPay";
$proto39["m_columns"][] = "Superior";
$proto39["m_columns"][] = "Position";
$proto39["m_columns"][] = "Employer";
$proto39["m_columns"][] = "IDNo";
$proto39["m_columns"][] = "AccountNo";
$proto39["m_columns"][] = "LogID";
$proto39["m_columns"][] = "LateFixPenalty";
$proto39["m_columns"][] = "DoNotUpdateContributions";
$proto39["m_columns"][] = "ExcludeContributionOnPayroll";
$proto39["m_columns"][] = "Birthday";
$proto39["m_columns"][] = "Bank";
$proto39["m_columns"][] = "NoLateDeduction";
$proto39["m_columns"][] = "IncludeBreakLate";
$proto39["m_columns"][] = "GracePeriodMins";
$proto39["m_columns"][] = "WithAdditionalBreaks";
$proto39["m_columns"][] = "TaxPeriods";
$proto39["m_columns"][] = "PresetMoNonTax";
$proto39["m_columns"][] = "PreCalMoTaxable";
$proto39["m_columns"][] = "CalMonthly";
$proto39["m_columns"][] = "TaxPerPeriod";
$proto39["m_columns"][] = "Superior2";
$proto39["m_columns"][] = "ExcludeBio";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "INNER JOIN demo_user ON leavebalance.EmployeeID = demo_user.EmployeeID";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "leavebalance";
$proto40=array();
$proto40["m_sql"] = "leavebalance.EmployeeID = demo_user.EmployeeID";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "leavebalance",
	"m_srcTableName" => "leavebalance"
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "= demo_user.EmployeeID";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "leavebalance"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 1;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="leavebalance";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_leavebalance = createSqlQuery_leavebalance();


	
		;

														

$tdataleavebalance[".sqlquery"] = $queryData_leavebalance;

$tableEvents["leavebalance"] = new eventsBase;
$tdataleavebalance[".hasEvents"] = false;

?>