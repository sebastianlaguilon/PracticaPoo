<?php
class Persona{
    public $nombre;
    public $edad;
    public $pais;

    public function mostrarInformacion(){
        echo 'Hola Mundo';
    }
}

//$sebastian = new Persona;
$sebastian->nombre = 'Sebastian Laguilon';
$sebastian->edad = '47';
$sebastian->pais = 'Argentina';

//$sebastian->mostrarInformacion();

echo $sebastian->nombre . 'Tiene ' . $sebastian->edad . ' años de edad ';

//$alejandro = new Persona;
$alejandro->nombre = 'Alejandro';
$alejandro->edad = 30;
$alejandro->pais = 'España';
