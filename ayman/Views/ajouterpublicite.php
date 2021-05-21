<?php
    require_once '../Controller/publiciteController.php';
    $pubC =  new PubC();
    

	//$result = $pubC->getPubliciteById($_GET['id']);


    if (isset($_POST['nom']) && isset($_POST['prix']) && isset($_POST['type'])&& isset($_POST['id_article']) && isset($_POST['mail'])) {
        //echo $_POST['nom'];
        require_once '../Model/publicite.php';
        $publicite = new Publicite(null,(int)$_POST['id_article'],(float)$_POST['prix'],$_POST['type'],$_POST['nom'],$_POST['mail'],(int)$_POST['id_sponsor']);
        //echo $publicite->getNom();
        $pubC->addPublicite($publicite);
        header("Location: index.php");
        //echo $publicite->getNom();
    }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Ad-mania</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../assets/css/style.css" type="text/css" media="all" />
<script>  
function validateform(){  
var nom=document.myform.nom.value;  
var prix=document.myform.prix.value;  
var type=document.myform.type.value;  
var mail=document.myform.mail.value;  
//var password=document.myform.password.value;  
if (nom==null || nom==""){  
  alert("verifiez nom");  
  return false;  
}
if (prix==null || prix=="" || prix<=0){  
  alert("verifiez prix");  
  return false;  
}
if (type==null || type==""){  
  alert("verifier type");  
  return false;  
}
if (mail==null || mail==""){  
  alert("verifier mail");  
  return false;  
}
return true;
};
</script> 
</head>
<body>
        <?php include_once 'header.php'; ?>
        <div id="container">
    <div class="shell">
      <!-- Small Nav -->
      <div class="small-nav"> <a href="#">Dashboard</a> <span>&gt;Add Publicity</span> </div>
      <!-- End Small Nav -->
      <!-- Message OK -->
      
      <!-- End Message OK -->
      <!-- Message Error -->
      
      <!-- End Message Error -->
      <br />
      <!-- Main -->
      <div id="main">
      
      <div class="box">
                <form action="" method = "POST" onsubmit="return validateform()" name="myform" id= "myform">
                <div class="row">
                    <div class="col-25">                
                        <label>Nom: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" name = "nom" id = "nom" value = "">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">                
                        <label>Id Article: </label>
                    </div>
                    <div class="col-75">
                        <input type="number" name = "id_article" id = "id_article" value = "">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Prix</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name = "prix" id = "prix" value = "">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Mail</label>
                    </div>
                    <div class="col-75">
                        <input type="email" name = "mail" id = "mail" value = "">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Type</label>
                    </div>
                    <div class="col-75">
                        <input type = "text" name = "type" id = "type" value = "">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Id Sponsor (ATTENTION: Ce choix est Permenant!) </label>
                    </div>
                    <div class="col-75">
                    <select id="id_sponsor" name="id_sponsor" size="6">
                    <?php
                        foreach ($spons as $row) {
                        echo"<option value='".$row["id"]."'>".$row["id"]." || ".$row["nom"]."</option>";
                        }
                        ?>
                    </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type="submit" value="Submit" name = "submit">
                </div>
            </form>
      </div>
      </div>
      </div>
      </div>
</body>
</html>