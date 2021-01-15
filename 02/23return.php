<?php
    # -----------RETORNANDO DE UNA FUNCION------------

    function sumar($numeroUno, $numeroDos){
        $resultado = $numeroUno + $numeroDos;
        return $resultado;
    }

    $resultado = sumar(10, 4);

    function saludo($nombre){
        return "Sludos $nombre";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RETURN</title>
</head>
<body>
    <h1>EL RESULTADO ES <?php echo $resultado; ?></h1>
    <h1><?php echo saludo('Raymundo'); ?></h1>
    <h1><?php echo saludo('Antonio'); ?></h1>
    <h1><?php echo saludo('Beatriz'); ?></h1>
</body>
</html>