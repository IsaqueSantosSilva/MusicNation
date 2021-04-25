<?php

session_start();
include_once("../config.php");

$con = config::connect();
$username = $_SESSION['username'];


$query = $con->prepare("

DELETE FROM users WHERE username=:username

");


$query->bindparam(":username",$username);
$query->execute();

header("location: index.html");
?>