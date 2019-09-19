<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapayrolldeductions = array();
	$tdatapayrolldeductions[".truncateText"] = true;
	$tdatapayrolldeductions[".NumberOfChars"] = 80;
	$tdatapayrolldeductions[".ShortName"] = "payrolldeductions";
	$tdatapayrolldeductions[".OwnerID"] = "";
	$tdatapayrolldeductions[".OriginalTable"] = "payrolldeductions";

//	field labels
$fieldLabelspayrolldeductions = array();
$fieldToolTipspayrolldeductions = array();
$pageTitlespayrolldeductions = array();
$placeHolderspayrolldeductions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspayrolldeductions["English"] = array();
	$fieldToolTipspayrolldeductions["English"] = array();
	$placeHolderspayrolldeductions["English"] = array();
	$pageTitlespayrolldeductions["English"] = array();
	$fieldLabelspayrolldeductions["English"]["PdeID"] = "Pde ID";
	$fieldToolTipspayrolldeductions["English"]["PdeID"] = "";
	$placeHolderspayrolldeductions["English"]["PdeID"] = "";
	$fieldLabelspayrolldeductions["English"]["Deduction"] = "Deduction";
	$fieldToolTipspayrolldeductions["English"]["Deduction"] = "";
	$placeHolderspayrolldeductions["English"]["Deduction"] = "";
	$fieldLabelspayrolldeductions["English"]["Amount"] = "Amount";
	$fieldToolTipspayrolldeductions["English"]["Amount"] = "";
	$placeHolderspayrolldeductions["English"]["Amount"] = "";
	$fieldLabelspayrolldeductions["English"]["FromDate"] = "From Date";
	$fieldToolTipspayrolldeductions["English"]["FromDate"] = "";
	$placeHolderspayrolldeductions["English"]["FromDate"] = "";
	$fieldLabelspayrolldeductions["English"]["ToDate"] = "To Date";
	$fieldToolTipspayrolldeductions["English"]["ToDate"] = "";
	$placeHolderspayrolldeductions["English"]["ToDate"] = "";
	$fieldLabelspayrolldeductions["English"]["EmployeeID"] = "Biometric ID";
	$fieldToolTipspayrolldeductions["English"]["EmployeeID"] = "";
	$placeHolderspayrolldeductions["English"]["EmployeeID"] = "";
	$fieldLabelspayrolldeductions["English"]["LoanID"] = "Loan ID";
	$fieldToolTipspayrolldeductions["English"]["LoanID"] = "";
	$placeHolderspayrolldeductions["English"]["LoanID"] = "";
	$fieldLabelspayrolldeductions["English"]["PSID"] = "PSID";
	$fieldToolTipspayrolldeductions["English"]["PSID"] = "";
	$placeHolderspayrolldeductions["English"]["PSID"] = "";
	$fieldLabelspayrolldeductions["English"]["Balance"] = "Balance";
	$fieldToolTipspayrolldeductions["English"]["Balance"] = "";
	$placeHolderspayrolldeductions["English"]["Balance"] = "";
	$fieldLabelspayrolldeductions["English"]["Employer"] = "Employer";
	$fieldToolTipspayrolldeductions["English"]["Employer"] = "";
	$placeHolderspayrolldeductions["English"]["Employer"] = "";
	$fieldLabelspayrolldeductions["English"]["Division"] = "Division";
	$fieldToolTipspayrolldeductions["English"]["Division"] = "";
	$placeHolderspayrolldeductions["English"]["Division"] = "";
	$fieldLabelspayrolldeductions["English"]["WageType"] = "Wage Type";
	$fieldToolTipspayrolldeductions["English"]["WageType"] = "";
	$placeHolderspayrolldeductions["English"]["WageType"] = "";
	$fieldLabelspayrolldeductions["English"]["OtherPayment"] = "Other Payment Method";
	$fieldToolTipspayrolldeductions["English"]["OtherPayment"] = "";
	$placeHolderspayrolldeductions["English"]["OtherPayment"] = "";
	if (count($fieldToolTipspayrolldeductions["English"]))
		$tdatapayrolldeductions[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspayrolldeductions[""] = array();
	$fieldToolTipspayrolldeductions[""] = array();
	$placeHolderspayrolldeductions[""] = array();
	$pageTitlespayrolldeductions[""] = array();
	$fieldLabelspayrolldeductions[""]["OtherPayment"] = "Other Payment";
	$fieldToolTipspayrolldeductions[""]["OtherPayment"] = "";
	$placeHolderspayrolldeductions[""]["OtherPayment"] = "";
	if (count($fieldToolTipspayrolldeductions[""]))
		$tdatapayrolldeductions[".isUseToolTips"] = true;
}


	$tdatapayrolldeductions[".NCSearch"] = true;



