<div class="single-line single-inline-dbl">

    <div class="card-number">
        <label for="cc-number" class="control-label">CREDIT CARD NUMBER <small class="text-muted"><span class="cc-brand"></span></small></label>
        <input id="cc-number" name="card_no" type="tel" class="cc-number" autocomplete="cc-number" data-stripe="number" placeholder="Card number">
    </div>
    <div class="card-code">
        <label for="cardCode">CVC Code:</label>
        <input type="tel" name="cvc_no" class="cc-cvc" data-stripe="cvc" placeholder="CVC">
    </div>
</div>
<div class="single-line single-inline-dbl">
    <div class="exp-month">
        <label for="expireMonth">Expiry Month</label>
        <select name="expireMonth" data-stripe="exp-month" id="expireMonth">
            <option value="" selected>Select Month</option>
            <?php
                for($month=1; $month <= 12; $month++){
                    echo '<option value="'.$month.'">'.date('F', mktime(0, 0, 0, $month, 1)).'</option>';
                }
            ?>
        </select>
    </div>
    <div class="exp-year">
        <label for="expireYear">Expiry Year</label>
        <select name="expireYear" data-stripe="exp-year" id="expireYear">
            <option value="" selected>Select Year</option>
            <?php
                $cur_year = date('Y');
                for ($i=0; $i<=10; $i++) { echo '<option value="' .$cur_year.'">'.$cur_year.'</option>';
                    $cur_year++;
                }
            ?>
        </select>
    </div>
</div>
