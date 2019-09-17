<?php
require_once(getabspath("classes/cipherer.php"));




$tdataempdeminimis = array();
	$tdataempdeminimis[".truncateText"] = true;
	$tdataempdeminimis[".NumberOfChars"] = 80;
	$tdataempdeminimis[".ShortName"] = "empdeminimis";
	$tdataempdeminimis[".OwnerID"] = "";
	$tdataempdeminimis[".OriginalTable"] = "empdeminimis";

//	field labels
$fieldLabelsempdeminimis = array();
$fieldToolTipsempdeminimis = array();
$pageTitlesempdeminimis = array();
$placeHoldersempdeminimis = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsempdeminimis["English"] = array();
	$fieldToolTipsempdeminimis["English"] = array();
	$placeHoldersempdeminimis["English"] = array();
	$pageTitlesempdeminimis["English"] = array();
	$fieldLabelsempdeminimis["English"]["DmID"] = "Dm ID";
	$fieldToolTipsempdeminimis["English"]["DmID"] = "";
	$placeHoldersempdeminimis["English"]["DmID"] = "";
	$fieldLabelsempdeminimis["English"]["DeMinimis"] = "De Minimis";
	$fieldToolTipsempdeminimis["English"]["DeMinimis"] = "";
	$placeHoldersempdeminimis["English"]["DeMinimis"] = "";
	$fieldLabelsempdeminimis["English"]["Amount"] = "Amount";
	$fieldToolTipsempdeminimis["English"]["Amount"] = "";
	$placeHoldersempdeminimis["English"]["Amount"] = "";
	$fieldLabelsempdeminimis["English"]["LevID"] = "Lev ID";
	$fieldToolTipsempdeminimis["English"]["LevID"] = "";
	$placeHoldersempdeminimis["English"]["LevID"] = "";
	if (count($fieldToolTipsempdeminimis["English"]))
		$tdataempdeminimis[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsempdeminimis[""] = array();
	$fieldToolTipsempdeminimis[""] = array();
	$placeHoldersempdeminimis[""] = array();
	$pageTitlesempdeminimis[""] = array();
	if (count($fieldToolTipsempdeminimis[""]))
		$tdataempdeminimis[".isUseToolTips"] = true;
}


	$tdataempdeminimis[".NCSearch"] = true;



$tdataempdeminimis[".shortTableName"] = "empdeminimis";
$tdataempdeminimis[".nSecOptions"] = 0;
$tdataempdeminimis[".recsPerRowPrint"] = 1;
$tdataempdeminimis[".mainTableOwnerID"] = "";
$tdataempdeminimis[".moveNext"] = 1;
$tdataempdeminimis[".entityType"] = 0;

$tdataempdeminimis[".strOriginalTableName"] = "empdeminimis";

	



$tdataempdeminimis[".showAddInPopup"] = false;

$tdataempdeminimis[".showEditInPopup"] = false;

