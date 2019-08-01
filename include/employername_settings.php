<?php
require_once(getabspath("classes/cipherer.php"));




$tdataemployername = array();
	$tdataemployername[".truncateText"] = true;
	$tdataemployername[".NumberOfChars"] = 80;
	$tdataemployername[".ShortName"] = "employername";
	$tdataemployername[".OwnerID"] = "";
	$tdataemployername[".OriginalTable"] = "employername";

//	field labels
$fieldLabelsemployername = array();
$fieldToolTipsemployername = array();
$pageTitlesemployername = array();
$placeHoldersemployername = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsemployername["English"] = array();
	$fieldToolTipsemployername["English"] = array();
	$placeHoldersemployername["English"] = array();
	$pageTitlesemployername["English"] = array();
	$fieldLabelsemployername["English"]["EnID"] = "En ID";
	$fieldToolTipsemployername["English"]["EnID"] = "";
	$placeHoldersemployername["English"]["EnID"] = "";
	$fieldLabelsemployername["English"]["EmployerName"] = "Employer Name";
	$fieldToolTipsemployername["English"]["EmployerName"] = "";
	$placeHoldersemployername["English"]["EmployerName"] = "";
	$fieldLabelsemployername["English"]["Address"] = "Address";
	$fieldToolTipsemployername["English"]["Address"] = "";
	$placeHoldersemployername["English"]["Address"] = "";
	$fieldLabelsemployername["English"]["SSSNo"] = "SSSNo";
	$fieldToolTipsemployername["English"]["SSSNo"] = "";
	$placeHoldersemployername["English"]["SSSNo"] = "";
	$fieldLabelsemployername["English"]["TIN"] = "TIN";
	$fieldToolTipsemployername["English"]["TIN"] = "";
	$placeHoldersemployername["English"]["TIN"] = "";
	$fieldLabelsemployername["English"]["PHICNo"] = "PHICNo";
	$fieldToolTipsemployername["English"]["PHICNo"] = "";
	$placeHoldersemployername["English"]["PHICNo"] = "";
	$fieldLabelsemployername["English"]["PagIbig"] = "Pag Ibig";
	$fieldToolTipsemployername["English"]["PagIbig"] = "";
	$placeHoldersemployername["English"]["PagIbig"] = "";
	$fieldLabelsemployername["English"]["TelNo"] = "Tel No";
	$fieldToolTipsemployername["English"]["TelNo"] = "";
	$placeHoldersemployername["English"]["TelNo"] = "";
	$fieldLabelsemployername["English"]["ZipCode"] = "Zip Code";
	$fieldToolTipsemployername["English"]["ZipCode"] = "";
	$placeHoldersemployername["English"]["ZipCode"] = "";
	$fieldLabelsemployername["English"]["AdminEmail"] = "Admin Email";
	$fieldToolTipsemployername["English"]["AdminEmail"] = "";
	$placeHoldersemployername["English"]["AdminEmail"] = "";
	if (count($fieldToolTipsemployername["English"]))
		$tdataemployername[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsemployername[""] = array();
	$fieldToolTipsemployername[""] = array();
	$placeHoldersemployername[""] = array();
	$pageTitlesemployername[""] = array();
	if (count($fieldToolTipsemployername[""]))
		$tdataemployername[".isUseToolTips"] = true;
}


	$tdataemployername[".NCSearch"] = true;



$tdataemployername[".shortTableName"] = "employername";
$tdataemployername[".nSecOptions"] = 0;
$tdataemployername[".recsPerRowPrint"] = 1;
$tdataemployername[".mainTableOwnerID"] = "";
$tdataemployername[".moveNext"] = 1;
$tdataemployername[".entityType"] = 0;

$tdataemployername[".strOriginalTableName"] = "employername";

	



$tdataemployername[".showAddInPopup"] = false;

$tdataemployername[".showEditInPopup"] = false;

