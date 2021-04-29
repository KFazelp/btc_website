<?php get_header(); ?>

<div id="mainSlider" class="carousel slide top-sec" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
        <li data-target="#mainSlider" data-slide-to="1"></li>
    </ol>

    <div class="carousel-inner">
        <div id="slider-image-0" class="item active">
            <div class="top-sec-text">
                <div class="top-sec-title">LONDON</div>
            </div>
        </div>
        <div id="slider-image-1" class="item">
            <div class="top-sec-text">
                <div class="top-sec-title">GENEVA</div>
            </div>
        </div>
    </div>

    <style>
        .item {
            height: 760px;
            width: 100%;
            padding-top: 450px;
        }
        #slider-image-0 {
            background: url("<?php echo get_template_directory_uri(); ?>/assets/new-main-bg.jpg") bottom no-repeat;
            background-size: cover;
        }
        #slider-image-1 {
            background: url("<?php echo get_template_directory_uri(); ?>/assets/geneva-1.jpeg") bottom no-repeat;
            background-size: cover;
        }
    </style>

    <a class="left carousel-control" href="#mainSlider" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#mainSlider" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="slogan-sec">
    <div class="slogan-title">We provide State-of-the Art Technology in the Electronic Payment Industry</div>
    <div class="slogan-text">Take card payment through every method by setting-up the complete banking system in UK and Switzerland</div>
</div>

<div class="payment-sec">
    <div class="payment-sec-title">PAYMENT METHODS</div>
    <div class="payment-container">
        <div class="payment-title">Virtual Payment</div>
        <div class="payment-part-title">MOTO</div>
        <div class="payment-part">
            <div class="payment-part-sub">
                <div class="payment-part-sub-title">Payment by Phone</div>
                <div class="payment-part-sub-text">
                    <div>Take Payment by Telephone, On our Platform, 3D secure :</div>
                    <ul>
                        <li>The 16 digit card number</li>
                        <li>The Name</li>
                        <li>The 3 pin security cvv</li>
                        <li>The expiration date</li>
                        <li>Registered address</li>
                    </ul>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/pay-by-phone.gif" alt="virtual-payment" class="payment-part-gif" id="paymentPhoneGif">
         <!--   <img src="<?php echo get_template_directory_uri(); ?>/assets/paybymail.gif" alt="virtual-payment" class="payment-part-photo" style="right: 300px; top: 1354px; width: 220px"> -->
        </div>
        <div class="payment-part-title">Pay-by-link</div>
        <div class="payment-part">
            <div class="payment-part-sub" style="margin-right: 36px">
                <div class="payment-part-sub-title">Payment by Email</div>
                <div class="payment-part-sub-text">
                    <div>Receive Payment by sending an Email</div>
                    <ul>
                        <li>The 16 digit card number</li>
                        <li>The Name</li>
                        <li>The 3 pin security cvv</li>
                        <li>The expiration date</li>
                        <li>Registered address</li>
                    </ul>
                </div>
            </div>
            <div class="payment-part-sub">
                <div class="payment-part-sub-title">Payment by SMS</div>
                <div class="payment-part-sub-text">
                    <div>Receive Payment by sending an SMS</div>
                    <ul>
                        <li>The 16 digit card number</li>
                        <li>The Name</li>
                        <li>The 3 pin security cvv</li>
                        <li>The expiration date</li>
                        <li>Registered address</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="payment-container">
        <div class="payment-part">
            <div style="width: 60%"></div>
            <div class="payment-part-sub">
                <div class="payment-title">Electronic Machine Payment</div>
                <div class="payment-part-sub-text">
                    <ul style="margin-right: 40px">
                        <li>Desktop</li>
                        <li>Mobile 4G</li>
                        <li>Portable WiFi/Bluetooth</li>

                    </ul>
                    <ul>
                        <li>Apple Pay</li>
                        <li>Samsung Pay</li>
                        <li>Google wallet</li>
                        <li>Contactles</li>
                        <li>Paper roll: 57x40x12.7</li>
                    </ul>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/facetoface-payment.png" alt="virtual-payment" class="payment-part-photo" id="paymentPosPhoto">
        </div>
    </div>

    <div class="payment-container" style="margin-top: 125px; padding-bottom: 50px">
        <div class="payment-title">Ecommerce architecture</div>
        <div class="payment-part">
            <div class="payment-part-sub">
                <div class="payment-part-sub-text">
                    <div>
                        Create the complete infrastructure for an Online Shop<br><br>
                    </div>
                    <div style="display: flex; flex-wrap: wrap">
                        <div style="margin-right: 40px">
                            <div>Administration</div>
                            <ul>
                                <li>Catalog</li>
                                <li>Product</li>
                                <li>Quantity</li>
                                <li>Price</li>
                                <li>Sale</li>
                                <li>Order</li>
                                <li>Return</li>
                                <li>Customer</li>
                                <li>Orders completed</li>
                                <li>Report</li>
                                <li>Maintenance</li>
                            </ul>
                        </div>
                        <div style="margin-right: 40px">
                            <div>Shop front</div>
                            <ul>
                                <li>Shopping Cart</li>
                                <li>Checkout</li>
                                <li>Connect to bank</li>
                                <li>Terms and conditions</li>
                                <li>Privacy policy</li>
                                <li>Cookies</li>
                            </ul>

                        </div>
                        <!--
                        <div class="payment-part-title" style="margin-right: 40px" Style="padding-top:30px">Plug-in</div> -->
                        
                        <div>
                            <div>Hosted Payment Page</div>
                            <ul>
                                <li>Credit/Debit Card</li>
                                <li>Security Number</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/online-payment.png" alt="virtual-payment" class="payment-part-photo" id="paymentEcommercePhoto">
        </div>
    </div>
