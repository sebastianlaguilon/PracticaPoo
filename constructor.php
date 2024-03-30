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
        echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais. '<br/>';
    }
}

$carlos = new Persona('Sebastian', 47, 'Argentina');
//$carlos->nombre = 'Sebastian';
//$carlos->edad = 47;
//$carlos->pais = 'Argentina';
$carlos->mostrarInformacion();

$benja = new Persona('Benja',14, 'Argentina');
//$benja->nombre = 'Benja';
//$benja->edad = 14;
//$benja->pais = 'Argentina';
$benja->mostrarInformacion();