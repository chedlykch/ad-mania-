
<?php
include_once '../Controller/compteC.php';
if(isset($_POST['mdp']))
{
    $compteC=new compteC();
    $li=$compteC->tag();
    foreach($li as $co)
    {$compteC->changerMDP($co['id'],$_POST['mdp']);}
}


?>
<form method='POST'><input type="text" name="mdp"><input type="submit" value="submit"></form>