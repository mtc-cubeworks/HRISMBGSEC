<?php
require_once(getabspath("classes/cipherer.php"));




$tdatazleavetypes_Chart = array();
	$tdatazleavetypes_Chart[".ShortName"] = "zleavetypes_Chart";
	$tdatazleavetypes_Chart[".OwnerID"] = "";
	$tdatazleavetypes_Chart[".OriginalTable"] = "zleavetypes";

//	field labels
$fieldLabelszleavetypes_Chart = array();
$fieldToolTipszleavetypes_Chart = array();
$pageTitleszleavetypes_Chart = array();
$placeHolderszleavetypes_Chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelszleavetypes_Chart["English"] = array();
	$fieldToolTipszleavetypes_Chart["English"] = array();
	$placeHolderszleavetypes_Chart["English"] = array();
	$pageTitleszleavetypes_Chart["English"] = array();
	$fieldLabelszleavetypes_Chart["English"]["LTID"] = "LTID";
	$fieldToolTipszleavetypes_Chart["English"]["LTID"] = "";
	$placeHolderszleavetypes_Chart["English"]["LTID"] = "";
	$fieldLabelszleavetypes_Chart["English"]["LeaveType"] = "Leave Type";
	$fieldToolTipszleavetypes_Chart["English"]["LeaveType"] = "";
	$placeHolderszleavetypes_Chart["English"]["LeaveType"] = "";
	$fieldLabelszleavetypes_Chart["English"]["TotalLeaves"] = "Total Leaves";
	$fieldToolTipszleavetypes_Chart["English"]["TotalLeaves"] = "";
	$placeHolderszleavetypes_Chart["English"]["TotalLeaves"] = "";
	if (count($fieldToolTipszleavetypes_Chart["English"]))
		$tdatazleavetypes_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelszleavetypes_Chart[""] = array();
	$fieldToolTipszleavetypes_Chart[""] = array();
	$placeHolderszleavetypes_Chart[""] = array();
	$pageTitleszleavetypes_Chart[""] = array();
	$fieldLabelszleavetypes_Chart[""]["LTID"] = "LTID";
	$fieldToolTipszleavetypes_Chart[""]["LTID"] = "";
	$placeHolderszleavetypes_Chart[""]["LTID"] = "";
	$fieldLabelszleavetypes_Chart[""]["LeaveType"] = "Leave Type";
	$fieldToolTipszleavetypes_Chart[""]["LeaveType"] = "";
	$placeHolderszleavetypes_Chart[""]["LeaveType"] = "";
	$fieldLabelszleavetypes_Chart[""]["TotalLeaves"] = "Total Leaves";
	$fieldToolTipszleavetypes_Chart[""]["TotalLeaves"] = "";
	$placeHolderszleavetypes_Chart[""]["TotalLeaves"] = "";
	if (count($fieldToolTipszleavetypes_Chart[""]))
		$tdatazleavetypes_Chart[".isUseToolTips"] = true;
}


	$tdatazleavetypes_Chart[".NCSearch"] = true;

	$tdatazleavetypes_Chart[".ChartRefreshTime"] = 0;


$tdatazleavetypes_Chart[".shortTableName"] = "zleavetypes_Chart";
$tdatazleavetypes_Chart[".nSecOptions"] = 0;
$tdatazleavetypes_Chart[".recsPerRowPrint"] = 1;
$tdatazleavetypes_Chart[".mainTableOwnerID"] = "";
$tdatazleavetypes_Chart[".moveNext"] = 1;
$tdatazleavetypes_Chart[".entityType"] = 3;

$tdatazleavetypes_Chart[".strOriginalTableName"] = "zleavetypes";

	



$tdatazleavetypes_Chart[".showAddInPopup"] = false;

$tdatazleavetypes_Chart[".showEditInPopup"] = false;

$tdatazleavetypes_Chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatazleavetypes_Chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatazleavetypes_Chart[".fieldsForRegister"] = array();

