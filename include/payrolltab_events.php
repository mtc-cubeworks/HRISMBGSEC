<?php
class eventclass_payrolltab  extends eventsBase
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

		


$lk=$values["Locked"];

if ($lk == 1)
 return false;
else
 return true;
;		
} // function IsRecordEditable

		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
