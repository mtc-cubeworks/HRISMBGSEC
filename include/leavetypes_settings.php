<?php
require_once(getabspath("classes/cipherer.php"));




$tdataleavetypes = array();
	$tdataleavetypes[".truncateText"] = true;
	$tdataleavetypes[".NumberOfChars"] = 80;
	$tdataleavetypes[".ShortName"] = "leavetypes";
	$tdataleavetypes[".OwnerID"] = "";
	$tdataleavetypes[".OriginalTable"] = "leavetypes";

//	field labels
$fieldLabelsleavetypes = array();
$fieldToolTipsleavetypes = array();
$pageTitlesleavetypes = array();
$placeHoldersleavetypes = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsleavetypes["English"] = array();
	$fieldToolTipsleavetypes["English"] = array();
	$placeHoldersleavetypes["English"] = array();
	$pageTitlesleavetypes["English"] = array();
	$fieldLabelsleavetypes["English"]["LTID"] = "LTID";
	$fieldToolTipsleavetypes["English"]["LTID"] = "";
	$placeHoldersleavetypes["English"]["LTID"] = "";
	$fieldLabelsleavetypes["English"]["LeaveType"] = "Leave Type";
	$fieldToolTipsleavetypes["English"]["LeaveType"] = "";
	$placeHoldersleavetypes["English"]["LeaveType"] = "";
	if (count($fieldToolTipsleavetypes["English"]))
		$tdataleavetypes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsleavetypes[""] = array();
	$fieldToolTipsleavetypes[""] = array();
	$placeHoldersleavetypes[""] = array();
	$pageTitlesleavetypes[""] = array();
	if (count($fieldToolTipsleavetypes[""]))
		$tdataleavetypes[".isUseToolTips"] = true;
}


	$tdataleavetypes[".NCSearch"] = true;



$tdataleavetypes[".shortTableName"] = "leavetypes";
$tdataleavetypes[".nSecOptions"] = 0;
$tdataleavetypes[".recsPerRowPrint"] = 1;
$tdataleavetypes[".mainTableOwnerID"] = "";
$tdataleavetypes[".moveNext"] = 1;
$tdataleavetypes[".entityType"] = 0;

$tdataleavetypes[".strOriginalTableName"] = "leavetypes";

	



$tdataleavetypes[".showAddInPopup"] = false;

$tdataleavetypes[".showEditInPopup"] = false;

