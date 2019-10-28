<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadt5 = array();
	$tdatadt5[".truncateText"] = true;
	$tdatadt5[".NumberOfChars"] = 80;
	$tdatadt5[".ShortName"] = "dt5";
	$tdatadt5[".OwnerID"] = "";
	$tdatadt5[".OriginalTable"] = "dt5";

//	field labels
$fieldLabelsdt5 = array();
$fieldToolTipsdt5 = array();
$pageTitlesdt5 = array();
$placeHoldersdt5 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdt5["English"] = array();
	$fieldToolTipsdt5["English"] = array();
	$placeHoldersdt5["English"] = array();
	$pageTitlesdt5["English"] = array();
	$fieldLabelsdt5["English"]["ScID"] = "Sc ID";
	$fieldToolTipsdt5["English"]["ScID"] = "";
	$placeHoldersdt5["English"]["ScID"] = "";
	$fieldLabelsdt5["English"]["EmployeeID"] = "Biometric ID";
	$fieldToolTipsdt5["English"]["EmployeeID"] = "";
	$placeHoldersdt5["English"]["EmployeeID"] = "";
	$fieldLabelsdt5["English"]["UserName"] = "Employee";
	$fieldToolTipsdt5["English"]["UserName"] = "";
	$placeHoldersdt5["English"]["UserName"] = "";
	$fieldLabelsdt5["English"]["WageType"] = "Wage Type";
	$fieldToolTipsdt5["English"]["WageType"] = "";
	$placeHoldersdt5["English"]["WageType"] = "";
	$fieldLabelsdt5["English"]["SDate"] = "Date";
	$fieldToolTipsdt5["English"]["SDate"] = "";
	$placeHoldersdt5["English"]["SDate"] = "";
	$fieldLabelsdt5["English"]["DayIs"] = "Day";
	$fieldToolTipsdt5["English"]["DayIs"] = "";
	$placeHoldersdt5["English"]["DayIs"] = "";
	$fieldLabelsdt5["English"]["RestDay"] = "Rest Day";
	$fieldToolTipsdt5["English"]["RestDay"] = "";
	$placeHoldersdt5["English"]["RestDay"] = "";
	$fieldLabelsdt5["English"]["STimeIn"] = "STime In";
	$fieldToolTipsdt5["English"]["STimeIn"] = "";
	$placeHoldersdt5["English"]["STimeIn"] = "";
	$fieldLabelsdt5["English"]["STimeOut"] = "STime Out";
	$fieldToolTipsdt5["English"]["STimeOut"] = "";
	$placeHoldersdt5["English"]["STimeOut"] = "";
	$fieldLabelsdt5["English"]["TimeIn"] = "Time In";
	$fieldToolTipsdt5["English"]["TimeIn"] = "";
	$placeHoldersdt5["English"]["TimeIn"] = "";
	$fieldLabelsdt5["English"]["TimeOut"] = "Time Out";
	$fieldToolTipsdt5["English"]["TimeOut"] = "";
	$placeHoldersdt5["English"]["TimeOut"] = "";
	$fieldLabelsdt5["English"]["MisPunched"] = "Mispunched";
	$fieldToolTipsdt5["English"]["MisPunched"] = "";
	$placeHoldersdt5["English"]["MisPunched"] = "";
	$fieldLabelsdt5["English"]["RegWD"] = "Reg WD";
	$fieldToolTipsdt5["English"]["RegWD"] = "";
	$placeHoldersdt5["English"]["RegWD"] = "";
	$fieldLabelsdt5["English"]["DWork"] = "DWork";
	$fieldToolTipsdt5["English"]["DWork"] = "";
	$placeHoldersdt5["English"]["DWork"] = "";
	$fieldLabelsdt5["English"]["Absent"] = "Absent";
	$fieldToolTipsdt5["English"]["Absent"] = "";
	$placeHoldersdt5["English"]["Absent"] = "";
	$fieldLabelsdt5["English"]["LateMins"] = "Late(m)";
	$fieldToolTipsdt5["English"]["LateMins"] = "";
	$placeHoldersdt5["English"]["LateMins"] = "";
	$fieldLabelsdt5["English"]["UnderstimeMins"] = "Undertime(m)";
	$fieldToolTipsdt5["English"]["UnderstimeMins"] = "";
	$placeHoldersdt5["English"]["UnderstimeMins"] = "";
	$fieldLabelsdt5["English"]["HolidayType"] = "Holiday Type";
	$fieldToolTipsdt5["English"]["HolidayType"] = "";
	$placeHoldersdt5["English"]["HolidayType"] = "";
	$fieldLabelsdt5["English"]["TempOT"] = "Temp OT(m)";
	$fieldToolTipsdt5["English"]["TempOT"] = "";
	$placeHoldersdt5["English"]["TempOT"] = "";
	$fieldLabelsdt5["English"]["ApprovedOT"] = "Approved OT";
	$fieldToolTipsdt5["English"]["ApprovedOT"] = "";
	$placeHoldersdt5["English"]["ApprovedOT"] = "";
	$fieldLabelsdt5["English"]["AOTMins"] = "AOT(m)";
	$fieldToolTipsdt5["English"]["AOTMins"] = "";
	$placeHoldersdt5["English"]["AOTMins"] = "";
	$fieldLabelsdt5["English"]["NDMins"] = "Temp ND(m)";
	$fieldToolTipsdt5["English"]["NDMins"] = "";
	$placeHoldersdt5["English"]["NDMins"] = "";
	$fieldLabelsdt5["English"]["ApprovedNightDiff"] = "Approved ND";
	$fieldToolTipsdt5["English"]["ApprovedNightDiff"] = "";
	$placeHoldersdt5["English"]["ApprovedNightDiff"] = "";
	$fieldLabelsdt5["English"]["ANDiff"] = "ANDiff(m)";
	$fieldToolTipsdt5["English"]["ANDiff"] = "";
	$placeHoldersdt5["English"]["ANDiff"] = "";
	$fieldLabelsdt5["English"]["ApprovedRD"] = "Approved RD";
	$fieldToolTipsdt5["English"]["ApprovedRD"] = "";
	$placeHoldersdt5["English"]["ApprovedRD"] = "";
	$fieldLabelsdt5["English"]["RDMins"] = "ARD(m)";
	$fieldToolTipsdt5["English"]["RDMins"] = "";
	$placeHoldersdt5["English"]["RDMins"] = "";
	$fieldLabelsdt5["English"]["VL"] = "VL";
	$fieldToolTipsdt5["English"]["VL"] = "";
	$placeHoldersdt5["English"]["VL"] = "";
	$fieldLabelsdt5["English"]["SL"] = "SL";
	$fieldToolTipsdt5["English"]["SL"] = "";
	$placeHoldersdt5["English"]["SL"] = "";
	$fieldLabelsdt5["English"]["EL"] = "EL";
	$fieldToolTipsdt5["English"]["EL"] = "";
	$placeHoldersdt5["English"]["EL"] = "";
	$fieldLabelsdt5["English"]["PL"] = "PL";
	$fieldToolTipsdt5["English"]["PL"] = "";
	$placeHoldersdt5["English"]["PL"] = "";
	$fieldLabelsdt5["English"]["TrO"] = "Tr O";
	$fieldToolTipsdt5["English"]["TrO"] = "";
	$placeHoldersdt5["English"]["TrO"] = "";
	$fieldLabelsdt5["English"]["SHND"] = "SH-ND(m)";
	$fieldToolTipsdt5["English"]["SHND"] = "";
	$placeHoldersdt5["English"]["SHND"] = "";
	$fieldLabelsdt5["English"]["Rlink"] = "Rlink";
	$fieldToolTipsdt5["English"]["Rlink"] = "";
	$placeHoldersdt5["English"]["Rlink"] = "";
	$fieldLabelsdt5["English"]["Division"] = "Division";
	$fieldToolTipsdt5["English"]["Division"] = "";
	$placeHoldersdt5["English"]["Division"] = "";
	$fieldLabelsdt5["English"]["Department"] = "Department";
	$fieldToolTipsdt5["English"]["Department"] = "";
	$placeHoldersdt5["English"]["Department"] = "";
	$fieldLabelsdt5["English"]["Employer"] = "Employer";
	$fieldToolTipsdt5["English"]["Employer"] = "";
	$placeHoldersdt5["English"]["Employer"] = "";
	$fieldLabelsdt5["English"]["AfterBreakLogOut"] = "Break-Out";
	$fieldToolTipsdt5["English"]["AfterBreakLogOut"] = "";
	$placeHoldersdt5["English"]["AfterBreakLogOut"] = "";
	$fieldLabelsdt5["English"]["AfterBreakLog"] = "Break-In";
	$fieldToolTipsdt5["English"]["AfterBreakLog"] = "";
	$placeHoldersdt5["English"]["AfterBreakLog"] = "";
	$fieldLabelsdt5["English"]["BreakLateMins"] = "Break Late(m)";
	$fieldToolTipsdt5["English"]["BreakLateMins"] = "";
	$placeHoldersdt5["English"]["BreakLateMins"] = "";
	$fieldLabelsdt5["English"]["EarlyMins"] = "Early OT(m)";
	$fieldToolTipsdt5["English"]["EarlyMins"] = "";
	$placeHoldersdt5["English"]["EarlyMins"] = "";
	$fieldLabelsdt5["English"]["RHNDOT"] = "RH-ND-OT(m)";
	$fieldToolTipsdt5["English"]["RHNDOT"] = "";
	$placeHoldersdt5["English"]["RHNDOT"] = "";
	$fieldLabelsdt5["English"]["SHNDOT"] = "SH-ND-OT(m)";
	$fieldToolTipsdt5["English"]["SHNDOT"] = "";
	$placeHoldersdt5["English"]["SHNDOT"] = "";
	$fieldLabelsdt5["English"]["RDNDOT"] = "RD-ND-OT(m)";
	$fieldToolTipsdt5["English"]["RDNDOT"] = "";
	$placeHoldersdt5["English"]["RDNDOT"] = "";
	$fieldLabelsdt5["English"]["DH"] = "DH(m)";
	$fieldToolTipsdt5["English"]["DH"] = "";
	$placeHoldersdt5["English"]["DH"] = "";
	$fieldLabelsdt5["English"]["DHRD"] = "DH-RD(m)";
	$fieldToolTipsdt5["English"]["DHRD"] = "";
	$placeHoldersdt5["English"]["DHRD"] = "";
	$fieldLabelsdt5["English"]["DHOT"] = "DH-OT(m)";
	$fieldToolTipsdt5["English"]["DHOT"] = "";
	$placeHoldersdt5["English"]["DHOT"] = "";
	$fieldLabelsdt5["English"]["DHRDOT"] = "DH-RD-OT(m)";
	$fieldToolTipsdt5["English"]["DHRDOT"] = "";
	$placeHoldersdt5["English"]["DHRDOT"] = "";
	$fieldLabelsdt5["English"]["SHRDND"] = "SH-RD-ND(m)";
	$fieldToolTipsdt5["English"]["SHRDND"] = "";
	$placeHoldersdt5["English"]["SHRDND"] = "";
	$fieldLabelsdt5["English"]["RHRDND"] = "RH-RD-ND(m)";
	$fieldToolTipsdt5["English"]["RHRDND"] = "";
	$placeHoldersdt5["English"]["RHRDND"] = "";
	$fieldLabelsdt5["English"]["SHRDNDOT"] = "SH-RD-ND-OT(m)";
	$fieldToolTipsdt5["English"]["SHRDNDOT"] = "";
	$placeHoldersdt5["English"]["SHRDNDOT"] = "";
	$fieldLabelsdt5["English"]["RHRDNDOT"] = "RH-RD-ND-OT(m)";
	$fieldToolTipsdt5["English"]["RHRDNDOT"] = "";
	$placeHoldersdt5["English"]["RHRDNDOT"] = "";
	$fieldLabelsdt5["English"]["DHND"] = "DH-ND(m)";
	$fieldToolTipsdt5["English"]["DHND"] = "";
	$placeHoldersdt5["English"]["DHND"] = "";
	$fieldLabelsdt5["English"]["DHRDND"] = "DH-RD-ND(m)";
	$fieldToolTipsdt5["English"]["DHRDND"] = "";
	$placeHoldersdt5["English"]["DHRDND"] = "";
	$fieldLabelsdt5["English"]["DHNDOT"] = "DH-ND-OT(m)";
	$fieldToolTipsdt5["English"]["DHNDOT"] = "";
	$placeHoldersdt5["English"]["DHNDOT"] = "";
	$fieldLabelsdt5["English"]["DHRDNDOT"] = "DH-RD-ND-OT(m)";
	$fieldToolTipsdt5["English"]["DHRDNDOT"] = "";
	$placeHoldersdt5["English"]["DHRDNDOT"] = "";
	$fieldLabelsdt5["English"]["SHOTD"] = "SH-OT-D(m)";
	$fieldToolTipsdt5["English"]["SHOTD"] = "";
	$placeHoldersdt5["English"]["SHOTD"] = "";
	$fieldLabelsdt5["English"]["NDOT"] = "ND-OT(m)";
	$fieldToolTipsdt5["English"]["NDOT"] = "";
	$placeHoldersdt5["English"]["NDOT"] = "";
	$fieldLabelsdt5["English"]["RHRDOT"] = "RH-RD-OT(m)";
	$fieldToolTipsdt5["English"]["RHRDOT"] = "";
	$placeHoldersdt5["English"]["RHRDOT"] = "";
	$fieldLabelsdt5["English"]["SHRDOT"] = "SH-RD-OT(m)";
	$fieldToolTipsdt5["English"]["SHRDOT"] = "";
	$placeHoldersdt5["English"]["SHRDOT"] = "";
	$fieldLabelsdt5["English"]["SHRDOTD"] = "SH-RD-OT-D(m)";
	$fieldToolTipsdt5["English"]["SHRDOTD"] = "";
	$placeHoldersdt5["English"]["SHRDOTD"] = "";
	$fieldLabelsdt5["English"]["RH"] = "RH(m)";
	$fieldToolTipsdt5["English"]["RH"] = "";
	$placeHoldersdt5["English"]["RH"] = "";
	$fieldLabelsdt5["English"]["SH"] = "SH(m)";
	$fieldToolTipsdt5["English"]["SH"] = "";
	$placeHoldersdt5["English"]["SH"] = "";
	$fieldLabelsdt5["English"]["RHRD"] = "RH-RD(m)";
	$fieldToolTipsdt5["English"]["RHRD"] = "";
	$placeHoldersdt5["English"]["RHRD"] = "";
	$fieldLabelsdt5["English"]["SHRD"] = "SH-RD(m)";
	$fieldToolTipsdt5["English"]["SHRD"] = "";
	$placeHoldersdt5["English"]["SHRD"] = "";
	$fieldLabelsdt5["English"]["RegOT"] = "Reg OT(m)";
	$fieldToolTipsdt5["English"]["RegOT"] = "";
	$placeHoldersdt5["English"]["RegOT"] = "";
	$fieldLabelsdt5["English"]["RHOT"] = "RH-OT(m)";
	$fieldToolTipsdt5["English"]["RHOT"] = "";
	$placeHoldersdt5["English"]["RHOT"] = "";
	$fieldLabelsdt5["English"]["SHOT"] = "SH-OT(m)";
	$fieldToolTipsdt5["English"]["SHOT"] = "";
	$placeHoldersdt5["English"]["SHOT"] = "";
	$fieldLabelsdt5["English"]["RHND"] = "RH-ND(m)";
	$fieldToolTipsdt5["English"]["RHND"] = "";
	$placeHoldersdt5["English"]["RHND"] = "";
	$fieldLabelsdt5["English"]["RDOT"] = "RD-OT(m)";
	$fieldToolTipsdt5["English"]["RDOT"] = "";
	$placeHoldersdt5["English"]["RDOT"] = "";
	$fieldLabelsdt5["English"]["RegND"] = "Reg ND(m)";
	$fieldToolTipsdt5["English"]["RegND"] = "";
	$placeHoldersdt5["English"]["RegND"] = "";
	$fieldLabelsdt5["English"]["RegRD"] = "Reg RD(m)";
	$fieldToolTipsdt5["English"]["RegRD"] = "";
	$placeHoldersdt5["English"]["RegRD"] = "";
	$fieldLabelsdt5["English"]["RDND"] = "RD-ND(m)";
	$fieldToolTipsdt5["English"]["RDND"] = "";
	$placeHoldersdt5["English"]["RDND"] = "";
	$fieldLabelsdt5["English"]["NDOTMins"] = "Temp ND-OT(m)";
	$fieldToolTipsdt5["English"]["NDOTMins"] = "";
	$placeHoldersdt5["English"]["NDOTMins"] = "";
	$fieldLabelsdt5["English"]["PostMins"] = "Post OT(m)";
	$fieldToolTipsdt5["English"]["PostMins"] = "";
	$placeHoldersdt5["English"]["PostMins"] = "";
	if (count($fieldToolTipsdt5["English"]))
		$tdatadt5[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdt5[""] = array();
	$fieldToolTipsdt5[""] = array();
	$placeHoldersdt5[""] = array();
	$pageTitlesdt5[""] = array();
	$fieldLabelsdt5[""]["SHOTD"] = "SHOTD";
	$fieldToolTipsdt5[""]["SHOTD"] = "";
	$placeHoldersdt5[""]["SHOTD"] = "";
	$fieldLabelsdt5[""]["NDOT"] = "NDOT";
	$fieldToolTipsdt5[""]["NDOT"] = "";
	$placeHoldersdt5[""]["NDOT"] = "";
	$fieldLabelsdt5[""]["RHRDOT"] = "RHRDOT";
	$fieldToolTipsdt5[""]["RHRDOT"] = "";
	$placeHoldersdt5[""]["RHRDOT"] = "";
	$fieldLabelsdt5[""]["SHRDOT"] = "SHRDOT";
	$fieldToolTipsdt5[""]["SHRDOT"] = "";
	$placeHoldersdt5[""]["SHRDOT"] = "";
	$fieldLabelsdt5[""]["SHRDOTD"] = "SHRDOTD";
	$fieldToolTipsdt5[""]["SHRDOTD"] = "";
	$placeHoldersdt5[""]["SHRDOTD"] = "";
	$fieldLabelsdt5[""]["RH"] = "RH";
	$fieldToolTipsdt5[""]["RH"] = "";
	$placeHoldersdt5[""]["RH"] = "";
	$fieldLabelsdt5[""]["SH"] = "SH";
	$fieldToolTipsdt5[""]["SH"] = "";
	$placeHoldersdt5[""]["SH"] = "";
	$fieldLabelsdt5[""]["RHRD"] = "RHRD";
	$fieldToolTipsdt5[""]["RHRD"] = "";
	$placeHoldersdt5[""]["RHRD"] = "";
	$fieldLabelsdt5[""]["SHRD"] = "SHRD";
	$fieldToolTipsdt5[""]["SHRD"] = "";
	$placeHoldersdt5[""]["SHRD"] = "";
	$fieldLabelsdt5[""]["RegOT"] = "Reg OT";
	$fieldToolTipsdt5[""]["RegOT"] = "";
	$placeHoldersdt5[""]["RegOT"] = "";
	$fieldLabelsdt5[""]["RHOT"] = "RHOT";
	$fieldToolTipsdt5[""]["RHOT"] = "";
	$placeHoldersdt5[""]["RHOT"] = "";
	$fieldLabelsdt5[""]["SHOT"] = "SHOT";
	$fieldToolTipsdt5[""]["SHOT"] = "";
	$placeHoldersdt5[""]["SHOT"] = "";
	$fieldLabelsdt5[""]["RHND"] = "RHND";
	$fieldToolTipsdt5[""]["RHND"] = "";
	$placeHoldersdt5[""]["RHND"] = "";
	$fieldLabelsdt5[""]["RDOT"] = "RDOT";
	$fieldToolTipsdt5[""]["RDOT"] = "";
	$placeHoldersdt5[""]["RDOT"] = "";
	$fieldLabelsdt5[""]["RegND"] = "Reg ND";
	$fieldToolTipsdt5[""]["RegND"] = "";
	$placeHoldersdt5[""]["RegND"] = "";
	$fieldLabelsdt5[""]["RegRD"] = "Reg RD";
	$fieldToolTipsdt5[""]["RegRD"] = "";
	$placeHoldersdt5[""]["RegRD"] = "";
	$fieldLabelsdt5[""]["RDND"] = "RDND";
	$fieldToolTipsdt5[""]["RDND"] = "";
	$placeHoldersdt5[""]["RDND"] = "";
	$fieldLabelsdt5[""]["NDOTMins"] = "NDOTMins";
	$fieldToolTipsdt5[""]["NDOTMins"] = "";
	$placeHoldersdt5[""]["NDOTMins"] = "";
	$fieldLabelsdt5[""]["PostMins"] = "Post Mins";
	$fieldToolTipsdt5[""]["PostMins"] = "";
	$placeHoldersdt5[""]["PostMins"] = "";
	if (count($fieldToolTipsdt5[""]))
		$tdatadt5[".isUseToolTips"] = true;
}


	$tdatadt5[".NCSearch"] = true;



