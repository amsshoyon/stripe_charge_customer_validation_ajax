<?php

    require_once('vendor/autoload.php');

    // var_dump('stripe token is: '.$_POST['stripe-token']);

    \Stripe\Stripe::setApiKey("sk_test_5mWH3L0GWElaEibpWMkHCB0j"); //secret key

    // Get the token from the JS script
    $token = $_POST['stripe-token'];

    $amount = '';
    $description = '';
    $success = 0;

    
    $email = $_POST['email'];
    $payment_name = $_POST['payment_name'];

    if($payment_name == 'federal_job_search_coaching_1_hr'){
        $amount = 5000;
        $description = 'Federal Job Search Coaching (1 Hour)';
    }
    elseif($payment_name == 'resume_review_1_hr'){
        $amount = 5000;
        $description = 'Resume Review (1 Hour)';
    }
    elseif($payment_name == 'gs_4'){
        $amount = 19700;
        $description = 'Resume Writing: GS-4 and below';
    }
    elseif($payment_name == 'gs_9'){
        $amount = 29700;
        $description = 'Resume Writing: GS-5/7/9';
    }
    elseif($payment_name == 'gs_12'){
        $amount = 49700;
        $description = 'Resume Writing: GS-5/7/9 GS-10/11/12';
    }
    elseif($payment_name == 'gs_15'){
        $amount = 79700;
        $description = 'Resume Writing: GS-13/14/15';
    }
    elseif($payment_name == 'interview_coaching_2_hr'){
        $amount = 19700;
        $description = 'Interview Coaching (2 Hours)';
    }
    elseif($payment_name == 'salary_neg_2_hr'){
        $amount = 49700;
        $description = 'Salary/Benefits Negotiation (2 Hours)';
    }
    else{
        $amount = '';
        $description = '';
    }
try {
     // Create a Customer
    $customer = \Stripe\Customer::create(array(
        "email" => $email,
        "source" => $token,
    ));
    $charge = \Stripe\Charge::create([
        'amount' => $amount,
        'currency' => 'usd',
        "description" => $description,
        'receipt_email' => $email,
        "customer" => $customer->id
    ]);
    $success = 1;
}
 catch(Stripe_CardError $e) {
  $error1 = $e->getMessage();
} catch (Stripe_InvalidRequestError $e) {
  // Invalid parameters were supplied to Stripe's API
  $error2 = $e->getMessage();
} catch (Stripe_AuthenticationError $e) {
  // Authentication with Stripe's API failed
  $error3 = $e->getMessage();
} catch (Stripe_ApiConnectionError $e) {
  // Network communication with Stripe failed++
  $error4 = $e->getMessage();
} catch (Stripe_Error $e) {
  // Display a very generic error to the user, and maybe send
  // yourself an email
  $error5 = $e->getMessage();
} catch (Exception $e) {
  // Something else happened, completely unrelated to Stripe
  $error6 = $e->getMessage();
}

$errors = array($error1, $error2,$error3,$error4,$error5,$error6);
if ($success!=1) {

    $message = array(
        'title' => 'Error',
        'content' => $errors,
        'type' => 'red',
        'text' => 'Try Again',
        'btnClass' => 'btn-red',
    );
    echo json_encode($message);
    exit();
     
}else {
    
    $message = array(

        'title' => 'Success',
        'content' => 'Successfully created.',
        'type' => 'green',
        'text' => 'Thanks',
        'btnClass' => 'btn-green',

    );
    echo json_encode($message);
    exit();

}

    

?>
