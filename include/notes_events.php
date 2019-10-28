<?php
class eventclass_notes  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeMoveNextList"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, &$pageObject)
{

		

if ($data["NotifyDaysLeft"]>0 and $data["Closed"]!=1)  

 $record["NotifyDaysLeft_css"].='background:#c42e05; color:#ffffff; font-weight:Bold';




if ($data["DaysLeft"]<(-30)and $data["DaysLeft"]!=Null and $data["Closed"]!=1)  

  $record["DaysLeft_css"].='background:#15a019; color:#ffffff; font-weight:Bold';

if ($data["DaysLeft"]<(-15) and $data["DaysLeft"]>(-31) and $data["Closed"]!=1)  

  $record["DaysLeft_css"].='background:#ffae13; color:#000000; font-weight:Bold'; 

if ($data["DaysLeft"]>(-16))  

 $record["DaysLeft_css"].='background:#c42e05; color:#ffffff; font-weight:Bold';


;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
