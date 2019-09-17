<?php
require_once(getabspath("classes/cipherer.php"));




$tdataovertimes = array();
	$tdataovertimes[".truncateText"] = true;
	$tdataovertimes[".NumberOfChars"] = 80;
	$tdataovertimes[".ShortName"] = "overtimes";
	$tdataovertimes[".OwnerID"] = "";
	$tdataovertimes[".OriginalTable"] = "overtimes";

//	field labels
$fieldLabelsovertimes = array();
$fieldToolTipsovertimes = array();
$pageTitlesovertimes = array();
$placeHoldersovertimes = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsovertimes["English"] = array();
	$fieldToolTipsovertimes["English"] = array();
	$placeHoldersovertimes["English"] = array();
	$pageTitlesovertimes["English"] = array();
	$fieldLabelsovertimes["English"]["OtiD"] = "Oti D";
	$fieldToolTipsovertimes["English"]["OtiD"] = "";
	$placeHoldersovertimes["English"]["OtiD"] = "";
	$fieldLabelsovertimes["English"]["DateCreated"] = "Date Created";
	$fieldToolTipsovertimes["English"]["DateCreated"] = "";
	$placeHoldersovertimes["English"]["DateCreated"] = "";
	$fieldLabelsovertimes["English"]["FromDateTime"] = "From Date Time";
	$fieldToolTipsovertimes["English"]["FromDateTime"] = "";
	$placeHoldersovertimes["English"]["FromDateTime"] = "";
	$fieldLabelsovertimes["English"]["ToDateTime"] = "To Date Time";
	$fieldToolTipsovertimes["English"]["ToDateTime"] = "";
	$placeHoldersovertimes["English"]["ToDateTime"] = "";
	$fieldLabelsovertimes["English"]["Approved"] = "Approved";
	$fieldToolTipsovertimes["English"]["Approved"] = "";
	$placeHoldersovertimes["English"]["Approved"] = "";
	$fieldLabelsovertimes["English"]["Approvedby"] = "Approvedby";
	$fieldToolTipsovertimes["English"]["Approvedby"] = "";
	$placeHoldersovertimes["English"]["Approvedby"] = "";
	$fieldLabelsovertimes["English"]["ApprovedTime"] = "Approved Time";
	$fieldToolTipsovertimes["English"]["ApprovedTime"] = "";
	$placeHoldersovertimes["English"]["ApprovedTime"] = "";
	$fieldLabelsovertimes["English"]["Posted"] = "Posted";
	$fieldToolTipsovertimes["English"]["Posted"] = "";
	$placeHoldersovertimes["English"]["Posted"] = "";
	$fieldLabelsovertimes["English"]["NoMins"] = "No Mins";
	$fieldToolTipsovertimes["English"]["NoMins"] = "";
	$placeHoldersovertimes["English"]["NoMins"] = "";
	$fieldLabelsovertimes["English"]["ApprovedDate"] = "Approved Date";
	$fieldToolTipsovertimes["English"]["ApprovedDate"] = "";
	$placeHoldersovertimes["English"]["ApprovedDate"] = "";
	$fieldLabelsovertimes["English"]["Reason"] = "Reason";
	$fieldToolTipsovertimes["English"]["Reason"] = "";
	$placeHoldersovertimes["English"]["Reason"] = "";
	$fieldLabelsovertimes["English"]["Employer"] = "Employer";
	$fieldToolTipsovertimes["English"]["Employer"] = "";
	$placeHoldersovertimes["English"]["Employer"] = "";
	$fieldLabelsovertimes["English"]["Division"] = "Division";
	$fieldToolTipsovertimes["English"]["Division"] = "";
	$placeHoldersovertimes["English"]["Division"] = "";
	if (count($fieldToolTipsovertimes["English"]))
		$tdataovertimes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsovertimes[""] = array();
	$fieldToolTipsovertimes[""] = array();
	$placeHoldersovertimes[""] = array();
	$pageTitlesovertimes[""] = array();
	if (count($fieldToolTipsovertimes[""]))
		$tdataovertimes[".isUseToolTips"] = true;
}


	$tdataovertimes[".NCSearch"] = true;



