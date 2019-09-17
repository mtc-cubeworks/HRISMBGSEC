<?php
require_once(getabspath("classes/cipherer.php"));




$tdatastatpay = array();
	$tdatastatpay[".truncateText"] = true;
	$tdatastatpay[".NumberOfChars"] = 80;
	$tdatastatpay[".ShortName"] = "statpay";
	$tdatastatpay[".OwnerID"] = "";
	$tdatastatpay[".OriginalTable"] = "statpay";

//	field labels
$fieldLabelsstatpay = array();
$fieldToolTipsstatpay = array();
$pageTitlesstatpay = array();
$placeHoldersstatpay = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstatpay["English"] = array();
	$fieldToolTipsstatpay["English"] = array();
	$placeHoldersstatpay["English"] = array();
	$pageTitlesstatpay["English"] = array();
	$fieldLabelsstatpay["English"]["SpID"] = "Sp ID";
	$fieldToolTipsstatpay["English"]["SpID"] = "";
	$placeHoldersstatpay["English"]["SpID"] = "";
	$fieldLabelsstatpay["English"]["StatutoryPayment"] = "Statutory Payment";
	$fieldToolTipsstatpay["English"]["StatutoryPayment"] = "";
	$placeHoldersstatpay["English"]["StatutoryPayment"] = "";
	if (count($fieldToolTipsstatpay["English"]))
		$tdatastatpay[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsstatpay[""] = array();
	$fieldToolTipsstatpay[""] = array();
	$placeHoldersstatpay[""] = array();
	$pageTitlesstatpay[""] = array();
	if (count($fieldToolTipsstatpay[""]))
		$tdatastatpay[".isUseToolTips"] = true;
}


	$tdatastatpay[".NCSearch"] = true;



$tdatastatpay[".shortTableName"] = "statpay";
$tdatastatpay[".nSecOptions"] = 0;
$tdatastatpay[".recsPerRowPrint"] = 1;
$tdatastatpay[".mainTableOwnerID"] = "";
$tdatastatpay[".moveNext"] = 1;
$tdatastatpay[".entityType"] = 0;

$tdatastatpay[".strOriginalTableName"] = "statpay";

	



$tdatastatpay[".showAddInPopup"] = false;

$tdatastatpay[".showEditInPopup"] = false;

