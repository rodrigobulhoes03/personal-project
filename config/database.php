<?php

$host = "db";
$port = "3306";
$dbname = "Apostas";
$user = "root";
$password = "1234"; 

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $user, $password);
    
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Ligação à base de dados feita com sucesso!";

} catch(PDOException $e) {
    echo "Erro na ligação: " . $e->getMessage();
}

