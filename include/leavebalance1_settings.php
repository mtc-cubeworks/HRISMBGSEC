<?php
require_once(getabspath("classes/cipherer.php"));




$tdataleavebalance1 = array();
	$tdataleavebalance1[".truncateText"] = true;
	$tdataleavebalance1[".NumberOfChars"] = 80;
	$tdataleavebalance1[".ShortName"] = "leavebalance1";
	$tdataleavebalance1[".OwnerID"] = "EmployeeID";
	$tdataleavebalance1[".OriginalTable"] = "leavebalance";

//	field labels
$fieldLabelsleavebalance1 = array();
$fieldToolTipsleavebalance1 = array();
$pageTitlesleavebalance1 = array();
$placeHoldersleavebalance1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsleavebalance1["English"] = array();
	$fieldToolTipsleavebalance1["English"] = array();
	$placeHoldersleavebalance1["English"] = array();
	$pageTitlesleavebalance1["English"] = array();
	$fieldLabelsleavebalance1["English"]["EmployeeID"] = "Employee";
	$fieldToolTipsleavebalance1["English"]["EmployeeID"] = "";
	$placeHoldersleavebalance1["English"]["EmployeeID"] = "";
	$fieldLabelsleavebalance1["English"]["AllowableSickLeave"] = "Allowable Sick Leave";
	$fieldToolTipsleavebalance1["English"]["AllowableSickLeave"] = "";
	$placeHoldersleavebalance1["English"]["AllowableSickLeave"] = "";
	$fieldLabelsleavebalance1["English"]["TotalSL"] = "Total SL";
	$fieldToolTipsleavebalance1["English"]["TotalSL"] = "";
	$placeHoldersleavebalance1["English"]["TotalSL"] = "";
	$fieldLabelsleavebalance1["English"]["AllowableVacationLeave"] = "Allowable Vacation Leave";
	$fieldToolTipsleavebalance1["English"]["AllowableVacationLeave"] = "";
	$placeHoldersleavebalance1["English"]["AllowableVacationLeave"] = "";
	$fieldLabelsleavebalance1["English"]["TotalVL"] = "Total VL";
	$fieldToolTipsleavebalance1["English"]["TotalVL"] = "";
	$placeHoldersleavebalance1["English"]["TotalVL"] = "";
	$fieldLabelsleavebalance1["English"]["AllowableEmergencyLeave"] = "Allowable Emergency Leave";
	$fieldToolTipsleavebalance1["English"]["AllowableEmergencyLeave"] = "";
	$placeHoldersleavebalance1["English"]["AllowableEmergencyLeave"] = "";
	$fieldLabelsleavebalance1["English"]["TotalEL"] = "Total EL";
	$fieldToolTipsleavebalance1["English"]["TotalEL"] = "";
	$placeHoldersleavebalance1["English"]["TotalEL"] = "";
	$fieldLabelsleavebalance1["English"]["AllowablePaternityLeave"] = "Allowable Paternity Leave";
	$fieldToolTipsleavebalance1["English"]["AllowablePaternityLeave"] = "";
	$placeHoldersleavebalance1["English"]["AllowablePaternityLeave"] = "";
	$fieldLabelsleavebalance1["English"]["TotalPL"] = "Total PL";
	$fieldToolTipsleavebalance1["English"]["TotalPL"] = "";
	$placeHoldersleavebalance1["English"]["TotalPL"] = "";
	$fieldLabelsleavebalance1["English"]["SLBalance"] = "SLBalance";
	$fieldToolTipsleavebalance1["English"]["SLBalance"] = "";
	$placeHoldersleavebalance1["English"]["SLBalance"] = "";
	$fieldLabelsleavebalance1["English"]["VLBalance"] = "VLBalance";
	$fieldToolTipsleavebalance1["English"]["VLBalance"] = "";
	$placeHoldersleavebalance1["English"]["VLBalance"] = "";
	$fieldLabelsleavebalance1["English"]["ELBalance"] = "ELBalance";
	$fieldToolTipsleavebalance1["English"]["ELBalance"] = "";
	$placeHoldersleavebalance1["English"]["ELBalance"] = "";
	$fieldLabelsleavebalance1["English"]["PLBalance"] = "PLBalance";
	$fieldToolTipsleavebalance1["English"]["PLBalance"] = "";
	$placeHoldersleavebalance1["English"]["PLBalance"] = "";
	$fieldLabelsleavebalance1["English"]["user_name"] = "User Name";
	$fieldToolTipsleavebalance1["English"]["user_name"] = "";
	$placeHoldersleavebalance1["English"]["user_name"] = "";
	if (count($fieldToolTipsleavebalance1["English"]))
		$tdataleavebalance1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsleavebalance1[""] = array();
	$fieldToolTipsleavebalance1[""] = array();
	$placeHoldersleavebalance1[""] = array();
	$pageTitlesleavebalance1[""] = array();
	if (count($fieldToolTipsleavebalance1[""]))
		$tdataleavebalance1[".isUseToolTips"] = true;
}


	$tdataleavebalance1[".NCSearch"] = true;



