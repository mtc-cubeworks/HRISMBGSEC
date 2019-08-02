<?php
require_once(getabspath("classes/cipherer.php"));




$tdataloantypes = array();
	$tdataloantypes[".truncateText"] = true;
	$tdataloantypes[".NumberOfChars"] = 80;
	$tdataloantypes[".ShortName"] = "loantypes";
	$tdataloantypes[".OwnerID"] = "";
	$tdataloantypes[".OriginalTable"] = "loantypes";

//	field labels
$fieldLabelsloantypes = array();
$fieldToolTipsloantypes = array();
$pageTitlesloantypes = array();
$placeHoldersloantypes = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsloantypes["English"] = array();
	$fieldToolTipsloantypes["English"] = array();
	$placeHoldersloantypes["English"] = array();
	$pageTitlesloantypes["English"] = array();
	$fieldLabelsloantypes["English"]["LtID"] = "Lt ID";
	$fieldToolTipsloantypes["English"]["LtID"] = "";
	$placeHoldersloantypes["English"]["LtID"] = "";
	$fieldLabelsloantypes["English"]["LoanType"] = "Loan or Deduction Type";
	$fieldToolTipsloantypes["English"]["LoanType"] = "";
	$placeHoldersloantypes["English"]["LoanType"] = "";
	if (count($fieldToolTipsloantypes["English"]))
		$tdataloantypes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsloantypes[""] = array();
	$fieldToolTipsloantypes[""] = array();
	$placeHoldersloantypes[""] = array();
	$pageTitlesloantypes[""] = array();
	if (count($fieldToolTipsloantypes[""]))
		$tdataloantypes[".isUseToolTips"] = true;
}


	$tdataloantypes[".NCSearch"] = true;



$tdataloantypes[".shortTableName"] = "loantypes";
$tdataloantypes[".nSecOptions"] = 0;
$tdataloantypes[".recsPerRowPrint"] = 1;
$tdataloantypes[".mainTableOwnerID"] = "";
$tdataloantypes[".moveNext"] = 1;
$tdataloantypes[".entityType"] = 0;

$tdataloantypes[".strOriginalTableName"] = "loantypes";

	



$tdataloantypes[".showAddInPopup"] = false;

$tdataloantypes[".showEditInPopup"] = false;