$tdataemployername[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataemployername[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataemployername[".fieldsForRegister"] = array();

$tdataemployername[".listAjax"] = false;

	$tdataemployername[".audit"] = false;

	$tdataemployername[".locking"] = false;

$tdataemployername[".edit"] = true;
$tdataemployername[".afterEditAction"] = 1;
$tdataemployername[".closePopupAfterEdit"] = 1;
$tdataemployername[".afterEditActionDetTable"] = "";

$tdataemployername[".add"] = true;
$tdataemployername[".afterAddAction"] = 1;
$tdataemployername[".closePopupAfterAdd"] = 1;
$tdataemployername[".afterAddActionDetTable"] = "";

$tdataemployername[".list"] = true;

$tdataemployername[".inlineEdit"] = true;

$tdataemployername[".updateSelected"] = true;

$tdataemployername[".reorderRecordsByHeader"] = true;


$tdataemployername[".exportFormatting"] = 2;
$tdataemployername[".exportDelimiter"] = ",";
		
$tdataemployername[".inlineAdd"] = true;
$tdataemployername[".view"] = true;

$tdataemployername[".import"] = true;

$tdataemployername[".exportTo"] = true;

$tdataemployername[".printFriendly"] = true;

$tdataemployername[".delete"] = true;

$tdataemployername[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataemployername[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataemployername[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataemployername[".searchSaving"] = false;
//

$tdataemployername[".showSearchPanel"] = true;
		$tdataemployername[".flexibleSearch"] = true;

$tdataemployername[".isUseAjaxSuggest"] = true;

$tdataemployername[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																				

$tdataemployername[".ajaxCodeSnippetAdded"] = false;

$tdataemployername[".buttonsAdded"] = false;

$tdataemployername[".addPageEvents"] = false;

// use timepicker for search panel
$tdataemployername[".isUseTimeForSearch"] = false;





$tdataemployername[".allSearchFields"] = array();
$tdataemployername[".filterFields"] = array();
$tdataemployername[".requiredSearchFields"] = array();

$tdataemployername[".allSearchFields"][] = "EnID";
	$tdataemployername[".allSearchFields"][] = "EmployerName";
	$tdataemployername[".allSearchFields"][] = "Address";
	$tdataemployername[".allSearchFields"][] = "SSSNo";
	$tdataemployername[".allSearchFields"][] = "TIN";
	$tdataemployername[".allSearchFields"][] = "PHICNo";
	$tdataemployername[".allSearchFields"][] = "PagIbig";
	$tdataemployername[".allSearchFields"][] = "TelNo";
	$tdataemployername[".allSearchFields"][] = "ZipCode";
	$tdataemployername[".allSearchFields"][] = "AdminEmail";
	

$tdataemployername[".googleLikeFields"] = array();
$tdataemployername[".googleLikeFields"][] = "EnID";
$tdataemployername[".googleLikeFields"][] = "EmployerName";
$tdataemployername[".googleLikeFields"][] = "Address";
$tdataemployername[".googleLikeFields"][] = "SSSNo";
$tdataemployername[".googleLikeFields"][] = "TIN";
$tdataemployername[".googleLikeFields"][] = "PHICNo";
$tdataemployername[".googleLikeFields"][] = "PagIbig";
$tdataemployername[".googleLikeFields"][] = "TelNo";
$tdataemployername[".googleLikeFields"][] = "ZipCode";
$tdataemployername[".googleLikeFields"][] = "AdminEmail";


$tdataemployername[".advSearchFields"] = array();
$tdataemployername[".advSearchFields"][] = "EnID";
$tdataemployername[".advSearchFields"][] = "EmployerName";
$tdataemployername[".advSearchFields"][] = "Address";
$tdataemployername[".advSearchFields"][] = "SSSNo";
$tdataemployername[".advSearchFields"][] = "TIN";
$tdataemployername[".advSearchFields"][] = "PHICNo";
$tdataemployername[".advSearchFields"][] = "PagIbig";
$tdataemployername[".advSearchFields"][] = "TelNo";
$tdataemployername[".advSearchFields"][] = "ZipCode";
$tdataemployername[".advSearchFields"][] = "AdminEmail";

$tdataemployername[".tableType"] = "list";

$tdataemployername[".printerPageOrientation"] = 0;
$tdataemployername[".nPrinterPageScale"] = 100;

$tdataemployername[".nPrinterSplitRecords"] = 40;

$tdataemployername[".nPrinterPDFSplitRecords"] = 40;



$tdataemployername[".geocodingEnabled"] = false;





$tdataemployername[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataemployername[".pageSize"] = 20;

$tdataemployername[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataemployername[".strOrderBy"] = $tstrOrderBy;

$tdataemployername[".orderindexes"] = array();

$tdataemployername[".sqlHead"] = "SELECT EnID,  	EmployerName,  	Address,  	SSSNo,  	TIN,  	PHICNo,  	PagIbig,  	TelNo,  	ZipCode,  	AdminEmail";
$tdataemployername[".sqlFrom"] = "FROM employername";
$tdataemployername[".sqlWhereExpr"] = "";
$tdataemployername[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataemployername[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataemployername[".arrGroupsPerPage"] = $arrGPP;

$tdataemployername[".highlightSearchResults"] = true;

$tableKeysemployername = array();
$tableKeysemployername[] = "EnID";
$tdataemployername[".Keys"] = $tableKeysemployername;

$tdataemployername[".listFields"] = array();
$tdataemployername[".listFields"][] = "EnID";
$tdataemployername[".listFields"][] = "EmployerName";
$tdataemployername[".listFields"][] = "Address";
$tdataemployername[".listFields"][] = "SSSNo";
$tdataemployername[".listFields"][] = "TIN";
$tdataemployername[".listFields"][] = "PHICNo";
$tdataemployername[".listFields"][] = "PagIbig";
$tdataemployername[".listFields"][] = "TelNo";
$tdataemployername[".listFields"][] = "ZipCode";
$tdataemployername[".listFields"][] = "AdminEmail";

$tdataemployername[".hideMobileList"] = array();


$tdataemployername[".viewFields"] = array();
$tdataemployername[".viewFields"][] = "EnID";
$tdataemployername[".viewFields"][] = "EmployerName";
$tdataemployername[".viewFields"][] = "Address";
$tdataemployername[".viewFields"][] = "SSSNo";
$tdataemployername[".viewFields"][] = "TIN";
$tdataemployername[".viewFields"][] = "PHICNo";
$tdataemployername[".viewFields"][] = "PagIbig";
$tdataemployername[".viewFields"][] = "TelNo";
$tdataemployername[".viewFields"][] = "ZipCode";
$tdataemployername[".viewFields"][] = "AdminEmail";

$tdataemployername[".addFields"] = array();
$tdataemployername[".addFields"][] = "EmployerName";
$tdataemployername[".addFields"][] = "Address";
$tdataemployername[".addFields"][] = "SSSNo";
$tdataemployername[".addFields"][] = "TIN";
$tdataemployername[".addFields"][] = "PHICNo";
$tdataemployername[".addFields"][] = "PagIbig";
$tdataemployername[".addFields"][] = "TelNo";
$tdataemployername[".addFields"][] = "ZipCode";
$tdataemployername[".addFields"][] = "AdminEmail";

$tdataemployername[".masterListFields"] = array();
$tdataemployername[".masterListFields"][] = "EnID";
$tdataemployername[".masterListFields"][] = "EmployerName";
$tdataemployername[".masterListFields"][] = "Address";
$tdataemployername[".masterListFields"][] = "SSSNo";
$tdataemployername[".masterListFields"][] = "TIN";
$tdataemployername[".masterListFields"][] = "PHICNo";
$tdataemployername[".masterListFields"][] = "PagIbig";
$tdataemployername[".masterListFields"][] = "TelNo";
$tdataemployername[".masterListFields"][] = "ZipCode";
$tdataemployername[".masterListFields"][] = "AdminEmail";

$tdataemployername[".inlineAddFields"] = array();
$tdataemployername[".inlineAddFields"][] = "EmployerName";
$tdataemployername[".inlineAddFields"][] = "Address";
$tdataemployername[".inlineAddFields"][] = "SSSNo";
$tdataemployername[".inlineAddFields"][] = "TIN";
$tdataemployername[".inlineAddFields"][] = "PHICNo";
$tdataemployername[".inlineAddFields"][] = "PagIbig";
$tdataemployername[".inlineAddFields"][] = "TelNo";
$tdataemployername[".inlineAddFields"][] = "ZipCode";
$tdataemployername[".inlineAddFields"][] = "AdminEmail";

$tdataemployername[".editFields"] = array();
$tdataemployername[".editFields"][] = "EmployerName";
$tdataemployername[".editFields"][] = "Address";
$tdataemployername[".editFields"][] = "SSSNo";
$tdataemployername[".editFields"][] = "TIN";
$tdataemployername[".editFields"][] = "PHICNo";
$tdataemployername[".editFields"][] = "PagIbig";
$tdataemployername[".editFields"][] = "TelNo";
$tdataemployername[".editFields"][] = "ZipCode";
$tdataemployername[".editFields"][] = "AdminEmail";

$tdataemployername[".inlineEditFields"] = array();
$tdataemployername[".inlineEditFields"][] = "EmployerName";
$tdataemployername[".inlineEditFields"][] = "Address";
$tdataemployername[".inlineEditFields"][] = "SSSNo";
$tdataemployername[".inlineEditFields"][] = "TIN";
$tdataemployername[".inlineEditFields"][] = "PHICNo";
$tdataemployername[".inlineEditFields"][] = "PagIbig";
$tdataemployername[".inlineEditFields"][] = "TelNo";
$tdataemployername[".inlineEditFields"][] = "ZipCode";
$tdataemployername[".inlineEditFields"][] = "AdminEmail";

$tdataemployername[".updateSelectedFields"] = array();
$tdataemployername[".updateSelectedFields"][] = "EmployerName";
$tdataemployername[".updateSelectedFields"][] = "Address";
$tdataemployername[".updateSelectedFields"][] = "SSSNo";
$tdataemployername[".updateSelectedFields"][] = "TIN";
$tdataemployername[".updateSelectedFields"][] = "PHICNo";
$tdataemployername[".updateSelectedFields"][] = "PagIbig";
$tdataemployername[".updateSelectedFields"][] = "TelNo";


$tdataemployername[".exportFields"] = array();
$tdataemployername[".exportFields"][] = "EnID";
$tdataemployername[".exportFields"][] = "EmployerName";
$tdataemployername[".exportFields"][] = "Address";
$tdataemployername[".exportFields"][] = "SSSNo";
$tdataemployername[".exportFields"][] = "TIN";
$tdataemployername[".exportFields"][] = "PHICNo";
$tdataemployername[".exportFields"][] = "PagIbig";
$tdataemployername[".exportFields"][] = "TelNo";
$tdataemployername[".exportFields"][] = "ZipCode";
$tdataemployername[".exportFields"][] = "AdminEmail";

$tdataemployername[".importFields"] = array();
$tdataemployername[".importFields"][] = "EnID";
$tdataemployername[".importFields"][] = "EmployerName";
$tdataemployername[".importFields"][] = "Address";
$tdataemployername[".importFields"][] = "SSSNo";
$tdataemployername[".importFields"][] = "TIN";
$tdataemployername[".importFields"][] = "PHICNo";
$tdataemployername[".importFields"][] = "PagIbig";
$tdataemployername[".importFields"][] = "TelNo";
$tdataemployername[".importFields"][] = "ZipCode";
$tdataemployername[".importFields"][] = "AdminEmail";

$tdataemployername[".printFields"] = array();
$tdataemployername[".printFields"][] = "EnID";
$tdataemployername[".printFields"][] = "EmployerName";
$tdataemployername[".printFields"][] = "Address";
$tdataemployername[".printFields"][] = "SSSNo";
$tdataemployername[".printFields"][] = "TIN";
$tdataemployername[".printFields"][] = "PHICNo";
$tdataemployername[".printFields"][] = "PagIbig";
$tdataemployername[".printFields"][] = "TelNo";
$tdataemployername[".printFields"][] = "ZipCode";
$tdataemployername[".printFields"][] = "AdminEmail";


//	EnID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EnID";
	$fdata["GoodName"] = "EnID";
	$fdata["ownerTable"] = "employername";
	$fdata["Label"] = GetFieldLabel("employername","EnID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EnID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EnID";

	
	
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




	$tdataemployername["EnID"] = $fdata;
//	EmployerName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EmployerName";
	$fdata["GoodName"] = "EmployerName";
	$fdata["ownerTable"] = "employername";
	$fdata["Label"] = GetFieldLabel("employername","EmployerName");
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

		$fdata["strField"] = "EmployerName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmployerName";

	
	
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
			$edata["EditParams"].= " maxlength=80";

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




	$tdataemployername["EmployerName"] = $fdata;
//	Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Address";
	$fdata["GoodName"] = "Address";
	$fdata["ownerTable"] = "employername";
	$fdata["Label"] = GetFieldLabel("employername","Address");
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

		$fdata["strField"] = "Address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Address";

	
	
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
			$edata["EditParams"].= " maxlength=180";

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




	$tdataemployername["Address"] = $fdata;
//	SSSNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SSSNo";
	$fdata["GoodName"] = "SSSNo";
	$fdata["ownerTable"] = "employername";
	$fdata["Label"] = GetFieldLabel("employername","SSSNo");
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

		$fdata["strField"] = "SSSNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SSSNo";

	
	
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




	$tdataemployername["SSSNo"] = $fdata;
//	TIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TIN";
	$fdata["GoodName"] = "TIN";
	$fdata["ownerTable"] = "employername";
	$fdata["Label"] = GetFieldLabel("employername","TIN");
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

		$fdata["strField"] = "TIN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIN";

	
	
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




	$tdataemployername["TIN"] = $fdata;
//	PHICNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PHICNo";
	$fdata["GoodName"] = "PHICNo";
	$fdata["ownerTable"] = "employername";
	$fdata["Label"] = GetFieldLabel("employername","PHICNo");
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

		$fdata["strField"] = "PHICNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PHICNo";

	
	
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




	$tdataemployername["PHICNo"] = $fdata;
//	PagIbig
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PagIbig";
	$fdata["GoodName"] = "PagIbig";
	$fdata["ownerTable"] = "employername";
	$fdata["Label"] = GetFieldLabel("employername","PagIbig");
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

		$fdata["strField"] = "PagIbig";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PagIbig";

	
	
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




	$tdataemployername["PagIbig"] = $fdata;
//	TelNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "TelNo";
	$fdata["GoodName"] = "TelNo";
	$fdata["ownerTable"] = "employername";
	$fdata["Label"] = GetFieldLabel("employername","TelNo");
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

		$fdata["strField"] = "TelNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TelNo";

	
	
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




	$tdataemployername["TelNo"] = $fdata;
//	ZipCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ZipCode";
	$fdata["GoodName"] = "ZipCode";
	$fdata["ownerTable"] = "employername";
	$fdata["Label"] = GetFieldLabel("employername","ZipCode");
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

		$fdata["strField"] = "ZipCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ZipCode";

	
	
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




	$tdataemployername["ZipCode"] = $fdata;
//	AdminEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "AdminEmail";
	$fdata["GoodName"] = "AdminEmail";
	$fdata["ownerTable"] = "employername";
	$fdata["Label"] = GetFieldLabel("employername","AdminEmail");
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

		$fdata["strField"] = "AdminEmail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AdminEmail";

	
	
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
			$edata["EditParams"].= " maxlength=80";

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




	$tdataemployername["AdminEmail"] = $fdata;


$tables_data["employername"]=&$tdataemployername;
$field_labels["employername"] = &$fieldLabelsemployername;
$fieldToolTips["employername"] = &$fieldToolTipsemployername;
$placeHolders["employername"] = &$placeHoldersemployername;
$page_titles["employername"] = &$pageTitlesemployername;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["employername"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["employername"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_employername()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EnID,  	EmployerName,  	Address,  	SSSNo,  	TIN,  	PHICNo,  	PagIbig,  	TelNo,  	ZipCode,  	AdminEmail";
$proto0["m_strFrom"] = "FROM employername";
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
	"m_strName" => "EnID",
	"m_strTable" => "employername",
	"m_srcTableName" => "employername"
));

$proto6["m_sql"] = "EnID";
$proto6["m_srcTableName"] = "employername";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployerName",
	"m_strTable" => "employername",
	"m_srcTableName" => "employername"
));

$proto8["m_sql"] = "EmployerName";
$proto8["m_srcTableName"] = "employername";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Address",
	"m_strTable" => "employername",
	"m_srcTableName" => "employername"
));

$proto10["m_sql"] = "Address";
$proto10["m_srcTableName"] = "employername";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSNo",
	"m_strTable" => "employername",
	"m_srcTableName" => "employername"
));

$proto12["m_sql"] = "SSSNo";
$proto12["m_srcTableName"] = "employername";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TIN",
	"m_strTable" => "employername",
	"m_srcTableName" => "employername"
));

$proto14["m_sql"] = "TIN";
$proto14["m_srcTableName"] = "employername";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PHICNo",
	"m_strTable" => "employername",
	"m_srcTableName" => "employername"
));

$proto16["m_sql"] = "PHICNo";
$proto16["m_srcTableName"] = "employername";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbig",
	"m_strTable" => "employername",
	"m_srcTableName" => "employername"
));

