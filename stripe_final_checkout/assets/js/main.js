(function ($) {
    "use strict";
    jQuery(document).ready(function ($) {

        // Carousal
        $('.carousel').carousel();
        //        For lightcase
        $(".hub").on("click", function () {
            window.open('https://drive.google.com/drive/u/1/folders/1XdDTNpMNWoTKB5jBo6iaI3yW0ZIr2mvu', 'Portfolio', 'menubar=no, location=no, toolbar=no, scrollbars=yes, width=500, height=500');
            return false;
        });
        $('a[data-rel^=lightcase]').lightcase();

    });
    jQuery(window).on('load', function () {});

}(jQuery));


$(document).ready(function () {
    //    $('select').selectpicker();
    $('.label.ui.dropdown')
        .dropdown();

    $('.no.label.ui.dropdown')
        .dropdown({
            useLabels: false
        });

    $('.ui.button').on('click', function () {
        $('.ui.dropdown')
            .dropdown('restore defaults')
    })

});
//paypal validate
function paypal() {
    var ischecked = $('input[type = checkbox]:checked').length;
    var amount = $("input[name = amount]").val();
    var item_name = $("input[name = item_name]").val();
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
}


//--------------------------//
//-------select Items-------//
//--------------------------//

var total_amount = 0;
var items = new Array();
var all_item = new Array();

function select() {
    var ischecked = $('input[type=checkbox]:checked').length;
    if (ischecked <= 0) {
        alert("No Record Selected");
        return false;
    } else {
        $('#selectItem').modal('hide');
        var checkboxes = $('input[type="checkbox"]');
        var countChecked = checkboxes.filter(':checked').length;




        //var items = new Array();
        var prices = new Array();
        window.total_amount = 0;
        var amount = 0;
        var name = '';

        //var total_amount = 0;
        window.items = new Array();
        $("input:checked").each(function () {

            window.all_item.push($(this).val());

            if ($(this).val() == 'federal_job_search_coaching_1_hr') {
                amount = 50;
                name = 'Federal Job Search Coaching (1 Hour)';
                window.items.push({
                    name: name,
                    amount: amount,
                    fvalue: $(this).val()
                });
            }
            if ($(this).val() == 'resume_review_1_hr') {
                amount = 50;
                name = 'Resume Review (1 Hour)';
                window.items.push({
                    name: name,
                    amount: amount,
                    fvalue: $(this).val()
                });
            }
            if ($(this).val() == 'gs_4') {
                amount = 197;
                name = 'Resume Writing | GS-4 and below';
                window.items.push({
                    name: name,
                    amount: amount,
                    fvalue: $(this).val()
                });
            }
            if ($(this).val() == 'gs_9') {
                amount = 297;
                name = 'Resume Writing | GS-5/7/9';
                window.items.push({
                    name: name,
                    amount: amount,
                    fvalue: $(this).val()
                });
            }
            if ($(this).val() == 'gs_12') {
                amount = 497;
                name = 'Resume Writing | GS-5/7/9 GS-10/11/12';
                window.items.push({
                    name: name,
                    amount: amount,
                    fvalue: $(this).val()
                });
            }
            if ($(this).val() == 'gs_15') {
                amount = 797;
                name = 'Resume Writing | GS-13/14/15';
                window.items.push({
                    name: name,
                    amount: amount,
                    fvalue: $(this).val()
                });
            }
            if ($(this).val() == 'interview_coaching_2_hr') {
                amount = 197;
                name = 'Interview Coaching (2 Hours)';
                window.items.push({
                    name: name,
                    amount: amount,
                    fvalue: $(this).val()
                });
            }
            if ($(this).val() == 'salary_neg_2_hr') {
                amount = 497;
                name = 'Salary/Benefits Negotiation (2 Hours)';
                window.items.push({
                    name: name,
                    amount: amount,
                    fvalue: $(this).val()
                });
            }

            window.total_amount = total_amount + amount;


        });


        var item = '';
        var sitem = '';

        for (let i = 0; i < window.items.length; i++) {

            item = item + '<div>' + window.items[i]['name'] + ' -- <strong>' + window.items[i]['amount'] + '</strong> &nbsp; &nbsp;<span class="delitem" data-value="' + i + '" onclick=""><i class="fa fa-times"></i></span></div>';

            sitem = sitem + window.items[i]['name'] + ' || ';

        }
        sitem = sitem.substring(0, sitem.length - 3);


        if (total_amount == 0) {
            document.getElementById("item-names").innerHTML = '';
            document.getElementById("total-amount").innerHTML = "";
        } else {
            document.getElementById("item-names").innerHTML = item;
            document.getElementById("total-amount").innerHTML = "<div>Total amount to pay: <strong>" + total_amount + "$</strong></div>";
        }


        document.getElementById('item_name_stripe').value = sitem;
        document.getElementById('amount_stripe').value = total_amount;
        document.getElementById('item_name_paypal').value = sitem;
        document.getElementById('amount_paypal').value = total_amount;
        return true;
    }

}


//delete items from array
$(document).on("click", ".delitem", function () {
    var x = confirm("Are you sure to deselect this item?");
    if (x) {
        var d = $(this).data('value');

        var delAmount = window.items[d]['amount'];
        total_amount = window.total_amount - delAmount;

        //uncheck
        var fchecked = window.items[d]['fvalue'];

        $("input:checked").each(function () {
            if ($(this).val() == fchecked) {
                this.checked = false;
            }

        });

        window.items.splice(d, 1);

        var item = '';
        var sitem = '';

        for (let i = 0; i < window.items.length; i++) {

            item = item + '<div>' + window.items[i]['name'] + ' -- <strong>' + window.items[i]['amount'] + '</strong> &nbsp; &nbsp;<span class="delitem" data-value="' + i + '" onclick=""><i class="fa fa-times"></i></span></div>';

            sitem = sitem + window.items[i]['name'] + ' || ';

        }
        sitem = sitem.substring(0, sitem.length - 3);
        console.log(sitem);

        if (total_amount == 0) {
            document.getElementById("item-names").innerHTML = '';
            document.getElementById("total-amount").innerHTML = "";
        } else {
            document.getElementById("item-names").innerHTML = item;
            document.getElementById("total-amount").innerHTML = "<div>Total amount to pay: <strong>" + total_amount + "$</strong></div>";
        }



        document.getElementById('item_name_stripe').value = sitem;
        document.getElementById('amount_stripe').value = total_amount;
        document.getElementById('item_name_paypal').value = sitem;
        document.getElementById('amount_paypal').value = total_amount;

    }

});
