<?php
require_once(getabspath("classes/cipherer.php"));




$tdataleavesonrange = array();
	$tdataleavesonrange[".truncateText"] = true;
	$tdataleavesonrange[".NumberOfChars"] = 80;
	$tdataleavesonrange[".ShortName"] = "leavesonrange";
	$tdataleavesonrange[".OwnerID"] = "";
	$tdataleavesonrange[".OriginalTable"] = "leavesonrange";

//	field labels
$fieldLabelsleavesonrange = array();
$fieldToolTipsleavesonrange = array();
$pageTitlesleavesonrange = array();
$placeHoldersleavesonrange = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsleavesonrange["English"] = array();
	$fieldToolTipsleavesonrange["English"] = array();
	$placeHoldersleavesonrange["English"] = array();
	$pageTitlesleavesonrange["English"] = array();
	$fieldLabelsleavesonrange["English"]["LDate"] = "Leave Date";
	$fieldToolTipsleavesonrange["English"]["LDate"] = "";
	$placeHoldersleavesonrange["English"]["LDate"] = "";
	$fieldLabelsleavesonrange["English"]["NoDays"] = "Days";
	$fieldToolTipsleavesonrange["English"]["NoDays"] = "";
	$placeHoldersleavesonrange["English"]["NoDays"] = "";
	$fieldLabelsleavesonrange["English"]["user_name"] = "Employee";
	$fieldToolTipsleavesonrange["English"]["user_name"] = "";
	$placeHoldersleavesonrange["English"]["user_name"] = "";
	if (count($fieldToolTipsleavesonrange["English"]))
		$tdataleavesonrange[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsleavesonrange[""] = array();
	$fieldToolTipsleavesonrange[""] = array();
	$placeHoldersleavesonrange[""] = array();
	$pageTitlesleavesonrange[""] = array();
	$fieldLabelsleavesonrange[""]["LDate"] = "LDate";
	$fieldToolTipsleavesonrange[""]["LDate"] = "";
	$placeHoldersleavesonrange[""]["LDate"] = "";
	$fieldLabelsleavesonrange[""]["NoDays"] = "No Days";
	$fieldToolTipsleavesonrange[""]["NoDays"] = "";
	$placeHoldersleavesonrange[""]["NoDays"] = "";
	$fieldLabelsleavesonrange[""]["user_name"] = "User Name";
	$fieldToolTipsleavesonrange[""]["user_name"] = "";
	$placeHoldersleavesonrange[""]["user_name"] = "";
	if (count($fieldToolTipsleavesonrange[""]))
		$tdataleavesonrange[".isUseToolTips"] = true;
}


	$tdataleavesonrange[".NCSearch"] = true;



$tdataleavesonrange[".shortTableName"] = "leavesonrange";
$tdataleavesonrange[".nSecOptions"] = 0;
$tdataleavesonrange[".recsPerRowPrint"] = 1;
$tdataleavesonrange[".mainTableOwnerID"] = "";
$tdataleavesonrange[".moveNext"] = 1;
$tdataleavesonrange[".entityType"] = 0;

$tdataleavesonrange[".strOriginalTableName"] = "leavesonrange";

	



$tdataleavesonrange[".showAddInPopup"] = false;

$tdataleavesonrange[".showEditInPopup"] = false;

