<?php
include_once '../../entities/article.php';
include_once '../../core/articlec.php';
$error = "";

    // create event
    $article1 = null;

    // create an instance of the controller

    $articlec1 = new articlec();
    if (
        //isset($_POST["id"]) && 
         isset($_POST["categorie"]) && 
        isset($_POST["nom"]) && 
        isset($_POST["disponibilite"]) &&
        isset($_POST["image"])
    ) {
        if (
            //!empty($_POST["id"]) && 
            !empty($_POST["categorie"]) && 
            !empty($_POST["nom"]) &&
            !empty($_POST["disponibilite"]) &&
            !empty($_POST["image"]) 
        ) {
            $article1 = new article(
             // $_POST["id"],
              $_POST["categorie"],
              $_POST["nom"], 
              $_POST["disponibilite"],
              $_POST["image"]
            );
            $articlec1->ajouterarticle($article1);
            
            //header('Location:afficherUtilisateurs.php');
        }
        else
            $error = "Missing information";
    }
    $listearticle=$articlec1->afficherarticle();
     

?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>antico</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/s8.css" type="text/css" media="all" />
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
      <li><a href="Ajouterarticle.php"><span>Articles</span></a></li>
        <li><a href="Ajouterart.php"><span>Arts</span></a></li>
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
    <div class="small-nav"> <a href="#">Dashboard</a> <span>&gt;</span> Current Articles </div>
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
            <h2 class="left">Current Articles</h2>
            <form method="POST"  name="rechercher" onsubmit="return validateForm1()"   >     
             <div class="right">
              <label>search articles</label>
              <input type="text" name="rech" id="rech" class="field small-field" />
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
                <th>categorie</th>
                <th>nom</th>
                <th>disponibilite </th>
                <th>image</th>
              </tr>
              <?PHP
              if (isset($_POST["rech"]))
              {
                $listearticle=$articlec1->rechercherarticle($_POST["rech"]);
              }
				foreach($listearticle as $article){
			?>
				<tr>
					<td><?PHP echo $article['id'];  ?></td>
					<td><?PHP echo $article['categorie']; ?></td>
					<td><?PHP echo $article['nom']; ?></td>
          <td><?PHP echo $article['disponibilite']; ?></td>
          <td><img style="
             width: 50px;
            " src="../img/<?php echo $article['image'] ?>"></td>
					<td>
           
						<form method="POST"  action="supprimerarticle.php" > 
						<a href="supprimerarticle.php?id=<?PHP echo $article['id']; ?>" class="ico del">Delete</a>
            <input type="hidden" value=<?PHP echo $article['id']; ?> name="id">
            <?php $s=$article['id']; ?>
						</form>
					</td>
					<td>
          <a href="modifierarticle.php?id=<?PHP echo $article['id']; ?>&&categorie=<?PHP echo $article['categorie']; ?>&&nom=<?PHP echo $article['nom']; ?>&&image=<?PHP echo $article['image']; ?>" class="ico edit">Edit</a>
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
          <form action="" method="POST" class="login-html" name="ajouter" onsubmit="return validateForm()">
            <table border="0" align="center">

                <tr>
                    
                    <td>
                        <label for="id">id:
                        </label>
                    </td>
                    <td><input type="text" name="id" id="id" maxlength="50" class="tab" value="AUTI ID" readonly ></td>
                </tr>
                <tr>
                    <td>
                        <label for="categorie">categorie:
                        </label>
                    </td>
                    <td><input type="text" name="categorie" id="categorie" maxlength="50" class="tab"></td>
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
                    
                <td>
                        <label for="disponibilite" >disponible 
                        </label>
                    </td>
                    <td>
                        <input type="radio" name="disponibilite" id="disponibilite" class="tab">
                    </td>
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

