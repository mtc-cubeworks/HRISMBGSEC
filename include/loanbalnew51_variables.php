<?php
$strTableName="loanbalnew51";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="loanbalnew5";

$gstrOrderBy="ORDER BY LoanID DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("loanbalnew51");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["loanbalnew51"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>