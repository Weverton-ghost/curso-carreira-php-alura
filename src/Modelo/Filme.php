<?php

class Filme {
    private array $notas;

    public function __construct(
        private string $nome, 
        private int $anoLancamento, 
        private string $genero
    ) {
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