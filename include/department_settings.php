<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadepartment = array();
	$tdatadepartment[".truncateText"] = true;
	$tdatadepartment[".NumberOfChars"] = 80;
	$tdatadepartment[".ShortName"] = "department";
	$tdatadepartment[".OwnerID"] = "";
	$tdatadepartment[".OriginalTable"] = "department";

//	field labels
$fieldLabelsdepartment = array();
$fieldToolTipsdepartment = array();
$pageTitlesdepartment = array();
$placeHoldersdepartment = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdepartment["English"] = array();
	$fieldToolTipsdepartment["English"] = array();
	$placeHoldersdepartment["English"] = array();
	$pageTitlesdepartment["English"] = array();
	$fieldLabelsdepartment["English"]["DeID"] = "De ID";
	$fieldToolTipsdepartment["English"]["DeID"] = "";
	$placeHoldersdepartment["English"]["DeID"] = "";
	$fieldLabelsdepartment["English"]["Department"] = "Department";
	$fieldToolTipsdepartment["English"]["Department"] = "";
	$placeHoldersdepartment["English"]["Department"] = "";
	if (count($fieldToolTipsdepartment["English"]))
		$tdatadepartment[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdepartment[""] = array();
	$fieldToolTipsdepartment[""] = array();
	$placeHoldersdepartment[""] = array();
	$pageTitlesdepartment[""] = array();
	if (count($fieldToolTipsdepartment[""]))
		$tdatadepartment[".isUseToolTips"] = true;
}


	$tdatadepartment[".NCSearch"] = true;



$tdatadepartment[".shortTableName"] = "department";
$tdatadepartment[".nSecOptions"] = 0;
$tdatadepartment[".recsPerRowPrint"] = 1;
$tdatadepartment[".mainTableOwnerID"] = "";
$tdatadepartment[".moveNext"] = 1;
$tdatadepartment[".entityType"] = 0;

$tdatadepartment[".strOriginalTableName"] = "department";

	



$tdatadepartment[".showAddInPopup"] = false;

$tdatadepartment[".showEditInPopup"] = false;

