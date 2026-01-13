<?php

/*echo "Hello Word!\n";

$tecnologia = "Processador";
$tecnologiaTipos = match ($tecnologia) {
    "Processador", "Placa mãe", "Placa de vídeo" => "Sua peça é um Hardware!\n",
    "Site", "Navegador", "Aplicativo" => "Isso não é peça é um Software\n",
    default => "Se é físico é hardware, se é digital é software.\n"
};
    echo $tecnologiaTipos . "\n";


//Operador ternário tipo um if else vamos se dizer;
//condição ? valor_se_verdadeiro : valor_se_falso
//Resultado se você é um bom em maratonas...

$resultado = "Aprovado";
$mensagem = ($resultado === "Aprovado")
    ? "Aprovado você maratona em séries!\n"
    : "Reprovado, vamos assistir mais?\n";
    echo $mensagem;   

//No while realizamos uma verificação por uma condição, se ela for verdadeira eu executo o loop, aí eu verifico dnv, executo o loop dnv e etc...
//Tradrução while: enquanto.
$contador = 10;
while ($contador > 0){
    $contador--;
    echo $contador . "\n";
}

//Do: faça while: equanto.
//Ele executa o bloco pelo menos uma vez e depois verifica a condição, se a condição for verdadeira ele repete a execução.
$contador = 1;
do {
    echo $contador . "\n";
    $contador++;
} while ($contador <= 10);

$hora = 23;
if ($hora > 4 && $hora <= 12){
    echo "Bom-dia!\n";
} elseif ($hora > 12 && $hora <= 18){
    echo "Boa-tarde!\n";
} elseif ($hora > 18 && $hora <= 23){
    echo "Boa-noite!\n";
} else {
    echo "Está de madrugada!\n";
}

$num = 387391629374;
if ($num % 2 == 0){
    echo "O numéro é par\n";
} else {
    echo "O numéro é ímpar\n";
}*/

/*DESAFIO = Escreva um programa em PHP que remova os elementos duplicados de um array fornecido como entrada e exiba o array resultante. Por exemplo, se o array for [1, 2, 2, 3, 4, 4, 5], o programa deve exibir [1, 2, 3, 4, 5].*/

/* $numArrayDuplicados = [1, 2, 2, 3, 4, 4, 5];
 $numArraySemDuplicados = array_unique($numArrayDuplicados);

 //03 formas de imprimir arrays.
 //Mostra a váriavel/array de um jeito simples e fácil de ler (debug rápido).
 print_r($numArraySemDuplicados); 

 //Mostra TODOS os detalhes completo da variável (tipo, tamanho, índices e valores)
 var_dump($numArraySemDuplicados);

 //Transforma um array em TEXTO, juntando os itens com um separador ex: " - "
 echo "Números: " . implode(" - ", $numArraySemDuplicados) . "\n";

/*DESAFIO = Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a informação se o aluno foi aprovado ou não.
Se a nota for maior do que 6, o aluno foi aprovado. Caso contrário, foi reprovado

$notas = [10, 5.5, 3.8, 7.5, 6, 6.1, 5.9];

foreach ($notas as $nota) {

    //Primeiro: valida se a nota está no intervalo permitido
    if ($nota < 0 || $nota > 10) {
        echo "Nota inválida: $nota";
        continue;
    }

    //Segundo: classifica a aprovação, conforme a condição. 
    if ($nota > 6) {
        echo "Esse Aluno(a) $nota foi APROVADO!\n";
    } else {
        echo "Esse Aluno(a) $nota foi REPROVADO!\n";
    }
}

//DESAFIO = Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações na tela.

$contaBancaria = [
    "Titular" => "Weverton",
    "Saldo" => "100000000000"
];
echo $contaBancaria["Titular"] . " Possui: " . $contaBancaria["Saldo"] . " Reais." . "\n";

$familiares = [
    "Weverton",
    "Marcilene",
    "Claudemir",
];
$familiares[] = "Gabriella";
echo "Familiares: " . implode(" - ", $familiares);

//Se desafiando fazendo pela segunda vez e aprendendo. 
$array = [1,2,2,3,4,4,5];
$arraySemDuplicatas = array_unique($array);
echo "Os números são: " . implode(", ", $arraySemDuplicatas) . "\n";

$notasAlunos = [10, 9.0, 8.7, 3.3, 5.9];

foreach ($notasAlunos as $nota) {

    if ($nota < 0 || $nota > 10) {
    echo "Número da $nota inválida!";
    continue;
    }

    if ($nota > 6) {
        echo "APROVADO!\n";
    } else {
        echo "REPROVADO!\n";
    }
}

$contaBancaria2 = [
    "titular" => "Weverton ",
    "Saldo" => "50bilhões de doláres\n", 
];
echo $contaBancaria2["titular"] . "possui em saldo: " . $contaBancaria2["Saldo"];

$nomes = ["Gabi", "Marcilene", "Claudemir"];
$nomes[] = "Weverton";
print_r($nomes);*/

