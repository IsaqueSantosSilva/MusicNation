<?php 

// header("Content-Type: application/json");
// header("Access-Control-Allow_origin: *");

session_start(); 

include("../session/session.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" type="text/css" href="../style/home.css">
    <link rel="stylesheet" media="screen and (max-width: 900px)" href="../style/small-home.css">
    <link rel="icon" href="../imgs/icon.png" style="width: 100%; height: 100%">
    <meta name="Author" name="Isaque Silva(ZekaBoga)">
    <meta name="description" content="Achar letra de musicas com api">
    <meta charset="utf-8">
    <title>Music Nation</title>
</head>

<body>
<!-- BANNER -->
<header>
    <div class="banner" >
        <span class="txt1">Music</span> 
        <span class="txt2">Nation</span>
    </div>
</header>
<!-- SECOND BANNER -->
<header id="myHeader" class="secondbanner">
    <div>
        <form id="form">
            <input type="text" id="search" placeholder="Insira nome da música ou artista" autocomplete="off">
            <button class="scrbtn"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <!-- DROPDOWN -->
    <div class="dropdown">
        <button class="dropbtn"><?php echo $_SESSION['uname'];?> <i class="fas fa-chevron-down"></i></button>
        <div class="dropdown-content">
            <a href="#" id="myBtn">Perfil</a>
            <a href="#" id="myBtn2">Sobre</a>
            <a href="#" id="myBtn3">Sair</a>
        </div>
    </div>
</header>

<!-- LYRICS CONTENT -->
<div id="result" class="container">
    <p>Resultados serão mostrados aqui</p>
</div>
<div id="more" class="centered"></div>

<!-- MODAL -->
<div id="meuModal" class="modal">
  <!-- MODAL CONTENT -->
  <div class="content-modal">
    <span class="btn-fechar">&times;</span>
        <div class="user-info-div">
            <div class="user-info">
                Nome de usuário: <span><?php echo $_SESSION['uname'];?></span>
            </div>
        </div>
        <div class="user-info-div">
            <div class="user-info">
                Endereço de email: <span><?php echo $_SESSION['emailid'];?></span>
            </div>
        </div>
        <div class="user-info-div">
            <div class="user-info">
                Data de cadastro: <span><?php echo $_SESSION['joindateid'];?></span>
            </div>
        </div>
        <!-- FEED BACK AND DELETE BUTTON -->
        <div class="delete-acc">
            <a href="" class="delete-acc-link"><i class="fas fa-user-times"></i>DELETAR CONTA</a>
            <a target="_blank" href="http://isaquesilva.infinityfreeapp.com/Feedback-Sender-PHPMailer/" class="feedback-link"><i class="fas fa-comment-dots"></i>ENVIAR FEEDBACK</a>
        </div>
    </div> 
</div>

<!-- MODAL SOBRE-->
<div id="meuModal2" class="modal">
  <!-- MODAL CONTENT -->
    <div class="content-modal">
    <span class="btn-fechar2">&times;</span>
        <h2>Sobre</h2>
        <h4>
            Este projeto é totalmente dedicado a estudo.<br>
            O objetivo é criar um website e usar uma API que 
            ofereça letras de músicas e exibir essas informações.<br>
            a API que escolhi é a 
            <a class="lyrics-link" target="_blank" href="https://public-apis.io/lyrics-ovh-api">Lyrics.ovh</a> não
            é a melhor mas foi a que consegui usar. Talvez um dos 
            motivos de não ser muito boa seja pelo fato que é uma API pública.
        </h4>
    </div> 
</div>

<!-- MODAL SAIR-->
<div id="meuModal3" class="modal">
  <!-- MODAL CONTENT -->
    <div class="content-modal3">
        <question>Tem certeza que deseja sair?</question>
        <div class="yes-no-btn">
            <a class="yesbtn" href="logout.php"><i class="fas fa-check"></i>SIM</a>
            <a class="btn-fechar3" id="nobtn" href=""><i class="fas fa-times"></i>NÃO</a>
        </div>
    </div> 
</div>

<script src="https://kit.fontawesome.com/bb44531651.js" crossorigin="anonymous"></script>
<script src="../script/api.js"></script>
<script src="../script/home.js"></script>
</body>
</html>