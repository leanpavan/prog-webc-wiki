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
            <h2>Armas | Dark Souls Remastered Wiki</h2>
            <hr>
            <br>
            <p><strong>Armas</strong> são uma escolha muito estratégica e importante para o jogador em Dark Souls e Dark Souls Remastered. 
            O jogador é incentivado a descobrir e aprender o estilo de jogo da arma que se adequa ao seu estilo de jogo e preferência, 
            com parâmetros sutis afetando o desempenho da arma em combate. Um jogador poderá se dedicar a dominar uma arma e esperar ter um bom desempenho, 
            independentemente da escolha. O jogo espera criar um vínculo entre o jogador e a arma escolhida.
            </p>
            <br>
            <ul>
                <p>Algumas informações sobre as armas:</p>
                <li>A fórmula de dano das armas é: (dano base)*(n/10+1), onde n é o número de melhorias.</li>
                <li>Você também pode criar Armas de Alma de Chefe, que são forjadas a partir das almas obtidas ao derrotar certos chefes. </li>
            </ul>
            <hr class="deco">
            <h3>Categorias de Armas em Dark Souls</h3>
            <hr class="deco">
            <p>Não existe uma "melhor" arma em Dark Souls. Os jogadores podem criar Builds de Personagem em torno de armas específicas que possuem conjuntos de movimentos únicos, 
                causam um bom dano ou são facilmente obtidas no nível em que o jogador deseja jogar. Alguns jogadores escolhem armas por sua aparência estética, 
                mas na maioria dos casos, é recomendável consultar o escalonamento e as melhorias das armas para determinar se o resultado é benéfico para o personagem em PVE, 
                PVP ou ambos. As seguintes categorias de armas possuem detalhes sobre seu dano base, e todas as páginas individuais apresentam tabelas de infusão, com algumas se 
                estendendo a vídeos completos dos conjuntos de movimentos.
            </p>

            <div class="class-images">
                <div class="class-item">
                    <p>Adaga</p>
                    <img src="../imgs/Wpn_Dagger.png" alt="Adaga">
                </div>
                <div class="class-item">
                    <p>Espada Longa</p>
                    <img src="../imgs/Longsword.webp" alt="Espada Longa">
                </div>
                <div class="class-item">
                    <p>Katana</p>
                    <img src="../imgs/uchigatana.png" alt="Katana">
                </div>
                <div class="class-item">
                    <p>Espada Reta</p>
                    <img src="../imgs/bastard_sword.png" alt="Espada Reta">
                </div>
                <div class="class-item">
                    <p>Machado</p>
                    <img src="../imgs/battle_axe.webp" alt="Machado">
                </div>
            </div>
                     
        </div>


        
    </section>
</main>

</body>
</html>