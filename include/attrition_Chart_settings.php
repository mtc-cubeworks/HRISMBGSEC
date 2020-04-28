<?php
require_once(getabspath("classes/cipherer.php"));




$tdataattrition_Chart = array();
	$tdataattrition_Chart[".ShortName"] = "attrition_Chart";
	$tdataattrition_Chart[".OwnerID"] = "";
	$tdataattrition_Chart[".OriginalTable"] = "attrition";

//	field labels
$fieldLabelsattrition_Chart = array();
$fieldToolTipsattrition_Chart = array();
$pageTitlesattrition_Chart = array();
$placeHoldersattrition_Chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsattrition_Chart["English"] = array();
	$fieldToolTipsattrition_Chart["English"] = array();
	$placeHoldersattrition_Chart["English"] = array();
	$pageTitlesattrition_Chart["English"] = array();
	$fieldLabelsattrition_Chart["English"]["PctAttr"] = "Pct Attr";
	$fieldToolTipsattrition_Chart["English"]["PctAttr"] = "";
	$placeHoldersattrition_Chart["English"]["PctAttr"] = "";
	if (count($fieldToolTipsattrition_Chart["English"]))
		$tdataattrition_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsattrition_Chart[""] = array();
	$fieldToolTipsattrition_Chart[""] = array();
	$placeHoldersattrition_Chart[""] = array();
	$pageTitlesattrition_Chart[""] = array();
	$fieldLabelsattrition_Chart[""]["PctAttr"] = "Pct Attr";
	$fieldToolTipsattrition_Chart[""]["PctAttr"] = "";
	$placeHoldersattrition_Chart[""]["PctAttr"] = "";
	if (count($fieldToolTipsattrition_Chart[""]))
		$tdataattrition_Chart[".isUseToolTips"] = true;
}


	$tdataattrition_Chart[".NCSearch"] = true;

	$tdataattrition_Chart[".ChartRefreshTime"] = 0;


$tdataattrition_Chart[".shortTableName"] = "attrition_Chart";
$tdataattrition_Chart[".nSecOptions"] = 0;
$tdataattrition_Chart[".recsPerRowPrint"] = 1;
$tdataattrition_Chart[".mainTableOwnerID"] = "";
$tdataattrition_Chart[".moveNext"] = 1;
$tdataattrition_Chart[".entityType"] = 3;

$tdataattrition_Chart[".strOriginalTableName"] = "attrition";

	



$tdataattrition_Chart[".showAddInPopup"] = false;

$tdataattrition_Chart[".showEditInPopup"] = false;

$tdataattrition_Chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataattrition_Chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataattrition_Chart[".fieldsForRegister"] = array();

$tdataattrition_Chart[".listAjax"] = false;

	$tdataattrition_Chart[".audit"] = false;

	$tdataattrition_Chart[".locking"] = false;



$tdataattrition_Chart[".list"] = true;



$tdataattrition_Chart[".reorderRecordsByHeader"] = true;








