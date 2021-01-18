<?php

    # LA PALABRA RESERVADA STATIC SIRVE PARA PORDER ACCEDER AL VALOR DE UNA VARIABLE SIN TENER QUE CREAR UNA INSTANCIA DE LA CLASE
    class Persona {
        public static $dia = '20 de septiembre <br/>';

        public static function saludo($nombre = null){
            if($nombre){
                return 'Hola, buen dia ' . $nombre . '<br/>';
            } else {
                return 'Hola, buen dia usuario <br/>';
            }
        }
    }

    //$persona = new Persona;

    # PODEMOS ACCEDER AL VALOR DE LA PROPIEDAD DIA POR QUE ES STATIC
    echo Persona::$dia;
    echo Persona::saludo('Raymundo');
    echo Persona::saludo();