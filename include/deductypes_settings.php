<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadeductypes = array();
	$tdatadeductypes[".truncateText"] = true;
	$tdatadeductypes[".NumberOfChars"] = 80;
	$tdatadeductypes[".ShortName"] = "deductypes";
	$tdatadeductypes[".OwnerID"] = "";
	$tdatadeductypes[".OriginalTable"] = "deductypes";

//	field labels
$fieldLabelsdeductypes = array();
$fieldToolTipsdeductypes = array();
$pageTitlesdeductypes = array();
$placeHoldersdeductypes = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdeductypes["English"] = array();
	$fieldToolTipsdeductypes["English"] = array();
	$placeHoldersdeductypes["English"] = array();
	$pageTitlesdeductypes["English"] = array();
	$fieldLabelsdeductypes["English"]["DtID"] = "Dt ID";
	$fieldToolTipsdeductypes["English"]["DtID"] = "";
	$placeHoldersdeductypes["English"]["DtID"] = "";
	$fieldLabelsdeductypes["English"]["DeductionType"] = "Deduction Category";
	$fieldToolTipsdeductypes["English"]["DeductionType"] = "";
	$placeHoldersdeductypes["English"]["DeductionType"] = "";
	if (count($fieldToolTipsdeductypes["English"]))
		$tdatadeductypes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdeductypes[""] = array();
	$fieldToolTipsdeductypes[""] = array();
	$placeHoldersdeductypes[""] = array();
	$pageTitlesdeductypes[""] = array();
	$fieldLabelsdeductypes[""]["DtID"] = "Dt ID";
	$fieldToolTipsdeductypes[""]["DtID"] = "";
	$placeHoldersdeductypes[""]["DtID"] = "";
	$fieldLabelsdeductypes[""]["DeductionType"] = "Deduction Type";
	$fieldToolTipsdeductypes[""]["DeductionType"] = "";
	$placeHoldersdeductypes[""]["DeductionType"] = "";
	if (count($fieldToolTipsdeductypes[""]))
		$tdatadeductypes[".isUseToolTips"] = true;
}


	$tdatadeductypes[".NCSearch"] = true;



$tdatadeductypes[".shortTableName"] = "deductypes";
$tdatadeductypes[".nSecOptions"] = 0;
$tdatadeductypes[".recsPerRowPrint"] = 1;
$tdatadeductypes[".mainTableOwnerID"] = "";
$tdatadeductypes[".moveNext"] = 1;
$tdatadeductypes[".entityType"] = 0;

$tdatadeductypes[".strOriginalTableName"] = "deductypes";

	



$tdatadeductypes[".showAddInPopup"] = false;

$tdatadeductypes[".showEditInPopup"] = false;

