<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadaylength = array();
	$tdatadaylength[".truncateText"] = true;
	$tdatadaylength[".NumberOfChars"] = 80;
	$tdatadaylength[".ShortName"] = "daylength";
	$tdatadaylength[".OwnerID"] = "";
	$tdatadaylength[".OriginalTable"] = "daylength";

//	field labels
$fieldLabelsdaylength = array();
$fieldToolTipsdaylength = array();
$pageTitlesdaylength = array();
$placeHoldersdaylength = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdaylength["English"] = array();
	$fieldToolTipsdaylength["English"] = array();
	$placeHoldersdaylength["English"] = array();
	$pageTitlesdaylength["English"] = array();
	$fieldLabelsdaylength["English"]["ID"] = "ID";
	$fieldToolTipsdaylength["English"]["ID"] = "";
	$placeHoldersdaylength["English"]["ID"] = "";
	$fieldLabelsdaylength["English"]["DayLength"] = "Day Length";
	$fieldToolTipsdaylength["English"]["DayLength"] = "";
	$placeHoldersdaylength["English"]["DayLength"] = "";
	if (count($fieldToolTipsdaylength["English"]))
		$tdatadaylength[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdaylength[""] = array();
	$fieldToolTipsdaylength[""] = array();
	$placeHoldersdaylength[""] = array();
	$pageTitlesdaylength[""] = array();
	if (count($fieldToolTipsdaylength[""]))
		$tdatadaylength[".isUseToolTips"] = true;
}


	$tdatadaylength[".NCSearch"] = true;



$tdatadaylength[".shortTableName"] = "daylength";
$tdatadaylength[".nSecOptions"] = 0;
$tdatadaylength[".recsPerRowPrint"] = 1;
$tdatadaylength[".mainTableOwnerID"] = "";
$tdatadaylength[".moveNext"] = 1;
$tdatadaylength[".entityType"] = 0;

$tdatadaylength[".strOriginalTableName"] = "daylength";

	



$tdatadaylength[".showAddInPopup"] = false;

$tdatadaylength[".showEditInPopup"] = false;

