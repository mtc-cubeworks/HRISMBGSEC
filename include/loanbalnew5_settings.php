<?php
require_once(getabspath("classes/cipherer.php"));




$tdataloanbalnew5 = array();
	$tdataloanbalnew5[".truncateText"] = true;
	$tdataloanbalnew5[".NumberOfChars"] = 80;
	$tdataloanbalnew5[".ShortName"] = "loanbalnew5";
	$tdataloanbalnew5[".OwnerID"] = "";
	$tdataloanbalnew5[".OriginalTable"] = "loanbalnew5";

//	field labels
$fieldLabelsloanbalnew5 = array();
$fieldToolTipsloanbalnew5 = array();
$pageTitlesloanbalnew5 = array();
$placeHoldersloanbalnew5 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsloanbalnew5["English"] = array();
	$fieldToolTipsloanbalnew5["English"] = array();
	$placeHoldersloanbalnew5["English"] = array();
	$pageTitlesloanbalnew5["English"] = array();
	$fieldLabelsloanbalnew5["English"]["LoanID"] = "Loan ID";
	$fieldToolTipsloanbalnew5["English"]["LoanID"] = "";
	$placeHoldersloanbalnew5["English"]["LoanID"] = "";
	$fieldLabelsloanbalnew5["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipsloanbalnew5["English"]["EmployeeID"] = "";
	$placeHoldersloanbalnew5["English"]["EmployeeID"] = "";
	$fieldLabelsloanbalnew5["English"]["StartDate"] = "Start Date";
	$fieldToolTipsloanbalnew5["English"]["StartDate"] = "";
	$placeHoldersloanbalnew5["English"]["StartDate"] = "";
	$fieldLabelsloanbalnew5["English"]["Principal"] = "Principal Balance";
	$fieldToolTipsloanbalnew5["English"]["Principal"] = "";
	$placeHoldersloanbalnew5["English"]["Principal"] = "";
	$fieldLabelsloanbalnew5["English"]["DType"] = "Deduction Category";
	$fieldToolTipsloanbalnew5["English"]["DType"] = "";
	$placeHoldersloanbalnew5["English"]["DType"] = "";
	$fieldLabelsloanbalnew5["English"]["LoanDescription"] = "Loan Description";
	$fieldToolTipsloanbalnew5["English"]["LoanDescription"] = "";
	$placeHoldersloanbalnew5["English"]["LoanDescription"] = "";
	$fieldLabelsloanbalnew5["English"]["PaymentPeriod"] = "Payment Period";
	$fieldToolTipsloanbalnew5["English"]["PaymentPeriod"] = "";
	$placeHoldersloanbalnew5["English"]["PaymentPeriod"] = "";
	$fieldLabelsloanbalnew5["English"]["OPrincipal"] = "Principal";
	$fieldToolTipsloanbalnew5["English"]["OPrincipal"] = "";
	$placeHoldersloanbalnew5["English"]["OPrincipal"] = "";
	$fieldLabelsloanbalnew5["English"]["PerDay"] = "Per Day Amount";
	$fieldToolTipsloanbalnew5["English"]["PerDay"] = "";
	$placeHoldersloanbalnew5["English"]["PerDay"] = "";
	$fieldLabelsloanbalnew5["English"]["PerPayrollAmount"] = "Per Payroll Amount";
	$fieldToolTipsloanbalnew5["English"]["PerPayrollAmount"] = "";
	$placeHoldersloanbalnew5["English"]["PerPayrollAmount"] = "";
	$fieldLabelsloanbalnew5["English"]["MonthlyAmortization"] = "Monthly Amount";
	$fieldToolTipsloanbalnew5["English"]["MonthlyAmortization"] = "";
	$placeHoldersloanbalnew5["English"]["MonthlyAmortization"] = "";
	$fieldLabelsloanbalnew5["English"]["Payment"] = "Payment";
	$fieldToolTipsloanbalnew5["English"]["Payment"] = "";
	$placeHoldersloanbalnew5["English"]["Payment"] = "";
	$fieldLabelsloanbalnew5["English"]["Balance"] = "Balance";
	$fieldToolTipsloanbalnew5["English"]["Balance"] = "";
	$placeHoldersloanbalnew5["English"]["Balance"] = "";
	$fieldLabelsloanbalnew5["English"]["LessAbsences"] = "Less Absences";
	$fieldToolTipsloanbalnew5["English"]["LessAbsences"] = "";
	$placeHoldersloanbalnew5["English"]["LessAbsences"] = "";
	$fieldLabelsloanbalnew5["English"]["LoanType"] = "Loan Type";
	$fieldToolTipsloanbalnew5["English"]["LoanType"] = "";
	$placeHoldersloanbalnew5["English"]["LoanType"] = "";
	$fieldLabelsloanbalnew5["English"]["Fireme"] = "On Cue";
	$fieldToolTipsloanbalnew5["English"]["Fireme"] = "";
	$placeHoldersloanbalnew5["English"]["Fireme"] = "";
	$fieldLabelsloanbalnew5["English"]["ForPayment"] = "For Payment";
	$fieldToolTipsloanbalnew5["English"]["ForPayment"] = "";
	$placeHoldersloanbalnew5["English"]["ForPayment"] = "";
	if (count($fieldToolTipsloanbalnew5["English"]))
		$tdataloanbalnew5[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsloanbalnew5[""] = array();
	$fieldToolTipsloanbalnew5[""] = array();
	$placeHoldersloanbalnew5[""] = array();
	$pageTitlesloanbalnew5[""] = array();
	$fieldLabelsloanbalnew5[""]["LoanID"] = "Loan ID";
	$fieldToolTipsloanbalnew5[""]["LoanID"] = "";
	$placeHoldersloanbalnew5[""]["LoanID"] = "";
	$fieldLabelsloanbalnew5[""]["EmployeeID"] = "Employee ID";
	$fieldToolTipsloanbalnew5[""]["EmployeeID"] = "";
	$placeHoldersloanbalnew5[""]["EmployeeID"] = "";
	$fieldLabelsloanbalnew5[""]["StartDate"] = "Start Date";
	$fieldToolTipsloanbalnew5[""]["StartDate"] = "";
	$placeHoldersloanbalnew5[""]["StartDate"] = "";
	$fieldLabelsloanbalnew5[""]["Principal"] = "Principal";
	$fieldToolTipsloanbalnew5[""]["Principal"] = "";
	$placeHoldersloanbalnew5[""]["Principal"] = "";
	$fieldLabelsloanbalnew5[""]["DType"] = "DType";
	$fieldToolTipsloanbalnew5[""]["DType"] = "";
	$placeHoldersloanbalnew5[""]["DType"] = "";
	$fieldLabelsloanbalnew5[""]["LoanDescription"] = "Loan Description";
	$fieldToolTipsloanbalnew5[""]["LoanDescription"] = "";
	$placeHoldersloanbalnew5[""]["LoanDescription"] = "";
	$fieldLabelsloanbalnew5[""]["PaymentPeriod"] = "Payment Period";
	$fieldToolTipsloanbalnew5[""]["PaymentPeriod"] = "";
	$placeHoldersloanbalnew5[""]["PaymentPeriod"] = "";
	$fieldLabelsloanbalnew5[""]["OPrincipal"] = "OPrincipal";
	$fieldToolTipsloanbalnew5[""]["OPrincipal"] = "";
	$placeHoldersloanbalnew5[""]["OPrincipal"] = "";
	$fieldLabelsloanbalnew5[""]["PerDay"] = "Per Day";
	$fieldToolTipsloanbalnew5[""]["PerDay"] = "";
	$placeHoldersloanbalnew5[""]["PerDay"] = "";
	$fieldLabelsloanbalnew5[""]["PerPayrollAmount"] = "Per Payroll Amount";
	$fieldToolTipsloanbalnew5[""]["PerPayrollAmount"] = "";
	$placeHoldersloanbalnew5[""]["PerPayrollAmount"] = "";
	$fieldLabelsloanbalnew5[""]["MonthlyAmortization"] = "Monthly Amortization";
	$fieldToolTipsloanbalnew5[""]["MonthlyAmortization"] = "";
	$placeHoldersloanbalnew5[""]["MonthlyAmortization"] = "";
	$fieldLabelsloanbalnew5[""]["Payment"] = "Payment";
	$fieldToolTipsloanbalnew5[""]["Payment"] = "";
	$placeHoldersloanbalnew5[""]["Payment"] = "";
	$fieldLabelsloanbalnew5[""]["Balance"] = "Balance";
	$fieldToolTipsloanbalnew5[""]["Balance"] = "";
	$placeHoldersloanbalnew5[""]["Balance"] = "";
	$fieldLabelsloanbalnew5[""]["LessAbsences"] = "Less Absences";
	$fieldToolTipsloanbalnew5[""]["LessAbsences"] = "";
	$placeHoldersloanbalnew5[""]["LessAbsences"] = "";
	$fieldLabelsloanbalnew5[""]["LoanType"] = "Loan Type";
	$fieldToolTipsloanbalnew5[""]["LoanType"] = "";
	$placeHoldersloanbalnew5[""]["LoanType"] = "";
	$fieldLabelsloanbalnew5[""]["Fireme"] = "Fireme";
	$fieldToolTipsloanbalnew5[""]["Fireme"] = "";
	$placeHoldersloanbalnew5[""]["Fireme"] = "";
	$fieldLabelsloanbalnew5[""]["ForPayment"] = "For Payment";
	$fieldToolTipsloanbalnew5[""]["ForPayment"] = "";
	$placeHoldersloanbalnew5[""]["ForPayment"] = "";
	if (count($fieldToolTipsloanbalnew5[""]))
		$tdataloanbalnew5[".isUseToolTips"] = true;
}


	$tdataloanbalnew5[".NCSearch"] = true;



$tdataloanbalnew5[".shortTableName"] = "loanbalnew5";
$tdataloanbalnew5[".nSecOptions"] = 0;
$tdataloanbalnew5[".recsPerRowPrint"] = 1;
$tdataloanbalnew5[".mainTableOwnerID"] = "";
$tdataloanbalnew5[".moveNext"] = 1;
$tdataloanbalnew5[".entityType"] = 0;

$tdataloanbalnew5[".strOriginalTableName"] = "loanbalnew5";

	



$tdataloanbalnew5[".showAddInPopup"] = false;

$tdataloanbalnew5[".showEditInPopup"] = false;

$tdataloanbalnew5[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataloanbalnew5[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataloanbalnew5[".fieldsForRegister"] = array();

$tdataloanbalnew5[".listAjax"] = false;

	$tdataloanbalnew5[".audit"] = false;

	$tdataloanbalnew5[".locking"] = false;



$tdataloanbalnew5[".list"] = true;



$tdataloanbalnew5[".reorderRecordsByHeader"] = true;


$tdataloanbalnew5[".exportFormatting"] = 2;
$tdataloanbalnew5[".exportDelimiter"] = ",";
		


$tdataloanbalnew5[".exportTo"] = true;

$tdataloanbalnew5[".printFriendly"] = true;


$tdataloanbalnew5[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataloanbalnew5[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataloanbalnew5[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataloanbalnew5[".searchSaving"] = false;
//

$tdataloanbalnew5[".showSearchPanel"] = true;
		$tdataloanbalnew5[".flexibleSearch"] = true;

$tdataloanbalnew5[".isUseAjaxSuggest"] = true;

$tdataloanbalnew5[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																											

$tdataloanbalnew5[".ajaxCodeSnippetAdded"] = false;

$tdataloanbalnew5[".buttonsAdded"] = false;

$tdataloanbalnew5[".addPageEvents"] = false;

// use timepicker for search panel
$tdataloanbalnew5[".isUseTimeForSearch"] = false;





$tdataloanbalnew5[".allSearchFields"] = array();
$tdataloanbalnew5[".filterFields"] = array();
$tdataloanbalnew5[".requiredSearchFields"] = array();

$tdataloanbalnew5[".allSearchFields"][] = "LoanID";
	$tdataloanbalnew5[".allSearchFields"][] = "EmployeeID";
	$tdataloanbalnew5[".allSearchFields"][] = "DType";
	$tdataloanbalnew5[".allSearchFields"][] = "LoanDescription";
	$tdataloanbalnew5[".allSearchFields"][] = "LoanType";
	$tdataloanbalnew5[".allSearchFields"][] = "PaymentPeriod";
	$tdataloanbalnew5[".allSearchFields"][] = "StartDate";
	$tdataloanbalnew5[".allSearchFields"][] = "OPrincipal";
	$tdataloanbalnew5[".allSearchFields"][] = "Principal";
	$tdataloanbalnew5[".allSearchFields"][] = "PerDay";
	$tdataloanbalnew5[".allSearchFields"][] = "PerPayrollAmount";
	$tdataloanbalnew5[".allSearchFields"][] = "MonthlyAmortization";
	$tdataloanbalnew5[".allSearchFields"][] = "Balance";
	$tdataloanbalnew5[".allSearchFields"][] = "Payment";
	$tdataloanbalnew5[".allSearchFields"][] = "ForPayment";
	$tdataloanbalnew5[".allSearchFields"][] = "LessAbsences";
	$tdataloanbalnew5[".allSearchFields"][] = "Fireme";
	

$tdataloanbalnew5[".googleLikeFields"] = array();
$tdataloanbalnew5[".googleLikeFields"][] = "LoanID";
$tdataloanbalnew5[".googleLikeFields"][] = "EmployeeID";
$tdataloanbalnew5[".googleLikeFields"][] = "StartDate";
$tdataloanbalnew5[".googleLikeFields"][] = "Principal";
$tdataloanbalnew5[".googleLikeFields"][] = "DType";
$tdataloanbalnew5[".googleLikeFields"][] = "LoanDescription";
$tdataloanbalnew5[".googleLikeFields"][] = "PaymentPeriod";
$tdataloanbalnew5[".googleLikeFields"][] = "OPrincipal";
$tdataloanbalnew5[".googleLikeFields"][] = "PerDay";
$tdataloanbalnew5[".googleLikeFields"][] = "PerPayrollAmount";
$tdataloanbalnew5[".googleLikeFields"][] = "MonthlyAmortization";
$tdataloanbalnew5[".googleLikeFields"][] = "Payment";
$tdataloanbalnew5[".googleLikeFields"][] = "Balance";
$tdataloanbalnew5[".googleLikeFields"][] = "LessAbsences";
$tdataloanbalnew5[".googleLikeFields"][] = "LoanType";
$tdataloanbalnew5[".googleLikeFields"][] = "Fireme";
$tdataloanbalnew5[".googleLikeFields"][] = "ForPayment";


$tdataloanbalnew5[".advSearchFields"] = array();
$tdataloanbalnew5[".advSearchFields"][] = "LoanID";
$tdataloanbalnew5[".advSearchFields"][] = "EmployeeID";
$tdataloanbalnew5[".advSearchFields"][] = "DType";
$tdataloanbalnew5[".advSearchFields"][] = "LoanDescription";
$tdataloanbalnew5[".advSearchFields"][] = "LoanType";
$tdataloanbalnew5[".advSearchFields"][] = "PaymentPeriod";
$tdataloanbalnew5[".advSearchFields"][] = "StartDate";
$tdataloanbalnew5[".advSearchFields"][] = "OPrincipal";
$tdataloanbalnew5[".advSearchFields"][] = "Principal";
$tdataloanbalnew5[".advSearchFields"][] = "PerDay";
$tdataloanbalnew5[".advSearchFields"][] = "PerPayrollAmount";
$tdataloanbalnew5[".advSearchFields"][] = "MonthlyAmortization";
$tdataloanbalnew5[".advSearchFields"][] = "Balance";
$tdataloanbalnew5[".advSearchFields"][] = "Payment";
$tdataloanbalnew5[".advSearchFields"][] = "ForPayment";
$tdataloanbalnew5[".advSearchFields"][] = "LessAbsences";
$tdataloanbalnew5[".advSearchFields"][] = "Fireme";

$tdataloanbalnew5[".tableType"] = "list";

$tdataloanbalnew5[".printerPageOrientation"] = 0;
$tdataloanbalnew5[".nPrinterPageScale"] = 100;

$tdataloanbalnew5[".nPrinterSplitRecords"] = 40;

$tdataloanbalnew5[".nPrinterPDFSplitRecords"] = 40;



$tdataloanbalnew5[".geocodingEnabled"] = false;





$tdataloanbalnew5[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdataloanbalnew5[".totalsFields"] = array();
$tdataloanbalnew5[".totalsFields"][] = array(
	"fName" => "Principal",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataloanbalnew5[".totalsFields"][] = array(
	"fName" => "Balance",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataloanbalnew5[".totalsFields"][] = array(
	"fName" => "Payment",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataloanbalnew5[".totalsFields"][] = array(
	"fName" => "ForPayment",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdataloanbalnew5[".pageSize"] = 20;

$tdataloanbalnew5[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY LoanID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataloanbalnew5[".strOrderBy"] = $tstrOrderBy;

$tdataloanbalnew5[".orderindexes"] = array();
	$tdataloanbalnew5[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "LoanID");


$tdataloanbalnew5[".sqlHead"] = "SELECT LoanID,  EmployeeID,  StartDate,  Principal,  DType,  LoanDescription,  PaymentPeriod,  OPrincipal,  PerDay,  PerPayrollAmount,  MonthlyAmortization,  Payment,  Balance,  LessAbsences,  LoanType,  Fireme,  ForPayment";
$tdataloanbalnew5[".sqlFrom"] = "FROM loanbalnew5";
$tdataloanbalnew5[".sqlWhereExpr"] = "";
$tdataloanbalnew5[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataloanbalnew5[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataloanbalnew5[".arrGroupsPerPage"] = $arrGPP;

$tdataloanbalnew5[".highlightSearchResults"] = true;

$tableKeysloanbalnew5 = array();
$tableKeysloanbalnew5[] = "LoanID";
$tdataloanbalnew5[".Keys"] = $tableKeysloanbalnew5;

$tdataloanbalnew5[".listFields"] = array();
$tdataloanbalnew5[".listFields"][] = "LoanID";
$tdataloanbalnew5[".listFields"][] = "EmployeeID";
$tdataloanbalnew5[".listFields"][] = "DType";
$tdataloanbalnew5[".listFields"][] = "LoanDescription";
$tdataloanbalnew5[".listFields"][] = "LoanType";
$tdataloanbalnew5[".listFields"][] = "PaymentPeriod";
$tdataloanbalnew5[".listFields"][] = "StartDate";
$tdataloanbalnew5[".listFields"][] = "OPrincipal";
$tdataloanbalnew5[".listFields"][] = "Principal";
$tdataloanbalnew5[".listFields"][] = "PerDay";
$tdataloanbalnew5[".listFields"][] = "PerPayrollAmount";
$tdataloanbalnew5[".listFields"][] = "MonthlyAmortization";
$tdataloanbalnew5[".listFields"][] = "Balance";
$tdataloanbalnew5[".listFields"][] = "Payment";
$tdataloanbalnew5[".listFields"][] = "ForPayment";
$tdataloanbalnew5[".listFields"][] = "LessAbsences";
$tdataloanbalnew5[".listFields"][] = "Fireme";

$tdataloanbalnew5[".hideMobileList"] = array();


$tdataloanbalnew5[".viewFields"] = array();

$tdataloanbalnew5[".addFields"] = array();

$tdataloanbalnew5[".masterListFields"] = array();
$tdataloanbalnew5[".masterListFields"][] = "LoanID";
$tdataloanbalnew5[".masterListFields"][] = "EmployeeID";
$tdataloanbalnew5[".masterListFields"][] = "DType";
$tdataloanbalnew5[".masterListFields"][] = "LoanDescription";
$tdataloanbalnew5[".masterListFields"][] = "LoanType";
$tdataloanbalnew5[".masterListFields"][] = "PaymentPeriod";
$tdataloanbalnew5[".masterListFields"][] = "StartDate";
$tdataloanbalnew5[".masterListFields"][] = "OPrincipal";
$tdataloanbalnew5[".masterListFields"][] = "Principal";
$tdataloanbalnew5[".masterListFields"][] = "PerDay";
$tdataloanbalnew5[".masterListFields"][] = "PerPayrollAmount";
$tdataloanbalnew5[".masterListFields"][] = "MonthlyAmortization";
$tdataloanbalnew5[".masterListFields"][] = "Balance";
$tdataloanbalnew5[".masterListFields"][] = "Payment";
$tdataloanbalnew5[".masterListFields"][] = "ForPayment";
$tdataloanbalnew5[".masterListFields"][] = "LessAbsences";
$tdataloanbalnew5[".masterListFields"][] = "Fireme";

$tdataloanbalnew5[".inlineAddFields"] = array();

$tdataloanbalnew5[".editFields"] = array();

$tdataloanbalnew5[".inlineEditFields"] = array();

$tdataloanbalnew5[".updateSelectedFields"] = array();


$tdataloanbalnew5[".exportFields"] = array();
$tdataloanbalnew5[".exportFields"][] = "LoanID";
$tdataloanbalnew5[".exportFields"][] = "EmployeeID";
$tdataloanbalnew5[".exportFields"][] = "DType";
$tdataloanbalnew5[".exportFields"][] = "LoanDescription";
$tdataloanbalnew5[".exportFields"][] = "LoanType";
$tdataloanbalnew5[".exportFields"][] = "PaymentPeriod";
$tdataloanbalnew5[".exportFields"][] = "StartDate";
$tdataloanbalnew5[".exportFields"][] = "OPrincipal";
$tdataloanbalnew5[".exportFields"][] = "Principal";
$tdataloanbalnew5[".exportFields"][] = "PerDay";
$tdataloanbalnew5[".exportFields"][] = "PerPayrollAmount";
$tdataloanbalnew5[".exportFields"][] = "MonthlyAmortization";
$tdataloanbalnew5[".exportFields"][] = "Balance";
$tdataloanbalnew5[".exportFields"][] = "Payment";
$tdataloanbalnew5[".exportFields"][] = "ForPayment";
$tdataloanbalnew5[".exportFields"][] = "LessAbsences";
$tdataloanbalnew5[".exportFields"][] = "Fireme";

$tdataloanbalnew5[".importFields"] = array();
$tdataloanbalnew5[".importFields"][] = "LoanID";
$tdataloanbalnew5[".importFields"][] = "EmployeeID";
$tdataloanbalnew5[".importFields"][] = "StartDate";
$tdataloanbalnew5[".importFields"][] = "Principal";
$tdataloanbalnew5[".importFields"][] = "DType";
$tdataloanbalnew5[".importFields"][] = "LoanDescription";
$tdataloanbalnew5[".importFields"][] = "PaymentPeriod";
$tdataloanbalnew5[".importFields"][] = "OPrincipal";
$tdataloanbalnew5[".importFields"][] = "PerDay";
$tdataloanbalnew5[".importFields"][] = "PerPayrollAmount";
$tdataloanbalnew5[".importFields"][] = "MonthlyAmortization";
$tdataloanbalnew5[".importFields"][] = "Payment";
$tdataloanbalnew5[".importFields"][] = "Balance";
$tdataloanbalnew5[".importFields"][] = "LessAbsences";
$tdataloanbalnew5[".importFields"][] = "LoanType";
$tdataloanbalnew5[".importFields"][] = "Fireme";
$tdataloanbalnew5[".importFields"][] = "ForPayment";

$tdataloanbalnew5[".printFields"] = array();
$tdataloanbalnew5[".printFields"][] = "LoanID";
$tdataloanbalnew5[".printFields"][] = "EmployeeID";
$tdataloanbalnew5[".printFields"][] = "DType";
$tdataloanbalnew5[".printFields"][] = "LoanDescription";
$tdataloanbalnew5[".printFields"][] = "LoanType";
$tdataloanbalnew5[".printFields"][] = "PaymentPeriod";
$tdataloanbalnew5[".printFields"][] = "StartDate";
$tdataloanbalnew5[".printFields"][] = "OPrincipal";
$tdataloanbalnew5[".printFields"][] = "Principal";
$tdataloanbalnew5[".printFields"][] = "PerDay";
$tdataloanbalnew5[".printFields"][] = "PerPayrollAmount";
$tdataloanbalnew5[".printFields"][] = "MonthlyAmortization";
$tdataloanbalnew5[".printFields"][] = "Balance";
$tdataloanbalnew5[".printFields"][] = "Payment";
$tdataloanbalnew5[".printFields"][] = "ForPayment";
$tdataloanbalnew5[".printFields"][] = "LessAbsences";
$tdataloanbalnew5[".printFields"][] = "Fireme";


//	LoanID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LoanID";
	$fdata["GoodName"] = "LoanID";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew5","LoanID");
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




	$tdataloanbalnew5["LoanID"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew5","EmployeeID");
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




	$tdataloanbalnew5["EmployeeID"] = $fdata;
//	StartDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "StartDate";
	$fdata["GoodName"] = "StartDate";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew5","StartDate");
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




	$tdataloanbalnew5["StartDate"] = $fdata;
//	Principal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Principal";
	$fdata["GoodName"] = "Principal";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew5","Principal");
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




	$tdataloanbalnew5["Principal"] = $fdata;
//	DType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DType";
	$fdata["GoodName"] = "DType";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew5","DType");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DtID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "DeductionType";
	
	

	
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




	$tdataloanbalnew5["DType"] = $fdata;
//	LoanDescription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "LoanDescription";
	$fdata["GoodName"] = "LoanDescription";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew5","LoanDescription");
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




	$tdataloanbalnew5["LoanDescription"] = $fdata;
//	PaymentPeriod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PaymentPeriod";
	$fdata["GoodName"] = "PaymentPeriod";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew5","PaymentPeriod");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataloanbalnew5["PaymentPeriod"] = $fdata;
//	OPrincipal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "OPrincipal";
	$fdata["GoodName"] = "OPrincipal";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew5","OPrincipal");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataloanbalnew5["OPrincipal"] = $fdata;
//	PerDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PerDay";
	$fdata["GoodName"] = "PerDay";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew5","PerDay");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataloanbalnew5["PerDay"] = $fdata;
//	PerPayrollAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PerPayrollAmount";
	$fdata["GoodName"] = "PerPayrollAmount";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew5","PerPayrollAmount");
	$fdata["FieldType"] = 14;

	
	
	
			
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




	$tdataloanbalnew5["PerPayrollAmount"] = $fdata;
//	MonthlyAmortization
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "MonthlyAmortization";
	$fdata["GoodName"] = "MonthlyAmortization";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew5","MonthlyAmortization");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataloanbalnew5["MonthlyAmortization"] = $fdata;
//	Payment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Payment";
	$fdata["GoodName"] = "Payment";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew5","Payment");
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




	$tdataloanbalnew5["Payment"] = $fdata;
//	Balance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Balance";
	$fdata["GoodName"] = "Balance";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew5","Balance");
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




	$tdataloanbalnew5["Balance"] = $fdata;
//	LessAbsences
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "LessAbsences";
	$fdata["GoodName"] = "LessAbsences";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew5","LessAbsences");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataloanbalnew5["LessAbsences"] = $fdata;
//	LoanType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "LoanType";
	$fdata["GoodName"] = "LoanType";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew5","LoanType");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "loantypes";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "LtID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "LoanType";
	
	

	
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




	$tdataloanbalnew5["LoanType"] = $fdata;
//	Fireme
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Fireme";
	$fdata["GoodName"] = "Fireme";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew5","Fireme");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Fireme";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fireme";

	
	
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




	$tdataloanbalnew5["Fireme"] = $fdata;
//	ForPayment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "ForPayment";
	$fdata["GoodName"] = "ForPayment";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew5","ForPayment");
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




	$tdataloanbalnew5["ForPayment"] = $fdata;


$tables_data["loanbalnew5"]=&$tdataloanbalnew5;
$field_labels["loanbalnew5"] = &$fieldLabelsloanbalnew5;
$fieldToolTips["loanbalnew5"] = &$fieldToolTipsloanbalnew5;
$placeHolders["loanbalnew5"] = &$placeHoldersloanbalnew5;
$page_titles["loanbalnew5"] = &$pageTitlesloanbalnew5;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["loanbalnew5"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["loanbalnew5"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_loanbalnew5()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LoanID,  EmployeeID,  StartDate,  Principal,  DType,  LoanDescription,  PaymentPeriod,  OPrincipal,  PerDay,  PerPayrollAmount,  MonthlyAmortization,  Payment,  Balance,  LessAbsences,  LoanType,  Fireme,  ForPayment";
$proto0["m_strFrom"] = "FROM loanbalnew5";
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
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew5"
));

$proto6["m_sql"] = "LoanID";
$proto6["m_srcTableName"] = "loanbalnew5";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew5"
));

$proto8["m_sql"] = "EmployeeID";
$proto8["m_srcTableName"] = "loanbalnew5";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "StartDate",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew5"
));

$proto10["m_sql"] = "StartDate";
$proto10["m_srcTableName"] = "loanbalnew5";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Principal",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew5"
));

$proto12["m_sql"] = "Principal";
$proto12["m_srcTableName"] = "loanbalnew5";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DType",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew5"
));

$proto14["m_sql"] = "DType";
$proto14["m_srcTableName"] = "loanbalnew5";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanDescription",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew5"
));

$proto16["m_sql"] = "LoanDescription";
$proto16["m_srcTableName"] = "loanbalnew5";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PaymentPeriod",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew5"
));

$proto18["m_sql"] = "PaymentPeriod";
$proto18["m_srcTableName"] = "loanbalnew5";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "OPrincipal",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew5"
));

$proto20["m_sql"] = "OPrincipal";
$proto20["m_srcTableName"] = "loanbalnew5";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "PerDay",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew5"
));

