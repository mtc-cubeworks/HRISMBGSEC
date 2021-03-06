<?php
require('fpdf17/fpdf.php');

//db connection
$con = mysqli_connect('localhost','badz','Madzilla101');
mysqli_select_db($con,'mbgsec');

//get invoices data
$query = mysqli_query($con,"select * from payslipmainq
	
	
	where PtabID = '".$_GET['ps1']."' AND Password = '".$_GET['pw2']."'");
	

$pdf = new FPDF('P','mm',array(210,250));

$invoice = mysqli_fetch_array($query );
$pdf->AddPage();
$pdf->AliasNbPages();
//set font to arial, bold, 14pt

//Cell(width , height , text , border , end line , [align] )
$pdf->SetXY(0, 6);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0, 5,$invoice['Employer'],0,1, 'C');
$pdf->SetXY(0, 11);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(0, 5,'P A Y S L I P',0,1, 'C');


//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',8);
$pdf->SetXY(10, 20);
$pdf->Cell(10	,4,'Name:',0,0);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(190	,4,$invoice['FullName'],0,1);
$pdf->SetXY(150, 20);
$pdf->SetFont('Arial','',7);
$pdf->Cell(20	,4,'PayrollID:',0,0);
$pdf->Cell(15	,4,$invoice['PtabID'],0,1);
$pdf->SetXY(150, 24);
$pdf->Cell(20	,3,'Division:',0,0);
$pdf->Cell(15	,3,$invoice['Division'],0,1);
$pdf->SetXY(10, 24);
$pdf->SetFont('Arial','',7);
$pdf->Cell(24	,4,'BioID:',0,0);
$pdf->Cell(130	,4,$invoice['EmployeeID'],0,1);
$pdf->SetXY(10, 28);
$pdf->Cell(24	,4,'Monthly Rate:',0,0);
$pdf->Cell(130	,4,number_format($invoice['MonthlyRate'],2),0,1);
$pdf->SetXY(10, 32);
$pdf->Cell(24	,4,'Basic Daily Rate:',0,0);
$pdf->Cell(130	,4,number_format($invoice['BasicDailyRate'],2),0,1);

$pdf->SetXY(80, 20);
$pdf->Cell(15	,4,'Wage Type:',0,0);
$pdf->Cell(50	,4,$invoice['WageType'],0,1);
$pdf->SetXY(80, 24);
$pdf->Cell(15	,4,'Status:',0,0);
$pdf->Cell(50	,4,$invoice['Status'],0,1);

//leave balances
$pdf->SetFont('Arial','B',8);
$pdf->SetXY(80, 27);
$pdf->Cell(40	,7,'LEAVE BALANCES:',0,1);
$pdf->SetFont('Arial','',7);
$pdf->SetLeftMargin(80);
$pdf->SetXY(80, 33);
$pdf->Cell(7	,3,'VL:',0,0);
$pdf->Cell(10	,3,number_format($invoice ['VL'],2),0,1);//end of line
$pdf->Cell(7	,3,'SL:',0,0);
$pdf->Cell(10	,3,number_format($invoice ['SL'],2),0,1);//end of line
$pdf->SetXY(100, 33);
$pdf->Cell(7	,3,'EL:',0,0);
$pdf->Cell(10	,3,number_format($invoice ['EL'],2),0,1);//end of line
$pdf->SetXY(100, 36);
$pdf->Cell(7	,3,'PL:',0,0);
$pdf->Cell(10	,3,number_format($invoice ['PL'],2),0,1);//end of line

$pdf->SetXY(150, 27);
$pdf->Cell(20	,4,'Date Printed:',0,0);
$pdf->Cell(15	,4,date("m/d/Y"),0,1);
$pdf->SetXY(150, 31);
$pdf->Cell(20	,4,'Pay Date:',0,0);
$ddate3=date_create($invoice ['PayDate']);
$pdf->Cell(15	,4,date_format($ddate3,"m/d/Y"),0,1);
$pdf->SetXY(150, 35);
$pdf->Cell(20	,4,'Payroll Period:',0,0);
$ddate1=date_create($invoice ['FromDate']);
$ddate2=date_create($invoice ['ToDate']);
$pdf->Cell(15	,4,date_format($ddate1,"m/d/Y")." - ".date_format($ddate2,"m/d/Y"),0,1);

$pdf->Line(11, 40, 200, 40);

$pdf->SetLeftMargin(10);


