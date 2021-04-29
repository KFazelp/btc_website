<?php
/* Template Name: Products */
get_header(); ?>

<div class="products-top-sec">
    <div class="products-top-sec-text">
        <div class="products-top-sec-icon"></div>
        <div class="products-top-sec-title">
            <div>Desktop</div>
            <div>Bluetooth/WIFI</div>
            <div>4G Mobile</div>
        </div>
    </div>
</div>
<style>
    .products-top-sec {
        background: url("<?php echo get_template_directory_uri(); ?>/assets/products-main-bg-real.jpg") center no-repeat;
        background-size: cover;
    }
</style>

<div class="corona-solution">
  <div>
        <!--  <div class="product-main-title">
            The A920 combines the full features of an Android tablet
            with a powerful POS payment terminal</div>
            -->
        <div class="corona-solution-photo"></div>
    </div>
    
    <div class="corona-solution-text">
        <div class="product-title">Pax A920</div>
        <div>The A920 combines the full features of an Android tablet
            with a powerful POS payment terminal <br><br> Powered by Android 7.1<br>Cortex A7 processor<br>5&quot; capacitive touch screen<br>4G + WiFi + GPS<br>5250 mAh capacity battery<br>Front &amp; rear cameras<br>NFC contactless<br>PIN on glass<br>PCI PTS 5.x SRED<br>ATEX certified<br>Optional Docking Station<br></div>
        <div class="membership-card-btn">
            <a href="https://banktechnologyconsultant.co.uk/wp-content/uploads/2020/12/A920_EN_20200605.pdf">Download Datasheet</a>
        </div>
    </div>