$tdatadt5[".shortTableName"] = "dt5";
$tdatadt5[".nSecOptions"] = 0;
$tdatadt5[".recsPerRowPrint"] = 1;
$tdatadt5[".mainTableOwnerID"] = "";
$tdatadt5[".moveNext"] = 1;
$tdatadt5[".entityType"] = 0;

$tdatadt5[".strOriginalTableName"] = "dt5";

	



$tdatadt5[".showAddInPopup"] = false;

$tdatadt5[".showEditInPopup"] = false;

$tdatadt5[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadt5[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadt5[".fieldsForRegister"] = array();

$tdatadt5[".listAjax"] = false;

	$tdatadt5[".audit"] = false;

	$tdatadt5[".locking"] = false;



$tdatadt5[".list"] = true;



$tdatadt5[".reorderRecordsByHeader"] = true;


$tdatadt5[".exportFormatting"] = 2;
$tdatadt5[".exportDelimiter"] = ",";
		
$tdatadt5[".view"] = true;


$tdatadt5[".exportTo"] = true;

$tdatadt5[".printFriendly"] = true;


$tdatadt5[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadt5[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatadt5[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatadt5[".searchSaving"] = false;
//

$tdatadt5[".showSearchPanel"] = true;
		$tdatadt5[".flexibleSearch"] = true;

$tdatadt5[".isUseAjaxSuggest"] = true;

$tdatadt5[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																							

$tdatadt5[".ajaxCodeSnippetAdded"] = false;

$tdatadt5[".buttonsAdded"] = false;

$tdatadt5[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadt5[".isUseTimeForSearch"] = false;



$tdatadt5[".badgeColor"] = "d2691e";


$tdatadt5[".allSearchFields"] = array();
$tdatadt5[".filterFields"] = array();
$tdatadt5[".requiredSearchFields"] = array();

$tdatadt5[".allSearchFields"][] = "EmployeeID";
	$tdatadt5[".allSearchFields"][] = "UserName";
	$tdatadt5[".allSearchFields"][] = "Division";
	$tdatadt5[".allSearchFields"][] = "WageType";
	$tdatadt5[".allSearchFields"][] = "SDate";
	$tdatadt5[".allSearchFields"][] = "MisPunched";
	$tdatadt5[".allSearchFields"][] = "RH";
	$tdatadt5[".allSearchFields"][] = "SH";
	$tdatadt5[".allSearchFields"][] = "RegRD";
	$tdatadt5[".allSearchFields"][] = "PostMins";
	$tdatadt5[".allSearchFields"][] = "NDOTMins";
	$tdatadt5[".allSearchFields"][] = "RegOT";
	$tdatadt5[".allSearchFields"][] = "RHOT";
	$tdatadt5[".allSearchFields"][] = "SHOT";
	$tdatadt5[".allSearchFields"][] = "SHOTD";
	$tdatadt5[".allSearchFields"][] = "RDOT";
	$tdatadt5[".allSearchFields"][] = "NDOT";
	$tdatadt5[".allSearchFields"][] = "RegND";
	$tdatadt5[".allSearchFields"][] = "RHND";
	$tdatadt5[".allSearchFields"][] = "RDND";
	$tdatadt5[".allSearchFields"][] = "RHRD";
	$tdatadt5[".allSearchFields"][] = "SHRD";
	$tdatadt5[".allSearchFields"][] = "RHRDOT";
	$tdatadt5[".allSearchFields"][] = "SHRDOT";
	$tdatadt5[".allSearchFields"][] = "SHRDOTD";
	

$tdatadt5[".googleLikeFields"] = array();
$tdatadt5[".googleLikeFields"][] = "EmployeeID";
$tdatadt5[".googleLikeFields"][] = "UserName";
$tdatadt5[".googleLikeFields"][] = "WageType";
$tdatadt5[".googleLikeFields"][] = "SDate";
$tdatadt5[".googleLikeFields"][] = "MisPunched";
$tdatadt5[".googleLikeFields"][] = "Division";
$tdatadt5[".googleLikeFields"][] = "SHOTD";
$tdatadt5[".googleLikeFields"][] = "NDOT";
$tdatadt5[".googleLikeFields"][] = "RHRDOT";
$tdatadt5[".googleLikeFields"][] = "SHRDOT";
$tdatadt5[".googleLikeFields"][] = "SHRDOTD";
$tdatadt5[".googleLikeFields"][] = "RH";
$tdatadt5[".googleLikeFields"][] = "SH";
$tdatadt5[".googleLikeFields"][] = "RHRD";
$tdatadt5[".googleLikeFields"][] = "SHRD";
$tdatadt5[".googleLikeFields"][] = "RegOT";
$tdatadt5[".googleLikeFields"][] = "RHOT";
$tdatadt5[".googleLikeFields"][] = "SHOT";
$tdatadt5[".googleLikeFields"][] = "RHND";
$tdatadt5[".googleLikeFields"][] = "RDOT";
$tdatadt5[".googleLikeFields"][] = "RegND";
$tdatadt5[".googleLikeFields"][] = "RegRD";
$tdatadt5[".googleLikeFields"][] = "RDND";
$tdatadt5[".googleLikeFields"][] = "NDOTMins";
$tdatadt5[".googleLikeFields"][] = "PostMins";

$tdatadt5[".panelSearchFields"] = array();
$tdatadt5[".searchPanelOptions"] = array();
$tdatadt5[".panelSearchFields"][] = "UserName";
	$tdatadt5[".panelSearchFields"][] = "Division";
	$tdatadt5[".panelSearchFields"][] = "WageType";
	$tdatadt5[".panelSearchFields"][] = "SDate";
	$tdatadt5[".panelSearchFields"][] = "MisPunched";
	
$tdatadt5[".advSearchFields"] = array();
$tdatadt5[".advSearchFields"][] = "EmployeeID";
$tdatadt5[".advSearchFields"][] = "UserName";
$tdatadt5[".advSearchFields"][] = "Division";
$tdatadt5[".advSearchFields"][] = "WageType";
$tdatadt5[".advSearchFields"][] = "SDate";
$tdatadt5[".advSearchFields"][] = "MisPunched";
$tdatadt5[".advSearchFields"][] = "RH";
$tdatadt5[".advSearchFields"][] = "SH";
$tdatadt5[".advSearchFields"][] = "RegRD";
$tdatadt5[".advSearchFields"][] = "PostMins";
$tdatadt5[".advSearchFields"][] = "NDOTMins";
$tdatadt5[".advSearchFields"][] = "RegOT";
$tdatadt5[".advSearchFields"][] = "RHOT";
$tdatadt5[".advSearchFields"][] = "SHOT";
$tdatadt5[".advSearchFields"][] = "SHOTD";
$tdatadt5[".advSearchFields"][] = "RDOT";
$tdatadt5[".advSearchFields"][] = "NDOT";
$tdatadt5[".advSearchFields"][] = "RegND";
$tdatadt5[".advSearchFields"][] = "RHND";
$tdatadt5[".advSearchFields"][] = "RDND";
$tdatadt5[".advSearchFields"][] = "RHRD";
$tdatadt5[".advSearchFields"][] = "SHRD";
$tdatadt5[".advSearchFields"][] = "RHRDOT";
$tdatadt5[".advSearchFields"][] = "SHRDOT";
$tdatadt5[".advSearchFields"][] = "SHRDOTD";

$tdatadt5[".tableType"] = "list";

$tdatadt5[".printerPageOrientation"] = 0;
$tdatadt5[".nPrinterPageScale"] = 100;

$tdatadt5[".nPrinterSplitRecords"] = 40;

$tdatadt5[".nPrinterPDFSplitRecords"] = 40;



$tdatadt5[".geocodingEnabled"] = false;





$tdatadt5[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatadt5[".totalsFields"] = array();
$tdatadt5[".totalsFields"][] = array(
	"fName" => "MisPunched",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Checkbox');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "RegWD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "DWork",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "Absent",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "LateMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "UnderstimeMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "BreakLateMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "VL",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "SL",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "EL",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "PL",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "TrO",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "DH",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "RegRD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "EarlyMins",
	"numRows" => 0,
	"totalsType" => "COUNT",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "TempOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "AOTMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "NDMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "NDOTMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "ANDiff",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "RDMins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "RegOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "RHOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "SHOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "SHOTD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "RDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "DHOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "NDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "RegND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "RHND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "SHND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "DHND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "RDND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "RHNDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "SHNDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "DHNDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "RDNDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "RHRD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "SHRD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "DHRD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "RHRDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "SHRDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "SHRDOTD",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "DHRDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "RHRDND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "SHRDND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "DHRDND",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "RHRDNDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "SHRDNDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatadt5[".totalsFields"][] = array(
	"fName" => "DHRDNDOT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatadt5[".pageSize"] = 20;

$tdatadt5[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY dt5.UserName";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadt5[".strOrderBy"] = $tstrOrderBy;

$tdatadt5[".orderindexes"] = array();
	$tdatadt5[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "dt5.UserName");


$tdatadt5[".sqlHead"] = "SELECT dt5.ScID,  dt5.EmployeeID,  dt5.UserName,  dt5.WageType,  dt5.SDate,  dt5.DayIs,  dt5.RestDay,  dt5.STimeIn,  dt5.STimeOut,  dt5.TimeIn,  dt5.TimeOut,  dt5.MisPunched,  dt5.RegWD,  dt5.DWork,  dt5.Absent,  dt5.LateMins,  dt5.UnderstimeMins,  dt5.HolidayType,  dt5.TempOT,  dt5.ApprovedOT,  dt5.AOTMins,  dt5.NDMins,  dt5.ApprovedNightDiff,  dt5.ANDiff,  dt5.ApprovedRD,  dt5.RDMins,  dt5.VL,  dt5.SL,  dt5.EL,  dt5.PL,  dt5.TrO,  dt5.Rlink,  demo_user.Division,  demo_user.Department,  demo_user.Employer,  dt5.AfterBreakLogOut,  dt5.AfterBreakLog,  dt5.BreakLateMins,  dt5.EarlyMins,  dt5.SHOTD,  dt5.DHOT,  dt5.NDOT,  dt5.SHND,  dt5.DHND,  dt5.DHRDND,  dt5.RHRDND,  dt5.SHRDND,  dt5.RHNDOT,  dt5.SHNDOT,  dt5.DHNDOT,  dt5.RDNDOT,  dt5.RHRDOT,  dt5.SHRDOT,  dt5.SHRDOTD,  dt5.DHRDOT,  dt5.RHRDNDOT,  dt5.SHRDNDOT,  dt5.DHRDNDOT,  dt5.RH,  dt5.SH,  dt5.DH,  dt5.RHRD,  dt5.SHRD,  dt5.DHRD,  dt5.RegOT,  dt5.RHOT,  dt5.SHOT,  dt5.RHND,  dt5.RDOT,  dt5.RegND,  dt5.RegRD,  dt5.RDND,  dt5.NDOTMins,  dt5.PostMins";
$tdatadt5[".sqlFrom"] = "FROM dt5  INNER JOIN demo_user ON dt5.EmployeeID = demo_user.EmployeeID";
$tdatadt5[".sqlWhereExpr"] = "";
$tdatadt5[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadt5[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadt5[".arrGroupsPerPage"] = $arrGPP;

$tdatadt5[".highlightSearchResults"] = true;

$tableKeysdt5 = array();
$tableKeysdt5[] = "ScID";
$tdatadt5[".Keys"] = $tableKeysdt5;

$tdatadt5[".listFields"] = array();
$tdatadt5[".listFields"][] = "ScID";
$tdatadt5[".listFields"][] = "EmployeeID";
$tdatadt5[".listFields"][] = "UserName";
$tdatadt5[".listFields"][] = "Employer";
$tdatadt5[".listFields"][] = "Division";
$tdatadt5[".listFields"][] = "Department";
$tdatadt5[".listFields"][] = "WageType";
$tdatadt5[".listFields"][] = "SDate";
$tdatadt5[".listFields"][] = "DayIs";
$tdatadt5[".listFields"][] = "RestDay";
$tdatadt5[".listFields"][] = "STimeIn";
$tdatadt5[".listFields"][] = "STimeOut";
$tdatadt5[".listFields"][] = "TimeIn";
$tdatadt5[".listFields"][] = "TimeOut";
$tdatadt5[".listFields"][] = "AfterBreakLogOut";
$tdatadt5[".listFields"][] = "AfterBreakLog";
$tdatadt5[".listFields"][] = "MisPunched";
$tdatadt5[".listFields"][] = "RegWD";
$tdatadt5[".listFields"][] = "DWork";
$tdatadt5[".listFields"][] = "Absent";
$tdatadt5[".listFields"][] = "LateMins";
$tdatadt5[".listFields"][] = "UnderstimeMins";
$tdatadt5[".listFields"][] = "BreakLateMins";
$tdatadt5[".listFields"][] = "HolidayType";
$tdatadt5[".listFields"][] = "VL";
$tdatadt5[".listFields"][] = "SL";
$tdatadt5[".listFields"][] = "EL";
$tdatadt5[".listFields"][] = "PL";
$tdatadt5[".listFields"][] = "TrO";
$tdatadt5[".listFields"][] = "RH";
$tdatadt5[".listFields"][] = "SH";
$tdatadt5[".listFields"][] = "DH";
$tdatadt5[".listFields"][] = "RegRD";
$tdatadt5[".listFields"][] = "EarlyMins";
$tdatadt5[".listFields"][] = "PostMins";
$tdatadt5[".listFields"][] = "TempOT";
$tdatadt5[".listFields"][] = "ApprovedOT";
$tdatadt5[".listFields"][] = "AOTMins";
$tdatadt5[".listFields"][] = "NDMins";
$tdatadt5[".listFields"][] = "NDOTMins";
$tdatadt5[".listFields"][] = "ApprovedNightDiff";
$tdatadt5[".listFields"][] = "ANDiff";
$tdatadt5[".listFields"][] = "ApprovedRD";
$tdatadt5[".listFields"][] = "RDMins";
$tdatadt5[".listFields"][] = "RegOT";
$tdatadt5[".listFields"][] = "RHOT";
$tdatadt5[".listFields"][] = "SHOT";
$tdatadt5[".listFields"][] = "SHOTD";
$tdatadt5[".listFields"][] = "RDOT";
$tdatadt5[".listFields"][] = "DHOT";
$tdatadt5[".listFields"][] = "NDOT";
$tdatadt5[".listFields"][] = "RegND";
$tdatadt5[".listFields"][] = "RHND";
$tdatadt5[".listFields"][] = "SHND";
$tdatadt5[".listFields"][] = "DHND";
$tdatadt5[".listFields"][] = "RDND";
$tdatadt5[".listFields"][] = "RHNDOT";
$tdatadt5[".listFields"][] = "SHNDOT";
$tdatadt5[".listFields"][] = "DHNDOT";
$tdatadt5[".listFields"][] = "RDNDOT";
$tdatadt5[".listFields"][] = "RHRD";
$tdatadt5[".listFields"][] = "SHRD";
$tdatadt5[".listFields"][] = "DHRD";
$tdatadt5[".listFields"][] = "RHRDOT";
$tdatadt5[".listFields"][] = "SHRDOT";
$tdatadt5[".listFields"][] = "SHRDOTD";
$tdatadt5[".listFields"][] = "DHRDOT";
$tdatadt5[".listFields"][] = "RHRDND";
$tdatadt5[".listFields"][] = "SHRDND";
$tdatadt5[".listFields"][] = "DHRDND";
$tdatadt5[".listFields"][] = "RHRDNDOT";
$tdatadt5[".listFields"][] = "SHRDNDOT";
$tdatadt5[".listFields"][] = "DHRDNDOT";
$tdatadt5[".listFields"][] = "Rlink";

$tdatadt5[".hideMobileList"] = array();


$tdatadt5[".viewFields"] = array();
$tdatadt5[".viewFields"][] = "ScID";
$tdatadt5[".viewFields"][] = "EmployeeID";
$tdatadt5[".viewFields"][] = "UserName";
$tdatadt5[".viewFields"][] = "Employer";
$tdatadt5[".viewFields"][] = "Division";
$tdatadt5[".viewFields"][] = "Department";
$tdatadt5[".viewFields"][] = "WageType";
$tdatadt5[".viewFields"][] = "SDate";
$tdatadt5[".viewFields"][] = "DayIs";
$tdatadt5[".viewFields"][] = "RestDay";
$tdatadt5[".viewFields"][] = "STimeIn";
$tdatadt5[".viewFields"][] = "STimeOut";
$tdatadt5[".viewFields"][] = "TimeIn";
$tdatadt5[".viewFields"][] = "TimeOut";
$tdatadt5[".viewFields"][] = "AfterBreakLogOut";
$tdatadt5[".viewFields"][] = "AfterBreakLog";
$tdatadt5[".viewFields"][] = "MisPunched";
$tdatadt5[".viewFields"][] = "RegWD";
$tdatadt5[".viewFields"][] = "DWork";
$tdatadt5[".viewFields"][] = "Absent";
$tdatadt5[".viewFields"][] = "LateMins";
$tdatadt5[".viewFields"][] = "UnderstimeMins";
$tdatadt5[".viewFields"][] = "BreakLateMins";
$tdatadt5[".viewFields"][] = "HolidayType";
$tdatadt5[".viewFields"][] = "VL";
$tdatadt5[".viewFields"][] = "SL";
$tdatadt5[".viewFields"][] = "EL";
$tdatadt5[".viewFields"][] = "PL";
$tdatadt5[".viewFields"][] = "TrO";
$tdatadt5[".viewFields"][] = "RH";
$tdatadt5[".viewFields"][] = "SH";
$tdatadt5[".viewFields"][] = "DH";
$tdatadt5[".viewFields"][] = "RegRD";
$tdatadt5[".viewFields"][] = "EarlyMins";
$tdatadt5[".viewFields"][] = "PostMins";
$tdatadt5[".viewFields"][] = "TempOT";
$tdatadt5[".viewFields"][] = "ApprovedOT";
$tdatadt5[".viewFields"][] = "AOTMins";
$tdatadt5[".viewFields"][] = "NDMins";
$tdatadt5[".viewFields"][] = "NDOTMins";
$tdatadt5[".viewFields"][] = "ApprovedNightDiff";
$tdatadt5[".viewFields"][] = "ANDiff";
$tdatadt5[".viewFields"][] = "ApprovedRD";
$tdatadt5[".viewFields"][] = "RDMins";
$tdatadt5[".viewFields"][] = "RegOT";
$tdatadt5[".viewFields"][] = "RHOT";
$tdatadt5[".viewFields"][] = "SHOT";
$tdatadt5[".viewFields"][] = "SHOTD";
$tdatadt5[".viewFields"][] = "RDOT";
$tdatadt5[".viewFields"][] = "DHOT";
$tdatadt5[".viewFields"][] = "NDOT";
$tdatadt5[".viewFields"][] = "RegND";
$tdatadt5[".viewFields"][] = "RHND";
$tdatadt5[".viewFields"][] = "SHND";
$tdatadt5[".viewFields"][] = "DHND";
$tdatadt5[".viewFields"][] = "RDND";
$tdatadt5[".viewFields"][] = "RHNDOT";
$tdatadt5[".viewFields"][] = "SHNDOT";
$tdatadt5[".viewFields"][] = "DHNDOT";
$tdatadt5[".viewFields"][] = "RDNDOT";
$tdatadt5[".viewFields"][] = "RHRD";
$tdatadt5[".viewFields"][] = "SHRD";
$tdatadt5[".viewFields"][] = "DHRD";
$tdatadt5[".viewFields"][] = "RHRDOT";
$tdatadt5[".viewFields"][] = "SHRDOT";
$tdatadt5[".viewFields"][] = "SHRDOTD";
$tdatadt5[".viewFields"][] = "DHRDOT";
$tdatadt5[".viewFields"][] = "RHRDND";
$tdatadt5[".viewFields"][] = "SHRDND";
$tdatadt5[".viewFields"][] = "DHRDND";
$tdatadt5[".viewFields"][] = "RHRDNDOT";
$tdatadt5[".viewFields"][] = "SHRDNDOT";
$tdatadt5[".viewFields"][] = "DHRDNDOT";
$tdatadt5[".viewFields"][] = "Rlink";

$tdatadt5[".addFields"] = array();

$tdatadt5[".masterListFields"] = array();
$tdatadt5[".masterListFields"][] = "ScID";
$tdatadt5[".masterListFields"][] = "EmployeeID";
$tdatadt5[".masterListFields"][] = "UserName";
$tdatadt5[".masterListFields"][] = "Employer";
$tdatadt5[".masterListFields"][] = "Division";
$tdatadt5[".masterListFields"][] = "Department";
$tdatadt5[".masterListFields"][] = "WageType";
$tdatadt5[".masterListFields"][] = "SDate";
$tdatadt5[".masterListFields"][] = "DayIs";
$tdatadt5[".masterListFields"][] = "RestDay";
$tdatadt5[".masterListFields"][] = "STimeIn";
$tdatadt5[".masterListFields"][] = "STimeOut";
$tdatadt5[".masterListFields"][] = "TimeIn";
$tdatadt5[".masterListFields"][] = "TimeOut";
$tdatadt5[".masterListFields"][] = "AfterBreakLogOut";
$tdatadt5[".masterListFields"][] = "AfterBreakLog";
$tdatadt5[".masterListFields"][] = "MisPunched";
$tdatadt5[".masterListFields"][] = "RegWD";
$tdatadt5[".masterListFields"][] = "DWork";
$tdatadt5[".masterListFields"][] = "Absent";
$tdatadt5[".masterListFields"][] = "LateMins";
$tdatadt5[".masterListFields"][] = "UnderstimeMins";
$tdatadt5[".masterListFields"][] = "BreakLateMins";
$tdatadt5[".masterListFields"][] = "HolidayType";
$tdatadt5[".masterListFields"][] = "VL";
$tdatadt5[".masterListFields"][] = "SL";
$tdatadt5[".masterListFields"][] = "EL";
$tdatadt5[".masterListFields"][] = "PL";
$tdatadt5[".masterListFields"][] = "TrO";
$tdatadt5[".masterListFields"][] = "RH";
$tdatadt5[".masterListFields"][] = "SH";
$tdatadt5[".masterListFields"][] = "DH";
$tdatadt5[".masterListFields"][] = "RegRD";
$tdatadt5[".masterListFields"][] = "EarlyMins";
$tdatadt5[".masterListFields"][] = "PostMins";
$tdatadt5[".masterListFields"][] = "TempOT";
$tdatadt5[".masterListFields"][] = "ApprovedOT";
$tdatadt5[".masterListFields"][] = "AOTMins";
$tdatadt5[".masterListFields"][] = "NDMins";
$tdatadt5[".masterListFields"][] = "NDOTMins";
$tdatadt5[".masterListFields"][] = "ApprovedNightDiff";
$tdatadt5[".masterListFields"][] = "ANDiff";
$tdatadt5[".masterListFields"][] = "ApprovedRD";
$tdatadt5[".masterListFields"][] = "RDMins";
$tdatadt5[".masterListFields"][] = "RegOT";
$tdatadt5[".masterListFields"][] = "RHOT";
$tdatadt5[".masterListFields"][] = "SHOT";
$tdatadt5[".masterListFields"][] = "SHOTD";
$tdatadt5[".masterListFields"][] = "RDOT";
$tdatadt5[".masterListFields"][] = "DHOT";
$tdatadt5[".masterListFields"][] = "NDOT";
$tdatadt5[".masterListFields"][] = "RegND";
$tdatadt5[".masterListFields"][] = "RHND";
$tdatadt5[".masterListFields"][] = "SHND";
$tdatadt5[".masterListFields"][] = "DHND";
$tdatadt5[".masterListFields"][] = "RDND";
$tdatadt5[".masterListFields"][] = "RHNDOT";
$tdatadt5[".masterListFields"][] = "SHNDOT";
$tdatadt5[".masterListFields"][] = "DHNDOT";
$tdatadt5[".masterListFields"][] = "RDNDOT";
$tdatadt5[".masterListFields"][] = "RHRD";
$tdatadt5[".masterListFields"][] = "SHRD";
$tdatadt5[".masterListFields"][] = "DHRD";
$tdatadt5[".masterListFields"][] = "RHRDOT";
$tdatadt5[".masterListFields"][] = "SHRDOT";
$tdatadt5[".masterListFields"][] = "SHRDOTD";
$tdatadt5[".masterListFields"][] = "DHRDOT";
$tdatadt5[".masterListFields"][] = "RHRDND";
$tdatadt5[".masterListFields"][] = "SHRDND";
$tdatadt5[".masterListFields"][] = "DHRDND";
$tdatadt5[".masterListFields"][] = "RHRDNDOT";
$tdatadt5[".masterListFields"][] = "SHRDNDOT";
$tdatadt5[".masterListFields"][] = "DHRDNDOT";
$tdatadt5[".masterListFields"][] = "Rlink";

$tdatadt5[".inlineAddFields"] = array();

$tdatadt5[".editFields"] = array();

$tdatadt5[".inlineEditFields"] = array();

$tdatadt5[".updateSelectedFields"] = array();


$tdatadt5[".exportFields"] = array();
$tdatadt5[".exportFields"][] = "ScID";
$tdatadt5[".exportFields"][] = "EmployeeID";
$tdatadt5[".exportFields"][] = "UserName";
$tdatadt5[".exportFields"][] = "Employer";
$tdatadt5[".exportFields"][] = "Division";
$tdatadt5[".exportFields"][] = "Department";
$tdatadt5[".exportFields"][] = "WageType";
$tdatadt5[".exportFields"][] = "SDate";
$tdatadt5[".exportFields"][] = "DayIs";
$tdatadt5[".exportFields"][] = "RestDay";
$tdatadt5[".exportFields"][] = "STimeIn";
$tdatadt5[".exportFields"][] = "STimeOut";
$tdatadt5[".exportFields"][] = "TimeIn";
$tdatadt5[".exportFields"][] = "TimeOut";
$tdatadt5[".exportFields"][] = "AfterBreakLogOut";
$tdatadt5[".exportFields"][] = "AfterBreakLog";
$tdatadt5[".exportFields"][] = "MisPunched";
$tdatadt5[".exportFields"][] = "RegWD";
$tdatadt5[".exportFields"][] = "DWork";
$tdatadt5[".exportFields"][] = "Absent";
$tdatadt5[".exportFields"][] = "LateMins";
$tdatadt5[".exportFields"][] = "UnderstimeMins";
$tdatadt5[".exportFields"][] = "BreakLateMins";
$tdatadt5[".exportFields"][] = "HolidayType";
$tdatadt5[".exportFields"][] = "VL";
$tdatadt5[".exportFields"][] = "SL";
$tdatadt5[".exportFields"][] = "EL";
$tdatadt5[".exportFields"][] = "PL";
$tdatadt5[".exportFields"][] = "TrO";
$tdatadt5[".exportFields"][] = "RH";
$tdatadt5[".exportFields"][] = "SH";
$tdatadt5[".exportFields"][] = "DH";
$tdatadt5[".exportFields"][] = "RegRD";
$tdatadt5[".exportFields"][] = "EarlyMins";
$tdatadt5[".exportFields"][] = "PostMins";
$tdatadt5[".exportFields"][] = "TempOT";
$tdatadt5[".exportFields"][] = "ApprovedOT";
$tdatadt5[".exportFields"][] = "AOTMins";
$tdatadt5[".exportFields"][] = "NDMins";
$tdatadt5[".exportFields"][] = "NDOTMins";
$tdatadt5[".exportFields"][] = "ApprovedNightDiff";
$tdatadt5[".exportFields"][] = "ANDiff";
$tdatadt5[".exportFields"][] = "ApprovedRD";
$tdatadt5[".exportFields"][] = "RDMins";
$tdatadt5[".exportFields"][] = "RegOT";
$tdatadt5[".exportFields"][] = "RHOT";
$tdatadt5[".exportFields"][] = "SHOT";
$tdatadt5[".exportFields"][] = "SHOTD";
$tdatadt5[".exportFields"][] = "RDOT";
$tdatadt5[".exportFields"][] = "DHOT";
$tdatadt5[".exportFields"][] = "NDOT";
$tdatadt5[".exportFields"][] = "RegND";
$tdatadt5[".exportFields"][] = "RHND";
$tdatadt5[".exportFields"][] = "SHND";
$tdatadt5[".exportFields"][] = "DHND";
$tdatadt5[".exportFields"][] = "RDND";
$tdatadt5[".exportFields"][] = "RHNDOT";
$tdatadt5[".exportFields"][] = "SHNDOT";
$tdatadt5[".exportFields"][] = "DHNDOT";
$tdatadt5[".exportFields"][] = "RDNDOT";
$tdatadt5[".exportFields"][] = "RHRD";
$tdatadt5[".exportFields"][] = "SHRD";
$tdatadt5[".exportFields"][] = "DHRD";
$tdatadt5[".exportFields"][] = "RHRDOT";
$tdatadt5[".exportFields"][] = "SHRDOT";
$tdatadt5[".exportFields"][] = "SHRDOTD";
$tdatadt5[".exportFields"][] = "DHRDOT";
$tdatadt5[".exportFields"][] = "RHRDND";
$tdatadt5[".exportFields"][] = "SHRDND";
$tdatadt5[".exportFields"][] = "DHRDND";
$tdatadt5[".exportFields"][] = "RHRDNDOT";
$tdatadt5[".exportFields"][] = "SHRDNDOT";
$tdatadt5[".exportFields"][] = "DHRDNDOT";
$tdatadt5[".exportFields"][] = "Rlink";

$tdatadt5[".importFields"] = array();

$tdatadt5[".printFields"] = array();
$tdatadt5[".printFields"][] = "ScID";
$tdatadt5[".printFields"][] = "EmployeeID";
$tdatadt5[".printFields"][] = "UserName";
$tdatadt5[".printFields"][] = "Employer";
$tdatadt5[".printFields"][] = "Division";
$tdatadt5[".printFields"][] = "Department";
$tdatadt5[".printFields"][] = "WageType";
$tdatadt5[".printFields"][] = "SDate";
$tdatadt5[".printFields"][] = "DayIs";
$tdatadt5[".printFields"][] = "RestDay";
$tdatadt5[".printFields"][] = "STimeIn";
$tdatadt5[".printFields"][] = "STimeOut";
$tdatadt5[".printFields"][] = "TimeIn";
$tdatadt5[".printFields"][] = "TimeOut";
$tdatadt5[".printFields"][] = "AfterBreakLogOut";
$tdatadt5[".printFields"][] = "AfterBreakLog";
$tdatadt5[".printFields"][] = "MisPunched";
$tdatadt5[".printFields"][] = "RegWD";
$tdatadt5[".printFields"][] = "DWork";
$tdatadt5[".printFields"][] = "Absent";
$tdatadt5[".printFields"][] = "LateMins";
$tdatadt5[".printFields"][] = "UnderstimeMins";
$tdatadt5[".printFields"][] = "BreakLateMins";
$tdatadt5[".printFields"][] = "HolidayType";
$tdatadt5[".printFields"][] = "VL";
$tdatadt5[".printFields"][] = "SL";
$tdatadt5[".printFields"][] = "EL";
$tdatadt5[".printFields"][] = "PL";
$tdatadt5[".printFields"][] = "TrO";
$tdatadt5[".printFields"][] = "RH";
$tdatadt5[".printFields"][] = "SH";
$tdatadt5[".printFields"][] = "DH";
$tdatadt5[".printFields"][] = "RegRD";
$tdatadt5[".printFields"][] = "EarlyMins";
$tdatadt5[".printFields"][] = "PostMins";
$tdatadt5[".printFields"][] = "TempOT";
$tdatadt5[".printFields"][] = "ApprovedOT";
$tdatadt5[".printFields"][] = "AOTMins";
$tdatadt5[".printFields"][] = "NDMins";
$tdatadt5[".printFields"][] = "NDOTMins";
$tdatadt5[".printFields"][] = "ApprovedNightDiff";
$tdatadt5[".printFields"][] = "ANDiff";
$tdatadt5[".printFields"][] = "ApprovedRD";
$tdatadt5[".printFields"][] = "RDMins";
$tdatadt5[".printFields"][] = "RegOT";
$tdatadt5[".printFields"][] = "RHOT";
$tdatadt5[".printFields"][] = "SHOT";
$tdatadt5[".printFields"][] = "SHOTD";
$tdatadt5[".printFields"][] = "RDOT";
$tdatadt5[".printFields"][] = "DHOT";
$tdatadt5[".printFields"][] = "NDOT";
$tdatadt5[".printFields"][] = "RegND";
$tdatadt5[".printFields"][] = "RHND";
$tdatadt5[".printFields"][] = "SHND";
$tdatadt5[".printFields"][] = "DHND";
$tdatadt5[".printFields"][] = "RDND";
$tdatadt5[".printFields"][] = "RHNDOT";
$tdatadt5[".printFields"][] = "SHNDOT";
$tdatadt5[".printFields"][] = "DHNDOT";
$tdatadt5[".printFields"][] = "RDNDOT";
$tdatadt5[".printFields"][] = "RHRD";
$tdatadt5[".printFields"][] = "SHRD";
$tdatadt5[".printFields"][] = "DHRD";
$tdatadt5[".printFields"][] = "RHRDOT";
$tdatadt5[".printFields"][] = "SHRDOT";
$tdatadt5[".printFields"][] = "SHRDOTD";
$tdatadt5[".printFields"][] = "DHRDOT";
$tdatadt5[".printFields"][] = "RHRDND";
$tdatadt5[".printFields"][] = "SHRDND";
$tdatadt5[".printFields"][] = "DHRDND";
$tdatadt5[".printFields"][] = "RHRDNDOT";
$tdatadt5[".printFields"][] = "SHRDNDOT";
$tdatadt5[".printFields"][] = "DHRDNDOT";
$tdatadt5[".printFields"][] = "Rlink";


//	ScID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ScID";
	$fdata["GoodName"] = "ScID";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","ScID");
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








	$tdatadt5["ScID"] = $fdata;
//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","EmployeeID");
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




	$tdatadt5["EmployeeID"] = $fdata;
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","UserName");
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




	$tdatadt5["UserName"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","WageType");
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




	$tdatadt5["WageType"] = $fdata;
//	SDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SDate";
	$fdata["GoodName"] = "SDate";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","SDate");
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




	$tdatadt5["SDate"] = $fdata;
//	DayIs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DayIs";
	$fdata["GoodName"] = "DayIs";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","DayIs");
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








	$tdatadt5["DayIs"] = $fdata;
//	RestDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "RestDay";
	$fdata["GoodName"] = "RestDay";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","RestDay");
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








	$tdatadt5["RestDay"] = $fdata;
//	STimeIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "STimeIn";
	$fdata["GoodName"] = "STimeIn";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","STimeIn");
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








	$tdatadt5["STimeIn"] = $fdata;
//	STimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "STimeOut";
	$fdata["GoodName"] = "STimeOut";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","STimeOut");
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








	$tdatadt5["STimeOut"] = $fdata;
//	TimeIn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "TimeIn";
	$fdata["GoodName"] = "TimeIn";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","TimeIn");
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








	$tdatadt5["TimeIn"] = $fdata;
//	TimeOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "TimeOut";
	$fdata["GoodName"] = "TimeOut";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","TimeOut");
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








	$tdatadt5["TimeOut"] = $fdata;
//	MisPunched
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "MisPunched";
	$fdata["GoodName"] = "MisPunched";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","MisPunched");
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




	$tdatadt5["MisPunched"] = $fdata;
//	RegWD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "RegWD";
	$fdata["GoodName"] = "RegWD";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","RegWD");
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








	$tdatadt5["RegWD"] = $fdata;
//	DWork
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DWork";
	$fdata["GoodName"] = "DWork";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","DWork");
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








	$tdatadt5["DWork"] = $fdata;
//	Absent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Absent";
	$fdata["GoodName"] = "Absent";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","Absent");
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








	$tdatadt5["Absent"] = $fdata;
//	LateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "LateMins";
	$fdata["GoodName"] = "LateMins";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","LateMins");
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








	$tdatadt5["LateMins"] = $fdata;
//	UnderstimeMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "UnderstimeMins";
	$fdata["GoodName"] = "UnderstimeMins";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","UnderstimeMins");
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








	$tdatadt5["UnderstimeMins"] = $fdata;
//	HolidayType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "HolidayType";
	$fdata["GoodName"] = "HolidayType";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","HolidayType");
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








	$tdatadt5["HolidayType"] = $fdata;
//	TempOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "TempOT";
	$fdata["GoodName"] = "TempOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","TempOT");
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








	$tdatadt5["TempOT"] = $fdata;
//	ApprovedOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "ApprovedOT";
	$fdata["GoodName"] = "ApprovedOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","ApprovedOT");
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








	$tdatadt5["ApprovedOT"] = $fdata;
//	AOTMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "AOTMins";
	$fdata["GoodName"] = "AOTMins";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","AOTMins");
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








	$tdatadt5["AOTMins"] = $fdata;
//	NDMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "NDMins";
	$fdata["GoodName"] = "NDMins";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","NDMins");
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








	$tdatadt5["NDMins"] = $fdata;
//	ApprovedNightDiff
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "ApprovedNightDiff";
	$fdata["GoodName"] = "ApprovedNightDiff";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","ApprovedNightDiff");
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








	$tdatadt5["ApprovedNightDiff"] = $fdata;
//	ANDiff
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "ANDiff";
	$fdata["GoodName"] = "ANDiff";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","ANDiff");
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








	$tdatadt5["ANDiff"] = $fdata;
//	ApprovedRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "ApprovedRD";
	$fdata["GoodName"] = "ApprovedRD";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","ApprovedRD");
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








	$tdatadt5["ApprovedRD"] = $fdata;
//	RDMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "RDMins";
	$fdata["GoodName"] = "RDMins";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","RDMins");
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








	$tdatadt5["RDMins"] = $fdata;
//	VL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "VL";
	$fdata["GoodName"] = "VL";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","VL");
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








	$tdatadt5["VL"] = $fdata;
//	SL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "SL";
	$fdata["GoodName"] = "SL";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","SL");
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








	$tdatadt5["SL"] = $fdata;
//	EL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "EL";
	$fdata["GoodName"] = "EL";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","EL");
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








	$tdatadt5["EL"] = $fdata;
//	PL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "PL";
	$fdata["GoodName"] = "PL";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","PL");
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








	$tdatadt5["PL"] = $fdata;
//	TrO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "TrO";
	$fdata["GoodName"] = "TrO";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","TrO");
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








	$tdatadt5["TrO"] = $fdata;
//	Rlink
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Rlink";
	$fdata["GoodName"] = "Rlink";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","Rlink");
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








	$tdatadt5["Rlink"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("dt5","Division");
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




	$tdatadt5["Division"] = $fdata;
//	Department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Department";
	$fdata["GoodName"] = "Department";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("dt5","Department");
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








	$tdatadt5["Department"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "demo_user";
	$fdata["Label"] = GetFieldLabel("dt5","Employer");
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








	$tdatadt5["Employer"] = $fdata;
//	AfterBreakLogOut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "AfterBreakLogOut";
	$fdata["GoodName"] = "AfterBreakLogOut";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","AfterBreakLogOut");
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








	$tdatadt5["AfterBreakLogOut"] = $fdata;
//	AfterBreakLog
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "AfterBreakLog";
	$fdata["GoodName"] = "AfterBreakLog";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","AfterBreakLog");
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








	$tdatadt5["AfterBreakLog"] = $fdata;
//	BreakLateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "BreakLateMins";
	$fdata["GoodName"] = "BreakLateMins";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","BreakLateMins");
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








	$tdatadt5["BreakLateMins"] = $fdata;
//	EarlyMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "EarlyMins";
	$fdata["GoodName"] = "EarlyMins";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","EarlyMins");
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








	$tdatadt5["EarlyMins"] = $fdata;
//	SHOTD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "SHOTD";
	$fdata["GoodName"] = "SHOTD";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","SHOTD");
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




	$tdatadt5["SHOTD"] = $fdata;
//	DHOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "DHOT";
	$fdata["GoodName"] = "DHOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","DHOT");
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








	$tdatadt5["DHOT"] = $fdata;
//	NDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "NDOT";
	$fdata["GoodName"] = "NDOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","NDOT");
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




	$tdatadt5["NDOT"] = $fdata;
//	SHND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "SHND";
	$fdata["GoodName"] = "SHND";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","SHND");
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








	$tdatadt5["SHND"] = $fdata;
//	DHND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "DHND";
	$fdata["GoodName"] = "DHND";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","DHND");
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








	$tdatadt5["DHND"] = $fdata;
//	DHRDND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "DHRDND";
	$fdata["GoodName"] = "DHRDND";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","DHRDND");
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








	$tdatadt5["DHRDND"] = $fdata;
//	RHRDND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "RHRDND";
	$fdata["GoodName"] = "RHRDND";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","RHRDND");
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








	$tdatadt5["RHRDND"] = $fdata;
//	SHRDND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "SHRDND";
	$fdata["GoodName"] = "SHRDND";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","SHRDND");
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








	$tdatadt5["SHRDND"] = $fdata;
//	RHNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "RHNDOT";
	$fdata["GoodName"] = "RHNDOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","RHNDOT");
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








	$tdatadt5["RHNDOT"] = $fdata;
//	SHNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "SHNDOT";
	$fdata["GoodName"] = "SHNDOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","SHNDOT");
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








	$tdatadt5["SHNDOT"] = $fdata;
//	DHNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "DHNDOT";
	$fdata["GoodName"] = "DHNDOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","DHNDOT");
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








	$tdatadt5["DHNDOT"] = $fdata;
//	RDNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "RDNDOT";
	$fdata["GoodName"] = "RDNDOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","RDNDOT");
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








	$tdatadt5["RDNDOT"] = $fdata;
//	RHRDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "RHRDOT";
	$fdata["GoodName"] = "RHRDOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","RHRDOT");
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




	$tdatadt5["RHRDOT"] = $fdata;
//	SHRDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "SHRDOT";
	$fdata["GoodName"] = "SHRDOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","SHRDOT");
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




	$tdatadt5["SHRDOT"] = $fdata;
//	SHRDOTD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "SHRDOTD";
	$fdata["GoodName"] = "SHRDOTD";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","SHRDOTD");
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




	$tdatadt5["SHRDOTD"] = $fdata;
//	DHRDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "DHRDOT";
	$fdata["GoodName"] = "DHRDOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","DHRDOT");
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








	$tdatadt5["DHRDOT"] = $fdata;
//	RHRDNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "RHRDNDOT";
	$fdata["GoodName"] = "RHRDNDOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","RHRDNDOT");
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








	$tdatadt5["RHRDNDOT"] = $fdata;
//	SHRDNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "SHRDNDOT";
	$fdata["GoodName"] = "SHRDNDOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","SHRDNDOT");
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








	$tdatadt5["SHRDNDOT"] = $fdata;
//	DHRDNDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "DHRDNDOT";
	$fdata["GoodName"] = "DHRDNDOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","DHRDNDOT");
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








	$tdatadt5["DHRDNDOT"] = $fdata;
//	RH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "RH";
	$fdata["GoodName"] = "RH";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","RH");
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




	$tdatadt5["RH"] = $fdata;
//	SH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "SH";
	$fdata["GoodName"] = "SH";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","SH");
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




	$tdatadt5["SH"] = $fdata;
//	DH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "DH";
	$fdata["GoodName"] = "DH";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","DH");
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








	$tdatadt5["DH"] = $fdata;
//	RHRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "RHRD";
	$fdata["GoodName"] = "RHRD";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","RHRD");
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




	$tdatadt5["RHRD"] = $fdata;
//	SHRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "SHRD";
	$fdata["GoodName"] = "SHRD";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","SHRD");
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




	$tdatadt5["SHRD"] = $fdata;
//	DHRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "DHRD";
	$fdata["GoodName"] = "DHRD";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","DHRD");
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








	$tdatadt5["DHRD"] = $fdata;
//	RegOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "RegOT";
	$fdata["GoodName"] = "RegOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","RegOT");
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




	$tdatadt5["RegOT"] = $fdata;
