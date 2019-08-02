<?php
require_once(getabspath("classes/cipherer.php"));




$tdataperiods = array();
	$tdataperiods[".truncateText"] = true;
	$tdataperiods[".NumberOfChars"] = 80;
	$tdataperiods[".ShortName"] = "periods";
	$tdataperiods[".OwnerID"] = "";
	$tdataperiods[".OriginalTable"] = "periods";

//	field labels
$fieldLabelsperiods = array();
$fieldToolTipsperiods = array();
$pageTitlesperiods = array();
$placeHoldersperiods = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsperiods["English"] = array();
	$fieldToolTipsperiods["English"] = array();
	$placeHoldersperiods["English"] = array();
	$pageTitlesperiods["English"] = array();
	$fieldLabelsperiods["English"]["PerID"] = "Per ID";
	$fieldToolTipsperiods["English"]["PerID"] = "";
	$placeHoldersperiods["English"]["PerID"] = "";
	$fieldLabelsperiods["English"]["Period"] = "Period";
	$fieldToolTipsperiods["English"]["Period"] = "";
	$placeHoldersperiods["English"]["Period"] = "";
	$fieldLabelsperiods["English"]["Factor"] = "Factor";
	$fieldToolTipsperiods["English"]["Factor"] = "";
	$placeHoldersperiods["English"]["Factor"] = "";
	if (count($fieldToolTipsperiods["English"]))
		$tdataperiods[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsperiods[""] = array();
	$fieldToolTipsperiods[""] = array();
	$placeHoldersperiods[""] = array();
	$pageTitlesperiods[""] = array();
	if (count($fieldToolTipsperiods[""]))
		$tdataperiods[".isUseToolTips"] = true;
}


	$tdataperiods[".NCSearch"] = true;



$tdataperiods[".shortTableName"] = "periods";
$tdataperiods[".nSecOptions"] = 0;
$tdataperiods[".recsPerRowPrint"] = 1;
$tdataperiods[".mainTableOwnerID"] = "";
$tdataperiods[".moveNext"] = 1;
$tdataperiods[".entityType"] = 0;

$tdataperiods[".strOriginalTableName"] = "periods";

	



$tdataperiods[".showAddInPopup"] = false;

$tdataperiods[".showEditInPopup"] = false;

