<?php

class Pessoa
{
    private $nome;
    private $idade;
    private $cidade;

    protected function __construct($nome, $idade, $cidade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cidade = $cidade;
    }

    static function create($nome, $idade, $cidade)
    {
        return new Pessoa($nome, $idade, $cidade);
    }

    public function saldacao()

    {
        return "Olá, meu nome é {$this->nome}, tenho {$this->idade}, moro em {$this->cidade}";
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setName($nome)
    {
        $this->nome = $nome;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public function __toString()
    {
        return "Nome: {$this->nome}, Idade: {$this->idade}, Cidade: {$this->cidade}";
    }
}

$pessoa1 = Pessoa::create("Ewerton", 34, "Patos");

echo $pessoa1;

echo $pessoa1->getNome();

echo $pessoa1->saldacao();
