<?php
require_once(getabspath("classes/cipherer.php"));




$tdataovertimeapp = array();
	$tdataovertimeapp[".truncateText"] = true;
	$tdataovertimeapp[".NumberOfChars"] = 80;
	$tdataovertimeapp[".ShortName"] = "overtimeapp";
	$tdataovertimeapp[".OwnerID"] = "Superior";
	$tdataovertimeapp[".OriginalTable"] = "overtimefile";

//	field labels
$fieldLabelsovertimeapp = array();
$fieldToolTipsovertimeapp = array();
$pageTitlesovertimeapp = array();
$placeHoldersovertimeapp = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsovertimeapp["English"] = array();
	$fieldToolTipsovertimeapp["English"] = array();
	$placeHoldersovertimeapp["English"] = array();
	$pageTitlesovertimeapp["English"] = array();
	$fieldLabelsovertimeapp["English"]["DateCreated"] = "Date Created";
	$fieldToolTipsovertimeapp["English"]["DateCreated"] = "";
	$placeHoldersovertimeapp["English"]["DateCreated"] = "";
	$fieldLabelsovertimeapp["English"]["FromDateTime"] = "From Date Time";
	$fieldToolTipsovertimeapp["English"]["FromDateTime"] = "";
	$placeHoldersovertimeapp["English"]["FromDateTime"] = "";
	$fieldLabelsovertimeapp["English"]["ToDateTime"] = "To Date Time";
	$fieldToolTipsovertimeapp["English"]["ToDateTime"] = "";
	$placeHoldersovertimeapp["English"]["ToDateTime"] = "";
	$fieldLabelsovertimeapp["English"]["Approved"] = "Approved";
	$fieldToolTipsovertimeapp["English"]["Approved"] = "";
	$placeHoldersovertimeapp["English"]["Approved"] = "";
	$fieldLabelsovertimeapp["English"]["Approvedby"] = "Approvedby";
	$fieldToolTipsovertimeapp["English"]["Approvedby"] = "";
	$placeHoldersovertimeapp["English"]["Approvedby"] = "";
	$fieldLabelsovertimeapp["English"]["ApprovedTime"] = "Approved Time";
	$fieldToolTipsovertimeapp["English"]["ApprovedTime"] = "";
	$placeHoldersovertimeapp["English"]["ApprovedTime"] = "";
	$fieldLabelsovertimeapp["English"]["Posted"] = "Posted";
	$fieldToolTipsovertimeapp["English"]["Posted"] = "";
	$placeHoldersovertimeapp["English"]["Posted"] = "";
	$fieldLabelsovertimeapp["English"]["NoMins"] = "No Mins";
	$fieldToolTipsovertimeapp["English"]["NoMins"] = "";
	$placeHoldersovertimeapp["English"]["NoMins"] = "";
	$fieldLabelsovertimeapp["English"]["ApprovedDate"] = "Approved Date";
	$fieldToolTipsovertimeapp["English"]["ApprovedDate"] = "";
	$placeHoldersovertimeapp["English"]["ApprovedDate"] = "";
	$fieldLabelsovertimeapp["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipsovertimeapp["English"]["EmployeeID"] = "";
	$placeHoldersovertimeapp["English"]["EmployeeID"] = "";
	$fieldLabelsovertimeapp["English"]["Reason"] = "Reason";
	$fieldToolTipsovertimeapp["English"]["Reason"] = "";
	$placeHoldersovertimeapp["English"]["Reason"] = "";
	$fieldLabelsovertimeapp["English"]["ItiD"] = "Iti D";
	$fieldToolTipsovertimeapp["English"]["ItiD"] = "";
	$placeHoldersovertimeapp["English"]["ItiD"] = "";
	$fieldLabelsovertimeapp["English"]["Superior"] = "Superior";
	$fieldToolTipsovertimeapp["English"]["Superior"] = "";
	$placeHoldersovertimeapp["English"]["Superior"] = "";
	$fieldLabelsovertimeapp["English"]["Locked"] = "Locked";
	$fieldToolTipsovertimeapp["English"]["Locked"] = "";
	$placeHoldersovertimeapp["English"]["Locked"] = "";
	if (count($fieldToolTipsovertimeapp["English"]))
		$tdataovertimeapp[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsovertimeapp[""] = array();
	$fieldToolTipsovertimeapp[""] = array();
	$placeHoldersovertimeapp[""] = array();
	$pageTitlesovertimeapp[""] = array();
	if (count($fieldToolTipsovertimeapp[""]))
		$tdataovertimeapp[".isUseToolTips"] = true;
}


	$tdataovertimeapp[".NCSearch"] = true;



$tdataovertimeapp[".shortTableName"] = "overtimeapp";
$tdataovertimeapp[".nSecOptions"] = 1;
$tdataovertimeapp[".recsPerRowPrint"] = 1;
$tdataovertimeapp[".mainTableOwnerID"] = "Superior";
$tdataovertimeapp[".moveNext"] = 1;
$tdataovertimeapp[".entityType"] = 1;

$tdataovertimeapp[".strOriginalTableName"] = "overtimefile";

	



$tdataovertimeapp[".showAddInPopup"] = false;

$tdataovertimeapp[".showEditInPopup"] = false;

$tdataovertimeapp[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataovertimeapp[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataovertimeapp[".fieldsForRegister"] = array();

$tdataovertimeapp[".listAjax"] = false;

	$tdataovertimeapp[".audit"] = false;

	$tdataovertimeapp[".locking"] = false;

$tdataovertimeapp[".edit"] = true;
$tdataovertimeapp[".afterEditAction"] = 1;
$tdataovertimeapp[".closePopupAfterEdit"] = 1;
$tdataovertimeapp[".afterEditActionDetTable"] = "";


$tdataovertimeapp[".list"] = true;

$tdataovertimeapp[".inlineEdit"] = true;

$tdataovertimeapp[".updateSelected"] = true;

$tdataovertimeapp[".reorderRecordsByHeader"] = true;


$tdataovertimeapp[".exportFormatting"] = 2;
$tdataovertimeapp[".exportDelimiter"] = ",";
		
$tdataovertimeapp[".view"] = true;

$tdataovertimeapp[".import"] = true;

$tdataovertimeapp[".exportTo"] = true;

$tdataovertimeapp[".printFriendly"] = true;

$tdataovertimeapp[".delete"] = true;

$tdataovertimeapp[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataovertimeapp[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataovertimeapp[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataovertimeapp[".searchSaving"] = false;
//

$tdataovertimeapp[".showSearchPanel"] = true;
		$tdataovertimeapp[".flexibleSearch"] = true;

$tdataovertimeapp[".isUseAjaxSuggest"] = true;

$tdataovertimeapp[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																				

$tdataovertimeapp[".ajaxCodeSnippetAdded"] = false;

$tdataovertimeapp[".buttonsAdded"] = false;

$tdataovertimeapp[".addPageEvents"] = true;

// use timepicker for search panel
$tdataovertimeapp[".isUseTimeForSearch"] = false;





$tdataovertimeapp[".allSearchFields"] = array();
$tdataovertimeapp[".filterFields"] = array();
$tdataovertimeapp[".requiredSearchFields"] = array();

$tdataovertimeapp[".allSearchFields"][] = "ItiD";
	$tdataovertimeapp[".allSearchFields"][] = "DateCreated";
	$tdataovertimeapp[".allSearchFields"][] = "EmployeeID";
	$tdataovertimeapp[".allSearchFields"][] = "Reason";
	$tdataovertimeapp[".allSearchFields"][] = "FromDateTime";
	$tdataovertimeapp[".allSearchFields"][] = "ToDateTime";
	$tdataovertimeapp[".allSearchFields"][] = "NoMins";
	$tdataovertimeapp[".allSearchFields"][] = "Approved";
	$tdataovertimeapp[".allSearchFields"][] = "Approvedby";
	$tdataovertimeapp[".allSearchFields"][] = "ApprovedDate";
	$tdataovertimeapp[".allSearchFields"][] = "ApprovedTime";
	$tdataovertimeapp[".allSearchFields"][] = "Posted";
	$tdataovertimeapp[".allSearchFields"][] = "Locked";
	$tdataovertimeapp[".allSearchFields"][] = "Superior";
	

$tdataovertimeapp[".googleLikeFields"] = array();
$tdataovertimeapp[".googleLikeFields"][] = "ItiD";
$tdataovertimeapp[".googleLikeFields"][] = "DateCreated";
$tdataovertimeapp[".googleLikeFields"][] = "FromDateTime";
$tdataovertimeapp[".googleLikeFields"][] = "ToDateTime";
$tdataovertimeapp[".googleLikeFields"][] = "Approved";
$tdataovertimeapp[".googleLikeFields"][] = "Approvedby";
$tdataovertimeapp[".googleLikeFields"][] = "ApprovedTime";
$tdataovertimeapp[".googleLikeFields"][] = "Posted";
$tdataovertimeapp[".googleLikeFields"][] = "NoMins";
$tdataovertimeapp[".googleLikeFields"][] = "ApprovedDate";
$tdataovertimeapp[".googleLikeFields"][] = "EmployeeID";
$tdataovertimeapp[".googleLikeFields"][] = "Reason";
$tdataovertimeapp[".googleLikeFields"][] = "Superior";
$tdataovertimeapp[".googleLikeFields"][] = "Locked";


$tdataovertimeapp[".advSearchFields"] = array();
$tdataovertimeapp[".advSearchFields"][] = "ItiD";
$tdataovertimeapp[".advSearchFields"][] = "DateCreated";
$tdataovertimeapp[".advSearchFields"][] = "EmployeeID";
$tdataovertimeapp[".advSearchFields"][] = "Reason";
$tdataovertimeapp[".advSearchFields"][] = "FromDateTime";
$tdataovertimeapp[".advSearchFields"][] = "ToDateTime";
$tdataovertimeapp[".advSearchFields"][] = "NoMins";
$tdataovertimeapp[".advSearchFields"][] = "Approved";
$tdataovertimeapp[".advSearchFields"][] = "Approvedby";
$tdataovertimeapp[".advSearchFields"][] = "ApprovedDate";
$tdataovertimeapp[".advSearchFields"][] = "ApprovedTime";
$tdataovertimeapp[".advSearchFields"][] = "Posted";
$tdataovertimeapp[".advSearchFields"][] = "Locked";
$tdataovertimeapp[".advSearchFields"][] = "Superior";

$tdataovertimeapp[".tableType"] = "list";

$tdataovertimeapp[".printerPageOrientation"] = 0;
$tdataovertimeapp[".nPrinterPageScale"] = 100;

$tdataovertimeapp[".nPrinterSplitRecords"] = 40;

$tdataovertimeapp[".nPrinterPDFSplitRecords"] = 40;



$tdataovertimeapp[".geocodingEnabled"] = false;





$tdataovertimeapp[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataovertimeapp[".pageSize"] = 20;

$tdataovertimeapp[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataovertimeapp[".strOrderBy"] = $tstrOrderBy;

$tdataovertimeapp[".orderindexes"] = array();

$tdataovertimeapp[".sqlHead"] = "SELECT ItiD,  	DateCreated,  	FromDateTime,  	ToDateTime,  	Approved,  	Approvedby,  	ApprovedTime,  	Posted,  	NoMins,  	ApprovedDate,  	EmployeeID,  	Reason,  	Superior,  	Locked";
$tdataovertimeapp[".sqlFrom"] = "FROM overtimefile";
$tdataovertimeapp[".sqlWhereExpr"] = "";
$tdataovertimeapp[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataovertimeapp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataovertimeapp[".arrGroupsPerPage"] = $arrGPP;

$tdataovertimeapp[".highlightSearchResults"] = true;

$tableKeysovertimeapp = array();
$tableKeysovertimeapp[] = "ItiD";
$tdataovertimeapp[".Keys"] = $tableKeysovertimeapp;

$tdataovertimeapp[".listFields"] = array();
$tdataovertimeapp[".listFields"][] = "ItiD";
$tdataovertimeapp[".listFields"][] = "DateCreated";
$tdataovertimeapp[".listFields"][] = "EmployeeID";
$tdataovertimeapp[".listFields"][] = "Reason";
$tdataovertimeapp[".listFields"][] = "FromDateTime";
$tdataovertimeapp[".listFields"][] = "ToDateTime";
$tdataovertimeapp[".listFields"][] = "NoMins";
$tdataovertimeapp[".listFields"][] = "Approved";
$tdataovertimeapp[".listFields"][] = "Approvedby";
$tdataovertimeapp[".listFields"][] = "ApprovedDate";
$tdataovertimeapp[".listFields"][] = "ApprovedTime";
$tdataovertimeapp[".listFields"][] = "Posted";
$tdataovertimeapp[".listFields"][] = "Locked";
$tdataovertimeapp[".listFields"][] = "Superior";

$tdataovertimeapp[".hideMobileList"] = array();


$tdataovertimeapp[".viewFields"] = array();
$tdataovertimeapp[".viewFields"][] = "ItiD";
$tdataovertimeapp[".viewFields"][] = "DateCreated";
$tdataovertimeapp[".viewFields"][] = "EmployeeID";
$tdataovertimeapp[".viewFields"][] = "Reason";
$tdataovertimeapp[".viewFields"][] = "FromDateTime";
$tdataovertimeapp[".viewFields"][] = "ToDateTime";
$tdataovertimeapp[".viewFields"][] = "NoMins";
$tdataovertimeapp[".viewFields"][] = "Approved";
$tdataovertimeapp[".viewFields"][] = "Approvedby";
$tdataovertimeapp[".viewFields"][] = "ApprovedDate";
$tdataovertimeapp[".viewFields"][] = "ApprovedTime";
$tdataovertimeapp[".viewFields"][] = "Posted";
$tdataovertimeapp[".viewFields"][] = "Locked";
$tdataovertimeapp[".viewFields"][] = "Superior";

$tdataovertimeapp[".addFields"] = array();
$tdataovertimeapp[".addFields"][] = "Locked";

$tdataovertimeapp[".masterListFields"] = array();
$tdataovertimeapp[".masterListFields"][] = "ItiD";
$tdataovertimeapp[".masterListFields"][] = "DateCreated";
$tdataovertimeapp[".masterListFields"][] = "EmployeeID";
$tdataovertimeapp[".masterListFields"][] = "Reason";
$tdataovertimeapp[".masterListFields"][] = "FromDateTime";
$tdataovertimeapp[".masterListFields"][] = "ToDateTime";
$tdataovertimeapp[".masterListFields"][] = "NoMins";
$tdataovertimeapp[".masterListFields"][] = "Approved";
$tdataovertimeapp[".masterListFields"][] = "Approvedby";
$tdataovertimeapp[".masterListFields"][] = "ApprovedDate";
$tdataovertimeapp[".masterListFields"][] = "ApprovedTime";
$tdataovertimeapp[".masterListFields"][] = "Posted";
$tdataovertimeapp[".masterListFields"][] = "Locked";
$tdataovertimeapp[".masterListFields"][] = "Superior";

$tdataovertimeapp[".inlineAddFields"] = array();
$tdataovertimeapp[".inlineAddFields"][] = "Locked";

$tdataovertimeapp[".editFields"] = array();
$tdataovertimeapp[".editFields"][] = "ItiD";
$tdataovertimeapp[".editFields"][] = "DateCreated";
$tdataovertimeapp[".editFields"][] = "EmployeeID";
$tdataovertimeapp[".editFields"][] = "Reason";
$tdataovertimeapp[".editFields"][] = "FromDateTime";
$tdataovertimeapp[".editFields"][] = "ToDateTime";
$tdataovertimeapp[".editFields"][] = "NoMins";
$tdataovertimeapp[".editFields"][] = "Approved";
$tdataovertimeapp[".editFields"][] = "Approvedby";
$tdataovertimeapp[".editFields"][] = "ApprovedDate";
$tdataovertimeapp[".editFields"][] = "ApprovedTime";
$tdataovertimeapp[".editFields"][] = "Posted";
$tdataovertimeapp[".editFields"][] = "Locked";
$tdataovertimeapp[".editFields"][] = "Superior";

$tdataovertimeapp[".inlineEditFields"] = array();
$tdataovertimeapp[".inlineEditFields"][] = "ItiD";
$tdataovertimeapp[".inlineEditFields"][] = "DateCreated";
$tdataovertimeapp[".inlineEditFields"][] = "EmployeeID";
$tdataovertimeapp[".inlineEditFields"][] = "Reason";
$tdataovertimeapp[".inlineEditFields"][] = "FromDateTime";
$tdataovertimeapp[".inlineEditFields"][] = "ToDateTime";
$tdataovertimeapp[".inlineEditFields"][] = "NoMins";
$tdataovertimeapp[".inlineEditFields"][] = "Approved";
$tdataovertimeapp[".inlineEditFields"][] = "Approvedby";
$tdataovertimeapp[".inlineEditFields"][] = "ApprovedDate";
$tdataovertimeapp[".inlineEditFields"][] = "ApprovedTime";
$tdataovertimeapp[".inlineEditFields"][] = "Posted";
$tdataovertimeapp[".inlineEditFields"][] = "Locked";
$tdataovertimeapp[".inlineEditFields"][] = "Superior";

$tdataovertimeapp[".updateSelectedFields"] = array();
$tdataovertimeapp[".updateSelectedFields"][] = "ItiD";
$tdataovertimeapp[".updateSelectedFields"][] = "DateCreated";
$tdataovertimeapp[".updateSelectedFields"][] = "EmployeeID";
$tdataovertimeapp[".updateSelectedFields"][] = "Reason";
$tdataovertimeapp[".updateSelectedFields"][] = "FromDateTime";
$tdataovertimeapp[".updateSelectedFields"][] = "ToDateTime";
$tdataovertimeapp[".updateSelectedFields"][] = "NoMins";
$tdataovertimeapp[".updateSelectedFields"][] = "Approved";
$tdataovertimeapp[".updateSelectedFields"][] = "Approvedby";
$tdataovertimeapp[".updateSelectedFields"][] = "ApprovedDate";
$tdataovertimeapp[".updateSelectedFields"][] = "ApprovedTime";
$tdataovertimeapp[".updateSelectedFields"][] = "Posted";


$tdataovertimeapp[".exportFields"] = array();
$tdataovertimeapp[".exportFields"][] = "ItiD";
$tdataovertimeapp[".exportFields"][] = "DateCreated";
$tdataovertimeapp[".exportFields"][] = "EmployeeID";
$tdataovertimeapp[".exportFields"][] = "Reason";
$tdataovertimeapp[".exportFields"][] = "FromDateTime";
$tdataovertimeapp[".exportFields"][] = "ToDateTime";
$tdataovertimeapp[".exportFields"][] = "NoMins";
$tdataovertimeapp[".exportFields"][] = "Approved";
$tdataovertimeapp[".exportFields"][] = "Approvedby";
$tdataovertimeapp[".exportFields"][] = "ApprovedDate";
$tdataovertimeapp[".exportFields"][] = "ApprovedTime";
$tdataovertimeapp[".exportFields"][] = "Posted";
$tdataovertimeapp[".exportFields"][] = "Locked";
$tdataovertimeapp[".exportFields"][] = "Superior";

$tdataovertimeapp[".importFields"] = array();
$tdataovertimeapp[".importFields"][] = "ItiD";
$tdataovertimeapp[".importFields"][] = "DateCreated";
$tdataovertimeapp[".importFields"][] = "FromDateTime";
$tdataovertimeapp[".importFields"][] = "ToDateTime";
$tdataovertimeapp[".importFields"][] = "Approved";
$tdataovertimeapp[".importFields"][] = "Approvedby";
$tdataovertimeapp[".importFields"][] = "ApprovedTime";
$tdataovertimeapp[".importFields"][] = "Posted";
$tdataovertimeapp[".importFields"][] = "NoMins";
$tdataovertimeapp[".importFields"][] = "ApprovedDate";
$tdataovertimeapp[".importFields"][] = "EmployeeID";
$tdataovertimeapp[".importFields"][] = "Reason";
$tdataovertimeapp[".importFields"][] = "Superior";
$tdataovertimeapp[".importFields"][] = "Locked";

$tdataovertimeapp[".printFields"] = array();
$tdataovertimeapp[".printFields"][] = "ItiD";
$tdataovertimeapp[".printFields"][] = "DateCreated";
$tdataovertimeapp[".printFields"][] = "EmployeeID";
$tdataovertimeapp[".printFields"][] = "Reason";
$tdataovertimeapp[".printFields"][] = "FromDateTime";
$tdataovertimeapp[".printFields"][] = "ToDateTime";
$tdataovertimeapp[".printFields"][] = "NoMins";
$tdataovertimeapp[".printFields"][] = "Approved";
$tdataovertimeapp[".printFields"][] = "Approvedby";
$tdataovertimeapp[".printFields"][] = "ApprovedDate";
$tdataovertimeapp[".printFields"][] = "ApprovedTime";
$tdataovertimeapp[".printFields"][] = "Posted";
$tdataovertimeapp[".printFields"][] = "Locked";
$tdataovertimeapp[".printFields"][] = "Superior";


//	ItiD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ItiD";
	$fdata["GoodName"] = "ItiD";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimeapp","ItiD");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ItiD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ItiD";

	
	
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 87;

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




	$tdataovertimeapp["ItiD"] = $fdata;
//	DateCreated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DateCreated";
	$fdata["GoodName"] = "DateCreated";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimeapp","DateCreated");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdataovertimeapp["DateCreated"] = $fdata;
//	FromDateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FromDateTime";
	$fdata["GoodName"] = "FromDateTime";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimeapp","FromDateTime");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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

	$edata = array("EditFormat" => "Readonly");

		$edata["ShowTime"] = true;

	
		
	


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




	$tdataovertimeapp["FromDateTime"] = $fdata;
//	ToDateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ToDateTime";
	$fdata["GoodName"] = "ToDateTime";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimeapp","ToDateTime");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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

	$edata = array("EditFormat" => "Readonly");

		$edata["ShowTime"] = true;

	
		
	


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




	$tdataovertimeapp["ToDateTime"] = $fdata;
//	Approved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Approved";
	$fdata["GoodName"] = "Approved";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimeapp","Approved");
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




	$tdataovertimeapp["Approved"] = $fdata;
//	Approvedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Approvedby";
	$fdata["GoodName"] = "Approvedby";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimeapp","Approvedby");
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




	$tdataovertimeapp["Approvedby"] = $fdata;
//	ApprovedTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ApprovedTime";
	$fdata["GoodName"] = "ApprovedTime";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimeapp","ApprovedTime");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataovertimeapp["ApprovedTime"] = $fdata;
//	Posted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Posted";
	$fdata["GoodName"] = "Posted";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimeapp","Posted");
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

	
	
	
	
	
	
		$edata["controlWidth"] = 57;

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




	$tdataovertimeapp["Posted"] = $fdata;
//	NoMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "NoMins";
	$fdata["GoodName"] = "NoMins";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimeapp","NoMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdataovertimeapp["NoMins"] = $fdata;
//	ApprovedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ApprovedDate";
	$fdata["GoodName"] = "ApprovedDate";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimeapp","ApprovedDate");
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

	
	
		$edata["DateEditType"] = 11;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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




	$tdataovertimeapp["ApprovedDate"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimeapp","EmployeeID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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




	$tdataovertimeapp["EmployeeID"] = $fdata;
//	Reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Reason";
	$fdata["GoodName"] = "Reason";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimeapp","Reason");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataovertimeapp["Reason"] = $fdata;
//	Superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Superior";
	$fdata["GoodName"] = "Superior";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimeapp","Superior");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Superior";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Superior";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 187;

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




	$tdataovertimeapp["Superior"] = $fdata;
//	Locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Locked";
	$fdata["GoodName"] = "Locked";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimeapp","Locked");
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

		$fdata["strField"] = "Locked";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Locked";

	
	
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




	$tdataovertimeapp["Locked"] = $fdata;


$tables_data["overtimeapp"]=&$tdataovertimeapp;
$field_labels["overtimeapp"] = &$fieldLabelsovertimeapp;
$fieldToolTips["overtimeapp"] = &$fieldToolTipsovertimeapp;
$placeHolders["overtimeapp"] = &$placeHoldersovertimeapp;
$page_titles["overtimeapp"] = &$pageTitlesovertimeapp;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["overtimeapp"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["overtimeapp"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_overtimeapp()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ItiD,  	DateCreated,  	FromDateTime,  	ToDateTime,  	Approved,  	Approvedby,  	ApprovedTime,  	Posted,  	NoMins,  	ApprovedDate,  	EmployeeID,  	Reason,  	Superior,  	Locked";
$proto0["m_strFrom"] = "FROM overtimefile";
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
	"m_strName" => "ItiD",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimeapp"
));

$proto6["m_sql"] = "ItiD";
$proto6["m_srcTableName"] = "overtimeapp";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DateCreated",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimeapp"
));

$proto8["m_sql"] = "DateCreated";
$proto8["m_srcTableName"] = "overtimeapp";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDateTime",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimeapp"
));

$proto10["m_sql"] = "FromDateTime";
$proto10["m_srcTableName"] = "overtimeapp";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDateTime",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimeapp"
));

$proto12["m_sql"] = "ToDateTime";
$proto12["m_srcTableName"] = "overtimeapp";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Approved",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimeapp"
));

$proto14["m_sql"] = "Approved";
$proto14["m_srcTableName"] = "overtimeapp";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Approvedby",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimeapp"
));

$proto16["m_sql"] = "Approvedby";
$proto16["m_srcTableName"] = "overtimeapp";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedTime",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimeapp"
));

