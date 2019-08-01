<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalogo = array();
	$tdatalogo[".truncateText"] = true;
	$tdatalogo[".NumberOfChars"] = 80;
	$tdatalogo[".ShortName"] = "logo";
	$tdatalogo[".OwnerID"] = "";
	$tdatalogo[".OriginalTable"] = "logo";

//	field labels
$fieldLabelslogo = array();
$fieldToolTipslogo = array();
$pageTitleslogo = array();
$placeHolderslogo = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslogo["English"] = array();
	$fieldToolTipslogo["English"] = array();
	$placeHolderslogo["English"] = array();
	$pageTitleslogo["English"] = array();
	$fieldLabelslogo["English"]["LID"] = "LID";
	$fieldToolTipslogo["English"]["LID"] = "";
	$placeHolderslogo["English"]["LID"] = "";
	$fieldLabelslogo["English"]["Logo"] = "Logo";
	$fieldToolTipslogo["English"]["Logo"] = "";
	$placeHolderslogo["English"]["Logo"] = "";
	if (count($fieldToolTipslogo["English"]))
		$tdatalogo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslogo[""] = array();
	$fieldToolTipslogo[""] = array();
	$placeHolderslogo[""] = array();
	$pageTitleslogo[""] = array();
	if (count($fieldToolTipslogo[""]))
		$tdatalogo[".isUseToolTips"] = true;
}


	$tdatalogo[".NCSearch"] = true;



$tdatalogo[".shortTableName"] = "logo";
$tdatalogo[".nSecOptions"] = 0;
$tdatalogo[".recsPerRowPrint"] = 1;
$tdatalogo[".mainTableOwnerID"] = "";
$tdatalogo[".moveNext"] = 1;
$tdatalogo[".entityType"] = 0;

$tdatalogo[".strOriginalTableName"] = "logo";

	



$tdatalogo[".showAddInPopup"] = false;

$tdatalogo[".showEditInPopup"] = false;

