<?PHP
require_once "../../core/articlec.php";
include_once "../../entities/article.php";







	$articlec= new articlec();
	$articlec->Supprimerarticle($_GET['id']);
	header('Location: ajouterarticle.php');


?>
