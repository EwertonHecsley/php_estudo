<?php

interface OperacoesBancarias
{
    function depositar($valor);
    function sacar($valor);
}

class ContaBancaria implements OperacoesBancarias
{
    private $titular;
    private $saldo;

    protected function __construct($titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
    }

    public static function create($titular)
    {
        return new ContaBancaria($titular);
    }

    public function sacar($valor)
    {
        if ($valor > $this->saldo) {
            echo "Saldo insuficiente!\n";
            return;
        }

        $this->saldo -= $valor;
        echo "Saque de {$valor} realizado com sucesso.\n";
    }

    public function depositar($valor)
    {
        if ($valor <= 0) {
            echo "Valor inválido!\n";
            return;
        }

        $this->saldo += $valor;
        echo "Depósito de {$valor} realizado com sucesso.\n";
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
}

$conta1 = ContaBancaria::create("Ewerton");

echo "Saldo inicial: " . $conta1->getSaldo() . "\n";

$conta1->depositar(100);

echo "Saldo após depósito: " . $conta1->getSaldo() . "\n";

$conta1->sacar(200);

$conta1->sacar(50);

echo "Saldo após saque: " . $conta1->getSaldo() . "\n";
