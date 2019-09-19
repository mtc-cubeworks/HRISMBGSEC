<?php
require_once(getabspath("classes/cipherer.php"));




$tdataschedtype = array();
	$tdataschedtype[".truncateText"] = true;
	$tdataschedtype[".NumberOfChars"] = 80;
	$tdataschedtype[".ShortName"] = "schedtype";
	$tdataschedtype[".OwnerID"] = "";
	$tdataschedtype[".OriginalTable"] = "schedtype";

//	field labels
$fieldLabelsschedtype = array();
$fieldToolTipsschedtype = array();
$pageTitlesschedtype = array();
$placeHoldersschedtype = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsschedtype["English"] = array();
	$fieldToolTipsschedtype["English"] = array();
	$placeHoldersschedtype["English"] = array();
	$pageTitlesschedtype["English"] = array();
	$fieldLabelsschedtype["English"]["stID"] = "St ID";
	$fieldToolTipsschedtype["English"]["stID"] = "";
	$placeHoldersschedtype["English"]["stID"] = "";
	$fieldLabelsschedtype["English"]["ScheduleType"] = "Schedule Type";
	$fieldToolTipsschedtype["English"]["ScheduleType"] = "";
	$placeHoldersschedtype["English"]["ScheduleType"] = "";
	if (count($fieldToolTipsschedtype["English"]))
		$tdataschedtype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsschedtype[""] = array();
	$fieldToolTipsschedtype[""] = array();
	$placeHoldersschedtype[""] = array();
	$pageTitlesschedtype[""] = array();
	if (count($fieldToolTipsschedtype[""]))
		$tdataschedtype[".isUseToolTips"] = true;
}


	$tdataschedtype[".NCSearch"] = true;



$tdataschedtype[".shortTableName"] = "schedtype";
$tdataschedtype[".nSecOptions"] = 0;
$tdataschedtype[".recsPerRowPrint"] = 1;
$tdataschedtype[".mainTableOwnerID"] = "";
$tdataschedtype[".moveNext"] = 1;
$tdataschedtype[".entityType"] = 0;

$tdataschedtype[".strOriginalTableName"] = "schedtype";

	



$tdataschedtype[".showAddInPopup"] = false;

$tdataschedtype[".showEditInPopup"] = false;