$pdf->SetFont('Arial','B',8);
$pdf->SetXY(10, 40);
$pdf->Cell(100	,7,'EARNINGS',0,1);//end of line
$pdf->SetFont('Arial','',7);
$pdf->Cell(37	,3,'Regular Pay:',0,0);
$pdf->Cell(10	,3,number_format($invoice['RegularPayT'],2),0,0);
$pdf->Cell(15	,3,number_format($invoice['RegularPay'],2),0,1,'R');
$pdf->Cell(37	,3,'Late (mins.):',0,0);
$pdf->Cell(10	,3,number_format($invoice['LateT'],2),0,0);
$pdf->Cell(15	,3,number_format($invoice['Late'],2),0,1,'R');
$pdf->Cell(37	,3,'UnderTime (mins.):',0,0);
$pdf->Cell(10	,3,number_format($invoice['UndertimeT'],2),0,0);
$pdf->Cell(15	,3,number_format($invoice['Undertime'],2),0,1,'R');
$pdf->Cell(37	,3,'LWOP (days):',0,0);
$pdf->Cell(10	,3,number_format($invoice['LWOPT'],2),0,0);
$pdf->Cell(15	,3,number_format(-1*($invoice['LWOP']),2),0,1,'R');
$pdf->Cell(37	,3,'Reg. OT (hrs):',0,0);
$pdf->Cell(10	,3,number_format($invoice['RegOTT'],2),0,0);
$pdf->Cell(15	,3,number_format($invoice['RegOT'],2),0,1,'R');
$pdf->Cell(37	,3,'RH-OT (hrs):',0,0);
$pdf->Cell(10	,3,number_format($invoice['RHOTT'],2),0,0);
$pdf->Cell(15	,3,number_format($invoice['RHOT'],2),0,1,'R');
$pdf->Cell(37	,3,'SH-OT (hrs):',0,0);
$pdf->Cell(10	,3,number_format($invoice['SHOTT'],2),0,0);
$pdf->Cell(15	,3,number_format($invoice['SHOT'],2),0,1,'R');
$pdf->Cell(37	,3,'DH-OT (hrs):',0,0);
$pdf->Cell(10	,3,number_format($invoice['DHOTT'],2),0,0);
$pdf->Cell(15	,3,number_format($invoice['DHOT'],2),0,1,'R');
$pdf->Cell(37	,3,'RD-OT (hrs):',0,0);
$pdf->Cell(10	,3,number_format($invoice['RDOTT'],2),0,0);
$pdf->Cell(15	,3,number_format($invoice['RDOT'],2),0,1,'R');
$pdf->Cell(37	,3,'RH-RD-OT (hrs):',0,0);
$pdf->Cell(10	,3,number_format($invoice['RHRDOTT'],2),0,0);
$pdf->Cell(15	,3,number_format($invoice['RHRDOT'],2),0,1,'R');
$pdf->Cell(37	,3,'SH-RD-OT (hrs):',0,0);
$pdf->Cell(10	,3,number_format($invoice['SHRDOTT'],2),0,0);
$pdf->Cell(15	,3,number_format($invoice['SHRDOT'],2),0,1,'R');
$pdf->Cell(37	,3,'DH-RD-OT (hrs):',0,0);
$pdf->Cell(10	,3,number_format($invoice['DHRDOTT'],2),0,0);
$pdf->Cell(15	,3,number_format($invoice['DHRDOT'],2),0,1,'R');
$pdf->Cell(37	,3,'TND-OT (hrs):',0,0);
$pdf->Cell(10	,3,number_format($invoice['TNDOTT'],2),0,0);
$pdf->Cell(15	,3,number_format($invoice['TNDOT'],2),0,1,'R');

$pdf->Cell(37	,3,'Reg.Holiday (hrs):',0,0);
$pdf->Cell(10	,3,number_format($invoice['RegHolT'],2),0,0);
$pdf->Cell(15	,3,number_format($invoice['RegHol'],2),0,1,'R');
$pdf->Cell(37	,3,'Sp. Holiday (hrs):',0,0);
$pdf->Cell(10	,3,number_format($invoice['SpHolT'],2),0,0);
$pdf->Cell(15	,3,number_format($invoice['SpHol'],2),0,1,'R');
$pdf->Cell(37	,3,'Db. Holiday (hrs):',0,0);
$pdf->Cell(10	,3,number_format($invoice['DbHolT'],2),0,0);
$pdf->Cell(15	,3,number_format($invoice['DbHol'],2),0,1,'R');
$pdf->Cell(37	,3,'Rest Day (hrs):',0,0);
$pdf->Cell(10	,3,number_format($invoice['RestDayT'],2),0,0);
$pdf->Cell(15	,3,number_format($invoice['RestDay'],2),0,1,'R');
$pdf->Cell(37	,3,'RH-RD (hrs):',0,0);
$pdf->Cell(10	,3,number_format($invoice['RHRDT'],2),0,0);
$pdf->Cell(15	,3,number_format($invoice['RHRD'],2),0,1,'R');
$pdf->Cell(37	,3,'SH-RD (hrs):',0,0);
$pdf->Cell(10	,3,number_format($invoice['SHRDT'],2),0,0);
$pdf->Cell(15	,3,number_format($invoice['SHRD'],2),0,1,'R');
$pdf->Cell(37	,3,'DH-RD (hrs):',0,0);
$pdf->Cell(10	,3,number_format($invoice['DHRDT'],2),0,0);
$pdf->Cell(15	,3,number_format($invoice['DHRD'],2),0,1,'R');
$pdf->Cell(37	,3,'Night Diff (hrs):',0,0);
$pdf->Cell(10	,3,number_format($invoice['NDiffT'],2),0,0);
$pdf->Cell(15	,3,number_format($invoice['NDiff'],2),0,1,'R');
$pdf->Cell(37	,3,'Vacation Leave (days):',0,0);
$pdf->Cell(10	,3,number_format($invoice['VacLeaveT'],2),0,0);
$pdf->Cell(15	,3,number_format($invoice['VacLeave'],2),0,1,'R');
$pdf->Cell(37	,3,'Sick Leave (days):',0,0);
$pdf->Cell(10	,3,number_format($invoice['SicLeaveT'],2),0,0);
$pdf->Cell(15	,3,number_format($invoice['SicLeave'],2),0,1,'R');
$pdf->Cell(37	,3,'Emergency Leave (days):',0,0);
$pdf->Cell(10	,3,number_format($invoice['EmeLeaveT'],2),0,0);
$pdf->Cell(15	,3,number_format($invoice['EmeLeave'],2),0,1,'R');


