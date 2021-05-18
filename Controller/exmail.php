<?php
  $dest = $_GET["des"];
  $sujet = "Paiement reussi";
  $corp = "Paiement enregistré avec succes sur la carte ".$_GET["no"];
  $headers = "From: aymen.ellouze.2000@gmail.com";

  if (mail($dest, $sujet, $corp, $headers)) {
    echo "Paiement enregistré avec succes sur la carte ...";
    header("Location: ../Views/index.php");
  } else {
    echo "Échec de l'envoi de l'email...";
  }
?>