$tdataleavetypes[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataleavetypes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataleavetypes[".fieldsForRegister"] = array();

$tdataleavetypes[".listAjax"] = false;

	$tdataleavetypes[".audit"] = false;

	$tdataleavetypes[".locking"] = false;

$tdataleavetypes[".edit"] = true;
$tdataleavetypes[".afterEditAction"] = 1;
$tdataleavetypes[".closePopupAfterEdit"] = 1;
$tdataleavetypes[".afterEditActionDetTable"] = "";

$tdataleavetypes[".add"] = true;
$tdataleavetypes[".afterAddAction"] = 1;
$tdataleavetypes[".closePopupAfterAdd"] = 1;
$tdataleavetypes[".afterAddActionDetTable"] = "";

$tdataleavetypes[".list"] = true;

$tdataleavetypes[".inlineEdit"] = true;

$tdataleavetypes[".updateSelected"] = true;

$tdataleavetypes[".reorderRecordsByHeader"] = true;


$tdataleavetypes[".exportFormatting"] = 2;
$tdataleavetypes[".exportDelimiter"] = ",";
		
$tdataleavetypes[".inlineAdd"] = true;
$tdataleavetypes[".view"] = true;

$tdataleavetypes[".import"] = true;

$tdataleavetypes[".exportTo"] = true;

$tdataleavetypes[".printFriendly"] = true;

$tdataleavetypes[".delete"] = true;

$tdataleavetypes[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataleavetypes[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataleavetypes[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataleavetypes[".searchSaving"] = false;
//

$tdataleavetypes[".showSearchPanel"] = true;
		$tdataleavetypes[".flexibleSearch"] = true;

$tdataleavetypes[".isUseAjaxSuggest"] = true;

$tdataleavetypes[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																														

$tdataleavetypes[".ajaxCodeSnippetAdded"] = false;

$tdataleavetypes[".buttonsAdded"] = false;

$tdataleavetypes[".addPageEvents"] = false;

// use timepicker for search panel
$tdataleavetypes[".isUseTimeForSearch"] = false;





$tdataleavetypes[".allSearchFields"] = array();
$tdataleavetypes[".filterFields"] = array();
$tdataleavetypes[".requiredSearchFields"] = array();

$tdataleavetypes[".allSearchFields"][] = "LTID";
	$tdataleavetypes[".allSearchFields"][] = "LeaveType";
	

$tdataleavetypes[".googleLikeFields"] = array();
$tdataleavetypes[".googleLikeFields"][] = "LTID";
$tdataleavetypes[".googleLikeFields"][] = "LeaveType";


$tdataleavetypes[".advSearchFields"] = array();
$tdataleavetypes[".advSearchFields"][] = "LTID";
$tdataleavetypes[".advSearchFields"][] = "LeaveType";

$tdataleavetypes[".tableType"] = "list";

$tdataleavetypes[".printerPageOrientation"] = 0;
$tdataleavetypes[".nPrinterPageScale"] = 100;

$tdataleavetypes[".nPrinterSplitRecords"] = 40;

$tdataleavetypes[".nPrinterPDFSplitRecords"] = 40;



$tdataleavetypes[".geocodingEnabled"] = false;





$tdataleavetypes[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataleavetypes[".pageSize"] = 20;

$tdataleavetypes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataleavetypes[".strOrderBy"] = $tstrOrderBy;

$tdataleavetypes[".orderindexes"] = array();

$tdataleavetypes[".sqlHead"] = "SELECT LTID,  	LeaveType";
$tdataleavetypes[".sqlFrom"] = "FROM leavetypes";
$tdataleavetypes[".sqlWhereExpr"] = "";
$tdataleavetypes[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataleavetypes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataleavetypes[".arrGroupsPerPage"] = $arrGPP;

$tdataleavetypes[".highlightSearchResults"] = true;

$tableKeysleavetypes = array();
$tableKeysleavetypes[] = "LTID";
$tdataleavetypes[".Keys"] = $tableKeysleavetypes;

$tdataleavetypes[".listFields"] = array();
$tdataleavetypes[".listFields"][] = "LTID";
$tdataleavetypes[".listFields"][] = "LeaveType";

$tdataleavetypes[".hideMobileList"] = array();


$tdataleavetypes[".viewFields"] = array();
$tdataleavetypes[".viewFields"][] = "LTID";
$tdataleavetypes[".viewFields"][] = "LeaveType";

$tdataleavetypes[".addFields"] = array();
$tdataleavetypes[".addFields"][] = "LeaveType";

$tdataleavetypes[".masterListFields"] = array();
$tdataleavetypes[".masterListFields"][] = "LTID";
$tdataleavetypes[".masterListFields"][] = "LeaveType";

$tdataleavetypes[".inlineAddFields"] = array();
$tdataleavetypes[".inlineAddFields"][] = "LeaveType";

$tdataleavetypes[".editFields"] = array();
$tdataleavetypes[".editFields"][] = "LeaveType";

$tdataleavetypes[".inlineEditFields"] = array();
$tdataleavetypes[".inlineEditFields"][] = "LeaveType";

$tdataleavetypes[".updateSelectedFields"] = array();
$tdataleavetypes[".updateSelectedFields"][] = "LeaveType";


$tdataleavetypes[".exportFields"] = array();
$tdataleavetypes[".exportFields"][] = "LTID";
$tdataleavetypes[".exportFields"][] = "LeaveType";

$tdataleavetypes[".importFields"] = array();
$tdataleavetypes[".importFields"][] = "LTID";
$tdataleavetypes[".importFields"][] = "LeaveType";

$tdataleavetypes[".printFields"] = array();
$tdataleavetypes[".printFields"][] = "LTID";
$tdataleavetypes[".printFields"][] = "LeaveType";


//	LTID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LTID";
	$fdata["GoodName"] = "LTID";
	$fdata["ownerTable"] = "leavetypes";
	$fdata["Label"] = GetFieldLabel("leavetypes","LTID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LTID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LTID";

	
	
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




	$tdataleavetypes["LTID"] = $fdata;
//	LeaveType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "LeaveType";
	$fdata["GoodName"] = "LeaveType";
	$fdata["ownerTable"] = "leavetypes";
	$fdata["Label"] = GetFieldLabel("leavetypes","LeaveType");
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

		$fdata["strField"] = "LeaveType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LeaveType";

	
	
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




	$tdataleavetypes["LeaveType"] = $fdata;


$tables_data["leavetypes"]=&$tdataleavetypes;
$field_labels["leavetypes"] = &$fieldLabelsleavetypes;
$fieldToolTips["leavetypes"] = &$fieldToolTipsleavetypes;
$placeHolders["leavetypes"] = &$placeHoldersleavetypes;
$page_titles["leavetypes"] = &$pageTitlesleavetypes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["leavetypes"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["leavetypes"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_leavetypes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LTID,  	LeaveType";
$proto0["m_strFrom"] = "FROM leavetypes";
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
	"m_strName" => "LTID",
	"m_strTable" => "leavetypes",
	"m_srcTableName" => "leavetypes"
));

$proto6["m_sql"] = "LTID";
$proto6["m_srcTableName"] = "leavetypes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "LeaveType",
	"m_strTable" => "leavetypes",
	"m_srcTableName" => "leavetypes"
));

$proto8["m_sql"] = "LeaveType";
$proto8["m_srcTableName"] = "leavetypes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "leavetypes";
$proto11["m_srcTableName"] = "leavetypes";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "LTID";
$proto11["m_columns"][] = "LeaveType";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "leavetypes";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "leavetypes";
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
$proto0["m_srcTableName"]="leavetypes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_leavetypes = createSqlQuery_leavetypes();


	
		;

		

$tdataleavetypes[".sqlquery"] = $queryData_leavetypes;

$tableEvents["leavetypes"] = new eventsBase;
$tdataleavetypes[".hasEvents"] = false;

?>