<?php
    
    $rands = array_map(fn($n) => rand(1, 200), range(1, 10));
    
    //imprime el array en una sola linea
    echo implode(", ", $rands);
    
    echo "<br>";
    //imprime el array
    print_r($rands);
    
    echo "<br>";
    //imprime el array al reves
    print_r(array_reverse($rands));