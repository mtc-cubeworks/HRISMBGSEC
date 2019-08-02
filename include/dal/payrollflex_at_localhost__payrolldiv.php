<?php
$dalTablepayrolldiv = array();
$dalTablepayrolldiv["PRollID"] = array("type"=>3,"varname"=>"PRollID", "name" => "PRollID");
$dalTablepayrolldiv["Employer"] = array("type"=>3,"varname"=>"Employer", "name" => "Employer");
$dalTablepayrolldiv["Division"] = array("type"=>3,"varname"=>"Division", "name" => "Division");
$dalTablepayrolldiv["FromDate"] = array("type"=>7,"varname"=>"FromDate", "name" => "FromDate");
$dalTablepayrolldiv["ToDate"] = array("type"=>7,"varname"=>"ToDate", "name" => "ToDate");
$dalTablepayrolldiv["WageType"] = array("type"=>3,"varname"=>"WageType", "name" => "WageType");
$dalTablepayrolldiv["Locked"] = array("type"=>16,"varname"=>"Locked", "name" => "Locked");
	$dalTablepayrolldiv["PRollID"]["key"]=true;

$dal_info["payrollflex_at_localhost__payrolldiv"] = &$dalTablepayrolldiv;
?>