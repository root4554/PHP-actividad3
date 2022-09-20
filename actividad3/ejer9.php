<?php
    $num=$_GET['num'];
    
    $i=0;
    $j=0;
    
    for ($i = 1; $i < $num; $i++) {
        $i++;
        $res = $num % $i;
        if ($res == 0) {
            $j++;
        };
    }
    
    echo $j;
    
   if (j<2) {
    echo "el numero es primo";
   }
   else{
       echo "el numero no es primo";
   }
?> 