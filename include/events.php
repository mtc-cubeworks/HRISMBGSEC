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



//	onscreen events


		$this->events["IsRecordEditable"]["indschedule"] = true;
		$this->events["IsRecordEditable"]["payroll"] = true;
		$this->events["IsRecordEditable"]["payrolltab"] = true;
		$this->events["IsRecordEditable"]["payroll21"] = true;
		$this->events["IsRecordEditable"]["leaves11"] = true;
		$this->events["IsRecordEditable"]["empindschedule"] = true;
		$this->events["IsRecordEditable"]["empdtr"] = true;
		$this->events["IsRecordEditable"]["overtimefile"] = true;
		$this->events["IsRecordEditable"]["payrolldiv"] = true;

		}

//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, &$pageObject)
{

		  $_SESSION["loginID"] = $data["LogID"];
  $_SESSION["sect"] = $data["Section"];
;		
} // function AfterSuccessfulLogin

				
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
				
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events

	function IsRecordEditable($values, $isEditable, $table = "")
	{
		global $strTableName;
		if($table == "")
			$table = $strTableName;
		if($table == "indschedule")
		{
			


//$lk=$values["Locked"];



//if ($lk == 1)
// return false;
//else
 return true;;
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
		if($table == "empindschedule")
		{
			


//$lk=$values["Locked"];



//if ($lk == 1)
// return false;
//else
 return true;;
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
		return $isEditable;
	}
}
?>
