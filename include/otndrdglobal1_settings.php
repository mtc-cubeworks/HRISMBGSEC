<?php
require_once(getabspath("classes/cipherer.php"));




$tdataotndrdglobal1 = array();
	$tdataotndrdglobal1[".truncateText"] = true;
	$tdataotndrdglobal1[".NumberOfChars"] = 80;
	$tdataotndrdglobal1[".ShortName"] = "otndrdglobal1";
	$tdataotndrdglobal1[".OwnerID"] = "";
	$tdataotndrdglobal1[".OriginalTable"] = "otndrdglobal";

//	field labels
$fieldLabelsotndrdglobal1 = array();
$fieldToolTipsotndrdglobal1 = array();
$pageTitlesotndrdglobal1 = array();
$placeHoldersotndrdglobal1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsotndrdglobal1["English"] = array();
	$fieldToolTipsotndrdglobal1["English"] = array();
	$placeHoldersotndrdglobal1["English"] = array();
	$pageTitlesotndrdglobal1["English"] = array();
	$fieldLabelsotndrdglobal1["English"]["GAID"] = "GAID";
	$fieldToolTipsotndrdglobal1["English"]["GAID"] = "";
	$placeHoldersotndrdglobal1["English"]["GAID"] = "";
	$fieldLabelsotndrdglobal1["English"]["ApprovedOT"] = "Approved OT";
	$fieldToolTipsotndrdglobal1["English"]["ApprovedOT"] = "";
	$placeHoldersotndrdglobal1["English"]["ApprovedOT"] = "";
	$fieldLabelsotndrdglobal1["English"]["EarlyOT"] = "Early OT";
	$fieldToolTipsotndrdglobal1["English"]["EarlyOT"] = "";
	$placeHoldersotndrdglobal1["English"]["EarlyOT"] = "";
	$fieldLabelsotndrdglobal1["English"]["PostOT"] = "Post OT";
	$fieldToolTipsotndrdglobal1["English"]["PostOT"] = "";
	$placeHoldersotndrdglobal1["English"]["PostOT"] = "";
	$fieldLabelsotndrdglobal1["English"]["OTGreaterThan"] = "OT Greater Than (mins)";
	$fieldToolTipsotndrdglobal1["English"]["OTGreaterThan"] = "";
	$placeHoldersotndrdglobal1["English"]["OTGreaterThan"] = "";
	$fieldLabelsotndrdglobal1["English"]["ApprovedND"] = "Approved ND";
	$fieldToolTipsotndrdglobal1["English"]["ApprovedND"] = "";
	$placeHoldersotndrdglobal1["English"]["ApprovedND"] = "";
	$fieldLabelsotndrdglobal1["English"]["NDGreaterThan"] = "ND Greater Than (mins)";
	$fieldToolTipsotndrdglobal1["English"]["NDGreaterThan"] = "";
	$placeHoldersotndrdglobal1["English"]["NDGreaterThan"] = "";
	$fieldLabelsotndrdglobal1["English"]["ApprovedRD"] = "Approved RD";
	$fieldToolTipsotndrdglobal1["English"]["ApprovedRD"] = "";
	$placeHoldersotndrdglobal1["English"]["ApprovedRD"] = "";
	$fieldLabelsotndrdglobal1["English"]["RDGreaterThan"] = "RDGreater Than (mins)";
	$fieldToolTipsotndrdglobal1["English"]["RDGreaterThan"] = "";
	$placeHoldersotndrdglobal1["English"]["RDGreaterThan"] = "";
	$fieldLabelsotndrdglobal1["English"]["FiledOTOnly"] = "Filed OT Only";
	$fieldToolTipsotndrdglobal1["English"]["FiledOTOnly"] = "";
	$placeHoldersotndrdglobal1["English"]["FiledOTOnly"] = "";
	$fieldLabelsotndrdglobal1["English"]["OTMinimum"] = "OTMinimum";
	$fieldToolTipsotndrdglobal1["English"]["OTMinimum"] = "";
	$placeHoldersotndrdglobal1["English"]["OTMinimum"] = "";
	$fieldLabelsotndrdglobal1["English"]["NDMinimum"] = "NDMinimum";
	$fieldToolTipsotndrdglobal1["English"]["NDMinimum"] = "";
	$placeHoldersotndrdglobal1["English"]["NDMinimum"] = "";
	$fieldLabelsotndrdglobal1["English"]["RDMinimum"] = "RDMinimum";
	$fieldToolTipsotndrdglobal1["English"]["RDMinimum"] = "";
	$placeHoldersotndrdglobal1["English"]["RDMinimum"] = "";
	$fieldLabelsotndrdglobal1["English"]["Employee"] = "Employee";
	$fieldToolTipsotndrdglobal1["English"]["Employee"] = "";
	$placeHoldersotndrdglobal1["English"]["Employee"] = "";
	if (count($fieldToolTipsotndrdglobal1["English"]))
		$tdataotndrdglobal1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsotndrdglobal1[""] = array();
	$fieldToolTipsotndrdglobal1[""] = array();
	$placeHoldersotndrdglobal1[""] = array();
	$pageTitlesotndrdglobal1[""] = array();
	$fieldLabelsotndrdglobal1[""]["GAID"] = "GAID";
	$fieldToolTipsotndrdglobal1[""]["GAID"] = "";
	$placeHoldersotndrdglobal1[""]["GAID"] = "";
	$fieldLabelsotndrdglobal1[""]["ApprovedOT"] = "Approved OT";
	$fieldToolTipsotndrdglobal1[""]["ApprovedOT"] = "";
	$placeHoldersotndrdglobal1[""]["ApprovedOT"] = "";
	$fieldLabelsotndrdglobal1[""]["EarlyOT"] = "Early OT";
	$fieldToolTipsotndrdglobal1[""]["EarlyOT"] = "";
	$placeHoldersotndrdglobal1[""]["EarlyOT"] = "";
	$fieldLabelsotndrdglobal1[""]["PostOT"] = "Post OT";
	$fieldToolTipsotndrdglobal1[""]["PostOT"] = "";
	$placeHoldersotndrdglobal1[""]["PostOT"] = "";
	$fieldLabelsotndrdglobal1[""]["OTGreaterThan"] = "OTGreater Than";
	$fieldToolTipsotndrdglobal1[""]["OTGreaterThan"] = "";
	$placeHoldersotndrdglobal1[""]["OTGreaterThan"] = "";
	$fieldLabelsotndrdglobal1[""]["ApprovedND"] = "Approved ND";
	$fieldToolTipsotndrdglobal1[""]["ApprovedND"] = "";
	$placeHoldersotndrdglobal1[""]["ApprovedND"] = "";
	$fieldLabelsotndrdglobal1[""]["NDGreaterThan"] = "NDGreater Than";
	$fieldToolTipsotndrdglobal1[""]["NDGreaterThan"] = "";
	$placeHoldersotndrdglobal1[""]["NDGreaterThan"] = "";
	$fieldLabelsotndrdglobal1[""]["ApprovedRD"] = "Approved RD";
	$fieldToolTipsotndrdglobal1[""]["ApprovedRD"] = "";
	$placeHoldersotndrdglobal1[""]["ApprovedRD"] = "";
	$fieldLabelsotndrdglobal1[""]["RDGreaterThan"] = "RDGreater Than";
	$fieldToolTipsotndrdglobal1[""]["RDGreaterThan"] = "";
	$placeHoldersotndrdglobal1[""]["RDGreaterThan"] = "";
	$fieldLabelsotndrdglobal1[""]["FiledOTOnly"] = "Filed OTOnly";
	$fieldToolTipsotndrdglobal1[""]["FiledOTOnly"] = "";
	$placeHoldersotndrdglobal1[""]["FiledOTOnly"] = "";
	$fieldLabelsotndrdglobal1[""]["OTMinimum"] = "OTMinimum";
	$fieldToolTipsotndrdglobal1[""]["OTMinimum"] = "";
	$placeHoldersotndrdglobal1[""]["OTMinimum"] = "";
	$fieldLabelsotndrdglobal1[""]["NDMinimum"] = "NDMinimum";
	$fieldToolTipsotndrdglobal1[""]["NDMinimum"] = "";
	$placeHoldersotndrdglobal1[""]["NDMinimum"] = "";
	$fieldLabelsotndrdglobal1[""]["RDMinimum"] = "RDMinimum";
	$fieldToolTipsotndrdglobal1[""]["RDMinimum"] = "";
	$placeHoldersotndrdglobal1[""]["RDMinimum"] = "";
	$fieldLabelsotndrdglobal1[""]["Employee"] = "Employee";
	$fieldToolTipsotndrdglobal1[""]["Employee"] = "";
	$placeHoldersotndrdglobal1[""]["Employee"] = "";
	if (count($fieldToolTipsotndrdglobal1[""]))
		$tdataotndrdglobal1[".isUseToolTips"] = true;
}


	$tdataotndrdglobal1[".NCSearch"] = true;



