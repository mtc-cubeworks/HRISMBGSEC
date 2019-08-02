<?php
$strTableName="payrolltab1";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="payrolltab";

$gstrOrderBy="ORDER BY ToDate DESC, PtabID DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("payrolltab1");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["payrolltab1"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>