//	RHOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "RHOT";
	$fdata["GoodName"] = "RHOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","RHOT");
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




	$tdatadt5["RHOT"] = $fdata;
//	SHOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "SHOT";
	$fdata["GoodName"] = "SHOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","SHOT");
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




	$tdatadt5["SHOT"] = $fdata;
//	RHND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "RHND";
	$fdata["GoodName"] = "RHND";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","RHND");
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




	$tdatadt5["RHND"] = $fdata;
//	RDOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "RDOT";
	$fdata["GoodName"] = "RDOT";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","RDOT");
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




	$tdatadt5["RDOT"] = $fdata;
//	RegND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "RegND";
	$fdata["GoodName"] = "RegND";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","RegND");
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




	$tdatadt5["RegND"] = $fdata;
//	RegRD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "RegRD";
	$fdata["GoodName"] = "RegRD";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","RegRD");
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




	$tdatadt5["RegRD"] = $fdata;
//	RDND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "RDND";
	$fdata["GoodName"] = "RDND";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","RDND");
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




	$tdatadt5["RDND"] = $fdata;
//	NDOTMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "NDOTMins";
	$fdata["GoodName"] = "NDOTMins";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","NDOTMins");
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




	$tdatadt5["NDOTMins"] = $fdata;
//	PostMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "PostMins";
	$fdata["GoodName"] = "PostMins";
	$fdata["ownerTable"] = "dt5";
	$fdata["Label"] = GetFieldLabel("dt5","PostMins");
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




	$tdatadt5["PostMins"] = $fdata;


