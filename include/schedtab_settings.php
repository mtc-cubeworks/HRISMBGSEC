<?php
require_once(getabspath("classes/cipherer.php"));




$tdataschedtab = array();
	$tdataschedtab[".truncateText"] = true;
	$tdataschedtab[".NumberOfChars"] = 80;
	$tdataschedtab[".ShortName"] = "schedtab";
	$tdataschedtab[".OwnerID"] = "";
	$tdataschedtab[".OriginalTable"] = "schedtab";

//	field labels
$fieldLabelsschedtab = array();
$fieldToolTipsschedtab = array();
$pageTitlesschedtab = array();
$placeHoldersschedtab = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsschedtab["English"] = array();
	$fieldToolTipsschedtab["English"] = array();
	$placeHoldersschedtab["English"] = array();
	$pageTitlesschedtab["English"] = array();
	$fieldLabelsschedtab["English"]["ScRtabID"] = "Sc Rtab ID";
	$fieldToolTipsschedtab["English"]["ScRtabID"] = "";
	$placeHoldersschedtab["English"]["ScRtabID"] = "";
	$fieldLabelsschedtab["English"]["UserID"] = "User ID";
	$fieldToolTipsschedtab["English"]["UserID"] = "";
	$placeHoldersschedtab["English"]["UserID"] = "";
	$fieldLabelsschedtab["English"]["UserName"] = "User Name";
	$fieldToolTipsschedtab["English"]["UserName"] = "";
	$placeHoldersschedtab["English"]["UserName"] = "";
	$fieldLabelsschedtab["English"]["ScRID"] = "Sc RID";
	$fieldToolTipsschedtab["English"]["ScRID"] = "";
	$placeHoldersschedtab["English"]["ScRID"] = "";
	$fieldLabelsschedtab["English"]["EmployeeID"] = "Biometric ID";
	$fieldToolTipsschedtab["English"]["EmployeeID"] = "";
	$placeHoldersschedtab["English"]["EmployeeID"] = "";
	if (count($fieldToolTipsschedtab["English"]))
		$tdataschedtab[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsschedtab[""] = array();
	$fieldToolTipsschedtab[""] = array();
	$placeHoldersschedtab[""] = array();
	$pageTitlesschedtab[""] = array();
	if (count($fieldToolTipsschedtab[""]))
		$tdataschedtab[".isUseToolTips"] = true;
}


	$tdataschedtab[".NCSearch"] = true;



$tdataschedtab[".shortTableName"] = "schedtab";
$tdataschedtab[".nSecOptions"] = 0;
$tdataschedtab[".recsPerRowPrint"] = 1;
$tdataschedtab[".mainTableOwnerID"] = "";
$tdataschedtab[".moveNext"] = 1;
$tdataschedtab[".entityType"] = 0;

$tdataschedtab[".strOriginalTableName"] = "schedtab";

	



$tdataschedtab[".showAddInPopup"] = false;

$tdataschedtab[".showEditInPopup"] = false;

