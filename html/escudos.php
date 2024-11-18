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
                            <li><a href="armas.php">Armas</a></li>
                            <li><a href="escudos.php">Escudos</a></li>
                            <li><a href="aneis.php">Anéis</a></li>
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
            <h2>Escudos | Dark Souls Remastered Wiki</h2>
            <hr>
            <br>
            <p><strong>Escudos</strong> são equipamentos defensivos em Dark Souls e Dark Souls Remastered.
            Em um jogo onde um único golpe pode significar a morte, os escudos desempenham um papel crucial para a sobrevivência em Lordran.
            Mais do que uma simples barreira contra os inimigos, o jogador pode escolher entre uma ampla variedade de estilos de escudo,
            adaptando-os ao seu próprio estilo de combate. Além das funções defensivas, os escudos possuem aplicações ofensivas,
            tornando sua utilização mais complexa do que apenas bloquear ataques.
            </p>
            <br>
            <hr class="deco">
            <h3>Mais sobre</h3>
            <hr class="deco">
            <p>As propriedades ofensivas de um escudo não afetam suas capacidades defensivas.
                Um erro comum entre novos jogadores é confundir o poder de ataque do escudo com sua resistência.
                A Estabilidade é uma das estatísticas mais importantes, pois quanto maior ela for, mais eficaz o escudo será ao bloquear golpes, 
                atordoar inimigos e gerenciar o uso de estamina. O Bloqueio de Dano indica a eficácia do escudo contra diferentes tipos de ataques; 
                a maioria dos escudos pode bloquear dano físico completamente, mas nenhum é capaz de bloquear totalmente dano mágico ou elemental. 
                Os escudos também oferecem outras habilidades, como aparar ataques, golpear inimigos e realizar movimentos especiais.
            </p>
            <img src="../imgs/escudoprata.png" alt="Escudo Simples" width="450" height="500">
            <img src="../imgs/escudoDragao.png" alt="Escudo de dragão" width="460" height="500">
            <img src="../imgs/escudoPorta.png" alt="Escudo porta" width="460" height="500">
        </div>


        
    </section>
</main>

</body>
</html>