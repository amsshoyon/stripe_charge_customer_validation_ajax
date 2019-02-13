<?php

    require_once('vendor/autoload.php');

    var_dump('stripe token is: '.$_POST['stripe-token']);

    \Stripe\Stripe::setApiKey("sk_test_5mWH3L0GWElaEibpWMkHCB0j"); //secret key


    $customer_email = $_POST['email'];
    // Get the token from the JS script
    $token = $_POST['stripe-token'];

    // Create a Customer
    $customer = \Stripe\Customer::create(array(
        "email" => $customer_email,  // change it for making it dynamic
        "source" => $token,
    ));

    // Save the customer id in your own database!

    // Charge the Customer instead of the card
    $charge = \Stripe\Charge::create(array(
        "amount" => $_POST['amount'],
        "currency" => "usd",
        "customer" => $customer->id
    ));

    echo '<br /> customer id is: '.$customer->id .'<br />';
    echo 'And charge id is: '.$charge->id ;


    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }


?>
