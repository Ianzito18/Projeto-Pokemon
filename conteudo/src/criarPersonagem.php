<?php
    include("../classes/Jogador.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Personagens</title>
    <link rel="stylesheet" href="../css/criarPersonagem.css">
    <?php 
        if(isset($_GET["enviar"])){
            echo "<style>
                form{
                    display: none; 
                }
            </style>";
        }
    ?>
</head>
<body>
    <form action="" method="get">
        <?php 
            $treinadores = glob("../img/treinador/*");
        ?>
        <div class="jogador">
            <h2>Jogador 1</h2>
            <p>Escolha seu treinador</p>
            <?php 
                if($treinadores != null){   
                    echo "<div class='treinadores'>";
                    foreach($treinadores as $indice => $treinador){
                        echo "<div class='treinadorOp'>";
                        echo "<label for='treinador1-$indice'>";
                            echo "<img class='treinadorImg' src='$treinador'>";
                        echo "</label>";
                        echo "<input type='radio' name='treinador1[]' id='treinador1-$indice' value='$treinador'>";
                        echo "</div>";  
                    }
                    echo "</div>";
                }
            ?>
            <p>Nome</p>
            <input type="text" name="nome1" id="nome1" placeholder="Digite seu nome...">
        </div>
        <div class="jogador">
            <h2>Jogador 2</h2>
            <p>Escolha seu treinador</p>
            <?php 
                if($treinadores != null){   
                    echo "<div class='treinadores'>";
                    foreach($treinadores as $indice => $treinador){
                        echo "<div class='treinadorOp'>";
                        echo "<label for='treinador2-$indice'>";
                            echo "<img class='treinadorImg' src='$treinador'>";
                        echo "</label>";
                        echo "<input type='radio' name='treinador2[]' id='treinador2-$indice' value='$treinador'>";
                        echo "</div>";  
                    }
                    echo "</div>";
                }
            ?>
            <p>Nome</p>
            <input type="text" name="nome2" id="nome2" placeholder="Digite seu nome...">
        </div>
        <button class="botao" type="submit" name="enviar">Prosseguir</button>
    </form>

    <?php 
        if(isset($_GET["enviar"])){
            $p1 = new Jogador($_GET["nome1"], $_GET["treinador1"][0]);
            $p2 = new Jogador($_GET["nome2"], $_GET["treinador2"][0]);

            $_SESSION["p1"] = $p1;
            $_SESSION["p2"] = $p2;

        ?>
            <div class="preview">
                <div class="jogadores">
                    <p class="nome"><?php echo $_GET["nome1"]?></p>
                    <img class="jogadorImg" src="<?php echo $_GET["treinador1"][0]?>" alt="">
                    <a class="verCartasBtn" href="verCartas1.php" target="_blank">Ver Cartas</a>
                </div>
                <div class="jogadores">
                    <p class="nome"><?php echo $_GET["nome2"]?></p>
                    <img class="jogadorImg" src="<?php echo $_GET["treinador2"][0]?>" alt="">
                    <a class="verCartasBtn" href="verCartas2.php" target="_blank">Ver Cartas</a>
                </div>
                <a href="batalha.php" class="batalharBtn" target="_blank">Batalhar!</a>    
            </div>
            


        <?php }
    ?>

</body>
</html>