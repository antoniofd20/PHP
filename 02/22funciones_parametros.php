<?php
    # ---------------PARAMETROS EN LAS FUNCIONES-------------

    function saludo($nombre){
        echo "Saludo, usuario $nombre";
    }

    function sumar($numeroUno, $numeroDos){
        $resultado = $numeroUno + $numeroDos;
        echo "El resultado de la suma entre $numeroUno y $numeroDos es: $resultado";
    }

    function restar($numeroUno, $numeroDos){
        $resultado = $numeroUno - $numeroDos;
        echo "El resultado de la resta entre $numeroUno y $numeroDos es: $resultado";
    }

    function multiplicar($numeroUno, $numeroDos){
        $resultado = $numeroUno * $numeroDos;
        echo "El resultado de la multiplicación entre $numeroUno y $numeroDos es: $resultado";
    }

    function dividir($numeroUno, $numeroDos){
        $resultado = $numeroUno / $numeroDos;
        echo "El resultado de la división entre $numeroUno y $numeroDos es: $resultado";
    }

    function operaciones($operacion, $numeroUno, $numeroDos){
        if($operacion == 1){
            $resultado = $numeroUno + $numeroDos;
            echo "El resultado de la suma entre $numeroUno y $numeroDos es: $resultado";
        } else if($operacion == 2){
            $resultado = $numeroUno - $numeroDos;
            echo "El resultado de la resta entre $numeroUno y $numeroDos es: $resultado";
        } else if($operacion == 3){
            $resultado = $numeroUno * $numeroDos;
            echo "El resultado de la multiplicación entre $numeroUno y $numeroDos es: $resultado";
        } else {
            $resultado = $numeroUno / $numeroDos;
            echo "El resultado de la división entre $numeroUno y $numeroDos es: $resultado";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARGUMENTOS EN LAS FUNCIONES</title>
</head>
<body>
    <h1>PASANDO ARGUMENTOS EN LAS FUNCIONES</h1>
    <h3><?php saludo('Ray'); ?></h3>
    <h3><?php saludo('Toño'); ?></h3>
    <h3><?php sumar(5, 6); ?></h3>
    <h3><?php restar(5, 6); ?></h3>
    <h3><?php multiplicar(5, 6); ?></h3>
    <h3><?php dividir(5, 6); ?></h3>
    <p>SI QUIERES SUMAR: 1, RESTAR: 2, MULTIPLICAR: 3, DIVIDIR: 4.</p>
    <ul>
        <li>
            <?php operaciones(1, 10, 14);?>
        </li>
        <li>
            <?php operaciones(2, 10, 14);?>   
        </li>
        <li>
            <?php operaciones(3, 10, 14);?>
        </li>
        <li>
            <?php operaciones(4, 10, 14);?>
        </li>
    </ul>

</body>
</html>