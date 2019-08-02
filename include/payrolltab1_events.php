<?php
class eventclass_payrolltab1  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["IsRecordEditable"]=true;

		$this->events["AfterDelete"]=true;

		$this->events["BeforeAdd"]=true;


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
;		
} // function IsRecordEditable

		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record deleted
function AfterDelete($where, &$deleted_values, &$message, &$pageObject)
{

		

$fr=$deleted_values["PayFromDate"];
$to=$deleted_values["PayToDate"];

$sq1 = "DELETE FROM payrolltax WHERE FromDate='$fr' and ToDate='$to'";
CustomQuery($sq1);

$sq2 = "DELETE FROM payrollstatutories WHERE FromDate='$fr' and ToDate='$to'";
CustomQuery($sq2);

$sq3 = "DELETE FROM payrollearnadj WHERE FromDate='$fr' and ToDate='$to'";
CustomQuery($sq3);

$sq4 = "DELETE FROM payrolldeductions WHERE FromDate='$fr' and ToDate='$to'";
CustomQuery($sq4);


;		
} // function AfterDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		
$to=$values["ToDate"]; 

$lk=DBLookup("SELECT Locked FROM payroll WHERE PayToDate='$to'");

if ($lk==1)
{
$pageObject->setMessage("Date is already Locked!");
 return false;
}
else {
 return true;

}
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
