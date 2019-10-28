<?php
class eventclass_Dashboard  extends eventsBase
{
	function __construct()
	{
	// fill list of events

//	onscreen events

	}

//	handlers
//	onscreen events

// dashboatd snippets function
function Dashboard_snippet( &$header )
{
	$header = "Total Employees";
$res=DB::query("select count(EmployeeID) as cnt FROM demo_user");
$data = $res->fetchAssoc();
$res = "<div class='info-box'>";
$res.= "<span class='info-img img_bgcolor_red glyphicon glyphicon-star'></span>";
$res.= "<div class='dashtext'>";
//$res.= "<b>Total Employees</b><br>";
$res.= $data["cnt"];
$res.= "</div>";
$res.= "</div>";
echo $res;;
}
function Dashboard_snippet1( &$header )
{
	$header = "Your header here";
echo "Your text here";;
}






}
?>
