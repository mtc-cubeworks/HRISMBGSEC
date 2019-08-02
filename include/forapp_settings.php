<?php
require_once(getabspath("classes/cipherer.php"));




$tdataforapp = array();
	$tdataforapp[".truncateText"] = true;
	$tdataforapp[".NumberOfChars"] = 80;
	$tdataforapp[".ShortName"] = "forapp";
	$tdataforapp[".OwnerID"] = "";
	$tdataforapp[".OriginalTable"] = "forapp";

//	field labels
$fieldLabelsforapp = array();
$fieldToolTipsforapp = array();
$pageTitlesforapp = array();
$placeHoldersforapp = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsforapp["English"] = array();
	$fieldToolTipsforapp["English"] = array();
	$placeHoldersforapp["English"] = array();
	$pageTitlesforapp["English"] = array();
	$fieldLabelsforapp["English"]["ScID"] = "Sc ID";
	$fieldToolTipsforapp["English"]["ScID"] = "";
	$placeHoldersforapp["English"]["ScID"] = "";
	$fieldLabelsforapp["English"]["TempOT"] = "Temp OT";
	$fieldToolTipsforapp["English"]["TempOT"] = "";
	$placeHoldersforapp["English"]["TempOT"] = "";
	$fieldLabelsforapp["English"]["FiledOT"] = "Filed OT";
	$fieldToolTipsforapp["English"]["FiledOT"] = "";
	$placeHoldersforapp["English"]["FiledOT"] = "";
	$fieldLabelsforapp["English"]["NDMins"] = "NDMins";
	$fieldToolTipsforapp["English"]["NDMins"] = "";
	$placeHoldersforapp["English"]["NDMins"] = "";
	$fieldLabelsforapp["English"]["WorkMinsNet"] = "Work Mins Net";
	$fieldToolTipsforapp["English"]["WorkMinsNet"] = "";
	$placeHoldersforapp["English"]["WorkMinsNet"] = "";
	if (count($fieldToolTipsforapp["English"]))
		$tdataforapp[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsforapp[""] = array();
	$fieldToolTipsforapp[""] = array();
	$placeHoldersforapp[""] = array();
	$pageTitlesforapp[""] = array();
	if (count($fieldToolTipsforapp[""]))
		$tdataforapp[".isUseToolTips"] = true;
}


	$tdataforapp[".NCSearch"] = true;



$tdataforapp[".shortTableName"] = "forapp";
$tdataforapp[".nSecOptions"] = 0;
$tdataforapp[".recsPerRowPrint"] = 1;
$tdataforapp[".mainTableOwnerID"] = "";
$tdataforapp[".moveNext"] = 1;
$tdataforapp[".entityType"] = 0;

$tdataforapp[".strOriginalTableName"] = "forapp";

	



$tdataforapp[".showAddInPopup"] = false;

$tdataforapp[".showEditInPopup"] = false;

