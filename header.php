<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bank Technology Consultant</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="main-background"></div>

<div class="mobile-nav" id="SideNav">
    <div class="side-close fa fa-times" aria-hidden="true" onclick="CloseSideNav()"></div>

    <a href="<?php echo site_url(); ?>/#Home" onclick="CloseSideNav()">Home</a>
    <a href="<?php echo site_url(); ?>/#PaymentSolutions" onclick="CloseSideNav()">Payment Solutions</a>
    <a href="<?php echo site_url(); ?>/products/" onclick="CloseSideNav()">Products</a>
    <a href="<?php echo site_url(); ?>/#ContactUs" onclick="CloseSideNav()">Contact Us</a>



    <div class="side-contact">
        <div class="side-contact-title">Contact Us</div>
        <ul>
            <li>
                <div class="side-contact-icon fa fa-envelope" aria-hidden="true"></div>
                <a href="mailto: ask.me@banktechnology.co.uk" class="side-contact-text">ask.me@banktechnology.co.uk</a>
            </li>
            <li>
                <div class="side-contact-icon fa fa-phone" aria-hidden="true"></div>
                <div class="side-contact-text">07402 20 44 22</div>
            </li>
            <li>
                <div class="side-contact-icon fa fa-skype" aria-hidden="true"></div>
                <div class="side-contact-text">Bank Technology live chat</div>
            </li>
        </ul>
        <div class="side-social-sec">
            <div class="side-social-icon fa fa-linkedin" aria-hidden="true"></div>
            <div class="side-social-icon fa fa-facebook" aria-hidden="true"></div>
            <div class="side-social-icon fa fa-instagram" aria-hidden="true"></div>
            <div class="side-social-icon fa fa-twitter" aria-hidden="true"></div>
        </div>
    </div>
</div>

<div class="header" id="navbar">
    <div id="SideNav-btn" class="menu-icon fa fa-bars" aria-hidden="true" onclick="OpenSideNav()"></div>
    <div class="logo"></div>
    <div class="nav">
        <nav>
            <a href="<?php echo site_url(); ?>/#Home">Home</a>
            <a href="<?php echo site_url(); ?>/#PaymentSolutions">Payment Solutions</a>
            <a href="<?php echo site_url(); ?>/products/">Products</a>
            <a href="<?php echo site_url(); ?>/#ContactUs">Contact Us</a>
        </nav>
    </div>
</div>