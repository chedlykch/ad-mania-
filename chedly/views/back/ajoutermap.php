<?php
include_once '../../entities/map.php';
include_once '../../core/mapc.php';
$error = "";

    
    $map1 = null;

    

    $mapc1 = new mapc();
    if (
        isset($_POST["id"]) && 
          isset($_POST["type"]) && 
        isset($_POST["nom"]) && 
        isset($_POST["image"])
    ) {
        if (
           // !empty($_POST["id"]) && 
            !empty($_POST["type"]) && 
            !empty($_POST["nom"]) &&
            !empty($_POST["image"]) 
        ) {
            $map1 = new map(
             // $_POST["id"],
              $_POST["type"],
              $_POST["nom"], 
              $_POST["image"]
            );
            $mapc1->ajoutermap($map1);
            
            
        }
        else
            $error = "Missing information";
    }
    $listemap=$mapc1->affichermap();
     

?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>antico</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/s1.css" type="text/css" media="all" />
</head>
<body>
<!-- Header -->
<div id="header">
  <div class="shell">
    <!-- Logo + Top Nav -->
    <div id="top">
      <h1><a href="#">Antico</a></h1>
      <div id="top-navigation"><a href="../../../ahmed-noursen/gestionComptes/View/logout.php">Log out</a> </div>
    </div>
    <!-- End Logo + Top Nav -->
    <!-- Main Nav -->
    <div id="navigation">
      <ul>
      <li><a href="ajouterlocal.php"><span>Local</span></a></li>
        <li><a href="ajoutermap.php"><span>Map</span></a></li>
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
    <div class="small-nav"> <a href="#">Dashboard</a> <span>&gt;</span> Current map </div>
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
          <div class="box-head">
            <h2 class="left">Current map</h2>
            <form  method="POST"  name="rechercher" onsubmit="return validateForm1()" >
            <div class="right">
              <label>search map</label>
              
              <input type="text"  name="rech" id="rech" class="field small-field" />
              <input type="submit" class="button" value="search" />
            </div>
            </form>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>

    function validateForm1() {
        var description = document.forms["rechercher"]["rech"].value;

        if (description == "") {
            swal("Erreur!", "un champ  est vide!", "error");
            
            return false;
        }



    }
</script>
            
          </div>
          <!-- End Box Head -->
          <!-- Table -->
          <div class="table">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                
                <th>id</th>
                <th>type</th>
                <th>nom</th>
                <th>photo</th>
              </tr>
              <?PHP
              if (isset($_POST["rech"]))
              {
                $listemap=$mapc1->recherchermap($_POST["rech"]);
              }
              
				foreach($listemap as $map){
			?>
				<tr>
					<td><?PHP echo $map['id'];  ?></td>
					<td><?PHP echo $map['type']; ?></td>
					<td><?PHP echo $map['nom']; ?></td>
          <td><img style="
             width: 50px;
            " src="../img/<?php echo $map['photo']?>"></td>
					<td>
					<td>
           
						<form method="GET"  action="supprimermap.php" > 
						<a href="supprimermap.php?id=<?php echo $map['id']?>" class="ico del">supprimer</a>
            <input type="hidden" value=<?PHP echo $map['id']; ?> name="id">
            <?php $s=$map['id']; ?>
						</form>
					</td>
					<td>
          <a href="modifiermap.php?id=<?php echo $map['id']?>&& type=<?php echo $map['type']?> && nom=<?php echo $map['nom']?>" class="<ico edit">MODIFIER</a>
					</td>
				</tr>
        <?PHP
				}
			?>
       
              
            </table>
            <!-- Pagging -->
            <div class="pagging">
              <div class="left">Showing 1-12 of 44</div>
              <div class="right"> <a href="#">Previous</a> <a href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">245</a> <span>...</span> <a href="#">Next</a> <a href="#">View all</a> </div>
            </div>
            <!-- End Pagging -->
          </div>
          <!-- Table -->
        </div>
        <!-- End Box -->
        <!-- Box -->
        <div class="box">
          <!-- Box Head -->
          <div class="box-head">
            <h2>Add New aricle </h2>
          </div>
          <!-- End Box Head -->
          <form action="" method="POST" class="login-html"  name="ajouter" onsubmit="return validateForm()">
            <table border="0" align="center">

                <tr>
                    
                    <td>
                        <label for="id">id:
                        </label>
                    </td>
                    <td><input type="text" name="id" value="AUTO_ID"  readonly id="id" maxlength="50" class="tab"></td>
                </tr>
                <tr>
                    <td>
                        <label for="type">type:
                        </label>
                    </td>
                    <td><input type="text" name="type" id="type" maxlength="50" class="tab"></td>
</textarea></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="nom" >nom:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="nom" id="nom" class="tab">
                    </td>
                </tr>
                <tr>
                    
                <div class="form-group">
                                
                                <input class="form-control"  id="image" name="image" type="file" placeholder="image"   />
                                                           </div>
                                                         
                                                             </div>
                </tr>
               
               
            </table>
            <input type="submit" value="Envoyer" class="button"> 
                    
                   
        </form>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script>

            function validateForm() {
                var description = document.forms["ajouter"]["nom"].value;

                if (description == "") {
                    swal("Erreur!", "un champ  est vide!", "error");
                    
                    return false;
                }



            }
        </script>
        </div>
        <!-- End Box -->
      </div>
      <!-- End Content -->
      <!-- Sidebar -->
      <div id="sidebar">
        <!-- Box -->

        </div>
        <!-- End Box -->
      </div>
      <!-- End Sidebar -->
      <div class="cl">&nbsp;</div>
    </div>
    <!-- Main -->
  </div>
</div>
<!-- End Container -->
<!-- Footer -->
<div id="footer">
  <div class="shell"> <span class="left">&copy; 2010 - CompanyName</span> <span class="right"> Design by <a href="http://chocotemplates.com">Chocotemplates.com</a> </span> </div>
</div>
<!-- End Footer -->
</body>
</html>