<?php

    # ------------------CLASES ABSTRACTAS----------------
    # NO SE PUEDE ACCEDER A UNA CLASE ABSTRACTA A MENOS QUE LA HEREDEMOS
    abstract class Persona {
        public function saludo(){
            return 'Hola';
        }
    }

    class Estudiante extends Persona {

    }

    $persona = new Estudiante;
    # YA SE PUEDE ACCEDER AL METODO DE LA CLASE ABSTACTA POR QUE HEREDAMOS A ESTUDIANTE
    echo $persona->saludo();