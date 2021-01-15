<?php
    # ----------------------FUNCIONES----------------

    /**
     * count() -> CONTAR NUMERO DE ELEMENTOS EN UN ARREGLO
     * sort() -> ORDENAR EN FORMA ASCENDENTE
     * rsort() -> ORDENAR EN FORMA DESCENDENTE
     * var_dump() -> MUESTRA EL VALOR Y TIPO DE VARIABLE
     * print_r() -> ES UN POCO MAS ENTENDIBLE QUE var_dump
     */
    
    function saludo(){
       echo "Estoy saludando con una función!";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    <h1><?php saludo(); ?></h1>
</body>
</html>