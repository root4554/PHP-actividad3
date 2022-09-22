<?php
    $names = array ("Anass" => "kbir", "Jordi" => "Rubio", "Juan" => "Perez", "Maria" => "Gomez");

    //Mostar el nombre y apellido de cada persona
    echo "Mostrar el array<br>";
    foreach ($names as $item => $value) {
        echo $item . ": " . $value . "<br>";
    }
    //Ordenar el array por apellido
    echo "<br>Ordenar el array por Nombre<br>";
    ksort($names);
    foreach ($names as $item => $value) {
        echo $item . ": " . $value . "<br>";
    }
    //Ordenar el array por apellido
    echo "<br>Ordenar el array por Apellido<br>";
    asort($names);
    foreach ($names as $item => $value) {
        echo $item . ": " . $value . "<br>";
    }
  
    
