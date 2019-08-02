<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadivisionaccess = array();
	$tdatadivisionaccess[".truncateText"] = true;
	$tdatadivisionaccess[".NumberOfChars"] = 80;
	$tdatadivisionaccess[".ShortName"] = "divisionaccess";
	$tdatadivisionaccess[".OwnerID"] = "";
	$tdatadivisionaccess[".OriginalTable"] = "divisionaccess";

//	field labels
$fieldLabelsdivisionaccess = array();
$fieldToolTipsdivisionaccess = array();
$pageTitlesdivisionaccess = array();
$placeHoldersdivisionaccess = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdivisionaccess["English"] = array();
	$fieldToolTipsdivisionaccess["English"] = array();
	$placeHoldersdivisionaccess["English"] = array();
	$pageTitlesdivisionaccess["English"] = array();
	$fieldLabelsdivisionaccess["English"]["DID"] = "DID";
	$fieldToolTipsdivisionaccess["English"]["DID"] = "";
	$placeHoldersdivisionaccess["English"]["DID"] = "";
	$fieldLabelsdivisionaccess["English"]["SelectDivision"] = "Select Division";
	$fieldToolTipsdivisionaccess["English"]["SelectDivision"] = "";
	$placeHoldersdivisionaccess["English"]["SelectDivision"] = "";
	$fieldLabelsdivisionaccess["English"]["LogID"] = "Log ID";
	$fieldToolTipsdivisionaccess["English"]["LogID"] = "";
	$placeHoldersdivisionaccess["English"]["LogID"] = "";
	if (count($fieldToolTipsdivisionaccess["English"]))
		$tdatadivisionaccess[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdivisionaccess[""] = array();
	$fieldToolTipsdivisionaccess[""] = array();
	$placeHoldersdivisionaccess[""] = array();
	$pageTitlesdivisionaccess[""] = array();
	if (count($fieldToolTipsdivisionaccess[""]))
		$tdatadivisionaccess[".isUseToolTips"] = true;
}


	$tdatadivisionaccess[".NCSearch"] = true;



$tdatadivisionaccess[".shortTableName"] = "divisionaccess";
$tdatadivisionaccess[".nSecOptions"] = 0;
$tdatadivisionaccess[".recsPerRowPrint"] = 1;
$tdatadivisionaccess[".mainTableOwnerID"] = "";
$tdatadivisionaccess[".moveNext"] = 1;
$tdatadivisionaccess[".entityType"] = 0;

$tdatadivisionaccess[".strOriginalTableName"] = "divisionaccess";

	



$tdatadivisionaccess[".showAddInPopup"] = false;

$tdatadivisionaccess[".showEditInPopup"] = false;

