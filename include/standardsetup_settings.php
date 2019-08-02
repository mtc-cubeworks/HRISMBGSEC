<?php
require_once(getabspath("classes/cipherer.php"));




$tdatastandardsetup = array();
	$tdatastandardsetup[".truncateText"] = true;
	$tdatastandardsetup[".NumberOfChars"] = 80;
	$tdatastandardsetup[".ShortName"] = "standardsetup";
	$tdatastandardsetup[".OwnerID"] = "";
	$tdatastandardsetup[".OriginalTable"] = "standardsetup";

//	field labels
$fieldLabelsstandardsetup = array();
$fieldToolTipsstandardsetup = array();
$pageTitlesstandardsetup = array();
$placeHoldersstandardsetup = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstandardsetup["English"] = array();
	$fieldToolTipsstandardsetup["English"] = array();
	$placeHoldersstandardsetup["English"] = array();
	$pageTitlesstandardsetup["English"] = array();
	$fieldLabelsstandardsetup["English"]["SID"] = "SID";
	$fieldToolTipsstandardsetup["English"]["SID"] = "";
	$placeHoldersstandardsetup["English"]["SID"] = "";
	$fieldLabelsstandardsetup["English"]["NightDiffStartTime"] = "Night Diff Start Time";
	$fieldToolTipsstandardsetup["English"]["NightDiffStartTime"] = "";
	$placeHoldersstandardsetup["English"]["NightDiffStartTime"] = "";
	$fieldLabelsstandardsetup["English"]["NightDiffEndTime"] = "Night Diff End Time";
	$fieldToolTipsstandardsetup["English"]["NightDiffEndTime"] = "";
	$placeHoldersstandardsetup["English"]["NightDiffEndTime"] = "";
	$fieldLabelsstandardsetup["English"]["WorkingDaysInYear"] = "Working Days In Year (Monthly)";
	$fieldToolTipsstandardsetup["English"]["WorkingDaysInYear"] = "";
	$placeHoldersstandardsetup["English"]["WorkingDaysInYear"] = "";
	$fieldLabelsstandardsetup["English"]["AllowableLeaveFrom"] = "Allowable Leave From";
	$fieldToolTipsstandardsetup["English"]["AllowableLeaveFrom"] = "";
	$placeHoldersstandardsetup["English"]["AllowableLeaveFrom"] = "";
	$fieldLabelsstandardsetup["English"]["AllowableLeaveTo"] = "Allowable Leave To";
	$fieldToolTipsstandardsetup["English"]["AllowableLeaveTo"] = "";
	$placeHoldersstandardsetup["English"]["AllowableLeaveTo"] = "";
	$fieldLabelsstandardsetup["English"]["RegOTFactor"] = "Reg OT";
	$fieldToolTipsstandardsetup["English"]["RegOTFactor"] = "";
	$placeHoldersstandardsetup["English"]["RegOTFactor"] = "";
	$fieldLabelsstandardsetup["English"]["RegNDiffFactor"] = "Reg ND";
	$fieldToolTipsstandardsetup["English"]["RegNDiffFactor"] = "";
	$placeHoldersstandardsetup["English"]["RegNDiffFactor"] = "";
	$fieldLabelsstandardsetup["English"]["RHOTFactor"] = "RH-OT";
	$fieldToolTipsstandardsetup["English"]["RHOTFactor"] = "";
	$placeHoldersstandardsetup["English"]["RHOTFactor"] = "";
	$fieldLabelsstandardsetup["English"]["SHOTFactor"] = "SH-OT";
	$fieldToolTipsstandardsetup["English"]["SHOTFactor"] = "";
	$placeHoldersstandardsetup["English"]["SHOTFactor"] = "";
	$fieldLabelsstandardsetup["English"]["CHOTFactor"] = "CH-OT";
	$fieldToolTipsstandardsetup["English"]["CHOTFactor"] = "";
	$placeHoldersstandardsetup["English"]["CHOTFactor"] = "";
	$fieldLabelsstandardsetup["English"]["RHNDiffFactor"] = "RH-ND";
	$fieldToolTipsstandardsetup["English"]["RHNDiffFactor"] = "";
	$placeHoldersstandardsetup["English"]["RHNDiffFactor"] = "";
	$fieldLabelsstandardsetup["English"]["SHNDiffFactor"] = "SH-ND";
	$fieldToolTipsstandardsetup["English"]["SHNDiffFactor"] = "";
	$placeHoldersstandardsetup["English"]["SHNDiffFactor"] = "";
	$fieldLabelsstandardsetup["English"]["CHNDiffFactor"] = "CH-ND";
	$fieldToolTipsstandardsetup["English"]["CHNDiffFactor"] = "";
	$placeHoldersstandardsetup["English"]["CHNDiffFactor"] = "";
	$fieldLabelsstandardsetup["English"]["RHFactor"] = "Regular Holiday";
	$fieldToolTipsstandardsetup["English"]["RHFactor"] = "";
	$placeHoldersstandardsetup["English"]["RHFactor"] = "";
	$fieldLabelsstandardsetup["English"]["SHFactor"] = "Special Holiday";
	$fieldToolTipsstandardsetup["English"]["SHFactor"] = "";
	$placeHoldersstandardsetup["English"]["SHFactor"] = "";
	$fieldLabelsstandardsetup["English"]["CHFactor"] = "Company Holiday";
	$fieldToolTipsstandardsetup["English"]["CHFactor"] = "";
	$placeHoldersstandardsetup["English"]["CHFactor"] = "";
	$fieldLabelsstandardsetup["English"]["RDFactor"] = "Rest Day";
	$fieldToolTipsstandardsetup["English"]["RDFactor"] = "";
	$placeHoldersstandardsetup["English"]["RDFactor"] = "";
	$fieldLabelsstandardsetup["English"]["RDOTFactor"] = "RD-OT";
	$fieldToolTipsstandardsetup["English"]["RDOTFactor"] = "";
	$placeHoldersstandardsetup["English"]["RDOTFactor"] = "";
	$fieldLabelsstandardsetup["English"]["RDNDiffFactor"] = "RD-ND";
	$fieldToolTipsstandardsetup["English"]["RDNDiffFactor"] = "";
	$placeHoldersstandardsetup["English"]["RDNDiffFactor"] = "";
	$fieldLabelsstandardsetup["English"]["RHRDFactor"] = "RH-RD";
	$fieldToolTipsstandardsetup["English"]["RHRDFactor"] = "";
	$placeHoldersstandardsetup["English"]["RHRDFactor"] = "";
	$fieldLabelsstandardsetup["English"]["RHRDOTFactor"] = "RH-RD-OT";
	$fieldToolTipsstandardsetup["English"]["RHRDOTFactor"] = "";
	$placeHoldersstandardsetup["English"]["RHRDOTFactor"] = "";
	$fieldLabelsstandardsetup["English"]["SHRDFactor"] = "SH-RD";
	$fieldToolTipsstandardsetup["English"]["SHRDFactor"] = "";
	$placeHoldersstandardsetup["English"]["SHRDFactor"] = "";
	$fieldLabelsstandardsetup["English"]["SHRDOTFactor"] = "SH-RD-OT";
	$fieldToolTipsstandardsetup["English"]["SHRDOTFactor"] = "";
	$placeHoldersstandardsetup["English"]["SHRDOTFactor"] = "";
	$fieldLabelsstandardsetup["English"]["WorkingDaysInYearDailies"] = "Working Days In Year (Dailies)";
	$fieldToolTipsstandardsetup["English"]["WorkingDaysInYearDailies"] = "";
	$placeHoldersstandardsetup["English"]["WorkingDaysInYearDailies"] = "";
	$fieldLabelsstandardsetup["English"]["ReqBeforeHoliday"] = "Req'd Duty Before Holiday";
	$fieldToolTipsstandardsetup["English"]["ReqBeforeHoliday"] = "";
	$placeHoldersstandardsetup["English"]["ReqBeforeHoliday"] = "";
	$fieldLabelsstandardsetup["English"]["SHFactorDaily"] = "Special Holiday Daily";
	$fieldToolTipsstandardsetup["English"]["SHFactorDaily"] = "";
	$placeHoldersstandardsetup["English"]["SHFactorDaily"] = "";
	$fieldLabelsstandardsetup["English"]["SHOTFactorDaily"] = "SH-OT Daily";
	$fieldToolTipsstandardsetup["English"]["SHOTFactorDaily"] = "";
	$placeHoldersstandardsetup["English"]["SHOTFactorDaily"] = "";
	$fieldLabelsstandardsetup["English"]["CHFactorDaily"] = "Company Holiday Daily";
	$fieldToolTipsstandardsetup["English"]["CHFactorDaily"] = "";
	$placeHoldersstandardsetup["English"]["CHFactorDaily"] = "";
	$fieldLabelsstandardsetup["English"]["SHRDFactorDaily"] = "SH-RD Daily";
	$fieldToolTipsstandardsetup["English"]["SHRDFactorDaily"] = "";
	$placeHoldersstandardsetup["English"]["SHRDFactorDaily"] = "";
	$fieldLabelsstandardsetup["English"]["SHRDOTFactorDaily"] = "SH-RD-OT Daily";
	$fieldToolTipsstandardsetup["English"]["SHRDOTFactorDaily"] = "";
	$placeHoldersstandardsetup["English"]["SHRDOTFactorDaily"] = "";
	$fieldLabelsstandardsetup["English"]["CHOTFactorDaily"] = "CH-OT Daily";
	$fieldToolTipsstandardsetup["English"]["CHOTFactorDaily"] = "";
	$placeHoldersstandardsetup["English"]["CHOTFactorDaily"] = "";
	$fieldLabelsstandardsetup["English"]["PreTimeInMins"] = "Pre Log-In Mins";
	$fieldToolTipsstandardsetup["English"]["PreTimeInMins"] = "";
	$placeHoldersstandardsetup["English"]["PreTimeInMins"] = "";
	$fieldLabelsstandardsetup["English"]["BonusAnnualLimit"] = "Bonus Annual Limit";
	$fieldToolTipsstandardsetup["English"]["BonusAnnualLimit"] = "";
	$placeHoldersstandardsetup["English"]["BonusAnnualLimit"] = "";
	$fieldLabelsstandardsetup["English"]["RegNDOTFactor"] = "Reg ND-OT";
	$fieldToolTipsstandardsetup["English"]["RegNDOTFactor"] = "";
	$placeHoldersstandardsetup["English"]["RegNDOTFactor"] = "";
	$fieldLabelsstandardsetup["English"]["RHNDOTFactor"] = "RH-ND-OT";
	$fieldToolTipsstandardsetup["English"]["RHNDOTFactor"] = "";
	$placeHoldersstandardsetup["English"]["RHNDOTFactor"] = "";
	$fieldLabelsstandardsetup["English"]["SHNDOTFactor"] = "SH-ND-OT";
	$fieldToolTipsstandardsetup["English"]["SHNDOTFactor"] = "";
	$placeHoldersstandardsetup["English"]["SHNDOTFactor"] = "";
	$fieldLabelsstandardsetup["English"]["CHNDOTFactor"] = "CH-ND-OT";
	$fieldToolTipsstandardsetup["English"]["CHNDOTFactor"] = "";
	$placeHoldersstandardsetup["English"]["CHNDOTFactor"] = "";
	$fieldLabelsstandardsetup["English"]["RDNDOTFactor"] = "RD-ND-OT";
	$fieldToolTipsstandardsetup["English"]["RDNDOTFactor"] = "";
	$placeHoldersstandardsetup["English"]["RDNDOTFactor"] = "";
	$fieldLabelsstandardsetup["English"]["DoubleHoliday"] = "Double Holiday";
	$fieldToolTipsstandardsetup["English"]["DoubleHoliday"] = "";
	$placeHoldersstandardsetup["English"]["DoubleHoliday"] = "";
	$fieldLabelsstandardsetup["English"]["DoubleHolidayRD"] = "DH-RD";
	$fieldToolTipsstandardsetup["English"]["DoubleHolidayRD"] = "";
	$placeHoldersstandardsetup["English"]["DoubleHolidayRD"] = "";
	$fieldLabelsstandardsetup["English"]["DoubleHolidayOT"] = "DH-OT";
	$fieldToolTipsstandardsetup["English"]["DoubleHolidayOT"] = "";
	$placeHoldersstandardsetup["English"]["DoubleHolidayOT"] = "";
	$fieldLabelsstandardsetup["English"]["DoubleHolidayRDOT"] = "DH-RD-OT";
	$fieldToolTipsstandardsetup["English"]["DoubleHolidayRDOT"] = "";
	$placeHoldersstandardsetup["English"]["DoubleHolidayRDOT"] = "";
	$fieldLabelsstandardsetup["English"]["SHRDNDFactor"] = "SH-RD-ND";
	$fieldToolTipsstandardsetup["English"]["SHRDNDFactor"] = "";
	$placeHoldersstandardsetup["English"]["SHRDNDFactor"] = "";
	$fieldLabelsstandardsetup["English"]["RHRDNDFactor"] = "RH-RD-ND";
	$fieldToolTipsstandardsetup["English"]["RHRDNDFactor"] = "";
	$placeHoldersstandardsetup["English"]["RHRDNDFactor"] = "";
	$fieldLabelsstandardsetup["English"]["SHRDNDOTFactor"] = "SH-RD-ND-OT";
	$fieldToolTipsstandardsetup["English"]["SHRDNDOTFactor"] = "";
	$placeHoldersstandardsetup["English"]["SHRDNDOTFactor"] = "";
	$fieldLabelsstandardsetup["English"]["RHRDNDOTFacotr"] = "RH-RD-ND-OT";
	$fieldToolTipsstandardsetup["English"]["RHRDNDOTFacotr"] = "";
	$placeHoldersstandardsetup["English"]["RHRDNDOTFacotr"] = "";
	$fieldLabelsstandardsetup["English"]["DoubleHolidayND"] = "DH-ND";
	$fieldToolTipsstandardsetup["English"]["DoubleHolidayND"] = "";
	$placeHoldersstandardsetup["English"]["DoubleHolidayND"] = "";
	$fieldLabelsstandardsetup["English"]["DoubleHolidayRDND"] = "DH-RD-ND";
	$fieldToolTipsstandardsetup["English"]["DoubleHolidayRDND"] = "";
	$placeHoldersstandardsetup["English"]["DoubleHolidayRDND"] = "";
	$fieldLabelsstandardsetup["English"]["DoubleHolidayNDOT"] = "DH-ND-OT";
	$fieldToolTipsstandardsetup["English"]["DoubleHolidayNDOT"] = "";
	$placeHoldersstandardsetup["English"]["DoubleHolidayNDOT"] = "";
	$fieldLabelsstandardsetup["English"]["DoubleHolidayRDNDOT"] = "DH-RD-ND-OT";
	$fieldToolTipsstandardsetup["English"]["DoubleHolidayRDNDOT"] = "";
	$placeHoldersstandardsetup["English"]["DoubleHolidayRDNDOT"] = "";
	if (count($fieldToolTipsstandardsetup["English"]))
		$tdatastandardsetup[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsstandardsetup[""] = array();
	$fieldToolTipsstandardsetup[""] = array();
	$placeHoldersstandardsetup[""] = array();
	$pageTitlesstandardsetup[""] = array();
	$fieldLabelsstandardsetup[""]["RegNDOTFactor"] = "Reg NDOTFactor";
	$fieldToolTipsstandardsetup[""]["RegNDOTFactor"] = "";
	$placeHoldersstandardsetup[""]["RegNDOTFactor"] = "";
	$fieldLabelsstandardsetup[""]["RHNDOTFactor"] = "RHNDOTFactor";
	$fieldToolTipsstandardsetup[""]["RHNDOTFactor"] = "";
	$placeHoldersstandardsetup[""]["RHNDOTFactor"] = "";
	$fieldLabelsstandardsetup[""]["SHNDOTFactor"] = "SHNDOTFactor";
	$fieldToolTipsstandardsetup[""]["SHNDOTFactor"] = "";
	$placeHoldersstandardsetup[""]["SHNDOTFactor"] = "";
	$fieldLabelsstandardsetup[""]["CHNDOTFactor"] = "CHNDOTFactor";
	$fieldToolTipsstandardsetup[""]["CHNDOTFactor"] = "";
	$placeHoldersstandardsetup[""]["CHNDOTFactor"] = "";
	$fieldLabelsstandardsetup[""]["RDNDOTFactor"] = "RDNDOTFactor";
	$fieldToolTipsstandardsetup[""]["RDNDOTFactor"] = "";
	$placeHoldersstandardsetup[""]["RDNDOTFactor"] = "";
	$fieldLabelsstandardsetup[""]["DoubleHoliday"] = "Double Holiday";
	$fieldToolTipsstandardsetup[""]["DoubleHoliday"] = "";
	$placeHoldersstandardsetup[""]["DoubleHoliday"] = "";
	$fieldLabelsstandardsetup[""]["DoubleHolidayRD"] = "Double Holiday RD";
	$fieldToolTipsstandardsetup[""]["DoubleHolidayRD"] = "";
	$placeHoldersstandardsetup[""]["DoubleHolidayRD"] = "";
	$fieldLabelsstandardsetup[""]["DoubleHolidayOT"] = "Double Holiday OT";
	$fieldToolTipsstandardsetup[""]["DoubleHolidayOT"] = "";
	$placeHoldersstandardsetup[""]["DoubleHolidayOT"] = "";
	$fieldLabelsstandardsetup[""]["DoubleHolidayRDOT"] = "Double Holiday RDOT";
	$fieldToolTipsstandardsetup[""]["DoubleHolidayRDOT"] = "";
	$placeHoldersstandardsetup[""]["DoubleHolidayRDOT"] = "";
	$fieldLabelsstandardsetup[""]["SHRDNDFactor"] = "SHRDNDFactor";
	$fieldToolTipsstandardsetup[""]["SHRDNDFactor"] = "";
	$placeHoldersstandardsetup[""]["SHRDNDFactor"] = "";
	$fieldLabelsstandardsetup[""]["RHRDNDFactor"] = "RHRDNDFactor";
	$fieldToolTipsstandardsetup[""]["RHRDNDFactor"] = "";
	$placeHoldersstandardsetup[""]["RHRDNDFactor"] = "";
	$fieldLabelsstandardsetup[""]["SHRDNDOTFactor"] = "SHRDNDOTFactor";
	$fieldToolTipsstandardsetup[""]["SHRDNDOTFactor"] = "";
	$placeHoldersstandardsetup[""]["SHRDNDOTFactor"] = "";
	$fieldLabelsstandardsetup[""]["RHRDNDOTFacotr"] = "RHRDNDOTFacotr";
	$fieldToolTipsstandardsetup[""]["RHRDNDOTFacotr"] = "";
	$placeHoldersstandardsetup[""]["RHRDNDOTFacotr"] = "";
	$fieldLabelsstandardsetup[""]["DoubleHolidayND"] = "Double Holiday ND";
	$fieldToolTipsstandardsetup[""]["DoubleHolidayND"] = "";
	$placeHoldersstandardsetup[""]["DoubleHolidayND"] = "";
	$fieldLabelsstandardsetup[""]["DoubleHolidayRDND"] = "Double Holiday RDND";
	$fieldToolTipsstandardsetup[""]["DoubleHolidayRDND"] = "";
	$placeHoldersstandardsetup[""]["DoubleHolidayRDND"] = "";
	$fieldLabelsstandardsetup[""]["DoubleHolidayNDOT"] = "Double Holiday NDOT";
	$fieldToolTipsstandardsetup[""]["DoubleHolidayNDOT"] = "";
	$placeHoldersstandardsetup[""]["DoubleHolidayNDOT"] = "";
	$fieldLabelsstandardsetup[""]["DoubleHolidayRDNDOT"] = "Double Holiday RDNDOT";
	$fieldToolTipsstandardsetup[""]["DoubleHolidayRDNDOT"] = "";
	$placeHoldersstandardsetup[""]["DoubleHolidayRDNDOT"] = "";
	if (count($fieldToolTipsstandardsetup[""]))
		$tdatastandardsetup[".isUseToolTips"] = true;
}


	$tdatastandardsetup[".NCSearch"] = true;



