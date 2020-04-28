<?php
require_once(getabspath("classes/cipherer.php"));




$tdatazresigns_Chart = array();
	$tdatazresigns_Chart[".ShortName"] = "zresigns_Chart";
	$tdatazresigns_Chart[".OwnerID"] = "";
	$tdatazresigns_Chart[".OriginalTable"] = "zresigns";

//	field labels
$fieldLabelszresigns_Chart = array();
$fieldToolTipszresigns_Chart = array();
$pageTitleszresigns_Chart = array();
$placeHolderszresigns_Chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelszresigns_Chart["English"] = array();
	$fieldToolTipszresigns_Chart["English"] = array();
	$placeHolderszresigns_Chart["English"] = array();
	$pageTitleszresigns_Chart["English"] = array();
	$fieldLabelszresigns_Chart["English"]["TotalResignation"] = "Total Resignation";
	$fieldToolTipszresigns_Chart["English"]["TotalResignation"] = "";
	$placeHolderszresigns_Chart["English"]["TotalResignation"] = "";
	if (count($fieldToolTipszresigns_Chart["English"]))
		$tdatazresigns_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelszresigns_Chart[""] = array();
	$fieldToolTipszresigns_Chart[""] = array();
	$placeHolderszresigns_Chart[""] = array();
	$pageTitleszresigns_Chart[""] = array();
	$fieldLabelszresigns_Chart[""]["TotalResignation"] = "Total Resignation";
	$fieldToolTipszresigns_Chart[""]["TotalResignation"] = "";
	$placeHolderszresigns_Chart[""]["TotalResignation"] = "";
	if (count($fieldToolTipszresigns_Chart[""]))
		$tdatazresigns_Chart[".isUseToolTips"] = true;
}


	$tdatazresigns_Chart[".NCSearch"] = true;

	$tdatazresigns_Chart[".ChartRefreshTime"] = 0;


$tdatazresigns_Chart[".shortTableName"] = "zresigns_Chart";
$tdatazresigns_Chart[".nSecOptions"] = 0;
$tdatazresigns_Chart[".recsPerRowPrint"] = 1;
$tdatazresigns_Chart[".mainTableOwnerID"] = "";
$tdatazresigns_Chart[".moveNext"] = 1;
$tdatazresigns_Chart[".entityType"] = 3;

$tdatazresigns_Chart[".strOriginalTableName"] = "zresigns";

	



$tdatazresigns_Chart[".showAddInPopup"] = false;

$tdatazresigns_Chart[".showEditInPopup"] = false;

$tdatazresigns_Chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatazresigns_Chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatazresigns_Chart[".fieldsForRegister"] = array();

$tdatazresigns_Chart[".listAjax"] = false;

	$tdatazresigns_Chart[".audit"] = false;

	$tdatazresigns_Chart[".locking"] = false;



$tdatazresigns_Chart[".list"] = true;



$tdatazresigns_Chart[".reorderRecordsByHeader"] = true;








