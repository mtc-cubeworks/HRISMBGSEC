<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamoduletable = array();
	$tdatamoduletable[".truncateText"] = true;
	$tdatamoduletable[".NumberOfChars"] = 80;
	$tdatamoduletable[".ShortName"] = "moduletable";
	$tdatamoduletable[".OwnerID"] = "";
	$tdatamoduletable[".OriginalTable"] = "moduletable";

//	field labels
$fieldLabelsmoduletable = array();
$fieldToolTipsmoduletable = array();
$pageTitlesmoduletable = array();
$placeHoldersmoduletable = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmoduletable["English"] = array();
	$fieldToolTipsmoduletable["English"] = array();
	$placeHoldersmoduletable["English"] = array();
	$pageTitlesmoduletable["English"] = array();
	$fieldLabelsmoduletable["English"]["ID"] = "ID";
	$fieldToolTipsmoduletable["English"]["ID"] = "";
	$placeHoldersmoduletable["English"]["ID"] = "";
	$fieldLabelsmoduletable["English"]["Table"] = "Table";
	$fieldToolTipsmoduletable["English"]["Table"] = "";
	$placeHoldersmoduletable["English"]["Table"] = "";
	if (count($fieldToolTipsmoduletable["English"]))
		$tdatamoduletable[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmoduletable[""] = array();
	$fieldToolTipsmoduletable[""] = array();
	$placeHoldersmoduletable[""] = array();
	$pageTitlesmoduletable[""] = array();
	if (count($fieldToolTipsmoduletable[""]))
		$tdatamoduletable[".isUseToolTips"] = true;
}


	$tdatamoduletable[".NCSearch"] = true;



$tdatamoduletable[".shortTableName"] = "moduletable";
$tdatamoduletable[".nSecOptions"] = 0;
$tdatamoduletable[".recsPerRowPrint"] = 1;
$tdatamoduletable[".mainTableOwnerID"] = "";
$tdatamoduletable[".moveNext"] = 1;
$tdatamoduletable[".entityType"] = 0;

$tdatamoduletable[".strOriginalTableName"] = "moduletable";

	



$tdatamoduletable[".showAddInPopup"] = false;

$tdatamoduletable[".showEditInPopup"] = false;

