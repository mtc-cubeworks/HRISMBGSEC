<?php
require('fpdf17/fpdf.php');

//db connection
$con = mysqli_connect('localhost','badz','Madzilla101');
mysqli_select_db($con,'mgbsec');

//get invoices data

	

$pdf = new FPDF('P','mm',array(340,210));

$pdf->AddPage();
$pdf->AliasNbPages();

$qhead = mysqli_query($con,"select * from countheading2
	where ToDate = '".$_GET['ps1']."' AND Employer = '".$_GET['em1']."' AND Deduction = '".$_GET['lnt1']."'");

$qtotal = mysqli_query($con,"select * from loansgroup
	where ToDate = '".$_GET['ps1']."' AND Employer = '".$_GET['em1']."' AND Deduction = '".$_GET['lnt1']."'");

while($qh= mysqli_fetch_array($qhead)){	

$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,5,strtoupper($qh['EmployerName']),0,1,'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(0,5,'Address: '.$qh['EmployerAddress'],0,1,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,5,'SUMMARY OF '.strtoupper($qh['LoanDescription']).' DEDUCTION',0,1,'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(0,5,'FOR THE MONTH OF: '. strtoupper($qh['MonthNow']).' '. strtoupper($qh['YearNow']),0,1,'L');
$pdf->Cell(0,5,'',0,1,'L');

$pdf->SetXY(10, 38);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10	,7,'NO.',0,0, 'L');
$pdf->Cell(61	,7,'EMPLOYEE NAME',0,0, 'L');


$ltype = $qh['LoanDescription'];

if( strpos( $ltype, "SSS") !== false) {
   $pdf->Cell(35	,7,'SSS NO.',0,0,'L'); 
}

elseif( strpos( $ltype, "Pag-Ibig" ) !== false) {
   $pdf->Cell(35	,7,'PAG-IBIG NO.',0,0,'L'); 
}

else {
   $pdf->Cell(35	,7,'            ',0,0,'L'); 
}

$pdf->Cell(25	,7,'LOAN AMT',0,0,'C');
$pdf->Cell(25	,7,'PAYMENT',0,0,'C');
$pdf->Cell(25	,7,'BALANCE',0,1,'C');

$pdf->Line(11, 44, 200, 44);
$pdf->Line(11, 38.5, 200, 38.5);
}
	
	
while($qtot= mysqli_fetch_array($qtotal)){	

$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,5,'',0,1,'L');
$pdf->Cell(0,5,strtoupper($qtot['DivisionName']),0,1,'L');

	
$query = mysqli_query($con,"select * from loansrep	
	where ToDate = '".$_GET['ps1']."' AND Employer = '".$_GET['em1']."' AND Division='".$qtot['Division']."' AND Deduction = '".$_GET['lnt1']."'");

$cnt=1;
while($invoice = mysqli_fetch_array($query )){

$pdf->SetFont('Arial','',8);

$pdf->SetLeftMargin(10);


$pdf->Cell(10,4, $cnt,0,0,'L',0); 
$pdf->Cell(61,4,$invoice['UserName'],0,0,'L');

if( strpos( $ltype, "SSS") !== false) {
   $pdf->Cell(29,4,$invoice['SSSNo'],0,0,'L');
}

elseif( strpos( $ltype, "Pag-Ibig" ) !== false) {
   $pdf->Cell(29,4,$invoice['PagIbigNo'],0,0,'L');
}

else {
   $pdf->Cell(29,4,'           ',0,0,'L');
}


$pdf->Cell(25,4,number_format($invoice['Principal'],2),0,0,'R');
$pdf->Cell(25,4,number_format($invoice['Amount'],2),0,0,'R');
$pdf->Cell(25,4,number_format($invoice['Balance'],2),0,1,'R');




$cnt++;

}

$pdf->Cell(0, 1,'________________________________________________________________________________________________________________________',0,1, 'L');

$pdf->SetFont('Arial','B',9);

$pdf->Cell(125,7,'SubTotal:    '.number_format($qtot['Principal'],2),0,0,'R');
$pdf->Cell(25,7,number_format($qtot['AmountSum'],2),0,0,'R');
$pdf->Cell(25,7,number_format($qtot['BalanceSum'],2),0,1,'R');

}


$qsumx = mysqli_query($con,"select * from loansgroup
	where ToDate = '".$_GET['ps1']."' AND Employer = '".$_GET['em1']."' AND Deduction = '".$_GET['lnt1']."'");

$pdf->SetLeftMargin(60);	
$pdf->Cell(40,5,'',0,1,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(56,5,'SUMMARY:',0,0,'L');
$pdf->Cell(25	,5,'PRINCIPAL',0,0,'C');
$pdf->Cell(25	,5,'PAYMENT',0,0,'C');
$pdf->Cell(20	,5,'BALANCE',0,1,'R');


while($qsum= mysqli_fetch_array($qsumx)){	

$pdf->SetFont('Arial','',9);
$pdf->Cell(50,4,strtoupper($qsum['DivisionName']),0,0,'L');
$pdf->Cell(25,4,number_format($qsum['Principal'],2),0,0,'R');
$pdf->Cell(25,4,number_format($qsum['AmountSum'],2),0,0,'R');
$pdf->Cell(25,4,number_format($qsum['BalanceSum'],2),0,1,'R');


}
$pdf->Cell(0, 1,'______________________________________________________________________________',0,1, 'L');

$grand = mysqli_query($con,"select * from loangsum
	where ToDate = '".$_GET['ps1']."' AND Employer = '".$_GET['em1']."' AND Deduction = '".$_GET['lnt1']."'");

while($gran= mysqli_fetch_array($grand)){	
$pdf->SetFont('Arial','B',9);
$pdf->Cell(75,7,'Grand Total:    '.number_format($gran['GPrincipal'],2),0,0,'R');
$pdf->Cell(25,7,number_format($gran['GAmt'],2),0,0,'R');
$pdf->Cell(25,7,number_format($gran['GBalance'],2),0,1,'R');
	
}
$pdf->Cell(0,5,'',0,1,'L');
$pdf->Cell(0,5,'',0,1,'L');
$pdf->SetX(10);
$pdf->SetFont('Arial','',9);

$qpre = mysqli_query($con,"select * from logins
	where LogID = '".$_GET['prp1']."'");
while($qpres= mysqli_fetch_array($qpre)){		
$pdf->Cell(0,5,'Prepared by:',0,1,'L');
$pdf->Cell(0,5,'',0,1,'L');
$pdf->Cell(0,5,'',0,1,'L');

$pdf->SetX(10);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(0,5,strtoupper($qpres['FullName']),0,1,'L');
$pdf->SetX(10);
$pdf->SetFont('Arial','',9);
$pdf->Cell(0,4,$qpres['Position'],0,0,'L');
}

$pdf->Output();


?>