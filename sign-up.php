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
        <div class="auth-card" id="signup-form">
            <h2>Create Account</h2>
            <form action="includes/signup.inc.php" id="signup-form-element" method="post">
                <!--<input type="text" id="username" name="username" placeholder="Username" required>-->
                <input type="text" id="firstname" name="firstname" placeholder="First Name" required>
                <input type="text" id="lastname" name="lastname" placeholder="Last Name" required>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" required>
                <button type="submit" name="submit" class="btn">Sign Up</button>
            </form>
            <p>Already have an account? <a href="login.php" id="login-link" style="background-color: white; display: inline-block">Login</a></p>
        
        <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                    echo "<p> Fill in all fields </p>";
                }
                elseif ($_GET["error"] == "invalidname"){
                    echo "<p> Enter your first and last name correctly </p>";
                }
                if($_GET["error"] == "invalidemail"){
                    echo "<p> Enter a valid email </p>";
                }
                if($_GET["error"] == "passwordsnotmatching"){
                    echo "<p> Passwords do not match </p>";
                }
                if($_GET["error"] == "stmtfailed"){
                    echo "<p> Something went wrong. Please try again. </p>";
                }
                if($_GET["error"] == "emailinuse"){
                    echo "<p> Email already in use </p>";
                }
                if($_GET["error"] == "none"){
                    echo "<p> Sign up successful! </p>";
                }
                
            }
        ?>        
        
        </div>


        <!--
        <div class="auth-card" id="login-form" style="display: none;">
            <h2>Login</h2>
            <form action="includes/login.inc.php" id="login-form-element">
                <input type="email" id="login-email" name="login-email" placeholder="Email" required>
                <input type="password" id="login-password" name="login-password" placeholder="Password" required>
                <button type="submit" class="btn">Login</button>
            </form>
            <p>Don't have an account? <a href="javascript:void(0);" id="signup-link">Sign Up</a></p>
        </div>
        -->
        
    </div>

    <script src="sign-log.js"></script>



</body>
    
</html>
