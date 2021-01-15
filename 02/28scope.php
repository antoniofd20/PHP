<?php 
    # HAY QUE CUIDAR QUE LAS VARIABLES QUE USEMOS DENTRO Y FUERA DE FUNCIONES ESTEN AL ALCANCE DE LAS MISMAS
    
    $numero = 7;

    function mostrarNumero($numero){
        echo $numero;
    }

    mostrarNumero($numero);
?>