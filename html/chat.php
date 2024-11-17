<?php
session_start();
require('../connection.php');
require('../checkLogin.php');


$query = "SELECT mensagens.id, mensagens.mensagens, mensagens.data_envio, user.username FROM mensagens
          JOIN user ON mensagens.id_users = user.idusers ORDER BY mensagens.data_envio DESC LIMIT 10";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"  name="viewport" content="width=device-width, initial-scale=1">
    <title>Souls Wiki</title>
    <link rel="stylesheet" href="../css/classes.css">
    <link rel="stylesheet" href="../css/chat.css">
    <link rel="icon" type="image/x-icon" href="../imgs/favicon.ico"> 
</head>
<body>
<main>
        <header>
            <div class="logo">
                <a href="index.php"><img src="../imgs/bonfire.png" alt=""></a>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="geral.php">Geral
                        <ul class="submenu">
                            <li><a href="sobre_ds.php">Sobre Dark Souls</a></li>
                            <li><a href="dlc.php">DLC: Artorias of the Abyss</a></li>
                            <li><a href="segredos.php">Segredos</a></li>
                            <li><a href="pactos.php">Pactos</a></li>
                            <li><a href="fogueiras.php">Fogueiras</a></li>
                            <li><a href="humanidade.php">Humanidade</a></li>
                        </ul>
                    </a></li>
                    <li><a href="personagens.php">Personagens
                        <ul class="submenu">
                            <li><a href="stats.php">Stats</a></li>
                            <li><a href="classes.php">Classes</a></li>
                        </ul>
                    </a></li>
                    <li><a href="equipamentos.php">Equipamentos
                        <ul class="submenu">
                            <li><a href="magias.php">Feitiços</a></li>
                            <li><a href="#">Armas</a></li>
                            <li><a href="escudos.php">Escudos</a></li>
                            <li><a href="#">Anéis</a></li>
                            <li><a href="#">Itens</a></li>
                        </ul>
                    </a></li>
                    <li><a href="mundo.php">Mundo
                        <ul class="submenu">
                            <li><a href="historia.php">Historia</a></li>
                        </ul>
                    </a></li>
                    <li><a href="chat.php">chat</a></li>
                    <li><a 
                    <?php
                        if(isset($_SESSION["nome"])){ ?>
                            href=""
                        <?php } else{ ?>
                                href="entrar.php"
                            <?php } ?> >
                    <?php
                        if (isset($_SESSION["nome"])) {
                            echo "Bem-vindo, " . htmlspecialchars($_SESSION["nome"]) . "!"; ?>
                            <ul class="submenu">
                            <li><a href="../logout.php">Sair</a></li>
                            </ul><?php
                        } else {
                            echo "Entrar";
                        }?>
                    </a></li>
                </ul>
            </nav>
        </header>



    </main>

    <section class="home_page">
        <div class="home_content chat-box">
            <h1>Chat</h1>
            <?php 
                while ($row = $result->fetch_assoc()): ?>
                    <div class="message">
                        <p><strong><?php echo htmlspecialchars($row['username']); ?>:</strong></p>
                        <p><?php echo nl2br(htmlspecialchars($row['mensagens'])); ?></p>
                        <small><?php echo $row['data_envio']; ?></small>
                    </div>
                <?php 
                endwhile; 
                ?>

            <form action="../enviar_mensagem.php" method="post">
                <textarea name="mensagem" placeholder="Escreva sua mensagem..." required></textarea>
                <button type="submit">Enviar</button>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
        $(document).ready(function(){
            function carregarMensagens() {
                $.get('carregar_mensagens.php', function(data){
                    $('.chat-box').html(data);
                });
            }

            carregarMensagens();

            setInterval(carregarMensagens, 10000);
        });
        </script>
        
    </section>

</body>
</html>