</div>


<div class="slogan-sec">
    <div class="slogan-text" style="padding: 0;">
        We convert a sophisticated technology into a simple technology for you to sell and take money
    </div>
</div>

<div class="jobs-sec" id="PaymentTypes">
    <div class="jobs-sec-title">Our Industries</div>
    <div class="jobs-container">
        <div class="jobs-photo-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/gym.png" alt="gym" class="jobs-img" id="JobPhoto-1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/car.png" alt="casino" class="jobs-img" id="JobPhoto-2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/airplane2.png" alt="hotel" class="jobs-img" id="JobPhoto-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/roulette.png" alt="car" class="jobs-img" id="JobPhoto-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/university.png" alt="car" class="jobs-img" id="JobPhoto-5">
        </div>
        <div class="jobs-accordion">
            <ul>
                <li>
                    <div class="job-title" id="JobTab-1" onclick="JobShow(1)">
                        <div id="JobIcon-1" class="job-title-icon fa fa-hand-o-down" aria-hidden="true"></div>
                        <div>Recurring and Subscription Payment from our Platform</div>
                    </div>
                    <div class="job-content" id="Job-1">
                        Take payment weekly or monthly for membership
                        <br>
                        <div>
                            <ul>
                                <br>
                                <li>Gym</li>
                                <li>Hostel</li>
                                <li>Insurance</li>
                                <li>Estate Agent</li>
                                <li>Football Club</li>
                                <li>Place of Worship</li>
                                <li>University Accommodation </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="job-title" id="JobTab-2" onclick="JobShow(2)">
                        <div id="JobIcon-2" class="job-title-icon fa fa-hand-o-down" aria-hidden="true"></div>
                        <div>Downpayment</div>
                    </div>
                    <div class="job-content" id="Job-2">
                        Where you need a down payment:
                        <br>
                        <ul>
                            <br>
                            <li>Car Sales</li>
                            <li>Furniture</li>
                            <li>Electronics</li>
                            <li>Weddings</li>
                            <li>Catering</li>

                        </ul>
                    </div>
                </li>
                <li>
                    <div class="job-title" id="JobTab-3" onclick="JobShow(3)">
                        <div id="JobIcon-3" class="job-title-icon fa fa-hand-o-down" aria-hidden="true"></div>
                        <div>Pre Authorisation Payment</div>
                    </div>
                    <div class="job-content" id="Job-3">
                        The Airline industry includes off-line payment in mid-air for food and beverages is our speciality.
                        <ul>
                            <br><br>
                            <li>Airline- Midair sales</li>
                            <li>Airline Tickets</li>
                            <li>Travel Industry</li>
                            <li>Car Hire</li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="job-title" id="JobTab-4" onclick="JobShow(4)">
                        <div id="JobIcon-4" class="job-title-icon fa fa-hand-o-down" aria-hidden="true"></div>
                        <div>Advance Payment</div>
                    </div>
                    <div class="job-content" id="Job-4">The Entertainment Industry
                        <div>

                            <ul>
                                <br>
                                <li>Theatre</li>
                                <li>Cinema</li>
                                <li>Casino</li>
                                <li>Museum</li>
                                <li>Zoo</li>
                                <li>Theme Parks</li>
                                <li>Place of worship</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="job-title" id="JobTab-5" onclick="JobShow(5)">
                        <div id="JobIcon-5" class="job-title-icon fa fa-hand-o-down" aria-hidden="true"></div>
                        <div>Guarantor Facility Payment</div>
                    </div>
                    <div class="job-content" id="Job-5">For the Education Industry such as University and Private School
                        we offer you a parent guarantor to guarantee the pupil and the student fees for the academic year.
                        <br>
                        <ul>

                            <li>language school</li>
                            <li>Escrow account</li>
                            <li>Private school</li>
                            <li>University</li>
                            <li>Law firms</li>

                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="operation-sec">
    <div class="operation-content">
        <div class="operation-title">Smile, the cost is on us</div>
        <div class="operation-subtitle">Operation</div>
        <div class="operation-text">
            <ul>

                <li>Settlement from your sales can be next day</li>
                <li>Instant transaction reports.</li>
                <li>PCI DSS we do it all for you upfront with no monthly fees</li>
                <li>Excellent customer service</li>
                <li>Swap-out 48 hours for a broken hardware terminal.</li>
            </ul>
        </div>
    </div>
    <div class="operation-image"></div>
