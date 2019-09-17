<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapayrollstatutories = array();
	$tdatapayrollstatutories[".truncateText"] = true;
	$tdatapayrollstatutories[".NumberOfChars"] = 80;
	$tdatapayrollstatutories[".ShortName"] = "payrollstatutories";
	$tdatapayrollstatutories[".OwnerID"] = "";
	$tdatapayrollstatutories[".OriginalTable"] = "payrollstatutories";

//	field labels
$fieldLabelspayrollstatutories = array();
$fieldToolTipspayrollstatutories = array();
$pageTitlespayrollstatutories = array();
$placeHolderspayrollstatutories = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspayrollstatutories["English"] = array();
	$fieldToolTipspayrollstatutories["English"] = array();
	$placeHolderspayrollstatutories["English"] = array();
	$pageTitlespayrollstatutories["English"] = array();
	$fieldLabelspayrollstatutories["English"]["PstID"] = "Pst ID";
	$fieldToolTipspayrollstatutories["English"]["PstID"] = "";
	$placeHolderspayrollstatutories["English"]["PstID"] = "";
	$fieldLabelspayrollstatutories["English"]["SSS"] = "SSS";
	$fieldToolTipspayrollstatutories["English"]["SSS"] = "";
	$placeHolderspayrollstatutories["English"]["SSS"] = "";
	$fieldLabelspayrollstatutories["English"]["PagIbig"] = "Pag Ibig";
	$fieldToolTipspayrollstatutories["English"]["PagIbig"] = "";
	$placeHolderspayrollstatutories["English"]["PagIbig"] = "";
	$fieldLabelspayrollstatutories["English"]["PHIC"] = "PHIC";
	$fieldToolTipspayrollstatutories["English"]["PHIC"] = "";
	$placeHolderspayrollstatutories["English"]["PHIC"] = "";
	$fieldLabelspayrollstatutories["English"]["FromDate"] = "From Date";
	$fieldToolTipspayrollstatutories["English"]["FromDate"] = "";
	$placeHolderspayrollstatutories["English"]["FromDate"] = "";
	$fieldLabelspayrollstatutories["English"]["ToDate"] = "To Date";
	$fieldToolTipspayrollstatutories["English"]["ToDate"] = "";
	$placeHolderspayrollstatutories["English"]["ToDate"] = "";
	$fieldLabelspayrollstatutories["English"]["EmployeeID"] = "Biometric ID";
	$fieldToolTipspayrollstatutories["English"]["EmployeeID"] = "";
	$placeHolderspayrollstatutories["English"]["EmployeeID"] = "";
	$fieldLabelspayrollstatutories["English"]["PSID"] = "PSID";
	$fieldToolTipspayrollstatutories["English"]["PSID"] = "";
	$placeHolderspayrollstatutories["English"]["PSID"] = "";
	$fieldLabelspayrollstatutories["English"]["SSSER"] = "SSSER";
	$fieldToolTipspayrollstatutories["English"]["SSSER"] = "";
	$placeHolderspayrollstatutories["English"]["SSSER"] = "";
	$fieldLabelspayrollstatutories["English"]["SSSEC"] = "SSSEC";
	$fieldToolTipspayrollstatutories["English"]["SSSEC"] = "";
	$placeHolderspayrollstatutories["English"]["SSSEC"] = "";
	$fieldLabelspayrollstatutories["English"]["SSSTotal"] = "SSSTotal";
	$fieldToolTipspayrollstatutories["English"]["SSSTotal"] = "";
	$placeHolderspayrollstatutories["English"]["SSSTotal"] = "";
	$fieldLabelspayrollstatutories["English"]["PagIbigER"] = "Pag Ibig ER";
	$fieldToolTipspayrollstatutories["English"]["PagIbigER"] = "";
	$placeHolderspayrollstatutories["English"]["PagIbigER"] = "";
	$fieldLabelspayrollstatutories["English"]["PHICER"] = "PHICER";
	$fieldToolTipspayrollstatutories["English"]["PHICER"] = "";
	$placeHolderspayrollstatutories["English"]["PHICER"] = "";
	$fieldLabelspayrollstatutories["English"]["PagIbigTotal"] = "Pag Ibig Total";
	$fieldToolTipspayrollstatutories["English"]["PagIbigTotal"] = "";
	$placeHolderspayrollstatutories["English"]["PagIbigTotal"] = "";
	$fieldLabelspayrollstatutories["English"]["PHICTotal"] = "PHICTotal";
	$fieldToolTipspayrollstatutories["English"]["PHICTotal"] = "";
	$placeHolderspayrollstatutories["English"]["PHICTotal"] = "";
	$fieldLabelspayrollstatutories["English"]["Employer"] = "Employer";
	$fieldToolTipspayrollstatutories["English"]["Employer"] = "";
	$placeHolderspayrollstatutories["English"]["Employer"] = "";
	$fieldLabelspayrollstatutories["English"]["Division"] = "Division";
	$fieldToolTipspayrollstatutories["English"]["Division"] = "";
	$placeHolderspayrollstatutories["English"]["Division"] = "";
	$fieldLabelspayrollstatutories["English"]["WageType"] = "Wage Type";
	$fieldToolTipspayrollstatutories["English"]["WageType"] = "";
	$placeHolderspayrollstatutories["English"]["WageType"] = "";
	if (count($fieldToolTipspayrollstatutories["English"]))
		$tdatapayrollstatutories[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspayrollstatutories[""] = array();
	$fieldToolTipspayrollstatutories[""] = array();
	$placeHolderspayrollstatutories[""] = array();
	$pageTitlespayrollstatutories[""] = array();
	if (count($fieldToolTipspayrollstatutories[""]))
		$tdatapayrollstatutories[".isUseToolTips"] = true;
}


	$tdatapayrollstatutories[".NCSearch"] = true;



