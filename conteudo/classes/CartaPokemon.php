<?php 

include("Pokemon.php");

class CartaPokemon{
    public $pokemon;

    public function __construct(){
        $this->pokemon = new Pokemon($_SESSION["pokemons"][rand(0,21)]);
    }

    public function exibirCarta(){
        return $_SESSION["desc"][$this->pokemon->nome];
    }

    public function batalhar(CartaPokemon $cartaAdversaria){
        $seuNivel = $this->pokemon->getNivel();
        $nivelAdversario = $cartaAdversaria->pokemon->getNivel();

        if($seuNivel > $nivelAdversario){
            echo $this->pokemon->nome." lv. ".$this->pokemon->nivel." venceu a batalha!";
            echo "<img class='imgBatalha' src='../img/pokemon/".$this->pokemon->foto."'><br>";
        }

        else if($seuNivel < $nivelAdversario){
            echo $this->pokemon->nome." lv. ".$this->pokemon->nivel." desmaiou!";
            echo "<img class='imgBatalha' src='../img/pokemon/".$this->pokemon->foto."'><br>";
        }

        else if($seuNivel == $nivelAdversario){
            foreach($_SESSION["hierarquia"] as $indice => $tipo){
                if($this->pokemon->tipo == $tipo){
                    $suaPosicao = $indice;
                }

                if($cartaAdversaria->pokemon->tipo == $tipo){
                    $posicaoAdversario = $indice;
                }
            }

            if($suaPosicao < $posicaoAdversario){
                echo $this->pokemon->nome." lv. ".$this->pokemon->nivel." venceu a batalha!";
                echo "<img class='imgBatalha' src='../img/pokemon/".$this->pokemon->foto."'><br>";
            }

            else if($suaPosicao > $posicaoAdversario){
                echo $this->pokemon->nome." lv. ".$this->pokemon->nivel." desmaiou!";
                echo "<img class='imgBatalha' src='../img/pokemon/".$this->pokemon->foto."'><br>";
            }
            
            else{
                echo $this->pokemon->nome." lv. ".$this->pokemon->nivel." empatou!";
            }
        }
    }

    // A função "verifica eliminação" foi necessária para resolver o problema de ambos perderem,
    // ela funciona igual ao "batalhar", mas sem imprimir nada.
    public function verificaEliminacao(CartaPokemon $cartaAdversaria){
        $seuNivel = $this->pokemon->getNivel();
        $nivelAdversario = $cartaAdversaria->pokemon->getNivel();

        if($seuNivel > $nivelAdversario){
            return false;
        }

        else if($seuNivel < $nivelAdversario){
            return true;
        }

        else if($seuNivel == $nivelAdversario){
            foreach($_SESSION["hierarquia"] as $indice => $tipo){
                if($this->pokemon->tipo == $tipo){
                    $suaPosicao = $indice;
                }

                if($cartaAdversaria->pokemon->tipo == $tipo){
                    $posicaoAdversario = $indice;
                }
            }

            if($suaPosicao < $posicaoAdversario){
                return false;
            }

            else if($suaPosicao > $posicaoAdversario){
                return true;
            }
            
            else{
                return true;
            }
        }
    }
}

?>