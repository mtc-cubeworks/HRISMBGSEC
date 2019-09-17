<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadivisions = array();
	$tdatadivisions[".truncateText"] = true;
	$tdatadivisions[".NumberOfChars"] = 80;
	$tdatadivisions[".ShortName"] = "divisions";
	$tdatadivisions[".OwnerID"] = "";
	$tdatadivisions[".OriginalTable"] = "divisions";

//	field labels
$fieldLabelsdivisions = array();
$fieldToolTipsdivisions = array();
$pageTitlesdivisions = array();
$placeHoldersdivisions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdivisions["English"] = array();
	$fieldToolTipsdivisions["English"] = array();
	$placeHoldersdivisions["English"] = array();
	$pageTitlesdivisions["English"] = array();
	$fieldLabelsdivisions["English"]["DvID"] = "Dv ID";
	$fieldToolTipsdivisions["English"]["DvID"] = "";
	$placeHoldersdivisions["English"]["DvID"] = "";
	$fieldLabelsdivisions["English"]["Division"] = "Division";
	$fieldToolTipsdivisions["English"]["Division"] = "";
	$placeHoldersdivisions["English"]["Division"] = "";
	$fieldLabelsdivisions["English"]["MontlyPaymentPeriods"] = "Montly Payment Periods";
	$fieldToolTipsdivisions["English"]["MontlyPaymentPeriods"] = "";
	$placeHoldersdivisions["English"]["MontlyPaymentPeriods"] = "";
	$fieldLabelsdivisions["English"]["StatutoryPayment"] = "Statutory Payment";
	$fieldToolTipsdivisions["English"]["StatutoryPayment"] = "";
	$placeHoldersdivisions["English"]["StatutoryPayment"] = "";
	$fieldLabelsdivisions["English"]["MinimumMonhtlyWage"] = "Minimum Monhtly Wage";
	$fieldToolTipsdivisions["English"]["MinimumMonhtlyWage"] = "";
	$placeHoldersdivisions["English"]["MinimumMonhtlyWage"] = "";
	$fieldLabelsdivisions["English"]["MinimumDailyWage"] = "Minimum Daily Wage";
	$fieldToolTipsdivisions["English"]["MinimumDailyWage"] = "";
	$placeHoldersdivisions["English"]["MinimumDailyWage"] = "";
	if (count($fieldToolTipsdivisions["English"]))
		$tdatadivisions[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdivisions[""] = array();
	$fieldToolTipsdivisions[""] = array();
	$placeHoldersdivisions[""] = array();
	$pageTitlesdivisions[""] = array();
	if (count($fieldToolTipsdivisions[""]))
		$tdatadivisions[".isUseToolTips"] = true;
}


	$tdatadivisions[".NCSearch"] = true;



$tdatadivisions[".shortTableName"] = "divisions";
$tdatadivisions[".nSecOptions"] = 0;
$tdatadivisions[".recsPerRowPrint"] = 1;
$tdatadivisions[".mainTableOwnerID"] = "";
$tdatadivisions[".moveNext"] = 1;
$tdatadivisions[".entityType"] = 0;

$tdatadivisions[".strOriginalTableName"] = "divisions";

	



$tdatadivisions[".showAddInPopup"] = false;

$tdatadivisions[".showEditInPopup"] = false;