$pdf->Cell(189	,3,'',0,1);//end of line


//taxable adjustments
$pdf->SetFont('Arial','B',8);
//$pdf->SetXY(80, 40);
$pdf->Cell(40	,7,'TAXABLE ADJUSTMENTS',0,1);


$queryadj = mysqli_query($con,"select * from paydj where ToDate = '".$invoice['ToDate']."' and adjtID =1 and EmployeeID = '".$invoice['EmployeeID']."'");


//display the items

while($adj = mysqli_fetch_array($queryadj )){
	$pdf->SetFont('Arial','',7);
//$pdf->SetLeftMargin($x);
	$pdf->Cell(35	,4,$adj['AdjDescriptions'],0,0);
	$pdf->Cell(27	,4,number_format($adj['Amount'],2),0,1,'R');//end of line
 
}

$pdf->Cell(189	,3,'',0,1);//end of line
//NON-taxable adjustments
$pdf->SetFont('Arial','B',8);
//$pdf->SetXY(80, 40);
$pdf->Cell(40	,7,'NON-TAXABLE ADJUSTMENTS',0,1);


$queryadj = mysqli_query($con,"select * from paydjdem where ToDate = '".$invoice['ToDate']."' and adjtID =2 and EmployeeID = '".$invoice['EmployeeID']."'");


//display the items

while($adj = mysqli_fetch_array($queryadj )){
	$pdf->SetFont('Arial','',7);

//	$pdf->Cell(35	,4,$adj['AdjDescriptions'],0,0); 
//	$pdf->Cell(27	,4,number_format($adj['Amount'],2),0,1,'R');//end of line
 
}

$queryadj2 = mysqli_query($con,"select * from paydj3 where ToDate = '".$invoice['ToDate']."' and adjtID =2 and EmployeeID = '".$invoice['EmployeeID']."'");


//display the items

while($adj2 = mysqli_fetch_array($queryadj2 )){
	$pdf->SetFont('Arial','',7);
//$pdf->SetLeftMargin($x);
	$pdf->Cell(35	,4,$adj2['AdjDescriptions'],0,0);
	$pdf->Cell(27	,4,number_format($adj2['Amount'],2),0,1,'R');//end of line
  
}


$pdf->SetFont('Arial','B',8);
$pdf->setFillColor(230,230,230); 
$pdf->Cell(40	,7,'GROSS PAY: ',0,0,'',1);
$pdf->Cell(22	,7,number_format($invoice['GrossPay'],2),0,1,'R',1);
$pdf->SetFont('Arial','',7);
$pdf->Cell(40	,7,'Taxable: ',0,0);
$pdf->Cell(22	,7,number_format($invoice['Taxable'],2),0,1,'R',0);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(22	,7,'Taxable To-Date: ',0,0);
$pdf->SetFont('Arial','',7);
$pdf->Cell(30	,7,number_format($invoice['TaxableToDate'],2),0,0,'L',0);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(18	,7,'Tax To-Date: ',0,0);
$pdf->SetFont('Arial','',7);
$pdf->Cell(22	,7,number_format($invoice['TaxToDate'],2),0,0,'L',0);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(26	,7,'13th Month To-Date: ',0,0);
$pdf->SetFont('Arial','',7);
$pdf->Cell(30	,7,number_format($invoice['ThirToDate'],2),0,0,'L',0);



