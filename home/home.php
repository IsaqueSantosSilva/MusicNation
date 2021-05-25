<?php 

session_start(); 

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
            <span class="txt1">Music</span> 
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
                    <a style="cursor: pointer;" id="myBtn">Perfil</a>
                    <a href="../home/logout.php">Sair</a>
            </div>
        </div>
    </div>
        <div class="srcsection" id="myHeader" class="myHeader">
            <input class="srcbar" type="text" placeholder="Pesquisar...">
            <input class="srcbtn" type="image"  src="../imgs/srcicon.png">
        </div> 

    <!-- MODAL -->
    <div id="myModal" class="modal" class="myHeader">
        <div class="modal-content">
            <span class="close">&times;</span>
                <div class="main-info-div">
                        <div class="info-div1" style="border-radius: 20px 0px 0px;">
                            <p>Usuário:</p>
                            <p style="color: green;"><?php echo $_SESSION['uname'];?></p>
                        </div>
                        <div class="info-div1">
                            <P>Email:</P>
                            <p style="color: green;"><?php echo $_SESSION['emailid'];?></p>
                        </div>
                        <div class="info-div1">
                            <P>Data de cadastro:</P>
                            <p style="color: green;"><?php echo $_SESSION['joindateid'];?></p>
                        </div>
                        <div class="delete-acc">
                            <a href="" class="delete-acc-link">DELETAR CONTA</a>
                        </div>
                        <div  class="user-img-div">
                             <img class="user-img" src="../imgs/user.jpg" >
                        </div> 
                </div>   
        </div>
    </div>
</header>
</body>
<script src="../script/home.js"></script>
</html>