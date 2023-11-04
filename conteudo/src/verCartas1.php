<?php 
    include("../classes/Jogador.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver cartas de <?php echo $_SESSION["p1"]->nome?></title>
    <link rel="stylesheet" href="../css/verCartas.css">
</head>
<body>
    <button class="voltar" onclick="fechar()"><</button>
    <h1>Cartas de <?php echo $_SESSION["p1"]->nome?></h1>
    <div class="cartas">
    <?php 
        foreach($_SESSION["p1"]->cartas as $indice => $carta){?>
            <div class='carta'>
                <h3 class="nomePokemon"><?php echo $carta->pokemon->nome?></h3>
                <img class="imgCarta" src=<?php echo "../img/pokemon/".$carta->pokemon->foto?> alt="">
                <span class="nivel">Nível: <?php echo $carta->pokemon->nivel?></span>
                <span class="tipo">Tipo: <?php echo $carta->pokemon->tipo?></span>
                <a class="verCarta" href="#desc<?php echo $indice?>">Ver Carta</a>

                <div id="desc<?php echo $indice?>" class="modal">
                    <div class="conteudo">
                        <div class="imgBox">
                            <img class="imgDesc" src="../img/pokemon/<?php echo $carta->pokemon->nome?>.png" alt="">
                        </div>    
                        <div class="desc">
                            <h1><?php echo $carta->pokemon->nome?></h1>                    
                            <p><?php echo $carta->exibirCarta()?></p>
                            
                            <div class="footer">
                                <a href="#" class="btnFechar">Fechar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
    ?>
    </div>

    <script>
        function fechar(){
            window.close();
        }
    </script>
</body>
</html>