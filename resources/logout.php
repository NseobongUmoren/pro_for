<?php
session_start();
//session_destroy();
unset($_SESSION['loggeduser']);
echo "<script> window.location = '../index.php'; </script>";
?>