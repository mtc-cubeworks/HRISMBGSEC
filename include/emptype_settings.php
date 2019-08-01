<?php
require_once(getabspath("classes/cipherer.php"));




$tdataemptype = array();
	$tdataemptype[".truncateText"] = true;
	$tdataemptype[".NumberOfChars"] = 80;
	$tdataemptype[".ShortName"] = "emptype";
	$tdataemptype[".OwnerID"] = "";
	$tdataemptype[".OriginalTable"] = "emptype";

//	field labels
$fieldLabelsemptype = array();
$fieldToolTipsemptype = array();
$pageTitlesemptype = array();
$placeHoldersemptype = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsemptype["English"] = array();
	$fieldToolTipsemptype["English"] = array();
	$placeHoldersemptype["English"] = array();
	$pageTitlesemptype["English"] = array();
	$fieldLabelsemptype["English"]["ECatID"] = "ECat ID";
	$fieldToolTipsemptype["English"]["ECatID"] = "";
	$placeHoldersemptype["English"]["ECatID"] = "";
	$fieldLabelsemptype["English"]["EmployeeType"] = "Wage Type";
	$fieldToolTipsemptype["English"]["EmployeeType"] = "";
	$placeHoldersemptype["English"]["EmployeeType"] = "";
	if (count($fieldToolTipsemptype["English"]))
		$tdataemptype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsemptype[""] = array();
	$fieldToolTipsemptype[""] = array();
	$placeHoldersemptype[""] = array();
	$pageTitlesemptype[""] = array();
	if (count($fieldToolTipsemptype[""]))
		$tdataemptype[".isUseToolTips"] = true;
}


	$tdataemptype[".NCSearch"] = true;



$tdataemptype[".shortTableName"] = "emptype";
$tdataemptype[".nSecOptions"] = 0;
$tdataemptype[".recsPerRowPrint"] = 1;
$tdataemptype[".mainTableOwnerID"] = "";
$tdataemptype[".moveNext"] = 1;
$tdataemptype[".entityType"] = 0;

$tdataemptype[".strOriginalTableName"] = "emptype";

	



$tdataemptype[".showAddInPopup"] = false;

$tdataemptype[".showEditInPopup"] = false;

