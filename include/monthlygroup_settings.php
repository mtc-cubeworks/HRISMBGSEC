<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamonthlygroup = array();
	$tdatamonthlygroup[".truncateText"] = true;
	$tdatamonthlygroup[".NumberOfChars"] = 80;
	$tdatamonthlygroup[".ShortName"] = "monthlygroup";
	$tdatamonthlygroup[".OwnerID"] = "";
	$tdatamonthlygroup[".OriginalTable"] = "monthlygroup";

//	field labels
$fieldLabelsmonthlygroup = array();
$fieldToolTipsmonthlygroup = array();
$pageTitlesmonthlygroup = array();
$placeHoldersmonthlygroup = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmonthlygroup["English"] = array();
	$fieldToolTipsmonthlygroup["English"] = array();
	$placeHoldersmonthlygroup["English"] = array();
	$pageTitlesmonthlygroup["English"] = array();
	$fieldLabelsmonthlygroup["English"]["MgID"] = "Mg ID";
	$fieldToolTipsmonthlygroup["English"]["MgID"] = "";
	$placeHoldersmonthlygroup["English"]["MgID"] = "";
	$fieldLabelsmonthlygroup["English"]["MontlyGroup"] = "Montly Group";
	$fieldToolTipsmonthlygroup["English"]["MontlyGroup"] = "";
	$placeHoldersmonthlygroup["English"]["MontlyGroup"] = "";
	if (count($fieldToolTipsmonthlygroup["English"]))
		$tdatamonthlygroup[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmonthlygroup[""] = array();
	$fieldToolTipsmonthlygroup[""] = array();
	$placeHoldersmonthlygroup[""] = array();
	$pageTitlesmonthlygroup[""] = array();
	$fieldLabelsmonthlygroup[""]["MgID"] = "Mg ID";
	$fieldToolTipsmonthlygroup[""]["MgID"] = "";
	$placeHoldersmonthlygroup[""]["MgID"] = "";
	$fieldLabelsmonthlygroup[""]["MontlyGroup"] = "Montly Group";
	$fieldToolTipsmonthlygroup[""]["MontlyGroup"] = "";
	$placeHoldersmonthlygroup[""]["MontlyGroup"] = "";
	if (count($fieldToolTipsmonthlygroup[""]))
		$tdatamonthlygroup[".isUseToolTips"] = true;
}


	$tdatamonthlygroup[".NCSearch"] = true;



$tdatamonthlygroup[".shortTableName"] = "monthlygroup";
$tdatamonthlygroup[".nSecOptions"] = 0;
$tdatamonthlygroup[".recsPerRowPrint"] = 1;
$tdatamonthlygroup[".mainTableOwnerID"] = "";
$tdatamonthlygroup[".moveNext"] = 1;
$tdatamonthlygroup[".entityType"] = 0;

$tdatamonthlygroup[".strOriginalTableName"] = "monthlygroup";

	



$tdatamonthlygroup[".showAddInPopup"] = false;

$tdatamonthlygroup[".showEditInPopup"] = false;