$tdatapayrollstatutories[".shortTableName"] = "payrollstatutories";
$tdatapayrollstatutories[".nSecOptions"] = 0;
$tdatapayrollstatutories[".recsPerRowPrint"] = 1;
$tdatapayrollstatutories[".mainTableOwnerID"] = "";
$tdatapayrollstatutories[".moveNext"] = 1;
$tdatapayrollstatutories[".entityType"] = 0;

$tdatapayrollstatutories[".strOriginalTableName"] = "payrollstatutories";

	



$tdatapayrollstatutories[".showAddInPopup"] = false;

$tdatapayrollstatutories[".showEditInPopup"] = false;

$tdatapayrollstatutories[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapayrollstatutories[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapayrollstatutories[".fieldsForRegister"] = array();

$tdatapayrollstatutories[".listAjax"] = false;

	$tdatapayrollstatutories[".audit"] = false;

	$tdatapayrollstatutories[".locking"] = false;

$tdatapayrollstatutories[".edit"] = true;
$tdatapayrollstatutories[".afterEditAction"] = 1;
$tdatapayrollstatutories[".closePopupAfterEdit"] = 1;
$tdatapayrollstatutories[".afterEditActionDetTable"] = "";

$tdatapayrollstatutories[".add"] = true;
$tdatapayrollstatutories[".afterAddAction"] = 1;
$tdatapayrollstatutories[".closePopupAfterAdd"] = 1;
$tdatapayrollstatutories[".afterAddActionDetTable"] = "";

$tdatapayrollstatutories[".list"] = true;

$tdatapayrollstatutories[".inlineEdit"] = true;


$tdatapayrollstatutories[".reorderRecordsByHeader"] = true;


$tdatapayrollstatutories[".exportFormatting"] = 2;
$tdatapayrollstatutories[".exportDelimiter"] = ",";
		
$tdatapayrollstatutories[".inlineAdd"] = true;
$tdatapayrollstatutories[".view"] = true;

$tdatapayrollstatutories[".import"] = true;

$tdatapayrollstatutories[".exportTo"] = true;

$tdatapayrollstatutories[".printFriendly"] = true;

$tdatapayrollstatutories[".delete"] = true;

$tdatapayrollstatutories[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapayrollstatutories[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapayrollstatutories[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapayrollstatutories[".searchSaving"] = false;
//

$tdatapayrollstatutories[".showSearchPanel"] = true;
		$tdatapayrollstatutories[".flexibleSearch"] = true;

$tdatapayrollstatutories[".isUseAjaxSuggest"] = true;

$tdatapayrollstatutories[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																				

$tdatapayrollstatutories[".ajaxCodeSnippetAdded"] = false;

$tdatapayrollstatutories[".buttonsAdded"] = false;

$tdatapayrollstatutories[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapayrollstatutories[".isUseTimeForSearch"] = false;



$tdatapayrollstatutories[".badgeColor"] = "9acd32";


$tdatapayrollstatutories[".allSearchFields"] = array();
$tdatapayrollstatutories[".filterFields"] = array();
$tdatapayrollstatutories[".requiredSearchFields"] = array();

$tdatapayrollstatutories[".allSearchFields"][] = "PstID";
	$tdatapayrollstatutories[".allSearchFields"][] = "Employer";
	$tdatapayrollstatutories[".allSearchFields"][] = "Division";
	$tdatapayrollstatutories[".allSearchFields"][] = "WageType";
	$tdatapayrollstatutories[".allSearchFields"][] = "EmployeeID";
	$tdatapayrollstatutories[".allSearchFields"][] = "FromDate";
	$tdatapayrollstatutories[".allSearchFields"][] = "ToDate";
	$tdatapayrollstatutories[".allSearchFields"][] = "SSS";
	$tdatapayrollstatutories[".allSearchFields"][] = "SSSER";
	$tdatapayrollstatutories[".allSearchFields"][] = "SSSEC";
	$tdatapayrollstatutories[".allSearchFields"][] = "SSSTotal";
	$tdatapayrollstatutories[".allSearchFields"][] = "PagIbig";
	$tdatapayrollstatutories[".allSearchFields"][] = "PagIbigER";
	$tdatapayrollstatutories[".allSearchFields"][] = "PagIbigTotal";
	$tdatapayrollstatutories[".allSearchFields"][] = "PHIC";
	$tdatapayrollstatutories[".allSearchFields"][] = "PHICER";
	$tdatapayrollstatutories[".allSearchFields"][] = "PHICTotal";
	$tdatapayrollstatutories[".allSearchFields"][] = "PSID";
	

$tdatapayrollstatutories[".googleLikeFields"] = array();
$tdatapayrollstatutories[".googleLikeFields"][] = "PstID";
$tdatapayrollstatutories[".googleLikeFields"][] = "SSS";
$tdatapayrollstatutories[".googleLikeFields"][] = "PagIbig";
$tdatapayrollstatutories[".googleLikeFields"][] = "PHIC";
$tdatapayrollstatutories[".googleLikeFields"][] = "FromDate";
$tdatapayrollstatutories[".googleLikeFields"][] = "ToDate";
$tdatapayrollstatutories[".googleLikeFields"][] = "EmployeeID";
$tdatapayrollstatutories[".googleLikeFields"][] = "PSID";
$tdatapayrollstatutories[".googleLikeFields"][] = "SSSER";
$tdatapayrollstatutories[".googleLikeFields"][] = "SSSEC";
$tdatapayrollstatutories[".googleLikeFields"][] = "SSSTotal";
$tdatapayrollstatutories[".googleLikeFields"][] = "PagIbigER";
$tdatapayrollstatutories[".googleLikeFields"][] = "PagIbigTotal";
$tdatapayrollstatutories[".googleLikeFields"][] = "PHICER";
$tdatapayrollstatutories[".googleLikeFields"][] = "PHICTotal";
$tdatapayrollstatutories[".googleLikeFields"][] = "Employer";
$tdatapayrollstatutories[".googleLikeFields"][] = "Division";
$tdatapayrollstatutories[".googleLikeFields"][] = "WageType";


$tdatapayrollstatutories[".advSearchFields"] = array();
$tdatapayrollstatutories[".advSearchFields"][] = "PstID";
$tdatapayrollstatutories[".advSearchFields"][] = "Employer";
$tdatapayrollstatutories[".advSearchFields"][] = "Division";
$tdatapayrollstatutories[".advSearchFields"][] = "WageType";
$tdatapayrollstatutories[".advSearchFields"][] = "EmployeeID";
$tdatapayrollstatutories[".advSearchFields"][] = "FromDate";
$tdatapayrollstatutories[".advSearchFields"][] = "ToDate";
$tdatapayrollstatutories[".advSearchFields"][] = "SSS";
$tdatapayrollstatutories[".advSearchFields"][] = "SSSER";
$tdatapayrollstatutories[".advSearchFields"][] = "SSSEC";
$tdatapayrollstatutories[".advSearchFields"][] = "SSSTotal";
$tdatapayrollstatutories[".advSearchFields"][] = "PagIbig";
$tdatapayrollstatutories[".advSearchFields"][] = "PagIbigER";
$tdatapayrollstatutories[".advSearchFields"][] = "PagIbigTotal";
$tdatapayrollstatutories[".advSearchFields"][] = "PHIC";
$tdatapayrollstatutories[".advSearchFields"][] = "PHICER";
$tdatapayrollstatutories[".advSearchFields"][] = "PHICTotal";
$tdatapayrollstatutories[".advSearchFields"][] = "PSID";

$tdatapayrollstatutories[".tableType"] = "list";

$tdatapayrollstatutories[".printerPageOrientation"] = 0;
$tdatapayrollstatutories[".nPrinterPageScale"] = 100;

$tdatapayrollstatutories[".nPrinterSplitRecords"] = 40;

$tdatapayrollstatutories[".nPrinterPDFSplitRecords"] = 40;



$tdatapayrollstatutories[".geocodingEnabled"] = false;





$tdatapayrollstatutories[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatapayrollstatutories[".totalsFields"] = array();
$tdatapayrollstatutories[".totalsFields"][] = array(
	"fName" => "SSS",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollstatutories[".totalsFields"][] = array(
	"fName" => "SSSER",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollstatutories[".totalsFields"][] = array(
	"fName" => "SSSEC",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollstatutories[".totalsFields"][] = array(
	"fName" => "SSSTotal",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollstatutories[".totalsFields"][] = array(
	"fName" => "PagIbig",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollstatutories[".totalsFields"][] = array(
	"fName" => "PagIbigER",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollstatutories[".totalsFields"][] = array(
	"fName" => "PagIbigTotal",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollstatutories[".totalsFields"][] = array(
	"fName" => "PHIC",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollstatutories[".totalsFields"][] = array(
	"fName" => "PHICER",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatapayrollstatutories[".totalsFields"][] = array(
	"fName" => "PHICTotal",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatapayrollstatutories[".pageSize"] = 20;

$tdatapayrollstatutories[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapayrollstatutories[".strOrderBy"] = $tstrOrderBy;

$tdatapayrollstatutories[".orderindexes"] = array();

$tdatapayrollstatutories[".sqlHead"] = "SELECT PstID,  	SSS,  	PagIbig,  	PHIC,  	FromDate,  	ToDate,  	EmployeeID,  	PSID,  	SSSER,  	SSSEC,  	SSSTotal,  	PagIbigER,  	PagIbigTotal,  	PHICER,  	PHICTotal,  	Employer,  	Division,  	WageType";
$tdatapayrollstatutories[".sqlFrom"] = "FROM payrollstatutories";
$tdatapayrollstatutories[".sqlWhereExpr"] = "";
$tdatapayrollstatutories[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapayrollstatutories[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapayrollstatutories[".arrGroupsPerPage"] = $arrGPP;

$tdatapayrollstatutories[".highlightSearchResults"] = true;

$tableKeyspayrollstatutories = array();
$tableKeyspayrollstatutories[] = "PstID";
$tdatapayrollstatutories[".Keys"] = $tableKeyspayrollstatutories;

$tdatapayrollstatutories[".listFields"] = array();
$tdatapayrollstatutories[".listFields"][] = "PstID";
$tdatapayrollstatutories[".listFields"][] = "Employer";
$tdatapayrollstatutories[".listFields"][] = "Division";
$tdatapayrollstatutories[".listFields"][] = "WageType";
$tdatapayrollstatutories[".listFields"][] = "EmployeeID";
$tdatapayrollstatutories[".listFields"][] = "FromDate";
$tdatapayrollstatutories[".listFields"][] = "ToDate";
$tdatapayrollstatutories[".listFields"][] = "SSS";
$tdatapayrollstatutories[".listFields"][] = "SSSER";
$tdatapayrollstatutories[".listFields"][] = "SSSEC";
$tdatapayrollstatutories[".listFields"][] = "SSSTotal";
$tdatapayrollstatutories[".listFields"][] = "PagIbig";
$tdatapayrollstatutories[".listFields"][] = "PagIbigER";
$tdatapayrollstatutories[".listFields"][] = "PagIbigTotal";
$tdatapayrollstatutories[".listFields"][] = "PHIC";
$tdatapayrollstatutories[".listFields"][] = "PHICER";
$tdatapayrollstatutories[".listFields"][] = "PHICTotal";
$tdatapayrollstatutories[".listFields"][] = "PSID";

$tdatapayrollstatutories[".hideMobileList"] = array();


$tdatapayrollstatutories[".viewFields"] = array();
$tdatapayrollstatutories[".viewFields"][] = "PstID";
$tdatapayrollstatutories[".viewFields"][] = "Employer";
$tdatapayrollstatutories[".viewFields"][] = "Division";
$tdatapayrollstatutories[".viewFields"][] = "WageType";
$tdatapayrollstatutories[".viewFields"][] = "EmployeeID";
$tdatapayrollstatutories[".viewFields"][] = "FromDate";
$tdatapayrollstatutories[".viewFields"][] = "ToDate";
$tdatapayrollstatutories[".viewFields"][] = "SSS";
$tdatapayrollstatutories[".viewFields"][] = "SSSER";
$tdatapayrollstatutories[".viewFields"][] = "SSSEC";
$tdatapayrollstatutories[".viewFields"][] = "SSSTotal";
$tdatapayrollstatutories[".viewFields"][] = "PagIbig";
$tdatapayrollstatutories[".viewFields"][] = "PagIbigER";
$tdatapayrollstatutories[".viewFields"][] = "PagIbigTotal";
$tdatapayrollstatutories[".viewFields"][] = "PHIC";
$tdatapayrollstatutories[".viewFields"][] = "PHICER";
$tdatapayrollstatutories[".viewFields"][] = "PHICTotal";
$tdatapayrollstatutories[".viewFields"][] = "PSID";

$tdatapayrollstatutories[".addFields"] = array();
$tdatapayrollstatutories[".addFields"][] = "Employer";
$tdatapayrollstatutories[".addFields"][] = "Division";
$tdatapayrollstatutories[".addFields"][] = "WageType";
$tdatapayrollstatutories[".addFields"][] = "EmployeeID";
$tdatapayrollstatutories[".addFields"][] = "FromDate";
$tdatapayrollstatutories[".addFields"][] = "ToDate";
$tdatapayrollstatutories[".addFields"][] = "SSS";
$tdatapayrollstatutories[".addFields"][] = "SSSER";
$tdatapayrollstatutories[".addFields"][] = "SSSEC";
$tdatapayrollstatutories[".addFields"][] = "SSSTotal";
$tdatapayrollstatutories[".addFields"][] = "PagIbig";
$tdatapayrollstatutories[".addFields"][] = "PagIbigER";
$tdatapayrollstatutories[".addFields"][] = "PagIbigTotal";
$tdatapayrollstatutories[".addFields"][] = "PHIC";
$tdatapayrollstatutories[".addFields"][] = "PHICER";
$tdatapayrollstatutories[".addFields"][] = "PHICTotal";
$tdatapayrollstatutories[".addFields"][] = "PSID";

$tdatapayrollstatutories[".masterListFields"] = array();
$tdatapayrollstatutories[".masterListFields"][] = "PstID";
$tdatapayrollstatutories[".masterListFields"][] = "Employer";
$tdatapayrollstatutories[".masterListFields"][] = "Division";
$tdatapayrollstatutories[".masterListFields"][] = "WageType";
$tdatapayrollstatutories[".masterListFields"][] = "EmployeeID";
$tdatapayrollstatutories[".masterListFields"][] = "FromDate";
$tdatapayrollstatutories[".masterListFields"][] = "ToDate";
$tdatapayrollstatutories[".masterListFields"][] = "SSS";
$tdatapayrollstatutories[".masterListFields"][] = "SSSER";
$tdatapayrollstatutories[".masterListFields"][] = "SSSEC";
$tdatapayrollstatutories[".masterListFields"][] = "SSSTotal";
$tdatapayrollstatutories[".masterListFields"][] = "PagIbig";
$tdatapayrollstatutories[".masterListFields"][] = "PagIbigER";
$tdatapayrollstatutories[".masterListFields"][] = "PagIbigTotal";
$tdatapayrollstatutories[".masterListFields"][] = "PHIC";
$tdatapayrollstatutories[".masterListFields"][] = "PHICER";
$tdatapayrollstatutories[".masterListFields"][] = "PHICTotal";
$tdatapayrollstatutories[".masterListFields"][] = "PSID";

$tdatapayrollstatutories[".inlineAddFields"] = array();
$tdatapayrollstatutories[".inlineAddFields"][] = "Employer";
$tdatapayrollstatutories[".inlineAddFields"][] = "Division";
$tdatapayrollstatutories[".inlineAddFields"][] = "WageType";
$tdatapayrollstatutories[".inlineAddFields"][] = "EmployeeID";
$tdatapayrollstatutories[".inlineAddFields"][] = "FromDate";
$tdatapayrollstatutories[".inlineAddFields"][] = "ToDate";
$tdatapayrollstatutories[".inlineAddFields"][] = "SSS";
$tdatapayrollstatutories[".inlineAddFields"][] = "SSSER";
$tdatapayrollstatutories[".inlineAddFields"][] = "SSSEC";
$tdatapayrollstatutories[".inlineAddFields"][] = "SSSTotal";
$tdatapayrollstatutories[".inlineAddFields"][] = "PagIbig";
$tdatapayrollstatutories[".inlineAddFields"][] = "PagIbigER";
$tdatapayrollstatutories[".inlineAddFields"][] = "PagIbigTotal";
$tdatapayrollstatutories[".inlineAddFields"][] = "PHIC";
$tdatapayrollstatutories[".inlineAddFields"][] = "PHICER";
$tdatapayrollstatutories[".inlineAddFields"][] = "PHICTotal";
$tdatapayrollstatutories[".inlineAddFields"][] = "PSID";

$tdatapayrollstatutories[".editFields"] = array();
$tdatapayrollstatutories[".editFields"][] = "Employer";
$tdatapayrollstatutories[".editFields"][] = "Division";
$tdatapayrollstatutories[".editFields"][] = "WageType";
$tdatapayrollstatutories[".editFields"][] = "EmployeeID";
$tdatapayrollstatutories[".editFields"][] = "FromDate";
$tdatapayrollstatutories[".editFields"][] = "ToDate";
$tdatapayrollstatutories[".editFields"][] = "SSS";
$tdatapayrollstatutories[".editFields"][] = "SSSER";
$tdatapayrollstatutories[".editFields"][] = "SSSEC";
$tdatapayrollstatutories[".editFields"][] = "SSSTotal";
$tdatapayrollstatutories[".editFields"][] = "PagIbig";
$tdatapayrollstatutories[".editFields"][] = "PagIbigER";
$tdatapayrollstatutories[".editFields"][] = "PagIbigTotal";
$tdatapayrollstatutories[".editFields"][] = "PHIC";
$tdatapayrollstatutories[".editFields"][] = "PHICER";
$tdatapayrollstatutories[".editFields"][] = "PHICTotal";
$tdatapayrollstatutories[".editFields"][] = "PSID";

$tdatapayrollstatutories[".inlineEditFields"] = array();
$tdatapayrollstatutories[".inlineEditFields"][] = "Employer";
$tdatapayrollstatutories[".inlineEditFields"][] = "Division";
$tdatapayrollstatutories[".inlineEditFields"][] = "WageType";
$tdatapayrollstatutories[".inlineEditFields"][] = "EmployeeID";
$tdatapayrollstatutories[".inlineEditFields"][] = "FromDate";
$tdatapayrollstatutories[".inlineEditFields"][] = "ToDate";
$tdatapayrollstatutories[".inlineEditFields"][] = "SSS";
$tdatapayrollstatutories[".inlineEditFields"][] = "SSSER";
$tdatapayrollstatutories[".inlineEditFields"][] = "SSSEC";
$tdatapayrollstatutories[".inlineEditFields"][] = "SSSTotal";
$tdatapayrollstatutories[".inlineEditFields"][] = "PagIbig";
$tdatapayrollstatutories[".inlineEditFields"][] = "PagIbigER";
$tdatapayrollstatutories[".inlineEditFields"][] = "PagIbigTotal";
$tdatapayrollstatutories[".inlineEditFields"][] = "PHIC";
$tdatapayrollstatutories[".inlineEditFields"][] = "PHICER";
$tdatapayrollstatutories[".inlineEditFields"][] = "PHICTotal";
$tdatapayrollstatutories[".inlineEditFields"][] = "PSID";

$tdatapayrollstatutories[".updateSelectedFields"] = array();
$tdatapayrollstatutories[".updateSelectedFields"][] = "Employer";
$tdatapayrollstatutories[".updateSelectedFields"][] = "Division";
$tdatapayrollstatutories[".updateSelectedFields"][] = "WageType";
$tdatapayrollstatutories[".updateSelectedFields"][] = "EmployeeID";
$tdatapayrollstatutories[".updateSelectedFields"][] = "FromDate";
$tdatapayrollstatutories[".updateSelectedFields"][] = "ToDate";
$tdatapayrollstatutories[".updateSelectedFields"][] = "SSS";
$tdatapayrollstatutories[".updateSelectedFields"][] = "SSSER";
$tdatapayrollstatutories[".updateSelectedFields"][] = "SSSEC";
$tdatapayrollstatutories[".updateSelectedFields"][] = "SSSTotal";
$tdatapayrollstatutories[".updateSelectedFields"][] = "PagIbig";
$tdatapayrollstatutories[".updateSelectedFields"][] = "PagIbigER";
$tdatapayrollstatutories[".updateSelectedFields"][] = "PagIbigTotal";
$tdatapayrollstatutories[".updateSelectedFields"][] = "PHIC";
$tdatapayrollstatutories[".updateSelectedFields"][] = "PHICER";
$tdatapayrollstatutories[".updateSelectedFields"][] = "PHICTotal";
$tdatapayrollstatutories[".updateSelectedFields"][] = "PSID";


$tdatapayrollstatutories[".exportFields"] = array();
$tdatapayrollstatutories[".exportFields"][] = "PstID";
$tdatapayrollstatutories[".exportFields"][] = "Employer";
$tdatapayrollstatutories[".exportFields"][] = "Division";
$tdatapayrollstatutories[".exportFields"][] = "WageType";
$tdatapayrollstatutories[".exportFields"][] = "EmployeeID";
$tdatapayrollstatutories[".exportFields"][] = "FromDate";
$tdatapayrollstatutories[".exportFields"][] = "ToDate";
$tdatapayrollstatutories[".exportFields"][] = "SSS";
$tdatapayrollstatutories[".exportFields"][] = "SSSER";
$tdatapayrollstatutories[".exportFields"][] = "SSSEC";
$tdatapayrollstatutories[".exportFields"][] = "SSSTotal";
$tdatapayrollstatutories[".exportFields"][] = "PagIbig";
$tdatapayrollstatutories[".exportFields"][] = "PagIbigER";
$tdatapayrollstatutories[".exportFields"][] = "PagIbigTotal";
$tdatapayrollstatutories[".exportFields"][] = "PHIC";
$tdatapayrollstatutories[".exportFields"][] = "PHICER";
$tdatapayrollstatutories[".exportFields"][] = "PHICTotal";
$tdatapayrollstatutories[".exportFields"][] = "PSID";

$tdatapayrollstatutories[".importFields"] = array();
$tdatapayrollstatutories[".importFields"][] = "PstID";
$tdatapayrollstatutories[".importFields"][] = "SSS";
$tdatapayrollstatutories[".importFields"][] = "PagIbig";
$tdatapayrollstatutories[".importFields"][] = "PHIC";
$tdatapayrollstatutories[".importFields"][] = "FromDate";
$tdatapayrollstatutories[".importFields"][] = "ToDate";
$tdatapayrollstatutories[".importFields"][] = "EmployeeID";
$tdatapayrollstatutories[".importFields"][] = "PSID";
$tdatapayrollstatutories[".importFields"][] = "SSSER";
$tdatapayrollstatutories[".importFields"][] = "SSSEC";
$tdatapayrollstatutories[".importFields"][] = "SSSTotal";
$tdatapayrollstatutories[".importFields"][] = "PagIbigER";
$tdatapayrollstatutories[".importFields"][] = "PagIbigTotal";
$tdatapayrollstatutories[".importFields"][] = "PHICER";
$tdatapayrollstatutories[".importFields"][] = "PHICTotal";
$tdatapayrollstatutories[".importFields"][] = "Employer";
$tdatapayrollstatutories[".importFields"][] = "Division";
$tdatapayrollstatutories[".importFields"][] = "WageType";

$tdatapayrollstatutories[".printFields"] = array();
$tdatapayrollstatutories[".printFields"][] = "PstID";
$tdatapayrollstatutories[".printFields"][] = "Employer";
$tdatapayrollstatutories[".printFields"][] = "Division";
$tdatapayrollstatutories[".printFields"][] = "WageType";
$tdatapayrollstatutories[".printFields"][] = "EmployeeID";
$tdatapayrollstatutories[".printFields"][] = "FromDate";
$tdatapayrollstatutories[".printFields"][] = "ToDate";
$tdatapayrollstatutories[".printFields"][] = "SSS";
$tdatapayrollstatutories[".printFields"][] = "SSSER";
$tdatapayrollstatutories[".printFields"][] = "SSSEC";
$tdatapayrollstatutories[".printFields"][] = "SSSTotal";
$tdatapayrollstatutories[".printFields"][] = "PagIbig";
$tdatapayrollstatutories[".printFields"][] = "PagIbigER";
$tdatapayrollstatutories[".printFields"][] = "PagIbigTotal";
$tdatapayrollstatutories[".printFields"][] = "PHIC";
$tdatapayrollstatutories[".printFields"][] = "PHICER";
$tdatapayrollstatutories[".printFields"][] = "PHICTotal";
$tdatapayrollstatutories[".printFields"][] = "PSID";


//	PstID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PstID";
	$fdata["GoodName"] = "PstID";
	$fdata["ownerTable"] = "payrollstatutories";
	$fdata["Label"] = GetFieldLabel("payrollstatutories","PstID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PstID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PstID";

	
	
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




	$tdatapayrollstatutories["PstID"] = $fdata;
//	SSS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SSS";
	$fdata["GoodName"] = "SSS";
	$fdata["ownerTable"] = "payrollstatutories";
	$fdata["Label"] = GetFieldLabel("payrollstatutories","SSS");
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

		$fdata["strField"] = "SSS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SSS";

	
	
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

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 122;

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




	$tdatapayrollstatutories["SSS"] = $fdata;
//	PagIbig
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PagIbig";
	$fdata["GoodName"] = "PagIbig";
	$fdata["ownerTable"] = "payrollstatutories";
	$fdata["Label"] = GetFieldLabel("payrollstatutories","PagIbig");
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

		$fdata["strField"] = "PagIbig";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PagIbig";

	
	
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

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 122;

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




	$tdatapayrollstatutories["PagIbig"] = $fdata;
//	PHIC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PHIC";
	$fdata["GoodName"] = "PHIC";
	$fdata["ownerTable"] = "payrollstatutories";
	$fdata["Label"] = GetFieldLabel("payrollstatutories","PHIC");
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

		$fdata["strField"] = "PHIC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PHIC";

	
	
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

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 122;

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




	$tdatapayrollstatutories["PHIC"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "payrollstatutories";
	$fdata["Label"] = GetFieldLabel("payrollstatutories","FromDate");
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

		$fdata["strField"] = "FromDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FromDate";

	
	
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

	
	
	
		$edata["controlWidth"] = 122;

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




	$tdatapayrollstatutories["FromDate"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "payrollstatutories";
	$fdata["Label"] = GetFieldLabel("payrollstatutories","ToDate");
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

		$fdata["strField"] = "ToDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ToDate";

	
	
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

	
	
	
		$edata["controlWidth"] = 122;

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




	$tdatapayrollstatutories["ToDate"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "payrollstatutories";
	$fdata["Label"] = GetFieldLabel("payrollstatutories","EmployeeID");
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
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EmployeeID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "user_name";
	
	

	
	$edata["LookupOrderBy"] = "user_name";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 262;

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




	$tdatapayrollstatutories["EmployeeID"] = $fdata;
//	PSID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "PSID";
	$fdata["GoodName"] = "PSID";
	$fdata["ownerTable"] = "payrollstatutories";
	$fdata["Label"] = GetFieldLabel("payrollstatutories","PSID");
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

		$fdata["strField"] = "PSID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PSID";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 112;

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




	$tdatapayrollstatutories["PSID"] = $fdata;
//	SSSER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "SSSER";
	$fdata["GoodName"] = "SSSER";
	$fdata["ownerTable"] = "payrollstatutories";
	$fdata["Label"] = GetFieldLabel("payrollstatutories","SSSER");
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

		$fdata["strField"] = "SSSER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SSSER";

	
	
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




	$tdatapayrollstatutories["SSSER"] = $fdata;
//	SSSEC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "SSSEC";
	$fdata["GoodName"] = "SSSEC";
	$fdata["ownerTable"] = "payrollstatutories";
	$fdata["Label"] = GetFieldLabel("payrollstatutories","SSSEC");
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

		$fdata["strField"] = "SSSEC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SSSEC";

	
	
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




	$tdatapayrollstatutories["SSSEC"] = $fdata;
//	SSSTotal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "SSSTotal";
	$fdata["GoodName"] = "SSSTotal";
	$fdata["ownerTable"] = "payrollstatutories";
	$fdata["Label"] = GetFieldLabel("payrollstatutories","SSSTotal");
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

		$fdata["strField"] = "SSSTotal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SSSTotal";

	
	
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




	$tdatapayrollstatutories["SSSTotal"] = $fdata;
//	PagIbigER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "PagIbigER";
	$fdata["GoodName"] = "PagIbigER";
	$fdata["ownerTable"] = "payrollstatutories";
	$fdata["Label"] = GetFieldLabel("payrollstatutories","PagIbigER");
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

		$fdata["strField"] = "PagIbigER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PagIbigER";

	
	
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




	$tdatapayrollstatutories["PagIbigER"] = $fdata;
//	PagIbigTotal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "PagIbigTotal";
	$fdata["GoodName"] = "PagIbigTotal";
	$fdata["ownerTable"] = "payrollstatutories";
	$fdata["Label"] = GetFieldLabel("payrollstatutories","PagIbigTotal");
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

		$fdata["strField"] = "PagIbigTotal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PagIbigTotal";

	
	
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




	$tdatapayrollstatutories["PagIbigTotal"] = $fdata;
//	PHICER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "PHICER";
	$fdata["GoodName"] = "PHICER";
	$fdata["ownerTable"] = "payrollstatutories";
	$fdata["Label"] = GetFieldLabel("payrollstatutories","PHICER");
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

		$fdata["strField"] = "PHICER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PHICER";

	
	
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




	$tdatapayrollstatutories["PHICER"] = $fdata;
//	PHICTotal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "PHICTotal";
	$fdata["GoodName"] = "PHICTotal";
	$fdata["ownerTable"] = "payrollstatutories";
	$fdata["Label"] = GetFieldLabel("payrollstatutories","PHICTotal");
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

		$fdata["strField"] = "PHICTotal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PHICTotal";

	
	
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




	$tdatapayrollstatutories["PHICTotal"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "payrollstatutories";
	$fdata["Label"] = GetFieldLabel("payrollstatutories","Employer");
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




	$tdatapayrollstatutories["Employer"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "payrollstatutories";
	$fdata["Label"] = GetFieldLabel("payrollstatutories","Division");
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




	$tdatapayrollstatutories["Division"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "payrollstatutories";
	$fdata["Label"] = GetFieldLabel("payrollstatutories","WageType");
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

		$fdata["strField"] = "WageType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WageType";

	
	
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
	$edata["LookupTable"] = "emptype";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ECatID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "EmployeeType";
	
	

	
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




	$tdatapayrollstatutories["WageType"] = $fdata;


$tables_data["payrollstatutories"]=&$tdatapayrollstatutories;
$field_labels["payrollstatutories"] = &$fieldLabelspayrollstatutories;
$fieldToolTips["payrollstatutories"] = &$fieldToolTipspayrollstatutories;
$placeHolders["payrollstatutories"] = &$placeHolderspayrollstatutories;
$page_titles["payrollstatutories"] = &$pageTitlespayrollstatutories;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["payrollstatutories"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["payrollstatutories"] = array();


	
				$strOriginalDetailsTable="payrolltab";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="payrolltab";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "payrolltab";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["payrollstatutories"][0] = $masterParams;
				$masterTablesData["payrollstatutories"][0]["masterKeys"] = array();
	$masterTablesData["payrollstatutories"][0]["masterKeys"][]="EmployeeID";
				$masterTablesData["payrollstatutories"][0]["masterKeys"][]="ToDate";
				$masterTablesData["payrollstatutories"][0]["masterKeys"][]="FromDate";
				$masterTablesData["payrollstatutories"][0]["masterKeys"][]="Employer";
				$masterTablesData["payrollstatutories"][0]["masterKeys"][]="Division";
				$masterTablesData["payrollstatutories"][0]["masterKeys"][]="WageType";
				$masterTablesData["payrollstatutories"][0]["detailKeys"] = array();
	$masterTablesData["payrollstatutories"][0]["detailKeys"][]="EmployeeID";
				$masterTablesData["payrollstatutories"][0]["detailKeys"][]="ToDate";
				$masterTablesData["payrollstatutories"][0]["detailKeys"][]="FromDate";
				$masterTablesData["payrollstatutories"][0]["detailKeys"][]="Employer";
				$masterTablesData["payrollstatutories"][0]["detailKeys"][]="Division";
				$masterTablesData["payrollstatutories"][0]["detailKeys"][]="WageType";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_payrollstatutories()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PstID,  	SSS,  	PagIbig,  	PHIC,  	FromDate,  	ToDate,  	EmployeeID,  	PSID,  	SSSER,  	SSSEC,  	SSSTotal,  	PagIbigER,  	PagIbigTotal,  	PHICER,  	PHICTotal,  	Employer,  	Division,  	WageType";
$proto0["m_strFrom"] = "FROM payrollstatutories";
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
	"m_strName" => "PstID",
	"m_strTable" => "payrollstatutories",
	"m_srcTableName" => "payrollstatutories"
));

$proto6["m_sql"] = "PstID";
$proto6["m_srcTableName"] = "payrollstatutories";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SSS",
	"m_strTable" => "payrollstatutories",
	"m_srcTableName" => "payrollstatutories"
));

$proto8["m_sql"] = "SSS";
$proto8["m_srcTableName"] = "payrollstatutories";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbig",
	"m_strTable" => "payrollstatutories",
	"m_srcTableName" => "payrollstatutories"
));

$proto10["m_sql"] = "PagIbig";
$proto10["m_srcTableName"] = "payrollstatutories";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PHIC",
	"m_strTable" => "payrollstatutories",
	"m_srcTableName" => "payrollstatutories"
));

$proto12["m_sql"] = "PHIC";
$proto12["m_srcTableName"] = "payrollstatutories";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "payrollstatutories",
	"m_srcTableName" => "payrollstatutories"
));

$proto14["m_sql"] = "FromDate";
$proto14["m_srcTableName"] = "payrollstatutories";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "payrollstatutories",
	"m_srcTableName" => "payrollstatutories"
));

$proto16["m_sql"] = "ToDate";
$proto16["m_srcTableName"] = "payrollstatutories";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "payrollstatutories",
	"m_srcTableName" => "payrollstatutories"
));

$proto18["m_sql"] = "EmployeeID";
$proto18["m_srcTableName"] = "payrollstatutories";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "PSID",
	"m_strTable" => "payrollstatutories",
	"m_srcTableName" => "payrollstatutories"
));

$proto20["m_sql"] = "PSID";
$proto20["m_srcTableName"] = "payrollstatutories";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSER",
	"m_strTable" => "payrollstatutories",
	"m_srcTableName" => "payrollstatutories"
));

$proto22["m_sql"] = "SSSER";
$proto22["m_srcTableName"] = "payrollstatutories";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSEC",
	"m_strTable" => "payrollstatutories",
	"m_srcTableName" => "payrollstatutories"
));

$proto24["m_sql"] = "SSSEC";
$proto24["m_srcTableName"] = "payrollstatutories";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "SSSTotal",
	"m_strTable" => "payrollstatutories",
	"m_srcTableName" => "payrollstatutories"
));

$proto26["m_sql"] = "SSSTotal";
$proto26["m_srcTableName"] = "payrollstatutories";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbigER",
	"m_strTable" => "payrollstatutories",
	"m_srcTableName" => "payrollstatutories"
));

$proto28["m_sql"] = "PagIbigER";
$proto28["m_srcTableName"] = "payrollstatutories";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "PagIbigTotal",
	"m_strTable" => "payrollstatutories",
	"m_srcTableName" => "payrollstatutories"
));

$proto30["m_sql"] = "PagIbigTotal";
$proto30["m_srcTableName"] = "payrollstatutories";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "PHICER",
	"m_strTable" => "payrollstatutories",
	"m_srcTableName" => "payrollstatutories"
));

$proto32["m_sql"] = "PHICER";
$proto32["m_srcTableName"] = "payrollstatutories";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "PHICTotal",
	"m_strTable" => "payrollstatutories",
	"m_srcTableName" => "payrollstatutories"
));