$tdataleavebalance1[".shortTableName"] = "leavebalance1";
$tdataleavebalance1[".nSecOptions"] = 1;
$tdataleavebalance1[".recsPerRowPrint"] = 1;
$tdataleavebalance1[".mainTableOwnerID"] = "EmployeeID";
$tdataleavebalance1[".moveNext"] = 1;
$tdataleavebalance1[".entityType"] = 1;

$tdataleavebalance1[".strOriginalTableName"] = "leavebalance";

	



$tdataleavebalance1[".showAddInPopup"] = false;

$tdataleavebalance1[".showEditInPopup"] = false;

$tdataleavebalance1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataleavebalance1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataleavebalance1[".fieldsForRegister"] = array();

$tdataleavebalance1[".listAjax"] = false;

	$tdataleavebalance1[".audit"] = false;

	$tdataleavebalance1[".locking"] = false;

$tdataleavebalance1[".edit"] = true;
$tdataleavebalance1[".afterEditAction"] = 1;
$tdataleavebalance1[".closePopupAfterEdit"] = 1;
$tdataleavebalance1[".afterEditActionDetTable"] = "";


$tdataleavebalance1[".list"] = true;

$tdataleavebalance1[".inlineEdit"] = true;


$tdataleavebalance1[".reorderRecordsByHeader"] = true;


$tdataleavebalance1[".exportFormatting"] = 2;
$tdataleavebalance1[".exportDelimiter"] = ",";
		
$tdataleavebalance1[".view"] = true;


$tdataleavebalance1[".exportTo"] = true;

$tdataleavebalance1[".printFriendly"] = true;


$tdataleavebalance1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataleavebalance1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataleavebalance1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataleavebalance1[".searchSaving"] = false;
//

$tdataleavebalance1[".showSearchPanel"] = true;
		$tdataleavebalance1[".flexibleSearch"] = true;

$tdataleavebalance1[".isUseAjaxSuggest"] = true;

