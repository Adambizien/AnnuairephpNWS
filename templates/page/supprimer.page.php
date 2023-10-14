<?php
require './src/dbConnect.php';


    if(isset($_GET["id"]) ){
        delete($connection,$_GET["id"]);
        header('Location: ./?page=accueil&layout=html');
    }