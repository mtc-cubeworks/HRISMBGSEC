<?php
class eventclass_dtrrange1  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterEdit"]=true;

		$this->events["BeforeShowEdit"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		
//DB::Delete("dloglimit2", "ID>0" );


//$rs = DB::Select("dloglimit", "EmployeeID>0" );

//while( $record = $rs->fetchAssoc() )

//{

//$emp = $record["EmployeeID"];
//$sdat = $record["SDate"];
//$sti = $record["STimeInC"];

//$sql = "INSERT INTO dloglimit2 (EmployeeID, SDate, STimeInC) values ('$emp', '$sdat', '$sti')";

//CustomQuery($sql);

//}
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, &$pageObject)
{

		

$attr1 = $xt->fetchVar("Division_editcontrol");
$attr1 = str_replace(">"," DISABLED=DISABLED>",$attr1);
$xt->assign("Division_editcontrol",$attr1);


$attr2 = $xt->fetchVar("Employer_editcontrol");
$attr2 = str_replace(">"," DISABLED=DISABLED>",$attr2);
$xt->assign("Employer_editcontrol",$attr2);


$attr3 = $xt->fetchVar("WageType_editcontrol");
$attr3 = str_replace(">"," DISABLED=DISABLED>",$attr3);
$xt->assign("WageType_editcontrol",$attr3);
;		
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
