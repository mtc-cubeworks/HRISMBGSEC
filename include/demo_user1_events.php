<?php
class eventclass_demo_user1  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeEdit"]=true;


		$this->events["BeforeShowAdd"]=true;

		$this->events["BeforeShowEdit"]=true;

		$this->events["BeforeAdd"]=true;


		$this->events["AfterEdit"]=true;


		$this->events["BeforeShowList"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		





// get information about uploaded files
//$fileArray = my_json_decode($values["Photo"]);
 
// rename files
//for($i = 0; $i < count($fileArray); $i++)
//{
//  $fileName = $fileArray[$i]["name"];
//  $newFileName = "photos/".$values["user_photo"];
//   rename($fileName, getabspath($newFileName));
//  $fileArray[$i]["name"] = $newFileName;
//}
 
// update values of the field that stores file names
//$values["Photo"] = my_json_encode($fileArray);

return true;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowAdd(&$xt, &$templatefile, &$pageObject)
{

		
$userg = Security::getUserGroup();
$usernam = Security::getUserName();

//$lids = DBLookup("select LogID from logins where UserName='$usernam'");


$attrx = $xt->fetchVar("Preparedby_editcontrol");
$attrx = str_replace(">"," DISABLED=DISABLED>",$attrx);
$xt->assign("Preparedby_editcontrol",$attrx);






$attr22 = $xt->fetchVar("Department_editcontrol");
$attr22 = str_replace(">"," READONLY=READONLY>",$attr22);
$xt->assign("Department_editcontrol",$attr22);

$attr33 = $xt->fetchVar("EmployeeType_editcontrol");
$attr33 = str_replace(">"," READONLY=READONLY>",$attr33);
$xt->assign("EmployeeType_editcontrol",$attr33);

$attr44 = $xt->fetchVar("Status_editcontrol");
$attr44 = str_replace(">"," READONLY=READONLY>",$attr44);
$xt->assign("Status_editcontrol",$attr44);
;		
} // function BeforeShowAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, &$pageObject)
{

		$wt1=$values["EmployeeType"];
$userg = Security::getUserGroup();
$usernam = Security::getUserName();

$lid = DBLookup("select LogID from logins where UserName='$usernam'");


$attrx = $xt->fetchVar("Preparedby_editcontrol");
$attrx = str_replace(">"," DISABLED=DISABLED>",$attrx);
$xt->assign("Preparedby_editcontrol",$attrx);



$attr22 = $xt->fetchVar("Department_editcontrol");
$attr22 = str_replace(">"," DISABLED=DISABLED>",$attr22);
$xt->assign("Department_editcontrol",$attr22);

if ($wt1==2) {
$att1 = $xt->fetchVar("BasicMonthlyPay_editcontrol");
$att1 = str_replace(">"," DISABLED=DISABLED>",$att1);
$xt->assign("BasicMonthlyPay_editcontrol",$att1);

};

if ($wt1==1) {
$att2 = $xt->fetchVar("BasicDailyPay_editcontrol");
$att2 = str_replace(">"," DISABLED=DISABLED>",$att2);
$xt->assign("BasicDailyPay_editcontrol",$att2);

};

$attr33 = $xt->fetchVar("EmployeeType_editcontrol");
$attr33 = str_replace(">"," DISABLED=DISABLED>",$attr33);
$xt->assign("EmployeeType_editcontrol",$attr33);

$attr44 = $xt->fetchVar("Status_editcontrol");
$attr44 = str_replace(">"," DISABLED=DISABLED>",$attr44);
$xt->assign("Status_editcontrol",$attr44);

$pageObject->setProxyValue("approvalpress", $lid);
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
$bm=$values["BasicMonthlyPay"];
$bd=$values["BasicDailyPay"];
$wt=$values["EmployeeType"];
$ups=$values["DoNotUpdateContributions"];
$exp=$values["ExcludeContributionOnPayroll"];
$exd=$values["ExitDate"];
$ddiv=$values["Division"];


//$sv=DBLookup("select StatutoryPayment from divisions where DvID='$ddiv'");

$ds=DBLookup("select WorkingDaysInYearDailies from standardsetup where SID=1");

$bd2=($bd*$ds)/12;

if ($wt==1) {
    $m=$bm;
    $ai=$bm*12;
    $txr=DBLookup("select Rate from annualtaxtab where '$ai' between IncomeFrom and IncomeTo");
    $txb=DBLookup("select Base from annualtaxtab where '$ai' between IncomeFrom and IncomeTo");
    $txe=DBLookup("select Excess from annualtaxtab where '$ai' between IncomeFrom and IncomeTo");

    $atx=$txb+(($txr/100)*($ai-$txe));
    $mtx=($txb+(($txr/100)*($ai-$txe)))/12;
    $sq = "Update demo_user set AnnualIncome='$ai', AnnualTax='$atx', MonthlyTax='$mtx', BasicDailyPay=NULL  where EmployeeID='$eid'";
    CustomQuery($sq);


} else {
 $m=$bd2;
    $ai2=$bd*$ds;
    $txr2=DBLookup("select Rate from annualtaxtab where '$ai' between IncomeFrom and IncomeTo");
    $txb2=DBLookup("select Base from annualtaxtab where '$ai' between IncomeFrom and IncomeTo");
    $txe2=DBLookup("select Excess from annualtaxtab where '$ai' between IncomeFrom and IncomeTo");
    $atx2=$txb2+(($txr2/100)*($ai2-$txe2));
    $mtx2=($txb2+(($txr2/100)*($ai2-$txe2)))/12;
    $sqt = "Update demo_user set AnnualIncome='$ai2', AnnualTax='$atx2', MonthlyTax='$mtx2', BasicMonthlyPay=NULL where EmployeeID='$eid'";
    CustomQuery($sqt);


};


$er=DBLookup("select ER from ssstable where '$m' between CompFrom and CompTo");
$ee=DBLookup("select EE from ssstable where '$m' between CompFrom and CompTo");
$ec=DBLookup("select EC from ssstable where '$m' between CompFrom and CompTo");

if ($ups!=1) {
$sql = "Update demo_user set SSSER='$er', SSSEE='$ee', SSSEC='$ec' where EmployeeID='$eid'";
 CustomQuery($sql);
};


$pc=DBLookup("select PcntRate from philhealthtable where '$m' between SalaryFrom and SalaryTo");
$er2=DBLookup("select ER from philhealthtable where '$m' between SalaryFrom and SalaryTo");
$ee2=DBLookup("select EE from philhealthtable where '$m' between SalaryFrom and SalaryTo");

if ($pc>0) {
$n=($m*($pc/100))/2;

if ($ups!=1) {
$sql3 = "Update demo_user set PhilHealthEE='$n', PhilHealthER='$n' where EmployeeID='$eid'";
 CustomQuery($sql3);
};

} else {

if ($ups!=1) {
$sql4 = "Update demo_user set PhilHealthEE='$ee2', PhilHealthER='$er2' where EmployeeID='$eid'";
 CustomQuery($sql4);
};

};



$er3=DBLookup("select ER from pagibigtable where piID=1");
$ee3=DBLookup("select EE from pagibigtable where piID=1");

if ($ups!=1) {
$sql4 = "Update demo_user set PagIbigER='$er3', PagIbigEE='$ee3'  where EmployeeID='$eid'";
 CustomQuery($sql4);
};



//$sqe = "DELETE FROM indschedule WHERE EmployeeID='$eid' and SDate>='$exd'";
//CustomQuery($sqe);







;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, &$pageObject)
{

		
$ss = DBLookup("select SSSTableLock from statutorylock where staID=1");
$ph = DBLookup("select PhilHealthTableLock from statutorylock where staID=1");
$pi = DBLookup("select PagIbigTableLock from statutorylock where staID=1");

$pageObject->setProxyValue("sss", $ss);
$pageObject->setProxyValue("phil", $ph);
$pageObject->setProxyValue("pag", $pi);
;		
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
