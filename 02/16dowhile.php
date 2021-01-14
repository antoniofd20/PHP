<?php
    # EJECUTAMOS NUESTRO CODIGO AL MENOS UNA VEZ
    # NO IMPORTA SI LA CONDICION FALLA

    $i = 1;

    do {
        // INSTRUCCIONES
        echo $i . '<br/>';

        $i++;
    // PROVOCAMOS QUE LA CONDICION FALLE PARA QUE SOLO SE EJECUTE UNA VEZ
    } while($i == 20);
?>