<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

$shortTableName = postvalue("shortTName");
require_once("include/".$shortTableName."_variables.php");

$field = postvalue("field");


if( $strTableName != "logins" )
{
	if( !isLogged() ) 
		return;
		
	if( !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Edit") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add") 
		&& !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search") )
	{
		return;
	}
} else {
	$checkField = true;
	if($field == "UserName")
		$checkField	= false;
	if($field == "Password")
		$checkField	= false;
	if( $checkField )
	{
		if( !isLogged() ) 
			return;
		if( !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Edit") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add")
			&& !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search")) 
		{
			return;
		}
	}
}

$pageType = postvalue('pageType');
$cipherer = new RunnerCipherer( $strTableName );
$pSet = new ProjectSettings( $strTableName, $pageType );

include_once getabspath("classes/controls/EditControlsContainer.php");
$editControls = new EditControlsContainer( null, $pSet, $pageType, $cipherer );
$control = $editControls->getControl( $field );


$contextParams = array();
$contextParams["data"] = my_json_decode( postvalue('data') );

$masterTable = postvalue('masterTable');
if ( $masterTable != "" && isset($_SESSION[ $masterTable . "_masterRecordData" ]) )
{
	$masterData = $_SESSION[ $masterTable . "_masterRecordData" ];

	$masterControlsData = my_json_decode( postvalue('masterData') );
	foreach( $masterControlsData as $mField => $mValue )
	{
		$masterData[ $mField ] = $mValue;
	}	
	
	$contextParams["masterData"] = $masterData;
}

RunnerContext::push( new RunnerContextItem( CONTEXT_ROW, $contextParams ) );


$parentCtrlsData = my_json_decode( postvalue('parentCtrlsData') );
$isExistParent = postvalue('isExistParent');
$mode = intval( postvalue('mode') );

$respObj = array( 'success' => true, 'data' => $control->getLookupContentToReload( $isExistParent === '1', $mode, $parentCtrlsData ) );
echo printJSON( $respObj );

RunnerContext::pop();
exit();
?>