<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterSuccessfulLogin"]=true;


		$this->events["ModifyMenuItem"]=true;


//	onscreen events


		$this->events["IsRecordEditable"]["demo_user"] = true;
		$this->events["IsRecordEditable"]["indschedule"] = true;
		$this->events["IsRecordEditable"]["loans"] = true;
		$this->events["IsRecordEditable"]["payroll"] = true;
		$this->events["IsRecordEditable"]["payrolltab"] = true;
		$this->events["IsRecordEditable"]["earningadjustment"] = true;
		$this->events["IsRecordEditable"]["payrollearnadj"] = true;
		$this->events["IsRecordEditable"]["payrolldeductions"] = true;
		$this->events["IsRecordEditable"]["payrollstatutories"] = true;
		$this->events["IsRecordEditable"]["payrolltax"] = true;
		$this->events["IsRecordEditable"]["payroll21"] = true;
		$this->events["IsRecordEditable"]["leaves11"] = true;
		$this->events["IsRecordEditable"]["leavesapp"] = true;
		$this->events["IsRecordEditable"]["indschedrange"] = true;
		$this->events["IsRecordEditable"]["empdtr"] = true;
		$this->events["IsRecordEditable"]["overtimefile"] = true;
		$this->events["IsRecordEditable"]["payrolldiv"] = true;
		$this->events["IsRecordEditable"]["leavesapp2"] = true;
		$this->events["IsRecordEditable"]["filelog"] = true;
		$this->events["IsRecordEditable"]["filelog1"] = true;
		$this->events["IsRecordEditable"]["filelog2"] = true;
		$this->events["IsRecordEditable"]["filelog3"] = true;
		$this->events["IsRecordEditable"]["demo_user_open"] = true;
		$this->events["IsRecordEditable"]["overtimefileapp"] = true;
		$this->events["IsRecordEditable"]["overtimefileapp2"] = true;
		$this->events["IsRecordEditable"]["demo_useremp"] = true;
		$this->events["IsRecordEditable"]["payrolltab1"] = true;
		$this->events["IsRecordEditable"]["indscheduleemp"] = true;
		$this->events["IsRecordEditable"]["demo_useractive"] = true;

		}