$tdataotndrdglobal1[".shortTableName"] = "otndrdglobal1";
$tdataotndrdglobal1[".nSecOptions"] = 0;
$tdataotndrdglobal1[".recsPerRowPrint"] = 1;
$tdataotndrdglobal1[".mainTableOwnerID"] = "";
$tdataotndrdglobal1[".moveNext"] = 1;
$tdataotndrdglobal1[".entityType"] = 1;

$tdataotndrdglobal1[".strOriginalTableName"] = "otndrdglobal";

	



$tdataotndrdglobal1[".showAddInPopup"] = false;

$tdataotndrdglobal1[".showEditInPopup"] = false;

$tdataotndrdglobal1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataotndrdglobal1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataotndrdglobal1[".fieldsForRegister"] = array();

$tdataotndrdglobal1[".listAjax"] = false;

	$tdataotndrdglobal1[".audit"] = false;

	$tdataotndrdglobal1[".locking"] = false;

$tdataotndrdglobal1[".edit"] = true;
$tdataotndrdglobal1[".afterEditAction"] = 0;
$tdataotndrdglobal1[".closePopupAfterEdit"] = 1;
$tdataotndrdglobal1[".afterEditActionDetTable"] = "Detail tables not found!";

$tdataotndrdglobal1[".add"] = true;
$tdataotndrdglobal1[".afterAddAction"] = 1;
$tdataotndrdglobal1[".closePopupAfterAdd"] = 1;
$tdataotndrdglobal1[".afterAddActionDetTable"] = "";

