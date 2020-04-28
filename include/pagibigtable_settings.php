<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapagibigtable = array();
	$tdatapagibigtable[".truncateText"] = true;
	$tdatapagibigtable[".NumberOfChars"] = 80;
	$tdatapagibigtable[".ShortName"] = "pagibigtable";
	$tdatapagibigtable[".OwnerID"] = "";
	$tdatapagibigtable[".OriginalTable"] = "pagibigtable";

//	field labels
$fieldLabelspagibigtable = array();
$fieldToolTipspagibigtable = array();
$pageTitlespagibigtable = array();
$placeHolderspagibigtable = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspagibigtable["English"] = array();
	$fieldToolTipspagibigtable["English"] = array();
	$placeHolderspagibigtable["English"] = array();
	$pageTitlespagibigtable["English"] = array();
	$fieldLabelspagibigtable["English"]["piID"] = "Pi ID";
	$fieldToolTipspagibigtable["English"]["piID"] = "";
	$placeHolderspagibigtable["English"]["piID"] = "";
	$fieldLabelspagibigtable["English"]["ER"] = "ER";
	$fieldToolTipspagibigtable["English"]["ER"] = "";
	$placeHolderspagibigtable["English"]["ER"] = "";
	$fieldLabelspagibigtable["English"]["EE"] = "EE";
	$fieldToolTipspagibigtable["English"]["EE"] = "";
	$placeHolderspagibigtable["English"]["EE"] = "";
	if (count($fieldToolTipspagibigtable["English"]))
		$tdatapagibigtable[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspagibigtable[""] = array();
	$fieldToolTipspagibigtable[""] = array();
	$placeHolderspagibigtable[""] = array();
	$pageTitlespagibigtable[""] = array();
	if (count($fieldToolTipspagibigtable[""]))
		$tdatapagibigtable[".isUseToolTips"] = true;
}


	$tdatapagibigtable[".NCSearch"] = true;



$tdatapagibigtable[".shortTableName"] = "pagibigtable";
$tdatapagibigtable[".nSecOptions"] = 0;
$tdatapagibigtable[".recsPerRowPrint"] = 1;
$tdatapagibigtable[".mainTableOwnerID"] = "";
$tdatapagibigtable[".moveNext"] = 1;
$tdatapagibigtable[".entityType"] = 0;

$tdatapagibigtable[".strOriginalTableName"] = "pagibigtable";

	



$tdatapagibigtable[".showAddInPopup"] = false;

$tdatapagibigtable[".showEditInPopup"] = false;

