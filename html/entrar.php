<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Souls Wiki</title>
    <link rel="stylesheet" href="../css/registrar_entrar.css">
    <link rel="icon" type="image/x-icon" href="../imgs/favicon.ico">
</head>
<body>
    <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
        <style>
            #errorLogin {
                display: block;
            }
        </style>
    <?php endif; ?>

    
    <div class="voltar">
        <a class="voltarBtn" href="index.php" onclick="history.go(-1)"><img src="../imgs/seta-esquerda.png" alt="voltar pagina"></a>
    </div>


<form class="FormRegister" id="form" method="post" action="../doLogin.php">
    <div class="InputField">
        <label for="email">Email</label>
        <input type="email" id="emailId" name="email" placeholder="email@domain.com">
        <label class="required-label-pass" id="emailWarning">Preencha este campo</label>
    </div>

    <div class="InputField">
        <label for="password">Senha</label>
        <input type="password" id="passwordId" name="password" placeholder="*******">
        <label class="required-label-pass" id="passWarning">Preencha este campo</label>
    </div>

    <div class="CheckboxField">
        <input type="checkbox" id="showPassword" onclick="togglePassword()">
        <label for="showPassword">Mostrar Senha</label>
    </div>

    <div class="ButtonGroup">
        <input type="submit" value="Entrar" class="Button">
        <label class="errorLogin" id="errorLogin">Email ou senha incorreto</label>
    </div>
    <div class="criarConta">
        <a>Não possui uma conta?</a>
        <a class="criarContaTxt" href="registrar.html">Criar conta</a>
    </div>
</form>

<script src="../js/Login.js"></script>

</body>
</html>