$tdataotndrdglobal1[".list"] = true;



$tdataotndrdglobal1[".reorderRecordsByHeader"] = true;


$tdataotndrdglobal1[".exportFormatting"] = 2;
$tdataotndrdglobal1[".exportDelimiter"] = ",";
		
$tdataotndrdglobal1[".view"] = true;


$tdataotndrdglobal1[".exportTo"] = true;

$tdataotndrdglobal1[".printFriendly"] = true;

$tdataotndrdglobal1[".delete"] = true;

$tdataotndrdglobal1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataotndrdglobal1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataotndrdglobal1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataotndrdglobal1[".searchSaving"] = false;
//

$tdataotndrdglobal1[".showSearchPanel"] = true;
		$tdataotndrdglobal1[".flexibleSearch"] = true;

$tdataotndrdglobal1[".isUseAjaxSuggest"] = true;

$tdataotndrdglobal1[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																	
																																																																	

$tdataotndrdglobal1[".ajaxCodeSnippetAdded"] = false;

$tdataotndrdglobal1[".buttonsAdded"] = true;

$tdataotndrdglobal1[".addPageEvents"] = true;

// use timepicker for search panel
$tdataotndrdglobal1[".isUseTimeForSearch"] = false;



$tdataotndrdglobal1[".badgeColor"] = "D2AF80";


$tdataotndrdglobal1[".allSearchFields"] = array();
$tdataotndrdglobal1[".filterFields"] = array();
$tdataotndrdglobal1[".requiredSearchFields"] = array();

$tdataotndrdglobal1[".allSearchFields"][] = "GAID";
	$tdataotndrdglobal1[".allSearchFields"][] = "Employee";
	$tdataotndrdglobal1[".allSearchFields"][] = "ApprovedOT";
	$tdataotndrdglobal1[".allSearchFields"][] = "FiledOTOnly";
	$tdataotndrdglobal1[".allSearchFields"][] = "EarlyOT";
	$tdataotndrdglobal1[".allSearchFields"][] = "PostOT";
	$tdataotndrdglobal1[".allSearchFields"][] = "OTGreaterThan";
	$tdataotndrdglobal1[".allSearchFields"][] = "OTMinimum";
	$tdataotndrdglobal1[".allSearchFields"][] = "ApprovedND";
	$tdataotndrdglobal1[".allSearchFields"][] = "NDGreaterThan";
	$tdataotndrdglobal1[".allSearchFields"][] = "NDMinimum";
	$tdataotndrdglobal1[".allSearchFields"][] = "ApprovedRD";
	$tdataotndrdglobal1[".allSearchFields"][] = "RDGreaterThan";
	$tdataotndrdglobal1[".allSearchFields"][] = "RDMinimum";
	

$tdataotndrdglobal1[".googleLikeFields"] = array();
$tdataotndrdglobal1[".googleLikeFields"][] = "GAID";
$tdataotndrdglobal1[".googleLikeFields"][] = "ApprovedOT";
$tdataotndrdglobal1[".googleLikeFields"][] = "EarlyOT";
$tdataotndrdglobal1[".googleLikeFields"][] = "PostOT";
$tdataotndrdglobal1[".googleLikeFields"][] = "OTGreaterThan";
$tdataotndrdglobal1[".googleLikeFields"][] = "ApprovedND";
$tdataotndrdglobal1[".googleLikeFields"][] = "NDGreaterThan";
$tdataotndrdglobal1[".googleLikeFields"][] = "ApprovedRD";
$tdataotndrdglobal1[".googleLikeFields"][] = "RDGreaterThan";
$tdataotndrdglobal1[".googleLikeFields"][] = "FiledOTOnly";
$tdataotndrdglobal1[".googleLikeFields"][] = "OTMinimum";
$tdataotndrdglobal1[".googleLikeFields"][] = "NDMinimum";
$tdataotndrdglobal1[".googleLikeFields"][] = "RDMinimum";
$tdataotndrdglobal1[".googleLikeFields"][] = "Employee";


$tdataotndrdglobal1[".advSearchFields"] = array();
$tdataotndrdglobal1[".advSearchFields"][] = "GAID";
$tdataotndrdglobal1[".advSearchFields"][] = "Employee";
$tdataotndrdglobal1[".advSearchFields"][] = "ApprovedOT";
$tdataotndrdglobal1[".advSearchFields"][] = "FiledOTOnly";
$tdataotndrdglobal1[".advSearchFields"][] = "EarlyOT";
$tdataotndrdglobal1[".advSearchFields"][] = "PostOT";
$tdataotndrdglobal1[".advSearchFields"][] = "OTGreaterThan";
$tdataotndrdglobal1[".advSearchFields"][] = "OTMinimum";
$tdataotndrdglobal1[".advSearchFields"][] = "ApprovedND";
$tdataotndrdglobal1[".advSearchFields"][] = "NDGreaterThan";
$tdataotndrdglobal1[".advSearchFields"][] = "NDMinimum";
$tdataotndrdglobal1[".advSearchFields"][] = "ApprovedRD";
$tdataotndrdglobal1[".advSearchFields"][] = "RDGreaterThan";
$tdataotndrdglobal1[".advSearchFields"][] = "RDMinimum";

$tdataotndrdglobal1[".tableType"] = "list";

$tdataotndrdglobal1[".printerPageOrientation"] = 0;
$tdataotndrdglobal1[".nPrinterPageScale"] = 100;

$tdataotndrdglobal1[".nPrinterSplitRecords"] = 40;

$tdataotndrdglobal1[".nPrinterPDFSplitRecords"] = 40;



$tdataotndrdglobal1[".geocodingEnabled"] = false;





$tdataotndrdglobal1[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataotndrdglobal1[".pageSize"] = 20;

$tdataotndrdglobal1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataotndrdglobal1[".strOrderBy"] = $tstrOrderBy;

$tdataotndrdglobal1[".orderindexes"] = array();

$tdataotndrdglobal1[".sqlHead"] = "SELECT GAID,  ApprovedOT,  EarlyOT,  PostOT,  OTGreaterThan,  ApprovedND,  NDGreaterThan,  ApprovedRD,  RDGreaterThan,  FiledOTOnly,  OTMinimum,  NDMinimum,  RDMinimum,  Employee";
$tdataotndrdglobal1[".sqlFrom"] = "FROM otndrdglobal";
$tdataotndrdglobal1[".sqlWhereExpr"] = "";
$tdataotndrdglobal1[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataotndrdglobal1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataotndrdglobal1[".arrGroupsPerPage"] = $arrGPP;

$tdataotndrdglobal1[".highlightSearchResults"] = true;

$tableKeysotndrdglobal1 = array();
$tableKeysotndrdglobal1[] = "GAID";
$tdataotndrdglobal1[".Keys"] = $tableKeysotndrdglobal1;

$tdataotndrdglobal1[".listFields"] = array();
$tdataotndrdglobal1[".listFields"][] = "GAID";
$tdataotndrdglobal1[".listFields"][] = "Employee";
$tdataotndrdglobal1[".listFields"][] = "ApprovedOT";
$tdataotndrdglobal1[".listFields"][] = "FiledOTOnly";
$tdataotndrdglobal1[".listFields"][] = "EarlyOT";
$tdataotndrdglobal1[".listFields"][] = "PostOT";
$tdataotndrdglobal1[".listFields"][] = "OTGreaterThan";
$tdataotndrdglobal1[".listFields"][] = "OTMinimum";
$tdataotndrdglobal1[".listFields"][] = "ApprovedND";
$tdataotndrdglobal1[".listFields"][] = "NDGreaterThan";
$tdataotndrdglobal1[".listFields"][] = "NDMinimum";
$tdataotndrdglobal1[".listFields"][] = "ApprovedRD";
$tdataotndrdglobal1[".listFields"][] = "RDGreaterThan";
$tdataotndrdglobal1[".listFields"][] = "RDMinimum";

$tdataotndrdglobal1[".hideMobileList"] = array();


$tdataotndrdglobal1[".viewFields"] = array();
$tdataotndrdglobal1[".viewFields"][] = "GAID";
$tdataotndrdglobal1[".viewFields"][] = "Employee";
$tdataotndrdglobal1[".viewFields"][] = "ApprovedOT";
$tdataotndrdglobal1[".viewFields"][] = "FiledOTOnly";
$tdataotndrdglobal1[".viewFields"][] = "EarlyOT";
$tdataotndrdglobal1[".viewFields"][] = "PostOT";
$tdataotndrdglobal1[".viewFields"][] = "OTGreaterThan";
$tdataotndrdglobal1[".viewFields"][] = "OTMinimum";
$tdataotndrdglobal1[".viewFields"][] = "ApprovedND";
$tdataotndrdglobal1[".viewFields"][] = "NDGreaterThan";
$tdataotndrdglobal1[".viewFields"][] = "NDMinimum";
$tdataotndrdglobal1[".viewFields"][] = "ApprovedRD";
$tdataotndrdglobal1[".viewFields"][] = "RDGreaterThan";
$tdataotndrdglobal1[".viewFields"][] = "RDMinimum";

$tdataotndrdglobal1[".addFields"] = array();
$tdataotndrdglobal1[".addFields"][] = "Employee";
$tdataotndrdglobal1[".addFields"][] = "ApprovedOT";
$tdataotndrdglobal1[".addFields"][] = "FiledOTOnly";
$tdataotndrdglobal1[".addFields"][] = "EarlyOT";
$tdataotndrdglobal1[".addFields"][] = "PostOT";
$tdataotndrdglobal1[".addFields"][] = "OTGreaterThan";
$tdataotndrdglobal1[".addFields"][] = "OTMinimum";
$tdataotndrdglobal1[".addFields"][] = "ApprovedND";
$tdataotndrdglobal1[".addFields"][] = "NDGreaterThan";
$tdataotndrdglobal1[".addFields"][] = "NDMinimum";
$tdataotndrdglobal1[".addFields"][] = "ApprovedRD";
$tdataotndrdglobal1[".addFields"][] = "RDGreaterThan";
$tdataotndrdglobal1[".addFields"][] = "RDMinimum";

$tdataotndrdglobal1[".masterListFields"] = array();
$tdataotndrdglobal1[".masterListFields"][] = "GAID";
$tdataotndrdglobal1[".masterListFields"][] = "Employee";
$tdataotndrdglobal1[".masterListFields"][] = "ApprovedOT";
$tdataotndrdglobal1[".masterListFields"][] = "FiledOTOnly";
$tdataotndrdglobal1[".masterListFields"][] = "EarlyOT";
$tdataotndrdglobal1[".masterListFields"][] = "PostOT";
$tdataotndrdglobal1[".masterListFields"][] = "OTGreaterThan";
$tdataotndrdglobal1[".masterListFields"][] = "OTMinimum";
$tdataotndrdglobal1[".masterListFields"][] = "ApprovedND";
$tdataotndrdglobal1[".masterListFields"][] = "NDGreaterThan";
$tdataotndrdglobal1[".masterListFields"][] = "NDMinimum";
$tdataotndrdglobal1[".masterListFields"][] = "ApprovedRD";
$tdataotndrdglobal1[".masterListFields"][] = "RDGreaterThan";
$tdataotndrdglobal1[".masterListFields"][] = "RDMinimum";

$tdataotndrdglobal1[".inlineAddFields"] = array();

$tdataotndrdglobal1[".editFields"] = array();
$tdataotndrdglobal1[".editFields"][] = "Employee";
$tdataotndrdglobal1[".editFields"][] = "ApprovedOT";
$tdataotndrdglobal1[".editFields"][] = "FiledOTOnly";
$tdataotndrdglobal1[".editFields"][] = "EarlyOT";
$tdataotndrdglobal1[".editFields"][] = "PostOT";
$tdataotndrdglobal1[".editFields"][] = "OTGreaterThan";
$tdataotndrdglobal1[".editFields"][] = "OTMinimum";
$tdataotndrdglobal1[".editFields"][] = "ApprovedND";
$tdataotndrdglobal1[".editFields"][] = "NDGreaterThan";
$tdataotndrdglobal1[".editFields"][] = "NDMinimum";
$tdataotndrdglobal1[".editFields"][] = "ApprovedRD";
$tdataotndrdglobal1[".editFields"][] = "RDGreaterThan";
$tdataotndrdglobal1[".editFields"][] = "RDMinimum";

$tdataotndrdglobal1[".inlineEditFields"] = array();

$tdataotndrdglobal1[".updateSelectedFields"] = array();
$tdataotndrdglobal1[".updateSelectedFields"][] = "Employee";
$tdataotndrdglobal1[".updateSelectedFields"][] = "ApprovedOT";
$tdataotndrdglobal1[".updateSelectedFields"][] = "FiledOTOnly";
$tdataotndrdglobal1[".updateSelectedFields"][] = "EarlyOT";
$tdataotndrdglobal1[".updateSelectedFields"][] = "PostOT";
$tdataotndrdglobal1[".updateSelectedFields"][] = "OTGreaterThan";
$tdataotndrdglobal1[".updateSelectedFields"][] = "OTMinimum";
$tdataotndrdglobal1[".updateSelectedFields"][] = "ApprovedND";
$tdataotndrdglobal1[".updateSelectedFields"][] = "NDGreaterThan";
$tdataotndrdglobal1[".updateSelectedFields"][] = "NDMinimum";
$tdataotndrdglobal1[".updateSelectedFields"][] = "ApprovedRD";
$tdataotndrdglobal1[".updateSelectedFields"][] = "RDGreaterThan";
$tdataotndrdglobal1[".updateSelectedFields"][] = "RDMinimum";


$tdataotndrdglobal1[".exportFields"] = array();
$tdataotndrdglobal1[".exportFields"][] = "GAID";
$tdataotndrdglobal1[".exportFields"][] = "Employee";
$tdataotndrdglobal1[".exportFields"][] = "ApprovedOT";
$tdataotndrdglobal1[".exportFields"][] = "FiledOTOnly";
$tdataotndrdglobal1[".exportFields"][] = "EarlyOT";
$tdataotndrdglobal1[".exportFields"][] = "PostOT";
$tdataotndrdglobal1[".exportFields"][] = "OTGreaterThan";
$tdataotndrdglobal1[".exportFields"][] = "OTMinimum";
$tdataotndrdglobal1[".exportFields"][] = "ApprovedND";
$tdataotndrdglobal1[".exportFields"][] = "NDGreaterThan";
$tdataotndrdglobal1[".exportFields"][] = "NDMinimum";
$tdataotndrdglobal1[".exportFields"][] = "ApprovedRD";
$tdataotndrdglobal1[".exportFields"][] = "RDGreaterThan";
$tdataotndrdglobal1[".exportFields"][] = "RDMinimum";

$tdataotndrdglobal1[".importFields"] = array();

$tdataotndrdglobal1[".printFields"] = array();
$tdataotndrdglobal1[".printFields"][] = "GAID";
$tdataotndrdglobal1[".printFields"][] = "Employee";
$tdataotndrdglobal1[".printFields"][] = "ApprovedOT";
$tdataotndrdglobal1[".printFields"][] = "FiledOTOnly";
$tdataotndrdglobal1[".printFields"][] = "EarlyOT";
$tdataotndrdglobal1[".printFields"][] = "PostOT";
$tdataotndrdglobal1[".printFields"][] = "OTGreaterThan";
$tdataotndrdglobal1[".printFields"][] = "OTMinimum";
$tdataotndrdglobal1[".printFields"][] = "ApprovedND";
$tdataotndrdglobal1[".printFields"][] = "NDGreaterThan";
$tdataotndrdglobal1[".printFields"][] = "NDMinimum";
$tdataotndrdglobal1[".printFields"][] = "ApprovedRD";
$tdataotndrdglobal1[".printFields"][] = "RDGreaterThan";
$tdataotndrdglobal1[".printFields"][] = "RDMinimum";


//	GAID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "GAID";
	$fdata["GoodName"] = "GAID";
	$fdata["ownerTable"] = "otndrdglobal";
	$fdata["Label"] = GetFieldLabel("otndrdglobal1","GAID");
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




	$tdataotndrdglobal1["GAID"] = $fdata;
//	ApprovedOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ApprovedOT";
	$fdata["GoodName"] = "ApprovedOT";
	$fdata["ownerTable"] = "otndrdglobal";
	$fdata["Label"] = GetFieldLabel("otndrdglobal1","ApprovedOT");
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




	$tdataotndrdglobal1["ApprovedOT"] = $fdata;
//	EarlyOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EarlyOT";
	$fdata["GoodName"] = "EarlyOT";
	$fdata["ownerTable"] = "otndrdglobal";
	$fdata["Label"] = GetFieldLabel("otndrdglobal1","EarlyOT");
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




	$tdataotndrdglobal1["EarlyOT"] = $fdata;
//	PostOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PostOT";
	$fdata["GoodName"] = "PostOT";
	$fdata["ownerTable"] = "otndrdglobal";
	$fdata["Label"] = GetFieldLabel("otndrdglobal1","PostOT");
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




	$tdataotndrdglobal1["PostOT"] = $fdata;
//	OTGreaterThan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "OTGreaterThan";
	$fdata["GoodName"] = "OTGreaterThan";
	$fdata["ownerTable"] = "otndrdglobal";
	$fdata["Label"] = GetFieldLabel("otndrdglobal1","OTGreaterThan");
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




	$tdataotndrdglobal1["OTGreaterThan"] = $fdata;
//	ApprovedND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ApprovedND";
	$fdata["GoodName"] = "ApprovedND";
	$fdata["ownerTable"] = "otndrdglobal";
	$fdata["Label"] = GetFieldLabel("otndrdglobal1","ApprovedND");
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




	$tdataotndrdglobal1["ApprovedND"] = $fdata;
//	NDGreaterThan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "NDGreaterThan";
	$fdata["GoodName"] = "NDGreaterThan";
	$fdata["ownerTable"] = "otndrdglobal";
	$fdata["Label"] = GetFieldLabel("otndrdglobal1","NDGreaterThan");
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




	$tdataotndrdglobal1["NDGreaterThan"] = $fdata;
//	ApprovedRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ApprovedRD";
	$fdata["GoodName"] = "ApprovedRD";
	$fdata["ownerTable"] = "otndrdglobal";
	$fdata["Label"] = GetFieldLabel("otndrdglobal1","ApprovedRD");
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




	$tdataotndrdglobal1["ApprovedRD"] = $fdata;
//	RDGreaterThan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "RDGreaterThan";
	$fdata["GoodName"] = "RDGreaterThan";
	$fdata["ownerTable"] = "otndrdglobal";
	$fdata["Label"] = GetFieldLabel("otndrdglobal1","RDGreaterThan");
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




	$tdataotndrdglobal1["RDGreaterThan"] = $fdata;
//	FiledOTOnly
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "FiledOTOnly";
	$fdata["GoodName"] = "FiledOTOnly";
	$fdata["ownerTable"] = "otndrdglobal";
	$fdata["Label"] = GetFieldLabel("otndrdglobal1","FiledOTOnly");
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




	$tdataotndrdglobal1["FiledOTOnly"] = $fdata;
//	OTMinimum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "OTMinimum";
	$fdata["GoodName"] = "OTMinimum";
	$fdata["ownerTable"] = "otndrdglobal";
	$fdata["Label"] = GetFieldLabel("otndrdglobal1","OTMinimum");
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




	$tdataotndrdglobal1["OTMinimum"] = $fdata;
//	NDMinimum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "NDMinimum";
	$fdata["GoodName"] = "NDMinimum";
	$fdata["ownerTable"] = "otndrdglobal";
	$fdata["Label"] = GetFieldLabel("otndrdglobal1","NDMinimum");
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




	$tdataotndrdglobal1["NDMinimum"] = $fdata;
//	RDMinimum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "RDMinimum";
	$fdata["GoodName"] = "RDMinimum";
	$fdata["ownerTable"] = "otndrdglobal";
	$fdata["Label"] = GetFieldLabel("otndrdglobal1","RDMinimum");
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




	$tdataotndrdglobal1["RDMinimum"] = $fdata;
//	Employee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Employee";
	$fdata["GoodName"] = "Employee";
	$fdata["ownerTable"] = "otndrdglobal";
	$fdata["Label"] = GetFieldLabel("otndrdglobal1","Employee");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Employee";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Employee";

	
	
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
	$edata["LookupTable"] = "dtrempl";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EmployeeID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "user_name";
	
	

	
	$edata["LookupOrderBy"] = "user_name";

	
	
	
	

	
	
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




	$tdataotndrdglobal1["Employee"] = $fdata;


$tables_data["otndrdglobal1"]=&$tdataotndrdglobal1;
$field_labels["otndrdglobal1"] = &$fieldLabelsotndrdglobal1;
$fieldToolTips["otndrdglobal1"] = &$fieldToolTipsotndrdglobal1;
$placeHolders["otndrdglobal1"] = &$placeHoldersotndrdglobal1;
$page_titles["otndrdglobal1"] = &$pageTitlesotndrdglobal1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["otndrdglobal1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["otndrdglobal1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_otndrdglobal1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "GAID,  ApprovedOT,  EarlyOT,  PostOT,  OTGreaterThan,  ApprovedND,  NDGreaterThan,  ApprovedRD,  RDGreaterThan,  FiledOTOnly,  OTMinimum,  NDMinimum,  RDMinimum,  Employee";
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
	"m_srcTableName" => "otndrdglobal1"
));

$proto6["m_sql"] = "GAID";
$proto6["m_srcTableName"] = "otndrdglobal1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedOT",
	"m_strTable" => "otndrdglobal",
	"m_srcTableName" => "otndrdglobal1"
));

