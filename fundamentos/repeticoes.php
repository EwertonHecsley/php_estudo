<?php

$nomes = ["Ewerton", "Pedro", "Maria", "Jose"];

for ($i = 0; $i < count($nomes); $i++) {
    echo $nomes[$i];
}


foreach ($nomes as $nome) {
    echo "Seja bem vindo {$nome}! \n";
}


$numeros = [2, 3, 4, 6];

$total = 0;

foreach ($numeros as $numero) {
    $total += $numero;
}

echo "Soma dos numeros: {$total}";
