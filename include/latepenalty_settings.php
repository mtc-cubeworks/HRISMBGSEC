<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalatepenalty = array();
	$tdatalatepenalty[".truncateText"] = true;
	$tdatalatepenalty[".NumberOfChars"] = 80;
	$tdatalatepenalty[".ShortName"] = "latepenalty";
	$tdatalatepenalty[".OwnerID"] = "";
	$tdatalatepenalty[".OriginalTable"] = "latepenalty";

//	field labels
$fieldLabelslatepenalty = array();
$fieldToolTipslatepenalty = array();
$pageTitleslatepenalty = array();
$placeHolderslatepenalty = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslatepenalty["English"] = array();
	$fieldToolTipslatepenalty["English"] = array();
	$placeHolderslatepenalty["English"] = array();
	$pageTitleslatepenalty["English"] = array();
	$fieldLabelslatepenalty["English"]["LtID"] = "Lt ID";
	$fieldToolTipslatepenalty["English"]["LtID"] = "";
	$placeHolderslatepenalty["English"]["LtID"] = "";
	$fieldLabelslatepenalty["English"]["LateFrom1"] = "Late From1";
	$fieldToolTipslatepenalty["English"]["LateFrom1"] = "";
	$placeHolderslatepenalty["English"]["LateFrom1"] = "";
	$fieldLabelslatepenalty["English"]["LateTo1"] = "Late To1";
	$fieldToolTipslatepenalty["English"]["LateTo1"] = "";
	$placeHolderslatepenalty["English"]["LateTo1"] = "";
	$fieldLabelslatepenalty["English"]["Penalty1"] = "Penalty1";
	$fieldToolTipslatepenalty["English"]["Penalty1"] = "";
	$placeHolderslatepenalty["English"]["Penalty1"] = "";
	$fieldLabelslatepenalty["English"]["LateFrom2"] = "Late From2";
	$fieldToolTipslatepenalty["English"]["LateFrom2"] = "";
	$placeHolderslatepenalty["English"]["LateFrom2"] = "";
	$fieldLabelslatepenalty["English"]["LateTo2"] = "Late To2";
	$fieldToolTipslatepenalty["English"]["LateTo2"] = "";
	$placeHolderslatepenalty["English"]["LateTo2"] = "";
	$fieldLabelslatepenalty["English"]["Penalty2"] = "Penalty2";
	$fieldToolTipslatepenalty["English"]["Penalty2"] = "";
	$placeHolderslatepenalty["English"]["Penalty2"] = "";
	$fieldLabelslatepenalty["English"]["LateFrom3"] = "Late From3";
	$fieldToolTipslatepenalty["English"]["LateFrom3"] = "";
	$placeHolderslatepenalty["English"]["LateFrom3"] = "";
	$fieldLabelslatepenalty["English"]["LateTo3"] = "Late To3";
	$fieldToolTipslatepenalty["English"]["LateTo3"] = "";
	$placeHolderslatepenalty["English"]["LateTo3"] = "";
	$fieldLabelslatepenalty["English"]["Penalty3"] = "Penalty3";
	$fieldToolTipslatepenalty["English"]["Penalty3"] = "";
	$placeHolderslatepenalty["English"]["Penalty3"] = "";
	if (count($fieldToolTipslatepenalty["English"]))
		$tdatalatepenalty[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslatepenalty[""] = array();
	$fieldToolTipslatepenalty[""] = array();
	$placeHolderslatepenalty[""] = array();
	$pageTitleslatepenalty[""] = array();
	if (count($fieldToolTipslatepenalty[""]))
		$tdatalatepenalty[".isUseToolTips"] = true;
}


	$tdatalatepenalty[".NCSearch"] = true;



$tdatalatepenalty[".shortTableName"] = "latepenalty";
$tdatalatepenalty[".nSecOptions"] = 0;
$tdatalatepenalty[".recsPerRowPrint"] = 1;
$tdatalatepenalty[".mainTableOwnerID"] = "";
$tdatalatepenalty[".moveNext"] = 1;
$tdatalatepenalty[".entityType"] = 0;

$tdatalatepenalty[".strOriginalTableName"] = "latepenalty";

	



$tdatalatepenalty[".showAddInPopup"] = false;

$tdatalatepenalty[".showEditInPopup"] = false;

