<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 


$shortTableName = postvalue("shortTName");
if( !checkTableName( $shortTableName ) )
	exit(0);
	
require_once("include/".$shortTableName."_variables.php");

$mainField = postvalue('mainField');
$linkFieldVal = postvalue('linkFieldVal');

if( $strTableName != "logins" )
{
	if( !isLogged() )  
		return;	
	
	if( !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"], "Edit") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"], "Add") 
		&& !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"], "Search") )
	{
		return;
	}
}
else 
{
	$checkResult = true;
	if( $mainField == "UserName" )
		$checkResult = false;
	if( $mainField == "Password" )
		$checkResult = false;
	
	if( $checkResult )
	{
		if( !isLogged() ) 
			return;
			
		if( !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"], "Edit") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"], "Add") 
			&& !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"], "Search") )
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
$control = $editControls->getControl( $mainField );


$contextParams = array();
$contextParams["data"] = my_json_decode( postvalue('data') );

$masterTable = postvalue('masterTable');
if ( $masterTable != "" && isset($_SESSION[ $masterTable . "_masterRecordData" ]) )
	$contextParams["masterData"] = $_SESSION[ $masterTable . "_masterRecordData" ];

RunnerContext::push( new RunnerContextItem( CONTEXT_ROW, $contextParams ) );
	
echo printJSON( array( 'success'=> true, 'data' => $control->getAutoFillData( $linkFieldVal ) ) );

RunnerContext::pop();
exit();
?>