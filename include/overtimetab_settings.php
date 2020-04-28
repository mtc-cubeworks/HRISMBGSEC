<?php
require_once(getabspath("classes/cipherer.php"));




$tdataovertimetab = array();
	$tdataovertimetab[".truncateText"] = true;
	$tdataovertimetab[".NumberOfChars"] = 80;
	$tdataovertimetab[".ShortName"] = "overtimetab";
	$tdataovertimetab[".OwnerID"] = "";
	$tdataovertimetab[".OriginalTable"] = "overtimetab";

//	field labels
$fieldLabelsovertimetab = array();
$fieldToolTipsovertimetab = array();
$pageTitlesovertimetab = array();
$placeHoldersovertimetab = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsovertimetab["English"] = array();
	$fieldToolTipsovertimetab["English"] = array();
	$placeHoldersovertimetab["English"] = array();
	$pageTitlesovertimetab["English"] = array();
	$fieldLabelsovertimetab["English"]["OTtabID"] = "OTtab ID";
	$fieldToolTipsovertimetab["English"]["OTtabID"] = "";
	$placeHoldersovertimetab["English"]["OTtabID"] = "";
	$fieldLabelsovertimetab["English"]["EmployeeID"] = "Employee";
	$fieldToolTipsovertimetab["English"]["EmployeeID"] = "";
	$placeHoldersovertimetab["English"]["EmployeeID"] = "";
	$fieldLabelsovertimetab["English"]["OtiD"] = "Oti D";
	$fieldToolTipsovertimetab["English"]["OtiD"] = "";
	$placeHoldersovertimetab["English"]["OtiD"] = "";
	if (count($fieldToolTipsovertimetab["English"]))
		$tdataovertimetab[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsovertimetab[""] = array();
	$fieldToolTipsovertimetab[""] = array();
	$placeHoldersovertimetab[""] = array();
	$pageTitlesovertimetab[""] = array();
	if (count($fieldToolTipsovertimetab[""]))
		$tdataovertimetab[".isUseToolTips"] = true;
}


	$tdataovertimetab[".NCSearch"] = true;



$tdataovertimetab[".shortTableName"] = "overtimetab";
$tdataovertimetab[".nSecOptions"] = 0;
$tdataovertimetab[".recsPerRowPrint"] = 1;
$tdataovertimetab[".mainTableOwnerID"] = "";
$tdataovertimetab[".moveNext"] = 1;
$tdataovertimetab[".entityType"] = 0;

$tdataovertimetab[".strOriginalTableName"] = "overtimetab";

	



$tdataovertimetab[".showAddInPopup"] = false;

$tdataovertimetab[".showEditInPopup"] = false;

