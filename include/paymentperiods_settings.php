<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapaymentperiods = array();
	$tdatapaymentperiods[".truncateText"] = true;
	$tdatapaymentperiods[".NumberOfChars"] = 80;
	$tdatapaymentperiods[".ShortName"] = "paymentperiods";
	$tdatapaymentperiods[".OwnerID"] = "";
	$tdatapaymentperiods[".OriginalTable"] = "paymentperiods";

//	field labels
$fieldLabelspaymentperiods = array();
$fieldToolTipspaymentperiods = array();
$pageTitlespaymentperiods = array();
$placeHolderspaymentperiods = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspaymentperiods["English"] = array();
	$fieldToolTipspaymentperiods["English"] = array();
	$placeHolderspaymentperiods["English"] = array();
	$pageTitlespaymentperiods["English"] = array();
	$fieldLabelspaymentperiods["English"]["ppID"] = "Pp ID";
	$fieldToolTipspaymentperiods["English"]["ppID"] = "";
	$placeHolderspaymentperiods["English"]["ppID"] = "";
	$fieldLabelspaymentperiods["English"]["PaymentPeriod"] = "Payment Period";
	$fieldToolTipspaymentperiods["English"]["PaymentPeriod"] = "";
	$placeHolderspaymentperiods["English"]["PaymentPeriod"] = "";
	$fieldLabelspaymentperiods["English"]["Factor"] = "Factor";
	$fieldToolTipspaymentperiods["English"]["Factor"] = "";
	$placeHolderspaymentperiods["English"]["Factor"] = "";
	if (count($fieldToolTipspaymentperiods["English"]))
		$tdatapaymentperiods[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspaymentperiods[""] = array();
	$fieldToolTipspaymentperiods[""] = array();
	$placeHolderspaymentperiods[""] = array();
	$pageTitlespaymentperiods[""] = array();
	if (count($fieldToolTipspaymentperiods[""]))
		$tdatapaymentperiods[".isUseToolTips"] = true;
}


	$tdatapaymentperiods[".NCSearch"] = true;



$tdatapaymentperiods[".shortTableName"] = "paymentperiods";
$tdatapaymentperiods[".nSecOptions"] = 0;
$tdatapaymentperiods[".recsPerRowPrint"] = 1;
$tdatapaymentperiods[".mainTableOwnerID"] = "";
$tdatapaymentperiods[".moveNext"] = 1;
$tdatapaymentperiods[".entityType"] = 0;

$tdatapaymentperiods[".strOriginalTableName"] = "paymentperiods";

	



$tdatapaymentperiods[".showAddInPopup"] = false;

$tdatapaymentperiods[".showEditInPopup"] = false;

