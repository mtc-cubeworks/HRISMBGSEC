<?php
class eventclass_payroll  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["IsRecordEditable"]=true;

		$this->events["AfterAdd"]=true;

		$this->events["AfterEdit"]=true;

		$this->events["BeforeProcessRowList"]=true;

		$this->events["AfterDelete"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Is Record Editable
function IsRecordEditable($values, $isEditable)
{

		
$lk=$values["Locked"];

if ($lk == 1)
 return false;
else
 return true;
//return $isEditable;

;		
} // function IsRecordEditable

		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		
$td=$values["PayToDate"];

$lk=$values["Locked"];

$squ = "Update payrolltab set Locked='$lk' where ToDate='$td'";
 CustomQuery($squ);


$squd = "Update payrolldiv set Locked='$lk' where ToDate='$td'";
 CustomQuery($squd);
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		
$fd=$oldvalues["PayFromDate"];
$td=$oldvalues["PayToDate"];
$empr=$oldvalues["Employer"];
$dvv=$oldvalues["Division"];
$wt=$oldvalues["WageType"];

$lk=$values["Locked"];

$squ = "Update payrolltab set Locked='$lk' where ToDate='$td' and Employer='$empr' and Division='$dvv' and WageType='$wt'";
 CustomQuery($squ);

$squd = "Update payrolldiv set Locked='$lk' where ToDate='$td' and Employer='$empr' and Division='$dvv' and WageType='$wt'";
 CustomQuery($squd);

$sqi = "Update indschedule set Locked='$lk' where SDate between '$fd' and '$td'";
 CustomQuery($sqi);
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before record processed
function BeforeProcessRowList(&$data, &$pageObject)
{

		
return true;

;		
} // function BeforeProcessRowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record deleted
function AfterDelete($where, &$deleted_values, &$message, &$pageObject)
{

		
$fr=$deleted_values["PayFromDate"];
$to=$deleted_values["PayToDate"];
$dv=$deleted_values["Division"];
$wt=$deleted_values["WageType"];
$em=$deleted_values["Employer"];

$sq1 = "DELETE FROM payrolltax WHERE FromDate='$fr' and ToDate='$to' and Employer='$em' and Division='$dv' and WageType='$wt'";
CustomQuery($sq1);

$sq2 = "DELETE FROM payrollstatutories WHERE FromDate='$fr' and ToDate='$to' and Employer='$em' and Division='$dv' and WageType='$wt'";
CustomQuery($sq2);

$sq3 = "DELETE FROM payrollearnadj WHERE FromDate='$fr' and ToDate='$to' and Employer='$em' and Division='$dv' and WageType='$wt'";
CustomQuery($sq3);

$sq4 = "DELETE FROM payrolldeductions WHERE FromDate='$fr' and ToDate='$to' and Employer='$em' and Division='$dv' and WageType='$wt'";
CustomQuery($sq4);

$sq5 = "DELETE FROM payrolldiv WHERE FromDate='$fr' and ToDate='$to' and Employer='$em' and Division='$dv' and WageType='$wt'";
CustomQuery($sq5);

$sq6 = "DELETE FROM payrolltab WHERE FromDate='$fr' and ToDate='$to' and Employer='$em' and Division='$dv' and WageType='$wt'";
CustomQuery($sq6);
;		
} // function AfterDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
