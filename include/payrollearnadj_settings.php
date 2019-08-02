<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapayrollearnadj = array();
	$tdatapayrollearnadj[".truncateText"] = true;
	$tdatapayrollearnadj[".NumberOfChars"] = 80;
	$tdatapayrollearnadj[".ShortName"] = "payrollearnadj";
	$tdatapayrollearnadj[".OwnerID"] = "";
	$tdatapayrollearnadj[".OriginalTable"] = "payrollearnadj";

//	field labels
$fieldLabelspayrollearnadj = array();
$fieldToolTipspayrollearnadj = array();
$pageTitlespayrollearnadj = array();
$placeHolderspayrollearnadj = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspayrollearnadj["English"] = array();
	$fieldToolTipspayrollearnadj["English"] = array();
	$placeHolderspayrollearnadj["English"] = array();
	$pageTitlespayrollearnadj["English"] = array();
	$fieldLabelspayrollearnadj["English"]["PadjID"] = "Padj ID";
	$fieldToolTipspayrollearnadj["English"]["PadjID"] = "";
	$placeHolderspayrollearnadj["English"]["PadjID"] = "";
	$fieldLabelspayrollearnadj["English"]["Adjustment"] = "Adjustment";
	$fieldToolTipspayrollearnadj["English"]["Adjustment"] = "";
	$placeHolderspayrollearnadj["English"]["Adjustment"] = "";
	$fieldLabelspayrollearnadj["English"]["Amount"] = "Amount";
	$fieldToolTipspayrollearnadj["English"]["Amount"] = "";
	$placeHolderspayrollearnadj["English"]["Amount"] = "";
	$fieldLabelspayrollearnadj["English"]["FromDate"] = "From Date";
	$fieldToolTipspayrollearnadj["English"]["FromDate"] = "";
	$placeHolderspayrollearnadj["English"]["FromDate"] = "";
	$fieldLabelspayrollearnadj["English"]["ToDate"] = "To Date";
	$fieldToolTipspayrollearnadj["English"]["ToDate"] = "";
	$placeHolderspayrollearnadj["English"]["ToDate"] = "";
	$fieldLabelspayrollearnadj["English"]["EmployeeID"] = "Biometric ID";
	$fieldToolTipspayrollearnadj["English"]["EmployeeID"] = "";
	$placeHolderspayrollearnadj["English"]["EmployeeID"] = "";
	$fieldLabelspayrollearnadj["English"]["eaID"] = "Ea ID";
	$fieldToolTipspayrollearnadj["English"]["eaID"] = "";
	$placeHolderspayrollearnadj["English"]["eaID"] = "";
	$fieldLabelspayrollearnadj["English"]["PSID"] = "PSID";
	$fieldToolTipspayrollearnadj["English"]["PSID"] = "";
	$placeHolderspayrollearnadj["English"]["PSID"] = "";
	$fieldLabelspayrollearnadj["English"]["PtabID"] = "Ptab ID";
	$fieldToolTipspayrollearnadj["English"]["PtabID"] = "";
	$placeHolderspayrollearnadj["English"]["PtabID"] = "";
	$fieldLabelspayrollearnadj["English"]["Employer"] = "Employer";
	$fieldToolTipspayrollearnadj["English"]["Employer"] = "";
	$placeHolderspayrollearnadj["English"]["Employer"] = "";
	$fieldLabelspayrollearnadj["English"]["Division"] = "Division";
	$fieldToolTipspayrollearnadj["English"]["Division"] = "";
	$placeHolderspayrollearnadj["English"]["Division"] = "";
	$fieldLabelspayrollearnadj["English"]["WageType"] = "Wage Type";
	$fieldToolTipspayrollearnadj["English"]["WageType"] = "";
	$placeHolderspayrollearnadj["English"]["WageType"] = "";
	if (count($fieldToolTipspayrollearnadj["English"]))
		$tdatapayrollearnadj[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspayrollearnadj[""] = array();
	$fieldToolTipspayrollearnadj[""] = array();
	$placeHolderspayrollearnadj[""] = array();
	$pageTitlespayrollearnadj[""] = array();
	if (count($fieldToolTipspayrollearnadj[""]))
		$tdatapayrollearnadj[".isUseToolTips"] = true;
}


	$tdatapayrollearnadj[".NCSearch"] = true;



