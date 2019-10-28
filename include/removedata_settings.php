<?php
require_once(getabspath("classes/cipherer.php"));




$tdataremovedata = array();
	$tdataremovedata[".truncateText"] = true;
	$tdataremovedata[".NumberOfChars"] = 80;
	$tdataremovedata[".ShortName"] = "removedata";
	$tdataremovedata[".OwnerID"] = "";
	$tdataremovedata[".OriginalTable"] = "removedata";

//	field labels
$fieldLabelsremovedata = array();
$fieldToolTipsremovedata = array();
$pageTitlesremovedata = array();
$placeHoldersremovedata = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsremovedata["English"] = array();
	$fieldToolTipsremovedata["English"] = array();
	$placeHoldersremovedata["English"] = array();
	$pageTitlesremovedata["English"] = array();
	$fieldLabelsremovedata["English"]["RmID"] = "Rm ID";
	$fieldToolTipsremovedata["English"]["RmID"] = "";
	$placeHoldersremovedata["English"]["RmID"] = "";
	$fieldLabelsremovedata["English"]["Date"] = "Date";
	$fieldToolTipsremovedata["English"]["Date"] = "";
	$placeHoldersremovedata["English"]["Date"] = "";
	if (count($fieldToolTipsremovedata["English"]))
		$tdataremovedata[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsremovedata[""] = array();
	$fieldToolTipsremovedata[""] = array();
	$placeHoldersremovedata[""] = array();
	$pageTitlesremovedata[""] = array();
	if (count($fieldToolTipsremovedata[""]))
		$tdataremovedata[".isUseToolTips"] = true;
}


	$tdataremovedata[".NCSearch"] = true;



$tdataremovedata[".shortTableName"] = "removedata";
$tdataremovedata[".nSecOptions"] = 0;
$tdataremovedata[".recsPerRowPrint"] = 1;
$tdataremovedata[".mainTableOwnerID"] = "";
$tdataremovedata[".moveNext"] = 1;
$tdataremovedata[".entityType"] = 0;

$tdataremovedata[".strOriginalTableName"] = "removedata";

	



$tdataremovedata[".showAddInPopup"] = false;

$tdataremovedata[".showEditInPopup"] = false;

