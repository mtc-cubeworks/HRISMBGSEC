<?php
require_once(getabspath("classes/cipherer.php"));




$tdatazotdiv_Chart = array();
	$tdatazotdiv_Chart[".ShortName"] = "zotdiv_Chart";
	$tdatazotdiv_Chart[".OwnerID"] = "";
	$tdatazotdiv_Chart[".OriginalTable"] = "zotdiv";

//	field labels
$fieldLabelszotdiv_Chart = array();
$fieldToolTipszotdiv_Chart = array();
$pageTitleszotdiv_Chart = array();
$placeHolderszotdiv_Chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelszotdiv_Chart["English"] = array();
	$fieldToolTipszotdiv_Chart["English"] = array();
	$placeHolderszotdiv_Chart["English"] = array();
	$pageTitleszotdiv_Chart["English"] = array();
	$fieldLabelszotdiv_Chart["English"]["DvID"] = "Dv ID";
	$fieldToolTipszotdiv_Chart["English"]["DvID"] = "";
	$placeHolderszotdiv_Chart["English"]["DvID"] = "";
	$fieldLabelszotdiv_Chart["English"]["Division"] = "Division";
	$fieldToolTipszotdiv_Chart["English"]["Division"] = "";
	$placeHolderszotdiv_Chart["English"]["Division"] = "";
	$fieldLabelszotdiv_Chart["English"]["TotalOT"] = "Total OT";
	$fieldToolTipszotdiv_Chart["English"]["TotalOT"] = "";
	$placeHolderszotdiv_Chart["English"]["TotalOT"] = "";
	if (count($fieldToolTipszotdiv_Chart["English"]))
		$tdatazotdiv_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelszotdiv_Chart[""] = array();
	$fieldToolTipszotdiv_Chart[""] = array();
	$placeHolderszotdiv_Chart[""] = array();
	$pageTitleszotdiv_Chart[""] = array();
	$fieldLabelszotdiv_Chart[""]["DvID"] = "Dv ID";
	$fieldToolTipszotdiv_Chart[""]["DvID"] = "";
	$placeHolderszotdiv_Chart[""]["DvID"] = "";
	$fieldLabelszotdiv_Chart[""]["Division"] = "Division";
	$fieldToolTipszotdiv_Chart[""]["Division"] = "";
	$placeHolderszotdiv_Chart[""]["Division"] = "";
	$fieldLabelszotdiv_Chart[""]["TotalOT"] = "Total OT";
	$fieldToolTipszotdiv_Chart[""]["TotalOT"] = "";
	$placeHolderszotdiv_Chart[""]["TotalOT"] = "";
	if (count($fieldToolTipszotdiv_Chart[""]))
		$tdatazotdiv_Chart[".isUseToolTips"] = true;
}


	$tdatazotdiv_Chart[".NCSearch"] = true;

	$tdatazotdiv_Chart[".ChartRefreshTime"] = 0;


$tdatazotdiv_Chart[".shortTableName"] = "zotdiv_Chart";
$tdatazotdiv_Chart[".nSecOptions"] = 0;
$tdatazotdiv_Chart[".recsPerRowPrint"] = 1;
$tdatazotdiv_Chart[".mainTableOwnerID"] = "";
$tdatazotdiv_Chart[".moveNext"] = 1;
$tdatazotdiv_Chart[".entityType"] = 3;

$tdatazotdiv_Chart[".strOriginalTableName"] = "zotdiv";

	



$tdatazotdiv_Chart[".showAddInPopup"] = false;

$tdatazotdiv_Chart[".showEditInPopup"] = false;

$tdatazotdiv_Chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatazotdiv_Chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatazotdiv_Chart[".fieldsForRegister"] = array();

$tdatazotdiv_Chart[".listAjax"] = false;

	$tdatazotdiv_Chart[".audit"] = false;

	$tdatazotdiv_Chart[".locking"] = false;



$tdatazotdiv_Chart[".list"] = true;



$tdatazotdiv_Chart[".reorderRecordsByHeader"] = true;








