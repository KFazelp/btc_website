<?php
/* Template Name: New Merchants */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bank Technology Consultant</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/font-awesome/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="complete-bar" id="bar"></div>

<div class="steps-sec" id="STEPS">
    <div class="step-box" onclick="NextStep(1)">
        <div class="step-number" id="StepNumber-1">
            <div class="step-title">Step</div>
            <div>1</div>
        </div>
    </div>
    <div class="step-box" onclick="NextStep(2)" id="STEP">
        <div class="step-number" id="StepNumber-2">
            <div class="step-title">Step</div>
            <di>2</di>
        </div>
    </div>
</div>

<form id="new-merchant-form" method="" action="">

    <input name="merchant" type="text" style="display: none" value="new">

    <div class="business-sec" id="Section-1">
        <div class="business-sec-text">
            <div class="business-sec-title">Contact Information</div>
        </div>
        <div>
            <input id="Input-1" type="text" class="business-field" name="Name" placeholder="Name">
        </div>
        <div>
            <input id="Input-2" type="text" class="business-field" name="BusinessName" placeholder="Business Name">
        </div>
        <div>
            <input id="Input-3" type="text" class="business-field" name="Landline" placeholder="Landline">
        </div>
        <div>
            <input id="Input-4" type="text" class="business-field" name="Mobile" placeholder="Mobile Number">
        </div>
        <div>
            <input id="Input-5" type="email" class="business-field" name="Email" placeholder="Email Address">
        </div>
        <div class="customer-sec-btn" onclick="NextStep(2)">
            <div>next step</div>
            <div class="fa fa-angle-right customer-btn-icon" aria-hidden="true"></div>
        </div>


        <div class="back-sec">
            <div class="back-sec-bg"></div>
            <div class="back-text" onclick="location.href='<?php echo get_template_directory_uri(); ?>/home'">
                <div class="fa fa-home back-icon"></div>
                <div>Back to Home</div>
            </div>
        </div>
    </div>

    <div class="services-sec" id="Section-2">
        <div class="services-sec-text">
            <div class="services-sec-title">Which Services?</div>
            <div>Please tick the box(s) of your choice</div>
        </div>
        <input id="Input-6" type="text" name="services" value="" style="display: none">
        <div class="services-container">
            <div class="service-box" id="Box-1" onclick="Select('1')">
                <div class="service-title">On Line</div>
            </div>
            <div class="service-box" id="Box-2" onclick="Select('2')">
                <div class="service-title">Face to Face</div>
            </div>
            <div class="service-box" id="Box-3" onclick="Select('3')">
                <div class="service-title">Pay by Phone</div>
            </div>
            <div class="service-box" id="Box-4" onclick="Select('4')">
                <div class="service-title">Pay by Text</div>
            </div>
            <div class="service-box" id="Box-5" onclick="Select('5')">
                <div class="service-title">Pay by Mail</div>
            </div>
        </div>
        <button type="submit" class="customer-sec-btn" id="GREEN" onclick="Confirm()">
            <div>Send</div>
            <div class="fa fa-angle-right customer-btn-icon" aria-hidden="true"></div>
        </button>
    </div>

</form>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script>
    $(function () {
        $('#new-merchant-form').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                type: 'post',
                url: '',
                data: $('#new-merchant-form').serialize(),
                success: function () {
                    console.log('success!');
                    document.getElementById("new-merchant-form").reset();
                },
                error: function () {
                    console.log('Error!');
                    document.getElementById("new-merchant-form").reset();
                },
                done: function () {
                    console.log('Done!');
                    document.getElementById("new-merchant-form").reset();
                }
            });
        });
    });
</script>



<?php
if($_POST) {
    //get data from ajax
    $name = $_POST['Name'];
    $business = $_POST['BusinessName'];
    $landline = $_POST['Landline'];
    $mobile = $_POST['Mobile'];
    $email = $_POST['Email'];
    $services = $_POST['services'];


    //save message in database
    $new_merchant = array(
        'post_title'    => $name." - ".$business,
        'post_status'   => 'publish',
        'post_type'     => 'Merchants'
    );

    $merchant_id = wp_insert_post( $new_merchant );


    //add data to message
    update_field('name', $name, $merchant_id);
    update_field('business_name', $business, $merchant_id);
    update_field('landline', $landline, $merchant_id);
    update_field('mobile_number', $mobile, $merchant_id);
    update_field('email_address', $email, $merchant_id);
    update_field('services', $services, $merchant_id);
}

?>



<div class="confirm-sec" id="Section-3">
    <div class="confirm-container" id="ConfirmContainer">
        <div class="confirm-box confirm-animation" id="ConfirmCircle">
            <div class="fa fa-check check-icon hide" aria-hidden="true" id="ConfirmCheck"></div>
        </div>
    </div>
    <div class="confirm-text" id="ConfirmText">
        <div class="confirm-title">Successfully Registered</div>
        <div>We will contact you soon</div>
    </div>
    <div class="back-sec" id="BackHome">
        <div class="back-sec-bg"></div>
        <div class="back-text" onclick="location.href='<?php echo get_template_directory_uri(); ?>/home'">
            <div class="fa fa-home back-icon"></div>
            <div>Back to Home</div>
        </div>
    </div>
</div>


<footer>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/customer.js" type="text/javascript"></script>
</footer>

</body>
</html>
