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

 $att5 = $xt->fetchVar("Superior2_editcontrol");
 $att5 = str_replace(">"," READONLY=READONLY>",$att5);
 $xt->assign("Superior2_editcontrol",$att5);


 $att6 = $xt->fetchVar("1stApproval_editcontrol");
 $att6 = str_replace(">"," READONLY=READONLY>",$att6);
 $xt->assign("1stApproval_editcontrol",$att6);

 $att7 = $xt->fetchVar("2ndApproval_editcontrol");
 $att7 = str_replace(">"," READONLY=READONLY>",$att7);
 $xt->assign("2ndApproval_editcontrol",$att7);







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


 $att5 = $xt->fetchVar("Superior2_editcontrol");
 $att5 = str_replace(">"," READONLY=READONLY>",$att5);
 $xt->assign("Superior2_editcontrol",$att5);


 $att6 = $xt->fetchVar("1stApproval_editcontrol");
 $att6 = str_replace(">"," DISABLED=DISABLED>",$att6);
 $xt->assign("1stApproval_editcontrol",$att6);

 $att7 = $xt->fetchVar("2ndApproval_editcontrol");
 $att7 = str_replace(">"," DISABLED=DISABLED>",$att7);
 $xt->assign("2ndApproval_editcontrol",$att7);








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



$ckby=$values["Superior"];
$apby=$values["Superior2"];
$empy=$values["EmployeeID"];
$logt=$values["FromDate"];
$logt2=$values["ToDate"];
$rea=$values["Reason"];
$rea=addslashes($rea);

$ltp=$values["LeaveType"];


$ltyp1=DBLookup("SELECT LeaveType FROM leavetypes WHERE LTID='$ltp'");

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



$message="Please login to Payrollflex for your approval:\nName:".$empname."\nType: ".$ltyp1."\nReason: ".$rea."\nDate: ".$logt." - ".$logt2."\nNo. Of Days: ". $tdays."\n\nBest regards, \nPayrollFlex Admin";
$subject=$ltyp1. " Requesting for Approval - PayrollFlex";
runner_mail(array('to'  => $email, 'cc' => $cc,
'bcc' => $bcc, 'subject' => $subject, 'body' => $message));






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



$ckby=$values["Superior"];
$apby=$values["Superior2"];
$empy=$values["EmployeeID"];
$logt=$values["FromDate"];
$logt2=$values["ToDate"];
$rea=$values["Reason"];
$rea=addslashes($rea);

$ltp=$values["LeaveType"];


$ltyp1=DBLookup("SELECT LeaveType FROM leavetypes WHERE LTID='$ltp'");

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



$message="Please login to Payrollflex for your approval:\nName:".$empname."\nType: ".$ltyp1."\nReason: ".$rea."\nDate: ".$logt." - ".$logt2."\nNo. Of Days: ". $tdays."\n\nBest regards, \nPayrollFlex Admin";
$subject=$ltyp1. " Requesting for Approval (Revised) - PayrollFlex";
runner_mail(array('to'  => $email, 'cc' => $cc,
'bcc' => $bcc, 'subject' => $subject, 'body' => $message));
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
