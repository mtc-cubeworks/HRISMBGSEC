<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamagroups = array();
	$tdatamagroups[".truncateText"] = true;
	$tdatamagroups[".NumberOfChars"] = 80;
	$tdatamagroups[".ShortName"] = "magroups";
	$tdatamagroups[".OwnerID"] = "";
	$tdatamagroups[".OriginalTable"] = "magroups";

//	field labels
$fieldLabelsmagroups = array();
$fieldToolTipsmagroups = array();
$pageTitlesmagroups = array();
$placeHoldersmagroups = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmagroups["English"] = array();
	$fieldToolTipsmagroups["English"] = array();
	$placeHoldersmagroups["English"] = array();
	$pageTitlesmagroups["English"] = array();
	$fieldLabelsmagroups["English"]["MaID"] = "Ma ID";
	$fieldToolTipsmagroups["English"]["MaID"] = "";
	$placeHoldersmagroups["English"]["MaID"] = "";
	$fieldLabelsmagroups["English"]["MonthlyAdjGroup"] = "Monthly Adjustment Group";
	$fieldToolTipsmagroups["English"]["MonthlyAdjGroup"] = "";
	$placeHoldersmagroups["English"]["MonthlyAdjGroup"] = "";
	if (count($fieldToolTipsmagroups["English"]))
		$tdatamagroups[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmagroups[""] = array();
	$fieldToolTipsmagroups[""] = array();
	$placeHoldersmagroups[""] = array();
	$pageTitlesmagroups[""] = array();
	$fieldLabelsmagroups[""]["MaID"] = "Ma ID";
	$fieldToolTipsmagroups[""]["MaID"] = "";
	$placeHoldersmagroups[""]["MaID"] = "";
	$fieldLabelsmagroups[""]["MonthlyAdjGroup"] = "Monthly Adj Group";
	$fieldToolTipsmagroups[""]["MonthlyAdjGroup"] = "";
	$placeHoldersmagroups[""]["MonthlyAdjGroup"] = "";
	if (count($fieldToolTipsmagroups[""]))
		$tdatamagroups[".isUseToolTips"] = true;
}


	$tdatamagroups[".NCSearch"] = true;



$tdatamagroups[".shortTableName"] = "magroups";
$tdatamagroups[".nSecOptions"] = 0;
$tdatamagroups[".recsPerRowPrint"] = 1;
$tdatamagroups[".mainTableOwnerID"] = "";
$tdatamagroups[".moveNext"] = 1;
$tdatamagroups[".entityType"] = 0;

$tdatamagroups[".strOriginalTableName"] = "magroups";

	



$tdatamagroups[".showAddInPopup"] = false;

$tdatamagroups[".showEditInPopup"] = false;

