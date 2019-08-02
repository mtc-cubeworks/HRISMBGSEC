<?php
class eventclass_contlo  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterEdit"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		
$fd=$values["FromDate"];
$td=$values["ToDate"];


//$sql2 = "Update loansreport set FromDate='$fd', ToDate='$td' where IrID>0'";
// CustomQuery($sql2);

//$sql1 = "Update ssscontsummary set FromDate='$fd', ToDate='$td' where ContID>0'";
// CustomQuery($sql1);

;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
