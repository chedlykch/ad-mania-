<?php


include_once 'C:\xampp\htdocs\web\projetf\ahmed-noursen\gestionComptes\Controller\compteC.php';
include_once(__DIR__ . "/../../core/ReclamationCore.php");

$con = mysqli_connect("localhost","root","","chedly");
$Cmc = new ReclamationCore();
$compteC=new compteC();
$liste=$compteC->selectLog();
foreach($liste as $row){ $id_session =$row['id'];}
$list = $Cmc->AfficherReclamation($id_session);
?>

<html>
<head>
    <title>  ANTICO WEBSITE </title>
    <link rel="stylesheet" href="styleomar.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">


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
        <a class="navbar-brand" href="#"><img src="img1/logo.png" >
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
</div>
<section id="local">
    <div class="container">

        <p style="margin-left: 950px"> <input  id="myInput"  type="text" placeholder="Search..">
        </p>

            <br>
            <br>
            <table class="table " >

                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User ID</th>
                    <th style="width:20px"  scope="col">Reclamation</th>
                    <th style="width:100px" scope="col">Date</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Imprimer</th>
                </tr>

                <tbody  id="myTable">
                <?PHP

                foreach($list as $row){

                ?>
                <tr>
                    <td><?php echo $row['id_reclamation'] ?></td>
                    <td><?php echo $row['id_user'] ?></td>
                    <td><?php echo $row['contenu'] ?></td>
                    <td><?php echo $row['date_publication'] ?></td>

                    <td> <form  method="POST" action="../../Controllers/DeleteReclamation.php">
                            <button  class="btn btn-primary" type="submit">Delete </button>
                            <input type="hidden" value="<?PHP echo $row['id_reclamation']; ?>" name="id_reclamation">
                        </form>
                    </td>
                    <td> <form  method="POST" action="../../Controllers/imprimerReclamation.php">
                            <button  class="btn btn-primary" type="submit">Imprimer</button>
                            <input type="hidden" value="<?PHP echo $row['id_reclamation']; ?>" name="id_reclamation">
                        </form>
                    </td>
        </tr>
        <?PHP
        }
        ?>

        </tbody>
        </table>






        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>

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

