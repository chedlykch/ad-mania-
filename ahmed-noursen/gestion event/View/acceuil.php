<?php
include_once '../Controller/EvenementC.php';
include_once '../../vendor/autoload.php';
include_once 'C:\xampp\htdocs\web\projetf\ahmed-noursen\gestionComptes\Controller\compteC.php';


$sid="AC83c9cc4f217af1b950c206d54d20d184";
$token="c5a5aa0ffd22c1626ea68cf71f66f946";
$client=new Twilio\Rest\Client($sid,$token);
$eventC=new EventC();

$compteC=new compteC();
$com=$compteC->selectLog();
$listesms=$eventC->smsrappel();

foreach($listesms  as $part)
{
  $num="+216".$part['numtel_compte'];
  $client->messages->create(
    // Where to send a text message (your cell phone?)
    $num,
    array(
        'from' => "+13367702248",
        'body' => 'il reste 3 jours'
    ));     
 
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Dream Pulse TemplateMo</title>
<!--
DREAM PULSE
https://templatemo.com/tm-536-dream-pulse
-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="slick/slick.css"/>    
    <link rel="stylesheet" href="slick/slick-theme.css"/>    
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/templatemo-dream-pulse.css" />
  </head>
  <body>
    <main class="container-fluid">
      <div class="row">        
          <nav id="tmSidebar" class="tm-bg-black-transparent tm-sidebar">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>
            <div class="tm-sidebar-sticky">
            <a href="../../gestionComptes/View/logout.php">Log out</a>
            <h5 style="color:white"><?php foreach($com as $con){echo $con['nom'];} ?></h5>
              <div class="tm-brand-box">
                <div class="tm-double-border-1">
                  <div class="tm-double-border-2">
                
                    <h1 class="tm-brand text-uppercase">Antico</h1>
                  </div>
                </div>
              </div>

              <ul id="tmMainNav" class="nav flex-column text-uppercase text-right tm-main-nav">
                <li class="nav-item">
                  <a href="#intro" class="nav-link active">
                    <span class="d-inline-block mr-3">Intro</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index2.php" class="nav-link">
                    <span class="d-inline-block mr-3">Evénement</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index3.php" class="nav-link">
                    <span class="d-inline-block mr-3">Organisateur</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
              
                
              </ul>
              
              <footer class="text-center text-white small">
                <p class="mb--0 mb-2">Copyright 2020 Dream Pulse</p>
                <p class="mb-0">Design:
                  <a rel="nofollow" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
                </p>
              </footer>
            </div>
          </nav>
          
          <main role="main" class="ml-sm-auto col-12">
            <div
              class="parallax-window"
              data-parallax="scroll"
              data-image-src="hihi.jpg">
              <div class="tm-section-wrap">
                <section id="intro" class="tm-section">
                    <div class="tm-bg-white-transparent tm-intro">
                        <h2 class="tm-section-title mb-5 text-uppercase tm-color-primary">Introducing Dream Pulse</h2>
                        <p class="tm-color-gray">
                          This box alpha 30 percent. Left sidebar is a sticky element.
                          Right side Contents are scrolling up and down. This background has a
                          parallax effect.
                        </p>
                        <p class="mb-0 tm-color-gray">
                          Dream Pulse is a Bootstrap 4.3.1 template designed for your websites. You can modify this layout as you like.
                        </p>
                    </div>              
                </section>
            </div>            
          </div>

        
            
         
            
         
        </main>        
      </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/templatemo-scripts.js"></script>
  </body>
</html>