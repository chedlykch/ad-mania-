<style>
body {
	background: #262a2b;
}
.tilesWrap {
	padding: 0;
	margin: 50px auto;
	list-style: none;
	text-align: center;
}
.tilesWrap li {
	display: inline-block;
	width: 20%;
	min-width: 200px;
	max-width: 230px;
	padding: 80px 20px 40px;
	position: relative;
	vertical-align: top;
	margin: 10px;
	font-family: 'helvetica', san-serif;
	min-height: 25vh;
	background: #262a2b;
	border: 1px solid #252727;
	text-align: left;
}
.tilesWrap li h2 {
	font-size: 114px;
	margin: 0;
	position: absolute;
	opacity: 0.2;
	top: 50px;
	right: 10px;
	transition: all 0.3s ease-in-out;
}
.tilesWrap li h3 {
	font-size: 20px;
	color: #b7b7b7;
	margin-bottom: 5px;
}
.tilesWrap li p {
	font-size: 16px;
	line-height: 18px;
	color: #b7b7b7;
	margin-top: 5px;
}
.tilesWrap li a {
	background: transparent;
	border: 1px solid #b7b7b7;
	padding: 10px 20px;
	color: #b7b7b7;
	border-radius: 3px;
	position: relative;
	transition: all 0.3s ease-in-out;
	transform: translateY(-40px);
	opacity: 0;
	cursor: pointer;
	overflow: hidden;
}
.tilesWrap li a:before {
	content: '';
	position: absolute;
	height: 100%;
	width: 120%;
	background: #b7b7b7;
	top: 0;
	opacity: 0;
	left: -140px;
	border-radius: 0 20px 20px 0;
	z-index: -1;
	transition: all 0.3s ease-in-out;
	
}
.tilesWrap li:hover a {
	transform: translateY(5px);
	opacity: 1;
}
.tilesWrap li a:hover {
	color: #262a2b;
}
.tilesWrap li a:hover:before {
	left: 0;
	opacity: 1;
}
.tilesWrap li:hover h2 {
	top: 0px;
	opacity: 0.6;
}

.tilesWrap li:before {
	content: '';
	position: absolute;
	top: -2px;
	left: -2px;
	right: -2px;
	bottom: -2px;
	z-index: -1;
	background: #fff;
	transform: skew(2deg, 2deg);
}
.tilesWrap li:after {
	content: '';
	position: absolute;
	width: 40%;
	height: 100%;
	left: 0;
	top: 0;
	background: rgba(255, 255, 255, 0.02);
}
.tilesWrap li:nth-child(1):before {
	background: #C9FFBF;
background: -webkit-linear-gradient(to right, #FFAFBD, #C9FFBF);
background: linear-gradient(to right, #FFAFBD, #C9FFBF);
}
.tilesWrap li:nth-child(2):before {
	background: #f2709c;
background: -webkit-linear-gradient(to right, #ff9472, #f2709c);
background: linear-gradient(to right, #ff9472, #f2709c);
}
.tilesWrap li:nth-child(3):before {
	background: #c21500;
background: -webkit-linear-gradient(to right, #ffc500, #c21500);
background: linear-gradient(to right, #ffc500, #c21500);
}
.tilesWrap li:nth-child(4):before {
	background: #FC354C;
background: -webkit-linear-gradient(to right, #0ABFBC, #FC354C);
background: linear-gradient(to right, #0ABFBC, #FC354C);
}</style>
<ul class="tilesWrap">
<?php
include_once "../Controller/sponsorController.php";
$i=1;
$sponC=new SponC();
$listeS=$sponC->allSponsors();

foreach($listeS as $s)
{
?>

	<li>
		<h2><?php echo $i?></h2>
		<h3><?php echo $s['nom'] ?></h3>
		<p>
        <?php echo $s['societe'] ?>
		</p>
        <p><?php echo $s['duree'] ;$i=$i+1;?></p>
		<a href="paiement.php">S'abonner</a>
	</li><?php } ?>
	