$tdatalatepenalty[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatalatepenalty[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalatepenalty[".fieldsForRegister"] = array();

$tdatalatepenalty[".listAjax"] = false;

	$tdatalatepenalty[".audit"] = false;

	$tdatalatepenalty[".locking"] = false;

$tdatalatepenalty[".edit"] = true;
$tdatalatepenalty[".afterEditAction"] = 1;
$tdatalatepenalty[".closePopupAfterEdit"] = 1;
$tdatalatepenalty[".afterEditActionDetTable"] = "";


$tdatalatepenalty[".list"] = true;

$tdatalatepenalty[".inlineEdit"] = true;

$tdatalatepenalty[".updateSelected"] = true;

$tdatalatepenalty[".reorderRecordsByHeader"] = true;


$tdatalatepenalty[".exportFormatting"] = 2;
$tdatalatepenalty[".exportDelimiter"] = ",";
		
$tdatalatepenalty[".view"] = true;

$tdatalatepenalty[".import"] = true;

$tdatalatepenalty[".exportTo"] = true;

$tdatalatepenalty[".printFriendly"] = true;

$tdatalatepenalty[".delete"] = true;

$tdatalatepenalty[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatalatepenalty[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatalatepenalty[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatalatepenalty[".searchSaving"] = false;
//

$tdatalatepenalty[".showSearchPanel"] = true;
		$tdatalatepenalty[".flexibleSearch"] = true;

$tdatalatepenalty[".isUseAjaxSuggest"] = true;

$tdatalatepenalty[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdatalatepenalty[".ajaxCodeSnippetAdded"] = false;

$tdatalatepenalty[".buttonsAdded"] = false;

$tdatalatepenalty[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalatepenalty[".isUseTimeForSearch"] = false;





$tdatalatepenalty[".allSearchFields"] = array();
$tdatalatepenalty[".filterFields"] = array();
$tdatalatepenalty[".requiredSearchFields"] = array();

$tdatalatepenalty[".allSearchFields"][] = "LtID";
	$tdatalatepenalty[".allSearchFields"][] = "LateFrom1";
	$tdatalatepenalty[".allSearchFields"][] = "LateTo1";
	$tdatalatepenalty[".allSearchFields"][] = "Penalty1";
	$tdatalatepenalty[".allSearchFields"][] = "LateFrom2";
	$tdatalatepenalty[".allSearchFields"][] = "LateTo2";
	$tdatalatepenalty[".allSearchFields"][] = "Penalty2";
	$tdatalatepenalty[".allSearchFields"][] = "LateFrom3";
	$tdatalatepenalty[".allSearchFields"][] = "LateTo3";
	$tdatalatepenalty[".allSearchFields"][] = "Penalty3";
	

$tdatalatepenalty[".googleLikeFields"] = array();
$tdatalatepenalty[".googleLikeFields"][] = "LtID";
$tdatalatepenalty[".googleLikeFields"][] = "LateFrom1";
$tdatalatepenalty[".googleLikeFields"][] = "LateTo1";
$tdatalatepenalty[".googleLikeFields"][] = "Penalty1";
$tdatalatepenalty[".googleLikeFields"][] = "LateFrom2";
$tdatalatepenalty[".googleLikeFields"][] = "LateTo2";
$tdatalatepenalty[".googleLikeFields"][] = "Penalty2";
$tdatalatepenalty[".googleLikeFields"][] = "LateFrom3";
$tdatalatepenalty[".googleLikeFields"][] = "LateTo3";
$tdatalatepenalty[".googleLikeFields"][] = "Penalty3";


$tdatalatepenalty[".advSearchFields"] = array();
$tdatalatepenalty[".advSearchFields"][] = "LtID";
$tdatalatepenalty[".advSearchFields"][] = "LateFrom1";
$tdatalatepenalty[".advSearchFields"][] = "LateTo1";
$tdatalatepenalty[".advSearchFields"][] = "Penalty1";
$tdatalatepenalty[".advSearchFields"][] = "LateFrom2";
$tdatalatepenalty[".advSearchFields"][] = "LateTo2";
$tdatalatepenalty[".advSearchFields"][] = "Penalty2";
$tdatalatepenalty[".advSearchFields"][] = "LateFrom3";
$tdatalatepenalty[".advSearchFields"][] = "LateTo3";
$tdatalatepenalty[".advSearchFields"][] = "Penalty3";

$tdatalatepenalty[".tableType"] = "list";

$tdatalatepenalty[".printerPageOrientation"] = 0;
$tdatalatepenalty[".nPrinterPageScale"] = 100;

$tdatalatepenalty[".nPrinterSplitRecords"] = 40;

$tdatalatepenalty[".nPrinterPDFSplitRecords"] = 40;



$tdatalatepenalty[".geocodingEnabled"] = false;





$tdatalatepenalty[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatalatepenalty[".pageSize"] = 20;

$tdatalatepenalty[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalatepenalty[".strOrderBy"] = $tstrOrderBy;

$tdatalatepenalty[".orderindexes"] = array();

$tdatalatepenalty[".sqlHead"] = "SELECT LtID,  	LateFrom1,  	LateTo1,  	Penalty1,  	LateFrom2,  	LateTo2,  	Penalty2,  	LateFrom3,  	LateTo3,  	Penalty3";
$tdatalatepenalty[".sqlFrom"] = "FROM latepenalty";
$tdatalatepenalty[".sqlWhereExpr"] = "";
$tdatalatepenalty[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalatepenalty[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalatepenalty[".arrGroupsPerPage"] = $arrGPP;

$tdatalatepenalty[".highlightSearchResults"] = true;

$tableKeyslatepenalty = array();
$tableKeyslatepenalty[] = "LtID";
$tdatalatepenalty[".Keys"] = $tableKeyslatepenalty;

$tdatalatepenalty[".listFields"] = array();
$tdatalatepenalty[".listFields"][] = "LtID";
$tdatalatepenalty[".listFields"][] = "LateFrom1";
$tdatalatepenalty[".listFields"][] = "LateTo1";
$tdatalatepenalty[".listFields"][] = "Penalty1";
$tdatalatepenalty[".listFields"][] = "LateFrom2";
$tdatalatepenalty[".listFields"][] = "LateTo2";
$tdatalatepenalty[".listFields"][] = "Penalty2";
$tdatalatepenalty[".listFields"][] = "LateFrom3";
$tdatalatepenalty[".listFields"][] = "LateTo3";
$tdatalatepenalty[".listFields"][] = "Penalty3";

$tdatalatepenalty[".hideMobileList"] = array();


$tdatalatepenalty[".viewFields"] = array();
$tdatalatepenalty[".viewFields"][] = "LtID";
$tdatalatepenalty[".viewFields"][] = "LateFrom1";
$tdatalatepenalty[".viewFields"][] = "LateTo1";
$tdatalatepenalty[".viewFields"][] = "Penalty1";
$tdatalatepenalty[".viewFields"][] = "LateFrom2";
$tdatalatepenalty[".viewFields"][] = "LateTo2";
$tdatalatepenalty[".viewFields"][] = "Penalty2";
$tdatalatepenalty[".viewFields"][] = "LateFrom3";
$tdatalatepenalty[".viewFields"][] = "LateTo3";
$tdatalatepenalty[".viewFields"][] = "Penalty3";

$tdatalatepenalty[".addFields"] = array();
$tdatalatepenalty[".addFields"][] = "LateFrom1";
$tdatalatepenalty[".addFields"][] = "LateTo1";
$tdatalatepenalty[".addFields"][] = "Penalty1";
$tdatalatepenalty[".addFields"][] = "LateFrom2";
$tdatalatepenalty[".addFields"][] = "LateTo2";
$tdatalatepenalty[".addFields"][] = "Penalty2";
$tdatalatepenalty[".addFields"][] = "LateFrom3";
$tdatalatepenalty[".addFields"][] = "LateTo3";
$tdatalatepenalty[".addFields"][] = "Penalty3";

$tdatalatepenalty[".masterListFields"] = array();
$tdatalatepenalty[".masterListFields"][] = "LtID";
$tdatalatepenalty[".masterListFields"][] = "LateFrom1";
$tdatalatepenalty[".masterListFields"][] = "LateTo1";
$tdatalatepenalty[".masterListFields"][] = "Penalty1";
$tdatalatepenalty[".masterListFields"][] = "LateFrom2";
$tdatalatepenalty[".masterListFields"][] = "LateTo2";
$tdatalatepenalty[".masterListFields"][] = "Penalty2";
$tdatalatepenalty[".masterListFields"][] = "LateFrom3";
$tdatalatepenalty[".masterListFields"][] = "LateTo3";
$tdatalatepenalty[".masterListFields"][] = "Penalty3";

$tdatalatepenalty[".inlineAddFields"] = array();
$tdatalatepenalty[".inlineAddFields"][] = "LateFrom1";
$tdatalatepenalty[".inlineAddFields"][] = "LateTo1";
$tdatalatepenalty[".inlineAddFields"][] = "Penalty1";
$tdatalatepenalty[".inlineAddFields"][] = "LateFrom2";
$tdatalatepenalty[".inlineAddFields"][] = "LateTo2";
$tdatalatepenalty[".inlineAddFields"][] = "Penalty2";
$tdatalatepenalty[".inlineAddFields"][] = "LateFrom3";
$tdatalatepenalty[".inlineAddFields"][] = "LateTo3";
$tdatalatepenalty[".inlineAddFields"][] = "Penalty3";

$tdatalatepenalty[".editFields"] = array();
$tdatalatepenalty[".editFields"][] = "LateFrom1";
$tdatalatepenalty[".editFields"][] = "LateTo1";
$tdatalatepenalty[".editFields"][] = "Penalty1";
$tdatalatepenalty[".editFields"][] = "LateFrom2";
$tdatalatepenalty[".editFields"][] = "LateTo2";
$tdatalatepenalty[".editFields"][] = "Penalty2";
$tdatalatepenalty[".editFields"][] = "LateFrom3";
$tdatalatepenalty[".editFields"][] = "LateTo3";
$tdatalatepenalty[".editFields"][] = "Penalty3";

$tdatalatepenalty[".inlineEditFields"] = array();
$tdatalatepenalty[".inlineEditFields"][] = "LateFrom1";
$tdatalatepenalty[".inlineEditFields"][] = "LateTo1";
$tdatalatepenalty[".inlineEditFields"][] = "Penalty1";
$tdatalatepenalty[".inlineEditFields"][] = "LateFrom2";
$tdatalatepenalty[".inlineEditFields"][] = "LateTo2";
$tdatalatepenalty[".inlineEditFields"][] = "Penalty2";
$tdatalatepenalty[".inlineEditFields"][] = "LateFrom3";
$tdatalatepenalty[".inlineEditFields"][] = "LateTo3";
$tdatalatepenalty[".inlineEditFields"][] = "Penalty3";

$tdatalatepenalty[".updateSelectedFields"] = array();
$tdatalatepenalty[".updateSelectedFields"][] = "LateFrom1";
$tdatalatepenalty[".updateSelectedFields"][] = "LateTo1";
$tdatalatepenalty[".updateSelectedFields"][] = "Penalty1";
$tdatalatepenalty[".updateSelectedFields"][] = "LateFrom2";
$tdatalatepenalty[".updateSelectedFields"][] = "LateTo2";
$tdatalatepenalty[".updateSelectedFields"][] = "Penalty2";
$tdatalatepenalty[".updateSelectedFields"][] = "LateFrom3";
$tdatalatepenalty[".updateSelectedFields"][] = "LateTo3";
$tdatalatepenalty[".updateSelectedFields"][] = "Penalty3";


$tdatalatepenalty[".exportFields"] = array();
$tdatalatepenalty[".exportFields"][] = "LtID";
$tdatalatepenalty[".exportFields"][] = "LateFrom1";
$tdatalatepenalty[".exportFields"][] = "LateTo1";
$tdatalatepenalty[".exportFields"][] = "Penalty1";
$tdatalatepenalty[".exportFields"][] = "LateFrom2";
$tdatalatepenalty[".exportFields"][] = "LateTo2";
$tdatalatepenalty[".exportFields"][] = "Penalty2";
$tdatalatepenalty[".exportFields"][] = "LateFrom3";
$tdatalatepenalty[".exportFields"][] = "LateTo3";
$tdatalatepenalty[".exportFields"][] = "Penalty3";

$tdatalatepenalty[".importFields"] = array();
$tdatalatepenalty[".importFields"][] = "LtID";
$tdatalatepenalty[".importFields"][] = "LateFrom1";
$tdatalatepenalty[".importFields"][] = "LateTo1";
$tdatalatepenalty[".importFields"][] = "Penalty1";
$tdatalatepenalty[".importFields"][] = "LateFrom2";
$tdatalatepenalty[".importFields"][] = "LateTo2";
$tdatalatepenalty[".importFields"][] = "Penalty2";
$tdatalatepenalty[".importFields"][] = "LateFrom3";
$tdatalatepenalty[".importFields"][] = "LateTo3";
$tdatalatepenalty[".importFields"][] = "Penalty3";

$tdatalatepenalty[".printFields"] = array();
$tdatalatepenalty[".printFields"][] = "LtID";
$tdatalatepenalty[".printFields"][] = "LateFrom1";
$tdatalatepenalty[".printFields"][] = "LateTo1";
$tdatalatepenalty[".printFields"][] = "Penalty1";
$tdatalatepenalty[".printFields"][] = "LateFrom2";
$tdatalatepenalty[".printFields"][] = "LateTo2";
$tdatalatepenalty[".printFields"][] = "Penalty2";
$tdatalatepenalty[".printFields"][] = "LateFrom3";
$tdatalatepenalty[".printFields"][] = "LateTo3";
$tdatalatepenalty[".printFields"][] = "Penalty3";


//	LtID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LtID";
	$fdata["GoodName"] = "LtID";
	$fdata["ownerTable"] = "latepenalty";
	$fdata["Label"] = GetFieldLabel("latepenalty","LtID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LtID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LtID";

	
	
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




	$tdatalatepenalty["LtID"] = $fdata;
//	LateFrom1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "LateFrom1";
	$fdata["GoodName"] = "LateFrom1";
	$fdata["ownerTable"] = "latepenalty";
	$fdata["Label"] = GetFieldLabel("latepenalty","LateFrom1");
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

		$fdata["strField"] = "LateFrom1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LateFrom1";

	
	
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




	$tdatalatepenalty["LateFrom1"] = $fdata;
//	LateTo1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LateTo1";
	$fdata["GoodName"] = "LateTo1";
	$fdata["ownerTable"] = "latepenalty";
	$fdata["Label"] = GetFieldLabel("latepenalty","LateTo1");
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

		$fdata["strField"] = "LateTo1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LateTo1";

	
	
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




	$tdatalatepenalty["LateTo1"] = $fdata;
//	Penalty1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Penalty1";
	$fdata["GoodName"] = "Penalty1";
	$fdata["ownerTable"] = "latepenalty";
	$fdata["Label"] = GetFieldLabel("latepenalty","Penalty1");
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

		$fdata["strField"] = "Penalty1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Penalty1";

	
	
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




	$tdatalatepenalty["Penalty1"] = $fdata;
//	LateFrom2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "LateFrom2";
	$fdata["GoodName"] = "LateFrom2";
	$fdata["ownerTable"] = "latepenalty";
	$fdata["Label"] = GetFieldLabel("latepenalty","LateFrom2");
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

		$fdata["strField"] = "LateFrom2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LateFrom2";

	
	
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




	$tdatalatepenalty["LateFrom2"] = $fdata;
//	LateTo2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "LateTo2";
	$fdata["GoodName"] = "LateTo2";
	$fdata["ownerTable"] = "latepenalty";
	$fdata["Label"] = GetFieldLabel("latepenalty","LateTo2");
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

		$fdata["strField"] = "LateTo2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LateTo2";

	
	
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




	$tdatalatepenalty["LateTo2"] = $fdata;
//	Penalty2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Penalty2";
	$fdata["GoodName"] = "Penalty2";
	$fdata["ownerTable"] = "latepenalty";
	$fdata["Label"] = GetFieldLabel("latepenalty","Penalty2");
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

		$fdata["strField"] = "Penalty2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Penalty2";

	
	
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




	$tdatalatepenalty["Penalty2"] = $fdata;
//	LateFrom3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "LateFrom3";
	$fdata["GoodName"] = "LateFrom3";
	$fdata["ownerTable"] = "latepenalty";
	$fdata["Label"] = GetFieldLabel("latepenalty","LateFrom3");
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

		$fdata["strField"] = "LateFrom3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LateFrom3";

	
	
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




	$tdatalatepenalty["LateFrom3"] = $fdata;
//	LateTo3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "LateTo3";
	$fdata["GoodName"] = "LateTo3";
	$fdata["ownerTable"] = "latepenalty";
	$fdata["Label"] = GetFieldLabel("latepenalty","LateTo3");
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

		$fdata["strField"] = "LateTo3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LateTo3";

	
	
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




	$tdatalatepenalty["LateTo3"] = $fdata;
//	Penalty3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Penalty3";
	$fdata["GoodName"] = "Penalty3";
	$fdata["ownerTable"] = "latepenalty";
	$fdata["Label"] = GetFieldLabel("latepenalty","Penalty3");
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

		$fdata["strField"] = "Penalty3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Penalty3";

	
	
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




	$tdatalatepenalty["Penalty3"] = $fdata;


$tables_data["latepenalty"]=&$tdatalatepenalty;
$field_labels["latepenalty"] = &$fieldLabelslatepenalty;
$fieldToolTips["latepenalty"] = &$fieldToolTipslatepenalty;
$placeHolders["latepenalty"] = &$placeHolderslatepenalty;
$page_titles["latepenalty"] = &$pageTitleslatepenalty;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["latepenalty"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["latepenalty"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_latepenalty()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LtID,  	LateFrom1,  	LateTo1,  	Penalty1,  	LateFrom2,  	LateTo2,  	Penalty2,  	LateFrom3,  	LateTo3,  	Penalty3";
$proto0["m_strFrom"] = "FROM latepenalty";
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
	"m_strName" => "LtID",
	"m_strTable" => "latepenalty",
	"m_srcTableName" => "latepenalty"
));

$proto6["m_sql"] = "LtID";
$proto6["m_srcTableName"] = "latepenalty";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "LateFrom1",
	"m_strTable" => "latepenalty",
	"m_srcTableName" => "latepenalty"
));

$proto8["m_sql"] = "LateFrom1";
$proto8["m_srcTableName"] = "latepenalty";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "LateTo1",
	"m_strTable" => "latepenalty",
	"m_srcTableName" => "latepenalty"
));

$proto10["m_sql"] = "LateTo1";
$proto10["m_srcTableName"] = "latepenalty";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Penalty1",
	"m_strTable" => "latepenalty",
	"m_srcTableName" => "latepenalty"
));

$proto12["m_sql"] = "Penalty1";
$proto12["m_srcTableName"] = "latepenalty";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "LateFrom2",
	"m_strTable" => "latepenalty",
	"m_srcTableName" => "latepenalty"
));

$proto14["m_sql"] = "LateFrom2";
$proto14["m_srcTableName"] = "latepenalty";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "LateTo2",
	"m_strTable" => "latepenalty",
	"m_srcTableName" => "latepenalty"
));

$proto16["m_sql"] = "LateTo2";
$proto16["m_srcTableName"] = "latepenalty";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Penalty2",
	"m_strTable" => "latepenalty",
	"m_srcTableName" => "latepenalty"
));

