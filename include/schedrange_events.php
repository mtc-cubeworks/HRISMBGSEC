<?php
class eventclass_schedrange  extends eventsBase
{
	function __construct()
	{
	// fill list of events


		$this->events["AfterAdd"]=true;

		$this->events["AfterDelete"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		$sc=$values["ScRID"];
$empr=$values["Employer"];
$dvv=$values["Division"];


global $dal;


$rs = DB::Query("select * from demo_user where Employer='$empr' and Division='$dvv' and Inactive<>1");
 
while( $datax = $rs->fetchAssoc() )
 
{

$emid=$datax["EmployeeID"];
$usern=$datax["user_name"];
$usid=$datax["user_id"];

$sql = "INSERT INTO schedtab (UserID, UserName, EmployeeID, ScRID) values

  ('$usid', '$usern', '$emid', '$sc')";

CustomQuery($sql);

}


header("Location: schedrange_edit.php?editid1=".$values["ScRID"]);
exit();
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record deleted
function AfterDelete($where, &$deleted_values, &$message, &$pageObject)
{

		

$scr=$deleted_values["ScRID"];

$sqldel = "DELETE FROM schedtab WHERE ScRID='$scr'";
CustomQuery($sqldel);

;		
} // function AfterDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
