<?php

$dal_info = array();

/**
 * User API function
 * @param String sql
 */
function UsersTableName()
{
	global $cman;
	$connection = $cman->getForLogin();
	return $connection->addTableWrappers("logins");
}

/**
 * User API function
 * It uses the default db connection
 * @param String dalSQL
 */
function CustomQuery($dalSQL)
{
	$connection = getDefaultConnection();
	$result = $connection->query( $dalSQL );
	if($result)
		return $result;
}

/**
 * User API function
 * It uses the default db connection 
 * @param String sql
 */
function DBLookup($sql)
{
	$connection = getDefaultConnection();
	$data = $connection->query( $sql )->fetchAssoc();

	if( $data )
		return reset($data);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $tblpayrollflex_at_localhost__addbreaks;
	var $tblpayrollflex_at_localhost__adjtypes;
	var $tblpayrollflex_at_localhost__adjustmentdescriptions;
	var $tblpayrollflex_at_localhost__annualtaxtab;
	var $tblpayrollflex_at_localhost__approvalbutton;
	var $tblpayrollflex_at_localhost__banks;
	var $tblpayrollflex_at_localhost__clocktypes;
	var $tblpayrollflex_at_localhost__contlo;
	var $tblpayrollflex_at_localhost__controlin;
	var $tblpayrollflex_at_localhost__daylength;
	var $tblpayrollflex_at_localhost__daysweek;
	var $tblpayrollflex_at_localhost__deductypes;
	var $tblpayrollflex_at_localhost__demo_device;
	var $tblpayrollflex_at_localhost__demo_finger;
	var $tblpayrollflex_at_localhost__demo_log;
	var $tblpayrollflex_at_localhost__demo_user;
	var $tblpayrollflex_at_localhost__department;
	var $tblpayrollflex_at_localhost__divisionaccess;
	var $tblpayrollflex_at_localhost__divisions;
	var $tblpayrollflex_at_localhost__dloglimit2;
	var $tblpayrollflex_at_localhost__dt5;
	var $tblpayrollflex_at_localhost__dtrempl;
	var $tblpayrollflex_at_localhost__dtrrange;
	var $tblpayrollflex_at_localhost__dtrsummary2;
	var $tblpayrollflex_at_localhost__dtrtable;
	var $tblpayrollflex_at_localhost__earningadjustment;
	var $tblpayrollflex_at_localhost__empdeminimis;
	var $tblpayrollflex_at_localhost__emphistory;
	var $tblpayrollflex_at_localhost__emplevels;
	var $tblpayrollflex_at_localhost__employername;
	var $tblpayrollflex_at_localhost__empstatus;
	var $tblpayrollflex_at_localhost__emptype;
	var $tblpayrollflex_at_localhost__filelog;
	var $tblpayrollflex_at_localhost__forapp;
	var $tblpayrollflex_at_localhost__holidays;
	var $tblpayrollflex_at_localhost__holidaytype;
	var $tblpayrollflex_at_localhost__ileave;
	var $tblpayrollflex_at_localhost__indbreaks;
	var $tblpayrollflex_at_localhost__indleave;
	var $tblpayrollflex_at_localhost__indovertime;
	var $tblpayrollflex_at_localhost__indschedrange;
	var $tblpayrollflex_at_localhost__indschedule;
	var $tblpayrollflex_at_localhost__latepenalty;
	var $tblpayrollflex_at_localhost__leavebalance;
	var $tblpayrollflex_at_localhost__leaveremarks;
	var $tblpayrollflex_at_localhost__leaves;
	var $tblpayrollflex_at_localhost__leavetypes;
	var $tblpayrollflex_at_localhost__leveldrops;
	var $tblpayrollflex_at_localhost__loanbalance3;
	var $tblpayrollflex_at_localhost__loanbalnew5;
	var $tblpayrollflex_at_localhost__loandesriptions;
	var $tblpayrollflex_at_localhost__loans;
	var $tblpayrollflex_at_localhost__loansreport;
	var $tblpayrollflex_at_localhost__loantypes;
	var $tblpayrollflex_at_localhost__logins;
	var $tblpayrollflex_at_localhost__logo;
	var $tblpayrollflex_at_localhost__magroups;
	var $tblpayrollflex_at_localhost__mdgroups;
	var $tblpayrollflex_at_localhost__modulelock;
	var $tblpayrollflex_at_localhost__moduletable;
	var $tblpayrollflex_at_localhost__monthlyremittax;
	var $tblpayrollflex_at_localhost__nightshiftallowance;
	var $tblpayrollflex_at_localhost__otherpayments;
	var $tblpayrollflex_at_localhost__otndrdglobal;
	var $tblpayrollflex_at_localhost__overtimefile;
	var $tblpayrollflex_at_localhost__overtimes;
	var $tblpayrollflex_at_localhost__overtimetab;
	var $tblpayrollflex_at_localhost__pagibigtable;
	var $tblpayrollflex_at_localhost__paymentperiods;
	var $tblpayrollflex_at_localhost__payroll;
	var $tblpayrollflex_at_localhost__payrollamt3;
	var $tblpayrollflex_at_localhost__payrollamt33;
	var $tblpayrollflex_at_localhost__payrolldeductions;
	var $tblpayrollflex_at_localhost__payrolldiv;
	var $tblpayrollflex_at_localhost__payrollearnadj;
	var $tblpayrollflex_at_localhost__payrollflex1_uggroups;
	var $tblpayrollflex_at_localhost__payrollflex1_ugmembers;
	var $tblpayrollflex_at_localhost__payrollflex1_ugrights;
	var $tblpayrollflex_at_localhost__payrollstatutories;
	var $tblpayrollflex_at_localhost__payrolltab;
	var $tblpayrollflex_at_localhost__payrolltax;
	var $tblpayrollflex_at_localhost__periods;
	var $tblpayrollflex_at_localhost__philhealthtable;
	var $tblpayrollflex_at_localhost__positions;
	var $tblpayrollflex_at_localhost__pprint;
	var $tblpayrollflex_at_localhost__removedata;
	var $tblpayrollflex_at_localhost__schedby;
	var $tblpayrollflex_at_localhost__schedrange;
	var $tblpayrollflex_at_localhost__schedtab;
	var $tblpayrollflex_at_localhost__schedtype;
	var $tblpayrollflex_at_localhost__shifts;
	var $tblpayrollflex_at_localhost__ssscontsummary;
	var $tblpayrollflex_at_localhost__ssstable;
	var $tblpayrollflex_at_localhost__standardsetup;
	var $tblpayrollflex_at_localhost__statpay;
	var $tblpayrollflex_at_localhost__statutorylock;
	var $tblpayrollflex_at_localhost__thirtax;
	var $tblpayrollflex_at_localhost__thirtaxsum;
	var $tblpayrollflex_at_localhost__userinfo;
	var $tblpayrollflex_at_localhost__withholdingcat;
	var $lstTables;
	var $Table = array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
		$this->lstTables[] = array("name" => "addbreaks", "varname" => "payrollflex_at_localhost__addbreaks", "altvarname" => "addbreaks", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "adjtypes", "varname" => "payrollflex_at_localhost__adjtypes", "altvarname" => "adjtypes", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "adjustmentdescriptions", "varname" => "payrollflex_at_localhost__adjustmentdescriptions", "altvarname" => "adjustmentdescriptions", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "annualtaxtab", "varname" => "payrollflex_at_localhost__annualtaxtab", "altvarname" => "annualtaxtab", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "approvalbutton", "varname" => "payrollflex_at_localhost__approvalbutton", "altvarname" => "approvalbutton", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "banks", "varname" => "payrollflex_at_localhost__banks", "altvarname" => "banks", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "clocktypes", "varname" => "payrollflex_at_localhost__clocktypes", "altvarname" => "clocktypes", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "contlo", "varname" => "payrollflex_at_localhost__contlo", "altvarname" => "contlo", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "controlin", "varname" => "payrollflex_at_localhost__controlin", "altvarname" => "controlin", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "daylength", "varname" => "payrollflex_at_localhost__daylength", "altvarname" => "daylength", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "daysweek", "varname" => "payrollflex_at_localhost__daysweek", "altvarname" => "daysweek", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "deductypes", "varname" => "payrollflex_at_localhost__deductypes", "altvarname" => "deductypes", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "demo_device", "varname" => "payrollflex_at_localhost__demo_device", "altvarname" => "demo_device", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "demo_finger", "varname" => "payrollflex_at_localhost__demo_finger", "altvarname" => "demo_finger", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "demo_log", "varname" => "payrollflex_at_localhost__demo_log", "altvarname" => "demo_log", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "demo_user", "varname" => "payrollflex_at_localhost__demo_user", "altvarname" => "demo_user", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "department", "varname" => "payrollflex_at_localhost__department", "altvarname" => "department", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "divisionaccess", "varname" => "payrollflex_at_localhost__divisionaccess", "altvarname" => "divisionaccess", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "divisions", "varname" => "payrollflex_at_localhost__divisions", "altvarname" => "divisions", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "dloglimit2", "varname" => "payrollflex_at_localhost__dloglimit2", "altvarname" => "dloglimit2", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "dt5", "varname" => "payrollflex_at_localhost__dt5", "altvarname" => "dt5", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "dtrempl", "varname" => "payrollflex_at_localhost__dtrempl", "altvarname" => "dtrempl", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "dtrrange", "varname" => "payrollflex_at_localhost__dtrrange", "altvarname" => "dtrrange", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "dtrsummary2", "varname" => "payrollflex_at_localhost__dtrsummary2", "altvarname" => "dtrsummary2", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "dtrtable", "varname" => "payrollflex_at_localhost__dtrtable", "altvarname" => "dtrtable", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "earningadjustment", "varname" => "payrollflex_at_localhost__earningadjustment", "altvarname" => "earningadjustment", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "empdeminimis", "varname" => "payrollflex_at_localhost__empdeminimis", "altvarname" => "empdeminimis", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "emphistory", "varname" => "payrollflex_at_localhost__emphistory", "altvarname" => "emphistory", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "emplevels", "varname" => "payrollflex_at_localhost__emplevels", "altvarname" => "emplevels", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "employername", "varname" => "payrollflex_at_localhost__employername", "altvarname" => "employername", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "empstatus", "varname" => "payrollflex_at_localhost__empstatus", "altvarname" => "empstatus", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "emptype", "varname" => "payrollflex_at_localhost__emptype", "altvarname" => "emptype", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "filelog", "varname" => "payrollflex_at_localhost__filelog", "altvarname" => "filelog", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "forapp", "varname" => "payrollflex_at_localhost__forapp", "altvarname" => "forapp", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "holidays", "varname" => "payrollflex_at_localhost__holidays", "altvarname" => "holidays", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "holidaytype", "varname" => "payrollflex_at_localhost__holidaytype", "altvarname" => "holidaytype", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "ileave", "varname" => "payrollflex_at_localhost__ileave", "altvarname" => "ileave", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "indbreaks", "varname" => "payrollflex_at_localhost__indbreaks", "altvarname" => "indbreaks", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "indleave", "varname" => "payrollflex_at_localhost__indleave", "altvarname" => "indleave", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "indovertime", "varname" => "payrollflex_at_localhost__indovertime", "altvarname" => "indovertime", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "indschedrange", "varname" => "payrollflex_at_localhost__indschedrange", "altvarname" => "indschedrange", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "indschedule", "varname" => "payrollflex_at_localhost__indschedule", "altvarname" => "indschedule", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "latepenalty", "varname" => "payrollflex_at_localhost__latepenalty", "altvarname" => "latepenalty", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "leavebalance", "varname" => "payrollflex_at_localhost__leavebalance", "altvarname" => "leavebalance", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "leaveremarks", "varname" => "payrollflex_at_localhost__leaveremarks", "altvarname" => "leaveremarks", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "leaves", "varname" => "payrollflex_at_localhost__leaves", "altvarname" => "leaves", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "leavetypes", "varname" => "payrollflex_at_localhost__leavetypes", "altvarname" => "leavetypes", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "leveldrops", "varname" => "payrollflex_at_localhost__leveldrops", "altvarname" => "leveldrops", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "loanbalance3", "varname" => "payrollflex_at_localhost__loanbalance3", "altvarname" => "loanbalance3", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "loanbalnew5", "varname" => "payrollflex_at_localhost__loanbalnew5", "altvarname" => "loanbalnew5", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "loandesriptions", "varname" => "payrollflex_at_localhost__loandesriptions", "altvarname" => "loandesriptions", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "loans", "varname" => "payrollflex_at_localhost__loans", "altvarname" => "loans", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "loansreport", "varname" => "payrollflex_at_localhost__loansreport", "altvarname" => "loansreport", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "loantypes", "varname" => "payrollflex_at_localhost__loantypes", "altvarname" => "loantypes", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "logins", "varname" => "payrollflex_at_localhost__logins", "altvarname" => "logins", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "logo", "varname" => "payrollflex_at_localhost__logo", "altvarname" => "logo", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "magroups", "varname" => "payrollflex_at_localhost__magroups", "altvarname" => "magroups", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "mdgroups", "varname" => "payrollflex_at_localhost__mdgroups", "altvarname" => "mdgroups", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "modulelock", "varname" => "payrollflex_at_localhost__modulelock", "altvarname" => "modulelock", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "moduletable", "varname" => "payrollflex_at_localhost__moduletable", "altvarname" => "moduletable", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "monthlyremittax", "varname" => "payrollflex_at_localhost__monthlyremittax", "altvarname" => "monthlyremittax", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "nightshiftallowance", "varname" => "payrollflex_at_localhost__nightshiftallowance", "altvarname" => "nightshiftallowance", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "otherpayments", "varname" => "payrollflex_at_localhost__otherpayments", "altvarname" => "otherpayments", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "otndrdglobal", "varname" => "payrollflex_at_localhost__otndrdglobal", "altvarname" => "otndrdglobal", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "overtimefile", "varname" => "payrollflex_at_localhost__overtimefile", "altvarname" => "overtimefile", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "overtimes", "varname" => "payrollflex_at_localhost__overtimes", "altvarname" => "overtimes", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "overtimetab", "varname" => "payrollflex_at_localhost__overtimetab", "altvarname" => "overtimetab", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "pagibigtable", "varname" => "payrollflex_at_localhost__pagibigtable", "altvarname" => "pagibigtable", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "paymentperiods", "varname" => "payrollflex_at_localhost__paymentperiods", "altvarname" => "paymentperiods", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "payroll", "varname" => "payrollflex_at_localhost__payroll", "altvarname" => "payroll", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "payrollamt3", "varname" => "payrollflex_at_localhost__payrollamt3", "altvarname" => "payrollamt3", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "payrollamt33", "varname" => "payrollflex_at_localhost__payrollamt33", "altvarname" => "payrollamt33", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "payrolldeductions", "varname" => "payrollflex_at_localhost__payrolldeductions", "altvarname" => "payrolldeductions", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "payrolldiv", "varname" => "payrollflex_at_localhost__payrolldiv", "altvarname" => "payrolldiv", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "payrollearnadj", "varname" => "payrollflex_at_localhost__payrollearnadj", "altvarname" => "payrollearnadj", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "payrollflex1_uggroups", "varname" => "payrollflex_at_localhost__payrollflex1_uggroups", "altvarname" => "payrollflex1_uggroups", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "payrollflex1_ugmembers", "varname" => "payrollflex_at_localhost__payrollflex1_ugmembers", "altvarname" => "payrollflex1_ugmembers", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "payrollflex1_ugrights", "varname" => "payrollflex_at_localhost__payrollflex1_ugrights", "altvarname" => "payrollflex1_ugrights", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "payrollstatutories", "varname" => "payrollflex_at_localhost__payrollstatutories", "altvarname" => "payrollstatutories", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "payrolltab", "varname" => "payrollflex_at_localhost__payrolltab", "altvarname" => "payrolltab", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "payrolltax", "varname" => "payrollflex_at_localhost__payrolltax", "altvarname" => "payrolltax", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "periods", "varname" => "payrollflex_at_localhost__periods", "altvarname" => "periods", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "philhealthtable", "varname" => "payrollflex_at_localhost__philhealthtable", "altvarname" => "philhealthtable", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "positions", "varname" => "payrollflex_at_localhost__positions", "altvarname" => "positions", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "pprint", "varname" => "payrollflex_at_localhost__pprint", "altvarname" => "pprint", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "removedata", "varname" => "payrollflex_at_localhost__removedata", "altvarname" => "removedata", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "schedby", "varname" => "payrollflex_at_localhost__schedby", "altvarname" => "schedby", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "schedrange", "varname" => "payrollflex_at_localhost__schedrange", "altvarname" => "schedrange", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "schedtab", "varname" => "payrollflex_at_localhost__schedtab", "altvarname" => "schedtab", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "schedtype", "varname" => "payrollflex_at_localhost__schedtype", "altvarname" => "schedtype", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "shifts", "varname" => "payrollflex_at_localhost__shifts", "altvarname" => "shifts", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "ssscontsummary", "varname" => "payrollflex_at_localhost__ssscontsummary", "altvarname" => "ssscontsummary", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "ssstable", "varname" => "payrollflex_at_localhost__ssstable", "altvarname" => "ssstable", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "standardsetup", "varname" => "payrollflex_at_localhost__standardsetup", "altvarname" => "standardsetup", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "statpay", "varname" => "payrollflex_at_localhost__statpay", "altvarname" => "statpay", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "statutorylock", "varname" => "payrollflex_at_localhost__statutorylock", "altvarname" => "statutorylock", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "thirtax", "varname" => "payrollflex_at_localhost__thirtax", "altvarname" => "thirtax", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "thirtaxsum", "varname" => "payrollflex_at_localhost__thirtaxsum", "altvarname" => "thirtaxsum", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "userinfo", "varname" => "payrollflex_at_localhost__userinfo", "altvarname" => "userinfo", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
		$this->lstTables[] = array("name" => "withholdingcat", "varname" => "payrollflex_at_localhost__withholdingcat", "altvarname" => "withholdingcat", "connId" => "payrollflex_at_localhost", "schema" => "", "connName" => "payrollflex at localhost");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable, $schema = "", $connName = "")
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]) &&
				( schema == "" || strtoupper($schema) == strtoupper($tbl["schema"]) ) &&
				($connName == "" || strtoupper($connName) == strtoupper($tbl["connName"]) ) )
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	
	function CreateClass(&$tbl)
	{
		if($this->{"tbl".$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".($tbl["varname"]).".php"));
//	create class and object

		$classname="class_".$tbl["varname"];
		$str = "class ".$classname." extends tDALTable  {";
		foreach($dal_info[$tbl["varname"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		
		$tableName = $tbl["name"];
		if( $tbl["schema"] )
			$tableName = $tbl["schema"] . "." . $tbl["name"];
		$str.=' function __construct()
			{
				$this->m_TableName = \''.escapesq( $tableName ).'\';
				$this->infoKey = \'' . $tbl["varname"] . '\';
				$this->setConnection(\''. $tbl["connId"] .'\');
			}
		};';
		eval($str);
		$this->{"tbl".$tbl["varname"]} = new $classname;
		$this->{$tbl["altvarname"]} = $this->{"tbl".$tbl["varname"]};
		$this->Table[$tbl["name"]]=&$this->{"tbl".$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
 * Data Access Layer table class.
 */ 
class tDALTable
{
	var $m_TableName;
	var $infoKey;
	var $Param = array();
	var $Value = array();
	/**
	 * @type Connection
	 */
	var $_connection;
	
	/**
	 * Set the connection property
	 * @param String connId
	 */
	function setConnection( $connId )
	{
		global $cman;
		$this->_connection = $cman->byId( $connId );
	}
	
	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if( !array_key_exists($this->infoKey, $dal_info) || !is_array($dal_info[ $this->infoKey ]) )
			return array();
		
		$ret = array();
		foreach($dal_info[ $this->infoKey ] as $fname=>$f)
		{
			if( @$f["key"] )
				$ret[] = $fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys( $dal_info[ $this->infoKey ] );
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		
		if( !array_key_exists( $field, $dal_info[ $this->infoKey ]) )
			return 200;
			
		return $dal_info[ $this->infoKey ][ $field ]["type"];
	}
	
	/**
	 *
	 */
	function PrepareValue($value, $type)
	{
		if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( $this->_connection->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";
					
				return "?";
			}
			
			if( $this->_connection->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}
	
		if( IsDateFieldType($type) )
		{
			if( !$value )
				return "null";
			else
				$this->_connection->addDateQuotes( $value );
		}
		
		if( NeedQuotes($type) )
			return $this->_connection->prepareString( $value );

		return 0 + $value;
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return $this->_connection->addTableWrappers( $this->m_TableName );
	} 

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected function Execute_Query($blobs, $dalSQL, $tableinfo)
	{		
		$blobTypes = array();
		if( $this->_connection->dbType == nDATABASE_Informix )
		{		
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		$this->_connection->execWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $dal_info;
		
		$insertFields = "";
		$insertValues = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		$blobs = array();
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Value[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Value as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$insertFields.= $this->_connection->addFieldWrappers( $fieldname ).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				
				if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
				{
					if( IsBinaryType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
						
					if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
				}
				break;
			}
		}
		//	prepare and exec SQL
		if( $insertFields != "" && $insertValues != "" )		
		{
			$insertFields = substr($insertFields, 0, -1);
			$insertValues = substr($insertValues, 0, -1);
			$dalSQL = "insert into ".$this->_connection->addTableWrappers( $this->m_TableName )." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}
		//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName );
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere = "", $orderby = "")
	{
		if ($swhere)
			$swhere = " where ".$swhere;
			
		if ($orderby)
			$orderby = " order by ".$orderby;
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$swhere.$orderby;
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $dal_info;
		
		$deleteFields = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Param[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$deleteFields.= $this->_connection->addFieldWrappers( $fieldname )."=". $this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields, 0, -5);
			$dalSQL = "delete from ".$this->_connection->addTableWrappers( $this->m_TableName )." where ".$deleteFields;
			$this->_connection->exec( $dalSQL );
		}
	
		//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		global $dal_info;
		
		$this->Value = array();
		$this->Param = array();
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $dal_info;
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			if( $fld["key"] )
				$command.= '$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			if( !$fld["key"] && !array_key_exists( strtoupper($fieldname), array_change_key_case($this->Param, CASE_UPPER) ) )
			{
				foreach($this->Value as $field => $value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateValue.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . ", ";
					
					if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
					{
						if( IsBinaryType( $fld["type"] ) )
							$blobs[ $fieldname ] = $value;
							
						if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )	
							$blobs[ $fieldname ] = $value;		
					}
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateParam.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
					break;
				}
			}
		}

		//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam, 0, -5);
		if ($updateValue)
			$updateValue = substr($updateValue, 0, -2);
			
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".$this->_connection->addTableWrappers( $this->m_TableName )." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}

		//	cleanup
		$this->Reset();
	}
	
	/**
	 * Select one or more records matching the condition
	 */
	function FetchByID()
	{
		global $dal_info;
		$tableinfo = &$dal_info[ $this->infoKey ];

		$dal_where = "";
		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$dal_where.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where, 0, -5);
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$dal_where;
		return $this->_connection->query( $dalSQL );
	}
}

function cutprefix($table)
{
	$pos = strpos($table,".");
	if( $pos === false )
		return $table;
		
	return substr($table, $pos + 1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>