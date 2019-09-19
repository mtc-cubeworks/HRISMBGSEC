<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadtrsummary2 = array();
	$tdatadtrsummary2[".truncateText"] = true;
	$tdatadtrsummary2[".NumberOfChars"] = 80;
	$tdatadtrsummary2[".ShortName"] = "dtrsummary2";
	$tdatadtrsummary2[".OwnerID"] = "";
	$tdatadtrsummary2[".OriginalTable"] = "dtrsummary2";

//	field labels
$fieldLabelsdtrsummary2 = array();
$fieldToolTipsdtrsummary2 = array();
$pageTitlesdtrsummary2 = array();
$placeHoldersdtrsummary2 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdtrsummary2["English"] = array();
	$fieldToolTipsdtrsummary2["English"] = array();
	$placeHoldersdtrsummary2["English"] = array();
	$pageTitlesdtrsummary2["English"] = array();
	$fieldLabelsdtrsummary2["English"]["EmployeeID"] = "Employee ID";
	$fieldToolTipsdtrsummary2["English"]["EmployeeID"] = "";
	$placeHoldersdtrsummary2["English"]["EmployeeID"] = "";
	$fieldLabelsdtrsummary2["English"]["UserName"] = "User Name";
	$fieldToolTipsdtrsummary2["English"]["UserName"] = "";
	$placeHoldersdtrsummary2["English"]["UserName"] = "";
	$fieldLabelsdtrsummary2["English"]["Division"] = "Division";
	$fieldToolTipsdtrsummary2["English"]["Division"] = "";
	$placeHoldersdtrsummary2["English"]["Division"] = "";
	$fieldLabelsdtrsummary2["English"]["WageType"] = "Wage Type";
	$fieldToolTipsdtrsummary2["English"]["WageType"] = "";
	$placeHoldersdtrsummary2["English"]["WageType"] = "";
	$fieldLabelsdtrsummary2["English"]["RegWD"] = "Reg WD";
	$fieldToolTipsdtrsummary2["English"]["RegWD"] = "";
	$placeHoldersdtrsummary2["English"]["RegWD"] = "";
	$fieldLabelsdtrsummary2["English"]["DWork"] = "DWork";
	$fieldToolTipsdtrsummary2["English"]["DWork"] = "";
	$placeHoldersdtrsummary2["English"]["DWork"] = "";
	$fieldLabelsdtrsummary2["English"]["Absent"] = "Absent";
	$fieldToolTipsdtrsummary2["English"]["Absent"] = "";
	$placeHoldersdtrsummary2["English"]["Absent"] = "";
	$fieldLabelsdtrsummary2["English"]["TLates"] = "Total Lates(m)";
	$fieldToolTipsdtrsummary2["English"]["TLates"] = "";
	$placeHoldersdtrsummary2["English"]["TLates"] = "";
	$fieldLabelsdtrsummary2["English"]["LateMins"] = "Late(m)";
	$fieldToolTipsdtrsummary2["English"]["LateMins"] = "";
	$placeHoldersdtrsummary2["English"]["LateMins"] = "";
	$fieldLabelsdtrsummary2["English"]["UndertimeMins"] = "Undertime(m)";
	$fieldToolTipsdtrsummary2["English"]["UndertimeMins"] = "";
	$placeHoldersdtrsummary2["English"]["UndertimeMins"] = "";
	$fieldLabelsdtrsummary2["English"]["VLDays"] = "VLDays";
	$fieldToolTipsdtrsummary2["English"]["VLDays"] = "";
	$placeHoldersdtrsummary2["English"]["VLDays"] = "";
	$fieldLabelsdtrsummary2["English"]["SLDays"] = "SLDays";
	$fieldToolTipsdtrsummary2["English"]["SLDays"] = "";
	$placeHoldersdtrsummary2["English"]["SLDays"] = "";
	$fieldLabelsdtrsummary2["English"]["ELDays"] = "ELDays";
	$fieldToolTipsdtrsummary2["English"]["ELDays"] = "";
	$placeHoldersdtrsummary2["English"]["ELDays"] = "";
	$fieldLabelsdtrsummary2["English"]["PLDays"] = "PLDays";
	$fieldToolTipsdtrsummary2["English"]["PLDays"] = "";
	$placeHoldersdtrsummary2["English"]["PLDays"] = "";
	$fieldLabelsdtrsummary2["English"]["TrODays"] = "TrODays";
	$fieldToolTipsdtrsummary2["English"]["TrODays"] = "";
	$placeHoldersdtrsummary2["English"]["TrODays"] = "";
	$fieldLabelsdtrsummary2["English"]["RLink"] = "RLink";
	$fieldToolTipsdtrsummary2["English"]["RLink"] = "";
	$placeHoldersdtrsummary2["English"]["RLink"] = "";
	$fieldLabelsdtrsummary2["English"]["Employer"] = "Employer";
	$fieldToolTipsdtrsummary2["English"]["Employer"] = "";
	$placeHoldersdtrsummary2["English"]["Employer"] = "";
	$fieldLabelsdtrsummary2["English"]["ExcessHrs"] = "Temp OT(h)";
	$fieldToolTipsdtrsummary2["English"]["ExcessHrs"] = "";
	$placeHoldersdtrsummary2["English"]["ExcessHrs"] = "";
	$fieldLabelsdtrsummary2["English"]["RegOTh"] = "Reg OT(h)";
	$fieldToolTipsdtrsummary2["English"]["RegOTh"] = "";
	$placeHoldersdtrsummary2["English"]["RegOTh"] = "";
	$fieldLabelsdtrsummary2["English"]["RHOTh"] = "RH-OT(h)";
	$fieldToolTipsdtrsummary2["English"]["RHOTh"] = "";
	$placeHoldersdtrsummary2["English"]["RHOTh"] = "";
	$fieldLabelsdtrsummary2["English"]["SHOTh"] = "SH-OT(h)";
	$fieldToolTipsdtrsummary2["English"]["SHOTh"] = "";
	$placeHoldersdtrsummary2["English"]["SHOTh"] = "";
	$fieldLabelsdtrsummary2["English"]["SHOTDh"] = "SH-OT-D(h)";
	$fieldToolTipsdtrsummary2["English"]["SHOTDh"] = "";
	$placeHoldersdtrsummary2["English"]["SHOTDh"] = "";
	$fieldLabelsdtrsummary2["English"]["DHOTh"] = "DH-OT(h)";
	$fieldToolTipsdtrsummary2["English"]["DHOTh"] = "";
	$placeHoldersdtrsummary2["English"]["DHOTh"] = "";
	$fieldLabelsdtrsummary2["English"]["NDOTh"] = "ND-OT(h)";
	$fieldToolTipsdtrsummary2["English"]["NDOTh"] = "";
	$placeHoldersdtrsummary2["English"]["NDOTh"] = "";
	$fieldLabelsdtrsummary2["English"]["RHNDh"] = "RH-ND(h)";
	$fieldToolTipsdtrsummary2["English"]["RHNDh"] = "";
	$placeHoldersdtrsummary2["English"]["RHNDh"] = "";
	$fieldLabelsdtrsummary2["English"]["SHNDh"] = "SH-ND(h)";
	$fieldToolTipsdtrsummary2["English"]["SHNDh"] = "";
	$placeHoldersdtrsummary2["English"]["SHNDh"] = "";
	$fieldLabelsdtrsummary2["English"]["DHNDh"] = "DHND(h)";
	$fieldToolTipsdtrsummary2["English"]["DHNDh"] = "";
	$placeHoldersdtrsummary2["English"]["DHNDh"] = "";
	$fieldLabelsdtrsummary2["English"]["DHRDNDh"] = "DHRDND(h)";
	$fieldToolTipsdtrsummary2["English"]["DHRDNDh"] = "";
	$placeHoldersdtrsummary2["English"]["DHRDNDh"] = "";
	$fieldLabelsdtrsummary2["English"]["RHRDNDh"] = "RHRDND(h)";
	$fieldToolTipsdtrsummary2["English"]["RHRDNDh"] = "";
	$placeHoldersdtrsummary2["English"]["RHRDNDh"] = "";
	$fieldLabelsdtrsummary2["English"]["SHRDNDh"] = "SHRDND(h)";
	$fieldToolTipsdtrsummary2["English"]["SHRDNDh"] = "";
	$placeHoldersdtrsummary2["English"]["SHRDNDh"] = "";
	$fieldLabelsdtrsummary2["English"]["RHNDOTh"] = "RHNDOT(h)";
	$fieldToolTipsdtrsummary2["English"]["RHNDOTh"] = "";
	$placeHoldersdtrsummary2["English"]["RHNDOTh"] = "";
	$fieldLabelsdtrsummary2["English"]["SHNDOTh"] = "SHNDOT(h)";
	$fieldToolTipsdtrsummary2["English"]["SHNDOTh"] = "";
	$placeHoldersdtrsummary2["English"]["SHNDOTh"] = "";
	$fieldLabelsdtrsummary2["English"]["DHNDOTh"] = "DHNDOT(h)";
	$fieldToolTipsdtrsummary2["English"]["DHNDOTh"] = "";
	$placeHoldersdtrsummary2["English"]["DHNDOTh"] = "";
	$fieldLabelsdtrsummary2["English"]["RDNDOTh"] = "RDNDOT(h)";
	$fieldToolTipsdtrsummary2["English"]["RDNDOTh"] = "";
	$placeHoldersdtrsummary2["English"]["RDNDOTh"] = "";
	$fieldLabelsdtrsummary2["English"]["RHRDOTh"] = "RHRDOT(h)";
	$fieldToolTipsdtrsummary2["English"]["RHRDOTh"] = "";
	$placeHoldersdtrsummary2["English"]["RHRDOTh"] = "";
	$fieldLabelsdtrsummary2["English"]["SHRDOTh"] = "SHRDOT(h)";
	$fieldToolTipsdtrsummary2["English"]["SHRDOTh"] = "";
	$placeHoldersdtrsummary2["English"]["SHRDOTh"] = "";
	$fieldLabelsdtrsummary2["English"]["SHRDOTDh"] = "SHRDOTD(h)";
	$fieldToolTipsdtrsummary2["English"]["SHRDOTDh"] = "";
	$placeHoldersdtrsummary2["English"]["SHRDOTDh"] = "";
	$fieldLabelsdtrsummary2["English"]["DHRDOTh"] = "DHRDOT(h)";
	$fieldToolTipsdtrsummary2["English"]["DHRDOTh"] = "";
	$placeHoldersdtrsummary2["English"]["DHRDOTh"] = "";
	$fieldLabelsdtrsummary2["English"]["RHRDNDOTh"] = "RHRDNDOT(h)";
	$fieldToolTipsdtrsummary2["English"]["RHRDNDOTh"] = "";
	$placeHoldersdtrsummary2["English"]["RHRDNDOTh"] = "";
	$fieldLabelsdtrsummary2["English"]["SHRDNDOTh"] = "SHRDNDOT(h)";
	$fieldToolTipsdtrsummary2["English"]["SHRDNDOTh"] = "";
	$placeHoldersdtrsummary2["English"]["SHRDNDOTh"] = "";
	$fieldLabelsdtrsummary2["English"]["DHRDNDOTh"] = "DHRDNDOT(h)";
	$fieldToolTipsdtrsummary2["English"]["DHRDNDOTh"] = "";
	$placeHoldersdtrsummary2["English"]["DHRDNDOTh"] = "";
	$fieldLabelsdtrsummary2["English"]["RHh"] = "RH(h)";
	$fieldToolTipsdtrsummary2["English"]["RHh"] = "";
	$placeHoldersdtrsummary2["English"]["RHh"] = "";
	$fieldLabelsdtrsummary2["English"]["SHh"] = "SH(h)";
	$fieldToolTipsdtrsummary2["English"]["SHh"] = "";
	$placeHoldersdtrsummary2["English"]["SHh"] = "";
	$fieldLabelsdtrsummary2["English"]["DHh"] = "DH(h)";
	$fieldToolTipsdtrsummary2["English"]["DHh"] = "";
	$placeHoldersdtrsummary2["English"]["DHh"] = "";
	$fieldLabelsdtrsummary2["English"]["RHRDh"] = "RHRD(h)";
	$fieldToolTipsdtrsummary2["English"]["RHRDh"] = "";
	$placeHoldersdtrsummary2["English"]["RHRDh"] = "";
	$fieldLabelsdtrsummary2["English"]["SHRDh"] = "SHRD(h)";
	$fieldToolTipsdtrsummary2["English"]["SHRDh"] = "";
	$placeHoldersdtrsummary2["English"]["SHRDh"] = "";
	$fieldLabelsdtrsummary2["English"]["DHRDh"] = "DHRD(h)";
	$fieldToolTipsdtrsummary2["English"]["DHRDh"] = "";
	$placeHoldersdtrsummary2["English"]["DHRDh"] = "";
	$fieldLabelsdtrsummary2["English"]["RDOTh"] = "RDOT(h)";
	$fieldToolTipsdtrsummary2["English"]["RDOTh"] = "";
	$placeHoldersdtrsummary2["English"]["RDOTh"] = "";
	$fieldLabelsdtrsummary2["English"]["RegNDh"] = "Reg ND(h)";
	$fieldToolTipsdtrsummary2["English"]["RegNDh"] = "";
	$placeHoldersdtrsummary2["English"]["RegNDh"] = "";
	$fieldLabelsdtrsummary2["English"]["RegRDh"] = "Reg RD(h)";
	$fieldToolTipsdtrsummary2["English"]["RegRDh"] = "";
	$placeHoldersdtrsummary2["English"]["RegRDh"] = "";
	$fieldLabelsdtrsummary2["English"]["RDNDh"] = "RDND(h)";
	$fieldToolTipsdtrsummary2["English"]["RDNDh"] = "";
	$placeHoldersdtrsummary2["English"]["RDNDh"] = "";
	if (count($fieldToolTipsdtrsummary2["English"]))
		$tdatadtrsummary2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdtrsummary2[""] = array();
	$fieldToolTipsdtrsummary2[""] = array();
	$placeHoldersdtrsummary2[""] = array();
	$pageTitlesdtrsummary2[""] = array();
	$fieldLabelsdtrsummary2[""]["EmployeeID"] = "Employee ID";
	$fieldToolTipsdtrsummary2[""]["EmployeeID"] = "";
	$placeHoldersdtrsummary2[""]["EmployeeID"] = "";
	$fieldLabelsdtrsummary2[""]["UserName"] = "User Name";
	$fieldToolTipsdtrsummary2[""]["UserName"] = "";
	$placeHoldersdtrsummary2[""]["UserName"] = "";
	$fieldLabelsdtrsummary2[""]["Division"] = "Division";
	$fieldToolTipsdtrsummary2[""]["Division"] = "";
	$placeHoldersdtrsummary2[""]["Division"] = "";
	$fieldLabelsdtrsummary2[""]["WageType"] = "Wage Type";
	$fieldToolTipsdtrsummary2[""]["WageType"] = "";
	$placeHoldersdtrsummary2[""]["WageType"] = "";
	$fieldLabelsdtrsummary2[""]["RegWD"] = "Reg WD";
	$fieldToolTipsdtrsummary2[""]["RegWD"] = "";
	$placeHoldersdtrsummary2[""]["RegWD"] = "";
	$fieldLabelsdtrsummary2[""]["DWork"] = "DWork";
	$fieldToolTipsdtrsummary2[""]["DWork"] = "";
	$placeHoldersdtrsummary2[""]["DWork"] = "";
	$fieldLabelsdtrsummary2[""]["Absent"] = "Absent";
	$fieldToolTipsdtrsummary2[""]["Absent"] = "";
	$placeHoldersdtrsummary2[""]["Absent"] = "";
	$fieldLabelsdtrsummary2[""]["TLates"] = "TLates";
	$fieldToolTipsdtrsummary2[""]["TLates"] = "";
	$placeHoldersdtrsummary2[""]["TLates"] = "";
	$fieldLabelsdtrsummary2[""]["LateMins"] = "Late Mins";
	$fieldToolTipsdtrsummary2[""]["LateMins"] = "";
	$placeHoldersdtrsummary2[""]["LateMins"] = "";
	$fieldLabelsdtrsummary2[""]["UndertimeMins"] = "Undertime Mins";
	$fieldToolTipsdtrsummary2[""]["UndertimeMins"] = "";
	$placeHoldersdtrsummary2[""]["UndertimeMins"] = "";
	$fieldLabelsdtrsummary2[""]["VLDays"] = "VLDays";
	$fieldToolTipsdtrsummary2[""]["VLDays"] = "";
	$placeHoldersdtrsummary2[""]["VLDays"] = "";
	$fieldLabelsdtrsummary2[""]["SLDays"] = "SLDays";
	$fieldToolTipsdtrsummary2[""]["SLDays"] = "";
	$placeHoldersdtrsummary2[""]["SLDays"] = "";
	$fieldLabelsdtrsummary2[""]["ELDays"] = "ELDays";
	$fieldToolTipsdtrsummary2[""]["ELDays"] = "";
	$placeHoldersdtrsummary2[""]["ELDays"] = "";
	$fieldLabelsdtrsummary2[""]["PLDays"] = "PLDays";
	$fieldToolTipsdtrsummary2[""]["PLDays"] = "";
	$placeHoldersdtrsummary2[""]["PLDays"] = "";
	$fieldLabelsdtrsummary2[""]["TrODays"] = "Tr ODays";
	$fieldToolTipsdtrsummary2[""]["TrODays"] = "";
	$placeHoldersdtrsummary2[""]["TrODays"] = "";
	$fieldLabelsdtrsummary2[""]["RLink"] = "RLink";
	$fieldToolTipsdtrsummary2[""]["RLink"] = "";
	$placeHoldersdtrsummary2[""]["RLink"] = "";
	$fieldLabelsdtrsummary2[""]["Employer"] = "Employer";
	$fieldToolTipsdtrsummary2[""]["Employer"] = "";
	$placeHoldersdtrsummary2[""]["Employer"] = "";
	$fieldLabelsdtrsummary2[""]["ExcessHrs"] = "Excess Hrs";
	$fieldToolTipsdtrsummary2[""]["ExcessHrs"] = "";
	$placeHoldersdtrsummary2[""]["ExcessHrs"] = "";
	$fieldLabelsdtrsummary2[""]["RegOTh"] = "Reg OTh";
	$fieldToolTipsdtrsummary2[""]["RegOTh"] = "";
	$placeHoldersdtrsummary2[""]["RegOTh"] = "";
	$fieldLabelsdtrsummary2[""]["RHOTh"] = "RHOTh";
	$fieldToolTipsdtrsummary2[""]["RHOTh"] = "";
	$placeHoldersdtrsummary2[""]["RHOTh"] = "";
	$fieldLabelsdtrsummary2[""]["SHOTh"] = "SHOTh";
	$fieldToolTipsdtrsummary2[""]["SHOTh"] = "";
	$placeHoldersdtrsummary2[""]["SHOTh"] = "";
	$fieldLabelsdtrsummary2[""]["SHOTDh"] = "SHOTDh";
	$fieldToolTipsdtrsummary2[""]["SHOTDh"] = "";
	$placeHoldersdtrsummary2[""]["SHOTDh"] = "";
	$fieldLabelsdtrsummary2[""]["DHOTh"] = "DHOTh";
	$fieldToolTipsdtrsummary2[""]["DHOTh"] = "";
	$placeHoldersdtrsummary2[""]["DHOTh"] = "";
	$fieldLabelsdtrsummary2[""]["NDOTh"] = "NDOTh";
	$fieldToolTipsdtrsummary2[""]["NDOTh"] = "";
	$placeHoldersdtrsummary2[""]["NDOTh"] = "";
	$fieldLabelsdtrsummary2[""]["RHNDh"] = "RHNDh";
	$fieldToolTipsdtrsummary2[""]["RHNDh"] = "";
	$placeHoldersdtrsummary2[""]["RHNDh"] = "";
	$fieldLabelsdtrsummary2[""]["SHNDh"] = "SHNDh";
	$fieldToolTipsdtrsummary2[""]["SHNDh"] = "";
	$placeHoldersdtrsummary2[""]["SHNDh"] = "";
	$fieldLabelsdtrsummary2[""]["DHNDh"] = "DHNDh";
	$fieldToolTipsdtrsummary2[""]["DHNDh"] = "";
	$placeHoldersdtrsummary2[""]["DHNDh"] = "";
	$fieldLabelsdtrsummary2[""]["DHRDNDh"] = "DHRDNDh";
	$fieldToolTipsdtrsummary2[""]["DHRDNDh"] = "";
	$placeHoldersdtrsummary2[""]["DHRDNDh"] = "";
	$fieldLabelsdtrsummary2[""]["RHRDNDh"] = "RHRDNDh";
	$fieldToolTipsdtrsummary2[""]["RHRDNDh"] = "";
	$placeHoldersdtrsummary2[""]["RHRDNDh"] = "";
	$fieldLabelsdtrsummary2[""]["SHRDNDh"] = "SHRDNDh";
	$fieldToolTipsdtrsummary2[""]["SHRDNDh"] = "";
	$placeHoldersdtrsummary2[""]["SHRDNDh"] = "";
	$fieldLabelsdtrsummary2[""]["RHNDOTh"] = "RHNDOTh";
	$fieldToolTipsdtrsummary2[""]["RHNDOTh"] = "";
	$placeHoldersdtrsummary2[""]["RHNDOTh"] = "";
	$fieldLabelsdtrsummary2[""]["SHNDOTh"] = "SHNDOTh";
	$fieldToolTipsdtrsummary2[""]["SHNDOTh"] = "";
	$placeHoldersdtrsummary2[""]["SHNDOTh"] = "";
	$fieldLabelsdtrsummary2[""]["DHNDOTh"] = "DHNDOTh";
	$fieldToolTipsdtrsummary2[""]["DHNDOTh"] = "";
	$placeHoldersdtrsummary2[""]["DHNDOTh"] = "";
	$fieldLabelsdtrsummary2[""]["RDNDOTh"] = "RDNDOTh";
	$fieldToolTipsdtrsummary2[""]["RDNDOTh"] = "";
	$placeHoldersdtrsummary2[""]["RDNDOTh"] = "";
	$fieldLabelsdtrsummary2[""]["RHRDOTh"] = "RHRDOTh";
	$fieldToolTipsdtrsummary2[""]["RHRDOTh"] = "";
	$placeHoldersdtrsummary2[""]["RHRDOTh"] = "";
	$fieldLabelsdtrsummary2[""]["SHRDOTh"] = "SHRDOTh";
	$fieldToolTipsdtrsummary2[""]["SHRDOTh"] = "";
	$placeHoldersdtrsummary2[""]["SHRDOTh"] = "";
	$fieldLabelsdtrsummary2[""]["SHRDOTDh"] = "SHRDOTDh";
	$fieldToolTipsdtrsummary2[""]["SHRDOTDh"] = "";
	$placeHoldersdtrsummary2[""]["SHRDOTDh"] = "";
	$fieldLabelsdtrsummary2[""]["DHRDOTh"] = "DHRDOTh";
	$fieldToolTipsdtrsummary2[""]["DHRDOTh"] = "";
	$placeHoldersdtrsummary2[""]["DHRDOTh"] = "";
	$fieldLabelsdtrsummary2[""]["RHRDNDOTh"] = "RHRDNDOTh";
	$fieldToolTipsdtrsummary2[""]["RHRDNDOTh"] = "";
	$placeHoldersdtrsummary2[""]["RHRDNDOTh"] = "";
	$fieldLabelsdtrsummary2[""]["SHRDNDOTh"] = "SHRDNDOTh";
	$fieldToolTipsdtrsummary2[""]["SHRDNDOTh"] = "";
	$placeHoldersdtrsummary2[""]["SHRDNDOTh"] = "";
	$fieldLabelsdtrsummary2[""]["DHRDNDOTh"] = "DHRDNDOTh";
	$fieldToolTipsdtrsummary2[""]["DHRDNDOTh"] = "";
	$placeHoldersdtrsummary2[""]["DHRDNDOTh"] = "";
	$fieldLabelsdtrsummary2[""]["RHh"] = "RHh";
	$fieldToolTipsdtrsummary2[""]["RHh"] = "";
	$placeHoldersdtrsummary2[""]["RHh"] = "";
	$fieldLabelsdtrsummary2[""]["SHh"] = "SHh";
	$fieldToolTipsdtrsummary2[""]["SHh"] = "";
	$placeHoldersdtrsummary2[""]["SHh"] = "";
	$fieldLabelsdtrsummary2[""]["DHh"] = "DHh";
	$fieldToolTipsdtrsummary2[""]["DHh"] = "";
	$placeHoldersdtrsummary2[""]["DHh"] = "";
	$fieldLabelsdtrsummary2[""]["RHRDh"] = "RHRDh";
	$fieldToolTipsdtrsummary2[""]["RHRDh"] = "";
	$placeHoldersdtrsummary2[""]["RHRDh"] = "";
	$fieldLabelsdtrsummary2[""]["SHRDh"] = "SHRDh";
	$fieldToolTipsdtrsummary2[""]["SHRDh"] = "";
	$placeHoldersdtrsummary2[""]["SHRDh"] = "";
	$fieldLabelsdtrsummary2[""]["DHRDh"] = "DHRDh";
	$fieldToolTipsdtrsummary2[""]["DHRDh"] = "";
	$placeHoldersdtrsummary2[""]["DHRDh"] = "";
	$fieldLabelsdtrsummary2[""]["RDOTh"] = "RDOTh";
	$fieldToolTipsdtrsummary2[""]["RDOTh"] = "";
	$placeHoldersdtrsummary2[""]["RDOTh"] = "";
	$fieldLabelsdtrsummary2[""]["RegNDh"] = "Reg NDh";
	$fieldToolTipsdtrsummary2[""]["RegNDh"] = "";
	$placeHoldersdtrsummary2[""]["RegNDh"] = "";
	$fieldLabelsdtrsummary2[""]["RegRDh"] = "Reg RDh";
	$fieldToolTipsdtrsummary2[""]["RegRDh"] = "";
	$placeHoldersdtrsummary2[""]["RegRDh"] = "";
	$fieldLabelsdtrsummary2[""]["RDNDh"] = "RDNDh";
	$fieldToolTipsdtrsummary2[""]["RDNDh"] = "";
	$placeHoldersdtrsummary2[""]["RDNDh"] = "";
	if (count($fieldToolTipsdtrsummary2[""]))
		$tdatadtrsummary2[".isUseToolTips"] = true;
}


	$tdatadtrsummary2[".NCSearch"] = true;



