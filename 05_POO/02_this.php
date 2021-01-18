<?php

    # -------------------PALABRA THIS -----------------
    # UNA CLASE ES UNA PLANTILLA EN LA CUAL PODEMOS INCLUIR PROPIEDADES (VARIABLES) Y FUNCIONES
    class Persona {
        # EN POO LAS VARIABLES PASAN A SER PROPIEDADES
        public $nombre;
        public $edad;
        public $pais;

        # LAS FUNCIONES EN UNA CLASE SE LLAMAN METODOS
        public function mostrarInformacion(){
            # $this->variable ES LA FORMA DE ACCEDER A UNA VARIABLE DENTRO DE UNA CLASE
            echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y vive en ' . $this->pais . ' <br/>';
        }
    }

    # ESTA ES LA FORMA EN LA QUE SE CREA UN OBJETO EN BASE A UNA CLASE
    $carlos = new Persona;
    # SINTAXIS PARA ACCEDER A CADA PROPIEDAD DEL OBJETO Y ASIGNARLE UN VALOR
    $carlos->nombre = 'Carlos Arturo';
    $carlos->edad = 21;
    $carlos->pais = 'México';

    # ACCEDEMOS AL METODO QUE ESTA DENTRO DE LA CLASE
    $carlos->mostrarInformacion();
    # MOSTRAR INFORMACION EN PANTALLA (FORMA NO RECOMENDADA)
    # echo $carlos->nombre . ' tiene ' . $carlos->edad . ' años de edad <br/>';

    $raymundo = new Persona;
    $raymundo->nombre = 'Raymundo Flores';
    $raymundo->edad = 21;
    $raymundo->pais = 'EEUU';
    $raymundo->mostrarInformacion();
?>