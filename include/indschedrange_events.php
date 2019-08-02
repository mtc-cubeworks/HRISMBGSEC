<?php
class eventclass_indschedrange  extends eventsBase
{
	function __construct()
	{
	// fill list of events


		$this->events["IsRecordEditable"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
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
