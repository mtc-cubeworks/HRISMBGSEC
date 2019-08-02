<?php
$strTableName="overtimefileapp";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="overtimefile";

$gstrOrderBy="ORDER BY ItiD DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("overtimefileapp");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["overtimefileapp"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>