$tdatastatpay[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatastatpay[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatastatpay[".fieldsForRegister"] = array();

$tdatastatpay[".listAjax"] = false;

	$tdatastatpay[".audit"] = false;

	$tdatastatpay[".locking"] = false;

$tdatastatpay[".edit"] = true;
$tdatastatpay[".afterEditAction"] = 1;
$tdatastatpay[".closePopupAfterEdit"] = 1;
$tdatastatpay[".afterEditActionDetTable"] = "";

$tdatastatpay[".add"] = true;
$tdatastatpay[".afterAddAction"] = 1;
$tdatastatpay[".closePopupAfterAdd"] = 1;
$tdatastatpay[".afterAddActionDetTable"] = "";

$tdatastatpay[".list"] = true;

$tdatastatpay[".inlineEdit"] = true;

$tdatastatpay[".updateSelected"] = true;

$tdatastatpay[".reorderRecordsByHeader"] = true;


$tdatastatpay[".exportFormatting"] = 2;
$tdatastatpay[".exportDelimiter"] = ",";
		
$tdatastatpay[".inlineAdd"] = true;
$tdatastatpay[".copy"] = true;
$tdatastatpay[".view"] = true;

$tdatastatpay[".import"] = true;

$tdatastatpay[".exportTo"] = true;

$tdatastatpay[".printFriendly"] = true;

$tdatastatpay[".delete"] = true;

$tdatastatpay[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatastatpay[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatastatpay[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatastatpay[".searchSaving"] = false;
//

$tdatastatpay[".showSearchPanel"] = true;
		$tdatastatpay[".flexibleSearch"] = true;

$tdatastatpay[".isUseAjaxSuggest"] = true;

$tdatastatpay[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																		

$tdatastatpay[".ajaxCodeSnippetAdded"] = false;

$tdatastatpay[".buttonsAdded"] = false;

$tdatastatpay[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastatpay[".isUseTimeForSearch"] = false;





$tdatastatpay[".allSearchFields"] = array();
$tdatastatpay[".filterFields"] = array();
$tdatastatpay[".requiredSearchFields"] = array();

$tdatastatpay[".allSearchFields"][] = "SpID";
	$tdatastatpay[".allSearchFields"][] = "StatutoryPayment";
	

$tdatastatpay[".googleLikeFields"] = array();
$tdatastatpay[".googleLikeFields"][] = "SpID";
$tdatastatpay[".googleLikeFields"][] = "StatutoryPayment";


$tdatastatpay[".advSearchFields"] = array();
$tdatastatpay[".advSearchFields"][] = "SpID";
$tdatastatpay[".advSearchFields"][] = "StatutoryPayment";

$tdatastatpay[".tableType"] = "list";

$tdatastatpay[".printerPageOrientation"] = 0;
$tdatastatpay[".nPrinterPageScale"] = 100;

$tdatastatpay[".nPrinterSplitRecords"] = 40;

$tdatastatpay[".nPrinterPDFSplitRecords"] = 40;



$tdatastatpay[".geocodingEnabled"] = false;





$tdatastatpay[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatastatpay[".pageSize"] = 20;

$tdatastatpay[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastatpay[".strOrderBy"] = $tstrOrderBy;

$tdatastatpay[".orderindexes"] = array();

$tdatastatpay[".sqlHead"] = "SELECT SpID,  	StatutoryPayment";
$tdatastatpay[".sqlFrom"] = "FROM statpay";
$tdatastatpay[".sqlWhereExpr"] = "";
$tdatastatpay[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastatpay[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastatpay[".arrGroupsPerPage"] = $arrGPP;

$tdatastatpay[".highlightSearchResults"] = true;

$tableKeysstatpay = array();
$tableKeysstatpay[] = "SpID";
$tdatastatpay[".Keys"] = $tableKeysstatpay;

$tdatastatpay[".listFields"] = array();
$tdatastatpay[".listFields"][] = "SpID";
$tdatastatpay[".listFields"][] = "StatutoryPayment";

$tdatastatpay[".hideMobileList"] = array();


$tdatastatpay[".viewFields"] = array();
$tdatastatpay[".viewFields"][] = "SpID";
$tdatastatpay[".viewFields"][] = "StatutoryPayment";

$tdatastatpay[".addFields"] = array();
$tdatastatpay[".addFields"][] = "StatutoryPayment";

$tdatastatpay[".masterListFields"] = array();
$tdatastatpay[".masterListFields"][] = "SpID";
$tdatastatpay[".masterListFields"][] = "StatutoryPayment";

$tdatastatpay[".inlineAddFields"] = array();
$tdatastatpay[".inlineAddFields"][] = "StatutoryPayment";

$tdatastatpay[".editFields"] = array();
$tdatastatpay[".editFields"][] = "StatutoryPayment";

$tdatastatpay[".inlineEditFields"] = array();
$tdatastatpay[".inlineEditFields"][] = "StatutoryPayment";

$tdatastatpay[".updateSelectedFields"] = array();
$tdatastatpay[".updateSelectedFields"][] = "StatutoryPayment";


$tdatastatpay[".exportFields"] = array();
$tdatastatpay[".exportFields"][] = "SpID";
$tdatastatpay[".exportFields"][] = "StatutoryPayment";

$tdatastatpay[".importFields"] = array();
$tdatastatpay[".importFields"][] = "SpID";
$tdatastatpay[".importFields"][] = "StatutoryPayment";

$tdatastatpay[".printFields"] = array();
$tdatastatpay[".printFields"][] = "SpID";
$tdatastatpay[".printFields"][] = "StatutoryPayment";


//	SpID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SpID";
	$fdata["GoodName"] = "SpID";
	$fdata["ownerTable"] = "statpay";
	$fdata["Label"] = GetFieldLabel("statpay","SpID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SpID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SpID";

	
	
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




	$tdatastatpay["SpID"] = $fdata;
//	StatutoryPayment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StatutoryPayment";
	$fdata["GoodName"] = "StatutoryPayment";
	$fdata["ownerTable"] = "statpay";
	$fdata["Label"] = GetFieldLabel("statpay","StatutoryPayment");
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

		$fdata["strField"] = "StatutoryPayment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "StatutoryPayment";

	
	
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




	$tdatastatpay["StatutoryPayment"] = $fdata;


$tables_data["statpay"]=&$tdatastatpay;
$field_labels["statpay"] = &$fieldLabelsstatpay;
$fieldToolTips["statpay"] = &$fieldToolTipsstatpay;
$placeHolders["statpay"] = &$placeHoldersstatpay;
$page_titles["statpay"] = &$pageTitlesstatpay;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["statpay"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["statpay"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_statpay()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "SpID,  	StatutoryPayment";
$proto0["m_strFrom"] = "FROM statpay";
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
	"m_strName" => "SpID",
	"m_strTable" => "statpay",
	"m_srcTableName" => "statpay"
));

$proto6["m_sql"] = "SpID";
$proto6["m_srcTableName"] = "statpay";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "StatutoryPayment",
	"m_strTable" => "statpay",
	"m_srcTableName" => "statpay"
));

$proto8["m_sql"] = "StatutoryPayment";
$proto8["m_srcTableName"] = "statpay";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "statpay";
$proto11["m_srcTableName"] = "statpay";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "SpID";
$proto11["m_columns"][] = "StatutoryPayment";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "statpay";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "statpay";
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
$proto0["m_srcTableName"]="statpay";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_statpay = createSqlQuery_statpay();


	
		;

		

$tdatastatpay[".sqlquery"] = $queryData_statpay;

$tableEvents["statpay"] = new eventsBase;
$tdatastatpay[".hasEvents"] = false;

?>