$tdatamoduletable[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamoduletable[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamoduletable[".fieldsForRegister"] = array();

$tdatamoduletable[".listAjax"] = false;

	$tdatamoduletable[".audit"] = false;

	$tdatamoduletable[".locking"] = false;

$tdatamoduletable[".edit"] = true;
$tdatamoduletable[".afterEditAction"] = 1;
$tdatamoduletable[".closePopupAfterEdit"] = 1;
$tdatamoduletable[".afterEditActionDetTable"] = "";

$tdatamoduletable[".add"] = true;
$tdatamoduletable[".afterAddAction"] = 1;
$tdatamoduletable[".closePopupAfterAdd"] = 1;
$tdatamoduletable[".afterAddActionDetTable"] = "";

$tdatamoduletable[".list"] = true;



$tdatamoduletable[".reorderRecordsByHeader"] = true;


$tdatamoduletable[".exportFormatting"] = 2;
$tdatamoduletable[".exportDelimiter"] = ",";
		
$tdatamoduletable[".view"] = true;

$tdatamoduletable[".import"] = true;

$tdatamoduletable[".exportTo"] = true;

$tdatamoduletable[".printFriendly"] = true;

$tdatamoduletable[".delete"] = true;

$tdatamoduletable[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamoduletable[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamoduletable[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamoduletable[".searchSaving"] = false;
//

$tdatamoduletable[".showSearchPanel"] = true;
		$tdatamoduletable[".flexibleSearch"] = true;

$tdatamoduletable[".isUseAjaxSuggest"] = true;

$tdatamoduletable[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																											

$tdatamoduletable[".ajaxCodeSnippetAdded"] = false;

$tdatamoduletable[".buttonsAdded"] = false;

$tdatamoduletable[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamoduletable[".isUseTimeForSearch"] = false;





$tdatamoduletable[".allSearchFields"] = array();
$tdatamoduletable[".filterFields"] = array();
$tdatamoduletable[".requiredSearchFields"] = array();

$tdatamoduletable[".allSearchFields"][] = "ID";
	$tdatamoduletable[".allSearchFields"][] = "Table";
	

$tdatamoduletable[".googleLikeFields"] = array();
$tdatamoduletable[".googleLikeFields"][] = "ID";
$tdatamoduletable[".googleLikeFields"][] = "Table";


$tdatamoduletable[".advSearchFields"] = array();
$tdatamoduletable[".advSearchFields"][] = "ID";
$tdatamoduletable[".advSearchFields"][] = "Table";

$tdatamoduletable[".tableType"] = "list";

$tdatamoduletable[".printerPageOrientation"] = 0;
$tdatamoduletable[".nPrinterPageScale"] = 100;

$tdatamoduletable[".nPrinterSplitRecords"] = 40;

$tdatamoduletable[".nPrinterPDFSplitRecords"] = 40;



$tdatamoduletable[".geocodingEnabled"] = false;





$tdatamoduletable[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamoduletable[".pageSize"] = 20;

$tdatamoduletable[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamoduletable[".strOrderBy"] = $tstrOrderBy;

$tdatamoduletable[".orderindexes"] = array();

$tdatamoduletable[".sqlHead"] = "SELECT ID,  	`Table`";
$tdatamoduletable[".sqlFrom"] = "FROM moduletable";
$tdatamoduletable[".sqlWhereExpr"] = "";
$tdatamoduletable[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamoduletable[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamoduletable[".arrGroupsPerPage"] = $arrGPP;

$tdatamoduletable[".highlightSearchResults"] = true;

$tableKeysmoduletable = array();
$tableKeysmoduletable[] = "ID";
$tdatamoduletable[".Keys"] = $tableKeysmoduletable;

$tdatamoduletable[".listFields"] = array();
$tdatamoduletable[".listFields"][] = "ID";
$tdatamoduletable[".listFields"][] = "Table";

$tdatamoduletable[".hideMobileList"] = array();


$tdatamoduletable[".viewFields"] = array();
$tdatamoduletable[".viewFields"][] = "ID";
$tdatamoduletable[".viewFields"][] = "Table";

$tdatamoduletable[".addFields"] = array();
$tdatamoduletable[".addFields"][] = "Table";

$tdatamoduletable[".masterListFields"] = array();
$tdatamoduletable[".masterListFields"][] = "ID";
$tdatamoduletable[".masterListFields"][] = "Table";

$tdatamoduletable[".inlineAddFields"] = array();
$tdatamoduletable[".inlineAddFields"][] = "Table";

$tdatamoduletable[".editFields"] = array();
$tdatamoduletable[".editFields"][] = "Table";

$tdatamoduletable[".inlineEditFields"] = array();
$tdatamoduletable[".inlineEditFields"][] = "Table";

$tdatamoduletable[".updateSelectedFields"] = array();
$tdatamoduletable[".updateSelectedFields"][] = "Table";


$tdatamoduletable[".exportFields"] = array();
$tdatamoduletable[".exportFields"][] = "ID";
$tdatamoduletable[".exportFields"][] = "Table";

$tdatamoduletable[".importFields"] = array();
$tdatamoduletable[".importFields"][] = "ID";
$tdatamoduletable[".importFields"][] = "Table";

$tdatamoduletable[".printFields"] = array();
$tdatamoduletable[".printFields"][] = "ID";
$tdatamoduletable[".printFields"][] = "Table";


//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "moduletable";
	$fdata["Label"] = GetFieldLabel("moduletable","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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




	$tdatamoduletable["ID"] = $fdata;
//	Table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Table";
	$fdata["GoodName"] = "Table";
	$fdata["ownerTable"] = "moduletable";
	$fdata["Label"] = GetFieldLabel("moduletable","Table");
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

		$fdata["strField"] = "Table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Table`";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamoduletable["Table"] = $fdata;


$tables_data["moduletable"]=&$tdatamoduletable;
$field_labels["moduletable"] = &$fieldLabelsmoduletable;
$fieldToolTips["moduletable"] = &$fieldToolTipsmoduletable;
$placeHolders["moduletable"] = &$placeHoldersmoduletable;
$page_titles["moduletable"] = &$pageTitlesmoduletable;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["moduletable"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["moduletable"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_moduletable()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	`Table`";
$proto0["m_strFrom"] = "FROM moduletable";
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
	"m_strName" => "ID",
	"m_strTable" => "moduletable",
	"m_srcTableName" => "moduletable"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "moduletable";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Table",
	"m_strTable" => "moduletable",
	"m_srcTableName" => "moduletable"
));

$proto8["m_sql"] = "`Table`";
$proto8["m_srcTableName"] = "moduletable";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "moduletable";
$proto11["m_srcTableName"] = "moduletable";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ID";
$proto11["m_columns"][] = "Table";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "moduletable";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "moduletable";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="moduletable";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_moduletable = createSqlQuery_moduletable();


	
		;

		

$tdatamoduletable[".sqlquery"] = $queryData_moduletable;

$tableEvents["moduletable"] = new eventsBase;
$tdatamoduletable[".hasEvents"] = false;

?>