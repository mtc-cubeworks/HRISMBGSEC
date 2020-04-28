<?php
require('fpdf17/fpdf.php');

//db connection
$con = mysqli_connect('localhost','badz','Madzilla101');
mysqli_select_db($con,'mbgsec');

//get invoices data
$query = mysqli_query($con,"select * from printsummaryf
	
	
	where ToDate = '".$_GET['ps1']."' AND Division = '".$_GET['dv1']."'  AND WageType = '".$_GET['wt1']."' AND Employer = '".$_GET['em1']."'");
	

$pdf = new FPDF('L','mm',array(340,210));

$pdf->AddPage();
$pdf->AliasNbPages();


$qtotal = mysqli_query($con,"select * from paysumround
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
$pdf->Cell(75,8,$qt['FDivision'],0,0);
$pdf->SetFont('Arial','',8);
$pdf->Cell(17, 8,'WageType:',0,0, 'L');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(150,8,$qt['EmployeeType'],0,1);



$pdf->SetXY(10, 28);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(8	,7,'No.',0,0, 'L');
$pdf->Cell(35	,7,'Employee',0,0, 'L');
$pdf->Cell(12	,7,'Rate',0,0,'R');
$pdf->Cell(12	,7,'Days',0,0,'R');
$pdf->Cell(13	,7,'Basic',0,0,'R');
$pdf->Cell(13	,7,'OT',0,0,'R');
$pdf->Cell(13	,7,'OTHrs',0,0,'R');
$pdf->Cell(13	,7,'RHol',0,0,'R');
$pdf->Cell(13	,7,'SHol',0,0,'R');
$pdf->Cell(14	,7,'Allow.',0,0,'R');
$pdf->Cell(14	,7,'N.Shift',0,0,'R');
$pdf->Cell(13	,7,'NDAllow',0,0,'R');
$pdf->Cell(12	,7,'VL',0,0,'R');
$pdf->Cell(12	,7,'SL',0,0,'R');
$pdf->Cell(16	,7,'13thMo',0,0,'R');
$pdf->Cell(14	,7,'Adjmts',0,0,'R');
$pdf->Cell(16	,7,'Deductions',0,0,'R');
$pdf->Cell(14	,7,'NetPay',0,0,'R');
$pdf->Cell(14	,7,'Ag.Shre',0,0,'R');
$pdf->Cell(14	,7,'Ag.Net',0,0,'R');
$pdf->Cell(12	,7,'SSS',0,0,'R');
$pdf->Cell(12   ,7,'PHIC',0,0,'R');
$pdf->Cell(12	,7,'PagIbig',0,1,'R');



$pdf->Line(11, 29, 331, 29);
$pdf->Line(11, 34, 331, 34);

$cnt=1;
while($invoice = mysqli_fetch_array($query )){


$pdf->SetFont('Arial','',7);

$pdf->SetLeftMargin(10);


$pdf->Cell(8,4, $cnt,0,0,'L',0); 
$pdf->Cell(35,4,$invoice['Employee'],0,0,'L');
$pdf->Cell(12,4,number_format($invoice['Rate'],2),0,0,'R');
$pdf->Cell(12,4,number_format($invoice['Days'],2),0,0,'R');
$pdf->Cell(13,4,number_format($invoice['Basic'],2),0,0,'R');
$pdf->Cell(13,4,number_format($invoice['OT'],2),0,0,'R');
$pdf->Cell(13,4,number_format($invoice['OTHrs'],2),0,0,'R');
$pdf->Cell(13,4,number_format($invoice['RHoliday'],2),0,0,'R');
$pdf->Cell(13,4,number_format($invoice['SHoliday'],2),0,0,'R');
$pdf->Cell(14,4,number_format($invoice['Allowance'],2),0,0,'R');
$pdf->Cell(14,4,number_format($invoice['NightDiff'],2),0,0,'R');
$pdf->Cell(13,4,number_format($invoice['NDMealAllowance'],2),0,0,'R');
$pdf->Cell(12,4,number_format($invoice['VL'],2),0,0,'R');
$pdf->Cell(12,4,number_format($invoice['SL'],2),0,0,'R');
$pdf->Cell(16,4,number_format($invoice['13thMOnth'],2),0,0,'R');
$pdf->Cell(14,4,number_format($invoice['TotalAdjustments'],2),0,0,'R');
$pdf->Cell(16,4,number_format($invoice['TotalDeductions'],2),0,0,'R');
$pdf->Cell(14,4,number_format($invoice['NetPay'],2),0,0,'R');
$pdf->Cell(14,4,number_format($invoice['AgentShare'],2),0,0,'R');
$pdf->Cell(14,4,number_format($invoice['AgencyNet'],2),0,0,'R');
$pdf->Cell(12,4,number_format($invoice['SSS'],2),0,0,'R');
$pdf->Cell(12,4,number_format($invoice['PHIC'],2),0,0,'R');
$pdf->Cell(12,4,number_format($invoice['PagIbig'],2),0,1,'R');



$cnt++;

}

$pdf->Cell(0, 3,'___________________________________________________________________________________________________________________________________________
______________________________________________________________________________________________',0,1, 'L');
$pdf->SetLeftMargin(253,8);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(14,5,number_format($qt['TNet'],2),0,0,'R');
$pdf->Cell(14,5,number_format($qt['TAgShare'],2),0,0,'R');
$pdf->Cell(14,5,number_format($qt['TAgNet'],2),0,0,'R');
$pdf->Cell(12,5,number_format($qt['TSSS'],2),0,0,'R');
$pdf->Cell(12,5,number_format($qt['TPHIC'],2),0,0,'R');
$pdf->Cell(12,5,number_format($qt['TPag'],2),0,1,'R');





$pdf->Output();

}
?>