</div>

<div class="why-sec" id="NewMerchants">
    <div class="why-content">
        <div class="why-title">See why you should</div>
        <div class="why-title">Sign with us</div>
        <ul>
            <li>
                <div class="why-text-sec">
                    <div class="fa fa-check why-icon" aria-hidden="true"></div>
                    <div>Banking Fees for American Express cards are at half-price in comparison to the market rate.</div>
                </div>
            </li>
            <li>
                <div class="why-text-sec">
                    <div class="fa fa-check why-icon" aria-hidden="true"></div>
                    <div>Banking fees for Visa card and MasterCard we will let you know the cost on the acquire and offer
                        you a strong negotiating position.</div>
                </div>
            </li>
            <li>
                <div class="why-text-sec">
                    <div class="fa fa-check why-icon" aria-hidden="true"></div>
                    <div>Visa MasterCard America Express China Union Pay Dinners, JCB, K-net (Kuwait) MADA (Saudi Arabia) are all available with our service.</div>
                </div>
            </li>
        </ul>
        <!-- <div class="customer-sec-btn why-btn" onclick="location.href='<?php //echo site_url(); ?>/new-merchants'">
            <div>New Merchant</div>
            <div class="fa fa-angle-right customer-btn-icon" aria-hidden="true"></div>
        </div> -->
    </div>
</div>

<!--<div class="cash-advance-sec">-->
<!--    <div class="cash-sec">-->
<!--        <div class="cash-title">You need a bit of cash flow, call us here to help you</div>-->
<!--        <div class="cash-subtitle">Cash Advance for the Merchant</div>-->
<!--        <div class="cash-text">Cash Advance starting from £5000 up to £500000 is available. Cash Advance operates through a-->
<!--            merchant account and is calculated on your:-->
<!--            Previous annual sales - you pay it back through your future annual sales.-->
<!--            No customer is too small or large for us; you are all equally important for us.</div>-->
<!--    </div>-->
<!--</div>-->

<div class="contact-section">
    <div class="contact-container">
        <div class="customer-sec-title">Are You New Here?</div>
        <!-- <div class="customer-sec-description">Register now and wait for the call of our experts</div> -->
        <button class="customer-sec-btn contact-green-btn" onclick="location.href='<?php echo site_url(); ?>/new-merchants'">
            <div>New Merchants Registeration</div>
            <div class="fa fa-angle-right customer-btn-icon" aria-hidden="true"></div>
        </button>
        <div class="contact-photo"></div>
    </div>
    <div class="contact-container">
        <form id="existing-merchant-form" action="" method="post">
            <input type="text" style="display: none;" value="existing" name="merchant">
            <div class="customer-sec" id="ContactUs">
                <div class="customer-sec-text">
                    <div class="customer-sec-title">Contact Us</div>
                    <div>Tell us how we can look after you</div>
                </div>
                <div>
                    <input type="text" class="customer-field" name="Name" placeholder="Name" required>
                </div>
                <div>
                    <input type="text" class="customer-field" name="ID" placeholder="Reference Number (If Applicable)" required>
                </div>
                <div>
                    <select class="customer-field select-field" name="Title" placeholder="Title">
                        <option value="Electronic Machine">Payment Terminal</option>
                        <option value="Settlement">Settlement</option>
                        <option value="New Machines">Paper roll</option>
                    </select>
                </div>
                <div>
                    <textarea class="customer-field" name="Description" id="" cols="30" rows="10" placeholder="Message" required></textarea>
                </div>
                <input type="hidden" name="response" id="recaptchaResponse">
                <button type="submit" class="customer-sec-btn">
                    <div>Submit</div>
                    <div class="fa fa-check customer-btn-icon" aria-hidden="true"></div>
                </button>
            </div>
        </form>
    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6Lfq68gZAAAAAMK-FHz-1u97wFfXBEnhaHxGMfge"></script>
