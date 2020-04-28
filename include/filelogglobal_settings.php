<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafilelogglobal = array();
	$tdatafilelogglobal[".truncateText"] = true;
	$tdatafilelogglobal[".NumberOfChars"] = 80;
	$tdatafilelogglobal[".ShortName"] = "filelogglobal";
	$tdatafilelogglobal[".OwnerID"] = "";
	$tdatafilelogglobal[".OriginalTable"] = "filelogglobal";

//	field labels
$fieldLabelsfilelogglobal = array();
$fieldToolTipsfilelogglobal = array();
$pageTitlesfilelogglobal = array();
$placeHoldersfilelogglobal = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfilelogglobal["English"] = array();
	$fieldToolTipsfilelogglobal["English"] = array();
	$placeHoldersfilelogglobal["English"] = array();
	$pageTitlesfilelogglobal["English"] = array();
	$fieldLabelsfilelogglobal["English"]["LaID"] = "La ID";
	$fieldToolTipsfilelogglobal["English"]["LaID"] = "";
	$placeHoldersfilelogglobal["English"]["LaID"] = "";
	$fieldLabelsfilelogglobal["English"]["HRApproval"] = "HR Approval";
	$fieldToolTipsfilelogglobal["English"]["HRApproval"] = "";
	$placeHoldersfilelogglobal["English"]["HRApproval"] = "";
	$fieldLabelsfilelogglobal["English"]["MLogDate"] = "Filed As-Of-Date";
	$fieldToolTipsfilelogglobal["English"]["MLogDate"] = "";
	$placeHoldersfilelogglobal["English"]["MLogDate"] = "";
	$fieldLabelsfilelogglobal["English"]["SuperiorsApproved"] = "Superior(s) Approved";
	$fieldToolTipsfilelogglobal["English"]["SuperiorsApproved"] = "";
	$placeHoldersfilelogglobal["English"]["SuperiorsApproved"] = "";
	if (count($fieldToolTipsfilelogglobal["English"]))
		$tdatafilelogglobal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfilelogglobal[""] = array();
	$fieldToolTipsfilelogglobal[""] = array();
	$placeHoldersfilelogglobal[""] = array();
	$pageTitlesfilelogglobal[""] = array();
	$fieldLabelsfilelogglobal[""]["LaID"] = "La ID";
	$fieldToolTipsfilelogglobal[""]["LaID"] = "";
	$placeHoldersfilelogglobal[""]["LaID"] = "";
	$fieldLabelsfilelogglobal[""]["HRApproval"] = "HRApproval";
	$fieldToolTipsfilelogglobal[""]["HRApproval"] = "";
	$placeHoldersfilelogglobal[""]["HRApproval"] = "";
	$fieldLabelsfilelogglobal[""]["MLogDate"] = "MLog Date";
	$fieldToolTipsfilelogglobal[""]["MLogDate"] = "";
	$placeHoldersfilelogglobal[""]["MLogDate"] = "";
	$fieldLabelsfilelogglobal[""]["SuperiorsApproved"] = "Superiors Approved";
	$fieldToolTipsfilelogglobal[""]["SuperiorsApproved"] = "";
	$placeHoldersfilelogglobal[""]["SuperiorsApproved"] = "";
	if (count($fieldToolTipsfilelogglobal[""]))
		$tdatafilelogglobal[".isUseToolTips"] = true;
}


	$tdatafilelogglobal[".NCSearch"] = true;



$tdatafilelogglobal[".shortTableName"] = "filelogglobal";
$tdatafilelogglobal[".nSecOptions"] = 0;
$tdatafilelogglobal[".recsPerRowPrint"] = 1;
$tdatafilelogglobal[".mainTableOwnerID"] = "";
$tdatafilelogglobal[".moveNext"] = 1;
$tdatafilelogglobal[".entityType"] = 0;

$tdatafilelogglobal[".strOriginalTableName"] = "filelogglobal";

	



$tdatafilelogglobal[".showAddInPopup"] = false;

