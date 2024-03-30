<?php

abstract class PersonaAb
{
    public function saludo()
    {
        return 'Hola!!!!!';
    }
}

class EstudianteAb extends PersonaAb{

}

$sebastian = new EstudianteAb;
echo $sebastian->saludo();
