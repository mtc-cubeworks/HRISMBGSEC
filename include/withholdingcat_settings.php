<?php
require_once(getabspath("classes/cipherer.php"));




$tdatawithholdingcat = array();
	$tdatawithholdingcat[".truncateText"] = true;
	$tdatawithholdingcat[".NumberOfChars"] = 80;
	$tdatawithholdingcat[".ShortName"] = "withholdingcat";
	$tdatawithholdingcat[".OwnerID"] = "";
	$tdatawithholdingcat[".OriginalTable"] = "withholdingcat";

//	field labels
$fieldLabelswithholdingcat = array();
$fieldToolTipswithholdingcat = array();
$pageTitleswithholdingcat = array();
$placeHolderswithholdingcat = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswithholdingcat["English"] = array();
	$fieldToolTipswithholdingcat["English"] = array();
	$placeHolderswithholdingcat["English"] = array();
	$pageTitleswithholdingcat["English"] = array();
	$fieldLabelswithholdingcat["English"]["WcID"] = "Wc ID";
	$fieldToolTipswithholdingcat["English"]["WcID"] = "";
	$placeHolderswithholdingcat["English"]["WcID"] = "";
	$fieldLabelswithholdingcat["English"]["CategoryOfWithholdingAgent"] = "Category Of Withholding Agent";
	$fieldToolTipswithholdingcat["English"]["CategoryOfWithholdingAgent"] = "";
	$placeHolderswithholdingcat["English"]["CategoryOfWithholdingAgent"] = "";
	if (count($fieldToolTipswithholdingcat["English"]))
		$tdatawithholdingcat[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelswithholdingcat[""] = array();
	$fieldToolTipswithholdingcat[""] = array();
	$placeHolderswithholdingcat[""] = array();
	$pageTitleswithholdingcat[""] = array();
	if (count($fieldToolTipswithholdingcat[""]))
		$tdatawithholdingcat[".isUseToolTips"] = true;
}


	$tdatawithholdingcat[".NCSearch"] = true;



$tdatawithholdingcat[".shortTableName"] = "withholdingcat";
$tdatawithholdingcat[".nSecOptions"] = 0;
$tdatawithholdingcat[".recsPerRowPrint"] = 1;
$tdatawithholdingcat[".mainTableOwnerID"] = "";
$tdatawithholdingcat[".moveNext"] = 1;
$tdatawithholdingcat[".entityType"] = 0;

$tdatawithholdingcat[".strOriginalTableName"] = "withholdingcat";

	



$tdatawithholdingcat[".showAddInPopup"] = false;

$tdatawithholdingcat[".showEditInPopup"] = false;

