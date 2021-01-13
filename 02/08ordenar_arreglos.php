<?php
    # ------RECORRER ARRELOS MEDIANTE FOREACH--------

    $meses = ['ENERO', 'FEBRERO', 'MARZO', 'ABRIL', 'MAYO', 'JUNIO', 'JULIO', 'AGOSTO', 'SEPTIEMBRE', 'OCTUBRE', 'NOVIEMBRE', 'DICIEMBRE'];

    # SIRVE PARA ORDENAR UN ARREGLO A -> Z O DE 0 -> N 
    // sort($meses);

    # SIRVE PARA ORDENAR DE Z -> A O DE N -> 0 
    rsort($meses);

    $numeros = [ 4, 3, 54, 12, 99, 23];
    sort($numeros);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenar Arreglos</title>
</head>
<body>
    <h1>Meses del Año</h1>

    <p>Ordenando Arreglo de Meses</p>
    <ul>
        <?php 
            
            # POR CADA $mes DE $meses
            foreach($meses as $mes){
                
                # QUIERO QUE EJECUTES ESTO:
                echo '<li>' . $mes . '</li>';
            }
        ?>
    </ul>

    <p>Ordenando Arreglo de Numeros</p>
    <ul>
        <?php 
            
            # POR CADA $mes DE $meses
            foreach($numeros as $numero){
                
                # QUIERO QUE EJECUTES ESTO:
                echo '<li>' . $numero . '</li>';
            }
        ?>
    </ul>
</body>
</html>