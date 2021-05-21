<?php
    require_once '../Controller/sponsorController.php';
    $sponsC =  new SponC();
    $sponsC->deleteSponsor($_GET['id']);
    header("Location: indexsponsor.php");

?>