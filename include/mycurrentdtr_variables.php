<?php
$strTableName="mycurrentdtr";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dt5";

$gstrOrderBy="ORDER BY dt5.UserName";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("mycurrentdtr");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["mycurrentdtr"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>