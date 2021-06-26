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
    <link rel="stylesheet" media="screen and (max-width: 900px)" href="../style/small-register.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Train+One&display=swap" rel="stylesheet">
    <link rel="icon" href="../imgs/icon.png" style="width: 100%; height: 100%">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="Author" name="Isaque Silva">
    <meta name="description" content="Achar letra de musicas com api">
    <meta charset="utf-8">
    <title>Music Nation - Criar Conta</title>
</head>

<body style="background: #341f97;">
    <!-- BANNER -->
  <header>
    <div class="banner" >
      <span class="txt1">Music</span> 
      <span class="txt2">Nation</span>
    </div>
  </header>
    <!-- CADASTRO -->
    <div class="content">
        <div class="jointxt">
        <span>ENTRAR</span>
        </div>
        <form method="post" action="" name="register.php">
            <div><label class="labeltxt">Endereço de Email:</label></div>
            <div><input class="inputs" type="email" name="emailid"  require /></div>
            <div><label class="labeltxt">Nome de usuário:</label></div>
            <div><input maxlength="10" class="inputs" type="text" name="username" autocomplete="off" required/></div>
            <div><label class="labeltxt">Senha:</label></div>
            <div><input class="inputs" type="password" name="userpassowrd" required/></div>
            <div><input type="submit" class="cadastrar" name="submitregistrationform" value="CRIAR CONTA"></div>
            <a class="fazerloginbtt" href="../login/login.php">Fazer login</a>
            <div class="errorMsg"><?php echo $errorMessage; ?></div>
            <div class="sucessMsg"><?php echo $sucessMessage; ?></div>
        </form>

    </div>
</body>
</html>