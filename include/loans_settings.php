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
	$fieldLabelsloans["English"]["Principal"] = "Principal";
	$fieldToolTipsloans["English"]["Principal"] = "";
	$placeHoldersloans["English"]["Principal"] = "";
	$fieldLabelsloans["English"]["MonthlyAmortization"] = "Monthly Amortization";
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
	if (count($fieldToolTipsloans["English"]))
		$tdataloans[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsloans[""] = array();
	$fieldToolTipsloans[""] = array();
	$placeHoldersloans[""] = array();
	$pageTitlesloans[""] = array();
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
$tdataloans[".afterEditAction"] = 1;
$tdataloans[".closePopupAfterEdit"] = 1;
$tdataloans[".afterEditActionDetTable"] = "";

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
$tdataloans[".copy"] = true;
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

$tdataloans[".addPageEvents"] = false;

// use timepicker for search panel
$tdataloans[".isUseTimeForSearch"] = false;



$tdataloans[".badgeColor"] = "cd5c5c";


$tdataloans[".allSearchFields"] = array();
$tdataloans[".filterFields"] = array();
$tdataloans[".requiredSearchFields"] = array();

$tdataloans[".allSearchFields"][] = "LoanID";
	$tdataloans[".allSearchFields"][] = "EmployeeID";
	$tdataloans[".allSearchFields"][] = "Principal";
	$tdataloans[".allSearchFields"][] = "MonthlyAmortization";
	$tdataloans[".allSearchFields"][] = "StartDate";
	$tdataloans[".allSearchFields"][] = "LoanDescription";
	$tdataloans[".allSearchFields"][] = "PerPayrollAmount";
	$tdataloans[".allSearchFields"][] = "PaymentPeriod";
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


$tdataloans[".advSearchFields"] = array();
$tdataloans[".advSearchFields"][] = "LoanID";
$tdataloans[".advSearchFields"][] = "EmployeeID";
$tdataloans[".advSearchFields"][] = "Principal";
$tdataloans[".advSearchFields"][] = "MonthlyAmortization";
$tdataloans[".advSearchFields"][] = "StartDate";
$tdataloans[".advSearchFields"][] = "LoanDescription";
$tdataloans[".advSearchFields"][] = "PerPayrollAmount";
$tdataloans[".advSearchFields"][] = "PaymentPeriod";
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
	"fName" => "Principal",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataloans[".totalsFields"][] = array(
	"fName" => "MonthlyAmortization",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataloans[".totalsFields"][] = array(
	"fName" => "PerPayrollAmount",
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


$tdataloans[".sqlHead"] = "SELECT LoanID,  EmployeeID,  Principal,  MonthlyAmortization,  StartDate,  LoanDescription,  PerPayrollAmount,  PaymentPeriod,  Inactive";
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
$tdataloans[".listFields"][] = "Principal";
$tdataloans[".listFields"][] = "MonthlyAmortization";
$tdataloans[".listFields"][] = "StartDate";
$tdataloans[".listFields"][] = "LoanDescription";
$tdataloans[".listFields"][] = "PerPayrollAmount";
$tdataloans[".listFields"][] = "PaymentPeriod";
$tdataloans[".listFields"][] = "Inactive";

$tdataloans[".hideMobileList"] = array();


$tdataloans[".viewFields"] = array();
$tdataloans[".viewFields"][] = "LoanID";
$tdataloans[".viewFields"][] = "EmployeeID";
$tdataloans[".viewFields"][] = "Principal";
$tdataloans[".viewFields"][] = "MonthlyAmortization";
$tdataloans[".viewFields"][] = "StartDate";
$tdataloans[".viewFields"][] = "LoanDescription";
$tdataloans[".viewFields"][] = "PerPayrollAmount";
$tdataloans[".viewFields"][] = "PaymentPeriod";
$tdataloans[".viewFields"][] = "Inactive";

$tdataloans[".addFields"] = array();
$tdataloans[".addFields"][] = "EmployeeID";
$tdataloans[".addFields"][] = "Principal";
$tdataloans[".addFields"][] = "MonthlyAmortization";
$tdataloans[".addFields"][] = "StartDate";
$tdataloans[".addFields"][] = "LoanDescription";
$tdataloans[".addFields"][] = "PerPayrollAmount";
$tdataloans[".addFields"][] = "PaymentPeriod";
$tdataloans[".addFields"][] = "Inactive";

$tdataloans[".masterListFields"] = array();
$tdataloans[".masterListFields"][] = "LoanID";
$tdataloans[".masterListFields"][] = "EmployeeID";
$tdataloans[".masterListFields"][] = "Principal";
$tdataloans[".masterListFields"][] = "MonthlyAmortization";
$tdataloans[".masterListFields"][] = "StartDate";
$tdataloans[".masterListFields"][] = "LoanDescription";
$tdataloans[".masterListFields"][] = "PerPayrollAmount";
$tdataloans[".masterListFields"][] = "PaymentPeriod";
$tdataloans[".masterListFields"][] = "Inactive";

$tdataloans[".inlineAddFields"] = array();
$tdataloans[".inlineAddFields"][] = "EmployeeID";
$tdataloans[".inlineAddFields"][] = "Principal";
$tdataloans[".inlineAddFields"][] = "MonthlyAmortization";
$tdataloans[".inlineAddFields"][] = "StartDate";
$tdataloans[".inlineAddFields"][] = "LoanDescription";
$tdataloans[".inlineAddFields"][] = "PerPayrollAmount";
$tdataloans[".inlineAddFields"][] = "PaymentPeriod";
$tdataloans[".inlineAddFields"][] = "Inactive";

$tdataloans[".editFields"] = array();
$tdataloans[".editFields"][] = "EmployeeID";
$tdataloans[".editFields"][] = "Principal";
$tdataloans[".editFields"][] = "MonthlyAmortization";
$tdataloans[".editFields"][] = "StartDate";
$tdataloans[".editFields"][] = "LoanDescription";
$tdataloans[".editFields"][] = "PerPayrollAmount";
$tdataloans[".editFields"][] = "PaymentPeriod";
$tdataloans[".editFields"][] = "Inactive";

$tdataloans[".inlineEditFields"] = array();
$tdataloans[".inlineEditFields"][] = "EmployeeID";
$tdataloans[".inlineEditFields"][] = "Principal";
$tdataloans[".inlineEditFields"][] = "MonthlyAmortization";
$tdataloans[".inlineEditFields"][] = "StartDate";
$tdataloans[".inlineEditFields"][] = "LoanDescription";
$tdataloans[".inlineEditFields"][] = "PerPayrollAmount";
$tdataloans[".inlineEditFields"][] = "PaymentPeriod";
$tdataloans[".inlineEditFields"][] = "Inactive";

$tdataloans[".updateSelectedFields"] = array();
$tdataloans[".updateSelectedFields"][] = "EmployeeID";
$tdataloans[".updateSelectedFields"][] = "Principal";
$tdataloans[".updateSelectedFields"][] = "MonthlyAmortization";
$tdataloans[".updateSelectedFields"][] = "StartDate";
$tdataloans[".updateSelectedFields"][] = "LoanDescription";
$tdataloans[".updateSelectedFields"][] = "PerPayrollAmount";
$tdataloans[".updateSelectedFields"][] = "PaymentPeriod";
$tdataloans[".updateSelectedFields"][] = "Inactive";


$tdataloans[".exportFields"] = array();
$tdataloans[".exportFields"][] = "LoanID";
$tdataloans[".exportFields"][] = "EmployeeID";
$tdataloans[".exportFields"][] = "Principal";
$tdataloans[".exportFields"][] = "MonthlyAmortization";
$tdataloans[".exportFields"][] = "StartDate";
$tdataloans[".exportFields"][] = "LoanDescription";
$tdataloans[".exportFields"][] = "PerPayrollAmount";
$tdataloans[".exportFields"][] = "PaymentPeriod";
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

$tdataloans[".printFields"] = array();
$tdataloans[".printFields"][] = "LoanID";
$tdataloans[".printFields"][] = "EmployeeID";
$tdataloans[".printFields"][] = "Principal";
$tdataloans[".printFields"][] = "MonthlyAmortization";
$tdataloans[".printFields"][] = "StartDate";
$tdataloans[".printFields"][] = "LoanDescription";
$tdataloans[".printFields"][] = "PerPayrollAmount";
$tdataloans[".printFields"][] = "PaymentPeriod";
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

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
$proto0["m_strFieldList"] = "LoanID,  EmployeeID,  Principal,  MonthlyAmortization,  StartDate,  LoanDescription,  PerPayrollAmount,  PaymentPeriod,  Inactive";
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
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "loans";
$proto25["m_srcTableName"] = "loans";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "LoanID";
$proto25["m_columns"][] = "EmployeeID";
$proto25["m_columns"][] = "Principal";
$proto25["m_columns"][] = "MonthlyAmortization";
$proto25["m_columns"][] = "StartDate";
$proto25["m_columns"][] = "LoanDescription";
$proto25["m_columns"][] = "PerPayrollAmount";
$proto25["m_columns"][] = "PaymentPeriod";
$proto25["m_columns"][] = "Inactive";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "loans";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "loans";
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
	"m_strName" => "LoanID",
	"m_strTable" => "loans",
	"m_srcTableName" => "loans"
));

$proto28["m_column"]=$obj;
$proto28["m_bAsc"] = 0;
$proto28["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto28);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="loans";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_loans = createSqlQuery_loans();


	
		;

									

$tdataloans[".sqlquery"] = $queryData_loans;

$tableEvents["loans"] = new eventsBase;
$tdataloans[".hasEvents"] = false;

?>