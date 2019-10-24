<?php
require_once(getabspath("classes/cipherer.php"));




$tdataloanbalnew51 = array();
	$tdataloanbalnew51[".truncateText"] = true;
	$tdataloanbalnew51[".NumberOfChars"] = 80;
	$tdataloanbalnew51[".ShortName"] = "loanbalnew51";
	$tdataloanbalnew51[".OwnerID"] = "EmployeeID";
	$tdataloanbalnew51[".OriginalTable"] = "loanbalnew5";

//	field labels
$fieldLabelsloanbalnew51 = array();
$fieldToolTipsloanbalnew51 = array();
$pageTitlesloanbalnew51 = array();
$placeHoldersloanbalnew51 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsloanbalnew51["English"] = array();
	$fieldToolTipsloanbalnew51["English"] = array();
	$placeHoldersloanbalnew51["English"] = array();
	$pageTitlesloanbalnew51["English"] = array();
	$fieldLabelsloanbalnew51["English"]["LoanID"] = "Loan ID";
	$fieldToolTipsloanbalnew51["English"]["LoanID"] = "";
	$placeHoldersloanbalnew51["English"]["LoanID"] = "";
	$fieldLabelsloanbalnew51["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipsloanbalnew51["English"]["EmployeeID"] = "";
	$placeHoldersloanbalnew51["English"]["EmployeeID"] = "";
	$fieldLabelsloanbalnew51["English"]["StartDate"] = "Start Date";
	$fieldToolTipsloanbalnew51["English"]["StartDate"] = "";
	$placeHoldersloanbalnew51["English"]["StartDate"] = "";
	$fieldLabelsloanbalnew51["English"]["Principal"] = "Principal Balance";
	$fieldToolTipsloanbalnew51["English"]["Principal"] = "";
	$placeHoldersloanbalnew51["English"]["Principal"] = "";
	$fieldLabelsloanbalnew51["English"]["DType"] = "Deduction Category";
	$fieldToolTipsloanbalnew51["English"]["DType"] = "";
	$placeHoldersloanbalnew51["English"]["DType"] = "";
	$fieldLabelsloanbalnew51["English"]["LoanDescription"] = "Loan Description";
	$fieldToolTipsloanbalnew51["English"]["LoanDescription"] = "";
	$placeHoldersloanbalnew51["English"]["LoanDescription"] = "";
	$fieldLabelsloanbalnew51["English"]["PaymentPeriod"] = "Payment Period";
	$fieldToolTipsloanbalnew51["English"]["PaymentPeriod"] = "";
	$placeHoldersloanbalnew51["English"]["PaymentPeriod"] = "";
	$fieldLabelsloanbalnew51["English"]["OPrincipal"] = "Principal";
	$fieldToolTipsloanbalnew51["English"]["OPrincipal"] = "";
	$placeHoldersloanbalnew51["English"]["OPrincipal"] = "";
	$fieldLabelsloanbalnew51["English"]["PerDay"] = "Per Day Amount";
	$fieldToolTipsloanbalnew51["English"]["PerDay"] = "";
	$placeHoldersloanbalnew51["English"]["PerDay"] = "";
	$fieldLabelsloanbalnew51["English"]["PerPayrollAmount"] = "Per Payroll Amount";
	$fieldToolTipsloanbalnew51["English"]["PerPayrollAmount"] = "";
	$placeHoldersloanbalnew51["English"]["PerPayrollAmount"] = "";
	$fieldLabelsloanbalnew51["English"]["MonthlyAmortization"] = "Monthly Amount";
	$fieldToolTipsloanbalnew51["English"]["MonthlyAmortization"] = "";
	$placeHoldersloanbalnew51["English"]["MonthlyAmortization"] = "";
	$fieldLabelsloanbalnew51["English"]["Payment"] = "Payment";
	$fieldToolTipsloanbalnew51["English"]["Payment"] = "";
	$placeHoldersloanbalnew51["English"]["Payment"] = "";
	$fieldLabelsloanbalnew51["English"]["Balance"] = "Balance";
	$fieldToolTipsloanbalnew51["English"]["Balance"] = "";
	$placeHoldersloanbalnew51["English"]["Balance"] = "";
	$fieldLabelsloanbalnew51["English"]["LessAbsences"] = "Less Absences";
	$fieldToolTipsloanbalnew51["English"]["LessAbsences"] = "";
	$placeHoldersloanbalnew51["English"]["LessAbsences"] = "";
	$fieldLabelsloanbalnew51["English"]["LoanType"] = "Loan Type";
	$fieldToolTipsloanbalnew51["English"]["LoanType"] = "";
	$placeHoldersloanbalnew51["English"]["LoanType"] = "";
	$fieldLabelsloanbalnew51["English"]["Fireme"] = "On Cue";
	$fieldToolTipsloanbalnew51["English"]["Fireme"] = "";
	$placeHoldersloanbalnew51["English"]["Fireme"] = "";
	$fieldLabelsloanbalnew51["English"]["ForPayment"] = "For Payment";
	$fieldToolTipsloanbalnew51["English"]["ForPayment"] = "";
	$placeHoldersloanbalnew51["English"]["ForPayment"] = "";
	if (count($fieldToolTipsloanbalnew51["English"]))
		$tdataloanbalnew51[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsloanbalnew51[""] = array();
	$fieldToolTipsloanbalnew51[""] = array();
	$placeHoldersloanbalnew51[""] = array();
	$pageTitlesloanbalnew51[""] = array();
	$fieldLabelsloanbalnew51[""]["LoanID"] = "Loan ID";
	$fieldToolTipsloanbalnew51[""]["LoanID"] = "";
	$placeHoldersloanbalnew51[""]["LoanID"] = "";
	$fieldLabelsloanbalnew51[""]["EmployeeID"] = "Employee ID";
	$fieldToolTipsloanbalnew51[""]["EmployeeID"] = "";
	$placeHoldersloanbalnew51[""]["EmployeeID"] = "";
	$fieldLabelsloanbalnew51[""]["StartDate"] = "Start Date";
	$fieldToolTipsloanbalnew51[""]["StartDate"] = "";
	$placeHoldersloanbalnew51[""]["StartDate"] = "";
	$fieldLabelsloanbalnew51[""]["Principal"] = "Principal";
	$fieldToolTipsloanbalnew51[""]["Principal"] = "";
	$placeHoldersloanbalnew51[""]["Principal"] = "";
	$fieldLabelsloanbalnew51[""]["DType"] = "DType";
	$fieldToolTipsloanbalnew51[""]["DType"] = "";
	$placeHoldersloanbalnew51[""]["DType"] = "";
	$fieldLabelsloanbalnew51[""]["LoanDescription"] = "Loan Description";
	$fieldToolTipsloanbalnew51[""]["LoanDescription"] = "";
	$placeHoldersloanbalnew51[""]["LoanDescription"] = "";
	$fieldLabelsloanbalnew51[""]["PaymentPeriod"] = "Payment Period";
	$fieldToolTipsloanbalnew51[""]["PaymentPeriod"] = "";
	$placeHoldersloanbalnew51[""]["PaymentPeriod"] = "";
	$fieldLabelsloanbalnew51[""]["OPrincipal"] = "OPrincipal";
	$fieldToolTipsloanbalnew51[""]["OPrincipal"] = "";
	$placeHoldersloanbalnew51[""]["OPrincipal"] = "";
	$fieldLabelsloanbalnew51[""]["PerDay"] = "Per Day";
	$fieldToolTipsloanbalnew51[""]["PerDay"] = "";
	$placeHoldersloanbalnew51[""]["PerDay"] = "";
	$fieldLabelsloanbalnew51[""]["PerPayrollAmount"] = "Per Payroll Amount";
	$fieldToolTipsloanbalnew51[""]["PerPayrollAmount"] = "";
	$placeHoldersloanbalnew51[""]["PerPayrollAmount"] = "";
	$fieldLabelsloanbalnew51[""]["MonthlyAmortization"] = "Monthly Amortization";
	$fieldToolTipsloanbalnew51[""]["MonthlyAmortization"] = "";
	$placeHoldersloanbalnew51[""]["MonthlyAmortization"] = "";
	$fieldLabelsloanbalnew51[""]["Payment"] = "Payment";
	$fieldToolTipsloanbalnew51[""]["Payment"] = "";
	$placeHoldersloanbalnew51[""]["Payment"] = "";
	$fieldLabelsloanbalnew51[""]["Balance"] = "Balance";
	$fieldToolTipsloanbalnew51[""]["Balance"] = "";
	$placeHoldersloanbalnew51[""]["Balance"] = "";
	$fieldLabelsloanbalnew51[""]["LessAbsences"] = "Less Absences";
	$fieldToolTipsloanbalnew51[""]["LessAbsences"] = "";
	$placeHoldersloanbalnew51[""]["LessAbsences"] = "";
	$fieldLabelsloanbalnew51[""]["LoanType"] = "Loan Type";
	$fieldToolTipsloanbalnew51[""]["LoanType"] = "";
	$placeHoldersloanbalnew51[""]["LoanType"] = "";
	$fieldLabelsloanbalnew51[""]["Fireme"] = "Fireme";
	$fieldToolTipsloanbalnew51[""]["Fireme"] = "";
	$placeHoldersloanbalnew51[""]["Fireme"] = "";
	$fieldLabelsloanbalnew51[""]["ForPayment"] = "For Payment";
	$fieldToolTipsloanbalnew51[""]["ForPayment"] = "";
	$placeHoldersloanbalnew51[""]["ForPayment"] = "";
	if (count($fieldToolTipsloanbalnew51[""]))
		$tdataloanbalnew51[".isUseToolTips"] = true;
}


	$tdataloanbalnew51[".NCSearch"] = true;



$tdataloanbalnew51[".shortTableName"] = "loanbalnew51";
$tdataloanbalnew51[".nSecOptions"] = 1;
$tdataloanbalnew51[".recsPerRowPrint"] = 1;
$tdataloanbalnew51[".mainTableOwnerID"] = "EmployeeID";
$tdataloanbalnew51[".moveNext"] = 1;
$tdataloanbalnew51[".entityType"] = 1;

$tdataloanbalnew51[".strOriginalTableName"] = "loanbalnew5";

	



$tdataloanbalnew51[".showAddInPopup"] = false;

$tdataloanbalnew51[".showEditInPopup"] = false;

$tdataloanbalnew51[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataloanbalnew51[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataloanbalnew51[".fieldsForRegister"] = array();

$tdataloanbalnew51[".listAjax"] = false;

	$tdataloanbalnew51[".audit"] = false;

	$tdataloanbalnew51[".locking"] = false;



$tdataloanbalnew51[".list"] = true;



$tdataloanbalnew51[".reorderRecordsByHeader"] = true;


$tdataloanbalnew51[".exportFormatting"] = 2;
$tdataloanbalnew51[".exportDelimiter"] = ",";
		


$tdataloanbalnew51[".exportTo"] = true;

$tdataloanbalnew51[".printFriendly"] = true;


$tdataloanbalnew51[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataloanbalnew51[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataloanbalnew51[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataloanbalnew51[".searchSaving"] = false;
//

$tdataloanbalnew51[".showSearchPanel"] = true;
		$tdataloanbalnew51[".flexibleSearch"] = true;

$tdataloanbalnew51[".isUseAjaxSuggest"] = true;

$tdataloanbalnew51[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																											

$tdataloanbalnew51[".ajaxCodeSnippetAdded"] = false;

$tdataloanbalnew51[".buttonsAdded"] = false;

$tdataloanbalnew51[".addPageEvents"] = false;

// use timepicker for search panel
$tdataloanbalnew51[".isUseTimeForSearch"] = false;



$tdataloanbalnew51[".badgeColor"] = "CD5C5C";


$tdataloanbalnew51[".allSearchFields"] = array();
$tdataloanbalnew51[".filterFields"] = array();
$tdataloanbalnew51[".requiredSearchFields"] = array();

$tdataloanbalnew51[".allSearchFields"][] = "LoanID";
	$tdataloanbalnew51[".allSearchFields"][] = "EmployeeID";
	$tdataloanbalnew51[".allSearchFields"][] = "DType";
	$tdataloanbalnew51[".allSearchFields"][] = "LoanDescription";
	$tdataloanbalnew51[".allSearchFields"][] = "LoanType";
	$tdataloanbalnew51[".allSearchFields"][] = "PaymentPeriod";
	$tdataloanbalnew51[".allSearchFields"][] = "StartDate";
	$tdataloanbalnew51[".allSearchFields"][] = "OPrincipal";
	$tdataloanbalnew51[".allSearchFields"][] = "Principal";
	$tdataloanbalnew51[".allSearchFields"][] = "PerDay";
	$tdataloanbalnew51[".allSearchFields"][] = "PerPayrollAmount";
	$tdataloanbalnew51[".allSearchFields"][] = "MonthlyAmortization";
	$tdataloanbalnew51[".allSearchFields"][] = "Balance";
	$tdataloanbalnew51[".allSearchFields"][] = "Payment";
	$tdataloanbalnew51[".allSearchFields"][] = "ForPayment";
	$tdataloanbalnew51[".allSearchFields"][] = "LessAbsences";
	$tdataloanbalnew51[".allSearchFields"][] = "Fireme";
	

$tdataloanbalnew51[".googleLikeFields"] = array();
$tdataloanbalnew51[".googleLikeFields"][] = "LoanID";
$tdataloanbalnew51[".googleLikeFields"][] = "EmployeeID";
$tdataloanbalnew51[".googleLikeFields"][] = "StartDate";
$tdataloanbalnew51[".googleLikeFields"][] = "Principal";
$tdataloanbalnew51[".googleLikeFields"][] = "DType";
$tdataloanbalnew51[".googleLikeFields"][] = "LoanDescription";
$tdataloanbalnew51[".googleLikeFields"][] = "PaymentPeriod";
$tdataloanbalnew51[".googleLikeFields"][] = "OPrincipal";
$tdataloanbalnew51[".googleLikeFields"][] = "PerDay";
$tdataloanbalnew51[".googleLikeFields"][] = "PerPayrollAmount";
$tdataloanbalnew51[".googleLikeFields"][] = "MonthlyAmortization";
$tdataloanbalnew51[".googleLikeFields"][] = "Payment";
$tdataloanbalnew51[".googleLikeFields"][] = "Balance";
$tdataloanbalnew51[".googleLikeFields"][] = "LessAbsences";
$tdataloanbalnew51[".googleLikeFields"][] = "LoanType";
$tdataloanbalnew51[".googleLikeFields"][] = "Fireme";
$tdataloanbalnew51[".googleLikeFields"][] = "ForPayment";


$tdataloanbalnew51[".advSearchFields"] = array();
$tdataloanbalnew51[".advSearchFields"][] = "LoanID";
$tdataloanbalnew51[".advSearchFields"][] = "EmployeeID";
$tdataloanbalnew51[".advSearchFields"][] = "DType";
$tdataloanbalnew51[".advSearchFields"][] = "LoanDescription";
$tdataloanbalnew51[".advSearchFields"][] = "LoanType";
$tdataloanbalnew51[".advSearchFields"][] = "PaymentPeriod";
$tdataloanbalnew51[".advSearchFields"][] = "StartDate";
$tdataloanbalnew51[".advSearchFields"][] = "OPrincipal";
$tdataloanbalnew51[".advSearchFields"][] = "Principal";
$tdataloanbalnew51[".advSearchFields"][] = "PerDay";
$tdataloanbalnew51[".advSearchFields"][] = "PerPayrollAmount";
$tdataloanbalnew51[".advSearchFields"][] = "MonthlyAmortization";
$tdataloanbalnew51[".advSearchFields"][] = "Balance";
$tdataloanbalnew51[".advSearchFields"][] = "Payment";
$tdataloanbalnew51[".advSearchFields"][] = "ForPayment";
$tdataloanbalnew51[".advSearchFields"][] = "LessAbsences";
$tdataloanbalnew51[".advSearchFields"][] = "Fireme";

$tdataloanbalnew51[".tableType"] = "list";

$tdataloanbalnew51[".printerPageOrientation"] = 0;
$tdataloanbalnew51[".nPrinterPageScale"] = 100;

$tdataloanbalnew51[".nPrinterSplitRecords"] = 40;

$tdataloanbalnew51[".nPrinterPDFSplitRecords"] = 40;



$tdataloanbalnew51[".geocodingEnabled"] = false;





$tdataloanbalnew51[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdataloanbalnew51[".totalsFields"] = array();
$tdataloanbalnew51[".totalsFields"][] = array(
	"fName" => "Principal",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataloanbalnew51[".totalsFields"][] = array(
	"fName" => "Balance",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataloanbalnew51[".totalsFields"][] = array(
	"fName" => "Payment",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataloanbalnew51[".totalsFields"][] = array(
	"fName" => "ForPayment",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdataloanbalnew51[".pageSize"] = 20;

$tdataloanbalnew51[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY LoanID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataloanbalnew51[".strOrderBy"] = $tstrOrderBy;

$tdataloanbalnew51[".orderindexes"] = array();
	$tdataloanbalnew51[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "LoanID");


$tdataloanbalnew51[".sqlHead"] = "SELECT LoanID,  EmployeeID,  StartDate,  Principal,  DType,  LoanDescription,  PaymentPeriod,  OPrincipal,  PerDay,  PerPayrollAmount,  MonthlyAmortization,  Payment,  Balance,  LessAbsences,  LoanType,  Fireme,  ForPayment";
$tdataloanbalnew51[".sqlFrom"] = "FROM loanbalnew5";
$tdataloanbalnew51[".sqlWhereExpr"] = "";
$tdataloanbalnew51[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataloanbalnew51[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataloanbalnew51[".arrGroupsPerPage"] = $arrGPP;

$tdataloanbalnew51[".highlightSearchResults"] = true;

$tableKeysloanbalnew51 = array();
$tableKeysloanbalnew51[] = "LoanID";
$tdataloanbalnew51[".Keys"] = $tableKeysloanbalnew51;

$tdataloanbalnew51[".listFields"] = array();
$tdataloanbalnew51[".listFields"][] = "LoanID";
$tdataloanbalnew51[".listFields"][] = "EmployeeID";
$tdataloanbalnew51[".listFields"][] = "DType";
$tdataloanbalnew51[".listFields"][] = "LoanDescription";
$tdataloanbalnew51[".listFields"][] = "LoanType";
$tdataloanbalnew51[".listFields"][] = "PaymentPeriod";
$tdataloanbalnew51[".listFields"][] = "StartDate";
$tdataloanbalnew51[".listFields"][] = "OPrincipal";
$tdataloanbalnew51[".listFields"][] = "Principal";
$tdataloanbalnew51[".listFields"][] = "PerDay";
$tdataloanbalnew51[".listFields"][] = "PerPayrollAmount";
$tdataloanbalnew51[".listFields"][] = "MonthlyAmortization";
$tdataloanbalnew51[".listFields"][] = "Balance";
$tdataloanbalnew51[".listFields"][] = "Payment";
$tdataloanbalnew51[".listFields"][] = "ForPayment";
$tdataloanbalnew51[".listFields"][] = "LessAbsences";
$tdataloanbalnew51[".listFields"][] = "Fireme";

$tdataloanbalnew51[".hideMobileList"] = array();


$tdataloanbalnew51[".viewFields"] = array();

$tdataloanbalnew51[".addFields"] = array();

$tdataloanbalnew51[".masterListFields"] = array();
$tdataloanbalnew51[".masterListFields"][] = "LoanID";
$tdataloanbalnew51[".masterListFields"][] = "EmployeeID";
$tdataloanbalnew51[".masterListFields"][] = "DType";
$tdataloanbalnew51[".masterListFields"][] = "LoanDescription";
$tdataloanbalnew51[".masterListFields"][] = "LoanType";
$tdataloanbalnew51[".masterListFields"][] = "PaymentPeriod";
$tdataloanbalnew51[".masterListFields"][] = "StartDate";
$tdataloanbalnew51[".masterListFields"][] = "OPrincipal";
$tdataloanbalnew51[".masterListFields"][] = "Principal";
$tdataloanbalnew51[".masterListFields"][] = "PerDay";
$tdataloanbalnew51[".masterListFields"][] = "PerPayrollAmount";
$tdataloanbalnew51[".masterListFields"][] = "MonthlyAmortization";
$tdataloanbalnew51[".masterListFields"][] = "Balance";
$tdataloanbalnew51[".masterListFields"][] = "Payment";
$tdataloanbalnew51[".masterListFields"][] = "ForPayment";
$tdataloanbalnew51[".masterListFields"][] = "LessAbsences";
$tdataloanbalnew51[".masterListFields"][] = "Fireme";

$tdataloanbalnew51[".inlineAddFields"] = array();

$tdataloanbalnew51[".editFields"] = array();

$tdataloanbalnew51[".inlineEditFields"] = array();

$tdataloanbalnew51[".updateSelectedFields"] = array();


$tdataloanbalnew51[".exportFields"] = array();
$tdataloanbalnew51[".exportFields"][] = "LoanID";
$tdataloanbalnew51[".exportFields"][] = "EmployeeID";
$tdataloanbalnew51[".exportFields"][] = "DType";
$tdataloanbalnew51[".exportFields"][] = "LoanDescription";
$tdataloanbalnew51[".exportFields"][] = "LoanType";
$tdataloanbalnew51[".exportFields"][] = "PaymentPeriod";
$tdataloanbalnew51[".exportFields"][] = "StartDate";
$tdataloanbalnew51[".exportFields"][] = "OPrincipal";
$tdataloanbalnew51[".exportFields"][] = "Principal";
$tdataloanbalnew51[".exportFields"][] = "PerDay";
$tdataloanbalnew51[".exportFields"][] = "PerPayrollAmount";
$tdataloanbalnew51[".exportFields"][] = "MonthlyAmortization";
$tdataloanbalnew51[".exportFields"][] = "Balance";
$tdataloanbalnew51[".exportFields"][] = "Payment";
$tdataloanbalnew51[".exportFields"][] = "ForPayment";
$tdataloanbalnew51[".exportFields"][] = "LessAbsences";
$tdataloanbalnew51[".exportFields"][] = "Fireme";

$tdataloanbalnew51[".importFields"] = array();
$tdataloanbalnew51[".importFields"][] = "LoanID";
$tdataloanbalnew51[".importFields"][] = "EmployeeID";
$tdataloanbalnew51[".importFields"][] = "StartDate";
$tdataloanbalnew51[".importFields"][] = "Principal";
$tdataloanbalnew51[".importFields"][] = "DType";
$tdataloanbalnew51[".importFields"][] = "LoanDescription";
$tdataloanbalnew51[".importFields"][] = "PaymentPeriod";
$tdataloanbalnew51[".importFields"][] = "OPrincipal";
$tdataloanbalnew51[".importFields"][] = "PerDay";
$tdataloanbalnew51[".importFields"][] = "PerPayrollAmount";
$tdataloanbalnew51[".importFields"][] = "MonthlyAmortization";
$tdataloanbalnew51[".importFields"][] = "Payment";
$tdataloanbalnew51[".importFields"][] = "Balance";
$tdataloanbalnew51[".importFields"][] = "LessAbsences";
$tdataloanbalnew51[".importFields"][] = "LoanType";
$tdataloanbalnew51[".importFields"][] = "Fireme";
$tdataloanbalnew51[".importFields"][] = "ForPayment";

$tdataloanbalnew51[".printFields"] = array();
$tdataloanbalnew51[".printFields"][] = "LoanID";
$tdataloanbalnew51[".printFields"][] = "EmployeeID";
$tdataloanbalnew51[".printFields"][] = "DType";
$tdataloanbalnew51[".printFields"][] = "LoanDescription";
$tdataloanbalnew51[".printFields"][] = "LoanType";
$tdataloanbalnew51[".printFields"][] = "PaymentPeriod";
$tdataloanbalnew51[".printFields"][] = "StartDate";
$tdataloanbalnew51[".printFields"][] = "OPrincipal";
$tdataloanbalnew51[".printFields"][] = "Principal";
$tdataloanbalnew51[".printFields"][] = "PerDay";
$tdataloanbalnew51[".printFields"][] = "PerPayrollAmount";
$tdataloanbalnew51[".printFields"][] = "MonthlyAmortization";
$tdataloanbalnew51[".printFields"][] = "Balance";
$tdataloanbalnew51[".printFields"][] = "Payment";
$tdataloanbalnew51[".printFields"][] = "ForPayment";
$tdataloanbalnew51[".printFields"][] = "LessAbsences";
$tdataloanbalnew51[".printFields"][] = "Fireme";


//	LoanID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LoanID";
	$fdata["GoodName"] = "LoanID";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew51","LoanID");
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




	$tdataloanbalnew51["LoanID"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew51","EmployeeID");
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




	$tdataloanbalnew51["EmployeeID"] = $fdata;
//	StartDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "StartDate";
	$fdata["GoodName"] = "StartDate";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew51","StartDate");
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




	$tdataloanbalnew51["StartDate"] = $fdata;
//	Principal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Principal";
	$fdata["GoodName"] = "Principal";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew51","Principal");
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




	$tdataloanbalnew51["Principal"] = $fdata;
//	DType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DType";
	$fdata["GoodName"] = "DType";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew51","DType");
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




	$tdataloanbalnew51["DType"] = $fdata;
//	LoanDescription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "LoanDescription";
	$fdata["GoodName"] = "LoanDescription";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew51","LoanDescription");
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




	$tdataloanbalnew51["LoanDescription"] = $fdata;
//	PaymentPeriod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PaymentPeriod";
	$fdata["GoodName"] = "PaymentPeriod";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew51","PaymentPeriod");
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




	$tdataloanbalnew51["PaymentPeriod"] = $fdata;
//	OPrincipal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "OPrincipal";
	$fdata["GoodName"] = "OPrincipal";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew51","OPrincipal");
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




	$tdataloanbalnew51["OPrincipal"] = $fdata;
//	PerDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PerDay";
	$fdata["GoodName"] = "PerDay";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew51","PerDay");
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




	$tdataloanbalnew51["PerDay"] = $fdata;
//	PerPayrollAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PerPayrollAmount";
	$fdata["GoodName"] = "PerPayrollAmount";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew51","PerPayrollAmount");
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




	$tdataloanbalnew51["PerPayrollAmount"] = $fdata;
//	MonthlyAmortization
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "MonthlyAmortization";
	$fdata["GoodName"] = "MonthlyAmortization";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew51","MonthlyAmortization");
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




	$tdataloanbalnew51["MonthlyAmortization"] = $fdata;
//	Payment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Payment";
	$fdata["GoodName"] = "Payment";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew51","Payment");
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




	$tdataloanbalnew51["Payment"] = $fdata;
//	Balance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Balance";
	$fdata["GoodName"] = "Balance";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew51","Balance");
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




	$tdataloanbalnew51["Balance"] = $fdata;
//	LessAbsences
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "LessAbsences";
	$fdata["GoodName"] = "LessAbsences";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew51","LessAbsences");
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




	$tdataloanbalnew51["LessAbsences"] = $fdata;
//	LoanType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "LoanType";
	$fdata["GoodName"] = "LoanType";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew51","LoanType");
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




	$tdataloanbalnew51["LoanType"] = $fdata;
//	Fireme
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Fireme";
	$fdata["GoodName"] = "Fireme";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew51","Fireme");
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




	$tdataloanbalnew51["Fireme"] = $fdata;
//	ForPayment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "ForPayment";
	$fdata["GoodName"] = "ForPayment";
	$fdata["ownerTable"] = "loanbalnew5";
	$fdata["Label"] = GetFieldLabel("loanbalnew51","ForPayment");
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




	$tdataloanbalnew51["ForPayment"] = $fdata;


$tables_data["loanbalnew51"]=&$tdataloanbalnew51;
$field_labels["loanbalnew51"] = &$fieldLabelsloanbalnew51;
$fieldToolTips["loanbalnew51"] = &$fieldToolTipsloanbalnew51;
$placeHolders["loanbalnew51"] = &$placeHoldersloanbalnew51;
$page_titles["loanbalnew51"] = &$pageTitlesloanbalnew51;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["loanbalnew51"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["loanbalnew51"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_loanbalnew51()
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
	"m_srcTableName" => "loanbalnew51"
));

$proto6["m_sql"] = "LoanID";
$proto6["m_srcTableName"] = "loanbalnew51";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew51"
));

$proto8["m_sql"] = "EmployeeID";
$proto8["m_srcTableName"] = "loanbalnew51";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "StartDate",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew51"
));

$proto10["m_sql"] = "StartDate";
$proto10["m_srcTableName"] = "loanbalnew51";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Principal",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew51"
));

$proto12["m_sql"] = "Principal";
$proto12["m_srcTableName"] = "loanbalnew51";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DType",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew51"
));

$proto14["m_sql"] = "DType";
$proto14["m_srcTableName"] = "loanbalnew51";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanDescription",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew51"
));

$proto16["m_sql"] = "LoanDescription";
$proto16["m_srcTableName"] = "loanbalnew51";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PaymentPeriod",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew51"
));

$proto18["m_sql"] = "PaymentPeriod";
$proto18["m_srcTableName"] = "loanbalnew51";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "OPrincipal",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew51"
));

$proto20["m_sql"] = "OPrincipal";
$proto20["m_srcTableName"] = "loanbalnew51";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "PerDay",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew51"
));

