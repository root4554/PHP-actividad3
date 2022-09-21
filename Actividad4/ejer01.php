<?php
    $usuario1 = array("nombre" => "Juan ", "apellido" => "Perez ", "DNI" => "12345678");
    $usuario2 = array("nombre" => "Maria ", "apellido" => "Gomez ", "DNI" => "87654321");

    for($i = 0; $i < 3; $i++) {
        echo $usuario1[$i];
    }
    echo "<br>";
    foreach ($usuario2 as $clave => $valor) {
        echo "$clave: $valor";
    }
?>