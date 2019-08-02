<?php
$strTableName="leavebalance1";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="leavebalance";

$gstrOrderBy="ORDER BY demo_user.user_name";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("leavebalance1");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["leavebalance1"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>