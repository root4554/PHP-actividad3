<?php
    $num=$_GET['num'];
        $j=0;
    
    for ($i = 1; $i <= $num; $i++) {
        $res = $num % $i;
        if ($res == 0) {
            $j++;
        };
    }    
   if ($j<=2) {
    echo "el numero ".$num." es primo";
   }
   else{
       echo "el numero ".$num." no es primo";
   }
?> 