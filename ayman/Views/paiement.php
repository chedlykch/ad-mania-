<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: 50%;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
<?php
    require_once '../Controller/publiciteController.php';
    $pubC =  new PubC();
    $pubs = $pubC->allPubliciteNonPaye();
    function paiementPublicite( $id) {
      try {
          $pdo = getConnexion();
          $query = $pdo->prepare(
              'UPDATE publicite SET paye = :p WHERE id = :id'
          );
          $query->execute([
              'id' => $id,
              'p' => true
          ]);
          echo "record UPDATED successfully";
      } catch (PDOException $e) {
          echo $e->getMessage();
      }
  }
    if (isset($_POST['listepubs'])&&isset($_POST['cardname'])&&isset($_POST['cardnumber'])&&isset($_POST['expmonth'])&&isset($_POST['expyear'])&&isset($_POST['cvv'])){
      
      //$pubC =  new PubC();
      $rest = substr($_POST['cardnumber'], -4);
      $res=$pubC->getMailPubliciteById($_POST['listepubs']);
      paiementPublicite((int)$_POST['listepubs']);
      header("Location: ../Controller/exmail.php?des=".$res["mail"]."&no=".$rest);
      //header("Location: index.php");
    }
    

?>
<script>
function cardvalidation()
{
    var cardname=document.form.cardname.value;  
    var cardnumber=document.form.cardnumber.value; 
    var expmonth=document.form.expmonth.value;  
    var expyear=document.form.expyear.value; 
    var cvv=document.form.cvv.value;
    var cardno = /^\d{16}$/;
    var mcvv = /^\d{3}$/;
    var datey=new Date().getFullYear();
    var datem=new Date().getMonth()+1;
    if(cardname==null ||cardname=="")
        {
            alert("verifiez nom");  
        return flase;
        }
    if(cardnumber==null ||cardnumber=="" || !cardnumber.match(cardno))
        {
            alert("verifiez NO carte de crédit");  
        return flase;
        }
    if(expmonth==null ||expmonth=="" || expmonth<=0 || expmonth>12)
        {
            alert("verifiez date expiration1");  
      return flase;
        }
    if(expyear==null ||expyear=="" || expyear<datey )
        {
            alert("verifiez date expiration2"); 
            return false;
        }
    if (expyear==datey && expmonth<=datem)
        {
            alert("verifiez date expiration3"); 
            return flase;
        }
    if (!cvv.match(mcvv))
        {
          
            alert("verifiez code cvv"); 
            return flase;
        }
    
    return true;
}
</script>

</head>
<body>

<h2>Checkout</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
    <form action="" method = "POST" onsubmit="return cardvalidation()" name="form" id="form">
      
        <div class="row">
          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="listepubs">Liste publicites</label>
            <select name = "listepubs" id="listepubs" size="6">
                    <?php
                        foreach ($pubs as $row) {
                        echo"<option value='".$row["id"]."'>".$row["id"]." || ".$row["nom"]." || ".$row["prix"]."</option>";
                        }
                        ?>
            </select>
            <label for="cardname">Name on Card</label>
            <input type="text" id="cardname" name="cardname" placeholder="John More Doe">
            <label for="cardnumber">Credit card number</label>
            <input type="text" id="cardnumber" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="number" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="number" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
</div>

</body>
</html>
