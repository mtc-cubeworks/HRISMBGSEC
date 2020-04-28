<?php
class eventclass_demo_useractive  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeEdit"]=true;

		$this->events["BeforeMoveNextList"]=true;

		$this->events["BeforeShowAdd"]=true;

		$this->events["BeforeShowEdit"]=true;

		$this->events["BeforeAdd"]=true;


		$this->events["AfterEdit"]=true;


		$this->events["IsRecordEditable"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		






//$fileArray = my_json_decode($values["Photo"]);
 

//for($i = 0; $i < count($fileArray); $i++)
//{
//  $fileName = $fileArray[$i]["name"];
//  $newFileName = "photos/".$values["user_photo"];
//   rename($fileName, getabspath($newFileName));
//  $fileArray[$i]["name"] = $newFileName;
//}
 

//$values["Photo"] = my_json_encode($fileArray);

return true;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, &$pageObject)
{

		//$strAdStatus = "";
//$strAdStatus = $data["EmployeeType"];


//if ($strAdStatus == 1) {

//$record["EmployeeType_css"]='background:#33cc00;'; // 'This is GREEN color 

//}
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowAdd(&$xt, &$templatefile, &$pageObject)
{

		
$userg = Security::getUserGroup();
$usernam = Security::getUserName();

$lids = DBLookup("select LogID from logins where UserName='$usernam'");


$attr5 = $xt->fetchVar("Checked_editcontrol");
$attr5 = str_replace(">"," DISABLED=DISABLED>",$attr5);
$xt->assign("Checked_editcontrol",$attr5);

$attr6 = $xt->fetchVar("Checkedby_editcontrol");
$attr6 = str_replace(">"," DISABLED=DISABLED>",$attr6);
$xt->assign("Checkedby_editcontrol",$attr6);

$attr7 = $xt->fetchVar("CheckedDate_editcontrol");
$attr7 = str_replace(">"," DISABLED=DISABLED>",$attr7);
$xt->assign("CheckedDate_editcontrol",$attr7);


$attr2 = $xt->fetchVar("Approved_editcontrol");
$attr2 = str_replace(">"," DISABLED=DISABLED>",$attr2);
$xt->assign("Approved_editcontrol",$attr2);

$attr21 = $xt->fetchVar("DoNotUpdateContributions_editcontrol");
$attr21 = str_replace(">"," DISABLED=DISABLED>",$attr21);
$xt->assign("DoNotUpdateContributions_editcontrol",$attr21);

$attr22 = $xt->fetchVar("ExcludeContributionOnPayroll_editcontrol");
$attr22 = str_replace(">"," DISABLED=DISABLED>",$attr22);
$xt->assign("ExcludeContributionOnPayroll_editcontrol",$attr22);

$attr3 = $xt->fetchVar("Approvedby_editcontrol");
$attr3 = str_replace(">"," DISABLED=DISABLED>",$attr3);
$xt->assign("Approvedby_editcontrol",$attr3);

$attr4 = $xt->fetchVar("ApprovedDate_editcontrol");
$attr4 = str_replace(">"," DISABLED=DISABLED>",$attr4);
$xt->assign("ApprovedDate_editcontrol",$attr4);

$attr8 = $xt->fetchVar("Level_editcontrol");
$attr8 = str_replace(">"," DISABLED=DISABLED>",$attr8);
$xt->assign("Level_editcontrol",$attr8);

$attr9 = $xt->fetchVar("ExitDate_editcontrol");
$attr9 = str_replace(">"," DISABLED=DISABLED>",$attr9);
$xt->assign("ExitDate_editcontrol",$attr9);

//$attx = $xt->fetchVar("Division_editcontrol");
//$attx = str_replace(">"," DISABLED=DISABLED>",$attx);
//$xt->assign("Division_editcontrol",$attx);


$pageObject->setProxyValue("preparedx", $lids);
;		
} // function BeforeShowAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, &$pageObject)
{

		$attrx = $xt->fetchVar("Preparedby_editcontrol");
$attrx = str_replace(">"," DISABLED=DISABLED>",$attrx);
$xt->assign("Preparedby_editcontrol",$attrx);




$attr5 = $xt->fetchVar("Checked_editcontrol");
$attr5 = str_replace(">"," DISABLED=DISABLED>",$attr5);
$xt->assign("Checked_editcontrol",$attr5);

$attr6 = $xt->fetchVar("Checkedby_editcontrol");
$attr6 = str_replace(">"," DISABLED=DISABLED>",$attr6);
$xt->assign("Checkedby_editcontrol",$attr6);

$attr7 = $xt->fetchVar("CheckedDate_editcontrol");
$attr7 = str_replace(">"," DISABLED=DISABLED>",$attr7);
$xt->assign("CheckedDate_editcontrol",$attr7);



$attr2 = $xt->fetchVar("Approved_editcontrol");
$attr2 = str_replace(">"," DISABLED=DISABLED>",$attr2);
$xt->assign("Approved_editcontrol",$attr2);

$attr21 = $xt->fetchVar("DoNotUpdateContributions_editcontrol");
$attr21 = str_replace(">"," DISABLED=DISABLED>",$attr21);
$xt->assign("DoNotUpdateContributions_editcontrol",$attr21);

$attr22 = $xt->fetchVar("ExcludeContributionOnPayroll_editcontrol");
$attr22 = str_replace(">"," DISABLED=DISABLED>",$attr22);
$xt->assign("ExcludeContributionOnPayroll_editcontrol",$attr22);

$attr3 = $xt->fetchVar("Approvedby_editcontrol");
$attr3 = str_replace(">"," DISABLED=DISABLED>",$attr3);
$xt->assign("Approvedby_editcontrol",$attr3);

$attr4 = $xt->fetchVar("ApprovedDate_editcontrol");
$attr4 = str_replace(">"," DISABLED=DISABLED>",$attr4);
$xt->assign("ApprovedDate_editcontrol",$attr4);

$attr8 = $xt->fetchVar("Level_editcontrol");
$attr8 = str_replace(">"," DISABLED=DISABLED>",$attr8);
$xt->assign("Level_editcontrol",$attr8);

//$attx = $xt->fetchVar("Division_editcontrol");
//$attx = str_replace(">"," DISABLED=DISABLED>",$attx);
//$xt->assign("Division_editcontrol",$attx);
;		
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		


return true;


;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		$eid=$values["EmployeeID"];
$exd=$values["ExitDate"];
$et=$values["EmployeeType"];

if ($exd!=NULL) {


$sqp = "DELETE FROM indschedule WHERE EmployeeID='$eid' and SDate>='$exd'";
CustomQuery($sqp);

$sqo = "Update demo_user set Inactive=1 where EmployeeID='$eid'";
 CustomQuery($sqo);
}

else {

$sqr = "Update demo_user set Inactive=0 where EmployeeID='$eid'";
 CustomQuery($sqr);
}




;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Is Record Editable
function IsRecordEditable($values, $isEditable)
{

		

$lk=$values["Inactive"]; 

//$lk=DBLookup("SELECT Inactive FROM inventorydate WHERE IDate='$sd'");

if ($lk==1)
 return false;
else
 return true;




// Place event code here.
// Use "Add Action" button to add code snippets.

//return $isEditable;
;		
} // function IsRecordEditable

		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
