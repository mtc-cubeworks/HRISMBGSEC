<?php
$dalTableholidaytype = array();
$dalTableholidaytype["HID"] = array("type"=>3,"varname"=>"HID", "name" => "HID");
$dalTableholidaytype["HolidayType"] = array("type"=>200,"varname"=>"HolidayType", "name" => "HolidayType");
$dalTableholidaytype["MonthliesNormalFactor"] = array("type"=>5,"varname"=>"MonthliesNormalFactor", "name" => "MonthliesNormalFactor");
$dalTableholidaytype["MonthliesOTFactor"] = array("type"=>5,"varname"=>"MonthliesOTFactor", "name" => "MonthliesOTFactor");
$dalTableholidaytype["DailiesNormalFactor"] = array("type"=>5,"varname"=>"DailiesNormalFactor", "name" => "DailiesNormalFactor");
$dalTableholidaytype["DailiesOTFactor"] = array("type"=>5,"varname"=>"DailiesOTFactor", "name" => "DailiesOTFactor");
	$dalTableholidaytype["HID"]["key"]=true;

$dal_info["payrollflex_at_localhost__holidaytype"] = &$dalTableholidaytype;
?>