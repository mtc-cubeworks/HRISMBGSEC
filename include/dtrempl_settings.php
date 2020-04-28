<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadtrempl = array();
	$tdatadtrempl[".truncateText"] = true;
	$tdatadtrempl[".NumberOfChars"] = 80;
	$tdatadtrempl[".ShortName"] = "dtrempl";
	$tdatadtrempl[".OwnerID"] = "";
	$tdatadtrempl[".OriginalTable"] = "dtrempl";

//	field labels
$fieldLabelsdtrempl = array();
$fieldToolTipsdtrempl = array();
$pageTitlesdtrempl = array();
$placeHoldersdtrempl = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdtrempl["English"] = array();
	$fieldToolTipsdtrempl["English"] = array();
	$placeHoldersdtrempl["English"] = array();
	$pageTitlesdtrempl["English"] = array();
	$fieldLabelsdtrempl["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipsdtrempl["English"]["EmployeeID"] = "";
	$placeHoldersdtrempl["English"]["EmployeeID"] = "";
	$fieldLabelsdtrempl["English"]["user_name"] = "User Name";
	$fieldToolTipsdtrempl["English"]["user_name"] = "";
	$placeHoldersdtrempl["English"]["user_name"] = "";
	if (count($fieldToolTipsdtrempl["English"]))
		$tdatadtrempl[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdtrempl[""] = array();
	$fieldToolTipsdtrempl[""] = array();
	$placeHoldersdtrempl[""] = array();
	$pageTitlesdtrempl[""] = array();
	$fieldLabelsdtrempl[""]["EmployeeID"] = "Employee ID";
	$fieldToolTipsdtrempl[""]["EmployeeID"] = "";
	$placeHoldersdtrempl[""]["EmployeeID"] = "";
	$fieldLabelsdtrempl[""]["user_name"] = "User Name";
	$fieldToolTipsdtrempl[""]["user_name"] = "";
	$placeHoldersdtrempl[""]["user_name"] = "";
	if (count($fieldToolTipsdtrempl[""]))
		$tdatadtrempl[".isUseToolTips"] = true;
}


	$tdatadtrempl[".NCSearch"] = true;



$tdatadtrempl[".shortTableName"] = "dtrempl";
$tdatadtrempl[".nSecOptions"] = 0;
$tdatadtrempl[".recsPerRowPrint"] = 1;
$tdatadtrempl[".mainTableOwnerID"] = "";
$tdatadtrempl[".moveNext"] = 1;
$tdatadtrempl[".entityType"] = 0;

$tdatadtrempl[".strOriginalTableName"] = "dtrempl";

	



$tdatadtrempl[".showAddInPopup"] = false;

$tdatadtrempl[".showEditInPopup"] = false;

$tdatadtrempl[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadtrempl[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadtrempl[".fieldsForRegister"] = array();

$tdatadtrempl[".listAjax"] = false;

	$tdatadtrempl[".audit"] = false;

	$tdatadtrempl[".locking"] = false;






$tdatadtrempl[".reorderRecordsByHeader"] = true;








$tdatadtrempl[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadtrempl[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatadtrempl[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatadtrempl[".searchSaving"] = false;
//

$tdatadtrempl[".showSearchPanel"] = true;
		$tdatadtrempl[".flexibleSearch"] = true;

$tdatadtrempl[".isUseAjaxSuggest"] = true;

$tdatadtrempl[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdatadtrempl[".ajaxCodeSnippetAdded"] = false;

$tdatadtrempl[".buttonsAdded"] = false;

$tdatadtrempl[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadtrempl[".isUseTimeForSearch"] = false;





$tdatadtrempl[".allSearchFields"] = array();
$tdatadtrempl[".filterFields"] = array();
$tdatadtrempl[".requiredSearchFields"] = array();



$tdatadtrempl[".googleLikeFields"] = array();
$tdatadtrempl[".googleLikeFields"][] = "EmployeeID";
$tdatadtrempl[".googleLikeFields"][] = "user_name";



$tdatadtrempl[".tableType"] = "list";

$tdatadtrempl[".printerPageOrientation"] = 0;
$tdatadtrempl[".nPrinterPageScale"] = 100;

$tdatadtrempl[".nPrinterSplitRecords"] = 40;

$tdatadtrempl[".nPrinterPDFSplitRecords"] = 40;



$tdatadtrempl[".geocodingEnabled"] = false;





$tdatadtrempl[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatadtrempl[".pageSize"] = 20;

$tdatadtrempl[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadtrempl[".strOrderBy"] = $tstrOrderBy;

$tdatadtrempl[".orderindexes"] = array();

$tdatadtrempl[".sqlHead"] = "SELECT EmployeeID,  	user_name";
$tdatadtrempl[".sqlFrom"] = "FROM dtrempl";
$tdatadtrempl[".sqlWhereExpr"] = "";
$tdatadtrempl[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadtrempl[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadtrempl[".arrGroupsPerPage"] = $arrGPP;

$tdatadtrempl[".highlightSearchResults"] = true;

$tableKeysdtrempl = array();
$tdatadtrempl[".Keys"] = $tableKeysdtrempl;

$tdatadtrempl[".listFields"] = array();
$tdatadtrempl[".listFields"][] = "EmployeeID";
$tdatadtrempl[".listFields"][] = "user_name";

$tdatadtrempl[".hideMobileList"] = array();


$tdatadtrempl[".viewFields"] = array();
$tdatadtrempl[".viewFields"][] = "EmployeeID";
$tdatadtrempl[".viewFields"][] = "user_name";

$tdatadtrempl[".addFields"] = array();
$tdatadtrempl[".addFields"][] = "EmployeeID";
$tdatadtrempl[".addFields"][] = "user_name";

$tdatadtrempl[".masterListFields"] = array();
$tdatadtrempl[".masterListFields"][] = "EmployeeID";
$tdatadtrempl[".masterListFields"][] = "user_name";

$tdatadtrempl[".inlineAddFields"] = array();
$tdatadtrempl[".inlineAddFields"][] = "EmployeeID";
$tdatadtrempl[".inlineAddFields"][] = "user_name";

$tdatadtrempl[".editFields"] = array();
$tdatadtrempl[".editFields"][] = "EmployeeID";
$tdatadtrempl[".editFields"][] = "user_name";

$tdatadtrempl[".inlineEditFields"] = array();
$tdatadtrempl[".inlineEditFields"][] = "EmployeeID";
$tdatadtrempl[".inlineEditFields"][] = "user_name";

$tdatadtrempl[".updateSelectedFields"] = array();
$tdatadtrempl[".updateSelectedFields"][] = "EmployeeID";
$tdatadtrempl[".updateSelectedFields"][] = "user_name";


$tdatadtrempl[".exportFields"] = array();
$tdatadtrempl[".exportFields"][] = "EmployeeID";
$tdatadtrempl[".exportFields"][] = "user_name";

$tdatadtrempl[".importFields"] = array();
$tdatadtrempl[".importFields"][] = "EmployeeID";
$tdatadtrempl[".importFields"][] = "user_name";

$tdatadtrempl[".printFields"] = array();
$tdatadtrempl[".printFields"][] = "EmployeeID";
$tdatadtrempl[".printFields"][] = "user_name";


//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "dtrempl";
	$fdata["Label"] = GetFieldLabel("dtrempl","EmployeeID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EmployeeID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmployeeID";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatadtrempl["EmployeeID"] = $fdata;
//	user_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_name";
	$fdata["GoodName"] = "user_name";
	$fdata["ownerTable"] = "dtrempl";
	$fdata["Label"] = GetFieldLabel("dtrempl","user_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_name";

	
	
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
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatadtrempl["user_name"] = $fdata;


$tables_data["dtrempl"]=&$tdatadtrempl;
$field_labels["dtrempl"] = &$fieldLabelsdtrempl;
$fieldToolTips["dtrempl"] = &$fieldToolTipsdtrempl;
$placeHolders["dtrempl"] = &$placeHoldersdtrempl;
$page_titles["dtrempl"] = &$pageTitlesdtrempl;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dtrempl"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dtrempl"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_dtrempl()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EmployeeID,  	user_name";
$proto0["m_strFrom"] = "FROM dtrempl";
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
	"m_strName" => "EmployeeID",
	"m_strTable" => "dtrempl",
	"m_srcTableName" => "dtrempl"
));

$proto6["m_sql"] = "EmployeeID";
$proto6["m_srcTableName"] = "dtrempl";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "dtrempl",
	"m_srcTableName" => "dtrempl"
));

$proto8["m_sql"] = "user_name";
$proto8["m_srcTableName"] = "dtrempl";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dtrempl";
$proto11["m_srcTableName"] = "dtrempl";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "EmployeeID";
$proto11["m_columns"][] = "user_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dtrempl";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dtrempl";
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
$proto0["m_srcTableName"]="dtrempl";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dtrempl = createSqlQuery_dtrempl();


	
		;

		

$tdatadtrempl[".sqlquery"] = $queryData_dtrempl;

$tableEvents["dtrempl"] = new eventsBase;
$tdatadtrempl[".hasEvents"] = false;

?>