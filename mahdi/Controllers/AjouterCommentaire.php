<?php

include_once(__DIR__ . "/../core/CommentaireCore.php");
include_once(__DIR__ . "/../entities/Commentaire.php");
if( isset($_POST['nom']) && isset($_POST['commentaire']) && isset($_POST['id_user'])  )
{
    //session_start();

    $cm = new Commentaire(0,$_POST['commentaire'],$_POST['id_user'],$_POST['nom'],date("Y-m-d"));
    $cms=new CommentaireCore();
    $cms->ajoutercommentaire($cm);
    header('Location: ../../omar/views/front/afficherarticle.php');
}
else{
    echo "verifier les champs";
}

?>