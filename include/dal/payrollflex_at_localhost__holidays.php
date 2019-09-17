<?php
$dalTableholidays = array();
$dalTableholidays["HID"] = array("type"=>3,"varname"=>"HID", "name" => "HID");
$dalTableholidays["HolidayDate"] = array("type"=>7,"varname"=>"HolidayDate", "name" => "HolidayDate");
$dalTableholidays["HolidayType"] = array("type"=>3,"varname"=>"HolidayType", "name" => "HolidayType");
$dalTableholidays["HolidayDay"] = array("type"=>5,"varname"=>"HolidayDay", "name" => "HolidayDay");
$dalTableholidays["FirstHalf"] = array("type"=>16,"varname"=>"FirstHalf", "name" => "FirstHalf");
$dalTableholidays["SecondHalf"] = array("type"=>16,"varname"=>"SecondHalf", "name" => "SecondHalf");
$dalTableholidays["WholeDay"] = array("type"=>5,"varname"=>"WholeDay", "name" => "WholeDay");
$dalTableholidays["WordayBeforeHoliday"] = array("type"=>7,"varname"=>"WordayBeforeHoliday", "name" => "WordayBeforeHoliday");
$dalTableholidays["HolidayDescription"] = array("type"=>200,"varname"=>"HolidayDescription", "name" => "HolidayDescription");
$dalTableholidays["Division"] = array("type"=>3,"varname"=>"Division", "name" => "Division");
	$dalTableholidays["HID"]["key"]=true;

$dal_info["payrollflex_at_localhost__holidays"] = &$dalTableholidays;
?>