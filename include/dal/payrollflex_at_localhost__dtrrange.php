<?php
$dalTabledtrrange = array();
$dalTabledtrrange["DrID"] = array("type"=>3,"varname"=>"DrID", "name" => "DrID");
$dalTabledtrrange["FromDate"] = array("type"=>7,"varname"=>"FromDate", "name" => "FromDate");
$dalTabledtrrange["ToDate"] = array("type"=>7,"varname"=>"ToDate", "name" => "ToDate");
$dalTabledtrrange["Employer"] = array("type"=>3,"varname"=>"Employer", "name" => "Employer");
$dalTabledtrrange["WageType"] = array("type"=>16,"varname"=>"WageType", "name" => "WageType");
$dalTabledtrrange["Division"] = array("type"=>3,"varname"=>"Division", "name" => "Division");
	$dalTabledtrrange["DrID"]["key"]=true;

$dal_info["payrollflex_at_localhost__dtrrange"] = &$dalTabledtrrange;
?>