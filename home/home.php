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
<html lang="pt-br">

<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../style/home.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Train+One&display=swap" rel="stylesheet">
    <link rel="icon" href="../imgs/icon.png" style="width: 100%; height: 100%">

    <meta name="Author" name="Isaque Silva">
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
    <!-- USER SECTION -->
    <div class="dropdown">
        <button class="dropbtn">
            <h3><?php echo $_SESSION['uname'] ; ?> <i class="fa fa-caret-down"></i></h3>
        </button>
        <div class="dropdown-content">
            <a href="#">Perfil</a>
            <a href="#">Sair</a>
        </div>
    </div>
    </div>

</body>

</html>