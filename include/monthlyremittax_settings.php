<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamonthlyremittax = array();
	$tdatamonthlyremittax[".truncateText"] = true;
	$tdatamonthlyremittax[".NumberOfChars"] = 80;
	$tdatamonthlyremittax[".ShortName"] = "monthlyremittax";
	$tdatamonthlyremittax[".OwnerID"] = "";
	$tdatamonthlyremittax[".OriginalTable"] = "monthlyremittax";

//	field labels
$fieldLabelsmonthlyremittax = array();
$fieldToolTipsmonthlyremittax = array();
$pageTitlesmonthlyremittax = array();
$placeHoldersmonthlyremittax = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmonthlyremittax["English"] = array();
	$fieldToolTipsmonthlyremittax["English"] = array();
	$placeHoldersmonthlyremittax["English"] = array();
	$pageTitlesmonthlyremittax["English"] = array();
	$fieldLabelsmonthlyremittax["English"]["TxID"] = "Tx ID";
	$fieldToolTipsmonthlyremittax["English"]["TxID"] = "";
	$placeHoldersmonthlyremittax["English"]["TxID"] = "";
	$fieldLabelsmonthlyremittax["English"]["Month"] = "Month";
	$fieldToolTipsmonthlyremittax["English"]["Month"] = "";
	$placeHoldersmonthlyremittax["English"]["Month"] = "";
	$fieldLabelsmonthlyremittax["English"]["Year"] = "Year";
	$fieldToolTipsmonthlyremittax["English"]["Year"] = "";
	$placeHoldersmonthlyremittax["English"]["Year"] = "";
	$fieldLabelsmonthlyremittax["English"]["EmployerID"] = "Employer";
	$fieldToolTipsmonthlyremittax["English"]["EmployerID"] = "";
	$placeHoldersmonthlyremittax["English"]["EmployerID"] = "";
	$fieldLabelsmonthlyremittax["English"]["Address"] = "Address";
	$fieldToolTipsmonthlyremittax["English"]["Address"] = "";
	$placeHoldersmonthlyremittax["English"]["Address"] = "";
	$fieldLabelsmonthlyremittax["English"]["RDOCode"] = "RDOCode";
	$fieldToolTipsmonthlyremittax["English"]["RDOCode"] = "";
	$placeHoldersmonthlyremittax["English"]["RDOCode"] = "";
	$fieldLabelsmonthlyremittax["English"]["AmendedReturn"] = "Amended Return";
	$fieldToolTipsmonthlyremittax["English"]["AmendedReturn"] = "";
	$placeHoldersmonthlyremittax["English"]["AmendedReturn"] = "";
	$fieldLabelsmonthlyremittax["English"]["AnyTaxWithheld"] = "Any Tax Withheld";
	$fieldToolTipsmonthlyremittax["English"]["AnyTaxWithheld"] = "";
	$placeHoldersmonthlyremittax["English"]["AnyTaxWithheld"] = "";
	$fieldLabelsmonthlyremittax["English"]["TIN"] = "TIN";
	$fieldToolTipsmonthlyremittax["English"]["TIN"] = "";
	$placeHoldersmonthlyremittax["English"]["TIN"] = "";
	$fieldLabelsmonthlyremittax["English"]["CategoryWithholdingAgent"] = "Category Withholding Agent";
	$fieldToolTipsmonthlyremittax["English"]["CategoryWithholdingAgent"] = "";
	$placeHoldersmonthlyremittax["English"]["CategoryWithholdingAgent"] = "";
	$fieldLabelsmonthlyremittax["English"]["AwaitingTaxRelief"] = "Awaiting Tax Relief";
	$fieldToolTipsmonthlyremittax["English"]["AwaitingTaxRelief"] = "";
	$placeHoldersmonthlyremittax["English"]["AwaitingTaxRelief"] = "";
	$fieldLabelsmonthlyremittax["English"]["TotalAmountOfCompensation"] = "Total Amount Of Compensation";
	$fieldToolTipsmonthlyremittax["English"]["TotalAmountOfCompensation"] = "";
	$placeHoldersmonthlyremittax["English"]["TotalAmountOfCompensation"] = "";
	$fieldLabelsmonthlyremittax["English"]["OtherNonTaxableCompensation"] = "Other Non Taxable Compensation";
	$fieldToolTipsmonthlyremittax["English"]["OtherNonTaxableCompensation"] = "";
	$placeHoldersmonthlyremittax["English"]["OtherNonTaxableCompensation"] = "";
	$fieldLabelsmonthlyremittax["English"]["TaxableCompensation"] = "Taxable Compensation";
	$fieldToolTipsmonthlyremittax["English"]["TaxableCompensation"] = "";
	$placeHoldersmonthlyremittax["English"]["TaxableCompensation"] = "";
	$fieldLabelsmonthlyremittax["English"]["TaxRequiredToBeWithheld"] = "Tax Required To Be Withheld";
	$fieldToolTipsmonthlyremittax["English"]["TaxRequiredToBeWithheld"] = "";
	$placeHoldersmonthlyremittax["English"]["TaxRequiredToBeWithheld"] = "";
	$fieldLabelsmonthlyremittax["English"]["TaxRefund"] = "Tax Refund";
	$fieldToolTipsmonthlyremittax["English"]["TaxRefund"] = "";
	$placeHoldersmonthlyremittax["English"]["TaxRefund"] = "";
	$fieldLabelsmonthlyremittax["English"]["TaxRequiredForRemittance"] = "Tax Required For Remittance";
	$fieldToolTipsmonthlyremittax["English"]["TaxRequiredForRemittance"] = "";
	$placeHoldersmonthlyremittax["English"]["TaxRequiredForRemittance"] = "";
	$fieldLabelsmonthlyremittax["English"]["TotalAmountStillDue"] = "Total Amount Still Due";
	$fieldToolTipsmonthlyremittax["English"]["TotalAmountStillDue"] = "";
	$placeHoldersmonthlyremittax["English"]["TotalAmountStillDue"] = "";
	$fieldLabelsmonthlyremittax["English"]["AuthorizedRepresentative"] = "Authorized Representative";
	$fieldToolTipsmonthlyremittax["English"]["AuthorizedRepresentative"] = "";
	$placeHoldersmonthlyremittax["English"]["AuthorizedRepresentative"] = "";
	$fieldLabelsmonthlyremittax["English"]["TelNo"] = "Tel No";
	$fieldToolTipsmonthlyremittax["English"]["TelNo"] = "";
	$placeHoldersmonthlyremittax["English"]["TelNo"] = "";
	$fieldLabelsmonthlyremittax["English"]["ZipCode"] = "Zip Code";
	$fieldToolTipsmonthlyremittax["English"]["ZipCode"] = "";
	$placeHoldersmonthlyremittax["English"]["ZipCode"] = "";
	$fieldLabelsmonthlyremittax["English"]["StatutoryMinimumWage"] = "Statutory Minimum Wage";
	$fieldToolTipsmonthlyremittax["English"]["StatutoryMinimumWage"] = "";
	$placeHoldersmonthlyremittax["English"]["StatutoryMinimumWage"] = "";
	if (count($fieldToolTipsmonthlyremittax["English"]))
		$tdatamonthlyremittax[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmonthlyremittax[""] = array();
	$fieldToolTipsmonthlyremittax[""] = array();
	$placeHoldersmonthlyremittax[""] = array();
	$pageTitlesmonthlyremittax[""] = array();
	if (count($fieldToolTipsmonthlyremittax[""]))
		$tdatamonthlyremittax[".isUseToolTips"] = true;
}


	$tdatamonthlyremittax[".NCSearch"] = true;



