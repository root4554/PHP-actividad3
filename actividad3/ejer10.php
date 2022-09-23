<?php
    $num=$_GET['num'];
        
        $cont=0;
        echo "la lista de numeros primos hasta el numero dado ".$num ." es:<br>";
    for ($j = 1; $j <= $num; $j++) {
        for ($i = 1; $i <= $j; $i++) {
            $res = $j % $i;
            if ($res == 0) {
                $cont++;
            };
        }
        if ($cont<=2) {
            echo $j.", ";
        }
        $cont=0;
        
    }
        
?> 