$tdataremovedata[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataremovedata[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataremovedata[".fieldsForRegister"] = array();

$tdataremovedata[".listAjax"] = false;

	$tdataremovedata[".audit"] = false;

	$tdataremovedata[".locking"] = false;

$tdataremovedata[".edit"] = true;
$tdataremovedata[".afterEditAction"] = 0;
$tdataremovedata[".closePopupAfterEdit"] = 1;
$tdataremovedata[".afterEditActionDetTable"] = "";

$tdataremovedata[".add"] = true;
$tdataremovedata[".afterAddAction"] = 0;
$tdataremovedata[".closePopupAfterAdd"] = 1;
$tdataremovedata[".afterAddActionDetTable"] = "";

$tdataremovedata[".list"] = true;



$tdataremovedata[".reorderRecordsByHeader"] = true;


$tdataremovedata[".exportFormatting"] = 2;
$tdataremovedata[".exportDelimiter"] = ",";
		
$tdataremovedata[".view"] = true;

$tdataremovedata[".import"] = true;

$tdataremovedata[".exportTo"] = true;

$tdataremovedata[".printFriendly"] = true;

$tdataremovedata[".delete"] = true;

$tdataremovedata[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataremovedata[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataremovedata[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataremovedata[".searchSaving"] = false;
//

$tdataremovedata[".showSearchPanel"] = true;
		$tdataremovedata[".flexibleSearch"] = true;

$tdataremovedata[".isUseAjaxSuggest"] = true;

$tdataremovedata[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																							

$tdataremovedata[".ajaxCodeSnippetAdded"] = false;

$tdataremovedata[".buttonsAdded"] = false;

$tdataremovedata[".addPageEvents"] = false;

// use timepicker for search panel
$tdataremovedata[".isUseTimeForSearch"] = false;





$tdataremovedata[".allSearchFields"] = array();
$tdataremovedata[".filterFields"] = array();
$tdataremovedata[".requiredSearchFields"] = array();

$tdataremovedata[".allSearchFields"][] = "RmID";
	$tdataremovedata[".allSearchFields"][] = "Date";
	

$tdataremovedata[".googleLikeFields"] = array();
$tdataremovedata[".googleLikeFields"][] = "RmID";
$tdataremovedata[".googleLikeFields"][] = "Date";


$tdataremovedata[".advSearchFields"] = array();
$tdataremovedata[".advSearchFields"][] = "RmID";
$tdataremovedata[".advSearchFields"][] = "Date";

$tdataremovedata[".tableType"] = "list";

$tdataremovedata[".printerPageOrientation"] = 0;
$tdataremovedata[".nPrinterPageScale"] = 100;

$tdataremovedata[".nPrinterSplitRecords"] = 40;

$tdataremovedata[".nPrinterPDFSplitRecords"] = 40;



$tdataremovedata[".geocodingEnabled"] = false;





$tdataremovedata[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataremovedata[".pageSize"] = 20;

$tdataremovedata[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataremovedata[".strOrderBy"] = $tstrOrderBy;

$tdataremovedata[".orderindexes"] = array();

$tdataremovedata[".sqlHead"] = "SELECT RmID,  	`Date`";
$tdataremovedata[".sqlFrom"] = "FROM removedata";
$tdataremovedata[".sqlWhereExpr"] = "";
$tdataremovedata[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataremovedata[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataremovedata[".arrGroupsPerPage"] = $arrGPP;

$tdataremovedata[".highlightSearchResults"] = true;

$tableKeysremovedata = array();
$tableKeysremovedata[] = "RmID";
$tdataremovedata[".Keys"] = $tableKeysremovedata;

$tdataremovedata[".listFields"] = array();
$tdataremovedata[".listFields"][] = "RmID";
$tdataremovedata[".listFields"][] = "Date";

$tdataremovedata[".hideMobileList"] = array();


$tdataremovedata[".viewFields"] = array();
$tdataremovedata[".viewFields"][] = "RmID";
$tdataremovedata[".viewFields"][] = "Date";

$tdataremovedata[".addFields"] = array();
$tdataremovedata[".addFields"][] = "Date";

$tdataremovedata[".masterListFields"] = array();
$tdataremovedata[".masterListFields"][] = "RmID";
$tdataremovedata[".masterListFields"][] = "Date";

$tdataremovedata[".inlineAddFields"] = array();
$tdataremovedata[".inlineAddFields"][] = "Date";

$tdataremovedata[".editFields"] = array();
$tdataremovedata[".editFields"][] = "Date";

$tdataremovedata[".inlineEditFields"] = array();
$tdataremovedata[".inlineEditFields"][] = "Date";

$tdataremovedata[".updateSelectedFields"] = array();
$tdataremovedata[".updateSelectedFields"][] = "Date";


$tdataremovedata[".exportFields"] = array();
$tdataremovedata[".exportFields"][] = "RmID";
$tdataremovedata[".exportFields"][] = "Date";

$tdataremovedata[".importFields"] = array();
$tdataremovedata[".importFields"][] = "RmID";
$tdataremovedata[".importFields"][] = "Date";

$tdataremovedata[".printFields"] = array();
$tdataremovedata[".printFields"][] = "RmID";
$tdataremovedata[".printFields"][] = "Date";


//	RmID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "RmID";
	$fdata["GoodName"] = "RmID";
	$fdata["ownerTable"] = "removedata";
	$fdata["Label"] = GetFieldLabel("removedata","RmID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RmID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RmID";

	
	
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




	$tdataremovedata["RmID"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "removedata";
	$fdata["Label"] = GetFieldLabel("removedata","Date");
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

		$fdata["strField"] = "Date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Date`";

	
	
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




	$tdataremovedata["Date"] = $fdata;


$tables_data["removedata"]=&$tdataremovedata;
$field_labels["removedata"] = &$fieldLabelsremovedata;
$fieldToolTips["removedata"] = &$fieldToolTipsremovedata;
$placeHolders["removedata"] = &$placeHoldersremovedata;
$page_titles["removedata"] = &$pageTitlesremovedata;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["removedata"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["removedata"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_removedata()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "RmID,  	`Date`";
$proto0["m_strFrom"] = "FROM removedata";
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
	"m_strName" => "RmID",
	"m_strTable" => "removedata",
	"m_srcTableName" => "removedata"
));

$proto6["m_sql"] = "RmID";
$proto6["m_srcTableName"] = "removedata";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "removedata",
	"m_srcTableName" => "removedata"
));

$proto8["m_sql"] = "`Date`";
$proto8["m_srcTableName"] = "removedata";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "removedata";
$proto11["m_srcTableName"] = "removedata";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "RmID";
$proto11["m_columns"][] = "Date";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "removedata";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "removedata";
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
$proto0["m_srcTableName"]="removedata";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_removedata = createSqlQuery_removedata();


	
		;

		

$tdataremovedata[".sqlquery"] = $queryData_removedata;

include_once(getabspath("include/removedata_events.php"));
$tableEvents["removedata"] = new eventclass_removedata;
$tdataremovedata[".hasEvents"] = true;

?>