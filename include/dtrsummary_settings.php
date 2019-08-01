<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadtrsummary = array();
	$tdatadtrsummary[".truncateText"] = true;
	$tdatadtrsummary[".NumberOfChars"] = 80;
	$tdatadtrsummary[".ShortName"] = "dtrsummary";
	$tdatadtrsummary[".OwnerID"] = "";
	$tdatadtrsummary[".OriginalTable"] = "dtrsummary";

//	field labels
$fieldLabelsdtrsummary = array();
$fieldToolTipsdtrsummary = array();
$pageTitlesdtrsummary = array();
$placeHoldersdtrsummary = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdtrsummary["English"] = array();
	$fieldToolTipsdtrsummary["English"] = array();
	$placeHoldersdtrsummary["English"] = array();
	$pageTitlesdtrsummary["English"] = array();
	$fieldLabelsdtrsummary["English"]["EmployeeID"] = "Biometric ID";
	$fieldToolTipsdtrsummary["English"]["EmployeeID"] = "";
	$placeHoldersdtrsummary["English"]["EmployeeID"] = "";
	$fieldLabelsdtrsummary["English"]["UserName"] = "Employee";
	$fieldToolTipsdtrsummary["English"]["UserName"] = "";
	$placeHoldersdtrsummary["English"]["UserName"] = "";
	$fieldLabelsdtrsummary["English"]["Division"] = "Division";
	$fieldToolTipsdtrsummary["English"]["Division"] = "";
	$placeHoldersdtrsummary["English"]["Division"] = "";
	$fieldLabelsdtrsummary["English"]["WageType"] = "Wage Type";
	$fieldToolTipsdtrsummary["English"]["WageType"] = "";
	$placeHoldersdtrsummary["English"]["WageType"] = "";
	$fieldLabelsdtrsummary["English"]["RegWD"] = "Reg WD";
	$fieldToolTipsdtrsummary["English"]["RegWD"] = "";
	$placeHoldersdtrsummary["English"]["RegWD"] = "";
	$fieldLabelsdtrsummary["English"]["DWork"] = "DWork";
	$fieldToolTipsdtrsummary["English"]["DWork"] = "";
	$placeHoldersdtrsummary["English"]["DWork"] = "";
	$fieldLabelsdtrsummary["English"]["Absent"] = "Absent";
	$fieldToolTipsdtrsummary["English"]["Absent"] = "";
	$placeHoldersdtrsummary["English"]["Absent"] = "";
	$fieldLabelsdtrsummary["English"]["LateMins"] = "Late Mins";
	$fieldToolTipsdtrsummary["English"]["LateMins"] = "";
	$placeHoldersdtrsummary["English"]["LateMins"] = "";
	$fieldLabelsdtrsummary["English"]["UndertimeMins"] = "Undertime Mins";
	$fieldToolTipsdtrsummary["English"]["UndertimeMins"] = "";
	$placeHoldersdtrsummary["English"]["UndertimeMins"] = "";
	$fieldLabelsdtrsummary["English"]["RHolidayHrs"] = "RHoliday Hrs";
	$fieldToolTipsdtrsummary["English"]["RHolidayHrs"] = "";
	$placeHoldersdtrsummary["English"]["RHolidayHrs"] = "";
	$fieldLabelsdtrsummary["English"]["SHolidayHrs"] = "SHoliday Hrs";
	$fieldToolTipsdtrsummary["English"]["SHolidayHrs"] = "";
	$placeHoldersdtrsummary["English"]["SHolidayHrs"] = "";
	$fieldLabelsdtrsummary["English"]["CHolidayHrs"] = "CHoliday Hrs";
	$fieldToolTipsdtrsummary["English"]["CHolidayHrs"] = "";
	$placeHoldersdtrsummary["English"]["CHolidayHrs"] = "";
	$fieldLabelsdtrsummary["English"]["ExcessHrs"] = "Excess Hrs";
	$fieldToolTipsdtrsummary["English"]["ExcessHrs"] = "";
	$placeHoldersdtrsummary["English"]["ExcessHrs"] = "";
	$fieldLabelsdtrsummary["English"]["RegOTHrs"] = "Reg OTHrs";
	$fieldToolTipsdtrsummary["English"]["RegOTHrs"] = "";
	$placeHoldersdtrsummary["English"]["RegOTHrs"] = "";
	$fieldLabelsdtrsummary["English"]["RHOTHrs"] = "RHOTHrs";
	$fieldToolTipsdtrsummary["English"]["RHOTHrs"] = "";
	$placeHoldersdtrsummary["English"]["RHOTHrs"] = "";
	$fieldLabelsdtrsummary["English"]["SHOTHRs"] = "SHOTHRs";
	$fieldToolTipsdtrsummary["English"]["SHOTHRs"] = "";
	$placeHoldersdtrsummary["English"]["SHOTHRs"] = "";
	$fieldLabelsdtrsummary["English"]["CHOTHrs"] = "CHOTHrs";
	$fieldToolTipsdtrsummary["English"]["CHOTHrs"] = "";
	$placeHoldersdtrsummary["English"]["CHOTHrs"] = "";
	$fieldLabelsdtrsummary["English"]["RDOTHrs"] = "RDOTHrs";
	$fieldToolTipsdtrsummary["English"]["RDOTHrs"] = "";
	$placeHoldersdtrsummary["English"]["RDOTHrs"] = "";
	$fieldLabelsdtrsummary["English"]["NDHrs"] = "NDHrs";
	$fieldToolTipsdtrsummary["English"]["NDHrs"] = "";
	$placeHoldersdtrsummary["English"]["NDHrs"] = "";
	$fieldLabelsdtrsummary["English"]["RDHrs"] = "RDHrs";
	$fieldToolTipsdtrsummary["English"]["RDHrs"] = "";
	$placeHoldersdtrsummary["English"]["RDHrs"] = "";
	$fieldLabelsdtrsummary["English"]["RegNDHrs"] = "Reg NDHrs";
	$fieldToolTipsdtrsummary["English"]["RegNDHrs"] = "";
	$placeHoldersdtrsummary["English"]["RegNDHrs"] = "";
	$fieldLabelsdtrsummary["English"]["RHNDHrs"] = "RHNDHrs";
	$fieldToolTipsdtrsummary["English"]["RHNDHrs"] = "";
	$placeHoldersdtrsummary["English"]["RHNDHrs"] = "";
	$fieldLabelsdtrsummary["English"]["SHNDHrs"] = "SHNDHrs";
	$fieldToolTipsdtrsummary["English"]["SHNDHrs"] = "";
	$placeHoldersdtrsummary["English"]["SHNDHrs"] = "";
	$fieldLabelsdtrsummary["English"]["CHNDHrs"] = "CHNDHrs";
	$fieldToolTipsdtrsummary["English"]["CHNDHrs"] = "";
	$placeHoldersdtrsummary["English"]["CHNDHrs"] = "";
	$fieldLabelsdtrsummary["English"]["RDNDHrs"] = "RDNDHrs";
	$fieldToolTipsdtrsummary["English"]["RDNDHrs"] = "";
	$placeHoldersdtrsummary["English"]["RDNDHrs"] = "";
	$fieldLabelsdtrsummary["English"]["VLDays"] = "VLDays";
	$fieldToolTipsdtrsummary["English"]["VLDays"] = "";
	$placeHoldersdtrsummary["English"]["VLDays"] = "";
	$fieldLabelsdtrsummary["English"]["SLDays"] = "SLDays";
	$fieldToolTipsdtrsummary["English"]["SLDays"] = "";
	$placeHoldersdtrsummary["English"]["SLDays"] = "";
	$fieldLabelsdtrsummary["English"]["ELDays"] = "ELDays";
	$fieldToolTipsdtrsummary["English"]["ELDays"] = "";
	$placeHoldersdtrsummary["English"]["ELDays"] = "";
	$fieldLabelsdtrsummary["English"]["PLDays"] = "PLDays";
	$fieldToolTipsdtrsummary["English"]["PLDays"] = "";
	$placeHoldersdtrsummary["English"]["PLDays"] = "";
	$fieldLabelsdtrsummary["English"]["TrODays"] = "Tr ODays";
	$fieldToolTipsdtrsummary["English"]["TrODays"] = "";
	$placeHoldersdtrsummary["English"]["TrODays"] = "";
	$fieldLabelsdtrsummary["English"]["RLink"] = "RLink";
	$fieldToolTipsdtrsummary["English"]["RLink"] = "";
	$placeHoldersdtrsummary["English"]["RLink"] = "";
	$fieldLabelsdtrsummary["English"]["NDMealAllowance"] = "NDMeal Allowance";
	$fieldToolTipsdtrsummary["English"]["NDMealAllowance"] = "";
	$placeHoldersdtrsummary["English"]["NDMealAllowance"] = "";
	$fieldLabelsdtrsummary["English"]["Employer"] = "Employer";
	$fieldToolTipsdtrsummary["English"]["Employer"] = "";
	$placeHoldersdtrsummary["English"]["Employer"] = "";
	if (count($fieldToolTipsdtrsummary["English"]))
		$tdatadtrsummary[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdtrsummary[""] = array();
	$fieldToolTipsdtrsummary[""] = array();
	$placeHoldersdtrsummary[""] = array();
	$pageTitlesdtrsummary[""] = array();
	if (count($fieldToolTipsdtrsummary[""]))
		$tdatadtrsummary[".isUseToolTips"] = true;
}


	$tdatadtrsummary[".NCSearch"] = true;



