<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapayslipposted = array();
	$tdatapayslipposted[".truncateText"] = true;
	$tdatapayslipposted[".NumberOfChars"] = 80;
	$tdatapayslipposted[".ShortName"] = "payslipposted";
	$tdatapayslipposted[".OwnerID"] = "";
	$tdatapayslipposted[".OriginalTable"] = "payslipposted";

//	field labels
$fieldLabelspayslipposted = array();
$fieldToolTipspayslipposted = array();
$pageTitlespayslipposted = array();
$placeHolderspayslipposted = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspayslipposted["English"] = array();
	$fieldToolTipspayslipposted["English"] = array();
	$placeHolderspayslipposted["English"] = array();
	$pageTitlespayslipposted["English"] = array();
	$fieldLabelspayslipposted["English"]["PPID"] = "PPID";
	$fieldToolTipspayslipposted["English"]["PPID"] = "";
	$placeHolderspayslipposted["English"]["PPID"] = "";
	$fieldLabelspayslipposted["English"]["BioID"] = "Bio ID";
	$fieldToolTipspayslipposted["English"]["BioID"] = "";
	$placeHolderspayslipposted["English"]["BioID"] = "";
	$fieldLabelspayslipposted["English"]["FullName"] = "Full Name";
	$fieldToolTipspayslipposted["English"]["FullName"] = "";
	$placeHolderspayslipposted["English"]["FullName"] = "";
	$fieldLabelspayslipposted["English"]["WageType"] = "Wage Type";
	$fieldToolTipspayslipposted["English"]["WageType"] = "";
	$placeHolderspayslipposted["English"]["WageType"] = "";
	$fieldLabelspayslipposted["English"]["Status"] = "Status";
	$fieldToolTipspayslipposted["English"]["Status"] = "";
	$placeHolderspayslipposted["English"]["Status"] = "";
	$fieldLabelspayslipposted["English"]["Division"] = "Division";
	$fieldToolTipspayslipposted["English"]["Division"] = "";
	$placeHolderspayslipposted["English"]["Division"] = "";
	$fieldLabelspayslipposted["English"]["FromDate"] = "From Date";
	$fieldToolTipspayslipposted["English"]["FromDate"] = "";
	$placeHolderspayslipposted["English"]["FromDate"] = "";
	$fieldLabelspayslipposted["English"]["ToDate"] = "To Date";
	$fieldToolTipspayslipposted["English"]["ToDate"] = "";
	$placeHolderspayslipposted["English"]["ToDate"] = "";
	$fieldLabelspayslipposted["English"]["DatePrinted"] = "Date Printed";
	$fieldToolTipspayslipposted["English"]["DatePrinted"] = "";
	$placeHolderspayslipposted["English"]["DatePrinted"] = "";
	$fieldLabelspayslipposted["English"]["VL"] = "VL";
	$fieldToolTipspayslipposted["English"]["VL"] = "";
	$placeHolderspayslipposted["English"]["VL"] = "";
	$fieldLabelspayslipposted["English"]["SL"] = "SL";
	$fieldToolTipspayslipposted["English"]["SL"] = "";
	$placeHolderspayslipposted["English"]["SL"] = "";
	$fieldLabelspayslipposted["English"]["EL"] = "EL";
	$fieldToolTipspayslipposted["English"]["EL"] = "";
	$placeHolderspayslipposted["English"]["EL"] = "";
	$fieldLabelspayslipposted["English"]["PL"] = "PL";
	$fieldToolTipspayslipposted["English"]["PL"] = "";
	$placeHolderspayslipposted["English"]["PL"] = "";
	$fieldLabelspayslipposted["English"]["BasicMonthly"] = "Basic Monthly";
	$fieldToolTipspayslipposted["English"]["BasicMonthly"] = "";
	$placeHolderspayslipposted["English"]["BasicMonthly"] = "";
	$fieldLabelspayslipposted["English"]["BasicDaily"] = "Basic Daily";
	$fieldToolTipspayslipposted["English"]["BasicDaily"] = "";
	$placeHolderspayslipposted["English"]["BasicDaily"] = "";
	$fieldLabelspayslipposted["English"]["GrossPay"] = "Gross Pay";
	$fieldToolTipspayslipposted["English"]["GrossPay"] = "";
	$placeHolderspayslipposted["English"]["GrossPay"] = "";
	$fieldLabelspayslipposted["English"]["Deductions"] = "Deductions";
	$fieldToolTipspayslipposted["English"]["Deductions"] = "";
	$placeHolderspayslipposted["English"]["Deductions"] = "";
	$fieldLabelspayslipposted["English"]["NetPay"] = "Net Pay";
	$fieldToolTipspayslipposted["English"]["NetPay"] = "";
	$placeHolderspayslipposted["English"]["NetPay"] = "";
	if (count($fieldToolTipspayslipposted["English"]))
		$tdatapayslipposted[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspayslipposted[""] = array();
	$fieldToolTipspayslipposted[""] = array();
	$placeHolderspayslipposted[""] = array();
	$pageTitlespayslipposted[""] = array();
	$fieldLabelspayslipposted[""]["PPID"] = "PPID";
	$fieldToolTipspayslipposted[""]["PPID"] = "";
	$placeHolderspayslipposted[""]["PPID"] = "";
	$fieldLabelspayslipposted[""]["BioID"] = "Bio ID";
	$fieldToolTipspayslipposted[""]["BioID"] = "";
	$placeHolderspayslipposted[""]["BioID"] = "";
	$fieldLabelspayslipposted[""]["FullName"] = "Full Name";
	$fieldToolTipspayslipposted[""]["FullName"] = "";
	$placeHolderspayslipposted[""]["FullName"] = "";
	$fieldLabelspayslipposted[""]["WageType"] = "Wage Type";
	$fieldToolTipspayslipposted[""]["WageType"] = "";
	$placeHolderspayslipposted[""]["WageType"] = "";
	$fieldLabelspayslipposted[""]["Status"] = "Status";
	$fieldToolTipspayslipposted[""]["Status"] = "";
	$placeHolderspayslipposted[""]["Status"] = "";
	$fieldLabelspayslipposted[""]["Division"] = "Division";
	$fieldToolTipspayslipposted[""]["Division"] = "";
	$placeHolderspayslipposted[""]["Division"] = "";
	$fieldLabelspayslipposted[""]["FromDate"] = "From Date";
	$fieldToolTipspayslipposted[""]["FromDate"] = "";
	$placeHolderspayslipposted[""]["FromDate"] = "";
	$fieldLabelspayslipposted[""]["ToDate"] = "To Date";
	$fieldToolTipspayslipposted[""]["ToDate"] = "";
	$placeHolderspayslipposted[""]["ToDate"] = "";
	$fieldLabelspayslipposted[""]["DatePrinted"] = "Date Printed";
	$fieldToolTipspayslipposted[""]["DatePrinted"] = "";
	$placeHolderspayslipposted[""]["DatePrinted"] = "";
	$fieldLabelspayslipposted[""]["VL"] = "VL";
	$fieldToolTipspayslipposted[""]["VL"] = "";
	$placeHolderspayslipposted[""]["VL"] = "";
	$fieldLabelspayslipposted[""]["SL"] = "SL";
	$fieldToolTipspayslipposted[""]["SL"] = "";
	$placeHolderspayslipposted[""]["SL"] = "";
	$fieldLabelspayslipposted[""]["EL"] = "EL";
	$fieldToolTipspayslipposted[""]["EL"] = "";
	$placeHolderspayslipposted[""]["EL"] = "";
	$fieldLabelspayslipposted[""]["PL"] = "PL";
	$fieldToolTipspayslipposted[""]["PL"] = "";
	$placeHolderspayslipposted[""]["PL"] = "";
	$fieldLabelspayslipposted[""]["BasicMonthly"] = "Basic Monthly";
	$fieldToolTipspayslipposted[""]["BasicMonthly"] = "";
	$placeHolderspayslipposted[""]["BasicMonthly"] = "";
	$fieldLabelspayslipposted[""]["BasicDaily"] = "Basic Daily";
	$fieldToolTipspayslipposted[""]["BasicDaily"] = "";
	$placeHolderspayslipposted[""]["BasicDaily"] = "";
	$fieldLabelspayslipposted[""]["GrossPay"] = "Gross Pay";
	$fieldToolTipspayslipposted[""]["GrossPay"] = "";
	$placeHolderspayslipposted[""]["GrossPay"] = "";
	$fieldLabelspayslipposted[""]["Deductions"] = "Deductions";
	$fieldToolTipspayslipposted[""]["Deductions"] = "";
	$placeHolderspayslipposted[""]["Deductions"] = "";
	$fieldLabelspayslipposted[""]["NetPay"] = "Net Pay";
	$fieldToolTipspayslipposted[""]["NetPay"] = "";
	$placeHolderspayslipposted[""]["NetPay"] = "";
	if (count($fieldToolTipspayslipposted[""]))
		$tdatapayslipposted[".isUseToolTips"] = true;
}


	$tdatapayslipposted[".NCSearch"] = true;



