<?php
require_once(getabspath("classes/cipherer.php"));




$tdatademo_finger = array();
	$tdatademo_finger[".truncateText"] = true;
	$tdatademo_finger[".NumberOfChars"] = 80;
	$tdatademo_finger[".ShortName"] = "demo_finger";
	$tdatademo_finger[".OwnerID"] = "";
	$tdatademo_finger[".OriginalTable"] = "demo_finger";

//	field labels
$fieldLabelsdemo_finger = array();
$fieldToolTipsdemo_finger = array();
$pageTitlesdemo_finger = array();
$placeHoldersdemo_finger = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdemo_finger["English"] = array();
	$fieldToolTipsdemo_finger["English"] = array();
	$placeHoldersdemo_finger["English"] = array();
	$pageTitlesdemo_finger["English"] = array();
	$fieldLabelsdemo_finger["English"]["user_id"] = "User Id";
	$fieldToolTipsdemo_finger["English"]["user_id"] = "";
	$placeHoldersdemo_finger["English"]["user_id"] = "";
	$fieldLabelsdemo_finger["English"]["finger_id"] = "Finger Id";
	$fieldToolTipsdemo_finger["English"]["finger_id"] = "";
	$placeHoldersdemo_finger["English"]["finger_id"] = "";
	$fieldLabelsdemo_finger["English"]["finger_data"] = "Finger Data";
	$fieldToolTipsdemo_finger["English"]["finger_data"] = "";
	$placeHoldersdemo_finger["English"]["finger_data"] = "";
	if (count($fieldToolTipsdemo_finger["English"]))
		$tdatademo_finger[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdemo_finger[""] = array();
	$fieldToolTipsdemo_finger[""] = array();
	$placeHoldersdemo_finger[""] = array();
	$pageTitlesdemo_finger[""] = array();
	if (count($fieldToolTipsdemo_finger[""]))
		$tdatademo_finger[".isUseToolTips"] = true;
}


	$tdatademo_finger[".NCSearch"] = true;



$tdatademo_finger[".shortTableName"] = "demo_finger";
$tdatademo_finger[".nSecOptions"] = 0;
$tdatademo_finger[".recsPerRowPrint"] = 1;
$tdatademo_finger[".mainTableOwnerID"] = "";
$tdatademo_finger[".moveNext"] = 1;
$tdatademo_finger[".entityType"] = 0;

$tdatademo_finger[".strOriginalTableName"] = "demo_finger";

	



$tdatademo_finger[".showAddInPopup"] = false;

$tdatademo_finger[".showEditInPopup"] = false;

