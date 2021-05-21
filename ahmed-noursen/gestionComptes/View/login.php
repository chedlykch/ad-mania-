<?php
include_once '../Controller/compteC.php';
include_once '../../vendor/autoload.php';
$compteC = new CompteC();
$listeco=$compteC->selectLog();
foreach($listeco as $co){header('Location:../../../acceuil/index.php') ;}
$compteC->reinCONN();
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
             {
				 $mdp=$compteC->verifierLogin($_POST['id']);
                 foreach($mdp as $m)
                 {if($m['mdp']==$_POST['mdp'])
					{$a=0;
					$rep=$compteC->selectRep($_POST['id']);	
					foreach($rep as $r){ header('Location:../../../acceuil/rep.php') ;$a=1;}
					if($a==0){
                    $compteC->setconnected($_POST['id'],'1');
                    if($m['role']=="visiteur")
                    header('Location:../../../acceuil/index.php') ;
                    if($m['role']=="responsable articles")
                    header('Location:../../../omar/views/back/Ajouterarticle.php') ;
					if($m['role']=="responsable evenements")
                    header('Location:../../gestion event/View/ajouter1.php') ;
					if($m['role']=="responsable emplacements")
                    header('Location:../../../chedly/views/back/ajouterlocal.php') ;
					if($m['role']=="responsable publicites")
                    header('Location:../../../ayman/Views/index.php') ;
					if($m['role']=="responsable comptes")
                    header('Location:../../../ahmed-noursen/gestionComptes/View/ajouter1.php') ;
					if($m['role']=="responsable commentaires")
                    header('Location:../../../mahdi/views/back/Ajoutercomm.php') ;}
                }}
             }
     }
?>
<!--
<form action="" method="post">
<input type="text" name="id" id="">
<input type="text" name="mdp">
    
<a href="recuperer.php" >mot de passe oublié</a>
<input type="submit" value="ok">
</form> --> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link href="css/login1.css" rel="stylesheet" media="all">
<body>
	<section class="login">
		<div class="login_box">
			<div class="left">
				<div class="top_link"><a href="#"><img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download" alt="">Return home</a></div>
				<div class="contact">
					<form action="" method="post">
						<h3>SIGN IN</h3>
						<input type="text" placeholder="USERNAME" name="id">
						<input type="password" placeholder="PASSWORD" name="mdp">
                        <a href="recuperer.php" >mot de passe oublié</a>
						<button type="submit" class="submit">LET'S GO</button>
					</form>
				</div>
			</div>
			<div class="right">
				<div class="right-text">
					<h2>LONYX</h2>
					<h5>A UX BASED CREATIVE AGENCEY</h5>
				</div>
				<div class="right-inductor"><img src="" alt=""></div>
			</div>
		</div>
	</section>
</body>
</html>