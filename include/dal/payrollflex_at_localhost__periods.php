<?php
$dalTableperiods = array();
$dalTableperiods["PerID"] = array("type"=>3,"varname"=>"PerID", "name" => "PerID");
$dalTableperiods["Period"] = array("type"=>200,"varname"=>"Period", "name" => "Period");
$dalTableperiods["Factor"] = array("type"=>3,"varname"=>"Factor", "name" => "Factor");
	$dalTableperiods["PerID"]["key"]=true;

$dal_info["payrollflex_at_localhost__periods"] = &$dalTableperiods;
?>