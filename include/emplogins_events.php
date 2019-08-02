<?php
class eventclass_emplogins  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeShowList"]=true;

		$this->events["BeforeShowEdit"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, &$pageObject)
{

		
$attz = $xt->fetchVar("Position_editcontrol");
$attz = str_replace(">"," DISABLED=DISABLED>",$attz);
$xt->assign("Position_editcontrol",$attz);

;		
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, &$pageObject)
{

		$attz = $xt->fetchVar("Position_editcontrol");
$attz = str_replace(">"," DISABLED=DISABLED>",$attz);
$xt->assign("Position_editcontrol",$attz);

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