$tdataovertimetab[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataovertimetab[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataovertimetab[".fieldsForRegister"] = array();

$tdataovertimetab[".listAjax"] = false;

	$tdataovertimetab[".audit"] = false;

	$tdataovertimetab[".locking"] = false;

$tdataovertimetab[".edit"] = true;
$tdataovertimetab[".afterEditAction"] = 1;
$tdataovertimetab[".closePopupAfterEdit"] = 1;
$tdataovertimetab[".afterEditActionDetTable"] = "";

$tdataovertimetab[".add"] = true;
$tdataovertimetab[".afterAddAction"] = 1;
$tdataovertimetab[".closePopupAfterAdd"] = 1;
$tdataovertimetab[".afterAddActionDetTable"] = "";

$tdataovertimetab[".list"] = true;

$tdataovertimetab[".inlineEdit"] = true;


$tdataovertimetab[".reorderRecordsByHeader"] = true;


$tdataovertimetab[".exportFormatting"] = 2;
$tdataovertimetab[".exportDelimiter"] = ",";
		
$tdataovertimetab[".inlineAdd"] = true;
$tdataovertimetab[".view"] = true;

$tdataovertimetab[".import"] = true;

$tdataovertimetab[".exportTo"] = true;

$tdataovertimetab[".printFriendly"] = true;

$tdataovertimetab[".delete"] = true;

$tdataovertimetab[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataovertimetab[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataovertimetab[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataovertimetab[".searchSaving"] = false;
//

$tdataovertimetab[".showSearchPanel"] = true;
		$tdataovertimetab[".flexibleSearch"] = true;

$tdataovertimetab[".isUseAjaxSuggest"] = true;

$tdataovertimetab[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																												

$tdataovertimetab[".ajaxCodeSnippetAdded"] = false;

$tdataovertimetab[".buttonsAdded"] = false;

$tdataovertimetab[".addPageEvents"] = false;

// use timepicker for search panel
$tdataovertimetab[".isUseTimeForSearch"] = false;



$tdataovertimetab[".badgeColor"] = "bc8f8f";


$tdataovertimetab[".allSearchFields"] = array();
$tdataovertimetab[".filterFields"] = array();
$tdataovertimetab[".requiredSearchFields"] = array();

$tdataovertimetab[".allSearchFields"][] = "OTtabID";
	$tdataovertimetab[".allSearchFields"][] = "EmployeeID";
	$tdataovertimetab[".allSearchFields"][] = "OtiD";
	

$tdataovertimetab[".googleLikeFields"] = array();
$tdataovertimetab[".googleLikeFields"][] = "OTtabID";
$tdataovertimetab[".googleLikeFields"][] = "EmployeeID";
$tdataovertimetab[".googleLikeFields"][] = "OtiD";


$tdataovertimetab[".advSearchFields"] = array();
$tdataovertimetab[".advSearchFields"][] = "OTtabID";
$tdataovertimetab[".advSearchFields"][] = "EmployeeID";
$tdataovertimetab[".advSearchFields"][] = "OtiD";

$tdataovertimetab[".tableType"] = "list";

$tdataovertimetab[".printerPageOrientation"] = 0;
$tdataovertimetab[".nPrinterPageScale"] = 100;

$tdataovertimetab[".nPrinterSplitRecords"] = 40;

$tdataovertimetab[".nPrinterPDFSplitRecords"] = 40;



$tdataovertimetab[".geocodingEnabled"] = false;





$tdataovertimetab[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataovertimetab[".pageSize"] = 20;

$tdataovertimetab[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataovertimetab[".strOrderBy"] = $tstrOrderBy;

$tdataovertimetab[".orderindexes"] = array();

$tdataovertimetab[".sqlHead"] = "SELECT OTtabID,  EmployeeID,  OtiD";
$tdataovertimetab[".sqlFrom"] = "FROM overtimetab";
$tdataovertimetab[".sqlWhereExpr"] = "";
$tdataovertimetab[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataovertimetab[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataovertimetab[".arrGroupsPerPage"] = $arrGPP;

$tdataovertimetab[".highlightSearchResults"] = true;

$tableKeysovertimetab = array();
$tableKeysovertimetab[] = "OTtabID";
$tdataovertimetab[".Keys"] = $tableKeysovertimetab;

$tdataovertimetab[".listFields"] = array();
$tdataovertimetab[".listFields"][] = "OTtabID";
$tdataovertimetab[".listFields"][] = "EmployeeID";
$tdataovertimetab[".listFields"][] = "OtiD";

$tdataovertimetab[".hideMobileList"] = array();


$tdataovertimetab[".viewFields"] = array();
$tdataovertimetab[".viewFields"][] = "OTtabID";
$tdataovertimetab[".viewFields"][] = "EmployeeID";
$tdataovertimetab[".viewFields"][] = "OtiD";

$tdataovertimetab[".addFields"] = array();
$tdataovertimetab[".addFields"][] = "EmployeeID";
$tdataovertimetab[".addFields"][] = "OtiD";

$tdataovertimetab[".masterListFields"] = array();
$tdataovertimetab[".masterListFields"][] = "OTtabID";
$tdataovertimetab[".masterListFields"][] = "EmployeeID";
$tdataovertimetab[".masterListFields"][] = "OtiD";

$tdataovertimetab[".inlineAddFields"] = array();
$tdataovertimetab[".inlineAddFields"][] = "EmployeeID";
$tdataovertimetab[".inlineAddFields"][] = "OtiD";

$tdataovertimetab[".editFields"] = array();
$tdataovertimetab[".editFields"][] = "EmployeeID";
$tdataovertimetab[".editFields"][] = "OtiD";

$tdataovertimetab[".inlineEditFields"] = array();
$tdataovertimetab[".inlineEditFields"][] = "EmployeeID";
$tdataovertimetab[".inlineEditFields"][] = "OtiD";

$tdataovertimetab[".updateSelectedFields"] = array();
$tdataovertimetab[".updateSelectedFields"][] = "EmployeeID";
$tdataovertimetab[".updateSelectedFields"][] = "OtiD";


$tdataovertimetab[".exportFields"] = array();
$tdataovertimetab[".exportFields"][] = "OTtabID";
$tdataovertimetab[".exportFields"][] = "EmployeeID";
$tdataovertimetab[".exportFields"][] = "OtiD";

$tdataovertimetab[".importFields"] = array();
$tdataovertimetab[".importFields"][] = "OTtabID";
$tdataovertimetab[".importFields"][] = "EmployeeID";
$tdataovertimetab[".importFields"][] = "OtiD";

$tdataovertimetab[".printFields"] = array();
$tdataovertimetab[".printFields"][] = "OTtabID";
$tdataovertimetab[".printFields"][] = "EmployeeID";
$tdataovertimetab[".printFields"][] = "OtiD";


//	OTtabID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "OTtabID";
	$fdata["GoodName"] = "OTtabID";
	$fdata["ownerTable"] = "overtimetab";
	$fdata["Label"] = GetFieldLabel("overtimetab","OTtabID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "OTtabID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OTtabID";

	
	
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




	$tdataovertimetab["OTtabID"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "overtimetab";
	$fdata["Label"] = GetFieldLabel("overtimetab","EmployeeID");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "demo_user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "EmployeeID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "user_name";
	
				$edata["LookupWhere"] = "Division = ':master.Division' and Employer = ':master.Employer'";


	
	$edata["LookupOrderBy"] = "user_name";

	
	
	
	

	
	
	
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




	$tdataovertimetab["EmployeeID"] = $fdata;
//	OtiD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "OtiD";
	$fdata["GoodName"] = "OtiD";
	$fdata["ownerTable"] = "overtimetab";
	$fdata["Label"] = GetFieldLabel("overtimetab","OtiD");
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

		$fdata["strField"] = "OtiD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OtiD";

	
	
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




	$tdataovertimetab["OtiD"] = $fdata;


$tables_data["overtimetab"]=&$tdataovertimetab;
$field_labels["overtimetab"] = &$fieldLabelsovertimetab;
$fieldToolTips["overtimetab"] = &$fieldToolTipsovertimetab;
$placeHolders["overtimetab"] = &$placeHoldersovertimetab;
$page_titles["overtimetab"] = &$pageTitlesovertimetab;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["overtimetab"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["overtimetab"] = array();


	
				$strOriginalDetailsTable="overtimes";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="overtimes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "overtimes";
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
					$masterTablesData["overtimetab"][0] = $masterParams;
				$masterTablesData["overtimetab"][0]["masterKeys"] = array();
	$masterTablesData["overtimetab"][0]["masterKeys"][]="OtiD";
				$masterTablesData["overtimetab"][0]["detailKeys"] = array();
	$masterTablesData["overtimetab"][0]["detailKeys"][]="OtiD";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_overtimetab()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "OTtabID,  EmployeeID,  OtiD";
$proto0["m_strFrom"] = "FROM overtimetab";
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
	"m_strName" => "OTtabID",
	"m_strTable" => "overtimetab",
	"m_srcTableName" => "overtimetab"
));

$proto6["m_sql"] = "OTtabID";
$proto6["m_srcTableName"] = "overtimetab";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "overtimetab",
	"m_srcTableName" => "overtimetab"
));

$proto8["m_sql"] = "EmployeeID";
$proto8["m_srcTableName"] = "overtimetab";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "OtiD",
	"m_strTable" => "overtimetab",
	"m_srcTableName" => "overtimetab"
));

$proto10["m_sql"] = "OtiD";
$proto10["m_srcTableName"] = "overtimetab";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "overtimetab";
$proto13["m_srcTableName"] = "overtimetab";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "OTtabID";
$proto13["m_columns"][] = "EmployeeID";
$proto13["m_columns"][] = "OtiD";
$proto13["m_columns"][] = "UserID";
$proto13["m_columns"][] = "UserName";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "overtimetab";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "overtimetab";
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
$proto0["m_srcTableName"]="overtimetab";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_overtimetab = createSqlQuery_overtimetab();


	
		;

			

$tdataovertimetab[".sqlquery"] = $queryData_overtimetab;

$tableEvents["overtimetab"] = new eventsBase;
$tdataovertimetab[".hasEvents"] = false;

?>