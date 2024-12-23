<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <link rel="stylesheet" href="sign-log.css">
</head>
<body>
    <?php
    include_once 'header.php'
    ?>
    <div class="auth-container">
        <div class="auth-card" >
            <h2>Forgot Password</h2>
            <form method="post" action="includes/forgot_login.inc.php">
                <input type="email" id="validation-email" name="validation-email" placeholder="Email"  required>
                <button type="submit" name="submit" class="btn" >Continue</button>
        </div>
    </div>


</body>
    
</html>


<!--
    <div class="auth-container auth">
        <div class="auth-card" id="login-form" >
            <h2>Forgot Password</h2>
            <div  id="validation-email" method="post" class="form-control forgot_user_name">
                <input type="email" id="validation-email" name="validation[email]" placeholder="Email"  required>
            </div>
            <div class="form-group forgot_otp_confirm" style="display: none">
            <label class="form-label">One Time Password</label>
            <input id="validation-password" class="form-control forgot_otp" name="" type="text" placeholder="One Time Password">
            </div>
            <div class="form-group forgot_otp_confirm" style="display: none">
            <label class="form-label">New Password</label>
            <input id="validation-password" class="form-control forgot_new_password" name="validation[password]" type="password" placeholder="Password">
            </div>
            <b style="color: red" class="forgot_error_message"></b>
            <div class="form-actions">
            <button type="submit" onclick="submit_forgot()" class="btn btn-primary width-150 margin-inline bg_btn-admin forgot_password_submit">Continue <span class="forget_spin_icon"></span></button>
            <button type="submit" style="display: none" onclick="forget_password_confirm()" class="btn btn-primary width-150 margin-inline bg_btn-admin forgot_password_confirm">Confirm <span class="forget_spin_icon"></span></button>
        <!--    <a href="javascript:void(0)" style="display: none" onclick="submit_forgot()" class="btn btn-default-outilne width-150 margin-inline resend_otp_button"><span class="hide_timer">Didn't Get A One Time Password? </span></a><span class="show_timer resend_otp_button" style="display: none" >Resend After <span id="timer">1:00 </span> sec</span>
            <a href="javascript:void(0)" onclick="show_login_page();cancel_forget_password();" class="btn btn-default-outilne width-150 margin-inline">Cancel</a>
        </div>
        
        </div>
    </div>


<!--
    <div class="single-page-block-form forgot_pass_view" style="">
        <h3 class="text-center">
            Forgot Password &nbsp;&nbsp;<span><i class="fa fa-smile-o" aria-hidden="true"></i></span>
            <span class="small">One Time Password Will Be Sent To Your Registered Email</span>
        </h3>
            
        <br>
        <div class="form-group">
            <label class="form-label">User Email</label>
            <input id="validation-email" class="form-control forgot_user_name" placeholder="Email" name="validation[email]" type="text">
        </div>
        <div class="form-group forgot_otp_confirm" style="display: none">
            <label class="form-label">One Time Password</label>
            <input id="validation-password" class="form-control forgot_otp" name="" type="text" placeholder="One Time Password">
        </div>
        <div class="form-group forgot_otp_confirm" style="display: none">
            <label class="form-label">New Password</label>
            <input id="validation-password" class="form-control forgot_new_password" name="validation[password]" type="password" placeholder="Password">
        </div>
        <b style="color: red" class="forgot_error_message"></b>
        <div class="form-actions">
            <button type="submit" onclick="submit_forgot()" class="btn btn-primary width-150 margin-inline bg_btn-admin forgot_password_submit">Continue <span class="forget_spin_icon"></span></button>
            <button type="submit" style="display: none" onclick="forget_password_confirm()" class="btn btn-primary width-150 margin-inline bg_btn-admin forgot_password_confirm">Confirm <span class="forget_spin_icon"></span></button>
        <!--    <a href="javascript:void(0)" style="display: none" onclick="submit_forgot()" class="btn btn-default-outilne width-150 margin-inline resend_otp_button"><span class="hide_timer">Didn't Get A One Time Password? </span></a><span class="show_timer resend_otp_button" style="display: none" >Resend After <span id="timer">1:00 </span> sec</span>
            <a href="javascript:void(0)" onclick="show_login_page();cancel_forget_password();" class="btn btn-default-outilne width-150 margin-inline">Cancel</a>
        </div>
    </div>-->

<!--
<script>
    var controller = 'Auth';
    var base_url = 'http://localhost:3000/login.php';


    <!--submit forgot password

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


<script src="sign-log.js"></script>
