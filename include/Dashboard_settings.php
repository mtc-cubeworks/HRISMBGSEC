<?php
require_once(getabspath("classes/cipherer.php"));



$tdataDashboard = array();
$tdataDashboard[".ShortName"] = "Dashboard";

//	field labels
$fieldLabelsDashboard = array();
$pageTitlesDashboard = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDashboard["English"] = array();
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDashboard[""] = array();
}

//	search fields
$tdataDashboard[".searchFields"] = array();

// all search fields
$tdataDashboard[".allSearchFields"] = array();

// good like search fields
$tdataDashboard[".googleLikeFields"] = array();

$tdataDashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "Dashboard_snippet", "table" => "Dashboard", "type" => 7);
	$dbelement["cellName"] = "cell_0_0";

				$dbelement["snippetId"] = "Dashboard_snippet";


	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Dashboard_snippet1", "table" => "Dashboard", "type" => 7);
	$dbelement["cellName"] = "cell_0_1";

				$dbelement["snippetId"] = "Dashboard_snippet1";


	$tdataDashboard[".dashElements"][] = $dbelement;

$tdataDashboard[".shortTableName"] = "Dashboard";
$tdataDashboard[".entityType"] = 4;




include_once(getabspath("include/Dashboard_events.php"));
$tableEvents["Dashboard"] = new eventclass_Dashboard;
$tdataDashboard[".hasEvents"] = true;


$tdataDashboard[".tableType"] = "dashboard";


																																																																																									
$tdataDashboard[".addPageEvents"] = false;

$tables_data["Dashboard"]=&$tdataDashboard;
$field_labels["Dashboard"] = &$fieldLabelsDashboard;
$page_titles["Dashboard"] = &$pageTitlesDashboard;

?>