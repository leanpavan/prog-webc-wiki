<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"  name="viewport" content="width=device-width, initial-scale=1">
    <title>Souls Wiki</title>
    <link rel="stylesheet" href="../css/classes.css">   
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
            <h2>Classes | Dark Souls Remastered Wiki</h2>
            <hr>
            <br>
            <p><strong>Classes</strong> em Dark Souls determinam seus <a href="stats.php">stats</a> e <a href="equipamentos.php">equipamentos</a> inicais. Há 10 Classes que o jogador pode
                escolher para começar o jogo. Elas estão listadas abaixo:
            </p>

            <p>
                Classes não determinam quais armas, itens, armaduras ou feitiços seu personagem pode usar; 
                elas apenas determinam com o que seu personagem começa o jogo. Conforme você progride no jogo e aumenta seus níveis, seu personagem pode potencialmente assumir qualquer papel, 
                independentemente da classe. <br> <br>

                Além de escolher uma classe, os jogadores podem escolher uma benção para começar o jogo. 
                Todos as benções podem ser encontrados no jogo posteriormente, mas escolher um aqui pode permitir que o jogador desfrute de um benefício que normalmente 
                não teria até muito mais tarde. Um jogador de primeira viagem deve ter cuidado ao escolher benções que permitam entrar em áreas de final de jogo desde o início, 
                como a Chave Mestra, pois isso pode levá-lo a ficar preso em uma área muito difícil sem o conhecimento ou equipamento para sair. Vale lembrar que a Chave Mestra pode ser usada 
                infinitamente e que a classe inicial Ladrão já começa o jogo com uma. Escolher uma segunda Chave Mestra como Ladrão é um desperdício de benção.
            </p>

            <hr class="deco">
            <h3>Classes</h3>
            <hr class="deco">

            <div class="class-images">
                <div class="class-item">
                    <p>Guerreiro</p>
                    <img src="../imgs/warrior-starting-class-male-dark-souls.jpg" alt="Guerreiro">
                </div>

                <div class="class-item">
                    <p>Cavaleiro</p>
                    <img src="../imgs/knight-starting-class-male-dark-souls.jpg" alt="Cavaleiro">
                </div>
                
                <div class="class-item">
                    <p>Viajante</p>
                    <img src="../imgs/wanderer-starting-class-male-dark-souls.jpg" alt="Viajante">
                </div>

                <div class="class-item">
                    <p>Ladrão</p>
                    <img src="../imgs/thief-starting-class-male-dark-souls.jpg" alt="Ladrão">
                </div>

                <div class="class-item">
                    <p>Bandido</p>
                    <img src="../imgs/bandit-starting-class-male-dark-souls.jpg" alt="Bandido">
                </div>

                <div class="class-item">
                    <p>Caçador</p>
                    <img src="../imgs/hunter-starting-class-male-dark-souls.jpg" alt="Caçador">
                </div>

                <div class="class-item">
                    <p>Feiticeiro</p>
                    <img src="../imgs/sorcerer-starting-class-male-dark-souls.jpg" alt="Feiticeiro">
                </div>

                <div class="class-item">
                    <p>Piromante</p>
                    <img src="../imgs/pyromancer-starting-class-male-dark-souls.jpg" alt="Piromante">
                </div>

                <div class="class-item">
                    <p>Clérigo</p>
                    <img src="../imgs/cleric-starting-class-male-dark-souls.jpg" alt="Clérigo">
                </div>

                <div class="class-item">
                    <p>Depravado</p>
                    <img src="../imgs/deprived-starting-class-male-dark-souls.jpg" alt="Depravado">
                </div>
          
        </div>
        
    </section>

</body>
</html>