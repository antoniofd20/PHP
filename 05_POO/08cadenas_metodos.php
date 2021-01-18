<?php

    class Usuario {
        public $nombre;
        public $correo;

        function __construct($nombre, $correo) {
            $this->nombre = $nombre;
            $this->correo = $correo;
        }

        public function mostrarNombre(){
            # OBLIGATORIO QUE CUANDO VAYAMOS A ENCADENAR METODOS RETRNEMOS $THIS
            echo 'Su nombre es: ' . $this->nombre . '<br/>';
            return $this;
        }

        public function mostrarCorreo(){
            echo 'Su correo es: ' . $this->correo . '<br/>';
            return $this;
        }
    }

    $usuario = new Usuario('Raymundo', 'raymundo@gmail.com');

    # SI QUEREMOS REALIZAR VARIOS METODOS A LA VEZ PODEMOS CONCATENARLOS DE LA SIGUIENTE MANERA: 
    echo $usuario->mostrarNombre()->mostrarCorreo();