$tdataovertimes[".shortTableName"] = "overtimes";
$tdataovertimes[".nSecOptions"] = 0;
$tdataovertimes[".recsPerRowPrint"] = 1;
$tdataovertimes[".mainTableOwnerID"] = "";
$tdataovertimes[".moveNext"] = 1;
$tdataovertimes[".entityType"] = 0;

$tdataovertimes[".strOriginalTableName"] = "overtimes";

	



$tdataovertimes[".showAddInPopup"] = false;

$tdataovertimes[".showEditInPopup"] = false;

$tdataovertimes[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataovertimes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataovertimes[".fieldsForRegister"] = array();

$tdataovertimes[".listAjax"] = false;

	$tdataovertimes[".audit"] = false;

	$tdataovertimes[".locking"] = false;

$tdataovertimes[".edit"] = true;
$tdataovertimes[".afterEditAction"] = 0;
$tdataovertimes[".closePopupAfterEdit"] = 1;
$tdataovertimes[".afterEditActionDetTable"] = "overtimetab";

$tdataovertimes[".add"] = true;
$tdataovertimes[".afterAddAction"] = 1;
$tdataovertimes[".closePopupAfterAdd"] = 1;
$tdataovertimes[".afterAddActionDetTable"] = "";

$tdataovertimes[".list"] = true;

$tdataovertimes[".inlineEdit"] = true;

$tdataovertimes[".updateSelected"] = true;

$tdataovertimes[".reorderRecordsByHeader"] = true;


$tdataovertimes[".exportFormatting"] = 2;
$tdataovertimes[".exportDelimiter"] = ",";
		
$tdataovertimes[".inlineAdd"] = true;
$tdataovertimes[".copy"] = true;
$tdataovertimes[".view"] = true;

$tdataovertimes[".import"] = true;

$tdataovertimes[".exportTo"] = true;

$tdataovertimes[".printFriendly"] = true;

$tdataovertimes[".delete"] = true;

$tdataovertimes[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataovertimes[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataovertimes[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataovertimes[".searchSaving"] = false;
//

$tdataovertimes[".showSearchPanel"] = true;
		$tdataovertimes[".flexibleSearch"] = true;

$tdataovertimes[".isUseAjaxSuggest"] = true;

$tdataovertimes[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																		

$tdataovertimes[".ajaxCodeSnippetAdded"] = false;

$tdataovertimes[".buttonsAdded"] = false;

$tdataovertimes[".addPageEvents"] = true;

// use timepicker for search panel
$tdataovertimes[".isUseTimeForSearch"] = false;





$tdataovertimes[".allSearchFields"] = array();
$tdataovertimes[".filterFields"] = array();
$tdataovertimes[".requiredSearchFields"] = array();

$tdataovertimes[".allSearchFields"][] = "OtiD";
	$tdataovertimes[".allSearchFields"][] = "Employer";
	$tdataovertimes[".allSearchFields"][] = "Division";
	$tdataovertimes[".allSearchFields"][] = "DateCreated";
	$tdataovertimes[".allSearchFields"][] = "Reason";
	$tdataovertimes[".allSearchFields"][] = "FromDateTime";
	$tdataovertimes[".allSearchFields"][] = "ToDateTime";
	$tdataovertimes[".allSearchFields"][] = "NoMins";
	$tdataovertimes[".allSearchFields"][] = "Approved";
	$tdataovertimes[".allSearchFields"][] = "Approvedby";
	$tdataovertimes[".allSearchFields"][] = "ApprovedDate";
	$tdataovertimes[".allSearchFields"][] = "ApprovedTime";
	$tdataovertimes[".allSearchFields"][] = "Posted";
	

$tdataovertimes[".googleLikeFields"] = array();
$tdataovertimes[".googleLikeFields"][] = "OtiD";
$tdataovertimes[".googleLikeFields"][] = "DateCreated";
$tdataovertimes[".googleLikeFields"][] = "FromDateTime";
$tdataovertimes[".googleLikeFields"][] = "ToDateTime";
$tdataovertimes[".googleLikeFields"][] = "Approved";
$tdataovertimes[".googleLikeFields"][] = "Approvedby";
$tdataovertimes[".googleLikeFields"][] = "ApprovedTime";
$tdataovertimes[".googleLikeFields"][] = "Posted";
$tdataovertimes[".googleLikeFields"][] = "NoMins";
$tdataovertimes[".googleLikeFields"][] = "ApprovedDate";
$tdataovertimes[".googleLikeFields"][] = "Reason";
$tdataovertimes[".googleLikeFields"][] = "Employer";
$tdataovertimes[".googleLikeFields"][] = "Division";


$tdataovertimes[".advSearchFields"] = array();
$tdataovertimes[".advSearchFields"][] = "OtiD";
$tdataovertimes[".advSearchFields"][] = "Employer";
$tdataovertimes[".advSearchFields"][] = "Division";
$tdataovertimes[".advSearchFields"][] = "DateCreated";
$tdataovertimes[".advSearchFields"][] = "Reason";
$tdataovertimes[".advSearchFields"][] = "FromDateTime";
$tdataovertimes[".advSearchFields"][] = "ToDateTime";
$tdataovertimes[".advSearchFields"][] = "NoMins";
$tdataovertimes[".advSearchFields"][] = "Approved";
$tdataovertimes[".advSearchFields"][] = "Approvedby";
$tdataovertimes[".advSearchFields"][] = "ApprovedDate";
$tdataovertimes[".advSearchFields"][] = "ApprovedTime";
$tdataovertimes[".advSearchFields"][] = "Posted";

$tdataovertimes[".tableType"] = "list";

$tdataovertimes[".printerPageOrientation"] = 0;
$tdataovertimes[".nPrinterPageScale"] = 100;

$tdataovertimes[".nPrinterSplitRecords"] = 40;

$tdataovertimes[".nPrinterPDFSplitRecords"] = 40;



$tdataovertimes[".geocodingEnabled"] = false;





$tdataovertimes[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataovertimes[".pageSize"] = 20;

$tdataovertimes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataovertimes[".strOrderBy"] = $tstrOrderBy;

$tdataovertimes[".orderindexes"] = array();

$tdataovertimes[".sqlHead"] = "SELECT OtiD,  	DateCreated,  	FromDateTime,  	ToDateTime,  	Approved,  	Approvedby,  	ApprovedTime,  	Posted,  	NoMins,  	ApprovedDate,  	Reason,  	Employer,  	Division";
$tdataovertimes[".sqlFrom"] = "FROM overtimes";
$tdataovertimes[".sqlWhereExpr"] = "";
$tdataovertimes[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataovertimes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataovertimes[".arrGroupsPerPage"] = $arrGPP;

$tdataovertimes[".highlightSearchResults"] = true;

$tableKeysovertimes = array();
$tableKeysovertimes[] = "OtiD";
$tdataovertimes[".Keys"] = $tableKeysovertimes;

$tdataovertimes[".listFields"] = array();
$tdataovertimes[".listFields"][] = "OtiD";
$tdataovertimes[".listFields"][] = "Employer";
$tdataovertimes[".listFields"][] = "Division";
$tdataovertimes[".listFields"][] = "DateCreated";
$tdataovertimes[".listFields"][] = "Reason";
$tdataovertimes[".listFields"][] = "FromDateTime";
$tdataovertimes[".listFields"][] = "ToDateTime";
$tdataovertimes[".listFields"][] = "NoMins";
$tdataovertimes[".listFields"][] = "Approved";
$tdataovertimes[".listFields"][] = "Approvedby";
$tdataovertimes[".listFields"][] = "ApprovedDate";
$tdataovertimes[".listFields"][] = "ApprovedTime";
$tdataovertimes[".listFields"][] = "Posted";

$tdataovertimes[".hideMobileList"] = array();


$tdataovertimes[".viewFields"] = array();
$tdataovertimes[".viewFields"][] = "OtiD";
$tdataovertimes[".viewFields"][] = "Employer";
$tdataovertimes[".viewFields"][] = "Division";
$tdataovertimes[".viewFields"][] = "DateCreated";
$tdataovertimes[".viewFields"][] = "Reason";
$tdataovertimes[".viewFields"][] = "FromDateTime";
$tdataovertimes[".viewFields"][] = "ToDateTime";
$tdataovertimes[".viewFields"][] = "NoMins";
$tdataovertimes[".viewFields"][] = "Approved";
$tdataovertimes[".viewFields"][] = "Approvedby";
$tdataovertimes[".viewFields"][] = "ApprovedDate";
$tdataovertimes[".viewFields"][] = "ApprovedTime";
$tdataovertimes[".viewFields"][] = "Posted";

$tdataovertimes[".addFields"] = array();
$tdataovertimes[".addFields"][] = "Employer";
$tdataovertimes[".addFields"][] = "Division";
$tdataovertimes[".addFields"][] = "DateCreated";
$tdataovertimes[".addFields"][] = "Reason";
$tdataovertimes[".addFields"][] = "FromDateTime";
$tdataovertimes[".addFields"][] = "ToDateTime";
$tdataovertimes[".addFields"][] = "NoMins";

$tdataovertimes[".masterListFields"] = array();
$tdataovertimes[".masterListFields"][] = "OtiD";
$tdataovertimes[".masterListFields"][] = "Employer";
$tdataovertimes[".masterListFields"][] = "Division";
$tdataovertimes[".masterListFields"][] = "DateCreated";
$tdataovertimes[".masterListFields"][] = "Reason";
$tdataovertimes[".masterListFields"][] = "FromDateTime";
$tdataovertimes[".masterListFields"][] = "ToDateTime";
$tdataovertimes[".masterListFields"][] = "NoMins";
$tdataovertimes[".masterListFields"][] = "Approved";
$tdataovertimes[".masterListFields"][] = "Approvedby";
$tdataovertimes[".masterListFields"][] = "ApprovedDate";
$tdataovertimes[".masterListFields"][] = "ApprovedTime";
$tdataovertimes[".masterListFields"][] = "Posted";

$tdataovertimes[".inlineAddFields"] = array();
$tdataovertimes[".inlineAddFields"][] = "Employer";
$tdataovertimes[".inlineAddFields"][] = "Division";
$tdataovertimes[".inlineAddFields"][] = "DateCreated";
$tdataovertimes[".inlineAddFields"][] = "Reason";
$tdataovertimes[".inlineAddFields"][] = "FromDateTime";
$tdataovertimes[".inlineAddFields"][] = "ToDateTime";
$tdataovertimes[".inlineAddFields"][] = "NoMins";

$tdataovertimes[".editFields"] = array();
$tdataovertimes[".editFields"][] = "Employer";
$tdataovertimes[".editFields"][] = "Division";
$tdataovertimes[".editFields"][] = "DateCreated";
$tdataovertimes[".editFields"][] = "Reason";
$tdataovertimes[".editFields"][] = "FromDateTime";
$tdataovertimes[".editFields"][] = "ToDateTime";
$tdataovertimes[".editFields"][] = "NoMins";
$tdataovertimes[".editFields"][] = "Approved";
$tdataovertimes[".editFields"][] = "Approvedby";
$tdataovertimes[".editFields"][] = "ApprovedDate";
$tdataovertimes[".editFields"][] = "ApprovedTime";
$tdataovertimes[".editFields"][] = "Posted";

$tdataovertimes[".inlineEditFields"] = array();
$tdataovertimes[".inlineEditFields"][] = "Employer";
$tdataovertimes[".inlineEditFields"][] = "Division";
$tdataovertimes[".inlineEditFields"][] = "DateCreated";
$tdataovertimes[".inlineEditFields"][] = "Reason";
$tdataovertimes[".inlineEditFields"][] = "FromDateTime";
$tdataovertimes[".inlineEditFields"][] = "ToDateTime";
$tdataovertimes[".inlineEditFields"][] = "NoMins";
$tdataovertimes[".inlineEditFields"][] = "Approved";
$tdataovertimes[".inlineEditFields"][] = "Approvedby";
$tdataovertimes[".inlineEditFields"][] = "ApprovedDate";
$tdataovertimes[".inlineEditFields"][] = "ApprovedTime";
$tdataovertimes[".inlineEditFields"][] = "Posted";

$tdataovertimes[".updateSelectedFields"] = array();
$tdataovertimes[".updateSelectedFields"][] = "DateCreated";
$tdataovertimes[".updateSelectedFields"][] = "FromDateTime";
$tdataovertimes[".updateSelectedFields"][] = "ToDateTime";
$tdataovertimes[".updateSelectedFields"][] = "NoMins";
$tdataovertimes[".updateSelectedFields"][] = "Approved";
$tdataovertimes[".updateSelectedFields"][] = "Approvedby";
$tdataovertimes[".updateSelectedFields"][] = "ApprovedDate";
$tdataovertimes[".updateSelectedFields"][] = "ApprovedTime";
$tdataovertimes[".updateSelectedFields"][] = "Posted";


$tdataovertimes[".exportFields"] = array();
$tdataovertimes[".exportFields"][] = "OtiD";
$tdataovertimes[".exportFields"][] = "Employer";
$tdataovertimes[".exportFields"][] = "Division";
$tdataovertimes[".exportFields"][] = "DateCreated";
$tdataovertimes[".exportFields"][] = "Reason";
$tdataovertimes[".exportFields"][] = "FromDateTime";
$tdataovertimes[".exportFields"][] = "ToDateTime";
$tdataovertimes[".exportFields"][] = "NoMins";
$tdataovertimes[".exportFields"][] = "Approved";
$tdataovertimes[".exportFields"][] = "Approvedby";
$tdataovertimes[".exportFields"][] = "ApprovedDate";
$tdataovertimes[".exportFields"][] = "ApprovedTime";
$tdataovertimes[".exportFields"][] = "Posted";

$tdataovertimes[".importFields"] = array();
$tdataovertimes[".importFields"][] = "OtiD";
$tdataovertimes[".importFields"][] = "DateCreated";
$tdataovertimes[".importFields"][] = "FromDateTime";
$tdataovertimes[".importFields"][] = "ToDateTime";
$tdataovertimes[".importFields"][] = "Approved";
$tdataovertimes[".importFields"][] = "Approvedby";
$tdataovertimes[".importFields"][] = "ApprovedTime";
$tdataovertimes[".importFields"][] = "Posted";
$tdataovertimes[".importFields"][] = "NoMins";
$tdataovertimes[".importFields"][] = "ApprovedDate";
$tdataovertimes[".importFields"][] = "Reason";
$tdataovertimes[".importFields"][] = "Employer";
$tdataovertimes[".importFields"][] = "Division";

$tdataovertimes[".printFields"] = array();
$tdataovertimes[".printFields"][] = "OtiD";
$tdataovertimes[".printFields"][] = "Employer";
$tdataovertimes[".printFields"][] = "Division";
$tdataovertimes[".printFields"][] = "DateCreated";
$tdataovertimes[".printFields"][] = "Reason";
$tdataovertimes[".printFields"][] = "FromDateTime";
$tdataovertimes[".printFields"][] = "ToDateTime";
$tdataovertimes[".printFields"][] = "NoMins";
$tdataovertimes[".printFields"][] = "Approved";
$tdataovertimes[".printFields"][] = "Approvedby";
$tdataovertimes[".printFields"][] = "ApprovedDate";
$tdataovertimes[".printFields"][] = "ApprovedTime";
$tdataovertimes[".printFields"][] = "Posted";


//	OtiD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "OtiD";
	$fdata["GoodName"] = "OtiD";
	$fdata["ownerTable"] = "overtimes";
	$fdata["Label"] = GetFieldLabel("overtimes","OtiD");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "OtiD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OtiD";

	
	
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




	$tdataovertimes["OtiD"] = $fdata;
//	DateCreated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DateCreated";
	$fdata["GoodName"] = "DateCreated";
	$fdata["ownerTable"] = "overtimes";
	$fdata["Label"] = GetFieldLabel("overtimes","DateCreated");
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

		$fdata["strField"] = "DateCreated";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DateCreated";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataovertimes["DateCreated"] = $fdata;
//	FromDateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FromDateTime";
	$fdata["GoodName"] = "FromDateTime";
	$fdata["ownerTable"] = "overtimes";
	$fdata["Label"] = GetFieldLabel("overtimes","FromDateTime");
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

		$fdata["strField"] = "FromDateTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FromDateTime";

	
	
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

	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 11;
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




	$tdataovertimes["FromDateTime"] = $fdata;
//	ToDateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ToDateTime";
	$fdata["GoodName"] = "ToDateTime";
	$fdata["ownerTable"] = "overtimes";
	$fdata["Label"] = GetFieldLabel("overtimes","ToDateTime");
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

		$fdata["strField"] = "ToDateTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ToDateTime";

	
	
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

	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 11;
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




	$tdataovertimes["ToDateTime"] = $fdata;
//	Approved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Approved";
	$fdata["GoodName"] = "Approved";
	$fdata["ownerTable"] = "overtimes";
	$fdata["Label"] = GetFieldLabel("overtimes","Approved");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Approved";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Approved";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 37;

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




	$tdataovertimes["Approved"] = $fdata;
//	Approvedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Approvedby";
	$fdata["GoodName"] = "Approvedby";
	$fdata["ownerTable"] = "overtimes";
	$fdata["Label"] = GetFieldLabel("overtimes","Approvedby");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Approvedby";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Approvedby";

	
	
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
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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




	$tdataovertimes["Approvedby"] = $fdata;
//	ApprovedTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ApprovedTime";
	$fdata["GoodName"] = "ApprovedTime";
	$fdata["ownerTable"] = "overtimes";
	$fdata["Label"] = GetFieldLabel("overtimes","ApprovedTime");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ApprovedTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ApprovedTime";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataovertimes["ApprovedTime"] = $fdata;
//	Posted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Posted";
	$fdata["GoodName"] = "Posted";
	$fdata["ownerTable"] = "overtimes";
	$fdata["Label"] = GetFieldLabel("overtimes","Posted");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Posted";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Posted";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 47;

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




	$tdataovertimes["Posted"] = $fdata;
//	NoMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "NoMins";
	$fdata["GoodName"] = "NoMins";
	$fdata["ownerTable"] = "overtimes";
	$fdata["Label"] = GetFieldLabel("overtimes","NoMins");
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

		$fdata["strField"] = "NoMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NoMins";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 67;

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




	$tdataovertimes["NoMins"] = $fdata;
//	ApprovedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ApprovedDate";
	$fdata["GoodName"] = "ApprovedDate";
	$fdata["ownerTable"] = "overtimes";
	$fdata["Label"] = GetFieldLabel("overtimes","ApprovedDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ApprovedDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ApprovedDate";

	
	
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




	$tdataovertimes["ApprovedDate"] = $fdata;
//	Reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Reason";
	$fdata["GoodName"] = "Reason";
	$fdata["ownerTable"] = "overtimes";
	$fdata["Label"] = GetFieldLabel("overtimes","Reason");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Reason";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Reason";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataovertimes["Reason"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "overtimes";
	$fdata["Label"] = GetFieldLabel("overtimes","Employer");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Employer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Employer";

	
	
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
	$edata["LookupTable"] = "employername";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EnID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "EmployerName";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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




	$tdataovertimes["Employer"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "overtimes";
	$fdata["Label"] = GetFieldLabel("overtimes","Division");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Division";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Division";

	
	
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
	$edata["LookupTable"] = "divisions";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DvID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Division";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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




	$tdataovertimes["Division"] = $fdata;


$tables_data["overtimes"]=&$tdataovertimes;
$field_labels["overtimes"] = &$fieldLabelsovertimes;
$fieldToolTips["overtimes"] = &$fieldToolTipsovertimes;
$placeHolders["overtimes"] = &$placeHoldersovertimes;
$page_titles["overtimes"] = &$pageTitlesovertimes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["overtimes"] = array();
//	overtimetab
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="overtimetab";
		$detailsParam["dOriginalTable"] = "overtimetab";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "overtimetab";
	$detailsParam["dCaptionTable"] = GetTableCaption("overtimetab");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["overtimes"][$dIndex] = $detailsParam;

	
		$detailsTablesData["overtimes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["overtimes"][$dIndex]["masterKeys"][]="OtiD";

				$detailsTablesData["overtimes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["overtimes"][$dIndex]["detailKeys"][]="OtiD";

// tables which are master tables for current table (detail)
$masterTablesData["overtimes"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_overtimes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "OtiD,  	DateCreated,  	FromDateTime,  	ToDateTime,  	Approved,  	Approvedby,  	ApprovedTime,  	Posted,  	NoMins,  	ApprovedDate,  	Reason,  	Employer,  	Division";
$proto0["m_strFrom"] = "FROM overtimes";
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
	"m_strName" => "OtiD",
	"m_strTable" => "overtimes",
	"m_srcTableName" => "overtimes"
));

$proto6["m_sql"] = "OtiD";
$proto6["m_srcTableName"] = "overtimes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DateCreated",
	"m_strTable" => "overtimes",
	"m_srcTableName" => "overtimes"
));

$proto8["m_sql"] = "DateCreated";
$proto8["m_srcTableName"] = "overtimes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDateTime",
	"m_strTable" => "overtimes",
	"m_srcTableName" => "overtimes"
));

$proto10["m_sql"] = "FromDateTime";
$proto10["m_srcTableName"] = "overtimes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDateTime",
	"m_strTable" => "overtimes",
	"m_srcTableName" => "overtimes"
));

$proto12["m_sql"] = "ToDateTime";
$proto12["m_srcTableName"] = "overtimes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Approved",
	"m_strTable" => "overtimes",
	"m_srcTableName" => "overtimes"
));

$proto14["m_sql"] = "Approved";
$proto14["m_srcTableName"] = "overtimes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Approvedby",
	"m_strTable" => "overtimes",
	"m_srcTableName" => "overtimes"
));

$proto16["m_sql"] = "Approvedby";
$proto16["m_srcTableName"] = "overtimes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedTime",
	"m_strTable" => "overtimes",
	"m_srcTableName" => "overtimes"
));

