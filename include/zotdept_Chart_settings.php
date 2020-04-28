<?php
require_once(getabspath("classes/cipherer.php"));




$tdatazotdept_Chart = array();
	$tdatazotdept_Chart[".ShortName"] = "zotdept_Chart";
	$tdatazotdept_Chart[".OwnerID"] = "";
	$tdatazotdept_Chart[".OriginalTable"] = "zotdept";

//	field labels
$fieldLabelszotdept_Chart = array();
$fieldToolTipszotdept_Chart = array();
$pageTitleszotdept_Chart = array();
$placeHolderszotdept_Chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelszotdept_Chart["English"] = array();
	$fieldToolTipszotdept_Chart["English"] = array();
	$placeHolderszotdept_Chart["English"] = array();
	$pageTitleszotdept_Chart["English"] = array();
	$fieldLabelszotdept_Chart["English"]["DeID"] = "De ID";
	$fieldToolTipszotdept_Chart["English"]["DeID"] = "";
	$placeHolderszotdept_Chart["English"]["DeID"] = "";
	$fieldLabelszotdept_Chart["English"]["Department"] = "Department";
	$fieldToolTipszotdept_Chart["English"]["Department"] = "";
	$placeHolderszotdept_Chart["English"]["Department"] = "";
	$fieldLabelszotdept_Chart["English"]["TotalOT"] = "Total OT";
	$fieldToolTipszotdept_Chart["English"]["TotalOT"] = "";
	$placeHolderszotdept_Chart["English"]["TotalOT"] = "";
	if (count($fieldToolTipszotdept_Chart["English"]))
		$tdatazotdept_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelszotdept_Chart[""] = array();
	$fieldToolTipszotdept_Chart[""] = array();
	$placeHolderszotdept_Chart[""] = array();
	$pageTitleszotdept_Chart[""] = array();
	$fieldLabelszotdept_Chart[""]["DeID"] = "De ID";
	$fieldToolTipszotdept_Chart[""]["DeID"] = "";
	$placeHolderszotdept_Chart[""]["DeID"] = "";
	$fieldLabelszotdept_Chart[""]["Department"] = "Department";
	$fieldToolTipszotdept_Chart[""]["Department"] = "";
	$placeHolderszotdept_Chart[""]["Department"] = "";
	$fieldLabelszotdept_Chart[""]["TotalOT"] = "Total OT";
	$fieldToolTipszotdept_Chart[""]["TotalOT"] = "";
	$placeHolderszotdept_Chart[""]["TotalOT"] = "";
	if (count($fieldToolTipszotdept_Chart[""]))
		$tdatazotdept_Chart[".isUseToolTips"] = true;
}


	$tdatazotdept_Chart[".NCSearch"] = true;

	$tdatazotdept_Chart[".ChartRefreshTime"] = 0;


$tdatazotdept_Chart[".shortTableName"] = "zotdept_Chart";
$tdatazotdept_Chart[".nSecOptions"] = 0;
$tdatazotdept_Chart[".recsPerRowPrint"] = 1;
$tdatazotdept_Chart[".mainTableOwnerID"] = "";
$tdatazotdept_Chart[".moveNext"] = 1;
$tdatazotdept_Chart[".entityType"] = 3;

$tdatazotdept_Chart[".strOriginalTableName"] = "zotdept";

	



$tdatazotdept_Chart[".showAddInPopup"] = false;

$tdatazotdept_Chart[".showEditInPopup"] = false;

$tdatazotdept_Chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatazotdept_Chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatazotdept_Chart[".fieldsForRegister"] = array();

$tdatazotdept_Chart[".listAjax"] = false;

	$tdatazotdept_Chart[".audit"] = false;

	$tdatazotdept_Chart[".locking"] = false;



$tdatazotdept_Chart[".list"] = true;



$tdatazotdept_Chart[".reorderRecordsByHeader"] = true;








