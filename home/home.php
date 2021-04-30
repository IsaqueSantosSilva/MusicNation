<?php session_start(); 
include("session.php");
?>
<!-- <h1> welcome to home page, <span style="color:red;">
        <?php echo $_SESSION['uname'] ; ?> </span> </h1> -->

<?php
// echo "session ID is : ".$_SESSION['uid'] ;
?>
<!-- <br>
<a href="logout.php"> Logout </a> -->



<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="../style/register.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Train+One&display=swap" rel="stylesheet">
    <link rel="icon" href="../imgs/icon.png" style="width: 100%; height: 100%">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="Author" name="Isaque Silva">
    <meta name="description" content="site de streaming de musicas">
    <meta charset="utf-8">
    <title>Music Nation</title>
</head>

<body>
    <header>
        <div class="banner">
            <ul class="links">
                <li><a href="#">Início</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Premium</a></li>
            </ul>
            <a class="icon"><img src="../imgs/logo.png" width="90" height="90"></a>
            <a class="text1"> MusicNation </a>
        </div>
    </header>
</body>

</html>