<?php
$dalTablefilelog = array();
$dalTablefilelog["log_time"] = array("type"=>135,"varname"=>"log_time", "name" => "log_time");
$dalTablefilelog["data"] = array("type"=>201,"varname"=>"data", "name" => "data");
$dalTablefilelog["EmployeeID"] = array("type"=>3,"varname"=>"EmployeeID", "name" => "EmployeeID");
$dalTablefilelog["TransID2"] = array("type"=>3,"varname"=>"TransID2", "name" => "TransID2");
$dalTablefilelog["MLogID"] = array("type"=>3,"varname"=>"MLogID", "name" => "MLogID");
$dalTablefilelog["MLogDate"] = array("type"=>135,"varname"=>"MLogDate", "name" => "MLogDate");
$dalTablefilelog["ClockType"] = array("type"=>200,"varname"=>"ClockType", "name" => "ClockType");
$dalTablefilelog["CheckedBy"] = array("type"=>3,"varname"=>"CheckedBy", "name" => "CheckedBy");
$dalTablefilelog["ApprovedBy"] = array("type"=>3,"varname"=>"ApprovedBy", "name" => "ApprovedBy");
$dalTablefilelog["HRApproval"] = array("type"=>3,"varname"=>"HRApproval", "name" => "HRApproval");
$dalTablefilelog["Checked"] = array("type"=>16,"varname"=>"Checked", "name" => "Checked");
$dalTablefilelog["Approved"] = array("type"=>16,"varname"=>"Approved", "name" => "Approved");
$dalTablefilelog["HRApproved"] = array("type"=>16,"varname"=>"HRApproved", "name" => "HRApproved");
$dalTablefilelog["HRApprovedDate"] = array("type"=>7,"varname"=>"HRApprovedDate", "name" => "HRApprovedDate");
$dalTablefilelog["Reason"] = array("type"=>200,"varname"=>"Reason", "name" => "Reason");
$dalTablefilelog["Locked"] = array("type"=>16,"varname"=>"Locked", "name" => "Locked");
	$dalTablefilelog["TransID2"]["key"]=true;

$dal_info["payrollflex_at_localhost__filelog"] = &$dalTablefilelog;
?>