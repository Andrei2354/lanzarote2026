<?php
$fecha = "11/12/2024 ";
$patron = "/^([0-3][0-31])\/([0-3][0-31])\/(/d{4})$/";
if(preg_match($patron, $fecha)){
    echo "valido ";
    $salida2 = preg_split("/\//", $fecha);
    echo "dia = $salida2[0] mes = $salida2[1] año = $salida2[2]";
}

?>