$proto8["m_sql"] = "ApprovedOT";
$proto8["m_srcTableName"] = "otndrdglobal1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "EarlyOT",
	"m_strTable" => "otndrdglobal",
	"m_srcTableName" => "otndrdglobal1"
));

$proto10["m_sql"] = "EarlyOT";
$proto10["m_srcTableName"] = "otndrdglobal1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PostOT",
	"m_strTable" => "otndrdglobal",
	"m_srcTableName" => "otndrdglobal1"
));

$proto12["m_sql"] = "PostOT";
$proto12["m_srcTableName"] = "otndrdglobal1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "OTGreaterThan",
	"m_strTable" => "otndrdglobal",
	"m_srcTableName" => "otndrdglobal1"
));

$proto14["m_sql"] = "OTGreaterThan";
$proto14["m_srcTableName"] = "otndrdglobal1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedND",
	"m_strTable" => "otndrdglobal",
	"m_srcTableName" => "otndrdglobal1"
));

$proto16["m_sql"] = "ApprovedND";
$proto16["m_srcTableName"] = "otndrdglobal1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "NDGreaterThan",
	"m_strTable" => "otndrdglobal",
	"m_srcTableName" => "otndrdglobal1"
));

$proto18["m_sql"] = "NDGreaterThan";
$proto18["m_srcTableName"] = "otndrdglobal1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedRD",
	"m_strTable" => "otndrdglobal",
	"m_srcTableName" => "otndrdglobal1"
));

