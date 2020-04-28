<?php
$strTableName="notes1";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="notes";

$gstrOrderBy="ORDER BY noteage2.NotifyDaysLeft DESC, noteage2.DaysLeft DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("notes1");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["notes1"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>