//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, &$pageObject)
{

		  $_SESSION["loginID"] = $data["LogID"];
  $_SESSION["sect"] = $data["Section"];
  $_SESSION["EmpoyeeI"] = $data["EmployeeID"];

;		
} // function AfterSuccessfulLogin

				
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
				
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
				
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Menu item: Modify
function ModifyMenuItem(&$menuItem)
{

		

$title = $menuItem->getTitle();  
  

$empx=$_SESSION["EmpoyeeI"];
$userData = Security::isAdmin();

$usergr = Security::getUserGroup();



if ($title=="Active Employees") {  
    
    $count = DBLookup("select count(EmployeeID) from demo_user where Inactive<>1");  
    $title.="&nbsp"."<span class='badge badge-bluex'>".$count."</span>";  
  $menuItem->setTitle($title);  
}  


if ($title=="Employees Alert") {  
    
    $count = DBLookup("select count(EmployeeID) from demo_user where BasicMonthlyPay is null and BasicDailyPay is null");  
    $title.="&nbsp"."<span class='badge badge-bluex'>".$count."</span>";  
  $menuItem->setTitle($title);  
}  

if ($title=="Mispunched") {  
    
    $count = DBLookup("select count(ScID) from mispunched where EmployeeID>0");  
    $title.="&nbsp"."<span class='badge badge-redx'>".$count."</span>";  
  $menuItem->setTitle($title);  
} 


if ($title=="Notes Alert") {  
    
    $count = DBLookup("select count(NID) from noteage2 where NotifyDaysLeft>(-1)");  
    $title.="&nbsp"."<span class='badge badge-redx'>".$count."</span>";  
  $menuItem->setTitle($title);  
} 

if ($title=="Filelog Approval (S)") {  
    if ($userData==True or $usergr=='HR Personnel' or $usergr=='HR Manager' or $usergr=='HR Officer') {$count = DBLookup("select count(TransID2) from filelog where CheckedBy is not null and Checked is null and Approved is null and HRApproved is null"); } else {
    $count = DBLookup("select count(TransID2) from filelog where CheckedBy is not null and Checked is null and Approved is null and HRApproved is null and CheckedBy='$empx'"); };
    $title.="&nbsp"."<span class='badge badge-orangex'>".$count."</span>";  
    $menuItem->setTitle($title);  
}  

if ($title=="Filelog Approval (M)") {  
    if ($userData==True or $usergr=='HR Personnel' or $usergr=='HR Manager' or $usergr=='HR Officer') {$count = DBLookup("select count(TransID2) from filelog where ApprovedBy is not null and Approved is null and HRApproved is null"); } else {
    $count = DBLookup("select count(TransID2) from filelog where ApprovedBy is not null and Approved is null and HRApproved is null and ApprovedBy='$empx'"); };
    $title.="&nbsp"."<span class='badge badge-orangex'>".$count."</span>";  
  $menuItem->setTitle($title);  
}  

if ($title=="Filelog Approval (HR)") {  
     
    $count = DBLookup("select count(TransID2) from filelog where HRApproved is null");  
    $title.="&nbsp"."<span class='badge badge-orangex'>".$count."</span>";  
  $menuItem->setTitle($title);  
}  



if ($title=="Leaves Approval (S)") {  
   if ($userData==True or $usergr=='HR Personnel' or $usergr=='HR Manager' or $usergr=='HR Officer') {$count = DBLookup("select count(LvID) from leaves where Superior is not null and 1stApproval is null and 2ndApproval is null"); } else {
    $count = DBLookup("select count(LvID) from leaves where Superior is not null and 1stApproval is null and 2ndApproval is null and Superior='$empx'"); };
    $title.="&nbsp"."<span class='badge badge-orangex'>".$count."</span>";  
  $menuItem->setTitle($title);  
}  

if ($title=="Leaves Approval (M)") {  
    if ($userData==True or $usergr=='HR Personnel' or $usergr=='HR Manager' or $usergr=='HR Officer') {$count = DBLookup("select count(LvID) from leaves where Superior2 is not null and 2ndApproval is null"); } else {
    $count = DBLookup("select count(LvID) from leaves where Superior2 is not null and 2ndApproval is null and Superior2='$empx'"); }; 
    $title.="&nbsp"."<span class='badge badge-orangex'>".$count."</span>";  
  $menuItem->setTitle($title);  
}  


if ($title=="Overtime Approval (S)") {  
    if ($userData==True or $usergr=='HR Personnel' or $usergr=='HR Manager' or $usergr=='HR Officer') {$count = DBLookup("select count(ItiD) from overtimefile where Superior is not null and 1stApproval is null and 2ndApproval is null"); } else {
    $count = DBLookup("select count(ItiD) from overtimefile where Superior is not null and 1stApproval is null and 2ndApproval is null and Superior='$empx'"); };
    $title.="&nbsp"."<span class='badge badge-orangex'>".$count."</span>";  
  $menuItem->setTitle($title);  
}  

if ($title=="Overtime Approval (M)") {  
    if ($userData==True or $usergr=='HR Personnel' or $usergr=='HR Manager' or $usergr=='HR Officer') {$count = DBLookup("select count(ItiD) from overtimefile where Superior2 is not null and 2ndApproval is null"); } else {
    $count = DBLookup("select count(ItiD) from overtimefile where Superior2 is not null and 2ndApproval is null and Superior2='$empx'"); };
    $title.="&nbsp"."<span class='badge badge-orangex'>".$count."</span>";  
  $menuItem->setTitle($title);  
}  

return true;
;		
} // function ModifyMenuItem

		

