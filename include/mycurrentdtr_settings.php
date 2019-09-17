<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamycurrentdtr = array();
	$tdatamycurrentdtr[".truncateText"] = true;
	$tdatamycurrentdtr[".NumberOfChars"] = 80;
	$tdatamycurrentdtr[".ShortName"] = "mycurrentdtr";
	$tdatamycurrentdtr[".OwnerID"] = "EmployeeID";
	$tdatamycurrentdtr[".OriginalTable"] = "dt5";

//	field labels
$fieldLabelsmycurrentdtr = array();
$fieldToolTipsmycurrentdtr = array();
$pageTitlesmycurrentdtr = array();
$placeHoldersmycurrentdtr = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmycurrentdtr["English"] = array();
	$fieldToolTipsmycurrentdtr["English"] = array();
	$placeHoldersmycurrentdtr["English"] = array();
	$pageTitlesmycurrentdtr["English"] = array();
	$fieldLabelsmycurrentdtr["English"]["ScID"] = "Sc ID";
	$fieldToolTipsmycurrentdtr["English"]["ScID"] = "";
	$placeHoldersmycurrentdtr["English"]["ScID"] = "";
	$fieldLabelsmycurrentdtr["English"]["EmployeeID"] = "Biometric ID";
	$fieldToolTipsmycurrentdtr["English"]["EmployeeID"] = "";
	$placeHoldersmycurrentdtr["English"]["EmployeeID"] = "";
	$fieldLabelsmycurrentdtr["English"]["UserName"] = "Employee";
	$fieldToolTipsmycurrentdtr["English"]["UserName"] = "";
	$placeHoldersmycurrentdtr["English"]["UserName"] = "";
	$fieldLabelsmycurrentdtr["English"]["WageType"] = "Wage Type";
	$fieldToolTipsmycurrentdtr["English"]["WageType"] = "";
	$placeHoldersmycurrentdtr["English"]["WageType"] = "";
	$fieldLabelsmycurrentdtr["English"]["SDate"] = "Date";
	$fieldToolTipsmycurrentdtr["English"]["SDate"] = "";
	$placeHoldersmycurrentdtr["English"]["SDate"] = "";
	$fieldLabelsmycurrentdtr["English"]["DayIs"] = "Day";
	$fieldToolTipsmycurrentdtr["English"]["DayIs"] = "";
	$placeHoldersmycurrentdtr["English"]["DayIs"] = "";
	$fieldLabelsmycurrentdtr["English"]["RestDay"] = "Rest Day";
	$fieldToolTipsmycurrentdtr["English"]["RestDay"] = "";
	$placeHoldersmycurrentdtr["English"]["RestDay"] = "";
	$fieldLabelsmycurrentdtr["English"]["STimeIn"] = "STime In";
	$fieldToolTipsmycurrentdtr["English"]["STimeIn"] = "";
	$placeHoldersmycurrentdtr["English"]["STimeIn"] = "";
	$fieldLabelsmycurrentdtr["English"]["STimeOut"] = "STime Out";
	$fieldToolTipsmycurrentdtr["English"]["STimeOut"] = "";
	$placeHoldersmycurrentdtr["English"]["STimeOut"] = "";
	$fieldLabelsmycurrentdtr["English"]["TimeIn"] = "Time In";
	$fieldToolTipsmycurrentdtr["English"]["TimeIn"] = "";
	$placeHoldersmycurrentdtr["English"]["TimeIn"] = "";
	$fieldLabelsmycurrentdtr["English"]["TimeOut"] = "Time Out";
	$fieldToolTipsmycurrentdtr["English"]["TimeOut"] = "";
	$placeHoldersmycurrentdtr["English"]["TimeOut"] = "";
	$fieldLabelsmycurrentdtr["English"]["MisPunched"] = "Mispunched";
	$fieldToolTipsmycurrentdtr["English"]["MisPunched"] = "";
	$placeHoldersmycurrentdtr["English"]["MisPunched"] = "";
	$fieldLabelsmycurrentdtr["English"]["RegWD"] = "Reg WD";
	$fieldToolTipsmycurrentdtr["English"]["RegWD"] = "";
	$placeHoldersmycurrentdtr["English"]["RegWD"] = "";
	$fieldLabelsmycurrentdtr["English"]["DWork"] = "DWork";
	$fieldToolTipsmycurrentdtr["English"]["DWork"] = "";
	$placeHoldersmycurrentdtr["English"]["DWork"] = "";
	$fieldLabelsmycurrentdtr["English"]["Absent"] = "Absent";
	$fieldToolTipsmycurrentdtr["English"]["Absent"] = "";
	$placeHoldersmycurrentdtr["English"]["Absent"] = "";
	$fieldLabelsmycurrentdtr["English"]["LateMins"] = "Late(m)";
	$fieldToolTipsmycurrentdtr["English"]["LateMins"] = "";
	$placeHoldersmycurrentdtr["English"]["LateMins"] = "";
	$fieldLabelsmycurrentdtr["English"]["UnderstimeMins"] = "Undertime(m)";
	$fieldToolTipsmycurrentdtr["English"]["UnderstimeMins"] = "";
	$placeHoldersmycurrentdtr["English"]["UnderstimeMins"] = "";
	$fieldLabelsmycurrentdtr["English"]["HolidayType"] = "Holiday Type";
	$fieldToolTipsmycurrentdtr["English"]["HolidayType"] = "";
	$placeHoldersmycurrentdtr["English"]["HolidayType"] = "";
	$fieldLabelsmycurrentdtr["English"]["TempOT"] = "Temp OT(m)";
	$fieldToolTipsmycurrentdtr["English"]["TempOT"] = "";
	$placeHoldersmycurrentdtr["English"]["TempOT"] = "";
	$fieldLabelsmycurrentdtr["English"]["ApprovedOT"] = "Approved OT";
	$fieldToolTipsmycurrentdtr["English"]["ApprovedOT"] = "";
	$placeHoldersmycurrentdtr["English"]["ApprovedOT"] = "";
	$fieldLabelsmycurrentdtr["English"]["AOTMins"] = "AOT(m)";
	$fieldToolTipsmycurrentdtr["English"]["AOTMins"] = "";
	$placeHoldersmycurrentdtr["English"]["AOTMins"] = "";
	$fieldLabelsmycurrentdtr["English"]["NDMins"] = "Temp ND(m)";
	$fieldToolTipsmycurrentdtr["English"]["NDMins"] = "";
	$placeHoldersmycurrentdtr["English"]["NDMins"] = "";
	$fieldLabelsmycurrentdtr["English"]["ApprovedNightDiff"] = "Approved ND";
	$fieldToolTipsmycurrentdtr["English"]["ApprovedNightDiff"] = "";
	$placeHoldersmycurrentdtr["English"]["ApprovedNightDiff"] = "";
	$fieldLabelsmycurrentdtr["English"]["ANDiff"] = "ANDiff(m)";
	$fieldToolTipsmycurrentdtr["English"]["ANDiff"] = "";
	$placeHoldersmycurrentdtr["English"]["ANDiff"] = "";
	$fieldLabelsmycurrentdtr["English"]["ApprovedRD"] = "Approved RD";
	$fieldToolTipsmycurrentdtr["English"]["ApprovedRD"] = "";
	$placeHoldersmycurrentdtr["English"]["ApprovedRD"] = "";
	$fieldLabelsmycurrentdtr["English"]["RDMins"] = "ARD(m)";
	$fieldToolTipsmycurrentdtr["English"]["RDMins"] = "";
	$placeHoldersmycurrentdtr["English"]["RDMins"] = "";
	$fieldLabelsmycurrentdtr["English"]["VL"] = "VL";
	$fieldToolTipsmycurrentdtr["English"]["VL"] = "";
	$placeHoldersmycurrentdtr["English"]["VL"] = "";
	$fieldLabelsmycurrentdtr["English"]["SL"] = "SL";
	$fieldToolTipsmycurrentdtr["English"]["SL"] = "";
	$placeHoldersmycurrentdtr["English"]["SL"] = "";
	$fieldLabelsmycurrentdtr["English"]["EL"] = "EL";
	$fieldToolTipsmycurrentdtr["English"]["EL"] = "";
	$placeHoldersmycurrentdtr["English"]["EL"] = "";
	$fieldLabelsmycurrentdtr["English"]["PL"] = "PL";
	$fieldToolTipsmycurrentdtr["English"]["PL"] = "";
	$placeHoldersmycurrentdtr["English"]["PL"] = "";
	$fieldLabelsmycurrentdtr["English"]["TrO"] = "Tr O";
	$fieldToolTipsmycurrentdtr["English"]["TrO"] = "";
	$placeHoldersmycurrentdtr["English"]["TrO"] = "";
	$fieldLabelsmycurrentdtr["English"]["SHND"] = "SH-ND(m)";
	$fieldToolTipsmycurrentdtr["English"]["SHND"] = "";
	$placeHoldersmycurrentdtr["English"]["SHND"] = "";
	$fieldLabelsmycurrentdtr["English"]["Rlink"] = "Rlink";
	$fieldToolTipsmycurrentdtr["English"]["Rlink"] = "";
	$placeHoldersmycurrentdtr["English"]["Rlink"] = "";
	$fieldLabelsmycurrentdtr["English"]["Division"] = "Division";
	$fieldToolTipsmycurrentdtr["English"]["Division"] = "";
	$placeHoldersmycurrentdtr["English"]["Division"] = "";
	$fieldLabelsmycurrentdtr["English"]["Department"] = "Department";
	$fieldToolTipsmycurrentdtr["English"]["Department"] = "";
	$placeHoldersmycurrentdtr["English"]["Department"] = "";
	$fieldLabelsmycurrentdtr["English"]["Employer"] = "Employer";
	$fieldToolTipsmycurrentdtr["English"]["Employer"] = "";
	$placeHoldersmycurrentdtr["English"]["Employer"] = "";
	$fieldLabelsmycurrentdtr["English"]["AfterBreakLogOut"] = "Break-Out";
	$fieldToolTipsmycurrentdtr["English"]["AfterBreakLogOut"] = "";
	$placeHoldersmycurrentdtr["English"]["AfterBreakLogOut"] = "";
	$fieldLabelsmycurrentdtr["English"]["AfterBreakLog"] = "Break-In";
	$fieldToolTipsmycurrentdtr["English"]["AfterBreakLog"] = "";
	$placeHoldersmycurrentdtr["English"]["AfterBreakLog"] = "";
	$fieldLabelsmycurrentdtr["English"]["BreakLateMins"] = "Break Late(m)";
	$fieldToolTipsmycurrentdtr["English"]["BreakLateMins"] = "";
	$placeHoldersmycurrentdtr["English"]["BreakLateMins"] = "";
	$fieldLabelsmycurrentdtr["English"]["EarlyMins"] = "Early OT(m)";
	$fieldToolTipsmycurrentdtr["English"]["EarlyMins"] = "";
	$placeHoldersmycurrentdtr["English"]["EarlyMins"] = "";
	$fieldLabelsmycurrentdtr["English"]["RHNDOT"] = "RH-ND-OT(m)";
	$fieldToolTipsmycurrentdtr["English"]["RHNDOT"] = "";
	$placeHoldersmycurrentdtr["English"]["RHNDOT"] = "";
	$fieldLabelsmycurrentdtr["English"]["SHNDOT"] = "SH-ND-OT(m)";
	$fieldToolTipsmycurrentdtr["English"]["SHNDOT"] = "";
	$placeHoldersmycurrentdtr["English"]["SHNDOT"] = "";
	$fieldLabelsmycurrentdtr["English"]["RDNDOT"] = "RD-ND-OT(m)";
	$fieldToolTipsmycurrentdtr["English"]["RDNDOT"] = "";
	$placeHoldersmycurrentdtr["English"]["RDNDOT"] = "";
	$fieldLabelsmycurrentdtr["English"]["DH"] = "DH(m)";
	$fieldToolTipsmycurrentdtr["English"]["DH"] = "";
	$placeHoldersmycurrentdtr["English"]["DH"] = "";
	$fieldLabelsmycurrentdtr["English"]["DHRD"] = "DH-RD(m)";
	$fieldToolTipsmycurrentdtr["English"]["DHRD"] = "";
	$placeHoldersmycurrentdtr["English"]["DHRD"] = "";
	$fieldLabelsmycurrentdtr["English"]["DHOT"] = "DH-OT(m)";
	$fieldToolTipsmycurrentdtr["English"]["DHOT"] = "";
	$placeHoldersmycurrentdtr["English"]["DHOT"] = "";
	$fieldLabelsmycurrentdtr["English"]["DHRDOT"] = "DH-RD-OT(m)";
	$fieldToolTipsmycurrentdtr["English"]["DHRDOT"] = "";
	$placeHoldersmycurrentdtr["English"]["DHRDOT"] = "";
	$fieldLabelsmycurrentdtr["English"]["SHRDND"] = "SH-RD-ND(m)";
	$fieldToolTipsmycurrentdtr["English"]["SHRDND"] = "";
	$placeHoldersmycurrentdtr["English"]["SHRDND"] = "";
	$fieldLabelsmycurrentdtr["English"]["RHRDND"] = "RH-RD-ND(m)";
	$fieldToolTipsmycurrentdtr["English"]["RHRDND"] = "";
	$placeHoldersmycurrentdtr["English"]["RHRDND"] = "";
	$fieldLabelsmycurrentdtr["English"]["SHRDNDOT"] = "SH-RD-ND-OT(m)";
	$fieldToolTipsmycurrentdtr["English"]["SHRDNDOT"] = "";
	$placeHoldersmycurrentdtr["English"]["SHRDNDOT"] = "";
	$fieldLabelsmycurrentdtr["English"]["RHRDNDOT"] = "RH-RD-ND-OT(m)";
	$fieldToolTipsmycurrentdtr["English"]["RHRDNDOT"] = "";
	$placeHoldersmycurrentdtr["English"]["RHRDNDOT"] = "";
	$fieldLabelsmycurrentdtr["English"]["DHND"] = "DH-ND(m)";
	$fieldToolTipsmycurrentdtr["English"]["DHND"] = "";
	$placeHoldersmycurrentdtr["English"]["DHND"] = "";
	$fieldLabelsmycurrentdtr["English"]["DHRDND"] = "DH-RD-ND(m)";
	$fieldToolTipsmycurrentdtr["English"]["DHRDND"] = "";
	$placeHoldersmycurrentdtr["English"]["DHRDND"] = "";
	$fieldLabelsmycurrentdtr["English"]["DHNDOT"] = "DH-ND-OT(m)";
	$fieldToolTipsmycurrentdtr["English"]["DHNDOT"] = "";
	$placeHoldersmycurrentdtr["English"]["DHNDOT"] = "";
	$fieldLabelsmycurrentdtr["English"]["DHRDNDOT"] = "DH-RD-ND-OT(m)";
	$fieldToolTipsmycurrentdtr["English"]["DHRDNDOT"] = "";
	$placeHoldersmycurrentdtr["English"]["DHRDNDOT"] = "";
	$fieldLabelsmycurrentdtr["English"]["SHOTD"] = "SH-OT-D(m)";
	$fieldToolTipsmycurrentdtr["English"]["SHOTD"] = "";
	$placeHoldersmycurrentdtr["English"]["SHOTD"] = "";
	$fieldLabelsmycurrentdtr["English"]["NDOT"] = "ND-OT(m)";
	$fieldToolTipsmycurrentdtr["English"]["NDOT"] = "";
	$placeHoldersmycurrentdtr["English"]["NDOT"] = "";
	$fieldLabelsmycurrentdtr["English"]["RHRDOT"] = "RH-RD-OT(m)";
	$fieldToolTipsmycurrentdtr["English"]["RHRDOT"] = "";
	$placeHoldersmycurrentdtr["English"]["RHRDOT"] = "";
	$fieldLabelsmycurrentdtr["English"]["SHRDOT"] = "SH-RD-OT(m)";
	$fieldToolTipsmycurrentdtr["English"]["SHRDOT"] = "";
	$placeHoldersmycurrentdtr["English"]["SHRDOT"] = "";
	$fieldLabelsmycurrentdtr["English"]["SHRDOTD"] = "SH-RD-OT-D(m)";
	$fieldToolTipsmycurrentdtr["English"]["SHRDOTD"] = "";
	$placeHoldersmycurrentdtr["English"]["SHRDOTD"] = "";
	$fieldLabelsmycurrentdtr["English"]["RH"] = "RH(m)";
	$fieldToolTipsmycurrentdtr["English"]["RH"] = "";
	$placeHoldersmycurrentdtr["English"]["RH"] = "";
	$fieldLabelsmycurrentdtr["English"]["SH"] = "SH(m)";
	$fieldToolTipsmycurrentdtr["English"]["SH"] = "";
	$placeHoldersmycurrentdtr["English"]["SH"] = "";
	$fieldLabelsmycurrentdtr["English"]["RHRD"] = "RH-RD(m)";
	$fieldToolTipsmycurrentdtr["English"]["RHRD"] = "";
	$placeHoldersmycurrentdtr["English"]["RHRD"] = "";
	$fieldLabelsmycurrentdtr["English"]["SHRD"] = "SH-RD(m)";
	$fieldToolTipsmycurrentdtr["English"]["SHRD"] = "";
	$placeHoldersmycurrentdtr["English"]["SHRD"] = "";
	$fieldLabelsmycurrentdtr["English"]["RegOT"] = "Reg OT(m)";
	$fieldToolTipsmycurrentdtr["English"]["RegOT"] = "";
	$placeHoldersmycurrentdtr["English"]["RegOT"] = "";
	$fieldLabelsmycurrentdtr["English"]["RHOT"] = "RH-OT(m)";
	$fieldToolTipsmycurrentdtr["English"]["RHOT"] = "";
	$placeHoldersmycurrentdtr["English"]["RHOT"] = "";
	$fieldLabelsmycurrentdtr["English"]["SHOT"] = "SH-OT(m)";
	$fieldToolTipsmycurrentdtr["English"]["SHOT"] = "";
	$placeHoldersmycurrentdtr["English"]["SHOT"] = "";
	$fieldLabelsmycurrentdtr["English"]["RHND"] = "RH-ND(m)";
	$fieldToolTipsmycurrentdtr["English"]["RHND"] = "";
	$placeHoldersmycurrentdtr["English"]["RHND"] = "";
	$fieldLabelsmycurrentdtr["English"]["RDOT"] = "RD-OT(m)";
	$fieldToolTipsmycurrentdtr["English"]["RDOT"] = "";
	$placeHoldersmycurrentdtr["English"]["RDOT"] = "";
	$fieldLabelsmycurrentdtr["English"]["RegND"] = "Reg ND(m)";
	$fieldToolTipsmycurrentdtr["English"]["RegND"] = "";
	$placeHoldersmycurrentdtr["English"]["RegND"] = "";
	$fieldLabelsmycurrentdtr["English"]["RegRD"] = "Reg RD(m)";
	$fieldToolTipsmycurrentdtr["English"]["RegRD"] = "";
	$placeHoldersmycurrentdtr["English"]["RegRD"] = "";
	$fieldLabelsmycurrentdtr["English"]["RDND"] = "RD-ND(m)";
	$fieldToolTipsmycurrentdtr["English"]["RDND"] = "";
	$placeHoldersmycurrentdtr["English"]["RDND"] = "";
	$fieldLabelsmycurrentdtr["English"]["NDOTMins"] = "Temp ND-OT(m)";
	$fieldToolTipsmycurrentdtr["English"]["NDOTMins"] = "";
	$placeHoldersmycurrentdtr["English"]["NDOTMins"] = "";
	$fieldLabelsmycurrentdtr["English"]["PostMins"] = "Post OT (m)";
	$fieldToolTipsmycurrentdtr["English"]["PostMins"] = "";
	$placeHoldersmycurrentdtr["English"]["PostMins"] = "";
	if (count($fieldToolTipsmycurrentdtr["English"]))
		$tdatamycurrentdtr[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmycurrentdtr[""] = array();
	$fieldToolTipsmycurrentdtr[""] = array();
	$placeHoldersmycurrentdtr[""] = array();
	$pageTitlesmycurrentdtr[""] = array();
	$fieldLabelsmycurrentdtr[""]["SHOTD"] = "SHOTD";
	$fieldToolTipsmycurrentdtr[""]["SHOTD"] = "";
	$placeHoldersmycurrentdtr[""]["SHOTD"] = "";
	$fieldLabelsmycurrentdtr[""]["NDOT"] = "NDOT";
	$fieldToolTipsmycurrentdtr[""]["NDOT"] = "";
	$placeHoldersmycurrentdtr[""]["NDOT"] = "";
	$fieldLabelsmycurrentdtr[""]["RHRDOT"] = "RHRDOT";
	$fieldToolTipsmycurrentdtr[""]["RHRDOT"] = "";
	$placeHoldersmycurrentdtr[""]["RHRDOT"] = "";
	$fieldLabelsmycurrentdtr[""]["SHRDOT"] = "SHRDOT";
	$fieldToolTipsmycurrentdtr[""]["SHRDOT"] = "";
	$placeHoldersmycurrentdtr[""]["SHRDOT"] = "";
	$fieldLabelsmycurrentdtr[""]["SHRDOTD"] = "SHRDOTD";
	$fieldToolTipsmycurrentdtr[""]["SHRDOTD"] = "";
	$placeHoldersmycurrentdtr[""]["SHRDOTD"] = "";
	$fieldLabelsmycurrentdtr[""]["RH"] = "RH";
	$fieldToolTipsmycurrentdtr[""]["RH"] = "";
	$placeHoldersmycurrentdtr[""]["RH"] = "";
	$fieldLabelsmycurrentdtr[""]["SH"] = "SH";
	$fieldToolTipsmycurrentdtr[""]["SH"] = "";
	$placeHoldersmycurrentdtr[""]["SH"] = "";
	$fieldLabelsmycurrentdtr[""]["RHRD"] = "RHRD";
	$fieldToolTipsmycurrentdtr[""]["RHRD"] = "";
	$placeHoldersmycurrentdtr[""]["RHRD"] = "";
	$fieldLabelsmycurrentdtr[""]["SHRD"] = "SHRD";
	$fieldToolTipsmycurrentdtr[""]["SHRD"] = "";
	$placeHoldersmycurrentdtr[""]["SHRD"] = "";
	$fieldLabelsmycurrentdtr[""]["RegOT"] = "Reg OT";
	$fieldToolTipsmycurrentdtr[""]["RegOT"] = "";
	$placeHoldersmycurrentdtr[""]["RegOT"] = "";
	$fieldLabelsmycurrentdtr[""]["RHOT"] = "RHOT";
	$fieldToolTipsmycurrentdtr[""]["RHOT"] = "";
	$placeHoldersmycurrentdtr[""]["RHOT"] = "";
	$fieldLabelsmycurrentdtr[""]["SHOT"] = "SHOT";
	$fieldToolTipsmycurrentdtr[""]["SHOT"] = "";
	$placeHoldersmycurrentdtr[""]["SHOT"] = "";
	$fieldLabelsmycurrentdtr[""]["RHND"] = "RHND";
	$fieldToolTipsmycurrentdtr[""]["RHND"] = "";
	$placeHoldersmycurrentdtr[""]["RHND"] = "";
	$fieldLabelsmycurrentdtr[""]["RDOT"] = "RDOT";
	$fieldToolTipsmycurrentdtr[""]["RDOT"] = "";
	$placeHoldersmycurrentdtr[""]["RDOT"] = "";
	$fieldLabelsmycurrentdtr[""]["RegND"] = "Reg ND";
	$fieldToolTipsmycurrentdtr[""]["RegND"] = "";
	$placeHoldersmycurrentdtr[""]["RegND"] = "";
	$fieldLabelsmycurrentdtr[""]["RegRD"] = "Reg RD";
	$fieldToolTipsmycurrentdtr[""]["RegRD"] = "";
	$placeHoldersmycurrentdtr[""]["RegRD"] = "";
	$fieldLabelsmycurrentdtr[""]["RDND"] = "RDND";
	$fieldToolTipsmycurrentdtr[""]["RDND"] = "";
	$placeHoldersmycurrentdtr[""]["RDND"] = "";
	$fieldLabelsmycurrentdtr[""]["NDOTMins"] = "NDOTMins";
	$fieldToolTipsmycurrentdtr[""]["NDOTMins"] = "";
	$placeHoldersmycurrentdtr[""]["NDOTMins"] = "";
	$fieldLabelsmycurrentdtr[""]["PostMins"] = "Post Mins";
	$fieldToolTipsmycurrentdtr[""]["PostMins"] = "";
	$placeHoldersmycurrentdtr[""]["PostMins"] = "";
	if (count($fieldToolTipsmycurrentdtr[""]))
		$tdatamycurrentdtr[".isUseToolTips"] = true;
}


	$tdatamycurrentdtr[".NCSearch"] = true;



