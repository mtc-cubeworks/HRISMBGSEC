<?php
class eventclass_logo  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeEdit"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		


// get information about uploaded files
$fileArray = my_json_decode($values["Logo"]);
 
// rename files
for($i = 0; $i < count($fileArray); $i++)
{
  $fileName = $fileArray[$i]["name"];
  $newFileName = "files/logo.gif";
   rename($fileName, getabspath($newFileName));
  $fileArray[$i]["name"] = $newFileName;
}
 
// update values of the field that stores file names
$values["Logo"] = my_json_encode($fileArray);


return true;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
