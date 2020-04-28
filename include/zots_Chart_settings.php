<?php
require_once(getabspath("classes/cipherer.php"));




$tdatazots_Chart = array();
	$tdatazots_Chart[".ShortName"] = "zots_Chart";
	$tdatazots_Chart[".OwnerID"] = "";
	$tdatazots_Chart[".OriginalTable"] = "zots";

//	field labels
$fieldLabelszots_Chart = array();
$fieldToolTipszots_Chart = array();
$pageTitleszots_Chart = array();
$placeHolderszots_Chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelszots_Chart["English"] = array();
	$fieldToolTipszots_Chart["English"] = array();
	$placeHolderszots_Chart["English"] = array();
	$pageTitleszots_Chart["English"] = array();
	$fieldLabelszots_Chart["English"]["EnID"] = "En ID";
	$fieldToolTipszots_Chart["English"]["EnID"] = "";
	$placeHolderszots_Chart["English"]["EnID"] = "";
	$fieldLabelszots_Chart["English"]["EmployerName"] = "Employer Name";
	$fieldToolTipszots_Chart["English"]["EmployerName"] = "";
	$placeHolderszots_Chart["English"]["EmployerName"] = "";
	$fieldLabelszots_Chart["English"]["TotalOT"] = "Total OT";
	$fieldToolTipszots_Chart["English"]["TotalOT"] = "";
	$placeHolderszots_Chart["English"]["TotalOT"] = "";
	if (count($fieldToolTipszots_Chart["English"]))
		$tdatazots_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelszots_Chart[""] = array();
	$fieldToolTipszots_Chart[""] = array();
	$placeHolderszots_Chart[""] = array();
	$pageTitleszots_Chart[""] = array();
	$fieldLabelszots_Chart[""]["EnID"] = "En ID";
	$fieldToolTipszots_Chart[""]["EnID"] = "";
	$placeHolderszots_Chart[""]["EnID"] = "";
	$fieldLabelszots_Chart[""]["EmployerName"] = "Employer Name";
	$fieldToolTipszots_Chart[""]["EmployerName"] = "";
	$placeHolderszots_Chart[""]["EmployerName"] = "";
	$fieldLabelszots_Chart[""]["TotalOT"] = "Total OT";
	$fieldToolTipszots_Chart[""]["TotalOT"] = "";
	$placeHolderszots_Chart[""]["TotalOT"] = "";
	if (count($fieldToolTipszots_Chart[""]))
		$tdatazots_Chart[".isUseToolTips"] = true;
}


	$tdatazots_Chart[".NCSearch"] = true;

	$tdatazots_Chart[".ChartRefreshTime"] = 0;


$tdatazots_Chart[".shortTableName"] = "zots_Chart";
$tdatazots_Chart[".nSecOptions"] = 0;
$tdatazots_Chart[".recsPerRowPrint"] = 1;
$tdatazots_Chart[".mainTableOwnerID"] = "";
$tdatazots_Chart[".moveNext"] = 1;
$tdatazots_Chart[".entityType"] = 3;

$tdatazots_Chart[".strOriginalTableName"] = "zots";

	



$tdatazots_Chart[".showAddInPopup"] = false;

$tdatazots_Chart[".showEditInPopup"] = false;

$tdatazots_Chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatazots_Chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatazots_Chart[".fieldsForRegister"] = array();

$tdatazots_Chart[".listAjax"] = false;

	$tdatazots_Chart[".audit"] = false;

	$tdatazots_Chart[".locking"] = false;



$tdatazots_Chart[".list"] = true;



$tdatazots_Chart[".reorderRecordsByHeader"] = true;








