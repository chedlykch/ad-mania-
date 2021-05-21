<?php
include_once '../../entities/reclamation.php';
include_once '../../core/reclamationcore.php';


$error = "";

    // create event
    $rec1 = null;

    // create an instance of the controller

    $recc1 = new reclamationcore();
   
    $listerec=$recc1->afficherrec();





    
    
?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>antico</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/s9.css" type="text/css" media="all" />
</head>
<body>
<!-- Header -->
<div id="header">
  <div class="shell">
    <!-- Logo + Top Nav -->
    <div id="top">
      <h1><a href="#">Antico</a></h1>
      <div id="top-navigation"> <a href="../../../ahmed-noursen/gestionComptes/View/logout.php">Log out</a> </div>
    </div>
    <!-- End Logo + Top Nav -->
    <!-- Main Nav -->
    <div id="navigation">
      <ul>
        <li><a href="Ajoutercomm.php"><span>commentaires</span></a></li>
        <li><a href="Ajouterrec.php"><span>reclamations</span></a></li>
        
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
    <div class="small-nav"> <a href="#">Dashboard</a> <span>&gt;</span> Current commentaires </div>
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
            <h2 class="left">Current reclamation</h2>
            <form method="POST"   name="rechercher"    >     
             <div class="right">
              <label>search reclamation</label>
              <input type="text" name="rech" id="rech" class="field small-field" />
              <input type="submit" class="button" value="search" />
            </div>
            </form>
            
          </div>
          <!-- End Box Head -->
          <!-- Table -->
          <div class="table">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                
                <th>id</th>
                <th>contenue</th>
                <th>date_publication</th>
                
                
              </tr>
              <?PHP
          /*  if (isset($_POST["rech"]))
            {
              $listeart=$artc1->rechercherart($_POST["rech"]);
            }*/

				foreach($listerec as $rec){
			?>
				<tr>
					<td><?PHP echo $rec['id_reclamation'];  ?></td>
					<td><?PHP echo $rec['contenu']; ?></td>
          <td><?PHP echo $rec['date_publication']; ?></td>
          
					
          
					<td>
           
						<form method="POST"  action="supprimerrec.php" > 
						<a href="supprimerrec.php?id=<?php echo $rec['id_reclamation'];?>" class="ico del">Delete</a>
            <input type="hidden" value=<?PHP echo $rec['id_reclamation']; ?> name="id">
						</form>
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