$tdatadtrsummary2[".shortTableName"] = "dtrsummary2";
$tdatadtrsummary2[".nSecOptions"] = 0;
$tdatadtrsummary2[".recsPerRowPrint"] = 1;
$tdatadtrsummary2[".mainTableOwnerID"] = "";
$tdatadtrsummary2[".moveNext"] = 1;
$tdatadtrsummary2[".entityType"] = 0;

$tdatadtrsummary2[".strOriginalTableName"] = "dtrsummary2";

	



$tdatadtrsummary2[".showAddInPopup"] = false;

$tdatadtrsummary2[".showEditInPopup"] = false;

$tdatadtrsummary2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadtrsummary2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadtrsummary2[".fieldsForRegister"] = array();

$tdatadtrsummary2[".listAjax"] = false;

	$tdatadtrsummary2[".audit"] = false;

	$tdatadtrsummary2[".locking"] = false;



$tdatadtrsummary2[".list"] = true;



$tdatadtrsummary2[".reorderRecordsByHeader"] = true;


$tdatadtrsummary2[".exportFormatting"] = 2;
$tdatadtrsummary2[".exportDelimiter"] = ",";
		
$tdatadtrsummary2[".view"] = true;


$tdatadtrsummary2[".exportTo"] = true;

$tdatadtrsummary2[".printFriendly"] = true;


