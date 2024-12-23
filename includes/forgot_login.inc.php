<?php

if (isset($_POST["submit"])){

    $email = $_POST["validation-email"];

    $token = bin2hex(random_bytes(16));
    $token_hash = hash("sha256", $token);

    $expiry = date( "Y-m-d H:i:s", time() + 60*30);


    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputForgotLogin($email) !== false){
        header("location: ../forgot_login.php?error=emptyinput");
        exit();
    }
   
    $emailExists = emailExists($conn, $email);

    if($emailExists === false) {
        header("location: ../forgot_login.php?error=noaccountfound");
        exit();
    }



    $sql = "UPDATE users 
            SET reset_token_hash = ?,
                reset_token_expires_at = ?
            WHERE usersEmail = ?";
    
    $stmt = $conn-> prepare($sql);

    

    $stmt-> bind_param("sss", $token_hash, $expiry, $email);
    $stmt-> execute();

    
    if ($conn->affected_rows) {

        $mail = require __DIR__ . "/mailer.php";

        $mail->setFrom("noreply@gmail.com");
        $mail->addAddress($email);
        $mail->Subject = "Password Reset";
        /*$mail->Body = <<< END

        Click <a href="http://example.com/reset-password.php?=$token">here </a> to reset your password.
        
        END;*/

        $mail->Body = <<< END

        Click <a href="http://localhost:3000/includes/reset-password.inc.php?token=$token">here </a> to reset your password.
        
        END;
        
        try{
            $mail->send();
        } catch(Exception $e) {
            
            echo "Message could not be sent. Mailer error: {$mail->ErrorInfo}";
        
        }
    
    }


    //mysqli_stmt_bind_param($stmt, "sss", $token_hash, $expiry, $email);
    //mysqli_stmt_execute($stmt);
    //mysqli_stmt_close($stmt);

    echo "Message sent. Please check your inbox.";

////////////////////

{


        ///header("location: ../sign-up.php?error=none");
        ///exit();
    
    }

    ///////////////



    

}
else{

    header("location: ../forgot_password.php");
    exit();

}