<?php 

$token = $_GET['token'];

$token_hash = hash("sha256", $token);


require 'dbh.inc.php';
require_once 'functions.inc.php';


//$conn = require __DIR__ . "/dbh.inc.php";

$sql = "SELECT * FROM users
        WHERE reset_token_hash = ?";

$stmt = $conn-> prepare($sql);

$stmt->bind_param("s", $token_hash);

$stmt->execute();

$result = $stmt->get_result();

$users = $result->fetch_assoc();


if ($users === null){
    die("token not found");
}

if (strtotime($users["reset_token_expires_at"]) <= time()) {
    die("token has expired");
}

//echo "token is valid and has not expired";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="sign-log.css"> <!-- Optional: Link to CSS file -->
    
</head>
<body>
    <?php
        include_once '../header.php'
    ?>


    <div class="auth-container">
        <div class="auth-card" id="login-form" >
            <h2> Reset Password </h2>
            <form method="post" action = "process-reset-password.inc.php">
                <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">
                <input type="password" id="password" name="password" placeholder="Password" required>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" required>
                <button type="submit" name="submit" class="btn">Reset Password</button>
            </form>

            <?php
                if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyinput"){
                        echo "<p> Fill in all fields </p>";
                    }
                    if($_GET["error"] == "passwordsnotmatching"){
                        echo "<p> Passwords do not match </p>";
                    }
                    if($_GET["error"] == "stmtfailed"){
                        echo "<p> Something went wrong. Please try again. </p>";
                    }
                    if($_GET["error"] == "none"){
                        echo "<p> Password reset successful! </p>";
                    }
                    
                }
            ?>   

        </div>
    </div>

<script src="sign-log.js"></script>

</body>
</html>