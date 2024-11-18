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
            <h2>História | Dark Souls Remastered Wiki</h2>
            <hr>
            <br>
            <blockquote class="quote"> <p> "Na Era dos Antigos, o mundo era informe, envolto em neblina. Uma terra de penhascos cinzentos, Arquiárvores e Dragões Eternos.
                    Mas então houve fogo, e com o fogo veio a disparidade. Calor e frio, vida e morte e, claro, luz e escuridão.
                    Então, da escuridão, eles vieram e encontraram as Almas dos Senhores dentro da chama.
                    Nito, o primeiro dos mortos,
                    a Bruxa de Izalith e suas Filhas do Caos,
                    Gwyn, o Senhor da Luz Solar, e seus fiéis cavaleiros,
                    e o pigmeu furtivo, tão facilmente esquecido.

                    "Com a Força dos Senhores, eles desafiaram os Dragões.
                    Os poderosos raios de Gwyn rasgaram suas escamas de pedra.
                    As Bruxas teceram grandes tempestades de fogo.
                    Nito desencadeou um miasma de morte e doença.
                    E Seath, o Sem Escamas, traiu os seus, e os Dragões não existiram mais.

                    "Assim começou a Era do Fogo. Mas logo as chamas desaparecerão e apenas as Trevas permanecerão.
                    Mesmo agora, só existem brasas, e o homem não vê luz, mas apenas noites intermináveis.
                    E entre os vivos são vistos portadores do maldito Darksign."

                    “Sim, de fato. O Darksign marca os Mortos-Vivos.
                    E nesta terra, os mortos-vivos são encurralados e levados para o norte,
                    onde estão trancados, para aguardar o fim do mundo.
                    ... Este é o seu destino."</p>
                </blockquote>
                <hr>
                <br>
                <h2>Video completo do canal The brother's code, para a história completa de dark souls 1:</h2>
                <iframe width="100%" height="700" src="https://www.youtube.com/embed/DE4YiRlKajs?si=-ILKHrqt7p1UBzj8"
                     title="YouTube video player" frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;
                       picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        </div>


        
    </section>
</main>

</body>
</html>