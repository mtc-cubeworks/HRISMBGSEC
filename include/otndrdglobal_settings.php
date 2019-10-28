<?php
require_once(getabspath("classes/cipherer.php"));




$tdataotndrdglobal = array();
	$tdataotndrdglobal[".truncateText"] = true;
	$tdataotndrdglobal[".NumberOfChars"] = 80;
	$tdataotndrdglobal[".ShortName"] = "otndrdglobal";
	$tdataotndrdglobal[".OwnerID"] = "";
	$tdataotndrdglobal[".OriginalTable"] = "otndrdglobal";

//	field labels
$fieldLabelsotndrdglobal = array();
$fieldToolTipsotndrdglobal = array();
$pageTitlesotndrdglobal = array();
$placeHoldersotndrdglobal = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsotndrdglobal["English"] = array();
	$fieldToolTipsotndrdglobal["English"] = array();
	$placeHoldersotndrdglobal["English"] = array();
	$pageTitlesotndrdglobal["English"] = array();
	$fieldLabelsotndrdglobal["English"]["GAID"] = "GAID";
	$fieldToolTipsotndrdglobal["English"]["GAID"] = "";
	$placeHoldersotndrdglobal["English"]["GAID"] = "";
	$fieldLabelsotndrdglobal["English"]["ApprovedOT"] = "Approved OT";
	$fieldToolTipsotndrdglobal["English"]["ApprovedOT"] = "";
	$placeHoldersotndrdglobal["English"]["ApprovedOT"] = "";
	$fieldLabelsotndrdglobal["English"]["EarlyOT"] = "Early OT";
	$fieldToolTipsotndrdglobal["English"]["EarlyOT"] = "";
	$placeHoldersotndrdglobal["English"]["EarlyOT"] = "";
	$fieldLabelsotndrdglobal["English"]["PostOT"] = "Post OT";
	$fieldToolTipsotndrdglobal["English"]["PostOT"] = "";
	$placeHoldersotndrdglobal["English"]["PostOT"] = "";
	$fieldLabelsotndrdglobal["English"]["OTGreaterThan"] = "OT Greater Than (mins)";
	$fieldToolTipsotndrdglobal["English"]["OTGreaterThan"] = "";
	$placeHoldersotndrdglobal["English"]["OTGreaterThan"] = "";
	$fieldLabelsotndrdglobal["English"]["ApprovedND"] = "Approved ND";
	$fieldToolTipsotndrdglobal["English"]["ApprovedND"] = "";
	$placeHoldersotndrdglobal["English"]["ApprovedND"] = "";
	$fieldLabelsotndrdglobal["English"]["NDGreaterThan"] = "ND Greater Than (mins)";
	$fieldToolTipsotndrdglobal["English"]["NDGreaterThan"] = "";
	$placeHoldersotndrdglobal["English"]["NDGreaterThan"] = "";
	$fieldLabelsotndrdglobal["English"]["ApprovedRD"] = "Approved RD";
	$fieldToolTipsotndrdglobal["English"]["ApprovedRD"] = "";
	$placeHoldersotndrdglobal["English"]["ApprovedRD"] = "";
	$fieldLabelsotndrdglobal["English"]["RDGreaterThan"] = "RDGreater Than (mins)";
	$fieldToolTipsotndrdglobal["English"]["RDGreaterThan"] = "";
	$placeHoldersotndrdglobal["English"]["RDGreaterThan"] = "";
	$fieldLabelsotndrdglobal["English"]["FiledOTOnly"] = "Filed OT Only";
	$fieldToolTipsotndrdglobal["English"]["FiledOTOnly"] = "";
	$placeHoldersotndrdglobal["English"]["FiledOTOnly"] = "";
	$fieldLabelsotndrdglobal["English"]["OTMinimum"] = "OTMinimum";
	$fieldToolTipsotndrdglobal["English"]["OTMinimum"] = "";
	$placeHoldersotndrdglobal["English"]["OTMinimum"] = "";
	$fieldLabelsotndrdglobal["English"]["NDMinimum"] = "NDMinimum";
	$fieldToolTipsotndrdglobal["English"]["NDMinimum"] = "";
	$placeHoldersotndrdglobal["English"]["NDMinimum"] = "";
	$fieldLabelsotndrdglobal["English"]["RDMinimum"] = "RDMinimum";
	$fieldToolTipsotndrdglobal["English"]["RDMinimum"] = "";
	$placeHoldersotndrdglobal["English"]["RDMinimum"] = "";
	if (count($fieldToolTipsotndrdglobal["English"]))
		$tdataotndrdglobal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsotndrdglobal[""] = array();
	$fieldToolTipsotndrdglobal[""] = array();
	$placeHoldersotndrdglobal[""] = array();
	$pageTitlesotndrdglobal[""] = array();
	$fieldLabelsotndrdglobal[""]["GAID"] = "GAID";
	$fieldToolTipsotndrdglobal[""]["GAID"] = "";
	$placeHoldersotndrdglobal[""]["GAID"] = "";
	$fieldLabelsotndrdglobal[""]["ApprovedOT"] = "Approved OT";
	$fieldToolTipsotndrdglobal[""]["ApprovedOT"] = "";
	$placeHoldersotndrdglobal[""]["ApprovedOT"] = "";
	$fieldLabelsotndrdglobal[""]["EarlyOT"] = "Early OT";
	$fieldToolTipsotndrdglobal[""]["EarlyOT"] = "";
	$placeHoldersotndrdglobal[""]["EarlyOT"] = "";
	$fieldLabelsotndrdglobal[""]["PostOT"] = "Post OT";
	$fieldToolTipsotndrdglobal[""]["PostOT"] = "";
	$placeHoldersotndrdglobal[""]["PostOT"] = "";
	$fieldLabelsotndrdglobal[""]["OTGreaterThan"] = "OTGreater Than";
	$fieldToolTipsotndrdglobal[""]["OTGreaterThan"] = "";
	$placeHoldersotndrdglobal[""]["OTGreaterThan"] = "";
	$fieldLabelsotndrdglobal[""]["ApprovedND"] = "Approved ND";
	$fieldToolTipsotndrdglobal[""]["ApprovedND"] = "";
	$placeHoldersotndrdglobal[""]["ApprovedND"] = "";
	$fieldLabelsotndrdglobal[""]["NDGreaterThan"] = "NDGreater Than";
	$fieldToolTipsotndrdglobal[""]["NDGreaterThan"] = "";
	$placeHoldersotndrdglobal[""]["NDGreaterThan"] = "";
	$fieldLabelsotndrdglobal[""]["ApprovedRD"] = "Approved RD";
	$fieldToolTipsotndrdglobal[""]["ApprovedRD"] = "";
	$placeHoldersotndrdglobal[""]["ApprovedRD"] = "";
	$fieldLabelsotndrdglobal[""]["RDGreaterThan"] = "RDGreater Than";
	$fieldToolTipsotndrdglobal[""]["RDGreaterThan"] = "";
	$placeHoldersotndrdglobal[""]["RDGreaterThan"] = "";
	$fieldLabelsotndrdglobal[""]["FiledOTOnly"] = "Filed OTOnly";
	$fieldToolTipsotndrdglobal[""]["FiledOTOnly"] = "";
	$placeHoldersotndrdglobal[""]["FiledOTOnly"] = "";
	$fieldLabelsotndrdglobal[""]["OTMinimum"] = "OTMinimum";
	$fieldToolTipsotndrdglobal[""]["OTMinimum"] = "";
	$placeHoldersotndrdglobal[""]["OTMinimum"] = "";
	$fieldLabelsotndrdglobal[""]["NDMinimum"] = "NDMinimum";
	$fieldToolTipsotndrdglobal[""]["NDMinimum"] = "";
	$placeHoldersotndrdglobal[""]["NDMinimum"] = "";
	$fieldLabelsotndrdglobal[""]["RDMinimum"] = "RDMinimum";
	$fieldToolTipsotndrdglobal[""]["RDMinimum"] = "";
	$placeHoldersotndrdglobal[""]["RDMinimum"] = "";
	if (count($fieldToolTipsotndrdglobal[""]))
		$tdataotndrdglobal[".isUseToolTips"] = true;
}


	$tdataotndrdglobal[".NCSearch"] = true;



