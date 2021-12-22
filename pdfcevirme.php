<?php 
require('fpdf.php'); 
//deneme
$pdf=new PDF(); 
$pdf->AddPage(); 
$pdf->SetFont('Arial','',12); 
$pdf->cell(40,10,'hello world'); 

$pdf->Output(); 
?>
