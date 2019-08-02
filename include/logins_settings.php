<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalogins = array();
	$tdatalogins[".truncateText"] = true;
	$tdatalogins[".NumberOfChars"] = 80;
	$tdatalogins[".ShortName"] = "logins";
	$tdatalogins[".OwnerID"] = "";
	$tdatalogins[".OriginalTable"] = "logins";

//	field labels
$fieldLabelslogins = array();
$fieldToolTipslogins = array();
$pageTitleslogins = array();
$placeHolderslogins = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslogins["English"] = array();
	$fieldToolTipslogins["English"] = array();
	$placeHolderslogins["English"] = array();
	$pageTitleslogins["English"] = array();
	$fieldLabelslogins["English"]["LogID"] = "Log ID";
	$fieldToolTipslogins["English"]["LogID"] = "";
	$placeHolderslogins["English"]["LogID"] = "";
	$fieldLabelslogins["English"]["UserName"] = "User Name";
	$fieldToolTipslogins["English"]["UserName"] = "";
	$placeHolderslogins["English"]["UserName"] = "";
	$fieldLabelslogins["English"]["Password"] = "Password";
	$fieldToolTipslogins["English"]["Password"] = "";
	$placeHolderslogins["English"]["Password"] = "";
	$fieldLabelslogins["English"]["FullName"] = "Full Name";
	$fieldToolTipslogins["English"]["FullName"] = "";
	$placeHolderslogins["English"]["FullName"] = "";
	$fieldLabelslogins["English"]["Position"] = "Position";
	$fieldToolTipslogins["English"]["Position"] = "";
	$placeHolderslogins["English"]["Position"] = "";
	$fieldLabelslogins["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipslogins["English"]["EmployeeID"] = "";
	$placeHolderslogins["English"]["EmployeeID"] = "";
	if (count($fieldToolTipslogins["English"]))
		$tdatalogins[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslogins[""] = array();
	$fieldToolTipslogins[""] = array();
	$placeHolderslogins[""] = array();
	$pageTitleslogins[""] = array();
	if (count($fieldToolTipslogins[""]))
		$tdatalogins[".isUseToolTips"] = true;
}


	$tdatalogins[".NCSearch"] = true;



$tdatalogins[".shortTableName"] = "logins";
$tdatalogins[".nSecOptions"] = 0;
$tdatalogins[".recsPerRowPrint"] = 1;
$tdatalogins[".mainTableOwnerID"] = "";
$tdatalogins[".moveNext"] = 1;
$tdatalogins[".entityType"] = 0;

$tdatalogins[".strOriginalTableName"] = "logins";

	



$tdatalogins[".showAddInPopup"] = false;

$tdatalogins[".showEditInPopup"] = false;

$tdatalogins[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatalogins[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalogins[".fieldsForRegister"] = array();

$tdatalogins[".listAjax"] = false;

	$tdatalogins[".audit"] = false;

	$tdatalogins[".locking"] = false;

$tdatalogins[".edit"] = true;
$tdatalogins[".afterEditAction"] = 1;
$tdatalogins[".closePopupAfterEdit"] = 1;
$tdatalogins[".afterEditActionDetTable"] = "";

$tdatalogins[".add"] = true;
$tdatalogins[".afterAddAction"] = 1;
$tdatalogins[".closePopupAfterAdd"] = 1;
$tdatalogins[".afterAddActionDetTable"] = "";

$tdatalogins[".list"] = true;

$tdatalogins[".inlineEdit"] = true;

$tdatalogins[".updateSelected"] = true;

$tdatalogins[".reorderRecordsByHeader"] = true;


$tdatalogins[".exportFormatting"] = 2;
$tdatalogins[".exportDelimiter"] = ",";
		
$tdatalogins[".inlineAdd"] = true;
$tdatalogins[".view"] = true;

$tdatalogins[".import"] = true;

$tdatalogins[".exportTo"] = true;

$tdatalogins[".printFriendly"] = true;

$tdatalogins[".delete"] = true;

$tdatalogins[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatalogins[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatalogins[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatalogins[".searchSaving"] = false;
//

$tdatalogins[".showSearchPanel"] = true;
		$tdatalogins[".flexibleSearch"] = true;

$tdatalogins[".isUseAjaxSuggest"] = true;

$tdatalogins[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																														

$tdatalogins[".ajaxCodeSnippetAdded"] = false;

$tdatalogins[".buttonsAdded"] = false;

$tdatalogins[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalogins[".isUseTimeForSearch"] = false;





$tdatalogins[".allSearchFields"] = array();
$tdatalogins[".filterFields"] = array();
$tdatalogins[".requiredSearchFields"] = array();

$tdatalogins[".allSearchFields"][] = "LogID";
	$tdatalogins[".allSearchFields"][] = "UserName";
	$tdatalogins[".allSearchFields"][] = "Password";
	$tdatalogins[".allSearchFields"][] = "FullName";
	$tdatalogins[".allSearchFields"][] = "Position";
	$tdatalogins[".allSearchFields"][] = "EmployeeID";
	

$tdatalogins[".googleLikeFields"] = array();
$tdatalogins[".googleLikeFields"][] = "LogID";
$tdatalogins[".googleLikeFields"][] = "UserName";
$tdatalogins[".googleLikeFields"][] = "Password";
$tdatalogins[".googleLikeFields"][] = "FullName";
$tdatalogins[".googleLikeFields"][] = "Position";
$tdatalogins[".googleLikeFields"][] = "EmployeeID";


$tdatalogins[".advSearchFields"] = array();
$tdatalogins[".advSearchFields"][] = "LogID";
$tdatalogins[".advSearchFields"][] = "UserName";
$tdatalogins[".advSearchFields"][] = "Password";
$tdatalogins[".advSearchFields"][] = "FullName";
$tdatalogins[".advSearchFields"][] = "Position";
$tdatalogins[".advSearchFields"][] = "EmployeeID";

$tdatalogins[".tableType"] = "list";

$tdatalogins[".printerPageOrientation"] = 0;
$tdatalogins[".nPrinterPageScale"] = 100;

$tdatalogins[".nPrinterSplitRecords"] = 40;

$tdatalogins[".nPrinterPDFSplitRecords"] = 40;



$tdatalogins[".geocodingEnabled"] = false;





$tdatalogins[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatalogins[".pageSize"] = 20;

$tdatalogins[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalogins[".strOrderBy"] = $tstrOrderBy;

$tdatalogins[".orderindexes"] = array();

$tdatalogins[".sqlHead"] = "SELECT LogID,  	UserName,  	Password,  	FullName,  	`Position`,  	EmployeeID";
$tdatalogins[".sqlFrom"] = "FROM logins";
$tdatalogins[".sqlWhereExpr"] = "";
$tdatalogins[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalogins[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalogins[".arrGroupsPerPage"] = $arrGPP;

$tdatalogins[".highlightSearchResults"] = true;

$tableKeyslogins = array();
$tableKeyslogins[] = "LogID";
$tdatalogins[".Keys"] = $tableKeyslogins;

$tdatalogins[".listFields"] = array();
$tdatalogins[".listFields"][] = "LogID";
$tdatalogins[".listFields"][] = "UserName";
$tdatalogins[".listFields"][] = "Password";
$tdatalogins[".listFields"][] = "FullName";
$tdatalogins[".listFields"][] = "Position";
$tdatalogins[".listFields"][] = "EmployeeID";

$tdatalogins[".hideMobileList"] = array();


$tdatalogins[".viewFields"] = array();
$tdatalogins[".viewFields"][] = "LogID";
$tdatalogins[".viewFields"][] = "UserName";
$tdatalogins[".viewFields"][] = "Password";
$tdatalogins[".viewFields"][] = "FullName";
$tdatalogins[".viewFields"][] = "Position";
$tdatalogins[".viewFields"][] = "EmployeeID";

$tdatalogins[".addFields"] = array();
$tdatalogins[".addFields"][] = "UserName";
$tdatalogins[".addFields"][] = "Password";
$tdatalogins[".addFields"][] = "FullName";
$tdatalogins[".addFields"][] = "Position";
$tdatalogins[".addFields"][] = "EmployeeID";

$tdatalogins[".masterListFields"] = array();
$tdatalogins[".masterListFields"][] = "LogID";
$tdatalogins[".masterListFields"][] = "UserName";
$tdatalogins[".masterListFields"][] = "Password";
$tdatalogins[".masterListFields"][] = "FullName";
$tdatalogins[".masterListFields"][] = "Position";
$tdatalogins[".masterListFields"][] = "EmployeeID";

$tdatalogins[".inlineAddFields"] = array();
$tdatalogins[".inlineAddFields"][] = "UserName";
$tdatalogins[".inlineAddFields"][] = "Password";
$tdatalogins[".inlineAddFields"][] = "FullName";
$tdatalogins[".inlineAddFields"][] = "Position";
$tdatalogins[".inlineAddFields"][] = "EmployeeID";

$tdatalogins[".editFields"] = array();
$tdatalogins[".editFields"][] = "UserName";
$tdatalogins[".editFields"][] = "Password";
$tdatalogins[".editFields"][] = "FullName";
$tdatalogins[".editFields"][] = "Position";
$tdatalogins[".editFields"][] = "EmployeeID";

$tdatalogins[".inlineEditFields"] = array();
$tdatalogins[".inlineEditFields"][] = "UserName";
$tdatalogins[".inlineEditFields"][] = "Password";
$tdatalogins[".inlineEditFields"][] = "FullName";
$tdatalogins[".inlineEditFields"][] = "Position";
$tdatalogins[".inlineEditFields"][] = "EmployeeID";

$tdatalogins[".updateSelectedFields"] = array();
$tdatalogins[".updateSelectedFields"][] = "UserName";
$tdatalogins[".updateSelectedFields"][] = "Password";
$tdatalogins[".updateSelectedFields"][] = "FullName";
$tdatalogins[".updateSelectedFields"][] = "Position";
$tdatalogins[".updateSelectedFields"][] = "EmployeeID";


$tdatalogins[".exportFields"] = array();
$tdatalogins[".exportFields"][] = "LogID";
$tdatalogins[".exportFields"][] = "UserName";
$tdatalogins[".exportFields"][] = "Password";
$tdatalogins[".exportFields"][] = "FullName";
$tdatalogins[".exportFields"][] = "Position";
$tdatalogins[".exportFields"][] = "EmployeeID";

$tdatalogins[".importFields"] = array();
$tdatalogins[".importFields"][] = "LogID";
$tdatalogins[".importFields"][] = "UserName";
$tdatalogins[".importFields"][] = "Password";
$tdatalogins[".importFields"][] = "FullName";
$tdatalogins[".importFields"][] = "Position";
$tdatalogins[".importFields"][] = "EmployeeID";

$tdatalogins[".printFields"] = array();
$tdatalogins[".printFields"][] = "LogID";
$tdatalogins[".printFields"][] = "UserName";
$tdatalogins[".printFields"][] = "Password";
$tdatalogins[".printFields"][] = "FullName";
$tdatalogins[".printFields"][] = "Position";
$tdatalogins[".printFields"][] = "EmployeeID";


//	LogID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LogID";
	$fdata["GoodName"] = "LogID";
	$fdata["ownerTable"] = "logins";
	$fdata["Label"] = GetFieldLabel("logins","LogID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

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




	$tdatalogins["LogID"] = $fdata;
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "logins";
	$fdata["Label"] = GetFieldLabel("logins","UserName");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalogins["UserName"] = $fdata;
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "logins";
	$fdata["Label"] = GetFieldLabel("logins","Password");
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

		$fdata["strField"] = "Password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Password";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Password");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

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




	$tdatalogins["Password"] = $fdata;
//	FullName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FullName";
	$fdata["GoodName"] = "FullName";
	$fdata["ownerTable"] = "logins";
	$fdata["Label"] = GetFieldLabel("logins","FullName");
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

		$fdata["strField"] = "FullName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FullName";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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




	$tdatalogins["FullName"] = $fdata;
//	Position
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Position";
	$fdata["GoodName"] = "Position";
	$fdata["ownerTable"] = "logins";
	$fdata["Label"] = GetFieldLabel("logins","Position");
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

		$fdata["strField"] = "Position";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Position`";

	
	
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
	$edata["LookupTable"] = "positions";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "posID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Position";
	
	

	
	$edata["LookupOrderBy"] = "Position";

	
	
		$edata["AllowToAdd"] = true;

	

	
	
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




	$tdatalogins["Position"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "logins";
	$fdata["Label"] = GetFieldLabel("logins","EmployeeID");
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




	$tdatalogins["EmployeeID"] = $fdata;


$tables_data["logins"]=&$tdatalogins;
$field_labels["logins"] = &$fieldLabelslogins;
$fieldToolTips["logins"] = &$fieldToolTipslogins;
$placeHolders["logins"] = &$placeHolderslogins;
$page_titles["logins"] = &$pageTitleslogins;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["logins"] = array();
//	divisionaccess
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="divisionaccess";
		$detailsParam["dOriginalTable"] = "divisionaccess";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "divisionaccess";
	$detailsParam["dCaptionTable"] = GetTableCaption("divisionaccess");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["logins"][$dIndex] = $detailsParam;

	
		$detailsTablesData["logins"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["logins"][$dIndex]["masterKeys"][]="LogID";

				$detailsTablesData["logins"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["logins"][$dIndex]["detailKeys"][]="LogID";

// tables which are master tables for current table (detail)
$masterTablesData["logins"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_logins()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LogID,  	UserName,  	Password,  	FullName,  	`Position`,  	EmployeeID";
$proto0["m_strFrom"] = "FROM logins";
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
	"m_strName" => "LogID",
	"m_strTable" => "logins",
	"m_srcTableName" => "logins"
));

$proto6["m_sql"] = "LogID";
$proto6["m_srcTableName"] = "logins";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "logins",
	"m_srcTableName" => "logins"
));

$proto8["m_sql"] = "UserName";
$proto8["m_srcTableName"] = "logins";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "logins",
	"m_srcTableName" => "logins"
));

$proto10["m_sql"] = "Password";
$proto10["m_srcTableName"] = "logins";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "FullName",
	"m_strTable" => "logins",
	"m_srcTableName" => "logins"
));

$proto12["m_sql"] = "FullName";
$proto12["m_srcTableName"] = "logins";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Position",
	"m_strTable" => "logins",
	"m_srcTableName" => "logins"
));

$proto14["m_sql"] = "`Position`";
$proto14["m_srcTableName"] = "logins";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "logins",
	"m_srcTableName" => "logins"
));

$proto16["m_sql"] = "EmployeeID";
$proto16["m_srcTableName"] = "logins";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "logins";
$proto19["m_srcTableName"] = "logins";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "LogID";
$proto19["m_columns"][] = "UserName";
$proto19["m_columns"][] = "Password";
$proto19["m_columns"][] = "FullName";
$proto19["m_columns"][] = "Position";
$proto19["m_columns"][] = "EmployeeID";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "logins";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "logins";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="logins";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_logins = createSqlQuery_logins();


	
		;

						

$tdatalogins[".sqlquery"] = $queryData_logins;

$tableEvents["logins"] = new eventsBase;
$tdatalogins[".hasEvents"] = false;

?>