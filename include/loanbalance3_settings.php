<?php
require_once(getabspath("classes/cipherer.php"));




$tdataloanbalance3 = array();
	$tdataloanbalance3[".truncateText"] = true;
	$tdataloanbalance3[".NumberOfChars"] = 80;
	$tdataloanbalance3[".ShortName"] = "loanbalance3";
	$tdataloanbalance3[".OwnerID"] = "";
	$tdataloanbalance3[".OriginalTable"] = "loanbalance3";

//	field labels
$fieldLabelsloanbalance3 = array();
$fieldToolTipsloanbalance3 = array();
$pageTitlesloanbalance3 = array();
$placeHoldersloanbalance3 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsloanbalance3["English"] = array();
	$fieldToolTipsloanbalance3["English"] = array();
	$placeHoldersloanbalance3["English"] = array();
	$pageTitlesloanbalance3["English"] = array();
	$fieldLabelsloanbalance3["English"]["LoanID"] = "Loan ID";
	$fieldToolTipsloanbalance3["English"]["LoanID"] = "";
	$placeHoldersloanbalance3["English"]["LoanID"] = "";
	$fieldLabelsloanbalance3["English"]["StartDate"] = "Start Date";
	$fieldToolTipsloanbalance3["English"]["StartDate"] = "";
	$placeHoldersloanbalance3["English"]["StartDate"] = "";
	$fieldLabelsloanbalance3["English"]["Principal"] = "Principal";
	$fieldToolTipsloanbalance3["English"]["Principal"] = "";
	$placeHoldersloanbalance3["English"]["Principal"] = "";
	$fieldLabelsloanbalance3["English"]["PerPayrollAmount"] = "Per Payroll Amount";
	$fieldToolTipsloanbalance3["English"]["PerPayrollAmount"] = "";
	$placeHoldersloanbalance3["English"]["PerPayrollAmount"] = "";
	$fieldLabelsloanbalance3["English"]["Payment"] = "Payment";
	$fieldToolTipsloanbalance3["English"]["Payment"] = "";
	$placeHoldersloanbalance3["English"]["Payment"] = "";
	$fieldLabelsloanbalance3["English"]["Balance"] = "Balance";
	$fieldToolTipsloanbalance3["English"]["Balance"] = "";
	$placeHoldersloanbalance3["English"]["Balance"] = "";
	$fieldLabelsloanbalance3["English"]["ForPayment"] = "For Payment";
	$fieldToolTipsloanbalance3["English"]["ForPayment"] = "";
	$placeHoldersloanbalance3["English"]["ForPayment"] = "";
	$fieldLabelsloanbalance3["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipsloanbalance3["English"]["EmployeeID"] = "";
	$placeHoldersloanbalance3["English"]["EmployeeID"] = "";
	$fieldLabelsloanbalance3["English"]["LoanDescription"] = "Loan Description";
	$fieldToolTipsloanbalance3["English"]["LoanDescription"] = "";
	$placeHoldersloanbalance3["English"]["LoanDescription"] = "";
	$fieldLabelsloanbalance3["English"]["LoanType"] = "Loan Type";
	$fieldToolTipsloanbalance3["English"]["LoanType"] = "";
	$placeHoldersloanbalance3["English"]["LoanType"] = "";
	if (count($fieldToolTipsloanbalance3["English"]))
		$tdataloanbalance3[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsloanbalance3[""] = array();
	$fieldToolTipsloanbalance3[""] = array();
	$placeHoldersloanbalance3[""] = array();
	$pageTitlesloanbalance3[""] = array();
	if (count($fieldToolTipsloanbalance3[""]))
		$tdataloanbalance3[".isUseToolTips"] = true;
}


	$tdataloanbalance3[".NCSearch"] = true;



$tdataloanbalance3[".shortTableName"] = "loanbalance3";
$tdataloanbalance3[".nSecOptions"] = 0;
$tdataloanbalance3[".recsPerRowPrint"] = 1;
$tdataloanbalance3[".mainTableOwnerID"] = "";
$tdataloanbalance3[".moveNext"] = 1;
$tdataloanbalance3[".entityType"] = 0;

$tdataloanbalance3[".strOriginalTableName"] = "loanbalance3";

	



$tdataloanbalance3[".showAddInPopup"] = false;

$tdataloanbalance3[".showEditInPopup"] = false;

$tdataloanbalance3[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataloanbalance3[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataloanbalance3[".fieldsForRegister"] = array();

$tdataloanbalance3[".listAjax"] = false;

	$tdataloanbalance3[".audit"] = false;

	$tdataloanbalance3[".locking"] = false;



$tdataloanbalance3[".list"] = true;



$tdataloanbalance3[".reorderRecordsByHeader"] = true;


$tdataloanbalance3[".exportFormatting"] = 2;
$tdataloanbalance3[".exportDelimiter"] = ",";
		

$tdataloanbalance3[".import"] = true;

$tdataloanbalance3[".exportTo"] = true;

$tdataloanbalance3[".printFriendly"] = true;


$tdataloanbalance3[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataloanbalance3[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataloanbalance3[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataloanbalance3[".searchSaving"] = false;
//

$tdataloanbalance3[".showSearchPanel"] = true;
		$tdataloanbalance3[".flexibleSearch"] = true;

$tdataloanbalance3[".isUseAjaxSuggest"] = true;

$tdataloanbalance3[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																				

$tdataloanbalance3[".ajaxCodeSnippetAdded"] = false;

$tdataloanbalance3[".buttonsAdded"] = false;

$tdataloanbalance3[".addPageEvents"] = false;

// use timepicker for search panel
$tdataloanbalance3[".isUseTimeForSearch"] = false;





$tdataloanbalance3[".allSearchFields"] = array();
$tdataloanbalance3[".filterFields"] = array();
$tdataloanbalance3[".requiredSearchFields"] = array();

$tdataloanbalance3[".allSearchFields"][] = "LoanType";
	$tdataloanbalance3[".allSearchFields"][] = "LoanID";
	$tdataloanbalance3[".allSearchFields"][] = "EmployeeID";
	$tdataloanbalance3[".allSearchFields"][] = "LoanDescription";
	$tdataloanbalance3[".allSearchFields"][] = "StartDate";
	$tdataloanbalance3[".allSearchFields"][] = "Principal";
	$tdataloanbalance3[".allSearchFields"][] = "PerPayrollAmount";
	$tdataloanbalance3[".allSearchFields"][] = "Payment";
	$tdataloanbalance3[".allSearchFields"][] = "Balance";
	$tdataloanbalance3[".allSearchFields"][] = "ForPayment";
	

$tdataloanbalance3[".googleLikeFields"] = array();
$tdataloanbalance3[".googleLikeFields"][] = "LoanID";
$tdataloanbalance3[".googleLikeFields"][] = "StartDate";
$tdataloanbalance3[".googleLikeFields"][] = "Principal";
$tdataloanbalance3[".googleLikeFields"][] = "PerPayrollAmount";
$tdataloanbalance3[".googleLikeFields"][] = "Payment";
$tdataloanbalance3[".googleLikeFields"][] = "Balance";
$tdataloanbalance3[".googleLikeFields"][] = "ForPayment";
$tdataloanbalance3[".googleLikeFields"][] = "EmployeeID";
$tdataloanbalance3[".googleLikeFields"][] = "LoanDescription";
$tdataloanbalance3[".googleLikeFields"][] = "LoanType";


$tdataloanbalance3[".advSearchFields"] = array();
$tdataloanbalance3[".advSearchFields"][] = "LoanType";
$tdataloanbalance3[".advSearchFields"][] = "LoanID";
$tdataloanbalance3[".advSearchFields"][] = "EmployeeID";
$tdataloanbalance3[".advSearchFields"][] = "LoanDescription";
$tdataloanbalance3[".advSearchFields"][] = "StartDate";
$tdataloanbalance3[".advSearchFields"][] = "Principal";
$tdataloanbalance3[".advSearchFields"][] = "PerPayrollAmount";
$tdataloanbalance3[".advSearchFields"][] = "Payment";
$tdataloanbalance3[".advSearchFields"][] = "Balance";
$tdataloanbalance3[".advSearchFields"][] = "ForPayment";

$tdataloanbalance3[".tableType"] = "list";

$tdataloanbalance3[".printerPageOrientation"] = 0;
$tdataloanbalance3[".nPrinterPageScale"] = 100;

$tdataloanbalance3[".nPrinterSplitRecords"] = 40;

$tdataloanbalance3[".nPrinterPDFSplitRecords"] = 40;



$tdataloanbalance3[".geocodingEnabled"] = false;





$tdataloanbalance3[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdataloanbalance3[".totalsFields"] = array();
$tdataloanbalance3[".totalsFields"][] = array(
	"fName" => "Principal",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataloanbalance3[".totalsFields"][] = array(
	"fName" => "PerPayrollAmount",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataloanbalance3[".totalsFields"][] = array(
	"fName" => "Payment",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataloanbalance3[".totalsFields"][] = array(
	"fName" => "Balance",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataloanbalance3[".totalsFields"][] = array(
	"fName" => "ForPayment",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdataloanbalance3[".pageSize"] = 20;

$tdataloanbalance3[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataloanbalance3[".strOrderBy"] = $tstrOrderBy;

$tdataloanbalance3[".orderindexes"] = array();

$tdataloanbalance3[".sqlHead"] = "SELECT LoanID,  	StartDate,  	Principal,  	PerPayrollAmount,  	Payment,  	Balance,  	ForPayment,  	EmployeeID,  	LoanDescription,  	LoanType";
$tdataloanbalance3[".sqlFrom"] = "FROM loanbalance3";
$tdataloanbalance3[".sqlWhereExpr"] = "";
$tdataloanbalance3[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataloanbalance3[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataloanbalance3[".arrGroupsPerPage"] = $arrGPP;

$tdataloanbalance3[".highlightSearchResults"] = true;

$tableKeysloanbalance3 = array();
$tdataloanbalance3[".Keys"] = $tableKeysloanbalance3;

$tdataloanbalance3[".listFields"] = array();
$tdataloanbalance3[".listFields"][] = "LoanType";
$tdataloanbalance3[".listFields"][] = "LoanID";
$tdataloanbalance3[".listFields"][] = "EmployeeID";
$tdataloanbalance3[".listFields"][] = "LoanDescription";
$tdataloanbalance3[".listFields"][] = "StartDate";
$tdataloanbalance3[".listFields"][] = "Principal";
$tdataloanbalance3[".listFields"][] = "PerPayrollAmount";
$tdataloanbalance3[".listFields"][] = "Payment";
$tdataloanbalance3[".listFields"][] = "Balance";
$tdataloanbalance3[".listFields"][] = "ForPayment";

$tdataloanbalance3[".hideMobileList"] = array();


$tdataloanbalance3[".viewFields"] = array();
$tdataloanbalance3[".viewFields"][] = "LoanType";

$tdataloanbalance3[".addFields"] = array();
$tdataloanbalance3[".addFields"][] = "LoanType";

$tdataloanbalance3[".masterListFields"] = array();
$tdataloanbalance3[".masterListFields"][] = "LoanType";
$tdataloanbalance3[".masterListFields"][] = "LoanID";
$tdataloanbalance3[".masterListFields"][] = "EmployeeID";
$tdataloanbalance3[".masterListFields"][] = "LoanDescription";
$tdataloanbalance3[".masterListFields"][] = "StartDate";
$tdataloanbalance3[".masterListFields"][] = "Principal";
$tdataloanbalance3[".masterListFields"][] = "PerPayrollAmount";
$tdataloanbalance3[".masterListFields"][] = "Payment";
$tdataloanbalance3[".masterListFields"][] = "Balance";
$tdataloanbalance3[".masterListFields"][] = "ForPayment";

$tdataloanbalance3[".inlineAddFields"] = array();
$tdataloanbalance3[".inlineAddFields"][] = "LoanType";

$tdataloanbalance3[".editFields"] = array();
$tdataloanbalance3[".editFields"][] = "LoanType";

$tdataloanbalance3[".inlineEditFields"] = array();
$tdataloanbalance3[".inlineEditFields"][] = "LoanType";

$tdataloanbalance3[".updateSelectedFields"] = array();
$tdataloanbalance3[".updateSelectedFields"][] = "LoanType";


$tdataloanbalance3[".exportFields"] = array();
$tdataloanbalance3[".exportFields"][] = "LoanType";
$tdataloanbalance3[".exportFields"][] = "LoanID";
$tdataloanbalance3[".exportFields"][] = "EmployeeID";
$tdataloanbalance3[".exportFields"][] = "LoanDescription";
$tdataloanbalance3[".exportFields"][] = "StartDate";
$tdataloanbalance3[".exportFields"][] = "Principal";
$tdataloanbalance3[".exportFields"][] = "PerPayrollAmount";
$tdataloanbalance3[".exportFields"][] = "Payment";
$tdataloanbalance3[".exportFields"][] = "Balance";
$tdataloanbalance3[".exportFields"][] = "ForPayment";

$tdataloanbalance3[".importFields"] = array();
$tdataloanbalance3[".importFields"][] = "LoanID";
$tdataloanbalance3[".importFields"][] = "StartDate";
$tdataloanbalance3[".importFields"][] = "Principal";
$tdataloanbalance3[".importFields"][] = "PerPayrollAmount";
$tdataloanbalance3[".importFields"][] = "Payment";
$tdataloanbalance3[".importFields"][] = "Balance";
$tdataloanbalance3[".importFields"][] = "ForPayment";
$tdataloanbalance3[".importFields"][] = "EmployeeID";
$tdataloanbalance3[".importFields"][] = "LoanDescription";
$tdataloanbalance3[".importFields"][] = "LoanType";

$tdataloanbalance3[".printFields"] = array();
$tdataloanbalance3[".printFields"][] = "LoanType";
$tdataloanbalance3[".printFields"][] = "LoanID";
$tdataloanbalance3[".printFields"][] = "EmployeeID";
$tdataloanbalance3[".printFields"][] = "LoanDescription";
$tdataloanbalance3[".printFields"][] = "StartDate";
$tdataloanbalance3[".printFields"][] = "Principal";
$tdataloanbalance3[".printFields"][] = "PerPayrollAmount";
$tdataloanbalance3[".printFields"][] = "Payment";
$tdataloanbalance3[".printFields"][] = "Balance";
$tdataloanbalance3[".printFields"][] = "ForPayment";


//	LoanID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LoanID";
	$fdata["GoodName"] = "LoanID";
	$fdata["ownerTable"] = "loanbalance3";
	$fdata["Label"] = GetFieldLabel("loanbalance3","LoanID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataloanbalance3["LoanID"] = $fdata;
//	StartDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StartDate";
	$fdata["GoodName"] = "StartDate";
	$fdata["ownerTable"] = "loanbalance3";
	$fdata["Label"] = GetFieldLabel("loanbalance3","StartDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataloanbalance3["StartDate"] = $fdata;
//	Principal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Principal";
	$fdata["GoodName"] = "Principal";
	$fdata["ownerTable"] = "loanbalance3";
	$fdata["Label"] = GetFieldLabel("loanbalance3","Principal");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataloanbalance3["Principal"] = $fdata;
//	PerPayrollAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PerPayrollAmount";
	$fdata["GoodName"] = "PerPayrollAmount";
	$fdata["ownerTable"] = "loanbalance3";
	$fdata["Label"] = GetFieldLabel("loanbalance3","PerPayrollAmount");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataloanbalance3["PerPayrollAmount"] = $fdata;
//	Payment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Payment";
	$fdata["GoodName"] = "Payment";
	$fdata["ownerTable"] = "loanbalance3";
	$fdata["Label"] = GetFieldLabel("loanbalance3","Payment");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Payment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Payment";

	
	
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




	$tdataloanbalance3["Payment"] = $fdata;
//	Balance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Balance";
	$fdata["GoodName"] = "Balance";
	$fdata["ownerTable"] = "loanbalance3";
	$fdata["Label"] = GetFieldLabel("loanbalance3","Balance");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Balance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Balance";

	
	
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




	$tdataloanbalance3["Balance"] = $fdata;
//	ForPayment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ForPayment";
	$fdata["GoodName"] = "ForPayment";
	$fdata["ownerTable"] = "loanbalance3";
	$fdata["Label"] = GetFieldLabel("loanbalance3","ForPayment");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ForPayment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ForPayment";

	
	
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




	$tdataloanbalance3["ForPayment"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "loanbalance3";
	$fdata["Label"] = GetFieldLabel("loanbalance3","EmployeeID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataloanbalance3["EmployeeID"] = $fdata;
//	LoanDescription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "LoanDescription";
	$fdata["GoodName"] = "LoanDescription";
	$fdata["ownerTable"] = "loanbalance3";
	$fdata["Label"] = GetFieldLabel("loanbalance3","LoanDescription");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataloanbalance3["LoanDescription"] = $fdata;
//	LoanType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "LoanType";
	$fdata["GoodName"] = "LoanType";
	$fdata["ownerTable"] = "loanbalance3";
	$fdata["Label"] = GetFieldLabel("loanbalance3","LoanType");
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

		$fdata["strField"] = "LoanType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LoanType";

	
	
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




	$tdataloanbalance3["LoanType"] = $fdata;


$tables_data["loanbalance3"]=&$tdataloanbalance3;
$field_labels["loanbalance3"] = &$fieldLabelsloanbalance3;
$fieldToolTips["loanbalance3"] = &$fieldToolTipsloanbalance3;
$placeHolders["loanbalance3"] = &$placeHoldersloanbalance3;
$page_titles["loanbalance3"] = &$pageTitlesloanbalance3;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["loanbalance3"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["loanbalance3"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_loanbalance3()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LoanID,  	StartDate,  	Principal,  	PerPayrollAmount,  	Payment,  	Balance,  	ForPayment,  	EmployeeID,  	LoanDescription,  	LoanType";
$proto0["m_strFrom"] = "FROM loanbalance3";
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
	"m_strName" => "LoanID",
	"m_strTable" => "loanbalance3",
	"m_srcTableName" => "loanbalance3"
));

$proto6["m_sql"] = "LoanID";
$proto6["m_srcTableName"] = "loanbalance3";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "StartDate",
	"m_strTable" => "loanbalance3",
	"m_srcTableName" => "loanbalance3"
));

$proto8["m_sql"] = "StartDate";
$proto8["m_srcTableName"] = "loanbalance3";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Principal",
	"m_strTable" => "loanbalance3",
	"m_srcTableName" => "loanbalance3"
));

$proto10["m_sql"] = "Principal";
$proto10["m_srcTableName"] = "loanbalance3";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PerPayrollAmount",
	"m_strTable" => "loanbalance3",
	"m_srcTableName" => "loanbalance3"
));

$proto12["m_sql"] = "PerPayrollAmount";
$proto12["m_srcTableName"] = "loanbalance3";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Payment",
	"m_strTable" => "loanbalance3",
	"m_srcTableName" => "loanbalance3"
));

$proto14["m_sql"] = "Payment";
$proto14["m_srcTableName"] = "loanbalance3";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Balance",
	"m_strTable" => "loanbalance3",
	"m_srcTableName" => "loanbalance3"
));

$proto16["m_sql"] = "Balance";
$proto16["m_srcTableName"] = "loanbalance3";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ForPayment",
	"m_strTable" => "loanbalance3",
	"m_srcTableName" => "loanbalance3"
));

$proto18["m_sql"] = "ForPayment";
$proto18["m_srcTableName"] = "loanbalance3";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "loanbalance3",
	"m_srcTableName" => "loanbalance3"
));

$proto20["m_sql"] = "EmployeeID";
$proto20["m_srcTableName"] = "loanbalance3";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanDescription",
	"m_strTable" => "loanbalance3",
	"m_srcTableName" => "loanbalance3"
));

$proto22["m_sql"] = "LoanDescription";
$proto22["m_srcTableName"] = "loanbalance3";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanType",
	"m_strTable" => "loanbalance3",
	"m_srcTableName" => "loanbalance3"
));

$proto24["m_sql"] = "LoanType";
$proto24["m_srcTableName"] = "loanbalance3";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "loanbalance3";
$proto27["m_srcTableName"] = "loanbalance3";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "LoanID";
$proto27["m_columns"][] = "StartDate";
$proto27["m_columns"][] = "Principal";
$proto27["m_columns"][] = "PerPayrollAmount";
$proto27["m_columns"][] = "Payment";
$proto27["m_columns"][] = "Balance";
$proto27["m_columns"][] = "ForPayment";
$proto27["m_columns"][] = "EmployeeID";
$proto27["m_columns"][] = "LoanDescription";
$proto27["m_columns"][] = "LoanType";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "loanbalance3";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "loanbalance3";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="loanbalance3";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_loanbalance3 = createSqlQuery_loanbalance3();


	
		;

										

$tdataloanbalance3[".sqlquery"] = $queryData_loanbalance3;

$tableEvents["loanbalance3"] = new eventsBase;
$tdataloanbalance3[".hasEvents"] = false;

?>