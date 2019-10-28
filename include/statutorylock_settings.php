<?php
require_once(getabspath("classes/cipherer.php"));




$tdatastatutorylock = array();
	$tdatastatutorylock[".truncateText"] = true;
	$tdatastatutorylock[".NumberOfChars"] = 80;
	$tdatastatutorylock[".ShortName"] = "statutorylock";
	$tdatastatutorylock[".OwnerID"] = "";
	$tdatastatutorylock[".OriginalTable"] = "statutorylock";

//	field labels
$fieldLabelsstatutorylock = array();
$fieldToolTipsstatutorylock = array();
$pageTitlesstatutorylock = array();
$placeHoldersstatutorylock = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstatutorylock["English"] = array();
	$fieldToolTipsstatutorylock["English"] = array();
	$placeHoldersstatutorylock["English"] = array();
	$pageTitlesstatutorylock["English"] = array();
	$fieldLabelsstatutorylock["English"]["staID"] = "Sta ID";
	$fieldToolTipsstatutorylock["English"]["staID"] = "";
	$placeHoldersstatutorylock["English"]["staID"] = "";
	$fieldLabelsstatutorylock["English"]["SSSTableLock"] = "SSS Button Lock";
	$fieldToolTipsstatutorylock["English"]["SSSTableLock"] = "";
	$placeHoldersstatutorylock["English"]["SSSTableLock"] = "";
	$fieldLabelsstatutorylock["English"]["PhilHealthTableLock"] = "Phil Health Button Lock";
	$fieldToolTipsstatutorylock["English"]["PhilHealthTableLock"] = "";
	$placeHoldersstatutorylock["English"]["PhilHealthTableLock"] = "";
	$fieldLabelsstatutorylock["English"]["PagIbigTableLock"] = "Pag Ibig Button Lock";
	$fieldToolTipsstatutorylock["English"]["PagIbigTableLock"] = "";
	$placeHoldersstatutorylock["English"]["PagIbigTableLock"] = "";
	if (count($fieldToolTipsstatutorylock["English"]))
		$tdatastatutorylock[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsstatutorylock[""] = array();
	$fieldToolTipsstatutorylock[""] = array();
	$placeHoldersstatutorylock[""] = array();
	$pageTitlesstatutorylock[""] = array();
	if (count($fieldToolTipsstatutorylock[""]))
		$tdatastatutorylock[".isUseToolTips"] = true;
}


	$tdatastatutorylock[".NCSearch"] = true;



$tdatastatutorylock[".shortTableName"] = "statutorylock";
$tdatastatutorylock[".nSecOptions"] = 0;
$tdatastatutorylock[".recsPerRowPrint"] = 1;
$tdatastatutorylock[".mainTableOwnerID"] = "";
$tdatastatutorylock[".moveNext"] = 1;
$tdatastatutorylock[".entityType"] = 0;

$tdatastatutorylock[".strOriginalTableName"] = "statutorylock";

	



$tdatastatutorylock[".showAddInPopup"] = false;

$tdatastatutorylock[".showEditInPopup"] = false;

