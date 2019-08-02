<?php
$dalTablepayrolltax = array();
$dalTablepayrolltax["PTaxID"] = array("type"=>3,"varname"=>"PTaxID", "name" => "PTaxID");
$dalTablepayrolltax["EmployeeID"] = array("type"=>3,"varname"=>"EmployeeID", "name" => "EmployeeID");
$dalTablepayrolltax["Tax"] = array("type"=>14,"varname"=>"Tax", "name" => "Tax");
$dalTablepayrolltax["FromDate"] = array("type"=>7,"varname"=>"FromDate", "name" => "FromDate");
$dalTablepayrolltax["ToDate"] = array("type"=>7,"varname"=>"ToDate", "name" => "ToDate");
$dalTablepayrolltax["PSID"] = array("type"=>3,"varname"=>"PSID", "name" => "PSID");
$dalTablepayrolltax["Employer"] = array("type"=>3,"varname"=>"Employer", "name" => "Employer");
$dalTablepayrolltax["Division"] = array("type"=>3,"varname"=>"Division", "name" => "Division");
$dalTablepayrolltax["WageType"] = array("type"=>3,"varname"=>"WageType", "name" => "WageType");
	$dalTablepayrolltax["PTaxID"]["key"]=true;

$dal_info["payrollflex_at_localhost__payrolltax"] = &$dalTablepayrolltax;
?>