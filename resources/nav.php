<?php
$top_nav = "";

if (!isset($_SESSION['loggeduser'])) {
  $top_nav = '<a class="nav1-btn" href="login.php" name="login">Login</a> | <a class="nav1-btn" href="register.php" name="register">Register</a>';
}

if (isset($_SESSION['loggeduser'])) {
  $top_nav = '<a class="nav1-btn" href="dashboard.php">Dashboard</a> | <a class="nav1-btn" href="resources/logout.php">Logout</a>';
}
$_
?>

<div class="navcontainer">
  <div class="nav1">
    <?php echo $top_nav ?>
  </div>
  <div class="nav2">
    <p class="logo"><a href="index.php">TITAFORUM</a></p>
    <span class="menu-btn fas fa-bars" onclick="toggleMenu()"></span>
    <ul class="menu">
      <li class="menu-items"><a class="menu-links" href="index.php" name="index">Home</a></li>
      <li class="menu-items"><a class="menu-links" href="/__Class Projects/TaquaForum/index.php#servSec" name="services">Services</a></li>
      <li class="menu-items"><a class="menu-links" href="/__Class Projects/TaquaForum/index.php#resSec" name="products">Resourses</a></li>
    </ul>
  </div>
</div>