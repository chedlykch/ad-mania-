<?php

require_once('../../vendor/autoload.php');

include_once "../Controller/EvenementC.php";
\Stripe\Stripe::setApiKey('sk_test_51InhWiJmcpbasMK9NTPUT1P9Wj6yB057M1LUcEai4R7ljN07rLQpeoDwSRvll6EKXUV6AmBuQGBlbzXu6XjkcZOx00V17iIGTd');
$eventC=new EventC();
$liste=$eventC->afficherEventDetail($_GET['ref']);
    
    $eventC->setTag($_GET['ref']);
foreach($liste as $ev){
$session = \Stripe\Checkout\Session::create([
  'payment_method_types' => ['card'],
  'line_items' => [[
    'price_data' => [
      'currency' => 'eur',
      'product_data' => [
        'name' => $ev['nom'],
      ],
      'unit_amount' => $ev['prix'],
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => 'http://localhost/project/gestion%20event/View/pdf.php',
  'cancel_url' => 'http://localhost/project/gestion%20event/View/failed.php',
]);
}
?>

<html>
  <head>
    <title>Buy cool new product</title>
    <script src="https://js.stripe.com/v3/"></script>
  </head>
  <body>
    <button id="checkout-button">Checkout</button>
    <script>
      var stripe = Stripe('pk_test_51InhWiJmcpbasMK9ZokozfUORvAsUqlnjXGwGSdHBoIMmA4vSDFea3HYkuZrMPpjn4speDW4GBXtscIWfQDdDIgi00GouuMqXk');
      const btn = document.getElementById("checkout-button")
      btn.addEventListener('click', function(e) {
        e.preventDefault();
        stripe.redirectToCheckout({
          sessionId: "<?php echo $session->id; ?>"
        });
      });
    </script>
  </body>
</html>