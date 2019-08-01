<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("classes/button.php");

$params = (array)my_json_decode(postvalue('params'));
$buttId = $params['buttId'];
$eventId = postvalue('event');
$table = $params['table'];

// proccess table events
if($buttId=='Create_Payroll1')
{
	require_once("include/payroll_variables.php");
	$cipherer = new RunnerCipherer("payroll");
	buttonHandler_Create_Payroll1($params);
}
if($buttId=='Insert_Default_Statutories2')
{
	require_once("include/demo_user1_variables.php");
	$cipherer = new RunnerCipherer("demo_user1");
	buttonHandler_Insert_Default_Statutories2($params);
}
if($buttId=='Submit')
{
	require_once("include/modulelock_variables.php");
	$cipherer = new RunnerCipherer("modulelock");
	buttonHandler_Submit($params);
}
if($buttId=='Upload_Schedule')
{
	require_once("include/schedrange_variables.php");
	$cipherer = new RunnerCipherer("schedrange");
	buttonHandler_Upload_Schedule($params);
}
if($buttId=='Clear_Uploaded_Schedule')
{
	require_once("include/schedrange_variables.php");
	$cipherer = new RunnerCipherer("schedrange");
	buttonHandler_Clear_Uploaded_Schedule($params);
}
if($buttId=='Process_DTR2')
{
	require_once("include/dtrrange_variables.php");
	$cipherer = new RunnerCipherer("dtrrange");
	buttonHandler_Process_DTR2($params);
}
if($buttId=='Upload_DTR_to_Payroll2')
{
	require_once("include/dtrrange_variables.php");
	$cipherer = new RunnerCipherer("dtrrange");
	buttonHandler_Upload_DTR_to_Payroll2($params);
}
if($buttId=='Create_Payroll')
{
	require_once("include/dtrrange_variables.php");
	$cipherer = new RunnerCipherer("dtrrange");
	buttonHandler_Create_Payroll($params);
}
if($buttId=='Update_Payroll3')
{
	require_once("include/dtrrange_variables.php");
	$cipherer = new RunnerCipherer("dtrrange");
	buttonHandler_Update_Payroll3($params);
}
if($buttId=='Clear_Payroll1')
{
	require_once("include/dtrrange_variables.php");
	$cipherer = new RunnerCipherer("dtrrange");
	buttonHandler_Clear_Payroll1($params);
}
if($buttId=='Process_Payroll')
{
	require_once("include/payroll_variables.php");
	$cipherer = new RunnerCipherer("payroll");
	buttonHandler_Process_Payroll($params);
}
if($buttId=='SSS_Contribution')
{
	require_once("include/ssscontsummary_variables.php");
	$cipherer = new RunnerCipherer("ssscontsummary");
	buttonHandler_SSS_Contribution($params);
}
if($buttId=='Pag_Ibig_Contribution1')
{
	require_once("include/ssscontsummary_variables.php");
	$cipherer = new RunnerCipherer("ssscontsummary");
	buttonHandler_Pag_Ibig_Contribution1($params);
}
if($buttId=='PhilHealth')
{
	require_once("include/ssscontsummary_variables.php");
	$cipherer = new RunnerCipherer("ssscontsummary");
	buttonHandler_PhilHealth($params);
}
if($buttId=='Loan_Summary4')
{
	require_once("include/loansreport_variables.php");
	$cipherer = new RunnerCipherer("loansreport");
	buttonHandler_Loan_Summary4($params);
}
if($buttId=='Print_Payslip')
{
	require_once("include/payrolltab_variables.php");
	$cipherer = new RunnerCipherer("payrolltab");
	buttonHandler_Print_Payslip($params);
}
if($buttId=='Upload_Schedule2')
{
	require_once("include/indschedrange_variables.php");
	$cipherer = new RunnerCipherer("indschedrange");
	buttonHandler_Upload_Schedule2($params);
}
if($buttId=='Clear_Uploaded_Schedule2')
{
	require_once("include/indschedrange_variables.php");
	$cipherer = new RunnerCipherer("indschedrange");
	buttonHandler_Clear_Uploaded_Schedule2($params);
}
if($buttId=='Print')
{
	require_once("include/monthlyremittax_variables.php");
	$cipherer = new RunnerCipherer("monthlyremittax");
	buttonHandler_Print($params);
}
if($buttId=='Payslip')
{
	require_once("include/payrolldiv_variables.php");
	$cipherer = new RunnerCipherer("payrolldiv");
	buttonHandler_Payslip($params);
}
if($buttId=='Bank_Registry')
{
	require_once("include/payrolldiv_variables.php");
	$cipherer = new RunnerCipherer("payrolldiv");
	buttonHandler_Bank_Registry($params);
}
if($buttId=='Summary_A')
{
	require_once("include/payrolldiv_variables.php");
	$cipherer = new RunnerCipherer("payrolldiv");
	buttonHandler_Summary_A($params);
}
if($buttId=='Summary_B')
{
	require_once("include/payrolldiv_variables.php");
	$cipherer = new RunnerCipherer("payrolldiv");
	buttonHandler_Summary_B($params);
}
if($buttId=='Summary_C')
{
	require_once("include/payrolldiv_variables.php");
	$cipherer = new RunnerCipherer("payrolldiv");
	buttonHandler_Summary_C($params);
}
if($buttId=='Payslip1')
{
	require_once("include/payrolltab1_variables.php");
	$cipherer = new RunnerCipherer("payrolltab1");
	buttonHandler_Payslip1($params);
}
if($buttId=='Update_SSS')
{
	require_once("include/demo_user1_variables.php");
	$cipherer = new RunnerCipherer("demo_user1");
	buttonHandler_Update_SSS($params);
}
if($buttId=='Update_PhilHelath')
{
	require_once("include/demo_user1_variables.php");
	$cipherer = new RunnerCipherer("demo_user1");
	buttonHandler_Update_PhilHelath($params);
}
if($buttId=='Update_Pag_Ibig2')
{
	require_once("include/demo_user1_variables.php");
	$cipherer = new RunnerCipherer("demo_user1");
	buttonHandler_Update_Pag_Ibig2($params);
}




// proccess non table events




