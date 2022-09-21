<?php
 $productos = array("Playera", "Chancletas", "Zapatos","Bota","Zapatillas");
 $precios = array(20, 25, 30, 35, 40);
 $descuento=30;

    for($i = 0; $i < 5; $i++) {
        echo $productos[$i]." ";
        echo " ".$precios[$i]-($precios[$i]*($descuento/100));
        echo "<br>";
    }
?>