$proto34["m_sql"] = "PHICTotal";
$proto34["m_srcTableName"] = "payrollstatutories";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "payrollstatutories",
	"m_srcTableName" => "payrollstatutories"
));

$proto36["m_sql"] = "Employer";
$proto36["m_srcTableName"] = "payrollstatutories";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "payrollstatutories",
	"m_srcTableName" => "payrollstatutories"
));

$proto38["m_sql"] = "Division";
$proto38["m_srcTableName"] = "payrollstatutories";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "WageType",
	"m_strTable" => "payrollstatutories",
	"m_srcTableName" => "payrollstatutories"
));

$proto40["m_sql"] = "WageType";
$proto40["m_srcTableName"] = "payrollstatutories";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "payrollstatutories";
$proto43["m_srcTableName"] = "payrollstatutories";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "PstID";
$proto43["m_columns"][] = "SSS";
$proto43["m_columns"][] = "PagIbig";
$proto43["m_columns"][] = "PHIC";
$proto43["m_columns"][] = "FromDate";
$proto43["m_columns"][] = "ToDate";
$proto43["m_columns"][] = "EmployeeID";
$proto43["m_columns"][] = "PSID";
$proto43["m_columns"][] = "SSSER";
$proto43["m_columns"][] = "SSSEC";
$proto43["m_columns"][] = "SSSTotal";
$proto43["m_columns"][] = "PagIbigER";
$proto43["m_columns"][] = "PagIbigTotal";
$proto43["m_columns"][] = "PHICER";
$proto43["m_columns"][] = "PHICTotal";
$proto43["m_columns"][] = "Employer";
$proto43["m_columns"][] = "Division";
$proto43["m_columns"][] = "WageType";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "payrollstatutories";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "payrollstatutories";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="payrollstatutories";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_payrollstatutories = createSqlQuery_payrollstatutories();


	
		;

																		

$tdatapayrollstatutories[".sqlquery"] = $queryData_payrollstatutories;

include_once(getabspath("include/payrollstatutories_events.php"));
$tableEvents["payrollstatutories"] = new eventclass_payrollstatutories;
$tdatapayrollstatutories[".hasEvents"] = true;

?>