$tdatafilelogglobal[".showEditInPopup"] = false;

$tdatafilelogglobal[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafilelogglobal[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafilelogglobal[".fieldsForRegister"] = array();

$tdatafilelogglobal[".listAjax"] = false;

	$tdatafilelogglobal[".audit"] = false;

	$tdatafilelogglobal[".locking"] = false;

$tdatafilelogglobal[".edit"] = true;
$tdatafilelogglobal[".afterEditAction"] = 0;
$tdatafilelogglobal[".closePopupAfterEdit"] = 1;
$tdatafilelogglobal[".afterEditActionDetTable"] = "Detail tables not found!";

$tdatafilelogglobal[".add"] = true;
$tdatafilelogglobal[".afterAddAction"] = 0;
$tdatafilelogglobal[".closePopupAfterAdd"] = 1;
$tdatafilelogglobal[".afterAddActionDetTable"] = "Detail tables not found!";

$tdatafilelogglobal[".list"] = true;



$tdatafilelogglobal[".reorderRecordsByHeader"] = true;


$tdatafilelogglobal[".exportFormatting"] = 2;
$tdatafilelogglobal[".exportDelimiter"] = ",";
		
$tdatafilelogglobal[".view"] = true;

$tdatafilelogglobal[".import"] = true;

$tdatafilelogglobal[".exportTo"] = true;

$tdatafilelogglobal[".printFriendly"] = true;

$tdatafilelogglobal[".delete"] = true;

$tdatafilelogglobal[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafilelogglobal[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafilelogglobal[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafilelogglobal[".searchSaving"] = false;
//

$tdatafilelogglobal[".showSearchPanel"] = true;
		$tdatafilelogglobal[".flexibleSearch"] = true;

$tdatafilelogglobal[".isUseAjaxSuggest"] = true;

$tdatafilelogglobal[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																						
																																												

$tdatafilelogglobal[".ajaxCodeSnippetAdded"] = false;

$tdatafilelogglobal[".buttonsAdded"] = true;

$tdatafilelogglobal[".addPageEvents"] = true;

// use timepicker for search panel
$tdatafilelogglobal[".isUseTimeForSearch"] = false;





$tdatafilelogglobal[".allSearchFields"] = array();
$tdatafilelogglobal[".filterFields"] = array();
$tdatafilelogglobal[".requiredSearchFields"] = array();

$tdatafilelogglobal[".allSearchFields"][] = "LaID";
	$tdatafilelogglobal[".allSearchFields"][] = "MLogDate";
	$tdatafilelogglobal[".allSearchFields"][] = "HRApproval";
	$tdatafilelogglobal[".allSearchFields"][] = "SuperiorsApproved";
	

$tdatafilelogglobal[".googleLikeFields"] = array();
$tdatafilelogglobal[".googleLikeFields"][] = "LaID";
$tdatafilelogglobal[".googleLikeFields"][] = "HRApproval";
$tdatafilelogglobal[".googleLikeFields"][] = "SuperiorsApproved";
$tdatafilelogglobal[".googleLikeFields"][] = "MLogDate";


$tdatafilelogglobal[".advSearchFields"] = array();
$tdatafilelogglobal[".advSearchFields"][] = "LaID";
$tdatafilelogglobal[".advSearchFields"][] = "MLogDate";
$tdatafilelogglobal[".advSearchFields"][] = "HRApproval";
$tdatafilelogglobal[".advSearchFields"][] = "SuperiorsApproved";

$tdatafilelogglobal[".tableType"] = "list";

$tdatafilelogglobal[".printerPageOrientation"] = 0;
$tdatafilelogglobal[".nPrinterPageScale"] = 100;

$tdatafilelogglobal[".nPrinterSplitRecords"] = 40;

$tdatafilelogglobal[".nPrinterPDFSplitRecords"] = 40;



$tdatafilelogglobal[".geocodingEnabled"] = false;





$tdatafilelogglobal[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafilelogglobal[".pageSize"] = 20;

$tdatafilelogglobal[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafilelogglobal[".strOrderBy"] = $tstrOrderBy;

$tdatafilelogglobal[".orderindexes"] = array();

$tdatafilelogglobal[".sqlHead"] = "SELECT LaID,  HRApproval,  SuperiorsApproved,  MLogDate";
$tdatafilelogglobal[".sqlFrom"] = "FROM filelogglobal";
$tdatafilelogglobal[".sqlWhereExpr"] = "";
$tdatafilelogglobal[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafilelogglobal[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafilelogglobal[".arrGroupsPerPage"] = $arrGPP;

$tdatafilelogglobal[".highlightSearchResults"] = true;

$tableKeysfilelogglobal = array();
$tableKeysfilelogglobal[] = "LaID";
$tdatafilelogglobal[".Keys"] = $tableKeysfilelogglobal;

$tdatafilelogglobal[".listFields"] = array();
$tdatafilelogglobal[".listFields"][] = "LaID";
$tdatafilelogglobal[".listFields"][] = "MLogDate";
$tdatafilelogglobal[".listFields"][] = "HRApproval";
$tdatafilelogglobal[".listFields"][] = "SuperiorsApproved";

$tdatafilelogglobal[".hideMobileList"] = array();


$tdatafilelogglobal[".viewFields"] = array();
$tdatafilelogglobal[".viewFields"][] = "LaID";
$tdatafilelogglobal[".viewFields"][] = "MLogDate";
$tdatafilelogglobal[".viewFields"][] = "HRApproval";
$tdatafilelogglobal[".viewFields"][] = "SuperiorsApproved";

$tdatafilelogglobal[".addFields"] = array();
$tdatafilelogglobal[".addFields"][] = "MLogDate";
$tdatafilelogglobal[".addFields"][] = "HRApproval";
$tdatafilelogglobal[".addFields"][] = "SuperiorsApproved";

$tdatafilelogglobal[".masterListFields"] = array();
$tdatafilelogglobal[".masterListFields"][] = "LaID";
$tdatafilelogglobal[".masterListFields"][] = "MLogDate";
$tdatafilelogglobal[".masterListFields"][] = "HRApproval";
$tdatafilelogglobal[".masterListFields"][] = "SuperiorsApproved";

$tdatafilelogglobal[".inlineAddFields"] = array();
$tdatafilelogglobal[".inlineAddFields"][] = "SuperiorsApproved";

$tdatafilelogglobal[".editFields"] = array();
$tdatafilelogglobal[".editFields"][] = "MLogDate";
$tdatafilelogglobal[".editFields"][] = "HRApproval";
$tdatafilelogglobal[".editFields"][] = "SuperiorsApproved";

$tdatafilelogglobal[".inlineEditFields"] = array();
$tdatafilelogglobal[".inlineEditFields"][] = "SuperiorsApproved";

$tdatafilelogglobal[".updateSelectedFields"] = array();
$tdatafilelogglobal[".updateSelectedFields"][] = "MLogDate";
$tdatafilelogglobal[".updateSelectedFields"][] = "HRApproval";
$tdatafilelogglobal[".updateSelectedFields"][] = "SuperiorsApproved";


$tdatafilelogglobal[".exportFields"] = array();
$tdatafilelogglobal[".exportFields"][] = "LaID";
$tdatafilelogglobal[".exportFields"][] = "MLogDate";
$tdatafilelogglobal[".exportFields"][] = "HRApproval";
$tdatafilelogglobal[".exportFields"][] = "SuperiorsApproved";

$tdatafilelogglobal[".importFields"] = array();
$tdatafilelogglobal[".importFields"][] = "LaID";
$tdatafilelogglobal[".importFields"][] = "HRApproval";
$tdatafilelogglobal[".importFields"][] = "SuperiorsApproved";
$tdatafilelogglobal[".importFields"][] = "MLogDate";

$tdatafilelogglobal[".printFields"] = array();
$tdatafilelogglobal[".printFields"][] = "LaID";
$tdatafilelogglobal[".printFields"][] = "MLogDate";
$tdatafilelogglobal[".printFields"][] = "HRApproval";
$tdatafilelogglobal[".printFields"][] = "SuperiorsApproved";


//	LaID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LaID";
	$fdata["GoodName"] = "LaID";
	$fdata["ownerTable"] = "filelogglobal";
	$fdata["Label"] = GetFieldLabel("filelogglobal","LaID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LaID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LaID";

	
	
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




	$tdatafilelogglobal["LaID"] = $fdata;
//	HRApproval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "HRApproval";
	$fdata["GoodName"] = "HRApproval";
	$fdata["ownerTable"] = "filelogglobal";
	$fdata["Label"] = GetFieldLabel("filelogglobal","HRApproval");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "HRApproval";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HRApproval";

	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafilelogglobal["HRApproval"] = $fdata;
//	SuperiorsApproved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SuperiorsApproved";
	$fdata["GoodName"] = "SuperiorsApproved";
	$fdata["ownerTable"] = "filelogglobal";
	$fdata["Label"] = GetFieldLabel("filelogglobal","SuperiorsApproved");
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

		$fdata["strField"] = "SuperiorsApproved";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SuperiorsApproved";

	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafilelogglobal["SuperiorsApproved"] = $fdata;
//	MLogDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "MLogDate";
	$fdata["GoodName"] = "MLogDate";
	$fdata["ownerTable"] = "filelogglobal";
	$fdata["Label"] = GetFieldLabel("filelogglobal","MLogDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MLogDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MLogDate";

	
	
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatafilelogglobal["MLogDate"] = $fdata;


$tables_data["filelogglobal"]=&$tdatafilelogglobal;
$field_labels["filelogglobal"] = &$fieldLabelsfilelogglobal;
$fieldToolTips["filelogglobal"] = &$fieldToolTipsfilelogglobal;
$placeHolders["filelogglobal"] = &$placeHoldersfilelogglobal;
$page_titles["filelogglobal"] = &$pageTitlesfilelogglobal;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["filelogglobal"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["filelogglobal"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_filelogglobal()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LaID,  HRApproval,  SuperiorsApproved,  MLogDate";
$proto0["m_strFrom"] = "FROM filelogglobal";
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
	"m_strName" => "LaID",
	"m_strTable" => "filelogglobal",
	"m_srcTableName" => "filelogglobal"
));

$proto6["m_sql"] = "LaID";
$proto6["m_srcTableName"] = "filelogglobal";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "HRApproval",
	"m_strTable" => "filelogglobal",
	"m_srcTableName" => "filelogglobal"
));

$proto8["m_sql"] = "HRApproval";
$proto8["m_srcTableName"] = "filelogglobal";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SuperiorsApproved",
	"m_strTable" => "filelogglobal",
	"m_srcTableName" => "filelogglobal"
));

$proto10["m_sql"] = "SuperiorsApproved";
$proto10["m_srcTableName"] = "filelogglobal";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "MLogDate",
	"m_strTable" => "filelogglobal",
	"m_srcTableName" => "filelogglobal"
));

$proto12["m_sql"] = "MLogDate";
$proto12["m_srcTableName"] = "filelogglobal";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "filelogglobal";
$proto15["m_srcTableName"] = "filelogglobal";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "LaID";
$proto15["m_columns"][] = "HRApproval";
$proto15["m_columns"][] = "SuperiorsApproved";
$proto15["m_columns"][] = "MLogDate";
$proto15["m_columns"][] = "Employee";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "filelogglobal";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "filelogglobal";
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
$proto0["m_srcTableName"]="filelogglobal";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_filelogglobal = createSqlQuery_filelogglobal();


	
		;

				

$tdatafilelogglobal[".sqlquery"] = $queryData_filelogglobal;

include_once(getabspath("include/filelogglobal_events.php"));
$tableEvents["filelogglobal"] = new eventclass_filelogglobal;
$tdatafilelogglobal[".hasEvents"] = true;

?>