$tdatadivisions[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadivisions[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadivisions[".fieldsForRegister"] = array();

$tdatadivisions[".listAjax"] = false;

	$tdatadivisions[".audit"] = false;

	$tdatadivisions[".locking"] = false;

$tdatadivisions[".edit"] = true;
$tdatadivisions[".afterEditAction"] = 1;
$tdatadivisions[".closePopupAfterEdit"] = 1;
$tdatadivisions[".afterEditActionDetTable"] = "";

$tdatadivisions[".add"] = true;
$tdatadivisions[".afterAddAction"] = 1;
$tdatadivisions[".closePopupAfterAdd"] = 1;
$tdatadivisions[".afterAddActionDetTable"] = "";

$tdatadivisions[".list"] = true;

$tdatadivisions[".inlineEdit"] = true;

$tdatadivisions[".updateSelected"] = true;

$tdatadivisions[".reorderRecordsByHeader"] = true;


$tdatadivisions[".exportFormatting"] = 2;
$tdatadivisions[".exportDelimiter"] = ",";
		
$tdatadivisions[".inlineAdd"] = true;
$tdatadivisions[".view"] = true;

$tdatadivisions[".import"] = true;

$tdatadivisions[".exportTo"] = true;

$tdatadivisions[".printFriendly"] = true;

$tdatadivisions[".delete"] = true;

$tdatadivisions[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadivisions[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatadivisions[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatadivisions[".searchSaving"] = false;
//

$tdatadivisions[".showSearchPanel"] = true;
		$tdatadivisions[".flexibleSearch"] = true;

$tdatadivisions[".isUseAjaxSuggest"] = true;

$tdatadivisions[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																		

$tdatadivisions[".ajaxCodeSnippetAdded"] = false;

$tdatadivisions[".buttonsAdded"] = false;

$tdatadivisions[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadivisions[".isUseTimeForSearch"] = false;





$tdatadivisions[".allSearchFields"] = array();
$tdatadivisions[".filterFields"] = array();
$tdatadivisions[".requiredSearchFields"] = array();

$tdatadivisions[".allSearchFields"][] = "DvID";
	$tdatadivisions[".allSearchFields"][] = "Division";
	$tdatadivisions[".allSearchFields"][] = "MontlyPaymentPeriods";
	$tdatadivisions[".allSearchFields"][] = "StatutoryPayment";
	$tdatadivisions[".allSearchFields"][] = "MinimumMonhtlyWage";
	$tdatadivisions[".allSearchFields"][] = "MinimumDailyWage";
	

$tdatadivisions[".googleLikeFields"] = array();
$tdatadivisions[".googleLikeFields"][] = "DvID";
$tdatadivisions[".googleLikeFields"][] = "Division";
$tdatadivisions[".googleLikeFields"][] = "MontlyPaymentPeriods";
$tdatadivisions[".googleLikeFields"][] = "StatutoryPayment";
$tdatadivisions[".googleLikeFields"][] = "MinimumMonhtlyWage";
$tdatadivisions[".googleLikeFields"][] = "MinimumDailyWage";


$tdatadivisions[".advSearchFields"] = array();
$tdatadivisions[".advSearchFields"][] = "DvID";
$tdatadivisions[".advSearchFields"][] = "Division";
$tdatadivisions[".advSearchFields"][] = "MontlyPaymentPeriods";
$tdatadivisions[".advSearchFields"][] = "StatutoryPayment";
$tdatadivisions[".advSearchFields"][] = "MinimumMonhtlyWage";
$tdatadivisions[".advSearchFields"][] = "MinimumDailyWage";

$tdatadivisions[".tableType"] = "list";

$tdatadivisions[".printerPageOrientation"] = 0;
$tdatadivisions[".nPrinterPageScale"] = 100;

$tdatadivisions[".nPrinterSplitRecords"] = 40;

$tdatadivisions[".nPrinterPDFSplitRecords"] = 40;



$tdatadivisions[".geocodingEnabled"] = false;





$tdatadivisions[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatadivisions[".pageSize"] = 20;

$tdatadivisions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadivisions[".strOrderBy"] = $tstrOrderBy;

$tdatadivisions[".orderindexes"] = array();

$tdatadivisions[".sqlHead"] = "SELECT DvID,  	Division,  	MontlyPaymentPeriods,  	StatutoryPayment,  	MinimumMonhtlyWage,  	MinimumDailyWage";
$tdatadivisions[".sqlFrom"] = "FROM divisions";
$tdatadivisions[".sqlWhereExpr"] = "";
$tdatadivisions[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadivisions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadivisions[".arrGroupsPerPage"] = $arrGPP;

$tdatadivisions[".highlightSearchResults"] = true;

$tableKeysdivisions = array();
$tableKeysdivisions[] = "DvID";
$tdatadivisions[".Keys"] = $tableKeysdivisions;

$tdatadivisions[".listFields"] = array();
$tdatadivisions[".listFields"][] = "DvID";
$tdatadivisions[".listFields"][] = "Division";
$tdatadivisions[".listFields"][] = "MontlyPaymentPeriods";
$tdatadivisions[".listFields"][] = "StatutoryPayment";
$tdatadivisions[".listFields"][] = "MinimumMonhtlyWage";
$tdatadivisions[".listFields"][] = "MinimumDailyWage";

$tdatadivisions[".hideMobileList"] = array();


$tdatadivisions[".viewFields"] = array();
$tdatadivisions[".viewFields"][] = "DvID";
$tdatadivisions[".viewFields"][] = "Division";
$tdatadivisions[".viewFields"][] = "MontlyPaymentPeriods";
$tdatadivisions[".viewFields"][] = "StatutoryPayment";
$tdatadivisions[".viewFields"][] = "MinimumMonhtlyWage";
$tdatadivisions[".viewFields"][] = "MinimumDailyWage";

$tdatadivisions[".addFields"] = array();
$tdatadivisions[".addFields"][] = "Division";
$tdatadivisions[".addFields"][] = "MontlyPaymentPeriods";
$tdatadivisions[".addFields"][] = "StatutoryPayment";
$tdatadivisions[".addFields"][] = "MinimumMonhtlyWage";
$tdatadivisions[".addFields"][] = "MinimumDailyWage";

$tdatadivisions[".masterListFields"] = array();
$tdatadivisions[".masterListFields"][] = "DvID";
$tdatadivisions[".masterListFields"][] = "Division";
$tdatadivisions[".masterListFields"][] = "MontlyPaymentPeriods";
$tdatadivisions[".masterListFields"][] = "StatutoryPayment";
$tdatadivisions[".masterListFields"][] = "MinimumMonhtlyWage";
$tdatadivisions[".masterListFields"][] = "MinimumDailyWage";

$tdatadivisions[".inlineAddFields"] = array();
$tdatadivisions[".inlineAddFields"][] = "Division";
$tdatadivisions[".inlineAddFields"][] = "MontlyPaymentPeriods";
$tdatadivisions[".inlineAddFields"][] = "StatutoryPayment";
$tdatadivisions[".inlineAddFields"][] = "MinimumMonhtlyWage";
$tdatadivisions[".inlineAddFields"][] = "MinimumDailyWage";

$tdatadivisions[".editFields"] = array();
$tdatadivisions[".editFields"][] = "Division";
$tdatadivisions[".editFields"][] = "MontlyPaymentPeriods";
$tdatadivisions[".editFields"][] = "StatutoryPayment";
$tdatadivisions[".editFields"][] = "MinimumMonhtlyWage";
$tdatadivisions[".editFields"][] = "MinimumDailyWage";

$tdatadivisions[".inlineEditFields"] = array();
$tdatadivisions[".inlineEditFields"][] = "Division";
$tdatadivisions[".inlineEditFields"][] = "MontlyPaymentPeriods";
$tdatadivisions[".inlineEditFields"][] = "StatutoryPayment";
$tdatadivisions[".inlineEditFields"][] = "MinimumMonhtlyWage";
$tdatadivisions[".inlineEditFields"][] = "MinimumDailyWage";

$tdatadivisions[".updateSelectedFields"] = array();
$tdatadivisions[".updateSelectedFields"][] = "Division";
$tdatadivisions[".updateSelectedFields"][] = "MontlyPaymentPeriods";
$tdatadivisions[".updateSelectedFields"][] = "StatutoryPayment";


$tdatadivisions[".exportFields"] = array();
$tdatadivisions[".exportFields"][] = "DvID";
$tdatadivisions[".exportFields"][] = "Division";
$tdatadivisions[".exportFields"][] = "MontlyPaymentPeriods";
$tdatadivisions[".exportFields"][] = "StatutoryPayment";
$tdatadivisions[".exportFields"][] = "MinimumMonhtlyWage";
$tdatadivisions[".exportFields"][] = "MinimumDailyWage";

$tdatadivisions[".importFields"] = array();
$tdatadivisions[".importFields"][] = "DvID";
$tdatadivisions[".importFields"][] = "Division";
$tdatadivisions[".importFields"][] = "MontlyPaymentPeriods";
$tdatadivisions[".importFields"][] = "StatutoryPayment";
$tdatadivisions[".importFields"][] = "MinimumMonhtlyWage";
$tdatadivisions[".importFields"][] = "MinimumDailyWage";

$tdatadivisions[".printFields"] = array();
$tdatadivisions[".printFields"][] = "DvID";
$tdatadivisions[".printFields"][] = "Division";
$tdatadivisions[".printFields"][] = "MontlyPaymentPeriods";
$tdatadivisions[".printFields"][] = "StatutoryPayment";
$tdatadivisions[".printFields"][] = "MinimumMonhtlyWage";
$tdatadivisions[".printFields"][] = "MinimumDailyWage";


//	DvID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DvID";
	$fdata["GoodName"] = "DvID";
	$fdata["ownerTable"] = "divisions";
	$fdata["Label"] = GetFieldLabel("divisions","DvID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DvID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DvID";

	
	
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




	$tdatadivisions["DvID"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "divisions";
	$fdata["Label"] = GetFieldLabel("divisions","Division");
	$fdata["FieldType"] = 200;

	
	
	
			
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

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

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




	$tdatadivisions["Division"] = $fdata;
//	MontlyPaymentPeriods
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MontlyPaymentPeriods";
	$fdata["GoodName"] = "MontlyPaymentPeriods";
	$fdata["ownerTable"] = "divisions";
	$fdata["Label"] = GetFieldLabel("divisions","MontlyPaymentPeriods");
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

		$fdata["strField"] = "MontlyPaymentPeriods";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MontlyPaymentPeriods";

	
	
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




	$tdatadivisions["MontlyPaymentPeriods"] = $fdata;
//	StatutoryPayment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "StatutoryPayment";
	$fdata["GoodName"] = "StatutoryPayment";
	$fdata["ownerTable"] = "divisions";
	$fdata["Label"] = GetFieldLabel("divisions","StatutoryPayment");
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

		$fdata["strField"] = "StatutoryPayment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "StatutoryPayment";

	
	
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
	$edata["LookupTable"] = "statpay";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "SpID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "StatutoryPayment";
	
	

	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadivisions["StatutoryPayment"] = $fdata;
//	MinimumMonhtlyWage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MinimumMonhtlyWage";
	$fdata["GoodName"] = "MinimumMonhtlyWage";
	$fdata["ownerTable"] = "divisions";
	$fdata["Label"] = GetFieldLabel("divisions","MinimumMonhtlyWage");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MinimumMonhtlyWage";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MinimumMonhtlyWage";

	
	
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




	$tdatadivisions["MinimumMonhtlyWage"] = $fdata;
//	MinimumDailyWage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "MinimumDailyWage";
	$fdata["GoodName"] = "MinimumDailyWage";
	$fdata["ownerTable"] = "divisions";
	$fdata["Label"] = GetFieldLabel("divisions","MinimumDailyWage");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MinimumDailyWage";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MinimumDailyWage";

	
	
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




	$tdatadivisions["MinimumDailyWage"] = $fdata;


$tables_data["divisions"]=&$tdatadivisions;
$field_labels["divisions"] = &$fieldLabelsdivisions;
$fieldToolTips["divisions"] = &$fieldToolTipsdivisions;
$placeHolders["divisions"] = &$placeHoldersdivisions;
$page_titles["divisions"] = &$pageTitlesdivisions;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["divisions"] = array();
//	holidays
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="holidays";
		$detailsParam["dOriginalTable"] = "holidays";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "holidays";
	$detailsParam["dCaptionTable"] = GetTableCaption("holidays");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["divisions"][$dIndex] = $detailsParam;

	
		$detailsTablesData["divisions"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["divisions"][$dIndex]["masterKeys"][]="DvID";

				$detailsTablesData["divisions"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["divisions"][$dIndex]["detailKeys"][]="Division";

// tables which are master tables for current table (detail)
$masterTablesData["divisions"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_divisions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DvID,  	Division,  	MontlyPaymentPeriods,  	StatutoryPayment,  	MinimumMonhtlyWage,  	MinimumDailyWage";
$proto0["m_strFrom"] = "FROM divisions";
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
	"m_strName" => "DvID",
	"m_strTable" => "divisions",
	"m_srcTableName" => "divisions"
));

$proto6["m_sql"] = "DvID";
$proto6["m_srcTableName"] = "divisions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "divisions",
	"m_srcTableName" => "divisions"
));

$proto8["m_sql"] = "Division";
$proto8["m_srcTableName"] = "divisions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MontlyPaymentPeriods",
	"m_strTable" => "divisions",
	"m_srcTableName" => "divisions"
));

$proto10["m_sql"] = "MontlyPaymentPeriods";
$proto10["m_srcTableName"] = "divisions";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "StatutoryPayment",
	"m_strTable" => "divisions",
	"m_srcTableName" => "divisions"
));

$proto12["m_sql"] = "StatutoryPayment";
$proto12["m_srcTableName"] = "divisions";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "MinimumMonhtlyWage",
	"m_strTable" => "divisions",
	"m_srcTableName" => "divisions"
));

$proto14["m_sql"] = "MinimumMonhtlyWage";
$proto14["m_srcTableName"] = "divisions";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "MinimumDailyWage",
	"m_strTable" => "divisions",
	"m_srcTableName" => "divisions"
));

$proto16["m_sql"] = "MinimumDailyWage";
$proto16["m_srcTableName"] = "divisions";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "divisions";
$proto19["m_srcTableName"] = "divisions";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "DvID";
$proto19["m_columns"][] = "Division";
$proto19["m_columns"][] = "MontlyPaymentPeriods";
$proto19["m_columns"][] = "StatutoryPayment";
$proto19["m_columns"][] = "MinimumMonhtlyWage";
$proto19["m_columns"][] = "MinimumDailyWage";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "divisions";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "divisions";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="divisions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_divisions = createSqlQuery_divisions();


	
		;

						

$tdatadivisions[".sqlquery"] = $queryData_divisions;

$tableEvents["divisions"] = new eventsBase;
$tdatadivisions[".hasEvents"] = false;

?>