$tdatamonthlyremittax[".shortTableName"] = "monthlyremittax";
$tdatamonthlyremittax[".nSecOptions"] = 0;
$tdatamonthlyremittax[".recsPerRowPrint"] = 1;
$tdatamonthlyremittax[".mainTableOwnerID"] = "";
$tdatamonthlyremittax[".moveNext"] = 1;
$tdatamonthlyremittax[".entityType"] = 0;

$tdatamonthlyremittax[".strOriginalTableName"] = "monthlyremittax";

	



$tdatamonthlyremittax[".showAddInPopup"] = false;

$tdatamonthlyremittax[".showEditInPopup"] = false;

$tdatamonthlyremittax[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamonthlyremittax[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamonthlyremittax[".fieldsForRegister"] = array();

$tdatamonthlyremittax[".listAjax"] = false;

	$tdatamonthlyremittax[".audit"] = false;

	$tdatamonthlyremittax[".locking"] = false;

$tdatamonthlyremittax[".edit"] = true;
$tdatamonthlyremittax[".afterEditAction"] = 1;
$tdatamonthlyremittax[".closePopupAfterEdit"] = 1;
$tdatamonthlyremittax[".afterEditActionDetTable"] = "";

$tdatamonthlyremittax[".add"] = true;
$tdatamonthlyremittax[".afterAddAction"] = 1;
$tdatamonthlyremittax[".closePopupAfterAdd"] = 1;
$tdatamonthlyremittax[".afterAddActionDetTable"] = "";

$tdatamonthlyremittax[".list"] = true;

$tdatamonthlyremittax[".inlineEdit"] = true;

$tdatamonthlyremittax[".updateSelected"] = true;

$tdatamonthlyremittax[".reorderRecordsByHeader"] = true;


$tdatamonthlyremittax[".exportFormatting"] = 2;
$tdatamonthlyremittax[".exportDelimiter"] = ",";
		
$tdatamonthlyremittax[".inlineAdd"] = true;
$tdatamonthlyremittax[".copy"] = true;
$tdatamonthlyremittax[".view"] = true;

$tdatamonthlyremittax[".import"] = true;

$tdatamonthlyremittax[".exportTo"] = true;

$tdatamonthlyremittax[".printFriendly"] = true;

$tdatamonthlyremittax[".delete"] = true;

$tdatamonthlyremittax[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamonthlyremittax[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamonthlyremittax[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamonthlyremittax[".searchSaving"] = false;
//

$tdatamonthlyremittax[".showSearchPanel"] = true;
		$tdatamonthlyremittax[".flexibleSearch"] = true;

$tdatamonthlyremittax[".isUseAjaxSuggest"] = true;

$tdatamonthlyremittax[".rowHighlite"] = true;



																																																																																																																																																																																															
																																																																							

$tdatamonthlyremittax[".ajaxCodeSnippetAdded"] = false;

$tdatamonthlyremittax[".buttonsAdded"] = true;

$tdatamonthlyremittax[".addPageEvents"] = true;

// use timepicker for search panel
$tdatamonthlyremittax[".isUseTimeForSearch"] = false;





$tdatamonthlyremittax[".allSearchFields"] = array();
$tdatamonthlyremittax[".filterFields"] = array();
$tdatamonthlyremittax[".requiredSearchFields"] = array();

$tdatamonthlyremittax[".allSearchFields"][] = "TxID";
	$tdatamonthlyremittax[".allSearchFields"][] = "Month";
	$tdatamonthlyremittax[".allSearchFields"][] = "Year";
	$tdatamonthlyremittax[".allSearchFields"][] = "AmendedReturn";
	$tdatamonthlyremittax[".allSearchFields"][] = "AnyTaxWithheld";
	$tdatamonthlyremittax[".allSearchFields"][] = "EmployerID";
	$tdatamonthlyremittax[".allSearchFields"][] = "TIN";
	$tdatamonthlyremittax[".allSearchFields"][] = "TelNo";
	$tdatamonthlyremittax[".allSearchFields"][] = "Address";
	$tdatamonthlyremittax[".allSearchFields"][] = "ZipCode";
	$tdatamonthlyremittax[".allSearchFields"][] = "RDOCode";
	$tdatamonthlyremittax[".allSearchFields"][] = "CategoryWithholdingAgent";
	$tdatamonthlyremittax[".allSearchFields"][] = "AwaitingTaxRelief";
	$tdatamonthlyremittax[".allSearchFields"][] = "TotalAmountOfCompensation";
	$tdatamonthlyremittax[".allSearchFields"][] = "StatutoryMinimumWage";
	$tdatamonthlyremittax[".allSearchFields"][] = "OtherNonTaxableCompensation";
	$tdatamonthlyremittax[".allSearchFields"][] = "TaxableCompensation";
	$tdatamonthlyremittax[".allSearchFields"][] = "TaxRequiredToBeWithheld";
	$tdatamonthlyremittax[".allSearchFields"][] = "TaxRefund";
	$tdatamonthlyremittax[".allSearchFields"][] = "TaxRequiredForRemittance";
	$tdatamonthlyremittax[".allSearchFields"][] = "TotalAmountStillDue";
	$tdatamonthlyremittax[".allSearchFields"][] = "AuthorizedRepresentative";
	

$tdatamonthlyremittax[".googleLikeFields"] = array();
$tdatamonthlyremittax[".googleLikeFields"][] = "TxID";
$tdatamonthlyremittax[".googleLikeFields"][] = "Month";
$tdatamonthlyremittax[".googleLikeFields"][] = "Year";
$tdatamonthlyremittax[".googleLikeFields"][] = "EmployerID";
$tdatamonthlyremittax[".googleLikeFields"][] = "Address";
$tdatamonthlyremittax[".googleLikeFields"][] = "RDOCode";
$tdatamonthlyremittax[".googleLikeFields"][] = "AmendedReturn";
$tdatamonthlyremittax[".googleLikeFields"][] = "AnyTaxWithheld";
$tdatamonthlyremittax[".googleLikeFields"][] = "TIN";
$tdatamonthlyremittax[".googleLikeFields"][] = "CategoryWithholdingAgent";
$tdatamonthlyremittax[".googleLikeFields"][] = "AwaitingTaxRelief";
$tdatamonthlyremittax[".googleLikeFields"][] = "TotalAmountOfCompensation";
$tdatamonthlyremittax[".googleLikeFields"][] = "StatutoryMinimumWage";
$tdatamonthlyremittax[".googleLikeFields"][] = "OtherNonTaxableCompensation";
$tdatamonthlyremittax[".googleLikeFields"][] = "TaxableCompensation";
$tdatamonthlyremittax[".googleLikeFields"][] = "TaxRequiredToBeWithheld";
$tdatamonthlyremittax[".googleLikeFields"][] = "TaxRefund";
$tdatamonthlyremittax[".googleLikeFields"][] = "TaxRequiredForRemittance";
$tdatamonthlyremittax[".googleLikeFields"][] = "TotalAmountStillDue";
$tdatamonthlyremittax[".googleLikeFields"][] = "AuthorizedRepresentative";
$tdatamonthlyremittax[".googleLikeFields"][] = "TelNo";
$tdatamonthlyremittax[".googleLikeFields"][] = "ZipCode";


$tdatamonthlyremittax[".advSearchFields"] = array();
$tdatamonthlyremittax[".advSearchFields"][] = "TxID";
$tdatamonthlyremittax[".advSearchFields"][] = "Month";
$tdatamonthlyremittax[".advSearchFields"][] = "Year";
$tdatamonthlyremittax[".advSearchFields"][] = "AmendedReturn";
$tdatamonthlyremittax[".advSearchFields"][] = "AnyTaxWithheld";
$tdatamonthlyremittax[".advSearchFields"][] = "EmployerID";
$tdatamonthlyremittax[".advSearchFields"][] = "TIN";
$tdatamonthlyremittax[".advSearchFields"][] = "TelNo";
$tdatamonthlyremittax[".advSearchFields"][] = "Address";
$tdatamonthlyremittax[".advSearchFields"][] = "ZipCode";
$tdatamonthlyremittax[".advSearchFields"][] = "RDOCode";
$tdatamonthlyremittax[".advSearchFields"][] = "CategoryWithholdingAgent";
$tdatamonthlyremittax[".advSearchFields"][] = "AwaitingTaxRelief";
$tdatamonthlyremittax[".advSearchFields"][] = "TotalAmountOfCompensation";
$tdatamonthlyremittax[".advSearchFields"][] = "StatutoryMinimumWage";
$tdatamonthlyremittax[".advSearchFields"][] = "OtherNonTaxableCompensation";
$tdatamonthlyremittax[".advSearchFields"][] = "TaxableCompensation";
$tdatamonthlyremittax[".advSearchFields"][] = "TaxRequiredToBeWithheld";
$tdatamonthlyremittax[".advSearchFields"][] = "TaxRefund";
$tdatamonthlyremittax[".advSearchFields"][] = "TaxRequiredForRemittance";
$tdatamonthlyremittax[".advSearchFields"][] = "TotalAmountStillDue";
$tdatamonthlyremittax[".advSearchFields"][] = "AuthorizedRepresentative";

$tdatamonthlyremittax[".tableType"] = "list";

$tdatamonthlyremittax[".printerPageOrientation"] = 0;
$tdatamonthlyremittax[".nPrinterPageScale"] = 100;

$tdatamonthlyremittax[".nPrinterSplitRecords"] = 40;

$tdatamonthlyremittax[".nPrinterPDFSplitRecords"] = 40;



$tdatamonthlyremittax[".geocodingEnabled"] = false;





$tdatamonthlyremittax[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamonthlyremittax[".pageSize"] = 20;

$tdatamonthlyremittax[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamonthlyremittax[".strOrderBy"] = $tstrOrderBy;

$tdatamonthlyremittax[".orderindexes"] = array();

$tdatamonthlyremittax[".sqlHead"] = "SELECT TxID,  `Month`,  `Year`,  EmployerID,  Address,  RDOCode,  AmendedReturn,  AnyTaxWithheld,  TIN,  CategoryWithholdingAgent,  AwaitingTaxRelief,  TotalAmountOfCompensation,  StatutoryMinimumWage,  OtherNonTaxableCompensation,  TaxableCompensation,  TaxRequiredToBeWithheld,  TaxRefund,  TaxRequiredForRemittance,  TotalAmountStillDue,  AuthorizedRepresentative,  TelNo,  ZipCode";
$tdatamonthlyremittax[".sqlFrom"] = "FROM monthlyremittax";
$tdatamonthlyremittax[".sqlWhereExpr"] = "";
$tdatamonthlyremittax[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamonthlyremittax[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamonthlyremittax[".arrGroupsPerPage"] = $arrGPP;

$tdatamonthlyremittax[".highlightSearchResults"] = true;

$tableKeysmonthlyremittax = array();
$tableKeysmonthlyremittax[] = "TxID";
$tdatamonthlyremittax[".Keys"] = $tableKeysmonthlyremittax;

$tdatamonthlyremittax[".listFields"] = array();
$tdatamonthlyremittax[".listFields"][] = "TxID";
$tdatamonthlyremittax[".listFields"][] = "Month";
$tdatamonthlyremittax[".listFields"][] = "Year";
$tdatamonthlyremittax[".listFields"][] = "AmendedReturn";
$tdatamonthlyremittax[".listFields"][] = "AnyTaxWithheld";
$tdatamonthlyremittax[".listFields"][] = "EmployerID";
$tdatamonthlyremittax[".listFields"][] = "TIN";
$tdatamonthlyremittax[".listFields"][] = "TelNo";
$tdatamonthlyremittax[".listFields"][] = "Address";
$tdatamonthlyremittax[".listFields"][] = "ZipCode";
$tdatamonthlyremittax[".listFields"][] = "RDOCode";
$tdatamonthlyremittax[".listFields"][] = "CategoryWithholdingAgent";
$tdatamonthlyremittax[".listFields"][] = "AwaitingTaxRelief";
$tdatamonthlyremittax[".listFields"][] = "TotalAmountOfCompensation";
$tdatamonthlyremittax[".listFields"][] = "StatutoryMinimumWage";
$tdatamonthlyremittax[".listFields"][] = "OtherNonTaxableCompensation";
$tdatamonthlyremittax[".listFields"][] = "TaxableCompensation";
$tdatamonthlyremittax[".listFields"][] = "TaxRequiredToBeWithheld";
$tdatamonthlyremittax[".listFields"][] = "TaxRefund";
$tdatamonthlyremittax[".listFields"][] = "TaxRequiredForRemittance";
$tdatamonthlyremittax[".listFields"][] = "TotalAmountStillDue";
$tdatamonthlyremittax[".listFields"][] = "AuthorizedRepresentative";

$tdatamonthlyremittax[".hideMobileList"] = array();


$tdatamonthlyremittax[".viewFields"] = array();
$tdatamonthlyremittax[".viewFields"][] = "TxID";
$tdatamonthlyremittax[".viewFields"][] = "Month";
$tdatamonthlyremittax[".viewFields"][] = "Year";
$tdatamonthlyremittax[".viewFields"][] = "AmendedReturn";
$tdatamonthlyremittax[".viewFields"][] = "AnyTaxWithheld";
$tdatamonthlyremittax[".viewFields"][] = "EmployerID";
$tdatamonthlyremittax[".viewFields"][] = "TIN";
$tdatamonthlyremittax[".viewFields"][] = "TelNo";
$tdatamonthlyremittax[".viewFields"][] = "Address";
$tdatamonthlyremittax[".viewFields"][] = "ZipCode";
$tdatamonthlyremittax[".viewFields"][] = "RDOCode";
$tdatamonthlyremittax[".viewFields"][] = "CategoryWithholdingAgent";
$tdatamonthlyremittax[".viewFields"][] = "AwaitingTaxRelief";
$tdatamonthlyremittax[".viewFields"][] = "TotalAmountOfCompensation";
$tdatamonthlyremittax[".viewFields"][] = "StatutoryMinimumWage";
$tdatamonthlyremittax[".viewFields"][] = "OtherNonTaxableCompensation";
$tdatamonthlyremittax[".viewFields"][] = "TaxableCompensation";
$tdatamonthlyremittax[".viewFields"][] = "TaxRequiredToBeWithheld";
$tdatamonthlyremittax[".viewFields"][] = "TaxRefund";
$tdatamonthlyremittax[".viewFields"][] = "TaxRequiredForRemittance";
$tdatamonthlyremittax[".viewFields"][] = "TotalAmountStillDue";
$tdatamonthlyremittax[".viewFields"][] = "AuthorizedRepresentative";

$tdatamonthlyremittax[".addFields"] = array();
$tdatamonthlyremittax[".addFields"][] = "Month";
$tdatamonthlyremittax[".addFields"][] = "Year";
$tdatamonthlyremittax[".addFields"][] = "AmendedReturn";
$tdatamonthlyremittax[".addFields"][] = "AnyTaxWithheld";
$tdatamonthlyremittax[".addFields"][] = "EmployerID";
$tdatamonthlyremittax[".addFields"][] = "TIN";
$tdatamonthlyremittax[".addFields"][] = "TelNo";
$tdatamonthlyremittax[".addFields"][] = "Address";
$tdatamonthlyremittax[".addFields"][] = "ZipCode";
$tdatamonthlyremittax[".addFields"][] = "RDOCode";
$tdatamonthlyremittax[".addFields"][] = "CategoryWithholdingAgent";
$tdatamonthlyremittax[".addFields"][] = "AwaitingTaxRelief";
$tdatamonthlyremittax[".addFields"][] = "TotalAmountOfCompensation";
$tdatamonthlyremittax[".addFields"][] = "StatutoryMinimumWage";
$tdatamonthlyremittax[".addFields"][] = "OtherNonTaxableCompensation";
$tdatamonthlyremittax[".addFields"][] = "TaxableCompensation";
$tdatamonthlyremittax[".addFields"][] = "TaxRequiredToBeWithheld";
$tdatamonthlyremittax[".addFields"][] = "TaxRefund";
$tdatamonthlyremittax[".addFields"][] = "TaxRequiredForRemittance";
$tdatamonthlyremittax[".addFields"][] = "TotalAmountStillDue";
$tdatamonthlyremittax[".addFields"][] = "AuthorizedRepresentative";

$tdatamonthlyremittax[".masterListFields"] = array();
$tdatamonthlyremittax[".masterListFields"][] = "TxID";
$tdatamonthlyremittax[".masterListFields"][] = "Month";
$tdatamonthlyremittax[".masterListFields"][] = "Year";
$tdatamonthlyremittax[".masterListFields"][] = "AmendedReturn";
$tdatamonthlyremittax[".masterListFields"][] = "AnyTaxWithheld";
$tdatamonthlyremittax[".masterListFields"][] = "EmployerID";
$tdatamonthlyremittax[".masterListFields"][] = "TIN";
$tdatamonthlyremittax[".masterListFields"][] = "TelNo";
$tdatamonthlyremittax[".masterListFields"][] = "Address";
$tdatamonthlyremittax[".masterListFields"][] = "ZipCode";
$tdatamonthlyremittax[".masterListFields"][] = "RDOCode";
$tdatamonthlyremittax[".masterListFields"][] = "CategoryWithholdingAgent";
$tdatamonthlyremittax[".masterListFields"][] = "AwaitingTaxRelief";
$tdatamonthlyremittax[".masterListFields"][] = "TotalAmountOfCompensation";
$tdatamonthlyremittax[".masterListFields"][] = "StatutoryMinimumWage";
$tdatamonthlyremittax[".masterListFields"][] = "OtherNonTaxableCompensation";
$tdatamonthlyremittax[".masterListFields"][] = "TaxableCompensation";
$tdatamonthlyremittax[".masterListFields"][] = "TaxRequiredToBeWithheld";
$tdatamonthlyremittax[".masterListFields"][] = "TaxRefund";
$tdatamonthlyremittax[".masterListFields"][] = "TaxRequiredForRemittance";
$tdatamonthlyremittax[".masterListFields"][] = "TotalAmountStillDue";
$tdatamonthlyremittax[".masterListFields"][] = "AuthorizedRepresentative";

$tdatamonthlyremittax[".inlineAddFields"] = array();
$tdatamonthlyremittax[".inlineAddFields"][] = "Month";
$tdatamonthlyremittax[".inlineAddFields"][] = "Year";
$tdatamonthlyremittax[".inlineAddFields"][] = "AmendedReturn";
$tdatamonthlyremittax[".inlineAddFields"][] = "AnyTaxWithheld";
$tdatamonthlyremittax[".inlineAddFields"][] = "EmployerID";
$tdatamonthlyremittax[".inlineAddFields"][] = "TIN";
$tdatamonthlyremittax[".inlineAddFields"][] = "TelNo";
$tdatamonthlyremittax[".inlineAddFields"][] = "Address";
$tdatamonthlyremittax[".inlineAddFields"][] = "ZipCode";
$tdatamonthlyremittax[".inlineAddFields"][] = "RDOCode";
$tdatamonthlyremittax[".inlineAddFields"][] = "CategoryWithholdingAgent";
$tdatamonthlyremittax[".inlineAddFields"][] = "AwaitingTaxRelief";
$tdatamonthlyremittax[".inlineAddFields"][] = "TotalAmountOfCompensation";
$tdatamonthlyremittax[".inlineAddFields"][] = "StatutoryMinimumWage";
$tdatamonthlyremittax[".inlineAddFields"][] = "OtherNonTaxableCompensation";
$tdatamonthlyremittax[".inlineAddFields"][] = "TaxableCompensation";
$tdatamonthlyremittax[".inlineAddFields"][] = "TaxRequiredToBeWithheld";
$tdatamonthlyremittax[".inlineAddFields"][] = "TaxRefund";
$tdatamonthlyremittax[".inlineAddFields"][] = "TaxRequiredForRemittance";
$tdatamonthlyremittax[".inlineAddFields"][] = "TotalAmountStillDue";
$tdatamonthlyremittax[".inlineAddFields"][] = "AuthorizedRepresentative";

$tdatamonthlyremittax[".editFields"] = array();
$tdatamonthlyremittax[".editFields"][] = "Month";
$tdatamonthlyremittax[".editFields"][] = "Year";
$tdatamonthlyremittax[".editFields"][] = "AmendedReturn";
$tdatamonthlyremittax[".editFields"][] = "AnyTaxWithheld";
$tdatamonthlyremittax[".editFields"][] = "EmployerID";
$tdatamonthlyremittax[".editFields"][] = "TIN";
$tdatamonthlyremittax[".editFields"][] = "TelNo";
$tdatamonthlyremittax[".editFields"][] = "Address";
$tdatamonthlyremittax[".editFields"][] = "ZipCode";
$tdatamonthlyremittax[".editFields"][] = "RDOCode";
$tdatamonthlyremittax[".editFields"][] = "CategoryWithholdingAgent";
$tdatamonthlyremittax[".editFields"][] = "AwaitingTaxRelief";
$tdatamonthlyremittax[".editFields"][] = "TotalAmountOfCompensation";
$tdatamonthlyremittax[".editFields"][] = "StatutoryMinimumWage";
$tdatamonthlyremittax[".editFields"][] = "OtherNonTaxableCompensation";
$tdatamonthlyremittax[".editFields"][] = "TaxableCompensation";
$tdatamonthlyremittax[".editFields"][] = "TaxRequiredToBeWithheld";
$tdatamonthlyremittax[".editFields"][] = "TaxRefund";
$tdatamonthlyremittax[".editFields"][] = "TaxRequiredForRemittance";
$tdatamonthlyremittax[".editFields"][] = "TotalAmountStillDue";
$tdatamonthlyremittax[".editFields"][] = "AuthorizedRepresentative";

$tdatamonthlyremittax[".inlineEditFields"] = array();
$tdatamonthlyremittax[".inlineEditFields"][] = "Month";
$tdatamonthlyremittax[".inlineEditFields"][] = "Year";
$tdatamonthlyremittax[".inlineEditFields"][] = "AmendedReturn";
$tdatamonthlyremittax[".inlineEditFields"][] = "AnyTaxWithheld";
$tdatamonthlyremittax[".inlineEditFields"][] = "EmployerID";
$tdatamonthlyremittax[".inlineEditFields"][] = "TIN";
$tdatamonthlyremittax[".inlineEditFields"][] = "TelNo";
$tdatamonthlyremittax[".inlineEditFields"][] = "Address";
$tdatamonthlyremittax[".inlineEditFields"][] = "ZipCode";
$tdatamonthlyremittax[".inlineEditFields"][] = "RDOCode";
$tdatamonthlyremittax[".inlineEditFields"][] = "CategoryWithholdingAgent";
$tdatamonthlyremittax[".inlineEditFields"][] = "AwaitingTaxRelief";
$tdatamonthlyremittax[".inlineEditFields"][] = "TotalAmountOfCompensation";
$tdatamonthlyremittax[".inlineEditFields"][] = "StatutoryMinimumWage";
$tdatamonthlyremittax[".inlineEditFields"][] = "OtherNonTaxableCompensation";
$tdatamonthlyremittax[".inlineEditFields"][] = "TaxableCompensation";
$tdatamonthlyremittax[".inlineEditFields"][] = "TaxRequiredToBeWithheld";
$tdatamonthlyremittax[".inlineEditFields"][] = "TaxRefund";
$tdatamonthlyremittax[".inlineEditFields"][] = "TaxRequiredForRemittance";
$tdatamonthlyremittax[".inlineEditFields"][] = "TotalAmountStillDue";
$tdatamonthlyremittax[".inlineEditFields"][] = "AuthorizedRepresentative";

$tdatamonthlyremittax[".updateSelectedFields"] = array();
$tdatamonthlyremittax[".updateSelectedFields"][] = "Month";
$tdatamonthlyremittax[".updateSelectedFields"][] = "Year";
$tdatamonthlyremittax[".updateSelectedFields"][] = "AmendedReturn";
$tdatamonthlyremittax[".updateSelectedFields"][] = "AnyTaxWithheld";
$tdatamonthlyremittax[".updateSelectedFields"][] = "EmployerID";
$tdatamonthlyremittax[".updateSelectedFields"][] = "TIN";
$tdatamonthlyremittax[".updateSelectedFields"][] = "TelNo";
$tdatamonthlyremittax[".updateSelectedFields"][] = "Address";
$tdatamonthlyremittax[".updateSelectedFields"][] = "RDOCode";
$tdatamonthlyremittax[".updateSelectedFields"][] = "CategoryWithholdingAgent";
$tdatamonthlyremittax[".updateSelectedFields"][] = "AwaitingTaxRelief";
$tdatamonthlyremittax[".updateSelectedFields"][] = "TotalAmountOfCompensation";
$tdatamonthlyremittax[".updateSelectedFields"][] = "OtherNonTaxableCompensation";
$tdatamonthlyremittax[".updateSelectedFields"][] = "TaxableCompensation";
$tdatamonthlyremittax[".updateSelectedFields"][] = "TaxRequiredToBeWithheld";
$tdatamonthlyremittax[".updateSelectedFields"][] = "TaxRefund";
$tdatamonthlyremittax[".updateSelectedFields"][] = "TaxRequiredForRemittance";
$tdatamonthlyremittax[".updateSelectedFields"][] = "TotalAmountStillDue";
$tdatamonthlyremittax[".updateSelectedFields"][] = "AuthorizedRepresentative";


$tdatamonthlyremittax[".exportFields"] = array();
$tdatamonthlyremittax[".exportFields"][] = "TxID";
$tdatamonthlyremittax[".exportFields"][] = "Month";
$tdatamonthlyremittax[".exportFields"][] = "Year";
$tdatamonthlyremittax[".exportFields"][] = "AmendedReturn";
$tdatamonthlyremittax[".exportFields"][] = "AnyTaxWithheld";
$tdatamonthlyremittax[".exportFields"][] = "EmployerID";
$tdatamonthlyremittax[".exportFields"][] = "TIN";
$tdatamonthlyremittax[".exportFields"][] = "TelNo";
$tdatamonthlyremittax[".exportFields"][] = "Address";
$tdatamonthlyremittax[".exportFields"][] = "ZipCode";
$tdatamonthlyremittax[".exportFields"][] = "RDOCode";
$tdatamonthlyremittax[".exportFields"][] = "CategoryWithholdingAgent";
$tdatamonthlyremittax[".exportFields"][] = "AwaitingTaxRelief";
$tdatamonthlyremittax[".exportFields"][] = "TotalAmountOfCompensation";
$tdatamonthlyremittax[".exportFields"][] = "StatutoryMinimumWage";
$tdatamonthlyremittax[".exportFields"][] = "OtherNonTaxableCompensation";
$tdatamonthlyremittax[".exportFields"][] = "TaxableCompensation";
$tdatamonthlyremittax[".exportFields"][] = "TaxRequiredToBeWithheld";
$tdatamonthlyremittax[".exportFields"][] = "TaxRefund";
$tdatamonthlyremittax[".exportFields"][] = "TaxRequiredForRemittance";
$tdatamonthlyremittax[".exportFields"][] = "TotalAmountStillDue";
$tdatamonthlyremittax[".exportFields"][] = "AuthorizedRepresentative";

$tdatamonthlyremittax[".importFields"] = array();
$tdatamonthlyremittax[".importFields"][] = "TxID";
$tdatamonthlyremittax[".importFields"][] = "Month";
$tdatamonthlyremittax[".importFields"][] = "Year";
$tdatamonthlyremittax[".importFields"][] = "EmployerID";
$tdatamonthlyremittax[".importFields"][] = "Address";
$tdatamonthlyremittax[".importFields"][] = "RDOCode";
$tdatamonthlyremittax[".importFields"][] = "AmendedReturn";
$tdatamonthlyremittax[".importFields"][] = "AnyTaxWithheld";
$tdatamonthlyremittax[".importFields"][] = "TIN";
$tdatamonthlyremittax[".importFields"][] = "CategoryWithholdingAgent";
$tdatamonthlyremittax[".importFields"][] = "AwaitingTaxRelief";
$tdatamonthlyremittax[".importFields"][] = "TotalAmountOfCompensation";
$tdatamonthlyremittax[".importFields"][] = "StatutoryMinimumWage";
$tdatamonthlyremittax[".importFields"][] = "OtherNonTaxableCompensation";
$tdatamonthlyremittax[".importFields"][] = "TaxableCompensation";
$tdatamonthlyremittax[".importFields"][] = "TaxRequiredToBeWithheld";
$tdatamonthlyremittax[".importFields"][] = "TaxRefund";
$tdatamonthlyremittax[".importFields"][] = "TaxRequiredForRemittance";
$tdatamonthlyremittax[".importFields"][] = "TotalAmountStillDue";
$tdatamonthlyremittax[".importFields"][] = "AuthorizedRepresentative";
$tdatamonthlyremittax[".importFields"][] = "TelNo";
$tdatamonthlyremittax[".importFields"][] = "ZipCode";

$tdatamonthlyremittax[".printFields"] = array();
$tdatamonthlyremittax[".printFields"][] = "TxID";
$tdatamonthlyremittax[".printFields"][] = "Month";
$tdatamonthlyremittax[".printFields"][] = "Year";
$tdatamonthlyremittax[".printFields"][] = "AmendedReturn";
$tdatamonthlyremittax[".printFields"][] = "AnyTaxWithheld";
$tdatamonthlyremittax[".printFields"][] = "EmployerID";
$tdatamonthlyremittax[".printFields"][] = "TIN";
$tdatamonthlyremittax[".printFields"][] = "TelNo";
$tdatamonthlyremittax[".printFields"][] = "Address";
$tdatamonthlyremittax[".printFields"][] = "ZipCode";
$tdatamonthlyremittax[".printFields"][] = "RDOCode";
$tdatamonthlyremittax[".printFields"][] = "CategoryWithholdingAgent";
$tdatamonthlyremittax[".printFields"][] = "AwaitingTaxRelief";
$tdatamonthlyremittax[".printFields"][] = "TotalAmountOfCompensation";
$tdatamonthlyremittax[".printFields"][] = "StatutoryMinimumWage";
$tdatamonthlyremittax[".printFields"][] = "OtherNonTaxableCompensation";
$tdatamonthlyremittax[".printFields"][] = "TaxableCompensation";
$tdatamonthlyremittax[".printFields"][] = "TaxRequiredToBeWithheld";
$tdatamonthlyremittax[".printFields"][] = "TaxRefund";
$tdatamonthlyremittax[".printFields"][] = "TaxRequiredForRemittance";
$tdatamonthlyremittax[".printFields"][] = "TotalAmountStillDue";
$tdatamonthlyremittax[".printFields"][] = "AuthorizedRepresentative";


//	TxID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TxID";
	$fdata["GoodName"] = "TxID";
	$fdata["ownerTable"] = "monthlyremittax";
	$fdata["Label"] = GetFieldLabel("monthlyremittax","TxID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TxID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TxID";

	
	
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




	$tdatamonthlyremittax["TxID"] = $fdata;
//	Month
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Month";
	$fdata["GoodName"] = "Month";
	$fdata["ownerTable"] = "monthlyremittax";
	$fdata["Label"] = GetFieldLabel("monthlyremittax","Month");
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

		$fdata["strField"] = "Month";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Month`";

	
	
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




	$tdatamonthlyremittax["Month"] = $fdata;
//	Year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Year";
	$fdata["GoodName"] = "Year";
	$fdata["ownerTable"] = "monthlyremittax";
	$fdata["Label"] = GetFieldLabel("monthlyremittax","Year");
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

		$fdata["strField"] = "Year";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Year`";

	
	
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




	$tdatamonthlyremittax["Year"] = $fdata;
//	EmployerID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "EmployerID";
	$fdata["GoodName"] = "EmployerID";
	$fdata["ownerTable"] = "monthlyremittax";
	$fdata["Label"] = GetFieldLabel("monthlyremittax","EmployerID");
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

		$fdata["strField"] = "EmployerID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmployerID";

	
	
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
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"Address", 'lookupF'=>"Address");
	$edata["autoCompleteFields"][] = array('masterF'=>"TIN", 'lookupF'=>"TIN");
	$edata["autoCompleteFields"][] = array('masterF'=>"TelNo", 'lookupF'=>"TelNo");
	$edata["autoCompleteFields"][] = array('masterF'=>"ZipCode", 'lookupF'=>"ZipCode");
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




	$tdatamonthlyremittax["EmployerID"] = $fdata;
//	Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Address";
	$fdata["GoodName"] = "Address";
	$fdata["ownerTable"] = "monthlyremittax";
	$fdata["Label"] = GetFieldLabel("monthlyremittax","Address");
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
			$edata["EditParams"].= " maxlength=200";

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




	$tdatamonthlyremittax["Address"] = $fdata;
//	RDOCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "RDOCode";
	$fdata["GoodName"] = "RDOCode";
	$fdata["ownerTable"] = "monthlyremittax";
	$fdata["Label"] = GetFieldLabel("monthlyremittax","RDOCode");
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

		$fdata["strField"] = "RDOCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RDOCode";

	
	
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




	$tdatamonthlyremittax["RDOCode"] = $fdata;
//	AmendedReturn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "AmendedReturn";
	$fdata["GoodName"] = "AmendedReturn";
	$fdata["ownerTable"] = "monthlyremittax";
	$fdata["Label"] = GetFieldLabel("monthlyremittax","AmendedReturn");
	$fdata["FieldType"] = 16;

	
	
	
			
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

		$fdata["strField"] = "AmendedReturn";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AmendedReturn";

	
	
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




	$tdatamonthlyremittax["AmendedReturn"] = $fdata;
//	AnyTaxWithheld
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "AnyTaxWithheld";
	$fdata["GoodName"] = "AnyTaxWithheld";
	$fdata["ownerTable"] = "monthlyremittax";
	$fdata["Label"] = GetFieldLabel("monthlyremittax","AnyTaxWithheld");
	$fdata["FieldType"] = 16;

	
	
	
			
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

		$fdata["strField"] = "AnyTaxWithheld";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AnyTaxWithheld";

	
	
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




	$tdatamonthlyremittax["AnyTaxWithheld"] = $fdata;
//	TIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "TIN";
	$fdata["GoodName"] = "TIN";
	$fdata["ownerTable"] = "monthlyremittax";
	$fdata["Label"] = GetFieldLabel("monthlyremittax","TIN");
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




	$tdatamonthlyremittax["TIN"] = $fdata;
//	CategoryWithholdingAgent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CategoryWithholdingAgent";
	$fdata["GoodName"] = "CategoryWithholdingAgent";
	$fdata["ownerTable"] = "monthlyremittax";
	$fdata["Label"] = GetFieldLabel("monthlyremittax","CategoryWithholdingAgent");
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

		$fdata["strField"] = "CategoryWithholdingAgent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CategoryWithholdingAgent";

	
	
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
	$edata["LookupTable"] = "withholdingcat";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "WcID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CategoryOfWithholdingAgent";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;

	

	
	
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




	$tdatamonthlyremittax["CategoryWithholdingAgent"] = $fdata;
//	AwaitingTaxRelief
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "AwaitingTaxRelief";
	$fdata["GoodName"] = "AwaitingTaxRelief";
	$fdata["ownerTable"] = "monthlyremittax";
	$fdata["Label"] = GetFieldLabel("monthlyremittax","AwaitingTaxRelief");
	$fdata["FieldType"] = 16;

	
	
	
			
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

		$fdata["strField"] = "AwaitingTaxRelief";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AwaitingTaxRelief";

	
	
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




	$tdatamonthlyremittax["AwaitingTaxRelief"] = $fdata;
//	TotalAmountOfCompensation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "TotalAmountOfCompensation";
	$fdata["GoodName"] = "TotalAmountOfCompensation";
	$fdata["ownerTable"] = "monthlyremittax";
	$fdata["Label"] = GetFieldLabel("monthlyremittax","TotalAmountOfCompensation");
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

		$fdata["strField"] = "TotalAmountOfCompensation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TotalAmountOfCompensation";

	
	
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




	$tdatamonthlyremittax["TotalAmountOfCompensation"] = $fdata;
//	StatutoryMinimumWage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "StatutoryMinimumWage";
	$fdata["GoodName"] = "StatutoryMinimumWage";
	$fdata["ownerTable"] = "monthlyremittax";
	$fdata["Label"] = GetFieldLabel("monthlyremittax","StatutoryMinimumWage");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "StatutoryMinimumWage";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "StatutoryMinimumWage";

	
	
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




	$tdatamonthlyremittax["StatutoryMinimumWage"] = $fdata;
//	OtherNonTaxableCompensation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "OtherNonTaxableCompensation";
	$fdata["GoodName"] = "OtherNonTaxableCompensation";
	$fdata["ownerTable"] = "monthlyremittax";
	$fdata["Label"] = GetFieldLabel("monthlyremittax","OtherNonTaxableCompensation");
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

		$fdata["strField"] = "OtherNonTaxableCompensation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OtherNonTaxableCompensation";

	
	
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




	$tdatamonthlyremittax["OtherNonTaxableCompensation"] = $fdata;
//	TaxableCompensation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "TaxableCompensation";
	$fdata["GoodName"] = "TaxableCompensation";
	$fdata["ownerTable"] = "monthlyremittax";
	$fdata["Label"] = GetFieldLabel("monthlyremittax","TaxableCompensation");
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

		$fdata["strField"] = "TaxableCompensation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TaxableCompensation";

	
	
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




	$tdatamonthlyremittax["TaxableCompensation"] = $fdata;
//	TaxRequiredToBeWithheld
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "TaxRequiredToBeWithheld";
	$fdata["GoodName"] = "TaxRequiredToBeWithheld";
	$fdata["ownerTable"] = "monthlyremittax";
	$fdata["Label"] = GetFieldLabel("monthlyremittax","TaxRequiredToBeWithheld");
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

		$fdata["strField"] = "TaxRequiredToBeWithheld";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TaxRequiredToBeWithheld";

	
	
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




	$tdatamonthlyremittax["TaxRequiredToBeWithheld"] = $fdata;
//	TaxRefund
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "TaxRefund";
	$fdata["GoodName"] = "TaxRefund";
	$fdata["ownerTable"] = "monthlyremittax";
	$fdata["Label"] = GetFieldLabel("monthlyremittax","TaxRefund");
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

		$fdata["strField"] = "TaxRefund";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TaxRefund";

	
	
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




	$tdatamonthlyremittax["TaxRefund"] = $fdata;
//	TaxRequiredForRemittance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "TaxRequiredForRemittance";
	$fdata["GoodName"] = "TaxRequiredForRemittance";
	$fdata["ownerTable"] = "monthlyremittax";
	$fdata["Label"] = GetFieldLabel("monthlyremittax","TaxRequiredForRemittance");
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

		$fdata["strField"] = "TaxRequiredForRemittance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TaxRequiredForRemittance";

	
	
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




	$tdatamonthlyremittax["TaxRequiredForRemittance"] = $fdata;
//	TotalAmountStillDue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "TotalAmountStillDue";
	$fdata["GoodName"] = "TotalAmountStillDue";
	$fdata["ownerTable"] = "monthlyremittax";
	$fdata["Label"] = GetFieldLabel("monthlyremittax","TotalAmountStillDue");
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

		$fdata["strField"] = "TotalAmountStillDue";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TotalAmountStillDue";

	
	
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




	$tdatamonthlyremittax["TotalAmountStillDue"] = $fdata;
//	AuthorizedRepresentative
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "AuthorizedRepresentative";
	$fdata["GoodName"] = "AuthorizedRepresentative";
	$fdata["ownerTable"] = "monthlyremittax";
	$fdata["Label"] = GetFieldLabel("monthlyremittax","AuthorizedRepresentative");
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

		$fdata["strField"] = "AuthorizedRepresentative";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AuthorizedRepresentative";

	
	
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




	$tdatamonthlyremittax["AuthorizedRepresentative"] = $fdata;
//	TelNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "TelNo";
	$fdata["GoodName"] = "TelNo";
	$fdata["ownerTable"] = "monthlyremittax";
	$fdata["Label"] = GetFieldLabel("monthlyremittax","TelNo");
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




	$tdatamonthlyremittax["TelNo"] = $fdata;
//	ZipCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "ZipCode";
	$fdata["GoodName"] = "ZipCode";
	$fdata["ownerTable"] = "monthlyremittax";
	$fdata["Label"] = GetFieldLabel("monthlyremittax","ZipCode");
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




	$tdatamonthlyremittax["ZipCode"] = $fdata;


$tables_data["monthlyremittax"]=&$tdatamonthlyremittax;
$field_labels["monthlyremittax"] = &$fieldLabelsmonthlyremittax;
$fieldToolTips["monthlyremittax"] = &$fieldToolTipsmonthlyremittax;
$placeHolders["monthlyremittax"] = &$placeHoldersmonthlyremittax;
$page_titles["monthlyremittax"] = &$pageTitlesmonthlyremittax;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["monthlyremittax"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["monthlyremittax"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_monthlyremittax()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TxID,  `Month`,  `Year`,  EmployerID,  Address,  RDOCode,  AmendedReturn,  AnyTaxWithheld,  TIN,  CategoryWithholdingAgent,  AwaitingTaxRelief,  TotalAmountOfCompensation,  StatutoryMinimumWage,  OtherNonTaxableCompensation,  TaxableCompensation,  TaxRequiredToBeWithheld,  TaxRefund,  TaxRequiredForRemittance,  TotalAmountStillDue,  AuthorizedRepresentative,  TelNo,  ZipCode";
$proto0["m_strFrom"] = "FROM monthlyremittax";
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
	"m_strName" => "TxID",
	"m_strTable" => "monthlyremittax",
	"m_srcTableName" => "monthlyremittax"
));

$proto6["m_sql"] = "TxID";
$proto6["m_srcTableName"] = "monthlyremittax";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Month",
	"m_strTable" => "monthlyremittax",
	"m_srcTableName" => "monthlyremittax"
));

$proto8["m_sql"] = "`Month`";
$proto8["m_srcTableName"] = "monthlyremittax";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Year",
	"m_strTable" => "monthlyremittax",
	"m_srcTableName" => "monthlyremittax"
));

$proto10["m_sql"] = "`Year`";
$proto10["m_srcTableName"] = "monthlyremittax";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployerID",
	"m_strTable" => "monthlyremittax",
	"m_srcTableName" => "monthlyremittax"
));

$proto12["m_sql"] = "EmployerID";
$proto12["m_srcTableName"] = "monthlyremittax";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Address",
	"m_strTable" => "monthlyremittax",
	"m_srcTableName" => "monthlyremittax"
));

$proto14["m_sql"] = "Address";
$proto14["m_srcTableName"] = "monthlyremittax";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "RDOCode",
	"m_strTable" => "monthlyremittax",
	"m_srcTableName" => "monthlyremittax"
));