$tdatamycurrentdtr[".shortTableName"] = "mycurrentdtr";
$tdatamycurrentdtr[".nSecOptions"] = 1;
$tdatamycurrentdtr[".recsPerRowPrint"] = 1;
$tdatamycurrentdtr[".mainTableOwnerID"] = "EmployeeID";
$tdatamycurrentdtr[".moveNext"] = 1;
$tdatamycurrentdtr[".entityType"] = 1;

$tdatamycurrentdtr[".strOriginalTableName"] = "dt5";

	



$tdatamycurrentdtr[".showAddInPopup"] = false;

$tdatamycurrentdtr[".showEditInPopup"] = false;

$tdatamycurrentdtr[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamycurrentdtr[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamycurrentdtr[".fieldsForRegister"] = array();

$tdatamycurrentdtr[".listAjax"] = false;

	$tdatamycurrentdtr[".audit"] = false;

	$tdatamycurrentdtr[".locking"] = false;



$tdatamycurrentdtr[".list"] = true;



$tdatamycurrentdtr[".reorderRecordsByHeader"] = true;


$tdatamycurrentdtr[".exportFormatting"] = 2;
$tdatamycurrentdtr[".exportDelimiter"] = ",";
		
$tdatamycurrentdtr[".view"] = true;


$tdatamycurrentdtr[".exportTo"] = true;

$tdatamycurrentdtr[".printFriendly"] = true;


$tdatamycurrentdtr[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamycurrentdtr[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamycurrentdtr[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamycurrentdtr[".searchSaving"] = false;
//

$tdatamycurrentdtr[".showSearchPanel"] = true;
		$tdatamycurrentdtr[".flexibleSearch"] = true;

$tdatamycurrentdtr[".isUseAjaxSuggest"] = true;

$tdatamycurrentdtr[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																		

$tdatamycurrentdtr[".ajaxCodeSnippetAdded"] = false;

$tdatamycurrentdtr[".buttonsAdded"] = false;

$tdatamycurrentdtr[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamycurrentdtr[".isUseTimeForSearch"] = false;



$tdatamycurrentdtr[".badgeColor"] = "1E90FF";


$tdatamycurrentdtr[".allSearchFields"] = array();
$tdatamycurrentdtr[".filterFields"] = array();
$tdatamycurrentdtr[".requiredSearchFields"] = array();

$tdatamycurrentdtr[".allSearchFields"][] = "EmployeeID";
	$tdatamycurrentdtr[".allSearchFields"][] = "UserName";
	$tdatamycurrentdtr[".allSearchFields"][] = "Division";
	$tdatamycurrentdtr[".allSearchFields"][] = "WageType";
	$tdatamycurrentdtr[".allSearchFields"][] = "SDate";
	$tdatamycurrentdtr[".allSearchFields"][] = "MisPunched";
	$tdatamycurrentdtr[".allSearchFields"][] = "RH";
	$tdatamycurrentdtr[".allSearchFields"][] = "SH";
	$tdatamycurrentdtr[".allSearchFields"][] = "RegRD";
	$tdatamycurrentdtr[".allSearchFields"][] = "PostMins";
	$tdatamycurrentdtr[".allSearchFields"][] = "NDOTMins";
	$tdatamycurrentdtr[".allSearchFields"][] = "RegOT";
	$tdatamycurrentdtr[".allSearchFields"][] = "RHOT";
	$tdatamycurrentdtr[".allSearchFields"][] = "SHOT";
	$tdatamycurrentdtr[".allSearchFields"][] = "SHOTD";
	$tdatamycurrentdtr[".allSearchFields"][] = "RDOT";
	$tdatamycurrentdtr[".allSearchFields"][] = "NDOT";
	$tdatamycurrentdtr[".allSearchFields"][] = "RegND";
	$tdatamycurrentdtr[".allSearchFields"][] = "RHND";
	$tdatamycurrentdtr[".allSearchFields"][] = "RDND";
	$tdatamycurrentdtr[".allSearchFields"][] = "RHRD";
	$tdatamycurrentdtr[".allSearchFields"][] = "SHRD";
	$tdatamycurrentdtr[".allSearchFields"][] = "RHRDOT";
	$tdatamycurrentdtr[".allSearchFields"][] = "SHRDOT";
	$tdatamycurrentdtr[".allSearchFields"][] = "SHRDOTD";
	

$tdatamycurrentdtr[".googleLikeFields"] = array();
$tdatamycurrentdtr[".googleLikeFields"][] = "EmployeeID";
$tdatamycurrentdtr[".googleLikeFields"][] = "UserName";
$tdatamycurrentdtr[".googleLikeFields"][] = "WageType";
$tdatamycurrentdtr[".googleLikeFields"][] = "SDate";
$tdatamycurrentdtr[".googleLikeFields"][] = "MisPunched";
$tdatamycurrentdtr[".googleLikeFields"][] = "Division";
$tdatamycurrentdtr[".googleLikeFields"][] = "SHOTD";
$tdatamycurrentdtr[".googleLikeFields"][] = "NDOT";
$tdatamycurrentdtr[".googleLikeFields"][] = "RHRDOT";
$tdatamycurrentdtr[".googleLikeFields"][] = "SHRDOT";
$tdatamycurrentdtr[".googleLikeFields"][] = "SHRDOTD";
$tdatamycurrentdtr[".googleLikeFields"][] = "RH";
$tdatamycurrentdtr[".googleLikeFields"][] = "SH";
$tdatamycurrentdtr[".googleLikeFields"][] = "RHRD";
$tdatamycurrentdtr[".googleLikeFields"][] = "SHRD";
$tdatamycurrentdtr[".googleLikeFields"][] = "RegOT";
$tdatamycurrentdtr[".googleLikeFields"][] = "RHOT";
$tdatamycurrentdtr[".googleLikeFields"][] = "SHOT";
$tdatamycurrentdtr[".googleLikeFields"][] = "RHND";
$tdatamycurrentdtr[".googleLikeFields"][] = "RDOT";
$tdatamycurrentdtr[".googleLikeFields"][] = "RegND";
$tdatamycurrentdtr[".googleLikeFields"][] = "RegRD";
$tdatamycurrentdtr[".googleLikeFields"][] = "RDND";
$tdatamycurrentdtr[".googleLikeFields"][] = "NDOTMins";
$tdatamycurrentdtr[".googleLikeFields"][] = "PostMins";

$tdatamycurrentdtr[".panelSearchFields"] = array();
$tdatamycurrentdtr[".searchPanelOptions"] = array();
$tdatamycurrentdtr[".panelSearchFields"][] = "UserName";
	$tdatamycurrentdtr[".panelSearchFields"][] = "Division";
	$tdatamycurrentdtr[".panelSearchFields"][] = "WageType";
	$tdatamycurrentdtr[".panelSearchFields"][] = "SDate";
	$tdatamycurrentdtr[".panelSearchFields"][] = "MisPunched";
	
$tdatamycurrentdtr[".advSearchFields"] = array();
$tdatamycurrentdtr[".advSearchFields"][] = "EmployeeID";
$tdatamycurrentdtr[".advSearchFields"][] = "UserName";
$tdatamycurrentdtr[".advSearchFields"][] = "Division";
$tdatamycurrentdtr[".advSearchFields"][] = "WageType";
$tdatamycurrentdtr[".advSearchFields"][] = "SDate";
$tdatamycurrentdtr[".advSearchFields"][] = "MisPunched";
$tdatamycurrentdtr[".advSearchFields"][] = "RH";
$tdatamycurrentdtr[".advSearchFields"][] = "SH";
$tdatamycurrentdtr[".advSearchFields"][] = "RegRD";
$tdatamycurrentdtr[".advSearchFields"][] = "PostMins";
$tdatamycurrentdtr[".advSearchFields"][] = "NDOTMins";
$tdatamycurrentdtr[".advSearchFields"][] = "RegOT";
$tdatamycurrentdtr[".advSearchFields"][] = "RHOT";
$tdatamycurrentdtr[".advSearchFields"][] = "SHOT";
$tdatamycurrentdtr[".advSearchFields"][] = "SHOTD";
$tdatamycurrentdtr[".advSearchFields"][] = "RDOT";
$tdatamycurrentdtr[".advSearchFields"][] = "NDOT";
$tdatamycurrentdtr[".advSearchFields"][] = "RegND";
$tdatamycurrentdtr[".advSearchFields"][] = "RHND";
$tdatamycurrentdtr[".advSearchFields"][] = "RDND";
$tdatamycurrentdtr[".advSearchFields"][] = "RHRD";
$tdatamycurrentdtr[".advSearchFields"][] = "SHRD";
$tdatamycurrentdtr[".advSearchFields"][] = "RHRDOT";
$tdatamycurrentdtr[".advSearchFields"][] = "SHRDOT";
$tdatamycurrentdtr[".advSearchFields"][] = "SHRDOTD";

$tdatamycurrentdtr[".tableType"] = "list";

$tdatamycurrentdtr[".printerPageOrientation"] = 0;
$tdatamycurrentdtr[".nPrinterPageScale"] = 100;

$tdatamycurrentdtr[".nPrinterSplitRecords"] = 40;

$tdatamycurrentdtr[".nPrinterPDFSplitRecords"] = 40;



$tdatamycurrentdtr[".geocodingEnabled"] = false;





$tdatamycurrentdtr[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatamycurrentdtr[".totalsFields"] = array();
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "MisPunched",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Checkbox');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "RegWD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "DWork",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "Absent",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "LateMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "UnderstimeMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "BreakLateMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "VL",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "SL",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "EL",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "PL",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "TrO",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "DH",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "RegRD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "EarlyMins",
	"numRows" => 0,
	"totalsType" => "COUNT",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "TempOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "AOTMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "NDMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "NDOTMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "ANDiff",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "RDMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "RegOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "RHOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "SHOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "SHOTD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "RDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "DHOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "NDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "RegND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "RHND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "SHND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "DHND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "RDND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "RHNDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "SHNDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "DHNDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "RDNDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "RHRD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "SHRD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "DHRD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "RHRDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "SHRDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "SHRDOTD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "DHRDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "RHRDND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "SHRDND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "DHRDND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "RHRDNDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "SHRDNDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatamycurrentdtr[".totalsFields"][] = array(
	"fName" => "DHRDNDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatamycurrentdtr[".pageSize"] = 20;

$tdatamycurrentdtr[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY dt5.UserName";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamycurrentdtr[".strOrderBy"] = $tstrOrderBy;

$tdatamycurrentdtr[".orderindexes"] = array();
	$tdatamycurrentdtr[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "dt5.UserName");


$tdatamycurrentdtr[".sqlHead"] = "SELECT dt5.ScID,  dt5.EmployeeID,  dt5.UserName,  dt5.WageType,  dt5.SDate,  dt5.DayIs,  dt5.RestDay,  dt5.STimeIn,  dt5.STimeOut,  dt5.TimeIn,  dt5.TimeOut,  dt5.MisPunched,  dt5.RegWD,  dt5.DWork,  dt5.Absent,  dt5.LateMins,  dt5.UnderstimeMins,  dt5.HolidayType,  dt5.TempOT,  dt5.ApprovedOT,  dt5.AOTMins,  dt5.NDMins,  dt5.ApprovedNightDiff,  dt5.ANDiff,  dt5.ApprovedRD,  dt5.RDMins,  dt5.VL,  dt5.SL,  dt5.EL,  dt5.PL,  dt5.TrO,  dt5.Rlink,  demo_user.Division,  demo_user.Department,  demo_user.Employer,  dt5.AfterBreakLogOut,  dt5.AfterBreakLog,  dt5.BreakLateMins,  dt5.EarlyMins,  dt5.SHOTD,  dt5.DHOT,  dt5.NDOT,  dt5.SHND,  dt5.DHND,  dt5.DHRDND,  dt5.RHRDND,  dt5.SHRDND,  dt5.RHNDOT,  dt5.SHNDOT,  dt5.DHNDOT,  dt5.RDNDOT,  dt5.RHRDOT,  dt5.SHRDOT,  dt5.SHRDOTD,  dt5.DHRDOT,  dt5.RHRDNDOT,  dt5.SHRDNDOT,  dt5.DHRDNDOT,  dt5.RH,  dt5.SH,  dt5.DH,  dt5.RHRD,  dt5.SHRD,  dt5.DHRD,  dt5.RegOT,  dt5.RHOT,  dt5.SHOT,  dt5.RHND,  dt5.RDOT,  dt5.RegND,  dt5.RegRD,  dt5.RDND,  dt5.NDOTMins,  dt5.PostMins";
$tdatamycurrentdtr[".sqlFrom"] = "FROM dt5  INNER JOIN demo_user ON dt5.EmployeeID = demo_user.EmployeeID";
$tdatamycurrentdtr[".sqlWhereExpr"] = "";
$tdatamycurrentdtr[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamycurrentdtr[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamycurrentdtr[".arrGroupsPerPage"] = $arrGPP;

$tdatamycurrentdtr[".highlightSearchResults"] = true;

$tableKeysmycurrentdtr = array();
$tableKeysmycurrentdtr[] = "ScID";
$tdatamycurrentdtr[".Keys"] = $tableKeysmycurrentdtr;

$tdatamycurrentdtr[".listFields"] = array();
$tdatamycurrentdtr[".listFields"][] = "ScID";
$tdatamycurrentdtr[".listFields"][] = "EmployeeID";
$tdatamycurrentdtr[".listFields"][] = "UserName";
$tdatamycurrentdtr[".listFields"][] = "Employer";
$tdatamycurrentdtr[".listFields"][] = "Division";
$tdatamycurrentdtr[".listFields"][] = "Department";
$tdatamycurrentdtr[".listFields"][] = "WageType";
$tdatamycurrentdtr[".listFields"][] = "SDate";
$tdatamycurrentdtr[".listFields"][] = "DayIs";
$tdatamycurrentdtr[".listFields"][] = "RestDay";
$tdatamycurrentdtr[".listFields"][] = "STimeIn";
$tdatamycurrentdtr[".listFields"][] = "STimeOut";
$tdatamycurrentdtr[".listFields"][] = "TimeIn";
$tdatamycurrentdtr[".listFields"][] = "TimeOut";
$tdatamycurrentdtr[".listFields"][] = "AfterBreakLogOut";
$tdatamycurrentdtr[".listFields"][] = "AfterBreakLog";
$tdatamycurrentdtr[".listFields"][] = "MisPunched";
$tdatamycurrentdtr[".listFields"][] = "RegWD";
$tdatamycurrentdtr[".listFields"][] = "DWork";
$tdatamycurrentdtr[".listFields"][] = "Absent";
$tdatamycurrentdtr[".listFields"][] = "LateMins";
$tdatamycurrentdtr[".listFields"][] = "UnderstimeMins";
$tdatamycurrentdtr[".listFields"][] = "BreakLateMins";
$tdatamycurrentdtr[".listFields"][] = "HolidayType";
$tdatamycurrentdtr[".listFields"][] = "VL";
$tdatamycurrentdtr[".listFields"][] = "SL";
$tdatamycurrentdtr[".listFields"][] = "EL";
$tdatamycurrentdtr[".listFields"][] = "PL";
$tdatamycurrentdtr[".listFields"][] = "TrO";
$tdatamycurrentdtr[".listFields"][] = "RH";
$tdatamycurrentdtr[".listFields"][] = "SH";
$tdatamycurrentdtr[".listFields"][] = "DH";
$tdatamycurrentdtr[".listFields"][] = "RegRD";
$tdatamycurrentdtr[".listFields"][] = "EarlyMins";
$tdatamycurrentdtr[".listFields"][] = "PostMins";
$tdatamycurrentdtr[".listFields"][] = "TempOT";
$tdatamycurrentdtr[".listFields"][] = "ApprovedOT";
$tdatamycurrentdtr[".listFields"][] = "AOTMins";
$tdatamycurrentdtr[".listFields"][] = "NDMins";
$tdatamycurrentdtr[".listFields"][] = "NDOTMins";
$tdatamycurrentdtr[".listFields"][] = "ApprovedNightDiff";
$tdatamycurrentdtr[".listFields"][] = "ANDiff";
$tdatamycurrentdtr[".listFields"][] = "ApprovedRD";
$tdatamycurrentdtr[".listFields"][] = "RDMins";
$tdatamycurrentdtr[".listFields"][] = "RegOT";
$tdatamycurrentdtr[".listFields"][] = "RHOT";
$tdatamycurrentdtr[".listFields"][] = "SHOT";
$tdatamycurrentdtr[".listFields"][] = "SHOTD";
$tdatamycurrentdtr[".listFields"][] = "RDOT";
$tdatamycurrentdtr[".listFields"][] = "DHOT";
$tdatamycurrentdtr[".listFields"][] = "NDOT";
$tdatamycurrentdtr[".listFields"][] = "RegND";
$tdatamycurrentdtr[".listFields"][] = "RHND";
$tdatamycurrentdtr[".listFields"][] = "SHND";
$tdatamycurrentdtr[".listFields"][] = "DHND";
$tdatamycurrentdtr[".listFields"][] = "RDND";
$tdatamycurrentdtr[".listFields"][] = "RHNDOT";
$tdatamycurrentdtr[".listFields"][] = "SHNDOT";
$tdatamycurrentdtr[".listFields"][] = "DHNDOT";
$tdatamycurrentdtr[".listFields"][] = "RDNDOT";
$tdatamycurrentdtr[".listFields"][] = "RHRD";
$tdatamycurrentdtr[".listFields"][] = "SHRD";
$tdatamycurrentdtr[".listFields"][] = "DHRD";
$tdatamycurrentdtr[".listFields"][] = "RHRDOT";
$tdatamycurrentdtr[".listFields"][] = "SHRDOT";
$tdatamycurrentdtr[".listFields"][] = "SHRDOTD";
$tdatamycurrentdtr[".listFields"][] = "DHRDOT";
$tdatamycurrentdtr[".listFields"][] = "RHRDND";
$tdatamycurrentdtr[".listFields"][] = "SHRDND";
$tdatamycurrentdtr[".listFields"][] = "DHRDND";
$tdatamycurrentdtr[".listFields"][] = "RHRDNDOT";
$tdatamycurrentdtr[".listFields"][] = "SHRDNDOT";
$tdatamycurrentdtr[".listFields"][] = "DHRDNDOT";
$tdatamycurrentdtr[".listFields"][] = "Rlink";

$tdatamycurrentdtr[".hideMobileList"] = array();


$tdatamycurrentdtr[".viewFields"] = array();
$tdatamycurrentdtr[".viewFields"][] = "ScID";
$tdatamycurrentdtr[".viewFields"][] = "EmployeeID";
$tdatamycurrentdtr[".viewFields"][] = "UserName";
$tdatamycurrentdtr[".viewFields"][] = "Employer";
$tdatamycurrentdtr[".viewFields"][] = "Division";
$tdatamycurrentdtr[".viewFields"][] = "Department";
$tdatamycurrentdtr[".viewFields"][] = "WageType";
$tdatamycurrentdtr[".viewFields"][] = "SDate";
$tdatamycurrentdtr[".viewFields"][] = "DayIs";
$tdatamycurrentdtr[".viewFields"][] = "RestDay";
$tdatamycurrentdtr[".viewFields"][] = "STimeIn";
$tdatamycurrentdtr[".viewFields"][] = "STimeOut";
$tdatamycurrentdtr[".viewFields"][] = "TimeIn";
$tdatamycurrentdtr[".viewFields"][] = "TimeOut";
$tdatamycurrentdtr[".viewFields"][] = "AfterBreakLogOut";
$tdatamycurrentdtr[".viewFields"][] = "AfterBreakLog";
$tdatamycurrentdtr[".viewFields"][] = "MisPunched";
$tdatamycurrentdtr[".viewFields"][] = "RegWD";
$tdatamycurrentdtr[".viewFields"][] = "DWork";
$tdatamycurrentdtr[".viewFields"][] = "Absent";
$tdatamycurrentdtr[".viewFields"][] = "LateMins";
$tdatamycurrentdtr[".viewFields"][] = "UnderstimeMins";
$tdatamycurrentdtr[".viewFields"][] = "BreakLateMins";
$tdatamycurrentdtr[".viewFields"][] = "HolidayType";
$tdatamycurrentdtr[".viewFields"][] = "VL";
$tdatamycurrentdtr[".viewFields"][] = "SL";
$tdatamycurrentdtr[".viewFields"][] = "EL";
$tdatamycurrentdtr[".viewFields"][] = "PL";
$tdatamycurrentdtr[".viewFields"][] = "TrO";
$tdatamycurrentdtr[".viewFields"][] = "RH";
$tdatamycurrentdtr[".viewFields"][] = "SH";
$tdatamycurrentdtr[".viewFields"][] = "DH";
$tdatamycurrentdtr[".viewFields"][] = "RegRD";
$tdatamycurrentdtr[".viewFields"][] = "EarlyMins";
$tdatamycurrentdtr[".viewFields"][] = "PostMins";
$tdatamycurrentdtr[".viewFields"][] = "TempOT";
$tdatamycurrentdtr[".viewFields"][] = "ApprovedOT";
$tdatamycurrentdtr[".viewFields"][] = "AOTMins";
$tdatamycurrentdtr[".viewFields"][] = "NDMins";
$tdatamycurrentdtr[".viewFields"][] = "NDOTMins";
$tdatamycurrentdtr[".viewFields"][] = "ApprovedNightDiff";
$tdatamycurrentdtr[".viewFields"][] = "ANDiff";
$tdatamycurrentdtr[".viewFields"][] = "ApprovedRD";
$tdatamycurrentdtr[".viewFields"][] = "RDMins";
$tdatamycurrentdtr[".viewFields"][] = "RegOT";
$tdatamycurrentdtr[".viewFields"][] = "RHOT";
$tdatamycurrentdtr[".viewFields"][] = "SHOT";
$tdatamycurrentdtr[".viewFields"][] = "SHOTD";
$tdatamycurrentdtr[".viewFields"][] = "RDOT";
$tdatamycurrentdtr[".viewFields"][] = "DHOT";
$tdatamycurrentdtr[".viewFields"][] = "NDOT";
$tdatamycurrentdtr[".viewFields"][] = "RegND";
$tdatamycurrentdtr[".viewFields"][] = "RHND";
$tdatamycurrentdtr[".viewFields"][] = "SHND";
$tdatamycurrentdtr[".viewFields"][] = "DHND";
$tdatamycurrentdtr[".viewFields"][] = "RDND";
$tdatamycurrentdtr[".viewFields"][] = "RHNDOT";
$tdatamycurrentdtr[".viewFields"][] = "SHNDOT";
$tdatamycurrentdtr[".viewFields"][] = "DHNDOT";
$tdatamycurrentdtr[".viewFields"][] = "RDNDOT";
$tdatamycurrentdtr[".viewFields"][] = "RHRD";
$tdatamycurrentdtr[".viewFields"][] = "SHRD";
$tdatamycurrentdtr[".viewFields"][] = "DHRD";
$tdatamycurrentdtr[".viewFields"][] = "RHRDOT";
$tdatamycurrentdtr[".viewFields"][] = "SHRDOT";
$tdatamycurrentdtr[".viewFields"][] = "SHRDOTD";
$tdatamycurrentdtr[".viewFields"][] = "DHRDOT";
$tdatamycurrentdtr[".viewFields"][] = "RHRDND";
$tdatamycurrentdtr[".viewFields"][] = "SHRDND";
$tdatamycurrentdtr[".viewFields"][] = "DHRDND";
$tdatamycurrentdtr[".viewFields"][] = "RHRDNDOT";
$tdatamycurrentdtr[".viewFields"][] = "SHRDNDOT";
$tdatamycurrentdtr[".viewFields"][] = "DHRDNDOT";
$tdatamycurrentdtr[".viewFields"][] = "Rlink";

$tdatamycurrentdtr[".addFields"] = array();

$tdatamycurrentdtr[".masterListFields"] = array();
$tdatamycurrentdtr[".masterListFields"][] = "ScID";
$tdatamycurrentdtr[".masterListFields"][] = "EmployeeID";
$tdatamycurrentdtr[".masterListFields"][] = "UserName";
$tdatamycurrentdtr[".masterListFields"][] = "Employer";
$tdatamycurrentdtr[".masterListFields"][] = "Division";
$tdatamycurrentdtr[".masterListFields"][] = "Department";
$tdatamycurrentdtr[".masterListFields"][] = "WageType";
$tdatamycurrentdtr[".masterListFields"][] = "SDate";
$tdatamycurrentdtr[".masterListFields"][] = "DayIs";
$tdatamycurrentdtr[".masterListFields"][] = "RestDay";
$tdatamycurrentdtr[".masterListFields"][] = "STimeIn";
$tdatamycurrentdtr[".masterListFields"][] = "STimeOut";
$tdatamycurrentdtr[".masterListFields"][] = "TimeIn";
$tdatamycurrentdtr[".masterListFields"][] = "TimeOut";
$tdatamycurrentdtr[".masterListFields"][] = "AfterBreakLogOut";
$tdatamycurrentdtr[".masterListFields"][] = "AfterBreakLog";
$tdatamycurrentdtr[".masterListFields"][] = "MisPunched";
$tdatamycurrentdtr[".masterListFields"][] = "RegWD";
$tdatamycurrentdtr[".masterListFields"][] = "DWork";
$tdatamycurrentdtr[".masterListFields"][] = "Absent";
$tdatamycurrentdtr[".masterListFields"][] = "LateMins";
$tdatamycurrentdtr[".masterListFields"][] = "UnderstimeMins";
$tdatamycurrentdtr[".masterListFields"][] = "BreakLateMins";
$tdatamycurrentdtr[".masterListFields"][] = "HolidayType";
$tdatamycurrentdtr[".masterListFields"][] = "VL";
$tdatamycurrentdtr[".masterListFields"][] = "SL";
$tdatamycurrentdtr[".masterListFields"][] = "EL";
$tdatamycurrentdtr[".masterListFields"][] = "PL";
$tdatamycurrentdtr[".masterListFields"][] = "TrO";
$tdatamycurrentdtr[".masterListFields"][] = "RH";
$tdatamycurrentdtr[".masterListFields"][] = "SH";
$tdatamycurrentdtr[".masterListFields"][] = "DH";
$tdatamycurrentdtr[".masterListFields"][] = "RegRD";
$tdatamycurrentdtr[".masterListFields"][] = "EarlyMins";
$tdatamycurrentdtr[".masterListFields"][] = "PostMins";
$tdatamycurrentdtr[".masterListFields"][] = "TempOT";
$tdatamycurrentdtr[".masterListFields"][] = "ApprovedOT";
$tdatamycurrentdtr[".masterListFields"][] = "AOTMins";
$tdatamycurrentdtr[".masterListFields"][] = "NDMins";
$tdatamycurrentdtr[".masterListFields"][] = "NDOTMins";
$tdatamycurrentdtr[".masterListFields"][] = "ApprovedNightDiff";
$tdatamycurrentdtr[".masterListFields"][] = "ANDiff";
$tdatamycurrentdtr[".masterListFields"][] = "ApprovedRD";
$tdatamycurrentdtr[".masterListFields"][] = "RDMins";
$tdatamycurrentdtr[".masterListFields"][] = "RegOT";
$tdatamycurrentdtr[".masterListFields"][] = "RHOT";
$tdatamycurrentdtr[".masterListFields"][] = "SHOT";
$tdatamycurrentdtr[".masterListFields"][] = "SHOTD";
$tdatamycurrentdtr[".masterListFields"][] = "RDOT";
$tdatamycurrentdtr[".masterListFields"][] = "DHOT";
$tdatamycurrentdtr[".masterListFields"][] = "NDOT";
$tdatamycurrentdtr[".masterListFields"][] = "RegND";
$tdatamycurrentdtr[".masterListFields"][] = "RHND";
$tdatamycurrentdtr[".masterListFields"][] = "SHND";
$tdatamycurrentdtr[".masterListFields"][] = "DHND";
$tdatamycurrentdtr[".masterListFields"][] = "RDND";
$tdatamycurrentdtr[".masterListFields"][] = "RHNDOT";
$tdatamycurrentdtr[".masterListFields"][] = "SHNDOT";
$tdatamycurrentdtr[".masterListFields"][] = "DHNDOT";
$tdatamycurrentdtr[".masterListFields"][] = "RDNDOT";
$tdatamycurrentdtr[".masterListFields"][] = "RHRD";
$tdatamycurrentdtr[".masterListFields"][] = "SHRD";
$tdatamycurrentdtr[".masterListFields"][] = "DHRD";
$tdatamycurrentdtr[".masterListFields"][] = "RHRDOT";
$tdatamycurrentdtr[".masterListFields"][] = "SHRDOT";
$tdatamycurrentdtr[".masterListFields"][] = "SHRDOTD";
$tdatamycurrentdtr[".masterListFields"][] = "DHRDOT";
$tdatamycurrentdtr[".masterListFields"][] = "RHRDND";
$tdatamycurrentdtr[".masterListFields"][] = "SHRDND";
$tdatamycurrentdtr[".masterListFields"][] = "DHRDND";
$tdatamycurrentdtr[".masterListFields"][] = "RHRDNDOT";
$tdatamycurrentdtr[".masterListFields"][] = "SHRDNDOT";
$tdatamycurrentdtr[".masterListFields"][] = "DHRDNDOT";
$tdatamycurrentdtr[".masterListFields"][] = "Rlink";

$tdatamycurrentdtr[".inlineAddFields"] = array();

$tdatamycurrentdtr[".editFields"] = array();

$tdatamycurrentdtr[".inlineEditFields"] = array();

$tdatamycurrentdtr[".updateSelectedFields"] = array();


$tdatamycurrentdtr[".exportFields"] = array();
$tdatamycurrentdtr[".exportFields"][] = "ScID";
$tdatamycurrentdtr[".exportFields"][] = "EmployeeID";
$tdatamycurrentdtr[".exportFields"][] = "UserName";
$tdatamycurrentdtr[".exportFields"][] = "Employer";
$tdatamycurrentdtr[".exportFields"][] = "Division";
$tdatamycurrentdtr[".exportFields"][] = "Department";
$tdatamycurrentdtr[".exportFields"][] = "WageType";
$tdatamycurrentdtr[".exportFields"][] = "SDate";
$tdatamycurrentdtr[".exportFields"][] = "DayIs";
$tdatamycurrentdtr[".exportFields"][] = "RestDay";
$tdatamycurrentdtr[".exportFields"][] = "STimeIn";
$tdatamycurrentdtr[".exportFields"][] = "STimeOut";
$tdatamycurrentdtr[".exportFields"][] = "TimeIn";
$tdatamycurrentdtr[".exportFields"][] = "TimeOut";
$tdatamycurrentdtr[".exportFields"][] = "AfterBreakLogOut";
$tdatamycurrentdtr[".exportFields"][] = "AfterBreakLog";
$tdatamycurrentdtr[".exportFields"][] = "MisPunched";
$tdatamycurrentdtr[".exportFields"][] = "RegWD";
$tdatamycurrentdtr[".exportFields"][] = "DWork";
$tdatamycurrentdtr[".exportFields"][] = "Absent";
$tdatamycurrentdtr[".exportFields"][] = "LateMins";
$tdatamycurrentdtr[".exportFields"][] = "UnderstimeMins";
$tdatamycurrentdtr[".exportFields"][] = "BreakLateMins";
$tdatamycurrentdtr[".exportFields"][] = "HolidayType";
$tdatamycurrentdtr[".exportFields"][] = "VL";
$tdatamycurrentdtr[".exportFields"][] = "SL";
$tdatamycurrentdtr[".exportFields"][] = "EL";
$tdatamycurrentdtr[".exportFields"][] = "PL";
$tdatamycurrentdtr[".exportFields"][] = "TrO";
$tdatamycurrentdtr[".exportFields"][] = "RH";
$tdatamycurrentdtr[".exportFields"][] = "SH";
$tdatamycurrentdtr[".exportFields"][] = "DH";
$tdatamycurrentdtr[".exportFields"][] = "RegRD";
$tdatamycurrentdtr[".exportFields"][] = "EarlyMins";
$tdatamycurrentdtr[".exportFields"][] = "PostMins";
$tdatamycurrentdtr[".exportFields"][] = "TempOT";
$tdatamycurrentdtr[".exportFields"][] = "ApprovedOT";
$tdatamycurrentdtr[".exportFields"][] = "AOTMins";
$tdatamycurrentdtr[".exportFields"][] = "NDMins";
$tdatamycurrentdtr[".exportFields"][] = "NDOTMins";
$tdatamycurrentdtr[".exportFields"][] = "ApprovedNightDiff";
$tdatamycurrentdtr[".exportFields"][] = "ANDiff";
$tdatamycurrentdtr[".exportFields"][] = "ApprovedRD";
$tdatamycurrentdtr[".exportFields"][] = "RDMins";
$tdatamycurrentdtr[".exportFields"][] = "RegOT";
$tdatamycurrentdtr[".exportFields"][] = "RHOT";
$tdatamycurrentdtr[".exportFields"][] = "SHOT";
$tdatamycurrentdtr[".exportFields"][] = "SHOTD";
$tdatamycurrentdtr[".exportFields"][] = "RDOT";
$tdatamycurrentdtr[".exportFields"][] = "DHOT";
$tdatamycurrentdtr[".exportFields"][] = "NDOT";
$tdatamycurrentdtr[".exportFields"][] = "RegND";
$tdatamycurrentdtr[".exportFields"][] = "RHND";
$tdatamycurrentdtr[".exportFields"][] = "SHND";
$tdatamycurrentdtr[".exportFields"][] = "DHND";
$tdatamycurrentdtr[".exportFields"][] = "RDND";
$tdatamycurrentdtr[".exportFields"][] = "RHNDOT";
$tdatamycurrentdtr[".exportFields"][] = "SHNDOT";
$tdatamycurrentdtr[".exportFields"][] = "DHNDOT";
$tdatamycurrentdtr[".exportFields"][] = "RDNDOT";
$tdatamycurrentdtr[".exportFields"][] = "RHRD";
$tdatamycurrentdtr[".exportFields"][] = "SHRD";
$tdatamycurrentdtr[".exportFields"][] = "DHRD";
$tdatamycurrentdtr[".exportFields"][] = "RHRDOT";
$tdatamycurrentdtr[".exportFields"][] = "SHRDOT";
$tdatamycurrentdtr[".exportFields"][] = "SHRDOTD";
$tdatamycurrentdtr[".exportFields"][] = "DHRDOT";
$tdatamycurrentdtr[".exportFields"][] = "RHRDND";
$tdatamycurrentdtr[".exportFields"][] = "SHRDND";
$tdatamycurrentdtr[".exportFields"][] = "DHRDND";
$tdatamycurrentdtr[".exportFields"][] = "RHRDNDOT";
$tdatamycurrentdtr[".exportFields"][] = "SHRDNDOT";
$tdatamycurrentdtr[".exportFields"][] = "DHRDNDOT";
$tdatamycurrentdtr[".exportFields"][] = "Rlink";

$tdatamycurrentdtr[".importFields"] = array();

$tdatamycurrentdtr[".printFields"] = array();
$tdatamycurrentdtr[".printFields"][] = "ScID";
$tdatamycurrentdtr[".printFields"][] = "EmployeeID";
$tdatamycurrentdtr[".printFields"][] = "UserName";
$tdatamycurrentdtr[".printFields"][] = "Employer";
$tdatamycurrentdtr[".printFields"][] = "Division";
$tdatamycurrentdtr[".printFields"][] = "Department";
$tdatamycurrentdtr[".printFields"][] = "WageType";
$tdatamycurrentdtr[".printFields"][] = "SDate";
$tdatamycurrentdtr[".printFields"][] = "DayIs";
$tdatamycurrentdtr[".printFields"][] = "RestDay";
$tdatamycurrentdtr[".printFields"][] = "STimeIn";
$tdatamycurrentdtr[".printFields"][] = "STimeOut";
$tdatamycurrentdtr[".printFields"][] = "TimeIn";
$tdatamycurrentdtr[".printFields"][] = "TimeOut";
$tdatamycurrentdtr[".printFields"][] = "AfterBreakLogOut";
$tdatamycurrentdtr[".printFields"][] = "AfterBreakLog";
$tdatamycurrentdtr[".printFields"][] = "MisPunched";
$tdatamycurrentdtr[".printFields"][] = "RegWD";
$tdatamycurrentdtr[".printFields"][] = "DWork";
$tdatamycurrentdtr[".printFields"][] = "Absent";
$tdatamycurrentdtr[".printFields"][] = "LateMins";
$tdatamycurrentdtr[".printFields"][] = "UnderstimeMins";
$tdatamycurrentdtr[".printFields"][] = "BreakLateMins";
$tdatamycurrentdtr[".printFields"][] = "HolidayType";
$tdatamycurrentdtr[".printFields"][] = "VL";
$tdatamycurrentdtr[".printFields"][] = "SL";
$tdatamycurrentdtr[".printFields"][] = "EL";
$tdatamycurrentdtr[".printFields"][] = "PL";
$tdatamycurrentdtr[".printFields"][] = "TrO";
$tdatamycurrentdtr[".printFields"][] = "RH";
$tdatamycurrentdtr[".printFields"][] = "SH";
$tdatamycurrentdtr[".printFields"][] = "DH";
$tdatamycurrentdtr[".printFields"][] = "RegRD";
$tdatamycurrentdtr[".printFields"][] = "EarlyMins";
$tdatamycurrentdtr[".printFields"][] = "PostMins";
$tdatamycurrentdtr[".printFields"][] = "TempOT";
$tdatamycurrentdtr[".printFields"][] = "ApprovedOT";
$tdatamycurrentdtr[".printFields"][] = "AOTMins";
$tdatamycurrentdtr[".printFields"][] = "NDMins";
$tdatamycurrentdtr[".printFields"][] = "NDOTMins";
$tdatamycurrentdtr[".printFields"][] = "ApprovedNightDiff";
$tdatamycurrentdtr[".printFields"][] = "ANDiff";
$tdatamycurrentdtr[".printFields"][] = "ApprovedRD";
$tdatamycurrentdtr[".printFields"][] = "RDMins";
$tdatamycurrentdtr[".printFields"][] = "RegOT";
$tdatamycurrentdtr[".printFields"][] = "RHOT";
$tdatamycurrentdtr[".printFields"][] = "SHOT";
$tdatamycurrentdtr[".printFields"][] = "SHOTD";
$tdatamycurrentdtr[".printFields"][] = "RDOT";
$tdatamycurrentdtr[".printFields"][] = "DHOT";
$tdatamycurrentdtr[".printFields"][] = "NDOT";
$tdatamycurrentdtr[".printFields"][] = "RegND";
$tdatamycurrentdtr[".printFields"][] = "RHND";
$tdatamycurrentdtr[".printFields"][] = "SHND";
$tdatamycurrentdtr[".printFields"][] = "DHND";
$tdatamycurrentdtr[".printFields"][] = "RDND";
$tdatamycurrentdtr[".printFields"][] = "RHNDOT";
$tdatamycurrentdtr[".printFields"][] = "SHNDOT";
$tdatamycurrentdtr[".printFields"][] = "DHNDOT";
$tdatamycurrentdtr[".printFields"][] = "RDNDOT";
$tdatamycurrentdtr[".printFields"][] = "RHRD";
$tdatamycurrentdtr[".printFields"][] = "SHRD";
$tdatamycurrentdtr[".printFields"][] = "DHRD";
$tdatamycurrentdtr[".printFields"][] = "RHRDOT";
$tdatamycurrentdtr[".printFields"][] = "SHRDOT";
$tdatamycurrentdtr[".printFields"][] = "SHRDOTD";
$tdatamycurrentdtr[".printFields"][] = "DHRDOT";
$tdatamycurrentdtr[".printFields"][] = "RHRDND";
$tdatamycurrentdtr[".printFields"][] = "SHRDND";
$tdatamycurrentdtr[".printFields"][] = "DHRDND";
$tdatamycurrentdtr[".printFields"][] = "RHRDNDOT";
$tdatamycurrentdtr[".printFields"][] = "SHRDNDOT";
$tdatamycurrentdtr[".printFields"][] = "DHRDNDOT";
$tdatamycurrentdtr[".printFields"][] = "Rlink";


//	ScID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ScID";
	$fdata["GoodName"] = "ScID";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","ScID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ScID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.ScID";

	
	
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








	$tdatamycurrentdtr["ScID"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","EmployeeID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EmployeeID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.EmployeeID";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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




	$tdatamycurrentdtr["EmployeeID"] = $fdata;
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","UserName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "UserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.UserName";

	
	
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




	$tdatamycurrentdtr["UserName"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","WageType");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "WageType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.WageType";

	
	
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




	$tdatamycurrentdtr["WageType"] = $fdata;
//	SDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SDate";
	$fdata["GoodName"] = "SDate";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","SDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.SDate";

	
	
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
		$fdata["defaultSearchOption"] = "Between";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings




	$tdatamycurrentdtr["SDate"] = $fdata;
//	DayIs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DayIs";
	$fdata["GoodName"] = "DayIs";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","DayIs");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DayIs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.DayIs";

	
	
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
	$edata["LookupTable"] = "daysweek";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "dayID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "DayIs";
	
	

	
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








	$tdatamycurrentdtr["DayIs"] = $fdata;
//	RestDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "RestDay";
	$fdata["GoodName"] = "RestDay";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","RestDay");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RestDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.RestDay";

	
	
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








	$tdatamycurrentdtr["RestDay"] = $fdata;
//	STimeIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "STimeIn";
	$fdata["GoodName"] = "STimeIn";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","STimeIn");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "STimeIn";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.STimeIn";

	
	
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








	$tdatamycurrentdtr["STimeIn"] = $fdata;
//	STimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "STimeOut";
	$fdata["GoodName"] = "STimeOut";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","STimeOut");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "STimeOut";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.STimeOut";

	
	
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








	$tdatamycurrentdtr["STimeOut"] = $fdata;
//	TimeIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "TimeIn";
	$fdata["GoodName"] = "TimeIn";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","TimeIn");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TimeIn";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.TimeIn";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	
		
	


	
	
	
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








	$tdatamycurrentdtr["TimeIn"] = $fdata;
//	TimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "TimeOut";
	$fdata["GoodName"] = "TimeOut";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","TimeOut");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TimeOut";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.TimeOut";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	
		
	


	
	
	
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








	$tdatamycurrentdtr["TimeOut"] = $fdata;
//	MisPunched
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "MisPunched";
	$fdata["GoodName"] = "MisPunched";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","MisPunched");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MisPunched";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.MisPunched";

	
	
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




	$tdatamycurrentdtr["MisPunched"] = $fdata;
//	RegWD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "RegWD";
	$fdata["GoodName"] = "RegWD";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","RegWD");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RegWD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.RegWD";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamycurrentdtr["RegWD"] = $fdata;
//	DWork
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DWork";
	$fdata["GoodName"] = "DWork";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","DWork");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DWork";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.DWork";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamycurrentdtr["DWork"] = $fdata;
//	Absent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Absent";
	$fdata["GoodName"] = "Absent";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","Absent");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Absent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.Absent";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=23";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamycurrentdtr["Absent"] = $fdata;
//	LateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "LateMins";
	$fdata["GoodName"] = "LateMins";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","LateMins");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LateMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.LateMins";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=26";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamycurrentdtr["LateMins"] = $fdata;
//	UnderstimeMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "UnderstimeMins";
	$fdata["GoodName"] = "UnderstimeMins";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","UnderstimeMins");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "UnderstimeMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.UnderstimeMins";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=105";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamycurrentdtr["UnderstimeMins"] = $fdata;
//	HolidayType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "HolidayType";
	$fdata["GoodName"] = "HolidayType";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","HolidayType");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "HolidayType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.HolidayType";

	
	
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
	$edata["LookupTable"] = "holidaytype";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "HID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "HolidayType";
	
	

	
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








	$tdatamycurrentdtr["HolidayType"] = $fdata;
//	TempOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "TempOT";
	$fdata["GoodName"] = "TempOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","TempOT");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TempOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.TempOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=26";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamycurrentdtr["TempOT"] = $fdata;
//	ApprovedOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "ApprovedOT";
	$fdata["GoodName"] = "ApprovedOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","ApprovedOT");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ApprovedOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.ApprovedOT";

	
	
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








	$tdatamycurrentdtr["ApprovedOT"] = $fdata;
//	AOTMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "AOTMins";
	$fdata["GoodName"] = "AOTMins";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","AOTMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AOTMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.AOTMins";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamycurrentdtr["AOTMins"] = $fdata;
//	NDMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "NDMins";
	$fdata["GoodName"] = "NDMins";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","NDMins");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NDMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.NDMins";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamycurrentdtr["NDMins"] = $fdata;
//	ApprovedNightDiff
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "ApprovedNightDiff";
	$fdata["GoodName"] = "ApprovedNightDiff";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","ApprovedNightDiff");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ApprovedNightDiff";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.ApprovedNightDiff";

	
	
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








	$tdatamycurrentdtr["ApprovedNightDiff"] = $fdata;
//	ANDiff
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "ANDiff";
	$fdata["GoodName"] = "ANDiff";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","ANDiff");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ANDiff";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.ANDiff";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamycurrentdtr["ANDiff"] = $fdata;
//	ApprovedRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "ApprovedRD";
	$fdata["GoodName"] = "ApprovedRD";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","ApprovedRD");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ApprovedRD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.ApprovedRD";

	
	
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








	$tdatamycurrentdtr["ApprovedRD"] = $fdata;
//	RDMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "RDMins";
	$fdata["GoodName"] = "RDMins";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","RDMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RDMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.RDMins";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamycurrentdtr["RDMins"] = $fdata;
//	VL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "VL";
	$fdata["GoodName"] = "VL";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","VL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "VL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.VL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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








	$tdatamycurrentdtr["VL"] = $fdata;
//	SL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "SL";
	$fdata["GoodName"] = "SL";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","SL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.SL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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








	$tdatamycurrentdtr["SL"] = $fdata;
//	EL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "EL";
	$fdata["GoodName"] = "EL";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","EL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.EL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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








	$tdatamycurrentdtr["EL"] = $fdata;
//	PL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "PL";
	$fdata["GoodName"] = "PL";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","PL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.PL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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








	$tdatamycurrentdtr["PL"] = $fdata;
//	TrO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "TrO";
	$fdata["GoodName"] = "TrO";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","TrO");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TrO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.TrO";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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








	$tdatamycurrentdtr["TrO"] = $fdata;
//	Rlink
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Rlink";
	$fdata["GoodName"] = "Rlink";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","Rlink");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Rlink";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.Rlink";

	
	
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








	$tdatamycurrentdtr["Rlink"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","Division");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Division";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "demo_user.Division";

	
	
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




	$tdatamycurrentdtr["Division"] = $fdata;
//	Department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Department";
	$fdata["GoodName"] = "Department";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","Department");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Department";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "demo_user.Department";

	
	
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
	$edata["LookupTable"] = "department";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DeID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Department";
	
	

	
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








	$tdatamycurrentdtr["Department"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","Employer");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Employer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "demo_user.Employer";

	
	
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








	$tdatamycurrentdtr["Employer"] = $fdata;
//	AfterBreakLogOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "AfterBreakLogOut";
	$fdata["GoodName"] = "AfterBreakLogOut";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","AfterBreakLogOut");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AfterBreakLogOut";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.AfterBreakLogOut";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 11;
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








	$tdatamycurrentdtr["AfterBreakLogOut"] = $fdata;
//	AfterBreakLog
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "AfterBreakLog";
	$fdata["GoodName"] = "AfterBreakLog";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","AfterBreakLog");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AfterBreakLog";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.AfterBreakLog";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 11;
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








	$tdatamycurrentdtr["AfterBreakLog"] = $fdata;
//	BreakLateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "BreakLateMins";
	$fdata["GoodName"] = "BreakLateMins";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","BreakLateMins");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BreakLateMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.BreakLateMins";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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








	$tdatamycurrentdtr["BreakLateMins"] = $fdata;
//	EarlyMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "EarlyMins";
	$fdata["GoodName"] = "EarlyMins";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","EarlyMins");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EarlyMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.EarlyMins";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=21";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamycurrentdtr["EarlyMins"] = $fdata;
//	SHOTD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "SHOTD";
	$fdata["GoodName"] = "SHOTD";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","SHOTD");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHOTD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.SHOTD";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=22";

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




	$tdatamycurrentdtr["SHOTD"] = $fdata;
//	DHOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "DHOT";
	$fdata["GoodName"] = "DHOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","DHOT");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DHOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.DHOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=22";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamycurrentdtr["DHOT"] = $fdata;
//	NDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "NDOT";
	$fdata["GoodName"] = "NDOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","NDOT");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.NDOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=22";

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




	$tdatamycurrentdtr["NDOT"] = $fdata;
//	SHND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "SHND";
	$fdata["GoodName"] = "SHND";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","SHND");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.SHND";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamycurrentdtr["SHND"] = $fdata;
//	DHND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "DHND";
	$fdata["GoodName"] = "DHND";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","DHND");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DHND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.DHND";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=22";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamycurrentdtr["DHND"] = $fdata;
//	DHRDND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "DHRDND";
	$fdata["GoodName"] = "DHRDND";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","DHRDND");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DHRDND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.DHRDND";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=22";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamycurrentdtr["DHRDND"] = $fdata;
//	RHRDND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "RHRDND";
	$fdata["GoodName"] = "RHRDND";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","RHRDND");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHRDND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.RHRDND";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=22";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamycurrentdtr["RHRDND"] = $fdata;
//	SHRDND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "SHRDND";
	$fdata["GoodName"] = "SHRDND";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","SHRDND");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHRDND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.SHRDND";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=22";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamycurrentdtr["SHRDND"] = $fdata;
//	RHNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "RHNDOT";
	$fdata["GoodName"] = "RHNDOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","RHNDOT");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHNDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.RHNDOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=22";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamycurrentdtr["RHNDOT"] = $fdata;
//	SHNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "SHNDOT";
	$fdata["GoodName"] = "SHNDOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","SHNDOT");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHNDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.SHNDOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=22";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamycurrentdtr["SHNDOT"] = $fdata;
//	DHNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "DHNDOT";
	$fdata["GoodName"] = "DHNDOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","DHNDOT");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DHNDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.DHNDOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=22";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamycurrentdtr["DHNDOT"] = $fdata;
//	RDNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "RDNDOT";
	$fdata["GoodName"] = "RDNDOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","RDNDOT");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RDNDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.RDNDOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=22";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamycurrentdtr["RDNDOT"] = $fdata;
//	RHRDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "RHRDOT";
	$fdata["GoodName"] = "RHRDOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","RHRDOT");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHRDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.RHRDOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=22";

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




	$tdatamycurrentdtr["RHRDOT"] = $fdata;
//	SHRDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "SHRDOT";
	$fdata["GoodName"] = "SHRDOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","SHRDOT");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHRDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.SHRDOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=22";

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




	$tdatamycurrentdtr["SHRDOT"] = $fdata;
//	SHRDOTD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "SHRDOTD";
	$fdata["GoodName"] = "SHRDOTD";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","SHRDOTD");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHRDOTD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.SHRDOTD";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=22";

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




	$tdatamycurrentdtr["SHRDOTD"] = $fdata;
//	DHRDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "DHRDOT";
	$fdata["GoodName"] = "DHRDOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","DHRDOT");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DHRDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.DHRDOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=22";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamycurrentdtr["DHRDOT"] = $fdata;
//	RHRDNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "RHRDNDOT";
	$fdata["GoodName"] = "RHRDNDOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","RHRDNDOT");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHRDNDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.RHRDNDOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=22";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamycurrentdtr["RHRDNDOT"] = $fdata;
//	SHRDNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "SHRDNDOT";
	$fdata["GoodName"] = "SHRDNDOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","SHRDNDOT");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHRDNDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.SHRDNDOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=22";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamycurrentdtr["SHRDNDOT"] = $fdata;
//	DHRDNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "DHRDNDOT";
	$fdata["GoodName"] = "DHRDNDOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","DHRDNDOT");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DHRDNDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.DHRDNDOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=22";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamycurrentdtr["DHRDNDOT"] = $fdata;
//	RH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "RH";
	$fdata["GoodName"] = "RH";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","RH");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.RH";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=27";

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




	$tdatamycurrentdtr["RH"] = $fdata;
//	SH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "SH";
	$fdata["GoodName"] = "SH";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","SH");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.SH";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=27";

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




	$tdatamycurrentdtr["SH"] = $fdata;
//	DH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "DH";
	$fdata["GoodName"] = "DH";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","DH");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.DH";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=27";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamycurrentdtr["DH"] = $fdata;
//	RHRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "RHRD";
	$fdata["GoodName"] = "RHRD";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","RHRD");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHRD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.RHRD";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=27";

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




	$tdatamycurrentdtr["RHRD"] = $fdata;
//	SHRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "SHRD";
	$fdata["GoodName"] = "SHRD";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","SHRD");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHRD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.SHRD";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=27";

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




	$tdatamycurrentdtr["SHRD"] = $fdata;
//	DHRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "DHRD";
	$fdata["GoodName"] = "DHRD";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","DHRD");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DHRD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.DHRD";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=27";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamycurrentdtr["DHRD"] = $fdata;
//	RegOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "RegOT";
	$fdata["GoodName"] = "RegOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","RegOT");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RegOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.RegOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamycurrentdtr["RegOT"] = $fdata;
