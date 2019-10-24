<?php
require_once(getabspath("classes/cipherer.php"));




$tdataotherpayments = array();
	$tdataotherpayments[".truncateText"] = true;
	$tdataotherpayments[".NumberOfChars"] = 80;
	$tdataotherpayments[".ShortName"] = "otherpayments";
	$tdataotherpayments[".OwnerID"] = "";
	$tdataotherpayments[".OriginalTable"] = "otherpayments";

//	field labels
$fieldLabelsotherpayments = array();
$fieldToolTipsotherpayments = array();
$pageTitlesotherpayments = array();
$placeHoldersotherpayments = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsotherpayments["English"] = array();
	$fieldToolTipsotherpayments["English"] = array();
	$placeHoldersotherpayments["English"] = array();
	$pageTitlesotherpayments["English"] = array();
	$fieldLabelsotherpayments["English"]["OpID"] = "Op ID";
	$fieldToolTipsotherpayments["English"]["OpID"] = "";
	$placeHoldersotherpayments["English"]["OpID"] = "";
	$fieldLabelsotherpayments["English"]["OtherPayment"] = "Other Payment Method";
	$fieldToolTipsotherpayments["English"]["OtherPayment"] = "";
	$placeHoldersotherpayments["English"]["OtherPayment"] = "";
	if (count($fieldToolTipsotherpayments["English"]))
		$tdataotherpayments[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsotherpayments[""] = array();
	$fieldToolTipsotherpayments[""] = array();
	$placeHoldersotherpayments[""] = array();
	$pageTitlesotherpayments[""] = array();
	$fieldLabelsotherpayments[""]["OpID"] = "Op ID";
	$fieldToolTipsotherpayments[""]["OpID"] = "";
	$placeHoldersotherpayments[""]["OpID"] = "";
	$fieldLabelsotherpayments[""]["OtherPayment"] = "Other Payment";
	$fieldToolTipsotherpayments[""]["OtherPayment"] = "";
	$placeHoldersotherpayments[""]["OtherPayment"] = "";
	if (count($fieldToolTipsotherpayments[""]))
		$tdataotherpayments[".isUseToolTips"] = true;
}


	$tdataotherpayments[".NCSearch"] = true;



$tdataotherpayments[".shortTableName"] = "otherpayments";
$tdataotherpayments[".nSecOptions"] = 0;
$tdataotherpayments[".recsPerRowPrint"] = 1;
$tdataotherpayments[".mainTableOwnerID"] = "";
$tdataotherpayments[".moveNext"] = 1;
$tdataotherpayments[".entityType"] = 0;

$tdataotherpayments[".strOriginalTableName"] = "otherpayments";

	



$tdataotherpayments[".showAddInPopup"] = false;

$tdataotherpayments[".showEditInPopup"] = false;

