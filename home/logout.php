<?php
session_start(); 
$_SESSION['uid']=''; 
$_SESSION['uname']=''; 
session_unset(); 

$url='login.php';
header("Location: $url"); // Page redirecting to login.php 
 
?>