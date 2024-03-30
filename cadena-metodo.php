<?php
//ver
class UsuarioCdn{
    public $nombre;
    public $correo;

    function __construct($nombre, $correo)
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function mostrarNombre(){
        echo 'Su nombre es: '. $this->nombre . '<br/>';
        return $this;
    }

    public function mostrarCorreo(){
        echo 'Su correo es: '. $this->correo . '<br/>';
        return $this;
    }
}

$sebastian = new UsuarioCdn('Sebastian', 'sebas@gmail.com');
$sebastian->mostrarNombre()->mostrarCorreo();