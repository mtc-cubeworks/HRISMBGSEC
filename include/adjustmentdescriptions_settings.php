<?php
require_once(getabspath("classes/cipherer.php"));




$tdataadjustmentdescriptions = array();
	$tdataadjustmentdescriptions[".truncateText"] = true;
	$tdataadjustmentdescriptions[".NumberOfChars"] = 80;
	$tdataadjustmentdescriptions[".ShortName"] = "adjustmentdescriptions";
	$tdataadjustmentdescriptions[".OwnerID"] = "";
	$tdataadjustmentdescriptions[".OriginalTable"] = "adjustmentdescriptions";

//	field labels
$fieldLabelsadjustmentdescriptions = array();
$fieldToolTipsadjustmentdescriptions = array();
$pageTitlesadjustmentdescriptions = array();
$placeHoldersadjustmentdescriptions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadjustmentdescriptions["English"] = array();
	$fieldToolTipsadjustmentdescriptions["English"] = array();
	$placeHoldersadjustmentdescriptions["English"] = array();
	$pageTitlesadjustmentdescriptions["English"] = array();
	$fieldLabelsadjustmentdescriptions["English"]["adjID"] = "Adj ID";
	$fieldToolTipsadjustmentdescriptions["English"]["adjID"] = "";
	$placeHoldersadjustmentdescriptions["English"]["adjID"] = "";
	$fieldLabelsadjustmentdescriptions["English"]["AdjDescriptions"] = "Adjustment Description";
	$fieldToolTipsadjustmentdescriptions["English"]["AdjDescriptions"] = "";
	$placeHoldersadjustmentdescriptions["English"]["AdjDescriptions"] = "";
	$fieldLabelsadjustmentdescriptions["English"]["AdjType"] = "Adjustment Type";
	$fieldToolTipsadjustmentdescriptions["English"]["AdjType"] = "";
	$placeHoldersadjustmentdescriptions["English"]["AdjType"] = "";
	if (count($fieldToolTipsadjustmentdescriptions["English"]))
		$tdataadjustmentdescriptions[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsadjustmentdescriptions[""] = array();
	$fieldToolTipsadjustmentdescriptions[""] = array();
	$placeHoldersadjustmentdescriptions[""] = array();
	$pageTitlesadjustmentdescriptions[""] = array();
	if (count($fieldToolTipsadjustmentdescriptions[""]))
		$tdataadjustmentdescriptions[".isUseToolTips"] = true;
}


	$tdataadjustmentdescriptions[".NCSearch"] = true;



$tdataadjustmentdescriptions[".shortTableName"] = "adjustmentdescriptions";
$tdataadjustmentdescriptions[".nSecOptions"] = 0;
$tdataadjustmentdescriptions[".recsPerRowPrint"] = 1;
$tdataadjustmentdescriptions[".mainTableOwnerID"] = "";
$tdataadjustmentdescriptions[".moveNext"] = 1;
$tdataadjustmentdescriptions[".entityType"] = 0;

$tdataadjustmentdescriptions[".strOriginalTableName"] = "adjustmentdescriptions";

	



$tdataadjustmentdescriptions[".showAddInPopup"] = false;

$tdataadjustmentdescriptions[".showEditInPopup"] = false;

