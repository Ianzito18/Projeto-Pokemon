<?php 

session_start();

$_SESSION["pokemons"] = array(
    "Bulbassauro",
    "Charmander",
    "Squirtle",
    "Pikachu",
    "Caterpie",
    "Pidgey",
    "Rattata",
    "Nidoking" ,
    "Growlithe",
    "Abra",
    "Hitmonchan",
    "Kangaskhan",
    "Dragonite",
    "Geodude",
    "Hitmonlee", 
    "Rhydon",
    "Scyther",
    "Electabuzz",
    "Tauros",
    "Lapras",
    "Exeggutor",
    "Gengar" 
);

$_SESSION["tipos"] = array(
    "Bulbassauro" => "grama",
    "Charmander" => "fogo",
    "Squirtle" => "agua",
    "Pikachu" => "eletrico",
    "Caterpie" => "inseto",
    "Pidgey" => "voador",
    "Rattata" => "normal",
    "Nidoking" => "venenoso",
    "Growlithe" => "fogo",
    "Abra" => "psiquico",
    "Hitmonchan" => "lutador",
    "Kangaskhan"=> "terra",
    "Dragonite" => "dragão",
    "Geodude" => "pedra",
    "Hitmonlee" => "lutador", 
    "Rhydon" => "terra",
    "Scyther" => "inseto",
    "Electabuzz" => "eletrico",
    "Tauros" => "normal",
    "Lapras" => "agua",
    "Exeggutor" => "psiquico",
    "Gengar" => "fantasma"
);

$_SESSION["hierarquia"] = array(
    "dragão",
    "fantasma",
    "psiquico",
    "eletrico",
    "agua",
    "fogo",
    "pedra",
    "voador",
    "grama",
    "inseto",
    "venenoso",
    "lutador",
    "terra",
    "normal"
);

