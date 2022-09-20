<?php
    $primerNumero = 5;
    $ultimoNumero = 10;
    $suma = 0;
    for ($i = $primerNumero; $i <= $ultimoNumero; $i++) {
        $suma += $i;
    }
    echo "La suma de los números del " .$primerNumero ." al " .$ultimoNumero. " es $suma";

?>