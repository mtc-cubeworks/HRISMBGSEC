<?php
require_once(getabspath("classes/cipherer.php"));




$tdataloans = array();
	$tdataloans[".truncateText"] = true;
	$tdataloans[".NumberOfChars"] = 80;
	$tdataloans[".ShortName"] = "loans";
	$tdataloans[".OwnerID"] = "";
	$tdataloans[".OriginalTable"] = "loans";

//	field labels
$fieldLabelsloans = array();
$fieldToolTipsloans = array();
$pageTitlesloans = array();
$placeHoldersloans = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsloans["English"] = array();
	$fieldToolTipsloans["English"] = array();
	$placeHoldersloans["English"] = array();
	$pageTitlesloans["English"] = array();
	$fieldLabelsloans["English"]["LoanID"] = "Loan ID";
	$fieldToolTipsloans["English"]["LoanID"] = "";
	$placeHoldersloans["English"]["LoanID"] = "";
	$fieldLabelsloans["English"]["Principal"] = "Principal Balance";
	$fieldToolTipsloans["English"]["Principal"] = "";
	$placeHoldersloans["English"]["Principal"] = "";
	$fieldLabelsloans["English"]["MonthlyAmortization"] = "Monthly Amount";
	$fieldToolTipsloans["English"]["MonthlyAmortization"] = "";
	$placeHoldersloans["English"]["MonthlyAmortization"] = "";
	$fieldLabelsloans["English"]["StartDate"] = "Start Date";
	$fieldToolTipsloans["English"]["StartDate"] = "";
	$placeHoldersloans["English"]["StartDate"] = "";
	$fieldLabelsloans["English"]["LoanDescription"] = "Loan Description";
	$fieldToolTipsloans["English"]["LoanDescription"] = "";
	$placeHoldersloans["English"]["LoanDescription"] = "";
	$fieldLabelsloans["English"]["EmployeeID"] = "Employee";
	$fieldToolTipsloans["English"]["EmployeeID"] = "";
	$placeHoldersloans["English"]["EmployeeID"] = "";
	$fieldLabelsloans["English"]["PerPayrollAmount"] = "Per Payroll Amount";
	$fieldToolTipsloans["English"]["PerPayrollAmount"] = "";
	$placeHoldersloans["English"]["PerPayrollAmount"] = "";
	$fieldLabelsloans["English"]["PaymentPeriod"] = "Payment Period";
	$fieldToolTipsloans["English"]["PaymentPeriod"] = "";
	$placeHoldersloans["English"]["PaymentPeriod"] = "";
	$fieldLabelsloans["English"]["Inactive"] = "Inactive";
	$fieldToolTipsloans["English"]["Inactive"] = "";
	$placeHoldersloans["English"]["Inactive"] = "";
	$fieldLabelsloans["English"]["OPrincipal"] = "Principal";
	$fieldToolTipsloans["English"]["OPrincipal"] = "";
	$placeHoldersloans["English"]["OPrincipal"] = "";
	$fieldLabelsloans["English"]["DType"] = "Deduction Category";
	$fieldToolTipsloans["English"]["DType"] = "";
	$placeHoldersloans["English"]["DType"] = "";
	$fieldLabelsloans["English"]["PerDay"] = "Per Day";
	$fieldToolTipsloans["English"]["PerDay"] = "";
	$placeHoldersloans["English"]["PerDay"] = "";
	$fieldLabelsloans["English"]["LessAbsences"] = "Less Absences";
	$fieldToolTipsloans["English"]["LessAbsences"] = "";
	$placeHoldersloans["English"]["LessAbsences"] = "";
	if (count($fieldToolTipsloans["English"]))
		$tdataloans[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsloans[""] = array();
	$fieldToolTipsloans[""] = array();
	$placeHoldersloans[""] = array();
	$pageTitlesloans[""] = array();
	$fieldLabelsloans[""]["PerDay"] = "Per Day";
	$fieldToolTipsloans[""]["PerDay"] = "";
	$placeHoldersloans[""]["PerDay"] = "";
	$fieldLabelsloans[""]["LessAbsences"] = "Less Absences";
	$fieldToolTipsloans[""]["LessAbsences"] = "";
	$placeHoldersloans[""]["LessAbsences"] = "";
	if (count($fieldToolTipsloans[""]))
		$tdataloans[".isUseToolTips"] = true;
}


	$tdataloans[".NCSearch"] = true;



