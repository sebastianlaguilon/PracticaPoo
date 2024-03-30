<?php

class PersonaSt{
    public static $dia = '7 de Septiembre';

    public static function saludo($nombre = null){
        if($nombre){
            return 'Hola, buen dia '. $nombre;
        }else{
            return 'Hola, buen dia ';
        }
    }
}

//$sebastian= new PersonaSt;
echo PersonaSt::$dia;

$sebastian = new PersonaSt;
echo $sebastian->saludo('Sebastian');
echo '<br/>';
echo $sebastian->saludo();