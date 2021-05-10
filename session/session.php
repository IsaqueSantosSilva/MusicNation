<?php

if(empty($_SESSION['uid']))
{
$url='../login/login.php';
header("Location: $url");
}
else{

}

?>