$_SESSION["desc"] = array(
    "Bulbassauro" => "Bulbasauro é um Pokémon bonito nascido com uma grande semente solidamente fixado à sua volta, a semente cresce em tamanho como o Pokémon tem.",

    "Charmander" => "A chama que arde na ponta da cauda é uma indicação das suas emoções. A chama vacila quando Charmander está desfrutando de si mesmo. Se o Pokémon fica furioso, a chama queima ferozmente.",
    
    "Squirtle" => "O casco de Squirtle não é apenas usado para a proteção. A forma arredondada do casco e as ranhuras em sua superfície ajudam a minimizar a resistência na água, permitindo que este Pokémon nade em altas velocidades.",
    
    "Pikachu" => "Toda vez que Pikachu dá de cara com algo novo, ele o acerta com uma descarga elétrica. Se você se deparar com um fruto torrado, é uma evidência de que esse Pokémon errou na intensidade de energia de sua descarga elétrica.",
    
    "Caterpie" => "Caterpie tem um apetite voraz. Ele pode devorar as folhas maiores do que o seu corpo bem diante dos seus olhos. A partir de sua antena, este Pokémon libera um odor terrivelmente forte.",
    
    "Pidgey" => "Pidgey tem um sentido extremamente afiado de direção. Ele é capaz de infalivelmente voltar para seu ninho, por mais longe que seja removido do seu ambiente familiar.",
    
    "Rattata" => "Rattata é cauteloso ao extremo. Mesmo enquanto ele está dormindo, ele escuta constantemente movendo suas orelhas ao redor. Não é exigente sobre onde ele vive - ele vai fazer seu ninho em qualquer lugar.",
    
    "Nidoking" => "O rabo grosso de Nidoking carrega um poder destrutivo enorme. Com uma chicotada, ele pode derrubar uma torre de transmissão de metal. Uma vez que este Pokémon se esbraveja e parte ao ataque, não há o que o pare.",
    
    "Growlithe" => "Growlithe tem senso de odor sensacional. Uma vez que ele sentir um cheiro, ele jamais esquecerá, não importa o que aconteça. Seu olfato é tão avançado que ele o usa até para determinar as emoções dos seres vivos ao seu redor.",
    
    "Abra" => "Abra dorme por 18 horas por dia. Entretanto, ele pode sentir a presença de inimigos mesmo enquanto dormindo. Quando isso acontece, ele se teleporta imediatamente para um local seguro.",
    
    "Hitmonchan" => "Diz-se que Hitmonchan possui o espírito de um boxeador que estava trabalhando em direção a um campeonato mundial. Este Pokémon tem um espírito indomável e nunca desistirá diante das adversidades. Seus socos cortam o ar. Eles são lançados a uma velocidade tão alta que até um leve arranhão pode causar queimaduras.",
    
    "Kangaskhan"=> "Se você encontrar um jovem Kangaskhan brincando sozinho, nunca deve perturbá-lo ou tentar pegá-lo. A mãe do bebê Pokémon com certeza está na área, e ela ficará violentamente furiosa com você. Cria seus filhotes na bolsa da barriga. Não fugirá de nenhuma luta para manter seus filhotes sempre protegidos.",
    
    "Dragonite" => "Dragonite é capaz de circular o globo em apenas 16 horas. É um Pokémon de bom coração que leva navios perdidos e afundando em uma tempestade à segurança da terra. Diz-se que sua inteligência corresponde à dos humanos.",
    
    "Geodude" => "Quanto mais um Geodude vive, mais suas bordas ficam lascadas e desgastadas, tornando-a mais arredondada em sua aparência. No entanto, o coração deste Pokémon permanecerá duro e áspero para sempre. Geralmente é encontrado perto de trilhas nas montanhas e afins. Se você pisar em um por acidente, ele ficará com bastante raiva.",
    
    "Hitmonlee" => "As pernas de Hitmonlee se contraem e se esticam livremente. Usando essas pernas de mola, ele se curva sobre os inimigos com chutes devastadores. Após a batalha, esfrega as pernas e relaxa os músculos para superar a fadiga. Este Pokémon tem um incrível senso de equilíbrio. Pode chutar em sucessão a partir de qualquer posição.", 
    
    "Rhydon" => "O chifre de Rhydon pode esmagar até diamantes não lapidados. Um golpe violento de sua cauda pode derrubar um edifício. A pele deste Pokémon é extremamente resistente. Mesmo os golpes de canhão diretos não deixam um arranhão. Rhydon tem um chifre que serve de broca. É usado para destruir rochas e pedregulhos. Este Pokémon ocasionalmente bate em fluxos de magma, mas a pele semelhante a uma armadura o impede de sentir o calor.",
    
    "Scyther" => "Scyther é incrivelmente rápido. Sua velocidade incrível aumenta a eficácia das foices gêmeas em seus antebraços. As foices deste Pokémon são tão eficazes que podem cortar troncos grossos com um único golpe. Ele confunde sua presa com seus movimentos rápidos de ninja. Então, em um instante, ele os fende com suas foices.",
    
    "Electabuzz" => "Quando uma tempestade chega, gangues deste Pokémon competem entre si para escalar alturas que provavelmente serão atingidas por raios. Algumas cidades do mundo Pokémon usam Electabuzz no lugar dos pára-raios. Metade de todos os apagões repentinos são causados por Electabuzz se reunindo em usinas de energia elétrica e engolindo eletricidade.",
    
    "Tauros" => "Este Pokémon não fica satisfeito a menos que esteja furioso o tempo todo. Se não houver oponente para Tauros lutar, ele irá atacar árvores grossas e derrubá-las para se acalmar. Historicamente, pessoas em áreas de todo o mundo montaram em Tauros, mas dizem que a prática começou em Alola. Quando está prestes a atacar, chicoteia seu próprio corpo repetidamente com suas três longas caudas. Uma vez que mira em seu inimigo, ele faz uma investida violenta.",
    
    "Lapras" => "As pessoas levaram Lapras quase à extinção. À noite, diz-se que este Pokémon canta melancolicamente enquanto busca o que poucos outros de sua espécie ainda permanecem. Sua alta inteligência permite compreender a fala humana. Quando está de bom humor, canta com sua bela voz. Gosta de nadar com humanos nas costas. Na região de Alola, é um importante meio de transporte fluvial.",
    
    "Exeggutor" => "O exeggutor veio originalmente dos trópicos. Suas cabeças ficam cada vez maiores com a exposição à forte luz do sol. Diz-se que quando as cabeças caem, elas se agrupam no chão para formar um Exeggcute. Seus gritos são muito barulhentos. Isso ocorre porque cada uma de suas cabeças tem sua própria vontade e pensam diferente. Eles usam a telepatia para discutir seus planos antes de chegar a uma decisão conjunta.",
    
    "Gengar" => "Às vezes, em uma noite escura, sua sombra lançada por uma luz da rua repentina e surpreendentemente o ultrapassa. Na verdade, é um Gengar passando por você, fingindo ser sua sombra. Se você se sentir atacado por um calafrio repentino, é evidência de um Gengar se aproximando onde não há escapatória. Aparentemente, deseja um companheiro de viagem. Como já foi humano, tenta criar um vínculo tirando a vida de outros humanos."
);

class Pokemon{
    public $nome;
    public $nivel;
    public $tipo;
    public $foto;

    public function __construct($nome)
    {
        $this->nome = $nome;
        $this->nivel = rand(1,50);
        $this->tipo = $_SESSION["tipos"][$nome];
        $this->foto = $this->nome.".png";
    }

    public function getNivel(){
        return $this->nivel;
    }
}

?>