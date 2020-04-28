<?php
require_once(getabspath("classes/cipherer.php"));




$tdataearningadjustment = array();
	$tdataearningadjustment[".truncateText"] = true;
	$tdataearningadjustment[".NumberOfChars"] = 80;
	$tdataearningadjustment[".ShortName"] = "earningadjustment";
	$tdataearningadjustment[".OwnerID"] = "";
	$tdataearningadjustment[".OriginalTable"] = "earningadjustment";

//	field labels
$fieldLabelsearningadjustment = array();
$fieldToolTipsearningadjustment = array();
$pageTitlesearningadjustment = array();
$placeHoldersearningadjustment = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsearningadjustment["English"] = array();
	$fieldToolTipsearningadjustment["English"] = array();
	$placeHoldersearningadjustment["English"] = array();
	$pageTitlesearningadjustment["English"] = array();
	$fieldLabelsearningadjustment["English"]["eaID"] = "Ea ID";
	$fieldToolTipsearningadjustment["English"]["eaID"] = "";
	$placeHoldersearningadjustment["English"]["eaID"] = "";
	$fieldLabelsearningadjustment["English"]["AdjustmentDescription"] = "Adjustment Description";
	$fieldToolTipsearningadjustment["English"]["AdjustmentDescription"] = "";
	$placeHoldersearningadjustment["English"]["AdjustmentDescription"] = "";
	$fieldLabelsearningadjustment["English"]["EmployeeID"] = "Employee";
	$fieldToolTipsearningadjustment["English"]["EmployeeID"] = "";
	$placeHoldersearningadjustment["English"]["EmployeeID"] = "";
	$fieldLabelsearningadjustment["English"]["PerPayrollAmount"] = "Amount";
	$fieldToolTipsearningadjustment["English"]["PerPayrollAmount"] = "";
	$placeHoldersearningadjustment["English"]["PerPayrollAmount"] = "";
	$fieldLabelsearningadjustment["English"]["PaymentPeriod"] = "Payment Period";
	$fieldToolTipsearningadjustment["English"]["PaymentPeriod"] = "";
	$placeHoldersearningadjustment["English"]["PaymentPeriod"] = "";
	$fieldLabelsearningadjustment["English"]["LessAbsences"] = "Less Absences";
	$fieldToolTipsearningadjustment["English"]["LessAbsences"] = "";
	$placeHoldersearningadjustment["English"]["LessAbsences"] = "";
	$fieldLabelsearningadjustment["English"]["Inactive"] = "Inactive";
	$fieldToolTipsearningadjustment["English"]["Inactive"] = "";
	$placeHoldersearningadjustment["English"]["Inactive"] = "";
	$fieldLabelsearningadjustment["English"]["StartDate"] = "Start Date";
	$fieldToolTipsearningadjustment["English"]["StartDate"] = "";
	$placeHoldersearningadjustment["English"]["StartDate"] = "";
	$fieldLabelsearningadjustment["English"]["EndDate"] = "End Date";
	$fieldToolTipsearningadjustment["English"]["EndDate"] = "";
	$placeHoldersearningadjustment["English"]["EndDate"] = "";
	if (count($fieldToolTipsearningadjustment["English"]))
		$tdataearningadjustment[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsearningadjustment[""] = array();
	$fieldToolTipsearningadjustment[""] = array();
	$placeHoldersearningadjustment[""] = array();
	$pageTitlesearningadjustment[""] = array();
	$fieldLabelsearningadjustment[""]["StartDate"] = "Start Date";
	$fieldToolTipsearningadjustment[""]["StartDate"] = "";
	$placeHoldersearningadjustment[""]["StartDate"] = "";
	$fieldLabelsearningadjustment[""]["EndDate"] = "End Date";
	$fieldToolTipsearningadjustment[""]["EndDate"] = "";
	$placeHoldersearningadjustment[""]["EndDate"] = "";
	if (count($fieldToolTipsearningadjustment[""]))
		$tdataearningadjustment[".isUseToolTips"] = true;
}


	$tdataearningadjustment[".NCSearch"] = true;



$tdataearningadjustment[".shortTableName"] = "earningadjustment";
$tdataearningadjustment[".nSecOptions"] = 0;
$tdataearningadjustment[".recsPerRowPrint"] = 1;
$tdataearningadjustment[".mainTableOwnerID"] = "";
$tdataearningadjustment[".moveNext"] = 1;
$tdataearningadjustment[".entityType"] = 0;

$tdataearningadjustment[".strOriginalTableName"] = "earningadjustment";

	