//	RHOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "RHOT";
	$fdata["GoodName"] = "RHOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","RHOT");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.RHOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamycurrentdtr["RHOT"] = $fdata;
//	SHOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "SHOT";
	$fdata["GoodName"] = "SHOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","SHOT");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SHOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.SHOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamycurrentdtr["SHOT"] = $fdata;
//	RHND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "RHND";
	$fdata["GoodName"] = "RHND";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","RHND");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RHND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.RHND";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamycurrentdtr["RHND"] = $fdata;
//	RDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "RDOT";
	$fdata["GoodName"] = "RDOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","RDOT");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RDOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.RDOT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamycurrentdtr["RDOT"] = $fdata;
//	RegND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "RegND";
	$fdata["GoodName"] = "RegND";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","RegND");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RegND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.RegND";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamycurrentdtr["RegND"] = $fdata;
//	RegRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "RegRD";
	$fdata["GoodName"] = "RegRD";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","RegRD");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RegRD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.RegRD";

	
	
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
			$edata["EditParams"].= " maxlength=27";

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




	$tdatamycurrentdtr["RegRD"] = $fdata;
//	RDND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "RDND";
	$fdata["GoodName"] = "RDND";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","RDND");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RDND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.RDND";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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




	$tdatamycurrentdtr["RDND"] = $fdata;
