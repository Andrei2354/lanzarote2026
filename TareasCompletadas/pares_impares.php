<?php

$limite = 20;
$pares = 0;
$impares = 0;

for ($i=1; $i <= $limite; $i++){
    if ($i % 2 == 0){
        //echo "Número: $i es par <br>";
        $pares++;
    }
    else{
        //echo "Número: $i es impar <br>";
        $impares++;
    }
}

echo "Total de pares: $pares Total de impares: $impares";