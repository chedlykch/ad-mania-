<?php
include_once '../../entities/article.php';
include_once '../../core/articlec.php';
$error = "";

    // create event
    $article1 = null;

    // create an instance of the controller

    $articlec1 = new articlec();
    
    $listearticle=$articlec1->afficherarticle();
?>

<html>
<head>
<title>  ANTICO WEBSITE </title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
<link href="css/sb-admin.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>






</head>
<body>
  <section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
            <img class="d-block img-fluid" src="img/slide2.jpg" >
            <div class="carousel-caption">
              <h5>

                NAVIGUEZ ! 
              </h5>


            </div>
        
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="img/896.jpg" >
            <div class="carousel-caption">
                <h5>
  
                  CHERCHER  ! 
                </h5>
  
  
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="img/slide4.jpg" >
            <div class="carousel-caption">
                <h5>
  
                  ET TROUVEZ ! ! 
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
<div class="container">
<div class="row">
    <div class="col-md-6"></div>
    <h2>ABOUT EMPLACEMENTS</h2>
    <div class="about-content">
        chaque museé , theatre , salle de cinema sera equipé d'une map interne disponible 
        sur votre smart phone dans de ladre de faciliter votre déplacement a l'interne de chaque place

    </div>
    <button type="button" class="btn btn-primary"> VOIR PLUS </button>
    <div class="col-md-6  skills-bar">
<p>
    Adobe photoshop 
</p>
<div class="progress">
<div class="progress-bar" style="width: 80% ;"> 80%</div>
</div>
<p>
    DEVELOPPEMENT WEB 
</p>
<div class="progress">
<div class="progress-bar" style="width: 85% ;"> 85%</div>
</div>
<p>
    module EMPLACEMENTS
</p>
<div class="progress">
<div class="progress-bar" style="width: 75% ;"> 75%</div>
</div>
<p>
    GITHUB
</p>
<div class="progress">
<div class="progress-bar" style="width: 50% ;"> 50%</div>
</div>



    </div>

</div>


</div>


  </section>
  
 
<section id="local">
<div class="container">
<h1> LES ARTICLES </h1>
<form class="form-inline" method="POST"   >
          <input class="form-control mr-sm-2" name="rech" id="rech" type="search"  placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
        </form>
<?php
if (isset($_POST["rech"]))
{
  $listearticle=$articlec1->rechercherarticle($_POST["rech"]);
}

                    foreach($listearticle as $article)
                    {
                ?>
<div class="row local">

<div class="col-md-3 text-center">

      
    <h2 class="text-capitalize" id="room"><?php echo $article['nom']; ?></h2>
                
                <div class="row">
                    <div class=""> 
        
                        <img src="../img/<?php echo $article['image'] ?>" width="250" height="250">
                    </div>
<div class="rating"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
</div>
</div>           
                    <li class="nav-item">
                <a class="nav-link " href="#price"> <button type="button" class="btn btn-primary"  >  ACHETER </button> </a>
              </li>
                    <?php
                    }
                ?>     
    </p>
  </div>

</div>




