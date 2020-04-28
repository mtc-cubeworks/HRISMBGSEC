<?php
require('fpdf17/fpdf.php');

//db connection
$con = mysqli_connect('localhost','badz','Madzilla101');
mysqli_select_db($con,'mgbsec');

//get invoices data

	

$pdf = new FPDF('P','mm',array(340,210));

$pdf->AddPage();
$pdf->AliasNbPages();

$qhead = mysqli_query($con,"select * from countheading
	where ToDate = '".$_GET['ps1']."' AND Employer = '".$_GET['em1']."'");

$qtotal = mysqli_query($con,"select * from contrigroup
	where ToDate = '".$_GET['ps1']."' AND Employer = '".$_GET['em1']."'");

while($qh= mysqli_fetch_array($qhead)){	

$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,5,strtoupper($qh['EmployerName']),0,1,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,5,'Pag-Ibig No: '.$qh['EmployerPagIbig'],0,1,'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(0,5,'Address: '.$qh['EmployerAddress'],0,1,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,5,'SUMMARY OF PAG-IBIG CONTRIBUTION',0,1,'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(0,5,'FOR THE MONTH OF: '. strtoupper($qh['MonthNow']).' '. strtoupper($qh['YearNow']),0,1,'L');
$pdf->Cell(0,5,'',0,1,'L');

$pdf->SetXY(10, 38);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10	,7,'NO.',0,0, 'L');
$pdf->Cell(71	,7,'EMPLOYEE NAME',0,0, 'L');
$pdf->Cell(29	,7,'PAG-IBIG NO.',0,0,'L');
$pdf->Cell(19	,7,'EE',0,0,'C');
$pdf->Cell(20	,7,'ER',0,0,'C');
//$pdf->Cell(15	,7,'EC',0,0,'C');
$pdf->Cell(20	,7,'TOTAL',0,1,'R');

$pdf->Line(11, 44, 200, 44);
$pdf->Line(11, 38.5, 200, 38.5);
}
	
	
while($qtot= mysqli_fetch_array($qtotal)){	

$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,5,'',0,1,'L');
$pdf->Cell(0,5,strtoupper($qtot['DivisionName']),0,1,'L');

	
$query = mysqli_query($con,"select * from contributions	
	where ToDate = '".$_GET['ps1']."' AND Employer = '".$_GET['em1']."' AND Division='".$qtot['Division']."'");

$cnt=1;
while($invoice = mysqli_fetch_array($query )){

$pdf->SetFont('Arial','',8);

$pdf->SetLeftMargin(10);


$pdf->Cell(10,4, $cnt,0,0,'L',0); 
$pdf->Cell(71,4,$invoice['UserName'],0,0,'L');
$pdf->Cell(26,4,$invoice['PagIbigNo'],0,0,'L');
$pdf->Cell(18,4,number_format($invoice['PagIbig'],2),0,0,'R');
$pdf->Cell(20,4,number_format($invoice['PagIbigER'],2),0,0,'R');
//$pdf->Cell(18,4,number_format($invoice['SSSEC'],2),0,0,'R');
$pdf->Cell(23,4,number_format($invoice['PagIbigTotal'],2),0,1,'R');



$cnt++;

}

$pdf->Cell(0, 1,'________________________________________________________________________________________________________________________',0,1, 'L');

$pdf->SetFont('Arial','B',9);

$pdf->Cell(125,7,'SubTotal:    '.number_format($qtot['PagIbigSum'],2),0,0,'R');
$pdf->Cell(20,7,number_format($qtot['PagIbigERSum'],2),0,0,'R');
//$pdf->Cell(18,7,number_format($qtot['SSSECSum'],2),0,0,'R');
$pdf->Cell(23,7,number_format($qtot['PagIbigTotalSum'],2),0,1,'R');
}


$qsumx = mysqli_query($con,"select * from contrigroup
	where ToDate = '".$_GET['ps1']."' AND Employer = '".$_GET['em1']."'");

$pdf->SetLeftMargin(60);	
$pdf->Cell(40,5,'',0,1,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(59,5,'SUMMARY:',0,0,'L');
$pdf->Cell(19	,5,'EE',0,0,'C');
$pdf->Cell(20	,5,'ER',0,0,'C');
//$pdf->Cell(15	,5,'EC',0,0,'C');
$pdf->Cell(20	,5,'TOTAL',0,1,'R');

while($qsum= mysqli_fetch_array($qsumx)){	

$pdf->SetFont('Arial','',9);
$pdf->Cell(61,4,strtoupper($qsum['DivisionName']),0,0,'L');
$pdf->Cell(14,4,number_format($qsum['PagIbigSum'],2),0,0,'R');
$pdf->Cell(20,4,number_format($qsum['PagIbigERSum'],2),0,0,'R');
//$pdf->Cell(18,4,number_format($qsum['SSSECSum'],2),0,0,'R');
$pdf->Cell(23,4,number_format($qsum['PagIbigTotalSum'],2),0,1,'R');

}
$pdf->Cell(0, 1,'______________________________________________________________________________',0,1, 'L');

$grand = mysqli_query($con,"select * from contsum
	where ToDate = '".$_GET['ps1']."' AND Employer = '".$_GET['em1']."'");

while($gran= mysqli_fetch_array($grand)){	
$pdf->SetFont('Arial','B',9);
$pdf->Cell(75,7,'Grand Total:    '.number_format($gran['GPagIbig'],2),0,0,'R');
$pdf->Cell(20,7,number_format($gran['GPagIbigER'],2),0,0,'R');
//$pdf->Cell(18,7,number_format($gran['GSSSEC'],2),0,0,'R');
$pdf->Cell(23,7,number_format($gran['GPagIbigTotal'],2),0,1,'R');	
}
$pdf->Cell(0,5,'',0,1,'L');
$pdf->Cell(0,5,'',0,1,'L');
$pdf->SetX(10);
$pdf->SetFont('Arial','',9);

$qpre = mysqli_query($con,"select * from logpos
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