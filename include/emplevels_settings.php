<?php
require_once(getabspath("classes/cipherer.php"));




$tdataemplevels = array();
	$tdataemplevels[".truncateText"] = true;
	$tdataemplevels[".NumberOfChars"] = 80;
	$tdataemplevels[".ShortName"] = "emplevels";
	$tdataemplevels[".OwnerID"] = "";
	$tdataemplevels[".OriginalTable"] = "emplevels";

//	field labels
$fieldLabelsemplevels = array();
$fieldToolTipsemplevels = array();
$pageTitlesemplevels = array();
$placeHoldersemplevels = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsemplevels["English"] = array();
	$fieldToolTipsemplevels["English"] = array();
	$placeHoldersemplevels["English"] = array();
	$pageTitlesemplevels["English"] = array();
	$fieldLabelsemplevels["English"]["LevID"] = "Lev ID";
	$fieldToolTipsemplevels["English"]["LevID"] = "";
	$placeHoldersemplevels["English"]["LevID"] = "";
	$fieldLabelsemplevels["English"]["Level"] = "Level";
	$fieldToolTipsemplevels["English"]["Level"] = "";
	$placeHoldersemplevels["English"]["Level"] = "";
	$fieldLabelsemplevels["English"]["Remarks"] = "Remarks";
	$fieldToolTipsemplevels["English"]["Remarks"] = "";
	$placeHoldersemplevels["English"]["Remarks"] = "";
	if (count($fieldToolTipsemplevels["English"]))
		$tdataemplevels[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsemplevels[""] = array();
	$fieldToolTipsemplevels[""] = array();
	$placeHoldersemplevels[""] = array();
	$pageTitlesemplevels[""] = array();
	if (count($fieldToolTipsemplevels[""]))
		$tdataemplevels[".isUseToolTips"] = true;
}


	$tdataemplevels[".NCSearch"] = true;



$tdataemplevels[".shortTableName"] = "emplevels";
$tdataemplevels[".nSecOptions"] = 0;
$tdataemplevels[".recsPerRowPrint"] = 1;
$tdataemplevels[".mainTableOwnerID"] = "";
$tdataemplevels[".moveNext"] = 1;
$tdataemplevels[".entityType"] = 0;

$tdataemplevels[".strOriginalTableName"] = "emplevels";

	



$tdataemplevels[".showAddInPopup"] = false;

$tdataemplevels[".showEditInPopup"] = false;

