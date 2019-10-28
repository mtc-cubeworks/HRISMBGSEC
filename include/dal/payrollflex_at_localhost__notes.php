<?php
$dalTablenotes = array();
$dalTablenotes["NID"] = array("type"=>3,"varname"=>"NID", "name" => "NID");
$dalTablenotes["CreatedDate"] = array("type"=>7,"varname"=>"CreatedDate", "name" => "CreatedDate");
$dalTablenotes["NoteType"] = array("type"=>3,"varname"=>"NoteType", "name" => "NoteType");
$dalTablenotes["StartDate"] = array("type"=>7,"varname"=>"StartDate", "name" => "StartDate");
$dalTablenotes["EndDate"] = array("type"=>7,"varname"=>"EndDate", "name" => "EndDate");
$dalTablenotes["Remarks"] = array("type"=>200,"varname"=>"Remarks", "name" => "Remarks");
$dalTablenotes["Encodedby"] = array("type"=>3,"varname"=>"Encodedby", "name" => "Encodedby");
$dalTablenotes["EmployeeID"] = array("type"=>3,"varname"=>"EmployeeID", "name" => "EmployeeID");
$dalTablenotes["UploadFile"] = array("type"=>200,"varname"=>"UploadFile", "name" => "UploadFile");
$dalTablenotes["Status"] = array("type"=>3,"varname"=>"Status", "name" => "Status");
$dalTablenotes["NotifyDays"] = array("type"=>3,"varname"=>"NotifyDays", "name" => "NotifyDays");
$dalTablenotes["Closed"] = array("type"=>16,"varname"=>"Closed", "name" => "Closed");
	$dalTablenotes["NID"]["key"]=true;

$dal_info["payrollflex_at_localhost__notes"] = &$dalTablenotes;
?>