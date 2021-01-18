<?php

    # -------------------HERENCIA -----------------
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
            return $this->nombre . ' tiene ' . $this->edad . ' años de edad y vive en ' . $this->pais;
        }
    }

    # extends NOS AYUDA A INDICAR QUE ESTAMOS EREDANDO PROPIEDADES Y METODOS DE OTRA CLASE
    class Estudiante extends Persona {
        function __construct($nombre, $edad, $pais, $carrera){
            # TRAEMOS EL METODO CONSTRUCTOR PADRE Y QUE QUEREMOS
            parent::__construct($nombre, $edad, $pais);
            # ADEMAS LE AÑADO LA CARRERA
            $this->carrera = $carrera;
        }

        public function carrera() {
            return 'Estudió para: ' . $this->carrera;
        }
    }

    class Trabajador extends Persona {
        function __construct($nombre, $edad, $pais, $trabajo){
            parent::__construct($nombre, $edad, $pais);
            $this->trabajo = $trabajo;
        }

        public function trabajo(){
            return 'Trabaja como: ' . $this->trabajo;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HERENCIA</title>
</head>
<body>
    <h1>Objeto persona</h1>
    <?php
        $persona = new Persona('Beatriz', 56, 'México');
    ?>
    <p><?php echo $persona->mostrarInformacion(); ?></p>

    <h1>Objeto estudiante</h1>
    <?php
        $ray = new Estudiante('Raymundo', 21, 'México', 'Desarrollador');
    ?>
    <p><?php echo $ray->mostrarInformacion(); ?></p>
    <p><?php echo $ray->carrera(); ?></p>

    <h1>Objeto trabajador</h1>
    <?php
        $trabajador = new Trabajador('Antonio', 21, 'México', 'Developer php');
    ?>
    <p><?php echo $trabajador->mostrarInformacion(); ?></p>
    <p><?php echo $trabajador->trabajo(); ?></p>
    </body>
</html>