$tdatazresigns_Chart[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatazresigns_Chart[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatazresigns_Chart[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatazresigns_Chart[".searchSaving"] = false;
//

$tdatazresigns_Chart[".showSearchPanel"] = true;
		$tdatazresigns_Chart[".flexibleSearch"] = true;

$tdatazresigns_Chart[".isUseAjaxSuggest"] = true;




																																																																																																																																																																																																																																																																																																																														

$tdatazresigns_Chart[".ajaxCodeSnippetAdded"] = false;

$tdatazresigns_Chart[".buttonsAdded"] = false;

$tdatazresigns_Chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatazresigns_Chart[".isUseTimeForSearch"] = false;





$tdatazresigns_Chart[".allSearchFields"] = array();
$tdatazresigns_Chart[".filterFields"] = array();
$tdatazresigns_Chart[".requiredSearchFields"] = array();

$tdatazresigns_Chart[".allSearchFields"][] = "TotalResignation";
	

$tdatazresigns_Chart[".googleLikeFields"] = array();
$tdatazresigns_Chart[".googleLikeFields"][] = "TotalResignation";


$tdatazresigns_Chart[".advSearchFields"] = array();
$tdatazresigns_Chart[".advSearchFields"][] = "TotalResignation";

$tdatazresigns_Chart[".tableType"] = "chart";

$tdatazresigns_Chart[".printerPageOrientation"] = 0;
$tdatazresigns_Chart[".nPrinterPageScale"] = 100;

$tdatazresigns_Chart[".nPrinterSplitRecords"] = 40;

$tdatazresigns_Chart[".nPrinterPDFSplitRecords"] = 40;



$tdatazresigns_Chart[".geocodingEnabled"] = false;



// chart settings
$tdatazresigns_Chart[".chartType"] = "Gauge";
// end of chart settings


$tdatazresigns_Chart[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatazresigns_Chart[".strOrderBy"] = $tstrOrderBy;

$tdatazresigns_Chart[".orderindexes"] = array();

$tdatazresigns_Chart[".sqlHead"] = "SELECT TotalResignation";
$tdatazresigns_Chart[".sqlFrom"] = "FROM zresigns";
$tdatazresigns_Chart[".sqlWhereExpr"] = "";
$tdatazresigns_Chart[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatazresigns_Chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatazresigns_Chart[".arrGroupsPerPage"] = $arrGPP;

$tdatazresigns_Chart[".highlightSearchResults"] = true;

$tableKeyszresigns_Chart = array();
$tdatazresigns_Chart[".Keys"] = $tableKeyszresigns_Chart;

$tdatazresigns_Chart[".listFields"] = array();
$tdatazresigns_Chart[".listFields"][] = "TotalResignation";

$tdatazresigns_Chart[".hideMobileList"] = array();


$tdatazresigns_Chart[".viewFields"] = array();
$tdatazresigns_Chart[".viewFields"][] = "TotalResignation";

$tdatazresigns_Chart[".addFields"] = array();
$tdatazresigns_Chart[".addFields"][] = "TotalResignation";

$tdatazresigns_Chart[".masterListFields"] = array();
$tdatazresigns_Chart[".masterListFields"][] = "TotalResignation";

$tdatazresigns_Chart[".inlineAddFields"] = array();
$tdatazresigns_Chart[".inlineAddFields"][] = "TotalResignation";

$tdatazresigns_Chart[".editFields"] = array();
$tdatazresigns_Chart[".editFields"][] = "TotalResignation";

$tdatazresigns_Chart[".inlineEditFields"] = array();
$tdatazresigns_Chart[".inlineEditFields"][] = "TotalResignation";

$tdatazresigns_Chart[".updateSelectedFields"] = array();
$tdatazresigns_Chart[".updateSelectedFields"][] = "TotalResignation";


$tdatazresigns_Chart[".exportFields"] = array();
$tdatazresigns_Chart[".exportFields"][] = "TotalResignation";

$tdatazresigns_Chart[".importFields"] = array();
$tdatazresigns_Chart[".importFields"][] = "TotalResignation";

$tdatazresigns_Chart[".printFields"] = array();
$tdatazresigns_Chart[".printFields"][] = "TotalResignation";


//	TotalResignation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TotalResignation";
	$fdata["GoodName"] = "TotalResignation";
	$fdata["ownerTable"] = "zresigns";
	$fdata["Label"] = GetFieldLabel("zresigns_Chart","TotalResignation");
	$fdata["FieldType"] = 20;

	
	
	
			
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

		$fdata["strField"] = "TotalResignation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TotalResignation";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
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




	$tdatazresigns_Chart["TotalResignation"] = $fdata;

	$tdatazresigns_Chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">zresigns Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">gauge</attr>
		</attr>

		<attr value="parameters">';
	$tdatazresigns_Chart[".chartXml"] .= '<attr value="0">
			<attr value="name">TotalResignation</attr>';
	$tdatazresigns_Chart[".chartXml"] .= '<attr value="gaugeMinValue">0</attr>
			<attr value="gaugeMaxValue">20</attr>
			<attr value="gaugeColorZone">';
	$tdatazresigns_Chart[".chartXml"] .= '<attr value="0">
			<attr value="gaugeBeginColor">1</attr>
			<attr value="gaugeEndColor">5</attr>
			<attr value="gaugeColor">3CB371</attr>
		</attr>';
	$tdatazresigns_Chart[".chartXml"] .= '<attr value="1">
			<attr value="gaugeBeginColor">5</attr>
			<attr value="gaugeEndColor">10</attr>
			<attr value="gaugeColor">FFD700</attr>
		</attr>';
	$tdatazresigns_Chart[".chartXml"] .= '<attr value="2">
			<attr value="gaugeBeginColor">10</attr>
			<attr value="gaugeEndColor">20</attr>
			<attr value="gaugeColor">FF0000</attr>
		</attr>';
	$tdatazresigns_Chart[".chartXml"] .= '<attr value="3">
			<attr value="gaugeBeginColor">0</attr>
			<attr value="gaugeEndColor">1</attr>
			<attr value="gaugeColor">0080C0</attr>
		</attr>';
	$tdatazresigns_Chart[".chartXml"] .= '</attr>';
	$tdatazresigns_Chart[".chartXml"] .= '</attr>';
	$tdatazresigns_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">TotalResignation</attr>
	</attr>';
	$tdatazresigns_Chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatazresigns_Chart[".chartXml"] .= '<attr value="head">'.xmlencode("").'</attr>
<attr value="foot">'.xmlencode("Resignations").'</attr>
<attr value="y_axis_label">'.xmlencode("TotalResignation").'</attr>


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
$tdatazresigns_Chart[".chartXml"] .= '<attr value="gaugestyle">0</attr>';
$tdatazresigns_Chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatazresigns_Chart[".chartXml"] .= '<attr value="0">
		<attr value="name">TotalResignation</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("zresigns_Chart","TotalResignation")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatazresigns_Chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">zresigns Chart</attr>
<attr value="short_table_name">zresigns_Chart</attr>
</attr>

</chart>';

$tables_data["zresigns Chart"]=&$tdatazresigns_Chart;
$field_labels["zresigns_Chart"] = &$fieldLabelszresigns_Chart;
$fieldToolTips["zresigns_Chart"] = &$fieldToolTipszresigns_Chart;
$placeHolders["zresigns_Chart"] = &$placeHolderszresigns_Chart;
$page_titles["zresigns_Chart"] = &$pageTitleszresigns_Chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["zresigns Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["zresigns Chart"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_zresigns_Chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TotalResignation";
$proto0["m_strFrom"] = "FROM zresigns";
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
	"m_strName" => "TotalResignation",
	"m_strTable" => "zresigns",
	"m_srcTableName" => "zresigns Chart"
));

$proto6["m_sql"] = "TotalResignation";
$proto6["m_srcTableName"] = "zresigns Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "zresigns";
$proto9["m_srcTableName"] = "zresigns Chart";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "TotalResignation";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "zresigns";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "zresigns Chart";
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
$proto0["m_srcTableName"]="zresigns Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_zresigns_Chart = createSqlQuery_zresigns_Chart();


	
		;

	

$tdatazresigns_Chart[".sqlquery"] = $queryData_zresigns_Chart;

$tableEvents["zresigns Chart"] = new eventsBase;
$tdatazresigns_Chart[".hasEvents"] = false;

?>