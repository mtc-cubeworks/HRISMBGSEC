<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapprint = array();
	$tdatapprint[".truncateText"] = true;
	$tdatapprint[".NumberOfChars"] = 80;
	$tdatapprint[".ShortName"] = "pprint";
	$tdatapprint[".OwnerID"] = "";
	$tdatapprint[".OriginalTable"] = "pprint";

//	field labels
$fieldLabelspprint = array();
$fieldToolTipspprint = array();
$pageTitlespprint = array();
$placeHolderspprint = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspprint["English"] = array();
	$fieldToolTipspprint["English"] = array();
	$placeHolderspprint["English"] = array();
	$pageTitlespprint["English"] = array();
	$fieldLabelspprint["English"]["ppd"] = "Ppd";
	$fieldToolTipspprint["English"]["ppd"] = "";
	$placeHolderspprint["English"]["ppd"] = "";
	$fieldLabelspprint["English"]["PayrollID"] = "Payroll ID";
	$fieldToolTipspprint["English"]["PayrollID"] = "";
	$placeHolderspprint["English"]["PayrollID"] = "";
	if (count($fieldToolTipspprint["English"]))
		$tdatapprint[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspprint[""] = array();
	$fieldToolTipspprint[""] = array();
	$placeHolderspprint[""] = array();
	$pageTitlespprint[""] = array();
	if (count($fieldToolTipspprint[""]))
		$tdatapprint[".isUseToolTips"] = true;
}


	$tdatapprint[".NCSearch"] = true;



$tdatapprint[".shortTableName"] = "pprint";
$tdatapprint[".nSecOptions"] = 0;
$tdatapprint[".recsPerRowPrint"] = 1;
$tdatapprint[".mainTableOwnerID"] = "";
$tdatapprint[".moveNext"] = 1;
$tdatapprint[".entityType"] = 0;

$tdatapprint[".strOriginalTableName"] = "pprint";

	



$tdatapprint[".showAddInPopup"] = false;

$tdatapprint[".showEditInPopup"] = false;

