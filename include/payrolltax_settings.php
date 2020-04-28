<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapayrolltax = array();
	$tdatapayrolltax[".truncateText"] = true;
	$tdatapayrolltax[".NumberOfChars"] = 80;
	$tdatapayrolltax[".ShortName"] = "payrolltax";
	$tdatapayrolltax[".OwnerID"] = "";
	$tdatapayrolltax[".OriginalTable"] = "payrolltax";

//	field labels
$fieldLabelspayrolltax = array();
$fieldToolTipspayrolltax = array();
$pageTitlespayrolltax = array();
$placeHolderspayrolltax = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspayrolltax["English"] = array();
	$fieldToolTipspayrolltax["English"] = array();
	$placeHolderspayrolltax["English"] = array();
	$pageTitlespayrolltax["English"] = array();
	$fieldLabelspayrolltax["English"]["PTaxID"] = "PTax ID";
	$fieldToolTipspayrolltax["English"]["PTaxID"] = "";
	$placeHolderspayrolltax["English"]["PTaxID"] = "";
	$fieldLabelspayrolltax["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipspayrolltax["English"]["EmployeeID"] = "";
	$placeHolderspayrolltax["English"]["EmployeeID"] = "";
	$fieldLabelspayrolltax["English"]["Tax"] = "Tax";
	$fieldToolTipspayrolltax["English"]["Tax"] = "";
	$placeHolderspayrolltax["English"]["Tax"] = "";
	$fieldLabelspayrolltax["English"]["FromDate"] = "From Date";
	$fieldToolTipspayrolltax["English"]["FromDate"] = "";
	$placeHolderspayrolltax["English"]["FromDate"] = "";
	$fieldLabelspayrolltax["English"]["ToDate"] = "To Date";
	$fieldToolTipspayrolltax["English"]["ToDate"] = "";
	$placeHolderspayrolltax["English"]["ToDate"] = "";
	$fieldLabelspayrolltax["English"]["PSID"] = "PSID";
	$fieldToolTipspayrolltax["English"]["PSID"] = "";
	$placeHolderspayrolltax["English"]["PSID"] = "";
	$fieldLabelspayrolltax["English"]["Employer"] = "Employer";
	$fieldToolTipspayrolltax["English"]["Employer"] = "";
	$placeHolderspayrolltax["English"]["Employer"] = "";
	$fieldLabelspayrolltax["English"]["Division"] = "Division";
	$fieldToolTipspayrolltax["English"]["Division"] = "";
	$placeHolderspayrolltax["English"]["Division"] = "";
	$fieldLabelspayrolltax["English"]["WageType"] = "Wage Type";
	$fieldToolTipspayrolltax["English"]["WageType"] = "";
	$placeHolderspayrolltax["English"]["WageType"] = "";
	if (count($fieldToolTipspayrolltax["English"]))
		$tdatapayrolltax[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspayrolltax[""] = array();
	$fieldToolTipspayrolltax[""] = array();
	$placeHolderspayrolltax[""] = array();
	$pageTitlespayrolltax[""] = array();
	if (count($fieldToolTipspayrolltax[""]))
		$tdatapayrolltax[".isUseToolTips"] = true;
}


	$tdatapayrolltax[".NCSearch"] = true;



$tdatapayrolltax[".shortTableName"] = "payrolltax";
$tdatapayrolltax[".nSecOptions"] = 0;
$tdatapayrolltax[".recsPerRowPrint"] = 1;
$tdatapayrolltax[".mainTableOwnerID"] = "";
$tdatapayrolltax[".moveNext"] = 1;
$tdatapayrolltax[".entityType"] = 0;

$tdatapayrolltax[".strOriginalTableName"] = "payrolltax";

	



$tdatapayrolltax[".showAddInPopup"] = false;

$tdatapayrolltax[".showEditInPopup"] = false;

$tdatapayrolltax[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapayrolltax[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapayrolltax[".fieldsForRegister"] = array();

$tdatapayrolltax[".listAjax"] = false;

	$tdatapayrolltax[".audit"] = false;

	$tdatapayrolltax[".locking"] = false;

$tdatapayrolltax[".edit"] = true;
$tdatapayrolltax[".afterEditAction"] = 1;
$tdatapayrolltax[".closePopupAfterEdit"] = 1;
$tdatapayrolltax[".afterEditActionDetTable"] = "";

$tdatapayrolltax[".add"] = true;
$tdatapayrolltax[".afterAddAction"] = 1;
$tdatapayrolltax[".closePopupAfterAdd"] = 1;
$tdatapayrolltax[".afterAddActionDetTable"] = "";

$tdatapayrolltax[".list"] = true;

$tdatapayrolltax[".inlineEdit"] = true;


$tdatapayrolltax[".reorderRecordsByHeader"] = true;


$tdatapayrolltax[".exportFormatting"] = 2;
$tdatapayrolltax[".exportDelimiter"] = ",";
		
$tdatapayrolltax[".inlineAdd"] = true;
$tdatapayrolltax[".view"] = true;

$tdatapayrolltax[".import"] = true;

$tdatapayrolltax[".exportTo"] = true;

$tdatapayrolltax[".printFriendly"] = true;

$tdatapayrolltax[".delete"] = true;

$tdatapayrolltax[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapayrolltax[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapayrolltax[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapayrolltax[".searchSaving"] = false;
//

$tdatapayrolltax[".showSearchPanel"] = true;
		$tdatapayrolltax[".flexibleSearch"] = true;

$tdatapayrolltax[".isUseAjaxSuggest"] = true;

$tdatapayrolltax[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																												

$tdatapayrolltax[".ajaxCodeSnippetAdded"] = false;

$tdatapayrolltax[".buttonsAdded"] = false;

$tdatapayrolltax[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapayrolltax[".isUseTimeForSearch"] = false;



$tdatapayrolltax[".badgeColor"] = "6da5c8";


$tdatapayrolltax[".allSearchFields"] = array();
$tdatapayrolltax[".filterFields"] = array();
$tdatapayrolltax[".requiredSearchFields"] = array();

$tdatapayrolltax[".allSearchFields"][] = "PTaxID";
	$tdatapayrolltax[".allSearchFields"][] = "Employer";
	$tdatapayrolltax[".allSearchFields"][] = "Division";
	$tdatapayrolltax[".allSearchFields"][] = "WageType";
	$tdatapayrolltax[".allSearchFields"][] = "EmployeeID";
	$tdatapayrolltax[".allSearchFields"][] = "FromDate";
	$tdatapayrolltax[".allSearchFields"][] = "ToDate";
	$tdatapayrolltax[".allSearchFields"][] = "Tax";
	$tdatapayrolltax[".allSearchFields"][] = "PSID";
	

$tdatapayrolltax[".googleLikeFields"] = array();
$tdatapayrolltax[".googleLikeFields"][] = "PTaxID";
$tdatapayrolltax[".googleLikeFields"][] = "EmployeeID";
$tdatapayrolltax[".googleLikeFields"][] = "Tax";
$tdatapayrolltax[".googleLikeFields"][] = "FromDate";
$tdatapayrolltax[".googleLikeFields"][] = "ToDate";
$tdatapayrolltax[".googleLikeFields"][] = "PSID";
$tdatapayrolltax[".googleLikeFields"][] = "Employer";
$tdatapayrolltax[".googleLikeFields"][] = "Division";
$tdatapayrolltax[".googleLikeFields"][] = "WageType";


$tdatapayrolltax[".advSearchFields"] = array();
$tdatapayrolltax[".advSearchFields"][] = "PTaxID";
$tdatapayrolltax[".advSearchFields"][] = "Employer";
$tdatapayrolltax[".advSearchFields"][] = "Division";
$tdatapayrolltax[".advSearchFields"][] = "WageType";
$tdatapayrolltax[".advSearchFields"][] = "EmployeeID";
$tdatapayrolltax[".advSearchFields"][] = "FromDate";
$tdatapayrolltax[".advSearchFields"][] = "ToDate";
$tdatapayrolltax[".advSearchFields"][] = "Tax";
$tdatapayrolltax[".advSearchFields"][] = "PSID";

$tdatapayrolltax[".tableType"] = "list";

$tdatapayrolltax[".printerPageOrientation"] = 0;
$tdatapayrolltax[".nPrinterPageScale"] = 100;

$tdatapayrolltax[".nPrinterSplitRecords"] = 40;

$tdatapayrolltax[".nPrinterPDFSplitRecords"] = 40;



$tdatapayrolltax[".geocodingEnabled"] = false;





$tdatapayrolltax[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatapayrolltax[".totalsFields"] = array();
$tdatapayrolltax[".totalsFields"][] = array(
	"fName" => "Tax",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatapayrolltax[".pageSize"] = 20;

$tdatapayrolltax[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapayrolltax[".strOrderBy"] = $tstrOrderBy;

$tdatapayrolltax[".orderindexes"] = array();

$tdatapayrolltax[".sqlHead"] = "SELECT PTaxID,  	EmployeeID,  	Tax,  	FromDate,  	ToDate,  	PSID,  	Employer,  	Division,  	WageType";
$tdatapayrolltax[".sqlFrom"] = "FROM payrolltax";
$tdatapayrolltax[".sqlWhereExpr"] = "";
$tdatapayrolltax[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapayrolltax[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapayrolltax[".arrGroupsPerPage"] = $arrGPP;

$tdatapayrolltax[".highlightSearchResults"] = true;

$tableKeyspayrolltax = array();
$tableKeyspayrolltax[] = "PTaxID";
$tdatapayrolltax[".Keys"] = $tableKeyspayrolltax;

$tdatapayrolltax[".listFields"] = array();
$tdatapayrolltax[".listFields"][] = "PTaxID";
$tdatapayrolltax[".listFields"][] = "Employer";
$tdatapayrolltax[".listFields"][] = "Division";
$tdatapayrolltax[".listFields"][] = "WageType";
$tdatapayrolltax[".listFields"][] = "EmployeeID";
$tdatapayrolltax[".listFields"][] = "FromDate";
$tdatapayrolltax[".listFields"][] = "ToDate";
$tdatapayrolltax[".listFields"][] = "Tax";
$tdatapayrolltax[".listFields"][] = "PSID";

$tdatapayrolltax[".hideMobileList"] = array();


$tdatapayrolltax[".viewFields"] = array();
$tdatapayrolltax[".viewFields"][] = "PTaxID";
$tdatapayrolltax[".viewFields"][] = "Employer";
$tdatapayrolltax[".viewFields"][] = "Division";
$tdatapayrolltax[".viewFields"][] = "WageType";
$tdatapayrolltax[".viewFields"][] = "EmployeeID";
$tdatapayrolltax[".viewFields"][] = "FromDate";
$tdatapayrolltax[".viewFields"][] = "ToDate";
$tdatapayrolltax[".viewFields"][] = "Tax";
$tdatapayrolltax[".viewFields"][] = "PSID";

$tdatapayrolltax[".addFields"] = array();
$tdatapayrolltax[".addFields"][] = "Employer";
$tdatapayrolltax[".addFields"][] = "Division";
$tdatapayrolltax[".addFields"][] = "WageType";
$tdatapayrolltax[".addFields"][] = "EmployeeID";
$tdatapayrolltax[".addFields"][] = "FromDate";
$tdatapayrolltax[".addFields"][] = "ToDate";
$tdatapayrolltax[".addFields"][] = "Tax";
$tdatapayrolltax[".addFields"][] = "PSID";

$tdatapayrolltax[".masterListFields"] = array();
$tdatapayrolltax[".masterListFields"][] = "PTaxID";
$tdatapayrolltax[".masterListFields"][] = "Employer";
$tdatapayrolltax[".masterListFields"][] = "Division";
$tdatapayrolltax[".masterListFields"][] = "WageType";
$tdatapayrolltax[".masterListFields"][] = "EmployeeID";
$tdatapayrolltax[".masterListFields"][] = "FromDate";
$tdatapayrolltax[".masterListFields"][] = "ToDate";
$tdatapayrolltax[".masterListFields"][] = "Tax";
$tdatapayrolltax[".masterListFields"][] = "PSID";

$tdatapayrolltax[".inlineAddFields"] = array();
$tdatapayrolltax[".inlineAddFields"][] = "Employer";
$tdatapayrolltax[".inlineAddFields"][] = "Division";
$tdatapayrolltax[".inlineAddFields"][] = "WageType";
$tdatapayrolltax[".inlineAddFields"][] = "EmployeeID";
$tdatapayrolltax[".inlineAddFields"][] = "FromDate";
$tdatapayrolltax[".inlineAddFields"][] = "ToDate";
$tdatapayrolltax[".inlineAddFields"][] = "Tax";
$tdatapayrolltax[".inlineAddFields"][] = "PSID";

$tdatapayrolltax[".editFields"] = array();
$tdatapayrolltax[".editFields"][] = "Employer";
$tdatapayrolltax[".editFields"][] = "Division";
$tdatapayrolltax[".editFields"][] = "WageType";
$tdatapayrolltax[".editFields"][] = "EmployeeID";
$tdatapayrolltax[".editFields"][] = "FromDate";
$tdatapayrolltax[".editFields"][] = "ToDate";
$tdatapayrolltax[".editFields"][] = "Tax";
$tdatapayrolltax[".editFields"][] = "PSID";

$tdatapayrolltax[".inlineEditFields"] = array();
$tdatapayrolltax[".inlineEditFields"][] = "Employer";
$tdatapayrolltax[".inlineEditFields"][] = "Division";
$tdatapayrolltax[".inlineEditFields"][] = "WageType";
$tdatapayrolltax[".inlineEditFields"][] = "EmployeeID";
$tdatapayrolltax[".inlineEditFields"][] = "FromDate";
$tdatapayrolltax[".inlineEditFields"][] = "ToDate";
$tdatapayrolltax[".inlineEditFields"][] = "Tax";
$tdatapayrolltax[".inlineEditFields"][] = "PSID";

$tdatapayrolltax[".updateSelectedFields"] = array();
$tdatapayrolltax[".updateSelectedFields"][] = "EmployeeID";
$tdatapayrolltax[".updateSelectedFields"][] = "FromDate";
$tdatapayrolltax[".updateSelectedFields"][] = "ToDate";
$tdatapayrolltax[".updateSelectedFields"][] = "PSID";


$tdatapayrolltax[".exportFields"] = array();
$tdatapayrolltax[".exportFields"][] = "PTaxID";
$tdatapayrolltax[".exportFields"][] = "Employer";
$tdatapayrolltax[".exportFields"][] = "Division";
$tdatapayrolltax[".exportFields"][] = "WageType";
$tdatapayrolltax[".exportFields"][] = "EmployeeID";
$tdatapayrolltax[".exportFields"][] = "FromDate";
$tdatapayrolltax[".exportFields"][] = "ToDate";
$tdatapayrolltax[".exportFields"][] = "Tax";
$tdatapayrolltax[".exportFields"][] = "PSID";

$tdatapayrolltax[".importFields"] = array();
$tdatapayrolltax[".importFields"][] = "PTaxID";
$tdatapayrolltax[".importFields"][] = "EmployeeID";
$tdatapayrolltax[".importFields"][] = "Tax";
$tdatapayrolltax[".importFields"][] = "FromDate";
$tdatapayrolltax[".importFields"][] = "ToDate";
$tdatapayrolltax[".importFields"][] = "PSID";
$tdatapayrolltax[".importFields"][] = "Employer";
$tdatapayrolltax[".importFields"][] = "Division";
$tdatapayrolltax[".importFields"][] = "WageType";

$tdatapayrolltax[".printFields"] = array();
$tdatapayrolltax[".printFields"][] = "PTaxID";
$tdatapayrolltax[".printFields"][] = "Employer";
$tdatapayrolltax[".printFields"][] = "Division";
$tdatapayrolltax[".printFields"][] = "WageType";
$tdatapayrolltax[".printFields"][] = "EmployeeID";
$tdatapayrolltax[".printFields"][] = "FromDate";
$tdatapayrolltax[".printFields"][] = "ToDate";
$tdatapayrolltax[".printFields"][] = "Tax";
$tdatapayrolltax[".printFields"][] = "PSID";


//	PTaxID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PTaxID";
	$fdata["GoodName"] = "PTaxID";
	$fdata["ownerTable"] = "payrolltax";
	$fdata["Label"] = GetFieldLabel("payrolltax","PTaxID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PTaxID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PTaxID";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapayrolltax["PTaxID"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "payrolltax";
	$fdata["Label"] = GetFieldLabel("payrolltax","EmployeeID");
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

	
	
	
	
	
	
		$edata["controlWidth"] = 292;

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




	$tdatapayrolltax["EmployeeID"] = $fdata;
//	Tax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Tax";
	$fdata["GoodName"] = "Tax";
	$fdata["ownerTable"] = "payrolltax";
	$fdata["Label"] = GetFieldLabel("payrolltax","Tax");
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

		$fdata["strField"] = "Tax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tax";

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 112;

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




	$tdatapayrolltax["Tax"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "payrolltax";
	$fdata["Label"] = GetFieldLabel("payrolltax","FromDate");
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




	$tdatapayrolltax["FromDate"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "payrolltax";
	$fdata["Label"] = GetFieldLabel("payrolltax","ToDate");
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




	$tdatapayrolltax["ToDate"] = $fdata;
//	PSID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PSID";
	$fdata["GoodName"] = "PSID";
	$fdata["ownerTable"] = "payrolltax";
	$fdata["Label"] = GetFieldLabel("payrolltax","PSID");
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

	
	
	
	
	
	
		$edata["controlWidth"] = 112;

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




	$tdatapayrolltax["PSID"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "payrolltax";
	$fdata["Label"] = GetFieldLabel("payrolltax","Employer");
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




	$tdatapayrolltax["Employer"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "payrolltax";
	$fdata["Label"] = GetFieldLabel("payrolltax","Division");
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




	$tdatapayrolltax["Division"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "payrolltax";
	$fdata["Label"] = GetFieldLabel("payrolltax","WageType");
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




	$tdatapayrolltax["WageType"] = $fdata;


$tables_data["payrolltax"]=&$tdatapayrolltax;
$field_labels["payrolltax"] = &$fieldLabelspayrolltax;
$fieldToolTips["payrolltax"] = &$fieldToolTipspayrolltax;
$placeHolders["payrolltax"] = &$placeHolderspayrolltax;
$page_titles["payrolltax"] = &$pageTitlespayrolltax;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["payrolltax"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["payrolltax"] = array();


	
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
					$masterTablesData["payrolltax"][0] = $masterParams;
				$masterTablesData["payrolltax"][0]["masterKeys"] = array();
	$masterTablesData["payrolltax"][0]["masterKeys"][]="EmployeeID";
				$masterTablesData["payrolltax"][0]["masterKeys"][]="FromDate";
				$masterTablesData["payrolltax"][0]["masterKeys"][]="ToDate";
				$masterTablesData["payrolltax"][0]["masterKeys"][]="Employer";
				$masterTablesData["payrolltax"][0]["masterKeys"][]="Division";
				$masterTablesData["payrolltax"][0]["masterKeys"][]="WageType";
				$masterTablesData["payrolltax"][0]["detailKeys"] = array();
	$masterTablesData["payrolltax"][0]["detailKeys"][]="EmployeeID";
				$masterTablesData["payrolltax"][0]["detailKeys"][]="FromDate";
				$masterTablesData["payrolltax"][0]["detailKeys"][]="ToDate";
				$masterTablesData["payrolltax"][0]["detailKeys"][]="Employer";
				$masterTablesData["payrolltax"][0]["detailKeys"][]="Division";
				$masterTablesData["payrolltax"][0]["detailKeys"][]="WageType";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_payrolltax()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PTaxID,  	EmployeeID,  	Tax,  	FromDate,  	ToDate,  	PSID,  	Employer,  	Division,  	WageType";
$proto0["m_strFrom"] = "FROM payrolltax";
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
	"m_strName" => "PTaxID",
	"m_strTable" => "payrolltax",
	"m_srcTableName" => "payrolltax"
));

$proto6["m_sql"] = "PTaxID";
$proto6["m_srcTableName"] = "payrolltax";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "payrolltax",
	"m_srcTableName" => "payrolltax"
));

$proto8["m_sql"] = "EmployeeID";
$proto8["m_srcTableName"] = "payrolltax";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Tax",
	"m_strTable" => "payrolltax",
	"m_srcTableName" => "payrolltax"
));

$proto10["m_sql"] = "Tax";
$proto10["m_srcTableName"] = "payrolltax";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "payrolltax",
	"m_srcTableName" => "payrolltax"
));

$proto12["m_sql"] = "FromDate";
$proto12["m_srcTableName"] = "payrolltax";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "payrolltax",
	"m_srcTableName" => "payrolltax"
));

$proto14["m_sql"] = "ToDate";
$proto14["m_srcTableName"] = "payrolltax";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PSID",
	"m_strTable" => "payrolltax",
	"m_srcTableName" => "payrolltax"
));

$proto16["m_sql"] = "PSID";
$proto16["m_srcTableName"] = "payrolltax";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "payrolltax",
	"m_srcTableName" => "payrolltax"
));

$proto18["m_sql"] = "Employer";
$proto18["m_srcTableName"] = "payrolltax";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "payrolltax",
	"m_srcTableName" => "payrolltax"
));

$proto20["m_sql"] = "Division";
$proto20["m_srcTableName"] = "payrolltax";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "WageType",
	"m_strTable" => "payrolltax",
	"m_srcTableName" => "payrolltax"
));

$proto22["m_sql"] = "WageType";
$proto22["m_srcTableName"] = "payrolltax";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "payrolltax";
$proto25["m_srcTableName"] = "payrolltax";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "PTaxID";
$proto25["m_columns"][] = "EmployeeID";
$proto25["m_columns"][] = "Tax";
$proto25["m_columns"][] = "FromDate";
$proto25["m_columns"][] = "ToDate";
$proto25["m_columns"][] = "PSID";
$proto25["m_columns"][] = "Employer";
$proto25["m_columns"][] = "Division";
$proto25["m_columns"][] = "WageType";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "payrolltax";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "payrolltax";
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
$proto0["m_srcTableName"]="payrolltax";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_payrolltax = createSqlQuery_payrolltax();


	
		;

									

$tdatapayrolltax[".sqlquery"] = $queryData_payrolltax;

include_once(getabspath("include/payrolltax_events.php"));
$tableEvents["payrolltax"] = new eventclass_payrolltax;
$tdatapayrolltax[".hasEvents"] = true;

?>