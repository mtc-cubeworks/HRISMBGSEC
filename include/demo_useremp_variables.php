<?php
$strTableName="demo_useremp";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="demo_user";

$gstrOrderBy="ORDER BY user_name";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("demo_useremp");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["demo_useremp"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>