//	NDOTMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "NDOTMins";
	$fdata["GoodName"] = "NDOTMins";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","NDOTMins");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NDOTMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.NDOTMins";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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




	$tdatamycurrentdtr["NDOTMins"] = $fdata;
//	PostMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "PostMins";
	$fdata["GoodName"] = "PostMins";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("mycurrentdtr","PostMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PostMins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt5.PostMins";

	
	
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




	$tdatamycurrentdtr["PostMins"] = $fdata;


$tables_data["mycurrentdtr"]=&$tdatamycurrentdtr;
$field_labels["mycurrentdtr"] = &$fieldLabelsmycurrentdtr;
$fieldToolTips["mycurrentdtr"] = &$fieldToolTipsmycurrentdtr;
$placeHolders["mycurrentdtr"] = &$placeHoldersmycurrentdtr;
$page_titles["mycurrentdtr"] = &$pageTitlesmycurrentdtr;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mycurrentdtr"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mycurrentdtr"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mycurrentdtr()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dt5.ScID,  dt5.EmployeeID,  dt5.UserName,  dt5.WageType,  dt5.SDate,  dt5.DayIs,  dt5.RestDay,  dt5.STimeIn,  dt5.STimeOut,  dt5.TimeIn,  dt5.TimeOut,  dt5.MisPunched,  dt5.RegWD,  dt5.DWork,  dt5.Absent,  dt5.LateMins,  dt5.UnderstimeMins,  dt5.HolidayType,  dt5.TempOT,  dt5.ApprovedOT,  dt5.AOTMins,  dt5.NDMins,  dt5.ApprovedNightDiff,  dt5.ANDiff,  dt5.ApprovedRD,  dt5.RDMins,  dt5.VL,  dt5.SL,  dt5.EL,  dt5.PL,  dt5.TrO,  dt5.Rlink,  demo_user.Division,  demo_user.Department,  demo_user.Employer,  dt5.AfterBreakLogOut,  dt5.AfterBreakLog,  dt5.BreakLateMins,  dt5.EarlyMins,  dt5.SHOTD,  dt5.DHOT,  dt5.NDOT,  dt5.SHND,  dt5.DHND,  dt5.DHRDND,  dt5.RHRDND,  dt5.SHRDND,  dt5.RHNDOT,  dt5.SHNDOT,  dt5.DHNDOT,  dt5.RDNDOT,  dt5.RHRDOT,  dt5.SHRDOT,  dt5.SHRDOTD,  dt5.DHRDOT,  dt5.RHRDNDOT,  dt5.SHRDNDOT,  dt5.DHRDNDOT,  dt5.RH,  dt5.SH,  dt5.DH,  dt5.RHRD,  dt5.SHRD,  dt5.DHRD,  dt5.RegOT,  dt5.RHOT,  dt5.SHOT,  dt5.RHND,  dt5.RDOT,  dt5.RegND,  dt5.RegRD,  dt5.RDND,  dt5.NDOTMins,  dt5.PostMins";
$proto0["m_strFrom"] = "FROM dt5  INNER JOIN demo_user ON dt5.EmployeeID = demo_user.EmployeeID";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY dt5.UserName";
	
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
	"m_strName" => "ScID",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto6["m_sql"] = "dt5.ScID";
$proto6["m_srcTableName"] = "mycurrentdtr";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto8["m_sql"] = "dt5.EmployeeID";
$proto8["m_srcTableName"] = "mycurrentdtr";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto10["m_sql"] = "dt5.UserName";
$proto10["m_srcTableName"] = "mycurrentdtr";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "WageType",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto12["m_sql"] = "dt5.WageType";
$proto12["m_srcTableName"] = "mycurrentdtr";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "SDate",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto14["m_sql"] = "dt5.SDate";
$proto14["m_srcTableName"] = "mycurrentdtr";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DayIs",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto16["m_sql"] = "dt5.DayIs";
$proto16["m_srcTableName"] = "mycurrentdtr";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "RestDay",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto18["m_sql"] = "dt5.RestDay";
$proto18["m_srcTableName"] = "mycurrentdtr";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "STimeIn",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto20["m_sql"] = "dt5.STimeIn";
$proto20["m_srcTableName"] = "mycurrentdtr";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "STimeOut",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto22["m_sql"] = "dt5.STimeOut";
$proto22["m_srcTableName"] = "mycurrentdtr";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeIn",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto24["m_sql"] = "dt5.TimeIn";
$proto24["m_srcTableName"] = "mycurrentdtr";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeOut",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto26["m_sql"] = "dt5.TimeOut";
$proto26["m_srcTableName"] = "mycurrentdtr";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "MisPunched",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto28["m_sql"] = "dt5.MisPunched";
$proto28["m_srcTableName"] = "mycurrentdtr";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "RegWD",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto30["m_sql"] = "dt5.RegWD";
$proto30["m_srcTableName"] = "mycurrentdtr";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DWork",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto32["m_sql"] = "dt5.DWork";
$proto32["m_srcTableName"] = "mycurrentdtr";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Absent",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto34["m_sql"] = "dt5.Absent";
$proto34["m_srcTableName"] = "mycurrentdtr";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "LateMins",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto36["m_sql"] = "dt5.LateMins";
$proto36["m_srcTableName"] = "mycurrentdtr";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "UnderstimeMins",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto38["m_sql"] = "dt5.UnderstimeMins";
$proto38["m_srcTableName"] = "mycurrentdtr";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "HolidayType",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto40["m_sql"] = "dt5.HolidayType";
$proto40["m_srcTableName"] = "mycurrentdtr";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "TempOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto42["m_sql"] = "dt5.TempOT";
$proto42["m_srcTableName"] = "mycurrentdtr";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto44["m_sql"] = "dt5.ApprovedOT";
$proto44["m_srcTableName"] = "mycurrentdtr";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "AOTMins",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto46["m_sql"] = "dt5.AOTMins";
$proto46["m_srcTableName"] = "mycurrentdtr";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "NDMins",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto48["m_sql"] = "dt5.NDMins";
$proto48["m_srcTableName"] = "mycurrentdtr";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedNightDiff",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto50["m_sql"] = "dt5.ApprovedNightDiff";
$proto50["m_srcTableName"] = "mycurrentdtr";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "ANDiff",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto52["m_sql"] = "dt5.ANDiff";
$proto52["m_srcTableName"] = "mycurrentdtr";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedRD",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto54["m_sql"] = "dt5.ApprovedRD";
$proto54["m_srcTableName"] = "mycurrentdtr";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "RDMins",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto56["m_sql"] = "dt5.RDMins";
$proto56["m_srcTableName"] = "mycurrentdtr";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "VL",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto58["m_sql"] = "dt5.VL";
$proto58["m_srcTableName"] = "mycurrentdtr";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "SL",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto60["m_sql"] = "dt5.SL";
$proto60["m_srcTableName"] = "mycurrentdtr";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "EL",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto62["m_sql"] = "dt5.EL";
$proto62["m_srcTableName"] = "mycurrentdtr";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "PL",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto64["m_sql"] = "dt5.PL";
$proto64["m_srcTableName"] = "mycurrentdtr";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "TrO",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto66["m_sql"] = "dt5.TrO";
$proto66["m_srcTableName"] = "mycurrentdtr";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "Rlink",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto68["m_sql"] = "dt5.Rlink";
$proto68["m_srcTableName"] = "mycurrentdtr";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "mycurrentdtr"
));