$tdatapayslipposted[".shortTableName"] = "payslipposted";
$tdatapayslipposted[".nSecOptions"] = 0;
$tdatapayslipposted[".recsPerRowPrint"] = 1;
$tdatapayslipposted[".mainTableOwnerID"] = "";
$tdatapayslipposted[".moveNext"] = 1;
$tdatapayslipposted[".entityType"] = 0;

$tdatapayslipposted[".strOriginalTableName"] = "payslipposted";

	



$tdatapayslipposted[".showAddInPopup"] = false;

$tdatapayslipposted[".showEditInPopup"] = false;

$tdatapayslipposted[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapayslipposted[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapayslipposted[".fieldsForRegister"] = array();

$tdatapayslipposted[".listAjax"] = false;

	$tdatapayslipposted[".audit"] = false;

	$tdatapayslipposted[".locking"] = false;

$tdatapayslipposted[".edit"] = true;
$tdatapayslipposted[".afterEditAction"] = 1;
$tdatapayslipposted[".closePopupAfterEdit"] = 1;
$tdatapayslipposted[".afterEditActionDetTable"] = "";

$tdatapayslipposted[".add"] = true;
$tdatapayslipposted[".afterAddAction"] = 1;
$tdatapayslipposted[".closePopupAfterAdd"] = 1;
$tdatapayslipposted[".afterAddActionDetTable"] = "";

$tdatapayslipposted[".list"] = true;



$tdatapayslipposted[".reorderRecordsByHeader"] = true;


$tdatapayslipposted[".exportFormatting"] = 2;
$tdatapayslipposted[".exportDelimiter"] = ",";
		
$tdatapayslipposted[".view"] = true;

$tdatapayslipposted[".import"] = true;

$tdatapayslipposted[".exportTo"] = true;

$tdatapayslipposted[".printFriendly"] = true;

$tdatapayslipposted[".delete"] = true;

$tdatapayslipposted[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapayslipposted[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapayslipposted[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapayslipposted[".searchSaving"] = false;
//

$tdatapayslipposted[".showSearchPanel"] = true;
		$tdatapayslipposted[".flexibleSearch"] = true;

$tdatapayslipposted[".isUseAjaxSuggest"] = true;

$tdatapayslipposted[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																														

$tdatapayslipposted[".ajaxCodeSnippetAdded"] = false;

$tdatapayslipposted[".buttonsAdded"] = false;

$tdatapayslipposted[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapayslipposted[".isUseTimeForSearch"] = false;





$tdatapayslipposted[".allSearchFields"] = array();
$tdatapayslipposted[".filterFields"] = array();
$tdatapayslipposted[".requiredSearchFields"] = array();

$tdatapayslipposted[".allSearchFields"][] = "PPID";
	$tdatapayslipposted[".allSearchFields"][] = "BioID";
	$tdatapayslipposted[".allSearchFields"][] = "FullName";
	$tdatapayslipposted[".allSearchFields"][] = "WageType";
	$tdatapayslipposted[".allSearchFields"][] = "Status";
	$tdatapayslipposted[".allSearchFields"][] = "Division";
	$tdatapayslipposted[".allSearchFields"][] = "FromDate";
	$tdatapayslipposted[".allSearchFields"][] = "ToDate";
	$tdatapayslipposted[".allSearchFields"][] = "DatePrinted";
	$tdatapayslipposted[".allSearchFields"][] = "VL";
	$tdatapayslipposted[".allSearchFields"][] = "SL";
	$tdatapayslipposted[".allSearchFields"][] = "EL";
	$tdatapayslipposted[".allSearchFields"][] = "PL";
	$tdatapayslipposted[".allSearchFields"][] = "BasicMonthly";
	$tdatapayslipposted[".allSearchFields"][] = "BasicDaily";
	$tdatapayslipposted[".allSearchFields"][] = "GrossPay";
	$tdatapayslipposted[".allSearchFields"][] = "Deductions";
	$tdatapayslipposted[".allSearchFields"][] = "NetPay";
	

$tdatapayslipposted[".googleLikeFields"] = array();
$tdatapayslipposted[".googleLikeFields"][] = "PPID";
$tdatapayslipposted[".googleLikeFields"][] = "BioID";
$tdatapayslipposted[".googleLikeFields"][] = "FullName";
$tdatapayslipposted[".googleLikeFields"][] = "WageType";
$tdatapayslipposted[".googleLikeFields"][] = "Status";
$tdatapayslipposted[".googleLikeFields"][] = "Division";
$tdatapayslipposted[".googleLikeFields"][] = "FromDate";
$tdatapayslipposted[".googleLikeFields"][] = "ToDate";
$tdatapayslipposted[".googleLikeFields"][] = "DatePrinted";
$tdatapayslipposted[".googleLikeFields"][] = "VL";
$tdatapayslipposted[".googleLikeFields"][] = "SL";
$tdatapayslipposted[".googleLikeFields"][] = "EL";
$tdatapayslipposted[".googleLikeFields"][] = "PL";
$tdatapayslipposted[".googleLikeFields"][] = "BasicMonthly";
$tdatapayslipposted[".googleLikeFields"][] = "BasicDaily";
$tdatapayslipposted[".googleLikeFields"][] = "GrossPay";
$tdatapayslipposted[".googleLikeFields"][] = "Deductions";
$tdatapayslipposted[".googleLikeFields"][] = "NetPay";


$tdatapayslipposted[".advSearchFields"] = array();
$tdatapayslipposted[".advSearchFields"][] = "PPID";
$tdatapayslipposted[".advSearchFields"][] = "BioID";
$tdatapayslipposted[".advSearchFields"][] = "FullName";
$tdatapayslipposted[".advSearchFields"][] = "WageType";
$tdatapayslipposted[".advSearchFields"][] = "Status";
$tdatapayslipposted[".advSearchFields"][] = "Division";
$tdatapayslipposted[".advSearchFields"][] = "FromDate";
$tdatapayslipposted[".advSearchFields"][] = "ToDate";
$tdatapayslipposted[".advSearchFields"][] = "DatePrinted";
$tdatapayslipposted[".advSearchFields"][] = "VL";
$tdatapayslipposted[".advSearchFields"][] = "SL";
$tdatapayslipposted[".advSearchFields"][] = "EL";
$tdatapayslipposted[".advSearchFields"][] = "PL";
$tdatapayslipposted[".advSearchFields"][] = "BasicMonthly";
$tdatapayslipposted[".advSearchFields"][] = "BasicDaily";
$tdatapayslipposted[".advSearchFields"][] = "GrossPay";
$tdatapayslipposted[".advSearchFields"][] = "Deductions";
$tdatapayslipposted[".advSearchFields"][] = "NetPay";

$tdatapayslipposted[".tableType"] = "list";

$tdatapayslipposted[".printerPageOrientation"] = 0;
$tdatapayslipposted[".nPrinterPageScale"] = 100;

$tdatapayslipposted[".nPrinterSplitRecords"] = 40;

$tdatapayslipposted[".nPrinterPDFSplitRecords"] = 40;



$tdatapayslipposted[".geocodingEnabled"] = false;





$tdatapayslipposted[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatapayslipposted[".pageSize"] = 20;

$tdatapayslipposted[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapayslipposted[".strOrderBy"] = $tstrOrderBy;

$tdatapayslipposted[".orderindexes"] = array();

$tdatapayslipposted[".sqlHead"] = "SELECT PPID,  	BioID,  	FullName,  	WageType,  	Status,  	Division,  	FromDate,  	ToDate,  	DatePrinted,  	VL,  	SL,  	EL,  	PL,  	BasicMonthly,  	BasicDaily,  	GrossPay,  	Deductions,  	NetPay";
$tdatapayslipposted[".sqlFrom"] = "FROM payslipposted";
$tdatapayslipposted[".sqlWhereExpr"] = "";
$tdatapayslipposted[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapayslipposted[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapayslipposted[".arrGroupsPerPage"] = $arrGPP;

$tdatapayslipposted[".highlightSearchResults"] = true;

$tableKeyspayslipposted = array();
$tableKeyspayslipposted[] = "PPID";
$tdatapayslipposted[".Keys"] = $tableKeyspayslipposted;

$tdatapayslipposted[".listFields"] = array();
$tdatapayslipposted[".listFields"][] = "PPID";
$tdatapayslipposted[".listFields"][] = "BioID";
$tdatapayslipposted[".listFields"][] = "FullName";
$tdatapayslipposted[".listFields"][] = "WageType";
$tdatapayslipposted[".listFields"][] = "Status";
$tdatapayslipposted[".listFields"][] = "Division";
$tdatapayslipposted[".listFields"][] = "FromDate";
$tdatapayslipposted[".listFields"][] = "ToDate";
$tdatapayslipposted[".listFields"][] = "DatePrinted";
$tdatapayslipposted[".listFields"][] = "VL";
$tdatapayslipposted[".listFields"][] = "SL";
$tdatapayslipposted[".listFields"][] = "EL";
$tdatapayslipposted[".listFields"][] = "PL";
$tdatapayslipposted[".listFields"][] = "BasicMonthly";
$tdatapayslipposted[".listFields"][] = "BasicDaily";
$tdatapayslipposted[".listFields"][] = "GrossPay";
$tdatapayslipposted[".listFields"][] = "Deductions";
$tdatapayslipposted[".listFields"][] = "NetPay";

$tdatapayslipposted[".hideMobileList"] = array();


$tdatapayslipposted[".viewFields"] = array();
$tdatapayslipposted[".viewFields"][] = "PPID";
$tdatapayslipposted[".viewFields"][] = "BioID";
$tdatapayslipposted[".viewFields"][] = "FullName";
$tdatapayslipposted[".viewFields"][] = "WageType";
$tdatapayslipposted[".viewFields"][] = "Status";
$tdatapayslipposted[".viewFields"][] = "Division";
$tdatapayslipposted[".viewFields"][] = "FromDate";
$tdatapayslipposted[".viewFields"][] = "ToDate";
$tdatapayslipposted[".viewFields"][] = "DatePrinted";
$tdatapayslipposted[".viewFields"][] = "VL";
$tdatapayslipposted[".viewFields"][] = "SL";
$tdatapayslipposted[".viewFields"][] = "EL";
$tdatapayslipposted[".viewFields"][] = "PL";
$tdatapayslipposted[".viewFields"][] = "BasicMonthly";
$tdatapayslipposted[".viewFields"][] = "BasicDaily";
$tdatapayslipposted[".viewFields"][] = "GrossPay";
$tdatapayslipposted[".viewFields"][] = "Deductions";
$tdatapayslipposted[".viewFields"][] = "NetPay";

$tdatapayslipposted[".addFields"] = array();
$tdatapayslipposted[".addFields"][] = "BioID";
$tdatapayslipposted[".addFields"][] = "FullName";
$tdatapayslipposted[".addFields"][] = "WageType";
$tdatapayslipposted[".addFields"][] = "Status";
$tdatapayslipposted[".addFields"][] = "Division";
$tdatapayslipposted[".addFields"][] = "FromDate";
$tdatapayslipposted[".addFields"][] = "ToDate";
$tdatapayslipposted[".addFields"][] = "DatePrinted";
$tdatapayslipposted[".addFields"][] = "VL";
$tdatapayslipposted[".addFields"][] = "SL";
$tdatapayslipposted[".addFields"][] = "EL";
$tdatapayslipposted[".addFields"][] = "PL";
$tdatapayslipposted[".addFields"][] = "BasicMonthly";
$tdatapayslipposted[".addFields"][] = "BasicDaily";
$tdatapayslipposted[".addFields"][] = "GrossPay";
$tdatapayslipposted[".addFields"][] = "Deductions";
$tdatapayslipposted[".addFields"][] = "NetPay";

$tdatapayslipposted[".masterListFields"] = array();
$tdatapayslipposted[".masterListFields"][] = "PPID";
$tdatapayslipposted[".masterListFields"][] = "BioID";
$tdatapayslipposted[".masterListFields"][] = "FullName";
$tdatapayslipposted[".masterListFields"][] = "WageType";
$tdatapayslipposted[".masterListFields"][] = "Status";
$tdatapayslipposted[".masterListFields"][] = "Division";
$tdatapayslipposted[".masterListFields"][] = "FromDate";
$tdatapayslipposted[".masterListFields"][] = "ToDate";
$tdatapayslipposted[".masterListFields"][] = "DatePrinted";
$tdatapayslipposted[".masterListFields"][] = "VL";
$tdatapayslipposted[".masterListFields"][] = "SL";
$tdatapayslipposted[".masterListFields"][] = "EL";
$tdatapayslipposted[".masterListFields"][] = "PL";
$tdatapayslipposted[".masterListFields"][] = "BasicMonthly";
$tdatapayslipposted[".masterListFields"][] = "BasicDaily";
$tdatapayslipposted[".masterListFields"][] = "GrossPay";
$tdatapayslipposted[".masterListFields"][] = "Deductions";
$tdatapayslipposted[".masterListFields"][] = "NetPay";

$tdatapayslipposted[".inlineAddFields"] = array();
$tdatapayslipposted[".inlineAddFields"][] = "BioID";
$tdatapayslipposted[".inlineAddFields"][] = "FullName";
$tdatapayslipposted[".inlineAddFields"][] = "WageType";
$tdatapayslipposted[".inlineAddFields"][] = "Status";
$tdatapayslipposted[".inlineAddFields"][] = "Division";
$tdatapayslipposted[".inlineAddFields"][] = "FromDate";
$tdatapayslipposted[".inlineAddFields"][] = "ToDate";
$tdatapayslipposted[".inlineAddFields"][] = "DatePrinted";
$tdatapayslipposted[".inlineAddFields"][] = "VL";
$tdatapayslipposted[".inlineAddFields"][] = "SL";
$tdatapayslipposted[".inlineAddFields"][] = "EL";
$tdatapayslipposted[".inlineAddFields"][] = "PL";
$tdatapayslipposted[".inlineAddFields"][] = "BasicMonthly";
$tdatapayslipposted[".inlineAddFields"][] = "BasicDaily";
$tdatapayslipposted[".inlineAddFields"][] = "GrossPay";
$tdatapayslipposted[".inlineAddFields"][] = "Deductions";
$tdatapayslipposted[".inlineAddFields"][] = "NetPay";

$tdatapayslipposted[".editFields"] = array();
$tdatapayslipposted[".editFields"][] = "BioID";
$tdatapayslipposted[".editFields"][] = "FullName";
$tdatapayslipposted[".editFields"][] = "WageType";
$tdatapayslipposted[".editFields"][] = "Status";
$tdatapayslipposted[".editFields"][] = "Division";
$tdatapayslipposted[".editFields"][] = "FromDate";
$tdatapayslipposted[".editFields"][] = "ToDate";
$tdatapayslipposted[".editFields"][] = "DatePrinted";
$tdatapayslipposted[".editFields"][] = "VL";
$tdatapayslipposted[".editFields"][] = "SL";
$tdatapayslipposted[".editFields"][] = "EL";
$tdatapayslipposted[".editFields"][] = "PL";
$tdatapayslipposted[".editFields"][] = "BasicMonthly";
$tdatapayslipposted[".editFields"][] = "BasicDaily";
$tdatapayslipposted[".editFields"][] = "GrossPay";
$tdatapayslipposted[".editFields"][] = "Deductions";
$tdatapayslipposted[".editFields"][] = "NetPay";

$tdatapayslipposted[".inlineEditFields"] = array();
$tdatapayslipposted[".inlineEditFields"][] = "BioID";
$tdatapayslipposted[".inlineEditFields"][] = "FullName";
$tdatapayslipposted[".inlineEditFields"][] = "WageType";
$tdatapayslipposted[".inlineEditFields"][] = "Status";
$tdatapayslipposted[".inlineEditFields"][] = "Division";
$tdatapayslipposted[".inlineEditFields"][] = "FromDate";
$tdatapayslipposted[".inlineEditFields"][] = "ToDate";
$tdatapayslipposted[".inlineEditFields"][] = "DatePrinted";
$tdatapayslipposted[".inlineEditFields"][] = "VL";
$tdatapayslipposted[".inlineEditFields"][] = "SL";
$tdatapayslipposted[".inlineEditFields"][] = "EL";
$tdatapayslipposted[".inlineEditFields"][] = "PL";
$tdatapayslipposted[".inlineEditFields"][] = "BasicMonthly";
$tdatapayslipposted[".inlineEditFields"][] = "BasicDaily";
$tdatapayslipposted[".inlineEditFields"][] = "GrossPay";
$tdatapayslipposted[".inlineEditFields"][] = "Deductions";
$tdatapayslipposted[".inlineEditFields"][] = "NetPay";

$tdatapayslipposted[".updateSelectedFields"] = array();
$tdatapayslipposted[".updateSelectedFields"][] = "BioID";
$tdatapayslipposted[".updateSelectedFields"][] = "FullName";
$tdatapayslipposted[".updateSelectedFields"][] = "WageType";
$tdatapayslipposted[".updateSelectedFields"][] = "Status";
$tdatapayslipposted[".updateSelectedFields"][] = "Division";
$tdatapayslipposted[".updateSelectedFields"][] = "FromDate";
$tdatapayslipposted[".updateSelectedFields"][] = "ToDate";
$tdatapayslipposted[".updateSelectedFields"][] = "DatePrinted";
$tdatapayslipposted[".updateSelectedFields"][] = "VL";
$tdatapayslipposted[".updateSelectedFields"][] = "SL";
$tdatapayslipposted[".updateSelectedFields"][] = "EL";
$tdatapayslipposted[".updateSelectedFields"][] = "PL";
$tdatapayslipposted[".updateSelectedFields"][] = "BasicMonthly";
$tdatapayslipposted[".updateSelectedFields"][] = "BasicDaily";
$tdatapayslipposted[".updateSelectedFields"][] = "GrossPay";
$tdatapayslipposted[".updateSelectedFields"][] = "Deductions";
$tdatapayslipposted[".updateSelectedFields"][] = "NetPay";


$tdatapayslipposted[".exportFields"] = array();
$tdatapayslipposted[".exportFields"][] = "PPID";
$tdatapayslipposted[".exportFields"][] = "BioID";
$tdatapayslipposted[".exportFields"][] = "FullName";
$tdatapayslipposted[".exportFields"][] = "WageType";
$tdatapayslipposted[".exportFields"][] = "Status";
$tdatapayslipposted[".exportFields"][] = "Division";
$tdatapayslipposted[".exportFields"][] = "FromDate";
$tdatapayslipposted[".exportFields"][] = "ToDate";
$tdatapayslipposted[".exportFields"][] = "DatePrinted";
$tdatapayslipposted[".exportFields"][] = "VL";
$tdatapayslipposted[".exportFields"][] = "SL";
$tdatapayslipposted[".exportFields"][] = "EL";
$tdatapayslipposted[".exportFields"][] = "PL";
$tdatapayslipposted[".exportFields"][] = "BasicMonthly";
$tdatapayslipposted[".exportFields"][] = "BasicDaily";
$tdatapayslipposted[".exportFields"][] = "GrossPay";
$tdatapayslipposted[".exportFields"][] = "Deductions";
$tdatapayslipposted[".exportFields"][] = "NetPay";

$tdatapayslipposted[".importFields"] = array();
$tdatapayslipposted[".importFields"][] = "PPID";
$tdatapayslipposted[".importFields"][] = "BioID";
$tdatapayslipposted[".importFields"][] = "FullName";
$tdatapayslipposted[".importFields"][] = "WageType";
$tdatapayslipposted[".importFields"][] = "Status";
$tdatapayslipposted[".importFields"][] = "Division";
$tdatapayslipposted[".importFields"][] = "FromDate";
$tdatapayslipposted[".importFields"][] = "ToDate";
$tdatapayslipposted[".importFields"][] = "DatePrinted";
$tdatapayslipposted[".importFields"][] = "VL";
$tdatapayslipposted[".importFields"][] = "SL";
$tdatapayslipposted[".importFields"][] = "EL";
$tdatapayslipposted[".importFields"][] = "PL";
$tdatapayslipposted[".importFields"][] = "BasicMonthly";
$tdatapayslipposted[".importFields"][] = "BasicDaily";
$tdatapayslipposted[".importFields"][] = "GrossPay";
$tdatapayslipposted[".importFields"][] = "Deductions";
$tdatapayslipposted[".importFields"][] = "NetPay";

$tdatapayslipposted[".printFields"] = array();
$tdatapayslipposted[".printFields"][] = "PPID";
$tdatapayslipposted[".printFields"][] = "BioID";
$tdatapayslipposted[".printFields"][] = "FullName";
$tdatapayslipposted[".printFields"][] = "WageType";
$tdatapayslipposted[".printFields"][] = "Status";
$tdatapayslipposted[".printFields"][] = "Division";
$tdatapayslipposted[".printFields"][] = "FromDate";
$tdatapayslipposted[".printFields"][] = "ToDate";
$tdatapayslipposted[".printFields"][] = "DatePrinted";
$tdatapayslipposted[".printFields"][] = "VL";
$tdatapayslipposted[".printFields"][] = "SL";
$tdatapayslipposted[".printFields"][] = "EL";
$tdatapayslipposted[".printFields"][] = "PL";
$tdatapayslipposted[".printFields"][] = "BasicMonthly";
$tdatapayslipposted[".printFields"][] = "BasicDaily";
$tdatapayslipposted[".printFields"][] = "GrossPay";
$tdatapayslipposted[".printFields"][] = "Deductions";
$tdatapayslipposted[".printFields"][] = "NetPay";


//	PPID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PPID";
	$fdata["GoodName"] = "PPID";
	$fdata["ownerTable"] = "payslipposted";
	$fdata["Label"] = GetFieldLabel("payslipposted","PPID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PPID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PPID";

	
	
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




	$tdatapayslipposted["PPID"] = $fdata;
//	BioID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "BioID";
	$fdata["GoodName"] = "BioID";
	$fdata["ownerTable"] = "payslipposted";
	$fdata["Label"] = GetFieldLabel("payslipposted","BioID");
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

		$fdata["strField"] = "BioID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BioID";

	
	
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




	$tdatapayslipposted["BioID"] = $fdata;
//	FullName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FullName";
	$fdata["GoodName"] = "FullName";
	$fdata["ownerTable"] = "payslipposted";
	$fdata["Label"] = GetFieldLabel("payslipposted","FullName");
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




	$tdatapayslipposted["FullName"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "payslipposted";
	$fdata["Label"] = GetFieldLabel("payslipposted","WageType");
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




	$tdatapayslipposted["WageType"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "payslipposted";
	$fdata["Label"] = GetFieldLabel("payslipposted","Status");
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

		$fdata["strField"] = "Status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Status";

	
	
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




	$tdatapayslipposted["Status"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "payslipposted";
	$fdata["Label"] = GetFieldLabel("payslipposted","Division");
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




	$tdatapayslipposted["Division"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "payslipposted";
	$fdata["Label"] = GetFieldLabel("payslipposted","FromDate");
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




	$tdatapayslipposted["FromDate"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "payslipposted";
	$fdata["Label"] = GetFieldLabel("payslipposted","ToDate");
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




	$tdatapayslipposted["ToDate"] = $fdata;
//	DatePrinted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DatePrinted";
	$fdata["GoodName"] = "DatePrinted";
	$fdata["ownerTable"] = "payslipposted";
	$fdata["Label"] = GetFieldLabel("payslipposted","DatePrinted");
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

		$fdata["strField"] = "DatePrinted";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DatePrinted";

	
	
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




	$tdatapayslipposted["DatePrinted"] = $fdata;
//	VL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "VL";
	$fdata["GoodName"] = "VL";
	$fdata["ownerTable"] = "payslipposted";
	$fdata["Label"] = GetFieldLabel("payslipposted","VL");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "VL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VL";

	
	
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




	$tdatapayslipposted["VL"] = $fdata;
//	SL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "SL";
	$fdata["GoodName"] = "SL";
	$fdata["ownerTable"] = "payslipposted";
	$fdata["Label"] = GetFieldLabel("payslipposted","SL");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "SL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SL";

	
	
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




	$tdatapayslipposted["SL"] = $fdata;
//	EL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "EL";
	$fdata["GoodName"] = "EL";
	$fdata["ownerTable"] = "payslipposted";
	$fdata["Label"] = GetFieldLabel("payslipposted","EL");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "EL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EL";

	
	
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




	$tdatapayslipposted["EL"] = $fdata;
//	PL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "PL";
	$fdata["GoodName"] = "PL";
	$fdata["ownerTable"] = "payslipposted";
	$fdata["Label"] = GetFieldLabel("payslipposted","PL");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "PL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PL";

	
	
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




	$tdatapayslipposted["PL"] = $fdata;
//	BasicMonthly
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "BasicMonthly";
	$fdata["GoodName"] = "BasicMonthly";
	$fdata["ownerTable"] = "payslipposted";
	$fdata["Label"] = GetFieldLabel("payslipposted","BasicMonthly");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "BasicMonthly";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BasicMonthly";

	
	
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




	$tdatapayslipposted["BasicMonthly"] = $fdata;
//	BasicDaily
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "BasicDaily";
	$fdata["GoodName"] = "BasicDaily";
	$fdata["ownerTable"] = "payslipposted";
	$fdata["Label"] = GetFieldLabel("payslipposted","BasicDaily");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "BasicDaily";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BasicDaily";

	
	
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




	$tdatapayslipposted["BasicDaily"] = $fdata;
//	GrossPay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "GrossPay";
	$fdata["GoodName"] = "GrossPay";
	$fdata["ownerTable"] = "payslipposted";
	$fdata["Label"] = GetFieldLabel("payslipposted","GrossPay");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "GrossPay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GrossPay";

	
	
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




	$tdatapayslipposted["GrossPay"] = $fdata;
//	Deductions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Deductions";
	$fdata["GoodName"] = "Deductions";
	$fdata["ownerTable"] = "payslipposted";
	$fdata["Label"] = GetFieldLabel("payslipposted","Deductions");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "Deductions";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Deductions";

	
	
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




	$tdatapayslipposted["Deductions"] = $fdata;
//	NetPay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "NetPay";
	$fdata["GoodName"] = "NetPay";
	$fdata["ownerTable"] = "payslipposted";
	$fdata["Label"] = GetFieldLabel("payslipposted","NetPay");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "NetPay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NetPay";

	
	
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




	$tdatapayslipposted["NetPay"] = $fdata;


$tables_data["payslipposted"]=&$tdatapayslipposted;
$field_labels["payslipposted"] = &$fieldLabelspayslipposted;
$fieldToolTips["payslipposted"] = &$fieldToolTipspayslipposted;
$placeHolders["payslipposted"] = &$placeHolderspayslipposted;
$page_titles["payslipposted"] = &$pageTitlespayslipposted;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["payslipposted"] = array();
//	earningsposted
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="earningsposted";
		$detailsParam["dOriginalTable"] = "earningsposted";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "earningsposted";
	$detailsParam["dCaptionTable"] = GetTableCaption("earningsposted");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["payslipposted"][$dIndex] = $detailsParam;

	
		$detailsTablesData["payslipposted"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["payslipposted"][$dIndex]["masterKeys"][]="PPID";

				$detailsTablesData["payslipposted"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["payslipposted"][$dIndex]["detailKeys"][]="PPID";

// tables which are master tables for current table (detail)
$masterTablesData["payslipposted"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_payslipposted()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PPID,  	BioID,  	FullName,  	WageType,  	Status,  	Division,  	FromDate,  	ToDate,  	DatePrinted,  	VL,  	SL,  	EL,  	PL,  	BasicMonthly,  	BasicDaily,  	GrossPay,  	Deductions,  	NetPay";
$proto0["m_strFrom"] = "FROM payslipposted";
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
	"m_strName" => "PPID",
	"m_strTable" => "payslipposted",
	"m_srcTableName" => "payslipposted"
));

$proto6["m_sql"] = "PPID";
$proto6["m_srcTableName"] = "payslipposted";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "BioID",
	"m_strTable" => "payslipposted",
	"m_srcTableName" => "payslipposted"
));

$proto8["m_sql"] = "BioID";
$proto8["m_srcTableName"] = "payslipposted";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FullName",
	"m_strTable" => "payslipposted",
	"m_srcTableName" => "payslipposted"
));

$proto10["m_sql"] = "FullName";
$proto10["m_srcTableName"] = "payslipposted";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "WageType",
	"m_strTable" => "payslipposted",
	"m_srcTableName" => "payslipposted"
));

$proto12["m_sql"] = "WageType";
$proto12["m_srcTableName"] = "payslipposted";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "payslipposted",
	"m_srcTableName" => "payslipposted"
));

$proto14["m_sql"] = "Status";
$proto14["m_srcTableName"] = "payslipposted";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "payslipposted",
	"m_srcTableName" => "payslipposted"
));

$proto16["m_sql"] = "Division";
$proto16["m_srcTableName"] = "payslipposted";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "payslipposted",
	"m_srcTableName" => "payslipposted"
));

$proto18["m_sql"] = "FromDate";
$proto18["m_srcTableName"] = "payslipposted";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "payslipposted",
	"m_srcTableName" => "payslipposted"
));

$proto20["m_sql"] = "ToDate";
$proto20["m_srcTableName"] = "payslipposted";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DatePrinted",
	"m_strTable" => "payslipposted",
	"m_srcTableName" => "payslipposted"
));

$proto22["m_sql"] = "DatePrinted";
$proto22["m_srcTableName"] = "payslipposted";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "VL",
	"m_strTable" => "payslipposted",
	"m_srcTableName" => "payslipposted"
));

