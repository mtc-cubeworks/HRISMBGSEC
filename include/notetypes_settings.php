<?php
require_once(getabspath("classes/cipherer.php"));




$tdatanotetypes = array();
	$tdatanotetypes[".truncateText"] = true;
	$tdatanotetypes[".NumberOfChars"] = 80;
	$tdatanotetypes[".ShortName"] = "notetypes";
	$tdatanotetypes[".OwnerID"] = "";
	$tdatanotetypes[".OriginalTable"] = "notetypes";

//	field labels
$fieldLabelsnotetypes = array();
$fieldToolTipsnotetypes = array();
$pageTitlesnotetypes = array();
$placeHoldersnotetypes = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsnotetypes["English"] = array();
	$fieldToolTipsnotetypes["English"] = array();
	$placeHoldersnotetypes["English"] = array();
	$pageTitlesnotetypes["English"] = array();
	$fieldLabelsnotetypes["English"]["NTID"] = "NTID";
	$fieldToolTipsnotetypes["English"]["NTID"] = "";
	$placeHoldersnotetypes["English"]["NTID"] = "";
	$fieldLabelsnotetypes["English"]["NoteTypes"] = "Note Types";
	$fieldToolTipsnotetypes["English"]["NoteTypes"] = "";
	$placeHoldersnotetypes["English"]["NoteTypes"] = "";
	if (count($fieldToolTipsnotetypes["English"]))
		$tdatanotetypes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsnotetypes[""] = array();
	$fieldToolTipsnotetypes[""] = array();
	$placeHoldersnotetypes[""] = array();
	$pageTitlesnotetypes[""] = array();
	$fieldLabelsnotetypes[""]["NTID"] = "NTID";
	$fieldToolTipsnotetypes[""]["NTID"] = "";
	$placeHoldersnotetypes[""]["NTID"] = "";
	$fieldLabelsnotetypes[""]["NoteTypes"] = "Note Types";
	$fieldToolTipsnotetypes[""]["NoteTypes"] = "";
	$placeHoldersnotetypes[""]["NoteTypes"] = "";
	if (count($fieldToolTipsnotetypes[""]))
		$tdatanotetypes[".isUseToolTips"] = true;
}


	$tdatanotetypes[".NCSearch"] = true;



$tdatanotetypes[".shortTableName"] = "notetypes";
$tdatanotetypes[".nSecOptions"] = 0;
$tdatanotetypes[".recsPerRowPrint"] = 1;
$tdatanotetypes[".mainTableOwnerID"] = "";
$tdatanotetypes[".moveNext"] = 1;
$tdatanotetypes[".entityType"] = 0;

$tdatanotetypes[".strOriginalTableName"] = "notetypes";

	



$tdatanotetypes[".showAddInPopup"] = false;

$tdatanotetypes[".showEditInPopup"] = false;