$tdataearningadjustment[".showAddInPopup"] = false;

$tdataearningadjustment[".showEditInPopup"] = false;

$tdataearningadjustment[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataearningadjustment[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataearningadjustment[".fieldsForRegister"] = array();

$tdataearningadjustment[".listAjax"] = false;

	$tdataearningadjustment[".audit"] = false;

	$tdataearningadjustment[".locking"] = false;

$tdataearningadjustment[".edit"] = true;
$tdataearningadjustment[".afterEditAction"] = 0;
$tdataearningadjustment[".closePopupAfterEdit"] = 1;
$tdataearningadjustment[".afterEditActionDetTable"] = "Detail tables not found!";

$tdataearningadjustment[".add"] = true;
$tdataearningadjustment[".afterAddAction"] = 1;
$tdataearningadjustment[".closePopupAfterAdd"] = 1;
$tdataearningadjustment[".afterAddActionDetTable"] = "";

$tdataearningadjustment[".list"] = true;

$tdataearningadjustment[".inlineEdit"] = true;

$tdataearningadjustment[".updateSelected"] = true;

$tdataearningadjustment[".reorderRecordsByHeader"] = true;


$tdataearningadjustment[".exportFormatting"] = 2;
$tdataearningadjustment[".exportDelimiter"] = ",";
		
$tdataearningadjustment[".inlineAdd"] = true;
$tdataearningadjustment[".view"] = true;

$tdataearningadjustment[".import"] = true;

$tdataearningadjustment[".exportTo"] = true;

$tdataearningadjustment[".printFriendly"] = true;

$tdataearningadjustment[".delete"] = true;

$tdataearningadjustment[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataearningadjustment[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataearningadjustment[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataearningadjustment[".searchSaving"] = false;
//

$tdataearningadjustment[".showSearchPanel"] = true;
		$tdataearningadjustment[".flexibleSearch"] = true;

$tdataearningadjustment[".isUseAjaxSuggest"] = true;

$tdataearningadjustment[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																												

$tdataearningadjustment[".ajaxCodeSnippetAdded"] = false;

$tdataearningadjustment[".buttonsAdded"] = false;

$tdataearningadjustment[".addPageEvents"] = false;

// use timepicker for search panel
$tdataearningadjustment[".isUseTimeForSearch"] = false;



$tdataearningadjustment[".badgeColor"] = "00c2c5";


$tdataearningadjustment[".allSearchFields"] = array();
$tdataearningadjustment[".filterFields"] = array();
$tdataearningadjustment[".requiredSearchFields"] = array();

$tdataearningadjustment[".allSearchFields"][] = "eaID";
	$tdataearningadjustment[".allSearchFields"][] = "EmployeeID";
	$tdataearningadjustment[".allSearchFields"][] = "StartDate";
	$tdataearningadjustment[".allSearchFields"][] = "EndDate";
	$tdataearningadjustment[".allSearchFields"][] = "AdjustmentDescription";
	$tdataearningadjustment[".allSearchFields"][] = "PaymentPeriod";
	$tdataearningadjustment[".allSearchFields"][] = "PerPayrollAmount";
	$tdataearningadjustment[".allSearchFields"][] = "LessAbsences";
	$tdataearningadjustment[".allSearchFields"][] = "Inactive";
	

$tdataearningadjustment[".googleLikeFields"] = array();
$tdataearningadjustment[".googleLikeFields"][] = "eaID";
$tdataearningadjustment[".googleLikeFields"][] = "AdjustmentDescription";
$tdataearningadjustment[".googleLikeFields"][] = "EmployeeID";
$tdataearningadjustment[".googleLikeFields"][] = "PerPayrollAmount";
$tdataearningadjustment[".googleLikeFields"][] = "PaymentPeriod";
$tdataearningadjustment[".googleLikeFields"][] = "LessAbsences";
$tdataearningadjustment[".googleLikeFields"][] = "Inactive";
$tdataearningadjustment[".googleLikeFields"][] = "StartDate";
$tdataearningadjustment[".googleLikeFields"][] = "EndDate";


$tdataearningadjustment[".advSearchFields"] = array();
$tdataearningadjustment[".advSearchFields"][] = "eaID";
$tdataearningadjustment[".advSearchFields"][] = "EmployeeID";
$tdataearningadjustment[".advSearchFields"][] = "StartDate";
$tdataearningadjustment[".advSearchFields"][] = "EndDate";
$tdataearningadjustment[".advSearchFields"][] = "AdjustmentDescription";
$tdataearningadjustment[".advSearchFields"][] = "PaymentPeriod";
$tdataearningadjustment[".advSearchFields"][] = "PerPayrollAmount";
$tdataearningadjustment[".advSearchFields"][] = "LessAbsences";
$tdataearningadjustment[".advSearchFields"][] = "Inactive";

$tdataearningadjustment[".tableType"] = "list";

$tdataearningadjustment[".printerPageOrientation"] = 0;
$tdataearningadjustment[".nPrinterPageScale"] = 100;

$tdataearningadjustment[".nPrinterSplitRecords"] = 40;

$tdataearningadjustment[".nPrinterPDFSplitRecords"] = 40;



$tdataearningadjustment[".geocodingEnabled"] = false;





$tdataearningadjustment[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdataearningadjustment[".totalsFields"] = array();
$tdataearningadjustment[".totalsFields"][] = array(
	"fName" => "PerPayrollAmount",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdataearningadjustment[".pageSize"] = 20;

$tdataearningadjustment[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY eaID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataearningadjustment[".strOrderBy"] = $tstrOrderBy;

$tdataearningadjustment[".orderindexes"] = array();
	$tdataearningadjustment[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "eaID");


$tdataearningadjustment[".sqlHead"] = "SELECT eaID,  AdjustmentDescription,  EmployeeID,  PerPayrollAmount,  PaymentPeriod,  LessAbsences,  Inactive,  StartDate,  EndDate";
$tdataearningadjustment[".sqlFrom"] = "FROM earningadjustment";
$tdataearningadjustment[".sqlWhereExpr"] = "";
$tdataearningadjustment[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataearningadjustment[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataearningadjustment[".arrGroupsPerPage"] = $arrGPP;

$tdataearningadjustment[".highlightSearchResults"] = true;

$tableKeysearningadjustment = array();
$tableKeysearningadjustment[] = "eaID";
$tdataearningadjustment[".Keys"] = $tableKeysearningadjustment;

$tdataearningadjustment[".listFields"] = array();
$tdataearningadjustment[".listFields"][] = "eaID";
$tdataearningadjustment[".listFields"][] = "EmployeeID";
$tdataearningadjustment[".listFields"][] = "StartDate";
$tdataearningadjustment[".listFields"][] = "EndDate";
$tdataearningadjustment[".listFields"][] = "AdjustmentDescription";
$tdataearningadjustment[".listFields"][] = "PaymentPeriod";
$tdataearningadjustment[".listFields"][] = "PerPayrollAmount";
$tdataearningadjustment[".listFields"][] = "LessAbsences";
$tdataearningadjustment[".listFields"][] = "Inactive";

$tdataearningadjustment[".hideMobileList"] = array();


$tdataearningadjustment[".viewFields"] = array();
$tdataearningadjustment[".viewFields"][] = "eaID";
$tdataearningadjustment[".viewFields"][] = "EmployeeID";
$tdataearningadjustment[".viewFields"][] = "StartDate";
$tdataearningadjustment[".viewFields"][] = "EndDate";
$tdataearningadjustment[".viewFields"][] = "AdjustmentDescription";
$tdataearningadjustment[".viewFields"][] = "PaymentPeriod";
$tdataearningadjustment[".viewFields"][] = "PerPayrollAmount";
$tdataearningadjustment[".viewFields"][] = "LessAbsences";
$tdataearningadjustment[".viewFields"][] = "Inactive";

$tdataearningadjustment[".addFields"] = array();
$tdataearningadjustment[".addFields"][] = "EmployeeID";
$tdataearningadjustment[".addFields"][] = "StartDate";
$tdataearningadjustment[".addFields"][] = "EndDate";
$tdataearningadjustment[".addFields"][] = "AdjustmentDescription";
$tdataearningadjustment[".addFields"][] = "PaymentPeriod";
$tdataearningadjustment[".addFields"][] = "PerPayrollAmount";
$tdataearningadjustment[".addFields"][] = "LessAbsences";
$tdataearningadjustment[".addFields"][] = "Inactive";

$tdataearningadjustment[".masterListFields"] = array();
$tdataearningadjustment[".masterListFields"][] = "eaID";
$tdataearningadjustment[".masterListFields"][] = "EmployeeID";
$tdataearningadjustment[".masterListFields"][] = "StartDate";
$tdataearningadjustment[".masterListFields"][] = "EndDate";
$tdataearningadjustment[".masterListFields"][] = "AdjustmentDescription";
$tdataearningadjustment[".masterListFields"][] = "PaymentPeriod";
$tdataearningadjustment[".masterListFields"][] = "PerPayrollAmount";
$tdataearningadjustment[".masterListFields"][] = "LessAbsences";
$tdataearningadjustment[".masterListFields"][] = "Inactive";

$tdataearningadjustment[".inlineAddFields"] = array();
$tdataearningadjustment[".inlineAddFields"][] = "EmployeeID";
$tdataearningadjustment[".inlineAddFields"][] = "StartDate";
$tdataearningadjustment[".inlineAddFields"][] = "EndDate";
$tdataearningadjustment[".inlineAddFields"][] = "AdjustmentDescription";
$tdataearningadjustment[".inlineAddFields"][] = "PaymentPeriod";
$tdataearningadjustment[".inlineAddFields"][] = "PerPayrollAmount";
$tdataearningadjustment[".inlineAddFields"][] = "LessAbsences";
$tdataearningadjustment[".inlineAddFields"][] = "Inactive";

$tdataearningadjustment[".editFields"] = array();
$tdataearningadjustment[".editFields"][] = "EmployeeID";
$tdataearningadjustment[".editFields"][] = "StartDate";
$tdataearningadjustment[".editFields"][] = "EndDate";
$tdataearningadjustment[".editFields"][] = "AdjustmentDescription";
$tdataearningadjustment[".editFields"][] = "PaymentPeriod";
$tdataearningadjustment[".editFields"][] = "PerPayrollAmount";
$tdataearningadjustment[".editFields"][] = "LessAbsences";
$tdataearningadjustment[".editFields"][] = "Inactive";

$tdataearningadjustment[".inlineEditFields"] = array();
$tdataearningadjustment[".inlineEditFields"][] = "EmployeeID";
$tdataearningadjustment[".inlineEditFields"][] = "StartDate";
$tdataearningadjustment[".inlineEditFields"][] = "EndDate";
$tdataearningadjustment[".inlineEditFields"][] = "AdjustmentDescription";
$tdataearningadjustment[".inlineEditFields"][] = "PaymentPeriod";
$tdataearningadjustment[".inlineEditFields"][] = "PerPayrollAmount";
$tdataearningadjustment[".inlineEditFields"][] = "LessAbsences";
$tdataearningadjustment[".inlineEditFields"][] = "Inactive";

$tdataearningadjustment[".updateSelectedFields"] = array();
$tdataearningadjustment[".updateSelectedFields"][] = "EmployeeID";
$tdataearningadjustment[".updateSelectedFields"][] = "StartDate";
$tdataearningadjustment[".updateSelectedFields"][] = "EndDate";
$tdataearningadjustment[".updateSelectedFields"][] = "AdjustmentDescription";
$tdataearningadjustment[".updateSelectedFields"][] = "PaymentPeriod";
$tdataearningadjustment[".updateSelectedFields"][] = "PerPayrollAmount";
$tdataearningadjustment[".updateSelectedFields"][] = "LessAbsences";
$tdataearningadjustment[".updateSelectedFields"][] = "Inactive";


$tdataearningadjustment[".exportFields"] = array();
$tdataearningadjustment[".exportFields"][] = "eaID";
$tdataearningadjustment[".exportFields"][] = "EmployeeID";
$tdataearningadjustment[".exportFields"][] = "StartDate";
$tdataearningadjustment[".exportFields"][] = "EndDate";
$tdataearningadjustment[".exportFields"][] = "AdjustmentDescription";
$tdataearningadjustment[".exportFields"][] = "PaymentPeriod";
$tdataearningadjustment[".exportFields"][] = "PerPayrollAmount";
$tdataearningadjustment[".exportFields"][] = "LessAbsences";
$tdataearningadjustment[".exportFields"][] = "Inactive";

$tdataearningadjustment[".importFields"] = array();
$tdataearningadjustment[".importFields"][] = "eaID";
$tdataearningadjustment[".importFields"][] = "AdjustmentDescription";
$tdataearningadjustment[".importFields"][] = "EmployeeID";
$tdataearningadjustment[".importFields"][] = "PerPayrollAmount";
$tdataearningadjustment[".importFields"][] = "PaymentPeriod";
$tdataearningadjustment[".importFields"][] = "LessAbsences";
$tdataearningadjustment[".importFields"][] = "Inactive";
$tdataearningadjustment[".importFields"][] = "StartDate";
$tdataearningadjustment[".importFields"][] = "EndDate";

$tdataearningadjustment[".printFields"] = array();
$tdataearningadjustment[".printFields"][] = "eaID";
$tdataearningadjustment[".printFields"][] = "EmployeeID";
$tdataearningadjustment[".printFields"][] = "StartDate";
$tdataearningadjustment[".printFields"][] = "EndDate";
$tdataearningadjustment[".printFields"][] = "AdjustmentDescription";
$tdataearningadjustment[".printFields"][] = "PaymentPeriod";
$tdataearningadjustment[".printFields"][] = "PerPayrollAmount";
$tdataearningadjustment[".printFields"][] = "LessAbsences";
$tdataearningadjustment[".printFields"][] = "Inactive";


//	eaID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "eaID";
	$fdata["GoodName"] = "eaID";
	$fdata["ownerTable"] = "earningadjustment";
	$fdata["Label"] = GetFieldLabel("earningadjustment","eaID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "eaID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eaID";

	
	
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




	$tdataearningadjustment["eaID"] = $fdata;
//	AdjustmentDescription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AdjustmentDescription";
	$fdata["GoodName"] = "AdjustmentDescription";
	$fdata["ownerTable"] = "earningadjustment";
	$fdata["Label"] = GetFieldLabel("earningadjustment","AdjustmentDescription");
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

		$fdata["strField"] = "AdjustmentDescription";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AdjustmentDescription";

	
	
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
	$edata["LookupTable"] = "adjustmentdescriptions";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "adjID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "AdjDescriptions";
	
	

	
	$edata["LookupOrderBy"] = "AdjDescriptions";

	
	
		$edata["AllowToAdd"] = true;

	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 282;

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




	$tdataearningadjustment["AdjustmentDescription"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "earningadjustment";
	$fdata["Label"] = GetFieldLabel("earningadjustment","EmployeeID");
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


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 282;

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




	$tdataearningadjustment["EmployeeID"] = $fdata;
//	PerPayrollAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PerPayrollAmount";
	$fdata["GoodName"] = "PerPayrollAmount";
	$fdata["ownerTable"] = "earningadjustment";
	$fdata["Label"] = GetFieldLabel("earningadjustment","PerPayrollAmount");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "PerPayrollAmount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PerPayrollAmount";

	
	
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
		
		$edata["controlWidth"] = 140;

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




	$tdataearningadjustment["PerPayrollAmount"] = $fdata;
//	PaymentPeriod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PaymentPeriod";
	$fdata["GoodName"] = "PaymentPeriod";
	$fdata["ownerTable"] = "earningadjustment";
	$fdata["Label"] = GetFieldLabel("earningadjustment","PaymentPeriod");
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

		$fdata["strField"] = "PaymentPeriod";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PaymentPeriod";

	
	
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
	$edata["LookupTable"] = "paymentperiods";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ppID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "PaymentPeriod";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 280;

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




	$tdataearningadjustment["PaymentPeriod"] = $fdata;
//	LessAbsences
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "LessAbsences";
	$fdata["GoodName"] = "LessAbsences";
	$fdata["ownerTable"] = "earningadjustment";
	$fdata["Label"] = GetFieldLabel("earningadjustment","LessAbsences");
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

		$fdata["strField"] = "LessAbsences";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LessAbsences";

	
	
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




	$tdataearningadjustment["LessAbsences"] = $fdata;
//	Inactive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Inactive";
	$fdata["GoodName"] = "Inactive";
	$fdata["ownerTable"] = "earningadjustment";
	$fdata["Label"] = GetFieldLabel("earningadjustment","Inactive");
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

		$fdata["strField"] = "Inactive";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Inactive";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataearningadjustment["Inactive"] = $fdata;
//	StartDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "StartDate";
	$fdata["GoodName"] = "StartDate";
	$fdata["ownerTable"] = "earningadjustment";
	$fdata["Label"] = GetFieldLabel("earningadjustment","StartDate");
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

		$fdata["strField"] = "StartDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "StartDate";

	
	
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




	$tdataearningadjustment["StartDate"] = $fdata;
//	EndDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "EndDate";
	$fdata["GoodName"] = "EndDate";
	$fdata["ownerTable"] = "earningadjustment";
	$fdata["Label"] = GetFieldLabel("earningadjustment","EndDate");
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

		$fdata["strField"] = "EndDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EndDate";

	
	
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




	$tdataearningadjustment["EndDate"] = $fdata;


$tables_data["earningadjustment"]=&$tdataearningadjustment;
$field_labels["earningadjustment"] = &$fieldLabelsearningadjustment;
$fieldToolTips["earningadjustment"] = &$fieldToolTipsearningadjustment;
$placeHolders["earningadjustment"] = &$placeHoldersearningadjustment;
$page_titles["earningadjustment"] = &$pageTitlesearningadjustment;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["earningadjustment"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["earningadjustment"] = array();


	
				$strOriginalDetailsTable="demo_user";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="demo_user";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "demo_user";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
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
					$masterTablesData["earningadjustment"][0] = $masterParams;
				$masterTablesData["earningadjustment"][0]["masterKeys"] = array();
	$masterTablesData["earningadjustment"][0]["masterKeys"][]="EmployeeID";
				$masterTablesData["earningadjustment"][0]["detailKeys"] = array();
	$masterTablesData["earningadjustment"][0]["detailKeys"][]="EmployeeID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_earningadjustment()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "eaID,  AdjustmentDescription,  EmployeeID,  PerPayrollAmount,  PaymentPeriod,  LessAbsences,  Inactive,  StartDate,  EndDate";
$proto0["m_strFrom"] = "FROM earningadjustment";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY eaID DESC";
	
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
	"m_strName" => "eaID",
	"m_strTable" => "earningadjustment",
	"m_srcTableName" => "earningadjustment"
));

$proto6["m_sql"] = "eaID";
$proto6["m_srcTableName"] = "earningadjustment";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "AdjustmentDescription",
	"m_strTable" => "earningadjustment",
	"m_srcTableName" => "earningadjustment"
));

$proto8["m_sql"] = "AdjustmentDescription";
$proto8["m_srcTableName"] = "earningadjustment";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "earningadjustment",
	"m_srcTableName" => "earningadjustment"
));

$proto10["m_sql"] = "EmployeeID";
$proto10["m_srcTableName"] = "earningadjustment";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PerPayrollAmount",
	"m_strTable" => "earningadjustment",
	"m_srcTableName" => "earningadjustment"
));

$proto12["m_sql"] = "PerPayrollAmount";
$proto12["m_srcTableName"] = "earningadjustment";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PaymentPeriod",
	"m_strTable" => "earningadjustment",
	"m_srcTableName" => "earningadjustment"
));

$proto14["m_sql"] = "PaymentPeriod";
$proto14["m_srcTableName"] = "earningadjustment";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "LessAbsences",
	"m_strTable" => "earningadjustment",
	"m_srcTableName" => "earningadjustment"
));

$proto16["m_sql"] = "LessAbsences";
$proto16["m_srcTableName"] = "earningadjustment";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Inactive",
	"m_strTable" => "earningadjustment",
	"m_srcTableName" => "earningadjustment"
));