$proto70["m_sql"] = "demo_user.Division";
$proto70["m_srcTableName"] = "mycurrentdtr";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "mycurrentdtr"
));

$proto72["m_sql"] = "demo_user.Department";
$proto72["m_srcTableName"] = "mycurrentdtr";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "mycurrentdtr"
));

$proto74["m_sql"] = "demo_user.Employer";
$proto74["m_srcTableName"] = "mycurrentdtr";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "AfterBreakLogOut",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto76["m_sql"] = "dt5.AfterBreakLogOut";
$proto76["m_srcTableName"] = "mycurrentdtr";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "AfterBreakLog",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto78["m_sql"] = "dt5.AfterBreakLog";
$proto78["m_srcTableName"] = "mycurrentdtr";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "BreakLateMins",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto80["m_sql"] = "dt5.BreakLateMins";
$proto80["m_srcTableName"] = "mycurrentdtr";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "EarlyMins",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto82["m_sql"] = "dt5.EarlyMins";
$proto82["m_srcTableName"] = "mycurrentdtr";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOTD",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto84["m_sql"] = "dt5.SHOTD";
$proto84["m_srcTableName"] = "mycurrentdtr";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "DHOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto86["m_sql"] = "dt5.DHOT";
$proto86["m_srcTableName"] = "mycurrentdtr";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "NDOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto88["m_sql"] = "dt5.NDOT";
$proto88["m_srcTableName"] = "mycurrentdtr";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "SHND",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto90["m_sql"] = "dt5.SHND";
$proto90["m_srcTableName"] = "mycurrentdtr";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "DHND",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto92["m_sql"] = "dt5.DHND";
$proto92["m_srcTableName"] = "mycurrentdtr";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDND",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto94["m_sql"] = "dt5.DHRDND";
$proto94["m_srcTableName"] = "mycurrentdtr";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDND",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto96["m_sql"] = "dt5.RHRDND";
$proto96["m_srcTableName"] = "mycurrentdtr";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDND",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto98["m_sql"] = "dt5.SHRDND";
$proto98["m_srcTableName"] = "mycurrentdtr";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "RHNDOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto100["m_sql"] = "dt5.RHNDOT";
$proto100["m_srcTableName"] = "mycurrentdtr";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "SHNDOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto102["m_sql"] = "dt5.SHNDOT";
$proto102["m_srcTableName"] = "mycurrentdtr";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "DHNDOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto104["m_sql"] = "dt5.DHNDOT";
$proto104["m_srcTableName"] = "mycurrentdtr";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "RDNDOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto106["m_sql"] = "dt5.RDNDOT";
$proto106["m_srcTableName"] = "mycurrentdtr";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto108["m_sql"] = "dt5.RHRDOT";
$proto108["m_srcTableName"] = "mycurrentdtr";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto110["m_sql"] = "dt5.SHRDOT";
$proto110["m_srcTableName"] = "mycurrentdtr";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDOTD",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto112["m_sql"] = "dt5.SHRDOTD";
$proto112["m_srcTableName"] = "mycurrentdtr";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto114["m_sql"] = "dt5.DHRDOT";
$proto114["m_srcTableName"] = "mycurrentdtr";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDNDOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto116["m_sql"] = "dt5.RHRDNDOT";
$proto116["m_srcTableName"] = "mycurrentdtr";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDNDOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto118["m_sql"] = "dt5.SHRDNDOT";
$proto118["m_srcTableName"] = "mycurrentdtr";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDNDOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto120["m_sql"] = "dt5.DHRDNDOT";
$proto120["m_srcTableName"] = "mycurrentdtr";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "RH",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto122["m_sql"] = "dt5.RH";
$proto122["m_srcTableName"] = "mycurrentdtr";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "SH",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto124["m_sql"] = "dt5.SH";
$proto124["m_srcTableName"] = "mycurrentdtr";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "DH",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto126["m_sql"] = "dt5.DH";
$proto126["m_srcTableName"] = "mycurrentdtr";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRD",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto128["m_sql"] = "dt5.RHRD";
$proto128["m_srcTableName"] = "mycurrentdtr";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRD",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto130["m_sql"] = "dt5.SHRD";
$proto130["m_srcTableName"] = "mycurrentdtr";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRD",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto132["m_sql"] = "dt5.DHRD";
$proto132["m_srcTableName"] = "mycurrentdtr";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "RegOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto134["m_sql"] = "dt5.RegOT";
$proto134["m_srcTableName"] = "mycurrentdtr";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "RHOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto136["m_sql"] = "dt5.RHOT";
$proto136["m_srcTableName"] = "mycurrentdtr";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto138["m_sql"] = "dt5.SHOT";
$proto138["m_srcTableName"] = "mycurrentdtr";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "RHND",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto140["m_sql"] = "dt5.RHND";
$proto140["m_srcTableName"] = "mycurrentdtr";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "RDOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto142["m_sql"] = "dt5.RDOT";
$proto142["m_srcTableName"] = "mycurrentdtr";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "RegND",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto144["m_sql"] = "dt5.RegND";
$proto144["m_srcTableName"] = "mycurrentdtr";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "RegRD",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto146["m_sql"] = "dt5.RegRD";
$proto146["m_srcTableName"] = "mycurrentdtr";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "RDND",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto148["m_sql"] = "dt5.RDND";
$proto148["m_srcTableName"] = "mycurrentdtr";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "NDOTMins",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto150["m_sql"] = "dt5.NDOTMins";
$proto150["m_srcTableName"] = "mycurrentdtr";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "PostMins",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto152["m_sql"] = "dt5.PostMins";
$proto152["m_srcTableName"] = "mycurrentdtr";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto154=array();
$proto154["m_link"] = "SQLL_MAIN";
			$proto155=array();
