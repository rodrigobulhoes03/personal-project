<?php
echo "Hello, World!<br>";

// Teste de conexão com o banco de dados
include '../config/database.php';

if ($conn) {
    echo "Conexão com o banco de dados bem-sucedida!";
} else {
    echo "Erro na conexão com o banco de dados.";
}
?>
