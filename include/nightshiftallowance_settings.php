<?php
require_once(getabspath("classes/cipherer.php"));




$tdatanightshiftallowance = array();
	$tdatanightshiftallowance[".truncateText"] = true;
	$tdatanightshiftallowance[".NumberOfChars"] = 80;
	$tdatanightshiftallowance[".ShortName"] = "nightshiftallowance";
	$tdatanightshiftallowance[".OwnerID"] = "";
	$tdatanightshiftallowance[".OriginalTable"] = "nightshiftallowance";

//	field labels
$fieldLabelsnightshiftallowance = array();
$fieldToolTipsnightshiftallowance = array();
$pageTitlesnightshiftallowance = array();
$placeHoldersnightshiftallowance = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsnightshiftallowance["English"] = array();
	$fieldToolTipsnightshiftallowance["English"] = array();
	$placeHoldersnightshiftallowance["English"] = array();
	$pageTitlesnightshiftallowance["English"] = array();
	$fieldLabelsnightshiftallowance["English"]["ndaID"] = "Nda ID";
	$fieldToolTipsnightshiftallowance["English"]["ndaID"] = "";
	$placeHoldersnightshiftallowance["English"]["ndaID"] = "";
	$fieldLabelsnightshiftallowance["English"]["MinimumHrs"] = "Minimum Hrs";
	$fieldToolTipsnightshiftallowance["English"]["MinimumHrs"] = "";
	$placeHoldersnightshiftallowance["English"]["MinimumHrs"] = "";
	$fieldLabelsnightshiftallowance["English"]["MealAllowance"] = "Meal Allowance";
	$fieldToolTipsnightshiftallowance["English"]["MealAllowance"] = "";
	$placeHoldersnightshiftallowance["English"]["MealAllowance"] = "";
	if (count($fieldToolTipsnightshiftallowance["English"]))
		$tdatanightshiftallowance[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsnightshiftallowance[""] = array();
	$fieldToolTipsnightshiftallowance[""] = array();
	$placeHoldersnightshiftallowance[""] = array();
	$pageTitlesnightshiftallowance[""] = array();
	if (count($fieldToolTipsnightshiftallowance[""]))
		$tdatanightshiftallowance[".isUseToolTips"] = true;
}


	$tdatanightshiftallowance[".NCSearch"] = true;



$tdatanightshiftallowance[".shortTableName"] = "nightshiftallowance";
$tdatanightshiftallowance[".nSecOptions"] = 0;
$tdatanightshiftallowance[".recsPerRowPrint"] = 1;
$tdatanightshiftallowance[".mainTableOwnerID"] = "";
$tdatanightshiftallowance[".moveNext"] = 1;
$tdatanightshiftallowance[".entityType"] = 0;

$tdatanightshiftallowance[".strOriginalTableName"] = "nightshiftallowance";

	



$tdatanightshiftallowance[".showAddInPopup"] = false;

$tdatanightshiftallowance[".showEditInPopup"] = false;