$tdatapaymentperiods[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapaymentperiods[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapaymentperiods[".fieldsForRegister"] = array();

$tdatapaymentperiods[".listAjax"] = false;

	$tdatapaymentperiods[".audit"] = false;

	$tdatapaymentperiods[".locking"] = false;

$tdatapaymentperiods[".edit"] = true;
$tdatapaymentperiods[".afterEditAction"] = 1;
$tdatapaymentperiods[".closePopupAfterEdit"] = 1;
$tdatapaymentperiods[".afterEditActionDetTable"] = "";

$tdatapaymentperiods[".add"] = true;
$tdatapaymentperiods[".afterAddAction"] = 1;
$tdatapaymentperiods[".closePopupAfterAdd"] = 1;
$tdatapaymentperiods[".afterAddActionDetTable"] = "";

$tdatapaymentperiods[".list"] = true;

$tdatapaymentperiods[".inlineEdit"] = true;

$tdatapaymentperiods[".updateSelected"] = true;

$tdatapaymentperiods[".reorderRecordsByHeader"] = true;


$tdatapaymentperiods[".exportFormatting"] = 2;
$tdatapaymentperiods[".exportDelimiter"] = ",";
		
$tdatapaymentperiods[".inlineAdd"] = true;
$tdatapaymentperiods[".copy"] = true;
$tdatapaymentperiods[".view"] = true;

$tdatapaymentperiods[".import"] = true;

$tdatapaymentperiods[".exportTo"] = true;

$tdatapaymentperiods[".printFriendly"] = true;

$tdatapaymentperiods[".delete"] = true;

$tdatapaymentperiods[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapaymentperiods[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapaymentperiods[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapaymentperiods[".searchSaving"] = false;
//

$tdatapaymentperiods[".showSearchPanel"] = true;
		$tdatapaymentperiods[".flexibleSearch"] = true;

$tdatapaymentperiods[".isUseAjaxSuggest"] = true;

$tdatapaymentperiods[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																					

$tdatapaymentperiods[".ajaxCodeSnippetAdded"] = false;

$tdatapaymentperiods[".buttonsAdded"] = false;

$tdatapaymentperiods[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapaymentperiods[".isUseTimeForSearch"] = false;





$tdatapaymentperiods[".allSearchFields"] = array();
$tdatapaymentperiods[".filterFields"] = array();
$tdatapaymentperiods[".requiredSearchFields"] = array();

$tdatapaymentperiods[".allSearchFields"][] = "ppID";
	$tdatapaymentperiods[".allSearchFields"][] = "PaymentPeriod";
	$tdatapaymentperiods[".allSearchFields"][] = "Factor";
	

$tdatapaymentperiods[".googleLikeFields"] = array();
$tdatapaymentperiods[".googleLikeFields"][] = "ppID";
$tdatapaymentperiods[".googleLikeFields"][] = "PaymentPeriod";
$tdatapaymentperiods[".googleLikeFields"][] = "Factor";


$tdatapaymentperiods[".advSearchFields"] = array();
$tdatapaymentperiods[".advSearchFields"][] = "ppID";
$tdatapaymentperiods[".advSearchFields"][] = "PaymentPeriod";
$tdatapaymentperiods[".advSearchFields"][] = "Factor";

$tdatapaymentperiods[".tableType"] = "list";

$tdatapaymentperiods[".printerPageOrientation"] = 0;
$tdatapaymentperiods[".nPrinterPageScale"] = 100;

$tdatapaymentperiods[".nPrinterSplitRecords"] = 40;

$tdatapaymentperiods[".nPrinterPDFSplitRecords"] = 40;



$tdatapaymentperiods[".geocodingEnabled"] = false;





$tdatapaymentperiods[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatapaymentperiods[".pageSize"] = 20;

$tdatapaymentperiods[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapaymentperiods[".strOrderBy"] = $tstrOrderBy;

$tdatapaymentperiods[".orderindexes"] = array();

$tdatapaymentperiods[".sqlHead"] = "SELECT ppID,  	PaymentPeriod,  	Factor";
$tdatapaymentperiods[".sqlFrom"] = "FROM paymentperiods";
$tdatapaymentperiods[".sqlWhereExpr"] = "";
$tdatapaymentperiods[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapaymentperiods[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapaymentperiods[".arrGroupsPerPage"] = $arrGPP;

$tdatapaymentperiods[".highlightSearchResults"] = true;

$tableKeyspaymentperiods = array();
$tableKeyspaymentperiods[] = "ppID";
$tdatapaymentperiods[".Keys"] = $tableKeyspaymentperiods;

$tdatapaymentperiods[".listFields"] = array();
$tdatapaymentperiods[".listFields"][] = "ppID";
$tdatapaymentperiods[".listFields"][] = "PaymentPeriod";
$tdatapaymentperiods[".listFields"][] = "Factor";

$tdatapaymentperiods[".hideMobileList"] = array();


$tdatapaymentperiods[".viewFields"] = array();
$tdatapaymentperiods[".viewFields"][] = "ppID";
$tdatapaymentperiods[".viewFields"][] = "PaymentPeriod";
$tdatapaymentperiods[".viewFields"][] = "Factor";

$tdatapaymentperiods[".addFields"] = array();
$tdatapaymentperiods[".addFields"][] = "PaymentPeriod";
$tdatapaymentperiods[".addFields"][] = "Factor";

$tdatapaymentperiods[".masterListFields"] = array();
$tdatapaymentperiods[".masterListFields"][] = "ppID";
$tdatapaymentperiods[".masterListFields"][] = "PaymentPeriod";
$tdatapaymentperiods[".masterListFields"][] = "Factor";

$tdatapaymentperiods[".inlineAddFields"] = array();
$tdatapaymentperiods[".inlineAddFields"][] = "PaymentPeriod";
$tdatapaymentperiods[".inlineAddFields"][] = "Factor";

$tdatapaymentperiods[".editFields"] = array();
$tdatapaymentperiods[".editFields"][] = "PaymentPeriod";
$tdatapaymentperiods[".editFields"][] = "Factor";

$tdatapaymentperiods[".inlineEditFields"] = array();
$tdatapaymentperiods[".inlineEditFields"][] = "PaymentPeriod";
$tdatapaymentperiods[".inlineEditFields"][] = "Factor";

$tdatapaymentperiods[".updateSelectedFields"] = array();
$tdatapaymentperiods[".updateSelectedFields"][] = "PaymentPeriod";
$tdatapaymentperiods[".updateSelectedFields"][] = "Factor";


$tdatapaymentperiods[".exportFields"] = array();
$tdatapaymentperiods[".exportFields"][] = "ppID";
$tdatapaymentperiods[".exportFields"][] = "PaymentPeriod";
$tdatapaymentperiods[".exportFields"][] = "Factor";

$tdatapaymentperiods[".importFields"] = array();
$tdatapaymentperiods[".importFields"][] = "ppID";
$tdatapaymentperiods[".importFields"][] = "PaymentPeriod";
$tdatapaymentperiods[".importFields"][] = "Factor";

$tdatapaymentperiods[".printFields"] = array();
$tdatapaymentperiods[".printFields"][] = "ppID";
$tdatapaymentperiods[".printFields"][] = "PaymentPeriod";
$tdatapaymentperiods[".printFields"][] = "Factor";


//	ppID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ppID";
	$fdata["GoodName"] = "ppID";
	$fdata["ownerTable"] = "paymentperiods";
	$fdata["Label"] = GetFieldLabel("paymentperiods","ppID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ppID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ppID";

	
	
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




	$tdatapaymentperiods["ppID"] = $fdata;
//	PaymentPeriod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PaymentPeriod";
	$fdata["GoodName"] = "PaymentPeriod";
	$fdata["ownerTable"] = "paymentperiods";
	$fdata["Label"] = GetFieldLabel("paymentperiods","PaymentPeriod");
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

		$fdata["strField"] = "PaymentPeriod";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PaymentPeriod";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapaymentperiods["PaymentPeriod"] = $fdata;
//	Factor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Factor";
	$fdata["GoodName"] = "Factor";
	$fdata["ownerTable"] = "paymentperiods";
	$fdata["Label"] = GetFieldLabel("paymentperiods","Factor");
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

		$fdata["strField"] = "Factor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Factor";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapaymentperiods["Factor"] = $fdata;


$tables_data["paymentperiods"]=&$tdatapaymentperiods;
$field_labels["paymentperiods"] = &$fieldLabelspaymentperiods;
$fieldToolTips["paymentperiods"] = &$fieldToolTipspaymentperiods;
$placeHolders["paymentperiods"] = &$placeHolderspaymentperiods;
$page_titles["paymentperiods"] = &$pageTitlespaymentperiods;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["paymentperiods"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["paymentperiods"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_paymentperiods()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ppID,  	PaymentPeriod,  	Factor";
$proto0["m_strFrom"] = "FROM paymentperiods";
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
	"m_strName" => "ppID",
	"m_strTable" => "paymentperiods",
	"m_srcTableName" => "paymentperiods"
));

$proto6["m_sql"] = "ppID";
$proto6["m_srcTableName"] = "paymentperiods";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PaymentPeriod",
	"m_strTable" => "paymentperiods",
	"m_srcTableName" => "paymentperiods"
));

$proto8["m_sql"] = "PaymentPeriod";
$proto8["m_srcTableName"] = "paymentperiods";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Factor",
	"m_strTable" => "paymentperiods",
	"m_srcTableName" => "paymentperiods"
));

$proto10["m_sql"] = "Factor";
$proto10["m_srcTableName"] = "paymentperiods";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "paymentperiods";
$proto13["m_srcTableName"] = "paymentperiods";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "ppID";
$proto13["m_columns"][] = "PaymentPeriod";
$proto13["m_columns"][] = "Factor";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "paymentperiods";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "paymentperiods";
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
$proto0["m_srcTableName"]="paymentperiods";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_paymentperiods = createSqlQuery_paymentperiods();


	
		;

			

$tdatapaymentperiods[".sqlquery"] = $queryData_paymentperiods;

$tableEvents["paymentperiods"] = new eventsBase;
$tdatapaymentperiods[".hasEvents"] = false;

?>