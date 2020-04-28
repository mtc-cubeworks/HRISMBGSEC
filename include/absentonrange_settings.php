<?php
require_once(getabspath("classes/cipherer.php"));




$tdataabsentonrange = array();
	$tdataabsentonrange[".truncateText"] = true;
	$tdataabsentonrange[".NumberOfChars"] = 80;
	$tdataabsentonrange[".ShortName"] = "absentonrange";
	$tdataabsentonrange[".OwnerID"] = "";
	$tdataabsentonrange[".OriginalTable"] = "absentonrange";

//	field labels
$fieldLabelsabsentonrange = array();
$fieldToolTipsabsentonrange = array();
$pageTitlesabsentonrange = array();
$placeHoldersabsentonrange = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsabsentonrange["English"] = array();
	$fieldToolTipsabsentonrange["English"] = array();
	$placeHoldersabsentonrange["English"] = array();
	$pageTitlesabsentonrange["English"] = array();
	$fieldLabelsabsentonrange["English"]["SDate"] = "Absent Date";
	$fieldToolTipsabsentonrange["English"]["SDate"] = "";
	$placeHoldersabsentonrange["English"]["SDate"] = "";
	$fieldLabelsabsentonrange["English"]["Absent"] = "Absent";
	$fieldToolTipsabsentonrange["English"]["Absent"] = "";
	$placeHoldersabsentonrange["English"]["Absent"] = "";
	$fieldLabelsabsentonrange["English"]["user_name"] = "Employee";
	$fieldToolTipsabsentonrange["English"]["user_name"] = "";
	$placeHoldersabsentonrange["English"]["user_name"] = "";
	if (count($fieldToolTipsabsentonrange["English"]))
		$tdataabsentonrange[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsabsentonrange[""] = array();
	$fieldToolTipsabsentonrange[""] = array();
	$placeHoldersabsentonrange[""] = array();
	$pageTitlesabsentonrange[""] = array();
	$fieldLabelsabsentonrange[""]["SDate"] = "SDate";
	$fieldToolTipsabsentonrange[""]["SDate"] = "";
	$placeHoldersabsentonrange[""]["SDate"] = "";
	$fieldLabelsabsentonrange[""]["Absent"] = "Absent";
	$fieldToolTipsabsentonrange[""]["Absent"] = "";
	$placeHoldersabsentonrange[""]["Absent"] = "";
	$fieldLabelsabsentonrange[""]["user_name"] = "User Name";
	$fieldToolTipsabsentonrange[""]["user_name"] = "";
	$placeHoldersabsentonrange[""]["user_name"] = "";
	if (count($fieldToolTipsabsentonrange[""]))
		$tdataabsentonrange[".isUseToolTips"] = true;
}


	$tdataabsentonrange[".NCSearch"] = true;



$tdataabsentonrange[".shortTableName"] = "absentonrange";
$tdataabsentonrange[".nSecOptions"] = 0;
$tdataabsentonrange[".recsPerRowPrint"] = 1;
$tdataabsentonrange[".mainTableOwnerID"] = "";
$tdataabsentonrange[".moveNext"] = 1;
$tdataabsentonrange[".entityType"] = 0;

$tdataabsentonrange[".strOriginalTableName"] = "absentonrange";

	



$tdataabsentonrange[".showAddInPopup"] = false;

$tdataabsentonrange[".showEditInPopup"] = false;

