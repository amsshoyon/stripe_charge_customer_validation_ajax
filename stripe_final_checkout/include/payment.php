<?php include('include/itemSelect.php'); ?>

<div class="select-items back-message">

    <div class="item-names" id="item-names">

    </div>

    <div class="text-center" id="total-amount" class="">
    </div>

</div>
<script>

</script>

<div class="payment-tab">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">Pay With Card</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">Pay With Paypal</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane container active" id="home">
            <form class="checkout-form" id="checkout-form" method="POST">

                <div class="select-option">
                    <input type="hidden" name="item_name" value="" id="item_name_stripe">
                    <input type="hidden" name="amount" value="" id="amount_stripe">
                </div>
                <div class="single-line">
                    <label for="email">email</label>
                    <input type="email" name="email" placeholder="Your best email address">
                </div>

                <?php include('include/stripe.php'); ?>

                <div class="single-line text-center">
                    <button type="submit">Sign Up</button>
                </div>

                <div class="checkout-payment-icon text-center">
                    <img src="assets/images/paymenticon.png" alt="">
                </div>
            </form>

        </div>
        <div class="tab-pane container fade" id="menu1">
            <div class="single-line text-center">
                <form class="checkout-paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="POST">
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="upload" value="1">
                    <input type="hidden" name="business" value="amsshoyon@yahoo.com">

                    <input type="hidden" name="item_name_1" value="" id="item_name_paypal">
                    <input type="hidden" name="amount_1" value="" id="amount_paypal">

                    <button type="submit" onclick="return paypal()">Sign Up</button>
                </form>

            </div>

        </div>
    </div>

</div>
