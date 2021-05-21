<?php 
include_once '../Controller/compteC.php';
include_once '../../vendor/autoload.php';
$sid="AC83c9cc4f217af1b950c206d54d20d184";
$token="cc0cf1e84978c17efdddce51905bbb72";
$client=new Twilio\Rest\Client($sid,$token);
$code=strval(rand(1000,9999));
$compteC = new compteC();
if (isset($_POST['ident'])) {
    echo $_POST['ident'];
   $compteC->changerTAG('1',$_POST['ident']);

$li=$compteC->afficherCompteDetail($_POST['ident']);

foreach ($li as $c ) {
	mail($c['email'],'Recuperation du mot de passe',"Votre code est :".$code,'From: noursen.amami@esprit.tn');
             
}

header('Location:rec.php?code='.$code);

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
						<h3>Donner votre username</h3>
						<input type="text" placeholder="USERNAME" name="ident">
                        <button href="rec.php?<?php echo $code;?>" >Recuperer</a>
						
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