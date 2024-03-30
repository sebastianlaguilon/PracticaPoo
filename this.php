<?php

class Persona {
    public $nombre;
    public $edad;
    public $pais;

    public function mostrarInformacion(){
        echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais. '<br/>';
    }
}

//$carlos = new Persona;
$carlos->nombre = 'Sebastian';
$carlos->edad = 47;
$carlos->pais = 'Argentina';
$carlos->mostrarInformacion();

//$benja = new Persona;
$benja->nombre = 'Benja';
$benja->edad = 14;
$benja->pais = 'Argentina';
$benja->mostrarInformacion();