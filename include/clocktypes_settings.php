<?php
require_once(getabspath("classes/cipherer.php"));




$tdataclocktypes = array();
	$tdataclocktypes[".truncateText"] = true;
	$tdataclocktypes[".NumberOfChars"] = 80;
	$tdataclocktypes[".ShortName"] = "clocktypes";
	$tdataclocktypes[".OwnerID"] = "";
	$tdataclocktypes[".OriginalTable"] = "clocktypes";

//	field labels
$fieldLabelsclocktypes = array();
$fieldToolTipsclocktypes = array();
$pageTitlesclocktypes = array();
$placeHoldersclocktypes = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsclocktypes["English"] = array();
	$fieldToolTipsclocktypes["English"] = array();
	$placeHoldersclocktypes["English"] = array();
	$pageTitlesclocktypes["English"] = array();
	$fieldLabelsclocktypes["English"]["CtID"] = "Ct ID";
	$fieldToolTipsclocktypes["English"]["CtID"] = "";
	$placeHoldersclocktypes["English"]["CtID"] = "";
	$fieldLabelsclocktypes["English"]["ClockType"] = "Clock Type";
	$fieldToolTipsclocktypes["English"]["ClockType"] = "";
	$placeHoldersclocktypes["English"]["ClockType"] = "";
	if (count($fieldToolTipsclocktypes["English"]))
		$tdataclocktypes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsclocktypes[""] = array();
	$fieldToolTipsclocktypes[""] = array();
	$placeHoldersclocktypes[""] = array();
	$pageTitlesclocktypes[""] = array();
	$fieldLabelsclocktypes[""]["CtID"] = "Ct ID";
	$fieldToolTipsclocktypes[""]["CtID"] = "";
	$placeHoldersclocktypes[""]["CtID"] = "";
	$fieldLabelsclocktypes[""]["ClockType"] = "Clock Type";
	$fieldToolTipsclocktypes[""]["ClockType"] = "";
	$placeHoldersclocktypes[""]["ClockType"] = "";
	if (count($fieldToolTipsclocktypes[""]))
		$tdataclocktypes[".isUseToolTips"] = true;
}


	$tdataclocktypes[".NCSearch"] = true;



$tdataclocktypes[".shortTableName"] = "clocktypes";
$tdataclocktypes[".nSecOptions"] = 0;
$tdataclocktypes[".recsPerRowPrint"] = 1;
$tdataclocktypes[".mainTableOwnerID"] = "";
$tdataclocktypes[".moveNext"] = 1;
$tdataclocktypes[".entityType"] = 0;

$tdataclocktypes[".strOriginalTableName"] = "clocktypes";

	



$tdataclocktypes[".showAddInPopup"] = false;

$tdataclocktypes[".showEditInPopup"] = false;