$proto18["m_sql"] = "ApprovedTime";
$proto18["m_srcTableName"] = "overtimes";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Posted",
	"m_strTable" => "overtimes",
	"m_srcTableName" => "overtimes"
));

$proto20["m_sql"] = "Posted";
$proto20["m_srcTableName"] = "overtimes";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "NoMins",
	"m_strTable" => "overtimes",
	"m_srcTableName" => "overtimes"
));

$proto22["m_sql"] = "NoMins";
$proto22["m_srcTableName"] = "overtimes";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedDate",
	"m_strTable" => "overtimes",
	"m_srcTableName" => "overtimes"
));

$proto24["m_sql"] = "ApprovedDate";
$proto24["m_srcTableName"] = "overtimes";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Reason",
	"m_strTable" => "overtimes",
	"m_srcTableName" => "overtimes"
));

$proto26["m_sql"] = "Reason";
$proto26["m_srcTableName"] = "overtimes";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "overtimes",
	"m_srcTableName" => "overtimes"
));

$proto28["m_sql"] = "Employer";
$proto28["m_srcTableName"] = "overtimes";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "overtimes",
	"m_srcTableName" => "overtimes"
));

$proto30["m_sql"] = "Division";
$proto30["m_srcTableName"] = "overtimes";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "overtimes";
$proto33["m_srcTableName"] = "overtimes";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "OtiD";
$proto33["m_columns"][] = "DateCreated";
$proto33["m_columns"][] = "FromDateTime";
$proto33["m_columns"][] = "ToDateTime";
$proto33["m_columns"][] = "Approved";
$proto33["m_columns"][] = "Approvedby";
$proto33["m_columns"][] = "ApprovedTime";
$proto33["m_columns"][] = "Posted";
$proto33["m_columns"][] = "NoMins";
$proto33["m_columns"][] = "ApprovedDate";
$proto33["m_columns"][] = "Reason";
$proto33["m_columns"][] = "Employer";
$proto33["m_columns"][] = "Division";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "overtimes";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "overtimes";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="overtimes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_overtimes = createSqlQuery_overtimes();


	
		;

													

$tdataovertimes[".sqlquery"] = $queryData_overtimes;

include_once(getabspath("include/overtimes_events.php"));
$tableEvents["overtimes"] = new eventclass_overtimes;
$tdataovertimes[".hasEvents"] = true;

?>