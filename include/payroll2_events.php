<?php
class eventclass_payroll2  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["IsRecordEditable"]=true;

		$this->events["AfterEdit"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Is Record Editable
function IsRecordEditable($values, $isEditable)
{

		
 return true;
//return $isEditable;

;		
} // function IsRecordEditable

		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		$fd=$oldvalues["PayFromDate"];
$td=$oldvalues["PayToDate"];



$lk=$values["Locked"];

$squ = "Update payrolltab set Locked='$lk' where ToDate='$td'";
 CustomQuery($squ);


$squd = "Update payrolldiv set Locked='$lk' where ToDate='$td'";
 CustomQuery($squd);

$sqi = "Update indschedule set Locked='$lk' where SDate between '$fd' and '$td'";
 CustomQuery($sqi);
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