$tdatadtrsummary2[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadtrsummary2[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatadtrsummary2[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatadtrsummary2[".searchSaving"] = false;
//

$tdatadtrsummary2[".showSearchPanel"] = true;
		$tdatadtrsummary2[".flexibleSearch"] = true;

$tdatadtrsummary2[".isUseAjaxSuggest"] = true;

$tdatadtrsummary2[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																					

$tdatadtrsummary2[".ajaxCodeSnippetAdded"] = false;

$tdatadtrsummary2[".buttonsAdded"] = false;

$tdatadtrsummary2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadtrsummary2[".isUseTimeForSearch"] = false;





$tdatadtrsummary2[".allSearchFields"] = array();
$tdatadtrsummary2[".filterFields"] = array();
$tdatadtrsummary2[".requiredSearchFields"] = array();

$tdatadtrsummary2[".allSearchFields"][] = "RDOTh";
	$tdatadtrsummary2[".allSearchFields"][] = "RegNDh";
	$tdatadtrsummary2[".allSearchFields"][] = "RegRDh";
	$tdatadtrsummary2[".allSearchFields"][] = "RDNDh";
	$tdatadtrsummary2[".allSearchFields"][] = "UserName";
	$tdatadtrsummary2[".allSearchFields"][] = "Division";
	$tdatadtrsummary2[".allSearchFields"][] = "WageType";
	$tdatadtrsummary2[".allSearchFields"][] = "Employer";
	$tdatadtrsummary2[".allSearchFields"][] = "RHh";
	$tdatadtrsummary2[".allSearchFields"][] = "SHh";
	$tdatadtrsummary2[".allSearchFields"][] = "DHh";
	$tdatadtrsummary2[".allSearchFields"][] = "ExcessHrs";
	$tdatadtrsummary2[".allSearchFields"][] = "RegOTh";
	$tdatadtrsummary2[".allSearchFields"][] = "RHOTh";
	$tdatadtrsummary2[".allSearchFields"][] = "SHOTh";
	$tdatadtrsummary2[".allSearchFields"][] = "SHOTDh";
	$tdatadtrsummary2[".allSearchFields"][] = "DHOTh";
	$tdatadtrsummary2[".allSearchFields"][] = "NDOTh";
	$tdatadtrsummary2[".allSearchFields"][] = "RHNDh";
	$tdatadtrsummary2[".allSearchFields"][] = "SHNDh";
	$tdatadtrsummary2[".allSearchFields"][] = "DHNDh";
	$tdatadtrsummary2[".allSearchFields"][] = "RHNDOTh";
	$tdatadtrsummary2[".allSearchFields"][] = "SHNDOTh";
	$tdatadtrsummary2[".allSearchFields"][] = "DHNDOTh";
	$tdatadtrsummary2[".allSearchFields"][] = "RDNDOTh";
	$tdatadtrsummary2[".allSearchFields"][] = "RHRDh";
	$tdatadtrsummary2[".allSearchFields"][] = "SHRDh";
	$tdatadtrsummary2[".allSearchFields"][] = "DHRDh";
	$tdatadtrsummary2[".allSearchFields"][] = "RHRDOTh";
	$tdatadtrsummary2[".allSearchFields"][] = "SHRDOTh";
	$tdatadtrsummary2[".allSearchFields"][] = "SHRDOTDh";
	$tdatadtrsummary2[".allSearchFields"][] = "DHRDOTh";
	$tdatadtrsummary2[".allSearchFields"][] = "RHRDNDh";
	$tdatadtrsummary2[".allSearchFields"][] = "SHRDNDh";
	$tdatadtrsummary2[".allSearchFields"][] = "DHRDNDh";
	$tdatadtrsummary2[".allSearchFields"][] = "RHRDNDOTh";
	$tdatadtrsummary2[".allSearchFields"][] = "SHRDNDOTh";
	$tdatadtrsummary2[".allSearchFields"][] = "DHRDNDOTh";
	

$tdatadtrsummary2[".googleLikeFields"] = array();
$tdatadtrsummary2[".googleLikeFields"][] = "UserName";
$tdatadtrsummary2[".googleLikeFields"][] = "Division";
$tdatadtrsummary2[".googleLikeFields"][] = "WageType";
$tdatadtrsummary2[".googleLikeFields"][] = "Employer";
$tdatadtrsummary2[".googleLikeFields"][] = "ExcessHrs";
$tdatadtrsummary2[".googleLikeFields"][] = "RegOTh";
$tdatadtrsummary2[".googleLikeFields"][] = "RHOTh";
$tdatadtrsummary2[".googleLikeFields"][] = "SHOTh";
$tdatadtrsummary2[".googleLikeFields"][] = "SHOTDh";
$tdatadtrsummary2[".googleLikeFields"][] = "DHOTh";
$tdatadtrsummary2[".googleLikeFields"][] = "NDOTh";
$tdatadtrsummary2[".googleLikeFields"][] = "RHNDh";
$tdatadtrsummary2[".googleLikeFields"][] = "SHNDh";
$tdatadtrsummary2[".googleLikeFields"][] = "DHNDh";
$tdatadtrsummary2[".googleLikeFields"][] = "DHRDNDh";
$tdatadtrsummary2[".googleLikeFields"][] = "RHRDNDh";
$tdatadtrsummary2[".googleLikeFields"][] = "SHRDNDh";
$tdatadtrsummary2[".googleLikeFields"][] = "RHNDOTh";
$tdatadtrsummary2[".googleLikeFields"][] = "SHNDOTh";
$tdatadtrsummary2[".googleLikeFields"][] = "DHNDOTh";
$tdatadtrsummary2[".googleLikeFields"][] = "RDNDOTh";
$tdatadtrsummary2[".googleLikeFields"][] = "RHRDOTh";
$tdatadtrsummary2[".googleLikeFields"][] = "SHRDOTh";
$tdatadtrsummary2[".googleLikeFields"][] = "SHRDOTDh";
$tdatadtrsummary2[".googleLikeFields"][] = "DHRDOTh";
$tdatadtrsummary2[".googleLikeFields"][] = "RHRDNDOTh";
$tdatadtrsummary2[".googleLikeFields"][] = "SHRDNDOTh";
$tdatadtrsummary2[".googleLikeFields"][] = "DHRDNDOTh";
$tdatadtrsummary2[".googleLikeFields"][] = "RHh";
$tdatadtrsummary2[".googleLikeFields"][] = "SHh";
$tdatadtrsummary2[".googleLikeFields"][] = "DHh";
$tdatadtrsummary2[".googleLikeFields"][] = "RHRDh";
$tdatadtrsummary2[".googleLikeFields"][] = "SHRDh";
$tdatadtrsummary2[".googleLikeFields"][] = "DHRDh";
$tdatadtrsummary2[".googleLikeFields"][] = "RDOTh";
$tdatadtrsummary2[".googleLikeFields"][] = "RegNDh";
$tdatadtrsummary2[".googleLikeFields"][] = "RegRDh";
$tdatadtrsummary2[".googleLikeFields"][] = "RDNDh";

$tdatadtrsummary2[".panelSearchFields"] = array();
$tdatadtrsummary2[".searchPanelOptions"] = array();
$tdatadtrsummary2[".panelSearchFields"][] = "UserName";
	$tdatadtrsummary2[".panelSearchFields"][] = "Division";
	$tdatadtrsummary2[".panelSearchFields"][] = "WageType";
	$tdatadtrsummary2[".panelSearchFields"][] = "Employer";
	
$tdatadtrsummary2[".advSearchFields"] = array();
$tdatadtrsummary2[".advSearchFields"][] = "RDOTh";
$tdatadtrsummary2[".advSearchFields"][] = "RegNDh";
$tdatadtrsummary2[".advSearchFields"][] = "RegRDh";
$tdatadtrsummary2[".advSearchFields"][] = "RDNDh";
$tdatadtrsummary2[".advSearchFields"][] = "UserName";
$tdatadtrsummary2[".advSearchFields"][] = "Division";
$tdatadtrsummary2[".advSearchFields"][] = "WageType";
$tdatadtrsummary2[".advSearchFields"][] = "Employer";
$tdatadtrsummary2[".advSearchFields"][] = "RHh";
$tdatadtrsummary2[".advSearchFields"][] = "SHh";
$tdatadtrsummary2[".advSearchFields"][] = "DHh";
$tdatadtrsummary2[".advSearchFields"][] = "ExcessHrs";
$tdatadtrsummary2[".advSearchFields"][] = "RegOTh";
$tdatadtrsummary2[".advSearchFields"][] = "RHOTh";
$tdatadtrsummary2[".advSearchFields"][] = "SHOTh";
$tdatadtrsummary2[".advSearchFields"][] = "SHOTDh";
$tdatadtrsummary2[".advSearchFields"][] = "DHOTh";
$tdatadtrsummary2[".advSearchFields"][] = "NDOTh";
$tdatadtrsummary2[".advSearchFields"][] = "RHNDh";
$tdatadtrsummary2[".advSearchFields"][] = "SHNDh";
$tdatadtrsummary2[".advSearchFields"][] = "DHNDh";
$tdatadtrsummary2[".advSearchFields"][] = "RHNDOTh";
$tdatadtrsummary2[".advSearchFields"][] = "SHNDOTh";
$tdatadtrsummary2[".advSearchFields"][] = "DHNDOTh";
$tdatadtrsummary2[".advSearchFields"][] = "RDNDOTh";
$tdatadtrsummary2[".advSearchFields"][] = "RHRDh";
$tdatadtrsummary2[".advSearchFields"][] = "SHRDh";
$tdatadtrsummary2[".advSearchFields"][] = "DHRDh";
$tdatadtrsummary2[".advSearchFields"][] = "RHRDOTh";
$tdatadtrsummary2[".advSearchFields"][] = "SHRDOTh";
$tdatadtrsummary2[".advSearchFields"][] = "SHRDOTDh";
$tdatadtrsummary2[".advSearchFields"][] = "DHRDOTh";
$tdatadtrsummary2[".advSearchFields"][] = "RHRDNDh";
$tdatadtrsummary2[".advSearchFields"][] = "SHRDNDh";
$tdatadtrsummary2[".advSearchFields"][] = "DHRDNDh";
$tdatadtrsummary2[".advSearchFields"][] = "RHRDNDOTh";
$tdatadtrsummary2[".advSearchFields"][] = "SHRDNDOTh";
$tdatadtrsummary2[".advSearchFields"][] = "DHRDNDOTh";

$tdatadtrsummary2[".tableType"] = "list";

$tdatadtrsummary2[".printerPageOrientation"] = 0;
$tdatadtrsummary2[".nPrinterPageScale"] = 100;

$tdatadtrsummary2[".nPrinterSplitRecords"] = 40;

$tdatadtrsummary2[".nPrinterPDFSplitRecords"] = 40;



$tdatadtrsummary2[".geocodingEnabled"] = false;





$tdatadtrsummary2[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatadtrsummary2[".pageSize"] = 20;

$tdatadtrsummary2[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY UserName";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadtrsummary2[".strOrderBy"] = $tstrOrderBy;

$tdatadtrsummary2[".orderindexes"] = array();
	$tdatadtrsummary2[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "UserName");


$tdatadtrsummary2[".sqlHead"] = "SELECT EmployeeID,  UserName,  Division,  WageType,  RegWD,  DWork,  Absent,  TLates,  LateMins,  UndertimeMins,  VLDays,  SLDays,  ELDays,  PLDays,  TrODays,  RLink,  Employer,  ExcessHrs,  RegOTh,  RHOTh,  SHOTh,  SHOTDh,  DHOTh,  NDOTh,  RHNDh,  SHNDh,  DHNDh,  DHRDNDh,  RHRDNDh,  SHRDNDh,  RHNDOTh,  SHNDOTh,  DHNDOTh,  RDNDOTh,  RHRDOTh,  SHRDOTh,  SHRDOTDh,  DHRDOTh,  RHRDNDOTh,  SHRDNDOTh,  DHRDNDOTh,  RHh,  SHh,  DHh,  RHRDh,  SHRDh,  DHRDh,  RDOTh,  RegNDh,  RegRDh,  RDNDh";
$tdatadtrsummary2[".sqlFrom"] = "FROM dtrsummary2";
$tdatadtrsummary2[".sqlWhereExpr"] = "";
$tdatadtrsummary2[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadtrsummary2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadtrsummary2[".arrGroupsPerPage"] = $arrGPP;

$tdatadtrsummary2[".highlightSearchResults"] = true;

$tableKeysdtrsummary2 = array();
$tableKeysdtrsummary2[] = "EmployeeID";
$tdatadtrsummary2[".Keys"] = $tableKeysdtrsummary2;

$tdatadtrsummary2[".listFields"] = array();
$tdatadtrsummary2[".listFields"][] = "EmployeeID";
$tdatadtrsummary2[".listFields"][] = "UserName";
$tdatadtrsummary2[".listFields"][] = "Division";
$tdatadtrsummary2[".listFields"][] = "WageType";
$tdatadtrsummary2[".listFields"][] = "Employer";
$tdatadtrsummary2[".listFields"][] = "RegWD";
$tdatadtrsummary2[".listFields"][] = "DWork";
$tdatadtrsummary2[".listFields"][] = "Absent";
$tdatadtrsummary2[".listFields"][] = "TLates";
$tdatadtrsummary2[".listFields"][] = "LateMins";
$tdatadtrsummary2[".listFields"][] = "UndertimeMins";
$tdatadtrsummary2[".listFields"][] = "VLDays";
$tdatadtrsummary2[".listFields"][] = "SLDays";
$tdatadtrsummary2[".listFields"][] = "ELDays";
$tdatadtrsummary2[".listFields"][] = "PLDays";
$tdatadtrsummary2[".listFields"][] = "TrODays";
$tdatadtrsummary2[".listFields"][] = "RHh";
$tdatadtrsummary2[".listFields"][] = "SHh";
$tdatadtrsummary2[".listFields"][] = "DHh";
$tdatadtrsummary2[".listFields"][] = "RegRDh";
$tdatadtrsummary2[".listFields"][] = "ExcessHrs";
$tdatadtrsummary2[".listFields"][] = "RegOTh";
$tdatadtrsummary2[".listFields"][] = "RHOTh";
$tdatadtrsummary2[".listFields"][] = "SHOTh";
$tdatadtrsummary2[".listFields"][] = "SHOTDh";
$tdatadtrsummary2[".listFields"][] = "RDOTh";
$tdatadtrsummary2[".listFields"][] = "DHOTh";
$tdatadtrsummary2[".listFields"][] = "NDOTh";
$tdatadtrsummary2[".listFields"][] = "RegNDh";
$tdatadtrsummary2[".listFields"][] = "RHNDh";
$tdatadtrsummary2[".listFields"][] = "SHNDh";
$tdatadtrsummary2[".listFields"][] = "DHNDh";
$tdatadtrsummary2[".listFields"][] = "RDNDh";
$tdatadtrsummary2[".listFields"][] = "RHNDOTh";
$tdatadtrsummary2[".listFields"][] = "SHNDOTh";
$tdatadtrsummary2[".listFields"][] = "DHNDOTh";
$tdatadtrsummary2[".listFields"][] = "RDNDOTh";
$tdatadtrsummary2[".listFields"][] = "RHRDh";
$tdatadtrsummary2[".listFields"][] = "SHRDh";
$tdatadtrsummary2[".listFields"][] = "DHRDh";
$tdatadtrsummary2[".listFields"][] = "RHRDOTh";
$tdatadtrsummary2[".listFields"][] = "SHRDOTh";
$tdatadtrsummary2[".listFields"][] = "SHRDOTDh";
$tdatadtrsummary2[".listFields"][] = "DHRDOTh";
$tdatadtrsummary2[".listFields"][] = "RHRDNDh";
$tdatadtrsummary2[".listFields"][] = "SHRDNDh";
$tdatadtrsummary2[".listFields"][] = "DHRDNDh";
$tdatadtrsummary2[".listFields"][] = "RHRDNDOTh";
$tdatadtrsummary2[".listFields"][] = "SHRDNDOTh";
$tdatadtrsummary2[".listFields"][] = "DHRDNDOTh";
$tdatadtrsummary2[".listFields"][] = "RLink";

$tdatadtrsummary2[".hideMobileList"] = array();


$tdatadtrsummary2[".viewFields"] = array();
$tdatadtrsummary2[".viewFields"][] = "RDOTh";
$tdatadtrsummary2[".viewFields"][] = "RegNDh";
$tdatadtrsummary2[".viewFields"][] = "RegRDh";
$tdatadtrsummary2[".viewFields"][] = "RDNDh";
$tdatadtrsummary2[".viewFields"][] = "EmployeeID";
$tdatadtrsummary2[".viewFields"][] = "UserName";
$tdatadtrsummary2[".viewFields"][] = "Division";
$tdatadtrsummary2[".viewFields"][] = "WageType";
$tdatadtrsummary2[".viewFields"][] = "Employer";
$tdatadtrsummary2[".viewFields"][] = "RegWD";
$tdatadtrsummary2[".viewFields"][] = "DWork";
$tdatadtrsummary2[".viewFields"][] = "Absent";
$tdatadtrsummary2[".viewFields"][] = "TLates";
$tdatadtrsummary2[".viewFields"][] = "LateMins";
$tdatadtrsummary2[".viewFields"][] = "UndertimeMins";
$tdatadtrsummary2[".viewFields"][] = "VLDays";
$tdatadtrsummary2[".viewFields"][] = "SLDays";
$tdatadtrsummary2[".viewFields"][] = "ELDays";
$tdatadtrsummary2[".viewFields"][] = "PLDays";
$tdatadtrsummary2[".viewFields"][] = "TrODays";
$tdatadtrsummary2[".viewFields"][] = "RHh";
$tdatadtrsummary2[".viewFields"][] = "SHh";
$tdatadtrsummary2[".viewFields"][] = "DHh";
$tdatadtrsummary2[".viewFields"][] = "ExcessHrs";
$tdatadtrsummary2[".viewFields"][] = "RegOTh";
$tdatadtrsummary2[".viewFields"][] = "RHOTh";
$tdatadtrsummary2[".viewFields"][] = "SHOTh";
$tdatadtrsummary2[".viewFields"][] = "SHOTDh";
$tdatadtrsummary2[".viewFields"][] = "DHOTh";
$tdatadtrsummary2[".viewFields"][] = "NDOTh";
$tdatadtrsummary2[".viewFields"][] = "RHNDh";
$tdatadtrsummary2[".viewFields"][] = "SHNDh";
$tdatadtrsummary2[".viewFields"][] = "DHNDh";
$tdatadtrsummary2[".viewFields"][] = "RHNDOTh";
$tdatadtrsummary2[".viewFields"][] = "SHNDOTh";
$tdatadtrsummary2[".viewFields"][] = "DHNDOTh";
$tdatadtrsummary2[".viewFields"][] = "RDNDOTh";
$tdatadtrsummary2[".viewFields"][] = "RHRDh";
$tdatadtrsummary2[".viewFields"][] = "SHRDh";
$tdatadtrsummary2[".viewFields"][] = "DHRDh";
$tdatadtrsummary2[".viewFields"][] = "RHRDOTh";
$tdatadtrsummary2[".viewFields"][] = "SHRDOTh";
$tdatadtrsummary2[".viewFields"][] = "SHRDOTDh";
$tdatadtrsummary2[".viewFields"][] = "DHRDOTh";
$tdatadtrsummary2[".viewFields"][] = "RHRDNDh";
$tdatadtrsummary2[".viewFields"][] = "SHRDNDh";
$tdatadtrsummary2[".viewFields"][] = "DHRDNDh";
$tdatadtrsummary2[".viewFields"][] = "RHRDNDOTh";
$tdatadtrsummary2[".viewFields"][] = "SHRDNDOTh";
$tdatadtrsummary2[".viewFields"][] = "DHRDNDOTh";
$tdatadtrsummary2[".viewFields"][] = "RLink";

$tdatadtrsummary2[".addFields"] = array();
$tdatadtrsummary2[".addFields"][] = "RDOTh";
$tdatadtrsummary2[".addFields"][] = "RegNDh";
$tdatadtrsummary2[".addFields"][] = "RegRDh";
$tdatadtrsummary2[".addFields"][] = "RDNDh";
$tdatadtrsummary2[".addFields"][] = "RHh";
$tdatadtrsummary2[".addFields"][] = "SHh";
$tdatadtrsummary2[".addFields"][] = "DHh";
$tdatadtrsummary2[".addFields"][] = "ExcessHrs";
$tdatadtrsummary2[".addFields"][] = "RegOTh";
$tdatadtrsummary2[".addFields"][] = "RHOTh";
$tdatadtrsummary2[".addFields"][] = "SHOTh";
$tdatadtrsummary2[".addFields"][] = "SHOTDh";
$tdatadtrsummary2[".addFields"][] = "DHOTh";
$tdatadtrsummary2[".addFields"][] = "NDOTh";
$tdatadtrsummary2[".addFields"][] = "RHNDh";
$tdatadtrsummary2[".addFields"][] = "SHNDh";
$tdatadtrsummary2[".addFields"][] = "DHNDh";
$tdatadtrsummary2[".addFields"][] = "RHNDOTh";
$tdatadtrsummary2[".addFields"][] = "SHNDOTh";
$tdatadtrsummary2[".addFields"][] = "DHNDOTh";
$tdatadtrsummary2[".addFields"][] = "RDNDOTh";
$tdatadtrsummary2[".addFields"][] = "RHRDh";
$tdatadtrsummary2[".addFields"][] = "SHRDh";
$tdatadtrsummary2[".addFields"][] = "DHRDh";
$tdatadtrsummary2[".addFields"][] = "RHRDOTh";
$tdatadtrsummary2[".addFields"][] = "SHRDOTh";
$tdatadtrsummary2[".addFields"][] = "SHRDOTDh";
$tdatadtrsummary2[".addFields"][] = "DHRDOTh";
$tdatadtrsummary2[".addFields"][] = "RHRDNDh";
$tdatadtrsummary2[".addFields"][] = "SHRDNDh";
$tdatadtrsummary2[".addFields"][] = "DHRDNDh";
$tdatadtrsummary2[".addFields"][] = "RHRDNDOTh";
$tdatadtrsummary2[".addFields"][] = "SHRDNDOTh";
$tdatadtrsummary2[".addFields"][] = "DHRDNDOTh";

$tdatadtrsummary2[".masterListFields"] = array();
$tdatadtrsummary2[".masterListFields"][] = "RDOTh";
$tdatadtrsummary2[".masterListFields"][] = "RegNDh";
$tdatadtrsummary2[".masterListFields"][] = "RegRDh";
$tdatadtrsummary2[".masterListFields"][] = "RDNDh";
$tdatadtrsummary2[".masterListFields"][] = "EmployeeID";
$tdatadtrsummary2[".masterListFields"][] = "UserName";
$tdatadtrsummary2[".masterListFields"][] = "Division";
$tdatadtrsummary2[".masterListFields"][] = "WageType";
$tdatadtrsummary2[".masterListFields"][] = "Employer";
$tdatadtrsummary2[".masterListFields"][] = "RegWD";
$tdatadtrsummary2[".masterListFields"][] = "DWork";
$tdatadtrsummary2[".masterListFields"][] = "Absent";
$tdatadtrsummary2[".masterListFields"][] = "TLates";
$tdatadtrsummary2[".masterListFields"][] = "LateMins";
$tdatadtrsummary2[".masterListFields"][] = "UndertimeMins";
$tdatadtrsummary2[".masterListFields"][] = "VLDays";
$tdatadtrsummary2[".masterListFields"][] = "SLDays";
$tdatadtrsummary2[".masterListFields"][] = "ELDays";
$tdatadtrsummary2[".masterListFields"][] = "PLDays";
$tdatadtrsummary2[".masterListFields"][] = "TrODays";
$tdatadtrsummary2[".masterListFields"][] = "RHh";
$tdatadtrsummary2[".masterListFields"][] = "SHh";
$tdatadtrsummary2[".masterListFields"][] = "DHh";
$tdatadtrsummary2[".masterListFields"][] = "ExcessHrs";
$tdatadtrsummary2[".masterListFields"][] = "RegOTh";
$tdatadtrsummary2[".masterListFields"][] = "RHOTh";
$tdatadtrsummary2[".masterListFields"][] = "SHOTh";
$tdatadtrsummary2[".masterListFields"][] = "SHOTDh";
$tdatadtrsummary2[".masterListFields"][] = "DHOTh";
$tdatadtrsummary2[".masterListFields"][] = "NDOTh";
$tdatadtrsummary2[".masterListFields"][] = "RHNDh";
$tdatadtrsummary2[".masterListFields"][] = "SHNDh";
$tdatadtrsummary2[".masterListFields"][] = "DHNDh";
$tdatadtrsummary2[".masterListFields"][] = "RHNDOTh";
$tdatadtrsummary2[".masterListFields"][] = "SHNDOTh";
$tdatadtrsummary2[".masterListFields"][] = "DHNDOTh";
$tdatadtrsummary2[".masterListFields"][] = "RDNDOTh";
$tdatadtrsummary2[".masterListFields"][] = "RHRDh";
$tdatadtrsummary2[".masterListFields"][] = "SHRDh";
$tdatadtrsummary2[".masterListFields"][] = "DHRDh";
$tdatadtrsummary2[".masterListFields"][] = "RHRDOTh";
$tdatadtrsummary2[".masterListFields"][] = "SHRDOTh";
$tdatadtrsummary2[".masterListFields"][] = "SHRDOTDh";
$tdatadtrsummary2[".masterListFields"][] = "DHRDOTh";
$tdatadtrsummary2[".masterListFields"][] = "RHRDNDh";
$tdatadtrsummary2[".masterListFields"][] = "SHRDNDh";
$tdatadtrsummary2[".masterListFields"][] = "DHRDNDh";
$tdatadtrsummary2[".masterListFields"][] = "RHRDNDOTh";
$tdatadtrsummary2[".masterListFields"][] = "SHRDNDOTh";
$tdatadtrsummary2[".masterListFields"][] = "DHRDNDOTh";
$tdatadtrsummary2[".masterListFields"][] = "RLink";

$tdatadtrsummary2[".inlineAddFields"] = array();
$tdatadtrsummary2[".inlineAddFields"][] = "RHh";
$tdatadtrsummary2[".inlineAddFields"][] = "SHh";
$tdatadtrsummary2[".inlineAddFields"][] = "DHh";
$tdatadtrsummary2[".inlineAddFields"][] = "RegRDh";
$tdatadtrsummary2[".inlineAddFields"][] = "ExcessHrs";
$tdatadtrsummary2[".inlineAddFields"][] = "RegOTh";
$tdatadtrsummary2[".inlineAddFields"][] = "RHOTh";
$tdatadtrsummary2[".inlineAddFields"][] = "SHOTh";
$tdatadtrsummary2[".inlineAddFields"][] = "SHOTDh";
$tdatadtrsummary2[".inlineAddFields"][] = "RDOTh";
$tdatadtrsummary2[".inlineAddFields"][] = "DHOTh";
$tdatadtrsummary2[".inlineAddFields"][] = "NDOTh";
$tdatadtrsummary2[".inlineAddFields"][] = "RegNDh";
$tdatadtrsummary2[".inlineAddFields"][] = "RHNDh";
$tdatadtrsummary2[".inlineAddFields"][] = "SHNDh";
$tdatadtrsummary2[".inlineAddFields"][] = "DHNDh";
$tdatadtrsummary2[".inlineAddFields"][] = "RDNDh";
$tdatadtrsummary2[".inlineAddFields"][] = "RHNDOTh";
$tdatadtrsummary2[".inlineAddFields"][] = "SHNDOTh";
$tdatadtrsummary2[".inlineAddFields"][] = "DHNDOTh";
$tdatadtrsummary2[".inlineAddFields"][] = "RDNDOTh";
$tdatadtrsummary2[".inlineAddFields"][] = "RHRDh";
$tdatadtrsummary2[".inlineAddFields"][] = "SHRDh";
$tdatadtrsummary2[".inlineAddFields"][] = "DHRDh";
$tdatadtrsummary2[".inlineAddFields"][] = "RHRDOTh";
$tdatadtrsummary2[".inlineAddFields"][] = "SHRDOTh";
$tdatadtrsummary2[".inlineAddFields"][] = "SHRDOTDh";
$tdatadtrsummary2[".inlineAddFields"][] = "DHRDOTh";
$tdatadtrsummary2[".inlineAddFields"][] = "RHRDNDh";
$tdatadtrsummary2[".inlineAddFields"][] = "SHRDNDh";
$tdatadtrsummary2[".inlineAddFields"][] = "DHRDNDh";
$tdatadtrsummary2[".inlineAddFields"][] = "RHRDNDOTh";
$tdatadtrsummary2[".inlineAddFields"][] = "SHRDNDOTh";
$tdatadtrsummary2[".inlineAddFields"][] = "DHRDNDOTh";

$tdatadtrsummary2[".editFields"] = array();
$tdatadtrsummary2[".editFields"][] = "RDOTh";
$tdatadtrsummary2[".editFields"][] = "RegNDh";
$tdatadtrsummary2[".editFields"][] = "RegRDh";
$tdatadtrsummary2[".editFields"][] = "RDNDh";
$tdatadtrsummary2[".editFields"][] = "RHh";
$tdatadtrsummary2[".editFields"][] = "SHh";
$tdatadtrsummary2[".editFields"][] = "DHh";
$tdatadtrsummary2[".editFields"][] = "ExcessHrs";
$tdatadtrsummary2[".editFields"][] = "RegOTh";
$tdatadtrsummary2[".editFields"][] = "RHOTh";
$tdatadtrsummary2[".editFields"][] = "SHOTh";
$tdatadtrsummary2[".editFields"][] = "SHOTDh";
$tdatadtrsummary2[".editFields"][] = "DHOTh";
$tdatadtrsummary2[".editFields"][] = "NDOTh";
$tdatadtrsummary2[".editFields"][] = "RHNDh";
$tdatadtrsummary2[".editFields"][] = "SHNDh";
$tdatadtrsummary2[".editFields"][] = "DHNDh";
$tdatadtrsummary2[".editFields"][] = "RHNDOTh";
$tdatadtrsummary2[".editFields"][] = "SHNDOTh";
$tdatadtrsummary2[".editFields"][] = "DHNDOTh";
$tdatadtrsummary2[".editFields"][] = "RDNDOTh";
$tdatadtrsummary2[".editFields"][] = "RHRDh";
$tdatadtrsummary2[".editFields"][] = "SHRDh";
$tdatadtrsummary2[".editFields"][] = "DHRDh";
$tdatadtrsummary2[".editFields"][] = "RHRDOTh";
$tdatadtrsummary2[".editFields"][] = "SHRDOTh";
$tdatadtrsummary2[".editFields"][] = "SHRDOTDh";
$tdatadtrsummary2[".editFields"][] = "DHRDOTh";
$tdatadtrsummary2[".editFields"][] = "RHRDNDh";
$tdatadtrsummary2[".editFields"][] = "SHRDNDh";
$tdatadtrsummary2[".editFields"][] = "DHRDNDh";
$tdatadtrsummary2[".editFields"][] = "RHRDNDOTh";
$tdatadtrsummary2[".editFields"][] = "SHRDNDOTh";
$tdatadtrsummary2[".editFields"][] = "DHRDNDOTh";

$tdatadtrsummary2[".inlineEditFields"] = array();
$tdatadtrsummary2[".inlineEditFields"][] = "RHh";
$tdatadtrsummary2[".inlineEditFields"][] = "SHh";
$tdatadtrsummary2[".inlineEditFields"][] = "DHh";
$tdatadtrsummary2[".inlineEditFields"][] = "RegRDh";
$tdatadtrsummary2[".inlineEditFields"][] = "ExcessHrs";
$tdatadtrsummary2[".inlineEditFields"][] = "RegOTh";
$tdatadtrsummary2[".inlineEditFields"][] = "RHOTh";
$tdatadtrsummary2[".inlineEditFields"][] = "SHOTh";
$tdatadtrsummary2[".inlineEditFields"][] = "SHOTDh";
$tdatadtrsummary2[".inlineEditFields"][] = "RDOTh";
$tdatadtrsummary2[".inlineEditFields"][] = "DHOTh";
$tdatadtrsummary2[".inlineEditFields"][] = "NDOTh";
$tdatadtrsummary2[".inlineEditFields"][] = "RegNDh";
$tdatadtrsummary2[".inlineEditFields"][] = "RHNDh";
$tdatadtrsummary2[".inlineEditFields"][] = "SHNDh";
$tdatadtrsummary2[".inlineEditFields"][] = "DHNDh";
$tdatadtrsummary2[".inlineEditFields"][] = "RDNDh";
$tdatadtrsummary2[".inlineEditFields"][] = "RHNDOTh";
$tdatadtrsummary2[".inlineEditFields"][] = "SHNDOTh";
$tdatadtrsummary2[".inlineEditFields"][] = "DHNDOTh";
$tdatadtrsummary2[".inlineEditFields"][] = "RDNDOTh";
$tdatadtrsummary2[".inlineEditFields"][] = "RHRDh";
$tdatadtrsummary2[".inlineEditFields"][] = "SHRDh";
$tdatadtrsummary2[".inlineEditFields"][] = "DHRDh";
$tdatadtrsummary2[".inlineEditFields"][] = "RHRDOTh";
$tdatadtrsummary2[".inlineEditFields"][] = "SHRDOTh";
$tdatadtrsummary2[".inlineEditFields"][] = "SHRDOTDh";
$tdatadtrsummary2[".inlineEditFields"][] = "DHRDOTh";
$tdatadtrsummary2[".inlineEditFields"][] = "RHRDNDh";
$tdatadtrsummary2[".inlineEditFields"][] = "SHRDNDh";
$tdatadtrsummary2[".inlineEditFields"][] = "DHRDNDh";
$tdatadtrsummary2[".inlineEditFields"][] = "RHRDNDOTh";
$tdatadtrsummary2[".inlineEditFields"][] = "SHRDNDOTh";
$tdatadtrsummary2[".inlineEditFields"][] = "DHRDNDOTh";

$tdatadtrsummary2[".updateSelectedFields"] = array();
$tdatadtrsummary2[".updateSelectedFields"][] = "RDOTh";
$tdatadtrsummary2[".updateSelectedFields"][] = "RegNDh";
$tdatadtrsummary2[".updateSelectedFields"][] = "RegRDh";
$tdatadtrsummary2[".updateSelectedFields"][] = "RDNDh";
$tdatadtrsummary2[".updateSelectedFields"][] = "RHh";
$tdatadtrsummary2[".updateSelectedFields"][] = "SHh";
$tdatadtrsummary2[".updateSelectedFields"][] = "DHh";
$tdatadtrsummary2[".updateSelectedFields"][] = "ExcessHrs";
$tdatadtrsummary2[".updateSelectedFields"][] = "RegOTh";
$tdatadtrsummary2[".updateSelectedFields"][] = "RHOTh";
$tdatadtrsummary2[".updateSelectedFields"][] = "SHOTh";
$tdatadtrsummary2[".updateSelectedFields"][] = "SHOTDh";
$tdatadtrsummary2[".updateSelectedFields"][] = "DHOTh";
$tdatadtrsummary2[".updateSelectedFields"][] = "NDOTh";
$tdatadtrsummary2[".updateSelectedFields"][] = "RHNDh";
$tdatadtrsummary2[".updateSelectedFields"][] = "SHNDh";
$tdatadtrsummary2[".updateSelectedFields"][] = "DHNDh";
$tdatadtrsummary2[".updateSelectedFields"][] = "RHNDOTh";
$tdatadtrsummary2[".updateSelectedFields"][] = "SHNDOTh";
$tdatadtrsummary2[".updateSelectedFields"][] = "DHNDOTh";
$tdatadtrsummary2[".updateSelectedFields"][] = "RDNDOTh";
$tdatadtrsummary2[".updateSelectedFields"][] = "RHRDh";
$tdatadtrsummary2[".updateSelectedFields"][] = "SHRDh";
$tdatadtrsummary2[".updateSelectedFields"][] = "DHRDh";
$tdatadtrsummary2[".updateSelectedFields"][] = "RHRDOTh";
$tdatadtrsummary2[".updateSelectedFields"][] = "SHRDOTh";
$tdatadtrsummary2[".updateSelectedFields"][] = "SHRDOTDh";
$tdatadtrsummary2[".updateSelectedFields"][] = "DHRDOTh";
$tdatadtrsummary2[".updateSelectedFields"][] = "RHRDNDh";
$tdatadtrsummary2[".updateSelectedFields"][] = "SHRDNDh";
$tdatadtrsummary2[".updateSelectedFields"][] = "DHRDNDh";
$tdatadtrsummary2[".updateSelectedFields"][] = "RHRDNDOTh";
$tdatadtrsummary2[".updateSelectedFields"][] = "SHRDNDOTh";
$tdatadtrsummary2[".updateSelectedFields"][] = "DHRDNDOTh";


$tdatadtrsummary2[".exportFields"] = array();
$tdatadtrsummary2[".exportFields"][] = "RDOTh";
$tdatadtrsummary2[".exportFields"][] = "RegNDh";
$tdatadtrsummary2[".exportFields"][] = "RegRDh";
$tdatadtrsummary2[".exportFields"][] = "RDNDh";
$tdatadtrsummary2[".exportFields"][] = "EmployeeID";
$tdatadtrsummary2[".exportFields"][] = "UserName";
$tdatadtrsummary2[".exportFields"][] = "Division";
$tdatadtrsummary2[".exportFields"][] = "WageType";
$tdatadtrsummary2[".exportFields"][] = "Employer";
$tdatadtrsummary2[".exportFields"][] = "RegWD";
$tdatadtrsummary2[".exportFields"][] = "DWork";
$tdatadtrsummary2[".exportFields"][] = "Absent";
$tdatadtrsummary2[".exportFields"][] = "TLates";
$tdatadtrsummary2[".exportFields"][] = "LateMins";
$tdatadtrsummary2[".exportFields"][] = "UndertimeMins";
$tdatadtrsummary2[".exportFields"][] = "VLDays";
$tdatadtrsummary2[".exportFields"][] = "SLDays";
$tdatadtrsummary2[".exportFields"][] = "ELDays";
$tdatadtrsummary2[".exportFields"][] = "PLDays";
$tdatadtrsummary2[".exportFields"][] = "TrODays";
$tdatadtrsummary2[".exportFields"][] = "RHh";
$tdatadtrsummary2[".exportFields"][] = "SHh";
$tdatadtrsummary2[".exportFields"][] = "DHh";
$tdatadtrsummary2[".exportFields"][] = "ExcessHrs";
$tdatadtrsummary2[".exportFields"][] = "RegOTh";
$tdatadtrsummary2[".exportFields"][] = "RHOTh";
$tdatadtrsummary2[".exportFields"][] = "SHOTh";
$tdatadtrsummary2[".exportFields"][] = "SHOTDh";
$tdatadtrsummary2[".exportFields"][] = "DHOTh";
$tdatadtrsummary2[".exportFields"][] = "NDOTh";
$tdatadtrsummary2[".exportFields"][] = "RHNDh";
$tdatadtrsummary2[".exportFields"][] = "SHNDh";
$tdatadtrsummary2[".exportFields"][] = "DHNDh";
$tdatadtrsummary2[".exportFields"][] = "RHNDOTh";
$tdatadtrsummary2[".exportFields"][] = "SHNDOTh";
$tdatadtrsummary2[".exportFields"][] = "DHNDOTh";
$tdatadtrsummary2[".exportFields"][] = "RDNDOTh";
$tdatadtrsummary2[".exportFields"][] = "RHRDh";
$tdatadtrsummary2[".exportFields"][] = "SHRDh";
$tdatadtrsummary2[".exportFields"][] = "DHRDh";
$tdatadtrsummary2[".exportFields"][] = "RHRDOTh";
$tdatadtrsummary2[".exportFields"][] = "SHRDOTh";
$tdatadtrsummary2[".exportFields"][] = "SHRDOTDh";
$tdatadtrsummary2[".exportFields"][] = "DHRDOTh";
$tdatadtrsummary2[".exportFields"][] = "RHRDNDh";
$tdatadtrsummary2[".exportFields"][] = "SHRDNDh";
$tdatadtrsummary2[".exportFields"][] = "DHRDNDh";
$tdatadtrsummary2[".exportFields"][] = "RHRDNDOTh";
$tdatadtrsummary2[".exportFields"][] = "SHRDNDOTh";
$tdatadtrsummary2[".exportFields"][] = "DHRDNDOTh";
$tdatadtrsummary2[".exportFields"][] = "RLink";

$tdatadtrsummary2[".importFields"] = array();
$tdatadtrsummary2[".importFields"][] = "ExcessHrs";
$tdatadtrsummary2[".importFields"][] = "RegOTh";
$tdatadtrsummary2[".importFields"][] = "RHOTh";
$tdatadtrsummary2[".importFields"][] = "SHOTh";
$tdatadtrsummary2[".importFields"][] = "SHOTDh";
$tdatadtrsummary2[".importFields"][] = "DHOTh";
$tdatadtrsummary2[".importFields"][] = "NDOTh";
$tdatadtrsummary2[".importFields"][] = "RHNDh";
$tdatadtrsummary2[".importFields"][] = "SHNDh";
$tdatadtrsummary2[".importFields"][] = "DHNDh";
$tdatadtrsummary2[".importFields"][] = "DHRDNDh";
$tdatadtrsummary2[".importFields"][] = "RHRDNDh";
$tdatadtrsummary2[".importFields"][] = "SHRDNDh";
$tdatadtrsummary2[".importFields"][] = "RHNDOTh";
$tdatadtrsummary2[".importFields"][] = "SHNDOTh";
$tdatadtrsummary2[".importFields"][] = "DHNDOTh";
$tdatadtrsummary2[".importFields"][] = "RDNDOTh";
$tdatadtrsummary2[".importFields"][] = "RHRDOTh";
$tdatadtrsummary2[".importFields"][] = "SHRDOTh";
$tdatadtrsummary2[".importFields"][] = "SHRDOTDh";
$tdatadtrsummary2[".importFields"][] = "DHRDOTh";
$tdatadtrsummary2[".importFields"][] = "RHRDNDOTh";
$tdatadtrsummary2[".importFields"][] = "SHRDNDOTh";
$tdatadtrsummary2[".importFields"][] = "DHRDNDOTh";
$tdatadtrsummary2[".importFields"][] = "RHh";
$tdatadtrsummary2[".importFields"][] = "SHh";
$tdatadtrsummary2[".importFields"][] = "DHh";
$tdatadtrsummary2[".importFields"][] = "RHRDh";
$tdatadtrsummary2[".importFields"][] = "SHRDh";
$tdatadtrsummary2[".importFields"][] = "DHRDh";
$tdatadtrsummary2[".importFields"][] = "RDOTh";
$tdatadtrsummary2[".importFields"][] = "RegNDh";
$tdatadtrsummary2[".importFields"][] = "RegRDh";
$tdatadtrsummary2[".importFields"][] = "RDNDh";

$tdatadtrsummary2[".printFields"] = array();
$tdatadtrsummary2[".printFields"][] = "RDOTh";
$tdatadtrsummary2[".printFields"][] = "RegNDh";
$tdatadtrsummary2[".printFields"][] = "RegRDh";
$tdatadtrsummary2[".printFields"][] = "RDNDh";
$tdatadtrsummary2[".printFields"][] = "EmployeeID";
$tdatadtrsummary2[".printFields"][] = "UserName";
$tdatadtrsummary2[".printFields"][] = "Division";
$tdatadtrsummary2[".printFields"][] = "WageType";
$tdatadtrsummary2[".printFields"][] = "Employer";
$tdatadtrsummary2[".printFields"][] = "RegWD";
$tdatadtrsummary2[".printFields"][] = "DWork";
$tdatadtrsummary2[".printFields"][] = "Absent";
$tdatadtrsummary2[".printFields"][] = "TLates";
$tdatadtrsummary2[".printFields"][] = "LateMins";
$tdatadtrsummary2[".printFields"][] = "UndertimeMins";
$tdatadtrsummary2[".printFields"][] = "VLDays";
$tdatadtrsummary2[".printFields"][] = "SLDays";
$tdatadtrsummary2[".printFields"][] = "ELDays";
$tdatadtrsummary2[".printFields"][] = "PLDays";
$tdatadtrsummary2[".printFields"][] = "TrODays";
$tdatadtrsummary2[".printFields"][] = "RHh";
$tdatadtrsummary2[".printFields"][] = "SHh";
$tdatadtrsummary2[".printFields"][] = "DHh";
$tdatadtrsummary2[".printFields"][] = "ExcessHrs";
$tdatadtrsummary2[".printFields"][] = "RegOTh";
$tdatadtrsummary2[".printFields"][] = "RHOTh";
$tdatadtrsummary2[".printFields"][] = "SHOTh";
$tdatadtrsummary2[".printFields"][] = "SHOTDh";
$tdatadtrsummary2[".printFields"][] = "DHOTh";
$tdatadtrsummary2[".printFields"][] = "NDOTh";
$tdatadtrsummary2[".printFields"][] = "RHNDh";
$tdatadtrsummary2[".printFields"][] = "SHNDh";
$tdatadtrsummary2[".printFields"][] = "DHNDh";
$tdatadtrsummary2[".printFields"][] = "RHNDOTh";
$tdatadtrsummary2[".printFields"][] = "SHNDOTh";
$tdatadtrsummary2[".printFields"][] = "DHNDOTh";
$tdatadtrsummary2[".printFields"][] = "RDNDOTh";
$tdatadtrsummary2[".printFields"][] = "RHRDh";
$tdatadtrsummary2[".printFields"][] = "SHRDh";
$tdatadtrsummary2[".printFields"][] = "DHRDh";
$tdatadtrsummary2[".printFields"][] = "RHRDOTh";
$tdatadtrsummary2[".printFields"][] = "SHRDOTh";
$tdatadtrsummary2[".printFields"][] = "SHRDOTDh";
$tdatadtrsummary2[".printFields"][] = "DHRDOTh";
$tdatadtrsummary2[".printFields"][] = "RHRDNDh";
$tdatadtrsummary2[".printFields"][] = "SHRDNDh";
$tdatadtrsummary2[".printFields"][] = "DHRDNDh";
$tdatadtrsummary2[".printFields"][] = "RHRDNDOTh";
$tdatadtrsummary2[".printFields"][] = "SHRDNDOTh";
$tdatadtrsummary2[".printFields"][] = "DHRDNDOTh";
$tdatadtrsummary2[".printFields"][] = "RLink";


//	EmployeeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EmployeeID";
	$fdata["GoodName"] = "EmployeeID";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","EmployeeID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatadtrsummary2["EmployeeID"] = $fdata;
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","UserName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatadtrsummary2["UserName"] = $fdata;
//	Division
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Division";
	$fdata["GoodName"] = "Division";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","Division");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatadtrsummary2["Division"] = $fdata;
//	WageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "WageType";
	$fdata["GoodName"] = "WageType";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","WageType");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatadtrsummary2["WageType"] = $fdata;
//	RegWD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "RegWD";
	$fdata["GoodName"] = "RegWD";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RegWD");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatadtrsummary2["RegWD"] = $fdata;
//	DWork
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DWork";
	$fdata["GoodName"] = "DWork";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","DWork");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatadtrsummary2["DWork"] = $fdata;
//	Absent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Absent";
	$fdata["GoodName"] = "Absent";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","Absent");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatadtrsummary2["Absent"] = $fdata;
//	TLates
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "TLates";
	$fdata["GoodName"] = "TLates";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","TLates");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TLates";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TLates";

	
	
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








	$tdatadtrsummary2["TLates"] = $fdata;
//	LateMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "LateMins";
	$fdata["GoodName"] = "LateMins";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","LateMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatadtrsummary2["LateMins"] = $fdata;
//	UndertimeMins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "UndertimeMins";
	$fdata["GoodName"] = "UndertimeMins";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","UndertimeMins");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatadtrsummary2["UndertimeMins"] = $fdata;
//	VLDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "VLDays";
	$fdata["GoodName"] = "VLDays";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","VLDays");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatadtrsummary2["VLDays"] = $fdata;
//	SLDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "SLDays";
	$fdata["GoodName"] = "SLDays";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","SLDays");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatadtrsummary2["SLDays"] = $fdata;
//	ELDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ELDays";
	$fdata["GoodName"] = "ELDays";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","ELDays");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatadtrsummary2["ELDays"] = $fdata;
//	PLDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "PLDays";
	$fdata["GoodName"] = "PLDays";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","PLDays");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatadtrsummary2["PLDays"] = $fdata;
//	TrODays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "TrODays";
	$fdata["GoodName"] = "TrODays";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","TrODays");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatadtrsummary2["TrODays"] = $fdata;
//	RLink
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "RLink";
	$fdata["GoodName"] = "RLink";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RLink");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatadtrsummary2["RLink"] = $fdata;
//	Employer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Employer";
	$fdata["GoodName"] = "Employer";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","Employer");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatadtrsummary2["Employer"] = $fdata;
//	ExcessHrs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "ExcessHrs";
	$fdata["GoodName"] = "ExcessHrs";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","ExcessHrs");
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




	$tdatadtrsummary2["ExcessHrs"] = $fdata;
//	RegOTh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "RegOTh";
	$fdata["GoodName"] = "RegOTh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RegOTh");
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

		$fdata["strField"] = "RegOTh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegOTh";

	
	
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




	$tdatadtrsummary2["RegOTh"] = $fdata;
//	RHOTh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "RHOTh";
	$fdata["GoodName"] = "RHOTh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RHOTh");
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

		$fdata["strField"] = "RHOTh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHOTh";

	
	
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




	$tdatadtrsummary2["RHOTh"] = $fdata;
//	SHOTh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "SHOTh";
	$fdata["GoodName"] = "SHOTh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","SHOTh");
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

		$fdata["strField"] = "SHOTh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHOTh";

	
	
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




	$tdatadtrsummary2["SHOTh"] = $fdata;
//	SHOTDh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "SHOTDh";
	$fdata["GoodName"] = "SHOTDh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","SHOTDh");
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

		$fdata["strField"] = "SHOTDh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHOTDh";

	
	
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




	$tdatadtrsummary2["SHOTDh"] = $fdata;
//	DHOTh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "DHOTh";
	$fdata["GoodName"] = "DHOTh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","DHOTh");
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

		$fdata["strField"] = "DHOTh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHOTh";

	
	
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




	$tdatadtrsummary2["DHOTh"] = $fdata;
//	NDOTh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "NDOTh";
	$fdata["GoodName"] = "NDOTh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","NDOTh");
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

		$fdata["strField"] = "NDOTh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NDOTh";

	
	
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




	$tdatadtrsummary2["NDOTh"] = $fdata;
//	RHNDh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "RHNDh";
	$fdata["GoodName"] = "RHNDh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RHNDh");
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

		$fdata["strField"] = "RHNDh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHNDh";

	
	
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




	$tdatadtrsummary2["RHNDh"] = $fdata;
