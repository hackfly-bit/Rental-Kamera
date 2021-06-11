<?php 

session_start();
if($_SESSION['status']!="login"){
header("location:index.php");
}
session_unset();
session_destroy();
header("location: index.php");
?>