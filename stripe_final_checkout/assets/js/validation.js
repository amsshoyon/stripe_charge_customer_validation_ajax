function stripe() {

    var ischecked = $('input[type = checkbox]:checked').length;
    var email = $("input[name = email]").val();
    var card_no = $("input[name = card_no]").val();
    var cvc_no = $("input[name = cvc_no]").val();
    var expireMonth = $("#expireMonth option:selected").val();
    var expireYear = $("#expireYear option:selected").val();



    if (ischecked <= 0) {
        document.getElementById("result").innerHTML = "nothing Selected";
        return false;
    }
    if (email == '' || email == null) {
        document.getElementById("result").innerHTML = "Email Required";
        return false;
    }
    if (card_no == '' || card_no == null) {
        document.getElementById("result").innerHTML = "Card Required";
        return false;
    }
    if (cvc_no == '' || cvc_no == null) {
        document.getElementById("result").innerHTML = "CVC Required";
        return false;
    }
    if (expireMonth == '' || expireMonth == null) {
        document.getElementById("result").innerHTML = "Month Required";
        return false;
    }
    if (expireYear == '' || expireYear == null) {
        document.getElementById("result").innerHTML = "Year Required";
        return false;
    }
    $("#checkout-form").submit();
}