$tdatalogo[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatalogo[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalogo[".fieldsForRegister"] = array();

$tdatalogo[".listAjax"] = false;

	$tdatalogo[".audit"] = false;

	$tdatalogo[".locking"] = false;

$tdatalogo[".edit"] = true;
$tdatalogo[".afterEditAction"] = 1;
$tdatalogo[".closePopupAfterEdit"] = 1;
$tdatalogo[".afterEditActionDetTable"] = "";

$tdatalogo[".add"] = true;
$tdatalogo[".afterAddAction"] = 1;
$tdatalogo[".closePopupAfterAdd"] = 1;
$tdatalogo[".afterAddActionDetTable"] = "";

$tdatalogo[".list"] = true;



$tdatalogo[".reorderRecordsByHeader"] = true;


$tdatalogo[".exportFormatting"] = 2;
$tdatalogo[".exportDelimiter"] = ",";
		
$tdatalogo[".view"] = true;

$tdatalogo[".import"] = true;

$tdatalogo[".exportTo"] = true;

$tdatalogo[".printFriendly"] = true;

$tdatalogo[".delete"] = true;

$tdatalogo[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatalogo[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatalogo[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatalogo[".searchSaving"] = false;
//

$tdatalogo[".showSearchPanel"] = true;
		$tdatalogo[".flexibleSearch"] = true;

$tdatalogo[".isUseAjaxSuggest"] = true;

$tdatalogo[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																				

$tdatalogo[".ajaxCodeSnippetAdded"] = false;

$tdatalogo[".buttonsAdded"] = false;

$tdatalogo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalogo[".isUseTimeForSearch"] = false;





$tdatalogo[".allSearchFields"] = array();
$tdatalogo[".filterFields"] = array();
$tdatalogo[".requiredSearchFields"] = array();

$tdatalogo[".allSearchFields"][] = "LID";
	$tdatalogo[".allSearchFields"][] = "Logo";
	

$tdatalogo[".googleLikeFields"] = array();
$tdatalogo[".googleLikeFields"][] = "LID";
$tdatalogo[".googleLikeFields"][] = "Logo";


$tdatalogo[".advSearchFields"] = array();
$tdatalogo[".advSearchFields"][] = "LID";
$tdatalogo[".advSearchFields"][] = "Logo";

$tdatalogo[".tableType"] = "list";

$tdatalogo[".printerPageOrientation"] = 0;
$tdatalogo[".nPrinterPageScale"] = 100;

$tdatalogo[".nPrinterSplitRecords"] = 40;

$tdatalogo[".nPrinterPDFSplitRecords"] = 40;



$tdatalogo[".geocodingEnabled"] = false;





$tdatalogo[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatalogo[".pageSize"] = 20;

$tdatalogo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalogo[".strOrderBy"] = $tstrOrderBy;

$tdatalogo[".orderindexes"] = array();

$tdatalogo[".sqlHead"] = "SELECT LID,  	Logo";
$tdatalogo[".sqlFrom"] = "FROM logo";
$tdatalogo[".sqlWhereExpr"] = "";
$tdatalogo[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalogo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalogo[".arrGroupsPerPage"] = $arrGPP;

$tdatalogo[".highlightSearchResults"] = true;

$tableKeyslogo = array();
$tableKeyslogo[] = "LID";
$tdatalogo[".Keys"] = $tableKeyslogo;

$tdatalogo[".listFields"] = array();
$tdatalogo[".listFields"][] = "LID";
$tdatalogo[".listFields"][] = "Logo";

$tdatalogo[".hideMobileList"] = array();


$tdatalogo[".viewFields"] = array();
$tdatalogo[".viewFields"][] = "LID";
$tdatalogo[".viewFields"][] = "Logo";

$tdatalogo[".addFields"] = array();
$tdatalogo[".addFields"][] = "Logo";

$tdatalogo[".masterListFields"] = array();
$tdatalogo[".masterListFields"][] = "LID";
$tdatalogo[".masterListFields"][] = "Logo";

$tdatalogo[".inlineAddFields"] = array();

$tdatalogo[".editFields"] = array();
$tdatalogo[".editFields"][] = "Logo";

$tdatalogo[".inlineEditFields"] = array();

$tdatalogo[".updateSelectedFields"] = array();
$tdatalogo[".updateSelectedFields"][] = "Logo";


$tdatalogo[".exportFields"] = array();
$tdatalogo[".exportFields"][] = "LID";
$tdatalogo[".exportFields"][] = "Logo";

$tdatalogo[".importFields"] = array();
$tdatalogo[".importFields"][] = "LID";
$tdatalogo[".importFields"][] = "Logo";

$tdatalogo[".printFields"] = array();
$tdatalogo[".printFields"][] = "LID";
$tdatalogo[".printFields"][] = "Logo";


//	LID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LID";
	$fdata["GoodName"] = "LID";
	$fdata["ownerTable"] = "logo";
	$fdata["Label"] = GetFieldLabel("logo","LID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LID";

	
	
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




	$tdatalogo["LID"] = $fdata;
//	Logo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Logo";
	$fdata["GoodName"] = "Logo";
	$fdata["ownerTable"] = "logo";
	$fdata["Label"] = GetFieldLabel("logo","Logo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Logo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Logo";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 200;
	$vdata["ThumbHeight"] = 72;
			$vdata["ImageWidth"] = 400;
	$vdata["ImageHeight"] = 0;

	
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
	
		
	


	
	
	
							$edata["acceptFileTypes"] = "gif";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|png";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

		$edata["maxNumberOfFiles"] = 1;

	
		$edata["maxTotalFilesSize"] = 800;

	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalogo["Logo"] = $fdata;


$tables_data["logo"]=&$tdatalogo;
$field_labels["logo"] = &$fieldLabelslogo;
$fieldToolTips["logo"] = &$fieldToolTipslogo;
$placeHolders["logo"] = &$placeHolderslogo;
$page_titles["logo"] = &$pageTitleslogo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["logo"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["logo"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_logo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LID,  	Logo";
$proto0["m_strFrom"] = "FROM logo";
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
	"m_strName" => "LID",
	"m_strTable" => "logo",
	"m_srcTableName" => "logo"
));

$proto6["m_sql"] = "LID";
$proto6["m_srcTableName"] = "logo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Logo",
	"m_strTable" => "logo",
	"m_srcTableName" => "logo"
));

$proto8["m_sql"] = "Logo";
$proto8["m_srcTableName"] = "logo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "logo";
$proto11["m_srcTableName"] = "logo";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "LID";
$proto11["m_columns"][] = "Logo";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "logo";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "logo";
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
$proto0["m_srcTableName"]="logo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_logo = createSqlQuery_logo();


	
		;

		

$tdatalogo[".sqlquery"] = $queryData_logo;

include_once(getabspath("include/logo_events.php"));
$tableEvents["logo"] = new eventclass_logo;
$tdatalogo[".hasEvents"] = true;

?>