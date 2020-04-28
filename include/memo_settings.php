<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamemo = array();
	$tdatamemo[".truncateText"] = true;
	$tdatamemo[".NumberOfChars"] = 80;
	$tdatamemo[".ShortName"] = "memo";
	$tdatamemo[".OwnerID"] = "";
	$tdatamemo[".OriginalTable"] = "memo";

//	field labels
$fieldLabelsmemo = array();
$fieldToolTipsmemo = array();
$pageTitlesmemo = array();
$placeHoldersmemo = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmemo["English"] = array();
	$fieldToolTipsmemo["English"] = array();
	$placeHoldersmemo["English"] = array();
	$pageTitlesmemo["English"] = array();
	$fieldLabelsmemo["English"]["MemID"] = "Mem ID";
	$fieldToolTipsmemo["English"]["MemID"] = "";
	$placeHoldersmemo["English"]["MemID"] = "";
	$fieldLabelsmemo["English"]["Subject"] = "Subject";
	$fieldToolTipsmemo["English"]["Subject"] = "";
	$placeHoldersmemo["English"]["Subject"] = "";
	$fieldLabelsmemo["English"]["To"] = "To";
	$fieldToolTipsmemo["English"]["To"] = "";
	$placeHoldersmemo["English"]["To"] = "";
	$fieldLabelsmemo["English"]["From"] = "From";
	$fieldToolTipsmemo["English"]["From"] = "";
	$placeHoldersmemo["English"]["From"] = "";
	$fieldLabelsmemo["English"]["Memo"] = "Memo";
	$fieldToolTipsmemo["English"]["Memo"] = "";
	$placeHoldersmemo["English"]["Memo"] = "";
	$fieldLabelsmemo["English"]["PreparedBy"] = "Prepared By";
	$fieldToolTipsmemo["English"]["PreparedBy"] = "";
	$placeHoldersmemo["English"]["PreparedBy"] = "";
	$fieldLabelsmemo["English"]["MDate"] = "Memo Date";
	$fieldToolTipsmemo["English"]["MDate"] = "";
	$placeHoldersmemo["English"]["MDate"] = "";
	if (count($fieldToolTipsmemo["English"]))
		$tdatamemo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmemo[""] = array();
	$fieldToolTipsmemo[""] = array();
	$placeHoldersmemo[""] = array();
	$pageTitlesmemo[""] = array();
	$fieldLabelsmemo[""]["MemID"] = "Mem ID";
	$fieldToolTipsmemo[""]["MemID"] = "";
	$placeHoldersmemo[""]["MemID"] = "";
	$fieldLabelsmemo[""]["Subject"] = "Subject";
	$fieldToolTipsmemo[""]["Subject"] = "";
	$placeHoldersmemo[""]["Subject"] = "";
	$fieldLabelsmemo[""]["To"] = "To";
	$fieldToolTipsmemo[""]["To"] = "";
	$placeHoldersmemo[""]["To"] = "";
	$fieldLabelsmemo[""]["From"] = "From";
	$fieldToolTipsmemo[""]["From"] = "";
	$placeHoldersmemo[""]["From"] = "";
	$fieldLabelsmemo[""]["Memo"] = "Memo";
	$fieldToolTipsmemo[""]["Memo"] = "";
	$placeHoldersmemo[""]["Memo"] = "";
	$fieldLabelsmemo[""]["PreparedBy"] = "Prepared By";
	$fieldToolTipsmemo[""]["PreparedBy"] = "";
	$placeHoldersmemo[""]["PreparedBy"] = "";
	$fieldLabelsmemo[""]["MDate"] = "MDate";
	$fieldToolTipsmemo[""]["MDate"] = "";
	$placeHoldersmemo[""]["MDate"] = "";
	if (count($fieldToolTipsmemo[""]))
		$tdatamemo[".isUseToolTips"] = true;
}


	$tdatamemo[".NCSearch"] = true;



$tdatamemo[".shortTableName"] = "memo";
$tdatamemo[".nSecOptions"] = 0;
$tdatamemo[".recsPerRowPrint"] = 1;
$tdatamemo[".mainTableOwnerID"] = "";
$tdatamemo[".moveNext"] = 1;
$tdatamemo[".entityType"] = 0;

$tdatamemo[".strOriginalTableName"] = "memo";

	



