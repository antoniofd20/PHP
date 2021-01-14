<?php
    # ------COMO RECORRER ARREGLOS MEDIANTE FOR Y WHILE--------

    $meses = ['ENERO', 'FEBRERO', 'MARZO', 'ABRIL', 'MAYO', 'JUNIO', 'JULIO', 'AGOSTO', 'SEPTIEMBRE', 'OCTUBRE', 'NOVIEMBRE', 'DICIEMBRE'];

    /*
    for($i = 0; $i < count($meses); $i++){
        echo 'El mes numero ' . ($i + 1) . ' del año es ' . $meses[$i] . '<br/>';
    }
    */

    $contador = 0;
    /*
    while($contador < count($meses)){
        echo 'El mes numero ' . ($contador + 1) . ' del año es ' . $meses[$contador] . '<br/>';

        $contador++;
    }
    */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recorrer Arreglos</title>
</head>
<body>
    <!-- UTILIZANDO EL CICLO FOR PARA RECORRER EL ARREGLO -->
    <h1>UTILIZANDO FOR PARA RECORRER EL ARREGLO:</h1>
    <?php
        for($i = 0; $i < count($meses); $i++){
    ?>
    <h3><?php echo 'El mes numero ' . ($i + 1) . ' del año es ' . $meses[$i]; ?></h3>
    <?php
        }
    ?>

    <!-- UTILIZANDO EL CICLO WHILE PARA RECORRER EL ARREGLO -->
    <h1>UTILIZANDO WHILE PARA RECORRER EL ARREGLO:</h1>
    <?php
        while($contador < count($meses)){
    ?>
    <h3><?php echo 'El mes numero ' . ($contador + 1) . ' del año es ' . $meses[$contador]; ?></h3>
    <?php
        $contador++;
        }
    ?>
    
</body>
</html>