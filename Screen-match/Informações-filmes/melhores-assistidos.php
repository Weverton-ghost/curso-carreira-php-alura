<?php

echo "Bem vindo(a) ao sreen match!\n";

$nomeFilme = "Top gun Maverick\n";
echo "Nome do filme: " . $nomeFilme; // Junção por concatenação.
$nomeFilme = "Thor ragnarok";
$nomeFilme = "Rena do noel";

$anoLancamento = 2022;
if ($anoLancamento >= 2024){
    echo "Esse filme é um lançamento!\n";
} elseif ($anoLancamento >= 2020 && $anoLancamento <= 2023){
    echo "Esse filme ainda é novo!\n";
} else {
    echo "Esse filme não é lançamento!\n";
}

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
    "Nome do filme" => "Thor - Ragnarok",
    "Ano de lançamento" => 2021,
    "Nota do filme" => 7.8,
    "Gênero do filme" => "Super-herói",
]; 
//echo $filme[2];
//Percebe que imprimiu apenas a nota que é o 2, porque começa em 0;
//Ele imprimiria a nota do filme, mas foi passado uma melhor forma de exibição.
echo $filme["Nome do filme"];
