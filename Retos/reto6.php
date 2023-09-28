<?php

class Persona {
    private $nombre;
    private $edad;
    private $correo;
    private $telefono;

    public function __construct($nombre, $edad, $correo, $telefono) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->correo = $correo;
        $this->telefono = $telefono;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function presentarse() {
        echo "Hola, soy {$this->nombre}, tengo {$this->edad} años.";
        echo "<br>";
        echo "Correo: {$this->correo}";
        echo "<br>";
        echo "Teléfono: {$this->telefono}";
        echo "<br>";
    }
}

class Estudiante extends Persona {
    private $matricula;

    public function __construct($nombre, $edad, $correo, $telefono, $matricula) {
        parent::__construct($nombre, $edad, $correo, $telefono);
        $this->matricula = $matricula;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function presentarse() {
        parent::presentarse();
        echo "Matrícula: {$this->matricula}";
        echo "<br>";
    }
}

$estudiante = new Estudiante("Jose", 20, "jose.nuevo@correo.com", "123456789", "2023001");

echo "Datos iniciales:";
$estudiante->presentarse();

$estudiante->setCorreo("jose.nuevo@correo.com");
$estudiante->setTelefono("987654321");
$estudiante->setMatricula("2023002");

echo "\nDatos actualizados:";
$estudiante->presentarse();