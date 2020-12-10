<?php
session_start();

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "taquaforum_db";
$con = mysqli_connect($db_host, $db_username, $db_password, $db_name);

$USER_NAME = $PASSWORD = "";
$USER_NAME_err = $PASSWORD_err = $log_in_err = "";

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST['username'])) {
    $USER_NAME = "";
    $USER_NAME_err = "Field is required";
  } else {
    $USER_NAME = test_input(mysqli_real_escape_string($con, $_POST['username']));
    if (!preg_match("/^[-a-zA-Z' ]*$/", $USER_NAME)) {
      $USER_NAME_err = "Invalid username!";
    }
  }

  if (empty($_POST['password'])) {
    $PASSWORD = "";
    $PASSWORD_err = "Field is required";
  } else {
    $PASSWORD = test_input(mysqli_real_escape_string($con, $_POST['password']));
  }


  $sql = "SELECT * FROM tqf_users_tb WHERE USERNAME = '{$USER_NAME}' AND PASSWORD = '{$PASSWORD}' LIMIT 1";
  $query_s = mysqli_query($con, $sql);
  $exist = mysqli_num_rows($query_s);

  if ($exist > 0) {
    $_SESSION['loggeduser'] = $USER_NAME;
    echo "<script> window.location = 'dashboard.php'; </script>";
  } else {
    $log_in_err = "User Not Found. Enter valid username and password";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TaquaForum - Log In</title>
  <link href="https://fonts.googleapis.com/css2?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/css/all.css">
</head>

<body>
  <?php
  include "resources/nav.php";
  include "pages/login.php";
  include "resources/footer.php";
  ?>
</body>

</html>