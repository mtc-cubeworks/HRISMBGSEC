<?php
class eventclass_leaves1  extends eventsBase
{
	function __construct()
	{
	// fill list of events

		$this->events["BeforeEdit"]=true;


		$this->events["BeforeShowAdd"]=true;

		$this->events["BeforeShowEdit"]=true;

		$this->events["AfterDelete"]=true;

		$this->events["AfterAdd"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["AfterEdit"]=true;

		$this->events["BeforeMoveNextList"]=true;


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

		//$att = $xt->fetchVar("Approved_editcontrol");
//$att = str_replace(">"," DISABLED=DISABLED>",$att);
//$xt->assign("Approved_editcontrol",$att);


//$attz = $xt->fetchVar("Approvedby_editcontrol");
//$attz = str_replace(">"," DISABLED=DISABLED>",$attz);
//$xt->assign("Approvedby_editcontrol",$attz);


//$at2 = $xt->fetchVar("Superior_editcontrol");
//$at2 = str_replace(">"," DISABLED=DISABLED>",$at2);
//$xt->assign("Superior_editcontrol",$at2);


//$at3 = $xt->fetchVar("Locked_editcontrol");
//$at3 = str_replace(">"," DISABLED=DISABLED>",$at3);
//$xt->assign("Locked_editcontrol",$at3);

//$at4 = $xt->fetchVar("Posted_editcontrol");
//$at4 = str_replace(">"," DISABLED=DISABLED>",$at4);
//$xt->assign("Posted_editcontrol",$at4);
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

//$at2 = $xt->fetchVar("Superior_editcontrol");
//$at2 = str_replace(">"," DISABLED=DISABLED>",$at2);
//$xt->assign("Superior_editcontrol",$at2);


//$at3 = $xt->fetchVar("Locked_editcontrol");
//$at3 = str_replace(">"," DISABLED=DISABLED>",$at3);
//$xt->assign("Locked_editcontrol",$at3);

$at4 = $xt->fetchVar("Posted_editcontrol");
$at4 = str_replace(">"," DISABLED=DISABLED>",$at4);
$xt->assign("Posted_editcontrol",$at4)
;		
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record deleted
function AfterDelete($where, &$deleted_values, &$message, &$pageObject)
{

		

$do=$deleted_values["LvID"];

$sqldel = "DELETE FROM indleave WHERE LvID='$do'";
CustomQuery($sqldel);

;		
} // function AfterDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		
$lv=$values["LvID"];
$df=$values["FromDate"];
$dt=$values["ToDate"];
$nd=$values["Days"];

$ts1 = strtotime($df);
$ts2 = strtotime($dt);

$ndays = 1+(floor(($ts2 - $ts1)/(3600*24)));


$tdays=$ndays*$nd;

$squ = "Update leaves set TotalDays='$tdays' where LvID='$lv'";
 CustomQuery($squ);

//header("Location: leaves1_edit.php?editid1=".$values["LvID"]);
//exit();
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

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		$lv=$values["LvID"];
$df=$values["FromDate"];
$dt=$values["ToDate"];
$nd=$values["Days"];

$ts1 = strtotime($df);
$ts2 = strtotime($dt);

$ndays = 1+(floor(($ts2 - $ts1)/(3600*24)));

$tdays=$ndays*$nd;

$squ = "Update leaves set TotalDays='$tdays' where LvID='$lv'";
 CustomQuery($squ);

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, &$pageObject)
{

		
if ($data["1stApproval"]==1)  

  $record["1stApproval_css"].='color:#219f17; font-weight:Bold';

if ($data["1stApproval"]==2)  

 { $record["1stApproval_css"].='color:#da0909; font-weight:Bold'; };

if ($data["2ndApproval"]==1)  

  $record["2ndApproval_css"].='color:#219f17; font-weight:Bold';

if ($data["2ndApproval"]==2)  

 { $record["2ndApproval_css"].='color:#da0909; font-weight:Bold'; };
;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