$tdatapayrollearnadj[".shortTableName"] = "payrollearnadj";
$tdatapayrollearnadj[".nSecOptions"] = 0;
$tdatapayrollearnadj[".recsPerRowPrint"] = 1;
$tdatapayrollearnadj[".mainTableOwnerID"] = "";
$tdatapayrollearnadj[".moveNext"] = 1;
$tdatapayrollearnadj[".entityType"] = 0;

$tdatapayrollearnadj[".strOriginalTableName"] = "payrollearnadj";

	



$tdatapayrollearnadj[".showAddInPopup"] = false;

$tdatapayrollearnadj[".showEditInPopup"] = false;

$tdatapayrollearnadj[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapayrollearnadj[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapayrollearnadj[".fieldsForRegister"] = array();

$tdatapayrollearnadj[".listAjax"] = false;

	$tdatapayrollearnadj[".audit"] = false;

	$tdatapayrollearnadj[".locking"] = false;

$tdatapayrollearnadj[".edit"] = true;
$tdatapayrollearnadj[".afterEditAction"] = 1;
$tdatapayrollearnadj[".closePopupAfterEdit"] = 1;
$tdatapayrollearnadj[".afterEditActionDetTable"] = "";

$tdatapayrollearnadj[".add"] = true;
$tdatapayrollearnadj[".afterAddAction"] = 1;
$tdatapayrollearnadj[".closePopupAfterAdd"] = 1;
$tdatapayrollearnadj[".afterAddActionDetTable"] = "";

$tdatapayrollearnadj[".list"] = true;

$tdatapayrollearnadj[".inlineEdit"] = true;


$tdatapayrollearnadj[".reorderRecordsByHeader"] = true;


$tdatapayrollearnadj[".exportFormatting"] = 2;
$tdatapayrollearnadj[".exportDelimiter"] = ",";
		
$tdatapayrollearnadj[".inlineAdd"] = true;
$tdatapayrollearnadj[".view"] = true;

$tdatapayrollearnadj[".import"] = true;

$tdatapayrollearnadj[".exportTo"] = true;

$tdatapayrollearnadj[".printFriendly"] = true;

$tdatapayrollearnadj[".delete"] = true;

$tdatapayrollearnadj[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapayrollearnadj[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapayrollearnadj[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapayrollearnadj[".searchSaving"] = false;
//

$tdatapayrollearnadj[".showSearchPanel"] = true;
		$tdatapayrollearnadj[".flexibleSearch"] = true;

$tdatapayrollearnadj[".isUseAjaxSuggest"] = true;

$tdatapayrollearnadj[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																												

$tdatapayrollearnadj[".ajaxCodeSnippetAdded"] = false;

$tdatapayrollearnadj[".buttonsAdded"] = false;

$tdatapayrollearnadj[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapayrollearnadj[".isUseTimeForSearch"] = false;



$tdatapayrollearnadj[".badgeColor"] = "1e90ff";


$tdatapayrollearnadj[".allSearchFields"] = array();
$tdatapayrollearnadj[".filterFields"] = array();
$tdatapayrollearnadj[".requiredSearchFields"] = array();

$tdatapayrollearnadj[".allSearchFields"][] = "PtabID";
	$tdatapayrollearnadj[".allSearchFields"][] = "Employer";
	$tdatapayrollearnadj[".allSearchFields"][] = "Division";
	$tdatapayrollearnadj[".allSearchFields"][] = "WageType";
	$tdatapayrollearnadj[".allSearchFields"][] = "PadjID";
	$tdatapayrollearnadj[".allSearchFields"][] = "EmployeeID";
	$tdatapayrollearnadj[".allSearchFields"][] = "FromDate";
	$tdatapayrollearnadj[".allSearchFields"][] = "ToDate";
	$tdatapayrollearnadj[".allSearchFields"][] = "Adjustment";
	$tdatapayrollearnadj[".allSearchFields"][] = "Amount";
	$tdatapayrollearnadj[".allSearchFields"][] = "eaID";
	$tdatapayrollearnadj[".allSearchFields"][] = "PSID";
	

$tdatapayrollearnadj[".googleLikeFields"] = array();
$tdatapayrollearnadj[".googleLikeFields"][] = "PadjID";
$tdatapayrollearnadj[".googleLikeFields"][] = "Adjustment";
$tdatapayrollearnadj[".googleLikeFields"][] = "Amount";
$tdatapayrollearnadj[".googleLikeFields"][] = "FromDate";
$tdatapayrollearnadj[".googleLikeFields"][] = "ToDate";
$tdatapayrollearnadj[".googleLikeFields"][] = "EmployeeID";
$tdatapayrollearnadj[".googleLikeFields"][] = "eaID";
$tdatapayrollearnadj[".googleLikeFields"][] = "PSID";
$tdatapayrollearnadj[".googleLikeFields"][] = "PtabID";
$tdatapayrollearnadj[".googleLikeFields"][] = "Employer";
$tdatapayrollearnadj[".googleLikeFields"][] = "Division";
$tdatapayrollearnadj[".googleLikeFields"][] = "WageType";


$tdatapayrollearnadj[".advSearchFields"] = array();
$tdatapayrollearnadj[".advSearchFields"][] = "PtabID";
$tdatapayrollearnadj[".advSearchFields"][] = "Employer";
$tdatapayrollearnadj[".advSearchFields"][] = "Division";
$tdatapayrollearnadj[".advSearchFields"][] = "WageType";
$tdatapayrollearnadj[".advSearchFields"][] = "PadjID";
$tdatapayrollearnadj[".advSearchFields"][] = "EmployeeID";
$tdatapayrollearnadj[".advSearchFields"][] = "FromDate";
$tdatapayrollearnadj[".advSearchFields"][] = "ToDate";
$tdatapayrollearnadj[".advSearchFields"][] = "Adjustment";
$tdatapayrollearnadj[".advSearchFields"][] = "Amount";
$tdatapayrollearnadj[".advSearchFields"][] = "eaID";
$tdatapayrollearnadj[".advSearchFields"][] = "PSID";

$tdatapayrollearnadj[".tableType"] = "list";

$tdatapayrollearnadj[".printerPageOrientation"] = 0;
$tdatapayrollearnadj[".nPrinterPageScale"] = 100;

$tdatapayrollearnadj[".nPrinterSplitRecords"] = 40;

$tdatapayrollearnadj[".nPrinterPDFSplitRecords"] = 40;



$tdatapayrollearnadj[".geocodingEnabled"] = false;





$tdatapayrollearnadj[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatapayrollearnadj[".totalsFields"] = array();
$tdatapayrollearnadj[".totalsFields"][] = array(
	"fName" => "Amount",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatapayrollearnadj[".pageSize"] = 20;

$tdatapayrollearnadj[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapayrollearnadj[".strOrderBy"] = $tstrOrderBy;

$tdatapayrollearnadj[".orderindexes"] = array();

$tdatapayrollearnadj[".sqlHead"] = "SELECT PadjID,  	Adjustment,  	Amount,  	FromDate,  	ToDate,  	EmployeeID,  	eaID,  	PSID,  	PtabID,  	Employer,  	Division,  	WageType";
$tdatapayrollearnadj[".sqlFrom"] = "FROM payrollearnadj";
$tdatapayrollearnadj[".sqlWhereExpr"] = "";
$tdatapayrollearnadj[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapayrollearnadj[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapayrollearnadj[".arrGroupsPerPage"] = $arrGPP;

$tdatapayrollearnadj[".highlightSearchResults"] = true;

$tableKeyspayrollearnadj = array();
$tableKeyspayrollearnadj[] = "PadjID";
$tdatapayrollearnadj[".Keys"] = $tableKeyspayrollearnadj;

$tdatapayrollearnadj[".listFields"] = array();
$tdatapayrollearnadj[".listFields"][] = "PtabID";
$tdatapayrollearnadj[".listFields"][] = "Employer";
$tdatapayrollearnadj[".listFields"][] = "Division";
$tdatapayrollearnadj[".listFields"][] = "WageType";
$tdatapayrollearnadj[".listFields"][] = "PadjID";
$tdatapayrollearnadj[".listFields"][] = "EmployeeID";
$tdatapayrollearnadj[".listFields"][] = "FromDate";
$tdatapayrollearnadj[".listFields"][] = "ToDate";
$tdatapayrollearnadj[".listFields"][] = "Adjustment";
$tdatapayrollearnadj[".listFields"][] = "Amount";
$tdatapayrollearnadj[".listFields"][] = "eaID";
$tdatapayrollearnadj[".listFields"][] = "PSID";

$tdatapayrollearnadj[".hideMobileList"] = array();


$tdatapayrollearnadj[".viewFields"] = array();
$tdatapayrollearnadj[".viewFields"][] = "PtabID";
$tdatapayrollearnadj[".viewFields"][] = "Employer";
$tdatapayrollearnadj[".viewFields"][] = "Division";
$tdatapayrollearnadj[".viewFields"][] = "WageType";
$tdatapayrollearnadj[".viewFields"][] = "PadjID";
$tdatapayrollearnadj[".viewFields"][] = "EmployeeID";
$tdatapayrollearnadj[".viewFields"][] = "FromDate";
$tdatapayrollearnadj[".viewFields"][] = "ToDate";
$tdatapayrollearnadj[".viewFields"][] = "Adjustment";
$tdatapayrollearnadj[".viewFields"][] = "Amount";
$tdatapayrollearnadj[".viewFields"][] = "eaID";
$tdatapayrollearnadj[".viewFields"][] = "PSID";

$tdatapayrollearnadj[".addFields"] = array();
$tdatapayrollearnadj[".addFields"][] = "Employer";
$tdatapayrollearnadj[".addFields"][] = "Division";
$tdatapayrollearnadj[".addFields"][] = "WageType";
$tdatapayrollearnadj[".addFields"][] = "EmployeeID";
$tdatapayrollearnadj[".addFields"][] = "FromDate";
$tdatapayrollearnadj[".addFields"][] = "ToDate";
$tdatapayrollearnadj[".addFields"][] = "Adjustment";
$tdatapayrollearnadj[".addFields"][] = "Amount";
$tdatapayrollearnadj[".addFields"][] = "eaID";
$tdatapayrollearnadj[".addFields"][] = "PSID";

$tdatapayrollearnadj[".masterListFields"] = array();
$tdatapayrollearnadj[".masterListFields"][] = "PtabID";
$tdatapayrollearnadj[".masterListFields"][] = "Employer";
$tdatapayrollearnadj[".masterListFields"][] = "Division";
$tdatapayrollearnadj[".masterListFields"][] = "WageType";
$tdatapayrollearnadj[".masterListFields"][] = "PadjID";
$tdatapayrollearnadj[".masterListFields"][] = "EmployeeID";
$tdatapayrollearnadj[".masterListFields"][] = "FromDate";
$tdatapayrollearnadj[".masterListFields"][] = "ToDate";
$tdatapayrollearnadj[".masterListFields"][] = "Adjustment";
$tdatapayrollearnadj[".masterListFields"][] = "Amount";
$tdatapayrollearnadj[".masterListFields"][] = "eaID";
$tdatapayrollearnadj[".masterListFields"][] = "PSID";

$tdatapayrollearnadj[".inlineAddFields"] = array();
$tdatapayrollearnadj[".inlineAddFields"][] = "Employer";
$tdatapayrollearnadj[".inlineAddFields"][] = "Division";
$tdatapayrollearnadj[".inlineAddFields"][] = "WageType";
$tdatapayrollearnadj[".inlineAddFields"][] = "EmployeeID";
$tdatapayrollearnadj[".inlineAddFields"][] = "FromDate";
$tdatapayrollearnadj[".inlineAddFields"][] = "ToDate";
$tdatapayrollearnadj[".inlineAddFields"][] = "Adjustment";
$tdatapayrollearnadj[".inlineAddFields"][] = "Amount";
$tdatapayrollearnadj[".inlineAddFields"][] = "eaID";
$tdatapayrollearnadj[".inlineAddFields"][] = "PSID";

$tdatapayrollearnadj[".editFields"] = array();
$tdatapayrollearnadj[".editFields"][] = "PtabID";
$tdatapayrollearnadj[".editFields"][] = "Employer";
$tdatapayrollearnadj[".editFields"][] = "Division";
$tdatapayrollearnadj[".editFields"][] = "WageType";
$tdatapayrollearnadj[".editFields"][] = "EmployeeID";
$tdatapayrollearnadj[".editFields"][] = "FromDate";
$tdatapayrollearnadj[".editFields"][] = "ToDate";
$tdatapayrollearnadj[".editFields"][] = "Adjustment";
$tdatapayrollearnadj[".editFields"][] = "Amount";
$tdatapayrollearnadj[".editFields"][] = "eaID";
$tdatapayrollearnadj[".editFields"][] = "PSID";

$tdatapayrollearnadj[".inlineEditFields"] = array();
$tdatapayrollearnadj[".inlineEditFields"][] = "PtabID";
$tdatapayrollearnadj[".inlineEditFields"][] = "Employer";
$tdatapayrollearnadj[".inlineEditFields"][] = "Division";
$tdatapayrollearnadj[".inlineEditFields"][] = "WageType";
$tdatapayrollearnadj[".inlineEditFields"][] = "EmployeeID";
$tdatapayrollearnadj[".inlineEditFields"][] = "FromDate";
$tdatapayrollearnadj[".inlineEditFields"][] = "ToDate";
$tdatapayrollearnadj[".inlineEditFields"][] = "Adjustment";
$tdatapayrollearnadj[".inlineEditFields"][] = "Amount";
$tdatapayrollearnadj[".inlineEditFields"][] = "eaID";
$tdatapayrollearnadj[".inlineEditFields"][] = "PSID";

$tdatapayrollearnadj[".updateSelectedFields"] = array();
$tdatapayrollearnadj[".updateSelectedFields"][] = "PtabID";
$tdatapayrollearnadj[".updateSelectedFields"][] = "Employer";
$tdatapayrollearnadj[".updateSelectedFields"][] = "Division";
$tdatapayrollearnadj[".updateSelectedFields"][] = "WageType";
$tdatapayrollearnadj[".updateSelectedFields"][] = "EmployeeID";
$tdatapayrollearnadj[".updateSelectedFields"][] = "FromDate";
$tdatapayrollearnadj[".updateSelectedFields"][] = "ToDate";
$tdatapayrollearnadj[".updateSelectedFields"][] = "Adjustment";
$tdatapayrollearnadj[".updateSelectedFields"][] = "Amount";
$tdatapayrollearnadj[".updateSelectedFields"][] = "eaID";
$tdatapayrollearnadj[".updateSelectedFields"][] = "PSID";


$tdatapayrollearnadj[".exportFields"] = array();
$tdatapayrollearnadj[".exportFields"][] = "PtabID";
$tdatapayrollearnadj[".exportFields"][] = "Employer";
$tdatapayrollearnadj[".exportFields"][] = "Division";
$tdatapayrollearnadj[".exportFields"][] = "WageType";
$tdatapayrollearnadj[".exportFields"][] = "PadjID";
$tdatapayrollearnadj[".exportFields"][] = "EmployeeID";
$tdatapayrollearnadj[".exportFields"][] = "FromDate";
$tdatapayrollearnadj[".exportFields"][] = "ToDate";
$tdatapayrollearnadj[".exportFields"][] = "Adjustment";
$tdatapayrollearnadj[".exportFields"][] = "Amount";
$tdatapayrollearnadj[".exportFields"][] = "eaID";
$tdatapayrollearnadj[".exportFields"][] = "PSID";

$tdatapayrollearnadj[".importFields"] = array();
$tdatapayrollearnadj[".importFields"][] = "PadjID";
$tdatapayrollearnadj[".importFields"][] = "Adjustment";
$tdatapayrollearnadj[".importFields"][] = "Amount";
$tdatapayrollearnadj[".importFields"][] = "FromDate";
$tdatapayrollearnadj[".importFields"][] = "ToDate";
$tdatapayrollearnadj[".importFields"][] = "EmployeeID";
$tdatapayrollearnadj[".importFields"][] = "eaID";
$tdatapayrollearnadj[".importFields"][] = "PSID";
$tdatapayrollearnadj[".importFields"][] = "PtabID";
$tdatapayrollearnadj[".importFields"][] = "Employer";
$tdatapayrollearnadj[".importFields"][] = "Division";
$tdatapayrollearnadj[".importFields"][] = "WageType";

$tdatapayrollearnadj[".printFields"] = array();
$tdatapayrollearnadj[".printFields"][] = "PtabID";
$tdatapayrollearnadj[".printFields"][] = "Employer";
$tdatapayrollearnadj[".printFields"][] = "Division";
$tdatapayrollearnadj[".printFields"][] = "WageType";
$tdatapayrollearnadj[".printFields"][] = "PadjID";
$tdatapayrollearnadj[".printFields"][] = "EmployeeID";
$tdatapayrollearnadj[".printFields"][] = "FromDate";
$tdatapayrollearnadj[".printFields"][] = "ToDate";
$tdatapayrollearnadj[".printFields"][] = "Adjustment";
$tdatapayrollearnadj[".printFields"][] = "Amount";
$tdatapayrollearnadj[".printFields"][] = "eaID";
$tdatapayrollearnadj[".printFields"][] = "PSID";


//	PadjID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PadjID";
	$fdata["GoodName"] = "PadjID";
	$fdata["ownerTable"] = "payrollearnadj";
	$fdata["Label"] = GetFieldLabel("payrollearnadj","PadjID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PadjID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PadjID";

	
	
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




	$tdatapayrollearnadj["PadjID"] = $fdata;
//	Adjustment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Adjustment";
	$fdata["GoodName"] = "Adjustment";
	$fdata["ownerTable"] = "payrollearnadj";
	$fdata["Label"] = GetFieldLabel("payrollearnadj","Adjustment");
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

		$fdata["strField"] = "Adjustment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Adjustment";

	
	
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




	$tdatapayrollearnadj["Adjustment"] = $fdata;
//	Amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Amount";
	$fdata["GoodName"] = "Amount";
	$fdata["ownerTable"] = "payrollearnadj";
	$fdata["Label"] = GetFieldLabel("payrollearnadj","Amount");
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
		
		$edata["controlWidth"] = 122;

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




	$tdatapayrollearnadj["Amount"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "payrollearnadj";
	$fdata["Label"] = GetFieldLabel("payrollearnadj","FromDate");
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




	$tdatapayrollearnadj["FromDate"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "payrollearnadj";
	$fdata["Label"] = GetFieldLabel("payrollearnadj","ToDate");
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




	$tdatapayrollearnadj["ToDate"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "payrollearnadj";
	$fdata["Label"] = GetFieldLabel("payrollearnadj","EmployeeID");
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




	$tdatapayrollearnadj["EmployeeID"] = $fdata;
//	eaID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "eaID";
	$fdata["GoodName"] = "eaID";
	$fdata["ownerTable"] = "payrollearnadj";
	$fdata["Label"] = GetFieldLabel("payrollearnadj","eaID");
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

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 92;

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




	$tdatapayrollearnadj["eaID"] = $fdata;
//	PSID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "PSID";
	$fdata["GoodName"] = "PSID";
	$fdata["ownerTable"] = "payrollearnadj";
	$fdata["Label"] = GetFieldLabel("payrollearnadj","PSID");
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




	$tdatapayrollearnadj["PSID"] = $fdata;
//	PtabID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PtabID";
	$fdata["GoodName"] = "PtabID";
	$fdata["ownerTable"] = "payrollearnadj";
	$fdata["Label"] = GetFieldLabel("payrollearnadj","PtabID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PtabID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PtabID";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 70;

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




	$tdatapayrollearnadj["PtabID"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "payrollearnadj";
	$fdata["Label"] = GetFieldLabel("payrollearnadj","Employer");
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




	$tdatapayrollearnadj["Employer"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "payrollearnadj";
	$fdata["Label"] = GetFieldLabel("payrollearnadj","Division");
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




	$tdatapayrollearnadj["Division"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "payrollearnadj";
	$fdata["Label"] = GetFieldLabel("payrollearnadj","WageType");
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




	$tdatapayrollearnadj["WageType"] = $fdata;


$tables_data["payrollearnadj"]=&$tdatapayrollearnadj;
$field_labels["payrollearnadj"] = &$fieldLabelspayrollearnadj;
$fieldToolTips["payrollearnadj"] = &$fieldToolTipspayrollearnadj;
$placeHolders["payrollearnadj"] = &$placeHolderspayrollearnadj;
$page_titles["payrollearnadj"] = &$pageTitlespayrollearnadj;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["payrollearnadj"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["payrollearnadj"] = array();


	
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
					$masterTablesData["payrollearnadj"][0] = $masterParams;
				$masterTablesData["payrollearnadj"][0]["masterKeys"] = array();
	$masterTablesData["payrollearnadj"][0]["masterKeys"][]="EmployeeID";
				$masterTablesData["payrollearnadj"][0]["masterKeys"][]="ToDate";
				$masterTablesData["payrollearnadj"][0]["masterKeys"][]="FromDate";
				$masterTablesData["payrollearnadj"][0]["masterKeys"][]="Employer";
				$masterTablesData["payrollearnadj"][0]["masterKeys"][]="Division";
				$masterTablesData["payrollearnadj"][0]["masterKeys"][]="WageType";
				$masterTablesData["payrollearnadj"][0]["detailKeys"] = array();
	$masterTablesData["payrollearnadj"][0]["detailKeys"][]="EmployeeID";
				$masterTablesData["payrollearnadj"][0]["detailKeys"][]="ToDate";
				$masterTablesData["payrollearnadj"][0]["detailKeys"][]="FromDate";
				$masterTablesData["payrollearnadj"][0]["detailKeys"][]="Employer";
				$masterTablesData["payrollearnadj"][0]["detailKeys"][]="Division";
				$masterTablesData["payrollearnadj"][0]["detailKeys"][]="WageType";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_payrollearnadj()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PadjID,  	Adjustment,  	Amount,  	FromDate,  	ToDate,  	EmployeeID,  	eaID,  	PSID,  	PtabID,  	Employer,  	Division,  	WageType";
$proto0["m_strFrom"] = "FROM payrollearnadj";
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
	"m_strName" => "PadjID",
	"m_strTable" => "payrollearnadj",
	"m_srcTableName" => "payrollearnadj"
));

$proto6["m_sql"] = "PadjID";
$proto6["m_srcTableName"] = "payrollearnadj";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Adjustment",
	"m_strTable" => "payrollearnadj",
	"m_srcTableName" => "payrollearnadj"
));

$proto8["m_sql"] = "Adjustment";
$proto8["m_srcTableName"] = "payrollearnadj";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount",
	"m_strTable" => "payrollearnadj",
	"m_srcTableName" => "payrollearnadj"
));

$proto10["m_sql"] = "Amount";
$proto10["m_srcTableName"] = "payrollearnadj";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "payrollearnadj",
	"m_srcTableName" => "payrollearnadj"
));

$proto12["m_sql"] = "FromDate";
$proto12["m_srcTableName"] = "payrollearnadj";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "payrollearnadj",
	"m_srcTableName" => "payrollearnadj"
));

$proto14["m_sql"] = "ToDate";
$proto14["m_srcTableName"] = "payrollearnadj";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "payrollearnadj",
	"m_srcTableName" => "payrollearnadj"
));

$proto16["m_sql"] = "EmployeeID";
$proto16["m_srcTableName"] = "payrollearnadj";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "eaID",
	"m_strTable" => "payrollearnadj",
	"m_srcTableName" => "payrollearnadj"
));

$proto18["m_sql"] = "eaID";
$proto18["m_srcTableName"] = "payrollearnadj";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "PSID",
	"m_strTable" => "payrollearnadj",
	"m_srcTableName" => "payrollearnadj"
));

$proto20["m_sql"] = "PSID";
$proto20["m_srcTableName"] = "payrollearnadj";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "PtabID",
	"m_strTable" => "payrollearnadj",
	"m_srcTableName" => "payrollearnadj"
));

$proto22["m_sql"] = "PtabID";
$proto22["m_srcTableName"] = "payrollearnadj";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "payrollearnadj",
	"m_srcTableName" => "payrollearnadj"
));

$proto24["m_sql"] = "Employer";
$proto24["m_srcTableName"] = "payrollearnadj";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "payrollearnadj",
	"m_srcTableName" => "payrollearnadj"
));

