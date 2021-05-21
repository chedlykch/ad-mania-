<?php
include_once 'C:\xampp\htdocs\web\projetf\ahmed-noursen\gestionComptes\Controller\compteC.php';
$compteC=new compteC();


if (isset($_POST['username']))
{
    
   if (!empty($_POST['username']))
   {
       $compteC->report($_POST['username']);
    $listeC=$compteC->selectRes();
       foreach ($listeC as $com) {
           
       
    mail($com['email'],'Report','le message de report est : '.$_POST['description'],'From: noursen.amami@esprit.tn');
   }} 
}


?>

<form action="" method="post"><input name="username" type="text"><br><br>
<textarea name="description" id="" cols="30" rows="10"></textarea><br><br>
<input type="submit" value="submit"></form>