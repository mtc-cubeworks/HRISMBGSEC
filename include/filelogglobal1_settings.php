<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafilelogglobal1 = array();
	$tdatafilelogglobal1[".truncateText"] = true;
	$tdatafilelogglobal1[".NumberOfChars"] = 80;
	$tdatafilelogglobal1[".ShortName"] = "filelogglobal1";
	$tdatafilelogglobal1[".OwnerID"] = "";
	$tdatafilelogglobal1[".OriginalTable"] = "filelogglobal";

//	field labels
$fieldLabelsfilelogglobal1 = array();
$fieldToolTipsfilelogglobal1 = array();
$pageTitlesfilelogglobal1 = array();
$placeHoldersfilelogglobal1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfilelogglobal1["English"] = array();
	$fieldToolTipsfilelogglobal1["English"] = array();
	$placeHoldersfilelogglobal1["English"] = array();
	$pageTitlesfilelogglobal1["English"] = array();
	$fieldLabelsfilelogglobal1["English"]["LaID"] = "La ID";
	$fieldToolTipsfilelogglobal1["English"]["LaID"] = "";
	$placeHoldersfilelogglobal1["English"]["LaID"] = "";
	$fieldLabelsfilelogglobal1["English"]["HRApproval"] = "HR Approval";
	$fieldToolTipsfilelogglobal1["English"]["HRApproval"] = "";
	$placeHoldersfilelogglobal1["English"]["HRApproval"] = "";
	$fieldLabelsfilelogglobal1["English"]["MLogDate"] = "Filed As-Of-Date";
	$fieldToolTipsfilelogglobal1["English"]["MLogDate"] = "";
	$placeHoldersfilelogglobal1["English"]["MLogDate"] = "";
	$fieldLabelsfilelogglobal1["English"]["SuperiorsApproved"] = "Superior(s) Approved";
	$fieldToolTipsfilelogglobal1["English"]["SuperiorsApproved"] = "";
	$placeHoldersfilelogglobal1["English"]["SuperiorsApproved"] = "";
	$fieldLabelsfilelogglobal1["English"]["Employee"] = "Employee";
	$fieldToolTipsfilelogglobal1["English"]["Employee"] = "";
	$placeHoldersfilelogglobal1["English"]["Employee"] = "";
	if (count($fieldToolTipsfilelogglobal1["English"]))
		$tdatafilelogglobal1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfilelogglobal1[""] = array();
	$fieldToolTipsfilelogglobal1[""] = array();
	$placeHoldersfilelogglobal1[""] = array();
	$pageTitlesfilelogglobal1[""] = array();
	$fieldLabelsfilelogglobal1[""]["LaID"] = "La ID";
	$fieldToolTipsfilelogglobal1[""]["LaID"] = "";
	$placeHoldersfilelogglobal1[""]["LaID"] = "";
	$fieldLabelsfilelogglobal1[""]["HRApproval"] = "HRApproval";
	$fieldToolTipsfilelogglobal1[""]["HRApproval"] = "";
	$placeHoldersfilelogglobal1[""]["HRApproval"] = "";
	$fieldLabelsfilelogglobal1[""]["MLogDate"] = "MLog Date";
	$fieldToolTipsfilelogglobal1[""]["MLogDate"] = "";
	$placeHoldersfilelogglobal1[""]["MLogDate"] = "";
	$fieldLabelsfilelogglobal1[""]["SuperiorsApproved"] = "Superiors Approved";
	$fieldToolTipsfilelogglobal1[""]["SuperiorsApproved"] = "";
	$placeHoldersfilelogglobal1[""]["SuperiorsApproved"] = "";
	$fieldLabelsfilelogglobal1[""]["Employee"] = "Employee";
	$fieldToolTipsfilelogglobal1[""]["Employee"] = "";
	$placeHoldersfilelogglobal1[""]["Employee"] = "";
	if (count($fieldToolTipsfilelogglobal1[""]))
		$tdatafilelogglobal1[".isUseToolTips"] = true;
}


	$tdatafilelogglobal1[".NCSearch"] = true;



$tdatafilelogglobal1[".shortTableName"] = "filelogglobal1";
$tdatafilelogglobal1[".nSecOptions"] = 0;
$tdatafilelogglobal1[".recsPerRowPrint"] = 1;
$tdatafilelogglobal1[".mainTableOwnerID"] = "";
$tdatafilelogglobal1[".moveNext"] = 1;
$tdatafilelogglobal1[".entityType"] = 1;

$tdatafilelogglobal1[".strOriginalTableName"] = "filelogglobal";

	



