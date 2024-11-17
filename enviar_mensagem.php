<?php
session_start();
require('connection.php');
require('checkLogin.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $mensagem = $conn->real_escape_string($_POST['mensagem']);
    

    $id_users = $_SESSION["id_user"];


    if (!isset($id_users)) {

        header("Location: html/entrar.php");
        exit();
    }

    // Insere a nova mensagem no banco
    $query = "INSERT INTO mensagens (id_users, mensagens) VALUES ('$id_users', '$mensagem')";
    if ($conn->query($query)) {
        // Redireciona para a página do chat
        header("Location: html/chat.php");
        exit();
    } else {
        echo "Erro ao enviar mensagem: " . $conn->error;
    }
}
?>