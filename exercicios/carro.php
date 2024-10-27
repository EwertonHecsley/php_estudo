<?php


interface instrucoesCarro
{
    public function getVelocidade();
    public function acelerar();
    public function freiar();
    public function ligar();
    public function desligar();
}

class Carro implements instrucoesCarro
{
    private int $velocidade;
    private string $modelo;
    private int $ano;
    private bool $ligado;

    function __construct(string $modelo, int $ano)
    {
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->velocidade = 0;
        $this->ligado = false;
    }

    public function ligar()
    {
        if ($this->ligado) {
            echo "Carro já está ligado.\n";
            return;
        }

        $this->ligado = true;

        echo "Carro ligado.\n";
    }

    public function desligar()
    {
        if (!$this->ligado) {
            echo "Carro já está desligado.\n";
            return;
        }

        if ($this->velocidade > 0) {
            echo "Não é possível desligar o carro enquanto estiver em movimento.\n";
            return;
        }

        $this->ligado = false;

        echo "Carro desligado.\n";
    }


    public function acelerar()
    {
        if (!$this->ligado) {
            echo "Carro desligado. Não é possível acelerar.\n";
            return;
        }

        $this->velocidade += 10;

        echo "Acelerando o carro. \n";
    }

    public function freiar()
    {
        if (!$this->ligado) {
            echo "Carro desligado. Não é possível freiar.\n";
            return;
        }

        $this->velocidade -= 10;

        echo "Freando o carro. \n";
    }

    public function getVelocidade()
    {
        return $this->velocidade;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function getAno(): int
    {
        return $this->ano;
    }
}


$carro = new Carro("Fiat", 2021);

$carro->ligar();
$carro->ligar();

echo "Modelo: " . $carro->getModelo() . "\n";
echo "Ano: " . $carro->getAno() . "\n";


$carro->acelerar();
echo "Velocidade: " . $carro->getVelocidade() . " km/h\n";
$carro->acelerar();
echo "Velocidade: " . $carro->getVelocidade() . " km/h\n";

$carro->desligar();


$carro->freiar();
echo "Velocidade: " . $carro->getVelocidade() . " km/h\n";
$carro->freiar();

$carro->desligar();
