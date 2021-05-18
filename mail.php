<?PHP
require_once "../../core/localc.php";
include_once "../../entities/local.php";

$phrase  = $_GET['mail'];


$newphrase  = str_replace("%40", "@", $phrase);



mail( 'chedly.kchaou@esprit.tn','NOUVEAU MAIL', $_GET['mess'] .'/ from '.  $newphrase,'From: omar.charfi@esprit.tn');

header('Location: local.php');

?>
