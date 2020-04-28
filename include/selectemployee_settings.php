<?php
require_once(getabspath("classes/cipherer.php"));




$tdataselectemployee = array();
	$tdataselectemployee[".truncateText"] = true;
	$tdataselectemployee[".NumberOfChars"] = 80;
	$tdataselectemployee[".ShortName"] = "selectemployee";
	$tdataselectemployee[".OwnerID"] = "";
	$tdataselectemployee[".OriginalTable"] = "selectemployee";

//	field labels
$fieldLabelsselectemployee = array();
$fieldToolTipsselectemployee = array();
$pageTitlesselectemployee = array();
$placeHoldersselectemployee = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsselectemployee["English"] = array();
	$fieldToolTipsselectemployee["English"] = array();
	$placeHoldersselectemployee["English"] = array();
	$pageTitlesselectemployee["English"] = array();
	$fieldLabelsselectemployee["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipsselectemployee["English"]["EmployeeID"] = "";
	$placeHoldersselectemployee["English"]["EmployeeID"] = "";
	$fieldLabelsselectemployee["English"]["Employee"] = "Employee";
	$fieldToolTipsselectemployee["English"]["Employee"] = "";
	$placeHoldersselectemployee["English"]["Employee"] = "";
	$fieldLabelsselectemployee["English"]["Division"] = "Division";
	$fieldToolTipsselectemployee["English"]["Division"] = "";
	$placeHoldersselectemployee["English"]["Division"] = "";
	if (count($fieldToolTipsselectemployee["English"]))
		$tdataselectemployee[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsselectemployee[""] = array();
	$fieldToolTipsselectemployee[""] = array();
	$placeHoldersselectemployee[""] = array();
	$pageTitlesselectemployee[""] = array();
	$fieldLabelsselectemployee[""]["EmployeeID"] = "Employee ID";
	$fieldToolTipsselectemployee[""]["EmployeeID"] = "";
	$placeHoldersselectemployee[""]["EmployeeID"] = "";
	$fieldLabelsselectemployee[""]["Employee"] = "Employee";
	$fieldToolTipsselectemployee[""]["Employee"] = "";
	$placeHoldersselectemployee[""]["Employee"] = "";
	$fieldLabelsselectemployee[""]["Division"] = "Division";
	$fieldToolTipsselectemployee[""]["Division"] = "";
	$placeHoldersselectemployee[""]["Division"] = "";
	if (count($fieldToolTipsselectemployee[""]))
		$tdataselectemployee[".isUseToolTips"] = true;
}


	$tdataselectemployee[".NCSearch"] = true;



$tdataselectemployee[".shortTableName"] = "selectemployee";
$tdataselectemployee[".nSecOptions"] = 0;
$tdataselectemployee[".recsPerRowPrint"] = 1;
$tdataselectemployee[".mainTableOwnerID"] = "";
$tdataselectemployee[".moveNext"] = 1;
$tdataselectemployee[".entityType"] = 0;

$tdataselectemployee[".strOriginalTableName"] = "selectemployee";

	



$tdataselectemployee[".showAddInPopup"] = false;

$tdataselectemployee[".showEditInPopup"] = false;

$tdataselectemployee[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataselectemployee[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataselectemployee[".fieldsForRegister"] = array();

$tdataselectemployee[".listAjax"] = false;

	$tdataselectemployee[".audit"] = false;

	$tdataselectemployee[".locking"] = false;



$tdataselectemployee[".list"] = true;



$tdataselectemployee[".reorderRecordsByHeader"] = true;








$tdataselectemployee[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataselectemployee[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataselectemployee[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataselectemployee[".searchSaving"] = false;
//

$tdataselectemployee[".showSearchPanel"] = true;
		$tdataselectemployee[".flexibleSearch"] = true;

$tdataselectemployee[".isUseAjaxSuggest"] = true;

$tdataselectemployee[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdataselectemployee[".ajaxCodeSnippetAdded"] = false;

$tdataselectemployee[".buttonsAdded"] = false;

$tdataselectemployee[".addPageEvents"] = false;

// use timepicker for search panel
$tdataselectemployee[".isUseTimeForSearch"] = false;





$tdataselectemployee[".allSearchFields"] = array();
$tdataselectemployee[".filterFields"] = array();
$tdataselectemployee[".requiredSearchFields"] = array();

$tdataselectemployee[".allSearchFields"][] = "EmployeeID";
	$tdataselectemployee[".allSearchFields"][] = "Employee";
	$tdataselectemployee[".allSearchFields"][] = "Division";
	

$tdataselectemployee[".googleLikeFields"] = array();
$tdataselectemployee[".googleLikeFields"][] = "EmployeeID";
$tdataselectemployee[".googleLikeFields"][] = "Employee";
$tdataselectemployee[".googleLikeFields"][] = "Division";


$tdataselectemployee[".advSearchFields"] = array();
$tdataselectemployee[".advSearchFields"][] = "EmployeeID";
$tdataselectemployee[".advSearchFields"][] = "Employee";
$tdataselectemployee[".advSearchFields"][] = "Division";

$tdataselectemployee[".tableType"] = "list";

$tdataselectemployee[".printerPageOrientation"] = 0;
$tdataselectemployee[".nPrinterPageScale"] = 100;

$tdataselectemployee[".nPrinterSplitRecords"] = 40;

$tdataselectemployee[".nPrinterPDFSplitRecords"] = 40;



$tdataselectemployee[".geocodingEnabled"] = false;





$tdataselectemployee[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataselectemployee[".pageSize"] = 20;

$tdataselectemployee[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataselectemployee[".strOrderBy"] = $tstrOrderBy;

$tdataselectemployee[".orderindexes"] = array();

$tdataselectemployee[".sqlHead"] = "SELECT EmployeeID,  	Employee,  	Division";
$tdataselectemployee[".sqlFrom"] = "FROM selectemployee";
$tdataselectemployee[".sqlWhereExpr"] = "";
$tdataselectemployee[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataselectemployee[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataselectemployee[".arrGroupsPerPage"] = $arrGPP;

$tdataselectemployee[".highlightSearchResults"] = true;

$tableKeysselectemployee = array();
$tdataselectemployee[".Keys"] = $tableKeysselectemployee;

$tdataselectemployee[".listFields"] = array();
$tdataselectemployee[".listFields"][] = "EmployeeID";
$tdataselectemployee[".listFields"][] = "Employee";
$tdataselectemployee[".listFields"][] = "Division";

$tdataselectemployee[".hideMobileList"] = array();


$tdataselectemployee[".viewFields"] = array();
$tdataselectemployee[".viewFields"][] = "EmployeeID";
$tdataselectemployee[".viewFields"][] = "Employee";
$tdataselectemployee[".viewFields"][] = "Division";

$tdataselectemployee[".addFields"] = array();
$tdataselectemployee[".addFields"][] = "EmployeeID";
$tdataselectemployee[".addFields"][] = "Employee";
$tdataselectemployee[".addFields"][] = "Division";

$tdataselectemployee[".masterListFields"] = array();
$tdataselectemployee[".masterListFields"][] = "EmployeeID";
$tdataselectemployee[".masterListFields"][] = "Employee";
$tdataselectemployee[".masterListFields"][] = "Division";

$tdataselectemployee[".inlineAddFields"] = array();
$tdataselectemployee[".inlineAddFields"][] = "EmployeeID";
$tdataselectemployee[".inlineAddFields"][] = "Employee";
$tdataselectemployee[".inlineAddFields"][] = "Division";

$tdataselectemployee[".editFields"] = array();
$tdataselectemployee[".editFields"][] = "EmployeeID";
$tdataselectemployee[".editFields"][] = "Employee";
$tdataselectemployee[".editFields"][] = "Division";

$tdataselectemployee[".inlineEditFields"] = array();
$tdataselectemployee[".inlineEditFields"][] = "EmployeeID";
$tdataselectemployee[".inlineEditFields"][] = "Employee";
$tdataselectemployee[".inlineEditFields"][] = "Division";

$tdataselectemployee[".updateSelectedFields"] = array();
$tdataselectemployee[".updateSelectedFields"][] = "EmployeeID";
$tdataselectemployee[".updateSelectedFields"][] = "Employee";
$tdataselectemployee[".updateSelectedFields"][] = "Division";


$tdataselectemployee[".exportFields"] = array();
$tdataselectemployee[".exportFields"][] = "EmployeeID";
$tdataselectemployee[".exportFields"][] = "Employee";
$tdataselectemployee[".exportFields"][] = "Division";

$tdataselectemployee[".importFields"] = array();
$tdataselectemployee[".importFields"][] = "EmployeeID";
$tdataselectemployee[".importFields"][] = "Employee";
$tdataselectemployee[".importFields"][] = "Division";

$tdataselectemployee[".printFields"] = array();
$tdataselectemployee[".printFields"][] = "EmployeeID";
$tdataselectemployee[".printFields"][] = "Employee";
$tdataselectemployee[".printFields"][] = "Division";


//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "selectemployee";
	$fdata["Label"] = GetFieldLabel("selectemployee","EmployeeID");
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

		$fdata["strField"] = "EmployeeID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmployeeID";

	
	
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




	$tdataselectemployee["EmployeeID"] = $fdata;
//	Employee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Employee";
	$fdata["GoodName"] = "Employee";
	$fdata["ownerTable"] = "selectemployee";
	$fdata["Label"] = GetFieldLabel("selectemployee","Employee");
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

		$fdata["strField"] = "Employee";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Employee";

	
	
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




	$tdataselectemployee["Employee"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "selectemployee";
	$fdata["Label"] = GetFieldLabel("selectemployee","Division");
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

		$fdata["strField"] = "Division";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Division";

	
	
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
	$edata["LookupTable"] = "divisions";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DvID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Division";
	
	

	
	$edata["LookupOrderBy"] = "Division";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataselectemployee["Division"] = $fdata;


$tables_data["selectemployee"]=&$tdataselectemployee;
$field_labels["selectemployee"] = &$fieldLabelsselectemployee;
$fieldToolTips["selectemployee"] = &$fieldToolTipsselectemployee;
$placeHolders["selectemployee"] = &$placeHoldersselectemployee;
$page_titles["selectemployee"] = &$pageTitlesselectemployee;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["selectemployee"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["selectemployee"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_selectemployee()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EmployeeID,  	Employee,  	Division";
$proto0["m_strFrom"] = "FROM selectemployee";
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
	"m_strName" => "EmployeeID",
	"m_strTable" => "selectemployee",
	"m_srcTableName" => "selectemployee"
));

$proto6["m_sql"] = "EmployeeID";
$proto6["m_srcTableName"] = "selectemployee";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Employee",
	"m_strTable" => "selectemployee",
	"m_srcTableName" => "selectemployee"
));

$proto8["m_sql"] = "Employee";
$proto8["m_srcTableName"] = "selectemployee";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "selectemployee",
	"m_srcTableName" => "selectemployee"
));

$proto10["m_sql"] = "Division";
$proto10["m_srcTableName"] = "selectemployee";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "selectemployee";
$proto13["m_srcTableName"] = "selectemployee";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "EmployeeID";
$proto13["m_columns"][] = "Employee";
$proto13["m_columns"][] = "Division";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "selectemployee";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "selectemployee";
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
$proto0["m_srcTableName"]="selectemployee";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_selectemployee = createSqlQuery_selectemployee();


	
		;

			

$tdataselectemployee[".sqlquery"] = $queryData_selectemployee;

$tableEvents["selectemployee"] = new eventsBase;
$tdataselectemployee[".hasEvents"] = false;

?>