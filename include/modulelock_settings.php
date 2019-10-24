<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamodulelock = array();
	$tdatamodulelock[".truncateText"] = true;
	$tdatamodulelock[".NumberOfChars"] = 80;
	$tdatamodulelock[".ShortName"] = "modulelock";
	$tdatamodulelock[".OwnerID"] = "";
	$tdatamodulelock[".OriginalTable"] = "modulelock";

//	field labels
$fieldLabelsmodulelock = array();
$fieldToolTipsmodulelock = array();
$pageTitlesmodulelock = array();
$placeHoldersmodulelock = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmodulelock["English"] = array();
	$fieldToolTipsmodulelock["English"] = array();
	$placeHoldersmodulelock["English"] = array();
	$pageTitlesmodulelock["English"] = array();
	$fieldLabelsmodulelock["English"]["MLID"] = "MLID";
	$fieldToolTipsmodulelock["English"]["MLID"] = "";
	$placeHoldersmodulelock["English"]["MLID"] = "";
	$fieldLabelsmodulelock["English"]["SelectTable"] = "Select Table";
	$fieldToolTipsmodulelock["English"]["SelectTable"] = "";
	$placeHoldersmodulelock["English"]["SelectTable"] = "";
	$fieldLabelsmodulelock["English"]["InputID"] = "Input ID";
	$fieldToolTipsmodulelock["English"]["InputID"] = "";
	$placeHoldersmodulelock["English"]["InputID"] = "";
	$fieldLabelsmodulelock["English"]["Locked"] = "Locked";
	$fieldToolTipsmodulelock["English"]["Locked"] = "";
	$placeHoldersmodulelock["English"]["Locked"] = "";
	if (count($fieldToolTipsmodulelock["English"]))
		$tdatamodulelock[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmodulelock[""] = array();
	$fieldToolTipsmodulelock[""] = array();
	$placeHoldersmodulelock[""] = array();
	$pageTitlesmodulelock[""] = array();
	if (count($fieldToolTipsmodulelock[""]))
		$tdatamodulelock[".isUseToolTips"] = true;
}


	$tdatamodulelock[".NCSearch"] = true;



$tdatamodulelock[".shortTableName"] = "modulelock";
$tdatamodulelock[".nSecOptions"] = 0;
$tdatamodulelock[".recsPerRowPrint"] = 1;
$tdatamodulelock[".mainTableOwnerID"] = "";
$tdatamodulelock[".moveNext"] = 1;
$tdatamodulelock[".entityType"] = 0;

$tdatamodulelock[".strOriginalTableName"] = "modulelock";

	



$tdatamodulelock[".showAddInPopup"] = false;

$tdatamodulelock[".showEditInPopup"] = false;

