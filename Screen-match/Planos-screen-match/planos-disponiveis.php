<?php
//Planos e permissões dos filmes.
$planoSenior = true;
$planoPleno = true;
$planoJunior = false;

$filme = "Thor - ragnarok";
$anoLancamentoPlano = 2022;

//Add tipos das variaveis da função, e o tipo do retorno, nesse exemplo ele retornou um valor bool, pois é uma verficação se aquele plano está incluido tais planos, e o senior tem o valor de true.
function incluidoNoPlano(bool $planoSenior, int $anoLancamentoPlano): bool{
    return $planoSenior || $anoLancamentoPlano < 2020;
    //Com o return eu retorno o resultado da análise dos planos junto com o anoLancamento, fazendo a verificação do parametrô 2020 também. 
}
$incluidoNoPlano = incluidoNoPlano ($planoSenior, $anoLancamentoPlano);

if ($incluidoNoPlano){
    echo "Para o seu plano esse filme está disponível!\n";
} else {
    echo "O filme não está disponível no seu plano!\n";
}

$mensalidadePlano = "pago";
switch ($mensalidadePlano) {
    case "pago": 
        echo "Sua mensalidade do plano está paga.\n";
        break;
    case "pendente":
        echo "Sua mensalidade do plano está disponível para pagamento.\n";
        break;
    case "vencida":
        echo "Sua mensalidade do plano está vencida, pague ou cortaremos seu acesso.\n";
        break;
    default:
        echo "Você não possui faturas em aberto.\n";
        break;  
}