<?php

include_once 'C:\xampp\htdocs\web\projetf\ahmed-noursen\gestionComptes\Controller\compteC.php';
include_once '..\ayman\Controller\publiciteController.php';




$compteC = new CompteC();
$com=$compteC->selectLog();
$a=0;
$listeCo=$compteC->selectLog();
foreach($listeCo as $co){$a=$a+1;}
if($a==0){header('Location:../ahmed-noursen/gestionComptes/View/login.php') ;}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Antico_Acceuil</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
    

        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="logo">
                            
                                <a href="index.html">
                                <img width=25% height=25% src="../chedly/views/front/img/logo.png" alt="">
                                  
                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
                                </a>
                               
                            </div>
                            
                        </div>
                        
                        <div class="col-lg-8 col-md-7 d-none d-lg-block">
                            
                            <div class="row">
                                <div class="col-4">
                                    
                                    <div class="top-bar-item">
                                    <h5 style="color:white"><?php foreach($com as $con){echo $con['nom'];} ?></h5>
                                        <div class="top-bar-icon">
                                        </div>
                                       
                                    </div>
                                </div>
                                
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-call"></i>
                                            
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Contact </h3>
                                            <p>+216 20 990 800</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-send-mail"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Email </h3>
                                            <p>Antico@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                            <h3 style=color:gold>ANTICO</h3>  
                                <a href="../ahmed-noursen/gestion event/View/acceuil.php" class="nav-item nav-link">Evénements</a>
                                <a href="../chedly/views/front/accchedly/acc.php" class="nav-item nav-link">Emplacements</a>
                                <a href="../omar/views/front/accOmar/acc.php" class="nav-item nav-link">Articles</a>
                                <a href="../ayman/Views/frontsponsors.php" class="nav-item nav-link">Sponsors</a>
                                
                              
                                  
                              
                                <a href="report.php" class="nav-item nav-link">Signaler</a>
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="../ahmed-noursen/gestionComptes/View/premium.php?id=<?php 
                                $listeCo=$compteC->selectLog();
                                foreach($listeCo as $co){echo $co['id'];}
                                ?>">Passer en premium</a>
                                <a class="btn" href="../ahmed-noursen/gestionComptes/View/logout.php">Se déconnecter</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->


            <!-- Carousel Start -->
            
               
            
           
   
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/carousel-1.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight"></p>
                            <h1 class="animated fadeInLeft">Un peuple qui ne connaît pas son passé  ressemble à un arbre sans racines </h1>
                            
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/carousel-2.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight"></p>
                            <h1 class="animated fadeInLeft">Tout, tout de suite est l'art antique contemporain de la richesse anoblie</h1>
                           
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/carousel-3.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight"></p>
                            <h1 class="animated fadeInLeft">Le divertissement est le meilleur régime contre le poids de l'existence</h1>
                            
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div> 
            <!-- Carousel End -->
            <!-- Feature Start-->
            <div class="feature wow fadeInUp" data-wow-delay="0.1s">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-worker"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Expert Worker</h3>
                                    <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-building"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Quality Work</h3>
                                    <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>24/7 Support</h3>
                                    <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature End-->
            <!-- Service Start -->
            <div class="service">
                <div class="container">
                    <div class="section-header text-center">
                        <p> Nos services</p>
                        <h2> Composé de : </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="img/service-1.jpg" alt="Image">
                                    <div class="service-overlay">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                        </p>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <h3>Cinéma</h3>
                                    <a class="btn" href="img/service-1.jpg" data-lightbox="service">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="img/service-2.jpg" alt="Image">
                                    <div class="service-overlay">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                        </p>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <h3>Musique</h3>
                                    <a class="btn" href="img/service-2.jpg" data-lightbox="service">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="img/service-3.jpg" alt="Image">
                                    <div class="service-overlay">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                        </p>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <h3>Littérature</h3>
                                    <a class="btn" href="img/service-3.jpg" data-lightbox="service">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="img/service-4.jpg" alt="Image">
                                    <div class="service-overlay">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                        </p>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <h3>Peinture</h3>
                                    <a class="btn" href="img/service-4.jpg" data-lightbox="service">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="img/service-5.jpg" alt="Image">
                                    <div class="service-overlay">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                        </p>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <h3>Théatre</h3>
                                    <a class="btn" href="img/service-5.jpg" data-lightbox="service">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="img/service-6.jpg" alt="Image">
                                    <div class="service-overlay">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                        </p>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <h3>Sculpture</h3>
                                    <a class="btn" href="img/service-6.jpg" data-lightbox="service">+</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service End -->


            <!-- Video Start -->
            <div class="video wow fadeIn" data-wow-delay="0.1s">
                <div class="container">
                    <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/EXj79T876ZU" data-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            
            <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>        
                            <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video End -->


            <!-- Team Start -->
            <div class="testimonial wow fadeIn" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial-slider-nav">
                                <div class="slider-nav"><img src="img/testimonial-1.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-2.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-3.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-4.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-5.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-6.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-1.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-2.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-3.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-4.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-5.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-6.jpg" alt="Testimonial"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial-slider">
                                <div class="slider-item">
                                    <h3>Noursen Amami</h3>
                                    <h4>Responsable  évènements</h4>
                            
                                </div>
                                <div class="slider-item">
                                    <h3>Ahmed Harrabi </h3>
                                    <h4>Administrateur</h4>
                                </div>
                                <div class="slider-item">
                                    <h3>Chedly kchaou </h3>
                                    <h4>Responsable  emplacements </h4>
                               </div>
                                <div class="slider-item">
                                    <h3> Omar Charfi  </h3>
                                    <h4>Responsable  articles</h4>
                                </div>
                                <div class="slider-item">
                                    <h3>Aymen ellouze </h3>
                                    <h4>Responsable  publicités </h4>
                               </div>
                                <div class="slider-item">
                                    <h3>Mahdi jemal</h3>
                                    <h4>Responsable  commentaires</h4>
                               </div>
                               
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team End -->


            <div class="banner animated tada">
 <div class=" big-text animated tada"></div>
  <div></div>
  <a href="#">Go to store</a>
</div>
<style>

.banner {
  width: 100%;
  height: ;
  background:url(http://s6.favim.com/orig/150112/background-cold-gif-nature-Favim.com-2380226.gif);
  /*https://i0.wp.com/media.giphy.com/media/5ERaOy5fQEIAU/giphy.gif*/
  background-size: cover;
  font-size: 80px;
  color: #fff;
  text-align: center;
  padding: 40px 15px;
}

.big-text {
  font-size: 60px;
  font-weight:400;
  animation-delay: 1s;
}
.banner a {
  display: inline-block;
  background: #fff;
  color: #36465d;
  text-transform: uppercase;
  padding: 15px;
  text-decoration: none;
  font-size: 40px;
  transition: .3s;

}
.banner a:hover {
  background: #333;
  color: #fff;
  padding: 15px 20px;
}

</style>
            <!-- Footer Start -->
            <div class="footer wow fadeIn" data-wow-delay="0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-contact">
                                <h2> Contact</h2>
                                <p><i class="fa fa-map-marker-alt"></i>Rue Lyon, Ariana, Tunisie</p>
                                <p><i class="fa fa-phone-alt"></i>+216 71 571 686</p>
                                <p><i class="fa fa-envelope"></i>Antico_site@gmail.com</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Services </h2>
                                <a href="">Cinéma</a>
                                <a href="">Théatre</a>
                                <a href="">Musique</a>
                                <a href="">Peinture</a>
                                <a href="">Sculpture</a>
                                <a href="">Literature</a>
                            </div>
                            </div>
                            
                                
                            
                            
                       
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2> Pages</h2>
                                <a href="">A propos </a>
                                <a href="">Equipe</a>
                                <a href="">Projets</a>
                               
                            </div>
                             <!--
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="newsletter">
                                <h2>Newsletter</h2>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu
                                </p>
                                <div class="form">
                                    <input class="form-control" placeholder="Email here">
                                    <button class="btn">Submit</button>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="">Terms of use</a>
                        <a href="">Privacy policy</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="#">ANTICO </a>, All Right Reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p>Designed By <a href="#"> AD-MANIA</a></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Footer End -->

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
