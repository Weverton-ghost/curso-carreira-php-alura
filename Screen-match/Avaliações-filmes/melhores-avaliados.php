<?php
// Operador de acumulação de valores.
// ANALOGIA: pegue o atual valor da váriavel e SOME com outro valor.
//$somaDeNotas += 6.7;

$quantidadeDeNotas = $argc - 1; // argc - 1 para não contar o arquivo, na hora da quantidade de notas.
$somaDeNotas = 0; //Se vou inicializar mais coisas eu começo com 0.

//o for tem uma inicialização, uma condição da repetição e um incremento. é a mais usada no dia a dia mas usamos quando sabemos o número de vezes que vamos repetir.
//Explicação do loop: contador = 1 é menor que 03 argumentos que eu passei? true, então ele processa a info retorna o loop adicionando mais 1 ao contador, 2 é menor que 3 que é a quantidade de argumentos? true e assim por diante, ele inicializa, pega uma condição, incrementa e continua fazendo a verificação até ser false.

/*for ($contador = 1; $contador < $argc; $contador++) {
    $somaDeNotas += $argv[$contador];
}

$notaDoFilme = $somaDeNotas / $quantidadeDeNotas;
echo "Nota do filme: " . $notaDoFilme . "\n";*/

//Lista de arrays de notas;
$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++){
    $notas[] = (float) $argv[$contador];
}
//var_dump($notas); com esse comando é realizado a lista de arrays de notas.
//Agora vamos realizar essas somas de notas. OBS: for se usa i geralmente.
//O count conta quantidade de elementos nos arrays, daquela variavel especificada.
$somaDeNotas = 0;

//Sem incilizadores, condições e etc... aqui é mais simples eu só vou fazer a analogia de para cada $notas eu vou como(as) chamar de $nota, basicamente permitindo percorrer uma lista, um arrays, qual quer coisa e para cada um destes itens eu tenha uma nova variavel sendo criada nesse caso $nota, ou seja para cada um dos itens do meu arrays notas, eu vou criar uma variavel nota.
foreach ($notas as $nota) {
    $somaDeNotas += $nota;
    //Acontece uma acumulação ex:
    //somaDeNotas vale = 0, então eu acumulo += $notas ex: 7.0 agora soma de notas passa a valer 7.0, mas lembra que notas se tranformou em nota para cada item, entt cada item da antiga notas será repassado a variavel nota, acumulando as a soma de notas.
}

//Segunda forma de somas por operações em cima do meu array

//$notaDoFilme = array_sum($notas) / $quantidadeDeNotas;
//Esse array sum, vai realizar a soma dos itens que tem lá no meu array

//Percorrendo as notas para efetuar a soma com o for. 
/*for ($i = 0; $i < count($notas); $i++) { 
    $somaDeNotas += $notas[$i];
}*/

$notaDoFilme = $somaDeNotas / $quantidadeDeNotas;
echo "Nota do filme: " . $notaDoFilme . "\n";


//Notas usuarios:
$suaNotaUser = $argv[1] ?? 8.3;
// ?? = Caso o usuario não passar nenhum valor, terá por padrão o valor da média 8.3;
echo "Nota do usuário: " . $suaNotaUser . "\n";

$suaOpiniaoUser = $argv[2] ?? "Filme extremamente bom!";
echo "Opinião do usuário: " .  $suaOpiniaoUser . "\n";
echo "Números de argumentos inseridos com o arquivo: " . $argc . "\n";
echo "Números de argumentos inseridos apenas pelo user: " . ($argc - 1) . "\n";

//Array no PHP é a estrutura de dados mais importante podendo ser efetuadas muitas coisas.
$notasParaOFilme = [10, 9, 8, 7.5, 5.1, 6.8]; //Array com 6 elementos
var_dump($notasParaOFilme);

//Manipulação de arrays em PHP.
//Sempre que pensar em manipular/trabalhar com arrays, provavelmente tem uma função que faz algo do tipo, ex: vou pegar esse array de notas e filtrar para ter apenas notas acima de 7, terá uma função que faz esse filtro, ou se eu quero ordenar minhas notas, terá uma função que faz isso também.

//Vamos ordenar essas notas, percebe que no var_dump acima de notas para o filme, é imprido aleatoriamente sem ordenança.
sort($notasParaOFilme); //Ordenou os parâmetros. 
//sort ordena em ordem crescente - rsort ordena em ordem descrecente. 
var_dump($notasParaOFilme);
//Observe que nessa execução, a minha lista de arrays, quando eu chamo o var_dump estão em ordem.
$menorNota = min($notasParaOFilme); //filtrei e exibi a minha menor nota.
echo "Sua menor nota é: " . $menorNota . "\n";
var_dump($menorNota);

//Tipos mais ultilizados de manipulação de arrays no PHP:

/*Verficar coisas no array:
    count($array) conta quantos itens tem
    in_array($valor, $array) vê se um valor existe no array
    array_key_exists("chaves", $array) vê se uma chave existe

 Adicionar ou remover itens:
    array_push($array, 1, 2) adiciona no final
    $array[] = 3 jeito rápido de adicionar ao final
    array_pop($array) remove o último
    array_shift($array) remove o primeiro
    unset($array[2]) remove um índice especifico
    
Percorrer o array:
    foreach ($array as $item){} o mais usado para ler item por item pois ele transforma os itens do array em uma variavel item, ou seja um por um, lendo item por item.
    array_map(fn($x) => $x*2, $array) aplica uma função em cada item
    
Filtrar / encontrar:
    array_filter($array, fn($x) => $x > 10) filtra com condição
    array_search($valor, $array) retorna a posição do valor

Ordenar:
    sort($array) ordena valores (crescente)
    rsort($array) ordena decrecente
    asort($array) ordena mantendo as chaves
    ksort($array) ordena pelas chaves

Transformar / dividir / juntar:
    explode(",", $string) transforma string em array
    implode("-", $array) junta array em string
    array_slice($array, 0, 3) pega uma parte do array
    array_merge($a, $b) junta 2 array
    
Depuração:
    var_dump($array) mostra tudo do arrya com os tipos
    print_r($array) mostra mais bonito e simples    */

$filmesArray = ["Thor", "Matrix", "Avatar"]; //Arrays

echo "Quantidade de Arrays: " . count ($filmesArray) . "\n"; // 3

array_push($filmesArray, "Inception"); //Add um filme no final

foreach ($filmesArray as $filme) {
    echo $filme . "\n";
} //Percorre todos item a item e transformando os em $filme 

sort($filmesArray); //Ordenados em ordem crescente
print_r($filmesArray); //Depurados em maneira simples. 

function exibeMensagemLancamento(int $anoLancamentoMsg): void {
    if ($anoLancamentoMsg >= 2024){
        echo "Esse filme é um lançamento!\n";
    } elseif ($anoLancamentoMsg >= 2020 && $anoLancamentoMsg <= 2023){
        echo "Esse filme ainda é novo!\n";
    } else {
        echo "Esse filme não é lançamento!\n";
    }
}