<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadloglimit2 = array();
	$tdatadloglimit2[".truncateText"] = true;
	$tdatadloglimit2[".NumberOfChars"] = 80;
	$tdatadloglimit2[".ShortName"] = "dloglimit2";
	$tdatadloglimit2[".OwnerID"] = "";
	$tdatadloglimit2[".OriginalTable"] = "dloglimit2";

//	field labels
$fieldLabelsdloglimit2 = array();
$fieldToolTipsdloglimit2 = array();
$pageTitlesdloglimit2 = array();
$placeHoldersdloglimit2 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdloglimit2["English"] = array();
	$fieldToolTipsdloglimit2["English"] = array();
	$placeHoldersdloglimit2["English"] = array();
	$pageTitlesdloglimit2["English"] = array();
	$fieldLabelsdloglimit2["English"]["ID"] = "ID";
	$fieldToolTipsdloglimit2["English"]["ID"] = "";
	$placeHoldersdloglimit2["English"]["ID"] = "";
	$fieldLabelsdloglimit2["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipsdloglimit2["English"]["EmployeeID"] = "";
	$placeHoldersdloglimit2["English"]["EmployeeID"] = "";
	$fieldLabelsdloglimit2["English"]["SDate"] = "SDate";
	$fieldToolTipsdloglimit2["English"]["SDate"] = "";
	$placeHoldersdloglimit2["English"]["SDate"] = "";
	$fieldLabelsdloglimit2["English"]["STimeInC"] = "STime In C";
	$fieldToolTipsdloglimit2["English"]["STimeInC"] = "";
	$placeHoldersdloglimit2["English"]["STimeInC"] = "";
	if (count($fieldToolTipsdloglimit2["English"]))
		$tdatadloglimit2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdloglimit2[""] = array();
	$fieldToolTipsdloglimit2[""] = array();
	$placeHoldersdloglimit2[""] = array();
	$pageTitlesdloglimit2[""] = array();
	if (count($fieldToolTipsdloglimit2[""]))
		$tdatadloglimit2[".isUseToolTips"] = true;
}


	$tdatadloglimit2[".NCSearch"] = true;



$tdatadloglimit2[".shortTableName"] = "dloglimit2";
$tdatadloglimit2[".nSecOptions"] = 0;
$tdatadloglimit2[".recsPerRowPrint"] = 1;
$tdatadloglimit2[".mainTableOwnerID"] = "";
$tdatadloglimit2[".moveNext"] = 1;
$tdatadloglimit2[".entityType"] = 0;

$tdatadloglimit2[".strOriginalTableName"] = "dloglimit2";

	



$tdatadloglimit2[".showAddInPopup"] = false;

$tdatadloglimit2[".showEditInPopup"] = false;

$tdatadloglimit2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadloglimit2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadloglimit2[".fieldsForRegister"] = array();

$tdatadloglimit2[".listAjax"] = false;

	$tdatadloglimit2[".audit"] = false;

	$tdatadloglimit2[".locking"] = false;

$tdatadloglimit2[".edit"] = true;
$tdatadloglimit2[".afterEditAction"] = 1;
$tdatadloglimit2[".closePopupAfterEdit"] = 1;
$tdatadloglimit2[".afterEditActionDetTable"] = "";

$tdatadloglimit2[".add"] = true;
$tdatadloglimit2[".afterAddAction"] = 1;
$tdatadloglimit2[".closePopupAfterAdd"] = 1;
$tdatadloglimit2[".afterAddActionDetTable"] = "";

$tdatadloglimit2[".list"] = true;



$tdatadloglimit2[".reorderRecordsByHeader"] = true;


$tdatadloglimit2[".exportFormatting"] = 2;
$tdatadloglimit2[".exportDelimiter"] = ",";
		
$tdatadloglimit2[".view"] = true;

$tdatadloglimit2[".import"] = true;

$tdatadloglimit2[".exportTo"] = true;

$tdatadloglimit2[".printFriendly"] = true;

$tdatadloglimit2[".delete"] = true;

