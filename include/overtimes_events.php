<?php
class eventclass_overtimes  extends eventsBase
{
	function __construct()
	{
	// fill list of events


		$this->events["AfterAdd"]=true;

		$this->events["AfterEdit"]=true;

		$this->events["BeforeShowEdit"]=true;

		$this->events["AfterDelete"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["BeforeEdit"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		$ot=$values["OtiD"];
$empr=$values["Employer"];
$dvv=$values["Division"];



global $dal;


$rs = DB::Query("select * from demo_user where Employer='$empr' and Division='$dvv' and Inactive<>1");
 
while( $datax = $rs->fetchAssoc() )
 
{

$emid=$datax["EmployeeID"];
$usern=$datax["user_name"];
$usid=$datax["user_id"];

$sql = "INSERT INTO overtimetab (UserID, UserName, EmployeeID, OtiD) values

  ('$usid', '$usern', '$emid', '$ot')";

CustomQuery($sql);

}



header("Location: overtimes_edit.php?editid1=".$values["OtiD"]);
exit();
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		
$otid= $values["OtiD"];

$ab=$values["Approved"];

$usn=Security::getUserName();


$logx=DBLookup("select LogID from logins where UserName='". $usn. "'");


if ($ab==1) {

$sqa = "UPDATE overtimes SET Approvedby='$logx' WHERE OtID='$otid'";
CustomQuery($sqa);



$dc= $values["DateCreated"];
$fd= $values["FromDateTime"];
$td= $values["ToDateTime"];
$appd= $values["Approved"];
$nomins= $values["NoMins"];





$ts1 = strtotime($fd);
$ts2 = strtotime($td);

//if ($cmid==null) {
//$inter = (($ts2 - $ts1)/86400)+1;
//}

//if ($cmid==0) {
//$inter = (($ts2 - $ts1)/86400)+1;
//}

//if ($cmid==1) {
//$inter = ($ts2 - $ts1)/86400;
//}

$inter=1;

//$sqldely = "DELETE FROM indschedule WHERE ScRID='$mid'";
//CustomQuery($sqldely);

$sqldel = "DELETE FROM indovertime WHERE OtID='$otid'";

global $dal;
$tblOrders = $dal->Table("overtimetab");
$rs = $tblOrders->Query("OtiD='$otid'");
while ($datax = db_fetch_array($rs))
{


$empid=$datax["EmployeeID"];



$sqlr = "INSERT indovertime VALUES (NULL, '$dc', '$empid', '$fd', '$nomins', '$otid', '$fd', '$td', NULL, NULL)";
CustomQuery($sqlr);



$sqlup = "Update overtimes set Posted=1 where OtiD='$otid'";
 CustomQuery($sqlup);


};





};

if ($ab==NULL OR $ab==0)

{
$sqb = "UPDATE overtimes SET Approvedby=NULL WHERE OtID='$otid'";
CustomQuery($sqb);

$sqldel = "DELETE FROM indovertime WHERE OtID='$otid'";
CustomQuery($sqldel);

$sqlup = "Update overtimes set Posted=NULL where OtiD='$otid'";
 CustomQuery($sqlup);

}
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, &$pageObject)
{

		$attz = $xt->fetchVar("Approvedby_editcontrol");
$attz = str_replace(">"," DISABLED=DISABLED>",$attz);
$xt->assign("Approvedby_editcontrol",$attz);
;		
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record deleted
function AfterDelete($where, &$deleted_values, &$message, &$pageObject)
{

		$do=$deleted_values["OtiD"];

$sqldel = "DELETE FROM indovertime WHERE OtID='$do'";
CustomQuery($sqldel);

$sqld1 = "DELETE FROM overtimetab WHERE OtID='$do'";
CustomQuery($sqld1);

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
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
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
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

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