$tdatafilelogglobal1[".showAddInPopup"] = false;

$tdatafilelogglobal1[".showEditInPopup"] = false;

$tdatafilelogglobal1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafilelogglobal1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafilelogglobal1[".fieldsForRegister"] = array();

$tdatafilelogglobal1[".listAjax"] = false;

	$tdatafilelogglobal1[".audit"] = false;

	$tdatafilelogglobal1[".locking"] = false;

$tdatafilelogglobal1[".edit"] = true;
$tdatafilelogglobal1[".afterEditAction"] = 0;
$tdatafilelogglobal1[".closePopupAfterEdit"] = 1;
$tdatafilelogglobal1[".afterEditActionDetTable"] = "Detail tables not found!";

$tdatafilelogglobal1[".add"] = true;
$tdatafilelogglobal1[".afterAddAction"] = 0;
$tdatafilelogglobal1[".closePopupAfterAdd"] = 1;
$tdatafilelogglobal1[".afterAddActionDetTable"] = "Detail tables not found!";

$tdatafilelogglobal1[".list"] = true;



$tdatafilelogglobal1[".reorderRecordsByHeader"] = true;


$tdatafilelogglobal1[".exportFormatting"] = 2;
$tdatafilelogglobal1[".exportDelimiter"] = ",";
		
$tdatafilelogglobal1[".view"] = true;

$tdatafilelogglobal1[".import"] = true;

$tdatafilelogglobal1[".exportTo"] = true;

$tdatafilelogglobal1[".printFriendly"] = true;

$tdatafilelogglobal1[".delete"] = true;

$tdatafilelogglobal1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafilelogglobal1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafilelogglobal1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafilelogglobal1[".searchSaving"] = false;
//

$tdatafilelogglobal1[".showSearchPanel"] = true;
		$tdatafilelogglobal1[".flexibleSearch"] = true;

$tdatafilelogglobal1[".isUseAjaxSuggest"] = true;