$proto16["m_sql"] = "RDOCode";
$proto16["m_srcTableName"] = "monthlyremittax";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "AmendedReturn",
	"m_strTable" => "monthlyremittax",
	"m_srcTableName" => "monthlyremittax"
));

$proto18["m_sql"] = "AmendedReturn";
$proto18["m_srcTableName"] = "monthlyremittax";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "AnyTaxWithheld",
	"m_strTable" => "monthlyremittax",
	"m_srcTableName" => "monthlyremittax"
));

$proto20["m_sql"] = "AnyTaxWithheld";
$proto20["m_srcTableName"] = "monthlyremittax";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "TIN",
	"m_strTable" => "monthlyremittax",
	"m_srcTableName" => "monthlyremittax"
));

$proto22["m_sql"] = "TIN";
$proto22["m_srcTableName"] = "monthlyremittax";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CategoryWithholdingAgent",
	"m_strTable" => "monthlyremittax",
	"m_srcTableName" => "monthlyremittax"
));

$proto24["m_sql"] = "CategoryWithholdingAgent";
$proto24["m_srcTableName"] = "monthlyremittax";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "AwaitingTaxRelief",
	"m_strTable" => "monthlyremittax",
	"m_srcTableName" => "monthlyremittax"
));

$proto26["m_sql"] = "AwaitingTaxRelief";
$proto26["m_srcTableName"] = "monthlyremittax";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalAmountOfCompensation",
	"m_strTable" => "monthlyremittax",
	"m_srcTableName" => "monthlyremittax"
));

