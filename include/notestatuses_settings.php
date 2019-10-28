<?php
require_once(getabspath("classes/cipherer.php"));




$tdatanotestatuses = array();
	$tdatanotestatuses[".truncateText"] = true;
	$tdatanotestatuses[".NumberOfChars"] = 80;
	$tdatanotestatuses[".ShortName"] = "notestatuses";
	$tdatanotestatuses[".OwnerID"] = "";
	$tdatanotestatuses[".OriginalTable"] = "notestatuses";

//	field labels
$fieldLabelsnotestatuses = array();
$fieldToolTipsnotestatuses = array();
$pageTitlesnotestatuses = array();
$placeHoldersnotestatuses = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsnotestatuses["English"] = array();
	$fieldToolTipsnotestatuses["English"] = array();
	$placeHoldersnotestatuses["English"] = array();
	$pageTitlesnotestatuses["English"] = array();
	$fieldLabelsnotestatuses["English"]["NSID"] = "NSID";
	$fieldToolTipsnotestatuses["English"]["NSID"] = "";
	$placeHoldersnotestatuses["English"]["NSID"] = "";
	$fieldLabelsnotestatuses["English"]["NoteStatus"] = "Note Status";
	$fieldToolTipsnotestatuses["English"]["NoteStatus"] = "";
	$placeHoldersnotestatuses["English"]["NoteStatus"] = "";
	if (count($fieldToolTipsnotestatuses["English"]))
		$tdatanotestatuses[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsnotestatuses[""] = array();
	$fieldToolTipsnotestatuses[""] = array();
	$placeHoldersnotestatuses[""] = array();
	$pageTitlesnotestatuses[""] = array();
	$fieldLabelsnotestatuses[""]["NSID"] = "NSID";
	$fieldToolTipsnotestatuses[""]["NSID"] = "";
	$placeHoldersnotestatuses[""]["NSID"] = "";
	$fieldLabelsnotestatuses[""]["NoteStatus"] = "Note Status";
	$fieldToolTipsnotestatuses[""]["NoteStatus"] = "";
	$placeHoldersnotestatuses[""]["NoteStatus"] = "";
	if (count($fieldToolTipsnotestatuses[""]))
		$tdatanotestatuses[".isUseToolTips"] = true;
}


	$tdatanotestatuses[".NCSearch"] = true;



$tdatanotestatuses[".shortTableName"] = "notestatuses";
$tdatanotestatuses[".nSecOptions"] = 0;
$tdatanotestatuses[".recsPerRowPrint"] = 1;
$tdatanotestatuses[".mainTableOwnerID"] = "";
$tdatanotestatuses[".moveNext"] = 1;
$tdatanotestatuses[".entityType"] = 0;

$tdatanotestatuses[".strOriginalTableName"] = "notestatuses";

	



$tdatanotestatuses[".showAddInPopup"] = false;

$tdatanotestatuses[".showEditInPopup"] = false;

