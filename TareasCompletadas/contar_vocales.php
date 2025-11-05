<?php

$cadena = "Programar en PHP es divertido";
$cadena = strtolower($cadena);
$vocales = ["a", "e", "i", "o", "u"];
$contador = 0;

// Recorremos la cadena
for ($i = 0; $i < strlen($cadena); $i++) {
    // Recorremos las vocales
    foreach ($vocales as $vocal) {
        if ($cadena[$i] === $vocal) {
            $contador++;
        }
    }
}

echo "Número total de vocales encontradas: $contador";