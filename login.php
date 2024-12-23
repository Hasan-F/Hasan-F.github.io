<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up / Login</title>
    <link rel="stylesheet" href="sign-log.css">
</head>
<body>
    <?php
    include_once 'header.php'
    ?>
    
    <div class="auth-container">
        <div class="auth-card" id="login-form" >
            <h2>Login</h2>
            <form action="includes/login.inc.php" id="login-form-element" method="post">
                <input type="email" id="login-email" name="login-email" placeholder="Email" required>
                <input type="password" id="login-password" name="login-password" placeholder="Password" required>
                <button type="submit" name="submit" class="btn" >Login</button>
            </form>
            <p>Don't have an account? <a href="sign-up.php" id="signup-link" style="background-color: white; display: inline-block">Sign Up</a></p>
            <p>Forgot password? <a href="forgot_login.php" id="forgot_login-link" style="background-color: white; display: inline-block">Reset</a></p>
        
            <?php
                if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyinput"){
                        echo "<p> Fill in all fields </p>";
                    }
                    elseif ($_GET["error"] == "wronglogin"){
                        echo "<p> Incorrect login credentials </p>";
                    }
                    
                }
            ?> 
        
        </div>
        
        <!--
        <div class="auth-card" id="signup-form" style="display: none;">
            <h2>Create Account</h2>
            <form action="includes\signup.inc.php" id="signup-form-element">
                ***<input type="text" id="username" name="username" placeholder="Username" required>***
                <input type="text" id="firstname" name="firstname" placeholder="First Name" required>
                <input type="text" id="lastname" name="lastname" placeholder="Last Name" required>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" required>
                <button type="submit" name="submit" class="btn">Sign Up</button>
            </form>
            <p>Already have an account? <a href="javascript:void(0);" id="login-link">Login</a></p>
        </div>
        -->

    </div>

    <script src="sign-log.js"></script>

    <!--      -->
    <!--      -->
    <!--      -->
    <!--      -->


<script>
    var controller = 'Auth';
    var base_url = 'https://www.carelick.org/';

    $("#loginClick").on('submit', function (e) {

        $('.login_error').html('').fadeIn('');
        $('.login_fa_spin').html('<i class="fa fa-circle-o-notch fa-spin" style="font-size:24px"></i>\n');
        $(".login_button").attr("disabled", true);
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: base_url + controller+'/check_login',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            'dataType': "json",
            success: function (data) {
                if (data.status == 200) {
                    // $('.login_error').html(data.data);
                   // show_snackbar(data.data);
                    window.location.href=data.data;
                } else {
                    $('.login_error').html(data.data).delay(3200).fadeOut(300);
                    $('.login_fa_spin').html('');
                    $(".login_button").attr("disabled", false);
                }
            }
        });
    });



    <!--submit forgot password-->

    function submit_forgot() {
        var forgot_user_name = $('.forgot_user_name').val();
        $('.forget_spin_icon').html('<i class="fa fa-circle-o-notch fa-spin"></i>');

        if (forgot_user_name != '') {
            $('.forgot_error_message').html('');
            var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
            if (testEmail.test(forgot_user_name)) {
                $.ajax({
                    'url': base_url + controller + '/forget_password',
                    'type': 'POST', //the way you want to send data to your URL
                    'dataType': "json",
                    'data': {
                        'user_name': forgot_user_name,
                    },
                    'success': function (data) { //probably this request will return anything, it'll be put in var "data"
                        if (data.status == 200) {
                            show_snackbar(data.data);
                            $('.forget_spin_icon').html('');
                            $('.forgot_otp_confirm').show();
                            $('.forgot_password_submit').hide();
                            $('.forgot_password_confirm').show();
                            $('.resend_otp_button').show();
                            // $('.show_timer').show();
                            // $('.hide_timer').hide();
                            cancel_forget_pass = 0;
                            setTimeout( function(){
                                countdown(1);
                            }  , 100 );

                        } else {
                            $('.forgot_error_message').html(data.data);
                            $('.forget_spin_icon').html('');
                        }
                    }
                });
            } else {
                $('.forgot_error_message').html('* Invalid Email.');
                $('.forget_spin_icon').html('');

            }
        }else {
            $('.forgot_error_message').html('* Please Fill Email.');
            $('.forget_spin_icon').html('');
        }
    }

    function forget_password_confirm() {

        var forget_user_name = $('.forgot_user_name').val();
        var forget_otp = $('.forgot_otp').val();
        var forget_new_password = $('.forgot_new_password').val();

        if (forget_user_name != '' && forget_otp != '' && forget_new_password != '') {
            $('.forget_spin_icon').html('<i class="fa fa-circle-o-notch fa-spin"></i>');
            $('.forgot_error_message').html('');

            $.ajax({
                'url': base_url + '' + controller + '/forget_password_confirm',
                'type': 'POST', //the way you want to send data to your URL
                'dataType': "json",
                'data': {
                    'otp': forget_otp,
                    'new_password': forget_new_password,
                    'user_name': forget_user_name
                },
                'success': function (data) { //probably this request will return anything, it'll be put in var "data"
                    if (data.status == 200) {
                        $('.forgot_error_message').html('');
                        // show_snackbar(data.data);
                        setTimeout( function(){
                            window.location.href = base_url + 'dashboard/home';
                        }  , 500 );

                    } else {
                        $('.forgot_error_message').html(data.data);
                        $('.forget_spin_icon').html('');
                    }
                }
            });
        }else{
            $('.forgot_error_message').html('* Please Fill All Fields.');
            $('.forget_spin_icon').html('');

        }
    }
    

</script>

<script>
    function show_forgot_page(){
        var copy_email = $('.login_email').val();
        $('.forgot_user_name').val(copy_email);
        $('.forgot_otp_confirm').hide();
        $('.forgot_error_message').html('');
        $('.forget_spin_icon').html('');
        $('.forgot_pass_view').show();
        $('.login_page_view').hide();
        $('.resend_otp_button').hide();

    }

    function show_login_page(){

        $('.forgot_password_submit').show();
        $('.forgot_password_confirm').hide();
        $('.forget_spin_icon').html('');
        $('.forgot_otp_confirm').hide();
        $('.forgot_pass_view').hide();
        $('.login_page_view').show();
    }
</script>

<script type="text/javascript">
    var cancel_forget_pass = 0;
    var timeoutHandle;
    function countdown(minutes) {
        var seconds = 6000;
        var mins = minutes;
        function tick() {
            if(cancel_forget_pass == 1){
                return false;
            }
            var counter = document.getElementById("timer");
            var current_minutes = mins-1;
            seconds--;
            counter.innerHTML =
                current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
            if( seconds > 0 ) {
                timeoutHandle=setTimeout(tick, 1000);
            } else {

                if(mins > 1){

                    // countdown(mins-1);   never reach “00″ issue solved:Contributed by Victor Streithorst
                    setTimeout(function () { countdown(mins - 1); }, 1000);

                }

                $('.hide_timer').show();
                $('.show_timer').hide();
            }
        }
        tick();
    }

    function cancel_forget_password(){

        cancel_forget_pass = 1;
    }

</script>


</body>
    
</html>
