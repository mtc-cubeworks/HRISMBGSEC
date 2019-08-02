<?php
require_once(getabspath("classes/cipherer.php"));




$tdataapprovalbutton = array();
	$tdataapprovalbutton[".truncateText"] = true;
	$tdataapprovalbutton[".NumberOfChars"] = 80;
	$tdataapprovalbutton[".ShortName"] = "approvalbutton";
	$tdataapprovalbutton[".OwnerID"] = "";
	$tdataapprovalbutton[".OriginalTable"] = "approvalbutton";

//	field labels
$fieldLabelsapprovalbutton = array();
$fieldToolTipsapprovalbutton = array();
$pageTitlesapprovalbutton = array();
$placeHoldersapprovalbutton = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsapprovalbutton["English"] = array();
	$fieldToolTipsapprovalbutton["English"] = array();
	$placeHoldersapprovalbutton["English"] = array();
	$pageTitlesapprovalbutton["English"] = array();
	$fieldLabelsapprovalbutton["English"]["ApBID"] = "Ap BID";
	$fieldToolTipsapprovalbutton["English"]["ApBID"] = "";
	$placeHoldersapprovalbutton["English"]["ApBID"] = "";
	$fieldLabelsapprovalbutton["English"]["SelectApproval"] = "Select Approval";
	$fieldToolTipsapprovalbutton["English"]["SelectApproval"] = "";
	$placeHoldersapprovalbutton["English"]["SelectApproval"] = "";
	if (count($fieldToolTipsapprovalbutton["English"]))
		$tdataapprovalbutton[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsapprovalbutton[""] = array();
	$fieldToolTipsapprovalbutton[""] = array();
	$placeHoldersapprovalbutton[""] = array();
	$pageTitlesapprovalbutton[""] = array();
	$fieldLabelsapprovalbutton[""]["ApBID"] = "Ap BID";
	$fieldToolTipsapprovalbutton[""]["ApBID"] = "";
	$placeHoldersapprovalbutton[""]["ApBID"] = "";
	$fieldLabelsapprovalbutton[""]["SelectApproval"] = "Select Approval";
	$fieldToolTipsapprovalbutton[""]["SelectApproval"] = "";
	$placeHoldersapprovalbutton[""]["SelectApproval"] = "";
	if (count($fieldToolTipsapprovalbutton[""]))
		$tdataapprovalbutton[".isUseToolTips"] = true;
}


	$tdataapprovalbutton[".NCSearch"] = true;



$tdataapprovalbutton[".shortTableName"] = "approvalbutton";
$tdataapprovalbutton[".nSecOptions"] = 0;
$tdataapprovalbutton[".recsPerRowPrint"] = 1;
$tdataapprovalbutton[".mainTableOwnerID"] = "";
$tdataapprovalbutton[".moveNext"] = 1;
$tdataapprovalbutton[".entityType"] = 0;

$tdataapprovalbutton[".strOriginalTableName"] = "approvalbutton";

	



$tdataapprovalbutton[".showAddInPopup"] = false;

$tdataapprovalbutton[".showEditInPopup"] = false;

