<?php
require_once(getabspath("classes/cipherer.php"));




$tdataleveldrops = array();
	$tdataleveldrops[".truncateText"] = true;
	$tdataleveldrops[".NumberOfChars"] = 80;
	$tdataleveldrops[".ShortName"] = "leveldrops";
	$tdataleveldrops[".OwnerID"] = "";
	$tdataleveldrops[".OriginalTable"] = "leveldrops";

//	field labels
$fieldLabelsleveldrops = array();
$fieldToolTipsleveldrops = array();
$pageTitlesleveldrops = array();
$placeHoldersleveldrops = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsleveldrops["English"] = array();
	$fieldToolTipsleveldrops["English"] = array();
	$placeHoldersleveldrops["English"] = array();
	$pageTitlesleveldrops["English"] = array();
	$fieldLabelsleveldrops["English"]["LevID"] = "Lev ID";
	$fieldToolTipsleveldrops["English"]["LevID"] = "";
	$placeHoldersleveldrops["English"]["LevID"] = "";
	$fieldLabelsleveldrops["English"]["Level"] = "Level";
	$fieldToolTipsleveldrops["English"]["Level"] = "";
	$placeHoldersleveldrops["English"]["Level"] = "";
	$fieldLabelsleveldrops["English"]["TotalDeMinimis"] = "Total De Minimis";
	$fieldToolTipsleveldrops["English"]["TotalDeMinimis"] = "";
	$placeHoldersleveldrops["English"]["TotalDeMinimis"] = "";
	if (count($fieldToolTipsleveldrops["English"]))
		$tdataleveldrops[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsleveldrops[""] = array();
	$fieldToolTipsleveldrops[""] = array();
	$placeHoldersleveldrops[""] = array();
	$pageTitlesleveldrops[""] = array();
	if (count($fieldToolTipsleveldrops[""]))
		$tdataleveldrops[".isUseToolTips"] = true;
}


	$tdataleveldrops[".NCSearch"] = true;



$tdataleveldrops[".shortTableName"] = "leveldrops";
$tdataleveldrops[".nSecOptions"] = 0;
$tdataleveldrops[".recsPerRowPrint"] = 1;
$tdataleveldrops[".mainTableOwnerID"] = "";
$tdataleveldrops[".moveNext"] = 1;
$tdataleveldrops[".entityType"] = 0;

$tdataleveldrops[".strOriginalTableName"] = "leveldrops";

	



$tdataleveldrops[".showAddInPopup"] = false;

$tdataleveldrops[".showEditInPopup"] = false;

