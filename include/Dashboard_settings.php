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
	$fieldLabelsDashboard["English"]["zleavetypes_Chart_LTID"] = "LTID";
	$fieldLabelsDashboard["English"]["zleavetypes_Chart_LeaveType"] = "Leave Type";
	$fieldLabelsDashboard["English"]["zleavetypes_Chart_TotalLeaves"] = "Total Leaves";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDashboard[""] = array();
}

//	search fields
$tdataDashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"zleavetypes Chart", "field"=>"LTID" );
$tdataDashboard[".searchFields"]["zleavetypes_Chart_LTID"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"zleavetypes Chart", "field"=>"LeaveType" );
$tdataDashboard[".searchFields"]["zleavetypes_Chart_LeaveType"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"zleavetypes Chart", "field"=>"TotalLeaves" );
$tdataDashboard[".searchFields"]["zleavetypes_Chart_TotalLeaves"] = $dashField;

// all search fields
$tdataDashboard[".allSearchFields"] = array();
$tdataDashboard[".allSearchFields"][] = "zleavetypes_Chart_LTID";
$tdataDashboard[".allSearchFields"][] = "zleavetypes_Chart_LeaveType";
$tdataDashboard[".allSearchFields"][] = "zleavetypes_Chart_TotalLeaves";

// good like search fields
$tdataDashboard[".googleLikeFields"] = array();
$tdataDashboard[".googleLikeFields"][] = "zleavetypes_Chart_LTID";
$tdataDashboard[".googleLikeFields"][] = "zleavetypes_Chart_LeaveType";
$tdataDashboard[".googleLikeFields"][] = "zleavetypes_Chart_TotalLeaves";

$tdataDashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "zleavetypes_Chart_chart", "table" => "zleavetypes Chart", "type" => 1);
	$dbelement["cellName"] = "cell_2_0";

			$dbelement["width"] = 300;
	

	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "zotdept_Chart_chart", "table" => "zotdept Chart", "type" => 1);
	$dbelement["cellName"] = "cell_2_2";

			$dbelement["width"] = 300;
	

	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "zotdiv_Chart_chart", "table" => "zotdiv Chart", "type" => 1);
	$dbelement["cellName"] = "cell_2_3";

			$dbelement["width"] = 300;
	

	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "zots_Chart_chart", "table" => "zots Chart", "type" => 1);
	$dbelement["cellName"] = "cell_2_1";

			$dbelement["width"] = 300;
	

	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Dashboard_snippet", "table" => "Dashboard", "type" => 7);
	$dbelement["cellName"] = "cell_1_0";

			$dbelement["width"] = 285;
		$dbelement["snippetId"] = "Dashboard_snippet1";


	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Dashboard_snippet1", "table" => "Dashboard", "type" => 7);
	$dbelement["cellName"] = "cell_1_1";

			$dbelement["width"] = 285;
		$dbelement["snippetId"] = "Dashboard_snippet2";


	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Dashboard_snippet2", "table" => "Dashboard", "type" => 7);
	$dbelement["cellName"] = "cell_1_2";

			$dbelement["width"] = 285;
		$dbelement["snippetId"] = "Dashboard_snippet3";


	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Dashboard_snippet3", "table" => "Dashboard", "type" => 7);
	$dbelement["cellName"] = "cell_1_3";

			$dbelement["width"] = 285;
		$dbelement["snippetId"] = "Dashboard_snippet4";


	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "zresigns_Chart_chart", "table" => "zresigns Chart", "type" => 1);
	$dbelement["cellName"] = "cell_3_2";

			$dbelement["width"] = 300;
		$dbelement["height"] = 300;


	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "attrition_Chart_chart", "table" => "attrition Chart", "type" => 1);
	$dbelement["cellName"] = "cell_3_3";

			$dbelement["width"] = 300;
		$dbelement["height"] = 300;


	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "leavestoday_list", "table" => "leavestoday", "type" => 0);
	$dbelement["cellName"] = "cell_3_0";

			$dbelement["width"] = 580;
		$dbelement["height"] = 300;
		$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 1 > 0;
	
	$dbelement["updateSelected"] = 0 > 0;


	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "dashrange_list", "table" => "dashrange", "type" => 0);
	$dbelement["cellName"] = "cell_0_0";

			$dbelement["width"] = 905;
		$dbelement["height"] = 90;
		$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 1 > 0;
	$dbelement["popupView"] = 0 > 0;
	
	$dbelement["updateSelected"] = 0 > 0;


	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Dashboard_snippet4", "table" => "Dashboard", "type" => 7);
	$dbelement["cellName"] = "cell_0_3";

			$dbelement["width"] = 285;
		$dbelement["height"] = 90;
	$dbelement["snippetId"] = "Dashboard_snippet";


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