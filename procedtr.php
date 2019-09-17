
<!DOCTYPE html>
<html>
<head>
  <title>Progress Bar</title>
</head>
<body>
<!-- Progress bar holder -->
<div id="progress" style="width:347px;border:1px solid #ccc"></div>
<!-- Progress information -->
<div id="information" style="width"></div>
<?php

 //db connection
$con = mysqli_connect('localhost','badz','Badzilla101');
mysqli_select_db($con,'payrollflex');

//get invoices data
$rs = mysqli_query($con,"select * from indprocess2 where Employer='".$_GET['empr']."' and WageType='".$_GET['wtt']."' and Division='".$_GET['dvv']."' and (SDate between '".$_GET['frd']."' and '".$_GET['tod']."')");


$cnt = mysqli_query($con,"select COUNT(ScID) AS maxc from indprocess2 where Employer='".$_GET['empr']."' and WageType='".$_GET['wtt']."' and Division='".$_GET['dvv']."' and (SDate between '".$_GET['frd']."' and '".$_GET['tod']."')");	
	
	//where PtabID = '".$_GET['tod']."'");
 
 $callme = mysqli_fetch_array($cnt );
 
 
$total = $callme["maxc"];


while ($datax = mysqli_fetch_array($rs)) 
 
{

$sc=$datax["ScID"];
$shf=$datax["Shift"];
$sct=$datax["SchedType"];
$ei=$datax["EmployeeID"];
$sd=$datax["SDate"];
$std=$datax["StartDate"];
$end=$datax["EndDate"];
$stdf=$datax["StartDateF"];
$endf=$datax["EndDateF"];
$stdfr=$datax["StartDatefr"];
$endfr=$datax["EndDatefr"];
$sbo=$datax["SBreakOut"];
$sbi=$datax["SBreakIn"];
$mdy=$datax["MinsPerDay"];
$fh1=$datax["FirstHalfMins"];
$bm1=$datax["BreakMins"];
$adb=$datax["WithAddBreaks"];
$sti=$datax["STimeIn"];
$sto=$datax["STimeOut"];

$sdd="'".$sd."'";


$ht = DBLookup("SELECT HolidayType FROM holidays WHERE HolidayDate='$sd'");
$h1 = DBLookup("SELECT FirstHalf FROM holidays WHERE HolidayDate='$sd'");
$h2 = DBLookup("SELECT SecondHalf FROM holidays WHERE HolidayDate='$sd'");







if ($sct==1) { 

$ti = DBLookup("SELECT MIN(log_time) FROM demo_log WHERE log_time between '$std' AND '$end' AND EmployeeID='$ei' GROUP BY EmployeeID");
$to = DBLookup("SELECT MAX(log_time) FROM demo_log WHERE log_time between '$std' AND '$end' AND EmployeeID='$ei' GROUP BY EmployeeID");

if ($adb==1)

{


$sqd1 = "DELETE FROM indbreaks WHERE ScID='$sc'";
CustomQuery($sqd1);

$rsa = DB::Query("select * from indprobreak where ScID='$sc'");
 
while( $dataf = $rsa->fetchAssoc() )
 
  {
   $bol=$dataf["SBreakOut"];
   $bil=$dataf["SBreakIn"];
   $alb=$dataf["AllowedBreakMins"];

$lbo = DBLookup("SELECT MIN(log_time) FROM demo_log WHERE log_time between '$bol' AND '$bil'");
$lbi = DBLookup("SELECT MAX(log_time) FROM demo_log WHERE log_time between '$bol' AND '$bil'");

if ($lbo!= Null and $lbi!= Null) {
$sab = "INSERT indbreaks VALUES (NULL, NULLIF('$lbo',''), NULLIF('$lbi',''), TIMESTAMPDIFF(MINUTE,'$lbo',NULLIF('$lbi','')), '$sc', '$alb', TIMESTAMPDIFF(MINUTE,'$lbo',NULLIF('$lbi',''))-'$alb')";
CustomQuery($sab);
};

   }

}; //end  add breaks


}

elseif ($sct==2) {
$ti = DBLookup("SELECT MIN(log_time) FROM demo_log WHERE log_time between '$stdf' AND '$endf' AND EmployeeID='$ei' GROUP BY EmployeeID");
$to = DBLookup("SELECT MAX(log_time) FROM demo_log WHERE log_time between '$stdf' AND '$endf' AND EmployeeID='$ei' GROUP BY EmployeeID");


$tb1=$fh1+$bm1;

$mdat = date('Y-m-d H:i:s',strtotime( '+'.$mdy.' minutes',strtotime($ti)));
$bk1 = date('Y-m-d H:i:s',strtotime( '+'.$fh1.' minutes',strtotime($ti)));
$bk2 = date('Y-m-d H:i:s',strtotime( '+'.$tb1.' minutes',strtotime($ti)));

$sqlus = "UPDATE indschedule SET STimeIn=NULLIF('$ti',''), STimeOut=IF('$ti'='',NULL,'$mdat'), LunchBreakFrom=NULLIF('$bk1',''), LunchBreakTo=NULLIF('$bk2','')  WHERE ScID='$sc'";
CustomQuery($sqlus);

if ($adb==1)

{


$sqd1 = "DELETE FROM indbreaks WHERE ScID='$sc'";
CustomQuery($sqd1);

$rsa = DB::Query("select * from indprobreak where ScID='$sc'");
 
while( $dataf = $rsa->fetchAssoc() )
 
  {
   $bol=$dataf["SBreakOut"];
   $bil=$dataf["SBreakIn"];
   $alb=$dataf["AllowedBreakMins"];

$lbo = DBLookup("SELECT MIN(log_time) FROM demo_log WHERE log_time between '$bol' AND '$bil'");
$lbi = DBLookup("SELECT MAX(log_time) FROM demo_log WHERE log_time between '$bol' AND '$bil'");

if ($lbo!= Null and $lbi!= Null) {
$sab = "INSERT indbreaks VALUES (NULL, NULLIF('$lbo',''), NULLIF('$lbi',''), TIMESTAMPDIFF(MINUTE,'$lbo',NULLIF('$lbi','')), '$sc', '$alb', TIMESTAMPDIFF(MINUTE,'$lbo',NULLIF('$lbi',''))-'$alb')";
CustomQuery($sab);
};

   }

}; //end  add breaks

}

else {

$ti = DBLookup("SELECT MIN(log_time) FROM demo_log WHERE log_time between '$stdfr' AND '$endfr' AND EmployeeID='$ei' GROUP BY EmployeeID");
$to = DBLookup("SELECT MAX(log_time) FROM demo_log WHERE log_time between '$stdfr' AND '$endfr' AND EmployeeID='$ei' GROUP BY EmployeeID");

$tb1=$fh1+$bm1;

$mdat = date('Y-m-d H:i:s',strtotime( '+'.$mdy.' minutes',strtotime($ti)));
$bk1 = date('Y-m-d H:i:s',strtotime( '+'.$fh1.' minutes',strtotime($ti)));
$bk2 = date('Y-m-d H:i:s',strtotime( '+'.$tb1.' minutes',strtotime($ti)));


 //  if ($ti!=NULL) {
 //   $sqlx = "UPDATE indschedule SET STimeIn=NULLIF('$ti', ''), STimeOut=IF('$ti'='', NULL,'$mdat'), LunchBreakFrom=NULLIF('$bk1',''), LunchBreakTo=NULLIF('$bk2','')  WHERE ScID='$sc'";
 //   CustomQuery($sqlx);
 //  };
  

if ($adb==1)

{


$sqd1 = "DELETE FROM indbreaks WHERE ScID='$sc'";
CustomQuery($sqd1);

$rsa = DB::Query("select * from indprobreak where ScID='$sc'");
 
while( $dataf = $rsa->fetchAssoc() )
 
  {
   $bol=$dataf["SBreakOut"];
   $bil=$dataf["SBreakIn"];
   $alb=$dataf["AllowedBreakMins"];

$lbo = DBLookup("SELECT MIN(log_time) FROM demo_log WHERE log_time between '$bol' AND '$bil'");
$lbi = DBLookup("SELECT MAX(log_time) FROM demo_log WHERE log_time between '$bol' AND '$bil'");

if ($lbo!= Null and $lbi!= Null) {
$sab = "INSERT indbreaks VALUES (NULL, NULLIF('$lbo',''), NULLIF('$lbi',''), TIMESTAMPDIFF(MINUTE,'$lbo',NULLIF('$lbi','')), '$sc', '$alb', TIMESTAMPDIFF(MINUTE,'$lbo',NULLIF('$lbi',''))-'$alb')";
CustomQuery($sab);
};

   }

}; //end  add breaks

};

// end flexi-range

$bro = DBLookup("SELECT MIN(log_time) FROM demo_log WHERE log_time between '$sbo' AND '$sbi' AND EmployeeID='$ei' GROUP BY EmployeeID");
$bri = DBLookup("SELECT MAX(log_time) FROM demo_log WHERE log_time between '$sbo' AND '$sbi' AND EmployeeID='$ei' GROUP BY EmployeeID");


$gps = DBLookup("SELECT GracePeriodMins FROM demo_user WHERE EmployeeID='$ei'");



$sqlr = "UPDATE indschedule SET TimeIn=NULLIF('$ti',''), TimeOut=NULLIF('$to',''), AfterBreakLog=NULLIF('$bri',''), AfterBreakLogOut=NULLIF('$bro',''), HolidayType=NULLIF('$ht',''), Holiday1stHalf=NULLIF('$h1',''), Holiday2ndHalf=NULLIF('$h2',''), 
BreakLateMins=NULL, GracePeriodMins=NULLIF('$gps',0)  WHERE ScID='$sc'";

CustomQuery($sqlr);



};




?>
</body>
</html>
    