$tdataloantypes[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataloantypes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataloantypes[".fieldsForRegister"] = array();

$tdataloantypes[".listAjax"] = false;

	$tdataloantypes[".audit"] = false;

	$tdataloantypes[".locking"] = false;

$tdataloantypes[".edit"] = true;
$tdataloantypes[".afterEditAction"] = 1;
$tdataloantypes[".closePopupAfterEdit"] = 1;
$tdataloantypes[".afterEditActionDetTable"] = "";

$tdataloantypes[".add"] = true;
$tdataloantypes[".afterAddAction"] = 1;
$tdataloantypes[".closePopupAfterAdd"] = 1;
$tdataloantypes[".afterAddActionDetTable"] = "";

$tdataloantypes[".list"] = true;

$tdataloantypes[".inlineEdit"] = true;

$tdataloantypes[".updateSelected"] = true;

$tdataloantypes[".reorderRecordsByHeader"] = true;


$tdataloantypes[".exportFormatting"] = 2;
$tdataloantypes[".exportDelimiter"] = ",";
		
$tdataloantypes[".inlineAdd"] = true;
$tdataloantypes[".copy"] = true;
$tdataloantypes[".view"] = true;

$tdataloantypes[".import"] = true;

$tdataloantypes[".exportTo"] = true;

$tdataloantypes[".printFriendly"] = true;

$tdataloantypes[".delete"] = true;

$tdataloantypes[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataloantypes[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataloantypes[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataloantypes[".searchSaving"] = false;
//

$tdataloantypes[".showSearchPanel"] = true;
		$tdataloantypes[".flexibleSearch"] = true;

$tdataloantypes[".isUseAjaxSuggest"] = true;

$tdataloantypes[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																														

$tdataloantypes[".ajaxCodeSnippetAdded"] = false;

$tdataloantypes[".buttonsAdded"] = false;

$tdataloantypes[".addPageEvents"] = false;

// use timepicker for search panel
$tdataloantypes[".isUseTimeForSearch"] = false;





$tdataloantypes[".allSearchFields"] = array();
$tdataloantypes[".filterFields"] = array();
$tdataloantypes[".requiredSearchFields"] = array();

$tdataloantypes[".allSearchFields"][] = "LtID";
	$tdataloantypes[".allSearchFields"][] = "LoanType";
	

$tdataloantypes[".googleLikeFields"] = array();
$tdataloantypes[".googleLikeFields"][] = "LtID";
$tdataloantypes[".googleLikeFields"][] = "LoanType";


$tdataloantypes[".advSearchFields"] = array();
$tdataloantypes[".advSearchFields"][] = "LtID";
$tdataloantypes[".advSearchFields"][] = "LoanType";

$tdataloantypes[".tableType"] = "list";

$tdataloantypes[".printerPageOrientation"] = 0;
$tdataloantypes[".nPrinterPageScale"] = 100;

$tdataloantypes[".nPrinterSplitRecords"] = 40;

$tdataloantypes[".nPrinterPDFSplitRecords"] = 40;



$tdataloantypes[".geocodingEnabled"] = false;





$tdataloantypes[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataloantypes[".pageSize"] = 20;

$tdataloantypes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataloantypes[".strOrderBy"] = $tstrOrderBy;

$tdataloantypes[".orderindexes"] = array();

$tdataloantypes[".sqlHead"] = "SELECT LtID,  	LoanType";
$tdataloantypes[".sqlFrom"] = "FROM loantypes";
$tdataloantypes[".sqlWhereExpr"] = "";
$tdataloantypes[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataloantypes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataloantypes[".arrGroupsPerPage"] = $arrGPP;

$tdataloantypes[".highlightSearchResults"] = true;

$tableKeysloantypes = array();
$tableKeysloantypes[] = "LtID";
$tdataloantypes[".Keys"] = $tableKeysloantypes;

$tdataloantypes[".listFields"] = array();
$tdataloantypes[".listFields"][] = "LtID";
$tdataloantypes[".listFields"][] = "LoanType";

$tdataloantypes[".hideMobileList"] = array();


$tdataloantypes[".viewFields"] = array();
$tdataloantypes[".viewFields"][] = "LtID";
$tdataloantypes[".viewFields"][] = "LoanType";

$tdataloantypes[".addFields"] = array();
$tdataloantypes[".addFields"][] = "LoanType";

$tdataloantypes[".masterListFields"] = array();
$tdataloantypes[".masterListFields"][] = "LtID";
$tdataloantypes[".masterListFields"][] = "LoanType";

$tdataloantypes[".inlineAddFields"] = array();
$tdataloantypes[".inlineAddFields"][] = "LoanType";

$tdataloantypes[".editFields"] = array();
$tdataloantypes[".editFields"][] = "LoanType";

$tdataloantypes[".inlineEditFields"] = array();
$tdataloantypes[".inlineEditFields"][] = "LoanType";

$tdataloantypes[".updateSelectedFields"] = array();
$tdataloantypes[".updateSelectedFields"][] = "LoanType";


$tdataloantypes[".exportFields"] = array();
$tdataloantypes[".exportFields"][] = "LtID";
$tdataloantypes[".exportFields"][] = "LoanType";

$tdataloantypes[".importFields"] = array();
$tdataloantypes[".importFields"][] = "LtID";
$tdataloantypes[".importFields"][] = "LoanType";

$tdataloantypes[".printFields"] = array();
$tdataloantypes[".printFields"][] = "LtID";
$tdataloantypes[".printFields"][] = "LoanType";


//	LtID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LtID";
	$fdata["GoodName"] = "LtID";
	$fdata["ownerTable"] = "loantypes";
	$fdata["Label"] = GetFieldLabel("loantypes","LtID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LtID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LtID";

	
	
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




	$tdataloantypes["LtID"] = $fdata;
//	LoanType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "LoanType";
	$fdata["GoodName"] = "LoanType";
	$fdata["ownerTable"] = "loantypes";
	$fdata["Label"] = GetFieldLabel("loantypes","LoanType");
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

		$fdata["strField"] = "LoanType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LoanType";

	
	
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




	$tdataloantypes["LoanType"] = $fdata;


$tables_data["loantypes"]=&$tdataloantypes;
$field_labels["loantypes"] = &$fieldLabelsloantypes;
$fieldToolTips["loantypes"] = &$fieldToolTipsloantypes;
$placeHolders["loantypes"] = &$placeHoldersloantypes;
$page_titles["loantypes"] = &$pageTitlesloantypes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["loantypes"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["loantypes"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_loantypes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LtID,  	LoanType";
$proto0["m_strFrom"] = "FROM loantypes";
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
	"m_strName" => "LtID",
	"m_strTable" => "loantypes",
	"m_srcTableName" => "loantypes"
));

$proto6["m_sql"] = "LtID";
$proto6["m_srcTableName"] = "loantypes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanType",
	"m_strTable" => "loantypes",
	"m_srcTableName" => "loantypes"
));

$proto8["m_sql"] = "LoanType";
$proto8["m_srcTableName"] = "loantypes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "loantypes";
$proto11["m_srcTableName"] = "loantypes";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "LtID";
$proto11["m_columns"][] = "LoanType";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "loantypes";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "loantypes";
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
$proto0["m_srcTableName"]="loantypes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_loantypes = createSqlQuery_loantypes();


	
		;

		

$tdataloantypes[".sqlquery"] = $queryData_loantypes;

$tableEvents["loantypes"] = new eventsBase;
$tdataloantypes[".hasEvents"] = false;

?>