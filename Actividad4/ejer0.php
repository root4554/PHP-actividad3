<?php 

    $random = array_map(fn($n) => rand(1,20), range(0, 49));

    //Count repeated numbers
    $repeated = array_count_values($random);
    echo "Repeated numbers: ";
    foreach ($repeated as $key => $value) {
        echo "El numero ".$key . " ha salido " . $value . "veces <br>";
    }
    ?>

    