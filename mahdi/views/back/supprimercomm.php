<?PHP
require_once "../../core/commentairecore.php";
include_once "../../entities/commentaire.php";






	$commc= new commentairecore();
	$commc->Supprimercomm($_GET['id']);
	header('Location: ajoutercomm.php');


?>