$tables_data["dt5"]=&$tdatadt5;
$field_labels["dt5"] = &$fieldLabelsdt5;
$fieldToolTips["dt5"] = &$fieldToolTipsdt5;
$placeHolders["dt5"] = &$placeHoldersdt5;
$page_titles["dt5"] = &$pageTitlesdt5;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dt5"] = array();
//	ileave
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ileave";
		$detailsParam["dOriginalTable"] = "ileave";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ileave";
	$detailsParam["dCaptionTable"] = GetTableCaption("ileave");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = true;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["dt5"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dt5"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dt5"][$dIndex]["masterKeys"][]="SDate";

	$detailsTablesData["dt5"][$dIndex]["masterKeys"][]="EmployeeID";

				$detailsTablesData["dt5"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dt5"][$dIndex]["detailKeys"][]="LDate";

		
	$detailsTablesData["dt5"][$dIndex]["detailKeys"][]="EmployeeID";
//	indschedule1
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="indschedule1";
		$detailsParam["dOriginalTable"] = "indschedule";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "indschedule1";
	$detailsParam["dCaptionTable"] = GetTableCaption("indschedule1");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["dt5"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dt5"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dt5"][$dIndex]["masterKeys"][]="ScID";

				$detailsTablesData["dt5"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dt5"][$dIndex]["detailKeys"][]="ScID";
//	indbreaks
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="indbreaks";
		$detailsParam["dOriginalTable"] = "indbreaks";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "indbreaks";
	$detailsParam["dCaptionTable"] = GetTableCaption("indbreaks");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = true;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["dt5"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dt5"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dt5"][$dIndex]["masterKeys"][]="ScID";

				$detailsTablesData["dt5"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dt5"][$dIndex]["detailKeys"][]="ScID";
//	dtrtable
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dtrtable";
		$detailsParam["dOriginalTable"] = "dtrtable";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "dtrtable";
	$detailsParam["dCaptionTable"] = GetTableCaption("dtrtable");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = true;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["dt5"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dt5"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dt5"][$dIndex]["masterKeys"][]="ScID";

				$detailsTablesData["dt5"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dt5"][$dIndex]["detailKeys"][]="ScID";

// tables which are master tables for current table (detail)
$masterTablesData["dt5"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_dt5()
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
	"m_srcTableName" => "dt5"
));

$proto6["m_sql"] = "dt5.ScID";
$proto6["m_srcTableName"] = "dt5";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto8["m_sql"] = "dt5.EmployeeID";
$proto8["m_srcTableName"] = "dt5";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto10["m_sql"] = "dt5.UserName";
$proto10["m_srcTableName"] = "dt5";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "WageType",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto12["m_sql"] = "dt5.WageType";
$proto12["m_srcTableName"] = "dt5";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "SDate",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto14["m_sql"] = "dt5.SDate";
$proto14["m_srcTableName"] = "dt5";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DayIs",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto16["m_sql"] = "dt5.DayIs";
$proto16["m_srcTableName"] = "dt5";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "RestDay",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto18["m_sql"] = "dt5.RestDay";
$proto18["m_srcTableName"] = "dt5";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "STimeIn",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto20["m_sql"] = "dt5.STimeIn";
$proto20["m_srcTableName"] = "dt5";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "STimeOut",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto22["m_sql"] = "dt5.STimeOut";
$proto22["m_srcTableName"] = "dt5";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeIn",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto24["m_sql"] = "dt5.TimeIn";
$proto24["m_srcTableName"] = "dt5";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeOut",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto26["m_sql"] = "dt5.TimeOut";
$proto26["m_srcTableName"] = "dt5";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "MisPunched",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto28["m_sql"] = "dt5.MisPunched";
$proto28["m_srcTableName"] = "dt5";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "RegWD",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto30["m_sql"] = "dt5.RegWD";
$proto30["m_srcTableName"] = "dt5";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DWork",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto32["m_sql"] = "dt5.DWork";
$proto32["m_srcTableName"] = "dt5";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Absent",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto34["m_sql"] = "dt5.Absent";
$proto34["m_srcTableName"] = "dt5";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "LateMins",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto36["m_sql"] = "dt5.LateMins";
$proto36["m_srcTableName"] = "dt5";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "UnderstimeMins",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto38["m_sql"] = "dt5.UnderstimeMins";
$proto38["m_srcTableName"] = "dt5";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "HolidayType",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto40["m_sql"] = "dt5.HolidayType";
$proto40["m_srcTableName"] = "dt5";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "TempOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto42["m_sql"] = "dt5.TempOT";
$proto42["m_srcTableName"] = "dt5";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto44["m_sql"] = "dt5.ApprovedOT";
$proto44["m_srcTableName"] = "dt5";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "AOTMins",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto46["m_sql"] = "dt5.AOTMins";
$proto46["m_srcTableName"] = "dt5";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "NDMins",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto48["m_sql"] = "dt5.NDMins";
$proto48["m_srcTableName"] = "dt5";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedNightDiff",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto50["m_sql"] = "dt5.ApprovedNightDiff";
$proto50["m_srcTableName"] = "dt5";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "ANDiff",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto52["m_sql"] = "dt5.ANDiff";
$proto52["m_srcTableName"] = "dt5";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedRD",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto54["m_sql"] = "dt5.ApprovedRD";
$proto54["m_srcTableName"] = "dt5";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "RDMins",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto56["m_sql"] = "dt5.RDMins";
$proto56["m_srcTableName"] = "dt5";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "VL",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto58["m_sql"] = "dt5.VL";
$proto58["m_srcTableName"] = "dt5";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "SL",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto60["m_sql"] = "dt5.SL";
$proto60["m_srcTableName"] = "dt5";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "EL",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto62["m_sql"] = "dt5.EL";
$proto62["m_srcTableName"] = "dt5";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "PL",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto64["m_sql"] = "dt5.PL";
$proto64["m_srcTableName"] = "dt5";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "TrO",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto66["m_sql"] = "dt5.TrO";
$proto66["m_srcTableName"] = "dt5";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "Rlink",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto68["m_sql"] = "dt5.Rlink";
$proto68["m_srcTableName"] = "dt5";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "dt5"
));

$proto70["m_sql"] = "demo_user.Division";
$proto70["m_srcTableName"] = "dt5";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "dt5"
));

