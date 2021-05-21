<?php 

include '../../entities/art.php';
include '../../core/artc.php';



if( isset($_POST['nom']) and isset($_POST['categorie'])  )
{

$map = new art($_POST['categorie'],$_POST['nom']);
	

	$mapc=new artc();
	$mapc->modifierart($map,$_POST['id']);
	header('Location: ajouterart.php');
}
else{
	echo "verifier les champs";
}

 ?>   