<div class="select-items">

    <a class="selectItem" data-toggle="modal" data-target="#selectItem">
        Select Items
    </a>

    <!-- The Modal -->
    <div class="modal" id="selectItem" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" style="max-width:800px;">
            <div class="modal-content selectItem">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Please Select One / Multiple Resumes</h4>
                    <a type="button" class="close" data-dismiss="modal">&times;</a>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="card mb-5">
                        <div class="card-header">Fearures</div>
                        <div class="card-block p-0">
                            <table class="table text-center table-bordered table-sm m-0">
                                <thead class="text-center">
                                    <tr>
                                        <th>Select</th>
                                        <th>Resumes</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">

                                    <tr>
                                        <td>
                                            <label class="custom-control custom-checkbox">
                                                <input name="payment_name[]" value="federal_job_search_coaching_1_hr" type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                            </label>
                                        </td>
                                        <td>Federal Job Search Coaching (1 Hour)</td>
                                        <td>50$</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="custom-control custom-checkbox">
                                                <input name="payment_name[]" value="resume_review_1_hr" type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                            </label>
                                        </td>
                                        <td>Resume Review (1 Hour)</td>
                                        <td>50$</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="custom-control custom-checkbox">
                                                <input name="payment_name[]" value="gs_4" type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                            </label>
                                        </td>
                                        <td>Resume Writing: GS-4 and below</td>
                                        <td>197$</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="custom-control custom-checkbox">
                                                <input name="payment_name[]" value="gs_9" type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                            </label>
                                        </td>
                                        <td>Resume Writing: GS-5/7/9</td>
                                        <td>297$</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="custom-control custom-checkbox">
                                                <input name="payment_name[]" value="gs_12" type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                            </label>
                                        </td>
                                        <td>Resume Writing: GS-5/7/9 GS-10/11/12</td>
                                        <td>497$</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="custom-control custom-checkbox">
                                                <input name="payment_name[]" value="gs_15" type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                            </label>
                                        </td>
                                        <td>Resume Writing: GS-13/14/15</td>
                                        <td>797$</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="custom-control custom-checkbox">
                                                <input name="payment_name[]" value="interview_coaching_2_hr" type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                            </label>
                                        </td>
                                        <td>Interview Coaching (2 Hours)</td>
                                        <td>197$</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="custom-control custom-checkbox">
                                                <input name="payment_name[]" value="salary_neg_2_hr" type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                            </label>
                                        </td>
                                        <td>alary/Benefits Negotiation (2 Hours)</td>
                                        <td>497$</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <!--                    <button type="button" class=" btn-danger" data-dismiss="modal">SELECT</button>-->
                    <button type="button" class=" btn-danger" onclick="return select()">SELECT</button>
                </div>

            </div>
        </div>
    </div>

</div>


<script>
    function select() {
        var ischecked = $('input[type=checkbox]:checked').length;
        if (ischecked <= 0) {
            alert("No Record Selected");
            return false;
        } else {
            $('#selectItem').modal('hide');
            var $checkboxes = $('input[type="checkbox"]');
            var countChecked = $checkboxes.filter(':checked').length;
            document.getElementById("result").innerHTML = countChecked + ' Items Selected';



            var all_name = new Array();
            var amount = 0;
            var total_amount = 0;

            $("input:checked").each(function() {

                all_name.push($(this).val());

                if ($(this).val() == 'federal_job_search_coaching_1_hr') {
                    amount = 50;
                }
                if ($(this).val() == 'resume_review_1_h') {
                    amount = 50;
                }
                if ($(this).val() == 'gs_4') {
                    amount = 197;
                }
                if ($(this).val() == 'gs_9') {
                    amount = 297;
                }
                if ($(this).val() == 'gs_12') {
                    amount = 497;
                }
                if ($(this).val() == 'gs_15') {
                    amount = 797;
                }
                if ($(this).val() == 'interview_coaching_2_hr') {
                    amount = 197;
                }
                if ($(this).val() == 'salary_neg_2_hr') {
                    amount = 497;
                }


                total_amount = total_amount + amount;

            });


            console.log(all_name);
            console.log(amount);
            document.getElementById('item_name_1').value = all_name;
            document.getElementById('amount_1').value = total_amount;
            return true;
        }



    }

</script>
