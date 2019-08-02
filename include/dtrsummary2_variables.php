<?php
$strTableName="dtrsummary2";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dtrsummary2";

$gstrOrderBy="ORDER BY UserName";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("dtrsummary2");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["dtrsummary2"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>