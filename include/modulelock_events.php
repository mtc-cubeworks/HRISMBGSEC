<?php
class eventclass_modulelock  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;

		$this->events["AfterAdd"]=true;

		$this->events["AfterEdit"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		


$pr=$values["InputID"];
$lk=$values["Locked"];

$empr=$values["Employer"];
$dvv=$values["Division"];
$$values["WageType"];

$em=DBLookup("select Employer from payroll where PSID='$pr' ");
$dv=DBLookup("select Division from payroll where PSID='$pr' ");
$wt=DBLookup("select WageType from payroll where PSID='$pr' ");

$sqi = "Update payroll set Locked='$lk' where PSID='$pr'";
 CustomQuery($sqi);

$sq2 = "Update payrolltab set Locked='$lk' where Employer='$em' and Division='$dv' and WageType='$wt'";
 CustomQuery($sq2);

$sq3 = "Update payrolldiv set Locked='$lk' where Employer='$em' and Division='$dv' and WageType='$wt'";
 CustomQuery($sq3);


;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		


$pr=$values["InputID"];
$lk=$values["Locked"];

$empr=$values["Employer"];
$dvv=$values["Division"];
$$values["WageType"];

$em=DBLookup("select Employer from payroll where PSID='$pr' ");
$dv=DBLookup("select Division from payroll where PSID='$pr' ");
$wt=DBLookup("select WageType from payroll where PSID='$pr' ");

$sqi = "Update payroll set Locked='$lk' where PSID='$pr'";
 CustomQuery($sqi);

$sq2 = "Update payrolltab set Locked='$lk' where Employer='$em' and Division='$dv' and WageType='$wt'";
 CustomQuery($sq2);

$sq3 = "Update payrolldiv set Locked='$lk' where Employer='$em' and Division='$dv' and WageType='$wt'";
 CustomQuery($sq3);


;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
