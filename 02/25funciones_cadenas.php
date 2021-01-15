<?php
    # -----------FUNCIONES UTILES PARA CADENAS DE TEXTO -------

    # CONVERTIR CARACTERES ESPECIALES EN CODIGO HTML
    # SIRVE PARA EVITAR QUE EL USUARIO INYECTE CODIGO
    $caracteres = '< > = <br/>';

    $trim = ' hola ';
    $texto = 'Este es un texto LARGO';

    $upper = strtoupper($texto);
    $lower = strtolower($texto);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    <h1>htmlspecialchars</h1>
    <h3><?php echo htmlspecialchars($caracteres); ?></h3>
    
    <h1>trim</h1>
    <h3><?php echo trim($trim) . ' SI ESPACIOS NI AL PRINCIPIO NI AL FINAL '; ?></h3>

    <h1>strlen PARA SABER LA LONGITUD DE UN STRING</h1>
    <h3><?php echo strlen($caracteres); ?></h3>

    <h1>substr PARA SUBSTRAER UNA PARTE DEL STRING</h1>
    <h3><?php echo substr($caracteres, 3, 4); ?></h3>

    <h1>strtoupper PARA HACER UN STRING EN MAYUSCULAS</h1>
    <h3><?php echo $upper; ?></h3>

    <h1>strtolower PARA HACER UN STRING EN MINUSCULAS</h1>
    <h3><?php echo $lower; ?></h3>

    <h1>strpos PARA ENCONTRAR UNA LETRA</h1>
    <h3><?php echo strpos($texto, 'L'); ?></h3>
</body>
</html>