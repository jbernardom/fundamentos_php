<?php

class Persona {
    
    private $nombre;
    private $edad;
    private $altura;

    
    public function __construct($nombre, $edad, $altura) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->altura = $altura;
    }

    
    public function saludar() {
        echo "Hola, soy {$this->nombre}";
        echo "<br>";
    }

    
    public function obtener_edad() {
        return $this->edad;
    }

    
    public function obtener_altura() {
        return $this->altura;
    }
}


$persona = new Persona("Bernardo", 38, 1.67);


$persona->saludar();
echo "Edad: " . $persona->obtener_edad() . " años";
echo "<br>";
echo "Altura: " . $persona->obtener_altura() . " metros\n";