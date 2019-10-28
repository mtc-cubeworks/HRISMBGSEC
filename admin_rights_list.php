<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/admin_rights_variables.php");

if( !Security::processAdminPageSecurity( false ) )
	return;


$tables = array();
$pageMask = array();
$table = "demo_device";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("demo_device", " " . "Device");
$table = "demo_user";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("demo_user", " " . "Employees");
$table = "demo_finger";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("demo_finger", " " . "Finger");
$table = "demo_log";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("demo_log", " " . "Log");
$table = "holidays";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("holidays", " " . "Holidays");
$table = "standardsetup";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("standardsetup", " " . "Standard Setup");
$table = "schedrange";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("schedrange", " " . "Schedule Range");
$table = "schedtab";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("schedtab", " " . "Sched Employees");
$table = "indschedule";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("indschedule", " " . "DTR Schedule");
$table = "schedtype";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("schedtype", " " . "Schedule  Types");
$table = "holidaytype";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("holidaytype", " " . "Holiday Types");
$table = "emptype";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("emptype", " " . "Wage Type");
$table = "leavetypes";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("leavetypes", " " . "Leave Types");
$table = "logins";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("logins", " " . "Logins");
$table = "loans";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("loans", " " . "Loans and Deductions Setup");
$table = "divisions";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("divisions", " " . "Divisions");
$table = "department";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("department", " " . "Department");
$table = "empstatus";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("empstatus", " " . "Employee Status");
$table = "payroll";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("payroll", " " . "Payroll");
$table = "payrolltab";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("payrolltab", " " . "Payroll Table");
$table = "ssstable";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("ssstable", " " . "SSS Table");
$table = "philhealthtable";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("philhealthtable", " " . "Philhealth Table");
$table = "loantypes";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("loantypes", " " . "Loan or Deduction Types");
$table = "loandesriptions";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("loandesriptions", " " . "Loan or Deduction Descriptions");
$table = "earningadjustment";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("earningadjustment", " " . "Recurring Adjustment Setup");
$table = "adjustmentdescriptions";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("adjustmentdescriptions", " " . "Adjustment Descriptions");
$table = "adjtypes";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("adjtypes", " " . "Adjustment Types");
$table = "payrollearnadj";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("payrollearnadj", " " . "Earning Adjustments");
$table = "payrolldeductions";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("payrolldeductions", " " . "Deductions");
$table = "paymentperiods";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("paymentperiods", " " . "Payment Periods");
$table = "daysweek";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("daysweek", " " . "Daysweek");
$table = "shifts";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("shifts", " " . "Shifts");
$table = "dtrrange";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("dtrrange", " " . "Process DTR");
$table = "indleave";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("indleave", " " . "Individual leave");
$table = "ileave";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("ileave", " " . "Leave Summary");
$table = "daylength";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("daylength", " " . "Daylength");
$table = "leavebalance";
$mask="";
		$mask .= "E";
		$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("leavebalance", " " . "Leave Balance");
$table = "indschedule1";
$mask="";
		$mask .= "E";
		$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("indschedule1", " " . "OT-ND-RD Single Approval");
$table = "controlin";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("controlin", " " . "Control In");
$table = "dt5";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("dt5", " " . "Current DTR Detail");
$table = "indovertime";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("indovertime", " " . "Individual Overtime");
$table = "forapp";
$mask="";
				$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("forapp", " " . "Forapp");
$table = "payrollstatutories";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("payrollstatutories", " " . "Statutories");
$table = "payrolltax";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("payrolltax", " " . "Tax");
$table = "payrollamt3";
$mask="";
				$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("payrollamt3", " " . "DTR");
$table = "empdeminimis";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("empdeminimis", " " . "Employee De Minimis");
$table = "emplevels";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("emplevels", " " . "Employee Levels");
$table = "demo_user1";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("demo_user1", " " . "Employees Approval");
$table = "leveldrops";
$mask="";
	$mask .= "A";
		
