
<?php
require '../vendor/autoload.php';
 \Stripe\Stripe::setApiKey('sk_test_51LPizHIrSSwbV91tyLyionwbybzk6VJWAgj0FEY2YtehIBGjIqrRfENbIJLt3WsM2xGrbanhrSffWvWYEkAIpLpv00nPoocgWH');



 
  $checkout_session = \Stripe\Checkout\Session::create([
      'success_url' => 'http://localhost:8000/richpannelassignment/login/success.php',
      'cancel_url' => 'http://localhost/stripe-subscription/cancel.html',
      'payment_method_types' => ['card'],
      'mode' => 'subscription',
      'line_items' => [[
        'price' => "price_1LQ2MkIrSSwbV91tdmmwzAlC",
        
        // For metered billing, do not pass quantity
        'quantity' => 1,
      ]],
    ]);

?>
<head>
  <title>Stripe Subscription Checkout</title>
  <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
  <script type="text/javascript">
     var stripe = Stripe('pk_test_51LPizHIrSSwbV91taQ97PhtTGWym649pkZ4Th5ueKw9TpAHsWJS4ez22FRCnY2k8fRuvBRR7ypNsHcEFdctdsRlU00V2XDahZF');
     var session = "<?php echo $checkout_session['id']; ?>";
          stripe.redirectToCheckout({ sessionId: session })
                  .then(function(result) {
          // If `redirectToCheckout` fails due to a browser or network
          // error, you should display the localized error message to your
          // customer using `error.message`.
          if (result.error) {
            alert(result.error.message);
          }
        })
        .catch(function(error) {
          console.error('Error:', error);
        });          



  </script>
  
</body>