$tdatapprint[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapprint[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapprint[".fieldsForRegister"] = array();

$tdatapprint[".listAjax"] = false;

	$tdatapprint[".audit"] = false;

	$tdatapprint[".locking"] = false;

$tdatapprint[".edit"] = true;
$tdatapprint[".afterEditAction"] = 1;
$tdatapprint[".closePopupAfterEdit"] = 1;
$tdatapprint[".afterEditActionDetTable"] = "";

$tdatapprint[".add"] = true;
$tdatapprint[".afterAddAction"] = 1;
$tdatapprint[".closePopupAfterAdd"] = 1;
$tdatapprint[".afterAddActionDetTable"] = "";

$tdatapprint[".list"] = true;



$tdatapprint[".reorderRecordsByHeader"] = true;


$tdatapprint[".exportFormatting"] = 2;
$tdatapprint[".exportDelimiter"] = ",";
		
$tdatapprint[".view"] = true;

$tdatapprint[".import"] = true;

$tdatapprint[".exportTo"] = true;

$tdatapprint[".printFriendly"] = true;

$tdatapprint[".delete"] = true;

$tdatapprint[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapprint[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapprint[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapprint[".searchSaving"] = false;
//

$tdatapprint[".showSearchPanel"] = true;
		$tdatapprint[".flexibleSearch"] = true;

$tdatapprint[".isUseAjaxSuggest"] = true;

$tdatapprint[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																														

$tdatapprint[".ajaxCodeSnippetAdded"] = false;

$tdatapprint[".buttonsAdded"] = false;

$tdatapprint[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapprint[".isUseTimeForSearch"] = false;





$tdatapprint[".allSearchFields"] = array();
$tdatapprint[".filterFields"] = array();
$tdatapprint[".requiredSearchFields"] = array();

$tdatapprint[".allSearchFields"][] = "ppd";
	$tdatapprint[".allSearchFields"][] = "PayrollID";
	

$tdatapprint[".googleLikeFields"] = array();
$tdatapprint[".googleLikeFields"][] = "ppd";
$tdatapprint[".googleLikeFields"][] = "PayrollID";


$tdatapprint[".advSearchFields"] = array();
$tdatapprint[".advSearchFields"][] = "ppd";
$tdatapprint[".advSearchFields"][] = "PayrollID";

$tdatapprint[".tableType"] = "list";

$tdatapprint[".printerPageOrientation"] = 0;
$tdatapprint[".nPrinterPageScale"] = 100;

$tdatapprint[".nPrinterSplitRecords"] = 40;

$tdatapprint[".nPrinterPDFSplitRecords"] = 40;



$tdatapprint[".geocodingEnabled"] = false;





$tdatapprint[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatapprint[".pageSize"] = 20;

$tdatapprint[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapprint[".strOrderBy"] = $tstrOrderBy;

$tdatapprint[".orderindexes"] = array();

$tdatapprint[".sqlHead"] = "SELECT ppd,  	PayrollID";
$tdatapprint[".sqlFrom"] = "FROM pprint";
$tdatapprint[".sqlWhereExpr"] = "";
$tdatapprint[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapprint[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapprint[".arrGroupsPerPage"] = $arrGPP;

$tdatapprint[".highlightSearchResults"] = true;

$tableKeyspprint = array();
$tableKeyspprint[] = "ppd";
$tdatapprint[".Keys"] = $tableKeyspprint;

$tdatapprint[".listFields"] = array();
$tdatapprint[".listFields"][] = "ppd";
$tdatapprint[".listFields"][] = "PayrollID";

$tdatapprint[".hideMobileList"] = array();


$tdatapprint[".viewFields"] = array();
$tdatapprint[".viewFields"][] = "ppd";
$tdatapprint[".viewFields"][] = "PayrollID";

$tdatapprint[".addFields"] = array();
$tdatapprint[".addFields"][] = "PayrollID";

$tdatapprint[".masterListFields"] = array();
$tdatapprint[".masterListFields"][] = "ppd";
$tdatapprint[".masterListFields"][] = "PayrollID";

$tdatapprint[".inlineAddFields"] = array();
$tdatapprint[".inlineAddFields"][] = "PayrollID";

$tdatapprint[".editFields"] = array();
$tdatapprint[".editFields"][] = "PayrollID";

$tdatapprint[".inlineEditFields"] = array();
$tdatapprint[".inlineEditFields"][] = "PayrollID";

$tdatapprint[".updateSelectedFields"] = array();
$tdatapprint[".updateSelectedFields"][] = "PayrollID";


$tdatapprint[".exportFields"] = array();
$tdatapprint[".exportFields"][] = "ppd";
$tdatapprint[".exportFields"][] = "PayrollID";

$tdatapprint[".importFields"] = array();
$tdatapprint[".importFields"][] = "ppd";
$tdatapprint[".importFields"][] = "PayrollID";

$tdatapprint[".printFields"] = array();
$tdatapprint[".printFields"][] = "ppd";
$tdatapprint[".printFields"][] = "PayrollID";


//	ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ppd";
	$fdata["GoodName"] = "ppd";
	$fdata["ownerTable"] = "pprint";
	$fdata["Label"] = GetFieldLabel("pprint","ppd");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ppd";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ppd";

	
	
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




	$tdatapprint["ppd"] = $fdata;
//	PayrollID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PayrollID";
	$fdata["GoodName"] = "PayrollID";
	$fdata["ownerTable"] = "pprint";
	$fdata["Label"] = GetFieldLabel("pprint","PayrollID");
	$fdata["FieldType"] = 3;

	
	
	
			
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

		$fdata["strField"] = "PayrollID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PayrollID";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapprint["PayrollID"] = $fdata;


$tables_data["pprint"]=&$tdatapprint;
$field_labels["pprint"] = &$fieldLabelspprint;
$fieldToolTips["pprint"] = &$fieldToolTipspprint;
$placeHolders["pprint"] = &$placeHolderspprint;
$page_titles["pprint"] = &$pageTitlespprint;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pprint"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["pprint"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pprint()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ppd,  	PayrollID";
$proto0["m_strFrom"] = "FROM pprint";
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
	"m_strName" => "ppd",
	"m_strTable" => "pprint",
	"m_srcTableName" => "pprint"
));

$proto6["m_sql"] = "ppd";
$proto6["m_srcTableName"] = "pprint";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PayrollID",
	"m_strTable" => "pprint",
	"m_srcTableName" => "pprint"
));

$proto8["m_sql"] = "PayrollID";
$proto8["m_srcTableName"] = "pprint";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "pprint";
$proto11["m_srcTableName"] = "pprint";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ppd";
$proto11["m_columns"][] = "PayrollID";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "pprint";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "pprint";
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
$proto0["m_srcTableName"]="pprint";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pprint = createSqlQuery_pprint();


	
		;

		

$tdatapprint[".sqlquery"] = $queryData_pprint;

$tableEvents["pprint"] = new eventsBase;
$tdatapprint[".hasEvents"] = false;

?>