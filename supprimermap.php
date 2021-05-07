<?PHP
require_once "../../core/mapc.php";
include_once "../../entities/map.php";







	$mapc= new mapc();
	$mapc->Supprimermap($_GET['id']);
	header('Location: ajoutermap.php');



?>