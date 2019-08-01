<?php
require_once(getabspath("classes/cipherer.php"));




$tdataovertimefile = array();
	$tdataovertimefile[".truncateText"] = true;
	$tdataovertimefile[".NumberOfChars"] = 80;
	$tdataovertimefile[".ShortName"] = "overtimefile";
	$tdataovertimefile[".OwnerID"] = "EmployeeID";
	$tdataovertimefile[".OriginalTable"] = "overtimefile";

//	field labels
$fieldLabelsovertimefile = array();
$fieldToolTipsovertimefile = array();
$pageTitlesovertimefile = array();
$placeHoldersovertimefile = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsovertimefile["English"] = array();
	$fieldToolTipsovertimefile["English"] = array();
	$placeHoldersovertimefile["English"] = array();
	$pageTitlesovertimefile["English"] = array();
	$fieldLabelsovertimefile["English"]["DateCreated"] = "Date Created";
	$fieldToolTipsovertimefile["English"]["DateCreated"] = "";
	$placeHoldersovertimefile["English"]["DateCreated"] = "";
	$fieldLabelsovertimefile["English"]["FromDateTime"] = "From Date Time";
	$fieldToolTipsovertimefile["English"]["FromDateTime"] = "";
	$placeHoldersovertimefile["English"]["FromDateTime"] = "";
	$fieldLabelsovertimefile["English"]["ToDateTime"] = "To Date Time";
	$fieldToolTipsovertimefile["English"]["ToDateTime"] = "";
	$placeHoldersovertimefile["English"]["ToDateTime"] = "";
	$fieldLabelsovertimefile["English"]["Approved"] = "Approved";
	$fieldToolTipsovertimefile["English"]["Approved"] = "";
	$placeHoldersovertimefile["English"]["Approved"] = "";
	$fieldLabelsovertimefile["English"]["Approvedby"] = "Approvedby";
	$fieldToolTipsovertimefile["English"]["Approvedby"] = "";
	$placeHoldersovertimefile["English"]["Approvedby"] = "";
	$fieldLabelsovertimefile["English"]["ApprovedTime"] = "Approved Time";
	$fieldToolTipsovertimefile["English"]["ApprovedTime"] = "";
	$placeHoldersovertimefile["English"]["ApprovedTime"] = "";
	$fieldLabelsovertimefile["English"]["Posted"] = "Posted";
	$fieldToolTipsovertimefile["English"]["Posted"] = "";
	$placeHoldersovertimefile["English"]["Posted"] = "";
	$fieldLabelsovertimefile["English"]["NoMins"] = "No Mins";
	$fieldToolTipsovertimefile["English"]["NoMins"] = "";
	$placeHoldersovertimefile["English"]["NoMins"] = "";
	$fieldLabelsovertimefile["English"]["ApprovedDate"] = "Approved Date";
	$fieldToolTipsovertimefile["English"]["ApprovedDate"] = "";
	$placeHoldersovertimefile["English"]["ApprovedDate"] = "";
	$fieldLabelsovertimefile["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipsovertimefile["English"]["EmployeeID"] = "";
	$placeHoldersovertimefile["English"]["EmployeeID"] = "";
	$fieldLabelsovertimefile["English"]["Reason"] = "Reason";
	$fieldToolTipsovertimefile["English"]["Reason"] = "";
	$placeHoldersovertimefile["English"]["Reason"] = "";
	$fieldLabelsovertimefile["English"]["ItiD"] = "Iti D";
	$fieldToolTipsovertimefile["English"]["ItiD"] = "";
	$placeHoldersovertimefile["English"]["ItiD"] = "";
	$fieldLabelsovertimefile["English"]["Superior"] = "Superior";
	$fieldToolTipsovertimefile["English"]["Superior"] = "";
	$placeHoldersovertimefile["English"]["Superior"] = "";
	$fieldLabelsovertimefile["English"]["Locked"] = "Locked";
	$fieldToolTipsovertimefile["English"]["Locked"] = "";
	$placeHoldersovertimefile["English"]["Locked"] = "";
	if (count($fieldToolTipsovertimefile["English"]))
		$tdataovertimefile[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsovertimefile[""] = array();
	$fieldToolTipsovertimefile[""] = array();
	$placeHoldersovertimefile[""] = array();
	$pageTitlesovertimefile[""] = array();
	if (count($fieldToolTipsovertimefile[""]))
		$tdataovertimefile[".isUseToolTips"] = true;
}


	$tdataovertimefile[".NCSearch"] = true;



$tdataovertimefile[".shortTableName"] = "overtimefile";
$tdataovertimefile[".nSecOptions"] = 1;
$tdataovertimefile[".recsPerRowPrint"] = 1;
$tdataovertimefile[".mainTableOwnerID"] = "EmployeeID";
$tdataovertimefile[".moveNext"] = 1;
$tdataovertimefile[".entityType"] = 0;

$tdataovertimefile[".strOriginalTableName"] = "overtimefile";

	



$tdataovertimefile[".showAddInPopup"] = false;

$tdataovertimefile[".showEditInPopup"] = false;

$tdataovertimefile[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataovertimefile[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataovertimefile[".fieldsForRegister"] = array();

$tdataovertimefile[".listAjax"] = false;

	$tdataovertimefile[".audit"] = false;

	$tdataovertimefile[".locking"] = false;

$tdataovertimefile[".edit"] = true;
$tdataovertimefile[".afterEditAction"] = 1;
$tdataovertimefile[".closePopupAfterEdit"] = 1;
$tdataovertimefile[".afterEditActionDetTable"] = "";

$tdataovertimefile[".add"] = true;
$tdataovertimefile[".afterAddAction"] = 1;
$tdataovertimefile[".closePopupAfterAdd"] = 1;
$tdataovertimefile[".afterAddActionDetTable"] = "";

$tdataovertimefile[".list"] = true;

$tdataovertimefile[".inlineEdit"] = true;


$tdataovertimefile[".reorderRecordsByHeader"] = true;


$tdataovertimefile[".exportFormatting"] = 2;
$tdataovertimefile[".exportDelimiter"] = ",";
		
$tdataovertimefile[".inlineAdd"] = true;
$tdataovertimefile[".view"] = true;

$tdataovertimefile[".import"] = true;

$tdataovertimefile[".exportTo"] = true;

$tdataovertimefile[".printFriendly"] = true;

$tdataovertimefile[".delete"] = true;

$tdataovertimefile[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataovertimefile[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataovertimefile[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataovertimefile[".searchSaving"] = false;
//

$tdataovertimefile[".showSearchPanel"] = true;
		$tdataovertimefile[".flexibleSearch"] = true;

$tdataovertimefile[".isUseAjaxSuggest"] = true;

$tdataovertimefile[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																				

$tdataovertimefile[".ajaxCodeSnippetAdded"] = false;

$tdataovertimefile[".buttonsAdded"] = false;

$tdataovertimefile[".addPageEvents"] = true;

// use timepicker for search panel
$tdataovertimefile[".isUseTimeForSearch"] = false;





$tdataovertimefile[".allSearchFields"] = array();
$tdataovertimefile[".filterFields"] = array();
$tdataovertimefile[".requiredSearchFields"] = array();

$tdataovertimefile[".allSearchFields"][] = "ItiD";
	$tdataovertimefile[".allSearchFields"][] = "DateCreated";
	$tdataovertimefile[".allSearchFields"][] = "EmployeeID";
	$tdataovertimefile[".allSearchFields"][] = "Reason";
	$tdataovertimefile[".allSearchFields"][] = "FromDateTime";
	$tdataovertimefile[".allSearchFields"][] = "ToDateTime";
	$tdataovertimefile[".allSearchFields"][] = "NoMins";
	$tdataovertimefile[".allSearchFields"][] = "Approved";
	$tdataovertimefile[".allSearchFields"][] = "Approvedby";
	$tdataovertimefile[".allSearchFields"][] = "ApprovedDate";
	$tdataovertimefile[".allSearchFields"][] = "ApprovedTime";
	$tdataovertimefile[".allSearchFields"][] = "Posted";
	$tdataovertimefile[".allSearchFields"][] = "Locked";
	$tdataovertimefile[".allSearchFields"][] = "Superior";
	

$tdataovertimefile[".googleLikeFields"] = array();
$tdataovertimefile[".googleLikeFields"][] = "ItiD";
$tdataovertimefile[".googleLikeFields"][] = "DateCreated";
$tdataovertimefile[".googleLikeFields"][] = "FromDateTime";
$tdataovertimefile[".googleLikeFields"][] = "ToDateTime";
$tdataovertimefile[".googleLikeFields"][] = "Approved";
$tdataovertimefile[".googleLikeFields"][] = "Approvedby";
$tdataovertimefile[".googleLikeFields"][] = "ApprovedTime";
$tdataovertimefile[".googleLikeFields"][] = "Posted";
$tdataovertimefile[".googleLikeFields"][] = "NoMins";
$tdataovertimefile[".googleLikeFields"][] = "ApprovedDate";
$tdataovertimefile[".googleLikeFields"][] = "EmployeeID";
$tdataovertimefile[".googleLikeFields"][] = "Reason";
$tdataovertimefile[".googleLikeFields"][] = "Superior";
$tdataovertimefile[".googleLikeFields"][] = "Locked";


$tdataovertimefile[".advSearchFields"] = array();
$tdataovertimefile[".advSearchFields"][] = "ItiD";
$tdataovertimefile[".advSearchFields"][] = "DateCreated";
$tdataovertimefile[".advSearchFields"][] = "EmployeeID";
$tdataovertimefile[".advSearchFields"][] = "Reason";
$tdataovertimefile[".advSearchFields"][] = "FromDateTime";
$tdataovertimefile[".advSearchFields"][] = "ToDateTime";
$tdataovertimefile[".advSearchFields"][] = "NoMins";
$tdataovertimefile[".advSearchFields"][] = "Approved";
$tdataovertimefile[".advSearchFields"][] = "Approvedby";
$tdataovertimefile[".advSearchFields"][] = "ApprovedDate";
$tdataovertimefile[".advSearchFields"][] = "ApprovedTime";
$tdataovertimefile[".advSearchFields"][] = "Posted";
$tdataovertimefile[".advSearchFields"][] = "Locked";
$tdataovertimefile[".advSearchFields"][] = "Superior";

$tdataovertimefile[".tableType"] = "list";

$tdataovertimefile[".printerPageOrientation"] = 0;
$tdataovertimefile[".nPrinterPageScale"] = 100;

$tdataovertimefile[".nPrinterSplitRecords"] = 40;

$tdataovertimefile[".nPrinterPDFSplitRecords"] = 40;



$tdataovertimefile[".geocodingEnabled"] = false;





$tdataovertimefile[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataovertimefile[".pageSize"] = 20;

$tdataovertimefile[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataovertimefile[".strOrderBy"] = $tstrOrderBy;

$tdataovertimefile[".orderindexes"] = array();

$tdataovertimefile[".sqlHead"] = "SELECT ItiD,  	DateCreated,  	FromDateTime,  	ToDateTime,  	Approved,  	Approvedby,  	ApprovedTime,  	Posted,  	NoMins,  	ApprovedDate,  	EmployeeID,  	Reason,  	Superior,  	Locked";
$tdataovertimefile[".sqlFrom"] = "FROM overtimefile";
$tdataovertimefile[".sqlWhereExpr"] = "";
$tdataovertimefile[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataovertimefile[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataovertimefile[".arrGroupsPerPage"] = $arrGPP;

$tdataovertimefile[".highlightSearchResults"] = true;

$tableKeysovertimefile = array();
$tableKeysovertimefile[] = "ItiD";
$tdataovertimefile[".Keys"] = $tableKeysovertimefile;

$tdataovertimefile[".listFields"] = array();
$tdataovertimefile[".listFields"][] = "ItiD";
$tdataovertimefile[".listFields"][] = "DateCreated";
$tdataovertimefile[".listFields"][] = "EmployeeID";
$tdataovertimefile[".listFields"][] = "Reason";
$tdataovertimefile[".listFields"][] = "FromDateTime";
$tdataovertimefile[".listFields"][] = "ToDateTime";
$tdataovertimefile[".listFields"][] = "NoMins";
$tdataovertimefile[".listFields"][] = "Approved";
$tdataovertimefile[".listFields"][] = "Approvedby";
$tdataovertimefile[".listFields"][] = "ApprovedDate";
$tdataovertimefile[".listFields"][] = "ApprovedTime";
$tdataovertimefile[".listFields"][] = "Posted";
$tdataovertimefile[".listFields"][] = "Locked";
$tdataovertimefile[".listFields"][] = "Superior";

$tdataovertimefile[".hideMobileList"] = array();


$tdataovertimefile[".viewFields"] = array();
$tdataovertimefile[".viewFields"][] = "ItiD";
$tdataovertimefile[".viewFields"][] = "DateCreated";
$tdataovertimefile[".viewFields"][] = "EmployeeID";
$tdataovertimefile[".viewFields"][] = "Reason";
$tdataovertimefile[".viewFields"][] = "FromDateTime";
$tdataovertimefile[".viewFields"][] = "ToDateTime";
$tdataovertimefile[".viewFields"][] = "NoMins";
$tdataovertimefile[".viewFields"][] = "Approved";
$tdataovertimefile[".viewFields"][] = "Approvedby";
$tdataovertimefile[".viewFields"][] = "ApprovedDate";
$tdataovertimefile[".viewFields"][] = "ApprovedTime";
$tdataovertimefile[".viewFields"][] = "Posted";
$tdataovertimefile[".viewFields"][] = "Locked";
$tdataovertimefile[".viewFields"][] = "Superior";

$tdataovertimefile[".addFields"] = array();
$tdataovertimefile[".addFields"][] = "DateCreated";
$tdataovertimefile[".addFields"][] = "EmployeeID";
$tdataovertimefile[".addFields"][] = "Reason";
$tdataovertimefile[".addFields"][] = "FromDateTime";
$tdataovertimefile[".addFields"][] = "ToDateTime";
$tdataovertimefile[".addFields"][] = "NoMins";
$tdataovertimefile[".addFields"][] = "Approved";
$tdataovertimefile[".addFields"][] = "Approvedby";
$tdataovertimefile[".addFields"][] = "ApprovedDate";
$tdataovertimefile[".addFields"][] = "ApprovedTime";
$tdataovertimefile[".addFields"][] = "Posted";
$tdataovertimefile[".addFields"][] = "Locked";
$tdataovertimefile[".addFields"][] = "Superior";

$tdataovertimefile[".masterListFields"] = array();
$tdataovertimefile[".masterListFields"][] = "ItiD";
$tdataovertimefile[".masterListFields"][] = "DateCreated";
$tdataovertimefile[".masterListFields"][] = "EmployeeID";
$tdataovertimefile[".masterListFields"][] = "Reason";
$tdataovertimefile[".masterListFields"][] = "FromDateTime";
$tdataovertimefile[".masterListFields"][] = "ToDateTime";
$tdataovertimefile[".masterListFields"][] = "NoMins";
$tdataovertimefile[".masterListFields"][] = "Approved";
$tdataovertimefile[".masterListFields"][] = "Approvedby";
$tdataovertimefile[".masterListFields"][] = "ApprovedDate";
$tdataovertimefile[".masterListFields"][] = "ApprovedTime";
$tdataovertimefile[".masterListFields"][] = "Posted";
$tdataovertimefile[".masterListFields"][] = "Locked";
$tdataovertimefile[".masterListFields"][] = "Superior";

$tdataovertimefile[".inlineAddFields"] = array();
$tdataovertimefile[".inlineAddFields"][] = "DateCreated";
$tdataovertimefile[".inlineAddFields"][] = "EmployeeID";
$tdataovertimefile[".inlineAddFields"][] = "Reason";
$tdataovertimefile[".inlineAddFields"][] = "FromDateTime";
$tdataovertimefile[".inlineAddFields"][] = "ToDateTime";
$tdataovertimefile[".inlineAddFields"][] = "NoMins";
$tdataovertimefile[".inlineAddFields"][] = "Approved";
$tdataovertimefile[".inlineAddFields"][] = "Approvedby";
$tdataovertimefile[".inlineAddFields"][] = "ApprovedDate";
$tdataovertimefile[".inlineAddFields"][] = "ApprovedTime";
$tdataovertimefile[".inlineAddFields"][] = "Posted";
$tdataovertimefile[".inlineAddFields"][] = "Locked";
$tdataovertimefile[".inlineAddFields"][] = "Superior";

$tdataovertimefile[".editFields"] = array();
$tdataovertimefile[".editFields"][] = "DateCreated";
$tdataovertimefile[".editFields"][] = "EmployeeID";
$tdataovertimefile[".editFields"][] = "Reason";
$tdataovertimefile[".editFields"][] = "FromDateTime";
$tdataovertimefile[".editFields"][] = "ToDateTime";
$tdataovertimefile[".editFields"][] = "NoMins";
$tdataovertimefile[".editFields"][] = "Approved";
$tdataovertimefile[".editFields"][] = "Approvedby";
$tdataovertimefile[".editFields"][] = "ApprovedDate";
$tdataovertimefile[".editFields"][] = "ApprovedTime";
$tdataovertimefile[".editFields"][] = "Posted";
$tdataovertimefile[".editFields"][] = "Locked";
$tdataovertimefile[".editFields"][] = "Superior";

$tdataovertimefile[".inlineEditFields"] = array();
$tdataovertimefile[".inlineEditFields"][] = "DateCreated";
$tdataovertimefile[".inlineEditFields"][] = "EmployeeID";
$tdataovertimefile[".inlineEditFields"][] = "Reason";
$tdataovertimefile[".inlineEditFields"][] = "FromDateTime";
$tdataovertimefile[".inlineEditFields"][] = "ToDateTime";
$tdataovertimefile[".inlineEditFields"][] = "NoMins";
$tdataovertimefile[".inlineEditFields"][] = "Approved";
$tdataovertimefile[".inlineEditFields"][] = "Approvedby";
$tdataovertimefile[".inlineEditFields"][] = "ApprovedDate";
$tdataovertimefile[".inlineEditFields"][] = "ApprovedTime";
$tdataovertimefile[".inlineEditFields"][] = "Posted";
$tdataovertimefile[".inlineEditFields"][] = "Locked";
$tdataovertimefile[".inlineEditFields"][] = "Superior";

$tdataovertimefile[".updateSelectedFields"] = array();
$tdataovertimefile[".updateSelectedFields"][] = "DateCreated";
$tdataovertimefile[".updateSelectedFields"][] = "EmployeeID";
$tdataovertimefile[".updateSelectedFields"][] = "Reason";
$tdataovertimefile[".updateSelectedFields"][] = "FromDateTime";
$tdataovertimefile[".updateSelectedFields"][] = "ToDateTime";
$tdataovertimefile[".updateSelectedFields"][] = "NoMins";
$tdataovertimefile[".updateSelectedFields"][] = "Approved";
$tdataovertimefile[".updateSelectedFields"][] = "Approvedby";
$tdataovertimefile[".updateSelectedFields"][] = "ApprovedDate";
$tdataovertimefile[".updateSelectedFields"][] = "ApprovedTime";
$tdataovertimefile[".updateSelectedFields"][] = "Posted";
$tdataovertimefile[".updateSelectedFields"][] = "Locked";
$tdataovertimefile[".updateSelectedFields"][] = "Superior";


$tdataovertimefile[".exportFields"] = array();
$tdataovertimefile[".exportFields"][] = "ItiD";
$tdataovertimefile[".exportFields"][] = "DateCreated";
$tdataovertimefile[".exportFields"][] = "EmployeeID";
$tdataovertimefile[".exportFields"][] = "Reason";
$tdataovertimefile[".exportFields"][] = "FromDateTime";
$tdataovertimefile[".exportFields"][] = "ToDateTime";
$tdataovertimefile[".exportFields"][] = "NoMins";
$tdataovertimefile[".exportFields"][] = "Approved";
$tdataovertimefile[".exportFields"][] = "Approvedby";
$tdataovertimefile[".exportFields"][] = "ApprovedDate";
$tdataovertimefile[".exportFields"][] = "ApprovedTime";
$tdataovertimefile[".exportFields"][] = "Posted";
$tdataovertimefile[".exportFields"][] = "Locked";
$tdataovertimefile[".exportFields"][] = "Superior";

$tdataovertimefile[".importFields"] = array();
$tdataovertimefile[".importFields"][] = "ItiD";
$tdataovertimefile[".importFields"][] = "DateCreated";
$tdataovertimefile[".importFields"][] = "FromDateTime";
$tdataovertimefile[".importFields"][] = "ToDateTime";
$tdataovertimefile[".importFields"][] = "Approved";
$tdataovertimefile[".importFields"][] = "Approvedby";
$tdataovertimefile[".importFields"][] = "ApprovedTime";
$tdataovertimefile[".importFields"][] = "Posted";
$tdataovertimefile[".importFields"][] = "NoMins";
$tdataovertimefile[".importFields"][] = "ApprovedDate";
$tdataovertimefile[".importFields"][] = "EmployeeID";
$tdataovertimefile[".importFields"][] = "Reason";
$tdataovertimefile[".importFields"][] = "Superior";
$tdataovertimefile[".importFields"][] = "Locked";

$tdataovertimefile[".printFields"] = array();
$tdataovertimefile[".printFields"][] = "ItiD";
$tdataovertimefile[".printFields"][] = "DateCreated";
$tdataovertimefile[".printFields"][] = "EmployeeID";
$tdataovertimefile[".printFields"][] = "Reason";
$tdataovertimefile[".printFields"][] = "FromDateTime";
$tdataovertimefile[".printFields"][] = "ToDateTime";
$tdataovertimefile[".printFields"][] = "NoMins";
$tdataovertimefile[".printFields"][] = "Approved";
$tdataovertimefile[".printFields"][] = "Approvedby";
$tdataovertimefile[".printFields"][] = "ApprovedDate";
$tdataovertimefile[".printFields"][] = "ApprovedTime";
$tdataovertimefile[".printFields"][] = "Posted";
$tdataovertimefile[".printFields"][] = "Locked";
$tdataovertimefile[".printFields"][] = "Superior";


//	ItiD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ItiD";
	$fdata["GoodName"] = "ItiD";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefile","ItiD");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdataovertimefile["ItiD"] = $fdata;
//	DateCreated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DateCreated";
	$fdata["GoodName"] = "DateCreated";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefile","DateCreated");
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




	$tdataovertimefile["DateCreated"] = $fdata;
//	FromDateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FromDateTime";
	$fdata["GoodName"] = "FromDateTime";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefile","FromDateTime");
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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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




	$tdataovertimefile["FromDateTime"] = $fdata;
//	ToDateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ToDateTime";
	$fdata["GoodName"] = "ToDateTime";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefile","ToDateTime");
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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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




	$tdataovertimefile["ToDateTime"] = $fdata;
//	Approved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Approved";
	$fdata["GoodName"] = "Approved";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefile","Approved");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataovertimefile["Approved"] = $fdata;
//	Approvedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Approvedby";
	$fdata["GoodName"] = "Approvedby";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefile","Approvedby");
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




	$tdataovertimefile["Approvedby"] = $fdata;
//	ApprovedTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ApprovedTime";
	$fdata["GoodName"] = "ApprovedTime";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefile","ApprovedTime");
	$fdata["FieldType"] = 134;

	
	
	
			
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




	$tdataovertimefile["ApprovedTime"] = $fdata;
//	Posted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Posted";
	$fdata["GoodName"] = "Posted";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefile","Posted");
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




	$tdataovertimefile["Posted"] = $fdata;
//	NoMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "NoMins";
	$fdata["GoodName"] = "NoMins";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefile","NoMins");
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




	$tdataovertimefile["NoMins"] = $fdata;
//	ApprovedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ApprovedDate";
	$fdata["GoodName"] = "ApprovedDate";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefile","ApprovedDate");
	$fdata["FieldType"] = 7;

	
	
	
			
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




	$tdataovertimefile["ApprovedDate"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefile","EmployeeID");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "demo_user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"Superior", 'lookupF'=>"Superior");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EmployeeID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "user_name";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataovertimefile["EmployeeID"] = $fdata;
//	Reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Reason";
	$fdata["GoodName"] = "Reason";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefile","Reason");
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




	$tdataovertimefile["Reason"] = $fdata;
//	Superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Superior";
	$fdata["GoodName"] = "Superior";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefile","Superior");
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




	$tdataovertimefile["Superior"] = $fdata;
//	Locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Locked";
	$fdata["GoodName"] = "Locked";
	$fdata["ownerTable"] = "overtimefile";
	$fdata["Label"] = GetFieldLabel("overtimefile","Locked");
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




	$tdataovertimefile["Locked"] = $fdata;


$tables_data["overtimefile"]=&$tdataovertimefile;
$field_labels["overtimefile"] = &$fieldLabelsovertimefile;
$fieldToolTips["overtimefile"] = &$fieldToolTipsovertimefile;
$placeHolders["overtimefile"] = &$placeHoldersovertimefile;
$page_titles["overtimefile"] = &$pageTitlesovertimefile;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["overtimefile"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["overtimefile"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_overtimefile()
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
	"m_srcTableName" => "overtimefile"
));

$proto6["m_sql"] = "ItiD";
$proto6["m_srcTableName"] = "overtimefile";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DateCreated",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefile"
));

$proto8["m_sql"] = "DateCreated";
$proto8["m_srcTableName"] = "overtimefile";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDateTime",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefile"
));

$proto10["m_sql"] = "FromDateTime";
$proto10["m_srcTableName"] = "overtimefile";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDateTime",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefile"
));

$proto12["m_sql"] = "ToDateTime";
$proto12["m_srcTableName"] = "overtimefile";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Approved",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefile"
));

$proto14["m_sql"] = "Approved";
$proto14["m_srcTableName"] = "overtimefile";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Approvedby",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefile"
));

$proto16["m_sql"] = "Approvedby";
$proto16["m_srcTableName"] = "overtimefile";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedTime",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefile"
));