$pageMask[$table] = $mask;
$tables[$table] = array("leveldrops", " " . "Leveldrops");
$table = "latepenalty";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("latepenalty", " " . "Late Penalty");
$table = "nightshiftallowance";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("nightshiftallowance", " " . "Night Shift Allowance");
$table = "emphistory";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("emphistory", " " . "History");
$table = "modulelock";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("modulelock", " " . "Modulelock");
$table = "moduletable";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("moduletable", " " . "Moduletable");
$table = "dloglimit2";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("dloglimit2", " " . "Dloglimit2");
$table = "indschedule11";
$mask="";
		$mask .= "E";
		$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("indschedule11", " " . "Indschedule11");
$table = "positions";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("positions", " " . "Positions");
$table = "employername";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("employername", " " . "Employer");
$table = "pagibigtable";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("pagibigtable", " " . "Pag-ibig Table");
$table = "pprint";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("pprint", " " . "Pprint");
$table = "statutorylock";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("statutorylock", " " . "Statutory Button Lock");
$table = "payroll21";
$mask="";
		$mask .= "E";
		$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("payroll21", " " . "Print Summary 2");
$table = "payrollamt33";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("payrollamt33", " " . "Payroll Summary");
$table = "leaves1";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("leaves1", " " . "Leaves Entry");
$table = "ssscontsummary";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("ssscontsummary", " " . "Contribution Summary");
$table = "leaves11";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("leaves11", " " . "File Leave");
$table = "leavesapp";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("leavesapp", " " . "Leaves Approval (Supervisor)");
$table = "leavebalance1";
$mask="";
		$mask .= "E";
		$mask .= "S";
$mask .= "P";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("leavebalance1", " " . "My Leave Balances");
$table = "indleave1";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("indleave1", " " . "My Approved Leaves");
$table = "loansreport";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("loansreport", " " . "Loan Summary");
$table = "contlo";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("contlo", " " . "Contribution and Loans Report");
$table = "statpay";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("statpay", " " . "Statutory Deduction Period");
$table = "annualtaxtab";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("annualtaxtab", " " . "Annual Tax Table");
$table = "indschedrange";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("indschedrange", " " . "Create Schedule");
$table = "monthlyremittax";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("monthlyremittax", " " . "Monthly Remittance Return of Income Tax Withheld");
$table = "withholdingcat";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("withholdingcat", " " . "Withholding Category");
$table = "banks";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("banks", " " . "Banks");
$table = "empdtr";
$mask="";
				$mask .= "S";
$mask .= "P";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("empdtr", " " . "My Uploaded DTR");
$table = "emplogins";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("emplogins", " " . "My Login");
$table = "removedata";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("removedata", " " . "Removedata");
$table = "schedby";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("schedby", " " . "Sched By");
$table = "overtimes";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("overtimes", " " . "Overtime Entry");
$table = "overtimetab";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("overtimetab", " " . "Overtimetab");
$table = "overtimefile";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("overtimefile", " " . "File Overtime");
$table = "divisionaccess";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("divisionaccess", " " . "Division Access");
$table = "indovertime1";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("indovertime1", " " . "My Approved Overtime");
$table = "payrolldiv";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("payrolldiv", " " . "Payroll Prints");
$table = "logo";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("logo", " " . "Logo");
$table = "addbreaks";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("addbreaks", " " . "Addbreaks");
$table = "indbreaks";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("indbreaks", " " . "Breaks");
$table = "dtrtable";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("dtrtable", " " . "Dtrtable");
$table = "periods";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("periods", " " . "Periods");
$table = "clocktypes";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("clocktypes", " " . "Clock Types");
$table = "demo_logemp";
$mask="";
				$mask .= "S";
$mask .= "P";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("demo_logemp", " " . "My DTR Logs");
$table = "userinfo";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("userinfo", " " . "User Info");
$table = "leavesapp2";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("leavesapp2", " " . "Leaves Approval (Manager)");
$table = "thirtax";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("thirtax", " " . "13th Month and Tax");
$table = "thirtaxsum";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("thirtaxsum", " " . "13th Month and Tax To-Date");
$table = "filelog";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("filelog", " " . "File Log");
$table = "filelog1";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("filelog1", " " . "Filelog Approval (Supervisor)");
$table = "filelog2";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("filelog2", " " . "Filelog Approval (Manager)");
$table = "filelog3";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("filelog3", " " . "Filelog HR Approval");
$table = "leaveremarks";
$mask="";
	$mask .= "A";
		$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("leaveremarks", " " . "Leave Remarks");
