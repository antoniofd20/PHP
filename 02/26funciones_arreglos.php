<?php
    # -----------FUNCIONES UTILES CON ARREGLOS----------

    $amigo = ['Telefono' => '5540713097', 'Edad' => 21, 'Pais' => 'Mexico'];

    # PERMITE EXTRAER LOS VALORES DE UN ARREGLO ASOCIATIVO PARA USALOS COMO VARIABLES
    extract($amigo);
    echo $Telefono . '<br/>';

    $semana = ['LUNES', 'MARTES', 'MIERCOLES', 'JUEVES', 'VIERNES', 'SABADO', 'DOMINGO'];

    # PERMITE TRAER EL ULTIMO VALOR DEL ARREGLO PERO LO BORRA
    echo array_pop($semana) . '<br/>';

    # NOS MUESTRA NUESTRO ARREGLO SEPARADO POR EL PRIMER ARGUMENTO QUE ESPECIFIQUEMOS EN LA FUNCION
    echo join(', ', $semana) . '<br/>';

    # CUENTA EL NUMERO DE ELEMENTOS DE UN ARREGLO
    echo count($semana);

    # ORDENAR DE FORMA ASCENDENTE
    sort($semana); # O rsort
    echo join('<br/>', $semana);

    $semana_reverse = array_reverse($semana);
    echo join('<br/>', $semana_reverse);
?>