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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <div class="pricing">
                        <h4 class="text-center">Our Pricing</h4>

                        <div class="pricing-table">
                            <div class="single-box">
                                <div class="pricing-plan">Federal Job Search Coaching (1 Hour):</div>
                                <div class="pricing-amount">$50</div>
                            </div>
                            <div class="single-box">
                                <div class="pricing-plan">Resume Review (1 Hour):</div>
                                <div class="pricing-amount">$50</div>
                            </div>
                            <div class="single-box has-sub-box">
                                <div class="pricing-plan">Resume Writing:</div>
                                <div class="sub-box">
                                    <div class="single-box">
                                        <div class="pricing-plan">GS-4 and below:</div>
                                        <div class="pricing-amount">$197</div>
                                    </div>
                                    <div class="single-box">
                                        <div class="pricing-plan">GS-5/7/9:</div>
                                        <div class="pricing-amount">$297</div>
                                    </div>
                                    <div class="single-box">
                                        <div class="pricing-plan">GS-10/11/12:</div>
                                        <div class="pricing-amount">$497</div>
                                    </div>
                                    <div class="single-box">
                                        <div class="pricing-plan">GS-13/14/15:</div>
                                        <div class="pricing-amount">$797</div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-box">
                                <div class="pricing-plan">Interview Coaching (2 Hours):</div>
                                <div class="pricing-amount">$197</div>
                            </div>
                            <div class="single-box">
                                <div class="pricing-plan">Salary/Benefits Negotiation (2 Hours):</div>
                                <div class="pricing-amount">$497</div>
                            </div>
                        </div>
                    </div>
                    <div class="checkout-form-area">

                        <?php include('include/payment.php'); ?>

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
                    <section id="faqs" class="faq-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="faq-header text-center">
                                        <h2>Frequently Asked Questions </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="faq-content">
                                        <div class="faq-single-box">
                                            <div class="faq-box-header">
                                            </div>
                                            <div class="faq-box-body">
                                                <div class="accordion" id="faqStart1">
                                                    <div class="card faq-card">
                                                        <div class="card-header" id="start1">
                                                            <h5 class="mb-0">
                                                                <button class="btn-link faq-btn collapsed" type="button" data-toggle="collapse" data-target="#collapses1" aria-expanded="true" aria-controls="collapses1">
                                                                    What’s your turnaround time on a federal resume?
                                                                </button>
                                                            </h5>
                                                        </div>
                                                        <div id="collapses1" class="collapse" aria-labelledby="start1" data-parent="#faqStart">
                                                            <div class="card-body">
                                                                Typically, 3-5 days. This is dependent on the grade level you are pursuing, the scope of the
                                                                project, word count and research we have to conduct. Upon your initial intake interview, we will
                                                                provide you with the turnaround time.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion" id="faqStart2">
                                                    <div class="card faq-card">
                                                        <div class="card-header" id="start2">
                                                            <h5 class="mb-0">
                                                                <button class="btn-link faq-btn collapsed" type="button" data-toggle="collapse" data-target="#collapses2" aria-expanded="true" aria-controls="collapses2">
                                                                    How do you control for quality?
                                                                </button>
                                                            </h5>
                                                        </div>
                                                        <div id="collapses2" class="collapse" aria-labelledby="start2" data-parent="#faqStart">
                                                            <div class="card-body">
                                                                You can apply a coupon to a future appointment by logging into your account and clicking your name in the top right hand corner. You can then select “redeem voucher” and enter your code. The system will automatically apply the code to your next appointment. You can not apply your coupon to past appointment that are already completed.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion" id="faqStart3">
                                                    <div class="card faq-card">
                                                        <div class="card-header" id="start3">
                                                            <h5 class="mb-0">
                                                                <button class="btn-link faq-btn collapsed" type="button" data-toggle="collapse" data-target="#collapses3" aria-expanded="true" aria-controls="collapses3">
                                                                    What is included in a standard cleaning?
                                                                </button>
                                                            </h5>
                                                        </div>
                                                        <div id="collapses3" class="collapse" aria-labelledby="start3" data-parent="#faqStart">
                                                            <div class="card-body">
                                                                We have an in-house editor who looks over every resume before going your way - we check our
                                                                resume articles through various measures, including spell-checkers, readability, keyword
                                                                density, plagiarism and more.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion" id="faqStart4">
                                                    <div class="card faq-card">
                                                        <div class="card-header" id="start4">
                                                            <h5 class="mb-0">
                                                                <button class="btn-link faq-btn collapsed" type="button" data-toggle="collapse" data-target="#collapses4" aria-expanded="true" aria-controls="collapses4">
                                                                    What is the length of the resumes?
                                                                </button>
                                                            </h5>
                                                        </div>
                                                        <div id="collapses4" class="collapse" aria-labelledby="start4" data-parent="#faqStart">
                                                            <div class="card-body">
                                                                The preferred length of federal resumes is 3-5 pages, so that is where we try to land. Just keep
                                                                in mind that the longer the resume, the more time it takes to write, increasing your turnaround
                                                                time.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion" id="faqStart5">
                                                    <div class="card faq-card">
                                                        <div class="card-header" id="start5">
                                                            <h5 class="mb-0">
                                                                <button class="btn-link faq-btn collapsed" type="button" data-toggle="collapse" data-target="#collapses5" aria-expanded="true" aria-controls="collapses5">
                                                                    What are Special Projects?
                                                                </button>
                                                            </h5>
                                                        </div>
                                                        <div id="collapses5" class="collapse" aria-labelledby="start5" data-parent="#faqStart">
                                                            <div class="card-body">
                                                                We can take care of all your writing needs. Cover letters, LinkedIn profiles, thank you letters,
                                                                "Knowledge/Skills/Abilities" (KSA) responses, narrative essays - you name it, we write it. Shoot
                                                                us a message with details of your project, and we’ll send you your special quote.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="faq-single-box">
                                            <div class="faq-box-header">

                                            </div>
                                            <div class="faq-box-body">
                                                <div class="accordion" id="faqStart6">
                                                    <div class="card faq-card">
                                                        <div class="card-header" id="start6">
                                                            <h5 class="mb-0">
                                                                <button class="btn-link faq-btn collapsed" type="button" data-toggle="collapse" data-target="#collapses6" aria-expanded="true" aria-controls="collapses6">
                                                                    Where are you based?
                                                                </button>
                                                            </h5>
                                                        </div>
                                                        <div id="collapses6" class="collapse" aria-labelledby="start6" data-parent="#faqStart">
                                                            <div class="card-body">
                                                                We’re based in in the Heartland of the good ol' USA -- Iowa. However, our team of writers are
                                                                virtual and work remotely from all around the country.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion" id="faqAccount1">
                                                    <div class="card faq-card">
                                                        <div class="card-header" id="acoount1">
                                                            <h5 class="mb-0">
                                                                <button class="btn-link faq-btn collapsed" type="button" data-toggle="collapse" data-target="#collapsea7" aria-expanded="true" aria-controls="collapsea1">
                                                                    Do you have any hidden costs?
                                                                </button>
                                                            </h5>
                                                        </div>
                                                        <div id="collapsea7" class="collapse" aria-labelledby="acoount1" data-parent="#faqAccount">
                                                            <div class="card-body">
                                                                No. We perform resume reviews, federal resume writing, interview coaching, and salary/benefits
                                                                negotiation assistance on a flat-fee basis. Any additional costs would be incurred only at your
                                                                request for additional services or special projects.
                                                                request for additional services or special projects.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion" id="faqAccount2">
                                                    <div class="card faq-card">
                                                        <div class="card-header" id="acoount2">
                                                            <h5 class="mb-0">
                                                                <button class="btn-link faq-btn collapsed" type="button" data-toggle="collapse" data-target="#collapsea8" aria-expanded="true" aria-controls="collapsea2">
                                                                    What are your business hours?
                                                                </button>
                                                            </h5>
                                                        </div>
                                                        <div id="collapsea8" class="collapse" aria-labelledby="acoount2" data-parent="#faqAccount">
                                                            <div class="card-body">
                                                                Mon-Fri 9am-9pm EST.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion" id="faqAccount3">
                                                    <div class="card faq-card">
                                                        <div class="card-header" id="account3">
                                                            <h5 class="mb-0">
                                                                <button class="btn-link faq-btn collapsed" type="button" data-toggle="collapse" data-target="#collapsea9" aria-expanded="true" aria-controls="collapsea3">
                                                                    Are you a Veteran-owned business?
                                                                </button>
                                                            </h5>
                                                        </div>
                                                        <div id="collapsea9" class="collapse" aria-labelledby="account3" data-parent="#faqAccount">
                                                            <div class="card-body">
                                                                Yes. Ken, the company owner, is a Navy Vet.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion" id="faqAccount4">
                                                    <div class="card faq-card">
                                                        <div class="card-header" id="account4">
                                                            <h5 class="mb-0">
                                                                <button class="btn-link faq-btn collapsed" type="button" data-toggle="collapse" data-target="#collapsea10" aria-expanded="true" aria-controls="collapsea4">
                                                                    What if I have concerns/comments/questions before, during, or after hiring your
                                                                    company to write my federal resume?
                                                                </button>
                                                            </h5>
                                                        </div>
                                                        <div id="collapsea10" class="collapse" aria-labelledby="account4" data-parent="#faqAccount">
                                                            <div class="card-body">
                                                                Send any all questions, comments, or concerns to ​Info@FastFederalResumes.com​ and we will
                                                                get you squared away! Please give us one business day to respond.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="checkout-video mb-20">
                        <img src="assets/images/cv-1.png" alt="">
                        <a href="https://www.youtube.com/embed/Ti7XXjL9SE0" data-rel="lightcase"><img src="assets/images/cv-btn-1.png" alt=""></a>
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
