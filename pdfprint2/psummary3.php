<?php
require('fpdf17/fpdf.php');

//db connection
$con = mysqli_connect('localhost','badz','Madzilla101');
mysqli_select_db($con,'payrollflexo');

//get invoices data

	

	
	
$pdf = new FPDF('P','mm',array(340,210));

$pdf->AddPage();
$pdf->AliasNbPages();


$qtotal = mysqli_query($con,"select * from bankregsum
	where ToDate = '".$_GET['ps1']."' AND Division = '".$_GET['dv1']."'  AND WageType = '".$_GET['wt1']."' AND Employer = '".$_GET['em1']."'");
	
	
$qgrp = mysqli_query($con,"select * from bankregsumgrp
	where ToDate = '".$_GET['ps1']."' AND Division = '".$_GET['dv1']."'  AND WageType = '".$_GET['wt1']."' AND Employer = '".$_GET['em1']."'");

while($qt= mysqli_fetch_array($qtotal)){
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,0,$qt['EmployerName'],0,1,'C');


$pdf->SetFont('Arial','',8);
$pdf->Cell(25, 8,'Payroll ID:',0,0, 'L');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(8,8,$qt['PayrollID'],0,0);
$pdf->Cell(75, 8,'BANK REGISTER',0,1, 'R');
$pdf->SetFont('Arial','',8);
$pdf->Cell(25,0,'Payroll Coverage:',0,0);
$pdf->SetFont('Arial','B',8);
$ddate1=date_create($qt ['FromDate']);
$ddate2=date_create($qt ['ToDate']);
$pdf->Cell(40,0,date_format($ddate1,"m/d/Y")." - ".date_format($ddate2,"m/d/Y"),0,0);

$pdf->SetFont('Arial','',8);
$pdf->Cell(22,0,'Payroll Period:',0,0);
$pdf->SetFont('Arial','B',8);
$ddate3=date_create($qt['PayPeriod']);
$pdf->Cell(25,0,date_format($ddate3,"m/d/Y"),0,0);

$pdf->SetFont('Arial','',8);
$pdf->Cell(16,0,'Pay Date:',0,0);
$pdf->SetFont('Arial','B',8);
$ddate4=date_create($qt['PayDate']);
$pdf->Cell(15,0,date_format($ddate4,"m/d/Y"),0,1);


$pdf->SetFont('Arial','',8);
$pdf->Cell(25, 8,'Division:',0,0, 'L');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(40,8,$qt['FDivision'],0,0);
$pdf->SetFont('Arial','',8);
$pdf->Cell(22, 8,'WageType:',0,0, 'L');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(150,8,$qt['EmployeeType'],0,0);




$pdf->SetXY(10, 28);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10	,7,'NO.',0,0, 'L');
$pdf->Cell(30	,7,'EMPLOYEEID',0,0, 'L');
$pdf->Cell(44	,7,'EMPLOYEE NAME',0,0, 'L');
$pdf->Cell(40	,7,'PAYMENT MODE',0,0,'L');
$pdf->Cell(17	,7,'BANK ACCOUNT',0,0,'L');
$pdf->Cell(38	,7,'NET DUE',0,1,'R');

$pdf->Line(11, 29, 200, 29);
$pdf->Line(11, 34, 200, 34);



while($qsub= mysqli_fetch_array($qgrp)){	
$pdf->SetLeftMargin(10);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,5,'',0,1,'L');
$pdf->Cell(0,5,strtoupper($qsub['Bank']),0,1,'L');
$pdf->Cell(0,5,'',0,1,'L');

	

$cnt=1;

$query = mysqli_query($con,"select * from bankreg
	
	
	where ToDate = '".$_GET['ps1']."' AND Division = '".$_GET['dv1']."'  AND WageType = '".$_GET['wt1']."' AND Employer = '".$_GET['em1']."' AND Bank='".$qsub['Bank']."'");

while($invoice = mysqli_fetch_array($query )){


$pdf->SetFont('Arial','',8);

$pdf->SetLeftMargin(10);


$pdf->Cell(10,4, $cnt,0,0,'L',0); 
$pdf->Cell(30,4,$invoice['IDNo'],0,0,'L');
$pdf->Cell(50,4,$invoice['UserName'],0,0,'L');
$pdf->Cell(25,4,$invoice['Bank'],0,0,'L');
$pdf->Cell(25,4,$invoice['AccountNo'],0,0,'L');
$pdf->Cell(38,4,number_format($invoice['NetPay'],2),0,1,'R');



$cnt++;

}

$pdf->Cell(0, 1,'_____________________________________________________________________________________________________________________',0,1, 'L');
$pdf->SetLeftMargin(12);
$pdf->SetFont('Arial','B',9);

$pdf->Cell(176.5,7,number_format($qsub['TNet'],2),0,1,'R');



}
$pdf->SetLeftMargin(138.5);
$pdf->Cell(0, 1,'_______________________________',0,1,'L');
$pdf->SetLeftMargin(12);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(25,7,'GRAND TOTAL:',0,0,'L');
$pdf->Cell(25,7,number_format($qt['TNet'],2),0,1,'R');


$pdf->Output();

}
?>