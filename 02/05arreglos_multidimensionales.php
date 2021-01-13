<?php
    # ---------------ARREGLOS MULTIDIMENSIONALES------------

    $amigos = array(
        array('Alejandro', 21),
        array('Toño', 20),
        array('Ray', 19)
    );

    # OBTENGO LOS DATOS CON LA PRIMERA Y SEGUNDA POSICION
    echo 'Mi amigo  ' . $amigos[0][0] . ' tiene ' . $amigos[0][1] . 'años <br />';

    echo 'Mi amigo  ' . $amigos[1][0] . ' tiene ' . $amigos[1][1] . 'años <br />';

    echo 'Mi amigo  ' . $amigos[2][0] . ' tiene ' . $amigos[2][1] . 'años <br />';

?>