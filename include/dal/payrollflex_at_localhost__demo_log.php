<?php
$dalTabledemo_log = array();
$dalTabledemo_log["log_time"] = array("type"=>135,"varname"=>"log_time", "name" => "log_time");
$dalTabledemo_log["user_name"] = array("type"=>200,"varname"=>"user_name", "name" => "user_name");
$dalTabledemo_log["data"] = array("type"=>201,"varname"=>"data", "name" => "data");
$dalTabledemo_log["EmployeeID"] = array("type"=>3,"varname"=>"EmployeeID", "name" => "EmployeeID");
$dalTabledemo_log["TransID"] = array("type"=>3,"varname"=>"TransID", "name" => "TransID");
$dalTabledemo_log["MLogID"] = array("type"=>3,"varname"=>"MLogID", "name" => "MLogID");
$dalTabledemo_log["MLogDate"] = array("type"=>135,"varname"=>"MLogDate", "name" => "MLogDate");
$dalTabledemo_log["ClockType"] = array("type"=>16,"varname"=>"ClockType", "name" => "ClockType");
	$dalTabledemo_log["EmployeeID"]["key"]=true;
	$dalTabledemo_log["TransID"]["key"]=true;

$dal_info["payrollflex_at_localhost__demo_log"] = &$dalTabledemo_log;
?>