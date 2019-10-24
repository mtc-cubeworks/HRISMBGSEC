<?php
$dalTablepayroll = array();
$dalTablepayroll["PSID"] = array("type"=>3,"varname"=>"PSID", "name" => "PSID");
$dalTablepayroll["PayDate"] = array("type"=>7,"varname"=>"PayDate", "name" => "PayDate");
$dalTablepayroll["PayFromDate"] = array("type"=>7,"varname"=>"PayFromDate", "name" => "PayFromDate");
$dalTablepayroll["PayToDate"] = array("type"=>7,"varname"=>"PayToDate", "name" => "PayToDate");
$dalTablepayroll["PayPeriod"] = array("type"=>7,"varname"=>"PayPeriod", "name" => "PayPeriod");
$dalTablepayroll["Statutories"] = array("type"=>16,"varname"=>"Statutories", "name" => "Statutories");
$dalTablepayroll["Stat Loans"] = array("type"=>16,"varname"=>"Stat_Loans", "name" => "Stat Loans");
$dalTablepayroll["Deductions"] = array("type"=>16,"varname"=>"Deductions", "name" => "Deductions");
$dalTablepayroll["Adjustments"] = array("type"=>16,"varname"=>"Adjustments", "name" => "Adjustments");
$dalTablepayroll["MoAdjustment"] = array("type"=>16,"varname"=>"MoAdjustment", "name" => "MoAdjustment");
$dalTablepayroll["PresetTax"] = array("type"=>16,"varname"=>"PresetTax", "name" => "PresetTax");
$dalTablepayroll["13thMonth"] = array("type"=>16,"varname"=>"fld13thMonth", "name" => "13thMonth");
$dalTablepayroll["Locked"] = array("type"=>16,"varname"=>"Locked", "name" => "Locked");
$dalTablepayroll["Employer"] = array("type"=>3,"varname"=>"Employer", "name" => "Employer");
	$dalTablepayroll["PSID"]["key"]=true;

$dal_info["payrollflex_at_localhost__payroll"] = &$dalTablepayroll;
?>