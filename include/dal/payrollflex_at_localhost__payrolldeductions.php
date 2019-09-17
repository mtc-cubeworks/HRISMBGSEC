<?php
$dalTablepayrolldeductions = array();
$dalTablepayrolldeductions["PdeID"] = array("type"=>3,"varname"=>"PdeID", "name" => "PdeID");
$dalTablepayrolldeductions["Deduction"] = array("type"=>3,"varname"=>"Deduction", "name" => "Deduction");
$dalTablepayrolldeductions["Amount"] = array("type"=>5,"varname"=>"Amount", "name" => "Amount");
$dalTablepayrolldeductions["FromDate"] = array("type"=>7,"varname"=>"FromDate", "name" => "FromDate");
$dalTablepayrolldeductions["ToDate"] = array("type"=>7,"varname"=>"ToDate", "name" => "ToDate");
$dalTablepayrolldeductions["EmployeeID"] = array("type"=>3,"varname"=>"EmployeeID", "name" => "EmployeeID");
$dalTablepayrolldeductions["LoanID"] = array("type"=>3,"varname"=>"LoanID", "name" => "LoanID");
$dalTablepayrolldeductions["PSID"] = array("type"=>3,"varname"=>"PSID", "name" => "PSID");
$dalTablepayrolldeductions["Balance"] = array("type"=>5,"varname"=>"Balance", "name" => "Balance");
$dalTablepayrolldeductions["Employer"] = array("type"=>3,"varname"=>"Employer", "name" => "Employer");
$dalTablepayrolldeductions["Division"] = array("type"=>3,"varname"=>"Division", "name" => "Division");
$dalTablepayrolldeductions["WageType"] = array("type"=>3,"varname"=>"WageType", "name" => "WageType");
$dalTablepayrolldeductions["OtherPayment"] = array("type"=>3,"varname"=>"OtherPayment", "name" => "OtherPayment");
	$dalTablepayrolldeductions["PdeID"]["key"]=true;

$dal_info["payrollflex_at_localhost__payrolldeductions"] = &$dalTablepayrolldeductions;
?>