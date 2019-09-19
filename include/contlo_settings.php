<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacontlo = array();
	$tdatacontlo[".truncateText"] = true;
	$tdatacontlo[".NumberOfChars"] = 80;
	$tdatacontlo[".ShortName"] = "contlo";
	$tdatacontlo[".OwnerID"] = "";
	$tdatacontlo[".OriginalTable"] = "contlo";

//	field labels
$fieldLabelscontlo = array();
$fieldToolTipscontlo = array();
$pageTitlescontlo = array();
$placeHolderscontlo = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscontlo["English"] = array();
	$fieldToolTipscontlo["English"] = array();
	$placeHolderscontlo["English"] = array();
	$pageTitlescontlo["English"] = array();
	$fieldLabelscontlo["English"]["CLID"] = "CLID";
	$fieldToolTipscontlo["English"]["CLID"] = "";
	$placeHolderscontlo["English"]["CLID"] = "";
	$fieldLabelscontlo["English"]["FromDate"] = "From Date";
	$fieldToolTipscontlo["English"]["FromDate"] = "";
	$placeHolderscontlo["English"]["FromDate"] = "";
	$fieldLabelscontlo["English"]["ToDate"] = "To Date";
	$fieldToolTipscontlo["English"]["ToDate"] = "";
	$placeHolderscontlo["English"]["ToDate"] = "";
	if (count($fieldToolTipscontlo["English"]))
		$tdatacontlo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscontlo[""] = array();
	$fieldToolTipscontlo[""] = array();
	$placeHolderscontlo[""] = array();
	$pageTitlescontlo[""] = array();
	if (count($fieldToolTipscontlo[""]))
		$tdatacontlo[".isUseToolTips"] = true;
}


	$tdatacontlo[".NCSearch"] = true;



$tdatacontlo[".shortTableName"] = "contlo";
$tdatacontlo[".nSecOptions"] = 0;
$tdatacontlo[".recsPerRowPrint"] = 1;
$tdatacontlo[".mainTableOwnerID"] = "";
$tdatacontlo[".moveNext"] = 1;
$tdatacontlo[".entityType"] = 0;

$tdatacontlo[".strOriginalTableName"] = "contlo";

	



$tdatacontlo[".showAddInPopup"] = false;

$tdatacontlo[".showEditInPopup"] = false;

