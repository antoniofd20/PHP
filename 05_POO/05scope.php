<?php

    class usuario {
        # LAS PROPIEDADES DE UNA CLASE SE PUEDEN DECLARAR COMO public, protected o private

        # CON PRIVATE SOLO SE PUEDE ACCEDER DESDE DENTRO DE LA CLASE
        # PROTECTED PARA EXTENDER A OTRAS CLASES
        private $nombre;
        protected $correo;

        function __construct($nombre, $correo){
            $this->nombre = $nombre;
            $this->correo = $correo;
        }

        public function mostrarInfo(){
            return $this->correo;
        }
    }

    class Miembro extends Usuario {
        public function mostrarCorreo(){
            return $this->correo . ' ' . $this->nombre;
        }
    }

    $usuario = new Miembro('Raymundo', 'antonioflodiaz@gmail.com');

    # NO SE MUESTRA EL NOMBRE YA QUE ES PRIVADO
    echo $usuario->mostrarCorreo();

?>