$tdataotndrdglobal[".shortTableName"] = "otndrdglobal";
$tdataotndrdglobal[".nSecOptions"] = 0;
$tdataotndrdglobal[".recsPerRowPrint"] = 1;
$tdataotndrdglobal[".mainTableOwnerID"] = "";
$tdataotndrdglobal[".moveNext"] = 1;
$tdataotndrdglobal[".entityType"] = 0;

$tdataotndrdglobal[".strOriginalTableName"] = "otndrdglobal";

	



$tdataotndrdglobal[".showAddInPopup"] = false;

$tdataotndrdglobal[".showEditInPopup"] = false;

$tdataotndrdglobal[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataotndrdglobal[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataotndrdglobal[".fieldsForRegister"] = array();

$tdataotndrdglobal[".listAjax"] = false;

	$tdataotndrdglobal[".audit"] = false;

	$tdataotndrdglobal[".locking"] = false;

$tdataotndrdglobal[".edit"] = true;
$tdataotndrdglobal[".afterEditAction"] = 0;
$tdataotndrdglobal[".closePopupAfterEdit"] = 1;
$tdataotndrdglobal[".afterEditActionDetTable"] = "Detail tables not found!";

$tdataotndrdglobal[".add"] = true;
$tdataotndrdglobal[".afterAddAction"] = 0;
$tdataotndrdglobal[".closePopupAfterAdd"] = 1;
$tdataotndrdglobal[".afterAddActionDetTable"] = "";

$tdataotndrdglobal[".list"] = true;



$tdataotndrdglobal[".reorderRecordsByHeader"] = true;


$tdataotndrdglobal[".exportFormatting"] = 2;
$tdataotndrdglobal[".exportDelimiter"] = ",";
		
$tdataotndrdglobal[".view"] = true;


$tdataotndrdglobal[".exportTo"] = true;

$tdataotndrdglobal[".printFriendly"] = true;

$tdataotndrdglobal[".delete"] = true;

$tdataotndrdglobal[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataotndrdglobal[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataotndrdglobal[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataotndrdglobal[".searchSaving"] = false;
//

$tdataotndrdglobal[".showSearchPanel"] = true;
		$tdataotndrdglobal[".flexibleSearch"] = true;

$tdataotndrdglobal[".isUseAjaxSuggest"] = true;

$tdataotndrdglobal[".rowHighlite"] = true;



																																																																																																																																																																																																																																									
																																																		

$tdataotndrdglobal[".ajaxCodeSnippetAdded"] = false;

$tdataotndrdglobal[".buttonsAdded"] = true;

$tdataotndrdglobal[".addPageEvents"] = true;

// use timepicker for search panel
$tdataotndrdglobal[".isUseTimeForSearch"] = false;





$tdataotndrdglobal[".allSearchFields"] = array();
$tdataotndrdglobal[".filterFields"] = array();
$tdataotndrdglobal[".requiredSearchFields"] = array();

$tdataotndrdglobal[".allSearchFields"][] = "GAID";
	$tdataotndrdglobal[".allSearchFields"][] = "ApprovedOT";
	$tdataotndrdglobal[".allSearchFields"][] = "FiledOTOnly";
	$tdataotndrdglobal[".allSearchFields"][] = "EarlyOT";
	$tdataotndrdglobal[".allSearchFields"][] = "PostOT";
	$tdataotndrdglobal[".allSearchFields"][] = "OTGreaterThan";
	$tdataotndrdglobal[".allSearchFields"][] = "OTMinimum";
	$tdataotndrdglobal[".allSearchFields"][] = "ApprovedND";
	$tdataotndrdglobal[".allSearchFields"][] = "NDGreaterThan";
	$tdataotndrdglobal[".allSearchFields"][] = "NDMinimum";
	$tdataotndrdglobal[".allSearchFields"][] = "ApprovedRD";
	$tdataotndrdglobal[".allSearchFields"][] = "RDGreaterThan";
	$tdataotndrdglobal[".allSearchFields"][] = "RDMinimum";
	

$tdataotndrdglobal[".googleLikeFields"] = array();
$tdataotndrdglobal[".googleLikeFields"][] = "GAID";
$tdataotndrdglobal[".googleLikeFields"][] = "ApprovedOT";
$tdataotndrdglobal[".googleLikeFields"][] = "EarlyOT";
$tdataotndrdglobal[".googleLikeFields"][] = "PostOT";
$tdataotndrdglobal[".googleLikeFields"][] = "OTGreaterThan";
$tdataotndrdglobal[".googleLikeFields"][] = "ApprovedND";
$tdataotndrdglobal[".googleLikeFields"][] = "NDGreaterThan";
$tdataotndrdglobal[".googleLikeFields"][] = "ApprovedRD";
$tdataotndrdglobal[".googleLikeFields"][] = "RDGreaterThan";
$tdataotndrdglobal[".googleLikeFields"][] = "FiledOTOnly";
$tdataotndrdglobal[".googleLikeFields"][] = "OTMinimum";
$tdataotndrdglobal[".googleLikeFields"][] = "NDMinimum";
$tdataotndrdglobal[".googleLikeFields"][] = "RDMinimum";


$tdataotndrdglobal[".advSearchFields"] = array();
$tdataotndrdglobal[".advSearchFields"][] = "GAID";
$tdataotndrdglobal[".advSearchFields"][] = "ApprovedOT";
$tdataotndrdglobal[".advSearchFields"][] = "FiledOTOnly";
$tdataotndrdglobal[".advSearchFields"][] = "EarlyOT";
$tdataotndrdglobal[".advSearchFields"][] = "PostOT";
$tdataotndrdglobal[".advSearchFields"][] = "OTGreaterThan";
$tdataotndrdglobal[".advSearchFields"][] = "OTMinimum";
$tdataotndrdglobal[".advSearchFields"][] = "ApprovedND";
$tdataotndrdglobal[".advSearchFields"][] = "NDGreaterThan";
$tdataotndrdglobal[".advSearchFields"][] = "NDMinimum";
$tdataotndrdglobal[".advSearchFields"][] = "ApprovedRD";
$tdataotndrdglobal[".advSearchFields"][] = "RDGreaterThan";
$tdataotndrdglobal[".advSearchFields"][] = "RDMinimum";

$tdataotndrdglobal[".tableType"] = "list";

$tdataotndrdglobal[".printerPageOrientation"] = 0;
$tdataotndrdglobal[".nPrinterPageScale"] = 100;

$tdataotndrdglobal[".nPrinterSplitRecords"] = 40;

$tdataotndrdglobal[".nPrinterPDFSplitRecords"] = 40;



$tdataotndrdglobal[".geocodingEnabled"] = false;





$tdataotndrdglobal[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataotndrdglobal[".pageSize"] = 20;

$tdataotndrdglobal[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataotndrdglobal[".strOrderBy"] = $tstrOrderBy;

$tdataotndrdglobal[".orderindexes"] = array();

$tdataotndrdglobal[".sqlHead"] = "SELECT GAID,  ApprovedOT,  EarlyOT,  PostOT,  OTGreaterThan,  ApprovedND,  NDGreaterThan,  ApprovedRD,  RDGreaterThan,  FiledOTOnly,  OTMinimum,  NDMinimum,  RDMinimum";
$tdataotndrdglobal[".sqlFrom"] = "FROM otndrdglobal";
$tdataotndrdglobal[".sqlWhereExpr"] = "";
$tdataotndrdglobal[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataotndrdglobal[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataotndrdglobal[".arrGroupsPerPage"] = $arrGPP;

$tdataotndrdglobal[".highlightSearchResults"] = true;

$tableKeysotndrdglobal = array();
$tableKeysotndrdglobal[] = "GAID";
$tdataotndrdglobal[".Keys"] = $tableKeysotndrdglobal;

$tdataotndrdglobal[".listFields"] = array();
$tdataotndrdglobal[".listFields"][] = "GAID";
$tdataotndrdglobal[".listFields"][] = "ApprovedOT";
$tdataotndrdglobal[".listFields"][] = "FiledOTOnly";
$tdataotndrdglobal[".listFields"][] = "EarlyOT";
$tdataotndrdglobal[".listFields"][] = "PostOT";
$tdataotndrdglobal[".listFields"][] = "OTGreaterThan";
$tdataotndrdglobal[".listFields"][] = "OTMinimum";
$tdataotndrdglobal[".listFields"][] = "ApprovedND";
$tdataotndrdglobal[".listFields"][] = "NDGreaterThan";
$tdataotndrdglobal[".listFields"][] = "NDMinimum";
$tdataotndrdglobal[".listFields"][] = "ApprovedRD";
$tdataotndrdglobal[".listFields"][] = "RDGreaterThan";
$tdataotndrdglobal[".listFields"][] = "RDMinimum";

$tdataotndrdglobal[".hideMobileList"] = array();


$tdataotndrdglobal[".viewFields"] = array();
$tdataotndrdglobal[".viewFields"][] = "GAID";
$tdataotndrdglobal[".viewFields"][] = "ApprovedOT";
$tdataotndrdglobal[".viewFields"][] = "FiledOTOnly";
$tdataotndrdglobal[".viewFields"][] = "EarlyOT";
$tdataotndrdglobal[".viewFields"][] = "PostOT";
$tdataotndrdglobal[".viewFields"][] = "OTGreaterThan";
$tdataotndrdglobal[".viewFields"][] = "OTMinimum";
$tdataotndrdglobal[".viewFields"][] = "ApprovedND";
$tdataotndrdglobal[".viewFields"][] = "NDGreaterThan";
$tdataotndrdglobal[".viewFields"][] = "NDMinimum";
$tdataotndrdglobal[".viewFields"][] = "ApprovedRD";
$tdataotndrdglobal[".viewFields"][] = "RDGreaterThan";
$tdataotndrdglobal[".viewFields"][] = "RDMinimum";

$tdataotndrdglobal[".addFields"] = array();
$tdataotndrdglobal[".addFields"][] = "ApprovedOT";
$tdataotndrdglobal[".addFields"][] = "FiledOTOnly";
$tdataotndrdglobal[".addFields"][] = "EarlyOT";
$tdataotndrdglobal[".addFields"][] = "PostOT";
$tdataotndrdglobal[".addFields"][] = "OTGreaterThan";
$tdataotndrdglobal[".addFields"][] = "OTMinimum";
$tdataotndrdglobal[".addFields"][] = "ApprovedND";
$tdataotndrdglobal[".addFields"][] = "NDGreaterThan";
$tdataotndrdglobal[".addFields"][] = "NDMinimum";
$tdataotndrdglobal[".addFields"][] = "ApprovedRD";
$tdataotndrdglobal[".addFields"][] = "RDGreaterThan";
$tdataotndrdglobal[".addFields"][] = "RDMinimum";

$tdataotndrdglobal[".masterListFields"] = array();
$tdataotndrdglobal[".masterListFields"][] = "GAID";
$tdataotndrdglobal[".masterListFields"][] = "ApprovedOT";
$tdataotndrdglobal[".masterListFields"][] = "FiledOTOnly";
$tdataotndrdglobal[".masterListFields"][] = "EarlyOT";
$tdataotndrdglobal[".masterListFields"][] = "PostOT";
$tdataotndrdglobal[".masterListFields"][] = "OTGreaterThan";
$tdataotndrdglobal[".masterListFields"][] = "OTMinimum";
$tdataotndrdglobal[".masterListFields"][] = "ApprovedND";
$tdataotndrdglobal[".masterListFields"][] = "NDGreaterThan";
$tdataotndrdglobal[".masterListFields"][] = "NDMinimum";
$tdataotndrdglobal[".masterListFields"][] = "ApprovedRD";
$tdataotndrdglobal[".masterListFields"][] = "RDGreaterThan";
$tdataotndrdglobal[".masterListFields"][] = "RDMinimum";

$tdataotndrdglobal[".inlineAddFields"] = array();

$tdataotndrdglobal[".editFields"] = array();
$tdataotndrdglobal[".editFields"][] = "ApprovedOT";
$tdataotndrdglobal[".editFields"][] = "FiledOTOnly";
$tdataotndrdglobal[".editFields"][] = "EarlyOT";
$tdataotndrdglobal[".editFields"][] = "PostOT";
$tdataotndrdglobal[".editFields"][] = "OTGreaterThan";
$tdataotndrdglobal[".editFields"][] = "OTMinimum";
$tdataotndrdglobal[".editFields"][] = "ApprovedND";
$tdataotndrdglobal[".editFields"][] = "NDGreaterThan";
$tdataotndrdglobal[".editFields"][] = "NDMinimum";
$tdataotndrdglobal[".editFields"][] = "ApprovedRD";
$tdataotndrdglobal[".editFields"][] = "RDGreaterThan";
$tdataotndrdglobal[".editFields"][] = "RDMinimum";

$tdataotndrdglobal[".inlineEditFields"] = array();

$tdataotndrdglobal[".updateSelectedFields"] = array();
$tdataotndrdglobal[".updateSelectedFields"][] = "ApprovedOT";
$tdataotndrdglobal[".updateSelectedFields"][] = "FiledOTOnly";
$tdataotndrdglobal[".updateSelectedFields"][] = "EarlyOT";
$tdataotndrdglobal[".updateSelectedFields"][] = "PostOT";
$tdataotndrdglobal[".updateSelectedFields"][] = "OTGreaterThan";
$tdataotndrdglobal[".updateSelectedFields"][] = "OTMinimum";
$tdataotndrdglobal[".updateSelectedFields"][] = "ApprovedND";
$tdataotndrdglobal[".updateSelectedFields"][] = "NDGreaterThan";
$tdataotndrdglobal[".updateSelectedFields"][] = "NDMinimum";
$tdataotndrdglobal[".updateSelectedFields"][] = "ApprovedRD";
$tdataotndrdglobal[".updateSelectedFields"][] = "RDGreaterThan";
$tdataotndrdglobal[".updateSelectedFields"][] = "RDMinimum";


$tdataotndrdglobal[".exportFields"] = array();
$tdataotndrdglobal[".exportFields"][] = "GAID";
$tdataotndrdglobal[".exportFields"][] = "ApprovedOT";
$tdataotndrdglobal[".exportFields"][] = "FiledOTOnly";
$tdataotndrdglobal[".exportFields"][] = "EarlyOT";
$tdataotndrdglobal[".exportFields"][] = "PostOT";
$tdataotndrdglobal[".exportFields"][] = "OTGreaterThan";
$tdataotndrdglobal[".exportFields"][] = "OTMinimum";
$tdataotndrdglobal[".exportFields"][] = "ApprovedND";
$tdataotndrdglobal[".exportFields"][] = "NDGreaterThan";
$tdataotndrdglobal[".exportFields"][] = "NDMinimum";
$tdataotndrdglobal[".exportFields"][] = "ApprovedRD";
$tdataotndrdglobal[".exportFields"][] = "RDGreaterThan";
$tdataotndrdglobal[".exportFields"][] = "RDMinimum";

$tdataotndrdglobal[".importFields"] = array();

$tdataotndrdglobal[".printFields"] = array();
$tdataotndrdglobal[".printFields"][] = "GAID";
$tdataotndrdglobal[".printFields"][] = "ApprovedOT";
$tdataotndrdglobal[".printFields"][] = "FiledOTOnly";
$tdataotndrdglobal[".printFields"][] = "EarlyOT";
$tdataotndrdglobal[".printFields"][] = "PostOT";
$tdataotndrdglobal[".printFields"][] = "OTGreaterThan";
$tdataotndrdglobal[".printFields"][] = "OTMinimum";
$tdataotndrdglobal[".printFields"][] = "ApprovedND";
$tdataotndrdglobal[".printFields"][] = "NDGreaterThan";
$tdataotndrdglobal[".printFields"][] = "NDMinimum";
$tdataotndrdglobal[".printFields"][] = "ApprovedRD";
$tdataotndrdglobal[".printFields"][] = "RDGreaterThan";
$tdataotndrdglobal[".printFields"][] = "RDMinimum";


//	GAID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "GAID";
	$fdata["GoodName"] = "GAID";
	$fdata["ownerTable"] = "otndrdglobal";
	$fdata["Label"] = GetFieldLabel("otndrdglobal","GAID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "GAID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GAID";

	
	
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




	$tdataotndrdglobal["GAID"] = $fdata;
//	ApprovedOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ApprovedOT";
	$fdata["GoodName"] = "ApprovedOT";
	$fdata["ownerTable"] = "otndrdglobal";
	$fdata["Label"] = GetFieldLabel("otndrdglobal","ApprovedOT");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ApprovedOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ApprovedOT";

	
	
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




	$tdataotndrdglobal["ApprovedOT"] = $fdata;
//	EarlyOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EarlyOT";
	$fdata["GoodName"] = "EarlyOT";
	$fdata["ownerTable"] = "otndrdglobal";
	$fdata["Label"] = GetFieldLabel("otndrdglobal","EarlyOT");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EarlyOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EarlyOT";

	
	
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




	$tdataotndrdglobal["EarlyOT"] = $fdata;
//	PostOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PostOT";
	$fdata["GoodName"] = "PostOT";
	$fdata["ownerTable"] = "otndrdglobal";
	$fdata["Label"] = GetFieldLabel("otndrdglobal","PostOT");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PostOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PostOT";

	
	
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




	$tdataotndrdglobal["PostOT"] = $fdata;
//	OTGreaterThan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "OTGreaterThan";
	$fdata["GoodName"] = "OTGreaterThan";
	$fdata["ownerTable"] = "otndrdglobal";
	$fdata["Label"] = GetFieldLabel("otndrdglobal","OTGreaterThan");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "OTGreaterThan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OTGreaterThan";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
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




	$tdataotndrdglobal["OTGreaterThan"] = $fdata;
//	ApprovedND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ApprovedND";
	$fdata["GoodName"] = "ApprovedND";
	$fdata["ownerTable"] = "otndrdglobal";
	$fdata["Label"] = GetFieldLabel("otndrdglobal","ApprovedND");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ApprovedND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ApprovedND";

	
	
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




	$tdataotndrdglobal["ApprovedND"] = $fdata;
//	NDGreaterThan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "NDGreaterThan";
	$fdata["GoodName"] = "NDGreaterThan";
	$fdata["ownerTable"] = "otndrdglobal";
	$fdata["Label"] = GetFieldLabel("otndrdglobal","NDGreaterThan");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NDGreaterThan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NDGreaterThan";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
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




	$tdataotndrdglobal["NDGreaterThan"] = $fdata;
//	ApprovedRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ApprovedRD";
	$fdata["GoodName"] = "ApprovedRD";
	$fdata["ownerTable"] = "otndrdglobal";
	$fdata["Label"] = GetFieldLabel("otndrdglobal","ApprovedRD");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ApprovedRD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ApprovedRD";

	
	
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




	$tdataotndrdglobal["ApprovedRD"] = $fdata;
//	RDGreaterThan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "RDGreaterThan";
	$fdata["GoodName"] = "RDGreaterThan";
	$fdata["ownerTable"] = "otndrdglobal";
	$fdata["Label"] = GetFieldLabel("otndrdglobal","RDGreaterThan");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RDGreaterThan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RDGreaterThan";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
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




	$tdataotndrdglobal["RDGreaterThan"] = $fdata;
//	FiledOTOnly
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "FiledOTOnly";
	$fdata["GoodName"] = "FiledOTOnly";
	$fdata["ownerTable"] = "otndrdglobal";
	$fdata["Label"] = GetFieldLabel("otndrdglobal","FiledOTOnly");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FiledOTOnly";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FiledOTOnly";

	
	
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




	$tdataotndrdglobal["FiledOTOnly"] = $fdata;
//	OTMinimum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "OTMinimum";
	$fdata["GoodName"] = "OTMinimum";
	$fdata["ownerTable"] = "otndrdglobal";
	$fdata["Label"] = GetFieldLabel("otndrdglobal","OTMinimum");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "OTMinimum";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OTMinimum";

	
	
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




	$tdataotndrdglobal["OTMinimum"] = $fdata;
//	NDMinimum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "NDMinimum";
	$fdata["GoodName"] = "NDMinimum";
	$fdata["ownerTable"] = "otndrdglobal";
	$fdata["Label"] = GetFieldLabel("otndrdglobal","NDMinimum");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NDMinimum";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NDMinimum";

	
	
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




	$tdataotndrdglobal["NDMinimum"] = $fdata;
//	RDMinimum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "RDMinimum";
	$fdata["GoodName"] = "RDMinimum";
	$fdata["ownerTable"] = "otndrdglobal";
	$fdata["Label"] = GetFieldLabel("otndrdglobal","RDMinimum");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RDMinimum";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RDMinimum";

	
	
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




	$tdataotndrdglobal["RDMinimum"] = $fdata;


$tables_data["otndrdglobal"]=&$tdataotndrdglobal;
$field_labels["otndrdglobal"] = &$fieldLabelsotndrdglobal;
$fieldToolTips["otndrdglobal"] = &$fieldToolTipsotndrdglobal;
$placeHolders["otndrdglobal"] = &$placeHoldersotndrdglobal;
$page_titles["otndrdglobal"] = &$pageTitlesotndrdglobal;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["otndrdglobal"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["otndrdglobal"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_otndrdglobal()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "GAID,  ApprovedOT,  EarlyOT,  PostOT,  OTGreaterThan,  ApprovedND,  NDGreaterThan,  ApprovedRD,  RDGreaterThan,  FiledOTOnly,  OTMinimum,  NDMinimum,  RDMinimum";
$proto0["m_strFrom"] = "FROM otndrdglobal";
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
	"m_strName" => "GAID",
	"m_strTable" => "otndrdglobal",
	"m_srcTableName" => "otndrdglobal"
));

$proto6["m_sql"] = "GAID";
$proto6["m_srcTableName"] = "otndrdglobal";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedOT",
	"m_strTable" => "otndrdglobal",
	"m_srcTableName" => "otndrdglobal"
));

$proto8["m_sql"] = "ApprovedOT";
$proto8["m_srcTableName"] = "otndrdglobal";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "EarlyOT",
	"m_strTable" => "otndrdglobal",
	"m_srcTableName" => "otndrdglobal"
));

$proto10["m_sql"] = "EarlyOT";
$proto10["m_srcTableName"] = "otndrdglobal";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PostOT",
	"m_strTable" => "otndrdglobal",
	"m_srcTableName" => "otndrdglobal"
));

$proto12["m_sql"] = "PostOT";
$proto12["m_srcTableName"] = "otndrdglobal";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "OTGreaterThan",
	"m_strTable" => "otndrdglobal",
	"m_srcTableName" => "otndrdglobal"
));

$proto14["m_sql"] = "OTGreaterThan";
$proto14["m_srcTableName"] = "otndrdglobal";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedND",
	"m_strTable" => "otndrdglobal",
	"m_srcTableName" => "otndrdglobal"
));

