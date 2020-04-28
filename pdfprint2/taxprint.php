<?php
require_once('fpdf17/fpdf.php');


//db connection
$con = mysqli_connect('localhost','badz','Madzilla101');

mysqli_select_db($con,'mbgsec');

//Data table
$query = mysqli_query($con,"select * from monrem
	where TxID = '".$_GET['mt1']."'");
	


	
$pdf = new FPDF('P','mm',array(216,356));



while($dat = mysqli_fetch_array($query )){
$pdf->AddPage();
$pdf->AliasNbPages();


$pdf->Image('../files/tax.jpg',2,0,214,354);

$pdf->SetXY(43, 40);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(15, 5,$dat['Month'],0,0, 'L');
$pdf->Cell(32, 5,$dat['Year'],0,0, 'L');
$pdf->Cell(16.4, 5,$dat['ArY'],0,0, 'L');
$pdf->Cell(68, 5,$dat['ArN'],0,0, 'L');
$pdf->Cell(16.4, 5,$dat['AtwY'],0,0, 'L');
$pdf->Cell(5, 5,$dat['AtwN'],0,1, 'L');
$pdf->SetLeftMargin(20);
$pdf->Cell(100, 21,$dat['TIN'],0,0, 'L');
$pdf->Cell(30, 21,$dat['RDOCode'],0,1, 'L');
$pdf->Cell(162, 3,$dat['EmployerName'],0,0, 'L');
$pdf->Cell(30, 3,$dat['TelNo'],0,1, 'L');
$pdf->Cell(170, 20,$dat['Address'],0,0, 'L');
$pdf->Cell(30, 20,$dat['ZipCode'],0,1, 'L');
$pdf->SetXY(17, 89);
$pdf->Cell(17, 3,$dat['catP'],0,0, 'L');
$pdf->Cell(31, 3,$dat['catG'],0,0, 'L');
$pdf->Cell(17, 5,$dat['waitY'],0,0, 'L');
$pdf->Cell(30, 5,$dat['waitN'],0,1, 'L');

$pdf->SetLeftMargin(120);
$pdf->Cell(20	,26,number_format($dat ['TComp'],2),0,1,'R');
$pdf->Cell(20	,-10.5,number_format($dat ['Stmw'],2),0,1,'R');
$pdf->Cell(20	,42.5,number_format($dat ['Ntaxc'],2),0,1,'R');
$pdf->Cell(20	,-27,number_format($dat ['TaxC'],2),0,1,'R');
$pdf->SetLeftMargin(183);
$pdf->Cell(20	,39,number_format($dat ['TaxR'],2),0,1,'R');
$pdf->Cell(20	,-26.4,number_format($dat ['TaxRef'],2),0,1,'R');
$pdf->Cell(20	,39,number_format($dat ['TaxforR'],2),0,1,'R');
$pdf->Cell(20	,18.3,number_format($dat ['TaxforR'],2),0,1,'R');
$pdf->Cell(20	,20,number_format($dat ['TAmtd'],2),0,1,'R');
//$pdf->SetXY(50, 190);
$pdf->Cell(-245, 120,$dat['Auth'],0,1, 'C');
$pdf->Cell(-15	,-10,number_format($dat ['TAmtd'],2),0,1,'R');


}



















$pdf->Output();
?>
