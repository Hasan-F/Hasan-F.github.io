<?php

if (isset($_POST["submit"])){

    $email = $_POST["login-email"];
    $password = $_POST["login-password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputLogin($email, $password) !== false){
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $email, $password);

}
else{

    header("location: ../login.php");
    exit();

}