<?php

include_once '../Controller/compteC.php';
$compteC=new compteC();
$compteC->bloquer($_GET['id'],$_GET['b']);
header('Location:../../../ahmed-noursen/gestionComptes/View/ajouter1.php') ;

?>