$tdatazots_Chart[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatazots_Chart[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatazots_Chart[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatazots_Chart[".searchSaving"] = false;
//

$tdatazots_Chart[".showSearchPanel"] = true;
		$tdatazots_Chart[".flexibleSearch"] = true;

$tdatazots_Chart[".isUseAjaxSuggest"] = true;




																																																																																																																																																																																																																																																																																																																														

$tdatazots_Chart[".ajaxCodeSnippetAdded"] = false;

$tdatazots_Chart[".buttonsAdded"] = false;

$tdatazots_Chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatazots_Chart[".isUseTimeForSearch"] = false;





$tdatazots_Chart[".allSearchFields"] = array();
$tdatazots_Chart[".filterFields"] = array();
$tdatazots_Chart[".requiredSearchFields"] = array();

$tdatazots_Chart[".allSearchFields"][] = "EnID";
	$tdatazots_Chart[".allSearchFields"][] = "EmployerName";
	$tdatazots_Chart[".allSearchFields"][] = "TotalOT";
	

$tdatazots_Chart[".googleLikeFields"] = array();
$tdatazots_Chart[".googleLikeFields"][] = "EnID";
$tdatazots_Chart[".googleLikeFields"][] = "EmployerName";
$tdatazots_Chart[".googleLikeFields"][] = "TotalOT";


$tdatazots_Chart[".advSearchFields"] = array();
$tdatazots_Chart[".advSearchFields"][] = "EnID";
$tdatazots_Chart[".advSearchFields"][] = "EmployerName";
$tdatazots_Chart[".advSearchFields"][] = "TotalOT";

$tdatazots_Chart[".tableType"] = "chart";

$tdatazots_Chart[".printerPageOrientation"] = 0;
$tdatazots_Chart[".nPrinterPageScale"] = 100;

$tdatazots_Chart[".nPrinterSplitRecords"] = 40;

$tdatazots_Chart[".nPrinterPDFSplitRecords"] = 40;



$tdatazots_Chart[".geocodingEnabled"] = false;



// chart settings
$tdatazots_Chart[".chartType"] = "2DDoughnut";
// end of chart settings


$tdatazots_Chart[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatazots_Chart[".strOrderBy"] = $tstrOrderBy;

$tdatazots_Chart[".orderindexes"] = array();

$tdatazots_Chart[".sqlHead"] = "SELECT EnID,  	EmployerName,  	TotalOT";
$tdatazots_Chart[".sqlFrom"] = "FROM zots";
$tdatazots_Chart[".sqlWhereExpr"] = "";
$tdatazots_Chart[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatazots_Chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatazots_Chart[".arrGroupsPerPage"] = $arrGPP;

$tdatazots_Chart[".highlightSearchResults"] = true;

$tableKeyszots_Chart = array();
$tdatazots_Chart[".Keys"] = $tableKeyszots_Chart;

$tdatazots_Chart[".listFields"] = array();
$tdatazots_Chart[".listFields"][] = "EnID";
$tdatazots_Chart[".listFields"][] = "EmployerName";
$tdatazots_Chart[".listFields"][] = "TotalOT";

$tdatazots_Chart[".hideMobileList"] = array();


$tdatazots_Chart[".viewFields"] = array();
$tdatazots_Chart[".viewFields"][] = "EnID";
$tdatazots_Chart[".viewFields"][] = "EmployerName";
$tdatazots_Chart[".viewFields"][] = "TotalOT";

$tdatazots_Chart[".addFields"] = array();
$tdatazots_Chart[".addFields"][] = "EnID";
$tdatazots_Chart[".addFields"][] = "EmployerName";
$tdatazots_Chart[".addFields"][] = "TotalOT";

$tdatazots_Chart[".masterListFields"] = array();
$tdatazots_Chart[".masterListFields"][] = "EnID";
$tdatazots_Chart[".masterListFields"][] = "EmployerName";
$tdatazots_Chart[".masterListFields"][] = "TotalOT";

$tdatazots_Chart[".inlineAddFields"] = array();
$tdatazots_Chart[".inlineAddFields"][] = "EnID";
$tdatazots_Chart[".inlineAddFields"][] = "EmployerName";
$tdatazots_Chart[".inlineAddFields"][] = "TotalOT";

$tdatazots_Chart[".editFields"] = array();
$tdatazots_Chart[".editFields"][] = "EnID";
$tdatazots_Chart[".editFields"][] = "EmployerName";
$tdatazots_Chart[".editFields"][] = "TotalOT";

$tdatazots_Chart[".inlineEditFields"] = array();
$tdatazots_Chart[".inlineEditFields"][] = "EnID";
$tdatazots_Chart[".inlineEditFields"][] = "EmployerName";
$tdatazots_Chart[".inlineEditFields"][] = "TotalOT";

$tdatazots_Chart[".updateSelectedFields"] = array();
$tdatazots_Chart[".updateSelectedFields"][] = "EnID";
$tdatazots_Chart[".updateSelectedFields"][] = "EmployerName";
$tdatazots_Chart[".updateSelectedFields"][] = "TotalOT";


$tdatazots_Chart[".exportFields"] = array();
$tdatazots_Chart[".exportFields"][] = "EnID";
$tdatazots_Chart[".exportFields"][] = "EmployerName";
$tdatazots_Chart[".exportFields"][] = "TotalOT";

$tdatazots_Chart[".importFields"] = array();
$tdatazots_Chart[".importFields"][] = "EnID";
$tdatazots_Chart[".importFields"][] = "EmployerName";
$tdatazots_Chart[".importFields"][] = "TotalOT";

$tdatazots_Chart[".printFields"] = array();
$tdatazots_Chart[".printFields"][] = "EnID";
$tdatazots_Chart[".printFields"][] = "EmployerName";
$tdatazots_Chart[".printFields"][] = "TotalOT";


//	EnID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EnID";
	$fdata["GoodName"] = "EnID";
	$fdata["ownerTable"] = "zots";
	$fdata["Label"] = GetFieldLabel("zots_Chart","EnID");
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

		$fdata["strField"] = "EnID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EnID";

	
	
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




	$tdatazots_Chart["EnID"] = $fdata;
//	EmployerName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EmployerName";
	$fdata["GoodName"] = "EmployerName";
	$fdata["ownerTable"] = "zots";
	$fdata["Label"] = GetFieldLabel("zots_Chart","EmployerName");
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

		$fdata["strField"] = "EmployerName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmployerName";

	
	
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
			$edata["EditParams"].= " maxlength=80";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatazots_Chart["EmployerName"] = $fdata;
//	TotalOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TotalOT";
	$fdata["GoodName"] = "TotalOT";
	$fdata["ownerTable"] = "zots";
	$fdata["Label"] = GetFieldLabel("zots_Chart","TotalOT");
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

		$fdata["strField"] = "TotalOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TotalOT";

	
	
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




	$tdatazots_Chart["TotalOT"] = $fdata;

	$tdatazots_Chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">zots Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_doughnut</attr>
		</attr>

		<attr value="parameters">';
	$tdatazots_Chart[".chartXml"] .= '<attr value="0">
			<attr value="name">TotalOT</attr>';
	$tdatazots_Chart[".chartXml"] .= '</attr>';
	$tdatazots_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">EmployerName</attr>
	</attr>';
	$tdatazots_Chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatazots_Chart[".chartXml"] .= '<attr value="head">'.xmlencode("Employer OT Chart").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("EnID").'</attr>


<attr value="slegend">true</attr>
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
$tdatazots_Chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatazots_Chart[".chartXml"] .= '<attr value="0">
		<attr value="name">EnID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("zots_Chart","EnID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatazots_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">EmployerName</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("zots_Chart","EmployerName")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatazots_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">TotalOT</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("zots_Chart","TotalOT")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatazots_Chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">zots Chart</attr>
<attr value="short_table_name">zots_Chart</attr>
</attr>

</chart>';

$tables_data["zots Chart"]=&$tdatazots_Chart;
$field_labels["zots_Chart"] = &$fieldLabelszots_Chart;
$fieldToolTips["zots_Chart"] = &$fieldToolTipszots_Chart;
$placeHolders["zots_Chart"] = &$placeHolderszots_Chart;
$page_titles["zots_Chart"] = &$pageTitleszots_Chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["zots Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["zots Chart"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_zots_Chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EnID,  	EmployerName,  	TotalOT";
$proto0["m_strFrom"] = "FROM zots";
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
	"m_strName" => "EnID",
	"m_strTable" => "zots",
	"m_srcTableName" => "zots Chart"
));

$proto6["m_sql"] = "EnID";
$proto6["m_srcTableName"] = "zots Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployerName",
	"m_strTable" => "zots",
	"m_srcTableName" => "zots Chart"
));

$proto8["m_sql"] = "EmployerName";
$proto8["m_srcTableName"] = "zots Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalOT",
	"m_strTable" => "zots",
	"m_srcTableName" => "zots Chart"
));

$proto10["m_sql"] = "TotalOT";
$proto10["m_srcTableName"] = "zots Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "zots";
$proto13["m_srcTableName"] = "zots Chart";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "EnID";
$proto13["m_columns"][] = "EmployerName";
$proto13["m_columns"][] = "TotalOT";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "zots";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "zots Chart";
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
$proto0["m_srcTableName"]="zots Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_zots_Chart = createSqlQuery_zots_Chart();


	
		;

			

$tdatazots_Chart[".sqlquery"] = $queryData_zots_Chart;

$tableEvents["zots Chart"] = new eventsBase;
$tdatazots_Chart[".hasEvents"] = false;

?>