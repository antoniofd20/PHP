<?php
    # var_dump

    $texto = 'Raymundo';
    $numero = 10;
    $numeroDos = '3';
    $arreglo = ['Antonio', 'Cesar', 'Alejandro'];
    $arreglo_asociativo = ['Nombre' => 'Carlos', 'Edad' => 21];
    $boleano = false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>print_r</title>
</head>
<body>
<h1>UTILIZANDO print_r PARA MOSTRAR LOS VALORES DE VARIABLES</h1>
    <ul>
        <li>
            <?php print_r($texto); ?>
        </li>
        <li>
            <?php print_r($numero); ?>
        </li>
        <li>
            <?php print_r($numeroDos); ?>
        </li>
        <li>
            <?php print_r($arreglo); ?>
        </li>
        <li>
            <?php print_r($arreglo_asociativo); ?>
        </li>
    </ul>
    <h1>PARA VARIABLES BOOLEANAS SIEMPRE ES MEJOR UTILIZAR VAR_DUMP</h1>
    <ul>
        <li>
            <?php print_r($boleano . 'Si es falso no muestra nada!!!'); ?>
        </li>
        <li>
            <?php var_dump($boleano); ?>
        </li>
    </ul>
</body>
</html>