$tdataperiods[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataperiods[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataperiods[".fieldsForRegister"] = array();

$tdataperiods[".listAjax"] = false;

	$tdataperiods[".audit"] = false;

	$tdataperiods[".locking"] = false;

$tdataperiods[".edit"] = true;
$tdataperiods[".afterEditAction"] = 1;
$tdataperiods[".closePopupAfterEdit"] = 1;
$tdataperiods[".afterEditActionDetTable"] = "";

$tdataperiods[".add"] = true;
$tdataperiods[".afterAddAction"] = 1;
$tdataperiods[".closePopupAfterAdd"] = 1;
$tdataperiods[".afterAddActionDetTable"] = "";

$tdataperiods[".list"] = true;



$tdataperiods[".reorderRecordsByHeader"] = true;


$tdataperiods[".exportFormatting"] = 2;
$tdataperiods[".exportDelimiter"] = ",";
		
$tdataperiods[".view"] = true;

$tdataperiods[".import"] = true;

$tdataperiods[".exportTo"] = true;

$tdataperiods[".printFriendly"] = true;

$tdataperiods[".delete"] = true;

$tdataperiods[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataperiods[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataperiods[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataperiods[".searchSaving"] = false;
//

$tdataperiods[".showSearchPanel"] = true;
		$tdataperiods[".flexibleSearch"] = true;

$tdataperiods[".isUseAjaxSuggest"] = true;

$tdataperiods[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																														

$tdataperiods[".ajaxCodeSnippetAdded"] = false;

$tdataperiods[".buttonsAdded"] = false;

$tdataperiods[".addPageEvents"] = false;

// use timepicker for search panel
$tdataperiods[".isUseTimeForSearch"] = false;





$tdataperiods[".allSearchFields"] = array();
$tdataperiods[".filterFields"] = array();
$tdataperiods[".requiredSearchFields"] = array();

$tdataperiods[".allSearchFields"][] = "PerID";
	$tdataperiods[".allSearchFields"][] = "Period";
	$tdataperiods[".allSearchFields"][] = "Factor";
	

$tdataperiods[".googleLikeFields"] = array();
$tdataperiods[".googleLikeFields"][] = "PerID";
$tdataperiods[".googleLikeFields"][] = "Period";
$tdataperiods[".googleLikeFields"][] = "Factor";


$tdataperiods[".advSearchFields"] = array();
$tdataperiods[".advSearchFields"][] = "PerID";
$tdataperiods[".advSearchFields"][] = "Period";
$tdataperiods[".advSearchFields"][] = "Factor";

$tdataperiods[".tableType"] = "list";

$tdataperiods[".printerPageOrientation"] = 0;
$tdataperiods[".nPrinterPageScale"] = 100;

$tdataperiods[".nPrinterSplitRecords"] = 40;

$tdataperiods[".nPrinterPDFSplitRecords"] = 40;



$tdataperiods[".geocodingEnabled"] = false;





$tdataperiods[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataperiods[".pageSize"] = 20;

$tdataperiods[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataperiods[".strOrderBy"] = $tstrOrderBy;

$tdataperiods[".orderindexes"] = array();

$tdataperiods[".sqlHead"] = "SELECT PerID,  	Period,  	Factor";
$tdataperiods[".sqlFrom"] = "FROM periods";
$tdataperiods[".sqlWhereExpr"] = "";
$tdataperiods[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataperiods[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataperiods[".arrGroupsPerPage"] = $arrGPP;

$tdataperiods[".highlightSearchResults"] = true;

$tableKeysperiods = array();
$tableKeysperiods[] = "PerID";
$tdataperiods[".Keys"] = $tableKeysperiods;

$tdataperiods[".listFields"] = array();
$tdataperiods[".listFields"][] = "PerID";
$tdataperiods[".listFields"][] = "Period";
$tdataperiods[".listFields"][] = "Factor";

$tdataperiods[".hideMobileList"] = array();


$tdataperiods[".viewFields"] = array();
$tdataperiods[".viewFields"][] = "PerID";
$tdataperiods[".viewFields"][] = "Period";
$tdataperiods[".viewFields"][] = "Factor";

$tdataperiods[".addFields"] = array();
$tdataperiods[".addFields"][] = "Period";
$tdataperiods[".addFields"][] = "Factor";

$tdataperiods[".masterListFields"] = array();
$tdataperiods[".masterListFields"][] = "PerID";
$tdataperiods[".masterListFields"][] = "Period";
$tdataperiods[".masterListFields"][] = "Factor";

$tdataperiods[".inlineAddFields"] = array();
$tdataperiods[".inlineAddFields"][] = "Period";
$tdataperiods[".inlineAddFields"][] = "Factor";

$tdataperiods[".editFields"] = array();
$tdataperiods[".editFields"][] = "Period";
$tdataperiods[".editFields"][] = "Factor";

$tdataperiods[".inlineEditFields"] = array();
$tdataperiods[".inlineEditFields"][] = "Period";
$tdataperiods[".inlineEditFields"][] = "Factor";

$tdataperiods[".updateSelectedFields"] = array();
$tdataperiods[".updateSelectedFields"][] = "Period";
$tdataperiods[".updateSelectedFields"][] = "Factor";


$tdataperiods[".exportFields"] = array();
$tdataperiods[".exportFields"][] = "PerID";
$tdataperiods[".exportFields"][] = "Period";
$tdataperiods[".exportFields"][] = "Factor";

$tdataperiods[".importFields"] = array();
$tdataperiods[".importFields"][] = "PerID";
$tdataperiods[".importFields"][] = "Period";
$tdataperiods[".importFields"][] = "Factor";

$tdataperiods[".printFields"] = array();
$tdataperiods[".printFields"][] = "PerID";
$tdataperiods[".printFields"][] = "Period";
$tdataperiods[".printFields"][] = "Factor";


//	PerID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PerID";
	$fdata["GoodName"] = "PerID";
	$fdata["ownerTable"] = "periods";
	$fdata["Label"] = GetFieldLabel("periods","PerID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PerID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PerID";

	
	
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




	$tdataperiods["PerID"] = $fdata;
//	Period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Period";
	$fdata["GoodName"] = "Period";
	$fdata["ownerTable"] = "periods";
	$fdata["Label"] = GetFieldLabel("periods","Period");
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

		$fdata["strField"] = "Period";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Period";

	
	
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




	$tdataperiods["Period"] = $fdata;
//	Factor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Factor";
	$fdata["GoodName"] = "Factor";
	$fdata["ownerTable"] = "periods";
	$fdata["Label"] = GetFieldLabel("periods","Factor");
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

		$fdata["strField"] = "Factor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Factor";

	
	
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




	$tdataperiods["Factor"] = $fdata;


$tables_data["periods"]=&$tdataperiods;
$field_labels["periods"] = &$fieldLabelsperiods;
$fieldToolTips["periods"] = &$fieldToolTipsperiods;
$placeHolders["periods"] = &$placeHoldersperiods;
$page_titles["periods"] = &$pageTitlesperiods;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["periods"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["periods"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_periods()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PerID,  	Period,  	Factor";
$proto0["m_strFrom"] = "FROM periods";
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
	"m_strName" => "PerID",
	"m_strTable" => "periods",
	"m_srcTableName" => "periods"
));

$proto6["m_sql"] = "PerID";
$proto6["m_srcTableName"] = "periods";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Period",
	"m_strTable" => "periods",
	"m_srcTableName" => "periods"
));

$proto8["m_sql"] = "Period";
$proto8["m_srcTableName"] = "periods";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Factor",
	"m_strTable" => "periods",
	"m_srcTableName" => "periods"
));

$proto10["m_sql"] = "Factor";
$proto10["m_srcTableName"] = "periods";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "periods";
$proto13["m_srcTableName"] = "periods";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "PerID";
$proto13["m_columns"][] = "Period";
$proto13["m_columns"][] = "Factor";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "periods";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "periods";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="periods";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_periods = createSqlQuery_periods();


	
		;

			

$tdataperiods[".sqlquery"] = $queryData_periods;

$tableEvents["periods"] = new eventsBase;
$tdataperiods[".hasEvents"] = false;

?>