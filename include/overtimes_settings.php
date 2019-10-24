<?php
require_once(getabspath("classes/cipherer.php"));




$tdataovertimes = array();
	$tdataovertimes[".truncateText"] = true;
	$tdataovertimes[".NumberOfChars"] = 80;
	$tdataovertimes[".ShortName"] = "overtimes";
	$tdataovertimes[".OwnerID"] = "PreparedBy";
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
	$fieldLabelsovertimes["English"]["Approved"] = "Approved";
	$fieldToolTipsovertimes["English"]["Approved"] = "";
	$placeHoldersovertimes["English"]["Approved"] = "";
	$fieldLabelsovertimes["English"]["Approvedby"] = "Approvedby";
	$fieldToolTipsovertimes["English"]["Approvedby"] = "";
	$placeHoldersovertimes["English"]["Approvedby"] = "";
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
	$fieldLabelsovertimes["English"]["FromTime"] = "From Time";
	$fieldToolTipsovertimes["English"]["FromTime"] = "";
	$placeHoldersovertimes["English"]["FromTime"] = "";
	$fieldLabelsovertimes["English"]["ToTime"] = "To Time";
	$fieldToolTipsovertimes["English"]["ToTime"] = "";
	$placeHoldersovertimes["English"]["ToTime"] = "";
	$fieldLabelsovertimes["English"]["AllEmployees"] = "All Employees";
	$fieldToolTipsovertimes["English"]["AllEmployees"] = "";
	$placeHoldersovertimes["English"]["AllEmployees"] = "";
	$fieldLabelsovertimes["English"]["DateOT"] = "Date OT";
	$fieldToolTipsovertimes["English"]["DateOT"] = "";
	$placeHoldersovertimes["English"]["DateOT"] = "";
	$fieldLabelsovertimes["English"]["PreparedBy"] = "Prepared By";
	$fieldToolTipsovertimes["English"]["PreparedBy"] = "";
	$placeHoldersovertimes["English"]["PreparedBy"] = "";
	$fieldLabelsovertimes["English"]["Remarks"] = "Remarks";
	$fieldToolTipsovertimes["English"]["Remarks"] = "";
	$placeHoldersovertimes["English"]["Remarks"] = "";
	if (count($fieldToolTipsovertimes["English"]))
		$tdataovertimes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsovertimes[""] = array();
	$fieldToolTipsovertimes[""] = array();
	$placeHoldersovertimes[""] = array();
	$pageTitlesovertimes[""] = array();
	$fieldLabelsovertimes[""]["FromTime"] = "From Time";
	$fieldToolTipsovertimes[""]["FromTime"] = "";
	$placeHoldersovertimes[""]["FromTime"] = "";
	$fieldLabelsovertimes[""]["ToTime"] = "To Time";
	$fieldToolTipsovertimes[""]["ToTime"] = "";
	$placeHoldersovertimes[""]["ToTime"] = "";
	$fieldLabelsovertimes[""]["AllEmployees"] = "All Employees";
	$fieldToolTipsovertimes[""]["AllEmployees"] = "";
	$placeHoldersovertimes[""]["AllEmployees"] = "";
	$fieldLabelsovertimes[""]["DateOT"] = "Date OT";
	$fieldToolTipsovertimes[""]["DateOT"] = "";
	$placeHoldersovertimes[""]["DateOT"] = "";
	$fieldLabelsovertimes[""]["PreparedBy"] = "Prepared By";
	$fieldToolTipsovertimes[""]["PreparedBy"] = "";
	$placeHoldersovertimes[""]["PreparedBy"] = "";
	$fieldLabelsovertimes[""]["Remarks"] = "Remarks";
	$fieldToolTipsovertimes[""]["Remarks"] = "";
	$placeHoldersovertimes[""]["Remarks"] = "";
	if (count($fieldToolTipsovertimes[""]))
		$tdataovertimes[".isUseToolTips"] = true;
}


	$tdataovertimes[".NCSearch"] = true;



