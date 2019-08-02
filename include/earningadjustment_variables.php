<?php
$strTableName="earningadjustment";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="earningadjustment";

$gstrOrderBy="ORDER BY eaID DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("earningadjustment");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["earningadjustment"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>