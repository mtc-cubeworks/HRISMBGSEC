<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadashrange = array();
	$tdatadashrange[".truncateText"] = true;
	$tdatadashrange[".NumberOfChars"] = 80;
	$tdatadashrange[".ShortName"] = "dashrange";
	$tdatadashrange[".OwnerID"] = "";
	$tdatadashrange[".OriginalTable"] = "dashrange";

//	field labels
$fieldLabelsdashrange = array();
$fieldToolTipsdashrange = array();
$pageTitlesdashrange = array();
$placeHoldersdashrange = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdashrange["English"] = array();
	$fieldToolTipsdashrange["English"] = array();
	$placeHoldersdashrange["English"] = array();
	$pageTitlesdashrange["English"] = array();
	$fieldLabelsdashrange["English"]["FromDate"] = "From Date";
	$fieldToolTipsdashrange["English"]["FromDate"] = "";
	$placeHoldersdashrange["English"]["FromDate"] = "";
	$fieldLabelsdashrange["English"]["ToDate"] = "To Date";
	$fieldToolTipsdashrange["English"]["ToDate"] = "";
	$placeHoldersdashrange["English"]["ToDate"] = "";
	if (count($fieldToolTipsdashrange["English"]))
		$tdatadashrange[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdashrange[""] = array();
	$fieldToolTipsdashrange[""] = array();
	$placeHoldersdashrange[""] = array();
	$pageTitlesdashrange[""] = array();
	$fieldLabelsdashrange[""]["FromDate"] = "From Date";
	$fieldToolTipsdashrange[""]["FromDate"] = "";
	$placeHoldersdashrange[""]["FromDate"] = "";
	$fieldLabelsdashrange[""]["ToDate"] = "To Date";
	$fieldToolTipsdashrange[""]["ToDate"] = "";
	$placeHoldersdashrange[""]["ToDate"] = "";
	if (count($fieldToolTipsdashrange[""]))
		$tdatadashrange[".isUseToolTips"] = true;
}


	$tdatadashrange[".NCSearch"] = true;



$tdatadashrange[".shortTableName"] = "dashrange";
$tdatadashrange[".nSecOptions"] = 0;
$tdatadashrange[".recsPerRowPrint"] = 1;
$tdatadashrange[".mainTableOwnerID"] = "";
$tdatadashrange[".moveNext"] = 1;
$tdatadashrange[".entityType"] = 0;

$tdatadashrange[".strOriginalTableName"] = "dashrange";

	



$tdatadashrange[".showAddInPopup"] = false;

$tdatadashrange[".showEditInPopup"] = false;