$tdataempdeminimis[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataempdeminimis[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataempdeminimis[".fieldsForRegister"] = array();

$tdataempdeminimis[".listAjax"] = false;

	$tdataempdeminimis[".audit"] = false;

	$tdataempdeminimis[".locking"] = false;

$tdataempdeminimis[".edit"] = true;
$tdataempdeminimis[".afterEditAction"] = 1;
$tdataempdeminimis[".closePopupAfterEdit"] = 1;
$tdataempdeminimis[".afterEditActionDetTable"] = "";

$tdataempdeminimis[".add"] = true;
$tdataempdeminimis[".afterAddAction"] = 1;
$tdataempdeminimis[".closePopupAfterAdd"] = 1;
$tdataempdeminimis[".afterAddActionDetTable"] = "";

$tdataempdeminimis[".list"] = true;



$tdataempdeminimis[".reorderRecordsByHeader"] = true;


$tdataempdeminimis[".exportFormatting"] = 2;
$tdataempdeminimis[".exportDelimiter"] = ",";
		
$tdataempdeminimis[".view"] = true;

$tdataempdeminimis[".import"] = true;

$tdataempdeminimis[".exportTo"] = true;

$tdataempdeminimis[".printFriendly"] = true;

$tdataempdeminimis[".delete"] = true;

$tdataempdeminimis[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataempdeminimis[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataempdeminimis[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataempdeminimis[".searchSaving"] = false;
//

$tdataempdeminimis[".showSearchPanel"] = true;
		$tdataempdeminimis[".flexibleSearch"] = true;

$tdataempdeminimis[".isUseAjaxSuggest"] = true;

$tdataempdeminimis[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																				

$tdataempdeminimis[".ajaxCodeSnippetAdded"] = false;

$tdataempdeminimis[".buttonsAdded"] = false;

$tdataempdeminimis[".addPageEvents"] = false;

// use timepicker for search panel
$tdataempdeminimis[".isUseTimeForSearch"] = false;



$tdataempdeminimis[".badgeColor"] = "dc143c";


$tdataempdeminimis[".allSearchFields"] = array();
$tdataempdeminimis[".filterFields"] = array();
$tdataempdeminimis[".requiredSearchFields"] = array();

$tdataempdeminimis[".allSearchFields"][] = "DmID";
	$tdataempdeminimis[".allSearchFields"][] = "DeMinimis";
	$tdataempdeminimis[".allSearchFields"][] = "Amount";
	$tdataempdeminimis[".allSearchFields"][] = "LevID";
	

$tdataempdeminimis[".googleLikeFields"] = array();
$tdataempdeminimis[".googleLikeFields"][] = "DmID";
$tdataempdeminimis[".googleLikeFields"][] = "DeMinimis";
$tdataempdeminimis[".googleLikeFields"][] = "Amount";
$tdataempdeminimis[".googleLikeFields"][] = "LevID";


$tdataempdeminimis[".advSearchFields"] = array();
$tdataempdeminimis[".advSearchFields"][] = "DmID";
$tdataempdeminimis[".advSearchFields"][] = "DeMinimis";
$tdataempdeminimis[".advSearchFields"][] = "Amount";
$tdataempdeminimis[".advSearchFields"][] = "LevID";

$tdataempdeminimis[".tableType"] = "list";

$tdataempdeminimis[".printerPageOrientation"] = 0;
$tdataempdeminimis[".nPrinterPageScale"] = 100;

$tdataempdeminimis[".nPrinterSplitRecords"] = 40;

$tdataempdeminimis[".nPrinterPDFSplitRecords"] = 40;



$tdataempdeminimis[".geocodingEnabled"] = false;





$tdataempdeminimis[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataempdeminimis[".pageSize"] = 20;

$tdataempdeminimis[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataempdeminimis[".strOrderBy"] = $tstrOrderBy;

$tdataempdeminimis[".orderindexes"] = array();

$tdataempdeminimis[".sqlHead"] = "SELECT DmID,  	DeMinimis,  	Amount,  	LevID";
$tdataempdeminimis[".sqlFrom"] = "FROM empdeminimis";
$tdataempdeminimis[".sqlWhereExpr"] = "";
$tdataempdeminimis[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataempdeminimis[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataempdeminimis[".arrGroupsPerPage"] = $arrGPP;

$tdataempdeminimis[".highlightSearchResults"] = true;

$tableKeysempdeminimis = array();
$tableKeysempdeminimis[] = "DmID";
$tdataempdeminimis[".Keys"] = $tableKeysempdeminimis;

$tdataempdeminimis[".listFields"] = array();
$tdataempdeminimis[".listFields"][] = "DmID";
$tdataempdeminimis[".listFields"][] = "DeMinimis";
$tdataempdeminimis[".listFields"][] = "Amount";
$tdataempdeminimis[".listFields"][] = "LevID";

$tdataempdeminimis[".hideMobileList"] = array();


$tdataempdeminimis[".viewFields"] = array();
$tdataempdeminimis[".viewFields"][] = "DmID";
$tdataempdeminimis[".viewFields"][] = "DeMinimis";
$tdataempdeminimis[".viewFields"][] = "Amount";
$tdataempdeminimis[".viewFields"][] = "LevID";

$tdataempdeminimis[".addFields"] = array();
$tdataempdeminimis[".addFields"][] = "DeMinimis";
$tdataempdeminimis[".addFields"][] = "Amount";
$tdataempdeminimis[".addFields"][] = "LevID";

$tdataempdeminimis[".masterListFields"] = array();
$tdataempdeminimis[".masterListFields"][] = "DmID";
$tdataempdeminimis[".masterListFields"][] = "DeMinimis";
$tdataempdeminimis[".masterListFields"][] = "Amount";
$tdataempdeminimis[".masterListFields"][] = "LevID";

$tdataempdeminimis[".inlineAddFields"] = array();
$tdataempdeminimis[".inlineAddFields"][] = "DeMinimis";
$tdataempdeminimis[".inlineAddFields"][] = "Amount";
$tdataempdeminimis[".inlineAddFields"][] = "LevID";

$tdataempdeminimis[".editFields"] = array();
$tdataempdeminimis[".editFields"][] = "DeMinimis";
$tdataempdeminimis[".editFields"][] = "Amount";
$tdataempdeminimis[".editFields"][] = "LevID";

$tdataempdeminimis[".inlineEditFields"] = array();
$tdataempdeminimis[".inlineEditFields"][] = "DeMinimis";
$tdataempdeminimis[".inlineEditFields"][] = "Amount";
$tdataempdeminimis[".inlineEditFields"][] = "LevID";

$tdataempdeminimis[".updateSelectedFields"] = array();
$tdataempdeminimis[".updateSelectedFields"][] = "DeMinimis";
$tdataempdeminimis[".updateSelectedFields"][] = "Amount";
$tdataempdeminimis[".updateSelectedFields"][] = "LevID";


$tdataempdeminimis[".exportFields"] = array();
$tdataempdeminimis[".exportFields"][] = "DmID";
$tdataempdeminimis[".exportFields"][] = "DeMinimis";
$tdataempdeminimis[".exportFields"][] = "Amount";
$tdataempdeminimis[".exportFields"][] = "LevID";

$tdataempdeminimis[".importFields"] = array();
$tdataempdeminimis[".importFields"][] = "DmID";
$tdataempdeminimis[".importFields"][] = "DeMinimis";
$tdataempdeminimis[".importFields"][] = "Amount";
$tdataempdeminimis[".importFields"][] = "LevID";

$tdataempdeminimis[".printFields"] = array();
$tdataempdeminimis[".printFields"][] = "DmID";
$tdataempdeminimis[".printFields"][] = "DeMinimis";
$tdataempdeminimis[".printFields"][] = "Amount";
$tdataempdeminimis[".printFields"][] = "LevID";


//	DmID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DmID";
	$fdata["GoodName"] = "DmID";
	$fdata["ownerTable"] = "empdeminimis";
	$fdata["Label"] = GetFieldLabel("empdeminimis","DmID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DmID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DmID";

	
	
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




	$tdataempdeminimis["DmID"] = $fdata;
//	DeMinimis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DeMinimis";
	$fdata["GoodName"] = "DeMinimis";
	$fdata["ownerTable"] = "empdeminimis";
	$fdata["Label"] = GetFieldLabel("empdeminimis","DeMinimis");
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

		$fdata["strField"] = "DeMinimis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DeMinimis";

	
	
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
	
	

	
	$edata["LookupOrderBy"] = "AdjDescriptions";

	
	
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




	$tdataempdeminimis["DeMinimis"] = $fdata;
//	Amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Amount";
	$fdata["GoodName"] = "Amount";
	$fdata["ownerTable"] = "empdeminimis";
	$fdata["Label"] = GetFieldLabel("empdeminimis","Amount");
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




	$tdataempdeminimis["Amount"] = $fdata;
//	LevID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "LevID";
	$fdata["GoodName"] = "LevID";
	$fdata["ownerTable"] = "empdeminimis";
	$fdata["Label"] = GetFieldLabel("empdeminimis","LevID");
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

		$fdata["strField"] = "LevID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LevID";

	
	
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




	$tdataempdeminimis["LevID"] = $fdata;


$tables_data["empdeminimis"]=&$tdataempdeminimis;
$field_labels["empdeminimis"] = &$fieldLabelsempdeminimis;
$fieldToolTips["empdeminimis"] = &$fieldToolTipsempdeminimis;
$placeHolders["empdeminimis"] = &$placeHoldersempdeminimis;
$page_titles["empdeminimis"] = &$pageTitlesempdeminimis;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["empdeminimis"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["empdeminimis"] = array();


	
				$strOriginalDetailsTable="emplevels";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="emplevels";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "emplevels";
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
					$masterTablesData["empdeminimis"][0] = $masterParams;
				$masterTablesData["empdeminimis"][0]["masterKeys"] = array();
	$masterTablesData["empdeminimis"][0]["masterKeys"][]="LevID";
				$masterTablesData["empdeminimis"][0]["detailKeys"] = array();
	$masterTablesData["empdeminimis"][0]["detailKeys"][]="LevID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_empdeminimis()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DmID,  	DeMinimis,  	Amount,  	LevID";
$proto0["m_strFrom"] = "FROM empdeminimis";
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
	"m_strName" => "DmID",
	"m_strTable" => "empdeminimis",
	"m_srcTableName" => "empdeminimis"
));

$proto6["m_sql"] = "DmID";
$proto6["m_srcTableName"] = "empdeminimis";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DeMinimis",
	"m_strTable" => "empdeminimis",
	"m_srcTableName" => "empdeminimis"
));

$proto8["m_sql"] = "DeMinimis";
$proto8["m_srcTableName"] = "empdeminimis";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount",
	"m_strTable" => "empdeminimis",
	"m_srcTableName" => "empdeminimis"
));

$proto10["m_sql"] = "Amount";
$proto10["m_srcTableName"] = "empdeminimis";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "LevID",
	"m_strTable" => "empdeminimis",
	"m_srcTableName" => "empdeminimis"
));

$proto12["m_sql"] = "LevID";
$proto12["m_srcTableName"] = "empdeminimis";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "empdeminimis";
$proto15["m_srcTableName"] = "empdeminimis";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "DmID";
$proto15["m_columns"][] = "DeMinimis";
$proto15["m_columns"][] = "Amount";
$proto15["m_columns"][] = "LevID";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "empdeminimis";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "empdeminimis";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="empdeminimis";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_empdeminimis = createSqlQuery_empdeminimis();


	
		;

				

$tdataempdeminimis[".sqlquery"] = $queryData_empdeminimis;

$tableEvents["empdeminimis"] = new eventsBase;
$tdataempdeminimis[".hasEvents"] = false;

?>