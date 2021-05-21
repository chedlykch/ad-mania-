<?php

include_once "../Controller/EvenementC.php";
$eventC = new EventC();
//$participationC->affecterEv();

/*insert into partcipation (id_ev) select id from event where tag=1;
update particiaption set id_part=(select id from compte where connected=1) where id_part=NULL*/

//$particioationC->affecterPar();
$eventC->ajouterEV();
$eventC->ajouterCO();

$eventC->incrE();
header('Location:ajouter1.php');

?>