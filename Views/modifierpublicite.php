<?php
    require_once '../Controller/publiciteController.php';
    $pubC =  new PubC();

	$result = $pubC->getPubliciteById($_GET['id']);
    echo "<script>console.log('Hello world!');</script>";

    if (isset($_POST['nom']) && isset($_POST['prix']) && isset($_POST['type'])&& isset($_POST['mail'])) {
        //echo $_POST['nom'];
        require_once '../Model/publicite.php';
        $publicite = new Publicite($result['id'],$result['id_article'],(float)$_POST['prix'],$_POST['type'],$_POST['nom'],$_POST['mail'],$result['id_sponsor']);
        echo $publicite->getNom();
        $pubC->updatePublicite($publicite,$result['id']);
        header("Location: index.php");
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
var nom=document.form.nom.value;  
var prix=document.form.prix.value;  
var type=document.form.type.value;  
var mail=document.form.mail.value;  
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
      <div class="small-nav"> <a href="#">Dashboard</a> <span>&gt;Modify Publicity</span> </div>
      <!-- End Small Nav -->
      <!-- Message OK -->
      
      <!-- End Message OK -->
      <!-- Message Error -->
      
      <!-- End Message Error -->
      <br />
      <!-- Main -->
      <div id="main">
      <div class="box">
                <form action="" method = "POST" onsubmit="return validateform()" name="form" id= "form">
                <div class="row">
                    <div class="col-25">                
                        <label>Nom: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" name = "nom" id = "nom" value = "<?= $result['nom'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Prix</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name = "prix" id = "prix" value = "<?= $result['prix'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Type</label>
                    </div>
                    <div class="col-75">
                        <input type = "text" name = "type" id = "type" value = "<?= $result['type'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Mail</label>
                    </div>
                    <div class="col-75">
                        <input type = "email" name = "mail" id = "mail" value = "<?= $result['mail'] ?>">
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