$tdataovertimes[".shortTableName"] = "overtimes";
$tdataovertimes[".nSecOptions"] = 1;
$tdataovertimes[".recsPerRowPrint"] = 1;
$tdataovertimes[".mainTableOwnerID"] = "PreparedBy";
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
$tdataovertimes[".afterAddAction"] = 0;
$tdataovertimes[".closePopupAfterAdd"] = 1;
$tdataovertimes[".afterAddActionDetTable"] = "overtimetab";

$tdataovertimes[".list"] = true;

$tdataovertimes[".inlineEdit"] = true;

$tdataovertimes[".updateSelected"] = true;

$tdataovertimes[".reorderRecordsByHeader"] = true;


$tdataovertimes[".exportFormatting"] = 2;
$tdataovertimes[".exportDelimiter"] = ",";
		
$tdataovertimes[".inlineAdd"] = true;
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
$tdataovertimes[".isUseTimeForSearch"] = true;





$tdataovertimes[".allSearchFields"] = array();
$tdataovertimes[".filterFields"] = array();
$tdataovertimes[".requiredSearchFields"] = array();

$tdataovertimes[".allSearchFields"][] = "OtiD";
	$tdataovertimes[".allSearchFields"][] = "DateOT";
	$tdataovertimes[".allSearchFields"][] = "Employer";
	$tdataovertimes[".allSearchFields"][] = "Division";
	$tdataovertimes[".allSearchFields"][] = "AllEmployees";
	$tdataovertimes[".allSearchFields"][] = "FromTime";
	$tdataovertimes[".allSearchFields"][] = "ToTime";
	$tdataovertimes[".allSearchFields"][] = "Reason";
	$tdataovertimes[".allSearchFields"][] = "NoMins";
	$tdataovertimes[".allSearchFields"][] = "Remarks";
	$tdataovertimes[".allSearchFields"][] = "Approved";
	$tdataovertimes[".allSearchFields"][] = "Approvedby";
	$tdataovertimes[".allSearchFields"][] = "ApprovedDate";
	$tdataovertimes[".allSearchFields"][] = "Posted";
	$tdataovertimes[".allSearchFields"][] = "DateCreated";
	$tdataovertimes[".allSearchFields"][] = "PreparedBy";
	

$tdataovertimes[".googleLikeFields"] = array();
$tdataovertimes[".googleLikeFields"][] = "OtiD";
$tdataovertimes[".googleLikeFields"][] = "DateCreated";
$tdataovertimes[".googleLikeFields"][] = "FromTime";
$tdataovertimes[".googleLikeFields"][] = "ToTime";
$tdataovertimes[".googleLikeFields"][] = "Approved";
$tdataovertimes[".googleLikeFields"][] = "Approvedby";
$tdataovertimes[".googleLikeFields"][] = "Posted";
$tdataovertimes[".googleLikeFields"][] = "NoMins";
$tdataovertimes[".googleLikeFields"][] = "ApprovedDate";
$tdataovertimes[".googleLikeFields"][] = "Reason";
$tdataovertimes[".googleLikeFields"][] = "Employer";
$tdataovertimes[".googleLikeFields"][] = "Division";
$tdataovertimes[".googleLikeFields"][] = "AllEmployees";
$tdataovertimes[".googleLikeFields"][] = "DateOT";
$tdataovertimes[".googleLikeFields"][] = "PreparedBy";
$tdataovertimes[".googleLikeFields"][] = "Remarks";


$tdataovertimes[".advSearchFields"] = array();
$tdataovertimes[".advSearchFields"][] = "OtiD";
$tdataovertimes[".advSearchFields"][] = "DateOT";
$tdataovertimes[".advSearchFields"][] = "Employer";
$tdataovertimes[".advSearchFields"][] = "Division";
$tdataovertimes[".advSearchFields"][] = "AllEmployees";
$tdataovertimes[".advSearchFields"][] = "FromTime";
$tdataovertimes[".advSearchFields"][] = "ToTime";
$tdataovertimes[".advSearchFields"][] = "Reason";
$tdataovertimes[".advSearchFields"][] = "NoMins";
$tdataovertimes[".advSearchFields"][] = "Remarks";
$tdataovertimes[".advSearchFields"][] = "Approved";
$tdataovertimes[".advSearchFields"][] = "Approvedby";
$tdataovertimes[".advSearchFields"][] = "ApprovedDate";
$tdataovertimes[".advSearchFields"][] = "Posted";
$tdataovertimes[".advSearchFields"][] = "DateCreated";
$tdataovertimes[".advSearchFields"][] = "PreparedBy";

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

