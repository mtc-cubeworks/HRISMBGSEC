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
function Dashboard_snippet1( &$header )
{
	$res=DB::query("select count(EmployeeID) as cntemp FROM demo_user WHERE Inactive<>1");
$data = $res->fetchAssoc();
$res = "<div class='info-box'>";
$res.= "<span class='info-img img_bgcolor_blue glyphicon glyphicon-user'></span>";
$res.= "<div class='dashtext'>";
$res.= "<b>Active Employees</b><br>";
$res.= "<div class='dashnumber'>".number_format($data["cntemp"],0)."</div>";
$res.= "</div>";
$res.= "</div>";
echo $res;;
}
function Dashboard_snippet2( &$header )
{
	$res=DB::query("select Sum(NoDays) as cntlv FROM leavesonrange");
$data = $res->fetchAssoc();
$res = "<div class='info-box'>";
$res.= "<span class='info-img img_bgcolor_green glyphicon glyphicon-briefcase'></span>";
$res.= "<div class='dashtext'>";
$res.= "<b>Leaves</b><br>";
$res.= "<a href='/leavesonrange_list.php'><div class='dashnumber'>".number_format($data["cntlv"],0)."</div></a>";
$res.= "</div>";
$res.= "</div>";
echo $res;;
}
function Dashboard_snippet3( &$header )
{
	$res=DB::query("select Count(LateMins) as cntlt FROM latesonrange");
$data = $res->fetchAssoc();
$res = "<div class='info-box'>";
$res.= "<span class='info-img img_bgcolor_orange glyphicon glyphicon-time'></span>";
$res.= "<div class='dashtext'>";
$res.= "<b>Lates</b><br>";
$res.= "<a href='/latesonrange_list.php'><div class='dashnumber'>".number_format($data["cntlt"],0)."</div></a>";
$res.= "</div>";
$res.= "</div>";
echo $res;;
}
function Dashboard_snippet4( &$header )
{
	
$res=DB::query("select Sum(Absent) as cntabs FROM absentonrange");
$data = $res->fetchAssoc();
$res = "<div class='info-box'>";
$res.= "<span class='info-img img_bgcolor_red glyphicon glyphicon-remove-circle'></span>";
$res.= "<div class='dashtext'>";
$res.= "<b>Absent</b><br>";
$res.= "<a href='/absentonrange_list.php'><div class='dashnumber'>".number_format($data["cntabs"],0)."</div></a>";
$res.= "</div>";
$res.= "</div>";
echo $res;;
}
function Dashboard_snippet( &$header )
{
	$res.= "<BR><div class='dashtextdate'>";
$res.= "<div class='todaytext'>".date("l")."</div>";
$res.= "<div class='dashdate'>".date("M d, Y")."</div>";
$res.= "</div>";
echo $res;
;
}






}
?>
