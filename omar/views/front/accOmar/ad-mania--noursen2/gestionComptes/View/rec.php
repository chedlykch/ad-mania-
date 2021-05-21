<?php 

$code= $_GET['code'];
if (isset($_POST["code"]))
{
    if($code==$_POST['code']){header('Location:reinitialiser.php');}
}


?>
<form method="POST">
    <input type="text" name="code">
    <input type="submit" value="submit">
</form>