$tdatazotdiv_Chart[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatazotdiv_Chart[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatazotdiv_Chart[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatazotdiv_Chart[".searchSaving"] = false;
//

$tdatazotdiv_Chart[".showSearchPanel"] = true;
		$tdatazotdiv_Chart[".flexibleSearch"] = true;

$tdatazotdiv_Chart[".isUseAjaxSuggest"] = true;




																																																																																																																																																																																																																																																																																																																														

$tdatazotdiv_Chart[".ajaxCodeSnippetAdded"] = false;

$tdatazotdiv_Chart[".buttonsAdded"] = false;

$tdatazotdiv_Chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatazotdiv_Chart[".isUseTimeForSearch"] = false;





$tdatazotdiv_Chart[".allSearchFields"] = array();
$tdatazotdiv_Chart[".filterFields"] = array();
$tdatazotdiv_Chart[".requiredSearchFields"] = array();

$tdatazotdiv_Chart[".allSearchFields"][] = "DvID";
	$tdatazotdiv_Chart[".allSearchFields"][] = "Division";
	$tdatazotdiv_Chart[".allSearchFields"][] = "TotalOT";
	

$tdatazotdiv_Chart[".googleLikeFields"] = array();
$tdatazotdiv_Chart[".googleLikeFields"][] = "DvID";
$tdatazotdiv_Chart[".googleLikeFields"][] = "Division";
$tdatazotdiv_Chart[".googleLikeFields"][] = "TotalOT";


$tdatazotdiv_Chart[".advSearchFields"] = array();
$tdatazotdiv_Chart[".advSearchFields"][] = "DvID";
$tdatazotdiv_Chart[".advSearchFields"][] = "Division";
$tdatazotdiv_Chart[".advSearchFields"][] = "TotalOT";

$tdatazotdiv_Chart[".tableType"] = "chart";

$tdatazotdiv_Chart[".printerPageOrientation"] = 0;
$tdatazotdiv_Chart[".nPrinterPageScale"] = 100;

$tdatazotdiv_Chart[".nPrinterSplitRecords"] = 40;

$tdatazotdiv_Chart[".nPrinterPDFSplitRecords"] = 40;



$tdatazotdiv_Chart[".geocodingEnabled"] = false;



// chart settings
$tdatazotdiv_Chart[".chartType"] = "2DDoughnut";
// end of chart settings


$tdatazotdiv_Chart[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatazotdiv_Chart[".strOrderBy"] = $tstrOrderBy;

$tdatazotdiv_Chart[".orderindexes"] = array();

$tdatazotdiv_Chart[".sqlHead"] = "SELECT DvID,  	Division,  	TotalOT";
$tdatazotdiv_Chart[".sqlFrom"] = "FROM zotdiv";
$tdatazotdiv_Chart[".sqlWhereExpr"] = "";
$tdatazotdiv_Chart[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatazotdiv_Chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatazotdiv_Chart[".arrGroupsPerPage"] = $arrGPP;

$tdatazotdiv_Chart[".highlightSearchResults"] = true;

$tableKeyszotdiv_Chart = array();
$tdatazotdiv_Chart[".Keys"] = $tableKeyszotdiv_Chart;

$tdatazotdiv_Chart[".listFields"] = array();
$tdatazotdiv_Chart[".listFields"][] = "DvID";
$tdatazotdiv_Chart[".listFields"][] = "Division";
$tdatazotdiv_Chart[".listFields"][] = "TotalOT";

$tdatazotdiv_Chart[".hideMobileList"] = array();


$tdatazotdiv_Chart[".viewFields"] = array();
$tdatazotdiv_Chart[".viewFields"][] = "DvID";
$tdatazotdiv_Chart[".viewFields"][] = "Division";
$tdatazotdiv_Chart[".viewFields"][] = "TotalOT";

$tdatazotdiv_Chart[".addFields"] = array();
$tdatazotdiv_Chart[".addFields"][] = "DvID";
$tdatazotdiv_Chart[".addFields"][] = "Division";
$tdatazotdiv_Chart[".addFields"][] = "TotalOT";

$tdatazotdiv_Chart[".masterListFields"] = array();
$tdatazotdiv_Chart[".masterListFields"][] = "DvID";
$tdatazotdiv_Chart[".masterListFields"][] = "Division";
$tdatazotdiv_Chart[".masterListFields"][] = "TotalOT";

$tdatazotdiv_Chart[".inlineAddFields"] = array();
$tdatazotdiv_Chart[".inlineAddFields"][] = "DvID";
$tdatazotdiv_Chart[".inlineAddFields"][] = "Division";
$tdatazotdiv_Chart[".inlineAddFields"][] = "TotalOT";

$tdatazotdiv_Chart[".editFields"] = array();
$tdatazotdiv_Chart[".editFields"][] = "DvID";
$tdatazotdiv_Chart[".editFields"][] = "Division";
$tdatazotdiv_Chart[".editFields"][] = "TotalOT";

$tdatazotdiv_Chart[".inlineEditFields"] = array();
$tdatazotdiv_Chart[".inlineEditFields"][] = "DvID";
$tdatazotdiv_Chart[".inlineEditFields"][] = "Division";
$tdatazotdiv_Chart[".inlineEditFields"][] = "TotalOT";

$tdatazotdiv_Chart[".updateSelectedFields"] = array();
$tdatazotdiv_Chart[".updateSelectedFields"][] = "DvID";
$tdatazotdiv_Chart[".updateSelectedFields"][] = "Division";
$tdatazotdiv_Chart[".updateSelectedFields"][] = "TotalOT";


$tdatazotdiv_Chart[".exportFields"] = array();
$tdatazotdiv_Chart[".exportFields"][] = "DvID";
$tdatazotdiv_Chart[".exportFields"][] = "Division";
$tdatazotdiv_Chart[".exportFields"][] = "TotalOT";

$tdatazotdiv_Chart[".importFields"] = array();
$tdatazotdiv_Chart[".importFields"][] = "DvID";
$tdatazotdiv_Chart[".importFields"][] = "Division";
$tdatazotdiv_Chart[".importFields"][] = "TotalOT";

$tdatazotdiv_Chart[".printFields"] = array();
$tdatazotdiv_Chart[".printFields"][] = "DvID";
$tdatazotdiv_Chart[".printFields"][] = "Division";
$tdatazotdiv_Chart[".printFields"][] = "TotalOT";


//	DvID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DvID";
	$fdata["GoodName"] = "DvID";
	$fdata["ownerTable"] = "zotdiv";
	$fdata["Label"] = GetFieldLabel("zotdiv_Chart","DvID");
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

		$fdata["strField"] = "DvID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DvID";

	
	
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




	$tdatazotdiv_Chart["DvID"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "zotdiv";
	$fdata["Label"] = GetFieldLabel("zotdiv_Chart","Division");
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

		$fdata["strField"] = "Division";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Division";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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




	$tdatazotdiv_Chart["Division"] = $fdata;
//	TotalOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TotalOT";
	$fdata["GoodName"] = "TotalOT";
	$fdata["ownerTable"] = "zotdiv";
	$fdata["Label"] = GetFieldLabel("zotdiv_Chart","TotalOT");
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




	$tdatazotdiv_Chart["TotalOT"] = $fdata;

	$tdatazotdiv_Chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">zotdiv Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_doughnut</attr>
		</attr>

		<attr value="parameters">';
	$tdatazotdiv_Chart[".chartXml"] .= '<attr value="0">
			<attr value="name">TotalOT</attr>';
	$tdatazotdiv_Chart[".chartXml"] .= '</attr>';
	$tdatazotdiv_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">Division</attr>
	</attr>';
	$tdatazotdiv_Chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatazotdiv_Chart[".chartXml"] .= '<attr value="head">'.xmlencode("Division OT Chart").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("DvID").'</attr>


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
$tdatazotdiv_Chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatazotdiv_Chart[".chartXml"] .= '<attr value="0">
		<attr value="name">DvID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("zotdiv_Chart","DvID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatazotdiv_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">Division</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("zotdiv_Chart","Division")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatazotdiv_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">TotalOT</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("zotdiv_Chart","TotalOT")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatazotdiv_Chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">zotdiv Chart</attr>
<attr value="short_table_name">zotdiv_Chart</attr>
</attr>

</chart>';

$tables_data["zotdiv Chart"]=&$tdatazotdiv_Chart;
$field_labels["zotdiv_Chart"] = &$fieldLabelszotdiv_Chart;
$fieldToolTips["zotdiv_Chart"] = &$fieldToolTipszotdiv_Chart;
$placeHolders["zotdiv_Chart"] = &$placeHolderszotdiv_Chart;
$page_titles["zotdiv_Chart"] = &$pageTitleszotdiv_Chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["zotdiv Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["zotdiv Chart"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_zotdiv_Chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DvID,  	Division,  	TotalOT";
$proto0["m_strFrom"] = "FROM zotdiv";
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
	"m_strName" => "DvID",
	"m_strTable" => "zotdiv",
	"m_srcTableName" => "zotdiv Chart"
));

$proto6["m_sql"] = "DvID";
$proto6["m_srcTableName"] = "zotdiv Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "zotdiv",
	"m_srcTableName" => "zotdiv Chart"
));

$proto8["m_sql"] = "Division";
$proto8["m_srcTableName"] = "zotdiv Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalOT",
	"m_strTable" => "zotdiv",
	"m_srcTableName" => "zotdiv Chart"
));

$proto10["m_sql"] = "TotalOT";
$proto10["m_srcTableName"] = "zotdiv Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "zotdiv";
$proto13["m_srcTableName"] = "zotdiv Chart";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "DvID";
$proto13["m_columns"][] = "Division";
$proto13["m_columns"][] = "TotalOT";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "zotdiv";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "zotdiv Chart";
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
$proto0["m_srcTableName"]="zotdiv Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_zotdiv_Chart = createSqlQuery_zotdiv_Chart();


	
		;

			

$tdatazotdiv_Chart[".sqlquery"] = $queryData_zotdiv_Chart;

$tableEvents["zotdiv Chart"] = new eventsBase;
$tdatazotdiv_Chart[".hasEvents"] = false;

?>