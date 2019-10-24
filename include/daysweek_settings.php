<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadaysweek = array();
	$tdatadaysweek[".truncateText"] = true;
	$tdatadaysweek[".NumberOfChars"] = 80;
	$tdatadaysweek[".ShortName"] = "daysweek";
	$tdatadaysweek[".OwnerID"] = "";
	$tdatadaysweek[".OriginalTable"] = "daysweek";

//	field labels
$fieldLabelsdaysweek = array();
$fieldToolTipsdaysweek = array();
$pageTitlesdaysweek = array();
$placeHoldersdaysweek = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdaysweek["English"] = array();
	$fieldToolTipsdaysweek["English"] = array();
	$placeHoldersdaysweek["English"] = array();
	$pageTitlesdaysweek["English"] = array();
	$fieldLabelsdaysweek["English"]["dayID"] = "Day ID";
	$fieldToolTipsdaysweek["English"]["dayID"] = "";
	$placeHoldersdaysweek["English"]["dayID"] = "";
	$fieldLabelsdaysweek["English"]["DayIs"] = "Day Is";
	$fieldToolTipsdaysweek["English"]["DayIs"] = "";
	$placeHoldersdaysweek["English"]["DayIs"] = "";
	if (count($fieldToolTipsdaysweek["English"]))
		$tdatadaysweek[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdaysweek[""] = array();
	$fieldToolTipsdaysweek[""] = array();
	$placeHoldersdaysweek[""] = array();
	$pageTitlesdaysweek[""] = array();
	if (count($fieldToolTipsdaysweek[""]))
		$tdatadaysweek[".isUseToolTips"] = true;
}


	$tdatadaysweek[".NCSearch"] = true;



$tdatadaysweek[".shortTableName"] = "daysweek";
$tdatadaysweek[".nSecOptions"] = 0;
$tdatadaysweek[".recsPerRowPrint"] = 1;
$tdatadaysweek[".mainTableOwnerID"] = "";
$tdatadaysweek[".moveNext"] = 1;
$tdatadaysweek[".entityType"] = 0;

$tdatadaysweek[".strOriginalTableName"] = "daysweek";

	



$tdatadaysweek[".showAddInPopup"] = false;

$tdatadaysweek[".showEditInPopup"] = false;