$tdatamonthlygroup[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamonthlygroup[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamonthlygroup[".fieldsForRegister"] = array();

$tdatamonthlygroup[".listAjax"] = false;

	$tdatamonthlygroup[".audit"] = false;

	$tdatamonthlygroup[".locking"] = false;

$tdatamonthlygroup[".edit"] = true;
$tdatamonthlygroup[".afterEditAction"] = 1;
$tdatamonthlygroup[".closePopupAfterEdit"] = 1;
$tdatamonthlygroup[".afterEditActionDetTable"] = "";

$tdatamonthlygroup[".add"] = true;
$tdatamonthlygroup[".afterAddAction"] = 1;
$tdatamonthlygroup[".closePopupAfterAdd"] = 1;
$tdatamonthlygroup[".afterAddActionDetTable"] = "";

$tdatamonthlygroup[".list"] = true;



$tdatamonthlygroup[".reorderRecordsByHeader"] = true;


$tdatamonthlygroup[".exportFormatting"] = 2;
$tdatamonthlygroup[".exportDelimiter"] = ",";
		
$tdatamonthlygroup[".view"] = true;

$tdatamonthlygroup[".import"] = true;

$tdatamonthlygroup[".exportTo"] = true;

$tdatamonthlygroup[".printFriendly"] = true;

$tdatamonthlygroup[".delete"] = true;

$tdatamonthlygroup[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamonthlygroup[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamonthlygroup[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamonthlygroup[".searchSaving"] = false;
//

$tdatamonthlygroup[".showSearchPanel"] = true;
		$tdatamonthlygroup[".flexibleSearch"] = true;

$tdatamonthlygroup[".isUseAjaxSuggest"] = true;

$tdatamonthlygroup[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																		

$tdatamonthlygroup[".ajaxCodeSnippetAdded"] = false;

$tdatamonthlygroup[".buttonsAdded"] = false;

$tdatamonthlygroup[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamonthlygroup[".isUseTimeForSearch"] = false;





$tdatamonthlygroup[".allSearchFields"] = array();
$tdatamonthlygroup[".filterFields"] = array();
$tdatamonthlygroup[".requiredSearchFields"] = array();

$tdatamonthlygroup[".allSearchFields"][] = "MgID";
	$tdatamonthlygroup[".allSearchFields"][] = "MontlyGroup";
	

$tdatamonthlygroup[".googleLikeFields"] = array();
$tdatamonthlygroup[".googleLikeFields"][] = "MgID";
$tdatamonthlygroup[".googleLikeFields"][] = "MontlyGroup";


$tdatamonthlygroup[".advSearchFields"] = array();
$tdatamonthlygroup[".advSearchFields"][] = "MgID";
$tdatamonthlygroup[".advSearchFields"][] = "MontlyGroup";

$tdatamonthlygroup[".tableType"] = "list";

$tdatamonthlygroup[".printerPageOrientation"] = 0;
$tdatamonthlygroup[".nPrinterPageScale"] = 100;

$tdatamonthlygroup[".nPrinterSplitRecords"] = 40;

$tdatamonthlygroup[".nPrinterPDFSplitRecords"] = 40;



$tdatamonthlygroup[".geocodingEnabled"] = false;





$tdatamonthlygroup[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamonthlygroup[".pageSize"] = 20;

$tdatamonthlygroup[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamonthlygroup[".strOrderBy"] = $tstrOrderBy;

$tdatamonthlygroup[".orderindexes"] = array();

$tdatamonthlygroup[".sqlHead"] = "SELECT MgID,  	MontlyGroup";
$tdatamonthlygroup[".sqlFrom"] = "FROM monthlygroup";
$tdatamonthlygroup[".sqlWhereExpr"] = "";
$tdatamonthlygroup[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamonthlygroup[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamonthlygroup[".arrGroupsPerPage"] = $arrGPP;

$tdatamonthlygroup[".highlightSearchResults"] = true;

$tableKeysmonthlygroup = array();
$tableKeysmonthlygroup[] = "MgID";
$tdatamonthlygroup[".Keys"] = $tableKeysmonthlygroup;

$tdatamonthlygroup[".listFields"] = array();
$tdatamonthlygroup[".listFields"][] = "MgID";
$tdatamonthlygroup[".listFields"][] = "MontlyGroup";

$tdatamonthlygroup[".hideMobileList"] = array();


$tdatamonthlygroup[".viewFields"] = array();
$tdatamonthlygroup[".viewFields"][] = "MgID";
$tdatamonthlygroup[".viewFields"][] = "MontlyGroup";

$tdatamonthlygroup[".addFields"] = array();
$tdatamonthlygroup[".addFields"][] = "MontlyGroup";

$tdatamonthlygroup[".masterListFields"] = array();
$tdatamonthlygroup[".masterListFields"][] = "MgID";
$tdatamonthlygroup[".masterListFields"][] = "MontlyGroup";

$tdatamonthlygroup[".inlineAddFields"] = array();
$tdatamonthlygroup[".inlineAddFields"][] = "MontlyGroup";

$tdatamonthlygroup[".editFields"] = array();
$tdatamonthlygroup[".editFields"][] = "MontlyGroup";

$tdatamonthlygroup[".inlineEditFields"] = array();
$tdatamonthlygroup[".inlineEditFields"][] = "MontlyGroup";

$tdatamonthlygroup[".updateSelectedFields"] = array();
$tdatamonthlygroup[".updateSelectedFields"][] = "MontlyGroup";


$tdatamonthlygroup[".exportFields"] = array();
$tdatamonthlygroup[".exportFields"][] = "MgID";
$tdatamonthlygroup[".exportFields"][] = "MontlyGroup";

$tdatamonthlygroup[".importFields"] = array();
$tdatamonthlygroup[".importFields"][] = "MgID";
$tdatamonthlygroup[".importFields"][] = "MontlyGroup";

$tdatamonthlygroup[".printFields"] = array();
$tdatamonthlygroup[".printFields"][] = "MgID";
$tdatamonthlygroup[".printFields"][] = "MontlyGroup";


//	MgID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MgID";
	$fdata["GoodName"] = "MgID";
	$fdata["ownerTable"] = "monthlygroup";
	$fdata["Label"] = GetFieldLabel("monthlygroup","MgID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MgID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MgID";

	
	
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




	$tdatamonthlygroup["MgID"] = $fdata;
//	MontlyGroup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MontlyGroup";
	$fdata["GoodName"] = "MontlyGroup";
	$fdata["ownerTable"] = "monthlygroup";
	$fdata["Label"] = GetFieldLabel("monthlygroup","MontlyGroup");
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

		$fdata["strField"] = "MontlyGroup";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MontlyGroup";

	
	
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




	$tdatamonthlygroup["MontlyGroup"] = $fdata;


$tables_data["monthlygroup"]=&$tdatamonthlygroup;
$field_labels["monthlygroup"] = &$fieldLabelsmonthlygroup;
$fieldToolTips["monthlygroup"] = &$fieldToolTipsmonthlygroup;
$placeHolders["monthlygroup"] = &$placeHoldersmonthlygroup;
$page_titles["monthlygroup"] = &$pageTitlesmonthlygroup;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["monthlygroup"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["monthlygroup"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_monthlygroup()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MgID,  	MontlyGroup";
$proto0["m_strFrom"] = "FROM monthlygroup";
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
	"m_strName" => "MgID",
	"m_strTable" => "monthlygroup",
	"m_srcTableName" => "monthlygroup"
));

$proto6["m_sql"] = "MgID";
$proto6["m_srcTableName"] = "monthlygroup";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MontlyGroup",
	"m_strTable" => "monthlygroup",
	"m_srcTableName" => "monthlygroup"
));

$proto8["m_sql"] = "MontlyGroup";
$proto8["m_srcTableName"] = "monthlygroup";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "monthlygroup";
$proto11["m_srcTableName"] = "monthlygroup";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "MgID";
$proto11["m_columns"][] = "MontlyGroup";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "monthlygroup";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "monthlygroup";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="monthlygroup";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_monthlygroup = createSqlQuery_monthlygroup();


	
		;

		

$tdatamonthlygroup[".sqlquery"] = $queryData_monthlygroup;

$tableEvents["monthlygroup"] = new eventsBase;
$tdatamonthlygroup[".hasEvents"] = false;

?>