$proto18["m_sql"] = "PagIbig";
$proto18["m_srcTableName"] = "employername";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "TelNo",
	"m_strTable" => "employername",
	"m_srcTableName" => "employername"
));

$proto20["m_sql"] = "TelNo";
$proto20["m_srcTableName"] = "employername";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ZipCode",
	"m_strTable" => "employername",
	"m_srcTableName" => "employername"
));

$proto22["m_sql"] = "ZipCode";
$proto22["m_srcTableName"] = "employername";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "AdminEmail",
	"m_strTable" => "employername",
	"m_srcTableName" => "employername"
));

$proto24["m_sql"] = "AdminEmail";
$proto24["m_srcTableName"] = "employername";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "employername";
$proto27["m_srcTableName"] = "employername";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "EnID";
$proto27["m_columns"][] = "EmployerName";
$proto27["m_columns"][] = "Address";
$proto27["m_columns"][] = "SSSNo";
$proto27["m_columns"][] = "TIN";
$proto27["m_columns"][] = "PHICNo";
$proto27["m_columns"][] = "PagIbig";
$proto27["m_columns"][] = "TelNo";
$proto27["m_columns"][] = "ZipCode";
$proto27["m_columns"][] = "AdminEmail";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "employername";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "employername";
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
$proto0["m_srcTableName"]="employername";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_employername = createSqlQuery_employername();


	
		;

										

$tdataemployername[".sqlquery"] = $queryData_employername;

$tableEvents["employername"] = new eventsBase;
$tdataemployername[".hasEvents"] = false;

?>