<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalatesonrange = array();
	$tdatalatesonrange[".truncateText"] = true;
	$tdatalatesonrange[".NumberOfChars"] = 80;
	$tdatalatesonrange[".ShortName"] = "latesonrange";
	$tdatalatesonrange[".OwnerID"] = "";
	$tdatalatesonrange[".OriginalTable"] = "latesonrange";

//	field labels
$fieldLabelslatesonrange = array();
$fieldToolTipslatesonrange = array();
$pageTitleslatesonrange = array();
$placeHolderslatesonrange = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslatesonrange["English"] = array();
	$fieldToolTipslatesonrange["English"] = array();
	$placeHolderslatesonrange["English"] = array();
	$pageTitleslatesonrange["English"] = array();
	$fieldLabelslatesonrange["English"]["SDate"] = "Late Date";
	$fieldToolTipslatesonrange["English"]["SDate"] = "";
	$placeHolderslatesonrange["English"]["SDate"] = "";
	$fieldLabelslatesonrange["English"]["LateMins"] = "Late Mins";
	$fieldToolTipslatesonrange["English"]["LateMins"] = "";
	$placeHolderslatesonrange["English"]["LateMins"] = "";
	$fieldLabelslatesonrange["English"]["user_name"] = "Employee";
	$fieldToolTipslatesonrange["English"]["user_name"] = "";
	$placeHolderslatesonrange["English"]["user_name"] = "";
	if (count($fieldToolTipslatesonrange["English"]))
		$tdatalatesonrange[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslatesonrange[""] = array();
	$fieldToolTipslatesonrange[""] = array();
	$placeHolderslatesonrange[""] = array();
	$pageTitleslatesonrange[""] = array();
	$fieldLabelslatesonrange[""]["SDate"] = "SDate";
	$fieldToolTipslatesonrange[""]["SDate"] = "";
	$placeHolderslatesonrange[""]["SDate"] = "";
	$fieldLabelslatesonrange[""]["LateMins"] = "Late Mins";
	$fieldToolTipslatesonrange[""]["LateMins"] = "";
	$placeHolderslatesonrange[""]["LateMins"] = "";
	$fieldLabelslatesonrange[""]["user_name"] = "User Name";
	$fieldToolTipslatesonrange[""]["user_name"] = "";
	$placeHolderslatesonrange[""]["user_name"] = "";
	if (count($fieldToolTipslatesonrange[""]))
		$tdatalatesonrange[".isUseToolTips"] = true;
}


	$tdatalatesonrange[".NCSearch"] = true;



$tdatalatesonrange[".shortTableName"] = "latesonrange";
$tdatalatesonrange[".nSecOptions"] = 0;
$tdatalatesonrange[".recsPerRowPrint"] = 1;
$tdatalatesonrange[".mainTableOwnerID"] = "";
$tdatalatesonrange[".moveNext"] = 1;
$tdatalatesonrange[".entityType"] = 0;

$tdatalatesonrange[".strOriginalTableName"] = "latesonrange";

	



$tdatalatesonrange[".showAddInPopup"] = false;

$tdatalatesonrange[".showEditInPopup"] = false;