$tdatadaylength[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadaylength[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadaylength[".fieldsForRegister"] = array();

$tdatadaylength[".listAjax"] = false;

	$tdatadaylength[".audit"] = false;

	$tdatadaylength[".locking"] = false;

$tdatadaylength[".edit"] = true;
$tdatadaylength[".afterEditAction"] = 1;
$tdatadaylength[".closePopupAfterEdit"] = 1;
$tdatadaylength[".afterEditActionDetTable"] = "";

$tdatadaylength[".add"] = true;
$tdatadaylength[".afterAddAction"] = 1;
$tdatadaylength[".closePopupAfterAdd"] = 1;
$tdatadaylength[".afterAddActionDetTable"] = "";

$tdatadaylength[".list"] = true;

$tdatadaylength[".inlineEdit"] = true;


$tdatadaylength[".reorderRecordsByHeader"] = true;


$tdatadaylength[".exportFormatting"] = 2;
$tdatadaylength[".exportDelimiter"] = ",";
		
$tdatadaylength[".inlineAdd"] = true;
$tdatadaylength[".view"] = true;

$tdatadaylength[".import"] = true;

$tdatadaylength[".exportTo"] = true;

$tdatadaylength[".printFriendly"] = true;

$tdatadaylength[".delete"] = true;

$tdatadaylength[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadaylength[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatadaylength[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatadaylength[".searchSaving"] = false;
//

$tdatadaylength[".showSearchPanel"] = true;
		$tdatadaylength[".flexibleSearch"] = true;

$tdatadaylength[".isUseAjaxSuggest"] = true;

$tdatadaylength[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdatadaylength[".ajaxCodeSnippetAdded"] = false;

$tdatadaylength[".buttonsAdded"] = false;

$tdatadaylength[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadaylength[".isUseTimeForSearch"] = false;





$tdatadaylength[".allSearchFields"] = array();
$tdatadaylength[".filterFields"] = array();
$tdatadaylength[".requiredSearchFields"] = array();

$tdatadaylength[".allSearchFields"][] = "ID";
	$tdatadaylength[".allSearchFields"][] = "DayLength";
	

$tdatadaylength[".googleLikeFields"] = array();
$tdatadaylength[".googleLikeFields"][] = "ID";
$tdatadaylength[".googleLikeFields"][] = "DayLength";


$tdatadaylength[".advSearchFields"] = array();
$tdatadaylength[".advSearchFields"][] = "ID";
$tdatadaylength[".advSearchFields"][] = "DayLength";

$tdatadaylength[".tableType"] = "list";

$tdatadaylength[".printerPageOrientation"] = 0;
$tdatadaylength[".nPrinterPageScale"] = 100;

$tdatadaylength[".nPrinterSplitRecords"] = 40;

$tdatadaylength[".nPrinterPDFSplitRecords"] = 40;



$tdatadaylength[".geocodingEnabled"] = false;





$tdatadaylength[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatadaylength[".pageSize"] = 20;

$tdatadaylength[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadaylength[".strOrderBy"] = $tstrOrderBy;

$tdatadaylength[".orderindexes"] = array();

$tdatadaylength[".sqlHead"] = "SELECT ID,  	DayLength";
$tdatadaylength[".sqlFrom"] = "FROM daylength";
$tdatadaylength[".sqlWhereExpr"] = "";
$tdatadaylength[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadaylength[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadaylength[".arrGroupsPerPage"] = $arrGPP;

$tdatadaylength[".highlightSearchResults"] = true;

$tableKeysdaylength = array();
$tableKeysdaylength[] = "ID";
$tdatadaylength[".Keys"] = $tableKeysdaylength;

$tdatadaylength[".listFields"] = array();
$tdatadaylength[".listFields"][] = "ID";
$tdatadaylength[".listFields"][] = "DayLength";

$tdatadaylength[".hideMobileList"] = array();


$tdatadaylength[".viewFields"] = array();
$tdatadaylength[".viewFields"][] = "ID";
$tdatadaylength[".viewFields"][] = "DayLength";

$tdatadaylength[".addFields"] = array();
$tdatadaylength[".addFields"][] = "DayLength";

$tdatadaylength[".masterListFields"] = array();
$tdatadaylength[".masterListFields"][] = "ID";
$tdatadaylength[".masterListFields"][] = "DayLength";

$tdatadaylength[".inlineAddFields"] = array();
$tdatadaylength[".inlineAddFields"][] = "DayLength";

$tdatadaylength[".editFields"] = array();
$tdatadaylength[".editFields"][] = "DayLength";

$tdatadaylength[".inlineEditFields"] = array();
$tdatadaylength[".inlineEditFields"][] = "DayLength";

$tdatadaylength[".updateSelectedFields"] = array();
$tdatadaylength[".updateSelectedFields"][] = "DayLength";


$tdatadaylength[".exportFields"] = array();
$tdatadaylength[".exportFields"][] = "ID";
$tdatadaylength[".exportFields"][] = "DayLength";

$tdatadaylength[".importFields"] = array();
$tdatadaylength[".importFields"][] = "ID";
$tdatadaylength[".importFields"][] = "DayLength";

$tdatadaylength[".printFields"] = array();
$tdatadaylength[".printFields"][] = "ID";
$tdatadaylength[".printFields"][] = "DayLength";


//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "daylength";
	$fdata["Label"] = GetFieldLabel("daylength","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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




	$tdatadaylength["ID"] = $fdata;
//	DayLength
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DayLength";
	$fdata["GoodName"] = "DayLength";
	$fdata["ownerTable"] = "daylength";
	$fdata["Label"] = GetFieldLabel("daylength","DayLength");
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

		$fdata["strField"] = "DayLength";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DayLength";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadaylength["DayLength"] = $fdata;


$tables_data["daylength"]=&$tdatadaylength;
$field_labels["daylength"] = &$fieldLabelsdaylength;
$fieldToolTips["daylength"] = &$fieldToolTipsdaylength;
$placeHolders["daylength"] = &$placeHoldersdaylength;
$page_titles["daylength"] = &$pageTitlesdaylength;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["daylength"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["daylength"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_daylength()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	DayLength";
$proto0["m_strFrom"] = "FROM daylength";
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
	"m_strName" => "ID",
	"m_strTable" => "daylength",
	"m_srcTableName" => "daylength"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "daylength";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DayLength",
	"m_strTable" => "daylength",
	"m_srcTableName" => "daylength"
));

$proto8["m_sql"] = "DayLength";
$proto8["m_srcTableName"] = "daylength";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "daylength";
$proto11["m_srcTableName"] = "daylength";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ID";
$proto11["m_columns"][] = "DayLength";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "daylength";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "daylength";
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
$proto0["m_srcTableName"]="daylength";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_daylength = createSqlQuery_daylength();


	
		;

		

$tdatadaylength[".sqlquery"] = $queryData_daylength;

$tableEvents["daylength"] = new eventsBase;
$tdatadaylength[".hasEvents"] = false;

?>