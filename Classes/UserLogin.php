<?php 
session_start();


class UserLogin{

	public $login_user;
	private $login_pwd;

	function __construct(){
		
		$this->login_user = $_SESSION['login_user'] = $_POST['login_user'];
		$this->login_pwd = $_SESSION['login_pwd'] = $_POST['login_pwd'];
	}


	public function validateOnlineLogin(){
		$user = $_SESSION['login_user'];
		$password = $_SESSION['login_pwd'];

		$con = new PDO("mysql:host=localhost;dbname=banco",'root','');
		$query = "SELECT name,password FROM loja.register WHERE name = '$user' and password = '$password'";
		$stmt = $con->prepare($query);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if ($user == $row['name'] && $password == $row['password']) {
			header("Location: ../mainpage/index.php");
		}else{
			echo "Dados não se conferem";
		}
	}
}
?>