<?php
class eventclass_overtimeapp  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterEdit"]=true;

		$this->events["BeforeShowEdit"]=true;

		$this->events["AfterDelete"]=true;



//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		
$itid= $values["ItiD"];

$ab=$values["Approved"];

$usn=Security::getUserName();


$logx=DBLookup("select LogID from logins where UserName='". $usn. "'");


if ($ab==1) {

$sqa = "UPDATE overtimefile SET Approvedby='$logx' WHERE ItiD='$itid'";
CustomQuery($sqa);


$empid= $values["EmployeeID"];
$dc= $values["DateCreated"];
$fd= $values["FromDateTime"];
$td= $values["ToDateTime"];
$appd= $values["Approved"];
$nomins= $values["NoMins"];



$ts1 = strtotime($fd);
$ts2 = strtotime($td);



global $dal;


$sqldel = "DELETE FROM indovertime WHERE ItiD='$itid'";
CustomQuery($sqldel);

$sqlr = "INSERT indovertime VALUES (NULL, '$dc', '$empid', '$fd', '$nomins', NULL, '$fd', '$td', NULL, '$itid')";
CustomQuery($sqlr);


$sqlup = "Update overtimefile set Posted=1 where ItiD='$itid'";
 CustomQuery($sqlup);

$sqlv = "Update overtimefile set Locked=1 where ItiD='$itid'";
 CustomQuery($sqlv);


};



if ($ab==NULL OR $ab==0)

{
$sqb = "UPDATE overtimefile SET Approvedby=NULL WHERE ItiD='$itid'";
CustomQuery($sqb);

$sqldel = "DELETE FROM indovertime WHERE ItID='$itid'";
CustomQuery($sqldel);

$sqlup = "Update overtimefile set Posted=NULL where ItiD='$itid'";
 CustomQuery($sqlup);


$sqlv = "Update overtimefile set Locked=NULL where ItiD='$itid'";
 CustomQuery($sqlv);

}
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, &$pageObject)
{

		


$att2 = $xt->fetchVar("EmployeeID_editcontrol");
$att2 = str_replace(">"," DISABLED=DISABLED>",$att2);
$xt->assign("EmployeeID_editcontrol",$att2);

$att3 = $xt->fetchVar("Posted_editcontrol");
$att3 = str_replace(">"," DISABLED=DISABLED>",$att3);
$xt->assign("Posted_editcontrol",$att3);

$att4 = $xt->fetchVar("Approvedby_editcontrol");
$att4 = str_replace(">"," DISABLED=DISABLED>",$att4);
$xt->assign("Approvedby_editcontrol",$att4);

$att5 = $xt->fetchVar("Superior_editcontrol");
$att5 = str_replace(">"," DISABLED=DISABLED>",$att5);
$xt->assign("Superior_editcontrol",$att5);
;		
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record deleted
function AfterDelete($where, &$deleted_values, &$message, &$pageObject)
{

		

$do=$deleted_values["OtiD"];

$sqldel = "DELETE FROM indovertime WHERE OtID='$do'";
CustomQuery($sqldel);


;		
} // function AfterDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
