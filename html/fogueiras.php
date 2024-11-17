<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"  name="viewport" content="width=device-width, initial-scale=1">
    <title>Souls Wiki</title>
    <link rel="stylesheet" href="../css/sobre_ds.css">   
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
        <div class="home_content">
            <h2>Fogueiras | Dark Souls Remastered Wiki</h2>
            <hr>
            <br>
            <p><strong>Fogueiras</strong> são os "checkpoints" em <a href="sobre_ds.php">Dark Souls</a>, mas elas também servem outras funções úteis. Quando um jogador encontra uma nova
            fogueira ela deve ser acessa ou, o jogador pode descansar nela para utilizá-la como novo spawnpoint caso o jogador morra.
            </p>
            <ul>
                <li>Descansar em uma <strong>Fogueira</strong> irá fazer com que todos os inimigos comuns mortos renasçam, mas o jogador estará seguro enquanto descansa na Fogueira.</li>
                <li>Descansar em uma <strong>Fogueira</strong> restaurará toda a vida e Estus do jogador. <strong>O Rito de Ignição</strong> aumenta a quantidade de Estus que a fogueira
                restaurará.</li>
                <li>Após adquirir <strong>O Lordvessel</strong>, o jogador pode usar a <strong>Fogueira</strong> para teleportar para outras Fogueiras acessas.</li>
            </ul>
            <br>
            <hr class="deco">
            <h3>Descansar na Fogueira</h3>
            <hr class="deco">
            <p>Após o jogador acender a <strong>Fogueira</strong> e descansar nela, diversas outras opções estarão disponíveis. Algumas só aparecerão mais tarde no jogo,
            após certos <a href="stats.php">stats</a> ou condições serem atingidas.
            </p>
            <ul>
                <li>Descansar em uma <strong>Fogueira</strong> restaurará o estoque de Estus e <a href="">feitiços</a> do jogador.</li>
                <li>Descansar em uma <strong>Fogueira</strong> cura o jogador do status de Envenenado e Entoxicado.</li>
                <li>Descansar em uma <strong>Fogueira</strong> fará com que todos os <a href="">inimigos</a> mortos renasçam, excluindo os bosses, minibosses
                inimigos específicos que não renascem e <a href="">NPCs</a>.
                </li>
                <li><strong>Fogueiras</strong> não podem ser acessadas se o jogador estiver em batalha.</li>
                <li>Se o jogador matar a <a href="">Fire Keeper</a> de uma Fogueira, a Fogueira irá se apagar e não estará mais disponível para descanso, mas ainda
                poderá ser utlizada para teleporte quando jogador adquirir o <strong>O Lordvessel</strong>.</li>
            </ul>

        </div>
        
    </section>

</body>
</html>