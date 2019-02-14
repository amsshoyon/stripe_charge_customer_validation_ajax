<form class="checkout-form" id="checkout-form" method="POST">
    <span id="payment-errors" style="font-size:12px;"></span>
    <span id="result"></span>
    <div class="select-option">

        <?php include('include/itemSelect.php'); ?>

    </div>
    <div class="single-line">
        <label for="email">email</label>
        <input type="email" name="email" placeholder="Your best email address" required>
    </div>

    <?php include('include/stripe.php'); ?>

    <div class="single-line text-center">
        <button type="submit" Onclick="">Sign Up</button>
    </div>
    <div class="checkout-payment-icon text-center">
        <img src="assets/images/paymenticon.png" alt="">
    </div>
</form>



<script>
    function select() {
        var ischecked = $('input[type=checkbox]:checked').length;
        if (ischecked <= 0) {
            alert("No Record Selected");
            return false;
        } else {
            $('#selectItem').modal('hide');
            var $checkboxes = $('input[type="checkbox"]');
            var countCheckedCheckboxes = $checkboxes.filter(':checked').length;
            console.log(countCheckedCheckboxes);
            document.getElementById("result").innerHTML = countCheckedCheckboxes;
        }
    }

</script>
