<?php

$edad = 18;     
$altura = 1.50; 


$es_mayor_edad = $edad >= 18;
$es_alto = $altura >= 1.70;


$negacion_mayor_edad = !$es_mayor_edad;


$conjuncion = $es_mayor_edad && $es_alto;


$disyuncion = $es_mayor_edad || $es_alto;


echo "Es mayor de edad: " . ($es_mayor_edad ? "true" : "false") . "<br>";
echo "Es alto: " . ($es_alto ? "true" : "false") . "<br>";
echo "Negación de: es_mayor_edad: " . ($negacion_mayor_edad ? "true" : "false") . "<br>";
echo "Conjunción de: es_mayor_edad y es_alto: " . ($conjuncion ? "true" : "false") . "<br>";
echo "Disyunción de: es_mayor_edad y es_alto: " . ($disyuncion ? "true" : "false") . "<br>";
?>