$proto72["m_sql"] = "demo_user.Department";
$proto72["m_srcTableName"] = "dt5";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "demo_user",
	"m_srcTableName" => "dt5"
));

$proto74["m_sql"] = "demo_user.Employer";
$proto74["m_srcTableName"] = "dt5";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "AfterBreakLogOut",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto76["m_sql"] = "dt5.AfterBreakLogOut";
$proto76["m_srcTableName"] = "dt5";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "AfterBreakLog",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto78["m_sql"] = "dt5.AfterBreakLog";
$proto78["m_srcTableName"] = "dt5";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "BreakLateMins",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto80["m_sql"] = "dt5.BreakLateMins";
$proto80["m_srcTableName"] = "dt5";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "EarlyMins",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto82["m_sql"] = "dt5.EarlyMins";
$proto82["m_srcTableName"] = "dt5";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOTD",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto84["m_sql"] = "dt5.SHOTD";
$proto84["m_srcTableName"] = "dt5";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "DHOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto86["m_sql"] = "dt5.DHOT";
$proto86["m_srcTableName"] = "dt5";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "NDOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto88["m_sql"] = "dt5.NDOT";
$proto88["m_srcTableName"] = "dt5";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "SHND",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto90["m_sql"] = "dt5.SHND";
$proto90["m_srcTableName"] = "dt5";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "DHND",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto92["m_sql"] = "dt5.DHND";
$proto92["m_srcTableName"] = "dt5";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDND",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto94["m_sql"] = "dt5.DHRDND";
$proto94["m_srcTableName"] = "dt5";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDND",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto96["m_sql"] = "dt5.RHRDND";
$proto96["m_srcTableName"] = "dt5";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDND",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto98["m_sql"] = "dt5.SHRDND";
$proto98["m_srcTableName"] = "dt5";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "RHNDOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto100["m_sql"] = "dt5.RHNDOT";
$proto100["m_srcTableName"] = "dt5";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "SHNDOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto102["m_sql"] = "dt5.SHNDOT";
$proto102["m_srcTableName"] = "dt5";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "DHNDOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto104["m_sql"] = "dt5.DHNDOT";
$proto104["m_srcTableName"] = "dt5";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "RDNDOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto106["m_sql"] = "dt5.RDNDOT";
$proto106["m_srcTableName"] = "dt5";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto108["m_sql"] = "dt5.RHRDOT";
$proto108["m_srcTableName"] = "dt5";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto110["m_sql"] = "dt5.SHRDOT";
$proto110["m_srcTableName"] = "dt5";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDOTD",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto112["m_sql"] = "dt5.SHRDOTD";
$proto112["m_srcTableName"] = "dt5";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto114["m_sql"] = "dt5.DHRDOT";
$proto114["m_srcTableName"] = "dt5";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDNDOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto116["m_sql"] = "dt5.RHRDNDOT";
$proto116["m_srcTableName"] = "dt5";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDNDOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto118["m_sql"] = "dt5.SHRDNDOT";
$proto118["m_srcTableName"] = "dt5";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDNDOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto120["m_sql"] = "dt5.DHRDNDOT";
$proto120["m_srcTableName"] = "dt5";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "RH",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto122["m_sql"] = "dt5.RH";
$proto122["m_srcTableName"] = "dt5";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "SH",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto124["m_sql"] = "dt5.SH";
$proto124["m_srcTableName"] = "dt5";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "DH",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto126["m_sql"] = "dt5.DH";
$proto126["m_srcTableName"] = "dt5";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRD",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto128["m_sql"] = "dt5.RHRD";
$proto128["m_srcTableName"] = "dt5";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRD",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto130["m_sql"] = "dt5.SHRD";
$proto130["m_srcTableName"] = "dt5";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRD",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto132["m_sql"] = "dt5.DHRD";
$proto132["m_srcTableName"] = "dt5";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "RegOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto134["m_sql"] = "dt5.RegOT";
$proto134["m_srcTableName"] = "dt5";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "RHOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto136["m_sql"] = "dt5.RHOT";
$proto136["m_srcTableName"] = "dt5";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto138["m_sql"] = "dt5.SHOT";
$proto138["m_srcTableName"] = "dt5";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "RHND",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto140["m_sql"] = "dt5.RHND";
$proto140["m_srcTableName"] = "dt5";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "RDOT",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto142["m_sql"] = "dt5.RDOT";
$proto142["m_srcTableName"] = "dt5";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "RegND",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto144["m_sql"] = "dt5.RegND";
$proto144["m_srcTableName"] = "dt5";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "RegRD",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto146["m_sql"] = "dt5.RegRD";
$proto146["m_srcTableName"] = "dt5";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "RDND",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto148["m_sql"] = "dt5.RDND";
$proto148["m_srcTableName"] = "dt5";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "NDOTMins",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto150["m_sql"] = "dt5.NDOTMins";
$proto150["m_srcTableName"] = "dt5";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "PostMins",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
));

$proto152["m_sql"] = "dt5.PostMins";
$proto152["m_srcTableName"] = "dt5";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto154=array();
$proto154["m_link"] = "SQLL_MAIN";
			$proto155=array();
$proto155["m_strName"] = "dt5";
$proto155["m_srcTableName"] = "dt5";
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
$proto154["m_srcTableName"] = "dt5";
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
$proto159["m_srcTableName"] = "dt5";
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
$proto158["m_srcTableName"] = "dt5";
$proto160=array();
$proto160["m_sql"] = "dt5.EmployeeID = demo_user.EmployeeID";
$proto160["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EmployeeID",
	"m_strTable" => "dt5",
	"m_srcTableName" => "dt5"
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
	"m_srcTableName" => "dt5"
));

$proto162["m_column"]=$obj;
$proto162["m_bAsc"] = 1;
$proto162["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto162);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dt5";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dt5 = createSqlQuery_dt5();


	
		;

																																																																										

$tdatadt5[".sqlquery"] = $queryData_dt5;

$tableEvents["dt5"] = new eventsBase;
$tdatadt5[".hasEvents"] = false;

?>