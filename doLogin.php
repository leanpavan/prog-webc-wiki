<?php
    require('connection.php');

    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $senha = $_POST["password"];

        $sql = "SELECT username, idusers FROM user WHERE email = ? AND password = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();
        $stmt->store_result();


        if ($stmt->num_rows > 0) {
            $stmt->bind_result($nome, $id_user);
            $stmt->fetch();
            // Lembrar de guardar as senhas com hash caso sobre tempo

            $_SESSION["nome"] = $nome;
            $_SESSION["id_user"] = $id_user;
            header("Location: html/index.php");
            exit;
        }else{
            header("Location: html/entrar.php?error=1");
        }

        $stmt->close();
    }

    $conn->close();
?>