<script>
    $(function () {
        $('#existing-merchant-form').on('submit', function (e) {
            e.preventDefault();
            grecaptcha.ready(function() {
                grecaptcha.execute('6Lfq68gZAAAAAMK-FHz-1u97wFfXBEnhaHxGMfge', {action: 'submit'}).then(function(token) {
                    document.getElementById('recaptchaResponse').value = token;
                    $.ajax({
                        type: 'post',
                        url: '',
                        data: $('#existing-merchant-form').serialize(),
                        success: function () {
                            console.log('success!');
                            alert("Your message has been sent. We will contact you soon");
                            document.getElementById("existing-merchant-form").reset();
                        },
                        error: function () {
                            console.log('Error!');
                            document.getElementById("existing-merchant-form").reset();
                        },
                        done: function () {
                            console.log('Done!');
                            document.getElementById("existing-merchant-form").reset();
                        }
                    });
                });
            });
        });
    });
</script>

<?php
if($_POST) {
    //recognize form type
    $type = $_POST['merchant'];
    //get data from ajax
    $name = $_POST['Name'];
    $customer_id = $_POST['ID'];
    $title = $_POST['Title'];
    $message = $_POST['Description'];
    $response = $_POST['response'];

    //sending email
    $to = 'banktech.contactus@gmail.com';
    $subject = 'New Message - '.$name;

    $body = '<html><body style="padding: 20px"><div style="background: #270657 !important; font-family: Impact !important; font-size: 36px !important; padding: 15px 50px !important; color: white !important; margin-bottom: 20px !important;">Message Information</div><div style="background: #313235 !important; color: #eeeeee !important; padding: 20px !important; font-size: 16px !important; border: thin solid #eee !important;">';


    $body .= '<div style="display: flex !important; justify-content: center !important; margin-bottom: 10px !important;"><div style="width: 40% !important;">Customer ID:</div>';
    $body .= '<div style="width: 55% !important;">'.$customer_id.'</div></div>';

    $body .= '<div style="display: flex !important; justify-content: center !important; margin-bottom: 10px !important;"><div style="width: 40% !important;">Name:</div>';
    $body .= '<div style="width: 55% !important;">'.$name.'</div></div>';

    $body .= '<div style="display: flex !important; justify-content: center !important; margin-bottom: 10px !important;"><div style="width: 40% !important;">Title:</div>';
    $body .= '<div style="width: 55% !important;">'.$title.'</div></div>';

    $body .= '<div style="display: flex !important; justify-content: center !important; margin-bottom: 10px !important;"><div style="width: 40% !important;">Message:</div>';
    $body .= '<div style="width: 55% !important;">'.$message.'</div></div>';


    $body .= '</div></body></html>';

    $headers = array('Content-Type: text/html; charset=UTF-8');

    wp_mail( $to, $subject, $body, $headers );

    //save message in database
    $new_message = array(
        'post_title'    => $customer_id.'-'.$name,
        'post_status'   => 'publish',
        'post_type'     => 'Messages'
    );

    $message_id = wp_insert_post( $new_message );

    //add category to message
    if ($title == "Electronic Machine") {
        wp_set_post_terms( $message_id, array(4), 'category', false );
    }
    elseif ($title == "Settlement") {
        wp_set_post_terms( $message_id, array(5), 'category', false );
    }
    elseif ($title == "New Machines") {
        wp_set_post_terms( $message_id, array(6), 'category', false );
    }
    else {
        wp_set_post_terms( $message_id, array(1), 'category', false );
    }


    //add data to message
    update_field('name', $name, $message_id);
    update_field('message_text', $message, $message_id);
    update_field('customer_id', $customer_id, $message_id);
}

get_footer();
?>
