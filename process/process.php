<?php
session_start();

include_once("../config/config.php");

if(isset($_POST['register']))
{  
    $con = config::connect();
    $username = sanitizeString( $_POST['username']);
    $email = sanitizeString( $_POST['email']);
    $password = sanitizePassword( $_POST['password']);

    // if($username == "" || $email == "" || $password = "")
    // {
    //     return;
    // }

    if(insertDetails($con,$username,$email,$password));
    {
        $_SESSION['username'] = $username;
        echo '<div class="ui basic modal" style="display:block; ">
            <div class="ui icon header">
            <i class="check large green icon"></i>
            Cadastrado com sucesso
            </div>
            <div class="content">
            <p>Sua conta foi criada com sucesso</p>
             </div>
            <div class="actions">
            <div class="ui green ok inverted button">
            <a href="../login/login.php" style="text-decoration:none; color: #7CFC00;">
            Fazer login
            </a>
            </div>
            </div>
             </div>';
                include('../register/register.php');
            
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
        header("Location: ../mainpage/mainpage.php");
    }
    else{
        echo '<div class="ui basic modal" style=" display:none">
					<div class="ui icon header">
					<i class="x red icon"></i>
					Dados incorretos
				  </div>
				<div class="content">
					<p>Dados de login não se conferem... Verifique seus dados ou crie uma nova conta</p>
				</div>
				<div class="actions">
					<div class="ui green ok inverted button">
					<i class="checkmark icon"></i>
						Ok
					</div>
				</div>
				</div>';
                include('../login/login.php');
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