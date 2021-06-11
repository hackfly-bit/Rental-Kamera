<?php 

session_start();
if($_SESSION['status']!="login"){
header("location:login.php");
}
session_unset();
session_destroy();
header("location: login.php");
?>