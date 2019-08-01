<?php
$dalTablepaymentperiods = array();
$dalTablepaymentperiods["ppID"] = array("type"=>3,"varname"=>"ppID", "name" => "ppID");
$dalTablepaymentperiods["PaymentPeriod"] = array("type"=>200,"varname"=>"PaymentPeriod", "name" => "PaymentPeriod");
$dalTablepaymentperiods["Factor"] = array("type"=>3,"varname"=>"Factor", "name" => "Factor");
	$dalTablepaymentperiods["ppID"]["key"]=true;

$dal_info["payrollflex_at_localhost__paymentperiods"] = &$dalTablepaymentperiods;
?>