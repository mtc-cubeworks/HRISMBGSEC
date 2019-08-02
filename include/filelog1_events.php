<?php
class eventclass_filelog1  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeShowAdd"]=true;

		$this->events["BeforeShowEdit"]=true;


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

 //$att5 = $xt->fetchVar("Checked_editcontrol");
 //$att5 = str_replace(">"," READONLY=READONLY>",$att5);
 //$xt->assign("Checked_editcontrol",$att5);

 //$att6 = $xt->fetchVar("Approved_editcontrol");
 //$att6 = str_replace(">"," READONLY=READONLY>",$att6);
 //$xt->assign("Approved_editcontrol",$att6);


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
