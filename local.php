<?php
include_once '../../entities/local.php';
include_once '../../core/localc.php';





$error = "";
    // create event
   
    $local1 = null;

    // create an instance of the controller

   
    $localc1 = new localc();
    $listelocal=$localc1->afficherlocal();
?>












<html>
<head>
<title>  ANTICO WEBSITE </title>
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="style1.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>




</head>
<body >

<div>
  <section id="nav-bar">
      
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="#"><img src="img/logo.png" > </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto" >
            <li class="nav-item active">
              <a class="nav-link" href="#">EMPLACEMENTS  </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">DATE  </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link " href="#MAP">LOCAL </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#map">GOOGLE MAPS </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#price">OFFRES </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#contact">CONTACT </a>
              </li>
          </ul>
        </div>
      </nav>




  </section>
  <div id="slider">
    <div id="headerSlider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
          <li data-target="#headerSlider" data-slide-to="1"></li>
          <li data-target="headerSlider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block img-fluid" src="img/slide2.jpg" >
            <div class="carousel-caption">
              <h5>

            
              </h5>


            </div>
        
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="img/896.jpg" >
            <div class="carousel-caption">
                <h5>
  
               
                </h5>
  
  
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="img/slide4.jpg" >
            <div class="carousel-caption">
                <h5>

                </h5>
  
  
              </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      



  </div>
  <section id="about">
  <body onload="initClock()">

    <!--digital clock start-->
    <div class="datetime">
      <div class="date">
        <span id="dayname">Day</span>,
        <span id="month">Month</span>
        <span id="daynum">00</span>,
        <span id="year">Year</span>
      </div>
      <div class="time">
        <span id="hour">00</span>:
        <span id="minutes">00</span>:
        <span id="seconds">00</span>
        <span id="period">AM</span>
      </div>
    </div>
    <!--digital clock end-->

    <script type="text/javascript">
    function updateClock(){
      var now = new Date();
      var dname = now.getDay(),
          mo = now.getMonth(),
          dnum = now.getDate(),
          yr = now.getFullYear(),
          hou = now.getHours(),
          min = now.getMinutes(),
          sec = now.getSeconds(),
          pe = "AM";

          if(hou >= 12){
            pe = "PM";
          }
          if(hou == 0){
            hou = 12;
          }
          if(hou > 12){
            hou = hou - 12;
          }

          Number.prototype.pad = function(digits){
            for(var n = this.toString(); n.length < digits; n = 0 + n);
            return n;
          }

          var months = ["January", "February", "March", "April", "Mai", "June", "July", "Augest", "September", "October", "November", "December"];
          var week = ["Dimanche", "Monday", "Tuesday", "Wednesday", "Thursday", "Vendredi", "Saturday"];
          var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
          var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
          for(var i = 0; i < ids.length; i++)
          document.getElementById(ids[i]).firstChild.nodeValue = values[i];
    }

    function initClock(){
      updateClock();
      window.setInterval("updateClock()", 1);
    }
    </script>
  </section>


  <section id="map">
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAV5T9nRGV6Efmgsw_QH9ECfARRfE5Wagc"></script>
  <script>
