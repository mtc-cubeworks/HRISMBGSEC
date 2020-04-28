<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamdgroups = array();
	$tdatamdgroups[".truncateText"] = true;
	$tdatamdgroups[".NumberOfChars"] = 80;
	$tdatamdgroups[".ShortName"] = "mdgroups";
	$tdatamdgroups[".OwnerID"] = "";
	$tdatamdgroups[".OriginalTable"] = "mdgroups";

//	field labels
$fieldLabelsmdgroups = array();
$fieldToolTipsmdgroups = array();
$pageTitlesmdgroups = array();
$placeHoldersmdgroups = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmdgroups["English"] = array();
	$fieldToolTipsmdgroups["English"] = array();
	$placeHoldersmdgroups["English"] = array();
	$pageTitlesmdgroups["English"] = array();
	$fieldLabelsmdgroups["English"]["MdID"] = "Md ID";
	$fieldToolTipsmdgroups["English"]["MdID"] = "";
	$placeHoldersmdgroups["English"]["MdID"] = "";
	$fieldLabelsmdgroups["English"]["MonthlyDedGroup"] = "Monthly Deduction Group";
	$fieldToolTipsmdgroups["English"]["MonthlyDedGroup"] = "";
	$placeHoldersmdgroups["English"]["MonthlyDedGroup"] = "";
	if (count($fieldToolTipsmdgroups["English"]))
		$tdatamdgroups[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmdgroups[""] = array();
	$fieldToolTipsmdgroups[""] = array();
	$placeHoldersmdgroups[""] = array();
	$pageTitlesmdgroups[""] = array();
	$fieldLabelsmdgroups[""]["MdID"] = "Md ID";
	$fieldToolTipsmdgroups[""]["MdID"] = "";
	$placeHoldersmdgroups[""]["MdID"] = "";
	$fieldLabelsmdgroups[""]["MonthlyDedGroup"] = "Monthly Ded Group";
	$fieldToolTipsmdgroups[""]["MonthlyDedGroup"] = "";
	$placeHoldersmdgroups[""]["MonthlyDedGroup"] = "";
	if (count($fieldToolTipsmdgroups[""]))
		$tdatamdgroups[".isUseToolTips"] = true;
}


	$tdatamdgroups[".NCSearch"] = true;



$tdatamdgroups[".shortTableName"] = "mdgroups";
$tdatamdgroups[".nSecOptions"] = 0;
$tdatamdgroups[".recsPerRowPrint"] = 1;
$tdatamdgroups[".mainTableOwnerID"] = "";
$tdatamdgroups[".moveNext"] = 1;
$tdatamdgroups[".entityType"] = 0;

$tdatamdgroups[".strOriginalTableName"] = "mdgroups";

	



$tdatamdgroups[".showAddInPopup"] = false;

$tdatamdgroups[".showEditInPopup"] = false;