$tdataleveldrops[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataleveldrops[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataleveldrops[".fieldsForRegister"] = array();

$tdataleveldrops[".listAjax"] = false;

	$tdataleveldrops[".audit"] = false;

	$tdataleveldrops[".locking"] = false;


$tdataleveldrops[".add"] = true;
$tdataleveldrops[".afterAddAction"] = 1;
$tdataleveldrops[".closePopupAfterAdd"] = 1;
$tdataleveldrops[".afterAddActionDetTable"] = "";




$tdataleveldrops[".reorderRecordsByHeader"] = true;








$tdataleveldrops[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataleveldrops[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataleveldrops[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataleveldrops[".searchSaving"] = false;
//

$tdataleveldrops[".showSearchPanel"] = true;
		$tdataleveldrops[".flexibleSearch"] = true;

$tdataleveldrops[".isUseAjaxSuggest"] = true;

$tdataleveldrops[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																					

$tdataleveldrops[".ajaxCodeSnippetAdded"] = false;

$tdataleveldrops[".buttonsAdded"] = false;

$tdataleveldrops[".addPageEvents"] = false;

// use timepicker for search panel
$tdataleveldrops[".isUseTimeForSearch"] = false;





$tdataleveldrops[".allSearchFields"] = array();
$tdataleveldrops[".filterFields"] = array();
$tdataleveldrops[".requiredSearchFields"] = array();



$tdataleveldrops[".googleLikeFields"] = array();
$tdataleveldrops[".googleLikeFields"][] = "LevID";
$tdataleveldrops[".googleLikeFields"][] = "Level";
$tdataleveldrops[".googleLikeFields"][] = "TotalDeMinimis";



$tdataleveldrops[".tableType"] = "list";

$tdataleveldrops[".printerPageOrientation"] = 0;
$tdataleveldrops[".nPrinterPageScale"] = 100;

$tdataleveldrops[".nPrinterSplitRecords"] = 40;

$tdataleveldrops[".nPrinterPDFSplitRecords"] = 40;



$tdataleveldrops[".geocodingEnabled"] = false;





$tdataleveldrops[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataleveldrops[".pageSize"] = 20;

$tdataleveldrops[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataleveldrops[".strOrderBy"] = $tstrOrderBy;

$tdataleveldrops[".orderindexes"] = array();

$tdataleveldrops[".sqlHead"] = "SELECT LevID,  	`Level`,  	TotalDeMinimis";
$tdataleveldrops[".sqlFrom"] = "FROM leveldrops";
$tdataleveldrops[".sqlWhereExpr"] = "";
$tdataleveldrops[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataleveldrops[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataleveldrops[".arrGroupsPerPage"] = $arrGPP;

$tdataleveldrops[".highlightSearchResults"] = true;

$tableKeysleveldrops = array();
$tdataleveldrops[".Keys"] = $tableKeysleveldrops;

$tdataleveldrops[".listFields"] = array();
$tdataleveldrops[".listFields"][] = "LevID";
$tdataleveldrops[".listFields"][] = "Level";
$tdataleveldrops[".listFields"][] = "TotalDeMinimis";

$tdataleveldrops[".hideMobileList"] = array();


$tdataleveldrops[".viewFields"] = array();
$tdataleveldrops[".viewFields"][] = "LevID";
$tdataleveldrops[".viewFields"][] = "Level";
$tdataleveldrops[".viewFields"][] = "TotalDeMinimis";

$tdataleveldrops[".addFields"] = array();
$tdataleveldrops[".addFields"][] = "LevID";
$tdataleveldrops[".addFields"][] = "Level";
$tdataleveldrops[".addFields"][] = "TotalDeMinimis";

$tdataleveldrops[".masterListFields"] = array();
$tdataleveldrops[".masterListFields"][] = "LevID";
$tdataleveldrops[".masterListFields"][] = "Level";
$tdataleveldrops[".masterListFields"][] = "TotalDeMinimis";

$tdataleveldrops[".inlineAddFields"] = array();
$tdataleveldrops[".inlineAddFields"][] = "LevID";
$tdataleveldrops[".inlineAddFields"][] = "Level";
$tdataleveldrops[".inlineAddFields"][] = "TotalDeMinimis";

$tdataleveldrops[".editFields"] = array();
$tdataleveldrops[".editFields"][] = "LevID";
$tdataleveldrops[".editFields"][] = "Level";
$tdataleveldrops[".editFields"][] = "TotalDeMinimis";

$tdataleveldrops[".inlineEditFields"] = array();
$tdataleveldrops[".inlineEditFields"][] = "LevID";
$tdataleveldrops[".inlineEditFields"][] = "Level";
$tdataleveldrops[".inlineEditFields"][] = "TotalDeMinimis";

$tdataleveldrops[".updateSelectedFields"] = array();
$tdataleveldrops[".updateSelectedFields"][] = "LevID";
$tdataleveldrops[".updateSelectedFields"][] = "Level";
$tdataleveldrops[".updateSelectedFields"][] = "TotalDeMinimis";


$tdataleveldrops[".exportFields"] = array();
$tdataleveldrops[".exportFields"][] = "LevID";
$tdataleveldrops[".exportFields"][] = "Level";
$tdataleveldrops[".exportFields"][] = "TotalDeMinimis";

$tdataleveldrops[".importFields"] = array();
$tdataleveldrops[".importFields"][] = "LevID";
$tdataleveldrops[".importFields"][] = "Level";
$tdataleveldrops[".importFields"][] = "TotalDeMinimis";

$tdataleveldrops[".printFields"] = array();
$tdataleveldrops[".printFields"][] = "LevID";
$tdataleveldrops[".printFields"][] = "Level";
$tdataleveldrops[".printFields"][] = "TotalDeMinimis";


//	LevID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LevID";
	$fdata["GoodName"] = "LevID";
	$fdata["ownerTable"] = "leveldrops";
	$fdata["Label"] = GetFieldLabel("leveldrops","LevID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
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








	$tdataleveldrops["LevID"] = $fdata;
//	Level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Level";
	$fdata["GoodName"] = "Level";
	$fdata["ownerTable"] = "leveldrops";
	$fdata["Label"] = GetFieldLabel("leveldrops","Level");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
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








	$tdataleveldrops["Level"] = $fdata;
//	TotalDeMinimis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TotalDeMinimis";
	$fdata["GoodName"] = "TotalDeMinimis";
	$fdata["ownerTable"] = "leveldrops";
	$fdata["Label"] = GetFieldLabel("leveldrops","TotalDeMinimis");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TotalDeMinimis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TotalDeMinimis";

	
	
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








	$tdataleveldrops["TotalDeMinimis"] = $fdata;


$tables_data["leveldrops"]=&$tdataleveldrops;
$field_labels["leveldrops"] = &$fieldLabelsleveldrops;
$fieldToolTips["leveldrops"] = &$fieldToolTipsleveldrops;
$placeHolders["leveldrops"] = &$placeHoldersleveldrops;
$page_titles["leveldrops"] = &$pageTitlesleveldrops;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["leveldrops"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["leveldrops"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_leveldrops()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LevID,  	`Level`,  	TotalDeMinimis";
$proto0["m_strFrom"] = "FROM leveldrops";
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
	"m_strTable" => "leveldrops",
	"m_srcTableName" => "leveldrops"
));

$proto6["m_sql"] = "LevID";
$proto6["m_srcTableName"] = "leveldrops";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Level",
	"m_strTable" => "leveldrops",
	"m_srcTableName" => "leveldrops"
));

$proto8["m_sql"] = "`Level`";
$proto8["m_srcTableName"] = "leveldrops";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalDeMinimis",
	"m_strTable" => "leveldrops",
	"m_srcTableName" => "leveldrops"
));

$proto10["m_sql"] = "TotalDeMinimis";
$proto10["m_srcTableName"] = "leveldrops";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "leveldrops";
$proto13["m_srcTableName"] = "leveldrops";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "LevID";
$proto13["m_columns"][] = "Level";
$proto13["m_columns"][] = "TotalDeMinimis";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "leveldrops";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "leveldrops";
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
$proto0["m_srcTableName"]="leveldrops";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_leveldrops = createSqlQuery_leveldrops();


	
		;

			

$tdataleveldrops[".sqlquery"] = $queryData_leveldrops;

$tableEvents["leveldrops"] = new eventsBase;
$tdataleveldrops[".hasEvents"] = false;

?>