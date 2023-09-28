<?php



class Persona {
    
    protected $nombre;
    protected $edad;
    
    
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    
    
    public function presentarse() {
        echo "Hola, soy {$this->nombre} y tengo {$this->edad} años.";
    }
}


class Estudiante extends Persona {
    
    private $carrera;
    
    
    public function __construct($nombre, $edad, $carrera) {
        parent::__construct($nombre, $edad);
        $this->carrera = $carrera;
    }
    

    public function estudiar() {
        echo "Soy {$this->nombre} y estoy estudiando.";
    }
    
    
    public function presentarse() {
        echo "Hola, soy {$this->nombre}, tengo {$this->edad} años y estudio {$this->carrera}.";
    }
}


$estudiante = new Estudiante("Bernardo", 38, "Php");


$estudiante->presentarse();
echo "<br>";
$estudiante->estudiar();