<?php
require './src/dbConnect.php';
require './configs/global.php';


if(isset($_POST['submit'])){
  if(!empty($_POST['surname']) && !empty($_POST['name']) && !empty($_POST['birthDay']) && !empty($_POST['email']) && !empty($_POST['phone'])){
    $payload = [$_POST['surname'],$_POST['name'],$_POST['birthDay'],$_POST["email"],$_POST['phone'],$_POST['address'],$_POST['postalcode'],$_POST['city'],$_POST['description']];
    create($connection, $payload);
    header('Location: ./?page=accueil&layout=html');
    exit;
  }
}

?>