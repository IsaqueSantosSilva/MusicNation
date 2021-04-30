<?php

if(empty($_SESSION['uid']))
{
$url='login.php';
header("Location: $url");
}
else{

}

?>