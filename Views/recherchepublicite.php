<?php
    require_once '../Controller/publiciteController.php';
    $publiciteC =  new PubC();
    if ($_POST['q'])
	$pubs = $publiciteC->rechercherPublicite($_POST['q']);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Ad-mania</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../assets/css/style.css" type="text/css" media="all" />

<script>  
function validateformRecherche(){  
var q=document.searchbox.q.value;  
//var password=document.myform.password.value;  
  
if (q==null || q==""){  
  alert("la recherche ne doit pas etre vide");  
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

      


      </div>
      </div>
      </div>
      <div class="box">
      <form onsubmit="return validateformRecherche()" name="searchbox" id= "searchbox" method= "post" action= "recherchepublicite.php">
        <input id="id" name= "q" type= "text" size= "15" placeholder= "Type here… " />
        <input id= "button-submit" type= "submit" value= "Search" />
      </form>
      </div>
      <div class="box">
        <table class="table">
            <tr class="">
                <td>Nom</td>
                <td>Type</td>
                <td>article</td>
                <td>Prix</td>
                <td>Actions</td>
            </tr>
            <?php
              //include_once './config.php';
              //$connection = mysql_connect('localhost', 'root', ''); //The Blank string is the password
              //mysql_select_db('projet');
              if (empty($pubs)){
                echo "rien n'est trouvé";

              }else{
              foreach ($pubs as $row) {
                echo "<tr><td>" . $row['nom'] . "</td><td>" . $row['type'] . "</td><td>" . $row['id_article'] . "</td><td>" . $row['prix'] . "</td><td><a href='modifierpublicite.php?id=" . $row['id'] . "'>modifier</a>&nbsp;<a href='supprimerpublicite.php?id=" . $row['id'] . "' onClick='return test()'>supprimer</a></td></tr>";
              }}
            ?>
         </table>
         </div>
      <div class="box">
        <a href='ajouterpublicite.php'>ajouter publicite</a>
        <a href='index.php'>liste complete (retour)</a>
      </div>
      </div>
</body>
</html>
      