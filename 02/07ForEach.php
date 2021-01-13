<?php
    # ------RECORRER ARRELOS MEDIANTE FOREACH--------

    $meses = ['ENERO', 'FEBRERO', 'MARZO', 'ABRIL', 'MAYO', 'JUNIO', 'JULIO', 'AGOSTO', 'SEPTIEMBRE', 'OCTUBRE', 'NOVIEMBRE', 'DICIEMBRE'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del Año</title>
</head>
<body>
    <h1>Meses del Año</h1>
    <ul>
        <?php 
            
            # POR CADA $mes DE $meses
            foreach($meses as $mes){
                
                # QUIERO QUE EJECUTES ESTO:
                echo '<li>' . $mes . '</li>';
            }
        ?>
    </ul>
</body>
</html>