var myCenter = new google.maps.LatLng(36.899765176566085, 10.18912665185335);
function initialize(){
    var mapProp = {
        center:myCenter,
        zoom:12,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("map1"),mapProp);

    var marker = new google.maps.Marker({
        position:myCenter,
    });

    marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<div id="map1"></div>
<div class="mapContainer">
    <a class="direction-link" target="_blank" href="//maps.google.com/maps?f=d&amp;36.899765176566085, 10.18912665185335&amp;hl=en"> Get Directions</a>
  

  
</section>


  

<section id="MAP">
  <div class="container">
        <h1> LES LOCAUX</h1>

        <form class="form-inline" method="POST"   >
          <input class="form-control mr-sm-2" name="rech" id="rech" type="search"  placeholder="tapez ici" aria-label="Search">
          <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Chercher par nom de rue </button>
        </form>
      
        <?php
          if (isset($_POST["rech"]))
            {
             $listelocal=$localc1->rechercherlocal($_POST["rech"]);
            }

           foreach($listelocal as $local)
                    {
                ?>
        
      <div class="row local">  </div> 

   
   <label  > Gouvernant : </label> 
  
   <div> <h2 class="text-capitalize" id="room"><?php echo $local['pays']; ?></h2>    </div> 
   <label  > Nom_rue : </label> 
    <div> <h2 class="text-capitalize" id="room"><?php echo $local['nom_rue']; ?></h2>    </div> 
    <label  > Code postal : </label> 
    <div> <h2 class="text-capitalize" id="room"><?php echo $local['codepostal']; ?></h2>    </div> 
     
       
    
               
<div class="rating"> 
  <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
</div>
<li class="nav-item">
                <a class="nav-link " href="#price"> <button type="button" class="btn btn-primary"  >  Reserver maintenant </button> </a>
              </li>

   <?php
    }
    ?>     
   

 

</section>











       
<section id="price">
<div class="container">
  <h1>LISTE DES PRIX</h1>
  <div class="row">
    <div class="col-md-3">
      <div class="single-price">
<div class="price-head">
  <h2> GRATUIT</h2>
  <p> $0<span>MOIS</span>  </p>
</div>
<div class="price-content">
  <ul>
    <li><i class="fa fa-check-circle" ></i>.1 mois gratuit</li>
    <li><i class="fa fa-check-circle" ></i>.usage simple</li>
    <li><i class="fa fa-check-circle" ></i>.Pas de notification</li>
    <li><i class="fa fa-times-circle" ></i> Pas d'information</li>
    <li><i class="fa fa-times-circle" ></i>.Pas d'evaluation</li>

  </ul>
</div>
<div class="price-button">
<a class="buy-btn" href="paiement.php">PAYER </a>
</div>
  </div>
  </div>

  <div class="col-md-3">
    <div class="single-price">
<div class="price-head">
<h2> NORMAL</h2>
<p> $10<span> 3 MOIS</span>  </p>
</div>
<div class="price-content">
<ul>
  <li><i class="fa fa-check-circle" ></i>3 mois d'usage </li>
  <li><i class="fa fa-check-circle" ></i>.usage normal</li>
  <li><i class="fa fa-check-circle" ></i>.notifiaction</li>
  <li><i class="fa fa-times-circle" ></i>.assez d'information</li>
  <li><i class="fa fa-times-circle" ></i>.pas d'evaluation</li>
</ul>
</div>
<div class="price-button">
<a class="buy-btn" href="paiement.php">PAYER </a>
</div>
  </div>
</div>
<div class="col-md-3">
  <div class="single-price">
<div class="price-head">
<h2> GOLD</h2>
<p> $50<span> 6 MOIS</span>  </p>
</div>
<div class="price-content">
<ul>
<li><i class="fa fa-check-circle" ></i>.6 mois d'usage</li>
<li><i class="fa fa-check-circle" ></i>.usage gold</li>
<li><i class="fa fa-check-circle" ></i>.notification</li>
<li><i class="fa fa-times-circle" ></i>.information</li>
<li><i class="fa fa-times-circle" ></i>.evaluation</li>

</ul>
</div>
<div class="price-button">
<a class="buy-btn" href="paiement.php">PAYER </a>
</div>
</div>
</div>
<div class="col-md-3">
  <div class="single-price">
<div class="price-head">
<h2> PREMUIM </h2>
<p> $100<span> 12 MOIS</span>  </p>
</div>
<div class="price-content">
<ul>
<li><i class="fa fa-check-circle" ></i>.12 mois d'usage</li>
<li><i class="fa fa-check-circle" ></i>.usage PREMUIM</li>
<li><i class="fa fa-check-circle" ></i>.notification</li>
<li><i class="fa fa-times-circle" ></i>.infromation</li>
<li><i class="fa fa-times-circle" ></i>evaluation gratuite</li>

</ul>
</div>
<div class="price-button">
<a class="buy-btn" href="paiement.php">PAYER </a>
</div>
</div>
</div>

</div>
  
</div>


</section>
<section id="contact">
<div class="container">
  <h1>CONTACTER </h1>
  <div class=row>
    <div class="col-md-6">




    
<form class="contact-form" methode="POST" action="mail.php">
  <div class="contact-form">

    <div class="form-group">
      <input type="email" name="mail" id="mail" class="form-control" placeholder="votre email ">
      
      </div>
      <div class="form-group">
        <textarea  class="form-control" name="mess" id="mess" rows="7" placeholder="ecrire votre message "></textarea>
        
        </div>
  </div>
  <button type="submit" href="mail.php?mail=<?php echo $_POST['mail']?> && mess=<?php echo $_POST['mess']?> " class="btn btn-primary"> ENVOYER</button>
</form>
    </div>
    <div class="col-md-6 contact-info">
      <div class="follow" > <b>EMAIL </b> ANTICO@GMAIL.COM</div>
   
      <div class="follow" > <b>TELEPHONE </b> +216 20990800</div>
      <div class="follow" > <b>PAGE_FACEBOOK </b> ANTICO</div>
      <div class="follow" > <b>PAGE_INSTAGRAM </b> ANTICO</div>

  </div>
</section>
<section id="footer">

  <div class="container text-center">
    <p>MADE BY ANTICO</p>
  </div>
</section>

<script src="js/smooth-scroll.js"></script>

<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>

</body>
</html>