$tdatazotdept_Chart[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatazotdept_Chart[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatazotdept_Chart[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatazotdept_Chart[".searchSaving"] = false;
//

$tdatazotdept_Chart[".showSearchPanel"] = true;
		$tdatazotdept_Chart[".flexibleSearch"] = true;

$tdatazotdept_Chart[".isUseAjaxSuggest"] = true;




																																																																																																																																																																																																																																																																																																																														

$tdatazotdept_Chart[".ajaxCodeSnippetAdded"] = false;

$tdatazotdept_Chart[".buttonsAdded"] = false;

$tdatazotdept_Chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatazotdept_Chart[".isUseTimeForSearch"] = false;





$tdatazotdept_Chart[".allSearchFields"] = array();
$tdatazotdept_Chart[".filterFields"] = array();
$tdatazotdept_Chart[".requiredSearchFields"] = array();

$tdatazotdept_Chart[".allSearchFields"][] = "DeID";
	$tdatazotdept_Chart[".allSearchFields"][] = "Department";
	$tdatazotdept_Chart[".allSearchFields"][] = "TotalOT";
	

$tdatazotdept_Chart[".googleLikeFields"] = array();
$tdatazotdept_Chart[".googleLikeFields"][] = "DeID";
$tdatazotdept_Chart[".googleLikeFields"][] = "Department";
$tdatazotdept_Chart[".googleLikeFields"][] = "TotalOT";


$tdatazotdept_Chart[".advSearchFields"] = array();
$tdatazotdept_Chart[".advSearchFields"][] = "DeID";
$tdatazotdept_Chart[".advSearchFields"][] = "Department";
$tdatazotdept_Chart[".advSearchFields"][] = "TotalOT";

$tdatazotdept_Chart[".tableType"] = "chart";

$tdatazotdept_Chart[".printerPageOrientation"] = 0;
$tdatazotdept_Chart[".nPrinterPageScale"] = 100;

$tdatazotdept_Chart[".nPrinterSplitRecords"] = 40;

$tdatazotdept_Chart[".nPrinterPDFSplitRecords"] = 40;



$tdatazotdept_Chart[".geocodingEnabled"] = false;



// chart settings
$tdatazotdept_Chart[".chartType"] = "2DDoughnut";
// end of chart settings


$tdatazotdept_Chart[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatazotdept_Chart[".strOrderBy"] = $tstrOrderBy;

$tdatazotdept_Chart[".orderindexes"] = array();

$tdatazotdept_Chart[".sqlHead"] = "SELECT DeID,  	Department,  	TotalOT";
$tdatazotdept_Chart[".sqlFrom"] = "FROM zotdept";
$tdatazotdept_Chart[".sqlWhereExpr"] = "";
$tdatazotdept_Chart[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatazotdept_Chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatazotdept_Chart[".arrGroupsPerPage"] = $arrGPP;

$tdatazotdept_Chart[".highlightSearchResults"] = true;

$tableKeyszotdept_Chart = array();
$tdatazotdept_Chart[".Keys"] = $tableKeyszotdept_Chart;

$tdatazotdept_Chart[".listFields"] = array();
$tdatazotdept_Chart[".listFields"][] = "DeID";
$tdatazotdept_Chart[".listFields"][] = "Department";
$tdatazotdept_Chart[".listFields"][] = "TotalOT";

$tdatazotdept_Chart[".hideMobileList"] = array();


$tdatazotdept_Chart[".viewFields"] = array();
$tdatazotdept_Chart[".viewFields"][] = "DeID";
$tdatazotdept_Chart[".viewFields"][] = "Department";
$tdatazotdept_Chart[".viewFields"][] = "TotalOT";

$tdatazotdept_Chart[".addFields"] = array();
$tdatazotdept_Chart[".addFields"][] = "DeID";
$tdatazotdept_Chart[".addFields"][] = "Department";
$tdatazotdept_Chart[".addFields"][] = "TotalOT";

$tdatazotdept_Chart[".masterListFields"] = array();
$tdatazotdept_Chart[".masterListFields"][] = "DeID";
$tdatazotdept_Chart[".masterListFields"][] = "Department";
$tdatazotdept_Chart[".masterListFields"][] = "TotalOT";

$tdatazotdept_Chart[".inlineAddFields"] = array();
$tdatazotdept_Chart[".inlineAddFields"][] = "DeID";
$tdatazotdept_Chart[".inlineAddFields"][] = "Department";
$tdatazotdept_Chart[".inlineAddFields"][] = "TotalOT";

$tdatazotdept_Chart[".editFields"] = array();
$tdatazotdept_Chart[".editFields"][] = "DeID";
$tdatazotdept_Chart[".editFields"][] = "Department";
$tdatazotdept_Chart[".editFields"][] = "TotalOT";

$tdatazotdept_Chart[".inlineEditFields"] = array();
$tdatazotdept_Chart[".inlineEditFields"][] = "DeID";
$tdatazotdept_Chart[".inlineEditFields"][] = "Department";
$tdatazotdept_Chart[".inlineEditFields"][] = "TotalOT";

$tdatazotdept_Chart[".updateSelectedFields"] = array();
$tdatazotdept_Chart[".updateSelectedFields"][] = "DeID";
$tdatazotdept_Chart[".updateSelectedFields"][] = "Department";
$tdatazotdept_Chart[".updateSelectedFields"][] = "TotalOT";


$tdatazotdept_Chart[".exportFields"] = array();
$tdatazotdept_Chart[".exportFields"][] = "DeID";
$tdatazotdept_Chart[".exportFields"][] = "Department";
$tdatazotdept_Chart[".exportFields"][] = "TotalOT";

$tdatazotdept_Chart[".importFields"] = array();
$tdatazotdept_Chart[".importFields"][] = "DeID";
$tdatazotdept_Chart[".importFields"][] = "Department";
$tdatazotdept_Chart[".importFields"][] = "TotalOT";

$tdatazotdept_Chart[".printFields"] = array();
$tdatazotdept_Chart[".printFields"][] = "DeID";
$tdatazotdept_Chart[".printFields"][] = "Department";
$tdatazotdept_Chart[".printFields"][] = "TotalOT";


//	DeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DeID";
	$fdata["GoodName"] = "DeID";
	$fdata["ownerTable"] = "zotdept";
	$fdata["Label"] = GetFieldLabel("zotdept_Chart","DeID");
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

		$fdata["strField"] = "DeID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DeID";

	
	
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




	$tdatazotdept_Chart["DeID"] = $fdata;
//	Department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Department";
	$fdata["GoodName"] = "Department";
	$fdata["ownerTable"] = "zotdept";
	$fdata["Label"] = GetFieldLabel("zotdept_Chart","Department");
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

		$fdata["strField"] = "Department";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Department";

	
	
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




	$tdatazotdept_Chart["Department"] = $fdata;
//	TotalOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TotalOT";
	$fdata["GoodName"] = "TotalOT";
	$fdata["ownerTable"] = "zotdept";
	$fdata["Label"] = GetFieldLabel("zotdept_Chart","TotalOT");
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




	$tdatazotdept_Chart["TotalOT"] = $fdata;

	$tdatazotdept_Chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">zotdept Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_doughnut</attr>
		</attr>

		<attr value="parameters">';
	$tdatazotdept_Chart[".chartXml"] .= '<attr value="0">
			<attr value="name">TotalOT</attr>';
	$tdatazotdept_Chart[".chartXml"] .= '</attr>';
	$tdatazotdept_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">Department</attr>
	</attr>';
	$tdatazotdept_Chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatazotdept_Chart[".chartXml"] .= '<attr value="head">'.xmlencode("Department OT Chart").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("DeID").'</attr>


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
$tdatazotdept_Chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatazotdept_Chart[".chartXml"] .= '<attr value="0">
		<attr value="name">DeID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("zotdept_Chart","DeID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatazotdept_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">Department</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("zotdept_Chart","Department")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatazotdept_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">TotalOT</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("zotdept_Chart","TotalOT")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatazotdept_Chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">zotdept Chart</attr>
<attr value="short_table_name">zotdept_Chart</attr>
</attr>

</chart>';

$tables_data["zotdept Chart"]=&$tdatazotdept_Chart;
$field_labels["zotdept_Chart"] = &$fieldLabelszotdept_Chart;
$fieldToolTips["zotdept_Chart"] = &$fieldToolTipszotdept_Chart;
$placeHolders["zotdept_Chart"] = &$placeHolderszotdept_Chart;
$page_titles["zotdept_Chart"] = &$pageTitleszotdept_Chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["zotdept Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["zotdept Chart"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_zotdept_Chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DeID,  	Department,  	TotalOT";
$proto0["m_strFrom"] = "FROM zotdept";
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
	"m_strName" => "DeID",
	"m_strTable" => "zotdept",
	"m_srcTableName" => "zotdept Chart"
));

$proto6["m_sql"] = "DeID";
$proto6["m_srcTableName"] = "zotdept Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "zotdept",
	"m_srcTableName" => "zotdept Chart"
));

$proto8["m_sql"] = "Department";
$proto8["m_srcTableName"] = "zotdept Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalOT",
	"m_strTable" => "zotdept",
	"m_srcTableName" => "zotdept Chart"
));

$proto10["m_sql"] = "TotalOT";
$proto10["m_srcTableName"] = "zotdept Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "zotdept";
$proto13["m_srcTableName"] = "zotdept Chart";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "DeID";
$proto13["m_columns"][] = "Department";
$proto13["m_columns"][] = "TotalOT";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "zotdept";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "zotdept Chart";
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
$proto0["m_srcTableName"]="zotdept Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_zotdept_Chart = createSqlQuery_zotdept_Chart();


	
		;

			

$tdatazotdept_Chart[".sqlquery"] = $queryData_zotdept_Chart;

$tableEvents["zotdept Chart"] = new eventsBase;
$tdatazotdept_Chart[".hasEvents"] = false;

?>