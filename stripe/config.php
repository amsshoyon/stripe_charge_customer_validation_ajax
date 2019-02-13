
<?php
 
require_once('stripe-php/init.php');
 
$stripe = array(
  "secret_key"      => "sk_test_5mWH3L0GWElaEibpWMkHCB0j",
  "publishable_key" => "pk_test_GWInzEHja1rc77kFIqejIpwe"
);
 
\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>