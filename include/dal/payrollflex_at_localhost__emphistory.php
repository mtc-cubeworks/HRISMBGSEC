<?php
$dalTableemphistory = array();
$dalTableemphistory["EHID"] = array("type"=>3,"varname"=>"EHID", "name" => "EHID");
$dalTableemphistory["DateIn"] = array("type"=>7,"varname"=>"DateIn", "name" => "DateIn");
$dalTableemphistory["DateOut"] = array("type"=>7,"varname"=>"DateOut", "name" => "DateOut");
$dalTableemphistory["Division"] = array("type"=>3,"varname"=>"Division", "name" => "Division");
$dalTableemphistory["Department"] = array("type"=>3,"varname"=>"Department", "name" => "Department");
$dalTableemphistory["Remarks"] = array("type"=>200,"varname"=>"Remarks", "name" => "Remarks");
$dalTableemphistory["EmployeeiD"] = array("type"=>3,"varname"=>"EmployeeiD", "name" => "EmployeeiD");
	$dalTableemphistory["EHID"]["key"]=true;

$dal_info["payrollflex_at_localhost__emphistory"] = &$dalTableemphistory;
?>