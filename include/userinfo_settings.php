<?php
require_once(getabspath("classes/cipherer.php"));




$tdatauserinfo = array();
	$tdatauserinfo[".truncateText"] = true;
	$tdatauserinfo[".NumberOfChars"] = 80;
	$tdatauserinfo[".ShortName"] = "userinfo";
	$tdatauserinfo[".OwnerID"] = "";
	$tdatauserinfo[".OriginalTable"] = "userinfo";

//	field labels
$fieldLabelsuserinfo = array();
$fieldToolTipsuserinfo = array();
$pageTitlesuserinfo = array();
$placeHoldersuserinfo = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsuserinfo["English"] = array();
	$fieldToolTipsuserinfo["English"] = array();
	$placeHoldersuserinfo["English"] = array();
	$pageTitlesuserinfo["English"] = array();
	$fieldLabelsuserinfo["English"]["USERID"] = "USERID";
	$fieldToolTipsuserinfo["English"]["USERID"] = "";
	$placeHoldersuserinfo["English"]["USERID"] = "";
	$fieldLabelsuserinfo["English"]["Badgenumber"] = "Badgenumber";
	$fieldToolTipsuserinfo["English"]["Badgenumber"] = "";
	$placeHoldersuserinfo["English"]["Badgenumber"] = "";
	$fieldLabelsuserinfo["English"]["SSN"] = "SSN";
	$fieldToolTipsuserinfo["English"]["SSN"] = "";
	$placeHoldersuserinfo["English"]["SSN"] = "";
	$fieldLabelsuserinfo["English"]["Name"] = "Name";
	$fieldToolTipsuserinfo["English"]["Name"] = "";
	$placeHoldersuserinfo["English"]["Name"] = "";
	$fieldLabelsuserinfo["English"]["Gender"] = "Gender";
	$fieldToolTipsuserinfo["English"]["Gender"] = "";
	$placeHoldersuserinfo["English"]["Gender"] = "";
	$fieldLabelsuserinfo["English"]["TITLE"] = "TITLE";
	$fieldToolTipsuserinfo["English"]["TITLE"] = "";
	$placeHoldersuserinfo["English"]["TITLE"] = "";
	$fieldLabelsuserinfo["English"]["PAGER"] = "PAGER";
	$fieldToolTipsuserinfo["English"]["PAGER"] = "";
	$placeHoldersuserinfo["English"]["PAGER"] = "";
	$fieldLabelsuserinfo["English"]["BIRTHDAY"] = "BIRTHDAY";
	$fieldToolTipsuserinfo["English"]["BIRTHDAY"] = "";
	$placeHoldersuserinfo["English"]["BIRTHDAY"] = "";
	$fieldLabelsuserinfo["English"]["HIREDDAY"] = "HIREDDAY";
	$fieldToolTipsuserinfo["English"]["HIREDDAY"] = "";
	$placeHoldersuserinfo["English"]["HIREDDAY"] = "";
	$fieldLabelsuserinfo["English"]["street"] = "Street";
	$fieldToolTipsuserinfo["English"]["street"] = "";
	$placeHoldersuserinfo["English"]["street"] = "";
	$fieldLabelsuserinfo["English"]["CITY"] = "CITY";
	$fieldToolTipsuserinfo["English"]["CITY"] = "";
	$placeHoldersuserinfo["English"]["CITY"] = "";
	$fieldLabelsuserinfo["English"]["STATE"] = "STATE";
	$fieldToolTipsuserinfo["English"]["STATE"] = "";
	$placeHoldersuserinfo["English"]["STATE"] = "";
	$fieldLabelsuserinfo["English"]["ZIP"] = "ZIP";
	$fieldToolTipsuserinfo["English"]["ZIP"] = "";
	$placeHoldersuserinfo["English"]["ZIP"] = "";
	$fieldLabelsuserinfo["English"]["OPHONE"] = "OPHONE";
	$fieldToolTipsuserinfo["English"]["OPHONE"] = "";
	$placeHoldersuserinfo["English"]["OPHONE"] = "";
	$fieldLabelsuserinfo["English"]["FPHONE"] = "FPHONE";
	$fieldToolTipsuserinfo["English"]["FPHONE"] = "";
	$placeHoldersuserinfo["English"]["FPHONE"] = "";
	$fieldLabelsuserinfo["English"]["VERIFICATIONMETHOD"] = "VERIFICATIONMETHOD";
	$fieldToolTipsuserinfo["English"]["VERIFICATIONMETHOD"] = "";
	$placeHoldersuserinfo["English"]["VERIFICATIONMETHOD"] = "";
	$fieldLabelsuserinfo["English"]["DEFAULTDEPTID"] = "DEFAULTDEPTID";
	$fieldToolTipsuserinfo["English"]["DEFAULTDEPTID"] = "";
	$placeHoldersuserinfo["English"]["DEFAULTDEPTID"] = "";
	$fieldLabelsuserinfo["English"]["SECURITYFLAGS"] = "SECURITYFLAGS";
	$fieldToolTipsuserinfo["English"]["SECURITYFLAGS"] = "";
	$placeHoldersuserinfo["English"]["SECURITYFLAGS"] = "";
	$fieldLabelsuserinfo["English"]["ATT"] = "ATT";
	$fieldToolTipsuserinfo["English"]["ATT"] = "";
	$placeHoldersuserinfo["English"]["ATT"] = "";
	$fieldLabelsuserinfo["English"]["INLATE"] = "INLATE";
	$fieldToolTipsuserinfo["English"]["INLATE"] = "";
	$placeHoldersuserinfo["English"]["INLATE"] = "";
	$fieldLabelsuserinfo["English"]["OUTEARLY"] = "OUTEARLY";
	$fieldToolTipsuserinfo["English"]["OUTEARLY"] = "";
	$placeHoldersuserinfo["English"]["OUTEARLY"] = "";
	$fieldLabelsuserinfo["English"]["OVERTIME"] = "OVERTIME";
	$fieldToolTipsuserinfo["English"]["OVERTIME"] = "";
	$placeHoldersuserinfo["English"]["OVERTIME"] = "";
	$fieldLabelsuserinfo["English"]["SEP"] = "SEP";
	$fieldToolTipsuserinfo["English"]["SEP"] = "";
	$placeHoldersuserinfo["English"]["SEP"] = "";
	$fieldLabelsuserinfo["English"]["HOLIDAY"] = "HOLIDAY";
	$fieldToolTipsuserinfo["English"]["HOLIDAY"] = "";
	$placeHoldersuserinfo["English"]["HOLIDAY"] = "";
	$fieldLabelsuserinfo["English"]["MINZU"] = "MINZU";
	$fieldToolTipsuserinfo["English"]["MINZU"] = "";
	$placeHoldersuserinfo["English"]["MINZU"] = "";
	$fieldLabelsuserinfo["English"]["PASSWORD"] = "PASSWORD";
	$fieldToolTipsuserinfo["English"]["PASSWORD"] = "";
	$placeHoldersuserinfo["English"]["PASSWORD"] = "";
	$fieldLabelsuserinfo["English"]["LUNCHDURATION"] = "LUNCHDURATION";
	$fieldToolTipsuserinfo["English"]["LUNCHDURATION"] = "";
	$placeHoldersuserinfo["English"]["LUNCHDURATION"] = "";
	$fieldLabelsuserinfo["English"]["PHOTO"] = "PHOTO";
	$fieldToolTipsuserinfo["English"]["PHOTO"] = "";
	$placeHoldersuserinfo["English"]["PHOTO"] = "";
	$fieldLabelsuserinfo["English"]["mverifypass"] = "Mverifypass";
	$fieldToolTipsuserinfo["English"]["mverifypass"] = "";
	$placeHoldersuserinfo["English"]["mverifypass"] = "";
	$fieldLabelsuserinfo["English"]["Notes"] = "Notes";
	$fieldToolTipsuserinfo["English"]["Notes"] = "";
	$placeHoldersuserinfo["English"]["Notes"] = "";
	$fieldLabelsuserinfo["English"]["privilege"] = "Privilege";
	$fieldToolTipsuserinfo["English"]["privilege"] = "";
	$placeHoldersuserinfo["English"]["privilege"] = "";
	$fieldLabelsuserinfo["English"]["InheritDeptSch"] = "Inherit Dept Sch";
	$fieldToolTipsuserinfo["English"]["InheritDeptSch"] = "";
	$placeHoldersuserinfo["English"]["InheritDeptSch"] = "";
	$fieldLabelsuserinfo["English"]["InheritDeptSchClass"] = "Inherit Dept Sch Class";
	$fieldToolTipsuserinfo["English"]["InheritDeptSchClass"] = "";
	$placeHoldersuserinfo["English"]["InheritDeptSchClass"] = "";
	$fieldLabelsuserinfo["English"]["AutoSchPlan"] = "Auto Sch Plan";
	$fieldToolTipsuserinfo["English"]["AutoSchPlan"] = "";
	$placeHoldersuserinfo["English"]["AutoSchPlan"] = "";
	$fieldLabelsuserinfo["English"]["MinAutoSchInterval"] = "Min Auto Sch Interval";
	$fieldToolTipsuserinfo["English"]["MinAutoSchInterval"] = "";
	$placeHoldersuserinfo["English"]["MinAutoSchInterval"] = "";
	$fieldLabelsuserinfo["English"]["RegisterOT"] = "Register OT";
	$fieldToolTipsuserinfo["English"]["RegisterOT"] = "";
	$placeHoldersuserinfo["English"]["RegisterOT"] = "";
	$fieldLabelsuserinfo["English"]["InheritDeptRule"] = "Inherit Dept Rule";
	$fieldToolTipsuserinfo["English"]["InheritDeptRule"] = "";
	$placeHoldersuserinfo["English"]["InheritDeptRule"] = "";
	$fieldLabelsuserinfo["English"]["EMPRIVILEGE"] = "EMPRIVILEGE";
	$fieldToolTipsuserinfo["English"]["EMPRIVILEGE"] = "";
	$placeHoldersuserinfo["English"]["EMPRIVILEGE"] = "";
	$fieldLabelsuserinfo["English"]["CardNo"] = "Card No";
	$fieldToolTipsuserinfo["English"]["CardNo"] = "";
	$placeHoldersuserinfo["English"]["CardNo"] = "";
	$fieldLabelsuserinfo["English"]["FaceGroup"] = "Face Group";
	$fieldToolTipsuserinfo["English"]["FaceGroup"] = "";
	$placeHoldersuserinfo["English"]["FaceGroup"] = "";
	$fieldLabelsuserinfo["English"]["AccGroup"] = "Acc Group";
	$fieldToolTipsuserinfo["English"]["AccGroup"] = "";
	$placeHoldersuserinfo["English"]["AccGroup"] = "";
	$fieldLabelsuserinfo["English"]["UseAccGroupTZ"] = "Use Acc Group TZ";
	$fieldToolTipsuserinfo["English"]["UseAccGroupTZ"] = "";
	$placeHoldersuserinfo["English"]["UseAccGroupTZ"] = "";
	$fieldLabelsuserinfo["English"]["VerifyCode"] = "Verify Code";
	$fieldToolTipsuserinfo["English"]["VerifyCode"] = "";
	$placeHoldersuserinfo["English"]["VerifyCode"] = "";
	$fieldLabelsuserinfo["English"]["Expires"] = "Expires";
	$fieldToolTipsuserinfo["English"]["Expires"] = "";
	$placeHoldersuserinfo["English"]["Expires"] = "";
	$fieldLabelsuserinfo["English"]["ValidCount"] = "Valid Count";
	$fieldToolTipsuserinfo["English"]["ValidCount"] = "";
	$placeHoldersuserinfo["English"]["ValidCount"] = "";
	$fieldLabelsuserinfo["English"]["ValidTimeBegin"] = "Valid Time Begin";
	$fieldToolTipsuserinfo["English"]["ValidTimeBegin"] = "";
	$placeHoldersuserinfo["English"]["ValidTimeBegin"] = "";
	$fieldLabelsuserinfo["English"]["ValidTimeEnd"] = "Valid Time End";
	$fieldToolTipsuserinfo["English"]["ValidTimeEnd"] = "";
	$placeHoldersuserinfo["English"]["ValidTimeEnd"] = "";
	$fieldLabelsuserinfo["English"]["TimeZone1"] = "Time Zone1";
	$fieldToolTipsuserinfo["English"]["TimeZone1"] = "";
	$placeHoldersuserinfo["English"]["TimeZone1"] = "";
	$fieldLabelsuserinfo["English"]["TimeZone2"] = "Time Zone2";
	$fieldToolTipsuserinfo["English"]["TimeZone2"] = "";
	$placeHoldersuserinfo["English"]["TimeZone2"] = "";
	$fieldLabelsuserinfo["English"]["TimeZone3"] = "Time Zone3";
	$fieldToolTipsuserinfo["English"]["TimeZone3"] = "";
	$placeHoldersuserinfo["English"]["TimeZone3"] = "";
	if (count($fieldToolTipsuserinfo["English"]))
		$tdatauserinfo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsuserinfo[""] = array();
	$fieldToolTipsuserinfo[""] = array();
	$placeHoldersuserinfo[""] = array();
	$pageTitlesuserinfo[""] = array();
	$fieldLabelsuserinfo[""]["USERID"] = "USERID";
	$fieldToolTipsuserinfo[""]["USERID"] = "";
	$placeHoldersuserinfo[""]["USERID"] = "";
	$fieldLabelsuserinfo[""]["Badgenumber"] = "Badgenumber";
	$fieldToolTipsuserinfo[""]["Badgenumber"] = "";
	$placeHoldersuserinfo[""]["Badgenumber"] = "";
	$fieldLabelsuserinfo[""]["SSN"] = "SSN";
	$fieldToolTipsuserinfo[""]["SSN"] = "";
	$placeHoldersuserinfo[""]["SSN"] = "";
	$fieldLabelsuserinfo[""]["Name"] = "Name";
	$fieldToolTipsuserinfo[""]["Name"] = "";
	$placeHoldersuserinfo[""]["Name"] = "";
	$fieldLabelsuserinfo[""]["Gender"] = "Gender";
	$fieldToolTipsuserinfo[""]["Gender"] = "";
	$placeHoldersuserinfo[""]["Gender"] = "";
	$fieldLabelsuserinfo[""]["TITLE"] = "TITLE";
	$fieldToolTipsuserinfo[""]["TITLE"] = "";
	$placeHoldersuserinfo[""]["TITLE"] = "";
	$fieldLabelsuserinfo[""]["PAGER"] = "PAGER";
	$fieldToolTipsuserinfo[""]["PAGER"] = "";
	$placeHoldersuserinfo[""]["PAGER"] = "";
	$fieldLabelsuserinfo[""]["BIRTHDAY"] = "BIRTHDAY";
	$fieldToolTipsuserinfo[""]["BIRTHDAY"] = "";
	$placeHoldersuserinfo[""]["BIRTHDAY"] = "";
	$fieldLabelsuserinfo[""]["HIREDDAY"] = "HIREDDAY";
	$fieldToolTipsuserinfo[""]["HIREDDAY"] = "";
	$placeHoldersuserinfo[""]["HIREDDAY"] = "";
	$fieldLabelsuserinfo[""]["street"] = "Street";
	$fieldToolTipsuserinfo[""]["street"] = "";
	$placeHoldersuserinfo[""]["street"] = "";
	$fieldLabelsuserinfo[""]["CITY"] = "CITY";
	$fieldToolTipsuserinfo[""]["CITY"] = "";
	$placeHoldersuserinfo[""]["CITY"] = "";
	$fieldLabelsuserinfo[""]["STATE"] = "STATE";
	$fieldToolTipsuserinfo[""]["STATE"] = "";
	$placeHoldersuserinfo[""]["STATE"] = "";
	$fieldLabelsuserinfo[""]["ZIP"] = "ZIP";
	$fieldToolTipsuserinfo[""]["ZIP"] = "";
	$placeHoldersuserinfo[""]["ZIP"] = "";
	$fieldLabelsuserinfo[""]["OPHONE"] = "OPHONE";
	$fieldToolTipsuserinfo[""]["OPHONE"] = "";
	$placeHoldersuserinfo[""]["OPHONE"] = "";
	$fieldLabelsuserinfo[""]["FPHONE"] = "FPHONE";
	$fieldToolTipsuserinfo[""]["FPHONE"] = "";
	$placeHoldersuserinfo[""]["FPHONE"] = "";
	$fieldLabelsuserinfo[""]["VERIFICATIONMETHOD"] = "VERIFICATIONMETHOD";
	$fieldToolTipsuserinfo[""]["VERIFICATIONMETHOD"] = "";
	$placeHoldersuserinfo[""]["VERIFICATIONMETHOD"] = "";
	$fieldLabelsuserinfo[""]["DEFAULTDEPTID"] = "DEFAULTDEPTID";
	$fieldToolTipsuserinfo[""]["DEFAULTDEPTID"] = "";
	$placeHoldersuserinfo[""]["DEFAULTDEPTID"] = "";
	$fieldLabelsuserinfo[""]["SECURITYFLAGS"] = "SECURITYFLAGS";
	$fieldToolTipsuserinfo[""]["SECURITYFLAGS"] = "";
	$placeHoldersuserinfo[""]["SECURITYFLAGS"] = "";
	$fieldLabelsuserinfo[""]["ATT"] = "ATT";
	$fieldToolTipsuserinfo[""]["ATT"] = "";
	$placeHoldersuserinfo[""]["ATT"] = "";
	$fieldLabelsuserinfo[""]["INLATE"] = "INLATE";
	$fieldToolTipsuserinfo[""]["INLATE"] = "";
	$placeHoldersuserinfo[""]["INLATE"] = "";
	$fieldLabelsuserinfo[""]["OUTEARLY"] = "OUTEARLY";
	$fieldToolTipsuserinfo[""]["OUTEARLY"] = "";
	$placeHoldersuserinfo[""]["OUTEARLY"] = "";
	$fieldLabelsuserinfo[""]["OVERTIME"] = "OVERTIME";
	$fieldToolTipsuserinfo[""]["OVERTIME"] = "";
	$placeHoldersuserinfo[""]["OVERTIME"] = "";
	$fieldLabelsuserinfo[""]["SEP"] = "SEP";
	$fieldToolTipsuserinfo[""]["SEP"] = "";
	$placeHoldersuserinfo[""]["SEP"] = "";
	$fieldLabelsuserinfo[""]["HOLIDAY"] = "HOLIDAY";
	$fieldToolTipsuserinfo[""]["HOLIDAY"] = "";
	$placeHoldersuserinfo[""]["HOLIDAY"] = "";
	$fieldLabelsuserinfo[""]["MINZU"] = "MINZU";
	$fieldToolTipsuserinfo[""]["MINZU"] = "";
	$placeHoldersuserinfo[""]["MINZU"] = "";
	$fieldLabelsuserinfo[""]["PASSWORD"] = "PASSWORD";
	$fieldToolTipsuserinfo[""]["PASSWORD"] = "";
	$placeHoldersuserinfo[""]["PASSWORD"] = "";
	$fieldLabelsuserinfo[""]["LUNCHDURATION"] = "LUNCHDURATION";
	$fieldToolTipsuserinfo[""]["LUNCHDURATION"] = "";
	$placeHoldersuserinfo[""]["LUNCHDURATION"] = "";
	$fieldLabelsuserinfo[""]["PHOTO"] = "PHOTO";
	$fieldToolTipsuserinfo[""]["PHOTO"] = "";
	$placeHoldersuserinfo[""]["PHOTO"] = "";
	$fieldLabelsuserinfo[""]["mverifypass"] = "Mverifypass";
	$fieldToolTipsuserinfo[""]["mverifypass"] = "";
	$placeHoldersuserinfo[""]["mverifypass"] = "";
	$fieldLabelsuserinfo[""]["Notes"] = "Notes";
	$fieldToolTipsuserinfo[""]["Notes"] = "";
	$placeHoldersuserinfo[""]["Notes"] = "";
	$fieldLabelsuserinfo[""]["privilege"] = "Privilege";
	$fieldToolTipsuserinfo[""]["privilege"] = "";
	$placeHoldersuserinfo[""]["privilege"] = "";
	$fieldLabelsuserinfo[""]["InheritDeptSch"] = "Inherit Dept Sch";
	$fieldToolTipsuserinfo[""]["InheritDeptSch"] = "";
	$placeHoldersuserinfo[""]["InheritDeptSch"] = "";
	$fieldLabelsuserinfo[""]["InheritDeptSchClass"] = "Inherit Dept Sch Class";
	$fieldToolTipsuserinfo[""]["InheritDeptSchClass"] = "";
	$placeHoldersuserinfo[""]["InheritDeptSchClass"] = "";
	$fieldLabelsuserinfo[""]["AutoSchPlan"] = "Auto Sch Plan";
	$fieldToolTipsuserinfo[""]["AutoSchPlan"] = "";
	$placeHoldersuserinfo[""]["AutoSchPlan"] = "";
	$fieldLabelsuserinfo[""]["MinAutoSchInterval"] = "Min Auto Sch Interval";
	$fieldToolTipsuserinfo[""]["MinAutoSchInterval"] = "";
	$placeHoldersuserinfo[""]["MinAutoSchInterval"] = "";
	$fieldLabelsuserinfo[""]["RegisterOT"] = "Register OT";
	$fieldToolTipsuserinfo[""]["RegisterOT"] = "";
	$placeHoldersuserinfo[""]["RegisterOT"] = "";
	$fieldLabelsuserinfo[""]["InheritDeptRule"] = "Inherit Dept Rule";
	$fieldToolTipsuserinfo[""]["InheritDeptRule"] = "";
	$placeHoldersuserinfo[""]["InheritDeptRule"] = "";
	$fieldLabelsuserinfo[""]["EMPRIVILEGE"] = "EMPRIVILEGE";
	$fieldToolTipsuserinfo[""]["EMPRIVILEGE"] = "";
	$placeHoldersuserinfo[""]["EMPRIVILEGE"] = "";
	$fieldLabelsuserinfo[""]["CardNo"] = "Card No";
	$fieldToolTipsuserinfo[""]["CardNo"] = "";
	$placeHoldersuserinfo[""]["CardNo"] = "";
	$fieldLabelsuserinfo[""]["FaceGroup"] = "Face Group";
	$fieldToolTipsuserinfo[""]["FaceGroup"] = "";
	$placeHoldersuserinfo[""]["FaceGroup"] = "";
	$fieldLabelsuserinfo[""]["AccGroup"] = "Acc Group";
	$fieldToolTipsuserinfo[""]["AccGroup"] = "";
	$placeHoldersuserinfo[""]["AccGroup"] = "";
	$fieldLabelsuserinfo[""]["UseAccGroupTZ"] = "Use Acc Group TZ";
	$fieldToolTipsuserinfo[""]["UseAccGroupTZ"] = "";
	$placeHoldersuserinfo[""]["UseAccGroupTZ"] = "";
	$fieldLabelsuserinfo[""]["VerifyCode"] = "Verify Code";
	$fieldToolTipsuserinfo[""]["VerifyCode"] = "";
	$placeHoldersuserinfo[""]["VerifyCode"] = "";
	$fieldLabelsuserinfo[""]["Expires"] = "Expires";
	$fieldToolTipsuserinfo[""]["Expires"] = "";
	$placeHoldersuserinfo[""]["Expires"] = "";
	$fieldLabelsuserinfo[""]["ValidCount"] = "Valid Count";
	$fieldToolTipsuserinfo[""]["ValidCount"] = "";
	$placeHoldersuserinfo[""]["ValidCount"] = "";
	$fieldLabelsuserinfo[""]["ValidTimeBegin"] = "Valid Time Begin";
	$fieldToolTipsuserinfo[""]["ValidTimeBegin"] = "";
	$placeHoldersuserinfo[""]["ValidTimeBegin"] = "";
	$fieldLabelsuserinfo[""]["ValidTimeEnd"] = "Valid Time End";
	$fieldToolTipsuserinfo[""]["ValidTimeEnd"] = "";
	$placeHoldersuserinfo[""]["ValidTimeEnd"] = "";
	$fieldLabelsuserinfo[""]["TimeZone1"] = "Time Zone1";
	$fieldToolTipsuserinfo[""]["TimeZone1"] = "";
	$placeHoldersuserinfo[""]["TimeZone1"] = "";
	$fieldLabelsuserinfo[""]["TimeZone2"] = "Time Zone2";
	$fieldToolTipsuserinfo[""]["TimeZone2"] = "";
	$placeHoldersuserinfo[""]["TimeZone2"] = "";
	$fieldLabelsuserinfo[""]["TimeZone3"] = "Time Zone3";
	$fieldToolTipsuserinfo[""]["TimeZone3"] = "";
	$placeHoldersuserinfo[""]["TimeZone3"] = "";
	if (count($fieldToolTipsuserinfo[""]))
		$tdatauserinfo[".isUseToolTips"] = true;
}


	$tdatauserinfo[".NCSearch"] = true;