$tdatadloglimit2[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadloglimit2[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatadloglimit2[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatadloglimit2[".searchSaving"] = false;
//

$tdatadloglimit2[".showSearchPanel"] = true;
		$tdatadloglimit2[".flexibleSearch"] = true;

$tdatadloglimit2[".isUseAjaxSuggest"] = true;

$tdatadloglimit2[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdatadloglimit2[".ajaxCodeSnippetAdded"] = false;

$tdatadloglimit2[".buttonsAdded"] = false;

$tdatadloglimit2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadloglimit2[".isUseTimeForSearch"] = false;





$tdatadloglimit2[".allSearchFields"] = array();
$tdatadloglimit2[".filterFields"] = array();
$tdatadloglimit2[".requiredSearchFields"] = array();

$tdatadloglimit2[".allSearchFields"][] = "ID";
	$tdatadloglimit2[".allSearchFields"][] = "EmployeeID";
	$tdatadloglimit2[".allSearchFields"][] = "SDate";
	$tdatadloglimit2[".allSearchFields"][] = "STimeInC";
	

$tdatadloglimit2[".googleLikeFields"] = array();
$tdatadloglimit2[".googleLikeFields"][] = "ID";
$tdatadloglimit2[".googleLikeFields"][] = "EmployeeID";
$tdatadloglimit2[".googleLikeFields"][] = "SDate";
$tdatadloglimit2[".googleLikeFields"][] = "STimeInC";


$tdatadloglimit2[".advSearchFields"] = array();
$tdatadloglimit2[".advSearchFields"][] = "ID";
$tdatadloglimit2[".advSearchFields"][] = "EmployeeID";
$tdatadloglimit2[".advSearchFields"][] = "SDate";
$tdatadloglimit2[".advSearchFields"][] = "STimeInC";

$tdatadloglimit2[".tableType"] = "list";

$tdatadloglimit2[".printerPageOrientation"] = 0;
$tdatadloglimit2[".nPrinterPageScale"] = 100;

$tdatadloglimit2[".nPrinterSplitRecords"] = 40;

$tdatadloglimit2[".nPrinterPDFSplitRecords"] = 40;



$tdatadloglimit2[".geocodingEnabled"] = false;





$tdatadloglimit2[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatadloglimit2[".pageSize"] = 20;

$tdatadloglimit2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadloglimit2[".strOrderBy"] = $tstrOrderBy;

$tdatadloglimit2[".orderindexes"] = array();

$tdatadloglimit2[".sqlHead"] = "SELECT ID,  	EmployeeID,  	SDate,  	STimeInC";
$tdatadloglimit2[".sqlFrom"] = "FROM dloglimit2";
$tdatadloglimit2[".sqlWhereExpr"] = "";
$tdatadloglimit2[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadloglimit2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadloglimit2[".arrGroupsPerPage"] = $arrGPP;

$tdatadloglimit2[".highlightSearchResults"] = true;

$tableKeysdloglimit2 = array();
$tableKeysdloglimit2[] = "ID";
$tdatadloglimit2[".Keys"] = $tableKeysdloglimit2;

$tdatadloglimit2[".listFields"] = array();
$tdatadloglimit2[".listFields"][] = "ID";
$tdatadloglimit2[".listFields"][] = "EmployeeID";
$tdatadloglimit2[".listFields"][] = "SDate";
$tdatadloglimit2[".listFields"][] = "STimeInC";

$tdatadloglimit2[".hideMobileList"] = array();


$tdatadloglimit2[".viewFields"] = array();
$tdatadloglimit2[".viewFields"][] = "ID";
$tdatadloglimit2[".viewFields"][] = "EmployeeID";
$tdatadloglimit2[".viewFields"][] = "SDate";
$tdatadloglimit2[".viewFields"][] = "STimeInC";

$tdatadloglimit2[".addFields"] = array();
$tdatadloglimit2[".addFields"][] = "EmployeeID";
$tdatadloglimit2[".addFields"][] = "SDate";
$tdatadloglimit2[".addFields"][] = "STimeInC";

$tdatadloglimit2[".masterListFields"] = array();
$tdatadloglimit2[".masterListFields"][] = "ID";
$tdatadloglimit2[".masterListFields"][] = "EmployeeID";
$tdatadloglimit2[".masterListFields"][] = "SDate";
$tdatadloglimit2[".masterListFields"][] = "STimeInC";

$tdatadloglimit2[".inlineAddFields"] = array();
$tdatadloglimit2[".inlineAddFields"][] = "EmployeeID";
$tdatadloglimit2[".inlineAddFields"][] = "SDate";
$tdatadloglimit2[".inlineAddFields"][] = "STimeInC";

$tdatadloglimit2[".editFields"] = array();
$tdatadloglimit2[".editFields"][] = "EmployeeID";
$tdatadloglimit2[".editFields"][] = "SDate";
$tdatadloglimit2[".editFields"][] = "STimeInC";

$tdatadloglimit2[".inlineEditFields"] = array();
$tdatadloglimit2[".inlineEditFields"][] = "EmployeeID";
$tdatadloglimit2[".inlineEditFields"][] = "SDate";
$tdatadloglimit2[".inlineEditFields"][] = "STimeInC";

$tdatadloglimit2[".updateSelectedFields"] = array();
$tdatadloglimit2[".updateSelectedFields"][] = "EmployeeID";
$tdatadloglimit2[".updateSelectedFields"][] = "SDate";
$tdatadloglimit2[".updateSelectedFields"][] = "STimeInC";


$tdatadloglimit2[".exportFields"] = array();
$tdatadloglimit2[".exportFields"][] = "ID";
$tdatadloglimit2[".exportFields"][] = "EmployeeID";
$tdatadloglimit2[".exportFields"][] = "SDate";
$tdatadloglimit2[".exportFields"][] = "STimeInC";

$tdatadloglimit2[".importFields"] = array();
$tdatadloglimit2[".importFields"][] = "ID";
$tdatadloglimit2[".importFields"][] = "EmployeeID";
$tdatadloglimit2[".importFields"][] = "SDate";
$tdatadloglimit2[".importFields"][] = "STimeInC";

$tdatadloglimit2[".printFields"] = array();
$tdatadloglimit2[".printFields"][] = "ID";
$tdatadloglimit2[".printFields"][] = "EmployeeID";
$tdatadloglimit2[".printFields"][] = "SDate";
$tdatadloglimit2[".printFields"][] = "STimeInC";


//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "dloglimit2";
	$fdata["Label"] = GetFieldLabel("dloglimit2","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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




	$tdatadloglimit2["ID"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "dloglimit2";
	$fdata["Label"] = GetFieldLabel("dloglimit2","EmployeeID");
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




	$tdatadloglimit2["EmployeeID"] = $fdata;
//	SDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SDate";
	$fdata["GoodName"] = "SDate";
	$fdata["ownerTable"] = "dloglimit2";
	$fdata["Label"] = GetFieldLabel("dloglimit2","SDate");
	$fdata["FieldType"] = 7;

	
	
	
			
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

		$fdata["strField"] = "SDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SDate";

	
	
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




	$tdatadloglimit2["SDate"] = $fdata;
//	STimeInC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "STimeInC";
	$fdata["GoodName"] = "STimeInC";
	$fdata["ownerTable"] = "dloglimit2";
	$fdata["Label"] = GetFieldLabel("dloglimit2","STimeInC");
	$fdata["FieldType"] = 135;

	
	
	
			
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

		$fdata["strField"] = "STimeInC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STimeInC";

	
	
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

		$edata["ShowTime"] = true;

	
		
	


	
	
	
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




	$tdatadloglimit2["STimeInC"] = $fdata;


$tables_data["dloglimit2"]=&$tdatadloglimit2;
$field_labels["dloglimit2"] = &$fieldLabelsdloglimit2;
$fieldToolTips["dloglimit2"] = &$fieldToolTipsdloglimit2;
$placeHolders["dloglimit2"] = &$placeHoldersdloglimit2;
$page_titles["dloglimit2"] = &$pageTitlesdloglimit2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dloglimit2"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dloglimit2"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_dloglimit2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	EmployeeID,  	SDate,  	STimeInC";
$proto0["m_strFrom"] = "FROM dloglimit2";
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
	"m_strName" => "ID",
	"m_strTable" => "dloglimit2",
	"m_srcTableName" => "dloglimit2"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "dloglimit2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "dloglimit2",
	"m_srcTableName" => "dloglimit2"
));

$proto8["m_sql"] = "EmployeeID";
$proto8["m_srcTableName"] = "dloglimit2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SDate",
	"m_strTable" => "dloglimit2",
	"m_srcTableName" => "dloglimit2"
));

$proto10["m_sql"] = "SDate";
$proto10["m_srcTableName"] = "dloglimit2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "STimeInC",
	"m_strTable" => "dloglimit2",
	"m_srcTableName" => "dloglimit2"
));

$proto12["m_sql"] = "STimeInC";
$proto12["m_srcTableName"] = "dloglimit2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "dloglimit2";
$proto15["m_srcTableName"] = "dloglimit2";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "ID";
$proto15["m_columns"][] = "EmployeeID";
$proto15["m_columns"][] = "SDate";
$proto15["m_columns"][] = "STimeInC";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "dloglimit2";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "dloglimit2";
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
$proto0["m_srcTableName"]="dloglimit2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dloglimit2 = createSqlQuery_dloglimit2();


	
		;

				

$tdatadloglimit2[".sqlquery"] = $queryData_dloglimit2;

$tableEvents["dloglimit2"] = new eventsBase;
$tdatadloglimit2[".hasEvents"] = false;

?>