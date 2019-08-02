<?php
class eventclass_earningadjustment  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["AfterEdit"]=true;

		$this->events["IsRecordEditable"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		$pp=$values["PaymentPeriod"];
$ea=$values["eaID"];

if ($pp==3) {

$sqlr = "UPDATE earningadjustment SET LessAbsences=1  WHERE eaID='$ea'";

};

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		$pp=$values["PaymentPeriod"];
$ea=$values["eaID"];

if ($pp==3) {

$sqlr = "UPDATE earningadjustment SET LessAbsences=1  WHERE eaID='$ea'";

};
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Is Record Editable
function IsRecordEditable($values, $isEditable)
{

		$eid=$values["EmployeeID"] ;

$lk=DBLookup("SELECT Inactive FROM demo_user WHERE EmployeeID='$eid'");

if ($lk==1)
 return false;
else
 return true;

// Place event code here.
// Use "Add Action" button to add code snippets.

//return $isEditable;
;		
} // function IsRecordEditable

		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
