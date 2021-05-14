<?php 

include '../../entities/map.php';
include '../../core/mapc.php';



if( isset($_POST['type']) and isset($_POST['nom']) and isset($_POST['photo']) )
{

$map = new map($_POST['type'],$_POST['nom'],$_POST['photo']);
	

	$mapc=new mapc();
	$mapc->modifiermap($map,$_POST['id']);
	header('Location: ajoutermap.php');
}
else{
	echo "verifier les champs";
}

 ?>   