$tdataotherpayments[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataotherpayments[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataotherpayments[".fieldsForRegister"] = array();

$tdataotherpayments[".listAjax"] = false;

	$tdataotherpayments[".audit"] = false;

	$tdataotherpayments[".locking"] = false;

$tdataotherpayments[".edit"] = true;
$tdataotherpayments[".afterEditAction"] = 1;
$tdataotherpayments[".closePopupAfterEdit"] = 1;
$tdataotherpayments[".afterEditActionDetTable"] = "";

$tdataotherpayments[".add"] = true;
$tdataotherpayments[".afterAddAction"] = 1;
$tdataotherpayments[".closePopupAfterAdd"] = 1;
$tdataotherpayments[".afterAddActionDetTable"] = "";

$tdataotherpayments[".list"] = true;



$tdataotherpayments[".reorderRecordsByHeader"] = true;


$tdataotherpayments[".exportFormatting"] = 2;
$tdataotherpayments[".exportDelimiter"] = ",";
		
$tdataotherpayments[".view"] = true;

$tdataotherpayments[".import"] = true;

$tdataotherpayments[".exportTo"] = true;

$tdataotherpayments[".printFriendly"] = true;

$tdataotherpayments[".delete"] = true;

$tdataotherpayments[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataotherpayments[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataotherpayments[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataotherpayments[".searchSaving"] = false;
//

$tdataotherpayments[".showSearchPanel"] = true;
		$tdataotherpayments[".flexibleSearch"] = true;

$tdataotherpayments[".isUseAjaxSuggest"] = true;

$tdataotherpayments[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																											

$tdataotherpayments[".ajaxCodeSnippetAdded"] = false;

$tdataotherpayments[".buttonsAdded"] = false;

$tdataotherpayments[".addPageEvents"] = false;

// use timepicker for search panel
$tdataotherpayments[".isUseTimeForSearch"] = false;





$tdataotherpayments[".allSearchFields"] = array();
$tdataotherpayments[".filterFields"] = array();
$tdataotherpayments[".requiredSearchFields"] = array();

$tdataotherpayments[".allSearchFields"][] = "OpID";
	$tdataotherpayments[".allSearchFields"][] = "OtherPayment";
	

$tdataotherpayments[".googleLikeFields"] = array();
$tdataotherpayments[".googleLikeFields"][] = "OpID";
$tdataotherpayments[".googleLikeFields"][] = "OtherPayment";


$tdataotherpayments[".advSearchFields"] = array();
$tdataotherpayments[".advSearchFields"][] = "OpID";
$tdataotherpayments[".advSearchFields"][] = "OtherPayment";

$tdataotherpayments[".tableType"] = "list";

$tdataotherpayments[".printerPageOrientation"] = 0;
$tdataotherpayments[".nPrinterPageScale"] = 100;

$tdataotherpayments[".nPrinterSplitRecords"] = 40;

$tdataotherpayments[".nPrinterPDFSplitRecords"] = 40;



$tdataotherpayments[".geocodingEnabled"] = false;





$tdataotherpayments[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataotherpayments[".pageSize"] = 20;

$tdataotherpayments[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataotherpayments[".strOrderBy"] = $tstrOrderBy;

$tdataotherpayments[".orderindexes"] = array();

$tdataotherpayments[".sqlHead"] = "SELECT OpID,  	OtherPayment";
$tdataotherpayments[".sqlFrom"] = "FROM otherpayments";
$tdataotherpayments[".sqlWhereExpr"] = "";
$tdataotherpayments[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataotherpayments[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataotherpayments[".arrGroupsPerPage"] = $arrGPP;

$tdataotherpayments[".highlightSearchResults"] = true;

$tableKeysotherpayments = array();
$tableKeysotherpayments[] = "OpID";
$tdataotherpayments[".Keys"] = $tableKeysotherpayments;

$tdataotherpayments[".listFields"] = array();
$tdataotherpayments[".listFields"][] = "OpID";
$tdataotherpayments[".listFields"][] = "OtherPayment";

$tdataotherpayments[".hideMobileList"] = array();


$tdataotherpayments[".viewFields"] = array();
$tdataotherpayments[".viewFields"][] = "OpID";
$tdataotherpayments[".viewFields"][] = "OtherPayment";

$tdataotherpayments[".addFields"] = array();
$tdataotherpayments[".addFields"][] = "OtherPayment";

$tdataotherpayments[".masterListFields"] = array();
$tdataotherpayments[".masterListFields"][] = "OpID";
$tdataotherpayments[".masterListFields"][] = "OtherPayment";

$tdataotherpayments[".inlineAddFields"] = array();
$tdataotherpayments[".inlineAddFields"][] = "OtherPayment";

$tdataotherpayments[".editFields"] = array();
$tdataotherpayments[".editFields"][] = "OtherPayment";

$tdataotherpayments[".inlineEditFields"] = array();
$tdataotherpayments[".inlineEditFields"][] = "OtherPayment";

$tdataotherpayments[".updateSelectedFields"] = array();
$tdataotherpayments[".updateSelectedFields"][] = "OtherPayment";


$tdataotherpayments[".exportFields"] = array();
$tdataotherpayments[".exportFields"][] = "OpID";
$tdataotherpayments[".exportFields"][] = "OtherPayment";

$tdataotherpayments[".importFields"] = array();
$tdataotherpayments[".importFields"][] = "OpID";
$tdataotherpayments[".importFields"][] = "OtherPayment";

$tdataotherpayments[".printFields"] = array();
$tdataotherpayments[".printFields"][] = "OpID";
$tdataotherpayments[".printFields"][] = "OtherPayment";


//	OpID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "OpID";
	$fdata["GoodName"] = "OpID";
	$fdata["ownerTable"] = "otherpayments";
	$fdata["Label"] = GetFieldLabel("otherpayments","OpID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "OpID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OpID";

	
	
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




	$tdataotherpayments["OpID"] = $fdata;
//	OtherPayment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "OtherPayment";
	$fdata["GoodName"] = "OtherPayment";
	$fdata["ownerTable"] = "otherpayments";
	$fdata["Label"] = GetFieldLabel("otherpayments","OtherPayment");
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

		$fdata["strField"] = "OtherPayment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OtherPayment";

	
	
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




	$tdataotherpayments["OtherPayment"] = $fdata;


$tables_data["otherpayments"]=&$tdataotherpayments;
$field_labels["otherpayments"] = &$fieldLabelsotherpayments;
$fieldToolTips["otherpayments"] = &$fieldToolTipsotherpayments;
$placeHolders["otherpayments"] = &$placeHoldersotherpayments;
$page_titles["otherpayments"] = &$pageTitlesotherpayments;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["otherpayments"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["otherpayments"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_otherpayments()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "OpID,  	OtherPayment";
$proto0["m_strFrom"] = "FROM otherpayments";
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
	"m_strName" => "OpID",
	"m_strTable" => "otherpayments",
	"m_srcTableName" => "otherpayments"
));

$proto6["m_sql"] = "OpID";
$proto6["m_srcTableName"] = "otherpayments";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "OtherPayment",
	"m_strTable" => "otherpayments",
	"m_srcTableName" => "otherpayments"
));

$proto8["m_sql"] = "OtherPayment";
$proto8["m_srcTableName"] = "otherpayments";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "otherpayments";
$proto11["m_srcTableName"] = "otherpayments";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "OpID";
$proto11["m_columns"][] = "OtherPayment";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "otherpayments";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "otherpayments";
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
$proto0["m_srcTableName"]="otherpayments";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_otherpayments = createSqlQuery_otherpayments();


	
		;

		

$tdataotherpayments[".sqlquery"] = $queryData_otherpayments;

$tableEvents["otherpayments"] = new eventsBase;
$tdataotherpayments[".hasEvents"] = false;

?>