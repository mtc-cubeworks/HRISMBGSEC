<?php
$dalTableshifts = array();
$dalTableshifts["shID"] = array("type"=>3,"varname"=>"shID", "name" => "shID");
$dalTableshifts["Shift"] = array("type"=>200,"varname"=>"Shift", "name" => "Shift");
$dalTableshifts["TimeIn"] = array("type"=>134,"varname"=>"TimeIn", "name" => "TimeIn");
$dalTableshifts["TimeOut"] = array("type"=>134,"varname"=>"TimeOut", "name" => "TimeOut");
$dalTableshifts["BreakMins"] = array("type"=>5,"varname"=>"BreakMins", "name" => "BreakMins");
$dalTableshifts["CrossMidnight"] = array("type"=>16,"varname"=>"CrossMidnight", "name" => "CrossMidnight");
$dalTableshifts["RecordOnFirstDay"] = array("type"=>16,"varname"=>"RecordOnFirstDay", "name" => "RecordOnFirstDay");
$dalTableshifts["RecordOnSecondDay"] = array("type"=>16,"varname"=>"RecordOnSecondDay", "name" => "RecordOnSecondDay");
$dalTableshifts["MinsPerDay"] = array("type"=>5,"varname"=>"MinsPerDay", "name" => "MinsPerDay");
$dalTableshifts["LunchBreakTimeFrom"] = array("type"=>134,"varname"=>"LunchBreakTimeFrom", "name" => "LunchBreakTimeFrom");
$dalTableshifts["LunchBreakTimeTo"] = array("type"=>134,"varname"=>"LunchBreakTimeTo", "name" => "LunchBreakTimeTo");
$dalTableshifts["ReqLogOutInOnBreak"] = array("type"=>16,"varname"=>"ReqLogOutInOnBreak", "name" => "ReqLogOutInOnBreak");
$dalTableshifts["FirstHalfMins"] = array("type"=>5,"varname"=>"FirstHalfMins", "name" => "FirstHalfMins");
$dalTableshifts["SecondHalfMins"] = array("type"=>5,"varname"=>"SecondHalfMins", "name" => "SecondHalfMins");
$dalTableshifts["AutoApproveNDiff"] = array("type"=>16,"varname"=>"AutoApproveNDiff", "name" => "AutoApproveNDiff");
$dalTableshifts["SchedType"] = array("type"=>3,"varname"=>"SchedType", "name" => "SchedType");
	$dalTableshifts["shID"]["key"]=true;

$dal_info["payrollflex_at_localhost__shifts"] = &$dalTableshifts;
?>