<?php
$strTableName="overtimefileapp2";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="overtimefile";

$gstrOrderBy="ORDER BY ItiD DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("overtimefileapp2");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["overtimefileapp2"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>