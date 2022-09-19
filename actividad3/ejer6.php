<?php

for ($i = 1; $i <=  $_GET['numlineas']; $i++) {
    for($j = 1; $j <= $i; $j++) {
        echo "O";
    }
    echo "<br>";
}
?>