<?php
$dalTablelogins = array();
$dalTablelogins["LogID"] = array("type"=>3,"varname"=>"LogID", "name" => "LogID");
$dalTablelogins["UserName"] = array("type"=>200,"varname"=>"UserName", "name" => "UserName");
$dalTablelogins["Password"] = array("type"=>200,"varname"=>"Password", "name" => "Password");
$dalTablelogins["FullName"] = array("type"=>200,"varname"=>"FullName", "name" => "FullName");
$dalTablelogins["Position"] = array("type"=>3,"varname"=>"Position", "name" => "Position");
$dalTablelogins["EmployeeID"] = array("type"=>3,"varname"=>"EmployeeID", "name" => "EmployeeID");
	$dalTablelogins["LogID"]["key"]=true;

$dal_info["payrollflex_at_localhost__logins"] = &$dalTablelogins;
?>