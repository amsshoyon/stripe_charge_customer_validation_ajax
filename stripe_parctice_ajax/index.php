<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Stripe PRactice</title>

    <!--bootstrap 4.2.1 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <section class="container" style="margin:50px auto;">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Test Card Numbers</h5>
                    </div>
                    <div class="card-body">
                        <span>Email: amsshoyon@gmail.com</span><br>
                        <span>Visa: 4242 4242 4242 4242</span><br>
                        <span>Mastercard: 5555 5555 5555 4444</span><br>
                        <span>American Express: 3782 822463 10005</span>

                        <div id="result"></div>
                        <div class="card">
                            <div class="card-header">
                                Months
                            </div>
                            <div class="card-body">
                                <?php
                                    for($m=1; $m<=12; ++$m){
                                    echo date('F', mktime(0, 0, 0, $m, 1)).'<br>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">
                        <h5>Subscription Plan </h5>

                    </div>

                    <div class="card-body">
                        <form id="payment-form">
                            <span id="payment-errors" style="color:red; font-size:12px;"></span>
                            <fieldset class="form-group">
                                <label for="">Your Email</label>
                                <input type="email" name="email" class="form-control">
                            </fieldset>

                            <fieldset class="form-group">
                                <label for="">Card Number</label>
                                <input type="text" value="4242 4242 4242 4242" data-stripe="number" class="form-control">
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="">CVC</label>
                                <input type="text" data-stripe="cvc" value="1234" class="form-control">
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="">Expiration Month</label>
                                <input type="text" data-stripe="exp-month" value="12" class="form-control col">
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="">Expiration Year</label>
                                <input type="text" data-stripe="exp-year" value="20" class="form-control col">
                            </fieldset>
                            <button type="submit" class="btn btn-primary float-right ">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </section>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://js.stripe.com/v2/"></script>

    <script>
        Stripe.setPublishableKey('pk_test_GWInzEHja1rc77kFIqejIpwe');
        $('#payment-form').submit(function(e) {
            $form = $(this);
            $form.find('button').prop('disabled', true);

            //async
            Stripe.card.createToken($form, function(status, response) {
                console.log(status);
                console.log(response);

                if (response.error) {
                    $form.find('#payment-errors').text(response.error.message);
                    $form.find('button').prop('disabled', false);
                } else {
                    var token = response.id;

                    //append the token and submit
                    //                    $form.append($('<input type="hidden" name="stripe-token" />').val(token));
                    // $form.get(0).submit();
                    var formData = {
                        'email': $('input[name=email]').val(),
                        'stripe-token': token
                    };
                    var extracted1 = 'json';
                    $.ajax({
                        type: "POST",
                        url: "submit.php",
                        data: formData,
                        success: function(data) {
                            $('#result').html(data);
                        }
                    }).done(function() {
                        $("#payment-form").trigger("reset");
                        $form.find('button').prop('disabled', false);
                    });
                }
            });
            return false;
        });

    </script>


</body>

</html>
