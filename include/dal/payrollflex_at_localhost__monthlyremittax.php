<?php
$dalTablemonthlyremittax = array();
$dalTablemonthlyremittax["TxID"] = array("type"=>3,"varname"=>"TxID", "name" => "TxID");
$dalTablemonthlyremittax["Month"] = array("type"=>3,"varname"=>"Month", "name" => "Month");
$dalTablemonthlyremittax["Year"] = array("type"=>3,"varname"=>"Year", "name" => "Year");
$dalTablemonthlyremittax["EmployerID"] = array("type"=>3,"varname"=>"EmployerID", "name" => "EmployerID");
$dalTablemonthlyremittax["Employer"] = array("type"=>200,"varname"=>"Employer", "name" => "Employer");
$dalTablemonthlyremittax["Address"] = array("type"=>200,"varname"=>"Address", "name" => "Address");
$dalTablemonthlyremittax["RDOCode"] = array("type"=>200,"varname"=>"RDOCode", "name" => "RDOCode");
$dalTablemonthlyremittax["AmendedReturn"] = array("type"=>16,"varname"=>"AmendedReturn", "name" => "AmendedReturn");
$dalTablemonthlyremittax["AnyTaxWithheld"] = array("type"=>16,"varname"=>"AnyTaxWithheld", "name" => "AnyTaxWithheld");
$dalTablemonthlyremittax["TIN"] = array("type"=>200,"varname"=>"TIN", "name" => "TIN");
$dalTablemonthlyremittax["CategoryWithholdingAgent"] = array("type"=>3,"varname"=>"CategoryWithholdingAgent", "name" => "CategoryWithholdingAgent");
$dalTablemonthlyremittax["AwaitingTaxRelief"] = array("type"=>16,"varname"=>"AwaitingTaxRelief", "name" => "AwaitingTaxRelief");
$dalTablemonthlyremittax["TotalAmountOfCompensation"] = array("type"=>5,"varname"=>"TotalAmountOfCompensation", "name" => "TotalAmountOfCompensation");
$dalTablemonthlyremittax["StatutoryMinimumWage"] = array("type"=>5,"varname"=>"StatutoryMinimumWage", "name" => "StatutoryMinimumWage");
$dalTablemonthlyremittax["OtherNonTaxableCompensation"] = array("type"=>5,"varname"=>"OtherNonTaxableCompensation", "name" => "OtherNonTaxableCompensation");
$dalTablemonthlyremittax["TaxableCompensation"] = array("type"=>5,"varname"=>"TaxableCompensation", "name" => "TaxableCompensation");
$dalTablemonthlyremittax["TaxRequiredToBeWithheld"] = array("type"=>5,"varname"=>"TaxRequiredToBeWithheld", "name" => "TaxRequiredToBeWithheld");
$dalTablemonthlyremittax["TaxRefund"] = array("type"=>5,"varname"=>"TaxRefund", "name" => "TaxRefund");
$dalTablemonthlyremittax["TaxRequiredForRemittance"] = array("type"=>5,"varname"=>"TaxRequiredForRemittance", "name" => "TaxRequiredForRemittance");
$dalTablemonthlyremittax["TotalAmountStillDue"] = array("type"=>5,"varname"=>"TotalAmountStillDue", "name" => "TotalAmountStillDue");
$dalTablemonthlyremittax["AuthorizedRepresentative"] = array("type"=>200,"varname"=>"AuthorizedRepresentative", "name" => "AuthorizedRepresentative");
$dalTablemonthlyremittax["TelNo"] = array("type"=>200,"varname"=>"TelNo", "name" => "TelNo");
$dalTablemonthlyremittax["ZipCode"] = array("type"=>200,"varname"=>"ZipCode", "name" => "ZipCode");
$dalTablemonthlyremittax["Deminimis"] = array("type"=>5,"varname"=>"Deminimis", "name" => "Deminimis");
	$dalTablemonthlyremittax["TxID"]["key"]=true;

$dal_info["payrollflex_at_localhost__monthlyremittax"] = &$dalTablemonthlyremittax;
?>