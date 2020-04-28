<?php
require_once(getabspath("classes/cipherer.php"));




$tdatazots = array();
	$tdatazots[".truncateText"] = true;
	$tdatazots[".NumberOfChars"] = 80;
	$tdatazots[".ShortName"] = "zots";
	$tdatazots[".OwnerID"] = "";
	$tdatazots[".OriginalTable"] = "zots";

//	field labels
$fieldLabelszots = array();
$fieldToolTipszots = array();
$pageTitleszots = array();
$placeHolderszots = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelszots["English"] = array();
	$fieldToolTipszots["English"] = array();
	$placeHolderszots["English"] = array();
	$pageTitleszots["English"] = array();
	$fieldLabelszots["English"]["EnID"] = "En ID";
	$fieldToolTipszots["English"]["EnID"] = "";
	$placeHolderszots["English"]["EnID"] = "";
	$fieldLabelszots["English"]["EmployerName"] = "Employer Name";
	$fieldToolTipszots["English"]["EmployerName"] = "";
	$placeHolderszots["English"]["EmployerName"] = "";
	$fieldLabelszots["English"]["TotalOT"] = "Total OT";
	$fieldToolTipszots["English"]["TotalOT"] = "";
	$placeHolderszots["English"]["TotalOT"] = "";
	if (count($fieldToolTipszots["English"]))
		$tdatazots[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelszots[""] = array();
	$fieldToolTipszots[""] = array();
	$placeHolderszots[""] = array();
	$pageTitleszots[""] = array();
	$fieldLabelszots[""]["EnID"] = "En ID";
	$fieldToolTipszots[""]["EnID"] = "";
	$placeHolderszots[""]["EnID"] = "";
	$fieldLabelszots[""]["EmployerName"] = "Employer Name";
	$fieldToolTipszots[""]["EmployerName"] = "";
	$placeHolderszots[""]["EmployerName"] = "";
	$fieldLabelszots[""]["TotalOT"] = "Total OT";
	$fieldToolTipszots[""]["TotalOT"] = "";
	$placeHolderszots[""]["TotalOT"] = "";
	if (count($fieldToolTipszots[""]))
		$tdatazots[".isUseToolTips"] = true;
}


	$tdatazots[".NCSearch"] = true;



$tdatazots[".shortTableName"] = "zots";
$tdatazots[".nSecOptions"] = 0;
$tdatazots[".recsPerRowPrint"] = 1;
$tdatazots[".mainTableOwnerID"] = "";
$tdatazots[".moveNext"] = 1;
$tdatazots[".entityType"] = 0;

$tdatazots[".strOriginalTableName"] = "zots";

	



$tdatazots[".showAddInPopup"] = false;

$tdatazots[".showEditInPopup"] = false;

