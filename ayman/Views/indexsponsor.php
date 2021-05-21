<?php
    require_once '../Controller/sponsorController.php';
    $sponsorC =  new SponC();

	$spons = $sponsorC->allSponsors();
  

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Ad-mania</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../assets/css/stylee.css" type="text/css" media="all" />
<script>  
function validateformRecherche(){  
var q=document.searchbox.q.value;  
//var password=document.myform.password.value;  
  
if (q==null || q==""){  
  alert("le recherche ne doit pas etre vide");  
  return false;  
}
return true;
};

function test(){
  return confirm("voulez vous vramient supprimer definitivement?");
}
</script>
</head>
<body>
        <?php include_once 'header.php'; ?>
        <div id="container">
    <div class="shell">
      <!-- Small Nav -->
      <div class="small-nav"> <a href="#">Dashboard</a> <span>&gt;Sponsors list</span> </div>
      <!-- End Small Nav -->
      <!-- Message OK -->
      
      <!-- End Message OK -->
      <!-- Message Error -->
      
      <!-- End Message Error -->
      <br />
      <!-- Main -->
      <div id="main">

      


      
      <div class="box">
      <form onsubmit="return validateformRecherche()" name="searchbox" id= "searchbox" method= "post" action= "recherchesponsor.php">
        <input id= "q" name= "q" type= "text" size= "15" placeholder= "Type here… " />
        <input id= "button-submit" type= "submit" value= "Search" />
      </form>
      </div>
      <div class="box">
        <table class="table">
            <tr class="">
                <td>Nom</td>
                <td>societe</td>
                <td>duree</td>
                <td>Actions</td>
            </tr>
            <?php
              //include_once './config.php';
              //$connection = mysql_connect('localhost', 'root', ''); //The Blank string is the password
              //mysql_select_db('projet');
              foreach ($spons as $row) {
                echo "<tr><td>" . $row['nom'] . "</td><td>" . $row['societe'] . "</td><td>" . $row['duree'] . "</td><td><a href='modifiersponsor.php?id=" . $row['id'] . "'>modifier</a>&nbsp;<a href='supprimersponsor.php?id=" . $row['id'] . "' onClick='return test()'>supprimer</a></td></tr>";
              }
            ?>
         </table>
         </div>
      <div class="box">
        <a href='ajoutersponsor.php' class="button">ajouter sponsor</a>
      </div>
      </div>
      </div>
      </div>
      </div>
</body>
</html>
      