$tdataapprovalbutton[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataapprovalbutton[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataapprovalbutton[".fieldsForRegister"] = array();

$tdataapprovalbutton[".listAjax"] = false;

	$tdataapprovalbutton[".audit"] = false;

	$tdataapprovalbutton[".locking"] = false;

$tdataapprovalbutton[".edit"] = true;
$tdataapprovalbutton[".afterEditAction"] = 1;
$tdataapprovalbutton[".closePopupAfterEdit"] = 1;
$tdataapprovalbutton[".afterEditActionDetTable"] = "";

$tdataapprovalbutton[".add"] = true;
$tdataapprovalbutton[".afterAddAction"] = 1;
$tdataapprovalbutton[".closePopupAfterAdd"] = 1;
$tdataapprovalbutton[".afterAddActionDetTable"] = "";

$tdataapprovalbutton[".list"] = true;



$tdataapprovalbutton[".reorderRecordsByHeader"] = true;


$tdataapprovalbutton[".exportFormatting"] = 2;
$tdataapprovalbutton[".exportDelimiter"] = ",";
		
$tdataapprovalbutton[".view"] = true;

$tdataapprovalbutton[".import"] = true;

$tdataapprovalbutton[".exportTo"] = true;

$tdataapprovalbutton[".printFriendly"] = true;

$tdataapprovalbutton[".delete"] = true;

$tdataapprovalbutton[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataapprovalbutton[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataapprovalbutton[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataapprovalbutton[".searchSaving"] = false;
//

$tdataapprovalbutton[".showSearchPanel"] = true;
		$tdataapprovalbutton[".flexibleSearch"] = true;

$tdataapprovalbutton[".isUseAjaxSuggest"] = true;

$tdataapprovalbutton[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																														

$tdataapprovalbutton[".ajaxCodeSnippetAdded"] = false;

$tdataapprovalbutton[".buttonsAdded"] = false;

$tdataapprovalbutton[".addPageEvents"] = false;

// use timepicker for search panel
$tdataapprovalbutton[".isUseTimeForSearch"] = false;





$tdataapprovalbutton[".allSearchFields"] = array();
$tdataapprovalbutton[".filterFields"] = array();
$tdataapprovalbutton[".requiredSearchFields"] = array();

$tdataapprovalbutton[".allSearchFields"][] = "ApBID";
	$tdataapprovalbutton[".allSearchFields"][] = "SelectApproval";
	

$tdataapprovalbutton[".googleLikeFields"] = array();
$tdataapprovalbutton[".googleLikeFields"][] = "ApBID";
$tdataapprovalbutton[".googleLikeFields"][] = "SelectApproval";


$tdataapprovalbutton[".advSearchFields"] = array();
$tdataapprovalbutton[".advSearchFields"][] = "ApBID";
$tdataapprovalbutton[".advSearchFields"][] = "SelectApproval";

$tdataapprovalbutton[".tableType"] = "list";

$tdataapprovalbutton[".printerPageOrientation"] = 0;
$tdataapprovalbutton[".nPrinterPageScale"] = 100;

$tdataapprovalbutton[".nPrinterSplitRecords"] = 40;

$tdataapprovalbutton[".nPrinterPDFSplitRecords"] = 40;



$tdataapprovalbutton[".geocodingEnabled"] = false;





$tdataapprovalbutton[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataapprovalbutton[".pageSize"] = 20;

$tdataapprovalbutton[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataapprovalbutton[".strOrderBy"] = $tstrOrderBy;

$tdataapprovalbutton[".orderindexes"] = array();

$tdataapprovalbutton[".sqlHead"] = "SELECT ApBID,  	SelectApproval";
$tdataapprovalbutton[".sqlFrom"] = "FROM approvalbutton";
$tdataapprovalbutton[".sqlWhereExpr"] = "";
$tdataapprovalbutton[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataapprovalbutton[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataapprovalbutton[".arrGroupsPerPage"] = $arrGPP;

$tdataapprovalbutton[".highlightSearchResults"] = true;

$tableKeysapprovalbutton = array();
$tableKeysapprovalbutton[] = "ApBID";
$tdataapprovalbutton[".Keys"] = $tableKeysapprovalbutton;

$tdataapprovalbutton[".listFields"] = array();
$tdataapprovalbutton[".listFields"][] = "ApBID";
$tdataapprovalbutton[".listFields"][] = "SelectApproval";

$tdataapprovalbutton[".hideMobileList"] = array();


$tdataapprovalbutton[".viewFields"] = array();
$tdataapprovalbutton[".viewFields"][] = "ApBID";
$tdataapprovalbutton[".viewFields"][] = "SelectApproval";

$tdataapprovalbutton[".addFields"] = array();
$tdataapprovalbutton[".addFields"][] = "SelectApproval";

$tdataapprovalbutton[".masterListFields"] = array();
$tdataapprovalbutton[".masterListFields"][] = "ApBID";
$tdataapprovalbutton[".masterListFields"][] = "SelectApproval";

$tdataapprovalbutton[".inlineAddFields"] = array();
$tdataapprovalbutton[".inlineAddFields"][] = "SelectApproval";

$tdataapprovalbutton[".editFields"] = array();
$tdataapprovalbutton[".editFields"][] = "SelectApproval";

$tdataapprovalbutton[".inlineEditFields"] = array();
$tdataapprovalbutton[".inlineEditFields"][] = "SelectApproval";

$tdataapprovalbutton[".updateSelectedFields"] = array();
$tdataapprovalbutton[".updateSelectedFields"][] = "SelectApproval";


$tdataapprovalbutton[".exportFields"] = array();
$tdataapprovalbutton[".exportFields"][] = "ApBID";
$tdataapprovalbutton[".exportFields"][] = "SelectApproval";

$tdataapprovalbutton[".importFields"] = array();
$tdataapprovalbutton[".importFields"][] = "ApBID";
$tdataapprovalbutton[".importFields"][] = "SelectApproval";

$tdataapprovalbutton[".printFields"] = array();
$tdataapprovalbutton[".printFields"][] = "ApBID";
$tdataapprovalbutton[".printFields"][] = "SelectApproval";


//	ApBID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ApBID";
	$fdata["GoodName"] = "ApBID";
	$fdata["ownerTable"] = "approvalbutton";
	$fdata["Label"] = GetFieldLabel("approvalbutton","ApBID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ApBID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ApBID";

	
	
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




	$tdataapprovalbutton["ApBID"] = $fdata;
//	SelectApproval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SelectApproval";
	$fdata["GoodName"] = "SelectApproval";
	$fdata["ownerTable"] = "approvalbutton";
	$fdata["Label"] = GetFieldLabel("approvalbutton","SelectApproval");
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

		$fdata["strField"] = "SelectApproval";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SelectApproval";

	
	
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




	$tdataapprovalbutton["SelectApproval"] = $fdata;


$tables_data["approvalbutton"]=&$tdataapprovalbutton;
$field_labels["approvalbutton"] = &$fieldLabelsapprovalbutton;
$fieldToolTips["approvalbutton"] = &$fieldToolTipsapprovalbutton;
$placeHolders["approvalbutton"] = &$placeHoldersapprovalbutton;
$page_titles["approvalbutton"] = &$pageTitlesapprovalbutton;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["approvalbutton"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["approvalbutton"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_approvalbutton()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ApBID,  	SelectApproval";
$proto0["m_strFrom"] = "FROM approvalbutton";
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
	"m_strName" => "ApBID",
	"m_strTable" => "approvalbutton",
	"m_srcTableName" => "approvalbutton"
));

$proto6["m_sql"] = "ApBID";
$proto6["m_srcTableName"] = "approvalbutton";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SelectApproval",
	"m_strTable" => "approvalbutton",
	"m_srcTableName" => "approvalbutton"
));

$proto8["m_sql"] = "SelectApproval";
$proto8["m_srcTableName"] = "approvalbutton";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "approvalbutton";
$proto11["m_srcTableName"] = "approvalbutton";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ApBID";
$proto11["m_columns"][] = "SelectApproval";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "approvalbutton";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "approvalbutton";
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
$proto0["m_srcTableName"]="approvalbutton";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_approvalbutton = createSqlQuery_approvalbutton();


	
		;

		

$tdataapprovalbutton[".sqlquery"] = $queryData_approvalbutton;

$tableEvents["approvalbutton"] = new eventsBase;
$tdataapprovalbutton[".hasEvents"] = false;

?>