$tdataattrition_Chart[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataattrition_Chart[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataattrition_Chart[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataattrition_Chart[".searchSaving"] = false;
//

$tdataattrition_Chart[".showSearchPanel"] = true;
		$tdataattrition_Chart[".flexibleSearch"] = true;

$tdataattrition_Chart[".isUseAjaxSuggest"] = true;




																																																																																																																																																																																																																																																																																																																														

$tdataattrition_Chart[".ajaxCodeSnippetAdded"] = false;

$tdataattrition_Chart[".buttonsAdded"] = false;

$tdataattrition_Chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdataattrition_Chart[".isUseTimeForSearch"] = false;





$tdataattrition_Chart[".allSearchFields"] = array();
$tdataattrition_Chart[".filterFields"] = array();
$tdataattrition_Chart[".requiredSearchFields"] = array();

$tdataattrition_Chart[".allSearchFields"][] = "PctAttr";
	

$tdataattrition_Chart[".googleLikeFields"] = array();
$tdataattrition_Chart[".googleLikeFields"][] = "PctAttr";


$tdataattrition_Chart[".advSearchFields"] = array();
$tdataattrition_Chart[".advSearchFields"][] = "PctAttr";

$tdataattrition_Chart[".tableType"] = "chart";

$tdataattrition_Chart[".printerPageOrientation"] = 0;
$tdataattrition_Chart[".nPrinterPageScale"] = 100;

$tdataattrition_Chart[".nPrinterSplitRecords"] = 40;

$tdataattrition_Chart[".nPrinterPDFSplitRecords"] = 40;



$tdataattrition_Chart[".geocodingEnabled"] = false;



// chart settings
$tdataattrition_Chart[".chartType"] = "Gauge";
// end of chart settings


$tdataattrition_Chart[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataattrition_Chart[".strOrderBy"] = $tstrOrderBy;

$tdataattrition_Chart[".orderindexes"] = array();

$tdataattrition_Chart[".sqlHead"] = "SELECT PctAttr";
$tdataattrition_Chart[".sqlFrom"] = "FROM attrition";
$tdataattrition_Chart[".sqlWhereExpr"] = "";
$tdataattrition_Chart[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataattrition_Chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataattrition_Chart[".arrGroupsPerPage"] = $arrGPP;

$tdataattrition_Chart[".highlightSearchResults"] = true;

$tableKeysattrition_Chart = array();
$tdataattrition_Chart[".Keys"] = $tableKeysattrition_Chart;

$tdataattrition_Chart[".listFields"] = array();
$tdataattrition_Chart[".listFields"][] = "PctAttr";

$tdataattrition_Chart[".hideMobileList"] = array();


$tdataattrition_Chart[".viewFields"] = array();
$tdataattrition_Chart[".viewFields"][] = "PctAttr";

$tdataattrition_Chart[".addFields"] = array();
$tdataattrition_Chart[".addFields"][] = "PctAttr";

$tdataattrition_Chart[".masterListFields"] = array();
$tdataattrition_Chart[".masterListFields"][] = "PctAttr";

$tdataattrition_Chart[".inlineAddFields"] = array();
$tdataattrition_Chart[".inlineAddFields"][] = "PctAttr";

$tdataattrition_Chart[".editFields"] = array();
$tdataattrition_Chart[".editFields"][] = "PctAttr";

$tdataattrition_Chart[".inlineEditFields"] = array();
$tdataattrition_Chart[".inlineEditFields"][] = "PctAttr";

$tdataattrition_Chart[".updateSelectedFields"] = array();
$tdataattrition_Chart[".updateSelectedFields"][] = "PctAttr";


$tdataattrition_Chart[".exportFields"] = array();
$tdataattrition_Chart[".exportFields"][] = "PctAttr";

$tdataattrition_Chart[".importFields"] = array();
$tdataattrition_Chart[".importFields"][] = "PctAttr";

$tdataattrition_Chart[".printFields"] = array();
$tdataattrition_Chart[".printFields"][] = "PctAttr";


//	PctAttr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PctAttr";
	$fdata["GoodName"] = "PctAttr";
	$fdata["ownerTable"] = "attrition";
	$fdata["Label"] = GetFieldLabel("attrition_Chart","PctAttr");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "PctAttr";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PctAttr";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataattrition_Chart["PctAttr"] = $fdata;

	$tdataattrition_Chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">attrition Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">gauge</attr>
		</attr>

		<attr value="parameters">';
	$tdataattrition_Chart[".chartXml"] .= '<attr value="0">
			<attr value="name">PctAttr</attr>';
	$tdataattrition_Chart[".chartXml"] .= '<attr value="gaugeMinValue">0</attr>
			<attr value="gaugeMaxValue">100</attr>
			<attr value="gaugeColorZone">';
	$tdataattrition_Chart[".chartXml"] .= '<attr value="0">
			<attr value="gaugeBeginColor">0</attr>
			<attr value="gaugeEndColor">25</attr>
			<attr value="gaugeColor">0080C0</attr>
		</attr>';
	$tdataattrition_Chart[".chartXml"] .= '<attr value="1">
			<attr value="gaugeBeginColor">25</attr>
			<attr value="gaugeEndColor">50</attr>
			<attr value="gaugeColor">3CB371</attr>
		</attr>';
	$tdataattrition_Chart[".chartXml"] .= '<attr value="2">
			<attr value="gaugeBeginColor">50</attr>
			<attr value="gaugeEndColor">75</attr>
			<attr value="gaugeColor">FFD700</attr>
		</attr>';
	$tdataattrition_Chart[".chartXml"] .= '<attr value="3">
			<attr value="gaugeBeginColor">75</attr>
			<attr value="gaugeEndColor">100</attr>
			<attr value="gaugeColor">FF0000</attr>
		</attr>';
	$tdataattrition_Chart[".chartXml"] .= '</attr>';
	$tdataattrition_Chart[".chartXml"] .= '</attr>';
	$tdataattrition_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">TotalHired</attr>
	</attr>';
	$tdataattrition_Chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataattrition_Chart[".chartXml"] .= '<attr value="head">'.xmlencode("").'</attr>
<attr value="foot">'.xmlencode("% Attrition").'</attr>
<attr value="y_axis_label">'.xmlencode("TotalHired").'</attr>


<attr value="slegend">false</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdataattrition_Chart[".chartXml"] .= '<attr value="gaugestyle">0</attr>';
$tdataattrition_Chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataattrition_Chart[".chartXml"] .= '<attr value="0">
		<attr value="name">PctAttr</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("attrition_Chart","PctAttr")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataattrition_Chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">attrition Chart</attr>
<attr value="short_table_name">attrition_Chart</attr>
</attr>

</chart>';

$tables_data["attrition Chart"]=&$tdataattrition_Chart;
$field_labels["attrition_Chart"] = &$fieldLabelsattrition_Chart;
$fieldToolTips["attrition_Chart"] = &$fieldToolTipsattrition_Chart;
$placeHolders["attrition_Chart"] = &$placeHoldersattrition_Chart;
$page_titles["attrition_Chart"] = &$pageTitlesattrition_Chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["attrition Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["attrition Chart"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_attrition_Chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PctAttr";
$proto0["m_strFrom"] = "FROM attrition";
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
	"m_strName" => "PctAttr",
	"m_strTable" => "attrition",
	"m_srcTableName" => "attrition Chart"
));

$proto6["m_sql"] = "PctAttr";
$proto6["m_srcTableName"] = "attrition Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "attrition";
$proto9["m_srcTableName"] = "attrition Chart";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "PctAttr";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "attrition";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "attrition Chart";
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto8["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto8);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="attrition Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_attrition_Chart = createSqlQuery_attrition_Chart();


	
		;

	

$tdataattrition_Chart[".sqlquery"] = $queryData_attrition_Chart;

$tableEvents["attrition Chart"] = new eventsBase;
$tdataattrition_Chart[".hasEvents"] = false;

?>