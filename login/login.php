<?php

include("../validation/userValidationClass.php");
$userClass = new UserClass();

$errorMessage = "" ;

if (!empty($_POST['submitloginform'])) {
 
    $email=$_POST['emailid'];
    $password=$_POST['userpassowrd'];
  
 if(strlen(trim($email))>1 && strlen(trim($password))>1 ){
  
  $uid = $userClass->userLogin($email,$password);
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
    <link rel="stylesheet" media="screen and (max-width: 900px)" href="../style/small-login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Train+One&display=swap" rel="stylesheet">
    <link rel="icon" href="../imgs/icon.png" style="width: 100%; height: 100%">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" name="Isaque Silva">
    <meta name="description" content="Achar letra de musicas com api">
    <meta charset="utf-8">
    <title>Music Nation - Entrar</title>
</head>

<body>
<header>
        <div class="banner" >
            <span class="txt1">Music</span> 
            <span class="txt2">Nation</span>
        </div>
</header>

    <!-- FORM -->
    <div class="content">
        <div class="jointxt">
        <span>ENTRAR</span>
        </div>
        <form class="inputform" method="post" action="" name="login.php">
            <div><label class="labeltxt">Endereço de Email:</label> </div>
            <div><input class="inputs" type="text" name="emailid" required /></div>
            <div><label class="labeltxt">Senha:</label> </div>
            <div><input class="inputs" type="password" name="userpassowrd" required /> </div>
            <div><input type="submit" class="entrar" name="submitloginform" value="ENTRAR"/> </div>
            <a class="fazerloginbtt" href="../register/register.php">Criar Conta</a>
            <div class="errorMsg"><?php echo $errorMessage;?></div>
        </form>
    </div>
</body>

</html>