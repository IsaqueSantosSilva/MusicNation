<?php

//CASO USUÁRIO NÃO ESTEJA LOGADO VOLTA PARA PAGINA DE LOGIN
if(empty($_SESSION['uid']))
{
$url='../login/login.php';
header("Location: $url");
}
else{

}

?>