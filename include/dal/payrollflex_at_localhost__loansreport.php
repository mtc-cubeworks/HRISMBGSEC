<?php
$dalTableloansreport = array();
$dalTableloansreport["lrID"] = array("type"=>3,"varname"=>"lrID", "name" => "lrID");
$dalTableloansreport["Employer"] = array("type"=>3,"varname"=>"Employer", "name" => "Employer");
$dalTableloansreport["LoanType"] = array("type"=>3,"varname"=>"LoanType", "name" => "LoanType");
$dalTableloansreport["FromDate"] = array("type"=>7,"varname"=>"FromDate", "name" => "FromDate");
$dalTableloansreport["ToDate"] = array("type"=>7,"varname"=>"ToDate", "name" => "ToDate");
$dalTableloansreport["PSID"] = array("type"=>3,"varname"=>"PSID", "name" => "PSID");
$dalTableloansreport["PreparedBy"] = array("type"=>3,"varname"=>"PreparedBy", "name" => "PreparedBy");
	$dalTableloansreport["lrID"]["key"]=true;

$dal_info["payrollflex_at_localhost__loansreport"] = &$dalTableloansreport;
?>