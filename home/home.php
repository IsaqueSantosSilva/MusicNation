<?php session_start(); 
include("../session/session.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="../style/home.css">
    <link rel="icon" href="../imgs/icon.png" style="width: 100%; height: 100%">
    <meta name="Author" name="Isaque Silva">
    <meta charset="utf-8">
    <title>Music Nation</title>
</head>

<body>
<header>
        <div class="banner" >
            <span class="txt1"> Music</span> 
            <span class="txt2">Nation</span>
        </div>
</header>

    <!-- USER SECTION -->
    <div class="container">
<header>
    <div class="secondbanner" id="myHeader">
        <div class="dropdown" class="myHeader">
            <button class="dropbtn">
                    <h4><?php echo $_SESSION['uname'] ; ?> <i class="fa fa-caret-down"></i></h4>
                </button>
            <div class="dropdown-content">
                    <a href="#">Perfil</a>
                    <a href="../home/logout.php">Sair</a>
            </div>
        </div>
    </div>
        <div class="srcsection" id="myHeader" class="myHeader">
            <input class="srcbar" type="text" placeholder="Pesquisar...">
            <input class="srcbtn" type="image"  src="../imgs/srcicon.png">
        </div> 

        <button id="myBtn">Open Modal</button>
    <!-- MODAL -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <P>Nome de usuário: <?php echo $_SESSION['uname'] ; ?></P>
            <P>Endereço de email: <?php echo $_SESSION['emailid'] ; ?></P>
            <P>Data de cadastro: <?php echo $_SESSION['joindateid'] ; ?></P>
        </div>
    </div>
</header>
</body>
<script src="../script/home.js"></script>
</html>