$tdataschedtype[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataschedtype[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataschedtype[".fieldsForRegister"] = array();

$tdataschedtype[".listAjax"] = false;

	$tdataschedtype[".audit"] = false;

	$tdataschedtype[".locking"] = false;

$tdataschedtype[".edit"] = true;
$tdataschedtype[".afterEditAction"] = 1;
$tdataschedtype[".closePopupAfterEdit"] = 1;
$tdataschedtype[".afterEditActionDetTable"] = "";

$tdataschedtype[".add"] = true;
$tdataschedtype[".afterAddAction"] = 1;
$tdataschedtype[".closePopupAfterAdd"] = 1;
$tdataschedtype[".afterAddActionDetTable"] = "";

$tdataschedtype[".list"] = true;

$tdataschedtype[".inlineEdit"] = true;

$tdataschedtype[".updateSelected"] = true;

$tdataschedtype[".reorderRecordsByHeader"] = true;


$tdataschedtype[".exportFormatting"] = 2;
$tdataschedtype[".exportDelimiter"] = ",";
		
$tdataschedtype[".inlineAdd"] = true;
$tdataschedtype[".copy"] = true;
$tdataschedtype[".view"] = true;

$tdataschedtype[".import"] = true;

$tdataschedtype[".exportTo"] = true;

$tdataschedtype[".printFriendly"] = true;

$tdataschedtype[".delete"] = true;

$tdataschedtype[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataschedtype[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataschedtype[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataschedtype[".searchSaving"] = false;
//

$tdataschedtype[".showSearchPanel"] = true;
		$tdataschedtype[".flexibleSearch"] = true;

$tdataschedtype[".isUseAjaxSuggest"] = true;

$tdataschedtype[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																					

$tdataschedtype[".ajaxCodeSnippetAdded"] = false;

$tdataschedtype[".buttonsAdded"] = false;

$tdataschedtype[".addPageEvents"] = false;

// use timepicker for search panel
$tdataschedtype[".isUseTimeForSearch"] = false;





$tdataschedtype[".allSearchFields"] = array();
$tdataschedtype[".filterFields"] = array();
$tdataschedtype[".requiredSearchFields"] = array();

$tdataschedtype[".allSearchFields"][] = "stID";
	$tdataschedtype[".allSearchFields"][] = "ScheduleType";
	

$tdataschedtype[".googleLikeFields"] = array();
$tdataschedtype[".googleLikeFields"][] = "stID";
$tdataschedtype[".googleLikeFields"][] = "ScheduleType";


$tdataschedtype[".advSearchFields"] = array();
$tdataschedtype[".advSearchFields"][] = "stID";
$tdataschedtype[".advSearchFields"][] = "ScheduleType";

$tdataschedtype[".tableType"] = "list";

$tdataschedtype[".printerPageOrientation"] = 0;
$tdataschedtype[".nPrinterPageScale"] = 100;

$tdataschedtype[".nPrinterSplitRecords"] = 40;

$tdataschedtype[".nPrinterPDFSplitRecords"] = 40;



$tdataschedtype[".geocodingEnabled"] = false;





$tdataschedtype[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataschedtype[".pageSize"] = 20;

$tdataschedtype[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataschedtype[".strOrderBy"] = $tstrOrderBy;

$tdataschedtype[".orderindexes"] = array();

$tdataschedtype[".sqlHead"] = "SELECT stID,  	ScheduleType";
$tdataschedtype[".sqlFrom"] = "FROM schedtype";
$tdataschedtype[".sqlWhereExpr"] = "";
$tdataschedtype[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataschedtype[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataschedtype[".arrGroupsPerPage"] = $arrGPP;

$tdataschedtype[".highlightSearchResults"] = true;

$tableKeysschedtype = array();
$tableKeysschedtype[] = "stID";
$tdataschedtype[".Keys"] = $tableKeysschedtype;

$tdataschedtype[".listFields"] = array();
$tdataschedtype[".listFields"][] = "stID";
$tdataschedtype[".listFields"][] = "ScheduleType";

$tdataschedtype[".hideMobileList"] = array();


$tdataschedtype[".viewFields"] = array();
$tdataschedtype[".viewFields"][] = "stID";
$tdataschedtype[".viewFields"][] = "ScheduleType";

$tdataschedtype[".addFields"] = array();
$tdataschedtype[".addFields"][] = "ScheduleType";

$tdataschedtype[".masterListFields"] = array();
$tdataschedtype[".masterListFields"][] = "stID";
$tdataschedtype[".masterListFields"][] = "ScheduleType";

$tdataschedtype[".inlineAddFields"] = array();
$tdataschedtype[".inlineAddFields"][] = "ScheduleType";

$tdataschedtype[".editFields"] = array();
$tdataschedtype[".editFields"][] = "ScheduleType";

$tdataschedtype[".inlineEditFields"] = array();
$tdataschedtype[".inlineEditFields"][] = "ScheduleType";

$tdataschedtype[".updateSelectedFields"] = array();
$tdataschedtype[".updateSelectedFields"][] = "ScheduleType";


$tdataschedtype[".exportFields"] = array();
$tdataschedtype[".exportFields"][] = "stID";
$tdataschedtype[".exportFields"][] = "ScheduleType";

$tdataschedtype[".importFields"] = array();
$tdataschedtype[".importFields"][] = "stID";
$tdataschedtype[".importFields"][] = "ScheduleType";

$tdataschedtype[".printFields"] = array();
$tdataschedtype[".printFields"][] = "stID";
$tdataschedtype[".printFields"][] = "ScheduleType";


//	stID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "stID";
	$fdata["GoodName"] = "stID";
	$fdata["ownerTable"] = "schedtype";
	$fdata["Label"] = GetFieldLabel("schedtype","stID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "stID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stID";

	
	
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




	$tdataschedtype["stID"] = $fdata;
//	ScheduleType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ScheduleType";
	$fdata["GoodName"] = "ScheduleType";
	$fdata["ownerTable"] = "schedtype";
	$fdata["Label"] = GetFieldLabel("schedtype","ScheduleType");
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

		$fdata["strField"] = "ScheduleType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ScheduleType";

	
	
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




	$tdataschedtype["ScheduleType"] = $fdata;


$tables_data["schedtype"]=&$tdataschedtype;
$field_labels["schedtype"] = &$fieldLabelsschedtype;
$fieldToolTips["schedtype"] = &$fieldToolTipsschedtype;
$placeHolders["schedtype"] = &$placeHoldersschedtype;
$page_titles["schedtype"] = &$pageTitlesschedtype;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["schedtype"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["schedtype"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_schedtype()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "stID,  	ScheduleType";
$proto0["m_strFrom"] = "FROM schedtype";
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
	"m_strName" => "stID",
	"m_strTable" => "schedtype",
	"m_srcTableName" => "schedtype"
));

$proto6["m_sql"] = "stID";
$proto6["m_srcTableName"] = "schedtype";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ScheduleType",
	"m_strTable" => "schedtype",
	"m_srcTableName" => "schedtype"
));

$proto8["m_sql"] = "ScheduleType";
$proto8["m_srcTableName"] = "schedtype";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "schedtype";
$proto11["m_srcTableName"] = "schedtype";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "stID";
$proto11["m_columns"][] = "ScheduleType";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "schedtype";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "schedtype";
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
$proto0["m_srcTableName"]="schedtype";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_schedtype = createSqlQuery_schedtype();


	
		;

		

$tdataschedtype[".sqlquery"] = $queryData_schedtype;

$tableEvents["schedtype"] = new eventsBase;
$tdataschedtype[".hasEvents"] = false;

?>