<?PHP
require_once "../../core/artc.php";
include_once "../../entities/art.php";






	$artc= new artc();
	$artc->Supprimerart($_GET['id']);
	header('Location: ajouterart.php');


?>