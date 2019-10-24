<?php
require_once(getabspath("classes/cipherer.php"));




$tdataleaveremarks = array();
	$tdataleaveremarks[".truncateText"] = true;
	$tdataleaveremarks[".NumberOfChars"] = 80;
	$tdataleaveremarks[".ShortName"] = "leaveremarks";
	$tdataleaveremarks[".OwnerID"] = "LogID";
	$tdataleaveremarks[".OriginalTable"] = "leaveremarks";

//	field labels
$fieldLabelsleaveremarks = array();
$fieldToolTipsleaveremarks = array();
$pageTitlesleaveremarks = array();
$placeHoldersleaveremarks = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsleaveremarks["English"] = array();
	$fieldToolTipsleaveremarks["English"] = array();
	$placeHoldersleaveremarks["English"] = array();
	$pageTitlesleaveremarks["English"] = array();
	$fieldLabelsleaveremarks["English"]["LRID"] = "LRID";
	$fieldToolTipsleaveremarks["English"]["LRID"] = "";
	$placeHoldersleaveremarks["English"]["LRID"] = "";
	$fieldLabelsleaveremarks["English"]["LRDate"] = "LRDate";
	$fieldToolTipsleaveremarks["English"]["LRDate"] = "";
	$placeHoldersleaveremarks["English"]["LRDate"] = "";
	$fieldLabelsleaveremarks["English"]["Remarks"] = "Remarks";
	$fieldToolTipsleaveremarks["English"]["Remarks"] = "";
	$placeHoldersleaveremarks["English"]["Remarks"] = "";
	$fieldLabelsleaveremarks["English"]["LogID"] = "Log ID";
	$fieldToolTipsleaveremarks["English"]["LogID"] = "";
	$placeHoldersleaveremarks["English"]["LogID"] = "";
	$fieldLabelsleaveremarks["English"]["LvID"] = "Lv ID";
	$fieldToolTipsleaveremarks["English"]["LvID"] = "";
	$placeHoldersleaveremarks["English"]["LvID"] = "";
	if (count($fieldToolTipsleaveremarks["English"]))
		$tdataleaveremarks[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsleaveremarks[""] = array();
	$fieldToolTipsleaveremarks[""] = array();
	$placeHoldersleaveremarks[""] = array();
	$pageTitlesleaveremarks[""] = array();
	$fieldLabelsleaveremarks[""]["LRID"] = "LRID";
	$fieldToolTipsleaveremarks[""]["LRID"] = "";
	$placeHoldersleaveremarks[""]["LRID"] = "";
	$fieldLabelsleaveremarks[""]["LRDate"] = "LRDate";
	$fieldToolTipsleaveremarks[""]["LRDate"] = "";
	$placeHoldersleaveremarks[""]["LRDate"] = "";
	$fieldLabelsleaveremarks[""]["Remarks"] = "Remarks";
	$fieldToolTipsleaveremarks[""]["Remarks"] = "";
	$placeHoldersleaveremarks[""]["Remarks"] = "";
	$fieldLabelsleaveremarks[""]["LogID"] = "Log ID";
	$fieldToolTipsleaveremarks[""]["LogID"] = "";
	$placeHoldersleaveremarks[""]["LogID"] = "";
	$fieldLabelsleaveremarks[""]["LvID"] = "Lv ID";
	$fieldToolTipsleaveremarks[""]["LvID"] = "";
	$placeHoldersleaveremarks[""]["LvID"] = "";
	if (count($fieldToolTipsleaveremarks[""]))
		$tdataleaveremarks[".isUseToolTips"] = true;
}


	$tdataleaveremarks[".NCSearch"] = true;



$tdataleaveremarks[".shortTableName"] = "leaveremarks";
$tdataleaveremarks[".nSecOptions"] = 1;
$tdataleaveremarks[".recsPerRowPrint"] = 1;
$tdataleaveremarks[".mainTableOwnerID"] = "LogID";
$tdataleaveremarks[".moveNext"] = 1;
$tdataleaveremarks[".entityType"] = 0;