$proto18["m_sql"] = "ApprovedTime";
$proto18["m_srcTableName"] = "overtimefile";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Posted",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefile"
));

$proto20["m_sql"] = "Posted";
$proto20["m_srcTableName"] = "overtimefile";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "NoMins",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefile"
));

$proto22["m_sql"] = "NoMins";
$proto22["m_srcTableName"] = "overtimefile";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedDate",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefile"
));

$proto24["m_sql"] = "ApprovedDate";
$proto24["m_srcTableName"] = "overtimefile";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefile"
));

$proto26["m_sql"] = "EmployeeID";
$proto26["m_srcTableName"] = "overtimefile";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Reason",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefile"
));

$proto28["m_sql"] = "Reason";
$proto28["m_srcTableName"] = "overtimefile";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Superior",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefile"
));

$proto30["m_sql"] = "Superior";
$proto30["m_srcTableName"] = "overtimefile";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Locked",
	"m_strTable" => "overtimefile",
	"m_srcTableName" => "overtimefile"
));

$proto32["m_sql"] = "Locked";
$proto32["m_srcTableName"] = "overtimefile";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "overtimefile";
$proto35["m_srcTableName"] = "overtimefile";
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
$proto34["m_srcTableName"] = "overtimefile";
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
$proto0["m_srcTableName"]="overtimefile";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_overtimefile = createSqlQuery_overtimefile();


	
		;

														

$tdataovertimefile[".sqlquery"] = $queryData_overtimefile;

include_once(getabspath("include/overtimefile_events.php"));
$tableEvents["overtimefile"] = new eventclass_overtimefile;
$tdataovertimefile[".hasEvents"] = true;

?>