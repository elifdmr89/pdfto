<?php 
require('fpdf.php'); 

$pdf=new PDF(); 
$pdf->AddPage(); 
$pdf->SetFont('Arial','',12); 
$pdf->cell(40,10,'hello world'); 

$pdf->Output(); 
?>