$tdatadashrange[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadashrange[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadashrange[".fieldsForRegister"] = array();

$tdatadashrange[".listAjax"] = false;

	$tdatadashrange[".audit"] = false;

	$tdatadashrange[".locking"] = false;

$tdatadashrange[".edit"] = true;
$tdatadashrange[".afterEditAction"] = 1;
$tdatadashrange[".closePopupAfterEdit"] = 1;
$tdatadashrange[".afterEditActionDetTable"] = "";

$tdatadashrange[".add"] = true;
$tdatadashrange[".afterAddAction"] = 1;
$tdatadashrange[".closePopupAfterAdd"] = 1;
$tdatadashrange[".afterAddActionDetTable"] = "";

$tdatadashrange[".list"] = true;



$tdatadashrange[".reorderRecordsByHeader"] = true;


$tdatadashrange[".exportFormatting"] = 2;
$tdatadashrange[".exportDelimiter"] = ",";
		

$tdatadashrange[".import"] = true;

$tdatadashrange[".exportTo"] = true;

$tdatadashrange[".printFriendly"] = true;


$tdatadashrange[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadashrange[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatadashrange[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatadashrange[".searchSaving"] = false;
//

$tdatadashrange[".showSearchPanel"] = true;
		$tdatadashrange[".flexibleSearch"] = true;

$tdatadashrange[".isUseAjaxSuggest"] = true;

$tdatadashrange[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																									
																																									

$tdatadashrange[".ajaxCodeSnippetAdded"] = false;

$tdatadashrange[".buttonsAdded"] = true;

$tdatadashrange[".addPageEvents"] = true;

// use timepicker for search panel
$tdatadashrange[".isUseTimeForSearch"] = false;





$tdatadashrange[".allSearchFields"] = array();
$tdatadashrange[".filterFields"] = array();
$tdatadashrange[".requiredSearchFields"] = array();

$tdatadashrange[".allSearchFields"][] = "FromDate";
	$tdatadashrange[".allSearchFields"][] = "ToDate";
	

$tdatadashrange[".googleLikeFields"] = array();
$tdatadashrange[".googleLikeFields"][] = "FromDate";
$tdatadashrange[".googleLikeFields"][] = "ToDate";


$tdatadashrange[".advSearchFields"] = array();
$tdatadashrange[".advSearchFields"][] = "FromDate";
$tdatadashrange[".advSearchFields"][] = "ToDate";

$tdatadashrange[".tableType"] = "list";

$tdatadashrange[".printerPageOrientation"] = 0;
$tdatadashrange[".nPrinterPageScale"] = 100;

$tdatadashrange[".nPrinterSplitRecords"] = 40;

$tdatadashrange[".nPrinterPDFSplitRecords"] = 40;



$tdatadashrange[".geocodingEnabled"] = false;





$tdatadashrange[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatadashrange[".pageSize"] = 20;

$tdatadashrange[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadashrange[".strOrderBy"] = $tstrOrderBy;

$tdatadashrange[".orderindexes"] = array();

$tdatadashrange[".sqlHead"] = "SELECT FromDate,  ToDate";
$tdatadashrange[".sqlFrom"] = "FROM dashrange";
$tdatadashrange[".sqlWhereExpr"] = "";
$tdatadashrange[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadashrange[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadashrange[".arrGroupsPerPage"] = $arrGPP;

$tdatadashrange[".highlightSearchResults"] = true;

$tableKeysdashrange = array();
$tableKeysdashrange[] = "FromDate";
$tdatadashrange[".Keys"] = $tableKeysdashrange;

$tdatadashrange[".listFields"] = array();
$tdatadashrange[".listFields"][] = "FromDate";
$tdatadashrange[".listFields"][] = "ToDate";

$tdatadashrange[".hideMobileList"] = array();


$tdatadashrange[".viewFields"] = array();

$tdatadashrange[".addFields"] = array();
$tdatadashrange[".addFields"][] = "FromDate";
$tdatadashrange[".addFields"][] = "ToDate";

$tdatadashrange[".masterListFields"] = array();
$tdatadashrange[".masterListFields"][] = "FromDate";
$tdatadashrange[".masterListFields"][] = "ToDate";

$tdatadashrange[".inlineAddFields"] = array();

$tdatadashrange[".editFields"] = array();
$tdatadashrange[".editFields"][] = "FromDate";
$tdatadashrange[".editFields"][] = "ToDate";

$tdatadashrange[".inlineEditFields"] = array();

$tdatadashrange[".updateSelectedFields"] = array();
$tdatadashrange[".updateSelectedFields"][] = "FromDate";
$tdatadashrange[".updateSelectedFields"][] = "ToDate";


$tdatadashrange[".exportFields"] = array();
$tdatadashrange[".exportFields"][] = "FromDate";
$tdatadashrange[".exportFields"][] = "ToDate";

$tdatadashrange[".importFields"] = array();
$tdatadashrange[".importFields"][] = "FromDate";
$tdatadashrange[".importFields"][] = "ToDate";

$tdatadashrange[".printFields"] = array();
$tdatadashrange[".printFields"][] = "FromDate";
$tdatadashrange[".printFields"][] = "ToDate";


//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "dashrange";
	$fdata["Label"] = GetFieldLabel("dashrange","FromDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatadashrange["FromDate"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "dashrange";
	$fdata["Label"] = GetFieldLabel("dashrange","ToDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatadashrange["ToDate"] = $fdata;


$tables_data["dashrange"]=&$tdatadashrange;
$field_labels["dashrange"] = &$fieldLabelsdashrange;
$fieldToolTips["dashrange"] = &$fieldToolTipsdashrange;
$placeHolders["dashrange"] = &$placeHoldersdashrange;
$page_titles["dashrange"] = &$pageTitlesdashrange;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dashrange"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dashrange"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_dashrange()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "FromDate,  ToDate";
$proto0["m_strFrom"] = "FROM dashrange";
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
	"m_strName" => "FromDate",
	"m_strTable" => "dashrange",
	"m_srcTableName" => "dashrange"
));

$proto6["m_sql"] = "FromDate";
$proto6["m_srcTableName"] = "dashrange";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "dashrange",
	"m_srcTableName" => "dashrange"
));

$proto8["m_sql"] = "ToDate";
$proto8["m_srcTableName"] = "dashrange";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dashrange";
$proto11["m_srcTableName"] = "dashrange";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "DRID";
$proto11["m_columns"][] = "FromDate";
$proto11["m_columns"][] = "ToDate";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dashrange";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dashrange";
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
$proto0["m_srcTableName"]="dashrange";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dashrange = createSqlQuery_dashrange();


	
		;

		

$tdatadashrange[".sqlquery"] = $queryData_dashrange;

include_once(getabspath("include/dashrange_events.php"));
$tableEvents["dashrange"] = new eventclass_dashrange;
$tdatadashrange[".hasEvents"] = true;

?>