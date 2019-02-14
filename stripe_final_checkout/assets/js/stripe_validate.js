jQuery(function ($) {


    //stripe card number and cvc validation
    $('[data-numeric]').payment('restrictNumeric');
    $('.cc-number').payment('formatCardNumber');
    $('.cc-exp').payment('formatCardExpiry');
    $('.cc-cvc').payment('formatCardCVC');

    $.fn.toggleInputError = function (erred) {
        this.parent('.form-group').toggleClass('has-error', erred);
        return this;
    };


    // Stripe Subscription
    Stripe.setPublishableKey('pk_test_GWInzEHja1rc77kFIqejIpwe');
    $('#checkout-form').submit(function (e) {

        //stripe card number and cvc validate on submit
        var cardType = $.payment.cardType($('.cc-number').val());
        $('.cc-number').toggleInputError(!$.payment.validateCardNumber($('.cc-number').val()));
        $('.cc-cvc').toggleInputError(!$.payment.validateCardCVC($('.cc-cvc').val(), cardType));
        $('.cc-brand').text(cardType);

        var x = confirm("Are you sure?");
        if (x) {
            //Fetching data from form :Start
            $form = $(this);
            $form.find('button').prop('disabled', true);

            //Creating token for srtipe
            Stripe.card.createToken($form, function (status, response) {
                //            console.log(status);
                //            console.log(response);

                if (response.error) {
                    $form.find('#payment-errors').text(response.error.message);
                    $form.find('button').prop('disabled', false);
                } else {
                    var token = response.id;
                    var payment_name = new Array();
                    $("input:checked").each(function () {
                        payment_name.push($(this).val());
                    });
                    var formData = {
                        'email': $('input[name=email]').val(),
                        'payment_name': payment_name,
                        'stripe-token': token
                    };
                    //                    console.log(payment_name);
                    //                    console.log(token);
                    //                    console.log(formData);
                    var extracted1 = 'json';
                    $.ajax({
                        type: "POST",
                        url: "checkout_submit.php",
                        data: formData,
                        success: function (data) {
                            console.log(data);
                            var obj = JSON.parse(data);

                            $.confirm({
                                title: obj.title,
                                content: obj.content,
                                type: obj.type,
                                typeAnimated: true,
                                buttons: {
                                    tryAgain: {
                                        text: obj.text,
                                        btnClass: obj.btnClass,
                                        action: function () {}
                                    },
                                    close: function () {}
                                }
                            });
                        }

                    }).done(function () {
                        $("#checkout-form").trigger("reset");
                        $form.find('button').prop('disabled', false);
                    });
                }
            });
        }

        return false;
    });


});
