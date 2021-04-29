<?php
/* Template Name: Corona Virus */
get_header(); ?>

<?php $top_sec = get_field('top_section'); ?>
<div class="corona-top-sec">
    <div class="corona-top-sec-text">
        <div class="corona-top-sec-title">
            <span>STAY ALERT</span>
            <i class="fa fa-caret-right" aria-hidden="true"></i>
            <span>CONTROL THE VIRUS</span>
            <i class="fa fa-caret-right" aria-hidden="true"></i>
            <span>SAVE LIVES</span>
        </div>
        <div><?php echo $top_sec['text'] ?></div>
    </div>
</div>
<style>
    .corona-top-sec {
        background: url("<?php echo $top_sec['background'] ?>") center no-repeat;
        background-size: cover;
    }
</style>

<div class="corona-solution">
    <?php $solution = get_field('solution_section'); ?>
    <div class="corona-solution-photo"></div>
    <div class="corona-solution-text"><?php echo $solution['content'] ?></div>
</div>
<style>
    .corona-solution-photo {
        background: url("<?php echo $solution['photo'] ?>") center no-repeat;
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
                    <li>Tailor</li>
                    <li>Retail</li>
                    <li>Department Store</li>
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
        </div>
    </div>
    <div class="corona-tab-image"></div>
</div>

<div style="background: linear-gradient(45deg, #1a0552, #2d0659, #3c0664, #3e0764); padding: 20px 0; margin: 20px auto; width: 85%; border-radius: 5px">
    <div class="method-sec-title" style="font-family: impact; padding-bottom: 0">With Us, You have Peace of Mind</div>
    <div class="method-sec-sub-title"><br>
        For your customer:<br> ‘Do it for your loved ones by self-isolating for 14 days if called by the NHS’<br><br>
        The information needs to be kept for 21 days on your premises, and shared with NHS Test and Trace where requested by the NHS.  Our Platform will back you up, we will help you out if you need us as a last resort, if called out by NHS for the data.
        The information is sent to your computer via WiFi or ethernet cable and must be deleted after 21 days, due to GDPR rules and regulations.
    </div>
</div>

<div class="corona-membership">
    <div class="corona-membership-title">
        There is More we can do for you, if you have;<br>
        Membership, Employee and Student
    </div>
    <div class="corona-membership-container">
        <div class="membership-card">
            <div class="membership-card-title">The GYM</div>
            <div class="membership-card-content">
                 Alarm for temperature<br>
                 Test for mask<br>
                 Members recognition<br>
                 Opens the gate<br>
            </div>
        </div>
        <div class="membership-card">
            <div class="membership-card-title">The Office</div>
            <div class="membership-card-content">
                Alarm for temperature<br>
               Test for mask<br>
               Staff recognition &amp; attendance<br>
               Opens the gate<br>
            </div>
        </div>
        <div class="membership-card">
            <div class="membership-card-title">The University</div>
            <div class="membership-card-content">
                   Alarm for temperature<br>
                  Test for mask<br>
                  Student attendance<br>
            </div>
        </div>
    </div>
</div>

<div class="corona-features">
    <div class="features-photo"></div>
    <div class="features-content">
        <h3>Features</h3>
        Screening distance up to 1 meter
        Accuracy +/- 0.5 degree
        Contactless for users,
        Infrared array body temperature sensor
        Recognition speed 0.3 seconds
        5 inch LCD touch screen
        Installation
        WiFi or ethernet cable
        Stand-alone option
        Can be installed into a wall
    </div>
</div>

<div class="last-sentences">We are Crème de la Crème of Technology</div>

<script>
    function Corona(i) {
        var tab = document.getElementById("Tab-" + i);
        var content = document.getElementById("TabContent-" + i);
        for (j = 1; j < 3; j++) {
            document.getElementById("Tab-" + j).style.color = "rgb(136, 136, 136)";
            document.getElementById("TabContent-" + j).style.display = "none";
        }
        tab.style.color = "rgb(135, 50, 255)";
        content.style.display = "block";
    }
</script>

<?php get_footer(); ?>