$tdatazots[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatazots[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatazots[".fieldsForRegister"] = array();

$tdatazots[".listAjax"] = false;

	$tdatazots[".audit"] = false;

	$tdatazots[".locking"] = false;



$tdatazots[".list"] = true;



$tdatazots[".reorderRecordsByHeader"] = true;


$tdatazots[".exportFormatting"] = 2;
$tdatazots[".exportDelimiter"] = ",";
		

$tdatazots[".import"] = true;

$tdatazots[".exportTo"] = true;

$tdatazots[".printFriendly"] = true;


$tdatazots[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatazots[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatazots[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatazots[".searchSaving"] = false;
//

$tdatazots[".showSearchPanel"] = true;
		$tdatazots[".flexibleSearch"] = true;

$tdatazots[".isUseAjaxSuggest"] = true;

$tdatazots[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdatazots[".ajaxCodeSnippetAdded"] = false;

$tdatazots[".buttonsAdded"] = false;

$tdatazots[".addPageEvents"] = false;

// use timepicker for search panel
$tdatazots[".isUseTimeForSearch"] = false;





$tdatazots[".allSearchFields"] = array();
$tdatazots[".filterFields"] = array();
$tdatazots[".requiredSearchFields"] = array();

$tdatazots[".allSearchFields"][] = "EnID";
	$tdatazots[".allSearchFields"][] = "EmployerName";
	$tdatazots[".allSearchFields"][] = "TotalOT";
	

$tdatazots[".googleLikeFields"] = array();
$tdatazots[".googleLikeFields"][] = "EnID";
$tdatazots[".googleLikeFields"][] = "EmployerName";
$tdatazots[".googleLikeFields"][] = "TotalOT";


$tdatazots[".advSearchFields"] = array();
$tdatazots[".advSearchFields"][] = "EnID";
$tdatazots[".advSearchFields"][] = "EmployerName";
$tdatazots[".advSearchFields"][] = "TotalOT";

$tdatazots[".tableType"] = "list";

$tdatazots[".printerPageOrientation"] = 0;
$tdatazots[".nPrinterPageScale"] = 100;

$tdatazots[".nPrinterSplitRecords"] = 40;

$tdatazots[".nPrinterPDFSplitRecords"] = 40;



$tdatazots[".geocodingEnabled"] = false;





$tdatazots[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatazots[".pageSize"] = 20;

$tdatazots[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatazots[".strOrderBy"] = $tstrOrderBy;

$tdatazots[".orderindexes"] = array();

$tdatazots[".sqlHead"] = "SELECT EnID,  	EmployerName,  	TotalOT";
$tdatazots[".sqlFrom"] = "FROM zots";
$tdatazots[".sqlWhereExpr"] = "";
$tdatazots[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatazots[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatazots[".arrGroupsPerPage"] = $arrGPP;

$tdatazots[".highlightSearchResults"] = true;

$tableKeyszots = array();
$tdatazots[".Keys"] = $tableKeyszots;

$tdatazots[".listFields"] = array();
$tdatazots[".listFields"][] = "EnID";
$tdatazots[".listFields"][] = "EmployerName";
$tdatazots[".listFields"][] = "TotalOT";

$tdatazots[".hideMobileList"] = array();


$tdatazots[".viewFields"] = array();
$tdatazots[".viewFields"][] = "EnID";
$tdatazots[".viewFields"][] = "EmployerName";
$tdatazots[".viewFields"][] = "TotalOT";

$tdatazots[".addFields"] = array();
$tdatazots[".addFields"][] = "EnID";
$tdatazots[".addFields"][] = "EmployerName";
$tdatazots[".addFields"][] = "TotalOT";

$tdatazots[".masterListFields"] = array();
$tdatazots[".masterListFields"][] = "EnID";
$tdatazots[".masterListFields"][] = "EmployerName";
$tdatazots[".masterListFields"][] = "TotalOT";

$tdatazots[".inlineAddFields"] = array();
$tdatazots[".inlineAddFields"][] = "EnID";
$tdatazots[".inlineAddFields"][] = "EmployerName";
$tdatazots[".inlineAddFields"][] = "TotalOT";

$tdatazots[".editFields"] = array();
$tdatazots[".editFields"][] = "EnID";
$tdatazots[".editFields"][] = "EmployerName";
$tdatazots[".editFields"][] = "TotalOT";

$tdatazots[".inlineEditFields"] = array();
$tdatazots[".inlineEditFields"][] = "EnID";
$tdatazots[".inlineEditFields"][] = "EmployerName";
$tdatazots[".inlineEditFields"][] = "TotalOT";

$tdatazots[".updateSelectedFields"] = array();
$tdatazots[".updateSelectedFields"][] = "EnID";
$tdatazots[".updateSelectedFields"][] = "EmployerName";
$tdatazots[".updateSelectedFields"][] = "TotalOT";


$tdatazots[".exportFields"] = array();
$tdatazots[".exportFields"][] = "EnID";
$tdatazots[".exportFields"][] = "EmployerName";
$tdatazots[".exportFields"][] = "TotalOT";

$tdatazots[".importFields"] = array();
$tdatazots[".importFields"][] = "EnID";
$tdatazots[".importFields"][] = "EmployerName";
$tdatazots[".importFields"][] = "TotalOT";

$tdatazots[".printFields"] = array();
$tdatazots[".printFields"][] = "EnID";
$tdatazots[".printFields"][] = "EmployerName";
$tdatazots[".printFields"][] = "TotalOT";


//	EnID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EnID";
	$fdata["GoodName"] = "EnID";
	$fdata["ownerTable"] = "zots";
	$fdata["Label"] = GetFieldLabel("zots","EnID");
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

		$fdata["strField"] = "EnID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EnID";

	
	
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




	$tdatazots["EnID"] = $fdata;
//	EmployerName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EmployerName";
	$fdata["GoodName"] = "EmployerName";
	$fdata["ownerTable"] = "zots";
	$fdata["Label"] = GetFieldLabel("zots","EmployerName");
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

		$fdata["strField"] = "EmployerName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmployerName";

	
	
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




	$tdatazots["EmployerName"] = $fdata;
//	TotalOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TotalOT";
	$fdata["GoodName"] = "TotalOT";
	$fdata["ownerTable"] = "zots";
	$fdata["Label"] = GetFieldLabel("zots","TotalOT");
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

		$fdata["strField"] = "TotalOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TotalOT";

	
	
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




	$tdatazots["TotalOT"] = $fdata;


$tables_data["zots"]=&$tdatazots;
$field_labels["zots"] = &$fieldLabelszots;
$fieldToolTips["zots"] = &$fieldToolTipszots;
$placeHolders["zots"] = &$placeHolderszots;
$page_titles["zots"] = &$pageTitleszots;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["zots"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["zots"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_zots()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EnID,  	EmployerName,  	TotalOT";
$proto0["m_strFrom"] = "FROM zots";
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
	"m_strName" => "EnID",
	"m_strTable" => "zots",
	"m_srcTableName" => "zots"
));

$proto6["m_sql"] = "EnID";
$proto6["m_srcTableName"] = "zots";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployerName",
	"m_strTable" => "zots",
	"m_srcTableName" => "zots"
));

$proto8["m_sql"] = "EmployerName";
$proto8["m_srcTableName"] = "zots";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalOT",
	"m_strTable" => "zots",
	"m_srcTableName" => "zots"
));

$proto10["m_sql"] = "TotalOT";
$proto10["m_srcTableName"] = "zots";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "zots";
$proto13["m_srcTableName"] = "zots";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "EnID";
$proto13["m_columns"][] = "EmployerName";
$proto13["m_columns"][] = "TotalOT";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "zots";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "zots";
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
$proto0["m_srcTableName"]="zots";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_zots = createSqlQuery_zots();


	
		;

			

$tdatazots[".sqlquery"] = $queryData_zots;

$tableEvents["zots"] = new eventsBase;
$tdatazots[".hasEvents"] = false;

?>