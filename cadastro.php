<?php
    session_start();
    require('connection.php');

    $username = $_POST['nomeUsuario'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $character = $_POST['preferencia'];



    $sql = "INSERT INTO user (username, email, password, personagem_fav) VALUES('$username', '$email', '$password', '$character');";

    if ($conn->query($sql) === TRUE) {
        $_SESSION["nome"] = $username;

        header("location: novoUsuario.php");
    } else {
        echo "ERRO: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>