<?php
/* Charging a Customer

For a customer, you can use the same HTML, CSS, and JS. You just have to change the PHP script. You have to create a Customer object then charge this customer object.
*/

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

// You can charge the customer later by using the customer id.


/* Making a Subscription Charge

For the subscription, all you have to do is change the PHP script.
*/

\Stripe\Stripe::setApiKey("____YOUR_STRIPE_SECRET_KEY____");

// Get the token from the JS script
$token = $_POST['stripeToken'];

// Create a Customer
$customer = \Stripe\Customer::create(array(
    "email" => "paying.user@example.com",
    "source" => $token,
));

// or you can fetch customer id from the database too.

// Creates a subscription plan. This can also be done through the Stripe dashboard.
// You only need to create the plan once.
$subscription = \Stripe\Plan::create(array(
    "amount" => 2000,
    "interval" => "month",
    "name" => "Gold large",
    "currency" => "cad",
    "id" => "gold"
));

// Subscribe the customer to the plan
$subscription = \Stripe\Subscription::create(array(
    "customer" => $customer->id,
    "plan" => "gold"
));


print_r($subscription);

/*
The response is:

{
    "id": "sub_Aax13APykInoyt",
    "object": "subscription",
    "application_fee_percent": null,
    "cancel_at_period_end": false,
    "canceled_at": null,
    "created": 1493908778,
    "current_period_end": 1496587178,
    "current_period_start": 1493908778,
    "customer": "cus_Aax1Fuxu2NMEsA",
    "discount": null,
    "ended_at": null,
    "items": {
        "object": "list",
        "data": [
                {
                    "id": "si_1AFl7G285d61s2cIpGzKedMm",
                    "object": "subscription_item",
                    "created": 1493908779,
                    "plan": {
                    "id": "gold",
                    "object": "plan",
                    "amount": 2000,
                    "created": 1394782612,
                    "currency": "cad",
                    "interval": "month",
                    "interval_count": 1,
                    "livemode": false,
                    "metadata": {

                    },
                    "name": "Gold Special",
                    "statement_descriptor": null,
                    "trial_period_days": null
                },
                "quantity": 1
            }
        ],
        "has_more": false,
        "total_count": 1,
        "url": "/v1/subscription_items?subscription=sub_Aax13APykInoyt"
    },
    "livemode": false,
    "metadata": {

    },
    "plan": {
        "id": "gold",
        "object": "plan",
        "amount": 2000,
        "created": 1394782612,
        "currency": "cad",
        "interval": "month",
        "interval_count": 1,
        "livemode": false,
        "metadata": {
        },
        "name": "Gold Special",
        "statement_descriptor": null,
        "trial_period_days": null
    },
    "quantity": 1,
    "start": 1493908778,
    "status": "active",
    "tax_percent": null,
    "trial_end": null,
    "trial_start": null
}

*/

?>