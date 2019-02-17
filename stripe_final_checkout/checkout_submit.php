<?php

    require_once('vendor/autoload.php');

    // var_dump('stripe token is: '.$_POST['stripe-token']);

    \Stripe\Stripe::setApiKey("sk_test_5mWH3L0GWElaEibpWMkHCB0j"); //secret key

    // Get the token from the JS script
    $token = $_POST['stripe-token'];

    $success = 0;
    $email = $_POST['email'];
    $amount = $_POST['amount'];
    $description = $_POST['item_name'];

$total_amount = $amount * 100;

if($total_amount > 0){
    
    try {
        // Create a Customer
        $customer = \Stripe\Customer::create(array(
            "email" => $email,
            "source" => $token,
        ));
        $charge = \Stripe\Charge::create([
            'amount' => $total_amount,
            'currency' => 'usd',
            "description" => $description,
            'receipt_email' => $email,
            "customer" => $customer->id
        ]);

        $success = 1;
        
    }
    
    catch(Stripe_CardError $e) {
      $error1 = $e->getMessage();
    }
    catch (Stripe_InvalidRequestError $e) {
      // Invalid parameters were supplied to Stripe's API
      $error2 = $e->getMessage();
    }
    catch (Stripe_AuthenticationError $e) {
      // Authentication with Stripe's API failed
      $error3 = $e->getMessage();
    } 
    catch (Stripe_ApiConnectionError $e) {
      // Network communication with Stripe failed++
      $error4 = $e->getMessage();
    } 
    catch (Stripe_Error $e) {
      // Display a very generic error to the user, and maybe send
      // yourself an email
      $error5 = $e->getMessage();
    } 
    catch (Exception $e) {
      // Something else happened, completely unrelated to Stripe
      $error6 = $e->getMessage();
    }
    
    
    if ($success != 1) {

        $message = array(
            'title' => 'Error',
            'content' => 'Something went Wrong. Please try again.',
            'type' => 'red',
            'text' => 'Try Again',
            'btnClass' => 'btn-red',
        );
        echo json_encode($message);
        exit();

    }
    else {
        $famount = $total_amount/100;
        $message = array(

            'title' => 'Success',
            'content' => 'You are successfully charged <strong>$'. $famount.'</strong> for <strong>'.$description. '</strong>.',
            'type' => 'green',
            'text' => 'Thank You!',
            'btnClass' => 'btn-green',

        );
        echo json_encode($message);
        exit();
    }


}
else{
    
    $message = array(

        'title' => 'OPS',
        'content' => 'Nothing to charge.',
        'type' => 'red',
        'text' => 'Buy a Pacage!',
        'btnClass' => 'btn-red',

    );
    echo json_encode($message);
    exit();
}



    

?>