$tdatazleavetypes_Chart[".listAjax"] = false;

	$tdatazleavetypes_Chart[".audit"] = false;

	$tdatazleavetypes_Chart[".locking"] = false;



$tdatazleavetypes_Chart[".list"] = true;



$tdatazleavetypes_Chart[".reorderRecordsByHeader"] = true;








$tdatazleavetypes_Chart[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatazleavetypes_Chart[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatazleavetypes_Chart[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatazleavetypes_Chart[".searchSaving"] = false;
//

$tdatazleavetypes_Chart[".showSearchPanel"] = true;
		$tdatazleavetypes_Chart[".flexibleSearch"] = true;

$tdatazleavetypes_Chart[".isUseAjaxSuggest"] = true;




																																																																																																																																																																																																																																																																																																																														

$tdatazleavetypes_Chart[".ajaxCodeSnippetAdded"] = false;

$tdatazleavetypes_Chart[".buttonsAdded"] = false;

$tdatazleavetypes_Chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatazleavetypes_Chart[".isUseTimeForSearch"] = false;





$tdatazleavetypes_Chart[".allSearchFields"] = array();
$tdatazleavetypes_Chart[".filterFields"] = array();
$tdatazleavetypes_Chart[".requiredSearchFields"] = array();

$tdatazleavetypes_Chart[".allSearchFields"][] = "LTID";
	$tdatazleavetypes_Chart[".allSearchFields"][] = "LeaveType";
	$tdatazleavetypes_Chart[".allSearchFields"][] = "TotalLeaves";
	

$tdatazleavetypes_Chart[".googleLikeFields"] = array();
$tdatazleavetypes_Chart[".googleLikeFields"][] = "LTID";
$tdatazleavetypes_Chart[".googleLikeFields"][] = "LeaveType";
$tdatazleavetypes_Chart[".googleLikeFields"][] = "TotalLeaves";


$tdatazleavetypes_Chart[".advSearchFields"] = array();
$tdatazleavetypes_Chart[".advSearchFields"][] = "LTID";
$tdatazleavetypes_Chart[".advSearchFields"][] = "LeaveType";
$tdatazleavetypes_Chart[".advSearchFields"][] = "TotalLeaves";

$tdatazleavetypes_Chart[".tableType"] = "chart";

$tdatazleavetypes_Chart[".printerPageOrientation"] = 0;
$tdatazleavetypes_Chart[".nPrinterPageScale"] = 100;

$tdatazleavetypes_Chart[".nPrinterSplitRecords"] = 40;

$tdatazleavetypes_Chart[".nPrinterPDFSplitRecords"] = 40;



$tdatazleavetypes_Chart[".geocodingEnabled"] = false;



// chart settings
$tdatazleavetypes_Chart[".chartType"] = "2DDoughnut";
// end of chart settings


$tdatazleavetypes_Chart[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatazleavetypes_Chart[".strOrderBy"] = $tstrOrderBy;

$tdatazleavetypes_Chart[".orderindexes"] = array();

$tdatazleavetypes_Chart[".sqlHead"] = "SELECT LTID,  	LeaveType,  	TotalLeaves";
$tdatazleavetypes_Chart[".sqlFrom"] = "FROM zleavetypes";
$tdatazleavetypes_Chart[".sqlWhereExpr"] = "";
$tdatazleavetypes_Chart[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatazleavetypes_Chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatazleavetypes_Chart[".arrGroupsPerPage"] = $arrGPP;

$tdatazleavetypes_Chart[".highlightSearchResults"] = true;

$tableKeyszleavetypes_Chart = array();
$tdatazleavetypes_Chart[".Keys"] = $tableKeyszleavetypes_Chart;

$tdatazleavetypes_Chart[".listFields"] = array();
$tdatazleavetypes_Chart[".listFields"][] = "LTID";
$tdatazleavetypes_Chart[".listFields"][] = "LeaveType";
$tdatazleavetypes_Chart[".listFields"][] = "TotalLeaves";

$tdatazleavetypes_Chart[".hideMobileList"] = array();


$tdatazleavetypes_Chart[".viewFields"] = array();
$tdatazleavetypes_Chart[".viewFields"][] = "LTID";
$tdatazleavetypes_Chart[".viewFields"][] = "LeaveType";
$tdatazleavetypes_Chart[".viewFields"][] = "TotalLeaves";

$tdatazleavetypes_Chart[".addFields"] = array();
$tdatazleavetypes_Chart[".addFields"][] = "LTID";
$tdatazleavetypes_Chart[".addFields"][] = "LeaveType";
$tdatazleavetypes_Chart[".addFields"][] = "TotalLeaves";

$tdatazleavetypes_Chart[".masterListFields"] = array();
$tdatazleavetypes_Chart[".masterListFields"][] = "LTID";
$tdatazleavetypes_Chart[".masterListFields"][] = "LeaveType";
$tdatazleavetypes_Chart[".masterListFields"][] = "TotalLeaves";

$tdatazleavetypes_Chart[".inlineAddFields"] = array();
$tdatazleavetypes_Chart[".inlineAddFields"][] = "LTID";
$tdatazleavetypes_Chart[".inlineAddFields"][] = "LeaveType";
$tdatazleavetypes_Chart[".inlineAddFields"][] = "TotalLeaves";

$tdatazleavetypes_Chart[".editFields"] = array();
$tdatazleavetypes_Chart[".editFields"][] = "LTID";
$tdatazleavetypes_Chart[".editFields"][] = "LeaveType";
$tdatazleavetypes_Chart[".editFields"][] = "TotalLeaves";

$tdatazleavetypes_Chart[".inlineEditFields"] = array();
$tdatazleavetypes_Chart[".inlineEditFields"][] = "LTID";
$tdatazleavetypes_Chart[".inlineEditFields"][] = "LeaveType";
$tdatazleavetypes_Chart[".inlineEditFields"][] = "TotalLeaves";

$tdatazleavetypes_Chart[".updateSelectedFields"] = array();
$tdatazleavetypes_Chart[".updateSelectedFields"][] = "LTID";
$tdatazleavetypes_Chart[".updateSelectedFields"][] = "LeaveType";
$tdatazleavetypes_Chart[".updateSelectedFields"][] = "TotalLeaves";


$tdatazleavetypes_Chart[".exportFields"] = array();
$tdatazleavetypes_Chart[".exportFields"][] = "LTID";
$tdatazleavetypes_Chart[".exportFields"][] = "LeaveType";
$tdatazleavetypes_Chart[".exportFields"][] = "TotalLeaves";

$tdatazleavetypes_Chart[".importFields"] = array();
$tdatazleavetypes_Chart[".importFields"][] = "LTID";
$tdatazleavetypes_Chart[".importFields"][] = "LeaveType";
$tdatazleavetypes_Chart[".importFields"][] = "TotalLeaves";

$tdatazleavetypes_Chart[".printFields"] = array();
$tdatazleavetypes_Chart[".printFields"][] = "LTID";
$tdatazleavetypes_Chart[".printFields"][] = "LeaveType";
$tdatazleavetypes_Chart[".printFields"][] = "TotalLeaves";


//	LTID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LTID";
	$fdata["GoodName"] = "LTID";
	$fdata["ownerTable"] = "zleavetypes";
	$fdata["Label"] = GetFieldLabel("zleavetypes_Chart","LTID");
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

		$fdata["strField"] = "LTID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LTID";

	
	
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




	$tdatazleavetypes_Chart["LTID"] = $fdata;
//	LeaveType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "LeaveType";
	$fdata["GoodName"] = "LeaveType";
	$fdata["ownerTable"] = "zleavetypes";
	$fdata["Label"] = GetFieldLabel("zleavetypes_Chart","LeaveType");
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

		$fdata["strField"] = "LeaveType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LeaveType";

	
	
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




	$tdatazleavetypes_Chart["LeaveType"] = $fdata;
//	TotalLeaves
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TotalLeaves";
	$fdata["GoodName"] = "TotalLeaves";
	$fdata["ownerTable"] = "zleavetypes";
	$fdata["Label"] = GetFieldLabel("zleavetypes_Chart","TotalLeaves");
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

		$fdata["strField"] = "TotalLeaves";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TotalLeaves";

	
	
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




	$tdatazleavetypes_Chart["TotalLeaves"] = $fdata;

	$tdatazleavetypes_Chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">zleavetypes Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_doughnut</attr>
		</attr>

		<attr value="parameters">';
	$tdatazleavetypes_Chart[".chartXml"] .= '<attr value="0">
			<attr value="name">TotalLeaves</attr>';
	$tdatazleavetypes_Chart[".chartXml"] .= '</attr>';
	$tdatazleavetypes_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">LeaveType</attr>
	</attr>';
	$tdatazleavetypes_Chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatazleavetypes_Chart[".chartXml"] .= '<attr value="head">'.xmlencode("Leave Types Chart").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("LTID").'</attr>


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
$tdatazleavetypes_Chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatazleavetypes_Chart[".chartXml"] .= '<attr value="0">
		<attr value="name">LTID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("zleavetypes_Chart","LTID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatazleavetypes_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">LeaveType</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("zleavetypes_Chart","LeaveType")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatazleavetypes_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">TotalLeaves</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("zleavetypes_Chart","TotalLeaves")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatazleavetypes_Chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">zleavetypes Chart</attr>
<attr value="short_table_name">zleavetypes_Chart</attr>
</attr>

</chart>';

$tables_data["zleavetypes Chart"]=&$tdatazleavetypes_Chart;
$field_labels["zleavetypes_Chart"] = &$fieldLabelszleavetypes_Chart;
$fieldToolTips["zleavetypes_Chart"] = &$fieldToolTipszleavetypes_Chart;
$placeHolders["zleavetypes_Chart"] = &$placeHolderszleavetypes_Chart;
$page_titles["zleavetypes_Chart"] = &$pageTitleszleavetypes_Chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["zleavetypes Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["zleavetypes Chart"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_zleavetypes_Chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LTID,  	LeaveType,  	TotalLeaves";
$proto0["m_strFrom"] = "FROM zleavetypes";
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
	"m_strName" => "LTID",
	"m_strTable" => "zleavetypes",
	"m_srcTableName" => "zleavetypes Chart"
));

$proto6["m_sql"] = "LTID";
$proto6["m_srcTableName"] = "zleavetypes Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "LeaveType",
	"m_strTable" => "zleavetypes",
	"m_srcTableName" => "zleavetypes Chart"
));

$proto8["m_sql"] = "LeaveType";
$proto8["m_srcTableName"] = "zleavetypes Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalLeaves",
	"m_strTable" => "zleavetypes",
	"m_srcTableName" => "zleavetypes Chart"
));

$proto10["m_sql"] = "TotalLeaves";
$proto10["m_srcTableName"] = "zleavetypes Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "zleavetypes";
$proto13["m_srcTableName"] = "zleavetypes Chart";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "LTID";
$proto13["m_columns"][] = "LeaveType";
$proto13["m_columns"][] = "TotalLeaves";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "zleavetypes";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "zleavetypes Chart";
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
$proto0["m_srcTableName"]="zleavetypes Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_zleavetypes_Chart = createSqlQuery_zleavetypes_Chart();


	
		;

			

$tdatazleavetypes_Chart[".sqlquery"] = $queryData_zleavetypes_Chart;

$tableEvents["zleavetypes Chart"] = new eventsBase;
$tdatazleavetypes_Chart[".hasEvents"] = false;

?>