$tdatafilelogglobal1[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																											
																							

$tdatafilelogglobal1[".ajaxCodeSnippetAdded"] = false;

$tdatafilelogglobal1[".buttonsAdded"] = true;

$tdatafilelogglobal1[".addPageEvents"] = true;

// use timepicker for search panel
$tdatafilelogglobal1[".isUseTimeForSearch"] = false;



$tdatafilelogglobal1[".badgeColor"] = "4169E1";


$tdatafilelogglobal1[".allSearchFields"] = array();
$tdatafilelogglobal1[".filterFields"] = array();
$tdatafilelogglobal1[".requiredSearchFields"] = array();

$tdatafilelogglobal1[".allSearchFields"][] = "LaID";
	$tdatafilelogglobal1[".allSearchFields"][] = "MLogDate";
	$tdatafilelogglobal1[".allSearchFields"][] = "Employee";
	$tdatafilelogglobal1[".allSearchFields"][] = "HRApproval";
	$tdatafilelogglobal1[".allSearchFields"][] = "SuperiorsApproved";
	

$tdatafilelogglobal1[".googleLikeFields"] = array();
$tdatafilelogglobal1[".googleLikeFields"][] = "LaID";
$tdatafilelogglobal1[".googleLikeFields"][] = "HRApproval";
$tdatafilelogglobal1[".googleLikeFields"][] = "SuperiorsApproved";
$tdatafilelogglobal1[".googleLikeFields"][] = "MLogDate";
$tdatafilelogglobal1[".googleLikeFields"][] = "Employee";


$tdatafilelogglobal1[".advSearchFields"] = array();
$tdatafilelogglobal1[".advSearchFields"][] = "LaID";
$tdatafilelogglobal1[".advSearchFields"][] = "MLogDate";
$tdatafilelogglobal1[".advSearchFields"][] = "Employee";
$tdatafilelogglobal1[".advSearchFields"][] = "HRApproval";
$tdatafilelogglobal1[".advSearchFields"][] = "SuperiorsApproved";

$tdatafilelogglobal1[".tableType"] = "list";

$tdatafilelogglobal1[".printerPageOrientation"] = 0;
$tdatafilelogglobal1[".nPrinterPageScale"] = 100;

$tdatafilelogglobal1[".nPrinterSplitRecords"] = 40;

$tdatafilelogglobal1[".nPrinterPDFSplitRecords"] = 40;



$tdatafilelogglobal1[".geocodingEnabled"] = false;





$tdatafilelogglobal1[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafilelogglobal1[".pageSize"] = 20;

$tdatafilelogglobal1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafilelogglobal1[".strOrderBy"] = $tstrOrderBy;

$tdatafilelogglobal1[".orderindexes"] = array();

$tdatafilelogglobal1[".sqlHead"] = "SELECT LaID,  	HRApproval,  	SuperiorsApproved,  	MLogDate,  	Employee";
$tdatafilelogglobal1[".sqlFrom"] = "FROM filelogglobal";
$tdatafilelogglobal1[".sqlWhereExpr"] = "";
$tdatafilelogglobal1[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafilelogglobal1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafilelogglobal1[".arrGroupsPerPage"] = $arrGPP;

$tdatafilelogglobal1[".highlightSearchResults"] = true;

$tableKeysfilelogglobal1 = array();
$tableKeysfilelogglobal1[] = "LaID";
$tdatafilelogglobal1[".Keys"] = $tableKeysfilelogglobal1;

$tdatafilelogglobal1[".listFields"] = array();
$tdatafilelogglobal1[".listFields"][] = "LaID";
$tdatafilelogglobal1[".listFields"][] = "MLogDate";
$tdatafilelogglobal1[".listFields"][] = "Employee";
$tdatafilelogglobal1[".listFields"][] = "HRApproval";
$tdatafilelogglobal1[".listFields"][] = "SuperiorsApproved";

$tdatafilelogglobal1[".hideMobileList"] = array();


$tdatafilelogglobal1[".viewFields"] = array();
$tdatafilelogglobal1[".viewFields"][] = "LaID";
$tdatafilelogglobal1[".viewFields"][] = "MLogDate";
$tdatafilelogglobal1[".viewFields"][] = "Employee";
$tdatafilelogglobal1[".viewFields"][] = "HRApproval";
$tdatafilelogglobal1[".viewFields"][] = "SuperiorsApproved";

$tdatafilelogglobal1[".addFields"] = array();
$tdatafilelogglobal1[".addFields"][] = "MLogDate";
$tdatafilelogglobal1[".addFields"][] = "Employee";
$tdatafilelogglobal1[".addFields"][] = "HRApproval";
$tdatafilelogglobal1[".addFields"][] = "SuperiorsApproved";

$tdatafilelogglobal1[".masterListFields"] = array();
$tdatafilelogglobal1[".masterListFields"][] = "LaID";
$tdatafilelogglobal1[".masterListFields"][] = "MLogDate";
$tdatafilelogglobal1[".masterListFields"][] = "Employee";
$tdatafilelogglobal1[".masterListFields"][] = "HRApproval";
$tdatafilelogglobal1[".masterListFields"][] = "SuperiorsApproved";

$tdatafilelogglobal1[".inlineAddFields"] = array();

$tdatafilelogglobal1[".editFields"] = array();
$tdatafilelogglobal1[".editFields"][] = "MLogDate";
$tdatafilelogglobal1[".editFields"][] = "Employee";
$tdatafilelogglobal1[".editFields"][] = "HRApproval";
$tdatafilelogglobal1[".editFields"][] = "SuperiorsApproved";

$tdatafilelogglobal1[".inlineEditFields"] = array();

$tdatafilelogglobal1[".updateSelectedFields"] = array();
$tdatafilelogglobal1[".updateSelectedFields"][] = "MLogDate";
$tdatafilelogglobal1[".updateSelectedFields"][] = "Employee";
$tdatafilelogglobal1[".updateSelectedFields"][] = "HRApproval";
$tdatafilelogglobal1[".updateSelectedFields"][] = "SuperiorsApproved";


$tdatafilelogglobal1[".exportFields"] = array();
$tdatafilelogglobal1[".exportFields"][] = "LaID";
$tdatafilelogglobal1[".exportFields"][] = "MLogDate";
$tdatafilelogglobal1[".exportFields"][] = "Employee";
$tdatafilelogglobal1[".exportFields"][] = "HRApproval";
$tdatafilelogglobal1[".exportFields"][] = "SuperiorsApproved";

$tdatafilelogglobal1[".importFields"] = array();
$tdatafilelogglobal1[".importFields"][] = "LaID";
$tdatafilelogglobal1[".importFields"][] = "HRApproval";
$tdatafilelogglobal1[".importFields"][] = "SuperiorsApproved";
$tdatafilelogglobal1[".importFields"][] = "MLogDate";
$tdatafilelogglobal1[".importFields"][] = "Employee";

$tdatafilelogglobal1[".printFields"] = array();
$tdatafilelogglobal1[".printFields"][] = "LaID";
$tdatafilelogglobal1[".printFields"][] = "MLogDate";
$tdatafilelogglobal1[".printFields"][] = "Employee";
$tdatafilelogglobal1[".printFields"][] = "HRApproval";
$tdatafilelogglobal1[".printFields"][] = "SuperiorsApproved";


//	LaID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LaID";
	$fdata["GoodName"] = "LaID";
	$fdata["ownerTable"] = "filelogglobal";
	$fdata["Label"] = GetFieldLabel("filelogglobal1","LaID");
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




	$tdatafilelogglobal1["LaID"] = $fdata;
//	HRApproval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "HRApproval";
	$fdata["GoodName"] = "HRApproval";
	$fdata["ownerTable"] = "filelogglobal";
	$fdata["Label"] = GetFieldLabel("filelogglobal1","HRApproval");
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




	$tdatafilelogglobal1["HRApproval"] = $fdata;
//	SuperiorsApproved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SuperiorsApproved";
	$fdata["GoodName"] = "SuperiorsApproved";
	$fdata["ownerTable"] = "filelogglobal";
	$fdata["Label"] = GetFieldLabel("filelogglobal1","SuperiorsApproved");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdatafilelogglobal1["SuperiorsApproved"] = $fdata;
//	MLogDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "MLogDate";
	$fdata["GoodName"] = "MLogDate";
	$fdata["ownerTable"] = "filelogglobal";
	$fdata["Label"] = GetFieldLabel("filelogglobal1","MLogDate");
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




	$tdatafilelogglobal1["MLogDate"] = $fdata;
//	Employee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Employee";
	$fdata["GoodName"] = "Employee";
	$fdata["ownerTable"] = "filelogglobal";
	$fdata["Label"] = GetFieldLabel("filelogglobal1","Employee");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Employee";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Employee";

	
	
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
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EmployeeID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "user_name";
	
	

	
	$edata["LookupOrderBy"] = "user_name";

	
	
	
	

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafilelogglobal1["Employee"] = $fdata;


$tables_data["filelogglobal1"]=&$tdatafilelogglobal1;
$field_labels["filelogglobal1"] = &$fieldLabelsfilelogglobal1;
$fieldToolTips["filelogglobal1"] = &$fieldToolTipsfilelogglobal1;
$placeHolders["filelogglobal1"] = &$placeHoldersfilelogglobal1;
$page_titles["filelogglobal1"] = &$pageTitlesfilelogglobal1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["filelogglobal1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["filelogglobal1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_filelogglobal1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LaID,  	HRApproval,  	SuperiorsApproved,  	MLogDate,  	Employee";
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
	"m_srcTableName" => "filelogglobal1"
));

$proto6["m_sql"] = "LaID";
$proto6["m_srcTableName"] = "filelogglobal1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "HRApproval",
	"m_strTable" => "filelogglobal",
	"m_srcTableName" => "filelogglobal1"
));

