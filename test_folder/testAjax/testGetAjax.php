<?php
/*
$host = "localhost";
$user = "root";
$password = "";
$database = "test";
$mysql = mysql_connect("localhost", "root", "uotfh");*/
$dsn = 'mysql:host=localhost;dbname=test';
$username = 'root';
$password = '';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try {
  $bdd = new PDO($dsn, $username, $password, $options);
  $co="OK ";
} catch (Exception $e) {
  die('Erreur : '.$e->getMessage());
  $co = "ERREUR";
}
/*
if(mysql_select_db($database, $mysql)){
    $co= "databse exists";
}else{
    $co= "Databse does not exists";
}*/
$query = $bdd->prepare( 'SELECT * FROM packagemanagement');
$query->execute();
$result =$query->fetch();

echo json_encode(array('result'=> $result));
//array('name'=> 'John', 'time'=> '2pm', 'co' => $co, 'query' => $query
 ?>