$tdatapayrolldeductions[".shortTableName"] = "payrolldeductions";
$tdatapayrolldeductions[".nSecOptions"] = 0;
$tdatapayrolldeductions[".recsPerRowPrint"] = 1;
$tdatapayrolldeductions[".mainTableOwnerID"] = "";
$tdatapayrolldeductions[".moveNext"] = 1;
$tdatapayrolldeductions[".entityType"] = 0;

$tdatapayrolldeductions[".strOriginalTableName"] = "payrolldeductions";

	



$tdatapayrolldeductions[".showAddInPopup"] = false;

$tdatapayrolldeductions[".showEditInPopup"] = false;

$tdatapayrolldeductions[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapayrolldeductions[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapayrolldeductions[".fieldsForRegister"] = array();

$tdatapayrolldeductions[".listAjax"] = false;

	$tdatapayrolldeductions[".audit"] = false;

	$tdatapayrolldeductions[".locking"] = false;

$tdatapayrolldeductions[".edit"] = true;
$tdatapayrolldeductions[".afterEditAction"] = 1;
$tdatapayrolldeductions[".closePopupAfterEdit"] = 1;
$tdatapayrolldeductions[".afterEditActionDetTable"] = "";

$tdatapayrolldeductions[".add"] = true;
$tdatapayrolldeductions[".afterAddAction"] = 1;
$tdatapayrolldeductions[".closePopupAfterAdd"] = 1;
$tdatapayrolldeductions[".afterAddActionDetTable"] = "";

$tdatapayrolldeductions[".list"] = true;

$tdatapayrolldeductions[".inlineEdit"] = true;


$tdatapayrolldeductions[".reorderRecordsByHeader"] = true;


$tdatapayrolldeductions[".exportFormatting"] = 2;
$tdatapayrolldeductions[".exportDelimiter"] = ",";
		
$tdatapayrolldeductions[".inlineAdd"] = true;
$tdatapayrolldeductions[".view"] = true;

$tdatapayrolldeductions[".import"] = true;

$tdatapayrolldeductions[".exportTo"] = true;

$tdatapayrolldeductions[".printFriendly"] = true;

$tdatapayrolldeductions[".delete"] = true;

$tdatapayrolldeductions[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapayrolldeductions[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapayrolldeductions[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapayrolldeductions[".searchSaving"] = false;
//

$tdatapayrolldeductions[".showSearchPanel"] = true;
		$tdatapayrolldeductions[".flexibleSearch"] = true;

$tdatapayrolldeductions[".isUseAjaxSuggest"] = true;

$tdatapayrolldeductions[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																										

$tdatapayrolldeductions[".ajaxCodeSnippetAdded"] = false;

$tdatapayrolldeductions[".buttonsAdded"] = false;

$tdatapayrolldeductions[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapayrolldeductions[".isUseTimeForSearch"] = false;



$tdatapayrolldeductions[".badgeColor"] = "1e90ff";


$tdatapayrolldeductions[".allSearchFields"] = array();
$tdatapayrolldeductions[".filterFields"] = array();
$tdatapayrolldeductions[".requiredSearchFields"] = array();

$tdatapayrolldeductions[".allSearchFields"][] = "PdeID";
	$tdatapayrolldeductions[".allSearchFields"][] = "Employer";
	$tdatapayrolldeductions[".allSearchFields"][] = "Division";
	$tdatapayrolldeductions[".allSearchFields"][] = "WageType";
	$tdatapayrolldeductions[".allSearchFields"][] = "EmployeeID";
	$tdatapayrolldeductions[".allSearchFields"][] = "FromDate";
	$tdatapayrolldeductions[".allSearchFields"][] = "ToDate";
	$tdatapayrolldeductions[".allSearchFields"][] = "Deduction";
	$tdatapayrolldeductions[".allSearchFields"][] = "Balance";
	$tdatapayrolldeductions[".allSearchFields"][] = "Amount";
	$tdatapayrolldeductions[".allSearchFields"][] = "OtherPayment";
	$tdatapayrolldeductions[".allSearchFields"][] = "LoanID";
	$tdatapayrolldeductions[".allSearchFields"][] = "PSID";
	

$tdatapayrolldeductions[".googleLikeFields"] = array();
$tdatapayrolldeductions[".googleLikeFields"][] = "PdeID";
$tdatapayrolldeductions[".googleLikeFields"][] = "Deduction";
$tdatapayrolldeductions[".googleLikeFields"][] = "Amount";
$tdatapayrolldeductions[".googleLikeFields"][] = "FromDate";
$tdatapayrolldeductions[".googleLikeFields"][] = "ToDate";
$tdatapayrolldeductions[".googleLikeFields"][] = "EmployeeID";
$tdatapayrolldeductions[".googleLikeFields"][] = "LoanID";
$tdatapayrolldeductions[".googleLikeFields"][] = "PSID";
$tdatapayrolldeductions[".googleLikeFields"][] = "Balance";
$tdatapayrolldeductions[".googleLikeFields"][] = "Employer";
$tdatapayrolldeductions[".googleLikeFields"][] = "Division";
$tdatapayrolldeductions[".googleLikeFields"][] = "WageType";
$tdatapayrolldeductions[".googleLikeFields"][] = "OtherPayment";


$tdatapayrolldeductions[".advSearchFields"] = array();
$tdatapayrolldeductions[".advSearchFields"][] = "PdeID";
$tdatapayrolldeductions[".advSearchFields"][] = "Employer";
$tdatapayrolldeductions[".advSearchFields"][] = "Division";
$tdatapayrolldeductions[".advSearchFields"][] = "WageType";
$tdatapayrolldeductions[".advSearchFields"][] = "EmployeeID";
$tdatapayrolldeductions[".advSearchFields"][] = "FromDate";
$tdatapayrolldeductions[".advSearchFields"][] = "ToDate";
$tdatapayrolldeductions[".advSearchFields"][] = "Deduction";
$tdatapayrolldeductions[".advSearchFields"][] = "Balance";
$tdatapayrolldeductions[".advSearchFields"][] = "Amount";
$tdatapayrolldeductions[".advSearchFields"][] = "OtherPayment";
$tdatapayrolldeductions[".advSearchFields"][] = "LoanID";
$tdatapayrolldeductions[".advSearchFields"][] = "PSID";

$tdatapayrolldeductions[".tableType"] = "list";

$tdatapayrolldeductions[".printerPageOrientation"] = 0;
$tdatapayrolldeductions[".nPrinterPageScale"] = 100;

$tdatapayrolldeductions[".nPrinterSplitRecords"] = 40;

$tdatapayrolldeductions[".nPrinterPDFSplitRecords"] = 40;



$tdatapayrolldeductions[".geocodingEnabled"] = false;





$tdatapayrolldeductions[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatapayrolldeductions[".totalsFields"] = array();
$tdatapayrolldeductions[".totalsFields"][] = array(
	"fName" => "Balance",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrolldeductions[".totalsFields"][] = array(
	"fName" => "Amount",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatapayrolldeductions[".pageSize"] = 20;

$tdatapayrolldeductions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapayrolldeductions[".strOrderBy"] = $tstrOrderBy;

$tdatapayrolldeductions[".orderindexes"] = array();

$tdatapayrolldeductions[".sqlHead"] = "SELECT PdeID,  	Deduction,  	Amount,  	FromDate,  	ToDate,  	EmployeeID,  	LoanID,  	PSID,  	Balance,  	Employer,  	Division,  	WageType,  	OtherPayment";
$tdatapayrolldeductions[".sqlFrom"] = "FROM payrolldeductions";
$tdatapayrolldeductions[".sqlWhereExpr"] = "";
$tdatapayrolldeductions[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapayrolldeductions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapayrolldeductions[".arrGroupsPerPage"] = $arrGPP;

$tdatapayrolldeductions[".highlightSearchResults"] = true;

$tableKeyspayrolldeductions = array();
$tableKeyspayrolldeductions[] = "PdeID";
$tdatapayrolldeductions[".Keys"] = $tableKeyspayrolldeductions;

$tdatapayrolldeductions[".listFields"] = array();
$tdatapayrolldeductions[".listFields"][] = "PdeID";
$tdatapayrolldeductions[".listFields"][] = "Employer";
$tdatapayrolldeductions[".listFields"][] = "Division";
$tdatapayrolldeductions[".listFields"][] = "WageType";
$tdatapayrolldeductions[".listFields"][] = "EmployeeID";
$tdatapayrolldeductions[".listFields"][] = "FromDate";
$tdatapayrolldeductions[".listFields"][] = "ToDate";
$tdatapayrolldeductions[".listFields"][] = "Deduction";
$tdatapayrolldeductions[".listFields"][] = "Balance";
$tdatapayrolldeductions[".listFields"][] = "Amount";
$tdatapayrolldeductions[".listFields"][] = "OtherPayment";
$tdatapayrolldeductions[".listFields"][] = "LoanID";
$tdatapayrolldeductions[".listFields"][] = "PSID";

$tdatapayrolldeductions[".hideMobileList"] = array();


$tdatapayrolldeductions[".viewFields"] = array();
$tdatapayrolldeductions[".viewFields"][] = "PdeID";
$tdatapayrolldeductions[".viewFields"][] = "Employer";
$tdatapayrolldeductions[".viewFields"][] = "Division";
$tdatapayrolldeductions[".viewFields"][] = "WageType";
$tdatapayrolldeductions[".viewFields"][] = "EmployeeID";
$tdatapayrolldeductions[".viewFields"][] = "FromDate";
$tdatapayrolldeductions[".viewFields"][] = "ToDate";
$tdatapayrolldeductions[".viewFields"][] = "Deduction";
$tdatapayrolldeductions[".viewFields"][] = "Balance";
$tdatapayrolldeductions[".viewFields"][] = "Amount";
$tdatapayrolldeductions[".viewFields"][] = "OtherPayment";
$tdatapayrolldeductions[".viewFields"][] = "LoanID";
$tdatapayrolldeductions[".viewFields"][] = "PSID";

$tdatapayrolldeductions[".addFields"] = array();
$tdatapayrolldeductions[".addFields"][] = "Employer";
$tdatapayrolldeductions[".addFields"][] = "Division";
$tdatapayrolldeductions[".addFields"][] = "WageType";
$tdatapayrolldeductions[".addFields"][] = "EmployeeID";
$tdatapayrolldeductions[".addFields"][] = "FromDate";
$tdatapayrolldeductions[".addFields"][] = "ToDate";
$tdatapayrolldeductions[".addFields"][] = "Deduction";
$tdatapayrolldeductions[".addFields"][] = "Balance";
$tdatapayrolldeductions[".addFields"][] = "Amount";
$tdatapayrolldeductions[".addFields"][] = "OtherPayment";
$tdatapayrolldeductions[".addFields"][] = "LoanID";
$tdatapayrolldeductions[".addFields"][] = "PSID";

$tdatapayrolldeductions[".masterListFields"] = array();
$tdatapayrolldeductions[".masterListFields"][] = "PdeID";
$tdatapayrolldeductions[".masterListFields"][] = "Employer";
$tdatapayrolldeductions[".masterListFields"][] = "Division";
$tdatapayrolldeductions[".masterListFields"][] = "WageType";
$tdatapayrolldeductions[".masterListFields"][] = "EmployeeID";
$tdatapayrolldeductions[".masterListFields"][] = "FromDate";
$tdatapayrolldeductions[".masterListFields"][] = "ToDate";
$tdatapayrolldeductions[".masterListFields"][] = "Deduction";
$tdatapayrolldeductions[".masterListFields"][] = "Balance";
$tdatapayrolldeductions[".masterListFields"][] = "Amount";
$tdatapayrolldeductions[".masterListFields"][] = "OtherPayment";
$tdatapayrolldeductions[".masterListFields"][] = "LoanID";
$tdatapayrolldeductions[".masterListFields"][] = "PSID";

$tdatapayrolldeductions[".inlineAddFields"] = array();
$tdatapayrolldeductions[".inlineAddFields"][] = "Employer";
$tdatapayrolldeductions[".inlineAddFields"][] = "Division";
$tdatapayrolldeductions[".inlineAddFields"][] = "WageType";
$tdatapayrolldeductions[".inlineAddFields"][] = "EmployeeID";
$tdatapayrolldeductions[".inlineAddFields"][] = "FromDate";
$tdatapayrolldeductions[".inlineAddFields"][] = "ToDate";
$tdatapayrolldeductions[".inlineAddFields"][] = "Deduction";
$tdatapayrolldeductions[".inlineAddFields"][] = "Balance";
$tdatapayrolldeductions[".inlineAddFields"][] = "Amount";
$tdatapayrolldeductions[".inlineAddFields"][] = "OtherPayment";
$tdatapayrolldeductions[".inlineAddFields"][] = "LoanID";
$tdatapayrolldeductions[".inlineAddFields"][] = "PSID";

$tdatapayrolldeductions[".editFields"] = array();
$tdatapayrolldeductions[".editFields"][] = "Employer";
$tdatapayrolldeductions[".editFields"][] = "Division";
$tdatapayrolldeductions[".editFields"][] = "WageType";
$tdatapayrolldeductions[".editFields"][] = "EmployeeID";
$tdatapayrolldeductions[".editFields"][] = "FromDate";
$tdatapayrolldeductions[".editFields"][] = "ToDate";
$tdatapayrolldeductions[".editFields"][] = "Deduction";
$tdatapayrolldeductions[".editFields"][] = "Balance";
$tdatapayrolldeductions[".editFields"][] = "Amount";
$tdatapayrolldeductions[".editFields"][] = "OtherPayment";
$tdatapayrolldeductions[".editFields"][] = "LoanID";
$tdatapayrolldeductions[".editFields"][] = "PSID";

$tdatapayrolldeductions[".inlineEditFields"] = array();
$tdatapayrolldeductions[".inlineEditFields"][] = "Employer";
$tdatapayrolldeductions[".inlineEditFields"][] = "Division";
$tdatapayrolldeductions[".inlineEditFields"][] = "WageType";
$tdatapayrolldeductions[".inlineEditFields"][] = "EmployeeID";
$tdatapayrolldeductions[".inlineEditFields"][] = "FromDate";
$tdatapayrolldeductions[".inlineEditFields"][] = "ToDate";
$tdatapayrolldeductions[".inlineEditFields"][] = "Deduction";
$tdatapayrolldeductions[".inlineEditFields"][] = "Balance";
$tdatapayrolldeductions[".inlineEditFields"][] = "Amount";
$tdatapayrolldeductions[".inlineEditFields"][] = "OtherPayment";
$tdatapayrolldeductions[".inlineEditFields"][] = "LoanID";
$tdatapayrolldeductions[".inlineEditFields"][] = "PSID";

$tdatapayrolldeductions[".updateSelectedFields"] = array();
$tdatapayrolldeductions[".updateSelectedFields"][] = "Employer";
$tdatapayrolldeductions[".updateSelectedFields"][] = "Division";
$tdatapayrolldeductions[".updateSelectedFields"][] = "WageType";
$tdatapayrolldeductions[".updateSelectedFields"][] = "EmployeeID";
$tdatapayrolldeductions[".updateSelectedFields"][] = "FromDate";
$tdatapayrolldeductions[".updateSelectedFields"][] = "ToDate";
$tdatapayrolldeductions[".updateSelectedFields"][] = "Deduction";
$tdatapayrolldeductions[".updateSelectedFields"][] = "Balance";
$tdatapayrolldeductions[".updateSelectedFields"][] = "Amount";
$tdatapayrolldeductions[".updateSelectedFields"][] = "OtherPayment";
$tdatapayrolldeductions[".updateSelectedFields"][] = "LoanID";
$tdatapayrolldeductions[".updateSelectedFields"][] = "PSID";


$tdatapayrolldeductions[".exportFields"] = array();
$tdatapayrolldeductions[".exportFields"][] = "PdeID";
$tdatapayrolldeductions[".exportFields"][] = "Employer";
$tdatapayrolldeductions[".exportFields"][] = "Division";
$tdatapayrolldeductions[".exportFields"][] = "WageType";
$tdatapayrolldeductions[".exportFields"][] = "EmployeeID";
$tdatapayrolldeductions[".exportFields"][] = "FromDate";
$tdatapayrolldeductions[".exportFields"][] = "ToDate";
$tdatapayrolldeductions[".exportFields"][] = "Deduction";
$tdatapayrolldeductions[".exportFields"][] = "Balance";
$tdatapayrolldeductions[".exportFields"][] = "Amount";
$tdatapayrolldeductions[".exportFields"][] = "OtherPayment";
$tdatapayrolldeductions[".exportFields"][] = "LoanID";
$tdatapayrolldeductions[".exportFields"][] = "PSID";

$tdatapayrolldeductions[".importFields"] = array();
$tdatapayrolldeductions[".importFields"][] = "PdeID";
$tdatapayrolldeductions[".importFields"][] = "Deduction";
$tdatapayrolldeductions[".importFields"][] = "Amount";
$tdatapayrolldeductions[".importFields"][] = "FromDate";
$tdatapayrolldeductions[".importFields"][] = "ToDate";
$tdatapayrolldeductions[".importFields"][] = "EmployeeID";
$tdatapayrolldeductions[".importFields"][] = "LoanID";
$tdatapayrolldeductions[".importFields"][] = "PSID";
$tdatapayrolldeductions[".importFields"][] = "Balance";
$tdatapayrolldeductions[".importFields"][] = "Employer";
$tdatapayrolldeductions[".importFields"][] = "Division";
$tdatapayrolldeductions[".importFields"][] = "WageType";
$tdatapayrolldeductions[".importFields"][] = "OtherPayment";

$tdatapayrolldeductions[".printFields"] = array();
$tdatapayrolldeductions[".printFields"][] = "PdeID";
$tdatapayrolldeductions[".printFields"][] = "Employer";
$tdatapayrolldeductions[".printFields"][] = "Division";
$tdatapayrolldeductions[".printFields"][] = "WageType";
$tdatapayrolldeductions[".printFields"][] = "EmployeeID";
$tdatapayrolldeductions[".printFields"][] = "FromDate";
$tdatapayrolldeductions[".printFields"][] = "ToDate";
$tdatapayrolldeductions[".printFields"][] = "Deduction";
$tdatapayrolldeductions[".printFields"][] = "Balance";
$tdatapayrolldeductions[".printFields"][] = "Amount";
$tdatapayrolldeductions[".printFields"][] = "OtherPayment";
$tdatapayrolldeductions[".printFields"][] = "LoanID";
$tdatapayrolldeductions[".printFields"][] = "PSID";


//	PdeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PdeID";
	$fdata["GoodName"] = "PdeID";
	$fdata["ownerTable"] = "payrolldeductions";
	$fdata["Label"] = GetFieldLabel("payrolldeductions","PdeID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PdeID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PdeID";

	
	
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




	$tdatapayrolldeductions["PdeID"] = $fdata;
//	Deduction
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Deduction";
	$fdata["GoodName"] = "Deduction";
	$fdata["ownerTable"] = "payrolldeductions";
	$fdata["Label"] = GetFieldLabel("payrolldeductions","Deduction");
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

		$fdata["strField"] = "Deduction";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Deduction";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 262;

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




	$tdatapayrolldeductions["Deduction"] = $fdata;
//	Amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Amount";
	$fdata["GoodName"] = "Amount";
	$fdata["ownerTable"] = "payrolldeductions";
	$fdata["Label"] = GetFieldLabel("payrolldeductions","Amount");
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

		$fdata["strField"] = "Amount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Amount";

	
	
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
		
		$edata["controlWidth"] = 120;

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




	$tdatapayrolldeductions["Amount"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "payrolldeductions";
	$fdata["Label"] = GetFieldLabel("payrolldeductions","FromDate");
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

		$fdata["strField"] = "FromDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FromDate";

	
	
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

	
	
	
		$edata["controlWidth"] = 122;

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




	$tdatapayrolldeductions["FromDate"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "payrolldeductions";
	$fdata["Label"] = GetFieldLabel("payrolldeductions","ToDate");
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

		$fdata["strField"] = "ToDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ToDate";

	
	
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

	
	
	
		$edata["controlWidth"] = 122;

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




	$tdatapayrolldeductions["ToDate"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "payrolldeductions";
	$fdata["Label"] = GetFieldLabel("payrolldeductions","EmployeeID");
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
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EmployeeID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "user_name";
	
	

	
	$edata["LookupOrderBy"] = "user_name";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 262;

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




	$tdatapayrolldeductions["EmployeeID"] = $fdata;
//	LoanID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "LoanID";
	$fdata["GoodName"] = "LoanID";
	$fdata["ownerTable"] = "payrolldeductions";
	$fdata["Label"] = GetFieldLabel("payrolldeductions","LoanID");
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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 102;

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




	$tdatapayrolldeductions["LoanID"] = $fdata;
//	PSID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "PSID";
	$fdata["GoodName"] = "PSID";
	$fdata["ownerTable"] = "payrolldeductions";
	$fdata["Label"] = GetFieldLabel("payrolldeductions","PSID");
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

		$fdata["strField"] = "PSID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PSID";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 122;

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




	$tdatapayrolldeductions["PSID"] = $fdata;
//	Balance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Balance";
	$fdata["GoodName"] = "Balance";
	$fdata["ownerTable"] = "payrolldeductions";
	$fdata["Label"] = GetFieldLabel("payrolldeductions","Balance");
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




	$tdatapayrolldeductions["Balance"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "payrolldeductions";
	$fdata["Label"] = GetFieldLabel("payrolldeductions","Employer");
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

		$fdata["strField"] = "Employer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Employer";

	
	
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
	$edata["LookupTable"] = "employername";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EnID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "EmployerName";
	
	

	
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




	$tdatapayrolldeductions["Employer"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "payrolldeductions";
	$fdata["Label"] = GetFieldLabel("payrolldeductions","Division");
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

		$fdata["strField"] = "Division";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Division";

	
	
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
	$edata["LookupTable"] = "divisions";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DvID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Division";
	
	

	
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




	$tdatapayrolldeductions["Division"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "payrolldeductions";
	$fdata["Label"] = GetFieldLabel("payrolldeductions","WageType");
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

		$fdata["strField"] = "WageType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WageType";

	
	
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
	$edata["LookupTable"] = "emptype";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ECatID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "EmployeeType";
	
	

	
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




	$tdatapayrolldeductions["WageType"] = $fdata;
//	OtherPayment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "OtherPayment";
	$fdata["GoodName"] = "OtherPayment";
	$fdata["ownerTable"] = "payrolldeductions";
	$fdata["Label"] = GetFieldLabel("payrolldeductions","OtherPayment");
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

		$fdata["strField"] = "OtherPayment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OtherPayment";

	
	
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
	$edata["LookupTable"] = "otherpayments";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "OpID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "OtherPayment";
	
	

	
	$edata["LookupOrderBy"] = "OpID";

	
	
	
	

	
	
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




	$tdatapayrolldeductions["OtherPayment"] = $fdata;


$tables_data["payrolldeductions"]=&$tdatapayrolldeductions;
$field_labels["payrolldeductions"] = &$fieldLabelspayrolldeductions;
$fieldToolTips["payrolldeductions"] = &$fieldToolTipspayrolldeductions;
$placeHolders["payrolldeductions"] = &$placeHolderspayrolldeductions;
$page_titles["payrolldeductions"] = &$pageTitlespayrolldeductions;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["payrolldeductions"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["payrolldeductions"] = array();


	
				$strOriginalDetailsTable="payrolltab";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="payrolltab";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "payrolltab";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["payrolldeductions"][0] = $masterParams;
				$masterTablesData["payrolldeductions"][0]["masterKeys"] = array();
	$masterTablesData["payrolldeductions"][0]["masterKeys"][]="EmployeeID";
				$masterTablesData["payrolldeductions"][0]["masterKeys"][]="ToDate";
				$masterTablesData["payrolldeductions"][0]["masterKeys"][]="FromDate";
				$masterTablesData["payrolldeductions"][0]["masterKeys"][]="Employer";
				$masterTablesData["payrolldeductions"][0]["masterKeys"][]="Division";
				$masterTablesData["payrolldeductions"][0]["masterKeys"][]="WageType";
				$masterTablesData["payrolldeductions"][0]["detailKeys"] = array();
	$masterTablesData["payrolldeductions"][0]["detailKeys"][]="EmployeeID";
				$masterTablesData["payrolldeductions"][0]["detailKeys"][]="ToDate";
				$masterTablesData["payrolldeductions"][0]["detailKeys"][]="FromDate";
				$masterTablesData["payrolldeductions"][0]["detailKeys"][]="Employer";
				$masterTablesData["payrolldeductions"][0]["detailKeys"][]="Division";
				$masterTablesData["payrolldeductions"][0]["detailKeys"][]="WageType";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_payrolldeductions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PdeID,  	Deduction,  	Amount,  	FromDate,  	ToDate,  	EmployeeID,  	LoanID,  	PSID,  	Balance,  	Employer,  	Division,  	WageType,  	OtherPayment";
$proto0["m_strFrom"] = "FROM payrolldeductions";
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
	"m_strName" => "PdeID",
	"m_strTable" => "payrolldeductions",
	"m_srcTableName" => "payrolldeductions"
));

$proto6["m_sql"] = "PdeID";
$proto6["m_srcTableName"] = "payrolldeductions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Deduction",
	"m_strTable" => "payrolldeductions",
	"m_srcTableName" => "payrolldeductions"
));

$proto8["m_sql"] = "Deduction";
$proto8["m_srcTableName"] = "payrolldeductions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount",
	"m_strTable" => "payrolldeductions",
	"m_srcTableName" => "payrolldeductions"
));

$proto10["m_sql"] = "Amount";
$proto10["m_srcTableName"] = "payrolldeductions";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "payrolldeductions",
	"m_srcTableName" => "payrolldeductions"
));

$proto12["m_sql"] = "FromDate";
$proto12["m_srcTableName"] = "payrolldeductions";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "payrolldeductions",
	"m_srcTableName" => "payrolldeductions"
));

$proto14["m_sql"] = "ToDate";
$proto14["m_srcTableName"] = "payrolldeductions";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "payrolldeductions",
	"m_srcTableName" => "payrolldeductions"
));

$proto16["m_sql"] = "EmployeeID";
$proto16["m_srcTableName"] = "payrolldeductions";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanID",
	"m_strTable" => "payrolldeductions",
	"m_srcTableName" => "payrolldeductions"
));

$proto18["m_sql"] = "LoanID";
$proto18["m_srcTableName"] = "payrolldeductions";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "PSID",
	"m_strTable" => "payrolldeductions",
	"m_srcTableName" => "payrolldeductions"
));

$proto20["m_sql"] = "PSID";
$proto20["m_srcTableName"] = "payrolldeductions";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Balance",
	"m_strTable" => "payrolldeductions",
	"m_srcTableName" => "payrolldeductions"
));

$proto22["m_sql"] = "Balance";
$proto22["m_srcTableName"] = "payrolldeductions";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "payrolldeductions",
	"m_srcTableName" => "payrolldeductions"
));