$proto16["m_sql"] = "ApprovedND";
$proto16["m_srcTableName"] = "otndrdglobal";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "NDGreaterThan",
	"m_strTable" => "otndrdglobal",
	"m_srcTableName" => "otndrdglobal"
));

$proto18["m_sql"] = "NDGreaterThan";
$proto18["m_srcTableName"] = "otndrdglobal";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedRD",
	"m_strTable" => "otndrdglobal",
	"m_srcTableName" => "otndrdglobal"
));

$proto20["m_sql"] = "ApprovedRD";
$proto20["m_srcTableName"] = "otndrdglobal";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "RDGreaterThan",
	"m_strTable" => "otndrdglobal",
	"m_srcTableName" => "otndrdglobal"
));

$proto22["m_sql"] = "RDGreaterThan";
$proto22["m_srcTableName"] = "otndrdglobal";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "FiledOTOnly",
	"m_strTable" => "otndrdglobal",
	"m_srcTableName" => "otndrdglobal"
));

$proto24["m_sql"] = "FiledOTOnly";
$proto24["m_srcTableName"] = "otndrdglobal";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "OTMinimum",
	"m_strTable" => "otndrdglobal",
	"m_srcTableName" => "otndrdglobal"
));

$proto26["m_sql"] = "OTMinimum";
$proto26["m_srcTableName"] = "otndrdglobal";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "NDMinimum",
	"m_strTable" => "otndrdglobal",
	"m_srcTableName" => "otndrdglobal"
));