$tdataschedtab[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataschedtab[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataschedtab[".fieldsForRegister"] = array();

$tdataschedtab[".listAjax"] = false;

	$tdataschedtab[".audit"] = false;

	$tdataschedtab[".locking"] = false;

$tdataschedtab[".edit"] = true;
$tdataschedtab[".afterEditAction"] = 0;
$tdataschedtab[".closePopupAfterEdit"] = 1;
$tdataschedtab[".afterEditActionDetTable"] = "";

$tdataschedtab[".add"] = true;
$tdataschedtab[".afterAddAction"] = 0;
$tdataschedtab[".closePopupAfterAdd"] = 1;
$tdataschedtab[".afterAddActionDetTable"] = "";

$tdataschedtab[".list"] = true;

$tdataschedtab[".inlineEdit"] = true;

$tdataschedtab[".updateSelected"] = true;

$tdataschedtab[".reorderRecordsByHeader"] = true;


$tdataschedtab[".exportFormatting"] = 2;
$tdataschedtab[".exportDelimiter"] = ",";
		
$tdataschedtab[".inlineAdd"] = true;
$tdataschedtab[".copy"] = true;
$tdataschedtab[".view"] = true;

$tdataschedtab[".import"] = true;

$tdataschedtab[".exportTo"] = true;

$tdataschedtab[".printFriendly"] = true;

$tdataschedtab[".delete"] = true;

$tdataschedtab[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataschedtab[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataschedtab[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataschedtab[".searchSaving"] = false;
//

$tdataschedtab[".showSearchPanel"] = true;
		$tdataschedtab[".flexibleSearch"] = true;

$tdataschedtab[".isUseAjaxSuggest"] = true;

$tdataschedtab[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																														

$tdataschedtab[".ajaxCodeSnippetAdded"] = false;

$tdataschedtab[".buttonsAdded"] = false;

$tdataschedtab[".addPageEvents"] = false;

// use timepicker for search panel
$tdataschedtab[".isUseTimeForSearch"] = false;



$tdataschedtab[".badgeColor"] = "DC143C";


$tdataschedtab[".allSearchFields"] = array();
$tdataschedtab[".filterFields"] = array();
$tdataschedtab[".requiredSearchFields"] = array();

$tdataschedtab[".allSearchFields"][] = "ScRtabID";
	$tdataschedtab[".allSearchFields"][] = "UserName";
	$tdataschedtab[".allSearchFields"][] = "EmployeeID";
	$tdataschedtab[".allSearchFields"][] = "UserID";
	$tdataschedtab[".allSearchFields"][] = "ScRID";
	

$tdataschedtab[".googleLikeFields"] = array();
$tdataschedtab[".googleLikeFields"][] = "ScRtabID";
$tdataschedtab[".googleLikeFields"][] = "UserID";
$tdataschedtab[".googleLikeFields"][] = "UserName";
$tdataschedtab[".googleLikeFields"][] = "ScRID";
$tdataschedtab[".googleLikeFields"][] = "EmployeeID";


$tdataschedtab[".advSearchFields"] = array();
$tdataschedtab[".advSearchFields"][] = "ScRtabID";
$tdataschedtab[".advSearchFields"][] = "UserName";
$tdataschedtab[".advSearchFields"][] = "EmployeeID";
$tdataschedtab[".advSearchFields"][] = "UserID";
$tdataschedtab[".advSearchFields"][] = "ScRID";

$tdataschedtab[".tableType"] = "list";

$tdataschedtab[".printerPageOrientation"] = 0;
$tdataschedtab[".nPrinterPageScale"] = 100;

$tdataschedtab[".nPrinterSplitRecords"] = 40;

$tdataschedtab[".nPrinterPDFSplitRecords"] = 40;



$tdataschedtab[".geocodingEnabled"] = false;





$tdataschedtab[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataschedtab[".pageSize"] = 20;

$tdataschedtab[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataschedtab[".strOrderBy"] = $tstrOrderBy;

$tdataschedtab[".orderindexes"] = array();

$tdataschedtab[".sqlHead"] = "SELECT ScRtabID,  	UserID,  	UserName,  	ScRID,  	EmployeeID";
$tdataschedtab[".sqlFrom"] = "FROM schedtab";
$tdataschedtab[".sqlWhereExpr"] = "";
$tdataschedtab[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataschedtab[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataschedtab[".arrGroupsPerPage"] = $arrGPP;

$tdataschedtab[".highlightSearchResults"] = true;

$tableKeysschedtab = array();
$tableKeysschedtab[] = "ScRtabID";
$tdataschedtab[".Keys"] = $tableKeysschedtab;

$tdataschedtab[".listFields"] = array();
$tdataschedtab[".listFields"][] = "ScRtabID";
$tdataschedtab[".listFields"][] = "UserName";
$tdataschedtab[".listFields"][] = "EmployeeID";
$tdataschedtab[".listFields"][] = "UserID";
$tdataschedtab[".listFields"][] = "ScRID";

$tdataschedtab[".hideMobileList"] = array();


$tdataschedtab[".viewFields"] = array();
$tdataschedtab[".viewFields"][] = "ScRtabID";
$tdataschedtab[".viewFields"][] = "UserName";
$tdataschedtab[".viewFields"][] = "EmployeeID";
$tdataschedtab[".viewFields"][] = "UserID";
$tdataschedtab[".viewFields"][] = "ScRID";

$tdataschedtab[".addFields"] = array();
$tdataschedtab[".addFields"][] = "UserName";
$tdataschedtab[".addFields"][] = "EmployeeID";
$tdataschedtab[".addFields"][] = "UserID";
$tdataschedtab[".addFields"][] = "ScRID";

$tdataschedtab[".masterListFields"] = array();
$tdataschedtab[".masterListFields"][] = "ScRtabID";
$tdataschedtab[".masterListFields"][] = "UserName";
$tdataschedtab[".masterListFields"][] = "EmployeeID";
$tdataschedtab[".masterListFields"][] = "UserID";
$tdataschedtab[".masterListFields"][] = "ScRID";

$tdataschedtab[".inlineAddFields"] = array();
$tdataschedtab[".inlineAddFields"][] = "UserName";
$tdataschedtab[".inlineAddFields"][] = "EmployeeID";
$tdataschedtab[".inlineAddFields"][] = "UserID";
$tdataschedtab[".inlineAddFields"][] = "ScRID";

$tdataschedtab[".editFields"] = array();
$tdataschedtab[".editFields"][] = "UserName";
$tdataschedtab[".editFields"][] = "EmployeeID";
$tdataschedtab[".editFields"][] = "UserID";
$tdataschedtab[".editFields"][] = "ScRID";

$tdataschedtab[".inlineEditFields"] = array();
$tdataschedtab[".inlineEditFields"][] = "UserName";
$tdataschedtab[".inlineEditFields"][] = "EmployeeID";
$tdataschedtab[".inlineEditFields"][] = "UserID";
$tdataschedtab[".inlineEditFields"][] = "ScRID";

$tdataschedtab[".updateSelectedFields"] = array();
$tdataschedtab[".updateSelectedFields"][] = "UserName";
$tdataschedtab[".updateSelectedFields"][] = "EmployeeID";
$tdataschedtab[".updateSelectedFields"][] = "UserID";
$tdataschedtab[".updateSelectedFields"][] = "ScRID";


$tdataschedtab[".exportFields"] = array();
$tdataschedtab[".exportFields"][] = "ScRtabID";
$tdataschedtab[".exportFields"][] = "UserName";
$tdataschedtab[".exportFields"][] = "EmployeeID";
$tdataschedtab[".exportFields"][] = "UserID";
$tdataschedtab[".exportFields"][] = "ScRID";

$tdataschedtab[".importFields"] = array();
$tdataschedtab[".importFields"][] = "ScRtabID";
$tdataschedtab[".importFields"][] = "UserID";
$tdataschedtab[".importFields"][] = "UserName";
$tdataschedtab[".importFields"][] = "ScRID";
$tdataschedtab[".importFields"][] = "EmployeeID";

$tdataschedtab[".printFields"] = array();
$tdataschedtab[".printFields"][] = "ScRtabID";
$tdataschedtab[".printFields"][] = "UserName";
$tdataschedtab[".printFields"][] = "EmployeeID";
$tdataschedtab[".printFields"][] = "UserID";
$tdataschedtab[".printFields"][] = "ScRID";


//	ScRtabID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ScRtabID";
	$fdata["GoodName"] = "ScRtabID";
	$fdata["ownerTable"] = "schedtab";
	$fdata["Label"] = GetFieldLabel("schedtab","ScRtabID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ScRtabID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ScRtabID";

	
	
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




	$tdataschedtab["ScRtabID"] = $fdata;
//	UserID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "UserID";
	$fdata["GoodName"] = "UserID";
	$fdata["ownerTable"] = "schedtab";
	$fdata["Label"] = GetFieldLabel("schedtab","UserID");
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

		$fdata["strField"] = "UserID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserID";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataschedtab["UserID"] = $fdata;
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "schedtab";
	$fdata["Label"] = GetFieldLabel("schedtab","UserName");
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

		$fdata["strField"] = "UserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserName";

	
	
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
	$edata["LookupTable"] = "demo_user";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"UserID", 'lookupF'=>"user_id");
	$edata["autoCompleteFields"][] = array('masterF'=>"EmployeeID", 'lookupF'=>"EmployeeID");
	$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "user_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "user_name";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataschedtab["UserName"] = $fdata;
//	ScRID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ScRID";
	$fdata["GoodName"] = "ScRID";
	$fdata["ownerTable"] = "schedtab";
	$fdata["Label"] = GetFieldLabel("schedtab","ScRID");
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

		$fdata["strField"] = "ScRID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ScRID";

	
	
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




	$tdataschedtab["ScRID"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "schedtab";
	$fdata["Label"] = GetFieldLabel("schedtab","EmployeeID");
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataschedtab["EmployeeID"] = $fdata;


$tables_data["schedtab"]=&$tdataschedtab;
$field_labels["schedtab"] = &$fieldLabelsschedtab;
$fieldToolTips["schedtab"] = &$fieldToolTipsschedtab;
$placeHolders["schedtab"] = &$placeHoldersschedtab;
$page_titles["schedtab"] = &$pageTitlesschedtab;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["schedtab"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["schedtab"] = array();


	
				$strOriginalDetailsTable="schedrange";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="schedrange";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "schedrange";
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
					$masterTablesData["schedtab"][0] = $masterParams;
				$masterTablesData["schedtab"][0]["masterKeys"] = array();
	$masterTablesData["schedtab"][0]["masterKeys"][]="ScRID";
				$masterTablesData["schedtab"][0]["detailKeys"] = array();
	$masterTablesData["schedtab"][0]["detailKeys"][]="ScRID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_schedtab()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ScRtabID,  	UserID,  	UserName,  	ScRID,  	EmployeeID";
$proto0["m_strFrom"] = "FROM schedtab";
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
	"m_strName" => "ScRtabID",
	"m_strTable" => "schedtab",
	"m_srcTableName" => "schedtab"
));

$proto6["m_sql"] = "ScRtabID";
$proto6["m_srcTableName"] = "schedtab";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "UserID",
	"m_strTable" => "schedtab",
	"m_srcTableName" => "schedtab"
));

$proto8["m_sql"] = "UserID";
$proto8["m_srcTableName"] = "schedtab";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "schedtab",
	"m_srcTableName" => "schedtab"
));

$proto10["m_sql"] = "UserName";
$proto10["m_srcTableName"] = "schedtab";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ScRID",
	"m_strTable" => "schedtab",
	"m_srcTableName" => "schedtab"
));

$proto12["m_sql"] = "ScRID";
$proto12["m_srcTableName"] = "schedtab";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "schedtab",
	"m_srcTableName" => "schedtab"
));

$proto14["m_sql"] = "EmployeeID";
$proto14["m_srcTableName"] = "schedtab";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "schedtab";
$proto17["m_srcTableName"] = "schedtab";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "ScRtabID";
$proto17["m_columns"][] = "UserID";
$proto17["m_columns"][] = "UserName";
$proto17["m_columns"][] = "ScRID";
$proto17["m_columns"][] = "EmployeeID";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "schedtab";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "schedtab";
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
$proto0["m_srcTableName"]="schedtab";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_schedtab = createSqlQuery_schedtab();


	
		;

					

$tdataschedtab[".sqlquery"] = $queryData_schedtab;

$tableEvents["schedtab"] = new eventsBase;
$tdataschedtab[".hasEvents"] = false;

?>