$tdataemptype[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataemptype[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataemptype[".fieldsForRegister"] = array();

$tdataemptype[".listAjax"] = false;

	$tdataemptype[".audit"] = false;

	$tdataemptype[".locking"] = false;

$tdataemptype[".edit"] = true;
$tdataemptype[".afterEditAction"] = 1;
$tdataemptype[".closePopupAfterEdit"] = 1;
$tdataemptype[".afterEditActionDetTable"] = "";

$tdataemptype[".add"] = true;
$tdataemptype[".afterAddAction"] = 1;
$tdataemptype[".closePopupAfterAdd"] = 1;
$tdataemptype[".afterAddActionDetTable"] = "";

$tdataemptype[".list"] = true;

$tdataemptype[".inlineEdit"] = true;

$tdataemptype[".updateSelected"] = true;

$tdataemptype[".reorderRecordsByHeader"] = true;


$tdataemptype[".exportFormatting"] = 2;
$tdataemptype[".exportDelimiter"] = ",";
		
$tdataemptype[".inlineAdd"] = true;
$tdataemptype[".view"] = true;


$tdataemptype[".exportTo"] = true;

$tdataemptype[".printFriendly"] = true;

$tdataemptype[".delete"] = true;

$tdataemptype[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataemptype[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataemptype[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataemptype[".searchSaving"] = false;
//

$tdataemptype[".showSearchPanel"] = true;
		$tdataemptype[".flexibleSearch"] = true;

$tdataemptype[".isUseAjaxSuggest"] = true;

$tdataemptype[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																				

$tdataemptype[".ajaxCodeSnippetAdded"] = false;

$tdataemptype[".buttonsAdded"] = false;

$tdataemptype[".addPageEvents"] = false;

// use timepicker for search panel
$tdataemptype[".isUseTimeForSearch"] = false;





$tdataemptype[".allSearchFields"] = array();
$tdataemptype[".filterFields"] = array();
$tdataemptype[".requiredSearchFields"] = array();



$tdataemptype[".googleLikeFields"] = array();
$tdataemptype[".googleLikeFields"][] = "ECatID";
$tdataemptype[".googleLikeFields"][] = "EmployeeType";



$tdataemptype[".tableType"] = "list";

$tdataemptype[".printerPageOrientation"] = 0;
$tdataemptype[".nPrinterPageScale"] = 100;

$tdataemptype[".nPrinterSplitRecords"] = 40;

$tdataemptype[".nPrinterPDFSplitRecords"] = 40;



$tdataemptype[".geocodingEnabled"] = false;





$tdataemptype[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataemptype[".pageSize"] = 20;

$tdataemptype[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataemptype[".strOrderBy"] = $tstrOrderBy;

$tdataemptype[".orderindexes"] = array();

$tdataemptype[".sqlHead"] = "SELECT ECatID,  	EmployeeType";
$tdataemptype[".sqlFrom"] = "FROM emptype";
$tdataemptype[".sqlWhereExpr"] = "";
$tdataemptype[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataemptype[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataemptype[".arrGroupsPerPage"] = $arrGPP;

$tdataemptype[".highlightSearchResults"] = true;

$tableKeysemptype = array();
$tableKeysemptype[] = "ECatID";
$tdataemptype[".Keys"] = $tableKeysemptype;

$tdataemptype[".listFields"] = array();
$tdataemptype[".listFields"][] = "ECatID";
$tdataemptype[".listFields"][] = "EmployeeType";

$tdataemptype[".hideMobileList"] = array();


$tdataemptype[".viewFields"] = array();
$tdataemptype[".viewFields"][] = "ECatID";
$tdataemptype[".viewFields"][] = "EmployeeType";

$tdataemptype[".addFields"] = array();
$tdataemptype[".addFields"][] = "ECatID";
$tdataemptype[".addFields"][] = "EmployeeType";

$tdataemptype[".masterListFields"] = array();
$tdataemptype[".masterListFields"][] = "ECatID";
$tdataemptype[".masterListFields"][] = "EmployeeType";

$tdataemptype[".inlineAddFields"] = array();
$tdataemptype[".inlineAddFields"][] = "ECatID";
$tdataemptype[".inlineAddFields"][] = "EmployeeType";

$tdataemptype[".editFields"] = array();
$tdataemptype[".editFields"][] = "ECatID";
$tdataemptype[".editFields"][] = "EmployeeType";

$tdataemptype[".inlineEditFields"] = array();
$tdataemptype[".inlineEditFields"][] = "ECatID";
$tdataemptype[".inlineEditFields"][] = "EmployeeType";

$tdataemptype[".updateSelectedFields"] = array();
$tdataemptype[".updateSelectedFields"][] = "ECatID";
$tdataemptype[".updateSelectedFields"][] = "EmployeeType";


$tdataemptype[".exportFields"] = array();
$tdataemptype[".exportFields"][] = "ECatID";
$tdataemptype[".exportFields"][] = "EmployeeType";

$tdataemptype[".importFields"] = array();
$tdataemptype[".importFields"][] = "ECatID";
$tdataemptype[".importFields"][] = "EmployeeType";

$tdataemptype[".printFields"] = array();
$tdataemptype[".printFields"][] = "ECatID";
$tdataemptype[".printFields"][] = "EmployeeType";


//	ECatID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ECatID";
	$fdata["GoodName"] = "ECatID";
	$fdata["ownerTable"] = "emptype";
	$fdata["Label"] = GetFieldLabel("emptype","ECatID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ECatID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ECatID";

	
	
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








	$tdataemptype["ECatID"] = $fdata;
//	EmployeeType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EmployeeType";
	$fdata["GoodName"] = "EmployeeType";
	$fdata["ownerTable"] = "emptype";
	$fdata["Label"] = GetFieldLabel("emptype","EmployeeType");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EmployeeType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmployeeType";

	
	
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








	$tdataemptype["EmployeeType"] = $fdata;


$tables_data["emptype"]=&$tdataemptype;
$field_labels["emptype"] = &$fieldLabelsemptype;
$fieldToolTips["emptype"] = &$fieldToolTipsemptype;
$placeHolders["emptype"] = &$placeHoldersemptype;
$page_titles["emptype"] = &$pageTitlesemptype;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["emptype"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["emptype"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_emptype()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ECatID,  	EmployeeType";
$proto0["m_strFrom"] = "FROM emptype";
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
	"m_strName" => "ECatID",
	"m_strTable" => "emptype",
	"m_srcTableName" => "emptype"
));

$proto6["m_sql"] = "ECatID";
$proto6["m_srcTableName"] = "emptype";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeType",
	"m_strTable" => "emptype",
	"m_srcTableName" => "emptype"
));

$proto8["m_sql"] = "EmployeeType";
$proto8["m_srcTableName"] = "emptype";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "emptype";
$proto11["m_srcTableName"] = "emptype";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ECatID";
$proto11["m_columns"][] = "EmployeeType";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "emptype";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "emptype";
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
$proto0["m_srcTableName"]="emptype";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_emptype = createSqlQuery_emptype();


	
		;

		

$tdataemptype[".sqlquery"] = $queryData_emptype;

$tableEvents["emptype"] = new eventsBase;
$tdataemptype[".hasEvents"] = false;

?>