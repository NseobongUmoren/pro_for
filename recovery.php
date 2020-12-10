<?php
session_start();
include "resources/topnav.php";

$EMAIL = $EMAIL_err = $recovery_msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['recovery_email'])) {$EMAIL = ""; $EMAIL_err = "Field is required";}
    else{$EMAIL = $_POST['recovery_email'];
        if (!filter_var($EMAIL, FILTER_VALIDATE_EMAIL)) {$EMAIL_err = "Invalid email format";}
    }
}
// generate a token and store it
$token = mt_rand();
$_SESSION['stored_token'] = $token;
// send token to the mail and store it in mail
$to = $EMAIL;
$subject = "Password Recovery";
$message = 'Please enter the token to recover your account: '.$token;
$additional_header = 'From: XYZ@gmail.com \n';
// $mail = mail($to, $subject, $message, $additional_header);
// if($mail){
//     $recovery_msg = 'Information to recover your account has been sent to your email';
//     header("Location: token_form.php");
// }else{$recovery_msg = 'Error recovering account';}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaquaForum - Account Recovery</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/recovery.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/css/all.css">
    
</head>
<body>
    <?php
    include "resources/header.php";
    include "pages/recovery_form.php";
    include "resources/footer.php";
    ?>
</body>
</html>


