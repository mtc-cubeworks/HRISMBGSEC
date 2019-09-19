<?php
require_once(getabspath("classes/cipherer.php"));




$tdataadjtypes = array();
	$tdataadjtypes[".truncateText"] = true;
	$tdataadjtypes[".NumberOfChars"] = 80;
	$tdataadjtypes[".ShortName"] = "adjtypes";
	$tdataadjtypes[".OwnerID"] = "";
	$tdataadjtypes[".OriginalTable"] = "adjtypes";

//	field labels
$fieldLabelsadjtypes = array();
$fieldToolTipsadjtypes = array();
$pageTitlesadjtypes = array();
$placeHoldersadjtypes = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadjtypes["English"] = array();
	$fieldToolTipsadjtypes["English"] = array();
	$placeHoldersadjtypes["English"] = array();
	$pageTitlesadjtypes["English"] = array();
	$fieldLabelsadjtypes["English"]["adjtID"] = "Adjt ID";
	$fieldToolTipsadjtypes["English"]["adjtID"] = "";
	$placeHoldersadjtypes["English"]["adjtID"] = "";
	$fieldLabelsadjtypes["English"]["AdjType"] = "Adjustment Type";
	$fieldToolTipsadjtypes["English"]["AdjType"] = "";
	$placeHoldersadjtypes["English"]["AdjType"] = "";
	if (count($fieldToolTipsadjtypes["English"]))
		$tdataadjtypes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsadjtypes[""] = array();
	$fieldToolTipsadjtypes[""] = array();
	$placeHoldersadjtypes[""] = array();
	$pageTitlesadjtypes[""] = array();
	if (count($fieldToolTipsadjtypes[""]))
		$tdataadjtypes[".isUseToolTips"] = true;
}


	$tdataadjtypes[".NCSearch"] = true;



$tdataadjtypes[".shortTableName"] = "adjtypes";
$tdataadjtypes[".nSecOptions"] = 0;
$tdataadjtypes[".recsPerRowPrint"] = 1;
$tdataadjtypes[".mainTableOwnerID"] = "";
$tdataadjtypes[".moveNext"] = 1;
$tdataadjtypes[".entityType"] = 0;

$tdataadjtypes[".strOriginalTableName"] = "adjtypes";

	



$tdataadjtypes[".showAddInPopup"] = false;

$tdataadjtypes[".showEditInPopup"] = false;

