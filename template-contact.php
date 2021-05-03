<?php
/* Template Name: Contact Us */
get_header(); ?>

<div class="contact-top-sec">
    <div class="contact-top-text">
        <div class="contact-top-title">Contact Us</div>
        <div>Tell us how we can look after you</div>
    </div>
    <div class="contact-top-image"></div>
</div>

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
    <div class="contact-container contact-form-box">
        <form id="existing-merchant-form" action="" method="post">
            <input type="text" style="display: none;" value="existing" name="merchant">
            <div class="customer-sec" id="ContactUs">
                <div class="customer-sec-text">
                    <div class="customer-sec-title">Contact Form</div>
                </div>
                <div>
                    <input type="text" class="customer-field contact-form-field" name="Name" placeholder="Name" required>
                </div>
                <div>
                    <input type="text" class="customer-field contact-form-field" name="ID" placeholder="Reference Number (If Applicable)" required>
                </div>
                <div>
                    <select class="customer-field contact-form-field" name="Title" placeholder="Title">
                        <option value="Electronic Machine">Payment Terminal</option>
                        <option value="Settlement">Settlement</option>
                        <option value="New Machines">Paper roll</option>
                    </select>
                </div>
                <div>
                    <textarea class="customer-field contact-form-field" name="Description" id="" cols="30" rows="10" placeholder="Message" required></textarea>
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

<?php get_footer(); ?>