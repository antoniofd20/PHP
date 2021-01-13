<?php
    # ------------------ARREGLOS BASICOS----------------

    # VERSION MAS ANTIGUA DE CREAR UN ARREGLO
    $semana = array('LUNES', 'MARTES', 'MIERCOLES', 'JUEVES', 'VIERNES', 'SABADO', 'DOMINGO');

    # VERSION MAS NUEVA DE LA CREACION DE ARREGLOS
    $arreglo = ['LUNES', 'MARTES', 'MIERCOLES', 'JUEVES', 'VIERNES', 'SABADO', 'DOMINGO'];

    # CAMBIAR EL VALOR DE UN ELEMENTO EN EL ARREGLO
    $semana[1] = 'Raymundo';

    echo $semana[0] . '<br />';
    echo $semana[1] . '<br />';
    echo $semana[2] . '<br />';
    echo $semana[3] . '<br />';
    echo $semana[4] . '<br />';
    echo $semana[5] . '<br />';
    echo $semana[6];
?>