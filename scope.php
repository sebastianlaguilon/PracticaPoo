<?php

class Usuario{
    public $nombre;
    protected $correo;


    function __construct($nombre, $correo)
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function mostrarInfo(){
        return $this->correo;

    }
}

class Mienbro extends Usuario{
  public function mostrarCorreo(){
    return "Este es el correo" . $this->correo;
  }
}

$sebastian = new Mienbro('Sebastian','sebas@sebas');
echo $sebastian->nombre;
echo $sebastian->mostrarInfo();
