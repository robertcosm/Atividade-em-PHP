<?php
    echo "<h1>Aqui estão os números em ordem decrescente</h1>";
    $numeros = array(1,3,5);

    rsort($numeros);

    foreach($numeros as $numero){
        echo  "<h1>$numero </h1>";
    }
    
?>