$tdataleavesonrange[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataleavesonrange[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataleavesonrange[".fieldsForRegister"] = array();

$tdataleavesonrange[".listAjax"] = false;

	$tdataleavesonrange[".audit"] = false;

	$tdataleavesonrange[".locking"] = false;



$tdataleavesonrange[".list"] = true;



$tdataleavesonrange[".reorderRecordsByHeader"] = true;


$tdataleavesonrange[".exportFormatting"] = 2;
$tdataleavesonrange[".exportDelimiter"] = ",";
		


$tdataleavesonrange[".exportTo"] = true;

$tdataleavesonrange[".printFriendly"] = true;


$tdataleavesonrange[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataleavesonrange[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataleavesonrange[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataleavesonrange[".searchSaving"] = false;
//

$tdataleavesonrange[".showSearchPanel"] = true;
		$tdataleavesonrange[".flexibleSearch"] = true;

$tdataleavesonrange[".isUseAjaxSuggest"] = true;

$tdataleavesonrange[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdataleavesonrange[".ajaxCodeSnippetAdded"] = false;

$tdataleavesonrange[".buttonsAdded"] = false;

$tdataleavesonrange[".addPageEvents"] = false;

// use timepicker for search panel
$tdataleavesonrange[".isUseTimeForSearch"] = false;





$tdataleavesonrange[".allSearchFields"] = array();
$tdataleavesonrange[".filterFields"] = array();
$tdataleavesonrange[".requiredSearchFields"] = array();

$tdataleavesonrange[".allSearchFields"][] = "LDate";
	$tdataleavesonrange[".allSearchFields"][] = "user_name";
	$tdataleavesonrange[".allSearchFields"][] = "NoDays";
	

$tdataleavesonrange[".googleLikeFields"] = array();
$tdataleavesonrange[".googleLikeFields"][] = "LDate";
$tdataleavesonrange[".googleLikeFields"][] = "NoDays";
$tdataleavesonrange[".googleLikeFields"][] = "user_name";


$tdataleavesonrange[".advSearchFields"] = array();
$tdataleavesonrange[".advSearchFields"][] = "LDate";
$tdataleavesonrange[".advSearchFields"][] = "user_name";
$tdataleavesonrange[".advSearchFields"][] = "NoDays";

$tdataleavesonrange[".tableType"] = "list";

$tdataleavesonrange[".printerPageOrientation"] = 0;
$tdataleavesonrange[".nPrinterPageScale"] = 100;

$tdataleavesonrange[".nPrinterSplitRecords"] = 40;

$tdataleavesonrange[".nPrinterPDFSplitRecords"] = 40;



$tdataleavesonrange[".geocodingEnabled"] = false;





$tdataleavesonrange[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdataleavesonrange[".totalsFields"] = array();
$tdataleavesonrange[".totalsFields"][] = array(
	"fName" => "user_name",
	"numRows" => 0,
	"totalsType" => "COUNT",
	"viewFormat" => '');
$tdataleavesonrange[".totalsFields"][] = array(
	"fName" => "NoDays",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdataleavesonrange[".pageSize"] = 20;

$tdataleavesonrange[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataleavesonrange[".strOrderBy"] = $tstrOrderBy;

$tdataleavesonrange[".orderindexes"] = array();

$tdataleavesonrange[".sqlHead"] = "SELECT LDate,  NoDays,  user_name";
$tdataleavesonrange[".sqlFrom"] = "FROM leavesonrange";
$tdataleavesonrange[".sqlWhereExpr"] = "";
$tdataleavesonrange[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataleavesonrange[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataleavesonrange[".arrGroupsPerPage"] = $arrGPP;

$tdataleavesonrange[".highlightSearchResults"] = true;

$tableKeysleavesonrange = array();
$tdataleavesonrange[".Keys"] = $tableKeysleavesonrange;

$tdataleavesonrange[".listFields"] = array();
$tdataleavesonrange[".listFields"][] = "LDate";
$tdataleavesonrange[".listFields"][] = "user_name";
$tdataleavesonrange[".listFields"][] = "NoDays";

$tdataleavesonrange[".hideMobileList"] = array();


$tdataleavesonrange[".viewFields"] = array();

$tdataleavesonrange[".addFields"] = array();

$tdataleavesonrange[".masterListFields"] = array();
$tdataleavesonrange[".masterListFields"][] = "LDate";
$tdataleavesonrange[".masterListFields"][] = "user_name";
$tdataleavesonrange[".masterListFields"][] = "NoDays";

$tdataleavesonrange[".inlineAddFields"] = array();

$tdataleavesonrange[".editFields"] = array();

$tdataleavesonrange[".inlineEditFields"] = array();

$tdataleavesonrange[".updateSelectedFields"] = array();


$tdataleavesonrange[".exportFields"] = array();
$tdataleavesonrange[".exportFields"][] = "LDate";
$tdataleavesonrange[".exportFields"][] = "user_name";
$tdataleavesonrange[".exportFields"][] = "NoDays";

$tdataleavesonrange[".importFields"] = array();

$tdataleavesonrange[".printFields"] = array();
$tdataleavesonrange[".printFields"][] = "LDate";
$tdataleavesonrange[".printFields"][] = "user_name";
$tdataleavesonrange[".printFields"][] = "NoDays";


//	LDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LDate";
	$fdata["GoodName"] = "LDate";
	$fdata["ownerTable"] = "leavesonrange";
	$fdata["Label"] = GetFieldLabel("leavesonrange","LDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LDate";

	
	
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




	$tdataleavesonrange["LDate"] = $fdata;
//	NoDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NoDays";
	$fdata["GoodName"] = "NoDays";
	$fdata["ownerTable"] = "leavesonrange";
	$fdata["Label"] = GetFieldLabel("leavesonrange","NoDays");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NoDays";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NoDays";

	
	
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




	$tdataleavesonrange["NoDays"] = $fdata;
//	user_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "user_name";
	$fdata["GoodName"] = "user_name";
	$fdata["ownerTable"] = "leavesonrange";
	$fdata["Label"] = GetFieldLabel("leavesonrange","user_name");
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




	$tdataleavesonrange["user_name"] = $fdata;


$tables_data["leavesonrange"]=&$tdataleavesonrange;
$field_labels["leavesonrange"] = &$fieldLabelsleavesonrange;
$fieldToolTips["leavesonrange"] = &$fieldToolTipsleavesonrange;
$placeHolders["leavesonrange"] = &$placeHoldersleavesonrange;
$page_titles["leavesonrange"] = &$pageTitlesleavesonrange;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["leavesonrange"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["leavesonrange"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_leavesonrange()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LDate,  NoDays,  user_name";
$proto0["m_strFrom"] = "FROM leavesonrange";
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
	"m_strName" => "LDate",
	"m_strTable" => "leavesonrange",
	"m_srcTableName" => "leavesonrange"
));

$proto6["m_sql"] = "LDate";
$proto6["m_srcTableName"] = "leavesonrange";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NoDays",
	"m_strTable" => "leavesonrange",
	"m_srcTableName" => "leavesonrange"
));

$proto8["m_sql"] = "NoDays";
$proto8["m_srcTableName"] = "leavesonrange";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "leavesonrange",
	"m_srcTableName" => "leavesonrange"
));

$proto10["m_sql"] = "user_name";
$proto10["m_srcTableName"] = "leavesonrange";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "leavesonrange";
$proto13["m_srcTableName"] = "leavesonrange";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "LtID";
$proto13["m_columns"][] = "EmployeeID";
$proto13["m_columns"][] = "LDate";
$proto13["m_columns"][] = "NoDays";
$proto13["m_columns"][] = "user_name";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "leavesonrange";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "leavesonrange";
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
$proto0["m_srcTableName"]="leavesonrange";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_leavesonrange = createSqlQuery_leavesonrange();


	
		;

			

$tdataleavesonrange[".sqlquery"] = $queryData_leavesonrange;

$tableEvents["leavesonrange"] = new eventsBase;
$tdataleavesonrange[".hasEvents"] = false;

?>