$tdatademo_finger[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatademo_finger[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatademo_finger[".fieldsForRegister"] = array();

$tdatademo_finger[".listAjax"] = false;

	$tdatademo_finger[".audit"] = false;

	$tdatademo_finger[".locking"] = false;

$tdatademo_finger[".edit"] = true;
$tdatademo_finger[".afterEditAction"] = 1;
$tdatademo_finger[".closePopupAfterEdit"] = 1;
$tdatademo_finger[".afterEditActionDetTable"] = "";

$tdatademo_finger[".add"] = true;
$tdatademo_finger[".afterAddAction"] = 1;
$tdatademo_finger[".closePopupAfterAdd"] = 1;
$tdatademo_finger[".afterAddActionDetTable"] = "";

$tdatademo_finger[".list"] = true;

$tdatademo_finger[".inlineEdit"] = true;


$tdatademo_finger[".reorderRecordsByHeader"] = true;


$tdatademo_finger[".exportFormatting"] = 2;
$tdatademo_finger[".exportDelimiter"] = ",";
		
$tdatademo_finger[".inlineAdd"] = true;
$tdatademo_finger[".view"] = true;

$tdatademo_finger[".import"] = true;

$tdatademo_finger[".exportTo"] = true;

$tdatademo_finger[".printFriendly"] = true;

$tdatademo_finger[".delete"] = true;

$tdatademo_finger[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatademo_finger[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatademo_finger[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatademo_finger[".searchSaving"] = false;
//

$tdatademo_finger[".showSearchPanel"] = true;
		$tdatademo_finger[".flexibleSearch"] = true;

$tdatademo_finger[".isUseAjaxSuggest"] = true;

$tdatademo_finger[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdatademo_finger[".ajaxCodeSnippetAdded"] = false;

$tdatademo_finger[".buttonsAdded"] = false;

$tdatademo_finger[".addPageEvents"] = false;

// use timepicker for search panel
$tdatademo_finger[".isUseTimeForSearch"] = false;



$tdatademo_finger[".badgeColor"] = "CD853F";


$tdatademo_finger[".allSearchFields"] = array();
$tdatademo_finger[".filterFields"] = array();
$tdatademo_finger[".requiredSearchFields"] = array();

$tdatademo_finger[".allSearchFields"][] = "user_id";
	$tdatademo_finger[".allSearchFields"][] = "finger_id";
	$tdatademo_finger[".allSearchFields"][] = "finger_data";
	

$tdatademo_finger[".googleLikeFields"] = array();
$tdatademo_finger[".googleLikeFields"][] = "user_id";
$tdatademo_finger[".googleLikeFields"][] = "finger_id";
$tdatademo_finger[".googleLikeFields"][] = "finger_data";


$tdatademo_finger[".advSearchFields"] = array();
$tdatademo_finger[".advSearchFields"][] = "user_id";
$tdatademo_finger[".advSearchFields"][] = "finger_id";
$tdatademo_finger[".advSearchFields"][] = "finger_data";

$tdatademo_finger[".tableType"] = "list";

$tdatademo_finger[".printerPageOrientation"] = 0;
$tdatademo_finger[".nPrinterPageScale"] = 100;

$tdatademo_finger[".nPrinterSplitRecords"] = 40;

$tdatademo_finger[".nPrinterPDFSplitRecords"] = 40;



$tdatademo_finger[".geocodingEnabled"] = false;





$tdatademo_finger[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatademo_finger[".pageSize"] = 20;

$tdatademo_finger[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatademo_finger[".strOrderBy"] = $tstrOrderBy;

$tdatademo_finger[".orderindexes"] = array();

$tdatademo_finger[".sqlHead"] = "SELECT user_id,  	finger_id,  	finger_data";
$tdatademo_finger[".sqlFrom"] = "FROM demo_finger";
$tdatademo_finger[".sqlWhereExpr"] = "";
$tdatademo_finger[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatademo_finger[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatademo_finger[".arrGroupsPerPage"] = $arrGPP;

$tdatademo_finger[".highlightSearchResults"] = true;

$tableKeysdemo_finger = array();
$tableKeysdemo_finger[] = "user_id";
$tdatademo_finger[".Keys"] = $tableKeysdemo_finger;

$tdatademo_finger[".listFields"] = array();
$tdatademo_finger[".listFields"][] = "user_id";
$tdatademo_finger[".listFields"][] = "finger_id";
$tdatademo_finger[".listFields"][] = "finger_data";

$tdatademo_finger[".hideMobileList"] = array();


$tdatademo_finger[".viewFields"] = array();
$tdatademo_finger[".viewFields"][] = "user_id";
$tdatademo_finger[".viewFields"][] = "finger_id";
$tdatademo_finger[".viewFields"][] = "finger_data";

$tdatademo_finger[".addFields"] = array();
$tdatademo_finger[".addFields"][] = "user_id";
$tdatademo_finger[".addFields"][] = "finger_id";
$tdatademo_finger[".addFields"][] = "finger_data";

$tdatademo_finger[".masterListFields"] = array();
$tdatademo_finger[".masterListFields"][] = "user_id";
$tdatademo_finger[".masterListFields"][] = "finger_id";
$tdatademo_finger[".masterListFields"][] = "finger_data";

$tdatademo_finger[".inlineAddFields"] = array();
$tdatademo_finger[".inlineAddFields"][] = "user_id";
$tdatademo_finger[".inlineAddFields"][] = "finger_id";
$tdatademo_finger[".inlineAddFields"][] = "finger_data";

$tdatademo_finger[".editFields"] = array();
$tdatademo_finger[".editFields"][] = "user_id";
$tdatademo_finger[".editFields"][] = "finger_id";
$tdatademo_finger[".editFields"][] = "finger_data";

$tdatademo_finger[".inlineEditFields"] = array();
$tdatademo_finger[".inlineEditFields"][] = "user_id";
$tdatademo_finger[".inlineEditFields"][] = "finger_id";
$tdatademo_finger[".inlineEditFields"][] = "finger_data";

$tdatademo_finger[".updateSelectedFields"] = array();
$tdatademo_finger[".updateSelectedFields"][] = "user_id";
$tdatademo_finger[".updateSelectedFields"][] = "finger_id";
$tdatademo_finger[".updateSelectedFields"][] = "finger_data";


$tdatademo_finger[".exportFields"] = array();
$tdatademo_finger[".exportFields"][] = "user_id";
$tdatademo_finger[".exportFields"][] = "finger_id";
$tdatademo_finger[".exportFields"][] = "finger_data";

$tdatademo_finger[".importFields"] = array();
$tdatademo_finger[".importFields"][] = "user_id";
$tdatademo_finger[".importFields"][] = "finger_id";
$tdatademo_finger[".importFields"][] = "finger_data";

$tdatademo_finger[".printFields"] = array();
$tdatademo_finger[".printFields"][] = "user_id";
$tdatademo_finger[".printFields"][] = "finger_id";
$tdatademo_finger[".printFields"][] = "finger_data";


//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "demo_finger";
	$fdata["Label"] = GetFieldLabel("demo_finger","user_id");
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

		$fdata["strField"] = "user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_id";

	
	
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




	$tdatademo_finger["user_id"] = $fdata;
//	finger_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "finger_id";
	$fdata["GoodName"] = "finger_id";
	$fdata["ownerTable"] = "demo_finger";
	$fdata["Label"] = GetFieldLabel("demo_finger","finger_id");
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

		$fdata["strField"] = "finger_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "finger_id";

	
	
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




	$tdatademo_finger["finger_id"] = $fdata;
//	finger_data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "finger_data";
	$fdata["GoodName"] = "finger_data";
	$fdata["ownerTable"] = "demo_finger";
	$fdata["Label"] = GetFieldLabel("demo_finger","finger_data");
	$fdata["FieldType"] = 201;

	
	
	
			
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

		$fdata["strField"] = "finger_data";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "finger_data";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdatademo_finger["finger_data"] = $fdata;


$tables_data["demo_finger"]=&$tdatademo_finger;
$field_labels["demo_finger"] = &$fieldLabelsdemo_finger;
$fieldToolTips["demo_finger"] = &$fieldToolTipsdemo_finger;
$placeHolders["demo_finger"] = &$placeHoldersdemo_finger;
$page_titles["demo_finger"] = &$pageTitlesdemo_finger;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["demo_finger"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["demo_finger"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_demo_finger()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "user_id,  	finger_id,  	finger_data";
$proto0["m_strFrom"] = "FROM demo_finger";
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
	"m_strName" => "user_id",
	"m_strTable" => "demo_finger",
	"m_srcTableName" => "demo_finger"
));

$proto6["m_sql"] = "user_id";
$proto6["m_srcTableName"] = "demo_finger";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "finger_id",
	"m_strTable" => "demo_finger",
	"m_srcTableName" => "demo_finger"
));

$proto8["m_sql"] = "finger_id";
$proto8["m_srcTableName"] = "demo_finger";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "finger_data",
	"m_strTable" => "demo_finger",
	"m_srcTableName" => "demo_finger"
));

$proto10["m_sql"] = "finger_data";
$proto10["m_srcTableName"] = "demo_finger";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "demo_finger";
$proto13["m_srcTableName"] = "demo_finger";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "user_id";
$proto13["m_columns"][] = "finger_id";
$proto13["m_columns"][] = "finger_data";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "demo_finger";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "demo_finger";
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
$proto0["m_srcTableName"]="demo_finger";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_demo_finger = createSqlQuery_demo_finger();


	
		;

			

$tdatademo_finger[".sqlquery"] = $queryData_demo_finger;

$tableEvents["demo_finger"] = new eventsBase;
$tdatademo_finger[".hasEvents"] = false;

?>