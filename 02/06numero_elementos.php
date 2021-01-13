<?php
    # ------CONOCIENDO EL NUMERO DE ELEMENTOS DE UN ARREGLO--------

    $meses = ['ENERO', 'FEBRERO', 'MARZO', 'ABRIL', 'MAYO', 'JUNIO', 'JULIO', 'AGOSTO', 'SEPTIEMBRE', 'OCTUBRE', 'NOVIEMBRE', 'DICIEMBRE'];

    # SE UTILIZA count PARA SABER CUANTOS ELEMENTOS TIENE UN ARREGLO
    //echo count($meses);

    $ultimo_mes = count($meses) - 1;
    echo $meses[$ultimo_mes];

?>