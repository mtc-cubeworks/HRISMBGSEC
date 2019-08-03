<?php
require('fpdf17/fpdf.php');

//db connection
$con = mysqli_connect('localhost','badz','Madzilla101');
mysqli_select_db($con,'payrollflexo');

//get invoices data
$query = mysqli_query($con,"select * from payrollamt34
	
	
	where ToDate = '".$_GET['ps1']."' AND Division = '".$_GET['dv1']."'  AND WageType = '".$_GET['wt1']."' AND Employer = '".$_GET['em1']."'");
	

$pdf = new FPDF('L','mm',array(340,210));

$pdf->AddPage();
$pdf->AliasNbPages();


$qtotal = mysqli_query($con,"select * from payrollsum2
	where ToDate = '".$_GET['ps1']."' AND Division = '".$_GET['dv1']."'  AND WageType = '".$_GET['wt1']."' AND Employer = '".$_GET['em1']."'");

while($qt= mysqli_fetch_array($qtotal)){
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,0,$qt['EmployerName'],0,1,'C');


$pdf->SetFont('Arial','',8);
$pdf->Cell(21, 8,'Payroll ID:',0,0, 'L');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(8,8,$qt['PayrollID'],0,0);
$pdf->Cell(148, 8,'PAYROLL SUMMARY 2',0,1, 'R');
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
$pdf->Cell(15	,7,'GROSSPAY',0,0,'R');
$pdf->Cell(15	,7,'SSS',0,0,'R');
$pdf->Cell(15	,7,'PAG-IBIG',0,0,'R');
$pdf->Cell(15	,7,'PHIC',0,0,'R');
$pdf->Cell(15	,7,'TAX',0,0,'R');
$pdf->Cell(20	,7,'SUBNET',0,0,'R');
$pdf->Cell(20	,7,'SSS LOANS',0,0,'R');
$pdf->Cell(23	,7,'PAG-IBIG LOANS',0,0,'R');
$pdf->Cell(23	,7,'PAG-IBIG H. LOANS',0,0,'R');
$pdf->Cell(19	,7,'OTHER DED.',0,0,'R');
$pdf->Cell(16	,7,'TOT. DED.',0,0,'R');
$pdf->Cell(19	,7,'NETPAY',0,1,'R');

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
$pdf->Cell(15,4,number_format($invoice['GrossPay'],2),0,0,'R');
$pdf->Cell(15,4,number_format($invoice['SSS'],2),0,0,'R');
$pdf->Cell(15,4,number_format($invoice['PagIbig'],2),0,0,'R');
$pdf->Cell(15,4,number_format($invoice['PHIC'],2),0,0,'R');
$pdf->Cell(15,4,number_format($invoice['Ttax'],2),0,0,'R');
$pdf->Cell(20,4,number_format($invoice['SubNet'],2),0,0,'R');
$pdf->Cell(20,4,number_format($invoice['TSLoans'],2),0,0,'R');
$pdf->Cell(20,4,number_format($invoice['TPLoans'],2),0,0,'R');
$pdf->Cell(20,4,number_format($invoice['TPHLoans'],2),0,0,'R');
$pdf->Cell(20,4,number_format($invoice['OthLoans'],2),0,0,'R');
$pdf->Cell(20,4,number_format($invoice['TDeductions'],2),0,0,'R');
$pdf->Cell(20,4,number_format($invoice['NetPay'],2),0,1,'R');


$cnt++;

}

$pdf->Cell(0, 1,'________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1, 'L');
$pdf->SetLeftMargin(71);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(15,5,number_format($qt['TGrossPay'],2),0,0,'R');
$pdf->Cell(15,5,number_format($qt['TSSS'],2),0,0,'R');
$pdf->Cell(15,5,number_format($qt['TPagibig'],2),0,0,'R');
$pdf->Cell(15,5,number_format($qt['TPHIC'],2),0,0,'R');
$pdf->Cell(15,5,number_format($qt['TTtax'],2),0,0,'R');
$pdf->Cell(20,5,number_format($qt['TSubNet'],2),0,0,'R');
$pdf->Cell(20,5,number_format($qt['TSSLoans'],2),0,0,'R');
$pdf->Cell(20,5,number_format($qt['TPPLoans'],2),0,0,'R');
$pdf->Cell(20,5,number_format($qt['TPPHLoans'],2),0,0,'R');
$pdf->Cell(20,5,number_format($qt['OtherLoans'],2),0,0,'R');
$pdf->Cell(20,5,number_format($qt['TTDeduct'],2),0,0,'R');
$pdf->Cell(20,5,number_format($qt['TNetPay'],2),0,1,'R');


$pdf->Output();

}
?>