$tdatadivisionaccess[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadivisionaccess[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadivisionaccess[".fieldsForRegister"] = array();

$tdatadivisionaccess[".listAjax"] = false;

	$tdatadivisionaccess[".audit"] = false;

	$tdatadivisionaccess[".locking"] = false;

$tdatadivisionaccess[".edit"] = true;
$tdatadivisionaccess[".afterEditAction"] = 1;
$tdatadivisionaccess[".closePopupAfterEdit"] = 1;
$tdatadivisionaccess[".afterEditActionDetTable"] = "";

$tdatadivisionaccess[".add"] = true;
$tdatadivisionaccess[".afterAddAction"] = 1;
$tdatadivisionaccess[".closePopupAfterAdd"] = 1;
$tdatadivisionaccess[".afterAddActionDetTable"] = "";

$tdatadivisionaccess[".list"] = true;



$tdatadivisionaccess[".reorderRecordsByHeader"] = true;


$tdatadivisionaccess[".exportFormatting"] = 2;
$tdatadivisionaccess[".exportDelimiter"] = ",";
		
$tdatadivisionaccess[".view"] = true;

$tdatadivisionaccess[".import"] = true;

$tdatadivisionaccess[".exportTo"] = true;

$tdatadivisionaccess[".printFriendly"] = true;

$tdatadivisionaccess[".delete"] = true;

$tdatadivisionaccess[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadivisionaccess[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatadivisionaccess[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatadivisionaccess[".searchSaving"] = false;
//

$tdatadivisionaccess[".showSearchPanel"] = true;
		$tdatadivisionaccess[".flexibleSearch"] = true;

$tdatadivisionaccess[".isUseAjaxSuggest"] = true;

$tdatadivisionaccess[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																												

$tdatadivisionaccess[".ajaxCodeSnippetAdded"] = false;

$tdatadivisionaccess[".buttonsAdded"] = false;

$tdatadivisionaccess[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadivisionaccess[".isUseTimeForSearch"] = false;



$tdatadivisionaccess[".badgeColor"] = "e67349";


$tdatadivisionaccess[".allSearchFields"] = array();
$tdatadivisionaccess[".filterFields"] = array();
$tdatadivisionaccess[".requiredSearchFields"] = array();

$tdatadivisionaccess[".allSearchFields"][] = "DID";
	$tdatadivisionaccess[".allSearchFields"][] = "SelectDivision";
	$tdatadivisionaccess[".allSearchFields"][] = "LogID";
	

$tdatadivisionaccess[".googleLikeFields"] = array();
$tdatadivisionaccess[".googleLikeFields"][] = "DID";
$tdatadivisionaccess[".googleLikeFields"][] = "SelectDivision";
$tdatadivisionaccess[".googleLikeFields"][] = "LogID";


$tdatadivisionaccess[".advSearchFields"] = array();
$tdatadivisionaccess[".advSearchFields"][] = "DID";
$tdatadivisionaccess[".advSearchFields"][] = "SelectDivision";
$tdatadivisionaccess[".advSearchFields"][] = "LogID";

$tdatadivisionaccess[".tableType"] = "list";

$tdatadivisionaccess[".printerPageOrientation"] = 0;
$tdatadivisionaccess[".nPrinterPageScale"] = 100;

$tdatadivisionaccess[".nPrinterSplitRecords"] = 40;

$tdatadivisionaccess[".nPrinterPDFSplitRecords"] = 40;



$tdatadivisionaccess[".geocodingEnabled"] = false;





$tdatadivisionaccess[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatadivisionaccess[".pageSize"] = 20;

$tdatadivisionaccess[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadivisionaccess[".strOrderBy"] = $tstrOrderBy;

$tdatadivisionaccess[".orderindexes"] = array();

$tdatadivisionaccess[".sqlHead"] = "SELECT DID,  	SelectDivision,  	LogID";
$tdatadivisionaccess[".sqlFrom"] = "FROM divisionaccess";
$tdatadivisionaccess[".sqlWhereExpr"] = "";
$tdatadivisionaccess[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadivisionaccess[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadivisionaccess[".arrGroupsPerPage"] = $arrGPP;

$tdatadivisionaccess[".highlightSearchResults"] = true;

$tableKeysdivisionaccess = array();
$tableKeysdivisionaccess[] = "DID";
$tdatadivisionaccess[".Keys"] = $tableKeysdivisionaccess;

$tdatadivisionaccess[".listFields"] = array();
$tdatadivisionaccess[".listFields"][] = "DID";
$tdatadivisionaccess[".listFields"][] = "SelectDivision";
$tdatadivisionaccess[".listFields"][] = "LogID";

$tdatadivisionaccess[".hideMobileList"] = array();


$tdatadivisionaccess[".viewFields"] = array();
$tdatadivisionaccess[".viewFields"][] = "DID";
$tdatadivisionaccess[".viewFields"][] = "SelectDivision";
$tdatadivisionaccess[".viewFields"][] = "LogID";

$tdatadivisionaccess[".addFields"] = array();
$tdatadivisionaccess[".addFields"][] = "SelectDivision";
$tdatadivisionaccess[".addFields"][] = "LogID";

$tdatadivisionaccess[".masterListFields"] = array();
$tdatadivisionaccess[".masterListFields"][] = "DID";
$tdatadivisionaccess[".masterListFields"][] = "SelectDivision";
$tdatadivisionaccess[".masterListFields"][] = "LogID";

$tdatadivisionaccess[".inlineAddFields"] = array();
$tdatadivisionaccess[".inlineAddFields"][] = "SelectDivision";
$tdatadivisionaccess[".inlineAddFields"][] = "LogID";

$tdatadivisionaccess[".editFields"] = array();
$tdatadivisionaccess[".editFields"][] = "SelectDivision";
$tdatadivisionaccess[".editFields"][] = "LogID";

$tdatadivisionaccess[".inlineEditFields"] = array();
$tdatadivisionaccess[".inlineEditFields"][] = "SelectDivision";
$tdatadivisionaccess[".inlineEditFields"][] = "LogID";

$tdatadivisionaccess[".updateSelectedFields"] = array();
$tdatadivisionaccess[".updateSelectedFields"][] = "SelectDivision";
$tdatadivisionaccess[".updateSelectedFields"][] = "LogID";


$tdatadivisionaccess[".exportFields"] = array();
$tdatadivisionaccess[".exportFields"][] = "DID";
$tdatadivisionaccess[".exportFields"][] = "SelectDivision";
$tdatadivisionaccess[".exportFields"][] = "LogID";

$tdatadivisionaccess[".importFields"] = array();
$tdatadivisionaccess[".importFields"][] = "DID";
$tdatadivisionaccess[".importFields"][] = "SelectDivision";
$tdatadivisionaccess[".importFields"][] = "LogID";

$tdatadivisionaccess[".printFields"] = array();
$tdatadivisionaccess[".printFields"][] = "DID";
$tdatadivisionaccess[".printFields"][] = "SelectDivision";
$tdatadivisionaccess[".printFields"][] = "LogID";


//	DID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DID";
	$fdata["GoodName"] = "DID";
	$fdata["ownerTable"] = "divisionaccess";
	$fdata["Label"] = GetFieldLabel("divisionaccess","DID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DID";

	
	
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




	$tdatadivisionaccess["DID"] = $fdata;
//	SelectDivision
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SelectDivision";
	$fdata["GoodName"] = "SelectDivision";
	$fdata["ownerTable"] = "divisionaccess";
	$fdata["Label"] = GetFieldLabel("divisionaccess","SelectDivision");
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

		$fdata["strField"] = "SelectDivision";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SelectDivision";

	
	
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
	$edata["LookupTable"] = "divisionaccess";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "SelectDivision";
	
	

	
	$edata["LookupOrderBy"] = "SelectDivision";

	
	
	
	

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadivisionaccess["SelectDivision"] = $fdata;
//	LogID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LogID";
	$fdata["GoodName"] = "LogID";
	$fdata["ownerTable"] = "divisionaccess";
	$fdata["Label"] = GetFieldLabel("divisionaccess","LogID");
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

		$fdata["strField"] = "LogID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LogID";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 97;

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




	$tdatadivisionaccess["LogID"] = $fdata;


$tables_data["divisionaccess"]=&$tdatadivisionaccess;
$field_labels["divisionaccess"] = &$fieldLabelsdivisionaccess;
$fieldToolTips["divisionaccess"] = &$fieldToolTipsdivisionaccess;
$placeHolders["divisionaccess"] = &$placeHoldersdivisionaccess;
$page_titles["divisionaccess"] = &$pageTitlesdivisionaccess;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["divisionaccess"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["divisionaccess"] = array();


	
				$strOriginalDetailsTable="logins";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="logins";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "logins";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["divisionaccess"][0] = $masterParams;
				$masterTablesData["divisionaccess"][0]["masterKeys"] = array();
	$masterTablesData["divisionaccess"][0]["masterKeys"][]="LogID";
				$masterTablesData["divisionaccess"][0]["detailKeys"] = array();
	$masterTablesData["divisionaccess"][0]["detailKeys"][]="LogID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_divisionaccess()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DID,  	SelectDivision,  	LogID";
$proto0["m_strFrom"] = "FROM divisionaccess";
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
	"m_strName" => "DID",
	"m_strTable" => "divisionaccess",
	"m_srcTableName" => "divisionaccess"
));

$proto6["m_sql"] = "DID";
$proto6["m_srcTableName"] = "divisionaccess";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SelectDivision",
	"m_strTable" => "divisionaccess",
	"m_srcTableName" => "divisionaccess"
));

$proto8["m_sql"] = "SelectDivision";
$proto8["m_srcTableName"] = "divisionaccess";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "LogID",
	"m_strTable" => "divisionaccess",
	"m_srcTableName" => "divisionaccess"
));

$proto10["m_sql"] = "LogID";
$proto10["m_srcTableName"] = "divisionaccess";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "divisionaccess";
$proto13["m_srcTableName"] = "divisionaccess";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "DID";
$proto13["m_columns"][] = "SelectDivision";
$proto13["m_columns"][] = "LogID";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "divisionaccess";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "divisionaccess";
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
$proto0["m_srcTableName"]="divisionaccess";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_divisionaccess = createSqlQuery_divisionaccess();


	
		;

			

$tdatadivisionaccess[".sqlquery"] = $queryData_divisionaccess;

$tableEvents["divisionaccess"] = new eventsBase;
$tdatadivisionaccess[".hasEvents"] = false;

?>