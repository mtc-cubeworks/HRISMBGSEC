<?php
$strTableName="loanbalnew5";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="loanbalnew5";

$gstrOrderBy="ORDER BY LoanID DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("loanbalnew5");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["loanbalnew5"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>