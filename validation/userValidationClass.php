<?php
Class UserClass{

// CONECTAR A DB
public function DBConnect(){

$dbhost ="localhost"; // NOME DO HOST
$dbname ="musicnation"; // NOME DA DB
$dbuser ="root"; // NOME DE USUARIO DO MYSQL
$dbpass =""; // SENHA DO MYSQL

// $dbhost ="sql104.epizy.com"; // NOME DO HOST
// $dbname ="epiz_28067078_musicnation"; // NOME DA DB
// $dbuser ="epiz_28067078"; // NOME DE USUARIO DO MYSQL
// $dbpass ="fIHLQaheUEpBMX"; // SENHA DO MYSQL

try {
$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
$dbConnection->exec("set names utf8");
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $dbConnection;  
}

catch (PDOException $e) {
echo 'Conexão falhou: ' . $e->getMessage();
}
}

// LÓGICA E VALIDAÇÃO PARA A PÁGINA DE REGISTRO DE USUÁRIO
public function userRegistration($username,$email,$password){

try{
$dbConnection = $this->DBConnect();
$stmt = $dbConnection->prepare('SELECT * FROM `user` WHERE `EMAILID` = :EMAILID ');
$stmt->bindParam(":EMAILID", $email,PDO::PARAM_STR);
$stmt->execute();

$Count = $stmt->rowCount();
if($Count < 1){
//INSERIR NOVO VALOR QUANDO NÃO CHAR DUPLICATAS
$stmt = $dbConnection->prepare('INSERT INTO `user`(USERNAME,EMAILID,PASSWORD,JOINDATE) 
VALUES(:USERNAME,:EMAILID,:PASSWORD,:JOINDATE)');
$joindate =  date("F j, Y, g:i a"); 
$hash_password= hash('sha256', $password); //Password encryption
$stmt->bindParam(':USERNAME', $username,PDO::PARAM_STR ); 
$stmt->bindParam(':EMAILID', $email,PDO::PARAM_STR); 
$stmt->bindParam(':PASSWORD', $hash_password,PDO::PARAM_STR ); 
$stmt->bindParam(':JOINDATE', $joindate,PDO::PARAM_STR); 
$stmt->execute();

$Count = $stmt->rowCount();

if($Count  == 1 ) {
$uid=$dbConnection->lastInsertId();
$dbConnection = null;

return true;  

}
else{
$dbConnection = null;
return false; 
}
 
}
else{
$dbConnection = null;
return false; 
}
}
catch (PDOException $e) {
echo 'Erro de conexão: ' . $e->getMessage();
}
 
} 
 // LÓGICA E VALIDAÇÃO PARA A PÁGINA DE LOGIN
public function userLogin($email,$password){
 
 try{
  $dbConnection = $this->DBConnect();
      $stmt = $dbConnection->prepare('SELECT * FROM `user` WHERE `EMAILID` = :EMAILID and `PASSWORD` = :PASSWORD');
  $hash_password= hash('sha256', $password); 
  $stmt->bindParam(":EMAILID", $email,PDO::PARAM_STR);
  $stmt->bindParam(":PASSWORD", $hash_password,PDO::PARAM_STR);
  $stmt->execute();

  $Count = $stmt->rowCount();
  $data=$stmt->fetch(PDO::FETCH_OBJ);
  if($Count == 1){
   session_start();
   $_SESSION['uid']=$data->UID; 
   $_SESSION['uname']=$data->USERNAME; 
   $_SESSION['emailid']=$data->EMAILID; 
   $_SESSION['joindateid']=$data->JOINDATE; 
   $_SESSION['passid']=$data->PASSWORD; 
   $dbConnection = null ;
            return true;
      
  }
  else{
   $dbConnection = null ;
            return false ;
  }
  
 }
 catch (PDOException $e) {
  echo 'Erro de conexão: ' . $e->getMessage();
 }
 
} 
}
?>