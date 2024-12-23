<?php 

if (isset($_POST["submit"])){

$token = $_POST['token'];

$token_hash = hash("sha256", $token);


require 'dbh.inc.php';
require_once 'functions.inc.php';

$password = $_POST["password"];
$confirmpassword = $_POST["confirm-password"];

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

if(emptyInputPasswordReset($password, $confirmpassword) !== false){
    header("location: ../reset-password.php?error=emptyinput");
    exit();
}

if(pwdMatch($password, $confirmpassword) !== false){
    header("location: ../reset-password.php?error=passwordsnotmatching");
    exit();
}

passwordReset($conn, $password);

}