//	SHNDh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "SHNDh";
	$fdata["GoodName"] = "SHNDh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","SHNDh");
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

		$fdata["strField"] = "SHNDh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHNDh";

	
	
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




	$tdatadtrsummary2["SHNDh"] = $fdata;
//	DHNDh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "DHNDh";
	$fdata["GoodName"] = "DHNDh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","DHNDh");
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

		$fdata["strField"] = "DHNDh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHNDh";

	
	
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




	$tdatadtrsummary2["DHNDh"] = $fdata;
//	DHRDNDh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "DHRDNDh";
	$fdata["GoodName"] = "DHRDNDh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","DHRDNDh");
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

		$fdata["strField"] = "DHRDNDh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHRDNDh";

	
	
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




	$tdatadtrsummary2["DHRDNDh"] = $fdata;
//	RHRDNDh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "RHRDNDh";
	$fdata["GoodName"] = "RHRDNDh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RHRDNDh");
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

		$fdata["strField"] = "RHRDNDh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHRDNDh";

	
	
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




	$tdatadtrsummary2["RHRDNDh"] = $fdata;
//	SHRDNDh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "SHRDNDh";
	$fdata["GoodName"] = "SHRDNDh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","SHRDNDh");
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

		$fdata["strField"] = "SHRDNDh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHRDNDh";

	
	
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




	$tdatadtrsummary2["SHRDNDh"] = $fdata;
