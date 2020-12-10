<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "taquaforum_db");

$FIRST_NAME = $OTHER_NAME = $SURNAME = $USER_NAME = $EMAIL = $PHONE_NO = $PASSWORD = $C_PASSWORD = "";
$FIRST_NAME_err = $OTHER_NAME_err = $SURNAME_err = $USER_NAME_err = $EMAIL_err = $PHONE_NO_err = $PASSWORD_err = $C_PASSWORD_err = $sign_up_err = "";

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST['firstname'])) {
    $FIRST_NAME = "";
    $FIRST_NAME_err = "Field is required";
  } else {
    $FIRST_NAME = test_input(mysqli_real_escape_string($con, $_POST['firstname']));
    if (!preg_match("/^[-a-zA-Z' ]*$/", $FIRST_NAME)) {
      $FIRST_NAME_err = "Invalid name! Only letters, spaces, apostrophes and hyphens allowed";
    }
  }

  if (empty($_POST['othername'])) {
    $OTHER_NAME = "";
    $OTHER_NAME_err = "";
  } else {
    $OTHER_NAME = test_input(mysqli_real_escape_string($con, $_POST['othername']));
    if (!preg_match("/^[-a-zA-Z' ]*$/", $OTHER_NAME)) {
      $OTHER_NAME_err = "Invalid name! Only letters, spaces, apostrophes and hyphens allowed";
    }
  }

  if (empty($_POST['surname'])) {
    $SURNAME = "";
    $SURNAME_err = "Field is required";
  } else {
    $SURNAME = test_input(mysqli_real_escape_string($con, $_POST['surname']));
    if (!preg_match("/^[-a-zA-Z' ]*$/", $SURNAME)) {
      $SURNAME_err = "Invalid name! Only letters, spaces, apostrophes and hyphens allowed";
    }
  }

  if (empty($_POST['username'])) {
    $USER_NAME = "";
    $USER_NAME_err = "Field is required";
  } else {
    $USER_NAME = test_input(mysqli_real_escape_string($con, $_POST['username']));
    if (!preg_match("/^[-a-zA-Z' ]*$/", $USER_NAME)) {
      $USER_NAME_err = "Invalid name! Only letters, spaces, apostrophes and hyphens allowed";
    }
  }

  if (empty($_POST['email'])) {
    $EMAIL = "";
    $EMAIL_err = "Field is required";
  } else {
    $EMAIL = test_input(mysqli_real_escape_string($con, $_POST['email']));
    if (!filter_var($EMAIL, FILTER_VALIDATE_EMAIL)) {
      $EMAIL_err = "Invalid email format";
    }
  }

  if (empty($_POST['phone'])) {
    $PHONE_NO = "";
    $PHONE_NO_err = "Field is required";
  } else {
    $PHONE_NO = test_input(mysqli_real_escape_string($con, $_POST['phone']));
    if (!preg_match("/^[0-9+]*$/", $PHONE_NO)) {
      $PHONE_NO_err = "Invalid phone number";
    }
  }

  if (empty($_POST['password'])) {
    $PASSWORD = "";
    $PASSWORD_err = "Field is required";
  } else {
    $PASSWORD = test_input(mysqli_real_escape_string($con, $_POST['password']));
  }

  if (empty($_POST['Cpassword'])) {
    $C_PASSWORD = "";
    $C_PASSWORD_err = "Field is required";
  } elseif ($_POST['Cpassword'] !== $_POST['password']) {
    $C_PASSWORD = "";
    $C_PASSWORD_err = "Password does not match";
  } else {
    $C_PASSWORD = test_input(mysqli_real_escape_string($con, $_POST['Cpassword']));
  }

  if ($FIRST_NAME !== "" && $SURNAME !== "" && $USER_NAME !== "" && $EMAIL !== "" && $PHONE_NO !== "" && $PASSWORD !== "" && $C_PASSWORD !== "") {
    $sql = "INSERT INTO tqf_users_tb(FIRST_NAME, OTHER_NAME, SURNAME, USERNAME, EMAIL, PHONE_NO, PASSWORD) VALUES('$FIRST_NAME', '$OTHER_NAME', '$SURNAME', '$USER_NAME', '$EMAIL', '$PHONE_NO', '$PASSWORD')";
    $rst = mysqli_query($con, $sql);
    if ($rst) {
      echo "<script> window.location = 'logIn.php'; </script>";
    } else {
      $sign_up_err = "Error in creating user";
    }
  }
  if ($FIRST_NAME_err !== "" || $SURNAME_err !== "" || $USER_NAME_err !== "" || $EMAIL_err !== "" || $PHONE_NO_err !== "" || $PASSWORD_err !== "" || $C_PASSWORD_err !== "") {
    $sign_up_err = "Error in creating user";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TaquaForum - SignIn</title>
  <link href="https://fonts.googleapis.com/css2?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/css/all.css">
</head>

<body>
  <?php
  include "resources/nav.php";
  include "pages/register.php";
  include "resources/footer.php";
  ?>
</body>

</html>