$proto22["m_sql"] = "PerDay";
$proto22["m_srcTableName"] = "loanbalnew51";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "PerPayrollAmount",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew51"
));

$proto24["m_sql"] = "PerPayrollAmount";
$proto24["m_srcTableName"] = "loanbalnew51";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "MonthlyAmortization",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew51"
));

$proto26["m_sql"] = "MonthlyAmortization";
$proto26["m_srcTableName"] = "loanbalnew51";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Payment",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew51"
));

$proto28["m_sql"] = "Payment";
$proto28["m_srcTableName"] = "loanbalnew51";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Balance",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew51"
));

$proto30["m_sql"] = "Balance";
$proto30["m_srcTableName"] = "loanbalnew51";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "LessAbsences",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew51"
));

$proto32["m_sql"] = "LessAbsences";
$proto32["m_srcTableName"] = "loanbalnew51";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanType",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew51"
));

$proto34["m_sql"] = "LoanType";
$proto34["m_srcTableName"] = "loanbalnew51";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Fireme",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew51"
));

$proto36["m_sql"] = "Fireme";
$proto36["m_srcTableName"] = "loanbalnew51";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "ForPayment",
	"m_strTable" => "loanbalnew5",
	"m_srcTableName" => "loanbalnew51"
));

$proto38["m_sql"] = "ForPayment";
$proto38["m_srcTableName"] = "loanbalnew51";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "loanbalnew5";
$proto41["m_srcTableName"] = "loanbalnew51";
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
$proto40["m_srcTableName"] = "loanbalnew51";
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
	"m_srcTableName" => "loanbalnew51"
));

$proto44["m_column"]=$obj;
$proto44["m_bAsc"] = 0;
$proto44["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto44);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="loanbalnew51";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_loanbalnew51 = createSqlQuery_loanbalnew51();


	
		;

																	

$tdataloanbalnew51[".sqlquery"] = $queryData_loanbalnew51;

$tableEvents["loanbalnew51"] = new eventsBase;
$tdataloanbalnew51[".hasEvents"] = false;

?>