$proto24["m_sql"] = "VL";
$proto24["m_srcTableName"] = "payslipposted";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "SL",
	"m_strTable" => "payslipposted",
	"m_srcTableName" => "payslipposted"
));

$proto26["m_sql"] = "SL";
$proto26["m_srcTableName"] = "payslipposted";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "EL",
	"m_strTable" => "payslipposted",
	"m_srcTableName" => "payslipposted"
));

$proto28["m_sql"] = "EL";
$proto28["m_srcTableName"] = "payslipposted";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "PL",
	"m_strTable" => "payslipposted",
	"m_srcTableName" => "payslipposted"
));

$proto30["m_sql"] = "PL";
$proto30["m_srcTableName"] = "payslipposted";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "BasicMonthly",
	"m_strTable" => "payslipposted",
	"m_srcTableName" => "payslipposted"
));

$proto32["m_sql"] = "BasicMonthly";
$proto32["m_srcTableName"] = "payslipposted";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "BasicDaily",
	"m_strTable" => "payslipposted",
	"m_srcTableName" => "payslipposted"
));

$proto34["m_sql"] = "BasicDaily";
$proto34["m_srcTableName"] = "payslipposted";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "GrossPay",
	"m_strTable" => "payslipposted",
	"m_srcTableName" => "payslipposted"
));