$proto28["m_sql"] = "TotalAmountOfCompensation";
$proto28["m_srcTableName"] = "monthlyremittax";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "StatutoryMinimumWage",
	"m_strTable" => "monthlyremittax",
	"m_srcTableName" => "monthlyremittax"
));

$proto30["m_sql"] = "StatutoryMinimumWage";
$proto30["m_srcTableName"] = "monthlyremittax";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "OtherNonTaxableCompensation",
	"m_strTable" => "monthlyremittax",
	"m_srcTableName" => "monthlyremittax"
));

$proto32["m_sql"] = "OtherNonTaxableCompensation";
$proto32["m_srcTableName"] = "monthlyremittax";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "TaxableCompensation",
	"m_strTable" => "monthlyremittax",
	"m_srcTableName" => "monthlyremittax"
));

$proto34["m_sql"] = "TaxableCompensation";
$proto34["m_srcTableName"] = "monthlyremittax";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "TaxRequiredToBeWithheld",
	"m_strTable" => "monthlyremittax",
	"m_srcTableName" => "monthlyremittax"
));

$proto36["m_sql"] = "TaxRequiredToBeWithheld";
$proto36["m_srcTableName"] = "monthlyremittax";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "TaxRefund",
	"m_strTable" => "monthlyremittax",
	"m_srcTableName" => "monthlyremittax"
));

