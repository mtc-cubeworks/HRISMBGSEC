<?php
require_once(getabspath("classes/cipherer.php"));




$tdatabanks = array();
	$tdatabanks[".truncateText"] = true;
	$tdatabanks[".NumberOfChars"] = 80;
	$tdatabanks[".ShortName"] = "banks";
	$tdatabanks[".OwnerID"] = "";
	$tdatabanks[".OriginalTable"] = "banks";

//	field labels
$fieldLabelsbanks = array();
$fieldToolTipsbanks = array();
$pageTitlesbanks = array();
$placeHoldersbanks = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbanks["English"] = array();
	$fieldToolTipsbanks["English"] = array();
	$placeHoldersbanks["English"] = array();
	$pageTitlesbanks["English"] = array();
	$fieldLabelsbanks["English"]["BankID"] = "Bank ID";
	$fieldToolTipsbanks["English"]["BankID"] = "";
	$placeHoldersbanks["English"]["BankID"] = "";
	$fieldLabelsbanks["English"]["Bank"] = "Bank";
	$fieldToolTipsbanks["English"]["Bank"] = "";
	$placeHoldersbanks["English"]["Bank"] = "";
	if (count($fieldToolTipsbanks["English"]))
		$tdatabanks[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsbanks[""] = array();
	$fieldToolTipsbanks[""] = array();
	$placeHoldersbanks[""] = array();
	$pageTitlesbanks[""] = array();
	if (count($fieldToolTipsbanks[""]))
		$tdatabanks[".isUseToolTips"] = true;
}


	$tdatabanks[".NCSearch"] = true;



$tdatabanks[".shortTableName"] = "banks";
$tdatabanks[".nSecOptions"] = 0;
$tdatabanks[".recsPerRowPrint"] = 1;
$tdatabanks[".mainTableOwnerID"] = "";
$tdatabanks[".moveNext"] = 1;
$tdatabanks[".entityType"] = 0;

$tdatabanks[".strOriginalTableName"] = "banks";

	



$tdatabanks[".showAddInPopup"] = false;

$tdatabanks[".showEditInPopup"] = false;