$tdataleaveremarks[".strOriginalTableName"] = "leaveremarks";

	



$tdataleaveremarks[".showAddInPopup"] = false;

$tdataleaveremarks[".showEditInPopup"] = false;

$tdataleaveremarks[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataleaveremarks[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataleaveremarks[".fieldsForRegister"] = array();

$tdataleaveremarks[".listAjax"] = false;

	$tdataleaveremarks[".audit"] = false;

	$tdataleaveremarks[".locking"] = false;


$tdataleaveremarks[".add"] = true;
$tdataleaveremarks[".afterAddAction"] = 1;
$tdataleaveremarks[".closePopupAfterAdd"] = 1;
$tdataleaveremarks[".afterAddActionDetTable"] = "";

$tdataleaveremarks[".list"] = true;



$tdataleaveremarks[".reorderRecordsByHeader"] = true;


$tdataleaveremarks[".exportFormatting"] = 2;
$tdataleaveremarks[".exportDelimiter"] = ",";
		
$tdataleaveremarks[".inlineAdd"] = true;
$tdataleaveremarks[".view"] = true;


$tdataleaveremarks[".exportTo"] = true;

$tdataleaveremarks[".printFriendly"] = true;

$tdataleaveremarks[".delete"] = true;

$tdataleaveremarks[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataleaveremarks[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataleaveremarks[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataleaveremarks[".searchSaving"] = false;
//

$tdataleaveremarks[".showSearchPanel"] = true;
		$tdataleaveremarks[".flexibleSearch"] = true;

$tdataleaveremarks[".isUseAjaxSuggest"] = true;

$tdataleaveremarks[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																												

$tdataleaveremarks[".ajaxCodeSnippetAdded"] = false;

$tdataleaveremarks[".buttonsAdded"] = false;

$tdataleaveremarks[".addPageEvents"] = true;

// use timepicker for search panel
$tdataleaveremarks[".isUseTimeForSearch"] = false;



$tdataleaveremarks[".badgeColor"] = "e8926f";


$tdataleaveremarks[".allSearchFields"] = array();
$tdataleaveremarks[".filterFields"] = array();
$tdataleaveremarks[".requiredSearchFields"] = array();






$tdataleaveremarks[".tableType"] = "list";

$tdataleaveremarks[".printerPageOrientation"] = 0;
$tdataleaveremarks[".nPrinterPageScale"] = 100;

$tdataleaveremarks[".nPrinterSplitRecords"] = 40;

$tdataleaveremarks[".nPrinterPDFSplitRecords"] = 40;



$tdataleaveremarks[".geocodingEnabled"] = false;





$tdataleaveremarks[".listGridLayout"] = 3;




$tdataleaveremarks[".noRecordsFirstPage"] = true;

// view page pdf

// print page pdf


$tdataleaveremarks[".pageSize"] = 20;

$tdataleaveremarks[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataleaveremarks[".strOrderBy"] = $tstrOrderBy;

$tdataleaveremarks[".orderindexes"] = array();

$tdataleaveremarks[".sqlHead"] = "SELECT LRID,  	LRDate,  	Remarks,  	LogID,  	LvID";
$tdataleaveremarks[".sqlFrom"] = "FROM leaveremarks";
$tdataleaveremarks[".sqlWhereExpr"] = "";
$tdataleaveremarks[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataleaveremarks[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataleaveremarks[".arrGroupsPerPage"] = $arrGPP;

$tdataleaveremarks[".highlightSearchResults"] = true;

$tableKeysleaveremarks = array();
$tableKeysleaveremarks[] = "LRID";
$tdataleaveremarks[".Keys"] = $tableKeysleaveremarks;

$tdataleaveremarks[".listFields"] = array();
$tdataleaveremarks[".listFields"][] = "LRID";
$tdataleaveremarks[".listFields"][] = "LRDate";
$tdataleaveremarks[".listFields"][] = "Remarks";
$tdataleaveremarks[".listFields"][] = "LogID";
$tdataleaveremarks[".listFields"][] = "LvID";

$tdataleaveremarks[".hideMobileList"] = array();


$tdataleaveremarks[".viewFields"] = array();
$tdataleaveremarks[".viewFields"][] = "LRID";
$tdataleaveremarks[".viewFields"][] = "LRDate";
$tdataleaveremarks[".viewFields"][] = "Remarks";
$tdataleaveremarks[".viewFields"][] = "LogID";
$tdataleaveremarks[".viewFields"][] = "LvID";

$tdataleaveremarks[".addFields"] = array();
$tdataleaveremarks[".addFields"][] = "LRDate";
$tdataleaveremarks[".addFields"][] = "Remarks";
$tdataleaveremarks[".addFields"][] = "LvID";

$tdataleaveremarks[".masterListFields"] = array();
$tdataleaveremarks[".masterListFields"][] = "LRID";
$tdataleaveremarks[".masterListFields"][] = "LRDate";
$tdataleaveremarks[".masterListFields"][] = "Remarks";
$tdataleaveremarks[".masterListFields"][] = "LogID";
$tdataleaveremarks[".masterListFields"][] = "LvID";

$tdataleaveremarks[".inlineAddFields"] = array();
$tdataleaveremarks[".inlineAddFields"][] = "LRDate";
$tdataleaveremarks[".inlineAddFields"][] = "Remarks";
$tdataleaveremarks[".inlineAddFields"][] = "LvID";

$tdataleaveremarks[".editFields"] = array();

$tdataleaveremarks[".inlineEditFields"] = array();

$tdataleaveremarks[".updateSelectedFields"] = array();


$tdataleaveremarks[".exportFields"] = array();
$tdataleaveremarks[".exportFields"][] = "LRID";
$tdataleaveremarks[".exportFields"][] = "LRDate";
$tdataleaveremarks[".exportFields"][] = "Remarks";
$tdataleaveremarks[".exportFields"][] = "LogID";
$tdataleaveremarks[".exportFields"][] = "LvID";

$tdataleaveremarks[".importFields"] = array();

$tdataleaveremarks[".printFields"] = array();
$tdataleaveremarks[".printFields"][] = "LRID";
$tdataleaveremarks[".printFields"][] = "LRDate";
$tdataleaveremarks[".printFields"][] = "Remarks";
$tdataleaveremarks[".printFields"][] = "LogID";
$tdataleaveremarks[".printFields"][] = "LvID";


//	LRID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LRID";
	$fdata["GoodName"] = "LRID";
	$fdata["ownerTable"] = "leaveremarks";
	$fdata["Label"] = GetFieldLabel("leaveremarks","LRID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LRID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LRID";

	
	
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








	$tdataleaveremarks["LRID"] = $fdata;
//	LRDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "LRDate";
	$fdata["GoodName"] = "LRDate";
	$fdata["ownerTable"] = "leaveremarks";
	$fdata["Label"] = GetFieldLabel("leaveremarks","LRDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LRDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LRDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
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








	$tdataleaveremarks["LRDate"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "leaveremarks";
	$fdata["Label"] = GetFieldLabel("leaveremarks","Remarks");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Remarks";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Remarks";

	
	
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








	$tdataleaveremarks["Remarks"] = $fdata;
//	LogID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "LogID";
	$fdata["GoodName"] = "LogID";
	$fdata["ownerTable"] = "leaveremarks";
	$fdata["Label"] = GetFieldLabel("leaveremarks","LogID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LogID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LogID";

	
	
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
	$edata["LookupTable"] = "logins";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "LogID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "FullName";
	
	

	
	$edata["LookupOrderBy"] = "FullName";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
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








	$tdataleaveremarks["LogID"] = $fdata;
//	LvID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "LvID";
	$fdata["GoodName"] = "LvID";
	$fdata["ownerTable"] = "leaveremarks";
	$fdata["Label"] = GetFieldLabel("leaveremarks","LvID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LvID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LvID";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
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








	$tdataleaveremarks["LvID"] = $fdata;


$tables_data["leaveremarks"]=&$tdataleaveremarks;
$field_labels["leaveremarks"] = &$fieldLabelsleaveremarks;
$fieldToolTips["leaveremarks"] = &$fieldToolTipsleaveremarks;
$placeHolders["leaveremarks"] = &$placeHoldersleaveremarks;
$page_titles["leaveremarks"] = &$pageTitlesleaveremarks;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["leaveremarks"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["leaveremarks"] = array();


	
				$strOriginalDetailsTable="leaves";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="leaves11";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "leaves11";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["leaveremarks"][0] = $masterParams;
				$masterTablesData["leaveremarks"][0]["masterKeys"] = array();
	$masterTablesData["leaveremarks"][0]["masterKeys"][]="LvID";
				$masterTablesData["leaveremarks"][0]["detailKeys"] = array();
	$masterTablesData["leaveremarks"][0]["detailKeys"][]="LvID";
		
	
				$strOriginalDetailsTable="leaves";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="leavesapp";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "leavesapp";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["leaveremarks"][1] = $masterParams;
				$masterTablesData["leaveremarks"][1]["masterKeys"] = array();
	$masterTablesData["leaveremarks"][1]["masterKeys"][]="LvID";
				$masterTablesData["leaveremarks"][1]["detailKeys"] = array();
	$masterTablesData["leaveremarks"][1]["detailKeys"][]="LvID";
		
	
				$strOriginalDetailsTable="leaves";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="leavesapp2";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "leavesapp2";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["leaveremarks"][2] = $masterParams;
				$masterTablesData["leaveremarks"][2]["masterKeys"] = array();
	$masterTablesData["leaveremarks"][2]["masterKeys"][]="LvID";
				$masterTablesData["leaveremarks"][2]["detailKeys"] = array();
	$masterTablesData["leaveremarks"][2]["detailKeys"][]="LvID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_leaveremarks()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LRID,  	LRDate,  	Remarks,  	LogID,  	LvID";
$proto0["m_strFrom"] = "FROM leaveremarks";
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
	"m_strName" => "LRID",
	"m_strTable" => "leaveremarks",
	"m_srcTableName" => "leaveremarks"
));

$proto6["m_sql"] = "LRID";
$proto6["m_srcTableName"] = "leaveremarks";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "LRDate",
	"m_strTable" => "leaveremarks",
	"m_srcTableName" => "leaveremarks"
));

$proto8["m_sql"] = "LRDate";
$proto8["m_srcTableName"] = "leaveremarks";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "leaveremarks",
	"m_srcTableName" => "leaveremarks"
));

$proto10["m_sql"] = "Remarks";
$proto10["m_srcTableName"] = "leaveremarks";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "LogID",
	"m_strTable" => "leaveremarks",
	"m_srcTableName" => "leaveremarks"
));

$proto12["m_sql"] = "LogID";
$proto12["m_srcTableName"] = "leaveremarks";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "LvID",
	"m_strTable" => "leaveremarks",
	"m_srcTableName" => "leaveremarks"
));

$proto14["m_sql"] = "LvID";
$proto14["m_srcTableName"] = "leaveremarks";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "leaveremarks";
$proto17["m_srcTableName"] = "leaveremarks";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "LRID";
$proto17["m_columns"][] = "LRDate";
$proto17["m_columns"][] = "Remarks";
$proto17["m_columns"][] = "LogID";
$proto17["m_columns"][] = "LvID";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "leaveremarks";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "leaveremarks";
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
$proto0["m_srcTableName"]="leaveremarks";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_leaveremarks = createSqlQuery_leaveremarks();


	
		;

					

$tdataleaveremarks[".sqlquery"] = $queryData_leaveremarks;

include_once(getabspath("include/leaveremarks_events.php"));
$tableEvents["leaveremarks"] = new eventclass_leaveremarks;
$tdataleaveremarks[".hasEvents"] = true;

?>