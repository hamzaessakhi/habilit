<?php

include_once 'services/ProfesseurService.php';
include_once 'beans/Professeur.php';
extract($_POST);

/*Local database
$host = 'localhost';
$dbname = 'platform';
$login = 'root';
$password = '';*/


//Remote Database
$host = 'remotemysql.com';
$dbname = 'QyAQjHlDFm';
$login = 'QyAQjHlDFm';
$password = 'DKSrKBVlQe';

try {
    $con = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);
    $con->query("SET NAMES UTF8");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }

$es = new ProfesseurService();



$password=$_POST['password'];

$email=$_POST['email'];
$id = $es->findByEmail($email);
$msg = $_POST['validity'];
if($msg != 'non indentique'){
    $query = "UPDATE `professeur` SET `password` = md5('$password') WHERE `id` = $id ";
    $req = $con->prepare($query);
    $req->execute() or die('Erreur dans votre code SQL');
    echo "<script>if(confirm('Votre mot de passe a été changer avec succes !')){document.location.href='login.php'};</script>";
}else{
    echo ('<script>alert("Erreur")</script>');
}