$tdatabanks[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabanks[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabanks[".fieldsForRegister"] = array();

$tdatabanks[".listAjax"] = false;

	$tdatabanks[".audit"] = false;

	$tdatabanks[".locking"] = false;

$tdatabanks[".edit"] = true;
$tdatabanks[".afterEditAction"] = 1;
$tdatabanks[".closePopupAfterEdit"] = 1;
$tdatabanks[".afterEditActionDetTable"] = "";

$tdatabanks[".add"] = true;
$tdatabanks[".afterAddAction"] = 1;
$tdatabanks[".closePopupAfterAdd"] = 1;
$tdatabanks[".afterAddActionDetTable"] = "";

$tdatabanks[".list"] = true;



$tdatabanks[".reorderRecordsByHeader"] = true;


$tdatabanks[".exportFormatting"] = 2;
$tdatabanks[".exportDelimiter"] = ",";
		
$tdatabanks[".view"] = true;

$tdatabanks[".import"] = true;

$tdatabanks[".exportTo"] = true;

$tdatabanks[".printFriendly"] = true;

$tdatabanks[".delete"] = true;

$tdatabanks[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatabanks[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatabanks[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatabanks[".searchSaving"] = false;
//

$tdatabanks[".showSearchPanel"] = true;
		$tdatabanks[".flexibleSearch"] = true;

$tdatabanks[".isUseAjaxSuggest"] = true;

$tdatabanks[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																					

$tdatabanks[".ajaxCodeSnippetAdded"] = false;

$tdatabanks[".buttonsAdded"] = false;

$tdatabanks[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabanks[".isUseTimeForSearch"] = false;





$tdatabanks[".allSearchFields"] = array();
$tdatabanks[".filterFields"] = array();
$tdatabanks[".requiredSearchFields"] = array();

$tdatabanks[".allSearchFields"][] = "BankID";
	$tdatabanks[".allSearchFields"][] = "Bank";
	

$tdatabanks[".googleLikeFields"] = array();
$tdatabanks[".googleLikeFields"][] = "BankID";
$tdatabanks[".googleLikeFields"][] = "Bank";


$tdatabanks[".advSearchFields"] = array();
$tdatabanks[".advSearchFields"][] = "BankID";
$tdatabanks[".advSearchFields"][] = "Bank";

$tdatabanks[".tableType"] = "list";

$tdatabanks[".printerPageOrientation"] = 0;
$tdatabanks[".nPrinterPageScale"] = 100;

$tdatabanks[".nPrinterSplitRecords"] = 40;

$tdatabanks[".nPrinterPDFSplitRecords"] = 40;



$tdatabanks[".geocodingEnabled"] = false;





$tdatabanks[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatabanks[".pageSize"] = 20;

$tdatabanks[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabanks[".strOrderBy"] = $tstrOrderBy;

$tdatabanks[".orderindexes"] = array();

$tdatabanks[".sqlHead"] = "SELECT BankID,  	Bank";
$tdatabanks[".sqlFrom"] = "FROM banks";
$tdatabanks[".sqlWhereExpr"] = "";
$tdatabanks[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabanks[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabanks[".arrGroupsPerPage"] = $arrGPP;

$tdatabanks[".highlightSearchResults"] = true;

$tableKeysbanks = array();
$tableKeysbanks[] = "BankID";
$tdatabanks[".Keys"] = $tableKeysbanks;

$tdatabanks[".listFields"] = array();
$tdatabanks[".listFields"][] = "BankID";
$tdatabanks[".listFields"][] = "Bank";

$tdatabanks[".hideMobileList"] = array();


$tdatabanks[".viewFields"] = array();
$tdatabanks[".viewFields"][] = "BankID";
$tdatabanks[".viewFields"][] = "Bank";

$tdatabanks[".addFields"] = array();
$tdatabanks[".addFields"][] = "Bank";

$tdatabanks[".masterListFields"] = array();
$tdatabanks[".masterListFields"][] = "BankID";
$tdatabanks[".masterListFields"][] = "Bank";

$tdatabanks[".inlineAddFields"] = array();
$tdatabanks[".inlineAddFields"][] = "Bank";

$tdatabanks[".editFields"] = array();
$tdatabanks[".editFields"][] = "Bank";

$tdatabanks[".inlineEditFields"] = array();
$tdatabanks[".inlineEditFields"][] = "Bank";

$tdatabanks[".updateSelectedFields"] = array();
$tdatabanks[".updateSelectedFields"][] = "Bank";


$tdatabanks[".exportFields"] = array();
$tdatabanks[".exportFields"][] = "BankID";
$tdatabanks[".exportFields"][] = "Bank";

$tdatabanks[".importFields"] = array();
$tdatabanks[".importFields"][] = "BankID";
$tdatabanks[".importFields"][] = "Bank";

$tdatabanks[".printFields"] = array();
$tdatabanks[".printFields"][] = "BankID";
$tdatabanks[".printFields"][] = "Bank";


//	BankID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "BankID";
	$fdata["GoodName"] = "BankID";
	$fdata["ownerTable"] = "banks";
	$fdata["Label"] = GetFieldLabel("banks","BankID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BankID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BankID";

	
	
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




	$tdatabanks["BankID"] = $fdata;
//	Bank
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Bank";
	$fdata["GoodName"] = "Bank";
	$fdata["ownerTable"] = "banks";
	$fdata["Label"] = GetFieldLabel("banks","Bank");
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

		$fdata["strField"] = "Bank";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Bank";

	
	
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
			$edata["EditParams"].= " maxlength=80";

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




	$tdatabanks["Bank"] = $fdata;


$tables_data["banks"]=&$tdatabanks;
$field_labels["banks"] = &$fieldLabelsbanks;
$fieldToolTips["banks"] = &$fieldToolTipsbanks;
$placeHolders["banks"] = &$placeHoldersbanks;
$page_titles["banks"] = &$pageTitlesbanks;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["banks"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["banks"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_banks()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "BankID,  	Bank";
$proto0["m_strFrom"] = "FROM banks";
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
	"m_strName" => "BankID",
	"m_strTable" => "banks",
	"m_srcTableName" => "banks"
));

$proto6["m_sql"] = "BankID";
$proto6["m_srcTableName"] = "banks";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Bank",
	"m_strTable" => "banks",
	"m_srcTableName" => "banks"
));

$proto8["m_sql"] = "Bank";
$proto8["m_srcTableName"] = "banks";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "banks";
$proto11["m_srcTableName"] = "banks";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "BankID";
$proto11["m_columns"][] = "Bank";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "banks";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "banks";
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
$proto0["m_srcTableName"]="banks";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_banks = createSqlQuery_banks();


	
		;

		

$tdatabanks[".sqlquery"] = $queryData_banks;

$tableEvents["banks"] = new eventsBase;
$tdatabanks[".hasEvents"] = false;

?>