<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"  name="viewport" content="width=device-width, initial-scale=1">
    <title>Souls Wiki</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .novoUsuarioMensagem{
            display: flex;
            flex-direction: column;
            position: absolute;
            height: 25vh;
            width: 50vh;
            top: 50%;
            left:50%;
            transform: translate(-50%, -50%);
            padding: 10px;
            background-color: rgba(31, 31, 31, 0.92);
            align-items: center;
            justify-content: center;
        }
        .novoUsuarioMensagem p{
            color: white;
            padding: 15px;
            font-size: 18px;
        }

        button{
            background: #2C2C2C;
            border: 1px solid #2C2C2C;
            color: #F5F5F5;
            font-size: 16px;
            text-align: center;
            cursor: pointer;
            width: 50%;
            height: 40px;
        }
        .novoUsuarioMensagem a{
            text-decoration: none;
            color: white;
            font-size: 18px;
        }
        .novoUsuarioMensagem a:hover {
            color: purple;
        }

    </style>
</head>
<body>
    <div class="novoUsuarioMensagem">
        <?php
            if(isset($_SESSION['nome'])){
                echo "<p>Usuario registrado com sucesso!<br>Seja bem vindo <b>" . htmlspecialchars($_SESSION['nome']) . "</b></p>";
            }
        ?>
        <button><a href="html/geral.php">Voltar a home</a></button>
    </div>
</body>
</html>