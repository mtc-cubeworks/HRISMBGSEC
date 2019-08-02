<?php
require_once(getabspath("classes/cipherer.php"));




$tdataloandesriptions = array();
	$tdataloandesriptions[".truncateText"] = true;
	$tdataloandesriptions[".NumberOfChars"] = 80;
	$tdataloandesriptions[".ShortName"] = "loandesriptions";
	$tdataloandesriptions[".OwnerID"] = "";
	$tdataloandesriptions[".OriginalTable"] = "loandesriptions";

//	field labels
$fieldLabelsloandesriptions = array();
$fieldToolTipsloandesriptions = array();
$pageTitlesloandesriptions = array();
$placeHoldersloandesriptions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsloandesriptions["English"] = array();
	$fieldToolTipsloandesriptions["English"] = array();
	$placeHoldersloandesriptions["English"] = array();
	$pageTitlesloandesriptions["English"] = array();
	$fieldLabelsloandesriptions["English"]["LdID"] = "Ld ID";
	$fieldToolTipsloandesriptions["English"]["LdID"] = "";
	$placeHoldersloandesriptions["English"]["LdID"] = "";
	$fieldLabelsloandesriptions["English"]["LoanDescription"] = "Loan Description";
	$fieldToolTipsloandesriptions["English"]["LoanDescription"] = "";
	$placeHoldersloandesriptions["English"]["LoanDescription"] = "";
	$fieldLabelsloandesriptions["English"]["LoanType"] = "Loan Type";
	$fieldToolTipsloandesriptions["English"]["LoanType"] = "";
	$placeHoldersloandesriptions["English"]["LoanType"] = "";
	if (count($fieldToolTipsloandesriptions["English"]))
		$tdataloandesriptions[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsloandesriptions[""] = array();
	$fieldToolTipsloandesriptions[""] = array();
	$placeHoldersloandesriptions[""] = array();
	$pageTitlesloandesriptions[""] = array();
	if (count($fieldToolTipsloandesriptions[""]))
		$tdataloandesriptions[".isUseToolTips"] = true;
}


	$tdataloandesriptions[".NCSearch"] = true;



$tdataloandesriptions[".shortTableName"] = "loandesriptions";
$tdataloandesriptions[".nSecOptions"] = 0;
$tdataloandesriptions[".recsPerRowPrint"] = 1;
$tdataloandesriptions[".mainTableOwnerID"] = "";
$tdataloandesriptions[".moveNext"] = 1;
$tdataloandesriptions[".entityType"] = 0;

$tdataloandesriptions[".strOriginalTableName"] = "loandesriptions";

	



$tdataloandesriptions[".showAddInPopup"] = false;

$tdataloandesriptions[".showEditInPopup"] = false;

