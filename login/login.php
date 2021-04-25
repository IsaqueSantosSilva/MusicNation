<?php
  
?>
<!DOCTYPE html>
<html pt-br>
<head>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Train+One&display=swap" rel="stylesheet">
	<link rel="icon" href= "../imgs/icon.png" style="width: 100%; height: 100%">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="Author" name="Isaque Silva">
	<meta name="description" content="site de streaming de musicas/logar">
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
		<a class="icon" href="#"><img src="../imgs/logo.png" width="90" height="90"></a>
		<a class="text1" href="#"> MusicNation </a>
	</div>
</header>

	<!-- LOGIN -->
	
	<div class="content">
		<h1 style="text-align: center;">ENTRAR</h1>
		<form  method="post" action="process.php">
			<label class="labeltxt">Nome de usuário:</label>
    		<input class="usuario" type="text" name="username" required>

			<label class="labeltxt">Senha:</label>
    		<input class="senha" type="password" name="password" required>

    		<input class="entrar" type="submit" value="Entrar" name="login">
    		<a class="criarcontabtt" href="../register/register.php">Criar Conta</a>
  		</form>
	 </div>

		  	<!-- <div class="content"> -->
			<!-- <h1 class="entrartxt">Entrar</h1>
			<p class="usuariotxt">Usuário</p>
    		<input  class="usuario" type="text" name="usuario" > 
    		<p class="senhatxt">Senha</p>
    		<input class="senha" type="password" name="senha" >
			<input class="entrar" type="submit" value="Entrar" name="acao">
    		<h3> Não tem conta?<a href="../singup/index.php" class="criarcontabtt"> Criar conta </a></h3> -->
	</from>
</body>
</html>
