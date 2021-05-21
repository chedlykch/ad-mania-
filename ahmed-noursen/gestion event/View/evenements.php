<?php

require_once '../Controller/EvenementC.php';



$evenementC = new EventC();

$listeE = $evenementC->afficherEvent();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="style1011.css" />
    <section>
    <div class="topnav">
        
     

        <a href="evenements.php"><span>Evénements</span></a>
        <a href="ProchainEvent.php"><span>Prochains événements </span></a>
        <a href="index2.php"><span>Evénements d'aujourd'hui</span></a>
       </div>
      <style>
          .topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: yellow;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: yellow;
  color: white;
}

      </style>
        <div class="leftBox">
            <div class="content">
                
                <h1>Events And Shows</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae temporibus commodi saepe eum eligendi reiciendis impedit, ipsum unde magni, dicta error odio quibusdam labore quas aperiam reprehenderit vitae ut repudiandae!</p>

            </div>
        </div>
<div class="events">
<ul>
    <?php
    foreach($listeE as $event){
        ?>

    
<li>
<div class="time">
    <h2>
     <?php echo substr($event['da'],8,2) ?><br><span><?php if (substr($event['da'],5,2)=='01') echo 'January';
     if (substr($event['da'],5,2)=='02') echo 'Febuary';
     if (substr($event['da'],5,2)=='03') echo 'March';
     if (substr($event['da'],5,2)=='04') echo 'April';
     if (substr($event['da'],5,2)=='05') echo 'May';
     if (substr($event['da'],5,2)=='06') echo 'June';
     if (substr($event['da'],5,2)=='07') echo 'July';
     if (substr($event['da'],5,2)=='08') echo 'August';
     if (substr($event['da'],5,2)=='09') echo 'September';
     if (substr($event['da'],5,2)=='10') echo 'October';
     if (substr($event['da'],5,2)=='11') echo 'November';
     if (substr($event['da'],5,2)=='12') echo 'December';
      ?></span>
    </h2>
</div>

<div class="details">
    <h3><?php echo $event['nom']; ?></h3>

    <p><textarea name="" id="" class="area" cols="54" rows="3" style="overflow:hidden" ><?php echo $event['Description']; ?></textarea></p>
    <?php $rech=$event['reference'];?>

<a href="indexDetails.php?reference=<?php echo $event['reference'];?>" >View Details</a>
<div>
<form id="form" action="" method="post">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<input type="radio" class="drone" name="drone" value="1" id="1"><label for="1">☆</label> <input class="drone"  type="radio" name="drone" value="2" id="2"><label for="2">☆</label> <input class="drone"  type="radio" name="drone" value="3" id="3"><label for="3">☆</label> <input class="drone" type="radio" name="drone" value="4" id="4"><label for="4">☆</label> <input class="drone"  type="radio" name="drone" value="5" id="5"><label for="5">☆</label>
  
<input type="hidden" name="ev" value=<?php echo $event['reference'];?>>
  <input id="ok" type="submit" value="OK">

  </form>
<style>
label:hover, label:active {
   color:yellow;
}
.drone
 {
    display: none;
}
input[type="radio"]:checked+label{ font-weight: bold; color:yellow;} 

</style>
</div>






</div>
<div style="clear:both ;"></div>


</li>
<?php } ?>

</ul>

</div>
</section>
    
    
</body>
<?php

if (isset($_POST["drone"])&&isset($_POST["ev"]))
{
    if(!empty($_POST["drone"])){
        $eventC=new EventC();
        $ev=$_POST["ev"];
        $rate=$_POST["drone"];
        $eventC->ajouterRATE($ev,$rate);
        $eventC->updateRATE();}
    
}


?>

</html>