$tdataloandesriptions[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataloandesriptions[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataloandesriptions[".fieldsForRegister"] = array();

$tdataloandesriptions[".listAjax"] = false;

	$tdataloandesriptions[".audit"] = false;

	$tdataloandesriptions[".locking"] = false;

$tdataloandesriptions[".edit"] = true;
$tdataloandesriptions[".afterEditAction"] = 1;
$tdataloandesriptions[".closePopupAfterEdit"] = 1;
$tdataloandesriptions[".afterEditActionDetTable"] = "";

$tdataloandesriptions[".add"] = true;
$tdataloandesriptions[".afterAddAction"] = 1;
$tdataloandesriptions[".closePopupAfterAdd"] = 1;
$tdataloandesriptions[".afterAddActionDetTable"] = "";

$tdataloandesriptions[".list"] = true;

$tdataloandesriptions[".inlineEdit"] = true;

$tdataloandesriptions[".updateSelected"] = true;

$tdataloandesriptions[".reorderRecordsByHeader"] = true;


$tdataloandesriptions[".exportFormatting"] = 2;
$tdataloandesriptions[".exportDelimiter"] = ",";
		
$tdataloandesriptions[".inlineAdd"] = true;
$tdataloandesriptions[".copy"] = true;
$tdataloandesriptions[".view"] = true;

$tdataloandesriptions[".import"] = true;

$tdataloandesriptions[".exportTo"] = true;

$tdataloandesriptions[".printFriendly"] = true;

$tdataloandesriptions[".delete"] = true;

$tdataloandesriptions[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataloandesriptions[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataloandesriptions[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataloandesriptions[".searchSaving"] = false;
//

$tdataloandesriptions[".showSearchPanel"] = true;
		$tdataloandesriptions[".flexibleSearch"] = true;

$tdataloandesriptions[".isUseAjaxSuggest"] = true;

$tdataloandesriptions[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																														

$tdataloandesriptions[".ajaxCodeSnippetAdded"] = false;

$tdataloandesriptions[".buttonsAdded"] = false;

$tdataloandesriptions[".addPageEvents"] = false;

// use timepicker for search panel
$tdataloandesriptions[".isUseTimeForSearch"] = false;





$tdataloandesriptions[".allSearchFields"] = array();
$tdataloandesriptions[".filterFields"] = array();
$tdataloandesriptions[".requiredSearchFields"] = array();

$tdataloandesriptions[".allSearchFields"][] = "LdID";
	$tdataloandesriptions[".allSearchFields"][] = "LoanDescription";
	$tdataloandesriptions[".allSearchFields"][] = "LoanType";
	

$tdataloandesriptions[".googleLikeFields"] = array();
$tdataloandesriptions[".googleLikeFields"][] = "LdID";
$tdataloandesriptions[".googleLikeFields"][] = "LoanDescription";
$tdataloandesriptions[".googleLikeFields"][] = "LoanType";


$tdataloandesriptions[".advSearchFields"] = array();
$tdataloandesriptions[".advSearchFields"][] = "LdID";
$tdataloandesriptions[".advSearchFields"][] = "LoanDescription";
$tdataloandesriptions[".advSearchFields"][] = "LoanType";

$tdataloandesriptions[".tableType"] = "list";

$tdataloandesriptions[".printerPageOrientation"] = 0;
$tdataloandesriptions[".nPrinterPageScale"] = 100;

$tdataloandesriptions[".nPrinterSplitRecords"] = 40;

$tdataloandesriptions[".nPrinterPDFSplitRecords"] = 40;



$tdataloandesriptions[".geocodingEnabled"] = false;





$tdataloandesriptions[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataloandesriptions[".pageSize"] = 20;

$tdataloandesriptions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataloandesriptions[".strOrderBy"] = $tstrOrderBy;

$tdataloandesriptions[".orderindexes"] = array();

$tdataloandesriptions[".sqlHead"] = "SELECT LdID,  	LoanDescription,  	LoanType";
$tdataloandesriptions[".sqlFrom"] = "FROM loandesriptions";
$tdataloandesriptions[".sqlWhereExpr"] = "";
$tdataloandesriptions[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataloandesriptions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataloandesriptions[".arrGroupsPerPage"] = $arrGPP;

$tdataloandesriptions[".highlightSearchResults"] = true;

$tableKeysloandesriptions = array();
$tableKeysloandesriptions[] = "LdID";
$tdataloandesriptions[".Keys"] = $tableKeysloandesriptions;

$tdataloandesriptions[".listFields"] = array();
$tdataloandesriptions[".listFields"][] = "LdID";
$tdataloandesriptions[".listFields"][] = "LoanDescription";
$tdataloandesriptions[".listFields"][] = "LoanType";

$tdataloandesriptions[".hideMobileList"] = array();


$tdataloandesriptions[".viewFields"] = array();
$tdataloandesriptions[".viewFields"][] = "LdID";
$tdataloandesriptions[".viewFields"][] = "LoanDescription";
$tdataloandesriptions[".viewFields"][] = "LoanType";

$tdataloandesriptions[".addFields"] = array();
$tdataloandesriptions[".addFields"][] = "LoanDescription";
$tdataloandesriptions[".addFields"][] = "LoanType";

$tdataloandesriptions[".masterListFields"] = array();
$tdataloandesriptions[".masterListFields"][] = "LdID";
$tdataloandesriptions[".masterListFields"][] = "LoanDescription";
$tdataloandesriptions[".masterListFields"][] = "LoanType";

$tdataloandesriptions[".inlineAddFields"] = array();
$tdataloandesriptions[".inlineAddFields"][] = "LoanDescription";
$tdataloandesriptions[".inlineAddFields"][] = "LoanType";

$tdataloandesriptions[".editFields"] = array();
$tdataloandesriptions[".editFields"][] = "LoanDescription";
$tdataloandesriptions[".editFields"][] = "LoanType";

$tdataloandesriptions[".inlineEditFields"] = array();
$tdataloandesriptions[".inlineEditFields"][] = "LoanDescription";
$tdataloandesriptions[".inlineEditFields"][] = "LoanType";

$tdataloandesriptions[".updateSelectedFields"] = array();
$tdataloandesriptions[".updateSelectedFields"][] = "LoanDescription";
$tdataloandesriptions[".updateSelectedFields"][] = "LoanType";


$tdataloandesriptions[".exportFields"] = array();
$tdataloandesriptions[".exportFields"][] = "LdID";
$tdataloandesriptions[".exportFields"][] = "LoanDescription";
$tdataloandesriptions[".exportFields"][] = "LoanType";

$tdataloandesriptions[".importFields"] = array();
$tdataloandesriptions[".importFields"][] = "LdID";
$tdataloandesriptions[".importFields"][] = "LoanDescription";
$tdataloandesriptions[".importFields"][] = "LoanType";

$tdataloandesriptions[".printFields"] = array();
$tdataloandesriptions[".printFields"][] = "LdID";
$tdataloandesriptions[".printFields"][] = "LoanDescription";
$tdataloandesriptions[".printFields"][] = "LoanType";


//	LdID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LdID";
	$fdata["GoodName"] = "LdID";
	$fdata["ownerTable"] = "loandesriptions";
	$fdata["Label"] = GetFieldLabel("loandesriptions","LdID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LdID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LdID";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataloandesriptions["LdID"] = $fdata;
//	LoanDescription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "LoanDescription";
	$fdata["GoodName"] = "LoanDescription";
	$fdata["ownerTable"] = "loandesriptions";
	$fdata["Label"] = GetFieldLabel("loandesriptions","LoanDescription");
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

		$fdata["strField"] = "LoanDescription";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LoanDescription";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataloandesriptions["LoanDescription"] = $fdata;
//	LoanType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LoanType";
	$fdata["GoodName"] = "LoanType";
	$fdata["ownerTable"] = "loandesriptions";
	$fdata["Label"] = GetFieldLabel("loandesriptions","LoanType");
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

		$fdata["strField"] = "LoanType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LoanType";

	
	
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
	$edata["LookupTable"] = "loantypes";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "LtID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "LoanType";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;

	

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataloandesriptions["LoanType"] = $fdata;


$tables_data["loandesriptions"]=&$tdataloandesriptions;
$field_labels["loandesriptions"] = &$fieldLabelsloandesriptions;
$fieldToolTips["loandesriptions"] = &$fieldToolTipsloandesriptions;
$placeHolders["loandesriptions"] = &$placeHoldersloandesriptions;
$page_titles["loandesriptions"] = &$pageTitlesloandesriptions;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["loandesriptions"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["loandesriptions"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_loandesriptions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LdID,  	LoanDescription,  	LoanType";
$proto0["m_strFrom"] = "FROM loandesriptions";
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
	"m_strName" => "LdID",
	"m_strTable" => "loandesriptions",
	"m_srcTableName" => "loandesriptions"
));

$proto6["m_sql"] = "LdID";
$proto6["m_srcTableName"] = "loandesriptions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanDescription",
	"m_strTable" => "loandesriptions",
	"m_srcTableName" => "loandesriptions"
));

$proto8["m_sql"] = "LoanDescription";
$proto8["m_srcTableName"] = "loandesriptions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanType",
	"m_strTable" => "loandesriptions",
	"m_srcTableName" => "loandesriptions"
));

$proto10["m_sql"] = "LoanType";
$proto10["m_srcTableName"] = "loandesriptions";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "loandesriptions";
$proto13["m_srcTableName"] = "loandesriptions";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "LdID";
$proto13["m_columns"][] = "LoanDescription";
$proto13["m_columns"][] = "LoanType";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "loandesriptions";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "loandesriptions";
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
$proto0["m_srcTableName"]="loandesriptions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_loandesriptions = createSqlQuery_loandesriptions();


	
		;

			

$tdataloandesriptions[".sqlquery"] = $queryData_loandesriptions;

$tableEvents["loandesriptions"] = new eventsBase;
$tdataloandesriptions[".hasEvents"] = false;

?>