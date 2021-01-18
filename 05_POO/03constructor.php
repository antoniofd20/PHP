<?php

    # -------------------CONSTRUCTOR -----------------
    # UNA CLASE ES UNA PLANTILLA EN LA CUAL PODEMOS INCLUIR PROPIEDADES (VARIABLES) Y FUNCIONES
    class Persona {
        # EN POO LAS VARIABLES PASAN A SER PROPIEDADES
        public $nombre;
        public $edad;
        public $pais;

        # CONSTRUCTOR (DOBLE GUION BAJO)
        function __construct($nombre, $edad, $pais){
            # A LAS VARIABLES DE ESTA CLASE SE LE ASIGNAN LAS DEL CONSTRUCTOR
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->pais = $pais;
        }

        # LAS FUNCIONES EN UNA CLASE SE LLAMAN METODOS
        public function mostrarInformacion(){
            # $this->variable ES LA FORMA DE ACCEDER A UNA VARIABLE DENTRO DE UNA CLASE
            echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y vive en ' . $this->pais . ' <br/>';
        }
    }

    # CREAMOS UN OBJETO DE UNA MANERA MAS EFICIENTE
    $ray = new Persona('Raymundo Antonio', 21, 'México');
    $tony = new Persona('Antonio Flores', 22, 'EEUU');

    $ray->mostrarInformacion();
    $tony->mostrarInformacion();

?>