$proto18["m_sql"] = "ApprovedTime";
$proto18["m_srcTableName"] = "overtimeapp";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Posted",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimeapp"
));

$proto20["m_sql"] = "Posted";
$proto20["m_srcTableName"] = "overtimeapp";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "NoMins",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimeapp"
));

$proto22["m_sql"] = "NoMins";
$proto22["m_srcTableName"] = "overtimeapp";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedDate",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimeapp"
));

$proto24["m_sql"] = "ApprovedDate";
$proto24["m_srcTableName"] = "overtimeapp";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimeapp"
));

$proto26["m_sql"] = "EmployeeID";
$proto26["m_srcTableName"] = "overtimeapp";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Reason",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimeapp"
));

$proto28["m_sql"] = "Reason";
$proto28["m_srcTableName"] = "overtimeapp";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimeapp"
));

$proto30["m_sql"] = "Superior";
$proto30["m_srcTableName"] = "overtimeapp";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Locked",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimeapp"
));

$proto32["m_sql"] = "Locked";
$proto32["m_srcTableName"] = "overtimeapp";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "overtimefile";
$proto35["m_srcTableName"] = "overtimeapp";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "ItiD";
$proto35["m_columns"][] = "DateCreated";
$proto35["m_columns"][] = "FromDateTime";
$proto35["m_columns"][] = "ToDateTime";
$proto35["m_columns"][] = "Approved";
$proto35["m_columns"][] = "Approvedby";
$proto35["m_columns"][] = "ApprovedTime";
$proto35["m_columns"][] = "Posted";
$proto35["m_columns"][] = "NoMins";
$proto35["m_columns"][] = "ApprovedDate";
$proto35["m_columns"][] = "EmployeeID";
$proto35["m_columns"][] = "Reason";
$proto35["m_columns"][] = "Superior";
$proto35["m_columns"][] = "Locked";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "overtimefile";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "overtimeapp";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="overtimeapp";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_overtimeapp = createSqlQuery_overtimeapp();


	
		;

														

$tdataovertimeapp[".sqlquery"] = $queryData_overtimeapp;

include_once(getabspath("include/overtimeapp_events.php"));
$tableEvents["overtimeapp"] = new eventclass_overtimeapp;
$tdataovertimeapp[".hasEvents"] = true;

?>