$tdatamemo[".showAddInPopup"] = false;

$tdatamemo[".showEditInPopup"] = false;

$tdatamemo[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamemo[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamemo[".fieldsForRegister"] = array();

$tdatamemo[".listAjax"] = false;

	$tdatamemo[".audit"] = false;

	$tdatamemo[".locking"] = false;

$tdatamemo[".edit"] = true;
$tdatamemo[".afterEditAction"] = 1;
$tdatamemo[".closePopupAfterEdit"] = 1;
$tdatamemo[".afterEditActionDetTable"] = "";

$tdatamemo[".add"] = true;
$tdatamemo[".afterAddAction"] = 1;
$tdatamemo[".closePopupAfterAdd"] = 1;
$tdatamemo[".afterAddActionDetTable"] = "";

$tdatamemo[".list"] = true;



$tdatamemo[".reorderRecordsByHeader"] = true;


$tdatamemo[".exportFormatting"] = 2;
$tdatamemo[".exportDelimiter"] = ",";
		
$tdatamemo[".view"] = true;

$tdatamemo[".import"] = true;

$tdatamemo[".exportTo"] = true;

$tdatamemo[".printFriendly"] = true;

$tdatamemo[".delete"] = true;

$tdatamemo[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamemo[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamemo[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamemo[".searchSaving"] = false;
//

$tdatamemo[".showSearchPanel"] = true;
		$tdatamemo[".flexibleSearch"] = true;

$tdatamemo[".isUseAjaxSuggest"] = true;

$tdatamemo[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdatamemo[".ajaxCodeSnippetAdded"] = false;

$tdatamemo[".buttonsAdded"] = false;

$tdatamemo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamemo[".isUseTimeForSearch"] = false;





$tdatamemo[".allSearchFields"] = array();
$tdatamemo[".filterFields"] = array();
$tdatamemo[".requiredSearchFields"] = array();

$tdatamemo[".allSearchFields"][] = "MemID";
	$tdatamemo[".allSearchFields"][] = "MDate";
	$tdatamemo[".allSearchFields"][] = "Subject";
	$tdatamemo[".allSearchFields"][] = "To";
	$tdatamemo[".allSearchFields"][] = "From";
	$tdatamemo[".allSearchFields"][] = "Memo";
	$tdatamemo[".allSearchFields"][] = "PreparedBy";
	

$tdatamemo[".googleLikeFields"] = array();
$tdatamemo[".googleLikeFields"][] = "MemID";
$tdatamemo[".googleLikeFields"][] = "Subject";
$tdatamemo[".googleLikeFields"][] = "To";
$tdatamemo[".googleLikeFields"][] = "From";
$tdatamemo[".googleLikeFields"][] = "Memo";
$tdatamemo[".googleLikeFields"][] = "PreparedBy";
$tdatamemo[".googleLikeFields"][] = "MDate";


$tdatamemo[".advSearchFields"] = array();
$tdatamemo[".advSearchFields"][] = "MemID";
$tdatamemo[".advSearchFields"][] = "MDate";
$tdatamemo[".advSearchFields"][] = "Subject";
$tdatamemo[".advSearchFields"][] = "To";
$tdatamemo[".advSearchFields"][] = "From";
$tdatamemo[".advSearchFields"][] = "Memo";
$tdatamemo[".advSearchFields"][] = "PreparedBy";

$tdatamemo[".tableType"] = "list";

$tdatamemo[".printerPageOrientation"] = 0;
$tdatamemo[".nPrinterPageScale"] = 100;

$tdatamemo[".nPrinterSplitRecords"] = 40;

$tdatamemo[".nPrinterPDFSplitRecords"] = 40;



$tdatamemo[".geocodingEnabled"] = false;





$tdatamemo[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamemo[".pageSize"] = 20;

$tdatamemo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamemo[".strOrderBy"] = $tstrOrderBy;

$tdatamemo[".orderindexes"] = array();

$tdatamemo[".sqlHead"] = "SELECT MemID,  	Subject,  	`To`,  	`From`,  	`Memo`,  	PreparedBy,  	MDate";
$tdatamemo[".sqlFrom"] = "FROM `memo`";
$tdatamemo[".sqlWhereExpr"] = "";
$tdatamemo[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamemo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamemo[".arrGroupsPerPage"] = $arrGPP;

$tdatamemo[".highlightSearchResults"] = true;

$tableKeysmemo = array();
$tableKeysmemo[] = "MemID";
$tdatamemo[".Keys"] = $tableKeysmemo;

$tdatamemo[".listFields"] = array();
$tdatamemo[".listFields"][] = "MemID";
$tdatamemo[".listFields"][] = "MDate";
$tdatamemo[".listFields"][] = "Subject";
$tdatamemo[".listFields"][] = "To";
$tdatamemo[".listFields"][] = "From";
$tdatamemo[".listFields"][] = "Memo";
$tdatamemo[".listFields"][] = "PreparedBy";

$tdatamemo[".hideMobileList"] = array();


$tdatamemo[".viewFields"] = array();
$tdatamemo[".viewFields"][] = "MemID";
$tdatamemo[".viewFields"][] = "MDate";
$tdatamemo[".viewFields"][] = "Subject";
$tdatamemo[".viewFields"][] = "To";
$tdatamemo[".viewFields"][] = "From";
$tdatamemo[".viewFields"][] = "Memo";
$tdatamemo[".viewFields"][] = "PreparedBy";

$tdatamemo[".addFields"] = array();
$tdatamemo[".addFields"][] = "MDate";
$tdatamemo[".addFields"][] = "Subject";
$tdatamemo[".addFields"][] = "To";
$tdatamemo[".addFields"][] = "From";
$tdatamemo[".addFields"][] = "Memo";

$tdatamemo[".masterListFields"] = array();
$tdatamemo[".masterListFields"][] = "MemID";
$tdatamemo[".masterListFields"][] = "MDate";
$tdatamemo[".masterListFields"][] = "Subject";
$tdatamemo[".masterListFields"][] = "To";
$tdatamemo[".masterListFields"][] = "From";
$tdatamemo[".masterListFields"][] = "Memo";
$tdatamemo[".masterListFields"][] = "PreparedBy";

$tdatamemo[".inlineAddFields"] = array();

$tdatamemo[".editFields"] = array();
$tdatamemo[".editFields"][] = "MDate";
$tdatamemo[".editFields"][] = "Subject";
$tdatamemo[".editFields"][] = "To";
$tdatamemo[".editFields"][] = "From";
$tdatamemo[".editFields"][] = "Memo";
$tdatamemo[".editFields"][] = "PreparedBy";

$tdatamemo[".inlineEditFields"] = array();

$tdatamemo[".updateSelectedFields"] = array();
$tdatamemo[".updateSelectedFields"][] = "MDate";
$tdatamemo[".updateSelectedFields"][] = "Subject";
$tdatamemo[".updateSelectedFields"][] = "To";
$tdatamemo[".updateSelectedFields"][] = "From";
$tdatamemo[".updateSelectedFields"][] = "Memo";
$tdatamemo[".updateSelectedFields"][] = "PreparedBy";


$tdatamemo[".exportFields"] = array();
$tdatamemo[".exportFields"][] = "MemID";
$tdatamemo[".exportFields"][] = "MDate";
$tdatamemo[".exportFields"][] = "Subject";
$tdatamemo[".exportFields"][] = "To";
$tdatamemo[".exportFields"][] = "From";
$tdatamemo[".exportFields"][] = "Memo";
$tdatamemo[".exportFields"][] = "PreparedBy";

$tdatamemo[".importFields"] = array();
$tdatamemo[".importFields"][] = "MemID";
$tdatamemo[".importFields"][] = "Subject";
$tdatamemo[".importFields"][] = "To";
$tdatamemo[".importFields"][] = "From";
$tdatamemo[".importFields"][] = "Memo";
$tdatamemo[".importFields"][] = "PreparedBy";
$tdatamemo[".importFields"][] = "MDate";

$tdatamemo[".printFields"] = array();
$tdatamemo[".printFields"][] = "MemID";
$tdatamemo[".printFields"][] = "MDate";
$tdatamemo[".printFields"][] = "Subject";
$tdatamemo[".printFields"][] = "To";
$tdatamemo[".printFields"][] = "From";
$tdatamemo[".printFields"][] = "Memo";
$tdatamemo[".printFields"][] = "PreparedBy";


//	MemID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MemID";
	$fdata["GoodName"] = "MemID";
	$fdata["ownerTable"] = "memo";
	$fdata["Label"] = GetFieldLabel("memo","MemID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MemID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MemID";

	
	
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




	$tdatamemo["MemID"] = $fdata;
//	Subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Subject";
	$fdata["GoodName"] = "Subject";
	$fdata["ownerTable"] = "memo";
	$fdata["Label"] = GetFieldLabel("memo","Subject");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Subject";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Subject";

	
	
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




	$tdatamemo["Subject"] = $fdata;
//	To
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "To";
	$fdata["GoodName"] = "To";
	$fdata["ownerTable"] = "memo";
	$fdata["Label"] = GetFieldLabel("memo","To");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "To";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`To`";

	
	
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




	$tdatamemo["To"] = $fdata;
//	From
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "From";
	$fdata["GoodName"] = "From";
	$fdata["ownerTable"] = "memo";
	$fdata["Label"] = GetFieldLabel("memo","From");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "From";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`From`";

	
	
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




	$tdatamemo["From"] = $fdata;
//	Memo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Memo";
	$fdata["GoodName"] = "Memo";
	$fdata["ownerTable"] = "memo";
	$fdata["Label"] = GetFieldLabel("memo","Memo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Memo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Memo`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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




	$tdatamemo["Memo"] = $fdata;
//	PreparedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PreparedBy";
	$fdata["GoodName"] = "PreparedBy";
	$fdata["ownerTable"] = "memo";
	$fdata["Label"] = GetFieldLabel("memo","PreparedBy");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


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

	
		
	$edata["LinkField"] = "FullName";
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




	$tdatamemo["PreparedBy"] = $fdata;
//	MDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "MDate";
	$fdata["GoodName"] = "MDate";
	$fdata["ownerTable"] = "memo";
	$fdata["Label"] = GetFieldLabel("memo","MDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MDate";

	
	
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




	$tdatamemo["MDate"] = $fdata;


$tables_data["memo"]=&$tdatamemo;
$field_labels["memo"] = &$fieldLabelsmemo;
$fieldToolTips["memo"] = &$fieldToolTipsmemo;
$placeHolders["memo"] = &$placeHoldersmemo;
$page_titles["memo"] = &$pageTitlesmemo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["memo"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["memo"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_memo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MemID,  	Subject,  	`To`,  	`From`,  	`Memo`,  	PreparedBy,  	MDate";
$proto0["m_strFrom"] = "FROM `memo`";
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
	"m_strName" => "MemID",
	"m_strTable" => "memo",
	"m_srcTableName" => "memo"
));

$proto6["m_sql"] = "MemID";
$proto6["m_srcTableName"] = "memo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Subject",
	"m_strTable" => "memo",
	"m_srcTableName" => "memo"
));

$proto8["m_sql"] = "Subject";
$proto8["m_srcTableName"] = "memo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "To",
	"m_strTable" => "memo",
	"m_srcTableName" => "memo"
));

$proto10["m_sql"] = "`To`";
$proto10["m_srcTableName"] = "memo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "From",
	"m_strTable" => "memo",
	"m_srcTableName" => "memo"
));

$proto12["m_sql"] = "`From`";
$proto12["m_srcTableName"] = "memo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Memo",
	"m_strTable" => "memo",
	"m_srcTableName" => "memo"
));

$proto14["m_sql"] = "`Memo`";
$proto14["m_srcTableName"] = "memo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PreparedBy",
	"m_strTable" => "memo",
	"m_srcTableName" => "memo"
));

$proto16["m_sql"] = "PreparedBy";
$proto16["m_srcTableName"] = "memo";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "MDate",
	"m_strTable" => "memo",
	"m_srcTableName" => "memo"
));

$proto18["m_sql"] = "MDate";
$proto18["m_srcTableName"] = "memo";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "memo";
$proto21["m_srcTableName"] = "memo";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "MemID";
$proto21["m_columns"][] = "Subject";
$proto21["m_columns"][] = "To";
$proto21["m_columns"][] = "From";
$proto21["m_columns"][] = "Memo";
$proto21["m_columns"][] = "PreparedBy";
$proto21["m_columns"][] = "MDate";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`memo`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "memo";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="memo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_memo = createSqlQuery_memo();


	
		;

							

$tdatamemo[".sqlquery"] = $queryData_memo;

$tableEvents["memo"] = new eventsBase;
$tdatamemo[".hasEvents"] = false;

?>