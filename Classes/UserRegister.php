<?php 
session_start();

class UserRegister{
	public $name;
	public $age;
	public $pwd;
	public $cpwd;

	function __construct(){

		$this->name = $_SESSION['user'] = $_POST['username'];
		$this->age = $_SESSION['age'] = $_POST['age'];
		$this->pwd = $_SESSION['pwd'] = $_POST['pwd'];
		$this->cpwd = $_SESSION['cpwd'] = $_POST['cpwd'];
	}

	public function validatePassword(){
		if ($this->pwd != $this->cpwd) {
			echo "As senhas não se conferem";
		}else{
			$this->insertRegisterData();
			header("Location: ../login/index.php");
		}
	}

	public function insertRegisterData(){
		if (isset($this->name) && isset($this->age) && isset($this->pwd) && isset($this->cpwd)){
			
			$conex = new PDO("mysql:host=localhost;dbname=loja",'root','');
			$inst = $conex->prepare('INSERT INTO loja.register(name,age,password,c_password) VALUES(:name,:age,:password,:c_password);');
			$inst->bindValue(':name',$_SESSION['user']);
			$inst->bindValue(':age',$_SESSION['age']);
			$inst->bindValue(':password',$_SESSION['pwd']);
			$inst->bindValue(':c_password', $_SESSION['cpwd']);
			
			if ($_SESSION['pwd'] != $_SESSION['cpwd']) {
				echo "Senhas não se conferem";
			}else{
				$inst->execute();
				echo "Dados cadastrados com sucesso";
			}
		}
	}

}
?>