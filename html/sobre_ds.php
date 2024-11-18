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

    <section class="home_page">


        <div class="home_content">
            <h2>Sobre Dark Souls | Dark Souls Remastered Wiki</h2>
            <hr>
            <br>
            <p>Dark Souls é uma série de jogos eletrônicos de RPG de ação e fantasia sombria desenvolvida pela FromSoftware e publicada pela Bandai Namco Entertaiment. Começou com o lançamento de Dark Souls seguido por duas continuações, Dark Souls II e Dark Souls III.</p> <br>
            <p>O jogo original se destacou entre os diversos jogos da época devido a sua dificuldade e jogabilidade baseada em tentativa e erro, além de sua atmosferada e mundo bem construídos, onde o jogo se expande muito além de sua gameplay e também excede no quesito storytelling, construção de mundo, persoangens e cultura.</p>

            <br>
            <hr class="deco"> <br>
            <h3>Detalhes</h3>         
            <hr class="deco">
            <p>O jogo foi lançado em 22 de Setembro de 2011 no Japão, em 4 de Outubro na América do Norte e 7 de Outubro na Europa. O titúlo oficial é "Dark Souls".</p>

            <ul>
                <li>Antes de decidirem o nome do jogo, os desenvolvedores planejavam chamá-lo de "Dark Ring", em referência a aura que emana do anél amaldiçoado do personagem principal. O nome foi descartado quando os desenvolvedores descobriram que se tratava de um palavrão na Inglaterra.</li>
                <li>Desenvolvido pela <a href="https://pt.wikipedia.org/wiki/FromSoftware">From Software</a> e publicado pela <a href="https://pt.wikipedia.org/wiki/Bandai_Namco_Entertainment">Bandai Namco Entertaiment.</a></li>
            </ul>

            <br>
            <hr class="deco"> <br>
            <h3>Conceitos Gerais</h3>
            <hr class="deco">
            <ul>
                <li>O jogo gira entorno dos Undeads que irão lentamente arruinar o mundo.</li>
                <li>A temática de fantasia medieval é representada nos três temas principais: "Rei e Cavaleiro", "Morte e o Abismo" e "Chama do Caos".</li>
                <li>Exploração do mundo é vital, graças ao mapa interconectado, totalmente acessível mesmo caminhando</li>
                <li>Sem um mapa em mãos, o jogador terá que contar com descrições e observação dos arredores.</li>
                <li>O jogo conta com ambientes complexos, com truques, armadilhas e grandes diferenças de alturas.</li>
                <li><a href="fogueiras.php">Fogueiras</a> espalhadas pelo mapa servem de pontos de partida/checkpoints e espaços seguros para a recuperação do jogador.
                 O jogador pode descansar em uma fogueira para restaurar sua vida, <a href="">Estus</a> e <a href="">Feitiços</a>.</li>
                <li><a href="humanidade.php">Humanidade</a> é outro novo conceito introduzido no jogo e é representado pelo número no canto esquerdo superior da HUD.
                 Ela controla diversos aspectos do jogo, porém o mais importante é permitir que o jogador reviva de um Undead para um Humano e para fortalecer as <a href="fogueiras.php">Fogueiras</a>.
                Um jogador Humano pode sumonar outros jogadores Undead para ajudá-lo em sua jornada mas isso também o deixa aberto a invasões.</li>
                <li>A história não irá se expor ao jogador, mas é apresentada através de nuâncias e fragmentos. O mundo do jogo é fragmentado, mas oportunidades para descobrir Informações
                    mais profundas da história aparece para aqueles que procuram.
                </li>
                <li>Se passa na terra ficticia de Lordran.</li>
            </ul>

        </div>

        <div class="game_specs">
            <h3>Dark Souls</h3>
            <img src="../imgs/dark-souls-remaster-2018s.png" alt="Box art Dark Souls Remastered">
            <ul>
                <li>Desenvolvedor: <a href="https://pt.wikipedia.org/wiki/FromSoftware">From Software</a></li>
                <li>Publisher: <a href="https://pt.wikipedia.org/wiki/Bandai_Namco_Entertainment">Bandai Namco Entertaiment.</a></li>
                <li>Data de Lançamento: 22 de Setembro de 2011 (Japão)</li>
                <li>Gênero: RPG de Ação</li>
                <li>Plataformas: PlayStation 3, Xbox 360, PC</li>
            </ul>
        </div>
        
    </section>

</body>
</html>