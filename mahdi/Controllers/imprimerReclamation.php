<?php

include_once(__DIR__ . "/../core/ReclamationCore.php");


/*session_start();
if (empty($_SESSION['id']))
{
    echo "<script type='text/javascript'>";
    echo "alert('Please Login First');
window.location.href='../login.html';";
    echo "</script>";


}*/
require ("../views/front/pdf/fpdf.php");
$CS =new ReclamationCore();
$Reclamation = $CS->pdfReclamation($_POST['id_reclamation']);

$pdf=new FPDF('P','mm','A3');
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
$pdf->SetLeftMargin(35);

foreach ($Reclamation as $row){
    $name = $row['id_user'] ;
    $id = $row['id_reclamation'];
    $date = $row['date_publication'];
    $contenu = $row['contenu'];
    $mail = $row['email'];
}
$pdf->Cell(180,5,'PDF DU RECLAMATION : '.$id.' ',0,0);
$pdf->Cell(130,5,' Client :'.$name,0,1);
$pdf->Cell(130,5,'',0,1);
$pdf->Cell(130,5,'RECLAMATION INFO  : ',0,1);
$pdf->Cell(130,5,'',0,1);
$pdf->Cell(130,5,'',0,1);


$pdf->SetFont('Arial','',12);


$pdf->Cell(8,5,'#',1,0);
$pdf->Cell(50,5,'Date de Reclamation',1,0);
$pdf->Cell(30,5,'Nom Client',1,0);
$pdf->Cell(30,5,'Contenu',1,0);
$pdf->Cell(50,5,'Mail',1,1);





$pdf->Cell(8,5,$id ,1,0);
$pdf->Cell(50,5, $date ,1,0);
$pdf->Cell(30,5,$name ,1,0);
$pdf->Cell(30,5,$contenu ,1,0);
$pdf->Cell(50,5, $mail,1,1);


$dest = $name.'_'.date("Y-m-d-h-m-s").'_reclamation.pdf';

$pdf->Output('F', $dest);
header('Location: ../Views/front/afficherreclamation.php');

?>