$proto18["m_sql"] = "Inactive";
$proto18["m_srcTableName"] = "earningadjustment";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "StartDate",
	"m_strTable" => "earningadjustment",
	"m_srcTableName" => "earningadjustment"
));

$proto20["m_sql"] = "StartDate";
$proto20["m_srcTableName"] = "earningadjustment";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "EndDate",
	"m_strTable" => "earningadjustment",
	"m_srcTableName" => "earningadjustment"
));

$proto22["m_sql"] = "EndDate";
$proto22["m_srcTableName"] = "earningadjustment";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "earningadjustment";
$proto25["m_srcTableName"] = "earningadjustment";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "eaID";
$proto25["m_columns"][] = "AdjustmentDescription";
$proto25["m_columns"][] = "EmployeeID";
$proto25["m_columns"][] = "PerPayrollAmount";
$proto25["m_columns"][] = "PaymentPeriod";
$proto25["m_columns"][] = "LessAbsences";
$proto25["m_columns"][] = "Inactive";
$proto25["m_columns"][] = "PerDay";
$proto25["m_columns"][] = "StartDate";
$proto25["m_columns"][] = "EndDate";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "earningadjustment";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "earningadjustment";
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
	"m_strName" => "eaID",
	"m_strTable" => "earningadjustment",
	"m_srcTableName" => "earningadjustment"
));

$proto28["m_column"]=$obj;
$proto28["m_bAsc"] = 0;
$proto28["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto28);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="earningadjustment";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_earningadjustment = createSqlQuery_earningadjustment();


	
		;

									

$tdataearningadjustment[".sqlquery"] = $queryData_earningadjustment;

include_once(getabspath("include/earningadjustment_events.php"));
$tableEvents["earningadjustment"] = new eventclass_earningadjustment;
$tdataearningadjustment[".hasEvents"] = true;

?>