$tdataabsentonrange[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataabsentonrange[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataabsentonrange[".fieldsForRegister"] = array();

$tdataabsentonrange[".listAjax"] = false;

	$tdataabsentonrange[".audit"] = false;

	$tdataabsentonrange[".locking"] = false;



$tdataabsentonrange[".list"] = true;



$tdataabsentonrange[".reorderRecordsByHeader"] = true;


$tdataabsentonrange[".exportFormatting"] = 2;
$tdataabsentonrange[".exportDelimiter"] = ",";
		

$tdataabsentonrange[".import"] = true;

$tdataabsentonrange[".exportTo"] = true;

$tdataabsentonrange[".printFriendly"] = true;


$tdataabsentonrange[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataabsentonrange[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataabsentonrange[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataabsentonrange[".searchSaving"] = false;
//

$tdataabsentonrange[".showSearchPanel"] = true;
		$tdataabsentonrange[".flexibleSearch"] = true;

$tdataabsentonrange[".isUseAjaxSuggest"] = true;

$tdataabsentonrange[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdataabsentonrange[".ajaxCodeSnippetAdded"] = false;

$tdataabsentonrange[".buttonsAdded"] = false;

$tdataabsentonrange[".addPageEvents"] = false;

// use timepicker for search panel
$tdataabsentonrange[".isUseTimeForSearch"] = false;





$tdataabsentonrange[".allSearchFields"] = array();
$tdataabsentonrange[".filterFields"] = array();
$tdataabsentonrange[".requiredSearchFields"] = array();

$tdataabsentonrange[".allSearchFields"][] = "SDate";
	$tdataabsentonrange[".allSearchFields"][] = "user_name";
	$tdataabsentonrange[".allSearchFields"][] = "Absent";
	

$tdataabsentonrange[".googleLikeFields"] = array();
$tdataabsentonrange[".googleLikeFields"][] = "SDate";
$tdataabsentonrange[".googleLikeFields"][] = "Absent";
$tdataabsentonrange[".googleLikeFields"][] = "user_name";


$tdataabsentonrange[".advSearchFields"] = array();
$tdataabsentonrange[".advSearchFields"][] = "SDate";
$tdataabsentonrange[".advSearchFields"][] = "user_name";
$tdataabsentonrange[".advSearchFields"][] = "Absent";

$tdataabsentonrange[".tableType"] = "list";

$tdataabsentonrange[".printerPageOrientation"] = 0;
$tdataabsentonrange[".nPrinterPageScale"] = 100;

$tdataabsentonrange[".nPrinterSplitRecords"] = 40;

$tdataabsentonrange[".nPrinterPDFSplitRecords"] = 40;



$tdataabsentonrange[".geocodingEnabled"] = false;





$tdataabsentonrange[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdataabsentonrange[".totalsFields"] = array();
$tdataabsentonrange[".totalsFields"][] = array(
	"fName" => "user_name",
	"numRows" => 0,
	"totalsType" => "COUNT",
	"viewFormat" => '');
$tdataabsentonrange[".totalsFields"][] = array(
	"fName" => "Absent",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdataabsentonrange[".pageSize"] = 20;

$tdataabsentonrange[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataabsentonrange[".strOrderBy"] = $tstrOrderBy;

$tdataabsentonrange[".orderindexes"] = array();

$tdataabsentonrange[".sqlHead"] = "SELECT SDate,  Absent,  user_name";
$tdataabsentonrange[".sqlFrom"] = "FROM absentonrange";
$tdataabsentonrange[".sqlWhereExpr"] = "";
$tdataabsentonrange[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataabsentonrange[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataabsentonrange[".arrGroupsPerPage"] = $arrGPP;

$tdataabsentonrange[".highlightSearchResults"] = true;

$tableKeysabsentonrange = array();
$tdataabsentonrange[".Keys"] = $tableKeysabsentonrange;

$tdataabsentonrange[".listFields"] = array();
$tdataabsentonrange[".listFields"][] = "SDate";
$tdataabsentonrange[".listFields"][] = "user_name";
$tdataabsentonrange[".listFields"][] = "Absent";

$tdataabsentonrange[".hideMobileList"] = array();


$tdataabsentonrange[".viewFields"] = array();

$tdataabsentonrange[".addFields"] = array();

$tdataabsentonrange[".masterListFields"] = array();
$tdataabsentonrange[".masterListFields"][] = "SDate";
$tdataabsentonrange[".masterListFields"][] = "user_name";
$tdataabsentonrange[".masterListFields"][] = "Absent";

$tdataabsentonrange[".inlineAddFields"] = array();

$tdataabsentonrange[".editFields"] = array();

$tdataabsentonrange[".inlineEditFields"] = array();

$tdataabsentonrange[".updateSelectedFields"] = array();


$tdataabsentonrange[".exportFields"] = array();
$tdataabsentonrange[".exportFields"][] = "SDate";
$tdataabsentonrange[".exportFields"][] = "user_name";
$tdataabsentonrange[".exportFields"][] = "Absent";

$tdataabsentonrange[".importFields"] = array();
$tdataabsentonrange[".importFields"][] = "SDate";
$tdataabsentonrange[".importFields"][] = "Absent";
$tdataabsentonrange[".importFields"][] = "user_name";

$tdataabsentonrange[".printFields"] = array();
$tdataabsentonrange[".printFields"][] = "SDate";
$tdataabsentonrange[".printFields"][] = "user_name";
$tdataabsentonrange[".printFields"][] = "Absent";


//	SDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SDate";
	$fdata["GoodName"] = "SDate";
	$fdata["ownerTable"] = "absentonrange";
	$fdata["Label"] = GetFieldLabel("absentonrange","SDate");
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




	$tdataabsentonrange["SDate"] = $fdata;
//	Absent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Absent";
	$fdata["GoodName"] = "Absent";
	$fdata["ownerTable"] = "absentonrange";
	$fdata["Label"] = GetFieldLabel("absentonrange","Absent");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Absent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Absent";

	
	
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




	$tdataabsentonrange["Absent"] = $fdata;
//	user_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "user_name";
	$fdata["GoodName"] = "user_name";
	$fdata["ownerTable"] = "absentonrange";
	$fdata["Label"] = GetFieldLabel("absentonrange","user_name");
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




	$tdataabsentonrange["user_name"] = $fdata;


$tables_data["absentonrange"]=&$tdataabsentonrange;
$field_labels["absentonrange"] = &$fieldLabelsabsentonrange;
$fieldToolTips["absentonrange"] = &$fieldToolTipsabsentonrange;
$placeHolders["absentonrange"] = &$placeHoldersabsentonrange;
$page_titles["absentonrange"] = &$pageTitlesabsentonrange;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["absentonrange"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["absentonrange"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_absentonrange()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "SDate,  Absent,  user_name";
$proto0["m_strFrom"] = "FROM absentonrange";
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
	"m_strTable" => "absentonrange",
	"m_srcTableName" => "absentonrange"
));

$proto6["m_sql"] = "SDate";
$proto6["m_srcTableName"] = "absentonrange";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Absent",
	"m_strTable" => "absentonrange",
	"m_srcTableName" => "absentonrange"
));

$proto8["m_sql"] = "Absent";
$proto8["m_srcTableName"] = "absentonrange";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "absentonrange",
	"m_srcTableName" => "absentonrange"
));

$proto10["m_sql"] = "user_name";
$proto10["m_srcTableName"] = "absentonrange";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "absentonrange";
$proto13["m_srcTableName"] = "absentonrange";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "SDate";
$proto13["m_columns"][] = "EmployeeID";
$proto13["m_columns"][] = "Absent";
$proto13["m_columns"][] = "user_name";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "absentonrange";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "absentonrange";
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
$proto0["m_srcTableName"]="absentonrange";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_absentonrange = createSqlQuery_absentonrange();


	
		;

			

$tdataabsentonrange[".sqlquery"] = $queryData_absentonrange;

$tableEvents["absentonrange"] = new eventsBase;
$tdataabsentonrange[".hasEvents"] = false;

?>