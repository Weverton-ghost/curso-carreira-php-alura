<?php

//Função para exibir mensagem.
//O tipo de retorno é o void, pois ele não retornou nada, ficou no vácuo, a function não teve um tipo de retorno para a variável pela qual foi puxada. 

require __DIR__ . "/../Avaliações-filmes/melhores-avaliados.php";
//Com o DIR eu transformo de relativo que pode mudar, para um caminho absoluto, evitando bugs futuros.
//é a mesma função ele copia a função se ela tivesse lá em mehlores-avaliados.php, porque para o teste eu colei ela lá 

//Nessa função desse modelo, como ele tem retorno void, o $anoLancamentoMsg é atribuido o valor lá da variavel $anoLancamento, e lá que é atribuido o parametro, ou seja 0 valor ele é copiado e colado lá dentro da função.

//Existe as funções normal que trabalham por copias, ou seja se é alterado o valor de uma variavel dentro não altera fora, se é alterado fora não se aletera dentro, que são as usadas. 
//Existe as referenciadas que devem ser declaradas ex: &$anoLacamentoMsg, e elas se alteram em originais, ou seja, se altera a variavel de fora também altera dentro, se altera a variavel dentro altera a de fora. (raramente utilizadas)

echo "Bem vindo(a) ao sreen match!\n";

$nomeFilme = "Top gun Maverick\n";
$anoLancamento = 2022;
echo "Nome do filme: " . $nomeFilme; // Junção por concatenação.
$nomeFilme = "Thor ragnarok";
$nomeFilme = "Rena do noel";

//Sempre que chamar uma função tem que ter os ();
exibeMensagemLancamento($anoLancamento);
//E ela pode ser chamada em vários lugares e ultilizando valores diferentes, mas se baseando,
//nas mesmas ações do código dentro daquele bloco da função.
exibeMensagemLancamento(2010);
//já exibiu esse filme não é lançamento...

// As ' apenas exibe o texto que está dentro dela, não interpleta nada.
// AS " vai buscar interpletar o código.


//Quero separar meus filme por gênero.
//match vai receber essa expressão de encontros entre nome do filme e o seu genêro.
//Ou seja ele compara e retorna.

$generoFilme = match ($nomeFilme){
    "Top gun Maverick" => "Ação",
    "Thor ragnarok" => "Ficção de heroís",
    "Rena do noel" => "Desenho",
    default => "Genêro desconhecido",
}; 

echo "O genêro do filme é: $generoFilme \n";

//O var_dump vai exibir os valores de uma variável e o seu tipo
var_dump($argv);

$filme = [
    //Arrays associativos pois nome se associa com o titulo do filme e etc.
    "Nome do filme" => "Thor: Ragnarok",
    "Ano de lançamento" => 2021,
    "Nota do filme" => 7.8,
    "Gênero do filme" => "Super-herói",
]; 

//echo $filme[2];
//Percebe que imprimiu apenas a nota que é o 2, porque começa em 0;
//Ele imprimiria a nota do filme, mas foi passado uma melhor forma de exibição.
echo $filme["Nome do filme"];
var_dump("Nome do filme");

$posicaoDoR = strpos($filme["Nome do filme"], "R");
var_dump($posicaoDoR);
//strpos significa string position, que é a posição na string
//Passo por parametro aonde eu quero buscar alguma coisa, ali foi em $filme dentro da string "Nome do filme" e o que eu vou buscar dentro daquela string? eu passo por parametro os : quero buscar a posição dele, lembrando que a posição começa em 0

$exibirPorIndice = substr($filme["Nome do filme"], 0,);
var_dump($exibirPorIndice);
//Aqui ele vai fazer a exibição por indice contando apartir do indice 0, como foi especificado para ele efetuar.

$exibirPorIndiceComPadrao = substr($filme["Nome do filme"], 0, $posicaoDoR);
var_dump($exibirPorIndiceComPadrao);

//cd navego para cima das pastas no terminal e cd .. eu volto.