$proto28["m_sql"] = "NDMinimum";
$proto28["m_srcTableName"] = "otndrdglobal";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "RDMinimum",
	"m_strTable" => "otndrdglobal",
	"m_srcTableName" => "otndrdglobal"
));

$proto30["m_sql"] = "RDMinimum";
$proto30["m_srcTableName"] = "otndrdglobal";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "otndrdglobal";
$proto33["m_srcTableName"] = "otndrdglobal";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "GAID";
$proto33["m_columns"][] = "ApprovedOT";
$proto33["m_columns"][] = "EarlyOT";
$proto33["m_columns"][] = "PostOT";
$proto33["m_columns"][] = "OTGreaterThan";
$proto33["m_columns"][] = "ApprovedND";
$proto33["m_columns"][] = "NDGreaterThan";
$proto33["m_columns"][] = "ApprovedRD";
$proto33["m_columns"][] = "RDGreaterThan";
$proto33["m_columns"][] = "FiledOTOnly";
$proto33["m_columns"][] = "OTProc";
$proto33["m_columns"][] = "OTMinimum";
$proto33["m_columns"][] = "NDMinimum";
$proto33["m_columns"][] = "RDMinimum";
$proto33["m_columns"][] = "Employee";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "otndrdglobal";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "otndrdglobal";
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
$proto0["m_srcTableName"]="otndrdglobal";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_otndrdglobal = createSqlQuery_otndrdglobal();


	
		;

													

$tdataotndrdglobal[".sqlquery"] = $queryData_otndrdglobal;

include_once(getabspath("include/otndrdglobal_events.php"));
$tableEvents["otndrdglobal"] = new eventclass_otndrdglobal;
$tdataotndrdglobal[".hasEvents"] = true;

?>