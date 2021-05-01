<?php

include("../validation/userValidationClass.php");
$userClass = new UserClass();

$errorMessage = "" ;

if (!empty($_POST['submitloginform'])) {
 
 $email=$_POST['emailid'];
    $password=$_POST['userpassowrd'];
  
 if(strlen(trim($email))>1 && strlen(trim($password))>1 ){
  
  $uid=$userClass->userLogin($email,$password);
        if($uid){
   $url='../home/home.php';
            header("Location: $url"); //REDIRECIONAR PARA HOME 
  }
  else{
   $errorMessage = "Email ou senha inválidos!" ;
  }
  
 }
 else{
  $errorMessage = "Detalhes inválidos" ;
  
 }
 

} 
?>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="../style/login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Train+One&display=swap" rel="stylesheet">
    <link rel="icon" href="../imgs/icon.png" style="width: 100%; height: 100%">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" name="Isaque Silva">
    <meta charset="utf-8">
    <title>Music Nation - Entrar</title>
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
        <form method="post" action="" name="login">
            <label class="labeltxt">Endereço de Email:</label>
            <input class="usuario" type="text" name="emailid" placeholder="Insira Email" required />

            <label class="labeltxt">Senha</label>
            <input class="senha" type="password" name="userpassowrd" placeholder="Insira Senha" required />

            <input type="submit" class="Entrar" name="submitloginform" value="Login">
            <a class="fazerloginbtt" href="../register/register.php">Criar Conta</a>
            <div class="errorMsg"><?php echo $errorMessage; ?></div>
        </form>
    </div>

</body>

</html>