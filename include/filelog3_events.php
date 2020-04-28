<?php
class eventclass_filelog3  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeShowAdd"]=true;

		$this->events["BeforeShowEdit"]=true;

		$this->events["AfterEdit"]=true;


		$this->events["IsRecordEditable"]=true;

		$this->events["BeforeMoveNextList"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowAdd(&$xt, &$templatefile, &$pageObject)
{

		
 $attr = $xt->fetchVar("CheckedBy_editcontrol");
 $attr = str_replace(">"," READONLY=READONLY>",$attr);
 $xt->assign("CheckedBy_editcontrol",$attr);

 $att1 = $xt->fetchVar("ApprovedBy_editcontrol");
 $att1 = str_replace(">"," READONLY=READONLY>",$att1);
 $xt->assign("ApprovedBy_editcontrol",$att1);

 $att2 = $xt->fetchVar("MLogID_editcontrol");
 $att2 = str_replace(">"," READONLY=READONLY>",$att2);
 $xt->assign("MLogID_editcontrol",$att2);
;		
} // function BeforeShowAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, &$pageObject)
{

		
 $attr = $xt->fetchVar("CheckedBy_editcontrol");
 $attr = str_replace(">"," READONLY=READONLY>",$attr);
 $xt->assign("CheckedBy_editcontrol",$attr);

 $att1 = $xt->fetchVar("ApprovedBy_editcontrol");
 $att1 = str_replace(">"," READONLY=READONLY>",$att1);
 $xt->assign("ApprovedBy_editcontrol",$att1);

 $att2 = $xt->fetchVar("HRApproval_editcontrol");
 $att2 = str_replace(">"," READONLY=READONLY>",$att2);
 $xt->assign("HRApproval_editcontrol",$att2);

 $att3 = $xt->fetchVar("EmployeeID_editcontrol");
 $att3 = str_replace(">"," READONLY=READONLY>",$att3);
 $xt->assign("EmployeeID_editcontrol",$att3);

 $att4 = $xt->fetchVar("MLogID_editcontrol");
 $att4 = str_replace(">"," READONLY=READONLY>",$att4);
 $xt->assign("MLogID_editcontrol",$att4);

 $att5 = $xt->fetchVar("Checked_editcontrol");
 $att5 = str_replace(">"," READONLY=READONLY>",$att5);
 $xt->assign("Checked_editcontrol",$att5);

 $att6 = $xt->fetchVar("Approved_editcontrol");
 $att6 = str_replace(">"," READONLY=READONLY>",$att6);
 $xt->assign("Approved_editcontrol",$att6);

;		
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		$trid= $values["TransID2"];

$hap=$values["HRApproved"];



$usn=Security::getUserName();

$logx=DBLookup("select EmployeeID from logins where UserName='". $usn. "'");


if ($hap==1) {


$lg= $values["log_time"];
$dta= "Manual Entry";
$empid= $values["EmployeeID"];
$ml= $values["MLogID"];
$mld= $values["MLogDate"];
$ct= $values["ClockType"];

$sqa = "UPDATE filelog SET HRApproval='$logx', HRApproved=1, HRApprovedDate=now(), Locked=1 WHERE TransID2='$trid'";
CustomQuery($sqa);



$sql = "INSERT demo_log VALUES ('$lg', NULL, 'Manual Entry', '$empid', NULL, '$ml', '$mld', '$ct', '$trid')";
CustomQuery($sql);


//$ckby=$values["CheckedBy"];
//$apby=$values["ApprovedBy"];
//$hrby=$values["HRApproval"];
//$empy=$values["EmployeeID"];
//$logt=$values["log_time"];
//$rea=$values["Reason"];

//$empr=DBLookup("SELECT Employer FROM demo_user WHERE EmployeeID='$empy'");

//$empname=DBLookup("SELECT user_name FROM demo_user WHERE EmployeeID='$empy'");

//$mgrname=DBLookup("SELECT user_name FROM demo_user WHERE EmployeeID='$logx'");

//$email=DBLookup("SELECT Email FROM demo_user WHERE EmployeeID='$ckby'");
//$bcc=DBLookup("SELECT AdminEmail FROM employername WHERE EnID='$empr'");


//$message="Your TimeLog has been approved by ".$mgrname."\nName:".$empname."\nLogTime: ".$logt."\nReason: ".$rea."\n\nBest regards, \nPayrollFlex Admin";
//$subject="Timelog Approved! - PayrollFlex";
//runner_mail(array('to'  => $email, 'cc' => $cc,
//'bcc' => $bcc, 'subject' => $subject, 'body' => $message));



}

else {

$sqldel = "DELETE FROM demo_log WHERE TransID2='$trid'";
CustomQuery($sqldel);

$sqa1 = "UPDATE filelog SET HRApproval=NULL, HRApproved=NULL, HRApprovedDate=NULL, Locked=NULL WHERE TransID2='$trid'";
CustomQuery($sqa1);

if ($hap==2) {
//$ckby=$values["CheckedBy"];
//$apby=$values["ApprovedBy"];
//$hrby=$values["HRApproval"];
//$empy=$values["EmployeeID"];
//$logt=$values["log_time"];
//$rea=$values["Reason"];

//$empr=DBLookup("SELECT Employer FROM demo_user WHERE EmployeeID='$empy'");

//$empname=DBLookup("SELECT user_name FROM demo_user WHERE EmployeeID='$empy'");

//$mgrname=DBLookup("SELECT user_name FROM demo_user WHERE EmployeeID='$logx'");

//$email=DBLookup("SELECT Email FROM demo_user WHERE EmployeeID='$ckby'");
//$bcc=DBLookup("SELECT AdminEmail FROM employername WHERE EnID='$empr'");


//$message="Your TimeLog has been disapproved by ".$mgrname."\nName:".$empname."\nLogTime: ".$logt."\nReason: ".$rea."\n\nBest regards, \nPayrollFlex Admin";
//$subject="Timelog Disapproved! - PayrollFlex";
//runner_mail(array('to'  => $email, 'cc' => $cc,
//'bcc' => $bcc, 'subject' => $subject, 'body' => $message));


};

};


;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Is Record Editable
function IsRecordEditable($values, $isEditable)
{

		
;		
} // function IsRecordEditable

		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, &$pageObject)
{

		


if ($data["HRApproved"]==1)  

  $record["HRApproved_css"].='color:#219f17; font-weight:Bold';

if ($data["HRApproved"]==2)  

 { $record["HRApproved_css"].='color:#da0909; font-weight:Bold'; };


if ($data["Checked"]==1)  

  $record["Checked_css"].='color:#219f17; font-weight:Bold';

if ($data["Checked"]==2)  

 { $record["Checked_css"].='color:#da0909; font-weight:Bold'; };


if ($data["Approved"]==1)  

  $record["Approved_css"].='color:#219f17; font-weight:Bold';

if ($data["Approved"]==2)  

 { $record["Approved_css"].='color:#da0909; font-weight:Bold'; };
;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
