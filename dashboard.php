<?php
session_start();
if(!isset($_SESSION['loggeduser'])){
    echo "<script> window.location = 'login.php'; </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaquaForum - Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/css/all.css">
</head>
<body>
    <div class="body">
    <?php
        include "resources/nav.php";
        include "pages/dashboard.php";
        include "resources/footer.php";
    ?>
    </div>
  <script src="js/landingpage.js"></script>
  <script src="js/index.js"></script>
</body>
</html>