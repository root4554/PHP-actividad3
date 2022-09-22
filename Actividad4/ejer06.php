<?php
     
    $numeros = array(1,33,3,4,12,6,7,60,9,10);
    $sum = array_reduce($numeros, fn($a, $b) => $a + $b);
    echo $sum / count($numeros);
    ?>
    
    