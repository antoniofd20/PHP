<?php

    function cuadrado(int $numero){
        return $numero * $numero;
    }

    # SI SE INGRESA UN VALOR QUE NO SEA UN NUMERO ENTERO MARACARA UN ERROR
    $numero = 12;
    echo 'El cuadrado de ' . $numero . ' es ' . cuadrado($numero);

?>