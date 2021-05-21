<?php

include_once(__DIR__ . "/../core/ReclamationCore.php");
include_once(__DIR__ . "/../entities/Reclamation.php");
if( isset($_POST['id_user']) && isset($_POST['recalamtion'])  )
{
    //session_start();

    $REC= new Reclamation(0,$_POST['id_user'],$_POST['recalamtion'],date("Y-m-d"));
    $RECSERV=new ReclamationCore();
    $RECSERV->AjouterReclamation($REC);
    header('Location: ../views/front/AfficherReclamation.php');
}
else{
    echo "verifier les champs";
}

?>