<?php
require_once(getabspath("classes/cipherer.php"));




$tdataempstatus = array();
	$tdataempstatus[".truncateText"] = true;
	$tdataempstatus[".NumberOfChars"] = 80;
	$tdataempstatus[".ShortName"] = "empstatus";
	$tdataempstatus[".OwnerID"] = "";
	$tdataempstatus[".OriginalTable"] = "empstatus";

//	field labels
$fieldLabelsempstatus = array();
$fieldToolTipsempstatus = array();
$pageTitlesempstatus = array();
$placeHoldersempstatus = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsempstatus["English"] = array();
	$fieldToolTipsempstatus["English"] = array();
	$placeHoldersempstatus["English"] = array();
	$pageTitlesempstatus["English"] = array();
	$fieldLabelsempstatus["English"]["stID"] = "St ID";
	$fieldToolTipsempstatus["English"]["stID"] = "";
	$placeHoldersempstatus["English"]["stID"] = "";
	$fieldLabelsempstatus["English"]["EmployeeStatus"] = "Employee Status";
	$fieldToolTipsempstatus["English"]["EmployeeStatus"] = "";
	$placeHoldersempstatus["English"]["EmployeeStatus"] = "";
	if (count($fieldToolTipsempstatus["English"]))
		$tdataempstatus[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsempstatus[""] = array();
	$fieldToolTipsempstatus[""] = array();
	$placeHoldersempstatus[""] = array();
	$pageTitlesempstatus[""] = array();
	if (count($fieldToolTipsempstatus[""]))
		$tdataempstatus[".isUseToolTips"] = true;
}


	$tdataempstatus[".NCSearch"] = true;



$tdataempstatus[".shortTableName"] = "empstatus";
$tdataempstatus[".nSecOptions"] = 0;
$tdataempstatus[".recsPerRowPrint"] = 1;
$tdataempstatus[".mainTableOwnerID"] = "";
$tdataempstatus[".moveNext"] = 1;
$tdataempstatus[".entityType"] = 0;

$tdataempstatus[".strOriginalTableName"] = "empstatus";

	



$tdataempstatus[".showAddInPopup"] = false;

$tdataempstatus[".showEditInPopup"] = false;

