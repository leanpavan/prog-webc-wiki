<?php
    require('connection.php');

    $username = $_POST['nomeUsuario'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $character = $_POST['preferencia'];



    $sql = "INSERT INTO user (username, email, password, personagem_fav) VALUES('$username', '$email', '$password', '$character');";

    if ($conn->query($sql) === TRUE) {
        echo "Usuário adicionado com sucesso";
    } else {
        echo "ERRO: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>

<script>
    location.href = 'html/index.html'
</script>