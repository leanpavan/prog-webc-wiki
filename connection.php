<?php
    $servername = '127.0.0.1';
    $password = '';
    $dbname = 'wiki';
    $username = 'root';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro de conexao: " . $conn->connect_error);
    }
    echo "Conectado";
?>
