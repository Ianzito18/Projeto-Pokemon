<?php
    include("../classes/Jogador.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batalha</title>
    <link rel="stylesheet" href="../css/batalha.css">
</head>
<body>
        <?php 
            $j1 = unserialize(serialize($_SESSION["p1"]));
            $j2 = unserialize(serialize($_SESSION["p2"]));
            $j1->realizarBatalha($j2);
        ?>

    <script>
        const batalhas = document.querySelectorAll('.batalhaIndividual');
        let i = 0;
        function visivel(){
            batalhas[i].style.opacity = '1';
            i++;
            
            if(i < batalhas.length){
                setTimeout(() => {
                    visivel();
                }, 600);
            }
        }
        visivel();
    </script>
</body>
</html>