$proto38["m_sql"] = "TaxRefund";
$proto38["m_srcTableName"] = "monthlyremittax";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "TaxRequiredForRemittance",
	"m_strTable" => "monthlyremittax",
	"m_srcTableName" => "monthlyremittax"
));

$proto40["m_sql"] = "TaxRequiredForRemittance";
$proto40["m_srcTableName"] = "monthlyremittax";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalAmountStillDue",
	"m_strTable" => "monthlyremittax",
	"m_srcTableName" => "monthlyremittax"
));

$proto42["m_sql"] = "TotalAmountStillDue";
$proto42["m_srcTableName"] = "monthlyremittax";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "AuthorizedRepresentative",
	"m_strTable" => "monthlyremittax",
	"m_srcTableName" => "monthlyremittax"
));

$proto44["m_sql"] = "AuthorizedRepresentative";
$proto44["m_srcTableName"] = "monthlyremittax";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "TelNo",
	"m_strTable" => "monthlyremittax",
	"m_srcTableName" => "monthlyremittax"
));

$proto46["m_sql"] = "TelNo";
$proto46["m_srcTableName"] = "monthlyremittax";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "ZipCode",
	"m_strTable" => "monthlyremittax",
	"m_srcTableName" => "monthlyremittax"
));

$proto48["m_sql"] = "ZipCode";
$proto48["m_srcTableName"] = "monthlyremittax";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto50=array();
$proto50["m_link"] = "SQLL_MAIN";
			$proto51=array();
