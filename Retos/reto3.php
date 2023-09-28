<?php

function saludar () {
    echo "Hola a todos ";
}

saludar();

echo "<br>";

function sumar ($num1, $num2) {
    $suma = $num1 + $num2;
    return $suma;
}

$num1 = 5;
$num2 = 9;
$resultado = sumar ($num1, $num2);

echo "La suma de num1 y num2 es:" . $resultado;


echo "<br>";

function obtener_edad($anio_nacimiento) {

    $anio_actual = date("Y");
    
    $edad = $anio_actual - $anio_nacimiento;
    
    return $edad;
}

$anio_nacimiento = 1976; 
$edad_actual = obtener_edad($anio_nacimiento);

echo "La edad actual es $edad_actual años";

echo "<br>";

function convertir_a_mayusculas($cadena) {

    $cadena_mayusculas = strtoupper($cadena);
    
    return $cadena_mayusculas;
}


$cadena_minuscula = "Bernardo Martinezz"; 
$cadena_en_mayusculas = convertir_a_mayusculas($cadena_minuscula);

echo "Cadena minuscula: $cadena_minuscula<br>";
echo "Cadena en mayúsculas: $cadena_en_mayusculas";
echo "<br>";


function calcular_promedio($numeros) {

    if (empty($numeros)) {
        return 0;
    }
    

    $suma = array_sum($numeros);
    
    
    $promedio = $suma / count($numeros);
    
    return $promedio;
}


$numeros = [5, 10, 15, 20, 25]; 
$promedio = calcular_promedio($numeros);

echo "El promedio de los números es: $promedio";
echo "<br>";


function calcular_area_circulo($radio) {
    
    $area = M_PI * pow($radio, 2);
    
    return $area;
}


$radio = 35; 
$area_circulo = calcular_area_circulo($radio);

echo "El área del círculo con radio $radio es: $area_circulo";