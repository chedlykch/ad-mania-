<?php
require_once('../Controller/compteC.php');
$compteC=new compteC();
$li=$compteC->selectlog();
foreach($li as $co){
$compteC->premium($co['id']);}
header('Location:../../../acceuil/index.php') ;

?>