// create table and non table handlers
function buttonHandler_Create_Payroll1($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_Insert_Default_Statutories2($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_Submit($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	global $dal;

while ($data = $button->getNextSelectedRecord())
{

$MLID=$data["MLID"];
$tab=$data["SelectTable"];
$ID=$data["InputID"];
$lk=$data["Locked"];



 if ($tab==1) //1 Payroll
 {

 $sqlup = "Update payroll set Locked='". $lk. "' where PSID='$ID'";
 CustomQuery($sqlup);



 };


$result["txt"] = $params["txt"]." Done!";



};
;
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_Upload_Schedule($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$data = $button->getCurrentRecord();
$result['record'] = $data;
$fd= $data["FromDate"];
$td= $data["ToDate"];
$ti= $data["TimeIn"];
$to= $data["TimeOut"];
$mid= $data["ScRID"];
$stype= $data["SchedType"];

$rd= $data["RestDay"];


$rsdy= $data["RestDays"];
$mpd= $data["MinsPerDay"];
$bm= $data["BreakMins"];
$shf= $data[-"Shift"];
$lbf= $data["LunchBreakTimeFrom"];
$lbt= $data["LunchBreakTimeTo"];
//$roi= $data["ReqLogOutInOnBreak"];
$fhm= $data["FirstHalfMins"];
$shm= $data["SecondHalfMins"];
$sby= $data["SchedBy"];

function comma_separated_to_array($string, $separator = ',')
{
  //Explode on comma
  $vals = explode($separator, $string);
 
  //Trim whitespace
  foreach($vals as $key => $val) {
    $vals[$key] = trim($val);
  }
  //Return empty array if no items found
  //http://php.net/manual/en/function.explode.php#114273
  return array_diff($vals, array(""));
};


global $dal;
$tblName = $dal->Table("indschedule");
$rstmp = $tblName->Query("ScRID=".$data["ScRID"],"");
$datatmp = db_fetch_array($rstmp);
if($datatmp)
{
$result["txt"] = $params["txt"]. " Data Exist! Please remove it first.";

}
else
{



$ts1 = strtotime($fd);
$ts2 = strtotime($td);

$inter = (($ts2 - $ts1)/86400)+1;


//$sqldely = "DELETE FROM indschedule WHERE ScRID='$mid'";
//CustomQuery($sqldely);

//global $dal;
$tblOrders = $dal->Table("schedtab");
$rs = $tblOrders->Query("ScRID='$mid'");
while ($datax = db_fetch_array($rs))
{



$usern=$datax["UserName"];
$empid=$datax["EmployeeID"];



$wt = DBLookup("SELECT EmployeeType FROM demo_user WHERE user_name='$usern'");
$divi = DBLookup("SELECT Division FROM demo_user WHERE user_name='$usern'");
$dept = DBLookup("SELECT Department FROM demo_user WHERE user_name='$usern'");
$ndmeal = DBLookup("SELECT MealAllowance FROM nightshiftallowance WHERE ndaID=1");
$ndhrs = DBLookup("SELECT MinimumHrs FROM nightshiftallowance WHERE ndaID=1");
$empr = DBLookup("SELECT Employer FROM demo_user WHERE user_name='$usern'");
$latfix = DBLookup("SELECT LateFixPenalty FROM demo_user WHERE user_name='$usern'");
$pt = DBLookup("SELECT PreTimeInMins FROM standardsetup WHERE SID=1");
$ibl = DBLookup("SELECT IncludeBreakLate FROM demo_user WHERE user_name='$usern'");
$gp = DBLookup("SELECT GracePeriodMins FROM demo_user WHERE user_name='$usern'");
$adb = DBLookup("SELECT WithAdditionalBreaks FROM demo_user WHERE user_name='$usern'");

$i = 0;
WHILE ($i < $inter):
$date=date_create($fd);
date_add($date,date_interval_create_from_date_string('"'.$i.'days"'));
$indate=date_format($date,"Y-m-d");

//$day_num = 1;
$day_num = date('N', strtotime($indate));

$dayrest = comma_separated_to_array($rsdy);

if ($sby==1) {

if (in_array($day_num, $dayrest))
  {
  $rdfn=1;
  }
else
  {
  $rdfn=0;;
  };

$sqd = "DELETE FROM indschedule WHERE UserName='$usern' AND SDate='$indate'";
CustomQuery($sqd);

$sqlr = "INSERT indschedule VALUES (NULL, '$usern', '$indate', NULLIF('$ti',''), NULLIF('$to',''), '$stype', NULL, NULL, NULL, NULL, NULL, NULL, '$wt', NULL, NULL, '$empid', '$mpd', '$bm', '$shf', NULL, NULL, '$mid', '$lbf', '$lbt', NULL, '$fhm', '$shm', '$ndmeal', '$ndhrs', NULL, '$divi',
NULL, NULL, '$day_num', '$rdfn', NULL, '$dept', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,
NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$empr', NULL, '$latfix', NULL, NULL,'$pt','$ibl','$gp', '$adb')";
CustomQuery($sqlr);

}; //end sby as All Days work Except rest days

if ($sby==2) { 

   if (in_array($day_num, $dayrest)) { 

   $sqd2 = "DELETE FROM indschedule WHERE UserName='$usern' AND SDate='$indate'";
   CustomQuery($sqd2);

   $sqlr = "INSERT indschedule VALUES (NULL, '$usern', '$indate', NULLIF('$ti',''), NULLIF('$to',''), '$stype', NULL, NULL, NULL, NULL, NULL, NULL, '$wt', NULL, NULL, '$empid', '$mpd', '$bm', '$shf', NULL, NULL, '$mid', '$lbf', '$lbt', NULL, '$fhm', '$shm', '$ndmeal', '$ndhrs', NULL, '$divi',
   NULL, NULL, '$day_num', 0, NULL, '$dept', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,
   NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$empr', NULL, '$latfix', NULL, NULL,'$pt','$ibl','$gp', '$adb')";
   CustomQuery($sqlr);
   }

}; //end sby as All Working Days Only


$i++;
ENDWHILE;

$sqlup = "Update schedrange set Posted=1 where ScRID='$mid'";
 CustomQuery($sqlup);


};



$result["txt"] = $params["txt"]." Done!";

};
    ;
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_Clear_Uploaded_Schedule($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	
$data = $button->getCurrentRecord();
$sc= $data["ScRID"];



$sqz = "DELETE FROM indschedule WHERE ScRID='$sc'";
CustomQuery($sqz);

$sqlup = "Update schedrange set Posted=0 where ScRID='$sc'";
 CustomQuery($sqlup);



$result["txt"] = $params["txt"]." Done!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_Process_DTR2($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$data = $button->getCurrentRecord();
$result['record'] = $data;
$frd= $data["FromDate"];
$tod= $data["ToDate"];
$empr= $data["Employer"];
$wtt= $data["WageType"];
$dvv= $data["Division"];

$tdd="'".$tod."'";


global $dal;


$rs = DB::Query("select * from indprocess2 where Employer='$empr' and WageType='$wtt' and Division='$dvv' and (SDate between '$frd' and '$tod')");
 
while( $datax = $rs->fetchAssoc() )
 
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
$sbo=$datax["SBreakOut"];
$sbi=$datax["SBreakIn"];
$mdy=$datax["MinsPerDay"];
$fh1=$datax["FirstHalfMins"];
$bm1=$datax["BreakMins"];
$adb=$datax["WithAddBreaks"];


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

else {
$ti = DBLookup("SELECT MIN(log_time) FROM demo_log WHERE log_time between '$stdf' AND '$endf' AND EmployeeID='$ei' GROUP BY EmployeeID");
$to = DBLookup("SELECT MAX(log_time) FROM demo_log WHERE log_time between '$stdf' AND '$endf' AND EmployeeID='$ei' GROUP BY EmployeeID");


$tb1=$fh1+$bm1;

$mdat = date('Y-m-d H:i:s',strtotime( '+'.$mdy.' minutes',strtotime($ti)));
$bk1 = date('Y-m-d H:i:s',strtotime( '+'.$fh1.' minutes',strtotime($ti)));
$bk2 = date('Y-m-d H:i:s',strtotime( '+'.$tb1.' minutes',strtotime($ti)));

$sqlus = "UPDATE indschedule SET STimeIn=NULLIF('$ti',''), STimeOut=IF('$ti'='',NULL,'$mdat'), LunchBreakFrom=NULLIF('$bk1',''), LunchBreakTo=NULLIF('$bk2','')  WHERE ScID='$sc'";
CustomQuery($sqlus);

};


$bro = DBLookup("SELECT MIN(log_time) FROM demo_log WHERE log_time between '$sbo' AND '$sbi' AND EmployeeID='$ei' GROUP BY EmployeeID");
$bri = DBLookup("SELECT MAX(log_time) FROM demo_log WHERE log_time between '$sbo' AND '$sbi' AND EmployeeID='$ei' GROUP BY EmployeeID");


$gps = DBLookup("SELECT GracePeriodMins FROM demo_user WHERE EmployeeID='$ei'");



$sqlr = "UPDATE indschedule SET TimeIn=NULLIF('$ti',''), TimeOut=NULLIF('$to',''), AfterBreakLog=NULLIF('$bri',''), AfterBreakLogOut=NULLIF('$bro',''), HolidayType=NULLIF('$ht',''), Holiday1stHalf=NULLIF('$h1',''), Holiday2ndHalf=NULLIF('$h2',''), 
BreakLateMins=NULL, GracePeriodMins=NULLIF('$gps',0)  WHERE ScID='$sc'";

CustomQuery($sqlr);



};




$result["txt"] = $params["txt"]." Done!";
    ;
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_Upload_DTR_to_Payroll2($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$data = $button->getCurrentRecord();
$result['record'] = $data;
$frd= $data["FromDate"];
$tod= $data["ToDate"];
$empr= $data["Employer"];
$wtt= $data["WageType"];
$dvv= $data["Division"];

$tdd="'".$tod."'";


global $dal;



$rs = DB::Query("select * from dt2 where Employer='$empr' and WageType='$wtt' and Division='$dvv'");
 
while( $datand = $rs->fetchAssoc() )

{
$s1=$datand["ScID"];
$cm=$datand["AutoApproveNDiff"];
$nd1=$datand["NDMins"];

if ($cm==1) {

$sq = "UPDATE indschedule SET ApprovednightDiff=1, ANDiff='$nd1' WHERE ScID='$s1'";
CustomQuery($sq);
}
};



$rs = DB::Query("select * from dtrupload2 where Employer='$empr' and WageType='$wtt' and Division='$dvv'");
 
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

$tlates=$datax["TLates"];

$r = DBLookup("SELECT RHF FROM hcal4 WHERE ScID='$sc'");
$s = DBLookup("SELECT SHF FROM hcal4 WHERE ScID='$sc'");
$c = DBLookup("SELECT CHF FROM hcal4 WHERE ScID='$sc'");

$blate=DBLookup("SELECT TExcess FROM indbreaksum WHERE ScID='$sc'");


$sqlr = "UPDATE indschedule SET RegWD='$rw', DWork='$dw', Absent='$ab', LateMins='$l', UndertimeMins='$u', RHolidayHrs='$r',
SHolidayHrs='$s', CHolidayHrs='$c', ExcessHrs='$ex', RegOTHrs='$ro', RHOTHrs='$rho', SHOTHRs='$sho', CHOTHrs='$cho', RDOTHrs='$rdo', NDHrs='$nd', RDHrs='$rd',
RegNDHrs='$rnd', RHNDHrs='$rhnd', SHNDHrs='$shnd', CHNDHrs='$chnd', RDNDHrs='$rdnd', VLDay='$vl', SLDay='$sl', ELDay='$el', PLDay='$pl', TrODay='$tr', Mispunched='$mp',
BreakLateMins=NULLIF('$blate',''), TotLateMins='$tlates'+NULLIF('$blate',''), LatePenaltyMins='$latep'
WHERE ScID='$sc'";
CustomQuery($sqlr);



};
    

$result["txt"] = $params["txt"]." Done!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_Create_Payroll($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$data = $button->getCurrentRecord();
$result['record'] = $data;
$frd= $data["FromDate"];
$tod= $data["ToDate"];
$empr= $data["Employer"];
$dvv= $data["Division"];
$wtt= $data["WageType"];


$tdd="'".$tod."'";




global $dal;
$tblName1 = $dal->Table("payroll");
$rstmp1 = $tblName1->Query("PayToDate=".$tdd." and Employer=".$empr." and Division=".$dvv." and WageType=".$wtt,"");
$datatmp1 = db_fetch_array($rstmp1);
if($datatmp1)
{
$result["txt"] = $params["txt"]. " Payroll Main Data Exist!";

}
else
{
$sqlh = "INSERT payroll VALUES (NULL, NULL, '$frd', '$tod', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$dvv', '$empr', '$wtt')";
CustomQuery($sqlh);

$sqld = "INSERT payrolldiv VALUES (NULL, '$empr', '$dvv', '$frd', '$tod', '$wtt', NULL)";
CustomQuery($sqld);



};




$tblName = $dal->Table("payrolltab");
$rstmp = $tblName->Query("ToDate=".$tdd." and Employer=".$empr." and Division=".$dvv." and WageType=".$wtt,"");
$datatmp = db_fetch_array($rstmp);
if($datatmp)
{
$result["txt"] = $params["txt"]. " PayrollTab Data Exist! Please remove it first.";

}
else
{


$rs = DB::Query("select * from dtrsummary2 where Employer='$empr' and Division='$dvv' and WageType='$wtt'");
 
while( $datax = $rs->fetchAssoc() )


//$tblOrders = $dal->Table("dtrsummary2");
//$rs = $tblOrders->Query("EmployeeID>0");
//while ($datax = db_fetch_array($rs))
{



$usern=$datax["UserName"];
$empid=$datax["EmployeeID"];
$wt=$datax["WageType"];
$dw=$datax["DWork"];
$ab=$datax["Absent"];
$lm=round($datax["TLates"],0);
$um=round($datax["UndertimeMins"],0);
$rh=$datax["RHolidayHrs"];
$sh=$datax["SHolidayHrs"];
$ch=$datax["CHolidayHrs"];
$eh=$datax["ExcessHrs"];
$rot=$datax["RegOTHrs"];
$rhot=$datax["RHOTHrs"];
$shot=$datax["SHOTHRs"];
$chot=$datax["CHOTHrs"];
$rdot=$datax["RDOTHrs"];
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
$tro=$datax["TrODays"];
$ndma=$datax["NDMealAllowance"];
$divi=$datax["Division"];
$empr=$datax["Employer"];

$st = DBLookup("SELECT Status FROM demo_user WHERE EmployeeID='$empid'");
$bd = DBLookup("SELECT BasicDailyPay FROM demo_user WHERE EmployeeID='$empid'");
$bm = DBLookup("SELECT BasicMonthlyPay FROM demo_user WHERE EmployeeID='$empid'");
$email = DBLookup("SELECT Email FROM demo_user WHERE EmployeeID='$empid'");
$posi = DBLookup("SELECT Position FROM demo_user WHERE EmployeeID='$empid'");

$alw = DBLookup("SELECT AllowancePerDay FROM demo_user WHERE EmployeeID='$empid'");
$ashare = DBLookup("SELECT AgentSharePerDay FROM demo_user WHERE EmployeeID='$empid'");


$vlb = DBLookup("SELECT VLBalance FROM leavebalance WHERE EmployeeID='$empid'");
$slb = DBLookup("SELECT SLBalance FROM leavebalance WHERE EmployeeID='$empid'");
$elb = DBLookup("SELECT ELBalance FROM leavebalance WHERE EmployeeID='$empid'");
$plb = DBLookup("SELECT PLBalance FROM leavebalance WHERE EmployeeID='$empid'");


$sqlr = "INSERT payrolltab VALUES (NULL, '$empid', '$wt', '$st', '$bm', '$bd', '$dw', '$ab', '$lm', '$um', '$rh', '$sh',
 '$ch', '$eh', '$rot', '$rhot', '$shot', '$chot', '$rdot', '$nd', '$rd', '$rnd', '$rhnd', '$shnd', '$chnd', '$rdnd', '$vl',
 '$sl', '$el', '$pl', '$tro', '$frd', '$tod', '$usern', NULL, '$vlb', '$slb', '$elb', '$plb', NULL, '$ndma', '$divi', '$empr', NULL, '$email', NULL, '$posi')";
CustomQuery($sqlr);





};



$result["txt"] = $params["txt"]." Payroll Uploaded!";

};
    ;
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_Update_Payroll3($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$data = $button->getCurrentRecord();
$result['record'] = $data;
$frd= $data["FromDate"];
$tod= $data["ToDate"];
$empr= $data["Employer"];
$wtt= $data["WageType"];
$dvv= $data["Division"];
$tdd="'".$tod."'";



$chlock=DBLookup("select Locked from payroll where PayToDate='". $tod. "' and Employer='$empr' and Division='$dvv' and WageType='$wtt'");

if ($chlock!=1) {


global $dal;


$tblName = $dal->Table("payrolltab");
$rstmp = $tblName->Query("ToDate=".$tdd,"");
$datatmp = db_fetch_array($rstmp);
if($datatmp)
{

$rs = DB::Query("select * from dtrsummary2 where Employer='$empr' and WageType='$wtt' and Division='$dvv'");
 
while( $datax = $rs->fetchAssoc() )
{



$usern=$datax["UserName"];
$empid=$datax["EmployeeID"];
$wt=$datax["WageType"];
$dw=$datax["DWork"];
$ab=$datax["Absent"];
$lm=round($datax["TLates"],0);
$um=round($datax["UndertimeMins"],0);
$rh=$datax["RHolidayHrs"];
$sh=$datax["SHolidayHrs"];
$ch=$datax["CHolidayHrs"];
$eh=$datax["ExcessHrs"];
$rot=$datax["RegOTHrs"];
$rhot=$datax["RHOTHrs"];
$shot=$datax["SHOTHRs"];
$chot=$datax["CHOTHrs"];
$rdot=$datax["RDOTHrs"];
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
$tro=$datax["TrODays"];
$ndma=$datax["NDMealAllowance"];
$divi=$datax["Division"];
$empr=$datax["Employer"];

$st = DBLookup("SELECT Status FROM demo_user WHERE EmployeeID='$empid'");
$bd = DBLookup("SELECT BasicDailyPay FROM demo_user WHERE EmployeeID='$empid'");
$bm = DBLookup("SELECT BasicMonthlyPay FROM demo_user WHERE EmployeeID='$empid'");
$email = DBLookup("SELECT Email FROM demo_user WHERE EmployeeID='$empid'");

$alw = DBLookup("SELECT AllowancePerDay FROM demo_user WHERE EmployeeID='$empid'");
$ashare = DBLookup("SELECT AgentSharePerDay FROM demo_user WHERE EmployeeID='$empid'");


$vlb = DBLookup("SELECT VLBalance FROM leavebalance WHERE EmployeeID='$empid'");
$slb = DBLookup("SELECT SLBalance FROM leavebalance WHERE EmployeeID='$empid'");
$elb = DBLookup("SELECT ELBalance FROM leavebalance WHERE EmployeeID='$empid'");
$plb = DBLookup("SELECT PLBalance FROM leavebalance WHERE EmployeeID='$empid'");
$posi = DBLookup("SELECT Position FROM demo_user WHERE EmployeeID='$empid'");

$sqlr = "UPDATE payrolltab SET WageType='$wt', Status='$st', BasicMonthly='$bm', BasicDaily='$bd', DWork='$dw', Absent='$ab', LateMins='$lm', UndertimeMins='$um', RHolidayHrs='$rh', SHolidayHrs='$sh',
 CHolidayHrs='$ch', ExcessHrs='$eh', RegOTHrs='$rot', RHOTHrs='$rhot', SHOTHRs='$shot', CHOTHrs='$chot', RDOTHrs='$rdot', NDHrs='$nd', RDHrs='$rd', RegNDHrs='$rnd', RHNDHrs='$rhnd', SHNDHrs='$shnd', CHNDHrs='$chnd', RDNDHrs='$rdnd', VLDays='$vl',
 SLDays='$sl', ELDays='$el', PLDays='$pl', TrODays='$tro', FromDate='$frd',  UserName='$usern', AllowancePerDay='$alw', VLBalance='$vlb', SLBalance='$slb', ELBalance='$elb', PLBalance='$plb', AgencyShare='$ashare', NDMealallowance='$ndma', Division='$divi', Employer='$empr', Email='$email', Position='$posi'
 WHERE ToDate='$tod' and EmployeeID='$empid' and Locked<>1";
CustomQuery($sqlr);





};



$result["txt"] = $params["txt"]." Payroll Updated!";

};

};

if ($chlock==1) {
$result["txt"] = $params["txt"]." Payroll is Already Locked!";
};

    ;
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_Clear_Payroll1($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$data = $button->getCurrentRecord();
$result['record'] = $data;
$frd= $data["FromDate"];
$tod= $data["ToDate"];
$wt1= $data["WageType"];
$em1= $data["Employer"];
$dvv= $data["Division"];

$tdd="'".$tod."'";

$chlock=DBLookup("select Locked from payroll where PayToDate='". $tod. "' and Employer='$em1' and Division='$dvv' and WageType='$wt1'");

if ($chlock!=1) {

$sqd1 = "DELETE FROM payroll WHERE PayToDate='$tod' and Employer='$em1' and WageType='$wt1' and Division='$dvv'";
CustomQuery($sqd1);

$sqd2 = "DELETE FROM payrolltab WHERE ToDate='$tod' and Employer='$em1' and WageType='$wt1' and Division='$dvv' ";
CustomQuery($sqd2);

$sqd3 = "DELETE FROM payrollstatutories WHERE ToDate='$tod' and Employer='$em1' and WageType='$wt1' and Division='$dvv'";
CustomQuery($sqd3);

$sqd4 = "DELETE FROM payrolldeductions WHERE ToDate='$tod' and Employer='$em1' and WageType='$wt1' and Division='$dvv'";
CustomQuery($sqd4);

$sqd5 = "DELETE FROM payrollearnadj WHERE ToDate='$tod' and Employer='$em1' and WageType='$wt1' and Division='$dvv'";
CustomQuery($sqd5);

$sqd6 = "DELETE FROM payrolltax WHERE ToDate='$tod' and Employer='$em1' and WageType='$wt1' and Division='$dvv'";
CustomQuery($sqd6);

$sqd2 = "DELETE FROM payrolldiv WHERE ToDate='$tod' and Employer='$em1' and WageType='$wt1' and Division='$dvv' ";
CustomQuery($sqd2);


$result["txt"] = $params["txt"]." Payroll Removed!";

};

if ($chlock==1) {
$result["txt"] = $params["txt"]." Payroll is Already Locked!";
};;
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_Process_Payroll($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$data = $button->getCurrentRecord();
$result['record'] = $data;
$lc = $data["Locked"];

if ($lc==1) {

$result["txt"] = $params["txt"]." Sorry, Locked already!";

}

else { // Start


$data = $button->getCurrentRecord();
$result['record'] = $data;
$frd1= $data["PayFromDate"];
$tod1= $data["PayToDate"];

$emr1= $data["Employer"];
$dvv1= $data["Division"];
$wtp1= $data["WageType"];


$tod2="'".$tod1."'";
$psid= $data["PSID"];

$sta= $data["Statutories"];
$slo= $data["Stat Loans"];
$ded= $data["Deductions"];
$adj= $data["Adjustments"];
$madj= $data["MoAdjustment"];
$ptax= $data["PresetTax"];
$thr= $data["13thMonth"];

$sd1 = "DELETE FROM payrollstatutories WHERE PSID='$psid'";
CustomQuery($sd1);

$sd2 = "DELETE FROM payrolldeductions WHERE PSID='$psid'";
CustomQuery($sd2);

$sd3 = "DELETE FROM payrollearnadj WHERE PSID='$psid'";
CustomQuery($sd3);

$sd4 = "DELETE FROM payrolltax WHERE PSID='$psid'";
CustomQuery($sd4);

//$sd5 = "DELETE FROM payrollearnadj WHERE FromDate='$frd2' AND ToDate='$tod2' AND Adjustment=11";
//CustomQuery($sd5);


global $dal;


//the beginning

$tblOrders = $dal->Table("payrolltab");
$rs1 = $tblOrders->Query("ToDate=".$tod2. " and Employer=".$emr1. " and Division=".$dvv1. " and WageType=".$wtp1,"");
while ($datax1 = db_fetch_array($rs1))
{
$empid=$datax1["EmployeeID"];
$dv=$datax1["Division"];
$wt=$datax1["WageType"];

//Start Statutories
if ($sta==1) {

$sp = DBLookup("SELECT StatutoryPayment FROM divisions WHERE DvID='$dv'");
$mp = DBLookup("SELECT MontlyPaymentPeriods FROM divisions WHERE DvID='$dv'");
if($sp==2) {$rv=$mp;}
else{$rv=1;};

$ss = DBLookup("SELECT SSSEE FROM demo_user WHERE EmployeeID='$empid'")/$rv;
$ph = DBLookup("SELECT PhilHealthEE FROM demo_user WHERE EmployeeID='$empid'")/$rv;
$pi = DBLookup("SELECT PagIbigEE FROM demo_user WHERE EmployeeID='$empid'")/$rv;

$phr = DBLookup("SELECT PhilHealthER FROM demo_user WHERE EmployeeID='$empid'")/$rv;
$pir = DBLookup("SELECT PagIbigER FROM demo_user WHERE EmployeeID='$empid'")/$rv;
$ssr = DBLookup("SELECT SSSER FROM demo_user WHERE EmployeeID='$empid'")/$rv;
$ssc = DBLookup("SELECT SSSEC FROM demo_user WHERE EmployeeID='$empid'")/$rv;

$sst=$ss+$ssr+$ssc;
$pit=$pi+$pir;
$pht=$ph+$phr;

$exp = DBLookup("SELECT ExcludeContributionOnPayroll FROM demo_user WHERE EmployeeID='$empid'");

if ($exp!=1) {
$sqls = "INSERT payrollstatutories VALUES (NULL, '$ss', '$pi','$ph', '$frd1', '$tod1', '$empid', '$psid', '$ssr', '$ssc', '$sst', '$pir', '$pit', '$phr', '$pht', '$emr1', '$dvv1', '$wtp1'  )";
CustomQuery($sqls);
};

}; 

//Stat Close


//Start  Stat Loans

if ($slo==1) {




$frd2= $data["PayFromDate"];
$tod2= $data["PayToDate"];



$rs = DB::Query("select * from loanb3s where (StartDate<'$tod2' OR StartDate='$tod2') and EmployeeID='$empid' ");

while ($datax2 = db_fetch_array($rs))

{


$empy=$datax2["EmployeeID"];
$lid=$datax2["LoanID"];
$fpay=$datax2["ForPayment"];
$ldes=$datax2["LoanDescription"];
$bal=$datax2["Balance"];
$bal2=$bal-$fpay;


$sqld = "INSERT payrolldeductions VALUES (NULL, '$ldes', '$fpay','$frd2', '$tod2', '$empy', '$lid', '$psid', '$bal2', '$emr1', '$dvv1', '$wtp1' )";
CustomQuery($sqld);


};

}; //End Stat  Loans

// Start Deductions

if ($ded==1) {

$rs = DB::Query("select * from loanb3 where (StartDate<'$tod2' OR StartDate='$tod2') and EmployeeID='$empid'");

while ($datax2 = db_fetch_array($rs))

{

$empz=$datax2["EmployeeID"];
$lid=$datax2["LoanID"];
$fpay=$datax2["ForPayment"];
$ldes=$datax2["LoanDescription"];
$bal=$datax2["Balance"];
$bal2=$bal-$fpay;


$sqld = "INSERT payrolldeductions VALUES (NULL, '$ldes', '$fpay','$frd2', '$tod2', '$empz', '$lid', '$psid', '$bal2', '$emr1', '$dvv1', '$wtp1' )";
CustomQuery($sqld);


};

}; // End  Deductions

//Start Adjustments
 if ($adj==1) {

$frd3= $data["PayFromDate"];
$tod3= $data["PayToDate"];


$tblOrders = $dal->Table("earningadjustment");
$rs3 = $tblOrders->Query("PaymentPeriod=1 and EmployeeID=".$empid,"");
while ($datax3 = db_fetch_array($rs3))
{

$empa=$datax3["EmployeeID"];
$eid=$datax3["eaID"];
$ad=$datax3["AdjustmentDescription"];
$amt=$datax3["PerPayrollAmount"];
$la=$datax3["LessAbsences"];

if($la==1) { 

$wagt=DBLookup("select EmployeeType from demo_user where EmployeeID='$empa'");
$wm=DBLookup("select WorkingDaysInYear from standardsetup where SID=1");
$wd=DBLookup("select WorkingDaysInYearDailies from standardsetup where SID=1");
$abs=DBLookup("select Absent from dtrsummary2 where EmployeeID='$empa'");

if($wagt==1) {//monthly
$famt=$amt-(($abs*$amt*24)/$wm);

}

if($wagt==2) {//dailies
$famt=$amt-(($abs*$amt*24)/$wd);

}

}

if($la!=1) { 
$famt=$amt;

}


$sqlad = "INSERT payrollearnadj VALUES (NULL, '$ad', '$famt','$frd3', '$tod3', '$empa', '$eid', '$psid', NULL, '$emr1', '$dvv1', '$wtp1' )";
CustomQuery($sqlad);



};


$tblOrders = $dal->Table("earningadjustment");
$rsd = $tblOrders->Query("PaymentPeriod=3 and EmployeeID=".$empid,"");
while ($datad = db_fetch_array($rsd))
{

$em=$datad["EmployeeID"];
$ei=$datad["eaID"];
$add=$datad["AdjustmentDescription"];
$am=$datad["PerPayrollAmount"];



$pres=DBLookup("select Tpres from presents3 where EmployeeID='$em'");

$damt=$am*$pres;

$sqldy = "INSERT payrollearnadj VALUES (NULL, '$add', '$damt','$frd3', '$tod3', '$em', '$ei', '$psid', NULL, '$emr1', '$dvv1', '$wtp1' )";
CustomQuery($sqldy);


}; //end per day



}; // End Adjustmets

// Start  Mo Adjustment

if ($madj==1) {

$frd3= $data["PayFromDate"];
$tod3= $data["PayToDate"];



$tblOrders = $dal->Table("earningadjustment");
$rs3 = $tblOrders->Query("PaymentPeriod=2 and EmployeeID=".$empid,"");
while ($datax3 = db_fetch_array($rs3))
{

$empb=$datax3["EmployeeID"];
$eid=$datax3["eaID"];
$ad=$datax3["AdjustmentDescription"];
$amt=$datax3["PerPayrollAmount"];



$sqlad = "INSERT payrollearnadj VALUES (NULL, '$ad', '$amt','$frd3', '$tod3', '$empb', '$eid', '$psid', NULL, '$emr1', '$dvv1', '$wtp1' )";
CustomQuery($sqlad);



};

}; //end Mo Adjustment

//Start  Preset Tax

if ($ptax==1)  {

$frd1= $data["PayFromDate"];
$tod1= $data["PayToDate"];
$tod2="'".$tod1."'";


//$tblOrders = $dal->Table("payrolltab");
//$rs1 = $tblOrders->Query("ToDate=".$tod2. " and EmployeeID=".$empid,"");
//while ($datax1 = db_fetch_array($rs1))
//{


//$empc=$datax1["EmployeeID"];



$pt = DBLookup("SELECT PresetTax FROM demo_user WHERE EmployeeID='$empid'");


$sqlt = "INSERT payrolltax VALUES (NULL, '$empid', '$pt', '$frd1', '$tod1', '$psid', '$emr1', '$dvv1', '$wtp1')";
CustomQuery($sqlt);


//};


}; //end Preset Tax

//Start 13th Month

if ($thr==1) {

$frd3= $data["PayFromDate"];
$tod3= $data["PayToDate"];


$rs = DB::Query("select * from final13th and EmployeeID='$empid'");

while ($data = db_fetch_array($rs))

{

$amt=$data["B13th"];
$empid=$data["EmployeeID"];

//$sql13 = "INSERT payrollearnadj VALUES (NULL, 11, '$amt','$frd3', '$tod3', '$empid', NULL, '$psid', NULL, '$emr1', '$dvv1', '$wtp1')";
//CustomQuery($sql13);


};


}; //End 13th Month



}; 

$result["txt"] = $params["txt"]." Done!";

}; //close
;
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_SSS_Contribution($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$data = $button->getCurrentRecord();

$result['Employer'] = $data["Employer"];
$result['FromDate'] = $data["FromDate"];
$result['ToDate'] = $data["ToDate"];
$result['PreparedBy'] = $data["PreparedBy"];



$result["txt"] = $params["txt"]." Done!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_Pag_Ibig_Contribution1($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$data = $button->getCurrentRecord();

$result['PSID'] = $data["PSID"];
$result['Employer'] = $data["Employer"];
$result['FromDate'] = $data["FromDate"];
$result['ToDate'] = $data["ToDate"];
$result['PreparedBy'] = $data["PreparedBy"];



$result["txt"] = $params["txt"]." Done!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_PhilHealth($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$data = $button->getCurrentRecord();

$result['PSID'] = $data["PSID"];
$result['Employer'] = $data["Employer"];
$result['FromDate'] = $data["FromDate"];
$result['ToDate'] = $data["ToDate"];
$result['PreparedBy'] = $data["PreparedBy"];


$result["txt"] = $params["txt"]." Done!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_Loan_Summary4($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$data = $button->getCurrentRecord();

$result['Employer'] = $data["Employer"];
$result['FromDate'] = $data["FromDate"];
$result['ToDate'] = $data["ToDate"];
$result['LoanType'] = $data["LoanType"];

$result['PreparedBy'] = $data["PreparedBy"];



$result["txt"] = $params["txt"]." Done!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_Print_Payslip($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$data = $button->getCurrentRecord();

$result['PtabID'] = $data["PtabID"];;
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_Upload_Schedule2($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$data = $button->getCurrentRecord();
$result['record'] = $data;
$fd= $data["FromDate"];
$td= $data["ToDate"];
$ti= $data["TimeIn"];
$to= $data["TimeOut"];
$mid= $data["IScRID"];
$stype= $data["SchedType"];
$empid=$data["EmployeeID"];

$rd= $data["RestDay"];
$sby= $data["SchedBy"];

$rsdy= $data["RestDays"];
$mpd= $data["MinsPerDay"];
$bm= $data["BreakMins"];
$shf= $data["Shift"];
$lbf= $data["LunchBreakTimeFrom"];
$lbt= $data["LunchBreakTimeTo"];

$fhm= $data["FirstHalfMins"];
$shm= $data["SecondHalfMins"];

function comma_separated_to_array($string, $separator = ',')
{
  //Explode on comma
  $vals = explode($separator, $string);
 
  //Trim whitespace
  foreach($vals as $key => $val) {
    $vals[$key] = trim($val);
  }
  //Return empty array if no items found
  //http://php.net/manual/en/function.explode.php#114273
  return array_diff($vals, array(""));
};


global $dal;
$tblName = $dal->Table("indschedule");
$rstmp = $tblName->Query("IScRID=".$data["IScRID"],"");
$datatmp = db_fetch_array($rstmp);
if($datatmp)
{
$result["txt"] = $params["txt"]. " Data Exist! Please remove it first.";

}
else
{



$ts1 = strtotime($fd);
$ts2 = strtotime($td);

$inter = (($ts2 - $ts1)/86400)+1;

//$sqldely = "DELETE FROM indschedule WHERE ScRID='$mid'";
//CustomQuery($sqldely);

//global $dal;



$usern = DBLookup("SELECT user_name FROM demo_user WHERE EmployeeID='$empid'");
$wt = DBLookup("SELECT EmployeeType FROM demo_user WHERE EmployeeID='$empid'");
$divi = DBLookup("SELECT Division FROM demo_user WHERE EmployeeID='$empid'");
$dept = DBLookup("SELECT Department FROM demo_user WHERE EmployeeID='$empid'");
$ndmeal = DBLookup("SELECT MealAllowance FROM nightshiftallowance WHERE ndaID=1");
$ndhrs = DBLookup("SELECT MinimumHrs FROM nightshiftallowance WHERE ndaID=1");
$empr = DBLookup("SELECT Employer FROM demo_user WHERE EmployeeID='$empid'");
$latfix = DBLookup("SELECT LateFixPenalty FROM demo_user WHERE EmployeeID='$empid'");
$pt = DBLookup("SELECT PreTimeInMins FROM standardsetup WHERE SID=1");
$ibl = DBLookup("SELECT IncludeBreakLate FROM demo_user WHERE EmployeeID='$empid'");
$gp = DBLookup("SELECT GracePeriodMins FROM demo_user WHERE EmployeeID='$empid'");
$adb = DBLookup("SELECT WithAdditionalBreaks FROM demo_user WHERE EmployeeID='$empid'");


$i = 0;
WHILE ($i < $inter):
$date=date_create($fd);
date_add($date,date_interval_create_from_date_string('"'.$i.'days"'));
$indate=date_format($date,"Y-m-d");

//$day_num = 1;
$day_num = date('N', strtotime($indate));

$dayrest = comma_separated_to_array($rsdy);

if ($sby==1) {

if (in_array($day_num, $dayrest))
  {
  $rdfn=1;
  }
else
  {
  $rdfn=0;;
  };

$sqd = "DELETE FROM indschedule WHERE UserName='$usern' AND SDate='$indate'";
CustomQuery($sqd);

$sqlr = "INSERT indschedule VALUES (NULL, '$usern', '$indate', NULLIF('$ti',''), NULLIF('$to',''), '$stype', NULL, NULL, NULL, NULL, NULL, NULL, '$wt', NULL, NULL, '$empid', '$mpd', '$bm', '$shf', NULL, NULL, NULL, NULLIF('$lbf',''), NULLIF('$lbt',''), NULL, '$fhm', '$shm', '$ndmeal', '$ndhrs', NULL, '$divi',
NULL, NULL, '$day_num', '$rdfn', NULL, '$dept', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,
NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$empr', NULL, '$latfix', NULL, '$mid','$pt','$ibl','$gp','$adb')";
CustomQuery($sqlr);

}; //end sby as All Days work Except rest days

if ($sby==2) { 

   if (in_array($day_num, $dayrest)) { 

   $sqd2 = "DELETE FROM indschedule WHERE UserName='$usern' AND SDate='$indate'";
   CustomQuery($sqd2);

   $sqlr = "INSERT indschedule VALUES (NULL, '$usern', '$indate', NULLIF('$ti',''), NULLIF('$to',''), '$stype', NULL, NULL, NULL, NULL, NULL, NULL, '$wt', NULL, NULL, '$empid', '$mpd', '$bm', '$shf', NULL, NULL, '$mid', NULLIF('$lbf',''), NULLIF('$lbt',''), NULL, '$fhm', '$shm', '$ndmeal', '$ndhrs', NULL, '$divi',
   NULL, NULL, '$day_num', 0, NULL, '$dept', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,
   NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$empr', NULL, '$latfix', NULL, NULL,'$pt','$ibl','$gp', '$adb')";
   CustomQuery($sqlr);
   }

}; //end sby as All Working Days Only

$i++;
ENDWHILE;

$sqlup = "Update indschedrange set Posted=1 where IScRID='$mid'";
 CustomQuery($sqlup);



$result["txt"] = $params["txt"]." Done!";
};
    ;
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_Clear_Uploaded_Schedule2($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	
$data = $button->getCurrentRecord();
$sc= $data["IScRID"];



$sqz = "DELETE FROM indschedule WHERE IScRID='$sc'";
CustomQuery($sqz);

$sqlup = "Update indschedrange set Posted=0 where IScRID='$sc'";
 CustomQuery($sqlup);



$result["txt"] = $params["txt"]." Done!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_Print($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_Payslip($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$data = $button->getCurrentRecord();

$result['PSID'] = $data["PSID"];
$result['PRollID'] = $data["PRollID"];
$result['Division'] = $data["Division"];
$result['Employer'] = $data["Employer"];
$result['WageType'] = $data["WageType"];

$result['ToDate'] = $data["ToDate"];

$pr=$data["PRollID"];
$td = $data["ToDate"];
$dv=$data["Division"];

$sqlp = "Update payrolltab set PayrollID='". $pr. "' where ToDate='$td' AND Division='$dv'";
 CustomQuery($sqlp);;
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_Bank_Registry($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$data = $button->getCurrentRecord();

$result['PSID'] = $data["PSID"];
$result['PRollID'] = $data["PRollID"];
$result['Division'] = $data["Division"];
$result['Employer'] = $data["Employer"];
$result['WageType'] = $data["WageType"];

$result['ToDate'] = $data["ToDate"];

$pr=$data["PRollID"];
$td = $data["ToDate"];
$dv=$data["Division"];

$sqlp = "Update payrolltab set PayrollID='". $pr. "' where ToDate='$td' AND Division='$dv'";
 CustomQuery($sqlp);
;
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_Summary_A($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$data = $button->getCurrentRecord();

$result['PSID'] = $data["PSID"];
$result['PRollID'] = $data["PRollID"];
$result['Division'] = $data["Division"];
$result['Employer'] = $data["Employer"];
$result['WageType'] = $data["WageType"];

$result['ToDate'] = $data["ToDate"];

$pr=$data["PRollID"];
$td = $data["ToDate"];
$dv=$data["Division"];

$sqlp = "Update payrolltab set PayrollID='". $pr. "' where ToDate='$td' AND Division='$dv'";
 CustomQuery($sqlp);
;
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_Summary_B($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$data = $button->getCurrentRecord();

$result['PSID'] = $data["PSID"];
$result['PRollID'] = $data["PRollID"];
$result['Division'] = $data["Division"];
$result['Employer'] = $data["Employer"];
$result['WageType'] = $data["WageType"];

$result['ToDate'] = $data["ToDate"];

$pr=$data["PRollID"];
$td = $data["ToDate"];
$dv=$data["Division"];

$sqlp = "Update payrolltab set PayrollID='". $pr. "' where ToDate='$td' AND Division='$dv'";
 CustomQuery($sqlp);
;
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_Summary_C($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$data = $button->getCurrentRecord();

$result['PSID'] = $data["PSID"];
$result['PRollID'] = $data["PRollID"];
$result['Division'] = $data["Division"];
$result['Employer'] = $data["Employer"];
$result['WageType'] = $data["WageType"];

$result['ToDate'] = $data["ToDate"];

$pr=$data["PRollID"];
$td = $data["ToDate"];
$dv=$data["Division"];

$sqlp = "Update payrolltab set PayrollID='". $pr. "' where ToDate='$td' AND Division='$dv'";
 CustomQuery($sqlp);
;
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_Payslip1($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$data = $button->getCurrentRecord();

$result['PtabID'] = $data["PtabID"];;
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_Update_SSS($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$rs = DB::Select("demo_user", "EmployeeID>0" );

while( $record = $rs->fetchAssoc() )

{

$eid=$record["EmployeeID"];
$bm=$record["BasicMonthlyPay"];
$bd=$record["BasicDailyPay"];
$wt=$record["EmployeeType"];
$exp=$record["ExcludeContributionOnPayroll"];

$ds=DBLookup("select WorkingDaysInYearDailies from standardsetup where SID=1");

$bd2=($bd*$ds)/12;

if ($wt==1) {
    $m=$bm;
} else {
 $m=$bd2;
};


$er=DBLookup("select ER from ssstable where '$m' between CompFrom and CompTo");
$ee=DBLookup("select EE from ssstable where '$m' between CompFrom and CompTo");
$ec=DBLookup("select EC from ssstable where '$m' between CompFrom and CompTo");

if ($exp!=1) {
$sql = "Update demo_user set SSSER='$er', SSSEE='$ee', SSSEC='$ec' where EmployeeID='$eid'";
 CustomQuery($sql);
};

}

$result["txt"] = $params["txt"]." Done!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_Update_PhilHelath($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$rs = DB::Select("demo_user", "EmployeeID>0" );

while( $record = $rs->fetchAssoc() )

{

$eid=$record["EmployeeID"];
$bm=$record["BasicMonthlyPay"];
$bd=$record["BasicDailyPay"];
$wt=$record["EmployeeType"];
$exp=$record["ExcludeContributionOnPayroll"];

$ds=DBLookup("select WorkingDaysInYearDailies from standardsetup where SID=1");

$bd2=($bd*$ds)/12;

if ($wt==1) {
    $m=$bm;
} else {
 $m=$bd2;
};


$pc=DBLookup("select PcntRate from philhealthtable where '$m' between SalaryFrom and SalaryTo");
$er=DBLookup("select ER from philhealthtable where '$m' between SalaryFrom and SalaryTo");
$ee=DBLookup("select EE from philhealthtable where '$m' between SalaryFrom and SalaryTo");

if ($pc>0) {
$n=($m*($pc/100))/2;

if ($exp!=1) {
$sql3 = "Update demo_user set PhilHealthEE='$n', PhilHealthER='$n' where EmployeeID='$eid'";
 CustomQuery($sql3);
};

} else {

if ($exp!=1) {
$sql4 = "Update demo_user set PhilHealthEE='$ee', PhilHealthER='$er' where EmployeeID='$eid'";
 CustomQuery($sql4);
};

};


}

$result["txt"] = $params["txt"]." Done!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_Update_Pag_Ibig2($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$rs = DB::Select("demo_user", "EmployeeID>0" );

while( $record = $rs->fetchAssoc() )

{

$eid=$record["EmployeeID"];
$exp=$record["ExcludeContributionOnPayroll"];


$er=DBLookup("select ER from pagibigtable where piID=1");
$ee=DBLookup("select EE from pagibigtable where piID=1");

if ($exp!=1) {
$sql = "Update demo_user set PagIbigER='$er', PagIbigEE='$ee'  where EmployeeID='$eid'";
 CustomQuery($sql);
};

}

$result["txt"] = $params["txt"]." Done!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
}


		
?>
