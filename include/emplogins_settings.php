<?php
require_once(getabspath("classes/cipherer.php"));




$tdataemplogins = array();
	$tdataemplogins[".truncateText"] = true;
	$tdataemplogins[".NumberOfChars"] = 80;
	$tdataemplogins[".ShortName"] = "emplogins";
	$tdataemplogins[".OwnerID"] = "LogID";
	$tdataemplogins[".OriginalTable"] = "logins";

//	field labels
$fieldLabelsemplogins = array();
$fieldToolTipsemplogins = array();
$pageTitlesemplogins = array();
$placeHoldersemplogins = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsemplogins["English"] = array();
	$fieldToolTipsemplogins["English"] = array();
	$placeHoldersemplogins["English"] = array();
	$pageTitlesemplogins["English"] = array();
	$fieldLabelsemplogins["English"]["LogID"] = "Log ID";
	$fieldToolTipsemplogins["English"]["LogID"] = "";
	$placeHoldersemplogins["English"]["LogID"] = "";
	$fieldLabelsemplogins["English"]["UserName"] = "User Name";
	$fieldToolTipsemplogins["English"]["UserName"] = "";
	$placeHoldersemplogins["English"]["UserName"] = "";
	$fieldLabelsemplogins["English"]["Password"] = "Password";
	$fieldToolTipsemplogins["English"]["Password"] = "";
	$placeHoldersemplogins["English"]["Password"] = "";
	$fieldLabelsemplogins["English"]["FullName"] = "Full Name";
	$fieldToolTipsemplogins["English"]["FullName"] = "";
	$placeHoldersemplogins["English"]["FullName"] = "";
	$fieldLabelsemplogins["English"]["Position"] = "Position";
	$fieldToolTipsemplogins["English"]["Position"] = "";
	$placeHoldersemplogins["English"]["Position"] = "";
	$fieldLabelsemplogins["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipsemplogins["English"]["EmployeeID"] = "";
	$placeHoldersemplogins["English"]["EmployeeID"] = "";
	if (count($fieldToolTipsemplogins["English"]))
		$tdataemplogins[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsemplogins[""] = array();
	$fieldToolTipsemplogins[""] = array();
	$placeHoldersemplogins[""] = array();
	$pageTitlesemplogins[""] = array();
	if (count($fieldToolTipsemplogins[""]))
		$tdataemplogins[".isUseToolTips"] = true;
}


	$tdataemplogins[".NCSearch"] = true;



$tdataemplogins[".shortTableName"] = "emplogins";
$tdataemplogins[".nSecOptions"] = 1;
$tdataemplogins[".recsPerRowPrint"] = 1;
$tdataemplogins[".mainTableOwnerID"] = "LogID";
$tdataemplogins[".moveNext"] = 1;
$tdataemplogins[".entityType"] = 1;

$tdataemplogins[".strOriginalTableName"] = "logins";

	



$tdataemplogins[".showAddInPopup"] = false;

$tdataemplogins[".showEditInPopup"] = false;

$tdataemplogins[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataemplogins[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataemplogins[".fieldsForRegister"] = array();

$tdataemplogins[".listAjax"] = false;

	$tdataemplogins[".audit"] = false;

	$tdataemplogins[".locking"] = false;

$tdataemplogins[".edit"] = true;
$tdataemplogins[".afterEditAction"] = 1;
$tdataemplogins[".closePopupAfterEdit"] = 1;
$tdataemplogins[".afterEditActionDetTable"] = "";

$tdataemplogins[".add"] = true;
$tdataemplogins[".afterAddAction"] = 1;
$tdataemplogins[".closePopupAfterAdd"] = 1;
$tdataemplogins[".afterAddActionDetTable"] = "";

$tdataemplogins[".list"] = true;

$tdataemplogins[".inlineEdit"] = true;

$tdataemplogins[".updateSelected"] = true;

$tdataemplogins[".reorderRecordsByHeader"] = true;


$tdataemplogins[".exportFormatting"] = 2;
$tdataemplogins[".exportDelimiter"] = ",";
		
$tdataemplogins[".inlineAdd"] = true;
$tdataemplogins[".view"] = true;

$tdataemplogins[".import"] = true;

$tdataemplogins[".exportTo"] = true;

$tdataemplogins[".printFriendly"] = true;

$tdataemplogins[".delete"] = true;

$tdataemplogins[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataemplogins[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataemplogins[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataemplogins[".searchSaving"] = false;
//

$tdataemplogins[".showSearchPanel"] = true;
		$tdataemplogins[".flexibleSearch"] = true;

$tdataemplogins[".isUseAjaxSuggest"] = true;

$tdataemplogins[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																				

$tdataemplogins[".ajaxCodeSnippetAdded"] = false;

$tdataemplogins[".buttonsAdded"] = false;

$tdataemplogins[".addPageEvents"] = false;

// use timepicker for search panel
$tdataemplogins[".isUseTimeForSearch"] = false;



$tdataemplogins[".badgeColor"] = "B22222";

$tdataemplogins[".detailsLinksOnList"] = "1";

$tdataemplogins[".allSearchFields"] = array();
$tdataemplogins[".filterFields"] = array();
$tdataemplogins[".requiredSearchFields"] = array();

$tdataemplogins[".allSearchFields"][] = "Password";
	

$tdataemplogins[".googleLikeFields"] = array();
$tdataemplogins[".googleLikeFields"][] = "LogID";
$tdataemplogins[".googleLikeFields"][] = "UserName";
$tdataemplogins[".googleLikeFields"][] = "Password";
$tdataemplogins[".googleLikeFields"][] = "FullName";
$tdataemplogins[".googleLikeFields"][] = "Position";
$tdataemplogins[".googleLikeFields"][] = "EmployeeID";


$tdataemplogins[".advSearchFields"] = array();
$tdataemplogins[".advSearchFields"][] = "Password";

$tdataemplogins[".tableType"] = "list";

$tdataemplogins[".printerPageOrientation"] = 0;
$tdataemplogins[".nPrinterPageScale"] = 100;

$tdataemplogins[".nPrinterSplitRecords"] = 40;

$tdataemplogins[".nPrinterPDFSplitRecords"] = 40;



$tdataemplogins[".geocodingEnabled"] = false;





$tdataemplogins[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataemplogins[".pageSize"] = 20;

$tdataemplogins[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataemplogins[".strOrderBy"] = $tstrOrderBy;

$tdataemplogins[".orderindexes"] = array();

$tdataemplogins[".sqlHead"] = "SELECT LogID,  	UserName,  	Password,  	FullName,  	`Position`,  	EmployeeID";
$tdataemplogins[".sqlFrom"] = "FROM logins";
$tdataemplogins[".sqlWhereExpr"] = "";
$tdataemplogins[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataemplogins[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataemplogins[".arrGroupsPerPage"] = $arrGPP;

$tdataemplogins[".highlightSearchResults"] = true;

$tableKeysemplogins = array();
$tableKeysemplogins[] = "LogID";
$tdataemplogins[".Keys"] = $tableKeysemplogins;

$tdataemplogins[".listFields"] = array();
$tdataemplogins[".listFields"][] = "LogID";
$tdataemplogins[".listFields"][] = "UserName";
$tdataemplogins[".listFields"][] = "Password";
$tdataemplogins[".listFields"][] = "FullName";
$tdataemplogins[".listFields"][] = "Position";
$tdataemplogins[".listFields"][] = "EmployeeID";

$tdataemplogins[".hideMobileList"] = array();


$tdataemplogins[".viewFields"] = array();
$tdataemplogins[".viewFields"][] = "LogID";
$tdataemplogins[".viewFields"][] = "UserName";
$tdataemplogins[".viewFields"][] = "Password";
$tdataemplogins[".viewFields"][] = "FullName";
$tdataemplogins[".viewFields"][] = "Position";
$tdataemplogins[".viewFields"][] = "EmployeeID";

$tdataemplogins[".addFields"] = array();

$tdataemplogins[".masterListFields"] = array();
$tdataemplogins[".masterListFields"][] = "LogID";
$tdataemplogins[".masterListFields"][] = "UserName";
$tdataemplogins[".masterListFields"][] = "Password";
$tdataemplogins[".masterListFields"][] = "FullName";
$tdataemplogins[".masterListFields"][] = "Position";
$tdataemplogins[".masterListFields"][] = "EmployeeID";

$tdataemplogins[".inlineAddFields"] = array();

$tdataemplogins[".editFields"] = array();
$tdataemplogins[".editFields"][] = "UserName";
$tdataemplogins[".editFields"][] = "Password";
$tdataemplogins[".editFields"][] = "FullName";
$tdataemplogins[".editFields"][] = "Position";

$tdataemplogins[".inlineEditFields"] = array();
$tdataemplogins[".inlineEditFields"][] = "UserName";
$tdataemplogins[".inlineEditFields"][] = "Password";
$tdataemplogins[".inlineEditFields"][] = "FullName";
$tdataemplogins[".inlineEditFields"][] = "Position";

$tdataemplogins[".updateSelectedFields"] = array();


$tdataemplogins[".exportFields"] = array();
$tdataemplogins[".exportFields"][] = "Password";

$tdataemplogins[".importFields"] = array();
$tdataemplogins[".importFields"][] = "Password";

$tdataemplogins[".printFields"] = array();
$tdataemplogins[".printFields"][] = "LogID";
$tdataemplogins[".printFields"][] = "UserName";
$tdataemplogins[".printFields"][] = "Password";
$tdataemplogins[".printFields"][] = "FullName";
$tdataemplogins[".printFields"][] = "Position";
$tdataemplogins[".printFields"][] = "EmployeeID";


//	LogID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LogID";
	$fdata["GoodName"] = "LogID";
	$fdata["ownerTable"] = "logins";
	$fdata["Label"] = GetFieldLabel("emplogins","LogID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

	
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








	$tdataemplogins["LogID"] = $fdata;
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "logins";
	$fdata["Label"] = GetFieldLabel("emplogins","UserName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

	
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








	$tdataemplogins["UserName"] = $fdata;
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "logins";
	$fdata["Label"] = GetFieldLabel("emplogins","Password");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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




	$tdataemplogins["Password"] = $fdata;
//	FullName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FullName";
	$fdata["GoodName"] = "FullName";
	$fdata["ownerTable"] = "logins";
	$fdata["Label"] = GetFieldLabel("emplogins","FullName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

	
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








	$tdataemplogins["FullName"] = $fdata;
//	Position
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Position";
	$fdata["GoodName"] = "Position";
	$fdata["ownerTable"] = "logins";
	$fdata["Label"] = GetFieldLabel("emplogins","Position");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

	
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








	$tdataemplogins["Position"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "logins";
	$fdata["Label"] = GetFieldLabel("emplogins","EmployeeID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 97;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataemplogins["EmployeeID"] = $fdata;


$tables_data["emplogins"]=&$tdataemplogins;
$field_labels["emplogins"] = &$fieldLabelsemplogins;
$fieldToolTips["emplogins"] = &$fieldToolTipsemplogins;
$placeHolders["emplogins"] = &$placeHoldersemplogins;
$page_titles["emplogins"] = &$pageTitlesemplogins;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["emplogins"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["emplogins"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_emplogins()
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
	"m_srcTableName" => "emplogins"
));

$proto6["m_sql"] = "LogID";
$proto6["m_srcTableName"] = "emplogins";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "logins",
	"m_srcTableName" => "emplogins"
));

$proto8["m_sql"] = "UserName";
$proto8["m_srcTableName"] = "emplogins";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "logins",
	"m_srcTableName" => "emplogins"
));

$proto10["m_sql"] = "Password";
$proto10["m_srcTableName"] = "emplogins";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "FullName",
	"m_strTable" => "logins",
	"m_srcTableName" => "emplogins"
));

$proto12["m_sql"] = "FullName";
$proto12["m_srcTableName"] = "emplogins";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Position",
	"m_strTable" => "logins",
	"m_srcTableName" => "emplogins"
));

$proto14["m_sql"] = "`Position`";
$proto14["m_srcTableName"] = "emplogins";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "logins",
	"m_srcTableName" => "emplogins"
));

$proto16["m_sql"] = "EmployeeID";
$proto16["m_srcTableName"] = "emplogins";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "logins";
$proto19["m_srcTableName"] = "emplogins";
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
$proto18["m_srcTableName"] = "emplogins";
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
$proto0["m_srcTableName"]="emplogins";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_emplogins = createSqlQuery_emplogins();


	
		;

						

$tdataemplogins[".sqlquery"] = $queryData_emplogins;

include_once(getabspath("include/emplogins_events.php"));
$tableEvents["emplogins"] = new eventclass_emplogins;
$tdataemplogins[".hasEvents"] = true;

?>