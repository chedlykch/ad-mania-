<?php

require_once('pdf/fpdf.php');
include_once '../Controller/EvenementC.php';
include_once '../../gestionComptes/Controller/compteC.php';
$eventC=new EventC();
$eventC->ajouterEV();
$eventC->ajouterCO();
$ev=$eventC->tag();
$compteC=new compteC();
$co=$compteC->selectlog();

foreach($ev as $e){
foreach($co as $c)
{    
$pdf=new FPDF();
$pdf->addPage();
$pdf->SetFont('Arial','B',50);
$pdf->SetTextColor(242, 303, 38);
$pdf->Image('ticket.png',10,10,190);
$pdf -> SetY(17); 
$pdf -> SetX(30); 
$pdf->Cell(40,10,$e['nom']);
$pdf->SetFont('Arial','B',20);
$pdf->SetTextColor(255, 255, 255);
$pdf -> SetY(37); 
$pdf -> SetX(30);
$pdf->Cell(40,10,"Organise par : ".$e['organisateur']);
$pdf->SetFont('Arial','B',17);
$pdf -> SetY(52); 
$pdf -> SetX(19);
$pdf->SetTextColor(242, 303, 38);
$pdf->Cell(40,10,$e['prix']."DT");
$pdf->SetFont('Arial','B',17);
$pdf->SetTextColor(0, 0, 0);
$pdf -> SetY(20); 
$pdf -> SetX(143);
$pdf->Cell(40,10,$c['nom']);
$pdf -> SetY(30); 
$pdf -> SetX(149);
$pdf->Cell(40,10,$e['da']);

$pdf->output();}}
$eventC->incrE();

?>