//Sistema de controle de saldo bancário. 

//Vamos ultilizar o fgests, que basicamente ele pega uma string de um arquivo e no caso vamos ultilizar dentro dele uma constante STDIN que tem um valor no terminal, é a entrada padrão de um processo dentro do terminal. 

//echo "Digite um número: \n";
//$numero = (int) fgets(STDIN);
//echo "O número que você digitou é: " . $numero;

//SEM POO
/*$titularConta = "Weverton inácio";
$saldoEmConta = 1000;

echo "*******************\n";
echo "Titular: $titularConta\n";
echo "Saldo atual: R$: $saldoEmConta\n";
echo "*******************\n";

do {
    echo "\n1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";
    echo "Escolha uma opção: ";

    $opcao = (int) fgets(STDIN);

    switch ($opcao) {
        case 1:
            echo "*******************\n";
            echo "Titular: $titularConta\n";
            echo "Saldo atual: R$: $saldoEmConta\n";
            echo "*******************\n";
            break;

        case 2:
            echo "Digite o valor do saque: ";
            $valorSaque = (float) fgets(STDIN);

            if ($valorSaque > 0 && $valorSaque <= $saldoEmConta) {
                $saldoEmConta -= $valorSaque;
                echo "Saque realizado!\n";
            } else if ($valorSaque <= 0) {
                echo "Digite um valor maior que 0!\n";
            } else {
                echo "Saldo insuficiente!\n";
            }
            break;

        case 3:
            echo "Digite o valor do depósito: ";
            $valorDeposito = (float) fgets(STDIN);

            if ($valorDeposito > 0) {
                $saldoEmConta += $valorDeposito;
                echo "Depósito realizado!\n";
            } else {
                echo "Digite um valor válido maior que 0!\n";
            }
            break;

        case 4:
            echo "Você saiu, até logo.\n";
            break;

        default:
            echo "Opção inválida!\n";
            break;
    }

} while ($opcao !== 4);*/

//COM POO
/*class ContaBancaria {
    //Atributos: variável que pertece a classe e guarda o estado do objeto.
    private string $titular;
    private float $saldo;

    //Construtor: inicializa os atributos da classe, rodando automatic quando criamos um new objected. 
    public function __construct(string $titular, float $saldoInicial = 0) {
        //this: esse objeto está que está sendo criado agora. 
        //O atributo titular do objeto vai receber o valor do parâmetro titular.
        $this->titular = $titular;
        //O atributo saldo do objeto vai começar/receber o valor de saldoInicial.
        $this->saldo = $saldoInicial;
    }

    //Método que retorna o saldo atual da conta daquele titular;
    public function consultarSaldo(): float {
        //O : float significa "ele devolve/retorna um número decimal (float)";
        return $this->saldo; 
    }

    //Por ser private, não tocamos direto no atributo da classe por isso do método get do titular, isso para preservar o conceito de encapsulamento em POO.
    //Com isso puxamos ele o titular para os objetos criados futuramente, com a garantia de retorno do tipo = : string... 
    public function getTitular(): string {
        return $this->titular;
    }

    public function depositar(float $valorDoDeposito): void {
        if ($valorDoDeposito > 0) {
            $this->saldo += $valorDoDeposito;
            echo "Depósito realizado com sucesso!\n";
        } else {
            echo "Digite um valor válido para depósito\n";
        }    
    }
    public function sacar(float $valorDoSaque){
        if ($valorDoSaque > 0 && $valorDoSaque <= $this->saldo) {
            $this->saldo -= $valorDoSaque;
            echo "Saque realizado com sucesso!\n";
        } else {
            echo "\nSaldo insuficiente!\n";
        }
    }
}
$conta1224 = new ContaBancaria("Weverton inácio", 0);
//echo $conta1224->depositar(1000);
//echo $conta1224->consultarSaldo();

echo "****************\n";
echo "Titular: " . $conta1224->getTitular() . "\n";
echo "Saldo: " . $conta1224->consultarSaldo() . "\n";
echo "****************\n";

do {
    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";
    echo "Escolha uma das opções acima.\n";

    $opcao = (int) fgets(STDIN);

    switch ($opcao) {
        case "1":
            echo "****************\n";
            echo "Titular: " . $conta1224->getTitular() . "\n";
            echo "Saldo: " . $conta1224->consultarSaldo() . "\n";
            echo "****************\n";
            break;
        case "2":
            echo "Digite o valor do seu saque: \n";
            $valorSaque = (float) fgets(STDIN);
            $conta1224->sacar($valorSaque);
            break;
        case "3":
            echo "Digite o valor do seu depósito: \n";
            $valorDeposito = (float) fgets(STDIN);
            $conta1224->depositar($valorDeposito);
            break;
        case "4":
            echo "Encerrando o sistema, até logo!\n";
            break;
        default:
            echo "Digite uma opção válida!\n";
            break;
    }
} while ($opcao != 4);*/

