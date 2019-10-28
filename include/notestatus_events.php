<?php
class eventclass_notestatus  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["AfterEdit"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		
$nid=$values["NID"];

$nsd = DBLookup("SELECT Max(NStatusDate) FROM notestatus WHERE NID='$nid'");
$maxn = DBLookup("SELECT Max(NSID) FROM notestatus WHERE NStatusDate='$nsd' and NID='$nid'");

$ns = DBLookup("SELECT NoteStatus FROM notestatus WHERE NSID='$maxn' and NID='$nid'");
$nc = DBLookup("SELECT Closed FROM notestatus WHERE NSID='$maxn' and NID='$nid'");

$sqls = "UPDATE notes SET Status='$ns', Closed='$nc' WHERE NID='$nid'";
CustomQuery($sqls);
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		
$nid=$values["NID"];

$nsd = DBLookup("SELECT Max(NStatusDate) FROM notestatus WHERE NID='$nid'");
$maxn = DBLookup("SELECT Max(NSID) FROM notestatus WHERE NStatusDate='$nsd' and NID='$nid'");

$ns = DBLookup("SELECT NoteStatus FROM notestatus WHERE NSID='$maxn' and NID='$nid'");
$nc = DBLookup("SELECT Closed FROM notestatus WHERE NSID='$maxn' and NID='$nid'");

$sqls = "UPDATE notes SET Status='$ns', Closed='$nc' WHERE NID='$nid'";
CustomQuery($sqls);
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
