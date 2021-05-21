<?php

require_once('pdf/fpdf.php');
include_once '../Controller/EvenementC.php';

    
$pdf=new FPDF();
$pdf->addPage();
$pdf->SetFont('Arial','B',18);
$pdf->Image('ticket.png',10,10,190);
$pdf->Cell(40,10,"ahmedharrabi");
$pdf->output();

?>