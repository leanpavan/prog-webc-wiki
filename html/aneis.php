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
            <h2>Anéis | Dark Souls Remastered Wiki</h2>
            <hr>
            <br>
            <p><strong>Anéis</strong> são acessórios em <strong>Dark Souls</strong> e Dark Souls Remastered que oferecem vários bônus quando equipados. 
            Os jogadores podem equipar até 2 anéis, mas não é possível equipar dois do mesmo item. É possível acumular efeitos semelhantes, 
            como combinar a regeneração de stamina entre um anel e o consumível Flor Verde.
            <br><br>
            A versão remasterizada de Dark Souls inclui o equipamento da <strong>DLC Artorias of the Abyss</strong> como parte do jogo base.
            </p>
            <br>
            <hr class="deco">
            <h3>Anéis em Dark Souls</h3>
            <hr class="deco">

            <div class="class-images">
                <div class="class-item">
                    <p>Anel do Havel</p>
                    <img src="../imgs/4000.png" alt="Havel">
                </div>
                <div class="class-item">
                    <p>Pacto de Darkmoon Blade</p>
                    <img src="../imgs/4040.png" alt="Darkmoon Blade">
                </div>
                <div class="class-item">
                    <p>Anel de um ser pequeno</p>
                    <img src="../imgs/4042.webp" alt="Tiny Being">
                </div>
                <div class="class-item">
                    <p>Anel do Lobo</p>
                    <img src="../imgs/4035.png" alt="Wolf">
                </div>
                <div class="class-item">
                    <p>Anel da Serpente Prateada</p>
                    <img src="../imgs/4022.png" alt="Wolf">
                </div>
            </div>
            
            
            
        </div>


        
    </section>
</main>

</body>
</html>