$proto51["m_strName"] = "monthlyremittax";
$proto51["m_srcTableName"] = "monthlyremittax";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "TxID";
$proto51["m_columns"][] = "Month";
$proto51["m_columns"][] = "Year";
$proto51["m_columns"][] = "EmployerID";
$proto51["m_columns"][] = "Employer";
$proto51["m_columns"][] = "Address";
$proto51["m_columns"][] = "RDOCode";
$proto51["m_columns"][] = "AmendedReturn";
$proto51["m_columns"][] = "AnyTaxWithheld";
$proto51["m_columns"][] = "TIN";
$proto51["m_columns"][] = "CategoryWithholdingAgent";
$proto51["m_columns"][] = "AwaitingTaxRelief";
$proto51["m_columns"][] = "TotalAmountOfCompensation";
$proto51["m_columns"][] = "StatutoryMinimumWage";
$proto51["m_columns"][] = "OtherNonTaxableCompensation";
$proto51["m_columns"][] = "TaxableCompensation";
$proto51["m_columns"][] = "TaxRequiredToBeWithheld";
$proto51["m_columns"][] = "TaxRefund";
$proto51["m_columns"][] = "TaxRequiredForRemittance";
$proto51["m_columns"][] = "TotalAmountStillDue";
$proto51["m_columns"][] = "AuthorizedRepresentative";
$proto51["m_columns"][] = "TelNo";
$proto51["m_columns"][] = "ZipCode";
$proto51["m_columns"][] = "Deminimis";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "monthlyremittax";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "monthlyremittax";
$proto52=array();
$proto52["m_sql"] = "";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="monthlyremittax";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_monthlyremittax = createSqlQuery_monthlyremittax();


	
		;

																						

$tdatamonthlyremittax[".sqlquery"] = $queryData_monthlyremittax;

include_once(getabspath("include/monthlyremittax_events.php"));
$tableEvents["monthlyremittax"] = new eventclass_monthlyremittax;
$tdatamonthlyremittax[".hasEvents"] = true;

?>