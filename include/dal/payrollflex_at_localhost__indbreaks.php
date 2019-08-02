<?php
$dalTableindbreaks = array();
$dalTableindbreaks["IBID"] = array("type"=>3,"varname"=>"IBID", "name" => "IBID");
$dalTableindbreaks["BreakOut"] = array("type"=>135,"varname"=>"BreakOut", "name" => "BreakOut");
$dalTableindbreaks["BreakIn"] = array("type"=>135,"varname"=>"BreakIn", "name" => "BreakIn");
$dalTableindbreaks["BreakM"] = array("type"=>5,"varname"=>"BreakM", "name" => "BreakM");
$dalTableindbreaks["ScID"] = array("type"=>3,"varname"=>"ScID", "name" => "ScID");
$dalTableindbreaks["AllowedBreakM"] = array("type"=>5,"varname"=>"AllowedBreakM", "name" => "AllowedBreakM");
$dalTableindbreaks["Excess"] = array("type"=>5,"varname"=>"Excess", "name" => "Excess");
	$dalTableindbreaks["IBID"]["key"]=true;

$dal_info["payrollflex_at_localhost__indbreaks"] = &$dalTableindbreaks;
?>