<?php

class Persona {
    public $nombre;
    public $edad;
    public $pais;

    function __construct($nombre,$edad,$pais)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function mostrarInformacion(){
        return $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais. '<br/>';
    }
}

class Estudiante extends Persona{
    public $carrera;
    
    function __construct($nombre, $edad, $pais,$carrera)
    {
        parent::__construct($nombre,$edad,$pais);
        $this->carrera = $carrera;
    }
}

$sebastian = new Estudiante('Sebastian', 47, 'Argentina','Desarrolador');
echo $sebastian->carrera;
//echo $sebastian->mostrarInformacion();