</section>
<section id="MAP">
    <div class="container">
        <h1> TAB MAP_INTERNE</h1>
        <div class="row local">
        <div class="col-md-3 text-center">
          <div class="icon">
            <i class="fas fa-map-marked-alt"></i>
          </div>  
          <h3>  FACILE  </h3>
          <p>
            Une carte de positionnement est l'objectif ou le positionnement technique 
            d'une marque par rapport à d'autres marques. Pour créer une carte de positionnement, deux attributs cibles sont nécessaires 
        
          </p>
        </div>
        <div class="col-md-3 text-center">
            <div class="icon">
                <i class="fas fa-car"></i>
            </div>  
            <h3> TEMPS </h3>
            <p>
              Une carte de positionnement est l'objectif ou le positionnement technique 
              d'une marque par rapport à d'autres marques. Pour créer une carte de positionnement, deux attributs cibles sont nécessaires 
          
            </p>
          </div>
          <div class="col-md-3 text-center">
            <div class="icon">
                <i class="fas fa-film"></i>
            </div>  
            <h3> EFFICACE </h3>
            <p>
              Une carte de positionnement est l'objectif ou le positionnement technique 
              d'une marque par rapport à d'autres marques. Pour créer une carte de positionnement, deux attributs cibles sont nécessaires 
          
            </p>
          </div> <div class="col-md-3 text-center">
            <div class="icon">
                <i class="fas fa-film"></i>
            </div>  
            <h3> INNOVATIVE</h3>
            <p>
              Une carte de positionnement est l'objectif ou le positionnement technique 
              d'une marque par rapport à d'autres marques. Pour créer une carte de positionnement, deux attributs cibles sont nécessaires 
          
            </p>
          </div>
    </div>





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
    <li><i class="fa fa-check-circle" ></i>espaceeeeeeeeee</li>
    <li><i class="fa fa-check-circle" ></i>ssssssssssssssssssssss</li>
    <li><i class="fa fa-check-circle" ></i>hhhhhhhhhhhhhhhhhhhhhh</li>
    <li><i class="fa fa-times-circle" ></i>hhhhhhhhhhhhhhhhhhhhhh</li>
    <li><i class="fa fa-times-circle" ></i>hhhhhhhhhhhhhhhhhhhhhh</li>

  </ul>
</div>
<div class="price-button">
  <a class="buy-btn" href="#">REJOINDRE  </a>
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
  <li><i class="fa fa-check-circle" ></i>espaceeeeeeeeee</li>
  <li><i class="fa fa-check-circle" ></i>ssssssssssssssssssssss</li>
  <li><i class="fa fa-check-circle" ></i>hhhhhhhhhhhhhhhhhhhhhh</li>
  <li><i class="fa fa-times-circle" ></i>hhhhhhhhhhhhhhhhhhhhhh</li>
  <li><i class="fa fa-times-circle" ></i>hhhhhhhhhhhhhhhhhhhhhh</li>
</ul>
</div>
<div class="price-button">
<a class="buy-btn" href="#">PAYER </a>
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
<li><i class="fa fa-check-circle" ></i>espaceeeeeeeeee</li>
<li><i class="fa fa-check-circle" ></i>ssssssssssssssssssssss</li>
<li><i class="fa fa-check-circle" ></i>hhhhhhhhhhhhhhhhhhhhhh</li>
<li><i class="fa fa-times-circle" ></i>hhhhhhhhhhhhhhhhhhhhhh</li>
<li><i class="fa fa-times-circle" ></i>hhhhhhhhhhhhhhhhhhhhhh</li>

</ul>
</div>
<div class="price-button">
<a class="buy-btn" href="#">PAYER </a>
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
<li><i class="fa fa-check-circle" ></i>espaceeeeeeeeee</li>
<li><i class="fa fa-check-circle" ></i>ssssssssssssssssssssss</li>
<li><i class="fa fa-check-circle" ></i>hhhhhhhhhhhhhhhhhhhhhh</li>
<li><i class="fa fa-times-circle" ></i>hhhhhhhhhhhhhhhhhhhhhh</li>
<li><i class="fa fa-times-circle" ></i>hhhhhhhhhhhhhhhhhhhhhh</li>

</ul>
</div>
<div class="price-button">
<a class="buy-btn" href="#">PAYER </a>
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
<form class="contact-form">
  <div class="contact-form">
<div class="form-group">
<input type="text" class="form-control" placeholder="votre nom ">

</div>
<div class="form-group">
  <input type="text" class="form-control" placeholder="votre prenom ">
  
  </div>
  <div class="form-group">
    <input type="number" class="form-control" placeholder="votre numéro portable ">
    
    </div>
    <div class="form-group">
      <input type="email" class="form-control" placeholder="votre email ">
      
      </div>
      <div class="form-group">
        <textarea  class="form-control" rows="7" placeholder="ecrire votre message "></textarea>
        
        </div>
  </div>
  <button type="submit" class="btn btn-primary"> ENVOYER </button>
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