$tdataovertimes[".sqlHead"] = "SELECT OtiD,  	DateCreated,  	FromTime,  	ToTime,  	Approved,  	Approvedby,  	Posted,  	NoMins,  	ApprovedDate,  	Reason,  	Employer,  	Division,  	AllEmployees,  	DateOT,  	PreparedBy,  	Remarks";
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
$tdataovertimes[".listFields"][] = "DateOT";
$tdataovertimes[".listFields"][] = "Employer";
$tdataovertimes[".listFields"][] = "Division";
$tdataovertimes[".listFields"][] = "AllEmployees";
$tdataovertimes[".listFields"][] = "FromTime";
$tdataovertimes[".listFields"][] = "ToTime";
$tdataovertimes[".listFields"][] = "Reason";
$tdataovertimes[".listFields"][] = "NoMins";
$tdataovertimes[".listFields"][] = "Remarks";
$tdataovertimes[".listFields"][] = "Approved";
$tdataovertimes[".listFields"][] = "Approvedby";
$tdataovertimes[".listFields"][] = "ApprovedDate";
$tdataovertimes[".listFields"][] = "Posted";
$tdataovertimes[".listFields"][] = "DateCreated";
$tdataovertimes[".listFields"][] = "PreparedBy";

$tdataovertimes[".hideMobileList"] = array();


$tdataovertimes[".viewFields"] = array();
$tdataovertimes[".viewFields"][] = "OtiD";
$tdataovertimes[".viewFields"][] = "DateOT";
$tdataovertimes[".viewFields"][] = "Employer";
$tdataovertimes[".viewFields"][] = "Division";
$tdataovertimes[".viewFields"][] = "AllEmployees";
$tdataovertimes[".viewFields"][] = "FromTime";
$tdataovertimes[".viewFields"][] = "ToTime";
$tdataovertimes[".viewFields"][] = "Reason";
$tdataovertimes[".viewFields"][] = "NoMins";
$tdataovertimes[".viewFields"][] = "Remarks";
$tdataovertimes[".viewFields"][] = "Approved";
$tdataovertimes[".viewFields"][] = "Approvedby";
$tdataovertimes[".viewFields"][] = "ApprovedDate";
$tdataovertimes[".viewFields"][] = "Posted";
$tdataovertimes[".viewFields"][] = "DateCreated";
$tdataovertimes[".viewFields"][] = "PreparedBy";

$tdataovertimes[".addFields"] = array();
$tdataovertimes[".addFields"][] = "DateOT";
$tdataovertimes[".addFields"][] = "Employer";
$tdataovertimes[".addFields"][] = "Division";
$tdataovertimes[".addFields"][] = "AllEmployees";
$tdataovertimes[".addFields"][] = "FromTime";
$tdataovertimes[".addFields"][] = "ToTime";
$tdataovertimes[".addFields"][] = "Reason";
$tdataovertimes[".addFields"][] = "NoMins";
$tdataovertimes[".addFields"][] = "Remarks";
$tdataovertimes[".addFields"][] = "DateCreated";

$tdataovertimes[".masterListFields"] = array();
$tdataovertimes[".masterListFields"][] = "OtiD";
$tdataovertimes[".masterListFields"][] = "DateOT";
$tdataovertimes[".masterListFields"][] = "Employer";
$tdataovertimes[".masterListFields"][] = "Division";
$tdataovertimes[".masterListFields"][] = "AllEmployees";
$tdataovertimes[".masterListFields"][] = "FromTime";
$tdataovertimes[".masterListFields"][] = "ToTime";
$tdataovertimes[".masterListFields"][] = "Reason";
$tdataovertimes[".masterListFields"][] = "NoMins";
$tdataovertimes[".masterListFields"][] = "Remarks";
$tdataovertimes[".masterListFields"][] = "Approved";
$tdataovertimes[".masterListFields"][] = "Approvedby";
$tdataovertimes[".masterListFields"][] = "ApprovedDate";
$tdataovertimes[".masterListFields"][] = "Posted";
$tdataovertimes[".masterListFields"][] = "DateCreated";
$tdataovertimes[".masterListFields"][] = "PreparedBy";

