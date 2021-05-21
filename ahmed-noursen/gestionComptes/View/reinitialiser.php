
<?php
include_once '../Controller/compteC.php';
if(isset($_POST['mdp']))
{
    $compteC=new compteC();
    $li=$compteC->tag();
    foreach($li as $co)
    {$compteC->changerMDP($co['id'],$_POST['mdp']);
        $compteC->changerTAG('0',$co['id']);}
        header('Location:login.php');
}



?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link href="css/login1.css" rel="stylesheet" media="all">
<body>
	<section class="login">
		<div class="login_box">
			<div class="left">
				<div class="top_link"><a href="#"><img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download" alt="">Return home</a></div>
				<div class="contact">
					<form action="" method="post">
						<h3>SAISISSEZ VOTRE NOUVELLE MOT DE PASSE</h3>
                        <input type="text" name="mdp" placeholder="Nouveau mot de passe">
                        <input type="submit" value="submit">
						
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