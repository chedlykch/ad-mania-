<?php
include_once '../../entities/article.php';
include_once '../../core/articlec.php';
include_once 'C:\xampp\htdocs\web\projetf\ahmed-noursen\gestionComptes\Controller\compteC.php';


$compteC=new compteC();
$com=$compteC->selectLog();
$error = "";

    // create event
    $article1 = null;

    // create an instance of the controller

    $articlec1 = new articlec();
    
    $listearticle=$articlec1->afficherarticle();
    $con = mysqli_connect("localhost","root","","chedly");  
?>

<html>
<head>
<title>  ANTICO WEBSITE </title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="styleomar.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style3.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
<link href="css/sb-admin.css" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['students', 'contribution'],
         <?php
         $sql = "SELECT * FROM article";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
          echo"['".$result['categorie']."',".$result['id']."],";
          }

         ?>
        ]);

        var options = {
          title: 'STATISTIQUE'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>






</head>
<body>
  <section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="img1/logo.png" > </a><h5 style="color:white"><?php foreach($com as $con){echo $con['nom'];} ?></h5>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto" >
            <li class="nav-item active">
              <a class="nav-link" href="#">EMPLACEMENTS  </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">ABOUT  </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#local">ARTICLES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#MAP">MAP INTERNE </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#price">PAIEMENT EN LIGNE </a>
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
            <img class="d-block img-fluid" src="img1/slide2.png" height="100%" width="100%" >
            <div class="carousel-caption">
              <h5>

               
              </h5>


            </div>
        
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="img1/slide10.jpg" height="200%" width="200%" >
            <div class="carousel-caption">
                <h5>
  
                
                </h5>
  
  
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="img1/slide4.jpg" height="100%" width="100%" >
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
  
  <section id="local">
<div class="container">

<h1> LES ARTICLES </h1>

<form class="" method="POST" name="filtrer"  >
 

 <input type="radio" name="art" id="art" class="tab">
 <label >ART</label>
 <input type="radio" name="musique" id="musique" class="tab">
 <label >MUSIQUE</label>
 <input type="radio" name="livre" id="livre" class="tab">
 <label >LIVRES</label>
 <button class="btn btn-outline-info my-2 my-sm-0" type="submit">FILTRER</button>
  
  

</form>

<form class="form-inline" method="POST" name="rechercher" onsubmit="return validateForm()" >
  <div>     
<input class="form-control mr-sm-2" name="rech" id="rech" type="search"  placeholder="tapez ici" aria-label="Search">
</div>
        <div> <button class="btn btn-outline-info my-2 my-sm-0"  type="submit">  Chercher par nom  </button> </div> 
          
          </div> 

        </form>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script>

            function validateForm() {
                var description = document.forms["rechercher"]["rech"].value;

                if (description == "") {
                    swal("Erreur!", "Le champ Contenu RECHERCHE est vide!", "error");
                    
                    return false;
                }



            }
        </script>
        <?php
         if (isset($_POST["rech"]))
         {
           $listearticle=$articlec1->rechercherarticle($_POST["rech"]);
         }
         
         if (isset($_POST["art"]))
         {
           $listearticle=$articlec1->filtrerarticle("art");
         }
         if (isset($_POST["musique"]))
         {
           $listearticle=$articlec1->filtrerarticle("musique");
         }
          if (isset($_POST["livre"]))
         {
           $listearticle=$articlec1->filtrerarticle("livre");
         }
         
         
                             foreach($listearticle as $article)
                             {
                    
                ?>
           
        
      <div class="row local">   </div> 
      <label> NOM : </label> <div> <h2 class="text-capitalize" id="room"><?php echo $article['nom']; ?></h2>    </div> 
      <label> CATEGORIE : </label>  <div> <h2 class="text-capitalize" id="room"><?php echo $article['categorie']; ?></h2>    </div> 
          <div>    <img src="../img/<?php echo $article['image'] ?>" width="700" height="250">    </div> 
        

          <p><form method="POST" action="../../../mahdi/views/front/commentaire.php">
    <button class="btn btn-primary" type="submit">Commenter</button>
    <input type="hidden" value="<?PHP echo $article['image']; ?>" name="image">
    <input type="hidden" value="<?PHP echo $article['nom']; ?>" name="nom">
</form></p>

<div class="rating"> 
  <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
</div>
<li class="nav-item">
<a class="nav-link " href="paiement.php"> <button type="button" class="btn btn-primary"  >  ACHETER </button> </a>
 </li>

   <?php
    }
    ?>     
    
    <div class="container">
 
 <!-- Button to Open the Modal -->
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
   STATISTIQUE
 </button>

 <!-- The Modal -->
 <div class="modal" id="myModal">
   <div class="modal-dialog">
     <div class="modal-content">
     
       <!-- Modal Header -->
       <div class="modal-header">
         
         <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
       
       <!-- Modal body -->
       
       
       <!-- Modal footer -->
       <div class="modal-footer">
         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
       </div>
       <div id="piechart" style="width: 600px; height: 300px;"></div>
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
<form class="contact-form"  action="mail.php" methode="POST">
  <div class="contact-form">

    <div class="form-group">
      <input type="email" name="mail" id="mail" class="form-control" placeholder="votre email ">
      
      </div>
      <div class="form-group">
        <textarea name="mess" id="mess" class="form-control" rows="7" placeholder="ecrire votre message "></textarea>
        
        </div>
  </div>
  <button type="submit" class="btn btn-primary" href="mail.php?mail=<?php echo $_POST['mail']?>&& mess=<?php echo $_POST['mess']?>"> ENVOYER </button>
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
    <p>MADE BY CHEDLY KCHAOU</p>
  </div>
</section>

<script src="js/smooth-scroll.js"></script>

<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>
  
</body>
</html>

