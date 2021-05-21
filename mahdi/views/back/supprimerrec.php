<?PHP
require_once "../../core/reclamationcore.php";
include_once "../../entities/reclamation.php";






	$recc= new reclamationcore();
	$recc->Supprimerrec($_GET['id']);
	header('Location: ajouterrec.php');


?>
