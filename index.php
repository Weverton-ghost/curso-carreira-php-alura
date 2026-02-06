<?php

require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    nome: 'Thor - Ragnarok',
    anoLancamento: 2021,
    genero: 'Super-herói'
);

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento;