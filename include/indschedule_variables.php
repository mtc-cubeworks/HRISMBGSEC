<?php
$strTableName="indschedule";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="indschedule";

$gstrOrderBy="ORDER BY UserName, SDate";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("indschedule");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["indschedule"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>