$tdataempstatus[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataempstatus[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataempstatus[".fieldsForRegister"] = array();

$tdataempstatus[".listAjax"] = false;

	$tdataempstatus[".audit"] = false;

	$tdataempstatus[".locking"] = false;

$tdataempstatus[".edit"] = true;
$tdataempstatus[".afterEditAction"] = 1;
$tdataempstatus[".closePopupAfterEdit"] = 1;
$tdataempstatus[".afterEditActionDetTable"] = "";

$tdataempstatus[".add"] = true;
$tdataempstatus[".afterAddAction"] = 1;
$tdataempstatus[".closePopupAfterAdd"] = 1;
$tdataempstatus[".afterAddActionDetTable"] = "";

$tdataempstatus[".list"] = true;

$tdataempstatus[".inlineEdit"] = true;


$tdataempstatus[".reorderRecordsByHeader"] = true;


$tdataempstatus[".exportFormatting"] = 2;
$tdataempstatus[".exportDelimiter"] = ",";
		
$tdataempstatus[".inlineAdd"] = true;
$tdataempstatus[".view"] = true;

$tdataempstatus[".import"] = true;

$tdataempstatus[".exportTo"] = true;

$tdataempstatus[".printFriendly"] = true;

$tdataempstatus[".delete"] = true;

$tdataempstatus[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataempstatus[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataempstatus[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataempstatus[".searchSaving"] = false;
//

$tdataempstatus[".showSearchPanel"] = true;
		$tdataempstatus[".flexibleSearch"] = true;

$tdataempstatus[".isUseAjaxSuggest"] = true;

$tdataempstatus[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																					

$tdataempstatus[".ajaxCodeSnippetAdded"] = false;

$tdataempstatus[".buttonsAdded"] = false;

$tdataempstatus[".addPageEvents"] = false;

// use timepicker for search panel
$tdataempstatus[".isUseTimeForSearch"] = false;





$tdataempstatus[".allSearchFields"] = array();
$tdataempstatus[".filterFields"] = array();
$tdataempstatus[".requiredSearchFields"] = array();

$tdataempstatus[".allSearchFields"][] = "stID";
	$tdataempstatus[".allSearchFields"][] = "EmployeeStatus";
	

$tdataempstatus[".googleLikeFields"] = array();
$tdataempstatus[".googleLikeFields"][] = "stID";
$tdataempstatus[".googleLikeFields"][] = "EmployeeStatus";


$tdataempstatus[".advSearchFields"] = array();
$tdataempstatus[".advSearchFields"][] = "stID";
$tdataempstatus[".advSearchFields"][] = "EmployeeStatus";

$tdataempstatus[".tableType"] = "list";

$tdataempstatus[".printerPageOrientation"] = 0;
$tdataempstatus[".nPrinterPageScale"] = 100;

$tdataempstatus[".nPrinterSplitRecords"] = 40;

$tdataempstatus[".nPrinterPDFSplitRecords"] = 40;



$tdataempstatus[".geocodingEnabled"] = false;





$tdataempstatus[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataempstatus[".pageSize"] = 20;

$tdataempstatus[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataempstatus[".strOrderBy"] = $tstrOrderBy;

$tdataempstatus[".orderindexes"] = array();

$tdataempstatus[".sqlHead"] = "SELECT stID,  	EmployeeStatus";
$tdataempstatus[".sqlFrom"] = "FROM empstatus";
$tdataempstatus[".sqlWhereExpr"] = "";
$tdataempstatus[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataempstatus[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataempstatus[".arrGroupsPerPage"] = $arrGPP;

$tdataempstatus[".highlightSearchResults"] = true;

$tableKeysempstatus = array();
$tableKeysempstatus[] = "stID";
$tdataempstatus[".Keys"] = $tableKeysempstatus;

$tdataempstatus[".listFields"] = array();
$tdataempstatus[".listFields"][] = "stID";
$tdataempstatus[".listFields"][] = "EmployeeStatus";

$tdataempstatus[".hideMobileList"] = array();


$tdataempstatus[".viewFields"] = array();
$tdataempstatus[".viewFields"][] = "stID";
$tdataempstatus[".viewFields"][] = "EmployeeStatus";

$tdataempstatus[".addFields"] = array();
$tdataempstatus[".addFields"][] = "EmployeeStatus";

$tdataempstatus[".masterListFields"] = array();
$tdataempstatus[".masterListFields"][] = "stID";
$tdataempstatus[".masterListFields"][] = "EmployeeStatus";

$tdataempstatus[".inlineAddFields"] = array();
$tdataempstatus[".inlineAddFields"][] = "EmployeeStatus";

$tdataempstatus[".editFields"] = array();
$tdataempstatus[".editFields"][] = "EmployeeStatus";

$tdataempstatus[".inlineEditFields"] = array();
$tdataempstatus[".inlineEditFields"][] = "EmployeeStatus";

$tdataempstatus[".updateSelectedFields"] = array();
$tdataempstatus[".updateSelectedFields"][] = "EmployeeStatus";


$tdataempstatus[".exportFields"] = array();
$tdataempstatus[".exportFields"][] = "stID";
$tdataempstatus[".exportFields"][] = "EmployeeStatus";

$tdataempstatus[".importFields"] = array();
$tdataempstatus[".importFields"][] = "stID";
$tdataempstatus[".importFields"][] = "EmployeeStatus";

$tdataempstatus[".printFields"] = array();
$tdataempstatus[".printFields"][] = "stID";
$tdataempstatus[".printFields"][] = "EmployeeStatus";


//	stID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "stID";
	$fdata["GoodName"] = "stID";
	$fdata["ownerTable"] = "empstatus";
	$fdata["Label"] = GetFieldLabel("empstatus","stID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "stID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stID";

	
	
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




	$tdataempstatus["stID"] = $fdata;
//	EmployeeStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EmployeeStatus";
	$fdata["GoodName"] = "EmployeeStatus";
	$fdata["ownerTable"] = "empstatus";
	$fdata["Label"] = GetFieldLabel("empstatus","EmployeeStatus");
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

		$fdata["strField"] = "EmployeeStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmployeeStatus";

	
	
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




	$tdataempstatus["EmployeeStatus"] = $fdata;


$tables_data["empstatus"]=&$tdataempstatus;
$field_labels["empstatus"] = &$fieldLabelsempstatus;
$fieldToolTips["empstatus"] = &$fieldToolTipsempstatus;
$placeHolders["empstatus"] = &$placeHoldersempstatus;
$page_titles["empstatus"] = &$pageTitlesempstatus;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["empstatus"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["empstatus"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_empstatus()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "stID,  	EmployeeStatus";
$proto0["m_strFrom"] = "FROM empstatus";
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
	"m_strName" => "stID",
	"m_strTable" => "empstatus",
	"m_srcTableName" => "empstatus"
));

$proto6["m_sql"] = "stID";
$proto6["m_srcTableName"] = "empstatus";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeStatus",
	"m_strTable" => "empstatus",
	"m_srcTableName" => "empstatus"
));

$proto8["m_sql"] = "EmployeeStatus";
$proto8["m_srcTableName"] = "empstatus";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "empstatus";
$proto11["m_srcTableName"] = "empstatus";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "stID";
$proto11["m_columns"][] = "EmployeeStatus";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "empstatus";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "empstatus";
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
$proto0["m_srcTableName"]="empstatus";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_empstatus = createSqlQuery_empstatus();


	
		;

		

$tdataempstatus[".sqlquery"] = $queryData_empstatus;

$tableEvents["empstatus"] = new eventsBase;
$tdataempstatus[".hasEvents"] = false;

?>