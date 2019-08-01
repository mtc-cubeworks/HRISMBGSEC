<?php
$dalTableleaves = array();
$dalTableleaves["LvID"] = array("type"=>3,"varname"=>"LvID", "name" => "LvID");
$dalTableleaves["FromDate"] = array("type"=>7,"varname"=>"FromDate", "name" => "FromDate");
$dalTableleaves["LeaveType"] = array("type"=>3,"varname"=>"LeaveType", "name" => "LeaveType");
$dalTableleaves["Days"] = array("type"=>5,"varname"=>"Days", "name" => "Days");
$dalTableleaves["EmployeeID"] = array("type"=>3,"varname"=>"EmployeeID", "name" => "EmployeeID");
$dalTableleaves["ToDate"] = array("type"=>7,"varname"=>"ToDate", "name" => "ToDate");
$dalTableleaves["Approved"] = array("type"=>16,"varname"=>"Approved", "name" => "Approved");
$dalTableleaves["ApprovedDate"] = array("type"=>7,"varname"=>"ApprovedDate", "name" => "ApprovedDate");
$dalTableleaves["Approvedby"] = array("type"=>3,"varname"=>"Approvedby", "name" => "Approvedby");
$dalTableleaves["Posted"] = array("type"=>16,"varname"=>"Posted", "name" => "Posted");
$dalTableleaves["DateCreated"] = array("type"=>135,"varname"=>"DateCreated", "name" => "DateCreated");
$dalTableleaves["ApprovedTime"] = array("type"=>134,"varname"=>"ApprovedTime", "name" => "ApprovedTime");
$dalTableleaves["FirstHalf"] = array("type"=>16,"varname"=>"FirstHalf", "name" => "FirstHalf");
$dalTableleaves["SecondHalf"] = array("type"=>16,"varname"=>"SecondHalf", "name" => "SecondHalf");
$dalTableleaves["Locked"] = array("type"=>16,"varname"=>"Locked", "name" => "Locked");
$dalTableleaves["Superior"] = array("type"=>3,"varname"=>"Superior", "name" => "Superior");
$dalTableleaves["Reason"] = array("type"=>200,"varname"=>"Reason", "name" => "Reason");
	$dalTableleaves["LvID"]["key"]=true;

$dal_info["payrollflex_at_localhost__leaves"] = &$dalTableleaves;
?>