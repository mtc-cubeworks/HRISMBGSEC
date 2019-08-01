<?php
$dalTabledivisions = array();
$dalTabledivisions["DvID"] = array("type"=>3,"varname"=>"DvID", "name" => "DvID");
$dalTabledivisions["Division"] = array("type"=>200,"varname"=>"Division", "name" => "Division");
$dalTabledivisions["MontlyPaymentPeriods"] = array("type"=>3,"varname"=>"MontlyPaymentPeriods", "name" => "MontlyPaymentPeriods");
$dalTabledivisions["StatutoryPayment"] = array("type"=>3,"varname"=>"StatutoryPayment", "name" => "StatutoryPayment");
$dalTabledivisions["MinimumMonhtlyWage"] = array("type"=>5,"varname"=>"MinimumMonhtlyWage", "name" => "MinimumMonhtlyWage");
$dalTabledivisions["MinimumDailyWage"] = array("type"=>5,"varname"=>"MinimumDailyWage", "name" => "MinimumDailyWage");
	$dalTabledivisions["DvID"]["key"]=true;

$dal_info["payrollflex_at_localhost__divisions"] = &$dalTabledivisions;
?>