//	RHNDOTh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "RHNDOTh";
	$fdata["GoodName"] = "RHNDOTh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RHNDOTh");
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

		$fdata["strField"] = "RHNDOTh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHNDOTh";

	
	
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




	$tdatadtrsummary2["RHNDOTh"] = $fdata;
//	SHNDOTh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "SHNDOTh";
	$fdata["GoodName"] = "SHNDOTh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","SHNDOTh");
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

		$fdata["strField"] = "SHNDOTh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHNDOTh";

	
	
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




	$tdatadtrsummary2["SHNDOTh"] = $fdata;
//	DHNDOTh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "DHNDOTh";
	$fdata["GoodName"] = "DHNDOTh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","DHNDOTh");
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

		$fdata["strField"] = "DHNDOTh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHNDOTh";

	
	
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




	$tdatadtrsummary2["DHNDOTh"] = $fdata;
//	RDNDOTh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "RDNDOTh";
	$fdata["GoodName"] = "RDNDOTh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RDNDOTh");
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

		$fdata["strField"] = "RDNDOTh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RDNDOTh";

	
	
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




	$tdatadtrsummary2["RDNDOTh"] = $fdata;
//	RHRDOTh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "RHRDOTh";
	$fdata["GoodName"] = "RHRDOTh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RHRDOTh");
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

		$fdata["strField"] = "RHRDOTh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHRDOTh";

	
	
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




	$tdatadtrsummary2["RHRDOTh"] = $fdata;