$tdatanotestatuses[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatanotestatuses[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatanotestatuses[".fieldsForRegister"] = array();

$tdatanotestatuses[".listAjax"] = false;

	$tdatanotestatuses[".audit"] = false;

	$tdatanotestatuses[".locking"] = false;

$tdatanotestatuses[".edit"] = true;
$tdatanotestatuses[".afterEditAction"] = 0;
$tdatanotestatuses[".closePopupAfterEdit"] = 1;
$tdatanotestatuses[".afterEditActionDetTable"] = "Detail tables not found!";

$tdatanotestatuses[".add"] = true;
$tdatanotestatuses[".afterAddAction"] = 0;
$tdatanotestatuses[".closePopupAfterAdd"] = 1;
$tdatanotestatuses[".afterAddActionDetTable"] = "Detail tables not found!";

$tdatanotestatuses[".list"] = true;



$tdatanotestatuses[".reorderRecordsByHeader"] = true;


$tdatanotestatuses[".exportFormatting"] = 2;
$tdatanotestatuses[".exportDelimiter"] = ",";
		
$tdatanotestatuses[".view"] = true;

$tdatanotestatuses[".import"] = true;

$tdatanotestatuses[".exportTo"] = true;

$tdatanotestatuses[".printFriendly"] = true;

$tdatanotestatuses[".delete"] = true;

$tdatanotestatuses[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatanotestatuses[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatanotestatuses[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatanotestatuses[".searchSaving"] = false;
//

$tdatanotestatuses[".showSearchPanel"] = true;
		$tdatanotestatuses[".flexibleSearch"] = true;

$tdatanotestatuses[".isUseAjaxSuggest"] = true;

$tdatanotestatuses[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																							

$tdatanotestatuses[".ajaxCodeSnippetAdded"] = false;

$tdatanotestatuses[".buttonsAdded"] = false;

$tdatanotestatuses[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanotestatuses[".isUseTimeForSearch"] = false;





$tdatanotestatuses[".allSearchFields"] = array();
$tdatanotestatuses[".filterFields"] = array();
$tdatanotestatuses[".requiredSearchFields"] = array();

$tdatanotestatuses[".allSearchFields"][] = "NSID";
	$tdatanotestatuses[".allSearchFields"][] = "NoteStatus";
	

$tdatanotestatuses[".googleLikeFields"] = array();
$tdatanotestatuses[".googleLikeFields"][] = "NSID";
$tdatanotestatuses[".googleLikeFields"][] = "NoteStatus";


$tdatanotestatuses[".advSearchFields"] = array();
$tdatanotestatuses[".advSearchFields"][] = "NSID";
$tdatanotestatuses[".advSearchFields"][] = "NoteStatus";

$tdatanotestatuses[".tableType"] = "list";

$tdatanotestatuses[".printerPageOrientation"] = 0;
$tdatanotestatuses[".nPrinterPageScale"] = 100;

$tdatanotestatuses[".nPrinterSplitRecords"] = 40;

$tdatanotestatuses[".nPrinterPDFSplitRecords"] = 40;



$tdatanotestatuses[".geocodingEnabled"] = false;





$tdatanotestatuses[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatanotestatuses[".pageSize"] = 20;

$tdatanotestatuses[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatanotestatuses[".strOrderBy"] = $tstrOrderBy;

$tdatanotestatuses[".orderindexes"] = array();

$tdatanotestatuses[".sqlHead"] = "SELECT NSID,  	NoteStatus";
$tdatanotestatuses[".sqlFrom"] = "FROM notestatuses";
$tdatanotestatuses[".sqlWhereExpr"] = "";
$tdatanotestatuses[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanotestatuses[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanotestatuses[".arrGroupsPerPage"] = $arrGPP;

$tdatanotestatuses[".highlightSearchResults"] = true;

$tableKeysnotestatuses = array();
$tableKeysnotestatuses[] = "NSID";
$tdatanotestatuses[".Keys"] = $tableKeysnotestatuses;

$tdatanotestatuses[".listFields"] = array();
$tdatanotestatuses[".listFields"][] = "NSID";
$tdatanotestatuses[".listFields"][] = "NoteStatus";

$tdatanotestatuses[".hideMobileList"] = array();


$tdatanotestatuses[".viewFields"] = array();
$tdatanotestatuses[".viewFields"][] = "NSID";
$tdatanotestatuses[".viewFields"][] = "NoteStatus";

$tdatanotestatuses[".addFields"] = array();
$tdatanotestatuses[".addFields"][] = "NoteStatus";

$tdatanotestatuses[".masterListFields"] = array();
$tdatanotestatuses[".masterListFields"][] = "NSID";
$tdatanotestatuses[".masterListFields"][] = "NoteStatus";

$tdatanotestatuses[".inlineAddFields"] = array();
$tdatanotestatuses[".inlineAddFields"][] = "NoteStatus";

$tdatanotestatuses[".editFields"] = array();
$tdatanotestatuses[".editFields"][] = "NoteStatus";

$tdatanotestatuses[".inlineEditFields"] = array();
$tdatanotestatuses[".inlineEditFields"][] = "NoteStatus";

$tdatanotestatuses[".updateSelectedFields"] = array();
$tdatanotestatuses[".updateSelectedFields"][] = "NoteStatus";


$tdatanotestatuses[".exportFields"] = array();
$tdatanotestatuses[".exportFields"][] = "NSID";
$tdatanotestatuses[".exportFields"][] = "NoteStatus";

$tdatanotestatuses[".importFields"] = array();
$tdatanotestatuses[".importFields"][] = "NSID";
$tdatanotestatuses[".importFields"][] = "NoteStatus";

$tdatanotestatuses[".printFields"] = array();
$tdatanotestatuses[".printFields"][] = "NSID";
$tdatanotestatuses[".printFields"][] = "NoteStatus";


//	NSID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "NSID";
	$fdata["GoodName"] = "NSID";
	$fdata["ownerTable"] = "notestatuses";
	$fdata["Label"] = GetFieldLabel("notestatuses","NSID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NSID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NSID";

	
	
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




	$tdatanotestatuses["NSID"] = $fdata;
//	NoteStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NoteStatus";
	$fdata["GoodName"] = "NoteStatus";
	$fdata["ownerTable"] = "notestatuses";
	$fdata["Label"] = GetFieldLabel("notestatuses","NoteStatus");
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

		$fdata["strField"] = "NoteStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NoteStatus";

	
	
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




	$tdatanotestatuses["NoteStatus"] = $fdata;


$tables_data["notestatuses"]=&$tdatanotestatuses;
$field_labels["notestatuses"] = &$fieldLabelsnotestatuses;
$fieldToolTips["notestatuses"] = &$fieldToolTipsnotestatuses;
$placeHolders["notestatuses"] = &$placeHoldersnotestatuses;
$page_titles["notestatuses"] = &$pageTitlesnotestatuses;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["notestatuses"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["notestatuses"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_notestatuses()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "NSID,  	NoteStatus";
$proto0["m_strFrom"] = "FROM notestatuses";
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
	"m_strName" => "NSID",
	"m_strTable" => "notestatuses",
	"m_srcTableName" => "notestatuses"
));

$proto6["m_sql"] = "NSID";
$proto6["m_srcTableName"] = "notestatuses";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NoteStatus",
	"m_strTable" => "notestatuses",
	"m_srcTableName" => "notestatuses"
));

$proto8["m_sql"] = "NoteStatus";
$proto8["m_srcTableName"] = "notestatuses";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "notestatuses";
$proto11["m_srcTableName"] = "notestatuses";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "NSID";
$proto11["m_columns"][] = "NoteStatus";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "notestatuses";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "notestatuses";
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
$proto0["m_srcTableName"]="notestatuses";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_notestatuses = createSqlQuery_notestatuses();


	
		;

		

$tdatanotestatuses[".sqlquery"] = $queryData_notestatuses;

$tableEvents["notestatuses"] = new eventsBase;
$tdatanotestatuses[".hasEvents"] = false;

?>