//	onscreen events

	function IsRecordEditable($values, $isEditable, $table = "")
	{
		global $strTableName;
		if($table == "")
			$table = $strTableName;
		if($table == "demo_user")
		{
			

$lk=$values["Inactive"]; 

//$lk=DBLookup("SELECT Inactive FROM inventorydate WHERE IDate='$sd'");

if ($lk==1)
 return false;
else
 return true;




// Place event code here.
// Use "Add Action" button to add code snippets.

//return $isEditable;;
		}
		if($table == "indschedule")
		{
			


//$lk=$values["Locked"];



//if ($lk == 1)
// return false;
//else
 return true;;
		}
		if($table == "loans")
		{
			$eid=$values["EmployeeID"] ;

$lk=DBLookup("SELECT Inactive FROM demo_user WHERE EmployeeID='$eid'");

if ($lk==1)
 return false;
else
 return true;

// Place event code here.
// Use "Add Action" button to add code snippets.

//return $isEditable;;
		}
		if($table == "payroll")
		{
			
$lk=$values["Locked"];

if ($lk == 1)
 return false;
else
 return true;
//return $isEditable;
;
		}
		if($table == "payrolltab")
		{
			


$lk=$values["Locked"];

if ($lk == 1)
 return false;
else
 return true;;
		}
		if($table == "earningadjustment")
		{
			$eid=$values["EmployeeID"] ;

$lk=DBLookup("SELECT Inactive FROM demo_user WHERE EmployeeID='$eid'");

if ($lk==1)
 return false;
else
 return true;

// Place event code here.
// Use "Add Action" button to add code snippets.

//return $isEditable;;
		}
		if($table == "payrollearnadj")
		{
			$fr=$values["FromDate"];
$to=$values["ToDate"]; 

$lk=DBLookup("SELECT Locked FROM payrolltab WHERE FromDate='$fr' and ToDate='$to'");

if ($lk==1)
{
//$pageObject->setMessage("Date is already Locked!");
 return false;
}
else {
 return true;

}

// Place event code here.
// Use "Add Action" button to add code snippets.

//return $isEditable;;
		}
		if($table == "payrolldeductions")
		{
			$fr=$values["FromDate"];
$to=$values["ToDate"]; 

$lk=DBLookup("SELECT Locked FROM payrolltab WHERE FromDate='$fr' and ToDate='$to'");

if ($lk==1)
{
//$pageObject->setMessage("Date is already Locked!");
 return false;
}
else {
 return true;

}

// Place event code here.
// Use "Add Action" button to add code snippets.

//return $isEditable;;
		}
		if($table == "payrollstatutories")
		{
			$fr=$values["FromDate"];
$to=$values["ToDate"]; 

$lk=DBLookup("SELECT Locked FROM payrolltab WHERE FromDate='$fr' and ToDate='$to'");

if ($lk==1)
{
//$pageObject->setMessage("Date is already Locked!");
 return false;
}
else {
 return true;

}
//return $isEditable;;
		}
		if($table == "payrolltax")
		{
			
$fr=$values["FromDate"];
$to=$values["ToDate"]; 

$lk=DBLookup("SELECT Locked FROM payrolltab WHERE FromDate='$fr' and ToDate='$to'");

if ($lk==1)
{
//$pageObject->setMessage("Date is already Locked!");
 return false;
}
else {
 return true;

};
		}
		if($table == "payroll21")
		{
			
 return true;
//return $isEditable;
;
		}
		if($table == "leaves11")
		{
			

$lkd=$values["Locked"];

if($lkd==1) {

return $isEditable=false;

}

else return $isEditable=true;;
		}
		if($table == "leavesapp")
		{
			

$lkd=$values["Locked"];

if($lkd==1) {

return $isEditable=false;

}

else return $isEditable=true;;
		}
		if($table == "indschedrange")
		{
			$eid=$values["EmployeeID"] ;

$lk=DBLookup("SELECT Inactive FROM demo_user WHERE EmployeeID='$eid'");

if ($lk==1)
 return false;
else
 return true;

// Place event code here.
// Use "Add Action" button to add code snippets.

//return $isEditable;;
		}
		if($table == "empdtr")
		{
			


//$lk=$values["Locked"];



//if ($lk == 1)
// return false;
//else
 return true;;
		}
		if($table == "overtimefile")
		{
			
$lkd=$values["Locked"];

if($lkd==1) {

return $isEditable=false;

}

else return $isEditable=true;;
		}
		if($table == "payrolldiv")
		{
			

$lk=$values["Locked"];

if ($lk == 1)
 return false;
else
 return true;;
		}
		if($table == "leavesapp2")
		{
			
$lkd=$values["Locked"];

if($lkd==1) {

return $isEditable=false;

}

else return $isEditable=true;;
		}
		if($table == "filelog")
		{
			


$lkd=$values["Locked"];

if($lkd==1) {

return $isEditable=false;

}

else return $isEditable=true;;
		}
		if($table == "filelog1")
		{
			
$lkd=$values["Locked"];

if($lkd==1) {

return $isEditable=false;

}

else return $isEditable=true;;
		}
		if($table == "filelog2")
		{
			
$lkd=$values["Locked"];

if($lkd==1) {

return $isEditable=false;

}

else return $isEditable=true;;
		}
		if($table == "filelog3")
		{
			;
		}
		if($table == "demo_user_open")
		{
			

$lk=$values["Inactive"]; 

//$lk=DBLookup("SELECT Inactive FROM inventorydate WHERE IDate='$sd'");

if ($lk==1)
 return false;
else
 return true;




// Place event code here.
// Use "Add Action" button to add code snippets.

//return $isEditable;;
		}
		if($table == "overtimefileapp")
		{
			
$lkd=$values["Locked"];

if($lkd==1) {

return $isEditable=false;

}

else return $isEditable=true;;
		}
		if($table == "overtimefileapp2")
		{
			
$lkd=$values["Locked"];

if($lkd==1) {

return $isEditable=false;

}

else return $isEditable=true;;
		}
		if($table == "demo_useremp")
		{
			

$lk=$values["Inactive"]; 

//$lk=DBLookup("SELECT Inactive FROM inventorydate WHERE IDate='$sd'");

if ($lk==1)
 return false;
else
 return true;




// Place event code here.
// Use "Add Action" button to add code snippets.

//return $isEditable;;
		}
		if($table == "payrolltab1")
		{
			


$lk=$values["Locked"];

if ($lk == 1)
 return false;
else
 return true;;
		}
		if($table == "indscheduleemp")
		{
			


//$lk=$values["Locked"];



//if ($lk == 1)
// return false;
//else
 return true;;
		}
		if($table == "demo_useractive")
		{
			

$lk=$values["Inactive"]; 

//$lk=DBLookup("SELECT Inactive FROM inventorydate WHERE IDate='$sd'");

if ($lk==1)
 return false;
else
 return true;




// Place event code here.
// Use "Add Action" button to add code snippets.

//return $isEditable;;
		}
		return $isEditable;
	}
}
?>