$proto36["m_sql"] = "GrossPay";
$proto36["m_srcTableName"] = "payslipposted";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Deductions",
	"m_strTable" => "payslipposted",
	"m_srcTableName" => "payslipposted"
));

$proto38["m_sql"] = "Deductions";
$proto38["m_srcTableName"] = "payslipposted";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "NetPay",
	"m_strTable" => "payslipposted",
	"m_srcTableName" => "payslipposted"
));

$proto40["m_sql"] = "NetPay";
$proto40["m_srcTableName"] = "payslipposted";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "payslipposted";
$proto43["m_srcTableName"] = "payslipposted";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "PPID";
$proto43["m_columns"][] = "BioID";
$proto43["m_columns"][] = "FullName";
$proto43["m_columns"][] = "WageType";
$proto43["m_columns"][] = "Status";
$proto43["m_columns"][] = "Division";
$proto43["m_columns"][] = "FromDate";
$proto43["m_columns"][] = "ToDate";
$proto43["m_columns"][] = "DatePrinted";
$proto43["m_columns"][] = "VL";
$proto43["m_columns"][] = "SL";
$proto43["m_columns"][] = "EL";
$proto43["m_columns"][] = "PL";
$proto43["m_columns"][] = "BasicMonthly";
$proto43["m_columns"][] = "BasicDaily";
$proto43["m_columns"][] = "GrossPay";
$proto43["m_columns"][] = "Deductions";
$proto43["m_columns"][] = "NetPay";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "payslipposted";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "payslipposted";
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
$proto0["m_srcTableName"]="payslipposted";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_payslipposted = createSqlQuery_payslipposted();


	
		;

																		

$tdatapayslipposted[".sqlquery"] = $queryData_payslipposted;

$tableEvents["payslipposted"] = new eventsBase;
$tdatapayslipposted[".hasEvents"] = false;

?>