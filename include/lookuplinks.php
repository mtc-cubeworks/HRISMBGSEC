<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["emptype"]["demo_user.EmployeeType"]["edit"] = array("table" => "demo_user", "field" => "EmployeeType", "page" => "edit");
	$lookupTableLinks["divisions"]["demo_user.Division"]["edit"] = array("table" => "demo_user", "field" => "Division", "page" => "edit");
	$lookupTableLinks["empstatus"]["demo_user.Status"]["edit"] = array("table" => "demo_user", "field" => "Status", "page" => "edit");
	$lookupTableLinks["department"]["demo_user.Department"]["edit"] = array("table" => "demo_user", "field" => "Department", "page" => "edit");
	$lookupTableLinks["leveldrops"]["demo_user.Level"]["edit"] = array("table" => "demo_user", "field" => "Level", "page" => "edit");
	$lookupTableLinks["logins"]["demo_user.Approvedby"]["edit"] = array("table" => "demo_user", "field" => "Approvedby", "page" => "edit");
	$lookupTableLinks["logins"]["demo_user.Preparedby"]["edit"] = array("table" => "demo_user", "field" => "Preparedby", "page" => "edit");
	$lookupTableLinks["logins"]["demo_user.Checkedby"]["edit"] = array("table" => "demo_user", "field" => "Checkedby", "page" => "edit");
	$lookupTableLinks["demo_user"]["demo_user.Superior"]["edit"] = array("table" => "demo_user", "field" => "Superior", "page" => "edit");
	$lookupTableLinks["positions"]["demo_user.Position"]["edit"] = array("table" => "demo_user", "field" => "Position", "page" => "edit");
	$lookupTableLinks["employername"]["demo_user.Employer"]["edit"] = array("table" => "demo_user", "field" => "Employer", "page" => "edit");
	$lookupTableLinks["banks"]["demo_user.Bank"]["edit"] = array("table" => "demo_user", "field" => "Bank", "page" => "edit");
	$lookupTableLinks["demo_user"]["demo_user.Superior2"]["edit"] = array("table" => "demo_user", "field" => "Superior2", "page" => "edit");
	$lookupTableLinks["demo_user"]["demo_log.EmployeeID"]["edit"] = array("table" => "demo_log", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["logins"]["demo_log.MLogID"]["edit"] = array("table" => "demo_log", "field" => "MLogID", "page" => "edit");
	$lookupTableLinks["clocktypes"]["demo_log.ClockType"]["edit"] = array("table" => "demo_log", "field" => "ClockType", "page" => "edit");
	$lookupTableLinks["holidaytype"]["holidays.HolidayType"]["edit"] = array("table" => "holidays", "field" => "HolidayType", "page" => "edit");
	$lookupTableLinks["divisions"]["holidays.Division"]["edit"] = array("table" => "holidays", "field" => "Division", "page" => "edit");
	$lookupTableLinks["schedtype"]["schedrange.SchedType"]["edit"] = array("table" => "schedrange", "field" => "SchedType", "page" => "edit");
	$lookupTableLinks["shifts"]["schedrange.Shift"]["edit"] = array("table" => "schedrange", "field" => "Shift", "page" => "edit");
	$lookupTableLinks["daysweek"]["schedrange.RestDays"]["edit"] = array("table" => "schedrange", "field" => "RestDays", "page" => "edit");
	$lookupTableLinks["schedby"]["schedrange.SchedBy"]["edit"] = array("table" => "schedrange", "field" => "SchedBy", "page" => "edit");
	$lookupTableLinks["employername"]["schedrange.Employer"]["edit"] = array("table" => "schedrange", "field" => "Employer", "page" => "edit");
	$lookupTableLinks["divisions"]["schedrange.Division"]["edit"] = array("table" => "schedrange", "field" => "Division", "page" => "edit");
	$lookupTableLinks["demo_user"]["schedtab.UserName"]["edit"] = array("table" => "schedtab", "field" => "UserName", "page" => "edit");
	$lookupTableLinks["schedtype"]["indschedule.SchedType"]["edit"] = array("table" => "indschedule", "field" => "SchedType", "page" => "edit");
	$lookupTableLinks["emptype"]["indschedule.WageType"]["edit"] = array("table" => "indschedule", "field" => "WageType", "page" => "edit");
	$lookupTableLinks["shifts"]["indschedule.Shift"]["edit"] = array("table" => "indschedule", "field" => "Shift", "page" => "edit");
	$lookupTableLinks["divisions"]["indschedule.Division"]["edit"] = array("table" => "indschedule", "field" => "Division", "page" => "edit");
	$lookupTableLinks["daysweek"]["indschedule.DayIs"]["edit"] = array("table" => "indschedule", "field" => "DayIs", "page" => "edit");
	$lookupTableLinks["department"]["indschedule.Department"]["edit"] = array("table" => "indschedule", "field" => "Department", "page" => "edit");
	$lookupTableLinks["holidaytype"]["indschedule.HolidayType"]["edit"] = array("table" => "indschedule", "field" => "HolidayType", "page" => "edit");
	$lookupTableLinks["employername"]["indschedule.Employer"]["edit"] = array("table" => "indschedule", "field" => "Employer", "page" => "edit");
	$lookupTableLinks["positions"]["logins.Position"]["edit"] = array("table" => "logins", "field" => "Position", "page" => "edit");
	$lookupTableLinks["demo_user"]["loans.EmployeeID"]["edit"] = array("table" => "loans", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["loandesriptions"]["loans.LoanDescription"]["edit"] = array("table" => "loans", "field" => "LoanDescription", "page" => "edit");
	$lookupTableLinks["paymentperiods"]["loans.PaymentPeriod"]["edit"] = array("table" => "loans", "field" => "PaymentPeriod", "page" => "edit");
	$lookupTableLinks["deductypes"]["loans.DType"]["edit"] = array("table" => "loans", "field" => "DType", "page" => "edit");
	$lookupTableLinks["statpay"]["divisions.StatutoryPayment"]["edit"] = array("table" => "divisions", "field" => "StatutoryPayment", "page" => "edit");
	$lookupTableLinks["employername"]["payroll.Employer"]["edit"] = array("table" => "payroll", "field" => "Employer", "page" => "edit");
	$lookupTableLinks["divisions"]["payroll.Division"]["edit"] = array("table" => "payroll", "field" => "Division", "page" => "edit");
	$lookupTableLinks["emptype"]["payroll.WageType"]["edit"] = array("table" => "payroll", "field" => "WageType", "page" => "edit");
	$lookupTableLinks["emptype"]["payrolltab.WageType"]["edit"] = array("table" => "payrolltab", "field" => "WageType", "page" => "edit");
	$lookupTableLinks["empstatus"]["payrolltab.Status"]["edit"] = array("table" => "payrolltab", "field" => "Status", "page" => "edit");
	$lookupTableLinks["divisions"]["payrolltab.Division"]["edit"] = array("table" => "payrolltab", "field" => "Division", "page" => "edit");
	$lookupTableLinks["employername"]["payrolltab.Employer"]["edit"] = array("table" => "payrolltab", "field" => "Employer", "page" => "edit");
	$lookupTableLinks["positions"]["payrolltab.Position"]["edit"] = array("table" => "payrolltab", "field" => "Position", "page" => "edit");
	$lookupTableLinks["loantypes"]["loandesriptions.LoanType"]["edit"] = array("table" => "loandesriptions", "field" => "LoanType", "page" => "edit");
	$lookupTableLinks["adjustmentdescriptions"]["earningadjustment.AdjustmentDescription"]["edit"] = array("table" => "earningadjustment", "field" => "AdjustmentDescription", "page" => "edit");
	$lookupTableLinks["demo_user"]["earningadjustment.EmployeeID"]["edit"] = array("table" => "earningadjustment", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["paymentperiods"]["earningadjustment.PaymentPeriod"]["edit"] = array("table" => "earningadjustment", "field" => "PaymentPeriod", "page" => "edit");
	$lookupTableLinks["adjtypes"]["adjustmentdescriptions.AdjType"]["edit"] = array("table" => "adjustmentdescriptions", "field" => "AdjType", "page" => "edit");
	$lookupTableLinks["adjustmentdescriptions"]["payrollearnadj.Adjustment"]["edit"] = array("table" => "payrollearnadj", "field" => "Adjustment", "page" => "edit");
	$lookupTableLinks["demo_user"]["payrollearnadj.EmployeeID"]["edit"] = array("table" => "payrollearnadj", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["employername"]["payrollearnadj.Employer"]["edit"] = array("table" => "payrollearnadj", "field" => "Employer", "page" => "edit");
	$lookupTableLinks["divisions"]["payrollearnadj.Division"]["edit"] = array("table" => "payrollearnadj", "field" => "Division", "page" => "edit");
	$lookupTableLinks["emptype"]["payrollearnadj.WageType"]["edit"] = array("table" => "payrollearnadj", "field" => "WageType", "page" => "edit");
	$lookupTableLinks["loandesriptions"]["payrolldeductions.Deduction"]["edit"] = array("table" => "payrolldeductions", "field" => "Deduction", "page" => "edit");
	$lookupTableLinks["demo_user"]["payrolldeductions.EmployeeID"]["edit"] = array("table" => "payrolldeductions", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["employername"]["payrolldeductions.Employer"]["edit"] = array("table" => "payrolldeductions", "field" => "Employer", "page" => "edit");
	$lookupTableLinks["divisions"]["payrolldeductions.Division"]["edit"] = array("table" => "payrolldeductions", "field" => "Division", "page" => "edit");
	$lookupTableLinks["emptype"]["payrolldeductions.WageType"]["edit"] = array("table" => "payrolldeductions", "field" => "WageType", "page" => "edit");
	$lookupTableLinks["otherpayments"]["payrolldeductions.OtherPayment"]["edit"] = array("table" => "payrolldeductions", "field" => "OtherPayment", "page" => "edit");
	$lookupTableLinks["schedtype"]["shifts.SchedType"]["edit"] = array("table" => "shifts", "field" => "SchedType", "page" => "edit");
	$lookupTableLinks["employername"]["dtrrange.Employer"]["edit"] = array("table" => "dtrrange", "field" => "Employer", "page" => "edit");
	$lookupTableLinks["emptype"]["dtrrange.WageType"]["edit"] = array("table" => "dtrrange", "field" => "WageType", "page" => "edit");
	$lookupTableLinks["divisions"]["dtrrange.Division"]["edit"] = array("table" => "dtrrange", "field" => "Division", "page" => "edit");
	$lookupTableLinks["demo_user"]["indleave.EmployeeID"]["edit"] = array("table" => "indleave", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["daylength"]["indleave.NoDays"]["edit"] = array("table" => "indleave", "field" => "NoDays", "page" => "edit");
	$lookupTableLinks["leavetypes"]["indleave.LeaveType"]["edit"] = array("table" => "indleave", "field" => "LeaveType", "page" => "edit");
	$lookupTableLinks["demo_user"]["ileave.EmployeeID"]["edit"] = array("table" => "ileave", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["leavetypes"]["ileave.LeaveType"]["edit"] = array("table" => "ileave", "field" => "LeaveType", "page" => "edit");
	$lookupTableLinks["demo_user"]["leavebalance.EmployeeID"]["edit"] = array("table" => "leavebalance", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["divisions"]["controlin.Division"]["edit"] = array("table" => "controlin", "field" => "Division", "page" => "edit");
	$lookupTableLinks["emptype"]["dt5.WageType"]["edit"] = array("table" => "dt5", "field" => "WageType", "page" => "edit");
	$lookupTableLinks["daysweek"]["dt5.DayIs"]["edit"] = array("table" => "dt5", "field" => "DayIs", "page" => "edit");
	$lookupTableLinks["holidaytype"]["dt5.HolidayType"]["edit"] = array("table" => "dt5", "field" => "HolidayType", "page" => "edit");
	$lookupTableLinks["divisions"]["dt5.Division"]["edit"] = array("table" => "dt5", "field" => "Division", "page" => "edit");
	$lookupTableLinks["department"]["dt5.Department"]["edit"] = array("table" => "dt5", "field" => "Department", "page" => "edit");
	$lookupTableLinks["employername"]["dt5.Employer"]["edit"] = array("table" => "dt5", "field" => "Employer", "page" => "edit");
	$lookupTableLinks["demo_user"]["indovertime.EmployeeID"]["edit"] = array("table" => "indovertime", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["demo_user"]["payrollstatutories.EmployeeID"]["edit"] = array("table" => "payrollstatutories", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["employername"]["payrollstatutories.Employer"]["edit"] = array("table" => "payrollstatutories", "field" => "Employer", "page" => "edit");
	$lookupTableLinks["divisions"]["payrollstatutories.Division"]["edit"] = array("table" => "payrollstatutories", "field" => "Division", "page" => "edit");
	$lookupTableLinks["emptype"]["payrollstatutories.WageType"]["edit"] = array("table" => "payrollstatutories", "field" => "WageType", "page" => "edit");
	$lookupTableLinks["demo_user"]["payrolltax.EmployeeID"]["edit"] = array("table" => "payrolltax", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["employername"]["payrolltax.Employer"]["edit"] = array("table" => "payrolltax", "field" => "Employer", "page" => "edit");
	$lookupTableLinks["divisions"]["payrolltax.Division"]["edit"] = array("table" => "payrolltax", "field" => "Division", "page" => "edit");
	$lookupTableLinks["emptype"]["payrolltax.WageType"]["edit"] = array("table" => "payrolltax", "field" => "WageType", "page" => "edit");
	$lookupTableLinks["empstatus"]["payrollamt3.Status"]["edit"] = array("table" => "payrollamt3", "field" => "Status", "page" => "edit");
	$lookupTableLinks["divisions"]["payrollamt3.Division"]["edit"] = array("table" => "payrollamt3", "field" => "Division", "page" => "edit");
	$lookupTableLinks["emptype"]["payrollamt3.WageType"]["edit"] = array("table" => "payrollamt3", "field" => "WageType", "page" => "edit");
	$lookupTableLinks["adjustmentdescriptions"]["empdeminimis.DeMinimis"]["edit"] = array("table" => "empdeminimis", "field" => "DeMinimis", "page" => "edit");
	$lookupTableLinks["emptype"]["demo_user1.EmployeeType"]["edit"] = array("table" => "demo_user1", "field" => "EmployeeType", "page" => "edit");
	$lookupTableLinks["divisions"]["demo_user1.Division"]["edit"] = array("table" => "demo_user1", "field" => "Division", "page" => "edit");
	$lookupTableLinks["empstatus"]["demo_user1.Status"]["edit"] = array("table" => "demo_user1", "field" => "Status", "page" => "edit");
	$lookupTableLinks["department"]["demo_user1.Department"]["edit"] = array("table" => "demo_user1", "field" => "Department", "page" => "edit");
	$lookupTableLinks["leveldrops"]["demo_user1.Level"]["edit"] = array("table" => "demo_user1", "field" => "Level", "page" => "edit");
	$lookupTableLinks["logins"]["demo_user1.Approvedby"]["edit"] = array("table" => "demo_user1", "field" => "Approvedby", "page" => "edit");
	$lookupTableLinks["logins"]["demo_user1.Preparedby"]["edit"] = array("table" => "demo_user1", "field" => "Preparedby", "page" => "edit");
	$lookupTableLinks["logins"]["demo_user1.Checkedby"]["edit"] = array("table" => "demo_user1", "field" => "Checkedby", "page" => "edit");
	$lookupTableLinks["positions"]["demo_user1.Position"]["edit"] = array("table" => "demo_user1", "field" => "Position", "page" => "edit");
	$lookupTableLinks["demo_user"]["demo_user1.Superior"]["edit"] = array("table" => "demo_user1", "field" => "Superior", "page" => "edit");
	$lookupTableLinks["employername"]["demo_user1.Employer"]["edit"] = array("table" => "demo_user1", "field" => "Employer", "page" => "edit");
	$lookupTableLinks["banks"]["demo_user1.Bank"]["edit"] = array("table" => "demo_user1", "field" => "Bank", "page" => "edit");
	$lookupTableLinks["demo_user"]["demo_user1.Superior2"]["edit"] = array("table" => "demo_user1", "field" => "Superior2", "page" => "edit");
	$lookupTableLinks["divisions"]["emphistory.Division"]["edit"] = array("table" => "emphistory", "field" => "Division", "page" => "edit");
	$lookupTableLinks["department"]["emphistory.Department"]["edit"] = array("table" => "emphistory", "field" => "Department", "page" => "edit");
	$lookupTableLinks["moduletable"]["modulelock.SelectTable"]["edit"] = array("table" => "modulelock", "field" => "SelectTable", "page" => "edit");
	$lookupTableLinks["empstatus"]["payrollamt33.Status"]["edit"] = array("table" => "payrollamt33", "field" => "Status", "page" => "edit");
	$lookupTableLinks["employername"]["payrollamt33.Employer"]["edit"] = array("table" => "payrollamt33", "field" => "Employer", "page" => "edit");
	$lookupTableLinks["divisions"]["payrollamt33.Division"]["edit"] = array("table" => "payrollamt33", "field" => "Division", "page" => "edit");
	$lookupTableLinks["emptype"]["payrollamt33.WageType"]["edit"] = array("table" => "payrollamt33", "field" => "WageType", "page" => "edit");
	$lookupTableLinks["leavetypes"]["leaves1.LeaveType"]["edit"] = array("table" => "leaves1", "field" => "LeaveType", "page" => "edit");
	$lookupTableLinks["demo_user"]["leaves1.EmployeeID"]["edit"] = array("table" => "leaves1", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["logins"]["leaves1.Approvedby"]["edit"] = array("table" => "leaves1", "field" => "Approvedby", "page" => "edit");
	$lookupTableLinks["demo_user"]["leaves1.Superior"]["edit"] = array("table" => "leaves1", "field" => "Superior", "page" => "edit");
	$lookupTableLinks["demo_user"]["leaves1.Superior2"]["edit"] = array("table" => "leaves1", "field" => "Superior2", "page" => "edit");
	$lookupTableLinks["employername"]["ssscontsummary.Employer"]["edit"] = array("table" => "ssscontsummary", "field" => "Employer", "page" => "edit");
	$lookupTableLinks["logins"]["ssscontsummary.PreparedBy"]["edit"] = array("table" => "ssscontsummary", "field" => "PreparedBy", "page" => "edit");
	$lookupTableLinks["leavetypes"]["leaves11.LeaveType"]["edit"] = array("table" => "leaves11", "field" => "LeaveType", "page" => "edit");
	$lookupTableLinks["demo_user"]["leaves11.EmployeeID"]["edit"] = array("table" => "leaves11", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["logins"]["leaves11.Approvedby"]["edit"] = array("table" => "leaves11", "field" => "Approvedby", "page" => "edit");
	$lookupTableLinks["demo_user"]["leaves11.Superior"]["edit"] = array("table" => "leaves11", "field" => "Superior", "page" => "edit");
	$lookupTableLinks["demo_user"]["leaves11.Superior"]["add"] = array("table" => "leaves11", "field" => "Superior", "page" => "add");
	$lookupTableLinks["demo_user"]["leaves11.Superior2"]["edit"] = array("table" => "leaves11", "field" => "Superior2", "page" => "edit");
	$lookupTableLinks["approvalbutton"]["leaves11.1stApproval"]["edit"] = array("table" => "leaves11", "field" => "1stApproval", "page" => "edit");
	$lookupTableLinks["approvalbutton"]["leaves11.2ndApproval"]["edit"] = array("table" => "leaves11", "field" => "2ndApproval", "page" => "edit");
	$lookupTableLinks["leavetypes"]["leavesapp.LeaveType"]["edit"] = array("table" => "leavesapp", "field" => "LeaveType", "page" => "edit");
	$lookupTableLinks["demo_user"]["leavesapp.EmployeeID"]["edit"] = array("table" => "leavesapp", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["logins"]["leavesapp.Approvedby"]["edit"] = array("table" => "leavesapp", "field" => "Approvedby", "page" => "edit");
	$lookupTableLinks["demo_user"]["leavesapp.Superior"]["edit"] = array("table" => "leavesapp", "field" => "Superior", "page" => "edit");
	$lookupTableLinks["demo_user"]["leavesapp.Superior2"]["edit"] = array("table" => "leavesapp", "field" => "Superior2", "page" => "edit");
	$lookupTableLinks["approvalbutton"]["leavesapp.1stApproval"]["edit"] = array("table" => "leavesapp", "field" => "1stApproval", "page" => "edit");
	$lookupTableLinks["approvalbutton"]["leavesapp.2ndApproval"]["edit"] = array("table" => "leavesapp", "field" => "2ndApproval", "page" => "edit");
	$lookupTableLinks["demo_user"]["leavebalance1.EmployeeID"]["edit"] = array("table" => "leavebalance1", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["demo_user"]["indleave1.EmployeeID"]["edit"] = array("table" => "indleave1", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["daylength"]["indleave1.NoDays"]["edit"] = array("table" => "indleave1", "field" => "NoDays", "page" => "edit");
	$lookupTableLinks["leavetypes"]["indleave1.LeaveType"]["edit"] = array("table" => "indleave1", "field" => "LeaveType", "page" => "edit");
	$lookupTableLinks["employername"]["loansreport.Employer"]["edit"] = array("table" => "loansreport", "field" => "Employer", "page" => "edit");
	$lookupTableLinks["loandesriptions"]["loansreport.LoanType"]["edit"] = array("table" => "loansreport", "field" => "LoanType", "page" => "edit");
	$lookupTableLinks["logins"]["loansreport.PreparedBy"]["edit"] = array("table" => "loansreport", "field" => "PreparedBy", "page" => "edit");
	$lookupTableLinks["schedtype"]["empindschedule.SchedType"]["edit"] = array("table" => "empindschedule", "field" => "SchedType", "page" => "edit");
	$lookupTableLinks["shifts"]["empindschedule.Shift"]["edit"] = array("table" => "empindschedule", "field" => "Shift", "page" => "edit");
	$lookupTableLinks["divisions"]["empindschedule.Division"]["edit"] = array("table" => "empindschedule", "field" => "Division", "page" => "edit");
	$lookupTableLinks["daysweek"]["empindschedule.DayIs"]["edit"] = array("table" => "empindschedule", "field" => "DayIs", "page" => "edit");
	$lookupTableLinks["department"]["empindschedule.Department"]["edit"] = array("table" => "empindschedule", "field" => "Department", "page" => "edit");
	$lookupTableLinks["holidaytype"]["empindschedule.HolidayType"]["edit"] = array("table" => "empindschedule", "field" => "HolidayType", "page" => "edit");
	$lookupTableLinks["emptype"]["empindschedule.WageType"]["edit"] = array("table" => "empindschedule", "field" => "WageType", "page" => "edit");
	$lookupTableLinks["schedtype"]["indschedrange.SchedType"]["edit"] = array("table" => "indschedrange", "field" => "SchedType", "page" => "edit");
	$lookupTableLinks["shifts"]["indschedrange.Shift"]["edit"] = array("table" => "indschedrange", "field" => "Shift", "page" => "edit");
	$lookupTableLinks["daysweek"]["indschedrange.RestDays"]["edit"] = array("table" => "indschedrange", "field" => "RestDays", "page" => "edit");
	$lookupTableLinks["demo_user"]["indschedrange.EmployeeID"]["edit"] = array("table" => "indschedrange", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["schedby"]["indschedrange.SchedBy"]["edit"] = array("table" => "indschedrange", "field" => "SchedBy", "page" => "edit");
	$lookupTableLinks["employername"]["monthlyremittax.EmployerID"]["edit"] = array("table" => "monthlyremittax", "field" => "EmployerID", "page" => "edit");
	$lookupTableLinks["withholdingcat"]["monthlyremittax.CategoryWithholdingAgent"]["edit"] = array("table" => "monthlyremittax", "field" => "CategoryWithholdingAgent", "page" => "edit");
	$lookupTableLinks["shifts"]["empdtr.Shift"]["edit"] = array("table" => "empdtr", "field" => "Shift", "page" => "edit");
	$lookupTableLinks["divisions"]["empdtr.Division"]["edit"] = array("table" => "empdtr", "field" => "Division", "page" => "edit");
	$lookupTableLinks["daysweek"]["empdtr.DayIs"]["edit"] = array("table" => "empdtr", "field" => "DayIs", "page" => "edit");
	$lookupTableLinks["department"]["empdtr.Department"]["edit"] = array("table" => "empdtr", "field" => "Department", "page" => "edit");
	$lookupTableLinks["emptype"]["empdtr.WageType"]["edit"] = array("table" => "empdtr", "field" => "WageType", "page" => "edit");
	$lookupTableLinks["positions"]["emplogins.Position"]["edit"] = array("table" => "emplogins", "field" => "Position", "page" => "edit");
	$lookupTableLinks["logins"]["overtimes.Approvedby"]["edit"] = array("table" => "overtimes", "field" => "Approvedby", "page" => "edit");
	$lookupTableLinks["employername"]["overtimes.Employer"]["edit"] = array("table" => "overtimes", "field" => "Employer", "page" => "edit");
	$lookupTableLinks["divisions"]["overtimes.Division"]["edit"] = array("table" => "overtimes", "field" => "Division", "page" => "edit");
	$lookupTableLinks["demo_user"]["overtimetab.UserName"]["edit"] = array("table" => "overtimetab", "field" => "UserName", "page" => "edit");
	$lookupTableLinks["logins"]["overtimefile.Approvedby"]["edit"] = array("table" => "overtimefile", "field" => "Approvedby", "page" => "edit");
	$lookupTableLinks["demo_user"]["overtimefile.EmployeeID"]["edit"] = array("table" => "overtimefile", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["demo_user"]["overtimefile.Superior"]["edit"] = array("table" => "overtimefile", "field" => "Superior", "page" => "edit");
	$lookupTableLinks["demo_user"]["overtimefile.Superior2"]["edit"] = array("table" => "overtimefile", "field" => "Superior2", "page" => "edit");
	$lookupTableLinks["approvalbutton"]["overtimefile.1stApproval"]["edit"] = array("table" => "overtimefile", "field" => "1stApproval", "page" => "edit");
	$lookupTableLinks["approvalbutton"]["overtimefile.2ndApproval"]["edit"] = array("table" => "overtimefile", "field" => "2ndApproval", "page" => "edit");
	$lookupTableLinks["divisionaccess"]["divisionaccess.SelectDivision"]["edit"] = array("table" => "divisionaccess", "field" => "SelectDivision", "page" => "edit");
	$lookupTableLinks["demo_user"]["indovertime1.EmployeeID"]["edit"] = array("table" => "indovertime1", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["employername"]["payrolldiv.Employer"]["edit"] = array("table" => "payrolldiv", "field" => "Employer", "page" => "edit");
	$lookupTableLinks["divisions"]["payrolldiv.Division"]["edit"] = array("table" => "payrolldiv", "field" => "Division", "page" => "edit");
	$lookupTableLinks["emptype"]["payrolldiv.WageType"]["edit"] = array("table" => "payrolldiv", "field" => "WageType", "page" => "edit");
	$lookupTableLinks["shifts"]["addbreaks.shID"]["edit"] = array("table" => "addbreaks", "field" => "shID", "page" => "edit");
	$lookupTableLinks["demo_user"]["demo_logemp.EmployeeID"]["edit"] = array("table" => "demo_logemp", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["logins"]["demo_logemp.MLogID"]["edit"] = array("table" => "demo_logemp", "field" => "MLogID", "page" => "edit");
	$lookupTableLinks["clocktypes"]["demo_logemp.ClockType"]["edit"] = array("table" => "demo_logemp", "field" => "ClockType", "page" => "edit");
	$lookupTableLinks["leavetypes"]["leavesapp2.LeaveType"]["edit"] = array("table" => "leavesapp2", "field" => "LeaveType", "page" => "edit");
	$lookupTableLinks["demo_user"]["leavesapp2.EmployeeID"]["edit"] = array("table" => "leavesapp2", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["logins"]["leavesapp2.Approvedby"]["edit"] = array("table" => "leavesapp2", "field" => "Approvedby", "page" => "edit");
	$lookupTableLinks["demo_user"]["leavesapp2.Superior"]["edit"] = array("table" => "leavesapp2", "field" => "Superior", "page" => "edit");
	$lookupTableLinks["demo_user"]["leavesapp2.Superior2"]["edit"] = array("table" => "leavesapp2", "field" => "Superior2", "page" => "edit");
	$lookupTableLinks["approvalbutton"]["leavesapp2.1stApproval"]["edit"] = array("table" => "leavesapp2", "field" => "1stApproval", "page" => "edit");
	$lookupTableLinks["approvalbutton"]["leavesapp2.2ndApproval"]["edit"] = array("table" => "leavesapp2", "field" => "2ndApproval", "page" => "edit");
	$lookupTableLinks["demo_user"]["thirtax.EmployeeID"]["edit"] = array("table" => "thirtax", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["empstatus"]["thirtax.WageType"]["edit"] = array("table" => "thirtax", "field" => "WageType", "page" => "edit");
	$lookupTableLinks["employername"]["thirtax.Employer"]["edit"] = array("table" => "thirtax", "field" => "Employer", "page" => "edit");
	$lookupTableLinks["divisions"]["thirtax.Division"]["edit"] = array("table" => "thirtax", "field" => "Division", "page" => "edit");
	$lookupTableLinks["demo_user"]["thirtaxsum.EmployeeID"]["edit"] = array("table" => "thirtaxsum", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["employername"]["thirtaxsum.Employer"]["edit"] = array("table" => "thirtaxsum", "field" => "Employer", "page" => "edit");
	$lookupTableLinks["divisions"]["thirtaxsum.Division"]["edit"] = array("table" => "thirtaxsum", "field" => "Division", "page" => "edit");
	$lookupTableLinks["empstatus"]["thirtaxsum.WageType"]["edit"] = array("table" => "thirtaxsum", "field" => "WageType", "page" => "edit");
	$lookupTableLinks["demo_user"]["filelog.EmployeeID"]["edit"] = array("table" => "filelog", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["logins"]["filelog.MLogID"]["edit"] = array("table" => "filelog", "field" => "MLogID", "page" => "edit");
	$lookupTableLinks["clocktypes"]["filelog.ClockType"]["edit"] = array("table" => "filelog", "field" => "ClockType", "page" => "edit");
	$lookupTableLinks["demo_user"]["filelog.CheckedBy"]["edit"] = array("table" => "filelog", "field" => "CheckedBy", "page" => "edit");
	$lookupTableLinks["demo_user"]["filelog.ApprovedBy"]["edit"] = array("table" => "filelog", "field" => "ApprovedBy", "page" => "edit");
	$lookupTableLinks["demo_user"]["filelog.HRApproval"]["edit"] = array("table" => "filelog", "field" => "HRApproval", "page" => "edit");
	$lookupTableLinks["approvalbutton"]["filelog.Checked"]["edit"] = array("table" => "filelog", "field" => "Checked", "page" => "edit");
	$lookupTableLinks["approvalbutton"]["filelog.Approved"]["edit"] = array("table" => "filelog", "field" => "Approved", "page" => "edit");
	$lookupTableLinks["approvalbutton"]["filelog.HRApproved"]["edit"] = array("table" => "filelog", "field" => "HRApproved", "page" => "edit");
	$lookupTableLinks["demo_user"]["filelog1.EmployeeID"]["edit"] = array("table" => "filelog1", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["logins"]["filelog1.MLogID"]["edit"] = array("table" => "filelog1", "field" => "MLogID", "page" => "edit");
	$lookupTableLinks["clocktypes"]["filelog1.ClockType"]["edit"] = array("table" => "filelog1", "field" => "ClockType", "page" => "edit");
	$lookupTableLinks["demo_user"]["filelog1.CheckedBy"]["edit"] = array("table" => "filelog1", "field" => "CheckedBy", "page" => "edit");
	$lookupTableLinks["demo_user"]["filelog1.ApprovedBy"]["edit"] = array("table" => "filelog1", "field" => "ApprovedBy", "page" => "edit");
	$lookupTableLinks["demo_user"]["filelog1.HRApproval"]["edit"] = array("table" => "filelog1", "field" => "HRApproval", "page" => "edit");
	$lookupTableLinks["approvalbutton"]["filelog1.Checked"]["edit"] = array("table" => "filelog1", "field" => "Checked", "page" => "edit");
	$lookupTableLinks["approvalbutton"]["filelog1.Approved"]["edit"] = array("table" => "filelog1", "field" => "Approved", "page" => "edit");
	$lookupTableLinks["approvalbutton"]["filelog1.HRApproved"]["edit"] = array("table" => "filelog1", "field" => "HRApproved", "page" => "edit");
	$lookupTableLinks["demo_user"]["filelog2.EmployeeID"]["edit"] = array("table" => "filelog2", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["logins"]["filelog2.MLogID"]["edit"] = array("table" => "filelog2", "field" => "MLogID", "page" => "edit");
	$lookupTableLinks["clocktypes"]["filelog2.ClockType"]["edit"] = array("table" => "filelog2", "field" => "ClockType", "page" => "edit");
	$lookupTableLinks["demo_user"]["filelog2.CheckedBy"]["edit"] = array("table" => "filelog2", "field" => "CheckedBy", "page" => "edit");
	$lookupTableLinks["demo_user"]["filelog2.ApprovedBy"]["edit"] = array("table" => "filelog2", "field" => "ApprovedBy", "page" => "edit");
	$lookupTableLinks["demo_user"]["filelog2.HRApproval"]["edit"] = array("table" => "filelog2", "field" => "HRApproval", "page" => "edit");
	$lookupTableLinks["approvalbutton"]["filelog2.Checked"]["edit"] = array("table" => "filelog2", "field" => "Checked", "page" => "edit");
	$lookupTableLinks["approvalbutton"]["filelog2.Approved"]["edit"] = array("table" => "filelog2", "field" => "Approved", "page" => "edit");
	$lookupTableLinks["approvalbutton"]["filelog2.HRApproved"]["edit"] = array("table" => "filelog2", "field" => "HRApproved", "page" => "edit");
	$lookupTableLinks["demo_user"]["filelog3.EmployeeID"]["edit"] = array("table" => "filelog3", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["logins"]["filelog3.MLogID"]["edit"] = array("table" => "filelog3", "field" => "MLogID", "page" => "edit");
	$lookupTableLinks["clocktypes"]["filelog3.ClockType"]["edit"] = array("table" => "filelog3", "field" => "ClockType", "page" => "edit");
	$lookupTableLinks["demo_user"]["filelog3.CheckedBy"]["edit"] = array("table" => "filelog3", "field" => "CheckedBy", "page" => "edit");
	$lookupTableLinks["demo_user"]["filelog3.ApprovedBy"]["edit"] = array("table" => "filelog3", "field" => "ApprovedBy", "page" => "edit");
	$lookupTableLinks["demo_user"]["filelog3.HRApproval"]["edit"] = array("table" => "filelog3", "field" => "HRApproval", "page" => "edit");
	$lookupTableLinks["approvalbutton"]["filelog3.Checked"]["edit"] = array("table" => "filelog3", "field" => "Checked", "page" => "edit");
	$lookupTableLinks["approvalbutton"]["filelog3.Approved"]["edit"] = array("table" => "filelog3", "field" => "Approved", "page" => "edit");
	$lookupTableLinks["approvalbutton"]["filelog3.HRApproved"]["edit"] = array("table" => "filelog3", "field" => "HRApproved", "page" => "edit");
	$lookupTableLinks["logins"]["leaveremarks.LogID"]["edit"] = array("table" => "leaveremarks", "field" => "LogID", "page" => "edit");
	$lookupTableLinks["divisions"]["dtrsummary2.Division"]["edit"] = array("table" => "dtrsummary2", "field" => "Division", "page" => "edit");
	$lookupTableLinks["emptype"]["dtrsummary2.WageType"]["edit"] = array("table" => "dtrsummary2", "field" => "WageType", "page" => "edit");
	$lookupTableLinks["employername"]["dtrsummary2.Employer"]["edit"] = array("table" => "dtrsummary2", "field" => "Employer", "page" => "edit");
	$lookupTableLinks["emptype"]["demo_user_open.EmployeeType"]["edit"] = array("table" => "demo_user_open", "field" => "EmployeeType", "page" => "edit");
	$lookupTableLinks["divisions"]["demo_user_open.Division"]["edit"] = array("table" => "demo_user_open", "field" => "Division", "page" => "edit");
	$lookupTableLinks["empstatus"]["demo_user_open.Status"]["edit"] = array("table" => "demo_user_open", "field" => "Status", "page" => "edit");
	$lookupTableLinks["department"]["demo_user_open.Department"]["edit"] = array("table" => "demo_user_open", "field" => "Department", "page" => "edit");
	$lookupTableLinks["leveldrops"]["demo_user_open.Level"]["edit"] = array("table" => "demo_user_open", "field" => "Level", "page" => "edit");
	$lookupTableLinks["logins"]["demo_user_open.Approvedby"]["edit"] = array("table" => "demo_user_open", "field" => "Approvedby", "page" => "edit");
	$lookupTableLinks["logins"]["demo_user_open.Preparedby"]["edit"] = array("table" => "demo_user_open", "field" => "Preparedby", "page" => "edit");
	$lookupTableLinks["logins"]["demo_user_open.Checkedby"]["edit"] = array("table" => "demo_user_open", "field" => "Checkedby", "page" => "edit");
	$lookupTableLinks["demo_user"]["demo_user_open.Superior"]["edit"] = array("table" => "demo_user_open", "field" => "Superior", "page" => "edit");
	$lookupTableLinks["positions"]["demo_user_open.Position"]["edit"] = array("table" => "demo_user_open", "field" => "Position", "page" => "edit");
	$lookupTableLinks["employername"]["demo_user_open.Employer"]["edit"] = array("table" => "demo_user_open", "field" => "Employer", "page" => "edit");
	$lookupTableLinks["banks"]["demo_user_open.Bank"]["edit"] = array("table" => "demo_user_open", "field" => "Bank", "page" => "edit");
	$lookupTableLinks["demo_user"]["demo_user_open.Superior2"]["edit"] = array("table" => "demo_user_open", "field" => "Superior2", "page" => "edit");
	$lookupTableLinks["logins"]["overtimefileapp.Approvedby"]["edit"] = array("table" => "overtimefileapp", "field" => "Approvedby", "page" => "edit");
	$lookupTableLinks["demo_user"]["overtimefileapp.EmployeeID"]["edit"] = array("table" => "overtimefileapp", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["demo_user"]["overtimefileapp.Superior"]["edit"] = array("table" => "overtimefileapp", "field" => "Superior", "page" => "edit");
	$lookupTableLinks["demo_user"]["overtimefileapp.Superior2"]["edit"] = array("table" => "overtimefileapp", "field" => "Superior2", "page" => "edit");
	$lookupTableLinks["approvalbutton"]["overtimefileapp.1stApproval"]["edit"] = array("table" => "overtimefileapp", "field" => "1stApproval", "page" => "edit");
	$lookupTableLinks["approvalbutton"]["overtimefileapp.2ndApproval"]["edit"] = array("table" => "overtimefileapp", "field" => "2ndApproval", "page" => "edit");
	$lookupTableLinks["logins"]["overtimefileapp2.Approvedby"]["edit"] = array("table" => "overtimefileapp2", "field" => "Approvedby", "page" => "edit");
	$lookupTableLinks["demo_user"]["overtimefileapp2.EmployeeID"]["edit"] = array("table" => "overtimefileapp2", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["demo_user"]["overtimefileapp2.Superior"]["edit"] = array("table" => "overtimefileapp2", "field" => "Superior", "page" => "edit");
	$lookupTableLinks["demo_user"]["overtimefileapp2.Superior2"]["edit"] = array("table" => "overtimefileapp2", "field" => "Superior2", "page" => "edit");
	$lookupTableLinks["approvalbutton"]["overtimefileapp2.1stApproval"]["edit"] = array("table" => "overtimefileapp2", "field" => "1stApproval", "page" => "edit");
	$lookupTableLinks["approvalbutton"]["overtimefileapp2.2ndApproval"]["edit"] = array("table" => "overtimefileapp2", "field" => "2ndApproval", "page" => "edit");
	$lookupTableLinks["emptype"]["demo_useremp.EmployeeType"]["edit"] = array("table" => "demo_useremp", "field" => "EmployeeType", "page" => "edit");
	$lookupTableLinks["divisions"]["demo_useremp.Division"]["edit"] = array("table" => "demo_useremp", "field" => "Division", "page" => "edit");
	$lookupTableLinks["empstatus"]["demo_useremp.Status"]["edit"] = array("table" => "demo_useremp", "field" => "Status", "page" => "edit");
	$lookupTableLinks["department"]["demo_useremp.Department"]["edit"] = array("table" => "demo_useremp", "field" => "Department", "page" => "edit");
	$lookupTableLinks["leveldrops"]["demo_useremp.Level"]["edit"] = array("table" => "demo_useremp", "field" => "Level", "page" => "edit");
	$lookupTableLinks["logins"]["demo_useremp.Approvedby"]["edit"] = array("table" => "demo_useremp", "field" => "Approvedby", "page" => "edit");
	$lookupTableLinks["logins"]["demo_useremp.Preparedby"]["edit"] = array("table" => "demo_useremp", "field" => "Preparedby", "page" => "edit");
	$lookupTableLinks["logins"]["demo_useremp.Checkedby"]["edit"] = array("table" => "demo_useremp", "field" => "Checkedby", "page" => "edit");
	$lookupTableLinks["demo_user"]["demo_useremp.Superior"]["edit"] = array("table" => "demo_useremp", "field" => "Superior", "page" => "edit");
	$lookupTableLinks["positions"]["demo_useremp.Position"]["edit"] = array("table" => "demo_useremp", "field" => "Position", "page" => "edit");
	$lookupTableLinks["employername"]["demo_useremp.Employer"]["edit"] = array("table" => "demo_useremp", "field" => "Employer", "page" => "edit");
	$lookupTableLinks["banks"]["demo_useremp.Bank"]["edit"] = array("table" => "demo_useremp", "field" => "Bank", "page" => "edit");
	$lookupTableLinks["demo_user"]["demo_useremp.Superior2"]["edit"] = array("table" => "demo_useremp", "field" => "Superior2", "page" => "edit");
	$lookupTableLinks["emptype"]["payrolltab1.WageType"]["edit"] = array("table" => "payrolltab1", "field" => "WageType", "page" => "edit");
	$lookupTableLinks["empstatus"]["payrolltab1.Status"]["edit"] = array("table" => "payrolltab1", "field" => "Status", "page" => "edit");
	$lookupTableLinks["divisions"]["payrolltab1.Division"]["edit"] = array("table" => "payrolltab1", "field" => "Division", "page" => "edit");
	$lookupTableLinks["employername"]["payrolltab1.Employer"]["edit"] = array("table" => "payrolltab1", "field" => "Employer", "page" => "edit");
	$lookupTableLinks["positions"]["payrolltab1.Position"]["edit"] = array("table" => "payrolltab1", "field" => "Position", "page" => "edit");
	$lookupTableLinks["emptype"]["mycurrentdtr.WageType"]["edit"] = array("table" => "mycurrentdtr", "field" => "WageType", "page" => "edit");
	$lookupTableLinks["daysweek"]["mycurrentdtr.DayIs"]["edit"] = array("table" => "mycurrentdtr", "field" => "DayIs", "page" => "edit");
	$lookupTableLinks["holidaytype"]["mycurrentdtr.HolidayType"]["edit"] = array("table" => "mycurrentdtr", "field" => "HolidayType", "page" => "edit");
	$lookupTableLinks["divisions"]["mycurrentdtr.Division"]["edit"] = array("table" => "mycurrentdtr", "field" => "Division", "page" => "edit");
	$lookupTableLinks["department"]["mycurrentdtr.Department"]["edit"] = array("table" => "mycurrentdtr", "field" => "Department", "page" => "edit");
	$lookupTableLinks["employername"]["mycurrentdtr.Employer"]["edit"] = array("table" => "mycurrentdtr", "field" => "Employer", "page" => "edit");
	$lookupTableLinks["employername"]["dtrrange1.Employer"]["edit"] = array("table" => "dtrrange1", "field" => "Employer", "page" => "edit");
	$lookupTableLinks["emptype"]["dtrrange1.WageType"]["edit"] = array("table" => "dtrrange1", "field" => "WageType", "page" => "edit");
	$lookupTableLinks["divisions"]["dtrrange1.Division"]["edit"] = array("table" => "dtrrange1", "field" => "Division", "page" => "edit");
	$lookupTableLinks["dtrempl"]["dtrrange1.Employee"]["edit"] = array("table" => "dtrrange1", "field" => "Employee", "page" => "edit");
	$lookupTableLinks["dtrempl"]["otndrdglobal1.Employee"]["edit"] = array("table" => "otndrdglobal1", "field" => "Employee", "page" => "edit");
	$lookupTableLinks["demo_user"]["loanbalnew5.EmployeeID"]["edit"] = array("table" => "loanbalnew5", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["deductypes"]["loanbalnew5.DType"]["edit"] = array("table" => "loanbalnew5", "field" => "DType", "page" => "edit");
	$lookupTableLinks["loandesriptions"]["loanbalnew5.LoanDescription"]["edit"] = array("table" => "loanbalnew5", "field" => "LoanDescription", "page" => "edit");
	$lookupTableLinks["paymentperiods"]["loanbalnew5.PaymentPeriod"]["edit"] = array("table" => "loanbalnew5", "field" => "PaymentPeriod", "page" => "edit");
	$lookupTableLinks["loantypes"]["loanbalnew5.LoanType"]["edit"] = array("table" => "loanbalnew5", "field" => "LoanType", "page" => "edit");
	$lookupTableLinks["demo_user"]["loanbalnew51.EmployeeID"]["edit"] = array("table" => "loanbalnew51", "field" => "EmployeeID", "page" => "edit");
	$lookupTableLinks["deductypes"]["loanbalnew51.DType"]["edit"] = array("table" => "loanbalnew51", "field" => "DType", "page" => "edit");
	$lookupTableLinks["loandesriptions"]["loanbalnew51.LoanDescription"]["edit"] = array("table" => "loanbalnew51", "field" => "LoanDescription", "page" => "edit");
	$lookupTableLinks["paymentperiods"]["loanbalnew51.PaymentPeriod"]["edit"] = array("table" => "loanbalnew51", "field" => "PaymentPeriod", "page" => "edit");
	$lookupTableLinks["loantypes"]["loanbalnew51.LoanType"]["edit"] = array("table" => "loanbalnew51", "field" => "LoanType", "page" => "edit");
	$lookupTableLinks["holidaytype"]["holidaysdefault.HolidayType"]["edit"] = array("table" => "holidaysdefault", "field" => "HolidayType", "page" => "edit");
}

?>