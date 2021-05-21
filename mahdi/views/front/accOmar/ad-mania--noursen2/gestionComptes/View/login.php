<?php
include_once '../Controller/compteC.php';
include_once '../../vendor/autoload.php';
$compteC = new CompteC();
$sid="AC83c9cc4f217af1b950c206d54d20d184";
$token="cc0cf1e84978c17efdddce51905bbb72";
$client=new Twilio\Rest\Client($sid,$token);
$code=rand(1000,9999);

if (
    isset($_POST["id"]) && 
     isset($_POST["mdp"]))
     {
        if (
            !empty($_POST["id"]) && 
             !empty($_POST["mdp"]) )
             {$mdp=$compteC->verifierLogin($_POST['id']);
                 foreach($mdp as $m)
                 {if($m['mdp']==$_POST['mdp']){
                    $compteC->setconnected($_POST['id'],'1');
                    if($m['role']=="visiteur")
                    header('Location:../../gestion event/View/acceuil.php') ;
                    if($m['role']=="employe")
                    header('Location:../../gestion event/View/ajouter1.php') ;
                }}
             }
     }
?>
<form action="" method="post">
<input type="text" name="id" id="">
<input type="text" name="mdp">

<a href="recuperer.php" >mot de passe oublié</a>
<input type="submit" value="ok">
</form>