//	SHRDOTh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "SHRDOTh";
	$fdata["GoodName"] = "SHRDOTh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","SHRDOTh");
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

		$fdata["strField"] = "SHRDOTh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHRDOTh";

	
	
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




	$tdatadtrsummary2["SHRDOTh"] = $fdata;
//	SHRDOTDh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "SHRDOTDh";
	$fdata["GoodName"] = "SHRDOTDh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","SHRDOTDh");
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

		$fdata["strField"] = "SHRDOTDh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHRDOTDh";

	
	
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




	$tdatadtrsummary2["SHRDOTDh"] = $fdata;
//	DHRDOTh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "DHRDOTh";
	$fdata["GoodName"] = "DHRDOTh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","DHRDOTh");
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

		$fdata["strField"] = "DHRDOTh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHRDOTh";

	
	
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




	$tdatadtrsummary2["DHRDOTh"] = $fdata;
//	RHRDNDOTh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "RHRDNDOTh";
	$fdata["GoodName"] = "RHRDNDOTh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RHRDNDOTh");
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

		$fdata["strField"] = "RHRDNDOTh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHRDNDOTh";

	
	
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




	$tdatadtrsummary2["RHRDNDOTh"] = $fdata;
//	SHRDNDOTh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "SHRDNDOTh";
	$fdata["GoodName"] = "SHRDNDOTh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","SHRDNDOTh");
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

		$fdata["strField"] = "SHRDNDOTh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHRDNDOTh";

	
	
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




	$tdatadtrsummary2["SHRDNDOTh"] = $fdata;
