<?php
    $days = array ("Monday" => "1", "Thusday" => "2", "Wednesday" => "3", "Thursday" => "4", "Friday" => "5", "Saturday" => "6", "Sunday" => "7");

    $sum = array_reduce($days, fn($a, $b) => $a + $b);
    $avg = $sum / count($days);
    echo "suma de los dias: " . $sum . "<br>";
    echo "promedio de los dias: " . $avg . "<br>";
?>