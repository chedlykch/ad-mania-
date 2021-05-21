<?PHP
require_once "../../core/localc.php";
include_once "../../entities/local.php";







	$localc= new localc();
	$localc->Supprimerlocal($_GET['id']);
	header('Location: ajouterlocal.php');
   


?>