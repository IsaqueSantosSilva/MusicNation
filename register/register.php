<?php

include("../validation/userValidationClass.php");
$userClass = new UserClass();

$errorMessage = "";
$sucessMessage = "";
if (!empty($_POST['submitregistrationform'])) {


  $username = $_POST['username'];
  $email = $_POST['emailid'];
  $password = $_POST['userpassowrd'];
  $username_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $username);
  $email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$~i', $email);
  
  if ($username_check && $email_check) {

    $uid = $userClass->userRegistration($username, $email, $password);

    if ($uid) {

      $sucessMessage = "Conta criada com sucesso!";
    } else {
      $errorMessage = "Este Email já está cadastrado";
    }
  } else {
    $errorMessage = "Detalhes da conta inválidos";
  }
}

?>

<html>

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
    <title>Music Nation - Criar Conta</title>
</head>

<body>
    <!-- BANNER -->
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
    <!-- CADASTRO -->
    <div class="content">
        <h1 style="text-align: center; color:wheat;">CRIAR CONTA</h1>
        <form method="post" action="" name="register">

            <label class="labeltxt">Nome de usuário:</label>
            <input class="usuario" type="text" name="username" autocomplete="off" placeholder="Insira usuário"
                required />

            <label class="labeltxt">Endereço de email:</label>
            <input class="usuario" type="email" name="emailid" placeholder="Insira email" required />

            <label class="labeltxt">Senha:</label>
            <input class="senha" type="password" name="userpassowrd" placeholder="Insira Senha" required />

            <input type="submit" class="entrar" name="submitregistrationform" value="Cadastrar-se">
            <a class="fazerloginbtt" href="../login/login.php">Fazer login</a>

            <div class="erroMsg"><?php echo $errorMessage; ?></div>
            <div class="sucessMsg"><?php echo $sucessMessage; ?></div>
        </form>

    </div>
</body>

</html>