$tdataclocktypes[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataclocktypes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataclocktypes[".fieldsForRegister"] = array();

$tdataclocktypes[".listAjax"] = false;

	$tdataclocktypes[".audit"] = false;

	$tdataclocktypes[".locking"] = false;

$tdataclocktypes[".edit"] = true;
$tdataclocktypes[".afterEditAction"] = 1;
$tdataclocktypes[".closePopupAfterEdit"] = 1;
$tdataclocktypes[".afterEditActionDetTable"] = "";

$tdataclocktypes[".add"] = true;
$tdataclocktypes[".afterAddAction"] = 1;
$tdataclocktypes[".closePopupAfterAdd"] = 1;
$tdataclocktypes[".afterAddActionDetTable"] = "";

$tdataclocktypes[".list"] = true;



$tdataclocktypes[".reorderRecordsByHeader"] = true;


$tdataclocktypes[".exportFormatting"] = 2;
$tdataclocktypes[".exportDelimiter"] = ",";
		
$tdataclocktypes[".view"] = true;

$tdataclocktypes[".import"] = true;

$tdataclocktypes[".exportTo"] = true;

$tdataclocktypes[".printFriendly"] = true;

$tdataclocktypes[".delete"] = true;

$tdataclocktypes[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataclocktypes[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataclocktypes[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataclocktypes[".searchSaving"] = false;
//

$tdataclocktypes[".showSearchPanel"] = true;
		$tdataclocktypes[".flexibleSearch"] = true;

$tdataclocktypes[".isUseAjaxSuggest"] = true;

$tdataclocktypes[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																											

$tdataclocktypes[".ajaxCodeSnippetAdded"] = false;

$tdataclocktypes[".buttonsAdded"] = false;

$tdataclocktypes[".addPageEvents"] = false;

// use timepicker for search panel
$tdataclocktypes[".isUseTimeForSearch"] = false;





$tdataclocktypes[".allSearchFields"] = array();
$tdataclocktypes[".filterFields"] = array();
$tdataclocktypes[".requiredSearchFields"] = array();

$tdataclocktypes[".allSearchFields"][] = "CtID";
	$tdataclocktypes[".allSearchFields"][] = "ClockType";
	

$tdataclocktypes[".googleLikeFields"] = array();
$tdataclocktypes[".googleLikeFields"][] = "CtID";
$tdataclocktypes[".googleLikeFields"][] = "ClockType";


$tdataclocktypes[".advSearchFields"] = array();
$tdataclocktypes[".advSearchFields"][] = "CtID";
$tdataclocktypes[".advSearchFields"][] = "ClockType";

$tdataclocktypes[".tableType"] = "list";

$tdataclocktypes[".printerPageOrientation"] = 0;
$tdataclocktypes[".nPrinterPageScale"] = 100;

$tdataclocktypes[".nPrinterSplitRecords"] = 40;

$tdataclocktypes[".nPrinterPDFSplitRecords"] = 40;



$tdataclocktypes[".geocodingEnabled"] = false;





$tdataclocktypes[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataclocktypes[".pageSize"] = 20;

$tdataclocktypes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataclocktypes[".strOrderBy"] = $tstrOrderBy;

$tdataclocktypes[".orderindexes"] = array();

$tdataclocktypes[".sqlHead"] = "SELECT CtID,  	ClockType";
$tdataclocktypes[".sqlFrom"] = "FROM clocktypes";
$tdataclocktypes[".sqlWhereExpr"] = "";
$tdataclocktypes[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataclocktypes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataclocktypes[".arrGroupsPerPage"] = $arrGPP;

$tdataclocktypes[".highlightSearchResults"] = true;

$tableKeysclocktypes = array();
$tableKeysclocktypes[] = "CtID";
$tdataclocktypes[".Keys"] = $tableKeysclocktypes;

$tdataclocktypes[".listFields"] = array();
$tdataclocktypes[".listFields"][] = "CtID";
$tdataclocktypes[".listFields"][] = "ClockType";

$tdataclocktypes[".hideMobileList"] = array();


$tdataclocktypes[".viewFields"] = array();
$tdataclocktypes[".viewFields"][] = "CtID";
$tdataclocktypes[".viewFields"][] = "ClockType";

$tdataclocktypes[".addFields"] = array();
$tdataclocktypes[".addFields"][] = "ClockType";

$tdataclocktypes[".masterListFields"] = array();
$tdataclocktypes[".masterListFields"][] = "CtID";
$tdataclocktypes[".masterListFields"][] = "ClockType";

$tdataclocktypes[".inlineAddFields"] = array();
$tdataclocktypes[".inlineAddFields"][] = "ClockType";

$tdataclocktypes[".editFields"] = array();
$tdataclocktypes[".editFields"][] = "ClockType";

$tdataclocktypes[".inlineEditFields"] = array();
$tdataclocktypes[".inlineEditFields"][] = "ClockType";

$tdataclocktypes[".updateSelectedFields"] = array();
$tdataclocktypes[".updateSelectedFields"][] = "ClockType";


$tdataclocktypes[".exportFields"] = array();
$tdataclocktypes[".exportFields"][] = "CtID";
$tdataclocktypes[".exportFields"][] = "ClockType";

$tdataclocktypes[".importFields"] = array();
$tdataclocktypes[".importFields"][] = "CtID";
$tdataclocktypes[".importFields"][] = "ClockType";

$tdataclocktypes[".printFields"] = array();
$tdataclocktypes[".printFields"][] = "CtID";
$tdataclocktypes[".printFields"][] = "ClockType";


//	CtID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CtID";
	$fdata["GoodName"] = "CtID";
	$fdata["ownerTable"] = "clocktypes";
	$fdata["Label"] = GetFieldLabel("clocktypes","CtID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CtID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CtID";

	
	
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
			$edata["EditParams"].= " maxlength=1";

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




	$tdataclocktypes["CtID"] = $fdata;
//	ClockType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ClockType";
	$fdata["GoodName"] = "ClockType";
	$fdata["ownerTable"] = "clocktypes";
	$fdata["Label"] = GetFieldLabel("clocktypes","ClockType");
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

		$fdata["strField"] = "ClockType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ClockType";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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




	$tdataclocktypes["ClockType"] = $fdata;


$tables_data["clocktypes"]=&$tdataclocktypes;
$field_labels["clocktypes"] = &$fieldLabelsclocktypes;
$fieldToolTips["clocktypes"] = &$fieldToolTipsclocktypes;
$placeHolders["clocktypes"] = &$placeHoldersclocktypes;
$page_titles["clocktypes"] = &$pageTitlesclocktypes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["clocktypes"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["clocktypes"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_clocktypes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CtID,  	ClockType";
$proto0["m_strFrom"] = "FROM clocktypes";
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
	"m_strName" => "CtID",
	"m_strTable" => "clocktypes",
	"m_srcTableName" => "clocktypes"
));

$proto6["m_sql"] = "CtID";
$proto6["m_srcTableName"] = "clocktypes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ClockType",
	"m_strTable" => "clocktypes",
	"m_srcTableName" => "clocktypes"
));

$proto8["m_sql"] = "ClockType";
$proto8["m_srcTableName"] = "clocktypes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "clocktypes";
$proto11["m_srcTableName"] = "clocktypes";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "CtID";
$proto11["m_columns"][] = "ClockType";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "clocktypes";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "clocktypes";
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
$proto0["m_srcTableName"]="clocktypes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_clocktypes = createSqlQuery_clocktypes();


	
		;

		

$tdataclocktypes[".sqlquery"] = $queryData_clocktypes;

$tableEvents["clocktypes"] = new eventsBase;
$tdataclocktypes[".hasEvents"] = false;

?>