$tdataleavebalance1[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																		

$tdataleavebalance1[".ajaxCodeSnippetAdded"] = false;

$tdataleavebalance1[".buttonsAdded"] = false;

$tdataleavebalance1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataleavebalance1[".isUseTimeForSearch"] = false;



$tdataleavebalance1[".badgeColor"] = "CD5C5C";


$tdataleavebalance1[".allSearchFields"] = array();
$tdataleavebalance1[".filterFields"] = array();
$tdataleavebalance1[".requiredSearchFields"] = array();

$tdataleavebalance1[".allSearchFields"][] = "EmployeeID";
	$tdataleavebalance1[".allSearchFields"][] = "AllowableSickLeave";
	$tdataleavebalance1[".allSearchFields"][] = "TotalSL";
	$tdataleavebalance1[".allSearchFields"][] = "AllowableVacationLeave";
	$tdataleavebalance1[".allSearchFields"][] = "TotalVL";
	$tdataleavebalance1[".allSearchFields"][] = "AllowableEmergencyLeave";
	$tdataleavebalance1[".allSearchFields"][] = "TotalEL";
	$tdataleavebalance1[".allSearchFields"][] = "AllowablePaternityLeave";
	$tdataleavebalance1[".allSearchFields"][] = "TotalPL";
	$tdataleavebalance1[".allSearchFields"][] = "SLBalance";
	$tdataleavebalance1[".allSearchFields"][] = "VLBalance";
	$tdataleavebalance1[".allSearchFields"][] = "ELBalance";
	$tdataleavebalance1[".allSearchFields"][] = "PLBalance";
	

$tdataleavebalance1[".googleLikeFields"] = array();
$tdataleavebalance1[".googleLikeFields"][] = "EmployeeID";
$tdataleavebalance1[".googleLikeFields"][] = "AllowableSickLeave";
$tdataleavebalance1[".googleLikeFields"][] = "TotalSL";
$tdataleavebalance1[".googleLikeFields"][] = "AllowableVacationLeave";
$tdataleavebalance1[".googleLikeFields"][] = "TotalVL";
$tdataleavebalance1[".googleLikeFields"][] = "AllowableEmergencyLeave";
$tdataleavebalance1[".googleLikeFields"][] = "TotalEL";
$tdataleavebalance1[".googleLikeFields"][] = "AllowablePaternityLeave";
$tdataleavebalance1[".googleLikeFields"][] = "TotalPL";
$tdataleavebalance1[".googleLikeFields"][] = "SLBalance";
$tdataleavebalance1[".googleLikeFields"][] = "VLBalance";
$tdataleavebalance1[".googleLikeFields"][] = "ELBalance";
$tdataleavebalance1[".googleLikeFields"][] = "PLBalance";
$tdataleavebalance1[".googleLikeFields"][] = "user_name";


$tdataleavebalance1[".advSearchFields"] = array();
$tdataleavebalance1[".advSearchFields"][] = "EmployeeID";
$tdataleavebalance1[".advSearchFields"][] = "AllowableSickLeave";
$tdataleavebalance1[".advSearchFields"][] = "TotalSL";
$tdataleavebalance1[".advSearchFields"][] = "AllowableVacationLeave";
$tdataleavebalance1[".advSearchFields"][] = "TotalVL";
$tdataleavebalance1[".advSearchFields"][] = "AllowableEmergencyLeave";
$tdataleavebalance1[".advSearchFields"][] = "TotalEL";
$tdataleavebalance1[".advSearchFields"][] = "AllowablePaternityLeave";
$tdataleavebalance1[".advSearchFields"][] = "TotalPL";
$tdataleavebalance1[".advSearchFields"][] = "SLBalance";
$tdataleavebalance1[".advSearchFields"][] = "VLBalance";
$tdataleavebalance1[".advSearchFields"][] = "ELBalance";
$tdataleavebalance1[".advSearchFields"][] = "PLBalance";

$tdataleavebalance1[".tableType"] = "list";

$tdataleavebalance1[".printerPageOrientation"] = 0;
$tdataleavebalance1[".nPrinterPageScale"] = 100;

$tdataleavebalance1[".nPrinterSplitRecords"] = 40;

$tdataleavebalance1[".nPrinterPDFSplitRecords"] = 40;



$tdataleavebalance1[".geocodingEnabled"] = false;





$tdataleavebalance1[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataleavebalance1[".pageSize"] = 20;

$tdataleavebalance1[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY demo_user.user_name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataleavebalance1[".strOrderBy"] = $tstrOrderBy;

$tdataleavebalance1[".orderindexes"] = array();
	$tdataleavebalance1[".orderindexes"][] = array(14, (1 ? "ASC" : "DESC"), "demo_user.user_name");


$tdataleavebalance1[".sqlHead"] = "SELECT leavebalance.EmployeeID,  leavebalance.AllowableSickLeave,  leavebalance.TotalSL,  leavebalance.AllowableVacationLeave,  leavebalance.TotalVL,  leavebalance.AllowableEmergencyLeave,  leavebalance.TotalEL,  leavebalance.AllowablePaternityLeave,  leavebalance.TotalPL,  leavebalance.SLBalance,  leavebalance.VLBalance,  leavebalance.ELBalance,  leavebalance.PLBalance,  demo_user.user_name";
$tdataleavebalance1[".sqlFrom"] = "FROM leavebalance  INNER JOIN demo_user ON leavebalance.EmployeeID = demo_user.EmployeeID";
$tdataleavebalance1[".sqlWhereExpr"] = "";
$tdataleavebalance1[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataleavebalance1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataleavebalance1[".arrGroupsPerPage"] = $arrGPP;

$tdataleavebalance1[".highlightSearchResults"] = true;

$tableKeysleavebalance1 = array();
$tableKeysleavebalance1[] = "EmployeeID";
$tdataleavebalance1[".Keys"] = $tableKeysleavebalance1;

$tdataleavebalance1[".listFields"] = array();
$tdataleavebalance1[".listFields"][] = "EmployeeID";
$tdataleavebalance1[".listFields"][] = "AllowableSickLeave";
$tdataleavebalance1[".listFields"][] = "TotalSL";
$tdataleavebalance1[".listFields"][] = "AllowableVacationLeave";
$tdataleavebalance1[".listFields"][] = "TotalVL";
$tdataleavebalance1[".listFields"][] = "AllowableEmergencyLeave";
$tdataleavebalance1[".listFields"][] = "TotalEL";
$tdataleavebalance1[".listFields"][] = "AllowablePaternityLeave";
$tdataleavebalance1[".listFields"][] = "TotalPL";
$tdataleavebalance1[".listFields"][] = "SLBalance";
$tdataleavebalance1[".listFields"][] = "VLBalance";
$tdataleavebalance1[".listFields"][] = "ELBalance";
$tdataleavebalance1[".listFields"][] = "PLBalance";

$tdataleavebalance1[".hideMobileList"] = array();


$tdataleavebalance1[".viewFields"] = array();
$tdataleavebalance1[".viewFields"][] = "EmployeeID";
$tdataleavebalance1[".viewFields"][] = "AllowableSickLeave";
$tdataleavebalance1[".viewFields"][] = "TotalSL";
$tdataleavebalance1[".viewFields"][] = "AllowableVacationLeave";
$tdataleavebalance1[".viewFields"][] = "TotalVL";
$tdataleavebalance1[".viewFields"][] = "AllowableEmergencyLeave";
$tdataleavebalance1[".viewFields"][] = "TotalEL";
$tdataleavebalance1[".viewFields"][] = "AllowablePaternityLeave";
$tdataleavebalance1[".viewFields"][] = "TotalPL";
$tdataleavebalance1[".viewFields"][] = "SLBalance";
$tdataleavebalance1[".viewFields"][] = "VLBalance";
$tdataleavebalance1[".viewFields"][] = "ELBalance";
$tdataleavebalance1[".viewFields"][] = "PLBalance";
$tdataleavebalance1[".viewFields"][] = "user_name";

$tdataleavebalance1[".addFields"] = array();

$tdataleavebalance1[".masterListFields"] = array();
$tdataleavebalance1[".masterListFields"][] = "EmployeeID";
$tdataleavebalance1[".masterListFields"][] = "AllowableSickLeave";
$tdataleavebalance1[".masterListFields"][] = "TotalSL";
$tdataleavebalance1[".masterListFields"][] = "AllowableVacationLeave";
$tdataleavebalance1[".masterListFields"][] = "TotalVL";
$tdataleavebalance1[".masterListFields"][] = "AllowableEmergencyLeave";
$tdataleavebalance1[".masterListFields"][] = "TotalEL";
$tdataleavebalance1[".masterListFields"][] = "AllowablePaternityLeave";
$tdataleavebalance1[".masterListFields"][] = "TotalPL";
$tdataleavebalance1[".masterListFields"][] = "SLBalance";
$tdataleavebalance1[".masterListFields"][] = "VLBalance";
$tdataleavebalance1[".masterListFields"][] = "ELBalance";
$tdataleavebalance1[".masterListFields"][] = "PLBalance";
$tdataleavebalance1[".masterListFields"][] = "user_name";

$tdataleavebalance1[".inlineAddFields"] = array();

$tdataleavebalance1[".editFields"] = array();
$tdataleavebalance1[".editFields"][] = "EmployeeID";
$tdataleavebalance1[".editFields"][] = "AllowableSickLeave";
$tdataleavebalance1[".editFields"][] = "TotalSL";
$tdataleavebalance1[".editFields"][] = "AllowableVacationLeave";
$tdataleavebalance1[".editFields"][] = "TotalVL";
$tdataleavebalance1[".editFields"][] = "AllowableEmergencyLeave";
$tdataleavebalance1[".editFields"][] = "TotalEL";
$tdataleavebalance1[".editFields"][] = "AllowablePaternityLeave";
$tdataleavebalance1[".editFields"][] = "TotalPL";
$tdataleavebalance1[".editFields"][] = "SLBalance";
$tdataleavebalance1[".editFields"][] = "VLBalance";
$tdataleavebalance1[".editFields"][] = "ELBalance";
$tdataleavebalance1[".editFields"][] = "PLBalance";
$tdataleavebalance1[".editFields"][] = "user_name";

$tdataleavebalance1[".inlineEditFields"] = array();
$tdataleavebalance1[".inlineEditFields"][] = "EmployeeID";
$tdataleavebalance1[".inlineEditFields"][] = "AllowableSickLeave";
$tdataleavebalance1[".inlineEditFields"][] = "TotalSL";
$tdataleavebalance1[".inlineEditFields"][] = "AllowableVacationLeave";
$tdataleavebalance1[".inlineEditFields"][] = "TotalVL";
$tdataleavebalance1[".inlineEditFields"][] = "AllowableEmergencyLeave";
$tdataleavebalance1[".inlineEditFields"][] = "TotalEL";
$tdataleavebalance1[".inlineEditFields"][] = "AllowablePaternityLeave";
$tdataleavebalance1[".inlineEditFields"][] = "TotalPL";
$tdataleavebalance1[".inlineEditFields"][] = "SLBalance";
$tdataleavebalance1[".inlineEditFields"][] = "VLBalance";
$tdataleavebalance1[".inlineEditFields"][] = "ELBalance";
$tdataleavebalance1[".inlineEditFields"][] = "PLBalance";

$tdataleavebalance1[".updateSelectedFields"] = array();
$tdataleavebalance1[".updateSelectedFields"][] = "EmployeeID";
$tdataleavebalance1[".updateSelectedFields"][] = "AllowableSickLeave";
$tdataleavebalance1[".updateSelectedFields"][] = "TotalSL";
$tdataleavebalance1[".updateSelectedFields"][] = "AllowableVacationLeave";
$tdataleavebalance1[".updateSelectedFields"][] = "TotalVL";
$tdataleavebalance1[".updateSelectedFields"][] = "AllowableEmergencyLeave";
$tdataleavebalance1[".updateSelectedFields"][] = "TotalEL";
$tdataleavebalance1[".updateSelectedFields"][] = "AllowablePaternityLeave";
$tdataleavebalance1[".updateSelectedFields"][] = "TotalPL";
$tdataleavebalance1[".updateSelectedFields"][] = "SLBalance";
$tdataleavebalance1[".updateSelectedFields"][] = "VLBalance";
$tdataleavebalance1[".updateSelectedFields"][] = "ELBalance";
$tdataleavebalance1[".updateSelectedFields"][] = "PLBalance";
$tdataleavebalance1[".updateSelectedFields"][] = "user_name";


$tdataleavebalance1[".exportFields"] = array();
$tdataleavebalance1[".exportFields"][] = "EmployeeID";
$tdataleavebalance1[".exportFields"][] = "AllowableSickLeave";
$tdataleavebalance1[".exportFields"][] = "TotalSL";
$tdataleavebalance1[".exportFields"][] = "AllowableVacationLeave";
$tdataleavebalance1[".exportFields"][] = "TotalVL";
$tdataleavebalance1[".exportFields"][] = "AllowableEmergencyLeave";
$tdataleavebalance1[".exportFields"][] = "TotalEL";
$tdataleavebalance1[".exportFields"][] = "AllowablePaternityLeave";
$tdataleavebalance1[".exportFields"][] = "TotalPL";
$tdataleavebalance1[".exportFields"][] = "SLBalance";
$tdataleavebalance1[".exportFields"][] = "VLBalance";
$tdataleavebalance1[".exportFields"][] = "ELBalance";
$tdataleavebalance1[".exportFields"][] = "PLBalance";

$tdataleavebalance1[".importFields"] = array();

$tdataleavebalance1[".printFields"] = array();
$tdataleavebalance1[".printFields"][] = "EmployeeID";
$tdataleavebalance1[".printFields"][] = "AllowableSickLeave";
$tdataleavebalance1[".printFields"][] = "TotalSL";
$tdataleavebalance1[".printFields"][] = "AllowableVacationLeave";
$tdataleavebalance1[".printFields"][] = "TotalVL";
$tdataleavebalance1[".printFields"][] = "AllowableEmergencyLeave";
$tdataleavebalance1[".printFields"][] = "TotalEL";
$tdataleavebalance1[".printFields"][] = "AllowablePaternityLeave";
$tdataleavebalance1[".printFields"][] = "TotalPL";
$tdataleavebalance1[".printFields"][] = "SLBalance";
$tdataleavebalance1[".printFields"][] = "VLBalance";
$tdataleavebalance1[".printFields"][] = "ELBalance";
$tdataleavebalance1[".printFields"][] = "PLBalance";


//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "leavebalance";
	$fdata["Label"] = GetFieldLabel("leavebalance1","EmployeeID");
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




	$tdataleavebalance1["EmployeeID"] = $fdata;
//	AllowableSickLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AllowableSickLeave";
	$fdata["GoodName"] = "AllowableSickLeave";
	$fdata["ownerTable"] = "leavebalance";
	$fdata["Label"] = GetFieldLabel("leavebalance1","AllowableSickLeave");
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




	$tdataleavebalance1["AllowableSickLeave"] = $fdata;
//	TotalSL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TotalSL";
	$fdata["GoodName"] = "TotalSL";
	$fdata["ownerTable"] = "leavebalance";
	$fdata["Label"] = GetFieldLabel("leavebalance1","TotalSL");
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




	$tdataleavebalance1["TotalSL"] = $fdata;
//	AllowableVacationLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AllowableVacationLeave";
	$fdata["GoodName"] = "AllowableVacationLeave";
	$fdata["ownerTable"] = "leavebalance";
	$fdata["Label"] = GetFieldLabel("leavebalance1","AllowableVacationLeave");
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




	$tdataleavebalance1["AllowableVacationLeave"] = $fdata;
//	TotalVL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TotalVL";
	$fdata["GoodName"] = "TotalVL";
	$fdata["ownerTable"] = "leavebalance";
	$fdata["Label"] = GetFieldLabel("leavebalance1","TotalVL");
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




	$tdataleavebalance1["TotalVL"] = $fdata;
//	AllowableEmergencyLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "AllowableEmergencyLeave";
	$fdata["GoodName"] = "AllowableEmergencyLeave";
	$fdata["ownerTable"] = "leavebalance";
	$fdata["Label"] = GetFieldLabel("leavebalance1","AllowableEmergencyLeave");
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




	$tdataleavebalance1["AllowableEmergencyLeave"] = $fdata;
//	TotalEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TotalEL";
	$fdata["GoodName"] = "TotalEL";
	$fdata["ownerTable"] = "leavebalance";
	$fdata["Label"] = GetFieldLabel("leavebalance1","TotalEL");
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




	$tdataleavebalance1["TotalEL"] = $fdata;
//	AllowablePaternityLeave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "AllowablePaternityLeave";
	$fdata["GoodName"] = "AllowablePaternityLeave";
	$fdata["ownerTable"] = "leavebalance";
	$fdata["Label"] = GetFieldLabel("leavebalance1","AllowablePaternityLeave");
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




	$tdataleavebalance1["AllowablePaternityLeave"] = $fdata;
//	TotalPL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "TotalPL";
	$fdata["GoodName"] = "TotalPL";
	$fdata["ownerTable"] = "leavebalance";
	$fdata["Label"] = GetFieldLabel("leavebalance1","TotalPL");
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




	$tdataleavebalance1["TotalPL"] = $fdata;
//	SLBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "SLBalance";
	$fdata["GoodName"] = "SLBalance";
	$fdata["ownerTable"] = "leavebalance";
	$fdata["Label"] = GetFieldLabel("leavebalance1","SLBalance");
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




	$tdataleavebalance1["SLBalance"] = $fdata;
//	VLBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "VLBalance";
	$fdata["GoodName"] = "VLBalance";
	$fdata["ownerTable"] = "leavebalance";
	$fdata["Label"] = GetFieldLabel("leavebalance1","VLBalance");
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




	$tdataleavebalance1["VLBalance"] = $fdata;
//	ELBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ELBalance";
	$fdata["GoodName"] = "ELBalance";
	$fdata["ownerTable"] = "leavebalance";
	$fdata["Label"] = GetFieldLabel("leavebalance1","ELBalance");
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




	$tdataleavebalance1["ELBalance"] = $fdata;
//	PLBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "PLBalance";
	$fdata["GoodName"] = "PLBalance";
	$fdata["ownerTable"] = "leavebalance";
	$fdata["Label"] = GetFieldLabel("leavebalance1","PLBalance");
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




	$tdataleavebalance1["PLBalance"] = $fdata;
//	user_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "user_name";
	$fdata["GoodName"] = "user_name";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("leavebalance1","user_name");
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








	$tdataleavebalance1["user_name"] = $fdata;


$tables_data["leavebalance1"]=&$tdataleavebalance1;
$field_labels["leavebalance1"] = &$fieldLabelsleavebalance1;
$fieldToolTips["leavebalance1"] = &$fieldToolTipsleavebalance1;
$placeHolders["leavebalance1"] = &$placeHoldersleavebalance1;
$page_titles["leavebalance1"] = &$pageTitlesleavebalance1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["leavebalance1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["leavebalance1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_leavebalance1()
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
	"m_srcTableName" => "leavebalance1"
));

$proto6["m_sql"] = "leavebalance.EmployeeID";
$proto6["m_srcTableName"] = "leavebalance1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableSickLeave",
	"m_strTable" => "leavebalance",
	"m_srcTableName" => "leavebalance1"
));

$proto8["m_sql"] = "leavebalance.AllowableSickLeave";
$proto8["m_srcTableName"] = "leavebalance1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalSL",
	"m_strTable" => "leavebalance",
	"m_srcTableName" => "leavebalance1"
));