$tdataforapp[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataforapp[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataforapp[".fieldsForRegister"] = array();

$tdataforapp[".listAjax"] = false;

	$tdataforapp[".audit"] = false;

	$tdataforapp[".locking"] = false;



$tdataforapp[".list"] = true;



$tdataforapp[".reorderRecordsByHeader"] = true;


$tdataforapp[".exportFormatting"] = 2;
$tdataforapp[".exportDelimiter"] = ",";
		

$tdataforapp[".import"] = true;

$tdataforapp[".exportTo"] = true;

$tdataforapp[".printFriendly"] = true;


$tdataforapp[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataforapp[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataforapp[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataforapp[".searchSaving"] = false;
//

$tdataforapp[".showSearchPanel"] = true;
		$tdataforapp[".flexibleSearch"] = true;

$tdataforapp[".isUseAjaxSuggest"] = true;

$tdataforapp[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																														

$tdataforapp[".ajaxCodeSnippetAdded"] = false;

$tdataforapp[".buttonsAdded"] = false;

$tdataforapp[".addPageEvents"] = false;

// use timepicker for search panel
$tdataforapp[".isUseTimeForSearch"] = false;





$tdataforapp[".allSearchFields"] = array();
$tdataforapp[".filterFields"] = array();
$tdataforapp[".requiredSearchFields"] = array();

$tdataforapp[".allSearchFields"][] = "ScID";
	$tdataforapp[".allSearchFields"][] = "TempOT";
	$tdataforapp[".allSearchFields"][] = "NDMins";
	$tdataforapp[".allSearchFields"][] = "WorkMinsNet";
	$tdataforapp[".allSearchFields"][] = "FiledOT";
	

$tdataforapp[".googleLikeFields"] = array();
$tdataforapp[".googleLikeFields"][] = "ScID";
$tdataforapp[".googleLikeFields"][] = "TempOT";
$tdataforapp[".googleLikeFields"][] = "NDMins";
$tdataforapp[".googleLikeFields"][] = "WorkMinsNet";
$tdataforapp[".googleLikeFields"][] = "FiledOT";


$tdataforapp[".advSearchFields"] = array();
$tdataforapp[".advSearchFields"][] = "ScID";
$tdataforapp[".advSearchFields"][] = "TempOT";
$tdataforapp[".advSearchFields"][] = "NDMins";
$tdataforapp[".advSearchFields"][] = "WorkMinsNet";
$tdataforapp[".advSearchFields"][] = "FiledOT";

$tdataforapp[".tableType"] = "list";

$tdataforapp[".printerPageOrientation"] = 0;
$tdataforapp[".nPrinterPageScale"] = 100;

$tdataforapp[".nPrinterSplitRecords"] = 40;

$tdataforapp[".nPrinterPDFSplitRecords"] = 40;



$tdataforapp[".geocodingEnabled"] = false;





$tdataforapp[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataforapp[".pageSize"] = 20;

$tdataforapp[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataforapp[".strOrderBy"] = $tstrOrderBy;

$tdataforapp[".orderindexes"] = array();

$tdataforapp[".sqlHead"] = "SELECT ScID,  	TempOT,  	NDMins,  	WorkMinsNet,  	FiledOT";
$tdataforapp[".sqlFrom"] = "FROM forapp";
$tdataforapp[".sqlWhereExpr"] = "";
$tdataforapp[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataforapp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataforapp[".arrGroupsPerPage"] = $arrGPP;

$tdataforapp[".highlightSearchResults"] = true;

$tableKeysforapp = array();
$tdataforapp[".Keys"] = $tableKeysforapp;

$tdataforapp[".listFields"] = array();
$tdataforapp[".listFields"][] = "ScID";
$tdataforapp[".listFields"][] = "TempOT";
$tdataforapp[".listFields"][] = "NDMins";
$tdataforapp[".listFields"][] = "WorkMinsNet";
$tdataforapp[".listFields"][] = "FiledOT";

$tdataforapp[".hideMobileList"] = array();


$tdataforapp[".viewFields"] = array();
$tdataforapp[".viewFields"][] = "ScID";
$tdataforapp[".viewFields"][] = "TempOT";
$tdataforapp[".viewFields"][] = "NDMins";
$tdataforapp[".viewFields"][] = "WorkMinsNet";
$tdataforapp[".viewFields"][] = "FiledOT";

$tdataforapp[".addFields"] = array();
$tdataforapp[".addFields"][] = "ScID";
$tdataforapp[".addFields"][] = "TempOT";
$tdataforapp[".addFields"][] = "NDMins";
$tdataforapp[".addFields"][] = "WorkMinsNet";
$tdataforapp[".addFields"][] = "FiledOT";

$tdataforapp[".masterListFields"] = array();
$tdataforapp[".masterListFields"][] = "ScID";
$tdataforapp[".masterListFields"][] = "TempOT";
$tdataforapp[".masterListFields"][] = "NDMins";
$tdataforapp[".masterListFields"][] = "WorkMinsNet";
$tdataforapp[".masterListFields"][] = "FiledOT";

$tdataforapp[".inlineAddFields"] = array();
$tdataforapp[".inlineAddFields"][] = "ScID";
$tdataforapp[".inlineAddFields"][] = "TempOT";
$tdataforapp[".inlineAddFields"][] = "NDMins";
$tdataforapp[".inlineAddFields"][] = "WorkMinsNet";
$tdataforapp[".inlineAddFields"][] = "FiledOT";

$tdataforapp[".editFields"] = array();
$tdataforapp[".editFields"][] = "ScID";
$tdataforapp[".editFields"][] = "TempOT";
$tdataforapp[".editFields"][] = "NDMins";
$tdataforapp[".editFields"][] = "WorkMinsNet";
$tdataforapp[".editFields"][] = "FiledOT";

$tdataforapp[".inlineEditFields"] = array();
$tdataforapp[".inlineEditFields"][] = "ScID";
$tdataforapp[".inlineEditFields"][] = "TempOT";
$tdataforapp[".inlineEditFields"][] = "NDMins";
$tdataforapp[".inlineEditFields"][] = "WorkMinsNet";
$tdataforapp[".inlineEditFields"][] = "FiledOT";

$tdataforapp[".updateSelectedFields"] = array();
$tdataforapp[".updateSelectedFields"][] = "ScID";
$tdataforapp[".updateSelectedFields"][] = "TempOT";
$tdataforapp[".updateSelectedFields"][] = "NDMins";
$tdataforapp[".updateSelectedFields"][] = "WorkMinsNet";
$tdataforapp[".updateSelectedFields"][] = "FiledOT";


$tdataforapp[".exportFields"] = array();
$tdataforapp[".exportFields"][] = "ScID";
$tdataforapp[".exportFields"][] = "TempOT";
$tdataforapp[".exportFields"][] = "NDMins";
$tdataforapp[".exportFields"][] = "WorkMinsNet";
$tdataforapp[".exportFields"][] = "FiledOT";

$tdataforapp[".importFields"] = array();
$tdataforapp[".importFields"][] = "ScID";
$tdataforapp[".importFields"][] = "TempOT";
$tdataforapp[".importFields"][] = "NDMins";
$tdataforapp[".importFields"][] = "WorkMinsNet";
$tdataforapp[".importFields"][] = "FiledOT";

$tdataforapp[".printFields"] = array();
$tdataforapp[".printFields"][] = "ScID";
$tdataforapp[".printFields"][] = "TempOT";
$tdataforapp[".printFields"][] = "NDMins";
$tdataforapp[".printFields"][] = "WorkMinsNet";
$tdataforapp[".printFields"][] = "FiledOT";


//	ScID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ScID";
	$fdata["GoodName"] = "ScID";
	$fdata["ownerTable"] = "forapp";
	$fdata["Label"] = GetFieldLabel("forapp","ScID");
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

		$fdata["strField"] = "ScID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ScID";

	
	
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




	$tdataforapp["ScID"] = $fdata;
//	TempOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TempOT";
	$fdata["GoodName"] = "TempOT";
	$fdata["ownerTable"] = "forapp";
	$fdata["Label"] = GetFieldLabel("forapp","TempOT");
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

		$fdata["strField"] = "TempOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TempOT";

	
	
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
			$edata["EditParams"].= " maxlength=26";

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




	$tdataforapp["TempOT"] = $fdata;
//	NDMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NDMins";
	$fdata["GoodName"] = "NDMins";
	$fdata["ownerTable"] = "forapp";
	$fdata["Label"] = GetFieldLabel("forapp","NDMins");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "NDMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NDMins";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
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




	$tdataforapp["NDMins"] = $fdata;
//	WorkMinsNet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "WorkMinsNet";
	$fdata["GoodName"] = "WorkMinsNet";
	$fdata["ownerTable"] = "forapp";
	$fdata["Label"] = GetFieldLabel("forapp","WorkMinsNet");
	$fdata["FieldType"] = 5;

	
	
	
			
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

		$fdata["strField"] = "WorkMinsNet";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WorkMinsNet";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
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




	$tdataforapp["WorkMinsNet"] = $fdata;
//	FiledOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FiledOT";
	$fdata["GoodName"] = "FiledOT";
	$fdata["ownerTable"] = "forapp";
	$fdata["Label"] = GetFieldLabel("forapp","FiledOT");
	$fdata["FieldType"] = 5;

	
	
	
			
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

		$fdata["strField"] = "FiledOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FiledOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
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




	$tdataforapp["FiledOT"] = $fdata;


$tables_data["forapp"]=&$tdataforapp;
$field_labels["forapp"] = &$fieldLabelsforapp;
$fieldToolTips["forapp"] = &$fieldToolTipsforapp;
$placeHolders["forapp"] = &$placeHoldersforapp;
$page_titles["forapp"] = &$pageTitlesforapp;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["forapp"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["forapp"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_forapp()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ScID,  	TempOT,  	NDMins,  	WorkMinsNet,  	FiledOT";
$proto0["m_strFrom"] = "FROM forapp";
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
	"m_strName" => "ScID",
	"m_strTable" => "forapp",
	"m_srcTableName" => "forapp"
));

$proto6["m_sql"] = "ScID";
$proto6["m_srcTableName"] = "forapp";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TempOT",
	"m_strTable" => "forapp",
	"m_srcTableName" => "forapp"
));

$proto8["m_sql"] = "TempOT";
$proto8["m_srcTableName"] = "forapp";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NDMins",
	"m_strTable" => "forapp",
	"m_srcTableName" => "forapp"
));

$proto10["m_sql"] = "NDMins";
$proto10["m_srcTableName"] = "forapp";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "WorkMinsNet",
	"m_strTable" => "forapp",
	"m_srcTableName" => "forapp"
));

$proto12["m_sql"] = "WorkMinsNet";
$proto12["m_srcTableName"] = "forapp";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FiledOT",
	"m_strTable" => "forapp",
	"m_srcTableName" => "forapp"
));

$proto14["m_sql"] = "FiledOT";
$proto14["m_srcTableName"] = "forapp";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "forapp";
$proto17["m_srcTableName"] = "forapp";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "ScID";
$proto17["m_columns"][] = "TempOT";
$proto17["m_columns"][] = "NDMins";
$proto17["m_columns"][] = "WorkMinsNet";
$proto17["m_columns"][] = "FiledOT";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "forapp";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "forapp";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="forapp";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_forapp = createSqlQuery_forapp();


	
		;

					

$tdataforapp[".sqlquery"] = $queryData_forapp;

$tableEvents["forapp"] = new eventsBase;
$tdataforapp[".hasEvents"] = false;

?>