$tdatastandardsetup[".shortTableName"] = "standardsetup";
$tdatastandardsetup[".nSecOptions"] = 0;
$tdatastandardsetup[".recsPerRowPrint"] = 1;
$tdatastandardsetup[".mainTableOwnerID"] = "";
$tdatastandardsetup[".moveNext"] = 1;
$tdatastandardsetup[".entityType"] = 0;

$tdatastandardsetup[".strOriginalTableName"] = "standardsetup";

	



$tdatastandardsetup[".showAddInPopup"] = false;

$tdatastandardsetup[".showEditInPopup"] = false;

$tdatastandardsetup[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatastandardsetup[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatastandardsetup[".fieldsForRegister"] = array();

$tdatastandardsetup[".listAjax"] = false;

	$tdatastandardsetup[".audit"] = false;

	$tdatastandardsetup[".locking"] = false;

$tdatastandardsetup[".edit"] = true;
$tdatastandardsetup[".afterEditAction"] = 1;
$tdatastandardsetup[".closePopupAfterEdit"] = 1;
$tdatastandardsetup[".afterEditActionDetTable"] = "";

$tdatastandardsetup[".add"] = true;
$tdatastandardsetup[".afterAddAction"] = 1;
$tdatastandardsetup[".closePopupAfterAdd"] = 1;
$tdatastandardsetup[".afterAddActionDetTable"] = "";

$tdatastandardsetup[".list"] = true;

$tdatastandardsetup[".inlineEdit"] = true;

$tdatastandardsetup[".updateSelected"] = true;

$tdatastandardsetup[".reorderRecordsByHeader"] = true;


$tdatastandardsetup[".exportFormatting"] = 2;
$tdatastandardsetup[".exportDelimiter"] = ",";
		
$tdatastandardsetup[".inlineAdd"] = true;
$tdatastandardsetup[".view"] = true;

$tdatastandardsetup[".import"] = true;

$tdatastandardsetup[".exportTo"] = true;

$tdatastandardsetup[".printFriendly"] = true;

$tdatastandardsetup[".delete"] = true;

$tdatastandardsetup[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatastandardsetup[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatastandardsetup[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatastandardsetup[".searchSaving"] = false;
//

$tdatastandardsetup[".showSearchPanel"] = true;
		$tdatastandardsetup[".flexibleSearch"] = true;

$tdatastandardsetup[".isUseAjaxSuggest"] = true;

$tdatastandardsetup[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																														

$tdatastandardsetup[".ajaxCodeSnippetAdded"] = false;

$tdatastandardsetup[".buttonsAdded"] = false;

$tdatastandardsetup[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastandardsetup[".isUseTimeForSearch"] = false;





$tdatastandardsetup[".allSearchFields"] = array();
$tdatastandardsetup[".filterFields"] = array();
$tdatastandardsetup[".requiredSearchFields"] = array();

$tdatastandardsetup[".allSearchFields"][] = "SID";
	$tdatastandardsetup[".allSearchFields"][] = "PreTimeInMins";
	$tdatastandardsetup[".allSearchFields"][] = "WorkingDaysInYear";
	$tdatastandardsetup[".allSearchFields"][] = "WorkingDaysInYearDailies";
	$tdatastandardsetup[".allSearchFields"][] = "AllowableLeaveFrom";
	$tdatastandardsetup[".allSearchFields"][] = "AllowableLeaveTo";
	$tdatastandardsetup[".allSearchFields"][] = "RHFactor";
	$tdatastandardsetup[".allSearchFields"][] = "SHFactor";
	$tdatastandardsetup[".allSearchFields"][] = "SHFactorDaily";
	$tdatastandardsetup[".allSearchFields"][] = "CHFactor";
	$tdatastandardsetup[".allSearchFields"][] = "CHFactorDaily";
	$tdatastandardsetup[".allSearchFields"][] = "DoubleHoliday";
	$tdatastandardsetup[".allSearchFields"][] = "ReqBeforeHoliday";
	$tdatastandardsetup[".allSearchFields"][] = "RegOTFactor";
	$tdatastandardsetup[".allSearchFields"][] = "RHOTFactor";
	$tdatastandardsetup[".allSearchFields"][] = "SHOTFactor";
	$tdatastandardsetup[".allSearchFields"][] = "SHOTFactorDaily";
	$tdatastandardsetup[".allSearchFields"][] = "CHOTFactor";
	$tdatastandardsetup[".allSearchFields"][] = "CHOTFactorDaily";
	$tdatastandardsetup[".allSearchFields"][] = "RDOTFactor";
	$tdatastandardsetup[".allSearchFields"][] = "RHRDOTFactor";
	$tdatastandardsetup[".allSearchFields"][] = "SHRDOTFactor";
	$tdatastandardsetup[".allSearchFields"][] = "SHRDOTFactorDaily";
	$tdatastandardsetup[".allSearchFields"][] = "RHNDOTFactor";
	$tdatastandardsetup[".allSearchFields"][] = "SHNDOTFactor";
	$tdatastandardsetup[".allSearchFields"][] = "CHNDOTFactor";
	$tdatastandardsetup[".allSearchFields"][] = "RDNDOTFactor";
	$tdatastandardsetup[".allSearchFields"][] = "RHRDNDOTFacotr";
	$tdatastandardsetup[".allSearchFields"][] = "SHRDNDOTFactor";
	$tdatastandardsetup[".allSearchFields"][] = "DoubleHolidayOT";
	$tdatastandardsetup[".allSearchFields"][] = "DoubleHolidayRDOT";
	$tdatastandardsetup[".allSearchFields"][] = "DoubleHolidayNDOT";
	$tdatastandardsetup[".allSearchFields"][] = "DoubleHolidayRDNDOT";
	$tdatastandardsetup[".allSearchFields"][] = "NightDiffStartTime";
	$tdatastandardsetup[".allSearchFields"][] = "NightDiffEndTime";
	$tdatastandardsetup[".allSearchFields"][] = "RegNDiffFactor";
	$tdatastandardsetup[".allSearchFields"][] = "RHNDiffFactor";
	$tdatastandardsetup[".allSearchFields"][] = "SHNDiffFactor";
	$tdatastandardsetup[".allSearchFields"][] = "CHNDiffFactor";
	$tdatastandardsetup[".allSearchFields"][] = "RDNDiffFactor";
	$tdatastandardsetup[".allSearchFields"][] = "RegNDOTFactor";
	$tdatastandardsetup[".allSearchFields"][] = "RHRDNDFactor";
	$tdatastandardsetup[".allSearchFields"][] = "SHRDNDFactor";
	$tdatastandardsetup[".allSearchFields"][] = "DoubleHolidayND";
	$tdatastandardsetup[".allSearchFields"][] = "DoubleHolidayRDND";
	$tdatastandardsetup[".allSearchFields"][] = "RDFactor";
	$tdatastandardsetup[".allSearchFields"][] = "RHRDFactor";
	$tdatastandardsetup[".allSearchFields"][] = "SHRDFactor";
	$tdatastandardsetup[".allSearchFields"][] = "SHRDFactorDaily";
	$tdatastandardsetup[".allSearchFields"][] = "DoubleHolidayRD";
	$tdatastandardsetup[".allSearchFields"][] = "BonusAnnualLimit";
	

$tdatastandardsetup[".googleLikeFields"] = array();
$tdatastandardsetup[".googleLikeFields"][] = "SID";
$tdatastandardsetup[".googleLikeFields"][] = "RegOTFactor";
$tdatastandardsetup[".googleLikeFields"][] = "RegNDiffFactor";
$tdatastandardsetup[".googleLikeFields"][] = "NightDiffStartTime";
$tdatastandardsetup[".googleLikeFields"][] = "NightDiffEndTime";
$tdatastandardsetup[".googleLikeFields"][] = "WorkingDaysInYear";
$tdatastandardsetup[".googleLikeFields"][] = "AllowableLeaveFrom";
$tdatastandardsetup[".googleLikeFields"][] = "AllowableLeaveTo";
$tdatastandardsetup[".googleLikeFields"][] = "RHOTFactor";
$tdatastandardsetup[".googleLikeFields"][] = "SHOTFactor";
$tdatastandardsetup[".googleLikeFields"][] = "CHOTFactor";
$tdatastandardsetup[".googleLikeFields"][] = "RHNDiffFactor";
$tdatastandardsetup[".googleLikeFields"][] = "SHNDiffFactor";
$tdatastandardsetup[".googleLikeFields"][] = "CHNDiffFactor";
$tdatastandardsetup[".googleLikeFields"][] = "RHFactor";
$tdatastandardsetup[".googleLikeFields"][] = "SHFactor";
$tdatastandardsetup[".googleLikeFields"][] = "CHFactor";
$tdatastandardsetup[".googleLikeFields"][] = "RDFactor";
$tdatastandardsetup[".googleLikeFields"][] = "RDOTFactor";
$tdatastandardsetup[".googleLikeFields"][] = "RDNDiffFactor";
$tdatastandardsetup[".googleLikeFields"][] = "RHRDFactor";
$tdatastandardsetup[".googleLikeFields"][] = "RHRDOTFactor";
$tdatastandardsetup[".googleLikeFields"][] = "SHRDFactor";
$tdatastandardsetup[".googleLikeFields"][] = "SHRDOTFactor";
$tdatastandardsetup[".googleLikeFields"][] = "WorkingDaysInYearDailies";
$tdatastandardsetup[".googleLikeFields"][] = "ReqBeforeHoliday";
$tdatastandardsetup[".googleLikeFields"][] = "SHFactorDaily";
$tdatastandardsetup[".googleLikeFields"][] = "SHOTFactorDaily";
$tdatastandardsetup[".googleLikeFields"][] = "CHFactorDaily";
$tdatastandardsetup[".googleLikeFields"][] = "SHRDFactorDaily";
$tdatastandardsetup[".googleLikeFields"][] = "SHRDOTFactorDaily";
$tdatastandardsetup[".googleLikeFields"][] = "CHOTFactorDaily";
$tdatastandardsetup[".googleLikeFields"][] = "PreTimeInMins";
$tdatastandardsetup[".googleLikeFields"][] = "BonusAnnualLimit";
$tdatastandardsetup[".googleLikeFields"][] = "RegNDOTFactor";
$tdatastandardsetup[".googleLikeFields"][] = "RHNDOTFactor";
$tdatastandardsetup[".googleLikeFields"][] = "SHNDOTFactor";
$tdatastandardsetup[".googleLikeFields"][] = "CHNDOTFactor";
$tdatastandardsetup[".googleLikeFields"][] = "RDNDOTFactor";
$tdatastandardsetup[".googleLikeFields"][] = "DoubleHoliday";
$tdatastandardsetup[".googleLikeFields"][] = "DoubleHolidayRD";
$tdatastandardsetup[".googleLikeFields"][] = "DoubleHolidayOT";
$tdatastandardsetup[".googleLikeFields"][] = "DoubleHolidayRDOT";
$tdatastandardsetup[".googleLikeFields"][] = "SHRDNDFactor";
$tdatastandardsetup[".googleLikeFields"][] = "RHRDNDFactor";
$tdatastandardsetup[".googleLikeFields"][] = "SHRDNDOTFactor";
$tdatastandardsetup[".googleLikeFields"][] = "RHRDNDOTFacotr";
$tdatastandardsetup[".googleLikeFields"][] = "DoubleHolidayND";
$tdatastandardsetup[".googleLikeFields"][] = "DoubleHolidayRDND";
$tdatastandardsetup[".googleLikeFields"][] = "DoubleHolidayNDOT";
$tdatastandardsetup[".googleLikeFields"][] = "DoubleHolidayRDNDOT";


$tdatastandardsetup[".advSearchFields"] = array();
$tdatastandardsetup[".advSearchFields"][] = "SID";
$tdatastandardsetup[".advSearchFields"][] = "PreTimeInMins";
$tdatastandardsetup[".advSearchFields"][] = "WorkingDaysInYear";
$tdatastandardsetup[".advSearchFields"][] = "WorkingDaysInYearDailies";
$tdatastandardsetup[".advSearchFields"][] = "AllowableLeaveFrom";
$tdatastandardsetup[".advSearchFields"][] = "AllowableLeaveTo";
$tdatastandardsetup[".advSearchFields"][] = "RHFactor";
$tdatastandardsetup[".advSearchFields"][] = "SHFactor";
$tdatastandardsetup[".advSearchFields"][] = "SHFactorDaily";
$tdatastandardsetup[".advSearchFields"][] = "CHFactor";
$tdatastandardsetup[".advSearchFields"][] = "CHFactorDaily";
$tdatastandardsetup[".advSearchFields"][] = "DoubleHoliday";
$tdatastandardsetup[".advSearchFields"][] = "ReqBeforeHoliday";
$tdatastandardsetup[".advSearchFields"][] = "RegOTFactor";
$tdatastandardsetup[".advSearchFields"][] = "RHOTFactor";
$tdatastandardsetup[".advSearchFields"][] = "SHOTFactor";
$tdatastandardsetup[".advSearchFields"][] = "SHOTFactorDaily";
$tdatastandardsetup[".advSearchFields"][] = "CHOTFactor";
$tdatastandardsetup[".advSearchFields"][] = "CHOTFactorDaily";
$tdatastandardsetup[".advSearchFields"][] = "RDOTFactor";
$tdatastandardsetup[".advSearchFields"][] = "RHRDOTFactor";
$tdatastandardsetup[".advSearchFields"][] = "SHRDOTFactor";
$tdatastandardsetup[".advSearchFields"][] = "SHRDOTFactorDaily";
$tdatastandardsetup[".advSearchFields"][] = "RHNDOTFactor";
$tdatastandardsetup[".advSearchFields"][] = "SHNDOTFactor";
$tdatastandardsetup[".advSearchFields"][] = "CHNDOTFactor";
$tdatastandardsetup[".advSearchFields"][] = "RDNDOTFactor";
$tdatastandardsetup[".advSearchFields"][] = "RHRDNDOTFacotr";
$tdatastandardsetup[".advSearchFields"][] = "SHRDNDOTFactor";
$tdatastandardsetup[".advSearchFields"][] = "DoubleHolidayOT";
$tdatastandardsetup[".advSearchFields"][] = "DoubleHolidayRDOT";
$tdatastandardsetup[".advSearchFields"][] = "DoubleHolidayNDOT";
$tdatastandardsetup[".advSearchFields"][] = "DoubleHolidayRDNDOT";
$tdatastandardsetup[".advSearchFields"][] = "NightDiffStartTime";
$tdatastandardsetup[".advSearchFields"][] = "NightDiffEndTime";
$tdatastandardsetup[".advSearchFields"][] = "RegNDiffFactor";
$tdatastandardsetup[".advSearchFields"][] = "RHNDiffFactor";
$tdatastandardsetup[".advSearchFields"][] = "SHNDiffFactor";
$tdatastandardsetup[".advSearchFields"][] = "CHNDiffFactor";
$tdatastandardsetup[".advSearchFields"][] = "RDNDiffFactor";
$tdatastandardsetup[".advSearchFields"][] = "RegNDOTFactor";
$tdatastandardsetup[".advSearchFields"][] = "RHRDNDFactor";
$tdatastandardsetup[".advSearchFields"][] = "SHRDNDFactor";
$tdatastandardsetup[".advSearchFields"][] = "DoubleHolidayND";
$tdatastandardsetup[".advSearchFields"][] = "DoubleHolidayRDND";
$tdatastandardsetup[".advSearchFields"][] = "RDFactor";
$tdatastandardsetup[".advSearchFields"][] = "RHRDFactor";
$tdatastandardsetup[".advSearchFields"][] = "SHRDFactor";
$tdatastandardsetup[".advSearchFields"][] = "SHRDFactorDaily";
$tdatastandardsetup[".advSearchFields"][] = "DoubleHolidayRD";
$tdatastandardsetup[".advSearchFields"][] = "BonusAnnualLimit";

$tdatastandardsetup[".tableType"] = "list";

$tdatastandardsetup[".printerPageOrientation"] = 0;
$tdatastandardsetup[".nPrinterPageScale"] = 100;

$tdatastandardsetup[".nPrinterSplitRecords"] = 40;

$tdatastandardsetup[".nPrinterPDFSplitRecords"] = 40;



$tdatastandardsetup[".geocodingEnabled"] = false;





$tdatastandardsetup[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatastandardsetup[".pageSize"] = 20;

$tdatastandardsetup[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastandardsetup[".strOrderBy"] = $tstrOrderBy;

$tdatastandardsetup[".orderindexes"] = array();

$tdatastandardsetup[".sqlHead"] = "SELECT SID,  RegOTFactor,  RegNDiffFactor,  NightDiffStartTime,  NightDiffEndTime,  WorkingDaysInYear,  AllowableLeaveFrom,  AllowableLeaveTo,  RHOTFactor,  SHOTFactor,  CHOTFactor,  RHNDiffFactor,  SHNDiffFactor,  CHNDiffFactor,  RHFactor,  SHFactor,  CHFactor,  RDFactor,  RDOTFactor,  RDNDiffFactor,  RHRDFactor,  RHRDOTFactor,  SHRDFactor,  SHRDOTFactor,  WorkingDaysInYearDailies,  ReqBeforeHoliday,  SHFactorDaily,  SHOTFactorDaily,  CHFactorDaily,  SHRDFactorDaily,  SHRDOTFactorDaily,  CHOTFactorDaily,  PreTimeInMins,  BonusAnnualLimit,  RegNDOTFactor,  RHNDOTFactor,  SHNDOTFactor,  CHNDOTFactor,  RDNDOTFactor,  DoubleHoliday,  DoubleHolidayRD,  DoubleHolidayOT,  DoubleHolidayRDOT,  SHRDNDFactor,  RHRDNDFactor,  SHRDNDOTFactor,  RHRDNDOTFacotr,  DoubleHolidayND,  DoubleHolidayRDND,  DoubleHolidayNDOT,  DoubleHolidayRDNDOT";
$tdatastandardsetup[".sqlFrom"] = "FROM standardsetup";
$tdatastandardsetup[".sqlWhereExpr"] = "";
$tdatastandardsetup[".sqlTail"] = "";


//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	
	
		$tabFields[] = "PreTimeInMins";
	
		$tabFields[] = "WorkingDaysInYear";
	
		$tabFields[] = "WorkingDaysInYearDailies";
$arrEditTabs[] = array('tabId'=>'Working_Days1',
					   'tabName'=>"Working Days",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "AllowableLeaveFrom";
	
		$tabFields[] = "AllowableLeaveTo";
$arrEditTabs[] = array('tabId'=>'Leave_Range1',
					   'tabName'=>"Leave Range",
					   'nType'=>'0',
					   'nOrder'=>5,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "RHFactor";
	
		$tabFields[] = "SHFactor";
	
		$tabFields[] = "SHFactorDaily";
	
		$tabFields[] = "CHFactor";
	
		$tabFields[] = "CHFactorDaily";
	
		$tabFields[] = "DoubleHoliday";
	
		$tabFields[] = "ReqBeforeHoliday";
$arrEditTabs[] = array('tabId'=>'Holiday_Factor1',
					   'tabName'=>"Holiday Factor",
					   'nType'=>'0',
					   'nOrder'=>8,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "RegOTFactor";
	
		$tabFields[] = "RHOTFactor";
	
		$tabFields[] = "SHOTFactor";
	
		$tabFields[] = "SHOTFactorDaily";
	
		$tabFields[] = "CHOTFactor";
	
		$tabFields[] = "CHOTFactorDaily";
	
		$tabFields[] = "RDOTFactor";
	
		$tabFields[] = "RHRDOTFactor";
	
		$tabFields[] = "SHRDOTFactor";
	
		$tabFields[] = "SHRDOTFactorDaily";
	
		$tabFields[] = "RHNDOTFactor";
	
		$tabFields[] = "SHNDOTFactor";
	
		$tabFields[] = "CHNDOTFactor";
	
		$tabFields[] = "RDNDOTFactor";
	
		$tabFields[] = "RHRDNDOTFacotr";
	
		$tabFields[] = "SHRDNDOTFactor";
	
		$tabFields[] = "DoubleHolidayOT";
	
		$tabFields[] = "DoubleHolidayRDOT";
	
		$tabFields[] = "DoubleHolidayNDOT";
	
		$tabFields[] = "DoubleHolidayRDNDOT";
$arrEditTabs[] = array('tabId'=>'Overtime_Factors1',
					   'tabName'=>"Overtime Factors",
					   'nType'=>'0',
					   'nOrder'=>16,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "NightDiffStartTime";
	
		$tabFields[] = "NightDiffEndTime";
	
		$tabFields[] = "RegNDiffFactor";
	
		$tabFields[] = "RHNDiffFactor";
	
		$tabFields[] = "SHNDiffFactor";
	
		$tabFields[] = "CHNDiffFactor";
	
		$tabFields[] = "RDNDiffFactor";
	
		$tabFields[] = "RegNDOTFactor";
	
		$tabFields[] = "RHRDNDFactor";
	
		$tabFields[] = "SHRDNDFactor";
	
		$tabFields[] = "DoubleHolidayND";
	
		$tabFields[] = "DoubleHolidayRDND";
$arrEditTabs[] = array('tabId'=>'Night_Differencial_Factor1',
					   'tabName'=>"Night Differencial Factor",
					   'nType'=>'0',
					   'nOrder'=>37,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "RDFactor";
	
		$tabFields[] = "RHRDFactor";
	
		$tabFields[] = "SHRDFactor";
	
		$tabFields[] = "SHRDFactorDaily";
	
		$tabFields[] = "DoubleHolidayRD";
$arrEditTabs[] = array('tabId'=>'Rest_Day_Factor1',
					   'tabName'=>"Rest Day Factor",
					   'nType'=>'0',
					   'nOrder'=>50,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "BonusAnnualLimit";
$arrEditTabs[] = array('tabId'=>'Bonus1',
					   'tabName'=>"Bonus",
					   'nType'=>'0',
					   'nOrder'=>56,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatastandardsetup[".arrEditTabs"] = $arrEditTabs;


//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	
	
		$tabFields[] = "PreTimeInMins";
	
		$tabFields[] = "WorkingDaysInYear";
	
		$tabFields[] = "WorkingDaysInYearDailies";
$arrAddTabs[] = array('tabId'=>'Working_Days1',
					  'tabName'=>"Working Days",
					  'nType'=>'0',
					  'nOrder'=>1,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "AllowableLeaveFrom";
	
		$tabFields[] = "AllowableLeaveTo";
$arrAddTabs[] = array('tabId'=>'Leave_Range1',
					  'tabName'=>"Leave Range",
					  'nType'=>'0',
					  'nOrder'=>5,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "RHFactor";
	
		$tabFields[] = "SHFactor";
	
		$tabFields[] = "SHFactorDaily";
	
		$tabFields[] = "CHFactor";
	
		$tabFields[] = "CHFactorDaily";
	
		$tabFields[] = "DoubleHoliday";
	
		$tabFields[] = "ReqBeforeHoliday";
$arrAddTabs[] = array('tabId'=>'Holiday_Factor1',
					  'tabName'=>"Holiday Factor",
					  'nType'=>'0',
					  'nOrder'=>8,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "RegOTFactor";
	
		$tabFields[] = "RHOTFactor";
	
		$tabFields[] = "SHOTFactor";
	
		$tabFields[] = "SHOTFactorDaily";
	
		$tabFields[] = "CHOTFactor";
	
		$tabFields[] = "CHOTFactorDaily";
	
		$tabFields[] = "RDOTFactor";
	
		$tabFields[] = "RHRDOTFactor";
	
		$tabFields[] = "SHRDOTFactor";
	
		$tabFields[] = "SHRDOTFactorDaily";
	
		$tabFields[] = "RHNDOTFactor";
	
		$tabFields[] = "SHNDOTFactor";
	
		$tabFields[] = "CHNDOTFactor";
	
		$tabFields[] = "RDNDOTFactor";
	
		$tabFields[] = "RHRDNDOTFacotr";
	
		$tabFields[] = "SHRDNDOTFactor";
	
		$tabFields[] = "DoubleHolidayOT";
	
		$tabFields[] = "DoubleHolidayRDOT";
	
		$tabFields[] = "DoubleHolidayNDOT";
	
		$tabFields[] = "DoubleHolidayRDNDOT";
$arrAddTabs[] = array('tabId'=>'Overtime_Factors1',
					  'tabName'=>"Overtime Factors",
					  'nType'=>'0',
					  'nOrder'=>16,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "NightDiffStartTime";
	
		$tabFields[] = "NightDiffEndTime";
	
		$tabFields[] = "RegNDiffFactor";
	
		$tabFields[] = "RHNDiffFactor";
	
		$tabFields[] = "SHNDiffFactor";
	
		$tabFields[] = "CHNDiffFactor";
	
		$tabFields[] = "RDNDiffFactor";
	
		$tabFields[] = "RegNDOTFactor";
	
		$tabFields[] = "RHRDNDFactor";
	
		$tabFields[] = "SHRDNDFactor";
	
		$tabFields[] = "DoubleHolidayND";
	
		$tabFields[] = "DoubleHolidayRDND";
$arrAddTabs[] = array('tabId'=>'Night_Differencial_Factor1',
					  'tabName'=>"Night Differencial Factor",
					  'nType'=>'0',
					  'nOrder'=>37,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "RDFactor";
	
		$tabFields[] = "RHRDFactor";
	
		$tabFields[] = "SHRDFactor";
	
		$tabFields[] = "SHRDFactorDaily";
	
		$tabFields[] = "DoubleHolidayRD";
$arrAddTabs[] = array('tabId'=>'Rest_Day_Factor1',
					  'tabName'=>"Rest Day Factor",
					  'nType'=>'0',
					  'nOrder'=>50,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "BonusAnnualLimit";
$arrAddTabs[] = array('tabId'=>'Bonus1',
					  'tabName'=>"Bonus",
					  'nType'=>'0',
					  'nOrder'=>56,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdatastandardsetup[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	
	$tabFields[] = "PreTimeInMins";
	$tabFields[] = "WorkingDaysInYear";
	$tabFields[] = "WorkingDaysInYearDailies";
$arrViewTabs[] = array('tabId'=>'Working_Days1',
					   'tabName'=>"Working Days",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "AllowableLeaveFrom";
	$tabFields[] = "AllowableLeaveTo";
$arrViewTabs[] = array('tabId'=>'Leave_Range1',
					   'tabName'=>"Leave Range",
					   'nType'=>'0',
					   'nOrder'=>5,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "RHFactor";
	$tabFields[] = "SHFactor";
	$tabFields[] = "SHFactorDaily";
	$tabFields[] = "CHFactor";
	$tabFields[] = "CHFactorDaily";
	$tabFields[] = "DoubleHoliday";
	$tabFields[] = "ReqBeforeHoliday";
$arrViewTabs[] = array('tabId'=>'Holiday_Factor1',
					   'tabName'=>"Holiday Factor",
					   'nType'=>'0',
					   'nOrder'=>8,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "RegOTFactor";
	$tabFields[] = "RHOTFactor";
	$tabFields[] = "SHOTFactor";
	$tabFields[] = "SHOTFactorDaily";
	$tabFields[] = "CHOTFactor";
	$tabFields[] = "CHOTFactorDaily";
	$tabFields[] = "RDOTFactor";
	$tabFields[] = "RHRDOTFactor";
	$tabFields[] = "SHRDOTFactor";
	$tabFields[] = "SHRDOTFactorDaily";
	$tabFields[] = "RHNDOTFactor";
	$tabFields[] = "SHNDOTFactor";
	$tabFields[] = "CHNDOTFactor";
	$tabFields[] = "RDNDOTFactor";
	$tabFields[] = "RHRDNDOTFacotr";
	$tabFields[] = "SHRDNDOTFactor";
	$tabFields[] = "DoubleHolidayOT";
	$tabFields[] = "DoubleHolidayRDOT";
	$tabFields[] = "DoubleHolidayNDOT";
	$tabFields[] = "DoubleHolidayRDNDOT";
$arrViewTabs[] = array('tabId'=>'Overtime_Factors1',
					   'tabName'=>"Overtime Factors",
					   'nType'=>'0',
					   'nOrder'=>16,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "NightDiffStartTime";
	$tabFields[] = "NightDiffEndTime";
	$tabFields[] = "RegNDiffFactor";
	$tabFields[] = "RHNDiffFactor";
	$tabFields[] = "SHNDiffFactor";
	$tabFields[] = "CHNDiffFactor";
	$tabFields[] = "RDNDiffFactor";
	$tabFields[] = "RegNDOTFactor";
	$tabFields[] = "RHRDNDFactor";
	$tabFields[] = "SHRDNDFactor";
	$tabFields[] = "DoubleHolidayND";
	$tabFields[] = "DoubleHolidayRDND";
$arrViewTabs[] = array('tabId'=>'Night_Differencial_Factor1',
					   'tabName'=>"Night Differencial Factor",
					   'nType'=>'0',
					   'nOrder'=>37,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "RDFactor";
	$tabFields[] = "RHRDFactor";
	$tabFields[] = "SHRDFactor";
	$tabFields[] = "SHRDFactorDaily";
	$tabFields[] = "DoubleHolidayRD";
$arrViewTabs[] = array('tabId'=>'Rest_Day_Factor1',
					   'tabName'=>"Rest Day Factor",
					   'nType'=>'0',
					   'nOrder'=>50,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	$tabFields[] = "BonusAnnualLimit";
$arrViewTabs[] = array('tabId'=>'Bonus1',
					   'tabName'=>"Bonus",
					   'nType'=>'0',
					   'nOrder'=>56,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatastandardsetup[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastandardsetup[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastandardsetup[".arrGroupsPerPage"] = $arrGPP;

$tdatastandardsetup[".highlightSearchResults"] = true;

$tableKeysstandardsetup = array();
$tableKeysstandardsetup[] = "SID";
$tdatastandardsetup[".Keys"] = $tableKeysstandardsetup;

$tdatastandardsetup[".listFields"] = array();
$tdatastandardsetup[".listFields"][] = "SID";
$tdatastandardsetup[".listFields"][] = "PreTimeInMins";
$tdatastandardsetup[".listFields"][] = "WorkingDaysInYear";
$tdatastandardsetup[".listFields"][] = "WorkingDaysInYearDailies";
$tdatastandardsetup[".listFields"][] = "AllowableLeaveFrom";
$tdatastandardsetup[".listFields"][] = "AllowableLeaveTo";
$tdatastandardsetup[".listFields"][] = "RHFactor";
$tdatastandardsetup[".listFields"][] = "SHFactor";
$tdatastandardsetup[".listFields"][] = "SHFactorDaily";
$tdatastandardsetup[".listFields"][] = "CHFactor";
$tdatastandardsetup[".listFields"][] = "CHFactorDaily";
$tdatastandardsetup[".listFields"][] = "DoubleHoliday";
$tdatastandardsetup[".listFields"][] = "ReqBeforeHoliday";
$tdatastandardsetup[".listFields"][] = "RegOTFactor";
$tdatastandardsetup[".listFields"][] = "RHOTFactor";
$tdatastandardsetup[".listFields"][] = "SHOTFactor";
$tdatastandardsetup[".listFields"][] = "SHOTFactorDaily";
$tdatastandardsetup[".listFields"][] = "CHOTFactor";
$tdatastandardsetup[".listFields"][] = "CHOTFactorDaily";
$tdatastandardsetup[".listFields"][] = "RDOTFactor";
$tdatastandardsetup[".listFields"][] = "RHRDOTFactor";
$tdatastandardsetup[".listFields"][] = "SHRDOTFactor";
$tdatastandardsetup[".listFields"][] = "SHRDOTFactorDaily";
$tdatastandardsetup[".listFields"][] = "RHNDOTFactor";
$tdatastandardsetup[".listFields"][] = "SHNDOTFactor";
$tdatastandardsetup[".listFields"][] = "CHNDOTFactor";
$tdatastandardsetup[".listFields"][] = "RDNDOTFactor";
$tdatastandardsetup[".listFields"][] = "RHRDNDOTFacotr";
$tdatastandardsetup[".listFields"][] = "SHRDNDOTFactor";
$tdatastandardsetup[".listFields"][] = "DoubleHolidayOT";
$tdatastandardsetup[".listFields"][] = "DoubleHolidayRDOT";
$tdatastandardsetup[".listFields"][] = "DoubleHolidayNDOT";
$tdatastandardsetup[".listFields"][] = "DoubleHolidayRDNDOT";
$tdatastandardsetup[".listFields"][] = "NightDiffStartTime";
$tdatastandardsetup[".listFields"][] = "NightDiffEndTime";
$tdatastandardsetup[".listFields"][] = "RegNDiffFactor";
$tdatastandardsetup[".listFields"][] = "RHNDiffFactor";
$tdatastandardsetup[".listFields"][] = "SHNDiffFactor";
$tdatastandardsetup[".listFields"][] = "CHNDiffFactor";
$tdatastandardsetup[".listFields"][] = "RDNDiffFactor";
$tdatastandardsetup[".listFields"][] = "RegNDOTFactor";
$tdatastandardsetup[".listFields"][] = "RHRDNDFactor";
$tdatastandardsetup[".listFields"][] = "SHRDNDFactor";
$tdatastandardsetup[".listFields"][] = "DoubleHolidayND";
$tdatastandardsetup[".listFields"][] = "DoubleHolidayRDND";
$tdatastandardsetup[".listFields"][] = "RDFactor";
$tdatastandardsetup[".listFields"][] = "RHRDFactor";
$tdatastandardsetup[".listFields"][] = "SHRDFactor";
$tdatastandardsetup[".listFields"][] = "SHRDFactorDaily";
$tdatastandardsetup[".listFields"][] = "DoubleHolidayRD";
$tdatastandardsetup[".listFields"][] = "BonusAnnualLimit";

$tdatastandardsetup[".hideMobileList"] = array();


$tdatastandardsetup[".viewFields"] = array();
$tdatastandardsetup[".viewFields"][] = "SID";
$tdatastandardsetup[".viewFields"][] = "PreTimeInMins";
$tdatastandardsetup[".viewFields"][] = "WorkingDaysInYear";
$tdatastandardsetup[".viewFields"][] = "WorkingDaysInYearDailies";
$tdatastandardsetup[".viewFields"][] = "AllowableLeaveFrom";
$tdatastandardsetup[".viewFields"][] = "AllowableLeaveTo";
$tdatastandardsetup[".viewFields"][] = "RHFactor";
$tdatastandardsetup[".viewFields"][] = "SHFactor";
$tdatastandardsetup[".viewFields"][] = "SHFactorDaily";
$tdatastandardsetup[".viewFields"][] = "CHFactor";
$tdatastandardsetup[".viewFields"][] = "CHFactorDaily";
$tdatastandardsetup[".viewFields"][] = "DoubleHoliday";
$tdatastandardsetup[".viewFields"][] = "ReqBeforeHoliday";
$tdatastandardsetup[".viewFields"][] = "RegOTFactor";
$tdatastandardsetup[".viewFields"][] = "RHOTFactor";
$tdatastandardsetup[".viewFields"][] = "SHOTFactor";
$tdatastandardsetup[".viewFields"][] = "SHOTFactorDaily";
$tdatastandardsetup[".viewFields"][] = "CHOTFactor";
$tdatastandardsetup[".viewFields"][] = "CHOTFactorDaily";
$tdatastandardsetup[".viewFields"][] = "RDOTFactor";
$tdatastandardsetup[".viewFields"][] = "RHRDOTFactor";
$tdatastandardsetup[".viewFields"][] = "SHRDOTFactor";
$tdatastandardsetup[".viewFields"][] = "SHRDOTFactorDaily";
$tdatastandardsetup[".viewFields"][] = "RHNDOTFactor";
$tdatastandardsetup[".viewFields"][] = "SHNDOTFactor";
$tdatastandardsetup[".viewFields"][] = "CHNDOTFactor";
$tdatastandardsetup[".viewFields"][] = "RDNDOTFactor";
$tdatastandardsetup[".viewFields"][] = "RHRDNDOTFacotr";
$tdatastandardsetup[".viewFields"][] = "SHRDNDOTFactor";
$tdatastandardsetup[".viewFields"][] = "DoubleHolidayOT";
$tdatastandardsetup[".viewFields"][] = "DoubleHolidayRDOT";
$tdatastandardsetup[".viewFields"][] = "DoubleHolidayNDOT";
$tdatastandardsetup[".viewFields"][] = "DoubleHolidayRDNDOT";
$tdatastandardsetup[".viewFields"][] = "NightDiffStartTime";
$tdatastandardsetup[".viewFields"][] = "NightDiffEndTime";
$tdatastandardsetup[".viewFields"][] = "RegNDiffFactor";
$tdatastandardsetup[".viewFields"][] = "RHNDiffFactor";
$tdatastandardsetup[".viewFields"][] = "SHNDiffFactor";
$tdatastandardsetup[".viewFields"][] = "CHNDiffFactor";
$tdatastandardsetup[".viewFields"][] = "RDNDiffFactor";
$tdatastandardsetup[".viewFields"][] = "RegNDOTFactor";
$tdatastandardsetup[".viewFields"][] = "RHRDNDFactor";
$tdatastandardsetup[".viewFields"][] = "SHRDNDFactor";
$tdatastandardsetup[".viewFields"][] = "DoubleHolidayND";
$tdatastandardsetup[".viewFields"][] = "DoubleHolidayRDND";
$tdatastandardsetup[".viewFields"][] = "RDFactor";
$tdatastandardsetup[".viewFields"][] = "RHRDFactor";
$tdatastandardsetup[".viewFields"][] = "SHRDFactor";
$tdatastandardsetup[".viewFields"][] = "SHRDFactorDaily";
$tdatastandardsetup[".viewFields"][] = "DoubleHolidayRD";
$tdatastandardsetup[".viewFields"][] = "BonusAnnualLimit";

$tdatastandardsetup[".addFields"] = array();
$tdatastandardsetup[".addFields"][] = "PreTimeInMins";
$tdatastandardsetup[".addFields"][] = "WorkingDaysInYear";
$tdatastandardsetup[".addFields"][] = "WorkingDaysInYearDailies";
$tdatastandardsetup[".addFields"][] = "AllowableLeaveFrom";
$tdatastandardsetup[".addFields"][] = "AllowableLeaveTo";
$tdatastandardsetup[".addFields"][] = "RHFactor";
$tdatastandardsetup[".addFields"][] = "SHFactor";
$tdatastandardsetup[".addFields"][] = "SHFactorDaily";
$tdatastandardsetup[".addFields"][] = "CHFactor";
$tdatastandardsetup[".addFields"][] = "CHFactorDaily";
$tdatastandardsetup[".addFields"][] = "DoubleHoliday";
$tdatastandardsetup[".addFields"][] = "ReqBeforeHoliday";
$tdatastandardsetup[".addFields"][] = "RegOTFactor";
$tdatastandardsetup[".addFields"][] = "RHOTFactor";
$tdatastandardsetup[".addFields"][] = "SHOTFactor";
$tdatastandardsetup[".addFields"][] = "SHOTFactorDaily";
$tdatastandardsetup[".addFields"][] = "CHOTFactor";
$tdatastandardsetup[".addFields"][] = "CHOTFactorDaily";
$tdatastandardsetup[".addFields"][] = "RDOTFactor";
$tdatastandardsetup[".addFields"][] = "RHRDOTFactor";
$tdatastandardsetup[".addFields"][] = "SHRDOTFactor";
$tdatastandardsetup[".addFields"][] = "SHRDOTFactorDaily";
$tdatastandardsetup[".addFields"][] = "RHNDOTFactor";
$tdatastandardsetup[".addFields"][] = "SHNDOTFactor";
$tdatastandardsetup[".addFields"][] = "CHNDOTFactor";
$tdatastandardsetup[".addFields"][] = "RDNDOTFactor";
$tdatastandardsetup[".addFields"][] = "RHRDNDOTFacotr";
$tdatastandardsetup[".addFields"][] = "SHRDNDOTFactor";
$tdatastandardsetup[".addFields"][] = "DoubleHolidayOT";
$tdatastandardsetup[".addFields"][] = "DoubleHolidayRDOT";
$tdatastandardsetup[".addFields"][] = "DoubleHolidayNDOT";
$tdatastandardsetup[".addFields"][] = "DoubleHolidayRDNDOT";
$tdatastandardsetup[".addFields"][] = "NightDiffStartTime";
$tdatastandardsetup[".addFields"][] = "NightDiffEndTime";
$tdatastandardsetup[".addFields"][] = "RegNDiffFactor";
$tdatastandardsetup[".addFields"][] = "RHNDiffFactor";
$tdatastandardsetup[".addFields"][] = "SHNDiffFactor";
$tdatastandardsetup[".addFields"][] = "CHNDiffFactor";
$tdatastandardsetup[".addFields"][] = "RDNDiffFactor";
$tdatastandardsetup[".addFields"][] = "RegNDOTFactor";
$tdatastandardsetup[".addFields"][] = "RHRDNDFactor";
$tdatastandardsetup[".addFields"][] = "SHRDNDFactor";
$tdatastandardsetup[".addFields"][] = "DoubleHolidayND";
$tdatastandardsetup[".addFields"][] = "DoubleHolidayRDND";
$tdatastandardsetup[".addFields"][] = "RDFactor";
$tdatastandardsetup[".addFields"][] = "RHRDFactor";
$tdatastandardsetup[".addFields"][] = "SHRDFactor";
$tdatastandardsetup[".addFields"][] = "SHRDFactorDaily";
$tdatastandardsetup[".addFields"][] = "DoubleHolidayRD";
$tdatastandardsetup[".addFields"][] = "BonusAnnualLimit";

$tdatastandardsetup[".masterListFields"] = array();
$tdatastandardsetup[".masterListFields"][] = "SID";
$tdatastandardsetup[".masterListFields"][] = "PreTimeInMins";
$tdatastandardsetup[".masterListFields"][] = "WorkingDaysInYear";
$tdatastandardsetup[".masterListFields"][] = "WorkingDaysInYearDailies";
$tdatastandardsetup[".masterListFields"][] = "AllowableLeaveFrom";
$tdatastandardsetup[".masterListFields"][] = "AllowableLeaveTo";
$tdatastandardsetup[".masterListFields"][] = "RHFactor";
$tdatastandardsetup[".masterListFields"][] = "SHFactor";
$tdatastandardsetup[".masterListFields"][] = "SHFactorDaily";
$tdatastandardsetup[".masterListFields"][] = "CHFactor";
$tdatastandardsetup[".masterListFields"][] = "CHFactorDaily";
$tdatastandardsetup[".masterListFields"][] = "DoubleHoliday";
$tdatastandardsetup[".masterListFields"][] = "ReqBeforeHoliday";
$tdatastandardsetup[".masterListFields"][] = "RegOTFactor";
$tdatastandardsetup[".masterListFields"][] = "RHOTFactor";
$tdatastandardsetup[".masterListFields"][] = "SHOTFactor";
$tdatastandardsetup[".masterListFields"][] = "SHOTFactorDaily";
$tdatastandardsetup[".masterListFields"][] = "CHOTFactor";
$tdatastandardsetup[".masterListFields"][] = "CHOTFactorDaily";
$tdatastandardsetup[".masterListFields"][] = "RDOTFactor";
$tdatastandardsetup[".masterListFields"][] = "RHRDOTFactor";
$tdatastandardsetup[".masterListFields"][] = "SHRDOTFactor";
$tdatastandardsetup[".masterListFields"][] = "SHRDOTFactorDaily";
$tdatastandardsetup[".masterListFields"][] = "RHNDOTFactor";
$tdatastandardsetup[".masterListFields"][] = "SHNDOTFactor";
$tdatastandardsetup[".masterListFields"][] = "CHNDOTFactor";
$tdatastandardsetup[".masterListFields"][] = "RDNDOTFactor";
$tdatastandardsetup[".masterListFields"][] = "RHRDNDOTFacotr";
$tdatastandardsetup[".masterListFields"][] = "SHRDNDOTFactor";
$tdatastandardsetup[".masterListFields"][] = "DoubleHolidayOT";
$tdatastandardsetup[".masterListFields"][] = "DoubleHolidayRDOT";
$tdatastandardsetup[".masterListFields"][] = "DoubleHolidayNDOT";
$tdatastandardsetup[".masterListFields"][] = "DoubleHolidayRDNDOT";
$tdatastandardsetup[".masterListFields"][] = "NightDiffStartTime";
$tdatastandardsetup[".masterListFields"][] = "NightDiffEndTime";
$tdatastandardsetup[".masterListFields"][] = "RegNDiffFactor";
$tdatastandardsetup[".masterListFields"][] = "RHNDiffFactor";
$tdatastandardsetup[".masterListFields"][] = "SHNDiffFactor";
$tdatastandardsetup[".masterListFields"][] = "CHNDiffFactor";
$tdatastandardsetup[".masterListFields"][] = "RDNDiffFactor";
$tdatastandardsetup[".masterListFields"][] = "RegNDOTFactor";
$tdatastandardsetup[".masterListFields"][] = "RHRDNDFactor";
$tdatastandardsetup[".masterListFields"][] = "SHRDNDFactor";
$tdatastandardsetup[".masterListFields"][] = "DoubleHolidayND";
$tdatastandardsetup[".masterListFields"][] = "DoubleHolidayRDND";
$tdatastandardsetup[".masterListFields"][] = "RDFactor";
$tdatastandardsetup[".masterListFields"][] = "RHRDFactor";
$tdatastandardsetup[".masterListFields"][] = "SHRDFactor";
$tdatastandardsetup[".masterListFields"][] = "SHRDFactorDaily";
$tdatastandardsetup[".masterListFields"][] = "DoubleHolidayRD";
$tdatastandardsetup[".masterListFields"][] = "BonusAnnualLimit";

$tdatastandardsetup[".inlineAddFields"] = array();
$tdatastandardsetup[".inlineAddFields"][] = "PreTimeInMins";
$tdatastandardsetup[".inlineAddFields"][] = "WorkingDaysInYear";
$tdatastandardsetup[".inlineAddFields"][] = "WorkingDaysInYearDailies";
$tdatastandardsetup[".inlineAddFields"][] = "AllowableLeaveFrom";
$tdatastandardsetup[".inlineAddFields"][] = "AllowableLeaveTo";
$tdatastandardsetup[".inlineAddFields"][] = "RHFactor";
$tdatastandardsetup[".inlineAddFields"][] = "SHFactor";
$tdatastandardsetup[".inlineAddFields"][] = "SHFactorDaily";
$tdatastandardsetup[".inlineAddFields"][] = "CHFactor";
$tdatastandardsetup[".inlineAddFields"][] = "CHFactorDaily";
$tdatastandardsetup[".inlineAddFields"][] = "DoubleHoliday";
$tdatastandardsetup[".inlineAddFields"][] = "ReqBeforeHoliday";
$tdatastandardsetup[".inlineAddFields"][] = "RegOTFactor";
$tdatastandardsetup[".inlineAddFields"][] = "RHOTFactor";
$tdatastandardsetup[".inlineAddFields"][] = "SHOTFactor";
$tdatastandardsetup[".inlineAddFields"][] = "SHOTFactorDaily";
$tdatastandardsetup[".inlineAddFields"][] = "CHOTFactor";
$tdatastandardsetup[".inlineAddFields"][] = "CHOTFactorDaily";
$tdatastandardsetup[".inlineAddFields"][] = "RDOTFactor";
$tdatastandardsetup[".inlineAddFields"][] = "RHRDOTFactor";
$tdatastandardsetup[".inlineAddFields"][] = "SHRDOTFactor";
$tdatastandardsetup[".inlineAddFields"][] = "SHRDOTFactorDaily";
$tdatastandardsetup[".inlineAddFields"][] = "RHNDOTFactor";
$tdatastandardsetup[".inlineAddFields"][] = "SHNDOTFactor";
$tdatastandardsetup[".inlineAddFields"][] = "CHNDOTFactor";
$tdatastandardsetup[".inlineAddFields"][] = "RDNDOTFactor";
$tdatastandardsetup[".inlineAddFields"][] = "RHRDNDOTFacotr";
$tdatastandardsetup[".inlineAddFields"][] = "SHRDNDOTFactor";
$tdatastandardsetup[".inlineAddFields"][] = "DoubleHolidayOT";
$tdatastandardsetup[".inlineAddFields"][] = "DoubleHolidayRDOT";
$tdatastandardsetup[".inlineAddFields"][] = "DoubleHolidayNDOT";
$tdatastandardsetup[".inlineAddFields"][] = "DoubleHolidayRDNDOT";
$tdatastandardsetup[".inlineAddFields"][] = "NightDiffStartTime";
$tdatastandardsetup[".inlineAddFields"][] = "NightDiffEndTime";
$tdatastandardsetup[".inlineAddFields"][] = "RegNDiffFactor";
$tdatastandardsetup[".inlineAddFields"][] = "RHNDiffFactor";
$tdatastandardsetup[".inlineAddFields"][] = "SHNDiffFactor";
$tdatastandardsetup[".inlineAddFields"][] = "CHNDiffFactor";
$tdatastandardsetup[".inlineAddFields"][] = "RDNDiffFactor";
$tdatastandardsetup[".inlineAddFields"][] = "RegNDOTFactor";
$tdatastandardsetup[".inlineAddFields"][] = "RHRDNDFactor";
$tdatastandardsetup[".inlineAddFields"][] = "SHRDNDFactor";
$tdatastandardsetup[".inlineAddFields"][] = "DoubleHolidayND";
$tdatastandardsetup[".inlineAddFields"][] = "DoubleHolidayRDND";
$tdatastandardsetup[".inlineAddFields"][] = "RDFactor";
$tdatastandardsetup[".inlineAddFields"][] = "RHRDFactor";
$tdatastandardsetup[".inlineAddFields"][] = "SHRDFactor";
$tdatastandardsetup[".inlineAddFields"][] = "SHRDFactorDaily";
$tdatastandardsetup[".inlineAddFields"][] = "DoubleHolidayRD";
$tdatastandardsetup[".inlineAddFields"][] = "BonusAnnualLimit";

$tdatastandardsetup[".editFields"] = array();
$tdatastandardsetup[".editFields"][] = "PreTimeInMins";
$tdatastandardsetup[".editFields"][] = "WorkingDaysInYear";
$tdatastandardsetup[".editFields"][] = "WorkingDaysInYearDailies";
$tdatastandardsetup[".editFields"][] = "AllowableLeaveFrom";
$tdatastandardsetup[".editFields"][] = "AllowableLeaveTo";
$tdatastandardsetup[".editFields"][] = "RHFactor";
$tdatastandardsetup[".editFields"][] = "SHFactor";
$tdatastandardsetup[".editFields"][] = "SHFactorDaily";
$tdatastandardsetup[".editFields"][] = "CHFactor";
$tdatastandardsetup[".editFields"][] = "CHFactorDaily";
$tdatastandardsetup[".editFields"][] = "DoubleHoliday";
$tdatastandardsetup[".editFields"][] = "ReqBeforeHoliday";
$tdatastandardsetup[".editFields"][] = "RegOTFactor";
$tdatastandardsetup[".editFields"][] = "RHOTFactor";
$tdatastandardsetup[".editFields"][] = "SHOTFactor";
$tdatastandardsetup[".editFields"][] = "SHOTFactorDaily";
$tdatastandardsetup[".editFields"][] = "CHOTFactor";
$tdatastandardsetup[".editFields"][] = "CHOTFactorDaily";
$tdatastandardsetup[".editFields"][] = "RDOTFactor";
$tdatastandardsetup[".editFields"][] = "RHRDOTFactor";
$tdatastandardsetup[".editFields"][] = "SHRDOTFactor";
$tdatastandardsetup[".editFields"][] = "SHRDOTFactorDaily";
$tdatastandardsetup[".editFields"][] = "RHNDOTFactor";
$tdatastandardsetup[".editFields"][] = "SHNDOTFactor";
$tdatastandardsetup[".editFields"][] = "CHNDOTFactor";
$tdatastandardsetup[".editFields"][] = "RDNDOTFactor";
$tdatastandardsetup[".editFields"][] = "RHRDNDOTFacotr";
$tdatastandardsetup[".editFields"][] = "SHRDNDOTFactor";
$tdatastandardsetup[".editFields"][] = "DoubleHolidayOT";
$tdatastandardsetup[".editFields"][] = "DoubleHolidayRDOT";
$tdatastandardsetup[".editFields"][] = "DoubleHolidayNDOT";
$tdatastandardsetup[".editFields"][] = "DoubleHolidayRDNDOT";
$tdatastandardsetup[".editFields"][] = "NightDiffStartTime";
$tdatastandardsetup[".editFields"][] = "NightDiffEndTime";
$tdatastandardsetup[".editFields"][] = "RegNDiffFactor";
$tdatastandardsetup[".editFields"][] = "RHNDiffFactor";
$tdatastandardsetup[".editFields"][] = "SHNDiffFactor";
$tdatastandardsetup[".editFields"][] = "CHNDiffFactor";
$tdatastandardsetup[".editFields"][] = "RDNDiffFactor";
$tdatastandardsetup[".editFields"][] = "RegNDOTFactor";
$tdatastandardsetup[".editFields"][] = "RHRDNDFactor";
$tdatastandardsetup[".editFields"][] = "SHRDNDFactor";
$tdatastandardsetup[".editFields"][] = "DoubleHolidayND";
$tdatastandardsetup[".editFields"][] = "DoubleHolidayRDND";
$tdatastandardsetup[".editFields"][] = "RDFactor";
$tdatastandardsetup[".editFields"][] = "RHRDFactor";
$tdatastandardsetup[".editFields"][] = "SHRDFactor";
$tdatastandardsetup[".editFields"][] = "SHRDFactorDaily";
$tdatastandardsetup[".editFields"][] = "DoubleHolidayRD";
$tdatastandardsetup[".editFields"][] = "BonusAnnualLimit";

$tdatastandardsetup[".inlineEditFields"] = array();
$tdatastandardsetup[".inlineEditFields"][] = "PreTimeInMins";
$tdatastandardsetup[".inlineEditFields"][] = "WorkingDaysInYear";
$tdatastandardsetup[".inlineEditFields"][] = "WorkingDaysInYearDailies";
$tdatastandardsetup[".inlineEditFields"][] = "AllowableLeaveFrom";
$tdatastandardsetup[".inlineEditFields"][] = "AllowableLeaveTo";
$tdatastandardsetup[".inlineEditFields"][] = "RHFactor";
$tdatastandardsetup[".inlineEditFields"][] = "SHFactor";
$tdatastandardsetup[".inlineEditFields"][] = "SHFactorDaily";
$tdatastandardsetup[".inlineEditFields"][] = "CHFactor";
$tdatastandardsetup[".inlineEditFields"][] = "CHFactorDaily";
$tdatastandardsetup[".inlineEditFields"][] = "DoubleHoliday";
$tdatastandardsetup[".inlineEditFields"][] = "ReqBeforeHoliday";
$tdatastandardsetup[".inlineEditFields"][] = "RegOTFactor";
$tdatastandardsetup[".inlineEditFields"][] = "RHOTFactor";
$tdatastandardsetup[".inlineEditFields"][] = "SHOTFactor";
$tdatastandardsetup[".inlineEditFields"][] = "SHOTFactorDaily";
$tdatastandardsetup[".inlineEditFields"][] = "CHOTFactor";
$tdatastandardsetup[".inlineEditFields"][] = "CHOTFactorDaily";
$tdatastandardsetup[".inlineEditFields"][] = "RDOTFactor";
$tdatastandardsetup[".inlineEditFields"][] = "RHRDOTFactor";
$tdatastandardsetup[".inlineEditFields"][] = "SHRDOTFactor";
$tdatastandardsetup[".inlineEditFields"][] = "SHRDOTFactorDaily";
$tdatastandardsetup[".inlineEditFields"][] = "RHNDOTFactor";
$tdatastandardsetup[".inlineEditFields"][] = "SHNDOTFactor";
$tdatastandardsetup[".inlineEditFields"][] = "CHNDOTFactor";
$tdatastandardsetup[".inlineEditFields"][] = "RDNDOTFactor";
$tdatastandardsetup[".inlineEditFields"][] = "RHRDNDOTFacotr";
$tdatastandardsetup[".inlineEditFields"][] = "SHRDNDOTFactor";
$tdatastandardsetup[".inlineEditFields"][] = "DoubleHolidayOT";
$tdatastandardsetup[".inlineEditFields"][] = "DoubleHolidayRDOT";
$tdatastandardsetup[".inlineEditFields"][] = "DoubleHolidayNDOT";
$tdatastandardsetup[".inlineEditFields"][] = "DoubleHolidayRDNDOT";
$tdatastandardsetup[".inlineEditFields"][] = "NightDiffStartTime";
$tdatastandardsetup[".inlineEditFields"][] = "NightDiffEndTime";
$tdatastandardsetup[".inlineEditFields"][] = "RegNDiffFactor";
$tdatastandardsetup[".inlineEditFields"][] = "RHNDiffFactor";
$tdatastandardsetup[".inlineEditFields"][] = "SHNDiffFactor";
$tdatastandardsetup[".inlineEditFields"][] = "CHNDiffFactor";
$tdatastandardsetup[".inlineEditFields"][] = "RDNDiffFactor";
$tdatastandardsetup[".inlineEditFields"][] = "RegNDOTFactor";
$tdatastandardsetup[".inlineEditFields"][] = "RHRDNDFactor";
$tdatastandardsetup[".inlineEditFields"][] = "SHRDNDFactor";
$tdatastandardsetup[".inlineEditFields"][] = "DoubleHolidayND";
$tdatastandardsetup[".inlineEditFields"][] = "DoubleHolidayRDND";
$tdatastandardsetup[".inlineEditFields"][] = "RDFactor";
$tdatastandardsetup[".inlineEditFields"][] = "RHRDFactor";
$tdatastandardsetup[".inlineEditFields"][] = "SHRDFactor";
$tdatastandardsetup[".inlineEditFields"][] = "SHRDFactorDaily";
$tdatastandardsetup[".inlineEditFields"][] = "DoubleHolidayRD";
$tdatastandardsetup[".inlineEditFields"][] = "BonusAnnualLimit";

$tdatastandardsetup[".updateSelectedFields"] = array();
$tdatastandardsetup[".updateSelectedFields"][] = "WorkingDaysInYear";
$tdatastandardsetup[".updateSelectedFields"][] = "WorkingDaysInYearDailies";
$tdatastandardsetup[".updateSelectedFields"][] = "AllowableLeaveFrom";
$tdatastandardsetup[".updateSelectedFields"][] = "AllowableLeaveTo";
$tdatastandardsetup[".updateSelectedFields"][] = "RHFactor";
$tdatastandardsetup[".updateSelectedFields"][] = "SHFactor";
$tdatastandardsetup[".updateSelectedFields"][] = "SHFactorDaily";
$tdatastandardsetup[".updateSelectedFields"][] = "CHFactor";
$tdatastandardsetup[".updateSelectedFields"][] = "CHFactorDaily";
$tdatastandardsetup[".updateSelectedFields"][] = "ReqBeforeHoliday";
$tdatastandardsetup[".updateSelectedFields"][] = "RegOTFactor";
$tdatastandardsetup[".updateSelectedFields"][] = "RHOTFactor";
$tdatastandardsetup[".updateSelectedFields"][] = "SHOTFactor";
$tdatastandardsetup[".updateSelectedFields"][] = "SHOTFactorDaily";
$tdatastandardsetup[".updateSelectedFields"][] = "CHOTFactor";
$tdatastandardsetup[".updateSelectedFields"][] = "CHOTFactorDaily";
$tdatastandardsetup[".updateSelectedFields"][] = "RDOTFactor";
$tdatastandardsetup[".updateSelectedFields"][] = "RHRDOTFactor";
$tdatastandardsetup[".updateSelectedFields"][] = "SHRDOTFactor";
$tdatastandardsetup[".updateSelectedFields"][] = "SHRDOTFactorDaily";
$tdatastandardsetup[".updateSelectedFields"][] = "NightDiffStartTime";
$tdatastandardsetup[".updateSelectedFields"][] = "NightDiffEndTime";
$tdatastandardsetup[".updateSelectedFields"][] = "RegNDiffFactor";
$tdatastandardsetup[".updateSelectedFields"][] = "RHNDiffFactor";
$tdatastandardsetup[".updateSelectedFields"][] = "SHNDiffFactor";
$tdatastandardsetup[".updateSelectedFields"][] = "CHNDiffFactor";
$tdatastandardsetup[".updateSelectedFields"][] = "RDNDiffFactor";
$tdatastandardsetup[".updateSelectedFields"][] = "RDFactor";
$tdatastandardsetup[".updateSelectedFields"][] = "RHRDFactor";
$tdatastandardsetup[".updateSelectedFields"][] = "SHRDFactor";
$tdatastandardsetup[".updateSelectedFields"][] = "SHRDFactorDaily";


$tdatastandardsetup[".exportFields"] = array();
$tdatastandardsetup[".exportFields"][] = "SID";
$tdatastandardsetup[".exportFields"][] = "PreTimeInMins";
$tdatastandardsetup[".exportFields"][] = "WorkingDaysInYear";
$tdatastandardsetup[".exportFields"][] = "WorkingDaysInYearDailies";
$tdatastandardsetup[".exportFields"][] = "AllowableLeaveFrom";
$tdatastandardsetup[".exportFields"][] = "AllowableLeaveTo";
$tdatastandardsetup[".exportFields"][] = "RHFactor";
$tdatastandardsetup[".exportFields"][] = "SHFactor";
$tdatastandardsetup[".exportFields"][] = "SHFactorDaily";
$tdatastandardsetup[".exportFields"][] = "CHFactor";
$tdatastandardsetup[".exportFields"][] = "CHFactorDaily";
$tdatastandardsetup[".exportFields"][] = "DoubleHoliday";
$tdatastandardsetup[".exportFields"][] = "ReqBeforeHoliday";
$tdatastandardsetup[".exportFields"][] = "RegOTFactor";
$tdatastandardsetup[".exportFields"][] = "RHOTFactor";
$tdatastandardsetup[".exportFields"][] = "SHOTFactor";
$tdatastandardsetup[".exportFields"][] = "SHOTFactorDaily";
$tdatastandardsetup[".exportFields"][] = "CHOTFactor";
$tdatastandardsetup[".exportFields"][] = "CHOTFactorDaily";
$tdatastandardsetup[".exportFields"][] = "RDOTFactor";
$tdatastandardsetup[".exportFields"][] = "RHRDOTFactor";
$tdatastandardsetup[".exportFields"][] = "SHRDOTFactor";
$tdatastandardsetup[".exportFields"][] = "SHRDOTFactorDaily";
$tdatastandardsetup[".exportFields"][] = "RHNDOTFactor";
$tdatastandardsetup[".exportFields"][] = "SHNDOTFactor";
$tdatastandardsetup[".exportFields"][] = "CHNDOTFactor";
$tdatastandardsetup[".exportFields"][] = "RDNDOTFactor";
$tdatastandardsetup[".exportFields"][] = "RHRDNDOTFacotr";
$tdatastandardsetup[".exportFields"][] = "SHRDNDOTFactor";
$tdatastandardsetup[".exportFields"][] = "DoubleHolidayOT";
$tdatastandardsetup[".exportFields"][] = "DoubleHolidayRDOT";
$tdatastandardsetup[".exportFields"][] = "DoubleHolidayNDOT";
$tdatastandardsetup[".exportFields"][] = "DoubleHolidayRDNDOT";
$tdatastandardsetup[".exportFields"][] = "NightDiffStartTime";
$tdatastandardsetup[".exportFields"][] = "NightDiffEndTime";
$tdatastandardsetup[".exportFields"][] = "RegNDiffFactor";
$tdatastandardsetup[".exportFields"][] = "RHNDiffFactor";
$tdatastandardsetup[".exportFields"][] = "SHNDiffFactor";
$tdatastandardsetup[".exportFields"][] = "CHNDiffFactor";
$tdatastandardsetup[".exportFields"][] = "RDNDiffFactor";
$tdatastandardsetup[".exportFields"][] = "RegNDOTFactor";
$tdatastandardsetup[".exportFields"][] = "RHRDNDFactor";
$tdatastandardsetup[".exportFields"][] = "SHRDNDFactor";
$tdatastandardsetup[".exportFields"][] = "DoubleHolidayND";
$tdatastandardsetup[".exportFields"][] = "DoubleHolidayRDND";
$tdatastandardsetup[".exportFields"][] = "RDFactor";
$tdatastandardsetup[".exportFields"][] = "RHRDFactor";
$tdatastandardsetup[".exportFields"][] = "SHRDFactor";
$tdatastandardsetup[".exportFields"][] = "SHRDFactorDaily";
$tdatastandardsetup[".exportFields"][] = "DoubleHolidayRD";
$tdatastandardsetup[".exportFields"][] = "BonusAnnualLimit";

$tdatastandardsetup[".importFields"] = array();
$tdatastandardsetup[".importFields"][] = "SID";
$tdatastandardsetup[".importFields"][] = "RegOTFactor";
$tdatastandardsetup[".importFields"][] = "RegNDiffFactor";
$tdatastandardsetup[".importFields"][] = "NightDiffStartTime";
$tdatastandardsetup[".importFields"][] = "NightDiffEndTime";
$tdatastandardsetup[".importFields"][] = "WorkingDaysInYear";
$tdatastandardsetup[".importFields"][] = "AllowableLeaveFrom";
$tdatastandardsetup[".importFields"][] = "AllowableLeaveTo";
$tdatastandardsetup[".importFields"][] = "RHOTFactor";
$tdatastandardsetup[".importFields"][] = "SHOTFactor";
$tdatastandardsetup[".importFields"][] = "CHOTFactor";
$tdatastandardsetup[".importFields"][] = "RHNDiffFactor";
$tdatastandardsetup[".importFields"][] = "SHNDiffFactor";
$tdatastandardsetup[".importFields"][] = "CHNDiffFactor";
$tdatastandardsetup[".importFields"][] = "RHFactor";
$tdatastandardsetup[".importFields"][] = "SHFactor";
$tdatastandardsetup[".importFields"][] = "CHFactor";
$tdatastandardsetup[".importFields"][] = "RDFactor";
$tdatastandardsetup[".importFields"][] = "RDOTFactor";
$tdatastandardsetup[".importFields"][] = "RDNDiffFactor";
$tdatastandardsetup[".importFields"][] = "RHRDFactor";
$tdatastandardsetup[".importFields"][] = "RHRDOTFactor";
$tdatastandardsetup[".importFields"][] = "SHRDFactor";
$tdatastandardsetup[".importFields"][] = "SHRDOTFactor";
$tdatastandardsetup[".importFields"][] = "WorkingDaysInYearDailies";
$tdatastandardsetup[".importFields"][] = "ReqBeforeHoliday";
$tdatastandardsetup[".importFields"][] = "SHFactorDaily";
$tdatastandardsetup[".importFields"][] = "SHOTFactorDaily";
$tdatastandardsetup[".importFields"][] = "CHFactorDaily";
$tdatastandardsetup[".importFields"][] = "SHRDFactorDaily";
$tdatastandardsetup[".importFields"][] = "SHRDOTFactorDaily";
$tdatastandardsetup[".importFields"][] = "CHOTFactorDaily";
$tdatastandardsetup[".importFields"][] = "PreTimeInMins";
$tdatastandardsetup[".importFields"][] = "BonusAnnualLimit";
$tdatastandardsetup[".importFields"][] = "RegNDOTFactor";
$tdatastandardsetup[".importFields"][] = "RHNDOTFactor";
$tdatastandardsetup[".importFields"][] = "SHNDOTFactor";
$tdatastandardsetup[".importFields"][] = "CHNDOTFactor";
$tdatastandardsetup[".importFields"][] = "RDNDOTFactor";
$tdatastandardsetup[".importFields"][] = "DoubleHoliday";
$tdatastandardsetup[".importFields"][] = "DoubleHolidayRD";
$tdatastandardsetup[".importFields"][] = "DoubleHolidayOT";
$tdatastandardsetup[".importFields"][] = "DoubleHolidayRDOT";
$tdatastandardsetup[".importFields"][] = "SHRDNDFactor";
$tdatastandardsetup[".importFields"][] = "RHRDNDFactor";
$tdatastandardsetup[".importFields"][] = "SHRDNDOTFactor";
$tdatastandardsetup[".importFields"][] = "RHRDNDOTFacotr";
$tdatastandardsetup[".importFields"][] = "DoubleHolidayND";
$tdatastandardsetup[".importFields"][] = "DoubleHolidayRDND";
$tdatastandardsetup[".importFields"][] = "DoubleHolidayNDOT";
$tdatastandardsetup[".importFields"][] = "DoubleHolidayRDNDOT";

$tdatastandardsetup[".printFields"] = array();
$tdatastandardsetup[".printFields"][] = "SID";
$tdatastandardsetup[".printFields"][] = "PreTimeInMins";
$tdatastandardsetup[".printFields"][] = "WorkingDaysInYear";
$tdatastandardsetup[".printFields"][] = "WorkingDaysInYearDailies";
$tdatastandardsetup[".printFields"][] = "AllowableLeaveFrom";
$tdatastandardsetup[".printFields"][] = "AllowableLeaveTo";
$tdatastandardsetup[".printFields"][] = "RHFactor";
$tdatastandardsetup[".printFields"][] = "SHFactor";
$tdatastandardsetup[".printFields"][] = "SHFactorDaily";
$tdatastandardsetup[".printFields"][] = "CHFactor";
$tdatastandardsetup[".printFields"][] = "CHFactorDaily";
$tdatastandardsetup[".printFields"][] = "DoubleHoliday";
$tdatastandardsetup[".printFields"][] = "ReqBeforeHoliday";
$tdatastandardsetup[".printFields"][] = "RegOTFactor";
$tdatastandardsetup[".printFields"][] = "RHOTFactor";
$tdatastandardsetup[".printFields"][] = "SHOTFactor";
$tdatastandardsetup[".printFields"][] = "SHOTFactorDaily";
$tdatastandardsetup[".printFields"][] = "CHOTFactor";
$tdatastandardsetup[".printFields"][] = "CHOTFactorDaily";
$tdatastandardsetup[".printFields"][] = "RDOTFactor";
$tdatastandardsetup[".printFields"][] = "RHRDOTFactor";
$tdatastandardsetup[".printFields"][] = "SHRDOTFactor";
$tdatastandardsetup[".printFields"][] = "SHRDOTFactorDaily";
$tdatastandardsetup[".printFields"][] = "RHNDOTFactor";
$tdatastandardsetup[".printFields"][] = "SHNDOTFactor";
$tdatastandardsetup[".printFields"][] = "CHNDOTFactor";
$tdatastandardsetup[".printFields"][] = "RDNDOTFactor";
$tdatastandardsetup[".printFields"][] = "RHRDNDOTFacotr";
$tdatastandardsetup[".printFields"][] = "SHRDNDOTFactor";
$tdatastandardsetup[".printFields"][] = "DoubleHolidayOT";
$tdatastandardsetup[".printFields"][] = "DoubleHolidayRDOT";
$tdatastandardsetup[".printFields"][] = "DoubleHolidayNDOT";
$tdatastandardsetup[".printFields"][] = "DoubleHolidayRDNDOT";
$tdatastandardsetup[".printFields"][] = "NightDiffStartTime";
$tdatastandardsetup[".printFields"][] = "NightDiffEndTime";
$tdatastandardsetup[".printFields"][] = "RegNDiffFactor";
$tdatastandardsetup[".printFields"][] = "RHNDiffFactor";
$tdatastandardsetup[".printFields"][] = "SHNDiffFactor";
$tdatastandardsetup[".printFields"][] = "CHNDiffFactor";
$tdatastandardsetup[".printFields"][] = "RDNDiffFactor";
$tdatastandardsetup[".printFields"][] = "RegNDOTFactor";
$tdatastandardsetup[".printFields"][] = "RHRDNDFactor";
$tdatastandardsetup[".printFields"][] = "SHRDNDFactor";
$tdatastandardsetup[".printFields"][] = "DoubleHolidayND";
$tdatastandardsetup[".printFields"][] = "DoubleHolidayRDND";
$tdatastandardsetup[".printFields"][] = "RDFactor";
$tdatastandardsetup[".printFields"][] = "RHRDFactor";
$tdatastandardsetup[".printFields"][] = "SHRDFactor";
$tdatastandardsetup[".printFields"][] = "SHRDFactorDaily";
$tdatastandardsetup[".printFields"][] = "DoubleHolidayRD";
$tdatastandardsetup[".printFields"][] = "BonusAnnualLimit";


//	SID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SID";
	$fdata["GoodName"] = "SID";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","SID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SID";

	
	
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




	$tdatastandardsetup["SID"] = $fdata;
//	RegOTFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RegOTFactor";
	$fdata["GoodName"] = "RegOTFactor";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","RegOTFactor");
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

		$fdata["strField"] = "RegOTFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegOTFactor";

	
	
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




	$tdatastandardsetup["RegOTFactor"] = $fdata;
//	RegNDiffFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "RegNDiffFactor";
	$fdata["GoodName"] = "RegNDiffFactor";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","RegNDiffFactor");
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

		$fdata["strField"] = "RegNDiffFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegNDiffFactor";

	
	
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




	$tdatastandardsetup["RegNDiffFactor"] = $fdata;
//	NightDiffStartTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "NightDiffStartTime";
	$fdata["GoodName"] = "NightDiffStartTime";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","NightDiffStartTime");
	$fdata["FieldType"] = 134;

	
	
	
			
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

		$fdata["strField"] = "NightDiffStartTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NightDiffStartTime";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatastandardsetup["NightDiffStartTime"] = $fdata;
//	NightDiffEndTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "NightDiffEndTime";
	$fdata["GoodName"] = "NightDiffEndTime";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","NightDiffEndTime");
	$fdata["FieldType"] = 134;

	
	
	
			
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

		$fdata["strField"] = "NightDiffEndTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NightDiffEndTime";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatastandardsetup["NightDiffEndTime"] = $fdata;
//	WorkingDaysInYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "WorkingDaysInYear";
	$fdata["GoodName"] = "WorkingDaysInYear";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","WorkingDaysInYear");
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

		$fdata["strField"] = "WorkingDaysInYear";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WorkingDaysInYear";

	
	
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




	$tdatastandardsetup["WorkingDaysInYear"] = $fdata;
//	AllowableLeaveFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "AllowableLeaveFrom";
	$fdata["GoodName"] = "AllowableLeaveFrom";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","AllowableLeaveFrom");
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

		$fdata["strField"] = "AllowableLeaveFrom";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AllowableLeaveFrom";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatastandardsetup["AllowableLeaveFrom"] = $fdata;
//	AllowableLeaveTo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "AllowableLeaveTo";
	$fdata["GoodName"] = "AllowableLeaveTo";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","AllowableLeaveTo");
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

		$fdata["strField"] = "AllowableLeaveTo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AllowableLeaveTo";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatastandardsetup["AllowableLeaveTo"] = $fdata;
//	RHOTFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "RHOTFactor";
	$fdata["GoodName"] = "RHOTFactor";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","RHOTFactor");
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

		$fdata["strField"] = "RHOTFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHOTFactor";

	
	
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




	$tdatastandardsetup["RHOTFactor"] = $fdata;
//	SHOTFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "SHOTFactor";
	$fdata["GoodName"] = "SHOTFactor";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","SHOTFactor");
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

		$fdata["strField"] = "SHOTFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHOTFactor";

	
	
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




	$tdatastandardsetup["SHOTFactor"] = $fdata;
//	CHOTFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "CHOTFactor";
	$fdata["GoodName"] = "CHOTFactor";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","CHOTFactor");
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

		$fdata["strField"] = "CHOTFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHOTFactor";

	
	
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




	$tdatastandardsetup["CHOTFactor"] = $fdata;
//	RHNDiffFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "RHNDiffFactor";
	$fdata["GoodName"] = "RHNDiffFactor";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","RHNDiffFactor");
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

		$fdata["strField"] = "RHNDiffFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHNDiffFactor";

	
	
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




	$tdatastandardsetup["RHNDiffFactor"] = $fdata;
//	SHNDiffFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "SHNDiffFactor";
	$fdata["GoodName"] = "SHNDiffFactor";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","SHNDiffFactor");
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

		$fdata["strField"] = "SHNDiffFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHNDiffFactor";

	
	
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




	$tdatastandardsetup["SHNDiffFactor"] = $fdata;
//	CHNDiffFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "CHNDiffFactor";
	$fdata["GoodName"] = "CHNDiffFactor";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","CHNDiffFactor");
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

		$fdata["strField"] = "CHNDiffFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHNDiffFactor";

	
	
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




	$tdatastandardsetup["CHNDiffFactor"] = $fdata;
//	RHFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "RHFactor";
	$fdata["GoodName"] = "RHFactor";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","RHFactor");
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

		$fdata["strField"] = "RHFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHFactor";

	
	
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




	$tdatastandardsetup["RHFactor"] = $fdata;
//	SHFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "SHFactor";
	$fdata["GoodName"] = "SHFactor";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","SHFactor");
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

		$fdata["strField"] = "SHFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHFactor";

	
	
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




	$tdatastandardsetup["SHFactor"] = $fdata;
//	CHFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "CHFactor";
	$fdata["GoodName"] = "CHFactor";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","CHFactor");
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

		$fdata["strField"] = "CHFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHFactor";

	
	
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




	$tdatastandardsetup["CHFactor"] = $fdata;
//	RDFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "RDFactor";
	$fdata["GoodName"] = "RDFactor";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","RDFactor");
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

		$fdata["strField"] = "RDFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RDFactor";

	
	
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




	$tdatastandardsetup["RDFactor"] = $fdata;
//	RDOTFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "RDOTFactor";
	$fdata["GoodName"] = "RDOTFactor";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","RDOTFactor");
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

		$fdata["strField"] = "RDOTFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RDOTFactor";

	
	
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




	$tdatastandardsetup["RDOTFactor"] = $fdata;
//	RDNDiffFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "RDNDiffFactor";
	$fdata["GoodName"] = "RDNDiffFactor";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","RDNDiffFactor");
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

		$fdata["strField"] = "RDNDiffFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RDNDiffFactor";

	
	
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




	$tdatastandardsetup["RDNDiffFactor"] = $fdata;
//	RHRDFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "RHRDFactor";
	$fdata["GoodName"] = "RHRDFactor";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","RHRDFactor");
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

		$fdata["strField"] = "RHRDFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHRDFactor";

	
	
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




	$tdatastandardsetup["RHRDFactor"] = $fdata;
//	RHRDOTFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "RHRDOTFactor";
	$fdata["GoodName"] = "RHRDOTFactor";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","RHRDOTFactor");
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

		$fdata["strField"] = "RHRDOTFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHRDOTFactor";

	
	
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




	$tdatastandardsetup["RHRDOTFactor"] = $fdata;
//	SHRDFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "SHRDFactor";
	$fdata["GoodName"] = "SHRDFactor";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","SHRDFactor");
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

		$fdata["strField"] = "SHRDFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHRDFactor";

	
	
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




	$tdatastandardsetup["SHRDFactor"] = $fdata;
//	SHRDOTFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "SHRDOTFactor";
	$fdata["GoodName"] = "SHRDOTFactor";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","SHRDOTFactor");
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

		$fdata["strField"] = "SHRDOTFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHRDOTFactor";

	
	
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




	$tdatastandardsetup["SHRDOTFactor"] = $fdata;
//	WorkingDaysInYearDailies
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "WorkingDaysInYearDailies";
	$fdata["GoodName"] = "WorkingDaysInYearDailies";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","WorkingDaysInYearDailies");
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

		$fdata["strField"] = "WorkingDaysInYearDailies";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WorkingDaysInYearDailies";

	
	
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




	$tdatastandardsetup["WorkingDaysInYearDailies"] = $fdata;
//	ReqBeforeHoliday
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "ReqBeforeHoliday";
	$fdata["GoodName"] = "ReqBeforeHoliday";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","ReqBeforeHoliday");
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

		$fdata["strField"] = "ReqBeforeHoliday";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ReqBeforeHoliday";

	
	
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




	$tdatastandardsetup["ReqBeforeHoliday"] = $fdata;
//	SHFactorDaily
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "SHFactorDaily";
	$fdata["GoodName"] = "SHFactorDaily";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","SHFactorDaily");
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

		$fdata["strField"] = "SHFactorDaily";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHFactorDaily";

	
	
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




	$tdatastandardsetup["SHFactorDaily"] = $fdata;
//	SHOTFactorDaily
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "SHOTFactorDaily";
	$fdata["GoodName"] = "SHOTFactorDaily";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","SHOTFactorDaily");
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

		$fdata["strField"] = "SHOTFactorDaily";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHOTFactorDaily";

	
	
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




	$tdatastandardsetup["SHOTFactorDaily"] = $fdata;
//	CHFactorDaily
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "CHFactorDaily";
	$fdata["GoodName"] = "CHFactorDaily";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","CHFactorDaily");
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

		$fdata["strField"] = "CHFactorDaily";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHFactorDaily";

	
	
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




	$tdatastandardsetup["CHFactorDaily"] = $fdata;
//	SHRDFactorDaily
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "SHRDFactorDaily";
	$fdata["GoodName"] = "SHRDFactorDaily";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","SHRDFactorDaily");
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

		$fdata["strField"] = "SHRDFactorDaily";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHRDFactorDaily";

	
	
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




	$tdatastandardsetup["SHRDFactorDaily"] = $fdata;
//	SHRDOTFactorDaily
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "SHRDOTFactorDaily";
	$fdata["GoodName"] = "SHRDOTFactorDaily";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","SHRDOTFactorDaily");
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

		$fdata["strField"] = "SHRDOTFactorDaily";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHRDOTFactorDaily";

	
	
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




	$tdatastandardsetup["SHRDOTFactorDaily"] = $fdata;
//	CHOTFactorDaily
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "CHOTFactorDaily";
	$fdata["GoodName"] = "CHOTFactorDaily";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","CHOTFactorDaily");
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

		$fdata["strField"] = "CHOTFactorDaily";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHOTFactorDaily";

	
	
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




	$tdatastandardsetup["CHOTFactorDaily"] = $fdata;
//	PreTimeInMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "PreTimeInMins";
	$fdata["GoodName"] = "PreTimeInMins";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","PreTimeInMins");
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

		$fdata["strField"] = "PreTimeInMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PreTimeInMins";

	
	
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




	$tdatastandardsetup["PreTimeInMins"] = $fdata;
//	BonusAnnualLimit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "BonusAnnualLimit";
	$fdata["GoodName"] = "BonusAnnualLimit";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","BonusAnnualLimit");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BonusAnnualLimit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BonusAnnualLimit";

	
	
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




	$tdatastandardsetup["BonusAnnualLimit"] = $fdata;
//	RegNDOTFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "RegNDOTFactor";
	$fdata["GoodName"] = "RegNDOTFactor";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","RegNDOTFactor");
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

		$fdata["strField"] = "RegNDOTFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegNDOTFactor";

	
	
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




	$tdatastandardsetup["RegNDOTFactor"] = $fdata;
//	RHNDOTFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "RHNDOTFactor";
	$fdata["GoodName"] = "RHNDOTFactor";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","RHNDOTFactor");
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

		$fdata["strField"] = "RHNDOTFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHNDOTFactor";

	
	
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




	$tdatastandardsetup["RHNDOTFactor"] = $fdata;
//	SHNDOTFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "SHNDOTFactor";
	$fdata["GoodName"] = "SHNDOTFactor";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","SHNDOTFactor");
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

		$fdata["strField"] = "SHNDOTFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHNDOTFactor";

	
	
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




	$tdatastandardsetup["SHNDOTFactor"] = $fdata;
//	CHNDOTFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "CHNDOTFactor";
	$fdata["GoodName"] = "CHNDOTFactor";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","CHNDOTFactor");
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

		$fdata["strField"] = "CHNDOTFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHNDOTFactor";

	
	
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




	$tdatastandardsetup["CHNDOTFactor"] = $fdata;
//	RDNDOTFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "RDNDOTFactor";
	$fdata["GoodName"] = "RDNDOTFactor";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","RDNDOTFactor");
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

		$fdata["strField"] = "RDNDOTFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RDNDOTFactor";

	
	
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




	$tdatastandardsetup["RDNDOTFactor"] = $fdata;
//	DoubleHoliday
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "DoubleHoliday";
	$fdata["GoodName"] = "DoubleHoliday";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","DoubleHoliday");
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

		$fdata["strField"] = "DoubleHoliday";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DoubleHoliday";

	
	
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




	$tdatastandardsetup["DoubleHoliday"] = $fdata;
//	DoubleHolidayRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "DoubleHolidayRD";
	$fdata["GoodName"] = "DoubleHolidayRD";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","DoubleHolidayRD");
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

		$fdata["strField"] = "DoubleHolidayRD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DoubleHolidayRD";

	
	
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




	$tdatastandardsetup["DoubleHolidayRD"] = $fdata;
//	DoubleHolidayOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "DoubleHolidayOT";
	$fdata["GoodName"] = "DoubleHolidayOT";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","DoubleHolidayOT");
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

		$fdata["strField"] = "DoubleHolidayOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DoubleHolidayOT";

	
	
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




	$tdatastandardsetup["DoubleHolidayOT"] = $fdata;
//	DoubleHolidayRDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "DoubleHolidayRDOT";
	$fdata["GoodName"] = "DoubleHolidayRDOT";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","DoubleHolidayRDOT");
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

		$fdata["strField"] = "DoubleHolidayRDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DoubleHolidayRDOT";

	
	
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




	$tdatastandardsetup["DoubleHolidayRDOT"] = $fdata;
//	SHRDNDFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "SHRDNDFactor";
	$fdata["GoodName"] = "SHRDNDFactor";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","SHRDNDFactor");
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

		$fdata["strField"] = "SHRDNDFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHRDNDFactor";

	
	
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




	$tdatastandardsetup["SHRDNDFactor"] = $fdata;
//	RHRDNDFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "RHRDNDFactor";
	$fdata["GoodName"] = "RHRDNDFactor";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","RHRDNDFactor");
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

		$fdata["strField"] = "RHRDNDFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHRDNDFactor";

	
	
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




	$tdatastandardsetup["RHRDNDFactor"] = $fdata;
//	SHRDNDOTFactor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "SHRDNDOTFactor";
	$fdata["GoodName"] = "SHRDNDOTFactor";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","SHRDNDOTFactor");
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

		$fdata["strField"] = "SHRDNDOTFactor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHRDNDOTFactor";

	
	
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




	$tdatastandardsetup["SHRDNDOTFactor"] = $fdata;
//	RHRDNDOTFacotr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "RHRDNDOTFacotr";
	$fdata["GoodName"] = "RHRDNDOTFacotr";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","RHRDNDOTFacotr");
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

		$fdata["strField"] = "RHRDNDOTFacotr";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHRDNDOTFacotr";

	
	
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




	$tdatastandardsetup["RHRDNDOTFacotr"] = $fdata;
//	DoubleHolidayND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "DoubleHolidayND";
	$fdata["GoodName"] = "DoubleHolidayND";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","DoubleHolidayND");
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

		$fdata["strField"] = "DoubleHolidayND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DoubleHolidayND";

	
	
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




	$tdatastandardsetup["DoubleHolidayND"] = $fdata;
//	DoubleHolidayRDND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "DoubleHolidayRDND";
	$fdata["GoodName"] = "DoubleHolidayRDND";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","DoubleHolidayRDND");
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

		$fdata["strField"] = "DoubleHolidayRDND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DoubleHolidayRDND";

	
	
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




	$tdatastandardsetup["DoubleHolidayRDND"] = $fdata;
//	DoubleHolidayNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "DoubleHolidayNDOT";
	$fdata["GoodName"] = "DoubleHolidayNDOT";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","DoubleHolidayNDOT");
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

		$fdata["strField"] = "DoubleHolidayNDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DoubleHolidayNDOT";

	
	
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




	$tdatastandardsetup["DoubleHolidayNDOT"] = $fdata;
//	DoubleHolidayRDNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "DoubleHolidayRDNDOT";
	$fdata["GoodName"] = "DoubleHolidayRDNDOT";
	$fdata["ownerTable"] = "standardsetup";
	$fdata["Label"] = GetFieldLabel("standardsetup","DoubleHolidayRDNDOT");
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

		$fdata["strField"] = "DoubleHolidayRDNDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DoubleHolidayRDNDOT";

	
	
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




	$tdatastandardsetup["DoubleHolidayRDNDOT"] = $fdata;


$tables_data["standardsetup"]=&$tdatastandardsetup;
$field_labels["standardsetup"] = &$fieldLabelsstandardsetup;
$fieldToolTips["standardsetup"] = &$fieldToolTipsstandardsetup;
$placeHolders["standardsetup"] = &$placeHoldersstandardsetup;
$page_titles["standardsetup"] = &$pageTitlesstandardsetup;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["standardsetup"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["standardsetup"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_standardsetup()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "SID,  RegOTFactor,  RegNDiffFactor,  NightDiffStartTime,  NightDiffEndTime,  WorkingDaysInYear,  AllowableLeaveFrom,  AllowableLeaveTo,  RHOTFactor,  SHOTFactor,  CHOTFactor,  RHNDiffFactor,  SHNDiffFactor,  CHNDiffFactor,  RHFactor,  SHFactor,  CHFactor,  RDFactor,  RDOTFactor,  RDNDiffFactor,  RHRDFactor,  RHRDOTFactor,  SHRDFactor,  SHRDOTFactor,  WorkingDaysInYearDailies,  ReqBeforeHoliday,  SHFactorDaily,  SHOTFactorDaily,  CHFactorDaily,  SHRDFactorDaily,  SHRDOTFactorDaily,  CHOTFactorDaily,  PreTimeInMins,  BonusAnnualLimit,  RegNDOTFactor,  RHNDOTFactor,  SHNDOTFactor,  CHNDOTFactor,  RDNDOTFactor,  DoubleHoliday,  DoubleHolidayRD,  DoubleHolidayOT,  DoubleHolidayRDOT,  SHRDNDFactor,  RHRDNDFactor,  SHRDNDOTFactor,  RHRDNDOTFacotr,  DoubleHolidayND,  DoubleHolidayRDND,  DoubleHolidayNDOT,  DoubleHolidayRDNDOT";
$proto0["m_strFrom"] = "FROM standardsetup";
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
	"m_strName" => "SID",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto6["m_sql"] = "SID";
$proto6["m_srcTableName"] = "standardsetup";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "RegOTFactor",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto8["m_sql"] = "RegOTFactor";
$proto8["m_srcTableName"] = "standardsetup";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "RegNDiffFactor",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto10["m_sql"] = "RegNDiffFactor";
$proto10["m_srcTableName"] = "standardsetup";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NightDiffStartTime",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto12["m_sql"] = "NightDiffStartTime";
$proto12["m_srcTableName"] = "standardsetup";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "NightDiffEndTime",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto14["m_sql"] = "NightDiffEndTime";
$proto14["m_srcTableName"] = "standardsetup";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "WorkingDaysInYear",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto16["m_sql"] = "WorkingDaysInYear";
$proto16["m_srcTableName"] = "standardsetup";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableLeaveFrom",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto18["m_sql"] = "AllowableLeaveFrom";
$proto18["m_srcTableName"] = "standardsetup";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "AllowableLeaveTo",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto20["m_sql"] = "AllowableLeaveTo";
$proto20["m_srcTableName"] = "standardsetup";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "RHOTFactor",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto22["m_sql"] = "RHOTFactor";
$proto22["m_srcTableName"] = "standardsetup";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOTFactor",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto24["m_sql"] = "SHOTFactor";
$proto24["m_srcTableName"] = "standardsetup";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "CHOTFactor",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto26["m_sql"] = "CHOTFactor";
$proto26["m_srcTableName"] = "standardsetup";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "RHNDiffFactor",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto28["m_sql"] = "RHNDiffFactor";
$proto28["m_srcTableName"] = "standardsetup";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "SHNDiffFactor",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto30["m_sql"] = "SHNDiffFactor";
$proto30["m_srcTableName"] = "standardsetup";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "CHNDiffFactor",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto32["m_sql"] = "CHNDiffFactor";
$proto32["m_srcTableName"] = "standardsetup";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "RHFactor",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto34["m_sql"] = "RHFactor";
$proto34["m_srcTableName"] = "standardsetup";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "SHFactor",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto36["m_sql"] = "SHFactor";
$proto36["m_srcTableName"] = "standardsetup";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "CHFactor",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto38["m_sql"] = "CHFactor";
$proto38["m_srcTableName"] = "standardsetup";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "RDFactor",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto40["m_sql"] = "RDFactor";
$proto40["m_srcTableName"] = "standardsetup";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "RDOTFactor",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto42["m_sql"] = "RDOTFactor";
$proto42["m_srcTableName"] = "standardsetup";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "RDNDiffFactor",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto44["m_sql"] = "RDNDiffFactor";
$proto44["m_srcTableName"] = "standardsetup";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDFactor",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto46["m_sql"] = "RHRDFactor";
$proto46["m_srcTableName"] = "standardsetup";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDOTFactor",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto48["m_sql"] = "RHRDOTFactor";
$proto48["m_srcTableName"] = "standardsetup";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDFactor",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto50["m_sql"] = "SHRDFactor";
$proto50["m_srcTableName"] = "standardsetup";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDOTFactor",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto52["m_sql"] = "SHRDOTFactor";
$proto52["m_srcTableName"] = "standardsetup";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "WorkingDaysInYearDailies",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto54["m_sql"] = "WorkingDaysInYearDailies";
$proto54["m_srcTableName"] = "standardsetup";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "ReqBeforeHoliday",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto56["m_sql"] = "ReqBeforeHoliday";
$proto56["m_srcTableName"] = "standardsetup";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "SHFactorDaily",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto58["m_sql"] = "SHFactorDaily";
$proto58["m_srcTableName"] = "standardsetup";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOTFactorDaily",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto60["m_sql"] = "SHOTFactorDaily";
$proto60["m_srcTableName"] = "standardsetup";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "CHFactorDaily",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto62["m_sql"] = "CHFactorDaily";
$proto62["m_srcTableName"] = "standardsetup";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDFactorDaily",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto64["m_sql"] = "SHRDFactorDaily";
$proto64["m_srcTableName"] = "standardsetup";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDOTFactorDaily",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto66["m_sql"] = "SHRDOTFactorDaily";
$proto66["m_srcTableName"] = "standardsetup";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "CHOTFactorDaily",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto68["m_sql"] = "CHOTFactorDaily";
$proto68["m_srcTableName"] = "standardsetup";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "PreTimeInMins",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto70["m_sql"] = "PreTimeInMins";
$proto70["m_srcTableName"] = "standardsetup";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "BonusAnnualLimit",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto72["m_sql"] = "BonusAnnualLimit";
$proto72["m_srcTableName"] = "standardsetup";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "RegNDOTFactor",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto74["m_sql"] = "RegNDOTFactor";
$proto74["m_srcTableName"] = "standardsetup";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "RHNDOTFactor",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto76["m_sql"] = "RHNDOTFactor";
$proto76["m_srcTableName"] = "standardsetup";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "SHNDOTFactor",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto78["m_sql"] = "SHNDOTFactor";
$proto78["m_srcTableName"] = "standardsetup";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "CHNDOTFactor",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto80["m_sql"] = "CHNDOTFactor";
$proto80["m_srcTableName"] = "standardsetup";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "RDNDOTFactor",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto82["m_sql"] = "RDNDOTFactor";
$proto82["m_srcTableName"] = "standardsetup";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "DoubleHoliday",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto84["m_sql"] = "DoubleHoliday";
$proto84["m_srcTableName"] = "standardsetup";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "DoubleHolidayRD",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto86["m_sql"] = "DoubleHolidayRD";
$proto86["m_srcTableName"] = "standardsetup";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "DoubleHolidayOT",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto88["m_sql"] = "DoubleHolidayOT";
$proto88["m_srcTableName"] = "standardsetup";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "DoubleHolidayRDOT",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto90["m_sql"] = "DoubleHolidayRDOT";
$proto90["m_srcTableName"] = "standardsetup";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDNDFactor",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto92["m_sql"] = "SHRDNDFactor";
$proto92["m_srcTableName"] = "standardsetup";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDNDFactor",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto94["m_sql"] = "RHRDNDFactor";
$proto94["m_srcTableName"] = "standardsetup";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDNDOTFactor",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto96["m_sql"] = "SHRDNDOTFactor";
$proto96["m_srcTableName"] = "standardsetup";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDNDOTFacotr",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto98["m_sql"] = "RHRDNDOTFacotr";
$proto98["m_srcTableName"] = "standardsetup";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "DoubleHolidayND",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto100["m_sql"] = "DoubleHolidayND";
$proto100["m_srcTableName"] = "standardsetup";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "DoubleHolidayRDND",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto102["m_sql"] = "DoubleHolidayRDND";
$proto102["m_srcTableName"] = "standardsetup";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "DoubleHolidayNDOT",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto104["m_sql"] = "DoubleHolidayNDOT";
$proto104["m_srcTableName"] = "standardsetup";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "DoubleHolidayRDNDOT",
	"m_strTable" => "standardsetup",
	"m_srcTableName" => "standardsetup"
));

$proto106["m_sql"] = "DoubleHolidayRDNDOT";
$proto106["m_srcTableName"] = "standardsetup";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto108=array();
$proto108["m_link"] = "SQLL_MAIN";
			$proto109=array();
$proto109["m_strName"] = "standardsetup";
$proto109["m_srcTableName"] = "standardsetup";
$proto109["m_columns"] = array();
$proto109["m_columns"][] = "SID";
$proto109["m_columns"][] = "LateGracePeriodMins";
$proto109["m_columns"][] = "PreTimeInMins";
$proto109["m_columns"][] = "RegOTFactor";
$proto109["m_columns"][] = "RegNDiffFactor";
$proto109["m_columns"][] = "NightDiffStartTime";
$proto109["m_columns"][] = "NightDiffEndTime";
$proto109["m_columns"][] = "WorkingDaysInYear";
$proto109["m_columns"][] = "AllowableLeaveFrom";
$proto109["m_columns"][] = "AllowableLeaveTo";
$proto109["m_columns"][] = "PostTimeOutMins";
$proto109["m_columns"][] = "RHOTFactor";
$proto109["m_columns"][] = "SHOTFactor";
$proto109["m_columns"][] = "CHOTFactor";
$proto109["m_columns"][] = "RHNDiffFactor";
$proto109["m_columns"][] = "SHNDiffFactor";
$proto109["m_columns"][] = "CHNDiffFactor";
$proto109["m_columns"][] = "RHFactor";
$proto109["m_columns"][] = "SHFactor";
$proto109["m_columns"][] = "CHFactor";
$proto109["m_columns"][] = "RDFactor";
$proto109["m_columns"][] = "RDOTFactor";
$proto109["m_columns"][] = "RDNDiffFactor";
$proto109["m_columns"][] = "RHRDFactor";
$proto109["m_columns"][] = "RHRDOTFactor";
$proto109["m_columns"][] = "SHRDFactor";
$proto109["m_columns"][] = "SHRDOTFactor";
$proto109["m_columns"][] = "WorkingDaysInYearDailies";
$proto109["m_columns"][] = "ReqBeforeHoliday";
$proto109["m_columns"][] = "SHFactorDaily";
$proto109["m_columns"][] = "SHOTFactorDaily";
$proto109["m_columns"][] = "CHFactorDaily";
$proto109["m_columns"][] = "SHRDFactorDaily";
$proto109["m_columns"][] = "SHRDOTFactorDaily";
$proto109["m_columns"][] = "CHOTFactorDaily";
$proto109["m_columns"][] = "BonusAnnualLimit";
$proto109["m_columns"][] = "RegNDOTFactor";
$proto109["m_columns"][] = "RHNDOTFactor";
$proto109["m_columns"][] = "SHNDOTFactor";
$proto109["m_columns"][] = "CHNDOTFactor";
$proto109["m_columns"][] = "RDNDOTFactor";
$proto109["m_columns"][] = "DoubleHoliday";
$proto109["m_columns"][] = "DoubleHolidayRD";
$proto109["m_columns"][] = "DoubleHolidayOT";
$proto109["m_columns"][] = "DoubleHolidayRDOT";
$proto109["m_columns"][] = "SHRDNDFactor";
$proto109["m_columns"][] = "RHRDNDFactor";
$proto109["m_columns"][] = "SHRDNDOTFactor";
$proto109["m_columns"][] = "RHRDNDOTFacotr";
$proto109["m_columns"][] = "DoubleHolidayND";
$proto109["m_columns"][] = "DoubleHolidayRDND";
$proto109["m_columns"][] = "DoubleHolidayNDOT";
$proto109["m_columns"][] = "DoubleHolidayRDNDOT";
$obj = new SQLTable($proto109);

$proto108["m_table"] = $obj;
$proto108["m_sql"] = "standardsetup";
$proto108["m_alias"] = "";
$proto108["m_srcTableName"] = "standardsetup";
$proto110=array();
$proto110["m_sql"] = "";
$proto110["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto110["m_column"]=$obj;
$proto110["m_contained"] = array();
$proto110["m_strCase"] = "";
$proto110["m_havingmode"] = false;
$proto110["m_inBrackets"] = false;
$proto110["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto110);

$proto108["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto108);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="standardsetup";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_standardsetup = createSqlQuery_standardsetup();


	
		;

																																																			

$tdatastandardsetup[".sqlquery"] = $queryData_standardsetup;

$tableEvents["standardsetup"] = new eventsBase;
$tdatastandardsetup[".hasEvents"] = false;

?>