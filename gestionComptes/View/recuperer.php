<?php 
include_once '../Controller/compteC.php';
include_once '../../vendor/autoload.php';
$sid="AC83c9cc4f217af1b950c206d54d20d184";
$token="cc0cf1e84978c17efdddce51905bbb72";
$client=new Twilio\Rest\Client($sid,$token);
$code=strval(rand(1000,9999));
$compteC = new compteC();
if (isset($_POST['ident'])) {
   $id=$_POST['ident'];

$li=$compteC->afficherCompteDetail($_POST['ident']);


foreach($li as $co)
{
    $id = $_POST['ident'];
$num="+216".$co['numtel'];
           
            $client->messages->create(
                // Where to send a text message (your cell phone?)
                $num,
                array(
                    'from' => "+13367702248",
                    'body' => $code
                )); 
                
            } }          
                
?>
<form action="" method="POST">
<input type="text" name="ident"placeholder="" >
<a href="rec.php?code=<?php echo $code;?>" >okkk</a></form>