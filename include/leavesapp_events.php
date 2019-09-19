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

		$this->events["IsRecordEditable"]=true;

		$this->events["BeforeMoveNextList"]=true;


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

$at9 = $xt->fetchVar("Superior2_editcontrol");
$at9 = str_replace(">"," DISABLED=DISABLED>",$at9);
$xt->assign("Superior2_editcontrol",$at9);


$at10 = $xt->fetchVar("2ndApproval_editcontrol");
$at10 = str_replace(">"," DISABLED=DISABLED>",$at10);
$xt->assign("2ndApproval_editcontrol",$at10);

$at11 = $xt->fetchVar("Approved_editcontrol");
$at11 = str_replace(">"," DISABLED=DISABLED>",$at11);
$xt->assign("Approved_editcontrol",$at11);





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

$sup1=$values["Superior"];
$sup2=$values["Superior2"];
$ap1=$values["1stApproval"];
$ap2=$values["2ndApproval"];



$df=$values["FromDate"];
$dt=$values["ToDate"];
$nd=$values["Days"];

$ts1 = strtotime($df);
$ts2 = strtotime($dt);

$ndays = 1+(floor(($ts2 - $ts1)/(3600*24)));


$tdays=$ndays*$nd;

$squ = "Update leaves set TotalDays='$tdays' where LvID='$lvid'";
 CustomQuery($squ);



//$ab=$values["Approved"];

$usn=Security::getUserName();

$logx=DBLookup("select LogID from logins where UserName='". $usn. "'");


if ($sup1!=NULL and $ap1==1 and $sup2==NULL) {
//if ($ab==1) {

$sqa = "UPDATE leaves SET Approvedby='$logx', Approved=1, ApprovedDate=now(), ApprovedTime=now() WHERE LvID='$lvid'";
CustomQuery($sqa);


//Posting leaves



$fd= $values["FromDate"];
$td= $values["ToDate"];
$empid= $values["EmployeeID"];
$ltype= $values["LeaveType"];
$days= $values["Days"];
$fh= $values["FirstHalf"];
$sh= $values["SecondHalf"];
$rea=$values["Reason"];
$rea=addslashes($rea);


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



$sqlrx = "INSERT indleave VALUES (NULL, '$empid', DATE_ADD('$fd', INTERVAL '$i' DAY), '$days', '$pkpx', '$ltype', '$lvid', '$fh', '$sh', '$rea')";
CustomQuery($sqlrx);
$i++;
$pk=$pk-$days;

ENDWHILE;


$sqlu = "Update leaves set Posted=1 where LvID='$lvid'";
 CustomQuery($sqlu);

$sqlv = "Update leaves set Locked=1 where LvID='$lvid'";
 CustomQuery($sqlv);



$empy=$values["EmployeeID"];
$logt=$values["FromDate"];
$logt2=$values["ToDate"];

$rea=$values["Reason"];
$rea=addslashes($rea);

$ltp=$values["LeaveType"];

$su1=$values["Superior"];


$ltyp1=DBLookup("SELECT LeaveType FROM leavetypes WHERE LTID='$ltp'");

$empr=DBLookup("SELECT Employer FROM demo_user WHERE EmployeeID='$empy'");

$empname=DBLookup("SELECT user_name FROM demo_user WHERE EmployeeID='$empy'");

$mgrname=DBLookup("SELECT user_name FROM demo_user WHERE EmployeeID='$su1'");

$email=DBLookup("SELECT Email FROM demo_user WHERE EmployeeID='$empy'");

$bcc=DBLookup("SELECT AdminEmail FROM employername WHERE EnID='$empr'");



$message="Your ". $ltyp1. " has been approved by ".$mgrname."\nName:".$empname."\nType: ".$ltyp1."\nReason: ".$rea."\nDate: ".$logt." - ".$logt2."\nNo. Of Days: ". $tdays."\n\nBest regards, \nPayrollFlex Admin";
$subject=$ltyp1. " Approved! - PayrollFlex";
runner_mail(array('to'  => $email, 'cc' => $cc,
'bcc' => $bcc, 'subject' => $subject, 'body' => $message));


};

if ($sup1!=NULL and $ap1!=1 and $sup2==NULL) {

$sqldel = "DELETE FROM indleave WHERE LvID='$lvid'";
CustomQuery($sqldel);

$sqb = "UPDATE leaves SET Approvedby=NULL WHERE LvID='$lvid'";
CustomQuery($sqb);

$sqlz = "Update leaves set Posted=NULL where LvID='$lvid'";
 CustomQuery($sqlz);

$sqlx = "Update leaves set Locked=NULL where LvID='$lvid'";
 CustomQuery($sqlx);

$sqy = "UPDATE leaves SET Approvedby=NULL, Approved=NULL, ApprovedDate=NULL, ApprovedTime=NULL WHERE LvID='$lvid'";
CustomQuery($sqy);

};


if ($sup1!=NULL and $ap1==2 and $sup2==NULL) { 

$empy=$values["EmployeeID"];
$logt=$values["FromDate"];
$logt2=$values["ToDate"];
$rea=$values["Reason"];
$rea=addslashes($rea);

$ltp=$values["LeaveType"];

$su1=$values["Superior"];


$ltyp1=DBLookup("SELECT LeaveType FROM leavetypes WHERE LTID='$ltp'");

$empr=DBLookup("SELECT Employer FROM demo_user WHERE EmployeeID='$empy'");

$empname=DBLookup("SELECT user_name FROM demo_user WHERE EmployeeID='$empy'");

$mgrname=DBLookup("SELECT user_name FROM demo_user WHERE EmployeeID='$su1'");

$email=DBLookup("SELECT Email FROM demo_user WHERE EmployeeID='$empy'");

$bcc=DBLookup("SELECT AdminEmail FROM employername WHERE EnID='$empr'");



$message="Your ". $ltyp1. " has been disapproved by ".$mgrname."\nName:".$empname."\nType: ".$ltyp1."\nReason: ".$rea."\nDate: ".$logt." - ".$logt2."\nNo. Of Days: ". $tdays."\n\nBest regards, \nPayrollFlex Admin";
$subject=$ltyp1. " Disapproved! - PayrollFlex";
runner_mail(array('to'  => $email, 'cc' => $cc,
'bcc' => $bcc, 'subject' => $subject, 'body' => $message));

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