$proto155["m_strName"] = "dt5";
$proto155["m_srcTableName"] = "mycurrentdtr";
$proto155["m_columns"] = array();
$proto155["m_columns"][] = "ScID";
$proto155["m_columns"][] = "EmployeeID";
$proto155["m_columns"][] = "UserName";
$proto155["m_columns"][] = "WageType";
$proto155["m_columns"][] = "SDate";
$proto155["m_columns"][] = "DayIs";
$proto155["m_columns"][] = "RestDay";
$proto155["m_columns"][] = "STimeIn";
$proto155["m_columns"][] = "STimeOut";
$proto155["m_columns"][] = "TimeIn";
$proto155["m_columns"][] = "TimeOut";
$proto155["m_columns"][] = "MisPunched";
$proto155["m_columns"][] = "RegWD";
$proto155["m_columns"][] = "DWork";
$proto155["m_columns"][] = "Absent";
$proto155["m_columns"][] = "HolidayType";
$proto155["m_columns"][] = "TempOT";
$proto155["m_columns"][] = "ApprovedOT";
$proto155["m_columns"][] = "AOTMins";
$proto155["m_columns"][] = "NDMins";
$proto155["m_columns"][] = "ApprovedNightDiff";
$proto155["m_columns"][] = "ANDiff";
$proto155["m_columns"][] = "ApprovedRD";
$proto155["m_columns"][] = "RDMins";
$proto155["m_columns"][] = "VL";
$proto155["m_columns"][] = "SL";
$proto155["m_columns"][] = "EL";
$proto155["m_columns"][] = "PL";
$proto155["m_columns"][] = "TrO";
$proto155["m_columns"][] = "MinsPerDay";
$proto155["m_columns"][] = "BreakMins";
$proto155["m_columns"][] = "Rlink";
$proto155["m_columns"][] = "FirstHalfMins";
$proto155["m_columns"][] = "SecondHalfMins";
$proto155["m_columns"][] = "AfterBreakLog";
$proto155["m_columns"][] = "AfterBreakLogOut";
$proto155["m_columns"][] = "NDMealAllowance";
$proto155["m_columns"][] = "Division";
$proto155["m_columns"][] = "Employer";
$proto155["m_columns"][] = "LateFixPenalty";
$proto155["m_columns"][] = "LateMins";
$proto155["m_columns"][] = "UnderstimeMins";
$proto155["m_columns"][] = "BreakLateMins";
$proto155["m_columns"][] = "EarlyMins";
$proto155["m_columns"][] = "PostMins";
$proto155["m_columns"][] = "Network";
$proto155["m_columns"][] = "RegOT";
$proto155["m_columns"][] = "RHOT";
$proto155["m_columns"][] = "SHOT";
$proto155["m_columns"][] = "SHOTD";
$proto155["m_columns"][] = "DHOT";
$proto155["m_columns"][] = "NDOT";
$proto155["m_columns"][] = "RHND";
$proto155["m_columns"][] = "SHND";
$proto155["m_columns"][] = "DHND";
$proto155["m_columns"][] = "DHRDND";
$proto155["m_columns"][] = "RHRDND";
$proto155["m_columns"][] = "SHRDND";
$proto155["m_columns"][] = "RHNDOT";
$proto155["m_columns"][] = "SHNDOT";
$proto155["m_columns"][] = "DHNDOT";
$proto155["m_columns"][] = "RDNDOT";
$proto155["m_columns"][] = "RHRDOT";
$proto155["m_columns"][] = "SHRDOT";
$proto155["m_columns"][] = "SHRDOTD";
$proto155["m_columns"][] = "DHRDOT";
$proto155["m_columns"][] = "RHRDNDOT";
$proto155["m_columns"][] = "SHRDNDOT";
$proto155["m_columns"][] = "DHRDNDOT";
$proto155["m_columns"][] = "RH";
$proto155["m_columns"][] = "SH";
$proto155["m_columns"][] = "DH";
$proto155["m_columns"][] = "RHRD";
$proto155["m_columns"][] = "SHRD";
$proto155["m_columns"][] = "DHRD";
$proto155["m_columns"][] = "RDOT";
$proto155["m_columns"][] = "RegND";
$proto155["m_columns"][] = "RegRD";
$proto155["m_columns"][] = "RDND";
$proto155["m_columns"][] = "NDOTMins";
$proto155["m_columns"][] = "TempRD";
$obj = new SQLTable($proto155);