$tdataadjustmentdescriptions[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadjustmentdescriptions[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadjustmentdescriptions[".fieldsForRegister"] = array();

$tdataadjustmentdescriptions[".listAjax"] = false;

	$tdataadjustmentdescriptions[".audit"] = false;

	$tdataadjustmentdescriptions[".locking"] = false;

$tdataadjustmentdescriptions[".edit"] = true;
$tdataadjustmentdescriptions[".afterEditAction"] = 1;
$tdataadjustmentdescriptions[".closePopupAfterEdit"] = 1;
$tdataadjustmentdescriptions[".afterEditActionDetTable"] = "";

$tdataadjustmentdescriptions[".add"] = true;
$tdataadjustmentdescriptions[".afterAddAction"] = 1;
$tdataadjustmentdescriptions[".closePopupAfterAdd"] = 1;
$tdataadjustmentdescriptions[".afterAddActionDetTable"] = "";

$tdataadjustmentdescriptions[".list"] = true;

$tdataadjustmentdescriptions[".inlineEdit"] = true;

$tdataadjustmentdescriptions[".updateSelected"] = true;

$tdataadjustmentdescriptions[".reorderRecordsByHeader"] = true;


$tdataadjustmentdescriptions[".exportFormatting"] = 2;
$tdataadjustmentdescriptions[".exportDelimiter"] = ",";
		
$tdataadjustmentdescriptions[".inlineAdd"] = true;
$tdataadjustmentdescriptions[".view"] = true;

$tdataadjustmentdescriptions[".import"] = true;

$tdataadjustmentdescriptions[".exportTo"] = true;

$tdataadjustmentdescriptions[".printFriendly"] = true;

$tdataadjustmentdescriptions[".delete"] = true;

$tdataadjustmentdescriptions[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataadjustmentdescriptions[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataadjustmentdescriptions[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataadjustmentdescriptions[".searchSaving"] = false;
//

$tdataadjustmentdescriptions[".showSearchPanel"] = true;
		$tdataadjustmentdescriptions[".flexibleSearch"] = true;

$tdataadjustmentdescriptions[".isUseAjaxSuggest"] = true;

$tdataadjustmentdescriptions[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdataadjustmentdescriptions[".ajaxCodeSnippetAdded"] = false;

$tdataadjustmentdescriptions[".buttonsAdded"] = false;

$tdataadjustmentdescriptions[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadjustmentdescriptions[".isUseTimeForSearch"] = false;





$tdataadjustmentdescriptions[".allSearchFields"] = array();
$tdataadjustmentdescriptions[".filterFields"] = array();
$tdataadjustmentdescriptions[".requiredSearchFields"] = array();

$tdataadjustmentdescriptions[".allSearchFields"][] = "adjID";
	$tdataadjustmentdescriptions[".allSearchFields"][] = "AdjDescriptions";
	$tdataadjustmentdescriptions[".allSearchFields"][] = "AdjType";
	

$tdataadjustmentdescriptions[".googleLikeFields"] = array();
$tdataadjustmentdescriptions[".googleLikeFields"][] = "adjID";
$tdataadjustmentdescriptions[".googleLikeFields"][] = "AdjDescriptions";
$tdataadjustmentdescriptions[".googleLikeFields"][] = "AdjType";


$tdataadjustmentdescriptions[".advSearchFields"] = array();
$tdataadjustmentdescriptions[".advSearchFields"][] = "adjID";
$tdataadjustmentdescriptions[".advSearchFields"][] = "AdjDescriptions";
$tdataadjustmentdescriptions[".advSearchFields"][] = "AdjType";

$tdataadjustmentdescriptions[".tableType"] = "list";

$tdataadjustmentdescriptions[".printerPageOrientation"] = 0;
$tdataadjustmentdescriptions[".nPrinterPageScale"] = 100;

$tdataadjustmentdescriptions[".nPrinterSplitRecords"] = 40;

$tdataadjustmentdescriptions[".nPrinterPDFSplitRecords"] = 40;



$tdataadjustmentdescriptions[".geocodingEnabled"] = false;





$tdataadjustmentdescriptions[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataadjustmentdescriptions[".pageSize"] = 20;

$tdataadjustmentdescriptions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadjustmentdescriptions[".strOrderBy"] = $tstrOrderBy;

$tdataadjustmentdescriptions[".orderindexes"] = array();

$tdataadjustmentdescriptions[".sqlHead"] = "SELECT adjID,  	AdjDescriptions,  	AdjType";
$tdataadjustmentdescriptions[".sqlFrom"] = "FROM adjustmentdescriptions";
$tdataadjustmentdescriptions[".sqlWhereExpr"] = "";
$tdataadjustmentdescriptions[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadjustmentdescriptions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadjustmentdescriptions[".arrGroupsPerPage"] = $arrGPP;

$tdataadjustmentdescriptions[".highlightSearchResults"] = true;

$tableKeysadjustmentdescriptions = array();
$tableKeysadjustmentdescriptions[] = "adjID";
$tdataadjustmentdescriptions[".Keys"] = $tableKeysadjustmentdescriptions;

$tdataadjustmentdescriptions[".listFields"] = array();
$tdataadjustmentdescriptions[".listFields"][] = "adjID";
$tdataadjustmentdescriptions[".listFields"][] = "AdjDescriptions";
$tdataadjustmentdescriptions[".listFields"][] = "AdjType";

$tdataadjustmentdescriptions[".hideMobileList"] = array();


$tdataadjustmentdescriptions[".viewFields"] = array();
$tdataadjustmentdescriptions[".viewFields"][] = "adjID";
$tdataadjustmentdescriptions[".viewFields"][] = "AdjDescriptions";
$tdataadjustmentdescriptions[".viewFields"][] = "AdjType";

$tdataadjustmentdescriptions[".addFields"] = array();
$tdataadjustmentdescriptions[".addFields"][] = "AdjDescriptions";
$tdataadjustmentdescriptions[".addFields"][] = "AdjType";

$tdataadjustmentdescriptions[".masterListFields"] = array();
$tdataadjustmentdescriptions[".masterListFields"][] = "adjID";
$tdataadjustmentdescriptions[".masterListFields"][] = "AdjDescriptions";
$tdataadjustmentdescriptions[".masterListFields"][] = "AdjType";

$tdataadjustmentdescriptions[".inlineAddFields"] = array();
$tdataadjustmentdescriptions[".inlineAddFields"][] = "AdjDescriptions";
$tdataadjustmentdescriptions[".inlineAddFields"][] = "AdjType";

$tdataadjustmentdescriptions[".editFields"] = array();
$tdataadjustmentdescriptions[".editFields"][] = "AdjDescriptions";
$tdataadjustmentdescriptions[".editFields"][] = "AdjType";

$tdataadjustmentdescriptions[".inlineEditFields"] = array();
$tdataadjustmentdescriptions[".inlineEditFields"][] = "AdjDescriptions";
$tdataadjustmentdescriptions[".inlineEditFields"][] = "AdjType";

$tdataadjustmentdescriptions[".updateSelectedFields"] = array();
$tdataadjustmentdescriptions[".updateSelectedFields"][] = "AdjDescriptions";
$tdataadjustmentdescriptions[".updateSelectedFields"][] = "AdjType";


$tdataadjustmentdescriptions[".exportFields"] = array();
$tdataadjustmentdescriptions[".exportFields"][] = "adjID";
$tdataadjustmentdescriptions[".exportFields"][] = "AdjDescriptions";
$tdataadjustmentdescriptions[".exportFields"][] = "AdjType";

$tdataadjustmentdescriptions[".importFields"] = array();
$tdataadjustmentdescriptions[".importFields"][] = "adjID";
$tdataadjustmentdescriptions[".importFields"][] = "AdjDescriptions";
$tdataadjustmentdescriptions[".importFields"][] = "AdjType";

$tdataadjustmentdescriptions[".printFields"] = array();
$tdataadjustmentdescriptions[".printFields"][] = "adjID";
$tdataadjustmentdescriptions[".printFields"][] = "AdjDescriptions";
$tdataadjustmentdescriptions[".printFields"][] = "AdjType";


//	adjID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "adjID";
	$fdata["GoodName"] = "adjID";
	$fdata["ownerTable"] = "adjustmentdescriptions";
	$fdata["Label"] = GetFieldLabel("adjustmentdescriptions","adjID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "adjID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "adjID";

	
	
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




	$tdataadjustmentdescriptions["adjID"] = $fdata;
//	AdjDescriptions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AdjDescriptions";
	$fdata["GoodName"] = "AdjDescriptions";
	$fdata["ownerTable"] = "adjustmentdescriptions";
	$fdata["Label"] = GetFieldLabel("adjustmentdescriptions","AdjDescriptions");
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

		$fdata["strField"] = "AdjDescriptions";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AdjDescriptions";

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadjustmentdescriptions["AdjDescriptions"] = $fdata;
//	AdjType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AdjType";
	$fdata["GoodName"] = "AdjType";
	$fdata["ownerTable"] = "adjustmentdescriptions";
	$fdata["Label"] = GetFieldLabel("adjustmentdescriptions","AdjType");
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

		$fdata["strField"] = "AdjType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AdjType";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "adjtypes";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "adjtID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "AdjType";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;

	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadjustmentdescriptions["AdjType"] = $fdata;


$tables_data["adjustmentdescriptions"]=&$tdataadjustmentdescriptions;
$field_labels["adjustmentdescriptions"] = &$fieldLabelsadjustmentdescriptions;
$fieldToolTips["adjustmentdescriptions"] = &$fieldToolTipsadjustmentdescriptions;
$placeHolders["adjustmentdescriptions"] = &$placeHoldersadjustmentdescriptions;
$page_titles["adjustmentdescriptions"] = &$pageTitlesadjustmentdescriptions;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["adjustmentdescriptions"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["adjustmentdescriptions"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_adjustmentdescriptions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "adjID,  	AdjDescriptions,  	AdjType";
$proto0["m_strFrom"] = "FROM adjustmentdescriptions";
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
	"m_strName" => "adjID",
	"m_strTable" => "adjustmentdescriptions",
	"m_srcTableName" => "adjustmentdescriptions"
));

$proto6["m_sql"] = "adjID";
$proto6["m_srcTableName"] = "adjustmentdescriptions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "AdjDescriptions",
	"m_strTable" => "adjustmentdescriptions",
	"m_srcTableName" => "adjustmentdescriptions"
));

$proto8["m_sql"] = "AdjDescriptions";
$proto8["m_srcTableName"] = "adjustmentdescriptions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AdjType",
	"m_strTable" => "adjustmentdescriptions",
	"m_srcTableName" => "adjustmentdescriptions"
));

$proto10["m_sql"] = "AdjType";
$proto10["m_srcTableName"] = "adjustmentdescriptions";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "adjustmentdescriptions";
$proto13["m_srcTableName"] = "adjustmentdescriptions";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "adjID";
$proto13["m_columns"][] = "AdjDescriptions";
$proto13["m_columns"][] = "AdjType";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "adjustmentdescriptions";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "adjustmentdescriptions";
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
$proto0["m_srcTableName"]="adjustmentdescriptions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_adjustmentdescriptions = createSqlQuery_adjustmentdescriptions();


	
		;

			

$tdataadjustmentdescriptions[".sqlquery"] = $queryData_adjustmentdescriptions;

$tableEvents["adjustmentdescriptions"] = new eventsBase;
$tdataadjustmentdescriptions[".hasEvents"] = false;

?>