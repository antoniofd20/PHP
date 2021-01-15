<?php

    # REGRESA 1 SI EL VALOR DE LA IZQUIERDA ES MAYOR QUE EL DE LA DERECHA
    # REGRESA 0 SI LOS DOS VALORES SON IDENTICOS
    # REGRESA -1 SI EL VALOR DE LA DERECHA ES MAYOR QUE EL DE LA IZQUIERDA

    # <  =  >
    # 1  0  -1
    #echo 1 <=> 1;

    $arreglo = [3,1,5,2,4];
    // sort($arreglo);
    /*
    function comparar($a, $b){
        if($a == $b){
            return 0;
        }else if ($a > $b) {
            return 1;
        }else {
            return -1;
        }
    }
    */

    function comparar($a, $b){
        return $a <=> $b;
    }

    usort($arreglo, 'comparar');

    echo implode(' - ', $arreglo);



?>