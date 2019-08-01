<?php
class eventclass_leaves11  extends eventsBase
{
	function __construct()
	{
	// fill list of events

		$this->events["BeforeEdit"]=true;


		$this->events["BeforeShowAdd"]=true;

		$this->events["BeforeShowEdit"]=true;

		$this->events["IsRecordEditable"]=true;

		$this->events["AfterAdd"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["AfterDelete"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		

$fh=$values["FirstHalf"];
$sh=$values["SecondHalf"];
$fd=$values["FromDate"];
$td=$values["ToDate"];

$fd1=strtotime($fd);
$td1= strtotime($td);

if ($fd1>$td1) {

$message = "FromDate should be equal less than ToDate.";

$message;

return false;


}


elseif ($fh!=1 and  $sh!=1) {

$message = "Please select one or both FirstHalf or SecondHalf";

$message;

return false;

}

else
{
return True;
};




// Place event code here.
// Use "Add Action" button to add code snippets.


;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowAdd(&$xt, &$templatefile, &$pageObject)
{

		$att = $xt->fetchVar("Approved_editcontrol");
$att = str_replace(">"," DISABLED=DISABLED>",$att);
$xt->assign("Approved_editcontrol",$att);


$attz = $xt->fetchVar("Approvedby_editcontrol");
$attz = str_replace(">"," DISABLED=DISABLED>",$attz);
$xt->assign("Approvedby_editcontrol",$attz);

$at1 = $xt->fetchVar("EmployeeID_editcontrol");
$at1 = str_replace(">"," DISABLED=DISABLED>",$at1);
$xt->assign("EmployeeID_editcontrol",$at1);


$at3 = $xt->fetchVar("Locked_editcontrol");
$at3 = str_replace(">"," DISABLED=DISABLED>",$at3);
$xt->assign("Locked_editcontrol",$at3);

$at4 = $xt->fetchVar("Posted_editcontrol");
$at4 = str_replace(">"," DISABLED=DISABLED>",$at4);
$xt->assign("Posted_editcontrol",$at4);


 $attr = $xt->fetchVar("Superior_editcontrol");
 $attr = str_replace(">"," READONLY=READONLY>",$attr);
 $xt->assign("Superior_editcontrol",$attr);
;		
} // function BeforeShowAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, &$pageObject)
{

		$att = $xt->fetchVar("Approved_editcontrol");
$att = str_replace(">"," DISABLED=DISABLED>",$att);
$xt->assign("Approved_editcontrol",$att);


$attz = $xt->fetchVar("Approvedby_editcontrol");
$attz = str_replace(">"," DISABLED=DISABLED>",$attz);
$xt->assign("Approvedby_editcontrol",$attz);

$at1 = $xt->fetchVar("EmployeeID_editcontrol");
$at1 = str_replace(">"," DISABLED=DISABLED>",$at1);
$xt->assign("EmployeeID_editcontrol",$at1);

//$at2 = $xt->fetchVar("Superior_editcontrol");
//$at2 = str_replace(">"," DISABLED=DISABLED>",$at2);
//$xt->assign("Superior_editcontrol",$at2);


$at3 = $xt->fetchVar("Locked_editcontrol");
$at3 = str_replace(">"," DISABLED=DISABLED>",$at3);
$xt->assign("Locked_editcontrol",$at3);

$at4 = $xt->fetchVar("Posted_editcontrol");
$at4 = str_replace(">"," DISABLED=DISABLED>",$at4);
$xt->assign("Posted_editcontrol",$at4);


 $attr = $xt->fetchVar("Superior_editcontrol");
 $attr = str_replace(">"," READONLY=READONLY>",$attr);
 $xt->assign("Superior_editcontrol",$attr);







;		
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Is Record Editable
function IsRecordEditable($values, $isEditable)
{

		

$lkd=$values["Locked"];

if($lkd==1) {

return $isEditable=false;

}

else return $isEditable=true;
;		
} // function IsRecordEditable

		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		
header("Location: leaves11_edit.php?editid1=".$values["LvID"]);
exit();

;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		$fh=$values["FirstHalf"];
$sh=$values["SecondHalf"];
$fd=$values["FromDate"];
$td=$values["ToDate"];

$fd1=strtotime($fd);
$td1= strtotime($td);

if ($fd1>$td1) {

$message = "FromDate should be equal less than ToDate.";

$message;

return false;


}


elseif ($fh!=1 and  $sh!=1) {

$message = "Please select one or both FirstHalf or SecondHalf";

$message;

return false;

}

else
{
return True;
};




// Place event code here.
// Use "Add Action" button to add code snippets.


;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record deleted
function AfterDelete($where, &$deleted_values, &$message, &$pageObject)
{

		

$do=$deleted_values["LvID"];

$sqldel = "DELETE FROM indleave WHERE LvID='$do'";
CustomQuery($sqldel);


;		
} // function AfterDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