$tdatadaysweek[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadaysweek[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadaysweek[".fieldsForRegister"] = array();

$tdatadaysweek[".listAjax"] = false;

	$tdatadaysweek[".audit"] = false;

	$tdatadaysweek[".locking"] = false;

$tdatadaysweek[".edit"] = true;
$tdatadaysweek[".afterEditAction"] = 1;
$tdatadaysweek[".closePopupAfterEdit"] = 1;
$tdatadaysweek[".afterEditActionDetTable"] = "";

$tdatadaysweek[".add"] = true;
$tdatadaysweek[".afterAddAction"] = 1;
$tdatadaysweek[".closePopupAfterAdd"] = 1;
$tdatadaysweek[".afterAddActionDetTable"] = "";

$tdatadaysweek[".list"] = true;

$tdatadaysweek[".inlineEdit"] = true;


$tdatadaysweek[".reorderRecordsByHeader"] = true;


$tdatadaysweek[".exportFormatting"] = 2;
$tdatadaysweek[".exportDelimiter"] = ",";
		
$tdatadaysweek[".inlineAdd"] = true;
$tdatadaysweek[".view"] = true;

$tdatadaysweek[".import"] = true;

$tdatadaysweek[".exportTo"] = true;

$tdatadaysweek[".printFriendly"] = true;

$tdatadaysweek[".delete"] = true;

$tdatadaysweek[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadaysweek[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatadaysweek[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatadaysweek[".searchSaving"] = false;
//

$tdatadaysweek[".showSearchPanel"] = true;
		$tdatadaysweek[".flexibleSearch"] = true;

$tdatadaysweek[".isUseAjaxSuggest"] = true;

$tdatadaysweek[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																											

$tdatadaysweek[".ajaxCodeSnippetAdded"] = false;

$tdatadaysweek[".buttonsAdded"] = false;

$tdatadaysweek[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadaysweek[".isUseTimeForSearch"] = false;





$tdatadaysweek[".allSearchFields"] = array();
$tdatadaysweek[".filterFields"] = array();
$tdatadaysweek[".requiredSearchFields"] = array();

$tdatadaysweek[".allSearchFields"][] = "dayID";
	$tdatadaysweek[".allSearchFields"][] = "DayIs";
	

$tdatadaysweek[".googleLikeFields"] = array();
$tdatadaysweek[".googleLikeFields"][] = "dayID";
$tdatadaysweek[".googleLikeFields"][] = "DayIs";


$tdatadaysweek[".advSearchFields"] = array();
$tdatadaysweek[".advSearchFields"][] = "dayID";
$tdatadaysweek[".advSearchFields"][] = "DayIs";

$tdatadaysweek[".tableType"] = "list";

$tdatadaysweek[".printerPageOrientation"] = 0;
$tdatadaysweek[".nPrinterPageScale"] = 100;

$tdatadaysweek[".nPrinterSplitRecords"] = 40;

$tdatadaysweek[".nPrinterPDFSplitRecords"] = 40;



$tdatadaysweek[".geocodingEnabled"] = false;





$tdatadaysweek[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatadaysweek[".pageSize"] = 20;

$tdatadaysweek[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadaysweek[".strOrderBy"] = $tstrOrderBy;

$tdatadaysweek[".orderindexes"] = array();

$tdatadaysweek[".sqlHead"] = "SELECT dayID,  	DayIs";
$tdatadaysweek[".sqlFrom"] = "FROM daysweek";
$tdatadaysweek[".sqlWhereExpr"] = "";
$tdatadaysweek[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadaysweek[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadaysweek[".arrGroupsPerPage"] = $arrGPP;

$tdatadaysweek[".highlightSearchResults"] = true;

$tableKeysdaysweek = array();
$tableKeysdaysweek[] = "dayID";
$tdatadaysweek[".Keys"] = $tableKeysdaysweek;

$tdatadaysweek[".listFields"] = array();
$tdatadaysweek[".listFields"][] = "dayID";
$tdatadaysweek[".listFields"][] = "DayIs";

$tdatadaysweek[".hideMobileList"] = array();


$tdatadaysweek[".viewFields"] = array();
$tdatadaysweek[".viewFields"][] = "dayID";
$tdatadaysweek[".viewFields"][] = "DayIs";

$tdatadaysweek[".addFields"] = array();
$tdatadaysweek[".addFields"][] = "DayIs";

$tdatadaysweek[".masterListFields"] = array();
$tdatadaysweek[".masterListFields"][] = "dayID";
$tdatadaysweek[".masterListFields"][] = "DayIs";

$tdatadaysweek[".inlineAddFields"] = array();
$tdatadaysweek[".inlineAddFields"][] = "DayIs";

$tdatadaysweek[".editFields"] = array();
$tdatadaysweek[".editFields"][] = "DayIs";

$tdatadaysweek[".inlineEditFields"] = array();
$tdatadaysweek[".inlineEditFields"][] = "DayIs";

$tdatadaysweek[".updateSelectedFields"] = array();
$tdatadaysweek[".updateSelectedFields"][] = "DayIs";


$tdatadaysweek[".exportFields"] = array();
$tdatadaysweek[".exportFields"][] = "dayID";
$tdatadaysweek[".exportFields"][] = "DayIs";

$tdatadaysweek[".importFields"] = array();
$tdatadaysweek[".importFields"][] = "dayID";
$tdatadaysweek[".importFields"][] = "DayIs";

$tdatadaysweek[".printFields"] = array();
$tdatadaysweek[".printFields"][] = "dayID";
$tdatadaysweek[".printFields"][] = "DayIs";


//	dayID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "dayID";
	$fdata["GoodName"] = "dayID";
	$fdata["ownerTable"] = "daysweek";
	$fdata["Label"] = GetFieldLabel("daysweek","dayID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dayID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dayID";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadaysweek["dayID"] = $fdata;
//	DayIs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DayIs";
	$fdata["GoodName"] = "DayIs";
	$fdata["ownerTable"] = "daysweek";
	$fdata["Label"] = GetFieldLabel("daysweek","DayIs");
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

		$fdata["strField"] = "DayIs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DayIs";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadaysweek["DayIs"] = $fdata;


$tables_data["daysweek"]=&$tdatadaysweek;
$field_labels["daysweek"] = &$fieldLabelsdaysweek;
$fieldToolTips["daysweek"] = &$fieldToolTipsdaysweek;
$placeHolders["daysweek"] = &$placeHoldersdaysweek;
$page_titles["daysweek"] = &$pageTitlesdaysweek;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["daysweek"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["daysweek"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_daysweek()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dayID,  	DayIs";
$proto0["m_strFrom"] = "FROM daysweek";
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
	"m_strName" => "dayID",
	"m_strTable" => "daysweek",
	"m_srcTableName" => "daysweek"
));

$proto6["m_sql"] = "dayID";
$proto6["m_srcTableName"] = "daysweek";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DayIs",
	"m_strTable" => "daysweek",
	"m_srcTableName" => "daysweek"
));

$proto8["m_sql"] = "DayIs";
$proto8["m_srcTableName"] = "daysweek";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "daysweek";
$proto11["m_srcTableName"] = "daysweek";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "dayID";
$proto11["m_columns"][] = "DayIs";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "daysweek";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "daysweek";
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
$proto0["m_srcTableName"]="daysweek";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_daysweek = createSqlQuery_daysweek();


	
		;

		

$tdatadaysweek[".sqlquery"] = $queryData_daysweek;

$tableEvents["daysweek"] = new eventsBase;
$tdatadaysweek[".hasEvents"] = false;

?>