$proto24["m_sql"] = "Employer";
$proto24["m_srcTableName"] = "payrolldeductions";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "payrolldeductions",
	"m_srcTableName" => "payrolldeductions"
));

$proto26["m_sql"] = "Division";
$proto26["m_srcTableName"] = "payrolldeductions";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "WageType",
	"m_strTable" => "payrolldeductions",
	"m_srcTableName" => "payrolldeductions"
));

$proto28["m_sql"] = "WageType";
$proto28["m_srcTableName"] = "payrolldeductions";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "OtherPayment",
	"m_strTable" => "payrolldeductions",
	"m_srcTableName" => "payrolldeductions"
));

$proto30["m_sql"] = "OtherPayment";
$proto30["m_srcTableName"] = "payrolldeductions";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "payrolldeductions";
$proto33["m_srcTableName"] = "payrolldeductions";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "PdeID";
$proto33["m_columns"][] = "Deduction";
$proto33["m_columns"][] = "Amount";
$proto33["m_columns"][] = "FromDate";
$proto33["m_columns"][] = "ToDate";
$proto33["m_columns"][] = "EmployeeID";
$proto33["m_columns"][] = "LoanID";
$proto33["m_columns"][] = "PSID";
$proto33["m_columns"][] = "Balance";
$proto33["m_columns"][] = "Employer";
$proto33["m_columns"][] = "Division";
$proto33["m_columns"][] = "WageType";
$proto33["m_columns"][] = "OtherPayment";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "payrolldeductions";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "payrolldeductions";
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
$proto0["m_srcTableName"]="payrolldeductions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_payrolldeductions = createSqlQuery_payrolldeductions();


	
		;

													

$tdatapayrolldeductions[".sqlquery"] = $queryData_payrolldeductions;

include_once(getabspath("include/payrolldeductions_events.php"));
$tableEvents["payrolldeductions"] = new eventclass_payrolldeductions;
$tdatapayrolldeductions[".hasEvents"] = true;

?>