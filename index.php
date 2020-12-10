<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Let's Code With You">
  <title>Home | TaquaForum</title>
  <link href="https://fonts.googleapis.com/css2?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/css/all.css">
</head>

<body>
  <div class="body">
    <?php
    include "resources/nav.php";
    include "pages/landingpage.php";
    include "resources/footer.php";
    ?>
  </div>
  <script src="js/landingpage.js"></script>
  <script src="js/index.js"></script>
</body>

</html>