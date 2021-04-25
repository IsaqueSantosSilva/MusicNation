<?php
session_start();

include_once("../config/config.php");

if(isset($_POST['register']))
{  
    $con = config::connect();
    $username = sanitizeString( $_POST['username']);
    $email = sanitizeString( $_POST['email']);
    $password = sanitizePassword( $_POST['password']);

    if($username == "" || $email == "" || $password = "")
    {
        return;
    }

    if(insertDetails($con,$username,$email,$password));
    {
        $_SESSION['username'] = $username;
        echo "<script type='text/javascript'>  window.location='profile.php'; </script>";
        // header("Locatiion: profile.php");
    }
}

if(isset($_POST['login']))
{
    $con = config::connect();
    $username = sanitizeString( $_POST['username']);
    $password = sanitizePassword( $_POST['password']);

    if($username == "" || $password = "")
    {
        return;
    }

    if(checklogin($con,$username,$password))
    {
        $_SESSION['username'] = $username;
        echo "<script type='text/javascript'>  window.location='../login/login.php.php'; </script>";
    }
    else{
        echo "Informações incorretas";
    }
}

function insertDetails($con,$username,$email,$password)
{

    $query = $con->prepare("
    
    INSERT INTO users (username,email,password)
    VALUES (:username,:email,:password)
    
    ");
    $query->bindParam(":username", $username);
    $query->bindParam(":email", $email);
    $query->bindParam(":password", $password);

    return $query->execute(); 
}

function checkLogin($con,$username,$password)
{
    $query = $con->prepare("
    
        SELECT * FROM users WHERE username = :username AND password=:password

    ");

        $query->bindParam(":username", $username);
        $query->bindParam(":password", $password);

        $query->execute();

        //VERIFICAR QUANTAS ROWS FORAM RETORNADAS

        if($query->rowCount() ==1)
        {
            return true;
        }
        else{
            return false;
        }
}

function sanitizeString($string)
{
    $string = strip_tags($string);

    $string = str_replace(" "," ", $string);

    return $string;
}

function sanitizePassword($string)
{
    $string = md5($string);
}

?>