$proto20["m_sql"] = "ApprovedRD";
$proto20["m_srcTableName"] = "otndrdglobal1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "RDGreaterThan",
	"m_strTable" => "otndrdglobal",
	"m_srcTableName" => "otndrdglobal1"
));

$proto22["m_sql"] = "RDGreaterThan";
$proto22["m_srcTableName"] = "otndrdglobal1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "FiledOTOnly",
	"m_strTable" => "otndrdglobal",
	"m_srcTableName" => "otndrdglobal1"
));

$proto24["m_sql"] = "FiledOTOnly";
$proto24["m_srcTableName"] = "otndrdglobal1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "OTMinimum",
	"m_strTable" => "otndrdglobal",
	"m_srcTableName" => "otndrdglobal1"
));

$proto26["m_sql"] = "OTMinimum";
$proto26["m_srcTableName"] = "otndrdglobal1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "NDMinimum",
	"m_strTable" => "otndrdglobal",
	"m_srcTableName" => "otndrdglobal1"
));

$proto28["m_sql"] = "NDMinimum";
$proto28["m_srcTableName"] = "otndrdglobal1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "RDMinimum",
	"m_strTable" => "otndrdglobal",
	"m_srcTableName" => "otndrdglobal1"
));

$proto30["m_sql"] = "RDMinimum";
$proto30["m_srcTableName"] = "otndrdglobal1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Employee",
	"m_strTable" => "otndrdglobal",
	"m_srcTableName" => "otndrdglobal1"
));

