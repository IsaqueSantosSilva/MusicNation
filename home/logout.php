<?php
session_start(); 
$_SESSION['uid']=''; 
$_SESSION['uname']=''; 
session_unset(); 

$url='../login/login.php';
header("Location: $url");
 
?>