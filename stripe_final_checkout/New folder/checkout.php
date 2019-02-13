<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Fast Federal Resumes">
    <meta property="og:description" content="Find Your Dream Job. We’ll do the resume writing.">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Fast Federal Resumes</title>
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- bootstrap 4.0.0 bete2 css -->
    <!--    <link rel="stylesheet" href="assets/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <!-- jquery ui css -->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!--    tiny-slider css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.7.1/tiny-slider.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- jQuery, jquery payment master & stripe validate js must be at top-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="assets/jquery_payment_master/lib/jquery.payment.js"></script>
    <script src="https://js.stripe.com/v2/"></script>
    <script src="assets/js/stripe_validate.js"></script>
</head>

<body class="checkout-page">
    <!--    HEader area-->
    <header class="checkout-header">
        <div class="header-inner flexify">
            <div class="logo">
                <a href="index.php"><img src="assets/images/site-logo.svg" width="90" alt="Fast Federal Resumes"></a>
            </div>
        </div>
    </header>
    <!--    HEader area ends-->

    <!-- start checkout body -->
    <section class="check-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="check-title text-center">
                        <p>Sign Up Today Starting At $197</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="checkout-form-area">
                        <form class="checkout-form" id="checkout-form" method="POST">
                            <span id="payment-errors" style="font-size:12px;"></span>
                            <div class="">
                                <label for="payment_name" class="control-label">Select Option </label>
                                <select name="payment_name" id="payment_name" class="form-control" required>
                                    <option>Select</option>
                                    <option value="federal_job_search_coaching_1_hr">Federal Job Search Coaching (1 Hour)</option>
                                    <option value="resume_review_1_hr">Resume Review (1 Hour)</option>
                                    <option value="gs_4">Resume Writing: GS-4 and below</option>
                                    <option value="gs_9">Resume Writing: GS-5/7/9</option>
                                    <option value="gs_12">Resume Writing: GS-5/7/9 GS-10/11/12</option>
                                    <option value="gs_15">Resume Writing: GS-13/14/15</option>
                                    <option value="interview_coaching_2_hr">Interview Coaching (2 Hours)</option>
                                    <option value="salary_neg_2_hr">Salary/Benefits Negotiation (2 Hours)</option>
                                </select>

                            </div>
                            <div class="single-line">
                                <label for="email">email</label>
                                <input type="email" name="email" placeholder="Your best email address" required>
                            </div>
                            <div class="single-line single-inline-dbl">

                                <div class="card-number">
                                    <label for="cc-number" class="control-label">CREDIT CARD NUMBER <small class="text-muted"><span class="cc-brand"></span></small></label>
                                    <input id="cc-number" type="tel" class="cc-number" autocomplete="cc-number" data-stripe="number" placeholder="Card number" required>
                                </div>
                                <div class="card-code">
                                    <label for="cardCode">CVC Code:</label>
                                    <input type="tel" class="cc-cvc" data-stripe="cvc" placeholder="CVC" required>
                                </div>
                            </div>
                            <div class="single-line single-inline-dbl">
                                <div class="exp-month">
                                    <label for="expireMonth">Expiry Month</label>
                                    <select name="expireMonth" data-stripe="exp-month" class="" required>
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
                                    <select name="expireYear" data-stripe="exp-year" required>
                                        <option value="" selected>Select Year</option>
                                        <?php
											$cur_year = date('Y');
											for ($i=0; $i<=10; $i++) {
											    echo '<option value="'.$cur_year.'">'.$cur_year.'</option>';
											    $cur_year++;
											}
										?>
                                    </select>
                                </div>
                            </div>
                            <div class="single-line text-center">
                                <button type="submit" Onclick="return Confirm()">Sign Up</button>
                            </div>
                            <div class="checkout-payment-icon text-center">
                                <img src="assets/images/paymenticon.png" alt="">
                            </div>
                        </form>

                        <hr class="divider">
                        <div class="checkout-security">
                            <div class="single-security guarantee">
                                <!-- <div class="security-img"> -->
                                <img src="assets/images/sg.png" alt="100%">
                                <!-- </div> -->
                                <div class="security-info">
                                    <h6>Satisfaction Guarantee</h6>
                                    <p>(Get 2 Re-Writes within 48 hours if you are not satisfied your resume will get you an interview)</p>
                                </div>
                            </div>
                            <div class="single-security ssl">
                                <!-- <div class="security-img"> -->
                                <img src="assets/images/ssl.png" alt="">
                                <!-- </div> -->
                                <div class="security-info">
                                    <h6>SSL Secure Payment</h6>
                                    <p> All orders are through a secure network. Your credit card information is never stored in any way. We respect your privacy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="checkout-video mb-20">
                        <img src="assets/images/cv-1.png" alt="">
                        <a href="https://www.youtube.com/embed/jssO8-5qmag" data-rel="lightcase"><img src="assets/images/cv-btn-1.png" alt=""></a>
                    </div>
                    <div class="check-receiption mb-20">
                        <p class="check-sidebar-title">Here is What You Need to Know</p>
                        <hr class="divider">
                        <div class="check-receipt">
                            <div class="single-receiption">
                                <img src="assets/images/blue-check.png" alt="" class="receiption-img">
                                <p class="receiption-content"><span>WHATS NEXT?</span><br> - After signing up, you will be emailed a link to our calendar where you can choose a date/time for your initial one-hour consultation with one of our expert resume writers. To schedule an appointment you will need to fill out our simple intake form, which requires you to upload your current resume. If you don't have a current resume, please read the following link for tips on how to initially build a basic federal resume: https://www.usajobs.gov/Help/how-to/account/documents/resume/build/</p>
                            </div>
                            <div class="single-receiption">
                                <img src="assets/images/blue-check.png" alt="" class="receiption-img">
                                <p class="receiption-content"><span>WHAT ARE YOUR BUSINESS HOURS?</span><br> - We are available 9am-9pm EST Fri-Mon via live-chat, contact form, and email.</p>
                            </div>
                            <div class="single-receiption">
                                <img src="assets/images/blue-check.png" alt="" class="receiption-img">
                                <p class="receiption-content"><span>I CAN WRITE MY OWN RESUME. WHY WOULD I NEED YOU?</span><br> - If you can write your own high-quality federal resume -- go for it! We are here for those who are intimidated by the federal application process, who aren't skilled writers, who dislike writing resumes, who want professionals to ensure their resume includes all the federal lingo and buzzwords, or who simply DON'T WANT TO write their own resume. If CURRENT federal employees use us for creating powerful resumes so they can get promoted, you probably should too!</p>
                            </div>
                            <div class="single-receiption">
                                <img src="assets/images/blue-check.png" alt="" class="receiption-img">
                                <p class="receiption-content"><span>WHY SHOULD I USE YOU INSTEAD OF A FREE RESUME WRITER?</span><br> -Keep in mind that "free" doesn't mean high-quality and it certainly doesn't mean they should automatically be trusted. Does the resume writer know the difference between "WG" and "GS"? Hint: It matters when it comes to federal resumes. Does the resume writer know how a "merit promotion panel" rates and ranks WG applicants? They should! All of our resume writers know these things, which will give your resume an advantage over other applicants. </p>
                            </div>
                            <div class="single-receiption">
                                <img src="assets/images/blue-check.png" alt="" class="receiption-img">
                                <p class="receiption-content"><span>WHAT IF I AM UNHAPPY WITH THE FINAL RESUME?</span><br> - We offer 2 rewrites within 48 hours of receiving your final resume. We WANT you to be happy!
                                </p>
                            </div>
                            <div class="single-receiption">
                                <img src="assets/images/blue-check.png" alt="" class="receiption-img">
                                <p class="receiption-content"><span>
                                        DO YOU OFFER A MONEY-BACK GUARANTEE?</span><br> -No. We do not decide who gets called for interviews. That is up to the hiring manager. Because we have no control over who gets called for interviews we cannot offer your money back. </p>
                            </div>
                            <div class="single-receiption">
                                <img src="assets/images/blue-check.png" alt="" class="receiption-img">
                                <p class="receiption-content"><span>I HAVE MORE QUESTIONS</span> - No problem. Chat with us below or contact us at Info@FastFedealResumes.com and we will respond within one business day.</p>
                            </div>
                            <div class="single-receiption">
                                <img src="assets/images/blue-check.png" alt="" class="receiption-img">
                                <p class="receiption-content"><span>YOU SOUND LIKE THE WORLDS BEST FEDERAL RESUME WRITERS!</span><br> - Haha, we concur!</p>
                            </div>

                        </div>
                    </div>
                    <div class="check-testimonial-area mb-20">
                        <p class="check-sidebar-title">Featured Testimonials</p>
                        <hr class="divider">
                        <div class="check-testimonial-inner">
                            <div class="check-testimonial">
                                <div class="check-testimonial-avatar">
                                    <div class="check-testimonial-img">
                                        <img src="assets/images/ct-1.png" alt="">
                                    </div>
                                    <div class="check-testimonial-info">
                                        <p class="avatar-name">JGR</p>
                                    </div>
                                </div>
                                <div class="check-testimonial-text">
                                    <p>“Ken taught me step-by-step how to slay the federal hiring process dragon! Do it...you will reach your goal! Just got my offer today for GS-12!! ”</p>
                                </div>
                            </div>
                            <div class="check-testimonial">
                                <div class="check-testimonial-avatar">
                                    <div class="check-testimonial-img">
                                        <img src="assets/images/ct-1.png" alt="">
                                    </div>
                                    <div class="check-testimonial-info">
                                    </div>
                                </div>
                                <div class="check-testimonial-text">
                                    <p>“Ken, you went step by step! I learned about a lot of things that I had no clue about like the differences between federal and private-sector resumes and how to negotiate salary. I even learned about interviewing and how to control the interview. I could go on and on. Hire Ken and you have made a great investment and will get your money back 10-fold. I know because I got hired!!”</p>
                                </div>
                            </div>
                            <div class="check-testimonial">
                                <div class="check-testimonial-avatar">
                                    <div class="check-testimonial-img">
                                        <img src="assets/images/ct-1.png" alt="">
                                    </div>
                                    <div class="check-testimonial-info">
                                        <p class="avatar-name">R. Ali.</p>
                                    </div>
                                </div>
                                <div class="check-testimonial-text">
                                    <p>“Ken, thank you so kindly for the time, effort and dedication you have put into this. I knew little going in and now I am filled with knowledge. This was worth it. So, thank you, thank you, and thank you. I'm glad I invested. YOU ROCK! ”</p>
                                </div>
                            </div>
                            <div class="check-testimonial">
                                <div class="check-testimonial-avatar">
                                    <div class="check-testimonial-img">
                                        <img src="assets/images/ct-1.png" alt="">
                                    </div>
                                    <div class="check-testimonial-info">
                                        <p class="avatar-name">Brooke F.</p>
                                    </div>
                                </div>
                                <div class="check-testimonial-text">
                                    <p>“Ken demonstrates an enormous amount of patience, ensuring that everyone is comfortable with the subject matter. He is not only friendly but also is engaging. Ken displays a genuine concern for the folks he consults for. In addition, Ken is a great communicator and I was impressed by the depth of knowledge he has in Federal Human Resources. With my fine-tuned resume now I'm getting more referrals and interviews.”</p>
                                </div>
                            </div>
                            <div class="check-testimonial">
                                <div class="check-testimonial-avatar">
                                    <div class="check-testimonial-img">
                                        <img src="assets/images/ct-1.png" alt="">
                                    </div>
                                    <div class="check-testimonial-info">
                                        <p class="avatar-name">A.V.</p>
                                    </div>
                                </div>
                                <div class="check-testimonial-text">
                                    <p>“After working with Ken I am 110% sure that ALL my previous applications and resumes through USAJOBS ended up in the trash (LOL). Thank you so much! ”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="assets/images/shape_green.png" alt="" class="check-grn-shape">
    </section>
    <!-- staendrt checkout body -->
    <!-- start footer area -->
    <footer class="footer-area check-footer">
        <div class="container">
            <div class="row">
                <div class="footer-inner">
                    <div class="copyright">
                        <p> © 2018 Writers’ Bar. All rights reserved</p>
                    </div>
                    <div class="footer-logo">
                        <a href="#"><img src="assets/images/site-logo-red.svg" alt="Fast Federal Resumes"></a>
                    </div>
                    <div class="footer-info">
                        <ul>
                            <li><a href="mailto:ffr@gmail.com">Info@FastFederalResumes.com</a></li>
                            <li><a href=tel:(954)636-9876>(563) 265-2687</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer area -->
    <!--Scripts-->
    <!-- modernizer js -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>

    <!--    tiny-slider js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.7.1/min/tiny-slider.js"></script>
    <!-- bootstrap popper js -->
    <script src="assets/js/popper_1.12.3.js"></script>
    <!-- bootstrap 4.0.0 beta2 js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- jquery ui js 1.12.1 js -->
    <script src="assets/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/lightcase.js"></script>

    <script type="text/javascript" src="assets/js/main.js"></script>
</body>

</html>
