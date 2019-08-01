<?php
class eventclass_monthlyremittax  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterEdit"]=true;

		$this->events["AfterAdd"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		
$txid=$values["TxID"]; 
$mo=$values["Month"]; //MMo
$yr=$values["Year"]; //MYr
$emr=$values["EmployerID"]; 
//$dem=$values["Deminimis"]; 
$txref=$values["TaxRefund"]; 

$tgr = DBLookup("SELECT SUM(TGrossPay) FROM payrollsum2bir WHERE Employer='$emr' and MMo='$mo' and MYr='$yr' GROUP BY Employer");
$tgmin = DBLookup("SELECT SUM(TGrossPay) FROM payrollsum2bir WHERE Employer='$emr' and MMo='$mo' and MYr='$yr' and MinWage>0 GROUP BY Employer");

$tss = DBLookup("SELECT SUM(TSSS) FROM payrollsum2bir WHERE Employer='$emr' and MMo='$mo' and MYr='$yr' GROUP BY Employer");
$tpi = DBLookup("SELECT SUM(TPagibig) FROM payrollsum2bir WHERE Employer='$emr' and MMo='$mo' and MYr='$yr' GROUP BY Employer");
$tph = DBLookup("SELECT SUM(TPHIC) FROM payrollsum2bir WHERE Employer='$emr' and MMo='$mo' and MYr='$yr' GROUP BY Employer");
$ttx = DBLookup("SELECT SUM(TTtax) FROM payrollsum2bir WHERE Employer='$emr' and MMo='$mo' and MYr='$yr' GROUP BY Employer");
$tntx = DBLookup("SELECT SUM(Amount) FROM nontaxadj WHERE Employer='$emr' and MMo='$mo' and MYr='$yr' GROUP BY Employer");

$tdem = DBLookup("SELECT SUM(DeMinimis) FROM demini WHERE Employer='$emr' and MMo='$mo' and MYr='$yr' GROUP BY Employer");


$TotNt=$tntx+$tss+$tpi+$tph+$tdem;
$tcom=$tgr-$tgmin-$TotNt;

$treqw=$ttx-$txref;

$sqlr = "UPDATE monthlyremittax SET TotalAmountOfCompensation=NULLIF('$tgr',''), StatutoryMinimumWage=NULLIF('$tgmin',''), OtherNonTaxableCompensation=NULLIF('$TotNt',''), TaxRequiredToBeWithheld=NULLIF('$ttx',''), TaxableCompensation=NULLIF('$tcom',''), TaxRequiredForRemittance=NULLIF('$treqw',''), TotalAmountStillDue=NULLIF('$treqw','') WHERE TxID='$txid'";

CustomQuery($sqlr);
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		
$txid=$values["TxID"]; 
$mo=$values["Month"]; //MMo
$yr=$values["Year"]; //MYr
$emr=$values["EmployerID"]; 
//$dem=$values["Deminimis"]; 
$txref=$values["TaxRefund"]; 

$tgr = DBLookup("SELECT SUM(TGrossPay) FROM payrollsum2bir WHERE Employer='$emr' and MMo='$mo' and MYr='$yr' GROUP BY Employer");
$tgmin = DBLookup("SELECT SUM(TGrossPay) FROM payrollsum2bir WHERE Employer='$emr' and MMo='$mo' and MYr='$yr' and MinWage>0 GROUP BY Employer");

$tss = DBLookup("SELECT SUM(TSSS) FROM payrollsum2bir WHERE Employer='$emr' and MMo='$mo' and MYr='$yr' GROUP BY Employer");
$tpi = DBLookup("SELECT SUM(TPagibig) FROM payrollsum2bir WHERE Employer='$emr' and MMo='$mo' and MYr='$yr' GROUP BY Employer");
$tph = DBLookup("SELECT SUM(TPHIC) FROM payrollsum2bir WHERE Employer='$emr' and MMo='$mo' and MYr='$yr' GROUP BY Employer");
$ttx = DBLookup("SELECT SUM(TTtax) FROM payrollsum2bir WHERE Employer='$emr' and MMo='$mo' and MYr='$yr' GROUP BY Employer");
$tntx = DBLookup("SELECT SUM(Amount) FROM nontaxadj WHERE Employer='$emr' and MMo='$mo' and MYr='$yr' GROUP BY Employer");
$tdem = DBLookup("SELECT SUM(DeMinimis) FROM demini WHERE Employer='$emr' and MMo='$mo' and MYr='$yr' GROUP BY Employer");


$TotNt=$tntx+$tss+$tpi+$tph+$tdem;
$tcom=$tgr-$tgmin-$TotNt;

$treqw=$ttx-$txref;

$sqlr = "UPDATE monthlyremittax SET TotalAmountOfCompensation=NULLIF('$tgr',''), StatutoryMinimumWage=NULLIF('$tgmin',''), OtherNonTaxableCompensation=NULLIF('$TotNt',''), TaxRequiredToBeWithheld=NULLIF('$ttx',''), TaxableCompensation=NULLIF('$tcom',''), TaxRequiredForRemittance=NULLIF('$treqw',''), TotalAmountStillDue=NULLIF('$treqw','') WHERE TxID='$txid'";

CustomQuery($sqlr);

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
