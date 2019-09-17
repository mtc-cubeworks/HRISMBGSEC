<?php
require_once(getabspath("classes/cipherer.php"));




$tdataschedby = array();
	$tdataschedby[".truncateText"] = true;
	$tdataschedby[".NumberOfChars"] = 80;
	$tdataschedby[".ShortName"] = "schedby";
	$tdataschedby[".OwnerID"] = "";
	$tdataschedby[".OriginalTable"] = "schedby";

//	field labels
$fieldLabelsschedby = array();
$fieldToolTipsschedby = array();
$pageTitlesschedby = array();
$placeHoldersschedby = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsschedby["English"] = array();
	$fieldToolTipsschedby["English"] = array();
	$placeHoldersschedby["English"] = array();
	$pageTitlesschedby["English"] = array();
	$fieldLabelsschedby["English"]["sbID"] = "Sb ID";
	$fieldToolTipsschedby["English"]["sbID"] = "";
	$placeHoldersschedby["English"]["sbID"] = "";
	$fieldLabelsschedby["English"]["ScheduleBy"] = "Schedule By";
	$fieldToolTipsschedby["English"]["ScheduleBy"] = "";
	$placeHoldersschedby["English"]["ScheduleBy"] = "";
	if (count($fieldToolTipsschedby["English"]))
		$tdataschedby[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsschedby[""] = array();
	$fieldToolTipsschedby[""] = array();
	$placeHoldersschedby[""] = array();
	$pageTitlesschedby[""] = array();
	if (count($fieldToolTipsschedby[""]))
		$tdataschedby[".isUseToolTips"] = true;
}


	$tdataschedby[".NCSearch"] = true;



$tdataschedby[".shortTableName"] = "schedby";
$tdataschedby[".nSecOptions"] = 0;
$tdataschedby[".recsPerRowPrint"] = 1;
$tdataschedby[".mainTableOwnerID"] = "";
$tdataschedby[".moveNext"] = 1;
$tdataschedby[".entityType"] = 0;

$tdataschedby[".strOriginalTableName"] = "schedby";

	



$tdataschedby[".showAddInPopup"] = false;

$tdataschedby[".showEditInPopup"] = false;

