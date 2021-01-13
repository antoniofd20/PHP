<?php
    # ---------------ARREGLO ASOCIATIVO-------------

    $ray = array('telefono' => '5540713097', 'edad' => 21, 'apellido' => 'Flores', 'pais' => 'Mexico');
    
    # SE PUEDE LLAMAR A LOS VALORES DEL ARREGLO CON EL NOMBRE QUE SE LE HA DADO
    echo $ray['telefono'] . '<br />';
    echo $ray['edad'] . '<br />';
    echo $ray['apellido'] . '<br />';
    echo $ray['pais'] . '<br />';

    # SE PUEDEN CAMBIAR LOS VALORES DE CUALQUIER ELEMENTO DEL ARREGLO
    $ray['telefono'] = 111111;
    echo $ray['telefono'];
?>