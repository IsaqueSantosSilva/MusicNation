<?php
session_start();

include_once("config.php");
echo "Welcome " . $_SESSION["username"];

echo "<a href='logout.php'>Logout</a>";

echo "<a href='delete.php'>Delete</a>";

?>