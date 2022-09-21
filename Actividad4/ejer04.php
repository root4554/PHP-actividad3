<?php
    $numeros=array(1,33,3,4,12,6,7,60,9,10);
    $mayor=0;
    foreach ($numeros as $clave => $valor) {
        if($valor>$mayor){
            $mayor=$valor;
        }
    }
    echo "El mayor numero es: ".$mayor;
    ?>
