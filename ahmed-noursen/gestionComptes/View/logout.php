<?php
include_once '../Controller/compteC.php';

$compteC = new CompteC();
$compteC->reinCONN();
header('Location:../../../ahmed-noursen/GestionComptes/View/login.php') ;
?>