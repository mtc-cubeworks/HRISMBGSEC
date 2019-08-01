<?php
require('fpdf17/fpdf.php');

//db connection
$con = mysqli_connect('localhost','badz','Madzilla101');
mysqli_select_db($con,'payrollflexo');

//get invoices data
$query = mysqli_query($con,"select * from payrollamt33
	
	
	where ToDate = '".$_GET['ps1']."' AND Division = '".$_GET['dv1']."'  AND WageType = '".$_GET['wt1']."' AND Employer = '".$_GET['em1']."'");
	

$pdf = new FPDF('L','mm',array(340,210));

$pdf->AddPage();
$pdf->AliasNbPages();


$qtotal = mysqli_query($con,"select * from payrollsum
	where ToDate = '".$_GET['ps1']."' AND Division = '".$_GET['dv1']."'  AND WageType = '".$_GET['wt1']."' AND Employer = '".$_GET['em1']."'");

while($qt= mysqli_fetch_array($qtotal)){
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,0,$qt['EmployerName'],0,1,'C');


$pdf->SetFont('Arial','',8);
$pdf->Cell(21, 8,'Payroll ID:',0,0, 'L');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(8,8,$qt['PayrollID'],0,0);
$pdf->Cell(146, 8,'PAYROLL SUMMARY',0,1, 'R');
$pdf->SetFont('Arial','',8);
$pdf->Cell(21,0,'Payroll Period:',0,0);
$pdf->SetFont('Arial','B',8);
$ddate1=date_create($qt ['FromDate']);
$ddate2=date_create($qt ['ToDate']);
$pdf->Cell(15,0,date_format($ddate1,"m/d/Y")." - ".date_format($ddate2,"m/d/Y"),0,1);



$pdf->SetFont('Arial','',8);
$pdf->Cell(21, 8,'Division:',0,0, 'L');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(40,8,$qt['FDivision'],0,0);
$pdf->SetFont('Arial','',8);
$pdf->Cell(17, 8,'WageType:',0,0, 'L');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(150,8,$qt['EmployeeType'],0,1);



$pdf->SetXY(10, 28);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(6	,7,'NO.',0,0, 'L');
$pdf->Cell(32	,7,'EMPLOYEE',0,0, 'L');
$pdf->Cell(13	,7,'MONTHLY',0,0,'R');
$pdf->Cell(10	,7,'DAILY',0,0,'R');
$pdf->Cell(10	,7,'WORK',0,0,'R');
$pdf->Cell(12	,7,'REGPAY',0,0,'R');
$pdf->Cell(10	,7,'ABS(d)',0,0,'R');
$pdf->Cell(8	,7,'ABS',0,0,'R');
$pdf->Cell(12	,7,'LATE(m)',0,0,'R');
$pdf->Cell(8	,7,'LATE',0,0,'R');
$pdf->Cell(10	,7,'UT(m)',0,0,'R');
$pdf->Cell(8	,7,'UT',0,0,'R');
$pdf->Cell(8	,7,'RH(h)',0,0,'R');
$pdf->Cell(8	,7,'RH',0,0,'R');
$pdf->Cell(8	,7,'SH(h)',0,0,'R');
$pdf->Cell(8	,7,'SH',0,0,'R');
$pdf->Cell(9	,7,'CH(h)',0,0,'R');
$pdf->Cell(8	,7,'CH',0,0,'R');
$pdf->Cell(8	,7,'OT(h)',0,0,'R');
$pdf->Cell(8	,7,'OT',0,0,'R');
$pdf->Cell(9	,7,'ND(h)',0,0,'R');
$pdf->Cell(8	,7,'ND',0,0,'R');
$pdf->Cell(9	,7,'VL(d)',0,0,'R');
$pdf->Cell(8	,7,'VL',0,0,'R');
$pdf->Cell(9	,7,'SL(d)',0,0,'R');
$pdf->Cell(10	,7,'SL',0,0,'R');
$pdf->Cell(10	,7,'EL(d)',0,0,'R');
$pdf->Cell(9	,7,'EL',0,0,'R');
$pdf->Cell(9	,7,'PL(d)',0,0,'R');
$pdf->Cell(9	,7,'PL',0,0,'R');
$pdf->Cell(12	,7,'Adj/Allow.',0,0,'R');
$pdf->Cell(15	,7,'GROSSPAY',0,1,'R');

$pdf->Line(11, 29, 331, 29);
$pdf->Line(11, 34, 331, 34);

$cnt=1;
while($invoice = mysqli_fetch_array($query )){


$pdf->SetFont('Arial','',6);

$pdf->SetLeftMargin(10);


$pdf->Cell(6,4, $cnt,0,0,'L',0); 
$pdf->Cell(32,4,$invoice['UserName'],0,0,'L');
$pdf->Cell(13,4,number_format($invoice['BasicMonthly'],2),0,0,'R');
$pdf->Cell(10,4,number_format($invoice['BasicDaily'],2),0,0,'R');
$pdf->Cell(10,4,number_format($invoice['DWork'],2),0,0,'R');
$pdf->Cell(12,4,number_format($invoice['RegPay'],2),0,0,'R');
$pdf->Cell(10,4,number_format($invoice['Absent'],2),0,0,'R');
$pdf->Cell(8,4,number_format($invoice['LWOP'],2),0,0,'R');
$pdf->Cell(10,4,number_format($invoice['LateMins'],2),0,0,'R');
$pdf->Cell(10,4,number_format($invoice['Late'],2),0,0,'R');
$pdf->Cell(9,4,number_format($invoice['UndertimeMins'],2),0,0,'R');
$pdf->Cell(9,4,number_format($invoice['UnderTime'],2),0,0,'R');
$pdf->Cell(8,4,number_format($invoice['RHolidayHrs'],2),0,0,'R');
$pdf->Cell(9,4,number_format($invoice['RHoliday'],2),0,0,'R');
$pdf->Cell(8,4,number_format($invoice['SHolidayHrs'],2),0,0,'R');
$pdf->Cell(8,4,number_format($invoice['SHoliday'],2),0,0,'R');
$pdf->Cell(8,4,number_format($invoice['CHolidayHrs'],2),0,0,'R');
$pdf->Cell(8,4,number_format($invoice['CHoliday'],2),0,0,'R');
$pdf->Cell(8,4,number_format($invoice['OTHrs'],2),0,0,'R');
$pdf->Cell(8,4,number_format($invoice['OT'],2),0,0,'R');
$pdf->Cell(9,4,number_format($invoice['TNDHrs'],2),0,0,'R');
$pdf->Cell(9,4,number_format($invoice['TND'],2),0,0,'R');
$pdf->Cell(8,4,number_format($invoice['VLDays'],2),0,0,'R');
$pdf->Cell(9,4,number_format($invoice['VL'],2),0,0,'R');
$pdf->Cell(9,4,number_format($invoice['SLDays'],2),0,0,'R');
$pdf->Cell(10,4,number_format($invoice['SL'],2),0,0,'R');
$pdf->Cell(9,4,number_format($invoice['ELDays'],2),0,0,'R');
$pdf->Cell(9,4,number_format($invoice['EL'],2),0,0,'R');
$pdf->Cell(9,4,number_format($invoice['PLDays'],2),0,0,'R');
$pdf->Cell(8,4,number_format($invoice['PL'],2),0,0,'R');
$pdf->Cell(12,4,number_format($invoice['TotAdj'],2),0,0,'R');
$pdf->Cell(15,4,number_format($invoice['GrossPay'],2),0,1,'R');


$cnt++;

}

$pdf->Cell(0, 1,'______________________________________________________________________________________________________
__________________________________________________________________________________________________________________________
________________________________________________',0,1, 'L');
$pdf->SetLeftMargin(78);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(15,5,number_format($qt['TRegPay'],2),0,0,'R');
$pdf->Cell(18,5,number_format($qt['TAbs'],2),0,0,'R');
$pdf->Cell(20,5,number_format($qt['TLate'],2),0,0,'R');
$pdf->Cell(18,5,number_format($qt['TUT'],2),0,0,'R');
$pdf->Cell(17,5,number_format($qt['TRHol'],2),0,0,'R');
$pdf->Cell(16,5,number_format($qt['TSHol'],2),0,0,'R');
$pdf->Cell(16,5,number_format($qt['TCHol'],2),0,0,'R');
$pdf->Cell(16,5,number_format($qt['TOT'],2),0,0,'R');
$pdf->Cell(18,5,number_format($qt['TTND'],2),0,0,'R');
$pdf->Cell(17,5,number_format($qt['TVL'],2),0,0,'R');
$pdf->Cell(19,5,number_format($qt['TSL'],2),0,0,'R');
$pdf->Cell(18,5,number_format($qt['TEL'],2),0,0,'R');
$pdf->Cell(17,5,number_format($qt['TPL'],2),0,0,'R');
$pdf->Cell(12,5,number_format($qt['TTotAdj'],2),0,0,'R');
$pdf->Cell(15,5,number_format($qt['TGrossPay'],2),0,1,'R');




$pdf->Output();

}
?>