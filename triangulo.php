<?php 
    $l1 = 5;
    $l2 = 5;
    $l3 = 5;

    if ($l1 == $l2 && $l2 == $l3) {
        echo "É um triângulo equilátero";
    }

    elseif ($l1 == $l2 || $l1 == $l3 || $l2 == $l3) {
        echo "É um triângulo isósceles";
    }
    else {
        echo "É um triângulo escaleno";
    }
?>