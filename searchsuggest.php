<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once getabspath('classes/searchclause.php');
add_nocache_headers();

$table = postvalue("table");
$strTableName = GetTableByShort($table);

if (!checkTableName($table))
	exit(0);

require_once("include/".$table."_variables.php");

if(!isLogged())
	return;
if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
	return;


$searchFor = trim( postvalue('searchFor') );
// if nothing to search 
if($searchFor == '')
{
	echo printJSON(array('success' => true, 'result' => '')); 
	return;
}

$_connection = $cman->byTable( $strTableName );

// array of vals
$response = array();
$searchOpt = postvalue("start") ? "Starts with" : "Contains";
$searchField = GoodFieldName(postvalue('searchField'));
$numberOfSuggests = GetGlobalData("searchSuggestsNumber", 10);

$pSet = new ProjectSettings($strTableName, PAGE_SEARCH);

$query = $pSet->getSQLQuery();

if($searchField == "")
	$allSearchFields = $pSet->getGoogleLikeFields();
else	
	// array of fields which were added in wizard for search
	$allSearchFields = $pSet->getAllSearchFields();	
		
require_once getabspath('classes/controls/EditControlsContainer.php');

$detailKeys = array();

$whereClauses = array();
$whereClauses[] = SecuritySQL("Search", $strTableName);

$cipherer = new RunnerCipherer($strTableName);
$controls = new EditControlsContainer(null, $pSet, PAGE_LIST, $cipherer);

if(@$_SESSION[$strTableName."_mastertable"] != "")
{
	$masterWhere = "";	
	$masterTablesInfoArr = $pSet->getMasterTablesArr($strTableName);
	for($i = 0; $i < count($masterTablesInfoArr); $i++) 
	{
		if( $_SESSION[$strTableName."_mastertable"] != $masterTablesInfoArr[$i]['mDataSourceTable'] )
			continue;
		
		$detailKeys = $masterTablesInfoArr[$i]['detailKeys'];
		for($j = 0; $j < count($detailKeys); $j++)
		{
			$mastervalue = $cipherer->MakeDBValue($detailKeys[$j], @$_SESSION[$strTableName."_masterkey".($j + 1)], "", true);
			if($mastervalue == "null")
				$masterWhere .= RunnerPage::_getFieldSQL($detailKeys[$j], $_connection, $pSet)." is NULL ";
			else
				$masterWhere .= RunnerPage::_getFieldSQLDecrypt($detailKeys[$j], $_connection, $pSet, $cipherer)."=".$mastervalue;
		}
		break;		
	}
	$whereClauses[] = $masterWhere;
}

$searchClauseObj = SearchClause::getSearchObject( $strTableName, "", $strTableName, $cipherer );
$searchClauseObj->processFiltersWhere($_connection);

foreach ($searchClauseObj->filteredFields as $filteredField) 
{
	$whereClauses[] = $filteredField["where"];
}

$result = array();

// traversing searchable fields 
foreach($allSearchFields as $f)
{
	// filter fields by type
	$fType = $pSet->getFieldType($f);	
	if( !IsCharType($fType) && !IsNumberType($fType) && !IsGuid($fType)	|| in_array($f, $detailKeys) )
		continue;

	if( $_connection->dbType == nDATABASE_Oracle && IsTextType($fType) )
		continue;
	
	if( $searchField != '' && $searchField != GoodFieldName($f) || !$pSet->checkFieldPermissions($f) )
		continue;
	
	
	$fieldControl = $controls->getControl($f);
	
	$isAggregateField = $pSet->isAggregateField($f);
	$where = $fieldControl->getSuggestWhere($searchOpt, $searchFor, $isAggregateField);
	$having = $fieldControl->getSuggestHaving($searchOpt, $searchFor, $isAggregateField);
		
	if( !strlen($where) && !strlen($having) )
		continue;

	$distinct = "DISTINCT";
	if( $_connection->dbType == nDATABASE_MSSQLServer || $_connection->dbType == nDATABASE_Access )
	{
		if( IsTextType($fType) )
			$distinct = "";
	}
	
	$sql = $query->getSQLComponents();
	$clausesData = $fieldControl->getSelectColumnsAndJoinFromPart( $searchFor, $searchOpt, true );	
	if( 0 == strlen( $clausesData["joinFromPart"] ) ) 
	{
		//	no hassle, just make a subquery

		$subQuery = SQLQuery::buildSQL( $sql, $whereClauses, array(), array( $where ), array( $having ) );
		$strSQL = "SELECT " . $distinct . " st.".$_connection->addFieldWrappers($f)." from (" . $subQuery . ") st";
	}
	else
	{
		//	special case, with lookup wizards and joins
		$sql['from'] .= $clausesData["joinFromPart"];
		$sql['head'] = "SELECT " . $distinct . " " . $clausesData["selectColumns"] . " as " . $_connection->addFieldWrappers("_srchfld_");
		$subQuery = SQLQuery::buildSQL( $sql, $whereClauses, array(), array( $where ), array( $having ) );
		$strSQL = "SELECT " . $_connection->addFieldWrappers("_srchfld_") . " from (" . $subQuery . ") st";
	}
	
	$qResult = $_connection->queryPage( $strSQL, 1,  $numberOfSuggests, true );
	
	// fill $response array with the field's suggest value
	while( ( $row = $qResult->fetchNumeric() ) && count($response) < $numberOfSuggests ) 
	{
		$val = $cipherer->DecryptField($f, $row[0]);
		if(IsGuid($fType))
			$val = substr($val, 1, -1);
		
		// "_" is added to conver number type to string
		$fieldControl->suggestValue("_".$val, $searchFor, $response, $row);
	}
}
$_connection->close();

ksort($response, SORT_STRING);

foreach($response as $value => $realValue)
{
	if( count($result) > $numberOfSuggests ) 
		break;
	
	$strValue = $value[0] == '_' ? substr($value, 1) : $value; // .net compatibility issue
	$strRealValue = $realValue[0] == '_' ? substr($realValue, 1) : $realValue;
	
	$pos = my_stripos($strValue, $searchFor, 0);
	
	if( $pos === FALSE )
	{
		$result[] = array("value" => runner_htmlspecialchars( $strValue ), "realValue" => $strRealValue);
	}
	else
	{
		$highlightedValue = runner_htmlspecialchars( substr($strValue, 0, $pos) )."<b>".runner_htmlspecialchars( substr($strValue, $pos, strlen($searchFor)) )."</b>"
			.runner_htmlspecialchars( substr($strValue, $pos + strlen($searchFor)) );
		
		$result[] = array("value" => $highlightedValue, "realValue" => $strRealValue);
	}
}

$returnJSON = array();
$returnJSON['success'] = true;
$returnJSON['result'] = $result;
echo printJSON($returnJSON);
exit();
?>