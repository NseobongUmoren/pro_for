<?php
$btnName = $_GET['btnName'];
if ($btnName == "") {
  header("Location: index.php");
}

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "taquaforum_db";
$con = mysqli_connect($db_host, $db_username, $db_password, $db_name);


$sql_page = "SELECT * FROM tqf_pages_tb WHERE PAGE_ID = '$btnName'";
$page_query = mysqli_query($con, $sql_page);
$page_result = mysqli_fetch_assoc($page_query);
$page_exists = mysqli_num_rows($page_query);

if ($page_exists > 0) {
  $page = $page_result['PAGE'];
  $page_title = $page_result['PAGE_TITLE'];
} else {
  $page =  "Page Not Found";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $page_title; ?> | TitaForum</title>
  <link href="https://fonts.googleapis.com/css2?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/css/all.css">
</head>

<body>
  <div class="body">
    <?php
    include "resources/nav.php";
    ?>
    <div class="page">
      <?php
      include "resources/sidebar.php";
      ?>
      <div class="main-block">
        <div class="page-nav">
          <span class="sidebar-btn fas fa-bars" onclick="toggleSideBar()"></span>
          <h1 class="page-header"><?= $page_title; ?></h1>
          <form class="search-form" action="" method="get">
            <div class="search-input">
              <i class="fas fa-search"></i>
              <input type="search" name="search" id="search" class="search">
            </div>
            <button class="buttons" type="submit">Search</button>
          </form>
        </div>
        <?php
        echo $page;
        ?>
      </div>
    </div>
    <?php
    include "resources/footer.php";
    ?>
  </div>

  <script src="js/index.js"></script>
</body>

</html>