$table = "dtrsummary2";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("dtrsummary2", " " . "DTR Summary");
$table = "demo_user_open";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("demo_user_open", " " . "Employee Admin");
$table = "overtimefileapp";
$mask="";
		$mask .= "E";
		$mask .= "S";
$mask .= "P";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("overtimefileapp", " " . "Overtime Approval (Supervisor)");
$table = "overtimefileapp2";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("overtimefileapp2", " " . "Overtime Approval (Manager)");
$table = "demo_useremp";
$mask="";
				$mask .= "S";
$mask .= "P";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("demo_useremp", " " . "My Personal Data");
$table = "leaves";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("leaves", " " . "Leaves");
$table = "approvalbutton";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("approvalbutton", " " . "Approval Selection");
$table = "otherpayments";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("otherpayments", " " . "Other Payment Method");
$table = "payrolltab1";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("payrolltab1", " " . "My Payslip");
$table = "mycurrentdtr";
$mask="";
				$mask .= "S";
$mask .= "P";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("mycurrentdtr", " " . "My Current DTR");
$table = "otndrdglobal";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("otndrdglobal", " " . "OT-ND-RD Approval");
$table = "dtrrange1";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("dtrrange1", " " . "Update Employee DTR");
$table = "dtrempl";
$mask="";
			
$pageMask[$table] = $mask;
$tables[$table] = array("dtrempl", " " . "Dtrempl");
$table = "otndrdglobal1";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("otndrdglobal1", " " . "Update Employee OT-ND-RD");
$table = "deductypes";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("deductypes", " " . "Deduction Category");
$table = "magroups";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("magroups", " " . "Monthly Adjustment Groups");
$table = "mdgroups";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("mdgroups", " " . "Monthly Deduction Groups");
$table = "loanbalnew5";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("loanbalnew5", " " . "Loan & Deduction Balances");
$table = "loanbalnew51";
$mask="";
				$mask .= "S";
$mask .= "P";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("loanbalnew51", " " . "My Loan & Deduction Balance");
$table = "holidaysdefault";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("holidaysdefault", " " . "Holiday Default");
$table = "holidayupdate";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("holidayupdate", " " . "Holiday Override");
$table = "indscheduleemp";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("indscheduleemp", " " . "Uploaded Schedule");
$table = "notes";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("notes", " " . "Notes");
$table = "notetypes";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("notetypes", " " . "Note Types");
$table = "notestatus";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("notestatus", " " . "Note Status");
$table = "notestatuses";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("notestatuses", " " . "Note Statuses");




$layout = new TLayout("admin_rights_list_bootstrap3", "Metro1DeliciousLavender1", "MobileDeliciousLavender1");
$layout->version = 3;
	$layout->bootstrapTheme = "default";
		$layout->customCssPageName = "_admin_rights_list";
$layout->blocks["left"] = array();
$layout->containers["logo"] = array();
$layout->container_properties["logo"] = array(  );
$layout->containers["logo"][] = array("name"=>"logo",
	"block"=>"logo_block", "substyle"=>1  );

$layout->skins["logo"] = "";

$layout->blocks["left"][] = "logo";
$layout->containers["hdr"] = array();
$layout->container_properties["hdr"] = array(  );
$layout->containers["hdr"][] = array("name"=>"bsnavbarcollapse",
	"block"=>"collapse_block", "substyle"=>1  );

$layout->skins["hdr"] = "";

$layout->blocks["left"][] = "hdr";
$layout->containers["sidemenu"] = array();
$layout->container_properties["sidemenu"] = array(  );
$layout->containers["sidemenu"][] = array("name"=>"vmenu",
	"block"=>"menu_block", "substyle"=>1  );

$layout->skins["sidemenu"] = "";

$layout->blocks["left"][] = "sidemenu";
$layout->skins["left"] = "";

$layout->blocks["left"][] = "left";
$layout->blocks["top"] = array();
$layout->containers["menu"] = array();
$layout->container_properties["menu"] = array(  );
$layout->containers["menu"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"bc" );
$layout->containers["bc"] = array();
$layout->container_properties["bc"] = array(  );
$layout->containers["bc"][] = array("name"=>"breadcrumbs",
	"block"=>"breadcrumbs", "substyle"=>1  );

$layout->skins["bc"] = "";


