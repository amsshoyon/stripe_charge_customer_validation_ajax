<form class="checkout-form" id="checkout-form" method="POST">
    <span id="payment-errors" style="font-size:12px;"></span>
    <span id="result"></span>
    <div class="select-option">

        <?php include('include/itemSelect.php'); ?>

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

<div class="single-line text-center">
    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="POST">
        <input type="hidden" name="cmd" value="_cart">
        <input type="hidden" name="upload" value="1">
        <input type="hidden" name="business" value="amsshoyon@yahoo.com">

        <input type="hidden" name="item_name_1" value="" id="item_name_1">
        <input type="hidden" name="amount_1" value="" id="amount_1">

        <button type="submit">pay with paypal</button>
    </form>

</div>
