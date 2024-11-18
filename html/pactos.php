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
            <h2>Pactos | Dark Souls Remastered Wiki</h2>
            <hr>
            <br>
            <p><strong>Pactos</strong> são "facções" dentro do mundo de <strong>Dark Souls</strong>. Para se juntar a um pacto o jogador deve realizar juramentos a <a href="npcs.php">NPCs</a>
            específicos. Dentro de cada pacto há recompensas para recompensar a lealdade do jogador seguindo as instruções definidadas pelo "líder" do pacto e há diversas penalidades por quebrar
            a lealdade ao pacto. Pactos também podem ter um impacto nas interações Online do jogador. Há 9 Pactos no total. <br> <br>
            A maioria dos Pactos possuem um item multiplayer único, utilizáveis apenas pelos membros do Pacto e, até mesmo aqueles que que não possuem esses itens, terão outros itens ou feitiços
            capazes de afetar outros players de alguma forma, de modo que, o Pacto que o jogador escolher terá um impacto na sua experiência Online. De modo geral, cada Pacto irá focar entre 
            cooperação (sumonar/ser sumonado) ou competição (invadir/ser invadido), mas mesmo assim, a escolha de como o jogador irá jogar o jogo ainda é do próprio jogador. Como por exemplo, um
            jogadorm membro do Pacto <strong>"Warriros of Sunlight"</strong> (que enfatiza cooperação) pode estar no Pacto apenas para poder utilizar o milagre <strong>Sunlight Spear</strong>.
            </p> <br>

            <p>"O jogo foi feito com a ideia de introduzir eventos multiplayer como uma extensão de cada jogador"</p>
            
            
        </div>
        
    </section>

</body>
</html>