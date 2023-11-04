<?php 

include("CartaPokemon.php");

class Jogador{
    public $nome;
    public $cartas;
    public $partidasPerdidas;
    public $foto;

    public function __construct($nome, $foto){
        $this->nome = $nome;
        $this->foto = $foto;
        $this-> partidasPerdidas = 0;
        $this->cartas = array();
        for($i = 0; $i < 6; $i++){
            $this->cartas[] = new CartaPokemon();
        }
    }

    public function getNome(){
        return $this->nome; 
    }

    public function getPartidasPerdidas(){
        return $this->partidasPerdidas; 
    }

    public function setPartidasPerdidas($valor){
        $this->partidasPerdidas = $valor;
    }

    public function removerCarta($carta){
        for($i=0; $i<count($this->cartas);$i++){
            if($this->cartas[$i] === $carta){
                unset($this->cartas[$i]);
                $this->cartas = array_values($this->cartas);
                break;
            }
        }
    }

    public function adicionarCarta($carta){
        if($this->cartas<6){
            $this->cartas[] = $carta; 
        }
        else{
            echo "Você já possui o número máximo de cartas"; 
        }
    }

    public function verificarFimDeJogo(){
        if($this->partidasPerdidas == 4 || count($this->cartas) == 0){
            return true;
        }
        else{
            return false;
        }
    }

    public function realizarBatalha(Jogador $adversario){
        echo "<h1>Batalha</h1>";
        echo "<div class='batalha'>";
        while(!($this->verificarFimDeJogo()) && !($adversario->verificarFimDeJogo())){
            echo "<div class = 'batalhaIndividual'>";
            $this->cartas[0]->batalhar($adversario->cartas[0]);
            
            $adversario->cartas[0]->batalhar($this->cartas[0]);
            
            if($this->cartas[0]->verificaEliminacao($adversario->cartas[0])){
                $this->setPartidasPerdidas($this->getPartidasPerdidas()+1);
                $this->removerCarta($this->cartas[0]);
                $adversario -> setPartidasPerdidas(0);
            }

            else{
                $adversario->setPartidasPerdidas($adversario->getPartidasPerdidas()+1);
                $adversario->removerCarta($adversario->cartas[0]);
                $this -> setPartidasPerdidas(0);
            }

            echo "</div>";
            echo "<br>";
        }

        if($adversario -> verificarFimDeJogo()){
            $campeao = $this->nome;
            $foto = $this->foto;
            $time = $this->cartas;
        }
        
        if($this -> verificarFimDeJogo()){
            $campeao = $adversario->nome;
            $foto = $adversario->foto;
            $time = $adversario->cartas;
        }
        echo "</div>";?>

        <div class='ganhador'>
            <h1>Treinador Campeão: <?php echo $campeao?></h1>
            <img class="imgCampeao" src="<?php echo $foto?>" alt="">
            <h1>Time do Campeão</h1>
            <div class="cartas">
            <?php 
                foreach($time as $indice => $carta){?>
                    <div class="carta">
                        <h3 class="nomePokemon"><?php echo $carta->pokemon->nome?></h3>
                        <img class="imgCarta" src=<?php echo "../img/pokemon/".$carta->pokemon->foto?> alt="">
                        <span class="nivel">Nível: <?php echo $carta->pokemon->nivel?></span>
                        <span class="tipo">Tipo: <?php echo $carta->pokemon->tipo?></span>
                    </div>
                <?php }
            ?>
            </div>
        </div>

    <?php }
}

?>