$tdatastatutorylock[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatastatutorylock[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatastatutorylock[".fieldsForRegister"] = array();

$tdatastatutorylock[".listAjax"] = false;

	$tdatastatutorylock[".audit"] = false;

	$tdatastatutorylock[".locking"] = false;

$tdatastatutorylock[".edit"] = true;
$tdatastatutorylock[".afterEditAction"] = 0;
$tdatastatutorylock[".closePopupAfterEdit"] = 1;
$tdatastatutorylock[".afterEditActionDetTable"] = "";

$tdatastatutorylock[".add"] = true;
$tdatastatutorylock[".afterAddAction"] = 0;
$tdatastatutorylock[".closePopupAfterAdd"] = 1;
$tdatastatutorylock[".afterAddActionDetTable"] = "";

$tdatastatutorylock[".list"] = true;

$tdatastatutorylock[".inlineEdit"] = true;

$tdatastatutorylock[".updateSelected"] = true;

$tdatastatutorylock[".reorderRecordsByHeader"] = true;


$tdatastatutorylock[".exportFormatting"] = 2;
$tdatastatutorylock[".exportDelimiter"] = ",";
		
$tdatastatutorylock[".inlineAdd"] = true;
$tdatastatutorylock[".copy"] = true;
$tdatastatutorylock[".view"] = true;

$tdatastatutorylock[".import"] = true;

$tdatastatutorylock[".exportTo"] = true;

$tdatastatutorylock[".printFriendly"] = true;

$tdatastatutorylock[".delete"] = true;

$tdatastatutorylock[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatastatutorylock[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatastatutorylock[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatastatutorylock[".searchSaving"] = false;
//

$tdatastatutorylock[".showSearchPanel"] = true;
		$tdatastatutorylock[".flexibleSearch"] = true;

$tdatastatutorylock[".isUseAjaxSuggest"] = true;

$tdatastatutorylock[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																							

$tdatastatutorylock[".ajaxCodeSnippetAdded"] = false;

$tdatastatutorylock[".buttonsAdded"] = false;

$tdatastatutorylock[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastatutorylock[".isUseTimeForSearch"] = false;





$tdatastatutorylock[".allSearchFields"] = array();
$tdatastatutorylock[".filterFields"] = array();
$tdatastatutorylock[".requiredSearchFields"] = array();

$tdatastatutorylock[".allSearchFields"][] = "staID";
	$tdatastatutorylock[".allSearchFields"][] = "SSSTableLock";
	$tdatastatutorylock[".allSearchFields"][] = "PhilHealthTableLock";
	$tdatastatutorylock[".allSearchFields"][] = "PagIbigTableLock";
	

$tdatastatutorylock[".googleLikeFields"] = array();
$tdatastatutorylock[".googleLikeFields"][] = "staID";
$tdatastatutorylock[".googleLikeFields"][] = "SSSTableLock";
$tdatastatutorylock[".googleLikeFields"][] = "PhilHealthTableLock";
$tdatastatutorylock[".googleLikeFields"][] = "PagIbigTableLock";


$tdatastatutorylock[".advSearchFields"] = array();
$tdatastatutorylock[".advSearchFields"][] = "staID";
$tdatastatutorylock[".advSearchFields"][] = "SSSTableLock";
$tdatastatutorylock[".advSearchFields"][] = "PhilHealthTableLock";
$tdatastatutorylock[".advSearchFields"][] = "PagIbigTableLock";

$tdatastatutorylock[".tableType"] = "list";

$tdatastatutorylock[".printerPageOrientation"] = 0;
$tdatastatutorylock[".nPrinterPageScale"] = 100;

$tdatastatutorylock[".nPrinterSplitRecords"] = 40;

$tdatastatutorylock[".nPrinterPDFSplitRecords"] = 40;



$tdatastatutorylock[".geocodingEnabled"] = false;





$tdatastatutorylock[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatastatutorylock[".pageSize"] = 20;

$tdatastatutorylock[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastatutorylock[".strOrderBy"] = $tstrOrderBy;

$tdatastatutorylock[".orderindexes"] = array();

$tdatastatutorylock[".sqlHead"] = "SELECT staID,  	SSSTableLock,  	PhilHealthTableLock,  	PagIbigTableLock";
$tdatastatutorylock[".sqlFrom"] = "FROM statutorylock";
$tdatastatutorylock[".sqlWhereExpr"] = "";
$tdatastatutorylock[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastatutorylock[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastatutorylock[".arrGroupsPerPage"] = $arrGPP;

$tdatastatutorylock[".highlightSearchResults"] = true;

$tableKeysstatutorylock = array();
$tableKeysstatutorylock[] = "staID";
$tdatastatutorylock[".Keys"] = $tableKeysstatutorylock;

$tdatastatutorylock[".listFields"] = array();
$tdatastatutorylock[".listFields"][] = "staID";
$tdatastatutorylock[".listFields"][] = "SSSTableLock";
$tdatastatutorylock[".listFields"][] = "PhilHealthTableLock";
$tdatastatutorylock[".listFields"][] = "PagIbigTableLock";

$tdatastatutorylock[".hideMobileList"] = array();


$tdatastatutorylock[".viewFields"] = array();
$tdatastatutorylock[".viewFields"][] = "staID";
$tdatastatutorylock[".viewFields"][] = "SSSTableLock";
$tdatastatutorylock[".viewFields"][] = "PhilHealthTableLock";
$tdatastatutorylock[".viewFields"][] = "PagIbigTableLock";

$tdatastatutorylock[".addFields"] = array();
$tdatastatutorylock[".addFields"][] = "SSSTableLock";
$tdatastatutorylock[".addFields"][] = "PhilHealthTableLock";
$tdatastatutorylock[".addFields"][] = "PagIbigTableLock";

$tdatastatutorylock[".masterListFields"] = array();
$tdatastatutorylock[".masterListFields"][] = "staID";
$tdatastatutorylock[".masterListFields"][] = "SSSTableLock";
$tdatastatutorylock[".masterListFields"][] = "PhilHealthTableLock";
$tdatastatutorylock[".masterListFields"][] = "PagIbigTableLock";

$tdatastatutorylock[".inlineAddFields"] = array();
$tdatastatutorylock[".inlineAddFields"][] = "SSSTableLock";
$tdatastatutorylock[".inlineAddFields"][] = "PhilHealthTableLock";
$tdatastatutorylock[".inlineAddFields"][] = "PagIbigTableLock";

$tdatastatutorylock[".editFields"] = array();
$tdatastatutorylock[".editFields"][] = "SSSTableLock";
$tdatastatutorylock[".editFields"][] = "PhilHealthTableLock";
$tdatastatutorylock[".editFields"][] = "PagIbigTableLock";

$tdatastatutorylock[".inlineEditFields"] = array();
$tdatastatutorylock[".inlineEditFields"][] = "SSSTableLock";
$tdatastatutorylock[".inlineEditFields"][] = "PhilHealthTableLock";
$tdatastatutorylock[".inlineEditFields"][] = "PagIbigTableLock";

$tdatastatutorylock[".updateSelectedFields"] = array();
$tdatastatutorylock[".updateSelectedFields"][] = "SSSTableLock";
$tdatastatutorylock[".updateSelectedFields"][] = "PhilHealthTableLock";
$tdatastatutorylock[".updateSelectedFields"][] = "PagIbigTableLock";


$tdatastatutorylock[".exportFields"] = array();
$tdatastatutorylock[".exportFields"][] = "staID";
$tdatastatutorylock[".exportFields"][] = "SSSTableLock";
$tdatastatutorylock[".exportFields"][] = "PhilHealthTableLock";
$tdatastatutorylock[".exportFields"][] = "PagIbigTableLock";

$tdatastatutorylock[".importFields"] = array();
$tdatastatutorylock[".importFields"][] = "staID";
$tdatastatutorylock[".importFields"][] = "SSSTableLock";
$tdatastatutorylock[".importFields"][] = "PhilHealthTableLock";
$tdatastatutorylock[".importFields"][] = "PagIbigTableLock";

$tdatastatutorylock[".printFields"] = array();
$tdatastatutorylock[".printFields"][] = "staID";
$tdatastatutorylock[".printFields"][] = "SSSTableLock";
$tdatastatutorylock[".printFields"][] = "PhilHealthTableLock";
$tdatastatutorylock[".printFields"][] = "PagIbigTableLock";


//	staID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "staID";
	$fdata["GoodName"] = "staID";
	$fdata["ownerTable"] = "statutorylock";
	$fdata["Label"] = GetFieldLabel("statutorylock","staID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "staID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "staID";

	
	
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




	$tdatastatutorylock["staID"] = $fdata;
//	SSSTableLock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SSSTableLock";
	$fdata["GoodName"] = "SSSTableLock";
	$fdata["ownerTable"] = "statutorylock";
	$fdata["Label"] = GetFieldLabel("statutorylock","SSSTableLock");
	$fdata["FieldType"] = 16;

	
	
	
			
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

		$fdata["strField"] = "SSSTableLock";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SSSTableLock";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 32;

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




	$tdatastatutorylock["SSSTableLock"] = $fdata;
//	PhilHealthTableLock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PhilHealthTableLock";
	$fdata["GoodName"] = "PhilHealthTableLock";
	$fdata["ownerTable"] = "statutorylock";
	$fdata["Label"] = GetFieldLabel("statutorylock","PhilHealthTableLock");
	$fdata["FieldType"] = 16;

	
	
	
			
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

		$fdata["strField"] = "PhilHealthTableLock";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PhilHealthTableLock";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 32;

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




	$tdatastatutorylock["PhilHealthTableLock"] = $fdata;
//	PagIbigTableLock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PagIbigTableLock";
	$fdata["GoodName"] = "PagIbigTableLock";
	$fdata["ownerTable"] = "statutorylock";
	$fdata["Label"] = GetFieldLabel("statutorylock","PagIbigTableLock");
	$fdata["FieldType"] = 16;

	
	
	
			
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

		$fdata["strField"] = "PagIbigTableLock";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PagIbigTableLock";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 32;

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




	$tdatastatutorylock["PagIbigTableLock"] = $fdata;


$tables_data["statutorylock"]=&$tdatastatutorylock;
$field_labels["statutorylock"] = &$fieldLabelsstatutorylock;
$fieldToolTips["statutorylock"] = &$fieldToolTipsstatutorylock;
$placeHolders["statutorylock"] = &$placeHoldersstatutorylock;
$page_titles["statutorylock"] = &$pageTitlesstatutorylock;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["statutorylock"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["statutorylock"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_statutorylock()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "staID,  	SSSTableLock,  	PhilHealthTableLock,  	PagIbigTableLock";
$proto0["m_strFrom"] = "FROM statutorylock";
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
	"m_strName" => "staID",
	"m_strTable" => "statutorylock",
	"m_srcTableName" => "statutorylock"
));

$proto6["m_sql"] = "staID";
$proto6["m_srcTableName"] = "statutorylock";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSTableLock",
	"m_strTable" => "statutorylock",
	"m_srcTableName" => "statutorylock"
));

$proto8["m_sql"] = "SSSTableLock";
$proto8["m_srcTableName"] = "statutorylock";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PhilHealthTableLock",
	"m_strTable" => "statutorylock",
	"m_srcTableName" => "statutorylock"
));

$proto10["m_sql"] = "PhilHealthTableLock";
$proto10["m_srcTableName"] = "statutorylock";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbigTableLock",
	"m_strTable" => "statutorylock",
	"m_srcTableName" => "statutorylock"
));

$proto12["m_sql"] = "PagIbigTableLock";
$proto12["m_srcTableName"] = "statutorylock";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "statutorylock";
$proto15["m_srcTableName"] = "statutorylock";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "staID";
$proto15["m_columns"][] = "SSSTableLock";
$proto15["m_columns"][] = "PhilHealthTableLock";
$proto15["m_columns"][] = "PagIbigTableLock";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "statutorylock";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "statutorylock";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="statutorylock";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_statutorylock = createSqlQuery_statutorylock();


	
		;

				

$tdatastatutorylock[".sqlquery"] = $queryData_statutorylock;

include_once(getabspath("include/statutorylock_events.php"));
$tableEvents["statutorylock"] = new eventclass_statutorylock;
$tdatastatutorylock[".hasEvents"] = true;

?>