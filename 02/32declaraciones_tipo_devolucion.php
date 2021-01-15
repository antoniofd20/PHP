<?php

    # SI QUEREMOS SER ESTRICTOS CON LAS REGLAS QUE PONEMOS HACER LO SIGUIENTE 
    declare(strict_types=1);

    # SE ESPECIFICA EL VALOR QUE QUIERO QUE RETORNE MI FUNCION OBLIGATORIAMENTE
    function obtenerEdad() : int{
        # DE ESTA MANERA MARCARA UN ERROR POR NO SER UN ENTERO
        $edad = 'YO TENGO 23 AÑOS';
        return $edad;
    }

    echo obtenerEdad();

?>