$proto10["m_sql"] = "leavebalance.TotalSL";
$proto10["m_srcTableName"] = "leavebalance1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableVacationLeave",
	"m_strTable" => "leavebalance",
	"m_srcTableName" => "leavebalance1"
));

$proto12["m_sql"] = "leavebalance.AllowableVacationLeave";
$proto12["m_srcTableName"] = "leavebalance1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalVL",
	"m_strTable" => "leavebalance",
	"m_srcTableName" => "leavebalance1"
));

$proto14["m_sql"] = "leavebalance.TotalVL";
$proto14["m_srcTableName"] = "leavebalance1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableEmergencyLeave",
	"m_strTable" => "leavebalance",
	"m_srcTableName" => "leavebalance1"
));

$proto16["m_sql"] = "leavebalance.AllowableEmergencyLeave";
$proto16["m_srcTableName"] = "leavebalance1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalEL",
	"m_strTable" => "leavebalance",
	"m_srcTableName" => "leavebalance1"
));

$proto18["m_sql"] = "leavebalance.TotalEL";
$proto18["m_srcTableName"] = "leavebalance1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowablePaternityLeave",
	"m_strTable" => "leavebalance",
	"m_srcTableName" => "leavebalance1"
));

$proto20["m_sql"] = "leavebalance.AllowablePaternityLeave";
$proto20["m_srcTableName"] = "leavebalance1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalPL",
	"m_strTable" => "leavebalance",
	"m_srcTableName" => "leavebalance1"
));