$tdataadjtypes[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadjtypes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadjtypes[".fieldsForRegister"] = array();

$tdataadjtypes[".listAjax"] = false;

	$tdataadjtypes[".audit"] = false;

	$tdataadjtypes[".locking"] = false;

$tdataadjtypes[".edit"] = true;
$tdataadjtypes[".afterEditAction"] = 1;
$tdataadjtypes[".closePopupAfterEdit"] = 1;
$tdataadjtypes[".afterEditActionDetTable"] = "";

$tdataadjtypes[".add"] = true;
$tdataadjtypes[".afterAddAction"] = 1;
$tdataadjtypes[".closePopupAfterAdd"] = 1;
$tdataadjtypes[".afterAddActionDetTable"] = "";

$tdataadjtypes[".list"] = true;

$tdataadjtypes[".inlineEdit"] = true;


$tdataadjtypes[".reorderRecordsByHeader"] = true;


$tdataadjtypes[".exportFormatting"] = 2;
$tdataadjtypes[".exportDelimiter"] = ",";
		
$tdataadjtypes[".inlineAdd"] = true;
$tdataadjtypes[".view"] = true;

$tdataadjtypes[".import"] = true;

$tdataadjtypes[".exportTo"] = true;

$tdataadjtypes[".printFriendly"] = true;

$tdataadjtypes[".delete"] = true;

$tdataadjtypes[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataadjtypes[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataadjtypes[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataadjtypes[".searchSaving"] = false;
//

$tdataadjtypes[".showSearchPanel"] = true;
		$tdataadjtypes[".flexibleSearch"] = true;

$tdataadjtypes[".isUseAjaxSuggest"] = true;

$tdataadjtypes[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																					

$tdataadjtypes[".ajaxCodeSnippetAdded"] = false;

$tdataadjtypes[".buttonsAdded"] = false;

$tdataadjtypes[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadjtypes[".isUseTimeForSearch"] = false;





$tdataadjtypes[".allSearchFields"] = array();
$tdataadjtypes[".filterFields"] = array();
$tdataadjtypes[".requiredSearchFields"] = array();

$tdataadjtypes[".allSearchFields"][] = "adjtID";
	$tdataadjtypes[".allSearchFields"][] = "AdjType";
	

$tdataadjtypes[".googleLikeFields"] = array();
$tdataadjtypes[".googleLikeFields"][] = "adjtID";
$tdataadjtypes[".googleLikeFields"][] = "AdjType";


$tdataadjtypes[".advSearchFields"] = array();
$tdataadjtypes[".advSearchFields"][] = "adjtID";
$tdataadjtypes[".advSearchFields"][] = "AdjType";

$tdataadjtypes[".tableType"] = "list";

$tdataadjtypes[".printerPageOrientation"] = 0;
$tdataadjtypes[".nPrinterPageScale"] = 100;

$tdataadjtypes[".nPrinterSplitRecords"] = 40;

$tdataadjtypes[".nPrinterPDFSplitRecords"] = 40;



$tdataadjtypes[".geocodingEnabled"] = false;





$tdataadjtypes[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataadjtypes[".pageSize"] = 20;

$tdataadjtypes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadjtypes[".strOrderBy"] = $tstrOrderBy;

$tdataadjtypes[".orderindexes"] = array();

$tdataadjtypes[".sqlHead"] = "SELECT adjtID,  	AdjType";
$tdataadjtypes[".sqlFrom"] = "FROM adjtypes";
$tdataadjtypes[".sqlWhereExpr"] = "";
$tdataadjtypes[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadjtypes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadjtypes[".arrGroupsPerPage"] = $arrGPP;

$tdataadjtypes[".highlightSearchResults"] = true;

$tableKeysadjtypes = array();
$tableKeysadjtypes[] = "adjtID";
$tdataadjtypes[".Keys"] = $tableKeysadjtypes;

$tdataadjtypes[".listFields"] = array();
$tdataadjtypes[".listFields"][] = "adjtID";
$tdataadjtypes[".listFields"][] = "AdjType";

$tdataadjtypes[".hideMobileList"] = array();


$tdataadjtypes[".viewFields"] = array();
$tdataadjtypes[".viewFields"][] = "adjtID";
$tdataadjtypes[".viewFields"][] = "AdjType";

$tdataadjtypes[".addFields"] = array();
$tdataadjtypes[".addFields"][] = "AdjType";

$tdataadjtypes[".masterListFields"] = array();
$tdataadjtypes[".masterListFields"][] = "adjtID";
$tdataadjtypes[".masterListFields"][] = "AdjType";

$tdataadjtypes[".inlineAddFields"] = array();
$tdataadjtypes[".inlineAddFields"][] = "AdjType";

$tdataadjtypes[".editFields"] = array();
$tdataadjtypes[".editFields"][] = "AdjType";

$tdataadjtypes[".inlineEditFields"] = array();
$tdataadjtypes[".inlineEditFields"][] = "AdjType";

$tdataadjtypes[".updateSelectedFields"] = array();
$tdataadjtypes[".updateSelectedFields"][] = "AdjType";


$tdataadjtypes[".exportFields"] = array();
$tdataadjtypes[".exportFields"][] = "adjtID";
$tdataadjtypes[".exportFields"][] = "AdjType";

$tdataadjtypes[".importFields"] = array();
$tdataadjtypes[".importFields"][] = "adjtID";
$tdataadjtypes[".importFields"][] = "AdjType";

$tdataadjtypes[".printFields"] = array();
$tdataadjtypes[".printFields"][] = "adjtID";
$tdataadjtypes[".printFields"][] = "AdjType";


//	adjtID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "adjtID";
	$fdata["GoodName"] = "adjtID";
	$fdata["ownerTable"] = "adjtypes";
	$fdata["Label"] = GetFieldLabel("adjtypes","adjtID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "adjtID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "adjtID";

	
	
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




	$tdataadjtypes["adjtID"] = $fdata;
//	AdjType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AdjType";
	$fdata["GoodName"] = "AdjType";
	$fdata["ownerTable"] = "adjtypes";
	$fdata["Label"] = GetFieldLabel("adjtypes","AdjType");
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

		$fdata["strField"] = "AdjType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AdjType";

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadjtypes["AdjType"] = $fdata;


$tables_data["adjtypes"]=&$tdataadjtypes;
$field_labels["adjtypes"] = &$fieldLabelsadjtypes;
$fieldToolTips["adjtypes"] = &$fieldToolTipsadjtypes;
$placeHolders["adjtypes"] = &$placeHoldersadjtypes;
$page_titles["adjtypes"] = &$pageTitlesadjtypes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["adjtypes"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["adjtypes"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_adjtypes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "adjtID,  	AdjType";
$proto0["m_strFrom"] = "FROM adjtypes";
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
	"m_strName" => "adjtID",
	"m_strTable" => "adjtypes",
	"m_srcTableName" => "adjtypes"
));

$proto6["m_sql"] = "adjtID";
$proto6["m_srcTableName"] = "adjtypes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "AdjType",
	"m_strTable" => "adjtypes",
	"m_srcTableName" => "adjtypes"
));

$proto8["m_sql"] = "AdjType";
$proto8["m_srcTableName"] = "adjtypes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "adjtypes";
$proto11["m_srcTableName"] = "adjtypes";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "adjtID";
$proto11["m_columns"][] = "AdjType";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "adjtypes";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "adjtypes";
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
$proto0["m_srcTableName"]="adjtypes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_adjtypes = createSqlQuery_adjtypes();


	
		;

		

$tdataadjtypes[".sqlquery"] = $queryData_adjtypes;

$tableEvents["adjtypes"] = new eventsBase;
$tdataadjtypes[".hasEvents"] = false;

?>