$tdatamagroups[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamagroups[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamagroups[".fieldsForRegister"] = array();

$tdatamagroups[".listAjax"] = false;

	$tdatamagroups[".audit"] = false;

	$tdatamagroups[".locking"] = false;

$tdatamagroups[".edit"] = true;
$tdatamagroups[".afterEditAction"] = 1;
$tdatamagroups[".closePopupAfterEdit"] = 1;
$tdatamagroups[".afterEditActionDetTable"] = "";

$tdatamagroups[".add"] = true;
$tdatamagroups[".afterAddAction"] = 1;
$tdatamagroups[".closePopupAfterAdd"] = 1;
$tdatamagroups[".afterAddActionDetTable"] = "";

$tdatamagroups[".list"] = true;



$tdatamagroups[".reorderRecordsByHeader"] = true;


$tdatamagroups[".exportFormatting"] = 2;
$tdatamagroups[".exportDelimiter"] = ",";
		
$tdatamagroups[".view"] = true;

$tdatamagroups[".import"] = true;

$tdatamagroups[".exportTo"] = true;

$tdatamagroups[".printFriendly"] = true;

$tdatamagroups[".delete"] = true;

$tdatamagroups[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamagroups[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamagroups[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamagroups[".searchSaving"] = false;
//

$tdatamagroups[".showSearchPanel"] = true;
		$tdatamagroups[".flexibleSearch"] = true;

$tdatamagroups[".isUseAjaxSuggest"] = true;

$tdatamagroups[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																					

$tdatamagroups[".ajaxCodeSnippetAdded"] = false;

$tdatamagroups[".buttonsAdded"] = false;

$tdatamagroups[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamagroups[".isUseTimeForSearch"] = false;





$tdatamagroups[".allSearchFields"] = array();
$tdatamagroups[".filterFields"] = array();
$tdatamagroups[".requiredSearchFields"] = array();

$tdatamagroups[".allSearchFields"][] = "MaID";
	$tdatamagroups[".allSearchFields"][] = "MonthlyAdjGroup";
	

$tdatamagroups[".googleLikeFields"] = array();
$tdatamagroups[".googleLikeFields"][] = "MaID";
$tdatamagroups[".googleLikeFields"][] = "MonthlyAdjGroup";


$tdatamagroups[".advSearchFields"] = array();
$tdatamagroups[".advSearchFields"][] = "MaID";
$tdatamagroups[".advSearchFields"][] = "MonthlyAdjGroup";

$tdatamagroups[".tableType"] = "list";

$tdatamagroups[".printerPageOrientation"] = 0;
$tdatamagroups[".nPrinterPageScale"] = 100;

$tdatamagroups[".nPrinterSplitRecords"] = 40;

$tdatamagroups[".nPrinterPDFSplitRecords"] = 40;



$tdatamagroups[".geocodingEnabled"] = false;





$tdatamagroups[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamagroups[".pageSize"] = 20;

$tdatamagroups[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamagroups[".strOrderBy"] = $tstrOrderBy;

$tdatamagroups[".orderindexes"] = array();

$tdatamagroups[".sqlHead"] = "SELECT MaID,  	MonthlyAdjGroup";
$tdatamagroups[".sqlFrom"] = "FROM magroups";
$tdatamagroups[".sqlWhereExpr"] = "";
$tdatamagroups[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamagroups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamagroups[".arrGroupsPerPage"] = $arrGPP;

$tdatamagroups[".highlightSearchResults"] = true;

$tableKeysmagroups = array();
$tableKeysmagroups[] = "MaID";
$tdatamagroups[".Keys"] = $tableKeysmagroups;

$tdatamagroups[".listFields"] = array();
$tdatamagroups[".listFields"][] = "MaID";
$tdatamagroups[".listFields"][] = "MonthlyAdjGroup";

$tdatamagroups[".hideMobileList"] = array();


$tdatamagroups[".viewFields"] = array();
$tdatamagroups[".viewFields"][] = "MaID";
$tdatamagroups[".viewFields"][] = "MonthlyAdjGroup";

$tdatamagroups[".addFields"] = array();
$tdatamagroups[".addFields"][] = "MonthlyAdjGroup";

$tdatamagroups[".masterListFields"] = array();
$tdatamagroups[".masterListFields"][] = "MaID";
$tdatamagroups[".masterListFields"][] = "MonthlyAdjGroup";

$tdatamagroups[".inlineAddFields"] = array();
$tdatamagroups[".inlineAddFields"][] = "MonthlyAdjGroup";

$tdatamagroups[".editFields"] = array();
$tdatamagroups[".editFields"][] = "MonthlyAdjGroup";

$tdatamagroups[".inlineEditFields"] = array();
$tdatamagroups[".inlineEditFields"][] = "MonthlyAdjGroup";

$tdatamagroups[".updateSelectedFields"] = array();
$tdatamagroups[".updateSelectedFields"][] = "MonthlyAdjGroup";


$tdatamagroups[".exportFields"] = array();
$tdatamagroups[".exportFields"][] = "MaID";
$tdatamagroups[".exportFields"][] = "MonthlyAdjGroup";

$tdatamagroups[".importFields"] = array();
$tdatamagroups[".importFields"][] = "MaID";
$tdatamagroups[".importFields"][] = "MonthlyAdjGroup";

$tdatamagroups[".printFields"] = array();
$tdatamagroups[".printFields"][] = "MaID";
$tdatamagroups[".printFields"][] = "MonthlyAdjGroup";


//	MaID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MaID";
	$fdata["GoodName"] = "MaID";
	$fdata["ownerTable"] = "magroups";
	$fdata["Label"] = GetFieldLabel("magroups","MaID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MaID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MaID";

	
	
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




	$tdatamagroups["MaID"] = $fdata;
//	MonthlyAdjGroup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MonthlyAdjGroup";
	$fdata["GoodName"] = "MonthlyAdjGroup";
	$fdata["ownerTable"] = "magroups";
	$fdata["Label"] = GetFieldLabel("magroups","MonthlyAdjGroup");
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

		$fdata["strField"] = "MonthlyAdjGroup";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MonthlyAdjGroup";

	
	
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




	$tdatamagroups["MonthlyAdjGroup"] = $fdata;


$tables_data["magroups"]=&$tdatamagroups;
$field_labels["magroups"] = &$fieldLabelsmagroups;
$fieldToolTips["magroups"] = &$fieldToolTipsmagroups;
$placeHolders["magroups"] = &$placeHoldersmagroups;
$page_titles["magroups"] = &$pageTitlesmagroups;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["magroups"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["magroups"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_magroups()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MaID,  	MonthlyAdjGroup";
$proto0["m_strFrom"] = "FROM magroups";
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
	"m_strName" => "MaID",
	"m_strTable" => "magroups",
	"m_srcTableName" => "magroups"
));

$proto6["m_sql"] = "MaID";
$proto6["m_srcTableName"] = "magroups";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MonthlyAdjGroup",
	"m_strTable" => "magroups",
	"m_srcTableName" => "magroups"
));

$proto8["m_sql"] = "MonthlyAdjGroup";
$proto8["m_srcTableName"] = "magroups";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "magroups";
$proto11["m_srcTableName"] = "magroups";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "MaID";
$proto11["m_columns"][] = "MonthlyAdjGroup";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "magroups";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "magroups";
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
$proto0["m_srcTableName"]="magroups";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_magroups = createSqlQuery_magroups();


	
		;

		

$tdatamagroups[".sqlquery"] = $queryData_magroups;

$tableEvents["magroups"] = new eventsBase;
$tdatamagroups[".hasEvents"] = false;

?>