/*//Escreva uma função em PHP que receba dois números inteiros e uma string representando a operação matemática e retorne o resultado da operação.
function exibirNumeros(int $n1, int $n2, string $operacao): float {
    return match($operacao) {
        "Soma" => $n1 + $n2,
        "Subtração" => $n1 - $n2,
        "Divisão" => $n1 / $n2,
        "Multiplicação" => $n1 * $n2,
    };
}
$calculadora = exibirNumeros(25, 25, "Soma");
echo "Valor da soma: " . $calculadora;

//Crie uma função em PHP que calcule o IMC baseado na altura e peso passados por parâmetro.
function calculaImc(float $alturaEmMetros, float $pesoEmQuilos): float {
    return $pesoEmQuilos / $alturaEmMetros ** 2; 
}
$calculoImc = calculaImc($alturaEmMetros = 1.60, $pesoEmQuilos = 56);
echo "\nSeu Imc: " . $calculoImc;

//Crie uma função em PHP que converta Fahrenheit para graus celsius.
function conversaoDeGraus(float $fahrenheit): float{
    return ($fahrenheit - 32) * 5 / 9;
}
$grausCelcius = conversaoDeGraus($fahrenheit = 98.6);
echo "\nGraus celcius: $grausCelcius";*/

//Desafio de tranformar dias em idade, exibindo ano, mês e dia!

/*class Idade {
    private int $anos;
    private int $meses;
    private int $dias;

    public function __construct(int $anos, int $meses, int $dias) {
        $this->anos = $anos;
        $this->meses = $meses;
        $this->dias = $dias;
    }
    public function anos(): int {
        return $this->anos;
    }
    public function meses(): int {
        return $this->meses;
    }
    public function dias(): int {
        return $this->dias;
    }
    public function __toString(): string {
        return "{$this->anos} ano(s)\n{$this->meses} mes(es)\n{$this->dias}\n";
    }
}

class ConversorIdade {
    public function converter(int $diasTotais): Idade {
        
    }
}*/

/*class numerosParentes {
    private int $num;

    public function __construct(int $num){
        $this->num = $num;
    }
    public function num(): int {
        return $this->num;
    }
    public function resultado(): string {
        return "{$this->num}";
    }
    function numeroPrimo(): bool {
        if ($this->num < 2){
            return false;
        } 

        $limiteCalculo = sqrt($this->num);

        for ($i = 2; $i <= $limiteCalculo; $i++){
            if ($this->num % $i === 0) return false;
        }
        return true;
    }
}

//Explicando o loop for: um número primo não pode ser menor que 1, por isso o inicializado começa em 2, um número primo pode ser apenas multiplicado por ele mesmo por isso a condição fala $i * $i <= this->num 

$numero = new numerosParentes(2);
if ($numero->numeroPrimo()){
    echo "O Número: " . $numero->resultado() . " é PRIMO!\n";
} else {
    echo "O Número: " . $numero->resultado() . " Não é PRIMO!\n";
}*/

/*function verificaoNumeroPrimo(int $numeroUsuario): bool {
    if ($numeroUsuario < 2){
        return false;
    }
    for ($i = 2; $i < $numeroUsuario; $i++) {
        if ($numeroUsuario % $i === 0)
        return false;
    }
    return true;
}

echo "Digite um número: ";
$numeroUsuario = (int) fgets(STDIN);

if (verificaoNumeroPrimo($numeroUsuario)){
    echo "\nO seu número é PRIMO!\n";
} else {
    echo "O seu número não é PRIMO!\n";
}*/

echo "Digite seu número: ";
$numeroUser = fgets(STDIN);
$contador = 0;

for ($i = $numeroUser; $i > 0; $i--) {
        echo "Valor i: $i\n";
        $resultado = $numeroUser % $i;
        echo "Resultado = $resultado\n";
    if ($resultado == 0){
        $contador = $contador + 1;
        echo "Contador: $contador\n";
    }
}
if ($contador == 2){
    echo "Esse número é PRIMO!";
} elseif ($contador > 2) {
    echo "Esse número não é PRIMO!";
}