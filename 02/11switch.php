<?php 
    # --------------------switch----------------------

    $mes = 'Febrero';

    switch($mes){
        case 'Diciembre':
            //Instrucciones
            echo 'Feliz navidad';
        break;
        case 'Enero':
            //Instrucciones
            echo 'Feliz año nuevo';
        break;

        // default se ejecuta en caso de que no se cumpla ningun caso
        default:
            echo 'En este mes no se celebra nada';
        break;
    }
?>