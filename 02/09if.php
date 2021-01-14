<?php
    # -----------------CONDICIONAL IF---------------

    /*
    OPERADORES DE COMPARACION

    == IGUALDAD
    < MENOR QUE
    > MAYOR QUE
    <= MENOR IGUAL
    >= MAYOR IGUAL
    != DIFERENTE
    ! NEGACION 
    */

    /*
    OPERADORES LOGICOS:

    && EVALUA QUE SE CUMPLAN TODAS LAS CONDICIONES
    ||, OR EVALUA QUE SE CUMPLA AL MENOS UNA DE LAS CONDICIONES
    XOR, EVALUA QUE SE CUMPLA UNA Y SOLO UNA DE LAS CONDICIONES
    */

    $edad = 18;
    $nombre = 'Raymundo';
    $edadDos = 17;

    if($edad >= 18 && $nombre == 'Ray'){
        // INSTRUCCIONES 
        echo 'Eres mayor de edad por tener ' . $edad . ' años <br />';
    }

    if($edadDos < 18 || $nombre != 'Ray'){
        echo 'Eres menor de edad por tener ' . $edadDos . ' años y no llamarte ' . $nombre . '<br />';
    }

    # -----------------------ELSE----------------------

    if($nombre == 'Ray'){
        echo 'Bienvenido ' . $nombre;
    } else {
        echo 'No eres bienvenido ' . $nombre . '<br />';
    }

    # ---------------------ELSE IF ---------------------
    $mes = 'Enero';

    if($mes == 'Diciembre'){
        echo 'Feliz navidad';
    } else if($mes == 'Enero'){
        echo 'Feliz año nuevo';
    }

?>