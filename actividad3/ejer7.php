<?php
$primerNumero = $_GET['num1'];
$ultimoNumero = $_GET['num2'];
$suma = 0;
for ($i = $primerNumero; $i <= $ultimoNumero; $i++) {
    $suma += $i;
}
echo "La suma de los números del " .$primerNumero ." al " .$ultimoNumero. " es $suma";

?>