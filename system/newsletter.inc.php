<?php
error_reporting(E_ERROR);
ini_set('display_errors', 1);
$db = "magal709_vaivoando";
// Create connection
$conn = new mysqli("localhost","magal709_root","GoFlyPass", $db,"2083");
//Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }

$email = $_POST["emailNews"] ;

validaemail($conn, $email);

function validaemail($conn, $email) {
 //verifica se e-mail esta no formato correto de escrita
 if (trim($email) == '') {
   die("E-mail vazio.");
 }
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   $mensagem='E-mail Inv&aacute;lido!';
   die($mensagem);
   } else {
   //Valida o dominio
   $dominio=explode('@',$email);
   if(!checkdnsrr($dominio[1],'A')) {
     $mensagem='E-mail Inv&aacute;lido!';
     die($mensagem);
   } else {
     $sqlSelect = "SELECT COUNT(email) FROM tbl_news WHERE email = '". $_POST["emailNews"] ."'";
     $result = $conn->query($sqlSelect);
     $queryResult = $result->fetch_array();

     if ($queryResult[0] > 0) {
       $mensagem = "E-mail j&aacute; cadastrado nessa sess&atilde;o.";
       die($mensagem);
     } else {
       inserirEmail($conn, $email);
     }
   }
 }
}

function inserirEmail($conn, $email) {
  $date = date('Y-m-d H-m-s');
  $sql = "INSERT INTO tbl_news (email, datetime) VALUES ('$email', '$date')";
  if ($conn->query($sql) === TRUE) {
      $mensagem = "Adicionado com Sucesso";
      die($mensagem);
  }
}

 $conn->close();

?>