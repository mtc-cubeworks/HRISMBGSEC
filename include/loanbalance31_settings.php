<?php
require_once(getabspath("classes/cipherer.php"));




$tdataloanbalance31 = array();
	$tdataloanbalance31[".truncateText"] = true;
	$tdataloanbalance31[".NumberOfChars"] = 80;
	$tdataloanbalance31[".ShortName"] = "loanbalance31";
	$tdataloanbalance31[".OwnerID"] = "EmployeeID";
	$tdataloanbalance31[".OriginalTable"] = "loanbalance3";

//	field labels
$fieldLabelsloanbalance31 = array();
$fieldToolTipsloanbalance31 = array();
$pageTitlesloanbalance31 = array();
$placeHoldersloanbalance31 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsloanbalance31["English"] = array();
	$fieldToolTipsloanbalance31["English"] = array();
	$placeHoldersloanbalance31["English"] = array();
	$pageTitlesloanbalance31["English"] = array();
	$fieldLabelsloanbalance31["English"]["LoanID"] = "Loan ID";
	$fieldToolTipsloanbalance31["English"]["LoanID"] = "";
	$placeHoldersloanbalance31["English"]["LoanID"] = "";
	$fieldLabelsloanbalance31["English"]["StartDate"] = "Start Date";
	$fieldToolTipsloanbalance31["English"]["StartDate"] = "";
	$placeHoldersloanbalance31["English"]["StartDate"] = "";
	$fieldLabelsloanbalance31["English"]["Principal"] = "Principal";
	$fieldToolTipsloanbalance31["English"]["Principal"] = "";
	$placeHoldersloanbalance31["English"]["Principal"] = "";
	$fieldLabelsloanbalance31["English"]["PerPayrollAmount"] = "Per Payroll Amount";
	$fieldToolTipsloanbalance31["English"]["PerPayrollAmount"] = "";
	$placeHoldersloanbalance31["English"]["PerPayrollAmount"] = "";
	$fieldLabelsloanbalance31["English"]["Payment"] = "Payment";
	$fieldToolTipsloanbalance31["English"]["Payment"] = "";
	$placeHoldersloanbalance31["English"]["Payment"] = "";
	$fieldLabelsloanbalance31["English"]["Balance"] = "Balance";
	$fieldToolTipsloanbalance31["English"]["Balance"] = "";
	$placeHoldersloanbalance31["English"]["Balance"] = "";
	$fieldLabelsloanbalance31["English"]["ForPayment"] = "For Payment";
	$fieldToolTipsloanbalance31["English"]["ForPayment"] = "";
	$placeHoldersloanbalance31["English"]["ForPayment"] = "";
	$fieldLabelsloanbalance31["English"]["EmployeeID"] = "Biometric ID";
	$fieldToolTipsloanbalance31["English"]["EmployeeID"] = "";
	$placeHoldersloanbalance31["English"]["EmployeeID"] = "";
	$fieldLabelsloanbalance31["English"]["LoanDescription"] = "Loan Description";
	$fieldToolTipsloanbalance31["English"]["LoanDescription"] = "";
	$placeHoldersloanbalance31["English"]["LoanDescription"] = "";
	$fieldLabelsloanbalance31["English"]["LoanType"] = "Loan Type";
	$fieldToolTipsloanbalance31["English"]["LoanType"] = "";
	$placeHoldersloanbalance31["English"]["LoanType"] = "";
	if (count($fieldToolTipsloanbalance31["English"]))
		$tdataloanbalance31[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsloanbalance31[""] = array();
	$fieldToolTipsloanbalance31[""] = array();
	$placeHoldersloanbalance31[""] = array();
	$pageTitlesloanbalance31[""] = array();
	if (count($fieldToolTipsloanbalance31[""]))
		$tdataloanbalance31[".isUseToolTips"] = true;
}


	$tdataloanbalance31[".NCSearch"] = true;



$tdataloanbalance31[".shortTableName"] = "loanbalance31";
$tdataloanbalance31[".nSecOptions"] = 1;
$tdataloanbalance31[".recsPerRowPrint"] = 1;
$tdataloanbalance31[".mainTableOwnerID"] = "EmployeeID";
$tdataloanbalance31[".moveNext"] = 1;
$tdataloanbalance31[".entityType"] = 1;

