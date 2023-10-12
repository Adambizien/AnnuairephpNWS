<?php
require './src/dbConnect.php';
require './configs/global.php';

    if(isset($_GET["id"]) ){
        delete($connection,$_GET["id"]);
        header('Location: ./?page=accueil&layout=html');
    }