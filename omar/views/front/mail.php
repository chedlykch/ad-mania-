<?PHP
require_once "../../core/artc.php";
include_once "../../entities/art.php";

$phrase  = $_GET['mail'];


$newphrase  = str_replace("%40", "@", $phrase);



mail( 'omar.charfi@esprit.tn','bonjour', $_GET['mess'] .$newphrase,'From: omarcharfii12@gmail.com');

header('Location: afficherart.php');

?>