$proto18["m_sql"] = "Penalty2";
$proto18["m_srcTableName"] = "latepenalty";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "LateFrom3",
	"m_strTable" => "latepenalty",
	"m_srcTableName" => "latepenalty"
));

$proto20["m_sql"] = "LateFrom3";
$proto20["m_srcTableName"] = "latepenalty";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "LateTo3",
	"m_strTable" => "latepenalty",
	"m_srcTableName" => "latepenalty"
));

$proto22["m_sql"] = "LateTo3";
$proto22["m_srcTableName"] = "latepenalty";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Penalty3",
	"m_strTable" => "latepenalty",
	"m_srcTableName" => "latepenalty"
));

$proto24["m_sql"] = "Penalty3";
$proto24["m_srcTableName"] = "latepenalty";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "latepenalty";
$proto27["m_srcTableName"] = "latepenalty";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "LtID";
$proto27["m_columns"][] = "LateFrom1";
$proto27["m_columns"][] = "LateTo1";
$proto27["m_columns"][] = "Penalty1";
$proto27["m_columns"][] = "LateFrom2";
$proto27["m_columns"][] = "LateTo2";
$proto27["m_columns"][] = "Penalty2";
$proto27["m_columns"][] = "LateFrom3";
$proto27["m_columns"][] = "LateTo3";
$proto27["m_columns"][] = "Penalty3";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "latepenalty";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "latepenalty";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="latepenalty";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_latepenalty = createSqlQuery_latepenalty();


	
		;

										

$tdatalatepenalty[".sqlquery"] = $queryData_latepenalty;

$tableEvents["latepenalty"] = new eventsBase;
$tdatalatepenalty[".hasEvents"] = false;

?>