$tdatadepartment[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadepartment[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadepartment[".fieldsForRegister"] = array();

$tdatadepartment[".listAjax"] = false;

	$tdatadepartment[".audit"] = false;

	$tdatadepartment[".locking"] = false;

$tdatadepartment[".edit"] = true;
$tdatadepartment[".afterEditAction"] = 1;
$tdatadepartment[".closePopupAfterEdit"] = 1;
$tdatadepartment[".afterEditActionDetTable"] = "";

$tdatadepartment[".add"] = true;
$tdatadepartment[".afterAddAction"] = 1;
$tdatadepartment[".closePopupAfterAdd"] = 1;
$tdatadepartment[".afterAddActionDetTable"] = "";

$tdatadepartment[".list"] = true;

$tdatadepartment[".inlineEdit"] = true;

$tdatadepartment[".updateSelected"] = true;

$tdatadepartment[".reorderRecordsByHeader"] = true;


$tdatadepartment[".exportFormatting"] = 2;
$tdatadepartment[".exportDelimiter"] = ",";
		
$tdatadepartment[".inlineAdd"] = true;
$tdatadepartment[".view"] = true;

$tdatadepartment[".import"] = true;

$tdatadepartment[".exportTo"] = true;

$tdatadepartment[".printFriendly"] = true;

$tdatadepartment[".delete"] = true;

$tdatadepartment[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadepartment[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatadepartment[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatadepartment[".searchSaving"] = false;
//

$tdatadepartment[".showSearchPanel"] = true;
		$tdatadepartment[".flexibleSearch"] = true;

$tdatadepartment[".isUseAjaxSuggest"] = true;

$tdatadepartment[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																		

$tdatadepartment[".ajaxCodeSnippetAdded"] = false;

$tdatadepartment[".buttonsAdded"] = false;

$tdatadepartment[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadepartment[".isUseTimeForSearch"] = false;





$tdatadepartment[".allSearchFields"] = array();
$tdatadepartment[".filterFields"] = array();
$tdatadepartment[".requiredSearchFields"] = array();

$tdatadepartment[".allSearchFields"][] = "DeID";
	$tdatadepartment[".allSearchFields"][] = "Department";
	

$tdatadepartment[".googleLikeFields"] = array();
$tdatadepartment[".googleLikeFields"][] = "DeID";
$tdatadepartment[".googleLikeFields"][] = "Department";


$tdatadepartment[".advSearchFields"] = array();
$tdatadepartment[".advSearchFields"][] = "DeID";
$tdatadepartment[".advSearchFields"][] = "Department";

$tdatadepartment[".tableType"] = "list";

$tdatadepartment[".printerPageOrientation"] = 0;
$tdatadepartment[".nPrinterPageScale"] = 100;

$tdatadepartment[".nPrinterSplitRecords"] = 40;

$tdatadepartment[".nPrinterPDFSplitRecords"] = 40;



$tdatadepartment[".geocodingEnabled"] = false;





$tdatadepartment[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatadepartment[".pageSize"] = 20;

$tdatadepartment[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadepartment[".strOrderBy"] = $tstrOrderBy;

$tdatadepartment[".orderindexes"] = array();

$tdatadepartment[".sqlHead"] = "SELECT DeID,  	Department";
$tdatadepartment[".sqlFrom"] = "FROM department";
$tdatadepartment[".sqlWhereExpr"] = "";
$tdatadepartment[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadepartment[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadepartment[".arrGroupsPerPage"] = $arrGPP;

$tdatadepartment[".highlightSearchResults"] = true;

$tableKeysdepartment = array();
$tableKeysdepartment[] = "DeID";
$tdatadepartment[".Keys"] = $tableKeysdepartment;

$tdatadepartment[".listFields"] = array();
$tdatadepartment[".listFields"][] = "DeID";
$tdatadepartment[".listFields"][] = "Department";

$tdatadepartment[".hideMobileList"] = array();


$tdatadepartment[".viewFields"] = array();
$tdatadepartment[".viewFields"][] = "DeID";
$tdatadepartment[".viewFields"][] = "Department";

$tdatadepartment[".addFields"] = array();
$tdatadepartment[".addFields"][] = "Department";

$tdatadepartment[".masterListFields"] = array();
$tdatadepartment[".masterListFields"][] = "DeID";
$tdatadepartment[".masterListFields"][] = "Department";

$tdatadepartment[".inlineAddFields"] = array();
$tdatadepartment[".inlineAddFields"][] = "Department";

$tdatadepartment[".editFields"] = array();
$tdatadepartment[".editFields"][] = "Department";

$tdatadepartment[".inlineEditFields"] = array();
$tdatadepartment[".inlineEditFields"][] = "Department";

$tdatadepartment[".updateSelectedFields"] = array();
$tdatadepartment[".updateSelectedFields"][] = "Department";


$tdatadepartment[".exportFields"] = array();
$tdatadepartment[".exportFields"][] = "DeID";
$tdatadepartment[".exportFields"][] = "Department";

$tdatadepartment[".importFields"] = array();
$tdatadepartment[".importFields"][] = "DeID";
$tdatadepartment[".importFields"][] = "Department";

$tdatadepartment[".printFields"] = array();
$tdatadepartment[".printFields"][] = "DeID";
$tdatadepartment[".printFields"][] = "Department";


//	DeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DeID";
	$fdata["GoodName"] = "DeID";
	$fdata["ownerTable"] = "department";
	$fdata["Label"] = GetFieldLabel("department","DeID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DeID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DeID";

	
	
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




	$tdatadepartment["DeID"] = $fdata;
//	Department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Department";
	$fdata["GoodName"] = "Department";
	$fdata["ownerTable"] = "department";
	$fdata["Label"] = GetFieldLabel("department","Department");
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

		$fdata["strField"] = "Department";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Department";

	
	
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




	$tdatadepartment["Department"] = $fdata;


$tables_data["department"]=&$tdatadepartment;
$field_labels["department"] = &$fieldLabelsdepartment;
$fieldToolTips["department"] = &$fieldToolTipsdepartment;
$placeHolders["department"] = &$placeHoldersdepartment;
$page_titles["department"] = &$pageTitlesdepartment;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["department"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["department"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_department()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DeID,  	Department";
$proto0["m_strFrom"] = "FROM department";
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
	"m_strName" => "DeID",
	"m_strTable" => "department",
	"m_srcTableName" => "department"
));

$proto6["m_sql"] = "DeID";
$proto6["m_srcTableName"] = "department";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "department",
	"m_srcTableName" => "department"
));

$proto8["m_sql"] = "Department";
$proto8["m_srcTableName"] = "department";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "department";
$proto11["m_srcTableName"] = "department";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "DeID";
$proto11["m_columns"][] = "Department";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "department";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "department";
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
$proto0["m_srcTableName"]="department";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_department = createSqlQuery_department();


	
		;

		

$tdatadepartment[".sqlquery"] = $queryData_department;

$tableEvents["department"] = new eventsBase;
$tdatadepartment[".hasEvents"] = false;

?>