$tdatanightshiftallowance[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatanightshiftallowance[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatanightshiftallowance[".fieldsForRegister"] = array();

$tdatanightshiftallowance[".listAjax"] = false;

	$tdatanightshiftallowance[".audit"] = false;

	$tdatanightshiftallowance[".locking"] = false;

$tdatanightshiftallowance[".edit"] = true;
$tdatanightshiftallowance[".afterEditAction"] = 1;
$tdatanightshiftallowance[".closePopupAfterEdit"] = 1;
$tdatanightshiftallowance[".afterEditActionDetTable"] = "";

$tdatanightshiftallowance[".add"] = true;
$tdatanightshiftallowance[".afterAddAction"] = 1;
$tdatanightshiftallowance[".closePopupAfterAdd"] = 1;
$tdatanightshiftallowance[".afterAddActionDetTable"] = "";

$tdatanightshiftallowance[".list"] = true;



$tdatanightshiftallowance[".reorderRecordsByHeader"] = true;


$tdatanightshiftallowance[".exportFormatting"] = 2;
$tdatanightshiftallowance[".exportDelimiter"] = ",";
		
$tdatanightshiftallowance[".view"] = true;

$tdatanightshiftallowance[".import"] = true;

$tdatanightshiftallowance[".exportTo"] = true;

$tdatanightshiftallowance[".printFriendly"] = true;

$tdatanightshiftallowance[".delete"] = true;

$tdatanightshiftallowance[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatanightshiftallowance[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatanightshiftallowance[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatanightshiftallowance[".searchSaving"] = false;
//

$tdatanightshiftallowance[".showSearchPanel"] = true;
		$tdatanightshiftallowance[".flexibleSearch"] = true;

$tdatanightshiftallowance[".isUseAjaxSuggest"] = true;

$tdatanightshiftallowance[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																														

$tdatanightshiftallowance[".ajaxCodeSnippetAdded"] = false;

$tdatanightshiftallowance[".buttonsAdded"] = false;

$tdatanightshiftallowance[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanightshiftallowance[".isUseTimeForSearch"] = false;





$tdatanightshiftallowance[".allSearchFields"] = array();
$tdatanightshiftallowance[".filterFields"] = array();
$tdatanightshiftallowance[".requiredSearchFields"] = array();

$tdatanightshiftallowance[".allSearchFields"][] = "ndaID";
	$tdatanightshiftallowance[".allSearchFields"][] = "MinimumHrs";
	$tdatanightshiftallowance[".allSearchFields"][] = "MealAllowance";
	

$tdatanightshiftallowance[".googleLikeFields"] = array();
$tdatanightshiftallowance[".googleLikeFields"][] = "ndaID";
$tdatanightshiftallowance[".googleLikeFields"][] = "MinimumHrs";
$tdatanightshiftallowance[".googleLikeFields"][] = "MealAllowance";


$tdatanightshiftallowance[".advSearchFields"] = array();
$tdatanightshiftallowance[".advSearchFields"][] = "ndaID";
$tdatanightshiftallowance[".advSearchFields"][] = "MinimumHrs";
$tdatanightshiftallowance[".advSearchFields"][] = "MealAllowance";

$tdatanightshiftallowance[".tableType"] = "list";

$tdatanightshiftallowance[".printerPageOrientation"] = 0;
$tdatanightshiftallowance[".nPrinterPageScale"] = 100;

$tdatanightshiftallowance[".nPrinterSplitRecords"] = 40;

$tdatanightshiftallowance[".nPrinterPDFSplitRecords"] = 40;



$tdatanightshiftallowance[".geocodingEnabled"] = false;





$tdatanightshiftallowance[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatanightshiftallowance[".pageSize"] = 20;

$tdatanightshiftallowance[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatanightshiftallowance[".strOrderBy"] = $tstrOrderBy;

$tdatanightshiftallowance[".orderindexes"] = array();

$tdatanightshiftallowance[".sqlHead"] = "SELECT ndaID,  	MinimumHrs,  	MealAllowance";
$tdatanightshiftallowance[".sqlFrom"] = "FROM nightshiftallowance";
$tdatanightshiftallowance[".sqlWhereExpr"] = "";
$tdatanightshiftallowance[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanightshiftallowance[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanightshiftallowance[".arrGroupsPerPage"] = $arrGPP;

$tdatanightshiftallowance[".highlightSearchResults"] = true;

$tableKeysnightshiftallowance = array();
$tableKeysnightshiftallowance[] = "ndaID";
$tdatanightshiftallowance[".Keys"] = $tableKeysnightshiftallowance;

$tdatanightshiftallowance[".listFields"] = array();
$tdatanightshiftallowance[".listFields"][] = "ndaID";
$tdatanightshiftallowance[".listFields"][] = "MinimumHrs";
$tdatanightshiftallowance[".listFields"][] = "MealAllowance";

$tdatanightshiftallowance[".hideMobileList"] = array();


$tdatanightshiftallowance[".viewFields"] = array();
$tdatanightshiftallowance[".viewFields"][] = "ndaID";
$tdatanightshiftallowance[".viewFields"][] = "MinimumHrs";
$tdatanightshiftallowance[".viewFields"][] = "MealAllowance";

$tdatanightshiftallowance[".addFields"] = array();
$tdatanightshiftallowance[".addFields"][] = "MinimumHrs";
$tdatanightshiftallowance[".addFields"][] = "MealAllowance";

$tdatanightshiftallowance[".masterListFields"] = array();
$tdatanightshiftallowance[".masterListFields"][] = "ndaID";
$tdatanightshiftallowance[".masterListFields"][] = "MinimumHrs";
$tdatanightshiftallowance[".masterListFields"][] = "MealAllowance";

$tdatanightshiftallowance[".inlineAddFields"] = array();
$tdatanightshiftallowance[".inlineAddFields"][] = "MinimumHrs";
$tdatanightshiftallowance[".inlineAddFields"][] = "MealAllowance";

$tdatanightshiftallowance[".editFields"] = array();
$tdatanightshiftallowance[".editFields"][] = "MinimumHrs";
$tdatanightshiftallowance[".editFields"][] = "MealAllowance";

$tdatanightshiftallowance[".inlineEditFields"] = array();
$tdatanightshiftallowance[".inlineEditFields"][] = "MinimumHrs";
$tdatanightshiftallowance[".inlineEditFields"][] = "MealAllowance";

$tdatanightshiftallowance[".updateSelectedFields"] = array();
$tdatanightshiftallowance[".updateSelectedFields"][] = "MinimumHrs";
$tdatanightshiftallowance[".updateSelectedFields"][] = "MealAllowance";


$tdatanightshiftallowance[".exportFields"] = array();
$tdatanightshiftallowance[".exportFields"][] = "ndaID";
$tdatanightshiftallowance[".exportFields"][] = "MinimumHrs";
$tdatanightshiftallowance[".exportFields"][] = "MealAllowance";

$tdatanightshiftallowance[".importFields"] = array();
$tdatanightshiftallowance[".importFields"][] = "ndaID";
$tdatanightshiftallowance[".importFields"][] = "MinimumHrs";
$tdatanightshiftallowance[".importFields"][] = "MealAllowance";

$tdatanightshiftallowance[".printFields"] = array();
$tdatanightshiftallowance[".printFields"][] = "ndaID";
$tdatanightshiftallowance[".printFields"][] = "MinimumHrs";
$tdatanightshiftallowance[".printFields"][] = "MealAllowance";


//	ndaID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ndaID";
	$fdata["GoodName"] = "ndaID";
	$fdata["ownerTable"] = "nightshiftallowance";
	$fdata["Label"] = GetFieldLabel("nightshiftallowance","ndaID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ndaID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ndaID";

	
	
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




	$tdatanightshiftallowance["ndaID"] = $fdata;
//	MinimumHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MinimumHrs";
	$fdata["GoodName"] = "MinimumHrs";
	$fdata["ownerTable"] = "nightshiftallowance";
	$fdata["Label"] = GetFieldLabel("nightshiftallowance","MinimumHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
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

		$fdata["strField"] = "MinimumHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MinimumHrs";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
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




	$tdatanightshiftallowance["MinimumHrs"] = $fdata;
//	MealAllowance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MealAllowance";
	$fdata["GoodName"] = "MealAllowance";
	$fdata["ownerTable"] = "nightshiftallowance";
	$fdata["Label"] = GetFieldLabel("nightshiftallowance","MealAllowance");
	$fdata["FieldType"] = 5;

	
	
	
			
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

		$fdata["strField"] = "MealAllowance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MealAllowance";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
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




	$tdatanightshiftallowance["MealAllowance"] = $fdata;


$tables_data["nightshiftallowance"]=&$tdatanightshiftallowance;
$field_labels["nightshiftallowance"] = &$fieldLabelsnightshiftallowance;
$fieldToolTips["nightshiftallowance"] = &$fieldToolTipsnightshiftallowance;
$placeHolders["nightshiftallowance"] = &$placeHoldersnightshiftallowance;
$page_titles["nightshiftallowance"] = &$pageTitlesnightshiftallowance;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["nightshiftallowance"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["nightshiftallowance"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_nightshiftallowance()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ndaID,  	MinimumHrs,  	MealAllowance";
$proto0["m_strFrom"] = "FROM nightshiftallowance";
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
	"m_strName" => "ndaID",
	"m_strTable" => "nightshiftallowance",
	"m_srcTableName" => "nightshiftallowance"
));

$proto6["m_sql"] = "ndaID";
$proto6["m_srcTableName"] = "nightshiftallowance";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MinimumHrs",
	"m_strTable" => "nightshiftallowance",
	"m_srcTableName" => "nightshiftallowance"
));

$proto8["m_sql"] = "MinimumHrs";
$proto8["m_srcTableName"] = "nightshiftallowance";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MealAllowance",
	"m_strTable" => "nightshiftallowance",
	"m_srcTableName" => "nightshiftallowance"
));

$proto10["m_sql"] = "MealAllowance";
$proto10["m_srcTableName"] = "nightshiftallowance";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "nightshiftallowance";
$proto13["m_srcTableName"] = "nightshiftallowance";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "ndaID";
$proto13["m_columns"][] = "MinimumHrs";
$proto13["m_columns"][] = "MealAllowance";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "nightshiftallowance";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "nightshiftallowance";
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
$proto0["m_srcTableName"]="nightshiftallowance";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_nightshiftallowance = createSqlQuery_nightshiftallowance();


	
		;

			

$tdatanightshiftallowance[".sqlquery"] = $queryData_nightshiftallowance;

$tableEvents["nightshiftallowance"] = new eventsBase;
$tdatanightshiftallowance[".hasEvents"] = false;

?>