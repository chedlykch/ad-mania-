<html>

<head>
<title> chercher </title>
<style>
body{
    background-color : whitesmoke;
    
}
input{
    width: 40%;
    height: 5%; 
    border: 1px;
    border-radius: 05px;
    padding: 8px 15px 8px 15px ;
    margin: 10px 0px 15px 0px ; 
    box-shadow: 1px 1px 2px 1px grey ; 


}



</style>


</head>
<body>
    <center>
    <h1> TROUVEZ  VOTRE LOCAL </h1>
    <form action="" method="POST">
    <input type="text" name ="id" placeholder="Identifiant : "/><br/>
    <input type="submit" name = "search" value="CHERCHER  ">
    
    
    
    
    
    
    </form>
<?php

$connection = mysqli_connect("localhost","root",""); 
$db=mysqli_select_db($connection,'chedly');
if(isset($_POST['search']))
{
    $id = $_POST['id'];
      

    $query = "SELECT * FROM local where id='$id' "; 
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_array($query_run))
    {
        ?>
        <form action="" method="POST">
        
        <input type="hidden" name="id" value="<?php echo  $row['id'] ?> " /><br>
        <tr>
                    <td>
                        <label for="Gouvernant" >Gouvernant:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="Gouvernant"  value="<?php echo  $row['pays'] ?> " ><br>
                    </td>
                </tr>
                <tr>
       
                <tr>
                    <td>
                        <label for="codepostal" >codepostal:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="codepostal"  value="<?php echo  $row['codepostal'] ?> " ><br>
                    </td>
                </tr>
                <tr>

        <tr>
                    <td>
                        <label for="nom_rue" >nom_rue:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="nom_rue"  value="<?php echo  $row['nom_rue'] ?> " ><br>
                    </td>
                </tr>
                <tr>
        
        
        
        
        </form>
        <?php

    }
}




?>





    </center>
</body>




