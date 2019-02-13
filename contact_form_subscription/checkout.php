<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Writers' Bar</title>
    <!-- bootstrap 4.0.0 bete2 css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <!-- jquery ui css -->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!--    tiny-slider css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.7.1/tiny-slider.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- jQuery, jquery payment master & stripe validate js must be at top-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/jquery_payment_master/lib/jquery.payment.js"></script>
    <script src="https://js.stripe.com/v2/"></script>
    <script src="assets/js/stripe_validate.js"></script>
</head>

<body class="checkout-page">
    <!--    HEader area-->
    <header class="checkout-header">
        <div class="header-inner flexify">
            <div class="logo">
                <a href="#"><img src="assets/images/writers_logo.svg" width="90" alt="Writer's Bar"></a>
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
                        <p>Start your subscription-$297/mo cancel anytime</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="checkout-form-area">
                        <form class="checkout-form" id="checkout-form" method="POST">
                            <span id="payment-errors" style="color:red; font-size:12px;"></span>
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
                                <button type="submit">Sign Up</button>
                            </div>
                            <div class="checkout-payment-icon text-center">
                                <img src="assets/images/paymenticon.png" alt="">
                            </div>
                        </form>
                        <hr class="divider">
                        <div class="checkout-security">
                            <div class="single-security guarantee">
                                <!-- <div class="security-img"> -->
                                <img src="assets/images/14day.png" alt="">
                                <!-- </div> -->
                                <div class="security-info">
                                    <h6>14-Day Moneyback Guarantee</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
                    <div class="checkout-video mb-20">
                        <img src="assets/images/cv-2.png" alt="">
                        <a href="https://www.youtube.com/embed/jssO8-5qmag" data-rel="lightcase"><img src="assets/images/cv-btn-2.png" alt=""></a>
                    </div>
                    <div class="check-receiption mb-20">
                        <p class="check-sidebar-title">What you'll receive today</p>
                        <hr class="divider">
                        <div class="check-receipt">
                            <div class="single-receiption">
                                <img src="assets/images/blue-check.png" alt="" class="receiption-img">
                                <p class="receiption-content"><span>Lorem ipsum -</span>dolor sit amet, consec tetur adipisicing elit.</p>
                            </div>
                            <div class="single-receiption">
                                <img src="assets/images/blue-check.png" alt="" class="receiption-img">
                                <p class="receiption-content"><span>DOLOR SITAME -</span>dolor sit ame ama, consec tetur adipisicing elit sed do eius mod tempor incididu consec tetur.</p>
                            </div>
                            <div class="single-receiption">
                                <img src="assets/images/blue-check.png" alt="" class="receiption-img">
                                <p class="receiption-content"><span>Lorem ipsum -</span>dolor sit amet, consec tetur adipisicing elit.</p>
                            </div>
                            <div class="single-receiption">
                                <img src="assets/images/blue-check.png" alt="" class="receiption-img">
                                <p class="receiption-content"><span>DOLOR SITAME -</span>dolor sit ame ama, consec tetur adipisicing elit sed do eius mod tempor incididu consec tetur.</p>
                            </div>
                            <div class="single-receiption">
                                <img src="assets/images/blue-check.png" alt="" class="receiption-img">
                                <p class="receiption-content"><span>Lorem ipsum -</span>dolor sit amet, consec tetur adipisicing elit.</p>
                            </div>
                            <div class="single-receiption">
                                <img src="assets/images/blue-check.png" alt="" class="receiption-img">
                                <p class="receiption-content"><span>DOLOR SITAME -</span>dolor sit ame ama, consec tetur adipisicing elit sed do eius mod tempor incididu consec tetur.</p>
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
                                        <p class="avatar-name">Nicaila Fleur</p>
                                        <p class="avatar-company">Owner, Company Name</p>
                                    </div>
                                </div>
                                <div class="check-testimonial-text">
                                    <p>“Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua adipi sicing elit, sed do .”</p>
                                </div>
                            </div>
                            <div class="check-testimonial">
                                <div class="check-testimonial-avatar">
                                    <div class="check-testimonial-img">
                                        <img src="assets/images/ct-1.png" alt="">
                                    </div>
                                    <div class="check-testimonial-info">
                                        <p class="avatar-name">Nicaila Fleur</p>
                                        <p class="avatar-company">Owner, Company Name</p>
                                    </div>
                                </div>
                                <div class="check-testimonial-text">
                                    <p>“Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua adipi sicing elit, sed do .”</p>
                                </div>
                            </div>
                            <div class="check-testimonial">
                                <div class="check-testimonial-avatar">
                                    <div class="check-testimonial-img">
                                        <img src="assets/images/ct-1.png" alt="">
                                    </div>
                                    <div class="check-testimonial-info">
                                        <p class="avatar-name">Nicaila Fleur</p>
                                        <p class="avatar-company">Owner, Company Name</p>
                                    </div>
                                </div>
                                <div class="check-testimonial-text">
                                    <p>“Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua adipi sicing elit, sed do .”</p>
                                </div>
                            </div>
                            <div class="check-testimonial">
                                <div class="check-testimonial-avatar">
                                    <div class="check-testimonial-img">
                                        <img src="assets/images/ct-1.png" alt="">
                                    </div>
                                    <div class="check-testimonial-info">
                                        <p class="avatar-name">Nicaila Fleur</p>
                                        <p class="avatar-company">Owner, Company Name</p>
                                    </div>
                                </div>
                                <div class="check-testimonial-text">
                                    <p>“Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua adipi sicing elit, sed do .”</p>
                                </div>
                            </div>
                            <div class="check-testimonial">
                                <div class="check-testimonial-avatar">
                                    <div class="check-testimonial-img">
                                        <img src="assets/images/ct-1.png" alt="">
                                    </div>
                                    <div class="check-testimonial-info">
                                        <p class="avatar-name">Nicaila Fleur</p>
                                        <p class="avatar-company">Owner, Company Name</p>
                                    </div>
                                </div>
                                <div class="check-testimonial-text">
                                    <p>“Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua adipi sicing elit, sed do .”</p>
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
                        <a href="#"><img src="assets/images/footer-logo.svg" alt=""></a>
                    </div>
                    <div class="footer-info">
                        <ul>
                            <li><a href="#">writersbar.co@gmail.com</a></li>
                            <li><a href=tel:(954)636-9876>(954)636-9876</a></li>
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
