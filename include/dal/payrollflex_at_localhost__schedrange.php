<?php
$dalTableschedrange = array();
$dalTableschedrange["ScRID"] = array("type"=>3,"varname"=>"ScRID", "name" => "ScRID");
$dalTableschedrange["FromDate"] = array("type"=>7,"varname"=>"FromDate", "name" => "FromDate");
$dalTableschedrange["ToDate"] = array("type"=>7,"varname"=>"ToDate", "name" => "ToDate");
$dalTableschedrange["TimeIn"] = array("type"=>134,"varname"=>"TimeIn", "name" => "TimeIn");
$dalTableschedrange["TimeOut"] = array("type"=>134,"varname"=>"TimeOut", "name" => "TimeOut");
$dalTableschedrange["StrictTimeOut"] = array("type"=>16,"varname"=>"StrictTimeOut", "name" => "StrictTimeOut");
$dalTableschedrange["StrictTimeIn"] = array("type"=>16,"varname"=>"StrictTimeIn", "name" => "StrictTimeIn");
$dalTableschedrange["SchedType"] = array("type"=>3,"varname"=>"SchedType", "name" => "SchedType");
$dalTableschedrange["CrossMidnight"] = array("type"=>16,"varname"=>"CrossMidnight", "name" => "CrossMidnight");
$dalTableschedrange["RecordOnFirstDay"] = array("type"=>16,"varname"=>"RecordOnFirstDay", "name" => "RecordOnFirstDay");
$dalTableschedrange["RecordOnSecondDay"] = array("type"=>16,"varname"=>"RecordOnSecondDay", "name" => "RecordOnSecondDay");
$dalTableschedrange["RestDay"] = array("type"=>3,"varname"=>"RestDay", "name" => "RestDay");
$dalTableschedrange["MinsPerDay"] = array("type"=>5,"varname"=>"MinsPerDay", "name" => "MinsPerDay");
$dalTableschedrange["BreakMins"] = array("type"=>5,"varname"=>"BreakMins", "name" => "BreakMins");
$dalTableschedrange["Shift"] = array("type"=>3,"varname"=>"Shift", "name" => "Shift");
$dalTableschedrange["Posted"] = array("type"=>16,"varname"=>"Posted", "name" => "Posted");
$dalTableschedrange["LunchBreakTimeFrom"] = array("type"=>134,"varname"=>"LunchBreakTimeFrom", "name" => "LunchBreakTimeFrom");
$dalTableschedrange["LunchBreakTimeTo"] = array("type"=>134,"varname"=>"LunchBreakTimeTo", "name" => "LunchBreakTimeTo");
$dalTableschedrange["ReqLogOutInOnBreak"] = array("type"=>16,"varname"=>"ReqLogOutInOnBreak", "name" => "ReqLogOutInOnBreak");
$dalTableschedrange["FirstHalfMins"] = array("type"=>5,"varname"=>"FirstHalfMins", "name" => "FirstHalfMins");
$dalTableschedrange["SecondHalfMins"] = array("type"=>5,"varname"=>"SecondHalfMins", "name" => "SecondHalfMins");
$dalTableschedrange["RestDays"] = array("type"=>200,"varname"=>"RestDays", "name" => "RestDays");
$dalTableschedrange["SchedBy"] = array("type"=>3,"varname"=>"SchedBy", "name" => "SchedBy");
$dalTableschedrange["Employer"] = array("type"=>3,"varname"=>"Employer", "name" => "Employer");
$dalTableschedrange["Division"] = array("type"=>3,"varname"=>"Division", "name" => "Division");
$dalTableschedrange["PreLogMins"] = array("type"=>5,"varname"=>"PreLogMins", "name" => "PreLogMins");
	$dalTableschedrange["ScRID"]["key"]=true;

$dal_info["payrollflex_at_localhost__schedrange"] = &$dalTableschedrange;
?>