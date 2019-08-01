<?php
class eventclass_leavesapp  extends eventsBase
{
	function __construct()
	{
	// fill list of events

		$this->events["BeforeEdit"]=true;


		$this->events["BeforeShowAdd"]=true;

		$this->events["BeforeShowEdit"]=true;

		$this->events["AfterEdit"]=true;

		$this->events["AfterDelete"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		


return true;


;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowAdd(&$xt, &$templatefile, &$pageObject)
{

		$attz = $xt->fetchVar("Approvedby_editcontrol");
$attz = str_replace(">"," DISABLED=DISABLED>",$attz);
$xt->assign("Approvedby_editcontrol",$attz);

$at1 = $xt->fetchVar("EmployeeID_editcontrol");
$at1 = str_replace(">"," DISABLED=DISABLED>",$at1);
$xt->assign("EmployeeID_editcontrol",$at1);



$at4 = $xt->fetchVar("Posted_editcontrol");
$at4 = str_replace(">"," DISABLED=DISABLED>",$at4);
$xt->assign("Posted_editcontrol",$at4);

$at5 = $xt->fetchVar("LeaveType_editcontrol");
$at5 = str_replace(">"," DISABLED=DISABLED>",$at5);
$xt->assign("LeaveType_editcontrol",$at5);



$at8 = $xt->fetchVar("Superior_editcontrol");
$at8 = str_replace(">"," DISABLED=DISABLED>",$at8);
$xt->assign("Superior_editcontrol",$at8);

$at9 = $xt->fetchVar("FirstHalf_editcontrol");
$at9 = str_replace(">"," DISABLED=DISABLED>",$at9);
$xt->assign("FirstHalf_editcontrol",$at9);

$at10 = $xt->fetchVar("SecondHalf_editcontrol");
$at10 = str_replace(">"," DISABLED=DISABLED>",$at10);
$xt->assign("SecondHalf_editcontrol",$at10);

;		
} // function BeforeShowAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, &$pageObject)
{

		$attz = $xt->fetchVar("Approvedby_editcontrol");
$attz = str_replace(">"," DISABLED=DISABLED>",$attz);
$xt->assign("Approvedby_editcontrol",$attz);

$at1 = $xt->fetchVar("EmployeeID_editcontrol");
$at1 = str_replace(">"," DISABLED=DISABLED>",$at1);
$xt->assign("EmployeeID_editcontrol",$at1);



$at4 = $xt->fetchVar("Posted_editcontrol");
$at4 = str_replace(">"," DISABLED=DISABLED>",$at4);
$xt->assign("Posted_editcontrol",$at4);

$at5 = $xt->fetchVar("LeaveType_editcontrol");
$at5 = str_replace(">"," DISABLED=DISABLED>",$at5);
$xt->assign("LeaveType_editcontrol",$at5);



$at8 = $xt->fetchVar("Superior_editcontrol");
$at8 = str_replace(">"," DISABLED=DISABLED>",$at8);
$xt->assign("Superior_editcontrol",$at8);

//$at9 = $xt->fetchVar("FirstHalf_editcontrol");
//$at9 = str_replace(">"," DISABLED=DISABLED>",$at9);
//$xt->assign("FirstHalf_editcontrol",$at9);

//$at10 = $xt->fetchVar("SecondHalf_editcontrol");
//$at10 = str_replace(">"," DISABLED=DISABLED>",$at10);
//$xt->assign("SecondHalf_editcontrol",$at10);
;		
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		$lvid= $values["LvID"];

$ab=$values["Approved"];

$usn=Security::getUserName();



$logx=DBLookup("select LogID from logins where UserName='". $usn. "'");


if ($ab==1) {

$sqa = "UPDATE leaves SET Approvedby='$logx' WHERE LvID='$lvid'";
CustomQuery($sqa);


//Posting leaves



$fd= $values["FromDate"];
$td= $values["ToDate"];
$empid= $values["EmployeeID"];
$ltype= $values["LeaveType"];
$days= $values["Days"];
$fh= $values["FirstHalf"];
$sh= $values["SecondHalf"];



if($ltype==1) { //Vacation Leave
$pk=DBLookup("select VLBalance from leavebalance where EmployeeID='$empid'");
}

if($ltype==2) { //Sick Leave
$pk=DBLookup("select SLBalance from leavebalance where EmployeeID='$empid'");
}

if($ltype==3) { //Emergency Leave
$pk=DBLookup("select ELBalance from leavebalance where EmployeeID='$empid'");
}

if($ltype==5) { //Paternity Leave
$pk=DBLookup("select PLBalance from leavebalance where EmployeeID='$empid'");
}

if($ltype==7) { //Paternity Leave
$pk=10000;
}

$ts1 = strtotime($fd);
$ts2 = strtotime($td);

$inter = (($ts2 - $ts1)/86400)+1;

//$pkno=$pk/$days;



$i = 0;

$sqldel = "DELETE FROM indleave WHERE LvID='$lvid'";
CustomQuery($sqldel);

WHILE ($i < $inter):

if($pk<0.001) {$pkpx=1;};



$sqlrx = "INSERT indleave VALUES (NULL, '$empid', DATE_ADD('$fd', INTERVAL '$i' DAY), '$days', '$pkpx', '$ltype', '$lvid', '$fh', '$sh')";
CustomQuery($sqlrx);
$i++;
$pk=$pk-$days;

ENDWHILE;


$sqlu = "Update leaves set Posted=1 where LvID='$lvid'";
 CustomQuery($sqlu);

$sqlv = "Update leaves set Locked=1 where LvID='$lvid'";
 CustomQuery($sqlv);


};

if ($ab!=1) {

$sqldel = "DELETE FROM indleave WHERE LvID='$lvid'";
CustomQuery($sqldel);

$sqb = "UPDATE leaves SET Approvedby=NULL WHERE LvID='$lvid'";
CustomQuery($sqb);

$sqlz = "Update leaves set Posted=NULL where LvID='$lvid'";
 CustomQuery($sqlz);

$sqlx = "Update leaves set Locked=NULL where LvID='$lvid'";
 CustomQuery($sqlx);

};


;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
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
