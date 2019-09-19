<?php
require_once(getabspath("classes/cipherer.php"));




$tdataloansreport = array();
	$tdataloansreport[".truncateText"] = true;
	$tdataloansreport[".NumberOfChars"] = 80;
	$tdataloansreport[".ShortName"] = "loansreport";
	$tdataloansreport[".OwnerID"] = "PreparedBy";
	$tdataloansreport[".OriginalTable"] = "loansreport";

//	field labels
$fieldLabelsloansreport = array();
$fieldToolTipsloansreport = array();
$pageTitlesloansreport = array();
$placeHoldersloansreport = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsloansreport["English"] = array();
	$fieldToolTipsloansreport["English"] = array();
	$placeHoldersloansreport["English"] = array();
	$pageTitlesloansreport["English"] = array();
	$fieldLabelsloansreport["English"]["lrID"] = "Lr ID";
	$fieldToolTipsloansreport["English"]["lrID"] = "";
	$placeHoldersloansreport["English"]["lrID"] = "";
	$fieldLabelsloansreport["English"]["Employer"] = "Employer";
	$fieldToolTipsloansreport["English"]["Employer"] = "";
	$placeHoldersloansreport["English"]["Employer"] = "";
	$fieldLabelsloansreport["English"]["LoanType"] = "Loan Type";
	$fieldToolTipsloansreport["English"]["LoanType"] = "";
	$placeHoldersloansreport["English"]["LoanType"] = "";
	$fieldLabelsloansreport["English"]["FromDate"] = "From Date";
	$fieldToolTipsloansreport["English"]["FromDate"] = "";
	$placeHoldersloansreport["English"]["FromDate"] = "";
	$fieldLabelsloansreport["English"]["ToDate"] = "To Date";
	$fieldToolTipsloansreport["English"]["ToDate"] = "";
	$placeHoldersloansreport["English"]["ToDate"] = "";
	$fieldLabelsloansreport["English"]["PreparedBy"] = "Prepared By";
	$fieldToolTipsloansreport["English"]["PreparedBy"] = "";
	$placeHoldersloansreport["English"]["PreparedBy"] = "";
	$fieldLabelsloansreport["English"]["PSID"] = "PSID";
	$fieldToolTipsloansreport["English"]["PSID"] = "";
	$placeHoldersloansreport["English"]["PSID"] = "";
	if (count($fieldToolTipsloansreport["English"]))
		$tdataloansreport[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsloansreport[""] = array();
	$fieldToolTipsloansreport[""] = array();
	$placeHoldersloansreport[""] = array();
	$pageTitlesloansreport[""] = array();
	if (count($fieldToolTipsloansreport[""]))
		$tdataloansreport[".isUseToolTips"] = true;
}


	$tdataloansreport[".NCSearch"] = true;



$tdataloansreport[".shortTableName"] = "loansreport";
$tdataloansreport[".nSecOptions"] = 2;
$tdataloansreport[".recsPerRowPrint"] = 1;
$tdataloansreport[".mainTableOwnerID"] = "PreparedBy";
$tdataloansreport[".moveNext"] = 1;
$tdataloansreport[".entityType"] = 0;

$tdataloansreport[".strOriginalTableName"] = "loansreport";

	



$tdataloansreport[".showAddInPopup"] = false;

$tdataloansreport[".showEditInPopup"] = false;

