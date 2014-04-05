<!-- Author: Khilan -->
<!-- File: logout.php -->
<!-- Logout Page-->
<!-- PHP File-->


<?php
session_start();  // Session start
unset($_SESSION["username"]);
session_destroy();  // Session destroy
session_unset();
header('location:businesscontact.php');
?>