$tdataovertimes[".inlineAddFields"] = array();
$tdataovertimes[".inlineAddFields"][] = "DateOT";
$tdataovertimes[".inlineAddFields"][] = "Employer";
$tdataovertimes[".inlineAddFields"][] = "Division";
$tdataovertimes[".inlineAddFields"][] = "AllEmployees";
$tdataovertimes[".inlineAddFields"][] = "FromTime";
$tdataovertimes[".inlineAddFields"][] = "ToTime";
$tdataovertimes[".inlineAddFields"][] = "Reason";
$tdataovertimes[".inlineAddFields"][] = "NoMins";
$tdataovertimes[".inlineAddFields"][] = "Remarks";
$tdataovertimes[".inlineAddFields"][] = "DateCreated";

$tdataovertimes[".editFields"] = array();
$tdataovertimes[".editFields"][] = "DateOT";
$tdataovertimes[".editFields"][] = "Employer";
$tdataovertimes[".editFields"][] = "Division";
$tdataovertimes[".editFields"][] = "AllEmployees";
$tdataovertimes[".editFields"][] = "FromTime";
$tdataovertimes[".editFields"][] = "ToTime";
$tdataovertimes[".editFields"][] = "Reason";
$tdataovertimes[".editFields"][] = "NoMins";
$tdataovertimes[".editFields"][] = "Remarks";
$tdataovertimes[".editFields"][] = "Approved";
$tdataovertimes[".editFields"][] = "Approvedby";
$tdataovertimes[".editFields"][] = "ApprovedDate";
$tdataovertimes[".editFields"][] = "DateCreated";

$tdataovertimes[".inlineEditFields"] = array();
$tdataovertimes[".inlineEditFields"][] = "DateOT";
$tdataovertimes[".inlineEditFields"][] = "Employer";
$tdataovertimes[".inlineEditFields"][] = "Division";
$tdataovertimes[".inlineEditFields"][] = "AllEmployees";
$tdataovertimes[".inlineEditFields"][] = "FromTime";
$tdataovertimes[".inlineEditFields"][] = "ToTime";
$tdataovertimes[".inlineEditFields"][] = "Reason";
$tdataovertimes[".inlineEditFields"][] = "NoMins";
$tdataovertimes[".inlineEditFields"][] = "Remarks";
$tdataovertimes[".inlineEditFields"][] = "Approved";
$tdataovertimes[".inlineEditFields"][] = "Approvedby";
$tdataovertimes[".inlineEditFields"][] = "ApprovedDate";
$tdataovertimes[".inlineEditFields"][] = "Posted";
$tdataovertimes[".inlineEditFields"][] = "DateCreated";

$tdataovertimes[".updateSelectedFields"] = array();
$tdataovertimes[".updateSelectedFields"][] = "NoMins";
$tdataovertimes[".updateSelectedFields"][] = "Approved";
$tdataovertimes[".updateSelectedFields"][] = "Approvedby";
$tdataovertimes[".updateSelectedFields"][] = "ApprovedDate";
$tdataovertimes[".updateSelectedFields"][] = "DateCreated";


$tdataovertimes[".exportFields"] = array();
$tdataovertimes[".exportFields"][] = "OtiD";
$tdataovertimes[".exportFields"][] = "DateOT";
$tdataovertimes[".exportFields"][] = "Employer";
$tdataovertimes[".exportFields"][] = "Division";
$tdataovertimes[".exportFields"][] = "AllEmployees";
$tdataovertimes[".exportFields"][] = "FromTime";
$tdataovertimes[".exportFields"][] = "ToTime";
$tdataovertimes[".exportFields"][] = "Reason";
$tdataovertimes[".exportFields"][] = "NoMins";
$tdataovertimes[".exportFields"][] = "Remarks";
$tdataovertimes[".exportFields"][] = "Approved";
$tdataovertimes[".exportFields"][] = "Approvedby";
$tdataovertimes[".exportFields"][] = "ApprovedDate";
$tdataovertimes[".exportFields"][] = "Posted";
$tdataovertimes[".exportFields"][] = "DateCreated";
$tdataovertimes[".exportFields"][] = "PreparedBy";