$tdatadtrsummary[".shortTableName"] = "dtrsummary";
$tdatadtrsummary[".nSecOptions"] = 0;
$tdatadtrsummary[".recsPerRowPrint"] = 1;
$tdatadtrsummary[".mainTableOwnerID"] = "";
$tdatadtrsummary[".moveNext"] = 1;
$tdatadtrsummary[".entityType"] = 0;

$tdatadtrsummary[".strOriginalTableName"] = "dtrsummary";

	



$tdatadtrsummary[".showAddInPopup"] = false;

$tdatadtrsummary[".showEditInPopup"] = false;

$tdatadtrsummary[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadtrsummary[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadtrsummary[".fieldsForRegister"] = array();

$tdatadtrsummary[".listAjax"] = false;

	$tdatadtrsummary[".audit"] = false;

	$tdatadtrsummary[".locking"] = false;



$tdatadtrsummary[".list"] = true;



$tdatadtrsummary[".reorderRecordsByHeader"] = true;


$tdatadtrsummary[".exportFormatting"] = 2;
$tdatadtrsummary[".exportDelimiter"] = ",";
		


$tdatadtrsummary[".exportTo"] = true;

$tdatadtrsummary[".printFriendly"] = true;


$tdatadtrsummary[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadtrsummary[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatadtrsummary[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatadtrsummary[".searchSaving"] = false;
//

$tdatadtrsummary[".showSearchPanel"] = true;
		$tdatadtrsummary[".flexibleSearch"] = true;

$tdatadtrsummary[".isUseAjaxSuggest"] = true;

$tdatadtrsummary[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																				

$tdatadtrsummary[".ajaxCodeSnippetAdded"] = false;

$tdatadtrsummary[".buttonsAdded"] = false;

$tdatadtrsummary[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadtrsummary[".isUseTimeForSearch"] = false;





$tdatadtrsummary[".allSearchFields"] = array();
$tdatadtrsummary[".filterFields"] = array();
$tdatadtrsummary[".requiredSearchFields"] = array();

$tdatadtrsummary[".allSearchFields"][] = "EmployeeID";
	$tdatadtrsummary[".allSearchFields"][] = "UserName";
	$tdatadtrsummary[".allSearchFields"][] = "Employer";
	$tdatadtrsummary[".allSearchFields"][] = "Division";
	$tdatadtrsummary[".allSearchFields"][] = "WageType";
	$tdatadtrsummary[".allSearchFields"][] = "RegWD";
	$tdatadtrsummary[".allSearchFields"][] = "DWork";
	$tdatadtrsummary[".allSearchFields"][] = "Absent";
	$tdatadtrsummary[".allSearchFields"][] = "LateMins";
	$tdatadtrsummary[".allSearchFields"][] = "UndertimeMins";
	$tdatadtrsummary[".allSearchFields"][] = "RHolidayHrs";
	$tdatadtrsummary[".allSearchFields"][] = "SHolidayHrs";
	$tdatadtrsummary[".allSearchFields"][] = "CHolidayHrs";
	$tdatadtrsummary[".allSearchFields"][] = "ExcessHrs";
	$tdatadtrsummary[".allSearchFields"][] = "RegOTHrs";
	$tdatadtrsummary[".allSearchFields"][] = "RHOTHrs";
	$tdatadtrsummary[".allSearchFields"][] = "SHOTHRs";
	$tdatadtrsummary[".allSearchFields"][] = "CHOTHrs";
	$tdatadtrsummary[".allSearchFields"][] = "RDOTHrs";
	$tdatadtrsummary[".allSearchFields"][] = "NDHrs";
	$tdatadtrsummary[".allSearchFields"][] = "RDHrs";
	$tdatadtrsummary[".allSearchFields"][] = "RegNDHrs";
	$tdatadtrsummary[".allSearchFields"][] = "RHNDHrs";
	$tdatadtrsummary[".allSearchFields"][] = "SHNDHrs";
	$tdatadtrsummary[".allSearchFields"][] = "CHNDHrs";
	$tdatadtrsummary[".allSearchFields"][] = "RDNDHrs";
	$tdatadtrsummary[".allSearchFields"][] = "VLDays";
	$tdatadtrsummary[".allSearchFields"][] = "SLDays";
	$tdatadtrsummary[".allSearchFields"][] = "ELDays";
	$tdatadtrsummary[".allSearchFields"][] = "PLDays";
	$tdatadtrsummary[".allSearchFields"][] = "TrODays";
	$tdatadtrsummary[".allSearchFields"][] = "NDMealAllowance";
	$tdatadtrsummary[".allSearchFields"][] = "RLink";
	

$tdatadtrsummary[".googleLikeFields"] = array();
$tdatadtrsummary[".googleLikeFields"][] = "EmployeeID";
$tdatadtrsummary[".googleLikeFields"][] = "UserName";
$tdatadtrsummary[".googleLikeFields"][] = "Division";
$tdatadtrsummary[".googleLikeFields"][] = "WageType";
$tdatadtrsummary[".googleLikeFields"][] = "RegWD";
$tdatadtrsummary[".googleLikeFields"][] = "DWork";
$tdatadtrsummary[".googleLikeFields"][] = "Absent";
$tdatadtrsummary[".googleLikeFields"][] = "LateMins";
$tdatadtrsummary[".googleLikeFields"][] = "UndertimeMins";
$tdatadtrsummary[".googleLikeFields"][] = "ExcessHrs";
$tdatadtrsummary[".googleLikeFields"][] = "RegOTHrs";
$tdatadtrsummary[".googleLikeFields"][] = "RHOTHrs";
$tdatadtrsummary[".googleLikeFields"][] = "SHOTHRs";
$tdatadtrsummary[".googleLikeFields"][] = "CHOTHrs";
$tdatadtrsummary[".googleLikeFields"][] = "RDOTHrs";
$tdatadtrsummary[".googleLikeFields"][] = "NDHrs";
$tdatadtrsummary[".googleLikeFields"][] = "RDHrs";
$tdatadtrsummary[".googleLikeFields"][] = "RegNDHrs";
$tdatadtrsummary[".googleLikeFields"][] = "RHNDHrs";
$tdatadtrsummary[".googleLikeFields"][] = "SHNDHrs";
$tdatadtrsummary[".googleLikeFields"][] = "CHNDHrs";
$tdatadtrsummary[".googleLikeFields"][] = "RDNDHrs";
$tdatadtrsummary[".googleLikeFields"][] = "VLDays";
$tdatadtrsummary[".googleLikeFields"][] = "SLDays";
$tdatadtrsummary[".googleLikeFields"][] = "ELDays";
$tdatadtrsummary[".googleLikeFields"][] = "PLDays";
$tdatadtrsummary[".googleLikeFields"][] = "TrODays";
$tdatadtrsummary[".googleLikeFields"][] = "RLink";
$tdatadtrsummary[".googleLikeFields"][] = "NDMealAllowance";
$tdatadtrsummary[".googleLikeFields"][] = "Employer";
$tdatadtrsummary[".googleLikeFields"][] = "RHolidayHrs";
$tdatadtrsummary[".googleLikeFields"][] = "SHolidayHrs";
$tdatadtrsummary[".googleLikeFields"][] = "CHolidayHrs";


$tdatadtrsummary[".advSearchFields"] = array();
$tdatadtrsummary[".advSearchFields"][] = "EmployeeID";
$tdatadtrsummary[".advSearchFields"][] = "UserName";
$tdatadtrsummary[".advSearchFields"][] = "Employer";
$tdatadtrsummary[".advSearchFields"][] = "Division";
$tdatadtrsummary[".advSearchFields"][] = "WageType";
$tdatadtrsummary[".advSearchFields"][] = "RegWD";
$tdatadtrsummary[".advSearchFields"][] = "DWork";
$tdatadtrsummary[".advSearchFields"][] = "Absent";
$tdatadtrsummary[".advSearchFields"][] = "LateMins";
$tdatadtrsummary[".advSearchFields"][] = "UndertimeMins";
$tdatadtrsummary[".advSearchFields"][] = "RHolidayHrs";
$tdatadtrsummary[".advSearchFields"][] = "SHolidayHrs";
$tdatadtrsummary[".advSearchFields"][] = "CHolidayHrs";
$tdatadtrsummary[".advSearchFields"][] = "ExcessHrs";
$tdatadtrsummary[".advSearchFields"][] = "RegOTHrs";
$tdatadtrsummary[".advSearchFields"][] = "RHOTHrs";
$tdatadtrsummary[".advSearchFields"][] = "SHOTHRs";
$tdatadtrsummary[".advSearchFields"][] = "CHOTHrs";
$tdatadtrsummary[".advSearchFields"][] = "RDOTHrs";
$tdatadtrsummary[".advSearchFields"][] = "NDHrs";
$tdatadtrsummary[".advSearchFields"][] = "RDHrs";
$tdatadtrsummary[".advSearchFields"][] = "RegNDHrs";
$tdatadtrsummary[".advSearchFields"][] = "RHNDHrs";
$tdatadtrsummary[".advSearchFields"][] = "SHNDHrs";
$tdatadtrsummary[".advSearchFields"][] = "CHNDHrs";
$tdatadtrsummary[".advSearchFields"][] = "RDNDHrs";
$tdatadtrsummary[".advSearchFields"][] = "VLDays";
$tdatadtrsummary[".advSearchFields"][] = "SLDays";
$tdatadtrsummary[".advSearchFields"][] = "ELDays";
$tdatadtrsummary[".advSearchFields"][] = "PLDays";
$tdatadtrsummary[".advSearchFields"][] = "TrODays";
$tdatadtrsummary[".advSearchFields"][] = "NDMealAllowance";
$tdatadtrsummary[".advSearchFields"][] = "RLink";

$tdatadtrsummary[".tableType"] = "list";

$tdatadtrsummary[".printerPageOrientation"] = 0;
$tdatadtrsummary[".nPrinterPageScale"] = 100;

$tdatadtrsummary[".nPrinterSplitRecords"] = 40;

$tdatadtrsummary[".nPrinterPDFSplitRecords"] = 40;



$tdatadtrsummary[".geocodingEnabled"] = false;





$tdatadtrsummary[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatadtrsummary[".pageSize"] = 20;

$tdatadtrsummary[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadtrsummary[".strOrderBy"] = $tstrOrderBy;

$tdatadtrsummary[".orderindexes"] = array();

$tdatadtrsummary[".sqlHead"] = "SELECT EmployeeID,  	UserName,  	Division,  	WageType,  	RegWD,  	DWork,  	Absent,  	LateMins,  	UndertimeMins,  	ExcessHrs,  	RegOTHrs,  	RHOTHrs,  	SHOTHRs,  	CHOTHrs,  	RDOTHrs,  	NDHrs,  	RDHrs,  	RegNDHrs,  	RHNDHrs,  	SHNDHrs,  	CHNDHrs,  	RDNDHrs,  	VLDays,  	SLDays,  	ELDays,  	PLDays,  	TrODays,  	RLink,  	NDMealAllowance,  	Employer,  	RHolidayHrs,  	SHolidayHrs,  	CHolidayHrs";
$tdatadtrsummary[".sqlFrom"] = "FROM dtrsummary";
$tdatadtrsummary[".sqlWhereExpr"] = "";
$tdatadtrsummary[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadtrsummary[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadtrsummary[".arrGroupsPerPage"] = $arrGPP;

$tdatadtrsummary[".highlightSearchResults"] = true;

$tableKeysdtrsummary = array();
$tableKeysdtrsummary[] = "EmployeeID";
$tdatadtrsummary[".Keys"] = $tableKeysdtrsummary;

$tdatadtrsummary[".listFields"] = array();
$tdatadtrsummary[".listFields"][] = "EmployeeID";
$tdatadtrsummary[".listFields"][] = "UserName";
$tdatadtrsummary[".listFields"][] = "Employer";
$tdatadtrsummary[".listFields"][] = "Division";
$tdatadtrsummary[".listFields"][] = "WageType";
$tdatadtrsummary[".listFields"][] = "RegWD";
$tdatadtrsummary[".listFields"][] = "DWork";
$tdatadtrsummary[".listFields"][] = "Absent";
$tdatadtrsummary[".listFields"][] = "LateMins";
$tdatadtrsummary[".listFields"][] = "UndertimeMins";
$tdatadtrsummary[".listFields"][] = "RHolidayHrs";
$tdatadtrsummary[".listFields"][] = "SHolidayHrs";
$tdatadtrsummary[".listFields"][] = "CHolidayHrs";
$tdatadtrsummary[".listFields"][] = "ExcessHrs";
$tdatadtrsummary[".listFields"][] = "RegOTHrs";
$tdatadtrsummary[".listFields"][] = "RHOTHrs";
$tdatadtrsummary[".listFields"][] = "SHOTHRs";
$tdatadtrsummary[".listFields"][] = "CHOTHrs";
$tdatadtrsummary[".listFields"][] = "RDOTHrs";
$tdatadtrsummary[".listFields"][] = "NDHrs";
$tdatadtrsummary[".listFields"][] = "RDHrs";
$tdatadtrsummary[".listFields"][] = "RegNDHrs";
$tdatadtrsummary[".listFields"][] = "RHNDHrs";
$tdatadtrsummary[".listFields"][] = "SHNDHrs";
$tdatadtrsummary[".listFields"][] = "CHNDHrs";
$tdatadtrsummary[".listFields"][] = "RDNDHrs";
$tdatadtrsummary[".listFields"][] = "VLDays";
$tdatadtrsummary[".listFields"][] = "SLDays";
$tdatadtrsummary[".listFields"][] = "ELDays";
$tdatadtrsummary[".listFields"][] = "PLDays";
$tdatadtrsummary[".listFields"][] = "TrODays";
$tdatadtrsummary[".listFields"][] = "NDMealAllowance";
$tdatadtrsummary[".listFields"][] = "RLink";

$tdatadtrsummary[".hideMobileList"] = array();


$tdatadtrsummary[".viewFields"] = array();

$tdatadtrsummary[".addFields"] = array();

$tdatadtrsummary[".masterListFields"] = array();
$tdatadtrsummary[".masterListFields"][] = "EmployeeID";
$tdatadtrsummary[".masterListFields"][] = "UserName";
$tdatadtrsummary[".masterListFields"][] = "Employer";
$tdatadtrsummary[".masterListFields"][] = "Division";
$tdatadtrsummary[".masterListFields"][] = "WageType";
$tdatadtrsummary[".masterListFields"][] = "RegWD";
$tdatadtrsummary[".masterListFields"][] = "DWork";
$tdatadtrsummary[".masterListFields"][] = "Absent";
$tdatadtrsummary[".masterListFields"][] = "LateMins";
$tdatadtrsummary[".masterListFields"][] = "UndertimeMins";
$tdatadtrsummary[".masterListFields"][] = "RHolidayHrs";
$tdatadtrsummary[".masterListFields"][] = "SHolidayHrs";
$tdatadtrsummary[".masterListFields"][] = "CHolidayHrs";
$tdatadtrsummary[".masterListFields"][] = "ExcessHrs";
$tdatadtrsummary[".masterListFields"][] = "RegOTHrs";
$tdatadtrsummary[".masterListFields"][] = "RHOTHrs";
$tdatadtrsummary[".masterListFields"][] = "SHOTHRs";
$tdatadtrsummary[".masterListFields"][] = "CHOTHrs";
$tdatadtrsummary[".masterListFields"][] = "RDOTHrs";
$tdatadtrsummary[".masterListFields"][] = "NDHrs";
$tdatadtrsummary[".masterListFields"][] = "RDHrs";
$tdatadtrsummary[".masterListFields"][] = "RegNDHrs";
$tdatadtrsummary[".masterListFields"][] = "RHNDHrs";
$tdatadtrsummary[".masterListFields"][] = "SHNDHrs";
$tdatadtrsummary[".masterListFields"][] = "CHNDHrs";
$tdatadtrsummary[".masterListFields"][] = "RDNDHrs";
$tdatadtrsummary[".masterListFields"][] = "VLDays";
$tdatadtrsummary[".masterListFields"][] = "SLDays";
$tdatadtrsummary[".masterListFields"][] = "ELDays";
$tdatadtrsummary[".masterListFields"][] = "PLDays";
$tdatadtrsummary[".masterListFields"][] = "TrODays";
$tdatadtrsummary[".masterListFields"][] = "NDMealAllowance";
$tdatadtrsummary[".masterListFields"][] = "RLink";

$tdatadtrsummary[".inlineAddFields"] = array();

$tdatadtrsummary[".editFields"] = array();

$tdatadtrsummary[".inlineEditFields"] = array();

$tdatadtrsummary[".updateSelectedFields"] = array();


$tdatadtrsummary[".exportFields"] = array();
$tdatadtrsummary[".exportFields"][] = "EmployeeID";
$tdatadtrsummary[".exportFields"][] = "UserName";
$tdatadtrsummary[".exportFields"][] = "Employer";
$tdatadtrsummary[".exportFields"][] = "Division";
$tdatadtrsummary[".exportFields"][] = "WageType";
$tdatadtrsummary[".exportFields"][] = "RegWD";
$tdatadtrsummary[".exportFields"][] = "DWork";
$tdatadtrsummary[".exportFields"][] = "Absent";
$tdatadtrsummary[".exportFields"][] = "LateMins";
$tdatadtrsummary[".exportFields"][] = "UndertimeMins";
$tdatadtrsummary[".exportFields"][] = "RHolidayHrs";
$tdatadtrsummary[".exportFields"][] = "SHolidayHrs";
$tdatadtrsummary[".exportFields"][] = "CHolidayHrs";
$tdatadtrsummary[".exportFields"][] = "ExcessHrs";
$tdatadtrsummary[".exportFields"][] = "RegOTHrs";
$tdatadtrsummary[".exportFields"][] = "RHOTHrs";
$tdatadtrsummary[".exportFields"][] = "SHOTHRs";
$tdatadtrsummary[".exportFields"][] = "CHOTHrs";
$tdatadtrsummary[".exportFields"][] = "RDOTHrs";
$tdatadtrsummary[".exportFields"][] = "NDHrs";
$tdatadtrsummary[".exportFields"][] = "RDHrs";
$tdatadtrsummary[".exportFields"][] = "RegNDHrs";
$tdatadtrsummary[".exportFields"][] = "RHNDHrs";
$tdatadtrsummary[".exportFields"][] = "SHNDHrs";
$tdatadtrsummary[".exportFields"][] = "CHNDHrs";
$tdatadtrsummary[".exportFields"][] = "RDNDHrs";
$tdatadtrsummary[".exportFields"][] = "VLDays";
$tdatadtrsummary[".exportFields"][] = "SLDays";
$tdatadtrsummary[".exportFields"][] = "ELDays";
$tdatadtrsummary[".exportFields"][] = "PLDays";
$tdatadtrsummary[".exportFields"][] = "TrODays";
$tdatadtrsummary[".exportFields"][] = "NDMealAllowance";
$tdatadtrsummary[".exportFields"][] = "RLink";

$tdatadtrsummary[".importFields"] = array();

$tdatadtrsummary[".printFields"] = array();
$tdatadtrsummary[".printFields"][] = "EmployeeID";
$tdatadtrsummary[".printFields"][] = "UserName";
$tdatadtrsummary[".printFields"][] = "Employer";
$tdatadtrsummary[".printFields"][] = "Division";
$tdatadtrsummary[".printFields"][] = "WageType";
$tdatadtrsummary[".printFields"][] = "RegWD";
$tdatadtrsummary[".printFields"][] = "DWork";
$tdatadtrsummary[".printFields"][] = "Absent";
$tdatadtrsummary[".printFields"][] = "LateMins";
$tdatadtrsummary[".printFields"][] = "UndertimeMins";
$tdatadtrsummary[".printFields"][] = "RHolidayHrs";
$tdatadtrsummary[".printFields"][] = "SHolidayHrs";
$tdatadtrsummary[".printFields"][] = "CHolidayHrs";
$tdatadtrsummary[".printFields"][] = "ExcessHrs";
$tdatadtrsummary[".printFields"][] = "RegOTHrs";
$tdatadtrsummary[".printFields"][] = "RHOTHrs";
$tdatadtrsummary[".printFields"][] = "SHOTHRs";
$tdatadtrsummary[".printFields"][] = "CHOTHrs";
$tdatadtrsummary[".printFields"][] = "RDOTHrs";
$tdatadtrsummary[".printFields"][] = "NDHrs";
$tdatadtrsummary[".printFields"][] = "RDHrs";
$tdatadtrsummary[".printFields"][] = "RegNDHrs";
$tdatadtrsummary[".printFields"][] = "RHNDHrs";
$tdatadtrsummary[".printFields"][] = "SHNDHrs";
$tdatadtrsummary[".printFields"][] = "CHNDHrs";
$tdatadtrsummary[".printFields"][] = "RDNDHrs";
$tdatadtrsummary[".printFields"][] = "VLDays";
$tdatadtrsummary[".printFields"][] = "SLDays";
$tdatadtrsummary[".printFields"][] = "ELDays";
$tdatadtrsummary[".printFields"][] = "PLDays";
$tdatadtrsummary[".printFields"][] = "TrODays";
$tdatadtrsummary[".printFields"][] = "NDMealAllowance";
$tdatadtrsummary[".printFields"][] = "RLink";


//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","EmployeeID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatadtrsummary["EmployeeID"] = $fdata;
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","UserName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadtrsummary["UserName"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","Division");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatadtrsummary["Division"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","WageType");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatadtrsummary["WageType"] = $fdata;
//	RegWD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "RegWD";
	$fdata["GoodName"] = "RegWD";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","RegWD");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RegWD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegWD";

	
	
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




	$tdatadtrsummary["RegWD"] = $fdata;
//	DWork
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DWork";
	$fdata["GoodName"] = "DWork";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","DWork");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DWork";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DWork";

	
	
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




	$tdatadtrsummary["DWork"] = $fdata;
//	Absent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Absent";
	$fdata["GoodName"] = "Absent";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","Absent");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Absent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Absent";

	
	
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




	$tdatadtrsummary["Absent"] = $fdata;
//	LateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "LateMins";
	$fdata["GoodName"] = "LateMins";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","LateMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LateMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LateMins";

	
	
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




	$tdatadtrsummary["LateMins"] = $fdata;
//	UndertimeMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "UndertimeMins";
	$fdata["GoodName"] = "UndertimeMins";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","UndertimeMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "UndertimeMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UndertimeMins";

	
	
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




	$tdatadtrsummary["UndertimeMins"] = $fdata;
//	ExcessHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ExcessHrs";
	$fdata["GoodName"] = "ExcessHrs";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","ExcessHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ExcessHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ExcessHrs";

	
	
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




	$tdatadtrsummary["ExcessHrs"] = $fdata;
//	RegOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "RegOTHrs";
	$fdata["GoodName"] = "RegOTHrs";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","RegOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RegOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegOTHrs";

	
	
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




	$tdatadtrsummary["RegOTHrs"] = $fdata;
//	RHOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "RHOTHrs";
	$fdata["GoodName"] = "RHOTHrs";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","RHOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHOTHrs";

	
	
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




	$tdatadtrsummary["RHOTHrs"] = $fdata;
//	SHOTHRs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "SHOTHRs";
	$fdata["GoodName"] = "SHOTHRs";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","SHOTHRs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHOTHRs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHOTHRs";

	
	
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




	$tdatadtrsummary["SHOTHRs"] = $fdata;
//	CHOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "CHOTHrs";
	$fdata["GoodName"] = "CHOTHrs";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","CHOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CHOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHOTHrs";

	
	
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




	$tdatadtrsummary["CHOTHrs"] = $fdata;
//	RDOTHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "RDOTHrs";
	$fdata["GoodName"] = "RDOTHrs";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","RDOTHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RDOTHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RDOTHrs";

	
	
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




	$tdatadtrsummary["RDOTHrs"] = $fdata;
//	NDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "NDHrs";
	$fdata["GoodName"] = "NDHrs";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","NDHrs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NDHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NDHrs";

	
	
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




	$tdatadtrsummary["NDHrs"] = $fdata;
//	RDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "RDHrs";
	$fdata["GoodName"] = "RDHrs";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","RDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RDHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RDHrs";

	
	
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




	$tdatadtrsummary["RDHrs"] = $fdata;
//	RegNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "RegNDHrs";
	$fdata["GoodName"] = "RegNDHrs";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","RegNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RegNDHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegNDHrs";

	
	
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




	$tdatadtrsummary["RegNDHrs"] = $fdata;
//	RHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "RHNDHrs";
	$fdata["GoodName"] = "RHNDHrs";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","RHNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHNDHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHNDHrs";

	
	
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




	$tdatadtrsummary["RHNDHrs"] = $fdata;
//	SHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "SHNDHrs";
	$fdata["GoodName"] = "SHNDHrs";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","SHNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHNDHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHNDHrs";

	
	
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




	$tdatadtrsummary["SHNDHrs"] = $fdata;
//	CHNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "CHNDHrs";
	$fdata["GoodName"] = "CHNDHrs";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","CHNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CHNDHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHNDHrs";

	
	
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




	$tdatadtrsummary["CHNDHrs"] = $fdata;
//	RDNDHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "RDNDHrs";
	$fdata["GoodName"] = "RDNDHrs";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","RDNDHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RDNDHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RDNDHrs";

	
	
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




	$tdatadtrsummary["RDNDHrs"] = $fdata;
//	VLDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "VLDays";
	$fdata["GoodName"] = "VLDays";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","VLDays");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "VLDays";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VLDays";

	
	
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




	$tdatadtrsummary["VLDays"] = $fdata;
//	SLDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "SLDays";
	$fdata["GoodName"] = "SLDays";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","SLDays");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SLDays";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SLDays";

	
	
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




	$tdatadtrsummary["SLDays"] = $fdata;
//	ELDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "ELDays";
	$fdata["GoodName"] = "ELDays";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","ELDays");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ELDays";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ELDays";

	
	
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




	$tdatadtrsummary["ELDays"] = $fdata;
//	PLDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "PLDays";
	$fdata["GoodName"] = "PLDays";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","PLDays");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PLDays";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PLDays";

	
	
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




	$tdatadtrsummary["PLDays"] = $fdata;
//	TrODays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "TrODays";
	$fdata["GoodName"] = "TrODays";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","TrODays");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TrODays";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TrODays";

	
	
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




	$tdatadtrsummary["TrODays"] = $fdata;
//	RLink
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "RLink";
	$fdata["GoodName"] = "RLink";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","RLink");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RLink";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RLink";

	
	
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




	$tdatadtrsummary["RLink"] = $fdata;
//	NDMealAllowance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "NDMealAllowance";
	$fdata["GoodName"] = "NDMealAllowance";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","NDMealAllowance");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NDMealAllowance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NDMealAllowance";

	
	
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




	$tdatadtrsummary["NDMealAllowance"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","Employer");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatadtrsummary["Employer"] = $fdata;
//	RHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "RHolidayHrs";
	$fdata["GoodName"] = "RHolidayHrs";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","RHolidayHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHolidayHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHolidayHrs";

	
	
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




	$tdatadtrsummary["RHolidayHrs"] = $fdata;
//	SHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "SHolidayHrs";
	$fdata["GoodName"] = "SHolidayHrs";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","SHolidayHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHolidayHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHolidayHrs";

	
	
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




	$tdatadtrsummary["SHolidayHrs"] = $fdata;
//	CHolidayHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "CHolidayHrs";
	$fdata["GoodName"] = "CHolidayHrs";
	$fdata["ownerTable"] = "dtrsummary";
	$fdata["Label"] = GetFieldLabel("dtrsummary","CHolidayHrs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CHolidayHrs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHolidayHrs";

	
	
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




	$tdatadtrsummary["CHolidayHrs"] = $fdata;


$tables_data["dtrsummary"]=&$tdatadtrsummary;
$field_labels["dtrsummary"] = &$fieldLabelsdtrsummary;
$fieldToolTips["dtrsummary"] = &$fieldToolTipsdtrsummary;
$placeHolders["dtrsummary"] = &$placeHoldersdtrsummary;
$page_titles["dtrsummary"] = &$pageTitlesdtrsummary;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dtrsummary"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dtrsummary"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_dtrsummary()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EmployeeID,  	UserName,  	Division,  	WageType,  	RegWD,  	DWork,  	Absent,  	LateMins,  	UndertimeMins,  	ExcessHrs,  	RegOTHrs,  	RHOTHrs,  	SHOTHRs,  	CHOTHrs,  	RDOTHrs,  	NDHrs,  	RDHrs,  	RegNDHrs,  	RHNDHrs,  	SHNDHrs,  	CHNDHrs,  	RDNDHrs,  	VLDays,  	SLDays,  	ELDays,  	PLDays,  	TrODays,  	RLink,  	NDMealAllowance,  	Employer,  	RHolidayHrs,  	SHolidayHrs,  	CHolidayHrs";
$proto0["m_strFrom"] = "FROM dtrsummary";
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
	"m_strName" => "EmployeeID",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto6["m_sql"] = "EmployeeID";
$proto6["m_srcTableName"] = "dtrsummary";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto8["m_sql"] = "UserName";
$proto8["m_srcTableName"] = "dtrsummary";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto10["m_sql"] = "Division";
$proto10["m_srcTableName"] = "dtrsummary";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "WageType",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto12["m_sql"] = "WageType";
$proto12["m_srcTableName"] = "dtrsummary";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "RegWD",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto14["m_sql"] = "RegWD";
$proto14["m_srcTableName"] = "dtrsummary";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DWork",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto16["m_sql"] = "DWork";
$proto16["m_srcTableName"] = "dtrsummary";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Absent",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto18["m_sql"] = "Absent";
$proto18["m_srcTableName"] = "dtrsummary";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "LateMins",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto20["m_sql"] = "LateMins";
$proto20["m_srcTableName"] = "dtrsummary";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "UndertimeMins",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto22["m_sql"] = "UndertimeMins";
$proto22["m_srcTableName"] = "dtrsummary";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ExcessHrs",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto24["m_sql"] = "ExcessHrs";
$proto24["m_srcTableName"] = "dtrsummary";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "RegOTHrs",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto26["m_sql"] = "RegOTHrs";
$proto26["m_srcTableName"] = "dtrsummary";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "RHOTHrs",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto28["m_sql"] = "RHOTHrs";
$proto28["m_srcTableName"] = "dtrsummary";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOTHRs",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto30["m_sql"] = "SHOTHRs";
$proto30["m_srcTableName"] = "dtrsummary";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "CHOTHrs",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto32["m_sql"] = "CHOTHrs";
$proto32["m_srcTableName"] = "dtrsummary";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "RDOTHrs",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto34["m_sql"] = "RDOTHrs";
$proto34["m_srcTableName"] = "dtrsummary";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "NDHrs",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto36["m_sql"] = "NDHrs";
$proto36["m_srcTableName"] = "dtrsummary";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "RDHrs",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto38["m_sql"] = "RDHrs";
$proto38["m_srcTableName"] = "dtrsummary";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "RegNDHrs",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto40["m_sql"] = "RegNDHrs";
$proto40["m_srcTableName"] = "dtrsummary";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "RHNDHrs",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto42["m_sql"] = "RHNDHrs";
$proto42["m_srcTableName"] = "dtrsummary";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "SHNDHrs",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto44["m_sql"] = "SHNDHrs";
$proto44["m_srcTableName"] = "dtrsummary";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "CHNDHrs",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto46["m_sql"] = "CHNDHrs";
$proto46["m_srcTableName"] = "dtrsummary";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "RDNDHrs",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto48["m_sql"] = "RDNDHrs";
$proto48["m_srcTableName"] = "dtrsummary";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "VLDays",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto50["m_sql"] = "VLDays";
$proto50["m_srcTableName"] = "dtrsummary";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "SLDays",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto52["m_sql"] = "SLDays";
$proto52["m_srcTableName"] = "dtrsummary";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "ELDays",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto54["m_sql"] = "ELDays";
$proto54["m_srcTableName"] = "dtrsummary";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "PLDays",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto56["m_sql"] = "PLDays";
$proto56["m_srcTableName"] = "dtrsummary";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "TrODays",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto58["m_sql"] = "TrODays";
$proto58["m_srcTableName"] = "dtrsummary";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "RLink",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto60["m_sql"] = "RLink";
$proto60["m_srcTableName"] = "dtrsummary";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "NDMealAllowance",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto62["m_sql"] = "NDMealAllowance";
$proto62["m_srcTableName"] = "dtrsummary";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto64["m_sql"] = "Employer";
$proto64["m_srcTableName"] = "dtrsummary";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "RHolidayHrs",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto66["m_sql"] = "RHolidayHrs";
$proto66["m_srcTableName"] = "dtrsummary";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "SHolidayHrs",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto68["m_sql"] = "SHolidayHrs";
$proto68["m_srcTableName"] = "dtrsummary";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "CHolidayHrs",
	"m_strTable" => "dtrsummary",
	"m_srcTableName" => "dtrsummary"
));

$proto70["m_sql"] = "CHolidayHrs";
$proto70["m_srcTableName"] = "dtrsummary";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto72=array();
$proto72["m_link"] = "SQLL_MAIN";
			$proto73=array();
$proto73["m_strName"] = "dtrsummary";
$proto73["m_srcTableName"] = "dtrsummary";
$proto73["m_columns"] = array();
$proto73["m_columns"][] = "EmployeeID";
$proto73["m_columns"][] = "UserName";
$proto73["m_columns"][] = "Division";
$proto73["m_columns"][] = "WageType";
$proto73["m_columns"][] = "RegWD";
$proto73["m_columns"][] = "DWork";
$proto73["m_columns"][] = "Absent";
$proto73["m_columns"][] = "LateMins";
$proto73["m_columns"][] = "UndertimeMins";
$proto73["m_columns"][] = "ExcessHrs";
$proto73["m_columns"][] = "RegOTHrs";
$proto73["m_columns"][] = "RHOTHrs";
$proto73["m_columns"][] = "SHOTHRs";
$proto73["m_columns"][] = "CHOTHrs";
$proto73["m_columns"][] = "RDOTHrs";
$proto73["m_columns"][] = "NDHrs";
$proto73["m_columns"][] = "RDHrs";
$proto73["m_columns"][] = "RegNDHrs";
$proto73["m_columns"][] = "RHNDHrs";
$proto73["m_columns"][] = "SHNDHrs";
$proto73["m_columns"][] = "CHNDHrs";
$proto73["m_columns"][] = "RDNDHrs";
$proto73["m_columns"][] = "VLDays";
$proto73["m_columns"][] = "SLDays";
$proto73["m_columns"][] = "ELDays";
$proto73["m_columns"][] = "PLDays";
$proto73["m_columns"][] = "TrODays";
$proto73["m_columns"][] = "RLink";
$proto73["m_columns"][] = "NDMealAllowance";
$proto73["m_columns"][] = "Employer";
$proto73["m_columns"][] = "RHolidayHrs";
$proto73["m_columns"][] = "SHolidayHrs";
$proto73["m_columns"][] = "CHolidayHrs";
$obj = new SQLTable($proto73);

$proto72["m_table"] = $obj;
$proto72["m_sql"] = "dtrsummary";
$proto72["m_alias"] = "";
$proto72["m_srcTableName"] = "dtrsummary";
$proto74=array();
$proto74["m_sql"] = "";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

$proto72["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto72);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dtrsummary";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dtrsummary = createSqlQuery_dtrsummary();


	
		;

																																	

$tdatadtrsummary[".sqlquery"] = $queryData_dtrsummary;

$tableEvents["dtrsummary"] = new eventsBase;
$tdatadtrsummary[".hasEvents"] = false;

?>