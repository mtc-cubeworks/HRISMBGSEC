<?php
$dalTableholidayupdate = array();
$dalTableholidayupdate["HuID"] = array("type"=>3,"varname"=>"HuID", "name" => "HuID");
$dalTableholidayupdate["HolidayType"] = array("type"=>3,"varname"=>"HolidayType", "name" => "HolidayType");
$dalTableholidayupdate["1stHalf"] = array("type"=>16,"varname"=>"fld1stHalf", "name" => "1stHalf");
$dalTableholidayupdate["2ndHalf"] = array("type"=>16,"varname"=>"fld2ndHalf", "name" => "2ndHalf");
$dalTableholidayupdate["HDate"] = array("type"=>7,"varname"=>"HDate", "name" => "HDate");
$dalTableholidayupdate["Employer"] = array("type"=>3,"varname"=>"Employer", "name" => "Employer");
$dalTableholidayupdate["Division"] = array("type"=>3,"varname"=>"Division", "name" => "Division");
$dalTableholidayupdate["Department"] = array("type"=>3,"varname"=>"Department", "name" => "Department");
$dalTableholidayupdate["Employee"] = array("type"=>3,"varname"=>"Employee", "name" => "Employee");
$dalTableholidayupdate["Remarks"] = array("type"=>200,"varname"=>"Remarks", "name" => "Remarks");
	$dalTableholidayupdate["HuID"]["key"]=true;

$dal_info["payrollflex_at_localhost__holidayupdate"] = &$dalTableholidayupdate;
?>