$tdataschedby[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataschedby[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataschedby[".fieldsForRegister"] = array();

$tdataschedby[".listAjax"] = false;

	$tdataschedby[".audit"] = false;

	$tdataschedby[".locking"] = false;

$tdataschedby[".edit"] = true;
$tdataschedby[".afterEditAction"] = 1;
$tdataschedby[".closePopupAfterEdit"] = 1;
$tdataschedby[".afterEditActionDetTable"] = "";

$tdataschedby[".add"] = true;
$tdataschedby[".afterAddAction"] = 1;
$tdataschedby[".closePopupAfterAdd"] = 1;
$tdataschedby[".afterAddActionDetTable"] = "";

$tdataschedby[".list"] = true;



$tdataschedby[".reorderRecordsByHeader"] = true;


$tdataschedby[".exportFormatting"] = 2;
$tdataschedby[".exportDelimiter"] = ",";
		
$tdataschedby[".view"] = true;

$tdataschedby[".import"] = true;

$tdataschedby[".exportTo"] = true;

$tdataschedby[".printFriendly"] = true;

$tdataschedby[".delete"] = true;

$tdataschedby[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataschedby[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataschedby[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataschedby[".searchSaving"] = false;
//

$tdataschedby[".showSearchPanel"] = true;
		$tdataschedby[".flexibleSearch"] = true;

$tdataschedby[".isUseAjaxSuggest"] = true;

$tdataschedby[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																		

$tdataschedby[".ajaxCodeSnippetAdded"] = false;

$tdataschedby[".buttonsAdded"] = false;

$tdataschedby[".addPageEvents"] = false;

// use timepicker for search panel
$tdataschedby[".isUseTimeForSearch"] = false;





$tdataschedby[".allSearchFields"] = array();
$tdataschedby[".filterFields"] = array();
$tdataschedby[".requiredSearchFields"] = array();

$tdataschedby[".allSearchFields"][] = "sbID";
	$tdataschedby[".allSearchFields"][] = "ScheduleBy";
	

$tdataschedby[".googleLikeFields"] = array();
$tdataschedby[".googleLikeFields"][] = "sbID";
$tdataschedby[".googleLikeFields"][] = "ScheduleBy";


$tdataschedby[".advSearchFields"] = array();
$tdataschedby[".advSearchFields"][] = "sbID";
$tdataschedby[".advSearchFields"][] = "ScheduleBy";

$tdataschedby[".tableType"] = "list";

$tdataschedby[".printerPageOrientation"] = 0;
$tdataschedby[".nPrinterPageScale"] = 100;

$tdataschedby[".nPrinterSplitRecords"] = 40;

$tdataschedby[".nPrinterPDFSplitRecords"] = 40;



$tdataschedby[".geocodingEnabled"] = false;





$tdataschedby[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataschedby[".pageSize"] = 20;

$tdataschedby[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataschedby[".strOrderBy"] = $tstrOrderBy;

$tdataschedby[".orderindexes"] = array();

$tdataschedby[".sqlHead"] = "SELECT sbID,  	ScheduleBy";
$tdataschedby[".sqlFrom"] = "FROM schedby";
$tdataschedby[".sqlWhereExpr"] = "";
$tdataschedby[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataschedby[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataschedby[".arrGroupsPerPage"] = $arrGPP;

$tdataschedby[".highlightSearchResults"] = true;

$tableKeysschedby = array();
$tableKeysschedby[] = "sbID";
$tdataschedby[".Keys"] = $tableKeysschedby;

$tdataschedby[".listFields"] = array();
$tdataschedby[".listFields"][] = "sbID";
$tdataschedby[".listFields"][] = "ScheduleBy";

$tdataschedby[".hideMobileList"] = array();


$tdataschedby[".viewFields"] = array();
$tdataschedby[".viewFields"][] = "sbID";
$tdataschedby[".viewFields"][] = "ScheduleBy";

$tdataschedby[".addFields"] = array();
$tdataschedby[".addFields"][] = "ScheduleBy";

$tdataschedby[".masterListFields"] = array();
$tdataschedby[".masterListFields"][] = "sbID";
$tdataschedby[".masterListFields"][] = "ScheduleBy";

$tdataschedby[".inlineAddFields"] = array();
$tdataschedby[".inlineAddFields"][] = "ScheduleBy";

$tdataschedby[".editFields"] = array();
$tdataschedby[".editFields"][] = "ScheduleBy";

$tdataschedby[".inlineEditFields"] = array();
$tdataschedby[".inlineEditFields"][] = "ScheduleBy";

$tdataschedby[".updateSelectedFields"] = array();
$tdataschedby[".updateSelectedFields"][] = "ScheduleBy";


$tdataschedby[".exportFields"] = array();
$tdataschedby[".exportFields"][] = "sbID";
$tdataschedby[".exportFields"][] = "ScheduleBy";

$tdataschedby[".importFields"] = array();
$tdataschedby[".importFields"][] = "sbID";
$tdataschedby[".importFields"][] = "ScheduleBy";

$tdataschedby[".printFields"] = array();
$tdataschedby[".printFields"][] = "sbID";
$tdataschedby[".printFields"][] = "ScheduleBy";


//	sbID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sbID";
	$fdata["GoodName"] = "sbID";
	$fdata["ownerTable"] = "schedby";
	$fdata["Label"] = GetFieldLabel("schedby","sbID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sbID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sbID";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataschedby["sbID"] = $fdata;
//	ScheduleBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ScheduleBy";
	$fdata["GoodName"] = "ScheduleBy";
	$fdata["ownerTable"] = "schedby";
	$fdata["Label"] = GetFieldLabel("schedby","ScheduleBy");
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

		$fdata["strField"] = "ScheduleBy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ScheduleBy";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataschedby["ScheduleBy"] = $fdata;


$tables_data["schedby"]=&$tdataschedby;
$field_labels["schedby"] = &$fieldLabelsschedby;
$fieldToolTips["schedby"] = &$fieldToolTipsschedby;
$placeHolders["schedby"] = &$placeHoldersschedby;
$page_titles["schedby"] = &$pageTitlesschedby;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["schedby"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["schedby"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_schedby()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sbID,  	ScheduleBy";
$proto0["m_strFrom"] = "FROM schedby";
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
	"m_strName" => "sbID",
	"m_strTable" => "schedby",
	"m_srcTableName" => "schedby"
));

$proto6["m_sql"] = "sbID";
$proto6["m_srcTableName"] = "schedby";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ScheduleBy",
	"m_strTable" => "schedby",
	"m_srcTableName" => "schedby"
));

$proto8["m_sql"] = "ScheduleBy";
$proto8["m_srcTableName"] = "schedby";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "schedby";
$proto11["m_srcTableName"] = "schedby";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "sbID";
$proto11["m_columns"][] = "ScheduleBy";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "schedby";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "schedby";
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
$proto0["m_srcTableName"]="schedby";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_schedby = createSqlQuery_schedby();


	
		;

		

$tdataschedby[".sqlquery"] = $queryData_schedby;

$tableEvents["schedby"] = new eventsBase;
$tdataschedby[".hasEvents"] = false;

?>