$tdatacontlo[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacontlo[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacontlo[".fieldsForRegister"] = array();

$tdatacontlo[".listAjax"] = false;

	$tdatacontlo[".audit"] = false;

	$tdatacontlo[".locking"] = false;

$tdatacontlo[".edit"] = true;
$tdatacontlo[".afterEditAction"] = 1;
$tdatacontlo[".closePopupAfterEdit"] = 1;
$tdatacontlo[".afterEditActionDetTable"] = "";

$tdatacontlo[".add"] = true;
$tdatacontlo[".afterAddAction"] = 1;
$tdatacontlo[".closePopupAfterAdd"] = 1;
$tdatacontlo[".afterAddActionDetTable"] = "";

$tdatacontlo[".list"] = true;

$tdatacontlo[".inlineEdit"] = true;

$tdatacontlo[".updateSelected"] = true;

$tdatacontlo[".reorderRecordsByHeader"] = true;


$tdatacontlo[".exportFormatting"] = 2;
$tdatacontlo[".exportDelimiter"] = ",";
		
$tdatacontlo[".inlineAdd"] = true;
$tdatacontlo[".copy"] = true;
$tdatacontlo[".view"] = true;

$tdatacontlo[".import"] = true;

$tdatacontlo[".exportTo"] = true;

$tdatacontlo[".printFriendly"] = true;

$tdatacontlo[".delete"] = true;

$tdatacontlo[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacontlo[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatacontlo[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatacontlo[".searchSaving"] = false;
//

$tdatacontlo[".showSearchPanel"] = true;
		$tdatacontlo[".flexibleSearch"] = true;

$tdatacontlo[".isUseAjaxSuggest"] = true;

$tdatacontlo[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																					

$tdatacontlo[".ajaxCodeSnippetAdded"] = false;

$tdatacontlo[".buttonsAdded"] = false;

$tdatacontlo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontlo[".isUseTimeForSearch"] = false;





$tdatacontlo[".allSearchFields"] = array();
$tdatacontlo[".filterFields"] = array();
$tdatacontlo[".requiredSearchFields"] = array();

$tdatacontlo[".allSearchFields"][] = "CLID";
	$tdatacontlo[".allSearchFields"][] = "FromDate";
	$tdatacontlo[".allSearchFields"][] = "ToDate";
	

$tdatacontlo[".googleLikeFields"] = array();
$tdatacontlo[".googleLikeFields"][] = "CLID";
$tdatacontlo[".googleLikeFields"][] = "FromDate";
$tdatacontlo[".googleLikeFields"][] = "ToDate";


$tdatacontlo[".advSearchFields"] = array();
$tdatacontlo[".advSearchFields"][] = "CLID";
$tdatacontlo[".advSearchFields"][] = "FromDate";
$tdatacontlo[".advSearchFields"][] = "ToDate";

$tdatacontlo[".tableType"] = "list";

$tdatacontlo[".printerPageOrientation"] = 0;
$tdatacontlo[".nPrinterPageScale"] = 100;

$tdatacontlo[".nPrinterSplitRecords"] = 40;

$tdatacontlo[".nPrinterPDFSplitRecords"] = 40;



$tdatacontlo[".geocodingEnabled"] = false;





$tdatacontlo[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatacontlo[".pageSize"] = 20;

$tdatacontlo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacontlo[".strOrderBy"] = $tstrOrderBy;

$tdatacontlo[".orderindexes"] = array();

$tdatacontlo[".sqlHead"] = "SELECT CLID,  	FromDate,  	ToDate";
$tdatacontlo[".sqlFrom"] = "FROM contlo";
$tdatacontlo[".sqlWhereExpr"] = "";
$tdatacontlo[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontlo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontlo[".arrGroupsPerPage"] = $arrGPP;

$tdatacontlo[".highlightSearchResults"] = true;

$tableKeyscontlo = array();
$tableKeyscontlo[] = "CLID";
$tdatacontlo[".Keys"] = $tableKeyscontlo;

$tdatacontlo[".listFields"] = array();
$tdatacontlo[".listFields"][] = "CLID";
$tdatacontlo[".listFields"][] = "FromDate";
$tdatacontlo[".listFields"][] = "ToDate";

$tdatacontlo[".hideMobileList"] = array();


$tdatacontlo[".viewFields"] = array();
$tdatacontlo[".viewFields"][] = "CLID";
$tdatacontlo[".viewFields"][] = "FromDate";
$tdatacontlo[".viewFields"][] = "ToDate";

$tdatacontlo[".addFields"] = array();
$tdatacontlo[".addFields"][] = "FromDate";
$tdatacontlo[".addFields"][] = "ToDate";

$tdatacontlo[".masterListFields"] = array();
$tdatacontlo[".masterListFields"][] = "CLID";
$tdatacontlo[".masterListFields"][] = "FromDate";
$tdatacontlo[".masterListFields"][] = "ToDate";

$tdatacontlo[".inlineAddFields"] = array();
$tdatacontlo[".inlineAddFields"][] = "FromDate";
$tdatacontlo[".inlineAddFields"][] = "ToDate";

$tdatacontlo[".editFields"] = array();
$tdatacontlo[".editFields"][] = "FromDate";
$tdatacontlo[".editFields"][] = "ToDate";

$tdatacontlo[".inlineEditFields"] = array();
$tdatacontlo[".inlineEditFields"][] = "FromDate";
$tdatacontlo[".inlineEditFields"][] = "ToDate";

$tdatacontlo[".updateSelectedFields"] = array();
$tdatacontlo[".updateSelectedFields"][] = "FromDate";
$tdatacontlo[".updateSelectedFields"][] = "ToDate";


$tdatacontlo[".exportFields"] = array();
$tdatacontlo[".exportFields"][] = "CLID";
$tdatacontlo[".exportFields"][] = "FromDate";
$tdatacontlo[".exportFields"][] = "ToDate";

$tdatacontlo[".importFields"] = array();
$tdatacontlo[".importFields"][] = "CLID";
$tdatacontlo[".importFields"][] = "FromDate";
$tdatacontlo[".importFields"][] = "ToDate";

$tdatacontlo[".printFields"] = array();
$tdatacontlo[".printFields"][] = "CLID";
$tdatacontlo[".printFields"][] = "FromDate";
$tdatacontlo[".printFields"][] = "ToDate";


//	CLID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CLID";
	$fdata["GoodName"] = "CLID";
	$fdata["ownerTable"] = "contlo";
	$fdata["Label"] = GetFieldLabel("contlo","CLID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CLID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CLID";

	
	
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




	$tdatacontlo["CLID"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "contlo";
	$fdata["Label"] = GetFieldLabel("contlo","FromDate");
	$fdata["FieldType"] = 7;

	
	
	
			
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

		$fdata["strField"] = "FromDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FromDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 21;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatacontlo["FromDate"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "contlo";
	$fdata["Label"] = GetFieldLabel("contlo","ToDate");
	$fdata["FieldType"] = 7;

	
	
	
			
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

		$fdata["strField"] = "ToDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ToDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 21;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatacontlo["ToDate"] = $fdata;


$tables_data["contlo"]=&$tdatacontlo;
$field_labels["contlo"] = &$fieldLabelscontlo;
$fieldToolTips["contlo"] = &$fieldToolTipscontlo;
$placeHolders["contlo"] = &$placeHolderscontlo;
$page_titles["contlo"] = &$pageTitlescontlo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["contlo"] = array();
//	loansreport
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="loansreport";
		$detailsParam["dOriginalTable"] = "loansreport";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "loansreport";
	$detailsParam["dCaptionTable"] = GetTableCaption("loansreport");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["contlo"][$dIndex] = $detailsParam;

	
		$detailsTablesData["contlo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["contlo"][$dIndex]["masterKeys"][]="FromDate";

	$detailsTablesData["contlo"][$dIndex]["masterKeys"][]="ToDate";

				$detailsTablesData["contlo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["contlo"][$dIndex]["detailKeys"][]="FromDate";

		
	$detailsTablesData["contlo"][$dIndex]["detailKeys"][]="ToDate";
//	ssscontsummary
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ssscontsummary";
		$detailsParam["dOriginalTable"] = "ssscontsummary";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ssscontsummary";
	$detailsParam["dCaptionTable"] = GetTableCaption("ssscontsummary");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["contlo"][$dIndex] = $detailsParam;

	
		$detailsTablesData["contlo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["contlo"][$dIndex]["masterKeys"][]="FromDate";

	$detailsTablesData["contlo"][$dIndex]["masterKeys"][]="ToDate";

				$detailsTablesData["contlo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["contlo"][$dIndex]["detailKeys"][]="FromDate";

		
	$detailsTablesData["contlo"][$dIndex]["detailKeys"][]="ToDate";

// tables which are master tables for current table (detail)
$masterTablesData["contlo"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_contlo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CLID,  	FromDate,  	ToDate";
$proto0["m_strFrom"] = "FROM contlo";
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
	"m_strName" => "CLID",
	"m_strTable" => "contlo",
	"m_srcTableName" => "contlo"
));

$proto6["m_sql"] = "CLID";
$proto6["m_srcTableName"] = "contlo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "contlo",
	"m_srcTableName" => "contlo"
));

$proto8["m_sql"] = "FromDate";
$proto8["m_srcTableName"] = "contlo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "contlo",
	"m_srcTableName" => "contlo"
));

$proto10["m_sql"] = "ToDate";
$proto10["m_srcTableName"] = "contlo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "contlo";
$proto13["m_srcTableName"] = "contlo";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "CLID";
$proto13["m_columns"][] = "FromDate";
$proto13["m_columns"][] = "ToDate";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "contlo";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "contlo";
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
$proto0["m_srcTableName"]="contlo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contlo = createSqlQuery_contlo();


	
		;

			

$tdatacontlo[".sqlquery"] = $queryData_contlo;

include_once(getabspath("include/contlo_events.php"));
$tableEvents["contlo"] = new eventclass_contlo;
$tdatacontlo[".hasEvents"] = true;

?>