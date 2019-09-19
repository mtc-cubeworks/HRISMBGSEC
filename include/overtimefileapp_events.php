<?php
class eventclass_overtimefileapp  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["IsRecordEditable"]=true;

		$this->events["BeforeShowEdit"]=true;


		$this->events["AfterDelete"]=true;

		$this->events["BeforeEdit"]=true;

		$this->events["AfterEdit"]=true;

		$this->events["BeforeMoveNextList"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
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


$at3 = $xt->fetchVar("Locked_editcontrol");
$at3 = str_replace(">"," DISABLED=DISABLED>",$at3);
$xt->assign("Locked_editcontrol",$at3);

$at4 = $xt->fetchVar("Posted_editcontrol");
$at4 = str_replace(">"," DISABLED=DISABLED>",$at4);
$xt->assign("Posted_editcontrol",$at4);


 $attr5 = $xt->fetchVar("Superior_editcontrol");
 $attr5 = str_replace(">"," READONLY=READONLY>",$attr5);
 $xt->assign("Superior_editcontrol",$attr5);


 $attr51 = $xt->fetchVar("Superior2_editcontrol");
 $attr51 = str_replace(">"," READONLY=READONLY>",$attr51);
 $xt->assign("Superior2_editcontrol",$attr51);



 $attr6 = $xt->fetchVar("ApprovedDate_editcontrol");
 $attr6 = str_replace(">"," READONLY=READONLY>",$attr6);
 $xt->assign("ApprovedDate_editcontrol",$attr6);


 $attr7 = $xt->fetchVar("ApprovedTime_editcontrol");
 $attr7 = str_replace(">"," READONLY=READONLY>",$attr7);
 $xt->assign("ApprovedTime_editcontrol",$attr7);




 $att71 = $xt->fetchVar("2ndApproval_editcontrol");
 $att71 = str_replace(">"," READONLY=READONLY>",$att71);
 $xt->assign("2ndApproval_editcontrol",$att71);









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

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		


$fd=$values["FromDateTime"];
$td=$values["ToDateTime"];

$fd1=strtotime($fd);
$td1= strtotime($td);

if ($fd1>=$td1) {

$message = "ToDateTime should be greater than FromDateTime.";

$message;

return false;


}

else {
return true;

}
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		$itid= $values["ItiD"];

$sup1=$values["Superior"];
$sup2=$values["Superior2"];
$ap1=$values["1stApproval"];
$ap2=$values["2ndApproval"];



$usn=Security::getUserName();

$logx=DBLookup("select LogID from logins where UserName='". $usn. "'");


if ($sup1!=NULL and $ap1==1 and $sup2==NULL) {


$sqa = "UPDATE overtimefile SET Approvedby='$logx', Approved=1, ApprovedDate=now(), ApprovedTime=now() WHERE ItiD='$itid'";
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



$ckby=$values["Superior"];
$apby=$values["Superior2"];
$empy=$values["EmployeeID"];
$logt=$values["FromDateTime"];
$logt2=$values["ToDateTime"];
$rea=$values["Reason"];
$rea=addslashes($rea);

$nomin=$values["NoMins"];


$ltyp1="Overtime";

$empr=DBLookup("SELECT Employer FROM demo_user WHERE EmployeeID='$empy'");

$empname=DBLookup("SELECT user_name FROM demo_user WHERE EmployeeID='$empy'");

$mgrname=DBLookup("SELECT user_name FROM demo_user WHERE EmployeeID='$ckby'");

$email=DBLookup("SELECT Email FROM demo_user WHERE EmployeeID='$empy'");
$bcc=DBLookup("SELECT AdminEmail FROM employername WHERE EnID='$empr'");



$message="Your Overtime has been approved by ".$mgrname. "\nName:".$empname."\nType: ".$ltyp1."\nReason: ".$rea."\nDate: ".$logt." - ".$logt2."\nDuration: ". $nomin."\n\nBest regards, \nPayrollFlex Admin";
$subject=$ltyp1. " Approved! - PayrollFlex";
runner_mail(array('to'  => $email, 'cc' => $cc,
'bcc' => $bcc, 'subject' => $subject, 'body' => $message));




};



if ($sup1!=NULL and $ap1!=1 and $sup2==NULL) {

$sqb = "UPDATE overtimefile SET Approvedby=NULL WHERE ItiD='$itid'";
CustomQuery($sqb);

$sqldel = "DELETE FROM indovertime WHERE ItID='$itid'";
CustomQuery($sqldel);

$sqlup = "Update overtimefile set Posted=NULL where ItiD='$itid'";
 CustomQuery($sqlup);


$sqlv = "Update overtimefile set Locked=NULL where ItiD='$itid'";
 CustomQuery($sqlv);

};


if ($sup1!=NULL and $ap1==2 and $sup2==NULL) {
$ckby=$values["Superior"];
$apby=$values["Superior2"];
$empy=$values["EmployeeID"];
$logt=$values["FromDateTime"];
$logt2=$values["ToDateTime"];
$rea=$values["Reason"];
$rea=addslashes($rea);


$nomin=$values["NoMins"];


$ltyp1="Overtime";

$empr=DBLookup("SELECT Employer FROM demo_user WHERE EmployeeID='$empy'");

$empname=DBLookup("SELECT user_name FROM demo_user WHERE EmployeeID='$empy'");

$mgrname=DBLookup("SELECT user_name FROM demo_user WHERE EmployeeID='$ckby'");

$email=DBLookup("SELECT Email FROM demo_user WHERE EmployeeID='$empy'");
$bcc=DBLookup("SELECT AdminEmail FROM employername WHERE EnID='$empr'");



$message="Your Overtime has been disapproved by ".$mgrname. "\nName:".$empname."\nType: ".$ltyp1."\nReason: ".$rea."\nDate: ".$logt." - ".$logt2."\nDuration: ". $nomin."\n\nBest regards, \nPayrollFlex Admin";
$subject=$ltyp1. " Disapproved! - PayrollFlex";
runner_mail(array('to'  => $email, 'cc' => $cc,
'bcc' => $bcc, 'subject' => $subject, 'body' => $message));
};
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
