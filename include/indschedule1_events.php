<?php
class eventclass_indschedule1  extends eventsBase
{
	function __construct()
	{
	// fill list of events

		$this->events["BeforeEdit"]=true;

		$this->events["AfterEdit"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		-

$tempot2=$values["TempOT"];

$apot=$values["AOTMins"];



return true;


;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		
$sc=$values["ScID"];
$fo=$values["FiledOT"];
$to=$values["TempOT"];
$apt=$values["ApprovedOT"];
$aot=$values["AOTMins"];
$ard=$values["ApprovedRD"];
$wm=$values["WorkMinsNet"];
$nd=$values["NDMins"];
$ndo=$values["NDOTMins"];
$anf=$values["ApprovedNightDiff"];


if ($fo==Null and $apt==1 and $aot==Null) {
$sqlu= "UPDATE indschedule SET AOTMins=NULLIF('$to','')  WHERE ScID='$sc'";
CustomQuery($sqlu);

}

if ($apt!=1) {
$sqlq= "UPDATE indschedule SET AOTMins=NULL  WHERE ScID='$sc'";
CustomQuery($sqlq);

}


if ($ard==1) {
$sqlv= "UPDATE indschedule SET RDMins=NULLIF('$wm','')  WHERE ScID='$sc'";
CustomQuery($sqlv);

}

if ($ard!=1) {
$sqlv= "UPDATE indschedule SET RDMins=NULL  WHERE ScID='$sc'";
CustomQuery($sqlv);

}


if ($anf==1) {
$sqlr= "UPDATE indschedule SET ANDiff=NULLIF('$nd',''), ANDOTMins=NULLIF('$ndo','')   WHERE ScID='$sc'";
CustomQuery($sqlr);

}

if ($anf!=1) {
$sqlr= "UPDATE indschedule SET ANDiff=NULL, ANDOTMins=NULL   WHERE ScID='$sc'";
CustomQuery($sqlr);

}

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