$tdatalatesonrange[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatalatesonrange[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalatesonrange[".fieldsForRegister"] = array();

$tdatalatesonrange[".listAjax"] = false;

	$tdatalatesonrange[".audit"] = false;

	$tdatalatesonrange[".locking"] = false;



$tdatalatesonrange[".list"] = true;



$tdatalatesonrange[".reorderRecordsByHeader"] = true;


$tdatalatesonrange[".exportFormatting"] = 2;
$tdatalatesonrange[".exportDelimiter"] = ",";
		


$tdatalatesonrange[".exportTo"] = true;

$tdatalatesonrange[".printFriendly"] = true;


$tdatalatesonrange[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatalatesonrange[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatalatesonrange[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatalatesonrange[".searchSaving"] = false;
//

$tdatalatesonrange[".showSearchPanel"] = true;
		$tdatalatesonrange[".flexibleSearch"] = true;

$tdatalatesonrange[".isUseAjaxSuggest"] = true;

$tdatalatesonrange[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdatalatesonrange[".ajaxCodeSnippetAdded"] = false;

$tdatalatesonrange[".buttonsAdded"] = false;

$tdatalatesonrange[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalatesonrange[".isUseTimeForSearch"] = false;





$tdatalatesonrange[".allSearchFields"] = array();
$tdatalatesonrange[".filterFields"] = array();
$tdatalatesonrange[".requiredSearchFields"] = array();

$tdatalatesonrange[".allSearchFields"][] = "SDate";
	$tdatalatesonrange[".allSearchFields"][] = "user_name";
	$tdatalatesonrange[".allSearchFields"][] = "LateMins";
	

$tdatalatesonrange[".googleLikeFields"] = array();
$tdatalatesonrange[".googleLikeFields"][] = "SDate";
$tdatalatesonrange[".googleLikeFields"][] = "LateMins";
$tdatalatesonrange[".googleLikeFields"][] = "user_name";


$tdatalatesonrange[".advSearchFields"] = array();
$tdatalatesonrange[".advSearchFields"][] = "SDate";
$tdatalatesonrange[".advSearchFields"][] = "user_name";
$tdatalatesonrange[".advSearchFields"][] = "LateMins";

$tdatalatesonrange[".tableType"] = "list";

$tdatalatesonrange[".printerPageOrientation"] = 0;
$tdatalatesonrange[".nPrinterPageScale"] = 100;

$tdatalatesonrange[".nPrinterSplitRecords"] = 40;

$tdatalatesonrange[".nPrinterPDFSplitRecords"] = 40;



$tdatalatesonrange[".geocodingEnabled"] = false;





$tdatalatesonrange[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatalatesonrange[".totalsFields"] = array();
$tdatalatesonrange[".totalsFields"][] = array(
	"fName" => "user_name",
	"numRows" => 0,
	"totalsType" => "COUNT",
	"viewFormat" => '');
$tdatalatesonrange[".totalsFields"][] = array(
	"fName" => "LateMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatalatesonrange[".pageSize"] = 20;

$tdatalatesonrange[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalatesonrange[".strOrderBy"] = $tstrOrderBy;

$tdatalatesonrange[".orderindexes"] = array();

$tdatalatesonrange[".sqlHead"] = "SELECT SDate,  LateMins,  user_name";
$tdatalatesonrange[".sqlFrom"] = "FROM latesonrange";
$tdatalatesonrange[".sqlWhereExpr"] = "";
$tdatalatesonrange[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalatesonrange[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalatesonrange[".arrGroupsPerPage"] = $arrGPP;

$tdatalatesonrange[".highlightSearchResults"] = true;

$tableKeyslatesonrange = array();
$tdatalatesonrange[".Keys"] = $tableKeyslatesonrange;

$tdatalatesonrange[".listFields"] = array();
$tdatalatesonrange[".listFields"][] = "SDate";
$tdatalatesonrange[".listFields"][] = "user_name";
$tdatalatesonrange[".listFields"][] = "LateMins";

$tdatalatesonrange[".hideMobileList"] = array();


$tdatalatesonrange[".viewFields"] = array();

$tdatalatesonrange[".addFields"] = array();

$tdatalatesonrange[".masterListFields"] = array();
$tdatalatesonrange[".masterListFields"][] = "SDate";
$tdatalatesonrange[".masterListFields"][] = "user_name";
$tdatalatesonrange[".masterListFields"][] = "LateMins";

$tdatalatesonrange[".inlineAddFields"] = array();

$tdatalatesonrange[".editFields"] = array();

$tdatalatesonrange[".inlineEditFields"] = array();

$tdatalatesonrange[".updateSelectedFields"] = array();


$tdatalatesonrange[".exportFields"] = array();
$tdatalatesonrange[".exportFields"][] = "SDate";
$tdatalatesonrange[".exportFields"][] = "user_name";
$tdatalatesonrange[".exportFields"][] = "LateMins";

$tdatalatesonrange[".importFields"] = array();

$tdatalatesonrange[".printFields"] = array();
$tdatalatesonrange[".printFields"][] = "SDate";
$tdatalatesonrange[".printFields"][] = "user_name";
$tdatalatesonrange[".printFields"][] = "LateMins";


//	SDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SDate";
	$fdata["GoodName"] = "SDate";
	$fdata["ownerTable"] = "latesonrange";
	$fdata["Label"] = GetFieldLabel("latesonrange","SDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 21;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatalatesonrange["SDate"] = $fdata;
//	LateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "LateMins";
	$fdata["GoodName"] = "LateMins";
	$fdata["ownerTable"] = "latesonrange";
	$fdata["Label"] = GetFieldLabel("latesonrange","LateMins");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LateMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LateMins";

	
	
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




	$tdatalatesonrange["LateMins"] = $fdata;
//	user_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "user_name";
	$fdata["GoodName"] = "user_name";
	$fdata["ownerTable"] = "latesonrange";
	$fdata["Label"] = GetFieldLabel("latesonrange","user_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_name";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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




	$tdatalatesonrange["user_name"] = $fdata;


$tables_data["latesonrange"]=&$tdatalatesonrange;
$field_labels["latesonrange"] = &$fieldLabelslatesonrange;
$fieldToolTips["latesonrange"] = &$fieldToolTipslatesonrange;
$placeHolders["latesonrange"] = &$placeHolderslatesonrange;
$page_titles["latesonrange"] = &$pageTitleslatesonrange;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["latesonrange"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["latesonrange"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_latesonrange()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "SDate,  LateMins,  user_name";
$proto0["m_strFrom"] = "FROM latesonrange";
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
	"m_strName" => "SDate",
	"m_strTable" => "latesonrange",
	"m_srcTableName" => "latesonrange"
));

$proto6["m_sql"] = "SDate";
$proto6["m_srcTableName"] = "latesonrange";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "LateMins",
	"m_strTable" => "latesonrange",
	"m_srcTableName" => "latesonrange"
));

$proto8["m_sql"] = "LateMins";
$proto8["m_srcTableName"] = "latesonrange";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "latesonrange",
	"m_srcTableName" => "latesonrange"
));

$proto10["m_sql"] = "user_name";
$proto10["m_srcTableName"] = "latesonrange";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "latesonrange";
$proto13["m_srcTableName"] = "latesonrange";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "ScID";
$proto13["m_columns"][] = "SDate";
$proto13["m_columns"][] = "EmployeeID";
$proto13["m_columns"][] = "LateMins";
$proto13["m_columns"][] = "user_name";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "latesonrange";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "latesonrange";
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
$proto0["m_srcTableName"]="latesonrange";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_latesonrange = createSqlQuery_latesonrange();


	
		;

			

$tdatalatesonrange[".sqlquery"] = $queryData_latesonrange;

$tableEvents["latesonrange"] = new eventsBase;
$tdatalatesonrange[".hasEvents"] = false;

?>