$tdatauserinfo[".shortTableName"] = "userinfo";
$tdatauserinfo[".nSecOptions"] = 0;
$tdatauserinfo[".recsPerRowPrint"] = 1;
$tdatauserinfo[".mainTableOwnerID"] = "";
$tdatauserinfo[".moveNext"] = 1;
$tdatauserinfo[".entityType"] = 0;

$tdatauserinfo[".strOriginalTableName"] = "userinfo";

	



$tdatauserinfo[".showAddInPopup"] = false;

$tdatauserinfo[".showEditInPopup"] = false;

$tdatauserinfo[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatauserinfo[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatauserinfo[".fieldsForRegister"] = array();

$tdatauserinfo[".listAjax"] = false;

	$tdatauserinfo[".audit"] = false;

	$tdatauserinfo[".locking"] = false;

$tdatauserinfo[".edit"] = true;
$tdatauserinfo[".afterEditAction"] = 0;
$tdatauserinfo[".closePopupAfterEdit"] = 1;
$tdatauserinfo[".afterEditActionDetTable"] = "";


$tdatauserinfo[".list"] = true;

$tdatauserinfo[".inlineEdit"] = true;


$tdatauserinfo[".reorderRecordsByHeader"] = true;


$tdatauserinfo[".exportFormatting"] = 2;
$tdatauserinfo[".exportDelimiter"] = ",";
		
$tdatauserinfo[".view"] = true;


$tdatauserinfo[".exportTo"] = true;

$tdatauserinfo[".printFriendly"] = true;

$tdatauserinfo[".delete"] = true;

$tdatauserinfo[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatauserinfo[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatauserinfo[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatauserinfo[".searchSaving"] = false;
//

$tdatauserinfo[".showSearchPanel"] = true;
		$tdatauserinfo[".flexibleSearch"] = true;

$tdatauserinfo[".isUseAjaxSuggest"] = true;

$tdatauserinfo[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																							

$tdatauserinfo[".ajaxCodeSnippetAdded"] = false;

$tdatauserinfo[".buttonsAdded"] = false;

$tdatauserinfo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatauserinfo[".isUseTimeForSearch"] = false;





$tdatauserinfo[".allSearchFields"] = array();
$tdatauserinfo[".filterFields"] = array();
$tdatauserinfo[".requiredSearchFields"] = array();

$tdatauserinfo[".allSearchFields"][] = "USERID";
	$tdatauserinfo[".allSearchFields"][] = "Badgenumber";
	$tdatauserinfo[".allSearchFields"][] = "SSN";
	$tdatauserinfo[".allSearchFields"][] = "Name";
	$tdatauserinfo[".allSearchFields"][] = "Gender";
	$tdatauserinfo[".allSearchFields"][] = "TITLE";
	$tdatauserinfo[".allSearchFields"][] = "PAGER";
	$tdatauserinfo[".allSearchFields"][] = "BIRTHDAY";
	$tdatauserinfo[".allSearchFields"][] = "HIREDDAY";
	$tdatauserinfo[".allSearchFields"][] = "street";
	$tdatauserinfo[".allSearchFields"][] = "CITY";
	$tdatauserinfo[".allSearchFields"][] = "STATE";
	$tdatauserinfo[".allSearchFields"][] = "ZIP";
	$tdatauserinfo[".allSearchFields"][] = "OPHONE";
	$tdatauserinfo[".allSearchFields"][] = "FPHONE";
	$tdatauserinfo[".allSearchFields"][] = "VERIFICATIONMETHOD";
	$tdatauserinfo[".allSearchFields"][] = "DEFAULTDEPTID";
	$tdatauserinfo[".allSearchFields"][] = "SECURITYFLAGS";
	$tdatauserinfo[".allSearchFields"][] = "ATT";
	$tdatauserinfo[".allSearchFields"][] = "INLATE";
	$tdatauserinfo[".allSearchFields"][] = "OUTEARLY";
	$tdatauserinfo[".allSearchFields"][] = "OVERTIME";
	$tdatauserinfo[".allSearchFields"][] = "SEP";
	$tdatauserinfo[".allSearchFields"][] = "HOLIDAY";
	$tdatauserinfo[".allSearchFields"][] = "MINZU";
	$tdatauserinfo[".allSearchFields"][] = "PASSWORD";
	$tdatauserinfo[".allSearchFields"][] = "LUNCHDURATION";
	$tdatauserinfo[".allSearchFields"][] = "mverifypass";
	$tdatauserinfo[".allSearchFields"][] = "privilege";
	$tdatauserinfo[".allSearchFields"][] = "InheritDeptSch";
	$tdatauserinfo[".allSearchFields"][] = "InheritDeptSchClass";
	$tdatauserinfo[".allSearchFields"][] = "AutoSchPlan";
	$tdatauserinfo[".allSearchFields"][] = "MinAutoSchInterval";
	$tdatauserinfo[".allSearchFields"][] = "RegisterOT";
	$tdatauserinfo[".allSearchFields"][] = "InheritDeptRule";
	$tdatauserinfo[".allSearchFields"][] = "EMPRIVILEGE";
	$tdatauserinfo[".allSearchFields"][] = "CardNo";
	$tdatauserinfo[".allSearchFields"][] = "FaceGroup";
	$tdatauserinfo[".allSearchFields"][] = "AccGroup";
	$tdatauserinfo[".allSearchFields"][] = "UseAccGroupTZ";
	$tdatauserinfo[".allSearchFields"][] = "VerifyCode";
	$tdatauserinfo[".allSearchFields"][] = "Expires";
	$tdatauserinfo[".allSearchFields"][] = "ValidCount";
	$tdatauserinfo[".allSearchFields"][] = "ValidTimeBegin";
	$tdatauserinfo[".allSearchFields"][] = "ValidTimeEnd";
	$tdatauserinfo[".allSearchFields"][] = "TimeZone1";
	$tdatauserinfo[".allSearchFields"][] = "TimeZone2";
	$tdatauserinfo[".allSearchFields"][] = "TimeZone3";
	

$tdatauserinfo[".googleLikeFields"] = array();
$tdatauserinfo[".googleLikeFields"][] = "USERID";
$tdatauserinfo[".googleLikeFields"][] = "Badgenumber";
$tdatauserinfo[".googleLikeFields"][] = "SSN";
$tdatauserinfo[".googleLikeFields"][] = "Name";
$tdatauserinfo[".googleLikeFields"][] = "Gender";
$tdatauserinfo[".googleLikeFields"][] = "TITLE";
$tdatauserinfo[".googleLikeFields"][] = "PAGER";
$tdatauserinfo[".googleLikeFields"][] = "BIRTHDAY";
$tdatauserinfo[".googleLikeFields"][] = "HIREDDAY";
$tdatauserinfo[".googleLikeFields"][] = "street";
$tdatauserinfo[".googleLikeFields"][] = "CITY";
$tdatauserinfo[".googleLikeFields"][] = "STATE";
$tdatauserinfo[".googleLikeFields"][] = "ZIP";
$tdatauserinfo[".googleLikeFields"][] = "OPHONE";
$tdatauserinfo[".googleLikeFields"][] = "FPHONE";
$tdatauserinfo[".googleLikeFields"][] = "VERIFICATIONMETHOD";
$tdatauserinfo[".googleLikeFields"][] = "DEFAULTDEPTID";
$tdatauserinfo[".googleLikeFields"][] = "SECURITYFLAGS";
$tdatauserinfo[".googleLikeFields"][] = "ATT";
$tdatauserinfo[".googleLikeFields"][] = "INLATE";
$tdatauserinfo[".googleLikeFields"][] = "OUTEARLY";
$tdatauserinfo[".googleLikeFields"][] = "OVERTIME";
$tdatauserinfo[".googleLikeFields"][] = "SEP";
$tdatauserinfo[".googleLikeFields"][] = "HOLIDAY";
$tdatauserinfo[".googleLikeFields"][] = "MINZU";
$tdatauserinfo[".googleLikeFields"][] = "PASSWORD";
$tdatauserinfo[".googleLikeFields"][] = "LUNCHDURATION";
$tdatauserinfo[".googleLikeFields"][] = "mverifypass";
$tdatauserinfo[".googleLikeFields"][] = "privilege";
$tdatauserinfo[".googleLikeFields"][] = "InheritDeptSch";
$tdatauserinfo[".googleLikeFields"][] = "InheritDeptSchClass";
$tdatauserinfo[".googleLikeFields"][] = "AutoSchPlan";
$tdatauserinfo[".googleLikeFields"][] = "MinAutoSchInterval";
$tdatauserinfo[".googleLikeFields"][] = "RegisterOT";
$tdatauserinfo[".googleLikeFields"][] = "InheritDeptRule";
$tdatauserinfo[".googleLikeFields"][] = "EMPRIVILEGE";
$tdatauserinfo[".googleLikeFields"][] = "CardNo";
$tdatauserinfo[".googleLikeFields"][] = "FaceGroup";
$tdatauserinfo[".googleLikeFields"][] = "AccGroup";
$tdatauserinfo[".googleLikeFields"][] = "UseAccGroupTZ";
$tdatauserinfo[".googleLikeFields"][] = "VerifyCode";
$tdatauserinfo[".googleLikeFields"][] = "Expires";
$tdatauserinfo[".googleLikeFields"][] = "ValidCount";
$tdatauserinfo[".googleLikeFields"][] = "ValidTimeBegin";
$tdatauserinfo[".googleLikeFields"][] = "ValidTimeEnd";
$tdatauserinfo[".googleLikeFields"][] = "TimeZone1";
$tdatauserinfo[".googleLikeFields"][] = "TimeZone2";
$tdatauserinfo[".googleLikeFields"][] = "TimeZone3";


$tdatauserinfo[".advSearchFields"] = array();
$tdatauserinfo[".advSearchFields"][] = "USERID";
$tdatauserinfo[".advSearchFields"][] = "Badgenumber";
$tdatauserinfo[".advSearchFields"][] = "SSN";
$tdatauserinfo[".advSearchFields"][] = "Name";
$tdatauserinfo[".advSearchFields"][] = "Gender";
$tdatauserinfo[".advSearchFields"][] = "TITLE";
$tdatauserinfo[".advSearchFields"][] = "PAGER";
$tdatauserinfo[".advSearchFields"][] = "BIRTHDAY";
$tdatauserinfo[".advSearchFields"][] = "HIREDDAY";
$tdatauserinfo[".advSearchFields"][] = "street";
$tdatauserinfo[".advSearchFields"][] = "CITY";
$tdatauserinfo[".advSearchFields"][] = "STATE";
$tdatauserinfo[".advSearchFields"][] = "ZIP";
$tdatauserinfo[".advSearchFields"][] = "OPHONE";
$tdatauserinfo[".advSearchFields"][] = "FPHONE";
$tdatauserinfo[".advSearchFields"][] = "VERIFICATIONMETHOD";
$tdatauserinfo[".advSearchFields"][] = "DEFAULTDEPTID";
$tdatauserinfo[".advSearchFields"][] = "SECURITYFLAGS";
$tdatauserinfo[".advSearchFields"][] = "ATT";
$tdatauserinfo[".advSearchFields"][] = "INLATE";
$tdatauserinfo[".advSearchFields"][] = "OUTEARLY";
$tdatauserinfo[".advSearchFields"][] = "OVERTIME";
$tdatauserinfo[".advSearchFields"][] = "SEP";
$tdatauserinfo[".advSearchFields"][] = "HOLIDAY";
$tdatauserinfo[".advSearchFields"][] = "MINZU";
$tdatauserinfo[".advSearchFields"][] = "PASSWORD";
$tdatauserinfo[".advSearchFields"][] = "LUNCHDURATION";
$tdatauserinfo[".advSearchFields"][] = "mverifypass";
$tdatauserinfo[".advSearchFields"][] = "privilege";
$tdatauserinfo[".advSearchFields"][] = "InheritDeptSch";
$tdatauserinfo[".advSearchFields"][] = "InheritDeptSchClass";
$tdatauserinfo[".advSearchFields"][] = "AutoSchPlan";
$tdatauserinfo[".advSearchFields"][] = "MinAutoSchInterval";
$tdatauserinfo[".advSearchFields"][] = "RegisterOT";
$tdatauserinfo[".advSearchFields"][] = "InheritDeptRule";
$tdatauserinfo[".advSearchFields"][] = "EMPRIVILEGE";
$tdatauserinfo[".advSearchFields"][] = "CardNo";
$tdatauserinfo[".advSearchFields"][] = "FaceGroup";
$tdatauserinfo[".advSearchFields"][] = "AccGroup";
$tdatauserinfo[".advSearchFields"][] = "UseAccGroupTZ";
$tdatauserinfo[".advSearchFields"][] = "VerifyCode";
$tdatauserinfo[".advSearchFields"][] = "Expires";
$tdatauserinfo[".advSearchFields"][] = "ValidCount";
$tdatauserinfo[".advSearchFields"][] = "ValidTimeBegin";
$tdatauserinfo[".advSearchFields"][] = "ValidTimeEnd";
$tdatauserinfo[".advSearchFields"][] = "TimeZone1";
$tdatauserinfo[".advSearchFields"][] = "TimeZone2";
$tdatauserinfo[".advSearchFields"][] = "TimeZone3";

$tdatauserinfo[".tableType"] = "list";

$tdatauserinfo[".printerPageOrientation"] = 0;
$tdatauserinfo[".nPrinterPageScale"] = 100;

$tdatauserinfo[".nPrinterSplitRecords"] = 40;

$tdatauserinfo[".nPrinterPDFSplitRecords"] = 40;



$tdatauserinfo[".geocodingEnabled"] = false;





$tdatauserinfo[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatauserinfo[".pageSize"] = 20;

$tdatauserinfo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatauserinfo[".strOrderBy"] = $tstrOrderBy;

$tdatauserinfo[".orderindexes"] = array();

$tdatauserinfo[".sqlHead"] = "SELECT USERID,  	Badgenumber,  	SSN,  	Name,  	Gender,  	TITLE,  	PAGER,  	BIRTHDAY,  	HIREDDAY,  	street,  	CITY,  	`STATE`,  	ZIP,  	OPHONE,  	FPHONE,  	VERIFICATIONMETHOD,  	DEFAULTDEPTID,  	SECURITYFLAGS,  	ATT,  	INLATE,  	OUTEARLY,  	OVERTIME,  	SEP,  	HOLIDAY,  	MINZU,  	PASSWORD,  	LUNCHDURATION,  	PHOTO,  	mverifypass,  	Notes,  	privilege,  	InheritDeptSch,  	InheritDeptSchClass,  	AutoSchPlan,  	MinAutoSchInterval,  	RegisterOT,  	InheritDeptRule,  	EMPRIVILEGE,  	CardNo,  	FaceGroup,  	AccGroup,  	UseAccGroupTZ,  	VerifyCode,  	Expires,  	ValidCount,  	ValidTimeBegin,  	ValidTimeEnd,  	TimeZone1,  	TimeZone2,  	TimeZone3";
$tdatauserinfo[".sqlFrom"] = "FROM userinfo";
$tdatauserinfo[".sqlWhereExpr"] = "";
$tdatauserinfo[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatauserinfo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatauserinfo[".arrGroupsPerPage"] = $arrGPP;

$tdatauserinfo[".highlightSearchResults"] = true;

$tableKeysuserinfo = array();
$tableKeysuserinfo[] = "Badgenumber";
$tdatauserinfo[".Keys"] = $tableKeysuserinfo;

$tdatauserinfo[".listFields"] = array();
$tdatauserinfo[".listFields"][] = "USERID";
$tdatauserinfo[".listFields"][] = "Badgenumber";
$tdatauserinfo[".listFields"][] = "SSN";
$tdatauserinfo[".listFields"][] = "Name";
$tdatauserinfo[".listFields"][] = "Gender";
$tdatauserinfo[".listFields"][] = "TITLE";
$tdatauserinfo[".listFields"][] = "PAGER";
$tdatauserinfo[".listFields"][] = "BIRTHDAY";
$tdatauserinfo[".listFields"][] = "HIREDDAY";
$tdatauserinfo[".listFields"][] = "street";
$tdatauserinfo[".listFields"][] = "CITY";
$tdatauserinfo[".listFields"][] = "STATE";
$tdatauserinfo[".listFields"][] = "ZIP";
$tdatauserinfo[".listFields"][] = "OPHONE";
$tdatauserinfo[".listFields"][] = "FPHONE";
$tdatauserinfo[".listFields"][] = "VERIFICATIONMETHOD";
$tdatauserinfo[".listFields"][] = "DEFAULTDEPTID";
$tdatauserinfo[".listFields"][] = "SECURITYFLAGS";
$tdatauserinfo[".listFields"][] = "ATT";
$tdatauserinfo[".listFields"][] = "INLATE";
$tdatauserinfo[".listFields"][] = "OUTEARLY";
$tdatauserinfo[".listFields"][] = "OVERTIME";
$tdatauserinfo[".listFields"][] = "SEP";
$tdatauserinfo[".listFields"][] = "HOLIDAY";
$tdatauserinfo[".listFields"][] = "MINZU";
$tdatauserinfo[".listFields"][] = "PASSWORD";
$tdatauserinfo[".listFields"][] = "LUNCHDURATION";
$tdatauserinfo[".listFields"][] = "PHOTO";
$tdatauserinfo[".listFields"][] = "mverifypass";
$tdatauserinfo[".listFields"][] = "Notes";
$tdatauserinfo[".listFields"][] = "privilege";
$tdatauserinfo[".listFields"][] = "InheritDeptSch";
$tdatauserinfo[".listFields"][] = "InheritDeptSchClass";
$tdatauserinfo[".listFields"][] = "AutoSchPlan";
$tdatauserinfo[".listFields"][] = "MinAutoSchInterval";
$tdatauserinfo[".listFields"][] = "RegisterOT";
$tdatauserinfo[".listFields"][] = "InheritDeptRule";
$tdatauserinfo[".listFields"][] = "EMPRIVILEGE";
$tdatauserinfo[".listFields"][] = "CardNo";
$tdatauserinfo[".listFields"][] = "FaceGroup";
$tdatauserinfo[".listFields"][] = "AccGroup";
$tdatauserinfo[".listFields"][] = "UseAccGroupTZ";
$tdatauserinfo[".listFields"][] = "VerifyCode";
$tdatauserinfo[".listFields"][] = "Expires";
$tdatauserinfo[".listFields"][] = "ValidCount";
$tdatauserinfo[".listFields"][] = "ValidTimeBegin";
$tdatauserinfo[".listFields"][] = "ValidTimeEnd";
$tdatauserinfo[".listFields"][] = "TimeZone1";
$tdatauserinfo[".listFields"][] = "TimeZone2";
$tdatauserinfo[".listFields"][] = "TimeZone3";

$tdatauserinfo[".hideMobileList"] = array();


$tdatauserinfo[".viewFields"] = array();
$tdatauserinfo[".viewFields"][] = "USERID";
$tdatauserinfo[".viewFields"][] = "Badgenumber";
$tdatauserinfo[".viewFields"][] = "SSN";
$tdatauserinfo[".viewFields"][] = "Name";
$tdatauserinfo[".viewFields"][] = "Gender";
$tdatauserinfo[".viewFields"][] = "TITLE";
$tdatauserinfo[".viewFields"][] = "PAGER";
$tdatauserinfo[".viewFields"][] = "BIRTHDAY";
$tdatauserinfo[".viewFields"][] = "HIREDDAY";
$tdatauserinfo[".viewFields"][] = "street";
$tdatauserinfo[".viewFields"][] = "CITY";
$tdatauserinfo[".viewFields"][] = "STATE";
$tdatauserinfo[".viewFields"][] = "ZIP";
$tdatauserinfo[".viewFields"][] = "OPHONE";
$tdatauserinfo[".viewFields"][] = "FPHONE";
$tdatauserinfo[".viewFields"][] = "VERIFICATIONMETHOD";
$tdatauserinfo[".viewFields"][] = "DEFAULTDEPTID";
$tdatauserinfo[".viewFields"][] = "SECURITYFLAGS";
$tdatauserinfo[".viewFields"][] = "ATT";
$tdatauserinfo[".viewFields"][] = "INLATE";
$tdatauserinfo[".viewFields"][] = "OUTEARLY";
$tdatauserinfo[".viewFields"][] = "OVERTIME";
$tdatauserinfo[".viewFields"][] = "SEP";
$tdatauserinfo[".viewFields"][] = "HOLIDAY";
$tdatauserinfo[".viewFields"][] = "MINZU";
$tdatauserinfo[".viewFields"][] = "PASSWORD";
$tdatauserinfo[".viewFields"][] = "LUNCHDURATION";
$tdatauserinfo[".viewFields"][] = "PHOTO";
$tdatauserinfo[".viewFields"][] = "mverifypass";
$tdatauserinfo[".viewFields"][] = "Notes";
$tdatauserinfo[".viewFields"][] = "privilege";
$tdatauserinfo[".viewFields"][] = "InheritDeptSch";
$tdatauserinfo[".viewFields"][] = "InheritDeptSchClass";
$tdatauserinfo[".viewFields"][] = "AutoSchPlan";
$tdatauserinfo[".viewFields"][] = "MinAutoSchInterval";
$tdatauserinfo[".viewFields"][] = "RegisterOT";
$tdatauserinfo[".viewFields"][] = "InheritDeptRule";
$tdatauserinfo[".viewFields"][] = "EMPRIVILEGE";
$tdatauserinfo[".viewFields"][] = "CardNo";
$tdatauserinfo[".viewFields"][] = "FaceGroup";
$tdatauserinfo[".viewFields"][] = "AccGroup";
$tdatauserinfo[".viewFields"][] = "UseAccGroupTZ";
$tdatauserinfo[".viewFields"][] = "VerifyCode";
$tdatauserinfo[".viewFields"][] = "Expires";
$tdatauserinfo[".viewFields"][] = "ValidCount";
$tdatauserinfo[".viewFields"][] = "ValidTimeBegin";
$tdatauserinfo[".viewFields"][] = "ValidTimeEnd";
$tdatauserinfo[".viewFields"][] = "TimeZone1";
$tdatauserinfo[".viewFields"][] = "TimeZone2";
$tdatauserinfo[".viewFields"][] = "TimeZone3";

$tdatauserinfo[".addFields"] = array();
$tdatauserinfo[".addFields"][] = "USERID";
$tdatauserinfo[".addFields"][] = "Badgenumber";
$tdatauserinfo[".addFields"][] = "SSN";
$tdatauserinfo[".addFields"][] = "Name";
$tdatauserinfo[".addFields"][] = "Gender";
$tdatauserinfo[".addFields"][] = "TITLE";
$tdatauserinfo[".addFields"][] = "PAGER";
$tdatauserinfo[".addFields"][] = "BIRTHDAY";
$tdatauserinfo[".addFields"][] = "HIREDDAY";
$tdatauserinfo[".addFields"][] = "street";
$tdatauserinfo[".addFields"][] = "CITY";
$tdatauserinfo[".addFields"][] = "STATE";
$tdatauserinfo[".addFields"][] = "ZIP";
$tdatauserinfo[".addFields"][] = "OPHONE";
$tdatauserinfo[".addFields"][] = "FPHONE";
$tdatauserinfo[".addFields"][] = "VERIFICATIONMETHOD";
$tdatauserinfo[".addFields"][] = "DEFAULTDEPTID";
$tdatauserinfo[".addFields"][] = "SECURITYFLAGS";
$tdatauserinfo[".addFields"][] = "ATT";
$tdatauserinfo[".addFields"][] = "INLATE";
$tdatauserinfo[".addFields"][] = "OUTEARLY";
$tdatauserinfo[".addFields"][] = "OVERTIME";
$tdatauserinfo[".addFields"][] = "SEP";
$tdatauserinfo[".addFields"][] = "HOLIDAY";
$tdatauserinfo[".addFields"][] = "MINZU";
$tdatauserinfo[".addFields"][] = "PASSWORD";
$tdatauserinfo[".addFields"][] = "LUNCHDURATION";
$tdatauserinfo[".addFields"][] = "PHOTO";
$tdatauserinfo[".addFields"][] = "mverifypass";
$tdatauserinfo[".addFields"][] = "Notes";
$tdatauserinfo[".addFields"][] = "privilege";
$tdatauserinfo[".addFields"][] = "InheritDeptSch";
$tdatauserinfo[".addFields"][] = "InheritDeptSchClass";
$tdatauserinfo[".addFields"][] = "AutoSchPlan";
$tdatauserinfo[".addFields"][] = "MinAutoSchInterval";
$tdatauserinfo[".addFields"][] = "RegisterOT";
$tdatauserinfo[".addFields"][] = "InheritDeptRule";
$tdatauserinfo[".addFields"][] = "EMPRIVILEGE";
$tdatauserinfo[".addFields"][] = "CardNo";
$tdatauserinfo[".addFields"][] = "FaceGroup";
$tdatauserinfo[".addFields"][] = "AccGroup";
$tdatauserinfo[".addFields"][] = "UseAccGroupTZ";
$tdatauserinfo[".addFields"][] = "VerifyCode";
$tdatauserinfo[".addFields"][] = "Expires";
$tdatauserinfo[".addFields"][] = "ValidCount";
$tdatauserinfo[".addFields"][] = "ValidTimeBegin";
$tdatauserinfo[".addFields"][] = "ValidTimeEnd";
$tdatauserinfo[".addFields"][] = "TimeZone1";
$tdatauserinfo[".addFields"][] = "TimeZone2";
$tdatauserinfo[".addFields"][] = "TimeZone3";

$tdatauserinfo[".masterListFields"] = array();
$tdatauserinfo[".masterListFields"][] = "USERID";
$tdatauserinfo[".masterListFields"][] = "Badgenumber";
$tdatauserinfo[".masterListFields"][] = "SSN";
$tdatauserinfo[".masterListFields"][] = "Name";
$tdatauserinfo[".masterListFields"][] = "Gender";
$tdatauserinfo[".masterListFields"][] = "TITLE";
$tdatauserinfo[".masterListFields"][] = "PAGER";
$tdatauserinfo[".masterListFields"][] = "BIRTHDAY";
$tdatauserinfo[".masterListFields"][] = "HIREDDAY";
$tdatauserinfo[".masterListFields"][] = "street";
$tdatauserinfo[".masterListFields"][] = "CITY";
$tdatauserinfo[".masterListFields"][] = "STATE";
$tdatauserinfo[".masterListFields"][] = "ZIP";
$tdatauserinfo[".masterListFields"][] = "OPHONE";
$tdatauserinfo[".masterListFields"][] = "FPHONE";
$tdatauserinfo[".masterListFields"][] = "VERIFICATIONMETHOD";
$tdatauserinfo[".masterListFields"][] = "DEFAULTDEPTID";
$tdatauserinfo[".masterListFields"][] = "SECURITYFLAGS";
$tdatauserinfo[".masterListFields"][] = "ATT";
$tdatauserinfo[".masterListFields"][] = "INLATE";
$tdatauserinfo[".masterListFields"][] = "OUTEARLY";
$tdatauserinfo[".masterListFields"][] = "OVERTIME";
$tdatauserinfo[".masterListFields"][] = "SEP";
$tdatauserinfo[".masterListFields"][] = "HOLIDAY";
$tdatauserinfo[".masterListFields"][] = "MINZU";
$tdatauserinfo[".masterListFields"][] = "PASSWORD";
$tdatauserinfo[".masterListFields"][] = "LUNCHDURATION";
$tdatauserinfo[".masterListFields"][] = "PHOTO";
$tdatauserinfo[".masterListFields"][] = "mverifypass";
$tdatauserinfo[".masterListFields"][] = "Notes";
$tdatauserinfo[".masterListFields"][] = "privilege";
$tdatauserinfo[".masterListFields"][] = "InheritDeptSch";
$tdatauserinfo[".masterListFields"][] = "InheritDeptSchClass";
$tdatauserinfo[".masterListFields"][] = "AutoSchPlan";
$tdatauserinfo[".masterListFields"][] = "MinAutoSchInterval";
$tdatauserinfo[".masterListFields"][] = "RegisterOT";
$tdatauserinfo[".masterListFields"][] = "InheritDeptRule";
$tdatauserinfo[".masterListFields"][] = "EMPRIVILEGE";
$tdatauserinfo[".masterListFields"][] = "CardNo";
$tdatauserinfo[".masterListFields"][] = "FaceGroup";
$tdatauserinfo[".masterListFields"][] = "AccGroup";
$tdatauserinfo[".masterListFields"][] = "UseAccGroupTZ";
$tdatauserinfo[".masterListFields"][] = "VerifyCode";
$tdatauserinfo[".masterListFields"][] = "Expires";
$tdatauserinfo[".masterListFields"][] = "ValidCount";
$tdatauserinfo[".masterListFields"][] = "ValidTimeBegin";
$tdatauserinfo[".masterListFields"][] = "ValidTimeEnd";
$tdatauserinfo[".masterListFields"][] = "TimeZone1";
$tdatauserinfo[".masterListFields"][] = "TimeZone2";
$tdatauserinfo[".masterListFields"][] = "TimeZone3";

$tdatauserinfo[".inlineAddFields"] = array();
$tdatauserinfo[".inlineAddFields"][] = "USERID";
$tdatauserinfo[".inlineAddFields"][] = "Badgenumber";
$tdatauserinfo[".inlineAddFields"][] = "SSN";
$tdatauserinfo[".inlineAddFields"][] = "Name";
$tdatauserinfo[".inlineAddFields"][] = "Gender";
$tdatauserinfo[".inlineAddFields"][] = "TITLE";
$tdatauserinfo[".inlineAddFields"][] = "PAGER";
$tdatauserinfo[".inlineAddFields"][] = "BIRTHDAY";
$tdatauserinfo[".inlineAddFields"][] = "HIREDDAY";
$tdatauserinfo[".inlineAddFields"][] = "street";
$tdatauserinfo[".inlineAddFields"][] = "CITY";
$tdatauserinfo[".inlineAddFields"][] = "STATE";
$tdatauserinfo[".inlineAddFields"][] = "ZIP";
$tdatauserinfo[".inlineAddFields"][] = "OPHONE";
$tdatauserinfo[".inlineAddFields"][] = "FPHONE";
$tdatauserinfo[".inlineAddFields"][] = "VERIFICATIONMETHOD";
$tdatauserinfo[".inlineAddFields"][] = "DEFAULTDEPTID";
$tdatauserinfo[".inlineAddFields"][] = "SECURITYFLAGS";
$tdatauserinfo[".inlineAddFields"][] = "ATT";
$tdatauserinfo[".inlineAddFields"][] = "INLATE";
$tdatauserinfo[".inlineAddFields"][] = "OUTEARLY";
$tdatauserinfo[".inlineAddFields"][] = "OVERTIME";
$tdatauserinfo[".inlineAddFields"][] = "SEP";
$tdatauserinfo[".inlineAddFields"][] = "HOLIDAY";
$tdatauserinfo[".inlineAddFields"][] = "MINZU";
$tdatauserinfo[".inlineAddFields"][] = "PASSWORD";
$tdatauserinfo[".inlineAddFields"][] = "LUNCHDURATION";
$tdatauserinfo[".inlineAddFields"][] = "PHOTO";
$tdatauserinfo[".inlineAddFields"][] = "mverifypass";
$tdatauserinfo[".inlineAddFields"][] = "Notes";
$tdatauserinfo[".inlineAddFields"][] = "privilege";
$tdatauserinfo[".inlineAddFields"][] = "InheritDeptSch";
$tdatauserinfo[".inlineAddFields"][] = "InheritDeptSchClass";
$tdatauserinfo[".inlineAddFields"][] = "AutoSchPlan";
$tdatauserinfo[".inlineAddFields"][] = "MinAutoSchInterval";
$tdatauserinfo[".inlineAddFields"][] = "RegisterOT";
$tdatauserinfo[".inlineAddFields"][] = "InheritDeptRule";
$tdatauserinfo[".inlineAddFields"][] = "EMPRIVILEGE";
$tdatauserinfo[".inlineAddFields"][] = "CardNo";
$tdatauserinfo[".inlineAddFields"][] = "FaceGroup";
$tdatauserinfo[".inlineAddFields"][] = "AccGroup";
$tdatauserinfo[".inlineAddFields"][] = "UseAccGroupTZ";
$tdatauserinfo[".inlineAddFields"][] = "VerifyCode";
$tdatauserinfo[".inlineAddFields"][] = "Expires";
$tdatauserinfo[".inlineAddFields"][] = "ValidCount";
$tdatauserinfo[".inlineAddFields"][] = "ValidTimeBegin";
$tdatauserinfo[".inlineAddFields"][] = "ValidTimeEnd";
$tdatauserinfo[".inlineAddFields"][] = "TimeZone1";
$tdatauserinfo[".inlineAddFields"][] = "TimeZone2";
$tdatauserinfo[".inlineAddFields"][] = "TimeZone3";

$tdatauserinfo[".editFields"] = array();
$tdatauserinfo[".editFields"][] = "USERID";
$tdatauserinfo[".editFields"][] = "Badgenumber";
$tdatauserinfo[".editFields"][] = "SSN";
$tdatauserinfo[".editFields"][] = "Name";
$tdatauserinfo[".editFields"][] = "Gender";
$tdatauserinfo[".editFields"][] = "TITLE";
$tdatauserinfo[".editFields"][] = "PAGER";
$tdatauserinfo[".editFields"][] = "BIRTHDAY";
$tdatauserinfo[".editFields"][] = "HIREDDAY";
$tdatauserinfo[".editFields"][] = "street";
$tdatauserinfo[".editFields"][] = "CITY";
$tdatauserinfo[".editFields"][] = "STATE";
$tdatauserinfo[".editFields"][] = "ZIP";
$tdatauserinfo[".editFields"][] = "OPHONE";
$tdatauserinfo[".editFields"][] = "FPHONE";
$tdatauserinfo[".editFields"][] = "VERIFICATIONMETHOD";
$tdatauserinfo[".editFields"][] = "DEFAULTDEPTID";
$tdatauserinfo[".editFields"][] = "SECURITYFLAGS";
$tdatauserinfo[".editFields"][] = "ATT";
$tdatauserinfo[".editFields"][] = "INLATE";
$tdatauserinfo[".editFields"][] = "OUTEARLY";
$tdatauserinfo[".editFields"][] = "OVERTIME";
$tdatauserinfo[".editFields"][] = "SEP";
$tdatauserinfo[".editFields"][] = "HOLIDAY";
$tdatauserinfo[".editFields"][] = "MINZU";
$tdatauserinfo[".editFields"][] = "PASSWORD";
$tdatauserinfo[".editFields"][] = "LUNCHDURATION";
$tdatauserinfo[".editFields"][] = "PHOTO";
$tdatauserinfo[".editFields"][] = "mverifypass";
$tdatauserinfo[".editFields"][] = "Notes";
$tdatauserinfo[".editFields"][] = "privilege";
$tdatauserinfo[".editFields"][] = "InheritDeptSch";
$tdatauserinfo[".editFields"][] = "InheritDeptSchClass";
$tdatauserinfo[".editFields"][] = "AutoSchPlan";
$tdatauserinfo[".editFields"][] = "MinAutoSchInterval";
$tdatauserinfo[".editFields"][] = "RegisterOT";
$tdatauserinfo[".editFields"][] = "InheritDeptRule";
$tdatauserinfo[".editFields"][] = "EMPRIVILEGE";
$tdatauserinfo[".editFields"][] = "CardNo";
$tdatauserinfo[".editFields"][] = "FaceGroup";
$tdatauserinfo[".editFields"][] = "AccGroup";
$tdatauserinfo[".editFields"][] = "UseAccGroupTZ";
$tdatauserinfo[".editFields"][] = "VerifyCode";
$tdatauserinfo[".editFields"][] = "Expires";
$tdatauserinfo[".editFields"][] = "ValidCount";
$tdatauserinfo[".editFields"][] = "ValidTimeBegin";
$tdatauserinfo[".editFields"][] = "ValidTimeEnd";
$tdatauserinfo[".editFields"][] = "TimeZone1";
$tdatauserinfo[".editFields"][] = "TimeZone2";
$tdatauserinfo[".editFields"][] = "TimeZone3";

$tdatauserinfo[".inlineEditFields"] = array();
$tdatauserinfo[".inlineEditFields"][] = "USERID";
$tdatauserinfo[".inlineEditFields"][] = "Badgenumber";
$tdatauserinfo[".inlineEditFields"][] = "SSN";
$tdatauserinfo[".inlineEditFields"][] = "Name";
$tdatauserinfo[".inlineEditFields"][] = "Gender";
$tdatauserinfo[".inlineEditFields"][] = "TITLE";
$tdatauserinfo[".inlineEditFields"][] = "PAGER";
$tdatauserinfo[".inlineEditFields"][] = "BIRTHDAY";
$tdatauserinfo[".inlineEditFields"][] = "HIREDDAY";
$tdatauserinfo[".inlineEditFields"][] = "street";
$tdatauserinfo[".inlineEditFields"][] = "CITY";
$tdatauserinfo[".inlineEditFields"][] = "STATE";
$tdatauserinfo[".inlineEditFields"][] = "ZIP";
$tdatauserinfo[".inlineEditFields"][] = "OPHONE";
$tdatauserinfo[".inlineEditFields"][] = "FPHONE";
$tdatauserinfo[".inlineEditFields"][] = "VERIFICATIONMETHOD";
$tdatauserinfo[".inlineEditFields"][] = "DEFAULTDEPTID";
$tdatauserinfo[".inlineEditFields"][] = "SECURITYFLAGS";
$tdatauserinfo[".inlineEditFields"][] = "ATT";
$tdatauserinfo[".inlineEditFields"][] = "INLATE";
$tdatauserinfo[".inlineEditFields"][] = "OUTEARLY";
$tdatauserinfo[".inlineEditFields"][] = "OVERTIME";
$tdatauserinfo[".inlineEditFields"][] = "SEP";
$tdatauserinfo[".inlineEditFields"][] = "HOLIDAY";
$tdatauserinfo[".inlineEditFields"][] = "MINZU";
$tdatauserinfo[".inlineEditFields"][] = "PASSWORD";
$tdatauserinfo[".inlineEditFields"][] = "LUNCHDURATION";
$tdatauserinfo[".inlineEditFields"][] = "PHOTO";
$tdatauserinfo[".inlineEditFields"][] = "mverifypass";
$tdatauserinfo[".inlineEditFields"][] = "Notes";
$tdatauserinfo[".inlineEditFields"][] = "privilege";
$tdatauserinfo[".inlineEditFields"][] = "InheritDeptSch";
$tdatauserinfo[".inlineEditFields"][] = "InheritDeptSchClass";
$tdatauserinfo[".inlineEditFields"][] = "AutoSchPlan";
$tdatauserinfo[".inlineEditFields"][] = "MinAutoSchInterval";
$tdatauserinfo[".inlineEditFields"][] = "RegisterOT";
$tdatauserinfo[".inlineEditFields"][] = "InheritDeptRule";
$tdatauserinfo[".inlineEditFields"][] = "EMPRIVILEGE";
$tdatauserinfo[".inlineEditFields"][] = "CardNo";
$tdatauserinfo[".inlineEditFields"][] = "FaceGroup";
$tdatauserinfo[".inlineEditFields"][] = "AccGroup";
$tdatauserinfo[".inlineEditFields"][] = "UseAccGroupTZ";
$tdatauserinfo[".inlineEditFields"][] = "VerifyCode";
$tdatauserinfo[".inlineEditFields"][] = "Expires";
$tdatauserinfo[".inlineEditFields"][] = "ValidCount";
$tdatauserinfo[".inlineEditFields"][] = "ValidTimeBegin";
$tdatauserinfo[".inlineEditFields"][] = "ValidTimeEnd";
$tdatauserinfo[".inlineEditFields"][] = "TimeZone1";
$tdatauserinfo[".inlineEditFields"][] = "TimeZone2";
$tdatauserinfo[".inlineEditFields"][] = "TimeZone3";

$tdatauserinfo[".updateSelectedFields"] = array();
$tdatauserinfo[".updateSelectedFields"][] = "USERID";
$tdatauserinfo[".updateSelectedFields"][] = "Badgenumber";
$tdatauserinfo[".updateSelectedFields"][] = "SSN";
$tdatauserinfo[".updateSelectedFields"][] = "Name";
$tdatauserinfo[".updateSelectedFields"][] = "Gender";
$tdatauserinfo[".updateSelectedFields"][] = "TITLE";
$tdatauserinfo[".updateSelectedFields"][] = "PAGER";
$tdatauserinfo[".updateSelectedFields"][] = "BIRTHDAY";
$tdatauserinfo[".updateSelectedFields"][] = "HIREDDAY";
$tdatauserinfo[".updateSelectedFields"][] = "street";
$tdatauserinfo[".updateSelectedFields"][] = "CITY";
$tdatauserinfo[".updateSelectedFields"][] = "STATE";
$tdatauserinfo[".updateSelectedFields"][] = "ZIP";
$tdatauserinfo[".updateSelectedFields"][] = "OPHONE";
$tdatauserinfo[".updateSelectedFields"][] = "FPHONE";
$tdatauserinfo[".updateSelectedFields"][] = "VERIFICATIONMETHOD";
$tdatauserinfo[".updateSelectedFields"][] = "DEFAULTDEPTID";
$tdatauserinfo[".updateSelectedFields"][] = "SECURITYFLAGS";
$tdatauserinfo[".updateSelectedFields"][] = "ATT";
$tdatauserinfo[".updateSelectedFields"][] = "INLATE";
$tdatauserinfo[".updateSelectedFields"][] = "OUTEARLY";
$tdatauserinfo[".updateSelectedFields"][] = "OVERTIME";
$tdatauserinfo[".updateSelectedFields"][] = "SEP";
$tdatauserinfo[".updateSelectedFields"][] = "HOLIDAY";
$tdatauserinfo[".updateSelectedFields"][] = "MINZU";
$tdatauserinfo[".updateSelectedFields"][] = "PASSWORD";
$tdatauserinfo[".updateSelectedFields"][] = "LUNCHDURATION";
$tdatauserinfo[".updateSelectedFields"][] = "PHOTO";
$tdatauserinfo[".updateSelectedFields"][] = "mverifypass";
$tdatauserinfo[".updateSelectedFields"][] = "Notes";
$tdatauserinfo[".updateSelectedFields"][] = "privilege";
$tdatauserinfo[".updateSelectedFields"][] = "InheritDeptSch";
$tdatauserinfo[".updateSelectedFields"][] = "InheritDeptSchClass";
$tdatauserinfo[".updateSelectedFields"][] = "AutoSchPlan";
$tdatauserinfo[".updateSelectedFields"][] = "MinAutoSchInterval";
$tdatauserinfo[".updateSelectedFields"][] = "RegisterOT";
$tdatauserinfo[".updateSelectedFields"][] = "InheritDeptRule";
$tdatauserinfo[".updateSelectedFields"][] = "EMPRIVILEGE";
$tdatauserinfo[".updateSelectedFields"][] = "CardNo";
$tdatauserinfo[".updateSelectedFields"][] = "FaceGroup";
$tdatauserinfo[".updateSelectedFields"][] = "AccGroup";
$tdatauserinfo[".updateSelectedFields"][] = "UseAccGroupTZ";
$tdatauserinfo[".updateSelectedFields"][] = "VerifyCode";
$tdatauserinfo[".updateSelectedFields"][] = "Expires";
$tdatauserinfo[".updateSelectedFields"][] = "ValidCount";
$tdatauserinfo[".updateSelectedFields"][] = "ValidTimeBegin";
$tdatauserinfo[".updateSelectedFields"][] = "ValidTimeEnd";
$tdatauserinfo[".updateSelectedFields"][] = "TimeZone1";
$tdatauserinfo[".updateSelectedFields"][] = "TimeZone2";
$tdatauserinfo[".updateSelectedFields"][] = "TimeZone3";


$tdatauserinfo[".exportFields"] = array();
$tdatauserinfo[".exportFields"][] = "USERID";
$tdatauserinfo[".exportFields"][] = "Badgenumber";
$tdatauserinfo[".exportFields"][] = "SSN";
$tdatauserinfo[".exportFields"][] = "Name";
$tdatauserinfo[".exportFields"][] = "Gender";
$tdatauserinfo[".exportFields"][] = "TITLE";
$tdatauserinfo[".exportFields"][] = "PAGER";
$tdatauserinfo[".exportFields"][] = "BIRTHDAY";
$tdatauserinfo[".exportFields"][] = "HIREDDAY";
$tdatauserinfo[".exportFields"][] = "street";
$tdatauserinfo[".exportFields"][] = "CITY";
$tdatauserinfo[".exportFields"][] = "STATE";
$tdatauserinfo[".exportFields"][] = "ZIP";
$tdatauserinfo[".exportFields"][] = "OPHONE";
$tdatauserinfo[".exportFields"][] = "FPHONE";
$tdatauserinfo[".exportFields"][] = "VERIFICATIONMETHOD";
$tdatauserinfo[".exportFields"][] = "DEFAULTDEPTID";
$tdatauserinfo[".exportFields"][] = "SECURITYFLAGS";
$tdatauserinfo[".exportFields"][] = "ATT";
$tdatauserinfo[".exportFields"][] = "INLATE";
$tdatauserinfo[".exportFields"][] = "OUTEARLY";
$tdatauserinfo[".exportFields"][] = "OVERTIME";
$tdatauserinfo[".exportFields"][] = "SEP";
$tdatauserinfo[".exportFields"][] = "HOLIDAY";
$tdatauserinfo[".exportFields"][] = "MINZU";
$tdatauserinfo[".exportFields"][] = "PASSWORD";
$tdatauserinfo[".exportFields"][] = "LUNCHDURATION";
$tdatauserinfo[".exportFields"][] = "mverifypass";
$tdatauserinfo[".exportFields"][] = "privilege";
$tdatauserinfo[".exportFields"][] = "InheritDeptSch";
$tdatauserinfo[".exportFields"][] = "InheritDeptSchClass";
$tdatauserinfo[".exportFields"][] = "AutoSchPlan";
$tdatauserinfo[".exportFields"][] = "MinAutoSchInterval";
$tdatauserinfo[".exportFields"][] = "RegisterOT";
$tdatauserinfo[".exportFields"][] = "InheritDeptRule";
$tdatauserinfo[".exportFields"][] = "EMPRIVILEGE";
$tdatauserinfo[".exportFields"][] = "CardNo";
$tdatauserinfo[".exportFields"][] = "FaceGroup";
$tdatauserinfo[".exportFields"][] = "AccGroup";
$tdatauserinfo[".exportFields"][] = "UseAccGroupTZ";
$tdatauserinfo[".exportFields"][] = "VerifyCode";
$tdatauserinfo[".exportFields"][] = "Expires";
$tdatauserinfo[".exportFields"][] = "ValidCount";
$tdatauserinfo[".exportFields"][] = "ValidTimeBegin";
$tdatauserinfo[".exportFields"][] = "ValidTimeEnd";
$tdatauserinfo[".exportFields"][] = "TimeZone1";
$tdatauserinfo[".exportFields"][] = "TimeZone2";
$tdatauserinfo[".exportFields"][] = "TimeZone3";

$tdatauserinfo[".importFields"] = array();
$tdatauserinfo[".importFields"][] = "USERID";
$tdatauserinfo[".importFields"][] = "Badgenumber";
$tdatauserinfo[".importFields"][] = "SSN";
$tdatauserinfo[".importFields"][] = "Name";
$tdatauserinfo[".importFields"][] = "Gender";
$tdatauserinfo[".importFields"][] = "TITLE";
$tdatauserinfo[".importFields"][] = "PAGER";
$tdatauserinfo[".importFields"][] = "BIRTHDAY";
$tdatauserinfo[".importFields"][] = "HIREDDAY";
$tdatauserinfo[".importFields"][] = "street";
$tdatauserinfo[".importFields"][] = "CITY";
$tdatauserinfo[".importFields"][] = "STATE";
$tdatauserinfo[".importFields"][] = "ZIP";
$tdatauserinfo[".importFields"][] = "OPHONE";
$tdatauserinfo[".importFields"][] = "FPHONE";
$tdatauserinfo[".importFields"][] = "VERIFICATIONMETHOD";
$tdatauserinfo[".importFields"][] = "DEFAULTDEPTID";
$tdatauserinfo[".importFields"][] = "SECURITYFLAGS";
$tdatauserinfo[".importFields"][] = "ATT";
$tdatauserinfo[".importFields"][] = "INLATE";
$tdatauserinfo[".importFields"][] = "OUTEARLY";
$tdatauserinfo[".importFields"][] = "OVERTIME";
$tdatauserinfo[".importFields"][] = "SEP";
$tdatauserinfo[".importFields"][] = "HOLIDAY";
$tdatauserinfo[".importFields"][] = "MINZU";
$tdatauserinfo[".importFields"][] = "PASSWORD";
$tdatauserinfo[".importFields"][] = "LUNCHDURATION";
$tdatauserinfo[".importFields"][] = "mverifypass";
$tdatauserinfo[".importFields"][] = "privilege";
$tdatauserinfo[".importFields"][] = "InheritDeptSch";
$tdatauserinfo[".importFields"][] = "InheritDeptSchClass";
$tdatauserinfo[".importFields"][] = "AutoSchPlan";
$tdatauserinfo[".importFields"][] = "MinAutoSchInterval";
$tdatauserinfo[".importFields"][] = "RegisterOT";
$tdatauserinfo[".importFields"][] = "InheritDeptRule";
$tdatauserinfo[".importFields"][] = "EMPRIVILEGE";
$tdatauserinfo[".importFields"][] = "CardNo";
$tdatauserinfo[".importFields"][] = "FaceGroup";
$tdatauserinfo[".importFields"][] = "AccGroup";
$tdatauserinfo[".importFields"][] = "UseAccGroupTZ";
$tdatauserinfo[".importFields"][] = "VerifyCode";
$tdatauserinfo[".importFields"][] = "Expires";
$tdatauserinfo[".importFields"][] = "ValidCount";
$tdatauserinfo[".importFields"][] = "ValidTimeBegin";
$tdatauserinfo[".importFields"][] = "ValidTimeEnd";
$tdatauserinfo[".importFields"][] = "TimeZone1";
$tdatauserinfo[".importFields"][] = "TimeZone2";
$tdatauserinfo[".importFields"][] = "TimeZone3";

$tdatauserinfo[".printFields"] = array();
$tdatauserinfo[".printFields"][] = "USERID";
$tdatauserinfo[".printFields"][] = "Badgenumber";
$tdatauserinfo[".printFields"][] = "SSN";
$tdatauserinfo[".printFields"][] = "Name";
$tdatauserinfo[".printFields"][] = "Gender";
$tdatauserinfo[".printFields"][] = "TITLE";
$tdatauserinfo[".printFields"][] = "PAGER";
$tdatauserinfo[".printFields"][] = "BIRTHDAY";
$tdatauserinfo[".printFields"][] = "HIREDDAY";
$tdatauserinfo[".printFields"][] = "street";
$tdatauserinfo[".printFields"][] = "CITY";
$tdatauserinfo[".printFields"][] = "STATE";
$tdatauserinfo[".printFields"][] = "ZIP";
$tdatauserinfo[".printFields"][] = "OPHONE";
$tdatauserinfo[".printFields"][] = "FPHONE";
$tdatauserinfo[".printFields"][] = "VERIFICATIONMETHOD";
$tdatauserinfo[".printFields"][] = "DEFAULTDEPTID";
$tdatauserinfo[".printFields"][] = "SECURITYFLAGS";
$tdatauserinfo[".printFields"][] = "ATT";
$tdatauserinfo[".printFields"][] = "INLATE";
$tdatauserinfo[".printFields"][] = "OUTEARLY";
$tdatauserinfo[".printFields"][] = "OVERTIME";
$tdatauserinfo[".printFields"][] = "SEP";
$tdatauserinfo[".printFields"][] = "HOLIDAY";
$tdatauserinfo[".printFields"][] = "MINZU";
$tdatauserinfo[".printFields"][] = "PASSWORD";
$tdatauserinfo[".printFields"][] = "LUNCHDURATION";
$tdatauserinfo[".printFields"][] = "PHOTO";
$tdatauserinfo[".printFields"][] = "mverifypass";
$tdatauserinfo[".printFields"][] = "Notes";
$tdatauserinfo[".printFields"][] = "privilege";
$tdatauserinfo[".printFields"][] = "InheritDeptSch";
$tdatauserinfo[".printFields"][] = "InheritDeptSchClass";
$tdatauserinfo[".printFields"][] = "AutoSchPlan";
$tdatauserinfo[".printFields"][] = "MinAutoSchInterval";
$tdatauserinfo[".printFields"][] = "RegisterOT";
$tdatauserinfo[".printFields"][] = "InheritDeptRule";
$tdatauserinfo[".printFields"][] = "EMPRIVILEGE";
$tdatauserinfo[".printFields"][] = "CardNo";
$tdatauserinfo[".printFields"][] = "FaceGroup";
$tdatauserinfo[".printFields"][] = "AccGroup";
$tdatauserinfo[".printFields"][] = "UseAccGroupTZ";
$tdatauserinfo[".printFields"][] = "VerifyCode";
$tdatauserinfo[".printFields"][] = "Expires";
$tdatauserinfo[".printFields"][] = "ValidCount";
$tdatauserinfo[".printFields"][] = "ValidTimeBegin";
$tdatauserinfo[".printFields"][] = "ValidTimeEnd";
$tdatauserinfo[".printFields"][] = "TimeZone1";
$tdatauserinfo[".printFields"][] = "TimeZone2";
$tdatauserinfo[".printFields"][] = "TimeZone3";


//	USERID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "USERID";
	$fdata["GoodName"] = "USERID";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","USERID");
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

		$fdata["strField"] = "USERID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USERID";

	
	
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




	$tdatauserinfo["USERID"] = $fdata;
//	Badgenumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Badgenumber";
	$fdata["GoodName"] = "Badgenumber";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","Badgenumber");
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

		$fdata["strField"] = "Badgenumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Badgenumber";

	
	
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
			$edata["EditParams"].= " maxlength=24";

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




	$tdatauserinfo["Badgenumber"] = $fdata;
//	SSN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SSN";
	$fdata["GoodName"] = "SSN";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","SSN");
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

		$fdata["strField"] = "SSN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SSN";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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




	$tdatauserinfo["SSN"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","Name");
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

		$fdata["strField"] = "Name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Name";

	
	
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
			$edata["EditParams"].= " maxlength=40";

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




	$tdatauserinfo["Name"] = $fdata;
//	Gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Gender";
	$fdata["GoodName"] = "Gender";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","Gender");
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

		$fdata["strField"] = "Gender";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Gender";

	
	
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
			$edata["EditParams"].= " maxlength=8";

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




	$tdatauserinfo["Gender"] = $fdata;
//	TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TITLE";
	$fdata["GoodName"] = "TITLE";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","TITLE");
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

		$fdata["strField"] = "TITLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TITLE";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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




	$tdatauserinfo["TITLE"] = $fdata;
//	PAGER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PAGER";
	$fdata["GoodName"] = "PAGER";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","PAGER");
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

		$fdata["strField"] = "PAGER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAGER";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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




	$tdatauserinfo["PAGER"] = $fdata;
//	BIRTHDAY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "BIRTHDAY";
	$fdata["GoodName"] = "BIRTHDAY";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","BIRTHDAY");
	$fdata["FieldType"] = 135;

	
	
	
			
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

		$fdata["strField"] = "BIRTHDAY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BIRTHDAY";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatauserinfo["BIRTHDAY"] = $fdata;
//	HIREDDAY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "HIREDDAY";
	$fdata["GoodName"] = "HIREDDAY";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","HIREDDAY");
	$fdata["FieldType"] = 135;

	
	
	
			
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

		$fdata["strField"] = "HIREDDAY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HIREDDAY";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatauserinfo["HIREDDAY"] = $fdata;
//	street
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "street";
	$fdata["GoodName"] = "street";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","street");
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

		$fdata["strField"] = "street";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "street";

	
	
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




	$tdatauserinfo["street"] = $fdata;
//	CITY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "CITY";
	$fdata["GoodName"] = "CITY";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","CITY");
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

		$fdata["strField"] = "CITY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CITY";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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




	$tdatauserinfo["CITY"] = $fdata;
//	STATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "STATE";
	$fdata["GoodName"] = "STATE";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","STATE");
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

		$fdata["strField"] = "STATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`STATE`";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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




	$tdatauserinfo["STATE"] = $fdata;
//	ZIP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ZIP";
	$fdata["GoodName"] = "ZIP";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","ZIP");
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

		$fdata["strField"] = "ZIP";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ZIP";

	
	
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
			$edata["EditParams"].= " maxlength=12";

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




	$tdatauserinfo["ZIP"] = $fdata;
//	OPHONE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "OPHONE";
	$fdata["GoodName"] = "OPHONE";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","OPHONE");
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

		$fdata["strField"] = "OPHONE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OPHONE";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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




	$tdatauserinfo["OPHONE"] = $fdata;
//	FPHONE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "FPHONE";
	$fdata["GoodName"] = "FPHONE";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","FPHONE");
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

		$fdata["strField"] = "FPHONE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FPHONE";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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




	$tdatauserinfo["FPHONE"] = $fdata;
//	VERIFICATIONMETHOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "VERIFICATIONMETHOD";
	$fdata["GoodName"] = "VERIFICATIONMETHOD";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","VERIFICATIONMETHOD");
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

		$fdata["strField"] = "VERIFICATIONMETHOD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VERIFICATIONMETHOD";

	
	
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




	$tdatauserinfo["VERIFICATIONMETHOD"] = $fdata;
//	DEFAULTDEPTID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "DEFAULTDEPTID";
	$fdata["GoodName"] = "DEFAULTDEPTID";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","DEFAULTDEPTID");
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

		$fdata["strField"] = "DEFAULTDEPTID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEFAULTDEPTID";

	
	
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




	$tdatauserinfo["DEFAULTDEPTID"] = $fdata;
//	SECURITYFLAGS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "SECURITYFLAGS";
	$fdata["GoodName"] = "SECURITYFLAGS";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","SECURITYFLAGS");
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

		$fdata["strField"] = "SECURITYFLAGS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SECURITYFLAGS";

	
	
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




	$tdatauserinfo["SECURITYFLAGS"] = $fdata;
//	ATT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "ATT";
	$fdata["GoodName"] = "ATT";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","ATT");
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

		$fdata["strField"] = "ATT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ATT";

	
	
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




	$tdatauserinfo["ATT"] = $fdata;
//	INLATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "INLATE";
	$fdata["GoodName"] = "INLATE";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","INLATE");
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

		$fdata["strField"] = "INLATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "INLATE";

	
	
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




	$tdatauserinfo["INLATE"] = $fdata;
//	OUTEARLY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "OUTEARLY";
	$fdata["GoodName"] = "OUTEARLY";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","OUTEARLY");
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

		$fdata["strField"] = "OUTEARLY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OUTEARLY";

	
	
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




	$tdatauserinfo["OUTEARLY"] = $fdata;
//	OVERTIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "OVERTIME";
	$fdata["GoodName"] = "OVERTIME";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","OVERTIME");
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

		$fdata["strField"] = "OVERTIME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OVERTIME";

	
	
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




	$tdatauserinfo["OVERTIME"] = $fdata;
//	SEP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "SEP";
	$fdata["GoodName"] = "SEP";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","SEP");
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

		$fdata["strField"] = "SEP";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEP";

	
	
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




	$tdatauserinfo["SEP"] = $fdata;
//	HOLIDAY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "HOLIDAY";
	$fdata["GoodName"] = "HOLIDAY";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","HOLIDAY");
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

		$fdata["strField"] = "HOLIDAY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HOLIDAY";

	
	
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




	$tdatauserinfo["HOLIDAY"] = $fdata;
//	MINZU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "MINZU";
	$fdata["GoodName"] = "MINZU";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","MINZU");
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

		$fdata["strField"] = "MINZU";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MINZU";

	
	
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
			$edata["EditParams"].= " maxlength=8";

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




	$tdatauserinfo["MINZU"] = $fdata;
//	PASSWORD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "PASSWORD";
	$fdata["GoodName"] = "PASSWORD";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","PASSWORD");
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

		$fdata["strField"] = "PASSWORD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PASSWORD";

	
	
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




	$tdatauserinfo["PASSWORD"] = $fdata;
//	LUNCHDURATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "LUNCHDURATION";
	$fdata["GoodName"] = "LUNCHDURATION";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","LUNCHDURATION");
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

		$fdata["strField"] = "LUNCHDURATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LUNCHDURATION";

	
	
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




	$tdatauserinfo["LUNCHDURATION"] = $fdata;
//	PHOTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "PHOTO";
	$fdata["GoodName"] = "PHOTO";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","PHOTO");
	$fdata["FieldType"] = 128;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "PHOTO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PHOTO";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
						$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 0;

	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
	
		
	


	
	
	
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








	$tdatauserinfo["PHOTO"] = $fdata;
//	mverifypass
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "mverifypass";
	$fdata["GoodName"] = "mverifypass";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","mverifypass");
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

		$fdata["strField"] = "mverifypass";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mverifypass";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdatauserinfo["mverifypass"] = $fdata;
//	Notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Notes";
	$fdata["GoodName"] = "Notes";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","Notes");
	$fdata["FieldType"] = 128;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "Notes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Notes";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
						$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 0;

	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
	
		
	


	
	
	
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








	$tdatauserinfo["Notes"] = $fdata;
//	privilege
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "privilege";
	$fdata["GoodName"] = "privilege";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","privilege");
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

		$fdata["strField"] = "privilege";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "privilege";

	
	
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




	$tdatauserinfo["privilege"] = $fdata;
//	InheritDeptSch
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "InheritDeptSch";
	$fdata["GoodName"] = "InheritDeptSch";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","InheritDeptSch");
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

		$fdata["strField"] = "InheritDeptSch";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InheritDeptSch";

	
	
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




	$tdatauserinfo["InheritDeptSch"] = $fdata;
//	InheritDeptSchClass
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "InheritDeptSchClass";
	$fdata["GoodName"] = "InheritDeptSchClass";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","InheritDeptSchClass");
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

		$fdata["strField"] = "InheritDeptSchClass";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InheritDeptSchClass";

	
	
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




	$tdatauserinfo["InheritDeptSchClass"] = $fdata;
//	AutoSchPlan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "AutoSchPlan";
	$fdata["GoodName"] = "AutoSchPlan";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","AutoSchPlan");
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

		$fdata["strField"] = "AutoSchPlan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AutoSchPlan";

	
	
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




	$tdatauserinfo["AutoSchPlan"] = $fdata;
//	MinAutoSchInterval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "MinAutoSchInterval";
	$fdata["GoodName"] = "MinAutoSchInterval";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","MinAutoSchInterval");
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

		$fdata["strField"] = "MinAutoSchInterval";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MinAutoSchInterval";

	
	
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




	$tdatauserinfo["MinAutoSchInterval"] = $fdata;
//	RegisterOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "RegisterOT";
	$fdata["GoodName"] = "RegisterOT";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","RegisterOT");
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

		$fdata["strField"] = "RegisterOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegisterOT";

	
	
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




	$tdatauserinfo["RegisterOT"] = $fdata;
//	InheritDeptRule
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "InheritDeptRule";
	$fdata["GoodName"] = "InheritDeptRule";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","InheritDeptRule");
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

		$fdata["strField"] = "InheritDeptRule";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InheritDeptRule";

	
	
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




	$tdatauserinfo["InheritDeptRule"] = $fdata;
//	EMPRIVILEGE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "EMPRIVILEGE";
	$fdata["GoodName"] = "EMPRIVILEGE";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","EMPRIVILEGE");
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

		$fdata["strField"] = "EMPRIVILEGE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EMPRIVILEGE";

	
	
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




	$tdatauserinfo["EMPRIVILEGE"] = $fdata;
//	CardNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "CardNo";
	$fdata["GoodName"] = "CardNo";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","CardNo");
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

		$fdata["strField"] = "CardNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CardNo";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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




	$tdatauserinfo["CardNo"] = $fdata;
//	FaceGroup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "FaceGroup";
	$fdata["GoodName"] = "FaceGroup";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","FaceGroup");
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

		$fdata["strField"] = "FaceGroup";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FaceGroup";

	
	
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




	$tdatauserinfo["FaceGroup"] = $fdata;
//	AccGroup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "AccGroup";
	$fdata["GoodName"] = "AccGroup";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","AccGroup");
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

		$fdata["strField"] = "AccGroup";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccGroup";

	
	
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




	$tdatauserinfo["AccGroup"] = $fdata;
//	UseAccGroupTZ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "UseAccGroupTZ";
	$fdata["GoodName"] = "UseAccGroupTZ";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","UseAccGroupTZ");
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

		$fdata["strField"] = "UseAccGroupTZ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UseAccGroupTZ";

	
	
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




	$tdatauserinfo["UseAccGroupTZ"] = $fdata;
//	VerifyCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "VerifyCode";
	$fdata["GoodName"] = "VerifyCode";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","VerifyCode");
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

		$fdata["strField"] = "VerifyCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VerifyCode";

	
	
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




	$tdatauserinfo["VerifyCode"] = $fdata;
//	Expires
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "Expires";
	$fdata["GoodName"] = "Expires";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","Expires");
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

		$fdata["strField"] = "Expires";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Expires";

	
	
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




	$tdatauserinfo["Expires"] = $fdata;
//	ValidCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "ValidCount";
	$fdata["GoodName"] = "ValidCount";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","ValidCount");
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

		$fdata["strField"] = "ValidCount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ValidCount";

	
	
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




	$tdatauserinfo["ValidCount"] = $fdata;
//	ValidTimeBegin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "ValidTimeBegin";
	$fdata["GoodName"] = "ValidTimeBegin";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","ValidTimeBegin");
	$fdata["FieldType"] = 135;

	
	
	
			
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

		$fdata["strField"] = "ValidTimeBegin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ValidTimeBegin";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatauserinfo["ValidTimeBegin"] = $fdata;
//	ValidTimeEnd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "ValidTimeEnd";
	$fdata["GoodName"] = "ValidTimeEnd";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","ValidTimeEnd");
	$fdata["FieldType"] = 135;

	
	
	
			
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

		$fdata["strField"] = "ValidTimeEnd";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ValidTimeEnd";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatauserinfo["ValidTimeEnd"] = $fdata;
//	TimeZone1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "TimeZone1";
	$fdata["GoodName"] = "TimeZone1";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","TimeZone1");
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

		$fdata["strField"] = "TimeZone1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TimeZone1";

	
	
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




	$tdatauserinfo["TimeZone1"] = $fdata;
//	TimeZone2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "TimeZone2";
	$fdata["GoodName"] = "TimeZone2";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","TimeZone2");
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

		$fdata["strField"] = "TimeZone2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TimeZone2";

	
	
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




	$tdatauserinfo["TimeZone2"] = $fdata;
//	TimeZone3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "TimeZone3";
	$fdata["GoodName"] = "TimeZone3";
	$fdata["ownerTable"] = "userinfo";
	$fdata["Label"] = GetFieldLabel("userinfo","TimeZone3");
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

		$fdata["strField"] = "TimeZone3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TimeZone3";

	
	
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




	$tdatauserinfo["TimeZone3"] = $fdata;


$tables_data["userinfo"]=&$tdatauserinfo;
$field_labels["userinfo"] = &$fieldLabelsuserinfo;
$fieldToolTips["userinfo"] = &$fieldToolTipsuserinfo;
$placeHolders["userinfo"] = &$placeHoldersuserinfo;
$page_titles["userinfo"] = &$pageTitlesuserinfo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["userinfo"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["userinfo"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_userinfo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "USERID,  	Badgenumber,  	SSN,  	Name,  	Gender,  	TITLE,  	PAGER,  	BIRTHDAY,  	HIREDDAY,  	street,  	CITY,  	`STATE`,  	ZIP,  	OPHONE,  	FPHONE,  	VERIFICATIONMETHOD,  	DEFAULTDEPTID,  	SECURITYFLAGS,  	ATT,  	INLATE,  	OUTEARLY,  	OVERTIME,  	SEP,  	HOLIDAY,  	MINZU,  	PASSWORD,  	LUNCHDURATION,  	PHOTO,  	mverifypass,  	Notes,  	privilege,  	InheritDeptSch,  	InheritDeptSchClass,  	AutoSchPlan,  	MinAutoSchInterval,  	RegisterOT,  	InheritDeptRule,  	EMPRIVILEGE,  	CardNo,  	FaceGroup,  	AccGroup,  	UseAccGroupTZ,  	VerifyCode,  	Expires,  	ValidCount,  	ValidTimeBegin,  	ValidTimeEnd,  	TimeZone1,  	TimeZone2,  	TimeZone3";
$proto0["m_strFrom"] = "FROM userinfo";
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
	"m_strName" => "USERID",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto6["m_sql"] = "USERID";
$proto6["m_srcTableName"] = "userinfo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Badgenumber",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto8["m_sql"] = "Badgenumber";
$proto8["m_srcTableName"] = "userinfo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SSN",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto10["m_sql"] = "SSN";
$proto10["m_srcTableName"] = "userinfo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto12["m_sql"] = "Name";
$proto12["m_srcTableName"] = "userinfo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Gender",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto14["m_sql"] = "Gender";
$proto14["m_srcTableName"] = "userinfo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TITLE",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto16["m_sql"] = "TITLE";
$proto16["m_srcTableName"] = "userinfo";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PAGER",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto18["m_sql"] = "PAGER";
$proto18["m_srcTableName"] = "userinfo";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "BIRTHDAY",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto20["m_sql"] = "BIRTHDAY";
$proto20["m_srcTableName"] = "userinfo";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "HIREDDAY",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto22["m_sql"] = "HIREDDAY";
$proto22["m_srcTableName"] = "userinfo";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "street",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto24["m_sql"] = "street";
$proto24["m_srcTableName"] = "userinfo";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "CITY",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto26["m_sql"] = "CITY";
$proto26["m_srcTableName"] = "userinfo";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "STATE",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto28["m_sql"] = "`STATE`";
$proto28["m_srcTableName"] = "userinfo";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ZIP",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto30["m_sql"] = "ZIP";
$proto30["m_srcTableName"] = "userinfo";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "OPHONE",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto32["m_sql"] = "OPHONE";
$proto32["m_srcTableName"] = "userinfo";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "FPHONE",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto34["m_sql"] = "FPHONE";
$proto34["m_srcTableName"] = "userinfo";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "VERIFICATIONMETHOD",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto36["m_sql"] = "VERIFICATIONMETHOD";
$proto36["m_srcTableName"] = "userinfo";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "DEFAULTDEPTID",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto38["m_sql"] = "DEFAULTDEPTID";
$proto38["m_srcTableName"] = "userinfo";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "SECURITYFLAGS",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto40["m_sql"] = "SECURITYFLAGS";
$proto40["m_srcTableName"] = "userinfo";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "ATT",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto42["m_sql"] = "ATT";
$proto42["m_srcTableName"] = "userinfo";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "INLATE",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto44["m_sql"] = "INLATE";
$proto44["m_srcTableName"] = "userinfo";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "OUTEARLY",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto46["m_sql"] = "OUTEARLY";
$proto46["m_srcTableName"] = "userinfo";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "OVERTIME",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto48["m_sql"] = "OVERTIME";
$proto48["m_srcTableName"] = "userinfo";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "SEP",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto50["m_sql"] = "SEP";
$proto50["m_srcTableName"] = "userinfo";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "HOLIDAY",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto52["m_sql"] = "HOLIDAY";
$proto52["m_srcTableName"] = "userinfo";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "MINZU",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto54["m_sql"] = "MINZU";
$proto54["m_srcTableName"] = "userinfo";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "PASSWORD",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto56["m_sql"] = "PASSWORD";
$proto56["m_srcTableName"] = "userinfo";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "LUNCHDURATION",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto58["m_sql"] = "LUNCHDURATION";
$proto58["m_srcTableName"] = "userinfo";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "PHOTO",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto60["m_sql"] = "PHOTO";
$proto60["m_srcTableName"] = "userinfo";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "mverifypass",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto62["m_sql"] = "mverifypass";
$proto62["m_srcTableName"] = "userinfo";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Notes",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto64["m_sql"] = "Notes";
$proto64["m_srcTableName"] = "userinfo";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "privilege",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto66["m_sql"] = "privilege";
$proto66["m_srcTableName"] = "userinfo";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "InheritDeptSch",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto68["m_sql"] = "InheritDeptSch";
$proto68["m_srcTableName"] = "userinfo";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "InheritDeptSchClass",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto70["m_sql"] = "InheritDeptSchClass";
$proto70["m_srcTableName"] = "userinfo";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "AutoSchPlan",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto72["m_sql"] = "AutoSchPlan";
$proto72["m_srcTableName"] = "userinfo";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "MinAutoSchInterval",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto74["m_sql"] = "MinAutoSchInterval";
$proto74["m_srcTableName"] = "userinfo";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "RegisterOT",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto76["m_sql"] = "RegisterOT";
$proto76["m_srcTableName"] = "userinfo";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "InheritDeptRule",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto78["m_sql"] = "InheritDeptRule";
$proto78["m_srcTableName"] = "userinfo";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "EMPRIVILEGE",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto80["m_sql"] = "EMPRIVILEGE";
$proto80["m_srcTableName"] = "userinfo";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "CardNo",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto82["m_sql"] = "CardNo";
$proto82["m_srcTableName"] = "userinfo";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "FaceGroup",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto84["m_sql"] = "FaceGroup";
$proto84["m_srcTableName"] = "userinfo";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "AccGroup",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto86["m_sql"] = "AccGroup";
$proto86["m_srcTableName"] = "userinfo";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "UseAccGroupTZ",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto88["m_sql"] = "UseAccGroupTZ";
$proto88["m_srcTableName"] = "userinfo";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "VerifyCode",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto90["m_sql"] = "VerifyCode";
$proto90["m_srcTableName"] = "userinfo";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "Expires",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto92["m_sql"] = "Expires";
$proto92["m_srcTableName"] = "userinfo";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "ValidCount",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto94["m_sql"] = "ValidCount";
$proto94["m_srcTableName"] = "userinfo";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "ValidTimeBegin",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto96["m_sql"] = "ValidTimeBegin";
$proto96["m_srcTableName"] = "userinfo";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "ValidTimeEnd",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto98["m_sql"] = "ValidTimeEnd";
$proto98["m_srcTableName"] = "userinfo";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeZone1",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto100["m_sql"] = "TimeZone1";
$proto100["m_srcTableName"] = "userinfo";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeZone2",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto102["m_sql"] = "TimeZone2";
$proto102["m_srcTableName"] = "userinfo";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeZone3",
	"m_strTable" => "userinfo",
	"m_srcTableName" => "userinfo"
));

$proto104["m_sql"] = "TimeZone3";
$proto104["m_srcTableName"] = "userinfo";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto106=array();
$proto106["m_link"] = "SQLL_MAIN";
			$proto107=array();
$proto107["m_strName"] = "userinfo";
$proto107["m_srcTableName"] = "userinfo";
$proto107["m_columns"] = array();
$proto107["m_columns"][] = "USERID";
$proto107["m_columns"][] = "Badgenumber";
$proto107["m_columns"][] = "SSN";
$proto107["m_columns"][] = "Name";
$proto107["m_columns"][] = "Gender";
$proto107["m_columns"][] = "TITLE";
$proto107["m_columns"][] = "PAGER";
$proto107["m_columns"][] = "BIRTHDAY";
$proto107["m_columns"][] = "HIREDDAY";
$proto107["m_columns"][] = "street";
$proto107["m_columns"][] = "CITY";
$proto107["m_columns"][] = "STATE";
$proto107["m_columns"][] = "ZIP";
$proto107["m_columns"][] = "OPHONE";
$proto107["m_columns"][] = "FPHONE";
$proto107["m_columns"][] = "VERIFICATIONMETHOD";
$proto107["m_columns"][] = "DEFAULTDEPTID";
$proto107["m_columns"][] = "SECURITYFLAGS";
$proto107["m_columns"][] = "ATT";
$proto107["m_columns"][] = "INLATE";
$proto107["m_columns"][] = "OUTEARLY";
$proto107["m_columns"][] = "OVERTIME";
$proto107["m_columns"][] = "SEP";
$proto107["m_columns"][] = "HOLIDAY";
$proto107["m_columns"][] = "MINZU";
$proto107["m_columns"][] = "PASSWORD";
$proto107["m_columns"][] = "LUNCHDURATION";
$proto107["m_columns"][] = "PHOTO";
$proto107["m_columns"][] = "mverifypass";
$proto107["m_columns"][] = "Notes";
$proto107["m_columns"][] = "privilege";
$proto107["m_columns"][] = "InheritDeptSch";
$proto107["m_columns"][] = "InheritDeptSchClass";
$proto107["m_columns"][] = "AutoSchPlan";
$proto107["m_columns"][] = "MinAutoSchInterval";
$proto107["m_columns"][] = "RegisterOT";
$proto107["m_columns"][] = "InheritDeptRule";
$proto107["m_columns"][] = "EMPRIVILEGE";
$proto107["m_columns"][] = "CardNo";
$proto107["m_columns"][] = "FaceGroup";
$proto107["m_columns"][] = "AccGroup";
$proto107["m_columns"][] = "UseAccGroupTZ";
$proto107["m_columns"][] = "VerifyCode";
$proto107["m_columns"][] = "Expires";
$proto107["m_columns"][] = "ValidCount";
$proto107["m_columns"][] = "ValidTimeBegin";
$proto107["m_columns"][] = "ValidTimeEnd";
$proto107["m_columns"][] = "TimeZone1";
$proto107["m_columns"][] = "TimeZone2";
$proto107["m_columns"][] = "TimeZone3";
$obj = new SQLTable($proto107);

$proto106["m_table"] = $obj;
$proto106["m_sql"] = "userinfo";
$proto106["m_alias"] = "";
$proto106["m_srcTableName"] = "userinfo";
$proto108=array();
$proto108["m_sql"] = "";
$proto108["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto108["m_column"]=$obj;
$proto108["m_contained"] = array();
$proto108["m_strCase"] = "";
$proto108["m_havingmode"] = false;
$proto108["m_inBrackets"] = false;
$proto108["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto108);

$proto106["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto106);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="userinfo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_userinfo = createSqlQuery_userinfo();


	
		;

																																																		

$tdatauserinfo[".sqlquery"] = $queryData_userinfo;

include_once(getabspath("include/userinfo_events.php"));
$tableEvents["userinfo"] = new eventclass_userinfo;
$tdatauserinfo[".hasEvents"] = true;

?>