<?php
$dalTableloans = array();
$dalTableloans["LoanID"] = array("type"=>3,"varname"=>"LoanID", "name" => "LoanID");
$dalTableloans["EmployeeID"] = array("type"=>3,"varname"=>"EmployeeID", "name" => "EmployeeID");
$dalTableloans["Principal"] = array("type"=>5,"varname"=>"Principal", "name" => "Principal");
$dalTableloans["MonthlyAmortization"] = array("type"=>14,"varname"=>"MonthlyAmortization", "name" => "MonthlyAmortization");
$dalTableloans["StartDate"] = array("type"=>7,"varname"=>"StartDate", "name" => "StartDate");
$dalTableloans["LoanDescription"] = array("type"=>3,"varname"=>"LoanDescription", "name" => "LoanDescription");
$dalTableloans["PerPayrollAmount"] = array("type"=>14,"varname"=>"PerPayrollAmount", "name" => "PerPayrollAmount");
$dalTableloans["PaymentPeriod"] = array("type"=>3,"varname"=>"PaymentPeriod", "name" => "PaymentPeriod");
$dalTableloans["Inactive"] = array("type"=>16,"varname"=>"Inactive", "name" => "Inactive");
$dalTableloans["OPrincipal"] = array("type"=>14,"varname"=>"OPrincipal", "name" => "OPrincipal");
$dalTableloans["DType"] = array("type"=>3,"varname"=>"DType", "name" => "DType");
$dalTableloans["PerDay"] = array("type"=>14,"varname"=>"PerDay", "name" => "PerDay");
$dalTableloans["LessAbsences"] = array("type"=>16,"varname"=>"LessAbsences", "name" => "LessAbsences");
	$dalTableloans["LoanID"]["key"]=true;

$dal_info["payrollflex_at_localhost__loans"] = &$dalTableloans;
?>