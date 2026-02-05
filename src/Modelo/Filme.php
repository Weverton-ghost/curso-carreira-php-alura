<?php

class Filme {
    private string $nome;
    private int $anoLancamento;
    private string $genero;
    private array $notas;

    public function __construct(
        string $nome, 
        int $anoLancamento, 
        string $genero
    ) {
        $this->nome = $nome;
        $this->anoLancamento = $anoLancamento;
        $this->genero = $genero;
        $this->notas = [];
    }

    public function avalia(float $nota): void 
    {
        $this->notas[] = $nota;
    }

    public function media(): float 
    {
        $somaNotas = array_sum($this->notas);
        $quantidadeDeNotas = count($this->notas);
        return $somaNotas / $quantidadeDeNotas;
    }

    public function getAnoLancamento(): int 
    {
        return $this->anoLancamento;
    }

    public function getNome(): string 
    {
        return $this->nome; 
    }

    public function getGenero(): string 
    {
        return $this->genero;
    }
}    