$tdatamodulelock[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamodulelock[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamodulelock[".fieldsForRegister"] = array();

$tdatamodulelock[".listAjax"] = false;

	$tdatamodulelock[".audit"] = false;

	$tdatamodulelock[".locking"] = false;

$tdatamodulelock[".edit"] = true;
$tdatamodulelock[".afterEditAction"] = 1;
$tdatamodulelock[".closePopupAfterEdit"] = 1;
$tdatamodulelock[".afterEditActionDetTable"] = "";

$tdatamodulelock[".add"] = true;
$tdatamodulelock[".afterAddAction"] = 1;
$tdatamodulelock[".closePopupAfterAdd"] = 1;
$tdatamodulelock[".afterAddActionDetTable"] = "";

$tdatamodulelock[".list"] = true;



$tdatamodulelock[".reorderRecordsByHeader"] = true;


$tdatamodulelock[".exportFormatting"] = 2;
$tdatamodulelock[".exportDelimiter"] = ",";
		
$tdatamodulelock[".view"] = true;

$tdatamodulelock[".import"] = true;

$tdatamodulelock[".exportTo"] = true;

$tdatamodulelock[".printFriendly"] = true;

$tdatamodulelock[".delete"] = true;

$tdatamodulelock[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamodulelock[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamodulelock[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamodulelock[".searchSaving"] = false;
//

$tdatamodulelock[".showSearchPanel"] = true;
		$tdatamodulelock[".flexibleSearch"] = true;

$tdatamodulelock[".isUseAjaxSuggest"] = true;

$tdatamodulelock[".rowHighlite"] = true;



																																																																													
																																																																																																																																																																																																		

$tdatamodulelock[".ajaxCodeSnippetAdded"] = false;

$tdatamodulelock[".buttonsAdded"] = true;

$tdatamodulelock[".addPageEvents"] = true;

// use timepicker for search panel
$tdatamodulelock[".isUseTimeForSearch"] = false;





$tdatamodulelock[".allSearchFields"] = array();
$tdatamodulelock[".filterFields"] = array();
$tdatamodulelock[".requiredSearchFields"] = array();

$tdatamodulelock[".allSearchFields"][] = "MLID";
	$tdatamodulelock[".allSearchFields"][] = "SelectTable";
	$tdatamodulelock[".allSearchFields"][] = "InputID";
	$tdatamodulelock[".allSearchFields"][] = "Locked";
	

$tdatamodulelock[".googleLikeFields"] = array();
$tdatamodulelock[".googleLikeFields"][] = "MLID";
$tdatamodulelock[".googleLikeFields"][] = "SelectTable";
$tdatamodulelock[".googleLikeFields"][] = "InputID";
$tdatamodulelock[".googleLikeFields"][] = "Locked";


$tdatamodulelock[".advSearchFields"] = array();
$tdatamodulelock[".advSearchFields"][] = "MLID";
$tdatamodulelock[".advSearchFields"][] = "SelectTable";
$tdatamodulelock[".advSearchFields"][] = "InputID";
$tdatamodulelock[".advSearchFields"][] = "Locked";

$tdatamodulelock[".tableType"] = "list";

$tdatamodulelock[".printerPageOrientation"] = 0;
$tdatamodulelock[".nPrinterPageScale"] = 100;

$tdatamodulelock[".nPrinterSplitRecords"] = 40;

$tdatamodulelock[".nPrinterPDFSplitRecords"] = 40;



$tdatamodulelock[".geocodingEnabled"] = false;





$tdatamodulelock[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamodulelock[".pageSize"] = 20;

$tdatamodulelock[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamodulelock[".strOrderBy"] = $tstrOrderBy;

$tdatamodulelock[".orderindexes"] = array();

$tdatamodulelock[".sqlHead"] = "SELECT MLID,  	SelectTable,  	InputID,  	Locked";
$tdatamodulelock[".sqlFrom"] = "FROM modulelock";
$tdatamodulelock[".sqlWhereExpr"] = "";
$tdatamodulelock[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamodulelock[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamodulelock[".arrGroupsPerPage"] = $arrGPP;

$tdatamodulelock[".highlightSearchResults"] = true;

$tableKeysmodulelock = array();
$tableKeysmodulelock[] = "MLID";
$tdatamodulelock[".Keys"] = $tableKeysmodulelock;

$tdatamodulelock[".listFields"] = array();
$tdatamodulelock[".listFields"][] = "MLID";
$tdatamodulelock[".listFields"][] = "SelectTable";
$tdatamodulelock[".listFields"][] = "InputID";
$tdatamodulelock[".listFields"][] = "Locked";

$tdatamodulelock[".hideMobileList"] = array();


$tdatamodulelock[".viewFields"] = array();
$tdatamodulelock[".viewFields"][] = "MLID";
$tdatamodulelock[".viewFields"][] = "SelectTable";
$tdatamodulelock[".viewFields"][] = "InputID";
$tdatamodulelock[".viewFields"][] = "Locked";

$tdatamodulelock[".addFields"] = array();
$tdatamodulelock[".addFields"][] = "SelectTable";
$tdatamodulelock[".addFields"][] = "InputID";
$tdatamodulelock[".addFields"][] = "Locked";

$tdatamodulelock[".masterListFields"] = array();
$tdatamodulelock[".masterListFields"][] = "MLID";
$tdatamodulelock[".masterListFields"][] = "SelectTable";
$tdatamodulelock[".masterListFields"][] = "InputID";
$tdatamodulelock[".masterListFields"][] = "Locked";

$tdatamodulelock[".inlineAddFields"] = array();
$tdatamodulelock[".inlineAddFields"][] = "SelectTable";
$tdatamodulelock[".inlineAddFields"][] = "InputID";
$tdatamodulelock[".inlineAddFields"][] = "Locked";

$tdatamodulelock[".editFields"] = array();
$tdatamodulelock[".editFields"][] = "SelectTable";
$tdatamodulelock[".editFields"][] = "InputID";
$tdatamodulelock[".editFields"][] = "Locked";

$tdatamodulelock[".inlineEditFields"] = array();
$tdatamodulelock[".inlineEditFields"][] = "SelectTable";
$tdatamodulelock[".inlineEditFields"][] = "InputID";
$tdatamodulelock[".inlineEditFields"][] = "Locked";

$tdatamodulelock[".updateSelectedFields"] = array();
$tdatamodulelock[".updateSelectedFields"][] = "SelectTable";
$tdatamodulelock[".updateSelectedFields"][] = "InputID";
$tdatamodulelock[".updateSelectedFields"][] = "Locked";


$tdatamodulelock[".exportFields"] = array();
$tdatamodulelock[".exportFields"][] = "MLID";
$tdatamodulelock[".exportFields"][] = "SelectTable";
$tdatamodulelock[".exportFields"][] = "InputID";
$tdatamodulelock[".exportFields"][] = "Locked";

$tdatamodulelock[".importFields"] = array();
$tdatamodulelock[".importFields"][] = "MLID";
$tdatamodulelock[".importFields"][] = "SelectTable";
$tdatamodulelock[".importFields"][] = "InputID";
$tdatamodulelock[".importFields"][] = "Locked";

$tdatamodulelock[".printFields"] = array();
$tdatamodulelock[".printFields"][] = "MLID";
$tdatamodulelock[".printFields"][] = "SelectTable";
$tdatamodulelock[".printFields"][] = "InputID";
$tdatamodulelock[".printFields"][] = "Locked";


//	MLID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MLID";
	$fdata["GoodName"] = "MLID";
	$fdata["ownerTable"] = "modulelock";
	$fdata["Label"] = GetFieldLabel("modulelock","MLID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MLID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MLID";

	
	
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




	$tdatamodulelock["MLID"] = $fdata;
//	SelectTable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SelectTable";
	$fdata["GoodName"] = "SelectTable";
	$fdata["ownerTable"] = "modulelock";
	$fdata["Label"] = GetFieldLabel("modulelock","SelectTable");
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

		$fdata["strField"] = "SelectTable";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SelectTable";

	
	
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
	$edata["LookupTable"] = "moduletable";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Table";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;

	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 172;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamodulelock["SelectTable"] = $fdata;
//	InputID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "InputID";
	$fdata["GoodName"] = "InputID";
	$fdata["ownerTable"] = "modulelock";
	$fdata["Label"] = GetFieldLabel("modulelock","InputID");
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

		$fdata["strField"] = "InputID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InputID";

	
	
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
		
		$edata["controlWidth"] = 72;

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




	$tdatamodulelock["InputID"] = $fdata;
//	Locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Locked";
	$fdata["GoodName"] = "Locked";
	$fdata["ownerTable"] = "modulelock";
	$fdata["Label"] = GetFieldLabel("modulelock","Locked");
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

		$fdata["strField"] = "Locked";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Locked";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 72;

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




	$tdatamodulelock["Locked"] = $fdata;


$tables_data["modulelock"]=&$tdatamodulelock;
$field_labels["modulelock"] = &$fieldLabelsmodulelock;
$fieldToolTips["modulelock"] = &$fieldToolTipsmodulelock;
$placeHolders["modulelock"] = &$placeHoldersmodulelock;
$page_titles["modulelock"] = &$pageTitlesmodulelock;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["modulelock"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["modulelock"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_modulelock()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MLID,  	SelectTable,  	InputID,  	Locked";
$proto0["m_strFrom"] = "FROM modulelock";
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
	"m_strName" => "MLID",
	"m_strTable" => "modulelock",
	"m_srcTableName" => "modulelock"
));

$proto6["m_sql"] = "MLID";
$proto6["m_srcTableName"] = "modulelock";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SelectTable",
	"m_strTable" => "modulelock",
	"m_srcTableName" => "modulelock"
));

$proto8["m_sql"] = "SelectTable";
$proto8["m_srcTableName"] = "modulelock";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "InputID",
	"m_strTable" => "modulelock",
	"m_srcTableName" => "modulelock"
));

$proto10["m_sql"] = "InputID";
$proto10["m_srcTableName"] = "modulelock";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Locked",
	"m_strTable" => "modulelock",
	"m_srcTableName" => "modulelock"
));

$proto12["m_sql"] = "Locked";
$proto12["m_srcTableName"] = "modulelock";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "modulelock";
$proto15["m_srcTableName"] = "modulelock";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "MLID";
$proto15["m_columns"][] = "SelectTable";
$proto15["m_columns"][] = "InputID";
$proto15["m_columns"][] = "Locked";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "modulelock";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "modulelock";
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
$proto0["m_srcTableName"]="modulelock";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_modulelock = createSqlQuery_modulelock();


	
		;

				

$tdatamodulelock[".sqlquery"] = $queryData_modulelock;

include_once(getabspath("include/modulelock_events.php"));
$tableEvents["modulelock"] = new eventclass_modulelock;
$tdatamodulelock[".hasEvents"] = true;

?>