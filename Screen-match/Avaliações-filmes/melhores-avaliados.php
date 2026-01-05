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
$notasParaOFilme = [10, 9, 8, 7.5, 5, 6.8]; //Array com 6 elementos
var_dump($notasParaOFilme);

