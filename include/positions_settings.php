<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapositions = array();
	$tdatapositions[".truncateText"] = true;
	$tdatapositions[".NumberOfChars"] = 80;
	$tdatapositions[".ShortName"] = "positions";
	$tdatapositions[".OwnerID"] = "";
	$tdatapositions[".OriginalTable"] = "positions";

//	field labels
$fieldLabelspositions = array();
$fieldToolTipspositions = array();
$pageTitlespositions = array();
$placeHolderspositions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspositions["English"] = array();
	$fieldToolTipspositions["English"] = array();
	$placeHolderspositions["English"] = array();
	$pageTitlespositions["English"] = array();
	$fieldLabelspositions["English"]["posID"] = "Pos ID";
	$fieldToolTipspositions["English"]["posID"] = "";
	$placeHolderspositions["English"]["posID"] = "";
	$fieldLabelspositions["English"]["Position"] = "Position";
	$fieldToolTipspositions["English"]["Position"] = "";
	$placeHolderspositions["English"]["Position"] = "";
	if (count($fieldToolTipspositions["English"]))
		$tdatapositions[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspositions[""] = array();
	$fieldToolTipspositions[""] = array();
	$placeHolderspositions[""] = array();
	$pageTitlespositions[""] = array();
	if (count($fieldToolTipspositions[""]))
		$tdatapositions[".isUseToolTips"] = true;
}


	$tdatapositions[".NCSearch"] = true;



$tdatapositions[".shortTableName"] = "positions";
$tdatapositions[".nSecOptions"] = 0;
$tdatapositions[".recsPerRowPrint"] = 1;
$tdatapositions[".mainTableOwnerID"] = "";
$tdatapositions[".moveNext"] = 1;
$tdatapositions[".entityType"] = 0;

$tdatapositions[".strOriginalTableName"] = "positions";

	



$tdatapositions[".showAddInPopup"] = false;

$tdatapositions[".showEditInPopup"] = false;

