<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="styles.css"> <!-- Optional: Link to CSS file -->
    <script src="javascript.js"></script>
    
</head>
<body>
    <nav>
        <ul>
        <li style="display: block; color: white; text-align: center; padding: 25px 40px; text-decoration: none; float:left">Carelick</li>
            <div style="float: right;">
            <li ><a href="html file.php">HOME</a></li>
            <li><a href="About.php">ABOUT</a></li>
            <li><a href="eventshtml.php">EVENTS</a></li>

            <li><a href="directory.php">DIRECTORY SEARCH</a></li>
            <li><a href="drt.php">DRT X</a></li>
            
            <?php
                if (isset($_SESSION["user-email"])) {

                    echo "<li><a href='profile.php'>PROFILE</a></li>";
                    echo "<li><a href='includes/logout.inc.php'>LOG OUT</a></li>";
                }
                else {
                    echo "<li><a href='sign-up.php'>SIGN UP</a></li>";
                    echo "<li><a href='login.php'>LOG IN</a></li>";
                }


            ?>
            </div>
        </ul>
    </nav>

</body>