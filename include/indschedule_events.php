<?php
class eventclass_indschedule  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeShowEdit"]=true;

		$this->events["IsRecordEditable"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, &$pageObject)
{

		
$attrx = $xt->fetchVar("Locked_editcontrol");
$attrx = str_replace(">"," DISABLED=DISABLED>",$attrx);
$xt->assign("Locked_editcontrol",$attrx);


$attry = $xt->fetchVar("Mispunched_editcontrol");
$attry = str_replace(">"," DISABLED=DISABLED>",$attry);
$xt->assign("Mispunched_editcontrol",$attry);

$attrz = $xt->fetchVar("Absent_editcontrol");
$attrz = str_replace(">"," DISABLED=DISABLED>",$attrz);
$xt->assign("Absent_editcontrol",$attrz);

;		
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Is Record Editable
function IsRecordEditable($values, $isEditable)
{

		


//$lk=$values["Locked"];



//if ($lk == 1)
// return false;
//else
 return true;
;		
} // function IsRecordEditable

		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