$tdatapositions[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapositions[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapositions[".fieldsForRegister"] = array();

$tdatapositions[".listAjax"] = false;

	$tdatapositions[".audit"] = false;

	$tdatapositions[".locking"] = false;

$tdatapositions[".edit"] = true;
$tdatapositions[".afterEditAction"] = 1;
$tdatapositions[".closePopupAfterEdit"] = 1;
$tdatapositions[".afterEditActionDetTable"] = "";

$tdatapositions[".add"] = true;
$tdatapositions[".afterAddAction"] = 1;
$tdatapositions[".closePopupAfterAdd"] = 1;
$tdatapositions[".afterAddActionDetTable"] = "";

$tdatapositions[".list"] = true;

$tdatapositions[".inlineEdit"] = true;

$tdatapositions[".updateSelected"] = true;

$tdatapositions[".reorderRecordsByHeader"] = true;


$tdatapositions[".exportFormatting"] = 2;
$tdatapositions[".exportDelimiter"] = ",";
		
$tdatapositions[".inlineAdd"] = true;
$tdatapositions[".copy"] = true;
$tdatapositions[".view"] = true;

$tdatapositions[".import"] = true;

$tdatapositions[".exportTo"] = true;

$tdatapositions[".printFriendly"] = true;

$tdatapositions[".delete"] = true;

$tdatapositions[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapositions[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapositions[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapositions[".searchSaving"] = false;
//

$tdatapositions[".showSearchPanel"] = true;
		$tdatapositions[".flexibleSearch"] = true;

$tdatapositions[".isUseAjaxSuggest"] = true;

$tdatapositions[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																														

$tdatapositions[".ajaxCodeSnippetAdded"] = false;

$tdatapositions[".buttonsAdded"] = false;

$tdatapositions[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapositions[".isUseTimeForSearch"] = false;





$tdatapositions[".allSearchFields"] = array();
$tdatapositions[".filterFields"] = array();
$tdatapositions[".requiredSearchFields"] = array();

$tdatapositions[".allSearchFields"][] = "posID";
	$tdatapositions[".allSearchFields"][] = "Position";
	

$tdatapositions[".googleLikeFields"] = array();
$tdatapositions[".googleLikeFields"][] = "posID";
$tdatapositions[".googleLikeFields"][] = "Position";


$tdatapositions[".advSearchFields"] = array();
$tdatapositions[".advSearchFields"][] = "posID";
$tdatapositions[".advSearchFields"][] = "Position";

$tdatapositions[".tableType"] = "list";

$tdatapositions[".printerPageOrientation"] = 0;
$tdatapositions[".nPrinterPageScale"] = 100;

$tdatapositions[".nPrinterSplitRecords"] = 40;

$tdatapositions[".nPrinterPDFSplitRecords"] = 40;



$tdatapositions[".geocodingEnabled"] = false;





$tdatapositions[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatapositions[".pageSize"] = 20;

$tdatapositions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapositions[".strOrderBy"] = $tstrOrderBy;

$tdatapositions[".orderindexes"] = array();

$tdatapositions[".sqlHead"] = "SELECT posID,  	`Position`";
$tdatapositions[".sqlFrom"] = "FROM positions";
$tdatapositions[".sqlWhereExpr"] = "";
$tdatapositions[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapositions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapositions[".arrGroupsPerPage"] = $arrGPP;

$tdatapositions[".highlightSearchResults"] = true;

$tableKeyspositions = array();
$tableKeyspositions[] = "posID";
$tdatapositions[".Keys"] = $tableKeyspositions;

$tdatapositions[".listFields"] = array();
$tdatapositions[".listFields"][] = "posID";
$tdatapositions[".listFields"][] = "Position";

$tdatapositions[".hideMobileList"] = array();


$tdatapositions[".viewFields"] = array();
$tdatapositions[".viewFields"][] = "posID";
$tdatapositions[".viewFields"][] = "Position";

$tdatapositions[".addFields"] = array();
$tdatapositions[".addFields"][] = "Position";

$tdatapositions[".masterListFields"] = array();
$tdatapositions[".masterListFields"][] = "posID";
$tdatapositions[".masterListFields"][] = "Position";

$tdatapositions[".inlineAddFields"] = array();
$tdatapositions[".inlineAddFields"][] = "Position";

$tdatapositions[".editFields"] = array();
$tdatapositions[".editFields"][] = "Position";

$tdatapositions[".inlineEditFields"] = array();
$tdatapositions[".inlineEditFields"][] = "Position";

$tdatapositions[".updateSelectedFields"] = array();
$tdatapositions[".updateSelectedFields"][] = "Position";


$tdatapositions[".exportFields"] = array();
$tdatapositions[".exportFields"][] = "posID";
$tdatapositions[".exportFields"][] = "Position";

$tdatapositions[".importFields"] = array();
$tdatapositions[".importFields"][] = "posID";
$tdatapositions[".importFields"][] = "Position";

$tdatapositions[".printFields"] = array();
$tdatapositions[".printFields"][] = "posID";
$tdatapositions[".printFields"][] = "Position";


//	posID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "posID";
	$fdata["GoodName"] = "posID";
	$fdata["ownerTable"] = "positions";
	$fdata["Label"] = GetFieldLabel("positions","posID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "posID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "posID";

	
	
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




	$tdatapositions["posID"] = $fdata;
//	Position
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Position";
	$fdata["GoodName"] = "Position";
	$fdata["ownerTable"] = "positions";
	$fdata["Label"] = GetFieldLabel("positions","Position");
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

		$fdata["strField"] = "Position";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Position`";

	
	
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




	$tdatapositions["Position"] = $fdata;


$tables_data["positions"]=&$tdatapositions;
$field_labels["positions"] = &$fieldLabelspositions;
$fieldToolTips["positions"] = &$fieldToolTipspositions;
$placeHolders["positions"] = &$placeHolderspositions;
$page_titles["positions"] = &$pageTitlespositions;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["positions"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["positions"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_positions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "posID,  	`Position`";
$proto0["m_strFrom"] = "FROM positions";
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
	"m_strName" => "posID",
	"m_strTable" => "positions",
	"m_srcTableName" => "positions"
));

$proto6["m_sql"] = "posID";
$proto6["m_srcTableName"] = "positions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Position",
	"m_strTable" => "positions",
	"m_srcTableName" => "positions"
));

$proto8["m_sql"] = "`Position`";
$proto8["m_srcTableName"] = "positions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "positions";
$proto11["m_srcTableName"] = "positions";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "posID";
$proto11["m_columns"][] = "Position";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "positions";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "positions";
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
$proto0["m_srcTableName"]="positions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_positions = createSqlQuery_positions();


	
		;

		

$tdatapositions[".sqlquery"] = $queryData_positions;

$tableEvents["positions"] = new eventsBase;
$tdatapositions[".hasEvents"] = false;

?>