$tdatamdgroups[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamdgroups[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamdgroups[".fieldsForRegister"] = array();

$tdatamdgroups[".listAjax"] = false;

	$tdatamdgroups[".audit"] = false;

	$tdatamdgroups[".locking"] = false;

$tdatamdgroups[".edit"] = true;
$tdatamdgroups[".afterEditAction"] = 1;
$tdatamdgroups[".closePopupAfterEdit"] = 1;
$tdatamdgroups[".afterEditActionDetTable"] = "";

$tdatamdgroups[".add"] = true;
$tdatamdgroups[".afterAddAction"] = 1;
$tdatamdgroups[".closePopupAfterAdd"] = 1;
$tdatamdgroups[".afterAddActionDetTable"] = "";

$tdatamdgroups[".list"] = true;



$tdatamdgroups[".reorderRecordsByHeader"] = true;


$tdatamdgroups[".exportFormatting"] = 2;
$tdatamdgroups[".exportDelimiter"] = ",";
		
$tdatamdgroups[".view"] = true;

$tdatamdgroups[".import"] = true;

$tdatamdgroups[".exportTo"] = true;

$tdatamdgroups[".printFriendly"] = true;

$tdatamdgroups[".delete"] = true;

$tdatamdgroups[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamdgroups[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamdgroups[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamdgroups[".searchSaving"] = false;
//

$tdatamdgroups[".showSearchPanel"] = true;
		$tdatamdgroups[".flexibleSearch"] = true;

$tdatamdgroups[".isUseAjaxSuggest"] = true;

$tdatamdgroups[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdatamdgroups[".ajaxCodeSnippetAdded"] = false;

$tdatamdgroups[".buttonsAdded"] = false;

$tdatamdgroups[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamdgroups[".isUseTimeForSearch"] = false;





$tdatamdgroups[".allSearchFields"] = array();
$tdatamdgroups[".filterFields"] = array();
$tdatamdgroups[".requiredSearchFields"] = array();

$tdatamdgroups[".allSearchFields"][] = "MdID";
	$tdatamdgroups[".allSearchFields"][] = "MonthlyDedGroup";
	

$tdatamdgroups[".googleLikeFields"] = array();
$tdatamdgroups[".googleLikeFields"][] = "MdID";
$tdatamdgroups[".googleLikeFields"][] = "MonthlyDedGroup";


$tdatamdgroups[".advSearchFields"] = array();
$tdatamdgroups[".advSearchFields"][] = "MdID";
$tdatamdgroups[".advSearchFields"][] = "MonthlyDedGroup";

$tdatamdgroups[".tableType"] = "list";

$tdatamdgroups[".printerPageOrientation"] = 0;
$tdatamdgroups[".nPrinterPageScale"] = 100;

$tdatamdgroups[".nPrinterSplitRecords"] = 40;

$tdatamdgroups[".nPrinterPDFSplitRecords"] = 40;



$tdatamdgroups[".geocodingEnabled"] = false;





$tdatamdgroups[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamdgroups[".pageSize"] = 20;

$tdatamdgroups[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamdgroups[".strOrderBy"] = $tstrOrderBy;

$tdatamdgroups[".orderindexes"] = array();

$tdatamdgroups[".sqlHead"] = "SELECT MdID,  	MonthlyDedGroup";
$tdatamdgroups[".sqlFrom"] = "FROM mdgroups";
$tdatamdgroups[".sqlWhereExpr"] = "";
$tdatamdgroups[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamdgroups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamdgroups[".arrGroupsPerPage"] = $arrGPP;

$tdatamdgroups[".highlightSearchResults"] = true;

$tableKeysmdgroups = array();
$tableKeysmdgroups[] = "MdID";
$tdatamdgroups[".Keys"] = $tableKeysmdgroups;

$tdatamdgroups[".listFields"] = array();
$tdatamdgroups[".listFields"][] = "MdID";
$tdatamdgroups[".listFields"][] = "MonthlyDedGroup";

$tdatamdgroups[".hideMobileList"] = array();


$tdatamdgroups[".viewFields"] = array();
$tdatamdgroups[".viewFields"][] = "MdID";
$tdatamdgroups[".viewFields"][] = "MonthlyDedGroup";

$tdatamdgroups[".addFields"] = array();
$tdatamdgroups[".addFields"][] = "MonthlyDedGroup";

$tdatamdgroups[".masterListFields"] = array();
$tdatamdgroups[".masterListFields"][] = "MdID";
$tdatamdgroups[".masterListFields"][] = "MonthlyDedGroup";

$tdatamdgroups[".inlineAddFields"] = array();
$tdatamdgroups[".inlineAddFields"][] = "MonthlyDedGroup";

$tdatamdgroups[".editFields"] = array();
$tdatamdgroups[".editFields"][] = "MonthlyDedGroup";

$tdatamdgroups[".inlineEditFields"] = array();
$tdatamdgroups[".inlineEditFields"][] = "MonthlyDedGroup";

$tdatamdgroups[".updateSelectedFields"] = array();
$tdatamdgroups[".updateSelectedFields"][] = "MonthlyDedGroup";


$tdatamdgroups[".exportFields"] = array();
$tdatamdgroups[".exportFields"][] = "MdID";
$tdatamdgroups[".exportFields"][] = "MonthlyDedGroup";

$tdatamdgroups[".importFields"] = array();
$tdatamdgroups[".importFields"][] = "MdID";
$tdatamdgroups[".importFields"][] = "MonthlyDedGroup";

$tdatamdgroups[".printFields"] = array();
$tdatamdgroups[".printFields"][] = "MdID";
$tdatamdgroups[".printFields"][] = "MonthlyDedGroup";


//	MdID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MdID";
	$fdata["GoodName"] = "MdID";
	$fdata["ownerTable"] = "mdgroups";
	$fdata["Label"] = GetFieldLabel("mdgroups","MdID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MdID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MdID";

	
	
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




	$tdatamdgroups["MdID"] = $fdata;
//	MonthlyDedGroup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MonthlyDedGroup";
	$fdata["GoodName"] = "MonthlyDedGroup";
	$fdata["ownerTable"] = "mdgroups";
	$fdata["Label"] = GetFieldLabel("mdgroups","MonthlyDedGroup");
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

		$fdata["strField"] = "MonthlyDedGroup";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MonthlyDedGroup";

	
	
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




	$tdatamdgroups["MonthlyDedGroup"] = $fdata;


$tables_data["mdgroups"]=&$tdatamdgroups;
$field_labels["mdgroups"] = &$fieldLabelsmdgroups;
$fieldToolTips["mdgroups"] = &$fieldToolTipsmdgroups;
$placeHolders["mdgroups"] = &$placeHoldersmdgroups;
$page_titles["mdgroups"] = &$pageTitlesmdgroups;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mdgroups"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mdgroups"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mdgroups()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MdID,  	MonthlyDedGroup";
$proto0["m_strFrom"] = "FROM mdgroups";
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
	"m_strName" => "MdID",
	"m_strTable" => "mdgroups",
	"m_srcTableName" => "mdgroups"
));

$proto6["m_sql"] = "MdID";
$proto6["m_srcTableName"] = "mdgroups";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MonthlyDedGroup",
	"m_strTable" => "mdgroups",
	"m_srcTableName" => "mdgroups"
));

$proto8["m_sql"] = "MonthlyDedGroup";
$proto8["m_srcTableName"] = "mdgroups";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "mdgroups";
$proto11["m_srcTableName"] = "mdgroups";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "MdID";
$proto11["m_columns"][] = "MonthlyDedGroup";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "mdgroups";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "mdgroups";
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
$proto0["m_srcTableName"]="mdgroups";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mdgroups = createSqlQuery_mdgroups();


	
		;

		

$tdatamdgroups[".sqlquery"] = $queryData_mdgroups;

$tableEvents["mdgroups"] = new eventsBase;
$tdatamdgroups[".hasEvents"] = false;

?>