//statutories
$pdf->SetFont('Arial','B',8);
$pdf->SetXY(80, 40);
$pdf->Cell(40	,7,'DEDUCTIONS',0,1);
$pdf->SetXY(80, 46);
$pdf->Cell(40	,3,'STATUTORY CONTRIBUTION',0,1);

$querystat = mysqli_query($con,"select * from payrollstatutories where ToDate = '".$invoice['ToDate']."' and EmployeeID = '".$invoice['EmployeeID']."'");


//display the items

while($statu = mysqli_fetch_array($querystat )){
	$pdf->SetFont('Arial','',7);
    $pdf->SetLeftMargin(80);
	$pdf->Cell(189	,2,'',0,1);//end of line
    $pdf->Cell(40	,3,'SSS:',0,0);
	$pdf->Cell(20	,3,number_format($statu ['SSS'],2),0,1,'R');//end of line
	$pdf->Cell(40	,3,'PhilHealth:',0,0);
	$pdf->Cell(20	,3,number_format($statu ['PHIC'],2),0,1,'R');//end of line
	$pdf->Cell(40	,3,'Pag-Ibig:',0,0);
	$pdf->Cell(20	,3,number_format($statu ['PagIbig'],2),0,1,'R');//end of line
 
}


//invoice contents
$pdf->SetFont('Arial','B',8);
$x = 80;
$y = 62;
 
$pdf->SetXY($x, $y);
$pdf->Cell(36	,7,'LOANS',0,0);
$pdf->Cell(10	,7,'BALANCE',0,1,'R');
//$pdf->Cell(20	,7,'AMOUNT',0,1,'R');//end of line

$pdf->SetFont('Arial','',7);

//Numbers are right-aligned so we give 'R' after new line parameter

//items
$query1 = mysqli_query($con,"select * from pededucts where ToDate = '".$invoice['ToDate']."' and EmployeeID = '".$invoice['EmployeeID']."' and LtID = 1");
$queryc = mysqli_query($con,"select * from pededucts where ToDate = '".$invoice['ToDate']."' and EmployeeID = '".$invoice['EmployeeID']."' and LtID = 2");
//$tax = 0; //total tax
//$amount = 0; //total amount

//display the items

while($item = mysqli_fetch_array($query1)){
	
$pdf->SetLeftMargin($x);
	$pdf->Cell(33	,3,$item['LoanDescription'],0,0);
	$pdf->Cell(12	,3,number_format($item['Balance'],2),0,0,'R');
	$pdf->Cell(15	,3,number_format($item['Amount'],2),0,1,'R');//end of lineline
	
	
}
$pdf->SetLeftMargin(80);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(40	,7,'COMPANY DEDUCTIONS',0,1);


$pdf->SetFont('Arial','',7);
while($item = mysqli_fetch_array($queryc)){
	
	
	
	
$pdf->SetLeftMargin($x);
	$pdf->Cell(33	,3,$item['LoanDescription'],0,0);
	$pdf->Cell(12	,3,number_format($item['Balance'],2),0,0,'R');
	$pdf->Cell(15	,3,number_format($item['Amount'],2),0,1,'R');//end of line
	
}

$queryt = mysqli_query($con,"select * from payrolltax where ToDate = '".$invoice['ToDate']."' and EmployeeID = '".$invoice['EmployeeID']."'");
$tax1 = mysqli_fetch_array($queryt);
$pdf->Cell(189	,1,'',0,1);//end of line
$pdf->SetFont('Arial','B',8);
$pdf->Cell(40	,7,'TAX',0,1);
$pdf->SetFont('Arial','',7);
$pdf->Cell(40	,3,'WTax',0,0);
$pdf->Cell(20	,3,number_format($tax1['Tax'],2),0,1,'R');

$pdf->SetFont('Arial','B',8);
$pdf->setFillColor(230,230,230); 
$pdf->Cell(40	,7,'TOTAL DEDUCTIONS: ',0,0,'',1);
$pdf->Cell(20	,7,number_format($invoice['TDeductions'],2),0,1,'R',1);

$pdf->SetFont('Arial','B',8);
$pdf->SetXY(145, 45);
$pdf->setFillColor(230,230,230); 
$pdf->Cell(35	,7,'NET PAY: ',0,0,'',1);
$pdf->Cell(20	,7,number_format($invoice['NetPay'],2),0,1,'R',1);

//$pdf->setFillColor(255,255,255); 
$pdf->Line(145, 75, 200, 75);
$pdf->SetFont('Arial','',7);
$pdf->SetXY(145, 75);
$pdf->Cell(145	,7,'Received by: ',0,1);

$pdf->Line(145, 90, 200, 90);
$pdf->SetFont('Arial','',7);
$pdf->SetXY(145, 90);
$pdf->Cell(145	,7,'Date Received: ',0,0);

//summary





















$pdf->Output();
?>
