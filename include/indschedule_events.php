<?php
class eventclass_indschedule  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterEdit"]=true;

		$this->events["BeforeShowEdit"]=true;

		$this->events["IsRecordEditable"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		$scid=$oldvalues["ScID"];
$cmt=$oldvalues["CrossMidnight"];

$eid=$oldvalues["EmployeeID"];
$un=$oldvalues["UserName"];

$ov=$oldvalues["TimeIn"];
$nv=$values["TimeIn"];

$ov1=$oldvalues["TimeOut"];
$nv1=$values["TimeOut"];

$bo=$oldvalues["AfterBreakLogOut"];
$nbo=$values["AfterBreakLogOut"];

$bi=$oldvalues["AfterBreakLog"];
$nbi=$values["AfterBreakLog"];


if ($ov!=$nv) {



$st1 = "INSERT demo_log VALUES ('$nv', '$un', 'Manual Entry', '$eid', NULL)";
CustomQuery($st1);
};


if ($ov1!=$nv1) {


$st2 = "INSERT demo_log VALUES ('$nv1', '$un', 'Manual Entry', '$eid', NULL)";
CustomQuery($st2);
};

if ($bo!=$nbo) {


$st3 = "INSERT demo_log VALUES ('$nbo', '$un', 'Manual Entry', '$eid', NULL)";
CustomQuery($st3);
};

if ($bi!=$nbi) {


$st4 = "INSERT demo_log VALUES ('$nbi', '$un', 'Manual Entry', '$eid', NULL)";
CustomQuery($st4);
};


//Calculation




global $dal;


$nd1=DBLookup("select NDMins from dt2 where ScID='". $scid. "'");


if ($cm==1) {

$sq = "UPDATE indschedule SET ApprovednightDiff=1, ANDiff='$nd1' WHERE ScID='$scid'";
CustomQuery($sq);
};




$dz = array();
$dz["ScID"] = $scid;
$rs = DB::Select("dtrupload2", $dz );

while( $datax = $rs->fetchAssoc() )

{

$sc=$datax["ScID"];
$rw=$datax["RegWD"];
$dw=$datax["DWork"];
$ab=$datax["Absent"];
$l=$datax["LateMins"];
$u=$datax["UndertimeMins"];

$ex=$datax["ExcessHrs"];
$ro=$datax["RegOTHrs"];
$rho=$datax["RHOTHrs"];
$sho=$datax["SHOTHRs"];
$cho=$datax["CHOTHrs"];
$rdo=$datax["RDOTHrs"];
$nd=$datax["NDHrs"];
$rd=$datax["RDHrs"];
$rnd=$datax["RegNDHrs"];
$rhnd=$datax["RHNDHrs"];
$shnd=$datax["SHNDHrs"];
$chnd=$datax["CHNDHrs"];
$rdnd=$datax["RDNDHrs"];
$vl=$datax["VLDays"];
$sl=$datax["SLDays"];
$el=$datax["ELDays"];
$pl=$datax["PLDays"];
$tr=$datax["TrODays"];
$mp=$datax["MisPunched"];

$latep=$datax["LatePens"];
$blate=$datax["BreakLateMins"];
$tlates=$datax["TLates"];

$r = DBLookup("SELECT RHF FROM hcal4 WHERE ScID='$scid'");
$s = DBLookup("SELECT SHF FROM hcal4 WHERE ScID='$scid'");
$c = DBLookup("SELECT CHF FROM hcal4 WHERE ScID='$scid-'");


$sqlr = "UPDATE indschedule SET RegWD='$rw', DWork='$dw', Absent='$ab', LateMins='$l', UndertimeMins='$u', RHolidayHrs='$r',
SHolidayHrs='$s', CHolidayHrs='$c', ExcessHrs='$ex', RegOTHrs='$ro', RHOTHrs='$rho', SHOTHRs='$sho', CHOTHrs='$cho', RDOTHrs='$rdo', NDHrs='$nd', RDHrs='$rd',
RegNDHrs='$rnd', RHNDHrs='$rhnd', SHNDHrs='$shnd', CHNDHrs='$chnd', RDNDHrs='$rdnd', VLDay='$vl', SLDay='$sl', ELDay='$el', PLDay='$pl', TrODay='$tr', Mispunched='$mp',
BreakLateMins='$blate', TotLateMins='$tlates', LatePenaltyMins='$latep'
WHERE ScID='$scid'";
CustomQuery($sqlr);


};
    

//Update Payroll




global $dal;

$tod=DBLookup("select ToDate from dtrrange where DrID=1");


$dy = array();
$dy["EmployeeID"] = $eid;
$rss = DB::Select("dtrsummary2", $dy );

while( $datay = $rss->fetchAssoc() )
{

$usern=$datay["UserName"];
//$empid=$datay["EmployeeID"];
$wt=$datay["WageType"];
$dw=$datay["DWork"];
$ab=$datay["Absent"];
$lm=round($datay["TLates"],0);
$um=round($datay["UndertimeMins"],0);
$rh=$datay["RHolidayHrs"];
$sh=$datay["SHolidayHrs"];
$ch=$datay["CHolidayHrs"];
$eh=$datay["ExcessHrs"];
$rot=$datay["RegOTHrs"];
$rhot=$datay["RHOTHrs"];
$shot=$datay["SHOTHRs"];
$chot=$datay["CHOTHrs"];
$rdot=$datay["RDOTHrs"];
$nd=$datay["NDHrs"];
$rd=$datay["RDHrs"];
$rnd=$datay["RegNDHrs"];
$rhnd=$datay["RHNDHrs"];
$shnd=$datay["SHNDHrs"];
$chnd=$datay["CHNDHrs"];
$rdnd=$datay["RDNDHrs"];
$vl=$datay["VLDays"];
$sl=$datay["SLDays"];
$el=$datay["ELDays"];
$pl=$datay["PLDays"];
$tro=$datay["TrODays"];
$ndma=$datay["NDMealAllowance"];
$divi=$datay["Division"];
$empr=$datay["Employer"];

$st = DBLookup("SELECT Status FROM demo_user WHERE EmployeeID='$eid'");
$bd = DBLookup("SELECT BasicDailyPay FROM demo_user WHERE EmployeeID='$eid'");
$bm = DBLookup("SELECT BasicMonthlyPay FROM demo_user WHERE EmployeeID='$eid'");
$email = DBLookup("SELECT Email FROM demo_user WHERE EmployeeID='$eid'");

$alw = DBLookup("SELECT AllowancePerDay FROM demo_user WHERE EmployeeID='$eid'");
$ashare = DBLookup("SELECT AgentSharePerDay FROM demo_user WHERE EmployeeID='$eid'");


$vlb = DBLookup("SELECT VLBalance FROM leavebalance WHERE EmployeeID='$eid'");
$slb = DBLookup("SELECT SLBalance FROM leavebalance WHERE EmployeeID='$eid'");
$elb = DBLookup("SELECT ELBalance FROM leavebalance WHERE EmployeeID='$eid'");
$plb = DBLookup("SELECT PLBalance FROM leavebalance WHERE EmployeeID='$eid'");


$sqlr1 = "UPDATE payrolltab SET WageType='$wt', Status='$st', BasicMonthly='$bm', BasicDaily='$bd', DWork='$dw', Absent='$ab', LateMins='$lm', UndertimeMins='$um', RHolidayHrs='$rh', SHolidayHrs='$sh',
 CHolidayHrs='$ch', ExcessHrs='$eh', RegOTHrs='$rot', RHOTHrs='$rhot', SHOTHRs='$shot', CHOTHrs='$chot', RDOTHrs='$rdot', NDHrs='$nd', RDHrs='$rd', RegNDHrs='$rnd', RHNDHrs='$rhnd', SHNDHrs='$shnd', CHNDHrs='$chnd', RDNDHrs='$rdnd', VLDays='$vl',
 SLDays='$sl', ELDays='$el', PLDays='$pl', TrODays='$tro', FromDate='$frd',  UserName='$usern', AllowancePerDay='$alw', VLBalance='$vlb', SLBalance='$slb', ELBalance='$elb', PLBalance='$plb', AgencyShare='$ashare', NDMealallowance='$ndma', Division='$divi', Employer='$empr', Email='$email'
 WHERE ToDate='$tod' and EmployeeID='$eid' and Locked<>1";
CustomQuery($sqlr1);


$ckid = DBLookup("SELECT Locked FROM payrolltab WHERE ToDate='$tod' AND EmployeeID='$eid'");

if ($ckid==1) {
$pageObject->setMessage("Payroll Division already Locked!. Data NOT uploaded to Payroll.");
}
else {
$pageObject->setMessage("Data uploaded to Payroll.");
}

};





;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, &$pageObject)
{

		
$attrx = $xt->fetchVar("Locked_editcontrol");
$attrx = str_replace(">"," DISABLED=DISABLED>",$attrx);
$xt->assign("Locked_editcontrol",$attrx);


$attry = $xt->fetchVar("Mispunched_editcontrol");
$attry = str_replace(">"," DISABLED=DISABLED>",$attry);
$xt->assign("Mispunched_editcontrol",$attry);

$attrz = $xt->fetchVar("Absent_editcontrol");
$attrz = str_replace(">"," DISABLED=DISABLED>",$attrz);
$xt->assign("Absent_editcontrol",$attrz);

;		
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Is Record Editable
function IsRecordEditable($values, $isEditable)
{

		


//$lk=$values["Locked"];



//if ($lk == 1)
// return false;
//else
 return true;
;		
} // function IsRecordEditable

		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