$proto22["m_sql"] = "PerDay";
$proto22["m_srcTableName"] = "loanbalnew5";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "PerPayrollAmount",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew5"
));

$proto24["m_sql"] = "PerPayrollAmount";
$proto24["m_srcTableName"] = "loanbalnew5";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "MonthlyAmortization",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew5"
));

$proto26["m_sql"] = "MonthlyAmortization";
$proto26["m_srcTableName"] = "loanbalnew5";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Payment",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew5"
));

$proto28["m_sql"] = "Payment";
$proto28["m_srcTableName"] = "loanbalnew5";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Balance",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew5"
));

$proto30["m_sql"] = "Balance";
$proto30["m_srcTableName"] = "loanbalnew5";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "LessAbsences",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew5"
));

$proto32["m_sql"] = "LessAbsences";
$proto32["m_srcTableName"] = "loanbalnew5";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanType",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew5"
));

$proto34["m_sql"] = "LoanType";
$proto34["m_srcTableName"] = "loanbalnew5";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Fireme",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew5"
));

$proto36["m_sql"] = "Fireme";
$proto36["m_srcTableName"] = "loanbalnew5";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "ForPayment",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew5"
));

$proto38["m_sql"] = "ForPayment";
$proto38["m_srcTableName"] = "loanbalnew5";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "loanbalnew5";
$proto41["m_srcTableName"] = "loanbalnew5";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "LoanID";
$proto41["m_columns"][] = "EmployeeID";
$proto41["m_columns"][] = "StartDate";
$proto41["m_columns"][] = "Principal";
$proto41["m_columns"][] = "DType";
$proto41["m_columns"][] = "LoanDescription";
$proto41["m_columns"][] = "PaymentPeriod";
$proto41["m_columns"][] = "OPrincipal";
$proto41["m_columns"][] = "PerDay";
$proto41["m_columns"][] = "PerPayrollAmount";
$proto41["m_columns"][] = "MonthlyAmortization";
$proto41["m_columns"][] = "Payment";
$proto41["m_columns"][] = "Balance";
$proto41["m_columns"][] = "LessAbsences";
$proto41["m_columns"][] = "LoanType";
$proto41["m_columns"][] = "FromDate";
$proto41["m_columns"][] = "ToDate";
$proto41["m_columns"][] = "Fireme";
$proto41["m_columns"][] = "ForPay";
$proto41["m_columns"][] = "ForPayment";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "loanbalnew5";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "loanbalnew5";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "LoanID",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew5"
));

$proto44["m_column"]=$obj;
$proto44["m_bAsc"] = 0;
$proto44["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto44);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="loanbalnew5";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_loanbalnew5 = createSqlQuery_loanbalnew5();


	
		;

																	

$tdataloanbalnew5[".sqlquery"] = $queryData_loanbalnew5;

$tableEvents["loanbalnew5"] = new eventsBase;
$tdataloanbalnew5[".hasEvents"] = false;

?>