$tdatapagibigtable[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapagibigtable[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapagibigtable[".fieldsForRegister"] = array();

$tdatapagibigtable[".listAjax"] = false;

	$tdatapagibigtable[".audit"] = false;

	$tdatapagibigtable[".locking"] = false;

$tdatapagibigtable[".edit"] = true;
$tdatapagibigtable[".afterEditAction"] = 1;
$tdatapagibigtable[".closePopupAfterEdit"] = 1;
$tdatapagibigtable[".afterEditActionDetTable"] = "";

$tdatapagibigtable[".add"] = true;
$tdatapagibigtable[".afterAddAction"] = 1;
$tdatapagibigtable[".closePopupAfterAdd"] = 1;
$tdatapagibigtable[".afterAddActionDetTable"] = "";

$tdatapagibigtable[".list"] = true;

$tdatapagibigtable[".inlineEdit"] = true;

$tdatapagibigtable[".updateSelected"] = true;

$tdatapagibigtable[".reorderRecordsByHeader"] = true;


$tdatapagibigtable[".exportFormatting"] = 2;
$tdatapagibigtable[".exportDelimiter"] = ",";
		
$tdatapagibigtable[".inlineAdd"] = true;
$tdatapagibigtable[".copy"] = true;
$tdatapagibigtable[".view"] = true;

$tdatapagibigtable[".import"] = true;

$tdatapagibigtable[".exportTo"] = true;

$tdatapagibigtable[".printFriendly"] = true;

$tdatapagibigtable[".delete"] = true;

$tdatapagibigtable[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapagibigtable[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapagibigtable[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapagibigtable[".searchSaving"] = false;
//

$tdatapagibigtable[".showSearchPanel"] = true;
		$tdatapagibigtable[".flexibleSearch"] = true;

$tdatapagibigtable[".isUseAjaxSuggest"] = true;

$tdatapagibigtable[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdatapagibigtable[".ajaxCodeSnippetAdded"] = false;

$tdatapagibigtable[".buttonsAdded"] = false;

$tdatapagibigtable[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapagibigtable[".isUseTimeForSearch"] = false;





$tdatapagibigtable[".allSearchFields"] = array();
$tdatapagibigtable[".filterFields"] = array();
$tdatapagibigtable[".requiredSearchFields"] = array();

$tdatapagibigtable[".allSearchFields"][] = "piID";
	$tdatapagibigtable[".allSearchFields"][] = "ER";
	$tdatapagibigtable[".allSearchFields"][] = "EE";
	

$tdatapagibigtable[".googleLikeFields"] = array();
$tdatapagibigtable[".googleLikeFields"][] = "piID";
$tdatapagibigtable[".googleLikeFields"][] = "ER";
$tdatapagibigtable[".googleLikeFields"][] = "EE";


$tdatapagibigtable[".advSearchFields"] = array();
$tdatapagibigtable[".advSearchFields"][] = "piID";
$tdatapagibigtable[".advSearchFields"][] = "ER";
$tdatapagibigtable[".advSearchFields"][] = "EE";

$tdatapagibigtable[".tableType"] = "list";

$tdatapagibigtable[".printerPageOrientation"] = 0;
$tdatapagibigtable[".nPrinterPageScale"] = 100;

$tdatapagibigtable[".nPrinterSplitRecords"] = 40;

$tdatapagibigtable[".nPrinterPDFSplitRecords"] = 40;



$tdatapagibigtable[".geocodingEnabled"] = false;





$tdatapagibigtable[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatapagibigtable[".pageSize"] = 20;

$tdatapagibigtable[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapagibigtable[".strOrderBy"] = $tstrOrderBy;

$tdatapagibigtable[".orderindexes"] = array();

$tdatapagibigtable[".sqlHead"] = "SELECT piID,  	ER,  	EE";
$tdatapagibigtable[".sqlFrom"] = "FROM pagibigtable";
$tdatapagibigtable[".sqlWhereExpr"] = "";
$tdatapagibigtable[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapagibigtable[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapagibigtable[".arrGroupsPerPage"] = $arrGPP;

$tdatapagibigtable[".highlightSearchResults"] = true;

$tableKeyspagibigtable = array();
$tableKeyspagibigtable[] = "piID";
$tdatapagibigtable[".Keys"] = $tableKeyspagibigtable;

$tdatapagibigtable[".listFields"] = array();
$tdatapagibigtable[".listFields"][] = "piID";
$tdatapagibigtable[".listFields"][] = "ER";
$tdatapagibigtable[".listFields"][] = "EE";

$tdatapagibigtable[".hideMobileList"] = array();


$tdatapagibigtable[".viewFields"] = array();
$tdatapagibigtable[".viewFields"][] = "piID";
$tdatapagibigtable[".viewFields"][] = "ER";
$tdatapagibigtable[".viewFields"][] = "EE";

$tdatapagibigtable[".addFields"] = array();
$tdatapagibigtable[".addFields"][] = "ER";
$tdatapagibigtable[".addFields"][] = "EE";

$tdatapagibigtable[".masterListFields"] = array();
$tdatapagibigtable[".masterListFields"][] = "piID";
$tdatapagibigtable[".masterListFields"][] = "ER";
$tdatapagibigtable[".masterListFields"][] = "EE";

$tdatapagibigtable[".inlineAddFields"] = array();
$tdatapagibigtable[".inlineAddFields"][] = "ER";
$tdatapagibigtable[".inlineAddFields"][] = "EE";

$tdatapagibigtable[".editFields"] = array();
$tdatapagibigtable[".editFields"][] = "ER";
$tdatapagibigtable[".editFields"][] = "EE";

$tdatapagibigtable[".inlineEditFields"] = array();
$tdatapagibigtable[".inlineEditFields"][] = "ER";
$tdatapagibigtable[".inlineEditFields"][] = "EE";

$tdatapagibigtable[".updateSelectedFields"] = array();
$tdatapagibigtable[".updateSelectedFields"][] = "ER";
$tdatapagibigtable[".updateSelectedFields"][] = "EE";


$tdatapagibigtable[".exportFields"] = array();
$tdatapagibigtable[".exportFields"][] = "piID";
$tdatapagibigtable[".exportFields"][] = "ER";
$tdatapagibigtable[".exportFields"][] = "EE";

$tdatapagibigtable[".importFields"] = array();
$tdatapagibigtable[".importFields"][] = "piID";
$tdatapagibigtable[".importFields"][] = "ER";
$tdatapagibigtable[".importFields"][] = "EE";

$tdatapagibigtable[".printFields"] = array();
$tdatapagibigtable[".printFields"][] = "piID";
$tdatapagibigtable[".printFields"][] = "ER";
$tdatapagibigtable[".printFields"][] = "EE";


//	piID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "piID";
	$fdata["GoodName"] = "piID";
	$fdata["ownerTable"] = "pagibigtable";
	$fdata["Label"] = GetFieldLabel("pagibigtable","piID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "piID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "piID";

	
	
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




	$tdatapagibigtable["piID"] = $fdata;
//	ER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ER";
	$fdata["GoodName"] = "ER";
	$fdata["ownerTable"] = "pagibigtable";
	$fdata["Label"] = GetFieldLabel("pagibigtable","ER");
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

		$fdata["strField"] = "ER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ER";

	
	
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




	$tdatapagibigtable["ER"] = $fdata;
//	EE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EE";
	$fdata["GoodName"] = "EE";
	$fdata["ownerTable"] = "pagibigtable";
	$fdata["Label"] = GetFieldLabel("pagibigtable","EE");
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

		$fdata["strField"] = "EE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EE";

	
	
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




	$tdatapagibigtable["EE"] = $fdata;


$tables_data["pagibigtable"]=&$tdatapagibigtable;
$field_labels["pagibigtable"] = &$fieldLabelspagibigtable;
$fieldToolTips["pagibigtable"] = &$fieldToolTipspagibigtable;
$placeHolders["pagibigtable"] = &$placeHolderspagibigtable;
$page_titles["pagibigtable"] = &$pageTitlespagibigtable;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pagibigtable"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["pagibigtable"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pagibigtable()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "piID,  	ER,  	EE";
$proto0["m_strFrom"] = "FROM pagibigtable";
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
	"m_strName" => "piID",
	"m_strTable" => "pagibigtable",
	"m_srcTableName" => "pagibigtable"
));

$proto6["m_sql"] = "piID";
$proto6["m_srcTableName"] = "pagibigtable";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ER",
	"m_strTable" => "pagibigtable",
	"m_srcTableName" => "pagibigtable"
));

$proto8["m_sql"] = "ER";
$proto8["m_srcTableName"] = "pagibigtable";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "EE",
	"m_strTable" => "pagibigtable",
	"m_srcTableName" => "pagibigtable"
));

$proto10["m_sql"] = "EE";
$proto10["m_srcTableName"] = "pagibigtable";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "pagibigtable";
$proto13["m_srcTableName"] = "pagibigtable";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "piID";
$proto13["m_columns"][] = "ER";
$proto13["m_columns"][] = "EE";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "pagibigtable";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "pagibigtable";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pagibigtable";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pagibigtable = createSqlQuery_pagibigtable();


	
		;

			

$tdatapagibigtable[".sqlquery"] = $queryData_pagibigtable;

$tableEvents["pagibigtable"] = new eventsBase;
$tdatapagibigtable[".hasEvents"] = false;

?>