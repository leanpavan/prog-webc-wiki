<?php
session_start();
require('connection.php');

$username = $_POST['nomeUsuario'];
$email = $_POST['email'];
$password = $_POST['password'];
$character = $_POST['preferencia'];


$sql = "INSERT INTO user (username, email, password, personagem_fav) VALUES ('$username', '$email', '$password', '$character')";

if ($conn->query($sql) === TRUE) {

    $id_user = $conn->insert_id;


    $_SESSION["id_user"] = $id_user;
    $_SESSION["nome"] = $username;


    header("location: novoUsuario.php");
    exit;
} else {
    echo "ERRO: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>