$proto32["m_sql"] = "Employee";
$proto32["m_srcTableName"] = "otndrdglobal1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "otndrdglobal";
$proto35["m_srcTableName"] = "otndrdglobal1";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "GAID";
$proto35["m_columns"][] = "ApprovedOT";
$proto35["m_columns"][] = "EarlyOT";
$proto35["m_columns"][] = "PostOT";
$proto35["m_columns"][] = "OTGreaterThan";
$proto35["m_columns"][] = "ApprovedND";
$proto35["m_columns"][] = "NDGreaterThan";
$proto35["m_columns"][] = "ApprovedRD";
$proto35["m_columns"][] = "RDGreaterThan";
$proto35["m_columns"][] = "FiledOTOnly";
$proto35["m_columns"][] = "OTProc";
$proto35["m_columns"][] = "OTMinimum";
$proto35["m_columns"][] = "NDMinimum";
$proto35["m_columns"][] = "RDMinimum";
$proto35["m_columns"][] = "Employee";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "otndrdglobal";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "otndrdglobal1";
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
$proto0["m_srcTableName"]="otndrdglobal1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_otndrdglobal1 = createSqlQuery_otndrdglobal1();


	
		;

														

$tdataotndrdglobal1[".sqlquery"] = $queryData_otndrdglobal1;

include_once(getabspath("include/otndrdglobal1_events.php"));
$tableEvents["otndrdglobal1"] = new eventclass_otndrdglobal1;
$tdataotndrdglobal1[".hasEvents"] = true;

?>