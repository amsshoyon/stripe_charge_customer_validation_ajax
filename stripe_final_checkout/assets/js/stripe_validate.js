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


    Stripe.setPublishableKey('pk_test_GWInzEHja1rc77kFIqejIpwe');

    $('#checkout-form').submit(function (e) {

        //stripe card number and cvc validate on submit
        var cardType = $.payment.cardType($('.cc-number').val());
        $('.cc-number').toggleInputError(!$.payment.validateCardNumber($('.cc-number').val()));
        $('.cc-cvc').toggleInputError(!$.payment.validateCardCVC($('.cc-cvc').val(), cardType));
        $('.cc-brand').text(cardType);

        var ischecked = $('input[type = checkbox]:checked').length;
        var email = $("input[name = email]").val();
        var amount = $("input[name = amount]").val();
        var item_name = $("input[name = item_name]").val();
        var card_no = $("input[name = card_no]").val();
        var cvc_no = $("input[name = cvc_no]").val();
        var expireMonth = $("#expireMonth option:selected").val();
        var expireYear = $("#expireYear option:selected").val();



        if (ischecked <= 0) {
            alert('nothing Selected');
            //document.getElementById("result").innerHTML = "nothing Selected";
            return false;
        }
        if (amount == 0) {
            alert('nothing Selected');
            //document.getElementById("result").innerHTML = "nothing Selected";
            return false;
        }
        if (item_name == '' || item_name == null) {
            alert('nothing Selected');
            //document.getElementById("result").innerHTML = "nothing Selected";
            return false;
        }
        if (email == '' || email == null) {
            alert('Email Required');
            return false;
        }
        if (card_no == '' || card_no == null) {
            alert('Card Required');
            return false;
        }
        if (cvc_no == '' || cvc_no == null) {
            alert('CVC Required');
            return false;
        }
        if (expireMonth == '' || expireMonth == null) {
            alert('Month Required');
            return false;
        }
        if (expireYear == '' || expireYear == null) {
            alert('Year Required');
            return false;
        }



        if (confirm("Are you sure?")) {
            //Fetching data from form :Start
            $form = $(this);
            $form.find('button').prop('disabled', true);

            //Creating token for srtipe
            Stripe.card.createToken($form, function (status, response) {
                // console.log(status);
                // console.log(response);

                if (response.error) {
                    // $form.find('#payment-errors').text(response.error.message);
                    alert(response.error.message);
                    $form.find('button').prop('disabled', false);
                } else {
                    var token = response.id;
                    // var payment_name = new Array();
                    // $("input:checked").each(function () {
                    //     payment_name.push($(this).val());
                    // });
                    var formData = {
                        'email': $('input[name=email]').val(),
                        'item_name': $('input[name=item_name]').val(),
                        'amount': $('input[name=amount]').val(),
                        'stripe-token': token
                    };

                    var extracted1 = 'json';
                    $.ajax({
                        type: "POST",
                        url: "checkout_submit.php",
                        data: formData,
                        success: function (data) {
                            //console.log(data);
                            var obj = JSON.parse(data);
                            $form.find('button').prop('disabled', false);
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
                        $('input[type=checkbox]').prop('checked', false);
                        document.getElementById("item-names").innerHTML = '';
                        document.getElementById("total-amount").innerHTML = '';
                    });
                }
            });
        }

        return false;
    });


});
