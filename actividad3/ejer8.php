<?php
$pares = $_GET['pares'];

if($pares == "true"){
    for ($i = 1; $i <= 99; $i++) {
        echo "<br>".$i++ ;
    }
}
else{
    for ($i = 0; $i < 100; $i++) {
        echo "<br>".$i++ ;
    }
}
?>
