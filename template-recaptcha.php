<?php
/* Template Name: Recaptcha */
?>

<html>
<head>

</head>
<body>
    <h1>Google Recaptcha V3</h1>
    
    <form id="google_recaptcha_v3">
        <input name="name" id="name" type="text" placeholder="Name">
        <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
        <button type="submit" name="submit">Submit</button>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6Lfq68gZAAAAAMK-FHz-1u97wFfXBEnhaHxGMfge"></script>
    <script>
    
    $(function(){
        $('#google_recaptcha_v3').on('submit', function (e) {
            e.preventDefault();
            grecaptcha.ready(function() {
                grecaptcha.execute('6Lfq68gZAAAAAMK-FHz-1u97wFfXBEnhaHxGMfge', {action: 'submit'}).then(function(token) {
                    document.getElementById('recaptchaResponse').value = token;
                    console.log(token);
                    $.ajax({
                        type: 'post',
                        url: '',
                        data: $('#google_recaptcha_v3').serialize(),
                        success: function () {
                            console.log('success!');
                            document.getElementById("google_recaptcha_v3").reset();
                        },
                        error: function () {
                            console.log('Error!');
                            document.getElementById("google_recaptcha_v3").reset();
                        },
                        done: function () {
                            console.log('Done!');
                            document.getElementById("google_recaptcha_v3").reset();
                        }
                    });
                });
            });
        });
    });
    </script>
    <!--captcha-->
    
    <?php
    if($_POST) {
        //get data from ajax
        $name = $_POST['name'];
        $token = $_POST['recaptcha_response'];
        
        //check captcha
        if(isset($token)) {
            $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
            $recaptcha_secret = '6Lfq68gZAAAAAA_dMM4GBA81il3h7rYamIqtKVbM';
            $recaptcha_response = $token;
            
            //make post request
            $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
            $recaptcha = json_decode($recaptcha);
            
            // Take action based on the score returned:
            if($recaptcha['success'] == true) {
                $new_post = array(
                    'post_title'    => $name,
                    'post_status'   => 'publish',
                    'post_type'     => 'post'
                );
            
                $post_id = wp_insert_post( $new_post );
                
                echo "<script>alert('Form Successfully submitted!');</script>";
            }
            else {
                echo "<script>alert('Something went wrong! please refresh the page and submit the form one more time');</script>";
            }
        }
    }
    ?>
</body>
</html>