$proto8["m_sql"] = "HRApproval";
$proto8["m_srcTableName"] = "filelogglobal1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SuperiorsApproved",
	"m_strTable" => "filelogglobal",
	"m_srcTableName" => "filelogglobal1"
));

$proto10["m_sql"] = "SuperiorsApproved";
$proto10["m_srcTableName"] = "filelogglobal1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "MLogDate",
	"m_strTable" => "filelogglobal",
	"m_srcTableName" => "filelogglobal1"
));

$proto12["m_sql"] = "MLogDate";
$proto12["m_srcTableName"] = "filelogglobal1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Employee",
	"m_strTable" => "filelogglobal",
	"m_srcTableName" => "filelogglobal1"
));

$proto14["m_sql"] = "Employee";
$proto14["m_srcTableName"] = "filelogglobal1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "filelogglobal";
$proto17["m_srcTableName"] = "filelogglobal1";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "LaID";
$proto17["m_columns"][] = "HRApproval";
$proto17["m_columns"][] = "SuperiorsApproved";
$proto17["m_columns"][] = "MLogDate";
$proto17["m_columns"][] = "Employee";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "filelogglobal";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "filelogglobal1";
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
$proto0["m_srcTableName"]="filelogglobal1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_filelogglobal1 = createSqlQuery_filelogglobal1();


	
		;

					

$tdatafilelogglobal1[".sqlquery"] = $queryData_filelogglobal1;

include_once(getabspath("include/filelogglobal1_events.php"));
$tableEvents["filelogglobal1"] = new eventclass_filelogglobal1;
$tdatafilelogglobal1[".hasEvents"] = true;

?>