</div>
<style>
    .product-title {
        padding: 20px 0;
        font-size: 24px;
        font-weight: bold;
        color: white;
    }
    .product-main-title {
        padding: 20px;
        font-size: 18px;
        font-weight: bold;
        color: white;
        line-height: 40px;
        background: linear-gradient(45deg, #1a0552, #2d0659, #3c0664, #3e0764);
        margin: 0 20px;
        border-radius: 8px;
    }
    .corona-solution-photo {
        background: url("<?php echo get_template_directory_uri() ?>/assets/pax-a920.png") center no-repeat;
        background-size: contain;
    }
</style>

<div class="corona-services-container">
    <div>
        <div class="corona-services-title">The following Industries & Service Industries are included</div>
        <div class="services-tab-container">
            <div>
                <div class="corona-services-tab" id="Tab-1" onclick="Corona(1)">
                    <div class="fa fa-check corona-tab-icon" aria-hidden="true"></div>
                    <div>Hospitality</div>
                </div>
                <div class="corona-services-tab" id="Tab-2" onclick="Corona(2)">
                    <div class="fa fa-check corona-tab-icon" aria-hidden="true"></div>
                    <div>Close contact services</div>
                </div>
                <div class="corona-services-tab" id="Tab-3" onclick="Corona(3)">
                    <div class="fa fa-check corona-tab-icon" aria-hidden="true"></div>
                    <div>Transport</div>
                </div>
                <div class="corona-services-tab" id="Tab-4" onclick="Corona(4)">
                    <div class="fa fa-check corona-tab-icon" aria-hidden="true"></div>
                    <div>Fashion</div>
                </div>
            </div>
            <div class="corona-tab-content" id="TabContent-1">
                <ul>
                    <li>Pub</li>
                    <li>Salon</li>
                    <li>Restaurant</li>
                    <li>Hotel</li>
                    <li>Museum</li>
                    <li>Cinema</li>
                    <li>Zoo</li>
                    <li>Theme Parks</li>
                </ul>
            </div>
            <div class="corona-tab-content" id="TabContent-2">
                <ul>
                    <li>Place of Worship</li>
                    <li>Church</li>
                    <li>Synagogue</li>
                    <li>Mosque</li>
                    <li>Library</li>
                    <li>Community Centre</li>
                    <li>Town Hall</li>
                    <li>Civic Centre</li>
                </ul>
            </div>
            <div class="corona-tab-content" id="TabContent-3">
                <ul>
                    <li>Airline</li>
                    <li>Taxi</li>
                    <li>Train</li>
                </ul>
            </div>
            <div class="corona-tab-content" id="TabContent-4">
                <ul>
                    <li>Tailor</li>
                    <li>Retail</li>
                    <li>Department Sore</li>
                    <li>seamstress</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="corona-tab-image"></div>
</div>

<!--  <div style="background: linear-gradient(45deg, #1a0552, #2d0659, #3c0664, #3e0764); padding: 20px 0; margin: 20px auto; width: 85%; border-radius: 5px">
    <div class="method-sec-title" style="font-family: impact; padding-bottom: 0">With Us, You have Peace of Mind</div>
    <div class="method-sec-sub-title"><br>
        For your customer:<br> ‘Do it for your loved ones by self-isolating for 14 days if called by the NHS’<br><br>
        The information needs to be kept for 21 days on your premises, and shared with NHS Test and Trace where requested by the NHS.  Our Platform will back you up, we will help you out if you need us as a last resort, if called out by NHS for the data.
        The information is sent to your computer via WiFi or ethernet cable and must be deleted after 21 days, due to GDPR rules and regulations.
    </div>
</div>
--> 
<div class="corona-membership">
    <div class="corona-membership-title">
        More Options
    </div>
    <div class="corona-membership-container">
        <div class="membership-card">
            <div class="membership-card-photo" id="member-1"></div>
            <div class="membership-card-title">Move 3500</div>
            <div class="membership-card-btn">
                <a href="https://banktechnologyconsultant.co.uk/wp-content/uploads/2020/12/Move_3500_-_DATASHEET.pdf">Download DataSheet</a>
            </div>
        </div>
        <div class="membership-card">
            <div class="membership-card-photo" id="member-2"></div>
            <div class="membership-card-title">Move 5000</div>
            <div class="membership-card-btn">
                <a href="https://banktechnologyconsultant.co.uk/wp-content/uploads/2020/12/Move_5000_-_DATASHEET.pdf">Download DataSheet</a>
            </div>
        </div>
        <div class="membership-card">
            <div class="membership-card-photo" id="member-3"></div>
            <div class="membership-card-title">Desk 5000 + IPP 350</div>
            <div class="membership-card-btn">
                <a href="https://banktechnologyconsultant.co.uk/wp-content/uploads/2020/12/Desk_5000 - DATASHEET.pdf">Download DataSheet</a>
            </div>
        </div>
        <div class="membership-card">
            <div class="membership-card-photo" id="member-4"></div>
            <div class="membership-card-title">Desk 5000</div>
            <div class="membership-card-btn">
                <a href="https://banktechnologyconsultant.co.uk/wp-content/uploads/2020/12/Desk_5000 - DATASHEET.pdf">Download DataSheet</a>
            </div>
        </div>
    </div>
    <style>
        #member-1 {
            background: url("<?php echo get_template_directory_uri(); ?>/assets/ingenico-move3500-wide.png") center no-repeat;
            background-size: contain;
        }
        #member-2 {
            background: url("<?php echo get_template_directory_uri(); ?>/assets/ingenico-move5000-wide.png") center no-repeat;
            background-size: contain;
        }
        #member-3 {
            background: url("<?php echo get_template_directory_uri(); ?>/assets/ingenico-desk5000.png") center no-repeat;
            background-size: contain;
        }
        #member-4 {
            background: url("<?php echo get_template_directory_uri(); ?>/assets/ingenico-desk-5000.png") center no-repeat;
            background-size: contain;
        }
    </style>
</div>

<!--  
<div class="corona-features">
    <div class="features-photo"></div>
    <div class="features-content">
        <h3>Features</h3>
    </div>
</div>
-->
<div class="last-sentences">We are Crème de la Crème of Technology</div>

<script>
    function Corona(i) {
        var tab = document.getElementById("Tab-" + i);
        var content = document.getElementById("TabContent-" + i);
        for (j = 1; j < 5; j++) {
            document.getElementById("Tab-" + j).style.color = "rgb(136, 136, 136)";
            document.getElementById("TabContent-" + j).style.display = "none";
        }
        tab.style.color = "rgb(135, 50, 255)";
        content.style.display = "block";
    }
</script>

<?php get_footer(); ?>
