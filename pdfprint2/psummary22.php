<?php
require('fpdf17/fpdf.php');

//db connection
$con = mysqli_connect('localhost','badz','Madzilla101');
mysqli_select_db($con,'mbgsec');

//get invoices data
$query = mysqli_query($con,"select * from payrollamt35
	
	
	where ToDate = '".$_GET['ps1']."' AND Division = '".$_GET['dv1']."'  AND WageType = '".$_GET['wt1']."' AND Employer = '".$_GET['em1']."'");
	

$pdf = new FPDF('L','mm',array(340,220));

$pdf->AddPage();
$pdf->AliasNbPages();


$qtotal = mysqli_query($con,"select * from payrollamt35sum
	where ToDate = '".$_GET['ps1']."' AND Division = '".$_GET['dv1']."'  AND WageType = '".$_GET['wt1']."' AND Employer = '".$_GET['em1']."'");

while($qt= mysqli_fetch_array($qtotal)){
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,0,$qt['EmployerName'],0,1,'C');


$pdf->SetFont('Arial','',8);
$pdf->Cell(21, 8,'Payroll ID:',0,0, 'L');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(8,8,$qt['PayrollID'],0,0);
$pdf->Cell(159, 8,'PAYROLL OTHER DEDUCTIONS SUMMARY',0,1, 'R');
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
$pdf->Cell(30	,7,'EMPLOYEE',0,0, 'L');
$pdf->Cell(16	,7,'GROSSPAY',0,0,'R');
$pdf->Cell(16	,7,'MGT LOAN',0,0,'R');
$pdf->Cell(16	,7,'EM. LOAN',0,0,'R');
$pdf->Cell(16	,7,'RC. LOAN',0,0,'R');
$pdf->Cell(16	,7,'C-PHONE',0,0,'R');
$pdf->Cell(16	,7,'GAS/DIESEL',0,0,'R');
$pdf->Cell(16	,7,'UNIFORM',0,0,'R');
$pdf->Cell(15	,7,'SUNDRIES',0,0,'R');
$pdf->Cell(15	,7,'HMO',0,0,'R');
$pdf->Cell(15	,7,'REPRES',0,0,'R');
$pdf->Cell(16	,7,'EM. FUND',0,0,'R');
$pdf->Cell(16	,7,'REPAIRS',0,0,'R');
$pdf->Cell(16	,7,'EYEGLASS',0,0,'R');
$pdf->Cell(16	,7,'UNLIQ C.A.',0,0,'R');
$pdf->Cell(16	,7,'PRE MED',0,0,'R');
$pdf->Cell(16	,7,'CANTEEN',0,0,'R');
$pdf->Cell(16	,7,'TOT.DED',0,0,'R');
$pdf->Cell(17	,7,'NETPAY',0,1,'R');

$pdf->Line(11, 29, 331, 29);
$pdf->Line(11, 34, 331, 34);

$cnt=1;
while($invoice = mysqli_fetch_array($query )){


$pdf->SetFont('Arial','',6);

$pdf->SetLeftMargin(10);


$pdf->Cell(6,5, $cnt,0,0,'L',0); 
$pdf->Cell(30,5,$invoice['UserName'],0,0,'L');
$pdf->Cell(16,5,number_format($invoice['GrossPay'],2),0,0,'R');
$pdf->Cell(16,5,number_format($invoice['L5'],2),0,0,'R');
$pdf->Cell(16,5,number_format($invoice['L6'],2),0,0,'R');
$pdf->Cell(16,5,number_format($invoice['L7'],2),0,0,'R');
$pdf->Cell(16,5,number_format($invoice['L8'],2),0,0,'R');
$pdf->Cell(16,5,number_format($invoice['L9'],2),0,0,'R');
$pdf->Cell(16,5,number_format($invoice['L10'],2),0,0,'R');
$pdf->Cell(15,5,number_format($invoice['L11'],2),0,0,'R');
$pdf->Cell(15,5,number_format($invoice['L12'],2),0,0,'R');
$pdf->Cell(15,5,number_format($invoice['L14'],2),0,0,'R');
$pdf->Cell(16,5,number_format($invoice['L15'],2),0,0,'R');
$pdf->Cell(16,5,number_format($invoice['L16'],2),0,0,'R');
$pdf->Cell(16,5,number_format($invoice['L17'],2),0,0,'R');
$pdf->Cell(16,5,number_format($invoice['L18'],2),0,0,'R');
$pdf->Cell(16,5,number_format($invoice['L19'],2),0,0,'R');
$pdf->Cell(16,5,number_format($invoice['L20'],2),0,0,'R');
$pdf->Cell(16,5,number_format($invoice['TDeductions'],2),0,0,'R');
$pdf->Cell(17,5,number_format($invoice['NetPay'],2),0,1,'R');


$cnt++;

}

$pdf->Cell(0, 1,'________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1, 'L');
$pdf->SetLeftMargin(46);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(16,5,number_format($qt['TGrossPay'],2),0,0,'R');
$pdf->Cell(16,5,number_format($qt['SL5'],2),0,0,'R');
$pdf->Cell(16,5,number_format($qt['SL6'],2),0,0,'R');
$pdf->Cell(16,5,number_format($qt['SL7'],2),0,0,'R');
$pdf->Cell(16,5,number_format($qt['SL8'],2),0,0,'R');
$pdf->Cell(16,5,number_format($qt['SL9'],2),0,0,'R');
$pdf->Cell(16,5,number_format($qt['SL10'],2),0,0,'R');
$pdf->Cell(15,5,number_format($qt['SL11'],2),0,0,'R');
$pdf->Cell(15,5,number_format($qt['SL12'],2),0,0,'R');
$pdf->Cell(15,5,number_format($qt['SL14'],2),0,0,'R');
$pdf->Cell(16,5,number_format($qt['SL15'],2),0,0,'R');
$pdf->Cell(16,5,number_format($qt['SL16'],2),0,0,'R');
$pdf->Cell(16,5,number_format($qt['SL17'],2),0,0,'R');
$pdf->Cell(16,5,number_format($qt['SL18'],2),0,0,'R');
$pdf->Cell(16,5,number_format($qt['SL19'],2),0,0,'R');
$pdf->Cell(16,5,number_format($qt['SL20'],2),0,0,'R');
$pdf->Cell(16,5,number_format($qt['TTDeduct'],2),0,0,'R');
$pdf->Cell(17,5,number_format($qt['TNetPay'],2),0,1,'R');


$pdf->Output();

}
?>