//	DHRDNDOTh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "DHRDNDOTh";
	$fdata["GoodName"] = "DHRDNDOTh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","DHRDNDOTh");
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

		$fdata["strField"] = "DHRDNDOTh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHRDNDOTh";

	
	
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




	$tdatadtrsummary2["DHRDNDOTh"] = $fdata;
//	RHh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "RHh";
	$fdata["GoodName"] = "RHh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RHh");
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

		$fdata["strField"] = "RHh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHh";

	
	
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




	$tdatadtrsummary2["RHh"] = $fdata;
//	SHh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "SHh";
	$fdata["GoodName"] = "SHh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","SHh");
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

		$fdata["strField"] = "SHh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHh";

	
	
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




	$tdatadtrsummary2["SHh"] = $fdata;
//	DHh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "DHh";
	$fdata["GoodName"] = "DHh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","DHh");
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

		$fdata["strField"] = "DHh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHh";

	
	
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




	$tdatadtrsummary2["DHh"] = $fdata;
//	RHRDh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "RHRDh";
	$fdata["GoodName"] = "RHRDh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RHRDh");
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

		$fdata["strField"] = "RHRDh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RHRDh";

	
	
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




	$tdatadtrsummary2["RHRDh"] = $fdata;
//	SHRDh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "SHRDh";
	$fdata["GoodName"] = "SHRDh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","SHRDh");
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

		$fdata["strField"] = "SHRDh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHRDh";

	
	
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




	$tdatadtrsummary2["SHRDh"] = $fdata;
//	DHRDh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "DHRDh";
	$fdata["GoodName"] = "DHRDh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","DHRDh");
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

		$fdata["strField"] = "DHRDh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DHRDh";

	
	
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




	$tdatadtrsummary2["DHRDh"] = $fdata;
//	RDOTh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "RDOTh";
	$fdata["GoodName"] = "RDOTh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RDOTh");
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

		$fdata["strField"] = "RDOTh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RDOTh";

	
	
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




	$tdatadtrsummary2["RDOTh"] = $fdata;
//	RegNDh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "RegNDh";
	$fdata["GoodName"] = "RegNDh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RegNDh");
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

		$fdata["strField"] = "RegNDh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegNDh";

	
	
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




	$tdatadtrsummary2["RegNDh"] = $fdata;