$tdataovertimes[".importFields"] = array();
$tdataovertimes[".importFields"][] = "OtiD";
$tdataovertimes[".importFields"][] = "DateCreated";
$tdataovertimes[".importFields"][] = "FromTime";
$tdataovertimes[".importFields"][] = "ToTime";
$tdataovertimes[".importFields"][] = "Approved";
$tdataovertimes[".importFields"][] = "Approvedby";
$tdataovertimes[".importFields"][] = "Posted";
$tdataovertimes[".importFields"][] = "NoMins";
$tdataovertimes[".importFields"][] = "ApprovedDate";
$tdataovertimes[".importFields"][] = "Reason";
$tdataovertimes[".importFields"][] = "Employer";
$tdataovertimes[".importFields"][] = "Division";
$tdataovertimes[".importFields"][] = "AllEmployees";
$tdataovertimes[".importFields"][] = "DateOT";
$tdataovertimes[".importFields"][] = "PreparedBy";
$tdataovertimes[".importFields"][] = "Remarks";

$tdataovertimes[".printFields"] = array();
$tdataovertimes[".printFields"][] = "OtiD";
$tdataovertimes[".printFields"][] = "DateOT";
$tdataovertimes[".printFields"][] = "Employer";
$tdataovertimes[".printFields"][] = "Division";
$tdataovertimes[".printFields"][] = "AllEmployees";
$tdataovertimes[".printFields"][] = "FromTime";
$tdataovertimes[".printFields"][] = "ToTime";
$tdataovertimes[".printFields"][] = "Reason";
$tdataovertimes[".printFields"][] = "NoMins";
$tdataovertimes[".printFields"][] = "Remarks";
$tdataovertimes[".printFields"][] = "Approved";
$tdataovertimes[".printFields"][] = "Approvedby";
$tdataovertimes[".printFields"][] = "ApprovedDate";
$tdataovertimes[".printFields"][] = "Posted";
$tdataovertimes[".printFields"][] = "DateCreated";
$tdataovertimes[".printFields"][] = "PreparedBy";


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
//	FromTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FromTime";
	$fdata["GoodName"] = "FromTime";
	$fdata["ownerTable"] = "overtimes";
	$fdata["Label"] = GetFieldLabel("overtimes","FromTime");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FromTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FromTime";

	
	
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
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




	$tdataovertimes["FromTime"] = $fdata;
//	ToTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ToTime";
	$fdata["GoodName"] = "ToTime";
	$fdata["ownerTable"] = "overtimes";
	$fdata["Label"] = GetFieldLabel("overtimes","ToTime");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ToTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ToTime";

	
	
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
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




	$tdataovertimes["ToTime"] = $fdata;
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataovertimes["Approvedby"] = $fdata;
//	Posted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Posted";
	$fdata["GoodName"] = "Posted";
	$fdata["ownerTable"] = "overtimes";
	$fdata["Label"] = GetFieldLabel("overtimes","Posted");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

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
	$fdata["Index"] = 8;
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
	$fdata["Index"] = 9;
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
	$fdata["Index"] = 10;
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
	$fdata["Index"] = 11;
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
	$fdata["Index"] = 12;
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
//	AllEmployees
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "AllEmployees";
	$fdata["GoodName"] = "AllEmployees";
	$fdata["ownerTable"] = "overtimes";
	$fdata["Label"] = GetFieldLabel("overtimes","AllEmployees");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AllEmployees";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AllEmployees";

	
	
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




	$tdataovertimes["AllEmployees"] = $fdata;
//	DateOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DateOT";
	$fdata["GoodName"] = "DateOT";
	$fdata["ownerTable"] = "overtimes";
	$fdata["Label"] = GetFieldLabel("overtimes","DateOT");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DateOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DateOT";

	
	
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




	$tdataovertimes["DateOT"] = $fdata;
