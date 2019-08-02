<?php
class eventclass_payrollstatutories  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["IsRecordEditable"]=true;

		$this->events["BeforeAdd"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Is Record Editable
function IsRecordEditable($values, $isEditable)
{

		$fr=$values["FromDate"];
$to=$values["ToDate"]; 

$lk=DBLookup("SELECT Locked FROM payrolltab WHERE FromDate='$fr' and ToDate='$to'");

if ($lk==1)
{
//$pageObject->setMessage("Date is already Locked!");
 return false;
}
else {
 return true;

}
//return $isEditable;
;		
} // function IsRecordEditable

		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		$fr=$values["FromDate"];
$to=$values["ToDate"]; 

$lk=DBLookup("SELECT Locked FROM payrolltab WHERE FromDate='$fr' and ToDate='$to'");

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