//	RegRDh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "RegRDh";
	$fdata["GoodName"] = "RegRDh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RegRDh");
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

		$fdata["strField"] = "RegRDh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegRDh";

	
	
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




	$tdatadtrsummary2["RegRDh"] = $fdata;
//	RDNDh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "RDNDh";
	$fdata["GoodName"] = "RDNDh";
	$fdata["ownerTable"] = "dtrsummary2";
	$fdata["Label"] = GetFieldLabel("dtrsummary2","RDNDh");
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

		$fdata["strField"] = "RDNDh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RDNDh";

	
	
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




	$tdatadtrsummary2["RDNDh"] = $fdata;


$tables_data["dtrsummary2"]=&$tdatadtrsummary2;
$field_labels["dtrsummary2"] = &$fieldLabelsdtrsummary2;
$fieldToolTips["dtrsummary2"] = &$fieldToolTipsdtrsummary2;
$placeHolders["dtrsummary2"] = &$placeHoldersdtrsummary2;
$page_titles["dtrsummary2"] = &$pageTitlesdtrsummary2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dtrsummary2"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dtrsummary2"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_dtrsummary2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EmployeeID,  UserName,  Division,  WageType,  RegWD,  DWork,  Absent,  TLates,  LateMins,  UndertimeMins,  VLDays,  SLDays,  ELDays,  PLDays,  TrODays,  RLink,  Employer,  ExcessHrs,  RegOTh,  RHOTh,  SHOTh,  SHOTDh,  DHOTh,  NDOTh,  RHNDh,  SHNDh,  DHNDh,  DHRDNDh,  RHRDNDh,  SHRDNDh,  RHNDOTh,  SHNDOTh,  DHNDOTh,  RDNDOTh,  RHRDOTh,  SHRDOTh,  SHRDOTDh,  DHRDOTh,  RHRDNDOTh,  SHRDNDOTh,  DHRDNDOTh,  RHh,  SHh,  DHh,  RHRDh,  SHRDh,  DHRDh,  RDOTh,  RegNDh,  RegRDh,  RDNDh";
$proto0["m_strFrom"] = "FROM dtrsummary2";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY UserName";
	
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
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto6["m_sql"] = "EmployeeID";
$proto6["m_srcTableName"] = "dtrsummary2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto8["m_sql"] = "UserName";
$proto8["m_srcTableName"] = "dtrsummary2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Division",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto10["m_sql"] = "Division";
$proto10["m_srcTableName"] = "dtrsummary2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "WageType",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto12["m_sql"] = "WageType";
$proto12["m_srcTableName"] = "dtrsummary2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "RegWD",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto14["m_sql"] = "RegWD";
$proto14["m_srcTableName"] = "dtrsummary2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DWork",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto16["m_sql"] = "DWork";
$proto16["m_srcTableName"] = "dtrsummary2";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Absent",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto18["m_sql"] = "Absent";
$proto18["m_srcTableName"] = "dtrsummary2";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "TLates",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto20["m_sql"] = "TLates";
$proto20["m_srcTableName"] = "dtrsummary2";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "LateMins",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto22["m_sql"] = "LateMins";
$proto22["m_srcTableName"] = "dtrsummary2";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "UndertimeMins",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto24["m_sql"] = "UndertimeMins";
$proto24["m_srcTableName"] = "dtrsummary2";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "VLDays",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto26["m_sql"] = "VLDays";
$proto26["m_srcTableName"] = "dtrsummary2";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "SLDays",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto28["m_sql"] = "SLDays";
$proto28["m_srcTableName"] = "dtrsummary2";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ELDays",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto30["m_sql"] = "ELDays";
$proto30["m_srcTableName"] = "dtrsummary2";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "PLDays",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto32["m_sql"] = "PLDays";
$proto32["m_srcTableName"] = "dtrsummary2";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "TrODays",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto34["m_sql"] = "TrODays";
$proto34["m_srcTableName"] = "dtrsummary2";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "RLink",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto36["m_sql"] = "RLink";
$proto36["m_srcTableName"] = "dtrsummary2";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Employer",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto38["m_sql"] = "Employer";
$proto38["m_srcTableName"] = "dtrsummary2";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "ExcessHrs",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto40["m_sql"] = "ExcessHrs";
$proto40["m_srcTableName"] = "dtrsummary2";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "RegOTh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto42["m_sql"] = "RegOTh";
$proto42["m_srcTableName"] = "dtrsummary2";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "RHOTh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto44["m_sql"] = "RHOTh";
$proto44["m_srcTableName"] = "dtrsummary2";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOTh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto46["m_sql"] = "SHOTh";
$proto46["m_srcTableName"] = "dtrsummary2";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "SHOTDh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto48["m_sql"] = "SHOTDh";
$proto48["m_srcTableName"] = "dtrsummary2";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "DHOTh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto50["m_sql"] = "DHOTh";
$proto50["m_srcTableName"] = "dtrsummary2";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "NDOTh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto52["m_sql"] = "NDOTh";
$proto52["m_srcTableName"] = "dtrsummary2";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "RHNDh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto54["m_sql"] = "RHNDh";
$proto54["m_srcTableName"] = "dtrsummary2";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "SHNDh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto56["m_sql"] = "SHNDh";
$proto56["m_srcTableName"] = "dtrsummary2";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "DHNDh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto58["m_sql"] = "DHNDh";
$proto58["m_srcTableName"] = "dtrsummary2";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDNDh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto60["m_sql"] = "DHRDNDh";
$proto60["m_srcTableName"] = "dtrsummary2";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDNDh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto62["m_sql"] = "RHRDNDh";
$proto62["m_srcTableName"] = "dtrsummary2";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDNDh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto64["m_sql"] = "SHRDNDh";
$proto64["m_srcTableName"] = "dtrsummary2";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "RHNDOTh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto66["m_sql"] = "RHNDOTh";
$proto66["m_srcTableName"] = "dtrsummary2";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "SHNDOTh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto68["m_sql"] = "SHNDOTh";
$proto68["m_srcTableName"] = "dtrsummary2";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "DHNDOTh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto70["m_sql"] = "DHNDOTh";
$proto70["m_srcTableName"] = "dtrsummary2";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "RDNDOTh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto72["m_sql"] = "RDNDOTh";
$proto72["m_srcTableName"] = "dtrsummary2";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDOTh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto74["m_sql"] = "RHRDOTh";
$proto74["m_srcTableName"] = "dtrsummary2";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDOTh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto76["m_sql"] = "SHRDOTh";
$proto76["m_srcTableName"] = "dtrsummary2";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDOTDh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto78["m_sql"] = "SHRDOTDh";
$proto78["m_srcTableName"] = "dtrsummary2";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDOTh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto80["m_sql"] = "DHRDOTh";
$proto80["m_srcTableName"] = "dtrsummary2";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDNDOTh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto82["m_sql"] = "RHRDNDOTh";
$proto82["m_srcTableName"] = "dtrsummary2";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDNDOTh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto84["m_sql"] = "SHRDNDOTh";
$proto84["m_srcTableName"] = "dtrsummary2";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDNDOTh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto86["m_sql"] = "DHRDNDOTh";
$proto86["m_srcTableName"] = "dtrsummary2";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "RHh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto88["m_sql"] = "RHh";
$proto88["m_srcTableName"] = "dtrsummary2";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "SHh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto90["m_sql"] = "SHh";
$proto90["m_srcTableName"] = "dtrsummary2";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "DHh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto92["m_sql"] = "DHh";
$proto92["m_srcTableName"] = "dtrsummary2";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "RHRDh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto94["m_sql"] = "RHRDh";
$proto94["m_srcTableName"] = "dtrsummary2";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "SHRDh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto96["m_sql"] = "SHRDh";
$proto96["m_srcTableName"] = "dtrsummary2";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "DHRDh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto98["m_sql"] = "DHRDh";
$proto98["m_srcTableName"] = "dtrsummary2";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "RDOTh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto100["m_sql"] = "RDOTh";
$proto100["m_srcTableName"] = "dtrsummary2";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "RegNDh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto102["m_sql"] = "RegNDh";
$proto102["m_srcTableName"] = "dtrsummary2";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "RegRDh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto104["m_sql"] = "RegRDh";
$proto104["m_srcTableName"] = "dtrsummary2";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "RDNDh",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto106["m_sql"] = "RDNDh";
$proto106["m_srcTableName"] = "dtrsummary2";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto108=array();
$proto108["m_link"] = "SQLL_MAIN";
			$proto109=array();
$proto109["m_strName"] = "dtrsummary2";
$proto109["m_srcTableName"] = "dtrsummary2";
$proto109["m_columns"] = array();
$proto109["m_columns"][] = "EmployeeID";
$proto109["m_columns"][] = "UserName";
$proto109["m_columns"][] = "Division";
$proto109["m_columns"][] = "WageType";
$proto109["m_columns"][] = "RegWD";
$proto109["m_columns"][] = "DWork";
$proto109["m_columns"][] = "Absent";
$proto109["m_columns"][] = "TLates";
$proto109["m_columns"][] = "LateMins";
$proto109["m_columns"][] = "UndertimeMins";
$proto109["m_columns"][] = "VLDays";
$proto109["m_columns"][] = "SLDays";
$proto109["m_columns"][] = "ELDays";
$proto109["m_columns"][] = "PLDays";
$proto109["m_columns"][] = "TrODays";
$proto109["m_columns"][] = "RLink";
$proto109["m_columns"][] = "NDMealAllowance";
$proto109["m_columns"][] = "Employer";
$proto109["m_columns"][] = "TBreakLateMins";
$proto109["m_columns"][] = "ExcessHrs";
$proto109["m_columns"][] = "ANDiffh";
$proto109["m_columns"][] = "RDMinsh";
$proto109["m_columns"][] = "RegOTh";
$proto109["m_columns"][] = "RHOTh";
$proto109["m_columns"][] = "SHOTh";
$proto109["m_columns"][] = "SHOTDh";
$proto109["m_columns"][] = "DHOTh";
$proto109["m_columns"][] = "NDOTh";
$proto109["m_columns"][] = "RHNDh";
$proto109["m_columns"][] = "SHNDh";
$proto109["m_columns"][] = "DHNDh";
$proto109["m_columns"][] = "DHRDNDh";
$proto109["m_columns"][] = "RHRDNDh";
$proto109["m_columns"][] = "SHRDNDh";
$proto109["m_columns"][] = "RHNDOTh";
$proto109["m_columns"][] = "SHNDOTh";
$proto109["m_columns"][] = "DHNDOTh";
$proto109["m_columns"][] = "RDNDOTh";
$proto109["m_columns"][] = "RHRDOTh";
$proto109["m_columns"][] = "SHRDOTh";
$proto109["m_columns"][] = "SHRDOTDh";
$proto109["m_columns"][] = "DHRDOTh";
$proto109["m_columns"][] = "RHRDNDOTh";
$proto109["m_columns"][] = "SHRDNDOTh";
$proto109["m_columns"][] = "DHRDNDOTh";
$proto109["m_columns"][] = "RHh";
$proto109["m_columns"][] = "SHh";
$proto109["m_columns"][] = "DHh";
$proto109["m_columns"][] = "RHRDh";
$proto109["m_columns"][] = "SHRDh";
$proto109["m_columns"][] = "DHRDh";
$proto109["m_columns"][] = "RDOTh";
$proto109["m_columns"][] = "RegNDh";
$proto109["m_columns"][] = "RegRDh";
$proto109["m_columns"][] = "RDNDh";
$proto109["m_columns"][] = "TLWOPS";
$obj = new SQLTable($proto109);

$proto108["m_table"] = $obj;
$proto108["m_sql"] = "dtrsummary2";
$proto108["m_alias"] = "";
$proto108["m_srcTableName"] = "dtrsummary2";
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
												$proto112=array();
						$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "dtrsummary2",
	"m_srcTableName" => "dtrsummary2"
));

$proto112["m_column"]=$obj;
$proto112["m_bAsc"] = 1;
$proto112["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto112);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dtrsummary2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dtrsummary2 = createSqlQuery_dtrsummary2();


	
		;

																																																			

$tdatadtrsummary2[".sqlquery"] = $queryData_dtrsummary2;

$tableEvents["dtrsummary2"] = new eventsBase;
$tdatadtrsummary2[".hasEvents"] = false;

?>