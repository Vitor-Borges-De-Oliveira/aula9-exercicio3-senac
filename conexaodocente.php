<?php

$localhost = "localhost";
$username  = "root";
$password  = "";
$db        = "bdcurso";

try {
    $connect= new PDO("mysql:host=$localhost;dbname=$db",$username,$password);
}
catch (PDOException $e) {
    echo "Erro: ".$e->getMessage();
}