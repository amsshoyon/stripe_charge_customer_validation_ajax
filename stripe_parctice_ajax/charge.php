<?php


\Stripe\Stripe::setApiKey("____YOUR_STRIPE_SECRET_KEY____");

// Get the token from the JS script
$token = $_POST['stripeToken'];

// Create a Customer
$customer = \Stripe\Customer::create(array(
    "email" => "paying.user@example.com",
    "source" => $token,
));

// Save the customer id in your own database!

// Charge the Customer instead of the card
$charge = \Stripe\Charge::create(array(
    "amount" => 2000,
    "currency" => "usd",
    "customer" => $customer->id
));

echo $customer->id .'<br />';
echo $charge->id ;

?>