$proto22["m_sql"] = "leavebalance.TotalPL";
$proto22["m_srcTableName"] = "leavebalance1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "SLBalance",
	"m_strTable" => "leavebalance",
	"m_srcTableName" => "leavebalance1"
));

$proto24["m_sql"] = "leavebalance.SLBalance";
$proto24["m_srcTableName"] = "leavebalance1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "VLBalance",
	"m_strTable" => "leavebalance",
	"m_srcTableName" => "leavebalance1"
));

$proto26["m_sql"] = "leavebalance.VLBalance";
$proto26["m_srcTableName"] = "leavebalance1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ELBalance",
	"m_strTable" => "leavebalance",
	"m_srcTableName" => "leavebalance1"
));

$proto28["m_sql"] = "leavebalance.ELBalance";
$proto28["m_srcTableName"] = "leavebalance1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "PLBalance",
	"m_strTable" => "leavebalance",
	"m_srcTableName" => "leavebalance1"
));

$proto30["m_sql"] = "leavebalance.PLBalance";
$proto30["m_srcTableName"] = "leavebalance1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "leavebalance1"
));

$proto32["m_sql"] = "demo_user.user_name";
$proto32["m_srcTableName"] = "leavebalance1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "leavebalance";
$proto35["m_srcTableName"] = "leavebalance1";
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
$proto34["m_srcTableName"] = "leavebalance1";
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
$proto39["m_srcTableName"] = "leavebalance1";
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
$proto38["m_srcTableName"] = "leavebalance1";
$proto40=array();
$proto40["m_sql"] = "leavebalance.EmployeeID = demo_user.EmployeeID";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "leavebalance",
	"m_srcTableName" => "leavebalance1"
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
	"m_srcTableName" => "leavebalance1"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 1;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="leavebalance1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_leavebalance1 = createSqlQuery_leavebalance1();


	
		;

														

$tdataleavebalance1[".sqlquery"] = $queryData_leavebalance1;

$tableEvents["leavebalance1"] = new eventsBase;
$tdataleavebalance1[".hasEvents"] = false;

?>