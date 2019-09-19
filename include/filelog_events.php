<?php
class eventclass_filelog  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeShowAdd"]=true;

		$this->events["BeforeShowEdit"]=true;

		$this->events["AfterEdit"]=true;



		$this->events["IsRecordEditable"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["AfterAdd"]=true;

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





//$ab=$values["Approved"];

$usn=Security::getUserName();

$logx=DBLookup("select LogID from logins where UserName='". $usn. "'");


if ($hap==1) {


$sqa = "UPDATE filelog SET Approvedby='$logx', Approved=1, ApprovedDate=now() WHERE TransID2='$trid'";
CustomQuery($sqa);


$lg= $values["log_time"];
$dta= $values["data"];
$empid= $values["EmployeeID"];
$ml= $values["MLogID"];
$mld= $values["MLogDate"];
$ct= $values["ClockType"];




$sql = "INSERT demo_log VALUES ($lg, NULL, '$dta', '$empid', NULL, '$ml', '$mld', '$ct')";
CustomQuery($sql);

};

//if ($$hap!=1) {

//$sqldel = "DELETE FROM demo_log WHERE LvID='$lvid'";
//CustomQuery($sqldel);



//};


;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
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

		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		//**********  Send email with new data  ************




return true;

;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		$ckby=$values["CheckedBy"];
$apby=$values["ApprovedBy"];
$hrby=$values["HRApproval"];
$empy=$values["EmployeeID"];
$logt=$values["log_time"];
$rea=$values["Reason"];
$rea=addslashes($rea);

$empr=DBLookup("SELECT Employer FROM demo_user WHERE EmployeeID='$empy'");

$empname=DBLookup("SELECT user_name FROM demo_user WHERE EmployeeID='$empy'");


if ($ckby!=NULL) {

$email=DBLookup("SELECT Email FROM demo_user WHERE EmployeeID='$ckby'");
$bcc=DBLookup("SELECT AdminEmail FROM employername WHERE EnID='$empr'");
};

if ($apby!=NULL) {

$email=DBLookup("SELECT Email FROM demo_user WHERE EmployeeID='$apby'");
$bcc=DBLookup("SELECT AdminEmail FROM employername WHERE EnID='$empr'");
};

if ($apby!=NULL and $ckby!=NULL) {

$email=DBLookup("SELECT Email FROM demo_user WHERE EmployeeID='$ckby'");
$cc=DBLookup("SELECT Email FROM demo_user WHERE EmployeeID='$apby'");
$bcc=DBLookup("SELECT AdminEmail FROM employername WHERE EnID='$empr'");
};



$message="Please login to Payrollflex for Timelog approval:\nName:".$empname."\nLogTime: ".$logt."\nReason: ".$rea."\n\nBest regards, \nPayrollFlex Admin";
$subject="Timelog Requesting for Approval - PayrollFlex";
runner_mail(array('to'  => $email, 'cc' => $cc,
'bcc' => $bcc, 'subject' => $subject, 'body' => $message));




;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
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
