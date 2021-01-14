<?php 
    # ---------------------SHORT HAND IF--------------------

    $edad = 18;
    # FORMA DE UTILIZAR UN IF EN UNA SOLA LIENA
    $edad = (isset($edad)) ? $edad : 'El usuario no establecio su edad';

    echo 'edad: ' . $edad;
?>