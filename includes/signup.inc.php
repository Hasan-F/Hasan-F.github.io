<?php

if (isset($_POST["submit"])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirm-password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($firstname, $lastname,$email,$password, $confirmpassword) !== false){
        header("location: ../sign-up.php?error=emptyinput");
        exit();
    }
    if(invalidName($firstname, $lastname) !== false){
        header("location: ../sign-up.php?error=invalidname");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("location: ../sign-up.php?error=invalidemail");
        exit();
    }
    if(pwdMatch($password, $confirmpassword) !== false){
        header("location: ../sign-up.php?error=passwordsnotmatching");
        exit();
    }
    if(emailExists($conn, $email) !== false){
        header("location: ../sign-up.php?error=emailinuse");
        exit();
    }

    createUser($conn, $firstname, $lastname, $email, $password);

    
}
else{
    header("location: ../sign-up.php");
    exit();
}