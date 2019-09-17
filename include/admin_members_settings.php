<?php
require_once(getabspath("classes/cipherer.php"));




$tdataadmin_members = array();
	$tdataadmin_members[".truncateText"] = true;
	$tdataadmin_members[".NumberOfChars"] = 80;
	$tdataadmin_members[".ShortName"] = "admin_members";
	$tdataadmin_members[".OwnerID"] = "";
	$tdataadmin_members[".OriginalTable"] = "logins";

//	field labels
$fieldLabelsadmin_members = array();
$fieldToolTipsadmin_members = array();
$pageTitlesadmin_members = array();
$placeHoldersadmin_members = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_members["English"] = array();
	$fieldToolTipsadmin_members["English"] = array();
	$placeHoldersadmin_members["English"] = array();
	$pageTitlesadmin_members["English"] = array();
	$fieldLabelsadmin_members["English"]["LogID"] = "Log ID";
	$fieldToolTipsadmin_members["English"]["LogID"] = "";
	$placeHoldersadmin_members["English"]["LogID"] = "";
	$fieldLabelsadmin_members["English"]["UserName"] = "User Name";
	$fieldToolTipsadmin_members["English"]["UserName"] = "";
	$placeHoldersadmin_members["English"]["UserName"] = "";
	$fieldLabelsadmin_members["English"]["Password"] = "Password";
	$fieldToolTipsadmin_members["English"]["Password"] = "";
	$placeHoldersadmin_members["English"]["Password"] = "";
	$fieldLabelsadmin_members["English"]["FullName"] = "Full Name";
	$fieldToolTipsadmin_members["English"]["FullName"] = "";
	$placeHoldersadmin_members["English"]["FullName"] = "";
	$fieldLabelsadmin_members["English"]["Position"] = "Position";
	$fieldToolTipsadmin_members["English"]["Position"] = "";
	$placeHoldersadmin_members["English"]["Position"] = "";
	$fieldLabelsadmin_members["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipsadmin_members["English"]["EmployeeID"] = "";
	$placeHoldersadmin_members["English"]["EmployeeID"] = "";
	if (count($fieldToolTipsadmin_members["English"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsadmin_members[""] = array();
	$fieldToolTipsadmin_members[""] = array();
	$placeHoldersadmin_members[""] = array();
	$pageTitlesadmin_members[""] = array();
	if (count($fieldToolTipsadmin_members[""]))
		$tdataadmin_members[".isUseToolTips"] = true;
}


	$tdataadmin_members[".NCSearch"] = true;



$tdataadmin_members[".shortTableName"] = "admin_members";
$tdataadmin_members[".nSecOptions"] = 0;
$tdataadmin_members[".recsPerRowPrint"] = 1;
$tdataadmin_members[".mainTableOwnerID"] = "";
$tdataadmin_members[".moveNext"] = 1;
$tdataadmin_members[".entityType"] = 1;

$tdataadmin_members[".strOriginalTableName"] = "logins";

	



$tdataadmin_members[".showAddInPopup"] = false;

$tdataadmin_members[".showEditInPopup"] = false;

$tdataadmin_members[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadmin_members[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadmin_members[".fieldsForRegister"] = array();

$tdataadmin_members[".listAjax"] = false;

	$tdataadmin_members[".audit"] = false;

	$tdataadmin_members[".locking"] = false;






$tdataadmin_members[".reorderRecordsByHeader"] = true;








$tdataadmin_members[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataadmin_members[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataadmin_members[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataadmin_members[".searchSaving"] = false;
//

$tdataadmin_members[".showSearchPanel"] = true;
		$tdataadmin_members[".flexibleSearch"] = true;

$tdataadmin_members[".isUseAjaxSuggest"] = true;

$tdataadmin_members[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																		

$tdataadmin_members[".ajaxCodeSnippetAdded"] = false;

$tdataadmin_members[".buttonsAdded"] = false;

$tdataadmin_members[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_members[".isUseTimeForSearch"] = false;





$tdataadmin_members[".allSearchFields"] = array();
$tdataadmin_members[".filterFields"] = array();
$tdataadmin_members[".requiredSearchFields"] = array();

$tdataadmin_members[".allSearchFields"][] = "LogID";
	$tdataadmin_members[".allSearchFields"][] = "UserName";
	$tdataadmin_members[".allSearchFields"][] = "Password";
	$tdataadmin_members[".allSearchFields"][] = "FullName";
	$tdataadmin_members[".allSearchFields"][] = "Position";
	$tdataadmin_members[".allSearchFields"][] = "EmployeeID";
	

$tdataadmin_members[".googleLikeFields"] = array();
$tdataadmin_members[".googleLikeFields"][] = "LogID";
$tdataadmin_members[".googleLikeFields"][] = "UserName";
$tdataadmin_members[".googleLikeFields"][] = "Password";
$tdataadmin_members[".googleLikeFields"][] = "FullName";
$tdataadmin_members[".googleLikeFields"][] = "Position";
$tdataadmin_members[".googleLikeFields"][] = "EmployeeID";


$tdataadmin_members[".advSearchFields"] = array();
$tdataadmin_members[".advSearchFields"][] = "LogID";
$tdataadmin_members[".advSearchFields"][] = "UserName";
$tdataadmin_members[".advSearchFields"][] = "Password";
$tdataadmin_members[".advSearchFields"][] = "FullName";
$tdataadmin_members[".advSearchFields"][] = "Position";
$tdataadmin_members[".advSearchFields"][] = "EmployeeID";

$tdataadmin_members[".tableType"] = "list";

$tdataadmin_members[".printerPageOrientation"] = 0;
$tdataadmin_members[".nPrinterPageScale"] = 100;

$tdataadmin_members[".nPrinterSplitRecords"] = 40;

$tdataadmin_members[".nPrinterPDFSplitRecords"] = 40;



$tdataadmin_members[".geocodingEnabled"] = false;





$tdataadmin_members[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataadmin_members[".pageSize"] = 20;

$tdataadmin_members[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadmin_members[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_members[".orderindexes"] = array();

$tdataadmin_members[".sqlHead"] = "SELECT LogID,  	UserName,  	Password,  	FullName,  	`Position`,  	EmployeeID";
$tdataadmin_members[".sqlFrom"] = "FROM logins";
$tdataadmin_members[".sqlWhereExpr"] = "";
$tdataadmin_members[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_members[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_members[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_members[".highlightSearchResults"] = true;

$tableKeysadmin_members = array();
$tableKeysadmin_members[] = "LogID";
$tdataadmin_members[".Keys"] = $tableKeysadmin_members;

$tdataadmin_members[".listFields"] = array();
$tdataadmin_members[".listFields"][] = "LogID";
$tdataadmin_members[".listFields"][] = "UserName";
$tdataadmin_members[".listFields"][] = "Password";
$tdataadmin_members[".listFields"][] = "FullName";
$tdataadmin_members[".listFields"][] = "Position";
$tdataadmin_members[".listFields"][] = "EmployeeID";

$tdataadmin_members[".hideMobileList"] = array();


$tdataadmin_members[".viewFields"] = array();
$tdataadmin_members[".viewFields"][] = "LogID";
$tdataadmin_members[".viewFields"][] = "UserName";
$tdataadmin_members[".viewFields"][] = "Password";
$tdataadmin_members[".viewFields"][] = "FullName";
$tdataadmin_members[".viewFields"][] = "Position";
$tdataadmin_members[".viewFields"][] = "EmployeeID";

$tdataadmin_members[".addFields"] = array();
$tdataadmin_members[".addFields"][] = "UserName";
$tdataadmin_members[".addFields"][] = "Password";
$tdataadmin_members[".addFields"][] = "FullName";
$tdataadmin_members[".addFields"][] = "Position";
$tdataadmin_members[".addFields"][] = "EmployeeID";

$tdataadmin_members[".masterListFields"] = array();
$tdataadmin_members[".masterListFields"][] = "LogID";
$tdataadmin_members[".masterListFields"][] = "UserName";
$tdataadmin_members[".masterListFields"][] = "Password";
$tdataadmin_members[".masterListFields"][] = "FullName";
$tdataadmin_members[".masterListFields"][] = "Position";
$tdataadmin_members[".masterListFields"][] = "EmployeeID";

$tdataadmin_members[".inlineAddFields"] = array();
$tdataadmin_members[".inlineAddFields"][] = "UserName";
$tdataadmin_members[".inlineAddFields"][] = "Password";
$tdataadmin_members[".inlineAddFields"][] = "FullName";
$tdataadmin_members[".inlineAddFields"][] = "Position";
$tdataadmin_members[".inlineAddFields"][] = "EmployeeID";

$tdataadmin_members[".editFields"] = array();
$tdataadmin_members[".editFields"][] = "UserName";
$tdataadmin_members[".editFields"][] = "Password";
$tdataadmin_members[".editFields"][] = "FullName";
$tdataadmin_members[".editFields"][] = "Position";
$tdataadmin_members[".editFields"][] = "EmployeeID";

$tdataadmin_members[".inlineEditFields"] = array();
$tdataadmin_members[".inlineEditFields"][] = "UserName";
$tdataadmin_members[".inlineEditFields"][] = "Password";
$tdataadmin_members[".inlineEditFields"][] = "FullName";
$tdataadmin_members[".inlineEditFields"][] = "Position";
$tdataadmin_members[".inlineEditFields"][] = "EmployeeID";

$tdataadmin_members[".updateSelectedFields"] = array();
$tdataadmin_members[".updateSelectedFields"][] = "UserName";
$tdataadmin_members[".updateSelectedFields"][] = "Password";
$tdataadmin_members[".updateSelectedFields"][] = "FullName";
$tdataadmin_members[".updateSelectedFields"][] = "Position";
$tdataadmin_members[".updateSelectedFields"][] = "EmployeeID";


$tdataadmin_members[".exportFields"] = array();
$tdataadmin_members[".exportFields"][] = "LogID";
$tdataadmin_members[".exportFields"][] = "UserName";
$tdataadmin_members[".exportFields"][] = "Password";
$tdataadmin_members[".exportFields"][] = "FullName";
$tdataadmin_members[".exportFields"][] = "Position";
$tdataadmin_members[".exportFields"][] = "EmployeeID";

$tdataadmin_members[".importFields"] = array();
$tdataadmin_members[".importFields"][] = "LogID";
$tdataadmin_members[".importFields"][] = "UserName";
$tdataadmin_members[".importFields"][] = "Password";
$tdataadmin_members[".importFields"][] = "FullName";
$tdataadmin_members[".importFields"][] = "Position";
$tdataadmin_members[".importFields"][] = "EmployeeID";

$tdataadmin_members[".printFields"] = array();
$tdataadmin_members[".printFields"][] = "LogID";
$tdataadmin_members[".printFields"][] = "UserName";
$tdataadmin_members[".printFields"][] = "Password";
$tdataadmin_members[".printFields"][] = "FullName";
$tdataadmin_members[".printFields"][] = "Position";
$tdataadmin_members[".printFields"][] = "EmployeeID";


//	LogID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LogID";
	$fdata["GoodName"] = "LogID";
	$fdata["ownerTable"] = "logins";
	$fdata["Label"] = GetFieldLabel("admin_members","LogID");
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




	$tdataadmin_members["LogID"] = $fdata;
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "logins";
	$fdata["Label"] = GetFieldLabel("admin_members","UserName");
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




	$tdataadmin_members["UserName"] = $fdata;
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "logins";
	$fdata["Label"] = GetFieldLabel("admin_members","Password");
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




	$tdataadmin_members["Password"] = $fdata;
//	FullName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FullName";
	$fdata["GoodName"] = "FullName";
	$fdata["ownerTable"] = "logins";
	$fdata["Label"] = GetFieldLabel("admin_members","FullName");
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




	$tdataadmin_members["FullName"] = $fdata;
//	Position
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Position";
	$fdata["GoodName"] = "Position";
	$fdata["ownerTable"] = "logins";
	$fdata["Label"] = GetFieldLabel("admin_members","Position");
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

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=60";

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




	$tdataadmin_members["Position"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "logins";
	$fdata["Label"] = GetFieldLabel("admin_members","EmployeeID");
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




	$tdataadmin_members["EmployeeID"] = $fdata;


$tables_data["admin_members"]=&$tdataadmin_members;
$field_labels["admin_members"] = &$fieldLabelsadmin_members;
$fieldToolTips["admin_members"] = &$fieldToolTipsadmin_members;
$placeHolders["admin_members"] = &$placeHoldersadmin_members;
$page_titles["admin_members"] = &$pageTitlesadmin_members;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_members"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["admin_members"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_members()
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
	"m_srcTableName" => "admin_members"
));

$proto6["m_sql"] = "LogID";
$proto6["m_srcTableName"] = "admin_members";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "logins",
	"m_srcTableName" => "admin_members"
));

$proto8["m_sql"] = "UserName";
$proto8["m_srcTableName"] = "admin_members";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "logins",
	"m_srcTableName" => "admin_members"
));

$proto10["m_sql"] = "Password";
$proto10["m_srcTableName"] = "admin_members";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "FullName",
	"m_strTable" => "logins",
	"m_srcTableName" => "admin_members"
));

$proto12["m_sql"] = "FullName";
$proto12["m_srcTableName"] = "admin_members";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Position",
	"m_strTable" => "logins",
	"m_srcTableName" => "admin_members"
));

$proto14["m_sql"] = "`Position`";
$proto14["m_srcTableName"] = "admin_members";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "logins",
	"m_srcTableName" => "admin_members"
));

$proto16["m_sql"] = "EmployeeID";
$proto16["m_srcTableName"] = "admin_members";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "logins";
$proto19["m_srcTableName"] = "admin_members";
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
$proto18["m_srcTableName"] = "admin_members";
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
$proto0["m_srcTableName"]="admin_members";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_members = createSqlQuery_admin_members();


	
		;

						

$tdataadmin_members[".sqlquery"] = $queryData_admin_members;

$tableEvents["admin_members"] = new eventsBase;
$tdataadmin_members[".hasEvents"] = false;

?>