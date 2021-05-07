<?php
include_once(__DIR__ . "/../services/CommentaireArService.php");

// SESSION FOR LATER
/*
 * session_start();
 if (empty($_SESSION['id']))
 {
     echo "<script type='text/javascript'>";
echo "alert('Please Login First');
window.location.href='../login.html';";
echo "</script>";


 }
 */
$Srvc =new CommentaireArticleService();
$listcom =$Srvc->afficherCommentaireArticle();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>SpringTime</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<!-- Header -->
<div id="header">
    <div class="shell">
        <!-- Logo + Top Nav -->
        <div id="top">
            <h1><a href="#">Antico</a></h1>
            <div id="top-navigation"> Welcome <a href="#"><strong>Administrator</strong></a> <span>|</span> <a href="#">Help</a> <span>|</span> <a href="#">Profile Settings</a> <span>|</span> <a href="#">Log out</a> </div>
        </div>
        <!-- End Logo + Top Nav -->
        <!-- Main Nav -->
        <div id="navigation">
            <ul>
                <li><a href="#" class="active"><span>Dashboard</span></a></li>
                <li><a href="#"><span>New Articles</span></a></li>
                <li><a href="#"><span>User Management</span></a></li>
                <li><a href="#"><span>Photo Gallery</span></a></li>
                <li><a href="#"><span>Products</span></a></li>
                <li><a href="#"><span>Services Control</span></a></li>
            </ul>
        </div>
        <!-- End Main Nav -->
    </div>
</div>
<!-- End Header -->
<!-- Container -->
<div id="container">
    <div class="shell">
        <!-- Small Nav -->
        <div class="small-nav"> <a href="#">Dashboard</a> <span>&gt;</span> Modifier Commentaire Article</div>
        <!-- End Small Nav -->
        <!-- Message OK -->

        <!-- End Message OK -->
        <!-- Message Error -->

        <!-- End Message Error -->
        <br />
        <!-- Main -->
        <div id="main">
            <div class="cl">&nbsp;</div>
            <!-- Content -->
            <div id="content">
                <!-- Box -->
                <div class="box">
                    <!-- Box Head -->

                    <!-- End Box Head -->
                    <!-- Table -->

                    <!-- Pagging -->

                    <!-- End Pagging -->
                </div>
                <!-- Table -->
            </div>
            <br> <br>
 <div class="box">
    <!-- Box Head -->
    <div class="box-head">
        <h2 class="left">Current Comments</h2>
        <div class="right">
            <label>search Comment</label>
            <input type="text" class="field small-field" />
            <input type="submit" class="button" value="search" />
        </div>
    </div>
 </div>
    <!-- End Box Head -->
    <!-- Table -->
            <div class="table">
    <table >
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">id_article</th>
            <th scope="col">id_user</th>
            <th scope="col">date_pub </th>
            <th scope="col">date_mod </th>
            <th scope="col">contenu</th>
            <th scope="col">etat</th>
            <th scope="col">Delete</th>
            <th scope="col">Update</th>
            <th scope ="col">Main Comment</th>

        </tr>
        </thead>
        <tbody  id="myTable">
        <?PHP

        foreach($listcom as $row){

            ?>
            <tr>
                <th scope="row"><?php echo $row['identifiant'] ?></th>

                <td><?php echo $row['id_article'] ?></td>
                <td><?php echo $row['id_user'] ?></td>
                <td><?php echo $row['date_pub'] ?></td>
                <td><?php echo $row['date_mod'] ?></td>
                <td><?php echo $row['contenu'] ?></td>
                <td><?php echo $row['etat'] ?></td>
                <td>
                    <form method="POST" action="DeleteCommentaireArticleC.php">
                        <button class="btn btn-primary" type="submit"><i class="material-icons">Delete</i> </button>
                        <input type="hidden" value="<?PHP echo $row['identifiant']; ?>" name="id">
                    </form>
                </td>
                <td> <a class="btn btn-primary"  href="ModifierCommentaireArticleView.php?id=<?PHP echo $row['identifiant']; ?>"><i>EDIT</i></a>
                </td>
                <td> <a class="btn btn-primary"  href="afficherlesparticipation_event.php?id=<?PHP echo $row['identifiant']; ?>"><i class="material-icons">View Comment</i></a>
                </td>
            </tr>
            <?php

        }
        ?>

        </tbody>
    </table>
                <div> <a class="btn btn-primary" style="background-color: cornflowerblue"  href="AjouterCommentaireArticleView.php"><i>ADD</i></a></div>

            </div>
    <!-- Table -->

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


<!-- LIBS INCLUDE ---->
 <!-- Jquery Core Js -->
 <script src="plugins/jquery/jquery.min.js"></script>

 <!-- Bootstrap Core Js -->
 <script src="plugins/bootstrap/js/bootstrap.js"></script>

 <!-- Select Plugin Js -->
 <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

 <!-- Slimscroll Plugin Js -->
 <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

 <!-- Waves Effect Plugin Js -->
 <script src="plugins/node-waves/waves.js"></script>

 <!-- Jquery CountTo Plugin Js -->
 <script src="plugins/jquery-countto/jquery.countTo.js"></script>

 <!-- Morris Plugin Js -->
 <script src="plugins/raphael/raphael.min.js"></script>
 <script src="plugins/morrisjs/morris.js"></script>

 <!-- ChartJs -->
 <script src="plugins/chartjs/Chart.bundle.js"></script>

 <!-- Flot Charts Plugin Js -->
 <script src="plugins/flot-charts/jquery.flot.js"></script>
 <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
 <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
 <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
 <script src="plugins/flot-charts/jquery.flot.time.js"></script>

 <!-- Sparkline Chart Plugin Js -->
 <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

 <!-- Custom Js -->
 <script src="js/admin.js"></script>
 <script src="js/pages/index.js"></script>

 <!-- Demo Js -->
 <script src="js/demo.js"></script>

</body>
</html>