//	PreparedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "PreparedBy";
	$fdata["GoodName"] = "PreparedBy";
	$fdata["ownerTable"] = "overtimes";
	$fdata["Label"] = GetFieldLabel("overtimes","PreparedBy");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PreparedBy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PreparedBy";

	
	
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




	$tdataovertimes["PreparedBy"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "overtimes";
	$fdata["Label"] = GetFieldLabel("overtimes","Remarks");
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataovertimes["Remarks"] = $fdata;


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
$proto0["m_strFieldList"] = "OtiD,  	DateCreated,  	FromTime,  	ToTime,  	Approved,  	Approvedby,  	Posted,  	NoMins,  	ApprovedDate,  	Reason,  	Employer,  	Division,  	AllEmployees,  	DateOT,  	PreparedBy,  	Remarks";
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
	"m_strName" => "FromTime",
	"m_strTable" => "overtimes",
	"m_srcTableName" => "overtimes"
));

$proto10["m_sql"] = "FromTime";
$proto10["m_srcTableName"] = "overtimes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ToTime",
	"m_strTable" => "overtimes",
	"m_srcTableName" => "overtimes"
));

$proto12["m_sql"] = "ToTime";
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
	"m_strName" => "Posted",
	"m_strTable" => "overtimes",
	"m_srcTableName" => "overtimes"
));

$proto18["m_sql"] = "Posted";
$proto18["m_srcTableName"] = "overtimes";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "NoMins",
	"m_strTable" => "overtimes",
	"m_srcTableName" => "overtimes"
));

$proto20["m_sql"] = "NoMins";
$proto20["m_srcTableName"] = "overtimes";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedDate",
	"m_strTable" => "overtimes",
	"m_srcTableName" => "overtimes"
));

$proto22["m_sql"] = "ApprovedDate";
$proto22["m_srcTableName"] = "overtimes";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Reason",
	"m_strTable" => "overtimes",
	"m_srcTableName" => "overtimes"
));

$proto24["m_sql"] = "Reason";
$proto24["m_srcTableName"] = "overtimes";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "overtimes",
	"m_srcTableName" => "overtimes"
));

$proto26["m_sql"] = "Employer";
$proto26["m_srcTableName"] = "overtimes";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "overtimes",
	"m_srcTableName" => "overtimes"
));

$proto28["m_sql"] = "Division";
$proto28["m_srcTableName"] = "overtimes";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "AllEmployees",
	"m_strTable" => "overtimes",
	"m_srcTableName" => "overtimes"
));

$proto30["m_sql"] = "AllEmployees";
$proto30["m_srcTableName"] = "overtimes";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DateOT",
	"m_strTable" => "overtimes",
	"m_srcTableName" => "overtimes"
));

$proto32["m_sql"] = "DateOT";
$proto32["m_srcTableName"] = "overtimes";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "PreparedBy",
	"m_strTable" => "overtimes",
	"m_srcTableName" => "overtimes"
));

$proto34["m_sql"] = "PreparedBy";
$proto34["m_srcTableName"] = "overtimes";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "overtimes",
	"m_srcTableName" => "overtimes"
));

$proto36["m_sql"] = "Remarks";
$proto36["m_srcTableName"] = "overtimes";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "overtimes";
$proto39["m_srcTableName"] = "overtimes";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "OtiD";
$proto39["m_columns"][] = "DateCreated";
$proto39["m_columns"][] = "FromTime";
$proto39["m_columns"][] = "ToTime";
$proto39["m_columns"][] = "Approved";
$proto39["m_columns"][] = "Approvedby";
$proto39["m_columns"][] = "Posted";
$proto39["m_columns"][] = "NoMins";
$proto39["m_columns"][] = "ApprovedDate";
$proto39["m_columns"][] = "Reason";
$proto39["m_columns"][] = "Employer";
$proto39["m_columns"][] = "Division";
$proto39["m_columns"][] = "AllEmployees";
$proto39["m_columns"][] = "DateOT";
$proto39["m_columns"][] = "PreparedBy";
$proto39["m_columns"][] = "Remarks";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "overtimes";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "overtimes";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

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