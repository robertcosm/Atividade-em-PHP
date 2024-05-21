<?php

    $n1=15;
    echo "<h1>$n1</h1>";

    if($n1 % 10 == 0){
        echo "Esse número é divisível por 10, por 5 e por 2";
    }
    elseif ($n1 % 5 == 0) {
        echo "Esse número é divisível por 5";
    }
    elseif ($n1 % 2 == 0) {
        echo "Esse número é divisível por 2";
    }
    else{
        echo "Esse número não é divisível por 10 ou 5 ou 2";
    }


?>