$tdataemplevels[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataemplevels[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataemplevels[".fieldsForRegister"] = array();

$tdataemplevels[".listAjax"] = false;

	$tdataemplevels[".audit"] = false;

	$tdataemplevels[".locking"] = false;

$tdataemplevels[".edit"] = true;
$tdataemplevels[".afterEditAction"] = 0;
$tdataemplevels[".closePopupAfterEdit"] = 1;
$tdataemplevels[".afterEditActionDetTable"] = "";

$tdataemplevels[".add"] = true;
$tdataemplevels[".afterAddAction"] = 0;
$tdataemplevels[".closePopupAfterAdd"] = 1;
$tdataemplevels[".afterAddActionDetTable"] = "";

$tdataemplevels[".list"] = true;



$tdataemplevels[".reorderRecordsByHeader"] = true;


$tdataemplevels[".exportFormatting"] = 2;
$tdataemplevels[".exportDelimiter"] = ",";
		
$tdataemplevels[".view"] = true;

$tdataemplevels[".import"] = true;

$tdataemplevels[".exportTo"] = true;

$tdataemplevels[".printFriendly"] = true;

$tdataemplevels[".delete"] = true;

$tdataemplevels[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataemplevels[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataemplevels[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataemplevels[".searchSaving"] = false;
//

$tdataemplevels[".showSearchPanel"] = true;
		$tdataemplevels[".flexibleSearch"] = true;

$tdataemplevels[".isUseAjaxSuggest"] = true;

$tdataemplevels[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																							

$tdataemplevels[".ajaxCodeSnippetAdded"] = false;

$tdataemplevels[".buttonsAdded"] = false;

$tdataemplevels[".addPageEvents"] = false;

// use timepicker for search panel
$tdataemplevels[".isUseTimeForSearch"] = false;




$tdataemplevels[".detailsLinksOnList"] = "1";

$tdataemplevels[".allSearchFields"] = array();
$tdataemplevels[".filterFields"] = array();
$tdataemplevels[".requiredSearchFields"] = array();

$tdataemplevels[".allSearchFields"][] = "LevID";
	$tdataemplevels[".allSearchFields"][] = "Level";
	$tdataemplevels[".allSearchFields"][] = "Remarks";
	

$tdataemplevels[".googleLikeFields"] = array();
$tdataemplevels[".googleLikeFields"][] = "LevID";
$tdataemplevels[".googleLikeFields"][] = "Level";
$tdataemplevels[".googleLikeFields"][] = "Remarks";


$tdataemplevels[".advSearchFields"] = array();
$tdataemplevels[".advSearchFields"][] = "LevID";
$tdataemplevels[".advSearchFields"][] = "Level";
$tdataemplevels[".advSearchFields"][] = "Remarks";

$tdataemplevels[".tableType"] = "list";

$tdataemplevels[".printerPageOrientation"] = 0;
$tdataemplevels[".nPrinterPageScale"] = 100;

$tdataemplevels[".nPrinterSplitRecords"] = 40;

$tdataemplevels[".nPrinterPDFSplitRecords"] = 40;



$tdataemplevels[".geocodingEnabled"] = false;





$tdataemplevels[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataemplevels[".pageSize"] = 20;

$tdataemplevels[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataemplevels[".strOrderBy"] = $tstrOrderBy;

$tdataemplevels[".orderindexes"] = array();

$tdataemplevels[".sqlHead"] = "SELECT LevID,  	`Level`,  	Remarks";
$tdataemplevels[".sqlFrom"] = "FROM emplevels";
$tdataemplevels[".sqlWhereExpr"] = "";
$tdataemplevels[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataemplevels[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataemplevels[".arrGroupsPerPage"] = $arrGPP;

$tdataemplevels[".highlightSearchResults"] = true;

$tableKeysemplevels = array();
$tableKeysemplevels[] = "LevID";
$tdataemplevels[".Keys"] = $tableKeysemplevels;

$tdataemplevels[".listFields"] = array();
$tdataemplevels[".listFields"][] = "LevID";
$tdataemplevels[".listFields"][] = "Level";
$tdataemplevels[".listFields"][] = "Remarks";

$tdataemplevels[".hideMobileList"] = array();


$tdataemplevels[".viewFields"] = array();
$tdataemplevels[".viewFields"][] = "LevID";
$tdataemplevels[".viewFields"][] = "Level";
$tdataemplevels[".viewFields"][] = "Remarks";

$tdataemplevels[".addFields"] = array();
$tdataemplevels[".addFields"][] = "Level";
$tdataemplevels[".addFields"][] = "Remarks";

$tdataemplevels[".masterListFields"] = array();
$tdataemplevels[".masterListFields"][] = "LevID";
$tdataemplevels[".masterListFields"][] = "Level";
$tdataemplevels[".masterListFields"][] = "Remarks";

$tdataemplevels[".inlineAddFields"] = array();
$tdataemplevels[".inlineAddFields"][] = "Level";
$tdataemplevels[".inlineAddFields"][] = "Remarks";

$tdataemplevels[".editFields"] = array();
$tdataemplevels[".editFields"][] = "Level";
$tdataemplevels[".editFields"][] = "Remarks";

$tdataemplevels[".inlineEditFields"] = array();
$tdataemplevels[".inlineEditFields"][] = "Level";
$tdataemplevels[".inlineEditFields"][] = "Remarks";

$tdataemplevels[".updateSelectedFields"] = array();
$tdataemplevels[".updateSelectedFields"][] = "Level";
$tdataemplevels[".updateSelectedFields"][] = "Remarks";


$tdataemplevels[".exportFields"] = array();
$tdataemplevels[".exportFields"][] = "LevID";
$tdataemplevels[".exportFields"][] = "Level";
$tdataemplevels[".exportFields"][] = "Remarks";

$tdataemplevels[".importFields"] = array();
$tdataemplevels[".importFields"][] = "LevID";
$tdataemplevels[".importFields"][] = "Level";
$tdataemplevels[".importFields"][] = "Remarks";

$tdataemplevels[".printFields"] = array();
$tdataemplevels[".printFields"][] = "LevID";
$tdataemplevels[".printFields"][] = "Level";
$tdataemplevels[".printFields"][] = "Remarks";


//	LevID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LevID";
	$fdata["GoodName"] = "LevID";
	$fdata["ownerTable"] = "emplevels";
	$fdata["Label"] = GetFieldLabel("emplevels","LevID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LevID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LevID";

	
	
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




	$tdataemplevels["LevID"] = $fdata;
//	Level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Level";
	$fdata["GoodName"] = "Level";
	$fdata["ownerTable"] = "emplevels";
	$fdata["Label"] = GetFieldLabel("emplevels","Level");
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

		$fdata["strField"] = "Level";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Level`";

	
	
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
			$edata["EditParams"].= " maxlength=25";

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




	$tdataemplevels["Level"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "emplevels";
	$fdata["Label"] = GetFieldLabel("emplevels","Remarks");
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

		$fdata["strField"] = "Remarks";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Remarks";

	
	
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




	$tdataemplevels["Remarks"] = $fdata;


$tables_data["emplevels"]=&$tdataemplevels;
$field_labels["emplevels"] = &$fieldLabelsemplevels;
$fieldToolTips["emplevels"] = &$fieldToolTipsemplevels;
$placeHolders["emplevels"] = &$placeHoldersemplevels;
$page_titles["emplevels"] = &$pageTitlesemplevels;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["emplevels"] = array();
//	empdeminimis
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="empdeminimis";
		$detailsParam["dOriginalTable"] = "empdeminimis";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "empdeminimis";
	$detailsParam["dCaptionTable"] = GetTableCaption("empdeminimis");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["emplevels"][$dIndex] = $detailsParam;

	
		$detailsTablesData["emplevels"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["emplevels"][$dIndex]["masterKeys"][]="LevID";

				$detailsTablesData["emplevels"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["emplevels"][$dIndex]["detailKeys"][]="LevID";

// tables which are master tables for current table (detail)
$masterTablesData["emplevels"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_emplevels()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LevID,  	`Level`,  	Remarks";
$proto0["m_strFrom"] = "FROM emplevels";
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
	"m_strName" => "LevID",
	"m_strTable" => "emplevels",
	"m_srcTableName" => "emplevels"
));

$proto6["m_sql"] = "LevID";
$proto6["m_srcTableName"] = "emplevels";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Level",
	"m_strTable" => "emplevels",
	"m_srcTableName" => "emplevels"
));

$proto8["m_sql"] = "`Level`";
$proto8["m_srcTableName"] = "emplevels";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "emplevels",
	"m_srcTableName" => "emplevels"
));

$proto10["m_sql"] = "Remarks";
$proto10["m_srcTableName"] = "emplevels";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "emplevels";
$proto13["m_srcTableName"] = "emplevels";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "LevID";
$proto13["m_columns"][] = "Level";
$proto13["m_columns"][] = "Remarks";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "emplevels";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "emplevels";
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
$proto0["m_srcTableName"]="emplevels";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_emplevels = createSqlQuery_emplevels();


	
		;

			

$tdataemplevels[".sqlquery"] = $queryData_emplevels;

$tableEvents["emplevels"] = new eventsBase;
$tdataemplevels[".hasEvents"] = false;

?>