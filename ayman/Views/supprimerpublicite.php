<?php
    require_once '../Controller/publiciteController.php';
    $pubC =  new PubC();
    $pubC->deletePublicite($_GET['id']);
    header("Location: index.php");
    

?>