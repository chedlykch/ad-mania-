<?php
    require_once '../Controller/publiciteController.php';
   
    $pubC =  new PubC();
    $listes=$pubC->stat();
	$pubs = $pubC->allPublicite();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Ad-mania</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->


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
        <div class="small-nav"> <a href="#">Dashboard</a> </div>
        <br />
        <!-- Main -->
          <div id="main">
            <div class="box">
              <form onsubmit="return validateformRecherche()" name="searchbox" id= "searchbox" method= "post" action= "recherchepublicite.php">
                <input id="id" name= "q" type= "text" size= "15" placeholder="Type here… " />
                <input id= "button-submit" type= "submit" value= "Search" />
              </form>
            </div>
            <table class="table" >
            <tr >
                <td style="color:blue;">Nom</td>
                <td style="color:blue;">Type</td>
                <td style="color:blue;">article</td>
                <td style="color:blue;">Prix</td>
                <td style="color:blue;">Mail</td>
                <td style="color:blue;">Id sponsor</td>
                <td style="color:blue;">Actions</td>
            </tr>
            <?php
              //include_once './config.php';
              //$connection = mysql_connect('localhost', 'root', ''); //The Blank string is the password
              //mysql_select_db('projet');
              foreach ($pubs as $row) {
                if ($row['paye']==true){
                echo "<tr><td>" . $row['nom'] . "</td><td>" . $row['type'] . "</td><td>" . $row['id_article'] . "</td><td>" . $row['prix'] . "</td><td>" . $row['mail'] . "</td><td>" . $row['id_sponsor'] . "</td><td><a href='modifierpublicite.php?id=" . $row['id'] . "'>modifier</a>&nbsp;<a href='supprimerpublicite.php?id=" . $row['id'] . "' onClick='return test()'>supprimer</a></td></tr>";
                }else{
                echo "<tr><td>" . $row['nom'] . "</td><td>" . $row['type'] . "</td><td>" . $row['id_article'] . "</td><td>" . $row['prix'] . "</td><td>" . $row['mail'] . "</td><td>" . $row['id_sponsor'] . "</td><td><a href='modifierpublicite.php?id=" . $row['id'] . "'>modifier</a>&nbsp;<a href='supprimerpublicite.php?id=" . $row['id'] . "' onClick='return test()'>supprimer</a>&nbsp;<a href='paiementindividuel.php?id=" . $row['id'] . "'>payer</a></td></tr>";

                }
              }
            ?>
            </table>
            <div class="box table">
              <a href='ajouterpublicite.php' class="button">ajouter publicite</a>
            </div>
              <center><a href='paiement.php' class="button displayed" >Payer en ligne</a></center>
          </div>
          <div id="piechart"> </div>
        </div>
        
      </div>
     
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
    
  var data = google.visualization.arrayToDataTable([
   
  [ 'kkk', 'Hours per Day'],
  <?php
  foreach($listes as $s){
   echo "["; echo "'";echo $s['type'];echo"'";echo",";echo $s['count(*)'];echo"],";}?>



  

  
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Publicités', 'width':750, 'height':400};

  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
</body>
</html>
      