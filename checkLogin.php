<?php
// Verificar se o usuário está logado
if (!isset($_SESSION["nome"])) {
    header("Location: entrar.php");
    exit();
}
?>