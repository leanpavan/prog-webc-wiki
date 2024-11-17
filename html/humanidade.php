<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"  name="viewport" content="width=device-width, initial-scale=1">
    <title>Souls Wiki</title>
    <link rel="stylesheet" href="../css/humanidade.css"> 
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
            <h2>Humanidade | Dark Souls Remastered Wiki</h2>
            <hr>
            <br>
            <p><strong>Humanidade</strong> é uma mecânica que controla diversos aspectos do jogo, tanto Offline como Online.
            </p>
            <br>
            <hr class="deco">
            <h3>Uso da Humanidade</h3>
            <hr class="deco"> <br>
            <p>A Humanidade é usada para reviver a forma Humana do jogador.
            </p>
            <ul>
                <li>Reviver a forma Humana custa 1 Humanidade, que pode ser gasta na <a href="fogueiras.php">Fogueira</a>.</li>
                <li>A forma Humana permite que o jogador sumone outros jogadores para ajudá-lo e guiá-lo na sua jornada.</li>
                <li>A forma Humana permite que o jogador invada o mundo de outro jogador.</li>
                <li>A forma Humana também deixa o jogador aberto a invasões de outros jogadores.</li>
            </ul><br>
            <p>A Humanidade também é usada para acender ainda mais uma Fogueira.</p>
            <ul>
                <li>Acender uma Fogueira aumenta a quantidade de Estus que ela restaura.</li>
                <li>Para acender uma Fogueira além de 10 Estus é necessário realizar o <strong>O Rito de Ignição</strong>.</li>
            </ul>

        </div>
        
    </section>

</body>
</html>