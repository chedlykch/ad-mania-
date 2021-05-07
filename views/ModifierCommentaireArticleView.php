<?php

include_once(__DIR__ . "/../util/DataSource.php");

global $conn;

$query ="SELECT ID FROM utilisateur";
$result1 = mysqli_query($conn, $query);
$options = "";
while($row = mysqli_fetch_array($result1,MYSQLI_NUM))
{
    $options = $options."<option>$row[0]</option>";
}

$query2 ="SELECT ID FROM article";
$result2 = mysqli_query($conn, $query2);
$options2 = "";
while($row = mysqli_fetch_array($result2,MYSQLI_NUM))
{
    $options2 = $options2."<option>$row[0]</option>";
}
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

<div class="header">
                <h2>MODIFIER COMMENT</h2>

            </div>

    <form  onsubmit="return validateForm()" name="myForm" method="POST" action="ModifierCommentaireArC.php" >
        <div class="row align-items-stretch mb-5">
            <div class="col-md-6">
            <br>
                <div class="col-md-6">

                    <textarea class="form-control" id="contenu" name="contenu" type="text" placeholder="contenu"/></textarea>
                    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                </div>
                <div class="col-md-6">
                    <select id="id_user" name ="id_user" >
                        <?php echo $options;?>
                    </select>
                </div>

                <div class="col-md-6">
                    <select id = "id_article" name ="id_article">
                        <?php echo $options2;?>
                    </select>
                </div>


            </div>

                <div id="success"></div>
                <button class="btn btn-primary btn-xl text-uppercase"  type="submit">Edit</button>
		<a href="AfficherCommentaireArticleView.php" >Retour</a>

        </div>

        <div class="text-center">
    </form>

    <script>
    function validateForm() {
    var contenu = document.forms["myForm"]["contenu"].value;

    if (contenu == "") {
    alert("contenu vide");
    return false;
    }
    }
    </script>


</body>
</html>