$proto26["m_sql"] = "Division";
$proto26["m_srcTableName"] = "payrollearnadj";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "WageType",
	"m_strTable" => "payrollearnadj",
	"m_srcTableName" => "payrollearnadj"
));

$proto28["m_sql"] = "WageType";
$proto28["m_srcTableName"] = "payrollearnadj";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "payrollearnadj";
$proto31["m_srcTableName"] = "payrollearnadj";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "PadjID";
$proto31["m_columns"][] = "Adjustment";
$proto31["m_columns"][] = "Amount";
$proto31["m_columns"][] = "FromDate";
$proto31["m_columns"][] = "ToDate";
$proto31["m_columns"][] = "EmployeeID";
$proto31["m_columns"][] = "eaID";
$proto31["m_columns"][] = "PSID";
$proto31["m_columns"][] = "PtabID";
$proto31["m_columns"][] = "Employer";
$proto31["m_columns"][] = "Division";
$proto31["m_columns"][] = "WageType";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "payrollearnadj";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "payrollearnadj";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="payrollearnadj";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_payrollearnadj = createSqlQuery_payrollearnadj();


	
		;

												

$tdatapayrollearnadj[".sqlquery"] = $queryData_payrollearnadj;

include_once(getabspath("include/payrollearnadj_events.php"));
$tableEvents["payrollearnadj"] = new eventclass_payrollearnadj;
$tdatapayrollearnadj[".hasEvents"] = true;

?>