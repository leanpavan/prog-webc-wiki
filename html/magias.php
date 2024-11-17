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
    
    <main>
    <section class="home_page">
        <div class="home_content">
            <h2>MAGIAS | Dark Souls Remastered Wiki</h2>
            <hr>
            <br>
            <p><strong>Para usar qualquer tipo de magia</strong>, o jogador deve primeiro aprender um feitiço e equipar
             um Catalisador adequado à classe mágica do feitiço. 
             Após aprender o feitiço, ele deve ser equipado em uma Fogueira utilizando a opção 
             "Ajustar Magia". Cada feitiço possui um número limitado de usos antes de se esgotar, mas descansar 
             em uma Fogueira irá recarregá-lo completamente. Alguns feitiços podem ser equipados mais de uma vez, 
             caso o jogador tenha espaços suficientes e cópias do feitiço disponível.
            </p>
            <br>
            <hr class="deco">
            <h3>Tipos de magia</h3>
            <hr class="deco">
            <p>Em dark souls, existem 2 tipos de magias, as magias do dragão branco seath e as magias criadas pela humanidade.
            </p>
            <img src="../imgs/soul_arrow.png" alt="FLECHA DE ALMA">
            <img src="../imgs/deep_soul.png" alt="Magia PROFUNDA">
            <img src="../imgs/heavy_soul_arrow.png" alt="FLECHA DA ALMA GRANDE">
            <img src="../imgs/homing_soulmass.png" alt="ORBES DE ALMA PERSEGUIDORAS">
            <img src="../imgs/white_dragon_breath.png" alt="FLECHA DE SOPRO DO DRAGAO">
            <img src="../imgs/dark_edge.png" alt="LAMINA SOMBRIA">
        </div>


        
    </section>
</main>

</body>
</html>