$tdataloanbalance31[".strOriginalTableName"] = "loanbalance3";

	



$tdataloanbalance31[".showAddInPopup"] = false;

$tdataloanbalance31[".showEditInPopup"] = false;

$tdataloanbalance31[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataloanbalance31[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataloanbalance31[".fieldsForRegister"] = array();

$tdataloanbalance31[".listAjax"] = false;

	$tdataloanbalance31[".audit"] = false;

	$tdataloanbalance31[".locking"] = false;



$tdataloanbalance31[".list"] = true;



$tdataloanbalance31[".reorderRecordsByHeader"] = true;


$tdataloanbalance31[".exportFormatting"] = 2;
$tdataloanbalance31[".exportDelimiter"] = ",";
		

$tdataloanbalance31[".import"] = true;

$tdataloanbalance31[".exportTo"] = true;

$tdataloanbalance31[".printFriendly"] = true;


$tdataloanbalance31[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataloanbalance31[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataloanbalance31[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataloanbalance31[".searchSaving"] = false;
//

$tdataloanbalance31[".showSearchPanel"] = true;
		$tdataloanbalance31[".flexibleSearch"] = true;

$tdataloanbalance31[".isUseAjaxSuggest"] = true;

$tdataloanbalance31[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																				

$tdataloanbalance31[".ajaxCodeSnippetAdded"] = false;

$tdataloanbalance31[".buttonsAdded"] = false;

$tdataloanbalance31[".addPageEvents"] = false;

// use timepicker for search panel
$tdataloanbalance31[".isUseTimeForSearch"] = false;



$tdataloanbalance31[".badgeColor"] = "8FBC8B";


$tdataloanbalance31[".allSearchFields"] = array();
$tdataloanbalance31[".filterFields"] = array();
$tdataloanbalance31[".requiredSearchFields"] = array();

$tdataloanbalance31[".allSearchFields"][] = "LoanType";
	$tdataloanbalance31[".allSearchFields"][] = "LoanID";
	$tdataloanbalance31[".allSearchFields"][] = "EmployeeID";
	$tdataloanbalance31[".allSearchFields"][] = "LoanDescription";
	$tdataloanbalance31[".allSearchFields"][] = "StartDate";
	$tdataloanbalance31[".allSearchFields"][] = "Principal";
	$tdataloanbalance31[".allSearchFields"][] = "PerPayrollAmount";
	$tdataloanbalance31[".allSearchFields"][] = "Payment";
	$tdataloanbalance31[".allSearchFields"][] = "Balance";
	$tdataloanbalance31[".allSearchFields"][] = "ForPayment";
	

$tdataloanbalance31[".googleLikeFields"] = array();
$tdataloanbalance31[".googleLikeFields"][] = "LoanID";
$tdataloanbalance31[".googleLikeFields"][] = "StartDate";
$tdataloanbalance31[".googleLikeFields"][] = "Principal";
$tdataloanbalance31[".googleLikeFields"][] = "PerPayrollAmount";
$tdataloanbalance31[".googleLikeFields"][] = "Payment";
$tdataloanbalance31[".googleLikeFields"][] = "Balance";
$tdataloanbalance31[".googleLikeFields"][] = "ForPayment";
$tdataloanbalance31[".googleLikeFields"][] = "EmployeeID";
$tdataloanbalance31[".googleLikeFields"][] = "LoanDescription";
$tdataloanbalance31[".googleLikeFields"][] = "LoanType";


$tdataloanbalance31[".advSearchFields"] = array();
$tdataloanbalance31[".advSearchFields"][] = "LoanType";
$tdataloanbalance31[".advSearchFields"][] = "LoanID";
$tdataloanbalance31[".advSearchFields"][] = "EmployeeID";
$tdataloanbalance31[".advSearchFields"][] = "LoanDescription";
$tdataloanbalance31[".advSearchFields"][] = "StartDate";
$tdataloanbalance31[".advSearchFields"][] = "Principal";
$tdataloanbalance31[".advSearchFields"][] = "PerPayrollAmount";
$tdataloanbalance31[".advSearchFields"][] = "Payment";
$tdataloanbalance31[".advSearchFields"][] = "Balance";
$tdataloanbalance31[".advSearchFields"][] = "ForPayment";

$tdataloanbalance31[".tableType"] = "list";

$tdataloanbalance31[".printerPageOrientation"] = 0;
$tdataloanbalance31[".nPrinterPageScale"] = 100;

$tdataloanbalance31[".nPrinterSplitRecords"] = 40;

$tdataloanbalance31[".nPrinterPDFSplitRecords"] = 40;



$tdataloanbalance31[".geocodingEnabled"] = false;





$tdataloanbalance31[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdataloanbalance31[".totalsFields"] = array();
$tdataloanbalance31[".totalsFields"][] = array(
	"fName" => "Principal",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataloanbalance31[".totalsFields"][] = array(
	"fName" => "PerPayrollAmount",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataloanbalance31[".totalsFields"][] = array(
	"fName" => "Payment",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataloanbalance31[".totalsFields"][] = array(
	"fName" => "Balance",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataloanbalance31[".totalsFields"][] = array(
	"fName" => "ForPayment",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdataloanbalance31[".pageSize"] = 20;

$tdataloanbalance31[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataloanbalance31[".strOrderBy"] = $tstrOrderBy;

$tdataloanbalance31[".orderindexes"] = array();

$tdataloanbalance31[".sqlHead"] = "SELECT LoanID,  	StartDate,  	Principal,  	PerPayrollAmount,  	Payment,  	Balance,  	ForPayment,  	EmployeeID,  	LoanDescription,  	LoanType";
$tdataloanbalance31[".sqlFrom"] = "FROM loanbalance3";
$tdataloanbalance31[".sqlWhereExpr"] = "";
$tdataloanbalance31[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataloanbalance31[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataloanbalance31[".arrGroupsPerPage"] = $arrGPP;

$tdataloanbalance31[".highlightSearchResults"] = true;

$tableKeysloanbalance31 = array();
$tdataloanbalance31[".Keys"] = $tableKeysloanbalance31;

$tdataloanbalance31[".listFields"] = array();
$tdataloanbalance31[".listFields"][] = "LoanType";
$tdataloanbalance31[".listFields"][] = "LoanID";
$tdataloanbalance31[".listFields"][] = "EmployeeID";
$tdataloanbalance31[".listFields"][] = "LoanDescription";
$tdataloanbalance31[".listFields"][] = "StartDate";
$tdataloanbalance31[".listFields"][] = "Principal";
$tdataloanbalance31[".listFields"][] = "PerPayrollAmount";
$tdataloanbalance31[".listFields"][] = "Payment";
$tdataloanbalance31[".listFields"][] = "Balance";
$tdataloanbalance31[".listFields"][] = "ForPayment";

$tdataloanbalance31[".hideMobileList"] = array();


$tdataloanbalance31[".viewFields"] = array();
$tdataloanbalance31[".viewFields"][] = "LoanType";

$tdataloanbalance31[".addFields"] = array();
$tdataloanbalance31[".addFields"][] = "LoanType";

$tdataloanbalance31[".masterListFields"] = array();
$tdataloanbalance31[".masterListFields"][] = "LoanType";
$tdataloanbalance31[".masterListFields"][] = "LoanID";
$tdataloanbalance31[".masterListFields"][] = "EmployeeID";
$tdataloanbalance31[".masterListFields"][] = "LoanDescription";
$tdataloanbalance31[".masterListFields"][] = "StartDate";
$tdataloanbalance31[".masterListFields"][] = "Principal";
$tdataloanbalance31[".masterListFields"][] = "PerPayrollAmount";
$tdataloanbalance31[".masterListFields"][] = "Payment";
$tdataloanbalance31[".masterListFields"][] = "Balance";
$tdataloanbalance31[".masterListFields"][] = "ForPayment";

$tdataloanbalance31[".inlineAddFields"] = array();
$tdataloanbalance31[".inlineAddFields"][] = "LoanType";

$tdataloanbalance31[".editFields"] = array();
$tdataloanbalance31[".editFields"][] = "LoanType";

$tdataloanbalance31[".inlineEditFields"] = array();
$tdataloanbalance31[".inlineEditFields"][] = "LoanType";

$tdataloanbalance31[".updateSelectedFields"] = array();
$tdataloanbalance31[".updateSelectedFields"][] = "LoanType";


$tdataloanbalance31[".exportFields"] = array();
$tdataloanbalance31[".exportFields"][] = "LoanType";
$tdataloanbalance31[".exportFields"][] = "LoanID";
$tdataloanbalance31[".exportFields"][] = "EmployeeID";
$tdataloanbalance31[".exportFields"][] = "LoanDescription";
$tdataloanbalance31[".exportFields"][] = "StartDate";
$tdataloanbalance31[".exportFields"][] = "Principal";
$tdataloanbalance31[".exportFields"][] = "PerPayrollAmount";
$tdataloanbalance31[".exportFields"][] = "Payment";
$tdataloanbalance31[".exportFields"][] = "Balance";
$tdataloanbalance31[".exportFields"][] = "ForPayment";

$tdataloanbalance31[".importFields"] = array();
$tdataloanbalance31[".importFields"][] = "LoanID";
$tdataloanbalance31[".importFields"][] = "StartDate";
$tdataloanbalance31[".importFields"][] = "Principal";
$tdataloanbalance31[".importFields"][] = "PerPayrollAmount";
$tdataloanbalance31[".importFields"][] = "Payment";
$tdataloanbalance31[".importFields"][] = "Balance";
$tdataloanbalance31[".importFields"][] = "ForPayment";
$tdataloanbalance31[".importFields"][] = "EmployeeID";
$tdataloanbalance31[".importFields"][] = "LoanDescription";
$tdataloanbalance31[".importFields"][] = "LoanType";

$tdataloanbalance31[".printFields"] = array();
$tdataloanbalance31[".printFields"][] = "LoanType";
$tdataloanbalance31[".printFields"][] = "LoanID";
$tdataloanbalance31[".printFields"][] = "EmployeeID";
$tdataloanbalance31[".printFields"][] = "LoanDescription";
$tdataloanbalance31[".printFields"][] = "StartDate";
$tdataloanbalance31[".printFields"][] = "Principal";
$tdataloanbalance31[".printFields"][] = "PerPayrollAmount";
$tdataloanbalance31[".printFields"][] = "Payment";
$tdataloanbalance31[".printFields"][] = "Balance";
$tdataloanbalance31[".printFields"][] = "ForPayment";


//	LoanID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LoanID";
	$fdata["GoodName"] = "LoanID";
	$fdata["ownerTable"] = "loanbalance3";
	$fdata["Label"] = GetFieldLabel("loanbalance31","LoanID");
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




	$tdataloanbalance31["LoanID"] = $fdata;
//	StartDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StartDate";
	$fdata["GoodName"] = "StartDate";
	$fdata["ownerTable"] = "loanbalance3";
	$fdata["Label"] = GetFieldLabel("loanbalance31","StartDate");
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




	$tdataloanbalance31["StartDate"] = $fdata;
//	Principal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Principal";
	$fdata["GoodName"] = "Principal";
	$fdata["ownerTable"] = "loanbalance3";
	$fdata["Label"] = GetFieldLabel("loanbalance31","Principal");
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




	$tdataloanbalance31["Principal"] = $fdata;
//	PerPayrollAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PerPayrollAmount";
	$fdata["GoodName"] = "PerPayrollAmount";
	$fdata["ownerTable"] = "loanbalance3";
	$fdata["Label"] = GetFieldLabel("loanbalance31","PerPayrollAmount");
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




	$tdataloanbalance31["PerPayrollAmount"] = $fdata;
//	Payment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Payment";
	$fdata["GoodName"] = "Payment";
	$fdata["ownerTable"] = "loanbalance3";
	$fdata["Label"] = GetFieldLabel("loanbalance31","Payment");
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




	$tdataloanbalance31["Payment"] = $fdata;
//	Balance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Balance";
	$fdata["GoodName"] = "Balance";
	$fdata["ownerTable"] = "loanbalance3";
	$fdata["Label"] = GetFieldLabel("loanbalance31","Balance");
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




	$tdataloanbalance31["Balance"] = $fdata;
//	ForPayment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ForPayment";
	$fdata["GoodName"] = "ForPayment";
	$fdata["ownerTable"] = "loanbalance3";
	$fdata["Label"] = GetFieldLabel("loanbalance31","ForPayment");
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




	$tdataloanbalance31["ForPayment"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "loanbalance3";
	$fdata["Label"] = GetFieldLabel("loanbalance31","EmployeeID");
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




	$tdataloanbalance31["EmployeeID"] = $fdata;
//	LoanDescription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "LoanDescription";
	$fdata["GoodName"] = "LoanDescription";
	$fdata["ownerTable"] = "loanbalance3";
	$fdata["Label"] = GetFieldLabel("loanbalance31","LoanDescription");
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




	$tdataloanbalance31["LoanDescription"] = $fdata;
//	LoanType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "LoanType";
	$fdata["GoodName"] = "LoanType";
	$fdata["ownerTable"] = "loanbalance3";
	$fdata["Label"] = GetFieldLabel("loanbalance31","LoanType");
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




	$tdataloanbalance31["LoanType"] = $fdata;


$tables_data["loanbalance31"]=&$tdataloanbalance31;
$field_labels["loanbalance31"] = &$fieldLabelsloanbalance31;
$fieldToolTips["loanbalance31"] = &$fieldToolTipsloanbalance31;
$placeHolders["loanbalance31"] = &$placeHoldersloanbalance31;
$page_titles["loanbalance31"] = &$pageTitlesloanbalance31;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["loanbalance31"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["loanbalance31"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_loanbalance31()
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
	"m_srcTableName" => "loanbalance31"
));

$proto6["m_sql"] = "LoanID";
$proto6["m_srcTableName"] = "loanbalance31";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "StartDate",
	"m_strTable" => "loanbalance3",
	"m_srcTableName" => "loanbalance31"
));

$proto8["m_sql"] = "StartDate";
$proto8["m_srcTableName"] = "loanbalance31";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Principal",
	"m_strTable" => "loanbalance3",
	"m_srcTableName" => "loanbalance31"
));

$proto10["m_sql"] = "Principal";
$proto10["m_srcTableName"] = "loanbalance31";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PerPayrollAmount",
	"m_strTable" => "loanbalance3",
	"m_srcTableName" => "loanbalance31"
));

$proto12["m_sql"] = "PerPayrollAmount";
$proto12["m_srcTableName"] = "loanbalance31";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Payment",
	"m_strTable" => "loanbalance3",
	"m_srcTableName" => "loanbalance31"
));

$proto14["m_sql"] = "Payment";
$proto14["m_srcTableName"] = "loanbalance31";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Balance",
	"m_strTable" => "loanbalance3",
	"m_srcTableName" => "loanbalance31"
));

$proto16["m_sql"] = "Balance";
$proto16["m_srcTableName"] = "loanbalance31";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ForPayment",
	"m_strTable" => "loanbalance3",
	"m_srcTableName" => "loanbalance31"
));

$proto18["m_sql"] = "ForPayment";
$proto18["m_srcTableName"] = "loanbalance31";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "loanbalance3",
	"m_srcTableName" => "loanbalance31"
));

$proto20["m_sql"] = "EmployeeID";
$proto20["m_srcTableName"] = "loanbalance31";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanDescription",
	"m_strTable" => "loanbalance3",
	"m_srcTableName" => "loanbalance31"
));

$proto22["m_sql"] = "LoanDescription";
$proto22["m_srcTableName"] = "loanbalance31";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanType",
	"m_strTable" => "loanbalance3",
	"m_srcTableName" => "loanbalance31"
));

$proto24["m_sql"] = "LoanType";
$proto24["m_srcTableName"] = "loanbalance31";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "loanbalance3";
$proto27["m_srcTableName"] = "loanbalance31";
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
$proto26["m_srcTableName"] = "loanbalance31";
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
$proto0["m_srcTableName"]="loanbalance31";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_loanbalance31 = createSqlQuery_loanbalance31();


	
		;

										

$tdataloanbalance31[".sqlquery"] = $queryData_loanbalance31;

$tableEvents["loanbalance31"] = new eventsBase;
$tdataloanbalance31[".hasEvents"] = false;

?>