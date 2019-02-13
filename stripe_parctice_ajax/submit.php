<?php

    require_once('vendor/autoload.php');

    // var_dump('stripe token is: '.$_POST['stripe-token']);

    \Stripe\Stripe::setApiKey("sk_test_5mWH3L0GWElaEibpWMkHCB0j"); //secret key

    // Get the token from the JS script
    $token = $_POST['stripe-token'];

    $customer_exist = NULL;
    $email = $_POST['email'];
        $customers = \Stripe\Customer::all();
        foreach ($customers->autoPagingIterator() as $customer) {
            
            if ($customer->email == $email) {
                $customer_exist = 1;
                echo '<br />Customer Exist.';
                break;
            }else{
               $customer_exist = 0;
            }
        }

    if($customer_exist == 0){
        $customer = \Stripe\Customer::create(array(
            "email" => $_POST['email'],
            "source" => $token,
        ));
        $subscription = \Stripe\Subscription::create(array(
            "customer" => $customer->id,
            "plan" => "ir"
        ));
        echo '<br />Customer created. Customer id is: '.$customer->id .'<br />';
    }
 
?>