$tdatanotetypes[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatanotetypes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatanotetypes[".fieldsForRegister"] = array();

$tdatanotetypes[".listAjax"] = false;

	$tdatanotetypes[".audit"] = false;

	$tdatanotetypes[".locking"] = false;

$tdatanotetypes[".edit"] = true;
$tdatanotetypes[".afterEditAction"] = 1;
$tdatanotetypes[".closePopupAfterEdit"] = 1;
$tdatanotetypes[".afterEditActionDetTable"] = "";

$tdatanotetypes[".add"] = true;
$tdatanotetypes[".afterAddAction"] = 1;
$tdatanotetypes[".closePopupAfterAdd"] = 1;
$tdatanotetypes[".afterAddActionDetTable"] = "";

$tdatanotetypes[".list"] = true;



$tdatanotetypes[".reorderRecordsByHeader"] = true;


$tdatanotetypes[".exportFormatting"] = 2;
$tdatanotetypes[".exportDelimiter"] = ",";
		
$tdatanotetypes[".inlineAdd"] = true;
$tdatanotetypes[".view"] = true;

$tdatanotetypes[".import"] = true;

$tdatanotetypes[".exportTo"] = true;

$tdatanotetypes[".printFriendly"] = true;

$tdatanotetypes[".delete"] = true;

$tdatanotetypes[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatanotetypes[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatanotetypes[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatanotetypes[".searchSaving"] = false;
//

$tdatanotetypes[".showSearchPanel"] = true;
		$tdatanotetypes[".flexibleSearch"] = true;

$tdatanotetypes[".isUseAjaxSuggest"] = true;

$tdatanotetypes[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdatanotetypes[".ajaxCodeSnippetAdded"] = false;

$tdatanotetypes[".buttonsAdded"] = false;

$tdatanotetypes[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanotetypes[".isUseTimeForSearch"] = false;





$tdatanotetypes[".allSearchFields"] = array();
$tdatanotetypes[".filterFields"] = array();
$tdatanotetypes[".requiredSearchFields"] = array();

$tdatanotetypes[".allSearchFields"][] = "NTID";
	$tdatanotetypes[".allSearchFields"][] = "NoteTypes";
	

$tdatanotetypes[".googleLikeFields"] = array();
$tdatanotetypes[".googleLikeFields"][] = "NTID";
$tdatanotetypes[".googleLikeFields"][] = "NoteTypes";


$tdatanotetypes[".advSearchFields"] = array();
$tdatanotetypes[".advSearchFields"][] = "NTID";
$tdatanotetypes[".advSearchFields"][] = "NoteTypes";

$tdatanotetypes[".tableType"] = "list";

$tdatanotetypes[".printerPageOrientation"] = 0;
$tdatanotetypes[".nPrinterPageScale"] = 100;

$tdatanotetypes[".nPrinterSplitRecords"] = 40;

$tdatanotetypes[".nPrinterPDFSplitRecords"] = 40;



$tdatanotetypes[".geocodingEnabled"] = false;





$tdatanotetypes[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatanotetypes[".pageSize"] = 20;

$tdatanotetypes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatanotetypes[".strOrderBy"] = $tstrOrderBy;

$tdatanotetypes[".orderindexes"] = array();

$tdatanotetypes[".sqlHead"] = "SELECT NTID,  	NoteTypes";
$tdatanotetypes[".sqlFrom"] = "FROM notetypes";
$tdatanotetypes[".sqlWhereExpr"] = "";
$tdatanotetypes[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanotetypes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanotetypes[".arrGroupsPerPage"] = $arrGPP;

$tdatanotetypes[".highlightSearchResults"] = true;

$tableKeysnotetypes = array();
$tableKeysnotetypes[] = "NTID";
$tdatanotetypes[".Keys"] = $tableKeysnotetypes;

$tdatanotetypes[".listFields"] = array();
$tdatanotetypes[".listFields"][] = "NTID";
$tdatanotetypes[".listFields"][] = "NoteTypes";

$tdatanotetypes[".hideMobileList"] = array();


$tdatanotetypes[".viewFields"] = array();
$tdatanotetypes[".viewFields"][] = "NTID";
$tdatanotetypes[".viewFields"][] = "NoteTypes";

$tdatanotetypes[".addFields"] = array();
$tdatanotetypes[".addFields"][] = "NoteTypes";

$tdatanotetypes[".masterListFields"] = array();
$tdatanotetypes[".masterListFields"][] = "NTID";
$tdatanotetypes[".masterListFields"][] = "NoteTypes";

$tdatanotetypes[".inlineAddFields"] = array();
$tdatanotetypes[".inlineAddFields"][] = "NoteTypes";

$tdatanotetypes[".editFields"] = array();
$tdatanotetypes[".editFields"][] = "NoteTypes";

$tdatanotetypes[".inlineEditFields"] = array();
$tdatanotetypes[".inlineEditFields"][] = "NoteTypes";

$tdatanotetypes[".updateSelectedFields"] = array();
$tdatanotetypes[".updateSelectedFields"][] = "NoteTypes";


$tdatanotetypes[".exportFields"] = array();
$tdatanotetypes[".exportFields"][] = "NTID";
$tdatanotetypes[".exportFields"][] = "NoteTypes";

$tdatanotetypes[".importFields"] = array();
$tdatanotetypes[".importFields"][] = "NTID";
$tdatanotetypes[".importFields"][] = "NoteTypes";

$tdatanotetypes[".printFields"] = array();
$tdatanotetypes[".printFields"][] = "NTID";
$tdatanotetypes[".printFields"][] = "NoteTypes";


//	NTID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "NTID";
	$fdata["GoodName"] = "NTID";
	$fdata["ownerTable"] = "notetypes";
	$fdata["Label"] = GetFieldLabel("notetypes","NTID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NTID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NTID";

	
	
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




	$tdatanotetypes["NTID"] = $fdata;
//	NoteTypes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NoteTypes";
	$fdata["GoodName"] = "NoteTypes";
	$fdata["ownerTable"] = "notetypes";
	$fdata["Label"] = GetFieldLabel("notetypes","NoteTypes");
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

		$fdata["strField"] = "NoteTypes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NoteTypes";

	
	
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
			$edata["EditParams"].= " maxlength=70";

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




	$tdatanotetypes["NoteTypes"] = $fdata;


$tables_data["notetypes"]=&$tdatanotetypes;
$field_labels["notetypes"] = &$fieldLabelsnotetypes;
$fieldToolTips["notetypes"] = &$fieldToolTipsnotetypes;
$placeHolders["notetypes"] = &$placeHoldersnotetypes;
$page_titles["notetypes"] = &$pageTitlesnotetypes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["notetypes"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["notetypes"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_notetypes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "NTID,  	NoteTypes";
$proto0["m_strFrom"] = "FROM notetypes";
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
	"m_strName" => "NTID",
	"m_strTable" => "notetypes",
	"m_srcTableName" => "notetypes"
));

$proto6["m_sql"] = "NTID";
$proto6["m_srcTableName"] = "notetypes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NoteTypes",
	"m_strTable" => "notetypes",
	"m_srcTableName" => "notetypes"
));

$proto8["m_sql"] = "NoteTypes";
$proto8["m_srcTableName"] = "notetypes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "notetypes";
$proto11["m_srcTableName"] = "notetypes";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "NTID";
$proto11["m_columns"][] = "NoteTypes";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "notetypes";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "notetypes";
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
$proto0["m_srcTableName"]="notetypes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_notetypes = createSqlQuery_notetypes();


	
		;

		

$tdatanotetypes[".sqlquery"] = $queryData_notetypes;

$tableEvents["notetypes"] = new eventsBase;
$tdatanotetypes[".hasEvents"] = false;

?>