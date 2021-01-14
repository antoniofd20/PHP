<?php
    # -----------------CLICLO FOR EACH------------------

    $meses = ['ENERO', 'FEBRERO', 'MARZO', 'ABRIL', 'MAYO', 'JUNIO', 'JULIO', 'AGOSTO', 'SEPTIEMBRE', 'OCTUBRE', 'NOVIEMBRE', 'DICIEMBRE'];

    $alejandro = ['telefono' => 5540713097, 'edad' => 21, 'pais' => 'Mexico'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForEach</title>
</head>
<body>
    <h1>MESES DEL AÑO RECORRIDOS CON FOREACH</h1>
    <ul>
        <?php 
            foreach($meses as $mes){
                echo '<li>' . $mes . '</li>';
            }
        ?>
    </ul>
    <h1>DATOS DE MI AMIGO ALEJANDRO:</h1>
    <ul>
        <?php 
            foreach($alejandro as $dato => $valor){
                echo '<li>' . $dato .': ' . $valor .'</li>';
            }
            ?>
    </ul>
</body>
</html>