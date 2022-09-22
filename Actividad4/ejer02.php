<?php
    $productos = array("Playera", "Chancletas", "Zapatos","Bota","Zapatillas");
    $precios = array(20, 25, 30, 35, 40);

    foreach ($productos as $clave => $valor) {
        echo "$valor: $precios[$clave]";
        echo "<br>";
    }
    ?>
    