$tdatadeductypes[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadeductypes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadeductypes[".fieldsForRegister"] = array();

$tdatadeductypes[".listAjax"] = false;

	$tdatadeductypes[".audit"] = false;

	$tdatadeductypes[".locking"] = false;

$tdatadeductypes[".edit"] = true;
$tdatadeductypes[".afterEditAction"] = 1;
$tdatadeductypes[".closePopupAfterEdit"] = 1;
$tdatadeductypes[".afterEditActionDetTable"] = "";

$tdatadeductypes[".add"] = true;
$tdatadeductypes[".afterAddAction"] = 1;
$tdatadeductypes[".closePopupAfterAdd"] = 1;
$tdatadeductypes[".afterAddActionDetTable"] = "";

$tdatadeductypes[".list"] = true;



$tdatadeductypes[".reorderRecordsByHeader"] = true;


$tdatadeductypes[".exportFormatting"] = 2;
$tdatadeductypes[".exportDelimiter"] = ",";
		
$tdatadeductypes[".view"] = true;

$tdatadeductypes[".import"] = true;

$tdatadeductypes[".exportTo"] = true;

$tdatadeductypes[".printFriendly"] = true;

$tdatadeductypes[".delete"] = true;

$tdatadeductypes[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadeductypes[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatadeductypes[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatadeductypes[".searchSaving"] = false;
//

$tdatadeductypes[".showSearchPanel"] = true;
		$tdatadeductypes[".flexibleSearch"] = true;

$tdatadeductypes[".isUseAjaxSuggest"] = true;

$tdatadeductypes[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																					

$tdatadeductypes[".ajaxCodeSnippetAdded"] = false;

$tdatadeductypes[".buttonsAdded"] = false;

$tdatadeductypes[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadeductypes[".isUseTimeForSearch"] = false;





$tdatadeductypes[".allSearchFields"] = array();
$tdatadeductypes[".filterFields"] = array();
$tdatadeductypes[".requiredSearchFields"] = array();

$tdatadeductypes[".allSearchFields"][] = "DtID";
	$tdatadeductypes[".allSearchFields"][] = "DeductionType";
	

$tdatadeductypes[".googleLikeFields"] = array();
$tdatadeductypes[".googleLikeFields"][] = "DtID";
$tdatadeductypes[".googleLikeFields"][] = "DeductionType";


$tdatadeductypes[".advSearchFields"] = array();
$tdatadeductypes[".advSearchFields"][] = "DtID";
$tdatadeductypes[".advSearchFields"][] = "DeductionType";

$tdatadeductypes[".tableType"] = "list";

$tdatadeductypes[".printerPageOrientation"] = 0;
$tdatadeductypes[".nPrinterPageScale"] = 100;

$tdatadeductypes[".nPrinterSplitRecords"] = 40;

$tdatadeductypes[".nPrinterPDFSplitRecords"] = 40;



$tdatadeductypes[".geocodingEnabled"] = false;





$tdatadeductypes[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatadeductypes[".pageSize"] = 20;

$tdatadeductypes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadeductypes[".strOrderBy"] = $tstrOrderBy;

$tdatadeductypes[".orderindexes"] = array();

$tdatadeductypes[".sqlHead"] = "SELECT DtID,  	DeductionType";
$tdatadeductypes[".sqlFrom"] = "FROM deductypes";
$tdatadeductypes[".sqlWhereExpr"] = "";
$tdatadeductypes[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadeductypes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadeductypes[".arrGroupsPerPage"] = $arrGPP;

$tdatadeductypes[".highlightSearchResults"] = true;

$tableKeysdeductypes = array();
$tableKeysdeductypes[] = "DtID";
$tdatadeductypes[".Keys"] = $tableKeysdeductypes;

$tdatadeductypes[".listFields"] = array();
$tdatadeductypes[".listFields"][] = "DtID";
$tdatadeductypes[".listFields"][] = "DeductionType";

$tdatadeductypes[".hideMobileList"] = array();


$tdatadeductypes[".viewFields"] = array();
$tdatadeductypes[".viewFields"][] = "DtID";
$tdatadeductypes[".viewFields"][] = "DeductionType";

$tdatadeductypes[".addFields"] = array();
$tdatadeductypes[".addFields"][] = "DeductionType";

$tdatadeductypes[".masterListFields"] = array();
$tdatadeductypes[".masterListFields"][] = "DtID";
$tdatadeductypes[".masterListFields"][] = "DeductionType";

$tdatadeductypes[".inlineAddFields"] = array();
$tdatadeductypes[".inlineAddFields"][] = "DeductionType";

$tdatadeductypes[".editFields"] = array();
$tdatadeductypes[".editFields"][] = "DeductionType";

$tdatadeductypes[".inlineEditFields"] = array();
$tdatadeductypes[".inlineEditFields"][] = "DeductionType";

$tdatadeductypes[".updateSelectedFields"] = array();
$tdatadeductypes[".updateSelectedFields"][] = "DeductionType";


$tdatadeductypes[".exportFields"] = array();
$tdatadeductypes[".exportFields"][] = "DtID";
$tdatadeductypes[".exportFields"][] = "DeductionType";

$tdatadeductypes[".importFields"] = array();
$tdatadeductypes[".importFields"][] = "DtID";
$tdatadeductypes[".importFields"][] = "DeductionType";

$tdatadeductypes[".printFields"] = array();
$tdatadeductypes[".printFields"][] = "DtID";
$tdatadeductypes[".printFields"][] = "DeductionType";


//	DtID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DtID";
	$fdata["GoodName"] = "DtID";
	$fdata["ownerTable"] = "deductypes";
	$fdata["Label"] = GetFieldLabel("deductypes","DtID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DtID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DtID";

	
	
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




	$tdatadeductypes["DtID"] = $fdata;
//	DeductionType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DeductionType";
	$fdata["GoodName"] = "DeductionType";
	$fdata["ownerTable"] = "deductypes";
	$fdata["Label"] = GetFieldLabel("deductypes","DeductionType");
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

		$fdata["strField"] = "DeductionType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DeductionType";

	
	
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
			$edata["EditParams"].= " maxlength=60";

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




	$tdatadeductypes["DeductionType"] = $fdata;


$tables_data["deductypes"]=&$tdatadeductypes;
$field_labels["deductypes"] = &$fieldLabelsdeductypes;
$fieldToolTips["deductypes"] = &$fieldToolTipsdeductypes;
$placeHolders["deductypes"] = &$placeHoldersdeductypes;
$page_titles["deductypes"] = &$pageTitlesdeductypes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["deductypes"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["deductypes"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_deductypes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DtID,  	DeductionType";
$proto0["m_strFrom"] = "FROM deductypes";
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
	"m_strName" => "DtID",
	"m_strTable" => "deductypes",
	"m_srcTableName" => "deductypes"
));

$proto6["m_sql"] = "DtID";
$proto6["m_srcTableName"] = "deductypes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DeductionType",
	"m_strTable" => "deductypes",
	"m_srcTableName" => "deductypes"
));

$proto8["m_sql"] = "DeductionType";
$proto8["m_srcTableName"] = "deductypes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "deductypes";
$proto11["m_srcTableName"] = "deductypes";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "DtID";
$proto11["m_columns"][] = "DeductionType";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "deductypes";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "deductypes";
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
$proto0["m_srcTableName"]="deductypes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_deductypes = createSqlQuery_deductypes();


	
		;

		

$tdatadeductypes[".sqlquery"] = $queryData_deductypes;

$tableEvents["deductypes"] = new eventsBase;
$tdatadeductypes[".hasEvents"] = false;

?>