$tdataloansreport[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataloansreport[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataloansreport[".fieldsForRegister"] = array();

$tdataloansreport[".listAjax"] = false;

	$tdataloansreport[".audit"] = false;

	$tdataloansreport[".locking"] = false;

$tdataloansreport[".edit"] = true;
$tdataloansreport[".afterEditAction"] = 1;
$tdataloansreport[".closePopupAfterEdit"] = 1;
$tdataloansreport[".afterEditActionDetTable"] = "";

$tdataloansreport[".add"] = true;
$tdataloansreport[".afterAddAction"] = 1;
$tdataloansreport[".closePopupAfterAdd"] = 1;
$tdataloansreport[".afterAddActionDetTable"] = "";

$tdataloansreport[".list"] = true;

$tdataloansreport[".inlineEdit"] = true;

$tdataloansreport[".updateSelected"] = true;

$tdataloansreport[".reorderRecordsByHeader"] = true;


$tdataloansreport[".exportFormatting"] = 2;
$tdataloansreport[".exportDelimiter"] = ",";
		
$tdataloansreport[".inlineAdd"] = true;
$tdataloansreport[".view"] = true;

$tdataloansreport[".import"] = true;

$tdataloansreport[".exportTo"] = true;

$tdataloansreport[".printFriendly"] = true;

$tdataloansreport[".delete"] = true;

$tdataloansreport[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataloansreport[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataloansreport[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataloansreport[".searchSaving"] = false;
//

$tdataloansreport[".showSearchPanel"] = true;
		$tdataloansreport[".flexibleSearch"] = true;

$tdataloansreport[".isUseAjaxSuggest"] = true;

$tdataloansreport[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																									
																																																																																																																																																																																																		

$tdataloansreport[".ajaxCodeSnippetAdded"] = false;

$tdataloansreport[".buttonsAdded"] = true;

$tdataloansreport[".addPageEvents"] = true;

// use timepicker for search panel
$tdataloansreport[".isUseTimeForSearch"] = false;



$tdataloansreport[".badgeColor"] = "bc8f8f";


$tdataloansreport[".allSearchFields"] = array();
$tdataloansreport[".filterFields"] = array();
$tdataloansreport[".requiredSearchFields"] = array();

$tdataloansreport[".allSearchFields"][] = "lrID";
	$tdataloansreport[".allSearchFields"][] = "Employer";
	$tdataloansreport[".allSearchFields"][] = "LoanType";
	$tdataloansreport[".allSearchFields"][] = "FromDate";
	$tdataloansreport[".allSearchFields"][] = "ToDate";
	$tdataloansreport[".allSearchFields"][] = "PreparedBy";
	$tdataloansreport[".allSearchFields"][] = "PSID";
	

$tdataloansreport[".googleLikeFields"] = array();
$tdataloansreport[".googleLikeFields"][] = "lrID";
$tdataloansreport[".googleLikeFields"][] = "Employer";
$tdataloansreport[".googleLikeFields"][] = "LoanType";
$tdataloansreport[".googleLikeFields"][] = "FromDate";
$tdataloansreport[".googleLikeFields"][] = "ToDate";
$tdataloansreport[".googleLikeFields"][] = "PSID";
$tdataloansreport[".googleLikeFields"][] = "PreparedBy";


$tdataloansreport[".advSearchFields"] = array();
$tdataloansreport[".advSearchFields"][] = "lrID";
$tdataloansreport[".advSearchFields"][] = "Employer";
$tdataloansreport[".advSearchFields"][] = "LoanType";
$tdataloansreport[".advSearchFields"][] = "FromDate";
$tdataloansreport[".advSearchFields"][] = "ToDate";
$tdataloansreport[".advSearchFields"][] = "PreparedBy";
$tdataloansreport[".advSearchFields"][] = "PSID";

$tdataloansreport[".tableType"] = "list";

$tdataloansreport[".printerPageOrientation"] = 0;
$tdataloansreport[".nPrinterPageScale"] = 100;

$tdataloansreport[".nPrinterSplitRecords"] = 40;

$tdataloansreport[".nPrinterPDFSplitRecords"] = 40;



$tdataloansreport[".geocodingEnabled"] = false;





$tdataloansreport[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataloansreport[".pageSize"] = 20;

$tdataloansreport[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataloansreport[".strOrderBy"] = $tstrOrderBy;

$tdataloansreport[".orderindexes"] = array();

$tdataloansreport[".sqlHead"] = "SELECT lrID,  	Employer,  	LoanType,  	FromDate,  	ToDate,  	PSID,  	PreparedBy";
$tdataloansreport[".sqlFrom"] = "FROM loansreport";
$tdataloansreport[".sqlWhereExpr"] = "";
$tdataloansreport[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataloansreport[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataloansreport[".arrGroupsPerPage"] = $arrGPP;

$tdataloansreport[".highlightSearchResults"] = true;

$tableKeysloansreport = array();
$tableKeysloansreport[] = "lrID";
$tdataloansreport[".Keys"] = $tableKeysloansreport;

$tdataloansreport[".listFields"] = array();
$tdataloansreport[".listFields"][] = "lrID";
$tdataloansreport[".listFields"][] = "Employer";
$tdataloansreport[".listFields"][] = "LoanType";
$tdataloansreport[".listFields"][] = "FromDate";
$tdataloansreport[".listFields"][] = "ToDate";
$tdataloansreport[".listFields"][] = "PreparedBy";
$tdataloansreport[".listFields"][] = "PSID";

$tdataloansreport[".hideMobileList"] = array();


$tdataloansreport[".viewFields"] = array();
$tdataloansreport[".viewFields"][] = "lrID";
$tdataloansreport[".viewFields"][] = "Employer";
$tdataloansreport[".viewFields"][] = "LoanType";
$tdataloansreport[".viewFields"][] = "FromDate";
$tdataloansreport[".viewFields"][] = "ToDate";
$tdataloansreport[".viewFields"][] = "PreparedBy";
$tdataloansreport[".viewFields"][] = "PSID";

$tdataloansreport[".addFields"] = array();
$tdataloansreport[".addFields"][] = "Employer";
$tdataloansreport[".addFields"][] = "LoanType";
$tdataloansreport[".addFields"][] = "FromDate";
$tdataloansreport[".addFields"][] = "ToDate";
$tdataloansreport[".addFields"][] = "PSID";

$tdataloansreport[".masterListFields"] = array();
$tdataloansreport[".masterListFields"][] = "lrID";
$tdataloansreport[".masterListFields"][] = "Employer";
$tdataloansreport[".masterListFields"][] = "LoanType";
$tdataloansreport[".masterListFields"][] = "FromDate";
$tdataloansreport[".masterListFields"][] = "ToDate";
$tdataloansreport[".masterListFields"][] = "PreparedBy";
$tdataloansreport[".masterListFields"][] = "PSID";

$tdataloansreport[".inlineAddFields"] = array();
$tdataloansreport[".inlineAddFields"][] = "Employer";
$tdataloansreport[".inlineAddFields"][] = "LoanType";
$tdataloansreport[".inlineAddFields"][] = "FromDate";
$tdataloansreport[".inlineAddFields"][] = "ToDate";
$tdataloansreport[".inlineAddFields"][] = "PSID";

$tdataloansreport[".editFields"] = array();
$tdataloansreport[".editFields"][] = "Employer";
$tdataloansreport[".editFields"][] = "LoanType";
$tdataloansreport[".editFields"][] = "FromDate";
$tdataloansreport[".editFields"][] = "ToDate";
$tdataloansreport[".editFields"][] = "PSID";

$tdataloansreport[".inlineEditFields"] = array();
$tdataloansreport[".inlineEditFields"][] = "Employer";
$tdataloansreport[".inlineEditFields"][] = "LoanType";
$tdataloansreport[".inlineEditFields"][] = "FromDate";
$tdataloansreport[".inlineEditFields"][] = "ToDate";
$tdataloansreport[".inlineEditFields"][] = "PSID";

$tdataloansreport[".updateSelectedFields"] = array();
$tdataloansreport[".updateSelectedFields"][] = "Employer";
$tdataloansreport[".updateSelectedFields"][] = "LoanType";
$tdataloansreport[".updateSelectedFields"][] = "FromDate";
$tdataloansreport[".updateSelectedFields"][] = "ToDate";
$tdataloansreport[".updateSelectedFields"][] = "PSID";


$tdataloansreport[".exportFields"] = array();
$tdataloansreport[".exportFields"][] = "lrID";
$tdataloansreport[".exportFields"][] = "Employer";
$tdataloansreport[".exportFields"][] = "LoanType";
$tdataloansreport[".exportFields"][] = "FromDate";
$tdataloansreport[".exportFields"][] = "ToDate";
$tdataloansreport[".exportFields"][] = "PreparedBy";
$tdataloansreport[".exportFields"][] = "PSID";

$tdataloansreport[".importFields"] = array();
$tdataloansreport[".importFields"][] = "lrID";
$tdataloansreport[".importFields"][] = "Employer";
$tdataloansreport[".importFields"][] = "LoanType";
$tdataloansreport[".importFields"][] = "FromDate";
$tdataloansreport[".importFields"][] = "ToDate";
$tdataloansreport[".importFields"][] = "PSID";
$tdataloansreport[".importFields"][] = "PreparedBy";

$tdataloansreport[".printFields"] = array();
$tdataloansreport[".printFields"][] = "lrID";
$tdataloansreport[".printFields"][] = "Employer";
$tdataloansreport[".printFields"][] = "LoanType";
$tdataloansreport[".printFields"][] = "FromDate";
$tdataloansreport[".printFields"][] = "ToDate";
$tdataloansreport[".printFields"][] = "PreparedBy";
$tdataloansreport[".printFields"][] = "PSID";


//	lrID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "lrID";
	$fdata["GoodName"] = "lrID";
	$fdata["ownerTable"] = "loansreport";
	$fdata["Label"] = GetFieldLabel("loansreport","lrID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "lrID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lrID";

	
	
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
		
		$edata["controlWidth"] = 112;

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




	$tdataloansreport["lrID"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "loansreport";
	$fdata["Label"] = GetFieldLabel("loansreport","Employer");
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
	
	

	
	$edata["LookupOrderBy"] = "EmployerName";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 292;

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




	$tdataloansreport["Employer"] = $fdata;
//	LoanType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LoanType";
	$fdata["GoodName"] = "LoanType";
	$fdata["ownerTable"] = "loansreport";
	$fdata["Label"] = GetFieldLabel("loansreport","LoanType");
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
	
	

	
	$edata["LookupOrderBy"] = "LoanDescription";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 252;

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




	$tdataloansreport["LoanType"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "loansreport";
	$fdata["Label"] = GetFieldLabel("loansreport","FromDate");
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

	
	
	
		$edata["controlWidth"] = 142;

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




	$tdataloansreport["FromDate"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "loansreport";
	$fdata["Label"] = GetFieldLabel("loansreport","ToDate");
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

	
	
	
		$edata["controlWidth"] = 142;

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




	$tdataloansreport["ToDate"] = $fdata;
//	PSID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PSID";
	$fdata["GoodName"] = "PSID";
	$fdata["ownerTable"] = "loansreport";
	$fdata["Label"] = GetFieldLabel("loansreport","PSID");
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

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 82;

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




	$tdataloansreport["PSID"] = $fdata;
//	PreparedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PreparedBy";
	$fdata["GoodName"] = "PreparedBy";
	$fdata["ownerTable"] = "loansreport";
	$fdata["Label"] = GetFieldLabel("loansreport","PreparedBy");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PreparedBy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PreparedBy";

	
	
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
	$edata["LookupTable"] = "logins";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "LogID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "FullName";
	
	

	
	$edata["LookupOrderBy"] = "FullName";

	
	
	
	

	
	
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




	$tdataloansreport["PreparedBy"] = $fdata;


$tables_data["loansreport"]=&$tdataloansreport;
$field_labels["loansreport"] = &$fieldLabelsloansreport;
$fieldToolTips["loansreport"] = &$fieldToolTipsloansreport;
$placeHolders["loansreport"] = &$placeHoldersloansreport;
$page_titles["loansreport"] = &$pageTitlesloansreport;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["loansreport"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["loansreport"] = array();


	
				$strOriginalDetailsTable="contlo";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contlo";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contlo";
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
					$masterTablesData["loansreport"][0] = $masterParams;
				$masterTablesData["loansreport"][0]["masterKeys"] = array();
	$masterTablesData["loansreport"][0]["masterKeys"][]="FromDate";
				$masterTablesData["loansreport"][0]["masterKeys"][]="ToDate";
				$masterTablesData["loansreport"][0]["detailKeys"] = array();
	$masterTablesData["loansreport"][0]["detailKeys"][]="FromDate";
				$masterTablesData["loansreport"][0]["detailKeys"][]="ToDate";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_loansreport()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "lrID,  	Employer,  	LoanType,  	FromDate,  	ToDate,  	PSID,  	PreparedBy";
$proto0["m_strFrom"] = "FROM loansreport";
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
	"m_strName" => "lrID",
	"m_strTable" => "loansreport",
	"m_srcTableName" => "loansreport"
));

$proto6["m_sql"] = "lrID";
$proto6["m_srcTableName"] = "loansreport";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "loansreport",
	"m_srcTableName" => "loansreport"
));

$proto8["m_sql"] = "Employer";
$proto8["m_srcTableName"] = "loansreport";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanType",
	"m_strTable" => "loansreport",
	"m_srcTableName" => "loansreport"
));

$proto10["m_sql"] = "LoanType";
$proto10["m_srcTableName"] = "loansreport";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "loansreport",
	"m_srcTableName" => "loansreport"
));

$proto12["m_sql"] = "FromDate";
$proto12["m_srcTableName"] = "loansreport";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "loansreport",
	"m_srcTableName" => "loansreport"
));

$proto14["m_sql"] = "ToDate";
$proto14["m_srcTableName"] = "loansreport";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PSID",
	"m_strTable" => "loansreport",
	"m_srcTableName" => "loansreport"
));

$proto16["m_sql"] = "PSID";
$proto16["m_srcTableName"] = "loansreport";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PreparedBy",
	"m_strTable" => "loansreport",
	"m_srcTableName" => "loansreport"
));

$proto18["m_sql"] = "PreparedBy";
$proto18["m_srcTableName"] = "loansreport";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "loansreport";
$proto21["m_srcTableName"] = "loansreport";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "lrID";
$proto21["m_columns"][] = "Employer";
$proto21["m_columns"][] = "LoanType";
$proto21["m_columns"][] = "FromDate";
$proto21["m_columns"][] = "ToDate";
$proto21["m_columns"][] = "PSID";
$proto21["m_columns"][] = "PreparedBy";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "loansreport";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "loansreport";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="loansreport";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_loansreport = createSqlQuery_loansreport();


	
		;

							

$tdataloansreport[".sqlquery"] = $queryData_loansreport;

include_once(getabspath("include/loansreport_events.php"));
$tableEvents["loansreport"] = new eventclass_loansreport;
$tdataloansreport[".hasEvents"] = true;

?>