$proto154["m_table"] = $obj;
$proto154["m_sql"] = "dt5";
$proto154["m_alias"] = "";
$proto154["m_srcTableName"] = "mycurrentdtr";
$proto156=array();
$proto156["m_sql"] = "";
$proto156["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto156["m_column"]=$obj;
$proto156["m_contained"] = array();
$proto156["m_strCase"] = "";
$proto156["m_havingmode"] = false;
$proto156["m_inBrackets"] = false;
$proto156["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto156);

$proto154["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto154);

$proto0["m_fromlist"][]=$obj;
												$proto158=array();
$proto158["m_link"] = "SQLL_INNERJOIN";
			$proto159=array();
$proto159["m_strName"] = "demo_user";
$proto159["m_srcTableName"] = "mycurrentdtr";
$proto159["m_columns"] = array();
$proto159["m_columns"][] = "user_id";
$proto159["m_columns"][] = "user_name";
$proto159["m_columns"][] = "Photo";
$proto159["m_columns"][] = "user_photo";
$proto159["m_columns"][] = "SSSNo";
$proto159["m_columns"][] = "TIN";
$proto159["m_columns"][] = "Mobile";
$proto159["m_columns"][] = "Address";
$proto159["m_columns"][] = "Email";
$proto159["m_columns"][] = "EmployeeType";
$proto159["m_columns"][] = "BasicMonthlyPay";
$proto159["m_columns"][] = "BasicDailyPay";
$proto159["m_columns"][] = "EmployeeID";
$proto159["m_columns"][] = "Division";
$proto159["m_columns"][] = "Status";
$proto159["m_columns"][] = "Department";
$proto159["m_columns"][] = "AllowableSickLeave";
$proto159["m_columns"][] = "AllowableVacationLeave";
$proto159["m_columns"][] = "AllowableEmergencyLeave";
$proto159["m_columns"][] = "SSSEE";
$proto159["m_columns"][] = "SSSER";
$proto159["m_columns"][] = "PhilHealthEE";
$proto159["m_columns"][] = "PhilHealthER";
$proto159["m_columns"][] = "PagIbigEE";
$proto159["m_columns"][] = "AllowablePaternityLeave";
$proto159["m_columns"][] = "HiredDate";
$proto159["m_columns"][] = "Inactive";
$proto159["m_columns"][] = "ExitDate";
$proto159["m_columns"][] = "PagIbigER";
$proto159["m_columns"][] = "PagIbigNo";
$proto159["m_columns"][] = "PhilHealthNo";
$proto159["m_columns"][] = "SSSEC";
$proto159["m_columns"][] = "Filex";
$proto159["m_columns"][] = "PresetTax";
$proto159["m_columns"][] = "AgentSharePerDay";
$proto159["m_columns"][] = "AllowancePerDay";
$proto159["m_columns"][] = "DeMinimis";
$proto159["m_columns"][] = "Level";
$proto159["m_columns"][] = "DateCreated";
$proto159["m_columns"][] = "ApprovedDate";
$proto159["m_columns"][] = "Approved";
$proto159["m_columns"][] = "Approvedby";
$proto159["m_columns"][] = "Preparedby";
$proto159["m_columns"][] = "Checkedby";
$proto159["m_columns"][] = "CheckedDate";
$proto159["m_columns"][] = "Checked";
$proto159["m_columns"][] = "AdjustedMonthlyPay";
$proto159["m_columns"][] = "AdjustedDailyPay";
$proto159["m_columns"][] = "Superior";
$proto159["m_columns"][] = "Position";
$proto159["m_columns"][] = "Employer";
$proto159["m_columns"][] = "IDNo";
$proto159["m_columns"][] = "AccountNo";
$proto159["m_columns"][] = "LogID";
$proto159["m_columns"][] = "LateFixPenalty";
$proto159["m_columns"][] = "DoNotUpdateContributions";
$proto159["m_columns"][] = "ExcludeContributionOnPayroll";
$proto159["m_columns"][] = "Birthday";
$proto159["m_columns"][] = "Bank";
$proto159["m_columns"][] = "NoLateDeduction";
$proto159["m_columns"][] = "IncludeBreakLate";
$proto159["m_columns"][] = "GracePeriodMins";
$proto159["m_columns"][] = "WithAdditionalBreaks";
$proto159["m_columns"][] = "TaxPeriods";
$proto159["m_columns"][] = "PresetMoNonTax";
$proto159["m_columns"][] = "PreCalMoTaxable";
$proto159["m_columns"][] = "CalMonthly";
$proto159["m_columns"][] = "TaxPerPeriod";
$proto159["m_columns"][] = "Superior2";
$proto159["m_columns"][] = "ExcludeBio";
$obj = new SQLTable($proto159);

$proto158["m_table"] = $obj;
$proto158["m_sql"] = "INNER JOIN demo_user ON dt5.EmployeeID = demo_user.EmployeeID";
$proto158["m_alias"] = "";
$proto158["m_srcTableName"] = "mycurrentdtr";
$proto160=array();
$proto160["m_sql"] = "dt5.EmployeeID = demo_user.EmployeeID";
$proto160["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto160["m_column"]=$obj;
$proto160["m_contained"] = array();
$proto160["m_strCase"] = "= demo_user.EmployeeID";
$proto160["m_havingmode"] = false;
$proto160["m_inBrackets"] = false;
$proto160["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto160);

$proto158["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto158);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto162=array();
						$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "dt5",
	"m_srcTableName" => "mycurrentdtr"
));

$proto162["m_column"]=$obj;
$proto162["m_bAsc"] = 1;
$proto162["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto162);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mycurrentdtr";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mycurrentdtr = createSqlQuery_mycurrentdtr();


	
		;

																																																																										

$tdatamycurrentdtr[".sqlquery"] = $queryData_mycurrentdtr;

$tableEvents["mycurrentdtr"] = new eventsBase;
$tdatamycurrentdtr[".hasEvents"] = false;

?>