$layout->containers["menu"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"menu_1" );
$layout->containers["menu_1"] = array();
$layout->container_properties["menu_1"] = array(  );
$layout->containers["menu_1"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"more" );
$layout->containers["more"] = array();
$layout->container_properties["more"] = array(  );
$layout->containers["more"][] = array("name"=>"morebutton",
	"block"=>"more_list", "substyle"=>1  );

$layout->containers["more"][] = array("name"=>"loggedas",
	"block"=>"security_block", "substyle"=>1  );

$layout->skins["more"] = "";


$layout->containers["menu_1"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"more_1" );
$layout->containers["more_1"] = array();
$layout->container_properties["more_1"] = array(  );
$layout->containers["more_1"][] = array("name"=>"search",
	"block"=>"searchform_block", "substyle"=>1  );

$layout->skins["more_1"] = "";


$layout->skins["menu_1"] = "";


$layout->skins["menu"] = "";

$layout->blocks["top"][] = "menu";
$layout->blocks["topmiddle"] = array();
$layout->containers["messagerow"] = array();
$layout->container_properties["messagerow"] = array(  );
$layout->containers["messagerow"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"message" );
$layout->containers["message"] = array();
$layout->container_properties["message"] = array(  );
$layout->containers["message"][] = array("name"=>"message",
	"block"=>"message_block", "substyle"=>1  );

$layout->skins["message"] = "";


$layout->skins["messagerow"] = "";

$layout->blocks["topmiddle"][] = "messagerow";
$layout->containers["ugcontrols"] = array();
$layout->container_properties["ugcontrols"] = array(  );
$layout->containers["ugcontrols"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"save" );
$layout->containers["save"] = array();
$layout->container_properties["save"] = array(  );
$layout->containers["save"][] = array("name"=>"ugbuttons",
	"block"=>"", "substyle"=>1  );

$layout->skins["save"] = "";


$layout->containers["ugcontrols"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"filter" );
$layout->containers["filter"] = array();
$layout->container_properties["filter"] = array(  );
$layout->containers["filter"][] = array("name"=>"ugrightbuttons",
	"block"=>"savebuttons_block", "substyle"=>1  );

$layout->skins["filter"] = "";


$layout->skins["ugcontrols"] = "";

$layout->blocks["topmiddle"][] = "ugcontrols";
$layout->containers["grcontrols"] = array();
$layout->container_properties["grcontrols"] = array(  );
$layout->containers["grcontrols"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"groupcontrols" );
$layout->containers["groupcontrols"] = array();
$layout->container_properties["groupcontrols"] = array(  );
$layout->containers["groupcontrols"][] = array("name"=>"bsugrights_groupbuttons",
	"block"=>"", "substyle"=>1  );

$layout->skins["groupcontrols"] = "";


$layout->skins["grcontrols"] = "";

$layout->blocks["topmiddle"][] = "grcontrols";
$layout->containers["uggroups"] = array();
$layout->container_properties["uggroups"] = array(  );
$layout->containers["uggroups"][] = array("name"=>"bsugrightsgroups",
	"block"=>"", "substyle"=>1  );

$layout->skins["uggroups"] = "";

$layout->blocks["topmiddle"][] = "uggroups";
$layout->containers["permgrid"] = array();
$layout->container_properties["permgrid"] = array(  );
$layout->containers["permgrid"][] = array("name"=>"ugrightsblock",
	"block"=>"", "substyle"=>1  );

$layout->skins["permgrid"] = "";

$layout->blocks["topmiddle"][] = "permgrid";
$page_layouts["admin_rights_list"] = $layout;




require_once('include/xtempl.php');
require_once('classes/listpage.php');
require_once('classes/rightspage.php');

$xt = new Xtempl();

$options = array();
$options["pageType"] = PAGE_LIST;
$options["id"] = postvalue("id") ? postvalue("id") : 1;
$options["mode"] = RIGHTS_PAGE;
$options['xt'] = &$xt;


$options["tables"] = $tables;
$options["pageMasks"] = $pageMask;

$pageObject = ListPage::createListPage($strTableName, $options);

if( postvalue("a") == "saveRights" )
{
	$modifiedRights = my_json_decode(postvalue('values'));
	$pageObject->saveRights($modifiedRights);
	return;
}

 
// add buttons if exist

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();
	


?>