$tdatawithholdingcat[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatawithholdingcat[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatawithholdingcat[".fieldsForRegister"] = array();

$tdatawithholdingcat[".listAjax"] = false;

	$tdatawithholdingcat[".audit"] = false;

	$tdatawithholdingcat[".locking"] = false;

$tdatawithholdingcat[".edit"] = true;
$tdatawithholdingcat[".afterEditAction"] = 1;
$tdatawithholdingcat[".closePopupAfterEdit"] = 1;
$tdatawithholdingcat[".afterEditActionDetTable"] = "";

$tdatawithholdingcat[".add"] = true;
$tdatawithholdingcat[".afterAddAction"] = 1;
$tdatawithholdingcat[".closePopupAfterAdd"] = 1;
$tdatawithholdingcat[".afterAddActionDetTable"] = "";

$tdatawithholdingcat[".list"] = true;



$tdatawithholdingcat[".reorderRecordsByHeader"] = true;


$tdatawithholdingcat[".exportFormatting"] = 2;
$tdatawithholdingcat[".exportDelimiter"] = ",";
		
$tdatawithholdingcat[".view"] = true;

$tdatawithholdingcat[".import"] = true;

$tdatawithholdingcat[".exportTo"] = true;

$tdatawithholdingcat[".printFriendly"] = true;

$tdatawithholdingcat[".delete"] = true;

$tdatawithholdingcat[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatawithholdingcat[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatawithholdingcat[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatawithholdingcat[".searchSaving"] = false;
//

$tdatawithholdingcat[".showSearchPanel"] = true;
		$tdatawithholdingcat[".flexibleSearch"] = true;

$tdatawithholdingcat[".isUseAjaxSuggest"] = true;

$tdatawithholdingcat[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdatawithholdingcat[".ajaxCodeSnippetAdded"] = false;

$tdatawithholdingcat[".buttonsAdded"] = false;

$tdatawithholdingcat[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawithholdingcat[".isUseTimeForSearch"] = false;





$tdatawithholdingcat[".allSearchFields"] = array();
$tdatawithholdingcat[".filterFields"] = array();
$tdatawithholdingcat[".requiredSearchFields"] = array();

$tdatawithholdingcat[".allSearchFields"][] = "WcID";
	$tdatawithholdingcat[".allSearchFields"][] = "CategoryOfWithholdingAgent";
	

$tdatawithholdingcat[".googleLikeFields"] = array();
$tdatawithholdingcat[".googleLikeFields"][] = "WcID";
$tdatawithholdingcat[".googleLikeFields"][] = "CategoryOfWithholdingAgent";


$tdatawithholdingcat[".advSearchFields"] = array();
$tdatawithholdingcat[".advSearchFields"][] = "WcID";
$tdatawithholdingcat[".advSearchFields"][] = "CategoryOfWithholdingAgent";

$tdatawithholdingcat[".tableType"] = "list";

$tdatawithholdingcat[".printerPageOrientation"] = 0;
$tdatawithholdingcat[".nPrinterPageScale"] = 100;

$tdatawithholdingcat[".nPrinterSplitRecords"] = 40;

$tdatawithholdingcat[".nPrinterPDFSplitRecords"] = 40;



$tdatawithholdingcat[".geocodingEnabled"] = false;





$tdatawithholdingcat[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatawithholdingcat[".pageSize"] = 20;

$tdatawithholdingcat[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatawithholdingcat[".strOrderBy"] = $tstrOrderBy;

$tdatawithholdingcat[".orderindexes"] = array();

$tdatawithholdingcat[".sqlHead"] = "SELECT WcID,  	CategoryOfWithholdingAgent";
$tdatawithholdingcat[".sqlFrom"] = "FROM withholdingcat";
$tdatawithholdingcat[".sqlWhereExpr"] = "";
$tdatawithholdingcat[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawithholdingcat[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawithholdingcat[".arrGroupsPerPage"] = $arrGPP;

$tdatawithholdingcat[".highlightSearchResults"] = true;

$tableKeyswithholdingcat = array();
$tableKeyswithholdingcat[] = "WcID";
$tdatawithholdingcat[".Keys"] = $tableKeyswithholdingcat;

$tdatawithholdingcat[".listFields"] = array();
$tdatawithholdingcat[".listFields"][] = "WcID";
$tdatawithholdingcat[".listFields"][] = "CategoryOfWithholdingAgent";

$tdatawithholdingcat[".hideMobileList"] = array();


$tdatawithholdingcat[".viewFields"] = array();
$tdatawithholdingcat[".viewFields"][] = "WcID";
$tdatawithholdingcat[".viewFields"][] = "CategoryOfWithholdingAgent";

$tdatawithholdingcat[".addFields"] = array();
$tdatawithholdingcat[".addFields"][] = "CategoryOfWithholdingAgent";

$tdatawithholdingcat[".masterListFields"] = array();
$tdatawithholdingcat[".masterListFields"][] = "WcID";
$tdatawithholdingcat[".masterListFields"][] = "CategoryOfWithholdingAgent";

$tdatawithholdingcat[".inlineAddFields"] = array();
$tdatawithholdingcat[".inlineAddFields"][] = "CategoryOfWithholdingAgent";

$tdatawithholdingcat[".editFields"] = array();
$tdatawithholdingcat[".editFields"][] = "CategoryOfWithholdingAgent";

$tdatawithholdingcat[".inlineEditFields"] = array();
$tdatawithholdingcat[".inlineEditFields"][] = "CategoryOfWithholdingAgent";

$tdatawithholdingcat[".updateSelectedFields"] = array();
$tdatawithholdingcat[".updateSelectedFields"][] = "CategoryOfWithholdingAgent";


$tdatawithholdingcat[".exportFields"] = array();
$tdatawithholdingcat[".exportFields"][] = "WcID";
$tdatawithholdingcat[".exportFields"][] = "CategoryOfWithholdingAgent";

$tdatawithholdingcat[".importFields"] = array();
$tdatawithholdingcat[".importFields"][] = "WcID";
$tdatawithholdingcat[".importFields"][] = "CategoryOfWithholdingAgent";

$tdatawithholdingcat[".printFields"] = array();
$tdatawithholdingcat[".printFields"][] = "WcID";
$tdatawithholdingcat[".printFields"][] = "CategoryOfWithholdingAgent";


//	WcID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "WcID";
	$fdata["GoodName"] = "WcID";
	$fdata["ownerTable"] = "withholdingcat";
	$fdata["Label"] = GetFieldLabel("withholdingcat","WcID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "WcID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WcID";

	
	
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




	$tdatawithholdingcat["WcID"] = $fdata;
//	CategoryOfWithholdingAgent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CategoryOfWithholdingAgent";
	$fdata["GoodName"] = "CategoryOfWithholdingAgent";
	$fdata["ownerTable"] = "withholdingcat";
	$fdata["Label"] = GetFieldLabel("withholdingcat","CategoryOfWithholdingAgent");
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

		$fdata["strField"] = "CategoryOfWithholdingAgent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CategoryOfWithholdingAgent";

	
	
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




	$tdatawithholdingcat["CategoryOfWithholdingAgent"] = $fdata;


$tables_data["withholdingcat"]=&$tdatawithholdingcat;
$field_labels["withholdingcat"] = &$fieldLabelswithholdingcat;
$fieldToolTips["withholdingcat"] = &$fieldToolTipswithholdingcat;
$placeHolders["withholdingcat"] = &$placeHolderswithholdingcat;
$page_titles["withholdingcat"] = &$pageTitleswithholdingcat;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["withholdingcat"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["withholdingcat"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_withholdingcat()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "WcID,  	CategoryOfWithholdingAgent";
$proto0["m_strFrom"] = "FROM withholdingcat";
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
	"m_strName" => "WcID",
	"m_strTable" => "withholdingcat",
	"m_srcTableName" => "withholdingcat"
));

$proto6["m_sql"] = "WcID";
$proto6["m_srcTableName"] = "withholdingcat";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CategoryOfWithholdingAgent",
	"m_strTable" => "withholdingcat",
	"m_srcTableName" => "withholdingcat"
));

$proto8["m_sql"] = "CategoryOfWithholdingAgent";
$proto8["m_srcTableName"] = "withholdingcat";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "withholdingcat";
$proto11["m_srcTableName"] = "withholdingcat";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "WcID";
$proto11["m_columns"][] = "CategoryOfWithholdingAgent";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "withholdingcat";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "withholdingcat";
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
$proto0["m_srcTableName"]="withholdingcat";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_withholdingcat = createSqlQuery_withholdingcat();


	
		;

		

$tdatawithholdingcat[".sqlquery"] = $queryData_withholdingcat;

$tableEvents["withholdingcat"] = new eventsBase;
$tdatawithholdingcat[".hasEvents"] = false;

?>