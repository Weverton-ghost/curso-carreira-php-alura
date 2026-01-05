<?php
//Planos e permissões dos filmes.
$planoSenior = true;
$planoPleno = true;
$planoJunior = false;

if ($incluidoNoPlano = $planoSenior || $anoLancamento < 2020){
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