$tdataloans[".shortTableName"] = "loans";
$tdataloans[".nSecOptions"] = 0;
$tdataloans[".recsPerRowPrint"] = 1;
$tdataloans[".mainTableOwnerID"] = "";
$tdataloans[".moveNext"] = 1;
$tdataloans[".entityType"] = 0;

$tdataloans[".strOriginalTableName"] = "loans";

	



$tdataloans[".showAddInPopup"] = false;

$tdataloans[".showEditInPopup"] = false;

$tdataloans[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataloans[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataloans[".fieldsForRegister"] = array();

$tdataloans[".listAjax"] = false;

	$tdataloans[".audit"] = false;

	$tdataloans[".locking"] = false;

$tdataloans[".edit"] = true;
$tdataloans[".afterEditAction"] = 0;
$tdataloans[".closePopupAfterEdit"] = 1;
$tdataloans[".afterEditActionDetTable"] = "Detail tables not found!";

$tdataloans[".add"] = true;
$tdataloans[".afterAddAction"] = 1;
$tdataloans[".closePopupAfterAdd"] = 1;
$tdataloans[".afterAddActionDetTable"] = "";

$tdataloans[".list"] = true;

$tdataloans[".inlineEdit"] = true;

$tdataloans[".updateSelected"] = true;

$tdataloans[".reorderRecordsByHeader"] = true;


$tdataloans[".exportFormatting"] = 2;
$tdataloans[".exportDelimiter"] = ",";
		
$tdataloans[".inlineAdd"] = true;
$tdataloans[".view"] = true;

$tdataloans[".import"] = true;

$tdataloans[".exportTo"] = true;

$tdataloans[".printFriendly"] = true;

$tdataloans[".delete"] = true;

$tdataloans[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataloans[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataloans[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataloans[".searchSaving"] = false;
//

$tdataloans[".showSearchPanel"] = true;
		$tdataloans[".flexibleSearch"] = true;

$tdataloans[".isUseAjaxSuggest"] = true;

$tdataloans[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																										

$tdataloans[".ajaxCodeSnippetAdded"] = false;

$tdataloans[".buttonsAdded"] = false;

$tdataloans[".addPageEvents"] = true;

// use timepicker for search panel
$tdataloans[".isUseTimeForSearch"] = false;



$tdataloans[".badgeColor"] = "cd5c5c";


$tdataloans[".allSearchFields"] = array();
$tdataloans[".filterFields"] = array();
$tdataloans[".requiredSearchFields"] = array();

$tdataloans[".allSearchFields"][] = "LoanID";
	$tdataloans[".allSearchFields"][] = "EmployeeID";
	$tdataloans[".allSearchFields"][] = "DType";
	$tdataloans[".allSearchFields"][] = "PaymentPeriod";
	$tdataloans[".allSearchFields"][] = "LoanDescription";
	$tdataloans[".allSearchFields"][] = "OPrincipal";
	$tdataloans[".allSearchFields"][] = "Principal";
	$tdataloans[".allSearchFields"][] = "PerDay";
	$tdataloans[".allSearchFields"][] = "PerPayrollAmount";
	$tdataloans[".allSearchFields"][] = "MonthlyAmortization";
	$tdataloans[".allSearchFields"][] = "LessAbsences";
	$tdataloans[".allSearchFields"][] = "StartDate";
	$tdataloans[".allSearchFields"][] = "Inactive";
	

$tdataloans[".googleLikeFields"] = array();
$tdataloans[".googleLikeFields"][] = "LoanID";
$tdataloans[".googleLikeFields"][] = "EmployeeID";
$tdataloans[".googleLikeFields"][] = "Principal";
$tdataloans[".googleLikeFields"][] = "MonthlyAmortization";
$tdataloans[".googleLikeFields"][] = "StartDate";
$tdataloans[".googleLikeFields"][] = "LoanDescription";
$tdataloans[".googleLikeFields"][] = "PerPayrollAmount";
$tdataloans[".googleLikeFields"][] = "PaymentPeriod";
$tdataloans[".googleLikeFields"][] = "Inactive";
$tdataloans[".googleLikeFields"][] = "OPrincipal";
$tdataloans[".googleLikeFields"][] = "DType";
$tdataloans[".googleLikeFields"][] = "PerDay";
$tdataloans[".googleLikeFields"][] = "LessAbsences";


$tdataloans[".advSearchFields"] = array();
$tdataloans[".advSearchFields"][] = "LoanID";
$tdataloans[".advSearchFields"][] = "EmployeeID";
$tdataloans[".advSearchFields"][] = "DType";
$tdataloans[".advSearchFields"][] = "PaymentPeriod";
$tdataloans[".advSearchFields"][] = "LoanDescription";
$tdataloans[".advSearchFields"][] = "OPrincipal";
$tdataloans[".advSearchFields"][] = "Principal";
$tdataloans[".advSearchFields"][] = "PerDay";
$tdataloans[".advSearchFields"][] = "PerPayrollAmount";
$tdataloans[".advSearchFields"][] = "MonthlyAmortization";
$tdataloans[".advSearchFields"][] = "LessAbsences";
$tdataloans[".advSearchFields"][] = "StartDate";
$tdataloans[".advSearchFields"][] = "Inactive";

$tdataloans[".tableType"] = "list";

$tdataloans[".printerPageOrientation"] = 0;
$tdataloans[".nPrinterPageScale"] = 100;

$tdataloans[".nPrinterSplitRecords"] = 40;

$tdataloans[".nPrinterPDFSplitRecords"] = 40;



$tdataloans[".geocodingEnabled"] = false;





$tdataloans[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdataloans[".totalsFields"] = array();
$tdataloans[".totalsFields"][] = array(
	"fName" => "OPrincipal",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataloans[".totalsFields"][] = array(
	"fName" => "Principal",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataloans[".totalsFields"][] = array(
	"fName" => "PerPayrollAmount",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataloans[".totalsFields"][] = array(
	"fName" => "MonthlyAmortization",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdataloans[".pageSize"] = 20;

$tdataloans[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY LoanID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataloans[".strOrderBy"] = $tstrOrderBy;

$tdataloans[".orderindexes"] = array();
	$tdataloans[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "LoanID");


$tdataloans[".sqlHead"] = "SELECT LoanID,  EmployeeID,  Principal,  MonthlyAmortization,  StartDate,  LoanDescription,  PerPayrollAmount,  PaymentPeriod,  Inactive,  OPrincipal,  DType,  PerDay,  LessAbsences";
$tdataloans[".sqlFrom"] = "FROM loans";
$tdataloans[".sqlWhereExpr"] = "";
$tdataloans[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataloans[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataloans[".arrGroupsPerPage"] = $arrGPP;

$tdataloans[".highlightSearchResults"] = true;

$tableKeysloans = array();
$tableKeysloans[] = "LoanID";
$tdataloans[".Keys"] = $tableKeysloans;

$tdataloans[".listFields"] = array();
$tdataloans[".listFields"][] = "LoanID";
$tdataloans[".listFields"][] = "EmployeeID";
$tdataloans[".listFields"][] = "DType";
$tdataloans[".listFields"][] = "PaymentPeriod";
$tdataloans[".listFields"][] = "LoanDescription";
$tdataloans[".listFields"][] = "OPrincipal";
$tdataloans[".listFields"][] = "Principal";
$tdataloans[".listFields"][] = "PerDay";
$tdataloans[".listFields"][] = "PerPayrollAmount";
$tdataloans[".listFields"][] = "MonthlyAmortization";
$tdataloans[".listFields"][] = "LessAbsences";
$tdataloans[".listFields"][] = "StartDate";
$tdataloans[".listFields"][] = "Inactive";

$tdataloans[".hideMobileList"] = array();


$tdataloans[".viewFields"] = array();
$tdataloans[".viewFields"][] = "LoanID";
$tdataloans[".viewFields"][] = "EmployeeID";
$tdataloans[".viewFields"][] = "DType";
$tdataloans[".viewFields"][] = "PaymentPeriod";
$tdataloans[".viewFields"][] = "LoanDescription";
$tdataloans[".viewFields"][] = "OPrincipal";
$tdataloans[".viewFields"][] = "Principal";
$tdataloans[".viewFields"][] = "PerDay";
$tdataloans[".viewFields"][] = "PerPayrollAmount";
$tdataloans[".viewFields"][] = "MonthlyAmortization";
$tdataloans[".viewFields"][] = "LessAbsences";
$tdataloans[".viewFields"][] = "StartDate";
$tdataloans[".viewFields"][] = "Inactive";

$tdataloans[".addFields"] = array();
$tdataloans[".addFields"][] = "EmployeeID";
$tdataloans[".addFields"][] = "DType";
$tdataloans[".addFields"][] = "PaymentPeriod";
$tdataloans[".addFields"][] = "LoanDescription";
$tdataloans[".addFields"][] = "OPrincipal";
$tdataloans[".addFields"][] = "Principal";
$tdataloans[".addFields"][] = "PerDay";
$tdataloans[".addFields"][] = "PerPayrollAmount";
$tdataloans[".addFields"][] = "MonthlyAmortization";
$tdataloans[".addFields"][] = "LessAbsences";
$tdataloans[".addFields"][] = "StartDate";
$tdataloans[".addFields"][] = "Inactive";

$tdataloans[".masterListFields"] = array();
$tdataloans[".masterListFields"][] = "LoanID";
$tdataloans[".masterListFields"][] = "EmployeeID";
$tdataloans[".masterListFields"][] = "DType";
$tdataloans[".masterListFields"][] = "PaymentPeriod";
$tdataloans[".masterListFields"][] = "LoanDescription";
$tdataloans[".masterListFields"][] = "OPrincipal";
$tdataloans[".masterListFields"][] = "Principal";
$tdataloans[".masterListFields"][] = "PerDay";
$tdataloans[".masterListFields"][] = "PerPayrollAmount";
$tdataloans[".masterListFields"][] = "MonthlyAmortization";
$tdataloans[".masterListFields"][] = "LessAbsences";
$tdataloans[".masterListFields"][] = "StartDate";
$tdataloans[".masterListFields"][] = "Inactive";

$tdataloans[".inlineAddFields"] = array();
$tdataloans[".inlineAddFields"][] = "EmployeeID";
$tdataloans[".inlineAddFields"][] = "DType";
$tdataloans[".inlineAddFields"][] = "PaymentPeriod";
$tdataloans[".inlineAddFields"][] = "LoanDescription";
$tdataloans[".inlineAddFields"][] = "OPrincipal";
$tdataloans[".inlineAddFields"][] = "Principal";
$tdataloans[".inlineAddFields"][] = "PerDay";
$tdataloans[".inlineAddFields"][] = "PerPayrollAmount";
$tdataloans[".inlineAddFields"][] = "MonthlyAmortization";
$tdataloans[".inlineAddFields"][] = "LessAbsences";
$tdataloans[".inlineAddFields"][] = "StartDate";
$tdataloans[".inlineAddFields"][] = "Inactive";

$tdataloans[".editFields"] = array();
$tdataloans[".editFields"][] = "EmployeeID";
$tdataloans[".editFields"][] = "DType";
$tdataloans[".editFields"][] = "PaymentPeriod";
$tdataloans[".editFields"][] = "LoanDescription";
$tdataloans[".editFields"][] = "OPrincipal";
$tdataloans[".editFields"][] = "Principal";
$tdataloans[".editFields"][] = "PerDay";
$tdataloans[".editFields"][] = "PerPayrollAmount";
$tdataloans[".editFields"][] = "MonthlyAmortization";
$tdataloans[".editFields"][] = "LessAbsences";
$tdataloans[".editFields"][] = "StartDate";
$tdataloans[".editFields"][] = "Inactive";

$tdataloans[".inlineEditFields"] = array();
$tdataloans[".inlineEditFields"][] = "EmployeeID";
$tdataloans[".inlineEditFields"][] = "DType";
$tdataloans[".inlineEditFields"][] = "PaymentPeriod";
$tdataloans[".inlineEditFields"][] = "LoanDescription";
$tdataloans[".inlineEditFields"][] = "OPrincipal";
$tdataloans[".inlineEditFields"][] = "Principal";
$tdataloans[".inlineEditFields"][] = "PerDay";
$tdataloans[".inlineEditFields"][] = "PerPayrollAmount";
$tdataloans[".inlineEditFields"][] = "MonthlyAmortization";
$tdataloans[".inlineEditFields"][] = "LessAbsences";
$tdataloans[".inlineEditFields"][] = "StartDate";
$tdataloans[".inlineEditFields"][] = "Inactive";

$tdataloans[".updateSelectedFields"] = array();
$tdataloans[".updateSelectedFields"][] = "EmployeeID";
$tdataloans[".updateSelectedFields"][] = "PaymentPeriod";
$tdataloans[".updateSelectedFields"][] = "LoanDescription";
$tdataloans[".updateSelectedFields"][] = "Principal";
$tdataloans[".updateSelectedFields"][] = "PerPayrollAmount";
$tdataloans[".updateSelectedFields"][] = "MonthlyAmortization";
$tdataloans[".updateSelectedFields"][] = "StartDate";
$tdataloans[".updateSelectedFields"][] = "Inactive";


$tdataloans[".exportFields"] = array();
$tdataloans[".exportFields"][] = "LoanID";
$tdataloans[".exportFields"][] = "EmployeeID";
$tdataloans[".exportFields"][] = "DType";
$tdataloans[".exportFields"][] = "PaymentPeriod";
$tdataloans[".exportFields"][] = "LoanDescription";
$tdataloans[".exportFields"][] = "OPrincipal";
$tdataloans[".exportFields"][] = "Principal";
$tdataloans[".exportFields"][] = "PerDay";
$tdataloans[".exportFields"][] = "PerPayrollAmount";
$tdataloans[".exportFields"][] = "MonthlyAmortization";
$tdataloans[".exportFields"][] = "LessAbsences";
$tdataloans[".exportFields"][] = "StartDate";
$tdataloans[".exportFields"][] = "Inactive";

$tdataloans[".importFields"] = array();
$tdataloans[".importFields"][] = "LoanID";
$tdataloans[".importFields"][] = "EmployeeID";
$tdataloans[".importFields"][] = "Principal";
$tdataloans[".importFields"][] = "MonthlyAmortization";
$tdataloans[".importFields"][] = "StartDate";
$tdataloans[".importFields"][] = "LoanDescription";
$tdataloans[".importFields"][] = "PerPayrollAmount";
$tdataloans[".importFields"][] = "PaymentPeriod";
$tdataloans[".importFields"][] = "Inactive";
$tdataloans[".importFields"][] = "OPrincipal";
$tdataloans[".importFields"][] = "DType";
$tdataloans[".importFields"][] = "PerDay";
$tdataloans[".importFields"][] = "LessAbsences";

$tdataloans[".printFields"] = array();
$tdataloans[".printFields"][] = "LoanID";
$tdataloans[".printFields"][] = "EmployeeID";
$tdataloans[".printFields"][] = "DType";
$tdataloans[".printFields"][] = "PaymentPeriod";
$tdataloans[".printFields"][] = "LoanDescription";
$tdataloans[".printFields"][] = "OPrincipal";
$tdataloans[".printFields"][] = "Principal";
$tdataloans[".printFields"][] = "PerDay";
$tdataloans[".printFields"][] = "PerPayrollAmount";
$tdataloans[".printFields"][] = "MonthlyAmortization";
$tdataloans[".printFields"][] = "LessAbsences";
$tdataloans[".printFields"][] = "StartDate";
$tdataloans[".printFields"][] = "Inactive";


//	LoanID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LoanID";
	$fdata["GoodName"] = "LoanID";
	$fdata["ownerTable"] = "loans";
	$fdata["Label"] = GetFieldLabel("loans","LoanID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LoanID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LoanID";

	
	
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




	$tdataloans["LoanID"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "loans";
	$fdata["Label"] = GetFieldLabel("loans","EmployeeID");
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




	$tdataloans["EmployeeID"] = $fdata;
//	Principal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Principal";
	$fdata["GoodName"] = "Principal";
	$fdata["ownerTable"] = "loans";
	$fdata["Label"] = GetFieldLabel("loans","Principal");
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

		$fdata["strField"] = "Principal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Principal";

	
	
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




	$tdataloans["Principal"] = $fdata;
//	MonthlyAmortization
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "MonthlyAmortization";
	$fdata["GoodName"] = "MonthlyAmortization";
	$fdata["ownerTable"] = "loans";
	$fdata["Label"] = GetFieldLabel("loans","MonthlyAmortization");
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

		$fdata["strField"] = "MonthlyAmortization";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MonthlyAmortization";

	
	
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
		
		$edata["controlWidth"] = 112;

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




	$tdataloans["MonthlyAmortization"] = $fdata;
//	StartDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "StartDate";
	$fdata["GoodName"] = "StartDate";
	$fdata["ownerTable"] = "loans";
	$fdata["Label"] = GetFieldLabel("loans","StartDate");
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
	$edata["InitialYearFactor"] = 5;
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




	$tdataloans["StartDate"] = $fdata;
//	LoanDescription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "LoanDescription";
	$fdata["GoodName"] = "LoanDescription";
	$fdata["ownerTable"] = "loans";
	$fdata["Label"] = GetFieldLabel("loans","LoanDescription");
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

		$fdata["strField"] = "LoanDescription";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LoanDescription";

	
	
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
	$edata["LookupTable"] = "loandesriptions";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "LdID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "LoanDescription";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;

	

	
	
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




	$tdataloans["LoanDescription"] = $fdata;
//	PerPayrollAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PerPayrollAmount";
	$fdata["GoodName"] = "PerPayrollAmount";
	$fdata["ownerTable"] = "loans";
	$fdata["Label"] = GetFieldLabel("loans","PerPayrollAmount");
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




	$tdataloans["PerPayrollAmount"] = $fdata;
//	PaymentPeriod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "PaymentPeriod";
	$fdata["GoodName"] = "PaymentPeriod";
	$fdata["ownerTable"] = "loans";
	$fdata["Label"] = GetFieldLabel("loans","PaymentPeriod");
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




	$tdataloans["PaymentPeriod"] = $fdata;
//	Inactive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Inactive";
	$fdata["GoodName"] = "Inactive";
	$fdata["ownerTable"] = "loans";
	$fdata["Label"] = GetFieldLabel("loans","Inactive");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataloans["Inactive"] = $fdata;
//	OPrincipal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "OPrincipal";
	$fdata["GoodName"] = "OPrincipal";
	$fdata["ownerTable"] = "loans";
	$fdata["Label"] = GetFieldLabel("loans","OPrincipal");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "OPrincipal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OPrincipal";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataloans["OPrincipal"] = $fdata;
//	DType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DType";
	$fdata["GoodName"] = "DType";
	$fdata["ownerTable"] = "loans";
	$fdata["Label"] = GetFieldLabel("loans","DType");
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

		$fdata["strField"] = "DType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DType";

	
	
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
	$edata["LookupTable"] = "deductypes";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "DtID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "DeductionType";
	
	

	
	$edata["LookupOrderBy"] = "DeductionType";

	
	
	
	

	
	
	
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




	$tdataloans["DType"] = $fdata;
//	PerDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "PerDay";
	$fdata["GoodName"] = "PerDay";
	$fdata["ownerTable"] = "loans";
	$fdata["Label"] = GetFieldLabel("loans","PerDay");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PerDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PerDay";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataloans["PerDay"] = $fdata;
//	LessAbsences
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "LessAbsences";
	$fdata["GoodName"] = "LessAbsences";
	$fdata["ownerTable"] = "loans";
	$fdata["Label"] = GetFieldLabel("loans","LessAbsences");
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




	$tdataloans["LessAbsences"] = $fdata;


$tables_data["loans"]=&$tdataloans;
$field_labels["loans"] = &$fieldLabelsloans;
$fieldToolTips["loans"] = &$fieldToolTipsloans;
$placeHolders["loans"] = &$placeHoldersloans;
$page_titles["loans"] = &$pageTitlesloans;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["loans"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["loans"] = array();


	
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
					$masterTablesData["loans"][0] = $masterParams;
				$masterTablesData["loans"][0]["masterKeys"] = array();
	$masterTablesData["loans"][0]["masterKeys"][]="EmployeeID";
				$masterTablesData["loans"][0]["detailKeys"] = array();
	$masterTablesData["loans"][0]["detailKeys"][]="EmployeeID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_loans()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LoanID,  EmployeeID,  Principal,  MonthlyAmortization,  StartDate,  LoanDescription,  PerPayrollAmount,  PaymentPeriod,  Inactive,  OPrincipal,  DType,  PerDay,  LessAbsences";
$proto0["m_strFrom"] = "FROM loans";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY LoanID DESC";
	
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
	"m_strName" => "LoanID",
	"m_strTable" => "loans",
	"m_srcTableName" => "loans"
));

$proto6["m_sql"] = "LoanID";
$proto6["m_srcTableName"] = "loans";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "loans",
	"m_srcTableName" => "loans"
));

$proto8["m_sql"] = "EmployeeID";
$proto8["m_srcTableName"] = "loans";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Principal",
	"m_strTable" => "loans",
	"m_srcTableName" => "loans"
));

$proto10["m_sql"] = "Principal";
$proto10["m_srcTableName"] = "loans";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "MonthlyAmortization",
	"m_strTable" => "loans",
	"m_srcTableName" => "loans"
));

$proto12["m_sql"] = "MonthlyAmortization";
$proto12["m_srcTableName"] = "loans";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "StartDate",
	"m_strTable" => "loans",
	"m_srcTableName" => "loans"
));

$proto14["m_sql"] = "StartDate";
$proto14["m_srcTableName"] = "loans";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanDescription",
	"m_strTable" => "loans",
	"m_srcTableName" => "loans"
));

$proto16["m_sql"] = "LoanDescription";
$proto16["m_srcTableName"] = "loans";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PerPayrollAmount",
	"m_strTable" => "loans",
	"m_srcTableName" => "loans"
));

$proto18["m_sql"] = "PerPayrollAmount";
$proto18["m_srcTableName"] = "loans";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "PaymentPeriod",
	"m_strTable" => "loans",
	"m_srcTableName" => "loans"
));

$proto20["m_sql"] = "PaymentPeriod";
$proto20["m_srcTableName"] = "loans";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Inactive",
	"m_strTable" => "loans",
	"m_srcTableName" => "loans"
));

$proto22["m_sql"] = "Inactive";
$proto22["m_srcTableName"] = "loans";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "OPrincipal",
	"m_strTable" => "loans",
	"m_srcTableName" => "loans"
));

$proto24["m_sql"] = "OPrincipal";
$proto24["m_srcTableName"] = "loans";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DType",
	"m_strTable" => "loans",
	"m_srcTableName" => "loans"
));

$proto26["m_sql"] = "DType";
$proto26["m_srcTableName"] = "loans";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "PerDay",
	"m_strTable" => "loans",
	"m_srcTableName" => "loans"
));

$proto28["m_sql"] = "PerDay";
$proto28["m_srcTableName"] = "loans";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "LessAbsences",
	"m_strTable" => "loans",
	"m_srcTableName" => "loans"
));

$proto30["m_sql"] = "LessAbsences";
$proto30["m_srcTableName"] = "loans";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "loans";
$proto33["m_srcTableName"] = "loans";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "LoanID";
$proto33["m_columns"][] = "EmployeeID";
$proto33["m_columns"][] = "Principal";
$proto33["m_columns"][] = "MonthlyAmortization";
$proto33["m_columns"][] = "StartDate";
$proto33["m_columns"][] = "LoanDescription";
$proto33["m_columns"][] = "PerPayrollAmount";
$proto33["m_columns"][] = "PaymentPeriod";
$proto33["m_columns"][] = "Inactive";
$proto33["m_columns"][] = "OPrincipal";
$proto33["m_columns"][] = "DType";
$proto33["m_columns"][] = "PerDay";
$proto33["m_columns"][] = "LessAbsences";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "loans";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "loans";
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
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "LoanID",
	"m_strTable" => "loans",
	"m_srcTableName" => "loans"
));

$proto36["m_column"]=$obj;
$proto36["m_bAsc"] = 0;
$proto36["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto36);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="loans";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_loans = createSqlQuery_loans();


	
		;

													

$tdataloans[".sqlquery"] = $queryData_loans;

include_once(getabspath("include/loans_events.php"));
$tableEvents["loans"] = new eventclass_loans;
$tdataloans[".hasEvents"] = true;

?>